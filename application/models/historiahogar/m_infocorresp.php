<?php

class M_infocorresp extends CI_Model {

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

        //esta funcion ejecuta el sp para cargar si ya tiene respuesta la pregunta
    public function fm_buscarinfocorresp($mfolio)
    {
        $query = $this->db->query('call sp6_buscarinfocorresponsabilidad('.$mfolio.');');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;        
    }    
    //esta funcion actualiza
    public function fm_actualizarpregunta($mfolio,$mvalorinfocorresp1,$mvalorinfocorresp2,$mvalorinfocorresp3,$minfocorrespcual,$mvalorinfoautonomia1,$mvalorinfoautonomia2,$minfoautonomiacual)
    {
        $this->db->query('call sp6_actualizarcorrespautonomia('.$mfolio.',"'.$mvalorinfocorresp1.'","'.$mvalorinfocorresp2.'","'.$mvalorinfocorresp3.'","'.$this->db->escape_str($minfocorrespcual).'","'.$mvalorinfoautonomia1.'","'.$mvalorinfoautonomia2.'","'.$this->db->escape_str($minfoautonomiacual).'");');
    }    
    
    public function fm_cerrarpaso($mfolio,$midpaso,$mestado) {
        $this->db->query('call spcerrarpasol1e1('.$mfolio.','.$midpaso.',"'.$mestado.'","'.date("Y-m-d H:i:s").'");');
    } 
     public function fm_cerrarestacion($mfolio,$midestacion,$mestado,$midcobertura,$mdoccogestor,$mlongitud,$mlatitud,$mmensajedonde) {
        $this->db->query('call spcerrarestacion('.$mfolio.','.$midestacion.','.$mestado.','.$midcobertura.',"'.$mdoccogestor.'","'.$mlongitud.'","'.$mlatitud.'","'.$mmensajedonde.'");');
    }     
       
}      