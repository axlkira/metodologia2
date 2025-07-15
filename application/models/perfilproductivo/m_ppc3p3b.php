<?php

class M_ppc3p3b extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    
    //esta funcion ejecuta el sp para cargar las ayudas de la pregunta
    public function fm_ayudas()
    {
        $query = $this->db->query('call sp3ayudas("ppc3p3a");');//se coloca el codigo de la ayuda
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;        
    }

     public function fm_listartabla($midintegrante)
    {        
        $query = $this->db->query('call splistarempleointegrante('.$midintegrante.');');//se llama por procedimiento l almacenado
        $resultado = $query->result();
        $query->next_result(); // Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); // Estas dos funciones permiten realizar varias consultas en el mismo controlador.
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
        $query = $this->db->query('call spbuscarppcapitulo3p3b('.$midintegrante.');');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;        
    }    
    
     public function fm_insertarempleo($mfolio,$midintegrante,$mvempresa,$mvtelempresa,$mvcargo,$mvfechai,$mvfechaf,$mvciudad,$mvvalorppc3p3d )
    {
        $query=$this->db->query('call spinsertarempleointegrante('.$mfolio.','.$midintegrante.',"'.$mvempresa.'","'.$mvtelempresa.'","'.$mvcargo.'","'.$mvfechai.'", "'.$mvfechaf.'", "'.$mvciudad.'", "'.$mvvalorppc3p3d.'");');
        $resultado = $query->result();
        $query->next_result(); // Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); // Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;
    }
    
     
    public function fm_eliminarexplaboral($midintegrante,$midlabor)
    {
        $query = $this->db->query('call speliminarexplaboral('.$midintegrante.','.$midlabor.');');
        $resultado = $query->result();
        $query->next_result(); // Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); // Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;
    }
    
    
    //esta funcion actualiza
    public function fm_actualizarpregunta($mfolio,$midintegrante,$mvvalorppc3p3a)
    {
        $this->db->query('call spactualizarppcapitulo3p3b('.$mfolio.','.$midintegrante.',"'.$mvvalorppc3p3a.'");');
    }    
    
    
   
       
}      