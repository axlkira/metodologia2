<?php

class M_inicioestacion extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    //esta funcion inserta los registros de cada paso realizado
    public function fm_inicioestacion($mfolio,$midpaso,$mestado,$mlongitud,$mlatitud,$mmensajedonde,$musuario) {
        $this->db->query('call spprotocoloinicioestacion('.$mfolio.','.$midpaso.',"'.$mestado.'","'.date("Y-m-d H:i:s").'","'.$mlongitud.'","'.$mlatitud.'","'.$mmensajedonde.'","'.$musuario.'");');
    }   
    
       
}      
