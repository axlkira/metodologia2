<?php

class M_principalprotocolo extends CI_Model {

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
    
    /*//esta funcion inserta los registros de cada paso realizado
    public function fm_cerrarpaso($mfolio,$midpaso,$mestado) {
        $this->db->query('call spcerrarpasol1e1('.$mfolio.','.$midpaso.',"'.$mestado.'","'.date("Y-m-d H:i:s").'");');
    }   
    
    public function fm_cerrarestacion($mfolio,$midestacion,$mestado) {
        $this->db->query('call spcerrarestacionl1e1('.$mfolio.','.$midestacion.',"'.$mestado.'","'.date("Y-m-d H:i:s").'");');
    }*/ 
        
    public function mostrarmaximoidestacion($mfolio){
        $this->db->select('MAX(idestacion) AS maximoidestacion');
        $this->db->from('t_protocoloestacionestado');                     
        $this->db->where('folio',$mfolio);
        $query = $this->db->get();
        $maximoidestacion=$query->result();
        return $maximoidestacion;
        
    }
    
    public function mostrarminimoidestacion($folio) {
        $this->db->select('MIN(idestacion) AS minimoidestacion');
        $this->db->from('t_protocoloestacionestado');                     
        $this->db->where('folio',$folio);
        $this->db->where_not_in('idestacion','1');
        $query = $this->db->get();
        $maximoidestacion=$query->result();
        return $maximoidestacion;
        
    }
    
    public function fm_estacionhincompleto($mfolio){
        $this->db->select('count(folio) AS totalfolio');
        $this->db->from('t_protocolopasosestado');                     
        $this->db->where('folio',$mfolio);
        $this->db->where('idpaso','1001');
        $query = $this->db->get();
        $maximoidestacion=$query->result();
        return $maximoidestacion;
        
    }
    
    
    public function fm_insertarfolioperfil($mfolio,$midpaso,$mestado) {
        $this->db->query('call spinsertarfolioperfil('.$mfolio.',"'.$midpaso.'","'.$mestado.'");');
    }  
    
     public function fm_insertarfolioactualizacion($mfolio,$midpaso,$mestado) {
        $this->db->query('call spinsertarfolioactualizar('.$mfolio.',"'.$midpaso.'","'.$mestado.'");');
    }
    
    public function fm_insertarfolioingresos($mfolio,$midpaso,$mestado) {
        $this->db->query('call spinsertarfolioingresos('.$mfolio.',"'.$midpaso.'","'.$mestado.'");');
    } 
    
    public function fm_insertarfolioingresosna($mfolio,$midpaso,$mestado) {
        $this->db->query('call spinsertarfolioingresosna('.$mfolio.',"'.$midpaso.'","'.$mestado.'");');
    } 
    
    
    
     public function fm_insertarfoliol2e1($mfolio) {
        $this->db->query('call spinsertarfoliol2e1('.$mfolio.');');
    }  
    
    public function fm_insertarfolioestrategias($mfolio) {
        $this->db->query('call spinsertarfolioestrategias('.$mfolio.');');
    }  
    
    
     public function fm_desatraceestacioncero($mfolio) {
        $query = $this->db->query('call spdesatraceestacioncero('.$mfolio.');');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;  
        
    }  
    
    public function controleh($mfolio){
        $this->db->select('control');
        $this->db->from('t6_estacioncerocea');                     
        $this->db->where('folio',$mfolio);
        $query = $this->db->get();
        $controlehestado=$query->result();
        return $controlehestado;
        
    }
    
    public function fm_traercasilla($mfolio)
    {
        $query = $this->db->query('call sptraercasilla('.$mfolio.');');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;        
    } 
    
    public function fm_habilitaintermedia($mfolio)
    {
        $query = $this->db->query('call sphabilitaintermedia1('.$mfolio.');');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;        
    }
    
    public function fm_traercasilladf($mfolio)
    {
        $query = $this->db->query('call spcasillamatrizdf('.$mfolio.');');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;        
    }
    
    public function fm_traermaximopasodf81($mfolio)
    {
        $query = $this->db->query('call spmaximopasodiferente81('.$mfolio.');');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;        
    }
    
    public function fm_traerintermediahisto($mfolio)
    {
        $query = $this->db->query('call spintermediahistor('.$mfolio.');');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;        
    }
    
    public function fm_selectinsertintermedia($mfolio) {
        $this->db->query('call spselectinsertintermedia('.$mfolio.');');
    }
    
    public function fm_traerestadoidestacion31($mfolio)
    {
        $query = $this->db->query('call sptraerestadoidestacion31('.$mfolio.');');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;        
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
/////////////////////////// fin nuevo /////////////////////






public function fm_traermomento_vi($mfolio)
    {
        $query = $this->db->query('call sptraermomento_vi('.$mfolio.');');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;        
    }

    public function fm_casillaLCV1($mfolio)
    {
        $query = $this->db->query('call sptraercasillalcv1('.$mfolio.');');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;        
    }    




}      