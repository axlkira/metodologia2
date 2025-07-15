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
        <!--fin para imprimir el folio y llevarlo-->
<hr>
        <form class="form-group" name="formulario" id="formulario">

            <!--inicio radio una sola seleccion-->
            <div class="row">
            <div id="ppactualizodiv" name="ppactualizodiv" <?php if($arrayrespuestas['eactualizo']==''){echo('class="form-group col-md-12 form-group-sm has-error"');}else{echo('class="form-group col-md-12 form-group-sm"');}?>>   
                <label class="control-label"> ¿Desea Actualizar los ingresos del Hogar?  
                    <button type="button" id="vayuda" name="vayuda" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModal">
                        <span class="glyphicon glyphicon-question-sign" aria-hidden="true"></span> Ayuda
                    </button>
                </label>
                <div class="radio">
                    <label><!--en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="ppactualizo" id="ppactualizo" onclick="colocaropcion('3','valorppactualizo','ppactualizodiv');" value="3" <?php if (($arrayrespuestas['eactualizo']=='3')||($arrayrespuestas['eactualizo']=='1') ){echo('checked');}?>>
                        Si
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="ppactualizo" id="ppactualizo" onclick="colocaropcion('2','valorppactualizo','ppactualizodiv');" value="2" <?php if($arrayrespuestas['eactualizo']=='2'){echo('checked');}?>>
                        No
                    </label>             
                </div> 
               
                
                <input type="text" class="form-control" id="valorppactualizo" name="valorppactualizo" style="display:none" placeholder="Text input" value="<?php echo($arrayrespuestas['eactualizo']); ?>">
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
            <?php if($arrayrespuestas['eactualizo']=="")
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
    
    
    
    
    <div class="modal fade" id="modal1" data-backdrop="static" >
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
          <button type="button" id="continuar" class="btn btn-primary">Continuar</button>
<!--        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>-->
      </div>
    </div>
  </div>
</div>
    
    
     <div class="modal fade" id="modal2" data-backdrop="static" >
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
          <button type="button" id="continuar2" class="btn btn-primary">Continuar</button>
<!--        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>-->
      </div>
    </div>
  </div>
</div>
    
    
      <div class="modal fade" id="modal2202" data-backdrop="static" >
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
          <button type="button" id="continuar2202" class="btn btn-primary">Continuar</button>
<!--        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>-->
      </div>
    </div>
  </div>
</div>
    
    
     <div class="modal fade" id="modal2302" data-backdrop="static" >
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
          <button type="button" id="continuar2302" class="btn btn-primary">Continuar</button>
<!--        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>-->
      </div>
    </div>
  </div>
</div>
    
    <div class="modal fade" id="modal2402" data-backdrop="static" >
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
          <button type="button" id="continuar2402" class="btn btn-primary">Continuar</button>
<!--        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>-->
      </div>
    </div>
  </div>
</div>
    
    <div class="modal fade" id="modal2502" data-backdrop="static" >
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
          <button type="button" id="continuar2502" class="btn btn-primary">Continuar</button>
<!--        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>-->
      </div>
    </div>
  </div>
</div>
    
    
    <div class="modal fade" id="modal2602" data-backdrop="static" >
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
          <button type="button" id="continuar2602" class="btn btn-primary">Continuar</button>
<!--        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>-->
      </div>
    </div>
  </div>
</div>
    
    
    
    <div class="modal fade" id="modal31" data-backdrop="static" >
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
          <button type="button" id="continuar31" class="btn btn-primary">Continuar</button>
<!--        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>-->
      </div>
    </div>
  </div>
</div>
    
    <div class="modal fade" id="modal2102" data-backdrop="static" >
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
          <button type="button" id="continuar2102" class="btn btn-primary">Continuar</button>
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

function Modal1() 
{
$('#modal1').modal();
}

function Modal2() 
{
$('#modal2').modal();
}

function Modal2202() 
{
$('#modal2202').modal();
}

function Modal2102() 
{
$('#modal2102').modal();
}

function Modal2302() 
{
$('#modal2302').modal();
}

function Modal31() 
{
$('#modal31').modal();
}

function Modal2402() 
{
$('#modal2402').modal();
}


function Modal2502() 
{
$('#modal2502').modal();
}

