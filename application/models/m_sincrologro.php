<?php

class M_sincrologro extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    
    public function fm_sincroe($doccogestor){
        
      $dbservidor = $this->load->database('servidor', TRUE);
        
        $dbservidor->query('call sperrorsincro('.$doccogestor.');');
    }
    
    public function fm_iniciasincro($doccogestor){
        
        $dblocal = $this->load->database('default', TRUE);
       $dblocal->query('call sp3sincronizacionabajo('.$doccogestor.');'); 
    }
    
       
    public function fm_sincrologro1($doccogestor){
        
        
        $dbservidor = $this->load->database('servidor', TRUE);
        
        $dbservidor->query('call sp4sincrologro1t('.$doccogestor.');');
    }
    
    
     public function fm_sincrolocal1($doccogestor){
        $dblocal = $this->load->database('default', TRUE);
        
        $dblocal->query('call sp4logro1servidord('.$doccogestor.');');
        
        
        
  
    }
    
    
    
    
    public function fm_sincrologro2($doccogestor){
        
        
        $dbservidor = $this->load->database('servidor', TRUE);
        
        $dbservidor->query('call sp4sincrologro2t('.$doccogestor.');');
    }
    
    
     public function fm_sincrolocal2($doccogestor){
        $dblocal = $this->load->database('default', TRUE);
        
        $dblocal->query('call sp4logro2servidord('.$doccogestor.');');
        
        
        
  
    }public function fm_sincrologro3($doccogestor){
        
        
        $dbservidor = $this->load->database('servidor', TRUE);
        
        $dbservidor->query('call sp4sincrologro3t('.$doccogestor.');');
    }
    
    
     public function fm_sincrolocal3($doccogestor){
        $dblocal = $this->load->database('default', TRUE);
        
        $dblocal->query('call sp4logro3servidord('.$doccogestor.');');
        
        
        
  
    }public function fm_sincrologro4($doccogestor){
        
        
        $dbservidor = $this->load->database('servidor', TRUE);
        
        $dbservidor->query('call sp4sincrologro4t('.$doccogestor.');');
    }
    
    
     public function fm_sincrolocal4($doccogestor){
        $dblocal = $this->load->database('default', TRUE);
        
        $dblocal->query('call sp4logro4servidord('.$doccogestor.');');
        
        
        
  
    }public function fm_sincrologro5($doccogestor){
        
        
        $dbservidor = $this->load->database('servidor', TRUE);
        
        $dbservidor->query('call sp4sincrologro5t('.$doccogestor.');');
    }
    
    
     public function fm_sincrolocal5($doccogestor){
        $dblocal = $this->load->database('default', TRUE);
        
        $dblocal->query('call sp4logro5servidord('.$doccogestor.');');
        
        
        
  
    }public function fm_sincrologro6($doccogestor){
        
        
        $dbservidor = $this->load->database('servidor', TRUE);
        
        $dbservidor->query('call sp4sincrologro6t('.$doccogestor.');');
    }
    
    
     public function fm_sincrolocal6($doccogestor){
        $dblocal = $this->load->database('default', TRUE);
        
        $dblocal->query('call sp4logro6servidord('.$doccogestor.');');
        
        
        
  
    }public function fm_sincrologro7($doccogestor){
        
        
        $dbservidor = $this->load->database('servidor', TRUE);
        
        $dbservidor->query('call sp4sincrologro7t('.$doccogestor.');');
    }
    
    
     public function fm_sincrolocal7($doccogestor){
        $dblocal = $this->load->database('default', TRUE);
        
        $dblocal->query('call sp4logro7servidord('.$doccogestor.');');
        
        
        
  
    }public function fm_sincrologro8($doccogestor){
        
        
        $dbservidor = $this->load->database('servidor', TRUE);
        
        $dbservidor->query('call sp4sincrologro8t('.$doccogestor.');');
    }
    
    
     public function fm_sincrolocal8($doccogestor){
        $dblocal = $this->load->database('default', TRUE);
        
        $dblocal->query('call sp4logro8servidord('.$doccogestor.');');
        
        
        
  
    }public function fm_sincrologro9($doccogestor){
        
        
        $dbservidor = $this->load->database('servidor', TRUE);
        
        $dbservidor->query('call sp4sincrologro9t('.$doccogestor.');');
    }
    
    
     public function fm_sincrolocal9($doccogestor){
        $dblocal = $this->load->database('default', TRUE);
        
        $dblocal->query('call sp4logro9servidord('.$doccogestor.');');
        
        
        
  
    }public function fm_sincrologro10($doccogestor){
        
        
        $dbservidor = $this->load->database('servidor', TRUE);
        
        $dbservidor->query('call sp4sincrologro10t('.$doccogestor.');');
    }
    
    
     public function fm_sincrolocal10($doccogestor){
        $dblocal = $this->load->database('default', TRUE);
        
        $dblocal->query('call sp4logro10servidord('.$doccogestor.');');
        
        
        
  
    }
    
    public function fm_sincrologro11($doccogestor){
        
        
        $dbservidor = $this->load->database('servidor', TRUE);
        
        $dbservidor->query('call sp4sincrologro11t('.$doccogestor.');');
    }
    
    
     public function fm_sincrolocal11($doccogestor){
        $dblocal = $this->load->database('default', TRUE);
        
        $dblocal->query('call sp4logro11servidord('.$doccogestor.');');
        
        
        
  
    }
    public function fm_sincrologro12($doccogestor){
        
        
        $dbservidor = $this->load->database('servidor', TRUE);
        
        $dbservidor->query('call sp4sincrologro12t('.$doccogestor.');');
    }
    
    
     public function fm_sincrolocal12($doccogestor){
        $dblocal = $this->load->database('default', TRUE);
        
        $dblocal->query('call sp4logro12servidord('.$doccogestor.');');
        
        
        
  
    }
    public function fm_sincrologro13($doccogestor){
        
        
        $dbservidor = $this->load->database('servidor', TRUE);
        
        $dbservidor->query('call sp4sincrologro13t('.$doccogestor.');');
    }
    
    
     public function fm_sincrolocal13($doccogestor){
        $dblocal = $this->load->database('default', TRUE);
        
        $dblocal->query('call sp4logro13servidord('.$doccogestor.');');
        
        
        
  
    }
    public function fm_sincrologro14($doccogestor){
        
        
        $dbservidor = $this->load->database('servidor', TRUE);
        
        $dbservidor->query('call sp4sincrologro14t('.$doccogestor.');');
    }
    
    
     public function fm_sincrolocal14($doccogestor){
        $dblocal = $this->load->database('default', TRUE);
        
        $dblocal->query('call sp4logro14servidord('.$doccogestor.');');
        
        
        
  
    }
    public function fm_sincrologro15($doccogestor){
        
        
        $dbservidor = $this->load->database('servidor', TRUE);
        
        $dbservidor->query('call sp4sincrologro15t('.$doccogestor.');');
    }
    
    
     public function fm_sincrolocal15($doccogestor){
        $dblocal = $this->load->database('default', TRUE);
        
        $dblocal->query('call sp4logro15servidord('.$doccogestor.');');
        
        
        
  
    }
    public function fm_sincrologro16($doccogestor){
        
        
        $dbservidor = $this->load->database('servidor', TRUE);
        
        $dbservidor->query('call sp4sincrologro16t('.$doccogestor.');');
    }
    
    
     public function fm_sincrolocal16($doccogestor){
        $dblocal = $this->load->database('default', TRUE);
        
        $dblocal->query('call sp4logro16servidord('.$doccogestor.');');
        
        
        
  
    }
    public function fm_sincrologro17($doccogestor){
        
        
        $dbservidor = $this->load->database('servidor', TRUE);
        
        $dbservidor->query('call sp4sincrologro17t('.$doccogestor.');');
    }
    
    
     public function fm_sincrolocal17($doccogestor){
        $dblocal = $this->load->database('default', TRUE);
        
        $dblocal->query('call sp4logro17servidord('.$doccogestor.');');
        
        
        
  
    }
    public function fm_sincrologro18($doccogestor){
        
        
        $dbservidor = $this->load->database('servidor', TRUE);
        
        $dbservidor->query('call sp4sincrologro18t('.$doccogestor.');');
    }
    
    
     public function fm_sincrolocal18($doccogestor){
        $dblocal = $this->load->database('default', TRUE);
        
        $dblocal->query('call sp4logro18servidord('.$doccogestor.');');
        
        
        
  
    }
    public function fm_sincrologro19($doccogestor){
        
        
        $dbservidor = $this->load->database('servidor', TRUE);
        
        $dbservidor->query('call sp4sincrologro19t('.$doccogestor.');');
    }
    
    
     public function fm_sincrolocal19($doccogestor){
        $dblocal = $this->load->database('default', TRUE);
        
        $dblocal->query('call sp4logro19servidord('.$doccogestor.');');
        
        
        
  
    }
    public function fm_sincrologro20($doccogestor){
        
        
        $dbservidor = $this->load->database('servidor', TRUE);
        
        $dbservidor->query('call sp4sincrologro20t('.$doccogestor.');');
    }
    
    
     public function fm_sincrolocal20($doccogestor){
        $dblocal = $this->load->database('default', TRUE);
        
        $dblocal->query('call sp4logro20servidord('.$doccogestor.');');
        
        
        
  
    }
    
    public function fm_sincrologro21($doccogestor){
        
        
        $dbservidor = $this->load->database('servidor', TRUE);
        
        $dbservidor->query('call sp4sincrologro21t('.$doccogestor.');');
    }
    
    
     public function fm_sincrolocal21($doccogestor){
        $dblocal = $this->load->database('default', TRUE);
        
        $dblocal->query('call sp4logro21servidord('.$doccogestor.');');
        
        
        
  
    }public function fm_sincrologro22($doccogestor){
        
        
        $dbservidor = $this->load->database('servidor', TRUE);
        
        $dbservidor->query('call sp4sincrologro22t('.$doccogestor.');');
    }
    
    
     public function fm_sincrolocal22($doccogestor){
        $dblocal = $this->load->database('default', TRUE);
        
        $dblocal->query('call sp4logro22servidord('.$doccogestor.');');
        
        
        
  
    }public function fm_sincrologro23($doccogestor){
        
        
        $dbservidor = $this->load->database('servidor', TRUE);
        
        $dbservidor->query('call sp4sincrologro23t('.$doccogestor.');');
    }
    
    
     public function fm_sincrolocal23($doccogestor){
        $dblocal = $this->load->database('default', TRUE);
        
        $dblocal->query('call sp4logro23servidord('.$doccogestor.');');
        
        
        
  
    }public function fm_sincrologro24($doccogestor){
        
        
        $dbservidor = $this->load->database('servidor', TRUE);
        
        $dbservidor->query('call sp4sincrologro24t('.$doccogestor.');');
    }
    
    
     public function fm_sincrolocal24($doccogestor){
        $dblocal = $this->load->database('default', TRUE);
        
        $dblocal->query('call sp4logro24servidord('.$doccogestor.');');
        
        
        
  
    }public function fm_sincrologro25($doccogestor){
        
        
        $dbservidor = $this->load->database('servidor', TRUE);
        
        $dbservidor->query('call sp4sincrologro25t('.$doccogestor.');');
    }
    
    
     public function fm_sincrolocal25($doccogestor){
        $dblocal = $this->load->database('default', TRUE);
        
        $dblocal->query('call sp4logro25servidord('.$doccogestor.');');
        
        
        
  
    }public function fm_sincrologro26($doccogestor){
        
        
        $dbservidor = $this->load->database('servidor', TRUE);
        
        $dbservidor->query('call sp4sincrologro26t('.$doccogestor.');');
    }
    
    
     public function fm_sincrolocal26($doccogestor){
        $dblocal = $this->load->database('default', TRUE);
        
        $dblocal->query('call sp4logro26servidord('.$doccogestor.');');
        
        
        
  
    }public function fm_sincrologro27($doccogestor){
        
        
        $dbservidor = $this->load->database('servidor', TRUE);
        
        $dbservidor->query('call sp4sincrologro27t('.$doccogestor.');');
    }
    
    
     public function fm_sincrolocal27($doccogestor){
        $dblocal = $this->load->database('default', TRUE);
        
        $dblocal->query('call sp4logro27servidord('.$doccogestor.');');
        
        
        
  
    }public function fm_sincrologro28($doccogestor){
        
        
        $dbservidor = $this->load->database('servidor', TRUE);
        
        $dbservidor->query('call sp4sincrologro28t('.$doccogestor.');');
    }
    
    
     public function fm_sincrolocal28($doccogestor){
        $dblocal = $this->load->database('default', TRUE);
        
        $dblocal->query('call sp4logro28servidord('.$doccogestor.');');
        
        
        
  
    }public function fm_sincrologro29($doccogestor){
        
        
        $dbservidor = $this->load->database('servidor', TRUE);
        
        $dbservidor->query('call sp4sincrologro29t('.$doccogestor.');');
    }
    
    
     public function fm_sincrolocal29($doccogestor){
        $dblocal = $this->load->database('default', TRUE);
        
        $dblocal->query('call sp4logro29servidord('.$doccogestor.');');
        
        
        
  
    }public function fm_sincrologro30($doccogestor){
        
        
        $dbservidor = $this->load->database('servidor', TRUE);
        
        $dbservidor->query('call sp4sincrologro30t('.$doccogestor.');');
    }
    
    
     public function fm_sincrolocal30($doccogestor){
        $dblocal = $this->load->database('default', TRUE);
        
        $dblocal->query('call sp4logro30servidord('.$doccogestor.');');
        
        
        
  
    }
    
    public function fm_sincrologro31($doccogestor){
        
        
        $dbservidor = $this->load->database('servidor', TRUE);
        
        $dbservidor->query('call sp4sincrologro31t('.$doccogestor.');');
    }
    
    
     public function fm_sincrolocal31($doccogestor){
        $dblocal = $this->load->database('default', TRUE);
        
        $dblocal->query('call sp4logro31servidord('.$doccogestor.');');
        
        
        
  
    }
    public function fm_sincrologro32($doccogestor){
        
        
        $dbservidor = $this->load->database('servidor', TRUE);
        
        $dbservidor->query('call sp4sincrologro32t('.$doccogestor.');');
    }
    
    
     public function fm_sincrolocal32($doccogestor){
        $dblocal = $this->load->database('default', TRUE);
        
        $dblocal->query('call sp4logro32servidord('.$doccogestor.');');
        
        
        
  
    }
    public function fm_sincrologro33($doccogestor){
        
        
        $dbservidor = $this->load->database('servidor', TRUE);
        
        $dbservidor->query('call sp4sincrologro33t('.$doccogestor.');');
    }
    
    
     public function fm_sincrolocal33($doccogestor){
        $dblocal = $this->load->database('default', TRUE);
        
        $dblocal->query('call sp4logro33servidord('.$doccogestor.');');
        
        
        
  
    }
    public function fm_sincrologro34($doccogestor){
        
        
        $dbservidor = $this->load->database('servidor', TRUE);
        
        $dbservidor->query('call sp4sincrologro34t('.$doccogestor.');');
    }
    
    
     public function fm_sincrolocal34($doccogestor){
        $dblocal = $this->load->database('default', TRUE);
        
        $dblocal->query('call sp4logro34servidord('.$doccogestor.');');
        
        
        
  
    }
    public function fm_sincrologro35($doccogestor){
        
        
        $dbservidor = $this->load->database('servidor', TRUE);
        
        $dbservidor->query('call sp4sincrologro35t('.$doccogestor.');');
    }
    
    
     public function fm_sincrolocal35($doccogestor){
        $dblocal = $this->load->database('default', TRUE);
        
        $dblocal->query('call sp4logro35servidord('.$doccogestor.');');
        
        
        
  
    }
    public function fm_sincrologro36($doccogestor){
        
        
        $dbservidor = $this->load->database('servidor', TRUE);
        
        $dbservidor->query('call sp4sincrologro36t('.$doccogestor.');');
    }
    
    
     public function fm_sincrolocal36($doccogestor){
        $dblocal = $this->load->database('default', TRUE);
        
        $dblocal->query('call sp4logro36servidord('.$doccogestor.');');
        
        
        
  
    }
    public function fm_sincrologro37($doccogestor){
        
        
        $dbservidor = $this->load->database('servidor', TRUE);
        
        $dbservidor->query('call sp4sincrologro37t('.$doccogestor.');');
    }
    
    
     public function fm_sincrolocal37($doccogestor){
        $dblocal = $this->load->database('default', TRUE);
        
        $dblocal->query('call sp4logro37servidord('.$doccogestor.');');
        
        
        
  
    }
    public function fm_sincrologro38($doccogestor){
        
        
        $dbservidor = $this->load->database('servidor', TRUE);
        
        $dbservidor->query('call sp4sincrologro38t('.$doccogestor.');');
    }
    
    
     public function fm_sincrolocal38($doccogestor){
        $dblocal = $this->load->database('default', TRUE);
        
        $dblocal->query('call sp4logro38servidord('.$doccogestor.');');
        
        
        
  
    }
    public function fm_sincrologro39($doccogestor){
        
        
        $dbservidor = $this->load->database('servidor', TRUE);
        
        $dbservidor->query('call sp4sincrologro39t('.$doccogestor.');');
    }
    
    
     public function fm_sincrolocal39($doccogestor){
        $dblocal = $this->load->database('default', TRUE);
        
        $dblocal->query('call sp4logro39servidord('.$doccogestor.');');
        
        
        
  
    }
    public function fm_sincrologro40($doccogestor){
        
        
        $dbservidor = $this->load->database('servidor', TRUE);
        
        $dbservidor->query('call sp4sincrologro40t('.$doccogestor.');');
    }
    
    
     public function fm_sincrolocal40($doccogestor){
        $dblocal = $this->load->database('default', TRUE);
        
        $dblocal->query('call sp4logro40servidord('.$doccogestor.');');
        
        
        
  
    }
    public function fm_sincrologro41($doccogestor){
        
        
        $dbservidor = $this->load->database('servidor', TRUE);
        
        $dbservidor->query('call sp4sincrologro41t('.$doccogestor.');');
    }
    
    
     public function fm_sincrolocal41($doccogestor){
        $dblocal = $this->load->database('default', TRUE);
        
        $dblocal->query('call sp4logro41servidord('.$doccogestor.');');
        
        
        
  
    }
    
    
    
   
    
       
}      