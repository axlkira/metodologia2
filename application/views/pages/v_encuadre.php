<!DOCTYPE html>
<html lang="es">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <title><?php echo $titulo ?>  </title>
        <link rel="stylesheet" href="<?php echo BOOTSTRAP, 'css/bootstrap1.min.css'; ?>" >
        <meta charset="utf-8">
        <meta http-equiv="Content-Language" content="es"/>

    </head>
    <body>  
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
                    <h3 class="text-right col-md-12"><small>Te encuentras en la <strong>Visita de encuadre</strong></small></h3>
                    <!--<?php echo ($midpaso['maximoidpaso']);?>-->
                    
                    </div>
                </div>
<!--para imprimir el folio y llevarlo-->
                        <input type="text" class="form-control input-sm" id="folio" name="folio" style="display:none" placeholder="Text input" value="<?php echo($folio); ?>">
                        <input type="text" class="form-control input-sm" id="idintegrante" name="idintegrante" style="display: none" placeholder="Text input" value="<?php echo($tdatinte['tidintegrante']); ?>">
                        <input type="text" class="form-control input-sm" id="doccogestor" name="doccogestor" style="display: none" placeholder="Text input" value="<?php echo($doccogestor); ?>">
                        <input type="text" class="form-control input-sm" style="display: none" value="<?php echo($tdatidvisita['tfolio']); ?>">
<!--fin para imprimir el folio y llevarlo-->

                <form class="form-group" class="form-group col-md-offset-1" name="formulario" id="formulario">

                    <div class="col-md-10">                    
                    <div class="panel panel-default">
                    <div class="panel-heading">
                    <h1 class="panel-title"><span class="badge">Encuadre</span></h1>
                    </div>
                    <div class="panel-body  text-justify">
                    Visita de encuadre para el proceso de acompañamiento familiar con los hogares. 
                    </div>
                    </div>
                    </div>




















<!-- ////////////////////////////////////////////////// nuevo ////////////////////////////////////////////-->
 <!--inicio boton para definir un paso-->
 <div class="row">
                    <div class="form-group">
                        <div class="col-sm-offset-1 col-sm-10">
                            <button  class="btn btn-warning col-md-6" type="button" data-toggle="modal" data-target="#modalAddTracking0" id="modpaso0" <?php if ($tdatidvisita['tfolio'] <> ''){echo 'disabled';}else {echo 'enabled';}?>>
                               <p class="text-left"><span class="badge">Paso 0</span> ------ Realización de la visita ------</p>
                            </button>
                           </div>
                    </div>
                    </div>
                    <!--fin boton para definir un paso-->
                    <!--inicio modal paso anterior-->
                            <div class="modal fade" id="modalAddTracking0" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"  data-backdrop="static">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                    <div class="modal-body">
                                       <div class="panel-body  text-justify">

                                       <!--inicio radio una sola seleccion -->
      <div class="row">
      <div id="p0div" name="p0div" class="form-group col-md-12 form-group-sm has-error" ><label class="control-label">¿Esta visita fue realizada en el lugar de residencia del hogar?</label>
      <div class="radio"><label><input type="radio" name="pregunta0" id="pregunta0" onclick="validarcualmotivo('Si','valorp0');" value="Si">Si</label></div>
      <div class="radio"><label><input type="radio" name="pregunta0" id="pregunta00" onclick="validarcualmotivo('No','valorp0');" value="No">No</label></div>
      <input type="text" class="form-control" id="valorp0" name="valorp0" style="display:none" placeholder="Text input" value="">
      </div>
      </div> 
      <!--fin radio una sola seleccion -->

                                       <div class="row" id="divcualmotivo" name="divcualmotivo" style="display:none">
                                        <div class="col-sm-12" id="cualmotivodiv" name="cualmotivodiv"><label class="control-label">¿Cuál fue el medio en la que se realizo la visita?</label>
                                        
                                        
                                        
                            <select class="form-control input-sm" id="vcualmotivo" name="vcualmotivo" onchange="validarpaso0('vcualmotivo');">
                            <option value="">Seleccione una opción</option>    
                            <option value="llamada telefonica">llamada telefonica</option>
                            <option value="Video llamada">Video llamada</option>
                            </select>
                                        
                                        
                                        
                                        
                             <!--           <textarea class="form-control" name="vcualmotivo" id="vcualmotivo" rows="3" onkeyup="validarpaso0('vcualmotivo');"></textarea>-->
                                        </div>
                                        </div><br>


                                        
                                        
                                        <div class="row">
                                        <div><center>
                                        <button type="button"  name=guardapaso0 id=guardapaso0 disabled="disabled" class="btn btn-success" >Guardar</button>
                                        <button type="button"  onclick="paso0();" disabled="disabled" name="cerrar0" id="cerrar0" class="btn btn-danger" data-dismiss="modal">Continuar</button>
                                        <button type="button" class="btn btn-gray" data-dismiss="modal" name="Close0" id="Close0" aria-label="Close">Cerrar</button></center>
                                        </div>    
                                        </div>
                                    
                                      </div>            
                                     </div>
                                     
                                    </div>
                                </div>
                            </div><br>                    
                    <!--fin modal-->
