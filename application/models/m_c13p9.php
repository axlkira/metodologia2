<?php

class M_c13p9 extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    
    //esta funcion ejecuta el sp para cargar las ayudas de la pregunta
    public function fm_ayudas()
    {
        $query = $this->db->query('call sp3ayudas("c13p9");');//se coloca el codigo de la ayuda
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;        
    }

    //esta funcion ejecuta el sp para cargar los datos generales
    public function fm_cargardatosgenerales($mfolio)
    {
        $query = $this->db->query('call sp3cargardatosgenerales('.$mfolio.',13);');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;        
    }   

    //esta funcion ejecuta el sp para cargar si ya tiene respuesta la pregunta
    public function fm_buscarpregunta($mfolio)
    {
        $query = $this->db->query('call spbuscarcapitulo13p9('.$mfolio.');');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;        
    }    
    
    
    //esta funcion actualiza
    public function fm_actualizarpregunta($mfolio,$mvalorc13p9o1,$mvalorc13p9o2,$mvalorc13p9o3,$mvalorc13p9o4,$mvalorc13p9o5,$mvalorc13p9o6,$mvalorc13p9o7,$mvalorc13p9o8,$mvalorc13p9cual)
    {
        $this->db->query('call spactualizarcapitulo13p9('.$mfolio.',"'.$mvalorc13p9o1.'","'.$mvalorc13p9o2.'","'.$mvalorc13p9o3.'","'.$mvalorc13p9o4.'","'.$mvalorc13p9o5.'","'.$mvalorc13p9o6.'","'.$mvalorc13p9o7.'","'.$mvalorc13p9o8.'","'.$mvalorc13p9cual.'");');
    }    
    
       
}      