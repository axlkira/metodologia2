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
            <div id="c13p14div" name="c13p14div" <?php if($arrayrespuestas['ec13p14']==''){echo('class="form-group col-md-12 form-group-sm has-error"');}else{echo('class="form-group col-md-12 form-group-sm"');}?>>   
                <label class="control-label">14. ¿CUÁL ES EL MAYOR GRADO DE ESCOLARIDAD DE LOS INTEGRANTES DE SU HOGAR? (ÚNICA RESPUESTA)       
                    <button type="button" id="vayuda" name="vayuda" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModal">
                        <span class="glyphicon glyphicon-question-sign" aria-hidden="true"></span> Ayuda
                    </button>
                </label>
                <div class="radio">
                    <label><!--en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="c13p14" id="c13p14" onclick="colocaropcion('c13p14o1','valorc13p14','c13p14div');" value="c13p14o1" <?php if($arrayrespuestas['ec13p14']=='c13p14o1'){echo('checked');}?>>
                        a. Ninguno
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="c13p14" id="c13p14" onclick="colocaropcion('c13p14o2','valorc13p14','c13p14div');" value="c13p14o2" <?php if($arrayrespuestas['ec13p14']=='c13p14o2'){echo('checked');}?>>
                        b. Preescolar
                    </label>             
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="c13p14" id="c13p14" onclick="colocaropcion('c13p14o3','valorc13p14','c13p14div');" value="c13p14o3" <?php if($arrayrespuestas['ec13p14']=='c13p14o3'){echo('checked');}?>>
                        c. Básica primaria
                    </label>             
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="c13p14" id="c13p14" onclick="colocaropcion('c13p14o4','valorc13p14','c13p14div');" value="c13p14o4" <?php if($arrayrespuestas['ec13p14']=='c13p14o4'){echo('checked');}?>>
                        d. Básica secundaria
                    </label>             
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="c13p14" id="c13p14" onclick="colocaropcion('c13p14o5','valorc13p14','c13p14div');" value="c13p14o5" <?php if($arrayrespuestas['ec13p14']=='c13p14o5'){echo('checked');}?>>
                        e. Media
                    </label>             
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="c13p14" id="c13p14" onclick="colocaropcion('c13p14o6','valorc13p14','c13p14div');" value="c13p14o6" <?php if($arrayrespuestas['ec13p14']=='c13p14o6'){echo('checked');}?>>
                        f. Técnico sin titulo
                    </label>             
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="c13p14" id="c13p14" onclick="colocaropcion('c13p14o7','valorc13p14','c13p14div');" value="c13p14o7" <?php if($arrayrespuestas['ec13p14']=='c13p14o7'){echo('checked');}?>>
                        g. Técnico con titulo
                    </label>             
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="c13p14" id="c13p14" onclick="colocaropcion('c13p14o8','valorc13p14','c13p14div');" value="c13p14o8" <?php if($arrayrespuestas['ec13p14']=='c13p14o8'){echo('checked');}?>>
                        h. Técnologico sin titulo
                    </label>             
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="c13p14" id="c13p14" onclick="colocaropcion('c13p14o9','valorc13p14','c13p14div');" value="c13p14o9" <?php if($arrayrespuestas['ec13p14']=='c13p14o9'){echo('checked');}?>>
                        i. Técnologico con titulo
                    </label>             
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="c13p14" id="c13p14" onclick="colocaropcion('c13p14o10','valorc13p14','c13p14div');" value="c13p14o10" <?php if($arrayrespuestas['ec13p14']=='c13p14o10'){echo('checked');}?>>
                        j. Universitario sin titulo
                    </label>             
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="c13p14" id="c13p14" onclick="colocaropcion('c13p14o11','valorc13p14','c13p14div');" value="c13p14o11" <?php if($arrayrespuestas['ec13p14']=='c13p14o11'){echo('checked');}?>>
                        k. Universitario con titulo
                    </label>             
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="c13p14" id="c13p14" onclick="colocaropcion('c13p14o12','valorc13p14','c13p14div');" value="c13p14o12" <?php if($arrayrespuestas['ec13p14']=='c13p14o12'){echo('checked');}?>>
                        l. Posgrado sin titulo
                    </label>             
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="c13p14" id="c13p14" onclick="colocaropcion('c13p14o13','valorc13p14','c13p14div');" value="c13p14o13" <?php if($arrayrespuestas['ec13p14']=='c13p14o13'){echo('checked');}?>>
                        m. Posgrado con titulo
                    </label>             
                </div>
                
                <input type="text" class="form-control" id="valorc13p14" name="valorc13p14" style="display:none" placeholder="Text input" value="<?php echo($arrayrespuestas['ec13p14']); ?>">
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
            <?php if($arrayrespuestas['ec13p14']=="")
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
                          data: {vfolio : $('#folio').val(), vvalorc13p14 : $('#valorc13p14').val()},    
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
                          data: {vfolio : $('#folio').val(), vvalorc13p14 : $('#valorc13p14').val()},    
                          dataType: "html",
                          success : function(obj){                      
                          botonactualizar();
                          }
                        });                   
        });
        

        $("#siguiente").click(function ()
        {
         botonsiguiente();
         location.href = "../c_c13p3/fc_c13p3?folio=" + $('#folio').val();                    

        });
              
        $("#anterior").click(function ()
        {
         botonanterior();
         location.href = "../c_c13p1312/fc_c13p1312?folio=" + $('#folio').val();
        //location.href = "../c_capitulosintegrantes/fc_capitulosintegrantes?folio=" + $('#folio').val()+ "&idintegrante="+"&idintegrante=0";                    
        });

//para cargar variables capitulo, pregunta,encuestador,vivienda,barra
cargardatosgenerales('<?php echo($arraydatosgenerales['ecapitulo']); ?>','Pregunta 14 de 22','<?php echo($arraydatosgenerales['enomcoges']); ?>','<?php echo($arraydatosgenerales['etitular']); ?>','51');
//control del boton ayuda
botonayuda();

});

</script>
</html>