<?php

class M_ppc4p13a extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    
    //esta funcion ejecuta el sp para cargar las ayudas de la pregunta
    public function fm_ayudas()
    {
        $query = $this->db->query('call sp3ayudas("ppc4p13");');//se coloca el codigo de la ayuda
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;        
    }

    //esta funcion ejecuta el sp para cargar los datos generales
   public function fm_cargardatosgenerales($mfolio,$midintegrante)
    {
        $query = $this->db->query('call sp3cargardatosgeneralesintegrante('.$mfolio.',101,'.$midintegrante.');');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;        
    }   
 

    //esta funcion ejecuta el sp para cargar si ya tiene respuesta la pregunta
    public function fm_buscarpregunta($midintegrante)
    {
        $query = $this->db->query('call spbuscarppcapitulo4p13a('.$midintegrante.');');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;        
    }    
    
    
    //esta funcion actualiza
    public function fm_actualizarpregunta($mfolio,$midintegrante,$mvppc4p13a1,$mvppc4p13a2,$mvppc4p13a3,$mvppc4p13a4,$mvppc4p13a5,$mvppc4p13a6,$mvppc4p13a7,$mvppc4p13a8,$mvppc4p13a9 ,$mvppc4p13a10,$mvppc4p13a11,$mvppc4p13a12,$mvppc4p13a13,$mvppc4p13a14,$mvppc4p13a15,$mvppc4p13a16,$mvppc4p13a17,$mvppc4p13a18)
    {
        $this->db->query('call spactualizarppcapitulo4p13a('.$mfolio.','.$midintegrante.',"'.$mvppc4p13a1.'","'.$mvppc4p13a2.'","'.$mvppc4p13a3.'","'.$mvppc4p13a4.'","'.$mvppc4p13a5.'","'.$mvppc4p13a6.'","'.$mvppc4p13a7.'","'.$mvppc4p13a8.'","'.$mvppc4p13a9.'","'.$mvppc4p13a10.'","'.$mvppc4p13a11.'","'.$mvppc4p13a12.'","'.$mvppc4p13a13.'","'.$mvppc4p13a14.'","'.$mvppc4p13a15.'","'.$mvppc4p13a16.'","'.$mvppc4p13a17.'","'.$mvppc4p13a18.'");');
    }    
    
    
   
       
}      