<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class  C_principalprotocolo extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->model('m_principalprotocolo');//carga el controlador modelo
        
        if( $this->session->userdata('documento') == '')
        {
            redirect('/c_login/fc_vlogin');
        }           
    }

    //funcion encargada de llamar a la vista de la pagina 
    public function fc_principalprotocolo($page = 'v_principalprotocolo') {

        if (!file_exists('application/views/pages/' . $page . '.php')) {
            // Whoops, we don't have a page for that!
            show_404();
        }

        //INICIO TRAER DATOS DEL TITULAR
        
        $folio = $this->input->get('folio');//tomamos el valor del folio que viene por get
        $idintegrante = $this->input->get('idintegrante');
        $doccogestor = $this->input->get('doccogestor');
       
        
        $habilitarint = $this->m_principalprotocolo->fm_habilitaintermedia($folio);
        $totalint = 0;
        foreach ($habilitarint as $datoint){
            $totalint = $datoint->totalint;
        }
        
        
        $datosintegrante = $this->m_principalprotocolo->fm_datosintegrante($folio,$idintegrante);//lo mandasmos a la funcion del modelo para verificar
        
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
        
        // TRAE EL ULTIMO PASO REALIZADO DE LA ESTACIÓN
          $maximoidestacion = $this->m_principalprotocolo->mostrarmaximoidestacion($folio);
          $midestacion= array('maximoidestacion' => '');
          
          foreach ($maximoidestacion as $filainte)
            {
            $midestacion = array('maximoidestacion' => $filainte->maximoidestacion); 
            }
            
            
            
            // TRAE EL ULTIMO PASO REALIZADO DE LA ESTACIÓN
          $minimoidestacion = $this->m_principalprotocolo->mostrarminimoidestacion($folio);
          $minidestacion= array('minimoidestacion' => '');
          
          foreach ($minimoidestacion as $filaintemin)
            {
            $minidestacion = array('minimoidestacion' => $filaintemin->minimoidestacion); 
            }
          
        //FIN TRAE EL ULTIMO PASO REALIZADO DE LA ESTACIÓN
            
         // TRAE VALIDACION ESTACIÓN H INCOMPLETA
          $folioestacionh = $this->m_principalprotocolo->fm_estacionhincompleto($folio);
          $vectoreh= array('totalfolio' => '');
          
          foreach ($folioestacionh as $datoh)
            {
            $vectoreh = array('totalfolio' => $datoh->totalfolio); 
            }
          
        //FIN TRAE EL ULTIMO PASO REALIZADO DE LA ESTACIÓN
               
            
        // Inicio trae el estado del campo control estación H
          $controlehestado = $this->m_principalprotocolo->controleh($folio);
          $controleh= array('controlehestado' => '');
          
          foreach ($controlehestado as $filainte)
            {
            $controleh = array('controlehestado' => $filainte->control); 
            }
          
        //Fin trae el estado del campo control estación H
    
  
    
      $folio = $this->input->get('folio'); 
      $arraycasilla= $this->m_principalprotocolo->fm_traercasilla($folio);
      
      $casillas = array('ecasillamatriz' => '','intermedia' => ''); 
        foreach ($arraycasilla as $ca)
        {
            $casillas = array('ecasillamatriz' => $ca->casillamatriz,'intermedia'=>$ca->intermedia); 
        }
    
      $arraycasilladf= $this->m_principalprotocolo->fm_traercasilladf($folio);
      
      $casillasdf = array('ecasilladf' => ''); 
        foreach ($arraycasilladf as $cadf)
        {
            $casillasdf = array('ecasilladf' => $cadf->casilladf); 
        }
        
        $arraypasodif81= $this->m_principalprotocolo->fm_traermaximopasodf81($folio);
      
        $pasodif81 = array('emaximoidestaciondif81' => ''); 
        foreach ($arraypasodif81 as $pasodf81)
        {
            $pasodif81 = array('emaximoidestaciondif81' => $pasodf81->maximoidestaciondif81); 
        }
        
        $arraytraerintermediahisto= $this->m_principalprotocolo->fm_traerintermediahisto($folio);
      
        $intermediahisto = array('efolio' => ''); 
        foreach ($arraytraerintermediahisto as $intermehisto)
        {
            $intermediahisto = array('efolio' => $intermehisto->folio); 
        }
        
        $arraytraerestadoidestacion31= $this->m_principalprotocolo->fm_traerestadoidestacion31($folio);
      
        $estadoidestacion31 = array('eestado' => '','eidestacion' => ''); 
        foreach ($arraytraerestadoidestacion31 as $idestacion31)
        {
            $estadoidestacion31 = array('eestado' => $idestacion31->estado,'eidestacion' => $idestacion31->idestacion); 
        }
        

        $arraytraermomento_vi= $this->m_principalprotocolo->fm_traermomento_vi($folio);
      
        $estadomomento_vi = array('emomento_vi' => ''); 
        foreach ($arraytraermomento_vi as $idmomento_vi)
        {
            $estadomomento_vi = array('emomento_vi' => $idmomento_vi->momento_vi); 
        }

        $arraytraercasillalcv1= $this->m_principalprotocolo->fm_casillaLCV1($folio);
      
        $estadocasillalcv1 = array('ecasillamatrizlcv1' => ''); 
        foreach ($arraytraercasillalcv1 as $idcasillalcv1)
        {
            $estadocasillalcv1 = array('ecasillamatrizlcv1' => $idcasillalcv1->casillamatrizlcv1); 
        }
        
            
        //ESTO LEVANTA LA VISTA     
        $titulo = 'v_principalprotocolo'; // para el titulo de la vista en la pestaña
        $this->load->view('pages/' . $page,  array('titulo' => $titulo, 'foot' => FOOTS, 'head3' => HEAD3, 'botonerag' => BOTONERAG, 'botoneraa' => BOTONERAA,'folio' => $folio,'tdatinte' => $tdatinte, 'midestacion' => $midestacion,'controleh' => $controleh,'doccogestor' => $doccogestor,'vectoreh'=>$vectoreh, 'casillas'=>$casillas,'casillasdf'=>$casillasdf,'totalint' => $totalint,'minidestacion'=>$minidestacion,'pasodif81' =>$pasodif81,'intermediahisto'=>$intermediahisto,'estadoidestacion31'=>$estadoidestacion31,'estadomomento_vi'=>$estadomomento_vi,'estadocasillalcv1'=>$estadocasillalcv1));
        //FIN LEVANTA LA VISTA
        
    }
    public function fc_insertarfolioperfil()
    {
       $cfolio = $this->input->get('vfolio'); 
       $cidpaso = $this->input->get('vidpaso');
       $cestado = $this->input->get('vestado');
       $this->m_principalprotocolo->fm_insertarfolioperfil($cfolio,$cidpaso,$cestado);
    }
    
    
    public function fc_insertarfolioactualizacion()
    {
       $cfolio = $this->input->get('vfolio'); 
       $cidpaso = $this->input->get('vidpaso');
       $cestado = $this->input->get('vestado');
       $this->m_principalprotocolo->fm_insertarfolioactualizacion($cfolio,$cidpaso,$cestado);
    }
    
    public function fc_insertarfolioingresos()
    {
       $cfolio = $this->input->get('vfolio'); 
       $cidpaso = $this->input->get('vidpaso');
       $cestado = $this->input->get('vestado');
       $this->m_principalprotocolo->fm_insertarfolioingresos($cfolio,$cidpaso,$cestado);
    }
    
    public function fc_insertarfolioingresosna()
    {
       $cfolio = $this->input->get('vfolio'); 
       $cidpaso = $this->input->get('vidpaso');
       $cestado = $this->input->get('vestado');
       $this->m_principalprotocolo->fm_insertarfolioingresosna($cfolio,$cidpaso,$cestado);
    }
    
    public function fc_insertarfolioestrategias()
    {
       $cfolio = $this->input->get('vfolio');        
       $this->m_principalprotocolo->fm_insertarfolioestrategias($cfolio);
    }
    
    
    
    
    public function fc_insertarfoliol2e1()
    {
       $cfolio = $this->input->get('vfolio');        
       $this->m_principalprotocolo->fm_insertarfoliol2e1($cfolio);
    }
    
     public function fc_desatraceestacioncero()
    {
       $cfolio = $this->input->get('vfolio');        
       $respuesta = $this->m_principalprotocolo->fm_desatraceestacioncero($cfolio);
       
       foreach ($respuesta as $dato){
           
           $mensaje = $dato->mensaje;
       }
       
       echo $mensaje;
    }
    
    public function fc_traercasilla()
    {
       $cfolio = $this->input->get('vfolio'); 
       $this->m_principalprotocolo->fm_traercasilla($cfolio);
    }
    public function fc_selectinsertintermedia()
    {
       $cfolio = $this->input->get('vfolio');        
       $this->m_principalprotocolo->fm_selectinsertintermedia($cfolio);
    }

    







  ////////////////// nuevo /////////////////
  public function fc_actualizarep0()
  {
     $cfolio = $this->input->get('vfolio');
     $cidestacion = $this->input->get('videstacion');
     $cvalorp0 = $this->input->get('vvalorp0');
     $cvcualmotivo = $this->input->get('vvcualmotivo');
     $cdoccogestor = $this->input->get('vdoccogestor');
     $this->m_principalprotocolo->fm_actualizarep0($cfolio,$cidestacion,$cvalorp0,$cvcualmotivo,$cdoccogestor);
  }
  ////////////////// fin nuevo /////////////////////////////



    }
    
    
    
    
    

