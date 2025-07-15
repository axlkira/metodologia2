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
<!--        <input type="text" class="form-control input-sm" id="c5p11" name="c5p11"  style="display:none"   placeholder="" value="<?php echo($arrayrespuestas['ec5p11']); ?>">-->
        <!--fin para imprimir el idintegrante y llevarlo-->
<hr>
        <form class="form-group" name="formulario" id="formulario">

            <!--inicio radio una sola seleccion-->
            <div class="row">
            <div id="ppc1p2n7div" name="ppc1p2n7div" <?php if($arrayrespuestas['eppc1p2n7']==''){echo('class="form-group col-md-12 form-group-sm has-error"');}else{echo('class="form-group col-md-12 form-group-sm"');}?>>   
                <label class="control-label">2.7 LICENCIA DE CONDUCCIÓN (Unica Respuesta)
                    <button type="button" id="vayuda" name="vayuda" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModal">
                        <span class="glyphicon glyphicon-question-sign" aria-hidden="true"></span> Ayuda
                    </button>
                </label>
                <div class="radio">
                    <label><!--en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="ppc1p2n7" id="ppc1p2n7" onclick="colocaropcionppc1p2n7('1','valorppc1p2n7','ppc1p2n7div');" value="1" <?php if($arrayrespuestas['eppc1p2n7']=='1'){echo('checked');}?>>
                         Si
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="ppc1p2n7" id="ppc1p2n7" onclick="colocaropcionppc1p2n7('2','valorppc1p2n7','ppc1p2n7div');" value="2" <?php if($arrayrespuestas['eppc1p2n7']=='2'){echo('checked');}?>>
                        No
                    </label>             
                </div>
                <input type="text" class="form-control" id="valorppc1p2n7" style="display:none" name="valorppc1p2n7" placeholder="Text input" value="<?php echo($arrayrespuestas['eppc1p2n7']); ?>">
            </div>
            </div> 
            <div class="radio" id="ppc1p2n7catdivmostrar" name="ppc1p2n7catdivmostrar"<?php if($arrayrespuestas['eppc1p2n7']==''||$arrayrespuestas['eppc1p2n7']=='98'||$arrayrespuestas['eppc1p2n7']=='2'){echo('style="display:none"');}else{echo('class="form-group col-md-12 form-group-sm"');}?>> 
            <div id="ppc1p2n7catadiv" name="ppc1p2n7catadiv" <?php if($arrayrespuestas['eppc1p2n7']==''){echo('class="form-group col-md-12 form-group-sm has-error"');}else{echo('class="form-group col-md-12 form-group-sm"');}?>> 
            <div class="radio">CATEGORÍA A<br>
                <label>
                        <input type="radio" name="ppc1p2n7cata" id="ppc1p2n7cata" onclick="colocaropcionpp('A1','valorppc1p2n7cata','ppc1p2n7catadiv');" value="A1" <?php if($arrayrespuestas['eppc1p2n7categoriaa']=='A1'){echo('checked');}?>>
                        A1
                </label>
            </div>
            <div class="radio">
                <label>
                        <input type="radio" name="ppc1p2n7cata" id="ppc1p2n7cata1" onclick="colocaropcionpp('A2','valorppc1p2n7cata','ppc1p2n7catadiv');" value="A2" <?php if($arrayrespuestas['eppc1p2n7categoriaa']=='A2'){echo('checked');}?>>
                        A2
                </label>             
            </div>     
                  <input type="text" class="form-control" id="valorppc1p2n7cata" name="valorppc1p2n7cata" style="display:none" placeholder="Text input" value="<?php echo($arrayrespuestas['eppc1p2n7categoriaa']); ?>">  
            </div>
                
            <div id="ppc1p2n7catbdiv" name="ppc1p2n7catbdiv" <?php if($arrayrespuestas['eppc1p2n7']==''){echo('class="form-group col-md-12 form-group-sm has-error"');}else{echo('class="form-group col-md-12 form-group-sm"');}?>> 
            <div class="radio">CATEGORÍA B<br>
                <label>
                        <input type="radio" name="ppc1p2n7catb" id="ppc1p2n7catb" onclick="colocaropcionpp('B1','valorppc1p2n7catb','ppc1p2n7catbdiv');" value="B1" <?php if($arrayrespuestas['eppc1p2n7categoriab']=='B1'){echo('checked');}?>>
                        B1
                </label>
            </div>
            <div class="radio">
                <label>
                        <input type="radio" name="ppc1p2n7catb" id="ppc1p2n7catb1" onclick="colocaropcionpp('B2','valorppc1p2n7catb','ppc1p2n7catbdiv');" value="B2" <?php if($arrayrespuestas['eppc1p2n7categoriab']=='B2'){echo('checked');}?>>
                        B2
                </label>             
            </div>
            <div class="radio">
                <label>
                        <input type="radio" name="ppc1p2n7catb" id="ppc1p2n7catb2" onclick="colocaropcionpp('B3','valorppc1p2n7catb','ppc1p2n7catbdiv');" value="B3" <?php if($arrayrespuestas['eppc1p2n7categoriab']=='B3'){echo('checked');}?>>
                        B3
                </label>             
            </div>
                  <input type="text" class="form-control" id="valorppc1p2n7catb" name="valorppc1p2n7catb" style="display:none" placeholder="Text input" value="<?php echo($arrayrespuestas['eppc1p2n7categoriab']); ?>">  
            </div>    
                
            <div id="ppc1p2n7catcdiv" name="ppc1p2n7catcdiv" <?php if($arrayrespuestas['eppc1p2n7']==''){echo('class="form-group col-md-12 form-group-sm has-error"');}else{echo('class="form-group col-md-12 form-group-sm"');}?>> 
            <div class="radio">CATEGORÍA C<br>
                <label>
                        <input type="radio" name="ppc1p2n7catc" id="ppc1p2n7catc" onclick="colocaropcionpp('C1','valorppc1p2n7catc','ppc1p2n7catcdiv');" value="C1" <?php if($arrayrespuestas['eppc1p2n7categoriac']=='C1'){echo('checked');}?>>
                        C1
                </label>
            </div>
            <div class="radio">
                <label>
                        <input type="radio" name="ppc1p2n7catc" id="ppc1p2n7catc1" onclick="colocaropcionpp('C2','valorppc1p2n7catc','ppc1p2n7catcdiv');" value="2" <?php if($arrayrespuestas['eppc1p2n7categoriac']=='C2'){echo('checked');}?>>
                        C2
                </label>             
            </div>     
                  <input type="text" class="form-control" id="valorppc1p2n7catc" name="valorppc1p2n7catc" style="display:none" placeholder="Text input" value="<?php echo($arrayrespuestas['eppc1p2n7categoriac']); ?>">  
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
            <?php if($arrayrespuestas['eppc1p2n7']=="")
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
                          data: {vfolio : $('#folio').val(),vidintegrante : $('#idintegrante').val(), vvalorppc1p2n7 : $('#valorppc1p2n7').val(),
                          vvalorppc1p2n7cata : $('#valorppc1p2n7cata').val(),vvalorppc1p2n7catb : $('#valorppc1p2n7catb').val(),
                          vvalorppc1p2n7catc : $('#valorppc1p2n7catc').val()},    
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
                          data: {vfolio : $('#folio').val(),vidintegrante : $('#idintegrante').val(), vvalorppc1p2n7 : $('#valorppc1p2n7').val(),
                          vvalorppc1p2n7cata : $('#valorppc1p2n7cata').val(),vvalorppc1p2n7catb : $('#valorppc1p2n7catb').val(),
                          vvalorppc1p2n7catc : $('#valorppc1p2n7catc').val()},                          dataType: "html",
                          success : function(obj){                      
                          botonguardar();
                          }
                        });                    
        });
        $("#siguiente").click(function ()
       {
        botonsiguiente();
        location.href = "../c_ppc1p3n1/fc_ppc1p3n1?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
        
//        if($('#valorppc1p2n7').val() === 'ppc1p2n7o3')
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
//          else if (($('#valorppc1p2n7').val() !== 'ppc1p2n7o3' && $('#ec5p11').val() === '98'))
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
         location.href = "../c_ppc1p2n5/fc_ppc1p2n5?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
         
//         if(($('#sexo').val() === 'FEMENINO' && $('#edad').val() >= 12))
//         {
//             location.href = "../c_c5p6/fc_c5p6?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() ;                    
//         }
//         
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



cargardatosgenerales('<?php echo($arraydatosgenerales['ecapitulo']); ?>','Pregunta 2.7 de 5.1','<?php echo($arraydatosgenerales['enomcoges']); ?>','<?php echo($arraydatosgenerales['enombreintegrante']." "." - "." "."Sexo:"." ".$arraydatosgenerales['esexointegrante']."   "."  -  "."   "."Edad:"."   ".$arraydatosgenerales['eedadintegrante']); ?>','36');
//control del boton ayuda
botonayuda();

});

