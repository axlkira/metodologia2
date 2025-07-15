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
            
            
        <?php echo($head); ?>


                <div  class="row">
                    <div class="col-md-10">
                    <h6>Folio: <small><?php echo($folio); ?></small></h6>
                    <h6>Documento Representante: <small><?php echo($tdatinte['tdoc']); ?></small></h6>
<!--                    <h6>IDintegrante: <small><?php echo($tdatinte['tidintegrante']); ?></small></h6>-->
                    <h6>Nombre Representante: <small><?php echo($tdatinte['tnombre']); ?></small></h6>
                    <br>
                    </div>
                </div>
<!--para imprimir el folio y llevarlo-->
                        <input type="text" class="form-control input-sm" id="folio" name="folio" style="display: none" placeholder="Text input" value="<?php echo($folio); ?>">
                        <input type="text" class="form-control input-sm" id="idintegrante" name="idintegrante" style="display: none" placeholder="Text input" value="<?php echo($tdatinte['tidintegrante']); ?>">
<!--fin para imprimir el folio y llevarlo-->

                <form class="form-group" name="formulario" id="formulario">
<!--incio de campos de texto-->
                    <label> INFORMACIÓN GENERAL DEL HOGAR</label><br>
                    <div class="row">
                    <div class="form-group col-md-5 form-group-sm">
                        <label for="c1p1">1 Departamento</label>
                        <input type="text" class="form-control input-sm" id="c1p1" name="c1p1" OnFocus="this.blur()" placeholder="Text input" value="Antioquia">
                    </div>
                    <div class="form-group col-md-5 form-group-sm">
                        <label for="c1p2">2 Municipio/Localidad</label>
                        <input type="text" class="form-control input-sm" id="c1p2" name="c1p2" OnFocus="this.blur()" placeholder="Text input" value="Medellin">
                    </div>    
                    </div>                    
<!--fin campo de texto-->

<!--opcion de seleccion-->
                    <div class="row">
                    <div id="c1p3div" name="c1p3div" <?php if($foexiste['ec1p3']==''){echo('class="form-group col-md-5 form-group-sm has-error"');}else{echo('class="form-group col-md-5 form-group-sm"');}?>>   
                        <label class="control-label" for="c1p3">3 Estrato</label>
                        <select class="form-control input-sm" id="c1p3" name="c1p3" onchange="validarbolitasytexto('c1p3div','c1p3');">
                            <?php if($foexiste['ec1p3']=="")
                                {
                                echo('<option value="">Seleccione una opción</option>');
                                }
                                else
                                {
                                echo('<option value="'.$foexiste['ec1p3'].'">'.$foexiste['eestadoc1p3'].'</option>');
                                }?>
                            
                            <?php echo($estratos); ?>
                        </select>
                    </div>
                    <div id="c1p4div" name="c1p4div" <?php if($foexiste['ec1p4']==''){echo('class="form-group col-md-5 form-group-sm has-error"');}else{echo('class="form-group col-md-5 form-group-sm"');}?>>   
                        <label class="control-label" for="c1p4">4 Comuna</label>
                        <select class="form-control input-sm" id="c1p4" name="c1p4" onchange="traebarrio()">
                            <?php if($foexiste['ec1p4']=="")
                                {
                                echo('<option value="">Seleccione una opción</option>');
                                }
                                else
                                {
                                echo('<option value="'.$foexiste['ec1p4'].'">'.$foexiste['ec1p4'].'</option>');
                                }?>
                            
                            <?php echo($comunas); ?>
                        </select>
                    </div>    
                    </div>
<!--fin de seleccion-->

<!--opcion de seleccion-->
                    <div class="row">
                    <div class="form-group col-md-10 form-group-sm">
                        <label for="c1p6">5 Barrio</label>
                        <select class="form-control input-sm" id="c1p5" name="c1p5" disabled="">
                            <?php if($foexiste['ec1p5']=="")
                                {
                                echo('<option value="">Seleccione una opción</option>');
                                }
                                else
                                {
                                echo('<option value="'.$foexiste['ec1p5'].'">'.$foexiste['eestadoc1p5'].'</option>');
                                }?>
                            
                            <?php echo($barrios); ?>
                        </select>
                    </div>
                    </div>
<!--fin de seleccion-->

