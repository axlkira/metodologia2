<?php

class M_sincroarribad extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    
    
    public function fm_cursorlogroblanco(){
        
        $query = $this->db->query('call sp4cursorlogroblanco();');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE dTOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;   
     }
    
     public function fm_cursorcambiarestadosesioncierre(){
        
        $query = $this->db->query('call sp4cursorcambiarestadosesioncierre();');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;   
     }
     public function fm_sincrocap2(){
        
        $query = $this->db->query('call sp3sincronizacioncapitulo2();');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;   
     }
     
     
     
     public function fm_sincrocap3(){
        
        $query = $this->db->query('call sp3sincronizacioncapitulo3();');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;   
     }
     
     public function fm_sincrocap6(){
        
        $query = $this->db->query('call sp3sincronizacioncapitulo6();');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;   
     }
     
     public function fm_sincrocap11(){
        
        $query = $this->db->query('call sp3sincronizacioncapitulo11();');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;   
     }
     
     public function fm_sincrocap4i(){
        
        $query = $this->db->query('call sp3sincronizacioncapitulo4i();');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;   
     }
     
     public function fm_sincrocap5i(){
        
        $query = $this->db->query('call sp3sincronizacioncapitulo5i();');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;   
     }
     
     public function fm_sincrocap7i(){
        
        $query = $this->db->query('call sp3sincronizacioncapitulo7i();');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;   
     }
     
     public function fm_sincrocap8i(){
        
        $query = $this->db->query('call sp3sincronizacioncapitulo8i();');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;   
     }
     
     public function fm_sincrocap9i(){
        
        $query = $this->db->query('call sp3sincronizacioncapitulo9i();');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;   
     }
     
     public function fm_sincrocap10i(){
        
        $query = $this->db->query('call sp3sincronizacioncapitulo10i();');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;   
     }
     
     public function fm_sincrocap11i(){
        
        $query = $this->db->query('call sp3sincronizacioncapitulo11i();');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;   
     }
    
      public function fm_sincrocap12i(){
        
        $query = $this->db->query('call sp3sincronizacioncapitulo12i();');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;   
     }
     
     ////////////////////////////////////Sincronizacion perfil productivo//////////////////
     
     public function fm_sincropph(){
        
        $query = $this->db->query('call spsincronizarppcapitulo1hogar();');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;   
     }
     
     public function fm_sincroppcap1(){
        
        $query = $this->db->query('call spsincronizarppcapitulo1();');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;   
     }
     
     public function fm_sincroppcap2(){
        
        $query = $this->db->query('call spsincronizarppcapitulo2();');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;   
     }
     
     public function fm_sincroppcap3(){
        
        $query = $this->db->query('call spsincronizarppcapitulo3();');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;   
     }
     
     public function fm_sincroppcap4(){
        
        $query = $this->db->query('call spsincronizarppcapitulo4();');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;   
     }
     
     public function fm_sincroppfac(){
        
        $query = $this->db->query('call spsincronizarformacionacademica();');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;   
     }
     
     public function fm_sincroppoes(){
        
        $query = $this->db->query('call spsincronizarppotrosestudios();');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;   
     }
     public function fm_sincroppexp(){
        
        $query = $this->db->query('call spsincronizarppexperiencialaboral();');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;   
     }
    
    /////////////////////////////////////sincronizacion logros/////////////////////////////
    
    public function fm_sincrologro1(){
        
        $query = $this->db->query('call sp4logro1servidor();');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;   
     }
     public function fm_sincrologro2(){
        
        $query = $this->db->query('call sp4logro2servidor();');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;   
     }
     public function fm_sincrologro3(){
        
        $query = $this->db->query('call sp4logro3servidor();');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;   
     }
     public function fm_sincrologro4(){
        
        $query = $this->db->query('call sp4logro4servidor();');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;   
     }
     public function fm_sincrologro5(){
        
        $query = $this->db->query('call sp4logro5servidor();');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;   
     }
     public function fm_sincrologro6(){
        
        $query = $this->db->query('call sp4logro6servidor();');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;   
     }
     public function fm_sincrologro7(){
        
        $query = $this->db->query('call sp4logro7servidor();');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;   
     }
     public function fm_sincrologro8(){
        
        $query = $this->db->query('call sp4logro8servidor();');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;   
     }
     public function fm_sincrologro9(){
        
        $query = $this->db->query('call sp4logro9servidor();');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;   
     }
     public function fm_sincrologro10(){
        
        $query = $this->db->query('call sp4logro10servidor();');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;   
     }
     public function fm_sincrologro11(){
        
        $query = $this->db->query('call sp4logro11servidor();');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;   
     }
     public function fm_sincrologro12(){
        
        $query = $this->db->query('call sp4logro12servidor();');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;   
     }
     public function fm_sincrologro13(){
        
        $query = $this->db->query('call sp4logro13servidor();');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;   
     }
     public function fm_sincrologro14(){
        
        $query = $this->db->query('call sp4logro14servidor();');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;   
     }
     public function fm_sincrologro15(){
        
        $query = $this->db->query('call sp4logro15servidor();');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;   
     }
     public function fm_sincrologro16(){
        
        $query = $this->db->query('call sp4logro16servidor();');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;   
     }
     public function fm_sincrologro17(){
        
        $query = $this->db->query('call sp4logro17servidor();');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;   
     }
     public function fm_sincrologro18(){
        
        $query = $this->db->query('call sp4logro18servidor();');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;   
     }
     public function fm_sincrologro19(){
        
        $query = $this->db->query('call sp4logro19servidor();');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;   
     }
     public function fm_sincrologro20(){
        
        $query = $this->db->query('call sp4logro20servidor();');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;   
     }
     public function fm_sincrologro21(){
        
        $query = $this->db->query('call sp4logro21servidor();');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;   
     }
     public function fm_sincrologro22(){
        
        $query = $this->db->query('call sp4logro22servidor();');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;   
     }
     public function fm_sincrologro23(){
        
        $query = $this->db->query('call sp4logro23servidor();');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;   
     }
     public function fm_sincrologro24(){
        
        $query = $this->db->query('call sp4logro24servidor();');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;   
     }
     public function fm_sincrologro25(){
        
        $query = $this->db->query('call sp4logro25servidor();');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;   
     }
     public function fm_sincrologro26(){
        
        $query = $this->db->query('call sp4logro26servidor();');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;   
     }
     public function fm_sincrologro27(){
        
        $query = $this->db->query('call sp4logro27servidor();');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;   
     }
     public function fm_sincrologro28(){
        
        $query = $this->db->query('call sp4logro28servidor();');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;   
     }
     public function fm_sincrologro29(){
        
        $query = $this->db->query('call sp4logro29servidor();');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;   
     }
     public function fm_sincrologro30(){
        
        $query = $this->db->query('call sp4logro30servidor();');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;   
     }
     public function fm_sincrologro31(){
        
        $query = $this->db->query('call sp4logro31servidor();');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;   
     }
     public function fm_sincrologro32(){
        
        $query = $this->db->query('call sp4logro32servidor();');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;   
     }
     public function fm_sincrologro33(){
        
        $query = $this->db->query('call sp4logro33servidor();');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;   
     }
     public function fm_sincrologro34(){
        
        $query = $this->db->query('call sp4logro34servidor();');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;   
     }
     public function fm_sincrologro35(){
        
        $query = $this->db->query('call sp4logro35servidor();');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;   
     }
     public function fm_sincrologro36(){
        
        $query = $this->db->query('call sp4logro36servidor();');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;   
     }
     public function fm_sincrologro37(){
        
        $query = $this->db->query('call sp4logro37servidor();');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;   
     }
     public function fm_sincrologro38(){
        
        $query = $this->db->query('call sp4logro38servidor();');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;   
     }
     public function fm_sincrologro39(){
        
        $query = $this->db->query('call sp4logro39servidor();');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;   
     }
     public function fm_sincrologro40(){
        
        $query = $this->db->query('call sp4logro40servidor();');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;   
     }
     public function fm_sincrologro41(){
        
        $query = $this->db->query('call sp4logro41servidor();');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;   
     }
     public function fm_hmovlog(){
        
        $query = $this->db->query('call spsincronizarhistoricomovimientolog();');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;   
     }
     public function fm_movlog10(){
        
        $query = $this->db->query('call spsincronizarlogromovimientolog10preguntvalid();');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;   
     }
     public function fm_movlog18(){
        
        $query = $this->db->query('call spsincronizarlogromovimientolog18preguntvalid();');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;   
     }
     public function fm_movlog24(){
        
        $query = $this->db->query('call spsincronizarlogromovimientolog24preguntvalid();');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;   
     }
     public function fm_movlog33(){
        
        $query = $this->db->query('call spsincronizarlogromovimientolog33preguntvalid();');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;   
     }
     public function fm_movlog34(){
        
        $query = $this->db->query('call spsincronizarlogromovimientolog34preguntvalid();');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;   
     }
     public function fm_movlog39(){
        
        $query = $this->db->query('call spsincronizarlogromovimientolog39preguntvalid();');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;   
     }
     public function fm_logromovimientocgs(){
        
        $query = $this->db->query('call spsincronizarlogromovimientoscogestor();');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;   
     }
      public function fm_l2e2sueno(){
        
        $query = $this->db->query('call spsincronizarl2e2sueno();');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;   
     }
     public function fm_l2e2suenoacciones(){
        
        $query = $this->db->query('call spsincronizarl2e2suenoacciones();');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;   
     }
     
     public function fm_sincroipm(){
        
        $query = $this->db->query('call sp5ipmservidor();');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;   
     }
     
     
     
     public function fm_logroblanco(){
        
        $query = $this->db->query('call spsincrohistoricologroblanco();');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;   
     }
     
     
     public function fm_logmovrec10(){
        
        $query = $this->db->query('call spsincrologromovimientorecalculolog10();');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;   
     }
     
     public function fm_logmovrec11(){
        
        $query = $this->db->query('call spsincrologromovimientorecalculolog11();');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;   
     }
     
     public function fm_logmovrec12(){
        
        $query = $this->db->query('call spsincrologromovimientorecalculolog12();');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;   
     }
     
     public function fm_logmovrec13(){
        
        $query = $this->db->query('call spsincrologromovimientorecalculolog13();');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;   
     }
     
     public function fm_logmovrec2(){
        
        $query = $this->db->query('call spsincrologromovimientorecalculolog2();');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;   
     }
     
     public function fm_logmovrec22(){
        
        $query = $this->db->query('call spsincrologromovimientorecalculolog22();');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;   
     }
     
     public function fm_logmovrec23(){
        
        $query = $this->db->query('call spsincrologromovimientorecalculolog23();');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;   
     }
     
     public function fm_logmovrec3(){
        
        $query = $this->db->query('call spsincrologromovimientorecalculolog3();');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;   
     }
     
     public function fm_logmovrec5(){
        
        $query = $this->db->query('call spsincrologromovimientorecalculolog5();');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;   
     }
     
     public function fm_logmovrec7(){
        
        $query = $this->db->query('call spsincrologromovimientorecalculolog7();');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;   
     }
     
     public function fm_logmovrec8(){
        
        $query = $this->db->query('call spsincrologromovimientorecalculolog8();');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;   
     }
     
     public function fm_logmovrec9(){
        
        $query = $this->db->query('call spsincrologromovimientorecalculolog9();');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;   
     }
     
     
    ////////////////////////////////////Sincronizacion privaciones/////////////////////////////
     
      public function fm_sincroprivacion1(){
        
        $query = $this->db->query('call sp5privacion1servidor();');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;   
     }
     public function fm_sincroprivacion2(){
        
        $query = $this->db->query('call sp5privacion2servidor();');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;   
     }
     public function fm_sincroprivacion3(){
        
        $query = $this->db->query('call sp5privacion3servidor();');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;   
     }
     public function fm_sincroprivacion4(){
        
        $query = $this->db->query('call sp5privacion4servidor();');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;   
     }
     public function fm_sincroprivacion5(){
        
        $query = $this->db->query('call sp5privacion5servidor();');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;   
     }
     public function fm_sincroprivacion6(){
        
        $query = $this->db->query('call sp5privacion6servidor();');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;   
     }
     public function fm_sincroprivacion7(){
        
        $query = $this->db->query('call sp5privacion7servidor();');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;   
     }
     public function fm_sincroprivacion8(){
        
        $query = $this->db->query('call sp5privacion8servidor();');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;   
     }
     public function fm_sincroprivacion9(){
        
        $query = $this->db->query('call sp5privacion9servidor();');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;   
     }
     public function fm_sincroprivacion10(){
        
        $query = $this->db->query('call sp5privacion10servidor();');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;   
     }
     public function fm_sincroprivacion11(){
        
        $query = $this->db->query('call sp5privacion11servidor();');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;   
     }
     public function fm_sincroprivacion12(){
        
        $query = $this->db->query('call sp5privacion12servidor();');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;   
     }
     public function fm_sincroprivacion13(){
        
        $query = $this->db->query('call sp5privacion13servidor();');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;   
     }
     public function fm_sincroprivacion14(){
        
        $query = $this->db->query('call sp5privacion14servidor();');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;   
     }
     public function fm_sincroprivacion15(){
        
        $query = $this->db->query('call sp5privacion15servidor();');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;   
     }
     public function fm_sincroprivacion16(){
        
        $query = $this->db->query('call sp5privacion16servidor();');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;   
     }
     
     /////////////////////////////Sincronizacion otras tablas/////////////////////
     ////////////////////////pasosestado,estacionestado,capacidades,actualizacion///////////////
     
     public function fm_sincropasos(){
        
        $query = $this->db->query('call spsincronizarprotocolopasosestado();');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;   
     }
     public function fm_sincroestacion(){
        
        $query = $this->db->query('call sp3sincronizacionestacionestado();');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;   
     }
     public function fm_sincrocapacidades(){
        
        $query = $this->db->query('call spcapacidadessincroa();');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;   
     }
     public function fm_sincroestacionh(){
        
        $query = $this->db->query('call sp3sincronizacionarriba();');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;   
     }
     public function fm_sincrointegrante(){
        
        $query = $this->db->query('call sp3sincronizacionintegrantes();');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;   
     }
     public function fm_sincrohogar(){
        
        $query = $this->db->query('call sp3sincronizacionhogar();');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;   
     }
     public function fm_sincroactualizacion(){
        
        $query = $this->db->query('call spactualizacionsincroa();');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;   
     }
     
     public function fm_sincrofolioslogros(){
        
        $query = $this->db->query('call sp3sincronizacionfolioslogros();');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;   
     }
     
     public function fm_sincroc1p1ap12(){
        
        $query = $this->db->query('call spsincroc1p1ap12();');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;   
     }
          public function fm_sincrocapitulo1l2e1(){
        
        $query = $this->db->query('call spsincrocapitulo1l2e1();');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;   
     }
     public function fm_sincrolinea2e1cualidadesh(){
        
        $query = $this->db->query('call spsincrolinea2e1cualidadesh();');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;   
     }
     public function fm_sincrolinea2e1cualidadesi(){
        
        $query = $this->db->query('call spsincrolinea2e1cualidadesi();');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;   
     }
      public function fm_sincrohistoricoactivacioni(){
        
        $query = $this->db->query('call spsincrohistoricoactivacioni();');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;   
     }
     /////////////////////Inicia Sincronizacion Estacion Cero////////////////
     public function fm_hfprocedencia(){
        
        $query = $this->db->query('call spsincrohfprocedencia();');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;   
     }
     public function fm_hflogros(){
        
        $query = $this->db->query('call spsincrohflogros();');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;   
     }
     public function fm_hfcostumbres(){
        
        $query = $this->db->query('call spsincrohfcostumbres();');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;   
     }
     public function fm_hfconformacion(){
        
        $query = $this->db->query('call spsincrohfconformacion();');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;   
     }
     public function fm_facttscual1(){
        
        $query = $this->db->query('call spsincrofacttscual1();');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;   
     }
     public function fm_facttfcual1(){
        
        $query = $this->db->query('call spsincrofacttfcual1();');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;   
     }
     public function fm_facttecual1(){
        
        $query = $this->db->query('call spsincrofacttecual1();');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;   
     }
     public function fm_factiscual1(){
        
        $query = $this->db->query('call spsincrofactiscual1();');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;   
     }
     public function fm_factifcual1(){
        
        $query = $this->db->query('call spsincrofactifcual1();');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;   
     }
     public function fm_factiecual1(){
        
        $query = $this->db->query('call spsincrofactiecual1();');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;   
     }
     public function fm_estacioncerocea(){
        
        $query = $this->db->query('call spsincroestacioncerocea();');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;   
     }
     public function fm_crisisscual1(){
        
        $query = $this->db->query('call spsincrocrisisscual1();');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;   
     }
     public function fm_crisisfcual1(){
        
        $query = $this->db->query('call spsincrocrisisfcual1();');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;   
     }
     public function fm_crisisecual1(){
        
        $query = $this->db->query('call spsincrocrisisecual1();');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;   
     }
     public function fm_crearmetas(){
        
        $query = $this->db->query('call spsincrocrearmetas();');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;   
     }
     public function fm_correspautonomia(){
        
        $query = $this->db->query('call spsincrocorrespautonomia();');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;   
     }
     public function fm_eerf(){
        
        $query = $this->db->query('call spsincroeerf();');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;   
     }
      public function fm_avanceproceso(){
        
        $query = $this->db->query('call sp6sincroavanceprocesoac();');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;   
     }
      public function fm_l2metas(){
        
        $query = $this->db->query('call sp6sincrolinea2metas();');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;   
     }
      public function fm_l2acciones(){
        
        $query = $this->db->query('call sp6sincrolinea2accionesmeta();');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;   
     }
      public function fm_casoexitoso(){
        
        $query = $this->db->query('call sp6sincrocasoexitoso();');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;   
     }
      public function fm_correspautonomiahistorico(){
        
        $query = $this->db->query('call sp6sincrocorresphistorico();');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;   
     }
     /////////////////////Fin Sincronizacion Estacion Cero////////////////
      public function fm_logromovimientocf(){
        
        $query = $this->db->query('call spsincronizarlogromovimientocf();');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;   
     }
     
      public function fm_protocoloinicioestacion(){
        
        $query = $this->db->query('call sp3sincronizacioninicioestacion();');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;   
     }
     
      public function fm_condicionnecesaria(){
        
        $query = $this->db->query('call sp2sincronizacondicionnecesaria();');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;   
     }
     
     public function fm_tablaingresos(){
        
        $query = $this->db->query('call sp2ingresosservidor();');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;   
     }
     
     public function fm_tablaingresosd($listarfiducias){ 
      $this->db->replace('t2_ingresos', $listarfiducias);
     }
