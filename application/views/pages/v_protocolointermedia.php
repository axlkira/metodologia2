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
                    <h3 class="text-right col-md-12"><small>Te encuentras en <strong>Visita Intermedia.</strong></small></h3>
                    <!-- <?php echo ($midpaso['maximoidpaso']);?>-->
                    
                    </div>
                </div>
<!--para imprimir el folio y llevarlo-->
                        <input type="text" class="form-control input-sm" id="folio" name="folio" style="display: none" placeholder="Text input" value="<?php echo($folio); ?>">
                        <input type="text" class="form-control input-sm" id="idintegrante" name="idintegrante" style="display: none" placeholder="Text input" value="<?php echo($tdatinte['tidintegrante']); ?>">
                        <input type="text" class="form-control input-sm" id="doccogestor" name="doccogestor" style="display: none" placeholder="Text input" value="<?php echo($doccogestor); ?>">
                        <input type="text" class="form-control input-sm" id="idmaxpaso" name="idmaxpaso" style="display: none" placeholder="Text input" value="<?php echo($midpaso['maximoidpaso']); ?>">
                        <input type="text" class="form-control input-sm" style="display: none" value="<?php echo($tdatidvisita['tfolio']); ?>">
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
                    <h1 class="panel-title"><span class="badge">Visita Intermedia</span></h1>
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
                            <button class="btn btn-danger col-md-6" type="button" data-toggle="modal" data-target="#modalAddTracking" id="modpaso1" 
                                <?php if (($midpaso['maximoidpaso'] == '2310' && $tdatidvisita['tfolio'] <> '' || $midpaso['maximoidpaso'] == '2609' && $tdatidvisita['tfolio'] <> '')
                                        &&($midpaso81['emaximoidpaso81'] <> '8101' && $midpaso81['emaximoidpaso81'] <> '8102'
                                           && $midpaso81['emaximoidpaso81'] <> '8103' && $midpaso81['emaximoidpaso81'] <> '8104'
                                           && $midpaso81['emaximoidpaso81'] <> '8105' && $midpaso81['emaximoidpaso81'] <> '8106' && $tdatidvisita['tfolio'] <> '')){echo ('enabled');} else {echo ('disabled');}?>>
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
                                            <button type="button"  onclick="paso1('8101');" name=cerrar1 id=cerrar1 class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                                        </div>
                                    </div>
                                </div>
                            </div><br>                    
                    <!--fin modal-->
                   
                    
                    <div class="row">
                    <div class="form-group">
                        <div class="col-sm-offset-1 col-sm-10">
                            <button  class="btn btn-danger col-md-6" type="button" data-toggle="modal" data-target="#modalAddTracking2" id="modpaso2" <?php if(($midpaso['maximoidpaso'] == '2310'|| $midpaso['maximoidpaso'] == '2609')
                                        &&($midpaso81['emaximoidpaso81'] == '8101')) {echo ('enabled');} else {echo ('disabled');}?>>
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
                                        <h5 class="modal- text-justify" id="myModalLabel"> Antes de iniciar con el desarrollo de la visita, el Gestor Territorial de Familia verifica si el hogar o alguno de sus integrantes requiere actualizar sus datos generales, a excepción de la fecha de nacimiento y el sexo, indicando la importancia de mantener la comunicación entre el hogar y la Unidad Familia Medellín
                                        </h5>    
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button"  onclick="paso2('8102');" name=cerrar2 id=cerrar2 class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                                        </div>
                                    </div>
                                </div>
                            </div><br>                    
                    <!--fin modal-->
                    <!--inicio boton para definir un paso-->
                    <div class="row">
                    <div class="form-group">
                        <div class="col-sm-offset-1 col-sm-10">
                            <button  class="btn btn-danger col-md-6 text-left" type="button" data-toggle="modal" data-target="#modalAddTracking4" id="modpaso4" <?php if(($midpaso['maximoidpaso'] == '2310'|| $midpaso['maximoidpaso'] == '2609')
                                        &&($midpaso81['emaximoidpaso81'] == '8102')){echo ('enabled');} else {echo ('disabled');}?>>
                                <p class="text-left"><span class="badge">Paso 3</span> ------ Formulario por integrante ------</p>
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
                                            <h3>Formulario por integrantes</h3>    
                                        </div>
                                        <div class="modal-body">
                                            
                                        <h5 class="modal- text-justify" id="myModalLabel">
                                          En este espacio se llenaran las preguntas por integrante   
                                        </h5>    
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button"  onclick="paso4('8103');" name=cerrar4 id=cerrar4 class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                                        </div>
                                    </div>
                                </div>
                            </div><br>                    
                    <!--fin modal-->
                    
                    
                     <div class="row">
                    <div class="form-group">
                        <div class="col-sm-offset-1 col-sm-10">
                            <button  class="btn btn-danger col-md-6" type="button" data-toggle="modal" data-target="#modalAddTracking3" id="modpaso3" <?php if(($midpaso['maximoidpaso'] == '2310'|| $midpaso['maximoidpaso'] == '2609')
                                        &&($midpaso81['emaximoidpaso81'] == '8103')){echo ('enabled');} else {echo ('disabled');}?>>
                                <p class="text-left"><span class="badge">Paso 4</span> ------ Formulario por hogar ------</p>
                            </button>
                        </div>
                    </div>
                    </div>
                    <!--inicio modal-->
                            <div class="modal fade" id="modalAddTracking3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h3>Aplicación formulario</h3>    
                                        </div>
                                        <div class="modal-body">
                                            <!--<input type="text" class="form-control input-sm" id="valoridpaso" name="valoridpaso"  style="display:none" placeholder="Text input" value="">-->
                                        <h5 class="modal- text-justify" id="myModalLabel"></h5>    
                                        </div>
                                        
