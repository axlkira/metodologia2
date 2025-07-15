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
        <!--fin para imprimir el idintegrante y llevarlo-->
<hr>
        <form class="form-group" name="formulario" id="formulario">

            
            
           <div class="row">
               <div id="ppc3p4div" name="ppc3p4div" class="form-group col-md-12" >
               <label class="control-label">5. REFERENCIAS PERSONALES<br><br>
                   Máximo 2 referencias personales
                    <button type="button" id="vayuda" name="vayuda" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModal">
                        <span class="glyphicon glyphicon-question-sign" aria-hidden="true"></span> Ayuda
                    </button>
                </label><br><br><br>
               
                <div class="row">           
                       <div id="ppc3p4a1div" <?php if($arrayrespuestas['eppc3p4a1']==''){echo('class="form-group col-md-5 form-group-sm has-error"');}else{echo('class="form-group col-md-5 form-group-sm"');}?>>  
                           <labe class="control-label">
                              1. NOMBRES
                           <input type="text" class="form-control" onchange="validarbolitasytexto('ppc3p4a1div','valorppc3p4a1')" placeholder="INGRESE NOMBRES Y APELLIDOS" id="valorppc3p4a1" name="valorppc3p4a1"  onkeypress="return soloLetras(event)" placeholder="Text input" value="<?php echo($arrayrespuestas['eppc3p4a1']); ?>">

                           </labe>
                       </div>

                       <div id="ppc3p4a2div" <?php if($arrayrespuestas['eppc3p4a2']==''){echo('class="form-group col-md-5 form-group-sm has-error"');}else{echo('class="form-group col-md-5 form-group-sm"');}?>>  
                            <labe class="control-label">
                               1. TELEFONO
                           <input type="text" class="form-control" onchange="validarbolitasytexto('ppc3p4a2div','valorppc3p4a2')" id="valorppc3p4a2" maxlength="10" placeholder="INGRESE NUMERO TELEFONICO" name="valorppc3p4a2" onkeypress="return soloNumeros(event)"  placeholder="Text input" value="<?php echo($arrayrespuestas['eppc3p4a2']); ?>">

                            </labe>
                       </div>           
                </div> 
                
               </div> <br><br>
               
               
               
               <div class="form-group col-md-12">
                   
                   <div class="row"><br><br><br>
                 
                   
                   
                       <div id="ppc3p4a3div" class="col-md-5">
                           <labe class="control-label">
                              2. NOMBRES
                           <input type="text" class="form-control" onchange="validarbolitasytextoc3p4('ppc3p4a3div','valorppc3p4a3')" placeholder="INGRESE NOMBRES Y APELLIDOS" id="valorppc3p4a3" name="valorppc3p4a3" onkeypress="return soloLetras(event)"  placeholder="Text input" value="<?php  echo($arrayrespuestas['eppc3p4a3']); ?>">

                           </labe>
                       </div>
               
                       <div id="ppc3p4a4div" class="col-md-5">
                            <labe class="control-label">
                               2. TELEFONO
                           <input type="text" class="form-control" onchange="validarbolitasytextoc3p4('ppc3p4a4div','valorppc3p4a4')" id="valorppc3p4a4" maxlength="10" placeholder="INGRESE NUMERO TELEFONICO" onkeypress="return soloNumeros(event)" name="valorppc3p4a4"  placeholder="Text input" value="<?php echo($arrayrespuestas['eppc3p4a4']); ?>">

                            </labe>
                       </div>        
                   </div> 
               </div> 
            
            </div>
                 
                 <!--inicio radio una sola seleccion-->
            
