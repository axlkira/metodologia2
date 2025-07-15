<?php

class M_avanceproceso extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    
    //esta funcion ejecuta el sp para cargar las ayudas de la pregunta
  

    //esta funcion ejecuta el sp para cargar los datos generales
    public function fm_cargardatosavanceproceso($mid,$mfolio)
    {
        $query = $this->db->query('call spcargardatosavanceproceso('.$mid.','.$mfolio.');');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;        
    }   

    //esta funcion ejecuta el sp para cargar si ya tiene respuesta la pregunta
     
    
    
    //esta funcion actualiza
    public function fm_guardaravanceproceso($mfolio,$mverfam,$mvdeshum,$mvtextoav,$mdocumento)
    {
        $query = $this->db->query('call p6_spguardaravanceproceso('.$mfolio.',"'.$mverfam.'","'.$mvdeshum.'","'.$mvtextoav.'","'.$mdocumento.'");');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
       return $resultado;
    }    
    
    public function fm_insertarfolioexitoso($mfolio,$midestacion)
    {
        $query = $this->db->query('call spinsertarfolioexitoso('.$mfolio.',"'.$midestacion.'");');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
       return $resultado;
    }    
    
    
    
       
}      