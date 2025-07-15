<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class  C_capap11sc extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->model('/capacidades/m_capap11sc');//carga el controlador modelo
    }

    //funcion encargada de llamar a la vista de la pagina 
    public function fc_capap11sc($page = 'v_capap11sc') {

        if (!file_exists('application/views/pages/capacidades/' . $page . '.php')) {
            // Whoops, we don't have a page for that!
            show_404();
        }

        $cfolio = $this->input->get('folio');
        $idestacion = $this->input->get('idestacion');//tomamos el valor del vivienda que viene por get

        //para traer la informacion de ayudas
        $cayudas = $this->m_capap11sc->fm_ayudas();
        
        $ctextoayuda = '';
        foreach ($cayudas as $cayuda)
        {
            $ctextoayuda =  $cayuda->ayuda;
        }
        //Fin ayudas 
        
         //incio traer datos generales
        $cdatosgenerales = $this->m_capap11sc->fm_cargardatosgenerales($cfolio);
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
       $crespuestas = $this->m_capap11sc->fm_buscarpregunta($cfolio);
        $carrayrespuestas= array('ecapap11' => ''); 
        foreach ($crespuestas as $crespuesta)
        {
            $carrayrespuestas = array('ecapap11' => $crespuesta->cap11);
        }
        //fin traer datos generales
        
       //Levantar vista     
         $titulo = ' Estrategias de autonomia'; // para el titulo de la vista en la pestaña
        $this->load->view('pages/capacidades/' . $page,  array('titulo' => $titulo, 
                                                   'foot' => FOOTS, 
                                                   'head' => HEAD, 
                                                   'botoneragcapa' => BOTONERAGCAPA2, 
                                                   'botoneraacapa' => BOTONERAACAPA2,
                                                   'folio' => $cfolio,
                                                   'textoayuda' => $ctextoayuda, 
                                                   'arraydatosgenerales' => $carraydatosgenerales,
                                                   'idestacion' => $idestacion,
                                                   'arrayrespuestas' => $carrayrespuestas));
        //Fin levantar vista
         
    }
    
    
    //funcion para actualizar
    //funcion para actualizar
    public function fc_actualizar()
    {
        $cfolio = $this->input->get('vfolio');        
        $ccapap11= $this->input->get('vvalorcapap11');        
        
        $this->m_capap11sc->fm_actualizarpregunta($cfolio,$ccapap11);
       //echo json_encode(array('result' => 'guardado'));
    }
    //fin funcion para actualizar
    
    
}
    