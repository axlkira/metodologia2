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
                    <h6>Porcentaje logros verdes: <small><?php echo($foexisteporcen['eporceverd']); ?> %</small></h6>
                    <h3 class="text-right col-md-12"><small>Te encuentras en <strong>(L2) Línea de Plan de vida familiar</strong></small></h3>
                    <?php //echo ($midpaso['maximoidpaso']);?>
                    
                    </div>
                </div>
<!--para imprimir el folio y llevarlo-->
                        <input type="text" class="form-control input-sm" id="folio" name="folio" style="display: none" placeholder="Text input" value="<?php echo($folio); ?>">
                        <input type="text" class="form-control input-sm" id="idintegrante" name="idintegrante" style="display: none" placeholder="Text input" value="<?php echo($tdatinte['tidintegrante']); ?>">
                        <input type="text" class="form-control input-sm" id="doccogestor" name="doccogestor" style="display: none" placeholder="Text input" value="<?php echo($doccogestor); ?>">
                        <input type="text" class="form-control input-sm" style="display: none" value="<?php echo($tdatidvisita['tfolio']); ?>">
                        <input type="text" class="form-control input-sm" style="display: none" value="<?php echo($tdatidvisitaAccion['tfolio']); ?>">
<!--fin para imprimir el folio y llevarlo-->

                <div class="form-row col-md-12">
                       <h6>La fecha de inicio de la visita fue el: <strong><input type="text" style="border: aliceblue; width : 220px;" id="fechaIni" disabled value="<?php echo($tdatidvisita['tfecharegistro']); ?>"></strong></h6>
				</div>
                <div class="form-row col-md-12">
                       <h6>El tiempo transcurrido de la visita es de:<strong><input type="text" style="border: aliceblue; width : 20px;" id="TiempoDifD" disabled> Dias <input type="text" style="border: aliceblue;width : 20px;" id="TiempoDifH" disabled> Horas <input type="text" style="border: aliceblue;width : 20px;" id="TiempoDifM" disabled> Minutos y <input type="text" style="border: aliceblue;width : 20px;" id="TiempoDifS" disabled> Segundos</strong></h6>
                </div>

                <form class="form-group" class="form-group col-md-offset-1" name="formulario" id="formulario">

                    <div class="col-md-10">                    
                    <div class="panel panel-default">
                    <div class="panel-heading">
                    <h1 class="panel-title"><span class="badge">Estación 7</span></h1>
                    </div>
                    <div class="panel-body  text-justify">
                     Estación para cerrar el proceso de acompañamiento familiar,  con los hogares que no cumplieron con  condiciones para promoverse del proyecto, a partir del recuento y reflexión del proceso realizado.                  
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
                            <button class="btn btn-default col-md-6" type="button" data-toggle="modal" data-target="#modalAddTracking" id="modpaso1" <?php if ($midpaso['maximoidpaso']=='2609' && $tdatidvisita['tfolio'] <> ''){}else{echo 'disabled';}?>>
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
                                            <h3>Saludo y encuadre</h3>    
                                        </div>
                                        <div class="modal-body">
                                            
                                            <h5 class="modal- text-justify" id="myModalLabel">El Gestor Territorial de Familia saluda de manera cordial y cálida  los integrantes del hogar, hace encuadre del objetivo de la visita,  e indaga por lo trabajo en la visita anterior con el fin de identificar  los avances en el proceso de acompañamiento.</h5>    
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button"  onclick="paso1('2701');" name=cerrar1 id=cerrar1 class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                                        </div>
                                    </div>
                                </div>
                            </div><br>                    
                    <!--fin modal-->
                   
                    
                    
                    <div class="row">
                    <div class="form-group">
                        <div class="col-sm-offset-1 col-sm-10">
                            <button  class="btn btn-default col-md-6" type="button" data-toggle="modal" data-target="#modalAddTracking2" id="modpaso2" <?php if($midpaso['maximoidpaso']=='2701') {echo ('enabled');} else {echo ('disabled');}?>>
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
                                           <h3>Actualización de datos generales</h3>
                                        </div>
                                        <div class="modal-body">
                                        <h5 class="modal- text-justify" id="myModalLabel">El Gestor Territorial de Familia verifica si en el hogar requiere actualizar alguno de sus datos generales, como dirección, número telefónico, barrio y comuna, o algunos de sus integrantes en cuanto estado, tipo de documento y número de identificación.
                                        </h5>    
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button"  onclick="paso2('2702');" name=cerrar2 id=cerrar2 class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                                        </div>
                                    </div>
                                </div>
                            </div><br>                    
                    <!--fin modal-->
         
                    
                    <div class="row">
                    <div class="form-group">
                        <div class="col-sm-offset-1 col-sm-10">
                            <button  class="btn btn-default col-md-6" type="button" data-toggle="modal" data-target="#modalAddTracking3" id="modpaso3" <?php if($midpaso['maximoidpaso']=='2702') {echo ('enabled');} else {echo ('disabled');}?>>
                                <p class="text-left"><span class="badge">Paso 3</span> ---- Validación de logros ---</p>
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
                                            Validación de logros en las dimensiones del desarrollo y acercamiento de oportunidades:
                                            </h3>    
                                        </div>
                                        <div class="modal-body">
                                            <!--<input type="text" class="form-control input-sm" id="valoridpaso" name="valoridpaso"  style="display:none" placeholder="Text input" value="">-->
                                        <h5 class="modal- text-justify" id="myModalLabel">En este paso  el Gestor Territorial de Familia debe remitirse al diagnóstico actual del hogar con el fin de validar aquellos que estén por cumplir o gestionar, con el fin de  revisar si hay cambios relevantes que deban ser registrados, o en caso contrario para acercar oportunidades que  apunten a las necesidades del hogar y a la movilización de los logros pendientes por alcanzar. Este paso es el de mayor detalle en la  visita, ya que la validación se hace integrante por integrante, incluyendo también los logros a nivel de  hogar, lo que implica la retroalimentación sobre el estado del proceso, el diagnóstico de logros y la corresponsabilidad en el proceso de acompañamiento. <br><br>
                                        </h5>    
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button"  onclick="paso3('2703');" name=cerrar3 id=cerrar3 class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                                        </div>
                                    </div>
                                </div>
                            </div><br>                    
                    <!--fin modal-->
                                        
                    <div class="row">
                    <div class="form-group">
                        <div class="col-sm-offset-1 col-sm-10">
                            <button  class="btn btn-default col-md-6" type="button" data-toggle="modal" data-target="#modalAddTracking4" id="modpaso4" <?php if($midpaso['maximoidpaso']=='2703') {echo ('enabled');} else {echo ('disabled');}?>>
                                <p class="text-left"><span class="badge">Paso 4</span> ------ Acercamiento de oportunidades ------</p>
                            </button>
                        </div>
                    </div>
                    </div>
                    <!--inicio modal-->
                            <div class="modal fade" id="modalAddTracking4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h3>Validación del acercamiento de oportunidades</h3>    
                                        </div>
                                        <div class="modal-body">
                                            <!--<input type="text" class="form-control input-sm" id="valoridpaso" name="valoridpaso"  style="display:none" placeholder="Text input" value="">-->
                                        <h5 class="modal- text-justify" id="myModalLabel">En este paso  el Gestor Territorial de Familia debe remitirse al diagnóstico actual del hogar con el fin de validar aquellos que estén por cumplir o gestionar, con el fin de  revisar si hay cambios relevantes que deban ser registrados, o en caso contrario para acercar oportunidades que  apunten a las necesidades del hogar y a la movilización de los logros pendientes por alcanzar. Este paso es el de mayor detalle en la  visita, ya que la validación se hace integrante por integrante, incluyendo también los logros a nivel de  hogar, lo que implica la retroalimentación sobre el estado del proceso, el diagnóstico de logros y la corresponsabilidad en el proceso de acompañamiento.</h5>    
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button"  onclick="paso4('2704');" name=cerrar4 id=cerrar4 class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                                        </div>
                                    </div>
                                </div>
                            </div><br>                    
                    <!--fin modal-->
                    
                    <!--inicio boton para definir un paso-->
                    <div class="row">
                    <div class="form-group">
                        <div class="col-sm-offset-1 col-sm-10">
                            <button  class="btn btn-default col-md-6 text-left" type="button" data-toggle="modal" data-target="#modalAddTracking5" id="modpaso5" <?php if($midpaso['maximoidpaso']=='2704') {echo ('enabled');} else {echo ('disabled');}?>>
                                <p class="text-left"><span class="badge">Paso 5</span> ------ Actualización Ficha del hogar ------</p>
                            </button>
                        </div>
                    </div>
                    </div>
                    <!--fin boton para definir un paso-->
                    <!--inicio modal paso anterior-->
                            <div class="modal fade" id="modalAddTracking5" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h3>Actualización Ficha del hogar</h3>    
                                        </div>
                                        <div class="modal-body">
                                        <h5 class="modal- text-justify" id="myModalLabel"> El Gestor Territorial de Familia debe actualizar la Ficha del hogar, para   registrar lo abordado en la visita en torno al diagnóstico de logros, avances, novedades, fortalezas y/o dificultades evidenciadas en el proceso de acompañamiento, además de las estrategias desarrolladas de su parte para aportar al mejoramiento de la calidad de vida del hogar.                                   </h5>    
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button"  onclick="paso5('2705');" name=cerrar5 id=cerrar5 class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                                        </div>
                                    </div>
                                </div>
                            </div><br>                    
                    <!--fin modal-->
                    
                     <!--inicio boton para definir un paso-->
                    <div class="row">
                    <div class="form-group">
                        <div class="col-sm-offset-1 col-sm-10">
                            <button  class="btn btn-default col-md-6" type="button" data-toggle="modal" data-target="#modalAddTracking6" id="modpaso6" <?php if($midpaso['maximoidpaso']=='2705') {echo ('enabled');} else {echo ('disabled');}?>>
                               <p class="text-left"><span class="badge">Paso 6</span> ------ Cierre ------</p>
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
                                           <h3>Cierre:</h3>    
                                        </div>
                                        <div class="modal-body">
                                       <div class="panel-body  text-justify">Para finalizar la visita de acompañamiento familiar, el Gestor Territorial de Familia indaga con el hogar su percepción sobre la visita, despeja inquietudes que se puedan presentar y procede con el diligenciamiento de la planilla de efectividad.
                    </div>             </div>
                                        <div class="modal-footer">
                                            <button type="button"  onclick="paso6('2706');" name="cerrar6" id="cerrar6" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                                        </div>
                                    </div>
                                </div>
                            </div><br>                    
                    <!--fin modal-->
                    
                    
                    <!--inicio boton para definir un paso-->
            <!--        <div class="row">
                    <div class="form-group">
                        <div class="col-sm-offset-1 col-sm-10">
                            <button  class="btn btn-default col-md-6" type="button" data-toggle="modal" data-target="#modalAddTracking7" id="modpaso7" <?php if($midpaso['maximoidpaso']=='2706') {echo ('enabled');} else {echo ('disabled');}?>>
                               <p class="text-left"><span class="badge">Paso 7</span> ------ Actualización historia del hogar ------</p>
                            </button>
                        </div>
                    </div>
                    </div> -->
                    <!--fin boton para definir un paso-->
                    <!--inicio modal paso anterior-->
                   <!--         <div class="modal fade" id="modalAddTracking7" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h3>Actualización historia del hogarr</h3>    
                                        </div>
                                        <div class="modal-body">
                                        <h5 class="modal- text-justify" id="myModalLabel">
                                            Registrar los avances y dificultades evidenciados durante el proceso de acompañamiento familiar, los  temas trabajados alrededor de los logros, privaciones y el mejoramiento de las relaciones familiares. La actualización debe realizarse con mayor detalle en esta  visita, considerando que se realiza un cierre y es fundamental  evidenciar el proceso llevado  a cabo durante el acompañamiento, por parte del cogestor de familia.
                                        </h5>    
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button"  onclick="paso7('2607');" name="cerrar7" id="cerrar7" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                                        </div>
                                    </div>
                                </div>
                            </div><br>      -->              
                    <!--fin modal-->
                    
        <!--            <div class="row">
                    <div class="form-group">
                        <div class="col-sm-offset-1 col-sm-10">
                            <button  class="btn btn-default col-md-6" type="button" data-toggle="modal" data-target="#modalAddTracking10" id="modpaso10" <?php if($midpaso['maximoidpaso']<>'2707') {echo ('enabled');} else {echo ('disabled');}?>>
                               <p class="text-left"><span class="badge">Paso 8</span> --- Verificacion Ingresos del hogar--</p>
                            </button>
                        </div>
                    </div>
                    </div> -->
                    <!--inicio modal paso anterior-->
                     <!--       <div class="modal fade" id="modalAddTracking10" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h3>Verificacion Ingresos del hogars</h3>    
                                        </div>
                                        <div class="modal-body">
                                        <h5 class="modal- text-justify" id="myModalLabel">
                                            En este paso se  debe indagar por los ingresos del hogar,   mediante las siguientes preguntas orientadoras ¿En el hogar los adultos se encuentran empleados o perciben algún ingreso? ¿Cuáles son los ingresos del hogar, incluyendo subsidios? Una vez se tenga y calcule el monto de los ingresos, sumarlos y dividir el resultado obtenido sobre el número total de integrantes del hogar. Si el monto es mayor a $265.559 ingreso per cápita, se registra “Si” como respuesta  a la pregunta de ingresos y “No” en el caso contrario.
                                        </h5>    
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button"  onclick="paso10('2608');" name="cerrar10" id="cerrar10" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                                        </div>
                                    </div>
                                </div>
                            </div><br> -->
                    
                    
                    
                    
                    
                    <!--inicio boton para definir un paso-->
             <!--       <div class="row">
                    <div class="form-group">
                        <div class="col-sm-offset-1 col-sm-10">
                            <button  class="btn btn-default col-md-6" type="button" data-toggle="modal" data-target="#modalAddTracking9" id="modpaso9" <?php if($midpaso['maximoidpaso']<>'2708') {echo ('enabled');} else {echo ('disabled');}?>>
                                <p class="text-left"><span class="badge">Paso 9</span> ------ Cierre de la visita ------</p>
                            </button>
                        </div>
                    </div>
                    </div> -->
                    <!--fin boton para definir un paso-->
                    <!--inicio modal paso anterior-->
                   <!--         <div class="modal fade" id="modalAddTracking9" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h3>Cierre de la visita (Evaluación)</h3>    
                                        </div>
                                        <div class="modal-body">
                                        <h5 class="modal- text-justify" id="myModalLabel">En este espacio el Cogestor de familia,  realiza la evaluación de la visita haciendo uso de la DTR, sintetiza lo trabajado en la visita e invita al hogar a estar motivado  para  el alcance de sus metas, mejoramiento de la calidad de vida y sus relaciones familiares.
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button"  onclick="paso9('2609');" name="cerrar8" id="cerrar8" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                                        </div>
                                    </div>
                                </div>
                            </div><br>    -->                
                    <!--fin modal-->







