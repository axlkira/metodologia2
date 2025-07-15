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
                        
                        <input type="text" class="form-control input-sm" id="cap5i" name="cap5i" style="display: none"  placeholder="Text input" value="<?php echo($cap51); ?>">
                        <input type="text" class="form-control input-sm" id="cap7i" name="cap7i" style="display: none"  placeholder="Text input" value="<?php echo($cap71); ?>">
                        <input type="text" class="form-control input-sm" id="cap8i" name="cap8i" style="display: none"  placeholder="Text input" value="<?php echo($cap81); ?>">
<!--                        <input type="text" class="form-control input-sm" id="cap9ki" name="cap9ki" style="display: none"  placeholder="Text input" value="<?php echo($cap9k1); ?>">-->
<!--                        <input type="text" class="form-control input-sm" id="cap9i" name="cap9i" style="display: none"  placeholder="Text input" value="<?php echo($cap91); ?>">-->
                        <input type="text" class="form-control input-sm" id="cap9li" name="cap9li" style="display: none"  placeholder="Text input" value="<?php echo($cap9l1); ?>">
                        <input type="text" class="form-control input-sm" id="cap9mi" name="cap9mi" style="display: none"  placeholder="Text input" value="<?php echo($cap9m1); ?>">
                        <input type="text" class="form-control input-sm" id="cap9ni" name="cap9ni" style="display: none"  placeholder="Text input" value="<?php echo($cap9n1); ?>">
                        <input type="text" class="form-control input-sm" id="cap9pi" name="cap9pi" style="display: none"  placeholder="Text input" value="<?php echo($cap9p1); ?>">
                        <input type="text" class="form-control input-sm" id="cap9qi" name="cap9qi" style="display: none"  placeholder="Text input" value="<?php echo($cap9q1); ?>">
                        <input type="text" class="form-control input-sm" id="cap9ri" name="cap9ri" style="display: none"  placeholder="Text input" value="<?php echo($cap9r1); ?>">
<!--                        <input type="text" class="form-control input-sm" id="cap10i" name="cap10i" style="display: none"  placeholder="Text input" value="<?php echo($cap101); ?>">
                        <input type="text" class="form-control input-sm" id="cap11i" name="cap11i" style="display: none"  placeholder="Text input" value="<?php echo($cap111); ?>">-->
