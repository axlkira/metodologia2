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
        <?php echo($head3); ?>
        <!-- fin head-->

        <!--para tener la variable de idvivienda-->
        <input type="text" class="form-control input-sm" id="folio" name="folio"  style="display:none"   placeholder="folio" value="<?php echo($folio); ?>">
<!--        <input type="text" class="form-control input-sm" id="idintegrante" name="idintegrante" style="display: none" placeholder="Text input" value="<?php echo($tdatinte['tidintegrante']); ?>">-->
<!--        <input type="text" class="form-control input-sm" id="c2p1" name="c2p1" style="display:none" value="<?php echo($arrayrespuestas['ec2p1']); ?>">-->
        <input type="text" class="form-control input-sm" id="doccogestor" name="doccogestor" style="display:none" placeholder="Text input" value="<?php echo($doccogestor); ?>">
        <input type="text" class="form-control input-sm" id="idestacion" name="idestacion"  style="display:none" placeholder="Text input" value="<?php echo($idestacion); ?>">
        <input type="text" class="form-control input-sm" id="ItiActualizado" name="ItiActualizado"  style="display:none" placeholder="Text input" value="<?php echo($arraydatositi['epobrezamoderada_iti']); ?>">
        <!--fin para imprimir el folio y llevarlo-->

        <?php //echo($numeroformateadofinal); ?>
<hr>
        <form class="form-group" name="formulario" id="formulario">
        
            <!--inicio radio una sola seleccion-->
            <div class="row">
            <div id="ppactualizodiv" name="ppactualizodiv" <?php if($arrayrespuestas['eingresos']==''){echo('class="form-group col-md-12 form-group-sm has-error"');}else{echo('class="form-group col-md-12 form-group-sm"');}?>>   
                <label class="control-label"> ¿El Ingreso del hogar es mayor a $ <?php echo($numeroformateadofinal); ?> por cada integrante?  
                    <button type="button" id="vayuda" name="vayuda" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModal">
                        <span class="glyphicon glyphicon-question-sign" aria-hidden="true"></span> Ayuda
                    </button>
                </label>
                <div class="radio">
                    <label><!--en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="ppactualizo" id="ppactualizo" onclick="colocaropcion('1','valorppactualizo','ppactualizodiv');" value="3" <?php if (($arrayrespuestas['eingresos']=='3')||($arrayrespuestas['eingresos']=='1') ){echo('checked');}?>>
                        Si
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="ppactualizo" id="ppactualizo" onclick="colocaropcion('2','valorppactualizo','ppactualizodiv');" value="2" <?php if($arrayrespuestas['eingresos']=='2'){echo('checked');}?>>
                        No
                    </label>             
                </div> 
               
                
                <input type="text" class="form-control" id="valorppactualizo" name="valorppactualizo" style="display:none" placeholder="Text input" value="<?php echo($arrayrespuestas['eingresos']); ?>">
            </div>
            </div> 
            <!--fin radio una sola seleccion-->
            
            <!-- Modal Ayuda-->
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Ayuda</h4>
                  </div>
                  <div class="modal-body">
                    ... <?php echo($textoayuda); ?>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                  </div>
                </div>
              </div>
            </div>
            <!-- Modal -->

            <!--inicio botonera guardar y actualizar-->
            <?php if($arrayrespuestas['eingresos']=="")
            {
                echo($botoneragcapa);
            }
            else
            {
                echo($botoneraacapa);
            }?>   
            <!--Fin botonera guardar y actualizar-->

        </form>
    
    <!--Inicio Este es el footer NO TOCAR-->
    <?php echo($foot); ?>
    <!--fin del footer NO TOCAR-->
    </div>
    
    
    
    
    <div class="modal fade" id="modal2309" data-backdrop="static" >
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
          <button type="button" id="continuar2309" class="btn btn-primary">Continuar</button>
<!--        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>-->
      </div>
    </div>
  </div>
</div>
    
    
     <div class="modal fade" id="modal2409" data-backdrop="static" >
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
          <button type="button" id="continuar2409" class="btn btn-primary">Continuar</button>
<!--        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>-->
      </div>
    </div>
  </div>
</div>
    
    
      <div class="modal fade" id="modal2509" data-backdrop="static" >
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
          <button type="button" id="continuar2509" class="btn btn-primary">Continuar</button>
<!--        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>-->
      </div>
    </div>
  </div>
</div>
    
    
     <div class="modal fade" id="modal2609" data-backdrop="static" >
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
          <button type="button" id="continuar2609" class="btn btn-primary">Continuar</button>
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

function Modal2309() 
{
$('#modal2309').modal();
}

function Modal2409() 
{
$('#modal2409').modal();
}

function Modal2509() 
{
$('#modal2509').modal();
}

