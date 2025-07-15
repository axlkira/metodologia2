<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class  C_c5p4 extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->model('m_c5p4');//carga el controlador modelo
    }

    //funcion encargada de llamar a la vista de la pagina 
    public function fc_c5p4($page = 'v_c5p4') {

        if (!file_exists('application/views/pages/' . $page . '.php')) {
            // Whoops, we don't have a page for that!
            show_404();
        }
        $idintegrante = $this->input->get('idintegrante');
        $cfolio = $this->input->get('folio');//tomamos el valor del vivienda que viene por get

        //para traer la informacion de ayudas
        $cayudas = $this->m_c5p4->fm_ayudas();
        $ctextoayuda = '';
        foreach ($cayudas as $cayuda)
        {
            $ctextoayuda =  $cayuda->ayuda;
        }
        //Fin ayudas 
        
        //incio traer datos generales
        $cdatosgenerales = $this->m_c5p4->fm_cargardatosgenerales($cfolio,$idintegrante);
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
        $crespuestas = $this->m_c5p4->fm_buscarpregunta($idintegrante);
        $carrayrespuestas= array('ec5p4' => '','ec5p5o5' => '');
        foreach ($crespuestas as $crespuesta)
        {
            $carrayrespuestas = array('ec5p4' => $crespuesta->c5p4,'ec5p5o5' => $crespuesta->c5p5o5);
        }
        //fin traer datos generales
        
       //Levantar vista     
        $titulo = 'Cap V - Pregunta 4'; // para el titulo de la vista en la pestaña
        $this->load->view('pages/' . $page,  array('titulo' => $titulo, 
                                                   'foot' => FOOTS, 
                                                   'head' => HEAD, 
                                                   'botonerag' => BOTONERAG, 
                                                   'botoneraa' => BOTONERAA,
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
        $cvalorc5p4= $this->input->get('vvalorc5p4');        
        $this->m_c5p4->fm_actualizarpregunta($cfolio,$cidintegrante,$cvalorc5p4);
       //echo json_encode(array('result' => 'guardado'));
    }
    //fin funcion para actualizar
//    public function fc_spsaltoc5p4ac6()
//   {
//       $cfolio = $this->input->get('vfolio');
//       $cidintegrante = $this->input->get('vidintegrante');
//       
//       $this->m_c5p4->fm_sspsaltoc5p4ac6($cfolio,$cidintegrante);
//       //echo json_encode(array('result' => 'guardado'));
//       
//   }
//    public function fc_spsaltoc5p4ap21()
//   {
//       $cfolio = $this->input->get('vfolio');
//       $cidintegrante = $this->input->get('vidintegrante');
//       
//       $this->m_c5p4->fm_spsaltoc5p4ap21($cfolio,$cidintegrante);
//       //echo json_encode(array('result' => 'guardado'));
//       
//   }
   
}
