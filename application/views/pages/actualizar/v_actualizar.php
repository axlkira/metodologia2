<!DOCTYPE html>
<html lang="es">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <title><?php echo $titulo ?></title>
        <link rel="stylesheet" href="<?php echo BOOTSTRAP, 'css/bootstrap1.min.css'; ?>" >
        <link rel="stylesheet" href="<?php echo BOOTSTRAP, 'css/style.css'; ?>" >
        <meta charset="utf-8">
        <meta http-equiv="Content-Language" content="es"/>
    </head>
    <body>  
        <div class="container">
        <!--head            -->
            <?php echo($head44); ?><br>
            <input type="text" class="form-control input-sm" id="doccogestor" name="doccogestor" style="display: none" placeholder="Text input" value="<?php echo($foexiste['edoccogestor']); ?>">
            <input type="text" class="form-control input-sm" id="folio" name="folio" style="display: none" placeholder="Text input" value="<?php echo($folio); ?>">
            <input type="text" class="form-control input-sm" id="idintegrante" name="idintegrante" style="display: none" placeholder="Text input" value="<?php echo($tdatinte['tidintegrante']); ?>"><br><br>
            <!-- fin head            -->
            <div  class="row col-md-10 col-md-offset-1"><br>
            <ul class="nav nav-tabs">
                <li role="presentation" class="active"><a href="#">Actualizar información general del hogar</a></li>
                <li role="presentation"><a href="../c_actualizarint/fc_actualizarint?folio=<?php echo($folio);?>&idintegrante=0&doccogestor=<?php echo($foexiste['edoccogestor']); ?>">Actualizar información general integrantes del hogar</a></li>
            </ul>
            </div><br>
            
            <form class="form-group col-md-12 col-md-offset-1" name="formulario" id="formulario"><br>
                <!--incio de campos de texto-->
                    <!--<label>Actualizar datos generales del hogar</label>--><br>
                    <div class="row">
                    <div class="form-group col-md-3 form-group-sm">
                        <label for="folio">Folio</label>
                        <input type="text" class="form-control input-sm" id="folio" disabled="" name="folio" OnFocus="this.blur()" placeholder="Text input" value="<?php echo($foexiste['efolio']); ?>">
                    </div>
                    <div class="form-group col-md-3 form-group-sm">
                        <label for="estado">Id integrante</label>
                        <input type="text" class="form-control input-sm" id="idintegrante" disabled="" name="idintegrante" OnFocus="this.blur()" placeholder="Text input" value="<?php echo($tdatinte['tidintegrante']); ?>">
                    </div>    
                    
                    <!--<div id="rephogardiv" name="rephogardiv" <?php if($foexiste['eidintegrante']==''){echo('class="form-group col-md- form-group-sm has-error"');}else{echo('class="form-group col-md-5 form-group-sm"');}?>>-->   
                    <div class="form-group col-md-4 form-group-sm" id="rephogardiv">
                        <label class="control-label" for="rephogar">Representante Hogar</label>
                        <select class="form-control input-sm" id="rephogar" name="rephogar" onchange="traemotivo();validarbolitasytexto('rephogardiv','rephogar')">
                            <?php if($foexiste['eidintegrante']=="")
                                {
                                echo('<option value="">Seleccione una opción</option>');
                                }
                                else
                                {
                                echo('<option value="'.$foexiste['eidintegrante'].'">'.$foexiste['erephogar'].'</option>');
                                }?>
                            
                            <?php echo($representante); ?>
                        </select>
                    </div>
                    <!--<div id="rephogardiv" name="rephogardiv" <?php if($foexiste['emotivo']==''){echo('class="form-group col-md-2 form-group-sm has-error"');}else{echo('class="form-group col-md-2 form-group-sm"');}?>>-->   
<!--                    <div class="form-group col-md-3 form-group-sm" name="motivodiv" id="motivodiv">
                        <label class="control-label" for="motivo">Motivo</label>
                        <select class="form-control input-sm" id="motivo" name="motivo" disabled="" onchange="validarbolitasytexto('motivodiv','motivo');">
                            <?php if($foexiste['emotivo']=="")
                                {
                                echo('<option value="">Seleccione una opción</option>');
                                }
                                else
                                {
                                echo('<option value="'.$foexiste['emotivo'].'">'.$foexiste['eestadomotivo'].'</option>');
                                }?>
                            
                            <?php echo($motivo); ?>
                        </select>
                    </div>    -->
                    </div>    
