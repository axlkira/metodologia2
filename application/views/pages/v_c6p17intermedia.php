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
        <input type="text" class="form-control input-sm" id="c6p17aintermediao1" style="display:none"  name="c6p17aintermediao1"  placeholder="" value="<?php echo($arrayrespuestas['ec6p17aintermediao1']); ?>">
        <!--fin para imprimir el folio y llevarlo-->
<hr>
        <form class="form-group" name="formulario" id="formulario">

            <!--inicio radio una sola seleccion-->
            <div class="row">
            <div id="c6p17intermediadiv" name="c6p17intermediadiv" <?php if($arrayrespuestas['ec6p17intermedia']==''){echo('class="form-group col-md-12 form-group-sm has-error"');}else{echo('class="form-group col-md-12 form-group-sm"');}?>> 
               
                
                <label class="control-label">17. ¿Algun integante del hogar participa de los programas de complementaciòn alimentaria de la Alcaldia?
                   <button type="button" id="vayuda" name="vayuda" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModal">
                        <span class="glyphicon glyphicon-question-sign" aria-hidden="true"></span> Ayuda
                    </button>
                </label>
                <div class="radio">
                    <label><!--en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="c6p17intermedia" id="c6p17intermedia" onclick="colocaropcion('1','valorc6p17intermedia','c6p17intermediadiv');" value="1" <?php if($arrayrespuestas['ec6p17intermedia']=='1'){echo('checked');}?>>
                        Si
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="c6p17intermedia" id="c6p17intermedia" onclick="colocaropcion('2','valorc6p17intermedia','c6p17intermediadiv');" value="2" <?php if($arrayrespuestas['ec6p17intermedia']=='2'){echo('checked');}?>>
                        No
                    </label>             
                </div>
            <input type="text" class="form-control" id="valorc6p17intermedia" name="valorc6p17intermedia" style="display:none" placeholder="Text input" value="<?php echo($arrayrespuestas['ec6p17intermedia']); ?>">
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
            <?php if($arrayrespuestas['ec6p17intermedia']=="")
             {
                echo($botoneraginterh);
            }
            else
            {
                echo($botoneraainterh);
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
                          data: {vfolio : $('#folio').val(), vvalorc6p17intermedia : $('#valorc6p17intermedia').val()},    
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
                          data: {vfolio : $('#folio').val(), vvalorc6p17intermedia : $('#valorc6p17intermedia').val()},    
                          dataType: "html",
                          success : function(obj){                      
                          botonactualizar();
                          }
                        });                   
        });
        
        $("#siguiente").click(function ()
        {
         botonsiguiente();
         if($('#valorc6p17intermedia').val() === '2')
           {                $.ajax({
                            url: "../c_c6p17aintermedia/fc_actualizar",
                            type: "GET",
                            data: {vfolio : $('#folio').val(),
                            vc6p17aintermediao1: '98',
                            vc6p17aintermediao2 : '98',
                            vc6p17aintermediao3 : '98',
                            vc6p17aintermediao4 : '98',
                            vc6p17aintermediao5 : '98',
                            vc6p17aintermediao6: '98',
                            vc6p17aintermediao7 : '98',
                            vc6p17aintermediao8: '98',
                            vc6p17aintermediao9 : '98',
                            vc6p17aintermediao10 : '98',
                            vc6p17aintermediao11 : '98'},
                            dataType: "html",
                            success : function(obj)
                            {
                            location.href = "../c_c6p18intermedia/fc_c6p18intermedia?folio=" + $('#folio').val();                    
                            }
                           });
                           
           }
           else if (($('#valorc6p17intermedia').val() === '1' && $('#c6p17aintermediao1').val() === '98'))
                 {
                    $.ajax({
                            url: "../c_c6p17aintermedia/fc_actualizar",
                            type: "GET",
                            data: {vfolio : $('#folio').val(),
                              vc6p17aintermediao1: '',
                            vc6p17aintermediao2 : '',
                            vc6p17aintermediao3 : '',
                            vc6p17aintermediao4 : '',
                            vc6p17aintermediao5 : '',
                            vc6p17aintermediao6: '',
                            vc6p17aintermediao7 : '',
                            vc6p17aintermediao8: '',
                            vc6p17aintermediao9 : '',
                            vc6p17aintermediao10 : '',
                            vc6p17aintermediao11 : ''},
                            dataType: "html",
                            success : function(obj)
                            {
                            location.href = "../c_c6p17aintermedia/fc_c6p17aintermedia?folio=" + $('#folio').val();                    
                            }
                           });
                 }
                 else{
                     location.href = "../c_c6p17aintermedia/fc_c6p17aintermedia?folio=" + $('#folio').val();                    
                 }
                 
                 
        });
        
//         
//         location.href = "../c_c6p17intermediaa/fc_c6p17intermediaa?folio=" + $('#folio').val();                    
//
//        });
//              
        $("#anterior").click(function ()
        {
         botonanterior();
         location.href = "../c_c6p16intermedia/fc_c6p16intermedia?folio=" + $('#folio').val();                    
        });

//para cargar variables capitulo, pregunta,encuestador,vivienda,barra
cargardatosgenerales('<?php echo($arraydatosgenerales['ecapitulo']); ?>','Pregunta 17 de 19','<?php echo($arraydatosgenerales['enomcoges']); ?>','<?php echo($arraydatosgenerales['etitular']); ?>','85');
//control del boton ayuda
botonayuda();

});

</script>
</html>