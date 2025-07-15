<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class  C_ppc1p5n1 extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->model('/perfilproductivo/m_ppc1p5n1');//carga el controlador modelo
    }

    //funcion encargada de llamar a la vista de la pagina 
    public function fc_ppc1p5n1($page = 'v_ppc1p5n1') {

        if (!file_exists('application/views/pages/perfilproductivo/' . $page . '.php')) {
            // Whoops, we don't have a page for that!
            show_404();
        }
        $idintegrante = $this->input->get('idintegrante');
        $cfolio = $this->input->get('folio');//tomamos el valor del vivienda que viene por get

        //para traer la informacion de ayudas
        $cayudas = $this->m_ppc1p5n1->fm_ayudas();
        $ctextoayuda = '';
        foreach ($cayudas as $cayuda)
        {
            $ctextoayuda =  $cayuda->ayuda;
        }
        //Fin ayudas 
        
        //incio traer datos generales
        $cdatosgenerales = $this->m_ppc1p5n1->fm_cargardatosgenerales($cfolio,$idintegrante);
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
        $crespuestas = $this->m_ppc1p5n1->fm_buscarpregunta($idintegrante);
        $carrayrespuestas= array('eppc1p5n1o1' => '','eppc1p5n1o2' => '','eppc1p5n1o3' => '','eppc1p5n1o4' => ''); 
        foreach ($crespuestas as $crespuesta)
        {
            $carrayrespuestas = array('eppc1p5n1o1' => $crespuesta->ppc1p5n1o1,'eppc1p5n1o2' => $crespuesta->ppc1p5n1o2,'eppc1p5n1o3' => $crespuesta->ppc1p5n1o3,
                                      'eppc1p5n1o4' => $crespuesta->ppc1p5n1o4);
        }
        //fin traer datos generales
        
        
//fin traer datos generales
       $habilitado='';
       if($carraydatosgenerales['eedadintegrante'] >'14' && $carraydatosgenerales['eedadintegrante'] <'18')
       {
        $habilitado='disabled';   
       }
       else
       {
           
       };
        
        
       //Levantar vista     
        $titulo = 'Cap I - Pregunta 5.1'; // para el titulo de la vista en la pestaña
        $this->load->view('pages/perfilproductivo/' . $page,  array('titulo' => $titulo, 
                                                   'foot' => FOOTS, 
                                                   'head' => HEAD, 
                                                   'botonerag' => BOTONERAG2, 
                                                   'botoneraa' => BOTONERAA2,
                                                   'folio' => $cfolio,
                                                    'disabled' => $habilitado,
                                                   'idintegrante' => $idintegrante,
                                                   'textoayuda' => $ctextoayuda, 
                                                   'arraydatosgenerales' => $carraydatosgenerales, 
                                                   'arrayrespuestas' => $carrayrespuestas));
        //Fin levantar vista
         
    }
    
    
    //funcion para actualizar
    public function fc_actualizar()
    {
        $cfolio = $this->input->get('vfolio');
        $cidintegrante= $this->input->get('vidintegrante');  
        $cppc1p5n1o1= $this->input->get('vppc1p5n1o1');   
        $cppc1p5n1o2= $this->input->get('vppc1p5n1o2');
        $cppc1p5n1o3= $this->input->get('vppc1p5n1o3');
        $cppc1p5n1o4= $this->input->get('vppc1p5n1o4');
        
        $this->m_ppc1p5n1->fm_actualizarpregunta($cfolio,$cidintegrante,$cppc1p5n1o1,$cppc1p5n1o2,$cppc1p5n1o3,$cppc1p5n1o4);
        
        
        
       
    }
    //fin funcion para actualizar
    
    public function fc_llenarcapitulo2pp() {
        $cfolio = $this->input->get('vfolio');
        $cidintegrante = $this->input->get('vidintegrante');
        $this->m_ppc1p5n1->fm_llenarcapitulo2pp($cfolio, $cidintegrante);
        //echo json_encode(array('result' => 'guardado'));
    }
    
    public function fc_llenarcapitulo3pp() {
        $cfolio = $this->input->get('vfolio');
        $cidintegrante = $this->input->get('vidintegrante');
        $this->m_ppc1p5n1->fm_llenarcapitulo3pp($cfolio, $cidintegrante);
        //echo json_encode(array('result' => 'guardado'));
    }
    
    public function fc_llenarcapitulo4pp() {
        $cfolio = $this->input->get('vfolio');
        $cidintegrante = $this->input->get('vidintegrante');
        $this->m_ppc1p5n1->fm_llenarcapitulo4pp($cfolio, $cidintegrante);
        //echo json_encode(array('result' => 'guardado'));
    }
    
    public function fc_llenarcapitulotodospp() {
        $cfolio = $this->input->get('vfolio');
        $cidintegrante = $this->input->get('vidintegrante');
        $this->m_ppc1p5n1->fm_llenarcapitulotodospp($cfolio, $cidintegrante);
        //echo json_encode(array('result' => 'guardado'));
    }
    
    
    public function fc_borrarcapitulo2pp() {
        $cfolio = $this->input->get('vfolio');
        $cidintegrante = $this->input->get('vidintegrante');
        $this->m_ppc1p5n1->fm_borrarcapitulo2pp($cfolio, $cidintegrante);
        //echo json_encode(array('result' => 'guardado'));
    }
    
    public function fc_borrarcapitulo3pp() {
        $cfolio = $this->input->get('vfolio');
        $cidintegrante = $this->input->get('vidintegrante');
        $this->m_ppc1p5n1->fm_borrarcapitulo3pp($cfolio, $cidintegrante);
        //echo json_encode(array('result' => 'guardado'));
    }
    
    public function fc_borrarcapitulo4pp() {
        $cfolio = $this->input->get('vfolio');
        $cidintegrante = $this->input->get('vidintegrante');
        $this->m_ppc1p5n1->fm_borrarcapitulo4pp($cfolio, $cidintegrante);
        //echo json_encode(array('result' => 'guardado'));
    }
    
    public function fc_borrarcapitulotodospp() {
        $cfolio = $this->input->get('vfolio');
        $cidintegrante = $this->input->get('vidintegrante');
        $this->m_ppc1p5n1->fm_borrarcapitulotodospp($cfolio, $cidintegrante);
        //echo json_encode(array('result' => 'guardado'));
    }

    
    
}
