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
<!--        <input type="text" class="form-control input-sm" id="c5p2" name="c5p2"  style="display:none"  placeholder="" value="<?php echo($arrayrespuestas['ec5p2']); ?>">-->
        <!--fin para imprimir el idintegrante y llevarlo-->
<hr>
        <form class="form-group" name="formulario" id="formulario">

            <!--inicio radio una sola seleccion-->
            <div class="row">
            <div id="ppc1p2n5div" name="ppc1p2n5div" <?php if($arrayrespuestas['eppc1p2n5']==''){echo('class="form-group col-md-12 form-group-sm has-error"');}else{echo('class="form-group col-md-12 form-group-sm"');}?>>   
                <label class="control-label">2.5 ESTADO CIVIL: (ÚNICA RESPUESTA)
                    <button type="button" id="vayuda" name="vayuda" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModal">
                        <span class="glyphicon glyphicon-question-sign" aria-hidden="true"></span> Ayuda
                    </button>
                </label>
                <div class="radio">
                    <label><!--en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="ppc1p2n5" id="ppc1p2n5" onclick="colocaropcion('ppc1p2n5o1','valorppc1p2n5','ppc1p2n5div');" value="ppc1p2n5o1" <?php if($arrayrespuestas['eppc1p2n5']=='ppc1p2n5o1'){echo('checked');}?>>
                    SOLTERO/A
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="ppc1p2n5" id="ppc1p2n5" onclick="colocaropcion('ppc1p2n5o2','valorppc1p2n5','ppc1p2n5div');" value="ppc1p2n5o2" <?php if($arrayrespuestas['eppc1p2n5']=='ppc1p2n5o2'){echo('checked');}?>>
                    CASADO/A
                    </label>             
                </div>    
                <div class="radio">
                    <label>
                        <input type="radio" name="ppc1p2n5" id="ppc1p2n5" onclick="colocaropcion('ppc1p2n5o3','valorppc1p2n5','ppc1p2n5div');" value="ppc1p2n5o3" <?php if($arrayrespuestas['eppc1p2n5']=='ppc1p2n5o3'){echo('checked');}?>>
                    UNIÓN LIBRE
                    </label>             
                </div> 
                <div class="radio">
                    <label>
                        <input type="radio" name="ppc1p2n5" id="ppc1p2n5" onclick="colocaropcion('ppc1p2n5o4','valorppc1p2n5','ppc1p2n5div');" value="ppc1p2n5o4" <?php if($arrayrespuestas['eppc1p2n5']=='ppc1p2n5o4'){echo('checked');}?>>
                    VIUDO/A
                    </label>             
                </div> 
                <input type="text" class="form-control" id="valorppc1p2n5" name="valorppc1p2n5" style="display:none" placeholder="Text input" value="<?php echo($arrayrespuestas['eppc1p2n5']); ?>">
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
            <?php if($arrayrespuestas['eppc1p2n5']=="")
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
                          data: {vfolio : $('#folio').val(),vidintegrante : $('#idintegrante').val(), vvalorppc1p2n5 : $('#valorppc1p2n5').val()},    
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
                          data: {vfolio : $('#folio').val(),vidintegrante : $('#idintegrante').val(), vvalorppc1p2n5 : $('#valorppc1p2n5').val()},    
                          dataType: "html",
                          success : function(obj){                      
                          botonguardar();
                          }
                        });                    
        });
        

        $("#siguiente").click(function ()
        {
          botonsiguiente();
          location.href = "../c_ppc1p2n7/fc_ppc1p2n7?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
//        if($('#valorppc1p2n5').val() === '1')
//          {                $.ajax({
//                           url: "../c_c5p2/fc_actualizar",
//                           type: "GET",
//                           data: {vfolio : $('#folio').val(),
//                           vidintegrante : $('#idintegrante').val(),    
//                           vvalorc5p2 : '98'},
//                           dataType: "html",
//                           success : function(obj)
//                           {
//                          location.href = "../c_c5p3/fc_c5p3?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
//                           }
//                          });
//                          }
//          else if (($('#valorppc1p2n5').val() === '2' && $('#c5p2').val() === '98'))
//          {                $.ajax({
//                           url: "../c_c5p2/fc_actualizar",
//                           type: "GET",
//                           data: {vfolio : $('#folio').val(),
//                           vidintegrante : $('#idintegrante').val(),
//                           vvalorc5p2 : ''},
//                           dataType: "html",
//                           success : function(obj)
//                           {
//                           location.href = "../c_c5p2/fc_c5p2?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
//                           }
//                          });
//                          }
//          else
//                {
//                    location.href = "../c_c5p2/fc_c5p2?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
//                }
            });    
        
//         botonsiguiente();
//         location.href = "../c_c5p2/fc_c5p2?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
//
//        });
//              
        $("#anterior").click(function ()
        {
         //botonanterior();
         location.href = "../c_ppc1p2n3/fc_ppc1p2n3?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
        //location.href = "../c_capitulosintegrantes/fc_capitulosintegrantes?idintegrante=" + $('#idintegrante').val()+ "&idintegrante="+"&idintegrante=0";                    
        });

//para cargar variables capitulo, pregunta,encuestador,vivienda,barra



cargardatosgenerales('<?php echo($arraydatosgenerales['ecapitulo']); ?>','Pregunta 2.5 de 5.1','<?php echo($arraydatosgenerales['enomcoges']); ?>','<?php echo($arraydatosgenerales['enombreintegrante']." "." - "." "."Sexo:"." ".$arraydatosgenerales['esexointegrante']."   "."  -  "."   "."Edad:"."   ".$arraydatosgenerales['eedadintegrante']); ?>','24');
//control del boton ayuda
botonayuda();

});

</script>
</html>