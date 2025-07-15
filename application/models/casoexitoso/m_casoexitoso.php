<?php

class M_casoexitoso extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    
    //esta funcion ejecuta el sp para cargar las ayudas de la pregunta
    public function fm_ayudas()
    {
        $query = $this->db->query('call sp3ayudas("ppactualizar");');//se coloca el codigo de la ayuda
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;        
    }

    //esta funcion ejecuta el sp para cargar los datos generales
    public function fm_cargardatosgenerales($mfolio)
    {
        $query = $this->db->query('call sp3cargardatosgenerales('.$mfolio.',98);');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;        
    }    

    //esta funcion ejecuta el sp para cargar si ya tiene respuesta la pregunta
    public function fm_buscarexitoso($mfolio,$idestacion)
    {
        $query = $this->db->query('call spbuscarexitoso('.$mfolio.',"'.$idestacion.'");');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;        
    }    
    
    
    //esta funcion actualiza
    public function fm_actualizarpregunta($mfolio,$mexitoso,$mestacion)
    {
        $this->db->query('call spactualizarexitoso('.$mfolio.',"'.$mexitoso.'","'.$mestacion.'");');
    }    
    
//     public function fm_cerrarpaso($mfolio,$midpaso,$mestado) {
//        $this->db->query('call spcerrarpasol1e1('.$mfolio.','.$midpaso.',"'.$mestado.'","'.date("Y-m-d H:i:s").'");');
//    }  
    
     public function fm_cerrarpaso($mfolio,$midpaso,$mestado) {
        $this->db->query('call spcerrarpasol1e1('.$mfolio.','.$midpaso.','.$mestado.',"'.date("Y-m-d H:i:s").'");');
    }

    
     public function fm_nocasoexitoso($mfolio,$midestacion) {
        $this->db->query('call spnocasoexitoso('.$mfolio.',"'.$midestacion.'");');
    }
    
}     

