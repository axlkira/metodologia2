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
                    <h3 class="text-right col-md-12"><small>Te encuentras en <strong>Línea de cierre</strong></small></h3>
                    <?php //echo ($midpaso['maximoidpaso']);?>
                    
                    </div>
                </div>
<!--para imprimir el folio y llevarlo-->
                        <input type="text" class="form-control input-sm" id="folio" name="folio" style="display: none" placeholder="Text input" value="<?php echo($folio); ?>">
                        <input type="text" class="form-control input-sm" id="idintegrante" name="idintegrante" style="display: none" placeholder="Text input" value="<?php echo($tdatinte['tidintegrante']); ?>">
                        <input type="text" class="form-control input-sm" id="doccogestor" name="doccogestor" style="display: none" placeholder="Text input" value="<?php echo($doccogestor); ?>">
                        <input type="text" class="form-control input-sm" style="display:none" value="<?php echo($tdatidvisita['tfolio']); ?>">
                        <input type="text" class="form-control input-sm" style="display:none" value="<?php echo($tdatidvisitaAccion['tfolio']); ?>">
<!--fin para imprimir el folio y llevarlo-->

                <div class="form-row col-md-12">
                       <h6>La fecha de inicio de la visita fue el: <strong><input type="text" style="border: aliceblue; width : 220px;" id="fechaIni" disabled value="<?php echo($tdatidvisita['tfecharegistro']); ?>"></strong></h6>
				</div>
                <div class="form-row col-md-12">
                       <h6>El tiempo transcurrido de la visita es de:<strong><input type="text" style="border: aliceblue; width : 20px;" id="TiempoDifD" disabled> Dias <input type="text" style="border: aliceblue;width : 20px;" id="TiempoDifH" disabled> Horas <input type="text" style="border: aliceblue;width : 20px;" id="TiempoDifM" disabled> Minutos y <input type="text" style="border: aliceblue;width : 20px;" id="TiempoDifS" disabled> Segundos</strong></h6>
                </div>

                <form class="form-group" class="form-group col-md-offset-1" name="formulario" id="formulario">

                    <div class="col-md-10">                    
                    <div class="panel panel-success">
                    <div class="panel-heading">
                    <h1 class="panel-title"><span class="badge">Estación de cierre.</span></h1>
                    </div>
                    <div class="panel-body  text-justify">
                    Visita de estación de cierre.
                    </div>
                    </div>
                    </div>