<!--                        <input type="text" class="form-control input-sm" id="cap12i" name="cap12i" style="display: none"  placeholder="Text input" value="<?php echo($cap121); ?>">-->
<!--fin para imprimir el folio y llevarlo-->
<!--inicio radio una sola seleccion-->
<form class="form-group col-md-12" name="formulario" id="formulario"> 
<div class="row">
    <div class="form-group form-group-sm">   
        <div class="form-group  ">
            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                  <div class="panel  panel-default" style="display: none">
                    <div class="panel-heading" role="tab" id="heading1">
                      <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse1" aria-expanded="true" aria-controls="collapse1">
                            
                            <button class="btn btn-xs" id="capitulo4i" name="capitulo4i"  >Capítulo 4</button>&nbsp; Caracteristicas generales.
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
                          
                          <button class="btn btn-xs" id="capitulo5i" name="capitulo5i"  >Capitulo 5</button>&nbsp; Salud
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
                         
                         <button class="btn btn-xs" id="capitulo7i" name="capitulo7i"  >Capitulo 7</button>&nbsp; Cuidado de menores.
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
                    
                         <button class="btn btn-xs" id="capitulo8i" name="capitulo8i"  >Capítulo 8</button>&nbsp;  Educación.
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
               
                
                <div class="panel panel-default" style="display: none">
                    <div class="panel-heading" role="tab" id="heading4">
                      <h4 class="panel-title">
                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse7" aria-expanded="false" aria-controls="collapse7">
                         
                         <button class="btn btn-xs" id="capitulo9ki" name="capitulo9ki"  >Capítulo 9K</button>&nbsp;   Capacitación para el trabajo
                        </a>
                      </h4>
                    </div>
                    <div id="collapse7" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading7">
                      <div class="panel-body">
                        <table class="table table">
                                <tbody id='datos7'>
                                <?php  echo($datos7); ?>
                                </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="heading8">
                      <h4 class="panel-title">
                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse8" aria-expanded="false" aria-controls="collapse8">
                         
                         <button class="btn btn-xs" id="capitulo9li" name="capitulo9li"  >Capítulo 9L</button>&nbsp;  Fuerza de Trabajo.
                        </a>
                      </h4>
                    </div>
                    <div id="collapse8" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading8">
                      <div class="panel-body">
                        <table class="table table">
                                <tbody id='datos8'>
                                <?php  echo($datos8); ?>
                                </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                
                 <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="heading11">
                      <h4 class="panel-title">
                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse11" aria-expanded="false" aria-controls="collapse11">
                         
                         <button class="btn btn-xs" id="capitulo9mi" name="capitulo9mi"  >Capítulo 9M</button>&nbsp;  Ocupados.
                        </a>
                      </h4>
                    </div>
                    <div id="collapse11" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading11">
                      <div class="panel-body">
                        <table class="table table">
                                <tbody id='datos11'>
                                <?php  echo($datos11); ?>
                                </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                 <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="heading12">
                      <h4 class="panel-title">
                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse12" aria-expanded="false" aria-controls="collapse12">
                     
                         <button class="btn btn-xs" id="capitulo9ni" name="capitulo9ni"  >Capítulo 9N</button>&nbsp;  Desocupados.
                        </a>
                      </h4>
                    </div>
                    <div id="collapse12" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading12">
                      <div class="panel-body">
                        <table class="table table">
                                <tbody id='datos12'>
                                <?php  echo($datos12); ?>
                                </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                
                 
               
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="heading10">
                      <h4 class="panel-title">
                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse10" aria-expanded="false" aria-controls="collapse10">
                         
                         <button class="btn btn-xs" id="capitulo9pi" name="capitulo9pi"  >Capítulo 9P</button>&nbsp;  Otros ingresos.
                        </a>
                      </h4>
                    </div>
                    <div id="collapse10" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading10">
                      <div class="panel-body">
                        <table class="table table">
                                <tbody id='datos10'>
                                <?php  echo($datos10); ?>
                                </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                
                       
                 <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="heading13">
                      <h4 class="panel-title">
                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse13" aria-expanded="false" aria-controls="collapse13">
                         
                         <button class="btn btn-xs" id="capitulo9qi" name="capitulo9qi"  >Capítulo 9Q</button>&nbsp;  Perfil Productivo.
                        </a>
                      </h4>
                    </div>
                    <div id="collapse13" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading13">
                      <div class="panel-body">
                        <table class="table table">
                                <tbody id='datos13'>
                                <?php  echo($datos13); ?>
                                </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="heading15">
                      <h4 class="panel-title">
                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse15" aria-expanded="false" aria-controls="collapse15">
                       
                         <button class="btn btn-xs" id="capitulo9ri" name="capitulo9ri"  >Capítulo 9R</button>&nbsp;  Trabajo Infantil.
                        </a>
                      </h4>
                    </div>
                    <div id="collapse15" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading15">
                      <div class="panel-body">
                        <table class="table table">
                                <tbody id='datos15'>
                                <?php  echo($datos15); ?>
                                </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                <div class="panel panel-default"  style="display: none">
                    <div class="panel-heading" role="tab" id="heading5">
                      <h4 class="panel-title">
                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse5" aria-expanded="false" aria-controls="collapse5">
                      
                          <button class="btn btn-xs" id="capitulo10i" name="capitulo10i"  >Capítulo 10</button>&nbsp; Acceso a la justicia.
                        </a>
                      </h4>
                    </div>
                    <div id="collapse5" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading8">
                      <div class="panel-body">
                        <table class="table table">
                                <tbody id='datos5'>
                                <?php  echo($datos5); ?>
                                </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                <div class="panel panel-default" style="display: none">
                    <div class="panel-heading" role="tab" id="heading6">
                      <h4 class="panel-title">
                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse6" aria-expanded="false" aria-controls="collapse6">
                       
                           <button class="btn btn-xs" id="capitulo11i" name="capitulo11i"  >Capítulo 11</button>&nbsp; Dinámica Familiar.
                        </a>
                      </h4>
                    </div>
                    <div id="collapse6" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading6">
                      <div class="panel-body">
                        <table class="table table">
                                <tbody id='datos5'>
                                <?php  echo($datos6); ?>
                                </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                
                
                 <div class="panel panel-default"  style="display: none">
                    <div class="panel-heading" role="tab" id="heading14">
                      <h4 class="panel-title">
                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse14" aria-expanded="false" aria-controls="collapse14">
                      
                              <button class="btn btn-xs" id="capitulo12i" name="capitulo12i"  >Capítulo 12</button>&nbsp; Discapacidad.
                        </a>
                      </h4>
                    </div>
                    <div id="collapse14" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading14">
                      <div class="panel-body">
                        <table class="table table">
                                <tbody id='datos14'>
                                <?php  echo($datos14); ?>
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
   
   //color boton capitulo 9k 
   if ($('#cap9ki').val() === '')
   {
       $('#capitulo9ki').addClass('btn-danger');
       $('#capitulo9ki').removeClass('btn-success');
   }
   else
   {
       $('#capitulo9ki').addClass('btn-success');
       $('#capitulo9ki').removeClass('btn-danger');
   }
   // fin color boton cap 9k
   
   //color boton capitulo 9l 
   if ($('#cap9li').val() === '')
   {
       $('#capitulo9li').addClass('btn-danger');
       $('#capitulo9li').removeClass('btn-success');
   }
   else
   {
       $('#capitulo9li').addClass('btn-success');
       $('#capitulo9li').removeClass('btn-danger');
   }
   // fin color boton cap 9l
   
   //color boton capitulo 9m 
   if ($('#cap9mi').val() === '')
   {
       $('#capitulo9mi').addClass('btn-danger');
       $('#capitulo9mi').removeClass('btn-success');
   }
   else
   {
       $('#capitulo9mi').addClass('btn-success');
       $('#capitulo9mi').removeClass('btn-danger');
   }
   // fin color boton cap 9m
   
 //color boton capitulo 9n 
   if ($('#cap9ni').val() === '')
   {
       $('#capitulo9ni').addClass('btn-danger');
       $('#capitulo9ni').removeClass('btn-success');
   }
   else
   {
       $('#capitulo9ni').addClass('btn-success');
       $('#capitulo9ni').removeClass('btn-danger');
   }
   // fin color boton cap 9n
   // 
   // //color boton capitulo 9p 
   if ($('#cap9pi').val() === '')
   {
       $('#capitulo9pi').addClass('btn-danger');
       $('#capitulo9pi').removeClass('btn-success');
   }
   else
   {
       $('#capitulo9pi').addClass('btn-success');
       $('#capitulo9pi').removeClass('btn-danger');
   }
   // fin color boton cap 9p
   
   // //color boton capitulo 9q 
   if ($('#cap9qi').val() === '')
   {
       $('#capitulo9qi').addClass('btn-danger');
       $('#capitulo9qi').removeClass('btn-success');
   }
   else
   {
       $('#capitulo9qi').addClass('btn-success');
       $('#capitulo9qi').removeClass('btn-danger');
   }
   // fin color boton cap 9q
   
   // //color boton capitulo 9r 
   if ($('#cap9ri').val() === '')
   {
       $('#capitulo9ri').addClass('btn-danger');
       $('#capitulo9ri').removeClass('btn-success');
   }
   else
   {
       $('#capitulo9ri').addClass('btn-success');
       $('#capitulo9ri').removeClass('btn-danger');
   }
   // fin color boton cap 9r
   
   //color boton capitulo 10
   if ($('#cap10i').val() === '')
   {
       $('#capitulo10i').addClass('btn-danger');
       $('#capitulo10i').removeClass('btn-success');
   }
   else
   {
       $('#capitulo10i').addClass('btn-success');
       $('#capitulo10i').removeClass('btn-danger');
   }
   // fin color boton cap 10
   
    //color boton capitulo 11
   if ($('#cap11i').val() === '')
   {
       $('#capitulo11i').addClass('btn-danger');
       $('#capitulo11i').removeClass('btn-success');
   }
   else
   {
       $('#capitulo11i').addClass('btn-success');
       $('#capitulo11i').removeClass('btn-danger');
   }
   // fin color boton cap 11
   
   //color boton capitulo 12
   if ($('#cap12i').val() === '')
   {
       $('#capitulo12i').addClass('btn-danger');
       $('#capitulo12i').removeClass('btn-success');
   }
   else
   {
       $('#capitulo12i').addClass('btn-success');
       $('#capitulo12i').removeClass('btn-danger');
   }
   // fin color boton cap 11
    
    //fin colores botones
    
    
    
