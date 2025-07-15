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
       <input type="text" class="form-control input-sm" id="c12p2ao1" name="c12p2ao1" style="display:none"  placeholder="" value="<?php echo($arrayrespuestas['ec12p2ao1']); ?>">
       <input type="text" class="form-control" id="valorc12p2ao2b" style="display:none" name="valorc12p2ao2b"  placeholder="Text input" value="<?php echo($arrayrespuestas['ec12p2ao2b']); ?>">
        <!--fin para imprimir el idintegrante y llevarlo-->
<hr>
        <form class="form-group" name="formulario" id="formulario">

            <!--inicio radio una sola seleccion-->
            <div class="row">
            <div id="c12p2ao2div" name="c12p2ao2div" <?php if($arrayrespuestas['ec12p2ao2']=='' ){echo('class="form-group col-md-12 form-group-sm has-error"');}else{echo('class="form-group col-md-12 form-group-sm"');}?>>   
                <label class="control-label">2. B ¿ Cuál es el tipo de discapacidad certificada?<br/>
                    b. Discapacidad cognitiva
                    <button type="button" id="vayuda" name="vayuda" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModal">
                        <span class="glyphicon glyphicon-question-sign" aria-hidden="true"></span> Ayuda
                    </button>
                </label>
                <div class="radio">
                    <label><!--en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="c12p2ao2" id="c12p2ao2" onclick="colocaropcion('1','valorc12p2ao2','c12p2ao2div');" value="1" <?php if($arrayrespuestas['ec12p2ao2']=='1'){echo('checked');}?>>
                        Si
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="c12p2ao2" id="c12p2ao2" onclick="colocaropcion('2','valorc12p2ao2','c12p2ao2div');" value="2" <?php if($arrayrespuestas['ec12p2ao2']=='2'){echo('checked');}?>>
                        No
                    </label>             
                </div>               
                <input type="text" class="form-control" id="valorc12p2ao2" name="valorc12p2ao2" style="display:none" placeholder="Text input" value="<?php echo($arrayrespuestas['ec12p2ao2']); ?>">
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
            <?php if($arrayrespuestas['ec12p2ao2']=="")
            {
            echo($botoneragdisable);
            }
            else
            {
            echo($botoneraadisable);
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
                          vvalorc12p2ao2 : $('#valorc12p2ao2').val()},    
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
                          vvalorc12p2ao2 : $('#valorc12p2ao2').val()},    
                          dataType: "html",
                          success : function(obj){                      
                          botonguardar();
                          }
                        });                    
        });
        

        $("#siguiente").click(function ()
        {
         botonsiguiente();
         
         if($('#valorc12p2ao2').val() == '2')

         {
             $.ajax({
                          url: "../c_c12p2ao2b/fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),
                          vidintegrante : $('#idintegrante').val(),
                          vvalorc12p2ao2b : '98'},    
                          dataType: "html",
                          success : function(obj){                      
                          location.href = "../c_c12p2ao3/fc_c12p2ao3?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val();                    
                          }
                        });
         }
         
         else if($('#valorc12p2ao2').val() == '1' && $('#valorc12p2ao2b').val() =='98')

//         else
         {
                           $.ajax({
                          url: "../c_c12p2ao2b/fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),
                          vidintegrante : $('#idintegrante').val(),
                          vvalorc12p2ao2b : ''},    
                          dataType: "html",
                          success : function(obj){                      
                          location.href = "../c_c12p2ao2b/fc_c12p2ao2b?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val();                    
                          }
                        });
         }
         else
         {
             
             location.href = "../c_c12p2ao2b/fc_c12p2ao2b?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val();
         }
        });
        $("#anterior").click(function ()
        {
         botonanterior();
         if($('#c12p2ao1').val() == '2')
           {           
            location.href = "../c_c12p2ao1/fc_c12p2ao1?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
           }
           else
           {
           location.href = "../c_c12p2ao1a/fc_c12p2ao1a?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
           }
           });
//para cargar variables capitulo, pregunta,encuestador,vivienda,barra
cargardatosgenerales('<?php echo($arraydatosgenerales['ecapitulo']); ?>','Pregunta 2b de 4','<?php echo($arraydatosgenerales['enomcoges']); ?>','<?php echo($arraydatosgenerales['enombreintegrante']." "." - "." "."Sexo:"." ".$arraydatosgenerales['esexointegrante']."   "."  -  "."   "."Edad:"."   ".$arraydatosgenerales['eedadintegrante']); ?>','55');
//control del boton ayuda
botonayuda();
});
</script>
</html>