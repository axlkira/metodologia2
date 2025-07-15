<?php

class M_sincronizacionl_aba_sincronizarprotocolopasosestadod extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    
    //esta funcion ejecuta el sp para cargar las ayudas de la pregunta
    public function fm_sincronizacionl_aba_sincronizarprotocolopasosestadod($folio,$idpaso,$estado,$fecharegistro,$sincro,$fechasincro)
    {
        $query = $this->db->query('call spsincronizarprotocolopasosestadod('.$folio.', '.$idpaso.', '.$estado.', "'.$fecharegistro.'", '.$sincro.', "'.$fechasincro.'");');//se coloca el codigo de la ayuda
        $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
       // return $resultado;        
    }

    public function fm_sincronizacionl_aba_sincronizarprotocolopasosestadod1($folio,$idpaso,$estado,$fecharegistro,$sincro,$fechasincro)
    {
        $query = $this->db->query('call spsincronizarprotocolopasosestadod('.$folio.', '.$idpaso.', '.$estado.', "'.$fecharegistro.'", '.$sincro.', "'.$fechasincro.'");');//se coloca el codigo de la ayuda
        $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
       // return $resultado;        
    }
    
    public function fm_sincronizacionl_aba_sincronizarprotocolopasosestadod2($folio,$idpaso,$estado,$fecharegistro,$sincro,$fechasincro)
    {
        $query = $this->db->query('call spsincronizarprotocolopasosestadod('.$folio.', '.$idpaso.', '.$estado.', "'.$fecharegistro.'", '.$sincro.', "'.$fechasincro.'");');//se coloca el codigo de la ayuda
        $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
       // return $resultado;        
    }
    
    public function fm_sincronizacionl_aba_sincronizarprotocolopasosestadod3($folio,$idpaso,$estado,$fecharegistro,$sincro,$fechasincro)
    {
        $query = $this->db->query('call spsincronizarprotocolopasosestadod('.$folio.', '.$idpaso.', '.$estado.', "'.$fecharegistro.'", '.$sincro.', "'.$fechasincro.'");');//se coloca el codigo de la ayuda
        $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
       // return $resultado;        
    }
    
    public function fm_sincronizacionl_aba_sincronizarprotocolopasosestadod4($folio,$idpaso,$estado,$fecharegistro,$sincro,$fechasincro)
    {
        $query = $this->db->query('call spsincronizarprotocolopasosestadod('.$folio.', '.$idpaso.', '.$estado.', "'.$fecharegistro.'", '.$sincro.', "'.$fechasincro.'");');//se coloca el codigo de la ayuda
        $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
       // return $resultado;        
    }    
      
}      