// inicio cap 4   
    function c4p7(folio,idintegrante)
    { 
        location.href = "../c_c4p7/fc_c4p7?folio="+ folio +"&idintegrante="+ idintegrante;
    }

    function c4p8(folio,idintegrante)
    { 
        location.href = "../c_c4p8/fc_c4p8?folio="+ folio +"&idintegrante="+ idintegrante;
    }
    function c4p9(folio,idintegrante)
    { 
        location.href = "../c_c4p9/fc_c4p9?folio="+ folio +"&idintegrante="+ idintegrante;
    }
    function c4p10(folio,idintegrante)
    { 
        location.href = "../c_c4p10/fc_c4p10?folio="+ folio +"&idintegrante="+ idintegrante;
    }
    function c4p11(folio,idintegrante)
    { 
       location.href = "../c_c4p11/fc_c4p11?folio="+ folio +"&idintegrante="+ idintegrante;
    }
    function c4p12(folio,idintegrante)
    { 
        location.href = "../c_c4p12/fc_c4p12?folio="+ folio +"&idintegrante="+ idintegrante;
    }
    function c4p13(folio,idintegrante)
    { 
         location.href = "../c_c4p13/fc_c4p13?folio="+ folio +"&idintegrante="+ idintegrante;
    }
    function c4p14(folio,idintegrante)
    { 
        location.href = "../c_c4p14/fc_c4p14?folio="+ folio +"&idintegrante="+ idintegrante;
    }
    
