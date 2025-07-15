<?php

class M_ppc1p3n2 extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    
    //esta funcion ejecuta el sp para cargar las ayudas de la pregunta
    public function fm_ayudas()
    {
        $query = $this->db->query('call sp3ayudas("ppc1p3n4");');//se coloca el codigo de la ayuda
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;        
    }

    //esta funcion ejecuta el sp para cargar los datos generales
    public function fm_cargardatosgenerales($mfolio,$midintegrante)
    {
        $query = $this->db->query('call sp3cargardatosgeneralesintegrante('.$mfolio.',98,'.$midintegrante.');');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;        
    }   

    //esta funcion ejecuta el sp para cargar si ya tiene respuesta la pregunta
    public function fm_buscarpregunta($midintegrante)
    {
        $query = $this->db->query('call spbuscarppcapitulo1p3n2('.$midintegrante.');');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;        
    }    
//    //esta funcion ejecuta el sp para cargar si ya tiene respuesta la pregunta
//    public function fm_buscarpregunta3n2($midintegrante)
//    {
//        $query = $this->db->query('call spbuscarppcapitulo1p3n2dato('.$midintegrante.');');
//        $resultado = $query->result();
//        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
//        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
//        return $resultado;        
//    }  
    
    //esta funcion actualiza
    public function fm_actualizarpregunta($mfolio,$midintegrante,$mvalorppc1p3n2,$mvultimogrado,$mppc1p3n3,$mppc1p3n31,$mppc1p3n4,$mppc1p3n5institucion,$mppc1p3n5area,$mppc1p3n6,$mppc1p3n7)
    {
        $this->db->query('call spactualizarppcapitulo1p3n2('.$mfolio.','.$midintegrante.',"'.$mvalorppc1p3n2.'","'.$mvultimogrado.'","'.$mppc1p3n3.'","'.$mppc1p3n31.'","'.$mppc1p3n4.'","'.$mppc1p3n5institucion.'","'.$mppc1p3n5area.'","'.$mppc1p3n6.'","'.$mppc1p3n7.'");');
    }    
     public function fm_listarareaconocimiento()
    {        
        $query = $this->db->query('call spareaconocimientoc1p3n5();');//se llama por procedimiento l almacenado
        $resultado = $query->result();
        $query->next_result(); // Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); // Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;
    }
     //esta funcion actualiza
    public function fm_insertarotro($mfolio,$midintegrante)
    {
        $this->db->query('call spinsertarotroppcapitulo1p3n2('.$mfolio.','.$midintegrante.');');
    } 
    
    public function fm_llenarpptodosloscapitulos($mfolio,$midintegrante)
    {
        $this->db->query('call spllenarpptodosloscapitulos('.$mfolio.','.$midintegrante.');');
    }

    
    public function fm_borrarpptodosloscapitulos($mfolio,$midintegrante)
    {
        $this->db->query('call spborrarpptodosloscapitulos('.$mfolio.','.$midintegrante.');');
    }
}      