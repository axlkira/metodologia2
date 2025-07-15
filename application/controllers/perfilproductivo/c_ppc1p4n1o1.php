<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class  C_ppc1p4n1o1 extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->model('/perfilproductivo/m_ppc1p4n1o1');//carga el controlador modelo
    }

    //funcion encargada de llamar a la vista de la pagina 
    public function fc_ppc1p4n1o1($page = 'v_ppc1p4n1o1') {

        if (!file_exists('application/views/pages/perfilproductivo/' . $page . '.php')) {
            // Whoops, we don't have a page for that!
            show_404();
        }
        $idintegrante = $this->input->get('idintegrante');
        $cfolio = $this->input->get('folio');//tomamos el valor del vivienda que viene por get

        //para traer la informacion de ayudas
        $cayudas = $this->m_ppc1p4n1o1->fm_ayudas();
        $ctextoayuda = '';
        foreach ($cayudas as $cayuda)
        {
            $ctextoayuda =  $cayuda->ayuda;
        }
        //Fin ayudas 
        
        //incio traer datos generales
        $cdatosgenerales = $this->m_ppc1p4n1o1->fm_cargardatosgenerales($cfolio,$idintegrante);
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
        $crespuestas = $this->m_ppc1p4n1o1->fm_buscarpregunta($idintegrante);
        $carrayrespuestas= array('eppc1p4n1estudio' => '','eppc1p4n2' => '','eppc1p4n3' => '','eppc1p4n4' => '','eppc1p4n5' => ''); 
        foreach ($crespuestas as $crespuesta)
        {
            $carrayrespuestas = array('eppc1p4n1estudio' => $crespuesta->ppc1p4n1estudio,
                                     'eppc1p4n2' => $crespuesta->ppc1p4n2,'eppc1p4n3' => $crespuesta->ppc1p4n3,
                                     'eppc1p4n4' => $crespuesta->ppc1p4n4,'eppc1p4n5' => $crespuesta->ppc1p4n5);
        }
        //fin traer datos generales
        $actuaA = date("Y");
       //Levantar vista     
        $titulo = 'Cap I - Otros Estuduios(1)'; // para el titulo de la vista en la pestaña
        $this->load->view('pages/perfilproductivo/' . $page,  array('titulo' => $titulo, 
                                                   'foot' => FOOTS, 
                                                   'head' => HEAD, 
                                                 'botonerag' => BOTONERAG, 
                                                   'botoneraa' => BOTONERAA,
                                                   'botoneragotro1' => BOTONERAGOTRO1, 
                                                   'botoneraaotro1' => BOTONERAAOTRO1,
                                                   'folio' => $cfolio,
                                                   'idintegrante' => $idintegrante,
                                                   'textoayuda' => $ctextoayuda, 
                                                   'arraydatosgenerales' => $carraydatosgenerales, 
                                                   'actuaA' => $actuaA,
                                                   'arrayrespuestas' => $carrayrespuestas));
        //Fin levantar vista
         
    }
    
    
    //funcion para actualizar
    public function fc_actualizar()
    {
        $cfolio = $this->input->get('vfolio');
        $cidintegrante= $this->input->get('vidintegrante'); 
        $cvalorppc1p4n1estudio= $this->input->get('vvalorppc1p4n1estudio');
        $cppc1p4n2= $this->input->get('vppc1p4n2');
        $cppc1p4n3= $this->input->get('vppc1p4n3');
        $cppc1p4n4= $this->input->get('vppc1p4n4');
        $cppc1p4n5= $this->input->get('vppc1p4n5');
        
        
        $this->m_ppc1p4n1o1->fm_actualizarpregunta($cfolio,$cidintegrante,$cvalorppc1p4n1estudio,$cppc1p4n2,$cppc1p4n3,$cppc1p4n4,$cppc1p4n5);
       //echo json_encode(array('result' => 'guardado'));
    }
    //fin funcion para actualizar
    //funcion para eliminar
    public function fc_eliminar()
    {
        $cfolio = $this->input->get('vfolio');
        $cidintegrante= $this->input->get('vidintegrante');  
        
        $this->m_ppc1p4n1o1->fm_eliminar($cfolio,$cidintegrante);
       //echo json_encode(array('result' => 'guardado'));
    }
    //fin funcion para eliminar
     public function fc_insertarotro1()
    {
        $cfolio = $this->input->get('vfolio');
        $cidintegrante= $this->input->get('vidintegrante');  
        
        $this->m_ppc1p4n1o1->fm_insertarotro1($cfolio,$cidintegrante);
       //echo json_encode(array('result' => 'guardado'));
    }
    //fin funcion para insertar
    
      
}
