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
            <?php echo($head1); ?>
<!-- fin head            -->

                <div  class="row">
                    <div class="col-md-10">
                    <h6>Folio: <small><?php echo($folio); ?></small></h6>
                    <h6>Documento: <small><?php echo($tdatinte['tdoc']); ?></small></h6>
                    <h6>IDintegrante: <small><?php echo($tdatinte['tidintegrante']); ?></small></h6>
                    <h6>Nombre: <small><?php echo($tdatinte['tnombre']); ?></small></h6>
                    <p class="text-right"><small>Te encuentras en la vista  <strong>CAPITULOS HOGAR</strong></small></p><br>
                    <!--<?php echo($testadocap3['tcap3']); ?>-->
                    </div>
                </div><br>
<!--para imprimir el folio y llevarlo-->
                        <input type="text" class="form-control input-sm" id="folio" name="folio" style="display: none" placeholder="Text input" value="<?php echo($folio); ?>">
                        <input type="text" class="form-control input-sm" id="idintegrante" name="idintegrante" style="display: none" placeholder="Text input" value="<?php echo($tdatinte['tidintegrante']); ?>"><br>
                        <input type="text" class="form-control input-sm" id="cap1" name="cap1" style="display: none"  placeholder="Text input" value="<?php echo($cap1); ?>">
                        <input type="text" class="form-control input-sm" id="cap2" name="cap2" style="display: none"  placeholder="Text input" value="<?php echo($c2); ?>">
                        <input type="text" class="form-control input-sm" id="cap3" name="cap3" style="display: none"  placeholder="Text input" value="<?php echo($c3); ?>">
                        <input type="text" class="form-control input-sm" id="cap6" name="cap6" style="display: none"  placeholder="Text input" value="<?php echo($c6); ?>">
                        <input type="text" class="form-control input-sm" id="cap11" name="cap11" style="display: none"  placeholder="Text input" value="<?php echo($c11); ?>">
                        <input type="text" class="form-control input-sm" id="cap11" name="cap11" style="display: none" placeholder="Text input" value="<?php echo($estado15fin); ?>">
                        
<!--fin para imprimir el folio y llevarlo-->
<!--inicio radio una sola seleccion-->
<form class="form-group col-md-12" name="formulario" id="formulario"> 
<div class="row">
    <div class="form-group form-group-sm">   
        <div class="form-group  ">
            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="heading1">
                      <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse1" aria-expanded="true" aria-controls="collapse1">
                            <button class="btn btn-xs" name="capitulo1" id="capitulo1"> Capítulo 1</button>&nbsp; Ubicación.
                        </a>
                      </h4>
                    </div>
                    <div id="collapse1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading1">
                      <div class="panel-body">
                        <table class="table table">
                                <tbody id='datos1'>
                                <?php  echo($datos1); ?>
                                </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="heading2">
                      <h4 class="panel-title">
                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse2" aria-expanded="false" aria-controls="collapse2">
                            <button class="btn btn-xs" name="capitulo2" id="capitulo2">Capítulo 2</button>&nbsp; Habitabilidad.
                        </a>
                      </h4>
                    </div>
                    <div id="collapse2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading2">
                      <div class="panel-body">
                        <table class="table table">
                                <tbody id='datos2'>
                                <?php  echo($datos2); ?>
                                </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="heading3">
                      <h4 class="panel-title">
                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse3" aria-expanded="false" aria-controls="collapse3">
                            <button class="btn btn-xs" name="capitulo3" id="capitulo3">Capítulo 3</button>&nbsp; Bancarización y Ahorro.
                        </a>
                      </h4>
                    </div>
                    <div id="collapse3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading3">
                      <div class="panel-body">
                        <table class="table table">
                                <tbody id='datos3'>
                                <?php  echo($datos3); ?>
                                </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                  <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="heading4">
                      <h4 class="panel-title">
                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse4" aria-expanded="false" aria-controls="collapse4">
                            <button class="btn btn-xs" id="capitulo6" name="capitulo6">Capítulo 6</button>&nbsp; Nutrición.
                        </a>
                      </h4>
                    </div>
                    <div id="collapse4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading4">
                      <div class="panel-body">
                        <table class="table table">
                                <tbody id='datos6'>
                                <?php  echo($datos6); ?>
                                </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                <div class="panel panel-default" >
                    <div class="panel-heading" role="tab" id="heading5">
                      <h4 class="panel-title">
                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse5" aria-expanded="false" aria-controls="collapse5">
                            <button class="btn btn-xs" id="capitulo11" name="capitulo11"  >Capítulo 11</button>&nbsp; Dinámica Familiar.
                        </a>
                      </h4>
                    </div>
                    <div id="collapse5" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading5">
                      <div class="panel-body">
                        <table class="table table">
                                <tbody id='datos11'>
                                <?php  echo($datos11); ?>
                                </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
            </div>
        </div>
    </div>
    </div> 
 
  </form>
