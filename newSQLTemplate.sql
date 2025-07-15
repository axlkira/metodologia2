<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class  C_principalservidor extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->model('m_principalservidor');//carga el controlador modelo
    }

    //funcion encargada de llamar a la vista de la pagina 
    public function fc_principalservidor($page = 'v_principalservidor') {

        if (!file_exists('application/views/pages/' . $page . '.php')) {
            // Whoops, we don't have a page for that!
            show_404();
        }
//
//        $cfolio = $this->input->get('folio');//tomamos el valor del vivienda que viene por get
//        $ccrol = $this->input->get('crol');
        //para traer la informacion de ayudas
        $cdocumento = $this->session->userdata('documento');
        //$cdocumento = $this->input->get('documento');
        $rol = $this->m_principalservidor->fm_cargarrol($cdocumento);
        $crol = '';
        foreach ($rol as $roles)
        {
            $crol =  $roles->rol;
        }
                
                $disabledpb = 'disabled'; //acceso Plan de búsqueda
                $disabledcpb = 'disabled'; // acceso Consulta Plan de búsqueda
               $disabledcnsultareq = 'disabled'; // acceso Consulta Requerimientos
       		$disablede = 'disabled'; //acceso efectividad
        	$disabledh = 'disabled'; //acceso hogar
        	$disableda = 'disabled'; //acceso archivo
        	$disabledo = 'disabled'; //acceso oportunidad
            $disabledco = 'disabled'; //Consulta oportunidad
        	$disabledc = 'disabled'; //acceso cif
        	$disabledm67 = 'disabled'; //acceso 678
        	$disabledm3 = 'disabled'; //acceso m3
        	$disabledi = 'disabled'; //acceso inactivar folio
                $disabledacif = 'disabled'; // acceso a oportunidad cif
               $disabledinfo = 'disabled'; //acceso a informacion personal
                $disabledatrans = 'disabled';
                $disableuserfichero = 'disabled';
                $disablederi = 'disabled';
                $disablednocon = 'disabled';
                $disabledreq = 'disabled';
        
        
         if($crol == 'Estrategica'){
        
        	$disableuserfichero = '';
        	
        }    

        if($crol == 'efectividad'){
        
        	$disablede = '';
        	
        }
        if($crol == 'Auxiliar'){
        
        	$disabledc = '';
        	
        }
        if($crol == 'Auxiliar2' || $crol == 'Tecnico Apoyo'){
        
        	$disabledc = '';
        	
        }
        if($crol == 'oportunidadadmin'){
        
        	$disabledo = '';
        	
        }


 if($crol == 'Auxiliar' || $crol == 'Profesional' || $crol == 'Profesional1' ){
        
        	$disabledacif = '';
        	
        }

       if($crol == 'consultaoportunidad' || $crol == 'Coordinador' || $crol == 'Estrategica' || $crol == 'archivo' ||  $crol == 'Profesional' || $crol == 'Profesional1'  ||  $crol == 'Promotor familia' || $crol == 'Auxiliar' || $crol == 'Auxiliar2' || $crol == 'Tecnico Apoyo'  ){
        
        	$disabledco = '';
        	
        }
         if($crol == 'Profesional' || $crol == 'Estrategica' || $crol == 'Adminconsulta' || $crol == 'Coordinador' || $crol == 'Auxiliar'){
        
        	$disabledm67 = '';
        	//$disabledm3 = '';
        	
        }

        if( $crol == 'Profesional1' || $crol == 'Coordinador' || $crol == 'Auxiliar'){
        
        	
        	$disabledm3 = '';
        }

       
        if($crol == 'Coordinador'){
        
        	$disabledi = '';
        	
        }

        if($crol == 'Coordinador' || $crol == 'Estrategica'){
        
        	$disabledh = '';
        	
        }

         if($crol <> ''){
        
        	$disabledatrans = '';
        	
        }
 
        if($crol == 'todos'){
                
        	$disablede = ''; 
        	$disabledh = ''; 
        	$disableda = ''; 
        	$disabledo = ''; 
        	$disabledc = '';
        	$disabledm67 = '';
        	$disabledm3 = ''; 
        	$disabledi = ''; 
                $disabledacif = '';  
                $disableuserfichero = '';
                $disabledatrans = '';
                $disabledco = '';
        	$disabledpb = '';
                $disabledcpb = '';
//                $disabledcnsultareq = '';
        }


 

        
        
        //Fin ayudas 
        
        $cdatosgenerales = $this->m_principalservidor->fm_cargardatosgenerales($cdocumento);
        $carraydatosgenerales= array('edocumento' => '', 'enombre1' =>'','enombre2' =>'',  'eapellido1' => '','eapellido2' => '','erol' => ''); 
         foreach ($cdatosgenerales as $cdatgen)
         {
             $carraydatosgenerales = array('edocumento' => $cdatgen -> documento, 'enombre1' => $cdatgen -> nombre1,
                                           'enombre2' => $cdatgen -> nombre2,'eapellido1' => $cdatgen -> apellido1,
                                           'eapellido2' => $cdatgen -> apellido2,'erol' => $cdatgen -> rol);
         }
        
        //incio traer datos generales
//        $cdatosgenerales = $this->m_principalservidor->fm_cargardatosgenerales($cfolio);
//        $carraydatosgenerales= array('enomcoges' => '', 'efolio' =>'','erol' =>'',  'etitular' => '','edoctitular' => ''); 
//        foreach ($cdatosgenerales as $cdatgen)
//        {
//            $carraydatosgenerales = array('enomcoges' => $cdatgen->nomcoges,
//                                          'efolio' => $cdatgen->folio, 
//                                          'etitular' => $cdatgen->titular,
//                                          'edoctitular' => $cdatgen->doctitular);
//        }
        //fin traer datos generales
        
        //incio traer respuestas
//        $crespuestas = $this->m_principalservidor->fm_buscarpregunta($cfolio);
//        $carrayrespuestas= array('eprincipalservidor' => ''); 
//        foreach ($crespuestas as $crespuesta)
//        {
//            $carrayrespuestas = array('eprincipalservidor' => $crespuesta->principalservidor);
//        }
        //fin traer datos generales
        
       //Levantar vista     
        $titulo = 'Principalservidor'; // para el titulo de la vista en la pestaña
        $this->load->view('pages/' . $page,  array('titulo' => $titulo, 
                                               'foot' => FOOTS, 
                                               'head' => HEAD, 
                                               'botonerag' => BOTONERAG, 
                                               'botoneraa' => BOTONERAA,
                                               'documento' => $cdocumento,

                                               'crol' => $crol,
                                               'disabledpb' => $disabledpb,
                                               'disabledcpb' => $disabledcpb,
//                                               'disabledcnsultareq' => $disabledcnsultareq,
                                               'disablede' => $disablede, 
                                               'disabledi' => $disabledi, 
                                               'disabledh' => $disabledh,
				                'disableda' => $disableda,
				        	'disabledo' => $disabledo, 
                                                'disabledco' => $disabledco,
                                                'disabledacif' => $disabledacif,
                                                //'disabledinfo' => $disabledinfo,
				        	'disabledc' => $disabledc,'disabledm3' => $disabledm3,'disabledm67' => $disabledm67,
                                                'disabledatrans' => $disabledatrans,
                                                 'disableuserfichero' => $disableuserfichero,'disablederi' => $disablederi,'disablednocon' => $disablednocon,'disabledreq' => $disabledreq
                                                   ));
        //Fin levantar vista
         
    }
    
    
    //funcion para actualizar
//    public function fc_actualizar()
//    {
//        $cfolio = $this->input->get('vfolio');
//        $cvalorprincipalservidor= $this->input->get('vvalorprincipalservidor');        
//        $this->m_principalservidor->fm_actualizarpregunta($cfolio,$cvalorprincipalservidor);
//       //echo json_encode(array('result' => 'guardado'));
//    }
    //fin funcion para actualizar
    
    
    function fc_salir()
    {
        $this->session->sess_destroy();
    }
    
}