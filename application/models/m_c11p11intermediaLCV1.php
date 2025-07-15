<?php

class M_c11p11intermediaLCV1 extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    
    //esta funcion ejecuta el sp para cargar las ayudas de la pregunta
    public function fm_ayudas()
    {
        $query = $this->db->query('call sp3ayudas("c11p11intermedia");');//se coloca el codigo de la ayuda
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

    //esta funcion ejecuta el sp para cargar si ya tiene respuesta la pregunta
    public function fm_buscarpregunta($mfolio)
    {
        $query = $this->db->query('call spbuscarcapitulo11p11intermediaLCV1('.$mfolio.');');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;        
    }    
    
    
    //esta funcion actualiza
    public function fm_actualizarpregunta($mfolio,$mvalorc11p7o1,$mvalorc11p7o2,$mvalorc11p7o3,$mvalorc11p7o4,$mvalorc11p7o5,
                                         $mvalorc11p7o6,$mvalorc11p7o7,$mvalorc11p7o8,$mvalorc11p7o9,$mvalorc11p7o10,$mvalorc11p7o11,
                                         $mvalorc11p7o12,$mvalorc11p7o13,$mvalorc11p7o14,$mvalorc11p7o15,$mvalorc11p7cual)
    {
        $this->db->query('call spactualizarcapitulo11p11intermediaLCV1('.$mfolio.',"'.$mvalorc11p7o1.'","'.$mvalorc11p7o2.'","'.$mvalorc11p7o3.'",
                        "'.$mvalorc11p7o4.'","'.$mvalorc11p7o5.'","'.$mvalorc11p7o6.'","'.$mvalorc11p7o7.'","'.$mvalorc11p7o8.'",
                "'.$mvalorc11p7o9.'","'.$mvalorc11p7o10.'","'.$mvalorc11p7o11.'","'.$mvalorc11p7o12.'","'.$mvalorc11p7o13.'","'.$mvalorc11p7o14.'","'.$mvalorc11p7o15.'","'.$mvalorc11p7cual.'");');
    }    
    
    
    public function fm_cerrarpaso($mfolio,$midpaso,$mestado) {
            $this->db->query('call spcerrarpasol1e1('.$mfolio.','.$midpaso.',"'.$mestado.'","'.date("Y-m-d H:i:s").'");');
    }
       
}      