<?php

class M_ppc3p3e extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    
    //esta funcion ejecuta el sp para cargar las ayudas de la pregunta
    public function fm_ayudas()
    {
        $query = $this->db->query('call sp3ayudas("ppc3p3e");');//se coloca el codigo de la ayuda
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;        
    }

    //esta funcion ejecuta el sp para cargar los datos generales
   public function fm_cargardatosgenerales($mfolio,$midintegrante)
    {
        $query = $this->db->query('call sp3cargardatosgeneralesintegrante('.$mfolio.',100,'.$midintegrante.');');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;        
    }   
 

    //esta funcion ejecuta el sp para cargar si ya tiene respuesta la pregunta
    public function fm_buscarpregunta($midintegrante)
    {
        $query = $this->db->query('call spbuscarppcapitulo3p3e('.$midintegrante.');');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;        
    }    
    
     
    //esta funcion actualiza
    public function fm_actualizar($mfolio,$midintegrante,$mvppc3p3e1,$mvppc3p3e2,$mvppc3p3e3,$mvppc3p3e4,$mvppc3p3e5,$mvppc3p3e6,$mvppc3p3e7,$mvppc3p3e8,$mvppc3p3e9 ,$mvppc3p3e10,$mvppc3p3ecual)
    {
        $this->db->query('call spactualizarppcapitulo3p3e('.$mfolio.','.$midintegrante.',"'.$mvppc3p3e1.'","'.$mvppc3p3e2.'","'.$mvppc3p3e3.'","'.$mvppc3p3e4.'","'.$mvppc3p3e5.'","'.$mvppc3p3e6.'","'.$mvppc3p3e7.'","'.$mvppc3p3e8.'","'.$mvppc3p3e9.'","'.$mvppc3p3e10.'","'.$mvppc3p3ecual.'");');
    }    
    
    
   
       
}      