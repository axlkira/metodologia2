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
<!--        <input type="text" class="form-control input-sm" id="c7p2" name="c7p2"  style="display:none"  placeholder="" value="<?php echo($arrayrespuestas['ec7p2']); ?>">-->
        
        <!--fin para imprimir el idintegrante y llevarlo-->
<hr>
        <form class="form-group" name="formulario" id="formulario">

            <!--inicio radio una sola seleccion-->
            <div class="row">
            <div id="c7p1intermediadiv" name="c7p1intermediadiv" <?php if($arrayrespuestas['ec7p1intermedia']==''){echo('class="form-group col-md-12 form-group-sm has-error"');}else{echo('class="form-group col-md-12 form-group-sm"');}?>>   
                <label class="control-label">1.¿Dónde permanece ..… durante la mayor parte del tiempo entre semana? (Unica Respuesta)
                    <button type="button" id="vayuda" name="vayuda" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModal">
                        <span class="glyphicon glyphicon-question-sign" aria-hidden="true"></span> Ayuda
                    </button>
                </label>
                <div class="radio">
                    <label><!--en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="c7p1intermedia" id="c7p1intermedia" onclick="colocaropcion('c7p1intermediao1','valorc7p1intermedia','c7p1intermediadiv');" value="c7p1intermediao1" <?php if($arrayrespuestas['ec7p1intermedia']=='c7p1intermediao1'){echo('checked');}?>>
                         Asiste a un hogar comunitario ICBF
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="c7p1intermedia" id="c7p1intermedia" onclick="colocaropcion('c7p1intermediao2','valorc7p1intermedia','c7p1intermediadiv');" value="c7p1intermediao2" <?php if($arrayrespuestas['ec7p1intermedia']=='c7p1intermediao2'){echo('checked');}?>>
                        Asiste a una guardería o pre-escolar privado
                    </label>             
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="c7p1intermedia" id="c7p1intermedia" onclick="colocaropcion('c7p1intermediao3','valorc7p1intermedia','c7p1intermediadiv');" value="c7p1intermediao3" <?php if($arrayrespuestas['ec7p1intermedia']=='c7p1intermediao3'){echo('checked');}?>>
                        Asiste al programa de atención integral a primer infancia - Buen Comienzo
                    </label>             
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="c7p1intermedia" id="c7p1intermedia" onclick="colocaropcion('c7p1intermediao4','valorc7p1intermedia','c7p1intermediadiv');" value="c7p1intermediao4" <?php if($arrayrespuestas['ec7p1intermedia']=='c7p1intermediao4'){echo('checked');}?>>
                        En la casa de sus padres
                    </label>             
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="c7p1intermedia" id="c7p1intermedia" onclick="colocaropcion('c7p1intermediao5','valorc7p1intermedia','c7p1intermediadiv');" value="c7p1intermediao5" <?php if($arrayrespuestas['ec7p1intermedia']=='c7p1intermediao5'){echo('checked');}?>>
                        En el lugar de trabajo de los padres
                    </label>             
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="c7p1intermedia" id="c7p1intermedia" onclick="colocaropcion('c7p1intermediao6','valorc7p1intermedia','c7p1intermediadiv');" value="c7p1intermediao6" <?php if($arrayrespuestas['ec7p1intermedia']=='c7p1intermediao6'){echo('checked');}?>>
                        En el lugar de trabajo de un adulto diferente a sus padres
                    </label>             
                </div>
                 <div class="radio">
                    <label>
                        <input type="radio" name="c7p1intermedia" id="c7p1intermedia" onclick="colocaropcion('c7p1intermediao7','valorc7p1intermedia','c7p1intermediadiv');" value="c7p1intermediao7" <?php if($arrayrespuestas['ec7p1intermedia']=='c7p1intermediao7'){echo('checked');}?>>
                        En una casa ajena a la de los padres (vecinos, familiares, amigos, etc.)
                    </label>             
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="c7p1intermedia" id="c7p1intermedia" onclick="colocaropcion('c7p1intermediao8','valorc7p1intermedia','c7p1intermediadiv');" value="c7p1intermediao8" <?php if($arrayrespuestas['ec7p1intermedia']=='c7p1intermediao8'){echo('checked');}?>>
                        En la calle
                    </label>             
                </div>
                
                <div class="radio">
                    <label>
                        <input type="radio" name="c7p1intermedia" id="c7p1intermedia" onclick="colocaropcion('c7p1intermediao9','valorc7p1intermedia','c7p1intermediadiv');" value="c7p1intermediao9" <?php if($arrayrespuestas['ec7p1intermedia']=='c7p1intermediao9'){echo('checked');}?>>
                        Con un menor de 15 años
                    </label>             
                </div>
                 
               
                
                <input type="text" class="form-control" id="valorc7p1intermedia" name="valorc7p1intermedia" style="display:none" placeholder="Text input" value="<?php echo($arrayrespuestas['ec7p1intermedia']); ?>">
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
            <?php if($arrayrespuestas['ec7p1intermedia']=="")
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
                          data: {vfolio : $('#folio').val(),vidintegrante : $('#idintegrante').val(), vvalorc7p1intermedia : $('#valorc7p1intermedia').val()},    
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
                          data: {vfolio : $('#folio').val(),vidintegrante : $('#idintegrante').val(), vvalorc7p1intermedia : $('#valorc7p1intermedia').val()},    
                          dataType: "html",
                          success : function(obj){                      
                          botonguardar();
                          }
                        });                    
        });
        
        
         $("#capitulos").click(function ()
        {
            
            location.href = "../c_capitulosintegranteintermedia/fc_capitulosintegranteintermedia?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() ;                    
         
            }); 

        $("#siguiente").click(function ()
        {
         
         
          location.href = "../c_capitulosintegranteintermedia/fc_capitulosintegranteintermedia?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() ;                    
botonsiguiente();
        });
              
        $("#anterior").click(function ()
        {
        // botonanterior();
             
        location.href = "../c_capitulosintegranteintermedia/fc_capitulosintegranteintermedia?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                       
        });

//para cargar variables capitulo, pregunta,encuestador,vivienda,barra



cargardatosgenerales('<?php echo($arraydatosgenerales['ecapitulo']); ?>','Pregunta 1 de 3','<?php echo($arraydatosgenerales['enomcoges']); ?>','<?php echo($arraydatosgenerales['enombreintegrante']." "." - "." "."Sexo:"." ".$arraydatosgenerales['esexointegrante']."   "."  -  "."   "."Edad:"."   ".$arraydatosgenerales['eedadintegrante']); ?>','33');
//control del boton ayuda
botonayuda();

});

</script>
</html>