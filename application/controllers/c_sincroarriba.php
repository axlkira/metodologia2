<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class  C_sincroarriba extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->model('m_sincroarriba');//carga el controlador modelo
    }

   
     public function fc_sincroinicio($page = 'v_sincroarriba') {
         
        
       
        $tdatinte = 'Sincronizacion capitulo 2 exitosa!!!!';
        $this->load->view('pages/' . $page,  array('tabla' => $tdatinte));
       
     }
    //////////////////////////Sincroniza formularios//////////////////////
     public function fc_sincrocap2() {
         
        $this->m_sincroarriba->fm_cursorlogroblanco();
         $resultado = $this->m_sincroarriba->fm_sincrocap2();
         $resultado = $this->m_sincroarriba->fm_cursorcambiarestadosesioncierre();
        
       
     }
     
     public function fc_sincrocap3() {
         
        $resultado = $this->m_sincroarriba->fm_sincrocap3();
       
     }
     
     public function fc_sincrocap6() {
         
        $resultado = $this->m_sincroarriba->fm_sincrocap6();
       
     }
     
     public function fc_sincrocap11() {
         
        $resultado = $this->m_sincroarriba->fm_sincrocap11();
       
     }
     
     public function fc_sincrocap4i() {
         
        $resultado = $this->m_sincroarriba->fm_sincrocap4i();
       
     }
     
     public function fc_sincrocap5i() {
         
        $resultado = $this->m_sincroarriba->fm_sincrocap5i();
       
     }
     
     public function fc_sincrocap7i() {
         
        $resultado = $this->m_sincroarriba->fm_sincrocap7i();
       
     }
     
     public function fc_sincrocap8i() {
         
        $resultado = $this->m_sincroarriba->fm_sincrocap8i();
       
     }
     
     public function fc_sincrocap9i() {
         
        $resultado = $this->m_sincroarriba->fm_sincrocap9i();
       
     }
     
     public function fc_sincrocap10i() {
         
        $resultado = $this->m_sincroarriba->fm_sincrocap10i();
       
     }
     
     public function fc_sincrocap11i() {
         
        $resultado = $this->m_sincroarriba->fm_sincrocap11i();
       
     }
     
     public function fc_sincrocap12i() {
         
        $resultado = $this->m_sincroarriba->fm_sincrocap12i();
       
     }
     
     ////////////////////////Sincroniza perfil productivo//////////////////////
     
    public function fc_sincropph() {
         
        $resultado = $this->m_sincroarriba->fm_sincropph();
       
     }
     public function fc_sincroppcap1() {
         
        $resultado = $this->m_sincroarriba->fm_sincroppcap1();
       
     }
     public function fc_sincroppcap2() {
         
        $resultado = $this->m_sincroarriba->fm_sincroppcap2();
       
     }
     public function fc_sincroppcap3() {
         
        $resultado = $this->m_sincroarriba->fm_sincroppcap3();
       
     }
     public function fc_sincroppcap4() {
         
        $resultado = $this->m_sincroarriba->fm_sincroppcap4();
       
     }
     public function fc_sincroppfac() { //Formacion academica
         
        $resultado = $this->m_sincroarriba->fm_sincroppfac();
       
     }
     public function fc_sincroppoes() { //Otros estudios
         
        $resultado = $this->m_sincroarriba->fm_sincroppoes();
       
     }
     public function fc_sincroppexp() { //Experiencia
         
        $resultado = $this->m_sincroarriba->fm_sincroppexp();
       
     }
     
     ///////////////////////////sincronizacion logros//////////////////////////////////////
     public function fc_sincrologro1() {
         
        $resultado = $this->m_sincroarriba->fm_sincrologro1();
       
     }
     public function fc_sincrologro2() {
         
        $resultado = $this->m_sincroarriba->fm_sincrologro2();
       
     }
     public function fc_sincrologro3() {
         
        $resultado = $this->m_sincroarriba->fm_sincrologro3();
       
     }
     public function fc_sincrologro4() {
         
        $resultado = $this->m_sincroarriba->fm_sincrologro4();
       
     }
     public function fc_sincrologro5() {
         
        $resultado = $this->m_sincroarriba->fm_sincrologro5();
       
     }
     public function fc_sincrologro6() {
         
        $resultado = $this->m_sincroarriba->fm_sincrologro6();
       
     }
     public function fc_sincrologro7() {
         
        $resultado = $this->m_sincroarriba->fm_sincrologro7();
       
     }
     public function fc_sincrologro8() {
         
        $resultado = $this->m_sincroarriba->fm_sincrologro8();
       
     }
     public function fc_sincrologro9() {
         
        $resultado = $this->m_sincroarriba->fm_sincrologro9();
       
     }
     public function fc_sincrologro10() {
         
        $resultado = $this->m_sincroarriba->fm_sincrologro10();
       
     }
     public function fc_sincrologro11() {
         
        $resultado = $this->m_sincroarriba->fm_sincrologro11();
       
     }
     public function fc_sincrologro12() {
         
        $resultado = $this->m_sincroarriba->fm_sincrologro12();
       
     }
     public function fc_sincrologro13() {
         
        $resultado = $this->m_sincroarriba->fm_sincrologro13();
       
     }
     public function fc_sincrologro14() {
         
        $resultado = $this->m_sincroarriba->fm_sincrologro14();
       
     }
     public function fc_sincrologro15() {
         
        $resultado = $this->m_sincroarriba->fm_sincrologro15();
       
     }
     public function fc_sincrologro16() {
         
        $resultado = $this->m_sincroarriba->fm_sincrologro16();
       
     }
     public function fc_sincrologro17() {
         
        $resultado = $this->m_sincroarriba->fm_sincrologro17();
       
     }
     public function fc_sincrologro18() {
         
        $resultado = $this->m_sincroarriba->fm_sincrologro18();
       
     }
     public function fc_sincrologro19() {
         
        $resultado = $this->m_sincroarriba->fm_sincrologro19();
       
     }
     public function fc_sincrologro20() {
         
        $resultado = $this->m_sincroarriba->fm_sincrologro20();
       
     }
     public function fc_sincrologro21() {
         
        $resultado = $this->m_sincroarriba->fm_sincrologro21();
       
     }
     public function fc_sincrologro22() {
         
        $resultado = $this->m_sincroarriba->fm_sincrologro22();
       
     }
     public function fc_sincrologro23() {
         
        $resultado = $this->m_sincroarriba->fm_sincrologro23();
       
     }
     public function fc_sincrologro24() {
         
        $resultado = $this->m_sincroarriba->fm_sincrologro24();
       
     }
     public function fc_sincrologro25() {
         
        $resultado = $this->m_sincroarriba->fm_sincrologro25();
       
     }
     public function fc_sincrologro26() {
         
        $resultado = $this->m_sincroarriba->fm_sincrologro26();
       
     }
     public function fc_sincrologro27() {
         
        $resultado = $this->m_sincroarriba->fm_sincrologro27();
       
     }
     public function fc_sincrologro28() {
         
        $resultado = $this->m_sincroarriba->fm_sincrologro28();
       
     }
     public function fc_sincrologro29() {
         
        $resultado = $this->m_sincroarriba->fm_sincrologro29();
       
     }
     public function fc_sincrologro30() {
         
        $resultado = $this->m_sincroarriba->fm_sincrologro30();
       
     }
     public function fc_sincrologro31() {
         
        $resultado = $this->m_sincroarriba->fm_sincrologro31();
       
     }
     public function fc_sincrologro32() {
         
        $resultado = $this->m_sincroarriba->fm_sincrologro32();
       
     }
     public function fc_sincrologro33() {
         
        $resultado = $this->m_sincroarriba->fm_sincrologro33();
       
     }
     public function fc_sincrologro34() {
         
        $resultado = $this->m_sincroarriba->fm_sincrologro34();
       
     }
     public function fc_sincrologro35() {
         
        $resultado = $this->m_sincroarriba->fm_sincrologro35();
       
     }
     public function fc_sincrologro36() {
         
        $resultado = $this->m_sincroarriba->fm_sincrologro36();
       
     }
     public function fc_sincrologro37() {
         
        $resultado = $this->m_sincroarriba->fm_sincrologro37();
       
     }
     public function fc_sincrologro38() {
         
        $resultado = $this->m_sincroarriba->fm_sincrologro38();
       
     }
     public function fc_sincrologro39() {
         
        $resultado = $this->m_sincroarriba->fm_sincrologro39();
       
     }
     public function fc_sincrologro40() {
         
        $resultado = $this->m_sincroarriba->fm_sincrologro40();
       
     }
     public function fc_sincrologro41() {
         
        $resultado = $this->m_sincroarriba->fm_sincrologro41();
       
     }


     
    public function fc_hmovlog() {
      $bd_verfiducia =$this->m_sincroarriba->fm_hmovlog();
      $payload = json_encode($bd_verfiducia);
      $url = 'https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarriba/fc_hmovlog';
      $ch = curl_init($url);
      curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
      curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
      curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,  2);
      curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      //curl_exec($ch);
      $result = curl_exec($ch);
      echo json_encode($result);
      curl_close($ch);
    }
    public function fc_hmovlogok() {
      $this->m_sincroarriba->fm_hmovlogok();
    }

    public function fc_movlog10() { $bd_verfiducia =$this->m_sincroarriba->fm_movlog10();  $payload = json_encode($bd_verfiducia);  $url = 'https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarriba/fc_movlog10'; $ch = curl_init($url); curl_setopt($ch, CURLOPT_POSTFIELDS, $payload); curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);  curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,  2); curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);   $result = curl_exec($ch);   echo json_encode($result);   curl_close($ch);   
     } public function fc_movlog10ok() {$resultado = $this->m_sincroarriba->fm_movlog10ok();}
     public function fc_movlog18() { $bd_verfiducia =$this->m_sincroarriba->fm_movlog18();  $payload = json_encode($bd_verfiducia);  $url = 'https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarriba/fc_movlog18'; $ch = curl_init($url); curl_setopt($ch, CURLOPT_POSTFIELDS, $payload); curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);  curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,  2); curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);   $result = curl_exec($ch);   echo json_encode($result);   curl_close($ch);   
     } public function fc_movlog18ok() {$resultado = $this->m_sincroarriba->fm_movlog18ok();}
     public function fc_movlog24() { $bd_verfiducia =$this->m_sincroarriba->fm_movlog24();  $payload = json_encode($bd_verfiducia);  $url = 'https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarriba/fc_movlog24'; $ch = curl_init($url); curl_setopt($ch, CURLOPT_POSTFIELDS, $payload); curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);  curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,  2); curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);   $result = curl_exec($ch);   echo json_encode($result);   curl_close($ch);   
     } public function fc_movlog24ok() {$resultado = $this->m_sincroarriba->fm_movlog24ok();}
     public function fc_movlog33() { $bd_verfiducia =$this->m_sincroarriba->fm_movlog33();  $payload = json_encode($bd_verfiducia);  $url = 'https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarriba/fc_movlog33'; $ch = curl_init($url); curl_setopt($ch, CURLOPT_POSTFIELDS, $payload); curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);  curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,  2); curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);   $result = curl_exec($ch);   echo json_encode($result);   curl_close($ch);   
     } public function fc_movlog33ok() {$resultado = $this->m_sincroarriba->fm_movlog33ok();}
     public function fc_movlog34() { $bd_verfiducia =$this->m_sincroarriba->fm_movlog34();  $payload = json_encode($bd_verfiducia);  $url = 'https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarriba/fc_movlog34'; $ch = curl_init($url); curl_setopt($ch, CURLOPT_POSTFIELDS, $payload); curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);  curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,  2); curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);   $result = curl_exec($ch);   echo json_encode($result);   curl_close($ch);   
     } public function fc_movlog34ok() {$resultado = $this->m_sincroarriba->fm_movlog34ok();}
     public function fc_movlog39() { $bd_verfiducia =$this->m_sincroarriba->fm_movlog39();  $payload = json_encode($bd_verfiducia);  $url = 'https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarriba/fc_movlog39'; $ch = curl_init($url); curl_setopt($ch, CURLOPT_POSTFIELDS, $payload); curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);  curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,  2); curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);   $result = curl_exec($ch);   echo json_encode($result);   curl_close($ch);   
     } public function fc_movlog39ok() {$resultado = $this->m_sincroarriba->fm_movlog39ok();}
     public function fc_logromovimientocgs() { $bd_verfiducia =$this->m_sincroarriba->fm_logromovimientocgs();  $payload = json_encode($bd_verfiducia);  $url = 'https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarriba/fc_logromovimientocgs'; $ch = curl_init($url); curl_setopt($ch, CURLOPT_POSTFIELDS, $payload); curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);  curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,  2); curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);   $result = curl_exec($ch);   echo json_encode($result);   curl_close($ch);   
     } public function fc_logromovimientocgsok() {$resultado = $this->m_sincroarriba->fm_logromovimientocgsok();}

   //  public function fc_logromovimientocgs() {
         
   //      $resultado = $this->m_sincroarriba->fm_logromovimientocgs();
       
   //  }
    public function fc_l2e2sueno() {
         
        $resultado = $this->m_sincroarriba->fm_l2e2sueno();
       
    }
    public function fc_l2e2suenoacciones() {
         
        $resultado = $this->m_sincroarriba->fm_l2e2suenoacciones();
       
    }
     public function fc_sincroipm() {
         
        $resultado = $this->m_sincroarriba->fm_sincroipm();
       
     }
     
     
     public function fc_logroblanco() { $bd_verfiducia =$this->m_sincroarriba->fm_logroblanco();  $payload = json_encode($bd_verfiducia);  $url = 'https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarriba/fc_logroblanco'; $ch = curl_init($url); curl_setopt($ch, CURLOPT_POSTFIELDS, $payload); curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);  curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,  2); curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);   $result = curl_exec($ch);   echo json_encode($result);   curl_close($ch);   
     } public function fc_logroblancook() {$resultado = $this->m_sincroarriba->fm_logroblancook();}
     public function fc_logmovrec10() { $bd_verfiducia =$this->m_sincroarriba->fm_logmovrec10();  $payload = json_encode($bd_verfiducia);  $url = 'https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarriba/fc_logmovrec10'; $ch = curl_init($url); curl_setopt($ch, CURLOPT_POSTFIELDS, $payload); curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);  curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,  2); curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);   $result = curl_exec($ch);   echo json_encode($result);   curl_close($ch);   
     } public function fc_logmovrec10ok() {$resultado = $this->m_sincroarriba->fm_logmovrec10ok();}
     public function fc_logmovrec11() { $bd_verfiducia =$this->m_sincroarriba->fm_logmovrec11();  $payload = json_encode($bd_verfiducia);  $url = 'https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarriba/fc_logmovrec11'; $ch = curl_init($url); curl_setopt($ch, CURLOPT_POSTFIELDS, $payload); curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);  curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,  2); curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);   $result = curl_exec($ch);   echo json_encode($result);   curl_close($ch);   
     } public function fc_logmovrec11ok() {$resultado = $this->m_sincroarriba->fm_logmovrec11ok();}
     public function fc_logmovrec12() { $bd_verfiducia =$this->m_sincroarriba->fm_logmovrec12();  $payload = json_encode($bd_verfiducia);  $url = 'https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarriba/fc_logmovrec12'; $ch = curl_init($url); curl_setopt($ch, CURLOPT_POSTFIELDS, $payload); curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);  curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,  2); curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);   $result = curl_exec($ch);   echo json_encode($result);   curl_close($ch);   
     } public function fc_logmovrec12ok() {$resultado = $this->m_sincroarriba->fm_logmovrec12ok();}
     public function fc_logmovrec13() { $bd_verfiducia =$this->m_sincroarriba->fm_logmovrec13();  $payload = json_encode($bd_verfiducia);  $url = 'https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarriba/fc_logmovrec13'; $ch = curl_init($url); curl_setopt($ch, CURLOPT_POSTFIELDS, $payload); curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);  curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,  2); curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);   $result = curl_exec($ch);   echo json_encode($result);   curl_close($ch);   
     } public function fc_logmovrec13ok() {$resultado = $this->m_sincroarriba->fm_logmovrec13ok();}
     public function fc_logmovrec2() { $bd_verfiducia =$this->m_sincroarriba->fm_logmovrec2();  $payload = json_encode($bd_verfiducia);  $url = 'https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarriba/fc_logmovrec2'; $ch = curl_init($url); curl_setopt($ch, CURLOPT_POSTFIELDS, $payload); curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);  curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,  2); curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);   $result = curl_exec($ch);   echo json_encode($result);   curl_close($ch);   
     } public function fc_logmovrec2ok() {$resultado = $this->m_sincroarriba->fm_logmovrec2ok();}
     public function fc_logmovrec22() { $bd_verfiducia =$this->m_sincroarriba->fm_logmovrec22();  $payload = json_encode($bd_verfiducia);  $url = 'https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarriba/fc_logmovrec22'; $ch = curl_init($url); curl_setopt($ch, CURLOPT_POSTFIELDS, $payload); curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);  curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,  2); curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);   $result = curl_exec($ch);   echo json_encode($result);   curl_close($ch);   
     } public function fc_logmovrec22ok() {$resultado = $this->m_sincroarriba->fm_logmovrec22ok();}
     public function fc_logmovrec23() { $bd_verfiducia =$this->m_sincroarriba->fm_logmovrec23();  $payload = json_encode($bd_verfiducia);  $url = 'https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarriba/fc_logmovrec23'; $ch = curl_init($url); curl_setopt($ch, CURLOPT_POSTFIELDS, $payload); curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);  curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,  2); curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);   $result = curl_exec($ch);   echo json_encode($result);   curl_close($ch);   
     } public function fc_logmovrec23ok() {$resultado = $this->m_sincroarriba->fm_logmovrec23ok();}
     public function fc_logmovrec3() { $bd_verfiducia =$this->m_sincroarriba->fm_logmovrec3();  $payload = json_encode($bd_verfiducia);  $url = 'https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarriba/fc_logmovrec3'; $ch = curl_init($url); curl_setopt($ch, CURLOPT_POSTFIELDS, $payload); curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);  curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,  2); curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);   $result = curl_exec($ch);   echo json_encode($result);   curl_close($ch);   
     } public function fc_logmovrec3ok() {$resultado = $this->m_sincroarriba->fm_logmovrec3ok();}
     public function fc_logmovrec5() { $bd_verfiducia =$this->m_sincroarriba->fm_logmovrec5();  $payload = json_encode($bd_verfiducia);  $url = 'https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarriba/fc_logmovrec5'; $ch = curl_init($url); curl_setopt($ch, CURLOPT_POSTFIELDS, $payload); curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);  curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,  2); curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);   $result = curl_exec($ch);   echo json_encode($result);   curl_close($ch);   
     } public function fc_logmovrec5ok() {$resultado = $this->m_sincroarriba->fm_logmovrec5ok();}
     public function fc_logmovrec7() { $bd_verfiducia =$this->m_sincroarriba->fm_logmovrec7();  $payload = json_encode($bd_verfiducia);  $url = 'https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarriba/fc_logmovrec7'; $ch = curl_init($url); curl_setopt($ch, CURLOPT_POSTFIELDS, $payload); curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);  curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,  2); curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);   $result = curl_exec($ch);   echo json_encode($result);   curl_close($ch);   
     } public function fc_logmovrec7ok() {$resultado = $this->m_sincroarriba->fm_logmovrec7ok();}
     public function fc_logmovrec8() { $bd_verfiducia =$this->m_sincroarriba->fm_logmovrec8();  $payload = json_encode($bd_verfiducia);  $url = 'https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarriba/fc_logmovrec8'; $ch = curl_init($url); curl_setopt($ch, CURLOPT_POSTFIELDS, $payload); curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);  curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,  2); curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);   $result = curl_exec($ch);   echo json_encode($result);   curl_close($ch);   
     } public function fc_logmovrec8ok() {$resultado = $this->m_sincroarriba->fm_logmovrec8ok();}
     public function fc_logmovrec9() { $bd_verfiducia =$this->m_sincroarriba->fm_logmovrec9();  $payload = json_encode($bd_verfiducia);  $url = 'https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarriba/fc_logmovrec9'; $ch = curl_init($url); curl_setopt($ch, CURLOPT_POSTFIELDS, $payload); curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);  curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,  2); curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);   $result = curl_exec($ch);   echo json_encode($result);   curl_close($ch);   
     } public function fc_logmovrec9ok() {$resultado = $this->m_sincroarriba->fm_logmovrec9ok();}
    


     
     ///////////////////////////////Sincronizacion privaciones////////////////////////
     
      public function fc_sincroprivacion1() {
         
        $resultado = $this->m_sincroarriba->fm_sincroprivacion1();
       
     }
     public function fc_sincroprivacion2() {
         
        $resultado = $this->m_sincroarriba->fm_sincroprivacion2();
       
     }
     public function fc_sincroprivacion3() {
         
        $resultado = $this->m_sincroarriba->fm_sincroprivacion3();
       
     }
     public function fc_sincroprivacion4() {
         
        $resultado = $this->m_sincroarriba->fm_sincroprivacion4();
       
     }
     public function fc_sincroprivacion5() {
         
        $resultado = $this->m_sincroarriba->fm_sincroprivacion5();
       
     }
     public function fc_sincroprivacion6() {
         
        $resultado = $this->m_sincroarriba->fm_sincroprivacion6();
       
     }
     public function fc_sincroprivacion7() {
         
        $resultado = $this->m_sincroarriba->fm_sincroprivacion7();
       
     }
     public function fc_sincroprivacion8() {
         
        $resultado = $this->m_sincroarriba->fm_sincroprivacion8();
       
     }
     public function fc_sincroprivacion9() {
         
        $resultado = $this->m_sincroarriba->fm_sincroprivacion9();
       
     }
     public function fc_sincroprivacion10() {
         
        $resultado = $this->m_sincroarriba->fm_sincroprivacion10();
       
     }
     public function fc_sincroprivacion11() {
         
        $resultado = $this->m_sincroarriba->fm_sincroprivacion11();
       
     }
     public function fc_sincroprivacion12() {
         
        $resultado = $this->m_sincroarriba->fm_sincroprivacion12();
       
     }
     public function fc_sincroprivacion13() {
         
        $resultado = $this->m_sincroarriba->fm_sincroprivacion13();
       
     }
     public function fc_sincroprivacion14() {
         
        $resultado = $this->m_sincroarriba->fm_sincroprivacion14();
       
     }
     public function fc_sincroprivacion15() {
         
        $resultado = $this->m_sincroarriba->fm_sincroprivacion15();
       
     }
     public function fc_sincroprivacion16() {
         
        $resultado = $this->m_sincroarriba->fm_sincroprivacion16();
       
     }
     
     /////////////////////////////Sincronizacion otras tablas/////////////////////
     ////////////////////////pasosestado,estacionestado,capacidades,actualizacion///////////////

     
     
     public function fc_sincropasos() {
         
        $resultado = $this->m_sincroarriba->fm_sincropasos();
       
     }
      public function fc_sincroestacion() {
         
        $resultado = $this->m_sincroarriba->fm_sincroestacion();
       
     }
      public function fc_sincrocapacidades() {
         
        $resultado = $this->m_sincroarriba->fm_sincrocapacidades();
       
     }
      public function fc_sincroestacionh() {
         
        $resultado = $this->m_sincroarriba->fm_sincroestacionh();
       
     }
     
     public function fc_sincrohogar() { $bd_verfiducia =$this->m_sincroarriba->fm_sincrohogar();  $payload = json_encode($bd_verfiducia);  $url = 'https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarriba/fc_sincrohogar'; $ch = curl_init($url); curl_setopt($ch, CURLOPT_POSTFIELDS, $payload); curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);  curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,  2); curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);   $result = curl_exec($ch);   echo json_encode($result);   curl_close($ch);   
     } public function fc_sincrohogarok() {$resultado = $this->m_sincroarriba->fm_sincrohogarok();}


   //   public function fc_sincrohogar() {
         
   //      $resultado = $this->m_sincroarriba->fm_sincrohogar();
       
   //   }
     public function fc_sincrointegrante() {
      $bd_verfiducia =$this->m_sincroarriba->fm_sincrointegrante();
      $payload = json_encode($bd_verfiducia);
      $url = 'https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarriba/fc_sincrointegrante';
      $ch = curl_init($url);
      curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
      curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
      curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,  2);
      curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      //curl_exec($ch);
      $result = curl_exec($ch);
      echo json_encode($result);
      curl_close($ch);
     }

    public function fc_sincrointegranteok() {
      $this->m_sincroarriba->fm_sincrointegranteok();
    }

    
     public function fc_sincroactualizacion() {
         
        $resultado = $this->m_sincroarriba->fm_sincroactualizacion();
       
     }

     public function fc_sincrofolioslogros() { $bd_verfiducia =$this->m_sincroarriba->fm_sincrofolioslogros();  $payload = json_encode($bd_verfiducia);  $url = 'https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarriba/fc_sincrofolioslogros'; $ch = curl_init($url); curl_setopt($ch, CURLOPT_POSTFIELDS, $payload); curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);  curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,  2); curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);   $result = curl_exec($ch);   echo json_encode($result);   curl_close($ch);   }    
     public function fc_sincrofolioslogrosok() {echo json_encode('ok');}
     public function fc_sincroc1p1ap12() { $bd_verfiducia =$this->m_sincroarriba->fm_sincroc1p1ap12();  $payload = json_encode($bd_verfiducia);  $url = 'https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarriba/fc_sincroc1p1ap12'; $ch = curl_init($url); curl_setopt($ch, CURLOPT_POSTFIELDS, $payload); curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);  curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,  2); curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);   $result = curl_exec($ch);   echo json_encode($result);   curl_close($ch);   } 
     public function fc_sincroc1p1ap12ok() {$resultado = $this->m_sincroarriba->fm_sincroc1p1ap12ok();}

 
     
    public function fc_sincrocapitulo1l2e1() {
         
        $resultado = $this->m_sincroarriba->fm_sincrocapitulo1l2e1();
       
     }
     
     public function fc_sincrolinea2e1cualidadesh() {
         
        $resultado = $this->m_sincroarriba->fm_sincrolinea2e1cualidadesh();
       
     }
     
     public function fc_sincrolinea2e1cualidadesi() {
         
        $resultado = $this->m_sincroarriba->fm_sincrolinea2e1cualidadesi();
       
     }

     public function fc_sincrohistoricoactivacioni() { $bd_verfiducia =$this->m_sincroarriba->fm_sincrohistoricoactivacioni();  $payload = json_encode($bd_verfiducia);  $url = 'https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarriba/fc_sincrohistoricoactivacioni'; $ch = curl_init($url); curl_setopt($ch, CURLOPT_POSTFIELDS, $payload); curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);  curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,  2); curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);   $result = curl_exec($ch);   echo json_encode($result);   curl_close($ch);   } 
     public function fc_sincrohistoricoactivacioniok() {$resultado = $this->m_sincroarriba->fm_sincrohistoricoactivacioniok();}

     
 
     /////////////////////Inicia Sincronizacion Estacion Cero////////////////

     public function fc_hfprocedencia() { $bd_verfiducia =$this->m_sincroarriba->fm_hfprocedencia();  $payload = json_encode($bd_verfiducia);  $url = 'https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarriba/fc_hfprocedencia'; $ch = curl_init($url); curl_setopt($ch, CURLOPT_POSTFIELDS, $payload); curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);  curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,  2); curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);   $result = curl_exec($ch);   echo json_encode($result);   curl_close($ch);   }    
     public function fc_hfprocedenciaok() {echo json_encode('ok');}
     public function fc_hflogros() { $bd_verfiducia =$this->m_sincroarriba->fm_hflogros();  $payload = json_encode($bd_verfiducia);  $url = 'https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarriba/fc_hflogros'; $ch = curl_init($url); curl_setopt($ch, CURLOPT_POSTFIELDS, $payload); curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);  curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,  2); curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);   $result = curl_exec($ch);   echo json_encode($result);   curl_close($ch);   }    
     public function fc_hflogrosok() {echo json_encode('ok');}
     public function fc_hfcostumbres() { $bd_verfiducia =$this->m_sincroarriba->fm_hfcostumbres();  $payload = json_encode($bd_verfiducia);  $url = 'https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarriba/fc_hfcostumbres'; $ch = curl_init($url); curl_setopt($ch, CURLOPT_POSTFIELDS, $payload); curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);  curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,  2); curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);   $result = curl_exec($ch);   echo json_encode($result);   curl_close($ch);   }    
     public function fc_hfcostumbresok() {echo json_encode('ok');}
     public function fc_hfconformacion() { $bd_verfiducia =$this->m_sincroarriba->fm_hfconformacion();  $payload = json_encode($bd_verfiducia);  $url = 'https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarriba/fc_hfconformacion'; $ch = curl_init($url); curl_setopt($ch, CURLOPT_POSTFIELDS, $payload); curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);  curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,  2); curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);   $result = curl_exec($ch);   echo json_encode($result);   curl_close($ch);   }    
     public function fc_hfconformacionok() {echo json_encode('ok');}
     public function fc_facttscual1() { $bd_verfiducia =$this->m_sincroarriba->fm_facttscual1();  $payload = json_encode($bd_verfiducia);  $url = 'https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarriba/fc_facttscual1'; $ch = curl_init($url); curl_setopt($ch, CURLOPT_POSTFIELDS, $payload); curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);  curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,  2); curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);   $result = curl_exec($ch);   echo json_encode($result);   curl_close($ch);   }    
     public function fc_facttscual1ok() {echo json_encode('ok');}
     public function fc_facttfcual1() { $bd_verfiducia =$this->m_sincroarriba->fm_facttfcual1();  $payload = json_encode($bd_verfiducia);  $url = 'https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarriba/fc_facttfcual1'; $ch = curl_init($url); curl_setopt($ch, CURLOPT_POSTFIELDS, $payload); curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);  curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,  2); curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);   $result = curl_exec($ch);   echo json_encode($result);   curl_close($ch);   }    
     public function fc_facttfcual1ok() {echo json_encode('ok');}
     public function fc_facttecual1() { $bd_verfiducia =$this->m_sincroarriba->fm_facttecual1();  $payload = json_encode($bd_verfiducia);  $url = 'https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarriba/fc_facttecual1'; $ch = curl_init($url); curl_setopt($ch, CURLOPT_POSTFIELDS, $payload); curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);  curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,  2); curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);   $result = curl_exec($ch);   echo json_encode($result);   curl_close($ch);   }    
     public function fc_facttecual1ok() {echo json_encode('ok');}
     public function fc_factiscual1() { $bd_verfiducia =$this->m_sincroarriba->fm_factiscual1();  $payload = json_encode($bd_verfiducia);  $url = 'https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarriba/fc_factiscual1'; $ch = curl_init($url); curl_setopt($ch, CURLOPT_POSTFIELDS, $payload); curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);  curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,  2); curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);   $result = curl_exec($ch);   echo json_encode($result);   curl_close($ch);   }    
     public function fc_factiscual1ok() {echo json_encode('ok');}
     public function fc_factifcual1() { $bd_verfiducia =$this->m_sincroarriba->fm_factifcual1();  $payload = json_encode($bd_verfiducia);  $url = 'https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarriba/fc_factifcual1'; $ch = curl_init($url); curl_setopt($ch, CURLOPT_POSTFIELDS, $payload); curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);  curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,  2); curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);   $result = curl_exec($ch);   echo json_encode($result);   curl_close($ch);   }    
     public function fc_factifcual1ok() {echo json_encode('ok');}
     public function fc_factiecual1() { $bd_verfiducia =$this->m_sincroarriba->fm_factiecual1();  $payload = json_encode($bd_verfiducia);  $url = 'https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarriba/fc_factiecual1'; $ch = curl_init($url); curl_setopt($ch, CURLOPT_POSTFIELDS, $payload); curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);  curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,  2); curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);   $result = curl_exec($ch);   echo json_encode($result);   curl_close($ch);   }    
     public function fc_factiecual1ok() {echo json_encode('ok');}
     public function fc_estacioncerocea() { $bd_verfiducia =$this->m_sincroarriba->fm_estacioncerocea();  $payload = json_encode($bd_verfiducia);  $url = 'https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarriba/fc_estacioncerocea'; $ch = curl_init($url); curl_setopt($ch, CURLOPT_POSTFIELDS, $payload); curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);  curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,  2); curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);   $result = curl_exec($ch);   echo json_encode($result);   curl_close($ch);   }    
     public function fc_estacionceroceaok() {echo json_encode('ok');}
     public function fc_crisisscual1() { $bd_verfiducia =$this->m_sincroarriba->fm_crisisscual1();  $payload = json_encode($bd_verfiducia);  $url = 'https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarriba/fc_crisisscual1'; $ch = curl_init($url); curl_setopt($ch, CURLOPT_POSTFIELDS, $payload); curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);  curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,  2); curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);   $result = curl_exec($ch);   echo json_encode($result);   curl_close($ch);   }    
     public function fc_crisisscual1ok() {echo json_encode('ok');}
     public function fc_crisisfcual1() { $bd_verfiducia =$this->m_sincroarriba->fm_crisisfcual1();  $payload = json_encode($bd_verfiducia);  $url = 'https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarriba/fc_crisisfcual1'; $ch = curl_init($url); curl_setopt($ch, CURLOPT_POSTFIELDS, $payload); curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);  curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,  2); curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);   $result = curl_exec($ch);   echo json_encode($result);   curl_close($ch);   }    
     public function fc_crisisfcual1ok() {echo json_encode('ok');}
     public function fc_crisisecual1() { $bd_verfiducia =$this->m_sincroarriba->fm_crisisecual1();  $payload = json_encode($bd_verfiducia);  $url = 'https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarriba/fc_crisisecual1'; $ch = curl_init($url); curl_setopt($ch, CURLOPT_POSTFIELDS, $payload); curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);  curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,  2); curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);   $result = curl_exec($ch);   echo json_encode($result);   curl_close($ch);   }    
     public function fc_crisisecual1ok() {echo json_encode('ok');}
     public function fc_crearmetas() { $bd_verfiducia =$this->m_sincroarriba->fm_crearmetas();  $payload = json_encode($bd_verfiducia);  $url = 'https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarriba/fc_crearmetas'; $ch = curl_init($url); curl_setopt($ch, CURLOPT_POSTFIELDS, $payload); curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);  curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,  2); curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);   $result = curl_exec($ch);   echo json_encode($result);   curl_close($ch);   }    
     public function fc_crearmetasok() {echo json_encode('ok');}
     public function fc_correspautonomia() { $bd_verfiducia =$this->m_sincroarriba->fm_correspautonomia();  $payload = json_encode($bd_verfiducia);  $url = 'https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarriba/fc_correspautonomia'; $ch = curl_init($url); curl_setopt($ch, CURLOPT_POSTFIELDS, $payload); curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);  curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,  2); curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);   $result = curl_exec($ch);   echo json_encode($result);   curl_close($ch);   }    
     public function fc_correspautonomiaok() {echo json_encode('ok');}
     public function fc_eerf() { $bd_verfiducia =$this->m_sincroarriba->fm_eerf();  $payload = json_encode($bd_verfiducia);  $url = 'https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarriba/fc_eerf'; $ch = curl_init($url); curl_setopt($ch, CURLOPT_POSTFIELDS, $payload); curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);  curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,  2); curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);   $result = curl_exec($ch);   echo json_encode($result);   curl_close($ch);   }    
     public function fc_eerfok() { $bd_verfiducia =$this->m_sincroarriba->fm_eerfok();  $payload = json_encode($bd_verfiducia);  $url = 'https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarriba/fc_eerfok'; $ch = curl_init($url); curl_setopt($ch, CURLOPT_POSTFIELDS, $payload); curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);  curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,  2); curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);   $result = curl_exec($ch);   echo json_encode($result);   curl_close($ch);  }
     public function fc_avanceproceso() { $bd_verfiducia =$this->m_sincroarriba->fm_avanceproceso();  $payload = json_encode($bd_verfiducia);  $url = 'https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarriba/fc_avanceproceso'; $ch = curl_init($url); curl_setopt($ch, CURLOPT_POSTFIELDS, $payload); curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);  curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,  2); curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);   $result = curl_exec($ch);   echo json_encode($result);   curl_close($ch);   }    
     public function fc_avanceprocesook() {$resultado = $this->m_sincroarriba->fm_avanceprocesook();}

     public function fc_l2metas() {
         
        $resultado = $this->m_sincroarriba->fm_l2metas();
       
     }
     public function fc_l2acciones() {
         
        $resultado = $this->m_sincroarriba->fm_l2acciones();
       
     }
     public function fc_casoexitoso() {
         
        $resultado = $this->m_sincroarriba->fm_casoexitoso();
       
     }


     public function fc_correspautonomiahistorico() { $bd_verfiducia =$this->m_sincroarriba->fm_correspautonomiahistorico();  $payload = json_encode($bd_verfiducia);  $url = 'https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarriba/fc_correspautonomiahistorico'; $ch = curl_init($url); curl_setopt($ch, CURLOPT_POSTFIELDS, $payload); curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);  curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,  2); curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);   $result = curl_exec($ch);   echo json_encode($result);   curl_close($ch);   }    
     public function fc_correspautonomiahistoricook() {$resultado = $this->m_sincroarriba->fm_correspautonomiahistoricook();}


     
     
     /////////////////////Fin Sincronizacion Estacion Cero//////////////////

     public function fc_logromovimientocf() { $bd_verfiducia =$this->m_sincroarriba->fm_logromovimientocf();  $payload = json_encode($bd_verfiducia);  $url = 'https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarriba/fc_logromovimientocf'; $ch = curl_init($url); curl_setopt($ch, CURLOPT_POSTFIELDS, $payload); curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);  curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,  2); curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);   $result = curl_exec($ch);   echo json_encode($result);   curl_close($ch);   }    
     public function fc_logromovimientocfok() {$resultado = $this->m_sincroarriba->fm_logromovimientocfok();}

     public function fc_protocoloinicioestacion() { $bd_verfiducia =$this->m_sincroarriba->fm_protocoloinicioestacion();  $payload = json_encode($bd_verfiducia);  $url = 'https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarriba/fc_protocoloinicioestacion'; $ch = curl_init($url); curl_setopt($ch, CURLOPT_POSTFIELDS, $payload); curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);  curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,  2); curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);   $result = curl_exec($ch);   echo json_encode($result);   curl_close($ch);   }    
     public function fc_protocoloinicioestacionok() {$resultado = $this->m_sincroarriba->fm_protocoloinicioestacionok();}
     public function fc_condicionnecesaria() { $bd_verfiducia =$this->m_sincroarriba->fm_condicionnecesaria();  $payload = json_encode($bd_verfiducia);  $url = 'https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarriba/fc_condicionnecesaria'; $ch = curl_init($url); curl_setopt($ch, CURLOPT_POSTFIELDS, $payload); curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);  curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,  2); curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);   $result = curl_exec($ch);   echo json_encode($result);   curl_close($ch);   }    
     public function fc_condicionnecesariaok() {$resultado = $this->m_sincroarriba->fm_condicionnecesariaok();}
     public function fc_tablaingresos() { $bd_verfiducia =$this->m_sincroarriba->fm_tablaingresos();  $payload = json_encode($bd_verfiducia);  $url = 'https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarriba/fc_tablaingresos'; $ch = curl_init($url); curl_setopt($ch, CURLOPT_POSTFIELDS, $payload); curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);  curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,  2); curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);   $result = curl_exec($ch);   echo json_encode($result);   curl_close($ch);   }    
     public function fc_tablaingresosok() {$resultado = $this->m_sincroarriba->fm_tablaingresosok();}



     public function fc_tablaingresosd() {
         
        $resultado = $this->m_sincroarriba->fm_tablaingresosd();
       
     }
