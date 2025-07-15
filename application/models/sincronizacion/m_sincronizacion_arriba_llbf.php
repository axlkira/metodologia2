<?php

class M_sincronizacion_arriba_llbf extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    
    public function t_historicoestacionestadoeditar_llbf(){
        $query = $this->db->query('SELECT * FROM bdprotocolo.t_historicoestacionestadoeditar_llbf');$resultado = $query->result();$query->next_result();$query->free_result();return $resultado;
    }
    
      
}      