<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class  C_c11p13 extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->model('m_c11p13');//carga el controlador modelo
    }

    //funcion encargada de llamar a la vista de la pagina 
    public function fc_c11p13($page = 'v_c11p13') {

        if (!file_exists('application/views/pages/' . $page . '.php')) {
            // Whoops, we don't have a page for that!
            show_404();
        }

        $idintegrante = $this->input->get('idintegrante');
        $cfolio = $this->input->get('folio');//tomamos el valor del vivienda que viene por get

        //para traer la informacion de ayudas
        $cayudas = $this->m_c11p13->fm_ayudas();
        
        $ctextoayuda = '';
        foreach ($cayudas as $cayuda)
        {
            $ctextoayuda =  $cayuda->ayuda;
        }
        //Fin ayudas 
        
         //incio traer datos generales
        $cdatosgenerales = $this->m_c11p13->fm_cargardatosgenerales($cfolio,$idintegrante);
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
       $crespuestas = $this->m_c11p13->fm_buscarpregunta($idintegrante);
        $carrayrespuestas= array('ec11p13o1' => '','ec11p13o2' => '','ec11p13o3' => '','ec11p13o4' => '','ec11p13o5' => '',
            'ec11p13o6' => '','ec11p13o7' => '','ec11p13o8' => '','ec11p13o9' => '','ec11p13o10' => '','ec11p13o11' => '','ec11p13o12' => '',
            'ec11p13o13' => '','ec11p13o14' => '','ec11p13o15' => '','ec11p12d' => '','ec11p14o1' => '','ec11p12a' =>''); 
        foreach ($crespuestas as $crespuesta)
        {
            $carrayrespuestas = array('ec11p13o1' => $crespuesta->c11p13o1,'ec11p13o2' => $crespuesta->c11p13o2,
                'ec11p13o3' => $crespuesta->c11p13o3,'ec11p13o4' => $crespuesta->c11p13o4,'ec11p13o5' => $crespuesta->c11p13o5
                    ,'ec11p13o6' => $crespuesta->c11p13o6,'ec11p13o7' => $crespuesta->c11p13o7,'ec11p13o8' => $crespuesta->c11p13o8
                    ,'ec11p13o9' => $crespuesta->c11p13o9,'ec11p13o10' => $crespuesta->c11p13o10,'ec11p13o11' => $crespuesta->c11p13o11
                    ,'ec11p13o12' => $crespuesta->c11p13o12,'ec11p13o13' => $crespuesta->c11p13o13,'ec11p13o14' => $crespuesta->c11p13o14
                    ,'ec11p13o15' => $crespuesta->c11p13o15,'ec11p12d' => $crespuesta->c11p12d,'ec11p14o1' => $crespuesta->c11p14o1,'ec11p12a' => $crespuesta->c11p12a);
        }
        //fin traer datos generales
        
       //Levantar vista     
         $titulo = 'Cap XI - Pregunta 13'; // para el titulo de la vista en la pestaña
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
    //funcion para actualizar
    public function fc_actualizar()
    {
        $cfolio = $this->input->get('vfolio');
        $cidintegrante= $this->input->get('vidintegrante');
        $cvalorc11p13o1= $this->input->get('vvalorc11p13o1');
        $cvalorc11p13o2= $this->input->get('vvalorc11p13o2');
        $cvalorc11p13o3= $this->input->get('vvalorc11p13o3');
        $cvalorc11p13o4= $this->input->get('vvalorc11p13o4');
        $cvalorc11p13o5= $this->input->get('vvalorc11p13o5');
        $cvalorc11p13o6= $this->input->get('vvalorc11p13o6');
        $cvalorc11p13o7= $this->input->get('vvalorc11p13o7');
        $cvalorc11p13o8= $this->input->get('vvalorc11p13o8');
        $cvalorc11p13o9= $this->input->get('vvalorc11p13o9');
        $cvalorc11p13o10= $this->input->get('vvalorc11p13o10');
        $cvalorc11p13o11= $this->input->get('vvalorc11p13o11');
        $cvalorc11p13o12= $this->input->get('vvalorc11p13o12');
        $cvalorc11p13o13= $this->input->get('vvalorc11p13o13');
        $cvalorc11p13o14= $this->input->get('vvalorc11p13o14');
        $cvalorc11p13o15= $this->input->get('vvalorc11p13o15');
        
        $this->m_c11p13->fm_actualizarpregunta($cfolio,$cidintegrante,$cvalorc11p13o1,$cvalorc11p13o2,$cvalorc11p13o3,$cvalorc11p13o4
                ,$cvalorc11p13o5,$cvalorc11p13o6,$cvalorc11p13o7,$cvalorc11p13o8,$cvalorc11p13o9,$cvalorc11p13o10,$cvalorc11p13o11
                ,$cvalorc11p13o12,$cvalorc11p13o13,$cvalorc11p13o14,$cvalorc11p13o15);
       //echo json_encode(array('result' => 'guardado'));
    }
    //fin funcion para actualizar
    
}
    