<!--opcion de seleccion-->
                    <div class="row">
                    <div id="c1p3div" name="c1p3div" <?php if($foexiste['eestrato']==''){echo('class="form-group col-md-5 form-group-sm has-error"');}else{echo('class="form-group col-md-5 form-group-sm"');}?>>   
                        <label class="control-label" for="estrato">Estrato</label>
                        <select class="form-control input-sm" id="estrato" name="estrato" onchange="validarbolitasytexto('c1p3div','estrato');">
                            <?php if($foexiste['eestrato']=="")
                                {
                                echo('<option value="">Seleccione una opción</option>');
                                }
                                else
                                {
                                echo('<option value="'.$foexiste['eestrato'].'">'.$foexiste['eestadoestrato'].'</option>');
                                }?>
                            
                            <?php echo($estratos); ?>
                        </select>
                    </div>
                    <div id="c1p4div" name="c1p4div" <?php if($foexiste['ecomuna']==''){echo('class="form-group col-md-5 form-group-sm has-error"');}else{echo('class="form-group col-md-5 form-group-sm"');}?>>   
                        <label class="control-label" for="comuna">Comuna</label>
                        <select class="form-control input-sm" id="comuna" name="comuna" onchange="traebarrio()">
                            <?php if($foexiste['ecomuna']=="")
                                {
                                echo('<option value="">Seleccione una opción</option>');
                                }
                                else
                                {
                                echo('<option value="'.$foexiste['ecomuna'].'">'.$foexiste['ecomuna'].'</option>');
                                }?>
                            
                            <?php echo($comunas); ?>
                        </select>
                    </div>    
                    </div>
<!--fin de seleccion-->
<!--opcion de seleccion-->
                    <div class="row">
                    <div class="form-group col-md-10 form-group-sm">
                        <label for="barrio">Barrio</label>
                        <select class="form-control input-sm" id="barrio" name="barrio" disabled="">
                            <?php if($foexiste['ebarrio']=="")
                                {
                                echo('<option value="">Seleccione una opción</option>');
                                }
                                else
                                {
                                echo('<option value="'.$foexiste['ebarrio'].'">'.$foexiste['eestadobarrio'].'</option>');
                                }?>
                            
                            <?php echo($barrios); ?>
                        </select>
                    </div>
                    </div><br>
