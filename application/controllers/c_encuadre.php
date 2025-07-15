<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class  C_encuadre extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->model('m_encuadre');//carga el controlador modelo
       
        if( $this->session->userdata('documento') == '')
        {
            redirect('/c_login/fc_vlogin');
        }  
    }

    //funcion encargada de llamar a la vista de la pagina 
    public function fc_encuadre($page = 'v_encuadre') {

        if (!file_exists('application/views/pages/' . $page . '.php')) {
            // Whoops, we don't have a page for that!
            show_404();
        }
        
        $doccogestor = $this->input->get('doccogestor');

        //INICIO TRAER DATOS DEL TITULAR
        $folio = $this->input->get('folio');//tomamos el valor del folio que viene por get
        $idintegrante = $this->input->get('idintegrante');
        $datosintegrante = $this->m_encuadre->fm_datosintegrante($folio,$idintegrante);//lo mandasmos a la funcion del modelo para verificar
        
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
      $idvisita = '1';
      $datosidvisita = $this->m_encuadre->fm_traerp0informaciongeneral($folio,$idvisita);//lo mandasmos a la funcion del modelo para verificar
      
      $tdatidvisita= array('tfolio' => '');
      
      foreach ($datosidvisita as $filaidvisit)
      {
      $tdatidvisita = array('tfolio' => $filaidvisit->folio); //se guarda el resultado del ption value en la variable datos
      }
      //FIN TRAER DATOS DE LA VISITA ENCUADRE
      ///////////////////// FIN NUEVO /////////////////

















        // TRAE EL ULTIMO PASO REALIZADO DE LA ESTACIÓN
            $selectpaso1 = $this->m_encuadre->traerpaso1($folio);
            $midpaso1= array('idpaso1' => '');
            
            foreach ($selectpaso1 as $filainte)
              {
              $midpaso1 = array('idpaso1' => $filainte->idpaso); 
              }

              $selectpaso2 = $this->m_encuadre->traerpaso2($folio);
              $midpaso2= array('idpaso2' => '');
              
              foreach ($selectpaso2 as $filainte)
                {
                $midpaso2 = array('idpaso2' => $filainte->idpaso); 
                }

                $selectpaso3 = $this->m_encuadre->traerpaso3($folio);
                $midpaso3= array('idpaso3' => '');
                
                foreach ($selectpaso3 as $filainte)
                  {
                  $midpaso3 = array('idpaso3' => $filainte->idpaso); 
                  }

                  $selectpaso4 = $this->m_encuadre->traerpaso4($folio);
                  $midpaso4= array('idpaso4' => '');
                  
                  foreach ($selectpaso4 as $filainte)
                    {
                    $midpaso4 = array('idpaso4' => $filainte->idpaso); 
                    }


                    $selectpaso5 = $this->m_encuadre->traerpaso5($folio);
                    $midpaso5= array('idpaso5' => '');
                    
                    foreach ($selectpaso5 as $filainte)
                      {
                      $midpaso5 = array('idpaso5' => $filainte->idpaso); 
                      }

                      $selectpaso6 = $this->m_encuadre->traerpaso6($folio);
                      $midpaso6= array('idpaso6' => '');
                      
                      foreach ($selectpaso6 as $filainte)
                        {
                        $midpaso6 = array('idpaso6' => $filainte->idpaso); 
                        }
        //FIN TRAE EL ULTIMO PASO REALIZADO DE LA ESTACIÓN
        
     
       //ESTO LEVANTA LA VISTA     
        $titulo = 'v_encuadre'; // para el titulo de la vista en la pestaña
        $this->load->view('pages/' . $page,  array('titulo' => $titulo, 'foot' => FOOTS, 'head3' => HEAD3, 'botonerag' => BOTONERAG, 'botoneraa' => BOTONERAA, 'folio' => $folio,'tdatinte' => $tdatinte, 'midpaso1' => $midpaso1,'midpaso2' => $midpaso2,'midpaso3' => $midpaso3,'midpaso4' => $midpaso4,'midpaso5' => $midpaso5,'midpaso6' => $midpaso6, 'doccogestor' => $doccogestor, 'tdatidvisita' => $tdatidvisita));
        //FIN LEVANTA LA VISTA
    }
    
    // FUNCION QUE REGISTRA CADA PASO FINALIZADO
    public function fc_cerrarpaso()
    {
       $cfolio = $this->input->get('vfolio');
       $cidpaso = $this->input->get('vidpaso');
       $cestado = $this->input->get('vestado');
       $this->m_encuadre->fm_cerrarpaso($cfolio,$cidpaso,$cestado);

       
    }

    public function fc_actualizarep32()
    {
       $cfolio = $this->input->get('vfolio');
       $cep32 = $this->input->get('vep32');
       //$cestado = $this->input->get('vestado');
       $this->m_encuadre->fm_actualizarep32($cfolio,$cep32);
    }

    public function fc_actualizarep33()
    {
       $cfolio = $this->input->get('vfolio');
       $cep33 = $this->input->get('vep33');
       //$cestado = $this->input->get('vestado');
       $this->m_encuadre->fm_actualizarep33($cfolio,$cep33);
    }
    
    
    public function fc_cerrarestacion()
    {
       $cfolio = $this->input->get('vfolio');
       $cidestacion = $this->input->get('videstacion');
       $cestado = $this->input->get('vestado');
       $clongitud = $this->input->get('vlongitud');
       $clatitud = $this->input->get('vlatitud');
       $cmensajedonde = $this->input->get('vmensajedonde');
       $this->m_encuadre->fm_cerrarestacion($cfolio,$cidestacion,$cestado,$this->session->userdata('id'),$this->session->userdata('documento'),$clongitud,$clatitud,$cmensajedonde);
    }
    
    public function fc_insertarfolioexitoso()
    {
       $cidestacion = $this->input->get('videstacion');       
       $cfolio = $this->input->get('vfolio');       
       $this->m_encuadre->fm_insertarfolioexitoso($cfolio,$cidestacion);
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
       $this->m_encuadre->fm_actualizarep0($cfolio,$cidestacion,$cvalorp0,$cvcualmotivo,$cdoccogestor);
    }

    ////////////////// fin nuevo /////////////////////////////











    }
    
    
    
    
    

