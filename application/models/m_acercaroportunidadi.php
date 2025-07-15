<?php

class M_acercaroportunidadi extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    
    //esta funcion ejecuta el sp para cargar las ayudas de la pregunta
    public function fm_ayudas()
    {
        $query = $this->db->query('call sp3ayudas("acercaroportunidadi");');//se coloca el codigo de la ayuda
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;        
    }
    
    
     public function fm_buscaroportunidadi($mvidintegrante,$midbuscopi,$mnombuscopi,$mvestbuscopi,$myeaint,$mmesint,$mvdimension)
    {        
        $query = $this->db->query('call spbuscaroportunidadi('.$mvidintegrante.',"'.$midbuscopi.'","'.$mnombuscopi.'",'.$mvestbuscopi.', '.$myeaint.', '.$mmesint.',"'.$mvdimension.'");');//se llama por procedimiento l almacenado
        $resultado = $query->result();
       $query->next_result(); // Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); // Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;
    }
    
    
    public function fm_totaleshogar($midintegrante,$myeaint,$mmesint)
    {
        $query = $this->db->query('call sptotaloportunidadintegrante('.$midintegrante.','.$myeaint.','.$mmesint.');');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.

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
    
//     public function fm_mostrarestadoop($midintegrante)
//    {
//        $query = $this->db->query('call spmostrarestadoopi('.$midintegrante.');');
//        $resultado = $query->result();
//        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
//        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
//        return $resultado;        
//    }
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


     public function fm_listarestadoi($midintegrante,$midoportunidad)
    {
        $query = $this->db->query('call splistarestadoopi('.$midintegrante.','.$midoportunidad.');');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;        
    }    

    public function fm_listarestadoi2($idestado)
    {
        $query = $this->db->query('call splistarestadoopi2("'.$idestado.'");');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;        
    }    
    //esta funcion ejecuta el sp para cargar si ya tiene respuesta la pregunta
    public function fm_acercaroportunidadi($mfolio,$midintegrante,$myeaint,$mmesint,$mdiasint)
    {
        $query = $this->db->query('call splistaroportunidadi('.$mfolio.','.$midintegrante.','.$myeaint.','.$mmesint.','.$mdiasint.');');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.

        return $resultado;        
    }    
    
    
    //esta funcion actualiza
    public function fm_insertaroportunidadi($mvidintegrante,$mvidoportunidad,$mversion,$mvidestado,$doccogestor,$mmejoracondiciones,$midestadoobservacion)
    {
        $this->db->query('call spinsertaroportunidadi('.$mvidintegrante.','.$mvidoportunidad.','.$mversion.','.$mvidestado.',"'.$doccogestor.'",'.$mmejoracondiciones.',"'.$midestadoobservacion.'");');
    }    
    
    
     public function fm_eliminaroportunidadi($mvidintegrante,$mvidoportunidad,$cvidestado)
    {
        $this->db->query('call speliminaroportunidadi('.$mvidintegrante.','.$mvidoportunidad.','.$cvidestado.');');
    }    
    
    

    
       
}      