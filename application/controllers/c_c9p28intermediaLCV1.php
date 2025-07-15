<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class  C_c9p28intermediaLCV1 extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->model('m_c9p28intermediaLCV1');//carga el controlador modelo
    }

    //funcion encargada de llamar a la vista de la pagina 
    public function fc_c9p28intermediaLCV1($page = 'v_c9p28intermediaLCV1') {

        if (!file_exists('application/views/pages/' . $page . '.php')) {
            // Whoops, we don't have a page for that!
            show_404();
        }
        $idintegrante = $this->input->get('idintegrante');
        $cfolio = $this->input->get('folio');//tomamos el valor del vivienda que viene por get

        //para traer la informacion de ayudas
        $cayudas = $this->m_c9p28intermediaLCV1->fm_ayudas();
        $ctextoayuda = '';
        foreach ($cayudas as $cayuda)
        {
            $ctextoayuda =  $cayuda->ayuda;
        }
        //Fin ayudas 
        
        //incio traer datos generales
        $cdatosgenerales = $this->m_c9p28intermediaLCV1->fm_cargardatosgenerales($cfolio,$idintegrante);
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
        $crespuestas = $this->m_c9p28intermediaLCV1->fm_buscarpregunta($idintegrante);
        $carrayrespuestas= array('ec9p28intermediao1' => '','ec9p28intermediao1cuanto' => '','ec9p28intermediao2' => '','ec9p28intermediao2cuanto' => '','ec9p28intermediao3' => '','ec9p28intermediao3cuanto' => '',
        'ec9p28intermediao4' => '','ec9p28intermediao4cuanto' => '','ec9p28intermediao5' => '','ec9p28intermediao5cuanto' => '','ec9p28intermediao6' => '','ec9p28intermediao6cuanto' => '','ec9p28intermediao7' => '','ec9p26' => ''); 
        foreach ($crespuestas as $crespuesta)
        {
            $carrayrespuestas = array('ec9p28intermediao1' => $crespuesta->c9p28intermediao1,'ec9p28intermediao1cuanto' => $crespuesta->c9p28intermediao1cuanto,'ec9p28intermediao2' => $crespuesta->c9p28intermediao2,
                                      'ec9p28intermediao2cuanto' => $crespuesta->c9p28intermediao2cuanto,'ec9p28intermediao3' => $crespuesta->c9p28intermediao3,'ec9p28intermediao3cuanto' => $crespuesta->c9p28intermediao3cuanto,
                                      'ec9p28intermediao4' => $crespuesta->c9p28intermediao4,'ec9p28intermediao4cuanto' => $crespuesta->c9p28intermediao4cuanto,'ec9p28intermediao5' => $crespuesta->c9p28intermediao5,
                                      'ec9p28intermediao5cuanto' => $crespuesta->c9p28intermediao5cuanto,'ec9p28intermediao6' => $crespuesta->c9p28intermediao6,'ec9p28intermediao6cuanto' => $crespuesta->c9p28intermediao6cuanto,'ec9p28intermediao7' => $crespuesta->c9p28intermediao7,'ec9p26' => $crespuesta->c9p26intermedia);
        }
        //fin traer datos generales
        
       //Levantar vista     
        $titulo = 'Cap IX - Pregunta 3'; // para el titulo de la vista en la pestaña
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
        $cc9p28intermediao1= $this->input->get('vc9p28intermediao1');   
        $cc9p28intermediao1cuanto= $this->input->get('vc9p28intermediao1cuanto');
        $cc9p28intermediao2= $this->input->get('vc9p28intermediao2');
        $cc9p28intermediao2cuanto= $this->input->get('vc9p28intermediao2cuanto');
        $cc9p28intermediao3= $this->input->get('vc9p28intermediao3');
        $cc9p28intermediao3cuanto= $this->input->get('vc9p28intermediao3cuanto');
        $cc9p28intermediao4= $this->input->get('vc9p28intermediao4');   
        $cc9p28intermediao4cuanto= $this->input->get('vc9p28intermediao4cuanto');
        $cc9p28intermediao5= $this->input->get('vc9p28intermediao5');
        $cc9p28intermediao5cuanto= $this->input->get('vc9p28intermediao5cuanto');
        $cc9p28intermediao6= $this->input->get('vc9p28intermediao6');
        $cc9p28intermediao6cuanto= $this->input->get('vc9p28intermediao6cuanto');
        $cc9p28intermediao7= $this->input->get('vc9p28intermediao7');

        
        $this->m_c9p28intermediaLCV1->fm_actualizarpregunta($cfolio,$cidintegrante,$cc9p28intermediao1,$cc9p28intermediao1cuanto,$cc9p28intermediao2,$cc9p28intermediao2cuanto,$cc9p28intermediao3,$cc9p28intermediao3cuanto,
                $cc9p28intermediao4,$cc9p28intermediao4cuanto,$cc9p28intermediao5,$cc9p28intermediao5cuanto,$cc9p28intermediao6,$cc9p28intermediao6cuanto,$cc9p28intermediao7);

    }
    //fin funcion para actualizar
    
}
