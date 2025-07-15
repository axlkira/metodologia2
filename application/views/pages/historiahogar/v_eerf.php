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
        <!--head-->
        <?php echo($head); ?>
        <!-- fin head-->

        <!--para tener la variable de idvivienda-->
        <input type="text" class="form-control input-sm" id="folio" name="folio"  style="display:none"   placeholder="folio" value="<?php echo($folio); ?>">
        <input type="text" class="form-control input-sm" id="doccogestor" name="doccogestor" style="display: none" placeholder="Text input" value="<?php echo($doccogestor); ?>">
        <!--fin para imprimir el folio y llevarlo-->
<hr>



<div class="row">
    
        <div class="panel panel-info">
            <div class="panel-heading">IDENTIFICACIÓN DE LAS RELACIONES FAMILIARES EN EL HOGAR POR MEDIO DE LA ESCALA EVALUATIVA DE RELACIONES FAMILIARES </div>
        </div>                  
                        <p class="category">
                            A continuación encontrará usted una serie de afirmaciones acerca de su familia y de la forma como ustedes se relacionan. 
                            Por favor, seleccionar la opción que corresponda con su opinión:
                            <br>
<!--                            <b>Totalmente de acuerdo: </b> 5 <br>
                            <b>De acuerdo: </b> 4 <br>
                            <b>Ni de acuerdo ni en desacuerdo: </b> 3 <br>
                            <b>En desacuerdo: </b> 2 <br>
                            <b>Totalmente en desacuerdo: </b> 1 <br>-->
                            <br>
                            <b>Recuerde que NO hay respuestas buenas o malas. Sólo queremos conocer su opinión sobre la manera como usted percibe las relaciones en su familia. </b><br><br>
                            

                        </p>
                        
