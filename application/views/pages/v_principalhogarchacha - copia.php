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
        <!-- Modal EERF-->
        <div class="modal fade" id="myModalEERF" role="dialog" >
    <div class="modal-dialog modal-lg" style=" width: 80% !important;">
    
    
      <div class="modal-content">
          <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Escala de Evaluación de las Relaciones Familiares</h4>
              <br>
              <div class="row">
                  <div class="col-md-8">
              <h5><b>Nombre: </b></h5><p class="category" id="nombretitular"></p>
              </div>
                  <div class="col-md-4">
              <h5><b>Folio: </b></h5><p class="category" id="foliotitular"></p>
                  </div>
              </div>
          </div>
          <div class="modal-body">
              <div class="row" style="font-size: 15px">
                            <div class="col-md-6">
                                <div class="text-center">
                                    <h4 style="background-color: #00620C;color: #ffffff"> COMUNICACIÓN FAMILIAR</h4>
                                </div>
                                <div class="card-content table-responsive">
                                    <table class="table table-hover">
                                        <thead>
                                        <th></th>    
                                        <th class="text-center"><b>Puntaje Directo</b></th>
                                        <th class="text-center"><b>Centil</b></th>
                                        <th class="text-center"><b>Interpretación</b></th>

                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><b>Evaluación 1</b></td>
                                                <td class="text-center" id ="totalcomunicacion1"></td>
                                                <td class="text-center" id="centilcomunicacion1"></td>
                                                <td class="text-center" id="interpretacioncomunicacion1"></td>

                                            </tr>
                                            <tr>
                                                <td><b>Evaluación 2</b></td>
                                                <td class="text-center" id ="totalcomunicacion2"></td>
                                                <td class="text-center" id="centilcomunicacion2"></td>
                                                <td class="text-center" id="interpretacioncomunicacion2"></td>

                                            </tr>
                                             <tr style="background-color: #00620C;color: #ffffff">
                                                <td><b>RESULTADO</b></td>
                                                <td class="text-center"></td>
                                                <td class="text-center"></td>
                                                <td class="text-center" id="mensajecomunicacion"></td>

                                            </tr>


                                        </tbody>

                                    </table>
                                   
                                </div>                      
                            </div>
                            
                            <div class="col-md-6">
                                <div class="text-center">
                                    <h4 style="background-color: #003399;color: #ffffff"> CONVIVENCIA FAMILIAR</h4>
                                </div>
                                <div class="card-content table-responsive">
                                    <table class="table table-hover">
                                        <thead>
                                        <th></th>    
                                        <th class="text-center"><b>Puntaje Directo</b></th>
                                        <th class="text-center"><b>Centil</b></th>
                                        <th class="text-center"><b>Interpretación</b></th>

                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><b>Evaluación 1</b></td>
                                                <td class="text-center" id="totalconvivencia1"></td>
                                                <td class="text-center" id="centilconvivencia1"></td>
                                                <td class="text-center" id="interpretacionconvivencia1"></td>

                                            </tr>
                                            <tr>
                                                <td><b>Evaluación 2</b></td>
                                                <td class="text-center" id="totalconvivencia2"></td>
                                                <td class="text-center" id="centilconvivencia2"></td>
                                                <td class="text-center" id="interpretacionconvivencia2"></td>

                                            </tr>
                                            <tr style="background-color: #003399;color: #ffffff">
                                                <td><b>RESULTADO</b></td>
                                                <td class="text-center"></td>
                                                <td class="text-center"></td>
                                                <td class="text-center" id="mensajeconvivencia"></td>

                                            </tr>


                                        </tbody>

                                    </table>
                                    
                                    
                                </div>                      
                            </div>

                        </div>
              <hr>
                        <div class="row" style="font-size: 15px">
                            <div class="col-md-6">
                                <div class="text-center">
                                    <h4 style="background-color: #d58512;color: #ffffff"> AFECTIVIDAD FAMILIAR</h4>
                                </div>
                                <div class="card-content table-responsive">
                                    <table class="table table-hover">
                                        <thead>
                                        <th></th>    
                                        <th class="text-center"><b>Puntaje Directo</b></th>
                                        <th class="text-center"><b>Centil</b></th>
                                        <th class="text-center"><b>Interpretación</b></th>

                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><b>Evaluación 1</b></td>
                                                <td class="text-center" id="totalafectividad1"></td>
                                                <td class="text-center" id="centilafectividad1"></td>
                                                <td class="text-center" id="interpretacionafectividad1"></td>

                                            </tr>
                                            <tr>
                                                <td><b>Evaluación 2</b></td>
                                                <td class="text-center" id="totalafectividad2"></td>
                                                <td class="text-center" id="centilafectividad2"></td>
                                                <td class="text-center" id="interpretacionafectividad2"></td>

                                            </tr>
                                            <tr style="background-color: #d58512;color: #ffffff">
                                                <td><b>RESULTADO</b></td>
                                                <td class="text-center"></td>
                                                <td class="text-center"></td>
                                                <td class="text-center" id="mensajeafectividad"></td>

                                            </tr>


                                        </tbody>

                                    </table>
                                    
                                    
                                </div>                      
                            </div>
                            
                            <div class="col-md-6">
                                <div class="text-center">
                                    <h4 style="background-color: #bf360c;color: #ffffff"> INTERACCIÓN SOCIO-FAMILIAR</h4>
                                </div>
                                <div class="card-content table-responsive">
                                    <table class="table table-hover">
                                        <thead>
                                        <th></th>    
                                        <th class="text-center"><b>Puntaje Directo</b></th>
                                        <th class="text-center"><b>Centil</b></th>
                                        <th class="text-center"><b>Interpretación</b></th>

                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><b>Evaluación 1</b></td>
                                                <td class="text-center" id="totalinteraccion1"></td>
                                                <td class="text-center" id="centilinteraccion1"></td>
                                                <td class="text-center" id="interpretacioninteraccion1"></td>

                                            </tr>
                                            <tr>
                                                <td><b>Evaluación 2</b></td>
                                                <td class="text-center" id="totalinteraccion2"></td>
                                                <td class="text-center" id="centilinteraccion2"></td>
                                                <td class="text-center" id="interpretacioninteraccion2"></td>
                                            
                                            </tr>
                                            <tr style="background-color: #bf360c;color: #ffffff">
                                                <td><b>RESULTADO</b></td>
                                                <td class="text-center"></td>
                                                <td class="text-center"></td>
                                                <td class="text-center" id="mensajeinteraccion"></td>

                                            </tr>


                                        </tbody>

                                    </table>
                                    
                                </div>                      
                            </div>

                        </div>
                        <hr>
                        <div class="row" style="font-size: 15px">
                            <div class="col-md-12">
                                <div class="text-center">
                                    <h4 style="background-color: #00acc1;color: #ffffff"> PUNTAJE ESCALA GENERAL</h4>
                                </div>
                                <div class="card-content table-responsive">
                                    <table class="table table-hover">
                                        <thead>
                                        <th></th>    
                                        <th class="text-center"><b>Puntaje Directo</b></th>
                                        <th class="text-center"><b>Centil</b></th>
                                        <th class="text-center"><b>Interpretación</b></th>

                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><b>Evaluación 1</b></td>
                                                <td class="text-center" id="totalgeneral1"></td>
                                                <td class="text-center" id="centilgeneral1"></td>
                                                <td class="text-center" id="interpretaciongeneral1"></td>

                                            </tr>
                                            <tr>
                                                <td><b>Evaluación 2</b></td>
                                                <td class="text-center" id="totalgeneral2"></td>
                                                <td class="text-center" id="centilgeneral2"></td>
                                                <td class="text-center" id="interpretaciongeneral2"></td>

                                            </tr>
                                            <tr style="background-color: #00acc1;color: #ffffff">
                                                <td><b>RESULTADO</b></td>
                                                <td class="text-center"></td>
                                                <td class="text-center"></td>
                                                <td class="text-center" id="mensajegeneral"></td>

                                            </tr>


                                        </tbody>

                                    </table>
                                    
                                </div>                      
                            </div>
                            
                            

                        </div>
              
              
          
          </div>
          
          <div class="modal-footer">
              
          </div>
          </div>
      </div>
      
    </div>
 
          <!--Fin Modal EERF-->
        
          <div class="container">
            <?php echo($head2buscarsolofolio); ?><br>
