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
        <!--head-->
        <?php echo($head); ?>
        <!-- fin head-->
        
        <!--para tener la variable de idvivienda-->
        <input type="text" class="form-control input-sm" id="folio" name="folio"  style="display:none"   placeholder="folio" value="<?php echo($folio); ?>">
        <input type="text" class="form-control input-sm" id="idtitular" name="idtitular"  style="display:none"   placeholder="idtitular" value="<?php echo($idtitular); ?>">
        <input type="text" class="form-control input-sm" id="edad" name="edad"  style="display:none"   placeholder="" value="<?php echo($arraydatosgenerales['eedadintegrante']); ?>">
       <input type="text" class="form-control input-sm" id="sexo" name="sexo"  style="display:none"   placeholder="" value="<?php echo($arraydatosgenerales['esexointegrante']); ?>">
       <input type="text" class="form-control input-sm" id="evariable" name="evariable" style="display: none"  placeholder="variable" value="<?php echo($evariable); ?>">
       <input type="text" class="form-control input-sm" id="doccogestor" style="display:none"  placeholder="variable" value="<?php echo($doccogestor); ?>">
        <!--fin para imprimir el idintegrante y llevarlo-->
<hr>
         <form class="form-group col-md-offset-0 " name="formulario" id="formulario">
                <div class="row">
                    
                    <div class="col-md-2 col-md-offset-0 "><button  type="button" id="sincoportunidad" class="btn btn-success btn-sm" >Sincronizar Oportunidades</button>
                    </div><br><br>  
        <!--                     <div class="col-md-2"><a href="../c_acercaroportunidad/fc_sincoportunidad" class="btn btn-success btn-sm" role="button"><span class="glyphicon glyphicon-refresh"></span> Sincronizar Oportunidades</a></div><br><br><br>-->
                                     
                        
                    
                    <div class="form-group col-md-12 form-group-sm">   
                        <div class="form-group  ">
                          <div class="panel panel-info">
                           <!-- Default panel contents -->
                           <div class="panel-heading"><span class="badge">Listado de Ofertas</span></div>
                           <div class="panel-body">
                               <p>En esta tabla encontrará todos los integrantes que pertenecen al hogar.<br><br>
                             
                             <div class="form-group">
                                 <div>
                                     <button class="btn btn-warning btn-sm" type="button" id="oportunidadh" name="oportunidadh"><span class="glyphicon glyphicon-check"></span> Oportunidad por hogar</button>
                                 </div>
                                 <br>
                                 
                            </div>
                           </div>
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Folio</th>
                                        <th>Documento Integrante</th>
                                        <th>Primer nombre</th>
                                        <th>Segundo nombre</th>
                                        <th>Primer Apellido</th>
                                        <th>Segundo Apellido</th>
                                        <th>acercar</th>  
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
<?php echo('<button class="btn btn-danger col-sm-offset-0" type="button" id="salir" name="salir"> << Volver >> </button>');?>
<!--Fin botonera guardar y actualizar NO TOCAR-->

    </form>

<div class="modal fade bs-example-modal-sm" id="modalsinco" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" data-backdrop="static">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title" id="myModalLabel"><img src="<?php echo IMAGEN, 'cargando.gif'; ?>" alt="Brand"> Sincronizando...</h4>
        </div>
        <div class="modal-body">
        
        Por favor no cierre este dialogo... hasta que salga el mensaje de finalizacion.
        </div>
    </div>
  </div>
</div>

    
    <!--Inicio Este es el footer NO TOCAR-->
    <?php echo($foot); ?>
    <!--fin del footer NO TOCAR-->
    </div>
    
    
    
    
     <div class="modal fade" id="modal1205" data-backdrop="static" >
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
          <button type="button" id="continuar1205" class="btn btn-info">Continuar</button>
<!--        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>-->
      </div>
    </div>
  </div>
</div>
    
      <div class="modal fade" id="modal2106" data-backdrop="static" >
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
          <button type="button" id="continuar2106" class="btn btn-info">Continuar</button>
<!--        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>-->
      </div>
    </div>
  </div>
</div>
    
      <div class="modal fade" id="modal2205" data-backdrop="static" >
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
          <button type="button" id="continuar2205" class="btn btn-info">Continuar</button>
