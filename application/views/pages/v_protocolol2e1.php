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
                    <div class="panel panel-danger">
                    <div class="panel-heading">
                    <h1 class="panel-title"><span class="badge">Estación 1</span></h1>
                    </div>
                    <div class="panel-body  text-justify">
                     Momento de reflexión en torno a lo que quiere lograr el hogar y a su clasificación con relación a la medición de pobreza multidimensional: NO POBRE-POBRE MODERADO o POBRE EXTREMO. 

El objetivo de esta estación es iniciar en conjunto con el hogar el plan de trabajo y las estrategias para alcanzar las metas del hogar con base en la información registrada en la primera estación (H) de la línea de clasificación ¿Qué quiero lograr en mi hogar?, agente motivador del acompañamiento

                    </div>
                    </div>
                    </div>

<!-- ////////////////////////////////////////////////// nuevo ////////////////////////////////////////////-->
 <!--inicio boton para definir un paso-->
 <div class="row">
                    <div class="form-group">
                        <div class="col-sm-offset-1 col-sm-10">
                            <button  class="btn btn-danger col-md-6" type="button" data-toggle="modal" data-target="#modalAddTracking0" id="modpaso0" <?php if ($tdatidvisita['tfolio'] <> ''){echo 'disabled';}else {echo 'enabled';}?>>
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
                            <button class="btn btn-danger col-md-6" type="button" data-toggle="modal" data-target="#modalAddTracking" id="modpaso1" <?php if ($midpaso['maximoidpaso'] < '1209'&& $tdatidvisita['tfolio']<>''){}else{echo 'disabled';}?>>
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
                                            
                                            <h5 class="modal- text-justify" id="myModalLabel">El Gestor Territorial de Familia saluda de manera cordial y cálida al hogar, informándole la importancia de su participación en el proyecto y la satisfacción de continuar con el proceso de Acompañamiento Familiar. Adicional se procede a explicar la duración aproximada de la visita y el objetivo que contiene la misma. </h5>    
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button"  onclick="paso1('2101');" name=cerrar1 id=cerrar1 class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                                        </div>
                                    </div>
                                </div>
                            </div><br>                    
                    <!--fin modal-->
                    
                    <div class="row">
                    <div class="form-group">
                        <div class="col-sm-offset-1 col-sm-10">
                            <button  class="btn btn-danger col-md-6" type="button" data-toggle="modal" data-target="#modalAddTracking2" id="modpaso2" <?php if($midpaso['maximoidpaso']=='2101') {echo ('enabled');} else {echo ('disabled');}?>>
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
                                        <h5 class="modal- text-justify" id="myModalLabel">
                                            Antes de iniciar con el desarrollo de la visita, el Gestor Territorial de Familia verifica si el hogar o alguno de sus integrantes requiere actualizar sus datos generales, a excepción de la fecha de nacimiento y el sexo, indicando la importancia de mantener la comunicación entre el hogar y la Unidad Familia Medellín
                                        </h5>    
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button"  onclick="paso2('2102');" name=cerrar2 id=cerrar2 class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                                        </div>
                                    </div>
                                </div>
                            </div><br>                    
                    <!--fin modal-->
                                        
                    <div class="row">
                    <div class="form-group">
                        <div class="col-sm-offset-1 col-sm-10">
                            <button  class="btn btn-danger col-md-6" type="button" data-toggle="modal" data-target="#modalAddTracking3" id="modpaso3" <?php if($midpaso['maximoidpaso']=='2102') {echo ('enabled');} else {echo ('disabled');}?>>
                                <p class="text-left"><span class="badge">Paso 3</span> ------ Explicación linea plan de vida familiar ------</p>
                            </button>
                        </div>
                    </div>
                    </div>
                    <!--inicio modal-->
                            <div class="modal fade" id="modalAddTracking3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h3>Explicación linea plan de vida familiar</h3>    
                                        </div>
                                        <div class="modal-body">
                                            <!--<input type="text" class="form-control input-sm" id="valoridpaso" name="valoridpaso"  style="display:none" placeholder="Text input" value="">-->
                                        <h5 class="modal- text-justify" id="myModalLabel">
                                        El Gestor Territorial de Familia explica el plan de vida familiar como estrategia que permite establecer una ruta para mejorar las condiciones de vida del hogar, en el marco de las variables que la Unidad tiene definidas para su promoción, y a su vez contribuir al alcance de las metas planteadas por el hogar, es decir, el plan de vida familiar tiene como objetivo establecer acciones que contribuyan al alcance de logros, superación de privaciones y mejoramiento de relaciones familiares

