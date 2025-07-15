<?php

class M_c4p8 extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    
    
    public function fm_listarpaises()
    {
        $query = $this->db->query('call splistarpaises();');//se llama por procedimiento l almacenado
        $resultado = $query->result();
        $query->next_result(); // Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); // Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;
        
    }
    //esta funcion ejecuta el sp para cargar las ayudas de la pregunta
    public function fm_ayudas()
    {
        $query = $this->db->query('call sp3ayudas("c4p8");');//se coloca el codigo de la ayuda
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;        
    }

    //esta funcion ejecuta el sp para cargar los datos generales
  public function fm_cargardatosgenerales($mfolio,$midintegrante)
    {
        $query = $this->db->query('call sp3cargardatosgeneralesintegrante('.$mfolio.',4,'.$midintegrante.');');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;        
    }   

    //esta funcion ejecuta el sp para cargar si ya tiene respuesta la pregunta
    public function fm_buscarpregunta($midintegrante)
    {
        $query = $this->db->query('call spbuscarcapitulo4p8('.$midintegrante.');');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;        
    }    
    
    
    //esta funcion actualiza
    public function fm_actualizarpregunta($mfolio,$midintegrante,$mvalorc4p8o1,$cvc4p8o2)
    {
        $this->db->query('call spactualizarcapitulo4p8('.$mfolio.','.$midintegrante.',"'.$mvalorc4p8o1.'","'.$cvc4p8o2.'");');
    }    
    


      //////////// inicio nuevas variables ///////////
      public function fm_listarnacionalidad($mtipodocumento)
      {        
          $query = $this->db->query('call sp_Nacionalidadc("'.$mtipodocumento.'");');//se llama por procedimiento l almacenado
          $resultado = $query->result();
          $query->next_result(); // Estas dos funciones permiten realizar varias consultas en el mismo controlador.
          $query->free_result(); // Estas dos funciones permiten realizar varias consultas en el mismo controlador.
          return $resultado;
      }
       
}      