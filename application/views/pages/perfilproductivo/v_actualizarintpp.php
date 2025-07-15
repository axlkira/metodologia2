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
            <?php echo($head44); ?>
<!-- fin head            -->

               <!-- <div  class="row">
                    <div class="col-md-10">
                    <h6>Folio: <small><?php echo($folio); ?></small></h6>
                    <h6>Documento: <small><?php echo($tdatinte['tdoc']); ?></small></h6>
                    <h6>IDintegrante: <small><?php echo($tdatinte['tidintegrante']); ?></small></h6>
                    <h6>Nombre: <small><?php echo($tdatinte['tnombre']); ?></small></h6>
                    <p class="text-right"><small>Te encuentras en el capitulo <strong>4. CARACTERISTICAS GENERALES (Integrantes)</strong></small></p><br>
                    </div>
                </div><br>-->
<!--para imprimir el folio y llevarlo-->
            <input type="text" class="form-control input-sm" id="doccogestor" name="doccogestor" style="display: none" placeholder="Text input" value="<?php echo($doccogestor);?>">
            <input type="text" class="form-control input-sm" id="folio" name="folio" style="display: none" placeholder="Text input" value="<?php echo($folio); ?>">
            <input type="text" class="form-control input-sm" id="idintegrante" name="idintegrante" style="display: none" placeholder="Text input" value="<?php echo($tdatinte['tidintegrante']); ?>">
            <input type="text" class="form-control input-sm" id="idestacion" name="idestacion" style="display: none" placeholder="Text input" value="<?php echo($idestacion); ?>">
            <br>
<!--fin para imprimir el folio y llevarlo-->
            <div  class="row col-md-10 col-md-offset-1"><br><br>
            <ul class="nav nav-tabs">
                <li role="presentation" ><a href="../c_actualizarpp/fc_actualizarpp?folio=<?php echo($folio);?>&idintegrante=0&idestacion=<?php echo($idestacion); ?>">Actualizar información general del hogar</a></li>
                <li role="presentation" class="active"><a href="#">Actualizar información general integrantes del hogar</a></li>
            </ul>
            </div><br><br>


<!--inicio radio una sola seleccion-->
<form class="form-group col-md-12 col-md-offset-1" name="formulario" id="formulario">
    <div class="row">
    <div class="form-group col-md-10 form-group-sm"><br><br>
        <!--<button class="btn btn-warning" type="button" id="nintegrante" name="nintegrante">Ingresar Nuevo Integrante</button><br><br>-->
        <div class="form-group  ">
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
                        <?php  echo($datos); ?>
                </tbody>
                                </table>

                            </div>
    </div>
    </div> 
 
<!--inicio botonera guardar y actualizar NO SE TOCA-->


<button class="btn btn-primary col-sm-offset-0" type="button" id="volver" name="volver"><< Volver </button>

  

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
    
    function edicionintepp(folio,idinte)
    { 
        location.href = "../c_aintegrantespp/fc_aintegrantespp?folio="+ folio +"&idintegrante="+idinte+"&doccogestor="+ $('#doccogestor').val()+"&idestacion="+ $('#idestacion').val(); 
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

                //esta funcion es para siguiente
                //si las preguntas son por hogar mandar idintegrante en 0
                $("#volver").click(function ()
                {
                   // alert('juapis');
                location.href = "../c_actualizarpp/fc_actualizarpp?folio="+ $('#folio').val() + "&idintegrante=0"+ "&doccogestor=" + $('#doccogestor').val()+ "&idestacion=" + $('#idestacion').val();                  
                });
                
                $("#fintegrante").click(function ()
                {
                   // alert('Seguro que deseas guardar estos');
                location.href = "../c_capitulosintegrantes/fc_capitulosintegrantes?folio="+ $('#folio').val() +"&idintegrante=0";              
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
                location.href = "../c_capitulos/fc_vercapitulos?folio="+ $('#folio').val();                  
                });
                //fin voler a capitulos                     
                                    
    });
/////////////////////////////////////// FIN Funciones que llaman al controlador para guardar y actualizar////////////////////////////////////////////////////////////////////////        
</script>
</html>