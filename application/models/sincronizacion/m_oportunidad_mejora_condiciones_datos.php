<?php

class M_oportunidad_mejora_condiciones_datos extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    
    //esta funcion ejecuta el sp para cargar las ayudas de la pregunta
 
    public function fm_oportunidad_mejora_condiciones_datos(){$query = $this->db->query('SELECT * FROM bdprotocolo.t_oportunidad_mejora_condiciones_datos where sincro = 0;');$resultado = $query->result();$query->next_result();$query->free_result();return $resultado;}
    
    public function fm_oportunidad_mejora_condiciones_datos_updatef(){$this->db->query('UPDATE bdprotocolo.t_oportunidad_mejora_condiciones_datos SET sincro = 1 WHERE sincro = 0;');}
 
	public function fm_oportunidad_mejora_condiciones_datos_updatefecha(){$this->db->query('UPDATE bdprotocolo.t_oportunidad_mejora_condiciones_datos SET fechasincro = "'.date("Y-m-d H:i:s").'" WHERE sincro = 0;');} 
}     
