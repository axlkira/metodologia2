<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class  C_c11p4 extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->model('m_c11p4');//carga el controlador modelo
    }

    //funcion encargada de llamar a la vista de la pagina 
    public function fc_c11p4($page = 'v_c11p4') {

        if (!file_exists('application/views/pages/' . $page . '.php')) {
            // Whoops, we don't have a page for that!
            show_404();
        }

        $cfolio = $this->input->get('folio');//tomamos el valor del vivienda que viene por get

        //para traer la informacion de ayudas
        $cayudas = $this->m_c11p4->fm_ayudas();
        
        $ctextoayuda = '';
        foreach ($cayudas as $cayuda)
        {
            $ctextoayuda =  $cayuda->ayuda;
        }
        //Fin ayudas 
        
        //incio traer datos generales
        $cdatosgenerales = $this->m_c11p4->fm_cargardatosgenerales($cfolio);
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
        $crespuestas = $this->m_c11p4->fm_buscarpregunta($cfolio);
        
        $carrayrespuestas = array('ec11p4o1' =>'','ec11p4o2' => '','ec11p4o3' => '','ec11p4o4' => '','ec11p4o5' => '','ec11p4o6' => '',
                                  'ec11p4cual' => '','ec6menores18' => ''); 
        foreach ($crespuestas as $crespuesta)
        {
            $carrayrespuestas = array('ec11p4o1'=>$crespuesta->c11p4o1,'ec11p4o2'=>$crespuesta->c11p4o2,'ec11p4o3'=>$crespuesta->c11p4o3,
                                      'ec11p4o4'=>$crespuesta->c11p4o4,'ec11p4o5'=>$crespuesta->c11p4o5,'ec11p4o6'=>$crespuesta->c11p4o6,
                                      'ec11p4cual'=>$crespuesta->c11p4cual,'ec6menores18'=>$crespuesta->c6menores18);
        }
        //fin traer datos generales
        
       //Levantar vista     
        $titulo = 'Cap XI - Pregunta 4'; // para el titulo de la vista en la pestaña
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
        $cvalorc11p4o1= $this->input->get('vc11p4o1');
        $cvalorc11p4o2= $this->input->get('vc11p4o2');
        $cvalorc11p4o3= $this->input->get('vc11p4o3');
        $cvalorc11p4o4= $this->input->get('vc11p4o4');
        $cvalorc11p4o5= $this->input->get('vc11p4o5');
        $cvalorc11p4o6= $this->input->get('vc11p4o6');
        $cvalorc11p4cual= $this->input->get('vc11p4cual');
        
        $this->m_c11p4->fm_actualizarpregunta($cfolio,$cvalorc11p4o1,$cvalorc11p4o2,$cvalorc11p4o3,$cvalorc11p4o4,$cvalorc11p4o5,$cvalorc11p4o6,$cvalorc11p4cual);
       //echo json_encode(array('result' => 'guardado'));
    }
    //fin funcion para actualizar
    
}
