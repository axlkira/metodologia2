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

     // Función que inserta el registro final en t_protocoloestacionestado
     public function fm_guardar_protocolo_final($mfolio)
     {
         // 1. Preparamos los datos que vamos a insertar
         $data = array(
             'folio' => $mfolio,
             'idestacion' => 20223, 
             'estado' => 2,        
             'fecharegistro' => date('Y-m-d H:i:s'), // Fecha y hora actual
             'sincro' => 0         
         );
 
         // 2. Usamos el Query Builder de CodeIgniter para hacer la inserción
         // El primer parámetro es el nombre de la tabla, el segundo son los datos.
         $this->db->insert('t_protocoloestacionestado', $data);
     }

     // Función para verificar si el protocolo ya fue finalizado
     public function fm_verificar_protocolo_finalizado($mfolio)
     {
        $this->db->select('COUNT(*) as total');
        $this->db->from('t_protocoloestacionestado');
        $this->db->where('folio', $mfolio);
        $this->db->where('idestacion', 20223);
        $query = $this->db->get();
        $result = $query->row();

        // Si el conteo es mayor a 0, significa que ya existe un registro.
        return ($result->total > 0);
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