<!-- head -->
            <?php //echo($head2); ?><br>
<!-- fin head -->

                <div  class="row">
                    <div class="">
                    <!--    <h6>Folio: <small><?php echo($folio); ?></small></h6>
                    <h6>Documento: <small><?php echo($tdatinte['tdoc']); ?></small></h6>
                    <h6>IDintegrante: <small><?php echo($tdatinte['tidintegrante']); ?></small></h6>
                    <h6>Nombre: <small><?php echo($tdatinte['tnombre']); ?></small></h6>-->
                    <p class="text-right"><small>Te encuentras en la vista  <strong>PRINCIPAL HOGAR</strong></small></p><br>
                    </div>
                </div>

<!--<input type="text" class="form-control input-sm" id="intermedia" name="intermedia"  placeholder="Text input" value="<?php echo($textointermedia); ?>">-->





                <div>
                <a href="../c_busquedahistorico/fc_busqueda" class="btn btn-primary btn-sm" role="button" ><span class="glyphicon glyphicon-refresh"></span> Sincronizar</a>
                </div><br>
                <!--para imprimir el folio y llevarlo-->
                <input type="text" class="form-control input-sm" id="doccogestor" name="doccogestor" style="display:none" placeholder="Text input" value="<?php echo($doccogestor); ?>">