<!-- /////////////////////////////////////////////////////////////////// fin nuevo ////////////////////////////////////// -->




















                    <!--inicio boton para definir un paso-->
                    <div class="row">
                    <div class="form-group">
                        <div class="col-sm-offset-1 col-sm-10">
                            <button class="btn btn-warning col-md-6" type="button" data-toggle="modal" data-target="#modalAddTracking" id="modpaso1" <?php if ($midpaso1['idpaso1']=='' && $tdatidvisita['tfolio'] <> ''){echo 'enabled';}else {echo 'disabled';}?>>
                                <p class="text-left"><span class="badge">Paso 1</span> ------ Saludo y encuadre ------</p> 
                            </button>
                        </div>
                    </div>
                    </div>
                    <!--fin boton para definir un paso-->
                    <!--inicio modal paso anterior-->
                            <div class="modal fade" id="modalAddTracking" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h3>Saludo y encuadre</h3>    
                                        </div>
                                        <div class="modal-body">
                                            
                                            <h5 class="modal- text-justify" id="myModalLabel">El cogestor saluda de manera cordial y cálida los integrantes del hogar, hace encuadre del objetivo de la visita en el actual contexto, buscando generar un apoyo y acompañamiento al hogar.</h5>    
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button"  onclick="paso1('101');" name=cerrar1 id=cerrar1 class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                                        </div>
                                    </div>
                                </div>
                            </div><br>                    
                    <!--fin modal-->
                   
                    
                    
                    <div class="row">
                    <div class="form-group">
                        <div class="col-sm-offset-1 col-sm-10">
                            <button  class="btn btn-warning col-md-6" type="button" data-toggle="modal" data-target="#modalAddTracking2" id="modpaso2" <?php if ($midpaso1['idpaso1']== '101'){echo 'enabled';}else {echo 'disabled';}?>>
                                <p class="text-left"><span class="badge">Paso 2</span> ------ Actualización de datos ------</p>
                            </button>
                        </div>
                    </div>
                    </div>
                    <!--inicio modal-->
                            <div class="modal fade" id="modalAddTracking2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h3>                                           
                                            Actualización de datos
                                            </h3>    
                                        </div>
                                        <div class="modal-body">
                                            <!--<input type="text" class="form-control input-sm" id="valoridpaso" name="valoridpaso"  style="display:none" placeholder="Text input" value="">-->
                                        <h5 class="modal- text-justify" id="myModalLabel">El cogestor verifica si en el hogar requiere actualizar alguno de sus datos generales, como dirección, número telefónico, barrio y comuna, o algunos de sus integrantes en cuanto estado, tipo de documento y número de identificación.<br><br>
                                        </h5>    
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button"  onclick="paso2('102');" name=cerrar2 id=cerrar2 class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                                        </div>
                                    </div>
                                </div>
                            </div><br>                    
                    <!--fin modal-->
         
                    
                    <div class="row">
                    <div class="form-group">
                        <div class="col-sm-offset-1 col-sm-10">
                            <button  class="btn btn-warning col-md-6" type="button" data-toggle="modal" data-target="#modalAddTracking3"  id="modpaso3" <?php if ($midpaso1['idpaso1']== '102'){echo 'enabled';}else {echo 'disabled';}?>>
                                <p class="text-left"><span class="badge">Paso 3</span> ----Formulario encuadre ---</p>
                            </button>
                        </div>
                    </div>
                    </div>
                    <!--inicio modal-->
                            <div class="modal fade" id="modalAddTracking3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h3>                                          
                                            Formulario de encuadre
                                            </h3>    
                                        </div>
                                        <div class="modal-body">
                                            <!--<input type="text" class="form-control input-sm" id="valoridpaso" name="valoridpaso"  style="display:none" placeholder="Text input" value="">-->
                                        <h5 class="modal- text-justify" id="myModalLabel">En este paso  se debe diligenciar el formulario <br><br>
                                        </h5>    
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button"  onclick="paso3('103');" name=cerrar3 id=cerrar3 class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                                        </div>
                                    </div>
                                </div>
                            </div><br>                    
                    <!--fin modal-->
                                        
                    <div class="row">
                    <div class="form-group">
                        <div class="col-sm-offset-1 col-sm-10">
                            <button  class="btn btn-warning col-md-6" type="button" data-toggle="modal" data-target="#modalAddTracking4" id="modpaso4" <?php if ($midpaso1['idpaso1']== '103'){echo 'enabled';}else {echo 'disabled';}?>>
                                <p class="text-left"><span class="badge">Paso 4</span> ------ Acercamiento de oportunidades ------</p>
                            </button>
                        </div>
                    </div>
                    </div>
                    <!--inicio modal-->
                            <div class="modal fade" id="modalAddTracking4" tabindex="-1" role="dialog"  aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h3> Acercamiento de oportunidades</h3>    
                                        </div>
                                        <div class="modal-body">
                                            <!--<input type="text" class="form-control input-sm" id="valoridpaso" name="valoridpaso"  style="display:none" placeholder="Text input" value="">-->
                                        <h5 class="modal- text-justify" id="myModalLabel">En este paso  el cogestor de familia debe remitirse al diagnóstico actual del hogar con el fin de validar aquellos que estén por cumplir o gestionar, con el fin de  revisar si hay cambios relevantes que deban ser registrados, o en caso contrario para acercar oportunidades que  apunten a las necesidades del hogar y a la movilización de los logros pendientes por alcanzar. Este paso es el de mayor detalle en la  visita, ya que la validación se hace integrante por integrante, incluyendo también los logros a nivel de  hogar, lo que implica la retroalimentación sobre el estado del proceso, el diagnóstico de logros y la corresponsabilidad en el proceso de acompañamiento.</h5>    
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button"  onclick="paso4('104');" name=cerrar4 id=cerrar4 class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                                        </div>
                                    </div>
                                </div>
                            </div><br>                    
                    <!--fin modal-->
                    
                    
                    <!--inicio boton para definir un paso-->
                    <div class="row">
                    <div class="form-group">
                        <div class="col-sm-offset-1 col-sm-10">
                            <button  class="btn btn-warning col-md-6 text-left" type="button" data-toggle="modal" data-target="#modalAddTracking5" id="modpaso5" <?php if ($midpaso1['idpaso1']== '104'){echo 'enabled';}else {echo 'disabled';}?>>
                                <p class="text-left"><span class="badge">Paso 5</span> ------ Descripción validación del riesgo ------</p>
                            </button>
                        </div>
                    </div>
                    </div>
                    <!--fin boton para definir un paso-->
                    <!--inicio modal paso anterior-->
                            <div class="modal fade" id="modalAddTracking5" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="static">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h3>Descripción validación del riesgo</h3>  
       
                                        </div>
                                        <div class="modal-body">
                                        <h5 class="modal- text-justify" id="myModalLabel">El cogestor deberá redactar de manera clara y coherente la situación familiar  actual, dando cuenta de la alteración de la dinámica familiar con los riesgos identificados y las respectivas oportunidades y/o rutas de atención acercadas  asociadas al riesgo.</h5>    

                                        <div class="row">
                                        <div class="col-sm-12">
                                            <textarea class="form-control" onkeyup="validarpaso5('ep32');" id="ep32" rows="3"></textarea>
                                        </div>
                                        </div><br>
                                        <div class="row">
                                        <div><center>
                                        <button type="button"  name=guardacierre id=guardacierre disabled="disabled" class="btn btn-success" >Guardar</button>
                                        <button type="button"  onclick="paso5('105');" disabled="disabled" name="cerrar5" id="cerrar5" class="btn btn-danger" data-dismiss="modal">Continuar</button>
                                        <button type="button" class="btn btn-gray" data-dismiss="modal" name="Closep32" id="Closep32" aria-label="Close">Cerrar</button></center>
                                        </div>
                                        </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div><br>                    
                    <!--fin modal-->
                    
                     <!--inicio boton para definir un paso-->
                    <div class="row">
                    <div class="form-group">
                        <div class="col-sm-offset-1 col-sm-10">
                            <button  class="btn btn-warning col-md-6" type="button" data-toggle="modal" data-target="#modalAddTracking6" id="modpaso6" <?php if ($midpaso1['idpaso1']== '105'){echo 'enabled';}else {echo 'disabled';}?>>
                               <p class="text-left"><span class="badge">Paso 6</span> ------ Conclusiones ------</p>
                            </button>
                           </div>
                    </div>
                    </div>
                    <!--fin boton para definir un paso-->
                    <!--inicio modal paso anterior-->
                            <div class="modal fade" id="modalAddTracking6" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"  data-backdrop="static">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                           <h3>Conclusiones</h3>    
                                        </div>
                                        <div class="modal-body">
                                       <div class="panel-body  text-justify">Recomendaciones frente la situación encontrada y los apoyos que se puedan brindar, resaltando la importancia del autocuidado y la corresponsabilidad frente a la pandemia del COVID -19.

                                       <div class="row">
                                        <div class="col-sm-12">
                                        <textarea class="form-control" onkeyup="validarpaso6('ep33');" id="ep33" rows="3"></textarea>
                                        </div>
                                        </div><br>
                                        <div class="row">
                                            
                                        <div><center>
                                        <button type="button"  name=guardapaso6 id=guardapaso6 disabled="disabled" class="btn btn-success" >Guardar</button>
                                        <button type="button"  onclick="paso6('106');" disabled="disabled" name="cerrar6" id="cerrar6" class="btn btn-danger" data-dismiss="modal">Continuar</button>
                                        <button type="button" class="btn btn-gray" data-dismiss="modal" name="Closep33" id="Closep33" aria-label="Close">Cerrar</button></center>
                                        </div>    
                                        
                                        </div>
                                      </div>            
                                     </div>
                                     
                                    </div>
                                </div>
                            </div><br>                    
                    <!--fin modal-->
                    

