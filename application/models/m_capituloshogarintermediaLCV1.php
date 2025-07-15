<?php

class M_capituloshogarintermediaLCV1 extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    //esta funcion se encarga de enlistar los datos que se traeran a un select
//    public function fm_listartablacap1($mfolio)
//    {        
//        $query = $this->db->query('call splistarcap1h('.$mfolio.');');//se llama por procedimiento l almacenado
//        $resultado = $query->result();
//        $query->next_result(); // Estas dos funciones permiten realizar varias consultas en el mismo controlador.
//        $query->free_result(); // Estas dos funciones permiten realizar varias consultas en el mismo controlador.
//        return $resultado;
//    } 
    
    public function fm_listartablacap2($mfolio)
    {        
        $query = $this->db->query('call sp7_listarcap2hintermediaLCV1('.$mfolio.');');//se llama por procedimiento l almacenado
        $resultado = $query->result();
        $query->next_result(); // Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); // Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;
    } 
    
  
    
    public function fm_listartablacap6($mfolio)
    {        
        $query = $this->db->query('call sp7_listarcap6hintermediaLCV1('.$mfolio.');');//se llama por procedimiento l almacenado
        $resultado = $query->result();
        $query->next_result(); // Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); // Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;
    } 
    
    public function fm_listartablacap11($mfolio)
    {        
        $query = $this->db->query('call sp7_listarcap11hintermediaLCV1('.$mfolio.');');//se llama por procedimiento l almacenado
        $resultado = $query->result();
        $query->next_result(); // Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); // Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;
    } 
       
    //esta funcion se encargar de insertar a la base de datos, los datos enviados desde el controlador
    public function fm_datosintegrante($folio,$idintegrante)
    {
        $query = $this->db->query('call spdatosintegrante('.$folio.','.$idintegrante.');');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;        
    }    
    
    
    public function fm_cerrarform($mfolio,$midpaso,$mestado) {
        $this->db->query('call sp7_cerrarpasohintermedia('.$mfolio.','.$midpaso.','.$mestado.');');
    }
    
}      