<!-- ////////////////////////////////////////////////// nuevo informativo////////////////////////////////////////////-->
 <!--inicio boton para definir un paso-->
<!-- <div class="row">
                    <div class="form-group">
                        <div class="col-sm-offset-1 col-sm-10">
                            <button  class="btn btn-default col-md-6" type="button" data-toggle="modal" data-target="#modalAddTracking0Accion" id="modpaso0Accion" <?php if ($midpaso['maximoidpaso'] < '2706' || $tdatidvisitaAccion['tfolio'] <> ''){echo 'disabled';}else {echo 'enabled';}?>>
                                <p class="text-left"><span class="badge">Paso Informativo</span> ------ Acción educativa ------</p>
                            </button>
                           </div>
                    </div>
</div>-->
<!--fin boton para definir un paso-->
                    <!--inicio modal paso anterior-->
                            <div class="modal fade" id="modalAddTracking0Accion" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"  data-backdrop="static">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                    <div class="modal-body">
                                       <div class="panel-body  text-justify">

                                       <!--inicio radio una sola seleccion -->
      <div class="row">
      <div id="p0divAccion" name="p0divAccion" class="form-group col-md-12 form-group-sm has-error" ><label class="control-label">¿En esta visita se hizo "Acción Educativa"?</label>
      <div class="radio"><label><input type="radio" name="pregunta0Accion" id="pregunta0Accion" onclick="validarcualmotivoAccion('Si','valorp0Accion');" value="Si">Si</label></div>
      <div class="radio"><label><input type="radio" name="pregunta0Accion" id="pregunta00Accion" onclick="validarcualmotivoAccion('No','valorp0Accion');" value="No">No</label></div>
      <input type="text" class="form-control" id="valorp0Accion" name="valorp0Accion" style="display:none" placeholder="Text input" value="">
      </div>
      </div> 
      <!--fin radio una sola seleccion -->

                                       <div class="row" id="divcualmotivoAccion" name="divcualmotivoAccion" style="display:none">
                                        <div class="col-sm-12" id="cualmotivodivAccion" name="cualmotivodivAccion"><label class="control-label">¿Cuál fue la temática desarrollada?</label>
                                        
                                        
                                        
                            <select class="form-control input-sm" id="vcualmotivoAccion" name="vcualmotivoAccion" onchange="validarpaso0Accion('vcualmotivoAccion');">
                            <option value="">Seleccione una opción</option>    
                            <option value="Convivencia familiar">Convivencia familiar</option>
                            <option value="Participacion democratica en la resolucion de conflictos">Participación democrática en la resolución de conflictos</option>
                            <option value="Toma de decisiones en la familia">Toma de decisiones en la familia</option>
                            <option value="Reconocimiento de los derechos y red de apoyo institucional">Reconocimiento de los derechos y red de apoyo institucional</option>
                            <option value="Equidad de genero en la familia">Equidad de género en la familia</option>
                            <option value="Prevencion del embarazo adolescente y subsecuente">Prevención del embarazo adolescente y subsecuente</option>
                            <option value="En familia Jugamos">En familia Jugamos</option>
                            <option value="Mi familia, mi lugar seguro">Mi familia, mi lugar seguro</option>
                            <option value="Educacion financiera">Educación financiera</option>

                            <option value="Distribucion equitativa del cuidado en la familia">Distribución equitativa del cuidado en la familia</option>
                            <option value="Enganchemonos con la vida">Enganchémonos con la vida</option>
                            <option value="Familia cuidadora del medio ambiente">Familia cuidadora del medio ambiente</option>
                            </select>
                                        </div>
                                        </div><br>


                                        
                                        
                                        <div class="row">
                                        <div><center>
                                        <button type="button"  name=guardapaso0Accion id=guardapaso0Accion disabled="disabled" class="btn btn-success" >Guardar</button>
                                        <button type="button"  onclick="paso0Accion();" disabled="disabled" name="cerrar0Accion" id="cerrar0Accion" class="btn btn-danger" data-dismiss="modal">Continuar</button>
                                        <button type="button" class="btn btn-gray" data-dismiss="modal" name="Close0Accion" id="Close0Accion" aria-label="Close">Cerrar</button></center>
                                        </div>    
                                        </div>
                                    
                                      </div>            
                                     </div>
                                     
                                    </div>
                                </div>
                            </div><br>                    
                    <!--fin modal-->
