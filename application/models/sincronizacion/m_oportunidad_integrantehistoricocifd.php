<?php

class M_oportunidad_integrantehistoricocifd extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    
    //esta funcion ejecuta el sp para cargar las ayudas de la pregunta
    public function fm_oportunidad_integrantehistoricocifd($fiducia)
    {
        $this->db->replace('t_oportunidad_integrantehistorico', $fiducia);        
    }

   
      
}      