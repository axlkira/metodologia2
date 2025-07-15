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
         <input type="text" class="form-control input-sm" id="edad" name="edad" style="display:none"  placeholder="" value="<?php echo($arraydatosgenerales['eedadintegrante']); ?>">
        <input type="text" class="form-control input-sm" id="sexo" name="sexo"  style="display:none"   placeholder="" value="<?php echo($arraydatosgenerales['esexointegrante']); ?>">
        <input type="text" class="form-control input-sm" id="totaljefe" name="totaljefe" style="display:none" placeholder="" value="<?php echo($carrayrespuestasjefe['etotaljefes']); ?>">
        <!--fin para imprimir el idintegrante y llevarlo-->
<hr>
        <form class="form-group" name="formulario" id="formulario">

            <!--inicio radio una sola seleccion-->
            <div class="row">
            <div id="c4p7div" name="c4p7div" <?php if($arrayrespuestas['ec4p7']==''){echo('class="form-group col-md-12 form-group-sm has-error"');}else{echo('class="form-group col-md-12 form-group-sm"');}?>>   
                <label class="control-label">7. Parentesco con la persona jefe del Hogar
                    <button type="button" id="vayuda" name="vayuda" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModal">
                        <span class="glyphicon glyphicon-question-sign" aria-hidden="true"></span> Ayuda
                    </button>
                </label>
                <div class="radio">
                    <label><!--en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="c4p7" id="c4p7" <?php if($arraydatosgenerales['eedadintegrante'] <= '13' || $carrayrespuestasjefe['etotaljefes'] >= '1'){echo('disabled');}  ?> onclick="colocaropcion('1','valorc4p7','c4p7div');" value="1" <?php if($arrayrespuestas['ec4p7']=='1'){echo('checked');}?>>
                        Jefe
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="c4p7" id="c4p7" onclick="colocaropcion('2','valorc4p7','c4p7div');" value="2" <?php if($arrayrespuestas['ec4p7']=='2'){echo('checked');}?>>
                        Cónyuge o Compañera(o)
                    </label>             
                </div> 
                
                 <div class="radio">
                    <label>
                        <input type="radio" name="c4p7" id="c4p7" onclick="colocaropcion('3','valorc4p7','c4p7div');" value="3" <?php if($arrayrespuestas['ec4p7']=='3'){echo('checked');}?>>
                        Hijos/ Hijastros
                    </label>             
                </div> 
                
                 <div class="radio">
                    <label>
                        <input type="radio" name="c4p7" id="c4p7" onclick="colocaropcion('4','valorc4p7','c4p7div');" value="4" <?php if($arrayrespuestas['ec4p7']=='4'){echo('checked');}?>>
                        Nietos
                    </label>             
                </div> 
                
                 <div class="radio">
                    <label>
                        <input type="radio" name="c4p7" id="c4p7" onclick="colocaropcion('5','valorc4p7','c4p7div');" value="5" <?php if($arrayrespuestas['ec4p7']=='5'){echo('checked');}?>>
                        Padres
                    </label>             
                </div> 
                
                 <div class="radio">
                    <label>
                        <input type="radio" name="c4p7" id="c4p7" onclick="colocaropcion('6','valorc4p7','c4p7div');" value="6" <?php if($arrayrespuestas['ec4p7']=='6'){echo('checked');}?>>
                        Hermanos
                    </label>             
                </div> 
                
                 <div class="radio">
                    <label>
                        <input type="radio" name="c4p7" id="c4p7" onclick="colocaropcion('7','valorc4p7','c4p7div');" value="7" <?php if($arrayrespuestas['ec4p7']=='7'){echo('checked');}?>>
                        Yerno o nuera
                    </label>             
                </div> 
                
                 <div class="radio">
                    <label>
                        <input type="radio" name="c4p7" id="c4p7" onclick="colocaropcion('8','valorc4p7','c4p7div');" value="8" <?php if($arrayrespuestas['ec4p7']=='8'){echo('checked');}?>>
                        Abuelos
                    </label>             
                </div> 
                
                 <div class="radio">
                    <label>
                        <input type="radio" name="c4p7" id="c4p7" onclick="colocaropcion('9','valorc4p7','c4p7div');" value="9" <?php if($arrayrespuestas['ec4p7']=='9'){echo('checked');}?>>
                        Suegros
                    </label>             
                </div> 
                
                 <div class="radio">
                    <label>
                        <input type="radio" name="c4p7" id="c4p7" onclick="colocaropcion('10','valorc4p7','c4p7div');" value="10" <?php if($arrayrespuestas['ec4p7']=='10'){echo('checked');}?>>
                        Tíos
                    </label>             
                </div> 
                
                 <div class="radio">
                    <label>
                        <input type="radio" name="c4p7" id="c4p7" onclick="colocaropcion('11','valorc4p7','c4p7div');" value="11" <?php if($arrayrespuestas['ec4p7']=='11'){echo('checked');}?>>
                        Sobrinos
                    </label>             
                </div> 
                
                 <div class="radio">
                    <label>
                        <input type="radio" name="c4p7" id="c4p7" onclick="colocaropcion('12','valorc4p7','c4p7div');" value="12" <?php if($arrayrespuestas['ec4p7']=='12'){echo('checked');}?>>
                        Primos
                    </label>             
                </div> 
                
                 <div class="radio">
                    <label>
                        <input type="radio" name="c4p7" id="c4p7" onclick="colocaropcion('13','valorc4p7','c4p7div');" value="13" <?php if($arrayrespuestas['ec4p7']=='13'){echo('checked');}?>>
                        Cuñados
                    </label>             
                </div> 
                
                <div class="radio">
                    <label>
                        <input type="radio" name="c4p7" id="c4p7" onclick="colocaropcion('14','valorc4p7','c4p7div');" value="14" <?php if($arrayrespuestas['ec4p7']=='14'){echo('checked');}?>>
                        Otros parientes
                    </label>             
                </div> 
                
                <div class="radio">
                    <label>
                        <input type="radio" name="c4p7" id="c4p7" onclick="colocaropcion('15','valorc4p7','c4p7div');" value="15" <?php if($arrayrespuestas['ec4p7']=='15'){echo('checked');}?>>
                        Otros no parientes
                    </label>             
                </div> 
                
                 
               
                
                <input type="text" class="form-control" id="valorc4p7" name="valorc4p7" style="display:none" placeholder="Text input" value="<?php echo($arrayrespuestas['ec4p7']); ?>">
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
            <?php if($arrayrespuestas['ec4p7']=="")
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
                          data: {vfolio : $('#folio').val(),vidintegrante : $('#idintegrante').val(), vvalorc4p7 : $('#valorc4p7').val()},    
                          dataType: "html",
                          success : function(obj){  
                          $('#siguiente').prop('disabled', true);
                          botonguardar();
                          location.reload();
                          }
                        });                    
        });

        
        $("#actualizar").click(function ()
        {
                        $.ajax({
                          url: "fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),vidintegrante : $('#idintegrante').val(), vvalorc4p7 : $('#valorc4p7').val()},    
                          dataType: "html",
                          success : function(obj){
                          $('#siguiente').prop('disabled', true);
                          botonguardar();
                          location.reload();
                          }
                        });                    
        });
        

        $("#siguiente").click(function ()
        {
         botonsiguiente();
         location.href = "../c_c4p8/fc_c4p8?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    

        });
              
        $("#anterior").click(function ()
        {
         botonanterior();
          location.href = "../c_capitulosintegrante/fc_capitulosintegrante?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";   
        //location.href = "../c_capitulosintegrantes/fc_capitulosintegrantes?idintegrante=" + $('#idintegrante').val()+ "&idintegrante="+"&idintegrante=0";                    
        });

//para cargar variables capitulo, pregunta,encuestador,vivienda,barra
cargardatosgenerales('<?php echo($arraydatosgenerales['ecapitulo']); ?>','Pregunta 7 de 16','<?php echo($arraydatosgenerales['enomcoges']); ?>','<?php echo($arraydatosgenerales['enombreintegrante']." "." - "." "."Sexo:"." ".$arraydatosgenerales['esexointegrante']."   "."  -  "."   "."Edad:"."   ".$arraydatosgenerales['eedadintegrante']); ?>','9.09');
//control del boton ayuda
botonayuda();

});

</script>
</html>