<!-- ////////////////////////////////////////////////// nuevo ////////////////////////////////////////////-->
 <!--inicio boton para definir un paso-->
 <div class="row">
                    <div class="form-group">
                        <div class="col-sm-offset-1 col-sm-10">
                            <button  class="btn btn-success col-md-6" type="button" data-toggle="modal" data-target="#modalAddTracking0" id="modpaso0" <?php if ($tdatidvisita['tfolio'] <> ''){echo 'disabled';}else {echo 'enabled';}?>>
                               <p class="text-left"><span class="badge">Paso 0</span> ----- Realización de la visita</p>
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
                            <button class="btn btn-success col-md-6" type="button" data-toggle="modal" data-target="#modalAddTracking" id="modpaso1" <?php if ($midpaso['maximoidpaso']=='9006' && $tdatidvisita['tfolio'] <> ''){}else{echo 'disabled';}?>>
                                <p class="text-left"><span class="badge">Paso 1</span> ----- Saludo y Encuadre de cierre Administrativo</p> 
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
                                            <h3>Saludo y Encuadre de cierre Administrativo:</h3>    
                                        </div>
                                        <div class="modal-body">
                                            
                                            <h5 class="modal- text-justify" id="myModalLabel">El profesional saluda a los integrantes del hogar, se presenta en caso de cambio de profesional y/o recuerda su nombre y profesión. Indaga por lo trabajado en la visita anterior y los compromisos pendientes por cumplir. Así mismo, realiza la trazabilidad del proceso de acompañamiento familiar, dejando claro que es la última visita a realizar en tanto se ha llegado al cierre administrativo del proceso de acompañamiento familiar, en tanto que si no se logró cumplir la condición suficiente para el egreso, se ha llegado a la última visita de la estructura metodológica diseñada.</h5>    
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button"  onclick="paso1('9101');" name=cerrar1 id=cerrar1 class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                                        </div>
                                    </div>
                                </div>
                            </div><br>                    
                    <!--fin modal-->
                   
                    
                    
                    <div class="row">
                    <div class="form-group">
                        <div class="col-sm-offset-1 col-sm-10">
                            <button  class="btn btn-success col-md-6" type="button" data-toggle="modal" data-target="#modalAddTracking2" id="modpaso2" <?php if($midpaso['maximoidpaso']=='9101') {echo ('enabled');} else {echo ('disabled');}?>>
                                <p class="text-left"><span class="badge">Paso 2</span> ----- Actualización de datos</p>
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
                                        <h5 class="modal- text-justify" id="myModalLabel"> Antes de iniciar con el desarrollo de la visita, el profesional verifica si el hogar o alguno de sus integrantes requiere actualizar sus datos generales, a excepción de la fecha de nacimiento y el sexo, indicando la importancia de mantener la comunicación entre el hogar y la Unidad Familia Medellín
                                        </h5>    
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button"  onclick="paso2('9102');" name=cerrar2 id=cerrar2 class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                                        </div>
                                    </div>
                                </div>
                            </div><br>                    
                    <!--fin modal-->
         
                    
                    <div class="row">
                    <div class="form-group">
                        <div class="col-sm-offset-1 col-sm-10">
                            <button  class="btn btn-success col-md-6" type="button" data-toggle="modal" data-target="#modalAddTracking3" id="modpaso3" <?php if($midpaso['maximoidpaso']=='9102') {echo ('enabled');} else {echo ('disabled');}?>>
                                <p class="text-left"><span class="badge">Paso 3</span> ----- Repaso del proceso de acompañamiento Familiar</p>
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
                                            Repaso del proceso de acompañamiento Familiar en cuanto a Líneas y Estaciones:
                                            </h3>    
                                        </div>
                                        <div class="modal-body">
                                            <!--<input type="text" class="form-control input-sm" id="valoridpaso" name="valoridpaso"  style="display:none" placeholder="Text input" value="">-->
                                        <h5 class="modal- text-justify" id="myModalLabel">El profesional, realiza el recuento y trazabilidad del proceso de acompañamiento familiar, en el que debe de recordar las líneas y estaciones con sus respectivos objetivos hasta llegar al cierre del proceso, recordará el proceso de acercamiento de oportunidades y la corresponsabilidad del hogar para lograr superar sus condiciones y dificultades presentadas ante la capacidad y autonomía familiar instalada.<br><br>
                                        </h5>    
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button"  onclick="paso3('9103');" name=cerrar3 id=cerrar3 class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                                        </div>
                                    </div>
                                </div>
                            </div><br>                    
                    <!--fin modal-->
                                        
                    <div class="row">
                    <div class="form-group">
                        <div class="col-sm-offset-1 col-sm-10">
                            <button  class="btn btn-success col-md-6" type="button" data-toggle="modal" data-target="#modalAddTracking4" id="modpaso4" <?php if($midpaso['maximoidpaso']=='9103') {echo ('enabled');} else {echo ('disabled');}?>>
                                <p class="text-left"><span class="badge">Paso 4</span> ----- Espacio Reflexivo</p>
                            </button>
                        </div>
                    </div>
                    </div>
                    <!--inicio modal-->
                            <div class="modal fade" id="modalAddTracking4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h3>Espacio Reflexivo</h3>    
                                        </div>
                                        <div class="modal-body">
                                            <!--<input type="text" class="form-control input-sm" id="valoridpaso" name="valoridpaso"  style="display:none" placeholder="Text input" value="">-->
                                        <h5 class="modal- text-justify" id="myModalLabel"> 
                                        El profesional, realiza seguimiento y evaluación con la familia del proceso de acompañamiento familiar, en el que le permita a la familia, expresar sus avances como también identificar sus dificultades y capacidades para continuar trabajando en familia  la superación de las diferentes situaciones y crisis familiares que se puedan presentar, recordando en ellos su capacidad de agencia y facilitadores de su propio desarrollo.                                             
                                        </h5>    
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button"  onclick="paso4('9104');" name=cerrar4 id=cerrar4 class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                                        </div>
                                    </div>
                                </div>
                            </div><br>                    
                    <!--fin modal-->
                    
                    <!--inicio boton para definir un paso-->
                    <div class="row">
                    <div class="form-group">
                        <div class="col-sm-offset-1 col-sm-10">
                            <button  class="btn btn-success col-md-6 text-left" type="button" data-toggle="modal" data-target="#modalAddTracking5" id="modpaso5" <?php if($midpaso['maximoidpaso']=='9104') {echo ('enabled');} else {echo ('disabled');}?>>
                                <p class="text-left"><span class="badge">Paso 5</span> ----- Acercamiento de oportunidades</p>
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
                                            <h3>Acercamiento de oportunidades:</h3>    
                                        </div>
                                        <div class="modal-body">
                                        <h5 class="modal- text-justify" id="myModalLabel">Se realiza el proceso de acercamiento de oportunidades vigentes y actualizadas en el sistema de información, de tal manera que facilite y permita la movilización de los logros pendientes por alcanzar.</h5>    
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button"  onclick="paso5('9105');" name=cerrar5 id=cerrar5 class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                                        </div>
                                    </div>
                                </div>
                            </div><br>                    
                    <!--fin modal-->