//     public function fm_privacionesintermedia(){
//        
//        $query = $this->db->query('call sp5realizartodasprivacionesservidorintermedia();');
//        $resultado = $query->result();
//        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
//        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
//        return $resultado;   
//     }
     
        public function fm_privacionesintermedia1(){
        
        $query = $this->db->query('call sp5realizartodasprivacionesservidorintermedia1();');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;   
     }
       public function fm_privacionesintermedia2(){
        
        $query = $this->db->query('call sp5realizartodasprivacionesservidorintermedia2();');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;   
     }
       public function fm_privacionesintermedia3(){
        
        $query = $this->db->query('call sp5realizartodasprivacionesservidorintermedia3();');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;   
     }
       public function fm_privacionesintermedia4(){
        
        $query = $this->db->query('call sp5realizartodasprivacionesservidorintermedia4();');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;   
     }
       public function fm_privacionesintermedia5(){
        
        $query = $this->db->query('call sp5realizartodasprivacionesservidorintermedia5();');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;   
     }
       public function fm_privacionesintermedia6(){
        
        $query = $this->db->query('call sp5realizartodasprivacionesservidorintermedia6();');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;   
     }
       public function fm_privacionesintermedia7(){
        
        $query = $this->db->query('call sp5realizartodasprivacionesservidorintermedia7();');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;   
     }
       public function fm_privacionesintermedia8(){
        
        $query = $this->db->query('call sp5realizartodasprivacionesservidorintermedia8();');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;   
     }
       public function fm_privacionesintermedia9(){
        
        $query = $this->db->query('call sp5realizartodasprivacionesservidorintermedia9();');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;   
     }
       public function fm_privacionesintermedia10(){
        
        $query = $this->db->query('call sp5realizartodasprivacionesservidorintermedia10();');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;   
     }
       public function fm_privacionesintermedia11(){
        
        $query = $this->db->query('call sp5realizartodasprivacionesservidorintermedia11();');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;   
     }
       public function fm_privacionesintermedia12(){
        
        $query = $this->db->query('call sp5realizartodasprivacionesservidorintermedia12();');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;   
     }
       public function fm_privacionesintermedia13(){
        
        $query = $this->db->query('call sp5realizartodasprivacionesservidorintermedia13();');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;   
     }
       public function fm_privacionesintermedia14(){
        
        $query = $this->db->query('call sp5realizartodasprivacionesservidorintermedia14();');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;   
     }
       public function fm_privacionesintermedia15(){
        
        $query = $this->db->query('call sp5realizartodasprivacionesservidorintermedia15();');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;   
     }
       public function fm_privacionesintermedia16(){
        
        $query = $this->db->query('call sp5realizartodasprivacionesservidorintermedia16();');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;   
     }
       public function fm_privacionesintermediaipm(){
        
        $query = $this->db->query('call sp5realizartodasprivacionesservidorintermediaipm();');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;   
     }
     
     
     
     
     
     
