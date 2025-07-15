<?php

class M_sincronizacion_aba_protocoloinicioestacionl extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    
    //esta funcion ejecuta el sp para cargar las ayudas de la pregunta
    public function fm_aba_protocoloinicioestacion($folio,$idpaso,$estado,$fecharegistro,$longitud,$latitud,$mensajedondeestoy,$usuario,$sincro)
    {
        $query = $this->db->query('call sp3sincronizacioninicioestaciond('.$folio.', '.$idpaso.', '.$estado.', "'.$fecharegistro.'", "'.$longitud.'", "'.$latitud.'", "'.$mensajedondeestoy.'", "'.$usuario.'", '.$sincro.');');//se coloca el codigo de la ayuda
        $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
       // return $resultado;        
    }
      
}      