<!--inicio boton para definir un paso-->
<div class="row">
                    <div class="form-group">
                        <div class="col-sm-offset-1 col-sm-10">
                            <button  class="btn btn-success col-md-6" type="button" data-toggle="modal" data-target="#modalAddTracking6" id="modpaso6" <?php if($midpaso['maximoidpaso']=='9105') {echo ('enabled');} else {echo ('disabled');}?>>
                                <p class="text-left"><span class="badge">Paso 6</span> ----- Aplicación ERFAM y estrategias de autonomía</p>
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
                                            <h3>Aplicación de la escala de evaluación de relaciones familiares y Estrategias de autonomia</h3>    
                                        </div>
                                        <div class="modal-body">
                                        <h5 class="modal- text-justify" id="myModalLabel"> 
                                        
                                        </h5>    
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button"  onclick="paso6('9106');" name=cerrar6 id=cerrar6 class="btn btn-warning" data-dismiss="modal">Cerrar</button>
                                        </div>
                                    </div>
                                </div>
                            </div><br>                    
                    <!--fin modal-->















                     <!--inicio boton para definir un paso-->
                    <div class="row">
                    <div class="form-group">
                        <div class="col-sm-offset-1 col-sm-10">
                            <button  class="btn btn-success col-md-6" type="button" data-toggle="modal" data-target="#modalAddTracking7" id="modpaso7" <?php if($midpaso['maximoidpaso']=='9106') {echo ('enabled');} else {echo ('disabled');}?>>
                               <p class="text-left"><span class="badge">Paso 7</span> ----- Lectura y firma del Formato de cierre administrativo</p>
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
                                           <h3>Lectura y firma del Formato de cierre administrativo:</h3>    
                                        </div>
                                        <div class="modal-body">
                                       <div class="panel-body  text-justify">
                                       El profesional debe de realizar la lectura y explicación del formato de cierre administrativo, en donde se debe dejar claro a la familia que ante la  firma del mismo, no se volverá a realizar más visitas de acompañamiento familiar.</div>   
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button"  onclick="paso7('9107');" name="cerrar7" id="cerrar7" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                                        </div>
                                    </div>
                                </div>
                            </div><br>                    
                    <!--fin modal-->
                    
                    
                    <!--inicio boton para definir un paso-->
                    <div class="row">
                    <div class="form-group">
                        <div class="col-sm-offset-1 col-sm-10">
                            <button  class="btn btn-success col-md-6" type="button" data-toggle="modal" data-target="#modalAddTracking8" id="modpaso8" <?php if($midpaso['maximoidpaso']=='9107') {echo ('enabled');} else {echo ('disabled');}?>>
                               <p class="text-left"><span class="badge">Paso 8</span> ----- Evaluación y cierre</p>
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
                                            <h3>Evaluación y cierre:</h3>    
                                        </div>
                                        <div class="modal-body">
                                        <h5 class="modal- text-justify" id="myModalLabel">Para finalizar la visita de acompañamiento familiar, el profesional  indaga por la evaluación cualitativa de la visita realizada, despejará duda e inquietudes que se puedan presentar y procederá al diligenciamiento de la planilla de efectividad.
                                        </h5>    
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button"  onclick="paso8('9108');" name="cerrar8" id="cerrar8" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                                        </div>
                                    </div>
                                </div>
                            </div><br>                    
                    <!--fin modal-->
                    
                    
                    
                    
 