<!--Inicio grupo c1p6 armar dirección-->
<!--opcion de seleccion-->
                    <label for="c1p6">6 Dirección de la vivienda</label>
                    <div class="row">
                    <div class="form-group col-md-2 form-group-sm">    
                    <!--<div id="c1p6adiv" name="c1p6adiv" <?php if($foexiste['ec1p6']==''){echo('class="form-group col-md-2 form-group-sm has-error"');}else{echo('class="form-group col-md-2 form-group-sm"');}?>>-->   
                    <select class="form-control input-sm" id="c1p6a" name="c1p6a" onchange="llenarotrocampo();">
                            <option value="">Seleccione una opción</option>    
                            <option value="CL">Calle</option>
                            <option value="CR">Carrera</option>
                            <option value="AV">Avenida</option>
                            <option value="KLM">Kilómetro</option>
                            <option value="CI">Circular</option>
                            <option value="DI">Diagonal</option>
                    </select> 
                    </div>
                            <div class="form-group col-md-1 form-group-sm">
                            <label> </label>
                            </div>
                    <div class="form-group col-md-1 form-group-sm">
                    <!--<div id="c1p6bdiv" name="c1p6bdiv" <?php if($foexiste['ec1p6']==''){echo('class="form-group col-md-1 form-group-sm has-error"');}else{echo('class="form-group col-md-1 form-group-sm"');}?>>-->   
                    <input type="text" class="form-control input-sm" id="c1p6b" name="c1p6b" onkeyup="llenarotrocampo();" onKeyPress="return soloNumeros(event)" maxlength="4" placeholder="" value="">
                    </div>
                        
                    <div class="form-group col-md-1 form-group-sm">
                    <input type="text" class="form-control input-sm" id="c1p6c" name="c1p6c" onkeyup="llenarotrocampo();" onKeyPress="return soloLetras(event)" maxlength="4" placeholder="" value="">
                    </div>
                    </div>
                    
                    <div class="row">
                    <div class="form-group col-md-2 form-group-sm">
                    <select class="form-control input-sm" id="c1p6d" name="c1p6d" onchange="llenarotrocampo();">
                            <option value="">Seleccione una opción</option>
                            <option value="Norte">Norte</option>
                            <option value="Sur">Sur</option>
                            <option value="Este">Este</option>
                            <option value="Oeste">Oeste</option>
                    </select> 
                    </div>
                    
                    <div class="form-group col-md-1 form-group-sm">
                    <label>#</label>
                    </div>
                    
                    <div class="form-group col-md-1 form-group-sm">    
                    <!--<div id="c1p6ediv" name="c1p6ediv" <?php if($foexiste['ec1p6']==''){echo('class="form-group col-md-1 form-group-sm has-error"');}else{echo('class="form-group col-md-1 form-group-sm"');}?>>-->   
                    <input type="text" class="form-control input-sm" id="c1p6e" name="c1p6e" onkeyup="llenarotrocampo();" onKeyPress="return soloNumeros(event)" maxlength="4" placeholder="" value="">
                    </div>
                        
                    <div class="form-group col-md-1 form-group-sm">
                    <input type="text" class="form-control input-sm" id="c1p6f" name="c1p6f" onkeyup="llenarotrocampo();" onKeyPress="return soloLetras(event)" maxlength="4" placeholder="" value="">
                    </div>
                    </div>
                    
                    <div class="row">
                    <div class="form-group col-md-2 form-group-sm">
                    <select class="form-control input-sm" id="c1p6g" name="c1p6g" onchange="llenarotrocampo();">
                            <option value="">Seleccione una opción</option>
                            <option value="Norte">Norte</option>
                            <option value="Sur">Sur</option>
                            <option value="Este">Este</option>
                            <option value="Oeste">Oeste</option>
                    </select> 
                    </div>
                        
                    <div class="form-group col-md-1 form-group-sm">
                    <label>-</label>
                    </div>
                    
                    <div class="form-group col-md-1 form-group-sm">    
                    <!--<div id="c1p6hdiv" name="c1p6hdiv" <?php if($foexiste['ec1p6']==''){echo('class="form-group col-md-1 form-group-sm has-error"');}else{echo('class="form-group col-md-1 form-group-sm"');}?>>-->   
                    <input type="text" class="form-control input-sm" id="c1p6h" name="c1p6h" onkeyup="llenarotrocampo();" onKeyPress="return soloNumeros(event)" maxlength="4" placeholder="" value="">
                    </div>
                    
                    <div class="form-group col-md-1 form-group-sm">
                    <input type="text" class="form-control input-sm" id="c1p6i" name="c1p6i" onkeyup="llenarotrocampo();" onKeyPress="return soloNumeros(event)" maxlength="4" placeholder="Interior" value="">
                    </div>
                    
                    <div class="form-group col-md-5 form-group-sm">
                    <input type="text" class="form-control input-sm" id="c1p6j" name="c1p6j" onkeyup="llenarotrocampo();" onKeyPress="return soloLetras(event)" placeholder="Observación" value="">
                    </div>    
                    </div>
