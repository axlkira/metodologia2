<?php

class M_c11p1 extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    
    //esta funcion ejecuta el sp para cargar las ayudas de la pregunta
    public function fm_ayudas()
    {
        $query = $this->db->query('call sp3ayudas("c11p1");');//se coloca el codigo de la ayuda
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
        $query = $this->db->query('call spbuscarcapitulo11p1('.$mfolio.');');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;        
    }    
    
    
    //esta funcion actualiza
    public function fm_actualizarpregunta($mfolio,$mvalorc11p1o1,$mvalorc11p1o2,$mvalorc11p1o3,$mvalorc11p1o4,$mvalorc11p1o5,$mvalorc11p1o6,$mvalorc11p1o7,$mvalorc11p1o8,$mvalorc11p1cual)
    {
        $this->db->query('call spactualizarcapitulo11p1('.$mfolio.',"'.$mvalorc11p1o1.'","'.$mvalorc11p1o2.'","'.$mvalorc11p1o3.'","'.$mvalorc11p1o4.'","'.$mvalorc11p1o5.'","'.$mvalorc11p1o6.'","'.$mvalorc11p1o7.'","'.$mvalorc11p1o8.'","'.$mvalorc11p1cual.'");');
    }    
    
       
}      