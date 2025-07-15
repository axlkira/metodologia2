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
            <?php echo($head); ?>
            <?php //echo($ahora); ?>
<!-- fin head            -->

                <div  class="row">
                    <div class="col-md-10">
                        <h6>Folio: <small><?php echo($folio); ?></small></h6>
                    <h6>Documento: <small><?php echo($tdatinte['tdoc']); ?></small></h6>
                    <h6>IDintegrante: <small><?php echo($tdatinte['tidintegrante']); ?></small></h6>
                    <h6>Nombre: <small><?php echo($tdatinte['tnombre']); ?></small></h6>
                    <p class="text-right"><small>Te encuentras en la vista de:  <strong>Mujeres entre 10 y 19 años de edad</strong></small></p>
                    </div>
                </div><br>
<!--para imprimir el folio y llevarlo-->
                        <input type="text" class="form-control input-sm" id="folio" name="folio" style="display: none" placeholder="Text input" value="<?php echo($folio); ?>">
                        <input type="text" class="form-control input-sm" id="idintegrante" name="idintegrante" style="display: none" placeholder="Text input" value="<?php echo($tdatinte['tidintegrante']); ?>">
                        <input type="text" class="form-control input-sm" id="edad" style="display: none" name="edad" placeholder="Text input" value="<?php echo($tdatinte['tedad']); ?>">
<!--fin para imprimir el folio y llevarlo-->
<!--inicio radio una sola seleccion-->


<!-- inicia form 1 -->
<form class="was-validated" id="form1">
<div class="form-row">

<!-- <form class="form-group" name="formulario" id="formulario"> -->
                <div class="row">
                    <div class="form-group form-group-sm">   
                        <div class="form-group  ">
                                              <div class="panel panel-primary">
                           <!-- Default panel contents -->
                           <div class="panel-heading">Mujeres del hogar</div>
                          <!-- <div class="panel-body">
                             <p><button class="btn btn-warning" <?php echo($disabled); ?> type="button" id="nintegrante" name="nintegrante" >Ingresar Nuevo Integrante</button></p>
                           </div> -->
                            <table class="table table-condensed">
                                <thead>
                                    <tr>
                                            <th>Folio</th>                                            
                                            <th>Documento</th>		
                                            <th>Nombre del integrante</th>
                                            <th><center>Madre</center></th>
                                            <th><center>Cantidad de Hijos</center></th>
                                            <th><center>Fecha de nacimiento del primer hijo</center></th>
                                            <th><center>Guardar</center></th>
                                            <th style="display: none"><center>Cancelar</center></th>
                                            
                                            
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

</div> 
</form>

<button class="btn btn-primary pull-left" type="button" id="volver" onclick="volverl1e1();" name="volver"><< Volver</button>
<button class="btn btn-primary pull-right" type="button" id="volver" onclick="valida_datos()" name="volver">Continuar >></button>
  
<!-- </form> -->

<!--Fin botonera guardar y actualizar NO TOCAR-->

               
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

        <script src="<?php echo BOOTSTRAP, 'js/jsdeshabilitarf12.js' ?>"></script>
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
        vc = []; // Definir vector js
        vc = <?php echo json_encode($vector) ?>; //Imprimr en vector del js lo q trae del vector php

      
                //esta funcion es para siguiente
                //si las preguntas son por hogar mandar idintegrante en 0
    /*            $("#volver").click(function ()
                {
                location.href = "../c_protocolol1e1/fc_protocolol1e1?folio="+ $('#folio').val() +"&idintegrante=0";                  
                });
    */   

		                           
    });
/////////////////////////////////////// FIN Funciones que llaman al controlador para guardar y actualizar////////////////////////////////////////////////////////////////////////     