//   
     public function fc_privacionesintermedia1() {$bd_verfiducia =$this->m_sincroarriba->fm_privacionesintermedia1();$payload = json_encode($bd_verfiducia);$url = 'https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarriba/fc_privacionesintermedia1';$ch = curl_init($url);curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,  2);curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);$result = curl_exec($ch);echo json_encode($result);curl_close($ch);}
     public function fc_privacionesintermedia1ok() {$this->m_sincroarriba->fm_privacionesintermedia1ok();}
     public function fc_privacionesintermedia2() {$bd_verfiducia =$this->m_sincroarriba->fm_privacionesintermedia2();$payload = json_encode($bd_verfiducia);$url = 'https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarriba/fc_privacionesintermedia2';$ch = curl_init($url);curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,  2);curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);$result = curl_exec($ch);echo json_encode($result);curl_close($ch);}
     public function fc_privacionesintermedia2ok() {$this->m_sincroarriba->fm_privacionesintermedia2ok();}
     public function fc_privacionesintermedia3() {$bd_verfiducia =$this->m_sincroarriba->fm_privacionesintermedia3();$payload = json_encode($bd_verfiducia);$url = 'https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarriba/fc_privacionesintermedia3';$ch = curl_init($url);curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,  2);curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);$result = curl_exec($ch);echo json_encode($result);curl_close($ch);}
     public function fc_privacionesintermedia3ok() {$this->m_sincroarriba->fm_privacionesintermedia3ok();}
     public function fc_privacionesintermedia4() {$bd_verfiducia =$this->m_sincroarriba->fm_privacionesintermedia4();$payload = json_encode($bd_verfiducia);$url = 'https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarriba/fc_privacionesintermedia4';$ch = curl_init($url);curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,  2);curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);$result = curl_exec($ch);echo json_encode($result);curl_close($ch);}
     public function fc_privacionesintermedia4ok() {$this->m_sincroarriba->fm_privacionesintermedia4ok();}
     public function fc_privacionesintermedia5() {$bd_verfiducia =$this->m_sincroarriba->fm_privacionesintermedia5();$payload = json_encode($bd_verfiducia);$url = 'https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarriba/fc_privacionesintermedia5';$ch = curl_init($url);curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,  2);curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);$result = curl_exec($ch);echo json_encode($result);curl_close($ch);}
     public function fc_privacionesintermedia5ok() {$this->m_sincroarriba->fm_privacionesintermedia5ok();}
     public function fc_privacionesintermedia6() {$bd_verfiducia =$this->m_sincroarriba->fm_privacionesintermedia6();$payload = json_encode($bd_verfiducia);$url = 'https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarriba/fc_privacionesintermedia6';$ch = curl_init($url);curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,  2);curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);$result = curl_exec($ch);echo json_encode($result);curl_close($ch);}
     public function fc_privacionesintermedia6ok() {$this->m_sincroarriba->fm_privacionesintermedia6ok();}
     public function fc_privacionesintermedia7() {$bd_verfiducia =$this->m_sincroarriba->fm_privacionesintermedia7();$payload = json_encode($bd_verfiducia);$url = 'https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarriba/fc_privacionesintermedia7';$ch = curl_init($url);curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,  2);curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);$result = curl_exec($ch);echo json_encode($result);curl_close($ch);}
     public function fc_privacionesintermedia7ok() {$this->m_sincroarriba->fm_privacionesintermedia7ok();}
     public function fc_privacionesintermedia8() {$bd_verfiducia =$this->m_sincroarriba->fm_privacionesintermedia8();$payload = json_encode($bd_verfiducia);$url = 'https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarriba/fc_privacionesintermedia8';$ch = curl_init($url);curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,  2);curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);$result = curl_exec($ch);echo json_encode($result);curl_close($ch);}
     public function fc_privacionesintermedia8ok() {$this->m_sincroarriba->fm_privacionesintermedia8ok();}
     public function fc_privacionesintermedia9() {$bd_verfiducia =$this->m_sincroarriba->fm_privacionesintermedia9();$payload = json_encode($bd_verfiducia);$url = 'https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarriba/fc_privacionesintermedia9';$ch = curl_init($url);curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,  2);curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);$result = curl_exec($ch);echo json_encode($result);curl_close($ch);}
     public function fc_privacionesintermedia9ok() {$this->m_sincroarriba->fm_privacionesintermedia9ok();}
     public function fc_privacionesintermedia10() {$bd_verfiducia =$this->m_sincroarriba->fm_privacionesintermedia10();$payload = json_encode($bd_verfiducia);$url = 'https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarriba/fc_privacionesintermedia10';$ch = curl_init($url);curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,  2);curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);$result = curl_exec($ch);echo json_encode($result);curl_close($ch);}
     public function fc_privacionesintermedia10ok() {$this->m_sincroarriba->fm_privacionesintermedia10ok();}
     public function fc_privacionesintermedia11() {$bd_verfiducia =$this->m_sincroarriba->fm_privacionesintermedia11();$payload = json_encode($bd_verfiducia);$url = 'https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarriba/fc_privacionesintermedia11';$ch = curl_init($url);curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,  2);curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);$result = curl_exec($ch);echo json_encode($result);curl_close($ch);}
     public function fc_privacionesintermedia11ok() {$this->m_sincroarriba->fm_privacionesintermedia11ok();}
     public function fc_privacionesintermedia12() {$bd_verfiducia =$this->m_sincroarriba->fm_privacionesintermedia12();$payload = json_encode($bd_verfiducia);$url = 'https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarriba/fc_privacionesintermedia12';$ch = curl_init($url);curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,  2);curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);$result = curl_exec($ch);echo json_encode($result);curl_close($ch);}
     public function fc_privacionesintermedia12ok() {$this->m_sincroarriba->fm_privacionesintermedia12ok();}
     public function fc_privacionesintermedia13() {$bd_verfiducia =$this->m_sincroarriba->fm_privacionesintermedia13();$payload = json_encode($bd_verfiducia);$url = 'https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarriba/fc_privacionesintermedia13';$ch = curl_init($url);curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,  2);curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);$result = curl_exec($ch);echo json_encode($result);curl_close($ch);}
     public function fc_privacionesintermedia13ok() {$this->m_sincroarriba->fm_privacionesintermedia13ok();}
     public function fc_privacionesintermedia14() {$bd_verfiducia =$this->m_sincroarriba->fm_privacionesintermedia14();$payload = json_encode($bd_verfiducia);$url = 'https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarriba/fc_privacionesintermedia14';$ch = curl_init($url);curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,  2);curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);$result = curl_exec($ch);echo json_encode($result);curl_close($ch);}
     public function fc_privacionesintermedia14ok() {$this->m_sincroarriba->fm_privacionesintermedia14ok();}
     public function fc_privacionesintermedia15() {$bd_verfiducia =$this->m_sincroarriba->fm_privacionesintermedia15();$payload = json_encode($bd_verfiducia);$url = 'https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarriba/fc_privacionesintermedia15';$ch = curl_init($url);curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,  2);curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);$result = curl_exec($ch);echo json_encode($result);curl_close($ch);}
     public function fc_privacionesintermedia15ok() {$this->m_sincroarriba->fm_privacionesintermedia15ok();}
     public function fc_privacionesintermedia16() {$bd_verfiducia =$this->m_sincroarriba->fm_privacionesintermedia16();$payload = json_encode($bd_verfiducia);$url = 'https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarriba/fc_privacionesintermedia16';$ch = curl_init($url);curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,  2);curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);$result = curl_exec($ch);echo json_encode($result);curl_close($ch);}
     public function fc_privacionesintermedia16ok() {$this->m_sincroarriba->fm_privacionesintermedia16ok();}


     public function fc_privacionesintermediaipm() { $bd_verfiducia =$this->m_sincroarriba->fm_privacionesintermediaipm();  $payload = json_encode($bd_verfiducia);  $url = 'https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarriba/fc_privacionesintermediaipm'; $ch = curl_init($url); curl_setopt($ch, CURLOPT_POSTFIELDS, $payload); curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);  curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,  2); curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);   $result = curl_exec($ch);   echo json_encode($result);   curl_close($ch);   }    
     public function fc_privacionesintermediaipmok() {$resultado = $this->m_sincroarriba->fm_privacionesintermediaipmok();}

     public function fc_porcentajelogrosaplican() { $bd_verfiducia =$this->m_sincroarriba->fm_porcentajelogrosaplican();  $payload = json_encode($bd_verfiducia);  $url = 'https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarriba/fc_porcentajelogrosaplican'; $ch = curl_init($url); curl_setopt($ch, CURLOPT_POSTFIELDS, $payload); curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);  curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,  2); curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);   $result = curl_exec($ch);   echo json_encode($result);   curl_close($ch);   }    
     public function fc_porcentajelogrosaplicanok() {$resultado = $this->m_sincroarriba->fm_porcentajelogrosaplicanok();}

     public function fc_totalporcentajelogros() { $bd_verfiducia =$this->m_sincroarriba->fm_totalporcentajelogros();  $payload = json_encode($bd_verfiducia);  $url = 'https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarriba/fc_totalporcentajelogros'; $ch = curl_init($url); curl_setopt($ch, CURLOPT_POSTFIELDS, $payload); curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);  curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,  2); curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);   $result = curl_exec($ch);   echo json_encode($result);   curl_close($ch);   }    
     public function fc_totalporcentajelogrosok() {$resultado = $this->m_sincroarriba->fm_totalporcentajelogrosok();}


     //////////////////////////////////////////////////////////////////////////

     public function fc_privacionesintermediad1() 
     {
     $resultado = $this->m_sincroarriba->fm_privacionesintermediad1();
     }
     public function fc_privacionesintermediad2() 
     {
     $resultado = $this->m_sincroarriba->fm_privacionesintermediad2();
     }
     public function fc_privacionesintermediad3() 
     {
     $resultado = $this->m_sincroarriba->fm_privacionesintermediad3();
     }
     public function fc_privacionesintermediad4() 
     {
     $resultado = $this->m_sincroarriba->fm_privacionesintermediad4();
     }
     public function fc_privacionesintermediad5() 
     {
     $resultado = $this->m_sincroarriba->fm_privacionesintermediad5();
     }
     public function fc_privacionesintermediad6() 
     {
     $resultado = $this->m_sincroarriba->fm_privacionesintermediad6();
     }
     public function fc_privacionesintermediad7() 
     {
     $resultado = $this->m_sincroarriba->fm_privacionesintermediad7();
     }
     public function fc_privacionesintermediad8() 
     {
     $resultado = $this->m_sincroarriba->fm_privacionesintermediad8();
     }
     public function fc_privacionesintermediad9() 
     {
     $resultado = $this->m_sincroarriba->fm_privacionesintermediad9();
     }
     public function fc_privacionesintermediad10() 
     {
     $resultado = $this->m_sincroarriba->fm_privacionesintermediad10();
     }
     public function fc_privacionesintermediad11() 
     {
     $resultado = $this->m_sincroarriba->fm_privacionesintermediad11();
     }
     public function fc_privacionesintermediad12() 
     {
     $resultado = $this->m_sincroarriba->fm_privacionesintermediad12();
     }
     public function fc_privacionesintermediad13() 
     {
     $resultado = $this->m_sincroarriba->fm_privacionesintermediad13();
     }
     public function fc_privacionesintermediad14() 
     {
     $resultado = $this->m_sincroarriba->fm_privacionesintermediad14();
     }
     public function fc_privacionesintermediad15() 
     {
     $resultado = $this->m_sincroarriba->fm_privacionesintermediad15();
     }
     public function fc_privacionesintermediad16() 
     {
     $resultado = $this->m_sincroarriba->fm_privacionesintermediad16();
     }
     public function fc_ipmservidordintermediasub() 
     {
     $resultado = $this->m_sincroarriba->fm_ipmservidordintermediasub();
     }
     
     
