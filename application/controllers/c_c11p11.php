<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class  C_c11p11 extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->model('m_c11p11');//carga el controlador modelo
    }

    //funcion encargada de llamar a la vista de la pagina 
    public function fc_c11p11($page = 'v_c11p11') {

        if (!file_exists('application/views/pages/' . $page . '.php')) {
            // Whoops, we don't have a page for that!
            show_404();
        }

        $cfolio = $this->input->get('folio');//tomamos el valor del vivienda que viene por get

        //para traer la informacion de ayudas
        $cayudas = $this->m_c11p11->fm_ayudas();
        
        $ctextoayuda = '';
        foreach ($cayudas as $cayuda)
        {
            $ctextoayuda =  $cayuda->ayuda;
        }
        //Fin ayudas 
        
        //incio traer datos generales
        $cdatosgenerales = $this->m_c11p11->fm_cargardatosgenerales($cfolio);
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
        $crespuestas = $this->m_c11p11->fm_buscarpregunta($cfolio);
        
        $carrayrespuestas = array('ec11p11o1' =>'','ec11p11o2' => '','ec11p11o3' => '','ec11p11o4' => '','ec11p11o5' => '','ec11p11o6' => '',
                                 'ec11p11o7' => '','ec11p11o8' => '','ec11p11o9' => '','ec11p11o10' => '','ec11p11o11' => '',
                                 'ec11p11o12' => '','ec11p11o13' => '','ec11p11o14' => '','ec11p11o15' => '','ec11p11cual' => '','ec11p11ao1' =>''); 
        foreach ($crespuestas as $crespuesta)
        {
            $carrayrespuestas = array('ec11p11o1'=>$crespuesta->c11p11o1,'ec11p11o2'=>$crespuesta->c11p11o2,'ec11p11o3'=>$crespuesta->c11p11o3,
                                      'ec11p11o4'=>$crespuesta->c11p11o4,'ec11p11o5'=>$crespuesta->c11p11o5,'ec11p11o6'=>$crespuesta->c11p11o6,
                                      'ec11p11o7'=>$crespuesta->c11p11o7,'ec11p11o8'=>$crespuesta->c11p11o8,'ec11p11o9'=>$crespuesta->c11p11o9,
                                      'ec11p11o10'=>$crespuesta->c11p11o10,'ec11p11o11'=>$crespuesta->c11p11o11,'ec11p11o12'=>$crespuesta->c11p11o12,
                                      'ec11p11o13'=>$crespuesta->c11p11o13,'ec11p11o14'=>$crespuesta->c11p11o14,'ec11p11o15'=>$crespuesta->c11p11o15,
                                      'ec11p11cual'=>$crespuesta->c11p11cual,'ec11p11ao1'=>$crespuesta->c11p11ao1);
        }
        //fin traer datos generales
        
       //Levantar vista     
        $titulo = 'Cap XI - Pregunta 11'; // para el titulo de la vista en la pestaña
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
        $cvalorc11p11o1= $this->input->get('vc11p11o1');
        $cvalorc11p11o2= $this->input->get('vc11p11o2');
        $cvalorc11p11o3= $this->input->get('vc11p11o3');
        $cvalorc11p11o4= $this->input->get('vc11p11o4');
        $cvalorc11p11o5= $this->input->get('vc11p11o5');
        $cvalorc11p11o6= $this->input->get('vc11p11o6');
        $cvalorc11p11o7= $this->input->get('vc11p11o7');
        $cvalorc11p11o8= $this->input->get('vc11p11o8');
        $cvalorc11p11o9= $this->input->get('vc11p11o9');
        $cvalorc11p11o10= $this->input->get('vc11p11o10');
        $cvalorc11p11o11= $this->input->get('vc11p11o11');
        $cvalorc11p11o12= $this->input->get('vc11p11o12');
        $cvalorc11p11o13= $this->input->get('vc11p11o13');
        $cvalorc11p11o14= $this->input->get('vc11p11o14');
        $cvalorc11p11o15= $this->input->get('vc11p11o15');
        $cvalorc11p11cual= $this->input->get('vc11p11cual');
        
        $this->m_c11p11->fm_actualizarpregunta($cfolio,$cvalorc11p11o1,$cvalorc11p11o2,$cvalorc11p11o3,$cvalorc11p11o4,
                         $cvalorc11p11o5,$cvalorc11p11o6,$cvalorc11p11o7,$cvalorc11p11o8,$cvalorc11p11o9,$cvalorc11p11o10,
                $cvalorc11p11o11,$cvalorc11p11o12,$cvalorc11p11o13,$cvalorc11p11o14,$cvalorc11p11o15,$cvalorc11p11cual);
       //echo json_encode(array('result' => 'guardado'));
    }
    //fin funcion para actualizar
    
}
