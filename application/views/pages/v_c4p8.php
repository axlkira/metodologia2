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
          <input type="text" class="form-control input-sm" id="edad" name="edad" style="display:none"    placeholder="" value="<?php echo($arraydatosgenerales['eedadintegrante']); ?>">
        <input type="text" class="form-control input-sm" id="sexo" name="sexo" style="display:none"    placeholder="" value="<?php echo($arraydatosgenerales['esexointegrante']); ?>">
       <input type="text" class="form-control input-sm" id="c4p9" name="c4p9"   style="display:none"    placeholder="" value="<?php echo($arrayrespuestas['ec4p9']); ?>">
        <!--fin para imprimir el idintegrante y llevarlo-->
<hr>
        <form class="form-group" name="formulario" id="formulario">

            <!--inicio radio una sola seleccion-->
            <div class="row">
            <div id="c4p8o1div" name="c4p8o1div" <?php if($arrayrespuestas['ec4p8o1']==''){echo('class="form-group col-md-12 form-group-sm has-error"');}else{echo('class="form-group col-md-12 form-group-sm"');}?>>   
                <label class="control-label">8. ¿Con cuál de los siguientes documentos  se está identificando actualmente?
                    <button type="button" id="vayuda" name="vayuda" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModal">
                        <span class="glyphicon glyphicon-question-sign" aria-hidden="true"></span> Ayuda
                    </button>
                </label>
                <div class="radio">
                    <label><!--en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="c4p8o1" id="c4p8o1" onclick="mostrarpais('c4p8o1');" value="c4p8o1" <?php if($arrayrespuestas['ec4p8o1']=='c4p8o1'){echo('checked');}?>>
                        Cédula de Ciudadanía
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="c4p8o1" id="c4p8o1" onclick="mostrarpais('c4p8o2');" value="c4p8o2" <?php if($arrayrespuestas['ec4p8o1']=='c4p8o2'){echo('checked');}?>>
                        Tarjeta de Identidad
                    </label>             
                </div> 
                
                 <div class="radio">
                    <label>
                        <input type="radio" name="c4p8o1" id="c4p8o1" onclick="mostrarpais('c4p8o3');" value="c4p8o3" <?php if($arrayrespuestas['ec4p8o1']=='c4p8o3'){echo('checked');}?>>
                        Registro Civil
                    </label>             
                </div> 
                
                 <div class="radio">
                    <label>
                        <input type="radio" name="c4p8o1" id="c4p8o1" onclick="mostrarpais('c4p8o4');" value="c4p8o4" <?php if($arrayrespuestas['ec4p8o1']=='c4p8o4'){echo('checked');}?>>
                        Cédula de Extranjeria
                    </label>             
                </div> 
                <div class="radio">
                    <label>
                        <input type="radio" name="c4p8o1" id="c4p8o1" onclick="mostrarpais('c4p8o6');" value="c4p8o6" <?php if($arrayrespuestas['ec4p8o1']=='c4p8o6'){echo('checked');}?>>
                        Pasaporte

                    </label>             
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="c4p8o1" id="c4p8o1" onclick="mostrarpais('c4p8o7');" value="c4p8o7" <?php if($arrayrespuestas['ec4p8o1']=='c4p8o7'){echo('checked');}?>>
                        Permiso Especial de Permanencia
                    </label>             
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="c4p8o1" id="c4p8o1" onclick="mostrarpais('c4p8o8');" value="c4p8o8" <?php if($arrayrespuestas['ec4p8o1']=='c4p8o8'){echo('checked');}?>>
                        Documento Extranjero
                    </label>             
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="c4p8o1" id="c4p8o1" onclick="mostrarpais('c4p8o9');" value="c4p8o9" <?php if($arrayrespuestas['ec4p8o1']=='c4p8o9'){echo('checked');}?>>
                        Estatuto temporal de protección (PPT)
                    </label>             
                </div>
                 <div class="radio">
                    <label>
                        <input type="radio" name="c4p8o1" id="c4p8o1" onclick="mostrarpais('c4p8o5');" value="c4p8o5" <?php if($arrayrespuestas['ec4p8o1']=='c4p8o5'){echo('checked');}?>>
                        No tiene
                    </label>             
                </div> 
                
                <input type="text" class="form-control" id="valorc4p8o1" style="display: none" name="valorc4p8o1"  placeholder="Text input" value="<?php echo($arrayrespuestas['ec4p8o1']); ?>">

                <div class="col-md-5 form-group" id="c4p8o2m" name="c4p8o2m" <?php if($arrayrespuestas['ec4p8o1']=='' || $arrayrespuestas['ec4p8o1']=='c4p8o1' || $arrayrespuestas['ec4p8o1']=='c4p8o2' || $arrayrespuestas['ec4p8o1']=='c4p8o3' || $arrayrespuestas['ec4p8o1']=='c4p8o5'){echo('style="display: none"' );} ?>>
                    <label class="control-label">Nacionalidad</label>
                        <select class="form-control " onchange="validarbolitasytexto('c4p8o2m','c4p8o2')" id="c4p8o2" name="c4p8o2">
                            <?php if($arrayrespuestas['ec4p8o2']=="")
                                {
                                echo('<option value="">Seleccione una opcion</option>');
                                }
                                else
                                {
                                echo('<option value="'.$arrayrespuestas['ec4p8o2'].'">'.$arrayrespuestas['ec4p8o2'].'</option>');
                                }?>
                            
                            <?php echo($paises); ?>
                        </select>
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
            <?php if($arrayrespuestas['ec4p8o1']=="")
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
           // alert($('#valorc4p8o1').val());
                        $.ajax({
                          url: "fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),vidintegrante : $('#idintegrante').val(), vvalorc4p8o1 : $('#valorc4p8o1').val(),vc4p8o2 : $('#c4p8o2').val()},    
                          dataType: "html",
                          success : function(obj){                      
                          botonguardar();
                          }
                        });                    
        });

        
        $("#actualizar").click(function ()
        {
           // alert($('#valorc4p8o1').val());
                        $.ajax({
                          url: "fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),vidintegrante : $('#idintegrante').val(), vvalorc4p8o1 : $('#valorc4p8o1').val(),vc4p8o2 : $('#c4p8o2').val()},    
                          dataType: "html",
                          success : function(obj){                      
                          botonguardar();
                          }
                        });                    
        });
        

        $("#siguiente").click(function ()
        {
         // botonsiguiente();
         
         if($('#sexo').val() === 'FEMENINO' || $('#edad').val() < 18 || $('#edad').val() > 49 )
                           {  
            
                           
                           $.ajax({
                             url: "../c_c4p9/fc_actualizar",
                             type: "GET",
                             data: {vfolio : $('#folio').val(),vidintegrante : $('#idintegrante').val(), vvalorc4p9 :'98'},    
                             dataType: "html",
                             success : function(obj){  
                             location.href = "../c_c4p10/fc_c4p10?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";  
                             }
                           }); 
                                                       
           }
          else if ( $('#c4p9').val() == '98')
           {   
                           
                           $.ajax({
                             url: "../c_c4p9/fc_actualizar",
                             type: "GET",
                             data: {vfolio : $('#folio').val(),vidintegrante : $('#idintegrante').val(), vvalorc4p9 :''},    
                             dataType: "html",
                             success : function(obj){  
                            location.href = "../c_c4p9/fc_c4p9?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +""; 
                             }
                           });
                                                                 
           }
           else
                {
                    
         location.href = "../c_c4p9/fc_c4p9?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +""; 
               }

        });
              
        $("#anterior").click(function ()
        {
         botonanterior();
         location.href = "../c_c4p7/fc_c4p7?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
        //location.href = "../c_capitulosintegrantes/fc_capitulosintegrantes?idintegrante=" + $('#idintegrante').val()+ "&idintegrante="+"&idintegrante=0";                    
        });

