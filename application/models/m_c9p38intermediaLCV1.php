<?php

class M_c9p38intermediaLCV1 extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    
    //esta funcion ejecuta el sp para cargar las ayudas de la pregunta
    public function fm_ayudas()
    {
        $query = $this->db->query('call sp3ayudas("c9p38intermedia");');//se coloca el codigo de la ayuda
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
        $query = $this->db->query('call spbuscarcapitulo9p38intermediaLCV1('.$midintegrante.');');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;        
    }    
    
    
    //esta funcion actualiza
    public function fm_actualizarpregunta($mfolio,$midintegrante,$mvc9p38intermediao1,$mvc9p38intermediao2,$mvc9p38intermediao3,$mvc9p38intermediao4,$mvc9p38intermediao5,$mvc9p38intermediao6,$mvc9p38intermediao7,$mvc9p38intermediao8,$mvc9p38intermediao9,$mvc9p38intermediao10,$mvc9p38intermediacual)
    {
        $this->db->query('call spactualizarcapitulo9p38intermediaLCV1('.$mfolio.','.$midintegrante.',"'.$mvc9p38intermediao1.'","'.$mvc9p38intermediao2.'","'.$mvc9p38intermediao3.'","'.$mvc9p38intermediao4.'","'.$mvc9p38intermediao5.'","'.$mvc9p38intermediao6.'","'.$mvc9p38intermediao7.'","'.$mvc9p38intermediao8.'","'.$mvc9p38intermediao9.'","'.$mvc9p38intermediao10.'","'.$mvc9p38intermediacual.'");');
    }    
    
       
}      