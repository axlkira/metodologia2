<?php

class M_c9p39intermediaLCV1 extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    
    //esta funcion ejecuta el sp para cargar las ayudas de la pregunta
    public function fm_ayudas()
    {
        $query = $this->db->query('call sp3ayudas("c9p39intermedia");');//se coloca el codigo de la ayuda
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;        
    }

    //esta funcion ejecuta el sp para cargar los datos generales
    public function fm_cargardatosgenerales($mfolio,$midintegrante)
    {
        $query = $this->db->query('call sp3cargardatosgeneralesintegrante('.$mfolio.',97,'.$midintegrante.');');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;        
    }   

    //esta funcion ejecuta el sp para cargar si ya tiene respuesta la pregunta
    public function fm_buscarpregunta($midintegrante)
    {
        $query = $this->db->query('call spbuscarcapitulo9p39intermediaLCV1('.$midintegrante.');');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;        
    }    
    
    
    //esta funcion actualiza
    public function fm_actualizarpregunta($mfolio,$midintegrante,$mvc9p39intermediao1,$mvc9p39intermediao2,$mvc9p39intermediao3,$mvc9p39intermediao4,$mvc9p39intermediao5,$mvc9p39intermediao6,$mvc9p39intermediao7,$mvc9p39intermediao8,$mvc9p39intermediacual)
    {
        $this->db->query('call spactualizarcapitulo9p39intermediaLCV1('.$mfolio.','.$midintegrante.',"'.$mvc9p39intermediao1.'","'.$mvc9p39intermediao2.'","'.$mvc9p39intermediao3.'","'.$mvc9p39intermediao4.'","'.$mvc9p39intermediao5.'","'.$mvc9p39intermediao6.'","'.$mvc9p39intermediao7.'","'.$mvc9p39intermediao8.'","'.$mvc9p39intermediacual.'");');
    }    
    
       
}      