<!--        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>-->
      </div>
    </div>
  </div>
</div>
    
       <div class="modal fade" id="modal2306" data-backdrop="static" >
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
          <button type="button" id="continuar2306" class="btn btn-info">Continuar</button>
<!--        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>-->
      </div>
    </div>
  </div>
</div>
    
    <div class="modal fade" id="modal2405" data-backdrop="static" >
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
          <button type="button" id="continuar2405" class="btn btn-info">Continuar</button>
<!--        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>-->
      </div>
    </div>
  </div>
</div>
    <div class="modal fade" id="modal2505" data-backdrop="static" >
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
          <button type="button" id="continuar2505" class="btn btn-info">Continuar</button>
<!--        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>-->
      </div>
    </div>
  </div>
</div>
    
    <div class="modal fade" id="modal2605" data-backdrop="static" >
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
          <button type="button" id="continuar2605" class="btn btn-info">Continuar</button>
<!--        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>-->
      </div>
    </div>
  </div>
</div>
    
<div class="modal fade" id="modal2704" data-backdrop="static" >
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
          <button type="button" id="continuar2704" class="btn btn-info">Continuar</button>
<!--        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>-->
      </div>
    </div>
  </div>
</div>    






<div class="modal fade" id="modal2805" data-backdrop="static" >
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
          <button type="button" id="continuar2805" class="btn btn-info">Continuar</button>
<!--        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>-->
      </div>
    </div>
  </div>
</div>    







    <!--Inicio de los enlaces-->
    <script src="<?php echo BOOTSTRAP, 'js/jquery-1.11.0.js' ?>"></script>
    <script src="<?php echo BOOTSTRAP, 'js/bootstrap.min.js' ?>"></script>
    <script src="<?php echo BOOTSTRAP, 'js/jquery.bootstrap.wizard.js' ?>"></script>
    <script src="<?php echo BOOTSTRAP, 'js/prettify.js' ?>"></script>
    <script src="<?php echo JBOX, 'Source/jBox.min.js' ?>"></script>
    <script src="<?php echo JSPERFIL, 'jsfechas.js' ?>"></script>
    <script src="<?php echo JSPERFIL, 'jsmensajes.js' ?>"></script>
    <script src="<?php echo JSPERFIL, 'jsvalidarcampos.js' ?>"></script>
    <script src="<?php echo JSPERFIL, 'jsvalidarletrasnumeros.js' ?>"></script>
    <script src="<?php echo JSPERFIL, 'jsbotones.js' ?>"></script>
    <script src="<?php echo JSPERFIL, 'jscargardatos.js' ?>"></script>
    <link href="<?php echo JBOX, 'Source/jBox.css' ?>" rel="stylesheet">
    <!--Inicio de los enlaces-->
</body>

<script> 
///////////////////////////////////////Funciones que llaman al controlador para guardar y actualizar////////////////////////////////////////////////////////////////////////    
function update_mejora_condiciones_datos()
{
     $.ajax({
               url: "http://localhost/metodologia2msol/index.php/sincronizacion/c_oportunidad_mejora_condiciones_datos/fc_update",
               type: "GET",
               dataType: "html",
               success : function(obj){                      
               descargar_oportunidadhostiricocif();
               }
            });            

}

function update_oportunidadhostiricocif()
{
     $.ajax({
               url: "http://localhost/metodologia2msol/index.php/sincronizacion/c_oportunidad_integrantehistoricocif/fc_update",
               type: "GET",
               dataType: "html",
               success : function(obj){                      
               botonguardar();
			   terminasinco();
			   mensajito('Sincronizado','Proceso Exitoso!!!');
               }
            });            

}

function cargar_oportunidadhostiricocif()
{
     $.ajax({
               url: "http://localhost/metodologia2msol/index.php/sincronizacion/c_oportunidad_integrantehistoricocif/fc_oportunidad_integrantehistoricocif",
               type: "GET",
               dataType: "html",
               success : function(obj){                      
               botonguardar();
			   update_oportunidadhostiricocif();
               }
            });            

}

