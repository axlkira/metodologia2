<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class  C_c5p3 extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->model('m_c5p3');//carga el controlador modelo
    }

    //funcion encargada de llamar a la vista de la pagina 
    public function fc_c5p3($page = 'v_c5p3') {

        if (!file_exists('application/views/pages/' . $page . '.php')) {
            // Whoops, we don't have a page for that!
            show_404();
        }
        $idintegrante = $this->input->get('idintegrante');
        $cfolio = $this->input->get('folio');//tomamos el valor del vivienda que viene por get

        //para traer la informacion de ayudas
        $cayudas = $this->m_c5p3->fm_ayudas();
        $ctextoayuda = '';
        foreach ($cayudas as $cayuda)
        {
            $ctextoayuda =  $cayuda->ayuda;
        }
        //Fin ayudas 
        
        //incio traer datos generales
        $cdatosgenerales = $this->m_c5p3->fm_cargardatosgenerales($cfolio,$idintegrante);
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
        $crespuestas = $this->m_c5p3->fm_buscarpregunta($idintegrante);
        $carrayrespuestas= array('ec5p3o1' => '','ec5p3o2' => '','ec5p3o3' => '','ec5p3o4' => '','ec5p3o5' => '', 'ec5p4' => ''); 
        foreach ($crespuestas as $crespuesta)
        {
            $carrayrespuestas = array('ec5p3o1' => $crespuesta->c5p3o1,'ec5p3o2' => $crespuesta->c5p3o2,'ec5p3o3' => $crespuesta->c5p3o3,
                                      'ec5p3o4' => $crespuesta->c5p3o4,'ec5p3o5' => $crespuesta->c5p3o5, 'ec5p4'=> $crespuesta-> c5p4
                                      );
        }
        //fin traer datos generales
        
       //Levantar vista     
        $titulo = 'Cap V - Pregunta 3'; // para el titulo de la vista en la pestaña
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
        $cc5p3o1= $this->input->get('vc5p3o1');   
        $cc5p3o2= $this->input->get('vc5p3o2');
        $cc5p3o3= $this->input->get('vc5p3o3');
        $cc5p3o4= $this->input->get('vc5p3o4');
        $cc5p3o5= $this->input->get('vc5p3o5');        
        $this->m_c5p3->fm_actualizarpregunta($cfolio,$cidintegrante,$cc5p3o1,$cc5p3o2,$cc5p3o3,$cc5p3o4,$cc5p3o5);
        
        
        
       
    }
    //fin funcion para actualizar
    
}
