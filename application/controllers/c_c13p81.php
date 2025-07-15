<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class  C_c13p81 extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->model('m_c13p81');//carga el controlador modelo
    }

    //funcion encargada de llamar a la vista de la pagina 
    public function fc_c13p81($page = 'v_c13p81') {

        if (!file_exists('application/views/pages/' . $page . '.php')) {
            // Whoops, we don't have a page for that!
            show_404();
        }
        
        $cfolio = $this->input->get('folio');//tomamos el valor del vivienda que viene por get

        //para traer la informacion de ayudas
        $cayudas = $this->m_c13p81->fm_ayudas();
        $ctextoayuda = '';
        foreach ($cayudas as $cayuda)
        {
            $ctextoayuda =  $cayuda->ayuda;
        }
        //Fin ayudas 
        
        //incio traer datos generales
        $cdatosgenerales = $this->m_c13p81->fm_cargardatosgenerales($cfolio);
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
        $crespuestas = $this->m_c13p81->fm_buscarpregunta($cfolio);
        $carrayrespuestas= array('ec13p81o1' => '','ec13p81o2' => '','ec13p81o3' => '','ec13p81o4' => '','ec13p81cual' => ''); 
        foreach ($crespuestas as $crespuesta)
        {
            $carrayrespuestas = array('ec13p81o1' => $crespuesta->c13p81o1,'ec13p81o2' => $crespuesta->c13p81o2,'ec13p81o3' => $crespuesta->c13p81o3,
                                     'ec13p81o4' => $crespuesta->c13p81o4,'ec13p81cual' => $crespuesta->c13p81cual);
        }
        //fin traer datos generales
        
       //Levantar vista     
        $titulo = 'Cap XIII - Pregunta 8.1'; // para el titulo de la vista en la pestaña
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
        $cvalorc13p81o1= $this->input->get('vvalorc13p81o1');
        $cvalorc13p81o2= $this->input->get('vvalorc13p81o2');
        $cvalorc13p81o3= $this->input->get('vvalorc13p81o3');
        $cvalorc13p81o4= $this->input->get('vvalorc13p81o4');
        $cvalorc13p81cual= $this->input->get('vvalorc13p81cual');
        
              
        
        $this->m_c13p81->fm_actualizarpregunta($cfolio,$cvalorc13p81o1,$cvalorc13p81o2,$cvalorc13p81o3,
                $cvalorc13p81o4,$cvalorc13p81cual);
       //echo json_encode(array('result' => 'guardado'));
    }
    //fin funcion para actualizar
    
}
