<?php

class M_protocolo_final extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
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
    
    //esta funcion inserta los registros de cada paso realizado
    public function fm_cerrarpaso($mfolio,$midpaso,$mestado) {
        $this->db->query('call spcerrarpasol1e1('.$mfolio.','.$midpaso.',"'.$mestado.'","'.date("Y-m-d H:i:s").'");');
    }   
    
    public function fm_cerrarestacion($mfolio,$midestacion,$mestado,$midcobertura,$mdoccogestor,$mlongitud,$mlatitud,$mmensajedonde) {
        $this->db->query('call spcerrarestacion('.$mfolio.','.$midestacion.','.$mestado.','.$midcobertura.',"'.$mdoccogestor.'","'.$mlongitud.'","'.$mlatitud.'","'.$mmensajedonde.'");');
    }    
    public function mostrarmaximoidpaso($mfolio)
    {
        $query = $this->db->query('call spmaximospasodiferente81('.$mfolio.');');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;        
    }
    public function mostrarmaximoidpaso81($mfolio)
    {
        $query = $this->db->query('call spmaximospasoigual81('.$mfolio.');');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;        
    }
    
    
    
    
    
    
//    {
//        $this->db->select('MAX(idpaso) AS maximoidpaso');
//        $this->db->from('t_protocolopasosestado');                     
//        $this->db->where('folio',$mfolio);
//        $query = $this->db->get();
//        $maximoidpaso=$query->result();
//        return $maximoidpaso;
//    }
    
     public function fm_insertarfolioexitoso($mfolio,$idestacion) {
        $this->db->query('call spinsertarfolioexitoso2('.$mfolio.','.$idestacion.');');
    }  
    
     public function fm_insertarfoliohogarintermedia($mfolio)
             {
        $this->db->query('call spinsertacapitulohogarintermediaLCV1('.$mfolio.');');
            }
    
            
               public function fm_saltohogarintermedia($folio)
    {
        $query = $this->db->query('call sp7saltohogar_intermediaLCV1('.$folio.');');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;        
    }    
    public function fm_calcularprivacionesinter($mfolio) {
        $this->db->query('call sp5realizartodasprivacionesintermediaLCV1('.$mfolio.');');
    }
            
       


////////////// nuevo ///////////////////////

public function fm_actualizarep0($mfolio,$midestacion,$mvalorp0,$mvcualmotivo,$mdoccogestor)
{
    $query = $this->db->query('call sp0_actualizarep0('.$mfolio.','.$midestacion.',"'.$mvalorp0.'","'.$mvcualmotivo.'","'.$mdoccogestor.'");');
    $resultado = $query->result();
    $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
    $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
    return $resultado;     
}
public function fm_traerp0informaciongeneral($mfolio,$midestacion)
{
    $query = $this->db->query('call sp0_traerp0informaciongeneralvisita('.$mfolio.','.$midestacion.');');
    $resultado = $query->result();
    $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
    $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
    return $resultado;     
}
 ////////////////////////////////// fin nuevo ///////////////////////////  





}      