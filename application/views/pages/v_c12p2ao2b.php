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

            <!--inicio radio una sola seleccion-->
            <div class="row">
            <div id="c12p2ao2bdiv" name="c12p2ao2bdiv" <?php if($arrayrespuestas['ec12p2ao2b']=='' || $arrayrespuestas['ec12p2ao2b']=='98'){echo('class="form-group col-md-12 form-group-sm has-error"');}else{echo('class="form-group col-md-12 form-group-sm"');}?>>   
                <label class="control-label">2.B ¿ Cuál es el tipo de discapacidad certificada?<br/>
                   Discapacidad cognitiva
                  <button type="button" id="vayuda" name="vayuda" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModal">
                        <span class="glyphicon glyphicon-question-sign" aria-hidden="true"></span> Ayuda
                    </button>
                </label>
                <div class="radio">
                    <label><!--en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="c12p2ao2b" id="c12p2ao2b" onclick="colocaropcion('c12p2ao2b1','valorc12p2ao2b','c12p2ao2bdiv');" value="c12p2ao2b1" <?php if($arrayrespuestas['ec12p2ao2b']=='c12p2ao2b1'){echo('checked');}?>>
                        Profundo 
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="c12p2ao2b" id="c12p2ao2b" onclick="colocaropcion('c12p2ao2b2','valorc12p2ao2b','c12p2ao2bdiv');" value="c12p2ao2b2" <?php if($arrayrespuestas['ec12p2ao2b']=='c12p2ao2b2'){echo('checked');}?>>
                        Grave
                    </label>             
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="c12p2ao2b" id="c12p2ao2b" onclick="colocaropcion('c12p2ao2b3','valorc12p2ao2b','c12p2ao2bdiv');" value="c12p2ao2b3" <?php if($arrayrespuestas['ec12p2ao2b']=='c12p2ao2b3'){echo('checked');}?>>
                        Moderado
                    </label>             
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="c12p2ao2b" id="c12p2ao2b" onclick="colocaropcion('c12p2ao2b4','valorc12p2ao2b','c12p2ao2bdiv');" value="c12p2ao2b4" <?php if($arrayrespuestas['ec12p2ao2b']=='c12p2ao2b4'){echo('checked');}?>>
                        Leve
                    </label>             
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="c12p2ao2b" id="c12p2ao2b" onclick="colocaropcion('c12p2ao2b5','valorc12p2ao2b','c12p2ao2bdiv');" value="c12p2ao2b5" <?php if($arrayrespuestas['ec12p2ao2b']=='c12p2ao2b5'){echo('checked');}?>>
                        Sindrome de Down
                    </label>             
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="c12p2ao2b" id="c12p2ao2b" onclick="colocaropcion('c12p2ao2b6','valorc12p2ao2b','c12p2ao2bdiv');" value="c12p2ao2b6" <?php if($arrayrespuestas['ec12p2ao2b']=='c12p2ao2b6'){echo('checked');}?>>
                        Autismo
                    </label>             
                </div>
                
                <input type="text" class="form-control" id="valorc12p2ao2b" style="display:none" name="valorc12p2ao2b"  placeholder="Text input" value="<?php echo($arrayrespuestas['ec12p2ao2b']); ?>">
            
       
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
            <?php if($arrayrespuestas['ec12p2ao2b']=="")
            {
            echo($botoneragdisable);
            }
            else
            {
            echo($botoneraadisable);
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
                          vvalorc12p2ao2b : $('#valorc12p2ao2b').val(),    
                          },
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
                          vvalorc12p2ao2b : $('#valorc12p2ao2b').val(),    
                          },
                          dataType: "html",
                          success : function(obj){                      
                          botonguardar();
                          }
                        });                    
        });
        

        $("#siguiente").click(function ()
        {
         botonsiguiente();
         
         location.href = "../c_c12p2ao3/fc_c12p2ao3?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    

        });
              
        $("#anterior").click(function ()
        {
         botonanterior();
         location.href = "../c_c12p2ao2/fc_c12p2ao2?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
        });

//para cargar variables capitulo, pregunta,encuestador,vivienda,barra



cargardatosgenerales('<?php echo($arraydatosgenerales['ecapitulo']); ?>','Pregunta 2b de 4','<?php echo($arraydatosgenerales['enomcoges']); ?>','<?php echo($arraydatosgenerales['enombreintegrante']." "." - "." "."Sexo:"." ".$arraydatosgenerales['esexointegrante']."   "."  -  "."   "."Edad:"."   ".$arraydatosgenerales['eedadintegrante']); ?>','55');
//control del boton ayuda
botonayuda();

});
/* 
Funciones para validar campos y gaurdar
 */
//habilitar boton guardar
function validarguardarc8p7()
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
function validarbolitasytextoc8p7(div,campo)
{ //alert(div + ' juanpis ' + campo);
   if(($('#'+ campo).val() == '') || ($('#'+ campo).val() == '0'))
   { 
       $('#' + div).addClass(' has-error');
   }
   else
   { 
       $('#' + div).removeClass('has-error');
   }
    validarguardarc8p7();
}
// colocar opcion para todos

//de aca para arriba es logica de bolas y textos
function validarcampotexcuadros(div,campo,ncampos)
{
    validarbolitasytexto(div,campo);
    validarcuadrosc6p17(div,ncampos);
}
</script>
</html>

