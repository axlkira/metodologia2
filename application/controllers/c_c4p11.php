<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class  C_c4p11 extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->model('m_c4p11');//carga el controlador modelo
    }

    //funcion encargada de llamar a la vista de la pagina 
    public function fc_c4p11($page = 'v_c4p11') {

        if (!file_exists('application/views/pages/' . $page . '.php')) {
            // Whoops, we don't have a page for that!
            show_404();
        }
        $idintegrante = $this->input->get('idintegrante');
        $cfolio = $this->input->get('folio');//tomamos el valor del vivienda que viene por get

        //para traer la informacion de ayudas
        $cayudas = $this->m_c4p11->fm_ayudas();
        $ctextoayuda = '';
        foreach ($cayudas as $cayuda)
        {
            $ctextoayuda =  $cayuda->ayuda;
        }
        //Fin ayudas 
        
       
         
        //incio traer datos generales
        $cdatosgenerales = $this->m_c4p11->fm_cargardatosgenerales($cfolio,$idintegrante);
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
        $crespuestas = $this->m_c4p11->fm_buscarpregunta($idintegrante);
        $carrayrespuestas= array('ec4p11o1' => '','ec4p11o2' => '',
                                 'ec4p11o3' => '','ec4p11o4' => '',
                                 'ec4p11o5' => '','ec4p11o6' => '',
                                 'ec4p11o7' => '','ec4p11o8' => '',
                                 'ec4p11o9' => '','ec4p11o10' => '',
                                 'ec4p11o11' => '','ec4p11o12' => '','ec4p11o13' => '','ec4p12' => ''); 
        foreach ($crespuestas as $crespuesta)
        {
            $carrayrespuestas = array('ec4p11o1' => $crespuesta->c4p11o1,'ec4p11o2' => $crespuesta->c4p11o2,
                                      'ec4p11o3' => $crespuesta->c4p11o3,'ec4p11o4' => $crespuesta->c4p11o4,
                                      'ec4p11o5' => $crespuesta->c4p11o5,'ec4p11o6' => $crespuesta->c4p11o6,
                                      'ec4p11o7' => $crespuesta->c4p11o7,'ec4p11o8' => $crespuesta->c4p11o8,
                                      'ec4p11o9' => $crespuesta->c4p11o9,'ec4p11o10' => $crespuesta->c4p11o10,
                                      'ec4p11o11' => $crespuesta->c4p11o11,'ec4p11o12' => $crespuesta->c4p11o12,'ec4p11o13' => $crespuesta->c4p11o13,'ec4p12' => $crespuesta->c4p12);
        }
        //fin traer datos generales
        
       
        
        
       //Levantar vista     
        $titulo = 'Cap IV - Pregunta 11'; // para el titulo de la vista en la pestaña
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
        $cvalorc4p11o1= $this->input->get('vvalorc4p11o1');        
        $cvc4p11o2= $this->input->get('vc4p11o2'); 
        $cvc4p11o3= $this->input->get('vc4p11o3');
        $cvc4p11o4= $this->input->get('vc4p11o4');
        $cvc4p11o5= $this->input->get('vc4p11o5');
        $cvc4p11o6= $this->input->get('vc4p11o6');
        $cvc4p11o7= $this->input->get('vc4p11o7');
        $cvc4p11o8= $this->input->get('vc4p11o8');
        $cvc4p11o9= $this->input->get('vc4p11o9');
        $cvc4p11o10= $this->input->get('vc4p11o10');
        $cvc4p11o11= $this->input->get('vc4p11o11');
        $cvc4p11o12= $this->input->get('vc4p11o12');
        $cvc4p11o13= $this->input->get('vc4p11o13');
        $this->m_c4p11->fm_actualizarpregunta($cfolio,$cidintegrante,$cvalorc4p11o1,$cvc4p11o2,$cvc4p11o3,$cvc4p11o4,$cvc4p11o5,
               $cvc4p11o6,$cvc4p11o7,$cvc4p11o8,$cvc4p11o9,$cvc4p11o10,$cvc4p11o11,$cvc4p11o12,$cvc4p11o13);
       //echo json_encode(array('result' => 'guardado'));
    }
    //fin funcion para actualizar
    
}
