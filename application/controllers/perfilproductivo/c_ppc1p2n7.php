<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class  C_ppc1p2n7 extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->model('/perfilproductivo/m_ppc1p2n7');//carga el controlador modelo
    }

    //funcion encargada de llamar a la vista de la pagina 
    public function fc_ppc1p2n7($page = 'v_ppc1p2n7') {

        if (!file_exists('application/views/pages/perfilproductivo/' . $page . '.php')) {
            // Whoops, we don't have a page for that!
            show_404();
        }
        $idintegrante = $this->input->get('idintegrante');
        $cfolio = $this->input->get('folio');//tomamos el valor del vivienda que viene por get

        //para traer la informacion de ayudas
        $cayudas = $this->m_ppc1p2n7->fm_ayudas();
        $ctextoayuda = '';
        foreach ($cayudas as $cayuda)
        {
            $ctextoayuda =  $cayuda->ayuda;
        }
        //Fin ayudas 
        
        //incio traer datos generales
        $cdatosgenerales = $this->m_ppc1p2n7->fm_cargardatosgenerales($cfolio,$idintegrante);
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
        $crespuestas = $this->m_ppc1p2n7->fm_buscarpregunta($idintegrante);
        $carrayrespuestas= array('eppc1p2n7' => '','eppc1p2n7categoriaa' => '','eppc1p2n7categoriab' => '','eppc1p2n7categoriac' => ''); 
        foreach ($crespuestas as $crespuesta)
        {
            $carrayrespuestas = array('eppc1p2n7' => $crespuesta->ppc1p2n7,'eppc1p2n7categoriaa' => $crespuesta->ppc1p2n7categoriaa,
                                     'eppc1p2n7categoriab' => $crespuesta->ppc1p2n7categoriab,'eppc1p2n7categoriac' => $crespuesta->ppc1p2n7categoriac);
        }
        //fin traer datos generales
        
       //Levantar vista     
        $titulo = 'Cap I - Pregunta 2.7'; // para el titulo de la vista en la pestaña
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
        $cvalorppc1p2n7= $this->input->get('vvalorppc1p2n7');
        $cvalorppc1p2n7cata= $this->input->get('vvalorppc1p2n7cata');
        $cvalorppc1p2n7catb= $this->input->get('vvalorppc1p2n7catb');
        $cvalorppc1p2n7catc= $this->input->get('vvalorppc1p2n7catc');
        $this->m_ppc1p2n7->fm_actualizarpregunta($cfolio,$cidintegrante,$cvalorppc1p2n7,$cvalorppc1p2n7cata,$cvalorppc1p2n7catb,$cvalorppc1p2n7catc);
       //echo json_encode(array('result' => 'guardado'));
    }
    //fin funcion para actualizar
    
}
