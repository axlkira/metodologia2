<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class  C_c10p6 extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->model('m_c10p6');//carga el controlador modelo
    }

    //funcion encargada de llamar a la vista de la pagina 
    public function fc_c10p6($page = 'v_c10p6') {

        if (!file_exists('application/views/pages/' . $page . '.php')) {
            // Whoops, we don't have a page for that!
            show_404();
        }
        $idintegrante = $this->input->get('idintegrante');
        $cfolio = $this->input->get('folio');//tomamos el valor del vivienda que viene por get

        //para traer la informacion de ayudas
        $cayudas = $this->m_c10p6->fm_ayudas();
        $ctextoayuda = '';
        foreach ($cayudas as $cayuda)
        {
            $ctextoayuda =  $cayuda->ayuda;
        }
        //Fin ayudas 
        
        //incio traer datos generales
        $cdatosgenerales = $this->m_c10p6->fm_cargardatosgenerales($cfolio,$idintegrante);
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
        $crespuestas = $this->m_c10p6->fm_buscarpregunta($idintegrante);
        $carrayrespuestas= array('ec10p6o1' => '','ec10p6o2' => '','ec10p6o3' => '','ec10p6o4' => '','ec10p6o5' => '','ec10p6o6' => '',
                                 'ec10p6o7' => '','ec10p6o8' => '','ec10p6o9' => '','ec10p6o10' => '','ec10p6o11' => '',
            'ec10p6o12' => '','ec10p6o13' => '','ec10p6o14' => '','ec10p6o15' => '','ec10p6o16' => '','ec10p6o17' => '','ec10p6cual' => '','ec10p5o1' =>''); 
        foreach ($crespuestas as $crespuesta)
        {
            $carrayrespuestas = array('ec10p6o1' => $crespuesta->c10p6o1,'ec10p6o2' => $crespuesta->c10p6o2,'ec10p6o3' => $crespuesta->c10p6o3,
                                      'ec10p6o4' => $crespuesta->c10p6o4,'ec10p6o5' => $crespuesta->c10p6o5,'ec10p6o6' => $crespuesta->c10p6o6,
                                      'ec10p6o7' => $crespuesta->c10p6o7,'ec10p6o8' => $crespuesta->c10p6o8,'ec10p6o9' => $crespuesta->c10p6o9,
                                      'ec10p6o10' => $crespuesta->c10p6o10,'ec10p6o11' => $crespuesta->c10p6o11,'ec10p6o12' => $crespuesta->c10p6o12,
                                      'ec10p6o13' => $crespuesta->c10p6o13,'ec10p6o14' => $crespuesta->c10p6o14,'ec10p6o15' => $crespuesta->c10p6o15,
                                      'ec10p6o16' => $crespuesta->c10p6o16,'ec10p6o17' => $crespuesta->c10p6o17,'ec10p6cual' => $crespuesta->c10p6cual,
                                      'ec10p5o1' => $crespuesta->c10p5o1);
        }
        //fin traer datos generales
        
       //Levantar vista     
        $titulo = 'Cap X - Pregunta 6'; // para el titulo de la vista en la pestaña
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
        $cc10p6o1= $this->input->get('vc10p6o1');   
        $cc10p6o2= $this->input->get('vc10p6o2');
        $cc10p6o3= $this->input->get('vc10p6o3');
        $cc10p6o4= $this->input->get('vc10p6o4');
        $cc10p6o5= $this->input->get('vc10p6o5');
        $cc10p6o6= $this->input->get('vc10p6o6');
        $cc10p6o7= $this->input->get('vc10p6o7');
        $cc10p6o8= $this->input->get('vc10p6o8');
        $cc10p6o9= $this->input->get('vc10p6o9');
        $cc10p6o10= $this->input->get('vc10p6o10');
        $cc10p6o11= $this->input->get('vc10p6o11');
        $cc10p6o12= $this->input->get('vc10p6o12');
        $cc10p6o13= $this->input->get('vc10p6o13');
        $cc10p6o14= $this->input->get('vc10p6o14');
        $cc10p6o15= $this->input->get('vc10p6o15');
        $cc10p6o16= $this->input->get('vc10p6o16');
        $cc10p6o17= $this->input->get('vc10p6o17');
        $cc10p6cual= $this->input->get('vc10p6cual');
        
        $this->m_c10p6->fm_actualizarpregunta($cfolio,$cidintegrante,$cc10p6o1,$cc10p6o2,$cc10p6o3,$cc10p6o4,$cc10p6o5,$cc10p6o6,
                $cc10p6o7,$cc10p6o8,$cc10p6o9,$cc10p6o10,$cc10p6o11,$cc10p6o12,$cc10p6o13,$cc10p6o14,$cc10p6o15,$cc10p6o16,$cc10p6o17,$cc10p6cual);
        
        
        
       
    }
    //fin funcion para actualizar
    
}