<!-- /////////////////////////////////////////////////////////////////// fin nuevo informativo////////////////////////////////////// -->
<!--Inicio Modal imagen cargando-->
<div class="modal fade bs-example-modal-sm" id="modalsinco" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" data-backdrop="static">
                      <div class="modal-dialog modal-sm">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title" id="myModalLabel"><img src="<?php echo IMAGEN, 'cargando.gif'; ?>" alt="Brand"> Calculando el porcentaje de logros </h4>
                            </div>
                            <div class="modal-body">

                            Por favor espere un momento.
                            </div>
                        </div>
                      </div>
                    </div>
<!--Fin Modal-->


<input type="text" class="form-control input-sm" id="valoridpaso" name="valoridpaso"  style="display:none" placeholder="Text input" value="">

<!--inicio botonera guardar y actualizar NO SE TOCA-->

                           <?php if($midpaso['maximoidpaso'] <> '2706')
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
    iniciocoordenadas(27); // inserta la informacion en la tabla t_protocoloinicioestacion    
    //alert(opcion);
    $('#valoridpaso').val(opcion);
    insertidpaso();
    $('#modpaso1').prop('disabled', true);
    $('#modpaso2').prop('disabled', false);
    }
    
    function paso2(opcion) // va directamente a la vista de actualizar 
    {
    $('#valoridpaso').val(opcion);
    insertidpaso();
    mensajedesinco();
    location.href = "../perfilproductivo/c_actualizarpp/fc_actualizarpp?folio="+ <?php echo($folio); ?> + "&idintegrante=0"+ "&doccogestor=" + $('#doccogestor').val() + "&idestacion=27";
    //location.href = "../perfilproductivo/c_actualizarpp/fc_actualizarpp?folio="+ $('#folio').val() + "&idintegrante=0"+ "&doccogestor=" + $('#doccogestor').val()+ "&idestacion=27";               
    }

    function paso3(opcion)
    {
        $('#modalsinco').modal('show');
        location.href = "../logros/c_dimensiones/fc_dimensiones?folio="+ $('#folio').val() + "&idintegrante=0"+ "&doccogestor=" + $('#doccogestor').val()+ "&idestacion=27";     
   // location.href = "../linea2estacion1/c_metahogar/fc_metahogar?folio="+ $('#folio').val() + "&idintegrante=0"+ "&doccogestor=" + $('#doccogestor').val()+ "&idestacion=26";       
    }
    
    
   