<!--                        <input type="text" class="form-control input-sm" id="idintegrante" name="idintegrante"  placeholder="Text input" value="<?php echo($tdatinte['tidintegrante']); ?>">
<!--fin para imprimir el folio y llevarlo-->
<ul class="nav nav-tabs nav-justified">
  <li class="active"><a data-toggle="tab" href="#l1">Linea 1 - Linea de Clasificacion</a></li>
  <li><a data-toggle="tab" href="#l2">Linea 2 -  Linea plan de vida familiar </a></li>
  <li><a data-toggle="tab" href="#l4">Visita Intermedia</a></li>
  <li><a data-toggle="tab" href="#l3">Linea 3 -  Linea de Promoción</a></li>
</ul>

<div class="container-well">
    <div class="tab-content">
    <div id="l1" class="tab-pane fade in active">
<!--<form class="form-group" name="formulario" id="formulario">-->
                <div class="row">
                    <div class="form-group form-group-sm">   
                        <div class="form-group">
                         <div class="panel panel-primary">
                           <!-- Default panel contents -->
                           <div class="panel-heading">Hogares Asignados</div>
                           <div class="panel-body">
                             <p>En esta tabla encontrará todos los hogares asignados a su cobertura, en la cual podrá acceder a cuatro opciones por folio: Actualizar información del titular, acceder al Fichero,  entrar al módulo del Protocolo de Acompañamiento y consultar el diagnostico del hogar.</p>
                           </div>
                           
                          <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingOne">
                      <h4 class="panel-title">
                          <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            <span class="badge">LINEA 1 - ESTACION 1</span>
                        </a>
                      </h4>
                        
                        <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                         <table class="table table-condensed">
                                <thead>
                                    <tr>
                                        <th>Folio</th>
                                        <th>Id_Titular</th>
                                        <th>Documento</th>		
                                        <th>Primer Nombre</th>
                                        <th>Segundo Nombre</th>
                                        <th>Primer Apellido </th>
                                        <th>Segundo Apellido</th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>                                        
                                    </tr>
                                </thead>

                                <tbody id='datosl1e1'>
                                    <?php echo($datosl1e1); ?>
                                </tbody>
                            </table>
                        
                    </div>
                  </div>   
                           
                  </div>         
                           
                  <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingtwo">
                      <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapsetwo" aria-expanded="false" aria-controls="collapsetwo">
                            <span class="badge">LINEA 1 - ESTACION 2</span>
                        </a>
                      </h4>
                        
                        <div id="collapsetwo" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingtwo">
                         <table class="table table-condensed">
                                <thead>
                                    <tr>
                                        <th>Folio</th>
                                        <th>Id_Titular</th>
                                        <th>Documento</th>		
                                        <th>Primer Nombre</th>
                                        <th>Segundo Nombre</th>
                                        <th>Primer Apellido </th>
                                        <th>Segundo Apellido</th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>                                        
                                    </tr>
                                </thead>

                                <tbody id='datosl1e2'>
                                    <?php echo($datosl1e2); ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                  </div>          
                  </div> 
             </div> 
</div>
  </div>    
</div>
       
       
        
<div id="l2" class="tab-pane fade">
                            
                            <div class="panel panel-primary">
                           <!-- Default panel contents -->
                           <div class="panel-heading">Hogares Asignados</div>
                           <div class="panel-body">
                             <p>En esta tabla encontrará todos los hogares asignados a su cobertura, en la cual podrá acceder a cuatro opciones por folio: Actualizar información del titular, acceder al Fichero,  entrar al módulo del Protocolo de Acompañamiento y consultar el diagnostico del hogar.</p>
                           </div>
                             <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingtree">
                      <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapsetree" aria-expanded="false" aria-controls="collapsetree">
                            <span class="badge">LINEA 2 - ESTACION 1</span>
                        </a>
                      </h4>
                        <div id="collapsetree" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingtree">
                            <div class="row">
                               <div class="col-md-12">
                                   <!--<h4>  En construcción.... </h4>-->
                               </div>
                           </div>

