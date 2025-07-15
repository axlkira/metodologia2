<?php

class M_crisiss extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    
    //esta funcion ejecuta el sp para cargar las ayudas de la pregunta
    public function fm_ayudas()
    {
        $query = $this->db->query('call sp3ayudas("crisiss");');//se coloca el codigo de la ayuda
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;        
    }

    //esta funcion ejecuta el sp para cargar los datos generales
    public function fm_cargardatosgenerales($mfolio)
    {
        $query = $this->db->query('call sp3cargardatosgenerales('.$mfolio.',11);');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;        
    }    

    //esta funcion ejecuta el sp para cargar si ya tiene respuesta la pregunta
    public function fm_buscarpregunta($mfolio)
    {
        $query = $this->db->query('call sp6_buscarcapcerocea('.$mfolio.');');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;        
    }    
    
    
    //esta funcion actualiza
    public function fm_actualizarpregunta($mfolio,$mcrisisso1,$mcrisisso2,$mcrisisso3,$mcrisisso4,$mcrisisso5,$mfacttso1,$mfacttso2,$mfacttso3,$mfactiso1,$mfactiso2,$mfactiso3,$mcualcs,$mcualts,$mcualis)
    {
        $this->db->query('call sp6_actualizarcapcerocsa('.$mfolio.',"'.$mcrisisso1.'","'.$mcrisisso2.'","'.$mcrisisso3.'","'.$mcrisisso4.'","'.$mcrisisso5.'","'.$mfacttso1.'","'.$mfacttso2.'","'.$mfacttso3.'","'.$mfactiso1.'","'.$mfactiso2.'","'.$mfactiso3.'","'.$mcualcs.'","'.$mcualts.'","'.$mcualis.'");');
    }    
    
    //esta funcion para guardar Desempleo 
    public function fm_insertarcrisisscual1($mfolio,$mestacion,$mcrisisscual1,$mcogestor)
    {
        $query = $this->db->query('call sp6_insertarcrisisscual1('.$mfolio.',"'.$mestacion.'","'.$this->db->escape_str($mcrisisscual1).'","'.$mcogestor.'");');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;        
    } 
    
    // Desempleo
    public function fm_traercrisisscual1($mfolio)
    {
        $query = $this->db->query('call sp6_traercrisisscual1('.$mfolio.');');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;        
    } 
    
    
}      