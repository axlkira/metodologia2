<?php

class M_acercaroportunidadh extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    
    //esta funcion ejecuta el sp para cargar las ayudas de la pregunta
    public function fm_ayudas()
    {
        $query = $this->db->query('call sp3ayudas("acercaroportunidadh");');//se coloca el codigo de la ayuda
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;        
    }
    
    
     public function fm_buscaroportunidadh($midbuscoph,$mnombuscop,$mvestbuscopi,$mvidintegrante,$mvdimension)
    {        
        $query = $this->db->query('call spbuscaroportunidadh("'.$midbuscoph.'","'.$mnombuscop.'",'.$mvestbuscopi.','.$mvidintegrante.',"'.$mvdimension.'");');//se llama por procedimiento l almacenado
        $resultado = $query->result();
       $query->next_result(); // Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); // Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;
    }
    
    

    //esta funcion ejecuta el sp para cargar los datos generales
    public function fm_cargardatosgenerales($mfolio,$midintegrante)
    {
        $query = $this->db->query('call sp3cargardatosgeneralesintegrante('.$mfolio.',0,'.$midintegrante.');');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;        
    }  
    
    public function fm_listarmejconopor()
    {
        $query = $this->db->query('call splistarmejconopor();');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;        
    }    
    public function fm_listarmejconoporno()
    {
        $query = $this->db->query('call splistarmejconoporno();');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;        
    }


     public function fm_mostrarestadoop($midintegrante)
    {
        $query = $this->db->query('call spmostrarestadooph('.$midintegrante.');');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;        
    }
    
     public function fm_listarestado($midintegrante,$midoportunidad)
    {
        $query = $this->db->query('call splistarestadoop('.$midintegrante.','.$midoportunidad.');');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;        
    }    

    public function fm_listarestado2($idestado)
    {
        $query = $this->db->query('call splistarestadoop2("'.$idestado.'");');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;        
    }    
    //esta funcion ejecuta el sp para cargar si ya tiene respuesta la pregunta
    public function fm_acercaroportunidadh($mfolio,$midintegrante)
    {
            $query = $this->db->query('call splistaroportunidadh('.$mfolio.','.$midintegrante.');');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.

        return $resultado;        
    }    
    

    public function fm_totaleshogar($midintegrante)
    {
        $query = $this->db->query('call sptotaloportunidadhogar('.$midintegrante.');');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.

        return $resultado;        
    }     
    
    //esta funcion actualiza
    public function fm_insertaroportunidad($mvidintegrante,$mvidoportunidad, $mversion,$cvidestado,$doccogestor,$mmejoracondiciones,$midestadoobservacion)
    {
        $this->db->query('call spinsertaroportunidad('.$mvidintegrante.','.$mvidoportunidad.','.$mversion.','.$cvidestado.',"'.$doccogestor.'",'.$mmejoracondiciones.',"'.$midestadoobservacion.'");');
    }    
    
    
     public function fm_eliminaroportunidad($mvidintegrante,$mvidoportunidad,$cvidestado)
    {
        $this->db->query('call speliminaroportunidad('.$mvidintegrante.','.$mvidoportunidad.','.$cvidestado.');');
    }    
       
}      