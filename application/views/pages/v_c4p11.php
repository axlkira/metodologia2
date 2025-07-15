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
        <input type="text" class="form-control input-sm" id="c4p12" name="c4p12"  style="display:none"   placeholder="" value="<?php echo($arrayrespuestas['ec4p12']); ?>">
        <!--fin para imprimir el idintegrante y llevarlo-->
<hr>
        <form class="form-group" name="formulario" id="formulario">

            <!--inicio radio una sola seleccion-->
            <div class="row form-group col-md-7"> 
                
                
            <div id="c4p11o1div" name="c4p11o1div" <?php if($arrayrespuestas['ec4p11o1']=='' || $arrayrespuestas['ec4p11o1']=='0'  ){echo('class="form-group-10 form-group-sm has-error"');}else{echo('class="form-group-10  "');}?>>   
                <label class="control-label">11. ¿Ha sido victima del conflicto armado? 
                    <button type="button" id="vayuda" name="vayuda" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModal">
                        <span class="glyphicon glyphicon-question-sign" aria-hidden="true"></span> Ayuda
                    </button>
                    
                </label>
                <div class="radio">
                    <label><!--en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="c4p11o1" id="c4p11o1"  onclick="mostrarc4p11('1');" value="1" <?php if($arrayrespuestas['ec4p11o1']=='1'){echo('checked');}?>>
                        Si
                    </label>                 
                    
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="c4p11o1" id="c4p11o1" onclick="mostrarc4p11('2');" value="2" <?php if($arrayrespuestas['ec4p11o1']=='2'){echo('checked');}?>>
                        No
                    </label>             
                </div>                    
               
                <input type="text" class="form-control" id="valorc4p11o1" style="display: none"  name="valorc4p11o1"  placeholder="Text input" value="<?php echo($arrayrespuestas['ec4p11o1']); ?>">
            </div>
                
 <div   id="c4p11m" name="c4p11m" <?php if($arrayrespuestas['ec4p11o1']=='' || $arrayrespuestas['ec4p11o1']=='2'){echo('style="display: none"' );} ?>>
                    
                    
     
                  <div id="c4p11o2div" <?php if($arrayrespuestas['ec4p11o2']=='' || $arrayrespuestas['ec4p11o2']=='NO'){echo('class=" has-error"');}?>>
                            <div class="checkbox">
                                <label> <!--en este caso se manda a la fincion javascript el nombre del campo-->
                                  <input type="checkbox" name="c4p11o2" id="c4p11o2" onclick="cambiarsino('SI','c4p11o2','c4p11o2div','c4p11div',13);" <?php if($arrayrespuestas['ec4p11o2']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
                               Desplazamiento forzado
 
                                </label>
                             </div>
                        </div>
                
                        
                    
                    
                         <div id="c4p11o3div" <?php if($arrayrespuestas['ec4p11o3']=='' || $arrayrespuestas['ec4p11o3']=='NO'){echo('class=" has-error"');}?>>
                            <div class="checkbox">
                                 <label>
                                  <input type="checkbox" name="c4p11o3" id="c4p11o3" onclick="cambiarsino('SI','c4p11o3','c4p11o3div','c4p11div',13);" <?php if($arrayrespuestas['ec4p11o3']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
                               Homicidio 
                                </label>
                             </div>
                        </div>
                    
                    
                         <div id="c4p11o4div" <?php if($arrayrespuestas['ec4p11o4']=='' || $arrayrespuestas['ec4p11o4']=='NO'){echo('class=" has-error"');}?>>
                            <div class="checkbox">
                                <label> 
                                  <input type="checkbox" name="c4p11o4" id="c4p11o4" onclick="cambiarsino('SI','c4p11o4','c4p11o4div','c4p11div',13);" <?php if($arrayrespuestas['ec4p11o4']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
                               Desaparición forzada 
                                </label>
                             </div>
                        </div>
                    
                    
                         <div id="c4p11o5div" <?php if($arrayrespuestas['ec4p11o5']=='' || $arrayrespuestas['ec4p11o5']=='NO'){echo('class=" has-error"');}?>>
                            <div class="checkbox">
                                <label> 
                                  <input type="checkbox" name="c4p11o5" id="c4p11o5" onclick="cambiarsino('SI','c4p11o5','c4p11o5div','c4p11div',13);" <?php if($arrayrespuestas['ec4p11o5']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
                               Secuestro 
                                </label>
                             </div>
                        </div>
                    
                    
                         <div id="c4p11o6div" <?php if($arrayrespuestas['ec4p11o6']=='' || $arrayrespuestas['ec4p11o6']=='NO'){echo('class=" has-error"');}?>>
                            <div class="checkbox">
                                <label> 
                                  <input type="checkbox" name="c4p11o6" id="c4p11o6" onclick="cambiarsino('SI','c4p11o6','c4p11o6div','c4p11div',13);" <?php if($arrayrespuestas['ec4p11o6']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
                               Lesiones personale 
                                </label>
                             </div>
                        </div>
                    
                    
                         <div id="c4p11o7div" <?php if($arrayrespuestas['ec4p11o7']=='' || $arrayrespuestas['ec4p11o7']=='NO'){echo('class=" has-error"');}?>>
                            <div class="checkbox">
                                <label> 
                                  <input type="checkbox" name="c4p11o7" id="c4p11o7" onclick="cambiarsino('SI','c4p11o7','c4p11o7div','c4p11div',13);" <?php if($arrayrespuestas['ec4p11o7']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
                               Tortura o trato inhumano degradante 
                                </label>
                             </div>
                        </div>
                    
                    
                         <div id="c4p11o8div" <?php if($arrayrespuestas['ec4p11o8']=='' || $arrayrespuestas['ec4p11o8']=='NO'){echo('class=" has-error"');}?>>
                            <div class="checkbox">
                                <label> 
                                  <input type="checkbox" name="c4p11o8" id="c4p11o8" onclick="cambiarsino('SI','c4p11o8','c4p11o8div','c4p11div',13);" <?php if($arrayrespuestas['ec4p11o8']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
                               Reclutamiento ilegal de menores 
                                </label>
                             </div>
                        </div>
                    
                    
                         <div id="c4p11o9div" <?php if($arrayrespuestas['ec4p11o9']=='' || $arrayrespuestas['ec4p11o9']=='NO'){echo('class=" has-error"');}?>>
                            <div class="checkbox">
                                <label> 
                                  <input type="checkbox" name="c4p11o9" id="c4p11o9" onclick="cambiarsino('SI','c4p11o9','c4p11o9div','c4p11div',13);" <?php if($arrayrespuestas['ec4p11o9']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
                               Mina antipersonal - otras municiones sin explota 
                                </label>
                             </div>
                        </div>
                    
                    
                         <div id="c4p11o10div" <?php if($arrayrespuestas['ec4p11o10']=='' || $arrayrespuestas['ec4p11o10']=='NO'){echo('class=" has-error"');}?>>
                            <div class="checkbox">
                                <label> 
                                  <input type="checkbox" name="c4p11o10" id="c4p11o10" onclick="cambiarsino('SI','c4p11o10','c4p11o10div','c4p11div',13);" <?php if($arrayrespuestas['ec4p11o10']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
                               Delitos contra la libertad sexual 
                                </label>
                             </div>
                        </div>
                    
                    
                         <div id="c4p11o11div" <?php if($arrayrespuestas['ec4p11o11']=='' || $arrayrespuestas['ec4p11o11']=='NO'){echo('class=" has-error"');}?>>
                            <div class="checkbox">
                                <label>
                                  <input type="checkbox" name="c4p11o11" id="c4p11o11" onclick="cambiarsino('SI','c4p11o11','c4p11o11div','c4p11div',13);" <?php if($arrayrespuestas['ec4p11o11']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
                               Pérdida de bienes 
                                </label>
                             </div>
                        </div>
                    
                    
                         <div id="c4p11o12div" <?php if($arrayrespuestas['ec4p11o12']=='' || $arrayrespuestas['ec4p11o12']=='NO'){echo('class=" has-error"');}?>>
                            <div class="checkbox">
                                <label> 
                                  <input type="checkbox" name="c4p11o12" id="c4p11o12" onclick="cambiarsino('SI','c4p11o12','c4p11o12div','c4p11div',13);" <?php if($arrayrespuestas['ec4p11o12']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
                               Amenaza 
                                </label>
                             </div>
                        </div>
                    
                    
                         <div id="c4p11o13div" <?php if($arrayrespuestas['ec4p11o13']=='' || $arrayrespuestas['ec4p11o13']=='NO'){echo('class=" has-error"');}?>>
                            <div class="checkbox">
                                <label> 
                                  <input type="checkbox" name="c4p11o13" id="c4p11o13" onclick="cambiarsino('SI','c4p11o13','c4p11o13div','c4p11div',13);" <?php if($arrayrespuestas['ec4p11o13']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
                               Terrorismo 
                                </label>
                             </div>
                         </div>
                        
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
            <?php if($arrayrespuestas['ec4p11o1']=="")
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
                          data: {vfolio : $('#folio').val(),vidintegrante : $('#idintegrante').val(), vvalorc4p11o1 : $('#valorc4p11o1').val(),vc4p11o2 : $('#c4p11o2').val(),
                                vc4p11o3 : $('#c4p11o3').val(),vc4p11o4 : $('#c4p11o4').val(),vc4p11o5 : $('#c4p11o5').val(),vc4p11o6 : $('#c4p11o6').val(),
                                vc4p11o7 : $('#c4p11o7').val(),vc4p11o8 : $('#c4p11o8').val(),vc4p11o9 : $('#c4p11o9').val(),vc4p11o10 : $('#c4p11o10').val(),
                                vc4p11o11 : $('#c4p11o11').val(),vc4p11o12 : $('#c4p11o12').val(),vc4p11o13 : $('#c4p11o13').val()},    
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
                          data: {vfolio : $('#folio').val(),vidintegrante : $('#idintegrante').val(), vvalorc4p11o1 : $('#valorc4p11o1').val(),vc4p11o2 : $('#c4p11o2').val(),
                                vc4p11o3 : $('#c4p11o3').val(),vc4p11o4 : $('#c4p11o4').val(),vc4p11o5 : $('#c4p11o5').val(),vc4p11o6 : $('#c4p11o6').val(),
                                vc4p11o7 : $('#c4p11o7').val(),vc4p11o8 : $('#c4p11o8').val(),vc4p11o9 : $('#c4p11o9').val(),vc4p11o10 : $('#c4p11o10').val(),
                                vc4p11o11 : $('#c4p11o11').val(),vc4p11o12 : $('#c4p11o12').val(),vc4p11o13 : $('#c4p11o13').val()},
                          dataType: "html",
                          success : function(obj){                      
                          botonguardar();
                          }
                        });                    
        });
        

        $("#siguiente").click(function ()
        {
            
           if($('#valorc4p11o1').val() == '2')
             {  
                              
                            $.ajax({
                          url: "../c_c4p12/fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),vidintegrante : $('#idintegrante').val(), vvalorc4p12 : '98'},    
                          dataType: "html",
                          success : function(obj){                      
                          //botonguardar();
                          }
                        }); 
                           
                           
                           $.ajax({
                          url: "../c_c4p13/fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),vidintegrante : $('#idintegrante').val(), vvalorc4p13 :'98' },    
                          dataType: "html",
                          success : function(obj){                      
                          //botonguardar();
                          location.href = "../c_c4p14/fc_c4p14?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";    
                          }
                          });  
                           
                           
                          
                           
                           
                                                       
           }
          else if ( $('#c4p12').val() == '98')
           {   
              
               
                           $.ajax({
                          url: "../c_c4p12/fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),vidintegrante : $('#idintegrante').val(), vvalorc4p12 : ''},    
                          dataType: "html",
                          success : function(obj){                      
                          //botonguardar();
                          }
                        }); 
                           
                           
                           $.ajax({
                          url: "../c_c4p13/fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),vidintegrante : $('#idintegrante').val(), vvalorc4p13 :'' },    
                          dataType: "html",
                          success : function(obj){                      
                          //botonguardar();
                          location.href = "../c_c4p12/fc_c4p12?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";    
                          }
                          });                     
                                                                 
           }
           else
                {
                    
                    location.href = "../c_c4p12/fc_c4p12?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val();  
                } 
            
            
            
            
            
            
         //botonsiguiente();
         //location.href = "../c_c4p12/fc_c4p12?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    




        });
              
        $("#anterior").click(function ()
        {
         botonanterior();
         location.href = "../c_c4p10/fc_c4p10?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
        //location.href = "../c_capitulosintegrantes/fc_capitulosintegrantes?idintegrante=" + $('#idintegrante').val()+ "&idintegrante="+"&idintegrante=0";                    
        });

//para cargar variables capitulo, pregunta,encuestador,vivienda,barra
cargardatosgenerales('<?php echo($arraydatosgenerales['ecapitulo']); ?>','Pregunta 11 de 16','<?php echo($arraydatosgenerales['enomcoges']); ?>','<?php echo($arraydatosgenerales['enombreintegrante']." "." - "." "."Sexo:"." ".$arraydatosgenerales['esexointegrante']."   "."  -  "."   "."Edad:"."   ".$arraydatosgenerales['eedadintegrante']); ?>','45.45');
//control del boton ayuda
botonayuda();

});


function mostrarc4p11(opcion)
    {
        //alert(opcion);
        $('#valorc4p11o1').val(opcion);
        
        if(opcion === '1')
        {
            //alert('aca lo oculta');
            $('#c4p11m').show(1000);
                
            
            colocaropcion('1','valorc4p11o1','c4p11o1div');
              $('#c4p11o2div').addClass('has-error');
              $('#c4p11o3div').addClass('has-error');
              $('#c4p11o4div').addClass('has-error');
              $('#c4p11o5div').addClass('has-error');
              $('#c4p11o6div').addClass('has-error');
              $('#c4p11o7div').addClass('has-error');
              $('#c4p11o8div').addClass('has-error');
              $('#c4p11o9div').addClass('has-error');
              $('#c4p11o10div').addClass('has-error');
              $('#c4p11o11div').addClass('has-error');
              $('#c4p11o12div').addClass('has-error');
              $('#c4p11o13div').addClass('has-error');
            

        }
        else
        {
           $('#c4p11m').hide(1000);     
          
              colocaropcion('2','valorc4p11o1','c4p11o1div');
              $('#c4p11o2').prop('checked',false);
              $('#c4p11o3').prop('checked',false);
              $('#c4p11o4').prop('checked',false);
              $('#c4p11o5').prop('checked',false);
              $('#c4p11o6').prop('checked',false);
              $('#c4p11o7').prop('checked',false);
              $('#c4p11o8').prop('checked',false);
              $('#c4p11o9').prop('checked',false);
              $('#c4p11o10').prop('checked',false);
              $('#c4p11o11').prop('checked',false);
              $('#c4p11o12').prop('checked',false);
              $('#c4p11o13').prop('checked',false);
               
               
               
              $('#c4p11o2').val('NO');
              $('#c4p11o3').val('NO');
              $('#c4p11o4').val('NO');
              $('#c4p11o5').val('NO');
              $('#c4p11o6').val('NO');
              $('#c4p11o7').val('NO');
              $('#c4p11o8').val('NO');
              $('#c4p11o9').val('NO');
              $('#c4p11o10').val('NO');
              $('#c4p11o11').val('NO');
              $('#c4p11o12').val('NO');
              $('#c4p11o13').val('NO');
              
              $('#c4p11o2div').removeClass('has-error');
              $('#c4p11o3div').removeClass('has-error');
              $('#c4p11o4div').removeClass('has-error');
              $('#c4p11o5div').removeClass('has-error');
              $('#c4p11o6div').removeClass('has-error');
              $('#c4p11o7div').removeClass('has-error');
              $('#c4p11o8div').removeClass('has-error');
              $('#c4p11o9div').removeClass('has-error');
              $('#c4p11o10div').removeClass('has-error');
              $('#c4p11o11div').removeClass('has-error');
              $('#c4p11o12div').removeClass('has-error');
              $('#c4p11o13div').removeClass('has-error');
              
              
        }
         validarguardar();
    }
    
  


</script>
</html>



