<?php

class M_encuadref1 extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    
    //esta funcion ejecuta el sp para cargar las ayudas de la pregunta
    public function fm_ayudas()
    {
        $query = $this->db->query('call sp3ayudas("ppc1p1n51");');//se coloca el codigo de la ayuda
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;        
    }

    //esta funcion ejecuta el sp para cargar los datos generales
  public function fm_cargardatosgenerales($folio)
    {
        $query = $this->db->query('call  sp0_traerdatosencuadre('.$folio.');');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;        
    }  

    //esta funcion ejecuta el sp para cargar si ya tiene respuesta la pregunta
    public function fm_buscarpregunta($mfolio)
    {
        $query = $this->db->query('call spbuscarppcapitulo1p1n51('.$mfolio.');');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;        
    }    
    


  /*  public function fm_actualizarpreguntax($mfolio,$mep1,$mep2,$mep3,$mep3cuanto,$mep4,$mep5,$mep5cuanto,$mep6,$mep6cuanto,$mep7,$mep7cuanto,$mep8,$mep8cuanto,$mep9,$mep9cuanto,$mep10,$mep11,$mep12,$mep13,$mep14,$mep15,$mep16,$mep17,$mep18,	$mep19,	$mep20,	$mep21,	$mep22,	$mep22cual,	$mep23,	$mep24,	$mep25,	$mep26,	$mep27,	$mep28,	$mep29,	$mep30,	$mep31,	$mdocogestor)
    {
        $query = $this->db->query('call sp0_guardactualizaencuadre('.$mfolio.',	"'.$mep1.'","'. $mep2.'",	"'.$mep3.'",	'.$mep3cuanto.',	"'.$mep4.'",	"'.$mep5.'",	'.$mep5cuanto.',	"'.$mep6.'",	'.$mep6cuanto.',	"'.$mep7.'",	'.$mep7cuanto.',	"'.$mep8.'",	'.$mep8cuanto.',	"'.$mep9.'",	'.$mep9cuanto.',	"'.$mep10.'",	"'.$mep11.'",	"'.$mep12.'",	"'.$mep13.'",	"'.$mep14.'",	"'.$mep15.'",	"'.$mep16.'",	"'.$mep17.'",	"'.$mep18.'",	"'.$mep19.'",	"'.$mep20.'",	"'.$mep21.'",	"'.$mep22.'",	"'.$mep22cual.'",	"'.$mep23.'",	"'.$mep24.'",	"'.$mep25.'",	"'.$mep26.'",	"'.$mep27.'",	"'.$mep28.'",	"'.$mep29.'",	"'.$mep30.'",	"'.$mep31.'",	"'.$mdocogestor.'");');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;        
    }  */
    

 
    
    

    public function fm_actualizarpreguntaxx($datos)
    {
         $query = $this->db->select('*')->from('t0_encuadre')->where('folio',$datos['folio'])->get();    
            
            if ($query->num_rows() > 0) {
                $this->db->where('folio',$datos['folio'])->update('t0_encuadre',$datos);  
                return $datos['folio'];
            }else{
                $this->db->set($datos)->insert('t0_encuadre');
                if ($this->db->affected_rows() === 1) {
                    return $this->db->folio();
                }
                
            }
        
         
    }


    public function fm_cerrarpaso1($mfolio,$midpaso,$mestado) {
        $this->db->query('call spcerrarpasol1e1('.$mfolio.','.$midpaso.',"'.$mestado.'","'.date("Y-m-d H:i:s").'");');
    }

   /* public function saveAcademica($datos)
    {
        $query = $this->db->select('*')->from('deportista_aspirante_academica')->where('id_usuario',$datos['id_usuario'])->where('periodo',$datos['periodo'])->get();  
         
     
        $actualizoies = 0;
    
        
            
            if ($query->num_rows() > 0) {
                $this->db->where('id_usuario',$datos['id_usuario'])->where('periodo',$datos['periodo'])->update('deportista_aspirante_academica',$datos);  
                return $actualizoies;
            }else{
                $this->db->set($datos)->insert('deportista_aspirante_academica');
                if ($this->db->affected_rows() === 1) {
                    return $actualizoies;
                }
                
            }
         
    }*/
    
       
}