function MadreSi(folio,idinte)
    {   
   // alert(idinte);

if( $('#madres'+idinte).val() == 1){
        $('#cantidadHijos'+idinte).prop('disabled', false);
        $('#fechaNacimiento'+idinte).prop('disabled', false);
				$('#GuardarInfo'+idinte).prop('disabled', true);

}else if($('#madres'+idinte).val() == 2 || $('#madres'+idinte).val() == 3){
        $('#cantidadHijos'+idinte).prop('disabled', true);
        $('#fechaNacimiento'+idinte).prop('disabled', true);
				$('#cantidadHijos'+idinte).val('');
        $('#fechaNacimiento'+idinte).val('');
				$('#GuardarInfo'+idinte).prop('disabled', false);

				
}else{
	      $('#cantidadHijos'+idinte).prop('disabled', true);
        $('#fechaNacimiento'+idinte).prop('disabled', true);
				$('#cantidadHijos'+idinte).val('');
        $('#fechaNacimiento'+idinte).val('');
				$('#GuardarInfo'+idinte).prop('disabled', true);
                $('#input'+idinte).val('');

}
        

    }


    function GuardarInfo(folio,idinte,docint)
    {  // alert(folio);alert(idinte);alert(docint);
       // alert($('#cantidadHijos'+idinte).val());
       // alert($('#fechaNacimiento'+idinte).val());
		//	  alert($('#madres'+idinte).val());


        $.ajax({
					url: "fc_actualizar",
					type: "GET",
					data: {vfolio : folio,
						vidintegrante : idinte,
						vmadre : $('#madres'+idinte).val(),
						vcantidadHijos :  $('#cantidadHijos'+idinte).val(),
						vfechaNacimiento :  $('#fechaNacimiento'+idinte).val()
					},    
					dataType: "html",
					success : function(obj){                      
					}
				});    

				$('#input'+idinte).val('1');

   new jBox('Notice', {
    title: 'Registro',
    content: 'Actualizado',
    color: 'green',
    animation: {open: 'flip', close: 'flip'},
    position: {x: 'center', y: 'center'},
    autoClose: 2000
   }); 
   $('#GuardarInfo' + idinte).prop('disabled', true);

   //     location.href = "../c_totalmadreshijos/fc_totalmadreshijos?folio="+ folio +"&idintegrante="+idinte;
    }


    function CancelarInfo(folio,idinte)
    {  // alert(folio);alert(idinte);

        $('#cantidadHijos'+idinte).val('');
        $('#fechaNacimiento'+idinte).val('');
				$('#madres'+idinte).val('');

        $('#cantidadHijos'+idinte).prop('disabled', true);
        $('#fechaNacimiento'+idinte).prop('disabled', true);
        $('#Si'+idinte).prop('disabled', false);

        $.ajax({
                          url: "fc_CancelarInfo",
                          type: "GET",
                          data: {vfolio : folio,
                                 vidintegrante : idinte,
                                },    
                          dataType: "html",
                          success : function(obj){                      
                          }
                        });    


   new jBox('Notice', {
    title: 'Registro',
    content: 'Eliminado',
    color: 'red',
    animation: {open: 'flip', close: 'flip'},
    position: {x: 'center', y: 'center'},
    autoClose: 2000
   }); 
   $('#GuardarInfo' + idinte).prop('disabled', true);
    }


    function volverl1e1()
   {
         location.href = "../c_protocolol1e1/fc_protocolol1e1?folio="+ $('#folio').val() +"&idintegrante=0";
   }


function valida_datos(){

  //  alert('entraa');
    var vacio = 0;
    for(var i = 0; i < vc.length; i++){

      //  alert(vc[i]);

        if($('#input'+vc[i]).val() == ''){

            vacio = 1;
            break;
        }else{
            vacio = 0;
        }


    }

    if(vacio == 1){

        //alert('diligenciar campos vacios');
				new jBox('Notice', {
    title: 'Faltan registros',
    content: 'Llenar toda la información',
    color: 'red',
    animation: {open: 'flip', close: 'flip'},
    position: {x: 'center', y: 'center'},
    autoClose: 2000
   });
    }else{
        //alert('todo esta bn');
         insertidpaso();
    }
   
}

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

















    function activarGuardar(id)
    {   
    //    alert(id + '????');
     //   $('#cantidadHijos'+idinte).prop('disabled', false);

      //  alert($('#cantidadHijos' + id).val());
     //   alert($('#fechaNacimiento' + id).val());
   //     location.href = "../c_totalmadreshijos/fc_totalmadreshijos?folio="+ folio +"&idintegrante="+idinte;
   if($('#cantidadHijos' + id).val() !== '' && $('#fechaNacimiento' + id).val() !== '')
    {
    $('#GuardarInfo' + id).prop('disabled', false);
    }
  
    } 






function soloNumerosE(e) 
{
//    alert('entro numeros'); 
//    alert(e);
var key = window.Event ? e.which : e.keyCode 
if ((key >= 48 && key <= 57) || (key==8)){}
else
{
   okletrasnum('Ingresa solo numeros!!!');
}
return ((key >= 48 && key <= 57) || (key==8)) 
}
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
    
</script>
</html>