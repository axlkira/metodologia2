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
                    <h3 class="text-right col-md-12"><small>Te encuentras en <strong>(L1) Línea de Clasificación</strong></small></h3>
                    <?php // echo ($midpaso['maximoidpaso']);?>
                    
                    </div>
                </div>
<!--para imprimir el folio y llevarlo-->
                        <input type="text" class="form-control input-sm" id="folio" name="folio" style="display: none" placeholder="Text input" value="<?php echo($folio); ?>">
                        <input type="text" class="form-control input-sm" id="idintegrante" name="idintegrante" style="display: none" placeholder="Text input" value="<?php echo($tdatinte['tidintegrante']); ?>">
                        <input type="text" class="form-control input-sm" id="doccogestor" name="doccogestor" style="display: none" placeholder="Text input" value="<?php echo($doccogestor); ?>">
                        <input type="text" class="form-control input-sm" style="display: none" value="<?php echo($tdatidvisita['tfolio']); ?>">
                        <input type="text" class="form-control input-sm" style="display: none" value="<?php echo($tdatidvisitaAccion['tfolio']); ?>">
<!--fin para imprimir el folio y llevarlo-->
    <!--
                <div class="form-row col-md-12">
                       <h6>La fecha de inicio de la visita fue el: <strong><input type="text" style="border: aliceblue; width : 220px;" id="fechaIni" disabled value="<?php echo($tdatidvisita['tfecharegistro']); ?>"></strong></h6>
				</div>
            
                <div class="form-row col-md-12">
                       <h6>El tiempo transcurrido de la visita es de:<strong><input type="text" style="border: aliceblue; width : 20px;" id="TiempoDifD" disabled> Dias <input type="text" style="border: aliceblue;width : 20px;" id="TiempoDifH" disabled> Horas <input type="text" style="border: aliceblue;width : 20px;" id="TiempoDifM" disabled> Minutos y <input type="text" style="border: aliceblue;width : 20px;" id="TiempoDifS" disabled> Segundos</strong></h6>
                </div>
                -->

                <form class="form-group" class="form-group col-md-offset-1" name="formulario" id="formulario">

                    <div class="col-md-10">                    
                    <div class="panel panel-default">
                    <div class="panel-heading">
                    <h1 class="panel-title"><span class="badge">Estación H</span></h1>
                    </div>
                    <div class="panel-body  text-justify">
                    Estación con la cual se da inicio al acompañamiento familiar, su objetivo es presentar el servicio ofrecido desde su objetivo y características,  generando un espacio que permita levantar información cualitativa del hogar referente a su  procedencia, composición familiar, vulnerabilidades, logros y metas.
                    </div>
                    </div>
                    </div>

