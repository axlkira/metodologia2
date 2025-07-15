<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class  C_ppc3p3e extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->model('/perfilproductivo/m_ppc3p3e');//carga el controlador modelo
        
        
          if( $this->session->userdata('documento') == '')
        {
            redirect('/c_login/fc_vlogin');
        }
    }

    //funcion encargada de llamar a la vista de la pagina 
    public function fc_ppc3p3e($page = 'v_ppc3p3e') {

        if (!file_exists('application/views/pages/perfilproductivo/' . $page . '.php')) {
            // Whoops, we don't have a page for that!
            show_404();
        }
        $idintegrante = $this->input->get('idintegrante');
        $cfolio = $this->input->get('folio');//tomamos el valor del vivienda que viene por get

        //para traer la informacion de ayudas
        $cayudas = $this->m_ppc3p3e->fm_ayudas();
        $ctextoayuda = '';
        foreach ($cayudas as $cayuda)
        {
            $ctextoayuda =  $cayuda->ayuda;
        }
        //Fin ayudas 
        
        //incio traer datos generales
        $cdatosgenerales = $this->m_ppc3p3e->fm_cargardatosgenerales($cfolio,$idintegrante);
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
        }    //fin traer datos generales
        
        //incio traer respuestas
        $crespuestas = $this->m_ppc3p3e->fm_buscarpregunta($idintegrante);
        $carrayrespuestas= array('eppc3p3e1' => '','eppc3p3e2' => '','eppc3p3e3' => '','eppc3p3e4' => '','eppc3p3e5' => '','eppc3p3e6' => ''
                                 ,'eppc3p3e7' => '','eppc3p3e8' => '','eppc3p3e9' => '','eppc3p3e10' => '','eppc3p3ecual' => '', 'eppc3p3a'=>''); 
        
        foreach ($crespuestas as $crespuesta)
        {
            $carrayrespuestas = array('eppc3p3e1' => $crespuesta->ppc3p3e1,'eppc3p3e2' => $crespuesta->ppc3p3e2,'eppc3p3e3' => $crespuesta->ppc3p3e3,
                'eppc3p3e4' => $crespuesta->ppc3p3e4,'eppc3p3e5' => $crespuesta->ppc3p3e5,'eppc3p3e6' => $crespuesta->ppc3p3e6,'eppc3p3e7' => $crespuesta->ppc3p3e7,
                'eppc3p3e8' => $crespuesta->ppc3p3e8,'eppc3p3e9' => $crespuesta->ppc3p3e9,'eppc3p3e10' => $crespuesta->ppc3p3e10,'eppc3p3ecual' => $crespuesta->ppc3p3ecual,'eppc3p3a' => $crespuesta->ppc3p3a);
        }
        //fin traer datos generales
        
        
        
        
       //Levantar vista     
        $titulo = 'Cap III - Pregunta 3e'; // para el titulo de la vista en la pestaña
        $this->load->view('pages/perfilproductivo/' . $page,  array('titulo' => $titulo, 
                                                   'foot' => FOOTS, 
                                                   'head' => HEAD, 
                                                   'botonerag' => BOTONERAG2, 
                                                   'botoneraa' => BOTONERAA2,
                                                   'folio' => $cfolio,
                                                   'idintegrante' => $idintegrante,
                                                   'textoayuda' => $ctextoayuda, 
                                                   'arraydatosgenerales' => $carraydatosgenerales, 
                                                   'carrayrespuestas' => $carrayrespuestas,
                                                   ));
        //Fin levantar vista
         
    }
    
    
    //funcion para actualizar
    public function fc_actualizar()
    {
        $cfolio = $this->input->get('vfolio');
        $cidintegrante= $this->input->get('vidintegrante');
        $cvppc3p3e1= $this->input->get('vppc3p3e1');  
        $cvppc3p3e2= $this->input->get('vppc3p3e2');  
        $cvppc3p3e3= $this->input->get('vppc3p3e3');  
        $cvppc3p3e4= $this->input->get('vppc3p3e4');  
        $cvppc3p3e5= $this->input->get('vppc3p3e5');  
        $cvppc3p3e6= $this->input->get('vppc3p3e6');  
        $cvppc3p3e7= $this->input->get('vppc3p3e7');  
        $cvppc3p3e8= $this->input->get('vppc3p3e8');  
        $cvppc3p3e9= $this->input->get('vppc3p3e9');  
        $cvppc3p3e10= $this->input->get('vppc3p3e10');  
        $cvppc3p3ecual= $this->input->get('vppc3p3ecual');  
        
        $this->m_ppc3p3e->fm_actualizar($cfolio,$cidintegrante,$cvppc3p3e1,$cvppc3p3e2,$cvppc3p3e3,$cvppc3p3e3,$cvppc3p3e4,$cvppc3p3e5,$cvppc3p3e6,$cvppc3p3e7,
                                        $cvppc3p3e8,$cvppc3p3e9 ,$cvppc3p3e10,$cvppc3p3ecual );
       //echo json_encode(array('result' => 'guardado'));
    }
    //fin funcion para actualizar
    
   
    
}
