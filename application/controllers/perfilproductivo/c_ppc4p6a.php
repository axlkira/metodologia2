<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class  C_ppc4p6a extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->model('/perfilproductivo/m_ppc4p6a');//carga el controlador modelo
        
        
          if( $this->session->userdata('documento') == '')
        {
            redirect('/c_login/fc_vlogin');
        }
    }

    //funcion encargada de llamar a la vista de la pagina 
    public function fc_ppc4p6a($page = 'v_ppc4p6a') {

        if (!file_exists('application/views/pages/perfilproductivo/' . $page . '.php')) {
            // Whoops, we don't have a page for that!
            show_404();
        }
        $idintegrante = $this->input->get('idintegrante');
        $cfolio = $this->input->get('folio');//tomamos el valor del vivienda que viene por get

        //para traer la informacion de ayudas
        $cayudas = $this->m_ppc4p6a->fm_ayudas();
        $ctextoayuda = '';
        foreach ($cayudas as $cayuda)
        {
            $ctextoayuda =  $cayuda->ayuda;
        }
        //Fin ayudas 
        
        //incio traer datos generales
        $cdatosgenerales = $this->m_ppc4p6a->fm_cargardatosgenerales($cfolio,$idintegrante);
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
        $crespuestas = $this->m_ppc4p6a->fm_buscarpregunta($idintegrante);
        $carrayrespuestas= array('eppc4p6a1' => '','eppc4p6a2' => '','eppc4p6a3' => '','eppc4p6a4' => ''); 
        
        foreach ($crespuestas as $crespuesta)
        {
            $carrayrespuestas = array('eppc4p6a1' => $crespuesta->ppc4p6a1,'eppc4p6a2' => $crespuesta->ppc4p6a2,'eppc4p6a3' => $crespuesta->ppc4p6a3,
                'eppc4p6a4' => $crespuesta->ppc4p6a4);
        }
        //fin traer datos generales
        
        
        
        
       //Levantar vista     
        $titulo = 'Cap IV - Pregunta 6a'; // para el titulo de la vista en la pestaña
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
        $cvppc4p6a1= $this->input->get('vppc4p6a1');  
        $cvppc4p6a2= $this->input->get('vppc4p6a2');  
        $cvppc4p6a3= $this->input->get('vppc4p6a3');  
        $cvppc4p6a4= $this->input->get('vppc4p6a4');  
         
          
        
        $this->m_ppc4p6a->fm_actualizar($cfolio,$cidintegrante,$cvppc4p6a1,$cvppc4p6a2,$cvppc4p6a3,$cvppc4p6a3,$cvppc4p6a4);
       //echo json_encode(array('result' => 'guardado'));
    }
    //fin funcion para actualizar
    
   
    
}
