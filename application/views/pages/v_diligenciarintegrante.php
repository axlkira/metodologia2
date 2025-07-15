<!DOCTYPE html>
<html lang="es">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <title><?php echo $titulo ?>  </title>
        <link rel="stylesheet" href="<?php echo BOOTSTRAP, 'css/bootstrap1.min.css'; ?>" >
        <meta charset="utf-8">
        <meta http-equiv="Content-Language" content="es"/>

    </head>
    <body onload="validarcapinte(<?php echo $total; ?>)">  
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
<!--                    <p class="text-right"><small>Te encuentras en el capitulo <strong>4. CARACTERISTICAS GENERALES (Integrantes)</strong></small></p><br>-->
                    </div>
                </div><br>
<!--para imprimir el folio y llevarlo-->
                        <input type="text" class="form-control input-sm" id="folio" name="folio" style="display: none" placeholder="Text input" value="<?php echo($folio); ?>">
                        <input type="text" class="form-control input-sm" id="idintegrante" name="idintegrante" style="display: none" placeholder="Text input" value="<?php echo($tdatinte['tidintegrante']); ?>"><br>
<!--                        <input type="text" class="form-control input-sm" id="estadointe" name="estadointe"   placeholder="Text input" value="<?php echo($foexiste['eestadointe']); ?>">-->
<!--fin para imprimir el folio y llevarlo-->
<!--inicio radio una sola seleccion-->
<form class="form-group" name="formulario" id="formulario">
                <div class="row">
                    <div class="form-group form-group-sm">   
                        <div class="form-group  ">
                                              <div class="panel panel-primary">
                           <!-- Default panel contents -->
                           <div class="panel-heading">Integrantes del hogar</div>
                           <div class="panel-body">
                             <p>Por favor clic para iniciar el formulario por integrante</p>
                           </div>
                            <table class="table table-condensed">
                                <thead>
                                    <tr>
                                            <th>Folio</th>                                            
                                            <th>Documento</th>		
                                            <th>Primer Nombre</th>
                                            <th>Segundo Nombre</th>
                                            <th>Primer Apellido </th>
                                            <th>Segundo Apellido</th>
                                            <th>Editar</th>
                                            
                                            
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

                          <div class="row">
                          <?php
                          if ($estadofin['eestadofin']=='1'){
                          echo('<button class="btn btn-primary col-sm-offset-0" type="button" id="volver" name="volver"><< Volver a Capitulos Hogar</button>');?> &nbsp; <?php
                          echo('<button class="btn btn-primary col-sm-offset-0" type="button" id="volverintegrante" name="volverintegrante"><< Editar Integrante</button>');?> &nbsp; <?php
                          echo('<button class="btn btn-warning col-md-offset-6" type="button" id="cerrar" name="cerrar"><< Cerrar Formulario >></button>');
                          }
                          else{
                          echo('<button class="btn btn-primary col-sm-offset-0" type="button" id="volver" name="volver"><< Volver a Capitulos Hogar</button>');?> &nbsp; <?php
                          echo('<button class="btn btn-primary col-sm-offset-0" type="button" id="volverintegrante" name="volverintegrante"><< Editar Integrante</button>');?> &nbsp; <?php
                          echo('<button class="btn btn-warning col-md-offset-6" type="button" disabled="" id="cerrar" name="cerrar"><< Cerrar Formulario >></button>');
                          }
                          ?>
                          </div>


