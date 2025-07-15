<?php

class M_c9p4intermedia extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    
    //esta funcion ejecuta el sp para cargar las ayudas de la pregunta
    public function fm_ayudas()
    {
        $query = $this->db->query('call sp3ayudas("c9p4intermedia");');//se coloca el codigo de la ayuda
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;        
    }

    //esta funcion ejecuta el sp para cargar los datos generales
    public function fm_cargardatosgenerales($mfolio,$midintegrante)
    {
        $query = $this->db->query('call sp3cargardatosgeneralesintegrante('.$mfolio.',92,'.$midintegrante.');');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;        
    }   

    //esta funcion ejecuta el sp para cargar si ya tiene respuesta la pregunta
    public function fm_buscarpregunta($midintegrante)
    {
        $query = $this->db->query('call spbuscarcapitulo9p4intermedia('.$midintegrante.');');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;        
    }    
    
    
    //esta funcion actualiza
    public function fm_actualizarpregunta($mfolio,$midintegrante,$mvalorc9p4intermedia)
    {
        $this->db->query('call spactualizarcapitulo9p4intermedia('.$mfolio.','.$midintegrante.',"'.$mvalorc9p4intermedia.'");');
    }    
    
    public function fm_saltarc9p4intermedia($mfolio,$midintegrante)
    {
        $this->db->query('call spsaltoc9p4intermedia('.$mfolio.','.$midintegrante.');');
    }  
    
     public function fm_saltarc9p4intermediaa($mfolio,$midintegrante)
    {
        $this->db->query('call spsaltoc9p4intermediaa('.$mfolio.','.$midintegrante.');');
    }
    
    public function fm_nosaltarc9p4intermedia($mfolio,$midintegrante)
    {
        $this->db->query('call spnosaltoc9p4intermedia('.$mfolio.','.$midintegrante.');');
    } 
    
}      