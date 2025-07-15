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
        <input type="text" class="form-control input-sm" id="idintegrante" name="idintegrante"  style="display:none"   placeholder="idintegrante" value="<?php echo($idintegrante); ?>">
        <input type="text" class="form-control input-sm" id="edad" name="edad"  style="display:none"   placeholder="" value="<?php echo($arraydatosgenerales['eedadintegrante']); ?>">
        <input type="text" class="form-control input-sm" id="sexo" name="sexo"  style="display:none"   placeholder="" value="<?php echo($arraydatosgenerales['esexointegrante']); ?>">
        <input type="text" class="form-control" id="valorc9p31" name="valorc9p31" style="display:none" placeholder="Text input" value="<?php echo($arrayrespuestas['ec9p31']); ?>">
        <input type="text" class="form-control" id="c9p35o1" name="c9p35o1" style="display:none" placeholder="Text input" value="<?php echo($arrayrespuestas['ec9p35o1']); ?>">
        <!--fin para imprimir el idintegrante y llevarlo-->
<hr>
        <form class="form-group" name="formulario" id="formulario">

            <!--inicio radio una sola seleccion-->
            <div class="row">
            <div id="c9p34intermediadiv" name="c9p34intermediadiv" <?php if($arrayrespuestas['ec9p34intermedia']==''){echo('class="form-group col-md-12 form-group-sm has-error"');}else{echo('class="form-group col-md-12 form-group-sm"');}?>>   
                <label class="control-label">4.Ha recibido algun tipo de apoyo a emprendimiento y/o fortalecimietno para su unidad productiva (diferente a financiamiento)?
                    <button type="button" id="vayuda" name="vayuda" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModal">
                        <span class="glyphicon glyphicon-question-sign" aria-hidden="true"></span> Ayuda
                    </button>
                </label>
                <div class="radio">
                    <label><!--en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="c9p34intermedia" id="c9p34intermedia" onclick="colocaropcion('1','valorc9p34intermedia','c9p34intermediadiv');" value="1" <?php if($arrayrespuestas['ec9p34intermedia']=='1'){echo('checked');}?>>
                        Si
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="c9p34intermedia" id="c9p34intermedia" onclick="colocaropcion('2','valorc9p34intermedia','c9p34intermediadiv');" value="2" <?php if($arrayrespuestas['ec9p34intermedia']=='2'){echo('checked');}?>>
                        No
                    </label>             
                </div> 
                <input type="text" class="form-control" id="valorc9p34intermedia" name="valorc9p34intermedia" style="display:none" placeholder="Text input" value="<?php echo($arrayrespuestas['ec9p34intermedia']); ?>">
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
            
            
              <div class="modal fade bs-example-modal-sm" id="modalsinco" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" data-backdrop="static">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title" id="myModalLabel"><img src="<?php echo IMAGEN, 'cargando.gif'; ?>" alt="Brand"> Guardando...</h4>
        </div>
        <div class="modal-body">
        
        Por favor no cierre este dialogo... hasta que salga el mensaje de finalizacion.
        </div>
    </div>
  </div>
</div>

            <!--inicio botonera guardar y actualizar-->
            <?php if($arrayrespuestas['ec9p34intermedia']=="")
           {
                echo($botoneraginter);
            }
            else
            {
                echo($botoneraainter);
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
            mensajedesinco();
                        $.ajax({
                          url: "fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),vidintegrante : $('#idintegrante').val(), vvalorc9p34intermedia : $('#valorc9p34intermedia').val()},    
                          dataType: "html",
                          success : function(obj){                      
                         // botonguardar();
                         saltarc9p34intermedia();
                          }
                        });                    
        });

        
        $("#actualizar").click(function ()
        {
            mensajedesinco();
                        $.ajax({
                          url: "fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),vidintegrante : $('#idintegrante').val(), vvalorc9p34intermedia : $('#valorc9p34intermedia').val()},    
                          dataType: "html",
                          success : function(obj){                      
                          //botonguardar();
                          saltarc9p34intermedia();
                          }
                        });                    
        });
        
        
         $("#capitulos").click(function ()
        {
            
            location.href = "../c_capitulosintegranteintermedia/fc_capitulosintegranteintermedia?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() ;                    
         
            });
        

        $("#siguiente").click(function ()
        {
          
          location.href = "../c_c9p35intermedia/fc_c9p35intermedia?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";
//         botonsiguiente();
//         if($('#valorc9p34intermedia').val() === '2')
//         {
//                           
//         location.href = "../c_c9p36/fc_c9p36?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                     
//         }   
//         else
//         {
//          location.href = "../c_c9p35/fc_c9p35?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";   
//         }

        });
              
        $("#anterior").click(function ()
        {
         botonanterior();
         if($('#valorc9p31').val() === 'c9p31intermediao1' || $('#valorc9p31').val() === 'c9p31intermediao2' )
         {
         location.href = "../c_c9p31intermedia/fc_c9p31intermedia?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";     
         }
         else
         {
             location.href = "../c_c9p33intermedia/fc_c9p33intermedia?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";     
         }
        //location.href = "../c_capitulosintegrantes/fc_capitulosintegrantes?idintegrante=" + $('#idintegrante').val()+ "&idintegrante="+"&idintegrante=0";                    
        });

//para cargar variables capitulo, pregunta,encuestador,vivienda,barra



cargardatosgenerales('<?php echo($arraydatosgenerales['ecapitulo']); ?>','Pregunta 4 de 6','<?php echo($arraydatosgenerales['enomcoges']); ?>','<?php echo($arraydatosgenerales['enombreintegrante']." "." - "." "."Sexo:"." ".$arraydatosgenerales['esexointegrante']."   "."  -  "."   "."Edad:"."   ".$arraydatosgenerales['eedadintegrante']); ?>','68');
//control del boton ayuda
botonayuda();

});


function saltarc9p34intermedia()
{
if($('#valorc9p34intermedia').val() === '2')
         {                
                         
                     $.ajax({
                          url: "../c_c9p35intermedia/fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),
                          vidintegrante : $('#idintegrante').val(),
                          vc9p35intermediao1 : '98',
                          vc9p35intermediao2 : '98',
                          vc9p35intermediao3 : '98',
                          vc9p35intermediao4 : '98',
                          vc9p35intermediao5 : '98',
                          vc9p35intermediao6 : '98',
                          vc9p35intermediao7 : '98',
                          vc9p35intermediao7cual : '98'
                          ,vc9p35intermediao8 : '98'
                          ,vc9p35intermediao9 : '98'},                      
                          dataType: "html",
                          success : function(obj)
                          {
                         
                         terminasinco();
                         botonguardar();
                         
                          }
                         });     
                        
                            
        }
        
         else if   ($('#valorc9p34intermedia').val() === '1' ) 
         {               
                   
                   $.ajax({
                          url: "../c_c9p35intermedia/fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),
                          vidintegrante : $('#idintegrante').val(),
                          vc9p35intermediao1 : '',
                          vc9p35intermediao2 : '',
                          vc9p35intermediao3 : '',
                          vc9p35intermediao4 : '',
                          vc9p35intermediao5 : '',
                          vc9p35intermediao6 : '',
                          vc9p35intermediao7 : '',
                          vc9p35intermediao7cual : ''
                          ,vc9p35intermediao8 : ''
                          ,vc9p35intermediao9 : ''},                      
                          dataType: "html",
                          success : function(obj)
                          {
                         
                         terminasinco();
                         botonguardar();
                         
                          }
                         });
                         
        }
                         
        
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

</script>
</html>