<table class="table table-condensed">
                                <thead>
                                    <tr>
                                        
                                        <th>Folio</th>
                                        <th>Id_Titular</th>
                                        <th>Documento</th>		
                                        <th>Primer Nombre</th>
                                        <th>Segundo Nombre</th>
                                        <th>Primer Apellido </th>
                                        <th>Segundo Apellido</th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>                                        
                                    </tr>
                                </thead>

                                <tbody id='datosl2e1'>
                                    <?php echo($datosl2e1); ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                                 <br>
                    <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingfor">
                      <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapsefor" aria-expanded="false" aria-controls="collapsefor">
                            <span class="badge">LINEA 2 - ESTACION 2</span>
                        </a>
                      </h4>
                        
                        <div id="collapsefor" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingfor">
                             <div class="row">
                               <div class="col-md-12">
                                   <!--<h4>  En construcción.... </h4>-->
                               </div>
                           </div>
<table class="table table-condensed">
                                <thead>
                                    <tr>
                                        <th>Folio</th>
                                        <th>Id_Titular</th>
                                        <th>Documento</th>		
                                        <th>Primer Nombre</th>
                                        <th>Segundo Nombre</th>
                                        <th>Primer Apellido </th>
                                        <th>Segundo Apellido</th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>                                        
                                    </tr>
                                </thead>

                                <tbody id='datosl2e2'>
                                    <?php echo($datosl2e2); ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                  </div>   
                                 
                                 
                     <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingfor">
                      <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapsefive" aria-expanded="false" aria-controls="collapsefive">
                            <span class="badge">LINEA 2 - ESTACION 3</span>
                        </a>
                      </h4>
                        
                        <div id="collapsefive" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingfor">
                             <div class="row">
                               <div class="col-md-12">
                                   <!--<h4>  En construcción.... </h4>-->
                               </div>
                           </div>
                              <table class="table table-condensed">
                                <thead>
                                    <tr>
                                        <th>Folio</th>
                                        <th>Id_Titular</th>
                                        <th>Documento</th>		
                                        <th>Primer Nombre</th>
                                        <th>Segundo Nombre</th>
                                        <th>Primer Apellido </th>
                                        <th>Segundo Apellido</th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>                                        
                                    </tr>
                                </thead>

                               <tbody id='datosl2e3'>
                                    <?php echo($datosl2e3); ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                  </div> 
                                 
                                 
                                 
                 <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingsix">
                      <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapsesix" aria-expanded="false" aria-controls="collapsesix">
                            <span class="badge">LINEA 2 - ESTACION 4</span>
                        </a>
                      </h4>
                        
                        <div id="collapsesix" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingsix">
                             <div class="row">
                               <div class="col-md-12">
                                   <!--<h4>  En construcción.... </h4>-->
                               </div>
                           </div>
                              <table class="table table-condensed">
                                <thead>
                                    <tr>
                                        <th>Folio</th>
                                        <th>Id_Titular</th>
                                        <th>Documento</th>		
                                        <th>Primer Nombre</th>
                                        <th>Segundo Nombre</th>
                                        <th>Primer Apellido </th>
                                        <th>Segundo Apellido</th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>                                        
                                    </tr>
                                </thead>

                               <tbody id='datosl3'>
                                    <?php echo($datosl3); ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                  </div>                 
                               
                                 
                   <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingnueve">
                      <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapsenueve" aria-expanded="false" aria-controls="collapsenueve">
                            <span class="badge">LINEA 2 - ESTACION 5</span>
                        </a>
                      </h4>
                        
                        <div id="collapsenueve" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingnueve">
                             <div class="row">
                               <div class="col-md-12">
                                   <!--<h4>  En construcción.... </h4>-->
                               </div>
                           </div>
                              <table class="table table-condensed">
                                <thead>
                                    <tr>
                                        <th>Folio</th>
                                        <th>Id_Titular</th>
                                        <th>Documento</th>		
                                        <th>Primer Nombre</th>
                                        <th>Segundo Nombre</th>
                                        <th>Primer Apellido </th>
                                        <th>Segundo Apellido</th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>                                        
                                    </tr>
                                </thead>

                               <tbody id='datosl24'>
                                    <?php echo($datosl2e4); ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                  </div>                
                              
                                 
                  <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingdiez">
                      <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapsediez" aria-expanded="false" aria-controls="collapsediez">
                            <span class="badge">LINEA 2 - ESTACION 6</span>
                        </a>
                      </h4>
                        
                        <div id="collapsediez" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingdiez">
                             <div class="row">
                               <div class="col-md-12">
                                   <!--<h4>  En construcción.... </h4>-->
                               </div>
                           </div>
                           <table class="table table-condensed">
                                <thead>
                                    <tr>
                                        <th>Folio</th>
                                        <th>Id_Titular</th>
                                        <th>Documento</th>		
                                        <th>Primer Nombre</th>
                                        <th>Segundo Nombre</th>
                                        <th>Primer Apellido </th>
                                        <th>Segundo Apellido</th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>                                        
                                    </tr>
                                </thead>

                               <tbody id='datosl25'>
                                    <?php echo($datosl2e5); ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                  </div>                
                           
                  <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingonce">
                      <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseonce" aria-expanded="false" aria-controls="collapseonce">
                            <span class="badge">LINEA 2 - ESTACION 7</span>
                        </a>
                      </h4>
                        
                        <div id="collapseonce" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingonce">
                             <div class="row">
                               <div class="col-md-12">
                                   <!--<h4>  En construcción.... </h4>-->
                               </div>
                           </div>
                              <table class="table table-condensed">
                                <thead>
                                    <tr>
                                        <th>Folio</th>
                                        <th>Id_Titular</th>
                                        <th>Documento</th>		
                                        <th>Primer Nombre</th>
                                        <th>Segundo Nombre</th>
                                        <th>Primer Apellido </th>
                                        <th>Segundo Apellido</th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>                                        
                                    </tr>
                                </thead>

                               <tbody id='datosl26'>
                                    <?php echo($datosl2e6); ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                  </div>                 
                                 
                                 
                                 
                  </div> 
            </div>
