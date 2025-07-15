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
                    <p class="text-right"><small>Te encuentras en la vista  <strong>CAPITULOS INTEGRANTE</strong></small></p><br>
                    <!--<?php echo($testadocap3['tcap3']); ?>-->
                    </div>
                </div><br>
<!--para imprimir el folio y llevarlo-->
                        <input type="text" class="form-control input-sm" id="estadointe" name="estadointe"  style="display: none" placeholder="Text input" value="<?php echo($carrayrespuestas['eestadointe']); ?>">
                        <input type="text" class="form-control input-sm" id="totalcap" name="totalcap" style="display: none"   placeholder="Text input" value="<?php echo($totalcap); ?>">
                        <input type="text" class="form-control input-sm" id="folio" name="folio" style="display: none" placeholder="Text input" value="<?php echo($folio); ?>">
                        <input type="text" class="form-control input-sm" id="idintegrante" name="idintegrante" style="display: none" placeholder="Text input" value="<?php echo($tdatinte['tidintegrante']); ?>"><br>
                        <input type="text" class="form-control input-sm" id="cap4i" name="cap4i" style="display: none"  placeholder="Text input" value="<?php echo($cap11); ?>">
                        <input type="text" class="form-control input-sm" id="cap5i" name="cap5i" style="display: none"  placeholder="Text input" value="<?php echo($cap51); ?>">
                        <input type="text" class="form-control input-sm" id="cap7i" name="cap7i" style="display: none"  placeholder="Text input" value="<?php echo($cap71); ?>">
                        <input type="text" class="form-control input-sm" id="cap8i" name="cap8i" style="display: none"  placeholder="Text input" value="<?php echo($cap81); ?>">
                        
<!--                        <input type="text" class="form-control input-sm" id="cap9i" name="cap9i" style="display: none"  placeholder="Text input" value="<?php echo($cap91); ?>">-->
                        
                        
                        
                  
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
                            
                            <button class="btn btn-xs" id="capitulo4i" name="capitulo4i"  >Capítulo 1</button>&nbsp; INFORMACIÓN BÁSICA
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
                          
                          <button class="btn btn-xs" id="capitulo5i" name="capitulo5i"  >Capitulo 2</button>&nbsp;  FORMACIÓN PARA EL EMPLEO/ EDUCACIÓN SUPERIOR
                        </a>
                      </h4>
                    </div>
                    <div id="collapse2" class="panel-collapse collapse " role="tabpanel" aria-labelledby="heading2">
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
                         
                         <button class="btn btn-xs" id="capitulo7i" name="capitulo7i"  >Capitulo 3</button>&nbsp;EMPLEABILIDAD Y VINCULACIÓN LABORAL
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
                    
                         <button class="btn btn-xs" id="capitulo8i" name="capitulo8i"  >Capítulo 4</button>&nbsp;CREACIÓN Y/O FORTALECIMIENTO UNIDADES DE NEGOCIO Y EMPRENDIMIENTO
                        </a>
                      </h4>
                    </div>
                    <div id="collapse4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading4">
                      <div class="panel-body">
                        <table class="table table">
                                <tbody id='datos4'>
                                <?php  echo($datos4); ?>
                                </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
               
                
                
            </div>
        </div>
    </div>
    </div> 
 
 <button class="btn btn-primary col-md-offset-0" type="button" id="volver" name="volver"><< Volver </button>
<!--inicio botonera guardar y actualizar NO SE TOCA-->

