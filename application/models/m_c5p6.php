<?php

class M_c5p6 extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    
    //esta funcion ejecuta el sp para cargar las ayudas de la pregunta
    public function fm_ayudas()
    {
        $query = $this->db->query('call sp3ayudas("c5p6");');//se coloca el codigo de la ayuda
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
        $query = $this->db->query('call spbuscarcapitulo5p6('.$midintegrante.');');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;        
    }    
    
    
    //esta funcion actualiza
    public function fm_actualizarpregunta($mfolio,$midintegrante,$cc5p6o1,$cc5p6o2,$cc5p6o3,$cc5p6o4,$cc5p6o5,
                                         $cc5p6o6,$cc5p6o7,$cc5p6o8,$cc5p6o9,$cc5p6o10,$cc5p6o11,$cc5p6cual,$cc5p6o12,$cc5p6o13,$cc5p6o14,$cc5p6o15)
    {
        $this->db->query('call spactualizarcapitulo5p6('.$mfolio.','.$midintegrante.',"'.$cc5p6o1.'","'.$cc5p6o2.'","'.$cc5p6o3.'","'.$cc5p6o4.'",
                                                       "'.$cc5p6o5.'","'.$cc5p6o6.'","'.$cc5p6o7.'","'.$cc5p6o8.'","'.$cc5p6o9.'","'.$cc5p6o10.'","'.$cc5p6o11.'","'.$cc5p6cual.'","'.$cc5p6o12.'","'.$cc5p6o13.'","'.$cc5p6o14.'","'.$cc5p6o15.'");');
    }    
    
   public function fm_sspsaltoc5p6ap20($mfolio,$midintegrante)
   {
       $this->db->query('call spsaltoc5p6ap20('.$mfolio.','.$midintegrante.');');
   }
   
   public function fm_sspnosaltoc5p6ap20($mfolio,$midintegrante)
   {
       $this->db->query('call spnosaltoc5p6ap20('.$mfolio.','.$midintegrante.');');
   }
    
   public function fm_spsaltoc5ac6($mfolio,$midintegrante)
   {
       $this->db->query('call spsaltoc5ac6('.$mfolio.','.$midintegrante.');');
   }
   
   public function fm_spnosaltoc5ac6($mfolio,$midintegrante)
   {
       $this->db->query('call spnosaltoc5ac6('.$mfolio.','.$midintegrante.');');
   }
}      