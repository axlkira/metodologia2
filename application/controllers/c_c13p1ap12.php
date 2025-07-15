<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class  C_c13p1ap12 extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->model('m_c13p1ap12');//carga el controlador modelo
        //$this->load->model('m_c9mp1ap5');//carga el controlador modelo
    }

    //funcion encargada de llamar a la vista de la pagina 
    public function fc_c13p1ap12($page = 'v_c13p1ap12') {

        if (!file_exists('application/views/pages/' . $page . '.php')) {
            // Whoops, we don't have a page for that!
            show_404();
        }

        //INICIO TRAER DATOS DEL TITULAR
        $folio = $this->input->get('folio');//tomamos el valor del folio que viene por get
        $idintegrante = $this->input->get('idintegrante');
        $datosintegrante = $this->m_c13p1ap12->fm_datosintegrante($folio,$idintegrante);//lo mandasmos a la funcion del modelo para verificar
        
        $tdatinte= array('tfolio' => '', 
                          'tidintegrante' => '',
                          'tdoc' => '',
                          'tnombre' => '');
        
        foreach ($datosintegrante as $filainte)
        {
        $tdatinte = array('tfolio' => $filainte->folio,
                          'tidintegrante' => $filainte->idintegrante,
                          'tdoc' => $filainte->documento, 
                          'tnombre' => $filainte->nombre1.' '.$filainte->nombre2.' '.$filainte->apellido1.' '.$filainte->apellido2); //se guarda el resultado del ption value en la variable datos
        }
        //FIN TRAER DATOS DEL TITULAR       
        



        //validar si el folio existe
        $folioexiste = $this->m_c13p1ap12->fm_folioexiste($folio);//lo mandasmos a la funcion del modelo para verificar
        
        //ACA USTEDES SI TOCAN - COLOCAN EL NOMBRE DE LAS VARIABLES idresc9mp1 - idresc9mp4a - idresc9mp4b - idresc9mp4c
           $foexiste= array('efolio' => '', 'ec1p1' =>'', 'ec1p2' =>'', 'ec1p3' =>'', 'eestadoc1p3' => '', 'ec1p4' => '', 'eestadoc1p4' => '', 'ec1p5' => '', 'eestadoc1p5' => '',
                            'ec1p6' => '', 'ec1p7' => '','ec1p8' => '','ec1p9' => '','ec1p10' => '', 'eestadoc1p10' => '','ec1p11' => '','ec1p11a' => '','ec1p12' => '' ); 
        
        foreach ($folioexiste as $fila)
        {
        //USTEDES SI TOCAN - LO VERDE LO COLCAN COMO ESTA EN LA TABLA DE LA BD
        $foexiste = array('efolio' => $fila->folio, 'ec1p1' => $fila->c1p1, 'ec1p2' => $fila->c1p2, 'ec1p3' => $fila->c1p3, 'eestadoc1p3' => $fila->estadoc1p3, 'ec1p4' => $fila->c1p4, 'eestadoc1p4' => $fila->estadoc1p4,
                          'ec1p5' => $fila->c1p5, 'eestadoc1p5' => $fila->estadoc1p5, 'ec1p6' => $fila->c1p6, 'ec1p7' => $fila->c1p7, 'ec1p8' => $fila->c1p8,
                          'ec1p9' => $fila->c1p9, 'ec1p10' => $fila->c1p10 , 'eestadoc1p10' => $fila->estadoc1p10, 'ec1p11' => $fila->c1p11, 'ec1p11a' => $fila->c1p11a,'ec1p12' => $fila->c1p12); //se guarda el resultado del ption value en la variable datos
 
        }
        //fin validar si el folio existe
        
        
        //traer una lista de valores
        $listasino = $this->m_c13p1ap12->fm_listarestrato();
        $estratos = '';
        foreach ($listasino as $estado)
        {
        $estratos .= '<option value="'.$estado->idestrato.'">'.$estado->estadoestrato.'</option>'; //se guarda el resultado del ption value en la variable datos
        }
        //fin traer una lista de valores
        
        //traer una lista de valores
        $listasino = $this->m_c13p1ap12->fm_listarrelcont();
        $relcont = '';
        foreach ($listasino as $estado)
        {
        $relcont .= '<option value="'.$estado->id.'">'.$estado->descripcion.'</option>'; //se guarda el resultado del ption value en la variable datos
        }
        //fin traer una lista de valores
        
        $cfolio = $this->input->get('folio');//tomamos el valor del vivienda que viene por get
        
        
        //traer una lista de valores
        $listacomunas = $this->m_c13p1ap12->fm_listarcomunas();
        $comunas = '';
        foreach ($listacomunas as $estado)
        {
        $comunas .= '<option value="'.$estado->comuna.'">'.$estado->comuna.'</option>'; //se guarda el resultado del ption value en la variable datos
        }
        //fin traer una lista de valores
        
        //traer una lista de valores
//        $listasino = $this->m_c13p1ap12->fm_listarbarrios();
        $barrios = '';
        
        $cdatosgenerales = $this->m_c13p1ap12->fm_cargardatosgenerales($cfolio);
        $carraydatosgenerales= array('enomcoges' => '', 'efolio' =>'', 'ecapitulo' => '', 'etitular' => '','edoctitular' => ''); 
        foreach ($cdatosgenerales as $cdatgen)
        {
            $carraydatosgenerales = array('enomcoges' => $cdatgen->nomcoges,
                                          'efolio' => $cdatgen->folio, 
                                          'ecapitulo' => $cdatgen->capitulo,
                                          'etitular' => $cdatgen->titular,
                                          'edoctitular' => $cdatgen->doctitular);
        }
//        foreach ($listasino as $estado)
//        {
//        $barrios .= '<option value="'.$estado->codigo.'">'.$estado->barriovereda.'</option>'; //se guarda el resultado del ption value en la variable datos
//        }
        //fin traer una lista de valores
        
     
       //ESTO LEVANTA LA VISTA     
        $titulo = 'v_c13p1ap12'; // para el titulo de la vista en la pestaña
        $this->load->view('pages/' . $page,  array('titulo' => $titulo, 'foot' => FOOTS, 'head' => HEAD, 'botonerag' => BOTONERAG, 'botoneraa' => BOTONERAA,  'estratos' => $estratos , 'relcont' => $relcont,'comunas' => $comunas,'barrios' => $barrios, 'folio' => $folio, 'foexiste' =>$foexiste, 'tdatinte' => $tdatinte,'arraydatosgenerales' => $carraydatosgenerales));
        //FIN LEVANTA LA VISTA
         
       
        
        
    }
    
    //traer barrios
    public function fc_traerbarrios()
    {
        //traer una lista de valores
        $cidcomuna = $this->input->get('vidcomuna');
        $listasino = $this->m_c13p1ap12->fm_listarbarrios($cidcomuna);
        $barrios = '';
        foreach ($listasino as $estado)
        {
        $barrios .= '<option value="'.$estado->codigo.'">'.$estado->barriovereda.'</option>'; //se guarda el resultado del ption value en la variable datos
        }
        
        echo ($barrios);
        //fin traer una lista de valores        
    }
  
    
    



    //funcion para insertar
    public function fc_insertar()
    {
        $cfolio = $this->input->get('vfolio');
        $c1p1= $this->input->get('vc1p1');
        $c1p2 = $this->input->get('vc1p2');
        $c1p3 = $this->input->get('vc1p3');
        $c1p4 = $this->input->get('vc1p4');
        $c1p5 = $this->input->get('vc1p5');
        $c1p6 = $this->input->get('vc1p6');
        $c1p7 = $this->input->get('vc1p7');
        $c1p8 = $this->input->get('vc1p8');
        $c1p9 = $this->input->get('vc1p9');
        $c1p10 = $this->input->get('vc1p10');
        $c1p11 = $this->input->get('vc1p11');
        $c1p11a = $this->input->get('vc1p11a');
        $c1p12 = $this->input->get('vc1p12');
        $this->m_c13p1ap12->fm_insertar($cfolio,$c1p1,$c1p2,$c1p3,$c1p4,$c1p5,$c1p6,$c1p7,$c1p8,$c1p9,$c1p10,$c1p11,$c1p11a,$c1p12);
        //echo json_encode(array('result' => 'guardado'));
      
    }
    //fin funcion para insertar
    
    //funcion para actualizar
    public function fc_actualizar()
    {
        $cfolio = $this->input->get('vfolio');
        $c1p1= $this->input->get('vc1p1');
        $c1p2 = $this->input->get('vc1p2');
        $c1p3 = $this->input->get('vc1p3');
        $c1p4 = $this->input->get('vc1p4');
        $c1p5 = $this->input->get('vc1p5');
        $c1p6 = $this->input->get('vc1p6');
        $c1p7 = $this->input->get('vc1p7');
        $c1p8 = $this->input->get('vc1p8');
        $c1p9 = $this->input->get('vc1p9');
        $c1p10 = $this->input->get('vc1p10');
        $c1p11 = $this->input->get('vc1p11');
        $c1p11a = $this->input->get('vc1p11a');
        $c1p12 = $this->input->get('vc1p12');
        $this->m_c13p1ap12->fm_actualizar($cfolio,$c1p1,$c1p2,$c1p3,$c1p4,$c1p5,$c1p6,$c1p7,$c1p8,$c1p9,$c1p10,$c1p11,$c1p11a,$c1p12);
        //echo json_encode(array('result' => 'guardado'));
        
    }
    //fin funcion para actualizar
     public function fc_cerrarcapitulo()
   {
       $cfolio = $this->input->get('vfolio');
       $ccerrarcap1 = $this->input->get('close');
       $this->m_c13p1ap12->fm_cerrar($cfolio,$ccerrarcap1);
   }
    }
    
    
    
    
    

