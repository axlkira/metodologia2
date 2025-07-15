<!DOCTYPE html>
<html lang="es">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <title><?php echo $titulo ?>  </title>
        <link rel="stylesheet" href="<?php echo BOOTSTRAP, 'css/bootstrap1.min.css'; ?>" >
        <link rel="stylesheet" href="<?php echo BOOTSTRAP, 'css/stylereloj.css'; ?>" >
        <meta charset="utf-8">
        <meta http-equiv="Content-Language" content="es"/>
        <style>
            input[type="text"]:disabled{
                background-color: transparent!important;
            }
        </style>

    </head>
    <body>  
        <div class="container">
            
<!--head -->
        <?php echo($head); ?>
<!-- fin head  -->
               
                <div  class="row">
                    <div class="col-md-10">
                    <h6>Folio: <small><?php echo($folio); ?></small></h6>
                    <h6>Documento: <small><?php echo($tdatinte['tdoc']); ?></small></h6>
                    <h6>IDintegrante: <small><?php echo($tdatinte['tidintegrante']); ?></small></h6>
                    <h6>Nombre: <small><?php echo($tdatinte['tnombre']); ?></small></h6>
                    <h3 class="text-right col-md-12"><small>Te encuentras en <strong>(L1) Línea de Clasificación</strong></small></h3>
                 <?php //echo ($midpaso['maximoidpaso']);?> 
                    
                    </div>
                </div>
<!--para imprimir el folio y llevarlo-->
                        <input type="text" class="form-control input-sm" id="folio" name="folio" style="display: none" placeholder="Text input" value="<?php echo($folio); ?>">
                        <input type="text" class="form-control input-sm" id="idintegrante" name="idintegrante" style="display: none"  placeholder="Text input" value="<?php echo($tdatinte['tidintegrante']); ?>">
                        <input type="text" class="form-control input-sm" id="doccogestor" name="doccogestor" style="display: none" placeholder="Text input" value="<?php echo($doccogestor); ?>">
                        <input type="text" class="form-control input-sm" style="display: none" value="<?php echo($tdatidvisita['tfolio']); ?>">

                       <!-- <div class="form-row col-md-12">
                       <h6>La fecha de inicio de la visita fue el: <strong><input type="text" style="border: aliceblue; width : 220px;" id="fechaIni" disabled value="<?php echo($tdatidvisita['tfecharegistro']); ?>"></strong></h6>
					   </div>
                       <div class="form-row col-md-12">
                       <h6>El tiempo transcurrido de la visita es de:<strong><input type="text" style="border: aliceblue; width : 20px;" id="TiempoDifD" disabled> Dias <input type="text" style="border: aliceblue;width : 20px;" id="TiempoDifH" disabled> Horas <input type="text" style="border: aliceblue;width : 20px;" id="TiempoDifM" disabled> Minutos y <input type="text" style="border: aliceblue;width : 20px;" id="TiempoDifS" disabled> Segundos</strong></h6>
                       </div>  -->

                    <form class="form-group" class="form-group col-md-offset-1" name="formulario" id="formulario">

                    <div class="col-md-10">                    
                    <div class="panel panel-primary">
                    <div class="panel-heading">
                    <h1 class="panel-title"><span class="badge">Estación 1</span></h1>
                    </div>
                    <div class="panel-body  text-justify">
                      Momento para recolección de información del hogar alrededor de las 9 dimensiones del desarrollo humano 
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
                            <button class="btn btn-warning col-md-6" type="button" data-toggle="modal" data-target="#modalAddTracking" id="modpaso1" <?php if ($midpaso['maximoidpaso'] <= '1003' && $tdatidvisita['tfolio'] <> ''){echo ('enabled');} else {echo ('disabled');}?>>
                                <p class="text-left"><span class="badge">Paso 1</span> ------ Saludo ------</p> 
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
                                            <h3>Saludo</h3>    
                                        </div>
                                        <div class="modal-body">
                                            
                                            <h5 class="modal- text-justify" id="myModalLabel">El Gestor Territorial de Familia saluda de manera cordial y cálida al hogar, informándole la importancia
                                                de su participación en el programa y la satisfacción de poder iniciar el proceso de Acompañamiento Familiar. Adicional se procede a explicar
                                                la duración aproximada de la visita y el objetivo que contiene la misma. </h5>    
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button"  onclick="paso1('1101');" name=cerrar1 id=cerrar1 class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                                        </div>
                                    </div>
                                </div>
                            </div><br>                    
                    <!--fin modal-->

                                        
                    <div class="row">
                        
                        <div class="form-group">
                        <div class="col-sm-offset-1 col-sm-10">
                            <button  class="btn btn-warning col-md-6" type="button" data-toggle="modal" data-target="#modalAddTracking2" id="modpaso2" <?php if($midpaso['maximoidpaso']=='1101') {echo ('enabled');} else {echo ('disabled');}?>>
                                <p class="text-left"><span class="badge">Paso 2</span>  Reencuadre-proceso de acompañamiento familiar </p>
                            </button>
                        </div>
                    </div>
                    </div>