function paso4(opcion)
 {
    location.href = "../c_acercaroportunidad/fc_acercaroportunidad?folio="+ $('#folio').val() + "&idintegrante="+ <?php echo($tdatinte['tidintegrante']); ?> +"&doccogestor=" + $('#doccogestor').val()+ "&variable=10";     
 }
    
function paso5(opcion)
    {
    location.href = "../historiahogar/c_historiahogar2/fc_historiahogar2?folio="+ $('#folio').val() + "&idintegrante=0"+ "&doccogestor=" + $('#doccogestor').val()+ "&idestacion=27";    
    //alert(opcion);
   //location.href = "../c_acercaroportunidad/fc_acercaroportunidad?folio="+ $('#folio').val() + "&idintegrante=0"+ "&doccogestor=" + $('#doccogestor').val()+ "&variable=9";  
    }

    function paso6(opcion)
    {
    $('#valoridpaso').val(opcion);
    insertidpaso();
    $('#modpaso6').prop('disabled', true);
    //$('#modpaso0Accion').prop('disabled', false);
    $('#guardar').prop('disabled', false);
    }
   
 //   function paso10(opcion)
 //   {
 //   location.href = "../condicionnec/c_ingresos2/fc_ingresos2?folio="+ $('#folio').val() + "&idintegrante=0"+ "&doccogestor=" + $('#doccogestor').val()+ "&idestacion=26"; 
