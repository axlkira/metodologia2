<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class  C_ppc4p14 extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->model('/perfilproductivo/m_ppc4p14');//carga el controlador modelo
    }

    //funcion encargada de llamar a la vista de la pagina 
    public function fc_ppc4p14($page = 'v_ppc4p14') {

        if (!file_exists('application/views/pages/perfilproductivo/'. $page . '.php')) {
            // Whoops, we don't have a page for that!
            show_404();
        }
//        $idintegrante = $this->input->get('idintegrante');
        $cfolio = $this->input->get('folio');//tomamos el valor del vivienda que viene por get

        //para traer la informacion de ayudas
        $cayudas = $this->m_ppc4p14->fm_ayudas();
        $ctextoayuda = '';
        foreach ($cayudas as $cayuda)
        {
            $ctextoayuda =  $cayuda->ayuda;
        }
        //Fin ayudas 
        
       //incio traer datos generales
        $cdatosgenerales = $this->m_ppc4p14->fm_cargardatosgenerales($cfolio);
        $carraydatosgenerales= array('enomcoges' => '', 'efolio' =>'', 'ecapitulo' => '', 'etitular' => '','edoctitular' => ''); 
        foreach ($cdatosgenerales as $cdatgen)
        {
            $carraydatosgenerales = array('enomcoges' => $cdatgen->nomcoges,
                                          'efolio' => $cdatgen->folio, 
                                          'ecapitulo' => $cdatgen->capitulo,
                                          'etitular' => $cdatgen->titular,
                                          'edoctitular' => $cdatgen->doctitular);
        }
        //fin traer datos generales
        
        //incio traer respuestas
        $crespuestas = $this->m_ppc4p14->fm_buscarpregunta($cfolio);
        $carrayrespuestas= array('eppc4p14a1' => '','eppc4p14a2' => '','eppc4p14a3' => '','eppc4p14a4' => '','eppc4p14a5' => '','eppc4p14acual' => ''); 
        foreach ($crespuestas as $crespuesta)
        {
            $carrayrespuestas = array('eppc4p14a1' => $crespuesta->ppc4p14a1,'eppc4p14a2' => $crespuesta->ppc4p14a2,'eppc4p14a3' => $crespuesta->ppc4p14a3,
                                      'eppc4p14a4' => $crespuesta->ppc4p14a4,'eppc4p14a5' => $crespuesta->ppc4p14a5,'eppc4p14acual' => $crespuesta->ppc4p14acual);
        }
        //fin traer datos generales
        
       //Levantar vista     
        $titulo = 'Cap I - Pregunta 1.5.2'; // para el titulo de la vista en la pestaña
        $this->load->view('pages/perfilproductivo/' . $page,  array('titulo' => $titulo, 
                                                   'foot' => FOOTS, 
                                                   'head' => HEAD, 
                                                   'botonerag' => BOTONERAG2H, 
                                                   'botoneraa' => BOTONERAA2H,
                                                   'folio' => $cfolio,
                                                   'textoayuda' => $ctextoayuda, 
                                                   'arraydatosgenerales' => $carraydatosgenerales, 
                                                   'arrayrespuestas' => $carrayrespuestas));
        //Fin levantar vista
         
    }
    
    
    //funcion para actualizar
    public function fc_actualizar()
    {
        $cfolio = $this->input->get('vfolio');         
        $cppc4p14a1= $this->input->get('vppc4p14a1');   
        $cppc4p14a2= $this->input->get('vppc4p14a2');
        $cppc4p14a3= $this->input->get('vppc4p14a3');
        $cppc4p14a4= $this->input->get('vppc4p14a4');
        $cppc4p14a5= $this->input->get('vppc4p14a5');
        $cvppc4p14cual= $this->input->get('vppc4p14acual');
        
       
        $this->m_ppc4p14->fm_actualizarpregunta($cfolio,$cppc4p14a1,$cppc4p14a2,$cppc4p14a3,$cppc4p14a4,$cppc4p14a5,$cvppc4p14cual);
        
        
        
       
    }
    //fin funcion para actualizar
    
}
