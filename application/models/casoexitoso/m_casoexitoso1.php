<?php

class M_casoexitoso1 extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    
    //esta funcion ejecuta el sp para cargar las ayudas de la pregunta
    public function fm_ayudas()
    {
        $query = $this->db->query('call sp3ayudas("98");');//se coloca el codigo de la ayuda
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;        
    }

    //esta funcion ejecuta el sp para cargar los datos generales
    public function fm_cargardatosgenerales($mfolio)
    {
        $query = $this->db->query('call sp3cargardatosgenerales('.$mfolio.',98);');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;        
    }    

    //esta funcion ejecuta el sp para cargar si ya tiene respuesta la pregunta
    public function fm_buscarpregunta($mfolio,$idestacion)
    {
        $query = $this->db->query('call spbuscarexitoso('.$mfolio.','.$idestacion.');');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;        
    }    
    
    
    //esta funcion actualiza
    public function fm_actualizarpregunta($mfolio,$mcexitosoo1,$mcexitosoo2,$mcexitosoo3,$mcexitosoo4,$mcexitosoo5,$mcexitosoo6,$mcexitosoo7,$mcexitosoo8,$mcexitosoo9,$mtextoavo1,$mtextoavo2,$mtextoavo3,$mtextoavo4,$mtextoavo5,$mtextoavo6,$mtextoavo7,$mtextoavo8,$mtextoavo9,$midestacion)
    {
        $this->db->query('call spactualizarexitoso1('.$mfolio.',"'.$mcexitosoo1.'","'.$mcexitosoo2.'","'.$mcexitosoo3.'","'.$mcexitosoo4.'","'.$mcexitosoo5.'","'.$mcexitosoo6.'","'.$mcexitosoo7.'","'.$mcexitosoo8.'","'.$mcexitosoo9.'","'.$this->db->escape_str($mtextoavo1).'","'.$this->db->escape_str($mtextoavo2).'","'.$this->db->escape_str($mtextoavo3).'","'.$this->db->escape_str($mtextoavo4).'","'.$this->db->escape_str($mtextoavo5).'","'.$this->db->escape_str($mtextoavo6).'","'.$this->db->escape_str($mtextoavo7).'","'.$this->db->escape_str($mtextoavo8).'","'.$this->db->escape_str($mtextoavo9).'",'.$midestacion.');');
    }    
    
       
    public function fm_cerrarpaso($mfolio,$midpaso,$mestado) {
        $this->db->query('call spcerrarpasol1e1('.$mfolio.','.$midpaso.','.$mestado.',"'.date("Y-m-d H:i:s").'");');
    }
    
}      