Se debe hacer énfasis en que el profesional es un facilitador y dinamizador de momentos de reflexión y construcción en torno a la consolidación de una ruta para el plan de vida familiar que se trabaja con el hogar, en aras de lograr la autonomía personal, familiar, social y económica


                                        </h5>    
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button"  onclick="paso3('2103');" name=cerrar3 id=cerrar3 class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                                        </div>
                                    </div>
                                </div>
                            </div><br>                    
                    <!--fin modal-->
                    
                    <!--inicio boton para definir un paso-->
                    <div class="row">
                    <div class="form-group">
                        <div class="col-sm-offset-1 col-sm-10">
                            <button  class="btn btn-danger col-md-6 text-left" type="button" data-toggle="modal" data-target="#modalAddTracking4" id="modpaso4" <?php if($midpaso['maximoidpaso']=='2103') {echo ('enabled');} else {echo ('disabled');}?>>
                                <p class="text-left"><span class="badge">Paso 4</span> ------ Plan de vida familiar-Metas del hogar ------</p>
                            </button>
                        </div>
                    </div>
                    </div>
                    <!--fin boton para definir un paso-->
                    <!--inicio modal paso anterior-->
                            <div class="modal fade" id="modalAddTracking4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h3>Metas del Hogar</h3>    
                                        </div>
                                        <div class="modal-body">
                                            
                                        <h5 class="modal- text-justify" id="myModalLabel">
                                          En este espacio el hogar define  las acciones que realizará durante el proceso de acompañamiento para alcanzar las metas propuestas en sus plan familiar.   
                                        </h5>    
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button"  onclick="paso4('2104');" name=cerrar4 id=cerrar4 class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                                        </div>
                                    </div>
                                </div>
                            </div><br>                    
                    <!--fin modal-->

                    <!--inicio boton para definir un paso-->
                    <div class="row">
                    <div class="form-group">
                        <div class="col-sm-offset-1 col-sm-10">
                            <button  class="btn btn-danger col-md-6" type="button" data-toggle="modal" data-target="#modalAddTracking5" id="modpaso5" <?php if($midpaso['maximoidpaso']=='2104') {echo ('enabled');} else {echo ('disabled');}?>>
                                <p class="text-left"><span class="badge">Paso 5</span> ------ Revisión y reflexión de logros alcanzados por el hogar ------</p>
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
                                            <h3>Revisión y reflexión de logros alcanzados por el hogar</h3>    
                                        </div>
                                        <div class="modal-body">
                                        <h5 class="modal- text-justify" id="myModalLabel">
                                            <!--El cogestor socializa con el hogar los logros alcanzados a lo largo de su historia y que han sido identificados en la clasificación inicial, lo cual permitirá hacer énfasis en los activos  y capacidades existentes en cada hogar, los cuales serán fundamentales para el alcance de nuevos logros y metas que se plantee en la continuidad del proceso. Importante resaltar que el abordaje de esta estación se realiza en lenguaje positivo y reconociendo sólo logros positivos-->  
                                            El Gestor Territorial de Familia en conjunto con el hogar dialogan sobre las metas planteadas por el hogar (estación H) y cuáles deben ser los objetivos para el acompañamiento familiar. Partiendo de la dimensión a la cual corresponden las metas planteadas por el hogar, se analizan los logros asociados (cuales en rojo, cuales en verde, cuales inciden en la meta planteada). Visibilice el estado del hogar en referencia solo a estos logros resaltando lo alcanzado, los activos y capacidades existentes en el hogar, ya que constituyen la base para apalancar el mejoramiento de las condiciones de vida, mejoramiento de relaciones familiares y alcance de metas del hogar.
