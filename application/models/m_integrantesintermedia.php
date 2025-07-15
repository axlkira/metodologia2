<?php

class M_integrantesintermedia extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    //esta funcion se encarga de enlistar los datos que se traeran a un select
    public function fm_listartipodocumento()
    {        
        $query = $this->db->query('call sptipodocumento();');//se llama por procedimiento l almacenado
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
    public function fm_insertar($mfolio,$mtdocumento,$mndocumento,$mpnombre,$msnombre,$mpapellido,$msapellido,$mfnacimiento,$msexo,$medad,$mtelefono,$mcelular,$mcorreo,$mtwitter,$mfacebook,$minstagram,$mgoogle,$mdocumentocog,$mnacionalidadv
    ,$metnias,$mOsexual,$mIgenero)
    {
        $this->db->query('call sp7_insertarintegranteintermediaactnew('.$mfolio.',"'.$mtdocumento.'","'.$mndocumento.'","'.$mpnombre.'","'.$msnombre.'","'.$mpapellido.'","'.$msapellido.'","'.$mfnacimiento.'","'.$msexo.'",'.$medad.',"'.$mtelefono.'","'.$mcelular.'","'.$mcorreo.'","'.$mtwitter.'","'.$mfacebook.'","'.$minstagram.'","'.$mgoogle.'", '.$mdocumentocog.',"'.$mnacionalidadv.'", "'.$metnias.'", "'.$mOsexual.'", "'.$mIgenero.'");');
    }
    
    //esta funcion actualiza
    public function fm_actualizar($mfolio,$midintegrante,$mtdocumento,$mndocumento,$mpnombre,$msnombre,$mpapellido,$msapellido,$mfnacimiento,$msexo,$medad,$mtelefono,$mcelular,$mcorreo,$mtwitter,$mfacebook,$minstagram,$mgoogle,$mnacionalidadv
    ,$metnias,$mOsexual,$mIgenero)
    {
        $this->db->query('call spactualizarintegranteintermedia('.$mfolio.','.$midintegrante.',"'.$mtdocumento.'","'.$mndocumento.'","'.$mpnombre.'","'.$msnombre.'","'.$mpapellido.'","'.$msapellido.'","'.$mfnacimiento.'","'.$msexo.'","'.$medad.'","'.$mtelefono.'","'.$mcelular.'","'.$mcorreo.'","'.$mtwitter.'","'.$mfacebook.'","'.$minstagram.'","'.$mgoogle.'","'.$mnacionalidadv.'", "'.$metnias.'", "'.$mOsexual.'", "'.$mIgenero.'", "'.date("Y-m-d H:i:s").'");');
    }    
    
    
     public function fm_actualizarsincalculo($mfolio,$midintegrante,$mtdocumento,$mndocumento,$mpnombre,$msnombre,$mpapellido,$msapellido,$mtelefono,$mcelular,$mcorreo,$mtwitter,$mfacebook,$minstagram,$mgoogle,$mnacionalidadv)
    {
        $this->db->query('call spactualizarintegrantesincalculoact('.$mfolio.','.$midintegrante.',"'.$mtdocumento.'","'.$mndocumento.'","'.$mpnombre.'","'.$msnombre.'","'.$mpapellido.'","'.$msapellido.'","'.$mtelefono.'","'.$mcelular.'","'.$mcorreo.'","'.$mtwitter.'","'.$mfacebook.'","'.$minstagram.'","'.$mgoogle.'","'.$mnacionalidadv.'", "'.date("Y-m-d H:i:s").'");');
    }   
        
   public function fm_eliminar($mfolio,$midintegrante)
    {
       $this->db->query('call speliminarintegrante('.$mfolio.','.$midintegrante.',"'.date("Y-m-d H:i:s").'");');
    } 
    
    public function fm_buscartitular($folio)
    {        
        $query = $this->db->query('call spbuscartitular('.$folio.');');//se llama por procedimiento l almacenado
        $resultado = $query->result();
        $query->next_result(); // Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); // Estas dos funciones permiten realizar varias consultas en el mismo controlador  $cdocumentocog.
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
    
//    public function fm_insertarintegranteintermedia($mfolio,$midintegrante,$cdocumentocog)
//    {
//       $this->db->query('call sp7_insertarintegranteintermedia('.$mfolio.','.$midintegrante.','.$cdocumentocog.');');
//    } 
 //////////// inicio nuevas variables ///////////
    public function fm_listarnacionalidad($mtipodocumento)
    {        
     $query = $this->db->query('call sp_Nacionalidad("'.$mtipodocumento.'");');//se llama por procedimiento l almacenado
     $resultado = $query->result();
     $query->next_result(); // Estas dos funciones permiten realizar varias consultas en el mismo controlador.
     $query->free_result(); // Estas dos funciones permiten realizar varias consultas en el mismo controlador.
     return $resultado;
    }
    public function fm_listaretnia()
    {        
        $query = $this->db->query('call sp_Etnia();');//se llama por procedimiento l almacenado
        $resultado = $query->result();
        $query->next_result(); // Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); // Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;
    }
    public function fm_listarOsexual()
    {        
        $query = $this->db->query('call sp_Orientacion_sexual();');//se llama por procedimiento l almacenado
        $resultado = $query->result();
        $query->next_result(); // Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); // Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;
    }
    public function fm_listarIgenero()
    {        
        $query = $this->db->query('call sp_Identidad_genero();');//se llama por procedimiento l almacenado
        $resultado = $query->result();
        $query->next_result(); // Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); // Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;
    }
}      