<!--                    inicio modal-->
                            <div class="modal fade" id="modalAddTracking2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h3>Explicación del programa</h3>    
                                        </div>
                                        <div class="modal-body">
                                        <!--    <input type="text" class="form-control input-sm" id="valoridpaso" name="valoridpaso"  style="display:none" placeholder="Text input" value=""> -->
                                        <h5 class="modal- text-justify" id="myModalLabel">La explicación del proyecto Familia Medellín - Acompañamiento Familiar  se realiza a partir de las claridades o inquietudes que cada integrante del hogar pueda tener con relación a este, con el fin de orientar el discurso y dar claridades respecto a lo manifestado por el hogar.
El Gestor Territorial de Familia explica a los integrantes  del hogar el proceso de acompañamiento, apoyándose en la multimedia instalada en la DTR
<br><br>
                                        •	Línea: Línea de Clasificación<br>
                                        •	Línea: Plan de Vida Familiar<br>
                                        •	Línea: Autonomía Familiar<br>
                                        •	Criterios para la promoción  (Condición Necesaria-Condición Suficiente)<br><br>
                                         Se aclara al hogar, que su proceso de Acompañamiento Familiar, tendrá una duración de 2 años-2 años y medio, durante el cual se construirá un plan de vida familiar con el acompañamiento del Gestor Territorial de Familia, el cual será cumplido con base en el criterio de corresponsabilidad, en algunos casos las metas pueden no ser alcanzadas durante el proceso, no obstante  el hogar contara con toda la capacidad e información necesaria para continuar de manera autónoma por el mejoramiento de sus condiciones de vida.  
                                        </h5>    
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button"  onclick="paso2('1102');" name=cerrar2 id=cerrar2 class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                                        </div>
                                    </div>
                                </div>
                            </div><br>                    
<!--                    fin modal
                    
                    inicio boton para definir un paso-->
                    <div class="row">
                    <div class="form-group">
                        <div class="col-sm-offset-1 col-sm-10">
                            <button  class="btn btn-warning col-md-6 text-left" type="button" data-toggle="modal" data-target="#modalAddTracking3" id="modpaso3" <?php if($midpaso['maximoidpaso']=='1102') {echo ('enabled');} else {echo ('disabled');}?>>
                                <p class="text-left"><span class="badge">Paso 3</span> ------ Actualización de datos ------</p>
                            </button>
                        </div>
                    </div>
                    </div>
<!--                    fin boton para definir un paso
                    inicio modal paso anterior-->
                            <div class="modal fade" id="modalAddTracking3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h3>Actualización de datos generales</h3>    
                                        </div>
                                        <div class="modal-body">
                                        <h5 class="modal- text-justify" id="myModalLabel">El Gestor Territorial de Familia debe actualizar los datos de contacto del hogar siempre que se requiera
                                        </h5>    
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button"  onclick="paso3('1103');" name=cerrar3 id=cerrar3 class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                                        </div>
                                    </div>
                                </div>
                            </div><br>                    