Importante resaltar que el abordaje de esta estación se realiza en lenguaje positivo y reconociendo sólo logros positivos.

                                        </h5>    
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button"  onclick="paso5('2105');" name=cerrar5 id=cerrar5 class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                                        </div>
                                    </div>
                                </div>
                            </div><br>                    
                    <!--fin modal-->
                    
                    <!--inicio boton para definir un paso-->
                    <div class="row">
                    <div class="form-group">
                        <div class="col-sm-offset-1 col-sm-10">
                            <button  class="btn btn-danger col-md-6" type="button" data-toggle="modal" data-target="#modalAddTracking6" id="modpaso6" <?php if($midpaso['maximoidpaso']=='2105') {echo ('enabled');} else {echo ('disabled');}?>>
                               <p class="text-left"><span class="badge">Paso 6</span> ------ Acercamiento de oportunidades ------</p>
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
                                            <h3>Acercamiento de oportunidades </h3>    
                                        </div>
                                        <div class="modal-body">
                                        <h5 class="modal- text-justify" id="myModalLabel">
<!--                                            Se realiza la identificación de los recursos existentes en el hogar que permitieron el alcance de metas a lo largo de su historia, lo cual permitirá potencializar el alcance de los nuevos logros, metas y sueños. 
Si el cogestor social en este espacio de la visita, tiene claridad del enfoque AVEO, le permitirá ir identificando a nivel micro (entorno familiar) y macro (recursos externos) los activos del hogar y la estructura de oportunidades que necesita acercar para el mejoramiento de su calidad de vida, llevándolo al reconocimiento de sus capacidades y por ende a la motivación para el alcance de sus metas. 
La información obtenida con relación a los recursos del hogar queda registrada en la historia del hogar. -->

En este espacio, el Gestor Territorial de Familia acerca las oportunidades permanentes y vigentes que aplican al hogar,  (independientemente del color de sus logros: rojo, verde, café) de tal manera que les permita paso a paso  mejorar sus condiciones de vida y dejar las capacidades instaladas  para la auto gestión no solo de las dificultades e intereses del presente sino también que puedan presentarse en el futuro.  
La información de las oportunidades debe quedar registrada en la historia del hogar, de tal manera que al llegar a la Línea Plan de vida familiar pueda hacerse el registro en el sistema de información (DTR).

 <br><br>
                                        </h5>    
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button"  onclick="paso6('2106');" name=cerrar6 id=cerrar6 class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                                        </div>
                                    </div>
                                </div>
                            </div><br>                    
                    <!--fin modal-->
                    
                    <!--inicio boton para definir un paso-->
<!--                    <div class="row">
                    <div class="form-group">
                        <div class="col-sm-offset-1 col-sm-10">
                            <button  class="btn btn-danger col-md-6" type="button" data-toggle="modal" data-target="#modalAddTracking7" id="modpaso7" <?php if($midpaso['maximoidpaso']=='2106') {echo ('enabled');} else {echo ('disabled');}?>>
                                <p class="text-left"><span class="badge">Paso 7</span> ----Encuentros para el buen vivir en familia--</p>
                            </button>
                        </div>
                    </div>
                    </div>-->
                    <!--fin boton para definir un paso-->
                    <!--inicio modal paso anterior-->
<!--                            <div class="modal fade" id="modalAddTracking7" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h3>Encuentros para el buen vivir en familia</h3> 
                                            <h5 class="modal- text-justify" id="myModalLabel">
                                                En este espacio de la visita, el cogestor social invita a los integrantes a participar de la actividad, asignándole una cualidad a las personas con las que convive, lo que permitirá que el hogar visibilice las capacidades que cada uno de los integrantes posee y de esta manera podrá aportar al cumplimiento de metas colectivas, es decir, al plan de vida familiar. 
