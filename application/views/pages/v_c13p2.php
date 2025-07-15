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
        <!--fin para imprimir el folio y llevarlo-->
<hr>
        <form class="form-group" name="formulario" id="formulario">

            <!--inicio radio una sola seleccion-->
            <div class="row">
            <div id="c13p2div" name="c13p2div" <?php if($arrayrespuestas['ec13p2']==''){echo('class="form-group col-md-12 form-group-sm has-error"');}else{echo('class="form-group col-md-12 form-group-sm"');}?>>   
                <label class="control-label">2. ¿CUÁL ES EL TIPO DE VIVIENDA EN EL QUE RESIDEN ACTUALMENTE? (ÚNICA RESPUESTA)
                    <button type="button" id="vayuda" name="vayuda" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModal">
                        <span class="glyphicon glyphicon-question-sign" aria-hidden="true"></span> Ayuda
                    </button>
                </label>
                <div class="radio">
                    <label><!--en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="c13p2" id="c13p2" onclick="colocaropcion('c13p2o1','valorc13p2','c13p2div');" value="c13p2o1" <?php if($arrayrespuestas['ec13p2']=='c13p2o1'){echo('checked');}?>>
                        Casa
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="c13p2" id="c13p2" onclick="colocaropcion('c13p2o2','valorc13p2','c13p2div');" value="c13p2o2" <?php if($arrayrespuestas['ec13p2']=='c13p2o2'){echo('checked');}?>>
                        Apartamento
                    </label>             
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="c13p2" id="c13p2" onclick="colocaropcion('c13p2o3','valorc13p2','c13p2div');" value="c13p2o3" <?php if($arrayrespuestas['ec13p2']=='c13p2o3'){echo('checked');}?>>
                        Apartaestudio
                    </label>             
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="c13p2" id="c13p2" onclick="colocaropcion('c13p2o4','valorc13p2','c13p2div');" value="c13p2o4" <?php if($arrayrespuestas['ec13p2']=='c13p2o4'){echo('checked');}?>>
                        Cuarto
                    </label>             
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="c13p2" id="c13p2" onclick="colocaropcion('c13p2o5','valorc13p2','c13p2div');" value="c13p2o5" <?php if($arrayrespuestas['ec13p2']=='c13p2o5'){echo('checked');}?>>
                        Inquilinato
                    </label>             
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="c13p2" id="c13p2" onclick="colocaropcion('c13p2o6','valorc13p2','c13p2div');" value="c13p2o6" <?php if($arrayrespuestas['ec13p2']=='c13p2o6'){echo('checked');}?>>
                        Rancho
                    </label>             
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="c13p2" id="c13p2" onclick="colocaropcion('c13p2o7','valorc13p2','c13p2div');" value="c13p2o7" <?php if($arrayrespuestas['ec13p2']=='c13p2o7'){echo('checked');}?>>
                        Otra
                    </label>             
                </div>
                
                <input type="text" class="form-control" id="valorc13p2" name="valorc13p2" style="display:none" placeholder="Text input" value="<?php echo($arrayrespuestas['ec13p2']); ?>">
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
            <?php if($arrayrespuestas['ec13p2']=="")
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
                          data: {vfolio : $('#folio').val(), vvalorc13p2 : $('#valorc13p2').val()},    
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
                          data: {vfolio : $('#folio').val(), vvalorc13p2 : $('#valorc13p2').val()},    
                          dataType: "html",
                          success : function(obj){                      
                          botonactualizar();
                          }
                        });                   
        });
        

        $("#siguiente").click(function ()
        {
         botonsiguiente();
         if($('#valorc13p2').val() === 'c13p2o4' || $('#valorc13p2').val() === 'c13p2o5' )
           {   $.ajax({
                             url: "../c_c13p3/fc_actualizar",
                             type: "GET",
                             data: {vfolio : $('#folio').val(), vvalorc13p3 : '98'},    
                             dataType: "html",
                             success : function(obj){  
                             location.href = "../c_c13p4/fc_c13p4?folio=" + $('#folio').val();                    
                             }
                           }); 
           }
           else
           {    $.ajax({
                             url: "../c_c13p3/fc_actualizar",
                             type: "GET",
                             data: { vfolio : $('#folio').val(),  vvalorc13p3 : ''},    
                             dataType: "html",
                             success : function(obj){  
                             location.href = "../c_c13p3/fc_c13p3?folio=" + $('#folio').val();                    
                             }
                           }); 
           }
         
//         location.href = "../c_c13p3/fc_c13p3?folio=" + $('#folio').val();                    

        });
              
        $("#anterior").click(function ()
        {
         botonanterior();
         location.href = "../c_c13p1ap12/fc_c13p1ap12?folio="+ $('#folio').val() +"&idintegrante="+$('#idintegrante').val();
        //location.href = "../c_capitulosintegrantes/fc_capitulosintegrantes?folio=" + $('#folio').val()+ "&idintegrante="+"&idintegrante=0";                    
        });

//para cargar variables capitulo, pregunta,encuestador,vivienda,barra
cargardatosgenerales('<?php echo($arraydatosgenerales['ecapitulo']); ?>','Pregunta 2 de 22','<?php echo($arraydatosgenerales['enomcoges']); ?>','<?php echo($arraydatosgenerales['etitular']); ?>','3');
//control del boton ayuda
botonayuda();

});

</script>
</html>