<input type="text" class="form-control input-sm" id="valoridpaso"   style="display:none" placeholder="Text input" value="">
<input type="text" class="form-control input-sm" id="valoridpaso1" style="display:none"   value="<?php echo($midpaso1['idpaso1']) ?>" >
<input type="text" class="form-control input-sm" id="valoridpaso2" style="display:none"    value="<?php echo($midpaso2['idpaso2']) ?>">
<input type="text" class="form-control input-sm" id="valoridpaso3" style="display:none"      value="<?php echo($midpaso3['idpaso3']) ?>">
<input type="text" class="form-control input-sm" id="valoridpaso4" style="display:none"      value="<?php echo($midpaso4['idpaso4']) ?>">
<input type="text" class="form-control input-sm" id="valoridpaso5" style="display:none"    value="<?php echo($midpaso5['idpaso5']) ?>">
<input type="text" class="form-control input-sm" id="valoridpaso6" style="display:none"     value="<?php  echo($midpaso6['idpaso6']) ?>">

<!--inicio botonera guardar y actualizar NO SE TOCA-->

                           <?php if($midpaso2['idpaso2'] == '' && $midpaso1['idpaso1'] < '106')
                            {
                            echo('<button class="btn btn-primary" type="button" id="anterior" name="anterior"> << Anterior</button>');
                            echo '&nbsp';           
                            echo('<button class="btn btn-primary" type="button" id="guardar" disabled="" name="guardar">---- Guardar ----</button>');
                            }
                            else if($midpaso2['idpaso2'] == '' && $midpaso1['idpaso1'] == '106')
                            {
                            echo('<button class="btn btn-primary" type="button" id="anterior" name="anterior"> << Anterior</button>');
                            echo '&nbsp';           
                            echo('<button class="btn btn-primary" type="button" id="guardar" name="guardar">---- Guardar ----</button>');    
                            }
                            else if($midpaso2['idpaso2'] == '1' && $midpaso1['idpaso1'] == '106')
                            {
                            echo('<button class="btn btn-primary" type="button" id="anterior" name="anterior"> << Anterior</button>');
                            echo '&nbsp';           
                            echo('<button class="btn btn-primary" type="button" id="guardar" disabled="" name="guardar">---- Guardar ----</button>');    
                            }
                            ?>   

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
        <script src="<?php echo JSPERFIL, 'jscoordenadas.js?v=', (rand()) ?>"></script>
        <script src="<?php echo JSPERFIL, 'jsbotones.js' ?>"></script>
        <script src="<?php echo JSPERFIL, 'jsmensajes.js' ?>"></script>
        <script src="<?php echo JSPERFIL, 'jscondicionnecesaria.js' ?>"></script>
        <link href="<?php echo JBOX, 'Source/jBox.css' ?>" rel="stylesheet">
