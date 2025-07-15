<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class  C_eerf extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->model('historiahogar/m_eerf');//carga el controlador modelo
        $this->load->model('m_protocolol1e1');//carga el controlador modelo
    }

    //funcion encargada de llamar a la vista de la pagina 
    public function fc_eerf($page = 'v_eerf') {

        if (!file_exists('application/views/pages/historiahogar/' . $page . '.php')) {
            // Whoops, we don't have a page for that!
            show_404();
        }

        $cfolio = $this->input->get('folio');//tomamos el valor del vivienda que viene por get
        $doccogestor = $this->input->get('doccogestor');
        
        
        //incio traer datos generales
        $cdatosgenerales = $this->m_eerf->fm_cargardatosgenerales($cfolio);
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
        
        //Traer datos integtrantew deel hogar
        $cdatosintegrante = $this->m_eerf->fm_cargarintegtranteshogar($cfolio);
        $carraydatosintegrante = '<option value="">Seleccionar</option>';
        foreach ($cdatosintegrante as $cdatint)
        {
            $carraydatosintegrante .= '<option value="'.$cdatint->documento.'">'.$cdatint->nombre.'</option>';
            
           
        }
        //fin traer datos integrates
        
//        incio traer respuestas
//        $crespuestas = $this->m_eerf->fm_buscardatoseerf($cfolio,$cevaluacion = 0);
//        
//        foreach ($crespuestas as $crespuesta)
//        {
//            $carrayrespuestas = array('p1' => $crespuesta->p1,
//            'p2' => $crespuesta->p2,
//            'p3' => $crespuesta->p3,
//            'p4' => $crespuesta->p4,
//            'p5' => $crespuesta->p5,
//            'p6' => $crespuesta->p6,
//            'p7' => $crespuesta->p7, 
//            'p8' => $crespuesta->p8,
//            'p9' => $crespuesta->p9,
//            'p10' => $crespuesta->p10,
//            'p11' => $crespuesta->p11,
//            'p12' => $crespuesta->p12,
//            'p13' => $crespuesta->p13,
//            'p14' => $crespuesta->p14,
//            'p15' => $crespuesta->p15,
//            'p16' => $crespuesta->p16,
//            'p17' => $crespuesta->p17,
//            'p18' => $crespuesta->p18,
//            'p19' => $crespuesta->p19,
//            'p20' => $crespuesta->p20
//            );
//        }
        //fin traer RESPUESTAS
        
       //Levantar vista     
        $titulo = 'Historia del hogar - Vista 7'; // para el titulo de la vista en la pestaña
        $this->load->view('pages/historiahogar/' . $page,  array('titulo' => $titulo, 
                                                   'foot' => FOOTS, 
                                                   'head' => HEAD, 
                                                   'botonerag' => BOTONERAG, 
                                                   'botoneraa' => BOTONERAA,
                                                   'folio' => $cfolio,
                                                   'doccogestor' => $doccogestor,
                                                   'arraydatosgenerales' => $carraydatosgenerales,
                                                   'carraydatosintegrante' => $carraydatosintegrante
                                                   ));
        //Fin levantar vista
         
    }
    
    
    //funcion para actualizar
    public function fc_actualizar()
    {
        $cfolio = $this->input->get('vfolio');
        $cp1= $this->input->get('veerf1');
        $cp2= $this->input->get('veerf2');
        $cp3= $this->input->get('veerf3');
        $cp4= $this->input->get('veerf4');
        $cp5= $this->input->get('veerf5');
        $cp6= $this->input->get('veerf6');
        $cp7= $this->input->get('veerf7');
        $cp8= $this->input->get('veerf8');
        $cp9= $this->input->get('veerf9');
        $cp10= $this->input->get('veerf10');
        $cp11= $this->input->get('veerf11');
        $cp12= $this->input->get('veerf12');
        $cp13= $this->input->get('veerf13');
        $cp14= $this->input->get('veerf14');
        $cp15= $this->input->get('veerf15');
        $cp16= $this->input->get('veerf16');
        $cp17= $this->input->get('veerf17');
        $cp18= $this->input->get('veerf18');
        $cp19= $this->input->get('veerf19');
        $cp20= $this->input->get('veerf20');

        
        
        
        
        $this->m_eerf->fm_guardareerf($cfolio,$cp1,$cp2,$cp3,$cp4,$cp5,$cp6,$cp7,$cp8,$cp9,$cp10,
            $cp11,$cp12,$cp13,$cp14,$cp15,$cp16,$cp17,$cp18,$cp19,$cp20);
       //echo json_encode(array('result' => 'guardado'));
    }
    //fin funcion para actualizar
    
         public function fc_cerrarestacion()
    {
       $cfolio = $this->input->get('vfolio');
       $cidestacion = $this->input->get('videstacion');
       $cestado = $this->input->get('vestado');
       $this->m_protocolol1e1->fm_cerrarestacion($cfolio,$cidestacion,$cestado,$this->session->userdata('id'),$this->session->userdata('documento'),$clongitud,$clatitud,$cmensajedonde);
    }
    
}
