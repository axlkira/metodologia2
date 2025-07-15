<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class  C_c6p17a extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->model('m_c6p17a');//carga el controlador modelo
    }

    //funcion encargada de llamar a la vista de la pagina 
    public function fc_c6p17a($page = 'v_c6p17a') {

        if (!file_exists('application/views/pages/' . $page . '.php')) {
            // Whoops, we don't have a page for that!
            show_404();
        }

        $cfolio = $this->input->get('folio');//tomamos el valor del vivienda que viene por get

        //para traer la informacion de ayudas
        $cayudas = $this->m_c6p17a->fm_ayudas();
        $ctextoayuda = '';
        foreach ($cayudas as $cayuda)
        {
            $ctextoayuda =  $cayuda->ayuda;
        }
        //Fin ayudas 
        
        //incio traer datos generales
        $cdatosgenerales = $this->m_c6p17a->fm_cargardatosgenerales($cfolio);
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
        $crespuestas = $this->m_c6p17a->fm_buscarpregunta($cfolio);
        $carrayrespuestas= array('ec6p17ao1' => '','ec6p17ao2' => '','ec6p17ao3' => '','ec6p17ao4' => '','ec6p17ao5' => '',
                                'ec6p17ao6' => '','ec6p17ao7' => '','ec6p17ao8' => '','ec6p17ao9' => '','ec6p17ao10' => '','ec6p17ao11' => ''); 
        foreach ($crespuestas as $crespuesta)
        {
            $carrayrespuestas = array('ec6p17ao1' => $crespuesta->c6p17ao1,'ec6p17ao2' => $crespuesta->c6p17ao2,'ec6p17ao3' => $crespuesta->c6p17ao3,'ec6p17ao4' => $crespuesta->c6p17ao4,
                'ec6p17ao5' => $crespuesta->c6p17ao5,'ec6p17ao6' => $crespuesta->c6p17ao6,'ec6p17ao7' => $crespuesta->c6p17ao7,'ec6p17ao8' => $crespuesta->c6p17ao8,
                'ec6p17ao9' => $crespuesta->c6p17ao9,'ec6p17ao10' => $crespuesta->c6p17ao10,'ec6p17ao11' => $crespuesta->c6p17ao11);
        }
        //fin traer datos generales
        
       //Levantar vista     
        $titulo = 'Cap VI - Pregunta 17a'; // para el titulo de la vista en la pestaña
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
        $cvalorc6p17ao1= $this->input->get('vc6p17ao1');   
        $cvalorc6p17ao2= $this->input->get('vc6p17ao2');
        $cvalorc6p17ao3= $this->input->get('vc6p17ao3');
        $cvalorc6p17ao4= $this->input->get('vc6p17ao4');
        $cvalorc6p17ao5= $this->input->get('vc6p17ao5');
        $cvalorc6p17ao6= $this->input->get('vc6p17ao6');
        $cvalorc6p17ao7= $this->input->get('vc6p17ao7');
        $cvalorc6p17ao8= $this->input->get('vc6p17ao8');
        $cvalorc6p17ao9= $this->input->get('vc6p17ao9');
        $cvalorc6p17ao10= $this->input->get('vc6p17ao10');
        $cvalorc6p17ao11= $this->input->get('vc6p17ao11');
        $this->m_c6p17a->fm_actualizarpregunta($cfolio,$cvalorc6p17ao1,$cvalorc6p17ao2,$cvalorc6p17ao3,$cvalorc6p17ao4,
                         $cvalorc6p17ao5,$cvalorc6p17ao6,$cvalorc6p17ao7,$cvalorc6p17ao8,$cvalorc6p17ao9,$cvalorc6p17ao10,$cvalorc6p17ao11);
       //echo json_encode(array('result' => 'guardado'));
    }
    //fin funcion para actualizar
    
}
