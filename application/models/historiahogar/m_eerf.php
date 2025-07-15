<?php

class M_eerf extends CI_Model {

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
    
   
    public function fm_guardareerf($mfolio,$mp1,$mp2,$mp3,$mp4,$mp5,$mp6,$mp7,$mp8,$mp9,$mp10,
            $mp11,$mp12,$mp13,$mp14,$mp15,$mp16,$mp17,$mp18,$mp19,$mp20)
    {
        $this->db->query('call spinsertareerf('.$mfolio.','.$mp1.','.$mp2.','.$mp3.','.$mp4.','.$mp5.','.$mp6.','.$mp7.',
            '.$mp8.','.$mp9.','.$mp10.','.$mp11.','.$mp12.','.$mp13.','.$mp14.','.$mp15.','.$mp16.'
                ,'.$mp17.','.$mp18.','.$mp19.','.$mp20.');');
    }    
    
       
}      