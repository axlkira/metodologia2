<?php

class M_crisisf extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    
    //esta funcion ejecuta el sp para cargar las ayudas de la pregunta
    public function fm_ayudas()
    {
        $query = $this->db->query('call sp3ayudas("crisisf");');//se coloca el codigo de la ayuda
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
    public function fm_actualizarpregunta($mfolio,$mcrisisfo1,$mcrisisfo2,$mcrisisfo3,$mcrisisfo4,$mcrisisfo5,$mfacttfo1,$mfacttfo2,$mfacttfo3,$mfacttfo4,$mfacttfo5,$mfacttfo6,$mfactifo1,$mfactifo2,$mfactifo3,$mcualcf,$mcualtf,$mcualif)
    {
        $this->db->query('call sp6_actualizarcapceroceaf('.$mfolio.',"'.$mcrisisfo1.'","'.$mcrisisfo2.'","'.$mcrisisfo3.'","'.$mcrisisfo4.'","'.$mcrisisfo5.'","'.$mfacttfo1.'","'.$mfacttfo2.'","'.$mfacttfo3.'","'.$mfacttfo4.'","'.$mfacttfo5.'","'.$mfacttfo6.'","'.$mfactifo1.'","'.$mfactifo2.'","'.$mfactifo3.'","'.$mcualcf.'","'.$mcualtf.'","'.$mcualif.'");');
    }    
    
    //esta funcion para guardar Desempleo 
    public function fm_insertarcrisisfcual1($mfolio,$mestacion,$mcrisisfcual1,$mcogestor)
    {
        $query = $this->db->query('call sp6_insertarcrisisfcual1('.$mfolio.',"'.$mestacion.'","'.$this->db->escape_str($mcrisisfcual1).'","'.$mcogestor.'");');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;        
    } 
    
    // Desempleo
    public function fm_traercrisisfcual1($mfolio)
    {
        $query = $this->db->query('call sp6_traercrisisfcual1('.$mfolio.');');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;        
    } 
    
}      