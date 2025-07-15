<?php

class M_ppc2p1 extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    
    //esta funcion ejecuta el sp para cargar las ayudas de la pregunta
    public function fm_ayudas()
    {
        $query = $this->db->query('call sp3ayudas("ppc2p1");');//se coloca el codigo de la ayuda
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;        
    }

    //esta funcion ejecuta el sp para cargar los datos generales
   public function fm_cargardatosgenerales($mfolio,$midintegrante)
    {
        $query = $this->db->query('call sp3cargardatosgeneralesintegrante('.$mfolio.',99,'.$midintegrante.');');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;        
    }   
 

    //esta funcion ejecuta el sp para cargar si ya tiene respuesta la pregunta
    public function fm_buscarpregunta($midintegrante)
    {
        $query = $this->db->query('call spbuscarppcapitulo2p1('.$midintegrante.');');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;        
    }    
    
    
    //esta funcion actualiza
    public function fm_actualizarpregunta($mfolio,$midintegrante,$mvalorppc2p1,$mvalorppc2p2)
    {
        $this->db->query('call spactualizarppcapitulo2p1('.$mfolio.','.$midintegrante.',"'.$mvalorppc2p1.'","'.$mvalorppc2p2.'");');
    }    
    

    //me enlista la informacion que hay en t_areaformacion enviando el parametro el cual me dice que no se repite la respuesta
    public function fm_listarareaformacion($midparametro)
    {        
        $query = $this->db->query('call spbuscarareaformacion("'.$midparametro.'");');//se llama por procedimiento l almacenado
        $resultado = $query->result();
        $query->next_result(); // Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); // Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;
    } 
       
}      