<!--fin de seleccion-->
<label for="c1p6">6 Dirección de la vivienda</label>
                    <div class="row">
                    <div id="divc1p6a"<?php if($foexiste['edireccion']==''){echo('class="form-group col-md-2 form-group-sm has-error"');}else{echo('class="form-group col-md-2 form-group-sm"');}?>>    
                    <select class="form-control input-sm" id="c1p6a" name="c1p6a" onchange="validardireccion('divc1p6a','c1p6a');">
                            <option value="">Seleccione una opción</option>    
                            <option value="CL">Calle</option>
                            <option value="CR">Carrera</option>
                            <option value="AV">Avenida</option>
                            <option value="KLM">Kilómetro</option>
                            <option value="CI">Circular</option>
                            <option value="DI">Diagonal</option>
                            <option value="TV">Transversal</option>
                    </select> 
                    </div>
                            <div class="form-group col-md-1 form-group-sm">
                            <label> </label>
                            </div>
                    <div id="divc1p6b"<?php if($foexiste['edireccion']==''){echo('class="form-group col-md-1 form-group-sm has-error"');}else{echo('class="form-group col-md-1 form-group-sm"');}?>>
                    <input type="text" class="form-control input-sm" id="c1p6b" name="c1p6b" onchange="validardireccion('divc1p6b','c1p6b');" onKeyPress="return soloNumeros(event)" maxlength="4" placeholder="" value="">
                    </div>
                        
                    <div class="form-group col-md-1 form-group-sm">
                    <input type="text" class="form-control input-sm" id="c1p6c" name="c1p6c" onchange="validardireccion();" onKeyPress="return soloLetras(event)" maxlength="4" placeholder="" value="">
                    </div>
                    </div>
                    
                    <div class="row">
                    <div class="form-group col-md-2 form-group-sm">
                    <select class="form-control input-sm" id="c1p6d" name="c1p6d" onchange="validardireccion();">
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
                    
                    <div id="divc1p6e"<?php if($foexiste['edireccion']==''){echo('class="form-group col-md-1 form-group-sm has-error"');}else{echo('class="form-group col-md-1 form-group-sm"');}?>>    
                    <input type="text" class="form-control input-sm" id="c1p6e" name="c1p6e" onchange="validardireccion('divc1p6e','c1p6e');" onKeyPress="return soloNumeros(event)" maxlength="4" placeholder="" value="">
                    </div>
                        
                    <div class="form-group col-md-1 form-group-sm">
                    <input type="text" class="form-control input-sm" id="c1p6f" name="c1p6f" onchange="validardireccion();" onKeyPress="return soloLetras(event)" maxlength="4" placeholder="" value="">
                    </div>
                    </div>
                    
                    <div class="row">
                    <div class="form-group col-md-2 form-group-sm">
                    <select class="form-control input-sm" id="c1p6g" name="c1p6g" onchange="validardireccion();">
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
                    
                    <div id="divc1p6h"<?php if($foexiste['edireccion']==''){echo('class="form-group col-md-1 form-group-sm has-error"');}else{echo('class="form-group col-md-1 form-group-sm"');}?>>    
                    <input type="text" class="form-control input-sm" id="c1p6h" name="c1p6h" onchange="validardireccion('divc1p6h','c1p6h');" onKeyPress="return soloNumeros(event)" maxlength="4" placeholder="" value="">
                    </div>
                    
                    <div class="form-group col-md-1 form-group-sm">
                    <input type="text" class="form-control input-sm" id="c1p6i" name="c1p6i" onchange="validarc1p6i();" onKeyPress="return soloNumeros(event)" maxlength="4" placeholder="Interior" value="">
                    </div>
                    
                    <div id="divc1p6j"<?php if($foexiste['edireccion']==''){echo('class="form-group col-md-5 form-group-sm has-error"');}else{echo('class="form-group col-md-5 form-group-sm"');}?>>
                    <input type="text" class="form-control input-sm" id="c1p6j" name="c1p6j" onchange="validardireccion('divc1p6j','c1p6j');" onKeyPress="return soloLetras(event)" placeholder="Observación" value="">
                    </div>    
                    </div>
<!--fin de seleccion-->
<!--incio de campo de texto-->
                    <div class="row">
                    <div id="c1p6div" name="c1p6div" class="form-group col-md-10 form-group-sm">   
                        <input type="text" class="form-control input-sm" id="c1p6" name="c1p6" placeholder="Dirección" disabled="" value="<?php echo($foexiste['edireccion']); ?>">
                    </div>
                    </div>
<!--fin campo de texto-->
<!--Fin grupo c1p6 armar dirección-->
<!--incio de campos de texto-->
                    <div class="row">
                    <div id="c1p7div" name="c1p7div" <?php if($foexiste['etelefono']==''){echo('class="form-group col-md-2 form-group-sm has-error"');}else{echo('class="form-group col-md-2 form-group-sm"');}?>>   
                        <label class="control-label" for="telefono">Teléfono fijo/celular</label>
                        <input type="text" class="form-control input-sm" id="telefono" name="telefono" onKeyPress="return soloNumeros(event)" onblur="validarcantdigitosfijo('telefono','c1p7div')" placeholder="ingrese número telefónico" maxlength="10" value="<?php echo($foexiste['etelefono']); ?>">
                    </div>
                    <div id="c1p8div" name="c1p8div" <?php if($foexiste['ecelular']==''){echo('class="form-group col-md-2 form-group-sm has-error"');}else{echo('class="form-group col-md-2 form-group-sm"');}?>>   
                        <label class="control-label" for="celular">Teléfono celular</label>
                        <input type="text" class="form-control input-sm" id="celular" name="celular" onKeyPress="return soloNumeros(event)" onblur="validarcantdigitos('celular',10,'c1p8div')" placeholder="ingrese celular" maxlength="10" value="<?php echo($foexiste['ecelular']); ?>">
                    </div>    