<!--fin de seleccion-->
<!--incio de campo de texto-->
                    <div class="row">
                    <div id="c1p6div" name="c1p6div" <?php if($foexiste['ec1p6']==''){echo('class="form-group col-md-10 form-group-sm has-error"');}else{echo('class="form-group col-md-10 form-group-sm"');}?>>   
                        <input type="text" class="form-control input-sm" id="c1p6" name="c1p6" placeholder="Dirección" DISABLED="" value="<?php echo($foexiste['ec1p6']); ?>">
                    </div>
                    </div>                    
<!--fin campo de texto-->
<!--Fin grupo c1p6 armar dirección-->

<!--incio de campos de texto-->
                    <div class="row">
                    <div id="c1p7div" name="c1p7div" <?php if($foexiste['ec1p7']==''){echo('class="form-group col-md-5 form-group-sm has-error"');}else{echo('class="form-group col-md-5 form-group-sm"');}?>>   
                        <label class="control-label" for="c1p7">7 Teléfono fijo</label>
                        <input type="text" class="form-control input-sm" id="c1p7" name="c1p7" onKeyPress="return soloNumeros(event)" onblur="validarcantdigitos('c1p7',7,'c1p7div')" placeholder="Text input" value="<?php echo($foexiste['ec1p7']); ?>">
                    </div>
                    <div id="c1p8div" name="c1p8div" <?php if($foexiste['ec1p8']==''){echo('class="form-group col-md-5 form-group-sm has-error"');}else{echo('class="form-group col-md-5 form-group-sm"');}?>>   
                        <label class="control-label" for="c1p8">8 Teléfono celular</label>
                        <input type="text" class="form-control input-sm" id="c1p8" name="c1p8" onKeyPress="return soloNumeros(event)" onblur="validarcantdigitos('c1p8',10,'c1p8div')" placeholder="Text input" value="<?php echo($foexiste['ec1p8']); ?>">
                    </div>    
                    </div>                    
<!--fin campo de texto-->

<!--incio de campos de texto-->
                    <div class="row"><!--
                    <div id="c1p9div" name="c1p9div" <?php if($foexiste['ec1p9']==''){echo('class="form-group col-md-5 form-group-sm has-error"');}else{echo('class="form-group col-md-5 form-group-sm"');}?>>   
                        <label class="control-label" for="c1p9">9 Nombre de un contacto</label>
                        <input type="text" class="form-control input-sm" id="c1p9" name="c1p9" onKeyPress="return soloLetras(event)" onchange="validarbolitasytexto('c1p9div','c1p9');" placeholder="Text input" value="<?php echo($foexiste['ec1p9']); ?>">
                    </div>
                    
-->                    <div id="c1p10div" name="c1p10div" <?php if($foexiste['ec1p10']==''){echo('class="form-group col-md-3 form-group-sm has-error"');}else{echo('class="form-group col-md-3 form-group-sm"');}?>>   
                        <label class="control-label" for="c1p10">10 Parentesco o relación del contacto</label>
                        <select class="form-control input-sm" id="c1p10" name="c1p10" onchange="validarbolitasytexto('c1p10div','c1p10');">
                            <?php if($foexiste['ec1p10']=="")
                                {
                                echo('<option value="">Seleccione una opción</option>');
                                }
                                else
                                {
                                echo('<option value="'.$foexiste['ec1p10'].'">'.$foexiste['eestadoc1p10'].'</option>');
                                }?>
                            
                            <?php echo($relcont); ?>
                        </select>
                    </div>    <!--
                        
                        
                    <div id="c1p11div" name="c1p11div" <?php if($foexiste['ec1p11']==''){echo('class="form-group col-md-2 form-group-sm has-error"');}else{echo('class="form-group col-md-2 form-group-sm"');}?>>   
                        <label class="control-label" for="c1p11">11 Teléfono del contacto</label>
                        <input type="text" class="form-control input-sm" id="c1p11" name="c1p11" onKeyPress="return soloNumeros(event)"  onblur="validarcantdigitos('c1p11',7,'c1p11div')" placeholder="Text input" value="<?php echo($foexiste['ec1p11']); ?>">
                    </div>    
-->                    </div>                    <!--
fin campo de texto

