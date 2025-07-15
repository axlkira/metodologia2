<?php

class M_c10p5 extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    
    //esta funcion ejecuta el sp para cargar las ayudas de la pregunta
    public function fm_ayudas()
    {
        $query = $this->db->query('call sp3ayudas("c10p5");');//se coloca el codigo de la ayuda
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
        $query = $this->db->query('call spbuscarcapitulo10p5('.$midintegrante.');');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;        
    }    
    
    
    //esta funcion actualiza
    public function fm_actualizarpregunta($mfolio,$midintegrante,$cc10p5o1,$cc10p5o2,$cc10p5o3,$cc10p5o4,$cc10p5o5,
                                         $cc10p5o6,$cc10p5o7,$cc10p5o8,$cc10p5o9,$cc10p5o10,$cc10p5o11,$cc10p5o12
            ,$cc10p5o13,$cc10p5o14,$cc10p5o15,$cc10p5o16,$cc10p5o17,$cc10p5o18,$cc10p5o19,$cc10p5o20,$cc10p5o21
            ,$cc10p5o22,$cc10p5o23,$minstitucion1,$minstitucion2,$mc10p5cual)
    {
    $this->db->query('call spactualizarcapitulo10p5('.$mfolio.','.$midintegrante.',"'.$cc10p5o1.'","'.$cc10p5o2.'","'.$cc10p5o3.'","'.$cc10p5o4.'",
                     "'.$cc10p5o5.'","'.$cc10p5o6.'","'.$cc10p5o7.'","'.$cc10p5o8.'","'.$cc10p5o9.'","'.$cc10p5o10.'","'.$cc10p5o11.'",
                     "'.$cc10p5o12.'","'.$cc10p5o13.'","'.$cc10p5o14.'","'.$cc10p5o15.'","'.$cc10p5o16.'","'.$cc10p5o17.'","'.$cc10p5o18.'",
                     "'.$cc10p5o19.'","'.$cc10p5o20.'","'.$cc10p5o21.'","'.$cc10p5o22.'","'.$cc10p5o23.'","'.$minstitucion1.'","'.$minstitucion2.'","'.$mc10p5cual.'" );');
    }    
    
       
}      