<?php

class M_historiahogar extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    
    //esta funcion ejecuta el sp para cargar las ayudas de la pregunta
    public function fm_ayudas()
    {
        $query = $this->db->query('call sp3ayudas("c2p10");');//se coloca el codigo de la ayuda
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;        
    }

    //esta funcion ejecuta el sp para cargar los datos generales
    public function fm_cargardatosgenerales($mfolio)
    {
        //$query = $this->db->query('call sp3cargardatosgenerales('.$mfolio.',2);');
        $query = $this->db->query('call sp3cargardatosgenerales('.$mfolio.',2);');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;        
    }    

    //esta funcion ejecuta el sp para cargar si ya tiene respuesta la pregunta
    public function fm_buscarpregunta($mfolio)
    {
        //$query = $this->db->query('call spbuscarcapitulo2p10('.$mfolio.');');
        $query = $this->db->query('call spbuscarcapitulo2p10('.$mfolio.');');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;        
    }    
    
    
    //esta funcion actualiza
    public function fm_actualizarpregunta($mfolio,$mvalorc2p10)
    {
        $this->db->query('call spactualizarcapitulo2p10('.$mfolio.',"'.$mvalorc2p10.'");');
    }  
    
    //esta funcion para guardar el logro
    public function fm_insertarhflogro($mfolio,$mestacion,$mtextlogro,$mcogestor)
    {
        //$query = $this->db->query('call spbuscarcapitulo2p10('.$mfolio.');');
        //$query = $this->db->query('call sp6_hfinsertarlogros('.$mfolio.',"'.$mestacion.'","'.$mtextlogro.'","'.$mcogestor.'");');
        $query = $this->db->query('call sp6_hfinsertarlogros('.$mfolio.',"'.$mestacion.'","'.$this->db->escape_str($mtextlogro).'","'.$mcogestor.'");');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;        
    }   
    
    //esta funcion para guardar conformacion
    public function fm_insertarhconformacion($mfolio,$mestacion,$mtextconformacion,$mcogestor)
    {
        //$query = $this->db->query('call spbuscarcapitulo2p10('.$mfolio.');');
        //$query = $this->db->query('call sp6_hfinsertarlogros('.$mfolio.',"'.$mestacion.'","'.$mtextlogro.'","'.$mcogestor.'");');
        $query = $this->db->query('call sp6_hfinsertarconformacion('.$mfolio.',"'.$mestacion.'","'.$this->db->escape_str($mtextconformacion).'","'.$mcogestor.'");');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;        
    }    
    
    //esta funcion para guardar conformacion
    public function fm_insertarhfprocedencia($mfolio,$mestacion,$mtextprocedencia,$mcogestor)
    {
        //$query = $this->db->query('call spbuscarcapitulo2p10('.$mfolio.');');
        //$query = $this->db->query('call sp6_hfinsertarlogros('.$mfolio.',"'.$mestacion.'","'.$mtextlogro.'","'.$mcogestor.'");');
        $query = $this->db->query('call sp6_hfinsertarprocedencia('.$mfolio.',"'.$mestacion.'","'.$this->db->escape_str($mtextprocedencia).'","'.$mcogestor.'");');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;        
    }  

    //esta funcion para guardar conformacion
    public function fm_insertarhfconstumbres($mfolio,$mestacion,$mtextconstumbres,$mcogestor)
    {
        //$query = $this->db->query('call spbuscarcapitulo2p10('.$mfolio.');');
        //$query = $this->db->query('call sp6_hfinsertarlogros('.$mfolio.',"'.$mestacion.'","'.$mtextlogro.'","'.$mcogestor.'");');
        $query = $this->db->query('call sp6_hfinsertarconstumbres('.$mfolio.',"'.$mestacion.'","'.$this->db->escape_str($mtextconstumbres).'","'.$mcogestor.'");');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;        
    }  
        
// funcion traer logro    
    public function fm_traerhflogro($mfolio)
    {
        //$query = $this->db->query('call spbuscarcapitulo2p10('.$mfolio.');');
        //$query = $this->db->query('call sp6_hfinsertarlogros('.$mfolio.',"'.$mestacion.'","'.$mtextlogro.'","'.$mcogestor.'");');
        $query = $this->db->query('call sp6_hftraerlogros('.$mfolio.');');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;        
    }    
    
    public function fm_traerhfconformacion($mfolio)
    {
        //$query = $this->db->query('call spbuscarcapitulo2p10('.$mfolio.');');
        //$query = $this->db->query('call sp6_hfinsertarlogros('.$mfolio.',"'.$mestacion.'","'.$mtextlogro.'","'.$mcogestor.'");');
        $query = $this->db->query('call sp6_hftraerconformacion('.$mfolio.');');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;        
    }  
    
    public function fm_traerhfprocedencia($mfolio)
    {
        //$query = $this->db->query('call spbuscarcapitulo2p10('.$mfolio.');');
        //$query = $this->db->query('call sp6_hfinsertarlogros('.$mfolio.',"'.$mestacion.'","'.$mtextlogro.'","'.$mcogestor.'");');
        $query = $this->db->query('call sp6_hftraerprocedencia('.$mfolio.');');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;        
    }  
    
    public function fm_traerhfcostumbres($mfolio)
    {
        //$query = $this->db->query('call spbuscarcapitulo2p10('.$mfolio.');');
        //$query = $this->db->query('call sp6_hfinsertarlogros('.$mfolio.',"'.$mestacion.'","'.$mtextlogro.'","'.$mcogestor.'");');
        $query = $this->db->query('call sp6_hftraercostumbres('.$mfolio.');');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;        
    }      
    
       
}      