<!--FIN ENLACES - NO TOCAR-->
    </body>


<script> 
    
$(function () { $("[data-toggle='popover']").popover(); });


function paso1(opcion)
    {
    iniciocoordenadas(01); // inserta la informacion en la tabla t_protocoloinicioestacion    
    //alert(opcion);
    $('#valoridpaso').val(opcion);
    insertidpaso();
    $('#modpaso1').prop('disabled', true);
    $('#modpaso2').prop('disabled', false);
    }
    
    function paso2(opcion) // va directamente a la vista de actualizar 
    {
    location.href = "../perfilproductivo/c_actualizarpp/fc_actualizarpp?folio="+ $('#folio').val() + "&idintegrante=0"+ "&doccogestor=" + $('#doccogestor').val()+ "&idestacion=102";               
    }

    function paso3(opcion)
    {
     location.href = "../encuadre/c_encuadref1/fc_encuadref1?folio="+ $('#folio').val() + "&idintegrante=0"+ "&doccogestor=" + $('#doccogestor').val()+ "&idestacion=102";     
   // location.href = "../linea2estacion1/c_metahogar/fc_metahogar?folio="+ $('#folio').val() + "&idintegrante=0"+ "&doccogestor=" + $('#doccogestor').val()+ "&idestacion=26";       
    }

