<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class  C_principalhogar extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->model('m_principalhogar');//carga el controlador modelo

        if( $this->session->userdata('documento') == '')
        {
            redirect('/c_login/fc_vlogin');
        }         
    }

    //funcion encargada de llamar a la vista de la pagina 
    public function fc_principalhogar($page = 'v_principalhogar') {
        
        if (!file_exists('application/views/pages/' . $page . '.php')) {
            // Whoops, we don't have a page for that!
            show_404();
        }
        //traer una lista de valoresfolio
        $doccogestor = $this->session->userdata('documento');
        $listartabla = $this->m_principalhogar->fm_listartabla($doccogestor);
                
        $datosl1e1 = '';
        $datosl1e2 = '';
        $datosl2e1 = '';        
        $datosl2e2 = '';
        $datosl3 = '';
        $datosl2e3 = '';
        $datosl31 = '';
        $datosl32 = '';
        $datosl2e4 = '';
        $datosl2e5 = '';
        $datosl2e6 = '';
        $datosl2e7 = '';
        $datosl4 = '';
        $datosl5 = '';
        $datosl6 = '';
        
        
        $datosl7 = '';
        
        
        $a1e1 = 0;//para saber el numero de l registro
        $b1e1 = 0;//el resultado del modulo para saber si es verde o blanco 
        $a1e2 = 0;//para saber el numero de l registro
        $b1e2 = 0;//el resultado del modulo para saber si es verde o blanco 
        $a2e1 = 0;//para saber el numero de l registro
        $b2e1 = 0;//el resultado del modulo para saber si es verde o blanco 
        $a3e1 = 0;
        $b3e1 = 0;
        $a5e1 = 0;
        $b5e1 = 0;
        $a6e1 = 0;
        $b6e1 = 0;
        $a7e1 = 0;
        $b7e1 = 0;
        $a8e1 = 0;
        $b8e1 = 0;
        $a9e1 = 0;
        $b9e1 = 0;
        $a10e1 = 0;
        $b10e1 = 0;
  
        $a11e1 = 0;
        $b11e1 = 0;
  
        $a12e1 = 0;
        $b12e1 = 0;

        $a13e1 = 0;
        $b13e1 = 0;

        $a14e1 = 0;
        $b14e1 = 0;

        $a14e19 = 0;
        $b14e19 = 0;
        
        foreach ($listartabla as $valor)
        {
        
        if($valor->bloqueofolio == 1)
        {
            $bloqueo = '<td><button type="button" id="Protocolo" class="btn btn-warning  btn-sm" disabled title="Esta opción va al módulo donde se selecciona la línea y estación para realizar la visita de acompañamiento familiar.">Bloqueado por efectividad</button></td>';
        }
        else
        {
            $bloqueo = '<td><button type="button" id="Protocolo" onclick="iraprotocolo('.$valor->folio.','.$valor->idintegrantetitular.','.$valor->doccogestor.')" class="btn btn-warning  btn-sm" title="Esta opción va al módulo donde se selecciona la línea y estación para realizar la visita de acompañamiento familiar.">Protocolo</button></td>'; 
        }
        
        if($valor->logros == 0)
        {
            $bloqueologros = '<td><button type="button" id="diagnostico" class="btn btn-default  btn-sm" disabled title="Esta opción va al módulo de diagnóstico inicial y actual de logros, tanto del hogar como de los integrantes, además se puede realizar el movimiento de logros.">Sin logros</button></td>';
        }
        else
        {
            $bloqueologros = '<td><button type="button" id="diagnostico" onclick="iradiagnostico('.$valor->folio.','.$valor->doccogestor.')" class="btn btn-default btn-sm" title="Esta opción va al módulo de diagnóstico inicial y actual de logros, tanto del hogar como de los integrantes, además se puede realizar el movimiento de logros.">Logros calculados</button></td>'; 
        }
               
        if($valor->privaciones == 0)
        {
            $bloqueoprivaciones = '<td><button type="button" id="privaciones" class="btn btn-success btn-sm" disabled title="Esta opción va al módulo de diagnóstico inicial y actual de las privaciones,  tanto del hogar como de los integrantes.">Sin Privaciones</button></td>';
        }
        else
        {
            $bloqueoprivaciones = '<td><button type="button" id="privaciones" onclick="iraprivaciones('.$valor->folio.','.$valor->doccogestor.')" class="btn btn-success btn-sm" title="Esta opción va al módulo de diagnóstico inicial y actual de las privaciones,  tanto del hogar como de los integrantes.">Privaciones</button></td>'; 
        }
        
         if($valor->eerf == '')
        {
            $bloqueoeerf = '<td><button type="button" id="eerf" class="btn btn-success btn-sm" disabled title="Esta opción va al módulo de escala de evaluación de las relaciones familiares.">Sin ERFAM</button></td>';
        }
        else
        {
            $bloqueoeerf = '<td><button type="button" id="eerf" onclick="vereerf('.$valor->folio.',\''.$valor->nombre1.' '.$valor->nombre2.' '.$valor->apellido1.' '.$valor->apellido2.'\')" class="btn btn-success btn-sm" title="Esta opción va al módulo de escala de evaluación de las relaciones familiares.">ERFAM</button></td>'; 
        }


        
        if($valor->editar_llbf == '11')
        {
            $editllbf= '<td><button type="button" id="ellbf" onclick="iraprotocolo('.$valor->folio.','.$valor->idintegrantetitular.','.$valor->doccogestor.'),editallbf('.$valor->folio.','.$valor->idintegrantetitular.')" class="btn btn-success btn-sm" title="Esta opción va a la visita de línea de clasificación, pero es una edición de la primera visita realizada.">EDICION LDC</button></td>';
        }
        else
        {
            $editllbf = '<td><button type="button" id="ellbf" style="display: none"  class="btn btn-success btn-sm" title="Esta opción va a la visita de línea de clasificación, pero es una edición de la primera visita realizada.">EDICION LDC</button></td>'; 
        }

        if($valor->idestacionmin == '1')
        {
            $vencuadref = '<td><button type="button" id="vencuadre" disabled="disabled" onclick="iraencuadre('.$valor->folio.','.$valor->idintegrantetitular.','.$valor->doccogestor.')" class="btn btn-success btn-sm" title="Esta opción va a la visita de encuadre para el proceso de acompañamiento familiar.">Encuadre realizado</button></td>'; 
        }
        else
        {
            $vencuadref = '<td><button type="button" id="vencuadre"  onclick="iraencuadre('.$valor->folio.','.$valor->idintegrantetitular.','.$valor->doccogestor.')" class="btn btn-warning btn-sm" title="Esta opción va a la visita de encuadre para el proceso de acompañamiento familiar.">Encuadre</button></td>'; 
        }

        // inicio boton de casilla LCV1
        if($valor->casilladflcv1 <> '')
        {
            $botoncasilladflcv1 = '<td><button type="button" id="privacionesLCV1" onclick="iraprivacionesLCV1('.$valor->folio.','.$valor->doccogestor.')" class="btn btn-success btn-sm" title="Esta opción va al módulo de privaciones calculadas en la línea de cierre.">Privaciones L.C</button></td>'; 
        }
        else
        {
            $botoncasilladflcv1 = '<td><button type="button" id="privacionesLCV1" style="display: none"  class="btn btn-success btn-sm" title="Esta opción va al módulo de privaciones calculadas en la línea de cierre.">Privaciones L.C</button></td>'; 
        }
        // fin boton de casilla LCV1




           //linea 1 estacion 1            
          // if( ($valor->idestacion == '' || $valor->idestacion == '10') && $valor->intermedia == '' ) {
            if(($valor->idestacion == '' || $valor->idestacion == '10' || $valor->idestacion == '1')) {   
                $cont1= 0;
                ++$cont1;
                ++$a1e1;
                $b1e1 = $a1e1 % 2;
                //para colocar el color de la fila
                if($b1e1 === 1)
                {
                    $colorfila1 = 'class="success text-uppercase"';
                }
                else
                {
                    $colorfila1 = 'class="text-uppercase"';
                }
               
                $datosl1e1 .=  '<tr '.$colorfila1.'>'
                    .'<td>'.$valor->folio.'</td>'
                    .'<td style="display:none">'.$valor->idintegrantetitular.'</td>'
                    .'<td>'.$valor->documento.'</td>'
                    .'<td>'.$valor->nombre1.' '.$valor->nombre2.' '.$valor->apellido1.' '.$valor->apellido2.'</td>'
                    .'<td style="display:none">'.$valor->nombre1.'</td>'
                    .'<td style="display:none">'.$valor->nombre2.'</td>'
                    .'<td style="display:none">'.$valor->apellido1.'</td>'
                    .'<td style="display:none">'.$valor->apellido2.'</td>'
                    .'<td><button type="button" id="Actualizar" onclick="iraactualizar('.$valor->folio.','.$valor->doccogestor.')"class="btn btn-success btn-sm" title="Esta opción va al módulo de actualización de datos, donde se actualiza la información general tanto del hogar como de los integrantes.">Actualizar</button></td>
                      '.$bloqueo.'
                    <td><button type="button" id="fichero" onclick="irafichero('.$valor->folio.','.$valor->idintegrantetitular.')" class="btn btn-primary btn-sm" title="Esta opción va al módulo donde se acercan, se hacen o no efectiva las oportunidades,  tanto del hogar como de los integrantes.">Fichero</button></td>
                    '.$bloqueologros.'
                    '.$bloqueoprivaciones.'
                    '.$bloqueoeerf.'
                    '.$vencuadref.'  
                   </tr>';
           }
             // linea 1 estacion 2
            //if($valor->idestacion == '11' && $valor->intermedia == '' ){
                if($valor->idestacion == '11'){
                
                $cont2= 0;
                ++$cont2;
                ++$a1e2;
                $b1e2 = $a1e2 % 2;
                //para colocar el color de la fila
                if($b1e2 === 1)
                {
                    $colorfila2 = 'class="success text-uppercase"';
                }
                else
                {
                    $colorfila2 = 'class="text-uppercase"';
                }
                $datosl1e2 .=  '<tr '.$colorfila2.'>'
                    .'<td>'.$valor->folio.'</td>'
                    .'<td style="display:none">'.$valor->idintegrantetitular.'</td>'
                    .'<td>'.$valor->documento.'</td>'
                    .'<td>'.$valor->nombre1.' '.$valor->nombre2.' '.$valor->apellido1.' '.$valor->apellido2.'</td>'
                    .'<td style="display:none">'.$valor->nombre1.'</td>'
                    .'<td style="display:none">'.$valor->nombre2.'</td>'
                    .'<td style="display:none">'.$valor->apellido1.'</td>'
                    .'<td style="display:none">'.$valor->apellido2.'</td>'
                    .'<td><button type="button" id="Actualizar" onclick="iraactualizar('.$valor->folio.','.$valor->doccogestor.')"class="btn btn-success btn-sm" title="Esta opción va al módulo de actualización de datos, donde se actualiza la información general tanto del hogar como de los integrantes.">Actualizar</button></td>
                      '.$bloqueo.'
                    <td><button type="button" id="fichero" onclick="irafichero('.$valor->folio.','.$valor->idintegrantetitular.')" class="btn btn-primary btn-sm" title="Esta opción va al módulo donde se acercan, se hacen o no efectiva las oportunidades,  tanto del hogar como de los integrantes.">Fichero</button></td>
                    '.$bloqueologros.'
                    '.$bloqueoprivaciones.'
                    '.$bloqueoeerf.' 
                    '.$editllbf.' 
                    '.$vencuadref.'  
                   </tr>';
            }  
            // linea 2 estacion 1
            //if($valor->idestacion == '12' && $valor->intermedia == ''){
                if($valor->idestacion == '12'){
                    
                $cont2= 0;
                ++$cont2;
                ++$a2e1;
                $b2e1 = $a2e1 % 2;
                //para colocar el color de la fila
                if($b2e1 === 1)
                {
                    $colorfila3 = 'class="success text-uppercase"';
                }
                else
                {
                    $colorfila3 = 'class="text-uppercase"';
                }
                $datosl2e1 .=  '<tr '.$colorfila3.'>'
                    .'<td>'.$valor->folio.'</td>'
                    .'<td style="display:none">'.$valor->idintegrantetitular.'</td>'
                    .'<td>'.$valor->documento.'</td>'
                    .'<td>'.$valor->nombre1.' '.$valor->nombre2.' '.$valor->apellido1.' '.$valor->apellido2.'</td>'
                    .'<td style="display:none">'.$valor->nombre1.'</td>'
                    .'<td style="display:none">'.$valor->nombre2.'</td>'
                    .'<td style="display:none">'.$valor->apellido1.'</td>'
                    .'<td style="display:none">'.$valor->apellido2.'</td>'
                    .'<td><button type="button" id="Actualizar" onclick="iraactualizar('.$valor->folio.','.$valor->doccogestor.')"class="btn btn-success btn-sm" title="Esta opción va al módulo de actualización de datos, donde se actualiza la información general tanto del hogar como de los integrantes.">Actualizar</button></td>
                      '.$bloqueo.'
                    <td><button type="button" id="fichero" onclick="irafichero('.$valor->folio.','.$valor->idintegrantetitular.')" class="btn btn-primary btn-sm" title="Esta opción va al módulo donde se acercan, se hacen o no efectiva las oportunidades,  tanto del hogar como de los integrantes.">Fichero</button></td>
                    '.$bloqueologros.'
                    '.$bloqueoprivaciones.'
                    '.$bloqueoeerf.'
                    '.$editllbf.'    
                    '.$vencuadref.'  
                    
                   </tr>';
            }
             // linea 2 estacion 2
             //if($valor->idestacion == '21' && $valor->intermedia == ''){
                 if($valor->idestacion == '21'){
                 $cont2= 0;
                ++$cont2;
                ++$a3e1;
                $b3e1 = $a3e1 % 2;
                //para colocar el color de la fila
                if($b3e1 === 1)
                {
                    $colorfila3 = 'class="success text-uppercase"';
                }
                else
                {
                    $colorfila3 = 'class="text-uppercase"';
                }
                $datosl2e2 .=  '<tr '.$colorfila3.'>'
                    .'<td>'.$valor->folio.'</td>'
                    .'<td style="display:none">'.$valor->idintegrantetitular.'</td>'
                    .'<td>'.$valor->documento.'</td>'
                    .'<td>'.$valor->nombre1.' '.$valor->nombre2.' '.$valor->apellido1.' '.$valor->apellido2.'</td>'
                    .'<td style="display:none">'.$valor->nombre1.'</td>'
                    .'<td style="display:none">'.$valor->nombre2.'</td>'
                    .'<td style="display:none">'.$valor->apellido1.'</td>'
                    .'<td style="display:none">'.$valor->apellido2.'</td>'
                    .'<td><button type="button" id="Actualizar" onclick="iraactualizar('.$valor->folio.','.$valor->doccogestor.')"class="btn btn-success btn-sm" title="Esta opción va al módulo de actualización de datos, donde se actualiza la información general tanto del hogar como de los integrantes.">Actualizar</button></td>
                      '.$bloqueo.'
                    <td><button type="button" id="fichero" onclick="irafichero('.$valor->folio.','.$valor->idintegrantetitular.')" class="btn btn-primary btn-sm" title="Esta opción va al módulo donde se acercan, se hacen o no efectiva las oportunidades,  tanto del hogar como de los integrantes.">Fichero</button></td>
                    '.$bloqueologros.'
                    '.$bloqueoprivaciones.'
                    '.$bloqueoeerf.'   
                    '.$editllbf.' 
                    '.$vencuadref.'  
                   </tr>';
            }        
              // linea 2 estacion 3
              if($valor->idestacion == '22' && $valor->casilla <> '9'){
              //  if($valor->idestacion == '22' && $valor->casilla <> '9' && $valor->intermedia <> '1' && $valor->casilladf <> '9'){
                $cont3= 0;
                ++$cont3;
                ++$a5e1;
                $b5e1 = $a5e1 % 2;
                //para colocar el color de la fila
                if($b5e1 === 1)
                {
                    $colorfila3 = 'class="success text-uppercase"';
                }
                else
                {
                    $colorfila3 = 'class="text-uppercase"';
                }
                $datosl2e3 .=  '<tr '.$colorfila3.'>'
                    .'<td>'.$valor->folio.'</td>'
                    .'<td style="display:none">'.$valor->idintegrantetitular.'</td>'
                    .'<td>'.$valor->documento.'</td>'
                    .'<td>'.$valor->nombre1.' '.$valor->nombre2.' '.$valor->apellido1.' '.$valor->apellido2.'</td>'
                    .'<td style="display:none">'.$valor->nombre1.'</td>'
                    .'<td style="display:none">'.$valor->nombre2.'</td>'
                    .'<td style="display:none">'.$valor->apellido1.'</td>'
                    .'<td style="display:none">'.$valor->apellido2.'</td>'
                    .'<td><button type="button" id="Actualizar" onclick="iraactualizar('.$valor->folio.','.$valor->doccogestor.')"class="btn btn-success btn-sm" title="Esta opción va al módulo de actualización de datos, donde se actualiza la información general tanto del hogar como de los integrantes.">Actualizar</button></td>
                      '.$bloqueo.'
                    <td><button type="button" id="fichero" onclick="irafichero('.$valor->folio.','.$valor->idintegrantetitular.')" class="btn btn-primary btn-sm" title="Esta opción va al módulo donde se acercan, se hacen o no efectiva las oportunidades,  tanto del hogar como de los integrantes.">Fichero</button></td>
                    '.$bloqueologros.'
                    '.$bloqueoprivaciones.'
                    '.$bloqueoeerf.'
                    '.$editllbf.'
                    '.$vencuadref.'  
                   </tr>';
            }
            // linea 2 estacion 4

            if(($valor->idestacion == '23' && $valor->intermedia <> '1' && $valor->casilla <> '9')||
               ($valor->idestacion == '23' && $valor->intermedia == '1' && $valor->casilla <> '9' && ($valor->casilladf <> '9' && $valor->casilladf <> ''))){
                //if(($valor->idestacion == '23' && $valor->intermedia <> '1' && $valor->casilla <> '9' && $valor->casilladf <> '9')||
                //   ($valor->idestacion == '23' && $valor->intermedia == '1' && $valor->casilladf <> '9' && $valor->casilla <> '9'  && $valor->idestacion81 == '81')){
              
                $cont3= 0;
                ++$cont3;
                ++$a6e1;
                $b6e1 = $a6e1 % 2;
                //para colocar el color de la fila
                if($b6e1 === 1)
                {
                    $colorfila3 = 'class="success text-uppercase"';
                }
                else
                {
                    $colorfila3 = 'class="text-uppercase"';
                }
                $datosl3 .=  '<tr '.$colorfila3.'>'
                    .'<td>'.$valor->folio.'</td>'
                    .'<td style="display:none">'.$valor->idintegrantetitular.'</td>'
                    .'<td>'.$valor->documento.'</td>'
                    .'<td>'.$valor->nombre1.' '.$valor->nombre2.' '.$valor->apellido1.' '.$valor->apellido2.'</td>'
                    .'<td style="display:none">'.$valor->nombre1.'</td>'
                    .'<td style="display:none">'.$valor->nombre2.'</td>'
                    .'<td style="display:none">'.$valor->apellido1.'</td>'
                    .'<td style="display:none">'.$valor->apellido2.'</td>'
                    .'<td><button type="button" id="Actualizar" onclick="iraactualizar('.$valor->folio.','.$valor->doccogestor.')"class="btn btn-success btn-sm" title="Esta opción va al módulo de actualización de datos, donde se actualiza la información general tanto del hogar como de los integrantes.">Actualizar</button></td>
                      '.$bloqueo.'
                    <td><button type="button" id="fichero" onclick="irafichero('.$valor->folio.','.$valor->idintegrantetitular.')" class="btn btn-primary btn-sm" title="Esta opción va al módulo donde se acercan, se hacen o no efectiva las oportunidades,  tanto del hogar como de los integrantes.">Fichero</button></td>
                    '.$bloqueologros.'
                    '.$bloqueoprivaciones.'
                    '.$bloqueoeerf.'
                    '.$editllbf.'
                    '.$vencuadref.'  
                   </tr>';
            }
            
            // linea 2 estacion 5
                if($valor->idestacion == '24' && $valor->casilla <> '9' && $valor->casilladf <> '9'){
                //if($valor->idestacion == '24' && $valor->casilla <> '9' && $valor->intermedia <> '1' && $valor->casilladf <> '9'){
                 $cont3= 0;
                ++$cont3;
                ++$a10e1;
                $b10e1 = $a10e1 % 2;
                //para colocar el color de la fila
                if($b10e1 === 1)
                {
                    $colorfila3 = 'class="success text-uppercase"';
                }
                else
                {
                    $colorfila3 = 'class="text-uppercase"';
                }
                $datosl2e4 .=  '<tr '.$colorfila3.'>'
                    .'<td>'.$valor->folio.'</td>'
                    .'<td style="display:none">'.$valor->idintegrantetitular.'</td>'
                    .'<td>'.$valor->documento.'</td>'
                    .'<td>'.$valor->nombre1.' '.$valor->nombre2.' '.$valor->apellido1.' '.$valor->apellido2.'</td>'
                    .'<td style="display:none">'.$valor->nombre1.'</td>'
                    .'<td style="display:none">'.$valor->nombre2.'</td>'
                    .'<td style="display:none">'.$valor->apellido1.'</td>'
                    .'<td style="display:none">'.$valor->apellido2.'</td>'
                    .'<td><button type="button" id="Actualizar" onclick="iraactualizar('.$valor->folio.','.$valor->doccogestor.')"class="btn btn-success btn-sm" title="Esta opción va al módulo de actualización de datos, donde se actualiza la información general tanto del hogar como de los integrantes.">Actualizar</button></td>
                      '.$bloqueo.'
                    <td><button type="button" id="fichero" onclick="irafichero('.$valor->folio.','.$valor->idintegrantetitular.')" class="btn btn-primary btn-sm" title="Esta opción va al módulo donde se acercan, se hacen o no efectiva las oportunidades,  tanto del hogar como de los integrantes.">Fichero</button></td>
                    '.$bloqueologros.'
                    '.$bloqueoprivaciones.'
                    '.$bloqueoeerf.'
                    '.$editllbf.'
                    '.$vencuadref.'  
                   </tr>';
            }
            // linea 2 estacion 6
                if($valor->idestacion == '25' && $valor->casilla <> '9' && $valor->casilladf <> '9'){
                //if($valor->idestacion == '25' && $valor->casilla <> '9' && $valor->intermedia <> '' && $valor->casilladf <> '9'){
                 $cont3= 0;
                ++$cont3;
                ++$a9e1;
                $b9e1 = $a9e1 % 2;
                //para colocar el color de la fila
                if($b9e1 === 1)
                {
                    $colorfila3 = 'class="success text-uppercase"';
                }
                else
                {
                    $colorfila3 = 'class="text-uppercase"';
                }
                $datosl2e5 .=  '<tr '.$colorfila3.'>'
                    .'<td>'.$valor->folio.'</td>'
                    .'<td style="display:none">'.$valor->idintegrantetitular.'</td>'
                    .'<td>'.$valor->documento.'</td>'
                    .'<td>'.$valor->nombre1.' '.$valor->nombre2.' '.$valor->apellido1.' '.$valor->apellido2.'</td>'
                    .'<td style="display:none">'.$valor->nombre1.'</td>'
                    .'<td style="display:none">'.$valor->nombre2.'</td>'
                    .'<td style="display:none">'.$valor->apellido1.'</td>'
                    .'<td style="display:none">'.$valor->apellido2.'</td>'
                    .'<td><button type="button" id="Actualizar" onclick="iraactualizar('.$valor->folio.','.$valor->doccogestor.')"class="btn btn-success btn-sm" title="Esta opción va al módulo de actualización de datos, donde se actualiza la información general tanto del hogar como de los integrantes.">Actualizar</button></td>
                      '.$bloqueo.'
                    <td><button type="button" id="fichero" onclick="irafichero('.$valor->folio.','.$valor->idintegrantetitular.')" class="btn btn-primary btn-sm" title="Esta opción va al módulo donde se acercan, se hacen o no efectiva las oportunidades,  tanto del hogar como de los integrantes.">Fichero</button></td>
                    '.$bloqueologros.'
                    '.$bloqueoprivaciones.'
                    '.$bloqueoeerf.'
                    '.$editllbf.'
                    '.$vencuadref.'  
                   </tr>';
            }
            // linea 2 estacion 7
            if(($valor->idestacion == '26' && $valor->intermedia == '1' && $valor->casilla <> '9' && $valor->casilladf <> '9' && $valor->momento_vi == '26')
            || ($valor->idestacion == '26' && $valor->intermedia <> '1' && $valor->casilla <> '9' && $valor->casilladf <> '9')){
            
                $cont3= 0;
                ++$cont3;
                ++$a11e1;
                $b11e1 = $a11e1 % 2;
                //para colocar el color de la fila
                if($b11e1 === 1)
                {
                    $colorfila3 = 'class="success text-uppercase"';
                }
                else
                {
                    $colorfila3 = 'class="text-uppercase"';
                }
                
                $datosl2e6 .=  '<tr '.$colorfila3.'>'
                    .'<td>'.$valor->folio.'</td>'
                    .'<td style="display:none">'.$valor->idintegrantetitular.'</td>'
                    .'<td>'.$valor->documento.'</td>'
                    .'<td>'.$valor->nombre1.' '.$valor->nombre2.' '.$valor->apellido1.' '.$valor->apellido2.'</td>'
                    .'<td style="display:none">'.$valor->nombre1.'</td>'
                    .'<td style="display:none">'.$valor->nombre2.'</td>'
                    .'<td style="display:none">'.$valor->apellido1.'</td>'
                    .'<td style="display:none">'.$valor->apellido2.'</td>'
                    .'<td><button type="button" id="Actualizar" onclick="iraactualizar('.$valor->folio.','.$valor->doccogestor.')"class="btn btn-success btn-sm" title="Esta opción va al módulo de actualización de datos, donde se actualiza la información general tanto del hogar como de los integrantes.">Actualizar</button></td>
                      '.$bloqueo.'
                    <td><button type="button" id="fichero" onclick="irafichero('.$valor->folio.','.$valor->idintegrantetitular.')" class="btn btn-primary btn-sm" title="Esta opción va al módulo donde se acercan, se hacen o no efectiva las oportunidades,  tanto del hogar como de los integrantes.">Fichero</button></td>
                    '.$bloqueologros.'
                    '.$bloqueoprivaciones.'
                    '.$bloqueoeerf.'
                    '.$vencuadref.'  
                   </tr>';
            }














            // linea 2 estacion 8
            if(($valor->idestacion == '27' && $valor->casilla <> '9' && $valor->casilladf <> '9' )){
            //if(($valor->idestacion == '27')){
                  

                $cont3= 0;
                ++$cont3;
                ++$a13e1;
                $b13e1 = $a13e1 % 2;
                //para colocar el color de la fila
                if($b13e1 === 1)
                {
                    $colorfila3 = 'class="success text-uppercase"';
                }
                else
                {
                    $colorfila3 = 'class="text-uppercase"';
                }
                $datosl2e7 .=  '<tr '.$colorfila3.'>'
                    .'<td>'.$valor->folio.'</td>'
                    .'<td style="display:none">'.$valor->idintegrantetitular.'</td>'
                    .'<td>'.$valor->documento.'</td>'
                    .'<td>'.$valor->nombre1.' '.$valor->nombre2.' '.$valor->apellido1.' '.$valor->apellido2.'</td>'
                    .'<td style="display:none">'.$valor->nombre1.'</td>'
                    .'<td style="display:none">'.$valor->nombre2.'</td>'
                    .'<td style="display:none">'.$valor->apellido1.'</td>'
                    .'<td style="display:none">'.$valor->apellido2.'</td>'
                    .'<td><button type="button" id="Actualizar" onclick="iraactualizar('.$valor->folio.','.$valor->doccogestor.')"class="btn btn-success btn-sm" title="Esta opción va al módulo de actualización de datos, donde se actualiza la información general tanto del hogar como de los integrantes.">Actualizar</button></td>
                      '.$bloqueo.'
                    <td><button type="button" id="fichero" onclick="irafichero('.$valor->folio.','.$valor->idintegrantetitular.')" class="btn btn-primary btn-sm" title="Esta opción va al módulo donde se acercan, se hacen o no efectiva las oportunidades,  tanto del hogar como de los integrantes.">Fichero</button></td>
                    '.$bloqueologros.'
                    '.$bloqueoprivaciones.'
                    '.$bloqueoeerf.'
                    '.$vencuadref.'  
                   </tr>';
            }





















            // visita intermedia
            if(($valor->idestacion == '23' && $valor->intermedia == '1' && $valor->casilla <> '9' && $valor->casilladf == '')
             ||($valor->idestacion == '26' && $valor->intermedia == '1' && $valor->casilla <> '9' && $valor->casilladf == '')
             ||($valor->idestacion == '26' && $valor->intermedia == '1' && $valor->casilla <> '9' && ($valor->casilladf <> '' && $valor->casilladf <> '9') && $valor->foliointerhistor == '' && $valor->momento_vi <> '26')
             ||($valor->idestacion == '26' && $valor->intermedia == '1' && $valor->casilla <> '9' && $valor->casilladf == '' && $valor->foliointerhistor <> '' && $valor->momento_vi <> '26'))
               {
                $cont3= 0;
                ++$cont3;
                ++$a12e1;
                $b12e1 = $a12e1 % 2;
                //para colocar el color de la fila
                if($b12e1 === 1)
                {
                    $colorfila3 = 'class="success text-uppercase"';
                }
                else
                {
                    $colorfila3 = 'class="text-uppercase"';
                }
                $datosl4.=  '<tr '.$colorfila3.'>'
                    .'<td>'.$valor->folio.'</td>'
                    .'<td style="display:none">'.$valor->idintegrantetitular.'</td>'
                    .'<td>'.$valor->documento.'</td>'
                    .'<td>'.$valor->nombre1.' '.$valor->nombre2.' '.$valor->apellido1.' '.$valor->apellido2.'</td>'
                    .'<td style="display:none">'.$valor->nombre1.'</td>'
                    .'<td style="display:none">'.$valor->nombre2.'</td>'
                    .'<td style="display:none">'.$valor->apellido1.'</td>'
                    .'<td style="display:none">'.$valor->apellido2.'</td>'
                    .'<td><button type="button" id="Actualizar" onclick="iraactualizar('.$valor->folio.','.$valor->doccogestor.')"class="btn btn-success btn-sm" title="Esta opción va al módulo de actualización de datos, donde se actualiza la información general tanto del hogar como de los integrantes.">Actualizar</button></td>
                      '.$bloqueo.'
                    <td><button type="button" id="fichero" onclick="irafichero('.$valor->folio.','.$valor->idintegrantetitular.')" class="btn btn-primary btn-sm" title="Esta opción va al módulo donde se acercan, se hacen o no efectiva las oportunidades,  tanto del hogar como de los integrantes.">Fichero</button></td>
                    '.$bloqueologros.'
                    '.$bloqueoprivaciones.'
                    '.$bloqueoeerf.'
                    '.$vencuadref.'  
                   </tr>';
            }


        // visita de cierre
        if(($valor->idestacion == '28' && $valor->casilla <> '9' && $valor->casilladf <> '9')){
       // if($valor->idestacion == '28'){
          $cont3= 0;
         ++$cont3;
         ++$a14e1;
         $b14e1 = $a14e1 % 2;
         //para colocar el color de la fila
         if($b14e1 === 1)
         {
             $colorfila3 = 'class="success text-uppercase"';
         }
         else
         {
             $colorfila3 = 'class="text-uppercase"';
         }
         $datosl5.=  '<tr '.$colorfila3.'>'
             .'<td>'.$valor->folio.'</td>'
             .'<td style="display:none">'.$valor->idintegrantetitular.'</td>'
             .'<td>'.$valor->documento.'</td>'
             .'<td>'.$valor->nombre1.' '.$valor->nombre2.' '.$valor->apellido1.' '.$valor->apellido2.'</td>'
             .'<td style="display:none">'.$valor->nombre1.'</td>'
             .'<td style="display:none">'.$valor->nombre2.'</td>'
             .'<td style="display:none">'.$valor->apellido1.'</td>'
             .'<td style="display:none">'.$valor->apellido2.'</td>'
             .'<td><button type="button" id="Actualizar" onclick="iraactualizar('.$valor->folio.','.$valor->doccogestor.')"class="btn btn-success btn-sm" title="Esta opción va al módulo de actualización de datos, donde se actualiza la información general tanto del hogar como de los integrantes.">Actualizar</button></td>
               '.$bloqueo.'
             <td><button type="button" id="fichero" onclick="irafichero('.$valor->folio.','.$valor->idintegrantetitular.')" class="btn btn-primary btn-sm" title="Esta opción va al módulo donde se acercan, se hacen o no efectiva las oportunidades,  tanto del hogar como de los integrantes.">Fichero</button></td>
             '.$bloqueologros.'
             '.$bloqueoprivaciones.'
             '.$bloqueoeerf.'
             '.$vencuadref.'  
            </tr>';
     }  




// visita de cierre del acompañamiento
if(($valor->idestacion == '90' && $valor->casilla <> '9' && $valor->casilladf <> '9' && $valor->casilladflcv1 <> '9' )){
    // if($valor->idestacion == '28'){
       $cont3= 0;
      ++$cont3;
      ++$a14e19;
      $b14e19 = $a14e19 % 2;
      //para colocar el color de la fila
      if($b14e19 === 1)
      {
          $colorfila3 = 'class="success text-uppercase"';
      }
      else
      {
          $colorfila3 = 'class="text-uppercase"';
      }
      $datosl6.=  '<tr '.$colorfila3.'>'
          .'<td>'.$valor->folio.'</td>'
          .'<td style="display:none">'.$valor->idintegrantetitular.'</td>'
          .'<td>'.$valor->documento.'</td>'
          .'<td>'.$valor->nombre1.' '.$valor->nombre2.' '.$valor->apellido1.' '.$valor->apellido2.'</td>'
          .'<td style="display:none">'.$valor->nombre1.'</td>'
          .'<td style="display:none">'.$valor->nombre2.'</td>'
          .'<td style="display:none">'.$valor->apellido1.'</td>'
          .'<td style="display:none">'.$valor->apellido2.'</td>'
          .'<td><button type="button" id="Actualizar" onclick="iraactualizar('.$valor->folio.','.$valor->doccogestor.')"class="btn btn-success btn-sm" title="Esta opción va al módulo de actualización de datos, donde se actualiza la información general tanto del hogar como de los integrantes.">Actualizar</button></td>
            '.$bloqueo.'
          <td><button type="button" id="fichero" onclick="irafichero('.$valor->folio.','.$valor->idintegrantetitular.')" class="btn btn-primary btn-sm" title="Esta opción va al módulo donde se acercan, se hacen o no efectiva las oportunidades,  tanto del hogar como de los integrantes.">Fichero</button></td>
          '.$bloqueologros.'
          '.$bloqueoprivaciones.'
          '.$bloqueoeerf.'
          '.$vencuadref.'
          '.$botoncasilladflcv1.'
         </tr>';
  }  












// promovidos sin las condiciones necesarias
if($valor->idestacion == '91'){
    // if($valor->idestacion == '28'){
       $cont3= 0;
      ++$cont3;
      ++$a14e19;
      $b14e19 = $a14e19 % 2;
      //para colocar el color de la fila
      if($b14e19 === 1)
      {
          $colorfila3 = 'class="success text-uppercase"';
      }
      else
      {
          $colorfila3 = 'class="text-uppercase"';
      }
      $datosl7.=  '<tr '.$colorfila3.'>'
          .'<td>'.$valor->folio.'</td>'
          .'<td style="display:none">'.$valor->idintegrantetitular.'</td>'
          .'<td>'.$valor->documento.'</td>'
          .'<td>'.$valor->nombre1.' '.$valor->nombre2.' '.$valor->apellido1.' '.$valor->apellido2.'</td>'
          .'<td style="display:none">'.$valor->nombre1.'</td>'
          .'<td style="display:none">'.$valor->nombre2.'</td>'
          .'<td style="display:none">'.$valor->apellido1.'</td>'
          .'<td style="display:none">'.$valor->apellido2.'</td>'
          .'<td><button type="button" id="Actualizar" onclick="iraactualizar('.$valor->folio.','.$valor->doccogestor.')"class="btn btn-success btn-sm" title="Esta opción va al módulo de actualización de datos, donde se actualiza la información general tanto del hogar como de los integrantes.">Actualizar</button></td>
            '.$bloqueo.'
          <td><button type="button" id="fichero" onclick="irafichero('.$valor->folio.','.$valor->idintegrantetitular.')" class="btn btn-primary btn-sm" title="Esta opción va al módulo donde se acercan, se hacen o no efectiva las oportunidades,  tanto del hogar como de los integrantes.">Fichero</button></td>
          '.$bloqueologros.'
          '.$bloqueoprivaciones.'
          '.$bloqueoeerf.'
          '.$vencuadref.'
          '.$botoncasilladflcv1.'
         </tr>';
  }  



            //linea 3 sesion de cierre 
            //if(($valor->idestacion == '22' && $valor->casilla == '9' && $valor->intermedia == '') || ($valor->idestacion == '23' && $valor->casilla == '9' && $valor->intermedia == '')|| ($valor->idestacion == '24' && $valor->casilla == '9'&& $valor->intermedia == '')|| ($valor->idestacion == '25' && $valor->casilla == '9'&& $valor->intermedia == '')|| ($valor->idestacion == '26' && $valor->casilla == '9'&& $valor->intermedia == '')|| ($valor->idestacion == '31' && $valor->casilla == '9'&& $valor->intermedia == ''&& $valor->estado == '4')){
                if((($valor->idestacion >= '22' && $valor->idestacion < '31') && $valor->casilla == '9') 
                || ($valor->casilladf == '9' && $valor->idestacion <> '31')
                || ($valor->casilladflcv1 == '9' && $valor->idestacion <> '31')
                || ($valor->idestacion == '31' && $valor->estado == '4')){
                $cont3= 0;
                ++$cont3;
                ++$a7e1;
                $b7e1 = $a7e1 % 2;
                //para colocar el color de la fila
                if($b7e1 === 1)
                {
                    $colorfila3 = 'class="success text-uppercase"';
                }
                else
                {
                    $colorfila3 = 'class="text-uppercase"';
                }
                $datosl31 .=  '<tr '.$colorfila3.'>'
                    .'<td>'.$valor->folio.'</td>'
                    .'<td style="display:none">'.$valor->idintegrantetitular.'</td>'
                    .'<td>'.$valor->documento.'</td>'
                    .'<td>'.$valor->nombre1.' '.$valor->nombre2.' '.$valor->apellido1.' '.$valor->apellido2.'</td>'
                    .'<td style="display:none">'.$valor->nombre1.'</td>'
                    .'<td style="display:none">'.$valor->nombre2.'</td>'
                    .'<td style="display:none">'.$valor->apellido1.'</td>'
                    .'<td style="display:none">'.$valor->apellido2.'</td>'
                    .'<td><button type="button" id="Actualizar" onclick="iraactualizar('.$valor->folio.','.$valor->doccogestor.')"class="btn btn-success btn-sm" title="Esta opción va al módulo de actualización de datos, donde se actualiza la información general tanto del hogar como de los integrantes.">Actualizar</button></td>
                      '.$bloqueo.'
                    <td><button type="button" id="fichero" onclick="irafichero('.$valor->folio.','.$valor->idintegrantetitular.')" class="btn btn-primary btn-sm" title="Esta opción va al módulo donde se acercan, se hacen o no efectiva las oportunidades,  tanto del hogar como de los integrantes.">Fichero</button></td>
                    '.$bloqueologros.'
                    '.$bloqueoprivaciones.'
                    '.$bloqueoeerf.'
                    '.$vencuadref.'
                    '.$botoncasilladflcv1.'  
                   </tr>';
            }
            
            // linea 3 promovidos 
            //if($valor->idestacion == '31' && $valor->casilla <> '' && $valor->intermedia == '' && $valor->estado <> '4'){
                // if(($valor->idestacion == '31' && $valor->estado <> '4')){
                if(($valor->idestacion31 == '31' && $valor->estado <> '4')){
                 $cont3= 0;
                ++$cont3;
                ++$a8e1;
                $b8e1 = $a8e1 % 2;
                //para colocar el color de la fila
                if($b8e1 === 1)
                {
                    $colorfila3 = 'class="success text-uppercase"';
                }
                else
                {
                    $colorfila3 = 'class="text-uppercase"';
                }
                $datosl32 .=  '<tr '.$colorfila3.'>'
                    .'<td>'.$valor->folio.'</td>'
                    .'<td style="display:none">'.$valor->idintegrantetitular.'</td>'
                    .'<td>'.$valor->documento.'</td>'
                    .'<td>'.$valor->nombre1.' '.$valor->nombre2.' '.$valor->apellido1.' '.$valor->apellido2.'</td>'
                    .'<td style="display:none">'.$valor->nombre1.'</td>'
                    .'<td style="display:none">'.$valor->nombre2.'</td>'
                    .'<td style="display:none">'.$valor->apellido1.'</td>'
                    .'<td style="display:none">'.$valor->apellido2.'</td>'
                    .'<td><button type="button" id="logrosprom" onclick="logrosprom('.$valor->folio.','.$valor->doccogestor.')"class="btn btn-default btn-sm" title="Esta opción va al módulo de diagnóstico inicial y actual de logros, tanto del hogar como de los integrantes, pero no se puede realizar el movimiento de logros.">Logros promovidos</button></td>
                    '.$bloqueoprivaciones.'
                    '.$bloqueoeerf.'
                    '.$vencuadref.'  
                    '.$botoncasilladflcv1.'
                   </tr>';
            }
            
        }
        
//       $cintermedias = $this->m_principalhogar->fm_datosintermedia();
//        $ctextointermedia = '';
//        foreach ($cintermedias as $cintermedia)
//        {
//            $ctextointermedia =  $cintermedia->intermedia;
//        }
            
        //fin traer una lista de valores
     
       //ESTO LEVANTA LA VISTA     
        $titulo = 'v_principalhogar'; // para el titulo de la vista en la pestaña
        $this->load->view('pages/' . $page,  array('titulo' => $titulo, 'foot' => FOOTS, 'head' => HEAD, 'head2' => HEAD2, 'head2buscarsolofolio' => HEAD2BUSCARSOLOFOLIO, 'botonerag' => BOTONERAG, 'botoneraa' => BOTONERAA, 'datosl1e1'=> $datosl1e1,'datosl1e2'=> $datosl1e2,'datosl2e1'=> $datosl2e1,'datosl2e2'=> $datosl2e2,'datosl3'=> $datosl3,'datosl2e3'=>$datosl2e3,'doccogestor'=> $doccogestor,'datosl31'=>$datosl31,'datosl32'=>$datosl32,'datosl2e4'=>$datosl2e4,'datosl2e5'=>$datosl2e5,'datosl2e6'=>$datosl2e6,'datosl2e7'=>$datosl2e7,'datosl4'=>$datosl4,'datosl5'=>$datosl5,'datosl6'=>$datosl6,'datosl7'=>$datosl7));
        //FIN LEVANTA LA VISTA
    }
    
    public function fc_traerfolio()
    {
        $doccogestor = $this->input->get('vdoccogestor');
        $cfolio = $this->input->get('vfolio');
        if($cfolio == '')
        {
            $cfolio = 'S';
        }
        
        $listartabla = $this->m_principalhogar->fm_listarfolio($doccogestor,$cfolio);

        $datosl1e1 = '';
        $datosl1e2 = '';
        $datosl2e1 = '';        
        $datosl2e2 = '';
        $datosl3 = '';
        $datosl2e3 = '';
        $datosl31 = '';
        $datosl32 = '';
        $datosl2e4 = '';
        $datosl2e5 = '';
        $datosl2e6 = '';
        $datosl2e7 = '';
        $datosl4 = '';
        $datosl5 = '';
        $datosl6 = '';


        $datosl7 = '';

        $a1e1 = 0;//para saber el numero de l registro
        $b1e1 = 0;//el resultado del modulo para saber si es verde o blanco 
        $a1e2 = 0;//para saber el numero de l registro
        $b1e2 = 0;//el resultado del modulo para saber si es verde o blanco 
        $a2e1 = 0;//para saber el numero de l registro
        $b2e1 = 0;//el resultado del modulo para saber si es verde o blanco 
        $a3e1 = 0;
        $b3e1 = 0;
        $a5e1 = 0;
        $b5e1 = 0;
        $a6e1 = 0;
        $b6e1 = 0;
        $a7e1 = 0;
        $b7e1 = 0;
        $a8e1 = 0;
        $b8e1 = 0;
        $a9e1 = 0;
        $b9e1 = 0;
        $a10e1 = 0;
        $b10e1 = 0;
        $a11e1 = 0;

        $b11e1 = 0;
        $a12e1 = 0;
        $b12e1 = 0;

        $a13e1 = 0;
        $b13e1 = 0;
        
        $a14e1 = 0;
        $b14e1 = 0;

        $a14e19 = 0;
        $b14e19 = 0;



        foreach ($listartabla as $valor)
        {

        
        if($valor->bloqueofolio == 1)
        {
            $bloqueo = '<td><button type="button" id="Protocolo" class="btn btn-warning  btn-sm" disabled title="Esta opción va al módulo donde se selecciona la línea y estación para realizar la visita de acompañamiento familiar.">Bloqueado por efectividad</button></td>';
        }
        else
        {
            $bloqueo = '<td><button type="button" id="Protocolo" onclick="iraprotocolo('.$valor->folio.','.$valor->idintegrantetitular.','.$valor->doccogestor.')" class="btn btn-warning  btn-sm" title="Esta opción va al módulo donde se selecciona la línea y estación para realizar la visita de acompañamiento familiar.">Protocolo</button></td>'; 
        }
        
        if($valor->logros == 0)
        {
            $bloqueologros = '<td><button type="button" id="diagnostico" class="btn btn-default  btn-sm" disabled title="Esta opción va al módulo de diagnóstico inicial y actual de logros, tanto del hogar como de los integrantes, además se puede realizar el movimiento de logros.">Sin logros</button></td>';
        }
        else
        {
            $bloqueologros = '<td><button type="button" id="diagnostico" onclick="iradiagnostico('.$valor->folio.','.$valor->doccogestor.')" class="btn btn-default btn-sm" title="Esta opción va al módulo de diagnóstico inicial y actual de logros, tanto del hogar como de los integrantes, además se puede realizar el movimiento de logros.">Logros calculados</button></td>'; 
        }
        
               
        if($valor->privaciones == 0)
        {
            $bloqueoprivaciones = '<td><button type="button" id="privaciones" class="btn btn-success btn-sm" disabled title="Esta opción va al módulo de diagnóstico inicial y actual de las privaciones,  tanto del hogar como de los integrantes.">Sin Privaciones</button></td>';
        }
        else
        {
            $bloqueoprivaciones = '<td><button type="button" id="privaciones" onclick="iraprivaciones('.$valor->folio.','.$valor->doccogestor.')" class="btn btn-success btn-sm" title="Esta opción va al módulo de diagnóstico inicial y actual de las privaciones,  tanto del hogar como de los integrantes.">Privaciones</button></td>'; 
        }
        
         if($valor->eerf == '')
        {
            $bloqueoeerf = '<td><button type="button" id="eerf" class="btn btn-success btn-sm" disabled title="Esta opción va al módulo de escala de evaluación de las relaciones familiares.">Sin ERFAM</button></td>';
        }
        else
        {
            $bloqueoeerf = '<td><button type="button" id="eerf" onclick="vereerf('.$valor->folio.',\''.$valor->nombre1.' '.$valor->nombre2.' '.$valor->apellido1.' '.$valor->apellido2.'\')" class="btn btn-success btn-sm" title="Esta opción va al módulo de escala de evaluación de las relaciones familiares.">ERFAM</button></td>'; 
        }


        if($valor->editar_llbf == '11')
        {
            $editllbf= '<td><button type="button" id="ellbf" onclick="iraprotocolo('.$valor->folio.','.$valor->idintegrantetitular.','.$valor->doccogestor.'),editallbf('.$valor->folio.','.$valor->idintegrantetitular.')" class="btn btn-success btn-sm" title="Esta opción va a la visita de línea de clasificación, pero es una edición de la primera visita realizada.">EDICION LDC</button></td>';
        }
        else
        {
            $editllbf = '<td><button type="button" id="ellbf" style="display: none"  class="btn btn-success btn-sm" title="Esta opción va a la visita de línea de clasificación, pero es una edición de la primera visita realizada.">EDICION LDC</button></td>'; 
        }
        
        if($valor->idestacionmin == '1')
        {
            $vencuadref = '<td><button type="button" id="vencuadre" disabled="disabled" onclick="iraencuadre('.$valor->folio.','.$valor->idintegrantetitular.','.$valor->doccogestor.')" class="btn btn-success  btn-sm" title="Esta opción va a la visita de encuadre para el proceso de acompañamiento familiar.">Encuadre realizado</button></td>'; 
        }
        else
        {
            $vencuadref = '<td><button type="button" id="vencuadre"  onclick="iraencuadre('.$valor->folio.','.$valor->idintegrantetitular.','.$valor->doccogestor.')" class="btn btn-warning  btn-sm" title="Esta opción va a la visita de encuadre para el proceso de acompañamiento familiar.">Encuadre</button></td>'; 
        }

        // inicio boton de casilla LCV1
        if($valor->casilladflcv1 <> '')
        {
            $botoncasilladflcv1 = '<td><button type="button" id="privacionesLCV1" onclick="iraprivacionesLCV1('.$valor->folio.','.$valor->doccogestor.')" class="btn btn-success btn-sm" title="Esta opción va al módulo de privaciones calculadas en la línea de cierre.">Privaciones L.C</button></td>'; 
        }
        else
        {
            $botoncasilladflcv1 = '<td><button type="button" id="privacionesLCV1" style="display: none"  class="btn btn-success btn-sm" title="Esta opción va al módulo de privaciones calculadas en la línea de cierre.">Privaciones L.C</button></td>'; 
        }
        // fin boton de casilla LCV1

          //linea 1 estacion 1            
          // if( ($valor->idestacion == '' || $valor->idestacion == '10') && $valor->intermedia == '' ) {
            if(($valor->idestacion == '' || $valor->idestacion == '10' || $valor->idestacion == '1')) {   
                                
               $cont1= 0;
                ++$cont1;
                ++$a1e1;
                $b1e1 = $a1e1 % 2;
                //para colocar el color de la fila
                if($b1e1 === 1)
                {
                    $colorfila1 = 'class="success text-uppercase"';
                }
                else
                {
                    $colorfila1 = 'class="text-uppercase"';
                }
               
               
                $datosl1e1 .=  '<tr '.$colorfila1.'>'
                    .'<td>'.$valor->folio.'</td>'
                    .'<td style="display:none">'.$valor->idintegrantetitular.'</td>'
                    .'<td>'.$valor->documento.'</td>'
                    .'<td>'.$valor->nombre1.' '.$valor->nombre2.' '.$valor->apellido1.' '.$valor->apellido2.'</td>'
                    .'<td style="display:none">'.$valor->nombre1.'</td>'
                    .'<td style="display:none">'.$valor->nombre2.'</td>'
                    .'<td style="display:none">'.$valor->apellido1.'</td>'
                    .'<td style="display:none">'.$valor->apellido2.'</td>'
                    .'<td><button type="button" id="Actualizar" onclick="iraactualizar('.$valor->folio.','.$valor->doccogestor.')"class="btn btn-success btn-sm" title="Esta opción va al módulo de actualización de datos, donde se actualiza la información general tanto del hogar como de los integrantes.">Actualizar</button></td>
                      '.$bloqueo.'
                    <td><button type="button" id="fichero" onclick="irafichero('.$valor->folio.','.$valor->idintegrantetitular.')" class="btn btn-primary btn-sm" title="Esta opción va al módulo donde se acercan, se hacen o no efectiva las oportunidades,  tanto del hogar como de los integrantes.">Fichero</button></td>
                    '.$bloqueologros.'
                    '.$bloqueoprivaciones.'
                    '.$bloqueoeerf.'    
                    '.$vencuadref.'  
                   </tr>';
           }
           // linea 1 estacion 2
           //if($valor->idestacion == '11' && $valor->intermedia == '' ){
            if($valor->idestacion == '11'){
                
                $cont2= 0;
                ++$cont2;
                ++$a1e2;
                $b1e2 = $a1e2 % 2;
                //para colocar el color de la fila
                if($b1e2 === 1)
                {
                    $colorfila2 = 'class="success text-uppercase"';
                }
                else
                {
                    $colorfila2 = 'class="text-uppercase"';
                }
                $datosl1e2 .=  '<tr '.$colorfila2.'>'
                    .'<td>'.$valor->folio.'</td>'
                    .'<td style="display:none">'.$valor->idintegrantetitular.'</td>'
                    .'<td>'.$valor->documento.'</td>'
                    .'<td>'.$valor->nombre1.' '.$valor->nombre2.' '.$valor->apellido1.' '.$valor->apellido2.'</td>'
                    .'<td style="display:none">'.$valor->nombre1.'</td>'
                    .'<td style="display:none">'.$valor->nombre2.'</td>'
                    .'<td style="display:none">'.$valor->apellido1.'</td>'
                    .'<td style="display:none">'.$valor->apellido2.'</td>'
                    .'<td><button type="button" id="Actualizar" onclick="iraactualizar('.$valor->folio.','.$valor->doccogestor.')"class="btn btn-success btn-sm" title="Esta opción va al módulo de actualización de datos, donde se actualiza la información general tanto del hogar como de los integrantes.">Actualizar</button></td>
                      '.$bloqueo.'
                    <td><button type="button" id="fichero" onclick="irafichero('.$valor->folio.','.$valor->idintegrantetitular.')" class="btn btn-primary btn-sm" title="Esta opción va al módulo donde se acercan, se hacen o no efectiva las oportunidades,  tanto del hogar como de los integrantes.">Fichero</button></td>
                    '.$bloqueologros.'
                    '.$bloqueoprivaciones.'
                    '.$bloqueoeerf.'   
                    '.$editllbf.' 
                    '.$vencuadref.'  
                   </tr>';
            }  
            // linea 2 estacion 1
            //if($valor->idestacion == '12' && $valor->intermedia == ''){
            if($valor->idestacion == '12'){
                $cont2= 0;
                ++$cont2;
                ++$a2e1;
                $b2e1 = $a2e1 % 2;
                //para colocar el color de la fila
                if($b2e1 === 1)
                {
                    $colorfila3 = 'class="success text-uppercase"';
                }
                else
                {
                    $colorfila3 = 'class="text-uppercase"';
                }
                $datosl2e1 .=  '<tr '.$colorfila3.'>'
                    .'<td>'.$valor->folio.'</td>'
                    .'<td style="display:none">'.$valor->idintegrantetitular.'</td>'
                    .'<td>'.$valor->documento.'</td>'
                    .'<td>'.$valor->nombre1.' '.$valor->nombre2.' '.$valor->apellido1.' '.$valor->apellido2.'</td>'
                    .'<td style="display:none">'.$valor->nombre1.'</td>'
                    .'<td style="display:none">'.$valor->nombre2.'</td>'
                    .'<td style="display:none">'.$valor->apellido1.'</td>'
                    .'<td style="display:none">'.$valor->apellido2.'</td>'
                    .'<td><button type="button" id="Actualizar" onclick="iraactualizar('.$valor->folio.','.$valor->doccogestor.')"class="btn btn-success btn-sm" title="Esta opción va al módulo de actualización de datos, donde se actualiza la información general tanto del hogar como de los integrantes.">Actualizar</button></td>
                      '.$bloqueo.'
                    <td><button type="button" id="fichero" onclick="irafichero('.$valor->folio.','.$valor->idintegrantetitular.')" class="btn btn-primary btn-sm" title="Esta opción va al módulo donde se acercan, se hacen o no efectiva las oportunidades,  tanto del hogar como de los integrantes.">Fichero</button></td>
                    '.$bloqueologros.'
                    '.$bloqueoprivaciones.'
                    '.$bloqueoeerf.'  
                    '.$editllbf.'  
                    '.$vencuadref.'  
                   </tr>';
            }
            // linea 2 estacion 2
            //if($valor->idestacion == '21' && $valor->intermedia == ''){
            if($valor->idestacion == '21'){
                $cont2= 0;
                ++$cont2;
                ++$a3e1;
                $b3e1 = $a3e1 % 2;
                //para colocar el color de la fila
                if($b3e1 === 1)
                {
                    $colorfila3 = 'class="success text-uppercase"';
                }
                else
                {
                    $colorfila3 = 'class="text-uppercase"';
                }
                $datosl2e2 .=  '<tr '.$colorfila3.'>'
                    .'<td>'.$valor->folio.'</td>'
                    .'<td style="display:none">'.$valor->idintegrantetitular.'</td>'
                    .'<td>'.$valor->documento.'</td>'
                    .'<td>'.$valor->nombre1.' '.$valor->nombre2.' '.$valor->apellido1.' '.$valor->apellido2.'</td>'
                    .'<td style="display:none">'.$valor->nombre1.'</td>'
                    .'<td style="display:none">'.$valor->nombre2.'</td>'
                    .'<td style="display:none">'.$valor->apellido1.'</td>'
                    .'<td style="display:none">'.$valor->apellido2.'</td>'
                    .'<td><button type="button" id="Actualizar" onclick="iraactualizar('.$valor->folio.','.$valor->doccogestor.')"class="btn btn-success btn-sm" title="Esta opción va al módulo de actualización de datos, donde se actualiza la información general tanto del hogar como de los integrantes.">Actualizar</button></td>
                      '.$bloqueo.'
                    <td><button type="button" id="fichero" onclick="irafichero('.$valor->folio.','.$valor->idintegrantetitular.')" class="btn btn-primary btn-sm" title="Esta opción va al módulo donde se acercan, se hacen o no efectiva las oportunidades,  tanto del hogar como de los integrantes.">Fichero</button></td>
                    '.$bloqueologros.'
                    '.$bloqueoprivaciones.'
                    '.$bloqueoeerf.'    
                    '.$editllbf.'
                    '.$vencuadref.'  
                   </tr>';
            }        
              // linea 2 estacion 3
              if($valor->idestacion == '22' && $valor->casilla <> '9'){
              //  if($valor->idestacion == '22' && $valor->casilla <> '9' && $valor->intermedia <> '1' && $valor->casilladf <> '9'){
                $cont3= 0;
                ++$cont3;
                ++$a5e1;
                $b5e1 = $a5e1 % 2;
                //para colocar el color de la fila
                if($b5e1 === 1)
                {
                    $colorfila3 = 'class="success text-uppercase"';
                }
                else
                {
                    $colorfila3 = 'class="text-uppercase"';
                }
                $datosl2e3 .=  '<tr '.$colorfila3.'>'
                    .'<td>'.$valor->folio.'</td>'
                    .'<td style="display:none">'.$valor->idintegrantetitular.'</td>'
                    .'<td>'.$valor->documento.'</td>'
                    .'<td>'.$valor->nombre1.' '.$valor->nombre2.' '.$valor->apellido1.' '.$valor->apellido2.'</td>'
                    .'<td style="display:none">'.$valor->nombre1.'</td>'
                    .'<td style="display:none">'.$valor->nombre2.'</td>'
                    .'<td style="display:none">'.$valor->apellido1.'</td>'
                    .'<td style="display:none">'.$valor->apellido2.'</td>'
                    .'<td><button type="button" id="Actualizar" onclick="iraactualizar('.$valor->folio.','.$valor->doccogestor.')"class="btn btn-success btn-sm" title="Esta opción va al módulo de actualización de datos, donde se actualiza la información general tanto del hogar como de los integrantes.">Actualizar</button></td>
                      '.$bloqueo.'
                    <td><button type="button" id="fichero" onclick="irafichero('.$valor->folio.','.$valor->idintegrantetitular.')" class="btn btn-primary btn-sm" title="Esta opción va al módulo donde se acercan, se hacen o no efectiva las oportunidades,  tanto del hogar como de los integrantes.">Fichero</button></td>
                    '.$bloqueologros.'
                    '.$bloqueoprivaciones.'
                    '.$bloqueoeerf.'
                    '.$editllbf.'
                    '.$vencuadref.'  
                   </tr>';
            }
            // linea 2 estacion 4
            if(($valor->idestacion == '23' && $valor->intermedia <> '1' && $valor->casilla <> '9')||
               ($valor->idestacion == '23' && $valor->intermedia == '1' && $valor->casilla <> '9' && ($valor->casilladf <> '9'  && $valor->casilladf <> ''))){
                //if(($valor->idestacion == '23' && $valor->intermedia <> '1' && $valor->casilla <> '9' && $valor->casilladf <> '9')||
                //   ($valor->idestacion == '23' && $valor->intermedia == '1' && $valor->casilladf <> '9' && $valor->casilla <> '9'  && $valor->idestacion81 == '81')){

                $cont3= 0;
                ++$cont3;
                ++$a6e1;
                $b6e1 = $a6e1 % 2;
                //para colocar el color de la fila
                if($b6e1 === 1)
                {
                    $colorfila3 = 'class="success text-uppercase"';
                }
                else
                {
                    $colorfila3 = 'class="text-uppercase"';
                }
                $datosl3 .=  '<tr '.$colorfila3.'>'
                    .'<td>'.$valor->folio.'</td>'
                    .'<td style="display:none">'.$valor->idintegrantetitular.'</td>'
                    .'<td>'.$valor->documento.'</td>'
                    .'<td>'.$valor->nombre1.' '.$valor->nombre2.' '.$valor->apellido1.' '.$valor->apellido2.'</td>'
                    .'<td style="display:none">'.$valor->nombre1.'</td>'
                    .'<td style="display:none">'.$valor->nombre2.'</td>'
                    .'<td style="display:none">'.$valor->apellido1.'</td>'
                    .'<td style="display:none">'.$valor->apellido2.'</td>'
                    .'<td><button type="button" id="Actualizar" onclick="iraactualizar('.$valor->folio.','.$valor->doccogestor.')"class="btn btn-success btn-sm" title="Esta opción va al módulo de actualización de datos, donde se actualiza la información general tanto del hogar como de los integrantes.">Actualizar</button></td>
                      '.$bloqueo.'
                    <td><button type="button" id="fichero" onclick="irafichero('.$valor->folio.','.$valor->idintegrantetitular.')" class="btn btn-primary btn-sm" title="Esta opción va al módulo donde se acercan, se hacen o no efectiva las oportunidades,  tanto del hogar como de los integrantes.">Fichero</button></td>
                    '.$bloqueologros.'
                    '.$bloqueoprivaciones.'
                    '.$bloqueoeerf.'
                    '.$editllbf.'
                    '.$vencuadref.'  
                   </tr>';
            }
            // linea 2 estacion 5
            if($valor->idestacion == '24' && $valor->casilla <> '9' && $valor->casilladf <> '9'){
            //if($valor->idestacion == '24' && $valor->casilla <> '9' && $valor->intermedia <> '1' && $valor->casilladf <> '9'){
                $cont3= 0;
                ++$cont3;
                ++$a10e1;
                $b10e1 = $a10e1 % 2;
                //para colocar el color de la fila
                if($b10e1 === 1)
                {
                    $colorfila3 = 'class="success text-uppercase"';
                }
                else
                {
                    $colorfila3 = 'class="text-uppercase"';
                }
                $datosl2e4 .=  '<tr '.$colorfila3.'>'
                    .'<td>'.$valor->folio.'</td>'
                    .'<td style="display:none">'.$valor->idintegrantetitular.'</td>'
                    .'<td>'.$valor->documento.'</td>'
                    .'<td>'.$valor->nombre1.' '.$valor->nombre2.' '.$valor->apellido1.' '.$valor->apellido2.'</td>'
                    .'<td style="display:none">'.$valor->nombre1.'</td>'
                    .'<td style="display:none">'.$valor->nombre2.'</td>'
                    .'<td style="display:none">'.$valor->apellido1.'</td>'
                    .'<td style="display:none">'.$valor->apellido2.'</td>'
                    .'<td><button type="button" id="Actualizar" onclick="iraactualizar('.$valor->folio.','.$valor->doccogestor.')"class="btn btn-success btn-sm" title="Esta opción va al módulo de actualización de datos, donde se actualiza la información general tanto del hogar como de los integrantes.">Actualizar</button></td>
                      '.$bloqueo.'
                    <td><button type="button" id="fichero" onclick="irafichero('.$valor->folio.','.$valor->idintegrantetitular.')" class="btn btn-primary btn-sm" title="Esta opción va al módulo donde se acercan, se hacen o no efectiva las oportunidades,  tanto del hogar como de los integrantes.">Fichero</button></td>
                    '.$bloqueologros.'
                    '.$bloqueoprivaciones.'
                    '.$bloqueoeerf.'
                    '.$editllbf.'
                    '.$vencuadref.'  
                   </tr>';
            }
            // linea 2 estacion 6
            if($valor->idestacion == '25' && $valor->casilla <> '9' && $valor->casilladf <> '9'){
            //if($valor->idestacion == '25' && $valor->casilla <> '9' && $valor->intermedia <> '' && $valor->casilladf <> '9'){
                $cont3= 0;
                ++$cont3;
                ++$a9e1;
                $b9e1 = $a9e1 % 2;
                //para colocar el color de la fila
                if($b9e1 === 1)
                {
                    $colorfila3 = 'class="success text-uppercase"';
                }
                else
                {
                    $colorfila3 = 'class="text-uppercase"';
                }
                $datosl2e5 .=  '<tr '.$colorfila3.'>'
                    .'<td>'.$valor->folio.'</td>'
                    .'<td style="display:none">'.$valor->idintegrantetitular.'</td>'
                    .'<td>'.$valor->documento.'</td>'
                    .'<td>'.$valor->nombre1.' '.$valor->nombre2.' '.$valor->apellido1.' '.$valor->apellido2.'</td>'
                    .'<td style="display:none">'.$valor->nombre1.'</td>'
                    .'<td style="display:none">'.$valor->nombre2.'</td>'
                    .'<td style="display:none">'.$valor->apellido1.'</td>'
                    .'<td style="display:none">'.$valor->apellido2.'</td>'
                    .'<td><button type="button" id="Actualizar" onclick="iraactualizar('.$valor->folio.','.$valor->doccogestor.')"class="btn btn-success btn-sm" title="Esta opción va al módulo de actualización de datos, donde se actualiza la información general tanto del hogar como de los integrantes.">Actualizar</button></td>
                      '.$bloqueo.'
                    <td><button type="button" id="fichero" onclick="irafichero('.$valor->folio.','.$valor->idintegrantetitular.')" class="btn btn-primary btn-sm" title="Esta opción va al módulo donde se acercan, se hacen o no efectiva las oportunidades,  tanto del hogar como de los integrantes.">Fichero</button></td>
                    '.$bloqueologros.'
                    '.$bloqueoprivaciones.'
                    '.$bloqueoeerf.'
                    '.$editllbf.'
                    '.$vencuadref.'  
                   </tr>';
            }
            // linea 2 estacion 7
            if(($valor->idestacion == '26' && $valor->intermedia == '1' && $valor->casilla <> '9' && $valor->casilladf <> '9' && $valor->momento_vi == '26')
            || ($valor->idestacion == '26' && $valor->intermedia <> '1' && $valor->casilla <> '9' && $valor->casilladf <> '9')){
              
                $cont3= 0;
                ++$cont3;
                ++$a11e1;
                $b11e1 = $a11e1 % 2;
                //para colocar el color de la fila
                if($b11e1 === 1)
                {
                    $colorfila3 = 'class="success text-uppercase"';
                }
                else
                {
                    $colorfila3 = 'class="text-uppercase"';
                }
                $datosl2e6 .=  '<tr '.$colorfila3.'>'
                    .'<td>'.$valor->folio.'</td>'
                    .'<td style="display:none">'.$valor->idintegrantetitular.'</td>'
                    .'<td>'.$valor->documento.'</td>'
                    .'<td>'.$valor->nombre1.' '.$valor->nombre2.' '.$valor->apellido1.' '.$valor->apellido2.'</td>'
                    .'<td style="display:none">'.$valor->nombre1.'</td>'
                    .'<td style="display:none">'.$valor->nombre2.'</td>'
                    .'<td style="display:none">'.$valor->apellido1.'</td>'
                    .'<td style="display:none">'.$valor->apellido2.'</td>'
                    .'<td><button type="button" id="Actualizar" onclick="iraactualizar('.$valor->folio.','.$valor->doccogestor.')"class="btn btn-success btn-sm" title="Esta opción va al módulo de actualización de datos, donde se actualiza la información general tanto del hogar como de los integrantes.">Actualizar</button></td>
                      '.$bloqueo.'
                    <td><button type="button" id="fichero" onclick="irafichero('.$valor->folio.','.$valor->idintegrantetitular.')" class="btn btn-primary btn-sm" title="Esta opción va al módulo donde se acercan, se hacen o no efectiva las oportunidades,  tanto del hogar como de los integrantes.">Fichero</button></td>
                    '.$bloqueologros.'
                    '.$bloqueoprivaciones.'
                    '.$bloqueoeerf.'
                    '.$vencuadref.'  
                   </tr>';
            }





// linea 2 estacion 8
if(($valor->idestacion == '27' && $valor->casilla <> '9' && $valor->casilladf <> '9' )){
//if(($valor->idestacion == '27')){
  
    $cont3= 0;
    ++$cont3;
    ++$a13e1;
    $b13e1 = $a13e1 % 2;
    //para colocar el color de la fila
    if($b13e1 === 1)
    {
        $colorfila3 = 'class="success text-uppercase"';
    }
    else
    {
        $colorfila3 = 'class="text-uppercase"';
    }
    $datosl2e7 .=  '<tr '.$colorfila3.'>'
        .'<td>'.$valor->folio.'</td>'
        .'<td style="display:none">'.$valor->idintegrantetitular.'</td>'
        .'<td>'.$valor->documento.'</td>'
        .'<td>'.$valor->nombre1.' '.$valor->nombre2.' '.$valor->apellido1.' '.$valor->apellido2.'</td>'
        .'<td style="display:none">'.$valor->nombre1.'</td>'
        .'<td style="display:none">'.$valor->nombre2.'</td>'
        .'<td style="display:none">'.$valor->apellido1.'</td>'
        .'<td style="display:none">'.$valor->apellido2.'</td>'
        .'<td><button type="button" id="Actualizar" onclick="iraactualizar('.$valor->folio.','.$valor->doccogestor.')"class="btn btn-success btn-sm" title="Esta opción va al módulo de actualización de datos, donde se actualiza la información general tanto del hogar como de los integrantes.">Actualizar</button></td>
          '.$bloqueo.'
        <td><button type="button" id="fichero" onclick="irafichero('.$valor->folio.','.$valor->idintegrantetitular.')" class="btn btn-primary btn-sm" title="Esta opción va al módulo donde se acercan, se hacen o no efectiva las oportunidades,  tanto del hogar como de los integrantes.">Fichero</button></td>
        '.$bloqueologros.'
        '.$bloqueoprivaciones.'
        '.$bloqueoeerf.'
        '.$vencuadref.'  
       </tr>';
}




            // visita intermedia
            if(($valor->idestacion == '23' && $valor->intermedia == '1' && $valor->casilla <> '9' && $valor->casilladf == '')
             ||($valor->idestacion == '26' && $valor->intermedia == '1' && $valor->casilla <> '9' && $valor->casilladf == '')
             ||($valor->idestacion == '26' && $valor->intermedia == '1' && $valor->casilla <> '9' && ($valor->casilladf <> '' && $valor->casilladf <> '9') && $valor->foliointerhistor == '' && $valor->momento_vi <> '26')
             ||($valor->idestacion == '26' && $valor->intermedia == '1' && $valor->casilla <> '9' && $valor->casilladf == '' && $valor->foliointerhistor <> '' && $valor->momento_vi <> '26'))
               {
                $cont3= 0;
                ++$cont3;
                ++$a12e1;
                $b12e1 = $a12e1 % 2;
                //para colocar el color de la fila
                if($b12e1 === 1)
                {
                    $colorfila3 = 'class="success text-uppercase"';
                }
                else
                {
                    $colorfila3 = 'class="text-uppercase"';
                }
                $datosl4.=  '<tr '.$colorfila3.'>'
                    .'<td>'.$valor->folio.'</td>'
                    .'<td style="display:none">'.$valor->idintegrantetitular.'</td>'
                    .'<td>'.$valor->documento.'</td>'
                    .'<td>'.$valor->nombre1.' '.$valor->nombre2.' '.$valor->apellido1.' '.$valor->apellido2.'</td>'
                    .'<td style="display:none">'.$valor->nombre1.'</td>'
                    .'<td style="display:none">'.$valor->nombre2.'</td>'
                    .'<td style="display:none">'.$valor->apellido1.'</td>'
                    .'<td style="display:none">'.$valor->apellido2.'</td>'
                    .'<td><button type="button" id="Actualizar" onclick="iraactualizar('.$valor->folio.','.$valor->doccogestor.')"class="btn btn-success btn-sm" title="Esta opción va al módulo de actualización de datos, donde se actualiza la información general tanto del hogar como de los integrantes.">Actualizar</button></td>
                      '.$bloqueo.'
                    <td><button type="button" id="fichero" onclick="irafichero('.$valor->folio.','.$valor->idintegrantetitular.')" class="btn btn-primary btn-sm" title="Esta opción va al módulo donde se acercan, se hacen o no efectiva las oportunidades,  tanto del hogar como de los integrantes.">Fichero</button></td>
                    '.$bloqueologros.'
                    '.$bloqueoprivaciones.'
                    '.$bloqueoeerf.'
                    '.$vencuadref.'  
                   </tr>';
            }


        // visita de cierre
        
        if(($valor->idestacion == '28' && $valor->casilla <> '9' && $valor->casilladf <> '9' )){
        //if($valor->idestacion == '28'){
         $cont3= 0;
         ++$cont3;
         ++$a14e1;
         $b14e1 = $a14e1 % 2;
         //para colocar el color de la fila
         if($b14e1 === 1)
         {
             $colorfila3 = 'class="success text-uppercase"';
         }
         else
         {
             $colorfila3 = 'class="text-uppercase"';
         }
         $datosl5.=  '<tr '.$colorfila3.'>'
             .'<td>'.$valor->folio.'</td>'
             .'<td style="display:none">'.$valor->idintegrantetitular.'</td>'
             .'<td>'.$valor->documento.'</td>'
             .'<td>'.$valor->nombre1.' '.$valor->nombre2.' '.$valor->apellido1.' '.$valor->apellido2.'</td>'
             .'<td style="display:none">'.$valor->nombre1.'</td>'
             .'<td style="display:none">'.$valor->nombre2.'</td>'
             .'<td style="display:none">'.$valor->apellido1.'</td>'
             .'<td style="display:none">'.$valor->apellido2.'</td>'
             .'<td><button type="button" id="Actualizar" onclick="iraactualizar('.$valor->folio.','.$valor->doccogestor.')"class="btn btn-success btn-sm" title="Esta opción va al módulo de actualización de datos, donde se actualiza la información general tanto del hogar como de los integrantes.">Actualizar</button></td>
               '.$bloqueo.'
             <td><button type="button" id="fichero" onclick="irafichero('.$valor->folio.','.$valor->idintegrantetitular.')" class="btn btn-primary btn-sm" title="Esta opción va al módulo donde se acercan, se hacen o no efectiva las oportunidades,  tanto del hogar como de los integrantes.">Fichero</button></td>
             '.$bloqueologros.'
             '.$bloqueoprivaciones.'
             '.$bloqueoeerf.'
             '.$vencuadref.'  
            </tr>';
     }



// visita de cierre del acompañamiento
if(($valor->idestacion == '90' && $valor->casilla <> '9' && $valor->casilladf <> '9' && $valor->casilladflcv1 <> '9' )){
    // if($valor->idestacion == '28'){
       $cont3= 0;
      ++$cont3;
      ++$a14e19;
      $b14e19 = $a14e19 % 2;
      //para colocar el color de la fila
      if($b14e19 === 1)
      {
          $colorfila3 = 'class="success text-uppercase"';
      }
      else
      {
          $colorfila3 = 'class="text-uppercase"';
      }
      $datosl6.=  '<tr '.$colorfila3.'>'
          .'<td>'.$valor->folio.'</td>'
          .'<td style="display:none">'.$valor->idintegrantetitular.'</td>'
          .'<td>'.$valor->documento.'</td>'
          .'<td>'.$valor->nombre1.' '.$valor->nombre2.' '.$valor->apellido1.' '.$valor->apellido2.'</td>'
          .'<td style="display:none">'.$valor->nombre1.'</td>'
          .'<td style="display:none">'.$valor->nombre2.'</td>'
          .'<td style="display:none">'.$valor->apellido1.'</td>'
          .'<td style="display:none">'.$valor->apellido2.'</td>'
          .'<td><button type="button" id="Actualizar" onclick="iraactualizar('.$valor->folio.','.$valor->doccogestor.')"class="btn btn-success btn-sm" title="Esta opción va al módulo de actualización de datos, donde se actualiza la información general tanto del hogar como de los integrantes.">Actualizar</button></td>
            '.$bloqueo.'
          <td><button type="button" id="fichero" onclick="irafichero('.$valor->folio.','.$valor->idintegrantetitular.')" class="btn btn-primary btn-sm" title="Esta opción va al módulo donde se acercan, se hacen o no efectiva las oportunidades,  tanto del hogar como de los integrantes.">Fichero</button></td>
          '.$bloqueologros.'
          '.$bloqueoprivaciones.'
          '.$bloqueoeerf.'
          '.$vencuadref.'  
          '.$botoncasilladflcv1.'
         </tr>';
  }  

















  // promovidos sin las condiciones necesarias
if($valor->idestacion == '91'){
    // if($valor->idestacion == '28'){
       $cont3= 0;
      ++$cont3;
      ++$a14e19;
      $b14e19 = $a14e19 % 2;
      //para colocar el color de la fila
      if($b14e19 === 1)
      {
          $colorfila3 = 'class="success text-uppercase"';
      }
      else
      {
          $colorfila3 = 'class="text-uppercase"';
      }
      $datosl7.=  '<tr '.$colorfila3.'>'
          .'<td>'.$valor->folio.'</td>'
          .'<td style="display:none">'.$valor->idintegrantetitular.'</td>'
          .'<td>'.$valor->documento.'</td>'
          .'<td>'.$valor->nombre1.' '.$valor->nombre2.' '.$valor->apellido1.' '.$valor->apellido2.'</td>'
          .'<td style="display:none">'.$valor->nombre1.'</td>'
          .'<td style="display:none">'.$valor->nombre2.'</td>'
          .'<td style="display:none">'.$valor->apellido1.'</td>'
          .'<td style="display:none">'.$valor->apellido2.'</td>'
          .'<td><button type="button" id="Actualizar" onclick="iraactualizar('.$valor->folio.','.$valor->doccogestor.')"class="btn btn-success btn-sm" title="Esta opción va al módulo de actualización de datos, donde se actualiza la información general tanto del hogar como de los integrantes.">Actualizar</button></td>
            '.$bloqueo.'
          <td><button type="button" id="fichero" onclick="irafichero('.$valor->folio.','.$valor->idintegrantetitular.')" class="btn btn-primary btn-sm" title="Esta opción va al módulo donde se acercan, se hacen o no efectiva las oportunidades,  tanto del hogar como de los integrantes.">Fichero</button></td>
          '.$bloqueologros.'
          '.$bloqueoprivaciones.'
          '.$bloqueoeerf.'
          '.$vencuadref.'  
          '.$botoncasilladflcv1.'
         </tr>';
  }  






            //linea 3 sesion de cierre 
            //if(($valor->idestacion == '22' && $valor->casilla == '9' && $valor->intermedia == '') || ($valor->idestacion == '23' && $valor->casilla == '9' && $valor->intermedia == '')|| ($valor->idestacion == '24' && $valor->casilla == '9'&& $valor->intermedia == '')|| ($valor->idestacion == '25' && $valor->casilla == '9'&& $valor->intermedia == '')|| ($valor->idestacion == '26' && $valor->casilla == '9'&& $valor->intermedia == '')|| ($valor->idestacion == '31' && $valor->casilla == '9'&& $valor->intermedia == ''&& $valor->estado == '4')){
                if((($valor->idestacion >= '22' && $valor->idestacion < '31') && $valor->casilla == '9') 
                || ($valor->casilladf == '9' && $valor->idestacion <> '31')
                || ($valor->casilladflcv1 == '9' && $valor->idestacion <> '31')
                || ($valor->idestacion == '31' && $valor->estado == '4')){
                $cont3= 0;
                ++$cont3;
                ++$a7e1;
                $b7e1 = $a7e1 % 2;
                //para colocar el color de la fila
                if($b7e1 === 1)
                {
                    $colorfila3 = 'class="success text-uppercase"';
                }
                else
                {
                    $colorfila3 = 'class="text-uppercase"';
                }
                $datosl31 .=  '<tr '.$colorfila3.'>'
                    .'<td>'.$valor->folio.'</td>'
                    .'<td style="display:none">'.$valor->idintegrantetitular.'</td>'
                    .'<td>'.$valor->documento.'</td>'
                    .'<td>'.$valor->nombre1.' '.$valor->nombre2.' '.$valor->apellido1.' '.$valor->apellido2.'</td>'
                    .'<td style="display:none">'.$valor->nombre1.'</td>'
                    .'<td style="display:none">'.$valor->nombre2.'</td>'
                    .'<td style="display:none">'.$valor->apellido1.'</td>'
                    .'<td style="display:none">'.$valor->apellido2.'</td>'
                    .'<td><button type="button" id="Actualizar" onclick="iraactualizar('.$valor->folio.','.$valor->doccogestor.')"class="btn btn-success btn-sm" title="Esta opción va al módulo de actualización de datos, donde se actualiza la información general tanto del hogar como de los integrantes.">Actualizar</button></td>
                      '.$bloqueo.'
                    <td><button type="button" id="fichero" onclick="irafichero('.$valor->folio.','.$valor->idintegrantetitular.')" class="btn btn-primary btn-sm" title="Esta opción va al módulo donde se acercan, se hacen o no efectiva las oportunidades,  tanto del hogar como de los integrantes.">Fichero</button></td>
                    '.$bloqueologros.'
                    '.$bloqueoprivaciones.'
                    '.$bloqueoeerf.'
                    '.$vencuadref.'  
                    '.$botoncasilladflcv1.'
                   </tr>';
            }


            // linea 3 promovidos
            //if($valor->idestacion == '31' && $valor->casilla <> '' && $valor->intermedia == '' && $valor->estado <> '4'){
            // if(($valor->idestacion == '31' && $valor->estado <> '4')){
                if(($valor->idestacion31 == '31' && $valor->estado <> '4')){
                $cont3= 0;
                ++$cont3;
                ++$a8e1;
                $b8e1 = $a8e1 % 2;
                //para colocar el color de la fila
                if($b8e1 === 1)
                {
                    $colorfila3 = 'class="success text-uppercase"';
                }
                else
                {
                    $colorfila3 = 'class="text-uppercase"';
                }
                $datosl32 .=  '<tr '.$colorfila3.'>'
                    .'<td>'.$valor->folio.'</td>'
                    .'<td style="display:none">'.$valor->idintegrantetitular.'</td>'
                    .'<td>'.$valor->documento.'</td>'
                    .'<td>'.$valor->nombre1.' '.$valor->nombre2.' '.$valor->apellido1.' '.$valor->apellido2.'</td>'
                    .'<td style="display:none">'.$valor->nombre1.'</td>'
                    .'<td style="display:none">'.$valor->nombre2.'</td>'
                    .'<td style="display:none">'.$valor->apellido1.'</td>'
                    .'<td style="display:none">'.$valor->apellido2.'</td>'
                    .'<td><button type="button" id="logrosprom" onclick="logrosprom('.$valor->folio.','.$valor->doccogestor.')"class="btn btn-default btn-sm" title="Esta opción va al módulo de diagnóstico inicial y actual de logros, tanto del hogar como de los integrantes, pero no se puede realizar el movimiento de logros.">Logros promovidos</button></td>
                    '.$bloqueoprivaciones.'
                    '.$bloqueoeerf.'
                    '.$vencuadref.'  
                    '.$botoncasilladflcv1.'
                   </tr>';
            }
            
        }  
        
        $arrdatos = array();
        $arrdatos[0] = $datosl1e1;
        $arrdatos[1] = $datosl1e2;
        $arrdatos[2] = $datosl2e1;
        $arrdatos[3] = $datosl2e2;
        $arrdatos[4] = $datosl3;
        $arrdatos[5] = $datosl2e3;
        $arrdatos[6] = $datosl31;
        $arrdatos[7] = $datosl32;
        $arrdatos[8] = $datosl2e4;
        $arrdatos[9] = $datosl2e5;
        $arrdatos[10] = $datosl2e6;
        $arrdatos[11] = $datosl4;
        $arrdatos[12] = $datosl5;

        
        $arrdatos[13] = $datosl2e7;

        $arrdatos[14] = $datosl6;
        $arrdatos[15] = $datosl7;

        echo json_encode($arrdatos);
        
        //echo ($datos);
    }
    
