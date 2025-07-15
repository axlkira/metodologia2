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
<!--        <input type="text" class="form-control input-sm" id="c8p3" name="c8p3" style="display:none" placeholder="" value="<?php echo($arrayrespuestas['ec8p3']); ?>">-->
        <!--fin para imprimir el idintegrante y llevarlo-->
<hr>
        <form class="form-group" name="formulario" id="formulario">
            
            <!--inicio radio una sola seleccion pregunta 3.2-->
            <div class="row">
            <div id="ppc1p3n2div" name="ppc1p3n2div" <?php if($arrayrespuestas['eppc1p3n2']==''||$arrayrespuestas['eppc1p3n2']=='98'){echo('class="form-group form-group-sm has-error"');}else{echo('class="form-group  form-group-sm"');}?>>   
                <label class="control-label">AGREGAR OTRO TÍTULO OBTENIDO (NUMERO 3) <br>
                    SELECCIÓN UNICA
<!--                    <button type="button" id="vayuda" name="vayuda" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModal">
                        <span class="glyphicon glyphicon-question-sign" aria-hidden="true"></span> Ayuda
                    </button>-->
                </label>
                <div class="radio">
                    <label>
                        <input type="radio" name="ppc1p3n2" id="ppc1p3n2" onclick="colocaropcionppc1p3n2('ppc1p3n2o7','valorppc1p3n2','ppc1p3n2div');" value="ppc1p3n2o7" <?php if($arrayrespuestas['eppc1p3n2']=='ppc1p3n2o7'){echo('checked');}?>>
                        Técnico con título
                    </label>             
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="ppc1p3n2" id="ppc1p3n2" onclick="colocaropcionppc1p3n2('ppc1p3n2o9','valorppc1p3n2','ppc1p3n2div');" value="ppc1p3n2o9" <?php if($arrayrespuestas['eppc1p3n2']=='ppc1p3n2o9'){echo('checked');}?>>
                        Tecnológico con título
                    </label>             
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="ppc1p3n2" id="ppc1p3n2" onclick="colocaropcionppc1p3n2('ppc1p3n2o11','valorppc1p3n2','ppc1p3n2div');" value="ppc1p3n2o11" <?php if($arrayrespuestas['eppc1p3n2']=='ppc1p3n2o11'){echo('checked');}?>>
                        Universitario con título
                    </label>             
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="ppc1p3n2" id="ppc1p3n2" onclick="colocaropcionppc1p3n2('ppc1p3n2o13','valorppc1p3n2','ppc1p3n2div');" value="ppc1p3n2o13" <?php if($arrayrespuestas['eppc1p3n2']=='ppc1p3n2o13'){echo('checked');}?>>
                        Posgrado con título
                    </label>             
                </div>
