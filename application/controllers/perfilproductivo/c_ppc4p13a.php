<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class  C_ppc4p13a extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->model('/perfilproductivo/m_ppc4p13a');//carga el controlador modelo
        
        
          if( $this->session->userdata('documento') == '')
        {
            redirect('/c_login/fc_vlogin');
        }
    }

    //funcion encargada de llamar a la vista de la pagina 
    public function fc_ppc4p13a($page = 'v_ppc4p13a') {

        if (!file_exists('application/views/pages/perfilproductivo/' . $page . '.php')) {
            // Whoops, we don't have a page for that!
            show_404();
        }
        $idintegrante = $this->input->get('idintegrante');
        $cfolio = $this->input->get('folio');//tomamos el valor del vivienda que viene por get

        //para traer la informacion de ayudas
        $cayudas = $this->m_ppc4p13a->fm_ayudas();
        $ctextoayuda = '';
        foreach ($cayudas as $cayuda)
        {
            $ctextoayuda =  $cayuda->ayuda;
        }
        //Fin ayudas 
        
        //incio traer datos generales
        $cdatosgenerales = $this->m_ppc4p13a->fm_cargardatosgenerales($cfolio,$idintegrante);
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
        $crespuestas = $this->m_ppc4p13a->fm_buscarpregunta($idintegrante);
        $arrayrespuestas= array('eppc4p13a1' => '','eppc4p13a2' => '','eppc4p13a3' => '','eppc4p13a4' => '','eppc4p13a5' => '',
                                 'eppc4p13a6' => '','eppc4p13a7' => '','eppc4p13a8' => '','eppc4p13a9' => '','eppc4p13a10' => '',
                                 'eppc4p13a11' => '','eppc4p13a12' => '','eppc4p13a13' => '','eppc4p13a14' => '','eppc4p13a15' => '',
                                 'eppc4p13a16' => '','eppc4p13a17' => '','eppc4p13a18' => ''); 
        
        foreach ($crespuestas as $crespuesta)
        {
            $arrayrespuestas = array('eppc4p13a1' => $crespuesta->ppc4p13a1,'eppc4p13a2' => $crespuesta->ppc4p13a2,'eppc4p13a3' => $crespuesta->ppc4p13a3,
                'eppc4p13a4' => $crespuesta->ppc4p13a4,'eppc4p13a5' => $crespuesta->ppc4p13a5,'eppc4p13a6' => $crespuesta->ppc4p13a6,'eppc4p13a7' => $crespuesta->ppc4p13a7,
                'eppc4p13a8' => $crespuesta->ppc4p13a8,'eppc4p13a9' => $crespuesta->ppc4p13a9,'eppc4p13a10' => $crespuesta->ppc4p13a10,'eppc4p13a11' => $crespuesta->ppc4p13a11,
                'eppc4p13a12' => $crespuesta->ppc4p13a12,'eppc4p13a13' => $crespuesta->ppc4p13a13,'eppc4p13a14' => $crespuesta->ppc4p13a14,'eppc4p13a15' => $crespuesta->ppc4p13a15,
                'eppc4p13a16' => $crespuesta->ppc4p13a16,'eppc4p13a17' => $crespuesta->ppc4p13a17,'eppc4p13a18' => $crespuesta->ppc4p13a18);
        }
        //fin traer datos generales
        
        
        
        
       //Levantar vista     
        $titulo = 'Cap IV - Pregunta 13a'; // para el titulo de la vista en la pestaña
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
        $cvppc4p13a1= $this->input->get('vppc4p13a1'); 
        $cvppc4p13a2= $this->input->get('vppc4p13a2');  
        $cvppc4p13a3= $this->input->get('vppc4p13a3');  
        $cvppc4p13a4= $this->input->get('vppc4p13a4');  
        $cvppc4p13a5= $this->input->get('vppc4p13a5');  
        $cvppc4p13a6= $this->input->get('vppc4p13a6');  
        $cvppc4p13a7= $this->input->get('vppc4p13a7');  
        $cvppc4p13a8= $this->input->get('vppc4p13a8');  
        $cvppc4p13a9= $this->input->get('vppc4p13a9');  
        $cvppc4p13a10= $this->input->get('vppc4p13a10');  
        $cvppc4p13a11= $this->input->get('vppc4p13a11');  
        $cvppc4p13a12= $this->input->get('vppc4p13a12');  
        $cvppc4p13a13= $this->input->get('vppc4p13a13');  
        $cvppc4p13a14= $this->input->get('vppc4p13a14');  
        $cvppc4p13a15= $this->input->get('vppc4p13a15');  
        $cvppc4p13a16= $this->input->get('vppc4p13a16');  
        $cvppc4p13a17= $this->input->get('vppc4p13a17');  
        $cvppc4p13a18= $this->input->get('vppc4p13a18');  
        $this->m_ppc4p13a->fm_actualizarpregunta($cfolio,$cidintegrante,$cvppc4p13a1,$cvppc4p13a2,$cvppc4p13a3,$cvppc4p13a4,$cvppc4p13a5,$cvppc4p13a6,$cvppc4p13a7,
               $cvppc4p13a8,$cvppc4p13a9 ,$cvppc4p13a10,$cvppc4p13a11,$cvppc4p13a12,$cvppc4p13a13,$cvppc4p13a14,$cvppc4p13a15,$cvppc4p13a16,$cvppc4p13a17,$cvppc4p13a18);
       //echo json_encode(array('result' => 'guardado'));
    }
    //fin funcion para actualizar
    
   
    
}