<!--                          
                          <div class="row">
                          <?php
                          if ($testadocap11['tcap11']=='1'){
                          echo('<button class="btn btn-primary col-md-offset-0" type="button" id="volver" name="volver"><< Volver </button>');
                          echo('<button class="btn btn-primary col-md-offset-8" type="button" id="siguiente" name="siguiente"> Siguiente >></button>');
                          }
                          else{
                          echo('<button class="btn btn-primary col-md-offset-0" type="button" id="volver" name="volver"><< Volver </button>');
                          echo('<button class="btn btn-primary col-md-offset-8" type="button" id="siguiente" name="siguiente" disabled=""> Siguiente >></button>');    
                          }
                          ?>
                          </div><br>-->
                                 
                             

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
    //inicio de colores de los botones de capitulo
    //color botoncapitulo 4
    if ($('#cap4i').val() === '')
   {
       $('#capitulo4i').addClass('btn-danger');
       $('#capitulo4i').removeClass('btn-success');
   }
   else
   {
       $('#capitulo4i').addClass('btn-success');
       $('#capitulo4i').removeClass('btn-danger');
   }
   //fin color boton capitulo 4
   //color boton capitulo 5 
   if ($('#cap5i').val() === '')
   {
       $('#capitulo5i').addClass('btn-danger');
       $('#capitulo5i').removeClass('btn-success');
   }
   else
   {
       $('#capitulo5i').addClass('btn-success');
       $('#capitulo5i').removeClass('btn-danger');
   }
   // fin color boton cap 5
   
   //color boton capitulo 7 
   if ($('#cap7i').val() === '')
   {
       $('#capitulo7i').addClass('btn-danger');
       $('#capitulo7i').removeClass('btn-success');
   }
   else
   {
       $('#capitulo7i').addClass('btn-success');
       $('#capitulo7i').removeClass('btn-danger');
   }
   // fin color boton cap 7
   
   //color boton capitulo 8 
   if ($('#cap8i').val() === '')
   {
       $('#capitulo8i').addClass('btn-danger');
       $('#capitulo8i').removeClass('btn-success');
   }
   else
   {
       $('#capitulo8i').addClass('btn-success');
       $('#capitulo8i').removeClass('btn-danger');
   }
   // fin color boton cap 8
    //fin colores botones
// inicio cap 4   
    function c4p7(folio,idintegrante)
    { 
        location.href = "../c_ppc1p2n3/fc_ppc1p2n3?folio="+ folio +"&idintegrante="+ idintegrante;
    }
    function c4p8(folio,idintegrante)
    { 
        location.href = "../c_ppc1p2n5/fc_ppc1p2n5?folio="+ folio +"&idintegrante="+ idintegrante;
    }
    function c4p9(folio,idintegrante)
    { 
       location.href = "../c_ppc1p2n7/fc_ppc1p2n7?folio="+ folio +"&idintegrante="+ idintegrante;
    }
    function c4p10(folio,idintegrante)
    { 
        location.href = "../c_ppc1p3n1/fc_ppc1p3n1?folio="+ folio +"&idintegrante="+ idintegrante;
    }
    function c4p11(folio,idintegrante)
    { 
        location.href = "../c_ppc1p3n2/fc_ppc1p3n2?folio="+ folio +"&idintegrante="+ idintegrante;
    }
    function c4p12(folio,idintegrante)
    { 
       location.href = "../c_ppc1p4n1/fc_ppc1p4n1?folio="+ folio +"&idintegrante="+ idintegrante;
    }
    function c4p13(folio,idintegrante)
    { 
        location.href = "../c_ppc1p4n6/fc_ppc1p4n6?folio="+ folio +"&idintegrante="+ idintegrante;
    }
    function c4p14(folio,idintegrante)
    { 
         location.href = "../c_ppc1p4n7/fc_ppc1p4n7?folio="+ folio +"&idintegrante="+ idintegrante;
    }
    function c4p15(folio,idintegrante)
    { 
        location.href = "../c_ppc1p5n1/fc_ppc1p5n1?folio="+ folio +"&idintegrante="+ idintegrante;
    }
    
    
//  fin cap4  

//    inicio cap 5
    function c5p1(folio,idintegrante)
    { 
        location.href = "../c_ppc2p1/fc_ppc2p1?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
    }
    function c5p13o1(folio,idintegrante)
    { 
      location.href = "../c_ppc2p2/fc_ppc2p2?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
    }
//    fin cap 5

//inicio cap 7
function c7p1(folio,idintegrante)
    { 
       location.href = "../c_ppc3p1/fc_ppc3p1?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
    }
    function c7p2(folio,idintegrante)
    { 
        location.href = "../c_ppc3p2/fc_ppc3p2?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
    }
    function c7p3(folio,idintegrante)
    { 
       location.href = "../c_ppc3p3a/fc_ppc3p3a?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
    }
    function c7p3c(folio,idintegrante)
    { 
        location.href = "../c_ppc3p3c/fc_ppc3p3c?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
    }
    function c7p4(folio,idintegrante)
    { 
         location.href = "../c_ppc3p3e/fc_ppc3p3e?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
    }
    function c7p5(folio,idintegrante)
    { 
         location.href = "../c_ppc3p4/fc_ppc3p4?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
    }
    
    //    fin cap 7
    
    