public function fc_tablasintermediasubidac2() {$bd_verfiducia =$this->m_sincroarriba->fm_tablasintermediasubidac2();$payload = json_encode($bd_verfiducia);$url = 'https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarriba/fc_tablasintermediasubidac2';$ch = curl_init($url);curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,  2);curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);$result = curl_exec($ch);echo json_encode($result);curl_close($ch);}
public function fc_tablasintermediasubidac2ok() {$this->m_sincroarriba->fm_tablasintermediasubidac2ok();}
public function fc_tablasintermediasubidac5() {$bd_verfiducia =$this->m_sincroarriba->fm_tablasintermediasubidac5();$payload = json_encode($bd_verfiducia);$url = 'https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarriba/fc_tablasintermediasubidac5';$ch = curl_init($url);curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,  2);curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);$result = curl_exec($ch);echo json_encode($result);curl_close($ch);}
public function fc_tablasintermediasubidac5ok() {$this->m_sincroarriba->fm_tablasintermediasubidac5ok();}
public function fc_tablasintermediasubidac6() {$bd_verfiducia =$this->m_sincroarriba->fm_tablasintermediasubidac6();$payload = json_encode($bd_verfiducia);$url = 'https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarriba/fc_tablasintermediasubidac6';$ch = curl_init($url);curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,  2);curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);$result = curl_exec($ch);echo json_encode($result);curl_close($ch);}
public function fc_tablasintermediasubidac6ok() {$this->m_sincroarriba->fm_tablasintermediasubidac6ok();}
public function fc_tablasintermediasubidac7() {$bd_verfiducia =$this->m_sincroarriba->fm_tablasintermediasubidac7();$payload = json_encode($bd_verfiducia);$url = 'https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarriba/fc_tablasintermediasubidac7';$ch = curl_init($url);curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,  2);curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);$result = curl_exec($ch);echo json_encode($result);curl_close($ch);}
public function fc_tablasintermediasubidac7ok() {$this->m_sincroarriba->fm_tablasintermediasubidac7ok();}
public function fc_tablasintermediasubidac8() {$bd_verfiducia =$this->m_sincroarriba->fm_tablasintermediasubidac8();$payload = json_encode($bd_verfiducia);$url = 'https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarriba/fc_tablasintermediasubidac8';$ch = curl_init($url);curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,  2);curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);$result = curl_exec($ch);echo json_encode($result);curl_close($ch);}
public function fc_tablasintermediasubidac8ok() {$this->m_sincroarriba->fm_tablasintermediasubidac8ok();}
public function fc_tablasintermediasubidac9() {$bd_verfiducia =$this->m_sincroarriba->fm_tablasintermediasubidac9();$payload = json_encode($bd_verfiducia);$url = 'https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarriba/fc_tablasintermediasubidac9';$ch = curl_init($url);curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,  2);curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);$result = curl_exec($ch);echo json_encode($result);curl_close($ch);}
public function fc_tablasintermediasubidac9ok() {$this->m_sincroarriba->fm_tablasintermediasubidac9ok();}
public function fc_tablasintermediasubidac11() {$bd_verfiducia =$this->m_sincroarriba->fm_tablasintermediasubidac11();$payload = json_encode($bd_verfiducia);$url = 'https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarriba/fc_tablasintermediasubidac11';$ch = curl_init($url);curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,  2);curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);$result = curl_exec($ch);echo json_encode($result);curl_close($ch);}
public function fc_tablasintermediasubidac11ok() {$this->m_sincroarriba->fm_tablasintermediasubidac11ok();}

