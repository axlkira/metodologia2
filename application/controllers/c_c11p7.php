<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class  C_c11p7 extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->model('m_c11p7');//carga el controlador modelo
    }

    //funcion encargada de llamar a la vista de la pagina 
    public function fc_c11p7($page = 'v_c11p7') {

        if (!file_exists('application/views/pages/' . $page . '.php')) {
            // Whoops, we don't have a page for that!
            show_404();
        }

        $cfolio = $this->input->get('folio');//tomamos el valor del vivienda que viene por get

        //para traer la informacion de ayudas
        $cayudas = $this->m_c11p7->fm_ayudas();
        
        $ctextoayuda = '';
        foreach ($cayudas as $cayuda)
        {
            $ctextoayuda =  $cayuda->ayuda;
        }
        //Fin ayudas 
        
        //incio traer datos generales
        $cdatosgenerales = $this->m_c11p7->fm_cargardatosgenerales($cfolio);
        $carraydatosgenerales= array('enomcoges' => '', 'efolio' =>'', 'ecapitulo' => '', 'etitular' => '','edoctitular' => ''); 
        foreach ($cdatosgenerales as $cdatgen)
        {
            $carraydatosgenerales = array('enomcoges' => $cdatgen->nomcoges,
                                          'efolio' => $cdatgen->folio, 
                                          'ecapitulo' => $cdatgen->capitulo,
                                          'etitular' => $cdatgen->titular,
                                          'edoctitular' => $cdatgen->doctitular);
        }
        //fin traer datos generales
        
        //incio traer respuestas
        $crespuestas = $this->m_c11p7->fm_buscarpregunta($cfolio);
        
        $carrayrespuestas = array('ec11p7o1' =>'','ec11p7o2' => '','ec11p7o3' => '','ec11p7o4' => '','ec11p7o5' => '','ec11p7o6' => '',
                                 'ec11p7o7' => '','ec11p7cual' => '','ec1p13' => ''); 
        foreach ($crespuestas as $crespuesta)
        {
            $carrayrespuestas = array('ec11p7o1'=>$crespuesta->c11p7o1,'ec11p7o2'=>$crespuesta->c11p7o2,'ec11p7o3'=>$crespuesta->c11p7o3,
                                      'ec11p7o4'=>$crespuesta->c11p7o4,'ec11p7o5'=>$crespuesta->c11p7o5,'ec11p7o6'=>$crespuesta->c11p7o6,
                                      'ec11p7o7'=>$crespuesta->c11p7o7,'ec11p7cual'=>$crespuesta->c11p7cual,'ec1p13'=>$crespuesta->c1p13);
        }
        //fin traer datos generales
        
       //Levantar vista     
        $titulo = 'Cap XI - Pregunta 7'; // para el titulo de la vista en la pestaña
        $this->load->view('pages/' . $page,  array('titulo' => $titulo, 
                                                   'foot' => FOOTS, 
                                                   'head' => HEAD, 
                                                   'botonerag' => BOTONERAG, 
                                                   'botoneraa' => BOTONERAA,
                                                   'folio' => $cfolio,
                                                   'textoayuda' => $ctextoayuda, 
                                                   'arraydatosgenerales' => $carraydatosgenerales, 
                                                   'arrayrespuestas' => $carrayrespuestas));
        //Fin levantar vista
         
    }
    
    
    //funcion para actualizar
    public function fc_actualizar()
    {
        $cfolio = $this->input->get('vfolio');
        $cvalorc11p7o1= $this->input->get('vc11p7o1');
        $cvalorc11p7o2= $this->input->get('vc11p7o2');
        $cvalorc11p7o3= $this->input->get('vc11p7o3');
        $cvalorc11p7o4= $this->input->get('vc11p7o4');
        $cvalorc11p7o5= $this->input->get('vc11p7o5');
        $cvalorc11p7o6= $this->input->get('vc11p7o6');
        $cvalorc11p7o7= $this->input->get('vc11p7o7');
        $cvalorc11p7cual= $this->input->get('vc11p7cual');
        
        $this->m_c11p7->fm_actualizarpregunta($cfolio,$cvalorc11p7o1,$cvalorc11p7o2,$cvalorc11p7o3,$cvalorc11p7o4,
                         $cvalorc11p7o5,$cvalorc11p7o6,$cvalorc11p7o7,$cvalorc11p7cual);
       //echo json_encode(array('result' => 'guardado'));
    }
    //fin funcion para actualizar
    
}
