<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class  C_c12p2 extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->model('m_c12p2');//carga el controlador modelo
    }

    //funcion encargada de llamar a la vista de la pagina 
    public function fc_c12p2($page = 'v_c12p2') {

        if (!file_exists('application/views/pages/' . $page . '.php')) {
            // Whoops, we don't have a page for that!
            show_404();
        }
        $idintegrante = $this->input->get('idintegrante');
        $cfolio = $this->input->get('folio');//tomamos el valor del vivienda que viene por get

        //para traer la informacion de ayudas
        $cayudas = $this->m_c12p2->fm_ayudas();
        $ctextoayuda = '';
        foreach ($cayudas as $cayuda)
        {
            $ctextoayuda =  $cayuda->ayuda;
        }
        //Fin ayudas 
        
        //incio traer datos generales
        $cdatosgenerales = $this->m_c12p2->fm_cargardatosgenerales($cfolio,$idintegrante);
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
        $crespuestas = $this->m_c12p2->fm_buscarpregunta($idintegrante);
        $carrayrespuestas= array('ec12p2' => '','ec12p2ao1' => ''); 
        foreach ($crespuestas as $crespuesta)
        {
            $carrayrespuestas = array('ec12p2' => $crespuesta->c12p2,'ec12p2ao1' => $crespuesta->c12p2ao1);
        }
        //fin traer datos generales
        
       //Levantar vista     
        $titulo = 'Cap XII - Pregunta 2'; // para el titulo de la vista en la pestaña
        $this->load->view('pages/' . $page,  array('titulo' => $titulo, 
                                                   'foot' => FOOTS, 
                                                   'head' => HEAD, 
                                                   'botonerag' => BOTONERAG, 
                                                   'botoneraa' => BOTONERAA,
                                                   'botoneraadisable' => BOTONERAADISABLE,
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
        $cvalorc12p2= $this->input->get('vvalorc12p2');        
              
        $this->m_c12p2->fm_actualizarpregunta($cfolio,$cidintegrante,$cvalorc12p2);
       //echo json_encode(array('result' => 'guardado'));
    }
    //fin funcion para actualizar
    public function fc_traerp2(){
        
        $cidintegrante= $this->input->get('vidintegrante');  
        //incio traer respuestas
        $crespuestaspre = $this->m_c12p2->fm_buscarpregunta($cidintegrante);
        $carrayrespuestaspre= array('ec12p2ao1' => ''); 
        foreach ($crespuestaspre as $crespuestapre)
        {
            $carrayrespuestaspre = array('ec12p2ao1' => $crespuestapre->c12p2ao1);
        }
        //fin traer datos generales
        
        echo json_encode($carrayrespuestaspre);
        
    }
    //fin funcion para actualizar
    
}
