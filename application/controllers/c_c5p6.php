<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class  C_c5p6 extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->model('m_c5p6');//carga el controlador modelo
    }

    //funcion encargada de llamar a la vista de la pagina 
    public function fc_c5p6($page = 'v_c5p6') {

        if (!file_exists('application/views/pages/' . $page . '.php')) {
            // Whoops, we don't have a page for that!
            show_404();
        }
        $idintegrante = $this->input->get('idintegrante');
        $cfolio = $this->input->get('folio');//tomamos el valor del vivienda que viene por get

        //para traer la informacion de ayudas
        $cayudas = $this->m_c5p6->fm_ayudas();
        $ctextoayuda = '';
        foreach ($cayudas as $cayuda)
        {
            $ctextoayuda =  $cayuda->ayuda;
        }
        //Fin ayudas 
        
        //incio traer datos generales
        $cdatosgenerales = $this->m_c5p6->fm_cargardatosgenerales($cfolio,$idintegrante);
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
        $crespuestas = $this->m_c5p6->fm_buscarpregunta($idintegrante);
        $carrayrespuestas= array('ec5p6o1' => '','ec5p6o2' => '','ec5p6o3' => '','ec5p6o4' => '','ec5p6o5' => '','ec5p6o6' => '',
                                 'ec5p6o7' => '','ec5p6o8' => '','ec5p6o9' => '','ec5p6o10' => '','ec5p6o11' => '','ec5p6cual' => '',
                                 'ec5p6o12' => '','ec5p6o13' => '','ec5p6o14' => '','ec5p6o15' => ''); 
        foreach ($crespuestas as $crespuesta)
        {
            $carrayrespuestas = array('ec5p6o1' => $crespuesta->c5p6o1,'ec5p6o2' => $crespuesta->c5p6o2,'ec5p6o3' => $crespuesta->c5p6o3,
                                      'ec5p6o4' => $crespuesta->c5p6o4,'ec5p6o5' => $crespuesta->c5p6o5,'ec5p6o6' => $crespuesta->c5p6o6,
                                      'ec5p6o7' => $crespuesta->c5p6o7,'ec5p6o8' => $crespuesta->c5p6o8,'ec5p6o9' => $crespuesta->c5p6o9,
                                      'ec5p6o10' => $crespuesta->c5p6o10,'ec5p6o11' => $crespuesta->c5p6o11,'ec5p6cual' => $crespuesta->c5p6cual,
                                      'ec5p6o12' => $crespuesta->c5p6o12,'ec5p6o13' => $crespuesta->c5p6o13,'ec5p6o14' => $crespuesta->c5p6o14,
                                      'ec5p6o15' => $crespuesta->c5p6o15);
        }
        //fin traer datos generales
        
       //Levantar vista     
        $titulo = 'Cap V - Pregunta 6'; // para el titulo de la vista en la pestaña
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
        $cc5p6o1= $this->input->get('vc5p6o1');   
        $cc5p6o2= $this->input->get('vc5p6o2');
        $cc5p6o3= $this->input->get('vc5p6o3');
        $cc5p6o4= $this->input->get('vc5p6o4');
        $cc5p6o5= $this->input->get('vc5p6o5');
        $cc5p6o6= $this->input->get('vc5p6o6');
        $cc5p6o7= $this->input->get('vc5p6o7');
        $cc5p6o8= $this->input->get('vc5p6o8'); 
        $cc5p6o9= $this->input->get('vc5p6o9');
        $cc5p6o10= $this->input->get('vc5p6o10');
        $cc5p6o11= $this->input->get('vc5p6o11');
        $cc5p6cual= $this->input->get('vc5p6cual');
        $cc5p6o12= $this->input->get('vc5p6o12');
        $cc5p6o13= $this->input->get('vc5p6o13');
        $cc5p6o14= $this->input->get('vc5p6o14');
        $cc5p6o15= $this->input->get('vc5p6o15');
        
        $this->m_c5p6->fm_actualizarpregunta($cfolio,$cidintegrante,$cc5p6o1,$cc5p6o2,$cc5p6o3,$cc5p6o4,$cc5p6o5,$cc5p6o6,
                $cc5p6o7,$cc5p6o8,$cc5p6o9,$cc5p6o10,$cc5p6o11,$cc5p6cual,$cc5p6o12,$cc5p6o13,$cc5p6o14,$cc5p6o15);
        
        
        
       
    }
    //fin funcion para actualizar
   public function fc_sspsaltoc5p6ap20()
   {
       $cfolio = $this->input->get('vfolio');
       $cidintegrante = $this->input->get('vidintegrante');
       
       $this->m_c5p6->fm_sspsaltoc5p6ap20($cfolio,$cidintegrante);
       //echo json_encode(array('result' => 'guardado'));
       
   }
   public function fc_sspnosaltoc5p6ap20()
   {
       $cfolio = $this->input->get('vfolio');
       $cidintegrante = $this->input->get('vidintegrante');
       
       $this->m_c5p6->fm_sspnosaltoc5p6ap20($cfolio,$cidintegrante);
       //echo json_encode(array('result' => 'guardado'));
       
   }
   
    //fin funcion para actualizar
   public function fc_spsaltoc5ac6()
   {
       $cfolio = $this->input->get('vfolio');
       $cidintegrante = $this->input->get('vidintegrante');
       
       $this->m_c5p6->fm_spsaltoc5ac6($cfolio,$cidintegrante);
       //echo json_encode(array('result' => 'guardado'));
       
   }
   public function fc_spnosaltoc5ac6()
   {
       $cfolio = $this->input->get('vfolio');
       $cidintegrante = $this->input->get('vidintegrante');
       
       $this->m_c5p6->fm_spnosaltoc5ac6($cfolio,$cidintegrante);
       //echo json_encode(array('result' => 'guardado'));
       
   }
   
}
