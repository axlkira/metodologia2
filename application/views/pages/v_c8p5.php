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
<!--       <input type="text" class="form-control input-sm" id="c8p7o1" name="c8p7o1"  style="display:none"   placeholder="" value="<?php echo($arrayrespuestas['ec8p7o1']); ?>"> -->
       <!--fin para imprimir el idintegrante y llevarlo-->
<hr>
        <form class="form-group" name="formulario" id="formulario">

            <!--inicio radio una sola seleccion-->
            <div class="row">
            <div id="c8p5div" name="c8p5div" <?php if($arrayrespuestas['ec8p5']==''||$arrayrespuestas['ec8p5']=='98'){echo('class="form-group col-md-12 form-group-sm has-error"');}else{echo('class="form-group col-md-12 form-group-sm"');}?>>   
                <label class="control-label">5. ¿Qué desea estudiar?</br>
                    Área del conocimiento
                    <button type="button" id="vayuda" name="vayuda" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModal">
                        <span class="glyphicon glyphicon-question-sign" aria-hidden="true"></span> Ayuda
                    </button>
                </label>
                <div class="radio">
                    <label><!--en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="c8p5" id="c8p5" onclick="colocaropcion('c8p5o1','valorc8p5','c8p5div');" value="c8p5o1" <?php if($arrayrespuestas['ec8p5']=='c8p5o1'){echo('checked');}?>>
                        Agronomía, veterinaria y afines
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="c8p5" id="c8p5" onclick="colocaropcion('c8p5o2','valorc8p5','c8p5div');" value="c8p5o2" <?php if($arrayrespuestas['ec8p5']=='c8p5o2'){echo('checked');}?>>
                        Bellas artes
                    </label>             
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="c8p5" id="c8p5" onclick="colocaropcion('c8p5o3','valorc8p5','c8p5div');" value="c8p5o3" <?php if($arrayrespuestas['ec8p5']=='c8p5o3'){echo('checked');}?>>
                        Ciencias de la educación
                    </label>             
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="c8p5" id="c8p5" onclick="colocaropcion('c8p5o4','valorc8p5','c8p5div');" value="c8p5o4" <?php if($arrayrespuestas['ec8p5']=='c8p5o4'){echo('checked');}?>>
                        Ciencias de la salud
                    </label>             
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="c8p5" id="c8p5" onclick="colocaropcion('c8p5o5','valorc8p5','c8p5div');" value="c8p5o5" <?php if($arrayrespuestas['ec8p5']=='c8p5o5'){echo('checked');}?>>
                        Ciencias sociales, derecho, ciencias políticas
                    </label>             
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="c8p5" id="c8p5" onclick="colocaropcion('c8p5o6','valorc8p5','c8p5div');" value="c8p5o6" <?php if($arrayrespuestas['ec8p5']=='c8p5o6'){echo('checked');}?>>
                        Economía, administracion, contaduría y afines
                    </label>             
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="c8p5" id="c8p5" onclick="colocaropcion('c8p5o7','valorc8p5','c8p5div');" value="c8p5o7" <?php if($arrayrespuestas['ec8p5']=='c8p5o7'){echo('checked');}?>>
                        Humanidades y ciencias religiosas
                    </label>             
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="c8p5" id="c8p5" onclick="colocaropcion('c8p5o8','valorc8p5','c8p5div');" value="c8p5o8" <?php if($arrayrespuestas['ec8p5']=='c8p5o8'){echo('checked');}?>>
                        Ingeniería, arquitectura, urbanismo y afines
                    </label>             
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="c8p5" id="c8p5" onclick="colocaropcion('c8p5o9','valorc8p5','c8p5div');" value="c8p5o9" <?php if($arrayrespuestas['ec8p5']=='c8p5o9'){echo('checked');}?>>
                        Matemáticas y ciencias naturales
                    </label>             
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="c8p5" id="c8p5" onclick="colocaropcion('c8p5o10','valorc8p5','c8p5div');" value="c8p5o10" <?php if($arrayrespuestas['ec8p5']=='c8p5o10'){echo('checked');}?>>
                        Sistemas
                    </label>             
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="c8p5" id="c8p5" onclick="colocaropcion('c8p5o11','valorc8p5','c8p5div');" value="c8p5o11" <?php if($arrayrespuestas['ec8p5']=='c8p5o11'){echo('checked');}?>>
                        No desea continuar estudiando
                    </label>             
                </div>
               
                <input type="text" class="form-control" id="valorc8p5" name="valorc8p5" style="display:none" placeholder="Text input" value="<?php echo($arrayrespuestas['ec8p5']); ?>">
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
            <?php if($arrayrespuestas['ec8p5']=="")
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
                          data: {vfolio : $('#folio').val(),
                          vidintegrante : $('#idintegrante').val(),
                          vvalorc8p5 : $('#valorc8p5').val()},    
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
                          data: {vfolio : $('#folio').val(),
                          vidintegrante : $('#idintegrante').val(),
                          vvalorc8p5 : $('#valorc8p5').val()},    
                          dataType: "html",
                          success : function(obj){                      
                          botonguardar();
                          }
                        });                    
        });
        

        $("#siguiente").click(function ()
        {
        botonsiguiente();
        location.href = "../c_c8p6/fc_c8p6?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";
//         
//                            $.ajax({
//                            url: "../c_c8p7/fc_actualizar",
//                            type: "GET",
//                            data: {vfolio : $('#folio').val(),
//                            vidintegrante : $('#idintegrante').val(),
//                            vvalorc8p7 : '98',    
//                            vc8p7cual : '98'},
//                            dataType: "html",
//                            success : function(obj)
//                            {
//                           //location.href = "../c_c8p7/fc_c8p7?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
//                            }
//                           });
//         //location.href = "../c_c8p7/fc_c8p7?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";
//        if($('#c8p7o1').val() === '98')
//         {
//         location.href = "../c_capitulosintegrante/fc_capitulosintegrante?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                     
//         }
//        else
//        {
//        location.href = "../c_c8p7/fc_c8p7?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                 
//        }




        });
              
        $("#anterior").click(function ()
        {
         botonanterior();
         location.href = "../c_c8p4/fc_c8p4?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
        });

//para cargar variables capitulo, pregunta,encuestador,vivienda,barra



cargardatosgenerales('<?php echo($arraydatosgenerales['ecapitulo']); ?>','Pregunta 5 de 7','<?php echo($arraydatosgenerales['enomcoges']); ?>','<?php echo($arraydatosgenerales['enombreintegrante']." "." - "." "."Sexo:"." ".$arraydatosgenerales['esexointegrante']."   "."  -  "."   "."Edad:"."   ".$arraydatosgenerales['eedadintegrante']); ?>','75');
//control del boton ayuda
botonayuda();

});

</script>
</html>