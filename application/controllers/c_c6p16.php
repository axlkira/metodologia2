<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class  C_c6p16 extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->model('m_c6p16');//carga el controlador modelo
    }

    //funcion encargada de llamar a la vista de la pagina 
    public function fc_c6p16($page = 'v_c6p16') {

        if (!file_exists('application/views/pages/' . $page . '.php')) {
            // Whoops, we don't have a page for that!
            show_404();
        }

        $cfolio = $this->input->get('folio');//tomamos el valor del vivienda que viene por get

        //para traer la informacion de ayudas
        $cayudas = $this->m_c6p16->fm_ayudas();
        $ctextoayuda = '';
        foreach ($cayudas as $cayuda)
        {
            $ctextoayuda =  $cayuda->ayuda;
        }
        //Fin ayudas 
        
        //incio traer datos generales
        $cdatosgenerales = $this->m_c6p16->fm_cargardatosgenerales($cfolio);
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
        $crespuestas = $this->m_c6p16->fm_buscarpregunta($cfolio);
        $carrayrespuestas= array('ec6p16o1' => '','ec6p16o2' => '','ec6p16o3' => '','ec6p16o4' => '','ec6p16o5' => '',
                                'ec6p16o6' => '','ec6p16o7' => '','ec6p16o8' => '','ec6p16o9' => '','ec6p16o10' => '','ec6p16cual' => '','ec6menores18' => '','ec1p13' => ''); 
        foreach ($crespuestas as $crespuesta)
        {
            $carrayrespuestas = array('ec6p16o1' => $crespuesta->c6p16o1,'ec6p16o2' => $crespuesta->c6p16o2,'ec6p16o3' => $crespuesta->c6p16o3,'ec6p16o4' => $crespuesta->c6p16o4,
                'ec6p16o5' => $crespuesta->c6p16o5,'ec6p16o6' => $crespuesta->c6p16o6,'ec6p16o7' => $crespuesta->c6p16o7,'ec6p16o8' => $crespuesta->c6p16o8,
                'ec6p16o9' => $crespuesta->c6p16o9,'ec6p16o10' => $crespuesta->c6p16o10,'ec6p16cual' => $crespuesta->c6p16cual,'ec6menores18' => $crespuesta->c6menores18,'ec1p13' => $crespuesta->c1p13);
        }
        //fin traer datos generales
        
       //Levantar vista     
        $titulo = 'Cap VI - Pregunta 17'; // para el titulo de la vista en la pestaña
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
        $cvalorc6p16o1= $this->input->get('vc6p16o1');   
        $cvalorc6p16o2= $this->input->get('vc6p16o2');
        $cvalorc6p16o3= $this->input->get('vc6p16o3');
        $cvalorc6p16o4= $this->input->get('vc6p16o4');
        $cvalorc6p16o5= $this->input->get('vc6p16o5');
        $cvalorc6p16o6= $this->input->get('vc6p16o6');
        $cvalorc6p16o7= $this->input->get('vc6p16o7');
        $cvalorc6p16o8= $this->input->get('vc6p16o8');
        $cvalorc6p16o9= $this->input->get('vc6p16o9');
        $cvalorc6p16o10= $this->input->get('vc6p16o10');
        $cvc6p16cual= $this->input->get('vc6p16cual');
        $this->m_c6p16->fm_actualizarpregunta($cfolio,$cvalorc6p16o1,$cvalorc6p16o2,$cvalorc6p16o3,$cvalorc6p16o4,
                         $cvalorc6p16o5,$cvalorc6p16o6,$cvalorc6p16o7,$cvalorc6p16o8,$cvalorc6p16o9,$cvalorc6p16o10,$cvc6p16cual);
       //echo json_encode(array('result' => 'guardado'));
    }
    //fin funcion para actualizar
    
}
