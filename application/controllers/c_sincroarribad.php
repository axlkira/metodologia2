<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class  C_sincroarribad extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->model('m_sincroarribad');//carga el controlador modelo
    }

   
     public function fc_sincroinicio($page = 'v_sincroarribad') {
         
        
       
        $tdatinte = 'Sincronizacion capitulo 2 exitosa!!!!';
        $this->load->view('pages/' . $page,  array('tabla' => $tdatinte));
       
     }
    //////////////////////////Sincroniza formularios//////////////////////
    
     public function fc_tablaingresosd() {
      $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarribad/fc_tablaingresosd?pdoccogestor='.$this->session->userdata('documento'));
      $listarfiducias = json_decode($listarbac);

      foreach ($listarfiducias as $fiducia)
      {
	
         $this->m_sincroarribad->fm_tablaingresosd($fiducia);

      } 

      echo json_encode('ok');
     }
//     public function fc_privacionesintermedia() {
//         
//        $resultado = $this->m_sincroarribad->fm_privacionesintermedia();
//       
//     }
   
     //////////////////////////////////////////////////////////////////////////
//     public function fc_privacionesintermediad() {
//         
//        $resultado = $this->m_sincroarribad->fm_privacionesintermediad();
//       
//     }
     public function fc_privacionesintermediad1() 
     {

      $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincronizacion_aba_sincrologro1d/fc_sincrop1i?pdoccogestor='.$this->session->userdata('documento'));
      $listarfiducias = json_decode($listarbac);

      foreach ($listarfiducias as $fiducia)
      {
   
         $this->m_sincroarribad->fm_privacionesintermediad1($fiducia);

      } 

      echo json_encode('ok');

     //$resultado = $this->m_sincroarribad->fm_privacionesintermediad1();
     }

     public function fc_privacionesintermediad2() 
     {
      $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincronizacion_aba_sincrologro1d/fc_sincrop2i?pdoccogestor='.$this->session->userdata('documento'));
      $listarfiducias = json_decode($listarbac);

      foreach ($listarfiducias as $fiducia)
      {
   
         $this->m_sincroarribad->fm_privacionesintermediad2($fiducia);

      } 

      echo json_encode('ok');
     //$resultado = $this->m_sincroarribad->fm_privacionesintermediad2();
     }

     public function fc_privacionesintermediad3() 
     {
      $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincronizacion_aba_sincrologro1d/fc_sincrop3i?pdoccogestor='.$this->session->userdata('documento'));
      $listarfiducias = json_decode($listarbac);

      foreach ($listarfiducias as $fiducia)
      {
   
         $this->m_sincroarribad->fm_privacionesintermediad3($fiducia);

      } 

      echo json_encode('ok');
     //$resultado = $this->m_sincroarribad->fm_privacionesintermediad3();
     }

     public function fc_privacionesintermediad4() 
     {
      $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincronizacion_aba_sincrologro1d/fc_sincrop4i?pdoccogestor='.$this->session->userdata('documento'));
      $listarfiducias = json_decode($listarbac);

      foreach ($listarfiducias as $fiducia)
      {
   
         $this->m_sincroarribad->fm_privacionesintermediad4($fiducia);

      } 

      echo json_encode('ok');
     //$resultado = $this->m_sincroarribad->fm_privacionesintermediad4();
     }

     public function fc_privacionesintermediad5() 
     {
      $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincronizacion_aba_sincrologro1d/fc_sincrop5i?pdoccogestor='.$this->session->userdata('documento'));
      $listarfiducias = json_decode($listarbac);

      foreach ($listarfiducias as $fiducia)
      {
   
         $this->m_sincroarribad->fm_privacionesintermediad5($fiducia);

      } 

      echo json_encode('ok');
     //$resultado = $this->m_sincroarribad->fm_privacionesintermediad5();
     }

     public function fc_privacionesintermediad6() 
     {
      $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincronizacion_aba_sincrologro1d/fc_sincrop6i?pdoccogestor='.$this->session->userdata('documento'));
      $listarfiducias = json_decode($listarbac);

      foreach ($listarfiducias as $fiducia)
      {
   
         $this->m_sincroarribad->fm_privacionesintermediad6($fiducia);

      } 

      echo json_encode('ok');
     //$resultado = $this->m_sincroarribad->fm_privacionesintermediad6();
     }

     public function fc_privacionesintermediad7() 
     {
      $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincronizacion_aba_sincrologro1d/fc_sincrop7i?pdoccogestor='.$this->session->userdata('documento'));
      $listarfiducias = json_decode($listarbac);

      foreach ($listarfiducias as $fiducia)
      {
   
         $this->m_sincroarribad->fm_privacionesintermediad7($fiducia);

      } 

      echo json_encode('ok');
     //$resultado = $this->m_sincroarribad->fm_privacionesintermediad7();
     }

     public function fc_privacionesintermediad8() 
     {
      $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincronizacion_aba_sincrologro1d/fc_sincrop8i?pdoccogestor='.$this->session->userdata('documento'));
      $listarfiducias = json_decode($listarbac);

      foreach ($listarfiducias as $fiducia)
      {
   
         $this->m_sincroarribad->fm_privacionesintermediad8($fiducia);

      } 

      echo json_encode('ok');
     //$resultado = $this->m_sincroarribad->fm_privacionesintermediad8();
     }

     public function fc_privacionesintermediad9() 
     {
      $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincronizacion_aba_sincrologro1d/fc_sincrop9i?pdoccogestor='.$this->session->userdata('documento'));
      $listarfiducias = json_decode($listarbac);

      foreach ($listarfiducias as $fiducia)
      {
   
         $this->m_sincroarribad->fm_privacionesintermediad9($fiducia);

      } 

      echo json_encode('ok');
     //$resultado = $this->m_sincroarribad->fm_privacionesintermediad9();
     }

     public function fc_privacionesintermediad10() 
     {
      $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincronizacion_aba_sincrologro1d/fc_sincrop10i?pdoccogestor='.$this->session->userdata('documento'));
      $listarfiducias = json_decode($listarbac);

      foreach ($listarfiducias as $fiducia)
      {
   
         $this->m_sincroarribad->fm_privacionesintermediad10($fiducia);

      } 

      echo json_encode('ok');
     //$resultado = $this->m_sincroarribad->fm_privacionesintermediad10();
     }

     public function fc_privacionesintermediad11() 
     {
      $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincronizacion_aba_sincrologro1d/fc_sincrop11i?pdoccogestor='.$this->session->userdata('documento'));
      $listarfiducias = json_decode($listarbac);

      foreach ($listarfiducias as $fiducia)
      {
   
         $this->m_sincroarribad->fm_privacionesintermediad11($fiducia);

      } 

      echo json_encode('ok');
     //$resultado = $this->m_sincroarribad->fm_privacionesintermediad11();
     }

     public function fc_privacionesintermediad12() 
     {
      $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincronizacion_aba_sincrologro1d/fc_sincrop12i?pdoccogestor='.$this->session->userdata('documento'));
      $listarfiducias = json_decode($listarbac);

      foreach ($listarfiducias as $fiducia)
      {
   
         $this->m_sincroarribad->fm_privacionesintermediad12($fiducia);

      } 

      echo json_encode('ok');
     //$resultado = $this->m_sincroarribad->fm_privacionesintermediad12();
     }

     public function fc_privacionesintermediad13() 
     {
      $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincronizacion_aba_sincrologro1d/fc_sincrop13i?pdoccogestor='.$this->session->userdata('documento'));
      $listarfiducias = json_decode($listarbac);

      foreach ($listarfiducias as $fiducia)
      {
   
         $this->m_sincroarribad->fm_privacionesintermediad13($fiducia);

      } 

      echo json_encode('ok');
     //$resultado = $this->m_sincroarribad->fm_privacionesintermediad13();
     }

     public function fc_privacionesintermediad14() 
     {
      $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincronizacion_aba_sincrologro1d/fc_sincrop14i?pdoccogestor='.$this->session->userdata('documento'));
      $listarfiducias = json_decode($listarbac);

      foreach ($listarfiducias as $fiducia)
      {
   
         $this->m_sincroarribad->fm_privacionesintermediad14($fiducia);

      } 

      echo json_encode('ok');
     //$resultado = $this->m_sincroarribad->fm_privacionesintermediad14();
     }

     public function fc_privacionesintermediad15() 
     {
      $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincronizacion_aba_sincrologro1d/fc_sincrop15i?pdoccogestor='.$this->session->userdata('documento'));
      $listarfiducias = json_decode($listarbac);

      foreach ($listarfiducias as $fiducia)
      {
   
         $this->m_sincroarribad->fm_privacionesintermediad15($fiducia);

      } 

      echo json_encode('ok');
     //$resultado = $this->m_sincroarribad->fm_privacionesintermediad15();
     }

     public function fc_privacionesintermediad16() 
     {
      $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincronizacion_aba_sincrologro1d/fc_sincrop16i?pdoccogestor='.$this->session->userdata('documento'));
      $listarfiducias = json_decode($listarbac);

      foreach ($listarfiducias as $fiducia)
      {
   
         $this->m_sincroarribad->fm_privacionesintermediad16($fiducia);

      } 

      echo json_encode('ok');
     //$resultado = $this->m_sincroarribad->fm_privacionesintermediad16();
     }

     public function fc_ipmservidordintermediasub() 
     {
      $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincronizacion_aba_sincrologro1d/fc_sincropipmi?pdoccogestor='.$this->session->userdata('documento'));
      $listarfiducias = json_decode($listarbac);

      foreach ($listarfiducias as $fiducia)
      {
   
         $this->m_sincroarribad->fm_ipmservidordintermediasub($fiducia);

      } 

      echo json_encode('ok');
     //$resultado = $this->m_sincroarribad->fm_ipmservidordintermediasub();
     }

     
    ////////////////////////////Fin cierre//////////////////

	////////////////////////////
