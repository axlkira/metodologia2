<?php

class M_totalmadres extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    //esta funcion se encarga de enlistar los datos que se traeran a un select
    public function fm_listartabla($mfolio)
    {        
        $query = $this->db->query('call splistartablatotalmujeres('.$mfolio.');');//se llama por procedimiento l almacenado
        $resultado = $query->result();
        $query->next_result(); // Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); // Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;
    } 
    
 
    
    //esta funcion se encargar de insertar a la base de datos, los datos enviados desde el controlador
    public function fm_foloexiste($idintegrante)
    {
        $query = $this->db->query('call spbuscarintegrante ('.$idintegrante.');');
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
    

    public function fm_cerrarpaso($mfolio,$midpaso,$mestado) {
        $query = $this->db->query('call spcerrarpasol1e1('.$mfolio.','.$midpaso.',"'.$mestado.'","'.date("Y-m-d H:i:s").'");');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        //return $resultado; 

        return $resultado; 
    }
    
    //esta funcion actualiza
    public function fm_actualizarpregunta($mfolio,$midintegrante,$mmadre,$mcantidadHijos,$mfechaNacimiento)
    {
        $this->db->query('call spinsertarmujereshijos('.$mfolio.','.$midintegrante.',"'.$mmadre.'","'.$mcantidadHijos.'","'.$mfechaNacimiento.'");');
    }   
    //esta funcion elimina
    public function fm_CancelarInfo($mfolio,$midintegrante)
    {
        $this->db->query('call speliminarmujereshijos('.$mfolio.','.$midintegrante.');');
    } 
    
    //esta funcion se encargar de insertar a la base de datos, los datos enviados desde el controlador
    public function fm_listagestantes()
    {
        $query = $this->db->query('call splistar_si_no_gestante();');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;        
    }    
}      