function Modal2602() 
{
$('#modal2602').modal();
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
            
             if($('#idestacion').val() === '12')
               {
            
            
           if($('#valorppactualizo').val() === '1' || $('#valorppactualizo').val() === '3' )
            {
             location.href = "../c_actualizarpp/fc_actualizarpp?folio=" + $('#folio').val()+"&idintegrante=0"+"&idestacion=12";
             //location.href = "../actualizarpp/c_actualizarpp/fc_actualizarpp?folio=" + $('#folio').val()+"&idintegrante=0";
             
            }
            else
            {      
          //alert('ww');
          Modal2();
          insertidpaso(1202); 
//          location.href = "../../c_protocolol1e2/fc_protocolol1e2?folio="+ $('#folio').val() +"&idintegrante=0" + "&doccogestor="+$('#doccogestor').val();
         
            } 
            }
            else 
            { 
             if($('#idestacion').val() === '21')
             { 
                if($('#valorppactualizo').val() === '1' || $('#valorppactualizo').val() === '3' )
                {
                 location.href = "../c_actualizarpp/fc_actualizarpp?folio=" + $('#folio').val()+"&idintegrante=0"+"&idestacion=21";
                 //location.href = "../actualizarpp/c_actualizarpp/fc_actualizarpp?folio=" + $('#folio').val()+"&idintegrante=0";

                }
                else
                {      
              //alert('ww');
              Modal2102();
              insertidpaso(2102); 
            
         
            }  
             } 
             
             if($('#idestacion').val() === '22'){ 
                if($('#valorppactualizo').val() === '1' || $('#valorppactualizo').val() === '3' )
                {
                 location.href = "../c_actualizarpp/fc_actualizarpp?folio=" + $('#folio').val()+"&idintegrante=0"+"&idestacion=22";
                 //location.href = "../actualizarpp/c_actualizarpp/fc_actualizarpp?folio=" + $('#folio').val()+"&idintegrante=0";

                }
                else
                {      
              //alert('ww');
              insertidpaso(2202); 
              Modal2202() ;
              
         
            }  
             }
             
              if($('#idestacion').val() === '23'){ 
                if($('#valorppactualizo').val() === '1' || $('#valorppactualizo').val() === '3' )
                {
                 location.href = "../c_actualizarpp/fc_actualizarpp?folio=" + $('#folio').val()+"&idintegrante=0"+"&idestacion=23";
                 //location.href = "../actualizarpp/c_actualizarpp/fc_actualizarpp?folio=" + $('#folio').val()+"&idintegrante=0";

                }
                else
                {      
              //alert('ww');
              insertidpaso(2302); 
              Modal2302() ;
              
         
            }  
             }
             
             if($('#idestacion').val() === '11'){ 
                if($('#valorppactualizo').val() === '1' || $('#valorppactualizo').val() === '3' )
                {
                 location.href = "../c_actualizarpp/fc_actualizarpp?folio=" + $('#folio').val()+"&idintegrante=0"+"&idestacion=11";
                 //location.href = "../actualizarpp/c_actualizarpp/fc_actualizarpp?folio=" + $('#folio').val()+"&idintegrante=0";

                }
                else
                {      
              //alert('ww');
              insertidpaso(1103); 
              Modal1() ;
             // location.href = "../../c_protocolol1e1/fc_protocolol1e1?folio="+ $('#folio').val() +"&idintegrante=0" + "&doccogestor="+$('#doccogestor').val();
         
            }  
             }
             if($('#idestacion').val() === '31'){ 
                if($('#valorppactualizo').val() === '1' || $('#valorppactualizo').val() === '3' )
                {
                 location.href = "../c_actualizarpp/fc_actualizarpp?folio=" + $('#folio').val()+"&idintegrante=0"+"&idestacion=31";
                 //location.href = "../actualizarpp/c_actualizarpp/fc_actualizarpp?folio=" + $('#folio').val()+"&idintegrante=0";

                }
                else
                {      
              //alert('ww');
              insertidpaso(3102); 
              Modal31() ;
             // location.href = "../../c_protocolol1e1/fc_protocolol1e1?folio="+ $('#folio').val() +"&idintegrante=0" + "&doccogestor="+$('#doccogestor').val();
         
            }  
             }
             if($('#idestacion').val() === '24'){ 
                if($('#valorppactualizo').val() === '1' || $('#valorppactualizo').val() === '3' )
                {
                 location.href = "../c_actualizarpp/fc_actualizarpp?folio=" + $('#folio').val()+"&idintegrante=0"+"&idestacion=24";
                 //location.href = "../actualizarpp/c_actualizarpp/fc_actualizarpp?folio=" + $('#folio').val()+"&idintegrante=0";

                }
                else
                {      
              //alert('ww');
              insertidpaso(2402); 
              Modal2402() ;
             // location.href = "../../c_protocolol1e1/fc_protocolol1e1?folio="+ $('#folio').val() +"&idintegrante=0" + "&doccogestor="+$('#doccogestor').val();
         
            }  
             }
             
             if($('#idestacion').val() === '25'){ 
                if($('#valorppactualizo').val() === '1' || $('#valorppactualizo').val() === '3' )
                {
                 location.href = "../c_actualizarpp/fc_actualizarpp?folio=" + $('#folio').val()+"&idintegrante=0"+"&idestacion=25";
                 //location.href = "../actualizarpp/c_actualizarpp/fc_actualizarpp?folio=" + $('#folio').val()+"&idintegrante=0";

                }
                else
                {      
              //alert('ww');
              insertidpaso(2502); 
              Modal2502();
             // location.href = "../../c_protocolol1e1/fc_protocolol1e1?folio="+ $('#folio').val() +"&idintegrante=0" + "&doccogestor="+$('#doccogestor').val();
         
            }  
             }
             
             if($('#idestacion').val() === '26'){ 
                if($('#valorppactualizo').val() === '1' || $('#valorppactualizo').val() === '3' )
                {
                 location.href = "../c_actualizarpp/fc_actualizarpp?folio=" + $('#folio').val()+"&idintegrante=0"+"&idestacion=26";
                 //location.href = "../actualizarpp/c_actualizarpp/fc_actualizarpp?folio=" + $('#folio').val()+"&idintegrante=0";

                }
                else
                {      
              //alert('ww');
              insertidpaso(2602); 
              Modal2602();
             // location.href = "../../c_protocolol1e1/fc_protocolol1e1?folio="+ $('#folio').val() +"&idintegrante=0" + "&doccogestor="+$('#doccogestor').val();
         
            }  
             }
             
              
            }
            
            
            
        });
        
        
        
        
          $("#continuar2102").click(function (){
            
              if($('#idestacion').val() === '21'){ 
                if($('#valorppactualizo').val() === '1' || $('#valorppactualizo').val() === '3' )
                {
                 location.href = "../c_actualizarpp/fc_actualizarpp?folio=" + $('#folio').val()+"&idintegrante=0"+"&idestacion=21";
                 //location.href = "../actualizarpp/c_actualizarpp/fc_actualizarpp?folio=" + $('#folio').val()+"&idintegrante=0";

                }
                else
                {      
              //alert('ww');
             // insertidpaso(1103); 
             
             // location.href = "../../c_protocolol1e1/fc_protocolol1e1?folio="+ $('#folio').val() +"&idintegrante=0" + "&doccogestor="+$('#doccogestor').val();
                location.href = "../../c_protocolol2e1/fc_protocolol2e1?folio="+ $('#folio').val() +"&idintegrante=0" + "&doccogestor="+$('#doccogestor').val();
         
            }  
             }
         });
         
         $("#continuar31").click(function (){
            
              if($('#idestacion').val() === '31'){ 
                if($('#valorppactualizo').val() === '1' || $('#valorppactualizo').val() === '3' )
                {
                 location.href = "../c_actualizarpp/fc_actualizarpp?folio=" + $('#folio').val()+"&idintegrante=0"+"&idestacion=31";
                 //location.href = "../actualizarpp/c_actualizarpp/fc_actualizarpp?folio=" + $('#folio').val()+"&idintegrante=0";

                }
                else
                {      
              //alert('ww');
             // insertidpaso(1103); 
             
             // location.href = "../../c_protocolol1e1/fc_protocolol1e1?folio="+ $('#folio').val() +"&idintegrante=0" + "&doccogestor="+$('#doccogestor').val();
                location.href = "../../c_protocolol3sc/fc_protocolol3sc?folio="+ $('#folio').val() +"&idintegrante=0" + "&doccogestor="+$('#doccogestor').val();
         
            }  
             }
         });
        
        
        
        $("#continuar").click(function (){
            
             if($('#idestacion').val() === '11'){ 
                if($('#valorppactualizo').val() === '1' || $('#valorppactualizo').val() === '3' )
                {
                 location.href = "../c_actualizarpp/fc_actualizarpp?folio=" + $('#folio').val()+"&idintegrante=0"+"&idestacion=11";
                 //location.href = "../actualizarpp/c_actualizarpp/fc_actualizarpp?folio=" + $('#folio').val()+"&idintegrante=0";

                }
                else
                {      
              //alert('ww');
             // insertidpaso(1103); 
             
             // location.href = "../../c_protocolol1e1/fc_protocolol1e1?folio="+ $('#folio').val() +"&idintegrante=0" + "&doccogestor="+$('#doccogestor').val();
              location.href = "../../c_protocolol1e1/fc_protocolol1e1?folio="+ $('#folio').val() +"&idintegrante=0" + "&doccogestor="+$('#doccogestor').val();
         
            }  
             }
            
            
        });
        
        
        
        $("#continuar2202").click(function (){
            
            if($('#idestacion').val() === '22'){ 
                if($('#valorppactualizo').val() === '1' || $('#valorppactualizo').val() === '3' )
                {
                 location.href = "../c_actualizarpp/fc_actualizarpp?folio=" + $('#folio').val()+"&idintegrante=0"+"&idestacion=22";
                 //location.href = "../actualizarpp/c_actualizarpp/fc_actualizarpp?folio=" + $('#folio').val()+"&idintegrante=0";

                }
                else
                {      
              //alert('ww');
              
              location.href = "../../c_protocolol2e2/fc_protocolol2e2?folio="+ $('#folio').val() +"&idintegrante=0" + "&doccogestor="+$('#doccogestor').val();
         
            }  
             }
            
            
        });
        
        $("#continuar2302").click(function (){
            
            if($('#idestacion').val() === '23'){ 
                if($('#valorppactualizo').val() === '1' || $('#valorppactualizo').val() === '3' )
                {
                 location.href = "../c_actualizarpp/fc_actualizarpp?folio=" + $('#folio').val()+"&idintegrante=0"+"&idestacion=23";
                 //location.href = "../actualizarpp/c_actualizarpp/fc_actualizarpp?folio=" + $('#folio').val()+"&idintegrante=0";

                }
                else
                {      
              //alert('ww');
              
              location.href = "../../c_protocolol2e3/fc_protocolol2e3?folio="+ $('#folio').val() +"&idintegrante=0" + "&doccogestor="+$('#doccogestor').val();
         
            }  
             }
            
            
        });
        
        $("#continuar2402").click(function (){
            
            if($('#idestacion').val() === '24'){ 
                if($('#valorppactualizo').val() === '1' || $('#valorppactualizo').val() === '3' )
                {
                 location.href = "../c_actualizarpp/fc_actualizarpp?folio=" + $('#folio').val()+"&idintegrante=0"+"&idestacion=24";
                 //location.href = "../actualizarpp/c_actualizarpp/fc_actualizarpp?folio=" + $('#folio').val()+"&idintegrante=0";

                }
                else
                {      
              //alert('ww');
              
              location.href = "../../c_protocolol2e4/fc_protocolol2e4?folio="+ $('#folio').val() +"&idintegrante=0" + "&doccogestor="+$('#doccogestor').val();
         
            }  
             }
            
            
        });
        
        $("#continuar2502").click(function (){
            
            if($('#idestacion').val() === '25'){ 
                if($('#valorppactualizo').val() === '1' || $('#valorppactualizo').val() === '3' )
                {
                 location.href = "../c_actualizarpp/fc_actualizarpp?folio=" + $('#folio').val()+"&idintegrante=0"+"&idestacion=25";
                 //location.href = "../actualizarpp/c_actualizarpp/fc_actualizarpp?folio=" + $('#folio').val()+"&idintegrante=0";

                }
                else
                {      
              //alert('ww');
              
              location.href = "../../c_protocolol2e5/fc_protocolol2e5?folio="+ $('#folio').val() +"&idintegrante=0" + "&doccogestor="+$('#doccogestor').val();
         
            }  
             }
            
            
        });
        
        
        $("#continuar2602").click(function (){
            
            if($('#idestacion').val() === '26'){ 
                if($('#valorppactualizo').val() === '1' || $('#valorppactualizo').val() === '3' )
                {
                 location.href = "../c_actualizarpp/fc_actualizarpp?folio=" + $('#folio').val()+"&idintegrante=0"+"&idestacion=26";
                 //location.href = "../actualizarpp/c_actualizarpp/fc_actualizarpp?folio=" + $('#folio').val()+"&idintegrante=0";

                }
                else
                {      
              //alert('ww');
              
              location.href = "../../c_protocolol2e6/fc_protocolol2e6?folio="+ $('#folio').val() +"&idintegrante=0" + "&doccogestor="+$('#doccogestor').val();
         
            }  
             }
            
            
        });
        
         $("#continuar2").click(function (){
            
           if($('#idestacion').val() === '12')
               {
            
            
           if($('#valorppactualizo').val() === '1' || $('#valorppactualizo').val() === '3' )
            {
             location.href = "../c_actualizarpp/fc_actualizarpp?folio=" + $('#folio').val()+"&idintegrante=0"+"&idestacion=12";
             //location.href = "../actualizarpp/c_actualizarpp/fc_actualizarpp?folio=" + $('#folio').val()+"&idintegrante=0";
             
            }
            else
            {      
          //alert('ww');
         
//          location.href = "../../c_protocolol1e2/fc_protocolol1e2?folio="+ $('#folio').val() +"&idintegrante=0" + "&doccogestor="+$('#doccogestor').val();
         location.href = "../../c_protocolol1e2/fc_protocolol1e2?folio="+ $('#folio').val() +"&idintegrante=0" + "&doccogestor="+$('#doccogestor').val();
            } 
            }
            
            
        });
              
