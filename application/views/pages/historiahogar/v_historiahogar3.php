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
        <input type="text" class="form-control input-sm" id="doccogestor" name="doccogestor" style="display: none" placeholder="Text input" value="<?php echo($doccogestor); ?>">
        <input type="text" class="form-control input-sm" id="c2p1" name="c2p1" style="display:none" value="<?php echo($arrayrespuestas['ec2p1']); ?>">
        <input type="text" class="form-control input-sm" id="idestacion" name="idestacion"  style="display:none"   placeholder="" value="<?php echo($idestacion); ?>">
        <!--fin para imprimir el folio y llevarlo-->
<hr>
        <form class="form-group" name="formulario" id="formulario">
            
<div class="panel panel-info">
  <!-- Default panel contents -->
  <div class="panel-heading">HISTORIA DEL HOGAR</div>
<!--  <div class="panel-body">
    <p>...</p>
  </div>            -->
            
<!--j            -->
<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
  <div class="panel panel-danger">
    <div class="panel-heading" role="tab" id="headingOne">
      <h4 class="panel-title">
        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        <h5>Actualización de la historia de vida del hogar<small> (En este apartado se detalla la conformación del grupo familiar y se hace  descripción cualitativa de los factores protectores y de riesgo de éste, alteraciones en la dinámica familiar, aspectos  relevantes que den cuenta de la trazabilidad del acompañamiento brindado y el mejoramiento o dificultades del hogar  y/o sus integrantes.)</small></h5>
        </a>
<!--        boton adicionar Logro-->
        <button type="button" id="vayuda" name="vayuda" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModalconf">
            <span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span> Adicionar
        </button> 
<!--   fin  boton adicionar Logro-->              
      </h4>
    </div>
    <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
        <?php echo($arraytraerconformacion); ?>
     </div>    
  </div>
<!--  <div class="panel panel-danger">
    <div class="panel-heading" role="tab" id="headingTwo">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          <h5>¿De dónde Procede el hogar? <small>(En este campo se describe  si la familia procede de otro municipio, de otra comuna, etc; además  las razones por las cuales hoy se encuentran en ese lugar, si es por causa de desplazamiento forzado, en búsqueda de oportunidades, etc.)</small></h5>
        </a>
        boton adicionar Logro
        <button type="button" id="vayuda" name="vayuda" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModalpro">
            <span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span> Adicionar
        </button> 
   fin  boton adicionar Logro              
      </h4>
    </div>
    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
        <?php echo($arraytraerprocedencia); ?>
    </div>
  </div>-->
<!--  <div class="panel panel-danger">
    <div class="panel-heading" role="tab" id="headingThree">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          <h5>¿Cuáles son las Principales Costumbres y características del hogar? <small>(En este campo se describen las condiciones Culturales, religiosas, sociales, etc.)</small></h5>
        </a>
        boton adicionar Logro
        <button type="button" id="vayuda" name="vayuda" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModalcos">
            <span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span> Adicionar
        </button> 
   fin  boton adicionar Logro          
      </h4>
    </div>
    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
        <?php echo($arraytraercostumbres); ?>
    </div>
  </div>-->
<div class="panel panel-danger">
    <div class="panel-heading" role="tab" id="headingThree">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseCuatro" aria-expanded="false" aria-controls="collapseCuatro">
            <h5>¿Qué nos hace orgullosos de nuestro hogar? <small>(En este campo se describen los eventos de gran importancia identificados en el hogar al momento de iniciar el proceso de acompañamiento; por ejemplo la adquisición de la casa, la graduación universitaria de un integrante del hogar, la realización de un viaje, etc.)</small></h5>
        </a>
        
        <button type="button" id="vayuda" name="vayuda" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModallo">
            <span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span> Adicionar
        </button> 
 
      </h4>
    </div>
    <div id="collapseCuatro" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingCuatro">
       
        <?php echo($arraytraerlogros); ?>
      
    </div>
  </div>