<!--                    fin modal -->


    <!--                inicio boton para definir un paso -->
                    <div class="row">
                    <div class="form-group">
                        <div class="col-sm-offset-1 col-sm-10">
                            <button  class="btn btn-warning col-md-6" type="button" data-toggle="modal" data-target="#modalAddTracking6" id="modpaso6" <?php if($midpaso['maximoidpaso']=='1103') {echo ('enabled');} else {echo ('disabled');}?>>
                                <p class="text-left"><span class="badge">Paso 4</span> ------ Recolección de información ------</p>
                            </button>
                        </div>
                    </div>
                    </div>
                    <!--fin boton para definir un paso-->
                    <!--inicio modal paso anterior-->
                            <div class="modal fade" id="modalAddTracking6" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h3>Momento para recolección de información del hogar alrededor de las 9 dimensiones del desarrollo humano</h3>    
                                        </div>
                                        <div class="modal-body" align="center">
                                        <button type="button"  onclick="paso6('1106');" name=cerrar6 id=cerrar6 class="btn btn-danger text-justify" data-dismiss="modal">Ir a Formulario de Recolección de información del hogar</button>    
                                        <!--<h5 class="modal- text-justify" id="myModalLabel">
                                        </h5>-->    
                                        </div>
                                        <!--<div class="modal-footer">
                                            
                                        </div>-->
                                    </div>
                                </div>
                            </div><br>                    
                    <!--fin modal-->

                    
                    <!--inicio boton para definir un paso-->
                    <div class="row">
                    <div class="form-group">
                        <div class="col-sm-offset-1 col-sm-10">
                            <button  class="btn btn-warning col-md-6" type="button" data-toggle="modal" data-target="#modalAddTracking7" id="modpaso7" <?php if($midpaso['maximoidpaso']=='1106') {echo ('enabled');} else {echo ('disabled');}?>>
                                <p class="text-left"><span class="badge">Paso 5</span> ------ Acercamiento de oportunidades------</p>
                            </button>
                        </div>
                    </div>
                    </div>
                    <!--fin boton para definir un paso-->
                    <!--inicio modal paso anterior-->
                            <div class="modal fade" id="modalAddTracking7" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h3>Inclusión social de oportunidades  (registrar en la historia del hogar las oportunidades acercadas)</h3>    
                                        </div>
                                        <div class="modal-body">
                                        <h5 class="modal- text-justify" id="myModalLabel">En este espacio, el Gestor Territorial de Familia acerca las oportunidades permanentes y vigentes que aplican al hogar,  (independientemente del color de sus logros: rojo, verde, café) de tal manera que les permita paso a paso  mejorar sus condiciones de vida y dejar las capacidades instaladas  para la auto gestión no solo de las dificultades e intereses del presente sino también que puedan presentarse en el futuro.  
La información de las oportunidades debe quedar registrada en la historia del hogar, de tal manera que al llegar a la Línea Plan de vida familiar pueda hacerse el registro en el sistema de información (DTR). 

                                        </h5>    
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button"  onclick="paso7('1107');" name=cerrar7 id=cerrar7 class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                                        </div>
                                    </div>
                                </div>
                            </div><br>                    
                    <!--fin modal-->
                    
                    <!--inicio boton para definir un paso-->
                    <div class="row">
                    <div class="form-group">
                        <div class="col-sm-offset-1 col-sm-10">
                            <button  class="btn btn-warning col-md-6" type="button" data-toggle="modal" data-target="#modalAddTracking8" id="modpaso8" <?php if($midpaso['maximoidpaso']=='1107') {echo ('enabled');} else {echo ('disabled');}?>>
                                <p class="text-left"><span class="badge">Paso 6</span> ------ Cierre de la visita ------</p>
                            </button>
                        </div>
                    </div>
                    </div>
                    <!--fin boton para definir un paso-->
                    <!--inicio modal paso anterior-->
                            <div class="modal fade" id="modalAddTracking8" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h3>Cierre de la visita (Evaluación)</h3>    
                                        </div>
                                        <div class="modal-body">
                                        <h5 class="modal- text-justify" id="myModalLabel">En este espacio el Gestor Territorial de Familia realiza la evaluación de la visita, haciendo uso de la DTR y motiva al hogar al cumplimiento de los compromisos
                                            establecidos. Además, sintetiza lo trabajado en la visita y recuerda que en los próximos meses será visitado para continuar con el proceso (excepto sesión de cierre).
                                        </h5>    
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button"  onclick="paso8('1108');" name=cerrar8 id=cerrar8 class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                                        </div>
                                    </div>
                                </div>
                            </div><br>                    
                    <!--fin modal-->
                    <!--Inicio Modal-->
                    <div class="modal fade bs-example-modal-sm" id="modalsinco" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" data-backdrop="static">
                      <div class="modal-dialog modal-sm">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title" id="myModalLabel"><img src="<?php echo IMAGEN, 'cargando.gif'; ?>" alt="Brand"> Cerrar la linea 1 estacion 1 </h4>
                            </div>
                            <div class="modal-body">

                            Por favor espere un momento.
                            </div>
                        </div>
                      </div>
                    </div>
                    <!--Fin Modal-->               
    
    <!-- inicio boton para capturar informacion de madres -->
                    <div class="row">
                    <div class="form-group">
                        <div class="col-sm-offset-1 col-sm-10">
                            <button  class="btn btn-warning col-md-6" type="button" data-toggle="modal" data-target="#modalAddTracking9" id="modpaso9" <?php if($midpaso['maximoidpaso']=='1108') {echo ('enabled');} else {echo ('disabled');}?>>
                                <p class="text-left"><span class="badge">Paso Informativo</span> ------ Mujeres entre 10 y 19 años de edad ------</p>
                            </button>
                        </div>
                    </div>
                    </div>
                    <!--fin boton para definir un paso-->
                    <!--inicio modal paso anterior-->
                            <div class="modal fade" id="modalAddTracking9" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5>Momento para recolección de información del hogar alrededor de las madres adolescentes.</h5>    
                                        </div>
                                        <div class="modal-body" align="center">
                                        <button type="button"  onclick="paso9('1109');" name=cerrar9 id=cerrar9 class="btn btn-danger text-justify" data-dismiss="modal">Aceptar</button>    
                                        <!--<h5 class="modal- text-justify" id="myModalLabel">
                                        </h5>-->    
                                        </div>
                                        <!--<div class="modal-footer">
                                            
                                        </div>-->
                                    </div>
                                </div>
                            </div><br>                    
    <!-- fin boton para capturar informacion de madres -->