<!--inicio botonera guardar y actualizar NO SE TOCA-->

                          
                          <div class="row">
                          <?php
                          if ($estado15fin == ''){
                          echo('<button class="btn btn-primary col-md-offset-0" type="button" id="volver" name="volver"><< Volver </button>');
                          echo('<button class="btn btn-primary col-md-offset-10" type="button" id="siguiente" name="siguiente"> Siguiente >></button>');
                          }
                          else{
                          echo('<button class="btn btn-primary col-md-offset-0" type="button" id="volver" name="volver"><< Volver </button>');
                          echo('<button class="btn btn-primary col-md-offset-10" type="button" id="siguiente" name="siguiente" disabled="disabled"> Siguiente >></button>');    
                          }
                          ?>
                          </div><br>
                                 
                             

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
        <link href="<?php echo JBOX, 'Source/jBox.css' ?>" rel="stylesheet">
<!--FIN ENLACES - NO TOCAR-->
    </body>


<script> 
    
    //color acordeon
   
   //color capitulo1
   if ($('#cap1').val() === '')
   {
       $('#capitulo1').addClass('btn-danger');
       $('#capitulo1').removeClass('btn-success');
   }
   else
   {
       $('#capitulo1').addClass('btn-success');
       $('#capitulo1').removeClass('btn-danger');
   }
   //fin color capitulo 1
   
   //inicio color capitulo 2
   
   
    if ($('#cap2').val() === '')
   {
       $('#capitulo2').addClass('btn-danger');
       $('#capitulo2').removeClass('btn-success');
   }
   else
   {
       $('#capitulo2').addClass('btn-success');
       $('#capitulo2').removeClass('btn-danger');
   }
   
   //fin color capitulo 2
   
    //inicio color capitulo 3
   
   
    if ($('#cap3').val() === '')
   {
       $('#capitulo3').addClass('btn-danger');
       $('#capitulo3').removeClass('btn-success');
   }
   else
   {
       $('#capitulo3').addClass('btn-success');
       $('#capitulo3').removeClass('btn-danger');
   }
   
   //fin color capitulo 3
   
    //inicio color capitulo 6
   
   
    if ($('#cap6').val() === '')
   {
       $('#capitulo6').addClass('btn-danger');
       $('#capitulo6').removeClass('btn-success');
   }
   else
   {
       $('#capitulo6').addClass('btn-success');
       $('#capitulo6').removeClass('btn-danger');
   }
   
   //fin color capitulo 6
   
   //inicio color capitulo 11
   
   
    if ($('#cap11').val() === '')
   {
       $('#capitulo11').addClass('btn-danger');
       $('#capitulo11').removeClass('btn-success');
   }
   else
   {
       $('#capitulo11').addClass('btn-success');
       $('#capitulo11').removeClass('btn-danger');
   }
   
   //fin color capitulo 11
 
    //fin color acordeon
    
    
    