//    
 //   }
    
    
//     function paso9(opcion)
//    {
    //alert(opcion);
//    $('#valoridpaso').val(opcion);
//    insertidpaso();
//    $('#modpaso6').prop('disabled', true);
//    $('#modpaso7').prop('disabled', false);
//    }
    
//function paso6(opcion)
//    {
//  location.href = "../linea2estacion1/c_avanceproceso/fc_avanceproceso?folio="+ $('#folio').val() + "&idintegrante=0"+ "&doccogestor=" + $('#doccogestor').val()+ "&idestacion=22"; 
//    }
    
//    function paso7(opcion)
//    {
//    location.href = "../historiahogar/c_historiahogar2/fc_historiahogar2?folio="+ $('#folio').val() + "&idintegrante=0"+ "&doccogestor=" + $('#doccogestor').val()+ "&idestacion=26";
//    
//    insertarfolioexitoso();
//     location.href = "../casoexitoso/c_casoexitoso/fc_casoexitoso?folio="+ $('#folio').val() +"&idintegrante="+$('#idintegrante').val()+"&doccogestor="+$('#doccogestor').val()+"&idestacion=22";  
//    }
    
//    function paso8(opcion)
//    {
//    location.href = "../historiahogar/c_validacioneerf2/fc_validacioneerf2?folio="+ $('#folio').val() + "&idintegrante=0"+ "&doccogestor=" + $('#doccogestor').val()+ "&idestacion=26";
//    
//    }
   
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
        calcularFechaJs();
    //funcion que controla el cierre de los pasos de la estación
        
                $("#guardar").click(function ()
                {
                $('#guardar').prop('disabled', true);
                $('#anterior').prop('disabled', true);
                mensajedesinco();        
                coordenadas(27);
                //calcularcondicion(27);
                window.opener.document.location="http://localhost/metodologia2msol/index.php/c_principalhogar/fc_principalhogar"; 
                
                });
                //fin de la funcion guardar
                //
                

 
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
                location.href = "../c_principalprotocolo/fc_principalprotocolo?folio="+ $('#folio').val() +"&idintegrante="+$('#idintegrante').val()+"&doccogestor="+$('#doccogestor').val();                  
                });
                //fin de la funcion atras
                
               //NO TOCAR - voler a capitulos                
                $("#capitulos").click(function ()
                {
                   // alert('juapis');
                location.href = "../c_capituloshogar/fc_capituloshogar?folio="+ $('#folio').val() +"&idintegrante="+$('#idintegrante').val();                  
                });
                //fin voler a capitulos          