function descargar_oportunidadhostiricocif()
{
	   $.ajax({
		  url: "http://localhost/metodologia2msol/index.php/sincronizacion/c_oportunidad_integrantehistoricocifd/fc_oportunidad_integrantehistoricocifd",
		  type: "GET",
		  dataType: "html",
		  success : function(obj){                      
			cargar_oportunidadhostiricocif();
		  }
		});            

}

$(document).ready(function()
    {



 $("#sincoportunidad").click(function ()
        {mensajedesinco();	
		
            //alert('juan');
                        $.ajax({
                          url: "fc_sincoportunidad",
                          type: "GET",
                          data: {vfolio : $('#folio').val()},    
                          dataType: "html",
                          success : function(obj){
                              //alert('juan2q');

                               $.ajax({
                                  url: "http://localhost/metodologia2msol/index.php/sincronizacion/c_oportunidad_mejora_condiciones_datos/fc_oportunidad_mejora_condiciones_datos",
                                  type: "GET",
                                  dataType: "html",
                                  success : function(obj){                      
                                     update_mejora_condiciones_datos();
                                  }
                                });

                           
                            

    },error: function (jqXHR, ajaxOptions, thrownError) {terminasinco();
                                    if (jqXHR.status === 0) {
                                        mensajito ('Error al sincronizar!!!','Sin Conexion a internet, por favor verifca tu conexion a internet y vuelve a intentar. [0]');
                                    } else if (jqXHR.status == 404) {
                                        mensajito ('Error al sincronizar!!!','Sin Conexion a internet, por favor verifca tu conexion a internet y vuelve a intentar. [404]');
                                    } else if (jqXHR.status == 500) {
                                        mensajito ('Error al sincronizar!!!','Sin Conexion a internet, por favor verifca tu conexion a internet y vuelve a intentar. [500].');
                                    } else {
                                        mensajito ('Error interno!!!','Comuniquese con el analista en sede');
                                    }

                              }
                              
                        });                    
        });

        $("#guardar").click(function ()
        {
                        $.ajax({
                          url: "fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),
                          vidintegrante : $('#idintegrante').val(),
                          vvaloracercaroportunidad : $('#valoracercaroportunidad').val()},    
                          dataType: "html",
                          success : function(obj){                      
                          botonguardar();
                          }
                        });                    
        });

        
        $("#actualizar").click(function ()
        {
                        $.ajax({
                          url: "fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),
                          vidintegrante : $('#idintegrante').val(),
                          vvaloracercaroportunidad : $('#valoracercaroportunidad').val()},    
                          dataType: "html",
                          success : function(obj){                      
                          botonguardar();
                          }
                        });                    
        });
        

        $("#oportunidadh").click(function ()
        {
         //botonsiguiente();
         if ($('#evariable').val()== '1')
           {          
         location.href = "../c_acercaroportunidadh/fc_acercaroportunidadh?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idtitular').val() +  "&idtitular=" + $('#idtitular').val()+ "&variable=1" ;                    
           }
           else  if ($('#evariable').val()== '2')
           {          
         location.href = "../c_acercaroportunidadh/fc_acercaroportunidadh?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idtitular').val() +  "&idtitular=" + $('#idtitular').val()+ "&variable=2" ;                    
           }else  if ($('#evariable').val()== '4')
           {          
         location.href = "../c_acercaroportunidadh/fc_acercaroportunidadh?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idtitular').val() +  "&idtitular=" + $('#idtitular').val()+ "&variable=4" ;                    
           }
           else  if ($('#evariable').val()== '5')
           {          
         location.href = "../c_acercaroportunidadh/fc_acercaroportunidadh?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idtitular').val() +  "&idtitular=" + $('#idtitular').val()+ "&variable=5" ;                    
           }
            else  if ($('#evariable').val()== '6')
           {          
         location.href = "../c_acercaroportunidadh/fc_acercaroportunidadh?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idtitular').val() +  "&idtitular=" + $('#idtitular').val()+ "&variable=6" ;                    
           }
           else  if ($('#evariable').val()== '7')
           {          
         location.href = "../c_acercaroportunidadh/fc_acercaroportunidadh?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idtitular').val() +  "&idtitular=" + $('#idtitular').val()+ "&variable=7" ;                    
           }
           else  if ($('#evariable').val()== '8')
           {          
         location.href = "../c_acercaroportunidadh/fc_acercaroportunidadh?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idtitular').val() +  "&idtitular=" + $('#idtitular').val()+ "&variable=8" ;                    
           }
           else  if ($('#evariable').val()== '9')
           {          
         location.href = "../c_acercaroportunidadh/fc_acercaroportunidadh?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idtitular').val() +  "&idtitular=" + $('#idtitular').val()+ "&variable=9" ;                    
           }
           else  if ($('#evariable').val()== '10')
           {          
         location.href = "../c_acercaroportunidadh/fc_acercaroportunidadh?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idtitular').val() +  "&idtitular=" + $('#idtitular').val()+ "&variable=10" ;                    
           }
           else  if ($('#evariable').val()== '11')
           {          
         location.href = "../c_acercaroportunidadh/fc_acercaroportunidadh?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idtitular').val() +  "&idtitular=" + $('#idtitular').val()+ "&variable=11" ;                    
           }
           else  if ($('#evariable').val()== '81')
           {          
         location.href = "../c_acercaroportunidadh/fc_acercaroportunidadh?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idtitular').val() +  "&idtitular=" + $('#idtitular').val()+ "&variable=81" ;                    
           }
           else  if ($('#evariable').val()== '90')
            {          
             location.href = "../c_acercaroportunidadh/fc_acercaroportunidadh?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idtitular').val() +  "&idtitular=" + $('#idtitular').val()+ "&variable=90" ;                    
            }
            else  if ($('#evariable').val()== '91')
            {          
             location.href = "../c_acercaroportunidadh/fc_acercaroportunidadh?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idtitular').val() +  "&idtitular=" + $('#idtitular').val()+ "&variable=91" ;                    
            }
           else  if ($('#evariable').val()== '102')
           {          
         location.href = "../c_acercaroportunidadh/fc_acercaroportunidadh?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idtitular').val() +  "&idtitular=" + $('#idtitular').val()+ "&variable=102" ;                    
           }
           
           else
               {          
         location.href = "../c_acercaroportunidadh/fc_acercaroportunidadh?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idtitular').val() +  "&idtitular=" + $('#idtitular').val()+ "&variable=3" ;                    
           }
        });
        
        
         $("#continuar1205").click(function (){
            
           
            location.href = "../c_protocolol1e2/fc_protocolol1e2?folio="+ $('#folio').val() +"&idintegrante="+ $('#idtitular').val()+"&doccogestor="+$('#doccogestor').val();
            
        });
        
         $("#continuar2306").click(function (){
            
           
            location.href = "../c_protocolol2e3/fc_protocolol2e3?folio="+ $('#folio').val() +"&idintegrante="+ $('#idtitular').val()+"&doccogestor="+$('#doccogestor').val();
            
        });
        
        $("#continuar2405").click(function (){
            
           
            location.href = "../c_protocolol2e4/fc_protocolol2e4?folio="+ $('#folio').val() +"&idintegrante="+ $('#idtitular').val()+"&doccogestor="+$('#doccogestor').val();
            
        });
        
        $("#continuar2505").click(function (){
            
           
            location.href = "../c_protocolol2e5/fc_protocolol2e5?folio="+ $('#folio').val() +"&idintegrante="+ $('#idtitular').val()+"&doccogestor="+$('#doccogestor').val();
            
        });
        
        $("#continuar2605").click(function (){
            
           
            location.href = "../c_protocolol2e6/fc_protocolol2e6?folio="+ $('#folio').val() +"&idintegrante="+ $('#idtitular').val()+"&doccogestor="+$('#doccogestor').val();
            
        });

        $("#continuar2704").click(function (){
            
           
            location.href = "../c_protocolol2e7/fc_protocolol2e7?folio="+ $('#folio').val() +"&idintegrante="+ $('#idtitular').val()+"&doccogestor="+$('#doccogestor').val();
            
        });

        $("#continuar2805").click(function (){
            
           
            location.href = "../c_protocolol2e8/fc_protocolol2e8?folio="+ $('#folio').val() +"&idintegrante="+ $('#idtitular').val()+"&doccogestor="+$('#doccogestor').val();
            
        });
        
         $("#continuar2106").click(function (){
            
           
           // location.href = "../c_protocolol1e2/fc_protocolol1e2?folio="+ $('#folio').val() +"&idintegrante="+ $('#idtitular').val()+"&doccogestor="+$('#doccogestor').val();
            location.href = "../c_protocolol2e1/fc_protocolol2e1?folio="+ $('#folio').val() +"&idintegrante="+ $('#idtitular').val()+"&doccogestor="+$('#doccogestor').val();
        });
        
         $("#continuar2205").click(function (){
            
           
           // location.href = "../c_protocolol1e2/fc_protocolol1e2?folio="+ $('#folio').val() +"&idintegrante="+ $('#idtitular').val()+"&doccogestor="+$('#doccogestor').val();
             location.href = "../c_protocolol2e2/fc_protocolol2e2?folio="+ $('#folio').val() +"&idintegrante="+ $('#idtitular').val()+"&doccogestor="+$('#doccogestor').val();
        });
        
        
        
        
        
         $("#salir").click(function ()
        {
        if ($('#evariable').val()== '1')
        { 
                insertidpaso();
                location.href = "../c_protocolol1e1/fc_protocolol1e1?folio="+ $('#folio').val() +"&idintegrante="+ $('#idtitular').val()+"&doccogestor="+$('#doccogestor').val();
         
        }
        else 
        {
            if ($('#evariable').val()== '3')
            {
                insertidpaso2();
                modal1205();
                
            }
            if ($('#evariable').val() == '4')
            {
                
                insertidpaso4();
                modal2106();
                
            }
            if ($('#evariable').val() == '5')
            {
                insertidpaso5();
                modal2205();
               
            }
            if ($('#evariable').val() == '6')
            {
                insertidpaso6();
                modal2306();
               
            }
            if ($('#evariable').val() == '2')      
            {  
                location.href = "../c_principalhogar/fc_principalhogar";  
            }
            
            if ($('#evariable').val() == '7')      
            {  
                
                insertidpaso7();
                modal2405();
            } 
            
            if ($('#evariable').val() == '8')      
            {  
                
                insertidpaso8();
                modal2505();
            } 
            
            if ($('#evariable').val() == '9')      
            {  
                
                insertidpaso9();
                modal2605();
            }
            if ($('#evariable').val() == '10')      
            {  
                
                insertidpaso10();
                modal2704();
            }
            if ($('#evariable').val() == '11')      
            {  
              insertidpaso11();
              modal2805();
              }
            if ($('#evariable').val() == '81')      
            {  
            insertidpaso81();    
            location.href = "../c_protocolointermedia/fc_protocolointermedia?folio="+ $('#folio').val() +"&idintegrante="+ $('#idtitular').val()+"&doccogestor="+$('#doccogestor').val();
            }
            if ($('#evariable').val() == '90')      
            {  
            insertidpaso90();    
            location.href = "../c_protocoloLCV1/fc_protocoloLCV1?folio="+ $('#folio').val() +"&idintegrante="+ $('#idtitular').val()+"&doccogestor="+$('#doccogestor').val();
            }
            if ($('#evariable').val() == '91')      
            {  
            insertidpaso91();    
            location.href = "../c_protocolocierreadmin/fc_protocolocierreadmin?folio="+ $('#folio').val() +"&idintegrante="+ $('#idtitular').val()+"&doccogestor="+$('#doccogestor').val();
            }


            if ($('#evariable').val() == '102')      
            {  
              insertidpaso102();    
          
            }

         }
        });
        
        
        
         $("#siguiente").click(function ()
        {
         botonsiguiente();
        

        });
              
        $("#anterior").click(function ()
        {
         botonanterior();
        location.href = "../c_capitulosintegrante/fc_capitulosintegrante?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val();                    
        });

