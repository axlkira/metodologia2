<?php

class M_c9p29intermedia extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    
    //esta funcion ejecuta el sp para cargar las ayudas de la pregunta
    public function fm_ayudas()
    {
        $query = $this->db->query('call sp3ayudas("c9p29");');//se coloca el codigo de la ayuda
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;        
    }

    //esta funcion ejecuta el sp para cargar los datos generales
    public function fm_cargardatosgenerales($mfolio,$midintegrante)
    {
        $query = $this->db->query('call sp3cargardatosgeneralesintegrante('.$mfolio.',95,'.$midintegrante.');');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;        
    }   

    //esta funcion ejecuta el sp para cargar si ya tiene respuesta la pregunta
    public function fm_buscarpregunta($midintegrante)
    {
        $query = $this->db->query('call spbuscarcapitulo9p29intermedia('.$midintegrante.');');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;        
    }    
    
    
    //esta funcion actualiza
    public function fm_actualizarpregunta($mfolio,$midintegrante,$mc9p29o1,$mc9p29o1cuanto,$mc9p29o2,$mc9p29o2cuanto,$mc9p29o3,
                                         $mc9p29o3cuanto,$mc9p29o4,$mc9p29o4cuanto,$mc9p29o5)
    {
    $this->db->query('call spactualizarcapitulo9p29intermedia('.$mfolio.','.$midintegrante.',"'.$mc9p29o1.'","'.$mc9p29o1cuanto.'","'.$mc9p29o2.'","'.$mc9p29o2cuanto.'",
                     "'.$mc9p29o3.'","'.$mc9p29o3cuanto.'","'.$mc9p29o4.'","'.$mc9p29o4cuanto.'","'.$mc9p29o5.'");');
    }    
    
       
}      