<!--                <div class="radio">
                    <label>
                        <input type="radio" name="ppc1p3n2" id="ppc1p3n2" onclick="colocaropcionppc1p3n2('ppc1p3n2o15','valorppc1p3n2','ppc1p3n2div');" value="ppc1p3n2o15" <?php if($arrayrespuestas['eppc1p3n2']=='ppc1p3n2o15'){echo('checked');}?>>
                        Especialización
                    </label>             
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="ppc1p3n2" id="ppc1p3n2" onclick="colocaropcionppc1p3n2('ppc1p3n2o16','valorppc1p3n2','ppc1p3n2div');" value="ppc1p3n2o16" <?php if($arrayrespuestas['eppc1p3n2']=='ppc1p3n2o16'){echo('checked');}?>>
                        Maestría
                    </label>             
                </div>-->
                <input type="text" class="form-control" id="valorppc1p3n2" name="valorppc1p3n2" style="display:none" placeholder="Text input" value="<?php echo($arrayrespuestas['eppc1p3n2']); ?>">
                </div>
                <!--   fin pregunta 3.2   -->
        
            <!--inicio lista desplegable pregunta 3.5-->
            <div id="ppc1p3n5institucionmostrar" name="ppc1p3n5institucionmostrar"<?php if($arrayrespuestas['eppc1p3n5institucion']==''||$arrayrespuestas['eppc1p3n5institucion']=='98'){echo('style="display:none"');}else{echo('');}?>>  
            <div id="ppc1p3n5instituciondiv" name="ppc1p3n5instituciondiv" <?php if($arrayrespuestas['eppc1p3n5institucion']==''){echo('class="form-group col-md-5 form-group-sm has-error"');}else{echo('class="form-group col-md-5 form-group-sm"');}?>>   
            <label class="control-label">3.5 Estudios Realizados</label><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;INSTITUCIÓN
            <div class="radio">
                    <label><!--en este caso se manda a la fincion javascript el valor del campo-->
                    <input type="text" class="form-control" id="ppc1p3n5institucion" name="ppc1p3n5institucion" size="100" onKeyPress="return soloLetras(event)" onchange="validarbolitasytextoppc1p3n2('ppc1p3n5instituciondiv','ppc1p3n5institucion')" placeholder="Institución" value="<?php echo($arrayrespuestas['eppc1p3n5institucion']); ?>">
                    </label>
            
            </div>
            </div>
            </div>
            
            <div id="ppc1p3n5areamostrar" name="ppc1p3n5areamostrar"<?php if($arrayrespuestas['eppc1p3n5area']==''||$arrayrespuestas['eppc1p3n5area']=='98'){echo('style="display:none"');}else{echo('');}?>>  
            <div id="ppc1p3n5areadiv" name="ppc1p3n5areadiv" <?php if($arrayrespuestas['eppc1p3n5area']==''){echo('class="form-group col-md-5 form-group-sm has-error"');}else{echo('class="form-group col-md-5 form-group-sm"');}?>>   
             
                <label class="control-label" for="ppc1p3n5">&nbsp;&nbsp;&nbsp;</label><br>&nbsp;ÁREA DEL PROGRAMA
                <div class="radio">
                        <select class="form-control input-sm" id="ppc1p3n5area" name="ppc1p3n5area" onchange="validararea(this.value,'ppc1p3n5areadiv','areacono');">
                            <?php if($arrayrespuestas['eppc1p3n5area']==""||$arrayrespuestas['eppc1p3n5area']=="98")
                                {
                                echo('<option value="">Seleccione una opción</option>');
                                }
                                else
                                {
                                echo('<option value="'.$arrayrespuestas['eppc1p3n5area'].'">'.$arrayrespuestas['eppc1p3n5area'].'</option>');
                                }?>
                            
                            <?php echo($areasconocimiento); ?>
                        </select>
                     <input type="text" class="form-control" id="areacono" name="areacono" style="display:none" placeholder="Text input" value="<?php echo($arrayrespuestas['eppc1p3n5area']);?>">
            </div>
            </div>
            </div>    
               
            <!--fin lista desplegable pregunta 3.5-->
        <!--inicio texto pregunta 3.6-->
        <div id="ppc1p3n6mostrar" name="ppc1p3n6mostrar"<?php if($arrayrespuestas['eppc1p3n6']==''||$arrayrespuestas['eppc1p3n6']=='98'){echo('style="display:none"');}else{echo('');}?> >   
        <div id="ppc1p3n6div" name="ppc1p3n6div" <?php if($arrayrespuestas['eppc1p3n6']==''){echo('class="form-group col-md-12 form-group-sm has-error"');}else{echo('class="form-group col-md-12 form-group-sm"');}?>>   
        <label class="control-label">3.6 AÑO DE EGRESO</label><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;solo se puede ingresar los años desde 1965 hasta el año actual.
        <div class="radio">
                    <label><!--en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="text" class="form-control" id="ppc1p3n6" name="ppc1p3n6" size="100" onKeyPress="return soloNumeros(event)" maxlength="4" onchange="validarrango('ppc1p3n6',<?php echo($actuaA); ?>,1965,'ppc1p3n6div')" placeholder="" value="<?php echo($arrayrespuestas['eppc1p3n6']); ?>">
                    </label>
        </div>
        </div>
        </div>
        <!--fin texto pregunta 3.6-->
        <!--inicio texto pregunta 3.7-->
        <div id="ppc1p3n7mostrar" name="ppc1p3n7mostrar"<?php if($arrayrespuestas['eppc1p3n7']==''||$arrayrespuestas['eppc1p3n7']=='98'){echo('style="display:none"');}else{echo('');}?> >   
        <div id="ppc1p3n7div" name="ppc1p3n7div" <?php if($arrayrespuestas['eppc1p3n7']==''){echo('class="form-group col-md-12 form-group-sm has-error"');}else{echo('class="form-group col-md-12 form-group-sm"');}?>>   
        <label class="control-label">3.7 NOMBRE DEL PROGRAMA FINALIZADO</label>
        <div class="radio">
                    <label><!--en este caso se manda a la fincion javascript el valor del campo-->
                    <input type="text" class="form-control" id="ppc1p3n7" name="ppc1p3n7" size="100" onKeyPress="return soloLetras(event)" onchange="validarbolitasytextoppc1p3n2('ppc1p3n7div','ppc1p3n7')" placeholder="Titulo obtenido" value="<?php echo($arrayrespuestas['eppc1p3n7']); ?>">
                    </label>
        </div>
        </div>
        </div>
        <!--fin texto pregunta 3.7-->
         </div>
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
            <?php if($arrayrespuestas['eppc1p3n2']=="")
            {
                echo($botoneragotro2);
            }
            else
            {
                echo($botoneraaotro2);
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
    
    validarbolitasytextoppc1p3n2(div,campo);   
    }

