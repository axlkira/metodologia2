<?php

class M_c11p13 extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    
    //esta funcion ejecuta el sp para cargar las ayudas de la pregunta
    public function fm_ayudas()
    {
        $query = $this->db->query('call sp3ayudas("c11p13");');//se coloca el codigo de la ayuda
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;        
    }

    //esta funcion ejecuta el sp para cargar los datos generales
    public function fm_cargardatosgenerales($mfolio,$midintegrante)
    {
        $query = $this->db->query('call sp3cargardatosgeneralesintegrante('.$mfolio.',11,'.$midintegrante.');');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;        
    }    
       //esta funcion ejecuta el sp para cargar si ya tiene respuesta la pregunta
    public function fm_buscarpregunta($midintegrante)
    {
        $query = $this->db->query('call spbuscarcapitulo11p13('.$midintegrante.');');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;        
    }    
    
    
    //esta funcion actualiza
    public function fm_actualizarpregunta($mfolio,$midintegrante,$mvalorc11p13o1,$mvalorc11p13o2,$mvalorc11p13o3,$mvalorc11p13o4
            ,$mvalorc11p13o5,$mvalorc11p13o6,$mvalorc11p13o7,$mvalorc11p13o8,$mvalorc11p13o9,$mvalorc11p13o10,$mvalorc11p13o11
            ,$mvalorc11p13o12,$mvalorc11p13o13,$mvalorc11p13o14,$mvalorc11p13o15)
    {
        $this->db->query('call spactualizarcapitulo11p13('.$mfolio.','.$midintegrante.',"'.$mvalorc11p13o1.'","'.$mvalorc11p13o2.'","'.$mvalorc11p13o3.'"
                ,"'.$mvalorc11p13o4.'","'.$mvalorc11p13o5.'","'.$mvalorc11p13o6.'","'.$mvalorc11p13o7.'","'.$mvalorc11p13o8.'","'.$mvalorc11p13o9.'"
                ,"'.$mvalorc11p13o10.'","'.$mvalorc11p13o11.'","'.$mvalorc11p13o12.'","'.$mvalorc11p13o13.'","'.$mvalorc11p13o14.'","'.$mvalorc11p13o15.'");');
    }    
    
    
}      