<!--fin campo de texto-->
<!--incio de campos de texto-->
<div id="c1p11div" name="c1p11div" <?php if($foexiste['etelfcont']==''){echo('class="form-group col-md-3 form-group-sm has-error"');}else{echo('class="form-group col-md-3 form-group-sm"');}?>>   
                        <label class="control-label" for="telfcont">Teléfono del contacto fijo/celular</label>
                        <input type="text" class="form-control input-sm" id="telfcont" name="telfcont" onKeyPress="return soloNumeros(event)"  onblur="validarcantdigitosfijo('telfcont','c1p11div')" placeholder="Text input" maxlength="10" value="<?php echo($foexiste['etelfcont']); ?>">
                    </div>    
<!--fin campo de texto-->
<!--incio de campo de texto-->
                    <div id="c1p11adiv" name="c1p11adiv" <?php if($foexiste['ecelcont']==''){echo('class="form-group col-md-3 form-group-sm has-error"');}else{echo('class="form-group col-md-3 form-group-sm"');}?>>   
                        <label class="control-label" for="celcont">Celular del contacto</label>
                        <input type="text" class="form-control input-sm" id="celcont" name="celcont" onKeyPress="return soloNumeros(event)"  onblur="validarcantdigitos('celcont',10,'c1p11adiv')" placeholder="Text input" maxlength="10" value="<?php echo($foexiste['ecelcont']); ?>">
                    </div>    
                    </div><br>                    
<!--fin campo de texto-->
<!--inicio botonera guardar y actualizar NO SE TOCA-->

                            <?php if($foexiste['efolio']<>"")//NO SE TOCA bonotes si es nuevo folio
                                {
                                echo('<button class="btn btn-primary"  type="button" id="actualizar" disabled=""  name="actualizar">Actualizar</button>&nbsp');//NO SE TOCA bonotes si es para actualizar folio
                                echo('<button class="btn btn-primary " type="button" id="anterior" name="anterior">Volver</button>');
                                }
                                else
                                {
                                echo('<button class="btn btn-primary"  type="button" id="actualizar" name="actualizar">Actualizar</button>&nbsp');//NO SE TOCA bonotes si es para actualizar folio
                                echo('<button class="btn btn-primary " type="button" id="anterior" name="anterior">Volver</button>');
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
function validardireccion(div,campo)
{
    
 if(($('#'+ campo).val() == ''))
   { 
       $('#' + div).addClass('has-error');
   }
   else
   { 
       $('#' + div).removeClass('has-error');
   }
   /////////////////////////////////////////////////////  
   if(($('#c1p6j').val() !== ''))
   { 
       $('#divc1p6j').removeClass('has-error');
       $('#divc1p6a').removeClass('has-error');
       $('#divc1p6b').removeClass('has-error');
       $('#divc1p6e').removeClass('has-error');
       $('#divc1p6h').removeClass('has-error');
   }
   else if(($('#c1p6a').val() == '')&&($('#c1p6b').val() == '')&&($('#c1p6e').val() == '')&&($('#c1p6h').val() == ''))
       {    
            $('#divc1p6j').addClass('has-error');
            $('#divc1p6a').addClass('has-error');
            $('#divc1p6b').addClass('has-error');
            $('#divc1p6e').addClass('has-error');
            $('#divc1p6h').addClass('has-error');
       }
   else if(($('#c1p6j').val() == ''))
   { 
       if(($('#c1p6a').val() == ''))
       {
            $('#divc1p6a').addClass('has-error');
       }
       else
       {
            $('#divc1p6a').removeClass('has-error');
            $('#divc1p6j').removeClass('has-error');
       }   
       if(($('#c1p6b').val() == ''))
       {    
       $('#divc1p6b').addClass('has-error');
       }
       else
       {
            $('#divc1p6b').removeClass('has-error');
            $('#divc1p6j').removeClass('has-error');
       }
       if(($('#c1p6e').val() == ''))
       {
       $('#divc1p6e').addClass('has-error');
       }
       else
       {
            $('#divc1p6e').removeClass('has-error');
            $('#divc1p6j').removeClass('has-error');
       }
       if(($('#c1p6h').val() == ''))
       {    
       $('#divc1p6h').addClass('has-error');
       }
       else
       {
            $('#divc1p6h').removeClass('has-error');
            $('#divc1p6j').removeClass('has-error');
       }
       
    }
  llenarotrocampo();
}  
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
      $('#actualizar').prop('disabled', true);
      $('#cerrar').prop('disabled', true);
  }
}
//validar bolitas
function validarbolitasytexto(div,campo)
{    
    if(($('#'+ campo).val() == '') || ($('#'+ campo).val() == '0') || ($('#'+ campo).val() == '#  - ||')) 
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
    function validarcantdigitosfijo(campo,divcam)
{
    if(($('#' + campo).val().length != '7') && ($('#' + campo).val().length != '10'))
    {
        $('#' + campo).val('');
        okcantidaddigitos('7 ó 10');
        $('#' + campo).focus();
        validarbolitasytexto(divcam,campo);
    }
    else
    {
        validarbolitasytexto(divcam,campo);
    }
    
}
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
        validarbolitasytexto('c1p4div','comuna')
        //alert($('#c1p4').val());
            
                $.ajax({
                  url: "fc_traerbarrios",
                  type: "GET",
                  data: {vidcomuna : $('#comuna').val()},
                  dataType: "html",
                  success : function(obj){                      
                      $('#barrio').html(obj);
                  }
                });
                
             $('#barrio').prop('disabled', false);   
    }
