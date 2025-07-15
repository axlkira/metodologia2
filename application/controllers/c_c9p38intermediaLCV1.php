<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class  C_c9p38intermediaLCV1 extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->model('m_c9p38intermediaLCV1');//carga el controlador modelo
    }

    //funcion encargada de llamar a la vista de la pagina 
    public function fc_c9p38intermediaLCV1($page = 'v_c9p38intermediaLCV1') {

        if (!file_exists('application/views/pages/' . $page . '.php')) {
            // Whoops, we don't have a page for that!
            show_404();
        }
        $idintegrante = $this->input->get('idintegrante');
        $cfolio = $this->input->get('folio');//tomamos el valor del vivienda que viene por get

        //para traer la informacion de ayudas
        $cayudas = $this->m_c9p38intermediaLCV1->fm_ayudas();
        $ctextoayuda = '';
        foreach ($cayudas as $cayuda)
        {
            $ctextoayuda =  $cayuda->ayuda;
        }
        //Fin ayudas 
        
        //incio traer datos generales
        $cdatosgenerales = $this->m_c9p38intermediaLCV1->fm_cargardatosgenerales($cfolio,$idintegrante);
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
        $crespuestas = $this->m_c9p38intermediaLCV1->fm_buscarpregunta($idintegrante);
        $carrayrespuestas= array('ec9p38intermediao1' => '','ec9p38intermediao2' => '','ec9p38intermediao3' => '',
                                 'ec9p38intermediao4' => '','ec9p38intermediao5' => '','ec9p38intermediao6' => '',
                                 'ec9p38intermediao7' => '','ec9p38intermediao8' => '','ec9p38intermediao9' => '','ec9p38intermediao10' => '','ec9p38intermediacual' => '','ec9p37intermediao11' => '','ec9p39intermediao7' => '');
        
        
        foreach ($crespuestas as $crespuesta)
        {
            $carrayrespuestas = array('ec9p38intermediao1' => $crespuesta->c9p38intermediao1,'ec9p38intermediao2' => $crespuesta->c9p38intermediao2,'ec9p38intermediao3' => $crespuesta->c9p38intermediao3,
                                      'ec9p38intermediao4' => $crespuesta->c9p38intermediao4,'ec9p38intermediao5' => $crespuesta->c9p38intermediao5,'ec9p38intermediao6' => $crespuesta->c9p38intermediao6,
                                      'ec9p38intermediao7' => $crespuesta->c9p38intermediao7,'ec9p38intermediao8' => $crespuesta->c9p38intermediao8,'ec9p38intermediao9' => $crespuesta->c9p38intermediao9,
                                      'ec9p38intermediao10' => $crespuesta->c9p38intermediao10,'ec9p38intermediacual' => $crespuesta->c9p38intermediacual,'ec9p37intermediao11' => $crespuesta->c9p37intermediao11,'ec9p39intermediao7' => $crespuesta->c9p39intermediao7);
        }
        //fin traer datos generales
        
       //Levantar vista     
        $titulo = 'Cap IX - Pregunta 2'; // para el titulo de la vista en la pestaña
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
        $cvc9p38intermediao1= $this->input->get('vc9p38intermediao1'); 
        $cvc9p38intermediao2= $this->input->get('vc9p38intermediao2');        
        $cvc9p38intermediao3= $this->input->get('vc9p38intermediao3');        
        $cvc9p38intermediao4= $this->input->get('vc9p38intermediao4');        
        $cvc9p38intermediao5= $this->input->get('vc9p38intermediao5');
        $cvc9p38intermediao6= $this->input->get('vc9p38intermediao6');
        $cvc9p38intermediao7= $this->input->get('vc9p38intermediao7');
        $cvc9p38intermediao8= $this->input->get('vc9p38intermediao8');
        $cvc9p38intermediao9= $this->input->get('vc9p38intermediao9');
        $cvc9p38intermediao10= $this->input->get('vc9p38intermediao10');
        $cvc9p38intermediacual= $this->input->get('vc9p38intermediacual');        
        $this->m_c9p38intermediaLCV1->fm_actualizarpregunta($cfolio,$cidintegrante,$cvc9p38intermediao1,$cvc9p38intermediao2,$cvc9p38intermediao3,$cvc9p38intermediao4,$cvc9p38intermediao5,$cvc9p38intermediao6,$cvc9p38intermediao7,$cvc9p38intermediao8,$cvc9p38intermediao9,$cvc9p38intermediao10,$cvc9p38intermediacual);
       //echo json_encode(array('result' => 'guardado'));
    }
    //fin funcion para actualizar
    
}
