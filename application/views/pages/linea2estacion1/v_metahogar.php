<!DOCTYPE html>
<html lang="es">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title><?php echo $titulo ?>  </title>
    <link rel="stylesheet" href="<?php echo BOOTSTRAP, 'css/bootstrap1.min.css'; ?>" >
    <meta charset="utf-8">
    <meta http-equiv="Content-Language" content="es"/>
    
    
<input id="idestacion" value="<?php echo $idestacion ?>" style="display: none">
         


</head>
<body>  
    
    <!--Modal nueva meta-->
    <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Ingresar Nueva Meta</h4>
        </div>
        <div class="modal-body">
         <div class="row">
            <div class="form-group col-md-8 form-group-sm">
            <label class="control-label">Describir  la meta</label>
            <textarea class="form-control" id="descripcionnuevameta" onkeypress="return soloLetras(event)" value=""></textarea>
            </div>
            <div class="form-group col-md-4 form-group-sm">
                        <label class="control-label" >Dimensión de la meta</label>
                        <select class="form-control input-sm" id="dimensionnuevameta">
                            <option value="">Seleccionar</option>
                            <?php echo $dimensiones ?> 
                        </select>
            </div>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-success" id="guardarnuevameta" >Guardar</button>
            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
          
        </div>
      </div>
    </div>
  </div>
    <!--Fin modal nueva meta-->
    
    
        <!--Modal nueva accion-->
    <div class="modal fade" id="myModalaccion" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Ingresar Nueva Accion</h4>
        </div>
        <div class="modal-body">
         
            <div class="row">
            <div class="form-group col-md-8 form-group-sm">
            <label class="control-label">Describir accion</label>
            <textarea class="form-control" id="descripcionnuevaaccion" onkeypress="return soloLetras(event)" value=""></textarea>
            </div>
                <div class="form-group col-md-4 form-group-sm">
                        <label class="control-label" >Elegir Accion</label>
                        <select class="form-control input-sm" id="nuevaccion">
                            <option value="">Seleccionar</option>
                             <?php echo $acciones ?> 
                            
                        </select>
            </div>
            
            </div>
            
            <div class="row">
            
            
            </div>
            <div class="row">

                <table class="table table-condensed">
                    <thead>
                        <tr>
                            <th>Accion</th>
                            <th>Descripcion</th>
                            <th>Fecha</th>
                            <th>Eliminar</th>
                            <th>Editar</th>
                        </tr>
                    </thead>
                    <tbody id="totalacciones">

                    </tbody>
                </table>

            </div>
        </div>
        <div class="modal-footer">
            <input type="text" class="form-control input-sm" id="idmetaaccion" value="" style="display: none">
            <input type="text" class="form-control input-sm" id="ideditaraccion" value="" style="display: none">
            
            <button type="button" class="btn btn-success" id="guardarnuevaaccion">Guardar</button>
            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
          
        </div>
      </div>
    </div>
  </div>
    <!--Fin modal nueva accion-->
    <div class="container">
        <!--head-->
        
        
        
        <?php echo($head); ?>
        <!-- fin head-->
        <input type="text" class="form-control input-sm" id="folio" name="folio"  style="display:none"   placeholder="folio" value="<?php echo($folio); ?>">
        <input type="text" class="form-control input-sm" id="doccogestor" name="doccogestor" style="display: none" placeholder="Text input" value="<?php echo($doccogestor); ?>">
        <hr>
        <!--<form class="form-group" name="formulario" id="formulario">-->
            <!--inicio radio una sola seleccion-->
            <div class="row">
            <div class="panel panel-info">
            <div class="panel-heading">¿QUÉ QUIERO LOGRAR CON MI HOGAR?</strong></div>
            </div>    
            <label><h5><strong>Generar o crear en conjunto con el hogar mínimo una meta y máximo 3, que desee lograr a través del acompañamiento familiar. Si el hogar plantea más, acordar tres prioritarios.</strong></h5></label>        
            
            
            <div id="divmetas">
            <?php echo $metas ?>
            </div>    
            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal">Crear Nueva Meta</button>
            <!--inicio botonera guardar y actualizar-->
            <?php 
                echo($botonerag);
            
            
             
            ?>   
            <!--Fin botonera guardar y actualizar-->

        <!--</form>-->
    
    <!--Inicio Este es el footer NO TOCAR-->
    <?php echo($foot); ?>
    <!--fin del footer NO TOCAR-->
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
$(document).ready(function()
    {

        $("#guardar").click(function ()
        {
                        $.ajax({
                          url: "fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(), vmeta1mostrar : $('#meta1mostrar').val(),vmeta1dime : $('#meta1dime').val(),vmeta2mostrar : $('#meta2mostrar').val(),vmeta2dime : $('#meta2dime').val(),vmeta3mostrar : $('#meta3mostrar').val(),vmeta3dime : $('#meta3dime').val()},    
                          dataType: "html",
                          success : function(obj){                      
                          botonguardar();
                          }
                        });                    
        });
        
        $("#guardarnuevameta").click(function ()
        {
                        $.ajax({
                          url: "fc_guardarnuevameta",
                          type: "GET",
                          data: {vfolio : $('#folio').val(), vnuevameta : $('#descripcionnuevameta').val(),vdimensionnuevameta : $('#dimensionnuevameta').val()},    
                          dataType: "html",
                          success : function(obj){     
                              $('#divmetas').empty();
                              $('#divmetas').html(obj);
                              $('#descripcionnuevameta').val('');
                              $('#dimensionnuevameta').val('');
                              $('#myModal').modal('hide');
                              $("#siguiente").show();
                               $("#siguiente").prop('disabled',false);
                              
                          }
                        });                 
        });
        $("#guardarnuevaaccion").click(function ()
        {
            
            
            
                        $.ajax({
                          url: "fc_insertaraccion",
                          type: "GET",
                          data: {vidaccion : $('#nuevaccion').val(),vfolio : $('#folio').val(), vidmeta : $('#idmetaaccion').val(),vdescripcion : $('#descripcionnuevaaccion').val(),vidaccioneditar: $('#ideditaraccion').val()},    
                          dataType: "html",
                          success : function(obj){     
                              $('#totalacciones').html(obj);
                              $('#nuevaccion').val('');
                              $('#descripcionnuevaaccion').val('')
                              
                          }
                        });                 
        });

        
        $("#actualizar").click(function ()
        {
                        $.ajax({
                          url: "fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(), vmeta1mostrar : $('#meta1mostrar').val(),vmeta1dime : $('#meta1dime').val(),vmeta2mostrar : $('#meta2mostrar').val(),vmeta2dime : $('#meta2dime').val(),vmeta3mostrar : $('#meta3mostrar').val(),vmeta3dime : $('#meta3dime').val()},    
                          dataType: "html",
                          success : function(obj){                      
                          botonactualizar();
                          }
                        });                   
        });
//        $("#siguiente").click(function ()
//        {
//        if($('#idestacion').val() == '21')
//        {
//            insertidpaso(2104);
//           location.href = "../../c_protocolol2e1/fc_protocolol2e1?folio="+ $('#folio').val() +"&idintegrante=0"+"&doccogestor="+$('#doccogestor').val()+"&idestacion=21";
//       }
//       else{insertidpaso(2203);
//           location.href = "../../c_protocolol2e2/fc_protocolol2e2?folio="+ $('#folio').val() +"&idintegrante=0"+"&doccogestor="+$('#doccogestor').val()+"&idestacion=22";
//       }
//        });

$("#siguiente").click(function ()
  {
      if($('#idestacion').val() == '21')
      {
           insertidpaso(2104);
          location.href = "../../c_protocolol2e1/fc_protocolol2e1?folio="+ $('#folio').val() +"&idintegrante=0"+"&doccogestor="+$('#doccogestor').val()+"&idestacion=21";
      }
      else if ($('#idestacion').val() == '22')
      {
          insertidpaso(2203);
          location.href = "../../c_protocolol2e2/fc_protocolol2e2?folio="+ $('#folio').val() +"&idintegrante=0"+"&doccogestor="+$('#doccogestor').val()+"&idestacion=22";
      }
      else if ($('#idestacion').val() == '24')
      {
          insertidpaso(2403);
          location.href = "../../c_protocolol2e4/fc_protocolol2e4?folio="+ $('#folio').val() +"&idintegrante=0"+"&doccogestor="+$('#doccogestor').val()+"&idestacion=24";
      }
      else if ($('#idestacion').val() == '25')
      {
          insertidpaso(2503);
          location.href = "../../c_protocolol2e5/fc_protocolol2e5?folio="+ $('#folio').val() +"&idintegrante=0"+"&doccogestor="+$('#doccogestor').val()+"&idestacion=25";
      }
      
      else if ($('#idestacion').val() == '26')
      {
          insertidpaso(2603);
          location.href = "../../c_protocolol2e6/fc_protocolol2e6?folio="+ $('#folio').val() +"&idintegrante=0"+"&doccogestor="+$('#doccogestor').val()+"&idestacion=26";
      }
      else
      {
            insertidpaso(2303);
            location.href = "../../c_protocolol2e3/fc_protocolol2e3?folio="+ $('#folio').val() +"&idintegrante=0"+"&doccogestor="+$('#doccogestor').val()+"&idestacion=23";
          
      }
      
            
  });
        
        
        
        $("#anterior").click(function ()
        {
             
        if($('#idestacion').val() == '21')
        {
//             location.href = "../c_infocorresp/fc_infocorresp?folio=" + $('#folio').val()+"&idintegrante=0"+"&doccogestor="+$('#doccogestor').val();                   
             location.href = "../../c_protocolol2e1/fc_protocolol2e1?folio="+ $('#folio').val() +"&idintegrante=0"+"&doccogestor="+$('#doccogestor').val()+"&idestacion=21";
         }
         else if($('#idestacion').val() == '22')
        {
//             location.href = "../c_infocorresp/fc_infocorresp?folio=" + $('#folio').val()+"&idintegrante=0"+"&doccogestor="+$('#doccogestor').val();                   
             location.href = "../../c_protocolol2e2/fc_protocolol2e2?folio="+ $('#folio').val() +"&idintegrante=0"+"&doccogestor="+$('#doccogestor').val()+"&idestacion=22";
         }
         else if($('#idestacion').val() == '24')
        {
//             location.href = "../c_infocorresp/fc_infocorresp?folio=" + $('#folio').val()+"&idintegrante=0"+"&doccogestor="+$('#doccogestor').val();                   
             location.href = "../../c_protocolol2e4/fc_protocolol2e4?folio="+ $('#folio').val() +"&idintegrante=0"+"&doccogestor="+$('#doccogestor').val()+"&idestacion=24";
         }
         else if($('#idestacion').val() == '25')
        {
//             location.href = "../c_infocorresp/fc_infocorresp?folio=" + $('#folio').val()+"&idintegrante=0"+"&doccogestor="+$('#doccogestor').val();                   
             location.href = "../../c_protocolol2e5/fc_protocolol2e5?folio="+ $('#folio').val() +"&idintegrante=0"+"&doccogestor="+$('#doccogestor').val()+"&idestacion=25";
         }
          else if($('#idestacion').val() == '26')
        {
//             location.href = "../c_infocorresp/fc_infocorresp?folio=" + $('#folio').val()+"&idintegrante=0"+"&doccogestor="+$('#doccogestor').val();                   
             location.href = "../../c_protocolol2e6/fc_protocolol2e6?folio="+ $('#folio').val() +"&idintegrante=0"+"&doccogestor="+$('#doccogestor').val()+"&idestacion=26";
         }
         else
         {
               location.href = "../../c_protocolol2e3/fc_protocolol2e3?folio="+ $('#folio').val() +"&idintegrante=0"+"&doccogestor="+$('#doccogestor').val()+"&idestacion=23";
         }
         
        });
//para cargar variables capitulo, pregunta,encuestador,vivienda,barra
cargardatosgenerales('<?php echo('Historia del hogar'); ?>','Vista 1 de 1','<?php echo($arraydatosgenerales['enomcoges']); ?>','<?php echo($arraydatosgenerales['etitular']); ?>','100');
//control del boton ayuda
botonayuda();
});


