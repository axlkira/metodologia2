<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class  C_ppcapitulosintegrante extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->model('/perfilproductivo/m_ppcapitulosintegrante');//carga el controlador modelo
        if( $this->session->userdata('documento') == '')
        {
            redirect('/c_login/fc_vlogin');
        }  
    }

    //funcion encargada de llamar a la vista de la pagina 
    public function fc_ppcapitulosintegrante($page = 'v_ppcapitulosintegrante') {

        if (!file_exists('application/views/pages/perfilproductivo/' . $page . '.php')) {
            // Whoops, we don't have a page for that!
            show_404();
        }
        //INICIO TRAER DATOS DEL TITULAR
        $folio = $this->input->get('folio');//tomamos el valor del folio que viene por get
        $idintegrante = $this->input->get('idintegrante');
       
        $datosintegrante = $this->m_ppcapitulosintegrante->fm_datosintegrante($folio,$idintegrante);//lo mandasmos a la funcion del modelo para verificar
        
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
        $crespuestas = $this->m_ppcapitulosintegrante->fm_buscarestadoint($idintegrante);
        $carrayrespuestas= array('eestadointe' => ''); 
        foreach ($crespuestas as $crespuesta)
        {
            $carrayrespuestas = array('eestadointe' => $crespuesta->estadointe);
        }
          
//traer una lista de valores cap 4
        $listartabla = $this->m_ppcapitulosintegrante->fm_listartablacap1($idintegrante);
                       
        $datos1 = '';
        $cap1 = '';
        $cap11 = '';
        foreach ($listartabla as $valor)
        {
        $cap1 =$valor->ppc1p5n1o1;       
        switch ($valor->ppc1p2n3)
          
{                
              
    case '98': //Para salto
                $claseboton1 = '';
                $habilitarboton1 = 'disabled="disabled"';
                $mensajebtn1 =  'P2n3-No Aplica';
    break;       
    case '97'://actual
                $claseboton1 = 'warning';
                $habilitarboton1 = '';
                $mensajebtn1 =  'P2n3-Actual';
    break;       
    case ''://por realizar o pendiente
                $claseboton1 = 'warning';
                $habilitarboton1 = '';
                $mensajebtn1 =  'P2n3-Actual';
    break;
    default:
                //esta listo
                $claseboton1 = 'success';
                $habilitarboton1 = '';
                $mensajebtn1 =  'P2n3-Realizado';
}
$listartabla = $this->m_ppcapitulosintegrante->fm_listartablacap1($idintegrante);
                       
        $datos1 = '';
        $cap1 = '';
        foreach ($listartabla as $valor)
        {
        $cap1 =$valor->ppc1p5n1o1;
        
    if ($valor->ppc1p2n3 != ''){
        
                $claseboton7 = 'success';
                $habilitarboton7 = '';
                $mensajebtn7 =  'P2n3-Realizado';
    }else{
                $claseboton7 = 'warning';
                $habilitarboton7 = '';
                $mensajebtn7 =  'P2n3-Actual';
    }
if( $valor->numero_libretamilitar <> '' && $valor->ppc1p2n5 == '')
    {
        $estado8 = '97'; 
    }
    else 
    {
        $estado8 = $valor->ppc1p2n5;
    }       
        switch ($estado8) 
{                
              
    case '98': //Para salto
                $claseboton8 = '';
                $habilitarboton8 = 'disabled="disabled"';
                $mensajebtn8 =  'P2n5-No Aplica';
    break;       
    case '97'://actual
                $claseboton8 = 'warning';
                $habilitarboton8 = '';
                $mensajebtn8 =  'P2n5-Actual';
    break;       
    case ''://por realizar o pendiente
                $claseboton8 = 'danger';
                $habilitarboton8 = 'disabled="disabled"';
                $mensajebtn8 =  'P2n5-Pendiente';
    break;
    default:
                //esta listo
                $claseboton8 = 'success';
                $habilitarboton8 = '';
                $mensajebtn8 =  'P2n5-Realizado';
}

if($valor->numero_libretamilitar <> '' && $valor->ppc1p2n5 <> '' && $valor->ppc1p2n7 == '')
    {
        $estado9 = '97'; 
    }
    else 
    {
        $estado9 = $valor->ppc1p2n7;
    }       
        switch ($estado9) 
{                
              
    case '98': //Para salto
                $claseboton9 = '';
                $habilitarboton9 = 'disabled="disabled"';
                $mensajebtn9 =  'P2n7-No Aplica';
    break;       
    case '97'://actual
                $claseboton9 = 'warning';
                $habilitarboton9 = '';
                $mensajebtn9 =  'P2n7-Actual';
    break;       
    case ''://por realizar o pendiente
                $claseboton9 = 'danger';
                $habilitarboton9 = 'disabled="disabled"';
                $mensajebtn9 =  'P2n7-Pendiente';
    break;
    default:
                //esta listo
                $claseboton9 = 'success';
                $habilitarboton9 = '';
                $mensajebtn9 =  'P2n7-Realizado';
}
/////////////////////////////////////////chacha////////
if($valor->numero_libretamilitar <> '' && $valor->ppc1p2n5 <> '' && $valor->ppc1p2n7 <> '' && $valor->ppc1p3n1 == '')
    {
        $estado10 = '97'; 
    }
    else 
    {
        $estado10 = $valor->ppc1p3n1;
    }       
        switch ($estado10) 
{                
              
    case '98': //Para salto
                $claseboton10 = '';
                $habilitarboton10 = 'disabled="disabled"';
                $mensajebtn10 =  'P3n1-No Aplica';
    break;       
    case '97'://actual
                $claseboton10 = 'warning';
                $habilitarboton10 = '';
                $mensajebtn10 =  'P3n1-Actual';
    break;       
    case ''://por realizar o pendiente
                $claseboton10 = 'danger';
                $habilitarboton10 = 'disabled="disabled"';
                $mensajebtn10 =  'P3n1-Pendiente';
    break;
    default:
                //esta listo
                $claseboton10 = 'success';
                $habilitarboton10 = '';
                $mensajebtn10 =  'P3n1-Realizado';
}

////////////fin chacha/////////////

if($valor->numero_libretamilitar <> '' && $valor->ppc1p2n5 <> '' && $valor->ppc1p2n7 <> '' && $valor->ppc1p3n1 <> '' && $valor->ppc1p3n2 == '')
    {
        $estado11 = '97'; 
    }
    else 
    {
        $estado11 = $valor->ppc1p3n2;
    }       
        switch ($estado11) 
{                
              
    case '98': //Para salto
                $claseboton11 = '';
                $habilitarboton11 = 'disabled="disabled"';
                $mensajebtn11 =  'P3n2-No Aplica';
    break;       
    case '97'://actual
                $claseboton11 = 'warning';
                $habilitarboton11 = '';
                $mensajebtn11 =  'P3n2-Actual';
    break;       
    case ''://por realizar o pendiente
                $claseboton11 = 'danger';
                $habilitarboton11 = 'disabled="disabled"';
                $mensajebtn11 =  'P3n2-Pendiente';
    break;
    default:
                //esta listo
                $claseboton11 = 'success';
                $habilitarboton11 = '';
                $mensajebtn11 =  'P3n2-Realizadoccc';
}

if($valor->numero_libretamilitar <> '' && $valor->ppc1p2n5 <> '' && $valor->ppc1p2n7 <> '' && $valor->ppc1p3n1 <>'' && $valor->ppc1p3n2 <>'' && $valor->ppc1p4n1 =='')
    {
        $estado12 = '97'; 
    }
    else 
    {
        $estado12 = $valor->ppc1p4n1;
    }       
        switch ($estado12) 
{                
              
    case '98': //Para salto
                $claseboton12 = '';
                $habilitarboton12 = 'disabled="disabled"';
                $mensajebtn12 =  'P4n1-No Aplica';
    break;       
    case '97'://actual
                $claseboton12 = 'warning';
                $habilitarboton12 = '';
                $mensajebtn12 =  'P4n1-Actual';
    break;       
    case ''://por realizar o pendiente
                $claseboton12 = 'danger';
                $habilitarboton12 = 'disabled="disabled"';
                $mensajebtn12 =  'P4n1-Pendiente';
    break;
    default:
                //esta listo
                $claseboton12 = 'success';
                $habilitarboton12 = '';
                $mensajebtn12 =  'P4n1-Realizado';
}

if($valor->numero_libretamilitar <> '' && $valor->ppc1p2n5 <> '' && $valor->ppc1p2n7 <> '' && $valor->ppc1p3n1 <>'' && $valor->ppc1p3n2 <>'' && $valor->ppc1p4n1 <>'' && $valor->ppc1p4n6 =='')
    {
        $estado13 = '97'; 
    }
    else 
    {
        $estado13 = $valor->ppc1p4n6;
    }       
        switch ($estado13) 
{                
              
    case '98': //Para salto
                $claseboton13 = '';
                $habilitarboton13 = 'disabled="disabled"';
                $mensajebtn13 =  'P4n6-No Aplica';
    break;       
    case '97'://actual
                $claseboton13 = 'warning';
                $habilitarboton13 = '';
                $mensajebtn13 =  'P4n6-Actual';
    break;       
    case ''://por realizar o pendiente
                $claseboton13 = 'danger';
                $habilitarboton13 = 'disabled="disabled"';
                $mensajebtn13 =  'P4n6-Pendiente';
    break;
    default:
                //esta listo
                $claseboton13 = 'success';
                $habilitarboton13 = '';
                $mensajebtn13 =  'P4n6-Realizado';
}


if($valor->numero_libretamilitar <> '' && $valor->ppc1p2n5 <> '' && $valor->ppc1p2n7 <> '' && $valor->ppc1p3n1 <>'' && $valor->ppc1p3n2 <>'' && $valor->ppc1p4n1 <>'' && $valor->ppc1p4n6 <>'' && $valor->ppc1p4n7o1 =='')
    {
        $estado14 = '97'; 
    }
    else 
    {
        $estado14 = $valor->ppc1p4n7o1;
    }       
        switch ($estado14) 
{                
              
    case '98': //Para salto
                $claseboton14 = '';
                $habilitarboton14 = 'disabled="disabled"';
                $mensajebtn14 =  'P4n7-No Aplica';
    break;       
    case '97'://actual
                $claseboton14 = 'warning';
                $habilitarboton14 = '';
                $mensajebtn14 =  'P4n7-Actual';
    break;       
    case ''://por realizar o pendiente
                $claseboton14 = 'danger';
                $habilitarboton14 = 'disabled="disabled"';
                $mensajebtn14 =  'P4n7-Pendiente';
    break;
    default:
                //esta listo
                $claseboton14 = 'success';
                $habilitarboton14 = '';
                $mensajebtn14 =  'P4n7-Realizado';
}

if($valor->numero_libretamilitar <> '' && $valor->ppc1p2n5 <> '' && $valor->ppc1p2n7 <> '' && $valor->ppc1p3n1 <>'' && $valor->ppc1p3n2 <>'' && $valor->ppc1p4n1 <>'' && $valor->ppc1p4n6 <>'' && $valor->ppc1p4n7o1 <>'' && $valor->ppc1p5n1o1 =='')
    {
        $estado15 = '97'; 
    }
    else 
    {
        $estado15 = $valor->ppc1p5n1o1;
    }       
        switch ($estado15) 
{                
              
    case '98': //Para salto
                $claseboton15 = '';
                $habilitarboton15 = 'disabled="disabled"';
                $mensajebtn15 =  'P5n1-No Aplica';
    break;       
    case '97'://actual
                $claseboton15 = 'warning';
                $habilitarboton15 = '';
                $mensajebtn15 =  'P5n1-Actual';
    break;       
    case ''://por realizar o pendiente
                $claseboton15 = 'danger';
                $habilitarboton15 = 'disabled="disabled"';
                $mensajebtn15 =  'P5n1-Pendiente';
    break;
    default:
                //esta listo
                $claseboton15 = 'success';
                $habilitarboton15 = '';
                $mensajebtn15 =  'P5n1-Realizado';
}

$cap11 = $valor->numero_libretamilitar <> '' && $valor->ppc1p2n5 <> '' && $valor->ppc1p2n7 <> '' && $valor->ppc1p3n1 <>'' && $valor->ppc1p3n2 <>'' && $valor->ppc1p4n1 <>'' && $valor->ppc1p4n6 <>'' && $valor->ppc1p4n7o1 <>'' && $valor->ppc1p5n1o1 <>'';

        $datos1 .=  '<tr>'
                    //.'<td>'.$valor->idvivienda.'</td>'
                    .'<td><button type="button" id="c4p7a'.$valor->idintegrante.'" '.$habilitarboton7.' onclick="c4p7('.$valor->folio.','.$valor->idintegrante.')" class="btn btn-'.$claseboton7.' btn-sm col-sm-9">'.$mensajebtn7.'</button></td>
                      <td><button type="button" id="c4p8a'.$valor->idintegrante.'" '.$habilitarboton8.' onclick="c4p8('.$valor->folio.','.$valor->idintegrante.')" class="btn btn-'.$claseboton8.' btn-sm col-sm-9">'.$mensajebtn8.'</button></td>
                      <td><button type="button" id="c4p9a'.$valor->idintegrante.'" '.$habilitarboton9.' onclick="c4p9('.$valor->folio.','.$valor->idintegrante.')" class="btn btn-'.$claseboton9.' btn-sm col-sm-9">'.$mensajebtn9.'</button></td>
                      <td><button type="button" id="c4p10a'.$valor->idintegrante.'" '.$habilitarboton10.' onclick="c4p10('.$valor->folio.','.$valor->idintegrante.')" class="btn btn-'.$claseboton10.' btn-sm col-sm-9">'.$mensajebtn10.'</button></td>
                      <td><button type="button" id="c4p11a'.$valor->idintegrante.'" '.$habilitarboton11.' onclick="c4p11('.$valor->folio.','.$valor->idintegrante.')" class="btn btn-'.$claseboton11.' btn-sm col-sm-9">'.$mensajebtn11.'</button></td>    
                      <td><button type="button" id="c4p12a'.$valor->idintegrante.'" '.$habilitarboton12.' onclick="c4p12('.$valor->folio.','.$valor->idintegrante.')" class="btn btn-'.$claseboton12.' btn-sm col-sm-9">'.$mensajebtn12.'</button></td>        
                      <td><button type="button" id="c4p13a'.$valor->idintegrante.'" '.$habilitarboton13.' onclick="c4p13('.$valor->folio.','.$valor->idintegrante.')" class="btn btn-'.$claseboton13.' btn-sm col-sm-9">'.$mensajebtn13.'</button></td>            
                      <td><button type="button" id="c4p14a'.$valor->idintegrante.'" '.$habilitarboton14.' onclick="c4p14('.$valor->folio.','.$valor->idintegrante.')" class="btn btn-'.$claseboton14.' btn-sm col-sm-9">'.$mensajebtn14.'</button></td>  
                      <td><button type="button" id="c4p15a'.$valor->idintegrante.'" '.$habilitarboton15.' onclick="c4p15('.$valor->folio.','.$valor->idintegrante.')" class="btn btn-'.$claseboton15.' btn-sm col-sm-9">'.$mensajebtn15.'</button></td>
                      </tr>  
                         
                    ';
        }  
//        fin cap 1
//        inicio lista de cap 2
        $listartabla = $this->m_ppcapitulosintegrante->fm_listartablacap5i($idintegrante);
                       
        $datos2 = '';
        $cap5 = '';
        $cap51 = '';
        foreach ($listartabla as $valor)
        {
        $cap5 =$valor->ppc2p2;
        
        if( $cap1 <> '' && $valor->ppc2p1o1 == '')
        {
        $estado1 = '97'; 
        }
        else 
        {
        $estado1 = $valor->ppc2p1o1;
        }       
            switch ($estado1) 
          
{                
              
    case '98': //Para salto
                $claseboton1 = '';
                $habilitarboton1 = 'disabled="disabled"';
                $mensajebtn1 =  'P2n1-No Aplica';
    break;       
    case '97'://actual
                $claseboton1 = 'warning';
                $habilitarboton1 = '';
                $mensajebtn1 =  'P2n1-Actual';
    break;       
    case ''://por realizar o pendiente
                $claseboton1 = 'warning';
                $habilitarboton1 = 'disabled="disabled"';
                $mensajebtn1 =  'P2n1-Actual';
    break;
    default:
                //esta listo
                $claseboton1 = 'success';
                $habilitarboton1 = '';
                $mensajebtn1 =  'P2n1-Realizado';
}

if($valor->ppc2p1o1 <> '' && $valor->ppc2p2 == '')
    {
        $estado13o1 = '97'; 
    }
    else 
    {
        $estado13o1 = $valor->ppc2p2;
    }       
        switch ($estado13o1) 
{                
              
    case '98': //Para salto
                $claseboton13o1= '';
                $habilitarboton13o1 = 'disabled="disabled"';
                $mensajebtn13o1 =  'P2n2-No Aplica';
    break;       
    case '97'://actual
                $claseboton13o1 = 'warning';
                $habilitarboton13o1 = '';
                $mensajebtn13o1 =  'P2n2-Actual';
    break;       
    case ''://por realizar o pendiente
                $claseboton13o1 = 'danger';
                $habilitarboton13o1 = 'disabled="disabled"';
                $mensajebtn13o1 =  'P2n2-Pendiente';
    break;
    default:
                //esta listo
                $claseboton13o1 = 'success';
                $habilitarboton13o1= '';
                $mensajebtn13o1 =  'P2n2-Realizado';
}

$cap51 = $valor->ppc2p1o1 <> '' && $valor->ppc2p2 <> '';
        $datos2 .=  '<tr>'
                    //.'<td>'.$valor->idvivienda.'</td>'
                    .'<td><button type="button" id="c5p1a'.$valor->idintegrante.'" '.$habilitarboton1.' onclick="c5p1('.$valor->folio.','.$valor->idintegrante.')" class="btn btn-'.$claseboton1.' btn-sm col-sm-4">'.$mensajebtn1.'</button></td>
                      <td><button type="button" id="c5p13o1a'.$valor->idintegrante.'" '.$habilitarboton13o1.' onclick="c5p13o1('.$valor->folio.','.$valor->idintegrante.')" class="btn btn-'.$claseboton13o1.' btn-sm col-sm-3">'.$mensajebtn13o1.'</button></td>    
                      </tr>
                      ';
        }  
//fin traer una lista de valores cap 5
//        inicio lista de cap 7
        
        $listartabla = $this->m_ppcapitulosintegrante->fm_listartablacap7i($idintegrante);
                       
        $datos3 = '';
        $cap71 = '';
        $cap7 = '';
        foreach ($listartabla as $valor)
        {
        $cap7 =$valor->ppc3p4a1;
        
        if( $cap5 <> '' && $valor->ppc3p1 == '')
        {
        $estado1 = '97'; 
        }
        else 
        {
        $estado1 = $valor->ppc3p1;
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
if( $valor->ppc3p1 <> '' && $valor->ppc3p2 == '')
    {
        $estado2 = '97'; 
    }
    else 
    {
        $estado2 = $valor->ppc3p2;
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

if($valor->ppc3p1 <> '' && $valor->ppc3p2 <> '' && $valor->ppc3p3a == '')
    {
        $estado3 = '97'; 
    }
    else 
    {
        $estado3 = $valor->ppc3p3a;
    }       
        switch ($estado3) 
{                
              
    case '98': //Para salto
                $claseboton3 = '';
                $habilitarboton3 = 'disabled="disabled"';
                $mensajebtn3 =  'P3n1-No Aplica';
    break;       
    case '97'://actual
                $claseboton3 = 'warning';
                $habilitarboton3 = '';
                $mensajebtn3 =  'P3n1-Actual';
    break;       
    case ''://por realizar o pendiente
                $claseboton3 = 'danger';
                $habilitarboton3 = 'disabled="disabled"';
                $mensajebtn3 =  'P3n1-Pendiente';
    break;
    default:
                //esta listo
                $claseboton3 = 'success';
                $habilitarboton3 = '';
                $mensajebtn3 =  'P3n1-Realizado';
}
if($valor->ppc3p1 <> '' && $valor->ppc3p2 <> '' && $valor->ppc3p3a <> ''&& $valor->ppc3p3c == '')
    {
        $estado4 = '97'; 
    }
    else 
    {
        $estado4 = $valor->ppc3p3c;
    }       
        switch ($estado4) 
{                
              
    case '98': //Para salto
                $claseboton4 = '';
                $habilitarboton4 = 'disabled="disabled"';
                $mensajebtn4 =  'P3n3-No Aplica';
    break;       
    case '97'://actual
                $claseboton4 = 'warning';
                $habilitarboton4 = '';
                $mensajebtn4 =  'P3n3-Actual';
    break;       
    case ''://por realizar o pendiente
                $claseboton4 = 'danger';
                $habilitarboton4 = 'disabled="disabled"';
                $mensajebtn4 =  'P3n3-Pendiente';
    break;
    default:
                //esta listo
                $claseboton4 = 'success';
                $habilitarboton4 = '';
                $mensajebtn4 =  'P3n3-Realizado';
}
if($valor->ppc3p1 <> '' && $valor->ppc3p2 <> '' && $valor->ppc3p3a <> ''&& $valor->ppc3p3c <> ''&& $valor->ppc3p3e1 == '')
    {
        $estado5 = '97'; 
    }
    else 
    {
        $estado5 = $valor->ppc3p3e1;
    }       
        switch ($estado5) 
{                
              
    case '98': //Para salto
                $claseboton5 = '';
                $habilitarboton5 = 'disabled="disabled"';
                $mensajebtn5 =  'P3n5-No Aplica';
    break;       
    case '97'://actual
                $claseboton5 = 'warning';
                $habilitarboton5 = '';
                $mensajebtn5 =  'P3n5-Actual';
    break;       
    case ''://por realizar o pendiente
                $claseboton5 = 'danger';
                $habilitarboton5 = 'disabled="disabled"';
                $mensajebtn5 =  'P3n5-Pendiente';
    break;
    default:
                //esta listo
                $claseboton5 = 'success';
                $habilitarboton5 = '';
                $mensajebtn5 =  'P3n5-Realizado';
}
if($valor->ppc3p1 <> '' && $valor->ppc3p2 <> '' && $valor->ppc3p3a <> ''&& $valor->ppc3p3c <> ''&& $valor->ppc3p3e1 <> ''&& $valor->ppc3p4a1 == '')
    {
        $estado6 = '97'; 
    }
    else 
    {
        $estado6 = $valor->ppc3p4a1;
    }       
        switch ($estado6) 
{                
              
    case '98': //Para salto
                $claseboton6 = '';
                $habilitarboton6 = 'disabled="disabled"';
                $mensajebtn6 =  'P5-No Aplica';
    break;       
    case '97'://actual
                $claseboton6 = 'warning';
                $habilitarboton6 = '';
                $mensajebtn6 =  'P5-Actual';
    break;       
    case ''://por realizar o pendiente
                $claseboton6 = 'danger';
                $habilitarboton6 = 'disabled="disabled"';
                $mensajebtn6 =  'P5-Pendiente';
    break;
    default:
                //esta listo
                $claseboton6 = 'success';
                $habilitarboton6 = '';
                $mensajebtn6 =  'P5-Realizado';
}

$cap71 = $valor->ppc3p1 <> '' && $valor->ppc3p2 <> '' && $valor->ppc3p3a <> ''&& $valor->ppc3p3c <> ''&& $valor->ppc3p3e1 <> ''&& $valor->ppc3p4a1 <> '';

        $datos3 .=  '<tr>'                
                    .'<td><button type="button" id="c7p1a'.$valor->idintegrante.'" '.$habilitarboton1.' onclick="c7p1('.$valor->folio.','.$valor->idintegrante.')" class="btn btn-'.$claseboton1.' btn-sm col-sm-6">'.$mensajebtn1.'</button></td>
                      <td><button type="button" id="c7p2a'.$valor->idintegrante.'" '.$habilitarboton2.' onclick="c7p2('.$valor->folio.','.$valor->idintegrante.')" class="btn btn-'.$claseboton2.' btn-sm col-sm-6">'.$mensajebtn2.'</button></td>
                      <td><button type="button" id="c7p3a'.$valor->idintegrante.'" '.$habilitarboton3.' onclick="c7p3('.$valor->folio.','.$valor->idintegrante.')" class="btn btn-'.$claseboton3.' btn-sm col-sm-6">'.$mensajebtn3.'</button></td>
                      <td><button type="button" id="c7p3c'.$valor->idintegrante.'" '.$habilitarboton4.' onclick="c7p3c('.$valor->folio.','.$valor->idintegrante.')" class="btn btn-'.$claseboton4.' btn-sm col-sm-6">'.$mensajebtn4.'</button></td>
                      <td><button type="button" id="c7p4'.$valor->idintegrante.'" '.$habilitarboton5.' onclick="c7p4('.$valor->folio.','.$valor->idintegrante.')" class="btn btn-'.$claseboton5.' btn-sm col-sm-6">'.$mensajebtn5.'</button></td>
                      <td><button type="button" id="c7p5'.$valor->idintegrante.'" '.$habilitarboton6.' onclick="c7p5('.$valor->folio.','.$valor->idintegrante.')" class="btn btn-'.$claseboton6.' btn-sm col-sm-6">'.$mensajebtn6.'</button></td>
                      
                     </tr> ';
        }  
// fin cap 7    
//        inicio cap 8
        $listartabla = $this->m_ppcapitulosintegrante->fm_listartablacap8i($idintegrante);
                       
        $datos4 = '';
        $cap8 = '';
        $cap81 = '';
        foreach ($listartabla as $valor)
        {
        $cap8 = $valor->ppc4p13a18;
        
        
        if( $cap7 <> '' && $valor->ppc4p1 == '')
        {
        $estado1 = '97'; 
        }
        else 
        {
        $estado1 = $valor->ppc4p1;
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
if( $valor->ppc4p1 <> '' && $valor->ppc4p1a1 == '')
    {
        $estado2 = '97'; 
    }
    else 
    {
        $estado2 = $valor->ppc4p1a1;
    }       
        switch ($estado2) 
 
{                
              
    case '98': //Para salto
                $claseboton2 = '';
                $habilitarboton2 = 'disabled="disabled"';
                $mensajebtn2 =  'P1n1-No Aplica';
    break;       
    case '97'://actual
                $claseboton2 = 'warning';
                $habilitarboton2 = '';
                $mensajebtn2 =  'P1n1-Actual';
    break;       
    case ''://por realizar o pendiente
                $claseboton2 = 'danger';
                $habilitarboton2 = 'disabled="disabled"';
                $mensajebtn2 =  'P1n1-Pendiente';
    break;
    default:
                //esta listo
                $claseboton2 = 'success';
                $habilitarboton2 = '';
                $mensajebtn2 =  'P1n1-Realizado';
}
//$estado3 = '';
if($valor->ppc4p1 <> '' && $valor->ppc4p1a1 <> '' && $valor->ppc4p2 == '')
    {
        $estado3 = '97'; 
    }
    else 
    {
        $estado3 = $valor->ppc4p2;
    }       
        switch ($estado3) 

{                
              
    case '98': //Para salto
                $claseboton3 = '';
                $habilitarboton3 = 'disabled="disabled"';
                $mensajebtn3 =  'P2-No Aplica';
    break;       
    case '97'://actual
                $claseboton3 = 'warning';
                $habilitarboton3 = '';
                $mensajebtn3 =  'P2-Actual';
    break;       
    case ''://por realizar o pendiente
                $claseboton3 = 'danger';
                $habilitarboton3 = 'disabled="disabled"';
                $mensajebtn3 =  'P2-Pendiente';
    break;
    default:
                //esta listo
                $claseboton3 = 'success';
                $habilitarboton3 = '';
                $mensajebtn3 =  'P2-Realizado';
}


if($valor->ppc4p1 <> '' && $valor->ppc4p1a1 <> '' && $valor->ppc4p2 <>'' && $valor->ppc4p3 == '')
    {
        $estado4 = '97'; 
    }
    else 
    {
        $estado4 = $valor->ppc4p3;
    }       
        switch ($estado4) 
{                
              
    case '98': //Para salto
                $claseboton4 = '';
                $habilitarboton4 = 'disabled="disabled"';
                $mensajebtn4 =  'P3-No Aplica';
    break;       
    case '97'://actual
                $claseboton4 = 'warning';
                $habilitarboton4 = '';
                $mensajebtn4 =  'P3-Actual';
    break;       
    case ''://por realizar o pendiente
                $claseboton4 = 'danger';
                $habilitarboton4 = 'disabled="disabled"';
                $mensajebtn4 =  'P3-Pendiente';
    break;
    default:
                //esta listo
                $claseboton4 = 'success';
                $habilitarboton4 = '';
                $mensajebtn4 =  'P3-Realizado';
}

if($valor->ppc4p1 <> '' && $valor->ppc4p1a1 <> '' && $valor->ppc4p2 <>'' && $valor->ppc4p3 <> '' && $valor->ppc4p3a1 == '')
    {
        $estado5 = '97'; 
    }
    else 
    {
        $estado5 = $valor->ppc4p3a1;
    }       
        switch ($estado5) 
{                
              
    case '98': //Para salto
                $claseboton5 = '';
                $habilitarboton5 = 'disabled="disabled"';
                $mensajebtn5 =  'P3n1-No Aplica';
    break;       
    case '97'://actual
                $claseboton5 = 'warning';
                $habilitarboton5 = '';
                $mensajebtn5 =  'P3n1-Actual';
    break;       
    case ''://por realizar o pendiente
                $claseboton5 = 'danger';
                $habilitarboton5 = 'disabled="disabled"';
                $mensajebtn5 =  'P3n1-Pendiente';
    break;
    default:
                //esta listo
                $claseboton5 = 'success';
                $habilitarboton5 = '';
                $mensajebtn5 =  'P3n1-Realizado';
}

if($valor->ppc4p1 <> '' && $valor->ppc4p1a1 <> '' && $valor->ppc4p2 <>'' && $valor->ppc4p3 <> '' && $valor->ppc4p3a1 <> '' && $valor->ppc4p4 == '')
    {
        $estado6 = '97'; 
    }
    else 
    {
        $estado6 = $valor->ppc4p4;
    }       
        switch ($estado6) 
{                
              
    case '98': //Para salto
                $claseboton6 = '';
                $habilitarboton6 = 'disabled="disabled"';
                $mensajebtn6 =  'P4-No Aplica';
    break;       
    case '97'://actual
                $claseboton6 = 'warning';
                $habilitarboton6 = '';
                $mensajebtn6 =  'P4-Actual';
    break;       
    case ''://por realizar o pendiente
                $claseboton6 = 'danger';
                $habilitarboton6 = 'disabled="disabled"';
                $mensajebtn6 =  'P4-Pendiente';
    break;
    default:
                //esta listo
                $claseboton6 = 'success';
                $habilitarboton6 = '';
                $mensajebtn6 =  'P4-Realizado';
}
if($valor->ppc4p1 <> '' && $valor->ppc4p1a1 <> '' && $valor->ppc4p2 <>'' && $valor->ppc4p3 <> '' && $valor->ppc4p3a1 <> '' && $valor->ppc4p4 <> ''&& $valor->ppc4p5 == '')
    {
        $estado7 = '97'; 
    }
    else 
    {
        $estado7 = $valor->ppc4p5;
    }       
        switch ($estado7) 
{                
              
    case '98': //Para salto
                $claseboton7 = '';
                $habilitarboton7 = 'disabled="disabled"';
                $mensajebtn7 =  'P5-No Aplica';
    break;       
    case '97'://actual
                $claseboton7 = 'warning';
                $habilitarboton7 = '';
                $mensajebtn7 =  'P5-Actual';
    break;       
    case ''://por realizar o pendiente
                $claseboton7 = 'danger';
                $habilitarboton7 = 'disabled="disabled"';
                $mensajebtn7 =  'P5-Pendiente';
    break;
    default:
                //esta listo
                $claseboton7 = 'success';
                $habilitarboton7 = '';
                $mensajebtn7 =  'P5-Realizado';
}
if($valor->ppc4p1 <> '' && $valor->ppc4p1a1 <> '' && $valor->ppc4p2 <>'' && $valor->ppc4p3 <> '' && $valor->ppc4p3a1 <> '' && $valor->ppc4p4 <> ''&& $valor->ppc4p5 <> ''&& $valor->ppc4p6 == '')
    {
        $estado8 = '97'; 
    }
    else 
    {
        $estado8 = $valor->ppc4p6;
    }       
        switch ($estado8) 
{                
              
    case '98': //Para salto
                $claseboton8 = '';
                $habilitarboton8 = 'disabled="disabled"';
                $mensajebtn8 =  'P6-No Aplica';
    break;       
    case '97'://actual
                $claseboton8 = 'warning';
                $habilitarboton8 = '';
                $mensajebtn8 =  'P6-Actual';
    break;       
    case ''://por realizar o pendiente
                $claseboton8 = 'danger';
                $habilitarboton8 = 'disabled="disabled"';
                $mensajebtn8 =  'P6-Pendiente';
    break;
    default:
                //esta listo
                $claseboton8 = 'success';
                $habilitarboton8 = '';
                $mensajebtn8 =  'P6-Realizado';
}
if($valor->ppc4p1 <> '' && $valor->ppc4p1a1 <> '' && $valor->ppc4p2 <>'' && $valor->ppc4p3 <> '' && $valor->ppc4p3a1 <> '' && $valor->ppc4p4 <> ''&& $valor->ppc4p5 <> ''&& $valor->ppc4p6 <> ''&& $valor->ppc4p6a1 == '')
    {
        $estado9 = '97'; 
    }
    else 
    {
        $estado9 = $valor->ppc4p6a1;
    }       
        switch ($estado9) 
{                
              
    case '98': //Para salto
                $claseboton9 = '';
                $habilitarboton9 = 'disabled="disabled"';
                $mensajebtn9 =  'P6n1-No Aplica';
    break;       
    case '97'://actual
                $claseboton9 = 'warning';
                $habilitarboton9 = '';
                $mensajebtn9 =  'P6n1-Actual';
    break;       
    case ''://por realizar o pendiente
                $claseboton9 = 'danger';
                $habilitarboton9 = 'disabled="disabled"';
                $mensajebtn9 =  'P6n1-Pendiente';
    break;
    default:
                //esta listo
                $claseboton9 = 'success';
                $habilitarboton9 = '';
                $mensajebtn9 =  'P6n1-Realizado';
}
if($valor->ppc4p1 <> '' && $valor->ppc4p1a1 <> '' && $valor->ppc4p2 <>'' && $valor->ppc4p3 <> '' && $valor->ppc4p3a1 <> '' && $valor->ppc4p4 <> ''&& $valor->ppc4p5 <> ''&& $valor->ppc4p6 <> ''&& $valor->ppc4p6a1 <> ''&& $valor->ppc4p7 == '')
    {
        $estado10 = '97'; 
    }
    else 
    {
        $estado10 = $valor->ppc4p7;
    }       
        switch ($estado10) 
{                
              
    case '98': //Para salto
                $claseboton10 = '';
                $habilitarboton10 = 'disabled="disabled"';
                $mensajebtn10 =  'P7-No Aplica';
    break;       
    case '97'://actual
                $claseboton10 = 'warning';
                $habilitarboton10 = '';
                $mensajebtn10 =  'P7-Actual';
    break;       
    case ''://por realizar o pendiente
                $claseboton10 = 'danger';
                $habilitarboton10 = 'disabled="disabled"';
                $mensajebtn10 =  'P7-Pendiente';
    break;
    default:
                //esta listo
                $claseboton10 = 'success';
                $habilitarboton10 = '';
                $mensajebtn10 =  'P7-Realizado';
}
if($valor->ppc4p1 <> '' && $valor->ppc4p1a1 <> '' && $valor->ppc4p2 <>'' && $valor->ppc4p3 <> '' && $valor->ppc4p3a1 <> '' && $valor->ppc4p4 <> ''&& $valor->ppc4p5 <> ''&& $valor->ppc4p6 <> ''&& $valor->ppc4p6a1 <> ''&& $valor->ppc4p7 <> ''&& $valor->ppc4p8 == '')
    {
        $estado11 = '97'; 
    }
    else 
    {
        $estado11 = $valor->ppc4p8;
    }       
        switch ($estado11) 
{                
              
    case '98': //Para salto
                $claseboton11 = '';
                $habilitarboton11 = 'disabled="disabled"';
                $mensajebtn11 =  'P8-No Aplica';
    break;       
    case '97'://actual
                $claseboton11 = 'warning';
                $habilitarboton11 = '';
                $mensajebtn11 =  'P8-Actual';
    break;       
    case ''://por realizar o pendiente
                $claseboton11 = 'danger';
                $habilitarboton11 = 'disabled="disabled"';
                $mensajebtn11 =  'P8-Pendiente';
    break;
    default:
                //esta listo
                $claseboton11 = 'success';
                $habilitarboton11 = '';
                $mensajebtn11 =  'P8-Realizado';
}
if($valor->ppc4p1 <> '' && $valor->ppc4p1a1 <> '' && $valor->ppc4p2 <>'' && $valor->ppc4p3 <> '' && $valor->ppc4p3a1 <> '' && $valor->ppc4p4 <> ''&& $valor->ppc4p5 <> ''&& $valor->ppc4p6 <> ''&& $valor->ppc4p6a1 <> ''&& $valor->ppc4p7 <> ''&& $valor->ppc4p8 <> ''&& $valor->ppc4p9 == '')
    {
        $estado12 = '97'; 
    }
    else 
    {
        $estado12 = $valor->ppc4p9;
    }       
        switch ($estado12) 
{                
              
    case '98': //Para salto
                $claseboton12 = '';
                $habilitarboton12 = 'disabled="disabled"';
                $mensajebtn12 =  'P9-No Aplica';
    break;       
    case '97'://actual
                $claseboton12 = 'warning';
                $habilitarboton12 = '';
                $mensajebtn12 =  'P9-Actual';
    break;       
    case ''://por realizar o pendiente
                $claseboton12 = 'danger';
                $habilitarboton12 = 'disabled="disabled"';
                $mensajebtn12 =  'P9-Pendiente';
    break;
    default:
                //esta listo
                $claseboton12 = 'success';
                $habilitarboton12 = '';
                $mensajebtn12 =  'P9-Realizado';
}
if($valor->ppc4p1 <> '' && $valor->ppc4p1a1 <> '' && $valor->ppc4p2 <>'' && $valor->ppc4p3 <> '' && $valor->ppc4p3a1 <> '' && $valor->ppc4p4 <> ''&& $valor->ppc4p5 <> ''&& $valor->ppc4p6 <> ''&& $valor->ppc4p6a1 <> ''&& $valor->ppc4p7 <> ''&& $valor->ppc4p8 <> ''&& $valor->ppc4p9 <> ''&& $valor->ppc4p10 == '')
    {
        $estado13 = '97'; 
    }
    else 
    {
        $estado13 = $valor->ppc4p10;
    }       
        switch ($estado13) 
{                
              
    case '98': //Para salto
                $claseboton13 = '';
                $habilitarboton13 = 'disabled="disabled"';
                $mensajebtn13 =  'P10-No Aplica';
    break;       
    case '97'://actual
                $claseboton13 = 'warning';
                $habilitarboton13 = '';
                $mensajebtn13 =  'P10-Actual';
    break;       
    case ''://por realizar o pendiente
                $claseboton13 = 'danger';
                $habilitarboton13 = 'disabled="disabled"';
                $mensajebtn13 =  'P10-Pendiente';
    break;
    default:
                //esta listo
                $claseboton13 = 'success';
                $habilitarboton13 = '';
                $mensajebtn13 =  'P10-Realizado';
}
if($valor->ppc4p1 <> '' && $valor->ppc4p1a1 <> '' && $valor->ppc4p2 <>'' && $valor->ppc4p3 <> '' && $valor->ppc4p3a1 <> '' && $valor->ppc4p4 <> ''&& $valor->ppc4p5 <> ''&& $valor->ppc4p6 <> ''&& $valor->ppc4p6a1 <> ''&& $valor->ppc4p7 <> ''&& $valor->ppc4p8 <> ''&& $valor->ppc4p9 <> ''&& $valor->ppc4p10 <> ''&& $valor->ppc4p11 == '')
    {
        $estado14 = '97'; 
    }
    else 
    {
        $estado14 = $valor->ppc4p11;
    }       
        switch ($estado14) 
{                
              
    case '98': //Para salto
                $claseboton14 = '';
                $habilitarboton14 = 'disabled="disabled"';
                $mensajebtn14 =  'P11-No Aplica';
    break;       
    case '97'://actual
                $claseboton14 = 'warning';
                $habilitarboton14 = '';
                $mensajebtn14 =  'P11-Actual';
    break;       
    case ''://por realizar o pendiente
                $claseboton14 = 'danger';
                $habilitarboton14 = 'disabled="disabled"';
                $mensajebtn14 =  'P11-Pendiente';
    break;
    default:
                //esta listo
                $claseboton14 = 'success';
                $habilitarboton14 = '';
                $mensajebtn14 =  'P11-Realizado';
}
if($valor->ppc4p1 <> '' && $valor->ppc4p1a1 <> '' && $valor->ppc4p2 <>'' && $valor->ppc4p3 <> '' && $valor->ppc4p3a1 <> '' && $valor->ppc4p4 <> ''&& $valor->ppc4p5 <> ''&& $valor->ppc4p6 <> ''&& $valor->ppc4p6a1 <> ''&& $valor->ppc4p7 <> ''&& $valor->ppc4p8 <> ''&& $valor->ppc4p9 <> ''&& $valor->ppc4p10 <> ''&& $valor->ppc4p11 <> ''&& $valor->ppc4p11a1 == '')
    {
        $estado15 = '97'; 
    }
    else 
    {
        $estado15 = $valor->ppc4p11a1;
    }       
        switch ($estado15) 
{                
              
    case '98': //Para salto
                $claseboton15 = '';
                $habilitarboton15 = 'disabled="disabled"';
                $mensajebtn15 =  'P11n1-No Aplica';
    break;       
    case '97'://actual
                $claseboton15 = 'warning';
                $habilitarboton15 = '';
                $mensajebtn15 =  'P11n1-Actual';
    break;       
    case ''://por realizar o pendiente
                $claseboton15 = 'danger';
                $habilitarboton15 = 'disabled="disabled"';
                $mensajebtn15 =  'P11n1-Pendiente';
    break;
    default:
                //esta listo
                $claseboton15 = 'success';
                $habilitarboton15 = '';
                $mensajebtn15 =  'P11n1-Realizado';
}
if($valor->ppc4p1 <> '' && $valor->ppc4p1a1 <> '' && $valor->ppc4p2 <>'' && $valor->ppc4p3 <> '' && $valor->ppc4p3a1 <> '' && $valor->ppc4p4 <> ''&& $valor->ppc4p5 <> ''&& $valor->ppc4p6 <> ''&& $valor->ppc4p6a1 <> ''&& $valor->ppc4p7 <> ''&& $valor->ppc4p8 <> ''&& $valor->ppc4p9 <> ''&& $valor->ppc4p10 <> ''&& $valor->ppc4p11 <> ''&& $valor->ppc4p11a1 <> ''&& $valor->ppc4p12 == '')
    {
        $estado16 = '97'; 
    }
    else 
    {
        $estado16 = $valor->ppc4p12;
    }       
        switch ($estado16) 
{                
              
    case '98': //Para salto
                $claseboton16 = '';
                $habilitarboton16 = 'disabled="disabled"';
                $mensajebtn16 =  'P12-No Aplica';
    break;       
    case '97'://actual
                $claseboton16 = 'warning';
                $habilitarboton16 = '';
                $mensajebtn16 =  'P12-Actual';
    break;       
    case ''://por realizar o pendiente
                $claseboton16 = 'danger';
                $habilitarboton16 = 'disabled="disabled"';
                $mensajebtn16 =  'P12-Pendiente';
    break;
    default:
                //esta listo
                $claseboton16 = 'success';
                $habilitarboton16 = '';
                $mensajebtn16 =  'P12-Realizado';
}
if($valor->ppc4p1 <> '' && $valor->ppc4p1a1 <> '' && $valor->ppc4p2 <>'' && $valor->ppc4p3 <> '' && $valor->ppc4p3a1 <> '' && $valor->ppc4p4 <> ''&& $valor->ppc4p5 <> ''&& $valor->ppc4p6 <> ''&& $valor->ppc4p6a1 <> ''&& $valor->ppc4p7 <> ''&& $valor->ppc4p8 <> ''&& $valor->ppc4p9 <> ''&& $valor->ppc4p10 <> ''&& $valor->ppc4p11 <> ''&& $valor->ppc4p11a1 <> ''&& $valor->ppc4p12 <> ''&& $valor->ppc4p13 == '')
    {
        $estado17 = '97'; 
    }
    else 
    {
        $estado17 = $valor->ppc4p13;
    }       
        switch ($estado17) 
{                
              
    case '98': //Para salto
                $claseboton17 = '';
                $habilitarboton17 = 'disabled="disabled"';
                $mensajebtn17 =  'P13-No Aplica';
    break;       
    case '97'://actual
                $claseboton17 = 'warning';
                $habilitarboton17 = '';
                $mensajebtn17 =  'P13-Actual';
    break;       
    case ''://por realizar o pendiente
                $claseboton17 = 'danger';
                $habilitarboton17 = 'disabled="disabled"';
                $mensajebtn17 =  'P13-Pendiente';
    break;
    default:
                //esta listo
                $claseboton17 = 'success';
                $habilitarboton17 = '';
                $mensajebtn17 =  'P13-Realizado';
}
if($valor->ppc4p1 <> '' && $valor->ppc4p1a1 <> '' && $valor->ppc4p2 <>'' && $valor->ppc4p3 <> '' && $valor->ppc4p3a1 <> '' && $valor->ppc4p4 <> ''&& $valor->ppc4p5 <> ''&& $valor->ppc4p6 <> ''&& $valor->ppc4p6a1 <> ''&& $valor->ppc4p7 <> ''&& $valor->ppc4p8 <> ''&& $valor->ppc4p9 <> ''&& $valor->ppc4p10 <> ''&& $valor->ppc4p11 <> ''&& $valor->ppc4p11a1 <> ''&& $valor->ppc4p12 <> ''&& $valor->ppc4p13 <> ''&& $valor->ppc4p13a1 == '')
    {
        $estado18 = '97'; 
    }
    else 
    {
        $estado18 = $valor->ppc4p13a1;
    }       
        switch ($estado18) 
{                
              
    case '98': //Para salto
                $claseboton18 = '';
                $habilitarboton18 = 'disabled="disabled"';
                $mensajebtn18 =  'P13n1-No Aplica';
    break;       
    case '97'://actual
                $claseboton18 = 'warning';
                $habilitarboton18 = '';
                $mensajebtn18 =  'P13n1-Actual';
    break;       
    case ''://por realizar o pendiente
                $claseboton18 = 'danger';
                $habilitarboton18 = 'disabled="disabled"';
                $mensajebtn18 =  'P13n1-Pendiente';
    break;
    default:
                //esta listo
                $claseboton18 = 'success';
                $habilitarboton18 = '';
                $mensajebtn18 =  'P13n1-Realizado';
}
$cap81 = $valor->ppc4p1 <> '' && $valor->ppc4p1a1 <> '' && $valor->ppc4p2 <>'' && $valor->ppc4p3 <> '' && $valor->ppc4p3a1 <> '' && $valor->ppc4p4 <> ''&& $valor->ppc4p5 <> ''&& $valor->ppc4p6 <> ''&& $valor->ppc4p6a1 <> ''&& $valor->ppc4p7 <> ''&& $valor->ppc4p8 <> ''&& $valor->ppc4p9 <> ''&& $valor->ppc4p10 <> ''&& $valor->ppc4p11 <> ''&& $valor->ppc4p11a1 <> ''&& $valor->ppc4p12 <> ''&& $valor->ppc4p13 <> ''&& $valor->ppc4p13a1 <> '';

$datos4 .=  '<tr>'                    
                    .'<td><button type="button" id="c8p1a'.$valor->idintegrante.'" '.$habilitarboton1.' onclick="c8p1('.$valor->folio.','.$valor->idintegrante.')" class="btn btn-'.$claseboton1.' btn-sm col-sm-9">'.$mensajebtn1.'</button></td>
                      <td><button type="button" id="c8p2a'.$valor->idintegrante.'" '.$habilitarboton2.' onclick="c8p2('.$valor->folio.','.$valor->idintegrante.')" class="btn btn-'.$claseboton2.' btn-sm col-sm-9">'.$mensajebtn2.'</button></td>
                      <td><button type="button" id="c8p3a'.$valor->idintegrante.'" '.$habilitarboton3.' onclick="c8p3('.$valor->folio.','.$valor->idintegrante.')" class="btn btn-'.$claseboton3.' btn-sm col-sm-9">'.$mensajebtn3.'</button></td>
                      <td><button type="button" id="c8p4a'.$valor->idintegrante.'" '.$habilitarboton4.' onclick="c8p4('.$valor->folio.','.$valor->idintegrante.')" class="btn btn-'.$claseboton4.' btn-sm col-sm-9">'.$mensajebtn4.'</button></td>    
                      <td><button type="button" id="c8p5a'.$valor->idintegrante.'" '.$habilitarboton5.' onclick="c8p5('.$valor->folio.','.$valor->idintegrante.')" class="btn btn-'.$claseboton5.' btn-sm col-sm-9">'.$mensajebtn5.'</button></td>        
                      <td><button type="button" id="c8p6a'.$valor->idintegrante.'" '.$habilitarboton6.' onclick="c8p6('.$valor->folio.','.$valor->idintegrante.')" class="btn btn-'.$claseboton6.' btn-sm col-sm-9">'.$mensajebtn6.'</button></td>            
             </tr>
             <tr>
                   <td><button type="button" id="c9mp9a'.$valor->idintegrante.'" '.$habilitarboton7.' onclick="c8p7('.$valor->folio.','.$valor->idintegrante.')" class="btn btn-'.$claseboton7.' btn-sm col-sm-9">'.$mensajebtn7.'</button></td>
                   <td><button type="button" id="c9mp10a'.$valor->idintegrante.'" '.$habilitarboton8.' onclick="c8p8('.$valor->folio.','.$valor->idintegrante.')" class="btn btn-'.$claseboton8.' btn-sm col-sm-9">'.$mensajebtn8.'</button></td>
                   <td><button type="button" id="c9mp11a'.$valor->idintegrante.'" '.$habilitarboton9.' onclick="c8p9('.$valor->folio.','.$valor->idintegrante.')" class="btn btn-'.$claseboton9.' btn-sm col-sm-9">'.$mensajebtn9.'</button></td>
                   <td><button type="button" id="c9mp12a'.$valor->idintegrante.'" '.$habilitarboton10.' onclick="c8p10('.$valor->folio.','.$valor->idintegrante.')" class="btn btn-'.$claseboton10.' btn-sm col-sm-9">'.$mensajebtn10.'</button></td>
                   <td><button type="button" id="c9mp13a'.$valor->idintegrante.'" '.$habilitarboton11.' onclick="c8p11('.$valor->folio.','.$valor->idintegrante.')" class="btn btn-'.$claseboton11.' btn-sm col-sm-9">'.$mensajebtn11.'</button></td>
                   <td><button type="button" id="c9mp14a'.$valor->idintegrante.'" '.$habilitarboton12.' onclick="c8p12('.$valor->folio.','.$valor->idintegrante.')" class="btn btn-'.$claseboton12.' btn-sm col-sm-9">'.$mensajebtn12.'</button></td>    
       
                 </tr>
                 <tr>
                 <td><button type="button" id="c9mp15a'.$valor->idintegrante.'" '.$habilitarboton13.' onclick="c8p13('.$valor->folio.','.$valor->idintegrante.')" class="btn btn-'.$claseboton13.' btn-sm col-sm-9">'.$mensajebtn13.'</button></td>    
                 <td><button type="button" id="c9mp16a'.$valor->idintegrante.'" '.$habilitarboton14.' onclick="c8p14('.$valor->folio.','.$valor->idintegrante.')" class="btn btn-'.$claseboton14.' btn-sm col-sm-9">'.$mensajebtn14.'</button></td>    
                 <td><button type="button" id="c9mp17a'.$valor->idintegrante.'" '.$habilitarboton15.' onclick="c8p15('.$valor->folio.','.$valor->idintegrante.')" class="btn btn-'.$claseboton15.' btn-sm col-sm-9">'.$mensajebtn15.'</button></td>    
                 <td><button type="button" id="c9mp18a'.$valor->idintegrante.'" '.$habilitarboton16.' onclick="c8p16('.$valor->folio.','.$valor->idintegrante.')" class="btn btn-'.$claseboton16.' btn-sm col-sm-9">'.$mensajebtn16.'</button></td>                         
                 <td><button type="button" id="c9mp19a'.$valor->idintegrante.'" '.$habilitarboton17.' onclick="c8p17('.$valor->folio.','.$valor->idintegrante.')" class="btn btn-'.$claseboton17.' btn-sm col-sm-9">'.$mensajebtn17.'</button></td>                                              
                 <td><button type="button" id="c9mp20a'.$valor->idintegrante.'" '.$habilitarboton18.' onclick="c8p18('.$valor->folio.','.$valor->idintegrante.')" class="btn btn-'.$claseboton18.' btn-sm col-sm-9">'.$mensajebtn18.'</button></td>                                                                   
                 </tr>
                 <tr>
                 </tr>';
        } 
//    fin cap8    
        $totalcap = $cap11 <> '' && $cap51 <> '' && $cap71 <> '' && $cap81 <> '' ;
       //ESTO LEVANTA LA VISTA     
        $titulo = 'v_ppcapitulosintegrante'; // para el titulo de la vista en la pestaña
        $this->load->view('pages/perfilproductivo/' . $page,  array('titulo' => $titulo,'foot' => FOOTS, 'head1' => HEAD1, 'botonerag' => BOTONERAG,
                                                   'botoneraa' => BOTONERAA, 'datos1'=> $datos1, 'datos2'=> $datos2, 'datos3' => $datos3,'carrayrespuestas' => $carrayrespuestas,
                                                   'datos4' => $datos4,'folio' => $folio,'folio' => $folio, 'tdatinte' => $tdatinte,
                                                   'cap1' => $cap1,'cap5' => $cap5,'cap7' => $cap7,'cap8' => $cap8,'cap11' => $cap11, 'cap51'=>$cap51
                                                  ,'cap71'=>$cap71, 'cap81'=>$cap81,'totalcap' => $totalcap ));
        //FIN LEVANTA LA VISTA
    }
    
 

 
    
    }
    
    
    public function fc_actualizarestadoint() 
    {
        $cfolio = $this->input->get('vfolio');
        $cidintegrante = $this->input->get('vidintegrante');
        $cstadointe = $this->input->get('vestadointe');
        $this->m_ppcapitulosintegrante->fm_actualizarint($cfolio,$cidintegrante,$cstadointe);
        
    }

}

