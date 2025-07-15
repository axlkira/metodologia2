<?php

class M_aintegrantes extends CI_Model {

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
    //esta funcion actualiza
    public function fm_actualizar($mfolio,$midintegrante,$mtdocumento,$mndocumento,$mpnombre,$msnombre,$mpapellido,$msapellido,$mfnacimiento,$msexo,$medad,$mtelefono,$mcelular,$mcorreo,$mtwitter,$mfacebook,$minstagram,$mgoogle,$mvalorestadoint,$mvalormotivoint,$mestadointob,$mdoccogestor,$mnacionalidadv
    ,$metnias,$mOsexual,$mIgenero
    
    ,$mempleoact
    ,$mCambiaremp
    ,$mTiempoEmpleado

    ,$mTipoE
    ,$mTiempoDesEmpleado
    ,$mBarreraA
    ,$mActualmenteEst
    ,$mvalorppc1p3n2
    )
    {
        //$this->db->query('call spactualizarintegranteactualizaractualiazar('.$mfolio.','.$midintegrante.',"'.$mtdocumento.'","'.$mndocumento.'","'.$mpnombre.'","'.$msnombre.'","'.$mpapellido.'","'.$msapellido.'","'.$mfnacimiento.'","'.$msexo.'","'.$medad.'","'.$mtelefono.'","'.$mcelular.'","'.$mcorreo.'","'.$mtwitter.'","'.$mfacebook.'","'.$minstagram.'","'.$mgoogle.'","'.$mvalorestadoint.'","'.$mvalormotivoint.'","'.$mestadointob.'","'.$mdoccogestor.'","'.$mnacionalidadv.'"
        $this->db->query('call spactualizarintegranteModuloactualizaractualiazar('.$mfolio.','.$midintegrante.',"'.$mtdocumento.'","'.$mndocumento.'","'.$mpnombre.'","'.$msnombre.'","'.$mpapellido.'","'.$msapellido.'","'.$mfnacimiento.'","'.$msexo.'","'.$medad.'","'.$mtelefono.'","'.$mcelular.'","'.$mcorreo.'","'.$mtwitter.'","'.$mfacebook.'","'.$minstagram.'","'.$mgoogle.'","'.$mvalorestadoint.'","'.$mvalormotivoint.'","'.$mestadointob.'","'.$mdoccogestor.'","'.$mnacionalidadv.'"
        , "'.$metnias.'", "'.$mOsexual.'", "'.$mIgenero.'"
    
        , "'.$mempleoact.'", "'.$mCambiaremp.'", "'.$mTiempoEmpleado.'", "'.$mTipoE.'", "'.$mTiempoDesEmpleado.'"
        , "'.$mBarreraA.'", "'.$mActualmenteEst.'", "'.$mvalorppc1p3n2.'"
    );');
    }    
    
    public function fm_buscartitular($folio)
    {        
        $query = $this->db->query('call spbuscartitular('.$folio.');');//se llama por procedimiento l almacenado
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
    public function fm_listarSino()
    {        
        $query = $this->db->query('call bdprotocolo.spsino();');//se llama por procedimiento l almacenado
        $resultado = $query->result();
        $query->next_result(); // Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); // Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;
    }

    public function fm_listarTipoE()
    {        
        $query = $this->db->query('call bdprotocolo.TipoE();');//se llama por procedimiento l almacenado
        $resultado = $query->result();
        $query->next_result(); // Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); // Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;
    }

    public function fm_listarBarreraA()
    {        
        $query = $this->db->query('call bdprotocolo.BarreraAcceso();');//se llama por procedimiento l almacenado
        $resultado = $query->result();
        $query->next_result(); // Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); // Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;
    }

    public function fm_integrantepp($idintegrante)
    {
        $query = $this->db->query('call spbuscarintegrantepp ('.$idintegrante.');');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;        
    }

}      