//  fin cap4  

//    inicio cap 5
    function c5p1(folio,idintegrante)
    { 
        location.href = "../c_c5p1intermedia/fc_c5p1intermedia?folio="+ folio +"&idintegrante="+ idintegrante;
    }
    function c5pextra(folio,idintegrante)
    { 
        location.href = "../c_c5pextraintermedia/fc_c5pextraintermedia?folio="+ folio +"&idintegrante="+ idintegrante;
    }
    function c5p2(folio,idintegrante)
    { 
        location.href = "../c_c5p2/fc_c5p2?folio="+ folio +"&idintegrante="+ idintegrante;
    }
    function c5p3(folio,idintegrante)
    { 
        location.href = "../c_c5p3/fc_c5p3?folio="+ folio +"&idintegrante="+ idintegrante;
    }
    function c5p4(folio,idintegrante)
    { 
        location.href = "../c_c5p4/fc_c5p4?folio="+ folio +"&idintegrante="+ idintegrante;
    }
    function c5p5(folio,idintegrante)
    { 
        location.href = "../c_c5p5/fc_c5p5?folio="+ folio +"&idintegrante="+ idintegrante;
    }
    function c5p6(folio,idintegrante)
    { 
        location.href = "../c_c5p6/fc_c5p6?folio="+ folio +"&idintegrante="+ idintegrante;
    }
    function c5p7(folio,idintegrante)
    { 
        location.href = "../c_c5p7/fc_c5p7?folio="+ folio +"&idintegrante="+ idintegrante;
    }
    function c5p8(folio,idintegrante)
    { 
        location.href = "../c_c5p8/fc_c5p8?folio="+ folio +"&idintegrante="+ idintegrante;
    }
    function c5p9(folio,idintegrante)
    { 
        location.href = "../c_c5p9/fc_c5p9?folio="+ folio +"&idintegrante="+ idintegrante;
    }

    function c5p10(folio,idintegrante)
    { 
        location.href = "../c_c5p10/fc_c5p10?folio="+ folio +"&idintegrante="+ idintegrante;
    }
    function c5p11(folio,idintegrante)
    { 
        location.href = "../c_c5p11/fc_c5p11?folio="+ folio +"&idintegrante="+ idintegrante;
    }
    function c5p12(folio,idintegrante)
    { 
        location.href = "../c_c5p12/fc_c5p12?folio="+ folio +"&idintegrante="+ idintegrante;
    }
    function c5p12o1(folio,idintegrante)
    { 
        location.href = "../c_c5p121/fc_c5p121?folio="+ folio +"&idintegrante="+ idintegrante;
    }
    
    function c5p13(folio,idintegrante)
    { 
        location.href = "../c_c5p13/fc_c5p13?folio="+ folio +"&idintegrante="+ idintegrante;
    }
    function c5p13o1(folio,idintegrante)
    { 
        location.href = "../c_c5p131/fc_c5p131?folio="+ folio +"&idintegrante="+ idintegrante;
    }
    
    function c5p14(folio,idintegrante)
    { 
        location.href = "../c_c5p14/fc_c5p14?folio="+ folio +"&idintegrante="+ idintegrante;
    }
    
    
