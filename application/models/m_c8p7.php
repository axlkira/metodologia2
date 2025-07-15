<?php

class M_c8p7 extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    
    //esta funcion ejecuta el sp para cargar las ayudas de la pregunta
    public function fm_ayudas()
    {
        $query = $this->db->query('call sp3ayudas("c8p7");');//se coloca el codigo de la ayuda
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;        
    }

    //esta funcion ejecuta el sp para cargar los datos generales
    public function fm_cargardatosgenerales($mfolio,$midintegrante)
    {
        $query = $this->db->query('call sp3cargardatosgeneralesintegrante('.$mfolio.',8,'.$midintegrante.');');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;        
    }   

    //esta funcion ejecuta el sp para cargar si ya tiene respuesta la pregunta
    public function fm_buscarpregunta($midintegrante)
    {
        $query = $this->db->query('call spbuscarcapitulo8p7('.$midintegrante.');');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;        
    }    
    
    
    //esta funcion actualiza
    public function fm_actualizarpregunta($mfolio,$midintegrante,$cc8p7o1,$cc8p7o2,$cc8p7o3,$cc8p7o4,$cc8p7o5,
                                         $cc8p7o6,$cc8p7o7,$cc8p7o8,$cc8p7o9,$cc8p7o10,$cc8p7cual)
    {
        $this->db->query('call spactualizarcapitulo8p7('.$mfolio.','.$midintegrante.',"'.$cc8p7o1.'","'.$cc8p7o2.'","'.$cc8p7o3.'","'.$cc8p7o4.'",'
                . '                                    "'.$cc8p7o5.'","'.$cc8p7o6.'","'.$cc8p7o7.'","'.$cc8p7o8.'","'.$cc8p7o9.'","'.$cc8p7o10.'","'.$cc8p7cual.'");');
    }    
    
       
}      