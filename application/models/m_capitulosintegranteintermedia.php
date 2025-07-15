<?php

class M_capitulosintegranteintermedia extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    //esta funcion se encarga de enlistar los datos que se traeran a un select
//    public function fm_listartablacap4($idintegrante)
//    {        
//        $query = $this->db->query('call splistarcap4i('.$idintegrante.');');//se llama por procedimiento l almacenado
//        $resultado = $query->result();
//        $query->next_result(); // Estas dos funciones permiten realizar varias consultas en el mismo controlador.
//        $query->free_result(); // Estas dos funciones permiten realizar varias consultas en el mismo controlador.
//        return $resultado;
//    } 
    
     public function fm_listartablacap5iintermedia($idintegrante)
    {        
        $query = $this->db->query('call splistarcap5iintermedia('.$idintegrante.');');//se llama por procedimiento l almacenado
        $resultado = $query->result();
        $query->next_result(); // Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); // Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;
    }
    
    public function fm_listartablacap7iintermedia($idintegrante)
    {        
        $query = $this->db->query('call splistarcap7iintermedia('.$idintegrante.');');//se llama por procedimiento l almacenado
        $resultado = $query->result();
        $query->next_result(); // Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); // Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;
    }
    
     public function fm_listartablacap8iintermedia($idintegrante)
    {        
        $query = $this->db->query('call splistarcap8iintermedia('.$idintegrante.');');//se llama por procedimiento l almacenado
        $resultado = $query->result();
        $query->next_result(); // Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); // Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;
    }
    
    
    
        public function fm_listartablacap9liintermedia($idintegrante)
    {        
        $query = $this->db->query('call splistarcap9liintermedia('.$idintegrante.');');//se llama por procedimiento l almacenado
        $resultado = $query->result();
        $query->next_result(); // Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); // Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;
    }
    
    public function fm_listartablacap9oi($idintegrante)
    {        
        $query = $this->db->query('call splistarcap9oi('.$idintegrante.');');//se llama por procedimiento l almacenado
        $resultado = $query->result();
        $query->next_result(); // Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); // Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;
    }
    
    public function fm_listartablacap9piintermedia($idintegrante)
    {        
        $query = $this->db->query('call splistarcap9piintermedia('.$idintegrante.');');//se llama por procedimiento l almacenado
        $resultado = $query->result();
        $query->next_result(); // Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); // Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;
    }
    
     public function fm_listartablacap9mintermedia($idintegrante)
    {        
        $query = $this->db->query('call splistarcap9mintermedia('.$idintegrante.');');//se llama por procedimiento l almacenado
        $resultado = $query->result();
        $query->next_result(); // Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); // Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;
    }
    
    
    
    public function fm_listartablacap9niintermedia($idintegrante)
    {        
        $query = $this->db->query('call splistarcap9niintermedia('.$idintegrante.');');//se llama por procedimiento l almacenado
        $resultado = $query->result();
        $query->next_result(); // Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); // Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;
    }
    
    public function fm_listartablacap9qiintermedia($idintegrante)
    {        
        $query = $this->db->query('call splistarcap9qiintermedia('.$idintegrante.');');//se llama por procedimiento l almacenado
        $resultado = $query->result();
        $query->next_result(); // Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); // Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;
    }
    
     public function fm_listartablacap9riintermedia($idintegrante)
    {        
        $query = $this->db->query('call splistarcap9riintermedia('.$idintegrante.');');//se llama por procedimiento l almacenado
        $resultado = $query->result();
        $query->next_result(); // Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); // Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;
    }

    
    
     public function fm_listartablacap10i($idintegrante)
    {        
        $query = $this->db->query('call splistarcap10i('.$idintegrante.');');//se llama por procedimiento l almacenado
        $resultado = $query->result();
        $query->next_result(); // Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); // Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;
    }
     public function fm_listartablacap11i($idintegrante)
    {        
        $query = $this->db->query('call splistarcap11i('.$idintegrante.');');//se llama por procedimiento l almacenado
        $resultado = $query->result();
        $query->next_result(); // Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); // Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;
    }
    
    public function fm_listartablacap12i($idintegrante)
    {        
        $query = $this->db->query('call splistarcap12i('.$idintegrante.');');//se llama por procedimiento l almacenado
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
        $query = $this->db->query('call spdatosintintermedia('.$idintegrante.');');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;        
    }    
    
    
     public function fm_actualizarint($mfolio,$midintegrante,$mstadointe)
    {
        $this->db->query('call spactualizarestadointintermedia('.$mfolio.','.$midintegrante.','.$mstadointe.');');
    } 
    
//    public function fm_insertarestadoint($mfolio,$midintegrante,$mstadointe)
//    {
//        $this->db->query('call spinsertarestadoint('.$mfolio.','.$midintegrante.','.$mstadointe.');');
//    }
       
}      