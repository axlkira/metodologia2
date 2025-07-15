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
        <input type="text" class="form-control" id="valorc4p11o1" style="display: none"  name="valorc4p11o1"  placeholder="Text input" value="<?php echo($arrayrespuestas['ec4p11o1']); ?>">
        <input type="text" class="form-control" id="c4p12" name="c4p12" style="display: none" placeholder="Text input" value="<?php echo($arrayrespuestas['ec4p12']); ?>">
        <!--fin para imprimir el idintegrante y llevarlo-->
<hr>
        <form class="form-group" name="formulario" id="formulario">

            <!--inicio radio una sola seleccion-->
            <div class="row">
            <div id="c4p14div" name="c4p14div" <?php if($arrayrespuestas['ec4p14']==''){echo('class="form-group col-md-12 form-group-sm has-error"');}else{echo('class="form-group col-md-12 form-group-sm"');}?>>   
                <label class="control-label">14.¿De cuál de los siguientes grupos étnicos se considera? 
                    <button type="button" id="vayuda" name="vayuda" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModal">
                        <span class="glyphicon glyphicon-question-sign" aria-hidden="true"></span> Ayuda
                    </button>
                </label>
                <div class="radio">
                    <label><!--en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="c4p14" id="c4p14" onclick="colocaropcion('c4p14o1','valorc4p14','c4p14div');" value="c4p14o1" <?php if($arrayrespuestas['ec4p14']=='c4p14o1'){echo('checked');}?>>
                        Indígena - Originario
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="c4p14" id="c4p14" onclick="colocaropcion('c4p14o2','valorc4p14','c4p14div');" value="c4p14o2" <?php if($arrayrespuestas['ec4p14']=='c4p14o2'){echo('checked');}?>>
                        Rom - Gitano
                    </label>             
                </div> 
                
                
                <div class="radio">
                    <label><!--en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="c4p14" id="c4p14" onclick="colocaropcion('c4p14o3','valorc4p14','c4p14div');" value="c4p14o3" <?php if($arrayrespuestas['ec4p14']=='c4p14o3'){echo('checked');}?>>
                        Raizal
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="c4p14" id="c4p14" onclick="colocaropcion('c4p14o4','valorc4p14','c4p14div');" value="c4p14o4" <?php if($arrayrespuestas['ec4p14']=='c4p14o4'){echo('checked');}?>>
                        AfroColombiano - Afrodescendiente
                    </label>             
                </div> 
                 
                <div class="radio">
                    <label>
                        <input type="radio" name="c4p14" id="c4p14" onclick="colocaropcion('c4p14o5','valorc4p14','c4p14div');" value="c4p14o5" <?php if($arrayrespuestas['ec4p14']=='c4p14o5'){echo('checked');}?>>
                        Palenquero 
                    </label>             
                </div> 
                
                 <div class="radio">
                    <label>
                        <input type="radio" name="c4p14" id="c4p14" onclick="colocaropcion('c4p14o6','valorc4p14','c4p14div');" value="c4p14o6" <?php if($arrayrespuestas['ec4p14']=='c4p14o6'){echo('checked');}?>>
                        Ninguno
                    </label>             
                </div>
                
                <div class="radio">
                    <label>
                        <input type="radio" name="c4p14" id="c4p14" onclick="colocaropcion('c4p14o7','valorc4p14','c4p14div');" value="c4p14o7" <?php if($arrayrespuestas['ec4p14']=='c4p14o7'){echo('checked');}?>>
                        Negro
                    </label>             
                </div>
                
                
                                
                 
               
                
                <input type="text" class="form-control" id="valorc4p14" name="valorc4p14" style="display:none" placeholder="Text input" value="<?php echo($arrayrespuestas['ec4p14']); ?>">
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
            <?php if($arrayrespuestas['ec4p14']=="")
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
                          data: {vfolio : $('#folio').val(),vidintegrante : $('#idintegrante').val(), vvalorc4p14 : $('#valorc4p14').val()},    
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
                          data: {vfolio : $('#folio').val(),vidintegrante : $('#idintegrante').val(), vvalorc4p14 : $('#valorc4p14').val()},    
                          dataType: "html",
                          success : function(obj){                      
                          botonguardar();
                          }
                        });                    
        });
        

        $("#siguiente").click(function ()
        {
         botonsiguiente();
         location.href = "../c_capitulosintegrante/fc_capitulosintegrante?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    

        });
              
        $("#anterior").click(function ()
        {
         botonanterior();
//         location.href = "../c_c4p13/fc_c4p13?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
        //location.href = "../c_capitulosintegrantes/fc_capitulosintegrantes?idintegrante=" + $('#idintegrante').val()+ "&idintegrante="+"&idintegrante=0";  
        
        if($('#valorc4p11o1').val() == '2')
        {
             location.href = "../c_c4p11/fc_c4p11?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";
        }
        else if($('#c4p12').val() == '2'||$('#c4p12').val() == '5')
        {
          location.href = "../c_c4p12/fc_c4p12?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";  
        }
        else
        {
            location.href = "../c_c4p13/fc_c4p13?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";
        }
        });



cargardatosgenerales('<?php echo($arraydatosgenerales['ecapitulo']); ?>','Pregunta 14 de 14','<?php echo($arraydatosgenerales['enomcoges']); ?>','<?php echo($arraydatosgenerales['enombreintegrante']." "." - "." "."Sexo:"." ".$arraydatosgenerales['esexointegrante']."   "."  -  "."   "."Edad:"."   ".$arraydatosgenerales['eedadintegrante']); ?>','90.9');
//control del boton ayuda
botonayuda();

});

</script>
</html>