<!--                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group label-floating">
                                    <label class="" style="width:400px">¿ Que integrante dara respuesta a la  primera aplicacion de la ERFAM?</label>
                                    <select class="form-control" id="inteerf1" name="inteerf1" onchange="habilitarguardar()">
                                       <?php echo $carraydatosintegrante ?>

                                    </select>
                                </div>
                            </div>
                            
                             <div class="col-md-6">
                                <div class="form-group label-floating">
                                    <label class="" style="width:400px">¿ Quien respondio la segunda evaluacion?</label>
                                    <select class="form-control" id="inteerf2" name="inteerf2" onchange="habilitarguardar()">
                                       <?php echo $carraydatosintegrante ?>

                                    </select>
                                </div>
                            </div>
                        </div>-->
                        <br><br>
                        
                        <div class="row" style="font-size: 15px">
                            <div class="col-md-3">
                                <button type="button" class="btn btn-primary btn-circle" style="background-color: #00620C;cursor: auto;border-color: #ffffff"></button> Comunicación Familiar
                            </div>
                            <div class="col-md-3">
                                <button type="button" class="btn btn-primary btn-circle" style="background-color: #003399;cursor: auto;border-color: #ffffff"></button> Convivencia Familiar
                            </div>
                            <div class="col-md-3">
                                <button type="button" class="btn btn-primary btn-circle" style="background-color: #d58512;cursor: auto;border-color: #ffffff"></button> Afectividad Familiar
                            </div>
                            <div class="col-md-3">
                                <button type="button" class="btn btn-primary btn-circle" style="background-color: #bf360c;cursor: auto;border-color: #ffffff"></button> Interacción Socio-Familiar
                            </div>

                        </div>
                    </div>
                    <!--<div class="modal-body">-->
                    <br>

                    <div class="row" style="font-size: 15px">
                            <div class="col-md-3">
                                <!--<div class="form-group label-floating">-->
                                    <label class="" style="color: #00620C;width:220px">1. En mi familia tenemos unos buenos niveles de comunicación.</label>
                                    <select class="form-control" id="eerf1" name="eerf1" onchange="habilitarguardar()">
                                        <option value="">Seleccionar</option>
                                        <option value="5">Totalmente de acuerdo</option>
                                        <option value="4">De acuerdo</option>
                                        <option value="3">Ni de acuerdo ni en desacuerdo</option>
                                        <option value="2">En desacuerdo</option>
                                        <option value="1">Totalmente en desacuerdo</option>

                                    </select>
                                <!--</div>-->
                            </div>
                            
                            <div class="col-md-3">
                                <!--<div class="form-group label-floating">-->
                                <label class="" style="color: #003399">2. En mi familia respetamos las decisiones<br> de cada persona.</label>
                                    <select class="form-control" id="eerf2" name="eerf2" onchange="habilitarguardar()">
                                        <option value="">Seleccionar</option>
                                        <option value="5">Totalmente de acuerdo</option>
                                        <option value="4">De acuerdo</option>
                                        <option value="3">Ni de acuerdo ni en desacuerdo</option>
                                        <option value="2">En desacuerdo</option>
                                        <option value="1">Totalmente en desacuerdo</option>

                                    </select>
                                <!--</div>-->
                            </div>


                            <div class="col-md-3">
                                <div class="">
                                    <label class="control-label" style="color: #d58512">3. En mi familia nos sentimos libres para expresarnos los sentimientos. </label>
                                    <select class="form-control" id="eerf3" name="eerf3" onchange="habilitarguardar()">
                                       <option value="">Seleccionar</option>
                                        <option value="5">Totalmente de acuerdo</option>
                                        <option value="4">De acuerdo</option>
                                        <option value="3">Ni de acuerdo ni en desacuerdo</option>
                                        <option value="2">En desacuerdo</option>
                                        <option value="1">Totalmente en desacuerdo</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group label-floating">
                                    <label class="control-label" style="color: #bf360c">4. En mi familia participamos de actividades comunitarias del sector donde vivimos. </label>
                                    <select class="form-control" id="eerf4" name="eerf4" onchange="habilitarguardar()">
                                        <option value="">Seleccionar</option>
                                        <option value="5">Totalmente de acuerdo</option>
                                        <option value="4">De acuerdo</option>
                                        <option value="3">Ni de acuerdo ni en desacuerdo</option>
                                        <option value="2">En desacuerdo</option>
                                        <option value="1">Totalmente en desacuerdo</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    <hr>
                        <br><br>
                        <div class="row" style="font-size: 15px">
                            <div class="col-md-3">
                                <!--<div class="form-group label-floating">-->
                                <label class="" style="color: #00620C;width:220px">5. En mi familia tenemos una comunicación<br> respetuosa.</label>
                                    <select class="form-control" id="eerf5" name="eerf5" onchange="habilitarguardar()">
                                        <option value="">Seleccionar</option>
                                        <option value="5">Totalmente de acuerdo</option>
                                        <option value="4">De acuerdo</option>
                                        <option value="3">Ni de acuerdo ni en desacuerdo</option>
                                        <option value="2">En desacuerdo</option>
                                        <option value="1">Totalmente en desacuerdo</option>

                                    </select>
                                <!--</div>-->
                            </div>
                            
                            <div class="col-md-3">
                                <!--<div class="form-group label-floating">-->
                                <label class="" style="color: #003399;width:220px">6. En mi familia respetamos nuestros acuerdos para la convivencia.</label>
                                    <select class="form-control" id="eerf6" name="eerf6" onchange="habilitarguardar()">
                                        <option value="">Seleccionar</option>
                                        <option value="5">Totalmente de acuerdo</option>
                                        <option value="4">De acuerdo</option>
                                        <option value="3">Ni de acuerdo ni en desacuerdo</option>
                                        <option value="2">En desacuerdo</option>
                                        <option value="1">Totalmente en desacuerdo</option>

                                    </select>
                                <!--</div>-->
                            </div>


                            <div class="col-md-3">
                                <div class="">
                                    <label class="control-label" style="color: #d58512">7. En mi familia nos preocupamos por los sentimientos de los demás integrantes. </label>
                                    <select class="form-control" id="eerf7" name="eerf7" onchange="habilitarguardar()">
                                       <option value="">Seleccionar</option>
                                        <option value="5">Totalmente de acuerdo</option>
                                        <option value="4">De acuerdo</option>
                                        <option value="3">Ni de acuerdo ni en desacuerdo</option>
                                        <option value="2">En desacuerdo</option>
                                        <option value="1">Totalmente en desacuerdo</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group label-floating">
                                    <label class="control-label" style="color: #bf360c;width:220px">8. En mi familia buscamos momentos para compartir con amigos y vecinos. </label>
                                    <select class="form-control" id="eerf8" name="eerf8" onchange="habilitarguardar()">
                                        <option value="">Seleccionar</option>
                                        <option value="5">Totalmente de acuerdo</option>
                                        <option value="4">De acuerdo</option>
                                        <option value="3">Ni de acuerdo ni en desacuerdo</option>
                                        <option value="2">En desacuerdo</option>
                                        <option value="1">Totalmente en desacuerdo</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <br> <br>
                        <div class="row" style="font-size: 15px">
                            <div class="col-md-3">
                                <!--<div class="form-group label-floating">-->
                                <label class="" style="color: #00620C;width:220px">9. En mi familia podemos expresar nuestras ideas y opiniones.</label>
                                    <select class="form-control" id="eerf9" name="eerf9" onchange="habilitarguardar()">
                                        <option value="">Seleccionar</option>
                                        <option value="5">Totalmente de acuerdo</option>
                                        <option value="4">De acuerdo</option>
                                        <option value="3">Ni de acuerdo ni en desacuerdo</option>
                                        <option value="2">En desacuerdo</option>
                                        <option value="1">Totalmente en desacuerdo</option>

                                    </select>
                                <!--</div>-->
                            </div>
                            
                            <div class="col-md-3">
                                <!--<div class="form-group label-floating">-->
                                <label class="" style="color: #003399;width:220px">10. En mi familia resolvemos de manera pacífica los problemas que tenemos. </label>
                                    <select class="form-control" id="eerf10" name="eerf10" onchange="habilitarguardar()">
                                        <option value="">Seleccionar</option>
                                        <option value="5">Totalmente de acuerdo</option>
                                        <option value="4">De acuerdo</option>
                                        <option value="3">Ni de acuerdo ni en desacuerdo</option>
                                        <option value="2">En desacuerdo</option>
                                        <option value="1">Totalmente en desacuerdo</option>

                                    </select>
                                <!--</div>-->
                            </div>


                            <div class="col-md-3">
                                <div class="">
                                    <label class="control-label" style="color: #d58512;width:220px">11. En mi familia tenemos diferentes maneras de expresarnos el cariño. </label>
                                    <select class="form-control" id="eerf11" name="eerf11" onchange="habilitarguardar()">
                                       <option value="">Seleccionar</option>
                                        <option value="5">Totalmente de acuerdo</option>
                                        <option value="4">De acuerdo</option>
                                        <option value="3">Ni de acuerdo ni en desacuerdo</option>
                                        <option value="2">En desacuerdo</option>
                                        <option value="1">Totalmente en desacuerdo</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group label-floating" >
                                    <label class="control-label" style="color: #bf360c">12. En mi familia participamos de las actividades recreativas y culturales del sector donde vivimos. </label>
                                    <select class="form-control" id="eerf12" name="eerf12" onchange="habilitarguardar()">
                                        <option value="">Seleccionar</option>
                                        <option value="5">Totalmente de acuerdo</option>
                                        <option value="4">De acuerdo</option>
                                        <option value="3">Ni de acuerdo ni en desacuerdo</option>
                                        <option value="2">En desacuerdo</option>
                                        <option value="1">Totalmente en desacuerdo</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <br> <br>
                        <div class="row" style="font-size: 15px">
                            <div class="col-md-3">
                                <!--<div class="form-group label-floating">-->
                                <label class="" style="color: #00620C;width:220px">13. En mi familia buscamos momentos de diálogo para tomar decisiones.</label>
                                    <select class="form-control" id="eerf13" name="eerf13" onchange="habilitarguardar()">
                                        <option value="">Seleccionar</option>
                                        <option value="5">Totalmente de acuerdo</option>
                                        <option value="4">De acuerdo</option>
                                        <option value="3">Ni de acuerdo ni en desacuerdo</option>
                                        <option value="2">En desacuerdo</option>
                                        <option value="1">Totalmente en desacuerdo</option>

                                    </select>
                                <!--</div>-->
                            </div>
                            
                            <div class="col-md-3">
                                <!--<div class="form-group label-floating">-->
                                <label class="" style="color: #003399;width:220px">14. En mi familia realizamos actividades divertidas en el hogar </label>
                                    <select class="form-control" id="eerf14" name="eerf14" onchange="habilitarguardar()">
                                        <option value="">Seleccionar</option>
                                        <option value="5">Totalmente de acuerdo</option>
                                        <option value="4">De acuerdo</option>
                                        <option value="3">Ni de acuerdo ni en desacuerdo</option>
                                        <option value="2">En desacuerdo</option>
                                        <option value="1">Totalmente en desacuerdo</option>

                                    </select>
                                <!--</div>-->
                            </div>


                            <div class="col-md-3">
                                <div class="">
                                    <label class="control-label" style="color: #d58512;width:220px">15. En mi familia nos sentimos muy cercanos los unos de los otros. </label>
                                    <select class="form-control" id="eerf15" name="eerf15" onchange="habilitarguardar()">
                                       <option value="">Seleccionar</option>
                                        <option value="5">Totalmente de acuerdo</option>
                                        <option value="4">De acuerdo</option>
                                        <option value="3">Ni de acuerdo ni en desacuerdo</option>
                                        <option value="2">En desacuerdo</option>
                                        <option value="1">Totalmente en desacuerdo</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group label-floating">
                                    <label class="control-label" style="color: #bf360c;width:220px">16. En mi familia participamos en la solución de los problemas del barrio.  </label>
                                    <select class="form-control" id="eerf16" name="eerf16" onchange="habilitarguardar()">
                                        <option value="">Seleccionar</option>
                                        <option value="5">Totalmente de acuerdo</option>
                                        <option value="4">De acuerdo</option>
                                        <option value="3">Ni de acuerdo ni en desacuerdo</option>
                                        <option value="2">En desacuerdo</option>
                                        <option value="1">Totalmente en desacuerdo</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <br> <br>
                        <div class="row" style="font-size: 15px">
                            <div class="col-md-3">
                                <!--<div class="form-group label-floating">-->
                                <label class="" style="color: #00620C;width:220px">17. En mi familia nos hacemos criticas respetuosas. </label>
                                    <select class="form-control" id="eerf17" name="eerf17" onchange="habilitarguardar()">
                                        <option value="">Seleccionar</option>
                                        <option value="5">Totalmente de acuerdo</option>
                                        <option value="4">De acuerdo</option>
                                        <option value="3">Ni de acuerdo ni en desacuerdo</option>
                                        <option value="2">En desacuerdo</option>
                                        <option value="1">Totalmente en desacuerdo</option>

                                    </select>
                                <!--</div>-->
                            </div>
                            
                            <div class="col-md-3">
                                <!--<div class="form-group label-floating">-->
                                <label class="" style="color: #003399;width:220px">18. En mi familia nos apoyamos cuando tenemos dificultades.  </label>
                                    <select class="form-control" id="eerf18" name="eerf18" onchange="habilitarguardar()">
                                        <option value="">Seleccionar</option>
                                        <option value="5">Totalmente de acuerdo</option>
                                        <option value="4">De acuerdo</option>
                                        <option value="3">Ni de acuerdo ni en desacuerdo</option>
                                        <option value="2">En desacuerdo</option>
                                        <option value="1">Totalmente en desacuerdo</option>

                                    </select>
                                <!--</div>-->
                            </div>


                            <div class="col-md-3">
                                <div class="">
                                    <label class="control-label" style="color: #d58512;width:220px">19. En mi familia promovemos la expresión de sentimientos. </label>
                                    <select class="form-control" id="eerf19" name="eerf19" onchange="habilitarguardar()">
                                       <option value="">Seleccionar</option>
                                        <option value="5">Totalmente de acuerdo</option>
                                        <option value="4">De acuerdo</option>
                                        <option value="3">Ni de acuerdo ni en desacuerdo</option>
                                        <option value="2">En desacuerdo</option>
                                        <option value="1">Totalmente en desacuerdo</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group label-floating">
                                    <label class="control-label" style="color: #bf360c;width:220px">20. En mi familia Somos solidarios con amigos y vecinos.  </label>
                                    <select class="form-control" id="eerf20" name="eerf20" onchange="habilitarguardar()">
                                        <option value="">Seleccionar</option>
                                        <option value="5">Totalmente de acuerdo</option>
                                        <option value="4">De acuerdo</option>
                                        <option value="3">Ni de acuerdo ni en desacuerdo</option>
                                        <option value="2">En desacuerdo</option>
                                        <option value="1">Totalmente en desacuerdo</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row" style="text-align: left">
                            <div class="col-md-12">
                                <?php
                               
                                    echo($botonerag);
                               
                                ?>   
                            </div>
                        </div>
                        
                        
                        
                        <br><br><br>





       

            
            
            <!--Fin botonera guardar y actualizar-->

      
            
    <!--Inicio Este es el footer NO TOCAR-->
    <?php echo($foot); ?>
    <!--fin del footer NO TOCAR-->
    </div>
    
    <!--Inicio de los enlaces-->
    <script src="<?php echo BOOTSTRAP, 'js/jquery-1.11.0.js' ?>"></script>
    <script src="<?php echo BOOTSTRAP, 'js/bootstrap.min.js' ?>"></script>
    <script src="<?php echo BOOTSTRAP, 'js/jquery.bootstrap.wizard.js' ?>"></script>
    <script src="<?php echo BOOTSTRAP, 'js/prettify.js' ?>"></script>
    <script src="<?php echo JBOX, 'Source/jBox.min.js' ?>"></script>
    <script src="<?php echo JSPERFIL, 'jsfechas.js' ?>"></script>
    <script src="<?php echo JSPERFIL, 'jsmensajes.js' ?>"></script>
    <script src="<?php echo JSPERFIL, 'jsvalidarcampos.js' ?>"></script>
    <script src="<?php echo JSPERFIL, 'jsvalidarletrasnumeros.js' ?>"></script>
    <script src="<?php echo JSPERFIL, 'jsbotones.js' ?>"></script>
    <script src="<?php echo JSPERFIL, 'jscargardatos.js' ?>"></script>
    <script src="<?php echo JSPERFIL, 'jscoordenadas.js?9.2' ?>"></script>
    <link href="<?php echo JBOX, 'Source/jBox.css' ?>" rel="stylesheet">
    <!--Inicio de los enlaces-->
