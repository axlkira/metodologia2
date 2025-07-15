<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class  C_ppc1p4n6 extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->model('/perfilproductivo/m_ppc1p4n6');//carga el controlador modelo
    }

    //funcion encargada de llamar a la vista de la pagina 
    public function fc_ppc1p4n6($page = 'v_ppc1p4n6') {

        if (!file_exists('application/views/pages/perfilproductivo/' . $page . '.php')) {
            // Whoops, we don't have a page for that!
            show_404();
        }
        $idintegrante = $this->input->get('idintegrante');
        $cfolio = $this->input->get('folio');//tomamos el valor del vivienda que viene por get

        //para traer la informacion de ayudas
        $cayudas = $this->m_ppc1p4n6->fm_ayudas();
        $ctextoayuda = '';
        foreach ($cayudas as $cayuda)
        {
            $ctextoayuda =  $cayuda->ayuda;
        }
        //Fin ayudas 
        
        //incio traer datos generales
        $cdatosgenerales = $this->m_ppc1p4n6->fm_cargardatosgenerales($cfolio,$idintegrante);
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
        $crespuestas = $this->m_ppc1p4n6->fm_buscarpregunta($idintegrante);
        $carrayrespuestas= array('eppc1p4n6' => '','eppc1p4n6cual' => ''); 
        foreach ($crespuestas as $crespuesta)
        {
            $carrayrespuestas = array('eppc1p4n6' => $crespuesta->ppc1p4n6,'eppc1p4n6cual' => $crespuesta->ppc1p4n6cual);
        }
        //fin traer datos generales
        
        //traer una lista de valores
        $listararea = $this->m_ppc1p4n6->fm_listarareaconocimiento();
        $areas = '';
        foreach ($listararea as $area)
        {
        $areas .= '<option value="'.$area->nombrearea.'">'.$area->nombrearea.'</option>'; //se guarda el resultado del ption value en la variable datos
        }
        //fin traer una lista de valores
         //incio traer respuestas
        $crespuestas4n1 = $this->m_ppc1p4n6->fm_buscarpregunta4n1($idintegrante);
        $carrayrespuestas4n1= array('eidorden' => ''); 
        foreach ($crespuestas4n1 as $crespuesta4n1)
        {
            $carrayrespuestas4n1 = array('eidorden' => $crespuesta4n1->idorden);
        }
        //fin traer datos generales
        
       //Levantar vista     
        $titulo = 'Cap I - Pregunta 4.6'; // para el titulo de la vista en la pestaña
        $this->load->view('pages/perfilproductivo/' . $page,  array('titulo' => $titulo, 
                                                   'foot' => FOOTS, 
                                                   'head' => HEAD, 
                                                  'botonerag' => BOTONERAG2, 
                                                   'botoneraa' => BOTONERAA2,
                                                   'folio' => $cfolio,
                                                   'idintegrante' => $idintegrante,
                                                   'textoayuda' => $ctextoayuda, 
                                                   'arraydatosgenerales' => $carraydatosgenerales, 
                                                   'arrayrespuestas' => $carrayrespuestas,
                                                   'areasconocimiento' => $areas,
                                                   'arrayrespuestas4n1' => $carrayrespuestas4n1));
        //Fin levantar vista
         
    }
    
    
    //funcion para actualizar
    public function fc_actualizar()
    {
        $cfolio = $this->input->get('vfolio');
        $cidintegrante= $this->input->get('vidintegrante');  
        $cppc1p4n6= $this->input->get('vppc1p4n6');
        $cppc1p4n6cual= $this->input->get('vppc1p4n6cual');
        
        $this->m_ppc1p4n6->fm_actualizarpregunta($cfolio,$cidintegrante,$cppc1p4n6,$cppc1p4n6cual);
       //echo json_encode(array('result' => 'guardado'));
    }
    //fin funcion para actualizar
    
}