//     public function fm_privacionesintermediad(){
//        
//        $query = $this->db->query('call sp5realizartodasprivacionesservidorintermediad();');
//        $resultado = $query->result();
//        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
//        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
//        return $resultado;   
//     }
//     public function fm_privacionesintermediad(){
//        
//        $query = $this->db->query('call sp5realizartodasprivacionesservidordintermedia();');
//        $resultado = $query->result();
//        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
//        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
//        return $resultado;   
//     }
     public function fm_privacionesintermediad1($listarfiducias){
        
      $this->db->replace('t5_privacion1intermedia', $listarfiducias);   
     }
     public function fm_privacionesintermediad2($listarfiducias){
        
      $this->db->replace('t5_privacion2intermedia', $listarfiducias);  
     }
     public function fm_privacionesintermediad3($listarfiducias){
        
      $this->db->replace('t5_privacion3intermedia', $listarfiducias);  
     }
     public function fm_privacionesintermediad4($listarfiducias){
        
      $this->db->replace('t5_privacion4intermedia', $listarfiducias);  
     }
     public function fm_privacionesintermediad5($listarfiducias){
        
      $this->db->replace('t5_privacion5intermedia', $listarfiducias);  
     }
     public function fm_privacionesintermediad6($listarfiducias){
        
      $this->db->replace('t5_privacion6intermedia', $listarfiducias);  
     }
     public function fm_privacionesintermediad7($listarfiducias){
        
      $this->db->replace('t5_privacion7intermedia', $listarfiducias);  
     }
     public function fm_privacionesintermediad8($listarfiducias){
        
      $this->db->replace('t5_privacion8intermedia', $listarfiducias);  
     }
     public function fm_privacionesintermediad9($listarfiducias){
        
      $this->db->replace('t5_privacion9intermedia', $listarfiducias);  
     }
     public function fm_privacionesintermediad10($listarfiducias){
        
      $this->db->replace('t5_privacion10intermedia', $listarfiducias);  
     }
     public function fm_privacionesintermediad11($listarfiducias){
        
      $this->db->replace('t5_privacion11intermedia', $listarfiducias);  
     }
     public function fm_privacionesintermediad12($listarfiducias){
        
      $this->db->replace('t5_privacion12intermedia', $listarfiducias);  
     }
     public function fm_privacionesintermediad13($listarfiducias){
        
      $this->db->replace('t5_privacion13intermedia', $listarfiducias);  
     }
     public function fm_privacionesintermediad14($listarfiducias){
        
      $this->db->replace('t5_privacion14intermedia', $listarfiducias);  
     }
     public function fm_privacionesintermediad15($listarfiducias){
        
      $this->db->replace('t5_privacion15intermedia', $listarfiducias);  
     }
     public function fm_privacionesintermediad16($listarfiducias){
        
      $this->db->replace('t5_privacion16intermedia', $listarfiducias);  
     }
     public function fm_ipmservidordintermediasub($listarfiducias){
        
      $this->db->replace('t5_ipmintermedia', $listarfiducias);
     }