function paso4(opcion)
 {
    location.href = "../c_acercaroportunidad/fc_acercaroportunidad?folio="+ $('#folio').val() + "&idintegrante=0"+ "&doccogestor=" + $('#doccogestor').val()+ "&variable=102";     
 }
    
function paso5(opcion)
    {
   $('#valoridpaso').val(opcion);
    insertidpaso(opcion);
    $('#modpaso5').prop('disabled', true);
    $('#modpaso6').prop('disabled', false);
    }

    function paso6(opcion)
    {$('#valoridpaso').val(opcion);
        insertidpaso(opcion);
    $('#modpaso6').prop('disabled', true);
    //$('#modpaso6').prop('disabled', false);
    location.reload();
    }
   
   function insertarfolioexitoso()
   {
    //alert('test');
                        $.ajax({
                          url: "fc_insertarfolioexitoso",
                          type: "GET",
                          data: {vfolio: $('#folio').val(),videstacion: '22'},
                          dataType: "html",
                          info: function(obj) {
                          //me llama el mensajito de actualizar
                          //$('#datos').html(obj);
                          //location.href = "../c_capituloshogar/fc_capituloshogar?folio="+ $('#folio').val() +"&idintegrante="+$('#idintegrante').val();                  
                        }
                       });
   }
   
   
