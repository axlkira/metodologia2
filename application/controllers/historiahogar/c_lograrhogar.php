<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class  C_lograrhogar extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->model('historiahogar/m_lograrhogar');//carga el controlador modelo
        
    }

    //funcion encargada de llamar a la vista de la pagina 
    public function fc_lograrhogar($page = 'v_lograrhogar') {

        if (!file_exists('application/views/pages/historiahogar/' . $page . '.php')) {
            // Whoops, we don't have a page for that!
            show_404();
        }

        $cfolio = $this->input->get('folio');//tomamos el valor del vivienda que viene por get
        $doccogestor = $this->input->get('doccogestor');
        $idestacion = $this->input->get('idestacion');
        //para traer la informacion de ayudas
        $cayudas = $this->m_lograrhogar->fm_ayudas();
        
        $ctextoayuda = '';
        foreach ($cayudas as $cayuda)
        {
            $ctextoayuda =  $cayuda->ayuda;
        }
        //Fin ayudas 
        
        //incio traer datos generales
        $cdatosgenerales = $this->m_lograrhogar->fm_cargardatosgenerales($cfolio);
        $carraydatosgenerales= array('enomcoges' => '', 'efolio' =>'', 'ecapitulo' => '', 'etitular' => '','edoctitular' => ''); 
        foreach ($cdatosgenerales as $cdatgen)
        {
            $carraydatosgenerales = array('enomcoges' => $cdatgen->nomcoges,'efolio' => $cdatgen->folio,'ecapitulo' => $cdatgen->capitulo,'etitular' => $cdatgen->titular,'edoctitular' => $cdatgen->doctitular);
        }
        //fin traer datos generales
        $crespuestametas = $this->m_lograrhogar->fm_buscarmetas($cfolio);
                                 
        $carraymetas = array('efolio' =>'','emeta1' => '','emeta1dimension' => '','emeta2' => '','emeta2dimension' => '','emeta3' => '','emeta3dimension' => '','enombdimension1' =>'','enombdimension2' =>'','enombdimension3' =>'','eeerf'); 
        foreach ($crespuestametas as $cresmetas)
        {
            $carraymetas = array('efolio'=>$cresmetas->folio,'emeta1'=>$cresmetas->meta1,'emeta1dimension'=>$cresmetas->meta1dimension,'emeta2'=>$cresmetas->meta2,'emeta2dimension'=>$cresmetas->meta2dimension,'emeta3'=>$cresmetas->meta3,'emeta3dimension'=>$cresmetas->meta3dimension,'enombdimension1'=>$cresmetas->nombdimension1,'enombdimension2'=>$cresmetas->nombdimension2,'enombdimension3'=>$cresmetas->nombdimension3,'eeerf' =>$cresmetas->eerf);
        }
        //fin traer datos generales
        
        //traer una lista de valores
        $listardimensiones = $this->m_lograrhogar->fm_listardimensiones();
        $dimensiones = '';
        foreach ($listardimensiones as $estado)
        {
        $dimensiones .= '<option value="'.$estado->id.'">'.$estado->dimension.'</option>'; //se guarda el resultado del ption value en la variable datos
        }
        //fin traer una lista de valores
        
        
        
        
        //Levantar vista     
        $titulo = 'Historia del hogar - Vista 6'; // para el titulo de la vista en la pestaña
        $this->load->view('pages/historiahogar/' . $page,  array('titulo' => $titulo, 
                                                   'foot' => FOOTS, 
                                                   'head' => HEAD, 
                                                   'botonerag' => BOTONERAG, 
                                                   'botoneraa' => BOTONERAA,
                                                   'folio' => $cfolio,
                                                   'idestacion'=>$idestacion,
                                                   'doccogestor' => $doccogestor,
                                                   'textoayuda' => $ctextoayuda,
                                                   'dimensiones' => $dimensiones,
                                                   'carraymetas' =>$carraymetas,
                                                   'arraydatosgenerales' => $carraydatosgenerales));
        //Fin levantar vista
    }
    //funcion para actualizar
    public function fc_actualizar()
    {
        $cfolio = $this->input->get('vfolio');
        $cmeta1mostrar= $this->input->get('vmeta1mostrar');
        $cmeta1dime= $this->input->get('vmeta1dime');
        $cmeta2mostrar= $this->input->get('vmeta2mostrar');
        $cmeta2dime= $this->input->get('vmeta2dime');
        $cmeta3mostrar= $this->input->get('vmeta3mostrar');
        $cmeta3dime= $this->input->get('vmeta3dime');
                
        $this->m_lograrhogar->fm_actualizarpregunta($cfolio,$cmeta1mostrar,$cmeta1dime,$cmeta2mostrar,$cmeta2dime,$cmeta3mostrar,$cmeta3dime);
       //echo json_encode(array('result' => 'guardado'));
    }
    //fin funcion para actualizar
    
    public function fc_cerrarpaso()
    {
       $cfolio = $this->input->get('vfolio');
       $cidpaso = $this->input->get('vidpaso');
       $cestado = $this->input->get('vestado');
       $this->m_lograrhogar->fm_cerrarpaso($cfolio,$cidpaso,$cestado);
    }
    
    public function fc_cerrarestacionh()
    {
       $cfolio = $this->input->get('vfolio');
       $cidestacion = $this->input->get('videstacion');
       $cestado = $this->input->get('vestado');
       $this->m_lograrhogar->fm_cerrarestacionh($cfolio,$cidestacion,$cestado);
    }
    
    
     public function fc_cerrarestacionhcompleta()
    {
       $cfolio = $this->input->get('vfolio');
       $cidestacion = $this->input->get('videstacion');
       $cestado = $this->input->get('vestado');
       $this->m_lograrhogar->fm_cerrarestacionhcompleta($cfolio,$cidestacion,$cestado,$this->session->userdata('id'),$this->session->userdata('documento'));
    }
     
    public function fc_cerrarestacion()
    {
       $cfolio = $this->input->get('vfolio');
       $cidestacion = $this->input->get('videstacion');
       $cestado = $this->input->get('vestado');
       $clongitud = $this->input->get('vlongitud');
       $clatitud = $this->input->get('vlatitud');
       $cmensajedonde = $this->input->get('vmensajedonde');
       $this->m_lograrhogar->fm_cerrarestacion($cfolio,$cidestacion,$cestado,$this->session->userdata('id'),$this->session->userdata('documento'),$clongitud,$clatitud,$cmensajedonde);
    }
        
}
