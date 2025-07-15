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
        $query = $this->db->query('call spcargardatosavanceprocesot6('.$mid.','.$mfolio.');');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;        
    }   

    //esta funcion ejecuta el sp para cargar si ya tiene respuesta la pregunta
     
    
    
    //esta funcion actualiza
    public function fm_guardaravanceproceso($mfolio,$mverfam,$mvdeshum,$mvtextoav,$mvtextoav2,$mdocumento,$midestacion,$mvalorp0Accion,$mvcualmotivoAccion)
    {
        $query = $this->db->query('call p6_spguardaravanceprocesoaccioneducativa('.$mfolio.',"'.$mverfam.'","'.$mvdeshum.'","'.$this->db->escape_str($mvtextoav).'","'.$this->db->escape_str($mvtextoav2).'","'.$mdocumento.'",'.$midestacion.',"'.$mvalorp0Accion.'","'.$mvcualmotivoAccion.'");');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
       return $resultado;
    }    
    
     public function fm_cerrarpaso($mfolio,$midpaso,$mestado) {
        $this->db->query('call spcerrarpasol1e1('.$mfolio.','.$midpaso.',"'.$mestado.'","'.date("Y-m-d H:i:s").'");');
    } 
    
    
     public function fm_insertarfolioexitoso($mfolio,$idestacion) {
        $this->db->query('call spinsertarfolioexitoso2('.$mfolio.','.$idestacion.');');
    }  
    
       
}      