La información obtenida queda registrada en la historia del hogar. 

 <br><br>
                                        </h5>   
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button"  onclick="paso7('2107');" name="cerrar7" id="cerrar7" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                                        </div>
                                    </div>
                                </div>
                            </div><br>                    -->
                    <!--fin modal-->
                    
                    
                    
                     <!--inicio boton para definir un paso-->
                    <div class="row">
                    <div class="form-group">
                        <div class="col-sm-offset-1 col-sm-10">
                            <button  class="btn btn-danger col-md-6" type="button" data-toggle="modal" data-target="#modalAddTracking7" id="modpaso7" <?php if($midpaso['maximoidpaso']=='2106') {echo ('enabled');} else {echo ('disabled');}?>>
                                <p class="text-left"><span class="badge">Paso 7</span> ---- Desarrollo de espacios educativos en la visita ------</p>
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
                                        <h3>Encuentro para el Buen vivir en familia y sesión educativa:</h3>  
                                        </div>
                                        <div class="modal-body">
                                        <h5 class="modal- text-justify" id="myModalLabel">Son espacios educativos en donde el gestor territorial fortalece la dinámica familiar y aborda diversas temáticas de acuerdo a las necesidades identificadas, pertinencia del tema y características diferenciales del hogar y/o sus integrantes, promoviendo la participación activa, el desarrollo de capacidades y autonomía para el mejoramiento de las condiciones de vida. Dichos espacios a desarrollar son los siguientes:<br><br>
                                        <strong>A- Sesión educativa:</strong> En este espacio se aborda un tema alrededor de las dimensiones del desarrollo humano <strong><u>excepto</u></strong> dinámica familiar.<br>
                                        <strong>B- Encuentro para el Buen vivir en Familia:</strong> En este espacio se trabaja la dimensión de dinámica familiar y el gestor territorial puede orientar la pertinencia temática de acuerdo a los resultados de la ERFAM.
                                        <br><br>
                                        </h5>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button"  onclick="paso7('2107');" name=cerrar7 id=cerrar7 class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                                        </div>
                                    </div>
                                </div>
                            </div><br>                    
                    <!--fin modal-->
                    
                    
                    
                    
                    <!--inicio boton para definir un paso-->
                    <div class="row">
                    <div class="form-group">
                        <div class="col-sm-offset-1 col-sm-10">
                            <button  class="btn btn-danger col-md-6" type="button" data-toggle="modal" data-target="#modalAddTracking8" id="modpaso8" <?php if($midpaso['maximoidpaso']=='2107') {echo ('enabled');} else {echo ('disabled');}?>>
                                <p class="text-left"><span class="badge">Paso 8</span> ---- Actualización historia del hogar ------</p>
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
                                            <h3>Actualización historia del hogar</h3>    
                                        </div>
                                        <div class="modal-body">
                                        <h5 class="modal- text-justify" id="myModalLabel">
<!--                                            En este espacio, el Cogestor Social acerca las oportunidades permanentes y vigentes que aplican al hogar, de tal manera que les permita paso a paso
                                            mejorar sus condiciones de vida. Es importante tener claro, que el cogestor social brinda las rutas instituciones tanto de los logros que se encuentran en rojo, como los que se encuentran en verde,
                                            de tal manera que puedan ir dejando las capacidades instaladas en el hogar no sólo si en el presente tienen dificultades, sino también si en algún momento se presentan.<br><br> 
                                            La información de las oportunidades debe quedar registrada en la historia del hogar, de tal manera que al llegar a la Línea Plan de vida familiar pueda hacerse el registro en el sistema de información (DTR). -->
                                        </h5>    
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button"  onclick="paso8('2108');" name=cerrar8 id=cerrar8 class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                                        </div>
                                    </div>
                                </div>
                            </div><br>                    
                    <!--fin modal-->
                    
                    
                    <!--inicio boton para definir un paso-->