//    inicio cap 8
function c8p1(folio,idintegrante)
    { 
        location.href = "../c_ppc4p1/fc_ppc4p1?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
    }
    function c8p2(folio,idintegrante)
    { 
        location.href = "../c_ppc4p1a1/fc_ppc4p1a1?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
    }
    function c8p3(folio,idintegrante)
    { 
        location.href = "../c_ppc4p2/fc_ppc4p2?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
    }
    function c8p4(folio,idintegrante)
    { 
       location.href = "../c_ppc4p3/fc_ppc4p3?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
    }
    function c8p5(folio,idintegrante)
    { 
        location.href = "../c_ppc4p3a/fc_ppc4p3a?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
    }
    function c8p6(folio,idintegrante)
    { 
        location.href = "../c_ppc4p4/fc_ppc4p4?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
    }
    function c8p7(folio,idintegrante)
    { 
        location.href = "../c_ppc4p5/fc_ppc4p5?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
    }
    function c8p8(folio,idintegrante)
    { 
       location.href = "../c_ppc4p6/fc_ppc4p6?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
    }

    function c8p9(folio,idintegrante)
    { 
       location.href = "../c_ppc4p6a/fc_ppc4p6a?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
    }
    function c8p10(folio,idintegrante)
    { 
        location.href = "../c_ppc4p7/fc_ppc4p7?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
    }
    function c8p11(folio,idintegrante)
    { 
        location.href = "../c_ppc4p8/fc_ppc4p8?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
    }
    function c8p12(folio,idintegrante)
    { 
        location.href = "../c_ppc4p9/fc_ppc4p9?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
    }
    function c8p13(folio,idintegrante)
    { 
       location.href = "../c_ppc4p10/fc_ppc4p10?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
    }
    function c8p14(folio,idintegrante)
    { 
        location.href = "../c_ppc4p11/fc_ppc4p11?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
    }
    function c8p15(folio,idintegrante)
    { 
        location.href = "../c_ppc4p11a/fc_ppc4p11a?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
    }
    function c8p16(folio,idintegrante)
    { 
        location.href = "../c_ppc4p12/fc_ppc4p12?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
    }
    function c8p17(folio,idintegrante)
    { 
        location.href = "../c_ppc4p13/fc_ppc4p13?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
    }
    function c8p18(folio,idintegrante)
    { 
        location.href = "../c_ppc4p13a/fc_ppc4p13a?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
    }

    function c8p19(folio,idintegrante)
    { 
        location.href = "../c_ppc4p14/fc_ppc4p14?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
    }
    
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
           if ($('#totalcap').val()=== '1')
           {
               $('#estadointe').val(1) ;
           }
           else
           {
               $('#estadointe').val(0) ;
           }
                
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
               
                $("#volver").click(function ()
                {
                    
                    
                    
                         $.ajax({
                          url: "fc_actualizarestadoint",
                          type: "GET",
                           data: {
                               vfolio : $('#folio').val(),
                               vidintegrante : $('#idintegrante').val(),
                               vestadointe : $('#estadointe').val()},
                          dataType: "html",
                          success : function(obj){  
                               location.href = "../c_ppdiligenciarintegrante/fc_ppdiligenciarintegrante?folio="+ $('#folio').val()  +"&idintegrante=0" ;  
//                          okactualizar();//me llama el mensajito de actualizar
                            //$('#datos').html(obj);
                           
                            //alert('cambio fecha de nacimiento y sexo')
                          }
                        });
                    
//                    else
//                    {
//                        location.href = "../c_diligenciarintegrante/fc_diligenciarintegrante?folio="+ $('#folio').val()  +"&idintegrante=0" ;
//                    }
                  
                  
                   // alert('juapis');
//                location.href = "../c_diligenciarintegrante/fc_diligenciarintegrante?folio="+ $('#folio').val()  +"&idintegrante=0" ;    
                
//                 location.href = "../c_diligenciarintegrante/fc_diligenciarintegrante?folio="+ $('#folio').val() + "&idintegrante=" +"&idintegrante=0"  + "&totalcap=" + $('#totalcap').val(); 
                });
                
                
               
    });
/////////////////////////////////////// FIN Funciones que llaman al controlador para guardar y actualizar////////////////////////////////////////////////////////////////////////        


window.onload = estadointe;

function estadointe(){
     $.ajax({
                          url: "fc_actualizarestadoint",
                          type: "GET",
                           data: {
                               vfolio : $('#folio').val(),
                               vidintegrante : $('#idintegrante').val(),
                               vestadointe : $('#estadointe').val()},
                          dataType: "html",
                          success : function(obj){  
                             //  location.href = "../c_diligenciarintegrante/fc_diligenciarintegrante?folio="+ $('#folio').val()  +"&idintegrante=0" ;  
//                          okactualizar();//me llama el mensajito de actualizar
                            //$('#datos').html(obj);
                           
                            //alert('cambio fecha de nacimiento y sexo')
                          }
                        });
                    
}
</script>

</html>