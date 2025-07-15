<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class  C_ppc3p4 extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->model('/perfilproductivo/m_ppc3p4');//carga el controlador modelo
        
        
          if( $this->session->userdata('documento') == '')
        {
            redirect('/c_login/fc_vlogin');
        }
    }

    //funcion encargada de llamar a la vista de la pagina 
    public function fc_ppc3p4($page = 'v_ppc3p4') {

        if (!file_exists('application/views/pages/perfilproductivo/' . $page . '.php')) {
            // Whoops, we don't have a page for that!
            show_404();
        }
        $idintegrante = $this->input->get('idintegrante');
        $cfolio = $this->input->get('folio');//tomamos el valor del vivienda que viene por get

        //para traer la informacion de ayudas
        $cayudas = $this->m_ppc3p4->fm_ayudas();
        $ctextoayuda = '';
        foreach ($cayudas as $cayuda)
        {
            $ctextoayuda =  $cayuda->ayuda;
        }
        //Fin ayudas 
        
        //incio traer datos generales
        $cdatosgenerales = $this->m_ppc3p4->fm_cargardatosgenerales($cfolio,$idintegrante);
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
        $crespuestas = $this->m_ppc3p4->fm_buscarpregunta($idintegrante);
        $arrayrespuestas= array('eppc3p4a1' => '','eppc3p4a2' => '','eppc3p4a3' => '','eppc3p4a4' => ''); 
        
        foreach ($crespuestas as $crespuesta)
        {
            $arrayrespuestas = array('eppc3p4a1' => $crespuesta->ppc3p4a1,'eppc3p4a2' => $crespuesta->ppc3p4a2,'eppc3p4a3' => $crespuesta->ppc3p4a3,
                                      'eppc3p4a4' => $crespuesta->ppc3p4a4);
        }
        //fin traer datos generales
        
        
        
        
       //Levantar vista     
        $titulo = 'Cap III - Pregunta 4'; // para el titulo de la vista en la pestaña
        $this->load->view('pages/perfilproductivo/' . $page,  array('titulo' => $titulo, 
                                                   'foot' => FOOTS, 
                                                   'head' => HEAD, 
                                                    'botonerag' => BOTONERAG2, 
                                                   'botoneraa' => BOTONERAA2,
                                                   'folio' => $cfolio,
                                                   'idintegrante' => $idintegrante,
                                                   'textoayuda' => $ctextoayuda, 
                                                   'arraydatosgenerales' => $carraydatosgenerales, 
                                                   'arrayrespuestas' => $arrayrespuestas,
                                                   ));
        //Fin levantar vista
         
    }
    
    
    //funcion para actualizar
    public function fc_actualizar()
    {
        $cfolio = $this->input->get('vfolio');
        $cidintegrante= $this->input->get('vidintegrante');
        $cvvalorppc3p4a1= $this->input->get('vvalorppc3p4a1');  
        $cvvalorppc3p4a2= $this->input->get('vvalorppc3p4a2');  
        $cvvalorppc3p4a3= $this->input->get('vvalorppc3p4a3');  
        $cvvalorppc3p4a4= $this->input->get('vvalorppc3p4a4');  
        $this->m_ppc3p4->fm_actualizarpregunta($cfolio,$cidintegrante,$cvvalorppc3p4a1,$cvvalorppc3p4a2,$cvvalorppc3p4a3,$cvvalorppc3p4a4);
       //echo json_encode(array('result' => 'guardado'));
    }
    //fin funcion para actualizar
    
   
    
}