<!--                    <div class="row">
                    <div class="form-group">
                        <div class="col-sm-offset-1 col-sm-10">
                            <button  class="btn btn-danger col-md-6" type="button" data-toggle="modal" data-target="#modalAddTracking8" id="modpaso8" <?php if($midpaso['maximoidpaso']=='2107') {echo ('enabled');} else {echo ('disabled');}?>>
                               <p class="text-left"><span class="badge">Paso 8</span> ------ Hogar caso exitoso  ------</p>
                            </button>
                        </div>
                    </div>
                    </div>
                    fin boton para definir un paso
                    inicio modal paso anterior
                            <div class="modal fade" id="modalAddTracking8" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h3> Evaluar este hogar como caso exitoso</h3>    
                                        </div>
                                        <div class="modal-body">
                                        <h5 class="modal- text-justify" id="myModalLabel">Se considera hogar exitoso aquel que refleje  o exponga aspectos relacionados con: buenas relaciones familiares, autonomía familiar, autogestión, emprendimiento, que pueda resaltarse entre las historias de los hogares acompañados. 
                                            
 <br><br>
                                        </h5>    
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button"  onclick="paso8('2108');" name=cerrar8 id=cerrar8 class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                                        </div>
                                    </div>
                                </div>
                            </div><br>                    -->
                    <!--fin modal-->
                    
                    
                    
                    <!--inicio boton para definir un paso-->
<!--                    <div class="row">
                    <div class="form-group">
                        <div class="col-sm-offset-1 col-sm-10">
                            <button  class="btn btn-danger col-md-6" type="button" data-toggle="modal" data-target="#modalAddTracking9" id="modpaso9" <?php if($midpaso['maximoidpaso']=='2108') {echo ('enabled');} else {echo ('disabled');}?>>
                               <p class="text-left"><span class="badge">Paso 8</span> ------ Actualización Historia del Hogar------</p>
                            </button>
                        </div>
                    </div>
                    </div>
                    fin boton para definir un paso
                    inicio modal paso anterior
                            <div class="modal fade" id="modalAddTracking9" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h3> </h3>    
                                        </div>
                                        <div class="modal-body">
                                        <h5 class="modal- text-justify" id="myModalLabel">Se realiza la identificación de los recursos existentes en el hogar que permitieron el alcance de metas a lo largo de su historia, lo cual permitirá potencializar el alcance de los nuevos logros, metas y sueños. 
Si el cogestor social en este espacio de la visita, tiene claridad del enfoque AVEO, le permitirá ir identificando a nivel micro (entorno familiar) y macro (recursos externos) los activos del hogar y la estructura de oportunidades que necesita acercar para el mejoramiento de su calidad de vida, llevándolo al reconocimiento de sus capacidades y por ende a la motivación para el alcance de sus metas. 
La información obtenida con relación a los recursos del hogar queda registrada en la historia del hogar. 
 <br><br>
                                        </h5>    
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button"  onclick="paso9('2109');" name=cerrar9 id=cerrar9 class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                                        </div>
                                    </div>
                                </div>
                            </div><br>                    -->
                    <!--fin modal-->
                    
                    
                    <!--inicio boton para definir un paso-->
                    <div class="row">
                    <div class="form-group">
                        <div class="col-sm-offset-1 col-sm-10">
                            <button  class="btn btn-danger col-md-6" type="button" data-toggle="modal" data-target="#modalAddTracking9" id="modpaso9" <?php if($midpaso['maximoidpaso']=='2108') {echo ('enabled');} else {echo ('disabled');}?>>
                                <p class="text-left"><span class="badge">Paso 9</span> ------ Cierre de la visita ------</p>
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
                                            <h3>Cierre de la visita (Evaluación)</h3>    
                                        </div>
                                        <div class="modal-body">
                                        <h5 class="modal- text-justify" id="myModalLabel">En este espacio el Gestor Territorial de Familia realiza la evaluación de la visita, haciendo uso de la DTR y motiva al hogar al cumplimiento de los compromisos
                                            establecidos. Además, sintetiza lo trabajado en la visita y recuerda que en los próximos meses será visitado para continuar con el proceso (excepto sesión de cierre).
                                        </h5>    
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button"  onclick="paso9('2109');" name="cerrar9" id="cerrar9" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                                        </div>
                                    </div>
                                </div>
                            </div><br>                    
                    <!--fin modal-->