//    fin cap 5

//inicio cap 7
function c7p1(folio,idintegrante)
    { 
        location.href = "../c_c7p1intermedia/fc_c7p1intermedia?folio="+ folio +"&idintegrante="+ idintegrante;
    }
   
    
    //    fin cap 7
    
    
//    inicio cap 8
function c8p1(folio,idintegrante)
    { 
        location.href = "../c_c8p1intermedia/fc_c8p1intermedia?folio="+ folio +"&idintegrante="+ idintegrante;
    }
    function c8p2(folio,idintegrante)
    { 
        location.href = "../c_c8p2intermedia/fc_c8p2intermedia?folio="+ folio +"&idintegrante="+ idintegrante;
    }
    function c8p3(folio,idintegrante)
    { 
        location.href = "../c_c8p3intermedia/fc_c8p3intermedia?folio="+ folio +"&idintegrante="+ idintegrante;
    }
    function c8p4(folio,idintegrante)
    { 
        location.href = "../c_c8p4intermedia/fc_c8p4intermedia?folio="+ folio +"&idintegrante="+ idintegrante;
    }
    function c8p5(folio,idintegrante)
    { 
        location.href = "../c_c8p5/fc_c8p5?folio="+ folio +"&idintegrante="+ idintegrante;
    }
    function c8p6(folio,idintegrante)
    { 
        location.href = "../c_c8p6/fc_c8p6?folio="+ folio +"&idintegrante="+ idintegrante;
    }
    function c8p7(folio,idintegrante)
    { 
        location.href = "../c_c8p7/fc_c8p7?folio="+ folio +"&idintegrante="+ idintegrante;
    }
    function c8p8(folio,idintegrante)
    { 
        location.href = "../c_c8p8/fc_c8p8?folio="+ folio +"&idintegrante="+ idintegrante;
    }
//    fin cap 8