public function fc_tablasintermediasubidainteg() {$bd_verfiducia =$this->m_sincroarriba->fm_tablasintermediasubidainteg();$payload = json_encode($bd_verfiducia);$url = 'https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarriba/fc_tablasintermediasubidainteg';$ch = curl_init($url);curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,  2);curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);$result = curl_exec($ch);echo json_encode($result);curl_close($ch);}
public function fc_tablasintermediasubidaintegok() {$this->m_sincroarriba->fm_tablasintermediasubidaintegok();}



  

     public function fc_sincronizacionusuariosincronizado() {$bd_verfiducia =$this->m_sincroarriba->fm_sincronizacionusuariosincronizado();$payload = json_encode($bd_verfiducia);$url = 'https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarriba/fc_sincronizacionusuariosincronizado';$ch = curl_init($url);curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,  2);curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);$result = curl_exec($ch);echo json_encode($result);curl_close($ch);}



     /////////////////////////////////////////////////////////////////////////

     public function fc_sincronizarsubidaintermediahistc11() {$bd_verfiducia =$this->m_sincroarriba->fm_sincronizarsubidaintermediahistc11();$payload = json_encode($bd_verfiducia);$url = 'https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarriba/fc_sincronizarsubidaintermediahistc11';$ch = curl_init($url);curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,  2);curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);$result = curl_exec($ch);echo json_encode($result);curl_close($ch);}
     public function fc_sincronizarsubidaintermediahistc11ok() {$this->m_sincroarriba->fm_sincronizarsubidaintermediahistc11ok();}
     public function fc_sincronizarsubidaintermediahistc2() {$bd_verfiducia =$this->m_sincroarriba->fm_sincronizarsubidaintermediahistc2();$payload = json_encode($bd_verfiducia);$url = 'https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarriba/fc_sincronizarsubidaintermediahistc2';$ch = curl_init($url);curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,  2);curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);$result = curl_exec($ch);echo json_encode($result);curl_close($ch);}
     public function fc_sincronizarsubidaintermediahistc2ok() {$this->m_sincroarriba->fm_sincronizarsubidaintermediahistc2ok();}
     public function fc_sincronizarsubidaintermediahistc5() {$bd_verfiducia =$this->m_sincroarriba->fm_sincronizarsubidaintermediahistc5();$payload = json_encode($bd_verfiducia);$url = 'https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarriba/fc_sincronizarsubidaintermediahistc5';$ch = curl_init($url);curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,  2);curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);$result = curl_exec($ch);echo json_encode($result);curl_close($ch);}
     public function fc_sincronizarsubidaintermediahistc5ok() {$this->m_sincroarriba->fm_sincronizarsubidaintermediahistc5ok();}
     public function fc_sincronizarsubidaintermediahistc6() {$bd_verfiducia =$this->m_sincroarriba->fm_sincronizarsubidaintermediahistc6();$payload = json_encode($bd_verfiducia);$url = 'https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarriba/fc_sincronizarsubidaintermediahistc6';$ch = curl_init($url);curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,  2);curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);$result = curl_exec($ch);echo json_encode($result);curl_close($ch);}
     public function fc_sincronizarsubidaintermediahistc6ok() {$this->m_sincroarriba->fm_sincronizarsubidaintermediahistc6ok();}
     public function fc_sincronizarsubidaintermediahistc7() {$bd_verfiducia =$this->m_sincroarriba->fm_sincronizarsubidaintermediahistc7();$payload = json_encode($bd_verfiducia);$url = 'https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarriba/fc_sincronizarsubidaintermediahistc7';$ch = curl_init($url);curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,  2);curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);$result = curl_exec($ch);echo json_encode($result);curl_close($ch);}
     public function fc_sincronizarsubidaintermediahistc7ok() {$this->m_sincroarriba->fm_sincronizarsubidaintermediahistc7ok();}
     public function fc_sincronizarsubidaintermediahistc8() {$bd_verfiducia =$this->m_sincroarriba->fm_sincronizarsubidaintermediahistc8();$payload = json_encode($bd_verfiducia);$url = 'https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarriba/fc_sincronizarsubidaintermediahistc8';$ch = curl_init($url);curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,  2);curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);$result = curl_exec($ch);echo json_encode($result);curl_close($ch);}
     public function fc_sincronizarsubidaintermediahistc8ok() {$this->m_sincroarriba->fm_sincronizarsubidaintermediahistc8ok();}
     public function fc_sincronizarsubidaintermediahistc9() {$bd_verfiducia =$this->m_sincroarriba->fm_sincronizarsubidaintermediahistc9();$payload = json_encode($bd_verfiducia);$url = 'https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarriba/fc_sincronizarsubidaintermediahistc9';$ch = curl_init($url);curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,  2);curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);$result = curl_exec($ch);echo json_encode($result);curl_close($ch);}
     public function fc_sincronizarsubidaintermediahistc9ok() {$this->m_sincroarriba->fm_sincronizarsubidaintermediahistc9ok();}




   public function fc_sincronizacionintegrantesintermedia_historicosub() {$bd_verfiducia =$this->m_sincroarriba->fm_sincronizacionintegrantesintermedia_historicosub();$payload = json_encode($bd_verfiducia);$url = 'https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarriba/fc_sincronizacionintegrantesintermedia_historicosub';$ch = curl_init($url);curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,  2);curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);$result = curl_exec($ch);echo json_encode($result);curl_close($ch);}
   public function fc_sincronizacionintegrantesintermedia_historicosubok() {$this->m_sincroarriba->fm_sincronizacionintegrantesintermedia_historicosubok();}



    


     public function fc_sp5privacion16intermediaservidor_historico() {$bd_verfiducia =$this->m_sincroarriba->fm_sp5privacion16intermediaservidor_historico();$payload = json_encode($bd_verfiducia);$url = 'https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarriba/fc_sp5privacion16intermediaservidor_historico';$ch = curl_init($url);curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,  2);curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);$result = curl_exec($ch);echo json_encode($result);curl_close($ch);}
     public function fc_sp5privacion16intermediaservidor_historicook() {$this->m_sincroarriba->fm_sp5privacion16intermediaservidor_historicook();}
     public function fc_sp5privacion15intermediaservidor_historico() {$bd_verfiducia =$this->m_sincroarriba->fm_sp5privacion15intermediaservidor_historico();$payload = json_encode($bd_verfiducia);$url = 'https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarriba/fc_sp5privacion15intermediaservidor_historico';$ch = curl_init($url);curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,  2);curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);$result = curl_exec($ch);echo json_encode($result);curl_close($ch);}
     public function fc_sp5privacion15intermediaservidor_historicook() {$this->m_sincroarriba->fm_sp5privacion15intermediaservidor_historicook();}
     public function fc_sp5privacion14intermediaservidor_historico() {$bd_verfiducia =$this->m_sincroarriba->fm_sp5privacion14intermediaservidor_historico();$payload = json_encode($bd_verfiducia);$url = 'https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarriba/fc_sp5privacion14intermediaservidor_historico';$ch = curl_init($url);curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,  2);curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);$result = curl_exec($ch);echo json_encode($result);curl_close($ch);}
     public function fc_sp5privacion14intermediaservidor_historicook() {$this->m_sincroarriba->fm_sp5privacion14intermediaservidor_historicook();}
     public function fc_sp5privacion13intermediaservidor_historico() {$bd_verfiducia =$this->m_sincroarriba->fm_sp5privacion13intermediaservidor_historico();$payload = json_encode($bd_verfiducia);$url = 'https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarriba/fc_sp5privacion13intermediaservidor_historico';$ch = curl_init($url);curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,  2);curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);$result = curl_exec($ch);echo json_encode($result);curl_close($ch);}
     public function fc_sp5privacion13intermediaservidor_historicook() {$this->m_sincroarriba->fm_sp5privacion13intermediaservidor_historicook();}
     public function fc_sp5privacion12intermediaservidor_historico() {$bd_verfiducia =$this->m_sincroarriba->fm_sp5privacion12intermediaservidor_historico();$payload = json_encode($bd_verfiducia);$url = 'https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarriba/fc_sp5privacion12intermediaservidor_historico';$ch = curl_init($url);curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,  2);curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);$result = curl_exec($ch);echo json_encode($result);curl_close($ch);}
     public function fc_sp5privacion12intermediaservidor_historicook() {$this->m_sincroarriba->fm_sp5privacion12intermediaservidor_historicook();}
     public function fc_sp5privacion11intermediaservidor_historico() {$bd_verfiducia =$this->m_sincroarriba->fm_sp5privacion11intermediaservidor_historico();$payload = json_encode($bd_verfiducia);$url = 'https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarriba/fc_sp5privacion11intermediaservidor_historico';$ch = curl_init($url);curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,  2);curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);$result = curl_exec($ch);echo json_encode($result);curl_close($ch);}
     public function fc_sp5privacion11intermediaservidor_historicook() {$this->m_sincroarriba->fm_sp5privacion11intermediaservidor_historicook();}
     public function fc_sp5privacion10intermediaservidor_historico() {$bd_verfiducia =$this->m_sincroarriba->fm_sp5privacion10intermediaservidor_historico();$payload = json_encode($bd_verfiducia);$url = 'https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarriba/fc_sp5privacion10intermediaservidor_historico';$ch = curl_init($url);curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,  2);curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);$result = curl_exec($ch);echo json_encode($result);curl_close($ch);}
     public function fc_sp5privacion10intermediaservidor_historicook() {$this->m_sincroarriba->fm_sp5privacion10intermediaservidor_historicook();}
     public function fc_sp5privacion9intermediaservidor_historico() {$bd_verfiducia =$this->m_sincroarriba->fm_sp5privacion9intermediaservidor_historico();$payload = json_encode($bd_verfiducia);$url = 'https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarriba/fc_sp5privacion9intermediaservidor_historico';$ch = curl_init($url);curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,  2);curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);$result = curl_exec($ch);echo json_encode($result);curl_close($ch);}
     public function fc_sp5privacion9intermediaservidor_historicook() {$this->m_sincroarriba->fm_sp5privacion9intermediaservidor_historicook();}
     public function fc_sp5privacion8intermediaservidor_historico() {$bd_verfiducia =$this->m_sincroarriba->fm_sp5privacion8intermediaservidor_historico();$payload = json_encode($bd_verfiducia);$url = 'https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarriba/fc_sp5privacion8intermediaservidor_historico';$ch = curl_init($url);curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,  2);curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);$result = curl_exec($ch);echo json_encode($result);curl_close($ch);}
     public function fc_sp5privacion8intermediaservidor_historicook() {$this->m_sincroarriba->fm_sp5privacion8intermediaservidor_historicook();}
     public function fc_sp5privacion7intermediaservidor_historico() {$bd_verfiducia =$this->m_sincroarriba->fm_sp5privacion7intermediaservidor_historico();$payload = json_encode($bd_verfiducia);$url = 'https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarriba/fc_sp5privacion7intermediaservidor_historico';$ch = curl_init($url);curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,  2);curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);$result = curl_exec($ch);echo json_encode($result);curl_close($ch);}
     public function fc_sp5privacion7intermediaservidor_historicook() {$this->m_sincroarriba->fm_sp5privacion7intermediaservidor_historicook();}
     public function fc_sp5privacion6intermediaservidor_historico() {$bd_verfiducia =$this->m_sincroarriba->fm_sp5privacion6intermediaservidor_historico();$payload = json_encode($bd_verfiducia);$url = 'https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarriba/fc_sp5privacion6intermediaservidor_historico';$ch = curl_init($url);curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,  2);curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);$result = curl_exec($ch);echo json_encode($result);curl_close($ch);}
     public function fc_sp5privacion6intermediaservidor_historicook() {$this->m_sincroarriba->fm_sp5privacion6intermediaservidor_historicook();}
     public function fc_sp5privacion5intermediaservidor_historico() {$bd_verfiducia =$this->m_sincroarriba->fm_sp5privacion5intermediaservidor_historico();$payload = json_encode($bd_verfiducia);$url = 'https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarriba/fc_sp5privacion5intermediaservidor_historico';$ch = curl_init($url);curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,  2);curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);$result = curl_exec($ch);echo json_encode($result);curl_close($ch);}
     public function fc_sp5privacion5intermediaservidor_historicook() {$this->m_sincroarriba->fm_sp5privacion5intermediaservidor_historicook();}
     public function fc_sp5privacion4intermediaservidor_historico() {$bd_verfiducia =$this->m_sincroarriba->fm_sp5privacion4intermediaservidor_historico();$payload = json_encode($bd_verfiducia);$url = 'https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarriba/fc_sp5privacion4intermediaservidor_historico';$ch = curl_init($url);curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,  2);curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);$result = curl_exec($ch);echo json_encode($result);curl_close($ch);}
     public function fc_sp5privacion4intermediaservidor_historicook() {$this->m_sincroarriba->fm_sp5privacion4intermediaservidor_historicook();}
     public function fc_sp5privacion3intermediaservidor_historico() {$bd_verfiducia =$this->m_sincroarriba->fm_sp5privacion3intermediaservidor_historico();$payload = json_encode($bd_verfiducia);$url = 'https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarriba/fc_sp5privacion3intermediaservidor_historico';$ch = curl_init($url);curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,  2);curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);$result = curl_exec($ch);echo json_encode($result);curl_close($ch);}
     public function fc_sp5privacion3intermediaservidor_historicook() {$this->m_sincroarriba->fm_sp5privacion3intermediaservidor_historicook();}
     public function fc_sp5privacion2intermediaservidor_historico() {$bd_verfiducia =$this->m_sincroarriba->fm_sp5privacion2intermediaservidor_historico();$payload = json_encode($bd_verfiducia);$url = 'https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarriba/fc_sp5privacion2intermediaservidor_historico';$ch = curl_init($url);curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,  2);curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);$result = curl_exec($ch);echo json_encode($result);curl_close($ch);}
     public function fc_sp5privacion2intermediaservidor_historicook() {$this->m_sincroarriba->fm_sp5privacion2intermediaservidor_historicook();}
     public function fc_sp5privacion1intermediaservidor_historico() {$bd_verfiducia =$this->m_sincroarriba->fm_sp5privacion1intermediaservidor_historico();$payload = json_encode($bd_verfiducia);$url = 'https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarriba/fc_sp5privacion1intermediaservidor_historico';$ch = curl_init($url);curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,  2);curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);$result = curl_exec($ch);echo json_encode($result);curl_close($ch);}
     public function fc_sp5privacion1intermediaservidor_historicook() {$this->m_sincroarriba->fm_sp5privacion1intermediaservidor_historicook();}



   public function fc_sp5ipmintermediaservidor_historico() {$bd_verfiducia =$this->m_sincroarriba->fm_sp5ipmintermediaservidor_historico();$payload = json_encode($bd_verfiducia);$url = 'https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarriba/fc_sp5ipmintermediaservidor_historico';$ch = curl_init($url);curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,  2);curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);$result = curl_exec($ch);echo json_encode($result);curl_close($ch);}
   public function fc_sp5ipmintermediaservidor_historicook() {$this->m_sincroarriba->fm_sp5ipmintermediaservidor_historicook();}





   public function fc_sincronizarprotocoloestacionestado_intermedia_historico() {$bd_verfiducia =$this->m_sincroarriba->fm_sincronizarprotocoloestacionestado_intermedia_historico();$payload = json_encode($bd_verfiducia);$url = 'https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarriba/fc_sincronizarprotocoloestacionestado_intermedia_historico';$ch = curl_init($url);curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,  2);curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);$result = curl_exec($ch);echo json_encode($result);curl_close($ch);}
   public function fc_sincronizarprotocoloestacionestado_intermedia_historicook() {$this->m_sincroarriba->fm_sincronizarprotocoloestacionestado_intermedia_historicook();}
   public function fc_sincronizarprotocolopasosestado_intermedia_historico() {$bd_verfiducia =$this->m_sincroarriba->fm_sincronizarprotocolopasosestado_intermedia_historico();$payload = json_encode($bd_verfiducia);$url = 'https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarriba/fc_sincronizarprotocolopasosestado_intermedia_historico';$ch = curl_init($url);curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,  2);curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);$result = curl_exec($ch);echo json_encode($result);curl_close($ch);}
   public function fc_sincronizarprotocolopasosestado_intermedia_historicook() {$this->m_sincroarriba->fm_sincronizarprotocolopasosestado_intermedia_historicook();}
   public function fc_encuadreservidor() {$bd_verfiducia =$this->m_sincroarriba->fm_encuadreservidor();$payload = json_encode($bd_verfiducia);$url = 'https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarriba/fc_encuadreservidor';$ch = curl_init($url);curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,  2);curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);$result = curl_exec($ch);echo json_encode($result);curl_close($ch);}
   public function fc_encuadreservidorok() {$this->m_sincroarriba->fm_encuadreservidorok();}
   public function fc_informaciongeneralvisitasservidor() {$bd_verfiducia =$this->m_sincroarriba->fm_informaciongeneralvisitasservidor();$payload = json_encode($bd_verfiducia);$url = 'https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarriba/fc_informaciongeneralvisitasservidor';$ch = curl_init($url);curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,  2);curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);$result = curl_exec($ch);echo json_encode($result);curl_close($ch);}
   public function fc_informaciongeneralvisitasservidorok() {$this->m_sincroarriba->fm_informaciongeneralvisitasservidorok();}
   public function fc_informaciongeneralvisitas_historico() {$bd_verfiducia =$this->m_sincroarriba->fm_informaciongeneralvisitas_historico();$payload = json_encode($bd_verfiducia);$url = 'https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarriba/fc_informaciongeneralvisitas_historico';$ch = curl_init($url);curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,  2);curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);$result = curl_exec($ch);echo json_encode($result);curl_close($ch);}
   public function fc_informaciongeneralvisitas_historicook() {$this->m_sincroarriba->fm_informaciongeneralvisitas_historicook();}
   public function fc_informaciongeneralvisitas_ae() {$bd_verfiducia =$this->m_sincroarriba->fm_informaciongeneralvisitas_ae();$payload = json_encode($bd_verfiducia);$url = 'https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarriba/fc_informaciongeneralvisitas_ae';$ch = curl_init($url);curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,  2);curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);$result = curl_exec($ch);echo json_encode($result);curl_close($ch);}
   public function fc_informaciongeneralvisitas_aeok() {$this->m_sincroarriba->fm_informaciongeneralvisitas_aeok();}


