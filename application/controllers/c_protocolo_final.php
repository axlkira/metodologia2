<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class  C_protocolo_final extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->model('m_protocolo_final');//carga el controlador modelo
       
        if( $this->session->userdata('documento') == '')
        {
            redirect('/c_login/fc_vlogin');
        }  
    }

    //funcion encargada de llamar a la vista de la pagina 
    public function fc_protocolo_final($page = 'v_protocolo_final') {

        if (!file_exists('application/views/pages/' . $page . '.php')) {
            // Whoops, we don't have a page for that!
            show_404();
        }
        
        $doccogestor = $this->input->get('doccogestor');
        
        //INICIO TRAER DATOS DEL TITULAR
        $folio = $this->input->get('folio');//tomamos el valor del folio que viene por get
        $idintegrante = $this->input->get('idintegrante');
        $datosintegrante = $this->m_protocolo_final->fm_datosintegrante($folio,$idintegrante);//lo mandasmos a la funcion del modelo para verificar
        
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
      $idvisita = '90';
      $datosidvisita = $this->m_protocolo_final->fm_traerp0informaciongeneral($folio,$idvisita);//lo mandasmos a la funcion del modelo para verificar
      
      $tdatidvisita= array('tfolio' => '','tfecharegistro' => '');
      
      foreach ($datosidvisita as $filaidvisit)
      {
      $tdatidvisita = array('tfolio' => $filaidvisit->folio,'tfecharegistro' => $filaidvisit->fecharegistro); //se guarda el resultado del ption value en la variable datos
      }
      //FIN TRAER DATOS DE LA VISITA ENCUADRE
      ///////////////////// FIN NUEVO /////////////////




       // TRAE EL ULTIMO PASO REALIZADO DE LA ESTACIÓN DIFERENTE A 81
          $maximoidpaso = $this->m_protocolo_final->mostrarmaximoidpaso($folio);
          $midpaso= array('maximoidpaso' => '');
          
          foreach ($maximoidpaso as $filainte)
            {
            $midpaso = array('maximoidpaso' => $filainte->maximoidpaso); 
            }
        //FIN TRAE EL ULTIMO PASO REALIZADO DE LA ESTACIÓN
        // TRAE EL ULTIMO PASO REALIZADO DE LA ESTACIÓN IGUAL A 81
          $maximoidpaso81 = $this->m_protocolo_final->mostrarmaximoidpaso81($folio);
          $midpaso81= array('emaximoidpaso81' => '');
          
          foreach ($maximoidpaso81 as $filainte81)
            {
            $midpaso81 = array('emaximoidpaso81' => $filainte81->maximoidpaso81); 
            }
          
        //FIN TRAE EL ULTIMO PASO REALIZADO DE LA ESTACIÓN IGUAL A 81
            
            
     
       // Verificamos si el protocolo ya ha sido guardado como finalizado
        $protocolo_finalizado = $this->m_protocolo_final->fm_verificar_protocolo_finalizado($folio);
            
       //ESTO LEVANTA LA VISTA     
        $titulo = 'v_protocolo_final'; // para el titulo de la vista en la pestaña
        $this->load->view('pages/' . $page,  array('titulo' => $titulo, 'foot' => FOOTS, 'head3' => HEAD3, 'botonerag' => BOTONERAG, 'botoneraa' => BOTONERAA, 'folio' => $folio,'tdatinte' => $tdatinte, 'midpaso' => $midpaso, 'midpaso81' => $midpaso81, 'doccogestor' => $doccogestor, 'tdatidvisita' => $tdatidvisita, 'protocolo_finalizado' => $protocolo_finalizado));
        //FIN LEVANTA LA VISTA
    }
    
    // FUNCION QUE REGISTRA CADA PASO FINALIZADO
    public function fc_cerrarpaso()
    {
        $cfolio = $this->input->post('folio');
        $cidpaso = $this->input->post('idpaso');
        // El estado se define como '1' (completado) directamente aquí, como lo esperaba el modelo originalmente.
        $cestado = 1;
        
        $this->m_protocolo_final->fm_cerrarpaso($cfolio, $cidpaso, $cestado);
        // No se necesita devolver un resultado, la vista simplemente recarga la página.
    }
    
    public function fc_cerrarestacion()
    {
       $cfolio = $this->input->get('vfolio');
       $cidestacion = $this->input->get('videstacion');
       $cestado = $this->input->get('vestado');
       $clongitud = $this->input->get('vlongitud');
       $clatitud = $this->input->get('vlatitud');
       $cmensajedonde = $this->input->get('vmensajedonde');
       $this->m_protocolo_final->fm_cerrarestacion($cfolio,$cidestacion,$cestado,$this->session->userdata('id'),$this->session->userdata('documento'),$clongitud,$clatitud,$cmensajedonde);
    }
    
    public function fc_insertarfolioexitoso()
    {
       $cidestacion = $this->input->get('videstacion');       
       $cfolio = $this->input->get('vfolio');       
       $this->m_protocolo_final->fm_insertarfolioexitoso($cfolio,$cidestacion);
    }
    
    
    public function fc_insertarfoliohogarintermedia()
    {
             
       $cfolio = $this->input->get('vfolio');       
       $this->m_protocolo_final->fm_insertarfoliohogarintermedia($cfolio);
    }
    // FIN FUNCION QUE REGISTRA CADA PASO FINALIZADO


     // Función para guardar el estado final del protocolo
     public function fc_guardar_protocolo_final()
     {
         // 1. Recibir el folio desde la vista (enviado por AJAX con POST)
         $cfolio = $this->input->post('folio');
 
         // 2. Llamar a la función del modelo para que inserte en la BD
         $this->m_protocolo_final->fm_guardar_protocolo_final($cfolio);
 
         // 3. No se necesita devolver nada a la vista (la llamada AJAX no espera respuesta)
     }
    
    
     public function fc_saltohogarintermedia()
    {
       $cfolio = $this->input->get('vfolio');       
       $this->m_protocolo_final->fm_saltohogarintermedia($cfolio);
    }
    public function fc_calcularprivacionesinter()
    {
       $cfolio = $this->input->get('vfolio');       
       $this->m_protocolo_final->fm_calcularprivacionesinter($cfolio);
    }
 
    ////////////////// nuevo /////////////////
public function fc_actualizarep0()
{
   $cfolio = $this->input->get('vfolio');
   $cidestacion = $this->input->get('videstacion');
   $cvalorp0 = $this->input->get('vvalorp0');
   $cvcualmotivo = $this->input->get('vvcualmotivo');
   $cdoccogestor = $this->input->get('vdoccogestor');
   $fechaIni = $this->m_protocolo_final->fm_actualizarep0($cfolio,$cidestacion,$cvalorp0,$cvcualmotivo,$cdoccogestor);

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
    
    
    
    
    