//        $("#anterior").click(function ()
//        {
//            
//           if($('#idestacion').val() === '12')
//               {
//                location.href = "../../c_protocolol1e2/fc_protocolol1e2?folio="+ $('#folio').val() +"&idintegrante=0" + "&doccogestor="+$('#doccogestor').val();
//                } 
//         
//           else
//              {
//              if($('#idestacion').val() === '21')
//              {
//               location.href = "../../c_protocolol2e1/fc_protocolol2e1?folio="+ $('#folio').val() +"&idintegrante=0" + "&doccogestor="+$('#doccogestor').val();
//         
//            }
//            else
//           {
//               if($('#idestacion').val() === '11')
//              {
//               location.href = "../../c_protocolol1e1/fc_protocolol1e1?folio="+ $('#folio').val() +"&idintegrante=0" + "&doccogestor="+$('#doccogestor').val();
//         
//            }
//            else
//                              {
//
//               location.href = "../../c_protocolol2e2/fc_protocolol2e2?folio="+ $('#folio').val() +"&idintegrante=0" + "&doccogestor="+$('#doccogestor').val();
//         }
//            }     
//         
//         }
////         location.href = "../c_ppactualizo/fc_ppactualizo?folio=" + $('#folio').val()+ "&idintegrante=0";  
//        //location.href = "../c_capitulosintegrantes/fc_capitulosintegrantes?folio=" + $('#folio').val()+ "&idintegrante="+"&idintegrante=0";                    
//        });




 $("#anterior").click(function ()
        {
            
           if($('#idestacion').val() === '12')
               {
                location.href = "../../c_protocolol1e2/fc_protocolol1e2?folio="+ $('#folio').val() +"&idintegrante=0" + "&doccogestor="+$('#doccogestor').val()+"&idestacion=12";
               } 
               else if($('#idestacion').val() === '21')
               {
                    location.href = "../../c_protocolol2e1/fc_protocolol2e1?folio="+ $('#folio').val() +"&idintegrante=0" + "&doccogestor="+$('#doccogestor').val()+"&idestacion=21";
               }
                else if($('#idestacion').val() === '11')
               {
                    location.href = "../../c_protocolol2e1/fc_protocolol2e1?folio="+ $('#folio').val() +"&idintegrante=0" + "&doccogestor="+$('#doccogestor').val()+"&idestacion=11";
               }
               else if($('#idestacion').val() === '23')
               {
                    location.href = "../../c_protocolol2e3/fc_protocolol2e3?folio="+ $('#folio').val() +"&idintegrante=0" + "&doccogestor="+$('#doccogestor').val()+"&idestacion=23";
               }
               else if($('#idestacion').val() === '31')
               {
                    location.href = "../../c_protocolol3sc/fc_protocolol3sc?folio="+ $('#folio').val() +"&idintegrante=0" + "&doccogestor="+$('#doccogestor').val()+"&idestacion=31";
               }
               else if($('#idestacion').val() === '24')
               {
                    location.href = "../../c_protocolol2e4/fc_protocolol2e4?folio="+ $('#folio').val() +"&idintegrante=0" + "&doccogestor="+$('#doccogestor').val()+"&idestacion=24";
               }
               else if($('#idestacion').val() === '25')
               {
                    location.href = "../../c_protocolol2e5/fc_protocolol2e5?folio="+ $('#folio').val() +"&idintegrante=0" + "&doccogestor="+$('#doccogestor').val()+"&idestacion=25";
               }
               else 
               {
                  location.href = "../../c_protocolol2e2/fc_protocolol2e2?folio="+ $('#folio').val() +"&idintegrante=0" + "&doccogestor="+$('#doccogestor').val()+"&idestacion=22"; 
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