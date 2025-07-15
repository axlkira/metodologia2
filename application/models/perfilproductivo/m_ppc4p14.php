<?php

class M_ppc4p14 extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    
    //esta funcion ejecuta el sp para cargar las ayudas de la pregunta
    public function fm_ayudas()
    {
        $query = $this->db->query('call sp3ayudas("ppc4p14");');//se coloca el codigo de la ayuda
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;        
    }

    //esta funcion ejecuta el sp para cargar los datos generales
    public function fm_cargardatosgenerales($mfolio)
    {
        $query = $this->db->query('call sp3cargardatosgenerales('.$mfolio.',98);');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;        
    }   

    //esta funcion ejecuta el sp para cargar si ya tiene respuesta la pregunta
    public function fm_buscarpregunta($mfolio)
    {
        $query = $this->db->query('call spbuscarppcapitulo4p14('.$mfolio.');');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;        
    }    
    
    
    //esta funcion actualiza
    public function fm_actualizarpregunta($mfolio,$mppc4p14a1,$mppc4p14a2,$mppc4p14a3,$mppc4p14a4,$mppc4p14a5,$mvppc4p14cual)
    {
    $this->db->query('call spactualizarppcapitulo4p14('.$mfolio.',"'.$mppc4p14a1.'","'.$mppc4p14a2.'","'.$mppc4p14a3.'","'.$mppc4p14a4.'","'.$mppc4p14a5.'","'.$mvppc4p14cual.'");');
    }    
    
       
}      