//     public function fm_tablasintermediabajada(){
//        
//        $query = $this->db->query('call sp37_sincronizarbajadaintermedia();');
//        $resultado = $query->result();
//        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
//        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
//        return $resultado;   
//     }
     public function fm_tablasintermediabajadac11($listarfiducias){  
      $this->db->replace('t2_capitulo11intermedia', $listarfiducias);
 
     }
     public function fm_tablasintermediabajadac2($listarfiducias){  
      $this->db->replace('t2_capitulo2intermedia', $listarfiducias);
     }
     public function fm_tablasintermediabajadac5($listarfiducias){ 
      $this->db->replace('t2_capitulo5intermedia', $listarfiducias);
     } 
     public function fm_tablasintermediabajadac6($listarfiducias){ 
      $this->db->replace('t2_capitulo6intermedia', $listarfiducias);
     }
     public function fm_tablasintermediabajadac7($listarfiducias){ 
      $this->db->replace('t2_capitulo7intermedia', $listarfiducias);
     }
     public function fm_tablasintermediabajadac8($listarfiducias){ 
      $this->db->replace('t2_capitulo8intermedia', $listarfiducias);
  
     }
     public function fm_tablasintermediabajadac9($listarfiducias){  
      $this->db->replace('t2_capitulo9intermedia', $listarfiducias);
   
     }
     public function fm_sincronizarbajadaintermediahistc11($listarfiducias){  
      $this->db->replace('t2_capitulo11intermedia_historico', $listarfiducias);

     }
     public function fm_sincronizarbajadaintermediahistc2($listarfiducias){  
      $this->db->replace('t2_capitulo2intermedia_historico', $listarfiducias);
     }
     public function fm_sincronizarbajadaintermediahistc5($listarfiducias){
      $this->db->replace('t2_capitulo5intermedia_historico', $listarfiducias);
     }
     public function fm_sincronizarbajadaintermediahistc6($listarfiducias){ 
      $this->db->replace('t2_capitulo6intermedia_historico', $listarfiducias);
     }
     public function fm_sincronizarbajadaintermediahistc7($listarfiducias){  
      $this->db->replace('t2_capitulo7intermedia_historico', $listarfiducias);
     }
     public function fm_sincronizarbajadaintermediahistc8($listarfiducias){ 
      $this->db->replace('t2_capitulo8intermedia_historico', $listarfiducias);
     }
     public function fm_sincronizarbajadaintermediahistc9($listarfiducias){ 
      $this->db->replace('t2_capitulo9intermedia_historico', $listarfiducias);
     }
     public function fm_sincronizacionintegrantesintermedia_historicodint($listarfiducias){ 
      $this->db->replace('t1_principalintegrantes_intermedia_historico', $listarfiducias);
     }
     public function fm_privacion10intermediaservidor_historicod10($listarfiducias){ 
      $this->db->replace('t5_privacion10intermedia_historico', $listarfiducias);
     }
     public function fm_privacion11intermediaservidor_historicod11($listarfiducias){ 
      $this->db->replace('t5_privacion11intermedia_historico', $listarfiducias);
     }
     public function fm_privacion12intermediaservidor_historicod12($listarfiducias){ 
      $this->db->replace('t5_privacion12intermedia_historico', $listarfiducias);
     }
     public function fm_privacion13intermediaservidor_historicod13($listarfiducias){ 
      $this->db->replace('t5_privacion13intermedia_historico', $listarfiducias);
     }
     public function fm_privacion14intermediaservidor_historicod14($listarfiducias){
      $this->db->replace('t5_privacion14intermedia_historico', $listarfiducias);
     }
     public function fm_privacion15intermediaservidor_historicod15($listarfiducias){ 
      $this->db->replace('t5_privacion15intermedia_historico', $listarfiducias);
     }
     public function fm_privacion16intermediaservidor_historicod16($listarfiducias){  
      $this->db->replace('t5_privacion16intermedia_historico', $listarfiducias);       
     }
     public function fm_privacion1intermediaservidor_historicod1($listarfiducias){ 
      $this->db->replace('t5_privacion1intermedia_historico', $listarfiducias);       
     }
     public function fm_privacion2intermediaservidor_historicod2($listarfiducias){ 
      $this->db->replace('t5_privacion2intermedia_historico', $listarfiducias);       
     }
     public function fm_privacion3intermediaservidor_historicod3($listarfiducias){  
      $this->db->replace('t5_privacion3intermedia_historico', $listarfiducias);       
     }
     public function fm_privacion4intermediaservidor_historicod4($listarfiducias){ 
      $this->db->replace('t5_privacion4intermedia_historico', $listarfiducias);       
     }
     public function fm_ipmintermediaservidor_historicod($listarfiducias){  
      $this->db->replace('t5_ipmintermedia_historico', $listarfiducias);       
   }
     public function fm_privacion5intermediaservidor_historicod5($listarfiducias){ 
      $this->db->replace('t5_privacion5intermedia_historico', $listarfiducias);       
     }
     public function fm_privacion6intermediaservidor_historicod6($listarfiducias){ 
      $this->db->replace('t5_privacion6intermedia_historico', $listarfiducias);       
     }
     public function fm_privacion7intermediaservidor_historicod7($listarfiducias){  
      $this->db->replace('t5_privacion7intermedia_historico', $listarfiducias);       
     }
     public function fm_privacion8intermediaservidor_historicod8($listarfiducias){ 
      $this->db->replace('t5_privacion8intermedia_historico', $listarfiducias);       
     }
     public function fm_privacion9intermediaservidor_historicod9($listarfiducias){  
      $this->db->replace('t5_privacion9intermedia_historico', $listarfiducias);       
     }
     public function fm_sincronizarprotocoloestacionestado_intermedia_historicod1(){  //NO TIENE PROCESO ALMACENADO 
        
        $query = $this->db->query('call sincronizarprotocoloestacionestado_intermedia_historicod1();');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;   
     }
     public function fm_sincronizarprotocolopasosestado_intermedia_historicod1(){ //NO TIENE PROCESO ALMACENADO 
        
        $query = $this->db->query('call sincronizarprotocolopasosestado_intermedia_historicod1();');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;   
     }
	 public function fm_encuadreservidord($listarfiducias){  
      $this->db->replace('t0_encuadre', $listarfiducias);       
     }
     public function fm_informaciongeneralvisitasservidord(){  
      $query = $this->db->query('call sp0informaciongeneralvisitasservidord();');
      $resultado = $query->result();
      $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
      $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
      return $resultado;       
   }
   public function fm_informaciongeneralvisitas_historicod($listarfiducias){  
      $this->db->replace('t0_informaciongeneralvisitas_historico', $listarfiducias);       
   }
   public function fm_informaciongeneralvisitas_aed($listarfiducias){  
      $this->db->replace('t0_informaciongeneralvisitas_ae', $listarfiducias);       
   }

//------------------------------------//
	     
