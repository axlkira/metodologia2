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
     public function fm_listarpaises()
    {
        $query = $this->db->query('call splistarpaises();');//se llama por procedimiento l almacenado
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
    public function fm_insertarpreval10a14a($mfolio,$midintegrante,$middimension,$midlogro,$mc9p37o1,$mc9p37o2,$mc9p37o3,$mc9p37o4,$mc9p37o5,$mc9p37o6,$mc9p37o7,$mc9p37o8,$mc9p37o9,$mc9p37o10,$mc9p37o11,$mc9p37cual,$mc9p39o1,$mc9p39o2,$mc9p39o3,$mc9p39o4,$mc9p39o5,$mc9p39o6,$mc9p39o7,$mc9p39o8,$mc9p39cual,$mvalorc9p40,$mvalorc9p3,$mc9p3cual,$mvalorc9p4,$mvalorc9p19,$medad,$mdoccogestor)
    {
        $this->db->query('call sp4insertarmovimientologpregval10a14a('.$mfolio.',"'.$midintegrante.'","'.$middimension.'","'.$midlogro.'","'.$mc9p37o1.'","'.$mc9p37o2.'","'.$mc9p37o3.'","'.$mc9p37o4.'","'.$mc9p37o5.'","'.$mc9p37o6.'","'.$mc9p37o7.'","'.$mc9p37o8.'","'.$mc9p37o9.'","'.$mc9p37o10.'","'.$mc9p37o11.'","'.$mc9p37cual.'","'.$mc9p39o1.'","'.$mc9p39o2.'","'.$mc9p39o3.'","'.$mc9p39o4.'","'.$mc9p39o5.'","'.$mc9p39o6.'","'.$mc9p39o7.'","'.$mc9p39o8.'","'.$mc9p39cual.'","'.$mvalorc9p40.'","'.$mvalorc9p3.'","'.$mc9p3cual.'","'.$mvalorc9p4.'","'.$mvalorc9p19.'","'.$medad.'","'.$mdoccogestor.'");');
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
    public function fm_insertarlogroxoport($mfolio,$midintegrantemodaloport,$midlogro,$midoportunidad,$mversion,$mdoccogestor,$mvaloropo,$midefectiva,$mmejoracondicionesno)
    {
        $this->db->query('call sp4insertarmovimientologxoport('.$mfolio.','.$midintegrantemodaloport.','.$midlogro.','.$midoportunidad.','.$mversion.','.$mdoccogestor.','.$mvaloropo.','.$midefectiva.',"'.$mmejoracondicionesno.'");');
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
    
    public function fm_insertarrecalculolog2($mfoliorecalculolog2,$midintegranterecalculolog2,$midlogrorecalculolog2,$medadintemodalrecalculolog2,$mvalorc4p8o1,$mc4p8o2,$mdoccogestor)
    {
        $this->db->query('call sp4insertarrecalculolog2('.$mfoliorecalculolog2.','.$midintegranterecalculolog2.','.$midlogrorecalculolog2.','.$medadintemodalrecalculolog2.',"'.$mvalorc4p8o1.'","'.$mc4p8o2.'","'.$mdoccogestor.'");');
    }
    public function fm_insertarrecalculolog3($mfoliorecalculolog3,$midintegranterecalculolog3,$midlogrorecalculolog3,$medadintemodalrecalculolog3,$mvalorc4p8o1a,$mc4p8o2a,$mdoccogestor)
    {
        $this->db->query('call sp4insertarrecalculolog3('.$mfoliorecalculolog3.','.$midintegranterecalculolog3.','.$midlogrorecalculolog3.','.$medadintemodalrecalculolog3.',"'.$mvalorc4p8o1a.'","'.$mc4p8o2a.'","'.$mdoccogestor.'");');
    }
    public function fm_insertarrecalculolog5($mfoliorecalculolog5,$midintegranterecalculolog5,$midlogrorecalculolog5,$medadintemodalrecalculolog5,$mvalorc4p9,$mdoccogestor)
    {
        $this->db->query('call sp4insertarrecalculolog5('.$mfoliorecalculolog5.','.$midintegranterecalculolog5.','.$midlogrorecalculolog5.','.$medadintemodalrecalculolog5.',"'.$mvalorc4p9.'","'.$mdoccogestor.'");');
    }
    public function fm_insertarrecalculolog7($mfoliorecalculolog7,$midintegranterecalculolog7,$mviddimension,$midlogrorecalculolog7,$medadintemodalrecalculolog7,$mvalorc9p3recalculolog7,$mc9p3cualrecalculolog7,$mvalorc9p4recalculolog7,$mvalorc9p5recalculolog7,$mc9p5cualrecalculolog7g,$mvalorc9p6,$mdoccogestor)
    {
        $this->db->query('call sp4insertarrecalculolog7('.$mfoliorecalculolog7.','.$midintegranterecalculolog7.','.$mviddimension.','.$midlogrorecalculolog7.','.$medadintemodalrecalculolog7.',"'.$mvalorc9p3recalculolog7.'","'.$mc9p3cualrecalculolog7.'","'.$mvalorc9p4recalculolog7.'","'.$mvalorc9p5recalculolog7.'","'.$mc9p5cualrecalculolog7g.'","'.$mvalorc9p6.'","'.$mdoccogestor.'");');
    }
    public function fm_insertarrecalculolog8($mfoliorecalculolog8,$midintegranterecalculolog8,$middimension,$midlogrorecalculolog8,$medadintemodalrecalculolog8,$mvalorc9p1,$mvalorc9p1cual,$mvalorc9p2,$mdoccogestor)
    {                                        
        $this->db->query('call sp4insertarrecalculolog8('.$mfoliorecalculolog8.','.$midintegranterecalculolog8.','.$middimension.','.$midlogrorecalculolog8.','.$medadintemodalrecalculolog8.',"'.$mvalorc9p1.'","'.$mvalorc9p1cual.'","'.$mvalorc9p2.'","'.$mdoccogestor.'");');
    }
    public function fm_insertarrecalculolog9($mfoliorecalculolog9,$midintegranterecalculolog9,$middimensionrecalculolog9,$midlogrorecalculolog9,$medadintemodalrecalculolog9,$mvalorc9p30,$mvalorc9p34,$mc9p35o1,$mc9p35o2,$mc9p35o3,$mc9p35o4,$mc9p35o5,$mc9p35o6, $mc9p35o7,$mc9p35o8,$mc9p35o9,$mc9p35o7cual,$mdoccogestor)
    {              
        $this->db->query('call sp4insertarrecalculolog9('.$mfoliorecalculolog9.','.$midintegranterecalculolog9.','.$middimensionrecalculolog9.','.$midlogrorecalculolog9.','.$medadintemodalrecalculolog9.',"'.$mvalorc9p30.'","'.$mvalorc9p34.'","'.$mc9p35o1.'","'.$mc9p35o2.'","'.$mc9p35o3.'","'.$mc9p35o4.'","'.$mc9p35o5.'","'.$mc9p35o6.'","'.$mc9p35o7.'","'.$mc9p35o8.'","'.$mc9p35o9.'","'.$mc9p35o7cual.'","'.$mdoccogestor.'");');
    }                                                   
    public function fm_insertarrecalculolog11($mfoliorecalculolog11,$midintegranterecalculolog11,$midlogrorecalculolog11,$medadintemodalrecalculolog11,$mvalorc8p4reclog11,$mc8p2gradorecalculolog11,$mdoccogestor)
    {                                                      
        $this->db->query('call sp4insertarrecalculolog11('.$mfoliorecalculolog11.','.$midintegranterecalculolog11.','.$midlogrorecalculolog11.','.$medadintemodalrecalculolog11.',"'.$mvalorc8p4reclog11.'","'.$mc8p2gradorecalculolog11.'","'.$mdoccogestor.'");');
    }
    public function fm_insertarrecalculolog12($mfoliorecalculolog12,$midintegranterecalculolog12,$midlogrorecalculolog12,$medadintemodalrecalculolog12,$mvalorc8p1,$mdoccogestor)
    {                                                      
        $this->db->query('call sp4insertarrecalculolog12('.$mfoliorecalculolog12.','.$midintegranterecalculolog12.','.$midlogrorecalculolog12.','.$medadintemodalrecalculolog12.',"'.$mvalorc8p1.'","'.$mdoccogestor.'");');
    }
    public function fm_insertarrecalculolog13($mfoliorecalculolog13,$midintegranterecalculolog13,$midlogrorecalculolog13,$medadintemodalrecalculolog13,$mvalorc8p2,$mc8p2grado,$mvalorc8p4,$mdoccogestor)
    {                                                      
        $this->db->query('call sp4insertarrecalculolog13('.$mfoliorecalculolog13.','.$midintegranterecalculolog13.','.$midlogrorecalculolog13.','.$medadintemodalrecalculolog13.',"'.$mvalorc8p2.'","'.$mc8p2grado.'","'.$mvalorc8p4.'","'.$mdoccogestor.'");');
    }
    public function fm_insertarrecalculolog22($mfoliorecalculolog22,$midintegranterecalculolog22,$midlogrorecalculolog22,$medadintemodalrecalculolog22,$mvalorc5p7,$mvalorc5p7r,$mc5p8o1,$mc5p8o2,$mc5p8o3,$mc5p8o4,$mc5p8o5,$mdoccogestor)
    {                                                      
        $this->db->query('call sp4insertarrecalculolog22('.$mfoliorecalculolog22.','.$midintegranterecalculolog22.','.$midlogrorecalculolog22.','.$medadintemodalrecalculolog22.',"'.$mvalorc5p7.'","'.$mvalorc5p7r.'","'.$mc5p8o1.'","'.$mc5p8o2.'","'.$mc5p8o3.'","'.$mc5p8o4.'","'.$mc5p8o5.'","'.$mdoccogestor.'");');
    }                                       
    public function fm_insertarrecalculolog23($mfoliorecalculolog23,$midintegranterecalculolog23,$midlogrorecalculolog23,$medadintemodalrecalculolog23,$mvalorc5p12,$mdoccogestor)
    {
        $this->db->query('call sp4insertarrecalculolog23('.$mfoliorecalculolog23.','.$midintegranterecalculolog23.','.$midlogrorecalculolog23.','.$medadintemodalrecalculolog23.',"'.$mvalorc5p12.'","'.$mdoccogestor.'");');
    }
        
  
    



    public function fm_listarmejconopor()
    {
        $query = $this->db->query('call splistarmejconopor();');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;        
    }    
    public function fm_listarmejconoporno()
    {
        $query = $this->db->query('call splistarmejconoporno();');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;        
    }

}      