//para cargar variables capitulo, pregunta,encuestador,vivienda,barra



cargardatosgenerales('<?php echo($arraydatosgenerales['ecapitulo']); ?>','oportunidad','<?php echo($arraydatosgenerales['enomcoges']); ?>','<?php echo($arraydatosgenerales['enombreintegrante']." "." - "." "."Sexo:"." ".$arraydatosgenerales['esexointegrante']."   "."  -  "."   "."Edad:"."   ".$arraydatosgenerales['eedadintegrante']); ?>','0');
//control del boton ayuda
botonayuda();

});

function modal1205() 
{
$('#modal1205').modal();
}

function modal2106() 
{
$('#modal2106').modal();
}

function modal2205() 
{
$('#modal2205').modal();
}

function modal2306() 
{
$('#modal2306').modal();
}

function modal2405() 
{
$('#modal2405').modal();
}

function modal2505() 
{
$('#modal2505').modal();
}

function modal2605() 
{
$('#modal2605').modal();
}
function modal2704() 
{
$('#modal2704').modal();
}
function modal2805() 
{
$('#modal2805').modal();
}



function mensajedesinco()
{//alert('juanpi');
    $('#modalsinco').modal('show');
    $('#sinco').prop('disabled', true);
    $('#buscar').prop('disabled', true);
    $('#volv').prop('disabled', true);   
}

