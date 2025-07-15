<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class  C_c9p37 extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->model('m_c9p37');//carga el controlador modelo
    }

    //funcion encargada de llamar a la vista de la pagina 
    public function fc_c9p37($page = 'v_c9p37') {

        if (!file_exists('application/views/pages/' . $page . '.php')) {
            // Whoops, we don't have a page for that!
            show_404();
        }
        $idintegrante = $this->input->get('idintegrante');
        $cfolio = $this->input->get('folio');//tomamos el valor del vivienda que viene por get

        //para traer la informacion de ayudas
        $cayudas = $this->m_c9p37->fm_ayudas();
        $ctextoayuda = '';
        foreach ($cayudas as $cayuda)
        {
            $ctextoayuda =  $cayuda->ayuda;
        }
        //Fin ayudas 
        
        //incio traer datos generales
        $cdatosgenerales = $this->m_c9p37->fm_cargardatosgenerales($cfolio,$idintegrante);
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
        $crespuestas = $this->m_c9p37->fm_buscarpregunta($idintegrante);
        $carrayrespuestas= array('ec9p37o1' => '','ec9p37o2' => '','ec9p37o3' => '',
                                 'ec9p37o4' => '','ec9p37o5' => '','ec9p37o6' => '',
                                 'ec9p37o7' => '','ec9p37o8' => '','ec9p37o9' => '','ec9p37o10' => '',
                                 'ec9p37o11' => '','ec9p37cual' => '');
        
        
        foreach ($crespuestas as $crespuesta)
        {
            $carrayrespuestas = array('ec9p37o1' => $crespuesta->c9p37o1,'ec9p37o2' => $crespuesta->c9p37o2,'ec9p37o3' => $crespuesta->c9p37o3,
                                      'ec9p37o4' => $crespuesta->c9p37o4,'ec9p37o5' => $crespuesta->c9p37o5,'ec9p37o6' => $crespuesta->c9p37o6,
                                      'ec9p37o7' => $crespuesta->c9p37o7,'ec9p37o8' => $crespuesta->c9p37o8,'ec9p37o9' => $crespuesta->c9p37o9,
                                      'ec9p37o10' => $crespuesta->c9p37o10,'ec9p37o11' => $crespuesta->c9p37o11,'ec9p37cual' => $crespuesta->c9p37cual);
        }
        //fin traer datos generales
        
       //Levantar vista     
        $titulo = 'Cap IX - Pregunta 1'; // para el titulo de la vista en la pestaña
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
        $cvc9p37o1= $this->input->get('vc9p37o1'); 
        $cvc9p37o2= $this->input->get('vc9p37o2');        
        $cvc9p37o3= $this->input->get('vc9p37o3');        
        $cvc9p37o4= $this->input->get('vc9p37o4');        
        $cvc9p37o5= $this->input->get('vc9p37o5');
        $cvc9p37o6= $this->input->get('vc9p37o6');
        $cvc9p37o7= $this->input->get('vc9p37o7');
        $cvc9p37o8= $this->input->get('vc9p37o8');
        $cvc9p37o9= $this->input->get('vc9p37o9');
        $cvc9p37o10= $this->input->get('vc9p37o10');
        $cvc9p37o11= $this->input->get('vc9p37o11');
        $cvc9p37cual= $this->input->get('vc9p37cual');        
        $this->m_c9p37->fm_actualizarpregunta($cfolio,$cidintegrante,$cvc9p37o1,$cvc9p37o2,$cvc9p37o3,$cvc9p37o4,$cvc9p37o5,$cvc9p37o6,
                                              $cvc9p37o7,$cvc9p37o8,$cvc9p37o9,$cvc9p37o10,$cvc9p37o11,$cvc9p37cual);
       //echo json_encode(array('result' => 'guardado'));
    }
    //fin funcion para actualizar
    
}
