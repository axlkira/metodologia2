<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class  C_c4p8 extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->model('m_c4p8');//carga el controlador modelo
    }

    //funcion encargada de llamar a la vista de la pagina 
    public function fc_c4p8($page = 'v_c4p8') {

        if (!file_exists('application/views/pages/' . $page . '.php')) {
            // Whoops, we don't have a page for that!
            show_404();
        }
        $idintegrante = $this->input->get('idintegrante');
        $cfolio = $this->input->get('folio');//tomamos el valor del vivienda que viene por get

        //para traer la informacion de ayudas
        $cayudas = $this->m_c4p8->fm_ayudas();
        $ctextoayuda = '';
        foreach ($cayudas as $cayuda)
        {
            $ctextoayuda =  $cayuda->ayuda;
        }
        //Fin ayudas 
        
       
         
        //incio traer datos generales
        $cdatosgenerales = $this->m_c4p8->fm_cargardatosgenerales($cfolio,$idintegrante);
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
        $crespuestas = $this->m_c4p8->fm_buscarpregunta($idintegrante);
        $carrayrespuestas= array('ec4p8o1' => '','ec4p8o2' => '','ec4p9' => ''); 
        foreach ($crespuestas as $crespuesta)
        {
            $carrayrespuestas = array('ec4p8o1' => $crespuesta->c4p8o1,'ec4p8o2' => $crespuesta->c4p8o2,'ec4p9' => $crespuesta->c4p9);
        }
        //fin traer datos generales
        
         
        $listarpaises = $this->m_c4p8->fm_listarpaises();
        
        $paises= '';
        
        foreach ($listarpaises as $valpaises)
        {
            //se guarda el resultado del ption value en la variable datos
            $paises .='<option value="'.$valpaises->nombrepais.'">'.$valpaises->nombrepais.'</option>'; 
        }
        
        
       //Levantar vista     
        $titulo = 'Cap IV - Pregunta 8'; // para el titulo de la vista en la pestaña
        $this->load->view('pages/' . $page,  array('titulo' => $titulo, 
                                                   'foot' => FOOTS, 
                                                   'head' => HEAD, 
                                                   'botonerag' => BOTONERAG, 
                                                   'botoneraa' => BOTONERAA,
                                                   'folio' => $cfolio,
                                                   'paises' => $paises,
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
        $cvalorc4p8o1= $this->input->get('vvalorc4p8o1');        
        $cvc4p8o2= $this->input->get('vc4p8o2'); 
        $this->m_c4p8->fm_actualizarpregunta($cfolio,$cidintegrante,$cvalorc4p8o1,$cvc4p8o2);
       //echo json_encode(array('result' => 'guardado'));
    }
    //fin funcion para actualizar
    




    ////// inicio nuevas variables /////////
    public function fc_listarnacionalidad()
    {
        //traer una lista de valores
        $cdocumento = $this->input->get('vdocumento');
        $listasino = $this->m_c4p8->fm_listarnacionalidad($cdocumento);
        $paises = '';
        $paises = '<option value="">Seleccione una opción</option>';
        foreach ($listasino as $estado)
        {
        $paises .= '<option value="'.$estado->nombrepais.'">'.$estado->nombrepais.'</option>'; //se guarda el resultado del ption value en la variable datos
        }
        
        echo ($paises);
        //fin traer una lista de valores        
    }
    ////// fin nuevas variables /////////
}
