<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class  C_c9p36intermedia extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->model('m_c9p36intermedia');//carga el controlador modelo
    }

    //funcion encargada de llamar a la vista de la pagina 
    public function fc_c9p36intermedia($page = 'v_c9p36intermedia') {

        if (!file_exists('application/views/pages/' . $page . '.php')) {
            // Whoops, we don't have a page for that!
            show_404();
        }
        $idintegrante = $this->input->get('idintegrante');
        $cfolio = $this->input->get('folio');//tomamos el valor del vivienda que viene por get

//        $doccogestor = $this->input->get('doccogestor');
           $doccogestor =  $this->session->userdata('documento');
        //para traer la informacion de ayudas
        $cayudas = $this->m_c9p36intermedia->fm_ayudas();
        $ctextoayuda = '';
        foreach ($cayudas as $cayuda)
        {
            $ctextoayuda =  $cayuda->ayuda;
        }
        //Fin ayudas 
        
        //incio traer datos generales
        $cdatosgenerales = $this->m_c9p36intermedia->fm_cargardatosgenerales($cfolio,$idintegrante);
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
        $crespuestas = $this->m_c9p36intermedia->fm_buscarpregunta($idintegrante);
        $carrayrespuestas= array('ec9p36intermediao1' => '','ec9p36intermediao2' => '','ec9p36intermediao3' => '','ec9p36intermediao4' => '','ec9p36intermediao5' => '','ec9p36intermediao6' => '','ec9p36intermediao7' => '','ec9p36intermediao8' => '','ec9p36intermediao8cual' => '', 'ec9p34'=>''); 
        foreach ($crespuestas as $crespuesta)
        {
            $carrayrespuestas = array('ec9p36intermediao1' => $crespuesta->c9p36intermediao1,'ec9p36intermediao2' => $crespuesta->c9p36intermediao2,'ec9p36intermediao3' => $crespuesta->c9p36intermediao3,
                                      'ec9p36intermediao4' => $crespuesta->c9p36intermediao4,
                'ec9p36intermediao5' => $crespuesta->c9p36intermediao5,'ec9p36intermediao6' => $crespuesta->c9p36intermediao6,'ec9p36intermediao7' => $crespuesta->c9p36intermediao7,'ec9p36intermediao8' => $crespuesta->c9p36intermediao8,'ec9p36intermediao8cual' => $crespuesta->c9p36intermediao8cual,
                'ec9p34' => $crespuesta->c9p34intermedia);
        }
        //fin traer datos generales
        
       //Levantar vista     
        $titulo = 'Cap IX - Pregunta 6'; // para el titulo de la vista en la pestaña
        $this->load->view('pages/' . $page,  array('titulo' => $titulo, 
                                                   'foot' => FOOTS, 
                                                   'head' => HEAD, 
                                                    'botoneraginter' => BOTONERAGINTER, 
                                                   'botoneraainter' => BOTONERAAINTER,
                                                   'folio' => $cfolio,
                                                   'doccogestor'=>$doccogestor,
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
        $cc9p36intermediao1= $this->input->get('vc9p36intermediao1');   
        $cc9p36intermediao2= $this->input->get('vc9p36intermediao2');
        $cc9p36intermediao3= $this->input->get('vc9p36intermediao3');
        $cc9p36intermediao4= $this->input->get('vc9p36intermediao4');
        $cc9p36intermediao5= $this->input->get('vc9p36intermediao5');
        $cc9p36intermediao6= $this->input->get('vc9p36intermediao6');
        $cc9p36intermediao7= $this->input->get('vc9p36intermediao7');
        $cc9p36intermediao8= $this->input->get('vc9p36intermediao8');
        $cc9p36intermediao9= $this->input->get('vc9p36intermediao8cual');
        
        
        
        $this->m_c9p36intermedia->fm_actualizarpregunta($cfolio,$cidintegrante,$cc9p36intermediao1,$cc9p36intermediao2,$cc9p36intermediao3,$cc9p36intermediao4,$cc9p36intermediao5,$cc9p36intermediao6,$cc9p36intermediao7,$cc9p36intermediao8,$cc9p36intermediao9);

    }
    //fin funcion para actualizar
    
}