// inicio cap 1    
    function c1p1(folio)
    { 
        location.href = "../c_c1p1ap12/fc_c1p1ap12?folio="+ folio +"&idintegrante=0";
    }
// fin cap 1
// inicio cap 2 
    function c2p1(folio)
    { 
        location.href = "../c_c2p1/fc_c2p1?folio="+ folio +"&idintegrante=0";
    }
    function c2p2(folio)
    { 
        location.href = "../c_c2p2/fc_c2p2?folio="+ folio +"&idintegrante=0";
    }
    function c2p3(folio)
    { 
        location.href = "../c_c2p3/fc_c2p3?folio="+ folio +"&idintegrante=0";
    }
    function c2p4(folio)
    { 
        location.href = "../c_c2p4/fc_c2p4?folio="+ folio +"&idintegrante=0";
    }
    function c2p5(folio)
    { 
        location.href = "../c_c2p5/fc_c2p5?folio="+ folio +"&idintegrante=0";
    }
    function c2p6(folio)
    { 
        location.href = "../c_c2p6/fc_c2p6?folio="+ folio +"&idintegrante=0";
    }
    function c2p7(folio)
    { 
        location.href = "../c_c2p7/fc_c2p7?folio="+ folio +"&idintegrante=0";
    }
    function c2p8(folio)
    { 
        location.href = "../c_c2p8/fc_c2p8?folio="+ folio +"&idintegrante=0";
    }
    function c2p9(folio)
    { 
        location.href = "../c_c2p9/fc_c2p9?folio="+ folio +"&idintegrante=0";
    }
    function c2p10(folio)
    { 
        location.href = "../c_c2p10/fc_c2p10?folio="+ folio +"&idintegrante=0";
    }
    function c2p11a(folio)
    { 
        location.href = "../c_c2p11/fc_c2p11?folio="+ folio +"&idintegrante=0";
    }
    function c2p12(folio)
    { 
        location.href = "../c_c2p12/fc_c2p12?folio="+ folio +"&idintegrante=0";
    }
    function c2p13(folio)
    { 
        location.href = "../c_c2p13/fc_c2p13?folio="+ folio +"&idintegrante=0";
    }
    function c2p13a(folio)
    { 
        location.href = "../c_c2p13a/fc_c2p13a?folio="+ folio +"&idintegrante=0";
    }
    function c2p13b(folio)
    { 
        location.href = "../c_c2p13b/fc_c2p13b?folio="+ folio +"&idintegrante=0";
    }
    function c2p14(folio)
    { 
        location.href = "../c_c2p14/fc_c2p14?folio="+ folio +"&idintegrante=0";
    }
    function c2p15(folio)
    { 
        location.href = "../c_c2p15/fc_c2p15?folio="+ folio +"&idintegrante=0";
    }
    function c2p16(folio)
    { 
        location.href = "../c_c2p16/fc_c2p16?folio="+ folio +"&idintegrante=0";
    }
    
// fin cap 2
// inicio cap 3 
    function c3p1(folio)
    { 
        location.href = "../c_c3p1/fc_c3p1?folio="+ folio +"&idintegrante=0";
    }
    function c3p1a(folio)
    { 
        location.href = "../c_c3p1a/fc_c3p1a?folio="+ folio +"&idintegrante=0";
    }
    function c3p2(folio)
    { 
        location.href = "../c_c3p2/fc_c3p2?folio="+ folio +"&idintegrante=0";
    }
    function c3p3(folio)
    { 
        location.href = "../c_c3p3/fc_c3p3?folio="+ folio +"&idintegrante=0";
    }
    function c3p4(folio)
    { 
        location.href = "../c_c3p4/fc_c3p4?folio="+ folio +"&idintegrante=0";
    }
    function c3p5(folio)
    { 
        location.href = "../c_c3p5/fc_c3p5?folio="+ folio +"&idintegrante=0";
    }
    function c3p6(folio)
    { 
        location.href = "../c_c3p6/fc_c3p6?folio="+ folio +"&idintegrante=0";
    }
    function c3p7(folio)
    { 
        location.href = "../c_c3p7/fc_c3p7?folio="+ folio +"&idintegrante=0";
    }
    function c3p8(folio)
    { 
        location.href = "../c_c3p8/fc_c3p8?folio="+ folio +"&idintegrante=0";
    }
    function c3p8a(folio)
    { 
        location.href = "../c_c3p8a/fc_c3p8a?folio="+ folio +"&idintegrante=0";
    }
