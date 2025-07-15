<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class  C_capap1 extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->model('/capacidades/m_capap1');//carga el controlador modelo
    }

    //funcion encargada de llamar a la vista de la pagina 
    public function fc_capap1($page = 'v_capap1') {

        if (!file_exists('application/views/pages/capacidades/' . $page . '.php')) {
            // Whoops, we don't have a page for that!
            show_404();
        }

        $cfolio = $this->input->get('folio');//tomamos el valor del vivienda que viene por get

        //para traer la informacion de ayudas
        $cayudas = $this->m_capap1->fm_ayudas();
        
        $ctextoayuda = '';
        foreach ($cayudas as $cayuda)
        {
            $ctextoayuda =  $cayuda->ayuda;
        }
        //Fin ayudas 
        
         //incio traer datos generales
        $cdatosgenerales = $this->m_capap1->fm_cargardatosgenerales($cfolio);
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
       $crespuestas = $this->m_capap1->fm_buscarpregunta($cfolio);
        $carrayrespuestas= array('ecapap1o1' => '','ecapap1o2' => '','ecapap1o3' => ''); 
        foreach ($crespuestas as $crespuesta)
        {
            $carrayrespuestas = array('ecapap1o1' => $crespuesta->capap1o1,'ecapap1o2' => $crespuesta->capap1o2,'ecapap1o3' => $crespuesta->capap1o3);
        }
        //fin traer datos generales
        
       //Levantar vista     
         $titulo = ' Capacidades - Pregunta 1'; // para el titulo de la vista en la pestaña
        $this->load->view('pages/capacidades/' . $page,  array('titulo' => $titulo, 
                                                   'foot' => FOOTS, 
                                                   'head' => HEAD, 
                                                   'botoneragcapa' => BOTONERAGCAPA, 
                                                   'botoneraacapa' => BOTONERAACAPA,
                                                   'folio' => $cfolio,
                                                   'textoayuda' => $ctextoayuda, 
                                                   'arraydatosgenerales' => $carraydatosgenerales, 
                                                   'arrayrespuestas' => $carrayrespuestas));
        //Fin levantar vista
         
    }
    
    
    //funcion para actualizar
    //funcion para actualizar
    public function fc_actualizar()
    {
        $cfolio = $this->input->get('vfolio');        
        $ccapap1o1= $this->input->get('vvalorcapap1o1');
        $ccapap1o2= $this->input->get('vvalorcapap1o2');
        $ccapap1o3= $this->input->get('vvalorcapap1o3');
        
        $this->m_capap1->fm_actualizarpregunta($cfolio,$ccapap1o1,$ccapap1o2,$ccapap1o3);
       //echo json_encode(array('result' => 'guardado'));
    }
    //fin funcion para actualizar
    
}
    