//      public function fm_tablasintermediasubida(){
//        
//        $query = $this->db->query('call sp37_sincronizarsubidaintermedia();');
//        $resultado = $query->result();
//        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
//        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
//        return $resultado;   
//     }
      public function fm_tablasintermediasubidac2(){
        
        $query = $this->db->query('call sp37_sincronizarsubidaintermediac2();');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;   
     }
     public function fm_tablasintermediasubidac5(){
        
        $query = $this->db->query('call sp37_sincronizarsubidaintermediac5();');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;   
     }
     public function fm_tablasintermediasubidac6(){
        
        $query = $this->db->query('call sp37_sincronizarsubidaintermediac6();');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;   
     }
     public function fm_tablasintermediasubidac7(){
        
        $query = $this->db->query('call sp37_sincronizarsubidaintermediac7();');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;   
     }
     public function fm_tablasintermediasubidac8(){
        
        $query = $this->db->query('call sp37_sincronizarsubidaintermediac8();');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;   
     }
     public function fm_tablasintermediasubidac9(){
        
        $query = $this->db->query('call sp37_sincronizarsubidaintermediac9();');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;   
     }
     public function fm_tablasintermediasubidac11(){
        
        $query = $this->db->query('call sp37_sincronizarsubidaintermediac11();');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;   
     }
     public function fm_tablasintermediasubidainteg(){
        
        $query = $this->db->query('call sp37_sincronizarsubidaintermediainteg();');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;   
     }
     public function fm_sincronizacionusuariosincronizado(){
        
        $query = $this->db->query('call sp37_sincronizacionusuariosincronizado();');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;   
     }
     //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
     public function fm_sincronizarsubidaintermediahistc11(){
        
        $query = $this->db->query('call sp37_sincronizarsubidaintermediahistc11();');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;   
     }
     public function fm_sincronizarsubidaintermediahistc2(){
        
        $query = $this->db->query('call sp37_sincronizarsubidaintermediahistc2();');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;   
     }
     public function fm_sincronizarsubidaintermediahistc5(){
        
        $query = $this->db->query('call sp37_sincronizarsubidaintermediahistc5();');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;   
     }
     public function fm_sincronizarsubidaintermediahistc6(){
        
        $query = $this->db->query('call sp37_sincronizarsubidaintermediahistc6();');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;   
     }
     public function fm_sincronizarsubidaintermediahistc7(){
        
        $query = $this->db->query('call sp37_sincronizarsubidaintermediahistc7();');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;   
     }
     public function fm_sincronizarsubidaintermediahistc8(){
        
        $query = $this->db->query('call sp37_sincronizarsubidaintermediahistc8();');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;   
     }
     public function fm_sincronizarsubidaintermediahistc9(){
        
        $query = $this->db->query('call sp37_sincronizarsubidaintermediahistc9();');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;   
     }
     public function fm_sincronizacionintegrantesintermedia_historicosub(){
        
        $query = $this->db->query('call sp37_sincronizacionintegrantesintermedia_historicosub();');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;   
     }
     public function fm_sp5privacion10intermediaservidor_historico(){
        
        $query = $this->db->query('call sp37_sp5privacion10intermediaservidor_historico();');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;   
     }
     public function fm_sp5privacion11intermediaservidor_historico(){
        
        $query = $this->db->query('call sp37_sp5privacion11intermediaservidor_historico();');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;   
     }
     public function fm_sp5privacion12intermediaservidor_historico(){
        
        $query = $this->db->query('call sp37_sp5privacion12intermediaservidor_historico();');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;   
     }
     public function fm_sp5privacion13intermediaservidor_historico(){
        
        $query = $this->db->query('call sp37_sp5privacion13intermediaservidor_historico();');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;   
     }
     public function fm_sp5privacion14intermediaservidor_historico(){
        
        $query = $this->db->query('call sp37_sp5privacion14intermediaservidor_historico();');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;   
     }
     public function fm_sp5privacion15intermediaservidor_historico(){
        
        $query = $this->db->query('call sp37_sp5privacion15intermediaservidor_historico();');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;   
     }
     public function fm_sp5privacion16intermediaservidor_historico(){
        
        $query = $this->db->query('call sp37_sp5privacion16intermediaservidor_historico();');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;   
     }
     public function fm_sp5privacion1intermediaservidor_historico(){
        
        $query = $this->db->query('call sp37_sp5privacion1intermediaservidor_historico();');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;   
     }
     public function fm_sp5privacion2intermediaservidor_historico(){
        
        $query = $this->db->query('call sp37_sp5privacion2intermediaservidor_historico();');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;   
     }
     public function fm_sp5privacion3intermediaservidor_historico(){
        
        $query = $this->db->query('call sp37_sp5privacion3intermediaservidor_historico();');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;   
     }
     public function fm_sp5privacion4intermediaservidor_historico(){
        
        $query = $this->db->query('call sp37_sp5privacion4intermediaservidor_historico();');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;   
     }



     public function fm_sp5ipmintermediaservidor_historico(){
        
      $query = $this->db->query('call sp5ipmservidorintermedia_historico();');
      $resultado = $query->result();
      $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
      $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
      return $resultado;   
   }



     public function fm_sp5privacion5intermediaservidor_historico(){
        
        $query = $this->db->query('call sp37_sp5privacion5intermediaservidor_historico();');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;   
     }
     public function fm_sp5privacion6intermediaservidor_historico(){
        
        $query = $this->db->query('call sp37_sp5privacion6intermediaservidor_historico();');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;   
     }
     public function fm_sp5privacion7intermediaservidor_historico(){
        
        $query = $this->db->query('call sp37_sp5privacion7intermediaservidor_historico();');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;   
     }
     public function fm_sp5privacion8intermediaservidor_historico(){
        
        $query = $this->db->query('call sp37_sp5privacion8intermediaservidor_historico();');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;   
     }
     public function fm_sp5privacion9intermediaservidor_historico(){
        
        $query = $this->db->query('call sp37_sp5privacion9intermediaservidor_historico();');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;   
     }
     public function fm_sincronizarprotocoloestacionestado_intermedia_historico(){
        
        $query = $this->db->query('call sp37_sincronizarprotocoloestacionestado_intermedia_historico();');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;   
     }
     public function fm_sincronizarprotocolopasosestado_intermedia_historico(){
        
        $query = $this->db->query('call sp37_sincronizarprotocolopasosestado_intermedia_historico();');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;   
     }
	 public function fm_encuadreservidor(){
        
        $query = $this->db->query('call sp0encuadreservidor();');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;   
     }

   public function fm_informaciongeneralvisitasservidor(){
        
      $query = $this->db->query('call sp0informaciongeneralvisitasservidor();');
      $resultado = $query->result();
      $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
      $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
      return $resultado;   
   }

   public function fm_informaciongeneralvisitas_historico(){
        
      $query = $this->db->query('call sp0informaciongeneralvisitas_historico();');
      $resultado = $query->result();
      $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
      $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
      return $resultado;   
   }

   public function fm_informaciongeneralvisitas_ae(){
        
      $query = $this->db->query('call sp0informaciongeneralvisitas_ae();');
      $resultado = $query->result();
      $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
      $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
      return $resultado;   
   }

//////////////////////////Modelos Cierre//////////////////////

   public function fm_ipmintermediaLCV1(){
        
      $query = $this->db->query('call sp5_ipmintermediaLCV1();');
      $resultado = $query->result();
      $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
      $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
      return $resultado;   
   }

   public function fm_privacion16intermediaLCV1(){
        
      $query = $this->db->query('call sp5_privacion16intermediaLCV1();');
      $resultado = $query->result();
      $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
      $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
      return $resultado;   
   }


   public function fm_privacion15intermediaLCV1(){
        
      $query = $this->db->query('call sp5_privacion15intermediaLCV1();');
      $resultado = $query->result();
      $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
      $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
      return $resultado;   
   }

   public function fm_privacion14intermediaLCV1(){
        
      $query = $this->db->query('call sp5_privacion14intermediaLCV1();');
      $resultado = $query->result();
      $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
      $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
      return $resultado;   
   }

   public function fm_privacion13intermediaLCV1(){
        
      $query = $this->db->query('call sp5_privacion13intermediaLCV1();');
      $resultado = $query->result();
      $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
      $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
      return $resultado;   
   }

   public function fm_privacion12intermediaLCV1(){
        
      $query = $this->db->query('call sp5_privacion12intermediaLCV1();');
      $resultado = $query->result();
      $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
      $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
      return $resultado;   
   }

   public function fm_privacion11intermediaLCV1(){
        
      $query = $this->db->query('call sp5_privacion11intermediaLCV1();');
      $resultado = $query->result();
      $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
      $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
      return $resultado;   
   }

   public function fm_privacion10intermediaLCV1(){
        
      $query = $this->db->query('call sp5_privacion10intermediaLCV1();');
      $resultado = $query->result();
      $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
      $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
      return $resultado;   
   }

   public function fm_privacion9intermediaLCV1(){
        
      $query = $this->db->query('call sp5_privacion9intermediaLCV1();');
      $resultado = $query->result();
      $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
      $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
      return $resultado;   
   }

   public function fm_privacion8intermediaLCV1(){
        
      $query = $this->db->query('call sp5_privacion8intermediaLCV1();');
      $resultado = $query->result();
      $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
      $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
      return $resultado;   
   }

   public function fm_privacion7intermediaLCV1(){
        
      $query = $this->db->query('call sp5_privacion7intermediaLCV1();');
      $resultado = $query->result();
      $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
      $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
      return $resultado;   
   }

   public function fm_privacion6intermediaLCV1(){
        
      $query = $this->db->query('call sp5_privacion6intermediaLCV1();');
      $resultado = $query->result();
      $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
      $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
      return $resultado;   
   }

   public function fm_privacion5intermediaLCV1(){
        
      $query = $this->db->query('call sp5_privacion5intermediaLCV1();');
      $resultado = $query->result();
      $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
      $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
      return $resultado;   
   }

   public function fm_privacion4intermediaLCV1(){
        
      $query = $this->db->query('call sp5_privacion4intermediaLCV1();');
      $resultado = $query->result();
      $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
      $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
      return $resultado;   
   }

   public function fm_privacion3intermediaLCV1(){
        
      $query = $this->db->query('call sp5_privacion3intermediaLCV1();');
      $resultado = $query->result();
      $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
      $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
      return $resultado;   
   }


   public function fm_privacion2intermediaLCV1(){
        
      $query = $this->db->query('call sp5_privacion2intermediaLCV1();');
      $resultado = $query->result();
      $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
      $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
      return $resultado;   
   }


   public function fm_privacion1intermediaLCV1(){
        
      $query = $this->db->query('call sp5_privacion1intermediaLCV1();');
      $resultado = $query->result();
      $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
      $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
      return $resultado;   
   }

   public function fm_capitulo11intermedia_lineacierre(){
        
      $query = $this->db->query('call sp5_capitulo11intermedia_lineacierre();');
      $resultado = $query->result();
      $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
      $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
      return $resultado;   
   }

   public function fm_capitulo6intermedia_lineacierre(){
        
      $query = $this->db->query('call sp5_capitulo6intermedia_lineacierre();');
      $resultado = $query->result();
      $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
      $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
      return $resultado;   
   }

   public function fm_capitulo2intermedia_lineacierre(){
        
      $query = $this->db->query('call sp5_capitulo2intermedia_lineacierre();');
      $resultado = $query->result();
      $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
      $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
      return $resultado;   
   }

   public function fm_capitulo9intermedia_lineacierre(){
        
      $query = $this->db->query('call sp5_capitulo9intermedia_lineacierre();');
      $resultado = $query->result();
      $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
      $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
      return $resultado;   
   }

   public function fm_capitulo8intermedia_lineacierre(){
        
      $query = $this->db->query('call sp5_capitulo8intermedia_lineacierre();');
      $resultado = $query->result();
      $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
      $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
      return $resultado;   
   }

   public function fm_capitulo7intermedia_lineacierre(){
        
      $query = $this->db->query('call sp5_capitulo7intermedia_lineacierre();');
      $resultado = $query->result();
      $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
      $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
      return $resultado;   
   }

   public function fm_capitulo5intermedia_lineacierre(){
        
      $query = $this->db->query('call sp5_capitulo5intermedia_lineacierre();');
      $resultado = $query->result();
      $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
      $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
      return $resultado;   
   }

   public function fm_principalintegrantes_intermedialcv1(){
        
      $query = $this->db->query('call sp5_principalintegrantes_intermedialcv1();');
      $resultado = $query->result();
      $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
      $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
      return $resultado;   
   }
