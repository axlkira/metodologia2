<?php

class M_sincroprivacion extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    
   
    
    public function fm_sincroprivacion1($doccogestor){
        
        
        $dbservidor = $this->load->database('servidor', TRUE);
        
        $dbservidor->query('call sp4sincroprivacion1t('.$doccogestor.');');
    }
    
    
     public function fm_sincrolocal1($doccogestor){
        $dblocal = $this->load->database('default', TRUE);
        
        $dblocal->query('call sp5privacion1servidord('.$doccogestor.');');
        
        
    }
    
    public function fm_sincroprivacion2($doccogestor){
        
        
        $dbservidor = $this->load->database('servidor', TRUE);
        
        $dbservidor->query('call sp4sincroprivacion2t('.$doccogestor.');');
    }
    
    
     public function fm_sincrolocal2($doccogestor){
        $dblocal = $this->load->database('default', TRUE);
        
        $dblocal->query('call sp5privacion2servidord('.$doccogestor.');');
        
        
        
  
    }public function fm_sincroprivacion3($doccogestor){
        
        
        $dbservidor = $this->load->database('servidor', TRUE);
        
        $dbservidor->query('call sp4sincroprivacion3t('.$doccogestor.');');
    }
    
    
     public function fm_sincrolocal3($doccogestor){
        $dblocal = $this->load->database('default', TRUE);
        
        $dblocal->query('call sp5privacion3servidord('.$doccogestor.');');
        
        
        
  
    }public function fm_sincroprivacion4($doccogestor){
        
        
        $dbservidor = $this->load->database('servidor', TRUE);
        
        $dbservidor->query('call sp4sincroprivacion4t('.$doccogestor.');');
    }
    
    
     public function fm_sincrolocal4($doccogestor){
        $dblocal = $this->load->database('default', TRUE);
        
        $dblocal->query('call sp5privacion4servidord('.$doccogestor.');');
        
        
        
  
    }public function fm_sincroprivacion5($doccogestor){
        
        
        $dbservidor = $this->load->database('servidor', TRUE);
        
        $dbservidor->query('call sp4sincroprivacion5t('.$doccogestor.');');
    }
    
    
     public function fm_sincrolocal5($doccogestor){
        $dblocal = $this->load->database('default', TRUE);
        
        $dblocal->query('call sp5privacion5servidord('.$doccogestor.');');
        
        
        
  
    }public function fm_sincroprivacion6($doccogestor){
        
        
        $dbservidor = $this->load->database('servidor', TRUE);
        
        $dbservidor->query('call sp4sincroprivacion6t('.$doccogestor.');');
    }
    
    
     public function fm_sincrolocal6($doccogestor){
        $dblocal = $this->load->database('default', TRUE);
        
        $dblocal->query('call sp5privacion6servidord('.$doccogestor.');');
        
        
        
  
    }public function fm_sincroprivacion7($doccogestor){
        
        
        $dbservidor = $this->load->database('servidor', TRUE);
        
        $dbservidor->query('call sp4sincroprivacion7t('.$doccogestor.');');
    }
    
    
     public function fm_sincrolocal7($doccogestor){
        $dblocal = $this->load->database('default', TRUE);
        
        $dblocal->query('call sp5privacion7servidord('.$doccogestor.');');
        
        
        
  
    }public function fm_sincroprivacion8($doccogestor){
        
        
        $dbservidor = $this->load->database('servidor', TRUE);
        
        $dbservidor->query('call sp4sincroprivacion8t('.$doccogestor.');');
    }
    
    
     public function fm_sincrolocal8($doccogestor){
        $dblocal = $this->load->database('default', TRUE);
        
        $dblocal->query('call sp5privacion8servidord('.$doccogestor.');');
        
        
        
  
    }public function fm_sincroprivacion9($doccogestor){
        
        
        $dbservidor = $this->load->database('servidor', TRUE);
        
        $dbservidor->query('call sp4sincroprivacion9t('.$doccogestor.');');
    }
    
    
     public function fm_sincrolocal9($doccogestor){
        $dblocal = $this->load->database('default', TRUE);
        
        $dblocal->query('call sp5privacion9servidord('.$doccogestor.');');
        
        
        
  
    }public function fm_sincroprivacion10($doccogestor){
        
        
        $dbservidor = $this->load->database('servidor', TRUE);
        
        $dbservidor->query('call sp4sincroprivacion10t('.$doccogestor.');');
    }
    
    
     public function fm_sincrolocal10($doccogestor){
        $dblocal = $this->load->database('default', TRUE);
        
        $dblocal->query('call sp5privacion10servidord('.$doccogestor.');');
        
        
        
  
    }
    
    public function fm_sincroprivacion11($doccogestor){
        
        
        $dbservidor = $this->load->database('servidor', TRUE);
        
        $dbservidor->query('call sp4sincroprivacion11t('.$doccogestor.');');
    }
    
    
     public function fm_sincrolocal11($doccogestor){
        $dblocal = $this->load->database('default', TRUE);
        
        $dblocal->query('call sp5privacion11servidord('.$doccogestor.');');
        
        
        
  
    }
    public function fm_sincroprivacion12($doccogestor){
        
        
        $dbservidor = $this->load->database('servidor', TRUE);
        
        $dbservidor->query('call sp4sincroprivacion12t('.$doccogestor.');');
    }
    
    
     public function fm_sincrolocal12($doccogestor){
        $dblocal = $this->load->database('default', TRUE);
        
        $dblocal->query('call sp5privacion12servidord('.$doccogestor.');');
        
        
        
  
    }
    public function fm_sincroprivacion13($doccogestor){
        
        
        $dbservidor = $this->load->database('servidor', TRUE);
        
        $dbservidor->query('call sp4sincroprivacion13t('.$doccogestor.');');
    }
    
    
     public function fm_sincrolocal13($doccogestor){
        $dblocal = $this->load->database('default', TRUE);
        
        $dblocal->query('call sp5privacion13servidord('.$doccogestor.');');
        
        
        
  
    }
    public function fm_sincroprivacion14($doccogestor){
        
        
        $dbservidor = $this->load->database('servidor', TRUE);
        
        $dbservidor->query('call sp4sincroprivacion14t('.$doccogestor.');');
    }
    
    
     public function fm_sincrolocal14($doccogestor){
        $dblocal = $this->load->database('default', TRUE);
        
        $dblocal->query('call sp5privacion14servidord('.$doccogestor.');');
        
        
        
  
    }
    public function fm_sincroprivacion15($doccogestor){
        
        
        $dbservidor = $this->load->database('servidor', TRUE);
        
        $dbservidor->query('call sp4sincroprivacion15t('.$doccogestor.');');
    }
    
    
     public function fm_sincrolocal15($doccogestor){
        $dblocal = $this->load->database('default', TRUE);
        
        $dblocal->query('call sp5privacion15servidord('.$doccogestor.');');
        
        
        
  
    }
    public function fm_sincroprivacion16($doccogestor){
        
        
        $dbservidor = $this->load->database('servidor', TRUE);
        
        $dbservidor->query('call sp4sincroprivacion16t('.$doccogestor.');');
    }
    
    
     public function fm_sincrolocal16($doccogestor){
        $dblocal = $this->load->database('default', TRUE);
        
        $dblocal->query('call sp5privacion16servidord('.$doccogestor.');');
   
    }
    
     public function fm_sincroipm($doccogestor){
        
        
        $dbservidor = $this->load->database('servidor', TRUE);
        
        $dbservidor->query('call sp4sincroipmt('.$doccogestor.');');
    }
    
    
     public function fm_sincrolocalipm($doccogestor){
        $dblocal = $this->load->database('default', TRUE);
        
        $dblocal->query('call sp5ipmservidord('.$doccogestor.');');
        
        
        
  
    }
   
   
    
    
    
   
    
       
}      