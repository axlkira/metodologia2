<?php

class M_ppcapitulosintegrante extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    //esta funcion se encarga de enlistar los datos que se traeran a un select
    public function fm_listartablacap1($idintegrante)
    {        
        $query = $this->db->query('call splistarppcap1('.$idintegrante.');');//se llama por procedimiento l almacenado
        $resultado = $query->result();
        $query->next_result(); // Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); // Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;
    } 
    
     public function fm_listartablacap5i($idintegrante)
    {        
        $query = $this->db->query('call splistarppcap2('.$idintegrante.');');//se llama por procedimiento l almacenado
        $resultado = $query->result();
        $query->next_result(); // Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); // Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;
    }
    
    public function fm_listartablacap7i($idintegrante)
    {        
        $query = $this->db->query('call splistarppcap3('.$idintegrante.');');//se llama por procedimiento l almacenado
        $resultado = $query->result();
        $query->next_result(); // Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); // Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;
    }
    
     public function fm_listartablacap8i($idintegrante)
    {        
        $query = $this->db->query('call splistarppcap4('.$idintegrante.');');//se llama por procedimiento l almacenado
        $resultado = $query->result();
        $query->next_result(); // Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); // Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;
    }
    
//    public function fm_listartablacap2($mfolio)
//    {        
//        $query = $this->db->query('call splistarcap2h('.$idintegrante.');');//se llama por procedimiento l almacenado
//        $resultado = $query->result();
//        $query->next_result(); // Estas dos funciones permiten realizar varias consultas en el mismo controlador.
//        $query->free_result(); // Estas dos funciones permiten realizar varias consultas en el mismo controlador.
//        return $resultado;
//    } 
       
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
        $this->db->query('call spcerrarform('.$mfolio.','.$midpaso.',"'.$mestado.'","'.date("Y-m-d H:i:s").'");');
    }
    
    
    
     public function fm_buscarestadoint($idintegrante)
    {
        $query = $this->db->query('call spdatosint('.$idintegrante.');');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;        
    }    
    
    
     public function fm_actualizarint($mfolio,$midintegrante,$mstadointe2)
    {
        $this->db->query('call spactualizarestadoint2('.$mfolio.','.$midintegrante.','.$mstadointe2.');');
    } 
    
//    public function fm_insertarestadoint($mfolio,$midintegrante,$mstadointe)
//    {
//        $this->db->query('call spinsertarestadoint('.$mfolio.','.$midintegrante.','.$mstadointe.');');
//    }
       
}      