/////////////Fin modelos cierre///////////////

   ////////////////////////////////////////////////////////////////////////////////////////////////////////////////
     public function fm_sincrofin(){
        
        $query = $this->db->query('call spfinalizarsincro();');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;   
     }
     
     /////////////////////Finaliza Sincronizacion Arriba////////////////
     /////////////////////Inicia Sincronizacion Abajo//////////////////
     
     public function fm_reasignacionarriba($pdoccogestor){
        
        $query = $this->db->query('call sp3reasignacionarriba('.$pdoccogestor.');');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;   
     }
     public function fm_reasignacionabajo($pdoccogestor){
        
        $query = $this->db->query('call sp3reasignacionabajo('.$pdoccogestor.');');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;   
     }
     public function fm_sincronizacionabajo($folios){
      $this->db->replace('t_foliosincroabajo', $folios);
     }

     /////////Inicio modelos de bajada cierre//////////

     public function fm_ipmintermediaLCV1d($listarfiducias){
      $this->db->replace('t5_ipmintermediaLCV1', $listarfiducias);     
   }  

   public function fm_privacion16intermediaLCV1d($listarfiducias){
        
      $this->db->replace('t5_privacion16intermediaLCV1', $listarfiducias);   
   }  

   public function fm_privacion15intermediaLCV1d($listarfiducias){
        
      $this->db->replace('t5_privacion15intermediaLCV1', $listarfiducias);
   }  

   public function fm_privacion14intermediaLCV1d($listarfiducias){
        
      $this->db->replace('t5_privacion14intermediaLCV1', $listarfiducias);
   }  

   public function fm_privacion13intermediaLCV1d($listarfiducias){
        
      $this->db->replace('t5_privacion13intermediaLCV1', $listarfiducias);
   } 

   public function fm_privacion12intermediaLCV1d($listarfiducias){
        
      $this->db->replace('t5_privacion12intermediaLCV1', $listarfiducias);
   } 

   public function fm_privacion11intermediaLCV1d($listarfiducias){
        
      $this->db->replace('t5_privacion11intermediaLCV1', $listarfiducias);
   } 

   public function fm_privacion10intermediaLCV1d($listarfiducias){
        
      $this->db->replace('t5_privacion10intermediaLCV1', $listarfiducias);
   } 

   public function fm_privacion9intermediaLCV1d($listarfiducias){
        
      $this->db->replace('t5_privacion9intermediaLCV1', $listarfiducias);
   } 

   public function fm_privacion8intermediaLCV1d($listarfiducias){
        
      $this->db->replace('t5_privacion8intermediaLCV1', $listarfiducias);
   } 

   public function fm_privacion7intermediaLCV1d($listarfiducias){
        
      $this->db->replace('t5_privacion7intermediaLCV1', $listarfiducias);
   } 

   public function fm_privacion6intermediaLCV1d($listarfiducias){
        
      $this->db->replace('t5_privacion6intermediaLCV1', $listarfiducias);
   } 

   public function fm_privacion5intermediaLCV1d($listarfiducias){
        
      $this->db->replace('t5_privacion5intermediaLCV1', $listarfiducias);
   } 

   public function fm_privacion4intermediaLCV1d($listarfiducias){
        
      $this->db->replace('t5_privacion4intermediaLCV1', $listarfiducias);
   } 

   public function fm_privacion3intermediaLCV1d($listarfiducias){
        
      $this->db->replace('t5_privacion3intermediaLCV1', $listarfiducias);
   } 

   public function fm_privacion2intermediaLCV1d($listarfiducias){
        
      $this->db->replace('t5_privacion2intermediaLCV1', $listarfiducias);
   } 

   public function fm_privacion1intermediaLCV1d($listarfiducias){
        
      $this->db->replace('t5_privacion1intermediaLCV1', $listarfiducias);
   } 

   public function fm_capitulo11intermedia_lineacierred( $listarfiducias){ 
      $this->db->replace('t2_capitulo11intermedia_lineacierre', $listarfiducias);
   } 

   public function fm_capitulo6intermedia_lineacierred( $listarfiducias){  
      $this->db->replace('t2_capitulo6intermedia_lineacierre', $listarfiducias);
   } 
   
   public function fm_capitulo2intermedia_lineacierred( $listarfiducias){ 
      $this->db->replace('t2_capitulo2intermedia_lineacierre', $listarfiducias);
   } 

   public function fm_capitulo9intermedia_lineacierred( $listarfiducias){ 
      $this->db->replace('t2_capitulo9intermedia_lineacierre', $listarfiducias);
   } 

   public function fm_capitulo8intermedia_lineacierred( $listarfiducias){  
      $this->db->replace('t2_capitulo8intermedia_lineacierre', $listarfiducias);
   }
   
   public function fm_capitulo7intermedia_lineacierred( $listarfiducias){ 
      $this->db->replace('t2_capitulo7intermedia_lineacierre', $listarfiducias);
   }

   public function fm_capitulo5intermedia_lineacierred( $listarfiducias){ 
      $this->db->replace('t2_capitulo5intermedia_lineacierre', $listarfiducias);
   }

   public function fm_principalintegrantes_intermedialcv1d( $listarfiducias){  
      $this->db->replace('t1_principalintegrantes_intermedialcv1', $listarfiducias);

   }
   public function fm_sincronizaactualizacionppd( $listarfiducias){ 
      $this->db->replace('t_actualizacionpp', $listarfiducias);
 
   }