incio de campo de texto
                    <div class="row">
                        
                    <div id="c1p11adiv" name="c1p11adiv" <?php if($foexiste['ec1p11a']==''){echo('class="form-group col-md-5 form-group-sm has-error"');}else{echo('class="form-group col-md-5 form-group-sm"');}?>>   
                        <label class="control-label" for="c1p11a">11a Celular del contacto</label>
                        <input type="text" class="form-control input-sm" id="c1p11a" name="c1p11a" onKeyPress="return soloNumeros(event)"  onblur="validarcantdigitos('c1p11a',10,'c1p11adiv')" placeholder="Text input" value="<?php echo($foexiste['ec1p11a']); ?>">
                    </div>    
                        
                    <div id="c1p12div" name="c1p12div" <?php if($foexiste['ec1p12']==''){echo('class="form-group col-md-5 form-group-sm has-error"');}else{echo('class="form-group col-md-5 form-group-sm"');}?>>   
                        <label class="control-label" for="c1p12">12 Persona responsable que brinda la información</label>
                        <input type="text" class="form-control input-sm" id="c1p12" name="c1p12" onKeyPress="return soloLetras(event)" onchange="validarbolitasytexto('c1p12div','c1p12');" placeholder="Text input" value="<?php echo($foexiste['ec1p12']); ?>">
                    </div>
                    </div>                    -->
<!--fin campo de texto-->

<!--inicio botonera guardar y actualizar NO SE TOCA-->

                            <?php if($foexiste['efolio']=="")//NO SE TOCA bonotes si es nuevo folio
                                {
                                echo($botonerag);
                                }
                                else
                                {
                                echo($botoneraa);//NO SE TOCA bonotes si es para actualizar folio
                                }?>   

<!--Fin botonera guardar y actualizar NO TOCAR-->

                </form>
<!--INICIO Este es el footer NO TOCAR-->
            <?php echo($foot); ?>
<!--fin del footer NO TOCAR-->
</div>
<!--INICIO ENLACES - NO TOCAR-->
        <script src="<?php echo BOOTSTRAP, 'js/jquery-1.11.0.js' ?>"></script>
        <script src="<?php echo BOOTSTRAP, 'js/bootstrap.min.js' ?>"></script>
        <script src="<?php echo BOOTSTRAP, 'js/jquery.bootstrap.wizard.js' ?>"></script>
        <script src="<?php echo BOOTSTRAP, 'js/prettify.js' ?>"></script>
        <script src="<?php echo JBOX, 'Source/jBox.min.js' ?>"></script>
        <link href="<?php echo JBOX, 'Source/jBox.css' ?>" rel="stylesheet">
<!--FIN ENLACES - NO TOCAR-->
    </body>


<script> 
//habilitar boton guardar
function validarguardar()
{
  //alert($('.has-error').length);
  if($('.has-error').length === 0)
  {
      $('#guardar').prop('disabled', false);
      $('#actualizar').prop('disabled', false);
      $('#cerrar').prop('disabled', false);
  }
  else
  {
      $('#guardar').prop('disabled', true);
      //$('#actualizar').prop('disabled', true);
      $('#cerrar').prop('disabled', true);
  }
  
  
}

//validar bolitas

function validarbolitasytexto(div,campo)
{ 
   if(($('#'+ campo).val() === '') || ($('#'+ campo).val() === '0') || ($('#'+ campo).val() === '   #  -  | ') ) 
  { 
      $('#' + div).removeClass('form-group col-md-10 form-group-sm');
      $('#' + div).addClass('form-group col-md-10 form-group-sm has-error');
  }
  else
  { 
      $('#' + div).removeClass('form-group col-md-10 form-group-sm has-error');
      $('#' + div).addClass('form-group col-md-10 form-group-sm');       
  }
   validarguardar();   
}
// Fin validar bolitas 



//VALIDACIOND DE CANTIDAD DE DIGITOS
    function validarcantdigitos(campo,canti,divcam)
{
    
    if($('#' + campo).val().length !== canti)
    {
        $('#' + campo).val('');
        okcantidaddigitos(canti);
        $('#' + campo).focus();
        validarbolitasytexto(divcam,campo);
    }
    else
    {
        validarbolitasytexto(divcam,campo);
    }
}
//esta es la caja para mostar el mensaje de numero de caracteres
    function okcantidaddigitos(canti)
    {
    new jBox('Notice', {
        content: 'Solo aceptan ' + canti +'  digitos!!! vuelve a digitar',
        color: 'black',
        animation: {open: 'tada', close: 'flip'},
        position: {x: 'right', y: 'center'},
        autoClose: 2000
    });
    }