function Modal2609() 
{
$('#modal2609').modal();
}









    $(document).ready(function()
    {

        $("#guardar").click(function ()
        {
                        $.ajax({
                          url: "fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),vestacion : $('#idestacion').val() ,vvalorppactualizo : $('#valorppactualizo').val()},    
                          dataType: "html",
                          success : function(obj){                      
                          botonguardar();
                         // saltoc1p1n5();
                          }
                        });                    
        });
      $("#actualizar").click(function ()
        {
                        $.ajax({
                          url: "fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),vestacion : $('#idestacion').val(),vvalorppactualizo : $('#valorppactualizo').val()},    
                          dataType: "html",
                          success : function(obj){                      
                          botonactualizar();
                         // saltoc1p1n5();
                          }
                        });                   
        });
        

       $("#siguiente").click(function ()
        {
            
             
             if($('#idestacion').val() === '23')
             { 
              //alert ('23');
              Modal2309();
              insertidpaso(2309);             
         
            }
            else if($('#idestacion').val() === '24')
             { 
              Modal2409();
              insertidpaso(2408);             
         
            }
            else if($('#idestacion').val() === '25')
             { 
              Modal2509();
              insertidpaso(2508);             
         
            }
            else if ($('#idestacion').val() === '26')
            { 
                //alert ('236');
              Modal2609();
              insertidpaso(2608);             
         
            }
            
             });
        
        
          $("#continuar2309").click(function ()
          
              {          
              
               location.href = "../../c_protocolol2e3/fc_protocolol2e3?folio="+ $('#folio').val() +"&idintegrante=0" + "&doccogestor="+$('#doccogestor').val();
                 //location.href = "../actualizarpp/c_actualizarpp/fc_actualizarpp?folio=" + $('#folio').val()+"&idintegrante=0";
           
              });
              
              $("#continuar2409").click(function ()
          
              {          
              
               location.href = "../../c_protocolol2e4/fc_protocolol2e4?folio="+ $('#folio').val() +"&idintegrante=0" + "&doccogestor="+$('#doccogestor').val();
                 //location.href = "../actualizarpp/c_actualizarpp/fc_actualizarpp?folio=" + $('#folio').val()+"&idintegrante=0";
           
              });
              
              $("#continuar2509").click(function ()
          
              {          
              
               location.href = "../../c_protocolol2e5/fc_protocolol2e5?folio="+ $('#folio').val() +"&idintegrante=0" + "&doccogestor="+$('#doccogestor').val();
                 //location.href = "../actualizarpp/c_actualizarpp/fc_actualizarpp?folio=" + $('#folio').val()+"&idintegrante=0";
           
              });
              
              $("#continuar2609").click(function ()
          
              {          
              
               location.href = "../../c_protocolol2e6/fc_protocolol2e6?folio="+ $('#folio').val() +"&idintegrante=0" + "&doccogestor="+$('#doccogestor').val();
                 //location.href = "../actualizarpp/c_actualizarpp/fc_actualizarpp?folio=" + $('#folio').val()+"&idintegrante=0";
           
              });
         

 $("#anterior").click(function ()
        {
            
           if($('#idestacion').val() === '23')
               {
                location.href = "../../c_protocolol2e3/fc_protocolol2e3?folio="+ $('#folio').val() +"&idintegrante=0" + "&doccogestor="+$('#doccogestor').val()+"&idestacion=23";
               } 
               else if($('#idestacion').val() === '24')
               {
                    location.href = "../../c_protocolol2e4/fc_protocolol2e4?folio="+ $('#folio').val() +"&idintegrante=0" + "&doccogestor="+$('#doccogestor').val()+"&idestacion=24";
               }
                else if($('#idestacion').val() === '25')
               {
                    location.href = "../../c_protocolol2e5/fc_protocolol2e5?folio="+ $('#folio').val() +"&idintegrante=0" + "&doccogestor="+$('#doccogestor').val()+"&idestacion=25";
               }
               else if ($('#idestacion').val() === '26')
               {
                    location.href = "../../c_protocolol2e6/fc_protocolol2e6?folio="+ $('#folio').val() +"&idintegrante=0" + "&doccogestor="+$('#doccogestor').val()+"&idestacion=26";
               }
               
//         location.href = "../c_ppactualizo/fc_ppactualizo?folio=" + $('#folio').val()+ "&idintegrante=0";  
        //location.href = "../c_capitulosintegrantes/fc_capitulosintegrantes?folio=" + $('#folio').val()+ "&idintegrante="+"&idintegrante=0";                    
        });

//para cargar variables capitulo, pregunta,encuestador,vivienda,barra
cargardatosgenerales('<?php echo($arraydatosgenerales['ecapitulo']); ?>','Pregunta 1.5 de 1.5.1','<?php echo($arraydatosgenerales['enomcoges']); ?>','<?php echo($arraydatosgenerales['etitular']); ?>','100');
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
                          //me llama el mensajito de actualizar
                          //$('#datos').html(obj);
                          //location.href = "../c_capituloshogar/fc_capituloshogar?folio="+ $('#folio').val() +"&idintegrante="+$('#idintegrante').val();                  
                        }
                       });
   }


</script>
</html>