//inicio cap 9

    function c9lp1(folio,idintegrante)
    { 
        location.href = "../c_c9p3intermedia/fc_c9p3intermedia?folio="+ folio +"&idintegrante="+ idintegrante;
    }
    function c9lp2(folio,idintegrante)
    { 
        location.href = "../c_c9p4intermedia/fc_c9p4intermedia?folio="+ folio +"&idintegrante="+ idintegrante;
    }
    function c9lp3(folio,idintegrante)
    { 
        location.href = "../c_c9p5/fc_c9p5?folio="+ folio +"&idintegrante="+ idintegrante;
    }
    function c9lp4(folio,idintegrante)
    { 
        location.href = "../c_c9p6/fc_c9p6?folio="+ folio +"&idintegrante="+ idintegrante;
    }
    
    
    //inicio capitulo 9m
    function c9mp1(folio,idintegrante)
    { 
        location.href = "../c_c9p7intermedia/fc_c9p7intermedia?folio="+ folio +"&idintegrante="+ idintegrante;
    }
    function c9mp2(folio,idintegrante)
    { 
        location.href = "../c_c9p8intermedia/fc_c9p8intermedia?folio="+ folio +"&idintegrante="+ idintegrante;
    }
    function c9mp3(folio,idintegrante)
    { 
        location.href = "../c_c9p10intermedia/fc_c9p10intermedia?folio="+ folio +"&idintegrante="+ idintegrante;
    }
    function c9mp4(folio,idintegrante)
    { 
        location.href = "../c_c9p11intermedia/fc_c9p11intermedia?folio="+ folio +"&idintegrante="+ idintegrante;
    }

    function c9mp5(folio,idintegrante)
    { 
        location.href = "../c_c9p12intermedia/fc_c9p12intermedia?folio="+ folio +"&idintegrante="+ idintegrante;
    }
    function c9mp6(folio,idintegrante)
    { 
        location.href = "../c_c9p13intermedia/fc_c9p13intermedia?folio="+ folio +"&idintegrante="+ idintegrante;
    }
    function c9mp7(folio,idintegrante)
    { 
        location.href = "../c_c9p14intermedia/fc_c9p14intermedia?folio="+ folio +"&idintegrante="+ idintegrante;
    }
    function c9mp8(folio,idintegrante)
    { 
        location.href = "../c_c9p16intermedia/fc_c9p16intermedia?folio="+ folio +"&idintegrante="+ idintegrante;
    }
    
    function c9mp9(folio,idintegrante)
    { 
        location.href = "../c_c9p19intermedia/fc_c9p19intermedia?folio="+ folio +"&idintegrante="+ idintegrante;
    }
    
    function c9mp10(folio,idintegrante)
    { 
        location.href = "../c_c9p20intermedia/fc_c9p20intermedia?folio="+ folio +"&idintegrante="+ idintegrante;
    }
    
    function c9mp11(folio,idintegrante)
    { 
        location.href = "../c_c9p21intermedia/fc_c9p21intermedia?folio="+ folio +"&idintegrante="+ idintegrante;
    }
    
    function c9mp12(folio,idintegrante)
    { 
        location.href = "../c_c9p23intermedia/fc_c9p23intermedia?folio="+ folio +"&idintegrante="+ idintegrante;
    }
    
