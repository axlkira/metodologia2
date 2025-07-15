<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class  C_c10p5 extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->model('m_c10p5');//carga el controlador modelo
    }

    //funcion encargada de llamar a la vista de la pagina 
    public function fc_c10p5($page = 'v_c10p5') {

        if (!file_exists('application/views/pages/' . $page . '.php')) {
            // Whoops, we don't have a page for that!
            show_404();
        }
        $idintegrante = $this->input->get('idintegrante');
        $cfolio = $this->input->get('folio');//tomamos el valor del vivienda que viene por get

        //para traer la informacion de ayudas
        $cayudas = $this->m_c10p5->fm_ayudas();
        $ctextoayuda = '';
        foreach ($cayudas as $cayuda)
        {
            $ctextoayuda =  $cayuda->ayuda;
        }
        //Fin ayudas 
        
        //incio traer datos generales
        $cdatosgenerales = $this->m_c10p5->fm_cargardatosgenerales($cfolio,$idintegrante);
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
        $crespuestas = $this->m_c10p5->fm_buscarpregunta($idintegrante);
        $carrayrespuestas= array('ec10p5o1' => '','ec10p5o2' => '','ec10p5o3' => '','ec10p5o4' => '','ec10p5o5' => '','ec10p5o6' => '',
                                 'ec10p5o7' => '','ec10p5o8' => '','ec10p5o9' => '','ec10p5o10' => '','ec10p5o11' => ''
            ,'ec10p5o12' => '','ec10p5o13' => '','ec10p5o14' => '','ec10p5o15' => '','ec10p5o16' => '','ec10p5o17' => ''
            ,'ec10p5o18' => '','ec10p5o19' => '','ec10p5o20' => '','ec10p5o21' => '','ec10p5o22' => '','ec10p5o23' => ''
            ,'ec10p5institucion1'=>'','ec10p5institucion2'=>'','ec10p5cual'=>'','ec4p11o1'=>'','ec10p6o1' => ''); 
        foreach ($crespuestas as $crespuesta)
        {
            $carrayrespuestas = array('ec10p5o1' => $crespuesta->c10p5o1,'ec10p5o2' => $crespuesta->c10p5o2,'ec10p5o3' => $crespuesta->c10p5o3,
                                      'ec10p5o4' => $crespuesta->c10p5o4,'ec10p5o5' => $crespuesta->c10p5o5,'ec10p5o6' => $crespuesta->c10p5o6,
                                      'ec10p5o7' => $crespuesta->c10p5o7,'ec10p5o8' => $crespuesta->c10p5o8,'ec10p5o9' => $crespuesta->c10p5o9,
                                      'ec10p5o10' => $crespuesta->c10p5o10,'ec10p5o11' => $crespuesta->c10p5o11,'ec10p5o12' => $crespuesta->c10p5o12
                                    ,'ec10p5o13' => $crespuesta->c10p5o13,'ec10p5o14' => $crespuesta->c10p5o14,'ec10p5o15' => $crespuesta->c10p5o15
                                    ,'ec10p5o16' => $crespuesta->c10p5o16,'ec10p5o17' => $crespuesta->c10p5o17,'ec10p5o18' => $crespuesta->c10p5o18
                                    ,'ec10p5o19' => $crespuesta->c10p5o19,'ec10p5o20' => $crespuesta->c10p5o20,'ec10p5o21' => $crespuesta->c10p5o21
                                    ,'ec10p5o22' => $crespuesta->c10p5o22,'ec10p5o23' => $crespuesta->c10p5o23
                                    ,'ec10p5institucion1' => $crespuesta->c10p5institucion1
                                    ,'ec10p5institucion2' => $crespuesta->c10p5institucion2
                                    ,'ec10p5cual' => $crespuesta->c10p5cual,'ec4p11o1' => $crespuesta->c4p11o1,
                                    'ec10p6o1' => $crespuesta->c10p6o1);
        }
        //fin traer datos generales
        
       //Levantar vista     
        $titulo = 'Cap X - Pregunta 5'; // para el titulo de la vista en la pestaña
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
        $cc10p5o1= $this->input->get('vc10p5o1');   
        $cc10p5o2= $this->input->get('vc10p5o2');
        $cc10p5o3= $this->input->get('vc10p5o3');
        $cc10p5o4= $this->input->get('vc10p5o4');
        $cc10p5o5= $this->input->get('vc10p5o5');
        $cc10p5o6= $this->input->get('vc10p5o6');
        $cc10p5o7= $this->input->get('vc10p5o7');
        $cc10p5o8= $this->input->get('vc10p5o8');
        $cc10p5o9= $this->input->get('vc10p5o9');
        $cc10p5o10= $this->input->get('vc10p5o10');
        $cc10p5o11= $this->input->get('vc10p5o11');
        $cc10p5o12= $this->input->get('vc10p5o12');
        $cc10p5o13= $this->input->get('vc10p5o13');
        $cc10p5o14= $this->input->get('vc10p5o14');
        $cc10p5o15= $this->input->get('vc10p5o15');
        $cc10p5o16= $this->input->get('vc10p5o16');
        $cc10p5o17= $this->input->get('vc10p5o17');
        $cc10p5o18= $this->input->get('vc10p5o18');
        $cc10p5o19= $this->input->get('vc10p5o19');
        $cc10p5o20= $this->input->get('vc10p5o20');
        $cc10p5o21= $this->input->get('vc10p5o21');
        $cc10p5o22= $this->input->get('vc10p5o22');
        $cc10p5o23= $this->input->get('vc10p5o23');
        $cvinstitucion1= $this->input->get('vinstitucion1');
        $cvinstitucion2= $this->input->get('vinstitucion2');
        $cvc10p5cual= $this->input->get('vc10p5cual');
        
        
        $this->m_c10p5->fm_actualizarpregunta($cfolio,$cidintegrante,$cc10p5o1,$cc10p5o2,$cc10p5o3,$cc10p5o4,$cc10p5o5,$cc10p5o6,
                $cc10p5o7,$cc10p5o8,$cc10p5o9,$cc10p5o10,$cc10p5o11,$cc10p5o12,$cc10p5o13,$cc10p5o14,$cc10p5o15,$cc10p5o16
                ,$cc10p5o17,$cc10p5o18,$cc10p5o19,$cc10p5o20,$cc10p5o21,$cc10p5o22,$cc10p5o23,$cvinstitucion1,$cvinstitucion2,$cvc10p5cual);
        
        
        
       
    }
    //fin funcion para actualizar
    
}