<!--                                        onclick="paso3('5003');"-->
                                        
                                        <div class="modal-footer">
                                            <button type="button"  onclick="paso3('8104');insertarfoliohintermedia()" name="cerrar3" id="cerrar3"  class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                                        </div>
                                    </div>
                                </div>
                            </div><br>                    
                    <!--fin modal-->
             
                    
                    <!--inicio boton para definir un paso-->
                    <div class="row">
                    <div class="form-group">
                        <div class="col-sm-offset-1 col-sm-10">
                            <button  class="btn btn-danger col-md-6" type="button" data-toggle="modal" data-target="#modalAddTracking6" id="modpaso6" <?php if(($midpaso['maximoidpaso'] == '2310'|| $midpaso['maximoidpaso'] == '2609')
                                        &&($midpaso81['emaximoidpaso81'] == '8104')) {echo ('enabled');} else {echo ('disabled');}?>>
                               <p class="text-left"><span class="badge">Paso 5</span> ------ Acercamiento de oportunidades ------</p>
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
                                            <button type="button"  onclick="paso6('8105');" name=cerrar6 id=cerrar6 class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                                        </div>
                                    </div>
                                </div>
                            </div><br>                    
                    <!--fin modal-->
                    
                    <!--inicio boton para definir un paso-->
                    <div class="row">
                    <div class="form-group">
                        <div class="col-sm-offset-1 col-sm-10">
                            <button  class="btn btn-danger col-md-6" type="button" data-toggle="modal" data-target="#modalAddTracking9" id="modpaso9" <?php if(($midpaso['maximoidpaso'] == '2310'|| $midpaso['maximoidpaso'] == '2609')
                                        &&($midpaso81['emaximoidpaso81'] == '8105')){echo ('enabled');} else {echo ('disabled');}?>>
                                <p class="text-left"><span class="badge">Paso 6</span> ------ Cierre de la visita ------</p>
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
                                            <button type="button"  onclick="paso9('8106');" name="cerrar9" id="cerrar9" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
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
                                <h4 class="modal-title" id="myModalLabel"><img src="<?php echo IMAGEN, 'cargando.gif'; ?>" alt="Brand"> Cerrando la Visita Intermedia </h4>
                            </div>
                            <div class="modal-body">

                            Por favor espere un momento.
                            </div>
                        </div>
                      </div>
                    </div>
                    <!--Fin Modal-->                                                        
<input type="text" class="form-control input-sm" id="valoridpaso" name="valoridpaso"  style="display: none" placeholder="Text input" value="">

