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
        <input type="text" class="form-control input-sm" id="idorden" name="idorden"  style="display:none"   placeholder="" value="<?php echo($arrayrespuestas4n1['eidorden']); ?>">
<!--        <input type="text" class="form-control input-sm" id="c8p3" name="c8p3" style="display:none" placeholder="" value="<?php echo($arrayrespuestas['ec8p3']); ?>">-->
        <!--fin para imprimir el idintegrante y llevarlo-->
<hr>
        <form class="form-group" name="formulario" id="formulario">
            
       <div id="ppc1p4n6areamostrar" name="ppc1p4n6areamostrar"<?php if($arrayrespuestas['eppc1p4n6']==''||$arrayrespuestas['eppc1p4n6']=='98'){echo('style=" "');}else{echo('');}?>>  
            <div id="ppc1p4n6areadiv" name="ppc1p4n6areadiv" <?php if($arrayrespuestas['eppc1p4n6']==''){echo('class="form-group col-md-5 form-group-sm has-error"');}else{echo('class="form-group col-md-5 form-group-sm"');}?>>   
             
                <label class="control-label" for="ppc1p4n6"></label>4.6 CONOCIMIENTOS ADQUIRIDOS POR MEDIO DE LA EXPERIENCIA NO CERTIFICADOS: 
                <div class="radio">
                        <select class="form-control input-sm" id="ppc1p4n6area" name="ppc1p4n6area" onchange="validararea(this.value,'ppc1p4n6areadiv','areacono');">
                            <?php if($arrayrespuestas['eppc1p4n6']==""||$arrayrespuestas['eppc1p4n6']=="98")
                                {
                                echo('<option value="">Seleccione una opción</option>');
                                }
                                else
                                {
                                echo('<option value="'.$arrayrespuestas['eppc1p4n6'].'">'.$arrayrespuestas['eppc1p4n6'].'</option>');
                                }?>
                            
                            <?php echo($areasconocimiento); ?>
                        </select>
                     <input type="text" class="form-control" id="areacono" name="areacono" style="display:none" placeholder="Text input" value="<?php echo($arrayrespuestas['eppc1p4n6']);?>">
            </div>
            </div>
            </div>       
            <!--fin lista desplegable pregunta 3.5-->
            <!--inicio texto pregunta 4.6 cual-->
        <div id="ppc1p4n6cualmostrar" name="ppc1p4n6cualmostrar"<?php if($arrayrespuestas['eppc1p4n6']<>'Otro'){echo('style="display:none"');}else{echo('');}?> >   
        <div id="ppc1p4n6cualdiv" name="ppc1p4n6cualdiv" <?php if($arrayrespuestas['eppc1p4n6cual']==''){echo('class="form-group col-md-12 form-group-sm has-error"');}else{echo('class="form-group col-md-12 form-group-sm"');}?>>   
        <label class="control-label">Cuál ?</label>
        <div>
                    <label><!--en este caso se manda a la fincion javascript el valor del campo-->
                    <input type="text" class="form-control" id="ppc1p4n6cual" name="ppc1p4n6cual" size="100" onKeyPress="return soloLetras(event)" onchange="validarbolitasytextoppc1p4n6('ppc1p4n6cualdiv','ppc1p4n6cual')" placeholder="Cuál ?" value="<?php echo($arrayrespuestas['eppc1p4n6cual']); ?>">
                    </label>
        </div>
        </div>
        </div>
        <!--fin texto pregunta 4.6 cual-->
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
            <?php if($arrayrespuestas['eppc1p4n6']=="")
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
function validararea(opcion, div, campo)
    {
    $('#areacono').val(opcion);
    //validarbolitasytextoppc1p4n6(div,campo);   
    colocaropcionppc1p4n6(opcion,div,campo);   
    }

function colocaropcionppc1p4n6(opcion,divcampo,campoval)
{   ////alert('opcion = ' + opcion + ' - campoval= ' + campoval + ' - divcampo= ' + divcampo);
    if(opcion == 'Otro')
        {
           // //alert('aca muestra');
            $('#ppc1p4n6cualmostrar').show();
            $('#ppc1p4n6cualdiv').addClass('has-error');
            $('#ppc1p4n6cual').val('');
        }
        else 
        {
           // //alert('aca lo ocual');
            
            $('#ppc1p4n6cualmostrar').hide();
            $('#ppc1p4n6areadiv').removeClass('has-error');
            $('#ppc1p4n6cualdiv').removeClass('has-error');
            $('#ppc1p4n6cual').val('98')
            
        }
        
    validarbolitasytextoppc1p4n6(divcampo,campoval);
}
    
 function validarguardarppc1p4n6()
{
 //  //alert($('.has-error').length);
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
       $('#siguiente').prop('disabled', true);
   }
   
}

//validar bolitas y texto
function validarbolitasytextoppc1p4n6(div,campo)
{ ////alert(div + ' juanpis ' + campo);
   if(($('#'+ campo).val() == '') || ($('#'+ campo).val() == '0'))
   { 
       $('#' + div).addClass(' has-error');
   }
   else
   { 
       $('#' + div).removeClass('has-error');
   }
    validarguardarppc1p4n6();
}
    $(document).ready(function()
    {

        $("#guardar").click(function ()
        {
                        $.ajax({
                          url: "fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),
                          vidintegrante : $('#idintegrante').val(),
                          vppc1p4n6 : $('#areacono').val(),
                          vppc1p4n6cual : $('#ppc1p4n6cual').val()},    
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
                          vppc1p4n6 : $('#areacono').val(),
                          vppc1p4n6cual : $('#ppc1p4n6cual').val()},
                          dataType: "html",
                          success : function(obj){                      
                          botonguardar();
                          }
                        });                    
        });
        $("#siguiente").click(function ()
        {
         botonsiguiente();
          location.href = "../c_ppc1p4n7/fc_ppc1p4n7?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
        });
              
        $("#anterior").click(function ()
        {
         if($('#idorden').val() === '1')
           {                
           location.href = "../c_ppc1p4n1/fc_ppc1p4n1?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
           //botonanterior();
           }
           else if ($('#idorden').val() === '2')
            {                
           location.href = "../c_ppc1p4n1o1/fc_ppc1p4n1o1?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
           //botonanterior();
           }
          else if ($('#idorden').val() === '3')
            {                
           location.href = "../c_ppc1p4n1o2/fc_ppc1p4n1o2?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
           //botonanterior();
           } 
          else{
               //location.href = "../c_ppc1p4n1/fc_ppc1p4n1?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
               }
        botonanterior();
        // location.href = "../c_ppc1p3n2/fc_ppc1p3n2?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
        });

//para cargar variables capitulo, pregunta,encuestador,vivienda,barra



cargardatosgenerales('<?php echo($arraydatosgenerales['ecapitulo']); ?>','Pregunta 4.6 de 5.1','<?php echo($arraydatosgenerales['enomcoges']); ?>','<?php echo($arraydatosgenerales['enombreintegrante']." "." - "." "."Sexo:"." ".$arraydatosgenerales['esexointegrante']."   "."  -  "."   "."Edad:"."   ".$arraydatosgenerales['eedadintegrante']); ?>','84');
//control del boton ayuda
botonayuda();

});

</script>
</html>