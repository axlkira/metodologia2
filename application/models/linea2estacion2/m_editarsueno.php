<?php

class M_editarsueno extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
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
   
    public function fm_suenoaplica()
    {        
        $query = $this->db->query('call spsuenoaplica();');//se llama por procedimiento l almacenado
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
    public function fm_principalhogarsuenoact($folio,$idintegrante,$idsueno)
    {
        $query = $this->db->query('call spbuscarprincipalsuenoact('.$folio.','.$idintegrante.','.$idsueno.');');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;        
    }
    //esta funcion se encargar de insertar a la base de datos, los datos enviados desde el controlador
    public function fm_principalhogarsueno($folio)
    {
        $query = $this->db->query('call spbuscarprincipalhogarsueno('.$folio.');');
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
    public function fm_actualizar($midsueno,$mfolio,$midintegrante,$maplica,$cnombresueno,$mcatsueno,$mrecursosinto1,$mrecursosinto2,$mrecursosinto3,$mrecursosinto4,$mrecursosinto5,$mrecursosinto6,$mrecursosinto7,$mrecursosinto8,$mrecursosinto9,$mrecursosexto1,$mrecursosexto2,$mrecursosexto3,$mrecursosexto4,$mrecursosexto5)
    {
        $this->db->query('call spactualizarsueno('.$midsueno.','.$mfolio.',"'.$midintegrante.'","'.$maplica.'","'.$cnombresueno.'","'.$mcatsueno.'","'.$mrecursosinto1.'","'.$mrecursosinto2.'","'.$mrecursosinto3.'","'.$mrecursosinto4.'","'.$mrecursosinto5.'","'.$mrecursosinto6.'","'.$mrecursosinto7.'","'.$mrecursosinto8.'","'.$mrecursosinto9.'","'.$mrecursosexto1.'","'.$mrecursosexto2.'","'.$mrecursosexto3.'","'.$mrecursosexto4.'","'.$mrecursosexto5.'");');
    }
    public function fm_eliminarsueno($mid,$mfolio,$midintegrante) {
        $this->db->query('call speliminarsueno('.$mid.','.$mfolio.',"'.$midintegrante.'");');
    }   
       
}      