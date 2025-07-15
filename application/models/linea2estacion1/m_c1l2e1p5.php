<?php

class M_c1l2e1p5 extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    
    //esta funcion ejecuta el sp para cargar las ayudas de la pregunta
    public function fm_ayudas()
    {
        $query = $this->db->query('call sp3ayudas("c1l2e1p5");');//se coloca el codigo de la ayuda
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;        
    }

    //esta funcion ejecuta el sp para cargar los datos generales
    public function fm_cargardatosgenerales($mfolio)
    {
        $query = $this->db->query('call sp3cargardatosgenerales('.$mfolio.',102);');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;        
    }    

    //esta funcion ejecuta el sp para cargar si ya tiene respuesta la pregunta
    public function fm_buscarpregunta($mfolio)
    {
        $query = $this->db->query('call spbuscarcap1l2e1p5('.$mfolio.');');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;        
    }    
    
    
    //esta funcion actualiza
    public function fm_actualizarpregunta($mfolio,$mvalorc1l2e1p5o1,$mvalorc1l2e1p5o2,$mvalorc1l2e1p5o3,$mvalorc1l2e1p5o4,$mvalorc1l2e1p5o5,$mvalorc1l2e1p5o6,$mvalorc1l2e1p5o7,$mvalorc1l2e1p5o8,$mvalorc1l2e1p5o9,$mvalorc1l2e1p5o10)
    {
        $this->db->query('call spactualizarcap1l2e1p5int('.$mfolio.',"'.$mvalorc1l2e1p5o1.'","'.$mvalorc1l2e1p5o2.'","'.$mvalorc1l2e1p5o3.'","'.$mvalorc1l2e1p5o4.'","'.$mvalorc1l2e1p5o5.'","'.$mvalorc1l2e1p5o6.'","'.$mvalorc1l2e1p5o7.'","'.$mvalorc1l2e1p5o8.'","'.$mvalorc1l2e1p5o9.'","'.$mvalorc1l2e1p5o10.'");');
    }    
    
       
}      