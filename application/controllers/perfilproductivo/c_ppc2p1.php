<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class  C_ppc2p1 extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->model('/perfilproductivo/m_ppc2p1');//carga el controlador modelo
        
          if( $this->session->userdata('documento') == '')
        {
            redirect('/c_login/fc_vlogin');
        }
        
    }

    //funcion encargada de llamar a la vista de la pagina 
    public function fc_ppc2p1($page = 'v_ppc2p1') {

        if (!file_exists('application/views/pages/perfilproductivo/' . $page . '.php')) {
            // Whoops, we don't have a page for that!
            show_404();
        }
        $idintegrante = $this->input->get('idintegrante');
        $cfolio = $this->input->get('folio');//tomamos el valor del vivienda que viene por get

        //para traer la informacion de ayudas
        $cayudas = $this->m_ppc2p1->fm_ayudas();
        $ctextoayuda = '';
        foreach ($cayudas as $cayuda)
        {
            $ctextoayuda =  $cayuda->ayuda;
        }
        //Fin ayudas 
        
        //incio traer datos generales
        $cdatosgenerales = $this->m_ppc2p1->fm_cargardatosgenerales($cfolio,$idintegrante);
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
        $crespuestas = $this->m_ppc2p1->fm_buscarpregunta($idintegrante);
        $carrayrespuestas= array('eppc2p1o1' => '','eppc2p1o2' => ''); 
        foreach ($crespuestas as $crespuesta)
        {
            $carrayrespuestas = array('eppc2p1o1' => $crespuesta->ppc2p1o1,'eppc2p1o2' => $crespuesta->ppc2p1o2);
        }
        //fin traer datos generales
        
        //trae la informacion del primer select
        $idparametro = '';
        $listarespuestppc2p1o1 = $this->m_ppc2p1->fm_listarareaformacion($idparametro);
       
        $datosppc2p1o1 = '';
       
        foreach ($listarespuestppc2p1o1 as $respuestao1)
        {
            
        $datosppc2p1o1 .= '<option value="'.$respuestao1->areaformacion.'">'.$respuestao1->areaformacion.'</option>'; //se guarda el resultado del ption value en la variable datos
            
        }
        
        
       //fin del primer select
       
        $datosppc2p1o2 = '';
       
        
        
       //Levantar vista     
        $titulo = 'Cap II - Pregunta 1'; // para el titulo de la vista en la pestaña
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
                                                   'datosppc2p1o1'=> $datosppc2p1o1,
                                                   'datosppc2p1o2'=> $datosppc2p1o2));
        //Fin levantar vista
         
    }
    
    
    //funcion para actualizar
    public function fc_actualizar()
    {
        $cfolio = $this->input->get('vfolio');
        $cidintegrante= $this->input->get('vidintegrante');
        $cvalorppc2p1= $this->input->get('vareaformacionr1');  
        $cvalorppc2p2= $this->input->get('vareaformacionr2');
        $this->m_ppc2p1->fm_actualizarpregunta($cfolio,$cidintegrante,$cvalorppc2p1,$cvalorppc2p2);
       //echo json_encode(array('result' => 'guardado'));
    }
    //fin funcion para actualizar
    
    //recibe el parametro enviado desde la vista(respuesta primer select) y se la envia a la funcion fm_listarareaformacion del modelo
    public function fc_compararselect()
   {
        $cvalorppc2p1= $this->input->get('vareaformacionr1');
        
       
        
       $listarespuestppc2p1o2 = $this->m_ppc2p1->fm_listarareaformacion($cvalorppc2p1);
       
        $datosppc2p1o2 = '';
        //siempre aparecera seleccione una opcion, en caso de que solo respondan en el primer select
        $datosppc2p1o2 .= '<option value="">SELECCIONE UNA OPCION</option>';
       
        foreach ($listarespuestppc2p1o2 as $respuestao2)
        {
            
        $datosppc2p1o2 .= '<option value="'.$respuestao2->areaformacion.'">'.$respuestao2->areaformacion.'</option>'; //se guarda el resultado del ption value en la variable datos
            
        }
        //ipmprime resultado en el objeto html de la vista
        echo $datosppc2p1o2;
        
   }
   //fin funcion fc_compararselect
    
}
