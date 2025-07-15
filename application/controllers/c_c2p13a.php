<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class  C_c2p13a extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->model('m_c2p13a');//carga el controlador modelo
    }

    //funcion encargada de llamar a la vista de la pagina 
    public function fc_c2p13a($page = 'v_c2p13a') {

        if (!file_exists('application/views/pages/' . $page . '.php')) {
            // Whoops, we don't have a page for that!
            show_404();
        }

        $cfolio = $this->input->get('folio');//tomamos el valor del vivienda que viene por get

        //para traer la informacion de ayudas
        $cayudas = $this->m_c2p13a->fm_ayudas();
        $ctextoayuda = '';
        foreach ($cayudas as $cayuda)
        {
            $ctextoayuda =  $cayuda->ayuda;
        }
        //Fin ayudas 
        
        //incio traer datos generales
        $cdatosgenerales = $this->m_c2p13a->fm_cargardatosgenerales($cfolio);
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
        $crespuestas = $this->m_c2p13a->fm_buscarpregunta($cfolio);
        $carrayrespuestas= array('ec2p13ao1' => '','ec2p13ao2' => '','ec2p13ao3' => '','ec2p13ao4' => '','ec2p13ao5' => '','ec2p13acual' => ''); 
        foreach ($crespuestas as $crespuesta)
        {
            $carrayrespuestas = array('ec2p13ao1' => $crespuesta->c2p13ao1,'ec2p13ao2' => $crespuesta->c2p13ao2,'ec2p13ao3' => $crespuesta->c2p13ao3,'ec2p13ao4' => $crespuesta->c2p13ao4,'ec2p13ao5' => $crespuesta->c2p13ao5,'ec2p13acual' => $crespuesta->c2p13acual);
        }
        //fin traer datos generales
        
       //Levantar vista     
        $titulo = 'Cap II - Pregunta 13a'; // para el titulo de la vista en la pestaña
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
        $cvalorc2p13ao1= $this->input->get('vc2p13ao1');   
        $cvalorc2p13ao2= $this->input->get('vc2p13ao2');
        $cvalorc2p13ao3= $this->input->get('vc2p13ao3');
        $cvalorc2p13ao4= $this->input->get('vc2p13ao4');
        $cvalorc2p13ao5= $this->input->get('vc2p13ao5');
        $cvalorc2p13acual= $this->input->get('vc2p13acual');
        $this->m_c2p13a->fm_actualizarpregunta($cfolio,$cvalorc2p13ao1,$cvalorc2p13ao2,$cvalorc2p13ao3,$cvalorc2p13ao4,$cvalorc2p13ao5,$cvalorc2p13acual);
       //echo json_encode(array('result' => 'guardado'));
    }
    //fin funcion para actualizar
    
}
