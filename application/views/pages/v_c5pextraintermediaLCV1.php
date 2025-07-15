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
         <input type="text" class="form-control input-sm" id="folio" name="doccogestor"  style="display:none"   placeholder="doccogestor" value="<?php echo($doccogestor); ?>">
        <input type="text" class="form-control input-sm" id="idintegrante" name="idintegrante"  style="display:none"   placeholder="idintegrante" value="<?php echo($idintegrante); ?>">
        <input type="text" class="form-control input-sm" id="edad" name="edad"  style="display:none"    placeholder="" value="<?php echo($arraydatosgenerales['eedadintegrante']); ?>">
        <input type="text" class="form-control input-sm" id="sexo" name="sexo"  style="display:none"   placeholder="" value="<?php echo($arraydatosgenerales['esexointegrante']); ?>">
<!--        <input type="text" class="form-control input-sm" id="c5p2" name="c5p2"  style="display:none"  placeholder="" value="<?php echo($arrayrespuestas['ec5p2']); ?>">-->
        <!--fin para imprimir el idintegrante y llevarlo-->
<hr>
        <form class="form-group" name="formulario" id="formulario">

            <!--inicio radio una sola seleccion-->
            <div class="row">
            <div id="c5pextraintermediadiv" name="c5pextraintermediadiv" <?php if($arrayrespuestas['ec5pextraintermedia']==''){echo('class="form-group col-md-12 form-group-sm has-error"');}else{echo('class="form-group col-md-12 form-group-sm"');}?>>   
                <label class="control-label">Si presento algún problema de salud en el último mes (enfermedad, accidente, odontología) que no haya implicado hospitalización, que hizo principalmente para tratar ese problema: (ÚNICA RESPUESTA)
                    <button type="button" id="vayuda" name="vayuda" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModal">
                        <span class="glyphicon glyphicon-question-sign" aria-hidden="true"></span> Ayuda
                    </button>
                </label>
                <div class="radio">
                    <label><!--en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="c5pextraintermedia" id="c5pextraintermedia" onclick="colocaropcion('c5pextraintermediao1','valorc5pextraintermedia','c5pextraintermediadiv');" value="c5pextraintermediao1" <?php if($arrayrespuestas['ec5pextraintermedia']=='c5pextraintermediao1'){echo('checked');}?>>
                        No hizo nada porque No tuvo problemas de salud 
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="c5pextraintermedia" id="c5pextraintermedia" onclick="colocaropcion('c5pextraintermediao2','valorc5pextraintermedia','c5pextraintermediadiv');" value="c5pextraintermediao2" <?php if($arrayrespuestas['ec5pextraintermedia']=='c5pextraintermediao2'){echo('checked');}?>>
                        Acudió a un medico general, especialista, odontológo, terapeuta o institución de salud
                    </label>             
                </div>    
                <div class="radio">
                    <label>
                        <input type="radio" name="c5pextraintermedia" id="c5pextraintermedia" onclick="colocaropcion('c5pextraintermediao3','valorc5pextraintermedia','c5pextraintermediadiv');" value="c5pextraintermediao3" <?php if($arrayrespuestas['ec5pextraintermedia']=='c5pextraintermediao3'){echo('checked');}?>>
                        Acudió a un promotor de salud o enfermero
                    </label>             
                </div> 
                <div class="radio">
                    <label>
                        <input type="radio" name="c5pextraintermedia" id="c5pextraintermedia" onclick="colocaropcion('c5pextraintermediao4','valorc5pextraintermedia','c5pextraintermediadiv');" value="c5pextraintermediao4" <?php if($arrayrespuestas['ec5pextraintermedia']=='c5pextraintermediao4'){echo('checked');}?>>
                        Acudió a un boticario, farmacéutica
                    </label>             
                </div> 
                <div class="radio">
                    <label>
                        <input type="radio" name="c5pextraintermedia" id="c5pextraintermedia" onclick="colocaropcion('c5pextraintermediao5','valorc5pextraintermedia','c5pextraintermediadiv');" value="c5pextraintermediao5" <?php if($arrayrespuestas['ec5pextraintermedia']=='c5pextraintermediao5'){echo('checked');}?>>
                        Consulto a un tegua empírico, curandero, yerbatero o comadrona.
                    </label>             
                </div> 
                <div class="radio">
                    <label>
                        <input type="radio" name="c5pextraintermedia" id="c5pextraintermedia" onclick="colocaropcion('c5pextraintermediao6','valorc5pextraintermedia','c5pextraintermediadiv');" value="c5pextraintermediao6" <?php if($arrayrespuestas['ec5pextraintermedia']=='c5pextraintermediao6'){echo('checked');}?>>
                        Asistió a terapias alternativas (acupuntura, esencias florales, musicoterapias, homeopatía, ect.
                    </label>             
                </div> 
                <div class="radio">
                    <label>
                        <input type="radio" name="c5pextraintermedia" id="c5pextraintermedia" onclick="colocaropcion('c5pextraintermediao7','valorc5pextraintermedia','c5pextraintermediadiv');" value="c5pextraintermediao7" <?php if($arrayrespuestas['ec5pextraintermedia']=='c5pextraintermediao7'){echo('checked');}?>>
                        Usó remedios caseros
                    </label>             
                </div> 
                <div class="radio">
                    <label>
                        <input type="radio" name="c5pextraintermedia" id="c5pextraintermedia" onclick="colocaropcion('c5pextraintermediao8','valorc5pextraintermedia','c5pextraintermediadiv');" value="c5pextraintermediao8" <?php if($arrayrespuestas['ec5pextraintermedia']=='c5pextraintermediao8'){echo('checked');}?>>
                        Se auto recetó
                    </label>             
                </div> 
                <div class="radio">
                    <label>
                        <input type="radio" name="c5pextraintermedia" id="c5pextraintermedia" onclick="colocaropcion('c5pextraintermediao9','valorc5pextraintermedia','c5pextraintermediadiv');" value="c5pextraintermediao9" <?php if($arrayrespuestas['ec5pextraintermedia']=='c5pextraintermediao9'){echo('checked');}?>>
                        No hizo nada y tuvo problemas de salud
                    </label>             
                </div> 
                 
                 
               
                
                <input type="text" class="form-control" id="valorc5pextraintermedia" name="valorc5pextraintermedia" style="display:none" placeholder="Text input" value="<?php echo($arrayrespuestas['ec5pextraintermedia']); ?>">
            </div>
            </div> 
            <!--fin radio una sola seleccion-->
            
            <!-- Modal Ayuda-->
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Ayuda</h4>
                  </div>
                  <div class="modal-body">
                    ... <?php echo($textoayuda); ?>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                  </div>
                </div>
              </div>
            </div>
            <!-- Modal -->
            
            
              <div class="modal fade bs-example-modal-sm" id="modalsinco" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" data-backdrop="static">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title" id="myModalLabel"><img src="<?php echo IMAGEN, 'cargando.gif'; ?>" alt="Brand"> Guardando...</h4>
        </div>
        <div class="modal-body">
        
        Por favor no cierre este dialogo... hasta que salga el mensaje de finalizacion.
        </div>
    </div>
  </div>
</div>

            <!--inicio botonera guardar y actualizar-->
            <?php if($arrayrespuestas['ec5pextraintermedia']=="")
            {
                echo($botoneraginter);
            }
            else
            {
                echo($botoneraainter);
            }?>   
            <!--Fin botonera guardar y actualizar-->

        </form>
    
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
    <link href="<?php echo JBOX, 'Source/jBox.css' ?>" rel="stylesheet">
    <!--Inicio de los enlaces-->
</body>

<script> 
///////////////////////////////////////Funciones que llaman al controlador para guardar y actualizar////////////////////////////////////////////////////////////////////////    
    $(document).ready(function()
    {

        $("#guardar").click(function ()
        {
            
                        $.ajax({
                          url: "fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),vidintegrante : $('#idintegrante').val(), vvalorc5pextraintermedia : $('#valorc5pextraintermedia').val()},    
                          dataType: "html",
                          success : function(obj){    
                              
                   botonguardar();
                          }
                        });                    
        });

        
        $("#actualizar").click(function ()
        {
          
                        $.ajax({
                          url: "fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),vidintegrante : $('#idintegrante').val(), vvalorc5pextraintermedia : $('#valorc5pextraintermedia').val()},    
                          dataType: "html",
                          success : function(obj){     
                          botonguardar();
                          }
                        });                    
        });
     
        $("#siguiente").click(function ()
        {
            
            location.href = "../c_capitulosintegranteintermediaLCV1/fc_capitulosintegranteintermediaLCV1?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() ;                    
         
            });    
            
            
            $("#capitulos").click(function ()
        {
            
            location.href = "../c_capitulosintegranteintermediaLCV1/fc_capitulosintegranteintermediaLCV1?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() ;                    
         
            });  
        
        $("#anterior").click(function ()
        {
         location.href = "../c_c5p1intermediaLCV1/fc_c5p1intermediaLCV1?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"&variable=51";                           
        });

//para cargar variables capitulo, pregunta,encuestador,vivienda,barra

cargardatosgenerales('<?php echo($arraydatosgenerales['ecapitulo']); ?>','extra 2 de 2','<?php echo($arraydatosgenerales['enomcoges']); ?>','<?php echo($arraydatosgenerales['enombreintegrante']." "." - "." "."Sexo:"." ".$arraydatosgenerales['esexointegrante']."   "."  -  "."   "."Edad:"."   ".$arraydatosgenerales['eedadintegrante']); ?>','100');
//control del boton ayuda
botonayuda();

});

</script>
</html>