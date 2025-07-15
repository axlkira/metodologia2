<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class  C_ppc1p3n2o1 extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->model('/perfilproductivo/m_ppc1p3n2o1');//carga el controlador modelo
    }

    //funcion encargada de llamar a la vista de la pagina 
    public function fc_ppc1p3n2o1($page = 'v_ppc1p3n2o1') {

        if (!file_exists('application/views/pages/perfilproductivo/' . $page . '.php')) {
            // Whoops, we don't have a page for that!
            show_404();
        }
        $idintegrante = $this->input->get('idintegrante');
        $cfolio = $this->input->get('folio');//tomamos el valor del vivienda que viene por get

        //para traer la informacion de ayudas
        $cayudas = $this->m_ppc1p3n2o1->fm_ayudas();
        $ctextoayuda = '';
        foreach ($cayudas as $cayuda)
        {
            $ctextoayuda =  $cayuda->ayuda;
        }
        //Fin ayudas 
        
        //incio traer datos generales
        $cdatosgenerales = $this->m_ppc1p3n2o1->fm_cargardatosgenerales($cfolio,$idintegrante);
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
        $crespuestas = $this->m_ppc1p3n2o1->fm_buscarpregunta($idintegrante);
        $carrayrespuestas= array('eppc1p3n2' => '','eppc1p3n5institucion' => '','eppc1p3n5area' => '','eppc1p3n6' => '','eppc1p3n7' => ''); 
        foreach ($crespuestas as $crespuesta)
        {
            $carrayrespuestas = array('eppc1p3n2' => $crespuesta->ppc1p3n2,'eppc1p3n5institucion' => $crespuesta->ppc1p3n5institucion,'eppc1p3n5area' => $crespuesta->ppc1p3n5area,
                                     'eppc1p3n6' => $crespuesta->ppc1p3n6,'eppc1p3n7' => $crespuesta->ppc1p3n7);
        }
        //fin traer datos generales
        
        //traer una lista de valores
        $listararea = $this->m_ppc1p3n2o1->fm_listarareaconocimiento();
        $areas = '';
        foreach ($listararea as $area)
        {
        $areas .= '<option value="'.$area->nombrearea.'">'.$area->nombrearea.'</option>'; //se guarda el resultado del ption value en la variable datos
        }
        //fin traer una lista de valores
        $actuaA = date("Y");
        
       //Levantar vista     
        $titulo = 'Cap I - Otro titulo obtenido(1)'; // para el titulo de la vista en la pestaña
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
                                                   'arrayrespuestas' => $carrayrespuestas,
                                                   'actuaA' => $actuaA,
                                                   'areasconocimiento' => $areas));
        //Fin levantar vista
         
    }
    
    
    //funcion para actualizar
    public function fc_actualizar()
    {
        $cfolio = $this->input->get('vfolio');
        $cidintegrante= $this->input->get('vidintegrante');  
        $cvalorppc1p3n2= $this->input->get('vvalorppc1p3n2');
        $cppc1p3n5institucion= $this->input->get('vppc1p3n5institucion');
        $cppc1p3n5area= $this->input->get('vppc1p3n5area');
        $cppc1p3n6= $this->input->get('vppc1p3n6');
        $cppc1p3n7= $this->input->get('vppc1p3n7');
        
        $this->m_ppc1p3n2o1->fm_actualizarpregunta($cfolio,$cidintegrante,$cvalorppc1p3n2,$cppc1p3n5institucion,$cppc1p3n5area,$cppc1p3n6,$cppc1p3n7);
       //echo json_encode(array('result' => 'guardado'));
    }
    //fin funcion para actualizar
    //funcion para eliminar
    public function fc_eliminar()
    {
        $cfolio = $this->input->get('vfolio');
        $cidintegrante= $this->input->get('vidintegrante');  
        
        $this->m_ppc1p3n2o1->fm_eliminar($cfolio,$cidintegrante);
       //echo json_encode(array('result' => 'guardado'));
    }
    //fin funcion para eliminar
     public function fc_insertarotro1()
    {
        $cfolio = $this->input->get('vfolio');
        $cidintegrante= $this->input->get('vidintegrante');  
        
        $this->m_ppc1p3n2o1->fm_insertarotro1($cfolio,$cidintegrante);
       //echo json_encode(array('result' => 'guardado'));
    }
    //fin funcion para insertar
    
}