</div>
<!--f-->
</div>
            <!--inicio radio una sola seleccion-->
<!--            <div class="row">
            <div id="c2p10div" name="c2p10div" <?php if($arrayrespuestas['ec2p10']==''){echo('class="form-group col-md-12 form-group-sm has-error"');}else{echo('class="form-group col-md-12 form-group-sm"');}?>>   
                <label class="control-label">10. El hogar  cuenta con espacios diferenciados de baño, cocina, y dormitorios. (Unica respuesta)
                    <button type="button" id="vayuda" name="vayuda" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModal">
                        <span class="glyphicon glyphicon-question-sign" aria-hidden="true"></span> Ayuda
                    </button>
                </label>
                <div class="radio">
                    <label>en este caso se manda a la fincion javascript el valor del campo
                        <input type="radio" name="c2p10" id="c2p10" onclick="colocaropcion('1','valorc2p10','c2p10div');" value="1" <?php if($arrayrespuestas['ec2p10']=='1'){echo('checked');}?>>
                        Si
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="c2p10" id="c2p10" onclick="colocaropcion('2','valorc2p10','c2p10div');" value="2" <?php if($arrayrespuestas['ec2p10']=='2'){echo('checked');}?>>
                        No
                    </label>             
                </div> 
               
                
                <input type="text" class="form-control" id="valorc2p10" name="valorc2p10" style="display:none" placeholder="Text input" value="<?php echo($arrayrespuestas['ec2p10']); ?>">
            </div>
            </div> -->
            <!--fin radio una sola seleccion-->
            
            <!-- Modal conformacion-->
            <div class="modal fade" id="myModalconf" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Nueva - Conformacion</h4>
                  </div>
                  <div class="modal-body">
                      <p>Como está conformado el hogar, madre, padre e hijos, etc.:</p>
                      <hr/>
                      <textarea id="textconformacion" class="form-control" rows="3" onchange="validarconformacionlleno()"></textarea>
                  </div>
                  <div class="modal-footer">
                    
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                    <button type="button" id="btngconformacion" class="btn btn-danger" data-dismiss="modal" disabled="" onclick="guardarconformacion()">Guardar</button>
                  </div>
                </div>
              </div>
            </div>
            <!-- Modal -->
            
            <!-- Modal procedencia-->
<!--            <div class="modal fade" id="myModalpro" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Nueva - Procedencia</h4>
                  </div>
                  <div class="modal-body">
                      <p>En este campo se describe  si la familia procede de otro municipio, de otra comuna, etc; además  las razones por las cuales hoy se encuentran en ese lugar, si es por causa de desplazamiento forzado, en búsqueda de oportunidades, etc. :</p>
                      <hr/>
                      <textarea id="textprocedencia" class="form-control" rows="3" onchange="validarprocedencia()"></textarea>
                  </div>
                  <div class="modal-footer">
                    
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                    <button type="button" id="btngprocedencia" class="btn btn-danger" data-dismiss="modal" disabled="" onclick="guardarprocedencia()">Guardar</button>
                  </div>
                </div>
              </div>
            </div>-->
            <!-- Modal -->
            
            <!-- Modal costumbres-->
<!--            <div class="modal fade" id="myModalcos" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Nueva - Costumbres</h4>
                  </div>
                  <div class="modal-body">
                      <p>Culturales, religiosas, etc.:</p>
                      <hr/>
                      <textarea id="textcostumbres" class="form-control" rows="3" onchange="validarcostumbreslleno()"></textarea>
                  </div>
                  <div class="modal-footer">
                    
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                    <button type="button" id="btngcostumbres" class="btn btn-danger" data-dismiss="modal" disabled="" onclick="guardarcostumbres()">Guardar</button>
                  </div>
                </div>
              </div>
            </div>-->
            <!-- Modal -->
            