</div>
                   <div id="l3" class="tab-pane fade">
                            
                            <div class="panel panel-primary">
                           <!-- Default panel contents -->
                           <div class="panel-heading">Hogares Asignados</div>
                           <div class="panel-body">
                             <p>El objetivo de esta línea es finalizar el proceso de acompañamiento al hogar, una vez se ha validado el mejoramiento de condiciones de vida y se ha fortalecido la dinámica familiar del hogar. En este momento el hogar ha avanzado en su plan familiar, ha superado su condición de pobreza multidimensional, ha alcanzado sus metas o se encuentra con la autonomía y corresponsabilidad para continuar su plan de vida.</p>
                           </div>
                           
                           <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingoct">
                      <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseoct" aria-expanded="false" aria-controls="collapseoct">
                            <span class="badge">LINEA 3 - SESION DE CIERRE</span>
                        </a>
                      </h4>
                        
                           
                           <div id="collapseoct" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingoct">

                             <div class="row">
                               <div class="col-md-12">
                                   
                               </div>
                           </div>


                            <table class="table table-condensed">
                                <thead>
                                    <tr>
                                        <th>Folio</th>
                                        <th>Id_Titular</th>
                                        <th>Documento</th>		
                                        <th>Primer Nombre</th>
                                        <th>Segundo Nombre</th>
                                        <th>Primer Apellido </th>
                                        <th>Segundo Apellido</th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>                                        
                                    </tr>
                                </thead>

                                <tbody id='datosl31'>
                                    <?php echo($datosl31); ?>
                                </tbody>
                            </table>
                            </div>
                        </div>
                            
                            
                            
                        </div>
                           
                           <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingtree">
                      <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseseven" aria-expanded="false" aria-controls="collapsefive">
                            <span class="badge">LINEA 3 - PROMOVIDOS</span>
                        </a>
                      </h4>
                           <div id="collapseseven" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingfive">

                             <div class="row">
                               <div class="col-md-12">
                                   
                               </div>
                           </div>

                            <table class="table table-condensed">
                                <thead>
                                    <tr>
                                        <th>Folio</th>
                                        <th>Id_Titular</th>
                                        <th>Documento</th>		
                                        <th>Primer Nombre</th>
                                        <th>Segundo Nombre</th>
                                        <th>Primer Apellido </th>
                                        <th>Segundo Apellido</th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>                                        
                                    </tr>
                                </thead>

                                <tbody id='datosl32'>
                                    <?php echo($datosl32); ?>
                                </tbody>
                            </table>
                            </div>
                        </div>
                            
                            
                            
                        </div>
                           
                    </div>
                 
                     </div>
        
         <div id="l4" class="tab-pane fade">
