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
        <!--fin para imprimir el folio y llevarlo-->
<hr>
       <form class="form-group" name="formulario" id="formulario">

<!--inicio radio una sola seleccion-->
            <div class="row">
            <div id="c11p12cdiv" name="c11p12cdiv" <?php if($arrayrespuestas['ec11p12c']=='' || $arrayrespuestas['ec11p12c']=='98'){echo('class="form-group col-md-12 form-group-sm has-error"');}else{echo('class="form-group col-md-12 form-group-sm"');}?>>   
                <label class="control-label">12c. En relación al tratamiento requerido (Rehabilitación psicosocial, Terapéutica, psiquiátrica), la persona: 
                  <button type="button" id="vayuda" name="vayuda" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModal">
                        <span class="glyphicon glyphicon-question-sign" aria-hidden="true"></span> Ayuda
                    </button>
                </label>
                <div class="radio">
                    <label><!--en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="c11p12c" id="c11p12c" onclick="colocaropcion('c11p12co1','valorc11p12c','c11p12cdiv');" value="c11p12co1" <?php if($arrayrespuestas['ec11p12c']=='c11p12co1'){echo('checked');}?>>
                          En la actualidad está recibiendo tratamiento o atención 
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="c11p12c" id="c11p12c" onclick="colocaropcion('c11p12co2','valorc11p12c','c11p12cdiv');" value="c11p12co2" <?php if($arrayrespuestas['ec11p12c']=='c11p12co2'){echo('checked');}?>>
                         Anteriormente recibió algún tipo de tratamiento o atención 
                    </label>             
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="c11p12c" id="c11p12c" onclick="colocaropcion('c11p12co3','valorc11p12c','c11p12cdiv');" value="c11p12co3" <?php if($arrayrespuestas['ec11p12c']=='c11p12co3'){echo('checked');}?>>
                         No ha recibido ningún tipo de tratamiento o atención 
                    </label>             
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="c11p12c" id="c11p12c" onclick="colocaropcion('c11p12co4','valorc11p12c','c11p12cdiv');" value="c11p12co4" <?php if($arrayrespuestas['ec11p12c']=='c11p12co4'){echo('checked');}?>>
                         Inició el tratamiento, pero no lo finalizo
                    </label>             
                </div>
                <input type="text" class="form-control" id="valorc11p12c" style="display:none" name="valorc11p12c"  placeholder="Text input" value="<?php echo($arrayrespuestas['ec11p12c']); ?>">
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
            <?php if($arrayrespuestas['ec11p12c']=="")
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
    
    
    
    
    
    
    
//    function mostrarcuantosc11p9a(opcion)
//    {
//        //alert(opcion);
//        $('#valorc11p20').val(opcion);
//        
//        if(opcion === '1')
//        
//        {
//            //alert('aca lo oculta');
//            $('#c11p20m').show(1000);
//            $('#c11p20cual').val('');
//            //validarbolitasytexto('c5p53bdiv','valorc5p53b');
//              colocaropcion('1','valorc11p20','c11p20div');
//            $('#c11p20div').addClass('form-group-10 has-error');
////            $('#c11p20mdiv').addClass(' ');
//            
//        }
//        else 
//        {
//            $('#c11p20m').hide(1000);                
//            $('#c11p20cual').val('0');
//           colocaropcion('2','valorc11p20','c11p20div');"  
//           
////               $('#c5p54amdiv').addClass(' has-error');
////            $('#c5p54amdiv').removeClass(' ');              
//        }  
//       
//         validarguardar();
//    }
    
///////////////////////////////////////Funciones que llaman al controlador para guardar y actualizar////////////////////////////////////////////////////////////////////////    
    $(document).ready(function()
    {

        $("#guardar").click(function ()
        {
                        $.ajax({
                          url: "fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),vidintegrante : $('#idintegrante').val(), vvalorc11p12c : $('#valorc11p12c').val()},
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
                          data: {vfolio : $('#folio').val(),vidintegrante : $('#idintegrante').val(), vvalorc11p12c : $('#valorc11p12c').val()},
                          dataType: "html",
                          success : function(obj){                      
                          botonactualizar();
                          }
                        });                   
        });
        

        $("#siguiente").click(function ()
        {
         botonsiguiente();
         location.href = "../c_c11p12d/fc_c11p12d?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() ;            

        });
              
        $("#anterior").click(function ()
        {
         botonanterior();
         location.href = "../c_c11p12b/fc_c11p12b?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() ; 
        //location.href = "../c_capitulosintegrantes/fc_capitulosintegrantes?folio=" + $('#folio').val()+ "&idintegrante="+"&idintegrante=0";                    
        });

//para cargar variables capitulo, pregunta,encuestador,vivienda,barra
cargardatosgenerales('<?php echo($arraydatosgenerales['ecapitulo']); ?>','Pregunta 12c de 15','<?php echo($arraydatosgenerales['enomcoges']); ?>','<?php echo($arraydatosgenerales['enombreintegrante']." "." - "." "."Sexo:"." ".$arraydatosgenerales['esexointegrante']."   "."  -  "."   "."Edad:"."   ".$arraydatosgenerales['eedadintegrante']); ?>','25');
//control del boton ayuda
botonayuda();

});



    
    
    
    
    
    

</script>
</html>