<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class  C_c3p1a extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->model('m_c3p1a');//carga el controlador modelo
    }

    //funcion encargada de llamar a la vista de la pagina 
    public function fc_c3p1a($page = 'v_c3p1a') {

        if (!file_exists('application/views/pages/' . $page . '.php')) {
            // Whoops, we don't have a page for that!
            show_404();
        }

        $cfolio = $this->input->get('folio');//tomamos el valor del vivienda que viene por get

        //para traer la informacion de ayudas
        $cayudas = $this->m_c3p1a->fm_ayudas();
        $ctextoayuda = '';
        foreach ($cayudas as $cayuda)
        {
            $ctextoayuda =  $cayuda->ayuda;
        }
        //Fin ayudas 
        
        //incio traer datos generales
        $cdatosgenerales = $this->m_c3p1a->fm_cargardatosgenerales($cfolio);
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
        $crespuestas = $this->m_c3p1a->fm_buscarpregunta($cfolio);
        $carrayrespuestas= array('ec3p1ao1' => '','ec3p1ao2' => '','ec3p1ao3' => '','ec3p1ao4' => '','ec3p1ao5' => ''); 
        foreach ($crespuestas as $crespuesta)
        {
            $carrayrespuestas = array('ec3p1ao1' => $crespuesta->c3p1ao1,'ec3p1ao2' => $crespuesta->c3p1ao2,'ec3p1ao3' => $crespuesta->c3p1ao3,'ec3p1ao4' => $crespuesta->c3p1ao4,'ec3p1ao5' => $crespuesta->c3p1ao5);
        }
        //fin traer datos generales
        
       //Levantar vista     
        $titulo = 'Cap III - Pregunta 1a'; // para el titulo de la vista en la pestaña
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
        $cvalorc3p1ao1= $this->input->get('vc3p1ao1');   
        $cvalorc3p1ao2= $this->input->get('vc3p1ao2');
        $cvalorc3p1ao3= $this->input->get('vc3p1ao3');
        $cvalorc3p1ao4= $this->input->get('vc3p1ao4');
        $cvalorc3p1ao5= $this->input->get('vc3p1ao5');
        $this->m_c3p1a->fm_actualizarpregunta($cfolio,$cvalorc3p1ao1,$cvalorc3p1ao2,$cvalorc3p1ao3,$cvalorc3p1ao4,$cvalorc3p1ao5);
       //echo json_encode(array('result' => 'guardado'));
    }
    //fin funcion para actualizar
    
}