<!--            
            <div class="row">
            <div id="ppc3p4div" name="ppc3p4div" <?php if($carrayrespuestas['eppc3p4']==''){echo('class="form-group col-md-12 form-group-sm has-error"');}else{echo('class="form-group col-md-12 form-group-sm"');}?>>   
                <label class="control-label">7. Parentesco con la persona jefe del Hogar
                    <button type="button" id="vayuda" name="vayuda" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModal">
                        <span class="glyphicon glyphicon-question-sign" aria-hidden="true"></span> Ayuda
                    </button>
                </label>
                <div class="radio">
                    <label>en este caso se manda a la fincion javascript el valor del campo
                        <input type="radio" name="ppc3p4" id="ppc3p4" onclick="colocaropcion('1','valorppc3p4','ppc3p4div');" value="1" <?php if($carrayrespuestas['eppc3p4']=='1'){echo('checked');}?>>
                        PRIMERA CLASE
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="ppc3p4" id="ppc3p4" onclick="colocaropcion('2','valorppc3p4','ppc3p4div');" value="2" <?php if($carrayrespuestas['eppc3p4']=='2'){echo('checked');}?>>
                        SEGUNDA CLASE
                    </label>             
                </div> 
                
                        
                <input type="text" class="form-control" id="valorppc3p4" name="valorppc3p4" style="display:none" placeholder="Text input" value="<?php echo($carrayrespuestas['eppc3p4']); ?>">
            </div>
            </div> -->
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
            <?php if($arrayrespuestas['eppc3p4a1']=="")
            {
                echo($botonerag);
            }
            else
            {
                echo($botoneraa);
            }?>   
          <!-- Fin botonera guardar y actualizar-->

        
    
    <!--Inicio Este es el footer NO TOCAR-->
    <?php echo($foot); ?>
    <!--fin del footer NO TOCAR-->
    </form>
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
                                 vvalorppc3p4a1: $('#valorppc3p4a1').val(),
                                 vvalorppc3p4a2: $('#valorppc3p4a2').val(),
                                 vvalorppc3p4a3: $('#valorppc3p4a3').val(),
                                 vvalorppc3p4a4: $('#valorppc3p4a4').val()},    
                          dataType: "html",
                          success : function(obj){                      
                          botonguardar();
                          },
                          error: function (jqXHR, ajaxOptions, thrownError) {terminasinco();
                                    if (jqXHR.status === 0) {
                                        mensajito ('Error al sincronizar!!!','Sin Conexion a internet, por favor verifca tu conexion a internet y vuelve a intentar. [0]');
                                    } else if (jqXHR.status == 404) {
                                        mensajito ('Error al sincronizar!!!','Sin Conexion a internet, por favor verifca tu conexion a internet y vuelve a intentar. [404]');
                                    } else if (jqXHR.status == 500) {
                                        mensajito ('Error al sincronizar!!!','Sin Conexion a internet, por favor verifca tu conexion a internet y vuelve a intentar. [500].');
                                    } else {
                                        mensajito ('Error interno!!!','Comuniquese con el analista en sede');
                                    }

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
                                 vvalorppc3p4a1: $('#valorppc3p4a1').val(),
                                 vvalorppc3p4a2: $('#valorppc3p4a2').val(),
                                 vvalorppc3p4a3: $('#valorppc3p4a3').val(),
                                 vvalorppc3p4a4: $('#valorppc3p4a4').val()},       
                          dataType: "html",
                          success : function(obj){                      
                          botonguardar();
                          },
                          error: function (jqXHR, ajaxOptions, thrownError) {terminasinco();
                                    if (jqXHR.status === 0) {
                                        mensajito ('Error al sincronizar!!!','Sin Conexion a internet, por favor verifca tu conexion a internet y vuelve a intentar. [0]');
                                    } else if (jqXHR.status == 404) {
                                        mensajito ('Error al sincronizar!!!','Sin Conexion a internet, por favor verifca tu conexion a internet y vuelve a intentar. [404]');
                                    } else if (jqXHR.status == 500) {
                                        mensajito ('Error al sincronizar!!!','Sin Conexion a internet, por favor verifca tu conexion a internet y vuelve a intentar. [500].');
                                    } else {
                                        mensajito ('Error interno!!!','Comuniquese con el analista en sede');
                                    }

                              }
                        });                    
        });
        

        $("#siguiente").click(function ()
        {
         botonsiguiente();
         location.href = "../c_ppcapitulosintegrante/fc_ppcapitulosintegrante?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    

        });
              
        $("#anterior").click(function ()
        {
         botonanterior();
          location.href = "../c_ppc3p3e/fc_ppc3p3e?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";   
        //location.href = "../c_capitulosintegrantes/fc_capitulosintegrantes?idintegrante=" + $('#idintegrante').val()+ "&idintegrante="+"&idintegrante=0";                    
        });

//para cargar variables capitulo, pregunta,encuestador,vivienda,barra
cargardatosgenerales('<?php echo($arraydatosgenerales['ecapitulo']); ?>','Pregunta 4 de 4','<?php echo($arraydatosgenerales['enomcoges']); ?>','<?php echo($arraydatosgenerales['enombreintegrante']." "." - "." "."Sexo:"." ".$arraydatosgenerales['esexointegrante']."   "."  -  "."   "."Edad:"."   ".$arraydatosgenerales['eedadintegrante']); ?>','100');
//control del boton ayuda
botonayuda();

});


function validarbolitasytextoc3p4(div,campo)
{ //alert(div + ' juanpis ' + campo);
   if(($('#'+ campo).val() == '') || ($('#'+ campo).val() == '0') || ($('#'+ campo).val() == '98'))
   { 
       
   }
   else
   { 
       
   }
    validarguardar();
}


</script>
</html>