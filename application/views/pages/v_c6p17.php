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
        <input type="text" class="form-control input-sm" id="c6p17ao1" name="c6p17ao1" style="display:none" placeholder="" value="<?php echo($arrayrespuestas['ec6p17ao1']); ?>">
        <!--fin para imprimir el folio y llevarlo-->
<hr>
        <form class="form-group" name="formulario" id="formulario">

            <!--inicio radio una sola seleccion-->
            <div class="row">
            <div id="c6p17div" name="c6p17div" <?php if($arrayrespuestas['ec6p17']==''){echo('class="form-group col-md-12 form-group-sm has-error"');}else{echo('class="form-group col-md-12 form-group-sm"');}?>> 
                <label class="control-label">17. ¿Algun integante del hogar participa de los programas de complementaciòn alimentaria de la Alcaldia?
                        <span class="glyphicon glyphicon-question-sign" aria-hidden="true"></span> Ayuda
                    </button>
                </label>
                <div class="radio">
                    <label><!--en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="c6p17" id="c6p17" onclick="colocaropcion('1','valorc6p17','c6p17div');" value="1" <?php if($arrayrespuestas['ec6p17']=='1'){echo('checked');}?>>
                        Si
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="c6p17" id="c6p17" onclick="colocaropcion('2','valorc6p17','c6p17div');" value="2" <?php if($arrayrespuestas['ec6p17']=='2'){echo('checked');}?>>
                        No
                    </label>             
                </div>
            <input type="text" class="form-control" id="valorc6p17" name="valorc6p17" style="display:none" placeholder="Text input" value="<?php echo($arrayrespuestas['ec6p17']); ?>">
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
            <?php if($arrayrespuestas['ec6p17']=="")
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
                          data: {vfolio : $('#folio').val(), vvalorc6p17 : $('#valorc6p17').val()},    
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
                          data: {vfolio : $('#folio').val(), vvalorc6p17 : $('#valorc6p17').val()},    
                          dataType: "html",
                          success : function(obj){                      
                          botonactualizar();
                          }
                        });                   
        });
        
        $("#siguiente").click(function ()
        {
         botonsiguiente();
         if($('#valorc6p17').val() === '2')
           {                $.ajax({
                            url: "../c_c6p17a/fc_actualizar",
                            type: "GET",
                            data: {vfolio : $('#folio').val(),
                            vc6p17ao1 : '98',
                            vc6p17ao2 : '98',
                            vc6p17ao3 : '98',
                            vc6p17ao4 : '98',
                            vc6p17ao5 : '98',
                            vc6p17ao6 : '98',
                            vc6p17ao7 : '98',
                            vc6p17ao8 : '98',
                            vc6p17ao9 : '98',
                            vc6p17ao10 : '98',
                            vc6p17ao11 : '98'},
                            dataType: "html",
                            success : function(obj)
                            {
                            location.href = "../c_c6p18/fc_c6p18?folio=" + $('#folio').val();                    
                            }
                           });
                           
           }
           else if (($('#valorc6p17').val() === '1' && $('#c6p17ao1').val() === '98'))
                 {
                    $.ajax({
                            url: "../c_c6p17a/fc_actualizar",
                            type: "GET",
                            data: {vfolio : $('#folio').val(),
                            vc6p17ao1 : '',
                            vc6p17ao2 : '',
                            vc6p17ao3 : '',
                            vc6p17ao4 : '',
                            vc6p17ao5 : '',
                            vc6p17ao6 : '',
                            vc6p17ao7 : '',
                            vc6p17ao8 : '',
                            vc6p17ao9 : '',
                            vc6p17ao10 : '',
                            vc6p17ao11 : ''},
                            dataType: "html",
                            success : function(obj)
                            {
                            location.href = "../c_c6p17a/fc_c6p17a?folio=" + $('#folio').val();                    
                            }
                           });
                 }
                 else{
                     location.href = "../c_c6p17a/fc_c6p17a?folio=" + $('#folio').val();                    
                 }
                 
                 
        });
        
//         
//         location.href = "../c_c6p17a/fc_c6p17a?folio=" + $('#folio').val();                    
//
//        });
//              
        $("#anterior").click(function ()
        {
         botonanterior();
         location.href = "../c_c6p16/fc_c6p16?folio=" + $('#folio').val();                    
        });

//para cargar variables capitulo, pregunta,encuestador,vivienda,barra
cargardatosgenerales('<?php echo($arraydatosgenerales['ecapitulo']); ?>','Pregunta 17 de 19','<?php echo($arraydatosgenerales['enomcoges']); ?>','<?php echo($arraydatosgenerales['etitular']); ?>','85');
//control del boton ayuda
botonayuda();

});

</script>
</html>