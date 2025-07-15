<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class  C_ppc1p2n3 extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->model('/perfilproductivo/m_ppc1p2n3');//carga el controlador modelo
    }

    //funcion encargada de llamar a la vista de la pagina 
    public function fc_ppc1p2n3($page = 'v_ppc1p2n3') {

        if (!file_exists('application/views/pages/perfilproductivo/' . $page . '.php')) {
            // Whoops, we don't have a page for that!
            show_404();
        }
        $idintegrante = $this->input->get('idintegrante');
        $cfolio = $this->input->get('folio');//tomamos el valor del vivienda que viene por get

        //para traer la informacion de ayudas
        $cayudas = $this->m_ppc1p2n3->fm_ayudas();
        $ctextoayuda = '';
        foreach ($cayudas as $cayuda)
        {
            $ctextoayuda =  $cayuda->ayuda;
        }
        //Fin ayudas 
        //incio traer datos generales
        $cdatosgenerales = $this->m_ppc1p2n3->fm_cargardatosgenerales($cfolio,$idintegrante);
       $carraydatosgenerales= array('enomcoges' => '', 'efolio' =>'', 'ecapitulo' => '', 'etitular' => '','edoctitular' => '','enombreintegrante' => '','edocintegrante' => '','esexointegrante'=> '','eedadintegrante'=> ''); 
        foreach ($cdatosgenerales as $cdatgen)
        {
            $carraydatosgenerales = array('enomcoges' => $cdatgen->nomcoges,
                                          'efolio' => $cdatgen->folio, 
                                          'ecapitulo' => $cdatgen->capitulo,
                                          'etitular' => $cdatgen->titular,
                                          'edoctitular' => $cdatgen->doctitular,
                                          'enombreintegrante' => $cdatgen->nombreintegrante,
                                          'edocintegrante' => $cdatgen->docintegrante,
                                          'esexointegrante' => $cdatgen->sexointegrante,
                                          'eedadintegrante' => $cdatgen->edadintegrante);
        }
        //fin traer datos generales
        
        //incio traer respuestas
        //se trae respuesta de la linea de clasificacion c4p9 para saber si tiene libreta
        $crespuestas = $this->m_ppc1p2n3->fm_buscarpregunta($idintegrante);
        $carrayrespuestas= array('eppc1p2n3' => '','enumero_libretamilitar' => '','eclase_libretamilitar' => ''); 
        foreach ($crespuestas as $crespuesta)
        {
            $carrayrespuestas = array('eppc1p2n3' => $crespuesta->ppc1p2n3,'enumero_libretamilitar' => $crespuesta->numero_libretamilitar,'eclase_libretamilitar' => $crespuesta->clase_libretamilitar);
        }

       //Levantar vista     
        $titulo = 'Cap I - Pregunta 2.3'; // para el titulo de la vista en la pestaña
        $this->load->view('pages/perfilproductivo/' . $page,  array('titulo' => $titulo, 
                                                   'foot' => FOOTS, 
                                                   'head' => HEAD, 
                                                   'botonerag' => BOTONERAG2, 
                                                   'botoneraa' => BOTONERAA2,
                                                   'folio' => $cfolio,
                                                   'idintegrante' => $idintegrante,
                                                   'textoayuda' => $ctextoayuda, 
                                                   'arraydatosgenerales' => $carraydatosgenerales, 
                                                   'arrayrespuestas' => $carrayrespuestas));
        //Fin levantar vista
         
    }
    
    
    //funcion para actualizar
    public function fc_actualizar()
    {
        $cfolio = $this->input->get('vfolio');
        $cidintegrante= $this->input->get('vidintegrante');  
        $cvalorc4p9= $this->input->get('vvalorc4p9'); 
        $cppc1p2n3n= $this->input->get('vppc1p2n3n'); 
        $cvalorppc1p2n3c= $this->input->get('vvalorppc1p2n3c'); 
        $this->m_ppc1p2n3->fm_actualizarpregunta($cfolio,$cidintegrante,$cvalorc4p9,$cppc1p2n3n,$cvalorppc1p2n3c);
       //echo json_encode(array('result' => 'guardado'));
    }
    //fin funcion para actualizar
    
}