//////////////////Fin modelos de bajada cierre////////////////

     public function fm_sincronizacionintegrantesd( $listarfiducias){ 
      $this->db->replace('t1_principalintegrantes', $listarfiducias);

     }
     public function fm_sincronizacionhogard( $listarfiducias){ 
      $this->db->replace('t1_principalhogar', $listarfiducias);
  
     }
     public function fm_capitulo2d($listarfiducias){
         $this->db->replace('t2_capitulo2', $listarfiducias);
     }
     public function fm_capitulo3d($listarfiducias){
      $this->db->replace('t2_capitulo3', $listarfiducias);
     }
     public function fm_capitulo6d($listarfiducias){   
      $this->db->replace('t2_capitulo6', $listarfiducias);
     }
     public function fm_capitulo11d($listarfiducias){
      $this->db->replace('t2_capitulo11', $listarfiducias); 
     }
     public function fm_capitulo4id($listarfiducias){
      $this->db->replace('t2_capitulo4', $listarfiducias);
     }
     public function fm_capitulo5id($listarfiducias){
      $this->db->replace('t2_capitulo5', $listarfiducias);
     }
     public function fm_capitulo7id($listarfiducias){
      $this->db->replace('t2_capitulo7', $listarfiducias);
      }     
     public function fm_capitulo8id($listarfiducias){
      $this->db->replace('t2_capitulo8', $listarfiducias);
      }    
     public function fm_capitulo9id($listarfiducias){
      $this->db->replace('t2_capitulo9', $listarfiducias);
      }   
      public function fm_capitulo10id($listarfiducias){
      $this->db->replace('t2_capitulo10', $listarfiducias) ;  
      }  
      public function fm_capitulo11id($listarfiducias){    
      $this->db->replace('t2_capitulo11_integrante', $listarfiducias);  
      }
      public function fm_capitulo12id($listarfiducias){
      $this->db->replace('t2_capitulo12', $listarfiducias);
      }
       public function fm_pphogard($listarfiducias){
         $this->db->replace('t2_ppcapitulo1hogar', $listarfiducias);
     }
      public function fm_ppcap1d($listarfiducias){
         $this->db->replace('t2_ppcapitulo1', $listarfiducias);
     }
      public function fm_ppcap2d($listarfiducias){
         $this->db->replace('t2_ppcapitulo2', $listarfiducias);
     }
      public function fm_ppcap3d($listarfiducias){
         $this->db->replace('t2_ppcapitulo3', $listarfiducias);
     }
      public function fm_ppcap4d($listarfiducias){   //
         $this->db->replace('t2_ppcapitulo4', $listarfiducias);
     }
      public function fm_ppacademicad($listarfiducias){
         $this->db->replace('t2_ppformacionacademica', $listarfiducias);
     }
      public function fm_ppoestudiosd($listarfiducias){
         $this->db->replace('t2_ppotrosestudios', $listarfiducias);
     }
      public function fm_ppexpd($listarfiducias){
         $this->db->replace('t_experiencia_laboral', $listarfiducias);
     }
      public function fm_pasosestadod($listarfiducias){
         $this->db->replace('t_protocolopasosestado', $listarfiducias);
     }
      public function fm_actualizaciond(){
         $this->db->replace('t2_actualizacion', $listarfiducias);
     }
      public function fm_fconlogrosd($listarfiducias){
         $this->db->replace('t5_foliosconlogros', $listarfiducias);
     }
      public function fm_capacidadesd($listarfiducias){
         $this->db->replace('t2_capacidades', $listarfiducias);
     }
      public function fm_estacionestadod($listarfiducias){
         $this->db->replace('t_protocoloestacionestado', $listarfiducias);
     }
     public function fm_sincroc1p1ap12d($listarfiducias){
      $this->db->replace('t_c1p1ap12', $listarfiducias);
     }
     public function fm_sincrocapitulo1l2e1d($listarfiducias){  
      $this->db->replace('t2_capitulo1linea2estacion1', $listarfiducias);
     }
     public function fm_sincrolinea2e1cualidadeshd($listarfiducias){
      $this->db->replace('t2_linea2estacion1cualidadeshogar', $listarfiducias);
     }
     public function fm_sincrolinea2e1cualidadesid($listarfiducias){
      $this->db->replace('t2_linea2estacion1cualidadesintegrantes', $listarfiducias);
     }
     /////////////////////////////////////sincronizacion logros/////////////////////////////
    
    public function fm_sincrologro1d($listarfiducias){
      $this->db->replace('t4_logro1', $listarfiducias);
     }
     public function fm_sincrologro2d($listarfiducias){
      $this->db->replace('t4_logro2', $listarfiducias);
     }
     public function fm_sincrologro3d($listarfiducias){
        
      $this->db->replace('t4_logro3', $listarfiducias);  
     }
     public function fm_sincrologro4d($listarfiducias){
        
      $this->db->replace('t4_logro4', $listarfiducias);  
     }
     public function fm_sincrologro5d($listarfiducias){
        
      $this->db->replace('t4_logro5', $listarfiducias);  
     }
     public function fm_sincrologro6d($listarfiducias){
        
      $this->db->replace('t4_logro6', $listarfiducias);
     }
     public function fm_sincrologro7d($listarfiducias){
        
      $this->db->replace('t4_logro7', $listarfiducias);
     }
     public function fm_sincrologro8d($listarfiducias){
        
      $this->db->replace('t4_logro8', $listarfiducias); 
     }
     public function fm_sincrologro9d($listarfiducias){
        
      $this->db->replace('t4_logro9', $listarfiducias);   
     }
     public function fm_sincrologro10d($listarfiducias){
        
      $this->db->replace('t4_logro10', $listarfiducias); 
     }
     public function fm_sincrologro11d($listarfiducias){
        
      $this->db->replace('t4_logro11', $listarfiducias);  
     }
     public function fm_sincrologro12d($listarfiducias){
        
      $this->db->replace('t4_logro12', $listarfiducias); 
     }
     public function fm_sincrologro13d($listarfiducias){
        
      $this->db->replace('t4_logro13', $listarfiducias); 
     }
     public function fm_sincrologro14d($listarfiducias){
        
      $this->db->replace('t4_logro14', $listarfiducias);
     }
     public function fm_sincrologro15d($listarfiducias){
        
      $this->db->replace('t4_logro15', $listarfiducias);
     }
     public function fm_sincrologro16d($listarfiducias){
        
      $this->db->replace('t4_logro16', $listarfiducias);  
     }
     public function fm_sincrologro17d($listarfiducias){
        
      $this->db->replace('t4_logro17', $listarfiducias);  
     }
     public function fm_sincrologro18d($listarfiducias){
        
      $this->db->replace('t4_logro18', $listarfiducias);   
     }
     public function fm_sincrologro19d($listarfiducias){
        
      $this->db->replace('t4_logro19', $listarfiducias); 
     }
     public function fm_sincrologro20d($listarfiducias){
        
      $this->db->replace('t4_logro20', $listarfiducias);  
     }
     public function fm_sincrologro21d($listarfiducias){
        
      $this->db->replace('t4_logro21', $listarfiducias);
     }
     public function fm_sincrologro22d($listarfiducias){
        
      $this->db->replace('t4_logro22', $listarfiducias);  
     }
     public function fm_sincrologro23d($listarfiducias){
        
      $this->db->replace('t4_logro23', $listarfiducias);
     }
     public function fm_sincrologro24d($listarfiducias){
        
      $this->db->replace('t4_logro24', $listarfiducias);
     }
     public function fm_sincrologro25d($listarfiducias){
        
      $this->db->replace('t4_logro25', $listarfiducias);   
     }
     public function fm_sincrologro26d($listarfiducias){
        
      $this->db->replace('t4_logro26', $listarfiducias);
     }
     public function fm_sincrologro27d($listarfiducias){
        
      $this->db->replace('t4_logro27', $listarfiducias);
     }
     public function fm_sincrologro28d($listarfiducias){
        
      $this->db->replace('t4_logro28', $listarfiducias); 
     }
     public function fm_sincrologro29d($listarfiducias){
        
      $this->db->replace('t4_logro29', $listarfiducias);  
     }
     public function fm_sincrologro30d($listarfiducias){
        
      $this->db->replace('t4_logro30', $listarfiducias);
     }
     public function fm_sincrologro31d($listarfiducias){
        
      $this->db->replace('t4_logro31', $listarfiducias);
     }
     public function fm_sincrologro32d($listarfiducias){
        
      $this->db->replace('t4_logro32', $listarfiducias); 
     }
     public function fm_sincrologro33d($listarfiducias){
        
      $this->db->replace('t4_logro33', $listarfiducias);   
     }
     public function fm_sincrologro34d($listarfiducias){
        
      $this->db->replace('t4_logro34', $listarfiducias);  
     }
     public function fm_sincrologro35d($listarfiducias){
        
      $this->db->replace('t4_logro35', $listarfiducias);  
     }
     public function fm_sincrologro36d($listarfiducias){
        
      $this->db->replace('t4_logro36', $listarfiducias);
     }
     public function fm_sincrologro37d($listarfiducias){
        
      $this->db->replace('t4_logro37', $listarfiducias);
     }
     public function fm_sincrologro38d($listarfiducias){
        
      $this->db->replace('t4_logro38', $listarfiducias); 
     }
     public function fm_sincrologro39d($listarfiducias){
        
      $this->db->replace('t4_logro39', $listarfiducias);
     }
     public function fm_sincrologro40d($listarfiducias){
        
      $this->db->replace('t4_logro40', $listarfiducias);   
     }
     public function fm_sincrologro41d($listarfiducias){

      $this->db->replace('t4_logro41', $listarfiducias);
     }
     public function fm_hmovlogd( $listarfiducias){
    //  $this->db->replace('t4_historicomovimientolog', $listarfiducias);      
     }
     public function fm_movlog10d( $listarfiducias){
    //  $this->db->replace('t4_logromovimientolog10preguntvalid', $listarfiducias);      
     }
     public function fm_movlog18d( $listarfiducias){
    //  $this->db->replace('t4_logromovimientolog18preguntvalid', $listarfiducias);      
     }
     public function fm_movlog24d( $listarfiducias){
    //  $this->db->replace('t4_logromovimientolog24preguntvalid', $listarfiducias);      
     }
     public function fm_movlog33d( $listarfiducias){
    //  $this->db->replace('t4_logromovimientolog33preguntvalid', $listarfiducias);      
     }
     public function fm_movlog34d( $listarfiducias){
    //  $this->db->replace('t4_logromovimientolog34preguntvalid', $listarfiducias);      
     }
     public function fm_movlog39d( $listarfiducias){
    //  $this->db->replace('t4_logromovimientolog39preguntvalid', $listarfiducias);      
     }
     public function fm_logromovimientocgsd( $listarfiducias){
     // $this->db->replace('t4_logromovimientoscogestor', $listarfiducias);      
     }
      public function fm_l2e2suenod(){
        
        $query = $this->db->query('call spsincronizarl2e2suenod();');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;   
     }
     public function fm_l2e2suenoaccionesd(){
        
        $query = $this->db->query('call spsincronizarl2e2suenoaccionesd();');
        $resultado = $query->result();
        $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;   
     }
     
     public function fm_sincroipmd( $listarfiducias){
      $this->db->replace('t5_ipm', $listarfiducias);      
     }
     
     
     
     public function fm_logroblancod(){
        
       // $query = $this->db->query('call spsincrohistoricologroblancod();');
       // $resultado = $query->result();
       // $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        //$query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
       // return $resultado;   
     }
       
     public function fm_logmovrec10d($listarfiducias){
     //  $this->db->replace('t4_logromovimientorecalculolog10', $listarfiducias);           
     }
     public function fm_logmovrec11d($listarfiducias){
     //  $this->db->replace('t4_logromovimientorecalculolog11', $listarfiducias);      
     }
     public function fm_logmovrec12d($listarfiducias){
    //   $this->db->replace('t4_logromovimientorecalculolog12', $listarfiducias);     
     }
     public function fm_logmovrec13d($listarfiducias){
    //  $this->db->replace('t4_logromovimientorecalculolog13', $listarfiducias);     
     }
     public function fm_logmovrec2d( $listarfiducias){
   //   $this->db->replace('t4_logromovimientorecalculolog2', $listarfiducias);      
     }
     public function fm_logmovrec22d( $listarfiducias){
    //    $this->db->replace('t4_logromovimientorecalculolog22', $listarfiducias);     
     }
     public function fm_logmovrec23d( $listarfiducias){ 
    //  $this->db->replace('t4_logromovimientorecalculolog23', $listarfiducias);     
     }
     public function fm_logmovrec3d( $listarfiducias){
    //   $this->db->replace('t4_logromovimientorecalculolog3', $listarfiducias);      
     }
     public function fm_logmovrec5d( $listarfiducias){
    //   $this->db->replace('t4_logromovimientorecalculolog5', $listarfiducias);      
     }
     public function fm_logmovrec7d( $listarfiducias){
    //   $this->db->replace('t4_logromovimientorecalculolog7', $listarfiducias);     
     }
     public function fm_logmovrec8d( $listarfiducias){
    //  $this->db->replace('t4_logromovimientorecalculolog8', $listarfiducias);     
     }
     public function fm_logmovrec9d( $listarfiducias){
    //  $this->db->replace('t4_logromovimientorecalculolog9', $listarfiducias);     
     }
     
   
    ////////////////////////////////////Sincronizacion privaciones/////////////////////////////
     
      public function fm_sincroprivacion1d($listarfiducias){
        
         $this->db->replace('t5_privacion1', $listarfiducias);
     }
     public function fm_sincroprivacion2d($listarfiducias){
        
         $this->db->replace('t5_privacion2', $listarfiducias);
     }
     public function fm_sincroprivacion3d($listarfiducias){
        
      $this->db->replace('t5_privacion3', $listarfiducias);
     }
     public function fm_sincroprivacion4d($listarfiducias){
        
      $this->db->replace('t5_privacion4', $listarfiducias);
     }
     public function fm_sincroprivacion5d($listarfiducias){
        
      $this->db->replace('t5_privacion5', $listarfiducias);
     }
     public function fm_sincroprivacion6d($listarfiducias){
        
      $this->db->replace('t5_privacion6', $listarfiducias);
     }
     public function fm_sincroprivacion7d($listarfiducias){
        
      $this->db->replace('t5_privacion7', $listarfiducias);
     }
     public function fm_sincroprivacion8d($listarfiducias){
        
      $this->db->replace('t5_privacion8', $listarfiducias);
     }
     public function fm_sincroprivacion9d($listarfiducias){
        
      $this->db->replace('t5_privacion9', $listarfiducias);
     }
     public function fm_sincroprivacion10d($listarfiducias){
        
      $this->db->replace('t5_privacion10', $listarfiducias);
     }
     public function fm_sincroprivacion11d($listarfiducias){
        
      $this->db->replace('t5_privacion11', $listarfiducias);
     }
     public function fm_sincroprivacion12d($listarfiducias){
        
      $this->db->replace('t5_privacion12', $listarfiducias);
     }
     public function fm_sincroprivacion13d($listarfiducias){
        
      $this->db->replace('t5_privacion13', $listarfiducias);
     }
     public function fm_sincroprivacion14d($listarfiducias){
        
      $this->db->replace('t5_privacion14', $listarfiducias);
     }
     public function fm_sincroprivacion15d($listarfiducias){
        
      $this->db->replace('t5_privacion15', $listarfiducias);
     }
     public function fm_sincroprivacion16d($listarfiducias){
        
      $this->db->replace('t5_privacion16', $listarfiducias);
     }
     
     public function fm_borrarinactivos(){
        
      //   $query = $this->db->query('call sp3eliminarinactivos();');
      //   $resultado = $query->result();
      //   $query->next_result(); //NO SE TOCAN Estas dos funciones permiten realizar varias consultas en el mismo controlador.
      //   $query->free_result(); //NO SE TOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
      //   return $resultado;   
     }
    
   /////////////////////Inicia Sincronizacion Estacion Cero////////////////
     public function fm_hfprocedenciad($listarfiducias){
      $this->db->replace('t6_hfprocedencia ', $listarfiducias);
     }
     public function fm_hflogrosd($listarfiducias){
      $this->db->replace('t6_hflogros', $listarfiducias);
     }
     public function fm_hfcostumbresd($listarfiducias){
      $this->db->replace('t6_hfcostumbres', $listarfiducias);
     }
     public function fm_hfconformaciond($listarfiducias){
      $this->db->replace('t6_hfconformacion', $listarfiducias);
     }
     public function fm_facttscual1d($listarfiducias){
      $this->db->replace('t6_facttscual1', $listarfiducias);
     }
     public function fm_facttfcual1d($listarfiducias){
         $this->db->replace('t6_facttfcual1', $listarfiducias);
     }
     public function fm_facttecual1d($listarfiducias){
      $this->db->replace('t6_facttecual1', $listarfiducias);
     }
     public function fm_factiscual1d($listarfiducias){
      $this->db->replace('t6_factiscual1 ', $listarfiducias);
     }
     public function fm_factifcual1d($listarfiducias){
      $this->db->replace('t6_factifcual1', $listarfiducias);
     }
     public function fm_factiecual1d($listarfiducias){
      $this->db->replace('t6_factiecual1', $listarfiducias);
     }
     public function fm_estacioncerocead($listarfiducias){ 
      $this->db->replace('t6_estacioncerocea', $listarfiducias);
     }
     public function fm_crisisscual1d($listarfiducias){
      $this->db->replace('t6_crisisscual1', $listarfiducias);
     }
     public function fm_crisisfcual1d($listarfiducias){ 
      $this->db->replace('t6_crisisfcual1', $listarfiducias);
     }
     public function fm_crisisecual1d($listarfiducias){ 
      $this->db->replace('t6_crisisecual1', $listarfiducias);
     }
     public function fm_crearmetasd($listarfiducias){ 
      $this->db->replace('t6_crearmetas', $listarfiducias);
     }
     public function fm_correspautonomiad($listarfiducias){ 
       $this->db->replace('t6_correspautonomia', $listarfiducias);
     }
     public function fm_eerfd($listarfiducias){
        $this->db->replace('t_eerf', $listarfiducias); 
     }
      public function fm_avanceprocesod($listarfiducias){
         $this->db->replace('t6_avance_procesoac', $listarfiducias);    
     }
      public function fm_l2metasd($listarfiducias){ 
        $this->db->replace('t2_linea2metas', $listarfiducias); 
     }
      public function fm_l2accionesd($listarfiducias){ 
        $this->db->replace('t2_linea2accionesmeta', $listarfiducias); 
     }
      public function fm_casoexitosod($listarfiducias){ 
        $this->db->replace('t2_casoexitoso', $listarfiducias); 
     }
      public function fm_correspautonomiahistoricod($listarfiducias){ 
        $this->db->replace('t6_correspautonomiahistorico', $listarfiducias); 
     }
     /////////////////////Fin Sincronizacion Estacion Cero////////////////
     public function fm_logromovimientocfd($listarfiducias){ 
      //  $this->db->replace('t4_logromovimientoscogestorcf', $listarfiducias); 
     }
     
      public function fm_protocoloinicioestaciond( $listarfiducias){
         $this->db->replace('t_protocoloinicioestacion', $listarfiducias);    
     }
     
      public function fm_condicionnecesariad($listarfiducias){ 
        $this->db->replace('t2_condicionnecesaria', $listarfiducias); 

     }
     
     public function fm_movlogsisbend($listarfiducias) {
      $this->db->replace('t_oportunidad_integrantehistorico_sisben', $listarfiducias); 
  
      // Suponiendo que estás utilizando el patrón de registro activo de CodeIgniter
     // $query = $this->db->query('CALL sp4cursormovimientologxoportsisben()');
      
      // Suponiendo que deseas obtener el resultado de la consulta
     // $resultado = $query->result();
  
      // NO SE TOCAN: Estas dos funciones permiten ejecutar varias consultas en el mismo controlador.
    //  $query->next_result();
    //  $query->free_result();
  
    //  return $resultado;   
  }


  public function fm_madresadolecentesd($listarfiducias) {
   $this->db->replace('t11_madres_adolecentes', $listarfiducias); 
}

public function fm_principalintegrantes_intermediad($listarfiducias) {
   $this->db->replace('t1_principalintegrantes_intermedia', $listarfiducias); 
}
       
}      