function colocaropcionppc1p3n2(opcion,campoval,divcampo)
{
    ////alert(opcion);
    ////alert('1');
    $('#' + campoval).val(opcion);
     if(opcion == 'ppc1p3n2o7'||opcion == 'ppc1p3n2o9'||opcion == 'ppc1p3n2o11'||opcion == 'ppc1p3n2o13'||opcion == 'ppc1p3n2o15'||opcion == 'ppc1p3n2o16')
        {
           //   //alert('aca muestra 3.4 y 3.5');
            
            $('#ppc1p3n5institucionmostrar').show();
            $('#ppc1p3n5instituciondiv').show();
            $('#ppc1p3n5instituciondiv').addClass('has-error');
            $('#ppc1p3n5areamostrar').show();
            $('#ppc1p3n5areadiv').show();
            $('#ppc1p3n5areadiv').addClass('has-error');
            $('#ppc1p3n6mostrar').show();
            $('#ppc1p3n6div').show();
            $('#ppc1p3n6div').addClass('has-error');
            $('#ppc1p3n7mostrar').show();
            $('#ppc1p3n7div').show();
            $('#ppc1p3n7div').addClass('has-error');
            
            // //alert('aca salta a la 4');
            
            $('#ppc1p3n2gradodiv').hide();
            $('#ppc1p3n2gradodiv').removeClass('has-error');
            $('#ppc1p3n3mostrar').hide();
            $('#ppc1p3n3div').removeClass('has-error');
            $('#ppc1p3n31div').removeClass('has-error');
            
            $('#ppc1p3n4div').hide();
            $('#ppc1p3n4div').removeClass('has-error');
            
            
            $('#ppc1p3n5institucion').val('');
            $('#ppc1p3n5area').val('');
            $('#areacono').val('');
            $('#ppc1p3n6').val('');
            $('#ppc1p3n7').val('');
            $('#ppc1p3n3').val('98');
            $('#ppc1p3n31').val('98');
            $('#valorultimogrado').val('98');
            $('#valorppc1p3n4').val('98');
         }
        else
        {
            
        }
    validarbolitasytextoppc1p3n2(divcampo,campoval);
}
function deschequeo()
{
           // //alert('deschequeo');
            $('#ppc1p3n2grado1').prop('checked',false);
            $('#ppc1p3n2grado2').prop('checked',false);
            $('#ppc1p3n2grado3').prop('checked',false);
            $('#ppc1p3n2grado4').prop('checked',false);
            $('#ppc1p3n2grado5').prop('checked',false);
            $('#ppc1p3n2grado6').prop('checked',false);
            $('#ppc1p3n2grado7').prop('checked',false);
            $('#ppc1p3n2grado8').prop('checked',false);
            $('#ppc1p3n2grado9').prop('checked',false);
            $('#ppc1p3n2grado10').prop('checked',false);
            $('#ppc1p3n2grado11').prop('checked',false);
            $('#ppc1p3n2grado12').prop('checked',false);
            $('#ppc1p3n2grado13').prop('checked',false);
            
            $('#ppc1p3n4a').prop('checked',false);
            $('#ppc1p3n4b').prop('checked',false);
            $('#ppc1p3n4c').prop('checked',false);
           
} 
//de aca para arriba es logica de bolas y textos
function validarcampotexcuadros(div,campo,ncampos)
{
    validarbolitasytextoppc1p3n2(div,campo);
    validarcuadrosppc1p3n2(div,ncampos);
} 
    
 function validarguardarppc1p3n2()
{
   ////alert($('.has-error').length);
   if($('.has-error').length === 0)
   {
     //  //alert('==0');
       $('#guardar').prop('disabled', false);
       $('#actualizar').prop('disabled', false);
       $('#cancelar').prop('disabled', false);
       $('#anterior').prop('disabled', true);
       $('#siguiente').prop('disabled', true);       
   }
   else
   {
       ////alert('<>0');
       $('#guardar').prop('disabled', true);
       $('#actualizar').prop('disabled', true);
       $('#cancelar').prop('disabled', true);
       $('#anterior').prop('disabled', false);
       $('#siguiente').prop('disabled', true);
   }
   
}