// colocar opcion para todos
function colocaropcionppc1p2n7(opcion,campoval,divcampo)
{
   //esta linea me guarda el valor del campo
    $('#' + campoval).val(opcion);
          if(opcion == '1')
            {
            //    //alert('aca lo muestra');
                $('#ppc1p2n7catdivmostrar').show(1000);
                $('#valorppc1p2n7cata').val('');
                $('#valorppc1p2n7catb').val('');
                $('#valorppc1p2n7catc').val('');
                $('#ppc1p2n7catadiv').addClass(' has-error'); 
                $('#ppc1p2n7catbdiv').addClass(' has-error'); 
                $('#ppc1p2n7catcdiv').addClass(' has-error'); 
                $('#ppc1p2n7cata').prop('checked' , false);
                $('#ppc1p2n7cata1').prop('checked' , false);
                $('#ppc1p2n7catb').prop('checked' , false);
                $('#ppc1p2n7catb1').prop('checked' , false);
                $('#ppc1p2n7catb2').prop('checked' , false);
                $('#ppc1p2n7catc').prop('checked' , false);
                $('#ppc1p2n7catc1').prop('checked' , false);
                
             
            }
            else
            {
          //      //alert('aca lo oculta');
                $('#ppc1p2n7catdivmostrar').hide(1000);
                $('#valorppc1p2n7cata').val('98');
                $('#valorppc1p2n7catb').val('98');
                $('#valorppc1p2n7catc').val('98');
                $('#ppc1p2n7catadiv').removeClass(' has-error');
                $('#ppc1p2n7catbdiv').removeClass(' has-error');
                $('#ppc1p2n7catcdiv').removeClass(' has-error');
                $('#ppc1p2n7cata').prop('checked' , false);
                $('#ppc1p2n7cata1').prop('checked' , false);
                $('#ppc1p2n7catb').prop('checked' , false);
                $('#ppc1p2n7catb1').prop('checked' , false);
                $('#ppc1p2n7catb2').prop('checked' , false);
                $('#ppc1p2n7catc').prop('checked' , false);
                $('#ppc1p2n7catc1').prop('checked' , false);
                //$('#ppc1p2n7r2').prop('checked' , false);
            }
          
    validarbolitasytexto(divcampo,campoval);
}
//de aca para arriba es logica de bolas y textos
function colocaropcionpp(opcion,campoval,divcampo)
{
   //esta linea me guarda el valor del campo
    $('#' + campoval).val(opcion);
          if(opcion == 'A1'||opcion == 'A2')
            {
              //  //alert('aca lo muestra');
                $('#ppc1p2n7catbdiv').removeClass(' has-error');
                $('#ppc1p2n7catcdiv').removeClass(' has-error');
                
//                $('#valorppc1p2n7catb').val(98);
//                $('#valorppc1p2n7catc').val(98);
                
                
            }
            else if(opcion == 'B1'||opcion == 'B2'||opcion == 'B3')
            {
            //    //alert('aca lo oculta');
                $('#ppc1p2n7catadiv').removeClass(' has-error');
                $('#ppc1p2n7catcdiv').removeClass(' has-error');
                
//                $('#valorppc1p2n7cata').val(98);
//                $('#valorppc1p2n7catc').val(98);                           
//                $('#ppc1p2n7catbdiv').addClass(' has-error'); 
//                $('#ppc1p2n7catcdiv').addClass(' has-error'); 
            }
            else if(opcion == 'C1'||opcion == 'C2')
            {
                $('#ppc1p2n7catadiv').removeClass(' has-error');
                $('#ppc1p2n7catbdiv').removeClass(' has-error');
                
//                $('#valorppc1p2n7cata').val(98);
//                $('#valorppc1p2n7catb').val(98);                
            }
            else
            {
            }
            
    validarbolitasytexto(divcampo,campoval);
}


</script>
</html>