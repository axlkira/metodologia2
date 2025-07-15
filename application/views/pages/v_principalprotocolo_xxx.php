<!DOCTYPE html>
<html lang="es">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <title><?php echo $titulo ?>  </title>
        <link rel="stylesheet" href="<?php echo BOOTSTRAP, 'css/bootstrap1.min.css'; ?>" >
        <meta charset="utf-8">
        <meta http-equiv="Content-Language" content="es"/>

    </head>
    <body onload="desatraceestacioncero(<?php echo($folio); ?>)">  

        <div class="container">
            
<!--head            -->
            <?php echo($head3); ?>
<!-- fin head            -->

                <div  class="row">
                    <div class="col-md-10">
                    <h6>Folio: <small><?php echo($folio); ?></small></h6>
                    <h6>Documento: <small><?php echo($tdatinte['tdoc']); ?></small></h6>
                    <h6>IDintegrante: <small><?php echo($tdatinte['tidintegrante']); ?></small></h6>
                    <h6>Nombre: <small><?php echo($tdatinte['tnombre']); ?></small></h6>
                    <p class="text-right"><small>Te encuentras en la vista  <strong>PRINCIPAL PROTOCOLO</strong></small></p><br>
                   <!--<?php echo ($midestacion['maximoidestacion']);?>-->
                    </div>
                </div><br>
<!--para imprimir el folio y llevarlo-->
                        <input type="text" class="form-control input-sm" id="wminimoidestacion" name="wminimoidestacion" style="display:none" value="<?php echo($minidestacion['minimoidestacion']); ?>">
                        <input type="text" class="form-control input-sm" id="wmaximoidestacion" nmame="wmaximoidestacion" style="display:none" value="<?php echo($midestacion['maximoidestacion']); ?>">
                        <input type="text" class="form-control input-sm" id="maximoidestaciondif81" name="maximoidestaciondif81" style="display:none" value="<?php echo($pasodif81['emaximoidestaciondif81']); ?>">
                        <input type="text" class="form-control input-sm" id="casillam" name="casillam" style="display:none" value="<?php echo($casillas['ecasillamatriz']); ?>">
                        <input type="text" class="form-control input-sm" id="casillamdf" name="casillamdf" style="display:" value="<?php echo($casillasdf['ecasilladf']); ?>">
                        <input type="text" class="form-control input-sm" id="wintermediahisto" name="wintermediahisto" style="display:" value="<?php echo($intermediahisto['efolio']); ?>">
                        <input type="text" class="form-control input-sm" id="wintermedia" name="wintermedia" style="display:none" value="<?php echo($casillas['intermedia']); ?>">
                        <input type="text" class="form-control input-sm" id="wtotalfolio" name="wtotalfolio" style="display:none" value="<?php echo($vectoreh['totalfolio']); ?>">
                        <input type="text" class="form-control input-sm" id="wtotalint" name="wtotalint" style="display:none" value="<?php echo($totalint); ?>">
                        <input type="text" class="form-control input-sm" id="estadoidestacion31" name="estadoidestacion31" style="display:none" value="<?php echo($estadoidestacion31['eestado']); ?>">
                        
                        <input type="text" class="form-control input-sm" id="folio" name="folio" style="display:none" value="<?php echo($folio); ?>">
                        <input type="text" class="form-control input-sm" id="idintegrante" name="idintegrante" style="display:none" value="<?php echo($tdatinte['tidintegrante']); ?>">
                        <input type="text" class="form-control input-sm" id="doccogestor" name="doccogestor" style="display:none" value="<?php echo($doccogestor); ?>">
<!--fin para imprimir el folio y llevarlo-->
<!--inicio radio una sola seleccion-->
    <div class="row">
    <div class="form-group col-md-10 col-md-offset-0 form-group-sm">   
        <div class="form-group">
            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                