<!--             Modal logros-->
            <div class="modal fade" id="myModallo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Nueva - Logros</h4>
                  </div>
                  <div class="modal-body">
                      <p>Logros identificados en el hogar:</p>
                      <hr/>
                      <textarea id="textlogros" class="form-control" rows="3" onchange="validarlogrolleno()"></textarea>
                  </div>
                  <div class="modal-footer">
                    
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                    <button type="button" id="btnglogros" class="btn btn-danger" data-dismiss="modal" disabled="" onclick="guardarlogros()">Guardar</button>
                  </div>
                </div>
              </div>
            </div>
            
<!--            <button type="button" id="cerrarestacionh" class="btn btn-success" data-dismiss="modal" onclick="cerrarestacionh()">Cerrar estacion H - HISTORIA DEL HOGAR</button>-->
            <!-- Modal -->            

            <!--inicio botonera guardar y actualizar-->
            <?php if($arraytraerconformacion=="")
            {
                echo($botonerag);
            }
            else
            {
                echo($botoneraa);
            }?>   
            <!--Fin botonera guardar y actualizar-->

        </form>
    
    <!--Inicio Este es el footer NO TOCAR-->
    <?php echo($foot); ?>
    <!--fin del footer NO TOCAR-->
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
                          data: {vfolio : $('#folio').val(), vvalorc2p10 : $('#valorc2p10').val()},    
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
                          data: {vfolio : $('#folio').val(), vvalorc2p10 : $('#valorc2p10').val()},    
                          dataType: "html",
                          success : function(obj){                      
                          botonactualizar();
                          }
                        });                   
        });
        

        $("#siguiente").click(function ()
        {
        //insertarpaso(1207); 
        //location.href = "../../c_protocolol1e2/fc_protocolol1e2?folio="+ $('#folio').val() +"&idintegrante=0"+"&doccogestor="+$('#doccogestor').val();  
        location.href = "../c_infocorresp/fc_infocorresp?folio="+ $('#folio').val() +"&idintegrante=0"+"&doccogestor="+$('#doccogestor').val() + "&idestacion=" + $('#idestacion').val();  
        });
              
        $("#anterior").click(function ()
        {
         botonanterior();
         if($('#idestacion').val() == '21'){
             
             location.href = "../../c_protocolol2e1/fc_protocolol2e1?folio="+ $('#folio').val() +"&idintegrante=0"+"&doccogestor="+$('#doccogestor').val();                    
         }
         
         if($('#idestacion').val() == '12'){
             
             location.href = "../../c_protocolol1e2/fc_protocolol1e2?folio="+ $('#folio').val() +"&idintegrante=0"+"&doccogestor="+$('#doccogestor').val();                    
         }
         if($('#idestacion').val() == '22'){
             
             location.href = "../../c_protocolol2e2/fc_protocolol2e2?folio="+ $('#folio').val() +"&idintegrante=0"+"&doccogestor="+$('#doccogestor').val();                    
         }
          if($('#idestacion').val() == '23'){
             
             location.href = "../../c_protocolol2e3/fc_protocolol2e3?folio="+ $('#folio').val() +"&idintegrante=0"+"&doccogestor="+$('#doccogestor').val();                    
         }
         
         if($('#idestacion').val() == '24'){
             
             location.href = "../../c_protocolol2e4/fc_protocolol2e4?folio="+ $('#folio').val() +"&idintegrante=0"+"&doccogestor="+$('#doccogestor').val();                    
         }
         
         if($('#idestacion').val() == '25'){
             
             location.href = "../../c_protocolol2e5/fc_protocolol2e5?folio="+ $('#folio').val() +"&idintegrante=0"+"&doccogestor="+$('#doccogestor').val();                    
         }
         
        //location.href = "../c_capitulosintegrantes/fc_capitulosintegrantes?folio=" + $('#folio').val()+ "&idintegrante="+"&idintegrante=0";                    
        });

