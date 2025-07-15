<?php

class M_condicionnec extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    //esta funcion inserta los registros de cada paso realizado
    public function fm_condicionnec($mfolio,$midestacion) {
        $this->db->query('call spcondicionnecesaria('.$mfolio.','.$midestacion.');');
    }   
    
       
}      
