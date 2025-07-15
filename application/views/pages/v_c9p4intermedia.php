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
        <input type="text" class="form-control input-sm" id="c9p3intermedia" name="c9p3intermedia"  style="display:none"   placeholder="" value="<?php echo($arrayrespuestas['ec9p3']); ?>">
    
        <!--fin para imprimir el idintegrante y llevarlo-->
<hr>
        <form class="form-group" name="formulario" id="formulario">

            <!--inicio radio una sola seleccion-->
            <div class="row">
            <div id="c9p4intermediadiv" name="c9p4intermediadiv" <?php if($arrayrespuestas['ec9p4intermedia']==''){echo('class="form-group col-md-12 form-group-sm has-error"');}else{echo('class="form-group col-md-12 form-group-sm"');}?>>   
                <label class="control-label">2. Además de lo anterior , ¿Realizó la semana pasada alguna actividad paga por una hora o más ó tuvo algún trabajo o negocio por el que recibió ingresos? (Unica Respuesta)
                    <button type="button" id="vayuda" name="vayuda" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModal">
                        <span class="glyphicon glyphicon-question-sign" aria-hidden="true"></span> Ayuda
                    </button>
                </label>
                <div class="radio">
                    <label><!--en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="c9p4intermedia" id="c9p4intermedia" onclick="colocaropcion('1','valorc9p4intermedia','c9p4intermediadiv');" value="1" <?php if($arrayrespuestas['ec9p4intermedia']=='1'){echo('checked');}?>>
                        Si
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="c9p4intermedia" id="c9p4intermedia" onclick="colocaropcion('2','valorc9p4intermedia','c9p4intermediadiv');" value="2" <?php if($arrayrespuestas['ec9p4intermedia']=='2'){echo('checked');}?>>
                        No
                    </label>             
                </div> 
                <input type="text" class="form-control" id="valorc9p4intermedia" name="valorc9p4intermedia" style="display:none" placeholder="Text input" value="<?php echo($arrayrespuestas['ec9p4intermedia']); ?>">
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
            <?php if($arrayrespuestas['ec9p4intermedia']=="")
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

function validarguardarc9p4intermedia()
{
   //alert($('.has-error').length);
   if($('.has-error').length === 0)
   {
       $('#guardar').prop('disabled', false);
       $('#actualizar').prop('disabled', false);
       $('#cancelar').prop('disabled', false);
       $('#anterior').prop('disabled', true);
       $('#siguiente').prop('disabled', true);       
   }
   else
   {
       $('#guardar').prop('disabled', true);
       $('#actualizar').prop('disabled', true);
       $('#cancelar').prop('disabled', true);
       $('#anterior').prop('disabled', false);
       $('#siguiente').prop('disabled', false);
   }
   
}



//
//function saltarac9p26intermedia()
//{
//    
//   
//    
//    
//}

