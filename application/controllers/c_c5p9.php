<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class  C_c5p9 extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->model('m_c5p9');//carga el controlador modelo
    }

    //funcion encargada de llamar a la vista de la pagina 
    public function fc_c5p9($page = 'v_c5p9') {

        if (!file_exists('application/views/pages/' . $page . '.php')) {
            // Whoops, we don't have a page for that!
            show_404();
        }
        $idintegrante = $this->input->get('idintegrante');
        $cfolio = $this->input->get('folio');//tomamos el valor del vivienda que viene por get

        //para traer la informacion de ayudas
        $cayudas = $this->m_c5p9->fm_ayudas();
        $ctextoayuda = '';
        foreach ($cayudas as $cayuda)
        {
            $ctextoayuda =  $cayuda->ayuda;
        }
        //Fin ayudas 
        
        //incio traer datos generales
        $cdatosgenerales = $this->m_c5p9->fm_cargardatosgenerales($cfolio,$idintegrante);
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
        $crespuestas = $this->m_c5p9->fm_buscarpregunta($idintegrante);
        $carrayrespuestas= array('ec5p9' => '','ec5p9a' => '', 'ec5p10o1' =>'','ec5p11'=>''); 
        foreach ($crespuestas as $crespuesta)
        {
            $carrayrespuestas = array('ec5p9' => $crespuesta->c5p9,'ec5p9a' => $crespuesta->c5p9a, 'ec5p10o1' => $crespuesta->c5p10o1,'ec5p11' => $crespuesta->c5p11);
        }
        //fin traer datos generales
        
       //Levantar vista     
        $titulo = 'Cap V - Pregunta 9'; // para el titulo de la vista en la pestaña
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
        $cvalorc5p9= $this->input->get('vvalorc5p9'); 
        $cvalorc5p9a= $this->input->get('vvalorc5p9a'); 
        $this->m_c5p9->fm_actualizarpregunta($cfolio,$cidintegrante,$cvalorc5p9,$cvalorc5p9a);
       //echo json_encode(array('result' => 'guardado'));
    }
    //fin funcion para actualizar
   public function fc_sspsaltoc5p9ac5p19()
   {
       $cfolio = $this->input->get('vfolio');
       $cidintegrante = $this->input->get('vidintegrante');
       
       $this->m_c5p9->fm_sspsaltoc5p9ac5p19($cfolio,$cidintegrante);
       //echo json_encode(array('result' => 'guardado'));
    }
    public function fc_sspsaltoc5p9ac6()
   {
       $cfolio = $this->input->get('vfolio');
       $cidintegrante = $this->input->get('vidintegrante');
       
       $this->m_c5p9->fm_sspsaltoc5p9ac6($cfolio,$cidintegrante);
       //echo json_encode(array('result' => 'guardado'));
    }
public function fc_sspnosaltoc5p9ac5p19()
   {
       $cfolio = $this->input->get('vfolio');
       $cidintegrante = $this->input->get('vidintegrante');
       
       $this->m_c5p9->fm_sspnosaltoc5p9ac5p19($cfolio,$cidintegrante);
       //echo json_encode(array('result' => 'guardado'));
    }
    public function fc_sspnosaltoc5p9ac6()
   {
       $cfolio = $this->input->get('vfolio');
       $cidintegrante = $this->input->get('vidintegrante');
       
       $this->m_c5p9->fm_sspnosaltoc5p9ac6($cfolio,$cidintegrante);
       //echo json_encode(array('result' => 'guardado'));
    }
    public function fc_sspsaltoc5p9ac6o2()
   {
       $cfolio = $this->input->get('vfolio');
       $cidintegrante = $this->input->get('vidintegrante');
       
       $this->m_c5p9->fm_sspsaltoc5p9ac6o2($cfolio,$cidintegrante);
       //echo json_encode(array('result' => 'guardado'));
    }
    
}
