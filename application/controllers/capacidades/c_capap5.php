<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class  C_capap5 extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->model('/capacidades/m_capap5');//carga el controlador modelo
    }

    //funcion encargada de llamar a la vista de la pagina 
    public function fc_capap5($page = 'v_capap5') {

        if (!file_exists('application/views/pages/capacidades/' . $page . '.php')) {
            // Whoops, we don't have a page for that!
            show_404();
        }

        
        $cfolio = $this->input->get('folio');//tomamos el valor del vivienda que viene por get

        //para traer la informacion de ayudas
        $cayudas = $this->m_capap5->fm_ayudas();
        
        $ctextoayuda = '';
        foreach ($cayudas as $cayuda)
        {
            $ctextoayuda =  $cayuda->ayuda;
        }
        //Fin ayudas 
        
        //incio traer datos generales
        $cdatosgenerales = $this->m_capap5->fm_cargardatosgenerales($cfolio);
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
       $crespuestas = $this->m_capap5->fm_buscarpregunta($cfolio);
        $carrayrespuestas= array('ecapap5o1' => '','ecapap5o2' => '','ecapap5o3' => '','ecapap5o4' => ''); 
        foreach ($crespuestas as $crespuesta)
        {
            $carrayrespuestas = array('ecapap5o1' => $crespuesta->capap5o1,'ecapap5o2' => $crespuesta->capap5o2,'ecapap5o3' => $crespuesta->capap5o3,
                'ecapap5o4' => $crespuesta->capap5o4);
        }
        //fin traer datos generales
        
       //Levantar vista     
         $titulo = ' Capacidades - Pregunta 5'; // para el titulo de la vista en la pestaña
        $this->load->view('pages/capacidades/' . $page,  array('titulo' => $titulo, 
                                                   'foot' => FOOTS, 
                                                   'head' => HEAD, 
                                                   'botoneragcapa' => BOTONERAGCAPA, 
                                                   'botoneraacapa' => BOTONERAACAPA,
                                                   'folio' => $cfolio,
                                                   'textoayuda' => $ctextoayuda, 
                                                   'arraydatosgenerales' => $carraydatosgenerales, 
                                                   'arrayrespuestas' => $carrayrespuestas));
         
    }
    
    
    //funcion para actualizar
    //funcion para actualizar
    public function fc_actualizar()
    {
        $cfolio = $this->input->get('vfolio');        
        $ccapap5o1= $this->input->get('vvalorcapap5o1');
        $ccapap5o2= $this->input->get('vvalorcapap5o2');
        $ccapap5o3= $this->input->get('vvalorcapap5o3');
        $ccapap5o4= $this->input->get('vvalorcapap5o4');
        
        
        $this->m_capap5->fm_actualizarpregunta($cfolio,$ccapap5o1,$ccapap5o2,$ccapap5o3,$ccapap5o4);
       //echo json_encode(array('result' => 'guardado'));
    }
    //fin funcion para actualizar
    
}
    