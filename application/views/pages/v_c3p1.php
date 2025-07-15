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
        <input type="text" class="form-control input-sm" id="c3p1ao1" name="c3p1ao1" placeholder="" style="display:none" value="<?php echo($arrayrespuestas['ec3p1ao1']); ?>">
        <!--fin para imprimir el folio y llevarlo-->
<hr>
        <form class="form-group" name="formulario" id="formulario">

            <!--inicio radio una sola seleccion-->
            <div class="row">
            <div id="c3p1div" name="c3p1div" <?php if($arrayrespuestas['ec3p1']==''){echo('class="form-group col-md-12 form-group-sm has-error"');}else{echo('class="form-group col-md-12 form-group-sm"');}?>>   
                <label class="control-label">1. ¿En este hogar se realiza algún tipo de ahorro?
                    <button type="button" id="vayuda" name="vayuda" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModal">
                        <span class="glyphicon glyphicon-question-sign" aria-hidden="true"></span> Ayuda
                    </button>
                </label>
                <div class="radio">
                    <label><!--en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="c3p1" id="c3p1" onclick="colocaropcion('1','valorc3p1','c3p1div');" value="1" <?php if($arrayrespuestas['ec3p1']=='1'){echo('checked');}?>>
                        Si
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="c3p1" id="c3p1" onclick="colocaropcion('2','valorc3p1','c3p1div');" value="2" <?php if($arrayrespuestas['ec3p1']=='2'){echo('checked');}?>>
                        No
                    </label>             
                </div>
            <input type="text" class="form-control" id="valorc3p1" name="valorc3p1" style="display:none" placeholder="Text input" value="<?php echo($arrayrespuestas['ec3p1']); ?>">
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
            <?php if($arrayrespuestas['ec3p1']=="")
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
                          data: {vfolio : $('#folio').val(), vvalorc3p1 : $('#valorc3p1').val()},    
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
                          data: {vfolio : $('#folio').val(), vvalorc3p1 : $('#valorc3p1').val()},    
                          dataType: "html",
                          success : function(obj){                      
                          botonactualizar();
                          }
                        });                   
        });
        

        $("#siguiente").click(function ()
        {
         botonsiguiente();
         if($('#valorc3p1').val() === '1')
           {   $.ajax({
                             url: "../c_c3p1a/fc_actualizar",
                             type: "GET",
                             data: {vfolio : $('#folio').val(), vc3p1ao1 : '98', vc3p1ao2 : '98', vc3p1ao3 : '98', vc3p1ao4 : '98',
                             vc3p1ao5 : '98'},    
                             dataType: "html",
                             success : function(obj){  
                             location.href = "../c_c3p2/fc_c3p2?folio=" + $('#folio').val();                    
                             }
                           }); 
           }
           else if ($('#valorc3p1').val() === '2' && $('#c3p1ao1').val() === '98')
           {    $.ajax({
                             url: "../c_c3p1a/fc_actualizar",
                             type: "GET",
                             data: {vfolio : $('#folio').val(), vc3p1ao1 : '', vc3p1ao2 : '', vc3p1ao3 : '', vc3p1ao4 : '', vc3p1ao5 : ''},    
                             dataType: "html",
                             success : function(obj){  
                             location.href = "../c_c3p1a/fc_c3p1a?folio=" + $('#folio').val();                    
                             }
                           }); 
           }
           else
                 {
                     location.href = "../c_c3p1a/fc_c3p1a?folio=" + $('#folio').val();                    
                 }
        });
              
        $("#anterior").click(function ()
        {
         //botonanterior();
         location.href = "../c_capituloshogar/fc_capituloshogar?folio=" + $('#folio').val() +  "&idintegrante=0";                    
        });

//para cargar variables capitulo, pregunta,encuestador,vivienda,barra
cargardatosgenerales('<?php echo($arraydatosgenerales['ecapitulo']); ?>','Pregunta 1 de 4','<?php echo($arraydatosgenerales['enomcoges']); ?>','<?php echo($arraydatosgenerales['etitular']); ?>','20');
//control del boton ayuda
botonayuda();

});

</script>
</html>