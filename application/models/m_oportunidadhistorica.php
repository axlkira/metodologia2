<?php

class M_oportunidadhistorica extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    
    public function fm_cargardatosgenerales($mfolio,$midintegrante)
    {
        $query = $this->db->query('call sp3cargardatosgeneralesintegrante('.$mfolio.',0,'.$midintegrante.');');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;        
    } 
    
    
     
     public function fm_buscaroportunidadhistorica($mvidintegrante,$midbuscoph,$mnombuscop,$mvestbuscopi)
    {        
        $query = $this->db->query('call spbuscaroportunidadhistorica('.$mvidintegrante.',"'.$midbuscoph.'","'.$mnombuscop.'","'.$mvestbuscopi.'");');//se llama por procedimiento l almacenado
        $resultado = $query->result();
       $query->next_result(); // Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); // Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;
    }
    
    

      //esta funcion ejecuta el sp para cargar si ya tiene respuesta la pregunta
    public function fm_oportunidadhistorica($midintegrante)
    {
            $query = $this->db->query('call splistaroportunidadhistorica('.$midintegrante.');');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.

        return $resultado;        
    }    
    

       
    
      
       
}      