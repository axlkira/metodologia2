<?php

class M_principalhogar extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    //esta funcion se encarga de enlistar los datos que se traeran a un select
    public function fm_listartabla($mdoccogestor)
    {        
        $query = $this->db->query('call splistarprincipalhogar("'.$mdoccogestor.'");');//se llama por procedimiento l almacenado
        $resultado = $query->result();
        $query->next_result(); // Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); // Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;
    } 
  
    public function fm_listarfolio($mdoccogestor,$mfolio)
    {        
        $query = $this->db->query('call splistarfoliodinamic("'.$mdoccogestor.'","'.$mfolio.'");');//se llama por procedimiento l almacenado
        $resultado = $query->result();
        $query->next_result(); // Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); // Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;
    }
    
    public function fm_listardocum($mdoccogestor,$mdocumento)
    {        
        $query = $this->db->query('call splistardocumdinamic("'.$mdoccogestor.'","'.$mdocumento.'");');//se llama por procedimiento l almacenado
        $resultado = $query->result();
        $query->next_result(); // Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); // Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;
    }
    
    public function fm_listarnom($mdoccogestor,$mnombre)
    {        
        $query = $this->db->query('call splistarnomdinamic("'.$mdoccogestor.'","'.$mnombre.'");');//se llama por procedimiento l almacenado
        $resultado = $query->result();
        $query->next_result(); // Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); // Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;
    }
    
    //esta funcion  se encarga de enlistar el sexo
     public function fm_listarsexo()
    {        
        $query = $this->db->query('call spsexo();');//se llama por procedimiento l almacenado
        $resultado = $query->result();
        $query->next_result(); // Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); // Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;
    } 
    
    //esta funcion se encargar de insertar a la base de datos, los datos enviados desde el controlador
    public function fm_foloexiste($idintegrante)
    {
        $query = $this->db->query('call spbuscarintegrante ('.$idintegrante.');');
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
    public function fm_insertar($mfolio,$midintegrante,$mtdocumento,$mndocumento,$mpnombre,$msnombre,$mpapellido,$msapellido,$mfnacimiento,$msexo,$medad,$mtelefono,$mcelular,$mcorreo,$mtwitter,$mfacebook,$minstagram,$mgoogle)
    {
        $this->db->query('call spinsertarintegrante('.$mfolio.','.$midintegrante.',"'.$mtdocumento.'",'.$mndocumento.',"'.$mpnombre.'","'.$msnombre.'","'.$mpapellido.'","'.$msapellido.'","'.$mfnacimiento.'","'.$msexo.'","'.$medad.'","'.$mtelefono.'","'.$mcelular.'","'.$mcorreo.'","'.$mtwitter.'","'.$mfacebook.'","'.$minstagram.'","'.$mgoogle.'", "'.date("Y-m-d H:i:s").'", "'.date("Y-m-d H:i:s").'");');
    }
    
    //esta funcion actualiza
    public function fm_actualizar($mfolio,$midintegrante,$mtdocumento,$mndocumento,$mpnombre,$msnombre,$mpapellido,$msapellido,$mfnacimiento,$msexo,$medad,$mtelefono,$mcelular,$mcorreo,$mtwitter,$mfacebook,$minstagram,$mgoogle)
    {
        $this->db->query('call spactualizarintegrante('.$mfolio.','.$midintegrante.',"'.$mtdocumento.'",'.$mndocumento.',"'.$mpnombre.'","'.$msnombre.'","'.$mpapellido.'","'.$msapellido.'","'.$mfnacimiento.'","'.$msexo.'","'.$medad.'","'.$mtelefono.'","'.$mcelular.'","'.$mcorreo.'","'.$mtwitter.'","'.$mfacebook.'","'.$minstagram.'","'.$mgoogle.'", "'.date("Y-m-d H:i:s").'");');
    }    
    
        public function fm_llenarcapituloshogar($mfolio)
    {
        $this->db->query('call sp2llenarcapituloshogar('.$mfolio.');');
    } 
    
    //Calculo eerf 1 resultado general
    public function fm_totalgeneral1($mfolio)
    {
      $query =  $this->db->query('call sptotalgeneraleerf1('.$mfolio.');');
         $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;        
    } 
    
     //Calculo eerf 2 resultado general
    public function fm_totalgeneral2($mfolio)
    {
       $query = $this->db->query('call sptotalgeneraleerf2('.$mfolio.');');
         $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;        
    } 
    
    //Calculo eerf 1 resultado convivencia
    public function fm_totalconvivencia1($mfolio)
    {
      $query =  $this->db->query('call sptotalconvivenciaeerf1('.$mfolio.');');
         $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;        
    } 
    
     //Calculo eerf 2 resultado convivencia
    public function fm_totalconvivencia2($mfolio)
    {
       $query = $this->db->query('call sptotalconvivenciaeerf2('.$mfolio.');');
         $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;        
    } 
    
      //Calculo eerf 1 resultado interaccion
    public function fm_totalinteraccion1($mfolio)
    {
      $query =  $this->db->query('call sptotalinteraccioneerf1('.$mfolio.');');
         $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;        
    } 
    
     //Calculo eerf 2 resultado interaccion
    public function fm_totalinteraccion2($mfolio)
    {
       $query = $this->db->query('call sptotalinteraccioneerf2('.$mfolio.');');
         $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;        
    } 
    
    
      //Calculo eerf 1 resultado comunicacion
    public function fm_totalcomunicacion1($mfolio)
    {
      $query =  $this->db->query('call sptotalcomunicacioneerf1('.$mfolio.');');
         $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;        
    } 
    
     //Calculo eerf 2 resultado comunicacion
    public function fm_totalcomunicacion2($mfolio)
    {
       $query = $this->db->query('call sptotalcomunicacioneerf2('.$mfolio.');');
         $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;        
    } 
    
 //Calculo eerf 1 resultado afectividad
    public function fm_totalafectividad1($mfolio)
    {
       $query = $this->db->query('call sptotalafectividadeerf1('.$mfolio.');');
         $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;        
    }      

//Calculo eerf 2 resultado afectividad
    public function fm_totalafectividad2($mfolio)
    {
       $query = $this->db->query('call sptotalafectividadeerf2('.$mfolio.');');
         $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;        
    } 

    
    public function fm_datosintermedia($folio)
    {
        $query = $this->db->query('call sptraerintermedia('.$folio.');');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;        
    }

    public function fm_totalesinformativo()
    {
        $query = $this->db->query('call bdprotocolo.sptotalesinformativo();');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;        
    }

    public function fm_tablafoliosvisitasiniciadas()
    {
        $query = $this->db->query('call bdprotocolo.splistatablafoliosvisitasiniciadas();');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;        
    }
    
    public function fm_totalesinformativovisitasabiertas()
    {
        $query = $this->db->query('call bdprotocolo.sptotalesinformativovisitasabiertas();');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;        
    }
    
       
}      