<!-- ////////////////////////////////////////////////// nuevo informativo////////////////////////////////////////////-->
 <!--inicio boton para definir un paso-->
 <!--<div class="row">
                    <div class="form-group">
                        <div class="col-sm-offset-1 col-sm-10">
                            <button  class="btn btn-danger col-md-6" type="button" data-toggle="modal" data-target="#modalAddTracking0Accion" id="modpaso0Accion" <?php if ($midpaso['maximoidpaso'] < '2109' || $tdatidvisitaAccion['tfolio'] <> ''){echo 'disabled';}else {echo 'enabled';}?>>
                               <p class="text-left"><span class="badge">Paso Informativo</span> ------ Acción educativa ------</p>
                            </button>
                           </div>
                    </div>
</div> -->
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
                                        <button type="button" name=guardapaso0Accion id=guardapaso0Accion disabled="disabled" class="btn btn-success" >Guardar</button>
                                        <button type="button" onclick="paso0Accion();" disabled="disabled" name="cerrar0Accion" id="cerrar0Accion" class="btn btn-danger" data-dismiss="modal">Continuar</button>
                                        <button type="button" class="btn btn-gray" data-dismiss="modal" name="Close0Accion" id="Close0Accion" aria-label="Close">Cerrar</button></center>
                                        </div>    
                                        </div>
                                    
                                      </div>            
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
                                <h4 class="modal-title" id="myModalLabel"><img src="<?php echo IMAGEN, 'cargando.gif'; ?>" alt="Brand"> Calculando el porcentaje de logros </h4>
                            </div>
                            <div class="modal-body">

                            Por favor espere un momento.
                            </div>
                        </div>
                      </div>
                    </div>
<!--Fin Modal-->
<!-- /////////////////////////////////////////////////////////////////// fin nuevo informativo////////////////////////////////////// -->

<input type="text" class="form-control input-sm" id="valoridpaso" name="valoridpaso"  style="display:none" placeholder="Text input" value="">