<!--<form class="form-group" name="formulario" id="formulario">-->
                <div class="row">
                    <div class="form-group form-group-sm">   
                        <div class="form-group">
                         <div class="panel panel-primary">
                           <!-- Default panel contents -->
                           <div class="panel-heading">Hogares Asignados</div>
                           <div class="panel-body">
                             <p>En esta tabla encontrará todos los hogares asignados a su cobertura, en la cual podrá acceder a cuatro opciones por folio: Actualizar información del titular, acceder al Fichero,  entrar al módulo del Protocolo de Acompañamiento y consultar el diagnostico del hogar.</p>
                           </div>
                           
                          <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingocho">
                      <h4 class="panel-title">
                          <a data-toggle="collapse" data-parent="#accordion" href="#collapseocho" aria-expanded="true" aria-controls="collapseocho">
                            <span class="badge">VISITA INTERMEDIA</span>
                        </a>
                      </h4>
                        
                        <div id="collapseocho" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingocho">
                         <table class="table table-condensed">
                                <thead>
                                    <tr>
                                        <th>Folio</th>
                                        <th>Id_Titular</th>
                                        <th>Documento</th>		
                                        <th>Primer Nombre</th>
                                        <th>Segundo Nombre</th>
                                        <th>Primer Apellido </th>
                                        <th>Segundo Apellido</th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>                                        
                                    </tr>
                                </thead>

                               <tbody id='datosl4'>
                                    <?php echo($datosl4); ?>
                                </tbody>
                            </table>
                        
                    </div>
                  </div>   
                           
                  </div>         
                           
<!--                  <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingnueve">
                      <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapsenueve" aria-expanded="false" aria-controls="collapsenueve">
                            <span class="badge">LINEA 1 - ESTACION 2</span>
                        </a>
                      </h4>-->
                        
<!--                        <div id="collapsetwo" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingnueve">
                         <table class="table table-condensed">
                                <thead>
                                    <tr>
                                        <th>Folio</th>
                                        <th>Id_Titular</th>
                                        <th>Documento</th>		
                                        <th>Primer Nombre</th>
                                        <th>Segundo Nombre</th>
                                        <th>Primer Apellido </th>
                                        <th>Segundo Apellido</th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>                                        
                                    </tr>
                                </thead>

                                <tbody id='datosl1e2'>
                                    <?php echo($datosl1e2); ?>
                                </tbody>
                            </table>
                        </div>-->
                    </div>
                  </div>          
                  </div> 
             </div>


</div>
  </div>    
</div>
<?php echo('<button class="btn btn-danger" type="button" id="salir" name="salir"> <<  Salir  >> </button>');?>
<?php echo($foot); ?>
</div>
          
          <!-- modal movimiento de logros por oportunidades inicio si o no-->
<div class="modal fade" id="exampleModallogroxoportsino" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" data-keyboard="false" data-backdrop="static">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-body"><center><h3>PROTOCOLO</h3></center>
<!--      <div class="row" id="mensajecalculo24" align="center" name="mensajecalculo24" style="display: none"><label><h1 class="control-label" id="exampleModalLabelpreval24">Información guardada....calculo realizado del logro 24</h1></label></div> -->
<!--      <div class="row">
      </div> -->
      <div class="modal-footer">
          
        
          
      <input type="text" class="form-control" id="folio" name="folio" style="display: none" value="">        
      <input type="text" class="form-control" id="idintegrantetitular" name="idintegrantetitular" style="display: none" value="">        
      <input type="text" class="form-control" id="doccogestoract" name="doccogestoract" style="display: none" value="">        
      
      <center><button id="irprotocolodelmodal" type="button" class="btn btn-primary">Ir a la vista del protocolo</button></center>
      </div>  
    </div>
  </div>
</div>
</div>
<!-- modal movimiento de logros por oportunidades fin si o no-->


          
          
  
<!--inicio botonera guardar y actualizar NO SE TOCA-->

           
                                

<!--Fin botonera guardar y actualizar NO TOCAR-->

                <!--</form>-->
<!--INICIO Este es el footer NO TOCAR-->
            
<!--fin del footer NO TOCAR-->
  
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
    
$('.collapse').collapse()

