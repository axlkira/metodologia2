<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class  C_c5p5 extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->model('m_c5p5');//carga el controlador modelo
    }

    //funcion encargada de llamar a la vista de la pagina 
    public function fc_c5p5($page = 'v_c5p5') {

        if (!file_exists('application/views/pages/' . $page . '.php')) {
            // Whoops, we don't have a page for that!
            show_404();
        }
        $idintegrante = $this->input->get('idintegrante');
        $cfolio = $this->input->get('folio');//tomamos el valor del vivienda que viene por get

        //para traer la informacion de ayudas
        $cayudas = $this->m_c5p5->fm_ayudas();
        $ctextoayuda = '';
        foreach ($cayudas as $cayuda)
        {
            $ctextoayuda =  $cayuda->ayuda;
        }
        //Fin ayudas 
        
        //incio traer datos generales
        $cdatosgenerales = $this->m_c5p5->fm_cargardatosgenerales($cfolio,$idintegrante);
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
        $crespuestas = $this->m_c5p5->fm_buscarpregunta($idintegrante);
        $carrayrespuestas= array('ec5p5o1' => '','ec5p5o2' => '','ec5p5o3' => '','ec5p5o4' => '','ec5p5o5' => '','ec5p5o6' => '',
                                 'ec5p5o7' => '','ec5p5o8' => '','ec5p5o9' => '','ec5p5o10' => '','ec5p5o11' => '','ec5p5o12' => '','ec5p5o13' => '','ec5p5cual' => ''); 
        foreach ($crespuestas as $crespuesta)
        {
            $carrayrespuestas = array('ec5p5o1' => $crespuesta->c5p5o1,'ec5p5o2' => $crespuesta->c5p5o2,'ec5p5o3' => $crespuesta->c5p5o3,
                                      'ec5p5o4' => $crespuesta->c5p5o4,'ec5p5o5' => $crespuesta->c5p5o5,'ec5p5o6' => $crespuesta->c5p5o6,
                                      'ec5p5o7' => $crespuesta->c5p5o7,'ec5p5o8' => $crespuesta->c5p5o8,'ec5p5o9' => $crespuesta->c5p5o9,'ec5p5o10' => $crespuesta->c5p5o10,'ec5p5o11' => $crespuesta->c5p5o11,'ec5p5o12' => $crespuesta->c5p5o12,'ec5p5o13' => $crespuesta->c5p5o13,'ec5p5cual' => $crespuesta->c5p5cual);
        }
        //fin traer datos generales
        
       //Levantar vista     
        $titulo = 'Cap V - Pregunta 5'; // para el titulo de la vista en la pestaña
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
        $cc5p5o1= $this->input->get('vc5p5o1');   
        $cc5p5o2= $this->input->get('vc5p5o2');
        $cc5p5o3= $this->input->get('vc5p5o3');
        $cc5p5o4= $this->input->get('vc5p5o4');
        $cc5p5o5= $this->input->get('vc5p5o5');
        $cc5p5o6= $this->input->get('vc5p5o6');
        $cc5p5o7= $this->input->get('vc5p5o7');
        $cc5p5o8= $this->input->get('vc5p5o8'); 
        $cc5p5o9= $this->input->get('vc5p5o9');
        $cc5p5o10= $this->input->get('vc5p5o10');
        $cc5p5o11= $this->input->get('vc5p5o11');
        $cc5p5o12= $this->input->get('vc5p5o12');
        $cc5p5o13= $this->input->get('vc5p5o13');
        $cc5p5cual= $this->input->get('vc5p5cual');
        
        $this->m_c5p5->fm_actualizarpregunta($cfolio,$cidintegrante,$cc5p5o1,$cc5p5o2,$cc5p5o3,$cc5p5o4,$cc5p5o5,$cc5p5o6,
                $cc5p5o7,$cc5p5o8,$cc5p5o9,$cc5p5o10,$cc5p5o11,$cc5p5o12,$cc5p5o13,$cc5p5cual);
        
        
        
       
    }
    //fin funcion para actualizar
    
}
