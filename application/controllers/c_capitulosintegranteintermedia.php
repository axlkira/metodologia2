<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class  C_capitulosintegranteintermedia extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->model('m_capitulosintegranteintermedia');//carga el controlador modelo
        if( $this->session->userdata('documento') == '')
        {
            redirect('/c_login/fc_vlogin');
        }  
    }

    //funcion encargada de llamar a la vista de la pagina 
    public function fc_capitulosintegranteintermedia($page = 'v_capitulosintegranteintermedia') {

        if (!file_exists('application/views/pages/' . $page . '.php')) {
            // Whoops, we don't have a page for that!
            show_404();
        }

        //INICIO TRAER DATOS DEL TITULAR
        $folio = $this->input->get('folio');//tomamos el valor del folio que viene por get
        $idintegrante = $this->input->get('idintegrante');
       
        $datosintegrante = $this->m_capitulosintegranteintermedia->fm_datosintegrante($folio,$idintegrante);//lo mandasmos a la funcion del modelo para verificar
        
        $tdatinte= array('tfolio' => '', 
                          'tidintegrante' => '',
                          'tdoc' => '',
                          'tsexo' => '',
                          'tnombre' => '');
        
        foreach ($datosintegrante as $filainte)
        {
        $tdatinte = array('tfolio' => $filainte->folio,
                          'tidintegrante' => $filainte->idintegrante,
                          'tdoc' => $filainte->documento, 
                          'tsexo' => $filainte->sexo,
                          'tnombre' => $filainte->nombre1.' '.$filainte->nombre2.' '.$filainte->apellido1.' '.$filainte->apellido2); //se guarda el resultado del ption value en la variable datos
        }
        //FIN TRAER DATOS DEL TITULAR      
        
        
         $crespuestas = $this->m_capitulosintegranteintermedia->fm_buscarestadoint($idintegrante);
        $carrayrespuestas= array('eestadointe' => ''); 
        foreach ($crespuestas as $crespuesta)
        {
            $carrayrespuestas = array('eestadointe' => $crespuesta->estadointeintermedia);
        }
        
        {
//traer una lista de valores cap 4
  
        
//        fin cap 4
        
        
//        inicio lista de cap 5
        
        $listartabla = $this->m_capitulosintegranteintermedia->fm_listartablacap5iintermedia($idintegrante);
                       
        $datos2 = '';
        $cap5 = '';
        $cap51 = '';
        foreach ($listartabla as $valor)
        {
        $cap5 =$valor->c5pextraintermedia;
        
        if( $valor->c5p1intermedia == '')
        {
        $estado1 = '97'; 
        }
        else 
        {
        $estado1 = $valor->c5p1intermedia;
        }       
            switch ($estado1) 
          
{                
              
    case '98': //Para salto
                $claseboton1 = '';
                $habilitarboton1 = 'disabled="disabled"';
                $mensajebtn1 =  'P1-No Aplica';
    break;       
    case '97'://actual
                $claseboton1 = 'warning';
                $habilitarboton1 = '';
                $mensajebtn1 =  'P1-Actual';
    break;       
    case ''://por realizar o pendiente
                $claseboton1 = 'warning';
                $habilitarboton1 = 'disabled="disabled"';
                $mensajebtn1 =  'P1-Actual';
    break;
    default:
                //esta listo
                $claseboton1 = 'success';
                $habilitarboton1 = '';
                $mensajebtn1 =  'P1-Realizado';
}



if( $valor->c5p1intermedia <> '' && $valor->c5pextraintermedia == '')
    {
        $estadoextra = '97'; 
    }
    else 
    {
        $estadoextra = $valor->c5pextraintermedia;
    }       
        switch ($estadoextra) 
{                
              
    case '98': //Para salto
                $clasebotonextra = '';
                $habilitarbotonextra = 'disabled="disabled"';
                $mensajebtnextra =  'Pextra-No Aplica';
    break;       
    case '97'://actual
                $clasebotonextra = 'warning';
                $habilitarbotonextra = '';
                $mensajebtnextra =  'Pextra-Actual';
    break;       
    case ''://por realizar o pendiente
                $clasebotonextra = 'danger';
                $habilitarbotonextra = 'disabled="disabled"';
                $mensajebtnextra =  'Pextra-Pendiente';
    break;
    default:
                //esta listo
                $clasebotonextra = 'success';
                $habilitarbotonextra = '';
                $mensajebtnextra =  'Pextra-Realizado';
}


$cap51 = $valor->c5p1intermedia <> '' && $valor->c5pextraintermedia <> '' ;



        $datos2 .=  '<tr>'
                    //.'<td>'.$valor->idvivienda.'</td>'
                    .'<td><button type="button" id="c5p1a'.$valor->idintegrante.'" '.$habilitarboton1.' onclick="c5p1('.$valor->folio.','.$valor->idintegrante.')" class="btn btn-'.$claseboton1.' btn-sm col-sm-9">'.$mensajebtn1.'</button></td>
                      <td><button type="button" id="c5pextraa'.$valor->idintegrante.'" '.$habilitarbotonextra.' onclick="c5pextra('.$valor->folio.','.$valor->idintegrante.')" class="btn btn-'.$clasebotonextra.' btn-sm col-sm-9">'.$mensajebtnextra.'</button></td>
                     
                      
                      </tr>  
                      ';
        }  
//fin traer una lista de valores cap 5
        
        


//        inicio lista de cap 7
        
        $listartabla = $this->m_capitulosintegranteintermedia->fm_listartablacap7iintermedia($idintegrante);
                       
        $datos3 = '';
        $cap71 = '';
        $cap7 = '';
        foreach ($listartabla as $valor)
        {
        $cap7 =$valor->c7p1intermedia;
        
        if( $cap5 <> '' && $valor->c7p1intermedia == '')
        {
        $estado1 = '97'; 
        }
        else 
        {
        $estado1 = $valor->c7p1intermedia;
        }       
            switch ($estado1) 
          
{                
              
    case '98': //Para salto
                $claseboton1 = '';
                $habilitarboton1 = 'disabled="disabled"';
                $mensajebtn1 =  'P1-No Aplica';
    break;       
    case '97'://actual
                $claseboton1 = 'warning';
                $habilitarboton1 = '';
                $mensajebtn1 =  'P1-Actual';
    break;       
    case ''://por realizar o pendiente
                $claseboton1 = 'warning';
                $habilitarboton1 = 'disabled="disabled"';
                $mensajebtn1 =  'P1-Actual';
    break;
    default:
                //esta listo
                $claseboton1 = 'success';
                $habilitarboton1 = '';
                $mensajebtn1 =  'P1-Realizado';
}





$cap71 = $valor->c7p1intermedia <> '' ;

        $datos3 .=  '<tr>'                
                    .'<td><button type="button" id="c7p1a'.$valor->idintegrante.'" '.$habilitarboton1.' onclick="c7p1('.$valor->folio.','.$valor->idintegrante.')" class="btn btn-'.$claseboton1.' btn-sm col-sm-6">'.$mensajebtn1.'</button></td>
                   
                      
                     </tr> ';
        }  
        
// fin cap 7    
        
//        inicio cap 8
        
        $listartabla = $this->m_capitulosintegranteintermedia->fm_listartablacap8iintermedia($idintegrante);
                       
        $datos4 = '';
        $cap8 = '';
        $cap81 = '';
        foreach ($listartabla as $valor)
        {
        $cap8 = $valor->c8p4intermedia;
        
        if(( $cap7 <> '' || $cap7 <> '98')  && $valor->c8p1intermedia == '')
        {
        $estado1 = '97'; 
        }
        else 
        {
        $estado1 = $valor->c8p1intermedia;
        }       
            switch ($estado1) 
          
{                
              
    case '98': //Para salto
                $claseboton1 = '';
                $habilitarboton1 = 'disabled="disabled"';
                $mensajebtn1 =  'P1-No Aplica';
    break;       
    case '97'://actual
                $claseboton1 = 'warning';
                $habilitarboton1 = '';
                $mensajebtn1 =  'P1-Actual';
    break;       
    case ''://por realizar o pendiente
                $claseboton1 = 'warning';
                $habilitarboton1 = 'disabled="disabled"';
                $mensajebtn1 =  'P1-Actual';
    break;
    default:
                //esta listo
                $claseboton1 = 'success';
                $habilitarboton1 = '';
                $mensajebtn1 =  'P1-Realizado';
}




if( $valor->c8p1intermedia <> '' && $valor->c8p2intermedia == '')
    {
        $estado2 = '97'; 
    }
    else 
    {
        $estado2 = $valor->c8p2intermedia;
    }       
        switch ($estado2) 
{                
              
    case '98': //Para salto
                $claseboton2 = '';
                $habilitarboton2 = 'disabled="disabled"';
                $mensajebtn2 =  'P2-No Aplica';
    break;       
    case '97'://actual
                $claseboton2 = 'warning';
                $habilitarboton2 = '';
                $mensajebtn2 =  'P2-Actual';
    break;       
    case ''://por realizar o pendiente
                $claseboton2 = 'danger';
                $habilitarboton2 = 'disabled="disabled"';
                $mensajebtn2 =  'P2-Pendiente';
    break;
    default:
                //esta listo
                $claseboton2 = 'success';
                $habilitarboton2 = '';
                $mensajebtn2 =  'P2-Realizado';
}

if($valor->c8p1intermedia <> '' && $valor->c8p2intermedia <> '' && $valor->c8p3intermedia == '')
    {
        $estado3 = '97'; 
    }
    else 
    {
        $estado3 = $valor->c8p3intermedia;
    }       
        switch ($estado3) 
{                
              
    case '98': //Para salto
                $claseboton3 = '';
                $habilitarboton3 = 'disabled="disabled"';
                $mensajebtn3 =  'P3-No Aplica';
    break;       
    case '97'://actual
                $claseboton3 = 'warning';
                $habilitarboton3 = '';
                $mensajebtn3 =  'P3-Actual';
    break;       
    case ''://por realizar o pendiente
                $claseboton3 = 'danger';
                $habilitarboton3 = 'disabled="disabled"';
                $mensajebtn3 =  'P3-Pendiente';
    break;
    default:
                //esta listo
                $claseboton3 = 'success';
                $habilitarboton3 = '';
                $mensajebtn3 =  'P3-Realizado';
}


if($valor->c8p1intermedia <> '' && $valor->c8p2intermedia <> '' && $valor->c8p3intermedia <>'' && $valor->c8p4intermedia == '')
    {
        $estado4 = '97'; 
    }
    else 
    {
        $estado4 = $valor->c8p4intermedia;
    }       
        switch ($estado4) 
{                
              
    case '98': //Para salto
                $claseboton4 = '';
                $habilitarboton4 = 'disabled="disabled"';
                $mensajebtn4 =  'P4-No Aplica';
    break;       
    case '97'://actual
                $claseboton4 = 'warning';
                $habilitarboton4 = '';
                $mensajebtn4 =  'P4-Actual';
    break;       
    case ''://por realizar o pendiente
                $claseboton4 = 'danger';
                $habilitarboton4 = 'disabled="disabled"';
                $mensajebtn4 =  'P4-Pendiente';
    break;
    default:
                //esta listo
                $claseboton4 = 'success';
                $habilitarboton4 = '';
                $mensajebtn4 =  'P4-Realizado';
}






$cap81 = $valor->c8p1intermedia <> '' && $valor->c8p2intermedia <> '' && $valor->c8p3intermedia <>'' && $valor->c8p4intermedia <> ''  ;

$datos4 .=  '<tr>'                    
                    .'<td><button type="button" id="c8p1a'.$valor->idintegrante.'" '.$habilitarboton1.' onclick="c8p1('.$valor->folio.','.$valor->idintegrante.')" class="btn btn-'.$claseboton1.' btn-sm col-sm-9">'.$mensajebtn1.'</button></td>
                      <td><button type="button" id="c8p2a'.$valor->idintegrante.'" '.$habilitarboton2.' onclick="c8p2('.$valor->folio.','.$valor->idintegrante.')" class="btn btn-'.$claseboton2.' btn-sm col-sm-9">'.$mensajebtn2.'</button></td>
                      <td><button type="button" id="c8p3a'.$valor->idintegrante.'" '.$habilitarboton3.' onclick="c8p3('.$valor->folio.','.$valor->idintegrante.')" class="btn btn-'.$claseboton3.' btn-sm col-sm-9">'.$mensajebtn3.'</button></td>
                      <td><button type="button" id="c8p4a'.$valor->idintegrante.'" '.$habilitarboton4.' onclick="c8p4('.$valor->folio.','.$valor->idintegrante.')" class="btn btn-'.$claseboton4.' btn-sm col-sm-9">'.$mensajebtn4.'</button></td>    
                                    
                      </tr>';
        } 
        
        
//    fin cap8    
        
        
        
//   inicio cap9     
    

        
        $listartabla = $this->m_capitulosintegranteintermedia->fm_listartablacap9liintermedia($idintegrante);
                       
        $datos8 = '';
        $cap9l  = '';
        $cap9l1  = '';
        foreach ($listartabla as $valor)
        {
        $cap9l  = $valor->c9p4intermedia;
        
        if( $cap8 <> '' && $valor->c9p3intermedia == '')
        {
        $estado3 = '97'; 
        }
        else 
        {
        $estado3 = $valor->c9p3intermedia;
        }       
            switch ($estado3) 
          
{                
              
    case '98': //Para salto
                $claseboton3 = '';
                $habilitarboton3 = 'disabled="disabled"';
                $mensajebtn3 =  'P1-No Aplica';
    break;       
    case '97'://actual
                $claseboton3 = 'warning';
                $habilitarboton3 = '';
                $mensajebtn3 =  'P1-Actual';
    break;       
    case ''://por realizar o pendiente
                $claseboton3 = 'warning';
                $habilitarboton3 = 'disabled="disabled"';
                $mensajebtn3 =  'P1-Actual';
    break;
    default:
                //esta listo
                $claseboton3 = 'success';
                $habilitarboton3 = '';
                $mensajebtn3 =  'P1-Realizado';
}


    
if( $valor->c9p3intermedia <> '' && $valor->c9p4intermedia == '')
    {
        $estado4 = '97'; 
    }
    else 
    {
        $estado4 = $valor->c9p4intermedia;
    }       
        switch ($estado4)


{                
              
    case '98': //Para salto
                $claseboton4 = '';
                $habilitarboton4 = 'disabled="disabled"';
                $mensajebtn4 =  'P2-No Aplica';
    break;       
    case '97'://actual
                $claseboton4 = 'warning';
                $habilitarboton4 = '';
                $mensajebtn4 =  'P2-Actual';
    break;       
    case ''://por realizar o pendiente
                $claseboton4 = 'danger';
                $habilitarboton4 = 'disabled="disabled"';
                $mensajebtn4 =  'P2-Pendiente';
    break;
    default:
                //esta listo
                $claseboton4 = 'success';
                $habilitarboton4 = '';
                $mensajebtn4 =  'P2-Realizado';
}




 $cap9l1  = $valor->c9p3intermedia <> '' && $valor->c9p4intermedia <> '';

 $datos8 .=  '<tr>'.'<td class="col-md-2"><button type="button" id="c9lp1a'.$valor->idintegrante.'" '.$habilitarboton3.' onclick="c9lp1('.$valor->folio.','.$valor->idintegrante.')" class="btn btn-'.$claseboton3.' btn-sm col-sm-8">'.$mensajebtn3.'</button></td>
                     <td class="col-md-2"><button type="button" id="c9lp2a'.$valor->idintegrante.'" '.$habilitarboton4.' onclick="c9lp2('.$valor->folio.','.$valor->idintegrante.')" class="btn btn-'.$claseboton4.' btn-sm col-sm-8">'.$mensajebtn4.'</button></td>        
                    
                     <td class="col-md-8"></td>  
             </tr>';
        }  
        
        
        
        $listartabla = $this->m_capitulosintegranteintermedia->fm_listartablacap9mintermedia($idintegrante);
                       
        $datos11 = '';
        $cap9m= '';
        $cap9m1 = '';
        foreach ($listartabla as $valor)
        {
        $cap9m = $valor->c9p23intermedia;
        
        if( $cap9l <> '' && $valor->c9p7intermedia == '')
        {
        $estado11 = '97'; 
        }
        else 
        {
        $estado11 = $valor->c9p7intermedia;
        }       
            switch ($estado11) 
          
{                
              
    case '98': //Para salto
                $claseboton11 = '';
                $habilitarboton11 = 'disabled="disabled"';
                $mensajebtn11 =  'P1-No Aplica';
    break;       
    case '97'://actual
                $claseboton11 = 'warning';
                $habilitarboton11 = '';
                $mensajebtn11 =  'P1-Actual';
    break;       
    case ''://por realizar o pendiente
                $claseboton11 = 'warning';
                $habilitarboton11 = 'disabled="disabled"';
                $mensajebtn11 =  'P1-Actual';
    break;
    default:
                //esta listo
                $claseboton11 = 'success';
                $habilitarboton11 = '';
                $mensajebtn11 =  'P1-Realizado';
}



         
        
        if( $valor->c9p7intermedia <> '' && $valor->c9p8intermedia == '')
        {
        $estado12 = '97'; 
        }
        else 
        {
        $estado12 = $valor->c9p8intermedia;
        }       
            switch ($estado12) 
          
{                
              
    case '98': //Para salto
                $claseboton12 = '';
                $habilitarboton12 = 'disabled="disabled"';
                $mensajebtn12 =  'P2-No Aplica';
    break;       
    case '97'://actual
                $claseboton12 = 'warning';
                $habilitarboton12 = '';
                $mensajebtn12 =  'P2-Actual';
    break;       
    case ''://por realizar o pendiente
                $claseboton12 = 'danger';
                $habilitarboton12 = 'disabled="disabled"';
                $mensajebtn12 =  'P2-Actual';
    break;
    default:
                //esta listo
                $claseboton12 = 'success';
                $habilitarboton12 = '';
                $mensajebtn12 =  'P2-PRealizado';
}


       
        
        
        if($valor->c9p7intermedia <> '' && $valor->c9p8intermedia <>  '' && $valor->c9p10intermedia == '')
        {
        $estado13 = '97'; 
        }
        else 
        {
        $estado13 = $valor->c9p10intermedia;
        }       
            switch ($estado13) 
          
{                
              
    case '98': //Para salto
                $claseboton13 = '';
                $habilitarboton13 = 'disabled="disabled"';
                $mensajebtn13 =  'P3-No Aplica';
    break;       
    case '97'://actual
                $claseboton13 = 'warning';
                $habilitarboton13 = '';
                $mensajebtn13 =  'P3-Actual';
    break;       
    case ''://por realizar o pendiente
                $claseboton13 = 'danger';
                $habilitarboton13 = 'disabled="disabled"';
                $mensajebtn13 =  'P3-Actual';
    break;
    default:
                //esta listo
                $claseboton13 = 'success';
                $habilitarboton13 = '';
                $mensajebtn13 =  'P3-Realizado';
}


                       
       
       
        
        if($valor->c9p7intermedia <> '' && $valor->c9p8intermedia <>  '' && $valor->c9p10intermedia <> '' && $valor->c9p11intermedia == '' )
        {
        $estado14 = '97'; 
        }
        else 
        {
        $estado14 = $valor->c9p11intermedia;
        }       
            switch ($estado14) 
          
{                
              
    case '98': //Para salto
                $claseboton14 = '';
                $habilitarboton14 = 'disabled="disabled"';
                $mensajebtn14 =  'P4-No Aplica';
    break;       
    case '97'://actual
                $claseboton14 = 'warning';
                $habilitarboton14 = '';
                $mensajebtn14 =  'P4-Actual';
    break;       
    case ''://por realizar o pendiente
                $claseboton14 = 'danger';
                $habilitarboton14 = 'disabled="disabled"';
                $mensajebtn14 =  'P4-Actual';
    break;
    default:
                //esta listo
                $claseboton14 = 'success';
                $habilitarboton14 = '';
                $mensajebtn14 =  'P4-Realizado';
}

       
        if($valor->c9p7intermedia <> '' && $valor->c9p8intermedia <>  ''  && $valor->c9p10intermedia <> '' && $valor->c9p11intermedia <> '' && $valor->c9p12intermediao1 == '' )
        {
        $estado15 = '97'; 
        }
        else 
        {
        $estado15 = $valor->c9p12intermediao1;
        }       
            switch ($estado15) 
          
{                
              
    case '98': //Para salto
                $claseboton15 = '';
                $habilitarboton15 = 'disabled="disabled"';
                $mensajebtn15 =  'P5-No Aplica';
    break;       
    case '97'://actual
                $claseboton15 = 'warning';
                $habilitarboton15 = '';
                $mensajebtn15 =  'P5-Actual';
    break;       
    case ''://por realizar o pendiente
                $claseboton15 = 'danger';
                $habilitarboton15 = 'disabled="disabled"';
                $mensajebtn15 =  'P5-Actual';
    break;
    default:
                //esta listo
                $claseboton15 = 'success';
                $habilitarboton15 = '';
                $mensajebtn15 =  'P5-Realizado';
}


        
        if($valor->c9p7intermedia <> '' && $valor->c9p8intermedia <>  '' && $valor->c9p10intermedia <> '' && $valor->c9p11intermedia <> '' && $valor->c9p12intermediao1 <> '' && $valor->c9p13intermediao1 == '' )
        {
        $estado16 = '97'; 
        }
        else 
        {
        $estado16 = $valor->c9p13intermediao1;
        }       
            switch ($estado16) 
          
       {                
              
  case '98': //Para salto
                $claseboton16 = '';
                $habilitarboton16 = 'disabled="disabled"';
                $mensajebtn16 =  'P6-No Aplica';
    break;       
    case '97'://actual
                $claseboton16 = 'warning';
                $habilitarboton16 = '';
                $mensajebtn16 =  'P6-Actual';
    break;       
    case ''://por realizar o pendiente
                $claseboton16 = 'danger';
                $habilitarboton16 = 'disabled="disabled"';
                $mensajebtn16 =  'P6-Actual';
    break;
    default:
                //esta listo
                $claseboton16 = 'success';
                $habilitarboton16 = '';
                $mensajebtn16 =  'P6-Realizado';
}


                             
        if( $valor->c9p7intermedia <> '' && $valor->c9p8intermedia <>  ''  && $valor->c9p10intermedia <> '' && $valor->c9p11intermedia <> '' && $valor->c9p12intermediao1 <> '' && $valor->c9p13intermediao1 <> '' && $valor->c9p14intermediao1 == '' )
        {
        $estado17 = '97'; 
        }
        else 
        {
        $estado17 = $valor->c9p14intermediao1;
        }       
            switch ($estado17) 
          
{                
              
  case '98': //Para salto
                $claseboton17 = '';
                $habilitarboton17 = 'disabled="disabled"';
                $mensajebtn17 =  'P7-No Aplica';
    break;       
    case '97'://actual
                $claseboton17 = 'warning';
                $habilitarboton17 = '';
                $mensajebtn17 =  'P7-Actual';
    break;       
    case ''://por realizar o pendiente
                $claseboton17 = 'danger';
                $habilitarboton17 = 'disabled="disabled"';
                $mensajebtn17 =  'P7-Actual';
    break;
    default:
                //esta listo
                $claseboton17 = 'success';
                $habilitarboton17 = '';
                $mensajebtn17 =  'P7-Realizado';
}


      
        
        if($valor->c9p7intermedia <> '' && $valor->c9p8intermedia <>  ''  && $valor->c9p10intermedia <> '' && $valor->c9p11intermedia <> '' && $valor->c9p12intermediao1 <> '' && $valor->c9p13intermediao1 <> '' && $valor->c9p14intermediao1 <> '' && $valor->c9p16intermedia == '' )
        {
        $estado18 = '97'; 
        }
        else 
        {
        $estado18 = $valor->c9p16intermedia;
        }       
            switch ($estado18) 
          
{                
              
  case '98': //Para salto
                $claseboton18 = '';
                $habilitarboton18 = 'disabled="disabled"';
                $mensajebtn18 =  'P9-No Aplica';
    break;       
    case '97'://actual
                $claseboton18 = 'warning';
                $habilitarboton18 = '';
                $mensajebtn18 =  'P9-Actual';
    break;       
    case ''://por realizar o pendiente
                $claseboton18 = 'danger';
                $habilitarboton18 = 'disabled="disabled"';
                $mensajebtn18 =  'P9-Actual';
    break;
    default:
                //esta listo
                $claseboton18 = 'success';
                $habilitarboton18 = '';
                $mensajebtn18 =  'P9-Realizado';
}

       

        
        if($valor->c9p7intermedia <> '' && $valor->c9p8intermedia <>  ''  && $valor->c9p10intermedia <> '' && $valor->c9p11intermedia <> ''
           && $valor->c9p12intermediao1 <> '' && $valor->c9p13intermediao1 <> '' && $valor->c9p14intermediao1 <> '' && $valor->c9p16intermedia <> '' && $valor->c9p19intermedia == '')
        {
        $estado19 = '97'; 
        }
        else 
        {
        $estado19 = $valor->c9p19intermedia;
        }       
            switch ($estado19) 
          
{                
              
  case '98': //Para salto
                $claseboton19 = '';
                $habilitarboton19 = 'disabled="disabled"';
                $mensajebtn19 =  'P12-No Aplica';
    break;       
    case '97'://actual
                $claseboton19 = 'warning';
                $habilitarboton19 = '';
                $mensajebtn19 =  'P12-Actual';
    break;       
    case ''://por realizar o pendiente
                $claseboton19 = 'danger';
                $habilitarboton19 = 'disabled="disabled"';
                $mensajebtn19 =  'P12-Actual';
    break;
    default:
                //esta listo
                $claseboton19 = 'success';
                $habilitarboton19 = '';
                $mensajebtn19 =  'P12-Realizado';
}


if($valor->c9p7intermedia <> '' && $valor->c9p8intermedia <>  ''  && $valor->c9p10intermedia <> '' && $valor->c9p11intermedia <> ''
           && $valor->c9p12intermediao1 <> '' && $valor->c9p13intermediao1 <> '' && $valor->c9p14intermediao1 <> ''  && $valor->c9p16intermedia <> '' && $valor->c9p19intermedia <> '' && $valor->c9p20intermedia == '')
        {
        $estado20 = '97'; 
        }
        else 
        {
        $estado20 = $valor->c9p20intermedia;
        }       
            switch ($estado20) 
          
{                
              
  case '98': //Para salto
                $claseboton20 = '';
                $habilitarboton20 = 'disabled="disabled"';
                $mensajebtn20 =  'P13-No Aplica';
    break;       
    case '97'://actual
                $claseboton20 = 'warning';
                $habilitarboton20 = '';
                $mensajebtn20 =  'P13-Actual';
    break;       
    case ''://por realizar o pendiente
                $claseboton20 = 'danger';
                $habilitarboton20 = 'disabled="disabled"';
                $mensajebtn20 =  'P13-Actual';
    break;
    default:
                //esta listo
                $claseboton20 = 'success';
                $habilitarboton20 = '';
                $mensajebtn20 =  'P13-Realizado';
}


if($valor->c9p7intermedia <> '' && $valor->c9p8intermedia <>  ''  && $valor->c9p10intermedia <> '' && $valor->c9p11intermedia <> ''
   && $valor->c9p12intermediao1 <> '' && $valor->c9p13intermediao1 <> '' && $valor->c9p14intermediao1 <> ''  && $valor->c9p16intermedia <> ''
   && $valor->c9p19intermedia <> '' && $valor->c9p20intermedia <> '' && $valor->c9p21intermedia == '')
        {
        $estado21 = '97'; 
        }
        else 
        {
        $estado21 = $valor->c9p21intermedia;
        }       
            switch ($estado21) 
          
{                
              
  case '98': //Para salto
                $claseboton21 = '';
                $habilitarboton21 = 'disabled="disabled"';
                $mensajebtn21 =  'P14-No Aplica';
    break;       
    case '97'://actual
                $claseboton21 = 'warning';
                $habilitarboton21 = '';
                $mensajebtn21 =  'P14-Actual';
    break;       
    case ''://por realizar o pendiente
                $claseboton21 = 'danger';
                $habilitarboton21 = 'disabled="disabled"';
                $mensajebtn21 =  'P14-Actual';
    break;
    default:
                //esta listo
                $claseboton21 = 'success';
                $habilitarboton21 = '';
                $mensajebtn21 =  'P14-Realizado';
}

if($valor->c9p7intermedia <> '' && $valor->c9p8intermedia <>  ''  && $valor->c9p10intermedia <> '' && $valor->c9p11intermedia <> ''
   && $valor->c9p12intermediao1 <> '' && $valor->c9p13intermediao1 <> '' && $valor->c9p14intermediao1 <> ''  && $valor->c9p16intermedia <> ''
   && $valor->c9p19intermedia <> '' && $valor->c9p20intermedia <> '' && $valor->c9p21intermedia <> '' && $valor->c9p23intermedia == '')
        {
        $estado22 = '97'; 
        }
        else 
        {
        $estado22 = $valor->c9p23intermedia;
        }       
            switch ($estado22) 
          
{                
              
  case '98': //Para salto
                $claseboton22 = '';
                $habilitarboton22 = 'disabled="disabled"';
                $mensajebtn22 =  'P16-No Aplica';
    break;       
    case '97'://actual
                $claseboton22 = 'warning';
                $habilitarboton22 = '';
                $mensajebtn22 =  'P16-Actual';
    break;       
    case ''://por realizar o pendiente
                $claseboton22 = 'danger';
                $habilitarboton22 = 'disabled="disabled"';
                $mensajebtn22 =  'P16-Actual';
    break;
    default:
                //esta listo
                $claseboton22 = 'success';
                $habilitarboton22 = '';
                $mensajebtn22 =  'P16-Realizado';
}





$cap9m1 = $valor->c9p7intermedia <> '' && $valor->c9p8intermedia <>  ''  && $valor->c9p10intermedia <> '' && $valor->c9p11intermedia <> ''
   && $valor->c9p12intermediao1 <> '' && $valor->c9p13intermediao1 <> '' && $valor->c9p14intermediao1 <> ''  && $valor->c9p16intermedia <> ''
   && $valor->c9p19intermedia <> '' && $valor->c9p20intermedia <> '' && $valor->c9p21intermedia <> '' && $valor->c9p23intermedia <> '';
//$datos11 .= 'GOONORREA';
 $datos11 .=  '<tr><td><button type="button" id="c9mp1a'.$valor->idintegrante.'" '.$habilitarboton11.' onclick="c9mp1('.$valor->folio.','.$valor->idintegrante.')" class="btn btn-'.$claseboton11.' btn-sm col-sm-9">'.$mensajebtn11.'</button></td>
                   <td><button type="button" id="c9mp2a'.$valor->idintegrante.'" '.$habilitarboton12.' onclick="c9mp2('.$valor->folio.','.$valor->idintegrante.')" class="btn btn-'.$claseboton12.' btn-sm col-sm-9">'.$mensajebtn12.'</button></td>
                   <td><button type="button" id="c9mp3a'.$valor->idintegrante.'" '.$habilitarboton13.' onclick="c9mp3('.$valor->folio.','.$valor->idintegrante.')" class="btn btn-'.$claseboton13.' btn-sm col-sm-9">'.$mensajebtn13.'</button></td>
                   <td><button type="button" id="c9mp4a'.$valor->idintegrante.'" '.$habilitarboton14.' onclick="c9mp4('.$valor->folio.','.$valor->idintegrante.')" class="btn btn-'.$claseboton14.' btn-sm col-sm-9">'.$mensajebtn14.'</button></td>    
                   <td><button type="button" id="c9mp5a'.$valor->idintegrante.'" '.$habilitarboton15.' onclick="c9mp5('.$valor->folio.','.$valor->idintegrante.')" class="btn btn-'.$claseboton15.' btn-sm col-sm-9">'.$mensajebtn15.'</button></td>    
                   <td><button type="button" id="c9mp6a'.$valor->idintegrante.'" '.$habilitarboton16.' onclick="c9mp6('.$valor->folio.','.$valor->idintegrante.')" class="btn btn-'.$claseboton16.' btn-sm col-sm-9">'.$mensajebtn16.'</button></td>    
                   <td><button type="button" id="c9mp7a'.$valor->idintegrante.'" '.$habilitarboton17.' onclick="c9mp7('.$valor->folio.','.$valor->idintegrante.')" class="btn btn-'.$claseboton17.' btn-sm col-sm-9">'.$mensajebtn17.'</button></td>
                   <td><button type="button" id="c9mp8a'.$valor->idintegrante.'" '.$habilitarboton18.' onclick="c9mp8('.$valor->folio.','.$valor->idintegrante.')" class="btn btn-'.$claseboton18.' btn-sm col-sm-9">'.$mensajebtn18.'</button></td>    
               
                </tr>
                <tr>
                   <td><button type="button" id="c9mp9a'.$valor->idintegrante.'" '.$habilitarboton19.' onclick="c9mp9('.$valor->folio.','.$valor->idintegrante.')" class="btn btn-'.$claseboton19.' btn-sm col-sm-9">'.$mensajebtn19.'</button></td>
                   <td><button type="button" id="c9mp10a'.$valor->idintegrante.'" '.$habilitarboton20.' onclick="c9mp10('.$valor->folio.','.$valor->idintegrante.')" class="btn btn-'.$claseboton20.' btn-sm col-sm-9">'.$mensajebtn20.'</button></td>
                   <td><button type="button" id="c9mp11a'.$valor->idintegrante.'" '.$habilitarboton21.' onclick="c9mp11('.$valor->folio.','.$valor->idintegrante.')" class="btn btn-'.$claseboton21.' btn-sm col-sm-9">'.$mensajebtn21.'</button></td>
                   <td><button type="button" id="c9mp12a'.$valor->idintegrante.'" '.$habilitarboton22.' onclick="c9mp12('.$valor->folio.','.$valor->idintegrante.')" class="btn btn-'.$claseboton22.' btn-sm col-sm-9">'.$mensajebtn22.'</button></td>
                  
                   
                 </tr>
                 ';
        }          
           
        
        
        $listartabla = $this->m_capitulosintegranteintermedia->fm_listartablacap9niintermedia($idintegrante);
                       
        $datos12 = '';
        $cap9n = '';
        $cap9n1 = '';
        foreach ($listartabla as $valor)
        {
        $cap9n = $valor->c9p25intermedia;
        
        if( $cap9m <> '' && $valor->c9p24intermedia == '')
        {
        $estado20 = '97'; 
        }
        else 
        {
        $estado20 = $valor->c9p24intermedia;
        }       
            switch ($estado20) 
          
{                
              
    case '98': //Para salto
                $claseboton20 = '';
                $habilitarboton20 = 'disabled="disabled"';
                $mensajebtn20 =  'P1-No Aplica';
    break;       
    case '97'://actual
                $claseboton20 = 'warning';
                $habilitarboton20 = '';
                $mensajebtn20 =  'P1-Actual';
    break;       
    case ''://por realizar o pendiente
                $claseboton20 = 'warning';
                $habilitarboton20 = 'disabled="disabled"';
                $mensajebtn20 =  'P1-Actual';
    break;
    default:
                //esta listo
                $claseboton20 = 'success';
                $habilitarboton20 = '';
                $mensajebtn20 =  'P1-Realizado';
}





if( $valor->c9p24intermedia <> '' &&$valor->c9p25intermedia == '' )
    {
        $estado21 = '97'; 
    }
    else 
    {
        $estado21 = $valor->c9p25intermedia;
    }       
        switch ($estado21) 
{                
              
    case '98': //Para salto
                $claseboton21 = '';
                $habilitarboton21 = 'disabled="disabled"';
                $mensajebtn21 =  'P2-No Aplica';
    break;       
    case '97'://actual
                $claseboton21 = 'warning';
                $habilitarboton21 = '';
                $mensajebtn21 =  'P2-Actual';
    break;       
    case ''://por realizar o pendiente
                $claseboton21 = 'danger';
                $habilitarboton21 = 'disabled="disabled"';
                $mensajebtn21 =  'P2-Pendiente';
    break;
    default:
                //esta listo
                $claseboton21 = 'success';
                $habilitarboton21 = '';
                $mensajebtn21 =  'P2-Realizado';
}
        
$cap9n1 = $valor->c9p24intermedia <> '' && $valor->c9p25intermedia <> '' ;

 $datos12 .=  '<tr><td class="col-md-2"><button type="button" id="cnp1a'.$valor->idintegrante.'" '.$habilitarboton20.' onclick="cnp1('.$valor->folio.','.$valor->idintegrante.')" class="btn btn-'.$claseboton20.' btn-sm col-sm-7">'.$mensajebtn20.'</button></td>
                  <td class="col-md-2"><button type="button" id="cnp2a'.$valor->idintegrante.'" '.$habilitarboton21.' onclick="cnp2('.$valor->folio.','.$valor->idintegrante.')" class="btn btn-'.$claseboton21.' btn-sm col-sm-7">'.$mensajebtn21.'</button></td>        
                    <td class="col-md-8"></td>             
             </tr>';
        } 
        
         
        
       
        
        
        $listartabla = $this->m_capitulosintegranteintermedia->fm_listartablacap9piintermedia($idintegrante);
                       
        $datos10 = '';
        $cap9p = '';
         $cap9p1 = '';
        foreach ($listartabla as $valor)
        {
        $cap9p =$valor->c9p29intermediao1;
        
        if( $cap9n <> '' && $valor->c9p26intermedia == '')
        {
        $estado8 = '97'; 
        }
        else 
        {
        $estado8 = $valor->c9p26intermedia;
        }       
            switch ($estado8) 
          
{                
              
    case '98': //Para salto
                $claseboton8 = '';
                $habilitarboton8 = 'disabled="disabled"';
                $mensajebtn8 =  'P1-No Aplica';
    break;       
    case '97'://actual
                $claseboton8 = 'warning';
                $habilitarboton8 = '';
                $mensajebtn8 =  'P1-Actual';
    break;       
    case ''://por realizar o pendiente
                $claseboton8 = 'warning';
                $habilitarboton8 = 'disabled="disabled"';
                $mensajebtn8 =  'P1-Actual';
    break;
    default:
                //esta listo
                $claseboton8 = 'success';
                $habilitarboton8 = '';
                $mensajebtn8 =  'P1-Realizado';
}



if( $valor->c9p26intermedia <> '' &&  $valor->c9p27intermediao1 == '')
    {
        $estado9 = '97'; 
    }
    else 
    {
        $estado9 = $valor->c9p27intermediao1;
    }       
        switch ($estado9) 
{                
              
    case '98': //Para salto
                $claseboton9 = '';
                $habilitarboton9 = 'disabled="disabled"';
                $mensajebtn9 =  'P2-No Aplica';
    break;       
    case '97'://actual
                $claseboton9 = 'warning';
                $habilitarboton9 = '';
                $mensajebtn9 =  'P2-9-Actual';
    break;       
    case ''://por realizar o pendiente
                $claseboton9 = 'danger';
                $habilitarboton9 = 'disabled="disabled"';
                $mensajebtn9 =  'P2-Pendiente';
    break;
    default:
                //esta listo
                $claseboton9 = 'success';
                $habilitarboton9 = '';
                $mensajebtn9 =  'P2-Realizado';
}
        

if( $valor->c9p26intermedia <> '' &&  $valor->c9p27intermediao1 <> '' &&  $valor->c9p28intermediao1 == '')
    {
        $estado10 = '97'; 
    }
    else 
    {
        $estado10 = $valor->c9p28intermediao1;
    }       
        switch ($estado10) 
{                
              
    case '98': //Para salto
                $claseboton10 = '';
                $habilitarboton10 = 'disabled="disabled"';
                $mensajebtn10 =  'P3-No Aplica';
    break;       
    case '97'://actual
                $claseboton10 = 'warning';
                $habilitarboton10 = '';
                $mensajebtn10 =  'P3-Actual';
    break;       
    case ''://por realizar o pendiente
                $claseboton10 = 'danger';
                $habilitarboton10 = 'disabled="disabled"';
                $mensajebtn10 =  'P3-Pendiente';
    break;
    default:
                //esta listo
                $claseboton10 = 'success';
                $habilitarboton10 = '';
                $mensajebtn10 =  'P3-Realizado';
}

if( $valor->c9p26intermedia <> '' &&  $valor->c9p27intermediao1 <> '' &&  $valor->c9p28intermediao1 <> '' && $valor->c9p29intermediao1 == '')
    {
        $estado11 = '97'; 
    }
    else 
    {
        $estado11 = $valor->c9p29intermediao1; 
    }       
        switch ($estado11) 
{                
              
    case '98': //Para salto
                $claseboton11 = '';
                $habilitarboton11 = 'disabled="disabled"';
                $mensajebtn11 =  'P4-No Aplica';
    break;       
    case '97'://actual
                $claseboton11 = 'warning';
                $habilitarboton11 = '';
                $mensajebtn11 =  'P4-Actual';
    break;       
    case ''://por realizar o pendiente
                $claseboton11 = 'danger';
                $habilitarboton11 = 'disabled="disabled"';
                $mensajebtn11 =  'P4-Pendiente';
    break;
    default:
                //esta listo
                $claseboton11 = 'success';
                $habilitarboton11 = '';
                $mensajebtn11 =  'P4-Realizado';
}

$cap9p1 = $valor->c9p26intermedia <> '' &&  $valor->c9p27intermediao1 <> '' &&  $valor->c9p28intermediao1 <> '' && $valor->c9p29intermediao1 <> '';


 $datos10 .=  '<tr><td class="col-md-2"><button type="button" id="c9pp1a'.$valor->idintegrante.'" '.$habilitarboton8.' onclick="c9pp1('.$valor->folio.','.$valor->idintegrante.')" class="btn btn-'.$claseboton8.' btn-sm col-sm-7">'.$mensajebtn8.'</button></td>
                  <td class="col-md-2"><button type="button" id="c9pp2a'.$valor->idintegrante.'" '.$habilitarboton9.' onclick="c9pp2('.$valor->folio.','.$valor->idintegrante.')" class="btn btn-'.$claseboton9.' btn-sm col-sm-7">'.$mensajebtn9.'</button></td>        
                  <td class="col-md-2"><button type="button" id="c9pp3a'.$valor->idintegrante.'" '.$habilitarboton10.' onclick="c9pp3('.$valor->folio.','.$valor->idintegrante.')" class="btn btn-'.$claseboton10.' btn-sm col-sm-7">'.$mensajebtn10.'</button></td>        
                  <td class="col-md-2"><button type="button" id="c9pp4a'.$valor->idintegrante.'" '.$habilitarboton11.' onclick="c9pp4('.$valor->folio.','.$valor->idintegrante.')" class="btn btn-'.$claseboton11.' btn-sm col-sm-7">'.$mensajebtn11.'</button></td>        
                    <td class="col-md-8"></td>             
             </tr>';
        } 
        
        
        
        
        
        
        $listartabla = $this->m_capitulosintegranteintermedia->fm_listartablacap9qiintermedia($idintegrante);
                       
        $datos13 = '';
        $cap9q = '';
        $cap9q1 = '';
        foreach ($listartabla as $valor)
        {
        $cap9q =$valor->c9p36intermediao1;
        
        if( $cap9p <> '' && $valor->c9p30intermedia == '')
        {
        $estado22 = '97'; 
        }
        else 
        {
        $estado22 = $valor->c9p30intermedia;
        }       
            switch ($estado22) 
          
{                
              
    case '98': //Para salto
                $claseboton22 = '';
                $habilitarboton22 = 'disabled="disabled"';
                $mensajebtn22 =  'P1-No Aplica';
    break;       
    case '97'://actual
                $claseboton22 = 'warning';
                $habilitarboton22 = '';
                $mensajebtn22 =  'P1-Actual';
    break;       
    case ''://por realizar o pendiente
                $claseboton22 = 'warning';
                $habilitarboton22 = 'disabled="disabled"';
                $mensajebtn22 =  'P1-Actual';
    break;
    default:
                //esta listo
                $claseboton22 = 'success';
                $habilitarboton22 = '';
                $mensajebtn22 =  'P1-Realizado';
}



if( $valor->c9p30intermedia <> '' && $valor->c9p31intermedia == '')
    {
        $estado23 = '97'; 
    }
    else 
    {
        $estado23 = $valor->c9p31intermedia;
    }       
        switch ($estado23) 
{                
              
    case '98': //Para salto
                $claseboton23 = '';
                $habilitarboton23 = 'disabled="disabled"';
                $mensajebtn23 =  'P2-No Aplica';
    break;       
    case '97'://actual
                $claseboton23 = 'warning';
                $habilitarboton23 = '';
                $mensajebtn23 =  'P2-Actual';
    break;       
    case ''://por realizar o pendiente
                $claseboton23 = 'danger';
                $habilitarboton23 = 'disabled="disabled"';
                $mensajebtn23 =  'P2-Pendiente';
    break;
    default:
                //esta listo
                $claseboton23 = 'success';
                $habilitarboton23 = '';
                $mensajebtn23 =  'P2-Realizado';
}

if( $valor->c9p30intermedia <> '' && $valor->c9p31intermedia <> '' && $valor->c9p32intermedia == '')
    {
        $estado24 = '97'; 
    }
    else 
    {
        $estado24 = $valor->c9p32intermedia;
    }       
        switch ($estado24) 
{                
              
    case '98': //Para salto
                $claseboton24 = '';
                $habilitarboton24 = 'disabled="disabled"';
                $mensajebtn24 =  'P2A-No Aplica';
    break;       
    case '97'://actual
                $claseboton24 = 'warning';
                $habilitarboton24 = '';
                $mensajebtn24 =  'P2A-Actual';
    break;       
    case ''://por realizar o pendiente
                $claseboton24 = 'danger';
                $habilitarboton24 = 'disabled="disabled"';
                $mensajebtn24 =  'P2A-Pendiente';
    break;
    default:
                //esta listo
                $claseboton24 = 'success';
                $habilitarboton24 = '';
                $mensajebtn24 =  'P2A-Realizado';
}

if( $valor->c9p30intermedia <> '' && $valor->c9p31intermedia <> '' && $valor->c9p32intermedia <> '' && $valor->c9p33intermedia == '')
    {
        $estado25 = '97'; 
    }
    else 
    {
        $estado25 = $valor->c9p33intermedia;
    }       
        switch ($estado25) 
{                
              
    case '98': //Para salto
                $claseboton25 = '';
                $habilitarboton25 = 'disabled="disabled"';
                $mensajebtn25 =  'P3-No Aplica';
    break;       
    case '97'://actual
                $claseboton25 = 'warning';
                $habilitarboton25 = '';
                $mensajebtn25 =  'P3-Actual';
    break;       
    case ''://por realizar o pendiente
                $claseboton25 = 'danger';
                $habilitarboton25 = 'disabled="disabled"';
                $mensajebtn25 =  'P3-Pendiente';
    break;
    default:
                //esta listo
                $claseboton25 = 'success';
                $habilitarboton25 = '';
                $mensajebtn25 =  'P3-Realizado';
}
        

if( $valor->c9p30intermedia <> '' && $valor->c9p31intermedia <> '' && $valor->c9p32intermedia <> '' && $valor->c9p33intermedia <> '' && $valor->c9p34intermedia == '')
    {
        $estado26 = '97'; 
    }
    else 
    {
        $estado26 = $valor->c9p34intermedia;
    }       
        switch ($estado26) 
{                
              
    case '98': //Para salto
                $claseboton26 = '';
                $habilitarboton26 = 'disabled="disabled"';
                $mensajebtn26 =  'P4-No Aplica';
    break;       
    case '97'://actual
                $claseboton26 = 'warning';
                $habilitarboton26 = '';
                $mensajebtn26 =  'P4-Actual';
    break;       
    case ''://por realizar o pendiente
                $claseboton26 = 'danger';
                $habilitarboton26 = 'disabled="disabled"';
                $mensajebtn26 =  'P4-Pendiente';
    break;
    default:
                //esta listo
                $claseboton26 = 'success';
                $habilitarboton26 = '';
                $mensajebtn26 =  'P4-Realizado';
}


if( $valor->c9p30intermedia <> '' && $valor->c9p31intermedia <> '' && $valor->c9p32intermedia <> '' && $valor->c9p33intermedia <> '' && $valor->c9p34intermedia <> '' && $valor->c9p35intermediao1 == '')
    {
        $estado27 = '97'; 
    }
    else 
    {
        $estado27 = $valor->c9p35intermediao1;
    }       
        switch ($estado27) 
{                
              
    case '98': //Para salto
                $claseboton27 = '';
                $habilitarboton27 = 'disabled="disabled"';
                $mensajebtn27 =  'P5-No Aplica';
    break;       
    case '97'://actual
                $claseboton27 = 'warning';
                $habilitarboton27 = '';
                $mensajebtn27 =  'P5-Actual';
    break;       
    case ''://por realizar o pendiente
                $claseboton27 = 'danger';
                $habilitarboton27 = 'disabled="disabled"';
                $mensajebtn27 =  'P5-Pendiente';
    break;
    default:
                //esta listo
                $claseboton27 = 'success';
                $habilitarboton27 = '';
                $mensajebtn27 =  'P5-Realizado';
}


if( $valor->c9p30intermedia <> '' && $valor->c9p31intermedia <> '' && $valor->c9p32intermedia <> '' && $valor->c9p33intermedia <> '' && $valor->c9p34intermedia <> '' && $valor->c9p35intermediao1<> '' && $valor->c9p36intermediao1 == '')
    {
        $estado28 = '97'; 
    }
    else 
    {
        $estado28 = $valor->c9p36intermediao1;
    }       
        switch ($estado28) 
{                
              
    case '98': //Para salto
                $claseboton28 = '';
                $habilitarboton28 = 'disabled="disabled"';
                $mensajebtn28 =  'P6-No Aplica';
    break;       
    case '97'://actual
                $claseboton28 = 'warning';
                $habilitarboton28 = '';
                $mensajebtn28 =  'P6-Actual';
    break;       
    case ''://por realizar o pendiente
                $claseboton28 = 'danger';
                $habilitarboton28 = 'disabled="disabled"';
                $mensajebtn28 =  'P6-Pendiente';
    break;
    default:
                //esta listo
                $claseboton28 = 'success';
                $habilitarboton28 = '';
                $mensajebtn28 =  'P6-Realizado';
}

$cap9q1 = $valor->c9p30intermedia <> '' && $valor->c9p31intermedia <> '' && $valor->c9p32intermedia <> '' && $valor->c9p33intermedia <> '' && $valor->c9p34intermedia <> '' && $valor->c9p35intermediao1 <> '' && $valor->c9p36intermediao1 <> '';


 $datos13 .=  '<tr><td><button type="button" id="cqp1a'.$valor->idintegrante.'" '.$habilitarboton22.' onclick="cqp1('.$valor->folio.','.$valor->idintegrante.')" class="btn btn-'.$claseboton22.' btn-sm col-sm-9">'.$mensajebtn22.'</button></td>
                   <td><button type="button" id="cqp2a'.$valor->idintegrante.'" '.$habilitarboton23.' onclick="cqp2('.$valor->folio.','.$valor->idintegrante.')" class="btn btn-'.$claseboton23.' btn-sm col-sm-9">'.$mensajebtn23.'</button></td>        
                   <td><button type="button" id="cqp3a'.$valor->idintegrante.'" '.$habilitarboton24.' onclick="cqp3('.$valor->folio.','.$valor->idintegrante.')" class="btn btn-'.$claseboton24.' btn-sm col-sm-9">'.$mensajebtn24.'</button></td>        
                   <td><button type="button" id="cqp4a'.$valor->idintegrante.'" '.$habilitarboton25.' onclick="cqp4('.$valor->folio.','.$valor->idintegrante.')" class="btn btn-'.$claseboton25.' btn-sm col-sm-9">'.$mensajebtn25.'</button></td>        
                   <td><button type="button" id="cqp5a'.$valor->idintegrante.'" '.$habilitarboton26.' onclick="cqp5('.$valor->folio.','.$valor->idintegrante.')" class="btn btn-'.$claseboton26.' btn-sm col-sm-9">'.$mensajebtn26.'</button></td>        
                   <td><button type="button" id="cqp6a'.$valor->idintegrante.'" '.$habilitarboton27.' onclick="cqp6('.$valor->folio.','.$valor->idintegrante.')" class="btn btn-'.$claseboton27.' btn-sm col-sm-9">'.$mensajebtn27.'</button></td>        
                   <td><button type="button" id="cqp7a'.$valor->idintegrante.'" '.$habilitarboton28.' onclick="cqp7('.$valor->folio.','.$valor->idintegrante.')" class="btn btn-'.$claseboton28.' btn-sm col-sm-9">'.$mensajebtn28.'</button></td>        
                   
                                
             </tr>';
        } 
        
        
        
        
        $listartabla = $this->m_capitulosintegranteintermedia->fm_listartablacap9riintermedia($idintegrante);
                       
        $datos15 = '';
        $cap9r = '';
         $cap9r1 = '';
        foreach ($listartabla as $valor)
        {
        $cap9r =$valor->c9p43intermedia;
        
        if( $cap9q <> '' && $valor->c9p37intermediao1 == '')
        {
        $estado29 = '97'; 
        }
        else 
        {
        $estado29 = $valor->c9p37intermediao1;
        }       
            switch ($estado29) 
          
{                
              
    case '98': //Para salto
                $claseboton29 = '';
                $habilitarboton29 = 'disabled="disabled"';
                $mensajebtn29 =  'P1-No Aplica';
    break;       
    case '97'://actual
                $claseboton29 = 'warning';
                $habilitarboton29 = '';
                $mensajebtn29 =  'P1-Actual';
    break;       
    case ''://por realizar o pendiente
                $claseboton29 = 'warning';
                $habilitarboton29 = 'disabled="disabled"';
                $mensajebtn29 =  'P1-Actual';
    break;
    default:
                //esta listo
                $claseboton29 = 'success';
                $habilitarboton29 = '';
                $mensajebtn29 =  'P1-Realizado';
}



if( $valor->c9p37intermediao1 <> '' && $valor->c9p38intermediao1 == '')
    {
        $estado30 = '97'; 
    }
    else 
    {
        $estado30 = $valor->c9p38intermediao1;
    }       
        switch ($estado30) 
{                
              
    case '98': //Para salto
                $claseboton30 = '';
                $habilitarboton30 = 'disabled="disabled"';
                $mensajebtn30 =  'P2-No Aplica';
    break;       
    case '97'://actual
                $claseboton30 = 'warning';
                $habilitarboton30 = '';
                $mensajebtn30 =  'P2-Actual';
    break;       
    case ''://por realizar o pendiente
                $claseboton30 = 'danger';
                $habilitarboton30 = 'disabled="disabled"';
                $mensajebtn30 =  'P2-Pendiente';
    break;
    default:
                //esta listo
                $claseboton30 = 'success';
                $habilitarboton30 = '';
                $mensajebtn30 =  'P2-Realizado';
}

if( $valor->c9p37intermediao1 <> '' && $valor->c9p38intermediao1 <> '' && $valor->c9p39intermediao1 == '')
    {
        $estado31 = '97'; 
    }
    else 
    {
        $estado31 = $valor->c9p39intermediao1;
    }       
        switch ($estado31) 
{                
              
    case '98': //Para salto
                $claseboton31 = '';
                $habilitarboton31 = 'disabled="disabled"';
                $mensajebtn31 =  'P3-No Aplica';
    break;       
    case '97'://actual
                $claseboton31 = 'warning';
                $habilitarboton31 = '';
                $mensajebtn31 =  'P3-Actual';
    break;       
    case ''://por realizar o pendiente
                $claseboton31 = 'danger';
                $habilitarboton31 = 'disabled="disabled"';
                $mensajebtn31 =  'P3-Pendiente';
    break;
    default:
                //esta listo
                $claseboton31 = 'success';
                $habilitarboton31 = '';
                $mensajebtn31 =  'P3-Realizado';
}

if( $valor->c9p37intermediao1 <> '' && $valor->c9p38intermediao1 <> '' && $valor->c9p39intermediao1 <> '' && $valor->c9p40intermedia == '')
    {
        $estado32 = '97'; 
    }
    else 
    {
        $estado32 = $valor->c9p40intermedia;
    }       
        switch ($estado32) 
{                
              
    case '98': //Para salto
                $claseboton32 = '';
                $habilitarboton32 = 'disabled="disabled"';
                $mensajebtn32 =  'P4-No Aplica';
    break;       
    case '97'://actual
                $claseboton32 = 'warning';
                $habilitarboton32 = '';
                $mensajebtn32 =  'P4-Actual';
    break;       
    case ''://por realizar o pendiente
                $claseboton32 = 'danger';
                $habilitarboton32 = 'disabled="disabled"';
                $mensajebtn32 =  'P4-Pendiente';
    break;
    default:
                //esta listo
                $claseboton32 = 'success';
                $habilitarboton32 = '';
                $mensajebtn32 =  'P4-Realizado';
}
        

if( $valor->c9p37intermediao1 <> '' && $valor->c9p38intermediao1 <> '' && $valor->c9p39intermediao1 <> '' && $valor->c9p40intermedia <> '' && $valor->c9p41intermedia == '')
    {
        $estado33 = '97'; 
    }
    else 
    {
        $estado33 = $valor->c9p41intermedia;
    }       
        switch ($estado33) 
{                
              
    case '98': //Para salto
                $claseboton33 = '';
                $habilitarboton33 = 'disabled="disabled"';
                $mensajebtn33 =  'P5-No Aplica';
    break;       
    case '97'://actual
                $claseboton33 = 'warning';
                $habilitarboton33 = '';
                $mensajebtn33 =  'P5-Actual';
    break;       
    case ''://por realizar o pendiente
                $claseboton33 = 'danger';
                $habilitarboton33 = 'disabled="disabled"';
                $mensajebtn33 =  'P5-Pendiente';
    break;
    default:
                //esta listo
                $claseboton33 = 'success';
                $habilitarboton33 = '';
                $mensajebtn33 =  'P5-Realizado';
}


if( $valor->c9p37intermediao1 <> '' && $valor->c9p38intermediao1 <> '' && $valor->c9p39intermediao1 <> '' && $valor->c9p40intermedia <> '' && $valor->c9p41intermedia <> '' && $valor->c9p42intermediao1 == '')
    {
        $estado34 = '97'; 
    }
    else 
    {
        $estado34 = $valor->c9p42intermediao1;
    }       
        switch ($estado34) 
{                
              
    case '98': //Para salto
                $claseboton34 = '';
                $habilitarboton34 = 'disabled="disabled"';
                $mensajebtn34 =  'P6-No Aplica';
    break;       
    case '97'://actual
                $claseboton34 = 'warning';
                $habilitarboton34 = '';
                $mensajebtn34 =  'P6-Actual';
    break;       
    case ''://por realizar o pendiente
                $claseboton34 = 'danger';
                $habilitarboton34 = 'disabled="disabled"';
                $mensajebtn34 =  'P6-Pendiente';
    break;
    default:
                //esta listo
                $claseboton34 = 'success';
                $habilitarboton34 = '';
                $mensajebtn34 =  'P6-Realizado';
}


if($valor->c9p37intermediao1 <> '' && $valor->c9p38intermediao1 <> '' && $valor->c9p39intermediao1 <> '' && $valor->c9p40intermedia <> '' && $valor->c9p41intermedia <> '' && $valor->c9p42intermediao1 <> '' && $valor->c9p43intermedia == '')
    {
        $estado35 = '97'; 
    }
    else 
    {
        $estado35 = $valor->c9p43intermedia;
    }       
        switch ($estado35) 
{                
              
    case '98': //Para salto
                $claseboton35 = '';
                $habilitarboton35 = 'disabled="disabled"';
                $mensajebtn35 =  'P7-No Aplica';
    break;       
    case '97'://actual
                $claseboton35 = 'warning';
                $habilitarboton35 = '';
                $mensajebtn35 =  'P7-Actual';
    break;       
    case ''://por realizar o pendiente
                $claseboton35 = 'danger';
                $habilitarboton35 = 'disabled="disabled"';
                $mensajebtn35 =  'P7-Pendiente';
    break;
    default:
                //esta listo
                $claseboton35 = 'success';
                $habilitarboton35 = '';
                $mensajebtn35 =  'P7-Realizado';
}

$cap9r1 = $valor->c9p37intermediao1 <> '' && $valor->c9p38intermediao1 <> '' && $valor->c9p39intermediao1 <> '' && $valor->c9p40intermedia <> '' && $valor->c9p41intermedia <> '' && $valor->c9p42intermediao1 <> '' && $valor->c9p43intermedia <> '';

 $datos15 .=  '<tr><td><button type="button" id="crp1a'.$valor->idintegrante.'" '.$habilitarboton29.' onclick="crp1('.$valor->folio.','.$valor->idintegrante.')" class="btn btn-'.$claseboton29.' btn-sm col-sm-9">'.$mensajebtn29.'</button></td>
                   <td><button type="button" id="crp2a'.$valor->idintegrante.'" '.$habilitarboton30.' onclick="crp2('.$valor->folio.','.$valor->idintegrante.')" class="btn btn-'.$claseboton30.' btn-sm col-sm-9">'.$mensajebtn30.'</button></td>        
                   <td><button type="button" id="crp3a'.$valor->idintegrante.'" '.$habilitarboton31.' onclick="crp3('.$valor->folio.','.$valor->idintegrante.')" class="btn btn-'.$claseboton31.' btn-sm col-sm-9">'.$mensajebtn31.'</button></td>        
                   <td><button type="button" id="crp4a'.$valor->idintegrante.'" '.$habilitarboton32.' onclick="crp4('.$valor->folio.','.$valor->idintegrante.')" class="btn btn-'.$claseboton32.' btn-sm col-sm-9">'.$mensajebtn32.'</button></td>        
                   <td><button type="button" id="crp5a'.$valor->idintegrante.'" '.$habilitarboton33.' onclick="crp5('.$valor->folio.','.$valor->idintegrante.')" class="btn btn-'.$claseboton33.' btn-sm col-sm-9">'.$mensajebtn33.'</button></td>        
                   <td><button type="button" id="crp6a'.$valor->idintegrante.'" '.$habilitarboton34.' onclick="crp6('.$valor->folio.','.$valor->idintegrante.')" class="btn btn-'.$claseboton34.' btn-sm col-sm-9">'.$mensajebtn34.'</button></td>        
                   <td><button type="button" id="crp7a'.$valor->idintegrante.'" '.$habilitarboton35.' onclick="crp7('.$valor->folio.','.$valor->idintegrante.')" class="btn btn-'.$claseboton35.' btn-sm col-sm-9">'.$mensajebtn35.'</button></td>        
                   
                                
             </tr>';
        }
        
        
//        fin cap 9
        
 
        
        

        
        
        
        



        
   
        
        
//        inicio cap12
        
        
        $totalcap =  $cap51 <> '' && $cap71 <> '' && $cap81 <> ''  && $cap9l1 <> '' && $cap9m1 <> '' && $cap9n1 <> ''
               && $cap9p1 <> '' && $cap9q1 <> '' && $cap9r1 <> ''    ;
        
        
       
        
     
       //ESTO LEVANTA LA VISTA     
        $titulo = 'v_capitulosintegranteintermedia'; // para el titulo de la vista en la pestaña
        $this->load->view('pages/' . $page,  array('titulo' => $titulo,'foot' => FOOTS, 'head1' => HEAD1, 'botonerag' => BOTONERAG,
                                                   'botoneraa' => BOTONERAA,  'datos2'=> $datos2, 'datos3' => $datos3,'carrayrespuestas' => $carrayrespuestas,
                                                   'datos4' => $datos4,
                                                   'folio' => $folio,'datos8' => $datos8, 'datos10' => $datos10,'datos11' => $datos11,
                                                   'datos12' => $datos12,'datos13' => $datos13, 'datos15' => $datos15,'folio' => $folio, 'tdatinte' => $tdatinte,
                                                   'cap5' => $cap5,'cap7' => $cap7,'cap8' => $cap8, 'cap9l'=>$cap9l,'cap9m'=>$cap9m,'cap9n'=>$cap9n,
                                                   'cap9p'=>$cap9p,'cap9q'=>$cap9q,'cap9r'=>$cap9r, 'cap51'=>$cap51
                                                  ,'cap71'=>$cap71, 'cap81'=>$cap81,'cap9l1'=>$cap9l1, 'cap9m1'=>$cap9m1, 'cap9n1'=>$cap9n1
                                                  ,'cap9p1'=>$cap9p1,'cap9q1'=>$cap9q1,'cap9r1'=>$cap9r1,  'totalcap' => $totalcap ));
        //FIN LEVANTA LA VISTA
         
        
    }
    
 

 
    
    }
    
    
    public function fc_actualizarestadoint() 
    {
        $cfolio = $this->input->get('vfolio');
        $cidintegrante = $this->input->get('vidintegrante');
        $cstadointe = $this->input->get('vestadointe');
        $this->m_capitulosintegranteintermedia->fm_actualizarint($cfolio,$cidintegrante,$cstadointe);
        
    }
    
    
//    public function fc_insertarestadoint() 
//    {
//        $cfolio = $this->input->get('vfolio');
//        $cidintegrante = $this->input->get('vidintegrante');
//        $cstadointe = $this->input->get('vestadointe');
//        $this->m_integrantes->fm_insertarestadoint($cfolio,$cidintegrante,$cstadointe);
//        
//    }
    
    
}