//FIN VALIDACIOND DE CANTIDAD DE DIGITOS....

//VALIDACIOND DE NUMEROS Y LETRAS
//SE DEBE COLOCAR ESTO EN EL CAMPO PARA QUE FUNCIONE onKeyPress="return soloNumeros(event)"
function soloNumeros(e) 
{ 
//    alert(e);
var key = window.Event ? e.which : e.keyCode 
if ((key >= 48 && key <= 57) || (key==8)){}
else
{
   okletrasnum('Ingresa solo numeros!!!');
}
return ((key >= 48 && key <= 57) || (key==8)) 
}

//SE DEBE COLOCAR ESTO EN EL CAMPO PARA QUE FUNCIONE onKeyPress="return soloLetras(event)"
function soloLetras(e) 
{ 
//    alert(e);
var key = window.Event ? e.which : e.keyCode

if ((key >= 65 && key <= 90) || (key==8) || (key==32)){}
else
{
   okletrasnum('Ingresa solo letras mayusculas!!!');
}

return ((key >= 65 && key <= 90) || (key==8) || (key==32)) 
}

    //NO TOCAR funcion qmostrar el mensaje de letras o numeros    
    function okletrasnum(mensaje)
    {
    new jBox('Notice', {
        content: mensaje,
        color: 'black',
        animation: {open: 'tada', close: 'flip'},
        position: {x: 'right', y: 'center'},
        autoClose: 2000
    });
    }

 //FIN DE VALIDACION NUMEROS Y LETRAS
    
    function traebarrio()
    {
        validarbolitasytexto('c1p4div','c1p4')
        //alert($('#c1p4').val());
            
                $.ajax({
                  url: "fc_traerbarrios",
                  type: "GET",
                  data: {vidcomuna : $('#c1p4').val()},
                  dataType: "html",
                  success : function(obj){                      
                      $('#c1p5').html(obj);
                  }
                });
                
             $('#c1p5').prop('disabled', false);   
    }
///////////////////////////////////////Funciones para opcion multiple o unica////////////////////////////////////////////////////////////////////////    
    function llenarotrocampo()
    {
        //validarbolitasytexto('c1p6adiv','c1p6a')
        //validarbolitasytexto('c1p6bdiv','c1p6b')
        //validarbolitasytexto('c1p6ediv','c1p6e')
        //validarbolitasytexto('c1p6hdiv','c1p6h')
        //alert('text');
        $('#c1p6').val($('#c1p6a').val() + " " + $('#c1p6b').val() + " " + $('#c1p6c').val()+ " " + $('#c1p6d').val()+ "#" + $('#c1p6e').val()+ " " + $('#c1p6f').val()+ " " + $('#c1p6g').val()+ "-" + $('#c1p6h').val()+ " " + $('#c1p6i').val()+ " | " + $('#c1p6j').val());
       validarbolitasytexto('c1p6div','c1p6') 
    }

//esta funcion nos permite guardar el valor de una opcion de seleccion multiple
    function cambiarsinoc5p3(campo)
    {
        //alert(campo);
        if($('#' + campo).val() === 'no')
        {
            $('#' + campo).val('si');
        }
        else
        {
            $('#' + campo).val('no');
        }
        validarguardar()
        //alert($('#' + campo).val());
    }
    //fin funcion nos permite guardar el valor de una opcion de seleccion multiple
    
    
///////////////////////////////////////FIN Funciones para opcion multiple o unica////////////////////////////////////////////////////////////////////////    
    
///////////////////////////////////////FIN Funciones que llaman a los mensajitos para guardar y actualizar////////////////////////////////////////////////////////////////////////    
    //NO TOCAR funcion que generar el mensaje de guardado    
    function okguardar()
    {
    new jBox('Notice', {
        content: 'Tu informacion se Guardado!!!',
        color: 'red',
        animation: {open: 'tada', close: 'flip'},
        position: {x: 'right', y: 'center'},
        autoClose: 2000
    });
    }
    //fin funcion que generar el mensaje de guardado

    //NO TOCAR funcion que generar el mensaje de actualizar    
    function okactualizar()
    {
    new jBox('Notice', {
        content: 'Tu informacion se Actualizo!!!',
        color: 'red',
        animation: {open: 'tada', close: 'flip'},
        position: {x: 'right', y: 'center'},
        autoClose: 2000
    });
    }
    //fin funcion que generar el mensaje de guardado