//////////////////////////// no se utiliza actualmente /////////////////////

    public function fc_traerdoc()
    {
        $doccogestor = $this->input->get('vdoccogestor');
        $cdocumento = $this->input->get('vdocumento');
                
        $listartabla = $this->m_principalhogar->fm_listardocum($doccogestor,$cdocumento);


        $datosl1e1 = '';
        $datosl1e2 = '';
        $datosl2e1 = '';        
        $datosl2e2 = '';
        $datosl3 = '';
        $datosl2e3 = '';
        $datosl31 = '';
        $datosl32 = '';
        $datosl2e4 = '';
        $datosl2e5 = '';
        $datosl2e6 = '';
        $datosl4 = '';
        $datosl5 = '';
        $a1e1 = 0;//para saber el numero de l registro
        $b1e1 = 0;//el resultado del modulo para saber si es verde o blanco 
        $a1e2 = 0;//para saber el numero de l registro
        $b1e2 = 0;//el resultado del modulo para saber si es verde o blanco 
        $a2e1 = 0;//para saber el numero de l registro
        $b2e1 = 0;//el resultado del modulo para saber si es verde o blanco 
        $a3e1 = 0;
        $b3e1 = 0;
        $a5e1 = 0;
        $b5e1 = 0;
        $a6e1 = 0;
        $b6e1 = 0;
        $a7e1 = 0;
        $b7e1 = 0;
        $a8e1 = 0;
        $b8e1 = 0;
        $a9e1 = 0;
        $b9e1 = 0;
        $a10e1 = 0;
        $b10e1 = 0;
        $a11e1 = 0;
        $b11e1 = 0;
        $a12e1 = 0;
        $b12e1 = 0;
        
         foreach ($listartabla as $valor)
        {

        
        if($valor->bloqueofolio == 1)
        {
            $bloqueo = '<td><button type="button" id="Protocolo" class="btn btn-warning  btn-sm" disabled>Bloqueado por efectividad</button></td>';
        }
        else
        {
            $bloqueo = '<td><button type="button" id="Protocolo" onclick="iraprotocolo('.$valor->folio.','.$valor->idintegrantetitular.','.$valor->doccogestor.')" class="btn btn-warning  btn-sm">Protocolo</button></td>'; 
        }
        
        if($valor->logros == 0)
        {
            $bloqueologros = '<td><button type="button" id="diagnostico" class="btn btn-default  btn-sm" disabled>Sin logros</button></td>';
        }
        else
        {
            $bloqueologros = '<td><button type="button" id="diagnostico" onclick="iradiagnostico('.$valor->folio.','.$valor->doccogestor.')" class="btn btn-default btn-sm">Logros calculados</button></td>'; 
        }
        
               
        if($valor->privaciones == 0)
        {
            $bloqueoprivaciones = '<td><button type="button" id="privaciones" class="btn btn-success btn-sm" disabled>Sin Privaciones</button></td>';
        }
        else
        {
            $bloqueoprivaciones = '<td><button type="button" id="privaciones" onclick="iraprivaciones('.$valor->folio.','.$valor->doccogestor.')" class="btn btn-success btn-sm">Privaciones</button></td>'; 
        }
        
         if($valor->eerf == '')
        {
            $bloqueoeerf = '<td><button type="button" id="eerf" class="btn btn-success btn-sm" disabled>Sin ERFAM</button></td>';
        }
        else
        {
            $bloqueoeerf = '<td><button type="button" id="eerf" onclick="vereerf('.$valor->folio.',\''.$valor->nombre1.' '.$valor->nombre2.' '.$valor->apellido1.' '.$valor->apellido2.'\')" class="btn btn-success btn-sm">ERFAM</button></td>'; 
        }
        
        
        $vencuadref = '<td><button type="button" id="vencuadre"  onclick="iraencuadre('.$valor->folio.','.$valor->idintegrantetitular.','.$valor->doccogestor.')" class="btn btn-warning  btn-sm">Encuadre</button></td>'; 
            
           if( ($valor->idestacion == '' || $valor->idestacion == '10') && $valor->intermedia == '' ) {
               
               
                $cont1= 0;
                ++$cont1;
                ++$a1e1;
                $b1e1 = $a1e1 % 2;
                //para colocar el color de la fila
                if($b1e1 === 1)
                {
                    $colorfila1 = 'class="success text-uppercase"';
                }
                else
                {
                    $colorfila1 = 'class="text-uppercase"';
                }
               
               
                $datosl1e1 .=  '<tr '.$colorfila1.'>'
                    .'<td>'.$valor->folio.'</td>'
                    .'<td>'.$valor->idintegrantetitular.'</td>'
                    .'<td>'.$valor->documento.'</td>'
                    .'<td>'.$valor->nombre1.'</td>'
                    .'<td>'.$valor->nombre2.'</td>'
                    .'<td>'.$valor->apellido1.'</td>'
                    .'<td>'.$valor->apellido2.'</td>'
                    .'<td><button type="button" id="Actualizar" onclick="iraactualizar('.$valor->folio.','.$valor->doccogestor.')"class="btn btn-success btn-sm">Actualizar</button></td>
                      '.$bloqueo.'
                    <td><button type="button" id="fichero" onclick="irafichero('.$valor->folio.','.$valor->idintegrantetitular.')" class="btn btn-primary btn-sm">Fichero</button></td>
                    '.$bloqueologros.'
                    '.$bloqueoprivaciones.'
                    '.$bloqueoeerf.'    
                    '.$vencuadref.'  
                   </tr>';
           } 
            if($valor->idestacion == '11' && $valor->intermedia == '' ){
                
                $cont2= 0;
                ++$cont2;
                ++$a1e2;
                $b1e2 = $a1e2 % 2;
                //para colocar el color de la fila
                if($b1e2 === 1)
                {
                    $colorfila2 = 'class="success text-uppercase"';
                }
                else
                {
                    $colorfila2 = 'class="text-uppercase"';
                }
                $datosl1e2 .=  '<tr '.$colorfila2.'>'
                    .'<td>'.$valor->folio.'</td>'
                    .'<td>'.$valor->idintegrantetitular.'</td>'
                    .'<td>'.$valor->documento.'</td>'
                    .'<td>'.$valor->nombre1.'</td>'
                    .'<td>'.$valor->nombre2.'</td>'
                    .'<td>'.$valor->apellido1.'</td>'
                    .'<td>'.$valor->apellido2.'</td>'
                    .'<td><button type="button" id="Actualizar" onclick="iraactualizar('.$valor->folio.','.$valor->doccogestor.')"class="btn btn-success btn-sm">Actualizar</button></td>
                      '.$bloqueo.'
                    <td><button type="button" id="fichero" onclick="irafichero('.$valor->folio.','.$valor->idintegrantetitular.')" class="btn btn-primary btn-sm">Fichero</button></td>
                    '.$bloqueologros.'
                    '.$bloqueoprivaciones.'
                    '.$bloqueoeerf.'    
                    '.$vencuadref.'  
                   </tr>';
            }  
            
            if($valor->idestacion == '12' && $valor->intermedia == ''){
                
                $cont2= 0;
                ++$cont2;
                ++$a2e1;
                $b2e1 = $a2e1 % 2;
                //para colocar el color de la fila
                if($b2e1 === 1)
                {
                    $colorfila3 = 'class="success text-uppercase"';
                }
                else
                {
                    $colorfila3 = 'class="text-uppercase"';
                }
                $datosl2e1 .=  '<tr '.$colorfila3.'>'
                    .'<td>'.$valor->folio.'</td>'
                    .'<td>'.$valor->idintegrantetitular.'</td>'
                    .'<td>'.$valor->documento.'</td>'
                    .'<td>'.$valor->nombre1.'</td>'
                    .'<td>'.$valor->nombre2.'</td>'
                    .'<td>'.$valor->apellido1.'</td>'
                    .'<td>'.$valor->apellido2.'</td>'
                    .'<td><button type="button" id="Actualizar" onclick="iraactualizar('.$valor->folio.','.$valor->doccogestor.')"class="btn btn-success btn-sm">Actualizar</button></td>
                      '.$bloqueo.'
                    <td><button type="button" id="fichero" onclick="irafichero('.$valor->folio.','.$valor->idintegrantetitular.')" class="btn btn-primary btn-sm">Fichero</button></td>
                    '.$bloqueologros.'
                    '.$bloqueoprivaciones.'
                    '.$bloqueoeerf.'    
                    '.$vencuadref.'  
                   </tr>';
            }
            
            
             if($valor->idestacion == '21' && $valor->intermedia == ''){
                 $cont2= 0;
                ++$cont2;
                ++$a3e1;
                $b3e1 = $a3e1 % 2;
                //para colocar el color de la fila
                if($b3e1 === 1)
                {
                    $colorfila3 = 'class="success text-uppercase"';
                }
                else
                {
                    $colorfila3 = 'class="text-uppercase"';
                }
                $datosl2e2 .=  '<tr '.$colorfila3.'>'
                    .'<td>'.$valor->folio.'</td>'
                    .'<td>'.$valor->idintegrantetitular.'</td>'
                    .'<td>'.$valor->documento.'</td>'
                    .'<td>'.$valor->nombre1.'</td>'
                    .'<td>'.$valor->nombre2.'</td>'
                    .'<td>'.$valor->apellido1.'</td>'
                    .'<td>'.$valor->apellido2.'</td>'
                    .'<td><button type="button" id="Actualizar" onclick="iraactualizar('.$valor->folio.','.$valor->doccogestor.')"class="btn btn-success btn-sm">Actualizar</button></td>
                      '.$bloqueo.'
                    <td><button type="button" id="fichero" onclick="irafichero('.$valor->folio.','.$valor->idintegrantetitular.')" class="btn btn-primary btn-sm">Fichero</button></td>
                    '.$bloqueologros.'
                    '.$bloqueoprivaciones.'
                    '.$bloqueoeerf.'    
                    '.$vencuadref.'  
                   </tr>';
            }        
            
       
              if($valor->idestacion == '22' && $valor->casilla <> '9' && $valor->intermedia == ''){
                 $cont3= 0;
                ++$cont3;
                ++$a5e1;
                $b5e1 = $a5e1 % 2;
                //para colocar el color de la fila
                if($b5e1 === 1)
                {
                    $colorfila3 = 'class="success text-uppercase"';
                }
                else
                {
                    $colorfila3 = 'class="text-uppercase"';
                }
                $datosl2e3 .=  '<tr '.$colorfila3.'>'
                    .'<td>'.$valor->folio.'</td>'
                    .'<td>'.$valor->idintegrantetitular.'</td>'
                    .'<td>'.$valor->documento.'</td>'
                    .'<td>'.$valor->nombre1.'</td>'
                    .'<td>'.$valor->nombre2.'</td>'
                    .'<td>'.$valor->apellido1.'</td>'
                    .'<td>'.$valor->apellido2.'</td>'
                    .'<td><button type="button" id="Actualizar" onclick="iraactualizar('.$valor->folio.','.$valor->doccogestor.')"class="btn btn-success btn-sm">Actualizar</button></td>
                      '.$bloqueo.'
                    <td><button type="button" id="fichero" onclick="irafichero('.$valor->folio.','.$valor->idintegrantetitular.')" class="btn btn-primary btn-sm">Fichero</button></td>
                    '.$bloqueologros.'
                    '.$bloqueoprivaciones.'
                    '.$bloqueoeerf.'
                    '.$vencuadref.'  
                   </tr>';
            }
            
            if($valor->idestacion == '23' && $valor->casilla <> '9' && $valor->intermedia == ''){
                 $cont3= 0;
                ++$cont3;
                ++$a6e1;
                $b6e1 = $a6e1 % 2;
                //para colocar el color de la fila
                if($b6e1 === 1)
                {
                    $colorfila3 = 'class="success text-uppercase"';
                }
                else
                {
                    $colorfila3 = 'class="text-uppercase"';
                }
                $datosl3 .=  '<tr '.$colorfila3.'>'
                    .'<td>'.$valor->folio.'</td>'
                    .'<td>'.$valor->idintegrantetitular.'</td>'
                    .'<td>'.$valor->documento.'</td>'
                    .'<td>'.$valor->nombre1.'</td>'
                    .'<td>'.$valor->nombre2.'</td>'
                    .'<td>'.$valor->apellido1.'</td>'
                    .'<td>'.$valor->apellido2.'</td>'
                    .'<td><button type="button" id="Actualizar" onclick="iraactualizar('.$valor->folio.','.$valor->doccogestor.')"class="btn btn-success btn-sm">Actualizar</button></td>
                      '.$bloqueo.'
                    <td><button type="button" id="fichero" onclick="irafichero('.$valor->folio.','.$valor->idintegrantetitular.')" class="btn btn-primary btn-sm">Fichero</button></td>
                    '.$bloqueologros.'
                    '.$bloqueoprivaciones.'
                    '.$bloqueoeerf.'
                    '.$vencuadref.'  
                   </tr>';
            }
            
            if(($valor->idestacion == '22' && $valor->casilla == '9' && $valor->intermedia == '') || ($valor->idestacion == '23' && $valor->casilla == '9' && $valor->intermedia == '')|| ($valor->idestacion == '24' && $valor->casilla == '9'&& $valor->intermedia == '')|| ($valor->idestacion == '25' && $valor->casilla == '9'&& $valor->intermedia == '')|| ($valor->idestacion == '26' && $valor->casilla == '9'&& $valor->intermedia == '')){
                 $cont3= 0;
                ++$cont3;
                ++$a7e1;
                $b7e1 = $a7e1 % 2;
                //para colocar el color de la fila
                if($b7e1 === 1)
                {
                    $colorfila3 = 'class="success text-uppercase"';
                }
                else
                {
                    $colorfila3 = 'class="text-uppercase"';
                }
                $datosl31 .=  '<tr '.$colorfila3.'>'
                    .'<td>'.$valor->folio.'</td>'
                    .'<td>'.$valor->idintegrantetitular.'</td>'
                    .'<td>'.$valor->documento.'</td>'
                    .'<td>'.$valor->nombre1.'</td>'
                    .'<td>'.$valor->nombre2.'</td>'
                    .'<td>'.$valor->apellido1.'</td>'
                    .'<td>'.$valor->apellido2.'</td>'
                    .'<td><button type="button" id="Actualizar" onclick="iraactualizar('.$valor->folio.','.$valor->doccogestor.')"class="btn btn-success btn-sm">Actualizar</button></td>
                      '.$bloqueo.'
                    <td><button type="button" id="fichero" onclick="irafichero('.$valor->folio.','.$valor->idintegrantetitular.')" class="btn btn-primary btn-sm">Fichero</button></td>
                    '.$bloqueologros.'
                    '.$bloqueoprivaciones.'
                    '.$bloqueoeerf.'
                    '.$vencuadref.'  
                   </tr>';
            }
            
            
            
            
            
            if($valor->idestacion == '24' && $valor->casilla <> '9'&& $valor->intermedia == ''){
                 $cont3= 0;
                ++$cont3;
                ++$a10e1;
                $b10e1 = $a10e1 % 2;
                //para colocar el color de la fila
                if($b10e1 === 1)
                {
                    $colorfila3 = 'class="success text-uppercase"';
                }
                else
                {
                    $colorfila3 = 'class="text-uppercase"';
                }
                $datosl2e4 .=  '<tr '.$colorfila3.'>'
                    .'<td>'.$valor->folio.'</td>'
                    .'<td>'.$valor->idintegrantetitular.'</td>'
                    .'<td>'.$valor->documento.'</td>'
                    .'<td>'.$valor->nombre1.'</td>'
                    .'<td>'.$valor->nombre2.'</td>'
                    .'<td>'.$valor->apellido1.'</td>'
                    .'<td>'.$valor->apellido2.'</td>'
                    .'<td><button type="button" id="Actualizar" onclick="iraactualizar('.$valor->folio.','.$valor->doccogestor.')"class="btn btn-success btn-sm">Actualizar</button></td>
                      '.$bloqueo.'
                    <td><button type="button" id="fichero" onclick="irafichero('.$valor->folio.','.$valor->idintegrantetitular.')" class="btn btn-primary btn-sm">Fichero</button></td>
                    '.$bloqueologros.'
                    '.$bloqueoprivaciones.'
                    '.$bloqueoeerf.'
                    '.$vencuadref.'  
                   </tr>';
            }
            
            
            if($valor->idestacion == '25' && $valor->casilla <> '9'&& $valor->intermedia == ''){
                 $cont3= 0;
                ++$cont3;
                ++$a9e1;
                $b9e1 = $a9e1 % 2;
                //para colocar el color de la fila
                if($b9e1 === 1)
                {
                    $colorfila3 = 'class="success text-uppercase"';
                }
                else
                {
                    $colorfila3 = 'class="text-uppercase"';
                }
                $datosl2e5 .=  '<tr '.$colorfila3.'>'
                    .'<td>'.$valor->folio.'</td>'
                    .'<td>'.$valor->idintegrantetitular.'</td>'
                    .'<td>'.$valor->documento.'</td>'
                    .'<td>'.$valor->nombre1.'</td>'
                    .'<td>'.$valor->nombre2.'</td>'
                    .'<td>'.$valor->apellido1.'</td>'
                    .'<td>'.$valor->apellido2.'</td>'
                    .'<td><button type="button" id="Actualizar" onclick="iraactualizar('.$valor->folio.','.$valor->doccogestor.')"class="btn btn-success btn-sm">Actualizar</button></td>
                      '.$bloqueo.'
                    <td><button type="button" id="fichero" onclick="irafichero('.$valor->folio.','.$valor->idintegrantetitular.')" class="btn btn-primary btn-sm">Fichero</button></td>
                    '.$bloqueologros.'
                    '.$bloqueoprivaciones.'
                    '.$bloqueoeerf.'
                    '.$vencuadref.'  
                   </tr>';
            }
            
            if($valor->idestacion == '26' && $valor->casilla <> '9'&& $valor->intermedia == ''){
                 $cont3= 0;
                ++$cont3;
                ++$a11e1;
                $b11e1 = $a11e1 % 2;
                //para colocar el color de la fila
                if($b11e1 === 1)
                {
                    $colorfila3 = 'class="success text-uppercase"';
                }
                else
                {
                    $colorfila3 = 'class="text-uppercase"';
                }
                $datosl2e6 .=  '<tr '.$colorfila3.'>'
                    .'<td>'.$valor->folio.'</td>'
                    .'<td>'.$valor->idintegrantetitular.'</td>'
                    .'<td>'.$valor->documento.'</td>'
                    .'<td>'.$valor->nombre1.'</td>'
                    .'<td>'.$valor->nombre2.'</td>'
                    .'<td>'.$valor->apellido1.'</td>'
                    .'<td>'.$valor->apellido2.'</td>'
                    .'<td><button type="button" id="Actualizar" onclick="iraactualizar('.$valor->folio.','.$valor->doccogestor.')"class="btn btn-success btn-sm">Actualizar</button></td>
                      '.$bloqueo.'
                    <td><button type="button" id="fichero" onclick="irafichero('.$valor->folio.','.$valor->idintegrantetitular.')" class="btn btn-primary btn-sm">Fichero</button></td>
                    '.$bloqueologros.'
                    '.$bloqueoprivaciones.'
                    '.$bloqueoeerf.'
                    '.$vencuadref.'  
                   </tr>';
            }
            
            
            
            
            
            if($valor->idestacion == '31' && $valor->casilla == '9' && $valor->intermedia == ''){
                 $cont3= 0;
                ++$cont3;
                ++$a8e1;
                $b8e1 = $a8e1 % 2;
                //para colocar el color de la fila
                if($b8e1 === 1)
                {
                    $colorfila3 = 'class="success text-uppercase"';
                }
                else
                {
                    $colorfila3 = 'class="text-uppercase"';
                }
                $datosl32 .=  '<tr '.$colorfila3.'>'
                    .'<td>'.$valor->folio.'</td>'
                    .'<td>'.$valor->idintegrantetitular.'</td>'
                    .'<td>'.$valor->documento.'</td>'
                    .'<td>'.$valor->nombre1.'</td>'
                    .'<td>'.$valor->nombre2.'</td>'
                    .'<td>'.$valor->apellido1.'</td>'
                    .'<td>'.$valor->apellido2.'</td>'
                    .'<td><button type="button" id="logrosprom" onclick="logrosprom('.$valor->folio.','.$valor->doccogestor.')"class="btn btn-default btn-sm">Logros promovidos</button></td>
                    '.$bloqueoprivaciones.'
                    '.$bloqueoeerf.'
                    '.$vencuadref.'  
                   </tr>';
            }
            
            if($valor->intermedia == '1'){
                 $cont3= 0;
                ++$cont3;
                ++$a12e1;
                $b12e1 = $a12e1 % 2;
                //para colocar el color de la fila
                if($b12e1 === 1)
                {
                    $colorfila3 = 'class="success text-uppercase"';
                }
                else
                {
                    $colorfila3 = 'class="text-uppercase"';
                }
                $datosl4.=  '<tr '.$colorfila3.'>'
                    .'<td>'.$valor->folio.'</td>'
                    .'<td>'.$valor->idintegrantetitular.'</td>'
                    .'<td>'.$valor->documento.'</td>'
                    .'<td>'.$valor->nombre1.'</td>'
                    .'<td>'.$valor->nombre2.'</td>'
                    .'<td>'.$valor->apellido1.'</td>'
                    .'<td>'.$valor->apellido2.'</td>'
                    .'<td><button type="button" id="Actualizar" onclick="iraactualizar('.$valor->folio.','.$valor->doccogestor.')"class="btn btn-success btn-sm">Actualizar</button></td>
                      '.$bloqueo.'
                    <td><button type="button" id="fichero" onclick="irafichero('.$valor->folio.','.$valor->idintegrantetitular.')" class="btn btn-primary btn-sm">Fichero</button></td>
                    '.$bloqueologros.'
                    '.$bloqueoprivaciones.'
                    '.$bloqueoeerf.'
                    '.$vencuadref.'  
                   </tr>';
            }
        }    
        
         $arrdatos = array();
        $arrdatos[0] = $datosl1e1;
        $arrdatos[1] = $datosl1e2;
        $arrdatos[2] = $datosl2e1;
        $arrdatos[3] = $datosl2e2;
        $arrdatos[4] = $datosl3;
        $arrdatos[5] = $datosl2e3;
        $arrdatos[6] = $datosl31;
        $arrdatos[7] = $datosl32;
        $arrdatos[8] = $datosl2e4;
        $arrdatos[9] = $datosl2e5;
        $arrdatos[10] = $datosl2e6;
        $arrdatos[11] = $datosl4;
        echo json_encode($arrdatos);
        
        
        
    }
    
    public function fc_traernom()
    {
        $doccogestor = $this->input->get('vdoccogestor');
        $cnombre = $this->input->get('vnombre');
                
        $listartabla = $this->m_principalhogar->fm_listarnom($doccogestor,$cnombre);


        $datosl1e1 = '';
        $datosl1e2 = '';
        $datosl2e1 = '';        
        $datosl2e2 = '';
        $datosl3 = '';
        $datosl2e3 = '';
        $datosl31 = '';
        $datosl32 = '';
        $datosl2e4 = '';
        $datosl2e5 = '';
        $datosl2e6 = '';
        $datosl4 = '';
        $a1e1 = 0;//para saber el numero de l registro
        $b1e1 = 0;//el resultado del modulo para saber si es verde o blanco 
        $a1e2 = 0;//para saber el numero de l registro
        $b1e2 = 0;//el resultado del modulo para saber si es verde o blanco 
        $a2e1 = 0;//para saber el numero de l registro
        $b2e1 = 0;//el resultado del modulo para saber si es verde o blanco 
        $a3e1 = 0;
        $b3e1 = 0;
        $a5e1 = 0;
        $b5e1 = 0;
        $a6e1 = 0;
        $b6e1 = 0;
        $a7e1 = 0;
        $b7e1 = 0;
        $a8e1 = 0;
        $b8e1 = 0;
        $a9e1 = 0;
        $b9e1 = 0;
        $a10e1 = 0;
        $b10e1 = 0;
        $a11e1 = 0;
        $b11e1 = 0;
        $a12e1 = 0;
        $b12e1 = 0;
        
         foreach ($listartabla as $valor)
        {

        
        if($valor->bloqueofolio == 1)
        {
            $bloqueo = '<td><button type="button" id="Protocolo" class="btn btn-warning  btn-sm" disabled>Bloqueado por efectividad</button></td>';
        }
        else
        {
            $bloqueo = '<td><button type="button" id="Protocolo" onclick="iraprotocolo('.$valor->folio.','.$valor->idintegrantetitular.','.$valor->doccogestor.')" class="btn btn-warning  btn-sm">Protocolo</button></td>'; 
        }
        
        if($valor->logros == 0)
        {
            $bloqueologros = '<td><button type="button" id="diagnostico" class="btn btn-default  btn-sm" disabled>Sin logros</button></td>';
        }
        else
        {
            $bloqueologros = '<td><button type="button" id="diagnostico" onclick="iradiagnostico('.$valor->folio.','.$valor->doccogestor.')" class="btn btn-default btn-sm">Logros calculados</button></td>'; 
        }
        
               
        if($valor->privaciones == 0)
        {
            $bloqueoprivaciones = '<td><button type="button" id="privaciones" class="btn btn-success btn-sm" disabled>Sin Privaciones</button></td>';
        }
        else
        {
            $bloqueoprivaciones = '<td><button type="button" id="privaciones" onclick="iraprivaciones('.$valor->folio.','.$valor->doccogestor.')" class="btn btn-success btn-sm">Privaciones</button></td>'; 
        }
        
         if($valor->eerf == '')
        {
            $bloqueoeerf = '<td><button type="button" id="eerf" class="btn btn-success btn-sm" disabled>Sin ERFAM</button></td>';
        }
        else
        {
            $bloqueoeerf = '<td><button type="button" id="eerf" onclick="vereerf('.$valor->folio.',\''.$valor->nombre1.' '.$valor->nombre2.' '.$valor->apellido1.' '.$valor->apellido2.'\')" class="btn btn-success btn-sm">ERFAM</button></td>'; 
        }
        
        $vencuadref = '<td><button type="button" id="vencuadre"  onclick="iraencuadre('.$valor->folio.','.$valor->idintegrantetitular.','.$valor->doccogestor.')" class="btn btn-warning  btn-sm">Encuadre</button></td>'; 
        
            
           if( ($valor->idestacion == '' || $valor->idestacion == '10') && $valor->intermedia == '' ) {
               
               
                $cont1= 0;
                ++$cont1;
                ++$a1e1;
                $b1e1 = $a1e1 % 2;
                //para colocar el color de la fila
                if($b1e1 === 1)
                {
                    $colorfila1 = 'class="success text-uppercase"';
                }
                else
                {
                    $colorfila1 = 'class="text-uppercase"';
                }
               
               
                $datosl1e1 .=  '<tr '.$colorfila1.'>'
                    .'<td>'.$valor->folio.'</td>'
                    .'<td>'.$valor->idintegrantetitular.'</td>'
                    .'<td>'.$valor->documento.'</td>'
                    .'<td>'.$valor->nombre1.'</td>'
                    .'<td>'.$valor->nombre2.'</td>'
                    .'<td>'.$valor->apellido1.'</td>'
                    .'<td>'.$valor->apellido2.'</td>'
                    .'<td><button type="button" id="Actualizar" onclick="iraactualizar('.$valor->folio.','.$valor->doccogestor.')"class="btn btn-success btn-sm">Actualizar</button></td>
                      '.$bloqueo.'
                    <td><button type="button" id="fichero" onclick="irafichero('.$valor->folio.','.$valor->idintegrantetitular.')" class="btn btn-primary btn-sm">Fichero</button></td>
                    '.$bloqueologros.'
                    '.$bloqueoprivaciones.'
                    '.$bloqueoeerf.'    
                    '.$vencuadref.'  
                   </tr>';
           } 
            if($valor->idestacion == '11' && $valor->intermedia == '' ){
                
                $cont2= 0;
                ++$cont2;
                ++$a1e2;
                $b1e2 = $a1e2 % 2;
                //para colocar el color de la fila
                if($b1e2 === 1)
                {
                    $colorfila2 = 'class="success text-uppercase"';
                }
                else
                {
                    $colorfila2 = 'class="text-uppercase"';
                }
                $datosl1e2 .=  '<tr '.$colorfila2.'>'
                    .'<td>'.$valor->folio.'</td>'
                    .'<td>'.$valor->idintegrantetitular.'</td>'
                    .'<td>'.$valor->documento.'</td>'
                    .'<td>'.$valor->nombre1.'</td>'
                    .'<td>'.$valor->nombre2.'</td>'
                    .'<td>'.$valor->apellido1.'</td>'
                    .'<td>'.$valor->apellido2.'</td>'
                    .'<td><button type="button" id="Actualizar" onclick="iraactualizar('.$valor->folio.','.$valor->doccogestor.')"class="btn btn-success btn-sm">Actualizar</button></td>
                      '.$bloqueo.'
                    <td><button type="button" id="fichero" onclick="irafichero('.$valor->folio.','.$valor->idintegrantetitular.')" class="btn btn-primary btn-sm">Fichero</button></td>
                    '.$bloqueologros.'
                    '.$bloqueoprivaciones.'
                    '.$bloqueoeerf.'    
                    '.$vencuadref.'  
                   </tr>';
            }  
            
            if($valor->idestacion == '12' && $valor->intermedia == ''){
                
                $cont2= 0;
                ++$cont2;
                ++$a2e1;
                $b2e1 = $a2e1 % 2;
                //para colocar el color de la fila
                if($b2e1 === 1)
                {
                    $colorfila3 = 'class="success text-uppercase"';
                }
                else
                {
                    $colorfila3 = 'class="text-uppercase"';
                }
                $datosl2e1 .=  '<tr '.$colorfila3.'>'
                    .'<td>'.$valor->folio.'</td>'
                    .'<td>'.$valor->idintegrantetitular.'</td>'
                    .'<td>'.$valor->documento.'</td>'
                    .'<td>'.$valor->nombre1.'</td>'
                    .'<td>'.$valor->nombre2.'</td>'
                    .'<td>'.$valor->apellido1.'</td>'
                    .'<td>'.$valor->apellido2.'</td>'
                    .'<td><button type="button" id="Actualizar" onclick="iraactualizar('.$valor->folio.','.$valor->doccogestor.')"class="btn btn-success btn-sm">Actualizar</button></td>
                      '.$bloqueo.'
                    <td><button type="button" id="fichero" onclick="irafichero('.$valor->folio.','.$valor->idintegrantetitular.')" class="btn btn-primary btn-sm">Fichero</button></td>
                    '.$bloqueologros.'
                    '.$bloqueoprivaciones.'
                    '.$bloqueoeerf.'    
                    '.$vencuadref.'  
                   </tr>';
            }
            
            
             if($valor->idestacion == '21' && $valor->intermedia == ''){
                 $cont2= 0;
                ++$cont2;
                ++$a3e1;
                $b3e1 = $a3e1 % 2;
                //para colocar el color de la fila
                if($b3e1 === 1)
                {
                    $colorfila3 = 'class="success text-uppercase"';
                }
                else
                {
                    $colorfila3 = 'class="text-uppercase"';
                }
                $datosl2e2 .=  '<tr '.$colorfila3.'>'
                    .'<td>'.$valor->folio.'</td>'
                    .'<td>'.$valor->idintegrantetitular.'</td>'
                    .'<td>'.$valor->documento.'</td>'
                    .'<td>'.$valor->nombre1.'</td>'
                    .'<td>'.$valor->nombre2.'</td>'
                    .'<td>'.$valor->apellido1.'</td>'
                    .'<td>'.$valor->apellido2.'</td>'
                    .'<td><button type="button" id="Actualizar" onclick="iraactualizar('.$valor->folio.','.$valor->doccogestor.')"class="btn btn-success btn-sm">Actualizar</button></td>
                      '.$bloqueo.'
                    <td><button type="button" id="fichero" onclick="irafichero('.$valor->folio.','.$valor->idintegrantetitular.')" class="btn btn-primary btn-sm">Fichero</button></td>
                    '.$bloqueologros.'
                    '.$bloqueoprivaciones.'
                    '.$bloqueoeerf.'    
                    '.$vencuadref.'  
                   </tr>';
            }        
            
       
              if($valor->idestacion == '22' && $valor->casilla <> '9' && $valor->intermedia == ''){
                 $cont3= 0;
                ++$cont3;
                ++$a5e1;
                $b5e1 = $a5e1 % 2;
                //para colocar el color de la fila
                if($b5e1 === 1)
                {
                    $colorfila3 = 'class="success text-uppercase"';
                }
                else
                {
                    $colorfila3 = 'class="text-uppercase"';
                }
                $datosl2e3 .=  '<tr '.$colorfila3.'>'
                    .'<td>'.$valor->folio.'</td>'
                    .'<td>'.$valor->idintegrantetitular.'</td>'
                    .'<td>'.$valor->documento.'</td>'
                    .'<td>'.$valor->nombre1.'</td>'
                    .'<td>'.$valor->nombre2.'</td>'
                    .'<td>'.$valor->apellido1.'</td>'
                    .'<td>'.$valor->apellido2.'</td>'
                    .'<td><button type="button" id="Actualizar" onclick="iraactualizar('.$valor->folio.','.$valor->doccogestor.')"class="btn btn-success btn-sm">Actualizar</button></td>
                      '.$bloqueo.'
                    <td><button type="button" id="fichero" onclick="irafichero('.$valor->folio.','.$valor->idintegrantetitular.')" class="btn btn-primary btn-sm">Fichero</button></td>
                    '.$bloqueologros.'
                    '.$bloqueoprivaciones.'
                    '.$bloqueoeerf.'
                    '.$vencuadref.'  
                   </tr>';
            }
            
            if($valor->idestacion == '23' && $valor->casilla <> '9' && $valor->intermedia == ''){
                 $cont3= 0;
                ++$cont3;
                ++$a6e1;
                $b6e1 = $a6e1 % 2;
                //para colocar el color de la fila
                if($b6e1 === 1)
                {
                    $colorfila3 = 'class="success text-uppercase"';
                }
                else
                {
                    $colorfila3 = 'class="text-uppercase"';
                }
                $datosl3 .=  '<tr '.$colorfila3.'>'
                    .'<td>'.$valor->folio.'</td>'
                    .'<td>'.$valor->idintegrantetitular.'</td>'
                    .'<td>'.$valor->documento.'</td>'
                    .'<td>'.$valor->nombre1.'</td>'
                    .'<td>'.$valor->nombre2.'</td>'
                    .'<td>'.$valor->apellido1.'</td>'
                    .'<td>'.$valor->apellido2.'</td>'
                    .'<td><button type="button" id="Actualizar" onclick="iraactualizar('.$valor->folio.','.$valor->doccogestor.')"class="btn btn-success btn-sm">Actualizar</button></td>
                      '.$bloqueo.'
                    <td><button type="button" id="fichero" onclick="irafichero('.$valor->folio.','.$valor->idintegrantetitular.')" class="btn btn-primary btn-sm">Fichero</button></td>
                    '.$bloqueologros.'
                    '.$bloqueoprivaciones.'
                    '.$bloqueoeerf.'
                    '.$vencuadref.'  
                   </tr>';
            }
            
            if(($valor->idestacion == '22' && $valor->casilla == '9' && $valor->intermedia == '') || ($valor->idestacion == '23' && $valor->casilla == '9' && $valor->intermedia == '')|| ($valor->idestacion == '24' && $valor->casilla == '9'&& $valor->intermedia == '')|| ($valor->idestacion == '25' && $valor->casilla == '9'&& $valor->intermedia == '')|| ($valor->idestacion == '26' && $valor->casilla == '9'&& $valor->intermedia == '')){
                 $cont3= 0;
                ++$cont3;
                ++$a7e1;
                $b7e1 = $a7e1 % 2;
                //para colocar el color de la fila
                if($b7e1 === 1)
                {
                    $colorfila3 = 'class="success text-uppercase"';
                }
                else
                {
                    $colorfila3 = 'class="text-uppercase"';
                }
                $datosl31 .=  '<tr '.$colorfila3.'>'
                    .'<td>'.$valor->folio.'</td>'
                    .'<td>'.$valor->idintegrantetitular.'</td>'
                    .'<td>'.$valor->documento.'</td>'
                    .'<td>'.$valor->nombre1.'</td>'
                    .'<td>'.$valor->nombre2.'</td>'
                    .'<td>'.$valor->apellido1.'</td>'
                    .'<td>'.$valor->apellido2.'</td>'
                    .'<td><button type="button" id="Actualizar" onclick="iraactualizar('.$valor->folio.','.$valor->doccogestor.')"class="btn btn-success btn-sm">Actualizar</button></td>
                      '.$bloqueo.'
                    <td><button type="button" id="fichero" onclick="irafichero('.$valor->folio.','.$valor->idintegrantetitular.')" class="btn btn-primary btn-sm">Fichero</button></td>
                    '.$bloqueologros.'
                    '.$bloqueoprivaciones.'
                    '.$bloqueoeerf.'
                    '.$vencuadref.'  
                   </tr>';
            }
            
            
            
            
            
            if($valor->idestacion == '24' && $valor->casilla <> '9'&& $valor->intermedia == ''){
                 $cont3= 0;
                ++$cont3;
                ++$a10e1;
                $b10e1 = $a10e1 % 2;
                //para colocar el color de la fila
                if($b10e1 === 1)
                {
                    $colorfila3 = 'class="success text-uppercase"';
                }
                else
                {
                    $colorfila3 = 'class="text-uppercase"';
                }
                $datosl2e4 .=  '<tr '.$colorfila3.'>'
                    .'<td>'.$valor->folio.'</td>'
                    .'<td>'.$valor->idintegrantetitular.'</td>'
                    .'<td>'.$valor->documento.'</td>'
                    .'<td>'.$valor->nombre1.'</td>'
                    .'<td>'.$valor->nombre2.'</td>'
                    .'<td>'.$valor->apellido1.'</td>'
                    .'<td>'.$valor->apellido2.'</td>'
                    .'<td><button type="button" id="Actualizar" onclick="iraactualizar('.$valor->folio.','.$valor->doccogestor.')"class="btn btn-success btn-sm">Actualizar</button></td>
                      '.$bloqueo.'
                    <td><button type="button" id="fichero" onclick="irafichero('.$valor->folio.','.$valor->idintegrantetitular.')" class="btn btn-primary btn-sm">Fichero</button></td>
                    '.$bloqueologros.'
                    '.$bloqueoprivaciones.'
                    '.$bloqueoeerf.'
                    '.$vencuadref.'  
                   </tr>';
            }
            
            
            if($valor->idestacion == '25' && $valor->casilla <> '9'&& $valor->intermedia == ''){
                 $cont3= 0;
                ++$cont3;
                ++$a9e1;
                $b9e1 = $a9e1 % 2;
                //para colocar el color de la fila
                if($b9e1 === 1)
                {
                    $colorfila3 = 'class="success text-uppercase"';
                }
                else
                {
                    $colorfila3 = 'class="text-uppercase"';
                }
                $datosl2e5 .=  '<tr '.$colorfila3.'>'
                    .'<td>'.$valor->folio.'</td>'
                    .'<td>'.$valor->idintegrantetitular.'</td>'
                    .'<td>'.$valor->documento.'</td>'
                    .'<td>'.$valor->nombre1.'</td>'
                    .'<td>'.$valor->nombre2.'</td>'
                    .'<td>'.$valor->apellido1.'</td>'
                    .'<td>'.$valor->apellido2.'</td>'
                    .'<td><button type="button" id="Actualizar" onclick="iraactualizar('.$valor->folio.','.$valor->doccogestor.')"class="btn btn-success btn-sm">Actualizar</button></td>
                      '.$bloqueo.'
                    <td><button type="button" id="fichero" onclick="irafichero('.$valor->folio.','.$valor->idintegrantetitular.')" class="btn btn-primary btn-sm">Fichero</button></td>
                    '.$bloqueologros.'
                    '.$bloqueoprivaciones.'
                    '.$bloqueoeerf.'
                    '.$vencuadref.'  
                   </tr>';
            }
            
            if($valor->idestacion == '26' && $valor->casilla <> '9'&& $valor->intermedia == ''){
                 $cont3= 0;
                ++$cont3;
                ++$a11e1;
                $b11e1 = $a11e1 % 2;
                //para colocar el color de la fila
                if($b11e1 === 1)
                {
                    $colorfila3 = 'class="success text-uppercase"';
                }
                else
                {
                    $colorfila3 = 'class="text-uppercase"';
                }
                $datosl2e6 .=  '<tr '.$colorfila3.'>'
                    .'<td>'.$valor->folio.'</td>'
                    .'<td>'.$valor->idintegrantetitular.'</td>'
                    .'<td>'.$valor->documento.'</td>'
                    .'<td>'.$valor->nombre1.'</td>'
                    .'<td>'.$valor->nombre2.'</td>'
                    .'<td>'.$valor->apellido1.'</td>'
                    .'<td>'.$valor->apellido2.'</td>'
                    .'<td><button type="button" id="Actualizar" onclick="iraactualizar('.$valor->folio.','.$valor->doccogestor.')"class="btn btn-success btn-sm">Actualizar</button></td>
                      '.$bloqueo.'
                    <td><button type="button" id="fichero" onclick="irafichero('.$valor->folio.','.$valor->idintegrantetitular.')" class="btn btn-primary btn-sm">Fichero</button></td>
                    '.$bloqueologros.'
                    '.$bloqueoprivaciones.'
                    '.$bloqueoeerf.'
                    '.$vencuadref.'  
                   </tr>';
            }
            
            
            
            
            
            if($valor->idestacion == '31' && $valor->casilla == '9' && $valor->intermedia == ''){
                 $cont3= 0;
                ++$cont3;
                ++$a8e1;
                $b8e1 = $a8e1 % 2;
                //para colocar el color de la fila
                if($b8e1 === 1)
                {
                    $colorfila3 = 'class="success text-uppercase"';
                }
                else
                {
                    $colorfila3 = 'class="text-uppercase"';
                }
                $datosl32 .=  '<tr '.$colorfila3.'>'
                    .'<td>'.$valor->folio.'</td>'
                    .'<td>'.$valor->idintegrantetitular.'</td>'
                    .'<td>'.$valor->documento.'</td>'
                    .'<td>'.$valor->nombre1.'</td>'
                    .'<td>'.$valor->nombre2.'</td>'
                    .'<td>'.$valor->apellido1.'</td>'
                    .'<td>'.$valor->apellido2.'</td>'
                    .'<td><button type="button" id="logrosprom" onclick="logrosprom('.$valor->folio.','.$valor->doccogestor.')"class="btn btn-default btn-sm">Logros promovidos</button></td>
                    '.$bloqueoprivaciones.'
                    '.$bloqueoeerf.'
                    '.$vencuadref.'  
                   </tr>';
            }
            
            if($valor->intermedia == '1'){
                 $cont3= 0;
                ++$cont3;
                ++$a12e1;
                $b12e1 = $a12e1 % 2;
                //para colocar el color de la fila
                if($b12e1 === 1)
                {
                    $colorfila3 = 'class="success text-uppercase"';
                }
                else
                {
                    $colorfila3 = 'class="text-uppercase"';
                }
                $datosl4.=  '<tr '.$colorfila3.'>'
                    .'<td>'.$valor->folio.'</td>'
                    .'<td>'.$valor->idintegrantetitular.'</td>'
                    .'<td>'.$valor->documento.'</td>'
                    .'<td>'.$valor->nombre1.'</td>'
                    .'<td>'.$valor->nombre2.'</td>'
                    .'<td>'.$valor->apellido1.'</td>'
                    .'<td>'.$valor->apellido2.'</td>'
                    .'<td><button type="button" id="Actualizar" onclick="iraactualizar('.$valor->folio.','.$valor->doccogestor.')"class="btn btn-success btn-sm">Actualizar</button></td>
                      '.$bloqueo.'
                    <td><button type="button" id="fichero" onclick="irafichero('.$valor->folio.','.$valor->idintegrantetitular.')" class="btn btn-primary btn-sm">Fichero</button></td>
                    '.$bloqueologros.'
                    '.$bloqueoprivaciones.'
                    '.$bloqueoeerf.'
                    '.$vencuadref.'  
                   </tr>';
            }
        }    
        
        $arrdatos = array();
        $arrdatos[0] = $datosl1e1;
        $arrdatos[1] = $datosl1e2;
        $arrdatos[2] = $datosl2e1;
        $arrdatos[3] = $datosl2e2;
        $arrdatos[4] = $datosl3;
        $arrdatos[5] = $datosl2e3;
        $arrdatos[6] = $datosl31;
        $arrdatos[7] = $datosl32;
        $arrdatos[8] = $datosl2e4;
        $arrdatos[9] = $datosl2e5;
        $arrdatos[10] = $datosl2e6;
        $arrdatos[11] = $datosl4;

        echo json_encode($arrdatos);
        
        
        
    }
    
    public function fc_llenarcapitulos()
    {
        $cfolio = $this->input->get('vfolio');       
        $this->m_principalhogar->fm_llenarcapituloshogar($cfolio);
       //echo json_encode(array('result' => 'guardado'));
    }
    
    public function fc_resultadoeerf(){
        
        $cfolio = $this->input->get('vfolio'); 
        
        // Seleccionar puntaje general evaluacion 1,centil e interpretacion general evaluacion 1, y el punto de minimo de comparacion para la mejoria en puntaje 2
        $querytotal1 = $this->m_principalhogar->fm_totalgeneral1($cfolio);
        $totalgeneral1 = array('totalg1'=>0,
                                    'centilg1'=>0,
                                    'interpretaciong1'=>'',
                                    'mejorag1'=>0);
      foreach($querytotal1 as $totalg1){
          
          $totalgeneral1 = array('totalg1'=>$totalg1->total,
                                    'centilg1'=>$totalg1->centil1,
                                    'interpretaciong1'=>$totalg1->interpretacion,
                                    'mejorag1'=>$totalg1->puntaje2);
          
      }

     // Seleccionar puntaje general evaluacion 2,centil e interpretacion general evaluacion 2
        $querytotal2 = $this->m_principalhogar->fm_totalgeneral2($cfolio);
        $totalgeneral2 = array('totalg2'=>0,
                                    'centilg2'=>0,
                                    'interpretaciong2'=>'',
                                    'mejorag2'=>0);
      foreach ($querytotal2 as $totalg2){
          
          $totalgeneral2 = array('totalg2'=>$totalg2->total,
                                    'centilg2'=>$totalg2->centil1,
                                    'interpretaciong2'=>$totalg2->interpretacion);
          
      }

// Comparar ambos resultados y validar si hay mejoras o no
        $mensajegeneral = '';
        if ($totalgeneral2['totalg2'] <> '') {
            if ($totalgeneral2['totalg2'] >= $totalgeneral1['mejorag1']) {
                $mensajegeneral = 'Mejora';
            } else {
                $mensajegeneral = 'No hay mejora';
            }
        }
        
        // Seleccionar puntaje convivencia evaluacion 1,centil e interpretacion general evaluacion 1, y el punto de minimo de comparacion para la mejoria en puntaje 2
        $queryconv1 = $this->m_principalhogar->fm_totalconvivencia1($cfolio);
        $totalconv1 = array('totalcv1'=>0,
                                    'centilcv1'=>0,
                                    'interpretacioncv1'=>'',
                                    'mejoracv1'=>0);
      foreach($queryconv1 as $totalconvivencia1){
          
          $totalconv1 = array('totalcv1'=>$totalconvivencia1->total,
                                    'centilcv1'=>$totalconvivencia1->centil,
                                    'interpretacioncv1'=>$totalconvivencia1->interpretacion,
                                    'mejoracv1'=>$totalconvivencia1->puntaje2);
          
      }

     // Seleccionar puntaje general evaluacion 2,centil e interpretacion general evaluacion 2
        $queryconv2 = $this->m_principalhogar->fm_totalconvivencia2($cfolio);
        $totalconv2 = array('totalcv2'=>0,
                                    'centilcv2'=>0,
                                    'interpretacioncv2'=>'');
      foreach ($queryconv2 as $totalconvivencia2){
          
          $totalconv2 = array('totalcv2'=>$totalconvivencia2->total,
                                    'centilcv2'=>$totalconvivencia2->centil,
                                    'interpretacioncv2'=>$totalconvivencia2->interpretacion);
          
      }

// Comparar ambos resultados y validar si hay mejoras o no
        $mensajeconvivencia = '';
        if ($totalconv2['totalcv2'] <> '') {
            if ($totalconv2['totalcv2'] >= $totalconv1['mejoracv1']) {
                $mensajeconvivencia = 'Mejora';
            } else {
                $mensajeconvivencia = 'No hay mejora';
            }
        }
        
        
        // Seleccionar puntaje comunicacion evaluacion 1,centil e interpretacion general evaluacion 1, y el punto de minimo de comparacion para la mejoria en puntaje 2
        $querycom1 = $this->m_principalhogar->fm_totalcomunicacion1($cfolio);
        $totalcom1 = array('totalcm1'=>0,
                                    'centilcm1'=>0,
                                    'interpretacioncm1'=>'',
                                    'mejoracm1'=>0);
      foreach($querycom1 as $totalcomunicacion1){
          
          $totalcom1 = array('totalcm1'=>$totalcomunicacion1->total,
                                    'centilcm1'=>$totalcomunicacion1->centil,
                                    'interpretacioncm1'=>$totalcomunicacion1->interpretacion,
                                    'mejoracm1'=>$totalcomunicacion1->puntaje2);
          
      }

     // Seleccionar puntaje general evaluacion 2,centil e interpretacion general evaluacion 2
        $querycom2 = $this->m_principalhogar->fm_totalcomunicacion2($cfolio);
        $totalcom2 = array('totalcm2'=>0,
                                    'centilcm2'=>0,
                                    'interpretacioncm2'=>'');
      foreach ($querycom2 as $totalcomunicacion2){
          
          $totalcom2 = array('totalcm2'=>$totalcomunicacion2->total,
                                    'centilcm2'=>$totalcomunicacion2->centil,
                                    'interpretacioncm2'=>$totalcomunicacion2->interpretacion);
          
      }

// Comparar ambos resultados y validar si hay mejoras o no
        $mensajecomunicacion = '';
        if ($totalcom2['totalcm2'] <> '') {
            if ($totalcom2['totalcm2'] >= $totalcom1['mejoracm1']) {
                $mensajecomunicacion = 'Mejora';
            } else {
                $mensajecomunicacion = 'No hay mejora';
            }
        }
        
        
        
        // Seleccionar puntaje afectividad evaluacion 1,centil e interpretacion general evaluacion 1, y el punto de minimo de comparacion para la mejoria en puntaje 2
        $queryafec1 = $this->m_principalhogar->fm_totalafectividad1($cfolio);
        $totalafec1 = array('totalaf1'=>0,
                                    'centilaf1'=>0,
                                    'interpretacionaf1'=>'',
                                    'mejoraaf1'=>0);
      foreach($queryafec1 as $totalcafectividad1){
          
          $totalafec1 = array('totalaf1'=>$totalcafectividad1->total,
                                    'centilaf1'=>$totalcafectividad1->centil,
                                    'interpretacionaf1'=>$totalcafectividad1->interpretacion,
                                    'mejoraaf1'=>$totalcafectividad1->puntaje2);
          
      }

     // Seleccionar puntaje general evaluacion 2,centil e interpretacion general evaluacion 2
        $queryafec2 = $this->m_principalhogar->fm_totalafectividad2($cfolio);
        $totalafec2 = array('totalaf2'=>0,
                                    'centilaf2'=>0,
                                    'interpretacionaf2'=>'');
      foreach ($queryafec2 as $totalcafectividad2){
          
          $totalafec2 = array('totalaf2'=>$totalcafectividad2->total,
                                    'centilaf2'=>$totalcafectividad2->centil,
                                    'interpretacionaf2'=>$totalcafectividad2->interpretacion);
          
      }

// Comparar ambos resultados y validar si hay mejoras o no
        $mensajeafectividad = '';
        if ($totalafec2['totalaf2'] <> '') {
            if ($totalafec2['totalaf2'] >= $totalafec1['mejoraaf1']) {
                $mensajeafectividad = 'Mejora';
            } else {
                $mensajeafectividad = 'No hay mejora';
            }
        }
        
        
        
        // Seleccionar puntaje Interaccion evaluacion 1,centil e interpretacion general evaluacion 1, y el punto de minimo de comparacion para la mejoria en puntaje 2
        $queryinte1 = $this->m_principalhogar->fm_totalinteraccion1($cfolio);
        $totalinte1 = array('totalin1'=>0,
                                    'centilin1'=>0,
                                    'interpretacionin1'=>'',
                                    'mejorain1'=>0);
      foreach($queryinte1 as $totalinteraccion1){
          
          $totalinte1 = array('totalin1'=>$totalinteraccion1->total,
                                    'centilin1'=>$totalinteraccion1->centil,
                                    'interpretacionin1'=>$totalinteraccion1->interpretacion,
                                    'mejorain1'=>$totalinteraccion1->puntaje2);
          
      }

     // Seleccionar puntaje general evaluacion 2,centil e interpretacion general evaluacion 2
        $queryinte2 = $this->m_principalhogar->fm_totalinteraccion2($cfolio);
        $totalinte2 = array('totalin2'=>0,
                                    'centilin2'=>0,
                                    'interpretacionin2'=>'');
      foreach ($queryinte2 as $totalinteraccion2){
          
          $totalinte2 = array('totalin2'=>$totalinteraccion2->total,
                                    'centilin2'=>$totalinteraccion2->centil,
                                    'interpretacionin2'=>$totalinteraccion2->interpretacion);
          
      }

// Comparar ambos resultados y validar si hay mejoras o no
        $mensajeinteraccion = '';
        if ($totalinte2['totalin2'] <> '') {
            if ($totalinte2['totalin2'] >= $totalinte1['mejorain1']) {
                $mensajeinteraccion = 'Mejora';
            } else {
                $mensajeinteraccion = 'No hay mejora';
            }
        }
        
        
        
        
        
        echo json_encode(array('totalgeneral1'=>$totalgeneral1,'totalgeneral2'=>$totalgeneral2,'mensajegeneral'=>$mensajegeneral,
            'totalconv1'=>$totalconv1,'totalconv2'=>$totalconv2,'mensajeconvivencia'=>$mensajeconvivencia,
            'totalcom1'=>$totalcom1,'totalcom2'=>$totalcom2,'mensajecomunicacion'=>$mensajecomunicacion,
            'totalafec1'=>$totalafec1,'totalafec2'=>$totalafec2,'mensajeafectividad'=>$mensajeafectividad,
            'totalinte1'=>$totalinte1,'totalinte2'=>$totalinte2,'mensajeinteraccion'=>$mensajeinteraccion));
    }
    
    function fc_salir()
    {
        $this->session->sess_destroy();
    }
    
    
    } 
    
    

