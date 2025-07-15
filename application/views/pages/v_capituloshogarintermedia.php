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
                        
                        <input type="text" class="form-control input-sm" id="cap2" name="cap2" style="display: none"  placeholder="Text input" value="<?php echo($c2); ?>">
                        
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

 <div class="modal fade" id="modalcontinuar8104" data-backdrop="static" >
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
<!--          <span aria-hidden="true">&times;</span>-->
        </button>
      </div>
      <div class="modal-body">
        <p>Por favor , presionar Clic en el boton continuar.</p>
      </div>
      <div class="modal-footer">
          <button type="button" id="continuar8104"  class="btn btn-primary">Continuar</button>
<!--        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>-->
      </div>
    </div>
  </div>
</div>

<!--inicio botonera guardar y actualizar NO SE TOCA-->

                          
                          <div class="row">
                          <?php
                          if ($estado15fin == ''){
                          echo('<button class="btn btn-primary col-md-offset-0" type="button" id="volver" name="volver"><< Volver </button>');
                          echo('<button class="btn btn-primary col-md-offset-10" onclick="modalcontinuar8104()" type="button" id="siguiente" name="siguiente"> Cerrar formulario >></button>');
                          }
                          else{
                          echo('<button class="btn btn-primary col-md-offset-0" type="button" id="volver" name="volver"><< Volver </button>');
                          echo('<button class="btn btn-primary col-md-offset-10" onclick="modalcontinuar8104()" type="button" id="siguiente" name="siguiente" disabled="disabled"> Cerrar formulario >></button>');    
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
    
    
       function modalcontinuar8104() 
{
$('#modalcontinuar8104').modal();
}
   
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
        location.href = "../c_c2p1intermedia/fc_c2p1intermedia?folio="+ folio +"&idintegrante=0";
    }
    function c2p2(folio)
    { 
        location.href = "../c_c2p2intermedia/fc_c2p2intermedia?folio="+ folio +"&idintegrante=0";
    }
    function c2p3(folio)
    { 
        location.href = "../c_c2p5intermedia/fc_c2p5intermedia?folio="+ folio +"&idintegrante=0";
    }
    function c2p4(folio)
    { 
        location.href = "../c_c2p7intermedia/fc_c2p7intermedia?folio="+ folio +"&idintegrante=0";
    }
    function c2p5(folio)
    { 
        location.href = "../c_c2p8intermedia/fc_c2p8intermedia?folio="+ folio +"&idintegrante=0";
    }
    function c2p6(folio)
    { 
        location.href = "../c_c2p9intermedia/fc_c2p9intermedia?folio="+ folio +"&idintegrante=0";
    }
    function c2p7(folio)
    { 
        location.href = "../c_c2p11intermedia/fc_c2p11intermedia?folio="+ folio +"&idintegrante=0";
    }
    
// fin cap 2

// inicio cap 6
    function c6p1(folio)
    { 
        location.href = "../c_c6p10intermedia/fc_c6p10intermedia?folio="+ folio +"&idintegrante=0";
    }
    function c6p2(folio)
    { 
        location.href = "../c_c6p11intermedia/fc_c6p11intermedia?folio="+ folio +"&idintegrante=0";
    }
    function c6p3(folio)
    { 
        location.href = "../c_c6p12intermedia/fc_c6p12intermedia?folio="+ folio +"&idintegrante=0";
    }
    function c6p4(folio)
    { 
        location.href = "../c_c6p13intermedia/fc_c6p13intermedia?folio="+ folio +"&idintegrante=0";
    }
    function c6p5(folio)
    { 
       location.href = "../c_c6p14intermedia/fc_c6p14intermedia?folio="+ folio +"&idintegrante=0";
    }
    function c6p6(folio)
    { 
        location.href = "../c_c6p15intermedia/fc_c6p15intermedia?folio="+ folio +"&idintegrante=0";
    }
    
// fin cap 6
// inicio cap 11
    function c11p1(folio)
    { 
        location.href = "../c_c11p11intermedia/fc_c11p11intermedia?folio="+ folio +"&idintegrante=0";
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
                      
                
//                $("#cerrarform").click(function()
//                {
//                   // alert('juapis');
//                        $.ajax({
//                          url: "fc_cerrarform",
//                          type: "GET",
//                          data: {vfolio: $('#folio').val(), vidpaso:1106 , vestado:1},
//                          dataType: "html",
//                          success: function(obj) {
//                          //me llama el mensajito de actualizar
//                          //$('#datos').html(obj);
//                        location.href = "../c_protocolol1e1/fc_protocolol1e1?folio="+ $('#folio').val() +"&idintegrante="+$('#idintegrante').val()+"&doccogestor=1111";                  
//                        }
//                       });
//                                            });

                //esta funcion es para siguiente
                //si las preguntas son por hogar mandar idintegrante en 0
                $("#siguiente").click(function ()
                {        $.ajax({
                         url: "fc_cerrarform",
                          type: "GET",
                         data: {vfolio: $('#folio').val(), vidpaso: 8104, vestado:1},
                         dataType: "html",
                          success : function(obj){                      
                          botonactualizar();
                          }
                        }); 
       
     // alert('protocolo');
     
     
     
                   // alert('juapis');
                 
                    
                });
                //fin de la funcion siguiente
                
                
                $("#volver").click(function ()
                {
                   // alert('juapis');
                location.href = "../c_protocolointermedia/fc_protocolointermedia?folio="+ $('#folio').val() +"&idintegrante=0";                  
                });
                
                
                 $("#continuar8104").click(function ()
                {
                   // alert('juapis');
                location.href = "../c_protocolointermedia/fc_protocolointermedia?folio="+ $('#folio').val() +"&idintegrante=0";                  
                });
                
                
               
    });
/////////////////////////////////////// FIN Funciones que llaman al controlador para guardar y actualizar////////////////////////////////////////////////////////////////////////        
</script>
</html>