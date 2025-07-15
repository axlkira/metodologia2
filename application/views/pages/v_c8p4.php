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
       <input type="text" class="form-control input-sm" id="c8p2" name="c8p2" style="display:none"   placeholder="" value="<?php echo($arrayrespuestas['ec8p2']); ?>">
       <input type="text" class="form-control input-sm" id="c8p5" name="c8p5" style="display:none"  placeholder="" value="<?php echo($arrayrespuestas['ec8p5']); ?>">
       <!--fin para imprimir el idintegrante y llevarlo-->
<hr>
        <form class="form-group" name="formulario" id="formulario">

            <!--inicio radio una sola seleccion-->
            <div class="row">
            <div id="c8p4div" name="c8p4div" <?php if($arrayrespuestas['ec8p4']==''){echo('class="form-group col-md-12 form-group-sm has-error"');}else{echo('class="form-group col-md-12 form-group-sm"');}?>>   
                <label class="control-label">4. ¿..… actualmente estudia? (asiste al colegio, escuela o universidad)
                  <button type="button" id="vayuda" name="vayuda" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModal">
                        <span class="glyphicon glyphicon-question-sign" aria-hidden="true"></span> Ayuda
                    </button>
                </label>
                <div class="radio">
                    <label><!--en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="c8p4" id="c8p4" onclick="colocaropcion('1','valorc8p4','c8p4div');" value="1" <?php if($arrayrespuestas['ec8p4']=='1'){echo('checked');}?>>
                        Si
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="c8p4" id="c8p4" onclick="colocaropcion('2','valorc8p4','c8p4div');" value="2" <?php if($arrayrespuestas['ec8p4']=='2'){echo('checked');}?>>
                        No
                    </label>             
                </div>
                
                <input type="text" class="form-control" id="valorc8p4" name="valorc8p4" style="display:none" placeholder="Text input" value="<?php echo($arrayrespuestas['ec8p4']); ?>">
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
            <?php if($arrayrespuestas['ec8p4']=="")
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
                          vvalorc8p4 : $('#valorc8p4').val()},    
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
                          vvalorc8p4 : $('#valorc8p4').val()},    
                          dataType: "html",
                          success : function(obj){                      
                          botonguardar();
                          }
                        });                    
        });
        

        $("#siguiente").click(function ()
        {
        // botonsiguiente();
         
         if($('#valorc8p4').val()== '2' && $('#c8p5').val() == '')
         {
             location.href = "../c_c8p5/fc_c8p5?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val();                   
                            
         }
         else if($('#valorc8p4').val()== '1')
         {
             {
             $.ajax({
                          url: "../c_c8p5/fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),
                          vidintegrante : $('#idintegrante').val(),
                          vvalorc8p5 : '98'
                           
                          },    
                          dataType: "html",
                          success : function(obj){                      
          //                botonguardar();
                          }
                        });
        $.ajax({
                          url: "../c_c8p6/fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),
                          vidintegrante : $('#idintegrante').val(),
                          vvalorc8p6 : '98',
                          vc8p6cual : '98'                                                 
                          },    
                          dataType: "html",
                          success : function(obj){                      
            //              botonguardar();
                            location.href = "../c_capitulosintegrante/fc_capitulosintegrante?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() ;                    
                          }
                        });
        
         }
         }
         else if($('#valorc8p4').val()=== '2' && $('#c8p5').val() === '98')
         {
             {
             $.ajax({
                          url: "../c_c8p5/fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),
                          vidintegrante : $('#idintegrante').val(),
                          vvalorc8p5 : ''                                                 
                          },    
                          dataType: "html",
                          success : function(obj){                      
              //            botonguardar();
                          }
                        });
            $.ajax({
                          url: "../c_c8p6/fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),
                          vidintegrante : $('#idintegrante').val(),
                          vvalorc8p6 : '',
                          vc8p6cual : ''                                                 
                          },    
                          dataType: "html",
                          success : function(obj){                      
                //          botonguardar();
                            location.href = "../c_c8p5/fc_c8p5?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() ;                    
                          }
                        });
        
         }
         }
         else 
         {
            location.href = "../c_c8p5/fc_c8p5?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() ;                    
         }
         
        });
              
        $("#anterior").click(function ()
        {
         botonanterior();
         if($('#c8p2').val() === 'c8p2o1'||$('#c8p2').val() === 'c8p2o2'||$('#c8p2').val() === 'c8p2o3'||$('#c8p2').val() === 'c8p2o4' ||$('#c8p2').val() === 'c8p2o14' ||$('#c8p2').val() === 'c8p2o6'||$('#c8p2').val() === 'c8p2o8'||$('#c8p2').val() === 'c8p2o10'||$('#c8p2').val() === 'c8p2o12')
         {
         location.href = "../c_c8p2/fc_c8p2?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
         }
        else
        {
         location.href = "../c_c8p3/fc_c8p3?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
        }
        });
//para cargar variables capitulo, pregunta,encuestador,vivienda,barra
cargardatosgenerales('<?php echo($arraydatosgenerales['ecapitulo']); ?>','Pregunta 4 de 7','<?php echo($arraydatosgenerales['enomcoges']); ?>','<?php echo($arraydatosgenerales['enombreintegrante']." "." - "." "."Sexo:"." ".$arraydatosgenerales['esexointegrante']."   "."  -  "."   "."Edad:"."   ".$arraydatosgenerales['eedadintegrante']); ?>','50');
//control del boton ayuda
botonayuda();

});

</script>
</html>