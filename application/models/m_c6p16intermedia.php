<?php

class M_c6p16intermedia extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    
    //esta funcion ejecuta el sp para cargar las ayudas de la pregunta
    public function fm_ayudas()
    {
        $query = $this->db->query('call sp3ayudas("c6p16intermedia");');//se coloca el codigo de la ayuda
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;        
    }

    //esta funcion ejecuta el sp para cargar los datos generales
    public function fm_cargardatosgenerales($mfolio)
    {
        $query = $this->db->query('call sp3cargardatosgenerales('.$mfolio.',6);');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;        
    }    

    //esta funcion ejecuta el sp para cargar si ya tiene respuesta la pregunta
    public function fm_buscarpregunta($mfolio)
    {
        $query = $this->db->query('call spbuscarcapitulo6p16intermedia('.$mfolio.');');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;        
    }    
    
    
    //esta funcion actualiza
    public function fm_actualizarpregunta($mfolio,$mvalorc6p16intermediao1,$mvalorc6p16intermediao2,$mvalorc6p16intermediao3,$mvalorc6p16intermediao4,
                    $mvalorc6p16intermediao5,$mvalorc6p16intermediao6,$mvalorc6p16intermediao7,$mvalorc6p16intermediao8,$mvalorc6p16intermediao9,$mvalorc6p16intermediao10,$mvc6p16intermediacual)
    {
        $this->db->query('call spactualizarcapitulo6p16intermedia('.$mfolio.',"'.$mvalorc6p16intermediao1.'","'.$mvalorc6p16intermediao2.'","'.$mvalorc6p16intermediao3.'","'.$mvalorc6p16intermediao4.'","'.$mvalorc6p16intermediao5.'","'.$mvalorc6p16intermediao6.'","'.$mvalorc6p16intermediao7.'","'.$mvalorc6p16intermediao8.'","'.$mvalorc6p16intermediao9.'","'.$mvalorc6p16intermediao10.'","'.$mvc6p16intermediacual.'");');
    }    
    
       
}      