<input type="text" class="form-control input-sm" id="valoridpaso" name="valoridpaso"  style="display:none" placeholder="Text input" value="">

<!--inicio botonera guardar y actualizar NO SE TOCA-->

                             
                            <?php if($midpaso['maximoidpaso']<'1109')
                            {
                            echo('<button class="btn btn-primary" type="button" id="anterior" name="anterior"> << Anterior</button>');
                            echo '&nbsp';           
                            echo('<button class="btn btn-primary" type="button" id="guardar" disabled="" name="guardar">---- Guardar ----</button>');
                            }
                            else if($midpaso['maximoidpaso']='1109')
                            {
                            echo('<button class="btn btn-primary" type="button" id="anterior" name="anterior"> << Anterior</button>');
                            echo '&nbsp';           
                            echo('<button class="btn btn-primary" type="button" id="guardar" name="guardar">---- Guardar ----</button>');    
                            }
                            ?>   
                                
</form>
<!--Fin botonera guardar y actualizar NO TOCAR-->

                
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
        <script src="<?php echo JSPERFIL, 'jscondicionnecesaria.js' ?>"></script>
        <script src="<?php echo JSPERFIL, 'jscoordenadas.js?v=', (rand()) ?>"></script>
        <script src="<?php echo JSPERFIL, 'jsmensajes.js' ?>"></script>

    <!--    <script src="<?php echo BOOTSTRAP, 'js/jsdeshabilitarf12.js' ?>"></script>-->
        <link href="<?php echo JBOX, 'Source/jBox.css' ?>" rel="stylesheet">
<!--FIN ENLACES - NO TOCAR-->
    </body>


<script> 
    
$(function () { $("[data-toggle='popover']").popover(); });


function paso1(opcion)
    {  
   iniciocoordenadas(11);
    //alert(opcion);
    $('#valoridpaso').val(opcion);
    insertidpaso();
    $('#modpaso1').prop('disabled', true);
    $('#modpaso2').prop('disabled', false);
    }
    
function paso2(opcion)
    {
    //alert(opcion);
    $('#valoridpaso').val(opcion);
    insertidpaso();
    $('#modpaso2').prop('disabled', true);
    $('#modpaso3').prop('disabled', false);
    }
    
function paso3(opcion)
    {
    //alert(opcion);
    $('#valoridpaso').val(opcion);
    insertidpaso();
    mensajedesinco();
    location.href = "../perfilproductivo/c_actualizarpp/fc_actualizarpp?folio="+ <?php echo($folio); ?> + "&idintegrante=0"+ "&doccogestor=" + $('#doccogestor').val() + "&idestacion=11";
    //location.href = "../perfilproductivo/c_ppactualizar/fc_ppactualizar?folio="+ <?php echo($folio); ?> + "&idintegrante=0"+ "&doccogestor=" + $('#doccogestor').val() + "&idestacion=11";     
    }
    
function paso4(opcion)
    {
    //alert(opcion);
    $('#valoridpaso').val(opcion);
    insertidpaso();
    $('#modpaso4').prop('disabled', true);
    $('#modpaso5').prop('disabled', false);
    }
    