<!-- ////////////////////////////////////////////////// nuevo ////////////////////////////////////////////-->
 <!--inicio boton para definir un paso-->
 <div class="row">
                    <div class="form-group">
                        <div class="col-sm-offset-1 col-sm-10">
                            <button  class="btn btn-default col-md-6" type="button" data-toggle="modal" data-target="#modalAddTracking0" id="modpaso0" <?php if ($tdatidvisita['tfolio'] <> ''){echo 'disabled';}else {echo 'enabled';}?>>
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
                            <option value="Residencia de un familiar">Residencia de un familiar</option>
                            <option value="Residencia de un amigo o vecino">Residencia de un amigo o vecino</option>
                            <option value="Lugar de trabajo (en espacio cerrado, no abierto al publico o en la calle)">Lugar de trabajo (en espacio cerrado, no abierto al público o en la calle)</option>
                            <option value="Espacio institucional (CIF, colegio)">Espacio institucional (CIF, colegio)</option>
                            <option value="Espacio comunitario (sede JAC, salon parroquial)">Espacio comunitario (sede JAC, salón parroquial)</option>
                            </select>
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
                            <button class="btn btn-default col-md-6" type="button" data-toggle="modal" data-target="#modalAddTracking" id="modpaso1" <?php if ($tdatidvisita['tfolio'] <> '' && $midpaso['maximoidpaso']==''){}else{echo 'disabled';}?>>
                                <p class="text-left"><span class="badge">Paso 1</span> ------ Saludo y Encuadre ------</p> 
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
                                            <h3>SALUDO Y ENCUADRE:</h3>    
                                        </div>
                                        <div class="modal-body">
                                            
                                            <h5 class="modal- text-justify" id="myModalLabel">El gestor/a territorial de familia saluda invitando a los integrantes del hogar presentes en la vivienda a participar del espacio y desde un  lenguaje claro para el hogar  se  presenta dando a conocer el objetivo de la visita, temas a ser abordados, recolección y registro de información  que se hará y tiempo empleado para ello.</h5>    
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button"  onclick="paso1('1001');" name=cerrar1 id=cerrar1 class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                                        </div>
                                    </div>
                                </div>
                            </div><br>                    
                    <!--fin modal-->
                    
                    <div class="row">
                    <div class="form-group">
                        <div class="col-sm-offset-1 col-sm-10">
                            <button  class="btn btn-default col-md-6" type="button" data-toggle="modal" data-target="#modalAddTracking2" id="modpaso2" <?php if($midpaso['maximoidpaso']=='1001') {echo ('enabled');} else {echo ('disabled');}?>>
                                <p class="text-left"><span class="badge">Paso 2</span> --- Recolección de información estación H. ---</p>
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
                                            RECOLECTAR INFORMACIÓN ESTACIÓN H:
                                            </h3>    
                                        </div>
                                        <div class="modal-body">
                                        <h5 class="modal- text-justify" id="myModalLabel">El gestor/a territorial de familia haciendo uso de herramientas pedagógicas para movilizar la palabra y la participación activa, genera un espacio que le permita al hogar expresar  sus perspectivas en relación a su conformación,  historicidad y reconocimiento de avances o logros alcanzados. A medida que el hogar da a conocer lo anterior, el gestor/a territorial va haciendo registro de la información  cualitativamente.<br>
                                        Adicionalmente se establece en conjunto con el hogar 3 metas  que se deseen alcanzar a través del acompañamiento familiar de acuerdo a las 9 dimensiones del desarrollo humano y a las necesidades verbalizadas por el hogar.<br>
                                        </h5> 
                                        <h3>                                           
                                        MOMENTO APLICACIÓN DE LA ERFAM:
                                        </h3>
                                        <h5 class="modal- text-justify" id="myModalLabel">El gestor/a territorial de familia explica al hogar que  la ERFAM es una escala evaluativa de las relaciones familiares cuyo objetivo es medir la calidad de los vínculos que los miembros del hogar establecen entre sí y en su comunidad y su resultado permitirá fortalecer la dinámica familiar.<br>
                                        </h5>
                                        <br>
                                        <h3>                                           
                                        MOMENTO: LECTURA Y FIRMA DEL ACUERDO DE CORRESPONSABILIDAD
                                        </h3>
                                        <h5 class="modal- text-justify" id="myModalLabel">El gestor/a territorial hace lectura del acuerdo de corresponsabilidad fortaleciendo  compromisos adquiridos y esclareciendo causales de retiro e inactivación del hogar. Este documento es el símbolo de la responsabilidad compartida entre el hogar y la Estrategia de Acompañamiento Familiar para el avance del hogar.<br>
                                        </h5>
                                        </div>
                                        <br> 
                                        <div class="modal-footer">
                                            <button type="button"  onclick="paso2('1002');" name=cerrar2 id=cerrar2 class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                                        </div>
                                    </div>
                                </div>
                            </div><br>                    
                    <!--fin modal-->
         
                    
                    <div class="row">
                    <div class="form-group">
                        <div class="col-sm-offset-1 col-sm-10">
                            <button  class="btn btn-default col-md-6" type="button" data-toggle="modal" data-target="#modalAddTracking3" id="modpaso3" <?php if($midpaso['maximoidpaso']=='1002') {echo ('enabled');} else {echo ('disabled');}?>>
                                <p class="text-left"><span class="badge">Paso 3</span> ------ Cierre ------</p>
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
                                            CIERRE DE LA VISITA:
                                            </h3>    
                                        </div>
                                        <div class="modal-body">
                                        <h5 class="modal- text-justify" id="myModalLabel">El gestor/a territorial esclarece dudas que se hayan generado, agradece al hogar la participación y da por finalizada la visita realizada.<br>
                                        </h5>    
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button"  onclick="paso3('1003');" name=cerrar3 id=cerrar3 class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                                        </div>
                                    </div>
                                </div>
                            </div><br>                    
                    <!--fin modal-->


<!--Inicio Modal imagen cargando-->
<div class="modal fade bs-example-modal-sm" id="modalsinco" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" data-backdrop="static">
                      <div class="modal-dialog modal-sm">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title" id="myModalLabel"><img src="<?php echo IMAGEN, 'cargando.gif'; ?>" alt="Brand">  Por favor espere...</h4>
                            </div>
                            <div class="modal-body">
                            Guardando toda la información
                            </div>
                        </div>
                      </div>
                    </div>
<!--Fin Modal-->


<input type="text" class="form-control input-sm" id="valoridpaso" name="valoridpaso"  style="display:none" placeholder="Text input" value="">