function insertidpaso()
   {
    //alert('test');
                        $.ajax({
                          url: "fc_cerrarpaso", // replace into t_protocolopasosestad -- if pidpaso = 1106 INSERT INTO t2_formulario_newsincronizar -- if pidpaso = 1204 INSERT INTO t2_perfilproductivo_newsincronizar
                          type: "GET",
                          data: {vfolio: $('#folio').val(), vidpaso: $('#valoridpaso').val(), vestado:1},
                          dataType: "html",
                          info: function(obj) {
                          }
                       });
   }
    
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
        color: 'red',
        animation: {open: 'tada', close: 'flip'},
        position: {x: 'right', y: 'center'},
        autoClose: 2000
    });
    }
    //fin funcion que generar el mensaje de guardado
///////////////////////////////////////FIN Funciones que llaman a los mensajitos para guardar y actualizar////////////////////////////////////////////////////////////////////////    

///////////////////////////////////////Funciones que llaman al controlador para guardar y actualizar////////////////////////////////////////////////////////////////////////    
    $(document).ready(function()
    {
    //funcion que controla el cierre de los pasos de la estación guardacierre

    $("#ep32").on('paste', function(e){
    e.preventDefault();
    mensajito('MENSAJE','Esta acción no esta permitida, por favor digite la información');
  });

  $("#ep33").on('paste', function(e){
    e.preventDefault();
    mensajito('MENSAJE','Esta acción no esta permitida, por favor digite la información');
  });

    if($('#valoridpaso1').val()=='101' && $('#valoridpaso2').val()=='102' && $('#valoridpaso3').val()=='')
    {
        $('#modpaso3').prop('disabled', false);
    }


    if($('#valoridpaso1').val()=='101' && $('#valoridpaso2').val()=='102' && $('#valoridpaso3').val()=='103')
    {
        $('#modpaso3').prop('disabled', true);
    }


    if( $('#valoridpaso2').val()=='102' && $('#valoridpaso3').val()=='103' && $('#valoridpaso4').val()=='')
    {
        $('#modpaso4').prop('disabled', false);
    }

    if( $('#valoridpaso2').val()=='102' && $('#valoridpaso3').val()=='103' && $('#valoridpaso4').val()=='104')
    {
        $('#modpaso4').prop('disabled', true);
    }
    
    if( $('#valoridpaso3').val()=='103' && $('#valoridpaso4').val()=='104' && $('#valoridpaso5').val()=='')
    {
        $('#modpaso5').prop('disabled', false);
    }


if($('#valoridpaso5').val()=='105')
{
    $('#modpaso5').prop('disabled', true);
}

    $("#guardacierre").click(function ()
        {
                        $.ajax({
                          url: "fc_actualizarep32",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),
                                 vep32 : $('#ep32').val()},    
                          dataType: "html",
                          success : function(obj){                      
                            mensajito('MENSAJE','La informacion se guardó correctamente');
                            $('#cerrar5').prop('disabled', false);
                            $('#guardacierre').prop('disabled', true);
                            $('#Closep32').prop('disabled', true);
                          }
                        });                    
        });

        $("#guardapaso6").click(function ()
        {
                        $.ajax({
                          url: "fc_actualizarep33",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),
                                 vep33 : $('#ep33').val()},    
                          dataType: "html",
                          success : function(obj){                      
                            mensajito('MENSAJE','La informacion se guardó correctamente');
                            $('#cerrar6').prop('disabled', false);
                            $('#guardapaso6').prop('disabled', true);
                            $('#Closep33').prop('disabled', true);
                          }
                        });                    
        });



















///////////////////////////// nuevo ////////////////
///////////////////////////// guarda paso cero /////////////////////////////
$("#guardapaso0").click(function ()
        {
                        $.ajax({
                          url: "fc_actualizarep0",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),
                                 videstacion : '1',
                                 vvalorp0 : $('#valorp0').val(),
                                 vvcualmotivo : $('#vcualmotivo').val(),
                                 vdoccogestor : $('#doccogestor').val()},    
                          dataType: "html",
                          success : function(obj){                      
                            mensajito('MENSAJE','La informacion se guardó correctamente');
                            $('#guardapaso0').prop('disabled', true);
                            $('#cerrar0').prop('disabled', false);
                            $('#Close0').prop('disabled', true);
                          }
                        });                    
        });

