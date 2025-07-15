<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class  C_capap9 extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->model('/capacidades/m_capap9');//carga el controlador modelo
    }

    //funcion encargada de llamar a la vista de la pagina 
    public function fc_capap9($page = 'v_capap9') {

        if (!file_exists('application/views/pages/capacidades/' . $page . '.php')) {
            // Whoops, we don't have a page for that!
            show_404();
        }

        $cfolio = $this->input->get('folio');//tomamos el valor del vivienda que viene por get

        //para traer la informacion de ayudas
        $cayudas = $this->m_capap9->fm_ayudas();
        
        $ctextoayuda = '';
        foreach ($cayudas as $cayuda)
        {
            $ctextoayuda =  $cayuda->ayuda;
        }
        //Fin ayudas 
        
         //incio traer datos generales
        $cdatosgenerales = $this->m_capap9->fm_cargardatosgenerales($cfolio);
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
       $crespuestas = $this->m_capap9->fm_buscarpregunta($cfolio);
        $carrayrespuestas= array('ecapap9o1' => '','ecapap9o2' => '','ecapap9o3' => ''); 
        foreach ($crespuestas as $crespuesta)
        {
            $carrayrespuestas = array('ecapap9o1' => $crespuesta->capap9o1,'ecapap9o2' => $crespuesta->capap9o2,'ecapap9o3' => $crespuesta->capap9o3);
        }
        //fin traer datos generales
        
       //Levantar vista     
         $titulo = ' Capacidades - Pregunta 9'; // para el titulo de la vista en la pestaña
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
        $ccapap9o1= $this->input->get('vvalorcapap9o1');
        $ccapap9o2= $this->input->get('vvalorcapap9o2');
        $ccapap9o3= $this->input->get('vvalorcapap9o3');
        
        $this->m_capap9->fm_actualizarpregunta($cfolio,$ccapap9o1,$ccapap9o2,$ccapap9o3);
       //echo json_encode(array('result' => 'guardado'));
    }
    //fin funcion para actualizar
    
}
    