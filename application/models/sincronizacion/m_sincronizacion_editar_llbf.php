<?php

class M_sincronizacion_editar_llbf extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    
    //esta funcion ejecuta el sp para cargar las ayudas de la pregunta
    public function fm_sin_editar_llbf($folio, $editar_llbf)
    {
        $query = $this->db->query('call sp3sincronizacioneditar_llbf('.$folio.', '.$editar_llbf.');');//se coloca el codigo de la ayuda
        $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
       // return $resultado;        
    }
      
}      