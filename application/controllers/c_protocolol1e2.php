<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class  C_protocolol1e2 extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->model('m_protocolol1e2');//carga el controlador modelo
        if( $this->session->userdata('documento') == '')
        {
            redirect('/c_login/fc_vlogin');
        }  
    }

    //funcion encargada de llamar a la vista de la pagina 
    public function fc_protocolol1e2($page = 'v_protocolol1e2') {

        if (!file_exists('application/views/pages/' . $page . '.php')) {
            // Whoops, we don't have a page for that!
            show_404();
        }
        
        $doccogestor = $this->input->get('doccogestor');
        
        //INICIO TRAER DATOS DEL TITULAR
        $folio = $this->input->get('folio');//tomamos el valor del folio que viene por get
        $idintegrante = $this->input->get('idintegrante');
        $datosintegrante = $this->m_protocolol1e2->fm_datosintegrante($folio,$idintegrante);//lo mandasmos a la funcion del modelo para verificar
        
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
      ///////////////// NUEVO ////////////// 
      //INICIO TRAER DATOS DE LA VISITA ENCUADRE
      $idvisita = '12';
      $datosidvisita = $this->m_protocolol1e2->fm_traerp0informaciongeneral($folio,$idvisita);//lo mandasmos a la funcion del modelo para verificar
      
      $tdatidvisita= array('tfolio' => '','tfecharegistro' => '');
      
      foreach ($datosidvisita as $filaidvisit)
      {
      $tdatidvisita = array('tfolio' => $filaidvisit->folio,'tfecharegistro' => $filaidvisit->fecharegistro); //se guarda el resultado del ption value en la variable datos
      }
      //FIN TRAER DATOS DE LA VISITA ENCUADRE
      ///////////////////// FIN NUEVO /////////////////
      // TRAE EL ULTIMO PASO REALIZADO DE LA ESTACIÓN
          $maximoidpaso = $this->m_protocolol1e2->mostrarmaximoidpaso($folio);
          $midpaso= array('maximoidpaso' => '');
          
          foreach ($maximoidpaso as $filainte)
            {
            $midpaso = array('maximoidpaso' => $filainte->maximoidpaso); 
            }
          
        //FIN TRAE EL ULTIMO PASO REALIZADO DE LA ESTACIÓN
        
     
       //ESTO LEVANTA LA VISTA     
        $titulo = 'v_protocolol1e2'; // para el titulo de la vista en la pestaña
        $this->load->view('pages/' . $page,  array('titulo' => $titulo, 'foot' => FOOTS, 'head3' => HEAD3, 'botonerag' => BOTONERAG, 'botoneraa' => BOTONERAA, 'botonerac' => BOTONERAC, 'folio' => $folio,'tdatinte' => $tdatinte, 'midpaso' => $midpaso, 'doccogestor' => $doccogestor, 'tdatidvisita' => $tdatidvisita));
        //FIN LEVANTA LA VISTA
    }
    
    // FUNCION QUE REGISTRA CADA PASO FINALIZADO
    public function fc_cerrarpaso()
    {
       $cfolio = $this->input->get('vfolio');
       $cidpaso = $this->input->get('vidpaso');
       $cestado = $this->input->get('vestado');
       $this->m_protocolol1e2->fm_cerrarpaso($cfolio,$cidpaso,$cestado);
    }
    // FUNCION QUE INSERTA FOLIO EN TABLA CAPACIDADES
    public function fc_insertarfoliocapacidades()
    {
       $cfolio = $this->input->get('vfolio');       
       $this->m_protocolol1e2->fm_insertarfoliocapacidades($cfolio);
    }
    
    public function fc_insertarfolioexitoso()
    {
       $cfolio = $this->input->get('vfolio');       
       $this->m_protocolol1e2->fm_insertarfolioexitoso($cfolio);
    }
    
    
    // FUNCION QUE REGISTRA CADA PASO FINALIZADO
    public function fc_cerrarestacion()
    {
       $cfolio = $this->input->get('vfolio');
       $cidestacion = $this->input->get('videstacion');
       $cestado = $this->input->get('vestado');
       $clongitud = $this->input->get('vlongitud');
       $clatitud = $this->input->get('vlatitud');
       $cmensajedonde = $this->input->get('vmensajedonde');
       $this->m_protocolol1e2->fm_cerrarestacion($cfolio,$cidestacion,$cestado,$this->session->userdata('id'),$this->session->userdata('documento'),$clongitud,$clatitud,$cmensajedonde);
    }
    // FIN FUNCION QUE REGISTRA CADA PASO FINALIZADO
  ////////////////// nuevo /////////////////
  public function fc_actualizarep0()
  {
     $cfolio = $this->input->get('vfolio');
     $cidestacion = $this->input->get('videstacion');
     $cvalorp0 = $this->input->get('vvalorp0');
     $cvcualmotivo = $this->input->get('vvcualmotivo');
     $cdoccogestor = $this->input->get('vdoccogestor');
     $fechaIni = $this->m_protocolol1e2->fm_actualizarep0($cfolio,$cidestacion,$cvalorp0,$cvcualmotivo,$cdoccogestor);
  
     $fechaI = '0';

     foreach($fechaIni as $fechaIniAct)
     {
        $fechaI = $fechaIniAct->fecharegistro; 
     }
     echo($fechaI);
  
   }
  ////////////////// fin nuevo /////////////////////////////
  public function fc_calcularFechaPHP()
  {

     $fechaInicial = $this->input->get('fechaIni');
     $fechaActual = date("Y-m-d H:i:s");

     $SegundosFechaActual = strtotime($fechaActual);
     $SegundosFechaInicial = strtotime($fechaInicial);

     $segundosTrascurridos=floor($SegundosFechaActual-$SegundosFechaInicial);
     $minutosTrascurridos = floor($segundosTrascurridos/60);
     $HorasTrascurridos = floor($minutosTrascurridos/60);
     $DiasTrascurridos = floor($HorasTrascurridos/24);

     $Msegundos = ($minutosTrascurridos*60);
     $Sresiduo = $segundosTrascurridos - $Msegundos;
/*
     if($Sresiduo < 0){
        $Sresiduo = '0'.$Sresiduo;
     } */

     $Hminutos = ($HorasTrascurridos*60);
     $Mresiduo = $minutosTrascurridos - $Hminutos;

     $Dhoras = ($DiasTrascurridos*24);
     $Hresiduo = $HorasTrascurridos - $Dhoras;

     echo json_encode(array('DiasTrascurridos' => $DiasTrascurridos,
     'Hresiduo' => $Hresiduo,
     'Mresiduo' => $Mresiduo, 
     'Sresiduo' => $Sresiduo));
  }
  }
    
    
    
    
    