//para cargar variables capitulo, pregunta,encuestador,vivienda,barra
cargardatosgenerales('<?php echo($arraydatosgenerales['ecapitulo']); ?>','Pregunta 8 de 16','<?php echo($arraydatosgenerales['enomcoges']); ?>','<?php echo($arraydatosgenerales['enombreintegrante']." "." - "." "."Sexo:"." ".$arraydatosgenerales['esexointegrante']."   "."  -  "."   "."Edad:"."   ".$arraydatosgenerales['eedadintegrante']); ?>','18.18');
//control del boton ayuda
botonayuda();

});
    ////////// inicio nuevas variables ////////////////
    function mostrarpais(opcion)
    {
        
        $('#valorc4p8o1').val(opcion);
      
        if ((opcion == 'c4p8o3') || (opcion == 'c4p8o2') || (opcion == 'c4p8o1') || (opcion == 'c4p8o5')) {
            $('#c4p8o2').val('');
            $('#c4p8o2m').removeClass('has-error');
            $('#c4p8o2m').hide();
            
        } else{             
                $.ajax({
                  url: "fc_listarnacionalidad",
                  type: "GET",
                  data: {vdocumento : opcion},
                  dataType: "html",
                  success : function(obj){                      
                      $('#c4p8o2').html(obj);
                  }
                });

            $('#c4p8o2m').addClass('has-error');
            $('#c4p8o2m').show();
        }
        validarguardar();        
    }
    ////////// fin nuevas variables ////////////////

</script>
</html>