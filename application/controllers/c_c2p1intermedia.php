<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class  C_c2p1intermedia extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->model('m_c2p1intermedia');//carga el controlador modelo
    }

    //funcion encargada de llamar a la vista de la pagina 
    public function fc_c2p1intermedia($page = 'v_c2p1intermedia') {

        if (!file_exists('application/views/pages/' . $page . '.php')) {
            // Whoops, we don't have a page for that!
            show_404();
        }

        
        $cdocumento =  $this->session->userdata('documento');
        $cfolio = $this->input->get('folio');//tomamos el valor del vivienda que viene por get

        //para traer la informacion de ayudas
        $cayudas = $this->m_c2p1intermedia->fm_ayudas();
        $ctextoayuda = '';
        foreach ($cayudas as $cayuda)
        {
            $ctextoayuda =  $cayuda->ayuda;
        }
        //Fin ayudas 
        
        //incio traer datos generales
        $cdatosgenerales = $this->m_c2p1intermedia->fm_cargardatosgenerales($cfolio);
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
        $crespuestas = $this->m_c2p1intermedia->fm_buscarpregunta($cfolio);
        $carrayrespuestas= array('c2p1intermedia' => '','c2p1intermediacual' => '','c2p11intermedia' => ''); 
        foreach ($crespuestas as $crespuesta)
        {
            $carrayrespuestas = array('c2p1intermedia' => $crespuesta->c2p1intermedia,
                                      'c2p1intermediacual' => $crespuesta->c2p1intermediacual,
                                      'c2p11intermedia' => $crespuesta->c2p11intermedia);
        }
        //fin traer datos generales
        
       //Levantar vista     
        $titulo = 'Cap II - Pregunta 1'; // para el titulo de la vista en la pestaña
        $this->load->view('pages/' . $page,  array('titulo' => $titulo, 
                                                   'foot' => FOOTS, 
                                                   'head' => HEAD, 
                                                   'botoneraginterh' => BOTONERAGINTERH, 
                                                   'botoneraainterh' => BOTONERAAINTERH,
                                                   'folio' => $cfolio,
                                                   'cdocumento'=>$cdocumento,
                                                   'textoayuda' => $ctextoayuda, 
                                                   'arraydatosgenerales' => $carraydatosgenerales, 
                                                   'arrayrespuestas' => $carrayrespuestas));
        //Fin levantar vista
         
    }
    
    
    //funcion para actualizar
    public function fc_actualizar()
    {
        $cfolio = $this->input->get('vfolio');
        $cvalorc2p1intermedia= $this->input->get('vvalorc2p1intermedia');
        $cvalorc2p1intermediacual= $this->input->get('vvalorc2p1intermediacual');
        $this->m_c2p1intermedia->fm_actualizarpregunta($cfolio,$cvalorc2p1intermedia,$cvalorc2p1intermediacual);
       //echo json_encode(array('result' => 'guardado'));
    }
    //fin funcion para actualizar
    
}