////////////////////Controladores Cierre/////////////////////////
   public function fc_ipmintermediaLCV1() {$bd_verfiducia =$this->m_sincroarriba->fm_ipmintermediaLCV1();$payload = json_encode($bd_verfiducia);$url = 'https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarriba/fc_ipmintermediaLCV1';$ch = curl_init($url);curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,  2);curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);$result = curl_exec($ch);echo json_encode($result);curl_close($ch);}
   public function fc_ipmintermediaLCV1ok() {$this->m_sincroarriba->fm_ipmintermediaLCV1ok();}

     public function fc_privacion16intermediaLCV1() {$bd_verfiducia =$this->m_sincroarriba->fm_privacion16intermediaLCV1();$payload = json_encode($bd_verfiducia);$url = 'https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarriba/fc_privacion16intermediaLCV1';$ch = curl_init($url);curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,  2);curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);$result = curl_exec($ch);echo json_encode($result);curl_close($ch);}
     public function fc_privacion16intermediaLCV1ok() {$this->m_sincroarriba->fm_privacion16intermediaLCV1ok();}
     public function fc_privacion15intermediaLCV1() {$bd_verfiducia =$this->m_sincroarriba->fm_privacion15intermediaLCV1();$payload = json_encode($bd_verfiducia);$url = 'https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarriba/fc_privacion15intermediaLCV1';$ch = curl_init($url);curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,  2);curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);$result = curl_exec($ch);echo json_encode($result);curl_close($ch);}
     public function fc_privacion15intermediaLCV1ok() {$this->m_sincroarriba->fm_privacion15intermediaLCV1ok();}
     public function fc_privacion14intermediaLCV1() {$bd_verfiducia =$this->m_sincroarriba->fm_privacion14intermediaLCV1();$payload = json_encode($bd_verfiducia);$url = 'https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarriba/fc_privacion14intermediaLCV1';$ch = curl_init($url);curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,  2);curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);$result = curl_exec($ch);echo json_encode($result);curl_close($ch);}
     public function fc_privacion14intermediaLCV1ok() {$this->m_sincroarriba->fm_privacion14intermediaLCV1ok();}
     public function fc_privacion13intermediaLCV1() {$bd_verfiducia =$this->m_sincroarriba->fm_privacion13intermediaLCV1();$payload = json_encode($bd_verfiducia);$url = 'https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarriba/fc_privacion13intermediaLCV1';$ch = curl_init($url);curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,  2);curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);$result = curl_exec($ch);echo json_encode($result);curl_close($ch);}
     public function fc_privacion13intermediaLCV1ok() {$this->m_sincroarriba->fm_privacion13intermediaLCV1ok();}
     public function fc_privacion12intermediaLCV1() {$bd_verfiducia =$this->m_sincroarriba->fm_privacion12intermediaLCV1();$payload = json_encode($bd_verfiducia);$url = 'https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarriba/fc_privacion12intermediaLCV1';$ch = curl_init($url);curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,  2);curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);$result = curl_exec($ch);echo json_encode($result);curl_close($ch);}
     public function fc_privacion12intermediaLCV1ok() {$this->m_sincroarriba->fm_privacion12intermediaLCV1ok();}
     public function fc_privacion11intermediaLCV1() {$bd_verfiducia =$this->m_sincroarriba->fm_privacion11intermediaLCV1();$payload = json_encode($bd_verfiducia);$url = 'https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarriba/fc_privacion11intermediaLCV1';$ch = curl_init($url);curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,  2);curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);$result = curl_exec($ch);echo json_encode($result);curl_close($ch);}
     public function fc_privacion11intermediaLCV1ok() {$this->m_sincroarriba->fm_privacion11intermediaLCV1ok();}
     public function fc_privacion10intermediaLCV1() {$bd_verfiducia =$this->m_sincroarriba->fm_privacion10intermediaLCV1();$payload = json_encode($bd_verfiducia);$url = 'https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarriba/fc_privacion10intermediaLCV1';$ch = curl_init($url);curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,  2);curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);$result = curl_exec($ch);echo json_encode($result);curl_close($ch);}
     public function fc_privacion10intermediaLCV1ok() {$this->m_sincroarriba->fm_privacion10intermediaLCV1ok();}
     public function fc_privacion9intermediaLCV1() {$bd_verfiducia =$this->m_sincroarriba->fm_privacion9intermediaLCV1();$payload = json_encode($bd_verfiducia);$url = 'https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarriba/fc_privacion9intermediaLCV1';$ch = curl_init($url);curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,  2);curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);$result = curl_exec($ch);echo json_encode($result);curl_close($ch);}
     public function fc_privacion9intermediaLCV1ok() {$this->m_sincroarriba->fm_privacion9intermediaLCV1ok();}
     public function fc_privacion8intermediaLCV1() {$bd_verfiducia =$this->m_sincroarriba->fm_privacion8intermediaLCV1();$payload = json_encode($bd_verfiducia);$url = 'https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarriba/fc_privacion8intermediaLCV1';$ch = curl_init($url);curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,  2);curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);$result = curl_exec($ch);echo json_encode($result);curl_close($ch);}
     public function fc_privacion8intermediaLCV1ok() {$this->m_sincroarriba->fm_privacion8intermediaLCV1ok();}
     public function fc_privacion7intermediaLCV1() {$bd_verfiducia =$this->m_sincroarriba->fm_privacion7intermediaLCV1();$payload = json_encode($bd_verfiducia);$url = 'https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarriba/fc_privacion7intermediaLCV1';$ch = curl_init($url);curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,  2);curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);$result = curl_exec($ch);echo json_encode($result);curl_close($ch);}
     public function fc_privacion7intermediaLCV1ok() {$this->m_sincroarriba->fm_privacion7intermediaLCV1ok();}
     public function fc_privacion6intermediaLCV1() {$bd_verfiducia =$this->m_sincroarriba->fm_privacion6intermediaLCV1();$payload = json_encode($bd_verfiducia);$url = 'https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarriba/fc_privacion6intermediaLCV1';$ch = curl_init($url);curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,  2);curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);$result = curl_exec($ch);echo json_encode($result);curl_close($ch);}
     public function fc_privacion6intermediaLCV1ok() {$this->m_sincroarriba->fm_privacion6intermediaLCV1ok();}
     public function fc_privacion5intermediaLCV1() {$bd_verfiducia =$this->m_sincroarriba->fm_privacion5intermediaLCV1();$payload = json_encode($bd_verfiducia);$url = 'https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarriba/fc_privacion5intermediaLCV1';$ch = curl_init($url);curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,  2);curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);$result = curl_exec($ch);echo json_encode($result);curl_close($ch);}
     public function fc_privacion5intermediaLCV1ok() {$this->m_sincroarriba->fm_privacion5intermediaLCV1ok();}
     public function fc_privacion4intermediaLCV1() {$bd_verfiducia =$this->m_sincroarriba->fm_privacion4intermediaLCV1();$payload = json_encode($bd_verfiducia);$url = 'https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarriba/fc_privacion4intermediaLCV1';$ch = curl_init($url);curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,  2);curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);$result = curl_exec($ch);echo json_encode($result);curl_close($ch);}
     public function fc_privacion4intermediaLCV1ok() {$this->m_sincroarriba->fm_privacion4intermediaLCV1ok();}
     public function fc_privacion3intermediaLCV1() {$bd_verfiducia =$this->m_sincroarriba->fm_privacion3intermediaLCV1();$payload = json_encode($bd_verfiducia);$url = 'https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarriba/fc_privacion3intermediaLCV1';$ch = curl_init($url);curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,  2);curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);$result = curl_exec($ch);echo json_encode($result);curl_close($ch);}
     public function fc_privacion3intermediaLCV1ok() {$this->m_sincroarriba->fm_privacion3intermediaLCV1ok();}
     public function fc_privacion2intermediaLCV1() {$bd_verfiducia =$this->m_sincroarriba->fm_privacion2intermediaLCV1();$payload = json_encode($bd_verfiducia);$url = 'https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarriba/fc_privacion2intermediaLCV1';$ch = curl_init($url);curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,  2);curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);$result = curl_exec($ch);echo json_encode($result);curl_close($ch);}
     public function fc_privacion2intermediaLCV1ok() {$this->m_sincroarriba->fm_privacion2intermediaLCV1ok();}
     public function fc_privacion1intermediaLCV1() {$bd_verfiducia =$this->m_sincroarriba->fm_privacion1intermediaLCV1();$payload = json_encode($bd_verfiducia);$url = 'https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarriba/fc_privacion1intermediaLCV1';$ch = curl_init($url);curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,  2);curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);$result = curl_exec($ch);echo json_encode($result);curl_close($ch);}
     public function fc_privacion1intermediaLCV1ok() {$this->m_sincroarriba->fm_privacion1intermediaLCV1ok();}





   public function fc_capitulo11intermedia_lineacierre() {$bd_verfiducia =$this->m_sincroarriba->fm_capitulo11intermedia_lineacierre();$payload = json_encode($bd_verfiducia);$url = 'https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarriba/fc_capitulo11intermedia_lineacierre';$ch = curl_init($url);curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,  2);curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);$result = curl_exec($ch);echo json_encode($result);curl_close($ch);}
   public function fc_capitulo11intermedia_lineacierreok() {$this->m_sincroarriba->fm_capitulo11intermedia_lineacierreok();}
   public function fc_capitulo2intermedia_lineacierre() {$bd_verfiducia =$this->m_sincroarriba->fm_capitulo2intermedia_lineacierre();$payload = json_encode($bd_verfiducia);$url = 'https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarriba/fc_capitulo2intermedia_lineacierre';$ch = curl_init($url);curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,  2);curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);$result = curl_exec($ch);echo json_encode($result);curl_close($ch);}
   public function fc_capitulo2intermedia_lineacierreok() {$this->m_sincroarriba->fm_capitulo2intermedia_lineacierreok();}
   public function fc_capitulo5intermedia_lineacierre() {$bd_verfiducia =$this->m_sincroarriba->fm_capitulo5intermedia_lineacierre();$payload = json_encode($bd_verfiducia);$url = 'https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarriba/fc_capitulo5intermedia_lineacierre';$ch = curl_init($url);curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,  2);curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);$result = curl_exec($ch);echo json_encode($result);curl_close($ch);}
   public function fc_capitulo5intermedia_lineacierreok() {$this->m_sincroarriba->fm_capitulo5intermedia_lineacierreok();}
   public function fc_capitulo6intermedia_lineacierre() {$bd_verfiducia =$this->m_sincroarriba->fm_capitulo6intermedia_lineacierre();$payload = json_encode($bd_verfiducia);$url = 'https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarriba/fc_capitulo6intermedia_lineacierre';$ch = curl_init($url);curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,  2);curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);$result = curl_exec($ch);echo json_encode($result);curl_close($ch);}
   public function fc_capitulo6intermedia_lineacierreok() {$this->m_sincroarriba->fm_capitulo6intermedia_lineacierreok();}
   public function fc_capitulo7intermedia_lineacierre() {$bd_verfiducia =$this->m_sincroarriba->fm_capitulo7intermedia_lineacierre();$payload = json_encode($bd_verfiducia);$url = 'https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarriba/fc_capitulo7intermedia_lineacierre';$ch = curl_init($url);curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,  2);curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);$result = curl_exec($ch);echo json_encode($result);curl_close($ch);}
   public function fc_capitulo7intermedia_lineacierreok() {$this->m_sincroarriba->fm_capitulo7intermedia_lineacierreok();}
   public function fc_capitulo8intermedia_lineacierre() {$bd_verfiducia =$this->m_sincroarriba->fm_capitulo8intermedia_lineacierre();$payload = json_encode($bd_verfiducia);$url = 'https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarriba/fc_capitulo8intermedia_lineacierre';$ch = curl_init($url);curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,  2);curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);$result = curl_exec($ch);echo json_encode($result);curl_close($ch);}
   public function fc_capitulo8intermedia_lineacierreok() {$this->m_sincroarriba->fm_capitulo8intermedia_lineacierreok();}
   public function fc_capitulo9intermedia_lineacierre() {$bd_verfiducia =$this->m_sincroarriba->fm_capitulo9intermedia_lineacierre();$payload = json_encode($bd_verfiducia);$url = 'https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarriba/fc_capitulo9intermedia_lineacierre';$ch = curl_init($url);curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,  2);curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);$result = curl_exec($ch);echo json_encode($result);curl_close($ch);}
   public function fc_capitulo9intermedia_lineacierreok() {$this->m_sincroarriba->fm_capitulo9intermedia_lineacierreok();}
  
   public function fc_principalintegrantes_intermedialcv1() {$bd_verfiducia =$this->m_sincroarriba->fm_principalintegrantes_intermedialcv1();$payload = json_encode($bd_verfiducia);$url = 'https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarriba/fc_principalintegrantes_intermedialcv1';$ch = curl_init($url);curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,  2);curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);$result = curl_exec($ch);echo json_encode($result);curl_close($ch);}
   public function fc_principalintegrantes_intermedialcv1ok() {$this->m_sincroarriba->fm_principalintegrantes_intermedialcv1ok();}
   public function fc_sincronizaactualizacionpp() {$bd_verfiducia =$this->m_sincroarriba->fm_sincronizaactualizacionpp();$payload = json_encode($bd_verfiducia);$url = 'https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarriba/fc_sincronizaactualizacionpp';$ch = curl_init($url);curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,  2);curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);$result = curl_exec($ch);echo json_encode($result);curl_close($ch);}
   public function fc_sincronizaactualizacionppok() {$this->m_sincroarriba->fm_sincronizaactualizacionppok();}

   public function fc_edlclista() {$bd_verfiducia =$this->m_sincroarriba->fm_edlclista();$payload = json_encode($bd_verfiducia);$url = 'https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarriba/fc_edlclista';$ch = curl_init($url);curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,  2);curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);$result = curl_exec($ch);echo json_encode($result);curl_close($ch);}


     public function fc_tablasintermediabajadac11()
     {
     $resultado = $this->m_sincroarriba->fm_tablasintermediabajadac11();
     }
     public function fc_tablasintermediabajadac2()
     {
     $resultado = $this->m_sincroarriba->fm_tablasintermediabajadac2();
     }
     public function fc_tablasintermediabajadac5()
     {
     $resultado = $this->m_sincroarriba->fm_tablasintermediabajadac5();
     }
     public function fc_tablasintermediabajadac6()
     {
     $resultado = $this->m_sincroarriba->fm_tablasintermediabajadac6();
     }
     public function fc_tablasintermediabajadac7()
     {
     $resultado = $this->m_sincroarriba->fm_tablasintermediabajadac7();
     }
     public function fc_tablasintermediabajadac8()
     {
     $resultado = $this->m_sincroarriba->fm_tablasintermediabajadac8();
     }
     public function fc_tablasintermediabajadac9()
     {
     $resultado = $this->m_sincroarriba->fm_tablasintermediabajadac9();
     }
     public function fc_sincronizarbajadaintermediahistc11()
     {
     $resultado = $this->m_sincroarriba->fm_sincronizarbajadaintermediahistc11();
     }
     public function fc_sincronizarbajadaintermediahistc2()
     {
     $resultado = $this->m_sincroarriba->fm_sincronizarbajadaintermediahistc2();
     }
     public function fc_sincronizarbajadaintermediahistc5()
     {
     $resultado = $this->m_sincroarriba->fm_sincronizarbajadaintermediahistc5();
     }
     public function fc_sincronizarbajadaintermediahistc6()
     {
     $resultado = $this->m_sincroarriba->fm_sincronizarbajadaintermediahistc6();
     }
     public function fc_sincronizarbajadaintermediahistc7()
     {
     $resultado = $this->m_sincroarriba->fm_sincronizarbajadaintermediahistc7();
     }
     public function fc_sincronizarbajadaintermediahistc8()
     {
     $resultado = $this->m_sincroarriba->fm_sincronizarbajadaintermediahistc8();
     }
     public function fc_sincronizarbajadaintermediahistc9()
     {
     $resultado = $this->m_sincroarriba->fm_sincronizarbajadaintermediahistc9();
     }
     public function fc_sincronizacionintegrantesintermedia_historicodint()
     {
     $resultado = $this->m_sincroarriba->fm_sincronizacionintegrantesintermedia_historicodint();
     }
     public function fc_privacion10intermediaservidor_historicod10()
     {
     $resultado = $this->m_sincroarriba->fm_privacion10intermediaservidor_historicod10();
     }
     public function fc_privacion11intermediaservidor_historicod11()
     {
     $resultado = $this->m_sincroarriba->fm_privacion11intermediaservidor_historicod11();
     }
     public function fc_privacion12intermediaservidor_historicod12()
     {
     $resultado = $this->m_sincroarriba->fm_privacion12intermediaservidor_historicod12();
     }
     public function fc_privacion13intermediaservidor_historicod13()
     {
     $resultado = $this->m_sincroarriba->fm_privacion13intermediaservidor_historicod13();
     }
     public function fc_privacion14intermediaservidor_historicod14()
     {
     $resultado = $this->m_sincroarriba->fm_privacion14intermediaservidor_historicod14();
     }
     public function fc_privacion15intermediaservidor_historicod15()
     {
     $resultado = $this->m_sincroarriba->fm_privacion15intermediaservidor_historicod15();
     }
     public function fc_privacion16intermediaservidor_historicod16()
     {
     $resultado = $this->m_sincroarriba->fm_privacion16intermediaservidor_historicod16();
     }
     public function fc_privacion1intermediaservidor_historicod1()
     {
     $resultado = $this->m_sincroarriba->fm_privacion1intermediaservidor_historicod1();
     }
     public function fc_privacion2intermediaservidor_historicod2()
     {
     $resultado = $this->m_sincroarriba->fm_privacion2intermediaservidor_historicod2();
     }
     public function fc_privacion3intermediaservidor_historicod3()
     {
     $resultado = $this->m_sincroarriba->fm_privacion3intermediaservidor_historicod3();
     }
     public function fc_privacion4intermediaservidor_historicod4()
     {
     $resultado = $this->m_sincroarriba->fm_privacion4intermediaservidor_historicod4();
     }




     public function fc_ipmintermediaservidor_historicod()
     {
     $resultado = $this->m_sincroarriba->fm_ipmintermediaservidor_historicod();
     }






     public function fc_privacion5intermediaservidor_historicod5()
     {
     $resultado = $this->m_sincroarriba->fm_privacion5intermediaservidor_historicod5();
     }
     public function fc_privacion6intermediaservidor_historicod6()
     {
     $resultado = $this->m_sincroarriba->fm_privacion6intermediaservidor_historicod6();
     }
     public function fc_privacion7intermediaservidor_historicod7()
     {
     $resultado = $this->m_sincroarriba->fm_privacion7intermediaservidor_historicod7();
     }
     public function fc_privacion8intermediaservidor_historicod8()
     {
     $resultado = $this->m_sincroarriba->fm_privacion8intermediaservidor_historicod8();
     }
     public function fc_privacion9intermediaservidor_historicod9()
     {
     $resultado = $this->m_sincroarriba->fm_privacion9intermediaservidor_historicod9();
     }
     public function fc_sincronizarprotocoloestacionestado_intermedia_historicod1()
     {
     $resultado = $this->m_sincroarriba->fm_sincronizarprotocoloestacionestado_intermedia_historicod1();
     }
     public function fc_sincronizarprotocolopasosestado_intermedia_historicod1()
     {
     $resultado = $this->m_sincroarriba->fm_sincronizarprotocolopasosestado_intermedia_historicod1();
     }
     public function fc_encuadreservidord()
     {
     $resultado = $this->m_sincroarriba->fm_encuadreservidord();
     }

     public function fc_informaciongeneralvisitasservidord()
     {
     $resultado = $this->m_sincroarriba->fm_informaciongeneralvisitasservidord(); 
     }

     public function fc_informaciongeneralvisitas_historicod()
     {
     $resultado = $this->m_sincroarriba->fm_informaciongeneralvisitas_historicod(); 
     }

     public function fc_informaciongeneralvisitas_aed()
     {
     $resultado = $this->m_sincroarriba->fm_informaciongeneralvisitas_aed(); 
     }

	 public function fc_sincrofin() 
	 {         
        $resultado = $this->m_sincroarriba->fm_sincrofin();
     }
     
     /////////////////////Finaliza Sincronizacion Arriba////////////////
     /////////////////////Inicia Sincronizacion Abajo//////////////////
     
     public function fc_reasignacionarriba() {$bd_verfiducia =$this->m_sincroarriba->fm_reasignacionarriba();$payload = json_encode($bd_verfiducia);$url = 'https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarriba/fc_reasignacionarriba';$ch = curl_init($url);curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,  2);curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);$result = curl_exec($ch);echo json_encode($result);curl_close($ch);}

     public function fc_reasignacionabajo() {$bd_verfiducia =$this->m_sincroarriba->fm_reasignacionabajo();$payload = json_encode($bd_verfiducia);$url = 'https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarriba/fc_reasignacionabajo';$ch = curl_init($url);curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,  2);curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);$result = curl_exec($ch);echo json_encode($result);curl_close($ch);}





      public function fc_sincronizacionabajo() {
         
        $resultado = $this->m_sincroarriba->fm_sincronizacionabajo($this->session->userdata('documento'));
        $totalfolios = '';
        foreach ($resultado as $total)
        {
            
            $totalfolios = $total->folio;  

        }
        
        echo ($totalfolios);
       
     }
   ///////////Inicio controladores de bajada cierre////////

   public function fc_ipmintermediaLCV1d()
   {
      $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarribad/fc_ipmintermediaLCV1d?pdoccogestor='.$this->session->userdata('documento'));
      $listarfiducias = json_decode($listarbac);

      foreach ($listarfiducias as $fiducia)
      {
   
         $this->m_sincroarriba->fm_ipmintermediaLCV1d($fiducia);
         echo json_encode('ok');
      } 
   }

   public function fc_privacion16intermediaLCV1d()
   {
      $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincronizacion_aba_sincrologro1d/fc_sincrop16l?pdoccogestor='.$this->session->userdata('documento'));
      $listarfiducias = json_decode($listarbac);

      foreach ($listarfiducias as $fiducia)
      {
   
         $this->m_sincroarriba->fm_privacion16intermediaLCV1d($fiducia);
         echo json_encode('ok');
      } }

  
   public function fc_privacion15intermediaLCV1d()
   {
      $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincronizacion_aba_sincrologro1d/fc_sincrop15l?pdoccogestor='.$this->session->userdata('documento'));
      $listarfiducias = json_decode($listarbac);

      foreach ($listarfiducias as $fiducia)
      {
   
         $this->m_sincroarriba->fm_privacion15intermediaLCV1d($fiducia);

      } 

      echo json_encode('ok');

   //$resultado = $this->m_sincroarriba->fm_privacion15intermediaLCV1d();
   }

   public function fc_privacion14intermediaLCV1d()
   {
      $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincronizacion_aba_sincrologro1d/fc_sincrop14l?pdoccogestor='.$this->session->userdata('documento'));
      $listarfiducias = json_decode($listarbac);

      foreach ($listarfiducias as $fiducia)
      {
   
         $this->m_sincroarriba->fm_privacion14intermediaLCV1d($fiducia);

      } 

      echo json_encode('ok');

   //$resultado = $this->m_sincroarriba->fm_privacion14intermediaLCV1d();
   }

   public function fc_privacion13intermediaLCV1d()
   {
      $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincronizacion_aba_sincrologro1d/fc_sincrop13l?pdoccogestor='.$this->session->userdata('documento'));
      $listarfiducias = json_decode($listarbac);

      foreach ($listarfiducias as $fiducia)
      {
   
         $this->m_sincroarriba->fm_privacion13intermediaLCV1d($fiducia);

      } 

      echo json_encode('ok');

   //$resultado = $this->m_sincroarriba->fm_privacion13intermediaLCV1d();
   }

   public function fc_privacion12intermediaLCV1d()
   {
      $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincronizacion_aba_sincrologro1d/fc_sincrop12l?pdoccogestor='.$this->session->userdata('documento'));
      $listarfiducias = json_decode($listarbac);

      foreach ($listarfiducias as $fiducia)
      {
   
         $this->m_sincroarriba->fm_privacion12intermediaLCV1d($fiducia);

      } 

      echo json_encode('ok');

   //$resultado = $this->m_sincroarriba->fm_privacion12intermediaLCV1d();
   }

   public function fc_privacion11intermediaLCV1d()
   {
      $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincronizacion_aba_sincrologro1d/fc_sincrop11l?pdoccogestor='.$this->session->userdata('documento'));
      $listarfiducias = json_decode($listarbac);

      foreach ($listarfiducias as $fiducia)
      {
   
         $this->m_sincroarriba->fm_privacion11intermediaLCV1d($fiducia);

      } 

      echo json_encode('ok');

   //$resultado = $this->m_sincroarriba->fm_privacion11intermediaLCV1d();
   }

   public function fc_privacion10intermediaLCV1d()
   {
      $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincronizacion_aba_sincrologro1d/fc_sincrop10l?pdoccogestor='.$this->session->userdata('documento'));
      $listarfiducias = json_decode($listarbac);

      foreach ($listarfiducias as $fiducia)
      {
   
         $this->m_sincroarriba->fm_privacion10intermediaLCV1d($fiducia);

      } 

      echo json_encode('ok');

   //$resultado = $this->m_sincroarriba->fm_privacion10intermediaLCV1d();
   }

   public function fc_privacion9intermediaLCV1d()
   {
      $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincronizacion_aba_sincrologro1d/fc_sincrop9l?pdoccogestor='.$this->session->userdata('documento'));
      $listarfiducias = json_decode($listarbac);

      foreach ($listarfiducias as $fiducia)
      {
   
         $this->m_sincroarriba->fm_privacion9intermediaLCV1d($fiducia);

      } 

      echo json_encode('ok');

   //$resultado = $this->m_sincroarriba->fm_privacion9intermediaLCV1d();
   }

   public function fc_privacion8intermediaLCV1d()
   {
      $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincronizacion_aba_sincrologro1d/fc_sincrop8l?pdoccogestor='.$this->session->userdata('documento'));
      $listarfiducias = json_decode($listarbac);

      foreach ($listarfiducias as $fiducia)
      {
   
         $this->m_sincroarriba->fm_privacion8intermediaLCV1d($fiducia);

      } 

      echo json_encode('ok');

   //$resultado = $this->m_sincroarriba->fm_privacion8intermediaLCV1d();
   }

   public function fc_privacion7intermediaLCV1d()
   {
      $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincronizacion_aba_sincrologro1d/fc_sincrop7l?pdoccogestor='.$this->session->userdata('documento'));
      $listarfiducias = json_decode($listarbac);

      foreach ($listarfiducias as $fiducia)
      {
   
         $this->m_sincroarriba->fm_privacion7intermediaLCV1d($fiducia);

      } 

      echo json_encode('ok');

   //$resultado = $this->m_sincroarriba->fm_privacion7intermediaLCV1d();
   }

   public function fc_privacion6intermediaLCV1d()
   {
      $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincronizacion_aba_sincrologro1d/fc_sincrop6l?pdoccogestor='.$this->session->userdata('documento'));
      $listarfiducias = json_decode($listarbac);

      foreach ($listarfiducias as $fiducia)
      {
   
         $this->m_sincroarriba->fm_privacion6intermediaLCV1d($fiducia);

      } 

      echo json_encode('ok');

   //$resultado = $this->m_sincroarriba->fm_privacion6intermediaLCV1d();
   }

   public function fc_privacion5intermediaLCV1d()
   {
      $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincronizacion_aba_sincrologro1d/fc_sincrop5l?pdoccogestor='.$this->session->userdata('documento'));
      $listarfiducias = json_decode($listarbac);

      foreach ($listarfiducias as $fiducia)
      {
   
         $this->m_sincroarriba->fm_privacion5intermediaLCV1d($fiducia);

      } 

      echo json_encode('ok');

   //$resultado = $this->m_sincroarriba->fm_privacion5intermediaLCV1d();
   }

   public function fc_privacion4intermediaLCV1d()
   {
      $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincronizacion_aba_sincrologro1d/fc_sincrop4l?pdoccogestor='.$this->session->userdata('documento'));
      $listarfiducias = json_decode($listarbac);

      foreach ($listarfiducias as $fiducia)
      {
   
         $this->m_sincroarriba->fm_privacion4intermediaLCV1d($fiducia);

      } 

      echo json_encode('ok');

   //$resultado = $this->m_sincroarriba->fm_privacion4intermediaLCV1d();
   }

   public function fc_privacion3intermediaLCV1d()
   {
      $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincronizacion_aba_sincrologro1d/fc_sincrop3l?pdoccogestor='.$this->session->userdata('documento'));
      $listarfiducias = json_decode($listarbac);

      foreach ($listarfiducias as $fiducia)
      {
   
         $this->m_sincroarriba->fm_privacion3intermediaLCV1d($fiducia);

      } 

      echo json_encode('ok');

   //$resultado = $this->m_sincroarriba->fm_privacion3intermediaLCV1d();
   }

   public function fc_privacion2intermediaLCV1d()
   {
      $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincronizacion_aba_sincrologro1d/fc_sincrop2l?pdoccogestor='.$this->session->userdata('documento'));
      $listarfiducias = json_decode($listarbac);

      foreach ($listarfiducias as $fiducia)
      {
   
         $this->m_sincroarriba->fm_privacion2intermediaLCV1d($fiducia);

      } 

      echo json_encode('ok');

   //$resultado = $this->m_sincroarriba->fm_privacion2intermediaLCV1d();
   }

   public function fc_privacion1intermediaLCV1d()
   {
      $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincronizacion_aba_sincrologro1d/fc_sincrop1l?pdoccogestor='.$this->session->userdata('documento'));
      $listarfiducias = json_decode($listarbac);

      foreach ($listarfiducias as $fiducia)
      {
   
         $this->m_sincroarriba->fm_privacion1intermediaLCV1d($fiducia);

      } 

      echo json_encode('ok');
   //$resultado = $this->m_sincroarriba->fm_privacion1intermediaLCV1d();
   }
 
   public function fc_capitulo11intermedia_lineacierred()
   {
      $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarribad/fc_capitulo11intermedia_lineacierred?pdoccogestor='.$this->session->userdata('documento'));

      $listarfiducias = json_decode($listarbac);

      foreach ($listarfiducias as $fiducia)
      {
   
         $this->m_sincroarriba->fm_capitulo11intermedia_lineacierred($fiducia);
      } 

      echo json_encode('ok');
   }

   public function fc_capitulo6intermedia_lineacierred()
   {
  $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarribad/fc_capitulo6intermedia_lineacierred?pdoccogestor='.$this->session->userdata('documento'));

        $listarfiducias = json_decode($listarbac);
  
        foreach ($listarfiducias as $fiducia)
        {
     
           $this->m_sincroarriba->fm_capitulo6intermedia_lineacierred($fiducia);
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
      
          $datae=   $this->m_sincroarriba->fm_capitulo2intermedia_lineacierred($fiducia);
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
     
           $this->m_sincroarriba->fm_capitulo9intermedia_lineacierred($fiducia);
        } 
  
        echo json_encode('ok');   }

   public function fc_capitulo8intermedia_lineacierred()
   {
  $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarribad/fc_capitulo8intermedia_lineacierred?pdoccogestor='.$this->session->userdata('documento'));

        $listarfiducias = json_decode($listarbac);
  
        foreach ($listarfiducias as $fiducia)
        {
     
           $this->m_sincroarriba->fm_capitulo8intermedia_lineacierred($fiducia);
        } 
  
        echo json_encode('ok');   }

   public function fc_capitulo7intermedia_lineacierred()
   {
  $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarribad/fc_capitulo7intermedia_lineacierred?pdoccogestor='.$this->session->userdata('documento'));

        $listarfiducias = json_decode($listarbac);
  
        foreach ($listarfiducias as $fiducia)
        {
     
           $this->m_sincroarriba->fm_capitulo7intermedia_lineacierred($fiducia);
        } 
  
        echo json_encode('ok');   }

   public function fc_capitulo5intermedia_lineacierred()
   {
  $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarribad/fc_capitulo5intermedia_lineacierred?pdoccogestor='.$this->session->userdata('documento'));

        $listarfiducias = json_decode($listarbac);
  
        foreach ($listarfiducias as $fiducia)
        {
     
           $this->m_sincroarriba->fm_capitulo5intermedia_lineacierred($fiducia);
        } 
  
        echo json_encode('ok');   }



  
   public function fc_principalintegrantes_intermedialcv1d()
   {
  $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarribad/fc_principalintegrantes_intermedialcv1d?pdoccogestor='.$this->session->userdata('documento'));

        $listarfiducias = json_decode($listarbac);
  
        foreach ($listarfiducias as $fiducia)
        {
     
           $this->m_sincroarriba->fm_principalintegrantes_intermedialcv1d($fiducia);
        } 
  
        echo json_encode('ok');   }

   public function fc_sincronizaactualizacionppd()
   {
  $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarribad/fc_sincronizaactualizacionppd?pdoccogestor='.$this->session->userdata('documento'));

        $listarfiducias = json_decode($listarbac);
  
        foreach ($listarfiducias as $fiducia)
        {
     
           $this->m_sincroarriba->fm_sincronizaactualizacionppd($fiducia);
        } 
  
        echo json_encode('ok');   }
   ////////////////Fin controladores bajada cierre/////////////////

    public function fc_sincronizacionintegrantesd() {
         
  $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarribad/fc_sincronizacionintegrantesd?pdoccogestor='.$this->session->userdata('documento'));

        $listarfiducias = json_decode($listarbac);
  
        foreach ($listarfiducias as $fiducia)
        {
     
           $this->m_sincroarriba->fm_sincronizacionintegrantesd($fiducia);
        } 
  
        echo json_encode('ok');       
     }
     public function fc_sincronizacionhogard() {
         
  $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarribad/fc_sincronizacionhogard?pdoccogestor='.$this->session->userdata('documento'));

        $listarfiducias = json_decode($listarbac);
  
        foreach ($listarfiducias as $fiducia)
        {
     
           $this->m_sincroarriba->fm_sincronizacionhogard($fiducia);
        } 
  
        echo json_encode('ok');       
     }

      public function fc_sincronizacionhogardok() {
    
          $this->m_sincroarriba->fm_sincronizacionhogardok();
             echo json_encode('ok');       
          }

 

   public function fc_capitulo2d() {
         
      // $resultado = $this->m_sincroarriba->fm_capitulo2d();

       $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarribad/fc_capitulo2d?pdoccogestor='.$this->session->userdata('documento'));

       $listarfiducias = json_decode($listarbac);
 
       foreach ($listarfiducias as $fiducia)
       {
    
          $this->m_sincroarriba->fm_capitulo2d($fiducia);
       } 
 
       echo json_encode('ok');

    }
    public function fc_capitulo3d() {
     $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarribad/fc_capitulo3d?pdoccogestor='.$this->session->userdata('documento'));
     $listarfiducias = json_decode($listarbac);
     foreach ($listarfiducias as $fiducia)
     {
  
        $this->m_sincroarriba->fm_capitulo3d($fiducia);

     } 

     echo json_encode('ok');       
    }
    public function fc_capitulo6d() {
     $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarribad/fc_capitulo6d?pdoccogestor='.$this->session->userdata('documento'));
     $listarfiducias = json_decode($listarbac);
     foreach ($listarfiducias as $fiducia)
     {
        $this->m_sincroarriba->fm_capitulo6d($fiducia);
     } 

     echo json_encode('ok'); 
      
    }
    public function fc_capitulo11d() {
        
     $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarribad/fc_capitulo11d?pdoccogestor='.$this->session->userdata('documento'));
     $listarfiducias = json_decode($listarbac);
     foreach ($listarfiducias as $fiducia)
     {
        $this->m_sincroarriba->fm_capitulo11d($fiducia);
     } 

     echo json_encode('ok'); 
      
    }
    public function fc_capitulo4id() {
     $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarribad/fc_capitulo4id?pdoccogestor='.$this->session->userdata('documento'));
     $listarfiducias = json_decode($listarbac);
     foreach ($listarfiducias as $fiducia)
     {
        $this->m_sincroarriba->fm_capitulo4id($fiducia);
     } 
     echo json_encode('ok');  
    }
    public function fc_capitulo5id() {
        
     $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarribad/fc_capitulo5id?pdoccogestor='.$this->session->userdata('documento'));
     $listarfiducias = json_decode($listarbac);
     foreach ($listarfiducias as $fiducia)
     {
        $this->m_sincroarriba->fm_capitulo5id($fiducia);
     } 
     echo json_encode('ok');  
      
    }
    public function fc_capitulo7id() {
        
     $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarribad/fc_capitulo7id?pdoccogestor='.$this->session->userdata('documento'));
     $listarfiducias = json_decode($listarbac);
     foreach ($listarfiducias as $fiducia)
     {
        $this->m_sincroarriba->fm_capitulo7id($fiducia);
     } 
     echo json_encode('ok');  
      
    }
    public function fc_capitulo8id() {
        
     $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarribad/fc_capitulo8id?pdoccogestor='.$this->session->userdata('documento'));
     $listarfiducias = json_decode($listarbac);
     foreach ($listarfiducias as $fiducia)
     {
        $this->m_sincroarriba->fm_capitulo8id($fiducia);
     } 
     echo json_encode('ok');  
      
    }
    public function fc_capitulo9id() {
        
     $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarribad/fc_capitulo9id?pdoccogestor='.$this->session->userdata('documento'));
     $listarfiducias = json_decode($listarbac);
     foreach ($listarfiducias as $fiducia)
     {
        $this->m_sincroarriba->fm_capitulo9id($fiducia);
     } 
     echo json_encode('ok');  
      
    }
    public function fc_capitulo10id() {
        
     $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarribad/fc_capitulo10id?pdoccogestor='.$this->session->userdata('documento'));
     $listarfiducias = json_decode($listarbac);
     foreach ($listarfiducias as $fiducia)
     {
        $this->m_sincroarriba->fm_capitulo10id($fiducia);
     } 
     echo json_encode('ok');  
      
    }
    public function fc_capitulo11id() {
        
     $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarribad/fc_capitulo11id?pdoccogestor='.$this->session->userdata('documento'));
     $listarfiducias = json_decode($listarbac);
     foreach ($listarfiducias as $fiducia)
     {
        $this->m_sincroarriba->fm_capitulo11id($fiducia);
     } 
     echo json_encode('ok');  
      
    }
    public function fc_capitulo12id() {
        
     $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarribad/fc_capitulo12id?pdoccogestor='.$this->session->userdata('documento'));
     $listarfiducias = json_decode($listarbac);
     foreach ($listarfiducias as $fiducia)
     {
        $this->m_sincroarriba->fm_capitulo12id($fiducia);
     } 
     echo json_encode('ok');  
      
    }
     public function fc_pphogard() { 
        $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarribad/fc_pphogard?pdoccogestor='.$this->session->userdata('documento'));
        $listarfiducias = json_decode($listarbac);
        foreach ($listarfiducias as $fiducia)
        {
           $this->m_sincroarriba->fm_pphogard($fiducia);
        } 
        echo json_encode('ok');  
      
    }

    public function fc_foliosactualizados() { 
      $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarribad/fc_principalhogard?pdoccogestor='.$this->session->userdata('documento'));
      $listarfiducias = json_decode($listarbac);
      foreach ($listarfiducias as $fiducia)
      {
        $folio=array('folio'=>$fiducia->folio,'folioactivo'=>$fiducia->folioactivo);
         $this->m_sincroarriba->fm_foliosactualizados($folio);
      } 
      echo json_encode('ok');  
    
  }

  public function fc_foliosactualizadosok() {
      $this->m_sincroarriba->fm_foliosactualizadosok();
      echo json_encode('ok'); 

  }

     public function fc_ppcap1d() {
        $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarribad/fc_ppcap1d?pdoccogestor='.$this->session->userdata('documento'));
        $listarfiducias = json_decode($listarbac);
        foreach ($listarfiducias as $fiducia)
        {
           $this->m_sincroarriba->fm_ppcap1d($fiducia);
        } 
        echo json_encode('ok'); 
    }
     public function fc_ppcap2d() {
        $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarribad/fc_ppcap2d?pdoccogestor='.$this->session->userdata('documento'));
        $listarfiducias = json_decode($listarbac);
        foreach ($listarfiducias as $fiducia)
        {
           $this->m_sincroarriba->fm_ppcap2d($fiducia);
        } 
        echo json_encode('ok'); 
    }
     public function fc_ppcap3d() {
        $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarribad/fc_ppcap3d?pdoccogestor='.$this->session->userdata('documento'));
        $listarfiducias = json_decode($listarbac);
        foreach ($listarfiducias as $fiducia)
        {
           $this->m_sincroarriba->fm_ppcap3d($fiducia);
        } 
        echo json_encode('ok'); 
    }
     public function fc_ppcap4d() {
        $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarribad/fc_ppcap4d?pdoccogestor='.$this->session->userdata('documento'));
        $listarfiducias = json_decode($listarbac);
        foreach ($listarfiducias as $fiducia)
        {
           $this->m_sincroarriba->fm_ppcap4d($fiducia);
        } 
        echo json_encode('ok'); 
    }
     public function fc_ppacademicad() {
        
        $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarribad/fc_ppacademicad?pdoccogestor='.$this->session->userdata('documento'));
        $listarfiducias = json_decode($listarbac);
        foreach ($listarfiducias as $fiducia)
        {
           $this->m_sincroarriba->fm_ppacademicad($fiducia);
        } 
        echo json_encode('ok'); 
      
    }
     public function fc_ppoestudiosd() {
        
        $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarribad/fc_ppoestudiosd?pdoccogestor='.$this->session->userdata('documento'));
        $listarfiducias = json_decode($listarbac);
        foreach ($listarfiducias as $fiducia)
        {
           $this->m_sincroarriba->fm_ppoestudiosd($fiducia);
        } 
        echo json_encode('ok'); 
      
    }
     public function fc_ppexpd() {
        
        $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarribad/fc_ppexpd?pdoccogestor='.$this->session->userdata('documento'));
        $listarfiducias = json_decode($listarbac);
        foreach ($listarfiducias as $fiducia)
        {
           $this->m_sincroarriba->fm_ppexpd($fiducia);
        } 
        echo json_encode('ok'); 
      
    }
    
    public function fc_pasosestadod() {
        
     $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarribad/fc_pasosestadod?pdoccogestor='.$this->session->userdata('documento'));
     $listarfiducias = json_decode($listarbac);
     foreach ($listarfiducias as $fiducia)
     {
        $this->m_sincroarriba->fm_pasosestadod($fiducia);
     } 
     echo json_encode('ok'); 
      
    }

    public function fc_pasosestadodok() {
      $this->m_sincroarriba->fm_pasosestadodok();
    }
    
    public function fc_actualizaciond() {
     $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarribad/fc_actualizaciond?pdoccogestor='.$this->session->userdata('documento'));
     $listarfiducias = json_decode($listarbac);
     foreach ($listarfiducias as $fiducia)
     {
        $this->m_sincroarriba->fm_actualizaciond($fiducia);
     } 
     echo json_encode('ok'); 
      
    }
    
    public function fc_fconlogrosd() {
       $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarribad/fc_fconlogrosd?pdoccogestor='.$this->session->userdata('documento'));
       $listarfiducias = json_decode($listarbac);
       foreach ($listarfiducias as $fiducia)
       {
        $this->m_sincroarriba->fm_fconlogrosd($fiducia);
       } 
       echo json_encode('ok'); 
      
    }
    
    public function fc_capacidadesd() {
        
       $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarribad/fc_capacidadesd?pdoccogestor='.$this->session->userdata('documento'));
       $listarfiducias = json_decode($listarbac);
       foreach ($listarfiducias as $fiducia)
       {
        $this->m_sincroarriba->fm_capacidadesd($fiducia);
       } 
       echo json_encode('ok'); 
      
    }
    
    public function fc_estacionestadod() {
        
     $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarribad/fc_estacionestadod?pdoccogestor='.$this->session->userdata('documento'));
     $listarfiducias = json_decode($listarbac);
     foreach ($listarfiducias as $fiducia)
     {
      $this->m_sincroarriba->fm_estacionestadod($fiducia);
     } 
     echo json_encode('ok'); 
    }
    public function fc_estacionestadodok() {
      $this->m_sincroarriba->fm_estacionestadodok();

   }
    
    public function fc_sincroc1p1ap12d() {
        
     $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarribad/fc_sincroc1p1ap12d?pdoccogestor='.$this->session->userdata('documento'));
     $listarfiducias = json_decode($listarbac);
     foreach ($listarfiducias as $fiducia)
     {
      $this->m_sincroarriba->fm_sincroc1p1ap12d($fiducia);
     } 
     echo json_encode('ok'); 
      
    }
    
    public function fc_sincrocapitulo1l2e1d() {
     $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarribad/fc_sincrocapitulo1l2e1d?pdoccogestor='.$this->session->userdata('documento'));
     $listarfiducias = json_decode($listarbac);
     foreach ($listarfiducias as $fiducia)
     {
      $this->m_sincroarriba->fm_sincrocapitulo1l2e1d($fiducia);
     } 
     echo json_encode('ok'); 
      
    }
    
    public function fc_sincrolinea2e1cualidadeshd() {
     $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarribad/fc_sincrolinea2e1cualidadeshd?pdoccogestor='.$this->session->userdata('documento'));
     $listarfiducias = json_decode($listarbac);
     foreach ($listarfiducias as $fiducia)
     {
      $this->m_sincroarriba->fm_sincrolinea2e1cualidadeshd($fiducia);
     } 
     echo json_encode('ok'); 
      
    }
    
    public function fc_sincrolinea2e1cualidadesid() {
     $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarribad/fc_sincrolinea2e1cualidadesid?pdoccogestor='.$this->session->userdata('documento'));
     $listarfiducias = json_decode($listarbac);
     foreach ($listarfiducias as $fiducia)
     {
      $this->m_sincroarriba->fm_sincrolinea2e1cualidadesid($fiducia);
     } 
     echo json_encode('ok'); 
      
      
    }



     ///////////////////////////sincronizacion logros//////////////////////////////////////
 


   public function fc_sincrologro1d() {

      $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincronizacion_aba_sincrologro1d/fc_sincrol1?pdoccogestor='.$this->session->userdata('documento'));
      $listarfiducias = json_decode($listarbac);

      foreach ($listarfiducias as $fiducia)
      {
	
         $this->m_sincroarriba->fm_sincrologro1d($fiducia);

      } 

      echo json_encode('ok');    

        //$resultado = $this->m_sincroarriba->fm_sincrologro1d();
       
     }
     public function fc_sincrologro2d() {

      $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincronizacion_aba_sincrologro1d/fc_sincrol2?pdoccogestor='.$this->session->userdata('documento'));
      $listarfiducias = json_decode($listarbac);

      foreach ($listarfiducias as $fiducia)
      {
	
         $this->m_sincroarriba->fm_sincrologro2d($fiducia);

      } 

      echo json_encode('ok');
         
      //  $resultado = $this->m_sincroarriba->fm_sincrologro2d();
       
     }
     public function fc_sincrologro3d() {

      $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincronizacion_aba_sincrologro1d/fc_sincrol3?pdoccogestor='.$this->session->userdata('documento'));
      $listarfiducias = json_decode($listarbac);

      foreach ($listarfiducias as $fiducia)
      {
	
         $this->m_sincroarriba->fm_sincrologro3d($fiducia);

      } 

      echo json_encode('ok');
         
     //   $resultado = $this->m_sincroarriba->fm_sincrologro3d();
       
     }
     public function fc_sincrologro4d() {

      $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincronizacion_aba_sincrologro1d/fc_sincrol4?pdoccogestor='.$this->session->userdata('documento'));
      $listarfiducias = json_decode($listarbac);

      foreach ($listarfiducias as $fiducia)
      {
	
         $this->m_sincroarriba->fm_sincrologro4d($fiducia);

      } 

      echo json_encode('ok');
         
      //  $resultado = $this->m_sincroarriba->fm_sincrologro4d();
       
     }
     public function fc_sincrologro5d() {
      
      $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincronizacion_aba_sincrologro1d/fc_sincrol5?pdoccogestor='.$this->session->userdata('documento'));
      $listarfiducias = json_decode($listarbac);

      foreach ($listarfiducias as $fiducia)
      {
	
         $this->m_sincroarriba->fm_sincrologro5d($fiducia);

      } 

      echo json_encode('ok');

      //  $resultado = $this->m_sincroarriba->fm_sincrologro5d();
       
     }
     public function fc_sincrologro6d() {

      $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincronizacion_aba_sincrologro1d/fc_sincrol6?pdoccogestor='.$this->session->userdata('documento'));
      $listarfiducias = json_decode($listarbac);

      foreach ($listarfiducias as $fiducia)
      {
	
         $this->m_sincroarriba->fm_sincrologro6d($fiducia);

      } 

      echo json_encode('ok');
         
      //  $resultado = $this->m_sincroarriba->fm_sincrologro6d();
       
     }
     public function fc_sincrologro7d() {

      $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincronizacion_aba_sincrologro1d/fc_sincrol7?pdoccogestor='.$this->session->userdata('documento'));
      $listarfiducias = json_decode($listarbac);

      foreach ($listarfiducias as $fiducia)
      {
	
         $this->m_sincroarriba->fm_sincrologro7d($fiducia);

      } 

      echo json_encode('ok');
         
      //  $resultado = $this->m_sincroarriba->fm_sincrologro7d();
       
     }
     public function fc_sincrologro8d() {

      $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincronizacion_aba_sincrologro1d/fc_sincrol8?pdoccogestor='.$this->session->userdata('documento'));
      $listarfiducias = json_decode($listarbac);

      foreach ($listarfiducias as $fiducia)
      {
	
         $this->m_sincroarriba->fm_sincrologro8d($fiducia);

      } 

      echo json_encode('ok');
         
      //  $resultado = $this->m_sincroarriba->fm_sincrologro8d();
       
     }
     public function fc_sincrologro9d() {

      $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincronizacion_aba_sincrologro1d/fc_sincrol9?pdoccogestor='.$this->session->userdata('documento'));
      $listarfiducias = json_decode($listarbac);

      foreach ($listarfiducias as $fiducia)
      {
	
         $this->m_sincroarriba->fm_sincrologro9d($fiducia);

      } 

      echo json_encode('ok');
         
      //  $resultado = $this->m_sincroarriba->fm_sincrologro9d();
       
     }
     public function fc_sincrologro10d() {

      $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincronizacion_aba_sincrologro1d/fc_sincrol10?pdoccogestor='.$this->session->userdata('documento'));
      $listarfiducias = json_decode($listarbac);

      foreach ($listarfiducias as $fiducia)
      {
	
         $this->m_sincroarriba->fm_sincrologro10d($fiducia);

      } 

      echo json_encode('ok');
         
      //  $resultado = $this->m_sincroarriba->fm_sincrologro10d();
       
     }
     public function fc_sincrologro11d() {

      $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincronizacion_aba_sincrologro1d/fc_sincrol11?pdoccogestor='.$this->session->userdata('documento'));
      $listarfiducias = json_decode($listarbac);

      foreach ($listarfiducias as $fiducia)
      {
	
         $this->m_sincroarriba->fm_sincrologro11d($fiducia);

      } 

      echo json_encode('ok');
         
      //  $resultado = $this->m_sincroarriba->fm_sincrologro11d();
       
     }
     public function fc_sincrologro12d() {

      $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincronizacion_aba_sincrologro1d/fc_sincrol12?pdoccogestor='.$this->session->userdata('documento'));
      $listarfiducias = json_decode($listarbac);

      foreach ($listarfiducias as $fiducia)
      {
	
         $this->m_sincroarriba->fm_sincrologro12d($fiducia);

      } 

      echo json_encode('ok');
         
      //  $resultado = $this->m_sincroarriba->fm_sincrologro12d();
       
     }
     public function fc_sincrologro13d() {

      $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincronizacion_aba_sincrologro1d/fc_sincrol13?pdoccogestor='.$this->session->userdata('documento'));
      $listarfiducias = json_decode($listarbac);

      foreach ($listarfiducias as $fiducia)
      {
	
         $this->m_sincroarriba->fm_sincrologro13d($fiducia);

      } 

      echo json_encode('ok');
         
      //  $resultado = $this->m_sincroarriba->fm_sincrologro13d();
       
     }
     public function fc_sincrologro14d() {

      $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincronizacion_aba_sincrologro1d/fc_sincrol14?pdoccogestor='.$this->session->userdata('documento'));
      $listarfiducias = json_decode($listarbac);

      foreach ($listarfiducias as $fiducia)
      {
	
         $this->m_sincroarriba->fm_sincrologro14d($fiducia);

      } 

      echo json_encode('ok');
         
      //  $resultado = $this->m_sincroarriba->fm_sincrologro14d();
       
     }
     public function fc_sincrologro15d() {

      $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincronizacion_aba_sincrologro1d/fc_sincrol15?pdoccogestor='.$this->session->userdata('documento'));
      $listarfiducias = json_decode($listarbac);

      foreach ($listarfiducias as $fiducia)
      {
	
         $this->m_sincroarriba->fm_sincrologro15d($fiducia);

      } 

      echo json_encode('ok');
         
      //  $resultado = $this->m_sincroarriba->fm_sincrologro15d();
       
     }
     public function fc_sincrologro16d() {

      $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincronizacion_aba_sincrologro1d/fc_sincrol16?pdoccogestor='.$this->session->userdata('documento'));
      $listarfiducias = json_decode($listarbac);

      foreach ($listarfiducias as $fiducia)
      {
	
         $this->m_sincroarriba->fm_sincrologro16d($fiducia);

      } 

      echo json_encode('ok');
         
      //  $resultado = $this->m_sincroarriba->fm_sincrologro16d();
       
     }
     public function fc_sincrologro17d() {

      $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincronizacion_aba_sincrologro1d/fc_sincrol17?pdoccogestor='.$this->session->userdata('documento'));
      $listarfiducias = json_decode($listarbac);

      foreach ($listarfiducias as $fiducia)
      {
	
         $this->m_sincroarriba->fm_sincrologro17d($fiducia);

      } 

      echo json_encode('ok');
         
      //  $resultado = $this->m_sincroarriba->fm_sincrologro17d();
       
     }
     public function fc_sincrologro18d() {

      $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincronizacion_aba_sincrologro1d/fc_sincrol18?pdoccogestor='.$this->session->userdata('documento'));
      $listarfiducias = json_decode($listarbac);

      foreach ($listarfiducias as $fiducia)
      {
	
         $this->m_sincroarriba->fm_sincrologro18d($fiducia);

      } 

      echo json_encode('ok');
         
        //$resultado = $this->m_sincroarriba->fm_sincrologro18d();
       
     }
     public function fc_sincrologro19d() {

      $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincronizacion_aba_sincrologro1d/fc_sincrol19?pdoccogestor='.$this->session->userdata('documento'));
      $listarfiducias = json_decode($listarbac);

      foreach ($listarfiducias as $fiducia)
      {
	
         $this->m_sincroarriba->fm_sincrologro19d($fiducia);

      } 

      echo json_encode('ok');
         
      //  $resultado = $this->m_sincroarriba->fm_sincrologro19d();
       
     }
     public function fc_sincrologro20d() {

      $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincronizacion_aba_sincrologro1d/fc_sincrol20?pdoccogestor='.$this->session->userdata('documento'));
      $listarfiducias = json_decode($listarbac);

      foreach ($listarfiducias as $fiducia)
      {
	
         $this->m_sincroarriba->fm_sincrologro20d($fiducia);

      } 

      echo json_encode('ok');
         
      //  $resultado = $this->m_sincroarriba->fm_sincrologro20d();
       
     }

     public function fc_sincrologro21d() {

      $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincronizacion_aba_sincrologro1d/fc_sincrol21?pdoccogestor='.$this->session->userdata('documento'));
      $listarfiducias = json_decode($listarbac);

      foreach ($listarfiducias as $fiducia)
      {
	
         $this->m_sincroarriba->fm_sincrologro21d($fiducia);

      } 

      echo json_encode('ok');
         
      //  $resultado = $this->m_sincroarriba->fm_sincrologro21d();
       
     }
     public function fc_sincrologro22d() {

      $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincronizacion_aba_sincrologro1d/fc_sincrol22?pdoccogestor='.$this->session->userdata('documento'));
      $listarfiducias = json_decode($listarbac);

      foreach ($listarfiducias as $fiducia)
      {
	
         $this->m_sincroarriba->fm_sincrologro22d($fiducia);

      } 

      echo json_encode('ok');
         
      //  $resultado = $this->m_sincroarriba->fm_sincrologro22d();
       
     }
     public function fc_sincrologro23d() {

      $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincronizacion_aba_sincrologro1d/fc_sincrol23?pdoccogestor='.$this->session->userdata('documento'));
      $listarfiducias = json_decode($listarbac);

      foreach ($listarfiducias as $fiducia)
      {
	
         $this->m_sincroarriba->fm_sincrologro23d($fiducia);

      } 

      echo json_encode('ok');
         
       // $resultado = $this->m_sincroarriba->fm_sincrologro23d();
       
     }
     public function fc_sincrologro24d() {

      $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincronizacion_aba_sincrologro1d/fc_sincrol24?pdoccogestor='.$this->session->userdata('documento'));
      $listarfiducias = json_decode($listarbac);

      foreach ($listarfiducias as $fiducia)
      {
	
         $this->m_sincroarriba->fm_sincrologro24d($fiducia);

      } 

      echo json_encode('ok');
         
        //$resultado = $this->m_sincroarriba->fm_sincrologro24d();
       
     }
     public function fc_sincrologro25d() {

      $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincronizacion_aba_sincrologro1d/fc_sincrol25?pdoccogestor='.$this->session->userdata('documento'));
      $listarfiducias = json_decode($listarbac);

      foreach ($listarfiducias as $fiducia)
      {
	
         $this->m_sincroarriba->fm_sincrologro25d($fiducia);

      } 

      echo json_encode('ok');
         
      //  $resultado = $this->m_sincroarriba->fm_sincrologro25d();
       
     }
     public function fc_sincrologro26d() {

      $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincronizacion_aba_sincrologro1d/fc_sincrol26?pdoccogestor='.$this->session->userdata('documento'));
      $listarfiducias = json_decode($listarbac);

      foreach ($listarfiducias as $fiducia)
      {
	
         $this->m_sincroarriba->fm_sincrologro26d($fiducia);

      } 

      echo json_encode('ok');
         
      //  $resultado = $this->m_sincroarriba->fm_sincrologro26d();
       
     }
     public function fc_sincrologro27d() {

      $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincronizacion_aba_sincrologro1d/fc_sincrol27?pdoccogestor='.$this->session->userdata('documento'));
      $listarfiducias = json_decode($listarbac);

      foreach ($listarfiducias as $fiducia)
      {
	
         $this->m_sincroarriba->fm_sincrologro27d($fiducia);

      } 

      echo json_encode('ok');
         
      //  $resultado = $this->m_sincroarriba->fm_sincrologro27d();
       
     }
     public function fc_sincrologro28d() {

      $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincronizacion_aba_sincrologro1d/fc_sincrol28?pdoccogestor='.$this->session->userdata('documento'));
      $listarfiducias = json_decode($listarbac);

      foreach ($listarfiducias as $fiducia)
      {
	
         $this->m_sincroarriba->fm_sincrologro28d($fiducia);

      } 

      echo json_encode('ok');
         
      //  $resultado = $this->m_sincroarriba->fm_sincrologro28d();
       
     }
     public function fc_sincrologro29d() {

      $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincronizacion_aba_sincrologro1d/fc_sincrol29?pdoccogestor='.$this->session->userdata('documento'));
      $listarfiducias = json_decode($listarbac);

      foreach ($listarfiducias as $fiducia)
      {
	
         $this->m_sincroarriba->fm_sincrologro29d($fiducia);

      } 

      echo json_encode('ok');
         
       // $resultado = $this->m_sincroarriba->fm_sincrologro29d();
       
     }
     public function fc_sincrologro30d() {

      $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincronizacion_aba_sincrologro1d/fc_sincrol30?pdoccogestor='.$this->session->userdata('documento'));
      $listarfiducias = json_decode($listarbac);

      foreach ($listarfiducias as $fiducia)
      {
	
         $this->m_sincroarriba->fm_sincrologro30d($fiducia);

      } 

      echo json_encode('ok');
         
       // $resultado = $this->m_sincroarriba->fm_sincrologro30d();
       
     }
     public function fc_sincrologro31d() {

      $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincronizacion_aba_sincrologro1d/fc_sincrol31?pdoccogestor='.$this->session->userdata('documento'));
      $listarfiducias = json_decode($listarbac);

      foreach ($listarfiducias as $fiducia)
      {
	
         $this->m_sincroarriba->fm_sincrologro31d($fiducia);

      } 

      echo json_encode('ok');
         
        //$resultado = $this->m_sincroarriba->fm_sincrologro31d();
       
     }
     public function fc_sincrologro32d() {

      $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincronizacion_aba_sincrologro1d/fc_sincrol32?pdoccogestor='.$this->session->userdata('documento'));
      $listarfiducias = json_decode($listarbac);

      foreach ($listarfiducias as $fiducia)
      {
	
         $this->m_sincroarriba->fm_sincrologro32d($fiducia);

      } 

      echo json_encode('ok');
         
       // $resultado = $this->m_sincroarriba->fm_sincrologro32d();
       
     }
     public function fc_sincrologro33d() {

      $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincronizacion_aba_sincrologro1d/fc_sincrol33?pdoccogestor='.$this->session->userdata('documento'));
      $listarfiducias = json_decode($listarbac);

      foreach ($listarfiducias as $fiducia)
      {
	
         $this->m_sincroarriba->fm_sincrologro33d($fiducia);

      } 

      echo json_encode('ok');
         
      //  $resultado = $this->m_sincroarriba->fm_sincrologro33d();
       
     }
     public function fc_sincrologro34d() {

      $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincronizacion_aba_sincrologro1d/fc_sincrol34?pdoccogestor='.$this->session->userdata('documento'));
      $listarfiducias = json_decode($listarbac);

      foreach ($listarfiducias as $fiducia)
      {
	
         $this->m_sincroarriba->fm_sincrologro34d($fiducia);

      } 

      echo json_encode('ok');
         
       // $resultado = $this->m_sincroarriba->fm_sincrologro34d();
       
     }
     public function fc_sincrologro35d() {

      $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincronizacion_aba_sincrologro1d/fc_sincrol35?pdoccogestor='.$this->session->userdata('documento'));
      $listarfiducias = json_decode($listarbac);

      foreach ($listarfiducias as $fiducia)
      {
	
         $this->m_sincroarriba->fm_sincrologro35d($fiducia);

      } 

      echo json_encode('ok');
         
       // $resultado = $this->m_sincroarriba->fm_sincrologro35d();
       
     }
     public function fc_sincrologro36d() {

      $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincronizacion_aba_sincrologro1d/fc_sincrol36?pdoccogestor='.$this->session->userdata('documento'));
      $listarfiducias = json_decode($listarbac);

      foreach ($listarfiducias as $fiducia)
      {
	
         $this->m_sincroarriba->fm_sincrologro36d($fiducia);

      } 

      echo json_encode('ok');
         
       // $resultado = $this->m_sincroarriba->fm_sincrologro36d();
       
     }
     public function fc_sincrologro37d() {

      $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincronizacion_aba_sincrologro1d/fc_sincrol37?pdoccogestor='.$this->session->userdata('documento'));
      $listarfiducias = json_decode($listarbac);

      foreach ($listarfiducias as $fiducia)
      {
	
         $this->m_sincroarriba->fm_sincrologro37d($fiducia);

      } 

      echo json_encode('ok');
         
        //$resultado = $this->m_sincroarriba->fm_sincrologro37d();
       
     }
     public function fc_sincrologro38d() {

      $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincronizacion_aba_sincrologro1d/fc_sincrol38?pdoccogestor='.$this->session->userdata('documento'));
      $listarfiducias = json_decode($listarbac);

      foreach ($listarfiducias as $fiducia)
      {
	
         $this->m_sincroarriba->fm_sincrologro38d($fiducia);

      } 

      echo json_encode('ok');
         
        //$resultado = $this->m_sincroarriba->fm_sincrologro38d();
       
     }
     public function fc_sincrologro39d() {

      $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincronizacion_aba_sincrologro1d/fc_sincrol39?pdoccogestor='.$this->session->userdata('documento'));
      $listarfiducias = json_decode($listarbac);

      foreach ($listarfiducias as $fiducia)
      {
	
         $this->m_sincroarriba->fm_sincrologro39d($fiducia);

      } 

      echo json_encode('ok');
         
        //$resultado = $this->m_sincroarriba->fm_sincrologro39d();
       
     }
     public function fc_sincrologro40d() {

      $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincronizacion_aba_sincrologro1d/fc_sincrol40?pdoccogestor='.$this->session->userdata('documento'));
      $listarfiducias = json_decode($listarbac);

      foreach ($listarfiducias as $fiducia)
      {
	
         $this->m_sincroarriba->fm_sincrologro40d($fiducia);

      } 

      echo json_encode('ok');
         
        //$resultado = $this->m_sincroarriba->fm_sincrologro40d();
       
     }
     public function fc_sincrologro41d() {

      $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincronizacion_aba_sincrologro1d/fc_sincrol41?pdoccogestor='.$this->session->userdata('documento'));
      $listarfiducias = json_decode($listarbac);

      foreach ($listarfiducias as $fiducia)
      {
	
         $this->m_sincroarriba->fm_sincrologro41d($fiducia);

      } 

      echo json_encode('ok');
         
        //$resultado = $this->m_sincroarriba->fm_sincrologro41d();
       
     }
     public function fc_hmovlogd() {
      // $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarribad/fc_hmovlogd?pdoccogestor='.$this->session->userdata('documento'));
      // $listarfiducias = json_decode($listarbac);

      // foreach ($listarfiducias as $fiducia)
      // {
	
      //    $this->m_sincroarriba->fm_hmovlogd($fiducia);

      // } 

      echo json_encode('ok');
    }
    public function fc_movlog10d() {
      // $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarribad/fc_movlog10d?pdoccogestor='.$this->session->userdata('documento'));
      // $listarfiducias = json_decode($listarbac);

      // foreach ($listarfiducias as $fiducia)
      // {
	
      //    $this->m_sincroarriba->fm_movlog10d($fiducia);

      // } 

      echo json_encode('ok');
    }
    public function fc_movlog18d() {
      // $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarribad/fc_movlog18d?pdoccogestor='.$this->session->userdata('documento'));
      // $listarfiducias = json_decode($listarbac);

      // foreach ($listarfiducias as $fiducia)
      // {
	
      //    $this->m_sincroarriba->fm_movlog18d($fiducia);

      // } 

      echo json_encode('ok');
    }
    public function fc_movlog24d() {
      // $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarribad/fc_movlog24d?pdoccogestor='.$this->session->userdata('documento'));
      // $listarfiducias = json_decode($listarbac);

      // foreach ($listarfiducias as $fiducia)
      // {
	
      //    $this->m_sincroarriba->fm_movlog24d($fiducia);

      // } 

      echo json_encode('ok');
    }
    public function fc_movlog33d() {
      // $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarribad/fc_movlog33d?pdoccogestor='.$this->session->userdata('documento'));
      // $listarfiducias = json_decode($listarbac);

      // foreach ($listarfiducias as $fiducia)
      // {
	
      //    $this->m_sincroarriba->fm_movlog33d($fiducia);

      // } 

      echo json_encode('ok');
    }
    public function fc_movlog34d() {
      // $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarribad/fc_movlog34d?pdoccogestor='.$this->session->userdata('documento'));
      // $listarfiducias = json_decode($listarbac);

      // foreach ($listarfiducias as $fiducia)
      // {
	
      //    $this->m_sincroarriba->fm_movlog34d($fiducia);

      // } 

      echo json_encode('ok');
    }
    public function fc_movlog39d() {
      // $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarribad/fc_movlog39d?pdoccogestor='.$this->session->userdata('documento'));
      // $listarfiducias = json_decode($listarbac);

      // foreach ($listarfiducias as $fiducia)
      // {
	
      //    $this->m_sincroarriba->fm_movlog39d($fiducia);

      // } 

      echo json_encode('ok');
    }
    public function fc_logromovimientocgsd() {
      // $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarribad/fc_logromovimientocgsd?pdoccogestor='.$this->session->userdata('documento'));
      // $listarfiducias = json_decode($listarbac);

      // foreach ($listarfiducias as $fiducia)
      // {
	
      //    $this->m_sincroarriba->fm_logromovimientocgsd($fiducia);

      // } 

      echo json_encode('ok');
    }
     public function fc_l2e2suenod() {
         
        $resultado = $this->m_sincroarriba->fm_l2e2suenod();
       
    }
    public function fc_l2e2suenoaccionesd() {
         
        $resultado = $this->m_sincroarriba->fm_l2e2suenoaccionesd();
       
    }
     public function fc_sincroipmd() {
      $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarribad/fc_sincroipmd?pdoccogestor='.$this->session->userdata('documento'));
      $listarfiducias = json_decode($listarbac);

      foreach ($listarfiducias as $fiducia)
      {
	
         $this->m_sincroarriba->fm_sincroipmd($fiducia);

      } 

      echo json_encode('ok');
     }
     
      public function fc_logroblancod() {
         
      //  $resultado = $this->m_sincroarriba->fm_logroblancod();
       
     }
     
      public function fc_logmovrec10d() {
         
      //       $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarribad/fc_logmovrec10d?pdoccogestor='.$this->session->userdata('documento'));
      // $listarfiducias = json_decode($listarbac);

      // foreach ($listarfiducias as $fiducia)
      // {
	
      //    $this->m_sincroarriba->fm_logmovrec10d($fiducia);

      // } 

      echo json_encode('ok');
       
     }
     
     public function fc_logmovrec11d() {
         
      //        $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarribad/fc_logmovrec11d?pdoccogestor='.$this->session->userdata('documento'));
      // $listarfiducias = json_decode($listarbac);

      // foreach ($listarfiducias as $fiducia)
      // {
	
      //    $this->m_sincroarriba->fm_logmovrec11d($fiducia);

      // } 

      echo json_encode('ok');
       
     }
     public function fc_logmovrec12d() {
         
      //        $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarribad/fc_logmovrec12d?pdoccogestor='.$this->session->userdata('documento'));
      // $listarfiducias = json_decode($listarbac);

      // foreach ($listarfiducias as $fiducia)
      // {
	
      //    $this->m_sincroarriba->fm_logmovrec12d($fiducia);

      // } 

      echo json_encode('ok');
       
     }
     public function fc_logmovrec13d() {
         
      //      $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarribad/fc_logmovrec13d?pdoccogestor='.$this->session->userdata('documento'));
      // $listarfiducias = json_decode($listarbac);

      // foreach ($listarfiducias as $fiducia)
      // {
	
      //    $this->m_sincroarriba->fm_logmovrec13d($fiducia);

      // } 

      echo json_encode('ok');
       
     }
     public function fc_logmovrec2d() {
         
      //      $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarribad/fc_logmovrec2d?pdoccogestor='.$this->session->userdata('documento'));
      // $listarfiducias = json_decode($listarbac);

      // foreach ($listarfiducias as $fiducia)
      // {
	
      //    $this->m_sincroarriba->fm_logmovrec2d($fiducia);

      // } 

      echo json_encode('ok');
       
     }
     public function fc_logmovrec22d() {
         
      //       $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarribad/fc_logmovrec22d?pdoccogestor='.$this->session->userdata('documento'));
      // $listarfiducias = json_decode($listarbac);

      // foreach ($listarfiducias as $fiducia)
      // {
	
      //    $this->m_sincroarriba->fm_logmovrec22d($fiducia);

      // } 

      echo json_encode('ok');
       
     }
     public function fc_logmovrec23d() {
         
      //      $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarribad/fc_logmovrec23d?pdoccogestor='.$this->session->userdata('documento'));
      // $listarfiducias = json_decode($listarbac);

      // foreach ($listarfiducias as $fiducia)
      // {
	
      //    $this->m_sincroarriba->fm_logmovrec23d($fiducia);

      // } 

      echo json_encode('ok');
       
     }
     public function fc_logmovrec3d() {
         
      //      $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarribad/fc_logmovrec3d?pdoccogestor='.$this->session->userdata('documento'));
      // $listarfiducias = json_decode($listarbac);

      // foreach ($listarfiducias as $fiducia)
      // {
	
      //    $this->m_sincroarriba->fm_logmovrec3d($fiducia);

      // } 

      echo json_encode('ok');
       
     }
     public function fc_logmovrec5d() {
         
      //      $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarribad/fc_logmovrec5d?pdoccogestor='.$this->session->userdata('documento'));
      // $listarfiducias = json_decode($listarbac);

      // foreach ($listarfiducias as $fiducia)
      // {
	
      //    $this->m_sincroarriba->fm_logmovrec5d($fiducia);

      // } 

      echo json_encode('ok');
       
     }
     public function fc_logmovrec7d() {
         
      //        $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarribad/fc_logmovrec7d?pdoccogestor='.$this->session->userdata('documento'));
      // $listarfiducias = json_decode($listarbac);

      // foreach ($listarfiducias as $fiducia)
      // {
	
      //    $this->m_sincroarriba->fm_logmovrec7d($fiducia);

      // } 

      echo json_encode('ok');
       
     }
     public function fc_logmovrec8d() {
         
      //       $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarribad/fc_logmovrec8d?pdoccogestor='.$this->session->userdata('documento'));
      // $listarfiducias = json_decode($listarbac);

      // foreach ($listarfiducias as $fiducia)
      // {
	
      //    $this->m_sincroarriba->fm_logmovrec8d($fiducia);

      // } 

      echo json_encode('ok');
       
     }
     public function fc_logmovrec9d() {
         
      //        $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarribad/fc_logmovrec9d?pdoccogestor='.$this->session->userdata('documento'));
      // $listarfiducias = json_decode($listarbac);

      // foreach ($listarfiducias as $fiducia)
      // {
	
      //    $this->m_sincroarriba->fm_logmovrec9d($fiducia);

      // } 

      echo json_encode('ok');
       
     }
     



     ///////////////////////////////Sincronizacion privaciones////////////////////////
     
     public function fc_sincroprivacion1d() {

      $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincronizacion_aba_sincrologro1d/fc_sincrop1?pdoccogestor='.$this->session->userdata('documento'));
      $listarfiducias = json_decode($listarbac);

      foreach ($listarfiducias as $fiducia)
      {
   
         $this->m_sincroarriba->fm_sincroprivacion1d($fiducia);

      } 

      echo json_encode('ok');
      
     // $resultado = $this->m_sincroarriba->fm_sincroprivacion1d();
    
  }
  public function fc_sincroprivacion2d() {

   $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincronizacion_aba_sincrologro1d/fc_sincrop2?pdoccogestor='.$this->session->userdata('documento'));
   $listarfiducias = json_decode($listarbac);

   foreach ($listarfiducias as $fiducia)
   {

      $this->m_sincroarriba->fm_sincroprivacion2d($fiducia);

   } 

   echo json_encode('ok');
      
   //  $resultado = $this->m_sincroarriba->fm_sincroprivacion2d();
    
  }
  public function fc_sincroprivacion3d() {

   $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincronizacion_aba_sincrologro1d/fc_sincrop3?pdoccogestor='.$this->session->userdata('documento'));
   $listarfiducias = json_decode($listarbac);

   foreach ($listarfiducias as $fiducia)
   {

      $this->m_sincroarriba->fm_sincroprivacion3d($fiducia);

   } 

   echo json_encode('ok');
      
   //  $resultado = $this->m_sincroarriba->fm_sincroprivacion3d();
    
  }
  public function fc_sincroprivacion4d() {

   $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincronizacion_aba_sincrologro1d/fc_sincrop4?pdoccogestor='.$this->session->userdata('documento'));
   $listarfiducias = json_decode($listarbac);

   foreach ($listarfiducias as $fiducia)
   {

      $this->m_sincroarriba->fm_sincroprivacion4d($fiducia);

   } 

   echo json_encode('ok');
      
   //  $resultado = $this->m_sincroarriba->fm_sincroprivacion4d();
    
  }
  public function fc_sincroprivacion5d() {

   $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincronizacion_aba_sincrologro1d/fc_sincrop5?pdoccogestor='.$this->session->userdata('documento'));
   $listarfiducias = json_decode($listarbac);

   foreach ($listarfiducias as $fiducia)
   {

      $this->m_sincroarriba->fm_sincroprivacion5d($fiducia);

   } 

   echo json_encode('ok');
      
   //  $resultado = $this->m_sincroarriba->fm_sincroprivacion5d();
    
  }
  public function fc_sincroprivacion6d() {

   $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincronizacion_aba_sincrologro1d/fc_sincrop6?pdoccogestor='.$this->session->userdata('documento'));
   $listarfiducias = json_decode($listarbac);

   foreach ($listarfiducias as $fiducia)
   {

      $this->m_sincroarriba->fm_sincroprivacion6d($fiducia);

   } 

   echo json_encode('ok');
      
    // $resultado = $this->m_sincroarriba->fm_sincroprivacion6d();
    
  }
  public function fc_sincroprivacion7d() {

   $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincronizacion_aba_sincrologro1d/fc_sincrop7?pdoccogestor='.$this->session->userdata('documento'));
   $listarfiducias = json_decode($listarbac);

   foreach ($listarfiducias as $fiducia)
   {

      $this->m_sincroarriba->fm_sincroprivacion7d($fiducia);

   } 

   echo json_encode('ok');
      
    // $resultado = $this->m_sincroarriba->fm_sincroprivacion7d();
    
  }
  public function fc_sincroprivacion8d() {

   $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincronizacion_aba_sincrologro1d/fc_sincrop8?pdoccogestor='.$this->session->userdata('documento'));
   $listarfiducias = json_decode($listarbac);

   foreach ($listarfiducias as $fiducia)
   {

      $this->m_sincroarriba->fm_sincroprivacion8d($fiducia);

   } 

   echo json_encode('ok');
      
    // $resultado = $this->m_sincroarriba->fm_sincroprivacion8d();
    
  }
  public function fc_sincroprivacion9d() {

   $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincronizacion_aba_sincrologro1d/fc_sincrop9?pdoccogestor='.$this->session->userdata('documento'));
   $listarfiducias = json_decode($listarbac);

   foreach ($listarfiducias as $fiducia)
   {

      $this->m_sincroarriba->fm_sincroprivacion9d($fiducia);

   } 

   echo json_encode('ok');
      
    // $resultado = $this->m_sincroarriba->fm_sincroprivacion9d();
    
  }
  public function fc_sincroprivacion10d() {

   $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincronizacion_aba_sincrologro1d/fc_sincrop10?pdoccogestor='.$this->session->userdata('documento'));
   $listarfiducias = json_decode($listarbac);

   foreach ($listarfiducias as $fiducia)
   {

      $this->m_sincroarriba->fm_sincroprivacion10d($fiducia);

   } 

   echo json_encode('ok');
      
     //$resultado = $this->m_sincroarriba->fm_sincroprivacion10d();
    
  }
  public function fc_sincroprivacion11d() {

   $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincronizacion_aba_sincrologro1d/fc_sincrop11?pdoccogestor='.$this->session->userdata('documento'));
   $listarfiducias = json_decode($listarbac);

   foreach ($listarfiducias as $fiducia)
   {

      $this->m_sincroarriba->fm_sincroprivacion11d($fiducia);

   } 

   echo json_encode('ok');
      
     //$resultado = $this->m_sincroarriba->fm_sincroprivacion11d();
    
  }
  public function fc_sincroprivacion12d() {

   $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincronizacion_aba_sincrologro1d/fc_sincrop12?pdoccogestor='.$this->session->userdata('documento'));
   $listarfiducias = json_decode($listarbac);

   foreach ($listarfiducias as $fiducia)
   {

      $this->m_sincroarriba->fm_sincroprivacion12d($fiducia);

   } 

   echo json_encode('ok');
      
    // $resultado = $this->m_sincroarriba->fm_sincroprivacion12d();
    
  }
  public function fc_sincroprivacion13d() {

   $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincronizacion_aba_sincrologro1d/fc_sincrop13?pdoccogestor='.$this->session->userdata('documento'));
   $listarfiducias = json_decode($listarbac);

   foreach ($listarfiducias as $fiducia)
   {

      $this->m_sincroarriba->fm_sincroprivacion13d($fiducia);

   } 

   echo json_encode('ok');
      
     //$resultado = $this->m_sincroarriba->fm_sincroprivacion13d();
    
  }
  public function fc_sincroprivacion14d() {

   $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincronizacion_aba_sincrologro1d/fc_sincrop14?pdoccogestor='.$this->session->userdata('documento'));
   $listarfiducias = json_decode($listarbac);

   foreach ($listarfiducias as $fiducia)
   {

      $this->m_sincroarriba->fm_sincroprivacion14d($fiducia);

   } 

   echo json_encode('ok');
      
     //$resultado = $this->m_sincroarriba->fm_sincroprivacion14d();
    
  }
  public function fc_sincroprivacion15d() {

   $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincronizacion_aba_sincrologro1d/fc_sincrop15?pdoccogestor='.$this->session->userdata('documento'));
   $listarfiducias = json_decode($listarbac);

   foreach ($listarfiducias as $fiducia)
   {

      $this->m_sincroarriba->fm_sincroprivacion15d($fiducia);

   } 

   echo json_encode('ok');
      
     //$resultado = $this->m_sincroarriba->fm_sincroprivacion15d();
    
  }
  public function fc_sincroprivacion16d() {

   $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincronizacion_aba_sincrologro1d/fc_sincrop16?pdoccogestor='.$this->session->userdata('documento'));
   $listarfiducias = json_decode($listarbac);

   foreach ($listarfiducias as $fiducia)
   {

      $this->m_sincroarriba->fm_sincroprivacion16d($fiducia);

   } 

   echo json_encode('ok');
      
    // $resultado = $this->m_sincroarriba->fm_sincroprivacion16d();
    
  }
          
     public function fc_borrarinactivos() {
         
        $resultado = $this->m_sincroarriba->fm_borrarinactivos();
       
     }
     /////////////////////Inicia Sincronizacion abajo Estacion Cero////////////////
 

   public function fc_hfprocedenciad() {
      $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarribad/fc_hfprocedenciad?pdoccogestor='.$this->session->userdata('documento'));
      $listarfiducias = json_decode($listarbac);

      foreach ($listarfiducias as $fiducia)
      {
	
         $this->m_sincroarriba->fm_hfprocedenciad($fiducia);

      } 

      echo json_encode('ok');
     }
     public function fc_hflogrosd() {
         $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarribad/fc_hflogrosd?pdoccogestor='.$this->session->userdata('documento'));
      $listarfiducias = json_decode($listarbac);

      foreach ($listarfiducias as $fiducia)
      {
	
         $this->m_sincroarriba->fm_hflogrosd($fiducia);

      } 

      echo json_encode('ok');
     }
     public function fc_hfcostumbresd() {
        $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarribad/fc_hfcostumbresd?pdoccogestor='.$this->session->userdata('documento'));
      $listarfiducias = json_decode($listarbac);

      foreach ($listarfiducias as $fiducia)
      {
	
         $this->m_sincroarriba->fm_hfcostumbresd($fiducia);

      } 

      echo json_encode('ok');
     }
     public function fc_hfconformaciond() {
        $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarribad/fc_hfconformaciond?pdoccogestor='.$this->session->userdata('documento'));
      $listarfiducias = json_decode($listarbac);

      foreach ($listarfiducias as $fiducia)
      {
	
         $this->m_sincroarriba->fm_hfconformaciond($fiducia);

      } 

      echo json_encode('ok');
     }
     public function fc_facttscual1d() {
        $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarribad/fc_facttscual1d?pdoccogestor='.$this->session->userdata('documento'));
      $listarfiducias = json_decode($listarbac);

      foreach ($listarfiducias as $fiducia)
      {
	
         $this->m_sincroarriba->fm_facttscual1d($fiducia);

      } 

      echo json_encode('ok');
     }
     public function fc_facttfcual1d() {
        $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarribad/fc_facttfcual1d?pdoccogestor='.$this->session->userdata('documento'));
      $listarfiducias = json_decode($listarbac);

      foreach ($listarfiducias as $fiducia)
      {
	
         $this->m_sincroarriba->fm_facttfcual1d($fiducia);

      } 

      echo json_encode('ok');
     }
     public function fc_facttecual1d() {
         $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarribad/fc_facttecual1d?pdoccogestor='.$this->session->userdata('documento'));
      $listarfiducias = json_decode($listarbac);

      foreach ($listarfiducias as $fiducia)
      {
	
         $this->m_sincroarriba->fm_facttecual1d($fiducia);

      } 

      echo json_encode('ok');
     }
     public function fc_factiscual1d() {
        $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarribad/fc_factiscual1d?pdoccogestor='.$this->session->userdata('documento'));
      $listarfiducias = json_decode($listarbac);

      foreach ($listarfiducias as $fiducia)
      {
	
         $this->m_sincroarriba->fm_factiscual1d($fiducia);

      } 

      echo json_encode('ok');
     }
     public function fc_factifcual1d() {
        $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarribad/fc_factifcual1d?pdoccogestor='.$this->session->userdata('documento'));
      $listarfiducias = json_decode($listarbac);

      foreach ($listarfiducias as $fiducia)
      {
	
         $this->m_sincroarriba->fm_factifcual1d($fiducia);

      } 

      echo json_encode('ok');
     }
     public function fc_factiecual1d() {
         $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarribad/fc_factiecual1d?pdoccogestor='.$this->session->userdata('documento'));
      $listarfiducias = json_decode($listarbac);

      foreach ($listarfiducias as $fiducia)
      {
	
         $this->m_sincroarriba->fm_factiecual1d($fiducia);

      } 

      echo json_encode('ok');
     }
     public function fc_estacioncerocead() {
        $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarribad/fc_estacioncerocead?pdoccogestor='.$this->session->userdata('documento'));
      $listarfiducias = json_decode($listarbac);

      foreach ($listarfiducias as $fiducia)
      {
	
         $this->m_sincroarriba->fm_estacioncerocead($fiducia);

      } 

      echo json_encode('ok');
     }
     public function fc_crisisscual1d() {
         $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarribad/fc_crisisscual1d?pdoccogestor='.$this->session->userdata('documento'));
      $listarfiducias = json_decode($listarbac);

      foreach ($listarfiducias as $fiducia)
      {
	
         $this->m_sincroarriba->fm_crisisscual1d($fiducia);

      } 

      echo json_encode('ok');
     }
     public function fc_crisisfcual1d() {
        $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarribad/fc_crisisfcual1d?pdoccogestor='.$this->session->userdata('documento'));
      $listarfiducias = json_decode($listarbac);

      foreach ($listarfiducias as $fiducia)
      {
	
         $this->m_sincroarriba->fm_crisisfcual1d($fiducia);

      } 

      echo json_encode('ok');
     }
     public function fc_crisisecual1d() {
        $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarribad/fc_crisisecual1d?pdoccogestor='.$this->session->userdata('documento'));
      $listarfiducias = json_decode($listarbac);

      foreach ($listarfiducias as $fiducia)
      {
	
         $this->m_sincroarriba->fm_crisisecual1d($fiducia);

      } 

      echo json_encode('ok');
     }
     public function fc_crearmetasd() {
         $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarribad/fc_crearmetasd?pdoccogestor='.$this->session->userdata('documento'));
      $listarfiducias = json_decode($listarbac);

      foreach ($listarfiducias as $fiducia)
      {
	
         $this->m_sincroarriba->fm_crearmetasd($fiducia);

      } 

      echo json_encode('ok');
     }
     public function fc_correspautonomiad() {
        $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarribad/fc_correspautonomiad?pdoccogestor='.$this->session->userdata('documento'));
      $listarfiducias = json_decode($listarbac);

      foreach ($listarfiducias as $fiducia)
      {
	
         $this->m_sincroarriba->fm_correspautonomiad($fiducia);

      } 

      echo json_encode('ok');
     }
     public function fc_eerfd() {
       $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarribad/fc_eerfd?pdoccogestor='.$this->session->userdata('documento'));
      $listarfiducias = json_decode($listarbac);

      foreach ($listarfiducias as $fiducia)
      {
	
         $this->m_sincroarriba->fm_eerfd($fiducia);

      } 

      echo json_encode('ok');
     }
     public function fc_avanceprocesod() {
       $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincronizacion_aba_avanceproceso/fc_aba_avanceproceso?pdoccogestor='.$this->session->userdata('documento'));
      $listarfiducias = json_decode($listarbac);

      foreach ($listarfiducias as $fiducia)
      {
	
         $this->m_sincroarriba->fm_avanceprocesod($fiducia);

      } 

      echo json_encode('ok');
     }
     public function fc_l2metasd() {
         $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarribad/fc_l2metasd?pdoccogestor='.$this->session->userdata('documento'));
      $listarfiducias = json_decode($listarbac);

      foreach ($listarfiducias as $fiducia)
      {
	
         $this->m_sincroarriba->fm_l2metasd($fiducia);

      } 

      echo json_encode('ok');
     }
     public function fc_l2accionesd() {
         $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarribad/fc_l2accionesd?pdoccogestor='.$this->session->userdata('documento'));
      $listarfiducias = json_decode($listarbac);

      foreach ($listarfiducias as $fiducia)
      {
	
         $this->m_sincroarriba->fm_l2accionesd($fiducia);

      } 

      echo json_encode('ok');
     }
     public function fc_casoexitosod() {
        $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarribad/fc_casoexitosod?pdoccogestor='.$this->session->userdata('documento'));
      $listarfiducias = json_decode($listarbac);

      foreach ($listarfiducias as $fiducia)
      {
	
         $this->m_sincroarriba->fm_casoexitosod($fiducia);

      } 

      echo json_encode('ok');
     }
     public function fc_correspautonomiahistoricod() {
        $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarribad/fc_correspautonomiahistoricod?pdoccogestor='.$this->session->userdata('documento'));
      $listarfiducias = json_decode($listarbac);

      foreach ($listarfiducias as $fiducia)
      {
	
         $this->m_sincroarriba->fm_correspautonomiahistoricod($fiducia);

      } 

      echo json_encode('ok');
     }
     
     
     /////////////////////Fin Sincronizacion Abajo Estacion Cero//////////////////
     public function fc_logromovimientocfd() {
      //   $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarribad/fc_logromovimientocfd?pdoccogestor='.$this->session->userdata('documento'));
      // $listarfiducias = json_decode($listarbac);

      // foreach ($listarfiducias as $fiducia)
      // {
	
      //    $this->m_sincroarriba->fm_logromovimientocfd($fiducia);

      // } 

      echo json_encode('ok');
     }
     
     public function fc_protocoloinicioestaciond() {
         
        $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarribad/fc_aba_protocoloinicioestacion?pdoccogestor='.$this->session->userdata('documento'));
        $listarfiducias = json_decode($listarbac);
  
        foreach ($listarfiducias as $fiducia)
        {
     
           $this->m_sincroarriba->fm_protocoloinicioestaciond($fiducia);
  
        } 
  
        echo json_encode('ok');
       
     }
     
     public function fc_condicionnecesariad() {
        $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarribad/fc_condicionnecesariad?pdoccogestor='.$this->session->userdata('documento'));
      $listarfiducias = json_decode($listarbac);

      foreach ($listarfiducias as $fiducia)
      {
	
         $this->m_sincroarriba->fm_condicionnecesariad($fiducia);

      } 

      echo json_encode('ok');
     }
     
     public function fc_movlogsisbend() {
      $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarribad/fc_movlogsisbend?pdoccogestor='.$this->session->userdata('documento'));
      $listarfiducias = json_decode($listarbac);

      foreach ($listarfiducias as $fiducia)
      {
	
         $this->m_sincroarriba->fm_movlogsisbend($fiducia);

      } 

      echo json_encode('ok');
      
   }
     
   public function fc_madresadolecentesd() {
      $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarribad/fc_madresadolecentesd?pdoccogestor='.$this->session->userdata('documento'));
      $listarfiducias = json_decode($listarbac);

      foreach ($listarfiducias as $fiducia)
      {
	
         $this->m_sincroarriba->fm_madresadolecentesd($fiducia);

      } 

      echo json_encode('ok');
      
   } 

   public function fc_principalintegrantes_intermediad() {
      $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarribad/fc_principalintegrantes_intermediad?pdoccogestor='.$this->session->userdata('documento'));
      $listarfiducias = json_decode($listarbac);

      foreach ($listarfiducias as $fiducia)
      {
	
         $this->m_sincroarriba->fm_principalintegrantes_intermediad($fiducia);

      } 

      echo json_encode('ok');
      
   } 
        
       
//Elimina folios sobrantes reasignacion
public function fc_foliossobrantesreasigna(){
   $this->m_sincroarriba->fm_foliossobrantesreasigna();
   echo json_encode('ok');
}

public function fc_actualizapphpgard() {

   $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarriba/fc_actualizapphpgard?pdoccogestor='.$this->session->userdata('documento'));
   $listarfiducias = json_decode($listarbac);

   foreach ($listarfiducias as $fiducia)
   {

      $this->m_sincroarriba->fm_actualizapphpgard($fiducia);

   }   
        
        
    }


   }
    

