<?php

class M_crisise extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    
    //esta funcion ejecuta el sp para cargar las ayudas de la pregunta
    public function fm_ayudas()
    {
        $query = $this->db->query('call sp3ayudas("crisise");');//se coloca el codigo de la ayuda
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
    public function fm_actualizarpregunta($mfolio,$mcrisiseo1,$mcrisiseo2,$mcrisiseo3,$mcrisiseo4,$mcrisiseo5,$mcrisiseo6,$mfactteo1,$mfactteo2,$mfactteo3,$mfactteo4,$mfactteo5,$mfactteo6,$mfactieo1,$mfactieo2,$mfactieo3,$mfactieo4,$mfactieo5,$mfactieo6,$mcualce,$mcualte,$mcualie)
    {
        $this->db->query('call sp6_actualizarcapcerocea('.$mfolio.',"'.$mcrisiseo1.'","'.$mcrisiseo2.'","'.$mcrisiseo3.'","'.$mcrisiseo4.'","'.$mcrisiseo5.'","'.$mcrisiseo6.'","'.$mfactteo1.'","'.$mfactteo2.'","'.$mfactteo3.'","'.$mfactteo4.'","'.$mfactteo5.'","'.$mfactteo6.'","'.$mfactieo1.'","'.$mfactieo2.'","'.$mfactieo3.'","'.$mfactieo4.'","'.$mfactieo5.'","'.$mfactieo6.'","'.$mcualce.'","'.$mcualte.'","'.$mcualie.'");');
    }    
    
    //esta funcion para guardar Desempleo 
    public function fm_insertarcrisisecual1($mfolio,$mestacion,$mcrisisecual1,$mcogestor)
    {
        $query = $this->db->query('call sp6_insertarcrisisecual1('.$mfolio.',"'.$mestacion.'","'.$mcrisisecual1.'","'.$mcogestor.'");');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;        
    } 
    
    // Desempleo
    public function fm_traercrisisecual1($mfolio)
    {
        $query = $this->db->query('call sp6_traercrisisecual1('.$mfolio.');');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;        
    } 
    

}      