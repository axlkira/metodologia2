<?php

class M_c13p1ap12 extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    //esta funcion se encarga de enlistar los datos que se traeran a un select
    public function fm_listarestrato()
    {        
        $query = $this->db->query('call spestratoc1p3();');//se llama por procedimiento l almacenado
        $resultado = $query->result();
        $query->next_result(); // Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); // Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;
    } 
    public function fm_listarcomunas()
    {        
        $query = $this->db->query('call spcomunasc1p4();');//se llama por procedimiento l almacenado
        $resultado = $query->result();
        $query->next_result(); // Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); // Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;
    }
    public function fm_listarbarrios($midcomuna)
    {        
        $query = $this->db->query('call spbarriosc1p5("'.$midcomuna.'");');//se llama por procedimiento l almacenado
        $resultado = $query->result();
        $query->next_result(); // Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); // Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;
    }
    
    public function fm_listarrelcont()
    {        
        $query = $this->db->query('call sprelcontc1p10();');//se llama por procedimiento l almacenado
        $resultado = $query->result();
        $query->next_result(); // Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); // Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;
    } 
    
    
    
    //esta funcion se encargar de insertar a la base de datos, los datos enviados desde el controlador
    public function fm_folioexiste($folio)
    {
        $query = $this->db->query('call spbuscarc1p1ap12 ('.$folio.');');
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
    public function fm_insertar($mfolio,$mc1p1,$mc1p2,$mc1p3,$mc1p4,$mc1p5,$mc1p6,$mc1p7,$mc1p8,$mc1p9,$mc1p10,$mc1p11,$mc1p11a,$mc1p12)
    {
        $this->db->query('call spinsertarc1p1ap12('.$mfolio.',"'.$mc1p1.'","'.$mc1p2.'","'.$mc1p3.'","'.$mc1p4.'","'.$mc1p5.'","'.$mc1p6.'","'.$mc1p7.'","'.$mc1p8.'","'.$mc1p9.'","'.$mc1p10.'","'.$mc1p11.'","'.$mc1p11a.'","'.$mc1p12.'", "'.date("Y-m-d H:i:s").'", "'.date("Y-m-d H:i:s").'");');
    }
    
    //esta funcion actualiza
    public function fm_actualizar($mfolio,$mc1p1,$mc1p2,$mc1p3,$mc1p4,$mc1p5,$mc1p6,$mc1p7,$mc1p8,$mc1p9,$mc1p10,$mc1p11,$mc1p11a,$mc1p12)
    {
        $this->db->query('call spactualizarc1p1ap12 ('.$mfolio.',"'.$mc1p1.'","'.$mc1p2.'","'.$mc1p3.'","'.$mc1p4.'","'.$mc1p5.'","'.$mc1p6.'","'.$mc1p7.'","'.$mc1p8.'","'.$mc1p9.'","'.$mc1p10.'","'.$mc1p11.'","'.$mc1p11a.'","'.$mc1p12.'","'.date("Y-m-d H:i:s").'");');
    }    
    public function fm_cerrar($mfolio,$mcerrarcap1) {
        $this->db->query('call spcerrarc1p1ap12('.$mfolio.',"'.$mcerrarcap1.'","'.date("Y-m-d H:i:s").'");');
    }   
    
    public function fm_cargardatosgenerales($mfolio)
    {
        $query = $this->db->query('call sp3cargardatosgenerales('.$mfolio.',13);');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;        
    }   

       
}      