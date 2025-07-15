<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class  C_c13p9 extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->model('m_c13p9');//carga el controlador modelo
    }

    //funcion encargada de llamar a la vista de la pagina 
    public function fc_c13p9($page = 'v_c13p9') {

        if (!file_exists('application/views/pages/' . $page . '.php')) {
            // Whoops, we don't have a page for that!
            show_404();
        }
        
        $cfolio = $this->input->get('folio');//tomamos el valor del vivienda que viene por get

        //para traer la informacion de ayudas
        $cayudas = $this->m_c13p9->fm_ayudas();
        $ctextoayuda = '';
        foreach ($cayudas as $cayuda)
        {
            $ctextoayuda =  $cayuda->ayuda;
        }
        //Fin ayudas 
        
        //incio traer datos generales
        $cdatosgenerales = $this->m_c13p9->fm_cargardatosgenerales($cfolio);
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
        $crespuestas = $this->m_c13p9->fm_buscarpregunta($cfolio);
        $carrayrespuestas= array('ec13p9o1' => '','ec13p9o2' => '','ec13p9o3' => '','ec13p9o4' => '','ec13p9o5' => '','ec13p9o6' => '','ec13p9o7' => '','ec13p9o8' => '','ec13p9cual' => ''); 
        foreach ($crespuestas as $crespuesta)
        {
            $carrayrespuestas = array('ec13p9o1' => $crespuesta->c13p9o1,'ec13p9o2' => $crespuesta->c13p9o2,'ec13p9o3' => $crespuesta->c13p9o3,
                                     'ec13p9o4' => $crespuesta->c13p9o4,'ec13p9o5' => $crespuesta->c13p9o5,'ec13p9o6' => $crespuesta->c13p9o6,'ec13p9o7' => $crespuesta->c13p9o7,'ec13p9o8' => $crespuesta->c13p9o8,'ec13p9cual' => $crespuesta->c13p9cual);
        }
        //fin traer datos generales
        
       //Levantar vista     
        $titulo = 'Cap XIII - Pregunta 9'; // para el titulo de la vista en la pestaña
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
        $cvalorc13p9o1= $this->input->get('vvalorc13p9o1');
        $cvalorc13p9o2= $this->input->get('vvalorc13p9o2');
        $cvalorc13p9o3= $this->input->get('vvalorc13p9o3');
        $cvalorc13p9o4= $this->input->get('vvalorc13p9o4');
        $cvalorc13p9o5= $this->input->get('vvalorc13p9o5');
        $cvalorc13p9o6= $this->input->get('vvalorc13p9o6');
        $cvalorc13p9o7= $this->input->get('vvalorc13p9o7');
        $cvalorc13p9o8= $this->input->get('vvalorc13p9o8');
        $cvalorc13p9cual= $this->input->get('vvalorc13p9cual');
        
              
        
        $this->m_c13p9->fm_actualizarpregunta($cfolio,$cvalorc13p9o1,$cvalorc13p9o2,$cvalorc13p9o3,
                $cvalorc13p9o4,$cvalorc13p9o5,$cvalorc13p9o6,$cvalorc13p9o7,$cvalorc13p9o8,$cvalorc13p9cual);
       //echo json_encode(array('result' => 'guardado'));
    }
    //fin funcion para actualizar
    
}
