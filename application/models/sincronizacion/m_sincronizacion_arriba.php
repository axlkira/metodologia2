<?php

class M_sincronizacion_arriba extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    
    public function t11_madres_adolecentes(){$query = $this->db->query('SELECT * FROM bdprotocolo.t11_madres_adolecentes where sincro = 0;');$resultado = $query->result();$query->next_result();$query->free_result();return $resultado;}

    public function t11_madres_adolecentes_update(){
     $this->db->query('UPDATE bdprotocolo.t11_madres_adolecentes SET sincro = 1 WHERE sincro = 0;');
 }
      
}      