<!--<button class="btn btn-primary col-sm-offset-0" type="button" id="volver" name="volver"><< Volver a Capitulos Hogar</button>
<button class="btn btn-primary col-sm-offset-0" type="button" id="volverintegrante" name="volverintegrante"><< Editar Integrante</button>-->






  

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
//Funcion para validar capitulos completos e incpmpletos por integrante
    
    function validarcapinte(total){
        
        var i = 1;
        
        while (total !== 0) {
           pintarboton(i);             
          total--;
          i++;
        }
    }
    
    function pintarboton(idintegrante){
       
        
        $.ajax({
                          url: "fc_validar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(), vidintegrante : $('#' + idintegrante).val()},
                          dataType: "html",
                          success : function(obj){                      
                            
                           actualizarinte(obj,idintegrante);
			 if (obj == '0') {$('#cerrar').prop('disabled', true);}
                          }
                        });   
    }
    
    function actualizarinte(estado,idintegrante){
        
        $.ajax({
                          url: "fc_actualizarestadoint",
                          type: "GET",
                           data: {
                               vfolio : $('#folio').val(),
                               vidintegrante : $('#' + idintegrante).val(),
                               vestadointe : estado},
                          dataType: "html",
                          success : function(obj){  
                           $('#datos').html(obj);
                          }
                        });
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
        
        //alert($('#' + campo).val());
    }
    //fin funcion nos permite guardar el valor de una opcion de seleccion multiple
    
    function realizarintegrante(folio,idinte)
    { 
        location.href = "../c_capitulosintegrante/fc_capitulosintegrante?folio="+ folio +"&idintegrante="+idinte;
        
    }
    
     function colocaropcionintegrantesp1(opcion)
    {
        //alert(opcion);
        $('#valorintegrantesp1').val(opcion);
    }
    
    //ESTO ES PA LAS BOLITAS esta funcion nos permite guardar el valor de una opcion unico
    function colocaropcionc9op2(opcion)
    {
        //alert(opcion);
        $('#valorc9op2').val(opcion);
    }
    
     function colocaropcionc9op3(opcion)
    {
        //alert(opcion);
        $('#valorc9op3').val(opcion);
    }
    
     function colocaropcionc9op4(opcion)
    {
        //alert(opcion);
        $('#valorc9op4').val(opcion);
    }
    
    function colocaropcionc9op5(opcion)
    {
        //alert(opcion);
        $('#valorc9op5').val(opcion);
    }
    //fin funcion nos permite guardar el valor de una opcion unico
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
//        
        
       //
                //esta funcion es para guardar
                $("#guardar").click(function ()
                {
                   // alert('juapis');
                        $.ajax({
                          url: "fc_insertar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(), vidintegrante : $('#idintegrante').val(),vtdocumento : $('#tdocumento').val(),vndocumento : $('#ndocumento').val(),vpnombre : $('#pnombre').val(),vsnombre : $('#snombre').val(),vpapellido : $('#papellido').val(),vsapellido : $('#sapellido').val(),
                              vfnacimiento : $('#fnacimiento').val(),vsexo : $('#sexo').val(),vedad : $('#edad').val(),vtelefono : $('#telefono').val(),vcelular : $('#celular').val(),vcorreo : $('#correo').val(),vtwitter : $('#twitter').val(),vfacebook : $('#facebook').val(),vinstagram: $('#instagram').val(),vgoogle : $('#google').val()},
                          dataType: "html",
                          success : function(obj){                      
                          okguardar();//me llama el mensajito de guardar
                            //$('#datos').html(obj);
                          //location.reload();
                       
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
                           data: {vfolio : $('#folio').val(), vidintegrante : $('#idintegrante').val(),vtdocumento : $('#tdocumento').val(),vndocumento : $('#ndocumento').val(),vpnombre : $('#pnombre').val(),vsnombre : $('#snombre').val(),vpapellido : $('#papellido').val(),vsapellido : $('#sapellido').val(),
                              vfnacimiento : $('#fnacimiento').val(),vsexo : $('#sexo').val(),vedad : $('#edad').val(),vtelefono : $('#telefono').val(),vcelular : $('#celular').val(),vcorreo : $('#correo').val(),vtwitter : $('#twitter').val(),vfacebook : $('#facebook').val(),vinstagram: $('#instagram').val(),vgoogle : $('#google').val()},
                          dataType: "html",
                          success : function(obj){                      
                          okactualizar();//me llama el mensajito de actualizar
                            //$('#datos').html(obj);
                          }
                        });                    
                });
                
                //fin de la funcion actualizar
                
                //esta funcion es para cerrar formulario, paso 6 de L1 estación 1
                $("#cerrar").click(function ()
                {
                    //alert('test');
                        $.ajax({
                          url: "fc_cerrarpaso",
                          type: "GET",
                          data: {vfolio: $('#folio').val(), vidpaso: 1106, vestado:1},
                          dataType: "html",
                          success: function(obj) {
                        location.href = "../c_protocolol1e1/fc_protocolol1e1?folio="+ $('#folio').val() +"&idintegrante=0";      
                        }
                     });
                });
                //fin esta funcion es para cerrar formulario, paso 6 de L1 estación 1
                

                //esta funcion es para siguiente
                //si las preguntas son por hogar mandar idintegrante en 0
                $("#volverintegrante").click(function ()
                {
                // alert('juapis');
                location.href = "../c_totalintegrantes/fc_totalintegrantes?folio="+ $('#folio').val() +"&idintegrante=0";                  
                });
                
                
                $("#volver").click(function ()
                {
                   // alert('juapis');
                location.href = "../c_capituloshogar/fc_capituloshogar?folio="+ $('#folio').val() +"&idintegrante=0";             
                });
                
                $("#fintegrante").click(function ()
                {
                   // alert('Seguro que deseas guardar estos');
                location.href = "../c_capitulosintegrante/fc_capitulosintegrante?folio="+ $('#folio').val() +"&idintegrante=0";              
                });
                //fin de la funcion atras
                
                
                 $("#nintegrante").click(function ()
                {
                   // alert('juapis');
                location.href = "../c_integrantes/fc_integrantes?folio="+ $('#folio').val() +"&idintegrante="+"&idintegrante=0";              
                });
                
               //NO TOCAR - voler a capitulos                
                $("#capitulos").click(function ()
                {
                   // alert('juapis');
                location.href = "../c_capitulosintegrante/fc_capitulosintegrante?folio="+ $('#folio').val() + "&idintegrante=" + $('#idintegrnte').val() ;                  
                });
                //fin voler a capitulos                     
                                    
    });
/////////////////////////////////////// FIN Funciones que llaman al controlador para guardar y actualizar////////////////////////////////////////////////////////////////////////        

//windows.onload();
</script>
</html>