<!--inicio botonera guardar y actualizar NO SE TOCA-->

                           <?php if($midpaso['maximoidpaso']<'1003')
                            {
                            echo('<button class="btn btn-primary" type="button" id="anterior" name="anterior"> << Anterior</button>');
                            echo '&nbsp';           
                            echo('<button class="btn btn-primary" type="button" id="guardar" disabled="" name="guardar">---- Guardar ----</button>');
                            }
                            else 
                            {
                            echo('<button class="btn btn-primary" type="button" id="anterior" name="anterior"> << Anterior</button>');
                            echo '&nbsp';           
                            echo('<button class="btn btn-primary" type="button" id="guardar" name="guardar">---- Guardar ----</button>');    
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
        <script src="<?php echo JSPERFIL, 'jscondicionnecesaria.js' ?>"></script>
        <script src="<?php echo JSPERFIL, 'jsmensajes.js' ?>"></script>
        <link href="<?php echo JBOX, 'Source/jBox.css' ?>" rel="stylesheet">
<!--FIN ENLACES - NO TOCAR-->
    </body>


<script> 
    
$(function () { $("[data-toggle='popover']").popover(); });


function paso1(opcion)
    {
    iniciocoordenadas(10); // inserta la informacion en la tabla t_protocoloinicioestacion    
    //alert(opcion);
    $('#valoridpaso').val(opcion);
    insertidpaso();
    $('#modpaso1').prop('disabled', true);
    $('#modpaso2').prop('disabled', false);
    }
    
    function paso2(opcion) // va directamente a la vista de actualizar 
    {
    location.href = "../historiahogar/c_historiahogar/fc_historiahogar?folio="+ $('#folio').val() +"&idintegrante="+$('#idintegrante').val()+"&doccogestor="+$('#doccogestor').val();
   // location.href = "../perfilproductivo/c_actualizarpp/fc_actualizarpp?folio="+ $('#folio').val() + "&idintegrante=0"+ "&doccogestor=" + $('#doccogestor').val()+ "&idestacion=10";               
    }

    function paso3(opcion)
    {
    $('#valoridpaso').val(opcion);
    insertidpaso();
    $('#modpaso3').prop('disabled', true);
    $('#guardar').prop('disabled', false);
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
        calcularFechaJs();
    //funcion que controla el cierre de los pasos de la estación
        
                $("#guardar").click(function ()
                {
                $('#guardar').prop('disabled', true);
                $('#anterior').prop('disabled', true);
                mensajedesinco();        
                coordenadas(10);
                
                });
                //fin de la funcion guardar
                                
                //esta funcion es para atras
                //si las preguntas son por hogar mandar idintegrante en 0                
                $("#anterior").click(function ()
                {
                location.href = "../c_principalprotocolo/fc_principalprotocolo?folio="+ $('#folio').val() +"&idintegrante="+$('#idintegrante').val()+"&doccogestor="+$('#doccogestor').val();                  
                });
                //fin de la funcion atras

///////////////////////////// nuevo ////////////////
///////////////////////////// guarda paso cero /////////////////////////////
$("#guardapaso0").click(function ()
        {
                        $.ajax({
                          url: "fc_actualizarep0",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),
                                 videstacion : '10',
                                 vvalorp0 : $('#valorp0').val(),
                                 vvcualmotivo : $('#vcualmotivo').val(),
                                 vdoccogestor : $('#doccogestor').val()},    
                          dataType: "html",
                          success : function(obj){                      
                            mensajito('MENSAJE','La informacion se guardó correctamente');
                            $('#guardapaso0').prop('disabled', true);
                            $('#cerrar0').prop('disabled', false);
                            $('#Close0').prop('disabled', true);

                            $('#fechaIni').val(obj);
                          }
                        });                    
        });

////////////////////////////// fin guarda paso cero //////////////////////////
///////////////////////// fin nuevo ///////////////////////////////////////
    });
    
    function mensajedesinco()
{
  $('#modalsinco').modal('show');
  $('#volv').prop('disabled', true);   
}
/////////////////////////////////////// FIN Funciones que llaman al controlador para guardar y actualizar////////////////////////////////////////////////////////////////////////        
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
    $('#cerrar0').prop('disabled', true);
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
    calcularFechaJs();
    }
///////////////////////////////// fin nuevo ///////////////////////////////////
//////////////////////////////////////// nuevo acciones /////////////////////////////////
// inicio funcion para validar paso 0

function calcularFechaJs()
{
   // alert($('#fechaIni').val());
   if($('#fechaIni').val() !== ''){
    $.ajax({
          url: "fc_calcularFechaPHP",
          type: "GET",
          data: {fechaIni: $('#fechaIni').val()},
          dataType: "json",
          success: function(obj) {
            $('#TiempoDifD').val(obj.DiasTrascurridos);
            $('#TiempoDifH').val(obj.Hresiduo);
            $('#TiempoDifM').val(obj.Mresiduo);
            $('#TiempoDifS').val(obj.Sresiduo);
            var intervalo = setTimeout(calcularFechaJs, 1000);
        }
       });
    }else{
        $('#fechaIni').val('No se ha iniciado la visita');
        $('#TiempoDifD').val('00');
        $('#TiempoDifH').val('00');
        $('#TiempoDifM').val('00');
        $('#TiempoDifS').val('00');
    }
}
</script>
</html>