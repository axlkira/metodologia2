<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class  C_c9p42intermediaLCV1 extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->model('m_c9p42intermediaLCV1');//carga el controlador modelo
    }

    //funcion encargada de llamar a la vista de la pagina 
    public function fc_c9p42intermediaLCV1($page = 'v_c9p42intermediaLCV1') {

        if (!file_exists('application/views/pages/' . $page . '.php')) {
            // Whoops, we don't have a page for that!
            show_404();
        }
        $idintegrante = $this->input->get('idintegrante');
        $cfolio = $this->input->get('folio');//tomamos el valor del vivienda que viene por get

        //para traer la informacion de ayudas
        $cayudas = $this->m_c9p42intermediaLCV1->fm_ayudas();
        $ctextoayuda = '';
        foreach ($cayudas as $cayuda)
        {
            $ctextoayuda =  $cayuda->ayuda;
        }
        //Fin ayudas 
        
        //incio traer datos generales
        $cdatosgenerales = $this->m_c9p42intermediaLCV1->fm_cargardatosgenerales($cfolio,$idintegrante);
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
        $crespuestas = $this->m_c9p42intermediaLCV1->fm_buscarpregunta($idintegrante);
        $carrayrespuestas= array('ec9p42intermediao1' => '','ec9p42intermediao2' => '','ec9p42intermediao3' => '',
                                 'ec9p42intermediao4' => '','ec9p42intermediao5' => '','ec9p42intermediacual' => '','ec9p43' =>'');
        
        
        foreach ($crespuestas as $crespuesta)
        {
            $carrayrespuestas = array('ec9p42intermediao1' => $crespuesta->c9p42intermediao1,'ec9p42intermediao2' => $crespuesta->c9p42intermediao2,'ec9p42intermediao3' => $crespuesta->c9p42intermediao3,
                                      'ec9p42intermediao4' => $crespuesta->c9p42intermediao4,'ec9p42intermediao5' => $crespuesta->c9p42intermediao5,'ec9p42intermediacual' => $crespuesta->c9p42intermediacual,'ec9p43' => $crespuesta->c9p43intermedia);
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
        $cvc9p42intermediao1= $this->input->get('vc9p42intermediao1'); 
        $cvc9p42intermediao2= $this->input->get('vc9p42intermediao2');        
        $cvc9p42intermediao3= $this->input->get('vc9p42intermediao3');        
        $cvc9p42intermediao4= $this->input->get('vc9p42intermediao4');        
        $cvc9p42intermediao5= $this->input->get('vc9p42intermediao5');
        $cvc9p42intermediacual= $this->input->get('vc9p42intermediacual');        
        $this->m_c9p42intermediaLCV1->fm_actualizarpregunta($cfolio,$cidintegrante,$cvc9p42intermediao1,$cvc9p42intermediao2,$cvc9p42intermediao3,$cvc9p42intermediao4,$cvc9p42intermediao5,$cvc9p42intermediacual);
       //echo json_encode(array('result' => 'guardado'));
    }
    //fin funcion para actualizar
    
}
