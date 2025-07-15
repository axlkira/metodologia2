<?php

class M_metahogar extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    
    //esta funcion ejecuta el sp para cargar las ayudas de la pregunta
    public function fm_ayudas()
    {
        $query = $this->db->query('call sp3ayudas("crisise");');//se coloca el codigo de la ayuda
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;        
    }

    //esta funcion ejecuta el sp para cargar los datos generales
    public function fm_cargardatosgenerales($mfolio)
    {
        $query = $this->db->query('call sp3cargardatosgenerales('.$mfolio.',11);');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;        
    }
    public function fm_listardimensiones()
    {        
        $query = $this->db->query('call spdimension();');//se llama por procedimiento l almacenado
        $resultado = $query->result();
        $query->next_result(); // Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); // Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;
    }     

     public function fm_listaracciones()
    {        
        $query = $this->db->query('call sp2_linea2acciones();');//se llama por procedimiento l almacenado
        $resultado = $query->result();
        $query->next_result(); // Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); // Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;
    }     

        //esta funcion ejecuta el sp para cargar si ya tiene respuesta la pregunta
    public function fm_buscarmetas($mfolio)
    {
        $query = $this->db->query('call sp2_linea2buscarmetas('.$mfolio.');');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;        
    }    
      
    
     public function fm_guardarnuevameta($mfolio,$cnuevameta,$cdimensionnuevameta)
    {
        $this->db->query('call sp2_linea2nuevameta('.$mfolio.',"'.$cnuevameta.'","'.$cdimensionnuevameta.'");');
    } 
    
     public function fm_actualizarmeta($midmeta,$mfolio,$cnuevameta,$cdimensionnuevameta)
    {
        $this->db->query('call sp2_linea2actualizarmeta('.$midmeta.','.$mfolio.',"'.$cnuevameta.'","'.$cdimensionnuevameta.'");');
    } 
    
    
    
    public function fm_listaraccionesxmeta($mfolio,$mmeta){
         $query = $this->db->query('call sp2_linea2accionesxmeta('.$mfolio.','.$mmeta.');');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;     
        
        
    }
    
    public function fm_insertaraccion($midaccioneditar,$maccion,$mfolio,$mmeta,$mdescripcion){
               
        $query = $this->db->query('call sp2_linea2insertaraccion('.$midaccioneditar.','.$maccion.','.$mfolio.','.$mmeta.',"'.$mdescripcion.'");');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;     
    }
    
    public function fm_eliminaraccion($maccion){
               
        $query = $this->db->query('call sp2_linea2eliminaraccion('.$maccion.');');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;     
    }
    
    public function fm_metaestacioncero($mfolio){
               
        $query = $this->db->query('call sp2_linea2metasdesdeestacioncero('.$mfolio.');');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;     
    }
     public function fm_cerrarpaso($mfolio,$midpaso,$mestado) {
        $this->db->query('call spcerrarpasol1e1('.$mfolio.','.$midpaso.',"'.$mestado.'","'.date("Y-m-d H:i:s").'");');
    }  
}      