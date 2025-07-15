<?php

class M_c6p17aintermedia extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    
    //esta funcion ejecuta el sp para cargar las ayudas de la pregunta
    public function fm_ayudas()
    {
        $query = $this->db->query('call sp3ayudas("c6p17aintermedia");');//se coloca el codigo de la ayuda
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
        $query = $this->db->query('call spbuscarcapitulo6p17aintermedia('.$mfolio.');');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;        
    }    
    
    
    //esta funcion actualiza
    public function fm_actualizarpregunta($mfolio,$mvalorc6p17aintermediao1,$mvalorc6p17aintermediao2,$mvalorc6p17aintermediao3,$mvalorc6p17aintermediao4,
                    $mvalorc6p17aintermediao5,$mvalorc6p17aintermediao6,$mvalorc6p17aintermediao7,$mvalorc6p17aintermediao8,$mvalorc6p17aintermediao9,$mvalorc6p17aintermediao10,$mvalorc6p17aintermediao11)
    {
        $this->db->query('call spactualizarcapitulo6p17aintermedia('.$mfolio.',"'.$mvalorc6p17aintermediao1.'","'.$mvalorc6p17aintermediao2.'","'.$mvalorc6p17aintermediao3.'","'.$mvalorc6p17aintermediao4.'","'.$mvalorc6p17aintermediao5.'","'.$mvalorc6p17aintermediao6.'","'.$mvalorc6p17aintermediao7.'","'.$mvalorc6p17aintermediao8.'","'.$mvalorc6p17aintermediao9.'","'.$mvalorc6p17aintermediao10.'","'.$mvalorc6p17aintermediao11.'");');
    }    
    
       
}      