//     function c9mp13(folio,idintegrante)
//    { 
//        location.href = "../c_c9p24intermedia/fc_c9p24intermedia?folio="+ folio +"&idintegrante="+ idintegrante;
//    }
//    
//     function c9mp14(folio,idintegrante)
//    { 
//        location.href = "../c_c9p20/fc_c9p20?folio="+ folio +"&idintegrante="+ idintegrante;
//    }
//    
//     function c9mp15(folio,idintegrante)
//    { 
//        location.href = "../c_c9p21/fc_c9p21?folio="+ folio +"&idintegrante="+ idintegrante;
//    }
//    
//     function c9mp16(folio,idintegrante)
//    { 
//        location.href = "../c_c9p22/fc_c9p22?folio="+ folio +"&idintegrante="+ idintegrante;
//    }
//    
//     function c9mp17(folio,idintegrante)
//    { 
//        location.href = "../c_c9p23/fc_c9p23?folio="+ folio +"&idintegrante="+ idintegrante;
//    }
//    
    function cnp1(folio,idintegrante)
    { 
        location.href = "../c_c9p24intermedia/fc_c9p24intermedia?folio="+ folio +"&idintegrante="+ idintegrante;
    }
    
    function cnp2(folio,idintegrante)
    { 
        location.href = "../c_c9p25intermedia/fc_c9p25intermedia?folio="+ folio +"&idintegrante="+ idintegrante;
    }
    
    
    
    function c9pp1(folio,idintegrante)
    { 
        location.href = "../c_c9p26intermedia/fc_c9p26intermedia?folio="+ folio +"&idintegrante="+ idintegrante;
    }
    
    function c9pp2(folio,idintegrante)
    { 
        location.href = "../c_c9p27intermedia/fc_c9p27intermedia?folio="+ folio +"&idintegrante="+ idintegrante;
    }
    
    function c9pp3(folio,idintegrante)
    { 
        location.href = "../c_c9p28intermedia/fc_c9p28intermedia?folio="+ folio +"&idintegrante="+ idintegrante;
    }
    
    function c9pp4(folio,idintegrante)
    { 
        location.href = "../c_c9p29intermedia/fc_c9p29intermedia?folio="+ folio +"&idintegrante="+ idintegrante;
    }
    
    
    
    function cqp1(folio,idintegrante)
    { 
        location.href = "../c_c9p30intermedia/fc_c9p30intermedia?folio="+ folio +"&idintegrante="+ idintegrante;
    }
    
    function cqp2(folio,idintegrante)
    { 
        location.href = "../c_c9p31intermedia/fc_c9p31intermedia?folio="+ folio +"&idintegrante="+ idintegrante;
    }
    
    function cqp3(folio,idintegrante)
    { 
        location.href = "../c_c9p32intermedia/fc_c9p32intermedia?folio="+ folio +"&idintegrante="+ idintegrante;
    }
    
    function cqp4(folio,idintegrante)
    { 
        location.href = "../c_c9p33intermedia/fc_c9p33intermedia?folio="+ folio +"&idintegrante="+ idintegrante;
    }
    
    function cqp5(folio,idintegrante)
    { 
        location.href = "../c_c9p34intermedia/fc_c9p34intermedia?folio="+ folio +"&idintegrante="+ idintegrante;
    }
    
    function cqp6(folio,idintegrante)
    { 
        location.href = "../c_c9p35intermedia/fc_c9p35intermedia?folio="+ folio +"&idintegrante="+ idintegrante;
    }
    
    function cqp7(folio,idintegrante)
    { 
        location.href = "../c_c9p36intermedia/fc_c9p36intermedia?folio="+ folio +"&idintegrante="+ idintegrante;
    }
//    fin cap9

//   inicio cap 9r

    function crp1(folio,idintegrante)
    { 
        location.href = "../c_c9p37intermedia/fc_c9p37intermedia?folio="+ folio +"&idintegrante="+ idintegrante;
    }
    
    function crp2(folio,idintegrante)
    { 
        location.href = "../c_c9p38intermedia/fc_c9p38intermedia?folio="+ folio +"&idintegrante="+ idintegrante;
    }
    
    function crp3(folio,idintegrante)
    { 
        location.href = "../c_c9p39intermedia/fc_c9p39intermedia?folio="+ folio +"&idintegrante="+ idintegrante;
    }
    
    function crp4(folio,idintegrante)
    { 
        location.href = "../c_c9p40intermedia/fc_c9p40intermedia?folio="+ folio +"&idintegrante="+ idintegrante;
    }
    
    function crp5(folio,idintegrante)
    { 
        location.href = "../c_c9p41intermedia/fc_c9p41intermedia?folio="+ folio +"&idintegrante="+ idintegrante;
    }
    
    function crp6(folio,idintegrante)
    { 
        location.href = "../c_c9p42intermedia/fc_c9p42intermedia?folio="+ folio +"&idintegrante="+ idintegrante;
    }
    
    function crp7(folio,idintegrante)
    { 
        location.href = "../c_c9p43intermedia/fc_c9p43intermedia?folio="+ folio +"&idintegrante="+ idintegrante;
    }