<!--                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingCero">
                      <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseCero" aria-expanded="true" aria-controls="collapseCero">
                            <span class="badge">EH</span> Estación - Historia de Vida Familiar 
                        </a>
                      </h4>
                    </div>
                    <div id="collapseCero" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingCero">
                      <div class="panel-body">
                        <a id="estacion0" class="btn btn-warning btn-sm col-lg-offset-1"<?php if ($controleh['controlehestado']==1){echo 'disabled';}?>><span class="badge">Estación H</span></a><br><br>
                      </div>
                    </div>
                  </div>-->
                
                
                  <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingOne">
                      <h4 class="panel-title">
                          <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne" onclick="desatraceestacioncero1(<?php echo $folio ?>)">
                            <span class="badge">L1</span> Línea de Clasificación
                        </a>
                      </h4>
                    </div>
                    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                      <div class="panel-body">
<!--                        <a id="estacion0" class="btn btn-warning btn-sm col-lg-offset-1" <?php if ($midestacion['maximoidestacion']== '' || $vectoreh['totalfolio'] == 0 ){echo ('enabled');} else {if($minidestacion['minimoidestacion'] !== '10'){echo ('enabled');}else{echo ('disabled');}}?>><span class="badge">Estación H</span></a><br><br> 
                        <a id="estacion1" class="btn btn-primary btn-sm col-lg-offset-1" <?php if ($midestacion['maximoidestacion']=='10'&& $casillas['intermedia'] == ''){if($minidestacion['minimoidestacion'] == '10'){echo ('enabled');}else{echo ('disabled');}} else {echo ('disabled');}?>><span class="badge">Estación 1</span></a><br><br>
                        <a id="estacion2" class="btn btn-success btn-sm col-lg-offset-1" <?php if($midestacion['maximoidestacion']=='11'&& $casillas['intermedia'] == '') {if($minidestacion['minimoidestacion'] == '10'){echo ('enabled');}else{echo ('disabled');}} else {echo ('disabled');}?>><span class="badge">Estación 2</span></a>-->

                        <a id="estacion0" class="btn btn-warning btn-sm col-lg-offset-1" <?php if ($pasodif81['emaximoidestaciondif81'] == '' || $vectoreh['totalfolio'] == 0 ){echo ('enabled');} else {if($minidestacion['minimoidestacion'] !== '10'){echo ('enabled');}else{echo ('disabled');}}?>><span class="badge">Estación H</span></a><br><br> 