///////////////////////////////////////Funciones para opcion multiple o unica////////////////////////////////////////////////////////////////////////    
   function validarc1p6i(){
        if ($('#c1p6i').val() !== ''){
        $('#c1p6i').val("Interior"+" "+$('#c1p6i').val());    
        }
        validardireccion();
    }
    
    function llenarotrocampo()
    {
       
       $('#c1p6').val($('#c1p6a').val() + " " + $('#c1p6b').val() + " " + $('#c1p6c').val()+ " " + $('#c1p6d').val()+ "#" + $('#c1p6e').val()+ " " + $('#c1p6f').val()+ " " + $('#c1p6g').val()+ "-" + $('#c1p6h').val()+ " " + $('#c1p6i').val()+ "||"+ " "+$('#c1p6j').val());
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
                          data: {vrephogar : $('#rephogar').val(), vmotivo : $('#motivo').val(), vestrato: $('#estrato').val(), vcomuna: $('#comuna').val(), vbarrio: $('#barrio').val(), vdireccion: $('#c1p6').val(), vtelefono: $('#telefono').val(),vcelular: $('#celular').val(),vtelfcont: $('#telfcont').val(),vcelcont: $('#celcont').val()},
                          dataType: "html",
                          success : function(obj){                      
                          okguardar();//me llama el mensajito de guardar
                            //$('#datos').html(obj);
                          //location.reload();
                        $('#cerrar').show();  
                        $('#actualizar').show();
                        $('#guardar').hide();
                          }
                        });                    
                });
                //fin de la funcion guardar
                //esta funcion es para actualizar
                $("#actualizar").click(function ()
                {
                   // alert('juapis');
                        $.ajax({
                          url: "fc_actualizarh",
                          type: "GET",
                          data: {vfolio : $('#folio').val(), vrephogar : $('#rephogar').val(), vmotivo : $('#motivo').val(), vestrato: $('#estrato').val(), vcomuna: $('#comuna').val(), vbarrio: $('#barrio').val(), vdireccion: $('#c1p6').val(), vtelefono: $('#telefono').val(),vcelular: $('#celular').val(),vtelfcont: $('#telfcont').val(),vcelcont: $('#celcont').val()},
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
                 location.href = "../c_c9mp6ap10/fc_c9mp6ap10?folio="+ $('#folio').val() +"&idintegrante="+$('#idintegrante').val();
                    
                });
                //fin de la funcion siguiente
                
                //esta funcion es para atras
                //si las preguntas son por hogar mandar idintegrante en 0                
                $("#anterior").click(function ()
                {
                   // alert('juapis');
                location.href = "../../c_principalhogar/fc_principalhogar?doccogestor="+ $('#doccogestor').val();                  
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
    //validar bolitas
 function traemotivo()
    {
    }
// Fin validar bolitas 

/////////////////////////////////////// FIN Funciones que llaman al controlador para guardar y actualizar////////////////////////////////////////////////////////////////////////                        
</script>
</html>