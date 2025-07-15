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
        <input type="text" class="form-control input-sm" id="c5p11" name="c5p11"  style="display:none"   placeholder="" value="<?php echo($arrayrespuestas['ec5p11']); ?>">
        <!--fin para imprimir el idintegrante y llevarlo-->
<hr>
        <form class="form-group" name="formulario" id="formulario">

            <!--inicio radio una sola seleccion-->
            <div class="row">
            <div id="c5p7div" name="c5p7div" <?php if($arrayrespuestas['ec5p7']==''){echo('class="form-group col-md-12 form-group-sm has-error"');}else{echo('class="form-group col-md-12 form-group-sm"');}?>>   
                <label class="control-label">7. ¿Cuándo fue la última vez que ….. se hizo una citología vaginal? (Unica Respuesta)
                    <button type="button" id="vayuda" name="vayuda" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModal">
                        <span class="glyphicon glyphicon-question-sign" aria-hidden="true"></span> Ayuda
                    </button>
                </label>
                <div class="radio">
                    <label><!--en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="c5p7" id="c5p7" onclick="colocaropcionc5p7('c5p7o1','valorc5p7','c5p7div');" value="c5p7o1" <?php if($arrayrespuestas['ec5p7']=='c5p7o1'){echo('checked');}?>>
                         Hace menos de un año
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="c5p7" id="c5p7" onclick="colocaropcionc5p7('c5p7o2','valorc5p7','c5p7div');" value="c5p7o2" <?php if($arrayrespuestas['ec5p7']=='c5p7o2'){echo('checked');}?>>
                        Hace más de un año
                    </label>             
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="c5p7" id="c5p7" onclick="colocaropcionc5p7('c5p7o3','valorc5p7','c5p7div');" value="c5p7o3" <?php if($arrayrespuestas['ec5p7']=='c5p7o3'){echo('checked');}?>>
                        No se la ha hecho
                    </label>             
                </div>
                <input type="text" class="form-control" id="valorc5p7" style="display:none" name="valorc5p7" placeholder="Text input" value="<?php echo($arrayrespuestas['ec5p7']); ?>">
            </div>
            </div> 
            <div class="radio" id="c5p7rdivmostrar" name="c5p7rdivmostrar"<?php if($arrayrespuestas['ec5p7resultado']==''||$arrayrespuestas['ec5p7resultado']=='98'){echo('style="display:none"');}else{echo('class="form-group col-md-12 form-group-sm"');}?>> 
            <div id="c5p7rdiv" name="c5p7rdiv" <?php if($arrayrespuestas['ec5p7']==''){echo('class="form-group col-md-12 form-group-sm has-error"');}else{echo('class="form-group col-md-12 form-group-sm"');}?>> 
            <div class="radio">Conoció el resultado<br>
                <label>
                        <input type="radio" name="c5p7r" id="c5p7r1" onclick="colocaropcion('1','valorc5p7r','c5p7rdiv');" value="1" <?php if($arrayrespuestas['ec5p7resultado']=='1'){echo('checked');}?>>
                        Si
                </label>
            </div>
            <div class="radio">
                <label>
                        <input type="radio" name="c5p7r" id="c5p7r2" onclick="colocaropcion('2','valorc5p7r','c5p7rdiv');" value="2" <?php if($arrayrespuestas['ec5p7resultado']=='2'){echo('checked');}?>>
                        No
                </label>             
            </div>     
                  <input type="text" class="form-control" id="valorc5p7r" name="valorc5p7r" style="display:none" placeholder="Text input" value="<?php echo($arrayrespuestas['ec5p7resultado']); ?>">  
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
            <?php if($arrayrespuestas['ec5p7']=="")
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
                          data: {vfolio : $('#folio').val(),vidintegrante : $('#idintegrante').val(), vvalorc5p7 : $('#valorc5p7').val(), vvalorc5p7resultado : $('#valorc5p7r').val()},    
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
                          data: {vfolio : $('#folio').val(),vidintegrante : $('#idintegrante').val(), vvalorc5p7 : $('#valorc5p7').val(), vvalorc5p7resultado : $('#valorc5p7r').val()},    
                          dataType: "html",
                          success : function(obj){                      
                          botonguardar();
                          }
                        });                    
        });
        $("#siguiente").click(function ()
       {
        botonsiguiente();
        location.href = "../c_c5p8/fc_c5p8?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
        
//        if($('#valorc5p7').val() === 'c5p7o3')
//          {                $.ajax({
//                           url: "../c_c5p11/fc_actualizar",
//                           type: "GET",
//                           data: {vfolio : $('#folio').val(),
//                           vidintegrante : $('#idintegrante').val(),    
//                           vvalorc5p11 : '98'},    
//                           dataType: "html",
//                           success : function(obj)
//                           {
//                          location.href = "../c_c5p12/fc_c5p12?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
//                           }
//                          });
//                          }
//          else if (($('#valorc5p7').val() !== 'c5p7o3' && $('#ec5p11').val() === '98'))
//          {                $.ajax({
//                           url: "../c_c5p11/fc_actualizar",
//                           type: "GET",
//                           data: {vfolio : $('#folio').val(),
//                           vidintegrante : $('#idintegrante').val(),
//                           vvalorc5p11 : ''},    
//                           dataType: "html",
//                           success : function(obj)
//                           {
//                           location.href = "../c_c5p11/fc_c5p11?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
//                           }
//                          });
//                          }
//          else
//                {
//                    location.href = "../c_c5p11/fc_c5p11?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
//                }
            });
        $("#anterior").click(function ()
        {
         botonanterior();
         
         if(($('#sexo').val() === 'FEMENINO' && $('#edad').val() >= 12))
         {
             location.href = "../c_c5p6/fc_c5p6?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() ;                    
         }
         
//          if($('#c5p11').val() !== '98')
//          {
//         location.href = "../c_c5p11/fc_c5p11?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val();                    
//          }
//          else
//          {
//              location.href = "../c_c5p12/fc_c5p12?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() ;                    
//          }
        });

