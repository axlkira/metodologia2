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
        <div class="row">
        <!--   inicio pregunta 4.1 con sus opciones   -->
<!--inicio radio una sola seleccion pregunta 4.1-->
            <div id="ppc1p4n1estudiosmostrar" name="ppc1p4n1estudiosmostrar">       
            <div id="ppc1p4n1estudiosdiv" name="ppc1p4n1estudiosdiv" <?php if($arrayrespuestas['eppc1p4n1estudio']==''||$arrayrespuestas['eppc1p4n1estudio']=='98'){echo('class="form-group form-group-sm has-error"');}else{echo('class="form-group  form-group-sm"');}?>>   
                <label class="control-label">AGREGAR OTRO TÍTULO OBTENIDO (NUMERO 2)</label>
                <div class="radio">
                    <label><!--en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="ppc1p4n1estudios" id="ppc1p4n1estudios" onclick="colocaropcionppc1p4n1('ppc1p4n1o1','valorppc1p4n1estudio','ppc1p4n1estudiosdiv');" value="ppc1p4n1o1" <?php if($arrayrespuestas['eppc1p4n1estudio']=='ppc1p4n1o1'){echo('checked');}?>>
                        DIPLOMADOS
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="ppc1p4n1estudios" id="ppc1p4n1estudios1" onclick="colocaropcionppc1p4n1('ppc1p4n1o2','valorppc1p4n1estudio','ppc1p4n1estudiosdiv');" value="ppc1p4n1o2" <?php if($arrayrespuestas['eppc1p4n1estudio']=='ppc1p4n1o2'){echo('checked');}?>>
                        SEMINARIOS
                    </label>             
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="ppc1p4n1estudios" id="ppc1p4n1estudios2" onclick="colocaropcionppc1p4n1('ppc1p4n1o3','valorppc1p4n1estudio','ppc1p4n1estudiosdiv');" value="ppc1p4n1o3" <?php if($arrayrespuestas['eppc1p4n1estudio']=='ppc1p4n1o3'){echo('checked');}?>>
                        CURSOS
                    </label>             
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="ppc1p4n1estudios" id="ppc1p4n1estudios3" onclick="colocaropcionppc1p4n1('ppc1p4n1o4','valorppc1p4n1estudio','ppc1p4n1estudiosdiv');" value="ppc1p4n1o4" <?php if($arrayrespuestas['eppc1p4n1estudio']=='ppc1p4n1o4'){echo('checked');}?>>
                        TALLER
                    </label>             
                </div>
                <input type="text" class="form-control" id="valorppc1p4n1estudio" name="valorppc1p4n1estudio" style="display:none" placeholder="Text input" value="<?php echo($arrayrespuestas['eppc1p4n1estudio']); ?>">
                </div>
            </div>
                <!--   fin pregunta 4.1   -->   
                <!--inicio texto pregunta 4.2-->
        <div id="ppc1p4n2mostrar" name="ppc1p4n2mostrar">       
        <div id="ppc1p4n2div" name="ppc1p4n2div" <?php if($arrayrespuestas['eppc1p4n2']==''||$arrayrespuestas['eppc1p4n2']=='98'){echo('class="form-group col-md-5 form-group-sm has-error"');}else{echo('class="form-group col-md-5 form-group-sm"');}?>>   
        <label class="control-label">4.2 TÍTULO OBTENIDO</label><br>&nbsp;&nbsp;&nbsp; 
        <div class="radio">
                    <label><!--en este caso se manda a la fincion javascript el valor del campo-->
                    <input type="text" class="form-control" id="ppc1p4n2" name="ppc1p4n2" size="100" onKeyPress="return soloLetras(event)" onchange="validarbolitasytextoppc1p4n1('ppc1p4n2div','ppc1p4n2')" placeholder="Titulo obtenido" value="<?php echo($arrayrespuestas['eppc1p4n2']); ?>">
                    </label>
        </div>
        </div>
            
        <div id="ppc1p4n3div" name="ppc1p4n3div" <?php if($arrayrespuestas['eppc1p4n3']==''){echo('class="form-group col-md-5 form-group-sm has-error"');}else{echo('class="form-group col-md-5 form-group-sm"');}?>>   
            <label class="control-label">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4.3 DURACIÓN EN HORAS</label><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <div class="radio">
                    <label><!--en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="text" class="form-control" id="ppc1p4n3" name="ppc1p4n3" size="100" onKeyPress="return soloNumeros(event)" onchange="validarrango('ppc1p4n3',999,1,'ppc1p4n3div')" maxlength="3" placeholder="HORAS" value="<?php echo($arrayrespuestas['eppc1p4n3']); ?>">
                    </label>
        </div>
        </div>
        </div>
        <!--Fin texto pregunta 4.3-->    
        <!--inicio texto pregunta 4.4-->
        <div id="ppc1p4n4mostrar" name="ppc1p4n4mostrar" >       
        <div id="ppc1p4n4div" name="ppc1p4n4div" <?php if($arrayrespuestas['eppc1p4n4']==''||$arrayrespuestas['eppc1p4n4']=='98'){echo('class="form-group col-md-5 form-group-sm has-error"');}else{echo('class="form-group col-md-5 form-group-sm"');}?>>   
        <label class="control-label">4.4 INSTITUCIÓN</label><br>&nbsp;&nbsp;&nbsp; 
        <div class="radio">
                    <label><!--en este caso se manda a la fincion javascript el valor del campo-->
                    <input type="text" class="form-control" id="ppc1p4n4" name="ppc1p4n4" size="100" onKeyPress="return soloLetras(event)" onchange="validarbolitasytextoppc1p4n1('ppc1p4n4div','ppc1p4n4')" placeholder="INSTITUCION" value="<?php echo($arrayrespuestas['eppc1p4n4']); ?>">
                    </label>
        </div>
        </div>
            
        <div id="ppc1p4n5div" name="ppc1p4n5div" <?php if($arrayrespuestas['eppc1p4n5']==''){echo('class="form-group col-md-5 form-group-sm has-error"');}else{echo('class="form-group col-md-5 form-group-sm"');}?>>   
            <label class="control-label">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4.5 AÑO DE EGRESO</label><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <div class="radio">
                    <label><!--en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="text" class="form-control" id="ppc1p4n5" name="ppc1p4n5" size="100" onKeyPress="return soloNumeros(event)" onchange="validarrango('ppc1p4n5',<?php echo($actuaA); ?>,1965,'ppc1p4n5div')" maxlength="4" placeholder="AÑO EGRESO" value="<?php echo($arrayrespuestas['eppc1p4n5']); ?>">
                    </label>
        </div>
        </div>
        </div>
        <!--fin texto pregunta 4.4--> 
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
            <?php if($arrayrespuestas['eppc1p4n1estudio']=="")
            {
                echo($botoneragotro1);
            }
            else
            {
                echo($botoneraaotro1);
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

function colocaropcionppc1p4n1(opcion,campoval,divcampo)
{
    //////////alert(opcion);
    $('#' + campoval).val(opcion);
        
    validarbolitasytextoppc1p4n1(divcampo,campoval);
}
//de aca para arriba es logica de bolas y textos
function validarcampotexcuadrosppc1p4n1(div,campo,ncampos)
{
    validarbolitasytextoppc1p4n1(div,campo);
    validarcuadrosppc1p4n1(div,ncampos);
} 
    
 function validarguardarppc1p4n1()
{
   //////////alert($('.has-error').length);
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
function validarbolitasytextoppc1p4n1(div,campo)
{ //////////alert(div + ' juanpis ' + campo);
   if(($('#'+ campo).val() == '') || ($('#'+ campo).val() == '0'))
   { 
       $('#' + div).addClass(' has-error');
   }
   else
   { 
       $('#' + div).removeClass('has-error');
   }
    validarguardarppc1p4n1();
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
                          vvalorppc1p4n1estudio : $('#valorppc1p4n1estudio').val(),
                          vppc1p4n2 : $('#ppc1p4n2').val(),
                          vppc1p4n3 : $('#ppc1p4n3').val(),
                          vppc1p4n4 : $('#ppc1p4n4').val(),
                          vppc1p4n5 : $('#ppc1p4n5').val()},         
                          dataType: "html",
                          success : function(obj){                      
                          botonguardarotro1();
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
                          vvalorppc1p4n1estudio : $('#valorppc1p4n1estudio').val(),
                          vppc1p4n2 : $('#ppc1p4n2').val(),
                          vppc1p4n3 : $('#ppc1p4n3').val(),
                          vppc1p4n4 : $('#ppc1p4n4').val(),
                          vppc1p4n5 : $('#ppc1p4n5').val()},         
                          dataType: "html",
                          success : function(obj){                      
                          botonactualizarotro1();
                          }
                        });                    
        });
        $("#siguiente").click(function ()
        {
         botonsiguiente();
         location.href = "../c_ppc1p4n6/fc_ppc1p4n6?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
//        if($('#valorppc1p4n1').val() === 'ppc1p4n1o1' || $('#valorppc1p4n1').val() === 'ppc1p4n1o14' || $('#valorppc1p4n1').val() === 'ppc1p4n1o2' || $('#valorppc1p4n1').val() === 'ppc1p4n1o3' || $('#valorppc1p4n1').val() === 'ppc1p4n1o4' || 
//           $('#valorppc1p4n1').val() === 'ppc1p4n1o6' || $('#valorppc1p4n1').val() === 'ppc1p4n1o8' || $('#valorppc1p4n1').val() === 'ppc1p4n1o10' || $('#valorppc1p4n1').val() === 'ppc1p4n1o12')
//           {                $.ajax({
//                            url: "../c_c8p3/fc_actualizar",
//                            type: "GET",
//                            data: {vfolio : $('#folio').val(),
//                            vidintegrante : $('#idintegrante').val(),
//                            vc8p3 : '98'},
//                            dataType: "html",
//                            success : function(obj)
//                            {
//                            location.href = "../c_ppc1p4n1/fc_ppc1p4n1?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
//                            }
//                           });
//                           
//           }
//           else if (($('#valorppc1p4n1').val() === 'ppc1p4n1o5' && $('#c8p3').val() === '98')||
//                    ($('#valorppc1p4n1').val() === 'ppc1p4n1o7' && $('#c8p3').val() === '98') ||
//                    ($('#valorppc1p4n1').val() === 'ppc1p4n1o9' && $('#c8p3').val() === '98') ||
//                    ($('#valorppc1p4n1').val() === 'ppc1p4n1o11' && $('#c8p3').val() === '98')||
//                    ($('#valorppc1p4n1').val() === 'ppc1p4n1o13' && $('#c8p3').val() === '98'))
//                 {
//                    $.ajax({
//                            url: "../c_c8p3/fc_actualizar",
//                            type: "GET",
//                            data: {vfolio : $('#folio').val(),
//                            vidintegrante : $('#idintegrante').val(),
//                            vc8p3 : ''},
//                            dataType: "html",
//                            success : function(obj)
//                            {
//                            location.href = "../c_ppc1p4n1/fc_ppc1p4n1?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
//                            }
//                           });
//                 }
//                 else{
//                     location.href = "../c_ppc1p4n1/fc_ppc1p4n1?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
//                 }
        });
              
        $("#anterior").click(function ()
        {
         botonanterior();
         location.href = "../c_ppc1p3n2/fc_ppc1p3n2?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
        });
        
        $("#eliminar").click(function ()
        {
            ////////alert('elimino el creado');
             $.ajax({
                          url: "fc_eliminar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),
                          vidintegrante : $('#idintegrante').val()},
                          dataType: "html",
                          success : function(obj){                      
                          location.href = "../c_ppc1p4n1/fc_ppc1p4n1?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                                      
        //botonguardarotro();
                          }
                        });     
            
            
        // botonsiguiente();
         //location.href = "../c_ppc1p4n1/fc_ppc1p4n1?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
        });
        
           $("#otro1").click(function ()
        {
            ////////alert('INSERTAR EL ULTIMO');
             $.ajax({
                          url: "fc_insertarotro1",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),
                          vidintegrante : $('#idintegrante').val()},
                          dataType: "html",
                          success : function(obj){                      
                          location.href = "../c_ppc1p4n1o2/fc_ppc1p4n1o2?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                                      
        //botonguardarotro();
                          }
                        });     
            
            
        // botonsiguiente();
         //location.href = "../c_ppc1p4n1/fc_ppc1p4n1?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
        });

//para cargar variables capitulo, pregunta,encuestador,vivienda,barra



cargardatosgenerales('<?php echo($arraydatosgenerales['ecapitulo']); ?>','Pregunta 4.1 a 4.5 de 5.1','<?php echo($arraydatosgenerales['enomcoges']); ?>','<?php echo($arraydatosgenerales['enombreintegrante']." "." - "." "."Sexo:"." ".$arraydatosgenerales['esexointegrante']."   "."  -  "."   "."Edad:"."   ".$arraydatosgenerales['eedadintegrante']); ?>','72');
//control del boton ayuda
botonayuda();

});
//valir rango de el año
function validarrango(campo,canti,canti1,divcam)
{
    //////////alert('f');
    if($('#' + campo).val() > canti ||$('#' + campo).val() < canti1)
    {
        $('#' + campo).val('');
        mensajito('ALERTA:','El año no puede ser mayor a ' + canti + ',ni menor a ' + canti1);
        validarbolitasytextoppc1p4n1(divcam,campo);
       
    }
    else
    {
        validarbolitasytextoppc1p4n1(divcam,campo);
    }
}

</script>
</html>