</body>

<script> 
///////////////////////////////////////Funciones que llaman al controlador para guardar y actualizar////////////////////////////////////////////////////////////////////////    
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
    
 
    $(document).ready(function()
    {   
      

        $("#guardar").click(function ()
        {
                        $.ajax({
                          url: "fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(), 
                                    veerf1: $('#eerf1').val(),
                                    veerf2: $('#eerf2').val(),
                                    veerf3: $('#eerf3').val(),
                                    veerf4: $('#eerf4').val(),
                                    veerf5: $('#eerf5').val(),
                                    veerf6: $('#eerf6').val(),
                                    veerf7: $('#eerf7').val(),
                                    veerf8: $('#eerf8').val(),
                                    veerf9: $('#eerf9').val(),
                                    veerf10: $('#eerf10').val(),
                                    veerf11: $('#eerf11').val(),
                                    veerf12: $('#eerf12').val(),
                                    veerf13: $('#eerf13').val(),
                                    veerf14: $('#eerf14').val(),
                                    veerf15: $('#eerf15').val(),
                                    veerf16: $('#eerf16').val(),
                                    veerf17: $('#eerf17').val(),
                                    veerf18: $('#eerf18').val(),
                                    veerf19: $('#eerf19').val(),
                                    veerf20: $('#eerf20').val()
                                    
            },    
                          dataType: "html",
                          success : function(obj){                      
//                        $('#siguiente').show();
//                        $('#siguiente').prop('disabled', false);
                          alert ('La información se guardó satisfactoriamente');
                          //coordenadas(10);
                          location.href = "../c_historiahogar/fc_historiahogar?folio="+ $('#folio').val() +"&idintegrante=0"+"&doccogestor="+$('#doccogestor').val()+ "&idestacion=0";                      
                          $('#cancelar').show();
                          $('#cancelar').prop('disabled', false);
                          $('#guardar').prop('disabled', true);
                       

  mensajito('MENSAJE:','La informacion se guardo');//me llama el mensajito de guardar

                          }
                        });                    
        });

        
        
        

        $("#siguiente").click(function ()
        {
         
        });
              
        $("#anterior").click(function ()
        {
         location.href = "../c_lograrhogar/fc_lograrhogar?folio=" + $('#folio').val()+"&idintegrante=0"+"&doccogestor="+$('#doccogestor').val();                    
        });

//para cargar variables capitulo, pregunta,encuestador,vivienda,barra
cargardatosgenerales('<?php echo('Historia del hogar'); ?>','Vista 7 de 7','<?php echo($arraydatosgenerales['enomcoges']); ?>','<?php echo($arraydatosgenerales['etitular']); ?>','100');
//control del boton ayuda
botonayuda();

});
//dea aca para abajo es logica de cuadros

function habilitarguardar(){

    
    if($('#eerf1').val() == '' || $('#eerf2').val() == '' || $('#eerf3').val() == '' || $('#eerf4').val() == '' ||
            $('#eerf5').val() == '' || $('#eerf6').val() == '' || $('#eerf7').val() == '' || $('#eerf8').val() == '' ||
            $('#eerf9').val() == '' || $('#eerf10').val() == '' || $('#eerf11').val() == '' || $('#eerf12').val() == '' ||
            $('#eerf13').val() == '' || $('#eerf14').val() == '' || $('#eerf15').val() == '' || $('#eerf16').val() == '' ||
            $('#eerf17').val() == '' || $('#eerf18').val() == '' || $('#eerf19').val() == '' || $('#eerf20').val() == ''){

            $('#guardar').prop('disabled',true);
    }else{
        $('#guardar').prop('disabled',false);
    }
    
}

$("#capitulos").hide();

</script>
</html>