///////////////////////////////////////FIN Funciones que llaman a los mensajitos para guardar y actualizar////////////////////////////////////////////////////////////////////////    

///////////////////////////////////////Funciones que llaman al controlador para guardar y actualizar////////////////////////////////////////////////////////////////////////    
    $(document).ready(function()
    {
                //esta funcion es para guardar
                $("#guardar").click(function ()
                {
                   // alert('text');
                        $.ajax({
                          url: "fc_insertar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(), vc1p1: $('#c1p1').val(), vc1p2: $('#c1p2').val(), vc1p3: $('#c1p3').val(), vc1p4: $('#c1p4').val(), vc1p5: $('#c1p5').val(), vc1p6: $('#c1p6').val(), vc1p7: $('#c1p7').val(),vc1p8: $('#c1p8').val(),vc1p9: $('#c1p9').val(),vc1p10: $('#c1p10').val(),vc1p11: $('#c1p11').val(),vc1p11a: $('#c1p11a').val(),vc1p12: $('#c1p12').val()},
                          dataType: "html",
                          success : function(obj){                      
                          okguardar();//me llama el mensajito de guardar
                            //$('#datos').html(obj);
                          //location.reload();
                        $('#cerrar').show(1000);  
                        $('#actualizar').show(1000);
                        $('#guardar').hide(1000);
                          }
                        });                    
                });
                //fin de la funcion guardar
                //
                //esta funcion es para actualizar
                $("#actualizar").click(function ()
                {
                   // alert('juapis');
                        $.ajax({
                          url: "fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(), vidintegrante : $('#idintegrante').val(), vc1p1: $('#c1p1').val(), vc1p2: $('#c1p2').val(), vc1p3: $('#c1p3').val(), vc1p4: $('#c1p4').val(), vc1p5: $('#c1p5').val(), vc1p6: $('#c1p6').val(), vc1p7: $('#c1p7').val(),vc1p8: $('#c1p8').val(),vc1p9: $('#c1p9').val(),vc1p10: $('#c1p10').val(),vc1p11: $('#c1p11').val(),vc1p11a: $('#c1p11a').val(),vc1p12: $('#c1p12').val()},
                          dataType: "html",
                          success : function(obj){                      
                          okactualizar();//me llama el mensajito de actualizar
                            //$('#datos').html(obj);
                          }
                        });                    
                });
                //fin de la funcion actualizar

                $("#cerrar").click(function()
                {
                   // alert('juapis');
                        $.ajax({
                          url: "fc_cerrarcapitulo",
                          type: "GET",
                          data: {vfolio: $('#folio').val(), close: 1},
                          dataType: "html",
                          success: function(obj) {
                          //me llama el mensajito de actualizar
                          //$('#datos').html(obj);
                        location.href = "../c_capituloshogar/fc_capituloshogar?folio="+ $('#folio').val() +"&idintegrante="+$('#idintegrante').val();                  
                        }
                       });
                                            });
                
                
                
                
                
                
                

                //esta funcion es para siguiente
                //si las preguntas son por hogar mandar idintegrante en 0
                $("#siguiente").click(function ()
                {
                   // alert('juapis');
                 location.href = "../c_c13p2/fc_c13p2?folio="+ $('#folio').val() +"&idintegrante="+$('#idintegrante').val();
                    
                });
                //fin de la funcion siguiente
                
                //esta funcion es para atras
                //si las preguntas son por hogar mandar idintegrante en 0                
                $("#anterior").click(function ()
                {
                   // alert('juapis');
                location.href = "../c_capituloshogar/fc_capituloshogar?folio="+ $('#folio').val() +"&idintegrante="+$('#idintegrante').val();                  
                });
                //fin de la funcion atras
                
               //NO TOCAR - voler a capitulos                
                $("#capitulos").click(function ()
                {
                   // alert('juapis');
                location.href = "../c_capituloshogar/fc_capituloshogar?folio="+ $('#folio').val() +"&idintegrante="+$('#idintegrante').val();                  
                });
                //fin voler a capitulos                      
                                    
    });
    
cargardatosgenerales('<?php echo($arraydatosgenerales['ecapitulo']); ?>','Pregunta 1 de 22','<?php echo($arraydatosgenerales['enomcoges']); ?>','<?php echo($arraydatosgenerales['etitular']); ?>','30');
//control del boton ayuda
/////////////////////////////////////// FIN Funciones que llaman al controlador para guardar y actualizar////////////////////////////////////////////////////////////////////////        
</script>
</html>