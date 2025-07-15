<?php

class M_c5p5 extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    
    //esta funcion ejecuta el sp para cargar las ayudas de la pregunta
    public function fm_ayudas()
    {
        $query = $this->db->query('call sp3ayudas("c5p5");');//se coloca el codigo de la ayuda
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;        
    }

    //esta funcion ejecuta el sp para cargar los datos generales
    public function fm_cargardatosgenerales($mfolio,$midintegrante)
    {
        $query = $this->db->query('call sp3cargardatosgeneralesintegrante('.$mfolio.',5,'.$midintegrante.');');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;        
    }   

    //esta funcion ejecuta el sp para cargar si ya tiene respuesta la pregunta
    public function fm_buscarpregunta($midintegrante)
    {
        $query = $this->db->query('call spbuscarcapitulo5p5('.$midintegrante.');');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;        
    }    
    
    
    //esta funcion actualiza
    public function fm_actualizarpregunta($mfolio,$midintegrante,$cc5p5o1,$cc5p5o2,$cc5p5o3,$cc5p5o4,$cc5p5o5,
                                         $cc5p5o6,$cc5p5o7,$cc5p5o8,$cc5p5o9,$cc5p5o10,$cc5p5o11,$cc5p5o12,$cc5p5o13,$cc5p5cual)
    {
        $this->db->query('call spactualizarcapitulo5p5('.$mfolio.','.$midintegrante.',"'.$cc5p5o1.'","'.$cc5p5o2.'","'.$cc5p5o3.'","'.$cc5p5o4.'",
                                                       "'.$cc5p5o5.'","'.$cc5p5o6.'","'.$cc5p5o7.'","'.$cc5p5o8.'","'.$cc5p5o9.'","'.$cc5p5o10.'","'.$cc5p5o11.'","'.$cc5p5o12.'","'.$cc5p5o13.'","'.$cc5p5cual.'");');
    }    
    
       
}      