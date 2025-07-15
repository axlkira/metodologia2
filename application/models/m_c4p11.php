<?php

class M_c4p11 extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    
    
      
    //esta funcion ejecuta el sp para cargar las ayudas de la pregunta
    public function fm_ayudas()
    {
        $query = $this->db->query('call sp3ayudas("c4p11");');//se coloca el codigo de la ayuda
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;        
    }

    //esta funcion ejecuta el sp para cargar los datos generales
   public function fm_cargardatosgenerales($mfolio,$midintegrante)
    {
        $query = $this->db->query('call sp3cargardatosgeneralesintegrante('.$mfolio.',4,'.$midintegrante.');');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;        
    }   

    //esta funcion ejecuta el sp para cargar si ya tiene respuesta la pregunta
    public function fm_buscarpregunta($midintegrante)
    {
        $query = $this->db->query('call spbuscarcapitulo4p11('.$midintegrante.');');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;        
    }    
    
    
    //esta funcion actualiza
    public function fm_actualizarpregunta($mfolio,$midintegrante,$mvalorc4p11o1,$mvc4p11o2,$mvc4p11o3,$mvc4p11o4,$mvc4p11o5,
               $mvc4p11o6,$mvc4p11o7,$mvc4p11o8,$mvc4p11o9,$mvc4p11o10,$mvc4p11o11,$mvc4p11o12,$mvc4p11o13)
    {
        $this->db->query('call spactualizarcapitulo4p11('.$mfolio.','.$midintegrante.',"'.$mvalorc4p11o1.'","'.$mvc4p11o2.'","'.$mvc4p11o3.'","'.$mvc4p11o4.'","'.$mvc4p11o5.'","'.$mvc4p11o6.'","'.$mvc4p11o7.'","'.$mvc4p11o8.'","'.$mvc4p11o9.'","'.$mvc4p11o10.'","'.$mvc4p11o11.'","'.$mvc4p11o12.'","'.$mvc4p11o13.'");');
    }    
    
       
}      