//para cargar variables capitulo, pregunta,encuestador,vivienda,barra



cargardatosgenerales('<?php echo($arraydatosgenerales['ecapitulo']); ?>','Pregunta 7 de 14','<?php echo($arraydatosgenerales['enomcoges']); ?>','<?php echo($arraydatosgenerales['enombreintegrante']." "." - "." "."Sexo:"." ".$arraydatosgenerales['esexointegrante']."   "."  -  "."   "."Edad:"."   ".$arraydatosgenerales['eedadintegrante']); ?>','10');
//control del boton ayuda
botonayuda();

});
/* 
Funciones para validar campos y gaurdar
 */
//habilitar boton guardar
function validarguardarc5p7()
{
   //alert($('.has-error').length);
   if($('.has-error').length === 0)
   {
       $('#guardar').prop('disabled', false);
       $('#actualizar').prop('disabled', false);
       $('#cancelar').prop('disabled', false);
       $('#anterior').prop('disabled', true);
       $('#siguiente').prop('disabled', true);       
   }
   else
   {
       $('#guardar').prop('disabled', true);
       $('#actualizar').prop('disabled', true);
       $('#cancelar').prop('disabled', true);
       $('#anterior').prop('disabled', false);
       $('#siguiente').prop('disabled', false);
   }
   
}

//validar bolitas y texto
function validarbolitasytextoc5p7(div,campo)
{ //alert(div + ' juanpis ' + campo);
   if(($('#'+ campo).val() == '') || ($('#'+ campo).val() == '0'))
   { 
       $('#' + div).addClass(' has-error');
   }
   else
   { 
       $('#' + div).removeClass('has-error');
   }
    validarguardarc5p7();
}


// colocar opcion para todos
function colocaropcionc5p7(opcion,campoval,divcampo)
{
   //esta linea me guarda el valor del campo
    $('#' + campoval).val(opcion);
          if(opcion === 'c5p7o1'||opcion === 'c5p7o2')
            {
            //    alert('aca lo muestra');
                $('#c5p7rdivmostrar').show(1000);
                $('#valorc5p7r').val('');
                $('#c5p7rdiv').addClass(' has-error'); 
                $('#c5p7r1').prop('checked' , false);
                $('#c5p7r2').prop('checked' , false);
             
            }
            else
            {
          //      alert('aca lo oculta');
                $('#c5p7rdivmostrar').hide(1000);
                $('#valorc5p7r').val('98');
                $('#c5p7rdiv').removeClass(' has-error');
                $('#c5p7r1').prop('checked' , false);
                $('#c5p7r2').prop('checked' , false);
            }
          
    validarbolitasytexto(divcampo,campoval);
}
//de aca para arriba es logica de bolas y textos


</script>
</html>