function paso5(opcion)
    {
    //alert(opcion);
    $('#valoridpaso').val(opcion);
    insertidpaso();
    $('#modpaso5').prop('disabled', true);
    $('#modpaso6').prop('disabled', false);
    }
    
    function paso6(opcion)
    {
    //alert(opcion);
    //$('#valoridpaso').val(opcion);
    //insertidpaso();
    //$('#modpaso6').prop('disabled', true);
    location.href = "../c_capituloshogar/fc_capituloshogar?folio="+ <?php echo($folio); ?> +"&idintegrante=0";
    }
    
    function paso7(opcion)
    {
    //alert(opcion);
    location.href = "../c_acercaroportunidad/fc_acercaroportunidad?folio="+ <?php echo($folio); ?> +"&idintegrante="+ <?php echo($tdatinte['tidintegrante']); ?> +"&variable=1";
    }
    
    function paso8(opcion)
    {
//    calcularlogros();
//    calcularprivaciones();
    $('#valoridpaso').val(opcion);
    insertidpaso();
    $('#modpaso8').prop('disabled', true);
    $('#modpaso9').prop('disabled', false);
    $('#guardar').prop('disabled', true);
    //$('#Siguiente').prop('disabled', false);
    }
    function paso9(opcion)
    {
    //alert(opcion);

    location.href = "../c_totalmadres/fc_totalmadres?folio="+ <?php echo($folio); ?> +"&idintegrante=0";
    }
function insertidpaso()
   {
    //alert('test');
        $.ajax({
          url: "fc_cerrarpaso",
          type: "GET",
          data: {vfolio: $('#folio').val(), vidpaso: $('#valoridpaso').val(), vestado:1},
          dataType: "html",
          success: function(obj) {
          
        }
       });
   }
   
 //funcion para calcular logros  
 function calcularlogros()
   {
    //alert('test');
        $.ajax({
          url: "fc_calcularlogros",
          type: "GET",
          data: {vfolio: $('#folio').val()},
          dataType: "html",
          success: function(obj) {
              
                      $.ajax({
                                url: "fc_calcularprivaciones",
                                type: "GET",
                                data: {vfolio: $('#folio').val()},
                                dataType: "html",
                                success: function(obj) {
                                        coordenadas(11);
                              }
                             });
          
        }
       });
   }  
   
   
    //funcion para calcular privaciones
// function calcularprivaciones()
//   {
//    //alert('test');
//        $.ajax({
//          url: "fc_calcularprivaciones",
//          type: "GET",
//          data: {vfolio: $('#folio').val()},
//          dataType: "html",
//          success: function(obj) {
//          
//        }
//       });
//   }  
   
   
    
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
                {$('#guardar').prop('disabled', true);
                 $('#anterior').prop('disabled', true);
                 mensajedesinco();
                 calcularlogros();
                });
                //fin de la funcion guardar
                //
                
        
                //esta funcion es para siguiente
                //si las preguntas son por hogar mandar idintegrante en 0
        $("#siguiente").click(function ()
                {
                   // alert('juapis');
                 location.href = "../c_protocolol1e2/fc_protocolol1e2?folio="+ <?php echo($folio); ?> +"&idintegrante=0";
                    
                });
                //fin de la funcion siguiente
                
                //esta funcion es para atras
                //si las preguntas son por hogar mandar idintegrante en 0                
        $("#anterior").click(function ()
                {
                   // alert('juapis');
                location.href = "../c_principalprotocolo/fc_principalprotocolo?folio="+ <?php echo($folio); ?> +"&idintegrante=0"+"&doccogestor="+ $('#doccogestor').val();                  
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
                                 videstacion : '11',
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
/////////////////////////////////////// FIN Funciones que llaman al controlador para guardar y actualizar////////////////////////////////////////////////////////////////////////        

function mensajedesinco()
{
    $('#modalsinco').modal('show');
//    $('#sinco').prop('disabled', true);
//    $('#buscar').prop('disabled', true);
//    $('#volv').prop('disabled', true);   
}

function terminasinco()
{
    $('#modalsinco').modal('hide');
//    $('#sinco').prop('disabled', false);
//    $('#buscar').prop('disabled', false);
//    $('#volv').prop('disabled', false);   
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
     calcularFechaJs(); 
    }
///////////////////////////////// fin nuevo ///////////////////////////////////

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