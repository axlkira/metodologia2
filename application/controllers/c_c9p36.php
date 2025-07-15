<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class  C_c9p36 extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->model('m_c9p36');//carga el controlador modelo
    }

    //funcion encargada de llamar a la vista de la pagina 
    public function fc_c9p36($page = 'v_c9p36') {

        if (!file_exists('application/views/pages/' . $page . '.php')) {
            // Whoops, we don't have a page for that!
            show_404();
        }
        $idintegrante = $this->input->get('idintegrante');
        $cfolio = $this->input->get('folio');//tomamos el valor del vivienda que viene por get

        //para traer la informacion de ayudas
        $cayudas = $this->m_c9p36->fm_ayudas();
        $ctextoayuda = '';
        foreach ($cayudas as $cayuda)
        {
            $ctextoayuda =  $cayuda->ayuda;
        }
        //Fin ayudas 
        
        //incio traer datos generales
        $cdatosgenerales = $this->m_c9p36->fm_cargardatosgenerales($cfolio,$idintegrante);
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
        $crespuestas = $this->m_c9p36->fm_buscarpregunta($idintegrante);
        $carrayrespuestas= array('ec9p36o1' => '','ec9p36o2' => '','ec9p36o3' => '','ec9p36o4' => '','ec9p36o5' => '','ec9p36o6' => '','ec9p36o7' => '','ec9p36o8' => '', 'ec9p34'=>''); 
        foreach ($crespuestas as $crespuesta)
        {
            $carrayrespuestas = array('ec9p36o1' => $crespuesta->c9p36o1,'ec9p36o2' => $crespuesta->c9p36o2,'ec9p36o3' => $crespuesta->c9p36o3,
                                      'ec9p36o4' => $crespuesta->c9p36o4,
                'ec9p36o5' => $crespuesta->c9p36o5,'ec9p36o6' => $crespuesta->c9p36o6,'ec9p36o7' => $crespuesta->c9p36o7,'ec9p36o8' => $crespuesta->c9p36o8,
                'ec9p34' => $crespuesta->c9p34);
        }
        //fin traer datos generales
        
       //Levantar vista     
        $titulo = 'Cap IX - Pregunta 6'; // para el titulo de la vista en la pestaña
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
        $cc9p36o1= $this->input->get('vc9p36o1');   
        $cc9p36o2= $this->input->get('vc9p36o2');
        $cc9p36o3= $this->input->get('vc9p36o3');
        $cc9p36o4= $this->input->get('vc9p36o4');
        $cc9p36o5= $this->input->get('vc9p36o5');
        $cc9p36o6= $this->input->get('vc9p36o6');
        $cc9p36o7= $this->input->get('vc9p36o7');
        $cc9p36o8= $this->input->get('vc9p36o8');
        
        
        
        $this->m_c9p36->fm_actualizarpregunta($cfolio,$cidintegrante,$cc9p36o1,$cc9p36o2,$cc9p36o3,$cc9p36o4,$cc9p36o5,$cc9p36o6,$cc9p36o7,$cc9p36o8);

    }
    //fin funcion para actualizar
    
}