<!--inicio botonera guardar y actualizar NO SE TOCA-->

                             
                            <?php if($midpaso81['emaximoidpaso81']<'8106')
                            {
                            echo('<button class="btn btn-danger" type="button" id="anterior" name="anterior"> << Anterior</button>');
                            echo '&nbsp';           
                            echo('<button class="btn btn-danger type="button" id="guardar" disabled="" name="guardar">---- Guardar ----</button>');
                            }
                            else if($midpaso81['emaximoidpaso81']=='8106')
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
    iniciocoordenadas(81);
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
    location.href = "../perfilproductivo/c_actualizarpp/fc_actualizarpp?folio="+ <?php echo($folio); ?> + "&idintegrante=0"+ "&doccogestor=" + $('#doccogestor').val() + "&idestacion=81";
    //location.href = "../perfilproductivo/c_ppactualizar/fc_ppactualizar?folio="+ $('#folio').val() + "&idintegrante=0"+ "&doccogestor=" + $('#doccogestor').val()+ "&idestacion=81";               
    }  
//

function saltohogarintermedia()
{
    
    $.ajax({
                          url: "fc_saltohogarintermedia",
                          type: "GET",
                          data: {vfolio: $('#folio').val()},
                          dataType: "html",
                          success: function(obj) {
                        }
                       });
    location.href = "../c_capituloshogarintermedia/fc_capituloshogarintermedia?folio="+ $('#folio').val()+"&idintegrante=0" ;
}


function insertarfoliohintermedia()
{//alert('entro');
    $.ajax({
                          url: "fc_insertarfoliohogarintermedia",
                          type: "GET",
                          data: {vfolio: $('#folio').val()},
                          dataType: "html",
                          success: function(obj) {
                          
                          saltohogarintermedia();
                          
                        }
                       });
}
  
function paso3(opcion)
    {
    $('#valoridpaso').val(opcion);
    $('#modpaso3').prop('disabled', true);
    }
    
function paso4(opcion)
    {
location.href = "../c_totalintegrantesintermedia/fc_totalintegrantesintermedia?folio="+ $('#folio').val() + "&idintegrante=0"+ "&doccogestor=" + $('#doccogestor').val()+ "&variable=81";
    }
    
function paso5(opcion)
    {
         location.href = "../logros/c_dimensiones/fc_dimensiones?folio="+ $('#folio').val() + "&idintegrante=0"+ "&doccogestor=" + $('#doccogestor').val()+ "&idestacion=21";               
    } 
    
  function paso6(opcion)
    {
     location.href = "../c_acercaroportunidad/fc_acercaroportunidad?folio="+ $('#folio').val() + "&idintegrante="+ <?php echo($tdatinte['tidintegrante']); ?> +"&doccogestor=" + $('#doccogestor').val()+ "&variable=81";  
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
    $('#valoridpaso').val(opcion);
    insertidpaso();
    $('#modpaso9').prop('disabled', true);
    $('#guardar').prop('disabled', false);
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
                 ///// insertar momento intermedia
                 $.ajax({
          url: "fc_actualizarMVI",
          type: "GET",
          data: {vfolio: $('#folio').val(),vidmaxpaso: $('#idmaxpaso').val()},
          dataType: "html",
          success: function(obj) {  
                 calcularprivacionesinter();
          }
                });
            });
                //fin de la funcion guardar
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
///////////////////////////// nuevo ////////////////
///////////////////////////// guarda paso cero /////////////////////////////
$("#guardapaso0").click(function ()
        {
                        $.ajax({
                          url: "fc_actualizarep0",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),
                                 videstacion : '81',
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
}

function terminasinco()
{
    $('#modalsinco').modal('hide');
}
 //funcion para calcular logros  
 function calcularprivacionesinter()
   {
    //alert('test');
        $.ajax({
          url: "fc_calcularprivacionesinter",
          type: "GET",
          data: {vfolio: $('#folio').val()},
          dataType: "html",
          success: function(obj) {
          coordenadas(81);
                             }
          
       });
   }  
   
//NO TOCAR funcion que generar el mensaje de guardado    
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