// fin cap 3
// inicio cap 6
    function c6p1(folio)
    { 
        location.href = "../c_c6p1/fc_c6p1?folio="+ folio +"&idintegrante=0";
    }
    function c6p2(folio)
    { 
        location.href = "../c_c6p2/fc_c6p2?folio="+ folio +"&idintegrante=0";
    }
    function c6p3(folio)
    { 
        location.href = "../c_c6p3/fc_c6p3?folio="+ folio +"&idintegrante=0";
    }
    function c6p4(folio)
    { 
        location.href = "../c_c6p4/fc_c6p4?folio="+ folio +"&idintegrante=0";
    }
    function c6p5(folio)
    { 
        location.href = "../c_c6p5/fc_c6p5?folio="+ folio +"&idintegrante=0";
    }
    function c6p6(folio)
    { 
        location.href = "../c_c6p6/fc_c6p6?folio="+ folio +"&idintegrante=0";
    }
    function c6p7(folio)
    { 
        location.href = "../c_c6p7/fc_c6p7?folio="+ folio +"&idintegrante=0";
    }
    function c6p8(folio)
    { 
        location.href = "../c_c6p8/fc_c6p8?folio="+ folio +"&idintegrante=0";
    }
    function c6p9(folio)
    { 
        location.href = "../c_c6p9/fc_c6p9?folio="+ folio +"&idintegrante=0";
    }
    function c6p9m18(folio)
    { 
        location.href = "../c_c6menores18/fc_c6menores18?folio="+ folio +"&idintegrante=0";
    }
    function c6p10(folio)
    { 
        location.href = "../c_c6p10/fc_c6p10?folio="+ folio +"&idintegrante=0";
    }
    function c6p11a(folio)
    { 
        location.href = "../c_c6p11/fc_c6p11?folio="+ folio +"&idintegrante=0";
    }
    function c6p12(folio)
    { 
        location.href = "../c_c6p12/fc_c6p12?folio="+ folio +"&idintegrante=0";
    }
    function c6p13(folio)
    { 
        location.href = "../c_c6p13/fc_c6p13?folio="+ folio +"&idintegrante=0";
    }
    function c6p14(folio)
    { 
        location.href = "../c_c6p14/fc_c6p14?folio="+ folio +"&idintegrante=0";
    }
    function c6p15(folio)
    { 
        location.href = "../c_c6p15/fc_c6p15?folio="+ folio +"&idintegrante=0";
    }
    function c6p16(folio)
    { 
        location.href = "../c_c6p16/fc_c6p16?folio="+ folio +"&idintegrante=0";
    }
    function c6p17(folio)
    { 
        location.href = "../c_c6p17/fc_c6p17?folio="+ folio +"&idintegrante=0";
    }
    function c6p18(folio)
    { 
        location.href = "../c_c6p17a/fc_c6p17a?folio="+ folio +"&idintegrante=0";
    }
    function c6p18a(folio)
    { 
        location.href = "../c_c6p18/fc_c6p18?folio="+ folio +"&idintegrante=0";
    }
    function c6p19(folio)
    { 
        location.href = "../c_c6p19/fc_c6p19?folio="+ folio +"&idintegrante=0";
    }
