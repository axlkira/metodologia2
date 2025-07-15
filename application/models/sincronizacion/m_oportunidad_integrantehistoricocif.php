<?php

class M_oportunidad_integrantehistoricocif extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    
    //esta funcion ejecuta el sp para cargar las ayudas de la pregunta
 
    public function fm_oportunidad_integrantehistoricocif()
    {
        $query = $this->db->query('SELECT idoportunidad
                                    , idintegrante
                                    , versionn
                                    , idestado
                                    , fecha_registro
                                    , fecha_actualizacion
                                    , sincro
                                    , now() as fechasincro
                                    , documento 
        FROM t_oportunidad_integrantehistorico where sincro = 3;');
        $resultado = $query->result();
        $query->next_result();
        $query->free_result();
        return $resultado;
    }

     public function updatef()
     {
         $this->db->query('UPDATE t_oportunidad_integrantehistorico 
                                                    SET sincro = 1
                                                    where sincro = 3');
     }
    
    
      
}     
