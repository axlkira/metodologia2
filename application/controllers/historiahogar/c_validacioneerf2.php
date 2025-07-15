<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class  C_validacioneerf2 extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->model('historiahogar/m_validacioneerf2');//carga el controlador modelo
        $this->load->model('m_protocolol1e1');//carga el controlador modelo
    }

    //funcion encargada de llamar a la vista de la pagina 
    public function fc_validacioneerf2($page = 'v_validacioneerf2') {

        if (!file_exists('application/views/pages/historiahogar/' . $page . '.php')) {
            // Whoops, we don't have a page for that!
            show_404();
        }

        $cfolio = $this->input->get('folio');//tomamos el valor del vivienda que viene por get
        $doccogestor = $this->input->get('doccogestor');
        $idestacion = $this->input->get('idestacion');
        
        
        //incio traer datos generales
        $cdatosgenerales = $this->m_validacioneerf2->fm_cargardatosgenerales($cfolio);
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
        $cdatosintegrante = $this->m_validacioneerf2->fm_cargarintegtranteshogar($cfolio);
        $carraydatosintegrante = '<option value="">Seleccionar</option>';
        foreach ($cdatosintegrante as $cdatint)
        {
            $carraydatosintegrante .= '<option value="'.$cdatint->documento.'">'.$cdatint->nombre.'</option>';
            
           
        }
        
        
        $cdatosintegranteerfam1 = $this->m_validacioneerf2->fm_traerintegranteerfam1($cfolio);
        $carraydatosintegranteerfam1 = array('edocerfam1' => '',  'enombreerfam1' => '', );
        foreach ($cdatosintegranteerfam1 as $cdatinterfam1)
        {
            $carraydatosintegranteerfam1 = array('edocerfam1' => $cdatinterfam1->docintegranteerfam1,
                                        
                                          'enombreerfam1' => $cdatinterfam1->nomintegranteerfam1);
           
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
                                                   'idestacion' => $idestacion,
                                                   'arraydatosgenerales' => $carraydatosgenerales,
                                                   'carraydatosintegrante' => $carraydatosintegrante,
                                                   'carraydatosintegranteerfam1' => $carraydatosintegranteerfam1));
        //Fin levantar vista
         
    }
    
    
    //funcion para actualizar
    public function fc_actualizar()
    {
        $cfolio = $this->input->get('vfolio');
        $csino = $this->input->get('vsino');
        $crfinal = $this->input->get('vrfinal');
              
        
        
        
        $this->m_validacioneerf2->fm_guardaintegranteerfam($cfolio,$csino,$crfinal);
       //echo json_encode(array('result' => 'guardado'));
    }
    
    
    public function fc_actualizar1()
    {
        $cfolio = $this->input->get('vfolio');
        $csino = $this->input->get('vsino');     
        $cdocintegranteerfam1 = $this->input->get('vdocintegranteerfam1');
        
        
        
        $this->m_validacioneerf2->fm_guardaintegranteerfam1($cfolio,$csino,$cdocintegranteerfam1);
       //echo json_encode(array('result' => 'guardado'));
    }
    //fin funcion para actualizar
    
    public function fc_actualizar2()
    {
        $cfolio = $this->input->get('vfolio');
        $csino = $this->input->get('vsino');
        $crfinal = $this->input->get('vrfinal');
              
        
        
        
        $this->m_validacioneerf2->fm_guardaintegranteerfam2($cfolio,$csino,$crfinal);
       //echo json_encode(array('result' => 'guardado'));
    }
    
         public function fc_cerrarestacion()
    {
       $cfolio = $this->input->get('vfolio');
       $cidestacion = $this->input->get('videstacion');
       $cestado = $this->input->get('vestado');
       $this->m_protocolol1e1->fm_cerrarestacion($cfolio,$cidestacion,$cestado,$this->session->userdata('id'),$this->session->userdata('documento'),$clongitud,$clatitud,$cmensajedonde);
    }
    
    public function fc_cerrarpaso()
    {
       $cfolio = $this->input->get('vfolio');
       $cidpaso = $this->input->get('vidpaso');
       $cestado = $this->input->get('vestado');
       $this->m_protocolol1e1->fm_cerrarpaso($cfolio,$cidpaso,$cestado);
    }
    
    public function fc_guardarintegrante1()
    {
       $cfolio = $this->input->get('vfolio');
       $cinteerf1 = $this->input->get('vinteerf1');       
       $this->m_validacioneerf2->fm_guardarintegrante1($cfolio,$cinteerf1);
    }
    
    
    public function fc_actualizar3()
    {
        $cfolio = $this->input->get('vfolio');
        $csino = $this->input->get('vsino');
        $crfinal = $this->input->get('vrfinal');
        $cinteerf1 = $this->input->get('vinteerf1');
        
        
        
        $this->m_validacioneerf2->fm_guardaintegranteerfam3($cfolio,$csino,$crfinal,$cinteerf1);
       //echo json_encode(array('result' => 'guardado'));
    }
    
}
