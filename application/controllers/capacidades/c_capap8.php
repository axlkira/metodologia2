<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class  C_capap8 extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->model('/capacidades/m_capap8');//carga el controlador modelo
    }

    //funcion encargada de llamar a la vista de la pagina 
    public function fc_capap8($page = 'v_capap8') {

        if (!file_exists('application/views/pages/capacidades/' . $page . '.php')) {
            // Whoops, we don't have a page for that!
            show_404();
        }

        $cfolio = $this->input->get('folio');//tomamos el valor del vivienda que viene por get

        //para traer la informacion de ayudas
        $cayudas = $this->m_capap8->fm_ayudas();
        
        $ctextoayuda = '';
        foreach ($cayudas as $cayuda)
        {
            $ctextoayuda =  $cayuda->ayuda;
        }
        //Fin ayudas 
        
         //incio traer datos generales
        $cdatosgenerales = $this->m_capap8->fm_cargardatosgenerales($cfolio);
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
       $crespuestas = $this->m_capap8->fm_buscarpregunta($cfolio);
        $carrayrespuestas= array('ecapap8o1' => '','ecapap8o2' => '','ecapap8o3' => ''); 
        foreach ($crespuestas as $crespuesta)
        {
            $carrayrespuestas = array('ecapap8o1' => $crespuesta->capap8o1,'ecapap8o2' => $crespuesta->capap8o2,'ecapap8o3' => $crespuesta->capap8o3);
        }
        //fin traer datos generales
        
       //Levantar vista     
         $titulo = ' Capacidades - Pregunta 8'; // para el titulo de la vista en la pestaña
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
        $ccapap8o1= $this->input->get('vvalorcapap8o1');
        $ccapap8o2= $this->input->get('vvalorcapap8o2');
        $ccapap8o3= $this->input->get('vvalorcapap8o3');
        
        $this->m_capap8->fm_actualizarpregunta($cfolio,$ccapap8o1,$ccapap8o2,$ccapap8o3);
       //echo json_encode(array('result' => 'guardado'));
    }
    //fin funcion para actualizar
    
}
    