// funcion que permite ir a la vista principal protocolo    
    function iraprotocolo(folio,idintegrantetitular,doccogestor)
    {         
        $.ajax({
                          url: "fc_llenarcapitulos",
                          type: "GET",
                          data: {vfolio : folio},    
                          dataType: "html",
                          success : function(obj){                      
                          //botonguardar();
                          //location.href = "../c_principalprotocolo/fc_principalprotocolo?folio="+ folio +"&idintegrante="+ idintegrantetitular +"&doccogestor="+ doccogestor;
                          }
                          });
        
        $('#folio').val(folio);
        $('#idintegrantetitular').val(idintegrantetitular);
        $('#doccogestoract').val(doccogestor);
        $('#exampleModallogroxoportsino').modal(); 
    }
    function vereerf(folio,nombre){
        
         $.ajax({
                          url: "fc_resultadoeerf",
                          type: "GET",
                          data: {vfolio : folio},    
                          dataType: "json",
                          success : function(obj){                      
                          $('#totalgeneral1').html(obj.totalgeneral1.totalg1);
                          $('#centilgeneral1').html(obj.totalgeneral1.centilg1);
                          $('#interpretaciongeneral1').html(obj.totalgeneral1.interpretaciong1);
                          $('#totalgeneral2').html(obj.totalgeneral2.totalg2);
                          $('#centilgeneral2').html(obj.totalgeneral2.centilg2);
                          $('#interpretaciongeneral2').html(obj.totalgeneral2.interpretaciong2);
                          $('#mensajegeneral').html(obj.mensajegeneral);
                          
                          $('#totalconvivencia1').html(obj.totalconv1.totalcv1);
                          $('#centilconvivencia1').html(obj.totalconv1.centilcv1);
                          $('#interpretacionconvivencia1').html(obj.totalconv1.interpretacioncv1);
                          $('#totalconvivencia2').html(obj.totalconv2.totalcv2);
                          $('#centilconvivencia2').html(obj.totalconv2.centilcv2);
                          $('#interpretacionconvivencia2').html(obj.totalconv2.interpretacioncv2);
                          $('#mensajeconvivencia').html(obj.mensajeconvivencia);
                          
                          $('#totalcomunicacion1').html(obj.totalcom1.totalcm1);
                          $('#centilcomunicacion1').html(obj.totalcom1.centilcm1);
                          $('#interpretacioncomunicacion1').html(obj.totalcom1.interpretacioncm1);
                          $('#totalcomunicacion2').html(obj.totalcom2.totalcm2);
                          $('#centilcomunicacion2').html(obj.totalcom2.centilcm2);
                          $('#interpretacioncomunicacion2').html(obj.totalcom2.interpretacioncm2);
                          $('#mensajecomunicacion').html(obj.mensajecomunicacion);
                          
                          $('#totalafectividad1').html(obj.totalafec1.totalaf1);
                          $('#centilafectividad1').html(obj.totalafec1.centilaf1);
                          $('#interpretacionafectividad1').html(obj.totalafec1.interpretacionaf1);
                          $('#totalafectividad2').html(obj.totalafec2.totalaf2);
                          $('#centilafectividad2').html(obj.totalafec2.centilaf2);
                          $('#interpretacionafectividad2').html(obj.totalafec2.interpretacionaf2);
                          $('#mensajeafectividad').html(obj.mensajeafectividad);
                          
                          $('#totalinteraccion1').html(obj.totalinte1.totalin1);
                          $('#centilinteraccion1').html(obj.totalinte1.centilin1);
                          $('#interpretacioninteraccion1').html(obj.totalinte1.interpretacionin1);
                          $('#totalinteraccion2').html(obj.totalinte2.totalin2);
                          $('#centilinteraccion2').html(obj.totalinte2.centilin2);
                          $('#interpretacioninteraccion2').html(obj.totalinte2.interpretacionin2);
                          $('#mensajeinteraccion').html(obj.mensajeinteraccion);
                          
                          $('#nombretitular').html(nombre);
                          $('#foliotitular').html(folio);
                          $('#myModalEERF').modal('show');
                          }
                          });
        
       
    }
    function iraactualizar(folio,doccogestor)
    { 
        location.href = "../actualizar/c_actualizar/fc_actualizar?folio="+ folio +"&idintegrante=0"+"&doccogestor="+doccogestor;
    }
    
    function editallbf(folio,idintegrantetitular)
    { 
        location.href = "http://localhost/metodologia2msolllbf/index.php/c_capituloshogar/fc_capituloshogar?folio="+ folio +"&idintegrante=0";
       // location.href = "http://localhost/metodologia2msolllbf/index.php/c_capituloshogar/fc_capituloshogar?folio="+ folio +"&idintegrante="+ idintegrantetitular;
    }


    function irafichero(folio,idintegrantetitular)
    { 
        location.href = "../c_acercaroportunidad/fc_acercaroportunidad?folio="+ folio +"&idintegrante="+ idintegrantetitular+"&variable=2";
    }
    function iradiagnostico(folio,doccogestor)
    { 
        location.href = "../logros/c_dimensiones/fc_dimensiones?folio="+ folio +"&idintegrante=0"+"&doccogestor="+doccogestor;
    }
    function iraprivaciones(folio,doccogestor)
    { 
//        location.href = "../privaciones/c_dimensionesp/fc_dimensionesp?folio="+ folio +"&idintegrante=0"+"&doccogestor="+doccogestor;
          location.href = "../privaciones/c_dimensionespseleccion/fc_dimensionespseleccion?folio="+ folio +"&idintegrante=0"+"&doccogestor="+doccogestor; 
    }
    
    function logrosprom(folio,doccogestor)
    { 
        location.href = "../logrosprom/c_dimensiones/fc_dimensiones?folio="+ folio +"&idintegrante=0"+"&doccogestor="+doccogestor;
    }
    
    
