<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class  C_c1l2e1p52 extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->model('linea2estacion1/m_c1l2e1p52');//carga el controlador modelo
    }

    //funcion encargada de llamar a la vista de la pagina 
    public function fc_c1l2e1p52($page = 'v_c1l2e1p52') {

        if (!file_exists('application/views/pages/linea2estacion1/' . $page . '.php')) {
            // Whoops, we don't have a page for that!
            show_404();
        }

        $cfolio = $this->input->get('folio');//tomamos el valor del vivienda que viene por get

        //para traer la informacion de ayudas
        $cayudas = $this->m_c1l2e1p52->fm_ayudas();
        $ctextoayuda = '';
        foreach ($cayudas as $cayuda)
        {
            $ctextoayuda =  $cayuda->ayuda;
        }
        //Fin ayudas 
        
        //incio traer datos generales
        $cdatosgenerales = $this->m_c1l2e1p52->fm_cargardatosgenerales($cfolio);
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
        $crespuestas = $this->m_c1l2e1p52->fm_buscarpregunta($cfolio);
        $carrayrespuestas= array('ec1l2e1p52o1' => '','ec1l2e1p52o2' => '','ec1l2e1p52o3' => '','ec1l2e1p52o4' => '','ec1l2e1p52o5' => ''); 
        foreach ($crespuestas as $crespuesta)
        {
            $carrayrespuestas = array('ec1l2e1p52o1' => $crespuesta->c1l2e1p5o1ext,'ec1l2e1p52o2' => $crespuesta->c1l2e1p5o2ext,'ec1l2e1p52o3' => $crespuesta->c1l2e1p5o3ext,'ec1l2e1p52o4' => $crespuesta->c1l2e1p5o4ext,'ec1l2e1p52o5' => $crespuesta->c1l2e1p5o5ext);
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
        $cvalorc1l2e1p52o1= $this->input->get('vc1l2e1p52o1');   
        $cvalorc1l2e1p52o2= $this->input->get('vc1l2e1p52o2');
        $cvalorc1l2e1p52o3= $this->input->get('vc1l2e1p52o3');
        $cvalorc1l2e1p52o4= $this->input->get('vc1l2e1p52o4');
        $cvalorc1l2e1p52o5= $this->input->get('vc1l2e1p52o5');        
        $this->m_c1l2e1p52->fm_actualizarpregunta($cfolio,$cvalorc1l2e1p52o1,$cvalorc1l2e1p52o2,$cvalorc1l2e1p52o3,$cvalorc1l2e1p52o4,$cvalorc1l2e1p52o5);
       //echo json_encode(array('result' => 'guardado'));
    }
    //fin funcion para actualizar
    
    public function fc_cerrarpaso()
    {
       $cfolio = $this->input->get('vfolio');
       $cidpaso = $this->input->get('vidpaso');
       $cestado = $this->input->get('vestado');
       $this->m_c1l2e1p52->fm_cerrarpaso($cfolio,$cidpaso,$cestado);
    }
    
    
}
