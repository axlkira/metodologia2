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
            <?php echo($head1); ?><br>
            <input type="text" class="form-control input-sm" id="doccogestor" name="doccogestor" style="display: none" placeholder="Text input" value="<?php echo($foexiste['edoccogestor']); ?>">
            <input type="text" class="form-control input-sm" id="folio" name="folio" style="display: none" placeholder="Text input" value="<?php echo($folio); ?>">
            <input type="text" class="form-control input-sm" id="idintegrante" name="idintegrante" style="display: none"  value="<?php echo($tdatinte['tidintegrante']); ?>">
            <input type="text" class="form-control input-sm" id="idsueno" name="idsueno" style="display: none" value="<?php echo($idsueno); ?>">
            <!-- fin head            -->
            <div  class="row col-md-12 col-md-offset-0"><br>
            <ul class="nav nav-tabs">
                <li role="presentation" class="active"><a href="#">Editar el sueños</a></li>
                
            </ul>
            </div><br>
            
            <form class="form-group col-md-12 col-md-offset-0" name="formulario" id="formulario"><br>
   
                    <!--opcion de seleccion-->
                    <div class="row">
                    <div id="idintegrantesdiv"<?php {echo('class="form-group col-md-6"');}?>>        
                        <label class="control-label" for="idintegrantes">Integrante al que editaremos el sueño</label>
                        <select class="form-control input-sm" id="idintegrantes" disabled="" name="idintegrantes" onchange="mostraridintegrantes();">
                                  <?php {
                                  echo('<option value="'.$suexiste['eidintegrante'].'">'.$suexiste['enombreintegrante'].'</option>');
                                  }?>
                        </select>
                    </div>

                    <div id="aplicadiv" class="form-group col-md-6">    
                    <label class="control-label" for="aplica">A quien aplica</label>
                    <select class="form-control input-sm" id="aplica" name="aplica" onchange="mostraralqueaplica();" >
                              <?php if($suexiste['eaplica']=="")
                                {
                                echo('<option value="">Seleccione una opción</option>');
                                }
                                else
                                {
                                echo('<option value="'.$suexiste['eaplica'].'">'.$suexiste['eaplicasueno'].'</option>');
                                }?>
                            <?php echo($motivo); ?>
                    </select> 
                    </div>
                        
                    <div id="nombresuenomostrar"  name="nombresuenomostrar">
                        <div  id="nombresuenodiv" name="nombresuenodiv" class="form-group col-md-6">
                        <label class="control-label">Nombre del Sueño:</label>
                        <textarea class="form-control" id="nombresueno" onkeypress="return soloLetras(event)"  onchange="validarbolitasytextomodal()" name="nombresueno"   placeholder="Escriba el nombre de su sueño" value=""><?php echo($suexiste['enombresueno']);?></textarea>
                        </div>
                    </div>    
                    <div id="catsuenodiv" class="form-group col-md-6">
                          <label class="control-label" for="catsueno">Categoria del Sueño</label>
                          <select class="form-control input-sm" id="catsueno" name="catsueno" onchange="validarbolitasytextomodal();">
                            <?php { if($suexiste['ecatsueno']=='')
                            {
                                echo('<option value="">Seleccione una opción</option>');
                            }
                            else
                            {
                                echo('<option value="'.$suexiste['ecatsueno'].'">'.$suexiste['enecesidad'].'</option>');
                            }
                                  
                                  }?>
                            
                            <?php echo($categorias); ?>
                          </select>
                    </div>    
                    
                                 <!--Check varias selecciones -->
    
        <div id="recursosintdiv" name="recursosintdiv" class="form-group col-md-12 form-group-sm">
        <div id="recursosinto0div" class="has-error">
        <label class="control-label">Recursos internos: SELECCIÓN MULTIPLE</label>
        </div>
        
        <div id="recursosinto1div" <?php if($suexiste['erecursosinternoso1']=="NO"){echo('class=" has-error"');}else{}?>>
        <div class="checkbox">
            <label> <!--en este caso se manda a la fincion javascript el nombre del campo-->
                <input type="checkbox" name="recursosinto1" id="recursosinto1" onclick="cambiarsinorecursos('SI','recursosinto1','recursosinto1div','recursosintdiv',9);" <?php if($suexiste['erecursosinternoso1']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            Acceso a información.
            </label>
        </div>
        </div>
        <div id="recursosinto2div" <?php if($suexiste['erecursosinternoso2']=="NO"){echo('class=" has-error"');}else{}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="recursosinto2" id="recursosinto2" onclick="cambiarsinorecursos('SI','recursosinto2','recursosinto2div','recursosintdiv',9);" <?php if($suexiste['erecursosinternoso2']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            Acceso a TIC’S.
          </label>
        </div>
        </div>
        <div id="recursosinto3div" <?php if($suexiste['erecursosinternoso3']=="NO"){echo('class=" has-error"');}else{}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="recursosinto3" id="recursosinto3" onclick="cambiarsinorecursos('SI','recursosinto3','recursosinto3div','recursosintdiv',9);" <?php if($suexiste['erecursosinternoso3']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            Recursos económicos.
          </label>
        </div>
        </div>  
       <div id="recursosinto4div" <?php if($suexiste['erecursosinternoso4']=="NO"){echo('class=" has-error"');}else{}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="recursosinto4" id="recursosinto4" onclick="cambiarsinorecursos('SI','recursosinto4','recursosinto4div','recursosintdiv',9);" <?php if($suexiste['erecursosinternoso4']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            Cumplimiento de requisitos previos. 
          </label>
        </div>
        </div>
       <div id="recursosinto5div" <?php if($suexiste['erecursosinternoso5']=="NO"){echo('class=" has-error"');}else{}?>>
       <div class="checkbox">
         <label>
             <input type="checkbox" name="recursosinto5" id="recursosinto5" onclick="cambiarsinorecursos('SI','recursosinto5','recursosinto5div','recursosintdiv',9);" <?php if($suexiste['erecursosinternoso5']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
           Capacidades / habilidades individuales. 
         </label>
       </div>
       </div>
       <div id="recursosinto6div" <?php if($suexiste['erecursosinternoso6']=="NO"){echo('class=" has-error"');}else{}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="recursosinto6" id="recursosinto6" onclick="cambiarsinorecursos('SI','recursosinto6','recursosinto6div','recursosintdiv',9);" <?php if($suexiste['erecursosinternoso6']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
           Red familiar de apoyo. 
          </label>
        </div>
        </div>
            <div id="recursosinto7div" <?php if($suexiste['erecursosinternoso7']=="NO"){echo('class=" has-error"');}else{}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="recursosinto7" id="recursosinto7" onclick="cambiarsinorecursos('SI','recursosinto7','recursosinto7div','recursosintdiv',9);" <?php if($suexiste['erecursosinternoso7']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
           Recursos familiares (resiliencia, resolución de conflictos, empatía). 
          </label>
        </div>
        </div>
            <div id="recursosinto8div" <?php if($suexiste['erecursosinternoso8']=="NO"){echo('class=" has-error"');}else{}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="recursosinto8" id="recursosinto8" onclick="cambiarsinorecursos('SI','recursosinto8','recursosinto8div','recursosintdiv',9);" <?php if($suexiste['erecursosinternoso8']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
           Estructura y valores familiares. 
          </label>
        </div>
        </div>
            <div id="recursosinto9div" <?php if($suexiste['erecursosinternoso9']=="NO"){echo('class=" has-error"');}else{}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="recursosinto9" id="recursosinto9" onclick="cambiarsinorecursos('SI','recursosinto9','recursosinto9div','recursosintdiv',9);" <?php if($suexiste['erecursosinternoso9']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
           Nivel de formación y/u ocupación de los integrantes de la familia. 
          </label>
        </div>
        </div>
            
       </div>
        
      <!--Fin Chek varias selecciones-->

        <div id="recursosextdiv" name="recursosextdiv" class="form-group col-md-12 form-group-sm">
        <div id="recursosexto0div" class="has-error">
        <label class="control-label">Recursos externos: SELECCIÓN MULTIPLE</label>
        </div>
        <div id="recursosexto1div" <?php if($suexiste['erecursosexternoso1']=="NO"){echo('class=" has-error"');}else{}?>>
        <div class="checkbox">
            <label> <!--en este caso se manda a la fincion javascript el nombre del campo-->
              <input type="checkbox" name="recursosexto1" id="recursosexto1" onclick="cambiarsinorecursos('SI','recursosexto1','recursosexto1div','recursosextdiv',5);" <?php if($suexiste['erecursosexternoso1']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            Accesibilidad a vías y medios de transporte.
            </label>
        </div>
        </div>
        <div id="recursosexto2div" <?php if($suexiste['erecursosexternoso2']=="NO"){echo('class=" has-error"');}else{}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="recursosexto2" id="recursosexto2" onclick="cambiarsinorecursos('SI','recursosexto2','recursosexto2div','recursosextdiv',5);" <?php if($suexiste['erecursosexternoso2']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            TICS disponibles.
          </label>
        </div>
        </div>
        <div id="recursosexto3div" <?php if($suexiste['erecursosexternoso3']=="NO"){echo('class=" has-error"');}else{}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="recursosexto3" id="recursosexto3" onclick="cambiarsinorecursos('SI','recursosexto3','recursosexto3div','recursosextdiv',5);" <?php if($suexiste['erecursosexternoso3']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            Acceso a programas, proyectos y servicios.
          </label>
        </div>
        </div>  
         
       <div id="recursosexto4div" <?php if($suexiste['erecursosexternoso4']=="NO"){echo('class=" has-error"');}else{}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="recursosexto4" id="recursosexto4" onclick="cambiarsinorecursos('SI','recursosexto4','recursosexto4div','recursosextdiv',5);" <?php if($suexiste['erecursosexternoso4']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            Red social de apoyo y tejido social. 
          </label>
        </div>
        </div>
       <div id="recursosexto5div" <?php if($suexiste['erecursosexternoso5']=="NO"){echo('class=" has-error"');}else{}?>>
       <div class="checkbox">
         <label>
             <input type="checkbox" name="recursosexto5" id="recursosexto5" onclick="cambiarsinorecursos('SI','recursosexto5','recursosexto5div','recursosextdiv',5);" <?php if($suexiste['erecursosexternoso5']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
           Acceso a servicios públicos. 
         </label>
       </div>
       </div>
            
       </div>
      <!--Fin Chek varias selecciones-->
       </div>
<!--fin de seleccion-->

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
//validar bolitas
function validarbolitasytextomodal()
{ 
  if(($('#nombresueno').val() !== '')) 
  { 
  $('#nombresuenodiv').removeClass('has-error');
  }
  else
  { 
  $('#nombresuenodiv').addClass('has-error');
  }
  
  // alert('entra al validar guardar')
  if(($('#nombresueno').val() !== '') &&
    (($('#recursosinto1').val() !== 'NO') || ($('#recursosinto2').val() !== 'NO')|| ($('#recursosinto3').val() !== 'NO')||
    ($('#recursosinto4').val() !== 'NO')|| ($('#recursosinto5').val() !== 'NO')|| ($('#recursosinto6').val() !== 'NO')||
    ($('#recursosinto7').val() !== 'NO')|| ($('#recursosinto8').val() !== 'NO')|| ($('#recursosinto9').val() !== 'NO'))
    && (($('#recursosexto1').val() !== 'NO')||($('#recursosexto2').val() !== 'NO')||($('#recursosexto3').val() !== 'NO')||
    ($('#recursosexto4').val() !== 'NO')||($('#recursosexto5').val() !== 'NO'))) 
  { 
 //  alert('habilitar guardar')   
  $('#actualizar').prop('disabled', false);
  }
  else
  { 
 //  alert('inhabilitar guardar')   
  $('#actualizar').prop('disabled', true);
  }
  // validarguardar();   
}
// Fin validar bolitas 
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
                $("#actualizar").click(function ()
                {
                   // alert('text');
                        $.ajax({
                          url: "fc_actualizar",
                          type: "GET",
                          data: {vidsueno : $('#idsueno').val(),vfolio : $('#folio').val(), vidintegrante : $('#idintegrantes').val(),vaplica: $('#aplica').val(), vnombresueno: $('#nombresueno').val(), vcatsueno: $('#catsueno').val(),vrecursosinto1: $('#recursosinto1').val(), vrecursosinto2: $('#recursosinto2').val(),vrecursosinto3: $('#recursosinto3').val(),vrecursosinto4: $('#recursosinto4').val(),vrecursosinto5: $('#recursosinto5').val(),vrecursosinto6: $('#recursosinto6').val(),vrecursosinto7: $('#recursosinto7').val(),vrecursosinto8: $('#recursosinto8').val(),vrecursosinto9: $('#recursosinto9').val(),vrecursosexto1: $('#recursosexto1').val(),vrecursosexto2: $('#recursosexto2').val(),vrecursosexto3: $('#recursosexto3').val(),vrecursosexto4: $('#recursosexto4').val(),vrecursosexto5: $('#recursosexto5').val()},
                          dataType: "html",
                          success : function(obj){      
                        //  ocultardiv();    
                        //  okguardar();//me llama el mensajito de guardar
                        //  location.reload();
                          $('#actualizar').prop('disabled',true);
                          }
                        });                    
                });
                //fin de la funcion guardar
                $("#cerrar").click(function()
                {
                // borrarcheck();
                 location.reload();
                });
                //si las preguntas son por hogar mandar idintegrante en 0                
                $("#anterior").click(function ()
                {
                   // alert('juapis');
                location.href = "../c_crearsueno/fc_crearsueno?folio="+ $('#folio').val()+"&idintegrante=0"+"&doccogestor="+$('#doccogestor').val();                  
                });
                //fin de la funcion atras
    });
    //validar bolitas
    function acciones(id,folio,idinte)
    { 
      location.href = "../c_accionessueno/fc_accionessueno?folio="+ folio +"&idintegrante="+idinte+"&idsueno="+id;
    }
    function editarsueno(id,folio,idinte)
    { 
        alert('editar');
       alert(id);
       alert(folio);
       alert(idinte);
    //  location.href = "../c_accionessueno/fc_accionessueno?folio="+ folio +"&idintegrante="+idinte+"&idsueno="+id;
    }
    function eliminarsueno(id,folio,idinte)
    { 
                       $.ajax({
                          url: "fc_eliminarsueno",
                          type: "GET",
                          data: {vid : id, vfolio : folio, vidintegrante : idinte},
                          dataType: "html",
                          success : function(obj){                      
                          }
                        });
        location.reload();               
    }
 function traemotivo()
    {
           //  $('#motivodiv').addClass(' has-error');   
           //  $('#motivo').prop('disabled', false);   
           //  $('#motivo').val('');   
             validarguardar()
    }
// Fin validar bolitas 
function cambiarsinorecursos(opcion,campoval,divcampo,divcompleto,campos)
{
    if($('#' + campoval).val() == opcion)
    {
        $('#' + campoval).val("NO");
        $('#' + divcampo).addClass('has-error');
    }
    else
    {
        $('#' + campoval).val(opcion);
        $('#' + divcampo).removeClass('has-error');
    }
       
    validarbolitasytextomodal();
}

function mostraridintegrantes()
{
  if($('#idintegrantes').val()=='')
  {
  $('#idintegrantesdiv').addClass('has-error')
  }
  else
  {
  $('#idintegrantesdiv').removeClass('has-error')    
  }
  validarguardarmodal()
// $('#crearsueno').prop('disabled', false);
}
function mostraralqueaplica()
{
  if($('#aplica').val()=='')
  {
  $('#aplicadiv').addClass('has-error')
  }
  else
  {
  $('#aplicadiv').removeClass('has-error')    
  } 
  validarguardarmodal()
}

function mostrarcategoria()
{
   $('#catsuenodiv').removeClass('has-error')
}
function validarguardarmodal()
{ 
  if(($('#aplica').val()!=='') && ($('#idintegrantes').val()!==''))
  {
      $('#crearsueno').prop('disabled', false);
  }
  else
  {    
      $('#crearsueno').prop('disabled', true);
  }
}
function ocultardiv()
{
 $('#nombresuenomostrar').hide();
 $('#catsuenodiv').hide();
 $('#recursosintdiv').hide();
 $('#recursosextdiv').hide();
 $('#mensajesuenomostrar').show();
        
}
/////////////////////////////////////// FIN Funciones que llaman al controlador para guardar y actualizar////////////////////////////////////////////////////////////////////////                        
</script>
</html>















