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
            <input type="text" class="form-control input-sm" id="idintegrante" name="idintegrante" style="display: none" placeholder="Text input" value="<?php echo($tdatinte['tidintegrante']); ?>">
            <input type="text" class="form-control input-sm" id="idsueno" name="idsueno" placeholder="Text input" style="display: none" value="<?php echo($idsueno); ?>"><br><br>
            <!-- fin head            -->
            <div  class="row col-md-12 col-md-offset-0"><br>
            <ul class="nav nav-tabs">
                <li role="presentation" class="active"><a href="#">Creando nuestras acciones</a></li>
                
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
                        <textarea class="form-control input-sm" id="nomsueno" disabled="" name="nomsueno" placeholder="Text input" value=""><?php echo($tdatsuenointe['tnombresueno']); ?></textarea>
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
                        <label for="estado">fecha del creación Sueño</label>
                        <input type="text" class="form-control input-sm" id="fcreacionsueno" disabled="" name="fcreacionsueno" placeholder="Text input" value="<?php echo($tdatsuenointe['tfcreacionsueno']); ?>">
                    </div>    
                        
                    </div>    
                    
<button type="button" id="crearaccionessueno"  class="btn btn-default" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Crear acciones del Sueño</button><br><br>

                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" data-keyboard="false" data-backdrop="static">
                    <div class="modal-dialog" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"></span></button>
                    <h3 class="modal-title" id="exampleModalLabel">Crear acción para cumplir el sueño:</h3>
                    </div>
                        <div class="modal-body">
                        
                        <div class="row" id="mensajesuenomostrar" align="center" name="mensajesuenomostrar" style="display: none">
                        
                        <label>    
                        <h1 class="control-label" id="exampleModalLabel">la acción fue creada</h1>    
                        </label>
<!--                        <label class="control-label">El sueño fue creado</label>-->
                        </div>    
                            
                            
                        <div class="row" id="nombresuenotiempomostrar" name="nombresuenotiempomostrar">
                        <div  id="nombresuenotiempodiv" name="nombresuenotiempodiv" <?php {echo('class="form-group col-md-12 has-error"');}?>>
                        <label class="control-label">Descripción de la acción:</label>
                        <textarea class="form-control" id="nombresuenotiempo" onkeypress="return soloLetras(event)"  onchange="validarbolitasytextomodal()" name="nombresuenotiempo"   placeholder="Escriba la acción para cumplir el sueño" value=""></textarea>
                        </div>
                        </div>    
                        
                        <div id="suenotiempodiv" <?php {echo('class="has-error"');}?>>
                        <label class="control-label" for="suenotiempo">Tiempo para realizar la acción</label>
                        <select class="form-control input-sm" id="suenotiempo" name="suenotiempo" onchange="validarbolitasytextomodal();">
                        <?php {
                        echo('<option value="">Seleccione una opción</option>');
                        }?>
                        <?php echo($motivo); ?>
                        </select>
                        </div>
    </div>
    <div class="modal-footer">
        <button id="cerrar"type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        <button id="guardar"type="button" disabled="" class="btn btn-primary">Guardar</button>
    </div>
    </div>
    </div>
    </div>
<!--inicio botonera guardar y actualizar NO SE TOCA-->
                           <div class="panel panel-primary">
                           <!-- Default panel contents -->
                           <div class="panel-heading">Acciones del hogar y/o integrantes</div>
                           <div class="panel-body">
                           </div>
                            <table class="table table-condensed">
                                <thead>
                                    <tr>
                                            <th>id acción</th>                                            
<!--                                            <th>folio</th>
                                            <th>id integrante</th>-->
                                            <th>Descripción de la acción</th>
                                            <th>Tiempo para realizar la acción</th>
                                            <th>Editar acción</th>
                                            <th>Eliminar acción</th>
                                            
                                            
                                        </tr>
                                </thead>

                                <tbody id='datos'>
                                    <?php echo($datossuenoacciones); ?>
                                </tbody>
                            </table>
                            </div>

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
{ 
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
  $('#guardar').prop('disabled', false);
  }
  else
  { 
 //  alert('inhabilitar guardar')   
  $('#guardar').prop('disabled', true);
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
                $("#guardar").click(function ()
                {
                   // alert('text');
                        $.ajax({
                          url: "fc_insertar",
                          type: "GET",
                          data: {vidsueno: $('#idsueno').val(),vfolio : $('#folio').val(), vidintegrante : $('#idintegrante').val(),vnombresuenotiempo: $('#nombresuenotiempo').val(), vsuenotiempo: $('#suenotiempo').val()},
                          dataType: "html",
                          success : function(obj){      
                          ocultardiv();    
                        //  okguardar();//me llama el mensajito de guardar
                          $('#cerrar').show();  
                          $('#guardar').hide();
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
                // location.href = "../c_accionessueno/fc_accionessueno?folio="+ folio +"&idintegrante="+idinte+"&idsueno="+id;   
                location.href = "../c_crearsueno/fc_crearsueno?folio="+ $('#folio').val()+"&idintegrante=0"+"&doccogestor="+$('#doccogestor').val();                  
                });
                //fin de la funcion atras
    });
    //validar bolitas
    function acciones(idsueno,idaccion,folio,idinte)
    { 
       location.href = "../c_editaraccionessueno/fc_editaraccionessueno?folio="+ folio +"&idintegrante="+idinte+"&idsueno="+idaccion+"&idaccion="+idsueno;
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