<!-- ////////////////////////////////////////////////// nuevo informativo////////////////////////////////////////////-->
 <!--inicio boton para definir un paso-->
 <div class="row">
                    <div class="form-group">
                        <div class="col-sm-offset-1 col-sm-10">
                            <button  class="btn btn-success col-md-6" type="button" data-toggle="modal" data-target="#modalAddTracking0Accion" id="modpaso0Accion" <?php if ($midpaso['maximoidpaso'] < '9108' || $tdatidvisitaAccion['tfolio'] <> ''){echo 'disabled';}else {echo 'enabled';}?>>
                                <p class="text-left"><span class="badge">Paso Informativo</span> ------ Acción educativa ------</p>
                            </button>
                           </div>
                    </div>
                    </div>
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
                            <option value="La importancia de construir vínculos sanos, momento 1">La importancia de construir vínculos sanos, momento 1</option>
                            <option value="La importancia de construir vínculos sanos, momento 2">La importancia de construir vínculos sanos, momento 2</option>
                            <option value="El regalo mes de la familia">El regalo mes de la familia</option>
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








<input type="text" class="form-control input-sm" id="valoridpaso" name="valoridpaso"  style="display:none" placeholder="Text input" value="">

<!--inicio botonera guardar y actualizar NO SE TOCA-->

                           <?php if($tdatidvisitaAccion['tfolio'] == '')
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
    iniciocoordenadas(91);    
    //alert(opcion);
    $('#valoridpaso').val(opcion);
    insertidpaso();
    $('#modpaso1').prop('disabled', true);
    $('#modpaso2').prop('disabled', false);
    }
        
    function paso2(opcion)
    {
    $('#valoridpaso').val(opcion);
    insertidpaso();
    mensajedesinco();
    location.href = "../perfilproductivo/c_actualizarpp/fc_actualizarpp?folio="+ $('#folio').val() + "&idintegrante=0"+ "&doccogestor=" + $('#doccogestor').val()+ "&idestacion=91";               
    } 
function paso3(opcion)
    {
    //alert(opcion);
    $('#valoridpaso').val(opcion);
    insertidpaso();
    $('#modpaso3').prop('disabled', true);
    $('#modpaso4').prop('disabled', false);
    }

function paso4(opcion)
 {
 location.href = "../privacionesintermediaLCV1/c_dimensionespLCV1/fc_dimensionespLCV1?folio="+ $('#folio').val() + "&idintegrante=0"+ "&idestacion=91";     
 $('#valoridpaso').val(opcion);
 insertidpaso();
// $('#modpaso4').prop('disabled', true);
// $('#modpaso5').prop('disabled', false);
 }
    
function paso5(opcion)
    {
    location.href = "../c_acercaroportunidad/fc_acercaroportunidad?folio="+ $('#folio').val() + "&idintegrante="+ <?php echo($tdatinte['tidintegrante']); ?> +"&doccogestor=" + $('#doccogestor').val()+ "&variable=91";  
    }
    

    function paso6(opcion)
    {
    location.href = "../historiahogar/c_validacioneerf2/fc_validacioneerf2?folio="+ $('#folio').val() + "&idintegrante=0"+ "&doccogestor=" + $('#doccogestor').val()+ "&idestacion=91";
    }
    
    

     function paso6A(opcion)
    {
    //alert(opcion);
    $('#valoridpaso').val(opcion);
    insertidpaso();
    $('#modpaso6').prop('disabled', true);
    $('#modpaso7').prop('disabled', false);
    }
   
   function paso7(opcion)
    {
    $('#valoridpaso').val(opcion);
    insertidpaso();
    $('#modpaso7').prop('disabled', true);
    $('#modpaso8').prop('disabled', false);
    $('#guardar').prop('disabled', true);
    }   

    function paso8(opcion)
    {
    $('#valoridpaso').val(opcion);
    insertidpaso();
    $('#modpaso8').prop('disabled', true);
    $('#modpaso0Accion').prop('disabled', false);
    $('#guardar').prop('disabled', true);
    }   
   
  
   function paso10(opcion)
    {
    location.href = "../condicionnec/c_ingresos2/fc_ingresos2?folio="+ $('#folio').val() + "&idintegrante=0"+ "&doccogestor=" + $('#doccogestor').val()+ "&idestacion=24"; 
//    
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
                          url: "fc_cerrarpaso",
                          type: "GET",
                          data: {vfolio: $('#folio').val(), vidpaso: $('#valoridpaso').val(), vestado:1},
                          dataType: "html",
                          info: function(obj) {
                          //me llama el mensajito de actualizar
                          //$('#datos').html(obj);
                          //location.href = "../c_capituloshogar/fc_capituloshogar?folio="+ $('#folio').val() +"&idintegrante="+$('#idintegrante').val();                  
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
                {$('#guardar').prop('disabled', true);
                 $('#anterior').prop('disabled', true);
        mensajedesinco();        
        coordenadas(91);
      //calcularcondicion(24);
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
                                 videstacion : '91',
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
                                 videstacion : '91',
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