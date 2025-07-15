<?php

class M_logros extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    
    //esta funcion se encarga de enlistar los datos que se traeran a un select
    public function fm_logroresultado($folio,$idlogro)
    {        
        $query = $this->db->query('call sp4logroresultado('.$folio.','.$idlogro.');');//se llama por procedimiento l almacenado
        $resultado = $query->result();
        $query->next_result(); // Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); // Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;
    }
    
    //esta funcion se encargar de insertar a la base de datos, los datos enviados desde el controlador
    public function fm_folioexiste($folio)
    {
        $query = $this->db->query('call spbuscarprincipalhogar ('.$folio.');');
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
    public function fm_insertar($mfolio,$midintegrante,$middimension,$midlogro,$mvalorlogromov,$mnombreoportunidadobs,$mnombreoportunidad,$mtelcontactocual,$mdoccogestor)
    {
        $this->db->query('call sp4insertarmovimientolog('.$mfolio.',"'.$midintegrante.'","'.$middimension.'","'.$midlogro.'","'.$mvalorlogromov.'","'.$mnombreoportunidadobs.'","'.$mnombreoportunidad.'","'.$mtelcontactocual.'","'.$mdoccogestor.'");');
    }
    public function fm_insertarpreval10a14($mfolio,$midintegrante,$middimension,$midlogro,$mc9p37o1,$mc9p37o2,$mc9p37o3,$mc9p37o4,$mc9p37o5,$mc9p37o6,$mc9p37o7,$mc9p37o8,$mc9p37o9,$mc9p37o10,$mc9p37o11,$mc9p37cual,$mc9p39o1,$mc9p39o2,$mc9p39o3,$mc9p39o4,$mc9p39o5,$mc9p39o6,$mc9p39o7,$mc9p39o8,$mc9p39cual,$mvalorc9p40,$mvalorc9p3,$mc9p3cual,$mvalorc9p4,$mvalorc9p19,$medad,$mdoccogestor)
    {
        $this->db->query('call sp4insertarmovimientologpregval10a14('.$mfolio.',"'.$midintegrante.'","'.$middimension.'","'.$midlogro.'","'.$mc9p37o1.'","'.$mc9p37o2.'","'.$mc9p37o3.'","'.$mc9p37o4.'","'.$mc9p37o5.'","'.$mc9p37o6.'","'.$mc9p37o7.'","'.$mc9p37o8.'","'.$mc9p37o9.'","'.$mc9p37o10.'","'.$mc9p37o11.'","'.$mc9p37cual.'","'.$mc9p39o1.'","'.$mc9p39o2.'","'.$mc9p39o3.'","'.$mc9p39o4.'","'.$mc9p39o5.'","'.$mc9p39o6.'","'.$mc9p39o7.'","'.$mc9p39o8.'","'.$mc9p39cual.'","'.$mvalorc9p40.'","'.$mvalorc9p3.'","'.$mc9p3cual.'","'.$mvalorc9p4.'","'.$mvalorc9p19.'","'.$medad.'","'.$mdoccogestor.'");');
    }
    public function fm_insertarpreval18($mfolio,$midintegrante,$middimension,$midlogro,$mc5p5o1,$mc5p5o2,$mc5p5o3,$mc5p5o4,$mc5p5o5,$mc5p5o6,$mc5p5o7,$mc5p5o9,$mc5p5o10,$mc5p5o11,$mc5p5o13,$mdoccogestor)
    {
        $this->db->query('call sp4insertarmovimientologpregval18('.$mfolio.',"'.$midintegrante.'","'.$middimension.'","'.$midlogro.'","'.$mc5p5o1.'","'.$mc5p5o2.'","'.$mc5p5o3.'","'.$mc5p5o4.'","'.$mc5p5o5.'","'.$mc5p5o6.'","'.$mc5p5o7.'","'.$mc5p5o9.'","'.$mc5p5o10.'","'.$mc5p5o11.'","'.$mc5p5o13.'","'.$mdoccogestor.'");');
    }
    public function fm_insertarpreval24($mfolio,$midintegrante,$middimension,$midlogro,$mvalorc6p2,$mvalorc6p3,$mvalorc6p5,$mvalorc6p9,$mdoccogestor)
    {
        $this->db->query('call sp4insertarmovimientologpregval24('.$mfolio.',"'.$midintegrante.'","'.$middimension.'","'.$midlogro.'","'.$mvalorc6p2.'","'.$mvalorc6p3.'","'.$mvalorc6p5.'","'.$mvalorc6p9.'","'.$mdoccogestor.'");');
    }
    public function fm_insertarpreval33($mfolio,$midintegrante,$middimension,$midlogro,$mc11p1o1,$mc11p1o2,$mc11p1o3,$mc11p1o4,$mc11p1o5,$mc11p1o6,$mc11p1o7,$mc11p1o8,$mc11p1cual,$mc11p2o1,$mc11p2o2,$mc11p2o3,$mc11p2o4,$mc11p2o5,$mc11p2o6,$mc11p2o7,$mc11p2cual,$mc11p3o1,$mc11p3o2,$mc11p3o3,$mc11p3o4,$mc11p3o5,$mc11p3o6,$mc11p3cual,$mdoccogestor)
    {
        $this->db->query('call sp4insertarmovimientologpregval33('.$mfolio.',"'.$midintegrante.'","'.$middimension.'","'.$midlogro.'","'.$mc11p1o1.'","'.$mc11p1o2.'","'.$mc11p1o3.'","'.$mc11p1o4.'","'.$mc11p1o5.'","'.$mc11p1o6.'","'.$mc11p1o7.'","'.$mc11p1o8.'","'.$mc11p1cual.'","'.$mc11p2o1.'","'.$mc11p2o2.'","'.$mc11p2o3.'","'.$mc11p2o4.'","'.$mc11p2o5.'","'.$mc11p2o6.'","'.$mc11p2o7.'","'.$mc11p2cual.'","'.$mc11p3o1.'","'.$mc11p3o2.'","'.$mc11p3o3.'","'.$mc11p3o4.'","'.$mc11p3o5.'","'.$mc11p3o6.'","'.$mc11p3cual.'","'.$mdoccogestor.'");');
    }
    public function fm_insertarpreval34($mfolio,$midintegrante,$middimension,$midlogro,$mc11p4o1,$mc11p4o2,$mc11p4o3,$mc11p4o4,$mc11p4o5,$mc11p4o6,$mc11p4cual,$mc11p5o1,$mc11p5o2,$mc11p5o3,$mc11p5o4,$mc11p5o5,$mc11p5o6,$mc11p5o7,$mc11p5cual,$mc11p7o1,$mc11p7o2,$mc11p7o3,$mc11p7o4,$mc11p7o5,$mc11p7o6,$mc11p7o7,$mc11p7cual,$mdoccogestor)
    {
        $this->db->query('call sp4insertarmovimientologpregval34('.$mfolio.',"'.$midintegrante.'","'.$middimension.'","'.$midlogro.'","'.$mc11p4o1.'","'.$mc11p4o2.'","'.$mc11p4o3.'","'.$mc11p4o4.'","'.$mc11p4o5.'","'.$mc11p4o6.'","'.$mc11p4cual.'","'.$mc11p5o1.'","'.$mc11p5o2.'","'.$mc11p5o3.'","'.$mc11p5o4.'","'.$mc11p5o5.'","'.$mc11p5o6.'","'.$mc11p5o7.'","'.$mc11p5cual.'","'.$mc11p7o1.'","'.$mc11p7o2.'","'.$mc11p7o3.'","'.$mc11p7o4.'","'.$mc11p7o5.'","'.$mc11p7o6.'","'.$mc11p7o7.'","'.$mc11p7cual.'","'.$mdoccogestor.'");');
    }
    public function fm_insertarpreval39($mfolio,$midintegrante,$middimension,$midlogro,$mc10p5o1,$mc10p5o2,$mc10p5o3,$mc10p5o4,$mc10p5o5,$mc10p5o6,$mc10p5o7,$mc10p5o8,$mc10p5o9,$mc10p5o11,$mc10p5o12,$mc10p5o13,$mc10p5o16,$mc10p5o17,$mc10p5o18,$mc10p5o19,$mc10p5o20,$mc10p5o22,$minstitucion1,$minstitucion2,$mc10p5cual,$mdoccogestor)
    {
        $this->db->query('call sp4insertarmovimientologpregval39('.$mfolio.',"'.$midintegrante.'","'.$middimension.'","'.$midlogro.'","'.$mc10p5o1.'","'.$mc10p5o2.'","'.$mc10p5o3.'","'.$mc10p5o4.'","'.$mc10p5o5.'","'.$mc10p5o6.'","'.$mc10p5o7.'","'.$mc10p5o8.'","'.$mc10p5o9.'","'.$mc10p5o11.'","'.$mc10p5o12.'","'.$mc10p5o13.'","'.$mc10p5o16.'","'.$mc10p5o17.'","'.$mc10p5o18.'","'.$mc10p5o19.'","'.$mc10p5o20.'","'.$mc10p5o22.'","'.$minstitucion1.'","'.$minstitucion2.'","'.$mc10p5cual.'","'.$mdoccogestor.'");');
    }
    //esta funcion se encargar de insertar a la base de datos, los datos enviados desde el controlador
    public function fm_logroxportunidad($idlogro)
    {
        $query = $this->db->query('call sp4insertarmovimientologoportunidad('.$idlogro.');');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;        
    }
    //esta funcion se encargar de insertar a la base de datos, los datos enviados desde el controlador
    public function fm_logroxportunidadinfo($midoportunidad)
    {
        $query = $this->db->query('call sp4insertarmovimientologoportunidadinfo('.$midoportunidad.');');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;        
    }
    public function fm_insertarlogroxoport($mfolio,$midintegrantemodaloport,$midlogro,$midoportunidad,$mversion,$mdoccogestor,$mvaloropo)
    {
        $this->db->query('call sp4insertarmovimientologxoport('.$mfolio.','.$midintegrantemodaloport.','.$midlogro.','.$midoportunidad.','.$mversion.','.$mdoccogestor.','.$mvaloropo.');');
    }
    //esta funcion se encargar de insertar a la base de datos, los datos enviados desde el controlador
    public function fm_logroxportunidadxint($idoportunidad,$idintegrante)
    {
        $query = $this->db->query('call sp4seleccionarrmovimientologoportunidad('.$idoportunidad.','.$idintegrante.');');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;        
    }
    public function fm_listarestadooportunidad()
    {
        $query = $this->db->query('call splistarestadooportunidad();');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;        
    }
    public function fm_insertarcf($mfolio,$midintegrante,$middimension,$midlogro,$mvalorlogromovcf,$mnombreoportunidadobscf,$mdoccogestor)
    {
        $this->db->query('call sp4insertarmovimientologcf('.$mfolio.',"'.$midintegrante.'","'.$middimension.'","'.$midlogro.'","'.$mvalorlogromovcf.'","'.$mnombreoportunidadobscf.'","'.$mdoccogestor.'");');
    }
    
    
        
    
}      


