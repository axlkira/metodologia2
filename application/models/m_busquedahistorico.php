<?php

class M_busquedahistorico extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    //esta funcion se encarga de enlistar los datos que se traeran a un select
    public function fm_listartabla($midcobertura,$mfolio,$mestado) //ok
    {        
        $query = $this->db->query('call splistartabla("'.$midcobertura.'","'.$mfolio.'","'.$mestado.'");');//se llama por procedimiento l almacenado
        $resultado = $query->result();
        $query->next_result(); // Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); // Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;
    } 
    
    public function fm_listarestado() //ok
    {        
        $query = $this->db->query('call splistarestado();');//se llama por procedimiento l almacenado
        $resultado = $query->result();
        $query->next_result(); // Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); // Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;
    }

    public function fm_numerodefolios() //ok
    {        
        $query = $this->db->query('call sp99numerofolio();');//se llama por procedimiento l almacenado
        $resultado = $query->result();
        $query->next_result(); // Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); // Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;
    }    
    
    public function fm_sincronizar($midcobertura) //ok
    {        
        $this->db->query('call sp3sincronizar('.$midcobertura.');');//se llama por procedimiento l almacenado

    }     
}      