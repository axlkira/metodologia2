<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class  C_c10p3 extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->model('m_c10p3');//carga el controlador modelo
    }

    //funcion encargada de llamar a la vista de la pagina 
    public function fc_c10p3($page = 'v_c10p3') {

        if (!file_exists('application/views/pages/' . $page . '.php')) {
            // Whoops, we don't have a page for that!
            show_404();
        }
        $idintegrante = $this->input->get('idintegrante');
        $cfolio = $this->input->get('folio');//tomamos el valor del vivienda que viene por get

        //para traer la informacion de ayudas
        $cayudas = $this->m_c10p3->fm_ayudas();
        $ctextoayuda = '';
        foreach ($cayudas as $cayuda)
        {
            $ctextoayuda =  $cayuda->ayuda;
        }
        //Fin ayudas 
        
        //incio traer datos generales
        $cdatosgenerales = $this->m_c10p3->fm_cargardatosgenerales($cfolio,$idintegrante);
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
        $crespuestas = $this->m_c10p3->fm_buscarpregunta($idintegrante);
        $carrayrespuestas= array('ec10p3o1' => '','ec10p3o2' => '','ec10p3o3' => '','ec10p3o4' => '','ec10p3o5' => '','ec10p3o6' => '',
                                 'ec10p3o7' => '','ec10p3o8' => '','ec10p3o9' => '','ec10p3o10' => ''); 
        foreach ($crespuestas as $crespuesta)
        {
            $carrayrespuestas = array('ec10p3o1' => $crespuesta->c10p3o1,'ec10p3o2' => $crespuesta->c10p3o2,'ec10p3o3' => $crespuesta->c10p3o3,
                                      'ec10p3o4' => $crespuesta->c10p3o4,'ec10p3o5' => $crespuesta->c10p3o5,'ec10p3o6' => $crespuesta->c10p3o6,
                                      'ec10p3o7' => $crespuesta->c10p3o7,'ec10p3o8' => $crespuesta->c10p3o8,'ec10p3o9' => $crespuesta->c10p3o9,
                                      'ec10p3o10' => $crespuesta->c10p3o10);
        }
        //fin traer datos generales
        
       //Levantar vista     
        $titulo = 'Cap X - Pregunta 3'; // para el titulo de la vista en la pestaña
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
        $cc10p3o1= $this->input->get('vc10p3o1');   
        $cc10p3o2= $this->input->get('vc10p3o2');
        $cc10p3o3= $this->input->get('vc10p3o3');
        $cc10p3o4= $this->input->get('vc10p3o4');
        $cc10p3o5= $this->input->get('vc10p3o5');
        $cc10p3o6= $this->input->get('vc10p3o6');
        $cc10p3o7= $this->input->get('vc10p3o7');
        $cc10p3o8= $this->input->get('vc10p3o8');
        $cc10p3o9= $this->input->get('vc10p3o9');
        $cc10p3o10= $this->input->get('vc10p3o10');
        $this->m_c10p3->fm_actualizarpregunta($cfolio,$cidintegrante,$cc10p3o1,$cc10p3o2,$cc10p3o3,$cc10p3o4,$cc10p3o5,$cc10p3o6,
                $cc10p3o7,$cc10p3o8,$cc10p3o9,$cc10p3o10);
        
        
        
       
    }
    //fin funcion para actualizar
    
}