///////////////////////////// nuevo ////////////////
///////////////////////////// guarda paso cero /////////////////////////////
$("#guardapaso0").click(function ()
        {
                        $.ajax({
                          url: "fc_actualizarep0",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),
                                 videstacion : '27',
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
///////////////////////////// nuevo Acciones ////////////////
///////////////////////////// guarda paso cero /////////////////////////////
$("#guardapaso0Accion").click(function ()
        {
                        $.ajax({
                          url: "fc_actualizarep0Accion",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),
                                 videstacion : '27',
                                 vvalorp0Accion : $('#valorp0Accion').val(),
                                 vvcualmotivoAccion : $('#vcualmotivoAccion').val(),
                                 vdoccogestor : $('#doccogestor').val()},    
                          dataType: "html",
                          success : function(obj){                      
                            mensajito('MENSAJE','La informacion se guardó correctamente');
                            $('#guardapaso0Accion').prop('disabled', true);
                            $('#cerrar0Accion').prop('disabled', false);
                            $('#Close0Accion').prop('disabled', true);
                          }
                        });                    
        });

////////////////////////////// fin guarda paso cero //////////////////////////
///////////////////////// fin nuevo Acciones ///////////////////////////////////////
                                   
    });
    
    function mensajedesinco()
{
    $('#modalsinco').modal('show');
//    $('#sinco').prop('disabled', true);
//    $('#buscar').prop('disabled', true);
//    $('#volv').prop('disabled', true);   
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
function validarcualmotivoAccion(opcion,campoval)
{
    $('#' + campoval).val(opcion);
   
    if(($('#'+ campoval).val() == 'No'))
   {
    $('#p0divAccion').removeClass('has-error');
    $('#pregunta0Accion').removeClass('has-error');
    $('#divcualmotivoAccion').hide();
    $('#vcualmotivoAccion').val('');
    $('#cualmotivodivAccion').removeClass('has-error');            
    $('#guardapaso0Accion').prop('disabled', false);
    $('#cerrar0Accion').prop('disabled', true);
   
    }
   else
   {
    $('#p0divAccion').removeClass('has-error');
    $('#pregunta0Accion').removeClass('has-error');

    $('#divcualmotivoAccion').show();
    $('#cualmotivodivAccion').addClass('has-error');            
    $('#guardapaso0Accion').prop('disabled', true);
    $('#cerrar0Accion').prop('disabled', true);
   }
}

function validarpaso0Accion()
{
   if($('#vcualmotivoAccion').val() == '')
   {
       $('#cualmotivodivAccion').addClass('has-error');
       $('#guardapaso0Accion').prop('disabled', true);
       $('#cerrar0Accion').prop('disabled', true);
    }
   else
   {
       $('#cualmotivodivAccion').removeClass('has-error');
       $('#guardapaso0Accion').prop('disabled', false);
       $('#cerrar0Accion').prop('disabled', true);
   }
}
function paso0Accion()
    {
    $('#modpaso0Accion').prop('disabled', true);
    $('#guardar').prop('disabled', false);
    }
///////////////////////////////// fin nuevo acciones///////////////////////////////////
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