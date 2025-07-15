<?php

class M_ppc1p5n1 extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    
    //esta funcion ejecuta el sp para cargar las ayudas de la pregunta
    public function fm_ayudas()
    {
        $query = $this->db->query('call sp3ayudas("ppc1p5n1");');//se coloca el codigo de la ayuda
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;        
    }

    //esta funcion ejecuta el sp para cargar los datos generales
    public function fm_cargardatosgenerales($mfolio,$midintegrante)
    {
        $query = $this->db->query('call sp3cargardatosgeneralesintegrante('.$mfolio.',98,'.$midintegrante.');');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;        
    }   

    //esta funcion ejecuta el sp para cargar si ya tiene respuesta la pregunta
    public function fm_buscarpregunta($midintegrante)
    {
        $query = $this->db->query('call spbuscarppcapitulo1p5n1('.$midintegrante.');');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;        
    }    
    
    
    //esta funcion actualiza
    public function fm_actualizarpregunta($mfolio,$midintegrante,$mppc1p5n1o1,$mppc1p5n1o2,$mppc1p5n1o3,$mppc1p5n1o4)
    {
    $this->db->query('call spactualizarppcapitulo1p5n1('.$mfolio.','.$midintegrante.',"'.$mppc1p5n1o1.'","'.$mppc1p5n1o2.'","'.$mppc1p5n1o3.'","'.$mppc1p5n1o4.'");');
    }    
    
    public function fm_llenarcapitulo2pp($mfolio,$midintegrante)
    {
        $this->db->query('call spllenarcapitulo2pp('.$mfolio.','.$midintegrante.');');
    }

    public function fm_llenarcapitulo3pp($mfolio,$midintegrante)
    {
        $this->db->query('call spllenarcapitulo3pp('.$mfolio.','.$midintegrante.');');
    }
    
    public function fm_llenarcapitulo4pp($mfolio,$midintegrante)
    {
        $this->db->query('call spllenarcapitulo4pp('.$mfolio.','.$midintegrante.');');
    }
    
    public function fm_llenarcapitulotodospp($mfolio,$midintegrante)
    {
        $this->db->query('call spllenartodoscapitulopp('.$mfolio.','.$midintegrante.');');
    }
    
    /////////
    
     public function fm_borrarcapitulo2pp($mfolio,$midintegrante)
    {
        $this->db->query('call spborrarcapitulo2pp('.$mfolio.','.$midintegrante.');');
    }

    public function fm_borrarcapitulo3pp($mfolio,$midintegrante)
    {
        $this->db->query('call spborrarcapitulo3pp('.$mfolio.','.$midintegrante.');');
    }
    
    public function fm_borrarcapitulo4pp($mfolio,$midintegrante)
    {
        $this->db->query('call spborrarcapitulo4pp('.$mfolio.','.$midintegrante.');');
    }
    
    public function fm_borrarcapitulotodospp($mfolio,$midintegrante)
    {
        $this->db->query('call spborrartodoscapitulopp('.$mfolio.','.$midintegrante.');');
    }
    
    
    
    
    
    
    
    
    
       
}      