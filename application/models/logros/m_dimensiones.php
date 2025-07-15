<?php

class M_dimensiones extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    
    
    //esta funcion se encargar de insertar a la base de datos, los datos enviados desde el controlador
    public function fm_folioexiste($folio)
    {
        $query = $this->db->query('call spbuscarprincipalhogar ('.$folio.');');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
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
    
      //esta funcion se encarga de enlistar los datos que se traeran a un select
    public function fm_listartablalogro()
    {        
        $query = $this->db->query('call sp4listarlogros();');//se llama por procedimiento l almacenado
        $resultado = $query->result();
        $query->next_result(); // Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); // Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;
    } 
    
    
       //esta funcion se encarga de enlistar los datos que se traeran a un select
    public function fm_calcularlogro($mfolio,$midlogro)
    {        
        $query = $this->db->query('call sp4totallogros('.$mfolio.','.$midlogro.');');//se llama por procedimiento l almacenado
        $resultado = $query->result();
        $query->next_result(); // Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); // Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;
    } 
    
     public function fm_cerrarpaso($mfolio,$midpaso,$mestado) {
        $this->db->query('call spcerrarpasol1e1('.$mfolio.','.$midpaso.',"'.$mestado.'","'.date("Y-m-d H:i:s").'");');
    } 

    //esta funcion se encargar de insertar a la base de datos, los datos enviados desde el controlador
    public function fm_totalporcentajelogros($folio)
    {
        $query = $this->db->query('call sptotalporcentajelogros('.$folio.');');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;        
    }

     //esta funcion se encargar de insertar a la base de datos, los datos enviados desde el controlador
     public function fm_totalporcentajelogrosaplicancn($folio)
     {
         $query = $this->db->query('call sptotalporcentajelogrosaplicancn('.$folio.');');
         $resultado = $query->result();
         $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
         $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
         return $resultado;        
     }
}      