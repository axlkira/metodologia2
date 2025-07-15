<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class  C_sincrologro extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->model('m_sincrologro');//carga el controlador modelo
    }

    //funcion encargada de llamar a la vista de la pagina 
    public function fc_sincro1($page = 'v_sincrologro') {

        
        
        $doccogestor = $this->session->userdata('documento');
        
       $resultado = $this->m_sincrologro->fm_iniciasincro($doccogestor);
       
        $resultado = $this->m_sincrologro->fm_sincrologro1($doccogestor);
        $resultado = $this->m_sincrologro->fm_sincrolocal1($doccogestor);
        
        $resultado = $this->m_sincrologro->fm_sincrologro2($doccogestor);
        $resultado = $this->m_sincrologro->fm_sincrolocal2($doccogestor);
        
        $resultado = $this->m_sincrologro->fm_sincrologro3($doccogestor);
        $resultado = $this->m_sincrologro->fm_sincrolocal3($doccogestor);
        
        $resultado = $this->m_sincrologro->fm_sincrologro4($doccogestor);
        $resultado = $this->m_sincrologro->fm_sincrolocal4($doccogestor);
        
        $resultado = $this->m_sincrologro->fm_sincrologro5($doccogestor);
        $resultado = $this->m_sincrologro->fm_sincrolocal5($doccogestor);
        
        $resultado = $this->m_sincrologro->fm_sincrologro6($doccogestor);
        $resultado = $this->m_sincrologro->fm_sincrolocal6($doccogestor);
       
        $resultado = $this->m_sincrologro->fm_sincrologro7($doccogestor);
        $resultado = $this->m_sincrologro->fm_sincrolocal7($doccogestor);
        
        $resultado = $this->m_sincrologro->fm_sincrologro8($doccogestor);
        $resultado = $this->m_sincrologro->fm_sincrolocal8($doccogestor);
    
         $tdatinte = 'LOGROS 1 - Sincronizacion exitosa!!!!';
        $this->load->view('pages/' . $page,  array('tabla' => $tdatinte));
       
        
    }
      public function fc_sincro2($page = 'v_sincrologro') {  
        
          $doccogestor = $this->session->userdata('documento');
          
        $resultado = $this->m_sincrologro->fm_sincrologro9($doccogestor);
        $resultado = $this->m_sincrologro->fm_sincrolocal9($doccogestor);
        
        $resultado = $this->m_sincrologro->fm_sincrologro10($doccogestor);
        $resultado = $this->m_sincrologro->fm_sincrolocal10($doccogestor);
        
        $resultado = $this->m_sincrologro->fm_sincrologro11($doccogestor);
        $resultado = $this->m_sincrologro->fm_sincrolocal11($doccogestor);
        
        $resultado = $this->m_sincrologro->fm_sincrologro12($doccogestor);
        $resultado = $this->m_sincrologro->fm_sincrolocal12($doccogestor);
        
        $resultado = $this->m_sincrologro->fm_sincrologro13($doccogestor);
        $resultado = $this->m_sincrologro->fm_sincrolocal13($doccogestor);
        
        $resultado = $this->m_sincrologro->fm_sincrologro14($doccogestor);
        $resultado = $this->m_sincrologro->fm_sincrolocal14($doccogestor);
        
        $resultado = $this->m_sincrologro->fm_sincrologro15($doccogestor);
        $resultado = $this->m_sincrologro->fm_sincrolocal15($doccogestor);
        
        $resultado = $this->m_sincrologro->fm_sincrologro16($doccogestor);
        $resultado = $this->m_sincrologro->fm_sincrolocal16($doccogestor);
        
         $tdatinte = 'LOGROS 2 - Sincronizacion exitosa!!!!';
        $this->load->view('pages/' . $page,  array('tabla' => $tdatinte));
       
      }
      
      public function fc_sincro3($page = 'v_sincrologro') { 
      $doccogestor = $this->session->userdata('documento');
          $resultado = $this->m_sincrologro->fm_sincrologro17($doccogestor);
        $resultado = $this->m_sincrologro->fm_sincrolocal17($doccogestor);
        
        $resultado = $this->m_sincrologro->fm_sincrologro18($doccogestor);
        $resultado = $this->m_sincrologro->fm_sincrolocal18($doccogestor);
        
        $resultado = $this->m_sincrologro->fm_sincrologro19($doccogestor);
        $resultado = $this->m_sincrologro->fm_sincrolocal19($doccogestor);
        
        $resultado = $this->m_sincrologro->fm_sincrologro20($doccogestor);
        $resultado = $this->m_sincrologro->fm_sincrolocal20($doccogestor);
        
        $resultado = $this->m_sincrologro->fm_sincrologro21($doccogestor);
        $resultado = $this->m_sincrologro->fm_sincrolocal21($doccogestor);
        
        $resultado = $this->m_sincrologro->fm_sincrologro22($doccogestor);
        $resultado = $this->m_sincrologro->fm_sincrolocal22($doccogestor);
        
        $resultado = $this->m_sincrologro->fm_sincrologro23($doccogestor);
        $resultado = $this->m_sincrologro->fm_sincrolocal23($doccogestor);
        
        $resultado = $this->m_sincrologro->fm_sincrologro24($doccogestor);
        $resultado = $this->m_sincrologro->fm_sincrolocal24($doccogestor);
        
         $tdatinte = 'LOGROS 3 - Sincronizacion exitosa!!!!';
        $this->load->view('pages/' . $page,  array('tabla' => $tdatinte));
       
      }
      public function fc_sincro4($page = 'v_sincrologro') {
      $doccogestor = $this->session->userdata('documento');
          $resultado = $this->m_sincrologro->fm_sincrologro25($doccogestor);
        $resultado = $this->m_sincrologro->fm_sincrolocal25($doccogestor);
        
        $resultado = $this->m_sincrologro->fm_sincrologro26($doccogestor);
        $resultado = $this->m_sincrologro->fm_sincrolocal26($doccogestor);
        
        $resultado = $this->m_sincrologro->fm_sincrologro27($doccogestor);
        $resultado = $this->m_sincrologro->fm_sincrolocal27($doccogestor);
        
        $resultado = $this->m_sincrologro->fm_sincrologro28($doccogestor);
        $resultado = $this->m_sincrologro->fm_sincrolocal28($doccogestor);
        
        $resultado = $this->m_sincrologro->fm_sincrologro29($doccogestor);
        $resultado = $this->m_sincrologro->fm_sincrolocal29($doccogestor);
        
        $resultado = $this->m_sincrologro->fm_sincrologro30($doccogestor);
        $resultado = $this->m_sincrologro->fm_sincrolocal30($doccogestor);
        
        $resultado = $this->m_sincrologro->fm_sincrologro31($doccogestor);
        $resultado = $this->m_sincrologro->fm_sincrolocal31($doccogestor);
        
        $resultado = $this->m_sincrologro->fm_sincrologro32($doccogestor);
        $resultado = $this->m_sincrologro->fm_sincrolocal32($doccogestor);
        
        $resultado = $this->m_sincrologro->fm_sincrologro33($doccogestor);
        $resultado = $this->m_sincrologro->fm_sincrolocal33($doccogestor);
        
         $tdatinte = 'LOGROS 4 - Sincronizacion exitosa!!!!';
        $this->load->view('pages/' . $page,  array('tabla' => $tdatinte));
       
      }
      public function fc_sincro5($page = 'v_sincrologro') {
      $doccogestor = $this->session->userdata('documento');
          $resultado = $this->m_sincrologro->fm_sincrologro34($doccogestor);
        $resultado = $this->m_sincrologro->fm_sincrolocal34($doccogestor);
        
        $resultado = $this->m_sincrologro->fm_sincrologro35($doccogestor);
        $resultado = $this->m_sincrologro->fm_sincrolocal35($doccogestor);
        
        $resultado = $this->m_sincrologro->fm_sincrologro36($doccogestor);
        $resultado = $this->m_sincrologro->fm_sincrolocal36($doccogestor);
        
        $resultado = $this->m_sincrologro->fm_sincrologro37($doccogestor);
        $resultado = $this->m_sincrologro->fm_sincrolocal37($doccogestor);
        
        $resultado = $this->m_sincrologro->fm_sincrologro38($doccogestor);
        $resultado = $this->m_sincrologro->fm_sincrolocal38($doccogestor);
        
        $resultado = $this->m_sincrologro->fm_sincrologro39($doccogestor);
        $resultado = $this->m_sincrologro->fm_sincrolocal39($doccogestor);
        
        $resultado = $this->m_sincrologro->fm_sincrologro40($doccogestor);
        $resultado = $this->m_sincrologro->fm_sincrolocal40($doccogestor);
        
        $resultado = $this->m_sincrologro->fm_sincrologro41($doccogestor);
        $resultado = $this->m_sincrologro->fm_sincrolocal41($doccogestor);
        
         $tdatinte = 'LOGROS 5- Sincronizacion exitosa!!!!';
        $this->load->view('pages/' . $page,  array('tabla' => $tdatinte));
       
        
      }
        
        public function fc_sincroe($page = 'v_sincrologro') 
        {
          
        $doccogestor = $this->session->userdata('documento');
              
        $resultado = $this->m_sincrologro->fm_sincroe($doccogestor);
                
        $tdatinte = 'Tablas borradas!!!!!';
        $this->load->view('pages/' . $page,  array('tabla' => $tdatinte));

        }
        
        
        
        
        
    }
    

