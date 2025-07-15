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
        <input type="text" class="form-control input-sm" id="idintegrante" name="idintegrante"  style="display:none"   placeholder="idintegrante" value="<?php echo($idintegrante); ?>">
        <input type="text" class="form-control input-sm" id="edad" name="edad"  style="display:none"   placeholder="" value="<?php echo($arraydatosgenerales['eedadintegrante']); ?>">
        <input type="text" class="form-control input-sm" id="sexo" name="sexo"  style="display:none"   placeholder="" value="<?php echo($arraydatosgenerales['esexointegrante']); ?>">
<!--        <input type="text" class="form-control input-sm" id="c5p2" name="c5p2"  style="display:none"  placeholder="" value="<?php echo($arrayrespuestas['ec5p2']); ?>">-->
        <!--fin para imprimir el idintegrante y llevarlo-->
<hr>
        <form class="form-group" name="formulario" id="formulario">

            <!--inicio radio una sola seleccion-->
            <div class="row">
            <div id="c5pextradiv" name="c5pextradiv" <?php if($arrayrespuestas['ec5pextra']==''){echo('class="form-group col-md-12 form-group-sm has-error"');}else{echo('class="form-group col-md-12 form-group-sm"');}?>>   
                <label class="control-label">Si presento algún problema de salud en el último mes (enfermedad, accidente, odontología) que no haya implicado hospitalización, que hizo principalmente para tratar ese problema: (ÚNICA RESPUESTA)
                    <button type="button" id="vayuda" name="vayuda" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModal">
                        <span class="glyphicon glyphicon-question-sign" aria-hidden="true"></span> Ayuda
                    </button>
                </label>
                <div class="radio">
                    <label><!--en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="c5pextra" id="c5pextra" onclick="colocaropcion('c5pextrao1','valorc5pextra','c5pextradiv');" value="c5pextrao1" <?php if($arrayrespuestas['ec5pextra']=='c5pextrao1'){echo('checked');}?>>
                        No hizo nada porque No tuvo problemas de salud 
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="c5pextra" id="c5pextra" onclick="colocaropcion('c5pextrao2','valorc5pextra','c5pextradiv');" value="c5pextrao2" <?php if($arrayrespuestas['ec5pextra']=='c5pextrao2'){echo('checked');}?>>
                        Acudió a un medico general, especialista, odontológo, terapeuta o institución de salud
                    </label>             
                </div>    
                <div class="radio">
                    <label>
                        <input type="radio" name="c5pextra" id="c5pextra" onclick="colocaropcion('c5pextrao3','valorc5pextra','c5pextradiv');" value="c5pextrao3" <?php if($arrayrespuestas['ec5pextra']=='c5pextrao3'){echo('checked');}?>>
                        Acudió a un promotor de salud o enfermero
                    </label>             
                </div> 
                <div class="radio">
                    <label>
                        <input type="radio" name="c5pextra" id="c5pextra" onclick="colocaropcion('c5pextrao4','valorc5pextra','c5pextradiv');" value="c5pextrao4" <?php if($arrayrespuestas['ec5pextra']=='c5pextrao4'){echo('checked');}?>>
                        Acudió a un boticario, farmacéutica
                    </label>             
                </div> 
                <div class="radio">
                    <label>
                        <input type="radio" name="c5pextra" id="c5pextra" onclick="colocaropcion('c5pextrao5','valorc5pextra','c5pextradiv');" value="c5pextrao5" <?php if($arrayrespuestas['ec5pextra']=='c5pextrao5'){echo('checked');}?>>
                        Consulto a un tegua empírico, curandero, yerbatero o comadrona.
                    </label>             
                </div> 
                <div class="radio">
                    <label>
                        <input type="radio" name="c5pextra" id="c5pextra" onclick="colocaropcion('c5pextrao6','valorc5pextra','c5pextradiv');" value="c5pextrao6" <?php if($arrayrespuestas['ec5pextra']=='c5pextrao6'){echo('checked');}?>>
                        Asistió a terapias alternativas (acupuntura, esencias florales, musicoterapias, homeopatía, ect.
                    </label>             
                </div> 
                <div class="radio">
                    <label>
                        <input type="radio" name="c5pextra" id="c5pextra" onclick="colocaropcion('c5pextrao7','valorc5pextra','c5pextradiv');" value="c5pextrao7" <?php if($arrayrespuestas['ec5pextra']=='c5pextrao7'){echo('checked');}?>>
                        Usó remedios caseros
                    </label>             
                </div> 
                <div class="radio">
                    <label>
                        <input type="radio" name="c5pextra" id="c5pextra" onclick="colocaropcion('c5pextrao8','valorc5pextra','c5pextradiv');" value="c5pextrao8" <?php if($arrayrespuestas['ec5pextra']=='c5pextrao8'){echo('checked');}?>>
                        Se auto recetó
                    </label>             
                </div> 
                <div class="radio">
                    <label>
                        <input type="radio" name="c5pextra" id="c5pextra" onclick="colocaropcion('c5pextrao9','valorc5pextra','c5pextradiv');" value="c5pextrao9" <?php if($arrayrespuestas['ec5pextra']=='c5pextrao9'){echo('checked');}?>>
                        No hizo nada y tuvo problemas de salud
                    </label>             
                </div> 
                 
                 
               
                
                <input type="text" class="form-control" id="valorc5pextra" name="valorc5pextra" style="display:none" placeholder="Text input" value="<?php echo($arrayrespuestas['ec5pextra']); ?>">
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

            <!--inicio botonera guardar y actualizar-->
            <?php if($arrayrespuestas['ec5pextra']=="")
            {
                echo($botonerag);
            }
            else
            {
                echo($botoneraa);
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
                          data: {vfolio : $('#folio').val(),vidintegrante : $('#idintegrante').val(), vvalorc5pextra : $('#valorc5pextra').val()},    
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
                          data: {vfolio : $('#folio').val(),vidintegrante : $('#idintegrante').val(), vvalorc5pextra : $('#valorc5pextra').val()},    
                          dataType: "html",
                          success : function(obj){                      
                          botonguardar();
                          }
                        });                    
        });
        

        $("#siguiente").click(function ()
        {
          botonsiguiente();
          location.href = "../c_c5p2/fc_c5p2?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
//        if($('#valorc5pextra').val() === '1')
//          {                $.ajax({
//                           url: "../c_c5p2/fc_actualizar",
//                           type: "GET",
//                           data: {vfolio : $('#folio').val(),
//                           vidintegrante : $('#idintegrante').val(),    
//                           vvalorc5p2 : '98'},
//                           dataType: "html",
//                           success : function(obj)
//                           {
//                          location.href = "../c_c5p3/fc_c5p3?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
//                           }
//                          });
//                          }
//          else if (($('#valorc5pextra').val() === '2' && $('#c5p2').val() === '98'))
//          {                $.ajax({
//                           url: "../c_c5p2/fc_actualizar",
//                           type: "GET",
//                           data: {vfolio : $('#folio').val(),
//                           vidintegrante : $('#idintegrante').val(),
//                           vvalorc5p2 : ''},
//                           dataType: "html",
//                           success : function(obj)
//                           {
//                           location.href = "../c_c5p2/fc_c5p2?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
//                           }
//                          });
//                          }
//          else
//                {
//                    location.href = "../c_c5p2/fc_c5p2?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
//                }
            });    
        
//         botonsiguiente();
//         location.href = "../c_c5p2/fc_c5p2?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
//
//        });
//              
        $("#anterior").click(function ()
        {
         //botonanterior();
         location.href = "../c_c5p1/fc_c5p1?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                           
        //location.href = "../c_capitulosintegrantes/fc_capitulosintegrantes?idintegrante=" + $('#idintegrante').val()+ "&idintegrante="+"&idintegrante=0";                    
        });

//para cargar variables capitulo, pregunta,encuestador,vivienda,barra



cargardatosgenerales('<?php echo($arraydatosgenerales['ecapitulo']); ?>','Pregunta 1a de 14','<?php echo($arraydatosgenerales['enomcoges']); ?>','<?php echo($arraydatosgenerales['enombreintegrante']." "." - "." "."Sexo:"." ".$arraydatosgenerales['esexointegrante']."   "."  -  "."   "."Edad:"."   ".$arraydatosgenerales['eedadintegrante']); ?>','5');
//control del boton ayuda
botonayuda();

});

</script>
</html>