//fin capitulo 9r

//inicio cap 10
    function c10p1(folio,idintegrante)
    { 
        location.href = "../c_c10p1/fc_c10p1?folio="+ folio +"&idintegrante="+ idintegrante;
    }
    function c10p2(folio,idintegrante)
    { 
        location.href = "../c_c10p2/fc_c10p2?folio="+ folio +"&idintegrante="+ idintegrante;
    }
    function c10p3(folio,idintegrante)
    { 
        location.href = "../c_c10p3/fc_c10p3?folio="+ folio +"&idintegrante="+ idintegrante;
    }
    function c10p4(folio,idintegrante)
    { 
        location.href = "../c_c10p4/fc_c10p4?folio="+ folio +"&idintegrante="+ idintegrante;
    }
    function c10p5(folio,idintegrante)
    { 
        location.href = "../c_c10p5/fc_c10p5?folio="+ folio +"&idintegrante="+ idintegrante;
    }
    function c10p6(folio,idintegrante)
    { 
        location.href = "../c_c10p6/fc_c10p6?folio="+ folio +"&idintegrante="+ idintegrante;
    }
    function c10p7(folio,idintegrante)
    { 
        location.href = "../c_c10p7/fc_c10p7?folio="+ folio +"&idintegrante="+ idintegrante;
    }
    
//    fin cap 10

//inicio cap 11
    function c11p16(folio,idintegrante)
    { 
        location.href = "../c_c11p12/fc_c11p12?folio="+ folio +"&idintegrante="+ idintegrante;
    }
    function c11p17(folio,idintegrante)
    { 
        location.href = "../c_c11p12a/fc_c11p12a?folio="+ folio +"&idintegrante="+ idintegrante;
    }
    function c11p18(folio,idintegrante)
    { 
        location.href = "../c_c11p12b/fc_c11p12b?folio="+ folio +"&idintegrante="+ idintegrante;
    }
    function c11p19(folio,idintegrante)
    { 
        location.href = "../c_c11p12c/fc_c11p12c?folio="+ folio +"&idintegrante="+ idintegrante;
    }
    function c11p20(folio,idintegrante)
    { 
        location.href = "../c_c11p12d/fc_c11p12d?folio="+ folio +"&idintegrante="+ idintegrante;
    }
    function c11p21(folio,idintegrante)
    { 
        location.href = "../c_c11p13/fc_c11p13?folio="+ folio +"&idintegrante="+ idintegrante;
    }
    function c11p22(folio,idintegrante)
    { 
        location.href = "../c_c11p14/fc_c11p14?folio="+ folio +"&idintegrante="+ idintegrante;
    }
    
     function c11p23(folio,idintegrante)
    { 
        location.href = "../c_c11p15/fc_c11p15?folio="+ folio +"&idintegrante="+ idintegrante;
    }
    
//    fin cap 11
    
 
// inicio cap 12
 function c12p1(folio,idintegrante)
    { 
        location.href = "../c_c12p1/fc_c12p1?folio="+ folio +"&idintegrante="+ idintegrante;
    }
    function c12p2(folio,idintegrante)
    { 
        location.href = "../c_c12p2/fc_c12p2?folio="+ folio +"&idintegrante="+ idintegrante;
    }
    function c12p3(folio,idintegrante)
    { 
        location.href = "../c_c12p3/fc_c12p3?folio="+ folio +"&idintegrante="+ idintegrante;
    }
    function c12p4(folio,idintegrante)
    { 
        location.href = "../c_c12p4/fc_c12p4?folio="+ folio +"&idintegrante="+ idintegrante;
    }
//fin cap 12
    
    
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
                               location.href = "../c_diligenciarintegranteintermedia/fc_diligenciarintegranteintermedia?folio="+ $('#folio').val()  +"&idintegrante=0" +"&variable=81" ;  
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

</script>
</html>