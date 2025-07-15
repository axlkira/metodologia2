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
            <input type="text" class="form-control input-sm" id="doccogestor" name="doccogestor"  placeholder="Text input" style="display: none" value="<?php echo($foexiste['edoccogestor']); ?>">
            <input type="text" class="form-control input-sm" id="folio" name="folio"  placeholder="Text input" style="display: none" value="<?php echo($folio); ?>">
            <input type="text" class="form-control input-sm" id="doccogestor" name="doccogestor"  placeholder="Text input" style="display: none" value="<?php echo($foexiste['edoccogestor']); ?>">
            <input type="text" class="form-control input-sm" id="idintegrante" name="idintegrante" style="display: none" placeholder="Text input" value="<?php echo($tdatinte['tidintegrante']); ?>"><br><br>
            <!-- fin head            -->
            <div  class="row col-md-12 col-md-offset-0"><br>
            <ul class="nav nav-tabs">
                <li role="presentation" class="active"><a href="#">Editando nuestra acción</a></li>
                
            </ul>
            </div><br>
            
            <form class="form-group col-md-12 col-md-offset-0" name="formulario" id="formulario"><br>
                <!--incio de campos de texto-->
                    <div class="row">
                    <div class="form-group col-md-3 form-group-sm">
                        <label for="folio">Folio</label>
                        <input type="text" class="form-control input-sm" id="folio" disabled="" name="folio" placeholder="Text input" value="<?php echo($tdatsuenointe['tfolio']); ?>">
                    </div>
                    <div class="form-group col-md-3 form-group-sm">
                        <label for="estado">Id del integrante</label>
                        <input type="text" class="form-control input-sm" id="idintegrante" disabled="" name="idintegrante" placeholder="Text input" value="<?php echo($tdatsuenointe['tidintegrante']); ?>">
                    </div>
                    <div class="form-group col-md-3 form-group-sm">
                        <label for="estado">Nombre del integrante</label>
                        <input type="text" class="form-control input-sm" id="nombreintegrante" disabled="" name="nombreintegrante" placeholder="Text input" value="<?php echo($tdatsuenointe['tnombreintegrante']); ?>">
                    </div>    
                    <div class="form-group col-md-3 form-group-sm">
                        <label for="estado">Id del Sueño</label>
                        <input type="text" class="form-control input-sm" id="idsueno" disabled="" name="idsueno" placeholder="Text input" value="<?php echo($tdatsuenointe['tid']); ?>">
                    </div>
                    <div class="form-group col-md-3 form-group-sm">
                        <label for="estado">Nombre del Sueño</label>
                        <input type="text" class="form-control input-sm" id="nomsueno" disabled="" name="nomsueno" placeholder="Text input" value="<?php echo($tdatsuenointe['tnombresueno']); ?>">
                    </div>
                    <div class="form-group col-md-3 form-group-sm">
                        <label for="estado">Categoria del Sueño</label>
                        <input type="text" class="form-control input-sm" id="catsueno" disabled="" name="catsueno" placeholder="Text input" value="<?php echo($tdatsuenointe['tcatsueno']); ?>">
                    </div>
                    <div class="form-group col-md-3 form-group-sm">
                        <label for="estado">Aplica el Sueño</label>
                        <input type="text" class="form-control input-sm" id="aplisueno" disabled="" name="aplisueno" placeholder="Text input" value="<?php echo($tdatsuenointe['taplicasueno']); ?>">
                    </div>    
                    <div class="form-group col-md-3 form-group-sm">
                        <label for="estado">Id de la acción del sueño</label>
                        <input type="text" class="form-control input-sm" id="vidaccion" disabled="" name="vidaccion" placeholder="Text input" value="<?php echo($listadesueno['eidaccion']); ?>">
                    </div>
                        
                        <div id="nombresuenotiempomostrar" name="nombresuenotiempomostrar">
                        <div  id="nombresuenotiempodiv" name="nombresuenotiempodiv" class="form-group col-md-6">
                        <label class="control-label">Descripción de la acción:</label>
                        <textarea class="form-control" id="nombresuenoaccion" onkeypress="return soloLetras(event)"  onchange="validarbolitasytextomodal()" name="nombresuenoaccion" placeholder="Escriba la acción para cumplir el sueño" value=""><?php echo($listadesueno['edescripcionaccion']); ?></textarea>
                        </div>
                        </div>    
                        
                        <div id="suenotiempodiv" class="form-group col-md-6">
                        <label class="control-label" for="suenotiempo">Tiempo para realizar la acción</label>
                        <select class="form-control input-sm" id="suenotiempo" name="suenotiempo" onchange="validarbolitasytextomodal();">
                        <?php { if($listadesueno['etiempoaccion']=='')
                        {    
                        echo('<option value="">Seleccione una opción</option>');
                        }
                        else
                        {
                        echo('<option value="'.$listadesueno['etiempoaccion'].'">'.$listadesueno['eidsignificado'].'</option>');   
                        }    
                        }?>
                        <?php echo($motivo); ?>
                        </select>
                        </div>   
                        
                    </div>    
                    
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
function validarbolitasytextomodal()
{ // alert('entro');
  if(($('#nombresuenotiempo').val() !== '')) 
  { 
  $('#nombresuenotiempodiv').removeClass('has-error');
  }
  else
  { 
  $('#nombresuenotiempodiv').addClass('has-error');
  }
  if(($('#suenotiempo').val() !== '')) 
  { 
  $('#suenotiempodiv').removeClass('has-error');
  }
  else
  { 
  $('#suenotiempodiv').addClass('has-error');
  }
  // alert('entra al validar guardar')
  if(($('#nombresuenotiempo').val() !== '') && ($('#suenotiempo').val() !== '')) 
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
                        $.ajax({
                          url: "fc_actualizar",
                          type: "GET",
                          data: {vidsueno: $('#idsueno').val(),vidaccion: $('#vidaccion').val(),vfolio : $('#folio').val(), vidintegrante : $('#idintegrante').val(),vnombresuenoaccion: $('#nombresuenoaccion').val(), vsuenotiempo: $('#suenotiempo').val()},
                          dataType: "html",
                          success : function(obj){      
                        //  ocultardiv();    
                        //  okguardar();//me llama el mensajito de guardar
                        //  $('#cerrar').show();  
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
                   // alert('juapis');anterior
                location.href = "../c_accionessueno/fc_accionessueno?folio="+ $('#folio').val()+"&idintegrante="+ $('#idintegrante').val() +"&idsueno="+$('#idsueno').val();                  
                });
                //fin de la funcion atras
    });
    //validar bolitas
    function acciones(id,folio,idinte)
    { 
        alert('acciones');
       alert(id);
       alert(folio);
       alert(idinte);
        //location.href = "../c_integrantes/fc_integrantes?folio="+ folio +"&idintegrante="+idinte;
    }
    function eliminaraccion(idaccion,idsueno,folio,idinte)
    {  
                          $.ajax({
                          url: "fc_eliminaraccion",
                          type: "GET",
                          data: {vidaccion : idaccion,vidsueno : idsueno, vfolio : folio, vidintegrante : idinte},
                          dataType: "html",
                          success : function(obj){                      
                          }
                        });
        location.reload();               
    }
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
 $('#nombresuenotiempomostrar').hide();
 $('#suenotiempodiv').hide();
 $('#mensajesuenomostrar').show();
        
}
/////////////////////////////////////// FIN Funciones que llaman al controlador para guardar y actualizar////////////////////////////////////////////////////////////////////////                        
</script>
</html>