function saltoc9p4intermedia()
{
    if($('#valorc9p4intermedia').val() === '1' && $('#c9p3intermedia').val() === 'c9p3intermediao5')
                          {
                              
                               $.ajax({
                                    url: "../c_c9p7intermedia/fc_actualizar",
                                    type: "GET",
                                  data: {vfolio : $('#folio').val(),
                                        vidintegrante : $('#idintegrante').val(),
                                        vvalorc9p7intermedia : '98'},    
                                        dataType: "html",
                                    success : function(obj)
                                    {
                                        
                                   $.ajax({
                                   url: "../c_c9p8intermedia/fc_actualizar",
                                   type: "GET",
                                   data: {vfolio : $('#folio').val(),
                                   vidintegrante : $('#idintegrante').val(),    
                                   vvalorc9p8intermedia : '',
                                   vvalorc9p8intermediacual : ''},
                                   dataType: "html",
                                   success : function(obj)
                                   {
                                       
                                    $.ajax({
                                    url: "../c_c9p10intermedia/fc_actualizar",
                                    type: "GET",
                                    data: {vfolio : $('#folio').val(),
                                    vidintegrante : $('#idintegrante').val(),    
                                    vvalorc9p10intermedia : ''},
                                    dataType: "html",
                                    success : function(obj)
                                    {
                                        
                                      $.ajax({
                                      url: "../c_c9p11intermedia/fc_actualizar",
                                      type: "GET",
                                      data: {vfolio : $('#folio').val(),
                                      vidintegrante : $('#idintegrante').val(),    
                                      vvalorc9p11intermedia : '',
                                      vvalorc9p11intermediacuanto : '',
                                      vvalorc9p11intermediaincluyo : ''},
                                      dataType: "html",
                                      success : function(obj)
                                      {
                                     
                                         $.ajax({
                                         url: "../c_c9p12intermedia/fc_actualizar",
                                         type: "GET",
                                         data: {vfolio : $('#folio').val(),
                                         vidintegrante : $('#idintegrante').val(),    
                                         vc9p12intermediao1 : '',          
                                         vc9p12intermediao2 : '',
                                         vc9p12intermediao3 : '',
                                         vc9p12intermediao4 : '',                          
                                         vc9p12intermediacuanto : ''},
                                         dataType: "html",
                                         success : function(obj)
                                         {
                                       
                                           $.ajax({
                                          url: "../c_c9p13intermedia/fc_actualizar",
                                          type: "GET",
                                          data: {vfolio : $('#folio').val(),
                                          vidintegrante : $('#idintegrante').val(),    
                                          vc9p13intermediao1 : '',          
                                          vc9p13intermediao2 : '',
                                          vc9p13intermediao3 : '',                                                 
                                          vc9p13intermediacuanto : ''},
                                          dataType: "html",
                                          success : function(obj)
                                          {
                                              
                                           $.ajax({
                                           url: "../c_c9p14intermedia/fc_actualizar",
                                           type: "GET",
                                           data: {vfolio : $('#folio').val(),
                                           vidintegrante : $('#idintegrante').val(),    
                                           vc9p14intermediao1 : '',          
                                           vc9p14intermediao2 : '',
                                           vc9p14intermediao3 : '',
                                           vc9p14intermediao4 : '',                          
                                           vc9p14intermediacuanto : ''},
                                           dataType: "html",
                                           success : function(obj)
                                           {
                                          
                                           $.ajax({
                                           url: "../c_c9p16intermedia/fc_actualizar",
                                           type: "GET",
                                           data: {vfolio : $('#folio').val(),
                                           vidintegrante : $('#idintegrante').val(),    
                                           vvalorc9p16intermedia : ''},
                                           dataType: "html",
                                           success : function(obj)
                                           {
                                         
                                           $.ajax({
                                           url: "../c_c9p19intermedia/fc_actualizar",
                                           type: "GET",
                                           data: {
                                            vfolio : $('#folio').val()
                                           ,vidintegrante : $('#idintegrante').val()
                                           ,vvalorc9p19intermedia : ''},    
                                           dataType: "html",
                                           success : function(obj)
                                           {
                                          
                                          $.ajax({
                                          url: "../c_c9p20intermedia/fc_actualizar",
                                          type: "GET",
                                          data: {vfolio : $('#folio').val(),
                                          vidintegrante : $('#idintegrante').val(),    
                                          vvalorc9p20intermedia : ''},
                                          dataType: "html",
                                          success : function(obj)
                                          {
                                        
                                          $.ajax({
                                          url: "../c_c9p21intermedia/fc_actualizar",
                                          type: "GET",
                                          data: {vfolio : $('#folio').val(),
                                          vidintegrante : $('#idintegrante').val(),    
                                          vvalorc9p21intermedia : ''},
                                          dataType: "html",
                                          success : function(obj)
                                          {
                                       
                                         
                                        $.ajax({
                                        url: "../c_c9p23intermedia/fc_actualizar",
                                        type: "GET",
                                        data: {vfolio : $('#folio').val(),
                                        vidintegrante : $('#idintegrante').val(),    
                                        vvalorc9p23intermedia : ''},
                                        dataType: "html",
                                        success : function(obj)
                                        {
                                       
                                         $.ajax({
                                        url: "../c_c9p24intermedia/fc_actualizar",
                                        type: "GET",
                                        data: {vfolio : $('#folio').val()
                                        ,vidintegrante : $('#idintegrante').val()
                                        ,vvalorc9p24intermedia : ''},
                                        dataType: "html",
                                        success : function(obj)
                                        {
                                            
                                        $.ajax({
                                        url: "../c_c9p25intermedia/fc_actualizar",
                                        type: "GET",
                                        data: {vfolio : $('#folio').val()
                                        ,vidintegrante : $('#idintegrante').val()
                                        , vvalorc9p25intermedia : ''}, 
                                        dataType: "html",
                                        success : function(obj)
                                        {
                                            
                                         terminasinco();
                                         botonguardar();
                                       
                                    

                                       
                                        }
                                       });
                                       
                                    

                                       
                                        }
                                       });

                                       
                                        }
                                       });
                                       
                                       
                                          }
                                         });
                                        
                                        
                                          }
                                         });
                                          
                                          
                                           }
                                          });
                                         
                                         
                                           }
                                          });
                                          
                                          
                                           }
                                          });                                 
                                         
                                         
                                         
                                          }
                                         });
                                       
                                       
                                         }
                                        });
                                     
                                     
                                      }
                                     });
                                  
                                    }
                                   });
                                 
                                   }
                                  });
                                  
                                   
                                    }
                                   });
                              
                              
                          } 
                          else if($('#valorc9p4intermedia').val() === '1' && $('#c9p3intermedia').val() !== 'c9p3intermediao5')
                          {
                              $.ajax({
                                    url: "../c_c9p7intermedia/fc_actualizar",
                                    type: "GET",
                                  data: {vfolio : $('#folio').val(),
                                        vidintegrante : $('#idintegrante').val(),
                                        vvalorc9p7intermedia : ''},    
                                        dataType: "html",
                                    success : function(obj)
                                    {
                                        
                                   $.ajax({
                                   url: "../c_c9p8intermedia/fc_actualizar",
                                   type: "GET",
                                   data: {vfolio : $('#folio').val(),
                                   vidintegrante : $('#idintegrante').val(),    
                                   vvalorc9p8intermedia : '',
                                   vvalorc9p8intermediacual : ''},
                                   dataType: "html",
                                   success : function(obj)
                                   {
                                       
                                    $.ajax({
                                    url: "../c_c9p10intermedia/fc_actualizar",
                                    type: "GET",
                                    data: {vfolio : $('#folio').val(),
                                    vidintegrante : $('#idintegrante').val(),    
                                    vvalorc9p10intermedia : ''},
                                    dataType: "html",
                                    success : function(obj)
                                    {
                                        
                                      $.ajax({
                                      url: "../c_c9p11intermedia/fc_actualizar",
                                      type: "GET",
                                      data: {vfolio : $('#folio').val(),
                                      vidintegrante : $('#idintegrante').val(),    
                                      vvalorc9p11intermedia : '',
                                      vvalorc9p11intermediacuanto : '',
                                      vvalorc9p11intermediaincluyo : ''},
                                      dataType: "html",
                                      success : function(obj)
                                      {
                                     
                                         $.ajax({
                                         url: "../c_c9p12intermedia/fc_actualizar",
                                         type: "GET",
                                         data: {vfolio : $('#folio').val(),
                                         vidintegrante : $('#idintegrante').val(),    
                                         vc9p12intermediao1 : '',          
                                         vc9p12intermediao2 : '',
                                         vc9p12intermediao3 : '',
                                         vc9p12intermediao4 : '',                          
                                         vc9p12intermediacuanto : ''},
                                         dataType: "html",
                                         success : function(obj)
                                         {
                                       
                                           $.ajax({
                                          url: "../c_c9p13intermedia/fc_actualizar",
                                          type: "GET",
                                          data: {vfolio : $('#folio').val(),
                                          vidintegrante : $('#idintegrante').val(),    
                                          vc9p13intermediao1 : '',          
                                          vc9p13intermediao2 : '',
                                          vc9p13intermediao3 : '',                                                 
                                          vc9p13intermediacuanto : ''},
                                          dataType: "html",
                                          success : function(obj)
                                          {
                                              
                                           $.ajax({
                                           url: "../c_c9p14intermedia/fc_actualizar",
                                           type: "GET",
                                           data: {vfolio : $('#folio').val(),
                                           vidintegrante : $('#idintegrante').val(),    
                                           vc9p14intermediao1 : '',          
                                           vc9p14intermediao2 : '',
                                           vc9p14intermediao3 : '',
                                           vc9p14intermediao4 : '',                          
                                           vc9p14intermediacuanto : ''},
                                           dataType: "html",
                                           success : function(obj)
                                           {
                                          
                                           $.ajax({
                                           url: "../c_c9p16intermedia/fc_actualizar",
                                           type: "GET",
                                           data: {vfolio : $('#folio').val(),
                                           vidintegrante : $('#idintegrante').val(),    
                                           vvalorc9p16intermedia : ''},
                                           dataType: "html",
                                           success : function(obj)
                                           {
                                         
                                           $.ajax({
                                           url: "../c_c9p19intermedia/fc_actualizar",
                                           type: "GET",
                                           data: {
                                            vfolio : $('#folio').val()
                                           ,vidintegrante : $('#idintegrante').val()
                                           ,vvalorc9p19intermedia : ''},    
                                           dataType: "html",
                                           success : function(obj)
                                           {
                                          
                                          $.ajax({
                                          url: "../c_c9p20intermedia/fc_actualizar",
                                          type: "GET",
                                          data: {vfolio : $('#folio').val(),
                                          vidintegrante : $('#idintegrante').val(),    
                                          vvalorc9p20intermedia : ''},
                                          dataType: "html",
                                          success : function(obj)
                                          {
                                        
                                          $.ajax({
                                          url: "../c_c9p21intermedia/fc_actualizar",
                                          type: "GET",
                                          data: {vfolio : $('#folio').val(),
                                          vidintegrante : $('#idintegrante').val(),    
                                          vvalorc9p21intermedia : ''},
                                          dataType: "html",
                                          success : function(obj)
                                          {
                                       
                                         
                                        $.ajax({
                                        url: "../c_c9p23intermedia/fc_actualizar",
                                        type: "GET",
                                        data: {vfolio : $('#folio').val(),
                                        vidintegrante : $('#idintegrante').val(),    
                                        vvalorc9p23intermedia : ''},
                                        dataType: "html",
                                        success : function(obj)
                                        {
                                       
                                         $.ajax({
                                        url: "../c_c9p24intermedia/fc_actualizar",
                                        type: "GET",
                                        data: {vfolio : $('#folio').val()
                                        ,vidintegrante : $('#idintegrante').val()
                                        ,vvalorc9p24intermedia : ''},
                                        dataType: "html",
                                        success : function(obj)
                                        {
                                            
                                        $.ajax({
                                        url: "../c_c9p25intermedia/fc_actualizar",
                                        type: "GET",
                                        data: {vfolio : $('#folio').val()
                                        ,vidintegrante : $('#idintegrante').val()
                                        , vvalorc9p25intermedia : ''}, 
                                        dataType: "html",
                                        success : function(obj)
                                        {
                                            
                                         terminasinco();
                                         botonguardar();
                                       
                                    

                                       
                                        }
                                       });
                                       
                                    

                                       
                                        }
                                       });

                                       
                                        }
                                       });
                                       
                                       
                                          }
                                         });
                                        
                                        
                                          }
                                         });
                                          
                                          
                                           }
                                          });
                                         
                                         
                                           }
                                          });
                                          
                                          
                                           }
                                          });                                 
                                         
                                         
                                         
                                          }
                                         });
                                       
                                       
                                         }
                                        });
                                     
                                     
                                      }
                                     });
                                  
                                    }
                                   });
                                 
                                   }
                                  });
                                  
                                   
                                    }
                                   });
                          }
                          else if($('#valorc9p4intermedia').val() === '2' && $('#c9p3intermedia').val() !== 'c9p3intermediao5')
                          {
                              $.ajax({
                                    url: "../c_c9p7intermedia/fc_actualizar",
                                    type: "GET",
                                    data: {vfolio : $('#folio').val(),
                                    vidintegrante : $('#idintegrante').val(),    
                                    vvalorc9p7intermedia : '98'},
                                    dataType: "html",
                                    success : function(obj)
                                    {
                                        
                                   $.ajax({
                                   url: "../c_c9p8intermedia/fc_actualizar",
                                   type: "GET",
                                   data: {vfolio : $('#folio').val(),
                                   vidintegrante : $('#idintegrante').val(),    
                                   vvalorc9p8intermedia : '98',
                                   vvalorc9p8intermediacual : '98'},
                                   dataType: "html",
                                   success : function(obj)
                                   {
                                       
                                    $.ajax({
                                    url: "../c_c9p10intermedia/fc_actualizar",
                                    type: "GET",
                                    data: {vfolio : $('#folio').val(),
                                    vidintegrante : $('#idintegrante').val(),    
                                    vvalorc9p10intermedia : '98'},
                                    dataType: "html",
                                    success : function(obj)
                                    {
                                        
                                      $.ajax({
                                      url: "../c_c9p11intermedia/fc_actualizar",
                                      type: "GET",
                                      data: {vfolio : $('#folio').val(),
                                      vidintegrante : $('#idintegrante').val(),    
                                      vvalorc9p11intermedia : '98',
                                      vvalorc9p11intermediacuanto : '98',
                                      vvalorc9p11intermediaincluyo : '98'},
                                      dataType: "html",
                                      success : function(obj)
                                      {
                                     
                                         $.ajax({
                                         url: "../c_c9p12intermedia/fc_actualizar",
                                         type: "GET",
                                         data: {vfolio : $('#folio').val(),
                                         vidintegrante : $('#idintegrante').val(),    
                                         vc9p12intermediao1 : '98',          
                                         vc9p12intermediao2 : '98',
                                         vc9p12intermediao3 : '98',
                                         vc9p12intermediao4 : '98',                          
                                         vc9p12intermediacuanto : '98'},
                                         dataType: "html",
                                         success : function(obj)
                                         {
                                       
                                           $.ajax({
                                          url: "../c_c9p13intermedia/fc_actualizar",
                                          type: "GET",
                                          data: {vfolio : $('#folio').val(),
                                          vidintegrante : $('#idintegrante').val(),    
                                          vc9p13intermediao1 : '98',          
                                          vc9p13intermediao2 : '98',
                                          vc9p13intermediao3 : '98',                                                 
                                          vc9p13intermediacuanto : '98'},
                                          dataType: "html",
                                          success : function(obj)
                                          {
                                              
                                           $.ajax({
                                           url: "../c_c9p14intermedia/fc_actualizar",
                                           type: "GET",
                                           data: {vfolio : $('#folio').val(),
                                           vidintegrante : $('#idintegrante').val(),    
                                           vc9p14intermediao1 : '98',          
                                           vc9p14intermediao2 : '98',
                                           vc9p14intermediao3 : '98',
                                           vc9p14intermediao4 : '98',                          
                                           vc9p14intermediacuanto : '98'},
                                           dataType: "html",
                                           success : function(obj)
                                           {
                                          
                                           $.ajax({
                                           url: "../c_c9p16intermedia/fc_actualizar",
                                           type: "GET",
                                           data: {vfolio : $('#folio').val(),
                                           vidintegrante : $('#idintegrante').val(),    
                                           vvalorc9p16intermedia : '98'},
                                           dataType: "html",
                                           success : function(obj)
                                           {
                                         
                                           $.ajax({
                                           url: "../c_c9p19intermedia/fc_actualizar",
                                           type: "GET",
                                           data: {
                                            vfolio : $('#folio').val()
                                           ,vidintegrante : $('#idintegrante').val()
                                           ,vvalorc9p19intermedia : '98'},    
                                           dataType: "html",
                                           success : function(obj)
                                           {
                                          
                                          $.ajax({
                                          url: "../c_c9p20intermedia/fc_actualizar",
                                          type: "GET",
                                          data: {vfolio : $('#folio').val(),
                                          vidintegrante : $('#idintegrante').val(),    
                                          vvalorc9p20intermedia : '98'},
                                          dataType: "html",
                                          success : function(obj)
                                          {
                                        
                                          $.ajax({
                                          url: "../c_c9p21intermedia/fc_actualizar",
                                          type: "GET",
                                          data: {vfolio : $('#folio').val(),
                                          vidintegrante : $('#idintegrante').val(),    
                                          vvalorc9p21intermedia : '98'},
                                          dataType: "html",
                                          success : function(obj)
                                          {
                                       
                                         
                                        $.ajax({
                                        url: "../c_c9p23intermedia/fc_actualizar",
                                        type: "GET",
                                        data: {vfolio : $('#folio').val(),
                                        vidintegrante : $('#idintegrante').val(),    
                                        vvalorc9p23intermedia : '98'},
                                        dataType: "html",
                                        success : function(obj)
                                        {
                                            
                                        $.ajax({
                                        url: "../c_c9p24intermedia/fc_actualizar",
                                        type: "GET",
                                        data: {vfolio : $('#folio').val()
                                        ,vidintegrante : $('#idintegrante').val()
                                       , vvalorc9p24intermedia : ''},
                                        dataType: "html",
                                        success : function(obj)
                                        {
                                            
                                        $.ajax({
                                        url: "../c_c9p25intermedia/fc_actualizar",
                                        type: "GET",
                                        data: {vfolio : $('#folio').val()
                                        ,vidintegrante : $('#idintegrante').val()
                                        , vvalorc9p25intermedia : ''}, 
                                        dataType: "html",
                                        success : function(obj)
                                        {
                                            
                                         terminasinco();
                                         botonguardar();
                                       
                                    

                                       
                                        }
                                       });
                                       
                                    

                                       
                                        }
                                       });
                                       
                                    

                                       
                                        }
                                       });
                                       
                                       
                                          }
                                         });
                                        
                                        
                                          }
                                         });
                                          
                                          
                                           }
                                          });
                                         
                                         
                                           }
                                          });
                                          
                                          
                                           }
                                          });                                 
                                         
                                         
                                         
                                          }
                                         });
                                       
                                       
                                         }
                                        });
                                     
                                     
                                      }
                                     });
                                  
                                    }
                                   });
                                 
                                   }
                                  });
                                  
                                   
                                    }
                                   });
                          }
                          else if($('#valorc9p4intermedia').val() === '2' && $('#c9p3intermedia').val() === 'c9p3intermediao5')
                          {
                              $.ajax({
                                    url: "../c_c9p7intermedia/fc_actualizar",
                                    type: "GET",
                                    data: {vfolio : $('#folio').val(),
                                    vidintegrante : $('#idintegrante').val(),    
                                    vvalorc9p7intermedia : '98'},
                                    dataType: "html",
                                    success : function(obj)
                                    {
                                        
                                   $.ajax({
                                   url: "../c_c9p8intermedia/fc_actualizar",
                                   type: "GET",
                                   data: {vfolio : $('#folio').val(),
                                   vidintegrante : $('#idintegrante').val(),    
                                   vvalorc9p8intermedia : '98',
                                   vvalorc9p8intermediacual : '98'},
                                   dataType: "html",
                                   success : function(obj)
                                   {
                                       
                                    $.ajax({
                                    url: "../c_c9p10intermedia/fc_actualizar",
                                    type: "GET",
                                    data: {vfolio : $('#folio').val(),
                                    vidintegrante : $('#idintegrante').val(),    
                                    vvalorc9p10intermedia : '98'},
                                    dataType: "html",
                                    success : function(obj)
                                    {
                                        
                                      $.ajax({
                                      url: "../c_c9p11intermedia/fc_actualizar",
                                      type: "GET",
                                      data: {vfolio : $('#folio').val(),
                                      vidintegrante : $('#idintegrante').val(),    
                                      vvalorc9p11intermedia : '98',
                                      vvalorc9p11intermediacuanto : '98',
                                      vvalorc9p11intermediaincluyo : '98'},
                                      dataType: "html",
                                      success : function(obj)
                                      {
                                     
                                         $.ajax({
                                         url: "../c_c9p12intermedia/fc_actualizar",
                                         type: "GET",
                                         data: {vfolio : $('#folio').val(),
                                         vidintegrante : $('#idintegrante').val(),    
                                         vc9p12intermediao1 : '98',          
                                         vc9p12intermediao2 : '98',
                                         vc9p12intermediao3 : '98',
                                         vc9p12intermediao4 : '98',                          
                                         vc9p12intermediacuanto : '98'},
                                         dataType: "html",
                                         success : function(obj)
                                         {
                                       
                                           $.ajax({
                                          url: "../c_c9p13intermedia/fc_actualizar",
                                          type: "GET",
                                          data: {vfolio : $('#folio').val(),
                                          vidintegrante : $('#idintegrante').val(),    
                                          vc9p13intermediao1 : '98',          
                                          vc9p13intermediao2 : '98',
                                          vc9p13intermediao3 : '98',                                                 
                                          vc9p13intermediacuanto : '98'},
                                          dataType: "html",
                                          success : function(obj)
                                          {
                                              
                                           $.ajax({
                                           url: "../c_c9p14intermedia/fc_actualizar",
                                           type: "GET",
                                           data: {vfolio : $('#folio').val(),
                                           vidintegrante : $('#idintegrante').val(),    
                                           vc9p14intermediao1 : '98',          
                                           vc9p14intermediao2 : '98',
                                           vc9p14intermediao3 : '98',
                                           vc9p14intermediao4 : '98',                          
                                           vc9p14intermediacuanto : '98'},
                                           dataType: "html",
                                           success : function(obj)
                                           {
                                          
                                           $.ajax({
                                           url: "../c_c9p16intermedia/fc_actualizar",
                                           type: "GET",
                                           data: {vfolio : $('#folio').val(),
                                           vidintegrante : $('#idintegrante').val(),    
                                           vvalorc9p16intermedia : '98'},
                                           dataType: "html",
                                           success : function(obj)
                                           {
                                         
                                           $.ajax({
                                           url: "../c_c9p19intermedia/fc_actualizar",
                                           type: "GET",
                                           data: {
                                            vfolio : $('#folio').val()
                                           ,vidintegrante : $('#idintegrante').val()
                                           ,vvalorc9p19intermedia : '98'},    
                                           dataType: "html",
                                           success : function(obj)
                                           {
                                          
                                          $.ajax({
                                          url: "../c_c9p20intermedia/fc_actualizar",
                                          type: "GET",
                                          data: {vfolio : $('#folio').val(),
                                          vidintegrante : $('#idintegrante').val(),    
                                          vvalorc9p20intermedia : '98'},
                                          dataType: "html",
                                          success : function(obj)
                                          {
                                        
                                          $.ajax({
                                          url: "../c_c9p21intermedia/fc_actualizar",
                                          type: "GET",
                                          data: {vfolio : $('#folio').val(),
                                          vidintegrante : $('#idintegrante').val(),    
                                          vvalorc9p21intermedia : '98'},
                                          dataType: "html",
                                          success : function(obj)
                                          {
                                       
                                         
                                        $.ajax({
                                        url: "../c_c9p23intermedia/fc_actualizar",
                                        type: "GET",
                                        data: {vfolio : $('#folio').val(),
                                        vidintegrante : $('#idintegrante').val(),    
                                        vvalorc9p23intermedia : '98'},
                                        dataType: "html",
                                        success : function(obj)
                                        {
                                            
                                       
                                        $.ajax({
                                        url: "../c_c9p24intermedia/fc_actualizar",
                                        type: "GET",
                                        data: {vfolio : $('#folio').val()
                                        ,vidintegrante : $('#idintegrante').val()
                                        ,vvalorc9p24intermedia : '98'},
                                        dataType: "html",
                                        success : function(obj)
                                        {
                                            
                                        $.ajax({
                                        url: "../c_c9p25intermedia/fc_actualizar",
                                        type: "GET",
                                        data: {vfolio : $('#folio').val()
                                        ,vidintegrante : $('#idintegrante').val()
                                        , vvalorc9p25intermedia : '98'}, 
                                        dataType: "html",
                                        success : function(obj)
                                        {
                                            
                                         terminasinco();
                                         botonguardar();
                                       
                                    

                                       
                                        }
                                       });
                                       
                                    

                                       
                                        }
                                       });
                                       
                                    

                                       
                                        }
                                       });
                                       
                                       
                                          }
                                         });
                                        
                                        
                                          }
                                         });
                                          
                                          
                                           }
                                          });
                                         
                                         
                                           }
                                          });
                                          
                                          
                                           }
                                          });                                 
                                         
                                         
                                         
                                          }
                                         });
                                       
                                       
                                         }
                                        });
                                     
                                     
                                      }
                                     });
                                  
                                    }
                                   });
                                 
                                   }
                                  });
                                  
                                   
                                    }
                                   });
                          }
                          
                          
}

