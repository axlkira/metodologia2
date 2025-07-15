<?php

class M_sincroarriba extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    
    
    public function fm_cursorlogroblanco(){
        
        $query = $this->db->query('call sp4cursorlogroblanco();');
        $resultado = $query->result();
        $query->next_result(); 
        $query->free_result(); //NO SE dTOCAN  Estas dos funciones permiten realizar varias consultas en el mismo controlador.
        return $resultado;   
     }
    
     public function fm_cursorcambiarestadosesioncierre(){
        
        $query = $this->db->query('call sp4cursorcambiarestadosesioncierre();');
        $resultado = $query->result();
        $query->next_result(); 
        $query->free_result(); 
        return $resultado;   
     }
     public function fm_sincrocap2(){
        
        $query = $this->db->query('call sp3sincronizacioncapitulo2();');
        $resultado = $query->result();
        $query->next_result(); 
        $query->free_result(); 
        return $resultado;   
     }
     
     
     
     public function fm_sincrocap3(){
        
        $query = $this->db->query('call sp3sincronizacioncapitulo3();');
        $resultado = $query->result();
        $query->next_result(); 
        $query->free_result(); 
        return $resultado;   
     }
     
     public function fm_sincrocap6(){
        
        $query = $this->db->query('call sp3sincronizacioncapitulo6();');
        $resultado = $query->result();
        $query->next_result(); 
        $query->free_result(); 
        return $resultado;   
     }
     
     public function fm_sincrocap11(){
        
        $query = $this->db->query('call sp3sincronizacioncapitulo11();');
        $resultado = $query->result();
        $query->next_result(); 
        $query->free_result(); 
        return $resultado;   
     }
     
     public function fm_sincrocap4i(){
        
        $query = $this->db->query('call sp3sincronizacioncapitulo4i();');
        $resultado = $query->result();
        $query->next_result(); 
        $query->free_result(); 
        return $resultado;   
     }
     
     public function fm_sincrocap5i(){
        
        $query = $this->db->query('call sp3sincronizacioncapitulo5i();');
        $resultado = $query->result();
        $query->next_result(); 
        $query->free_result(); 
        return $resultado;   
     }
     
     public function fm_sincrocap7i(){
        
        $query = $this->db->query('call sp3sincronizacioncapitulo7i();');
        $resultado = $query->result();
        $query->next_result(); 
        $query->free_result(); 
        return $resultado;   
     }
     
     public function fm_sincrocap8i(){
        
        $query = $this->db->query('call sp3sincronizacioncapitulo8i();');
        $resultado = $query->result();
        $query->next_result(); 
        $query->free_result(); 
        return $resultado;   
     }
     
     public function fm_sincrocap9i(){
        
        $query = $this->db->query('call sp3sincronizacioncapitulo9i();');
        $resultado = $query->result();
        $query->next_result(); 
        $query->free_result(); 
        return $resultado;   
     }
     
     public function fm_sincrocap10i(){
        
        $query = $this->db->query('call sp3sincronizacioncapitulo10i();');
        $resultado = $query->result();
        $query->next_result(); 
        $query->free_result(); 
        return $resultado;   
     }
     
     public function fm_sincrocap11i(){
        
        $query = $this->db->query('call sp3sincronizacioncapitulo11i();');
        $resultado = $query->result();
        $query->next_result(); 
        $query->free_result(); 
        return $resultado;   
     }
    
      public function fm_sincrocap12i(){
        
        $query = $this->db->query('call sp3sincronizacioncapitulo12i();');
        $resultado = $query->result();
        $query->next_result(); 
        $query->free_result(); 
        return $resultado;   
     }
     
     ////////////////////////////////////Sincronizacion perfil productivo//////////////////
     
     public function fm_sincropph(){
        
        $query = $this->db->query('call spsincronizarppcapitulo1hogar();');
        $resultado = $query->result();
        $query->next_result(); 
        $query->free_result(); 
        return $resultado;   
     }
     
     public function fm_sincroppcap1(){
        
        $query = $this->db->query('call spsincronizarppcapitulo1();');
        $resultado = $query->result();
        $query->next_result(); 
        $query->free_result(); 
        return $resultado;   
     }
     
     public function fm_sincroppcap2(){
        
        $query = $this->db->query('call spsincronizarppcapitulo2();');
        $resultado = $query->result();
        $query->next_result(); 
        $query->free_result(); 
        return $resultado;   
     }
     
     public function fm_sincroppcap3(){
        
        $query = $this->db->query('call spsincronizarppcapitulo3();');
        $resultado = $query->result();
        $query->next_result(); 
        $query->free_result(); 
        return $resultado;   
     }
     
     public function fm_sincroppcap4(){
        
        $query = $this->db->query('call spsincronizarppcapitulo4();');
        $resultado = $query->result();
        $query->next_result(); 
        $query->free_result(); 
        return $resultado;   
     }
     
     public function fm_sincroppfac(){
        
        $query = $this->db->query('call spsincronizarformacionacademica();');
        $resultado = $query->result();
        $query->next_result(); 
        $query->free_result(); 
        return $resultado;   
     }
     
     public function fm_sincroppoes(){
        
        $query = $this->db->query('call spsincronizarppotrosestudios();');
        $resultado = $query->result();
        $query->next_result(); 
        $query->free_result(); 
        return $resultado;   
     }
     public function fm_sincroppexp(){
        
        $query = $this->db->query('call spsincronizarppexperiencialaboral();');
        $resultado = $query->result();
        $query->next_result(); 
        $query->free_result(); 
        return $resultado;   
     }
    
    /////////////////////////////////////sincronizacion logros/////////////////////////////
    
    public function fm_sincrologro1(){
        
        $query = $this->db->query('call sp4logro1servidor();');
        $resultado = $query->result();
        $query->next_result(); 
        $query->free_result(); 
        return $resultado;   
     }
     public function fm_sincrologro2(){
        
        $query = $this->db->query('call sp4logro2servidor();');
        $resultado = $query->result();
        $query->next_result(); 
        $query->free_result(); 
        return $resultado;   
     }
     public function fm_sincrologro3(){
        
        $query = $this->db->query('call sp4logro3servidor();');
        $resultado = $query->result();
        $query->next_result(); 
        $query->free_result(); 
        return $resultado;   
     }
     public function fm_sincrologro4(){
        
        $query = $this->db->query('call sp4logro4servidor();');
        $resultado = $query->result();
        $query->next_result(); 
        $query->free_result(); 
        return $resultado;   
     }
     public function fm_sincrologro5(){
        
        $query = $this->db->query('call sp4logro5servidor();');
        $resultado = $query->result();
        $query->next_result(); 
        $query->free_result(); 
        return $resultado;   
     }
     public function fm_sincrologro6(){
        
        $query = $this->db->query('call sp4logro6servidor();');
        $resultado = $query->result();
        $query->next_result(); 
        $query->free_result(); 
        return $resultado;   
     }
     public function fm_sincrologro7(){
        
        $query = $this->db->query('call sp4logro7servidor();');
        $resultado = $query->result();
        $query->next_result(); 
        $query->free_result(); 
        return $resultado;   
     }
     public function fm_sincrologro8(){
        
        $query = $this->db->query('call sp4logro8servidor();');
        $resultado = $query->result();
        $query->next_result(); 
        $query->free_result(); 
        return $resultado;   
     }
     public function fm_sincrologro9(){
        
        $query = $this->db->query('call sp4logro9servidor();');
        $resultado = $query->result();
        $query->next_result(); 
        $query->free_result(); 
        return $resultado;   
     }
     public function fm_sincrologro10(){
        
        $query = $this->db->query('call sp4logro10servidor();');
        $resultado = $query->result();
        $query->next_result(); 
        $query->free_result(); 
        return $resultado;   
     }
     public function fm_sincrologro11(){
        
        $query = $this->db->query('call sp4logro11servidor();');
        $resultado = $query->result();
        $query->next_result(); 
        $query->free_result(); 
        return $resultado;   
     }
     public function fm_sincrologro12(){
        
        $query = $this->db->query('call sp4logro12servidor();');
        $resultado = $query->result();
        $query->next_result(); 
        $query->free_result(); 
        return $resultado;   
     }
     public function fm_sincrologro13(){
        
        $query = $this->db->query('call sp4logro13servidor();');
        $resultado = $query->result();
        $query->next_result(); 
        $query->free_result(); 
        return $resultado;   
     }
     public function fm_sincrologro14(){
        
        $query = $this->db->query('call sp4logro14servidor();');
        $resultado = $query->result();
        $query->next_result(); 
        $query->free_result(); 
        return $resultado;   
     }
     public function fm_sincrologro15(){
        
        $query = $this->db->query('call sp4logro15servidor();');
        $resultado = $query->result();
        $query->next_result(); 
        $query->free_result(); 
        return $resultado;   
     }
     public function fm_sincrologro16(){
        
        $query = $this->db->query('call sp4logro16servidor();');
        $resultado = $query->result();
        $query->next_result(); 
        $query->free_result(); 
        return $resultado;   
     }
     public function fm_sincrologro17(){
        
        $query = $this->db->query('call sp4logro17servidor();');
        $resultado = $query->result();
        $query->next_result(); 
        $query->free_result(); 
        return $resultado;   
     }
     public function fm_sincrologro18(){
        
        $query = $this->db->query('call sp4logro18servidor();');
        $resultado = $query->result();
        $query->next_result(); 
        $query->free_result(); 
        return $resultado;   
     }
     public function fm_sincrologro19(){
        
        $query = $this->db->query('call sp4logro19servidor();');
        $resultado = $query->result();
        $query->next_result(); 
        $query->free_result(); 
        return $resultado;   
     }
     public function fm_sincrologro20(){
        
        $query = $this->db->query('call sp4logro20servidor();');
        $resultado = $query->result();
        $query->next_result(); 
        $query->free_result(); 
        return $resultado;   
     }
     public function fm_sincrologro21(){
        
        $query = $this->db->query('call sp4logro21servidor();');
        $resultado = $query->result();
        $query->next_result(); 
        $query->free_result(); 
        return $resultado;   
     }
     public function fm_sincrologro22(){
        
        $query = $this->db->query('call sp4logro22servidor();');
        $resultado = $query->result();
        $query->next_result(); 
        $query->free_result(); 
        return $resultado;   
     }
     public function fm_sincrologro23(){
        
        $query = $this->db->query('call sp4logro23servidor();');
        $resultado = $query->result();
        $query->next_result(); 
        $query->free_result(); 
        return $resultado;   
     }
     public function fm_sincrologro24(){
        
        $query = $this->db->query('call sp4logro24servidor();');
        $resultado = $query->result();
        $query->next_result(); 
        $query->free_result(); 
        return $resultado;   
     }
     public function fm_sincrologro25(){
        
        $query = $this->db->query('call sp4logro25servidor();');
        $resultado = $query->result();
        $query->next_result(); 
        $query->free_result(); 
        return $resultado;   
     }
     public function fm_sincrologro26(){
        
        $query = $this->db->query('call sp4logro26servidor();');
        $resultado = $query->result();
        $query->next_result(); 
        $query->free_result(); 
        return $resultado;   
     }
     public function fm_sincrologro27(){
        
        $query = $this->db->query('call sp4logro27servidor();');
        $resultado = $query->result();
        $query->next_result(); 
        $query->free_result(); 
        return $resultado;   
     }
     public function fm_sincrologro28(){
        
        $query = $this->db->query('call sp4logro28servidor();');
        $resultado = $query->result();
        $query->next_result(); 
        $query->free_result(); 
        return $resultado;   
     }
     public function fm_sincrologro29(){
        
        $query = $this->db->query('call sp4logro29servidor();');
        $resultado = $query->result();
        $query->next_result(); 
        $query->free_result(); 
        return $resultado;   
     }
     public function fm_sincrologro30(){
        
        $query = $this->db->query('call sp4logro30servidor();');
        $resultado = $query->result();
        $query->next_result(); 
        $query->free_result(); 
        return $resultado;   
     }
     public function fm_sincrologro31(){
        
        $query = $this->db->query('call sp4logro31servidor();');
        $resultado = $query->result();
        $query->next_result(); 
        $query->free_result(); 
        return $resultado;   
     }
     public function fm_sincrologro32(){
        
        $query = $this->db->query('call sp4logro32servidor();');
        $resultado = $query->result();
        $query->next_result(); 
        $query->free_result(); 
        return $resultado;   
     }
     public function fm_sincrologro33(){
        
        $query = $this->db->query('call sp4logro33servidor();');
        $resultado = $query->result();
        $query->next_result(); 
        $query->free_result(); 
        return $resultado;   
     }
     public function fm_sincrologro34(){
        
        $query = $this->db->query('call sp4logro34servidor();');
        $resultado = $query->result();
        $query->next_result(); 
        $query->free_result(); 
        return $resultado;   
     }
     public function fm_sincrologro35(){
        
        $query = $this->db->query('call sp4logro35servidor();');
        $resultado = $query->result();
        $query->next_result(); 
        $query->free_result(); 
        return $resultado;   
     }
     public function fm_sincrologro36(){
        
        $query = $this->db->query('call sp4logro36servidor();');
        $resultado = $query->result();
        $query->next_result(); 
        $query->free_result(); 
        return $resultado;   
     }
     public function fm_sincrologro37(){
        
        $query = $this->db->query('call sp4logro37servidor();');
        $resultado = $query->result();
        $query->next_result(); 
        $query->free_result(); 
        return $resultado;   
     }
     public function fm_sincrologro38(){
        
        $query = $this->db->query('call sp4logro38servidor();');
        $resultado = $query->result();
        $query->next_result(); 
        $query->free_result(); 
        return $resultado;   
     }
     public function fm_sincrologro39(){
        
        $query = $this->db->query('call sp4logro39servidor();');
        $resultado = $query->result();
        $query->next_result(); 
        $query->free_result(); 
        return $resultado;   
     }
     public function fm_sincrologro40(){
        
        $query = $this->db->query('call sp4logro40servidor();');
        $resultado = $query->result();
        $query->next_result(); 
        $query->free_result(); 
        return $resultado;   
     }
     public function fm_sincrologro41(){
        
        $query = $this->db->query('call sp4logro41servidor();');
        $resultado = $query->result();
        $query->next_result(); 
        $query->free_result(); 
        return $resultado;   
     }
     public function fm_hmovlog(){
        
        $query = $this->db->query('SELECT folio, idintegrante, idlogro, colorlogroDI, colorlogroPF, doccogestor, fecharegistroPF, movidox, 1 as sincronizado, now() as fechasincro FROM bdprotocolo.t4_historicomovimientolog where sincronizado = 0; ;');
        $resultado = $query->result();
        $query->next_result(); 
        $query->free_result(); 
        return $resultado;   
     }
 
     public function fm_hmovlogok() {
      $query = $this->db->query('call spsubidamovimientoslogros();');
      $resultado = $query->result();
      $query->next_result(); 
      $query->free_result(); 
      return $resultado;   
  }
  
     public function fm_movlog10(){ $query = $this->db->query('SELECT idmovimiento, folio, idintegrante, iddimension, idlogro, c9p37o1, c9p37o2, c9p37o3, c9p37o4, c9p37o5, c9p37o6, c9p37o7, c9p37o8, c9p37o9, c9p37o10, c9p37o11, c9p37cual, c9p39o1, c9p39o2, c9p39o3, c9p39o4, c9p39o5, c9p39o6, c9p39o7, c9p39o8, c9p39cual, c9p40, c9p3, c9p3cual, c9p4, c9p19, edad, colorlogroPF, doccogestor, fechacreacion, 1 as sincro, now() as fechasincro FROM t4_logromovimientolog10preguntvalid where sincro = 0;');$resultado = $query->result();$query->next_result(); $query->free_result(); return $resultado;   }
     public function fm_movlog10ok(){ $query = $this->db->query('call spsubidamovlogro10();');$resultado = $query->result();$query->next_result(); $query->free_result(); return $resultado;    }
     public function fm_movlog18(){ $query = $this->db->query('SELECT idmovimiento, folio, idintegrante, iddimension, idlogro, c5p5o1, c5p5o2, c5p5o3, c5p5o4, c5p5o5, c5p5o6, c5p5o7, c5p5o9, c5p5o10, c5p5o11, c5p5o13, colorlogroPF, doccogestor, fechacreacion, 1 as sincro, now() as fechasincro FROM t4_logromovimientolog18preguntvalid where sincro = 0;');$resultado = $query->result();$query->next_result(); $query->free_result(); return $resultado;   }
     public function fm_movlog18ok(){ $query = $this->db->query('call spsubidamovlogro18();');$resultado = $query->result();$query->next_result(); $query->free_result(); return $resultado;    }
     public function fm_movlog24(){ $query = $this->db->query('SELECT idmovimiento, folio, idintegrante, iddimension, idlogro, c6p2, c6p3, c6p5, c6p9, colorlogroPF, doccogestor, fechacreacion, 1 as sincro, now() as fechasincro FROM t4_logromovimientolog24preguntvalid where sincro = 0;');$resultado = $query->result();$query->next_result(); $query->free_result(); return $resultado;   }
     public function fm_movlog24ok(){ $query = $this->db->query('call spsubidamovlogro24();');$resultado = $query->result();$query->next_result(); $query->free_result(); return $resultado;    }
     public function fm_movlog33(){ $query = $this->db->query('SELECT idmovimiento, folio, idintegrante, iddimension, idlogro, c11p1o1, c11p1o2, c11p1o3, c11p1o4, c11p1o5, c11p1o6, c11p1o7, c11p1o8, c11p1cual, c11p2o1, c11p2o2, c11p2o3, c11p2o4, c11p2o5, c11p2o6, c11p2o7, c11p2cual, c11p3o1, c11p3o2, c11p3o3, c11p3o4, c11p3o5, c11p3o6, c11p3cual, colorlogroPF, doccogestor, fechacreacion, 1 as sincro, now() as fechasincro FROM t4_logromovimientolog33preguntvalid where sincro = 0;');$resultado = $query->result();$query->next_result(); $query->free_result(); return $resultado;   }
     public function fm_movlog33ok(){ $query = $this->db->query('call spsubidamovlogro33();');$resultado = $query->result();$query->next_result(); $query->free_result(); return $resultado;    }
     public function fm_movlog34(){ $query = $this->db->query('SELECT  idmovimiento, folio, idintegrante, iddimension, idlogro, c11p4o1, c11p4o2, c11p4o3, c11p4o4, c11p4o5, c11p4o6, c11p4cual, c11p5o1, c11p5o2, c11p5o3, c11p5o4, c11p5o5, c11p5o6, c11p5o7, c11p5cual, c11p7o1, c11p7o2, c11p7o3, c11p7o4, c11p7o5, c11p7o6, c11p7o7, c11p7cual, colorlogroPF, doccogestor, fechacreacion, 1 as sincro, now() as fechasincro FROM t4_logromovimientolog34preguntvalid where sincro = 0;');$resultado = $query->result();$query->next_result(); $query->free_result(); return $resultado;   }
     public function fm_movlog34ok(){ $query = $this->db->query('call spsubidamovlogro34();');$resultado = $query->result();$query->next_result(); $query->free_result(); return $resultado;    }
     public function fm_movlog39(){ $query = $this->db->query('SELECT idmovimiento, folio, idintegrante, iddimension, idlogro, c10p5o1, c10p5o2, c10p5o3, c10p5o4, c10p5o5, c10p5o6, c10p5o7, c10p5o8, c10p5o9, c10p5o11, c10p5o12, c10p5o13, c10p5o16, c10p5o17, c10p5o18, c10p5o19, c10p5o20, c10p5o22, institucion1, institucion2, c10p5cual, colorlogroPF, doccogestor, fechacreacion, 1 as sincro, now() as fechasincro FROM t4_logromovimientolog39preguntvalid where sincro = 0;');$resultado = $query->result();$query->next_result(); $query->free_result(); return $resultado;   }
     public function fm_movlog39ok(){ $query = $this->db->query('call spsubidamovlogro39();');$resultado = $query->result();$query->next_result(); $query->free_result(); return $resultado;    }


 
   public function fm_logromovimientocgs(){ $query = $this->db->query('SELECT idmovimiento, folio, idintegrante, iddimension, idlogro, movimientocod, movimientoobs, oportunidadnoincluida, oportunidadnoincluidatel, doccogestor, fechacreacion, 1 as sincro, now() as fechasincro FROM t4_logromovimientoscogestor where sincro = 0;');$resultado = $query->result();$query->next_result(); $query->free_result(); return $resultado;   }
   public function fm_logromovimientocgsok(){ $query = $this->db->query('call spsubidamovlogrocogestor();');$resultado = $query->result();$query->next_result(); $query->free_result(); return $resultado;    }

   
       public function fm_l2e2sueno(){
   
         $query = $this->db->query('call spsincronizarl2e2sueno();');
         $resultado = $query->result();
         $query->next_result(); 
         $query->free_result(); 
         return $resultado;   
      }
      public function fm_l2e2suenoacciones(){
   
         $query = $this->db->query('call spsincronizarl2e2suenoacciones();');
         $resultado = $query->result();
         $query->next_result(); 
         $query->free_result(); 
         return $resultado;   
      }

     public function fm_sincroipm(){
        
        $query = $this->db->query('call sp5ipmservidor();');
        $resultado = $query->result();
        $query->next_result(); 
        $query->free_result(); 
        return $resultado;   
     }
     
     

     public function fm_logroblanco(){ $query = $this->db->query('SELECT id,idintegrante, edad_ant, edad_act, sexo, logro, mensaje, fecha_reg, 1 as sincronizado, now() as fechasincro FROM t4_historicologroblanco where sincronizado = 0;');$resultado = $query->result();$query->next_result(); $query->free_result(); return $resultado;   }
     public function fm_logroblancook(){ $query = $this->db->query('call spsubidahistoricologroblanco();');$resultado = $query->result();$query->next_result(); $query->free_result(); return $resultado;    }
  

     
   public function fm_logmovrec10(){ $query = $this->db->query('SELECT idmovimiento, folio, idintegrante, iddimension, idlogro, edad, c9p37o1, c9p37o2, c9p37o3, c9p37o4, c9p37o5, c9p37o6, c9p37o7, c9p37o8, c9p37o9, c9p37o10, c9p37o11, c9p37cual, c9p39o1, c9p39o2, c9p39o3, c9p39o4, c9p39o5, c9p39o6, c9p39o7, c9p39o8, c9p39cual, c9p40, c9p3, c9p3cual, c9p4, c9p19, colorlogroPF, doccogestor, fechacreacion, 1 as sincro, now() as fechasincro FROM t4_logromovimientorecalculolog10 where sincro = 0;');$resultado = $query->result();$query->next_result(); $query->free_result(); return $resultado;   }
   public function fm_logmovrec10ok(){ $query = $this->db->query('call spsubidalogmovrec10();');$resultado = $query->result();$query->next_result(); $query->free_result(); return $resultado;    }
   public function fm_logmovrec11(){ $query = $this->db->query('SELECT idmovimiento, folio, idintegrante, iddimension, idlogro, edad, c8p4, c8p2grado, colorlogroPF, doccogestor, fechacreacion, 1 as sincro, now() as fechasincro FROM t4_logromovimientorecalculolog11 where sincro = 0;');$resultado = $query->result();$query->next_result(); $query->free_result(); return $resultado;   }
   public function fm_logmovrec11ok(){ $query = $this->db->query('call spsubidalogmovrec11();');$resultado = $query->result();$query->next_result(); $query->free_result(); return $resultado;    }
   public function fm_logmovrec12(){ $query = $this->db->query('SELECT  idmovimiento, folio, idintegrante, iddimension, idlogro, edad, c8p1, colorlogroPF, doccogestor, fechacreacion, 1 as sincro, now() as fechasincro FROM t4_logromovimientorecalculolog12 where sincro = 0;');$resultado = $query->result();$query->next_result(); $query->free_result(); return $resultado;   }
   public function fm_logmovrec12ok(){ $query = $this->db->query('call spsubidalogmovrec12();');$resultado = $query->result();$query->next_result(); $query->free_result(); return $resultado;    }
   public function fm_logmovrec13(){ $query = $this->db->query('SELECT  idmovimiento, folio, idintegrante, iddimension, idlogro, edad, c8p2, c8p2grado, c8p4, colorlogroPF, doccogestor, fechacreacion, 1 as sincro, now() as fechasincro FROM t4_logromovimientorecalculolog13 where sincro = 0;');$resultado = $query->result();$query->next_result(); $query->free_result(); return $resultado;   }
   public function fm_logmovrec13ok(){ $query = $this->db->query('call spsubidalogmovrec13();');$resultado = $query->result();$query->next_result(); $query->free_result(); return $resultado;    }
   public function fm_logmovrec2(){ $query = $this->db->query('SELECT  idmovimiento, folio, idintegrante, iddimension, idlogro, edad, c4p8, nacionalidad, colorlogroPF, doccogestor, fechacreacion, 1 as sincro, now() as fechasincro FROM t4_logromovimientorecalculolog2 where sincro = 0;');$resultado = $query->result();$query->next_result(); $query->free_result(); return $resultado;   }
   public function fm_logmovrec2ok(){ $query = $this->db->query('call spsubidalogmovrec2();');$resultado = $query->result();$query->next_result(); $query->free_result(); return $resultado;    }
   public function fm_logmovrec22(){ $query = $this->db->query('SELECT  idmovimiento, folio, idintegrante, iddimension, idlogro, edad, c5p7, c5p7resultado, c5p8o1, c5p8o2, c5p8o3, c5p8o4, c5p8o5, colorlogroPF, doccogestor, fechacreacion, 1 as sincro, now() as fechasincro FROM t4_logromovimientorecalculolog22 where sincro = 0;');$resultado = $query->result();$query->next_result(); $query->free_result(); return $resultado;   }
   public function fm_logmovrec22ok(){ $query = $this->db->query('call spsubidalogmovrec22();');$resultado = $query->result();$query->next_result(); $query->free_result(); return $resultado;    }
   public function fm_logmovrec23(){ $query = $this->db->query('SELECT idmovimiento, folio, idintegrante, iddimension, idlogro, edad, c5p12, colorlogroPF, doccogestor, fechacreacion, 1 as sincro, now() as fechasincro FROM t4_logromovimientorecalculolog23 where sincro = 0;');$resultado = $query->result();$query->next_result(); $query->free_result(); return $resultado;   }
   public function fm_logmovrec23ok(){ $query = $this->db->query('call spsubidalogmovrec23();');$resultado = $query->result();$query->next_result(); $query->free_result(); return $resultado;    }
   public function fm_logmovrec3(){ $query = $this->db->query('SELECT   idmovimiento, folio, idintegrante, iddimension, idlogro, edad, c4p8, nacionalidad, colorlogroPF, doccogestor, fechacreacion, 1 as sincro, now() as fechasincro FROM t4_logromovimientorecalculolog3 where sincro = 0;');$resultado = $query->result();$query->next_result(); $query->free_result(); return $resultado;   }
   public function fm_logmovrec3ok(){ $query = $this->db->query('call spsubidalogmovrec3();');$resultado = $query->result();$query->next_result(); $query->free_result(); return $resultado;    }
   public function fm_logmovrec5(){ $query = $this->db->query('SELECT idmovimiento, folio, idintegrante, iddimension, idlogro, edad, c4p9, colorlogroPF, doccogestor, fechacreacion, 1 as sincro, now() as fechasincro FROM t4_logromovimientorecalculolog5 where sincro = 0;');$resultado = $query->result();$query->next_result(); $query->free_result(); return $resultado;   }
   public function fm_logmovrec5ok(){ $query = $this->db->query('call spsubidalogmovrec5();');$resultado = $query->result();$query->next_result(); $query->free_result(); return $resultado;    }
   public function fm_logmovrec7(){ $query = $this->db->query('SELECT  idmovimiento, folio, idintegrante, iddimension, idlogro, edad, c9p3, c9p3cual, c9p4, c9p5, c9p5cual, c9p6, colorlogroPF, doccogestor, fechacreacion, 1 as sincro, now() as fechasincro FROM t4_logromovimientorecalculolog7 where sincro = 0;');$resultado = $query->result();$query->next_result(); $query->free_result(); return $resultado;   }
   public function fm_logmovrec7ok(){ $query = $this->db->query('call spsubidalogmovrec7();');$resultado = $query->result();$query->next_result(); $query->free_result(); return $resultado;    }
   public function fm_logmovrec8(){ $query = $this->db->query('SELECT  idmovimiento, folio, idintegrante, iddimension, idlogro, edad, c9p1, c9p1cual, c9p2, colorlogroPF, doccogestor, fechacreacion, 1 as sincro, now() as fechasincro FROM t4_logromovimientorecalculolog8 where sincro = 0;');$resultado = $query->result();$query->next_result(); $query->free_result(); return $resultado;   }
   public function fm_logmovrec8ok(){ $query = $this->db->query('call spsubidalogmovrec8();');$resultado = $query->result();$query->next_result(); $query->free_result(); return $resultado;    }
   public function fm_logmovrec9(){ $query = $this->db->query('SELECT  idmovimiento, folio, idintegrante, iddimension, idlogro, edad, c9p30, c9p34, c9p35o1, c9p35o2, c9p35o3, c9p35o4, c9p35o5, c9p35o6, c9p35o7, c9p35o8, c9p35o9, c9p35o7cual, colorlogroPF, doccogestor, fechacreacion,  1 as sincro, now() as fechasincro FROM t4_logromovimientorecalculolog9 where sincro = 0;');$resultado = $query->result();$query->next_result(); $query->free_result(); return $resultado;   }
   public function fm_logmovrec9ok(){ $query = $this->db->query('call spsubidalogmovrec9();');$resultado = $query->result();$query->next_result(); $query->free_result(); return $resultado;    }

   
    ////////////////////////////////////Sincronizacion privaciones/////////////////////////////
     
      public function fm_sincroprivacion1(){
        
        $query = $this->db->query('call sp5privacion1servidor();');
        $resultado = $query->result();
        $query->next_result(); 
        $query->free_result(); 
        return $resultado;   
     }
     public function fm_sincroprivacion2(){
        
        $query = $this->db->query('call sp5privacion2servidor();');
        $resultado = $query->result();
        $query->next_result(); 
        $query->free_result(); 
        return $resultado;   
     }
     public function fm_sincroprivacion3(){
        
        $query = $this->db->query('call sp5privacion3servidor();');
        $resultado = $query->result();
        $query->next_result(); 
        $query->free_result(); 
        return $resultado;   
     }
     public function fm_sincroprivacion4(){
        
        $query = $this->db->query('call sp5privacion4servidor();');
        $resultado = $query->result();
        $query->next_result(); 
        $query->free_result(); 
        return $resultado;   
     }
     public function fm_sincroprivacion5(){
        
        $query = $this->db->query('call sp5privacion5servidor();');
        $resultado = $query->result();
        $query->next_result(); 
        $query->free_result(); 
        return $resultado;   
     }
     public function fm_sincroprivacion6(){
        
        $query = $this->db->query('call sp5privacion6servidor();');
        $resultado = $query->result();
        $query->next_result(); 
        $query->free_result(); 
        return $resultado;   
     }
     public function fm_sincroprivacion7(){
        
        $query = $this->db->query('call sp5privacion7servidor();');
        $resultado = $query->result();
        $query->next_result(); 
        $query->free_result(); 
        return $resultado;   
     }
     public function fm_sincroprivacion8(){
        
        $query = $this->db->query('call sp5privacion8servidor();');
        $resultado = $query->result();
        $query->next_result(); 
        $query->free_result(); 
        return $resultado;   
     }
     public function fm_sincroprivacion9(){
        
        $query = $this->db->query('call sp5privacion9servidor();');
        $resultado = $query->result();
        $query->next_result(); 
        $query->free_result(); 
        return $resultado;   
     }
     public function fm_sincroprivacion10(){
        
        $query = $this->db->query('call sp5privacion10servidor();');
        $resultado = $query->result();
        $query->next_result(); 
        $query->free_result(); 
        return $resultado;   
     }
     public function fm_sincroprivacion11(){
        
        $query = $this->db->query('call sp5privacion11servidor();');
        $resultado = $query->result();
        $query->next_result(); 
        $query->free_result(); 
        return $resultado;   
     }
     public function fm_sincroprivacion12(){
        
        $query = $this->db->query('call sp5privacion12servidor();');
        $resultado = $query->result();
        $query->next_result(); 
        $query->free_result(); 
        return $resultado;   
     }
     public function fm_sincroprivacion13(){
        
        $query = $this->db->query('call sp5privacion13servidor();');
        $resultado = $query->result();
        $query->next_result(); 
        $query->free_result(); 
        return $resultado;   
     }
     public function fm_sincroprivacion14(){
        
        $query = $this->db->query('call sp5privacion14servidor();');
        $resultado = $query->result();
        $query->next_result(); 
        $query->free_result(); 
        return $resultado;   
     }
     public function fm_sincroprivacion15(){
        
        $query = $this->db->query('call sp5privacion15servidor();');
        $resultado = $query->result();
        $query->next_result(); 
        $query->free_result(); 
        return $resultado;   
     }
     public function fm_sincroprivacion16(){
        
        $query = $this->db->query('call sp5privacion16servidor();');
        $resultado = $query->result();
        $query->next_result(); 
        $query->free_result(); 
        return $resultado;   
     }
     
     /////////////////////////////Sincronizacion otras tablas/////////////////////
     ////////////////////////pasosestado,estacionestado,capacidades,actualizacion///////////////
     
     public function fm_sincropasos(){
        
        $query = $this->db->query('call spsincronizarprotocolopasosestado();');
        $resultado = $query->result();
        $query->next_result(); 
        $query->free_result(); 
        return $resultado;   
     }
     public function fm_sincroestacion(){
        
        $query = $this->db->query('call sp3sincronizacionestacionestado();');
        $resultado = $query->result();
        $query->next_result(); 
        $query->free_result(); 
        return $resultado;   
     }
     public function fm_sincrocapacidades(){
        
        $query = $this->db->query('call spcapacidadessincroa();');
        $resultado = $query->result();
        $query->next_result(); 
        $query->free_result(); 
        return $resultado;   
     }
     public function fm_sincroestacionh(){
        
        $query = $this->db->query('call sp3sincronizacionarriba();');
        $resultado = $query->result();
        $query->next_result(); 
        $query->free_result(); 
        return $resultado;   
     }
     public function fm_sincrointegrante(){
        
        $query = $this->db->query('SELECT folio, idintegrante, tipodocumento, documento, nombre1, nombre2, apellido1, apellido2, fechanacimiento, sexo, edad, Identidad_genero, Orientacion_sexual, etnia, telefono, celular, correo, twitter, facebook, instagram, google, estadointegrante, estadointe, estadointe2, estadointe3, fecharegistro, fechamodifi, sincro as srincro, now() as fechasincro , integranteactivomotivo, integranteactivoobs, estadointeintermedia, estadointeintermediaLC, nacionalidad
        FROM t1_principalintegrantes
        where sincro = 2;');
        $resultado = $query->result();
        $query->next_result(); 
        $query->free_result(); 
        return $resultado;   
     }
     public function fm_sincrointegranteok(){
        
      $query = $this->db->query('call spsubidaintegrantes();');
      $resultado = $query->result();
      $query->next_result(); 
      $query->free_result(); 
      return $resultado;   
   }



     public function fm_sincrohogar(){$query = $this->db->query(' SELECT folio, idintegrantetitular, doccogestor, idcobertura, estadofolio, bloqueofolio, motivo, estrato, comuna, barrio, direccion, telefono, celular, telfcont, celcont, fechamodifi, 3 as srincro, now() as fechasinco , folioactivo, folioactivomotivo, folioactivoobser,editar_llbf,momento_vi FROM t1_principalhogar where sincro = 2;');$resultado = $query->result();$query->next_result(); $query->free_result(); return $resultado;   }
     public function fm_sincrohogarok(){$query = $this->db->query('call  spsubidasincrohogar();');$resultado = $query->result();$query->next_result(); $query->free_result(); return $resultado; }



     public function fm_sincroactualizacion(){
        
        $query = $this->db->query('call spactualizacionsincroa();');
        $resultado = $query->result();
        $query->next_result(); 
        $query->free_result(); 
        return $resultado;   
     }
     
     public function fm_sincrofolioslogros(){$query = $this->db->query('SELECT folio, logros, privaciones, fechalogros, fechaprivaciones, now() as  fechasincro FROM t5_foliosconlogros;');$resultado = $query->result();$query->next_result(); $query->free_result(); return $resultado;   }

     
     public function fm_sincroc1p1ap12(){$query = $this->db->query('SELECT folio, c1p1, c1p2, c1p3, c1p4, c1p5, c1p6, c1p7, c1p8, c1p9, c1p10, c1p11, c1p11a, c1p12, c1p13, fechaactualizacion, p1, 3 as srincro ,now() as fechasincro FROM t_c1p1ap12 where sincro in (0,2);');$resultado = $query->result();$query->next_result(); $query->free_result(); return $resultado;   }  
     public function fm_sincroc1p1ap12ok(){$query = $this->db->query('call spsubidasincroc1p1ap12();');$resultado = $query->result();$query->next_result();$query->free_result();return $resultado;   }



          public function fm_sincrocapitulo1l2e1(){
        
        $query = $this->db->query('call spsincrocapitulo1l2e1();');
        $resultado = $query->result();
        $query->next_result(); 
        $query->free_result(); 
        return $resultado;   
     }
     public function fm_sincrolinea2e1cualidadesh(){
        
        $query = $this->db->query('call spsincrolinea2e1cualidadesh();');
        $resultado = $query->result();
        $query->next_result(); 
        $query->free_result(); 
        return $resultado;   
     }
     public function fm_sincrolinea2e1cualidadesi(){
        
        $query = $this->db->query('call spsincrolinea2e1cualidadesi();');
        $resultado = $query->result();
        $query->next_result(); 
        $query->free_result(); 
        return $resultado;   
     }
      public function fm_sincrohistoricoactivacioni(){$query = $this->db->query('SELECT id, folio, idintegrante, docusuario, integranteactivo, integranteactivomotivo, integranteactivoobs, fechamodificacion,now() as fechasincro FROM t_historicoactivacionintegrante where sincro = 0;');$resultado = $query->result();$query->next_result(); $query->free_result(); return $resultado;   }
     public function fm_sincrohistoricoactivacioniok(){$query = $this->db->query('call spsubidasincrohistoricoactivacioni();');$resultado = $query->result();$query->next_result(); $query->free_result(); return $resultado;   }
     /////////////////////Inicia Sincronizacion Estacion Cero////////////////
     public function fm_hfprocedencia(){$query = $this->db->query('SELECT idlogro,folio, estacion, fecha, textprocedencia, cogestor,now() as fechasincro FROM t6_hfprocedencia;');$resultado = $query->result();$query->next_result(); $query->free_result(); return $resultado;   }

    
     public function fm_hflogros(){$query = $this->db->query('SELECT idlogro, folio, estacion, fecha, textlogro, cogestor,now() as fechasincro FROM t6_hflogros;');$resultado = $query->result();$query->next_result(); $query->free_result(); return $resultado;   }
     public function fm_hfcostumbres(){$query = $this->db->query('SELECT idlogro, folio, estacion, fecha, textcostumbres, cogestor, now() as fechasincro FROM t6_hfcostumbres;'); $resultado = $query->result(); $query->next_result();  $query->free_result();  return $resultado;   }
     public function fm_hfconformacion(){$query = $this->db->query('SELECT idlogro, folio, estacion, fecha, textconformacion, cogestor,now() as fechasincro FROM t6_hfconformacion;'); $resultado = $query->result(); $query->next_result();  $query->free_result();  return $resultado;}
     public function fm_facttscual1(){  $query = $this->db->query('SELECT id, folio, estacion, fecha, facttscual1, cogestor, now() as fechasincro FROM t6_facttscual1;'); $resultado = $query->result(); $query->next_result();  $query->free_result();  return $resultado;   }
     public function fm_facttfcual1(){ $query = $this->db->query('SELECT id, folio, estacion, fecha, facttfcual1, cogestor,now() as fechasincro FROM t6_facttfcual1;'); $resultado = $query->result(); $query->next_result();  $query->free_result();  return $resultado;   }
     public function fm_facttecual1(){  $query = $this->db->query('SELECT id, folio, estacion, fecha, facttecual1, cogestor,now() as fechasincro FROM t6_facttecual1;'); $resultado = $query->result(); $query->next_result();  $query->free_result();  return $resultado;   }

     public function fm_factiscual1(){ $query = $this->db->query('SELECT id, folio, estacion, fecha, factiscual1, cogestor,now() as fechasincro FROM t6_factiscual1;');$resultado = $query->result();$query->next_result(); $query->free_result(); return $resultado;    }
     public function fm_factifcual1(){ $query = $this->db->query('SELECT id, folio, estacion, fecha, factifcual1, cogestor,now() as fechasincro  FROM t6_factifcual1;'); $resultado = $query->result(); $query->next_result();  $query->free_result();  return $resultado;    }
     public function fm_factiecual1(){ $query = $this->db->query('SELECT id, folio, estacion, fecha, factiecual1, cogestor,now() as fechasincro FROM t6_factiecual1;'); $resultado = $query->result(); $query->next_result();  $query->free_result();  return $resultado;    }
   

     public function fm_estacioncerocea(){$query = $this->db->query('SELECT folio, crisiseo1, crisiseo2, crisiseo3, crisiseo4, crisiseo5, crisiseo6, cualce, factteo1, factteo2, factteo3, factteo4, factteo5, factteo6, cualte, factieo1, factieo2, factieo3, factieo4, factieo5, factieo6, cualie, crisisfo1, crisisfo2, crisisfo3, crisisfo4, crisisfo5, cualcf, facttfo1, facttfo2, facttfo3, facttfo4, facttfo5, facttfo6, cualtf, factifo1, factifo2, factifo3, cualif, crisisso1, crisisso2, crisisso3, crisisso4, crisisso5, cualcs, facttso1, facttso2, facttso3, cualts, factiso1, factiso2, factiso3, cualis, fechaactualizacion, sincro, now() as fechasincro, control, fechacontrol   FROM t6_estacioncerocea;');  $resultado = $query->result();  $query->next_result();   $query->free_result();   return $resultado;   }
     public function fm_crisisscual1(){   $query = $this->db->query('SELECT id, folio, estacion, fecha, crisisscual1, cogestor,now() as fechasincro  FROM t6_crisisscual1;');  $resultado = $query->result();  $query->next_result();   $query->free_result();   return $resultado;    }
     public function fm_crisisfcual1(){  $query = $this->db->query('SELECT id, folio, estacion, fecha, crisisfcual1, cogestor, now() fechasincro  FROM t6_crisisfcual1;');  $resultado = $query->result();  $query->next_result();   $query->free_result();   return $resultado;     }
     public function fm_crisisecual1(){ $query = $this->db->query('SELECT id, folio, estacion, fecha, crisisecual1, cogestor,now() as fechasincro  FROM t6_crisisecual1;');  $resultado = $query->result();  $query->next_result();   $query->free_result();   return $resultado;    }
     public function fm_crearmetas(){ $query = $this->db->query('SELECT id, folio, meta1, meta1dimension, meta2, meta2dimension, meta3, meta3dimension, fechaactualizacion, sincro, now() as fechasincro  FROM t6_crearmetas;');  $resultado = $query->result();  $query->next_result();   $query->free_result();   return $resultado;   }
     public function fm_correspautonomia(){ $query = $this->db->query('SELECT id, folio, infocorresp1, infocorresp2, infocorresp3, infocorrespcual, infoautonomia1, infoautonomia2, infoautonomiacual, fechaactualizacion, sincro, now() as fechasincro FROM t6_correspautonomia;'); $resultado = $query->result(); $query->next_result();  $query->free_result();  return $resultado;   }
     
     public function fm_eerf(){
        
        $query = $this->db->query('SELECT folio, numeroevaluacion, p1, p2, p3, p4, p5, p6, p7, p8, p9, p10, p11, p12, p13, p14, p15, p16, p17, p18, p19, p20, fechaactual, sincro, now() as fechasincro, integrante1, integrante2, sino, rfinal 
        FROM t_eerf;');
        $resultado = $query->result();
        $query->next_result(); 
        $query->free_result(); 
        return $resultado;   
     }

     public function fm_eerfok(){
        
      $query = $this->db->query('SELECT folio, cap11, cap12, cap13, fechaactualizacion, sincro, now() as fechasincro
      FROM t2_estrategiasautonomiasc;');
      $resultado = $query->result();
      $query->next_result(); 
      $query->free_result(); 
      return $resultado;   
   }

      public function fm_avanceproceso(){
        
        $query = $this->db->query('SELECT id, folio, estacion, dimerfam, dimdllohum, textoavance, textoavance2, doccogestor, fecharegistro,now() as fechasincro
        FROM t6_avance_procesoac where sincro = 0;');
        $resultado = $query->result();
        $query->next_result(); 
        $query->free_result(); 
        return $resultado;   
     }

     public function fm_avanceprocesook(){
        
      $query = $this->db->query('call spsubidat6_avance_procesoac();');
      $resultado = $query->result();
      $query->next_result(); 
      $query->free_result(); 
      return $resultado;   
   }




      public function fm_l2metas(){
        
        $query = $this->db->query('call sp6sincrolinea2metas();');
        $resultado = $query->result();
        $query->next_result(); 
        $query->free_result(); 
        return $resultado;   
     }
      public function fm_l2acciones(){
        
        $query = $this->db->query('call sp6sincrolinea2accionesmeta();');
        $resultado = $query->result();
        $query->next_result(); 
        $query->free_result(); 
        return $resultado;   
     }
      public function fm_casoexitoso(){
        
        $query = $this->db->query('call sp6sincrocasoexitoso();');
        $resultado = $query->result();
        $query->next_result(); 
        $query->free_result(); 
        return $resultado;   
     }


     public function fm_correspautonomiahistorico(){$query = $this->db->query('SELECT id, folio, infocorrespcual, infoautonomiacual, fechaactualizacion, sincro, fechasincro  FROM t6_correspautonomiahistorico where sincro = 0;');$resultado = $query->result();$query->next_result(); $query->free_result(); return $resultado;   }  
     public function fm_correspautonomiahistoricook(){$query = $this->db->query('call spsubidat6_correspautonomiahistorico();');$resultado = $query->result();$query->next_result();$query->free_result();return $resultado;   }


     /////////////////////Fin Sincronizacion Estacion Cero////////////////

     public function fm_logromovimientocf(){$query = $this->db->query('SELECT idmovimiento, folio, idintegrante, iddimension, idlogro, movimientocodcf, movimientoobscf, doccogestor, fechacreacion, sincro, now() as fechasincro FROM t4_logromovimientoscogestorcf where sincro = 0;');$resultado = $query->result();$query->next_result(); $query->free_result(); return $resultado;   }  
     public function fm_logromovimientocfok(){$query = $this->db->query('call spsubidat4_logromovimientoscogestorcf();');$resultado = $query->result();$query->next_result();$query->free_result();return $resultado;   }
     public function fm_protocoloinicioestacion(){$query = $this->db->query('SELECT folio, idpaso, estado, fecharegistro, longitud, latitud, mensajedondeestoy, usuario, 1 as sincro, now() as fechasincro FROM t_protocoloinicioestacion where sincro in (0,3);');$resultado = $query->result();$query->next_result(); $query->free_result(); return $resultado;   }  
     public function fm_protocoloinicioestacionok(){$query = $this->db->query('call spsubidat_protocoloinicioestacion();');$resultado = $query->result();$query->next_result();$query->free_result();return $resultado;   }
     public function fm_condicionnecesaria(){$query = $this->db->query('SELECT folio, estacion, idlogro, totalverde, totalrojo, totalcafe, totalazul, totalgris, color, fechacalculo, 1 as sincro, now() as fechasincro FROM t2_condicionnecesaria where sincro = 0;');$resultado = $query->result();$query->next_result(); $query->free_result(); return $resultado;   }  
     public function fm_condicionnecesariaok(){$query = $this->db->query('call spsubidat2_condicionnecesariaservidor();');$resultado = $query->result();$query->next_result();$query->free_result();return $resultado;   }
     public function fm_tablaingresos(){$query = $this->db->query('SELECT folio, estacion, actualizo, ingresos, fechaactualizacion,sincro, now() as fechasincro FROM t2_ingresos where sincro = 0;');$resultado = $query->result();$query->next_result(); $query->free_result(); return $resultado;   }  
     public function fm_tablaingresosok(){$query = $this->db->query('call spsubidat2_ingresosservidor();');$resultado = $query->result();$query->next_result();$query->free_result();return $resultado;   }



     public function fm_tablaingresosd(){
        
        $query = $this->db->query('call sp2ingresosservidord();');
        $resultado = $query->result();
        $query->next_result(); 
        $query->free_result(); 
        return $resultado;   
     }

public function fm_privacionesintermedia1(){ $query = $this->db->query('SELECT  idprivacion, folio, idintegrante, estadointegrante, nombreintegrante, edad, sexo, fecharegistroDIP, totalintegrantes, totalgrado, promedioprivacion, colorprivacionDIP, colorprivacionPFP, fecharegistroPFP, sincronizado, now() as fechasincro FROM t5_privacion1intermedia where sincronizado = 0;');$resultado = $query->result();$query->next_result(); $query->free_result(); return $resultado;   }
public function fm_privacionesintermedia1ok(){ $query = $this->db->query('call spsubidaprivacionintermedia1();');$resultado = $query->result();$query->next_result(); $query->free_result(); return $resultado;    }
public function fm_privacionesintermedia2(){ $query = $this->db->query('SELECT idprivacion, folio, idintegrante, estadointegrante, nombreintegrante, edad, sexo, c8p1intermedia, fecharegistroDIP, sabeleeryescribir, colorprivacionDIP, colorprivacionPFP, fecharegistroPFP, sincronizado, now() as fechasincro FROM t5_privacion2intermedia where sincronizado = 0;');$resultado = $query->result();$query->next_result(); $query->free_result(); return $resultado;   }
public function fm_privacionesintermedia2ok(){ $query = $this->db->query('call spsubidaprivacionintermedia2();');$resultado = $query->result();$query->next_result(); $query->free_result(); return $resultado;    }
public function fm_privacionesintermedia3(){ $query = $this->db->query('SELECT idprivacion, folio, idintegrante, estadointegrante, nombreintegrante, edad, sexo, c8p4intermedia, c8p2gradointermedia, fecharegistroDIP, actualmenteestudia, ultimogradoaprovado, colorprivacionDIP, colorprivacionPFP, fecharegistroPFP, sincronizado, now() as fechasincro FROM t5_privacion3intermedia where sincronizado = 0;');$resultado = $query->result();$query->next_result(); $query->free_result(); return $resultado;   }
public function fm_privacionesintermedia3ok(){ $query = $this->db->query('call spsubidaprivacionintermedia3();');$resultado = $query->result();$query->next_result(); $query->free_result(); return $resultado;    }
public function fm_privacionesintermedia4(){ $query = $this->db->query('SELECT  idprivacion, folio, idintegrante, estadointegrante, nombreintegrante, edad, sexo, c8p2intermedia, c8p2gradointermedia, fecharegistroDIP, ultimogradoaprovado, gradocalculado, colorprivacionDIP, colorprivacionPFP, fecharegistroPFP, sincronizado, now() as fechasincro FROM t5_privacion4intermedia where sincronizado = 0;');$resultado = $query->result();$query->next_result(); $query->free_result(); return $resultado;   }
public function fm_privacionesintermedia4ok(){ $query = $this->db->query('call spsubidaprivacionintermedia4();');$resultado = $query->result();$query->next_result(); $query->free_result(); return $resultado;    }
public function fm_privacionesintermedia5(){ $query = $this->db->query('SELECT  idprivacion, folio, idintegrante, estadointegrante, nombreintegrante, edad, sexo, c5p1intermedia, c7p1intermedia, c6p10intermedia, c6p11intermedia, c6p12intermedia, c6p13intermedia, c6p14intermedia, c6p15intermedia, fecharegistroDIP, afiliadoseguridadsocialensalud, dondepermaneceelmenor, jovensinalimentacionnutritiva, jovennopudovariaralimentacion, jovenconalimentaciondisminuida, jovensequejodehambre, jovenseacostoconhambre, jovencomiounasolavez, colorprivacionDIP, colorprivacionPFP, fecharegistroPFP, sincronizado, now() as fechasincro FROM t5_privacion5intermedia where sincronizado = 0;');$resultado = $query->result();$query->next_result(); $query->free_result(); return $resultado;   }
public function fm_privacionesintermedia5ok(){ $query = $this->db->query('call spsubidaprivacionintermedia5();');$resultado = $query->result();$query->next_result(); $query->free_result(); return $resultado;    }
public function fm_privacionesintermedia6(){ $query = $this->db->query('SELECT idprivacion, folio, idintegrante, estadointegrante, nombreintegrante, edad, sexo, c9p19intermedia, c9p37intermediao1, c9p37intermediao2, c9p37intermediao3, c9p37intermediao4, c9p37intermediao5, c9p37intermediao6, c9p37intermediao7, c9p37intermediao8, c9p37intermediao9, c9p37intermediao10, c9p37intermediacual, c9p37intermediao11, c9p39intermediao1, c9p39intermediao2, c9p39intermediao3, c9p39intermediao4, c9p39intermediao5, c9p39intermediao6, c9p39intermediao7, c9p39intermediao8, c9p39intermediacual, c9p40intermedia, c11p11intermediao4, fecharegistroDIP, gestionopermisolaboralenministerio, trabajodomestico, trabajoenminas, explotacionsexual, reclutamientoconflictoarmado, microtraficoestuperfaciente, ventashambulantes, reciclaje, trabajoencalle, mendicidad, otra, cual, ninguna, fabricarproductos, ayudaracocinar, venderproductos, llevardomicilios, cultivarlatierra, recolectarcartones, noayudoanadie, otraayuda, cualayuda, cuantotiempoalasemana, trabajoinfantil, colorprivacionDIP, colorprivacionPFP, fecharegistroPFP, sincronizado, now() as fechasincro FROM t5_privacion6intermedia where sincronizado = 0;');$resultado = $query->result();$query->next_result(); $query->free_result(); return $resultado;   }
public function fm_privacionesintermedia6ok(){ $query = $this->db->query('call spsubidaprivacionintermedia6();');$resultado = $query->result();$query->next_result(); $query->free_result(); return $resultado;    }
public function fm_privacionesintermedia7(){ $query = $this->db->query('SELECT idprivacion, folio, idintegrante, estadointegrante, nombreintegrante, edad, sexo, c9p24intermedia, c9p27intermediao2, c9p27intermediao2cuanto, fecharegistroDIP, trabajoporlomenos2semanasconsecutivas, pagosporpensionjubilacionvejez, cuantofueelpago, colorprivacionDIP, colorprivacionPFP, fecharegistroPFP, sincronizado, now() as fechasincro FROM t5_privacion7intermedia where sincronizado = 0;');$resultado = $query->result();$query->next_result(); $query->free_result(); return $resultado;   }
public function fm_privacionesintermedia7ok(){ $query = $this->db->query('call spsubidaprivacionintermedia7();');$resultado = $query->result();$query->next_result(); $query->free_result(); return $resultado;    }
public function fm_privacionesintermedia8(){ $query = $this->db->query('SELECT idprivacion, folio, idintegrante, estadointegrante, nombreintegrante, edad, sexo, c9p19intermedia, c9p20intermedia, fecharegistroDIP, gestionopermisolaboralenministerio, cotizandoactualmentefondopensiones, colorprivacionDIP, colorprivacionPFP, fecharegistroPFP, sincronizado, now() as fechasincro FROM t5_privacion8intermedia where sincronizado = 0;');$resultado = $query->result();$query->next_result(); $query->free_result(); return $resultado;   }
public function fm_privacionesintermedia8ok(){ $query = $this->db->query('call spsubidaprivacionintermedia8();');$resultado = $query->result();$query->next_result(); $query->free_result(); return $resultado;    }
public function fm_privacionesintermedia9(){ $query = $this->db->query('SELECT idprivacion, folio, idintegrante, estadointegrante, nombreintegrante, edad, sexo, c5p1intermedia, fecharegistroDIP, afiliadoseguridadsocialensalud, colorprivacionDIP, colorprivacionPFP, fecharegistroPFP, sincronizado, now() as fechasincro FROM t5_privacion9intermedia where sincronizado = 0;');$resultado = $query->result();$query->next_result(); $query->free_result(); return $resultado;   }
public function fm_privacionesintermedia9ok(){ $query = $this->db->query('call spsubidaprivacionintermedia9();');$resultado = $query->result();$query->next_result(); $query->free_result(); return $resultado;    }
public function fm_privacionesintermedia10(){ $query = $this->db->query('SELECT idprivacion, folio, idintegrante, estadointegrante, nombreintegrante, edad, sexo, c5pextraintermedia, fecharegistroDIP, quehizoalpresentarproblemasdesalud, colorprivacionDIP, colorprivacionPFP, fecharegistroPFP, sincronizado, now() as fechasincro FROM t5_privacion10intermedia where sincronizado = 0;');$resultado = $query->result();$query->next_result(); $query->free_result(); return $resultado;   }
public function fm_privacionesintermedia10ok(){ $query = $this->db->query('call spsubidaprivacionintermedia10();');$resultado = $query->result();$query->next_result(); $query->free_result(); return $resultado;    }
public function fm_privacionesintermedia11(){ $query = $this->db->query('SELECT idprivacion, folio, idintegrante, estadointegrante, nombreintegrante, edad, sexo, c2p9intermedia, fecharegistroDIP, aguaparaconsumolaoptienen, colorprivacionDIP, colorprivacionPFP, fecharegistroPFP, sincronizado, now() as fechasincro FROM t5_privacion11intermedia where sincronizado = 0;');$resultado = $query->result();$query->next_result(); $query->free_result(); return $resultado;   }
public function fm_privacionesintermedia11ok(){ $query = $this->db->query('call spsubidaprivacionintermedia11();');$resultado = $query->result();$query->next_result(); $query->free_result(); return $resultado;    }
public function fm_privacionesintermedia12(){ $query = $this->db->query('SELECT idprivacion, folio, idintegrante, estadointegrante, nombreintegrante, edad, sexo, c2p7intermediao2, c2p8intermedia, fecharegistroDIP, tienealcantarillado, elserviciosanitarioes, colorprivacionDIP, colorprivacionPFP, fecharegistroPFP, sincronizado, now() as fechasincro FROM t5_privacion12intermedia where sincronizado = 0;');$resultado = $query->result();$query->next_result(); $query->free_result(); return $resultado;   }
public function fm_privacionesintermedia12ok(){ $query = $this->db->query('call spsubidaprivacionintermedia12();');$resultado = $query->result();$query->next_result(); $query->free_result(); return $resultado;    }
public function fm_privacionesintermedia13(){ $query = $this->db->query('SELECT idprivacion, folio, idintegrante, estadointegrante, nombreintegrante, edad, sexo, c2p5intermedia, fecharegistroDIP, materialpredominantedelospisos, colorprivacionDIP, colorprivacionPFP, fecharegistroPFP, sincronizado, now() as fechasincro FROM t5_privacion13intermedia where sincronizado = 0;');$resultado = $query->result();$query->next_result(); $query->free_result(); return $resultado;   }
public function fm_privacionesintermedia13ok(){ $query = $this->db->query('call spsubidaprivacionintermedia13();');$resultado = $query->result();$query->next_result(); $query->free_result(); return $resultado;    }
public function fm_privacionesintermedia14(){ $query = $this->db->query('SELECT idprivacion, folio, idintegrante, estadointegrante, nombreintegrante, edad, sexo, c2p2intermedia, fecharegistroDIP, materialpredominanteparedesexteriores, colorprivacionDIP, colorprivacionPFP, fecharegistroPFP, sincronizado, now() as fechasincro FROM t5_privacion14intermedia where sincronizado = 0;');$resultado = $query->result();$query->next_result(); $query->free_result(); return $resultado;   }
public function fm_privacionesintermedia14ok(){ $query = $this->db->query('call spsubidaprivacionintermedia14();');$resultado = $query->result();$query->next_result(); $query->free_result(); return $resultado;    }
public function fm_privacionesintermedia15(){ $query = $this->db->query('SELECT idprivacion, folio, idintegrante, estadointegrante, nombreintegrante, edad, sexo, totalintegrantes, cantidadcuartos, integrantesporcuarto, fecharegistroDIP, totalintegrantesfolio, totalcantidadcuartos, totalintegrantesporcuarto, colorprivacionDIP, colorprivacionPFP, fecharegistroPFP, sincronizado, now() as fechasincro FROM t5_privacion15intermedia where sincronizado = 0;');$resultado = $query->result();$query->next_result(); $query->free_result(); return $resultado;   }
public function fm_privacionesintermedia15ok(){ $query = $this->db->query('call spsubidaprivacionintermedia15();');$resultado = $query->result();$query->next_result(); $query->free_result(); return $resultado;    }
public function fm_privacionesintermedia16(){ $query = $this->db->query('SELECT idprivacion, folio, idintegrante, estadointegrante, nombreintegrante, edad, sexo, fecharegistroDIP, totalintegrantes, gananciaempleo, horasextras, especiesporpago, ganacianetapornegocio, ganosegundoempleo, pagosarriendos, pagospensiones, pagospensionalimentaria, subsidioalimentacion, subsidiotransporte, subsidiofamiliar, subsidioeducativo, actividadesquerealiza, dinerodepersonasresidentesenelpais, dinerodepersonasresidentesfueradelpais, dinerodeinstituciones, dinerodividendosporinversiones, dinerocesantias, dinerofuentesdiferentes, primaviaticos, totalmensual, totalanual, totalanualmes, indicetradicionalingreso, colorprivacionDIP, colorprivacionPFP, fecharegistroPFP, sincronizado, now() as fechasincro FROM t5_privacion16intermedia where sincronizado = 0;');$resultado = $query->result();$query->next_result(); $query->free_result(); return $resultado;   }
public function fm_privacionesintermedia16ok(){ $query = $this->db->query('call spsubidaprivacionintermedia16();');$resultado = $query->result();$query->next_result(); $query->free_result(); return $resultado;    }

   
   public function fm_privacionesintermediaipm(){ $query = $this->db->query('SELECT folio, idintegrante, estadointegrante, nombreintegrante, edad, sexo, fecharegistroIPM, bajologroeducativo, analfabetismo, inasistenciaescolar, rezagoescolar, barrerasdeaccesoprimerainfancia, trabajoinfantil, desempleodelargaduracion, empleoinformal, sinaseguramientoensalud, sinaccesoaserviciodesalud, Sinaccesoafuentedeaguamejorada, inadecuadaeliminaciondeexcretas, pisosinadecuados, paredesexterioresinadecuada, hacinamientocritico, indicetradicionalingreso, totalIPM, casillamatriz, sincronizado,now() as fechasincro FROM t5_ipmintermedia where sincronizado = 0');$resultado = $query->result();$query->next_result(); $query->free_result(); return $resultado;   }
   public function fm_privacionesintermediaipmok(){ $query = $this->db->query('call spsubidat5_ipmintermedia();');$resultado = $query->result();$query->next_result(); $query->free_result(); return $resultado;    }
   


     public function fm_privacionesintermediad1(){
        
        $query = $this->db->query('call sp5realizartodasprivacionesservidordintermedia1();');
        $resultado = $query->result();
        $query->next_result(); 
        $query->free_result(); 
        return $resultado;   
     }
     public function fm_privacionesintermediad2(){
        
        $query = $this->db->query('call sp5realizartodasprivacionesservidordintermedia2();');
        $resultado = $query->result();
        $query->next_result(); 
        $query->free_result(); 
        return $resultado;   
     }
     public function fm_privacionesintermediad3(){
        
        $query = $this->db->query('call sp5realizartodasprivacionesservidordintermedia3();');
        $resultado = $query->result();
        $query->next_result(); 
        $query->free_result(); 
        return $resultado;   
     }
     public function fm_privacionesintermediad4(){
        
        $query = $this->db->query('call sp5realizartodasprivacionesservidordintermedia4();');
        $resultado = $query->result();
        $query->next_result(); 
        $query->free_result(); 
        return $resultado;   
     }
     public function fm_privacionesintermediad5(){
        
        $query = $this->db->query('call sp5realizartodasprivacionesservidordintermedia5();');
        $resultado = $query->result();
        $query->next_result(); 
        $query->free_result(); 
        return $resultado;   
     }
     public function fm_privacionesintermediad6(){
        
        $query = $this->db->query('call sp5realizartodasprivacionesservidordintermedia6();');
        $resultado = $query->result();
        $query->next_result(); 
        $query->free_result(); 
        return $resultado;   
     }
     public function fm_privacionesintermediad7(){
        
        $query = $this->db->query('call sp5realizartodasprivacionesservidordintermedia7();');
        $resultado = $query->result();
        $query->next_result(); 
        $query->free_result(); 
        return $resultado;   
     }
     public function fm_privacionesintermediad8(){
        
        $query = $this->db->query('call sp5realizartodasprivacionesservidordintermedia8();');
        $resultado = $query->result();
        $query->next_result(); 
        $query->free_result(); 
        return $resultado;   
     }
     public function fm_privacionesintermediad9(){
        
        $query = $this->db->query('call sp5realizartodasprivacionesservidordintermedia9();');
        $resultado = $query->result();
        $query->next_result(); 
        $query->free_result(); 
        return $resultado;   
     }
     public function fm_privacionesintermediad10(){
        
        $query = $this->db->query('call sp5realizartodasprivacionesservidordintermedia10();');
        $resultado = $query->result();
        $query->next_result(); 
        $query->free_result(); 
        return $resultado;   
     }
     public function fm_privacionesintermediad11(){
        
        $query = $this->db->query('call sp5realizartodasprivacionesservidordintermedia11();');
        $resultado = $query->result();
        $query->next_result(); 
        $query->free_result(); 
        return $resultado;   
     }
     public function fm_privacionesintermediad12(){
        
        $query = $this->db->query('call sp5realizartodasprivacionesservidordintermedia12();');
        $resultado = $query->result();
        $query->next_result(); 
        $query->free_result(); 
        return $resultado;   
     }
     public function fm_privacionesintermediad13(){
        
        $query = $this->db->query('call sp5realizartodasprivacionesservidordintermedia13();');
        $resultado = $query->result();
        $query->next_result(); 
        $query->free_result(); 
        return $resultado;   
     }
     public function fm_privacionesintermediad14(){
        
        $query = $this->db->query('call sp5realizartodasprivacionesservidordintermedia14();');
        $resultado = $query->result();
        $query->next_result(); 
        $query->free_result(); 
        return $resultado;   
     }
     public function fm_privacionesintermediad15(){
        
        $query = $this->db->query('call sp5realizartodasprivacionesservidordintermedia15();');
        $resultado = $query->result();
        $query->next_result(); 
        $query->free_result(); 
        return $resultado;   
     }
     public function fm_privacionesintermediad16(){
        
        $query = $this->db->query('call sp5realizartodasprivacionesservidordintermedia16();');
        $resultado = $query->result();
        $query->next_result(); 
        $query->free_result(); 
        return $resultado;   
     }
     public function fm_ipmservidordintermediasub(){
        
        $query = $this->db->query('call sp5ipmservidordintermediasub();');
        $resultado = $query->result();
        $query->next_result(); 
        $query->free_result(); 
        return $resultado;   
     }

     public function fm_tablasintermediabajadac11(){
        
        $query = $this->db->query('call sp37_sincronizarbajadaintermediac11();');
        $resultado = $query->result();
        $query->next_result(); 
        $query->free_result(); 
        return $resultado;   
     }
     public function fm_tablasintermediabajadac2(){
        
        $query = $this->db->query('call sp37_sincronizarbajadaintermediac2();');
        $resultado = $query->result();
        $query->next_result(); 
        $query->free_result(); 
        return $resultado;   
     }
     public function fm_tablasintermediabajadac5(){
        
        $query = $this->db->query('call sp37_sincronizarbajadaintermediac5();');
        $resultado = $query->result();
        $query->next_result(); 
        $query->free_result(); 
        return $resultado;   
     } 
     public function fm_tablasintermediabajadac6(){
        
        $query = $this->db->query('call sp37_sincronizarbajadaintermediac6();');
        $resultado = $query->result();
        $query->next_result(); 
        $query->free_result(); 
        return $resultado;   
     }
     public function fm_tablasintermediabajadac7(){
        
        $query = $this->db->query('call sp37_sincronizarbajadaintermediac7();');
        $resultado = $query->result();
        $query->next_result(); 
        $query->free_result(); 
        return $resultado;   
     }
     public function fm_tablasintermediabajadac8(){
        
        $query = $this->db->query('call sp37_sincronizarbajadaintermediac8();');
        $resultado = $query->result();
        $query->next_result(); 
        $query->free_result(); 
        return $resultado;   
     }
     public function fm_tablasintermediabajadac9(){
        
        $query = $this->db->query('call sp37_sincronizarbajadaintermediac9();');
        $resultado = $query->result();
        $query->next_result(); 
        $query->free_result(); 
        return $resultado;   
     }
     public function fm_sincronizarbajadaintermediahistc11(){
        
        $query = $this->db->query('call sp37_sincronizarbajadaintermediahistc11();');
        $resultado = $query->result();
        $query->next_result(); 
        $query->free_result(); 
        return $resultado;   
     }
     public function fm_sincronizarbajadaintermediahistc2(){
        
        $query = $this->db->query('call sp37_sincronizarbajadaintermediahistc2();');
        $resultado = $query->result();
        $query->next_result(); 
        $query->free_result(); 
        return $resultado;   
     }
     public function fm_sincronizarbajadaintermediahistc5(){
        
        $query = $this->db->query('call sp37_sincronizarbajadaintermediahistc5();');
        $resultado = $query->result();
        $query->next_result(); 
        $query->free_result(); 
        return $resultado;   
     }
     public function fm_sincronizarbajadaintermediahistc6(){
        
        $query = $this->db->query('call sp37_sincronizarbajadaintermediahistc6();');
        $resultado = $query->result();
        $query->next_result(); 
        $query->free_result(); 
        return $resultado;   
     }
     public function fm_sincronizarbajadaintermediahistc7(){
        
        $query = $this->db->query('call sp37_sincronizarbajadaintermediahistc7();');
        $resultado = $query->result();
        $query->next_result(); 
        $query->free_result(); 
        return $resultado;   
     }
     public function fm_sincronizarbajadaintermediahistc8(){
        
        $query = $this->db->query('call sp37_sincronizarbajadaintermediahistc8();');
        $resultado = $query->result();
        $query->next_result(); 
        $query->free_result(); 
        return $resultado;   
     }
     public function fm_sincronizarbajadaintermediahistc9(){
        
        $query = $this->db->query('call sp37_sincronizarbajadaintermediahistc9();');
        $resultado = $query->result();
        $query->next_result(); 
        $query->free_result(); 
        return $resultado;   
     }
     public function fm_sincronizacionintegrantesintermedia_historicodint(){
        
        $query = $this->db->query('call sp37_sincronizacionintegrantesintermedia_historicodint();');
        $resultado = $query->result();
        $query->next_result(); 
        $query->free_result(); 
        return $resultado;   
     }
     public function fm_privacion10intermediaservidor_historicod10(){
        
        $query = $this->db->query('call sp5privacion10intermediaservidor_historicod10();');
        $resultado = $query->result();
        $query->next_result(); 
        $query->free_result(); 
        return $resultado;   
     }
     public function fm_privacion11intermediaservidor_historicod11(){
        
        $query = $this->db->query('call sp5privacion11intermediaservidor_historicod11();');
        $resultado = $query->result();
        $query->next_result(); 
        $query->free_result(); 
        return $resultado;   
     }
     public function fm_privacion12intermediaservidor_historicod12(){
        
        $query = $this->db->query('call sp5privacion12intermediaservidor_historicod12();');
        $resultado = $query->result();
        $query->next_result(); 
        $query->free_result(); 
        return $resultado;   
     }
     public function fm_privacion13intermediaservidor_historicod13(){
        
        $query = $this->db->query('call sp5privacion13intermediaservidor_historicod13();');
        $resultado = $query->result();
        $query->next_result(); 
        $query->free_result(); 
        return $resultado;   
     }
     public function fm_privacion14intermediaservidor_historicod14(){
        
        $query = $this->db->query('call sp5privacion14intermediaservidor_historicod14();');
        $resultado = $query->result();
        $query->next_result(); 
        $query->free_result(); 
        return $resultado;   
     }
     public function fm_privacion15intermediaservidor_historicod15(){
        
        $query = $this->db->query('call sp5privacion15intermediaservidor_historicod15();');
        $resultado = $query->result();
        $query->next_result(); 
        $query->free_result(); 
        return $resultado;   
     }
     public function fm_privacion16intermediaservidor_historicod16(){
        
        $query = $this->db->query('call sp5privacion16intermediaservidor_historicod16();');
        $resultado = $query->result();
        $query->next_result(); 
        $query->free_result(); 
        return $resultado;   
     }
     public function fm_privacion1intermediaservidor_historicod1(){
        
        $query = $this->db->query('call sp5privacion1intermediaservidor_historicod1();');
        $resultado = $query->result();
        $query->next_result(); 
        $query->free_result(); 
        return $resultado;   
     }
     public function fm_privacion2intermediaservidor_historicod2(){
        
        $query = $this->db->query('call sp5privacion2intermediaservidor_historicod2();');
        $resultado = $query->result();
        $query->next_result(); 
        $query->free_result(); 
        return $resultado;   
     }
     public function fm_privacion3intermediaservidor_historicod3(){
        
        $query = $this->db->query('call sp5privacion3intermediaservidor_historicod3();');
        $resultado = $query->result();
        $query->next_result(); 
        $query->free_result(); 
        return $resultado;   
     }
     public function fm_privacion4intermediaservidor_historicod4(){
        
        $query = $this->db->query('call sp5privacion4intermediaservidor_historicod4();');
        $resultado = $query->result();
        $query->next_result(); 
        $query->free_result(); 
        return $resultado;   
     }
     public function fm_ipmintermediaservidor_historicod(){
        
      $query = $this->db->query('call sp5ipmservidordintermedia_historico();');
      $resultado = $query->result();
      $query->next_result(); 
      $query->free_result(); 
      return $resultado;   
   }
     public function fm_privacion5intermediaservidor_historicod5(){
        
        $query = $this->db->query('call sp5privacion5intermediaservidor_historicod5();');
        $resultado = $query->result();
        $query->next_result(); 
        $query->free_result(); 
        return $resultado;   
     }
     public function fm_privacion6intermediaservidor_historicod6(){
        
        $query = $this->db->query('call sp5privacion6intermediaservidor_historicod6();');
        $resultado = $query->result();
        $query->next_result(); 
        $query->free_result(); 
        return $resultado;   
     }
     public function fm_privacion7intermediaservidor_historicod7(){
        
        $query = $this->db->query('call sp5privacion7intermediaservidor_historicod7();');
        $resultado = $query->result();
        $query->next_result(); 
        $query->free_result(); 
        return $resultado;   
     }
     public function fm_privacion8intermediaservidor_historicod8(){
        
        $query = $this->db->query('call sp5privacion8intermediaservidor_historicod8();');
        $resultado = $query->result();
        $query->next_result(); 
        $query->free_result(); 
        return $resultado;   
     }
     public function fm_privacion9intermediaservidor_historicod9(){
        
        $query = $this->db->query('call sp5privacion9intermediaservidor_historicod9();');
        $resultado = $query->result();
        $query->next_result(); 
        $query->free_result(); 
        return $resultado;   
     }
     public function fm_sincronizarprotocoloestacionestado_intermedia_historicod1(){
        
        $query = $this->db->query('call sincronizarprotocoloestacionestado_intermedia_historicod1();');
        $resultado = $query->result();
        $query->next_result(); 
        $query->free_result(); 
        return $resultado;   
     }
     public function fm_sincronizarprotocolopasosestado_intermedia_historicod1(){
        
        $query = $this->db->query('call sincronizarprotocolopasosestado_intermedia_historicod1();');
        $resultado = $query->result();
        $query->next_result(); 
        $query->free_result(); 
        return $resultado;   
     }
	 public function fm_encuadreservidord(){
        
        $query = $this->db->query('call sp0encuadreservidord();');
        $resultado = $query->result();
        $query->next_result(); 
        $query->free_result(); 
        return $resultado;   
     }

     public function fm_informaciongeneralvisitasservidord(){
        
      $query = $this->db->query('call sp0informaciongeneralvisitasservidord();');
      $resultado = $query->result();
      $query->next_result(); 
      $query->free_result(); 
      return $resultado;   
   }

   public function fm_informaciongeneralvisitas_historicod(){
        
      $query = $this->db->query('call sp0informaciongeneralvisitas_historicod();');
      $resultado = $query->result();
      $query->next_result(); 
      $query->free_result(); 
      return $resultado;   
   }

   public function fm_informaciongeneralvisitas_aed(){
        
      $query = $this->db->query('call sp0informaciongeneralvisitas_aed();');
      $resultado = $query->result();
      $query->next_result(); 
      $query->free_result(); 
      return $resultado;   
   }




public function fm_tablasintermediasubidac2(){ $query = $this->db->query('SELECT folio, c2p1intermedia, c2p1intermediacual, c2p2intermedia, c2p5intermedia, c2p7intermediao1, c2p7intermediao2, c2p7intermediao3, c2p7intermediao4, c2p7intermediao5, c2p7intermediao6, c2p8intermedia, c2p9intermedia, c2p11intermedia, fechaactualizacion, sincro,  now() as fechasincro FROM t2_capitulo2intermedia  where sincro = 0;');$resultado = $query->result();$query->next_result(); $query->free_result(); return $resultado;   }
public function fm_tablasintermediasubidac2ok(){ $query = $this->db->query('call spsubidatintermedia2();');$resultado = $query->result();$query->next_result(); $query->free_result(); return $resultado;    }
public function fm_tablasintermediasubidac5(){ $query = $this->db->query('SELECT folio, idintegrante, c5p1intermedia, c5pextraintermedia, fechaactualizacion, sincro,  now() as fechasincro FROM t2_capitulo5intermedia  where sincro = 0;');$resultado = $query->result();$query->next_result(); $query->free_result(); return $resultado;   }
public function fm_tablasintermediasubidac5ok(){ $query = $this->db->query('call spsubidatintermedia5();');$resultado = $query->result();$query->next_result(); $query->free_result(); return $resultado;    }
public function fm_tablasintermediasubidac6(){ $query = $this->db->query('SELECT   folio, c6p10intermedia, c6p11intermedia, c6p12intermedia, c6p13intermedia, c6p14intermedia, c6p15intermedia, fechaactualizacion, sincro,now() as fechasincro FROM t2_capitulo6intermedia where sincro = 0;');$resultado = $query->result();$query->next_result(); $query->free_result(); return $resultado;   }
public function fm_tablasintermediasubidac6ok(){ $query = $this->db->query('call spsubidatintermedia6();');$resultado = $query->result();$query->next_result(); $query->free_result(); return $resultado;    }
public function fm_tablasintermediasubidac7(){ $query = $this->db->query('SELECT  folio, idintegrante, c7p1intermedia, fechaactualizacion, sincro, now() as fechasincro FROM t2_capitulo7intermedia  where sincro = 0;');$resultado = $query->result();$query->next_result(); $query->free_result(); return $resultado;   }
public function fm_tablasintermediasubidac7ok(){ $query = $this->db->query('call spsubidatintermedia7();');$resultado = $query->result();$query->next_result(); $query->free_result(); return $resultado;    }
public function fm_tablasintermediasubidac8(){ $query = $this->db->query('SELECT folio, idintegrante, c8p1intermedia, c8p2intermedia, c8p2gradointermedia, c8p3intermedia, c8p4intermedia, fechaactualizacion, sincro,  now() as fechasincro FROM t2_capitulo8intermedia  where sincro = 0;');$resultado = $query->result();$query->next_result(); $query->free_result(); return $resultado;   }
public function fm_tablasintermediasubidac8ok(){ $query = $this->db->query('call spsubidatintermedia8();');$resultado = $query->result();$query->next_result(); $query->free_result(); return $resultado;    }
public function fm_tablasintermediasubidac9(){ $query = $this->db->query('SELECT folio, idintegrante, c9p3intermedia, c9p3intermediacual, c9p4intermedia, c9p7intermedia, c9p8intermedia, c9p8intermediacual, c9p10intermedia, c9p11intermedia, c9p11intermediacuanto, c9p11intermediaincluyo, c9p12intermediao1, c9p12intermediao2, c9p12intermediao3, c9p12intermediao4, c9p12intermediacuanto, c9p13intermediao1, c9p13intermediao2, c9p13intermediao3, c9p13intermediacuanto, c9p14intermediao1, c9p14intermediao2, c9p14intermediao3, c9p14intermediao4, c9p14intermediacuanto, c9p16intermedia, c9p19intermedia, c9p20intermedia, c9p21intermedia, c9p23intermedia, c9p24intermedia, c9p25intermedia, c9p26intermedia, c9p27intermediao1, c9p27intermediao1cuanto, c9p27intermediao2, c9p27intermediao2cuanto, c9p27intermediao3, c9p27intermediao3cuanto, c9p28intermediao1, c9p28intermediao1cuanto, c9p28intermediao2, c9p28intermediao2cuanto, c9p28intermediao3, c9p28intermediao3cuanto, c9p28intermediao4, c9p28intermediao4cuanto, c9p28intermediao5, c9p28intermediao5cuanto, c9p28intermediao6, c9p28intermediao6cuanto, c9p28intermediao7, c9p29intermediao1, c9p29intermediao1cuanto, c9p29intermediao2, c9p29intermediao2cuanto, c9p29intermediao3, c9p29intermediao3cuanto, c9p29intermediao4, c9p29intermediao4cuanto, c9p29intermediao5, c9p30intermedia, c9p31intermedia, c9p32intermedia, c9p32intermediacual, c9p33intermedia, c9p34intermedia, c9p35intermediao1, c9p35intermediao2, c9p35intermediao3, c9p35intermediao4, c9p35intermediao5, c9p35intermediao6, c9p35intermediao7, c9p35intermediao7cual, c9p35intermediao8, c9p35intermediao9, c9p36intermediao1, c9p36intermediao2, c9p36intermediao3, c9p36intermediao4, c9p36intermediao5, c9p36intermediao6, c9p36intermediao7, c9p36intermediao8,c9p36intermediao8cual, c9p37intermediao1, c9p37intermediao2, c9p37intermediao3, c9p37intermediao4, c9p37intermediao5, c9p37intermediao6, c9p37intermediao7, c9p37intermediao8, c9p37intermediao9, c9p37intermediao10, c9p37intermediao11, c9p37intermediacual, c9p38intermediao1, c9p38intermediao2, c9p38intermediao3, c9p38intermediao4, c9p38intermediao5, c9p38intermediao6, c9p38intermediao7, c9p38intermediao8, c9p38intermediao9, c9p38intermediao10, c9p38intermediacual, c9p39intermediao1, c9p39intermediao2, c9p39intermediao3, c9p39intermediao4, c9p39intermediao5, c9p39intermediao6, c9p39intermediao7, c9p39intermediao8, c9p39intermediacual, c9p40intermedia, c9p41intermedia, c9p42intermediao1, c9p42intermediao2, c9p42intermediao3, c9p42intermediao4, c9p42intermediao5, c9p42intermediacual, c9p43intermedia, sincro, fechasincro,  now() as fechasincro FROM t2_capitulo9intermedia  where sincro = 0;');$resultado = $query->result();$query->next_result(); $query->free_result(); return $resultado;   }
public function fm_tablasintermediasubidac9ok(){ $query = $this->db->query('call spsubidatintermedia9();');$resultado = $query->result();$query->next_result(); $query->free_result(); return $resultado;    }
public function fm_tablasintermediasubidac11(){ $query = $this->db->query('SELECT folio, c11p11intermediao1, c11p11intermediao2, c11p11intermediao3, c11p11intermediao4, c11p11intermediao5, c11p11intermediao6, c11p11intermediao7, c11p11intermediao8, c11p11intermediao9, c11p11intermediao10, c11p11intermediao11, c11p11intermediao12, c11p11intermediao13, c11p11intermediao14, c11p11intermediao15, c11p11intermediacual, fechaactualizacion, sincro,  now() as fechasincro FROM t2_capitulo11intermedia  where sincro = 0;');$resultado = $query->result();$query->next_result(); $query->free_result(); return $resultado;   }
public function fm_tablasintermediasubidac11ok(){ $query = $this->db->query('call spsubidatintermedia11();');$resultado = $query->result();$query->next_result(); $query->free_result(); return $resultado;    }





   public function fm_tablasintermediasubidainteg(){ $query = $this->db->query('SELECT folio, idintegrante, fecharegistro, sincro,  now() as fechasincro, documento_cogestor FROM t1_principalintegrantes_intermedia  where sincro = 0;');$resultado = $query->result();$query->next_result(); $query->free_result(); return $resultado;   }
   public function fm_tablasintermediasubidaintegok(){ $query = $this->db->query('call spsubidatintermediaintegrantes();');$resultado = $query->result();$query->next_result(); $query->free_result(); return $resultado;    }
   

  
   
     public function fm_sincronizacionusuariosincronizado(){
        
        $query = $this->db->query('SELECT documento as doccogestor, now() as fechasincronizacion FROM t_usuarioprotocolo;');
        $resultado = $query->result();
        $query->next_result(); 
        $query->free_result(); 
        return $resultado;   
     }
     //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


     public function fm_sincronizarsubidaintermediahistc11(){ $query = $this->db->query('SELECT  folio, c11p11intermediao1, c11p11intermediao2, c11p11intermediao3, c11p11intermediao4, c11p11intermediao5, c11p11intermediao6, c11p11intermediao7, c11p11intermediao8, c11p11intermediao9, c11p11intermediao10, c11p11intermediao11, c11p11intermediao12, c11p11intermediao13, c11p11intermediao14, c11p11intermediao15, c11p11intermediacual, fechaactualizacion, sincro, now() as fechasincro FROM t2_capitulo11intermedia_historico  where sincro = 0;');$resultado = $query->result();$query->next_result(); $query->free_result(); return $resultado;   }
     public function fm_sincronizarsubidaintermediahistc11ok(){ $query = $this->db->query('call spsubidatintermediahistc11();');$resultado = $query->result();$query->next_result(); $query->free_result(); return $resultado;    }
     public function fm_sincronizarsubidaintermediahistc2(){ $query = $this->db->query('SELECT  folio, c2p1intermedia, c2p1intermediacual, c2p2intermedia, c2p5intermedia, c2p7intermediao1, c2p7intermediao2, c2p7intermediao3, c2p7intermediao4, c2p7intermediao5, c2p7intermediao6, c2p8intermedia, c2p9intermedia, c2p11intermedia, fechaactualizacion, sincro, now() as fechasincro FROM t2_capitulo2intermedia_historico  where sincro = 0;');$resultado = $query->result();$query->next_result(); $query->free_result(); return $resultado;   }
     public function fm_sincronizarsubidaintermediahistc2ok(){ $query = $this->db->query('call spsubidatintermediahistc2();');$resultado = $query->result();$query->next_result(); $query->free_result(); return $resultado;    }
     public function fm_sincronizarsubidaintermediahistc5(){ $query = $this->db->query('SELECT folio, idintegrante, c5p1intermedia, c5pextraintermedia, fechaactualizacion, sincro,  now() as fechasincro FROM t2_capitulo5intermedia_historico  where sincro = 0;');$resultado = $query->result();$query->next_result(); $query->free_result(); return $resultado;   }
     public function fm_sincronizarsubidaintermediahistc5ok(){ $query = $this->db->query('call spsubidatintermediahistc5();');$resultado = $query->result();$query->next_result(); $query->free_result(); return $resultado;    }
     public function fm_sincronizarsubidaintermediahistc6(){ $query = $this->db->query('SELECT folio, c6p10intermedia, c6p11intermedia, c6p12intermedia, c6p13intermedia, c6p14intermedia, c6p15intermedia, fechaactualizacion, sincro,  now() as fechasincro FROM t2_capitulo6intermedia_historico  where sincro = 0;');$resultado = $query->result();$query->next_result(); $query->free_result(); return $resultado;   }
     public function fm_sincronizarsubidaintermediahistc6ok(){ $query = $this->db->query('call spsubidatintermediahistc6();');$resultado = $query->result();$query->next_result(); $query->free_result(); return $resultado;    }
     public function fm_sincronizarsubidaintermediahistc7(){ $query = $this->db->query('SELECT folio, idintegrante, c7p1intermedia, fechaactualizacion, sincro,  now() as fechasincro FROM t2_capitulo7intermedia_historico  where sincro = 0;');$resultado = $query->result();$query->next_result(); $query->free_result(); return $resultado;   }
     public function fm_sincronizarsubidaintermediahistc7ok(){ $query = $this->db->query('call spsubidatintermediahistc7();');$resultado = $query->result();$query->next_result(); $query->free_result(); return $resultado;    }
     public function fm_sincronizarsubidaintermediahistc8(){ $query = $this->db->query('SELECT folio, idintegrante, c8p1intermedia, c8p2intermedia, c8p2gradointermedia, c8p3intermedia, c8p4intermedia, fechaactualizacion, sincro,  now() as fechasincro FROM t2_capitulo8intermedia_historico  where sincro = 0;');$resultado = $query->result();$query->next_result(); $query->free_result(); return $resultado;   }
     public function fm_sincronizarsubidaintermediahistc8ok(){ $query = $this->db->query('call spsubidatintermediahistc8();');$resultado = $query->result();$query->next_result(); $query->free_result(); return $resultado;    }
     public function fm_sincronizarsubidaintermediahistc9(){ $query = $this->db->query('SELECT folio, idintegrante, c9p3intermedia, c9p3intermediacual, c9p4intermedia, c9p7intermedia, c9p8intermedia, c9p8intermediacual, c9p10intermedia, c9p11intermedia, c9p11intermediacuanto, c9p11intermediaincluyo, c9p12intermediao1, c9p12intermediao2, c9p12intermediao3, c9p12intermediao4, c9p12intermediacuanto, c9p13intermediao1, c9p13intermediao2, c9p13intermediao3, c9p13intermediacuanto, c9p14intermediao1, c9p14intermediao2, c9p14intermediao3, c9p14intermediao4, c9p14intermediacuanto, c9p16intermedia, c9p19intermedia, c9p20intermedia, c9p21intermedia, c9p23intermedia, c9p24intermedia, c9p25intermedia, c9p26intermedia, c9p27intermediao1, c9p27intermediao1cuanto, c9p27intermediao2, c9p27intermediao2cuanto, c9p27intermediao3, c9p27intermediao3cuanto, c9p28intermediao1, c9p28intermediao1cuanto, c9p28intermediao2, c9p28intermediao2cuanto, c9p28intermediao3, c9p28intermediao3cuanto, c9p28intermediao4, c9p28intermediao4cuanto, c9p28intermediao5, c9p28intermediao5cuanto, c9p28intermediao6, c9p28intermediao6cuanto, c9p28intermediao7, c9p29intermediao1, c9p29intermediao1cuanto, c9p29intermediao2, c9p29intermediao2cuanto, c9p29intermediao3, c9p29intermediao3cuanto, c9p29intermediao4, c9p29intermediao4cuanto, c9p29intermediao5, c9p30intermedia, c9p31intermedia, c9p32intermedia, c9p32intermediacual, c9p33intermedia, c9p34intermedia, c9p35intermediao1, c9p35intermediao2, c9p35intermediao3, c9p35intermediao4, c9p35intermediao5, c9p35intermediao6, c9p35intermediao7, c9p35intermediao7cual, c9p35intermediao8, c9p35intermediao9, c9p36intermediao1, c9p36intermediao2, c9p36intermediao3, c9p36intermediao4, c9p36intermediao5, c9p36intermediao6, c9p36intermediao7, c9p36intermediao8,c9p36intermediao8cual, c9p37intermediao1, c9p37intermediao2, c9p37intermediao3, c9p37intermediao4, c9p37intermediao5, c9p37intermediao6, c9p37intermediao7, c9p37intermediao8, c9p37intermediao9, c9p37intermediao10, c9p37intermediao11, c9p37intermediacual, c9p38intermediao1, c9p38intermediao2, c9p38intermediao3, c9p38intermediao4, c9p38intermediao5, c9p38intermediao6, c9p38intermediao7, c9p38intermediao8, c9p38intermediao9, c9p38intermediao10, c9p38intermediacual, c9p39intermediao1, c9p39intermediao2, c9p39intermediao3, c9p39intermediao4, c9p39intermediao5, c9p39intermediao6, c9p39intermediao7, c9p39intermediao8, c9p39intermediacual, c9p40intermedia, c9p41intermedia, c9p42intermediao1, c9p42intermediao2, c9p42intermediao3, c9p42intermediao4, c9p42intermediao5, c9p42intermediacual, c9p43intermedia, sincro,  now() as fechasincro, fechaactualizacion FROM t2_capitulo9intermedia_historico  where sincro = 0;');$resultado = $query->result();$query->next_result(); $query->free_result(); return $resultado;   }
     public function fm_sincronizarsubidaintermediahistc9ok(){ $query = $this->db->query('call spsubidatintermediahistc9();');$resultado = $query->result();$query->next_result(); $query->free_result(); return $resultado;    }
 


     public function fm_sincronizacionintegrantesintermedia_historicosub(){ $query = $this->db->query('SELECT folio , idintegrante , fecharegistro , sincro , now() as fechasincro , documento_cogestor FROM t1_principalintegrantes_intermedia_historico where sincro = 0');$resultado = $query->result();$query->next_result(); $query->free_result(); return $resultado;   }
     public function fm_sincronizacionintegrantesintermedia_historicosubok(){ $query = $this->db->query('call spsubidat1_principalintegrantes_intermedia_historico();');$resultado = $query->result();$query->next_result(); $query->free_result(); return $resultado;    }





     public function fm_sp5privacion16intermediaservidor_historico(){ $query = $this->db->query('SELECT  idprivacion, folio, idintegrante, estadointegrante, nombreintegrante, edad, sexo, fecharegistroDIP, totalintegrantes, gananciaempleo, horasextras, especiesporpago, ganacianetapornegocio, ganosegundoempleo, pagosarriendos, pagospensiones, pagospensionalimentaria, subsidioalimentacion, subsidiotransporte, subsidiofamiliar, subsidioeducativo, actividadesquerealiza, dinerodepersonasresidentesenelpais, dinerodepersonasresidentesfueradelpais, dinerodeinstituciones, dinerodividendosporinversiones, dinerocesantias, dinerofuentesdiferentes, primaviaticos, totalmensual, totalanual, totalanualmes, indicetradicionalingreso, colorprivacionDIP, colorprivacionPFP, fecharegistroPFP, sincronizado, now() as fechasincro FROM t5_privacion16intermedia_historico where sincronizado = 0;');$resultado = $query->result();$query->next_result(); $query->free_result(); return $resultado;   }
     public function fm_sp5privacion16intermediaservidor_historicook(){ $query = $this->db->query('call spsubidaprivacionintermedia16();');$resultado = $query->result();$query->next_result(); $query->free_result(); return $resultado;    }
     public function fm_sp5privacion15intermediaservidor_historico(){ $query = $this->db->query('SELECT  idprivacion, folio, idintegrante, estadointegrante, nombreintegrante, edad, sexo, totalintegrantes, cantidadcuartos, integrantesporcuarto, fecharegistroDIP, totalintegrantesfolio, totalcantidadcuartos, totalintegrantesporcuarto, colorprivacionDIP, colorprivacionPFP, fecharegistroPFP, sincronizado, now() as fechasincro FROM t5_privacion15intermedia_historico where sincronizado = 0;');$resultado = $query->result();$query->next_result(); $query->free_result(); return $resultado;   }
     public function fm_sp5privacion15intermediaservidor_historicook(){ $query = $this->db->query('call spsubidaprivacionintermedia15();');$resultado = $query->result();$query->next_result(); $query->free_result(); return $resultado;    }
     public function fm_sp5privacion14intermediaservidor_historico(){ $query = $this->db->query('SELECT  idprivacion, folio, idintegrante, estadointegrante, nombreintegrante, edad, sexo, c2p2intermedia, fecharegistroDIP, materialpredominanteparedesexteriores, colorprivacionDIP, colorprivacionPFP, fecharegistroPFP, sincronizado, now() as fechasincro FROM t5_privacion14intermedia_historico where sincronizado = 0;');$resultado = $query->result();$query->next_result(); $query->free_result(); return $resultado;   }
     public function fm_sp5privacion14intermediaservidor_historicook(){ $query = $this->db->query('call spsubidaprivacionintermedia14();');$resultado = $query->result();$query->next_result(); $query->free_result(); return $resultado;    }
     public function fm_sp5privacion13intermediaservidor_historico(){ $query = $this->db->query('SELECT  idprivacion, folio, idintegrante, estadointegrante, nombreintegrante, edad, sexo, c2p5intermedia, fecharegistroDIP, materialpredominantedelospisos, colorprivacionDIP, colorprivacionPFP, fecharegistroPFP, sincronizado, now() as fechasincro FROM t5_privacion13intermedia_historico where sincronizado = 0;');$resultado = $query->result();$query->next_result(); $query->free_result(); return $resultado;   }
     public function fm_sp5privacion13intermediaservidor_historicook(){ $query = $this->db->query('call spsubidaprivacionintermedia13();');$resultado = $query->result();$query->next_result(); $query->free_result(); return $resultado;    }
     public function fm_sp5privacion12intermediaservidor_historico(){ $query = $this->db->query('SELECT  idprivacion, folio, idintegrante, estadointegrante, nombreintegrante, edad, sexo, c2p7intermediao2, c2p8intermedia, fecharegistroDIP, tienealcantarillado, elserviciosanitarioes, colorprivacionDIP, colorprivacionPFP, fecharegistroPFP, sincronizado, now() as fechasincro FROM t5_privacion12intermedia_historico where sincronizado = 0;');$resultado = $query->result();$query->next_result(); $query->free_result(); return $resultado;   }
     public function fm_sp5privacion12intermediaservidor_historicook(){ $query = $this->db->query('call spsubidaprivacionintermedia12();');$resultado = $query->result();$query->next_result(); $query->free_result(); return $resultado;    }
     public function fm_sp5privacion11intermediaservidor_historico(){ $query = $this->db->query('SELECT  idprivacion, folio, idintegrante, estadointegrante, nombreintegrante, edad, sexo, c2p9intermedia, fecharegistroDIP, aguaparaconsumolaoptienen, colorprivacionDIP, colorprivacionPFP, fecharegistroPFP, sincronizado, now() as fechasincro FROM t5_privacion11intermedia_historico where sincronizado = 0;');$resultado = $query->result();$query->next_result(); $query->free_result(); return $resultado;   }
     public function fm_sp5privacion11intermediaservidor_historicook(){ $query = $this->db->query('call spsubidaprivacionintermedia11();');$resultado = $query->result();$query->next_result(); $query->free_result(); return $resultado;    }
     public function fm_sp5privacion10intermediaservidor_historico(){ $query = $this->db->query('SELECT  idprivacion, folio, idintegrante, estadointegrante, nombreintegrante, edad, sexo, c5pextraintermedia, fecharegistroDIP, quehizoalpresentarproblemasdesalud, colorprivacionDIP, colorprivacionPFP, fecharegistroPFP, sincronizado, now() as fechasincro FROM t5_privacion10intermedia_historico where sincronizado = 0;');$resultado = $query->result();$query->next_result(); $query->free_result(); return $resultado;   }
     public function fm_sp5privacion10intermediaservidor_historicook(){ $query = $this->db->query('call spsubidaprivacionintermedia10();');$resultado = $query->result();$query->next_result(); $query->free_result(); return $resultado;    }
     public function fm_sp5privacion9intermediaservidor_historico(){ $query = $this->db->query('SELECT idprivacion, folio, idintegrante, estadointegrante, nombreintegrante, edad, sexo, c5p1intermedia, fecharegistroDIP, afiliadoseguridadsocialensalud, colorprivacionDIP, colorprivacionPFP, fecharegistroPFP, sincronizado, now() as fechasincro FROM t5_privacion9intermedia_historico where sincronizado = 0;');$resultado = $query->result();$query->next_result(); $query->free_result(); return $resultado;   }
     public function fm_sp5privacion9intermediaservidor_historicook(){ $query = $this->db->query('call spsubidaprivacionintermedia9();');$resultado = $query->result();$query->next_result(); $query->free_result(); return $resultado;    }
     public function fm_sp5privacion8intermediaservidor_historico(){ $query = $this->db->query('SELECT  idprivacion, folio, idintegrante, estadointegrante, nombreintegrante, edad, sexo, c9p19intermedia, c9p20intermedia, fecharegistroDIP, gestionopermisolaboralenministerio, cotizandoactualmentefondopensiones, colorprivacionDIP, colorprivacionPFP, fecharegistroPFP, sincronizado, now() as fechasincro FROM t5_privacion8intermedia_historico where sincronizado = 0;');$resultado = $query->result();$query->next_result(); $query->free_result(); return $resultado;   }
     public function fm_sp5privacion8intermediaservidor_historicook(){ $query = $this->db->query('call spsubidaprivacionintermedia8();');$resultado = $query->result();$query->next_result(); $query->free_result(); return $resultado;    }
     public function fm_sp5privacion7intermediaservidor_historico(){ $query = $this->db->query('SELECT  idprivacion, folio, idintegrante, estadointegrante, nombreintegrante, edad, sexo, c9p24intermedia, c9p27intermediao2, c9p27intermediao2cuanto, fecharegistroDIP, trabajoporlomenos2semanasconsecutivas, pagosporpensionjubilacionvejez, cuantofueelpago, colorprivacionDIP, colorprivacionPFP, fecharegistroPFP, sincronizado, now() as fechasincro FROM t5_privacion7intermedia_historico where sincronizado = 0;');$resultado = $query->result();$query->next_result(); $query->free_result(); return $resultado;   }
     public function fm_sp5privacion7intermediaservidor_historicook(){ $query = $this->db->query('call spsubidaprivacionintermedia7();');$resultado = $query->result();$query->next_result(); $query->free_result(); return $resultado;    }
     public function fm_sp5privacion6intermediaservidor_historico(){ $query = $this->db->query('SELECT  idprivacion, folio, idintegrante, estadointegrante, nombreintegrante, edad, sexo, c9p19intermedia, c9p37intermediao1, c9p37intermediao2, c9p37intermediao3, c9p37intermediao4, c9p37intermediao5, c9p37intermediao6, c9p37intermediao7, c9p37intermediao8, c9p37intermediao9, c9p37intermediao10, c9p37intermediacual, c9p37intermediao11, c9p39intermediao1, c9p39intermediao2, c9p39intermediao3, c9p39intermediao4, c9p39intermediao5, c9p39intermediao6, c9p39intermediao7, c9p39intermediao8, c9p39intermediacual, c9p40intermedia, c11p11intermediao4, fecharegistroDIP, gestionopermisolaboralenministerio, trabajodomestico, trabajoenminas, explotacionsexual, reclutamientoconflictoarmado, microtraficoestuperfaciente, ventashambulantes, reciclaje, trabajoencalle, mendicidad, otra, cual, ninguna, fabricarproductos, ayudaracocinar, venderproductos, llevardomicilios, cultivarlatierra, recolectarcartones, noayudoanadie, otraayuda, cualayuda, cuantotiempoalasemana, trabajoinfantil, colorprivacionDIP, colorprivacionPFP, fecharegistroPFP, sincronizado, now() as fechasincro FROM t5_privacion6intermedia_historico where sincronizado = 0;');$resultado = $query->result();$query->next_result(); $query->free_result(); return $resultado;   }
     public function fm_sp5privacion6intermediaservidor_historicook(){ $query = $this->db->query('call spsubidaprivacionintermedia6();');$resultado = $query->result();$query->next_result(); $query->free_result(); return $resultado;    }
     public function fm_sp5privacion5intermediaservidor_historico(){ $query = $this->db->query('SELECT  idprivacion, folio, idintegrante, estadointegrante, nombreintegrante, edad, sexo, c5p1intermedia, c7p1intermedia, c6p10intermedia, c6p11intermedia, c6p12intermedia, c6p13intermedia, c6p14intermedia, c6p15intermedia, fecharegistroDIP, afiliadoseguridadsocialensalud, dondepermaneceelmenor, jovensinalimentacionnutritiva, jovennopudovariaralimentacion, jovenconalimentaciondisminuida, jovensequejodehambre, jovenseacostoconhambre, jovencomiounasolavez, colorprivacionDIP, colorprivacionPFP, fecharegistroPFP, sincronizado, now() as fechasincro FROM t5_privacion5intermedia_historico where sincronizado = 0;');$resultado = $query->result();$query->next_result(); $query->free_result(); return $resultado;   }
     public function fm_sp5privacion5intermediaservidor_historicook(){ $query = $this->db->query('call spsubidaprivacionintermedia5();');$resultado = $query->result();$query->next_result(); $query->free_result(); return $resultado;    }
     public function fm_sp5privacion4intermediaservidor_historico(){ $query = $this->db->query('SELECT  idprivacion, folio, idintegrante, estadointegrante, nombreintegrante, edad, sexo, c8p2intermedia, c8p2gradointermedia, fecharegistroDIP, ultimogradoaprovado, gradocalculado, colorprivacionDIP, colorprivacionPFP, fecharegistroPFP, sincronizado, now() as fechasincro FROM t5_privacion4intermedia_historico where sincronizado = 0;');$resultado = $query->result();$query->next_result(); $query->free_result(); return $resultado;   }
     public function fm_sp5privacion4intermediaservidor_historicook(){ $query = $this->db->query('call spsubidaprivacionintermedia4();');$resultado = $query->result();$query->next_result(); $query->free_result(); return $resultado;    }
     public function fm_sp5privacion3intermediaservidor_historico(){ $query = $this->db->query('SELECT  idprivacion, folio, idintegrante, estadointegrante, nombreintegrante, edad, sexo, c8p4intermedia, c8p2gradointermedia, fecharegistroDIP, actualmenteestudia, ultimogradoaprovado, colorprivacionDIP, colorprivacionPFP, fecharegistroPFP, sincronizado, now() as fechasincro FROM t5_privacion3intermedia_historico where sincronizado = 0;');$resultado = $query->result();$query->next_result(); $query->free_result(); return $resultado;   }
     public function fm_sp5privacion3intermediaservidor_historicook(){ $query = $this->db->query('call spsubidaprivacionintermedia3();');$resultado = $query->result();$query->next_result(); $query->free_result(); return $resultado;    }
     public function fm_sp5privacion2intermediaservidor_historico(){ $query = $this->db->query('SELECT  idprivacion, folio, idintegrante, estadointegrante, nombreintegrante, edad, sexo, c8p1intermedia, fecharegistroDIP, sabeleeryescribir, colorprivacionDIP, colorprivacionPFP, fecharegistroPFP, sincronizado, now() as fechasincro FROM t5_privacion2intermedia_historico where sincronizado = 0;');$resultado = $query->result();$query->next_result(); $query->free_result(); return $resultado;   }
     public function fm_sp5privacion2intermediaservidor_historicook(){ $query = $this->db->query('call spsubidaprivacionintermedia2();');$resultado = $query->result();$query->next_result(); $query->free_result(); return $resultado;    }
     public function fm_sp5privacion1intermediaservidor_historico(){ $query = $this->db->query('SELECT  idprivacion, folio, idintegrante, estadointegrante, nombreintegrante, edad, sexo, fecharegistroDIP, totalintegrantes, totalgrado, promedioprivacion, colorprivacionDIP, colorprivacionPFP, fecharegistroPFP, sincronizado, now() as fechasincro FROM t5_privacion1intermedia_historico where sincronizado = 0;');$resultado = $query->result();$query->next_result(); $query->free_result(); return $resultado;   }
     public function fm_sp5privacion1intermediaservidor_historicook(){ $query = $this->db->query('call spsubidaprivacionintermedia1();');$resultado = $query->result();$query->next_result(); $query->free_result(); return $resultado;    }
    




   public function fm_sp5ipmintermediaservidor_historico(){ $query = $this->db->query('SELECT folio, idintegrante, estadointegrante, nombreintegrante, edad, sexo, fecharegistroIPM, bajologroeducativo, analfabetismo, inasistenciaescolar, rezagoescolar, barrerasdeaccesoprimerainfancia, trabajoinfantil, desempleodelargaduracion, empleoinformal, sinaseguramientoensalud, sinaccesoaserviciodesalud, Sinaccesoafuentedeaguamejorada, inadecuadaeliminaciondeexcretas, pisosinadecuados, paredesexterioresinadecuada, hacinamientocritico, indicetradicionalingreso, totalIPM, casillamatriz, sincronizado,now() as fechasincro  FROM t5_ipmintermedia_historico where sincronizado = 0');$resultado = $query->result();$query->next_result(); $query->free_result(); return $resultado;   }
   public function fm_sp5ipmintermediaservidor_historicook(){ $query = $this->db->query('call spsubidat5_ipmintermedia_historico();');$resultado = $query->result();$query->next_result(); $query->free_result(); return $resultado;    }







   public function fm_sincronizarprotocoloestacionestado_intermedia_historico(){ $query = $this->db->query('SELECT  folio , idestacion , estado , intermedia , fecharegistro , 0 as sincro , now() as fechasincro FROM t_protocoloestacionestado_intermedia_historico where sincro = 0');$resultado = $query->result();$query->next_result(); $query->free_result(); return $resultado;   }
   public function fm_sincronizarprotocoloestacionestado_intermedia_historicook(){   }
   public function fm_sincronizarprotocolopasosestado_intermedia_historico(){ $query = $this->db->query('SELECT  folio , idpaso , estado , fecharegistro , 0 as sincro , now() as fechasincro FROM t_protocolopasosestado_intermedia_historico where sincro = 0');$resultado = $query->result();$query->next_result(); $query->free_result(); return $resultado;   }
   public function fm_sincronizarprotocolopasosestado_intermedia_historicook(){   }


 

   public function fm_encuadreservidor(){ $query = $this->db->query('SELECT folio, ep1, ep1cual, epetnia, ep2, ep3, ep3cuanto, ep4, ep5, ep5cuanto, ep6, ep6cuanto, ep7, ep7cuanto, ep8, ep8cuanto, ep9, ep9cuanto, ep10, ep10cuanto, ep11, ep13, ep14, ep15, ep16, ep17, ep18, ep19, ep20, ep21, ep22, ep22cual, ep13s, ep14s, ep15s, ep16s, ep17s, ep18s, ep19s, ep20s, ep21s, 
      ep22s, ep22cuals, ep23s, ep24s, ep25s, ep26s, ep27s, ep28s, ep29s, ep30s, ep23, ep24, ep25, ep26, ep27, ep28, ep29, ep30, ep31mr1, ep31mr2, ep31mr3,
      ep31mr4, ep31mr5, ep31mr6, ep32, ep33, fechaactualizacion, 1 as sincro, now() as fechasincro, doccogestor, campo_elimina
      FROM t0_encuadre where sincro = 0;');$resultado = $query->result();$query->next_result(); $query->free_result(); return $resultado;   }
   public function fm_encuadreservidorok(){ $query = $this->db->query('call spsubidat0_encuadre();');$resultado = $query->result();$query->next_result(); $query->free_result(); return $resultado;    }




   public function fm_informaciongeneralvisitasservidor(){ $query = $this->db->query('SELECT id, folio, idestacion, visitaresidencia, visitaresidenciamotivo, fecharegistro, 1 as sincro, now() as fechasincro, doccogestor, campo_elimina FROM t0_informaciongeneralvisitas where sincro = 0;');$resultado = $query->result();$query->next_result(); $query->free_result(); return $resultado;   }
   public function fm_informaciongeneralvisitasservidorok(){ $query = $this->db->query('call spsubidat0_informaciongeneralvisitas();');$resultado = $query->result();$query->next_result(); $query->free_result(); return $resultado;    }
   public function fm_informaciongeneralvisitas_historico(){ $query = $this->db->query('SELECT id, folio, idestacion, visitaresidencia, visitaresidenciamotivo, fecharegistro, 1 as sincro, now() as fechasincro, doccogestor, campo_elimina FROM t0_informaciongeneralvisitas_historico where sincro = 0;');$resultado = $query->result();$query->next_result(); $query->free_result(); return $resultado;   }
   public function fm_informaciongeneralvisitas_historicook(){ $query = $this->db->query('call spsubidat0_informaciongeneralvisitas_historico();');$resultado = $query->result();$query->next_result(); $query->free_result(); return $resultado;    }

   public function fm_informaciongeneralvisitas_ae(){ $query = $this->db->query('SELECT id, folio, idestacion, accioneducativa, accioneducativacual, fecharegistro, 1 as sincro, now() as fechasincro, doccogestor, campo_elimina FROM t0_informaciongeneralvisitas_ae where sincro = 0;');$resultado = $query->result();$query->next_result(); $query->free_result(); return $resultado;   }
   public function fm_informaciongeneralvisitas_aeok(){ $query = $this->db->query('call spsubidat0_informaciongeneralvisitas_ae();');$resultado = $query->result();$query->next_result(); $query->free_result(); return $resultado;    }



//////////////////////////Modelos Cierre//////////////////////

public function fm_ipmintermediaLCV1(){ $query = $this->db->query('SELECT folio, idintegrante, estadointegrante, nombreintegrante, edad, sexo, fecharegistroIPM, bajologroeducativo, analfabetismo, inasistenciaescolar, rezagoescolar, barrerasdeaccesoprimerainfancia, trabajoinfantil, desempleodelargaduracion, empleoinformal, sinaseguramientoensalud, sinaccesoaserviciodesalud, Sinaccesoafuentedeaguamejorada, inadecuadaeliminaciondeexcretas, pisosinadecuados, paredesexterioresinadecuada, hacinamientocritico, indicetradicionalingreso, totalIPM, casillamatriz, 1 as sincronizado, now() as fechasincro FROM t5_ipmintermedialcv1 where sincronizado = 0;');$resultado = $query->result();$query->next_result(); $query->free_result(); return $resultado;   }
public function fm_ipmintermediaLCV1ok(){ $query = $this->db->query('call spsubidat5_ipmintermediaLCV1();');$resultado = $query->result();$query->next_result(); $query->free_result(); return $resultado;    }



   public function fm_privacion16intermediaLCV1(){ $query = $this->db->query('SELECT idprivacion, folio, idintegrante, estadointegrante, nombreintegrante, edad, sexo, fecharegistroDIP, totalintegrantes, gananciaempleo, horasextras, especiesporpago, ganacianetapornegocio, ganosegundoempleo, pagosarriendos, pagospensiones, pagospensionalimentaria, subsidioalimentacion, subsidiotransporte, subsidiofamiliar, subsidioeducativo, actividadesquerealiza, dinerodepersonasresidentesenelpais, dinerodepersonasresidentesfueradelpais, dinerodeinstituciones, dinerodividendosporinversiones, dinerocesantias, dinerofuentesdiferentes, primaviaticos, totalmensual, totalanual, totalanualmes, indicetradicionalingreso, colorprivacionDIP, colorprivacionPFP, fecharegistroPFP, 1 as sincronizado, now() as fechasincro FROM t5_privacion16intermediaLCV1 where sincronizado = 0;');$resultado = $query->result();$query->next_result(); $query->free_result(); return $resultado;   }
   public function fm_privacion16intermediaLCV1ok(){ $query = $this->db->query('call spsubidaprivacionintermedia16LCV1();');$resultado = $query->result();$query->next_result(); $query->free_result(); return $resultado;    }
   public function fm_privacion15intermediaLCV1(){ $query = $this->db->query('SELECT idprivacion, folio, idintegrante, estadointegrante, nombreintegrante, edad, sexo, totalintegrantes, cantidadcuartos, integrantesporcuarto, fecharegistroDIP, totalintegrantesfolio, totalcantidadcuartos, totalintegrantesporcuarto, colorprivacionDIP, colorprivacionPFP, fecharegistroPFP,1 as sincronizado, now() as fechasincro FROM t5_privacion15intermediaLCV1 where sincronizado = 0;');$resultado = $query->result();$query->next_result(); $query->free_result(); return $resultado;   }
   public function fm_privacion15intermediaLCV1ok(){ $query = $this->db->query('call spsubidaprivacionintermedia15LCV1();');$resultado = $query->result();$query->next_result(); $query->free_result(); return $resultado;    }
   public function fm_privacion14intermediaLCV1(){ $query = $this->db->query('SELECT idprivacion, folio, idintegrante, estadointegrante, nombreintegrante, edad, sexo, c2p2intermedia, fecharegistroDIP, materialpredominanteparedesexteriores, colorprivacionDIP, colorprivacionPFP, fecharegistroPFP,1 as sincronizado, now() as fechasincro FROM t5_privacion14intermediaLCV1 where sincronizado = 0;');$resultado = $query->result();$query->next_result(); $query->free_result(); return $resultado;   }
   public function fm_privacion14intermediaLCV1ok(){ $query = $this->db->query('call spsubidaprivacionintermedia14LCV1();');$resultado = $query->result();$query->next_result(); $query->free_result(); return $resultado;    }
   public function fm_privacion13intermediaLCV1(){ $query = $this->db->query('SELECT idprivacion, folio, idintegrante, estadointegrante, nombreintegrante, edad, sexo, c2p5intermedia, fecharegistroDIP, materialpredominantedelospisos, colorprivacionDIP, colorprivacionPFP, fecharegistroPFP,1 as sincronizado, now() as fechasincro FROM t5_privacion13intermediaLCV1 where sincronizado = 0;');$resultado = $query->result();$query->next_result(); $query->free_result(); return $resultado;   }
   public function fm_privacion13intermediaLCV1ok(){ $query = $this->db->query('call spsubidaprivacionintermedia13LCV1();');$resultado = $query->result();$query->next_result(); $query->free_result(); return $resultado;    }
   public function fm_privacion12intermediaLCV1(){ $query = $this->db->query('SELECT idprivacion, folio, idintegrante, estadointegrante, nombreintegrante, edad, sexo, c2p7intermediao2, c2p8intermedia, fecharegistroDIP, tienealcantarillado, elserviciosanitarioes, colorprivacionDIP, colorprivacionPFP, fecharegistroPFP,1 as sincronizado, now() as fechasincro FROM t5_privacion12intermediaLCV1 where sincronizado = 0;');$resultado = $query->result();$query->next_result(); $query->free_result(); return $resultado;   }
   public function fm_privacion12intermediaLCV1ok(){ $query = $this->db->query('call spsubidaprivacionintermedia12LCV1();');$resultado = $query->result();$query->next_result(); $query->free_result(); return $resultado;    }
   public function fm_privacion11intermediaLCV1(){ $query = $this->db->query('SELECT  idprivacion, folio, idintegrante, estadointegrante, nombreintegrante, edad, sexo, c2p9intermedia, fecharegistroDIP, aguaparaconsumolaoptienen, colorprivacionDIP, colorprivacionPFP, fecharegistroPFP,1 as sincronizado, now() as fechasincro FROM t5_privacion11intermediaLCV1 where sincronizado = 0;');$resultado = $query->result();$query->next_result(); $query->free_result(); return $resultado;   }
   public function fm_privacion11intermediaLCV1ok(){ $query = $this->db->query('call spsubidaprivacionintermedia11LCV1();');$resultado = $query->result();$query->next_result(); $query->free_result(); return $resultado;    }
   public function fm_privacion10intermediaLCV1(){ $query = $this->db->query('SELECT idprivacion, folio, idintegrante, estadointegrante, nombreintegrante, edad, sexo, c5pextraintermedia, fecharegistroDIP, quehizoalpresentarproblemasdesalud, colorprivacionDIP, colorprivacionPFP, fecharegistroPFP,1 as sincronizado, now() as fechasincro FROM t5_privacion10intermediaLCV1 where sincronizado = 0;');$resultado = $query->result();$query->next_result(); $query->free_result(); return $resultado;   }
   public function fm_privacion10intermediaLCV1ok(){ $query = $this->db->query('call spsubidaprivacionintermedia10LCV1();');$resultado = $query->result();$query->next_result(); $query->free_result(); return $resultado;    }
   public function fm_privacion9intermediaLCV1(){ $query = $this->db->query('SELECT idprivacion, folio, idintegrante, estadointegrante, nombreintegrante, edad, sexo, c5p1intermedia, fecharegistroDIP, afiliadoseguridadsocialensalud, colorprivacionDIP, colorprivacionPFP, fecharegistroPFP,1 as sincronizado, now() as fechasincro FROM t5_privacion9intermediaLCV1 where sincronizado = 0;');$resultado = $query->result();$query->next_result(); $query->free_result(); return $resultado;   }
   public function fm_privacion9intermediaLCV1ok(){ $query = $this->db->query('call spsubidaprivacionintermedia9LCV1();');$resultado = $query->result();$query->next_result(); $query->free_result(); return $resultado;    }
   public function fm_privacion8intermediaLCV1(){ $query = $this->db->query('SELECT idprivacion, folio, idintegrante, estadointegrante, nombreintegrante, edad, sexo, c9p19intermedia, c9p20intermedia, fecharegistroDIP, gestionopermisolaboralenministerio, cotizandoactualmentefondopensiones, colorprivacionDIP, colorprivacionPFP, fecharegistroPFP,1 as sincronizado, now() as fechasincro FROM t5_privacion8intermediaLCV1 where sincronizado = 0;');$resultado = $query->result();$query->next_result(); $query->free_result(); return $resultado;   }
   public function fm_privacion8intermediaLCV1ok(){ $query = $this->db->query('call spsubidaprivacionintermedia8LCV1();');$resultado = $query->result();$query->next_result(); $query->free_result(); return $resultado;    }
   public function fm_privacion7intermediaLCV1(){ $query = $this->db->query('SELECT idprivacion, folio, idintegrante, estadointegrante, nombreintegrante, edad, sexo, c9p24intermedia, c9p27intermediao2, c9p27intermediao2cuanto, fecharegistroDIP, trabajoporlomenos2semanasconsecutivas, pagosporpensionjubilacionvejez, cuantofueelpago, colorprivacionDIP, colorprivacionPFP, fecharegistroPFP, 1 as sincronizado, now() as fechasincro FROM t5_privacion7intermediaLCV1 where sincronizado = 0;');$resultado = $query->result();$query->next_result(); $query->free_result(); return $resultado;   }
   public function fm_privacion7intermediaLCV1ok(){ $query = $this->db->query('call spsubidaprivacionintermedia7LCV1();');$resultado = $query->result();$query->next_result(); $query->free_result(); return $resultado;    }
   public function fm_privacion6intermediaLCV1(){ $query = $this->db->query('SELECT idprivacion, folio, idintegrante, estadointegrante, nombreintegrante, edad, sexo, c9p19intermedia, c9p37intermediao1, c9p37intermediao2, c9p37intermediao3, c9p37intermediao4, c9p37intermediao5, c9p37intermediao6, c9p37intermediao7, c9p37intermediao8, c9p37intermediao9, c9p37intermediao10, c9p37intermediacual, c9p37intermediao11, c9p39intermediao1, c9p39intermediao2, c9p39intermediao3, c9p39intermediao4, c9p39intermediao5, c9p39intermediao6, c9p39intermediao7, c9p39intermediao8, c9p39intermediacual, c9p40intermedia, c11p11intermediao4, fecharegistroDIP, gestionopermisolaboralenministerio, trabajodomestico, trabajoenminas, explotacionsexual, reclutamientoconflictoarmado, microtraficoestuperfaciente, ventashambulantes, reciclaje, trabajoencalle, mendicidad, otra, cual, ninguna, fabricarproductos, ayudaracocinar, venderproductos, llevardomicilios, cultivarlatierra, recolectarcartones, noayudoanadie, otraayuda, cualayuda, cuantotiempoalasemana, trabajoinfantil, colorprivacionDIP, colorprivacionPFP, fecharegistroPFP,1 as sincronizado, now() as fechasincro FROM t5_privacion6intermediaLCV1 where sincronizado = 0;');$resultado = $query->result();$query->next_result(); $query->free_result(); return $resultado;   }
   public function fm_privacion6intermediaLCV1ok(){ $query = $this->db->query('call spsubidaprivacionintermedia6LCV1();');$resultado = $query->result();$query->next_result(); $query->free_result(); return $resultado;    }
   public function fm_privacion5intermediaLCV1(){ $query = $this->db->query('SELECT idprivacion, folio, idintegrante, estadointegrante, nombreintegrante, edad, sexo, c5p1intermedia, c7p1intermedia, c6p10intermedia, c6p11intermedia, c6p12intermedia, c6p13intermedia, c6p14intermedia, c6p15intermedia, fecharegistroDIP, afiliadoseguridadsocialensalud, dondepermaneceelmenor, jovensinalimentacionnutritiva, jovennopudovariaralimentacion, jovenconalimentaciondisminuida, jovensequejodehambre, jovenseacostoconhambre, jovencomiounasolavez, colorprivacionDIP, colorprivacionPFP, fecharegistroPFP,1 as sincronizado, now() as fechasincro FROM t5_privacion5intermediaLCV1 where sincronizado = 0;');$resultado = $query->result();$query->next_result(); $query->free_result(); return $resultado;   }
   public function fm_privacion5intermediaLCV1ok(){ $query = $this->db->query('call spsubidaprivacionintermedia5LCV1();');$resultado = $query->result();$query->next_result(); $query->free_result(); return $resultado;    }
   public function fm_privacion4intermediaLCV1(){ $query = $this->db->query('SELECT idprivacion, folio, idintegrante, estadointegrante, nombreintegrante, edad, sexo, c8p2intermedia, c8p2gradointermedia, fecharegistroDIP, ultimogradoaprovado, gradocalculado, colorprivacionDIP, colorprivacionPFP, fecharegistroPFP,1 as sincronizado, now() as fechasincro FROM t5_privacion4intermediaLCV1 where sincronizado = 0;');$resultado = $query->result();$query->next_result(); $query->free_result(); return $resultado;   }
   public function fm_privacion4intermediaLCV1ok(){ $query = $this->db->query('call spsubidaprivacionintermedia4LCV1();');$resultado = $query->result();$query->next_result(); $query->free_result(); return $resultado;    }
   public function fm_privacion3intermediaLCV1(){ $query = $this->db->query('SELECT idprivacion, folio, idintegrante, estadointegrante, nombreintegrante, edad, sexo, c8p4intermedia, c8p2gradointermedia, fecharegistroDIP, actualmenteestudia, ultimogradoaprovado, colorprivacionDIP, colorprivacionPFP, fecharegistroPFP,1 as sincronizado, now() as fechasincro FROM t5_privacion3intermediaLCV1 where sincronizado = 0;');$resultado = $query->result();$query->next_result(); $query->free_result(); return $resultado;   }
   public function fm_privacion3intermediaLCV1ok(){ $query = $this->db->query('call spsubidaprivacionintermedia3LCV1();');$resultado = $query->result();$query->next_result(); $query->free_result(); return $resultado;    }
   public function fm_privacion2intermediaLCV1(){ $query = $this->db->query('SELECT idprivacion, folio, idintegrante, estadointegrante, nombreintegrante, edad, sexo, c8p1intermedia, fecharegistroDIP, sabeleeryescribir, colorprivacionDIP, colorprivacionPFP, fecharegistroPFP,1 as sincronizado, now() as fechasincro FROM t5_privacion2intermediaLCV1 where sincronizado = 0;');$resultado = $query->result();$query->next_result(); $query->free_result(); return $resultado;   }
   public function fm_privacion2intermediaLCV1ok(){ $query = $this->db->query('call spsubidaprivacionintermedia2LCV1();');$resultado = $query->result();$query->next_result(); $query->free_result(); return $resultado;    }
   public function fm_privacion1intermediaLCV1(){ $query = $this->db->query('SELECT idprivacion, folio, idintegrante, estadointegrante, nombreintegrante, edad, sexo, fecharegistroDIP, totalintegrantes, totalgrado, promedioprivacion, colorprivacionDIP, colorprivacionPFP, fecharegistroPFP,1 as sincronizado, now() as fechasincro FROM t5_privacion1intermediaLCV1 where sincronizado = 0;');$resultado = $query->result();$query->next_result(); $query->free_result(); return $resultado;   }
   public function fm_privacion1intermediaLCV1ok(){ $query = $this->db->query('call spsubidaprivacionintermedia1LCV1();');$resultado = $query->result();$query->next_result(); $query->free_result(); return $resultado;    }



   public function fm_capitulo11intermedia_lineacierre(){ $query = $this->db->query('SELECT folio, c11p11intermediao1, c11p11intermediao2, c11p11intermediao3, c11p11intermediao4, c11p11intermediao5, c11p11intermediao6, c11p11intermediao7, c11p11intermediao8, c11p11intermediao9, c11p11intermediao10, c11p11intermediao11, c11p11intermediao12, c11p11intermediao13, c11p11intermediao14, c11p11intermediao15, c11p11intermediacual, fechaactualizacion,1 as sincro, now() as fechasincro FROM t2_capitulo11intermedia_lineacierre where sincro= 0;');$resultado = $query->result();$query->next_result(); $query->free_result(); return $resultado;   }
   public function fm_capitulo11intermedia_lineacierreok(){ $query = $this->db->query('call spsubidatintermedialineacierre11();');$resultado = $query->result();$query->next_result(); $query->free_result(); return $resultado;    }
   public function fm_capitulo2intermedia_lineacierre(){ $query = $this->db->query('SELECT folio, c2p1intermedia, c2p1intermediacual, c2p2intermedia, c2p5intermedia, c2p7intermediao1, c2p7intermediao2, c2p7intermediao3, c2p7intermediao4, c2p7intermediao5, c2p7intermediao6, c2p8intermedia, c2p9intermedia, c2p11intermedia, fechaactualizacion,1 as sincro, now() as fechasincro FROM t2_capitulo2intermedia_lineacierre where sincro= 0;');$resultado = $query->result();$query->next_result(); $query->free_result(); return $resultado;   }
   public function fm_capitulo2intermedia_lineacierreok(){ $query = $this->db->query('call spsubidatintermedialineacierre2();');$resultado = $query->result();$query->next_result(); $query->free_result(); return $resultado;    }
   public function fm_capitulo5intermedia_lineacierre(){ $query = $this->db->query('SELECT folio, idintegrante, c5p1intermedia, c5pextraintermedia, fechaactualizacion, 1 as sincro, now() as fechasincro FROM t2_capitulo5intermedia_lineacierre where sincro= 0;');$resultado = $query->result();$query->next_result(); $query->free_result(); return $resultado;   }
   public function fm_capitulo5intermedia_lineacierreok(){ $query = $this->db->query('call spsubidatintermedialineacierre5();');$resultado = $query->result();$query->next_result(); $query->free_result(); return $resultado;    }
   public function fm_capitulo6intermedia_lineacierre(){ $query = $this->db->query('SELECT folio, c6p10intermedia, c6p11intermedia, c6p12intermedia, c6p13intermedia, c6p14intermedia, c6p15intermedia, fechaactualizacion,1 as sincro, now() as fechasincro FROM t2_capitulo6intermedia_lineacierre where sincro= 0;');$resultado = $query->result();$query->next_result(); $query->free_result(); return $resultado;   }
   public function fm_capitulo6intermedia_lineacierreok(){ $query = $this->db->query('call spsubidatintermedialineacierre6();');$resultado = $query->result();$query->next_result(); $query->free_result(); return $resultado;    }
   public function fm_capitulo7intermedia_lineacierre(){ $query = $this->db->query('SELECT folio, idintegrante, c7p1intermedia, fechaactualizacion, 1 as sincro, now() as fechasincro FROM t2_capitulo7intermedia_lineacierre where sincro= 0;');$resultado = $query->result();$query->next_result(); $query->free_result(); return $resultado;   }
   public function fm_capitulo7intermedia_lineacierreok(){ $query = $this->db->query('call spsubidatintermedialineacierre7();');$resultado = $query->result();$query->next_result(); $query->free_result(); return $resultado;    }
   public function fm_capitulo8intermedia_lineacierre(){ $query = $this->db->query('SELECT folio, idintegrante, c8p1intermedia, c8p2intermedia, c8p2gradointermedia, c8p3intermedia, c8p4intermedia, fechaactualizacion,1 as sincro, now() as fechasincro FROM t2_capitulo8intermedia_lineacierre where sincro= 0;');$resultado = $query->result();$query->next_result(); $query->free_result(); return $resultado;   }
   public function fm_capitulo8intermedia_lineacierreok(){ $query = $this->db->query('call spsubidatintermedialineacierre8();');$resultado = $query->result();$query->next_result(); $query->free_result(); return $resultado;    }
   public function fm_capitulo9intermedia_lineacierre(){ $query = $this->db->query('SELECT folio, idintegrante, c9p3intermedia, c9p3intermediacual, c9p4intermedia, c9p7intermedia, c9p8intermedia, c9p8intermediacual, c9p10intermedia, c9p11intermedia, c9p11intermediacuanto, c9p11intermediaincluyo, c9p12intermediao1, c9p12intermediao2, c9p12intermediao3, c9p12intermediao4, c9p12intermediacuanto, c9p13intermediao1, c9p13intermediao2, c9p13intermediao3, c9p13intermediacuanto, c9p14intermediao1, c9p14intermediao2, c9p14intermediao3, c9p14intermediao4, c9p14intermediacuanto, c9p16intermedia, c9p19intermedia, c9p20intermedia, c9p21intermedia, c9p23intermedia, c9p24intermedia, c9p25intermedia, c9p26intermedia, c9p27intermediao1, c9p27intermediao1cuanto, c9p27intermediao2, c9p27intermediao2cuanto, c9p27intermediao3, c9p27intermediao3cuanto, c9p28intermediao1, c9p28intermediao1cuanto, c9p28intermediao2, c9p28intermediao2cuanto, c9p28intermediao3, c9p28intermediao3cuanto, c9p28intermediao4, c9p28intermediao4cuanto, c9p28intermediao5, c9p28intermediao5cuanto, c9p28intermediao6, c9p28intermediao6cuanto, c9p28intermediao7, c9p29intermediao1, c9p29intermediao1cuanto, c9p29intermediao2, c9p29intermediao2cuanto, c9p29intermediao3, c9p29intermediao3cuanto, c9p29intermediao4, c9p29intermediao4cuanto, c9p29intermediao5, c9p30intermedia, c9p31intermedia, c9p32intermedia, c9p32intermediacual, c9p33intermedia, c9p34intermedia, c9p35intermediao1, c9p35intermediao2, c9p35intermediao3, c9p35intermediao4, c9p35intermediao5, c9p35intermediao6, c9p35intermediao7, c9p35intermediao7cual, c9p35intermediao8, c9p35intermediao9, c9p36intermediao1, c9p36intermediao2, c9p36intermediao3, c9p36intermediao4, c9p36intermediao5, c9p36intermediao6, c9p36intermediao7, c9p36intermediao8,c9p36intermediao8cual, c9p37intermediao1, c9p37intermediao2, c9p37intermediao3, c9p37intermediao4, c9p37intermediao5, c9p37intermediao6, c9p37intermediao7, c9p37intermediao8, c9p37intermediao9, c9p37intermediao10, c9p37intermediao11, c9p37intermediacual, c9p38intermediao1, c9p38intermediao2, c9p38intermediao3, c9p38intermediao4, c9p38intermediao5, c9p38intermediao6, c9p38intermediao7, c9p38intermediao8, c9p38intermediao9, c9p38intermediao10, c9p38intermediacual, c9p39intermediao1, c9p39intermediao2, c9p39intermediao3, c9p39intermediao4, c9p39intermediao5, c9p39intermediao6, c9p39intermediao7, c9p39intermediao8, c9p39intermediacual, c9p40intermedia, c9p41intermedia, c9p42intermediao1, c9p42intermediao2, c9p42intermediao3, c9p42intermediao4, c9p42intermediao5, c9p42intermediacual, c9p43intermedia,1 as sincro, now() as fechasincro FROM t2_capitulo9intermedia_lineacierre where sincro= 0;');$resultado = $query->result();$query->next_result(); $query->free_result(); return $resultado;   }
   public function fm_capitulo9intermedia_lineacierreok(){ $query = $this->db->query('call spsubidatintermedialineacierre9();');$resultado = $query->result();$query->next_result(); $query->free_result(); return $resultado;    }


   

   public function fm_principalintegrantes_intermedialcv1(){ $query = $this->db->query('SELECT folio, idintegrante, fecharegistro, 1 as sincro, now() as fechasincro , documento_cogestor FROM t1_principalintegrantes_intermedialcv1 where sincro= 0;');$resultado = $query->result();$query->next_result(); $query->free_result(); return $resultado;   }
   public function fm_principalintegrantes_intermedialcv1ok(){ $query = $this->db->query('call spsubidatintegrantes_intermedialcv1();');$resultado = $query->result();$query->next_result(); $query->free_result(); return $resultado;    }
   public function fm_sincronizaactualizacionpp(){ $query = $this->db->query('SELECT  folio, idintegrante, empleado_actualmente, cambiar_empleo, tiempo_empleado, tipo_empleo, tiempo_desempleado, barrera_acceso, actualmente_estudiando, nivel_educativo, fecha_registro,1 as sincro, activo, now() as fechasincro FROM t_actualizacionpp where sincro= 0;');$resultado = $query->result();$query->next_result(); $query->free_result(); return $resultado;   }
   public function fm_sincronizaactualizacionppok(){ $query = $this->db->query('call spsubidatactualizacionpp();');$resultado = $query->result();$query->next_result(); $query->free_result(); return $resultado;    }


   public function fm_totalporcentajelogros(){ $query = $this->db->query('SELECT   folio, total, totalrojo, totalverd, totalgris, totalazul, totalcafe, totalblan, porcerojo, porceverd, porcegris, porceazul, porcecafe, porceblan, now() as actualizacion FROM t_totalporcentajelogros where sincro= 0;');$resultado = $query->result();$query->next_result(); $query->free_result(); return $resultado;   }
   public function fm_totalporcentajelogrosok(){ $query = $this->db->query('call spsubidat_totalporcentajelogros();');$resultado = $query->result();$query->next_result(); $query->free_result(); return $resultado;    }
   public function fm_porcentajelogrosaplican(){ $query = $this->db->query('SELECT folio, logro7, logro8, logro9, logro10, logro11, logro12, logro13, logro15, logro16, logro17, logro24, logro25, logro26, logro28, logro29, logro30, logro31, generalrojo, generalcafe, generalverd, generalazul, generalgris, generalblan, porcentajeactual, now() as actualizacion FROM t_porcentajelogrosaplican where sincro= 0;');$resultado = $query->result();$query->next_result(); $query->free_result(); return $resultado;   }
   public function fm_porcentajelogrosaplicanok(){ $query = $this->db->query('call spsubidat_porcentajelogrosaplican();');$resultado = $query->result();$query->next_result(); $query->free_result(); return $resultado;    }


 
/////////////Fin modelos cierre///////////////

   ////////////////////////////////////////////////////////////////////////////////////////////////////////////////
     public function fm_sincrofin(){
        
        $query = $this->db->query('call spfinalizarsincro();');
        $resultado = $query->result();
        $query->next_result(); 
        $query->free_result(); 
        return $resultado;   
     }
     
     /////////////////////Finaliza Sincronizacion Arriba////////////////
     /////////////////////Inicia Sincronizacion Abajo//////////////////
     

     public function fm_reasignacionarriba(){ $query = $this->db->query('SELECT folio,doccogestor FROM t1_principalhogar where folioactivo=1;');$resultado = $query->result();$query->next_result(); $query->free_result(); return $resultado;   }
     public function fm_reasignacionabajo(){ $query = $this->db->query('SELECT documento FROM t_usuarioprotocolo LIMIT 1;');$resultado = $query->result();$query->next_result(); $query->free_result(); return $resultado;   }




    
     public function fm_sincronizacionabajo($pdoccogestor){
        
        $query = $this->db->query('call sp3sincronizacionabajo('.$pdoccogestor.');');
        $resultado = $query->result();
        $query->next_result(); 
        $query->free_result(); 
        return $resultado;   
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
     public function fm_sincronizacionhogardok(){
     // $this->db->query('call sp4borrarprincipalhogar();'); 
     }
     public function fm_sincronizacionhogard( $listarfiducias){
      $this->db->replace('t1_principalhogar', $listarfiducias);   }

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
     public function fm_foliosactualizados($listarfiducias){
         $this->db->replace('t_foliosactualizados', $listarfiducias);  
         // $query= $this->db->query('INSERT INTO t_foliosactualizados (folio) values ('.$listarfiducias.')');
         // $resultado = $query->result();
         // return $resultado;   
    }
    public function fm_foliosactualizadosok(){
        $query=$this->db->query('call sp4borrart_foliosactualizados();');
        $resultado = $query->result();
           $query->next_result(); 
           $query->free_result(); 
           return $resultado;  
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
      public function fm_pasosestadodok(){
         // $this->db->query('call sp4borrarprotocolopasosestado();');
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
     public function fm_estacionestadodok(){
      // $this->db->query('call sp4borrarprotocoloestacionestado();');
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
        
        $query = $this->db->query('call sp3eliminarinactivos();');
        $resultado = $query->result();
        $query->next_result(); 
        $query->free_result(); 
        return $resultado;   
     }
    
   

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
     // $query->next_result();
    //  $query->free_result();
  
    //  return $resultado;   
  }

  public function fm_madresadolecentesd($listarfiducias) {
   $this->db->replace('t11_madres_adolecentes', $listarfiducias); 
}

public function fm_principalintegrantes_intermediad($listarfiducias) {
   $this->db->replace('t1_principalintegrantes_intermedia', $listarfiducias); 
}


public function fm_actualizapphpgard($listarfiducias) {
    
   $query = $this->db->query('call agregaredicionlineaclasificacion("'.$listarfiducias->folio.'","'.$listarfiducias->editar_llbf.'");');
   $resultado = $query->result();
   $query->next_result(); 
   $query->free_result(); 
   return $resultado;   
}




//Eliminar sobrantes de reasignacion

public function fm_foliossobrantesreasigna(){
        
         // $query = $this->db->query('call sp3eliminarsobrantesreasignacion();');
         // $resultado = $query->result();
         // $query->next_result(); 
         // $query->free_result(); 
         // return $resultado;   
      }

       
}      