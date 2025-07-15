<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class  C_c9p27intermedia extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->model('m_c9p27intermedia');//carga el controlador modelo
    }

    //funcion encargada de llamar a la vista de la pagina 
    public function fc_c9p27intermedia($page = 'v_c9p27intermedia') {

        if (!file_exists('application/views/pages/' . $page . '.php')) {
            // Whoops, we don't have a page for that!
            show_404();
        }
        $idintegrante = $this->input->get('idintegrante');
        $cfolio = $this->input->get('folio');//tomamos el valor del vivienda que viene por get

        //para traer la informacion de ayudas
        $cayudas = $this->m_c9p27intermedia->fm_ayudas();
        $ctextoayuda = '';
        foreach ($cayudas as $cayuda)
        {
            $ctextoayuda =  $cayuda->ayuda;
        }
        //Fin ayudas 
        
        //incio traer datos generales
        $cdatosgenerales = $this->m_c9p27intermedia->fm_cargardatosgenerales($cfolio,$idintegrante);
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
        $crespuestas = $this->m_c9p27intermedia->fm_buscarpregunta($idintegrante);
        $carrayrespuestas= array('ec9p27intermediao1' => '','ec9p27intermediao1cuanto' => '','ec9p27intermediao2' => '','ec9p27intermediao2cuanto' => '','ec9p27intermediao3' => '','ec9p27intermediao3cuanto' => ''); 
        foreach ($crespuestas as $crespuesta)
        {
            $carrayrespuestas = array('ec9p27intermediao1' => $crespuesta->c9p27intermediao1,'ec9p27intermediao1cuanto' => $crespuesta->c9p27intermediao1cuanto,'ec9p27intermediao2' => $crespuesta->c9p27intermediao2,
                                      'ec9p27intermediao2cuanto' => $crespuesta->c9p27intermediao2cuanto,'ec9p27intermediao3' => $crespuesta->c9p27intermediao3,'ec9p27intermediao3cuanto' => $crespuesta->c9p27intermediao3cuanto);
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
        $cc9p27intermediao1= $this->input->get('vc9p27intermediao1');   
        $cc9p27intermediao1cuanto= $this->input->get('vc9p27intermediao1cuanto');
        $cc9p27intermediao2= $this->input->get('vc9p27intermediao2');
        $cc9p27intermediao2cuanto= $this->input->get('vc9p27intermediao2cuanto');
        $cc9p27intermediao3= $this->input->get('vc9p27intermediao3');
        $cc9p27intermediao3cuanto= $this->input->get('vc9p27intermediao3cuanto');
        
        
        
        $this->m_c9p27intermedia->fm_actualizarpregunta($cfolio,$cidintegrante,$cc9p27intermediao1,$cc9p27intermediao1cuanto,$cc9p27intermediao2,$cc9p27intermediao2cuanto,$cc9p27intermediao3,$cc9p27intermediao3cuanto);

    }
    //fin funcion para actualizar
    
}