//function saltoedadintermedia()
//{
//    if ($('#edad').val() > '14' && $('#edad').val() < '18')
//    {
//        $.ajax({
//                                           url: "../c_c9p19intermedia/fc_actualizar",
//                                           type: "GET",
//                                           data: {
//                                            vfolio : $('#folio').val()
//                                           ,vidintegrante : $('#idintegrante').val()
//                                           ,vvalorc9p19intermedia : ''},    
//                                           dataType: "html",
//                                           success : function(obj)
//                                           {
//                                               
//                                           }
//                                       });
//        
//    }
//    else
//    {
//             $.ajax({
//                                           url: "../c_c9p19intermedia/fc_actualizar",
//                                           type: "GET",
//                                           data: {
//                                            vfolio : $('#folio').val()
//                                           ,vidintegrante : $('#idintegrante').val()
//                                           ,vvalorc9p19intermedia : '98'},    
//                                           dataType: "html",
//                                           success : function(obj)
//                                           {
//                                               
//                                           }
//                                       }); 
//    }
//}


    $(document).ready(function()
    {

        $("#guardar").click(function ()
        {
            mensajedesinco();
            $.ajax({
                          url: "fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),vidintegrante : $('#idintegrante').val(), vvalorc9p4intermedia : $('#valorc9p4intermedia').val()},    
                          dataType: "html",
                          success : function(obj){                      
                         // botonguardar();
                        saltoc9p4intermedia();
                        //saltoedadintermedia();
                         
                          
                          }
                        });                    
        });

        
        $("#actualizar").click(function ()
        {
            mensajedesinco();
                        $.ajax({
                          url: "fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),vidintegrante : $('#idintegrante').val(), vvalorc9p4intermedia : $('#valorc9p4intermedia').val()},    
                          dataType: "html",
                          success : function(obj){                      
                         // botonguardar();
                    
                        saltoc9p4intermedia();                          
                       // saltoedadintermedia();
                         
                         
                          }
                        });                    
        });
        
        
         $("#capitulos").click(function ()
        {
            
            location.href = "../c_capitulosintegranteintermedia/fc_capitulosintegranteintermedia?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() ;                    
         
            });

        $("#siguiente").click(function ()
        {
       
         if($('#valorc9p4intermedia').val() === '1' && $('#c9p3intermedia').val() === 'c9p3intermediao5')
         {
           location.href = "../c_c9p8intermedia/fc_c9p8intermedia?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +""; 
         }
         else if($('#valorc9p4intermedia').val() === '2' && $('#c9p3intermedia').val() === 'c9p3intermediao5')
         {
         //botonanterior();
            location.href = "../c_c9p26intermedia/fc_c9p26intermedia?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +""; 
          } 
          else if($('#valorc9p4intermedia').val() === '2' && $('#c9p3intermedia').val() !== 'c9p3intermediao5')
         {
         //botonanterior();
            location.href = "../c_c9p24intermedia/fc_c9p24intermedia?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +""; 
          } 
         else if (($('#c9p3intermedia').val() !== 'c9p3intermediao5' && $('#valorc9p4intermedia').val() === '1') || ($('#c9p3intermedia').val() !== 'c9p3intermediao1' && $('#valorc9p4intermedia').val() === '1'))
         {
             location.href = "../c_c9p7intermedia/fc_c9p7intermedia?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";
         }
         
          else if (($('#c9p3intermedia').val() !== 'c9p3intermediao5' && $('#valorc9p4intermedia').val() === '2' && $('#c9p5').val() === '98') 
                    || ($('#c9p3intermedia').val() !== 'c9p3intermediao1' && $('#valorc9p4intermedia').val() === '2' && $('#c9p5').val() === '98'))
            {
                //location.href = "../c_c9p5intermedia/fc_c9p5intermedia?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";
                location.href = "../c_c9p7intermedia/fc_c9p7intermedia?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";
            }
          
       else 
          {  
              location.href = "../c_c9p7intermedia/fc_c9p7intermedia?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";
          }
       
       
        });
              
        $("#anterior").click(function ()
        {
         botonanterior();
         location.href = "../c_c9p3intermedia/fc_c9p3intermedia?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";     
        //location.href = "../c_capitulosintegrantes/fc_capitulosintegrantes?idintegrante=" + $('#idintegrante').val()+ "&idintegrante="+"&idintegrante=0";                    
        });

//para cargar variables capitulo, pregunta,encuestador,vivienda,barra



cargardatosgenerales('<?php echo($arraydatosgenerales['ecapitulo']); ?>','Pregunta 2 de 4','<?php echo($arraydatosgenerales['enomcoges']); ?>','<?php echo($arraydatosgenerales['enombreintegrante']." "." - "." "."Sexo:"." ".$arraydatosgenerales['esexointegrante']."   "."  -  "."   "."Edad:"."   ".$arraydatosgenerales['eedadintegrante']); ?>','50');
//control del boton ayuda
botonayuda();

});



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