<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class  C_c8p7 extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->model('m_c8p7');//carga el controlador modelo
    }

    //funcion encargada de llamar a la vista de la pagina 
    public function fc_c8p7($page = 'v_c8p7') {

        if (!file_exists('application/views/pages/' . $page . '.php')) {
            // Whoops, we don't have a page for that!
            show_404();
        }
        $idintegrante = $this->input->get('idintegrante');
        $cfolio = $this->input->get('folio');//tomamos el valor del vivienda que viene por get

        //para traer la informacion de ayudas
        $cayudas = $this->m_c8p7->fm_ayudas();
        $ctextoayuda = '';
        foreach ($cayudas as $cayuda)
        {
            $ctextoayuda =  $cayuda->ayuda;
        }
        //Fin ayudas 
        
        //incio traer datos generales
        $cdatosgenerales = $this->m_c8p7->fm_cargardatosgenerales($cfolio,$idintegrante);
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
        $crespuestas = $this->m_c8p7->fm_buscarpregunta($idintegrante);
        $carrayrespuestas= array('ec8p7o1' => '','ec8p7o2' => '','ec8p7o3' => '','ec8p7o4' => '','ec8p7o5' => '','ec8p7o6' => '',
                                 'ec8p7o7' => '','ec8p7o8' => '','ec8p7o9' => '','ec8p7o10' => '','ec8p7cual' => '','ec8p6' => '','ec8p5' => ''); 
        foreach ($crespuestas as $crespuesta)
        {
            $carrayrespuestas = array('ec8p7o1' => $crespuesta->c8p7o1,'ec8p7o2' => $crespuesta->c8p7o2,'ec8p7o3' => $crespuesta->c8p7o3,
                                      'ec8p7o4' => $crespuesta->c8p7o4,'ec8p7o5' => $crespuesta->c8p7o5,'ec8p7o6' => $crespuesta->c8p7o6,
                                      'ec8p7o7' => $crespuesta->c8p7o7,'ec8p7o8' => $crespuesta->c8p7o8,'ec8p7o9' => $crespuesta->c8p7o9,
                                      'ec8p7o10' => $crespuesta->c8p7o10,'ec8p7cual' => $crespuesta->c8p7cual,'ec8p6' => $crespuesta->c8p6,'ec8p5' => $crespuesta->c8p5);
        }
        //fin traer datos generales
        
       //Levantar vista     
        $titulo = 'Cap VIII - Pregunta 7'; // para el titulo de la vista en la pestaña
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
        $cc8p7o1= $this->input->get('vc8p7o1');   
        $cc8p7o2= $this->input->get('vc8p7o2');
        $cc8p7o3= $this->input->get('vc8p7o3');
        $cc8p7o4= $this->input->get('vc8p7o4');
        $cc8p7o5= $this->input->get('vc8p7o5');
        $cc8p7o6= $this->input->get('vc8p7o6');
        $cc8p7o7= $this->input->get('vc8p7o7');
        $cc8p7o8= $this->input->get('vc8p7o8');
        $cc8p7o9= $this->input->get('vc8p7o9');
        $cc8p7o10= $this->input->get('vc8p7o10');
        $cc8p7cual= $this->input->get('vc8p7cual');
        $this->m_c8p7->fm_actualizarpregunta($cfolio,$cidintegrante,$cc8p7o1,$cc8p7o2,$cc8p7o3,$cc8p7o4,$cc8p7o5,$cc8p7o6,
                $cc8p7o7,$cc8p7o8,$cc8p7o9,$cc8p7o10,$cc8p7cual);
        
        
        
        $this->m_c8p7->fm_actualizarpregunta($cfolio,$cidintegrante,$cc8p7o1,$cc8p7o2,$cc8p7o3,$cc8p7o4,$cc8p7o5,$cc8p7o6,
                $cc8p7o7,$cc8p7o8,$cc8p7o9,$cc8p7o10,$cc8p7cual);
       //echo json_encode(array('result' => 'guardado'));
    }
    //fin funcion para actualizar
    
}
