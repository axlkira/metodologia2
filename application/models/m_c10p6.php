<?php

class M_c10p6 extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    
    //esta funcion ejecuta el sp para cargar las ayudas de la pregunta
    public function fm_ayudas()
    {
        $query = $this->db->query('call sp3ayudas("c10p6");');//se coloca el codigo de la ayuda
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;        
    }

    //esta funcion ejecuta el sp para cargar los datos generales
    public function fm_cargardatosgenerales($mfolio,$midintegrante)
    {
        $query = $this->db->query('call sp3cargardatosgeneralesintegrante('.$mfolio.',10,'.$midintegrante.');');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;        
    }   

    //esta funcion ejecuta el sp para cargar si ya tiene respuesta la pregunta
    public function fm_buscarpregunta($midintegrante)
    {
        $query = $this->db->query('call spbuscarcapitulo10p6('.$midintegrante.');');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;        
    }    
    
    
    //esta funcion actualiza
    public function fm_actualizarpregunta($mfolio,$midintegrante,$cc10p6o1,$cc10p6o2,$cc10p6o3,$cc10p6o4,$cc10p6o5,
                                         $cc10p6o6,$cc10p6o7,$cc10p6o8,$cc10p6o9,$cc10p6o10,$cc10p6o11,$cc10p6o12,
                                         $cc10p6o13,$cc10p6o14,$cc10p6o15,$cc10p6o16,$cc10p6o17,$cc10p6cual)
    {
        $this->db->query('call spactualizarcapitulo10p6('.$mfolio.','.$midintegrante.',"'.$cc10p6o1.'","'.$cc10p6o2.'","'.$cc10p6o3.'","'.$cc10p6o4.'",
                                                       "'.$cc10p6o5.'","'.$cc10p6o6.'","'.$cc10p6o7.'","'.$cc10p6o8.'","'.$cc10p6o9.'","'.$cc10p6o10.'","'.$cc10p6o11.'","'.$cc10p6o12.'","'.$cc10p6o13.'","'.$cc10p6o14.'","'.$cc10p6o15.'","'.$cc10p6o16.'","'.$cc10p6o17.'","'.$cc10p6cual.'");');
    }    
    
       
}      