//validar bolitas y texto
function validarbolitasytextoppc1p3n2(div,campo)
{ ////alert(div + ' juanpis ' + campo);
   if(($('#'+ campo).val() == '') || ($('#'+ campo).val() == '0'))
   { 
       $('#' + div).addClass(' has-error');
   }
   else
   { 
       $('#' + div).removeClass('has-error');
   }
    validarguardarppc1p3n2();
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
                          vvalorppc1p3n2 : $('#valorppc1p3n2').val(),
                          vppc1p3n5institucion : $('#ppc1p3n5institucion').val(),
                          vppc1p3n5area : $('#areacono').val(),
                          vppc1p3n6 : $('#ppc1p3n6').val(),
                          vppc1p3n7 : $('#ppc1p3n7').val()},    
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
                          vvalorppc1p3n2 : $('#valorppc1p3n2').val(),
                          vppc1p3n5institucion : $('#ppc1p3n5institucion').val(),
                          vppc1p3n5area : $('#areacono').val(),
                          vppc1p3n6 : $('#ppc1p3n6').val(),
                          vppc1p3n7 : $('#ppc1p3n7').val()},         
                          dataType: "html",
                          success : function(obj){                      
                          botonguardar();
                          }
                        });                    
        });
        $("#siguiente").click(function ()
        {
         botonsiguiente();
         location.href = "../c_ppc1p4n1/fc_ppc1p4n1?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
        });
              
        $("#anterior").click(function ()
        {
         botonanterior();
         location.href = "../c_ppc1p3n1/fc_ppc1p3n1?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
        });
        
             
        $("#eliminar").click(function ()
        {
            //alert('elimino el creado 0000');
             $.ajax({
                          url: "fc_eliminar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),
                          vidintegrante : $('#idintegrante').val()},
                          dataType: "html",
                          success : function(obj){                      
                          location.href = "../c_ppc1p3n2o1/fc_ppc1p3n2o1?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                                      
        //botonguardarotro();
                          }
                        });     
            
            
        // botonsiguiente();
         //location.href = "../c_ppc1p4n1/fc_ppc1p4n1?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
        });
        

//para cargar variables capitulo, pregunta,encuestador,vivienda,barra



cargardatosgenerales('<?php echo($arraydatosgenerales['ecapitulo']); ?>','Pregunta 3.2 a 3.7 de 5.1','<?php echo($arraydatosgenerales['enomcoges']); ?>','<?php echo($arraydatosgenerales['enombreintegrante']." "." - "." "."Sexo:"." ".$arraydatosgenerales['esexointegrante']."   "."  -  "."   "."Edad:"."   ".$arraydatosgenerales['eedadintegrante']); ?>','60');
//control del boton ayuda
botonayuda();

});

//valir rango de el año
function validarrango(campo,canti,canti1,divcam)
{
    ////alert('f');
    if($('#' + campo).val() > canti ||$('#' + campo).val() < canti1)
    {
        $('#' + campo).val('');
        mensajito('ALERTA:','El año no puede ser mayor a ' + canti + ',ni menor a ' + canti1);
        validarbolitasytextoppc1p3n2(divcam,campo);
       
    }
    else
    {
        validarbolitasytextoppc1p3n2(divcam,campo);
    }
}

</script>
</html>