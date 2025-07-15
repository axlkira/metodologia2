<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class  C_c9p35intermedia extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->model('m_c9p35intermedia');//carga el controlador modelo
    }

    //funcion encargada de llamar a la vista de la pagina 
    public function fc_c9p35intermedia($page = 'v_c9p35intermedia') {

        if (!file_exists('application/views/pages/' . $page . '.php')) {
            // Whoops, we don't have a page for that!
            show_404();
        }
        $idintegrante = $this->input->get('idintegrante');
        $cfolio = $this->input->get('folio');//tomamos el valor del vivienda que viene por get

        //para traer la informacion de ayudas
        $cayudas = $this->m_c9p35intermedia->fm_ayudas();
        $ctextoayuda = '';
        foreach ($cayudas as $cayuda)
        {
            $ctextoayuda =  $cayuda->ayuda;
        }
        //Fin ayudas 
        
        //incio traer datos generales
        $cdatosgenerales = $this->m_c9p35intermedia->fm_cargardatosgenerales($cfolio,$idintegrante);
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
        $crespuestas = $this->m_c9p35intermedia->fm_buscarpregunta($idintegrante);
        $carrayrespuestas= array('ec9p35intermediao1' => '','ec9p35intermediao2' => '','ec9p35intermediao3' => '','ec9p35intermediao4' => '','ec9p35intermediao5' => '','ec9p35intermediao6' => '','ec9p35intermediao7' => '','ec9p35intermediao7cual' => '','ec9p35intermediao8' => '','ec9p35intermediao9' => ''); 
        foreach ($crespuestas as $crespuesta)
        {
            $carrayrespuestas = array('ec9p35intermediao1' => $crespuesta->c9p35intermediao1,'ec9p35intermediao2' => $crespuesta->c9p35intermediao2,'ec9p35intermediao3' => $crespuesta->c9p35intermediao3,
                                      'ec9p35intermediao4' => $crespuesta->c9p35intermediao4,'ec9p35intermediao5' => $crespuesta->c9p35intermediao5,'ec9p35intermediao6' => $crespuesta->c9p35intermediao6,'ec9p35intermediao7' => $crespuesta->c9p35intermediao7,'ec9p35intermediao7cual' => $crespuesta->c9p35intermediao7cual,'ec9p35intermediao8' => $crespuesta->c9p35intermediao8,'ec9p35intermediao9' => $crespuesta->c9p35intermediao9);
        }
        //fin traer datos generales
        
       //Levantar vista     
        $titulo = 'Cap IX - Pregunta 5'; // para el titulo de la vista en la pestaña
        $this->load->view('pages/' . $page,  array('titulo' => $titulo, 
                                                   'foot' => FOOTS, 
                                                   'head' => HEAD, 
                                                    'botoneraginter' => BOTONERAGINTER, 
                                                   'botoneraainter' => BOTONERAAINTER,
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
        $cc9p35intermediao1= $this->input->get('vc9p35intermediao1');   
        $cc9p35intermediao2= $this->input->get('vc9p35intermediao2');
        $cc9p35intermediao3= $this->input->get('vc9p35intermediao3');
        $cc9p35intermediao4= $this->input->get('vc9p35intermediao4');
        $cc9p35intermediao5= $this->input->get('vc9p35intermediao5');
        $cc9p35intermediao6= $this->input->get('vc9p35intermediao6');
        $cc9p35intermediao7= $this->input->get('vc9p35intermediao7');        
        $cc9p35intermediao7cual= $this->input->get('vc9p35intermediao7cual');
        $cc9p35intermediao8= $this->input->get('vc9p35intermediao8');
        $cc9p35intermediao9= $this->input->get('vc9p35intermediao9');
        
        
        
        $this->m_c9p35intermedia->fm_actualizarpregunta($cfolio,$cidintegrante,$cc9p35intermediao1,$cc9p35intermediao2,$cc9p35intermediao3,$cc9p35intermediao4,$cc9p35intermediao5,$cc9p35intermediao6,$cc9p35intermediao7,$cc9p35intermediao7cual,$cc9p35intermediao8,$cc9p35intermediao9);

    }
    //fin funcion para actualizar
    
}
