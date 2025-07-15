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
            
<!--head            -->
            <?php echo($head3); ?>
<!-- fin head            -->

                <div  class="row">
                    <div class="col-md-10">
                        <h6>Folio: <small><?php echo($folio); ?></small></h6>
                    <h6>Documento: <small><?php echo($tdatinte['tdoc']); ?></small></h6>
                    <h6>IDintegrante: <small><?php echo($tdatinte['tidintegrante']); ?></small></h6>
                    <h6>Nombre: <small><?php echo($tdatinte['tnombre']); ?></small></h6>
                    <p class="text-right"><small>Te encuentras en la vista de los <strong>Integrantes</strong></small></p>
                    </div>
                </div><br>
<!--para imprimir el folio y llevarlo-->
                        <input type="text" class="form-control input-sm" id="folio" name="folio" style="display: none" placeholder="Text input" value="<?php echo($folio); ?>">
                        <input type="text" class="form-control input-sm" id="idintegrante" name="idintegrante" style="display: none" placeholder="Text input" value="<?php echo($tdatinte['tidintegrante']); ?>">
                        <input type="text" class="form-control input-sm" id="edad" style="display: none" name="edad" placeholder="Text input" value="<?php echo($tdatinte['tedad']); ?>">
<!--fin para imprimir el folio y llevarlo-->
<!--inicio radio una sola seleccion-->
<form class="form-group" name="formulario" id="formulario">
                <div class="row">
                    <div class="form-group form-group-sm">   
                        <div class="form-group  ">
                                              <div class="panel panel-primary">
                           <!-- Default panel contents -->
                           <div class="panel-heading"><strong>Lista de todos los integrantes del hogar menos el de <?php echo($tdatinte['tnombre']); ?></strong></div>
                          <!-- <div class="panel-body">
                             <p><button class="btn btn-warning" <?php echo($disabled); ?> type="button" id="nintegrante" name="nintegrante" >Ingresar Nuevo Integrante</button></p>
                           </div> -->
                            <table class="table table-condensed">
                                <thead>
                                    <tr>
                                            <th style="display:none">Folio</th>                                            
                                            <th>Documento</th>		
                                            <th>Nombre del integrante</th>
                                            <th colspan="2"><center>¿Es hijo de?  <?php echo($tdatinte['tnombre']); ?></center></th>
                                            
                                            
                                        </tr>
                                </thead>

                                <tbody id='datos'>
                                    <?php echo($datos); ?>
                                </tbody>
                            </table>
                            </div>
                        </div>
                    </div>
                </div> 
 
<!--inicio botonera guardar y actualizar NO SE TOCA-->

<button class="btn btn-primary pull-left" type="button" id="volverA" name="volver"><< Volver</button>
<button class="btn btn-primary pull-right" type="button" id="volver" onclick="insertidpaso();" name="volver">Continuar >></button>
  

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
///////////////////////////////////////Funciones para opcion multiple o unica////////////////////////////////////////////////////////////////////////    

 
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
        color: 'yellow',
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
                //esta funcion es para siguiente
                //si las preguntas son por hogar mandar idintegrante en 0
                $("#volverA").click(function ()
                {
                location.href = "../c_totalmadres/fc_totalmadres?folio="+ $('#folio').val() +"&idintegrante=0";                  
                });
                                    
    });
/////////////////////////////////////// FIN Funciones que llaman al controlador para guardar y actualizar////////////////////////////////////////////////////////////////////////     


function insertidpaso()
   {
   // alert($('#folio').val());
        $.ajax({
          url: "fc_cerrarpaso",
          type: "GET",
          data: {vfolio: $('#folio').val(), vidpaso:1109, vestado:1},
          dataType: "html",
          success: function(obj) {
         // alert(obj);
         location.href = "../c_protocolol1e1/fc_protocolol1e1?folio="+ $('#folio').val() +"&idintegrante=0";
        }
       });
   }

function integranteshijos(folio,idinte,idintegrantemadre)
    { alert(folio);alert(idinte);alert(idintegrantemadre);

        $('#hijosi'+folio+idinte).prop('disabled', true);
        $('#hijono'+folio+idinte).prop('disabled', false);
   //     $('#hijono'+folio+idinte).html('Rechazado');
/*
  $('#Aprobar'+idoferta+id_usuario+identidad+periodo).prop('disabled', false);
  $('#Aprobar'+idoferta+id_usuario+identidad+periodo).html('Aprobar');
  $('#observacionPostulacion'+idoferta+id_usuario+identidad+periodo).prop('disabled', false);
*/
   new jBox('Notice', {
    title: 'Registro',
    content: 'Actualizado',
    color: 'green',
    animation: {open: 'flip', close: 'flip'},
    position: {x: 'center', y: 'center'},
    autoClose: 2000
   });

     //   location.href = "../c_integrantes/fc_integrantes?folio="+ folio +"&idintegrante="+idinte;
    } 

function integranteshijosno(folio,idinte,idintegrantemadre)
    { alert(folio);alert(idinte);alert(idintegrantemadre);

        $('#hijono'+folio+idinte).prop('disabled', true);
        $('#hijosi'+folio+idinte).prop('disabled', false);
 //       $('#hijono'+folio+idinte).html('Rechazado');
/*
  $('#Aprobar'+idoferta+id_usuario+identidad+periodo).prop('disabled', false);
  $('#Aprobar'+idoferta+id_usuario+identidad+periodo).html('Aprobar');
  $('#observacionPostulacion'+idoferta+id_usuario+identidad+periodo).prop('disabled', false);
*/
   new jBox('Notice', {
    title: 'Registro',
    content: 'Eliminado',
    color: 'red',
    animation: {open: 'flip', close: 'flip'},
    position: {x: 'center', y: 'center'},
    autoClose: 2000
   });

     //   location.href = "../c_integrantes/fc_integrantes?folio="+ folio +"&idintegrante="+idinte;
    } 
    
</script>
</html>