<!--inicio botonera guardar y actualizar NO SE TOCA-->
                             
                            <?php if($midpaso['maximoidpaso'] <> '2109')
                            {
                            echo('<button class="btn btn-danger" type="button" id="anterior" name="anterior"> << Anterior</button>');
                            echo '&nbsp';           
                            echo('<button class="btn btn-danger type="button" id="guardar" disabled="" name="guardar">---- Guardar ----</button>');
                            }
                            else
                            {
                            echo('<button class="btn btn-danger" type="button" id="anterior" name="anterior"> << Anterior</button>');
                            echo '&nbsp';           
                            echo('<button class="btn btn-danger" type="button" id="guardar" name="guardar">---- Guardar ----</button>');    
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
        <script src="<?php echo JSPERFIL, 'jsmensajes.js' ?>"></script>
        <link href="<?php echo JBOX, 'Source/jBox.css' ?>" rel="stylesheet">
<!--FIN ENLACES - NO TOCAR-->
    </body>


<script> 
    
$(function () { $("[data-toggle='popover']").popover(); });


function paso1(opcion)
    {
    iniciocoordenadas(21);
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
    location.href = "../perfilproductivo/c_actualizarpp/fc_actualizarpp?folio="+ <?php echo($folio); ?> + "&idintegrante=0"+ "&doccogestor=" + $('#doccogestor').val() + "&idestacion=21";
    //location.href = "../perfilproductivo/c_ppactualizar/fc_ppactualizar?folio="+ $('#folio').val() + "&idintegrante=0"+ "&doccogestor=" + $('#doccogestor').val()+ "&idestacion=21";               
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
         location.href = "../linea2estacion1/c_metahogar/fc_metahogar?folio="+ $('#folio').val() + "&idintegrante=0"+ "&doccogestor=" + $('#doccogestor').val()+ "&idestacion=21";               
    }
    
function paso5(opcion)
    {
        $('#modalsinco').modal('show');
         location.href = "../logros/c_dimensiones/fc_dimensiones?folio="+ $('#folio').val() + "&idintegrante=0"+ "&doccogestor=" + $('#doccogestor').val()+ "&idestacion=21";               
    } 
    
  function paso6(opcion)
    {
     location.href = "../c_acercaroportunidad/fc_acercaroportunidad?folio="+ $('#folio').val() + "&idintegrante="+ <?php echo($tdatinte['tidintegrante']); ?> +"&doccogestor=" + $('#doccogestor').val()+ "&variable=4";  
    } 
    
   function paso7(opcion)
    {
    //alert(opcion);
    $('#valoridpaso').val(opcion);
    insertidpaso();
    $('#modpaso7').prop('disabled', true);
    $('#modpaso8').prop('disabled', false);
    }
   
   function paso8(opcion)
    {
    location.href = "../historiahogar/c_historiahogar2/fc_historiahogar2?folio="+ $('#folio').val() + "&idintegrante=0"+ "&doccogestor=" + $('#doccogestor').val()+ "&idestacion=21";                        
   
    }
    
    
      function paso9(opcion)
    {
     //alert(opcion);
    $('#valoridpaso').val(opcion);
    insertidpaso();
    $('#modpaso9').prop('disabled', true);
    //$('#modpaso0Accion').prop('disabled', false);
    $('#guardar').prop('disabled', false);
    }
    
//    function paso9(opcion)
//    {
//    //alert(opcion);
//    $('#valoridpaso').val(opcion);
//    insertidpaso();
//    $('#modpaso9').prop('disabled', true);
//    $('#guardar').prop('disabled', false);
////    $('#modpaso10').prop('disabled', false);
////    window.location.reload(); 
//    }
   
   
//   function paso10(opcion)
//    {
//    //alert(opcion);
//    $('#valoridpaso').val(opcion);
//    insertidpaso();
//    $('#modpaso10').prop('disabled', true);
//    $('#guardar').prop('disabled', false);
//    }
//    
//    function paso11(opcion)
//    {
//    //alert(opcion);
//    $('#valoridpaso').val(opcion);
//    insertidpaso();
//    $('#modpaso11').prop('disabled', true);
//    $('#guardar').prop('disabled', false);
//    }
   
   
   
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
    
    function insertarfolioexitoso()
   {
    //alert('test');
                        $.ajax({
                          url: "fc_insertarfolioexitoso",
                          type: "GET",
                          data: {vfolio: $('#folio').val(),videstacion: '21'},
                          dataType: "html",
                          success: function(obj) {
                          //me llama el mensajito de actualizar
                          //$('#datos').html(obj);
                          //location.href = "../c_capituloshogar/fc_capituloshogar?folio="+ $('#folio').val() +"&idintegrante="+$('#idintegrante').val();                  
                        }
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
                coordenadas(21);
                });
                //fin de la funcion guardar
        
                //esta funcion es para siguiente
                //si las preguntas son por hogar mandar idintegrante en 0
        $("#siguiente").click(function ()
                {
                   // alert('juapis');
                 location.href = "../c_protocolol1e2/fc_protocolol1e2?folio="+ $('#folio').val() +"&idintegrante=0";
                    
                });
                //fin de la funcion siguiente
                
                //esta funcion es para atras
                //si las preguntas son por hogar mandar idintegrante en 0                
        $("#anterior").click(function ()
                {
                   // alert('juapis');
                location.href = "../c_principalprotocolo/fc_principalprotocolo?folio="+ $('#folio').val() +"&idintegrante=0"+"&doccogestor="+$('#doccogestor').val();                  
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
                                 videstacion : '21',
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
                                 videstacion : '21',
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
function mensajedesinco()
{
    $('#modalsinco').modal('show');
}
</script>
</html>