// fin cap 6
// inicio cap 11
    function c11p1(folio)
    { 
        location.href = "../c_c11p1/fc_c11p1?folio="+ folio +"&idintegrante=0";
    }
    function c11p2(folio)
    { 
        location.href = "../c_c11p2/fc_c11p2?folio="+ folio +"&idintegrante=0";
    }
    function c11p3(folio)
    { 
        location.href = "../c_c11p3/fc_c11p3?folio="+ folio +"&idintegrante=0";
    }
    function c11p4(folio)
    { 
        location.href = "../c_c11p4/fc_c11p4?folio="+ folio +"&idintegrante=0";
    }
    function c11p5(folio)
    { 
        location.href = "../c_c11p5/fc_c11p5?folio="+ folio +"&idintegrante=0";
    }
    function c11p6(folio)
    { 
        location.href = "../c_c11p6/fc_c11p6?folio="+ folio +"&idintegrante=0";
    }
    function c11p7(folio)
    { 
        location.href = "../c_c11p7/fc_c11p7?folio="+ folio +"&idintegrante=0";
    }
    function c11p8(folio)
    { 
        location.href = "../c_c11p8/fc_c11p8?folio="+ folio +"&idintegrante=0";
    }
    function c11p9(folio)
    { 
        location.href = "../c_c11p9/fc_c11p9?folio="+ folio +"&idintegrante=0";
    }
    function c11p10(folio)
    { 
        location.href = "../c_c11p10/fc_c11p10?folio="+ folio +"&idintegrante=0";
    }
    function c11p11(folio)
    { 
        location.href = "../c_c11p11/fc_c11p11?folio="+ folio +"&idintegrante=0";
    }
    function c11p11a(folio)
    { 
        location.href = "../c_c11p11a/fc_c11p11a?folio="+ folio +"&idintegrante=0";
    }
    
// fin cap 11
    
     function colocaropcionintegrantesp1(opcion)
    {
        //alert(opcion);
        $('#valorintegrantesp1').val(opcion);
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
    
///////////////////////////////////////Funciones que llaman al controlador para guardar y actualizar////////////////////////////////////////////////////////////////////////    
    $(document).ready(function()
    {
                      
                
                $("#cerrarform").click(function()
                {
                   // alert('juapis');
                        $.ajax({
                          url: "fc_cerrarform",
                          type: "GET",
                          data: {vfolio: $('#folio').val(), vidpaso:1106 , vestado:1},
                          dataType: "html",
                          success: function(obj) {
                          //me llama el mensajito de actualizar
                          //$('#datos').html(obj);
                        location.href = "../c_protocolol1e1/fc_protocolol1e1?folio="+ $('#folio').val() +"&idintegrante="+$('#idintegrante').val()+"&doccogestor=1111";                  
                        }
                       });
                                            });

                //esta funcion es para siguiente
                //si las preguntas son por hogar mandar idintegrante en 0
                $("#siguiente").click(function ()
                {
                 
                 
                          $.ajax({
                          url: "fc_llenarcapitulosintegrante",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),
                          vidintegrante : $('#idintegrante').val()},    
                          dataType: "html",
                          success : function(obj){                      
                          //botonguardar();
                          location.href = "../c_totalintegrantes/fc_totalintegrantes?folio="+ $('#folio').val() +"&idintegrante=0";
                          }
                          });
     // alert('protocolo');
                 
                 
                 
                    
                   // alert('juapis');
                 
                    
                });
                //fin de la funcion siguiente
                
                
                $("#volver").click(function ()
                {
                   // alert('juapis');
                location.href = "../c_protocolol1e1/fc_protocolol1e1?folio="+ $('#folio').val() +"&idintegrante="+$('#idintegrante').val()+"&doccogestor=1111";                  
                });
                
                
               
    });
/////////////////////////////////////// FIN Funciones que llaman al controlador para guardar y actualizar////////////////////////////////////////////////////////////////////////        
</script>
</html>