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
        <input type="text" class="form-control input-sm" id="c9p14o1" name="c9p14o1"  style="display:none"   placeholder="" value="<?php echo($arrayrespuestas['ec9p14o1']); ?>">
        <input type="text" class="form-control input-sm" id="c9p8" name="c9p8"   style="display:none"   placeholder="" value="<?php echo($arrayrespuestas['ec9p8']); ?>">
        <!--fin para imprimir el idintegrante y llevarlo-->
<hr>
        <form class="form-group" name="formulario" id="formulario">

            <!--inicio radio una sola seleccion-->
            <div class="row">
            <div id="c9p20intermediadiv" name="c9p20intermediadiv" <?php if($arrayrespuestas['ec9p20intermedia']==''){echo('class="form-group col-md-12 form-group-sm has-error"');}else{echo('class="form-group col-md-12 form-group-sm"');}?>>   
                <label class="control-label">13. Está cotizando actualmente a un fondo de pensiones? (unica respuesta) 
                    <button type="button" id="vayuda" name="vayuda" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModal">
                        <span class="glyphicon glyphicon-question-sign" aria-hidden="true"></span> Ayuda
                    </button>
                </label>
                <div class="radio">
                    <label><!--en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="c9p20intermedia" id="c9p20intermedia" onclick="colocaropcion('1','valorc9p20intermedia','c9p20intermediadiv');" value="1" <?php if($arrayrespuestas['ec9p20intermedia']=='1'){echo('checked');}?>>
                        Si
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="c9p20intermedia" id="c9p20intermedia" onclick="colocaropcion('2','valorc9p20intermedia','c9p20intermediadiv');" value="2" <?php if($arrayrespuestas['ec9p20intermedia']=='2'){echo('checked');}?>>
                        No
                    </label>             
                </div> 
                <div class="radio">
                    <label>
                        <input type="radio" name="c9p20intermedia" id="c9p20intermedia" onclick="colocaropcion('9','valorc9p20intermedia','c9p20intermediadiv');" value="9" <?php if($arrayrespuestas['ec9p20intermedia']=='9'){echo('checked');}?>>
                        Ya es pensionado
                    </label>             
                </div> 
                <input type="text" class="form-control" id="valorc9p20intermedia" name="valorc9p20intermedia" style="display:none" placeholder="Text input" value="<?php echo($arrayrespuestas['ec9p20intermedia']); ?>">
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
            <?php if($arrayrespuestas['ec9p20intermedia']=="")
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
                          data: {vfolio : $('#folio').val(),vidintegrante : $('#idintegrante').val(), vvalorc9p20intermedia : $('#valorc9p20intermedia').val()},    
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
                          data: {vfolio : $('#folio').val(),vidintegrante : $('#idintegrante').val(), vvalorc9p20intermedia : $('#valorc9p20intermedia').val()},    
                          dataType: "html",
                          success : function(obj){                      
                          botonguardar();
                          }
                        });                    
        });
        
        
         $("#capitulos").click(function ()
        {
            
            location.href = "../c_capitulosintegranteintermediaLCV1/fc_capitulosintegranteintermediaLCV1?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() ;                    
         
            });
        

        $("#siguiente").click(function ()
        {
         botonsiguiente();
                           
         location.href = "../c_c9p21intermediaLCV1/fc_c9p21intermediaLCV1?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                     
                           
         });
              
        $("#anterior").click(function ()
        {
         
         if($('#c9p8').val() == 'c9p8intermediao4' || $('#c9p8').val() == 'c9p8intermediao5' )
          {
           location.href = "../c_c9p16intermediaLCV1/fc_c9p16intermediaLCV1?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";      
          }
         
         else if($('#edad').val()>=15 && $('#edad').val()<= 17 )
          {
            location.href = "../c_c9p19intermediaLCV1/fc_c9p19intermediaLCV1?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                        
          }else if($('#c9p14o1').val()!==98)
          {
              location.href = "../c_c9p14intermediaLCV1/fc_c9p14intermediaLCV1?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                      
          }
              
          
        });

//para cargar variables capitulo, pregunta,encuestador,vivienda,barra



cargardatosgenerales('<?php echo($arraydatosgenerales['ecapitulo']); ?>','10 de 12 subcapitulo 9M','<?php echo($arraydatosgenerales['enomcoges']); ?>','<?php echo($arraydatosgenerales['enombreintegrante']." "." - "." "."Sexo:"." ".$arraydatosgenerales['esexointegrante']."   "."  -  "."   "."Edad:"."   ".$arraydatosgenerales['eedadintegrante']); ?>','82');
//control del boton ayuda
botonayuda();

});

</script>
</html>