////////////////////////////// fin guarda paso cero //////////////////////////
///////////////////////// fin nuevo ///////////////////////////////////////













        
                $("#guardar").click(function ()
                {
                $('#guardar').prop('disabled', true);
                $('#anterior').prop('disabled', true);
                mensajedesinco();        
                coordenadas(01);
               // calcularcondicion(27);
               setTimeout("regresarcontiempo()",1000);
               mensajito('MENSAJE','La informacion se guardó correctamente');
                //window.opener.document.location="http://localhost/metodologia2msol/index.php/c_principalhogar/fc_principalhogar"; 
                
                });
                //fin de la funcion guardar
                //esta funcion es para siguiente
                //si las preguntas son por hogar mandar idintegrante en 0
                $("#siguiente").click(function ()
                {
                   // alert('juapis');
                 //location.href = "../c_c9mp6ap10/fc_c9mp6ap10?folio="+ $('#folio').val() +"&idintegrante="+$('#idintegrante').val();
                    
                });
                //fin de la funcion siguiente
                
                //esta funcion es para atras
                //si las preguntas son por hogar mandar idintegrante en 0                
                $("#anterior").click(function ()
                {
                   // alert('juapis');
                location.href ="../c_principalhogar/fc_principalhogar?doccogestor="+$('#idintegrante').val();
                });
                //fin de la funcion atras
                
               //NO TOCAR - voler a capitulos                
                $("#capitulos").click(function ()
                {
                   // alert('juapis');
                location.href = "../c_capituloshogar/fc_capituloshogar?folio="+ $('#folio').val() +"&idintegrante="+$('#idintegrante').val();                  
                });
                //fin voler a capitulos                      
                                    
    });


    function regresarcontiempo()
    {
        window.opener.document.location="http://localhost/metodologia2msol/index.php/c_principalhogar/fc_principalhogar";  
                       
    }
    
    function mensajedesinco()
{
    $('#modalsinco').modal('show');
}
/////////////////////////////////////// FIN Funciones que llaman al controlador para guardar y actualizar////////////////////////////////////////////////////////////////////////        
 function validarpaso5()
{
 //  alert($('#ep32').val());
   if($('#ep32').val() == '')
   {
       $('#guardacierre').prop('disabled', true);
       $('#cerrar5').prop('disabled', true);
    }
   else
   {
       $('#guardacierre').prop('disabled', false);
   }
}

 function validarpaso6()
{
 //  alert($('#ep32').val());
   if($('#ep33').val() == '')
   {
       $('#guardapaso6').prop('disabled', true);
       $('#cerrar6').prop('disabled', true);
    }
   else
   {
       $('#guardapaso6').prop('disabled', false);
   }
}




















//////////////////////////////////////// nuevo /////////////////////////////////
// inicio funcion para validar paso 0
function validarcualmotivo(opcion,campoval)
{
    $('#' + campoval).val(opcion);
   
    if(($('#'+ campoval).val() == 'Si'))
   {
    $('#p0div').removeClass('has-error');
    $('#pregunta0').removeClass('has-error');
    $('#divcualmotivo').hide();
    $('#vcualmotivo').val('');
    $('#cualmotivodiv').removeClass('has-error');            
    $('#guardapaso0').prop('disabled', false);
    }
   else
   {
    $('#p0div').removeClass('has-error');
    $('#pregunta0').removeClass('has-error');

    $('#divcualmotivo').show();
    $('#cualmotivodiv').addClass('has-error');            
    $('#guardapaso0').prop('disabled', true);
    $('#cerrar0').prop('disabled', true);
   }
}

function validarpaso0()
{
   if($('#vcualmotivo').val() == '')
   {
       $('#cualmotivodiv').addClass('has-error');
       $('#guardapaso0').prop('disabled', true);
       $('#cerrar0').prop('disabled', true);
    }
   else
   {
       $('#cualmotivodiv').removeClass('has-error');
       $('#guardapaso0').prop('disabled', false);
       $('#cerrar0').prop('disabled', true);
   }
}
function paso0()
    {
    $('#modpaso0').prop('disabled', true);
    $('#modpaso1').prop('disabled', false);
    }
///////////////////////////////// fin nuevo ///////////////////////////////////

</script>
</html>