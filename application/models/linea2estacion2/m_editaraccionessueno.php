<?php

class M_editaraccionessueno extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    //esta funcion se encargar de insertar a la base de datos, los datos enviados desde el controlador
    public function fm_principalsuenoaccionesact($folio,$idintegrante,$idsueno,$idacciones)
    {
        $query = $this->db->query('call spbuscarsuenoaccionesact ('.$folio.','.$idintegrante.','.$idsueno.','.$idacciones.');');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;        
    }
    //esta funcion se encargar de insertar a la base de datos, los datos enviados desde el controlador
    public function fm_suenointegrante($folio,$idintegrante,$idsueno)
    {
        $query = $this->db->query('call spbuscarprincipalsuenointe('.$folio.','.$idintegrante.','.$idsueno.');');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;        
    }    
    //esta funcion se encarga de enlistar los datos que se traeran a un select
    public function fm_listarrepresentante($folio)
    {        
        $query = $this->db->query('call splistarrepresentanteact('.$folio.');');//se llama por procedimiento l almacenado
        $resultado = $query->result();
        $query->next_result(); // Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); // Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;
    }
   
    public function fm_suenotiempo()
    {        
        $query = $this->db->query('call spsuenotiempo();');//se llama por procedimiento l almacenado
        $resultado = $query->result();
        $query->next_result(); // Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); // Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;
    } 
    public function fm_listarcategorias()
    {        
        $query = $this->db->query('call splistarcategoriasueno();');//se llama por procedimiento l almacenado
        $resultado = $query->result();
        $query->next_result(); // Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); // Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;
    }
    
    //esta funcion se encargar de insertar a la base de datos, los datos enviados desde el controlador
    public function fm_principalhogarsueno($folio)
    {
        $query = $this->db->query('call spbuscarprincipalhogarsueno ('.$folio.');');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;        
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
    
    //esta funcion inserta los registros
    public function fm_actualizar($midsueno,$midaccion,$mfolio,$midintegrante,$mnombresuenoaccion,$msuenotiempo)
    {
        $this->db->query('call spactualizarsuenoaccion('.$midsueno.','.$midaccion.','.$mfolio.','.$midintegrante.',"'.$mnombresuenoaccion.'","'.$msuenotiempo.'");');
    }
    public function fm_eliminaraccion($midaccion,$midsueno,$mfolio,$midintegrante) {
        $this->db->query('call speliminaraccion('.$midaccion.','.$midsueno.','.$mfolio.',"'.$midintegrante.'");');
    }   
       
}      