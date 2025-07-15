<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class  C_c11p12_1 extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->model('m_c11p12_1');//carga el controlador modelo
    }

    //funcion encargada de llamar a la vista de la pagina 
    public function fc_c11p12_1($page = 'v_c11p12_1') {

        if (!file_exists('application/views/pages/' . $page . '.php')) {
            // Whoops, we don't have a page for that!
            show_404();
        }
        $idintegrante = $this->input->get('idintegrante');
        $cfolio = $this->input->get('folio');//tomamos el valor del vivienda que viene por get

        //para traer la informacion de ayudas
        $cayudas = $this->m_c11p12_1->fm_ayudas();
        $ctextoayuda = '';
        foreach ($cayudas as $cayuda)
        {
            $ctextoayuda =  $cayuda->ayuda;
        }
        //Fin ayudas 
        
        //incio traer datos generales
        $cdatosgenerales = $this->m_c11p12_1->fm_cargardatosgenerales($cfolio,$idintegrante);
        $carraydatosgenerales= array('enomcoges' => '', 'efolio' =>'', 'ecapitulo' => '', 'etitular' => '','edoctitular' => '','enombreintegrante' => '','edocintegrante' => '','esexointegrante'=> '','eedadintegrante'=> ''); 
        foreach ($cdatosgenerales as $cdatgen)
        {
            $carraydatosgenerales = array('enomcoges' => $cdatgen->nomcoges,
                                          'efolio' => $cdatgen->folio, 
                                          'ecapitulo' => $cdatgen->capitulo,
                                          'etitular' => $cdatgen->titular,
                                          'edoctitular' => $cdatgen->doctitular,
                                          'enombreintegrante' => $cdatgen->nombreintegrante,
                                          'edocintegrante' => $cdatgen->docintegrante,
                                          'esexointegrante' => $cdatgen->sexointegrante,
                                          'eedadintegrante' => $cdatgen->edadintegrante);
        }
        //fin traer datos generales
        
        //incio traer respuestas
        $crespuestas = $this->m_c11p12_1->fm_buscarpregunta($idintegrante);
        $carrayrespuestas= array('ec11p12_1o1' => '','ec11p12_1o2' => '','ec11p12_1o3' => '',
                                 'ec11p12_1o4' => '','ec11p12_1o5' => '','ec11p12_1cual' => '');
        
        
        foreach ($crespuestas as $crespuesta)
        {
            $carrayrespuestas = array('ec11p12_1o1' => $crespuesta->c11p12_1o1,'ec11p12_1o2' => $crespuesta->c11p12_1o2,'ec11p12_1o3' => $crespuesta->c11p12_1o3,
                                      'ec11p12_1o4' => $crespuesta->c11p12_1o4,'ec11p12_1o5' => $crespuesta->c11p12_1o5,'ec11p12_1cual' => $crespuesta->c11p12_1cual);
        }
        //fin traer datos generales
        
       //Levantar vista     
        $titulo = 'Cap XI - Pregunta 12_1'; // para el titulo de la vista en la pestaña
        $this->load->view('pages/' . $page,  array('titulo' => $titulo, 
                                                   'foot' => FOOTS, 
                                                   'head' => HEAD, 
                                                   'botonerag' => BOTONERAG, 
                                                   'botoneraa' => BOTONERAA,
                                                   'folio' => $cfolio,
                                                   'idintegrante' => $idintegrante,
                                                   'textoayuda' => $ctextoayuda, 
                                                   'arraydatosgenerales' => $carraydatosgenerales, 
                                                   'arrayrespuestas' => $carrayrespuestas));
        //Fin levantar vista
         
    }
    
    
    //funcion para actualizar
    public function fc_actualizar()
    {
        $cfolio = $this->input->get('vfolio');
        $cidintegrante= $this->input->get('vidintegrante');  
        $cvc11p12_1o1= $this->input->get('vc11p12_1o1'); 
        $cvc11p12_1o2= $this->input->get('vc11p12_1o2');        
        $cvc11p12_1o3= $this->input->get('vc11p12_1o3');        
        $cvc11p12_1o4= $this->input->get('vc11p12_1o4');        
        $cvc11p12_1o5= $this->input->get('vc11p12_1o5');
        $cvc11p12_1cual= $this->input->get('vc11p12_1cual');        
        $this->m_c11p12_1->fm_actualizarpregunta($cfolio,$cidintegrante,$cvc11p12_1o1,$cvc11p12_1o2,$cvc11p12_1o3,$cvc11p12_1o4,$cvc11p12_1o5,$cvc11p12_1cual);
       //echo json_encode(array('result' => 'guardado'));
    }
    //fin funcion para actualizar
    
}