//para cargar variables capitulo, pregunta,encuestador,vivienda,barra
cargardatosgenerales('<?php echo('Historia hogar'); ?>','Vista 1 de 1','<?php echo($arraydatosgenerales['enomcoges']); ?>','<?php echo($arraydatosgenerales['etitular']); ?>','100');
//control del boton ayuda
botonayuda();

});
//inicio logros
function guardarlogros()
{
    //alert('hola logros');
    
                        $.ajax({
                          url: "fc_hfinsertarlogro",
                          type: "POST",
                          data: {vfolio : $('#folio').val(), vtextlogro : $('#textlogros').val(), vestacion : $('#idestacion').val()},    
                          dataType: "html",
                          success : function(obj){
                          $('#collapseCuatro').html(obj);    
                          botonactualizar();
                          $('#textlogros').val('');
                          $('#btnglogros').prop('disabled', true);
                          }
                        });     
}

function validarlogrolleno()
{
    if ($('#textlogros').val() == '')
    {
        $('#btnglogros').prop('disabled', true);
    }
    else
    {
        $('#btnglogros').prop('disabled', false);
    }
}
//fin logros
//inicio conformacion
function guardarconformacion()
{
    //alert('hola logros');
    
                        $.ajax({
                          url: "fc_hfinsertarconformacion",
                          type: "POST",
                          data: {vfolio : $('#folio').val(), vtextconformacion : $('#textconformacion').val(), vestacion : $('#idestacion').val()},    
                          dataType: "html",
                          success : function(obj){
                          $('#collapseOne').html(obj);    
                          botonactualizar();
                          $('#textconformacion').val('');
                          $('#btngconformacion').prop('disabled', true);
                          }
                        });     
}

function validarconformacionlleno()
{
    if ($('#textconformacion').val() == '')
    {
        $('#btngconformacion').prop('disabled', true);
    }
    else
    {
        $('#btngconformacion').prop('disabled', false);
    }
}
//fin logros
//inicio procedencia
function guardarprocedencia()
{
    //alert('hola logros');
    
                        $.ajax({
                          url: "fc_hfinsertarprocedencia",
                          type: "POST",
                          data: {vfolio : $('#folio').val(), vtextprocedencia : $('#textprocedencia').val(), vestacion : $('#idestacion').val()},    
                          dataType: "html",
                          success : function(obj){
                          $('#collapseTwo').html(obj);    
                          botonactualizar();
                          $('#textprocedencia').val('');
                          $('#btngprocedencia').prop('disabled', true);
                          }
                        });     
}

function validarprocedencia()
{
    if ($('#textprocedencia').val() == '')
    {
        $('#btngprocedencia').prop('disabled', true);
    }
    else
    {
        $('#btngprocedencia').prop('disabled', false);
    }
}
//fin procedencia
//inicio costumbres
function guardarcostumbres()
{
    //alert('hola logros');
    
                        $.ajax({
                          url: "fc_hfinsertarcostumbres",
                          type: "POST",
                          data: {vfolio : $('#folio').val(), vtextconstumbres : $('#textcostumbres').val(), vestacion : $('#idestacion').val()},    
                          dataType: "html",
                          success : function(obj){
                          $('#collapseThree').html(obj);    
                          botonactualizar();
                          $('#textcostumbres').val('');
                          $('#btngcostumbres').prop('disabled', true);
                          }
                        });     
}

function validarcostumbreslleno()
{
    if ($('#textcostumbres').val() == '')
    {
        $('#btngcostumbres').prop('disabled', true);
    }
    else
    {
        $('#btngcostumbres').prop('disabled', false);
    }
}

//function insertarpaso(paso)
//   {
//    //alert('test');
//                        $.ajax({
//                          url: "fc_cerrarpaso",
//                          type: "GET",
//                          data: {vfolio: $('#folio').val(), vidpaso: paso, vestado:1},
//                          dataType: "html",
//                          success: function(obj) {
//                          //me llama el mensajito de actualizar
//                          //$('#datos').html(obj);
//                          //location.href = "../c_capituloshogar/fc_capituloshogar?folio="+ $('#folio').val() +"&idintegrante="+$('#idintegrante').val();                  
//                        }
//                       });
//   }
//fin logros

$("#capitulos").hide();

</script>
</html>