<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class  C_c1l2e1p5 extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->model('linea2estacion1/m_c1l2e1p5');//carga el controlador modelo
    }

    //funcion encargada de llamar a la vista de la pagina 
    public function fc_c1l2e1p5($page = 'v_c1l2e1p5') {

        if (!file_exists('application/views/pages/linea2estacion1/' . $page . '.php')) {
            // Whoops, we don't have a page for that!
            show_404();
        }

        $cfolio = $this->input->get('folio');//tomamos el valor del vivienda que viene por get

        //para traer la informacion de ayudas
        $cayudas = $this->m_c1l2e1p5->fm_ayudas();
        $ctextoayuda = '';
        foreach ($cayudas as $cayuda)
        {
            $ctextoayuda =  $cayuda->ayuda;
        }
        //Fin ayudas 
        
        //incio traer datos generales
        $cdatosgenerales = $this->m_c1l2e1p5->fm_cargardatosgenerales($cfolio);
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
        $crespuestas = $this->m_c1l2e1p5->fm_buscarpregunta($cfolio);
        $carrayrespuestas= array('ec1l2e1p5o1' => '','ec1l2e1p5o2' => '','ec1l2e1p5o3' => '','ec1l2e1p5o4' => '','ec1l2e1p5o5' => '','ec1l2e1p5o6' => '','ec1l2e1p5o7' => '','ec1l2e1p5o8' => '','ec1l2e1p5o9' => '','ec1l2e1p5o10' => '','ec2p13' => ''); 
        foreach ($crespuestas as $crespuesta)
        {
            $carrayrespuestas = array('ec1l2e1p5o1' => $crespuesta->c1l2e1p5o1int,'ec1l2e1p5o2' => $crespuesta->c1l2e1p5o2int,'ec1l2e1p5o3' => $crespuesta->c1l2e1p5o3int,'ec1l2e1p5o4' => $crespuesta->c1l2e1p5o4int,'ec1l2e1p5o5' => $crespuesta->c1l2e1p5o5int,'ec1l2e1p5o6' => $crespuesta->c1l2e1p5o6int,'ec1l2e1p5o7' => $crespuesta->c1l2e1p5o7int,'ec1l2e1p5o8' => $crespuesta->c1l2e1p5o8int,'ec1l2e1p5o9' => $crespuesta->c1l2e1p5o9int,'ec1l2e1p5o10' => $crespuesta->c1l2e1p5o10int);
        }
        //fin traer datos generales
        
       //Levantar vista     
        $titulo = 'Paso 5'; // para el titulo de la vista en la pestaña
        $this->load->view('pages/linea2estacion1/' . $page,  array('titulo' => $titulo, 
                                                   'foot' => FOOTS, 
                                                   'head' => HEAD, 
                                                   'botoneragl2' => BOTONERAGl2, 
                                                   'botoneraal2' => BOTONERAAl2,
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
        $cvalorc1l2e1p5o1= $this->input->get('vc1l2e1p5o1');   
        $cvalorc1l2e1p5o2= $this->input->get('vc1l2e1p5o2');
        $cvalorc1l2e1p5o3= $this->input->get('vc1l2e1p5o3');
        $cvalorc1l2e1p5o4= $this->input->get('vc1l2e1p5o4');
        $cvalorc1l2e1p5o5= $this->input->get('vc1l2e1p5o5');
        $cvalorc1l2e1p5o6= $this->input->get('vc1l2e1p5o6');
        $cvalorc1l2e1p5o7= $this->input->get('vc1l2e1p5o7');
        $cvalorc1l2e1p5o8= $this->input->get('vc1l2e1p5o8');
        $cvalorc1l2e1p5o9= $this->input->get('vc1l2e1p5o9');
        $cvalorc1l2e1p5o10= $this->input->get('vc1l2e1p5o10');
        $this->m_c1l2e1p5->fm_actualizarpregunta($cfolio,$cvalorc1l2e1p5o1,$cvalorc1l2e1p5o2,$cvalorc1l2e1p5o3,$cvalorc1l2e1p5o4,$cvalorc1l2e1p5o5,$cvalorc1l2e1p5o6,$cvalorc1l2e1p5o7,$cvalorc1l2e1p5o8,$cvalorc1l2e1p5o9,$cvalorc1l2e1p5o10);
       //echo json_encode(array('result' => 'guardado'));
    }
    //fin funcion para actualizar
    
}
