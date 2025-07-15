<?php

class M_validacioneerf2 extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    
    //esta funcion ejecuta el sp para cargar los datos generales
    public function fm_cargarintegtranteshogar($mfolio)
    {
        $query = $this->db->query('call sp3cargarintegrantes('.$mfolio.');');
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


//    public function fm_buscardatoseerf($mfolio,$mevaluacion)
//    {
//        $query = $this->db->query('call spbuscardatoseerf('.$mfolio.','.$mevaluacion.');');
//        $resultado = $query->result();
//        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
//        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
//        return $resultado;        
//    }    
//    
    
    public function fm_traerintegranteerfam1($mfolio)
    {
        $query = $this->db->query('call sp3cargarintegranteerfam1('.$mfolio.');');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;        
    } 
    
   
    public function fm_guardaintegranteerfam($mfolio,$msino,$mrfinal)
    {
        $this->db->query('call spinsertarintegranteerfam('.$mfolio.',"'.$msino.'","'.$mrfinal.'");');
    }
    
    public function fm_guardaintegranteerfam1($mfolio,$msino,$mdocintegranteerfam1)
    {
        $this->db->query('call spinsertarintegranteerfam1('.$mfolio.',"'.$msino.'","'.$mdocintegranteerfam1.'");');
    }   
    
    public function fm_guardaintegranteerfam2($mfolio,$msino,$mrfinal)
    {
        $this->db->query('call spinsertarintegranteerfam2('.$mfolio.',"'.$msino.'","'.$mrfinal.'");');
    }
    
    public function fm_guardarintegrante1($mfolio,$cinteerf1)
    {
        $this->db->query('call spguardarintegrante1('.$mfolio.',"'.$cinteerf1.'");');
    }
    
    public function fm_guardaintegranteerfam3($mfolio,$msino,$mrfinal,$cinteerf1)
    {
        $this->db->query('call spinsertarintegranteerfam3('.$mfolio.',"'.$msino.'","'.$mrfinal.'","'.$cinteerf1.'");');
    }
     
       
}      