//      public function fc_tablasintermediabajada() {
//         
//        $resultado = $this->m_sincroarribad->fm_tablasintermediabajada();
//       
//     }
     public function fc_tablasintermediabajadac11()
     {
      $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarribad/fc_tablasintermediabajadac11?pdoccogestor='.$this->session->userdata('documento'));
      $listarfiducias = json_decode($listarbac);

      foreach ($listarfiducias as $fiducia)
      {
         $this->m_sincroarribad->fm_tablasintermediabajadac11($fiducia);
      } 
      echo json_encode('ok');
   }

     public function fc_tablasintermediabajadac2()
     {
 $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarribad/fc_tablasintermediabajadac2?pdoccogestor='.$this->session->userdata('documento'));
      $listarfiducias = json_decode($listarbac);

      foreach ($listarfiducias as $fiducia)
      {
	
         $this->m_sincroarribad->fm_tablasintermediabajadac2($fiducia);

      } 

      echo json_encode('ok');
        }

     public function fc_tablasintermediabajadac5()
     {
 $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarribad/fc_tablasintermediabajadac5?pdoccogestor='.$this->session->userdata('documento'));
      $listarfiducias = json_decode($listarbac);

      foreach ($listarfiducias as $fiducia)
      {
	
         $this->m_sincroarribad->fm_tablasintermediabajadac5($fiducia);

      } 

      echo json_encode('ok');
        }
     public function fc_tablasintermediabajadac6()
     {
 $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarribad/fc_tablasintermediabajadac6?pdoccogestor='.$this->session->userdata('documento'));
      $listarfiducias = json_decode($listarbac);

      foreach ($listarfiducias as $fiducia)
      {
	
         $this->m_sincroarribad->fm_tablasintermediabajadac6($fiducia);

      } 

      echo json_encode('ok');
        }
     public function fc_tablasintermediabajadac7()
     {
 $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarribad/fc_tablasintermediabajadac7?pdoccogestor='.$this->session->userdata('documento'));
      $listarfiducias = json_decode($listarbac);

      foreach ($listarfiducias as $fiducia)
      {
	
         $this->m_sincroarribad->fm_tablasintermediabajadac7($fiducia);

      } 

      echo json_encode('ok');
        }
     public function fc_tablasintermediabajadac8()
     {
 $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarribad/fc_tablasintermediabajadac8?pdoccogestor='.$this->session->userdata('documento'));
      $listarfiducias = json_decode($listarbac);

      foreach ($listarfiducias as $fiducia)
      {
	
         $this->m_sincroarribad->fm_tablasintermediabajadac8($fiducia);

      } 

      echo json_encode('ok');
        }
     public function fc_tablasintermediabajadac9()
     {
 $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarribad/fc_tablasintermediabajadac9?pdoccogestor='.$this->session->userdata('documento'));
      $listarfiducias = json_decode($listarbac);

      foreach ($listarfiducias as $fiducia)
      {
	
         $this->m_sincroarribad->fm_tablasintermediabajadac9($fiducia);

      } 

      echo json_encode('ok');
        }
     public function fc_sincronizarbajadaintermediahistc11()
     {
 $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarribad/fc_sincronizarbajadaintermediahistc11?pdoccogestor='.$this->session->userdata('documento'));
      $listarfiducias = json_decode($listarbac);

      foreach ($listarfiducias as $fiducia)
      {
	
         $this->m_sincroarribad->fm_sincronizarbajadaintermediahistc11($fiducia);

      } 

      echo json_encode('ok');
        }
     public function fc_sincronizarbajadaintermediahistc2()
     {
 $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarribad/fc_sincronizarbajadaintermediahistc2?pdoccogestor='.$this->session->userdata('documento'));
      $listarfiducias = json_decode($listarbac);

      foreach ($listarfiducias as $fiducia)
      {
	
         $this->m_sincroarribad->fm_sincronizarbajadaintermediahistc2($fiducia);

      } 

      echo json_encode('ok');
        }
     public function fc_sincronizarbajadaintermediahistc5()
     {
 $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarribad/fc_sincronizarbajadaintermediahistc5?pdoccogestor='.$this->session->userdata('documento'));
      $listarfiducias = json_decode($listarbac);

      foreach ($listarfiducias as $fiducia)
      {
	
         $this->m_sincroarribad->fm_sincronizarbajadaintermediahistc5($fiducia);

      } 

      echo json_encode('ok');
        }
     public function fc_sincronizarbajadaintermediahistc6()
     {
 $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarribad/fc_sincronizarbajadaintermediahistc6?pdoccogestor='.$this->session->userdata('documento'));
      $listarfiducias = json_decode($listarbac);

      foreach ($listarfiducias as $fiducia)
      {
	
         $this->m_sincroarribad->fm_sincronizarbajadaintermediahistc6($fiducia);

      } 

      echo json_encode('ok');
        }
     public function fc_sincronizarbajadaintermediahistc7()
     {
 $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarribad/fc_sincronizarbajadaintermediahistc7?pdoccogestor='.$this->session->userdata('documento'));
      $listarfiducias = json_decode($listarbac);

      foreach ($listarfiducias as $fiducia)
      {
	
         $this->m_sincroarribad->fm_sincronizarbajadaintermediahistc7($fiducia);

      } 

      echo json_encode('ok');
        }
     public function fc_sincronizarbajadaintermediahistc8()
     {
 $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarribad/fc_sincronizarbajadaintermediahistc8?pdoccogestor='.$this->session->userdata('documento'));
      $listarfiducias = json_decode($listarbac);

      foreach ($listarfiducias as $fiducia)
      {
	
         $this->m_sincroarribad->fm_sincronizarbajadaintermediahistc8($fiducia);

      } 

      echo json_encode('ok');
        }
     public function fc_sincronizarbajadaintermediahistc9()
     {
 $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarribad/fc_sincronizarbajadaintermediahistc9?pdoccogestor='.$this->session->userdata('documento'));
      $listarfiducias = json_decode($listarbac);

      foreach ($listarfiducias as $fiducia)
      {
	
         $this->m_sincroarribad->fm_sincronizarbajadaintermediahistc9($fiducia);

      } 

      echo json_encode('ok');
        }
     public function fc_sincronizacionintegrantesintermedia_historicodint()
     {
 $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarribad/fc_sincronizacionintegrantesintermedia_historicodint?pdoccogestor='.$this->session->userdata('documento'));
      $listarfiducias = json_decode($listarbac);

      foreach ($listarfiducias as $fiducia)
      {
	
         $this->m_sincroarribad->fm_sincronizacionintegrantesintermedia_historicodint($fiducia);

      } 

      echo json_encode('ok');
        }
     public function fc_privacion10intermediaservidor_historicod10()
     {
 $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarribad/fc_privacion10intermediaservidor_historicod10?pdoccogestor='.$this->session->userdata('documento'));
      $listarfiducias = json_decode($listarbac);

      foreach ($listarfiducias as $fiducia)
      {
	
         $this->m_sincroarribad->fm_privacion10intermediaservidor_historicod10($fiducia);

      } 

      echo json_encode('ok');
        }
     public function fc_privacion11intermediaservidor_historicod11()
     {
 $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarribad/fc_privacion11intermediaservidor_historicod11?pdoccogestor='.$this->session->userdata('documento'));
      $listarfiducias = json_decode($listarbac);

      foreach ($listarfiducias as $fiducia)
      {
	
         $this->m_sincroarribad->fm_privacion11intermediaservidor_historicod11($fiducia);

      } 

      echo json_encode('ok');
        }
     public function fc_privacion12intermediaservidor_historicod12()
     {
 $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarribad/fc_privacion12intermediaservidor_historicod12?pdoccogestor='.$this->session->userdata('documento'));
      $listarfiducias = json_decode($listarbac);

      foreach ($listarfiducias as $fiducia)
      {
	
         $this->m_sincroarribad->fm_privacion12intermediaservidor_historicod12($fiducia);

      } 

      echo json_encode('ok');
        }
     public function fc_privacion13intermediaservidor_historicod13()
     {
 $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarribad/fc_privacion13intermediaservidor_historicod13?pdoccogestor='.$this->session->userdata('documento'));
      $listarfiducias = json_decode($listarbac);

      foreach ($listarfiducias as $fiducia)
      {
	
         $this->m_sincroarribad->fm_privacion13intermediaservidor_historicod13($fiducia);

      } 

      echo json_encode('ok');
        }
     public function fc_privacion14intermediaservidor_historicod14()
     {
 $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarribad/fc_privacion14intermediaservidor_historicod14?pdoccogestor='.$this->session->userdata('documento'));
      $listarfiducias = json_decode($listarbac);

      foreach ($listarfiducias as $fiducia)
      {
	
         $this->m_sincroarribad->fm_privacion14intermediaservidor_historicod14($fiducia);

      } 

      echo json_encode('ok');
        }
     public function fc_privacion15intermediaservidor_historicod15()
     {
 $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarribad/fc_privacion15intermediaservidor_historicod15?pdoccogestor='.$this->session->userdata('documento'));
      $listarfiducias = json_decode($listarbac);

      foreach ($listarfiducias as $fiducia)
      {
	
         $this->m_sincroarribad->fm_privacion15intermediaservidor_historicod15($fiducia);

      } 

      echo json_encode('ok');
        }
     public function fc_privacion16intermediaservidor_historicod16()
     {
 $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarribad/fc_privacion16intermediaservidor_historicod16?pdoccogestor='.$this->session->userdata('documento'));
      $listarfiducias = json_decode($listarbac);

      foreach ($listarfiducias as $fiducia)
      {
	
         $this->m_sincroarribad->fm_privacion16intermediaservidor_historicod16($fiducia);

      } 

      echo json_encode('ok');
        }
     public function fc_privacion1intermediaservidor_historicod1()
     {
 $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarribad/fc_privacion1intermediaservidor_historicod1?pdoccogestor='.$this->session->userdata('documento'));
      $listarfiducias = json_decode($listarbac);

      foreach ($listarfiducias as $fiducia)
      {
	
         $this->m_sincroarribad->fm_privacion1intermediaservidor_historicod1($fiducia);

      } 

      echo json_encode('ok');
        }
     public function fc_privacion2intermediaservidor_historicod2()
     {
 $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarribad/fc_privacion2intermediaservidor_historicod2?pdoccogestor='.$this->session->userdata('documento'));
      $listarfiducias = json_decode($listarbac);

      foreach ($listarfiducias as $fiducia)
      {
	
         $this->m_sincroarribad->fm_privacion2intermediaservidor_historicod2($fiducia);

      } 

      echo json_encode('ok');
        }
     public function fc_privacion3intermediaservidor_historicod3()
     {
 $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarribad/fc_privacion3intermediaservidor_historicod3?pdoccogestor='.$this->session->userdata('documento'));
      $listarfiducias = json_decode($listarbac);

      foreach ($listarfiducias as $fiducia)
      {
	
         $this->m_sincroarribad->fm_privacion3intermediaservidor_historicod3($fiducia);

      } 

      echo json_encode('ok');
        }
     public function fc_privacion4intermediaservidor_historicod4()
     {
 $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarribad/fc_privacion4intermediaservidor_historicod4?pdoccogestor='.$this->session->userdata('documento'));
      $listarfiducias = json_decode($listarbac);

      foreach ($listarfiducias as $fiducia)
      {
	
         $this->m_sincroarribad->fm_privacion4intermediaservidor_historicod4($fiducia);

      } 

      echo json_encode('ok');
        }




     public function fc_ipmintermediaservidor_historicod()
     {
 $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarribad/fc_ipmintermediaservidor_historicod?pdoccogestor='.$this->session->userdata('documento'));
      $listarfiducias = json_decode($listarbac);

      foreach ($listarfiducias as $fiducia)
      {
	
         $this->m_sincroarribad->fm_ipmintermediaservidor_historicod($fiducia);

      } 

      echo json_encode('ok');
        }






     public function fc_privacion5intermediaservidor_historicod5()
     {
 $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarribad/fc_privacion5intermediaservidor_historicod5?pdoccogestor='.$this->session->userdata('documento'));
      $listarfiducias = json_decode($listarbac);

      foreach ($listarfiducias as $fiducia)
      {
	
         $this->m_sincroarribad->fm_privacion5intermediaservidor_historicod5($fiducia);

      } 

      echo json_encode('ok');
        }
     public function fc_privacion6intermediaservidor_historicod6()
     {
 $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarribad/fc_privacion6intermediaservidor_historicod6?pdoccogestor='.$this->session->userdata('documento'));
      $listarfiducias = json_decode($listarbac);

      foreach ($listarfiducias as $fiducia)
      {
	
         $this->m_sincroarribad->fm_privacion6intermediaservidor_historicod6($fiducia);

      } 

      echo json_encode('ok');
        }
     public function fc_privacion7intermediaservidor_historicod7()
     {
 $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarribad/fc_privacion7intermediaservidor_historicod7?pdoccogestor='.$this->session->userdata('documento'));
      $listarfiducias = json_decode($listarbac);

      foreach ($listarfiducias as $fiducia)
      {
	
         $this->m_sincroarribad->fm_privacion7intermediaservidor_historicod7($fiducia);

      } 

      echo json_encode('ok');
        }
     public function fc_privacion8intermediaservidor_historicod8()
     {
 $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarribad/fc_privacion8intermediaservidor_historicod8?pdoccogestor='.$this->session->userdata('documento'));
      $listarfiducias = json_decode($listarbac);

      foreach ($listarfiducias as $fiducia)
      {
	
         $this->m_sincroarribad->fm_privacion8intermediaservidor_historicod8($fiducia);

      } 

      echo json_encode('ok');
        }
     public function fc_privacion9intermediaservidor_historicod9()
     {
 $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarribad/fc_privacion9intermediaservidor_historicod9?pdoccogestor='.$this->session->userdata('documento'));
      $listarfiducias = json_decode($listarbac);

      foreach ($listarfiducias as $fiducia)
      {
	
         $this->m_sincroarribad->fm_privacion9intermediaservidor_historicod9($fiducia);

      } 

      echo json_encode('ok');
        }



     public function fc_sincronizarprotocoloestacionestado_intermedia_historicod1()  //NO HAY SP 
     {
     $resultado = $this->m_sincroarribad->fm_sincronizarprotocoloestacionestado_intermedia_historicod1();
     }
     public function fc_sincronizarprotocolopasosestado_intermedia_historicod1() //NO HAY SP
     {
     $resultado = $this->m_sincroarribad->fm_sincronizarprotocolopasosestado_intermedia_historicod1();
     }



     public function fc_encuadreservidord()
     {
 $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarribad/fc_encuadreservidord?pdoccogestor='.$this->session->userdata('documento'));
      $listarfiducias = json_decode($listarbac);

      foreach ($listarfiducias as $fiducia)
      {
	
         $this->m_sincroarribad->fm_encuadreservidord($fiducia);

      } 

      echo json_encode('ok');
        }

     public function fc_informaciongeneralvisitasservidord()
     {
      $this->m_sincroarribad->fm_informaciongeneralvisitasservidord();

   } 
    

     public function fc_informaciongeneralvisitas_historicod()
     {
 $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarribad/fc_informaciongeneralvisitas_historicod?pdoccogestor='.$this->session->userdata('documento'));
      $listarfiducias = json_decode($listarbac);

      foreach ($listarfiducias as $fiducia)
      {
	
         $this->m_sincroarribad->fm_informaciongeneralvisitas_historicod($fiducia);

      } 

      echo json_encode('ok');
        }

     public function fc_informaciongeneralvisitas_aed()
     {
 $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarribad/fc_informaciongeneralvisitas_aed?pdoccogestor='.$this->session->userdata('documento'));
      $listarfiducias = json_decode($listarbac);

      foreach ($listarfiducias as $fiducia)
      {
	
         $this->m_sincroarribad->fm_informaciongeneralvisitas_aed($fiducia);

      } 

      echo json_encode('ok');
        }

	 public function fc_sincrofin() 
	 {         
        $resultado = $this->m_sincroarribad->fm_sincrofin();
     }
     
     /////////////////////Finaliza Sincronizacion Arriba////////////////
     /////////////////////Inicia Sincronizacion Abajo//////////////////
     
      public function fc_reasignacionarriba() {
         
        $resultado = $this->m_sincroarribad->fm_reasignacionarriba($this->session->userdata('documento'));
       
     }
     
      public function fc_reasignacionabajo() {
         
        $resultado = $this->m_sincroarribad->fm_reasignacionabajo($this->session->userdata('documento'));
       
     }
      public function fc_sincronizacionabajo() {

         $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarribad/fc_reasignacionabajo?pdoccogestor='.$this->session->userdata('documento'));

        $listarfiducias = json_decode($listarbac);
  
        foreach ($listarfiducias as $fiducia)
        {
          $this->m_sincroarribad->fm_sincronizacionabajo($fiducia);
        } 
  
        echo json_encode('ok');

       
     }
   ///////////Inicio controladores de bajada cierre////////

   public function fc_ipmintermediaLCV1d()
   {
      $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarribad/fc_ipmintermediaLCV1d?pdoccogestor='.$this->session->userdata('documento'));
      $listarfiducias = json_decode($listarbac);

      foreach ($listarfiducias as $fiducia)
      {
   
         $this->m_sincroarribad->fm_ipmintermediaLCV1d($fiducia);
       
      }   echo json_encode('ok');
   }

   public function fc_privacion16intermediaLCV1d()
   {
      $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincronizacion_aba_sincrologro1d/fc_sincrop16l?pdoccogestor='.$this->session->userdata('documento'));
      $listarfiducias = json_decode($listarbac);

      foreach ($listarfiducias as $fiducia)
      {
   
         $this->m_sincroarribad->fm_privacion16intermediaLCV1d($fiducia);
echo json_encode('ok');
      } 

      

   //$resultado = $this->m_sincroarribad->fm_privacion16intermediaLCV1d();
   }

   public function fc_privacion15intermediaLCV1d()
   {
      $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincronizacion_aba_sincrologro1d/fc_sincrop15l?pdoccogestor='.$this->session->userdata('documento'));
      $listarfiducias = json_decode($listarbac);

      foreach ($listarfiducias as $fiducia)
      {
   
         $this->m_sincroarribad->fm_privacion15intermediaLCV1d($fiducia);

      } 

      echo json_encode('ok');

   //$resultado = $this->m_sincroarribad->fm_privacion15intermediaLCV1d();
   }

   public function fc_privacion14intermediaLCV1d()
   {
      $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincronizacion_aba_sincrologro1d/fc_sincrop14l?pdoccogestor='.$this->session->userdata('documento'));
      $listarfiducias = json_decode($listarbac);

      foreach ($listarfiducias as $fiducia)
      {
   
         $this->m_sincroarribad->fm_privacion14intermediaLCV1d($fiducia);

      } 

      echo json_encode('ok');

   //$resultado = $this->m_sincroarribad->fm_privacion14intermediaLCV1d();
   }

   public function fc_privacion13intermediaLCV1d()
   {
      $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincronizacion_aba_sincrologro1d/fc_sincrop13l?pdoccogestor='.$this->session->userdata('documento'));
      $listarfiducias = json_decode($listarbac);

      foreach ($listarfiducias as $fiducia)
      {
   
         $this->m_sincroarribad->fm_privacion13intermediaLCV1d($fiducia);

      } 

      echo json_encode('ok');

   //$resultado = $this->m_sincroarribad->fm_privacion13intermediaLCV1d();
   }

   public function fc_privacion12intermediaLCV1d()
   {
      $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincronizacion_aba_sincrologro1d/fc_sincrop12l?pdoccogestor='.$this->session->userdata('documento'));
      $listarfiducias = json_decode($listarbac);

      foreach ($listarfiducias as $fiducia)
      {
   
         $this->m_sincroarribad->fm_privacion12intermediaLCV1d($fiducia);

      } 

      echo json_encode('ok');

   //$resultado = $this->m_sincroarribad->fm_privacion12intermediaLCV1d();
   }

   public function fc_privacion11intermediaLCV1d()
   {
      $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincronizacion_aba_sincrologro1d/fc_sincrop11l?pdoccogestor='.$this->session->userdata('documento'));
      $listarfiducias = json_decode($listarbac);

      foreach ($listarfiducias as $fiducia)
      {
   
         $this->m_sincroarribad->fm_privacion11intermediaLCV1d($fiducia);

      } 

      echo json_encode('ok');

   //$resultado = $this->m_sincroarribad->fm_privacion11intermediaLCV1d();
   }

   public function fc_privacion10intermediaLCV1d()
   {
      $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincronizacion_aba_sincrologro1d/fc_sincrop10l?pdoccogestor='.$this->session->userdata('documento'));
      $listarfiducias = json_decode($listarbac);

      foreach ($listarfiducias as $fiducia)
      {
   
         $this->m_sincroarribad->fm_privacion10intermediaLCV1d($fiducia);

      } 

      echo json_encode('ok');

   //$resultado = $this->m_sincroarribad->fm_privacion10intermediaLCV1d();
   }

   public function fc_privacion9intermediaLCV1d()
   {
      $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincronizacion_aba_sincrologro1d/fc_sincrop9l?pdoccogestor='.$this->session->userdata('documento'));
      $listarfiducias = json_decode($listarbac);

      foreach ($listarfiducias as $fiducia)
      {
   
         $this->m_sincroarribad->fm_privacion9intermediaLCV1d($fiducia);

      } 

      echo json_encode('ok');

   //$resultado = $this->m_sincroarribad->fm_privacion9intermediaLCV1d();
   }

   public function fc_privacion8intermediaLCV1d()
   {
      $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincronizacion_aba_sincrologro1d/fc_sincrop8l?pdoccogestor='.$this->session->userdata('documento'));
      $listarfiducias = json_decode($listarbac);

      foreach ($listarfiducias as $fiducia)
      {
   
         $this->m_sincroarribad->fm_privacion8intermediaLCV1d($fiducia);

      } 

      echo json_encode('ok');

   //$resultado = $this->m_sincroarribad->fm_privacion8intermediaLCV1d();
   }

   public function fc_privacion7intermediaLCV1d()
   {
      $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincronizacion_aba_sincrologro1d/fc_sincrop7l?pdoccogestor='.$this->session->userdata('documento'));
      $listarfiducias = json_decode($listarbac);

      foreach ($listarfiducias as $fiducia)
      {
   
         $this->m_sincroarribad->fm_privacion7intermediaLCV1d($fiducia);

      } 

      echo json_encode('ok');

   //$resultado = $this->m_sincroarribad->fm_privacion7intermediaLCV1d();
   }

   public function fc_privacion6intermediaLCV1d()
   {
      $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincronizacion_aba_sincrologro1d/fc_sincrop6l?pdoccogestor='.$this->session->userdata('documento'));
      $listarfiducias = json_decode($listarbac);

      foreach ($listarfiducias as $fiducia)
      {
   
         $this->m_sincroarribad->fm_privacion6intermediaLCV1d($fiducia);

      } 

      echo json_encode('ok');

   //$resultado = $this->m_sincroarribad->fm_privacion6intermediaLCV1d();
   }

   public function fc_privacion5intermediaLCV1d()
   {
      $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincronizacion_aba_sincrologro1d/fc_sincrop5l?pdoccogestor='.$this->session->userdata('documento'));
      $listarfiducias = json_decode($listarbac);

      foreach ($listarfiducias as $fiducia)
      {
   
         $this->m_sincroarribad->fm_privacion5intermediaLCV1d($fiducia);

      } 

      echo json_encode('ok');

   //$resultado = $this->m_sincroarribad->fm_privacion5intermediaLCV1d();
   }

   public function fc_privacion4intermediaLCV1d()
   {
      $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincronizacion_aba_sincrologro1d/fc_sincrop4l?pdoccogestor='.$this->session->userdata('documento'));
      $listarfiducias = json_decode($listarbac);

      foreach ($listarfiducias as $fiducia)
      {
   
         $this->m_sincroarribad->fm_privacion4intermediaLCV1d($fiducia);

      } 

      echo json_encode('ok');

   //$resultado = $this->m_sincroarribad->fm_privacion4intermediaLCV1d();
   }

   public function fc_privacion3intermediaLCV1d()
   {
      $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincronizacion_aba_sincrologro1d/fc_sincrop3l?pdoccogestor='.$this->session->userdata('documento'));
      $listarfiducias = json_decode($listarbac);

      foreach ($listarfiducias as $fiducia)
      {
   
         $this->m_sincroarribad->fm_privacion3intermediaLCV1d($fiducia);

      } 

      echo json_encode('ok');

   //$resultado = $this->m_sincroarribad->fm_privacion3intermediaLCV1d();
   }

   public function fc_privacion2intermediaLCV1d()
   {
      $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincronizacion_aba_sincrologro1d/fc_sincrop2l?pdoccogestor='.$this->session->userdata('documento'));
      $listarfiducias = json_decode($listarbac);

      foreach ($listarfiducias as $fiducia)
      {
   
         $this->m_sincroarribad->fm_privacion2intermediaLCV1d($fiducia);

      } 

      echo json_encode('ok');

   //$resultado = $this->m_sincroarribad->fm_privacion2intermediaLCV1d();
   }

   public function fc_privacion1intermediaLCV1d()
   {
      $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincronizacion_aba_sincrologro1d/fc_sincrop1l?pdoccogestor='.$this->session->userdata('documento'));
      $listarfiducias = json_decode($listarbac);

      foreach ($listarfiducias as $fiducia)
      {
   
         $this->m_sincroarribad->fm_privacion1intermediaLCV1d($fiducia);

      } 

      echo json_encode('ok');
   //$resultado = $this->m_sincroarribad->fm_privacion1intermediaLCV1d();
   }

   public function fc_capitulo11intermedia_lineacierred()
   {
      $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarribad/fc_capitulo11intermedia_lineacierred?pdoccogestor='.$this->session->userdata('documento'));

      $listarfiducias = json_decode($listarbac);

      foreach ($listarfiducias as $fiducia)
      {
   
         $this->m_sincroarribad->fm_capitulo11intermedia_lineacierred($fiducia);
      } 

      echo json_encode('ok');
   }

   public function fc_capitulo6intermedia_lineacierred()
   {
  $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarribad/fc_capitulo6intermedia_lineacierred?pdoccogestor='.$this->session->userdata('documento'));

        $listarfiducias = json_decode($listarbac);
  
        foreach ($listarfiducias as $fiducia)
        {
     
           $this->m_sincroarribad->fm_capitulo6intermedia_lineacierred($fiducia);
        } 
  
        echo json_encode('ok');   }

   public function fc_capitulo2intermedia_lineacierred()
   {
  $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarribad/fc_capitulo2intermedia_lineacierred?pdoccogestor='.$this->session->userdata('documento'));
  if ($listarbac !== false) {
   $listarfiducias = json_decode($listarbac);
   $datae;
         foreach ($listarfiducias as $fiducia)
         {
      
          $datae=   $this->m_sincroarribad->fm_capitulo2intermedia_lineacierred($fiducia);
         } 
         echo json_encode('ok');   
} else {
   // Hubo un error en la solicitud
   trigger_error('Error');   
}
      
   }

   public function fc_capitulo9intermedia_lineacierred()
   {
  $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarribad/fc_capitulo9intermedia_lineacierred?pdoccogestor='.$this->session->userdata('documento'));

        $listarfiducias = json_decode($listarbac);
  
        foreach ($listarfiducias as $fiducia)
        {
     
           $this->m_sincroarribad->fm_capitulo9intermedia_lineacierred($fiducia);
        } 
  
        echo json_encode('ok');   }

   public function fc_capitulo8intermedia_lineacierred()
   {
  $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarribad/fc_capitulo8intermedia_lineacierred?pdoccogestor='.$this->session->userdata('documento'));

        $listarfiducias = json_decode($listarbac);
  
        foreach ($listarfiducias as $fiducia)
        {
     
           $this->m_sincroarribad->fm_capitulo8intermedia_lineacierred($fiducia);
        } 
  
        echo json_encode('ok');   }

   public function fc_capitulo7intermedia_lineacierred()
   {
  $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarribad/fc_capitulo7intermedia_lineacierred?pdoccogestor='.$this->session->userdata('documento'));

        $listarfiducias = json_decode($listarbac);
  
        foreach ($listarfiducias as $fiducia)
        {
     
           $this->m_sincroarribad->fm_capitulo7intermedia_lineacierred($fiducia);
        } 
  
        echo json_encode('ok');   }

   public function fc_capitulo5intermedia_lineacierred()
   {
  $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarribad/fc_capitulo5intermedia_lineacierred?pdoccogestor='.$this->session->userdata('documento'));

        $listarfiducias = json_decode($listarbac);
  
        foreach ($listarfiducias as $fiducia)
        {
     
           $this->m_sincroarribad->fm_capitulo5intermedia_lineacierred($fiducia);
        } 
  
        echo json_encode('ok');   }

   public function fc_principalintegrantes_intermedialcv1d()
   {
  $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarribad/fc_principalintegrantes_intermedialcv1d?pdoccogestor='.$this->session->userdata('documento'));

        $listarfiducias = json_decode($listarbac);
  
        foreach ($listarfiducias as $fiducia)
        {
     
           $this->m_sincroarribad->fm_principalintegrantes_intermedialcv1d($fiducia);
        } 
  
        echo json_encode('ok');   }

   public function fc_sincronizaactualizacionppd()
   {
  $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarribad/fc_sincronizaactualizacionppd?pdoccogestor='.$this->session->userdata('documento'));

        $listarfiducias = json_decode($listarbac);
  
        foreach ($listarfiducias as $fiducia)
        {
     
           $this->m_sincroarribad->fm_sincronizaactualizacionppd($fiducia);
        } 
  
        echo json_encode('ok');   }
   ////////////////Fin controladores bajada cierre/////////////////

    public function fc_sincronizacionintegrantesd() {
         
  $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarribad/fc_sincronizacionintegrantesd?pdoccogestor='.$this->session->userdata('documento'));

        $listarfiducias = json_decode($listarbac);
  
        foreach ($listarfiducias as $fiducia)
        {
     
           $this->m_sincroarribad->fm_sincronizacionintegrantesd($fiducia);
        } 
  
        echo json_encode('ok');       
     }
     public function fc_sincronizacionhogard() {
         
  $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarribad/fc_sincronizacionhogard?pdoccogestor='.$this->session->userdata('documento'));

        $listarfiducias = json_decode($listarbac);
  
        foreach ($listarfiducias as $fiducia)
        {
     
           $this->m_sincroarribad->fm_sincronizacionhogard($fiducia);
        } 
  
        echo json_encode('ok');       
     }
     public function fc_capitulo2d() {
         
       // $resultado = $this->m_sincroarribad->fm_capitulo2d();

        $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarribad/fc_capitulo2d?pdoccogestor='.$this->session->userdata('documento'));

        $listarfiducias = json_decode($listarbac);
  
        foreach ($listarfiducias as $fiducia)
        {
     
           $this->m_sincroarribad->fm_capitulo2d($fiducia);
        } 
  
        echo json_encode('ok');

     }
     public function fc_capitulo3d() {
      $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarribad/fc_capitulo3d?pdoccogestor='.$this->session->userdata('documento'));
      $listarfiducias = json_decode($listarbac);
      foreach ($listarfiducias as $fiducia)
      {
   
         $this->m_sincroarribad->fm_capitulo3d($fiducia);

      } 

      echo json_encode('ok');       
     }
     public function fc_capitulo6d() {
      $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarribad/fc_capitulo6d?pdoccogestor='.$this->session->userdata('documento'));
      $listarfiducias = json_decode($listarbac);
      foreach ($listarfiducias as $fiducia)
      {
         $this->m_sincroarribad->fm_capitulo6d($fiducia);
      } 

      echo json_encode('ok'); 
       
     }
     public function fc_capitulo11d() {
         
      $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarribad/fc_capitulo11d?pdoccogestor='.$this->session->userdata('documento'));
      $listarfiducias = json_decode($listarbac);
      foreach ($listarfiducias as $fiducia)
      {
         $this->m_sincroarribad->fm_capitulo11d($fiducia);
      } 

      echo json_encode('ok'); 
       
     }
     public function fc_capitulo4id() {
      $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarribad/fc_capitulo4id?pdoccogestor='.$this->session->userdata('documento'));
      $listarfiducias = json_decode($listarbac);
      foreach ($listarfiducias as $fiducia)
      {
         $this->m_sincroarribad->fm_capitulo4id($fiducia);
      } 
      echo json_encode('ok');  
     }
     public function fc_capitulo5id() {
         
      $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarribad/fc_capitulo5id?pdoccogestor='.$this->session->userdata('documento'));
      $listarfiducias = json_decode($listarbac);
      foreach ($listarfiducias as $fiducia)
      {
         $this->m_sincroarribad->fm_capitulo5id($fiducia);
      } 
      echo json_encode('ok');  
       
     }
     public function fc_capitulo7id() {
         
      $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarribad/fc_capitulo7id?pdoccogestor='.$this->session->userdata('documento'));
      $listarfiducias = json_decode($listarbac);
      foreach ($listarfiducias as $fiducia)
      {
         $this->m_sincroarribad->fm_capitulo7id($fiducia);
      } 
      echo json_encode('ok');  
       
     }
     public function fc_capitulo8id() {
         
      $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarribad/fc_capitulo8id?pdoccogestor='.$this->session->userdata('documento'));
      $listarfiducias = json_decode($listarbac);
      foreach ($listarfiducias as $fiducia)
      {
         $this->m_sincroarribad->fm_capitulo8id($fiducia);
      } 
      echo json_encode('ok');  
       
     }
     public function fc_capitulo9id() {
         
      $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarribad/fc_capitulo9id?pdoccogestor='.$this->session->userdata('documento'));
      $listarfiducias = json_decode($listarbac);
      foreach ($listarfiducias as $fiducia)
      {
         $this->m_sincroarribad->fm_capitulo9id($fiducia);
      } 
      echo json_encode('ok');  
       
     }
     public function fc_capitulo10id() {
         
      $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarribad/fc_capitulo10id?pdoccogestor='.$this->session->userdata('documento'));
      $listarfiducias = json_decode($listarbac);
      foreach ($listarfiducias as $fiducia)
      {
         $this->m_sincroarribad->fm_capitulo10id($fiducia);
      } 
      echo json_encode('ok');  
       
     }
     public function fc_capitulo11id() {
         
      $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarribad/fc_capitulo11id?pdoccogestor='.$this->session->userdata('documento'));
      $listarfiducias = json_decode($listarbac);
      foreach ($listarfiducias as $fiducia)
      {
         $this->m_sincroarribad->fm_capitulo11id($fiducia);
      } 
      echo json_encode('ok');  
       
     }
     public function fc_capitulo12id() {
         
      $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarribad/fc_capitulo12id?pdoccogestor='.$this->session->userdata('documento'));
      $listarfiducias = json_decode($listarbac);
      foreach ($listarfiducias as $fiducia)
      {
         $this->m_sincroarribad->fm_capitulo12id($fiducia);
      } 
      echo json_encode('ok');  
       
     }
      public function fc_pphogard() { 
         $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarribad/fc_pphogard?pdoccogestor='.$this->session->userdata('documento'));
         $listarfiducias = json_decode($listarbac);
         foreach ($listarfiducias as $fiducia)
         {
            $this->m_sincroarribad->fm_pphogard($fiducia);
         } 
         echo json_encode('ok');  
       
     }
      public function fc_ppcap1d() {
         $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarribad/fc_ppcap1d?pdoccogestor='.$this->session->userdata('documento'));
         $listarfiducias = json_decode($listarbac);
         foreach ($listarfiducias as $fiducia)
         {
            $this->m_sincroarribad->fm_ppcap1d($fiducia);
         } 
         echo json_encode('ok'); 
     }
      public function fc_ppcap2d() {
         $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarribad/fc_ppcap2d?pdoccogestor='.$this->session->userdata('documento'));
         $listarfiducias = json_decode($listarbac);
         foreach ($listarfiducias as $fiducia)
         {
            $this->m_sincroarribad->fm_ppcap2d($fiducia);
         } 
         echo json_encode('ok'); 
     }
      public function fc_ppcap3d() {
         $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarribad/fc_ppcap3d?pdoccogestor='.$this->session->userdata('documento'));
         $listarfiducias = json_decode($listarbac);
         foreach ($listarfiducias as $fiducia)
         {
            $this->m_sincroarribad->fm_ppcap3d($fiducia);
         } 
         echo json_encode('ok'); 
     }
      public function fc_ppcap4d() {
         $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarribad/fc_ppcap4d?pdoccogestor='.$this->session->userdata('documento'));
         $listarfiducias = json_decode($listarbac);
         foreach ($listarfiducias as $fiducia)
         {
            $this->m_sincroarribad->fm_ppcap4d($fiducia);
         } 
         echo json_encode('ok'); 
     }
      public function fc_ppacademicad() {
         
         $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarribad/fc_ppacademicad?pdoccogestor='.$this->session->userdata('documento'));
         $listarfiducias = json_decode($listarbac);
         foreach ($listarfiducias as $fiducia)
         {
            $this->m_sincroarribad->fm_ppacademicad($fiducia);
         } 
         echo json_encode('ok'); 
       
     }
      public function fc_ppoestudiosd() {
         
         $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarribad/fc_ppoestudiosd?pdoccogestor='.$this->session->userdata('documento'));
         $listarfiducias = json_decode($listarbac);
         foreach ($listarfiducias as $fiducia)
         {
            $this->m_sincroarribad->fm_ppoestudiosd($fiducia);
         } 
         echo json_encode('ok'); 
       
     }
      public function fc_ppexpd() {
         
         $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarribad/fc_ppexpd?pdoccogestor='.$this->session->userdata('documento'));
         $listarfiducias = json_decode($listarbac);
         foreach ($listarfiducias as $fiducia)
         {
            $this->m_sincroarribad->fm_ppexpd($fiducia);
         } 
         echo json_encode('ok'); 
       
     }
     
     public function fc_pasosestadod() {
         
      $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarribad/fc_pasosestadod?pdoccogestor='.$this->session->userdata('documento'));
      $listarfiducias = json_decode($listarbac);
      foreach ($listarfiducias as $fiducia)
      {
         $this->m_sincroarribad->fm_pasosestadod($fiducia);
      } 
      echo json_encode('ok'); 
       
     }
     
     public function fc_actualizaciond() {
      $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarribad/fc_actualizaciond?pdoccogestor='.$this->session->userdata('documento'));
      $listarfiducias = json_decode($listarbac);
      foreach ($listarfiducias as $fiducia)
      {
         $this->m_sincroarribad->fm_actualizaciond($fiducia);
      } 
      echo json_encode('ok'); 
       
     }
     
     public function fc_fconlogrosd() {
        $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarribad/fc_fconlogrosd?pdoccogestor='.$this->session->userdata('documento'));
        $listarfiducias = json_decode($listarbac);
        foreach ($listarfiducias as $fiducia)
        {
         $this->m_sincroarribad->fm_fconlogrosd($fiducia);
        } 
        echo json_encode('ok'); 
       
     }
     
     public function fc_capacidadesd() {
         
        $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarribad/fc_capacidadesd?pdoccogestor='.$this->session->userdata('documento'));
        $listarfiducias = json_decode($listarbac);
        foreach ($listarfiducias as $fiducia)
        {
         $this->m_sincroarribad->fm_capacidadesd($fiducia);
        } 
        echo json_encode('ok'); 
       
     }
     
     public function fc_estacionestadod() {
         
      $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarribad/fc_estacionestadod?pdoccogestor='.$this->session->userdata('documento'));
      $listarfiducias = json_decode($listarbac);
      foreach ($listarfiducias as $fiducia)
      {
       $this->m_sincroarribad->fm_estacionestadod($fiducia);
      } 
      echo json_encode('ok'); 
     }
     
     public function fc_sincroc1p1ap12d() {
         
      $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarribad/fc_sincroc1p1ap12d?pdoccogestor='.$this->session->userdata('documento'));
      $listarfiducias = json_decode($listarbac);
      foreach ($listarfiducias as $fiducia)
      {
       $this->m_sincroarribad->fm_sincroc1p1ap12d($fiducia);
      } 
      echo json_encode('ok'); 
       
     }
     
     public function fc_sincrocapitulo1l2e1d() {
      $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarribad/fc_sincrocapitulo1l2e1d?pdoccogestor='.$this->session->userdata('documento'));
      $listarfiducias = json_decode($listarbac);
      foreach ($listarfiducias as $fiducia)
      {
       $this->m_sincroarribad->fm_sincrocapitulo1l2e1d($fiducia);
      } 
      echo json_encode('ok'); 
       
     }
     
     public function fc_sincrolinea2e1cualidadeshd() {
      $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarribad/fc_sincrolinea2e1cualidadeshd?pdoccogestor='.$this->session->userdata('documento'));
      $listarfiducias = json_decode($listarbac);
      foreach ($listarfiducias as $fiducia)
      {
       $this->m_sincroarribad->fm_sincrolinea2e1cualidadeshd($fiducia);
      } 
      echo json_encode('ok'); 
       
     }
     
     public function fc_sincrolinea2e1cualidadesid() {
      $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarribad/fc_sincrolinea2e1cualidadesid?pdoccogestor='.$this->session->userdata('documento'));
      $listarfiducias = json_decode($listarbac);
      foreach ($listarfiducias as $fiducia)
      {
       $this->m_sincroarribad->fm_sincrolinea2e1cualidadesid($fiducia);
      } 
      echo json_encode('ok'); 
       
       
     }
     ///////////////////////////sincronizacion logros//////////////////////////////////////
     public function fc_sincrologro1d() {

      $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincronizacion_aba_sincrologro1d/fc_sincrol1?pdoccogestor='.$this->session->userdata('documento'));
      $listarfiducias = json_decode($listarbac);

      foreach ($listarfiducias as $fiducia)
      {
	
         $this->m_sincroarribad->fm_sincrologro1d($fiducia);

      } 

      echo json_encode('ok');    

        //$resultado = $this->m_sincroarribad->fm_sincrologro1d();
       
     }
     public function fc_sincrologro2d() {

      $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincronizacion_aba_sincrologro1d/fc_sincrol2?pdoccogestor='.$this->session->userdata('documento'));
      $listarfiducias = json_decode($listarbac);

      foreach ($listarfiducias as $fiducia)
      {
	
         $this->m_sincroarribad->fm_sincrologro2d($fiducia);

      } 

      echo json_encode('ok');
         
      //  $resultado = $this->m_sincroarribad->fm_sincrologro2d();
       
     }
     public function fc_sincrologro3d() {

      $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincronizacion_aba_sincrologro1d/fc_sincrol3?pdoccogestor='.$this->session->userdata('documento'));
      $listarfiducias = json_decode($listarbac);

      foreach ($listarfiducias as $fiducia)
      {
	
         $this->m_sincroarribad->fm_sincrologro3d($fiducia);

      } 

      echo json_encode('ok');
         
     //   $resultado = $this->m_sincroarribad->fm_sincrologro3d();
       
     }
     public function fc_sincrologro4d() {

      $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincronizacion_aba_sincrologro1d/fc_sincrol4?pdoccogestor='.$this->session->userdata('documento'));
      $listarfiducias = json_decode($listarbac);

      foreach ($listarfiducias as $fiducia)
      {
	
         $this->m_sincroarribad->fm_sincrologro4d($fiducia);

      } 

      echo json_encode('ok');
         
      //  $resultado = $this->m_sincroarribad->fm_sincrologro4d();
       
     }
     public function fc_sincrologro5d() {
      
      $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincronizacion_aba_sincrologro1d/fc_sincrol5?pdoccogestor='.$this->session->userdata('documento'));
      $listarfiducias = json_decode($listarbac);

      foreach ($listarfiducias as $fiducia)
      {
	
         $this->m_sincroarribad->fm_sincrologro5d($fiducia);

      } 

      echo json_encode('ok');

      //  $resultado = $this->m_sincroarribad->fm_sincrologro5d();
       
     }
     public function fc_sincrologro6d() {

      $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincronizacion_aba_sincrologro1d/fc_sincrol6?pdoccogestor='.$this->session->userdata('documento'));
      $listarfiducias = json_decode($listarbac);

      foreach ($listarfiducias as $fiducia)
      {
	
         $this->m_sincroarribad->fm_sincrologro6d($fiducia);

      } 

      echo json_encode('ok');
         
      //  $resultado = $this->m_sincroarribad->fm_sincrologro6d();
       
     }
     public function fc_sincrologro7d() {

      $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincronizacion_aba_sincrologro1d/fc_sincrol7?pdoccogestor='.$this->session->userdata('documento'));
      $listarfiducias = json_decode($listarbac);

      foreach ($listarfiducias as $fiducia)
      {
	
         $this->m_sincroarribad->fm_sincrologro7d($fiducia);

      } 

      echo json_encode('ok');
         
      //  $resultado = $this->m_sincroarribad->fm_sincrologro7d();
       
     }
     public function fc_sincrologro8d() {

      $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincronizacion_aba_sincrologro1d/fc_sincrol8?pdoccogestor='.$this->session->userdata('documento'));
      $listarfiducias = json_decode($listarbac);

      foreach ($listarfiducias as $fiducia)
      {
	
         $this->m_sincroarribad->fm_sincrologro8d($fiducia);

      } 

      echo json_encode('ok');
         
      //  $resultado = $this->m_sincroarribad->fm_sincrologro8d();
       
     }
     public function fc_sincrologro9d() {

      $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincronizacion_aba_sincrologro1d/fc_sincrol9?pdoccogestor='.$this->session->userdata('documento'));
      $listarfiducias = json_decode($listarbac);

      foreach ($listarfiducias as $fiducia)
      {
	
         $this->m_sincroarribad->fm_sincrologro9d($fiducia);

      } 

      echo json_encode('ok');
         
      //  $resultado = $this->m_sincroarribad->fm_sincrologro9d();
       
     }
     public function fc_sincrologro10d() {

      $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincronizacion_aba_sincrologro1d/fc_sincrol10?pdoccogestor='.$this->session->userdata('documento'));
      $listarfiducias = json_decode($listarbac);

      foreach ($listarfiducias as $fiducia)
      {
	
         $this->m_sincroarribad->fm_sincrologro10d($fiducia);

      } 

      echo json_encode('ok');
         
      //  $resultado = $this->m_sincroarribad->fm_sincrologro10d();
       
     }
     public function fc_sincrologro11d() {

      $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincronizacion_aba_sincrologro1d/fc_sincrol11?pdoccogestor='.$this->session->userdata('documento'));
      $listarfiducias = json_decode($listarbac);

      foreach ($listarfiducias as $fiducia)
      {
	
         $this->m_sincroarribad->fm_sincrologro11d($fiducia);

      } 

      echo json_encode('ok');
         
      //  $resultado = $this->m_sincroarribad->fm_sincrologro11d();
       
     }
     public function fc_sincrologro12d() {

      $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincronizacion_aba_sincrologro1d/fc_sincrol12?pdoccogestor='.$this->session->userdata('documento'));
      $listarfiducias = json_decode($listarbac);

      foreach ($listarfiducias as $fiducia)
      {
	
         $this->m_sincroarribad->fm_sincrologro12d($fiducia);

      } 

      echo json_encode('ok');
         
      //  $resultado = $this->m_sincroarribad->fm_sincrologro12d();
       
     }
     public function fc_sincrologro13d() {

      $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincronizacion_aba_sincrologro1d/fc_sincrol13?pdoccogestor='.$this->session->userdata('documento'));
      $listarfiducias = json_decode($listarbac);

      foreach ($listarfiducias as $fiducia)
      {
	
         $this->m_sincroarribad->fm_sincrologro13d($fiducia);

      } 

      echo json_encode('ok');
         
      //  $resultado = $this->m_sincroarribad->fm_sincrologro13d();
       
     }
     public function fc_sincrologro14d() {

      $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincronizacion_aba_sincrologro1d/fc_sincrol14?pdoccogestor='.$this->session->userdata('documento'));
      $listarfiducias = json_decode($listarbac);

      foreach ($listarfiducias as $fiducia)
      {
	
         $this->m_sincroarribad->fm_sincrologro14d($fiducia);

      } 

      echo json_encode('ok');
         
      //  $resultado = $this->m_sincroarribad->fm_sincrologro14d();
       
     }
     public function fc_sincrologro15d() {

      $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincronizacion_aba_sincrologro1d/fc_sincrol15?pdoccogestor='.$this->session->userdata('documento'));
      $listarfiducias = json_decode($listarbac);

      foreach ($listarfiducias as $fiducia)
      {
	
         $this->m_sincroarribad->fm_sincrologro15d($fiducia);

      } 

      echo json_encode('ok');
         
      //  $resultado = $this->m_sincroarribad->fm_sincrologro15d();
       
     }
     public function fc_sincrologro16d() {

      $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincronizacion_aba_sincrologro1d/fc_sincrol16?pdoccogestor='.$this->session->userdata('documento'));
      $listarfiducias = json_decode($listarbac);

      foreach ($listarfiducias as $fiducia)
      {
	
         $this->m_sincroarribad->fm_sincrologro16d($fiducia);

      } 

      echo json_encode('ok');
         
      //  $resultado = $this->m_sincroarribad->fm_sincrologro16d();
       
     }
     public function fc_sincrologro17d() {

      $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincronizacion_aba_sincrologro1d/fc_sincrol17?pdoccogestor='.$this->session->userdata('documento'));
      $listarfiducias = json_decode($listarbac);

      foreach ($listarfiducias as $fiducia)
      {
	
         $this->m_sincroarribad->fm_sincrologro17d($fiducia);

      } 

      echo json_encode('ok');
         
      //  $resultado = $this->m_sincroarribad->fm_sincrologro17d();
       
     }
     public function fc_sincrologro18d() {

      $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincronizacion_aba_sincrologro1d/fc_sincrol18?pdoccogestor='.$this->session->userdata('documento'));
      $listarfiducias = json_decode($listarbac);

      foreach ($listarfiducias as $fiducia)
      {
	
         $this->m_sincroarribad->fm_sincrologro18d($fiducia);

      } 

      echo json_encode('ok');
         
        //$resultado = $this->m_sincroarribad->fm_sincrologro18d();
       
     }
     public function fc_sincrologro19d() {

      $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincronizacion_aba_sincrologro1d/fc_sincrol19?pdoccogestor='.$this->session->userdata('documento'));
      $listarfiducias = json_decode($listarbac);

      foreach ($listarfiducias as $fiducia)
      {
	
         $this->m_sincroarribad->fm_sincrologro19d($fiducia);

      } 

      echo json_encode('ok');
         
      //  $resultado = $this->m_sincroarribad->fm_sincrologro19d();
       
     }
     public function fc_sincrologro20d() {

      $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincronizacion_aba_sincrologro1d/fc_sincrol20?pdoccogestor='.$this->session->userdata('documento'));
      $listarfiducias = json_decode($listarbac);

      foreach ($listarfiducias as $fiducia)
      {
	
         $this->m_sincroarribad->fm_sincrologro20d($fiducia);

      } 

      echo json_encode('ok');
         
      //  $resultado = $this->m_sincroarribad->fm_sincrologro20d();
       
     }

     public function fc_sincrologro21d() {

      $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincronizacion_aba_sincrologro1d/fc_sincrol21?pdoccogestor='.$this->session->userdata('documento'));
      $listarfiducias = json_decode($listarbac);

      foreach ($listarfiducias as $fiducia)
      {
	
         $this->m_sincroarribad->fm_sincrologro21d($fiducia);

      } 

      echo json_encode('ok');
         
      //  $resultado = $this->m_sincroarribad->fm_sincrologro21d();
       
     }
     public function fc_sincrologro22d() {

      $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincronizacion_aba_sincrologro1d/fc_sincrol22?pdoccogestor='.$this->session->userdata('documento'));
      $listarfiducias = json_decode($listarbac);

      foreach ($listarfiducias as $fiducia)
      {
	
         $this->m_sincroarribad->fm_sincrologro22d($fiducia);

      } 

      echo json_encode('ok');
         
      //  $resultado = $this->m_sincroarribad->fm_sincrologro22d();
       
     }
     public function fc_sincrologro23d() {

      $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincronizacion_aba_sincrologro1d/fc_sincrol23?pdoccogestor='.$this->session->userdata('documento'));
      $listarfiducias = json_decode($listarbac);

      foreach ($listarfiducias as $fiducia)
      {
	
         $this->m_sincroarribad->fm_sincrologro23d($fiducia);

      } 

      echo json_encode('ok');
         
       // $resultado = $this->m_sincroarribad->fm_sincrologro23d();
       
     }
     public function fc_sincrologro24d() {

      $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincronizacion_aba_sincrologro1d/fc_sincrol24?pdoccogestor='.$this->session->userdata('documento'));
      $listarfiducias = json_decode($listarbac);

      foreach ($listarfiducias as $fiducia)
      {
	
         $this->m_sincroarribad->fm_sincrologro24d($fiducia);

      } 

      echo json_encode('ok');
         
        //$resultado = $this->m_sincroarribad->fm_sincrologro24d();
       
     }
     public function fc_sincrologro25d() {

      $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincronizacion_aba_sincrologro1d/fc_sincrol25?pdoccogestor='.$this->session->userdata('documento'));
      $listarfiducias = json_decode($listarbac);

      foreach ($listarfiducias as $fiducia)
      {
	
         $this->m_sincroarribad->fm_sincrologro25d($fiducia);

      } 

      echo json_encode('ok');
         
      //  $resultado = $this->m_sincroarribad->fm_sincrologro25d();
       
     }
     public function fc_sincrologro26d() {

      $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincronizacion_aba_sincrologro1d/fc_sincrol26?pdoccogestor='.$this->session->userdata('documento'));
      $listarfiducias = json_decode($listarbac);

      foreach ($listarfiducias as $fiducia)
      {
	
         $this->m_sincroarribad->fm_sincrologro26d($fiducia);

      } 

      echo json_encode('ok');
         
      //  $resultado = $this->m_sincroarribad->fm_sincrologro26d();
       
     }
     public function fc_sincrologro27d() {

      $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincronizacion_aba_sincrologro1d/fc_sincrol27?pdoccogestor='.$this->session->userdata('documento'));
      $listarfiducias = json_decode($listarbac);

      foreach ($listarfiducias as $fiducia)
      {
	
         $this->m_sincroarribad->fm_sincrologro27d($fiducia);

      } 

      echo json_encode('ok');
         
      //  $resultado = $this->m_sincroarribad->fm_sincrologro27d();
       
     }
     public function fc_sincrologro28d() {

      $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincronizacion_aba_sincrologro1d/fc_sincrol28?pdoccogestor='.$this->session->userdata('documento'));
      $listarfiducias = json_decode($listarbac);

      foreach ($listarfiducias as $fiducia)
      {
	
         $this->m_sincroarribad->fm_sincrologro28d($fiducia);

      } 

      echo json_encode('ok');
         
      //  $resultado = $this->m_sincroarribad->fm_sincrologro28d();
       
     }
     public function fc_sincrologro29d() {

      $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincronizacion_aba_sincrologro1d/fc_sincrol29?pdoccogestor='.$this->session->userdata('documento'));
      $listarfiducias = json_decode($listarbac);

      foreach ($listarfiducias as $fiducia)
      {
	
         $this->m_sincroarribad->fm_sincrologro29d($fiducia);

      } 

      echo json_encode('ok');
         
       // $resultado = $this->m_sincroarribad->fm_sincrologro29d();
       
     }
     public function fc_sincrologro30d() {

      $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincronizacion_aba_sincrologro1d/fc_sincrol30?pdoccogestor='.$this->session->userdata('documento'));
      $listarfiducias = json_decode($listarbac);

      foreach ($listarfiducias as $fiducia)
      {
	
         $this->m_sincroarribad->fm_sincrologro30d($fiducia);

      } 

      echo json_encode('ok');
         
       // $resultado = $this->m_sincroarribad->fm_sincrologro30d();
       
     }
     public function fc_sincrologro31d() {

      $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincronizacion_aba_sincrologro1d/fc_sincrol31?pdoccogestor='.$this->session->userdata('documento'));
      $listarfiducias = json_decode($listarbac);

      foreach ($listarfiducias as $fiducia)
      {
	
         $this->m_sincroarribad->fm_sincrologro31d($fiducia);

      } 

      echo json_encode('ok');
         
        //$resultado = $this->m_sincroarribad->fm_sincrologro31d();
       
     }
     public function fc_sincrologro32d() {

      $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincronizacion_aba_sincrologro1d/fc_sincrol32?pdoccogestor='.$this->session->userdata('documento'));
      $listarfiducias = json_decode($listarbac);

      foreach ($listarfiducias as $fiducia)
      {
	
         $this->m_sincroarribad->fm_sincrologro32d($fiducia);

      } 

      echo json_encode('ok');
         
       // $resultado = $this->m_sincroarribad->fm_sincrologro32d();
       
     }
     public function fc_sincrologro33d() {

      $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincronizacion_aba_sincrologro1d/fc_sincrol33?pdoccogestor='.$this->session->userdata('documento'));
      $listarfiducias = json_decode($listarbac);

      foreach ($listarfiducias as $fiducia)
      {
	
         $this->m_sincroarribad->fm_sincrologro33d($fiducia);

      } 

      echo json_encode('ok');
         
      //  $resultado = $this->m_sincroarribad->fm_sincrologro33d();
       
     }
     public function fc_sincrologro34d() {

      $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincronizacion_aba_sincrologro1d/fc_sincrol34?pdoccogestor='.$this->session->userdata('documento'));
      $listarfiducias = json_decode($listarbac);

      foreach ($listarfiducias as $fiducia)
      {
	
         $this->m_sincroarribad->fm_sincrologro34d($fiducia);

      } 

      echo json_encode('ok');
         
       // $resultado = $this->m_sincroarribad->fm_sincrologro34d();
       
     }
     public function fc_sincrologro35d() {

      $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincronizacion_aba_sincrologro1d/fc_sincrol35?pdoccogestor='.$this->session->userdata('documento'));
      $listarfiducias = json_decode($listarbac);

      foreach ($listarfiducias as $fiducia)
      {
	
         $this->m_sincroarribad->fm_sincrologro35d($fiducia);

      } 

      echo json_encode('ok');
         
       // $resultado = $this->m_sincroarribad->fm_sincrologro35d();
       
     }
     public function fc_sincrologro36d() {

      $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincronizacion_aba_sincrologro1d/fc_sincrol36?pdoccogestor='.$this->session->userdata('documento'));
      $listarfiducias = json_decode($listarbac);

      foreach ($listarfiducias as $fiducia)
      {
	
         $this->m_sincroarribad->fm_sincrologro36d($fiducia);

      } 

      echo json_encode('ok');
         
       // $resultado = $this->m_sincroarribad->fm_sincrologro36d();
       
     }
     public function fc_sincrologro37d() {

      $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincronizacion_aba_sincrologro1d/fc_sincrol37?pdoccogestor='.$this->session->userdata('documento'));
      $listarfiducias = json_decode($listarbac);

      foreach ($listarfiducias as $fiducia)
      {
	
         $this->m_sincroarribad->fm_sincrologro37d($fiducia);

      } 

      echo json_encode('ok');
         
        //$resultado = $this->m_sincroarribad->fm_sincrologro37d();
       
     }
     public function fc_sincrologro38d() {

      $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincronizacion_aba_sincrologro1d/fc_sincrol38?pdoccogestor='.$this->session->userdata('documento'));
      $listarfiducias = json_decode($listarbac);

      foreach ($listarfiducias as $fiducia)
      {
	
         $this->m_sincroarribad->fm_sincrologro38d($fiducia);

      } 

      echo json_encode('ok');
         
        //$resultado = $this->m_sincroarribad->fm_sincrologro38d();
       
     }
     public function fc_sincrologro39d() {

      $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincronizacion_aba_sincrologro1d/fc_sincrol39?pdoccogestor='.$this->session->userdata('documento'));
      $listarfiducias = json_decode($listarbac);

      foreach ($listarfiducias as $fiducia)
      {
	
         $this->m_sincroarribad->fm_sincrologro39d($fiducia);

      } 

      echo json_encode('ok');
         
        //$resultado = $this->m_sincroarribad->fm_sincrologro39d();
       
     }
     public function fc_sincrologro40d() {

      $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincronizacion_aba_sincrologro1d/fc_sincrol40?pdoccogestor='.$this->session->userdata('documento'));
      $listarfiducias = json_decode($listarbac);

      foreach ($listarfiducias as $fiducia)
      {
	
         $this->m_sincroarribad->fm_sincrologro40d($fiducia);

      } 

      echo json_encode('ok');
         
        //$resultado = $this->m_sincroarribad->fm_sincrologro40d();
       
     }
     public function fc_sincrologro41d() {

      $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincronizacion_aba_sincrologro1d/fc_sincrol41?pdoccogestor='.$this->session->userdata('documento'));
      $listarfiducias = json_decode($listarbac);

      foreach ($listarfiducias as $fiducia)
      {
	
         $this->m_sincroarribad->fm_sincrologro41d($fiducia);

      } 

      echo json_encode('ok');
         
        //$resultado = $this->m_sincroarribad->fm_sincrologro41d();
       
     }
     public function fc_hmovlogd() {
      // $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarribad/fc_hmovlogd?pdoccogestor='.$this->session->userdata('documento'));
      // $listarfiducias = json_decode($listarbac);

      // foreach ($listarfiducias as $fiducia)
      // {
	
      //    $this->m_sincroarribad->fm_hmovlogd($fiducia);

      // } 

      echo json_encode('ok');
    }
    public function fc_movlog10d() {
      // $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarribad/fc_movlog10d?pdoccogestor='.$this->session->userdata('documento'));
      // $listarfiducias = json_decode($listarbac);

      // foreach ($listarfiducias as $fiducia)
      // {
	
      //    $this->m_sincroarribad->fm_movlog10d($fiducia);

      // } 

      echo json_encode('ok');
    }
    public function fc_movlog18d() {
      // $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarribad/fc_movlog18d?pdoccogestor='.$this->session->userdata('documento'));
      // $listarfiducias = json_decode($listarbac);

      // foreach ($listarfiducias as $fiducia)
      // {
	
      //    $this->m_sincroarribad->fm_movlog18d($fiducia);

      // } 

      echo json_encode('ok');
    }
    public function fc_movlog24d() {
      // $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarribad/fc_movlog24d?pdoccogestor='.$this->session->userdata('documento'));
      // $listarfiducias = json_decode($listarbac);

      // foreach ($listarfiducias as $fiducia)
      // {
	
      //    $this->m_sincroarribad->fm_movlog24d($fiducia);

      // } 

      echo json_encode('ok');
    }
    public function fc_movlog33d() {
      // $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarribad/fc_movlog33d?pdoccogestor='.$this->session->userdata('documento'));
      // $listarfiducias = json_decode($listarbac);

      // foreach ($listarfiducias as $fiducia)
      // {
	
      //    $this->m_sincroarribad->fm_movlog33d($fiducia);

      // } 

      echo json_encode('ok');
    }
    public function fc_movlog34d() {
      // $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarribad/fc_movlog34d?pdoccogestor='.$this->session->userdata('documento'));
      // $listarfiducias = json_decode($listarbac);

      // foreach ($listarfiducias as $fiducia)
      // {
	
      //    $this->m_sincroarribad->fm_movlog34d($fiducia);

      // } 

      echo json_encode('ok');
    }
    public function fc_movlog39d() {
      // $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarribad/fc_movlog39d?pdoccogestor='.$this->session->userdata('documento'));
      // $listarfiducias = json_decode($listarbac);

      // foreach ($listarfiducias as $fiducia)
      // {
	
      //    $this->m_sincroarribad->fm_movlog39d($fiducia);

      // } 

      echo json_encode('ok');
    }
    public function fc_logromovimientocgsd() {
      // $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarribad/fc_logromovimientocgsd?pdoccogestor='.$this->session->userdata('documento'));
      // $listarfiducias = json_decode($listarbac);

      // foreach ($listarfiducias as $fiducia)
      // {
	
      //    $this->m_sincroarribad->fm_logromovimientocgsd($fiducia);

      // } 

      echo json_encode('ok');
    }
     public function fc_l2e2suenod() {
         
        $resultado = $this->m_sincroarribad->fm_l2e2suenod();
       
    }
    public function fc_l2e2suenoaccionesd() {
         
        $resultado = $this->m_sincroarribad->fm_l2e2suenoaccionesd();
       
    }
     public function fc_sincroipmd() {
      $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarribad/fc_sincroipmd?pdoccogestor='.$this->session->userdata('documento'));
      $listarfiducias = json_decode($listarbac);

      foreach ($listarfiducias as $fiducia)
      {
	
         $this->m_sincroarribad->fm_sincroipmd($fiducia);

      } 

      echo json_encode('ok');
     }
     
      public function fc_logroblancod() {
         
      //  $resultado = $this->m_sincroarribad->fm_logroblancod();
       
     }
     
      public function fc_logmovrec10d() {
         
      //       $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarribad/fc_logmovrec10d?pdoccogestor='.$this->session->userdata('documento'));
      // $listarfiducias = json_decode($listarbac);

      // foreach ($listarfiducias as $fiducia)
      // {
	
      //    $this->m_sincroarribad->fm_logmovrec10d($fiducia);

      // } 

      echo json_encode('ok');
       
     }
     
     public function fc_logmovrec11d() {
         
      //        $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarribad/fc_logmovrec11d?pdoccogestor='.$this->session->userdata('documento'));
      // $listarfiducias = json_decode($listarbac);

      // foreach ($listarfiducias as $fiducia)
      // {
	
      //    $this->m_sincroarribad->fm_logmovrec11d($fiducia);

      // } 

      echo json_encode('ok');
       
     }
     public function fc_logmovrec12d() {
         
      //        $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarribad/fc_logmovrec12d?pdoccogestor='.$this->session->userdata('documento'));
      // $listarfiducias = json_decode($listarbac);

      // foreach ($listarfiducias as $fiducia)
      // {
	
      //    $this->m_sincroarribad->fm_logmovrec12d($fiducia);

      // } 

      echo json_encode('ok');
       
     }
     public function fc_logmovrec13d() {
         
      //      $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarribad/fc_logmovrec13d?pdoccogestor='.$this->session->userdata('documento'));
      // $listarfiducias = json_decode($listarbac);

      // foreach ($listarfiducias as $fiducia)
      // {
	
      //    $this->m_sincroarribad->fm_logmovrec13d($fiducia);

      // } 

      echo json_encode('ok');
       
     }
     public function fc_logmovrec2d() {
         
      //      $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarribad/fc_logmovrec2d?pdoccogestor='.$this->session->userdata('documento'));
      // $listarfiducias = json_decode($listarbac);

      // foreach ($listarfiducias as $fiducia)
      // {
	
      //    $this->m_sincroarribad->fm_logmovrec2d($fiducia);

      // } 

      echo json_encode('ok');
       
     }
     public function fc_logmovrec22d() {
         
      //       $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarribad/fc_logmovrec22d?pdoccogestor='.$this->session->userdata('documento'));
      // $listarfiducias = json_decode($listarbac);

      // foreach ($listarfiducias as $fiducia)
      // {
	
      //    $this->m_sincroarribad->fm_logmovrec22d($fiducia);

      // } 

      echo json_encode('ok');
       
     }
     public function fc_logmovrec23d() {
         
      //      $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarribad/fc_logmovrec23d?pdoccogestor='.$this->session->userdata('documento'));
      // $listarfiducias = json_decode($listarbac);

      // foreach ($listarfiducias as $fiducia)
      // {
	
      //    $this->m_sincroarribad->fm_logmovrec23d($fiducia);

      // } 

      echo json_encode('ok');
       
     }
     public function fc_logmovrec3d() {
         
      //      $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarribad/fc_logmovrec3d?pdoccogestor='.$this->session->userdata('documento'));
      // $listarfiducias = json_decode($listarbac);

      // foreach ($listarfiducias as $fiducia)
      // {
	
      //    $this->m_sincroarribad->fm_logmovrec3d($fiducia);

      // } 

      echo json_encode('ok');
       
     }
     public function fc_logmovrec5d() {
         
      //      $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarribad/fc_logmovrec5d?pdoccogestor='.$this->session->userdata('documento'));
      // $listarfiducias = json_decode($listarbac);

      // foreach ($listarfiducias as $fiducia)
      // {
	
      //    $this->m_sincroarribad->fm_logmovrec5d($fiducia);

      // } 

      echo json_encode('ok');
       
     }
     public function fc_logmovrec7d() {
         
      //        $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarribad/fc_logmovrec7d?pdoccogestor='.$this->session->userdata('documento'));
      // $listarfiducias = json_decode($listarbac);

      // foreach ($listarfiducias as $fiducia)
      // {
	
      //    $this->m_sincroarribad->fm_logmovrec7d($fiducia);

      // } 

      echo json_encode('ok');
       
     }
     public function fc_logmovrec8d() {
         
      //       $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarribad/fc_logmovrec8d?pdoccogestor='.$this->session->userdata('documento'));
      // $listarfiducias = json_decode($listarbac);

      // foreach ($listarfiducias as $fiducia)
      // {
	
      //    $this->m_sincroarribad->fm_logmovrec8d($fiducia);

      // } 

      echo json_encode('ok');
       
     }
     public function fc_logmovrec9d() {
         
      //        $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarribad/fc_logmovrec9d?pdoccogestor='.$this->session->userdata('documento'));
      // $listarfiducias = json_decode($listarbac);

      // foreach ($listarfiducias as $fiducia)
      // {
	
      //    $this->m_sincroarribad->fm_logmovrec9d($fiducia);

      // } 

      echo json_encode('ok');
       
     }
     
     
     ///////////////////////////////Sincronizacion privaciones////////////////////////
     
      public function fc_sincroprivacion1d() {

         $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincronizacion_aba_sincrologro1d/fc_sincrop1?pdoccogestor='.$this->session->userdata('documento'));
         $listarfiducias = json_decode($listarbac);
   
         foreach ($listarfiducias as $fiducia)
         {
      
            $this->m_sincroarribad->fm_sincroprivacion1d($fiducia);
   
         } 
   
         echo json_encode('ok');
         
        // $resultado = $this->m_sincroarribad->fm_sincroprivacion1d();
       
     }
     public function fc_sincroprivacion2d() {

      $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincronizacion_aba_sincrologro1d/fc_sincrop2?pdoccogestor='.$this->session->userdata('documento'));
      $listarfiducias = json_decode($listarbac);

      foreach ($listarfiducias as $fiducia)
      {
   
         $this->m_sincroarribad->fm_sincroprivacion2d($fiducia);

      } 

      echo json_encode('ok');
         
      //  $resultado = $this->m_sincroarribad->fm_sincroprivacion2d();
       
     }
     public function fc_sincroprivacion3d() {

      $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincronizacion_aba_sincrologro1d/fc_sincrop3?pdoccogestor='.$this->session->userdata('documento'));
      $listarfiducias = json_decode($listarbac);

      foreach ($listarfiducias as $fiducia)
      {
   
         $this->m_sincroarribad->fm_sincroprivacion3d($fiducia);

      } 

      echo json_encode('ok');
         
      //  $resultado = $this->m_sincroarribad->fm_sincroprivacion3d();
       
     }
     public function fc_sincroprivacion4d() {

      $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincronizacion_aba_sincrologro1d/fc_sincrop4?pdoccogestor='.$this->session->userdata('documento'));
      $listarfiducias = json_decode($listarbac);

      foreach ($listarfiducias as $fiducia)
      {
   
         $this->m_sincroarribad->fm_sincroprivacion4d($fiducia);

      } 

      echo json_encode('ok');
         
      //  $resultado = $this->m_sincroarribad->fm_sincroprivacion4d();
       
     }
     public function fc_sincroprivacion5d() {

      $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincronizacion_aba_sincrologro1d/fc_sincrop5?pdoccogestor='.$this->session->userdata('documento'));
      $listarfiducias = json_decode($listarbac);

      foreach ($listarfiducias as $fiducia)
      {
   
         $this->m_sincroarribad->fm_sincroprivacion5d($fiducia);

      } 

      echo json_encode('ok');
         
      //  $resultado = $this->m_sincroarribad->fm_sincroprivacion5d();
       
     }
     public function fc_sincroprivacion6d() {

      $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincronizacion_aba_sincrologro1d/fc_sincrop6?pdoccogestor='.$this->session->userdata('documento'));
      $listarfiducias = json_decode($listarbac);

      foreach ($listarfiducias as $fiducia)
      {
   
         $this->m_sincroarribad->fm_sincroprivacion6d($fiducia);

      } 

      echo json_encode('ok');
         
       // $resultado = $this->m_sincroarribad->fm_sincroprivacion6d();
       
     }
     public function fc_sincroprivacion7d() {

      $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincronizacion_aba_sincrologro1d/fc_sincrop7?pdoccogestor='.$this->session->userdata('documento'));
      $listarfiducias = json_decode($listarbac);

      foreach ($listarfiducias as $fiducia)
      {
   
         $this->m_sincroarribad->fm_sincroprivacion7d($fiducia);

      } 

      echo json_encode('ok');
         
       // $resultado = $this->m_sincroarribad->fm_sincroprivacion7d();
       
     }
     public function fc_sincroprivacion8d() {

      $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincronizacion_aba_sincrologro1d/fc_sincrop8?pdoccogestor='.$this->session->userdata('documento'));
      $listarfiducias = json_decode($listarbac);

      foreach ($listarfiducias as $fiducia)
      {
   
         $this->m_sincroarribad->fm_sincroprivacion8d($fiducia);

      } 

      echo json_encode('ok');
         
       // $resultado = $this->m_sincroarribad->fm_sincroprivacion8d();
       
     }
     public function fc_sincroprivacion9d() {

      $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincronizacion_aba_sincrologro1d/fc_sincrop9?pdoccogestor='.$this->session->userdata('documento'));
      $listarfiducias = json_decode($listarbac);

      foreach ($listarfiducias as $fiducia)
      {
   
         $this->m_sincroarribad->fm_sincroprivacion9d($fiducia);

      } 

      echo json_encode('ok');
         
       // $resultado = $this->m_sincroarribad->fm_sincroprivacion9d();
       
     }
     public function fc_sincroprivacion10d() {

      $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincronizacion_aba_sincrologro1d/fc_sincrop10?pdoccogestor='.$this->session->userdata('documento'));
      $listarfiducias = json_decode($listarbac);

      foreach ($listarfiducias as $fiducia)
      {
   
         $this->m_sincroarribad->fm_sincroprivacion10d($fiducia);

      } 

      echo json_encode('ok');
         
        //$resultado = $this->m_sincroarribad->fm_sincroprivacion10d();
       
     }
     public function fc_sincroprivacion11d() {

      $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincronizacion_aba_sincrologro1d/fc_sincrop11?pdoccogestor='.$this->session->userdata('documento'));
      $listarfiducias = json_decode($listarbac);

      foreach ($listarfiducias as $fiducia)
      {
   
         $this->m_sincroarribad->fm_sincroprivacion11d($fiducia);

      } 

      echo json_encode('ok');
         
        //$resultado = $this->m_sincroarribad->fm_sincroprivacion11d();
       
     }
     public function fc_sincroprivacion12d() {

      $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincronizacion_aba_sincrologro1d/fc_sincrop12?pdoccogestor='.$this->session->userdata('documento'));
      $listarfiducias = json_decode($listarbac);

      foreach ($listarfiducias as $fiducia)
      {
   
         $this->m_sincroarribad->fm_sincroprivacion12d($fiducia);

      } 

      echo json_encode('ok');
         
       // $resultado = $this->m_sincroarribad->fm_sincroprivacion12d();
       
     }
     public function fc_sincroprivacion13d() {

      $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincronizacion_aba_sincrologro1d/fc_sincrop13?pdoccogestor='.$this->session->userdata('documento'));
      $listarfiducias = json_decode($listarbac);

      foreach ($listarfiducias as $fiducia)
      {
   
         $this->m_sincroarribad->fm_sincroprivacion13d($fiducia);

      } 

      echo json_encode('ok');
         
        //$resultado = $this->m_sincroarribad->fm_sincroprivacion13d();
       
     }
     public function fc_sincroprivacion14d() {

      $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincronizacion_aba_sincrologro1d/fc_sincrop14?pdoccogestor='.$this->session->userdata('documento'));
      $listarfiducias = json_decode($listarbac);

      foreach ($listarfiducias as $fiducia)
      {
   
         $this->m_sincroarribad->fm_sincroprivacion14d($fiducia);

      } 

      echo json_encode('ok');
         
        //$resultado = $this->m_sincroarribad->fm_sincroprivacion14d();
       
     }
     public function fc_sincroprivacion15d() {

      $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincronizacion_aba_sincrologro1d/fc_sincrop15?pdoccogestor='.$this->session->userdata('documento'));
      $listarfiducias = json_decode($listarbac);

      foreach ($listarfiducias as $fiducia)
      {
   
         $this->m_sincroarribad->fm_sincroprivacion15d($fiducia);

      } 

      echo json_encode('ok');
         
        //$resultado = $this->m_sincroarribad->fm_sincroprivacion15d();
       
     }
     public function fc_sincroprivacion16d() {

      $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincronizacion_aba_sincrologro1d/fc_sincrop16?pdoccogestor='.$this->session->userdata('documento'));
      $listarfiducias = json_decode($listarbac);

      foreach ($listarfiducias as $fiducia)
      {
   
         $this->m_sincroarribad->fm_sincroprivacion16d($fiducia);

      } 

      echo json_encode('ok');
         
       // $resultado = $this->m_sincroarribad->fm_sincroprivacion16d();
       
     }
          
     public function fc_borrarinactivos() {
         
        $resultado = $this->m_sincroarribad->fm_borrarinactivos();
       
     }
     /////////////////////Inicia Sincronizacion abajo Estacion Cero////////////////
     public function fc_hfprocedenciad() {
      $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarribad/fc_hfprocedenciad?pdoccogestor='.$this->session->userdata('documento'));
      $listarfiducias = json_decode($listarbac);

      foreach ($listarfiducias as $fiducia)
      {
	
         $this->m_sincroarribad->fm_hfprocedenciad($fiducia);

      } 

      echo json_encode('ok');
     }
     public function fc_hflogrosd() {
         $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarribad/fc_hflogrosd?pdoccogestor='.$this->session->userdata('documento'));
      $listarfiducias = json_decode($listarbac);

      foreach ($listarfiducias as $fiducia)
      {
	
         $this->m_sincroarribad->fm_hflogrosd($fiducia);

      } 

      echo json_encode('ok');
     }
     public function fc_hfcostumbresd() {
        $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarribad/fc_hfcostumbresd?pdoccogestor='.$this->session->userdata('documento'));
      $listarfiducias = json_decode($listarbac);

      foreach ($listarfiducias as $fiducia)
      {
	
         $this->m_sincroarribad->fm_hfcostumbresd($fiducia);

      } 

      echo json_encode('ok');
     }
     public function fc_hfconformaciond() {
        $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarribad/fc_hfconformaciond?pdoccogestor='.$this->session->userdata('documento'));
      $listarfiducias = json_decode($listarbac);

      foreach ($listarfiducias as $fiducia)
      {
	
         $this->m_sincroarribad->fm_hfconformaciond($fiducia);

      } 

      echo json_encode('ok');
     }
     public function fc_facttscual1d() {
        $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarribad/fc_facttscual1d?pdoccogestor='.$this->session->userdata('documento'));
      $listarfiducias = json_decode($listarbac);

      foreach ($listarfiducias as $fiducia)
      {
	
         $this->m_sincroarribad->fm_facttscual1d($fiducia);

      } 

      echo json_encode('ok');
     }
     public function fc_facttfcual1d() {
        $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarribad/fc_facttfcual1d?pdoccogestor='.$this->session->userdata('documento'));
      $listarfiducias = json_decode($listarbac);

      foreach ($listarfiducias as $fiducia)
      {
	
         $this->m_sincroarribad->fm_facttfcual1d($fiducia);

      } 

      echo json_encode('ok');
     }
     public function fc_facttecual1d() {
         $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarribad/fc_facttecual1d?pdoccogestor='.$this->session->userdata('documento'));
      $listarfiducias = json_decode($listarbac);

      foreach ($listarfiducias as $fiducia)
      {
	
         $this->m_sincroarribad->fm_facttecual1d($fiducia);

      } 

      echo json_encode('ok');
     }
     public function fc_factiscual1d() {
        $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarribad/fc_factiscual1d?pdoccogestor='.$this->session->userdata('documento'));
      $listarfiducias = json_decode($listarbac);

      foreach ($listarfiducias as $fiducia)
      {
	
         $this->m_sincroarribad->fm_factiscual1d($fiducia);

      } 

      echo json_encode('ok');
     }
     public function fc_factifcual1d() {
        $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarribad/fc_factifcual1d?pdoccogestor='.$this->session->userdata('documento'));
      $listarfiducias = json_decode($listarbac);

      foreach ($listarfiducias as $fiducia)
      {
	
         $this->m_sincroarribad->fm_factifcual1d($fiducia);

      } 

      echo json_encode('ok');
     }
     public function fc_factiecual1d() {
         $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarribad/fc_factiecual1d?pdoccogestor='.$this->session->userdata('documento'));
      $listarfiducias = json_decode($listarbac);

      foreach ($listarfiducias as $fiducia)
      {
	
         $this->m_sincroarribad->fm_factiecual1d($fiducia);

      } 

      echo json_encode('ok');
     }
     public function fc_estacioncerocead() {
        $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarribad/fc_estacioncerocead?pdoccogestor='.$this->session->userdata('documento'));
      $listarfiducias = json_decode($listarbac);

      foreach ($listarfiducias as $fiducia)
      {
	
         $this->m_sincroarribad->fm_estacioncerocead($fiducia);

      } 

      echo json_encode('ok');
     }
     public function fc_crisisscual1d() {
         $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarribad/fc_crisisscual1d?pdoccogestor='.$this->session->userdata('documento'));
      $listarfiducias = json_decode($listarbac);

      foreach ($listarfiducias as $fiducia)
      {
	
         $this->m_sincroarribad->fm_crisisscual1d($fiducia);

      } 

      echo json_encode('ok');
     }
     public function fc_crisisfcual1d() {
        $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarribad/fc_crisisfcual1d?pdoccogestor='.$this->session->userdata('documento'));
      $listarfiducias = json_decode($listarbac);

      foreach ($listarfiducias as $fiducia)
      {
	
         $this->m_sincroarribad->fm_crisisfcual1d($fiducia);

      } 

      echo json_encode('ok');
     }
     public function fc_crisisecual1d() {
        $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarribad/fc_crisisecual1d?pdoccogestor='.$this->session->userdata('documento'));
      $listarfiducias = json_decode($listarbac);

      foreach ($listarfiducias as $fiducia)
      {
	
         $this->m_sincroarribad->fm_crisisecual1d($fiducia);

      } 

      echo json_encode('ok');
     }
     public function fc_crearmetasd() {
         $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarribad/fc_crearmetasd?pdoccogestor='.$this->session->userdata('documento'));
      $listarfiducias = json_decode($listarbac);

      foreach ($listarfiducias as $fiducia)
      {
	
         $this->m_sincroarribad->fm_crearmetasd($fiducia);

      } 

      echo json_encode('ok');
     }
     public function fc_correspautonomiad() {
        $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarribad/fc_correspautonomiad?pdoccogestor='.$this->session->userdata('documento'));
      $listarfiducias = json_decode($listarbac);

      foreach ($listarfiducias as $fiducia)
      {
	
         $this->m_sincroarribad->fm_correspautonomiad($fiducia);

      } 

      echo json_encode('ok');
     }
     public function fc_eerfd() {
       $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarribad/fc_eerfd?pdoccogestor='.$this->session->userdata('documento'));
      $listarfiducias = json_decode($listarbac);

      foreach ($listarfiducias as $fiducia)
      {
	
         $this->m_sincroarribad->fm_eerfd($fiducia);

      } 

      echo json_encode('ok');
     }
     public function fc_avanceprocesod() {
       $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincronizacion_aba_avanceproceso/fc_aba_avanceproceso?pdoccogestor='.$this->session->userdata('documento'));
      $listarfiducias = json_decode($listarbac);

      foreach ($listarfiducias as $fiducia)
      {
	
         $this->m_sincroarribad->fm_avanceprocesod($fiducia);

      } 

      echo json_encode('ok');
     }
     public function fc_l2metasd() {
         $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarribad/fc_l2metasd?pdoccogestor='.$this->session->userdata('documento'));
      $listarfiducias = json_decode($listarbac);

      foreach ($listarfiducias as $fiducia)
      {
	
         $this->m_sincroarribad->fm_l2metasd($fiducia);

      } 

      echo json_encode('ok');
     }
     public function fc_l2accionesd() {
         $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarribad/fc_l2accionesd?pdoccogestor='.$this->session->userdata('documento'));
      $listarfiducias = json_decode($listarbac);

      foreach ($listarfiducias as $fiducia)
      {
	
         $this->m_sincroarribad->fm_l2accionesd($fiducia);

      } 

      echo json_encode('ok');
     }
     public function fc_casoexitosod() {
        $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarribad/fc_casoexitosod?pdoccogestor='.$this->session->userdata('documento'));
      $listarfiducias = json_decode($listarbac);

      foreach ($listarfiducias as $fiducia)
      {
	
         $this->m_sincroarribad->fm_casoexitosod($fiducia);

      } 

      echo json_encode('ok');
     }
     public function fc_correspautonomiahistoricod() {
        $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarribad/fc_correspautonomiahistoricod?pdoccogestor='.$this->session->userdata('documento'));
      $listarfiducias = json_decode($listarbac);

      foreach ($listarfiducias as $fiducia)
      {
	
         $this->m_sincroarribad->fm_correspautonomiahistoricod($fiducia);

      } 

      echo json_encode('ok');
     }
     
     
     /////////////////////Fin Sincronizacion Abajo Estacion Cero//////////////////
     public function fc_logromovimientocfd() {
      //   $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarribad/fc_logromovimientocfd?pdoccogestor='.$this->session->userdata('documento'));
      // $listarfiducias = json_decode($listarbac);

      // foreach ($listarfiducias as $fiducia)
      // {
	
      //    $this->m_sincroarribad->fm_logromovimientocfd($fiducia);

      // } 

      echo json_encode('ok');
     }
     
     public function fc_protocoloinicioestaciond() {
         
        $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarribad/fc_aba_protocoloinicioestacion?pdoccogestor='.$this->session->userdata('documento'));
        $listarfiducias = json_decode($listarbac);
  
        foreach ($listarfiducias as $fiducia)
        {
     
           $this->m_sincroarribad->fm_protocoloinicioestaciond($fiducia);
  
        } 
  
        echo json_encode('ok');
       
     }
     
     public function fc_condicionnecesariad() {
        $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarribad/fc_condicionnecesariad?pdoccogestor='.$this->session->userdata('documento'));
      $listarfiducias = json_decode($listarbac);

      foreach ($listarfiducias as $fiducia)
      {
	
         $this->m_sincroarribad->fm_condicionnecesariad($fiducia);

      } 

      echo json_encode('ok');
     }
     
     public function fc_movlogsisbend() {
      $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarribad/fc_movlogsisbend?pdoccogestor='.$this->session->userdata('documento'));
      $listarfiducias = json_decode($listarbac);

      foreach ($listarfiducias as $fiducia)
      {
	
         $this->m_sincroarribad->fm_movlogsisbend($fiducia);

      } 

      echo json_encode('ok');
      
   }
     
     
       
   public function fc_madresadolecentesd() {
      $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarribad/fc_madresadolecentesd?pdoccogestor='.$this->session->userdata('documento'));
      $listarfiducias = json_decode($listarbac);

      foreach ($listarfiducias as $fiducia)
      {
	
         $this->m_sincroarribad->fm_madresadolecentesd($fiducia);

      } 

      echo json_encode('ok');
      
   } 

   public function fc_principalintegrantes_intermediad() {
      $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarribad/fc_principalintegrantes_intermediad?pdoccogestor='.$this->session->userdata('documento'));
      $listarfiducias = json_decode($listarbac);

      foreach ($listarfiducias as $fiducia)
      {
	
         $this->m_sincroarribad->fm_principalintegrantes_intermediad($fiducia);

      } 

      echo json_encode('ok');
      
   } 
        
        
        
    }
    

