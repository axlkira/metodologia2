<?php

class M_c9p37intermedia extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    
    //esta funcion ejecuta el sp para cargar las ayudas de la pregunta
    public function fm_ayudas()
    {
        $query = $this->db->query('call sp3ayudas("c9p37intermedia");');//se coloca el codigo de la ayuda
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
            $query = $this->db->query('call spbuscarcapitulo9p37intermedia('.$midintegrante.');');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;        
    }    
    
    
    //esta funcion actualiza
    public function fm_actualizarpregunta($mfolio,$midintegrante,$mvc9p37intermediao1,$mvc9p37intermediao2,$mvc9p37intermediao3,$mvc9p37intermediao4,$mvc9p37intermediao5,$mvc9p37intermediao6,$mvc9p37intermediao7,$mvc9p37intermediao8,$mvc9p37intermediao9,$mvc9p37intermediao10,$mvc9p37intermediao11,$mvc9p37intermediacual)
    {
        $this->db->query('call spactualizarcapitulo9p37intermedia('.$mfolio.','.$midintegrante.',"'.$mvc9p37intermediao1.'","'.$mvc9p37intermediao2.'","'.$mvc9p37intermediao3.'","'.$mvc9p37intermediao4.'","'.$mvc9p37intermediao5.'","'.$mvc9p37intermediao6.'","'.$mvc9p37intermediao7.'","'.$mvc9p37intermediao8.'","'.$mvc9p37intermediao9.'","'.$mvc9p37intermediao10.'","'.$mvc9p37intermediao11.'","'.$mvc9p37intermediacual.'");');
    }    
    
       
}      