//funciones para consultar dinamicamente el folio, documento y nombre
function traerfoliodinamic()
{
                //alert($('#bucasdoc').val());
                $.ajax({
                    url: "fc_traerfolio",
                    type: "GET",
                    data: {vfolio: $('#buscarfolio').val(),vdoccogestor: $('#doccogestor').val()},
                    dataType: "json",
                    success: function (data) {
                        $('#datosl1e1').html(data[0]);
                        $('#datosl1e2').html(data[1]);
                        $('#datosl2e1').html(data[2]);
                        $('#datosl2e2').html(data[3]);
                        $('#datosl3').html(data[4]);
                        $('#datosl2e3').html(data[5]);
                        $('#datosl31').html(data[6]);
                        $('#datosl32').html(data[7]);
                        $('#datosl24').html(data[8]);
                        $('#datosl25').html(data[9]);
                        $('#datosl26').html(data[10]);
                        $('#datosl4').html(data[11]);
                        $('#buscardoc').val('');
                        $('#buscarnom').val('');                         
                    }
                });
}

function traerdocdinamic()
{
                //alert($('#bucasdoc').val());
                $.ajax({
                    url: "fc_traerdoc",
                    type: "GET",
                    data: {vdocumento: $('#buscardoc').val(),vdoccogestor: $('#doccogestor').val()},
                    dataType: "json",
                    success: function (data) {
                        $('#datosl1e1').html(data[0]);
                        $('#datosl1e2').html(data[1]);
                        $('#datosl2e1').html(data[2]);
                        $('#datosl2e2').html(data[3]);
                        $('#datosl3').html(data[4]);
                        $('#datosl2e3').html(data[5]);
                        $('#datosl31').html(data[6]);
                        $('#datosl32').html(data[7]);
                        $('#datosl24').html(data[8]);
                        $('#datosl25').html(data[9]);
                        $('#datosl26').html(data[10]);
                        $('#datosl4').html(data[11]);
                        $('#buscarfolio').val('');
                        $('#buscarnom').val('');                        
                    }
                });
}

function cargar()
{
    
 location.href = "../c_principalhogar/fc_principalhogar";
}
function traernombredinamic()
{
                //alert($('#bucasdoc').val());
                $.ajax({
                    url: "fc_traernom",
                    type: "GET",
                    data: {vnombre: $('#buscarnom').val(),vdoccogestor: $('#doccogestor').val()},
                    dataType: "json",
                    success: function (data) {
                        $('#datosl1e1').html(data[0]);
                        $('#datosl1e2').html(data[1]);
                        $('#datosl2e1').html(data[2]);
                        $('#datosl2e2').html(data[3]);
                        $('#datosl3').html(data[4]);
                        $('#datosl2e3').html(data[5]);
                        $('#datosl31').html(data[6]);
                        $('#datosl32').html(data[7]);
                        $('#datosl24').html(data[8]);
                        $('#datosl25').html(data[9]);
                        $('#datosl26').html(data[10]);
                        $('#datosl4').html(data[11]);
                        $('#buscarfolio').val('');
                        $('#buscardoc').val('');
                    }
                });
}
//fin de funciones para consultar dinamicamente el folio, documento y nombre

    //VALIDACIOND DE NUMEROS Y LETRAS
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
        color: 'green',
        animation: {open: 'tada', close: 'flip'},
        position: {x: 'right', y: 'center'},
        autoClose: 2000
    });
    }
//FIN VALIDAR NUMERO LETRAS

   
    
// fin funcion que permite ir a la vista principal protocolo    
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

               //NO TOCAR - salir                
                $("#salir").click(function ()
                {
                    $.ajax({
                      url: "fc_salir",
                      success : function(obj)
                      {       //alert(obj);              
                        location.href = "../c_login/fc_vlogin";
                      }
                    }); 
                });
                //fin salir                    
                //inicio ir a protocolo                    
                $("#irprotocolodelmodal").click(function ()
                {
                location.href = "../c_principalprotocolo/fc_principalprotocolo?folio="+ $('#folio').val() +"&idintegrante="+ $('#idintegrantetitular').val() +"&doccogestor="+ $('#doccogestoract').val();     
                });
                //fin ir a protocolo                    
                
    });
/////////////////////////////////////// FIN Funciones que llaman al controlador para guardar y actualizar////////////////////////////////////////////////////////////////////////        
</script>
</html>