function terminasinco()
{ //alert('juanpo');
    $('#modalsinco').modal('hide');
    $('#sinco').prop('disabled', false);
    $('#buscar').prop('disabled', false);
    $('#volv').prop('disabled', false);   
}


function insertidpaso()
   {
    //alert('test');
        $.ajax({
          url: "fc_cerrarpaso",
          type: "GET",
          data: {vfolio: $('#folio').val(), vidpaso:1107, vestado:1},
          dataType: "html",
          success: function(obj) {
          
        }
       });
   }
   
   function insertidpaso2()
   {
    //alert('test');
        $.ajax({
          url: "fc_cerrarpaso",
          type: "GET",
          data: {vfolio: $('#folio').val(), vidpaso:1205, vestado:1},
          dataType: "html",
          success: function(obj) {
          
        }
       });
   }
   function insertidpaso4()
   {
    //alert('test');
        $.ajax({
          url: "fc_cerrarpaso",
          type: "GET",
          data: {vfolio: $('#folio').val(), vidpaso:2106, vestado:1},
          dataType: "html",
          success: function(obj) {
          
        }
       });
   }
   function insertidpaso5()
   {
    //alert('test');
        $.ajax({
          url: "fc_cerrarpaso",
          type: "GET",
          data: {vfolio: $('#folio').val(), vidpaso:2205, vestado:1},
          dataType: "html",
          success: function(obj) {
          
        }
       });
   }
   
   function insertidpaso6()
   {
    //alert('test');
        $.ajax({
          url: "fc_cerrarpaso",
          type: "GET",
          data: {vfolio: $('#folio').val(), vidpaso:2305, vestado:1},
          dataType: "html",
          success: function(obj) {
          
        }
       });
   }
   function insertidpaso7()
   {
    //alert('test');
        $.ajax({
          url: "fc_cerrarpaso",
          type: "GET",
          data: {vfolio: $('#folio').val(), vidpaso:2405, vestado:1},
          dataType: "html",
          success: function(obj) {
          
        }
       });
   }
   
   
   function insertidpaso8()
   {
    //alert('test');
        $.ajax({
          url: "fc_cerrarpaso",
          type: "GET",
          data: {vfolio: $('#folio').val(), vidpaso:2505, vestado:1},
          dataType: "html",
          success: function(obj) {
          
        }
       });
   }
   
   function insertidpaso9()
   {
    //alert('test');
        $.ajax({
          url: "fc_cerrarpaso",
          type: "GET",
          data: {vfolio: $('#folio').val(), vidpaso:2605, vestado:1},
          dataType: "html",
          success: function(obj) {
          
        }
       });
   }

   function insertidpaso10()
   {
    //alert('test');
        $.ajax({
          url: "fc_cerrarpaso",
          type: "GET",
          data: {vfolio: $('#folio').val(), vidpaso:2704, vestado:1},
          dataType: "html",
          success: function(obj) {
          
        }
       });
   }

   function insertidpaso11()
   {
    //alert('test');
        $.ajax({
          url: "fc_cerrarpaso",
          type: "GET",
          data: {vfolio: $('#folio').val(), vidpaso:2805, vestado:1},
          dataType: "html",
          success: function(obj) {
          
        }
       });
   }
   
   function insertidpaso81()
   {
    //alert('test');
        $.ajax({
          url: "fc_cerrarpaso",
          type: "GET",
          data: {vfolio: $('#folio').val(), vidpaso:8105, vestado:1},
          dataType: "html",
          success: function(obj) {
          
        }
       });
   }

   function insertidpaso90()
   {
    //alert('test');
        $.ajax({
          url: "fc_cerrarpaso",
          type: "GET",
          data: {vfolio: $('#folio').val(), vidpaso:9005, vestado:1},
          dataType: "html",
          success: function(obj) {
          
        }
       });
   }
   function insertidpaso91()
   {
    //alert('test');
        $.ajax({
          url: "fc_cerrarpaso",
          type: "GET",
          data: {vfolio: $('#folio').val(), vidpaso:9105, vestado:1},
          dataType: "html",
          success: function(obj) {
          
        }
       });
   }

   function insertidpaso102()
   {
    //alert('test');
        $.ajax({
          url: "fc_cerrarpaso",
          type: "GET",
          data: {vfolio: $('#folio').val(), vidpaso:104, vestado:1},
          dataType: "html",
          success: function(obj) {
            
            location.href = "../c_encuadre/fc_encuadre?folio=" + $('#folio').val() +  "&idintegrante=0" +"&doccogestor="+$('#doccogestor').val();                    
        }
       });
   }
