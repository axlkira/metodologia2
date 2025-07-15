<?php

class M_lograrhogar extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    
    //esta funcion ejecuta el sp para cargar las ayudas de la pregunta
    public function fm_ayudas()
    {
        $query = $this->db->query('call sp3ayudas("crisise");');//se coloca el codigo de la ayuda
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;        
    }

    //esta funcion ejecuta el sp para cargar los datos generales
    public function fm_cargardatosgenerales($mfolio)
    {
        $query = $this->db->query('call sp3cargardatosgenerales('.$mfolio.',11);');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;        
    }
    public function fm_listardimensiones()
    {        
        $query = $this->db->query('call spdimension();');//se llama por procedimiento l almacenado
        $resultado = $query->result();
        $query->next_result(); // Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); // Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;
    }     

        //esta funcion ejecuta el sp para cargar si ya tiene respuesta la pregunta
    public function fm_buscarmetas($mfolio)
    {
        $query = $this->db->query('call sp6_buscarmetas('.$mfolio.');');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;        
    }    
    //esta funcion actualiza   
    public function fm_actualizarpregunta($mfolio,$mmeta1mostrar,$mmeta1dime,$mmeta2mostrar,$mmeta2dime,$mmeta3mostrar,$mmeta3dime)
    {
        $this->db->query('call sp6_actualizarmetas('.$mfolio.',"'.$mmeta1mostrar.'","'.$mmeta1dime.'","'.$mmeta2mostrar.'","'.$mmeta2dime.'","'.$mmeta3mostrar.'","'.$mmeta3dime.'");');
    } 
    
    public function fm_cerrarpaso($mfolio,$midpaso,$mestado) {
        $this->db->query('call spcerrarpasol1e1('.$mfolio.','.$midpaso.',"'.$mestado.'","'.date("Y-m-d H:i:s").'");');
    } 
    
    public function fm_cerrarestacionh($mfolio,$midestacion,$mestado) {
        $this->db->query('call spcerrarestacionh('.$mfolio.','.$midestacion.','.$mestado.');');
    }
   
    public function fm_cerrarestacionhcompleta($mfolio,$midestacion,$mestado,$midcobertura,$mdoccogestor) {
        $this->db->query('call spcerrarestacionhcompleta('.$mfolio.','.$midestacion.','.$mestado.','.$midcobertura.','.$mdoccogestor.');');
    }
    
    
    public function fm_cerrarestacion($mfolio,$midestacion,$mestado,$midcobertura,$mdoccogestor,$mlongitud,$mlatitud,$mmensajedonde) {
        $this->db->query('call spcerrarestacion('.$mfolio.','.$midestacion.','.$mestado.','.$midcobertura.',"'.$mdoccogestor.'","'.$mlongitud.'","'.$mlatitud.'","'.$mmensajedonde.'");');
    } 
}      