function insertidpaso(paso)
   {
    //alert('test');
        $.ajax({
          url: "fc_cerrarpaso",
          type: "GET",
          data: {vfolio: $('#folio').val(), vidpaso: paso, vestado:1},
          dataType: "html",
          success: function(obj) {
          
        }
       });
   }
    


function nuevaaccion(idmeta){
    
$('#ideditaraccion').val('0');
    
     $.ajax({
                          url: "fc_abriracciones",
                          type: "GET",
                          data: {vfolio : $('#folio').val(), vidmeta : idmeta},    
                          dataType: "html",
                          success : function(obj){ 
                              $('#nuevaccion').val('');
                              $('#descripcionnuevaaccion').val('')
                         $('#idmetaaccion').val(idmeta);     
                         $('#myModalaccion').modal('show');
                         $('#totalacciones').html(obj);
                          }
                        });   
    
}


function eliminaraccion(idaccion){
    
     $.ajax({
                          url: "fc_eliminaraccion",
                          type: "GET",
                          data: {vidaccion : idaccion,vfolio : $('#folio').val(), vidmeta : $('#idmetaaccion').val()},    
                          dataType: "html",
                          success : function(obj){ 
                        
                         $('#totalacciones').html(obj);
                          }
                        });   
    
}


function metaerror(div,campo)
{
    //    alert(div + ' juanpis ' + campo);
   if(($('#'+ campo).val() == ''))
   { 
       $('#' + div).addClass('has-error');
   }
   else
   { 
       $('#' + div).removeClass('has-error');
   }
    validarbolitasytexto(div,campo)
}
function meta2error()
{
   if(($('#meta2mostrar').val() !== '' && $('#meta2dime').val()== '' ))
   { 
       
       $('#meta2dimediv').addClass('has-error');
      // validarbolitasytexto(div,campo)
    //   $('#' + div).addClass('has-error');
   }
   else if($('#meta2mostrar').val() == '' && $('#meta2dime').val()!== '' )
   { 
       $('#meta2mostrarp').addClass('has-error');
     //  validarbolitasytexto(div,campo)
       //$('#' + div).removeClass('has-error');
   }
   else 
   { 
       $('#meta2mostrarp').removeClass('has-error');
       $('#meta2dimediv').removeClass('has-error');
    //   validarbolitasytexto(div,campo)
       //$('#' + div).removeClass('has-error');
   }
   validarguardar();
 //   validarbolitasytexto(div,campo)
}
function meta3error()
{
   if(($('#meta3mostrar').val() !== '' && $('#meta3dime').val()== '' ))
   { 
       
       $('#meta3dimediv').addClass('has-error');
      // validarbolitasytexto(div,campo)
    //   $('#' + div).addClass('has-error');
   }
   else if($('#meta3mostrar').val() == '' && $('#meta3dime').val()!== '' )
   { 
       $('#meta3mostrarp').addClass('has-error');
     //  validarbolitasytexto(div,campo)
       //$('#' + div).removeClass('has-error');
   }
   else 
   { 
       $('#meta3mostrarp').removeClass('has-error');
       $('#meta3dimediv').removeClass('has-error');
    //   validarbolitasytexto(div,campo)
       //$('#' + div).removeClass('has-error');
   }
   validarguardar();
 //   validarbolitasytexto(div,campo)
}

function actualizarmeta(idmeta,nmeta){
    $.ajax({
                          url: "fc_actualizarmeta",
                          type: "GET",
                          data: {vidmeta : idmeta,vfolio : $('#folio').val(), vnuevameta : $('#meta'+nmeta+'mostrar').val(),vdimensionnuevameta : $('#meta'+nmeta+'dime').val()},    
                          dataType: "html",
                          success : function(obj){     
                              $('#divmetas').empty();
                              $('#divmetas').html(obj);
                              $('#descripcionnuevameta').val('');
                              $('#dimensionnuevameta').val('');
                              $('#myModal').modal('hide');
                            //  $("#siguiente").show();
                               $("#siguiente").prop('disabled',false);
                              
                          }
                        });  
}

function editaraccion(id,idaccion,descripcion){
    
    $('#descripcionnuevaaccion').val(descripcion);
    $('#nuevaccion').val(idaccion);
    $('#ideditaraccion').val(id);
    
}

$("#capitulos").hide();
$("#cancelar").hide();
$("#guardar").hide();
$("#siguiente").show();
</script>
</html>