//function oportunidadi(folio,idintegrante,ffeccha)
//    { 
////para la edad
//
//            var aaaammdd = calcular_edad(ffeccha);
//        
//            if((aaaammdd[0] < 0)||(aaaammdd[0] > 100)) 
//            {
//
//            boxfechanac('Fecha Invalida: No puede ser mayor a la fecha actual o tener mas de 100 años');
//
//            }
//            else
//            {
//                
//                
//            var yea = aaaammdd[0];
//            var mes = aaaammdd[1];
//            var dias = aaaammdd[2];
//            
//            location.href = "../c_acercaroportunidadi/fc_acercaroportunidadi?folio="+ folio +"&idintegrante="+idintegrante+  "&idtitular=" + $('#idtitular').val() + "&yea=" + yea + "&mes=" + mes + "&dias=" + dias;            
//            }  
////fin para la edad
//
//
//        
//    }




function oportunidadi(folio,idintegrante,ffeccha)
    { 
//para la edad
             
               
            if ((ffeccha == '')){
                
                mensajito('Alerta','Este usuario no tiene la edad registrada en la linea de clasificación familiar.'); 
            }
             
            var aaaammdd = calcular_edad(ffeccha);
        
            if((aaaammdd[0] < 0)||(aaaammdd[0] > 100)) 
            {

            mensajito('Fecha Invalida: No puede ser mayor a la fecha actual o tener mas de 100 años');

            }
        
            else
            {
                
                
            var yea = aaaammdd[0];
            var mes = aaaammdd[1];
            var dias = aaaammdd[2];
            
           // location.href = "../c_acercaroportunidadi/fc_acercaroportunidadi?folio="+ folio +"&idintegrante="+idintegrante+  "&idtitular=" + $('#idtitular').val()+"&variable=1" + "&yea=" + yea + "&mes=" + mes + "&dias=" + dias;            
            }  
            
          if($('#evariable').val()=='1')
          {
             location.href = "../c_acercaroportunidadi/fc_acercaroportunidadi?folio="+ folio +"&idintegrante="+idintegrante+  "&idtitular=" + $('#idtitular').val()+"&variable=1" + "&yea=" + yea + "&mes=" + mes + "&dias=" + dias;            
          }
          else if ($('#evariable').val()=='2')
          {
              location.href = "../c_acercaroportunidadi/fc_acercaroportunidadi?folio="+ folio +"&idintegrante="+idintegrante+  "&idtitular=" + $('#idtitular').val()+"&variable=2" + "&yea=" + yea + "&mes=" + mes + "&dias=" + dias;            
          }else if ($('#evariable').val()=='4')
          {
              location.href = "../c_acercaroportunidadi/fc_acercaroportunidadi?folio="+ folio +"&idintegrante="+idintegrante+  "&idtitular=" + $('#idtitular').val()+"&variable=4" + "&yea=" + yea + "&mes=" + mes + "&dias=" + dias;            
          }else if ($('#evariable').val()=='5')
          {
              location.href = "../c_acercaroportunidadi/fc_acercaroportunidadi?folio="+ folio +"&idintegrante="+idintegrante+  "&idtitular=" + $('#idtitular').val()+"&variable=5" + "&yea=" + yea + "&mes=" + mes + "&dias=" + dias;            
          }
          else if ($('#evariable').val()=='6')
          {
              location.href = "../c_acercaroportunidadi/fc_acercaroportunidadi?folio="+ folio +"&idintegrante="+idintegrante+  "&idtitular=" + $('#idtitular').val()+"&variable=6" + "&yea=" + yea + "&mes=" + mes + "&dias=" + dias;            
          }
          else if ($('#evariable').val()=='7')
          {
              location.href = "../c_acercaroportunidadi/fc_acercaroportunidadi?folio="+ folio +"&idintegrante="+idintegrante+  "&idtitular=" + $('#idtitular').val()+"&variable=7" + "&yea=" + yea + "&mes=" + mes + "&dias=" + dias;            
          }
          else if ($('#evariable').val()=='8')
          {
              location.href = "../c_acercaroportunidadi/fc_acercaroportunidadi?folio="+ folio +"&idintegrante="+idintegrante+  "&idtitular=" + $('#idtitular').val()+"&variable=8" + "&yea=" + yea + "&mes=" + mes + "&dias=" + dias;            
          }
          else if ($('#evariable').val()=='9')
          {
              location.href = "../c_acercaroportunidadi/fc_acercaroportunidadi?folio="+ folio +"&idintegrante="+idintegrante+  "&idtitular=" + $('#idtitular').val()+"&variable=9" + "&yea=" + yea + "&mes=" + mes + "&dias=" + dias;            
          }
          else if ($('#evariable').val()=='10')
          {
              location.href = "../c_acercaroportunidadi/fc_acercaroportunidadi?folio="+ folio +"&idintegrante="+idintegrante+  "&idtitular=" + $('#idtitular').val()+"&variable=10" + "&yea=" + yea + "&mes=" + mes + "&dias=" + dias;            
          }
          else if ($('#evariable').val()=='11')
          {
              location.href = "../c_acercaroportunidadi/fc_acercaroportunidadi?folio="+ folio +"&idintegrante="+idintegrante+  "&idtitular=" + $('#idtitular').val()+"&variable=11" + "&yea=" + yea + "&mes=" + mes + "&dias=" + dias;            
          }
          else if ($('#evariable').val()=='81')
          {
              location.href = "../c_acercaroportunidadi/fc_acercaroportunidadi?folio="+ folio +"&idintegrante="+idintegrante+  "&idtitular=" + $('#idtitular').val()+"&variable=81" + "&yea=" + yea + "&mes=" + mes + "&dias=" + dias;            
          }
          else if ($('#evariable').val()=='90')
          {
              location.href = "../c_acercaroportunidadi/fc_acercaroportunidadi?folio="+ folio +"&idintegrante="+idintegrante+  "&idtitular=" + $('#idtitular').val()+"&variable=90" + "&yea=" + yea + "&mes=" + mes + "&dias=" + dias;            
          }
          else if ($('#evariable').val()=='91')
          {
              location.href = "../c_acercaroportunidadi/fc_acercaroportunidadi?folio="+ folio +"&idintegrante="+idintegrante+  "&idtitular=" + $('#idtitular').val()+"&variable=91" + "&yea=" + yea + "&mes=" + mes + "&dias=" + dias;            
          }
          else if ($('#evariable').val()=='102')
          {
              location.href = "../c_acercaroportunidadi/fc_acercaroportunidadi?folio="+ folio +"&idintegrante="+idintegrante+  "&idtitular=" + $('#idtitular').val()+"&variable=102" + "&yea=" + yea + "&mes=" + mes + "&dias=" + dias;            
          }
              
                   
          else 
           {
              location.href = "../c_acercaroportunidadi/fc_acercaroportunidadi?folio="+ folio +"&idintegrante="+idintegrante+  "&idtitular=" + $('#idtitular').val()+"&variable=3" + "&yea=" + yea + "&mes=" + mes + "&dias=" + dias;            
          }   
//fin para la edad


        
    }


</script>
</html>