<!--                                                                                               if(($valor->idestacion == '' || $valor->idestacion == '10')) {   -->
                        <a id="estacion1" class="btn btn-primary btn-sm col-lg-offset-1" <?php if ($pasodif81['emaximoidestaciondif81'] =='10'){if($minidestacion['minimoidestacion'] == '10'){echo ('enabled');}else{echo ('disabled');}} else {echo ('disabled');}?>><span class="badge">Estación 1</span></a><br><br>
<!--                                                                                               if($valor->idestacion == '11'){    -->
                        <a id="estacion2" class="btn btn-success btn-sm col-lg-offset-1" <?php if($pasodif81['emaximoidestaciondif81'] =='11') {if($minidestacion['minimoidestacion'] == '10'){echo ('enabled');}else{echo ('disabled');}} else {echo ('disabled');}?>><span class="badge">Estación 2</span></a>
  
                          
                      </div>
                    </div>
                  </div>
                
                
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingtwo">
                      <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapsetwo" aria-expanded="true" aria-controls="collapsetwo">
                            <span class="badge">L2</span> Línea Plan de vida Familiar
                        </a>
                      </h4>
                    </div>
                    <div id="collapsetwo" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingtwo">
                        <div class="panel-body" id="estacion2div">
                            
<!--                                                                                                if($valor->idestacion == '12'){-->
                        <a id="estacion21" class="btn btn-primary btn-sm col-lg-offset-1" <?php if ($pasodif81['emaximoidestaciondif81'] =='12'){if($minidestacion['minimoidestacion'] == '10'){echo ('enabled');}else{echo ('disabled');}} else{echo ('disabled');}?>><span class="badge">Estación 1</span></a><br><br>
<!--                                                                                                if($valor->idestacion == '21'){-->
                        <a id="estacion22" class="btn btn-success btn-sm col-lg-offset-1" <?php if($pasodif81['emaximoidestaciondif81'] =='21') {if($minidestacion['minimoidestacion'] == '10'){echo ('enabled');}else{echo ('disabled');}} else {echo ('disabled');}?>><span class="badge">Estación 2</span></a><br><br>
<!--                                                                                                if($valor->idestacion == '22' && $valor->casilla !== '9'){-->
                        <a id="estacion23" class="btn btn-info btn-sm col-lg-offset-1" <?php if($pasodif81['emaximoidestaciondif81'] =='22' && $casillas['ecasillamatriz'] <> '9') {if($minidestacion['minimoidestacion'] == '10'){echo ('enabled');}else{echo ('disabled');}} else {echo ('disabled');}?>><span class="badge">Estación 3</span></a><br><br>
<!--                                                                                                if(($valor->idestacion == '23' && $valor->intermedia !== '1')||                     ($valor->idestacion == '23' && $valor->casilladf !== '9' && $valor->intermedia == '1' && $valor->idestacion81 == '81')){-->
                        <a id="estacion24" class="btn btn-warning btn-sm col-lg-offset-1" <?php if($pasodif81['emaximoidestaciondif81'] =='23' && $casillas['intermedia'] <> '1' && $casillasdf['ecasilladf'] <> '9' && $casillas['ecasillamatriz'] <> '9' || $pasodif81['emaximoidestaciondif81'] =='23' && $casillasdf['ecasilladf'] <> '9' && $casillasdf['ecasilladf'] <> '9' && $casillas['intermedia'] == '1' && $midestacion['maximoidestacion'] == '81') {if($minidestacion['minimoidestacion'] == '10'){echo ('enabled');}else{echo ('disabled');}} else {echo ('disabled');}?>><span class="badge">Estación 4</span></a><br><br>
<!--                                                                                                if($valor->idestacion == '24'){-->
                        <a id="estacion25" class="btn btn-primary btn-sm col-lg-offset-1" <?php if($pasodif81['emaximoidestaciondif81'] =='24' && $casillasdf['ecasilladf'] <> '9' && $casillas['ecasillamatriz'] <> '9') {if($minidestacion['minimoidestacion'] == '10'){echo ('enabled');}else{echo ('disabled');}} else {echo ('disabled');}?>><span class="badge">Estación 5</span></a><br><br>
<!--                                                                                                if($valor->idestacion == '25'){-->
                        <a id="estacion26" class="btn btn-success btn-sm col-lg-offset-1" <?php if($pasodif81['emaximoidestaciondif81'] =='25' && $casillasdf['ecasilladf'] <> '9' && $casillas['ecasillamatriz'] <> '9') {if($minidestacion['minimoidestacion'] == '10'){echo ('enabled');}else{echo ('disabled');}} else {echo ('disabled');}?>><span class="badge">Estación 6</span></a>
                        
                        
                      </div>
                    </div>
                  </div>
                
<!--                  <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingTre">
                      <h4 class="panel-title">
                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTre" aria-expanded="false" aria-controls="collapseTre">
                              <span class="badge">L2</span> Línea Plan de vida Familiar
                        </a>
                      </h4>
                    </div>
                      <div id="collapsetre" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingtre">
                      <div class="panel-body">
                        <a id="estacion21" class="btn btn-primary btn-sm col-lg-offset-1" <span class="badge">Estación 1</span></a><br><br>
                        <a id="estacion22" class="btn btn-success btn-sm col-lg-offset-1" <?php if($midestacion['maximoidestacion']=='11') {echo ('enabled');} else {echo ('disabled');}?>><span class="badge">Estación 2</span></a>
                        <button class="btn btn-default btn-sm col-lg-offset-1" type="button" id="est" name="est"  class="badge"> Estacion 2 </button>
                      </div>
                    </div>
                      
                      
                      
                      
                    <div id="collapseTwo" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingTwo">
                      <div class="panel-body">
                        En construcción...
                      </div>
                    </div>
                  </div>-->
                  <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingThree">
                      <h4 class="panel-title">
                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                         <span class="badge">L3</span> Línea de Promoción
                        </a>
                      </h4>
                    </div>
                    <div id="collapseThree" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingThree">
                      <div class="panel-body">
<!--                                                                                                    if(($valor->idestacion == '22' && $valor->casilla == '9') || ($valor->casilladf == '9')){ -->
                            <a id="estacion31" class="btn btn-warning btn-sm col-lg-offset-1" <?php if (($pasodif81['emaximoidestaciondif81'] =='22' && $casillas['ecasillamatriz'] == '9') && ($pasodif81['emaximoidestaciondif81'] !=='31' && $estadoidestacion31['eestado'] !== '2') || (($casillasdf['ecasilladf'] =='9')&& ($pasodif81['emaximoidestaciondif81'] !=='31' && $estadoidestacion31['eestado'] !== '2'))) {if($minidestacion['minimoidestacion'] == '10'){echo ('enabled');}else{echo ('disabled');}} else {echo ('disabled');}?>><span class="badge">Sesion de cierre</span></a><br><br>                         
<!--                        <a id="estacion31" class="btn btn-warning btn-sm col-lg-offset-1" <?php if (($midestacion['maximoidestacion']=='22' && $casillas['ecasillamatriz'] == '9' && $casillas['intermedia'] == '')|| ($midestacion['maximoidestacion']=='23' && $casillas['ecasillamatriz'] == '9'&& $casillas['intermedia'] == '')) {if($minidestacion['minimoidestacion'] == '10'){echo ('enabled');}else{echo ('disabled');}} else {echo ('disabled');}?>><span class="badge">Sesion de cierre</span></a><br><br>-->
                                                
                      </div>
                    </div>
                  </div>

                   <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingdiez">
                      <h4 class="panel-title">
                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapsediez" aria-expanded="false" aria-controls="collapsediez">
                         <span class="badge">Intermedia</span> Visita Intermedia XXX
                        </a>
                      </h4>
                    </div>
                    <div id="collapsediez" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingdiez">
                      <div class="panel-body">
<!--                                                                                             if(($valor->idestacion == '23' && $valor->casilladf == '' && $valor->intermedia == '1' && $valor->idestacion81 !== '81')||
                                                                                             ($valor->idestacion == '26' && $valor->casilladf == '' && $valor->intermedia == '1' && $valor->idestacion81 !== '81')||
                                                                                             ($valor->idestacion == '26' && $valor->casilladf !== '' && $valor->intermedia == '1' && $valor->idestacion81 == '81' && $valor->foliointerhistor == '')){                           -->
                            <a id="estacion4" class="btn btn-success btn-sm col-lg-offset-1" <?php if (($casillas['intermedia'] == '1' && $pasodif81['emaximoidestaciondif81'] == '23' && $midestacion['maximoidestacion'] <> '81' && $casillas['ecasillamatriz'] !== '9' && $casillasdf['ecasilladf'] == '' )||
                                                                                                       ($casillas['intermedia'] == '1' && $pasodif81['emaximoidestaciondif81'] == '26' && $midestacion['maximoidestacion'] <> '81' && $casillas['ecasillamatriz'] !== '9' && $casillasdf['ecasilladf'] == '' )||
                                                                                                       ($casillas['intermedia'] == '1' && $pasodif81['emaximoidestaciondif81'] == '26' && $midestacion['maximoidestacion'] == '81' && $casillas['ecasillamatriz'] !== '9' && $casillasdf['ecasilladf'] <> '' && $intermediahisto['efolio'] == '')) {echo ('enabled');} else {echo ('disabled');}?>><span class="badge">Intermedia</span></a><br><br>
<!--                        <a id="estacion4" class="btn btn-success btn-sm col-lg-offset-1" <?php if ($totalint=='0' || $midestacion['maximoidestacion'] == '81') {echo ('disabled');} else {echo ('enabled');}?>><span class="badge">Intermedia</span></a><br><br>-->
                                                                           
                      </div>
                    </div>
                  </div>
            </div>
        </div>
    </div>
    </div>


<!--Inicio Modal-->
                    <div class="modal fade bs-example-modal-sm" id="modalsinco" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" data-backdrop="static">
                      <div class="modal-dialog modal-sm">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title" id="myModalLabel"><img src="<?php echo IMAGEN, 'cargando.gif'; ?>" alt="Brand"> Cerrando la Visita Intermedia </h4>
                            </div>
                            <div class="modal-body">

                            Por favor espere un momento.
                            </div>
                        </div>
                      </div>
                    </div>
<!--Fin Modal-->



<!-- modal inicio cuando ya ha echo dos intermedias-->
<div class="modal fade" id="Modal2intermedias" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" data-keyboard="false" data-backdrop="static">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body"><h3>El folio: <?php echo($folio); ?> ya tiene 2 visitas Intermedias, por lo cual no puedes realizar mas...</h3>
      <div class="modal-footer">
      <center><button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button></center>
      </div>  
    </div>
  </div>
</div>
</div>
<!-- modal fin cuando ya ha echo dos intermedias-->
 
<!--inicio botonera guardar y actualizar NO SE TOCA-->

                          <?php echo('<button class="btn btn-primary" type="button" id="volver" name="volver"><< Volver </button>');?>

<!--Fin botonera guardar y actualizar NO TOCAR-->

                </form>
<!--INICIO Este es el footer NO TOCAR-->
            <?php echo($foot); ?>
<!--fin del footer NO TOCAR-->
        </div>
<!--INICIO ENLACES - NO TOCAR-->
        <script src="<?php echo BOOTSTRAP, 'js/jquery-1.11.0.js' ?>"></script>
        <script src="<?php echo BOOTSTRAP, 'js/bootstrap.min.js' ?>"></script>
        <script src="<?php echo BOOTSTRAP, 'js/jquery.bootstrap.wizard.js' ?>"></script>
        <script src="<?php echo BOOTSTRAP, 'js/prettify.js' ?>"></script>
        <script src="<?php echo JBOX, 'Source/jBox.min.js' ?>"></script>
        <link href="<?php echo JBOX, 'Source/jBox.css' ?>" rel="stylesheet">
<!--FIN ENLACES - NO TOCAR-->
    </body>


<script> 
$('.collapse').collapse()

    //NO TOCAR funcion que generar el mensaje de guardado    
    function okguardar()
    {
    new jBox('Notice', {
        content: 'Tu informacion se Guardado!!!',
        color: 'red',
        animation: {open: 'tada', close: 'flip'},
        position: {x: 'right', y: 'center'},
        autoClose: 2000
    });
    }
    //fin funcion que generar el mensaje de guardado

    //NO TOCAR funcion que generar el mensaje de actualizar    
    function okactualizar()
    {
    new jBox('Notice', {
        content: 'Tu informacion se Actualizo!!!',
        color: 'yellow',
        animation: {open: 'tada', close: 'flip'},
        position: {x: 'right', y: 'center'},
        autoClose: 2000
    });
    }
    
    
    function insertarfoliopp(estacion)
    {
    //alert('holaaa');
                          $.ajax({
                          url: "fc_insertarfolioperfil",
                          type: "GET",
                          data: {vfolio: $('#folio').val(),vidpaso:estacion,vestado :'1'},
                          dataType: "html",
                          success: function(obj) {
                          //me llama el mensajito de actualizar
                          //$('#datos').html(obj);
                          //location.href = "../capacidades/c_capap1/fc_capap1?folio="+ $('#folio').val() +"&idintegrante=0";               
                        }
                       });
    
    
    
    }
    
    function insertarfoliol2e1()
    {
    //alert('holaaa');
                          $.ajax({
                          url: "fc_insertarfoliol2e1",
                          type: "GET",
                          data: {vfolio: $('#folio').val()},
                          dataType: "html",
                          success: function(obj) {
                          //me llama el mensajito de actualizar
                          //$('#datos').html(obj);
                          //location.href = "../capacidades/c_capap1/fc_capap1?folio="+ $('#folio').val() +"&idintegrante=0";               
                        }
                       });
    
    }
    
    function insertarfolioestrategias()
    {
    //alert('holaaa');
                          $.ajax({
                          url: "fc_insertarfolioestrategias",
                          type: "GET",
                          data: {vfolio: $('#folio').val()},
                          dataType: "html",
                          success: function(obj) {
                          //me llama el mensajito de actualizar
                          //$('#datos').html(obj);
                          //location.href = "../capacidades/c_capap1/fc_capap1?folio="+ $('#folio').val() +"&idintegrante=0";               
                        }
                       });
    }
    
    function insertarfolioactualizacion(estacion)
    {
                          $.ajax({
                          url: "fc_insertarfolioactualizacion",
                          type: "GET",
                          data: {vfolio: $('#folio').val(),vidpaso:estacion,vestado :'1'},
                          dataType: "html",
                          success: function(obj) {
                        }
                       });
    }
    
    function insertarfolioingresos(estacion)
    {
                          $.ajax({
                          url: "fc_insertarfolioingresos",
                          type: "GET",
                          data: {vfolio: $('#folio').val(),vidpaso:estacion,vestado :'1'},
                          dataType: "html",
                          success: function(obj) {
                          //me llama el mensajito de actualizar
                          //$('#datos').html(obj);
                          //location.href = "../capacidades/c_capap1/fc_capap1?folio="+ $('#folio').val() +"&idintegrante=0";               
                        }
                       });
    
    
    
    }
    
    function insertarfolioingresosna(estacion)
    {
    //alert('holaaa');
                          $.ajax({
                          url: "fc_insertarfolioingresosna",
                          type: "GET",
                          data: {vfolio: $('#folio').val(),vidpaso:estacion,vestado :'1'},
                          dataType: "html",
                          success: function(obj) {
                          //me llama el mensajito de actualizar
                          //$('#datos').html(obj);
                          //location.href = "../capacidades/c_capap1/fc_capap1?folio="+ $('#folio').val() +"&idintegrante=0";               
                        }
                       });
    
    
    
    }
    
    //fin funcion que generar el mensaje de guardado
    //
    //
    function desatraceestacioncero(folio){
        
         $.ajax({
                          url: "fc_desatraceestacioncero",
                          type: "GET",
                          data: {vfolio: folio},
                          dataType: "html",
                          success: function(obj) {
                              
                              if(obj == '1'){
                                  
                                  mensajeestacioncero('Estacion H incompleta!!!');
                                  $('#estacion0').prop('disabled',false);
                                //  $('#estacion21').prop('disabled',true);
             
                                  
                              };
                              
                              if(obj == '2'){
                                  
                                  mensajeestacioncero('Por favor realizar la EERFAM y cerrar estacion H');
                                  $('#estacion0').prop('disabled',false);
                              };
                              
                              if(obj == '3'){
                                  
                               //   location.reload(true);
                              };
                             
                          //me llama el mensajito de actualizar
                          //$('#datos').html(obj);
                          //location.href = "../capacidades/c_capap1/fc_capap1?folio="+ $('#folio').val() +"&idintegrante=0";               
                        }
                       });
        
    }
    
   
    
    function desatraceestacioncero1(folio){
        
         $.ajax({
                          url: "fc_desatraceestacioncero",
                          type: "GET",
                          data: {vfolio: folio},
                          dataType: "html",
                          success: function(obj) {
                              
                              if(obj == '1'){
                                  
                                  
                                  mensajeestacioncero('Por favor completar estacion H');
                                    
                                 document.getElementById('estacion21').removeAttribute("enabled"); 
                                 document.getElementById('estacion21').disabled = true;
                                  //$('#estacion21').prop('disabled',true);
                                  
                              };
                              
                              if(obj == '2'){
                                  
                                  mensajeestacioncero('Por favor realizar la EERFAM y cerrar estacion H');
                                  $('#estacion0').prop('disabled',false);
                              };
                              
                              if(obj == '3'){
                                  
                               //   location.reload(true);
                              };
                             
                          //me llama el mensajito de actualizar
                          //$('#datos').html(obj);
                          //location.href = "../capacidades/c_capap1/fc_capap1?folio="+ $('#folio').val() +"&idintegrante=0";               
                        }
                       });
        
    }
    
    function mensajeestacioncero(mensaje)
    {
    new jBox('Notice', {
        content: mensaje,
        color: 'yellow',
        animation: {open: 'tada', close: 'flip'},
        position: {x: 'right', y: 'center'},
        autoClose: 2000
    });
    }
///////////////////////////////////////FIN Funciones que llaman a los mensajitos para guardar y actualizar////////////////////////////////////////////////////////////////////////    

///////////////////////////////////////Funciones que llaman al controlador para guardar y actualizar////////////////////////////////////////////////////////////////////////    
    $(document).ready(function()
    {
                //NO TOCAR - ir a Protocolo E0               
                $("#estacion0").click(function ()
                {
                   // alert('juapis');
                location.href = "../historiahogar/c_historiahogar/fc_historiahogar?folio="+ $('#folio').val() +"&idintegrante="+$('#idintegrante').val()+"&doccogestor="+$('#doccogestor').val();
                });
                //fin ir a ProtocoloL1e2
                                
                //NO TOCAR - ir a ProtocoloL1e1                
                $("#estacion1").click(function ()
                {
                    insertarfoliopp(11); 
                   // alert('juapis');
                location.href = "../c_protocolol1e1/fc_protocolol1e1?folio="+ $('#folio').val() +"&idintegrante="+$('#idintegrante').val()+"&doccogestor="+$('#doccogestor').val();
                });
                //fin ir a ProtocoloL1e2
                
                //NO TOCAR - ir a ProtocoloL1e2                
                $("#estacion2").click(function ()
                {
                insertarfoliopp(12);  
                   // alert('juapis');
                location.href = "../c_protocolol1e2/fc_protocolol1e2?folio="+ $('#folio').val() +"&idintegrante=0"+"&doccogestor="+ $('#doccogestor').val();
                });
                //fin ir a ProtocoloL1e2
                
                
                 //NO TOCAR - ir a ProtocoloL1e1                
                $("#estacion21").click(function ()
                {
                    
                    
                    
                    
                    
                insertarfoliopp(21); 
                insertarfoliol2e1();
        // alert('juapis');
                location.href = "../c_protocolol2e1/fc_protocolol2e1?folio="+ $('#folio').val() +"&idintegrante=0"+"&doccogestor="+$('#doccogestor').val();
                });
                //fin ir a ProtocoloL1e2
                
                
                $("#estacion22").click(function ()
                {
                insertarfolioactualizacion(22);                
                location.href = "../c_protocolol2e2/fc_protocolol2e2?folio="+ $('#folio').val() +"&idintegrante=0"+"&doccogestor="+$('#doccogestor').val();  
                //location.href = "../linea2estacion2/c_crearsueno/fc_crearsueno?folio="+ $('#folio').val() +"&idintegrante=0"+"&doccogestor="+$('#doccogestor').val();;
                });
                
                 $("#estacion23").click(function ()
                {
                insertarfolioactualizacion(23);
                insertarfolioingresosna(23);
                //insertarfolioestrategias();
                location.href = "../c_protocolol2e3/fc_protocolol2e3?folio="+ $('#folio').val() +"&idintegrante=0"+"&doccogestor="+$('#doccogestor').val();  
                //location.href = "../linea2estacion2/c_crearsueno/fc_crearsueno?folio="+ $('#folio').val() +"&idintegrante=0"+"&doccogestor="+$('#doccogestor').val();;
                });
                
                $("#estacion24").click(function ()
                {
                insertarfolioactualizacion(24);
                insertarfolioingresosna(24);
                //insertarfolioestrategias();
                location.href = "../c_protocolol2e4/fc_protocolol2e4?folio="+ $('#folio').val() +"&idintegrante=0"+"&doccogestor="+$('#doccogestor').val();   
                //location.href = "../linea2estacion2/c_crearsueno/fc_crearsueno?folio="+ $('#folio').val() +"&idintegrante=0"+"&doccogestor="+$('#doccogestor').val();;
                });
                
                $("#estacion25").click(function ()
                {
                insertarfolioactualizacion(25);
                insertarfolioingresosna(25);
                //insertarfolioestrategias();
                location.href = "../c_protocolol2e5/fc_protocolol2e5?folio="+ $('#folio').val() +"&idintegrante=0"+"&doccogestor="+$('#doccogestor').val();   
                //location.href = "../linea2estacion2/c_crearsueno/fc_crearsueno?folio="+ $('#folio').val() +"&idintegrante=0"+"&doccogestor="+$('#doccogestor').val();;
                });
                
                $("#estacion26").click(function ()
                {
                insertarfolioactualizacion(26);
                insertarfolioingresosna(26);
                //insertarfolioestrategias();
                location.href = "../c_protocolol2e6/fc_protocolol2e6?folio="+ $('#folio').val() +"&idintegrante=0"+"&doccogestor="+$('#doccogestor').val();  
                //location.href = "../linea2estacion2/c_crearsueno/fc_crearsueno?folio="+ $('#folio').val() +"&idintegrante=0"+"&doccogestor="+$('#doccogestor').val();;
                });
                
                
                $("#estacion31").click(function ()
                {
                insertarfolioactualizacion(31);
                insertarfolioestrategias();
                location.href = "../c_protocolol3sc/fc_protocolol3sc?folio="+ $('#folio').val() +"&idintegrante=0"+"&doccogestor="+$('#doccogestor').val();  
                //location.href = "../linea2estacion2/c_crearsueno/fc_crearsueno?folio="+ $('#folio').val() +"&idintegrante=0"+"&doccogestor="+$('#doccogestor').val();;
                });
				
		$("#estacion4").click(function ()
                {
                 mensajedesinco();   
                 selectinsertintermedia();
               //  location.href = "../c_protocolointermedia/fc_protocolointermedia?folio="+ $('#folio').val() +"&idintegrante=0"+"&doccogestor="+$('#doccogestor').val();
                });
                
                //NO TOCAR - Volver a principal hogar                
                $("#volver").click(function ()
                {
                   // alert('juapis');
                location.href = "../c_principalhogar/fc_principalhogar?doccogestor="+ $('#doccogestor').val();
                });
                //fin  Volver a principal hogar
                
            $("#est").click(function ()
                {
              alert('En construccion');
                });                            
    });
    
    $("#progressBar").hide();
/////////////////////////////////////// FIN Funciones que llaman al controlador para guardar y actualizar////////////////////////////////////////////////////////////////////////        
function mensajedesinco()
{
    $('#modalsinco').modal('show');
}

function terminasinco()
{
    $('#modalsinco').modal('hide');
}
function selectinsertintermedia()
{
        if($('#casillamdf').val() !== '' && $('#wintermediahisto').val() == '')
         {  
           alert($('#casillamdf').val());
           alert($('#wintermediahisto').val());
        $.ajax({
          url: "fc_selectinsertintermedia",
          type: "GET",
          data: {vfolio: $('#folio').val()},
          dataType: "html",
          success: function(obj) {
          insertarfolioactualizacion(81);    
          terminasinco();
                             }
       });
        location.href = "../c_protocolointermedia/fc_protocolointermedia?folio="+ $('#folio').val() +"&idintegrante=0"+"&doccogestor="+$('#doccogestor').val();
        }
        
         else if (($('#casillamdf').val() !== '' && $('#wintermediahisto').val() !== ''))
         {               
         $('#Modal2intermedias').modal();                 
                         
         }
         else
               {
                insertarfolioactualizacion(81);
                location.href = "../c_protocolointermedia/fc_protocolointermedia?folio="+ $('#folio').val() +"&idintegrante=0"+"&doccogestor="+$('#doccogestor').val();

               }



}
</script>
</html>