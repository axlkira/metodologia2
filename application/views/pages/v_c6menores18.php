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
        <input type="text" class="form-control input-sm" id="c6p10" name="c6p10" style="display:none" placeholder="" value="<?php echo($arrayrespuestas['ec6p10']); ?>">
        <input type="text" class="form-control input-sm" id="c1p13" name="c1p13" style="display:none" placeholder="" value="<?php echo($arrayrespuestas['ec1p13']); ?>">
        <!--fin para imprimir el folio y llevarlo-->
<hr>
        <form class="form-group" name="formulario" id="formulario">

            <!--inicio radio una sola seleccion-->
            <div class="row">
            <div id="c6menores18div" name="c6menores18div" <?php if($arrayrespuestas['ec6menores18']==''){echo('class="form-group col-md-12 form-group-sm has-error"');}else{echo('class="form-group col-md-12 form-group-sm"');}?>> 
                    <label class="control-label">En su hogar hay menores de 18 años?
                   <button type="button" id="vayuda" name="vayuda" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModal">
                        <span class="glyphicon glyphicon-question-sign" aria-hidden="true"></span> Ayuda
                    </button>
                </label>
                <div class="radio">
                    <label><!--en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="c6menores18" <?php if($arrayrespuestas['ec1p13']=='c1p13o13' || $arrayrespuestas['ec1p13']=='c1p13o14'){echo('disabled');}?> id="c6menores18" onclick="colocaropcion('1','valorc6menores18','c6menores18div');" value="1" <?php if($arrayrespuestas['ec6menores18']=='1'){echo('checked');}?>>
                        Si
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="c6menores18" <?php if($arrayrespuestas['ec1p13']=='c1p13o13' || $arrayrespuestas['ec1p13']=='c1p13o14'){echo('disabled');}?> id="c6menores18" onclick="colocaropcion('2','valorc6menores18','c6menores18div');" value="2" <?php if($arrayrespuestas['ec6menores18']=='2'){echo('checked');}?>>
                        No
                    </label>             
                </div>
            <input type="text" class="form-control" id="valorc6menores18" name="valorc6menores18" style="display:none" placeholder="Text input" value="<?php echo($arrayrespuestas['ec6menores18']); ?>">
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
            <?php if($arrayrespuestas['ec6menores18']=="")
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
                          data: {vfolio : $('#folio').val(), vvalorc6menores18 : $('#valorc6menores18').val()},    
                          dataType: "html",
                          success : function(obj){   
                            
                            


                          ////////////////////////////////// salto //////////////////////////  
                          if($('#valorc6menores18').val() === '2')
           {                $.ajax({
                            url: "../c_c6p10/fc_actualizar",
                            type: "GET",
                            data: {vfolio : $('#folio').val(),
                            vvalorc6p10 : '98'},
                            dataType: "html",
                            success : function(obj)
                            {
                           // location.href = "../c_c6p16/fc_c6p16?folio=" + $('#folio').val();                    
                            }
                           });
                           $.ajax({
                            url: "../c_c6p11/fc_actualizar",
                            type: "GET",
                            data: {vfolio : $('#folio').val(),
                            vvalorc6p11 : '98'},
                            dataType: "html",
                            success : function(obj)
                            {
                            //location.href = "../c_c6p16/fc_c6p16?folio=" + $('#folio').val();                    
                            }
                           });
                           $.ajax({
                            url: "../c_c6p12/fc_actualizar",
                            type: "GET",
                            data: {vfolio : $('#folio').val(),
                            vvalorc6p12 : '98'},
                            dataType: "html",
                            success : function(obj)
                            {
                            //location.href = "../c_c6p16/fc_c6p16?folio=" + $('#folio').val();                    
                            }
                           });
                           $.ajax({
                            url: "../c_c6p13/fc_actualizar",
                            type: "GET",
                            data: {vfolio : $('#folio').val(),
                            vvalorc6p13 : '98'},
                            dataType: "html",
                            success : function(obj)
                            {
                            //location.href = "../c_c6p16/fc_c6p16?folio=" + $('#folio').val();                    
                            }
                           });
                           $.ajax({
                            url: "../c_c6p14/fc_actualizar",
                            type: "GET",
                            data: {vfolio : $('#folio').val(),
                            vvalorc6p14 : '98'},
                            dataType: "html",
                            success : function(obj)
                            {
                            //location.href = "../c_c6p16/fc_c6p16?folio=" + $('#folio').val();                    
                            }
                           });
                           
                           $.ajax({
                          url: "../c_c11p1/fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),
                                 vc11p1o1 : '98',
                                 vc11p1o2 : '98',
                                 vc11p1o3 : '98',
                                 vc11p1o4 : '98',
                                 vc11p1o5 : '98',
                                 vc11p1o6 : '98',
                                  vc11p1o7 : '98',
                                  vc11p1o8 : '98',vc11p1cual: '98'},
                          dataType: "html",
                          success : function(obj){                      
                          //botonguardar();
                          }
                        });
                        
                        $.ajax({
                          url: "../c_c11p2/fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(), 
                                vc11p2o1 : '98',
                                vc11p2o2 : '98',
                                vc11p2o3 : '98',
                                vc11p2o4 : '98',
                                vc11p2o5 : '98',
                                vc11p2o6 : '98',
                                vc11p2o7 : '98',vc11p2cual : '98'},    
                          dataType: "html",
                          success : function(obj){                      
                          //botonguardar();
                          }
                        }); 
            
                        $.ajax({
                          url: "../c_c11p3/fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),
                                 vc11p3o1 : '98',
                                 vc11p3o2 : '98',
                                 vc11p3o3 : '98',
                                 vc11p3o4 : '98',
                                 vc11p3o5 : '98',
                                 vc11p3o6 : '98',
                                 vc11p3cual : '98'},    
                          dataType: "html",
                          success : function(obj){                      
                         // botonguardar();
                          }
                        });  
                   
                           $.ajax({
                            url: "../c_c6p15/fc_actualizar",
                            type: "GET",
                            data: {vfolio : $('#folio').val(),
                            vvalorc6p15 : '98'},
                            dataType: "html",
                            success : function(obj)
                            {
                           // location.href = "../c_c6p16/fc_c6p16?folio=" + $('#folio').val();                    
                            }
                           });                        
                           
           }
           else if (($('#valorc6menores18').val() === '1' && $('#c1p13').val() == 'c1p13o13' ))
           {                
                            $.ajax({
                            url: "../c_c6p10/fc_actualizar",
                            type: "GET",
                            data: {vfolio : $('#folio').val(),
                            vvalorc6p10 : '98'},
                            dataType: "html",
                            success : function(obj)
                            {
                            //location.href = "../c_c6p10/fc_c6p10?folio=" + $('#folio').val();                    
                            }
                           });
                           $.ajax({
                            url: "../c_c6p11/fc_actualizar",
                            type: "GET",
                            data: {vfolio : $('#folio').val(),
                            vvalorc6p11 : '98'},
                            dataType: "html",
                            success : function(obj)
                            {
                            //location.href = "../c_c6p10/fc_c6p10?folio=" + $('#folio').val();                    
                            }
                           });
                           $.ajax({
                            url: "../c_c6p12/fc_actualizar",
                            type: "GET",
                            data: {vfolio : $('#folio').val(),
                            vvalorc6p12 : '98'},
                            dataType: "html",
                            success : function(obj)
                            {
                            //location.href = "../c_c6p10/fc_c6p10?folio=" + $('#folio').val();                    
                            }
                           });
                           $.ajax({
                            url: "../c_c6p13/fc_actualizar",
                            type: "GET",
                            data: {vfolio : $('#folio').val(),
                            vvalorc6p13 : '98'},
                            dataType: "html",
                            success : function(obj)
                            {
                            //location.href = "../c_c6p10/fc_c6p10?folio=" + $('#folio').val();                    
                            }
                           });
                           $.ajax({
                            url: "../c_c6p14/fc_actualizar",
                            type: "GET",
                            data: {vfolio : $('#folio').val(),
                            vvalorc6p14 : '98'},
                            dataType: "html",
                            success : function(obj)
                            {
                            //location.href = "../c_c6p10/fc_c6p10?folio=" + $('#folio').val();                    
                            }
                           });
                           
                       $.ajax({
                         url: "../c_c11p1/fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),
                                 vc11p1o1 : '98',
                                 vc11p1o2 : '98',
                                 vc11p1o3 : '98',
                                 vc11p1o4 : '98',
                                 vc11p1o5 : '98',
                                 vc11p1o6 : '98',
                                  vc11p1o7 : '98',
                                  vc11p1o8 : '98',vc11p1cual: '98'},
                          dataType: "html",
                          success : function(obj){                      
                          //botonguardar();
                          }
                       });
                           
                           $.ajax({
                          url: "../c_c11p2/fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(), 
                                vc11p2o1 : '98',
                                vc11p2o2 : '98',
                                vc11p2o3 : '98',
                                vc11p2o4 : '98',
                                vc11p2o5 : '98',
                                vc11p2o6 : '98',
                                vc11p2o7 : '98',vc11p2cual : '98'},    
                          dataType: "html",
                          success : function(obj){                      
                          //botonguardar();
                          }
                        });  

                            $.ajax({
                          url: "../c_c11p3/fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),
                                 vc11p3o1 : '98',
                                 vc11p3o2 : '98',
                                 vc11p3o3 : '98',
                                 vc11p3o4 : '98',
                                 vc11p3o5 : '98',
                                 vc11p3o6 : '98',
                                 vc11p3cual : '98'},    
                          dataType: "html",
                          success : function(obj){                      
                         // botonguardar();
                          }
                           });  
                       
                           $.ajax({
                            url: "../c_c6p15/fc_actualizar",
                            type: "GET",
                            data: {vfolio : $('#folio').val(),
                            vvalorc6p15 : '98'},
                            dataType: "html",
                            success : function(obj)
                            {
                   //         location.href = "../c_c6p16/fc_c6p16?folio=" + $('#folio').val();                    
                            }
                           });
           }
           
           else if (($('#valorc6menores18').val() === '1' && $('#c1p13').val() == 'c1p13o14' ))
           {                
                            $.ajax({
                            url: "../c_c6p10/fc_actualizar",
                            type: "GET",
                            data: {vfolio : $('#folio').val(),
                            vvalorc6p10 : ''},
                            dataType: "html",
                            success : function(obj)
                            {
                            //location.href = "../c_c6p10/fc_c6p10?folio=" + $('#folio').val();                    
                            }
                           });
                           $.ajax({
                            url: "../c_c6p11/fc_actualizar",
                            type: "GET",
                            data: {vfolio : $('#folio').val(),
                            vvalorc6p11 : ''},
                            dataType: "html",
                            success : function(obj)
                            {
                            //location.href = "../c_c6p10/fc_c6p10?folio=" + $('#folio').val();                    
                            }
                           });
                           $.ajax({
                            url: "../c_c6p12/fc_actualizar",
                            type: "GET",
                            data: {vfolio : $('#folio').val(),
                            vvalorc6p12 : ''},
                            dataType: "html",
                            success : function(obj)
                            {
                            //location.href = "../c_c6p10/fc_c6p10?folio=" + $('#folio').val();                    
                            }
                           });
                           $.ajax({
                            url: "../c_c6p13/fc_actualizar",
                            type: "GET",
                            data: {vfolio : $('#folio').val(),
                            vvalorc6p13 : ''},
                            dataType: "html",
                            success : function(obj)
                            {
                            //location.href = "../c_c6p10/fc_c6p10?folio=" + $('#folio').val();                    
                            }
                           });
                           $.ajax({
                            url: "../c_c6p14/fc_actualizar",
                            type: "GET",
                            data: {vfolio : $('#folio').val(),
                            vvalorc6p14 : ''},
                            dataType: "html",
                            success : function(obj)
                            {
                            //location.href = "../c_c6p10/fc_c6p10?folio=" + $('#folio').val();                    
                            }
                           });
                           
                           
                       $.ajax({
                         url: "../c_c11p1/fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),
                                 vc11p1o1 : '98',
                                 vc11p1o2 : '98',
                                 vc11p1o3 : '98',
                                 vc11p1o4 : '98',
                                 vc11p1o5 : '98',
                                 vc11p1o6 : '98',
                                  vc11p1o7 : '98',
                                  vc11p1o8 : '98',vc11p1cual: '98'},
                          dataType: "html",
                          success : function(obj){                      
                          //botonguardar();
                          }
                       });
                           
                           $.ajax({
                          url: "../c_c11p2/fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(), 
                                vc11p2o1 : '98',
                                vc11p2o2 : '98',
                                vc11p2o3 : '98',
                                vc11p2o4 : '98',
                                vc11p2o5 : '98',
                                vc11p2o6 : '98',
                                vc11p2o7 : '98',vc11p2cual : '98'},    
                          dataType: "html",
                          success : function(obj){                      
                          //botonguardar();
                          }
                        });  

                            $.ajax({
                          url: "../c_c11p3/fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),
                                 vc11p3o1 : '98',
                                 vc11p3o2 : '98',
                                 vc11p3o3 : '98',
                                 vc11p3o4 : '98',
                                 vc11p3o5 : '98',
                                 vc11p3o6 : '98',
                                 vc11p3cual : '98'},    
                          dataType: "html",
                          success : function(obj){                      
                         // botonguardar();
                          }
                           });  
                       
                           $.ajax({
                            url: "../c_c6p15/fc_actualizar",
                            type: "GET",
                            data: {vfolio : $('#folio').val(),
                            vvalorc6p15 : ''},
                            dataType: "html",
                            success : function(obj)
                            {
                        //    location.href = "../c_c6p10/fc_c6p10?folio=" + $('#folio').val();                    
                            }
                           });
           }
      
           else if (($('#valorc6menores18').val() === '1' && $('#c6p10').val() === '98' && $('#c1p13').val() !== 'c1p13o13' ))
           {                $.ajax({
                            url: "../c_c6p10/fc_actualizar",
                            type: "GET",
                            data: {vfolio : $('#folio').val(),
                            vvalorc6p10 : ''},
                            dataType: "html",
                            success : function(obj)
                            {
                            //location.href = "../c_c6p10/fc_c6p10?folio=" + $('#folio').val();                    
                            }
                           });
                           $.ajax({
                            url: "../c_c6p11/fc_actualizar",
                            type: "GET",
                            data: {vfolio : $('#folio').val(),
                            vvalorc6p11 : ''},
                            dataType: "html",
                            success : function(obj)
                            {
                            //location.href = "../c_c6p10/fc_c6p10?folio=" + $('#folio').val();                    
                            }
                           });
                           $.ajax({
                            url: "../c_c6p12/fc_actualizar",
                            type: "GET",
                            data: {vfolio : $('#folio').val(),
                            vvalorc6p12 : ''},
                            dataType: "html",
                            success : function(obj)
                            {
                            //location.href = "../c_c6p10/fc_c6p10?folio=" + $('#folio').val();                    
                            }
                           });
                           $.ajax({
                            url: "../c_c6p13/fc_actualizar",
                            type: "GET",
                            data: {vfolio : $('#folio').val(),
                            vvalorc6p13 : ''},
                            dataType: "html",
                            success : function(obj)
                            {
                            //location.href = "../c_c6p10/fc_c6p10?folio=" + $('#folio').val();                    
                            }
                           });
                           $.ajax({
                            url: "../c_c6p14/fc_actualizar",
                            type: "GET",
                            data: {vfolio : $('#folio').val(),
                            vvalorc6p14 : ''},
                            dataType: "html",
                            success : function(obj)
                            {
                            //location.href = "../c_c6p10/fc_c6p10?folio=" + $('#folio').val();                    
                            }
                           });
                           
                           
                       $.ajax({
                         url: "../c_c11p1/fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),
                                 vc11p1o1 : '',
                                 vc11p1o2 : '',
                                 vc11p1o3 : '',
                                 vc11p1o4 : '',
                                 vc11p1o5 : '',
                                 vc11p1o6 : '',
                                  vc11p1o7 : '',
                                  vc11p1o8 : '',vc11p1cual: ''},
                          dataType: "html",
                          success : function(obj){                      
                          //botonguardar();
                          }
                       });
                           
                           
                           $.ajax({
                          url: "../c_c11p2/fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(), 
                                vc11p2o1 : '',
                                vc11p2o2 : '',
                                vc11p2o3 : '',
                                vc11p2o4 : '',
                                vc11p2o5 : '',
                                vc11p2o6 : '',
                                vc11p2o7 : '',vc11p2cual : ''},    
                          dataType: "html",
                          success : function(obj){                      
                          //botonguardar();
                          }
                        });  

                            $.ajax({
                          url: "../c_c11p3/fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),
                                 vc11p3o1 : '',
                                 vc11p3o2 : '',
                                 vc11p3o3 : '',
                                 vc11p3o4 : '',
                                 vc11p3o5 : '',
                                 vc11p3o6 : '',
                                 vc11p3cual : ''},    
                          dataType: "html",
                          success : function(obj){                      
                         // botonguardar();
                          }
                           });  
                       
                           $.ajax({
                            url: "../c_c6p15/fc_actualizar",
                            type: "GET",
                            data: {vfolio : $('#folio').val(),
                            vvalorc6p15 : ''},
                            dataType: "html",
                            success : function(obj)
                            {
                    //        location.href = "../c_c6p10/fc_c6p10?folio=" + $('#folio').val();                    
                            }
                           });
           }
           else
                 {
                  //   location.href = "../c_c6p10/fc_c6p10?folio=" + $('#folio').val();                    
                 }


                          ////////////////////////////////// fin  salto //////////////////////////








                          botonguardar();
                          }
                        });                    
        });

        
        $("#actualizar").click(function ()
        {
                        $.ajax({
                          url: "fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(), vvalorc6menores18 : $('#valorc6menores18').val()},    
                          dataType: "html",
                          success : function(obj){  




                            
                          ////////////////////////////////// salto //////////////////////////  
if($('#valorc6menores18').val() === '2')
           {                $.ajax({
                            url: "../c_c6p10/fc_actualizar",
                            type: "GET",
                            data: {vfolio : $('#folio').val(),
                            vvalorc6p10 : '98'},
                            dataType: "html",
                            success : function(obj)
                            {
                           // location.href = "../c_c6p16/fc_c6p16?folio=" + $('#folio').val();                    
                            }
                           });
                           $.ajax({
                            url: "../c_c6p11/fc_actualizar",
                            type: "GET",
                            data: {vfolio : $('#folio').val(),
                            vvalorc6p11 : '98'},
                            dataType: "html",
                            success : function(obj)
                            {
                            //location.href = "../c_c6p16/fc_c6p16?folio=" + $('#folio').val();                    
                            }
                           });
                           $.ajax({
                            url: "../c_c6p12/fc_actualizar",
                            type: "GET",
                            data: {vfolio : $('#folio').val(),
                            vvalorc6p12 : '98'},
                            dataType: "html",
                            success : function(obj)
                            {
                            //location.href = "../c_c6p16/fc_c6p16?folio=" + $('#folio').val();                    
                            }
                           });
                           $.ajax({
                            url: "../c_c6p13/fc_actualizar",
                            type: "GET",
                            data: {vfolio : $('#folio').val(),
                            vvalorc6p13 : '98'},
                            dataType: "html",
                            success : function(obj)
                            {
                            //location.href = "../c_c6p16/fc_c6p16?folio=" + $('#folio').val();                    
                            }
                           });
                           $.ajax({
                            url: "../c_c6p14/fc_actualizar",
                            type: "GET",
                            data: {vfolio : $('#folio').val(),
                            vvalorc6p14 : '98'},
                            dataType: "html",
                            success : function(obj)
                            {
                            //location.href = "../c_c6p16/fc_c6p16?folio=" + $('#folio').val();                    
                            }
                           });
                           
                           $.ajax({
                          url: "../c_c11p1/fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),
                                 vc11p1o1 : '98',
                                 vc11p1o2 : '98',
                                 vc11p1o3 : '98',
                                 vc11p1o4 : '98',
                                 vc11p1o5 : '98',
                                 vc11p1o6 : '98',
                                  vc11p1o7 : '98',
                                  vc11p1o8 : '98',vc11p1cual: '98'},
                          dataType: "html",
                          success : function(obj){                      
                          //botonguardar();
                          }
                        });
                        
                        $.ajax({
                          url: "../c_c11p2/fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(), 
                                vc11p2o1 : '98',
                                vc11p2o2 : '98',
                                vc11p2o3 : '98',
                                vc11p2o4 : '98',
                                vc11p2o5 : '98',
                                vc11p2o6 : '98',
                                vc11p2o7 : '98',vc11p2cual : '98'},    
                          dataType: "html",
                          success : function(obj){                      
                          //botonguardar();
                          }
                        }); 
            
                        $.ajax({
                          url: "../c_c11p3/fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),
                                 vc11p3o1 : '98',
                                 vc11p3o2 : '98',
                                 vc11p3o3 : '98',
                                 vc11p3o4 : '98',
                                 vc11p3o5 : '98',
                                 vc11p3o6 : '98',
                                 vc11p3cual : '98'},    
                          dataType: "html",
                          success : function(obj){                      
                         // botonguardar();
                          }
                        });  
                   
                           $.ajax({
                            url: "../c_c6p15/fc_actualizar",
                            type: "GET",
                            data: {vfolio : $('#folio').val(),
                            vvalorc6p15 : '98'},
                            dataType: "html",
                            success : function(obj)
                            {
                           // location.href = "../c_c6p16/fc_c6p16?folio=" + $('#folio').val();                    
                            }
                           });                        
                           
           }
           else if (($('#valorc6menores18').val() === '1' && $('#c1p13').val() == 'c1p13o13' ))
           {                
                            $.ajax({
                            url: "../c_c6p10/fc_actualizar",
                            type: "GET",
                            data: {vfolio : $('#folio').val(),
                            vvalorc6p10 : '98'},
                            dataType: "html",
                            success : function(obj)
                            {
                            //location.href = "../c_c6p10/fc_c6p10?folio=" + $('#folio').val();                    
                            }
                           });
                           $.ajax({
                            url: "../c_c6p11/fc_actualizar",
                            type: "GET",
                            data: {vfolio : $('#folio').val(),
                            vvalorc6p11 : '98'},
                            dataType: "html",
                            success : function(obj)
                            {
                            //location.href = "../c_c6p10/fc_c6p10?folio=" + $('#folio').val();                    
                            }
                           });
                           $.ajax({
                            url: "../c_c6p12/fc_actualizar",
                            type: "GET",
                            data: {vfolio : $('#folio').val(),
                            vvalorc6p12 : '98'},
                            dataType: "html",
                            success : function(obj)
                            {
                            //location.href = "../c_c6p10/fc_c6p10?folio=" + $('#folio').val();                    
                            }
                           });
                           $.ajax({
                            url: "../c_c6p13/fc_actualizar",
                            type: "GET",
                            data: {vfolio : $('#folio').val(),
                            vvalorc6p13 : '98'},
                            dataType: "html",
                            success : function(obj)
                            {
                            //location.href = "../c_c6p10/fc_c6p10?folio=" + $('#folio').val();                    
                            }
                           });
                           $.ajax({
                            url: "../c_c6p14/fc_actualizar",
                            type: "GET",
                            data: {vfolio : $('#folio').val(),
                            vvalorc6p14 : '98'},
                            dataType: "html",
                            success : function(obj)
                            {
                            //location.href = "../c_c6p10/fc_c6p10?folio=" + $('#folio').val();                    
                            }
                           });
                           
                       $.ajax({
                         url: "../c_c11p1/fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),
                                 vc11p1o1 : '98',
                                 vc11p1o2 : '98',
                                 vc11p1o3 : '98',
                                 vc11p1o4 : '98',
                                 vc11p1o5 : '98',
                                 vc11p1o6 : '98',
                                  vc11p1o7 : '98',
                                  vc11p1o8 : '98',vc11p1cual: '98'},
                          dataType: "html",
                          success : function(obj){                      
                          //botonguardar();
                          }
                       });
                           
                           $.ajax({
                          url: "../c_c11p2/fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(), 
                                vc11p2o1 : '98',
                                vc11p2o2 : '98',
                                vc11p2o3 : '98',
                                vc11p2o4 : '98',
                                vc11p2o5 : '98',
                                vc11p2o6 : '98',
                                vc11p2o7 : '98',vc11p2cual : '98'},    
                          dataType: "html",
                          success : function(obj){                      
                          //botonguardar();
                          }
                        });  

                            $.ajax({
                          url: "../c_c11p3/fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),
                                 vc11p3o1 : '98',
                                 vc11p3o2 : '98',
                                 vc11p3o3 : '98',
                                 vc11p3o4 : '98',
                                 vc11p3o5 : '98',
                                 vc11p3o6 : '98',
                                 vc11p3cual : '98'},    
                          dataType: "html",
                          success : function(obj){                      
                         // botonguardar();
                          }
                           });  
                       
                           $.ajax({
                            url: "../c_c6p15/fc_actualizar",
                            type: "GET",
                            data: {vfolio : $('#folio').val(),
                            vvalorc6p15 : '98'},
                            dataType: "html",
                            success : function(obj)
                            {
                   //         location.href = "../c_c6p16/fc_c6p16?folio=" + $('#folio').val();                    
                            }
                           });
           }
           
           else if (($('#valorc6menores18').val() === '1' && $('#c1p13').val() == 'c1p13o14' ))
           {                
                            $.ajax({
                            url: "../c_c6p10/fc_actualizar",
                            type: "GET",
                            data: {vfolio : $('#folio').val(),
                            vvalorc6p10 : ''},
                            dataType: "html",
                            success : function(obj)
                            {
                            //location.href = "../c_c6p10/fc_c6p10?folio=" + $('#folio').val();                    
                            }
                           });
                           $.ajax({
                            url: "../c_c6p11/fc_actualizar",
                            type: "GET",
                            data: {vfolio : $('#folio').val(),
                            vvalorc6p11 : ''},
                            dataType: "html",
                            success : function(obj)
                            {
                            //location.href = "../c_c6p10/fc_c6p10?folio=" + $('#folio').val();                    
                            }
                           });
                           $.ajax({
                            url: "../c_c6p12/fc_actualizar",
                            type: "GET",
                            data: {vfolio : $('#folio').val(),
                            vvalorc6p12 : ''},
                            dataType: "html",
                            success : function(obj)
                            {
                            //location.href = "../c_c6p10/fc_c6p10?folio=" + $('#folio').val();                    
                            }
                           });
                           $.ajax({
                            url: "../c_c6p13/fc_actualizar",
                            type: "GET",
                            data: {vfolio : $('#folio').val(),
                            vvalorc6p13 : ''},
                            dataType: "html",
                            success : function(obj)
                            {
                            //location.href = "../c_c6p10/fc_c6p10?folio=" + $('#folio').val();                    
                            }
                           });
                           $.ajax({
                            url: "../c_c6p14/fc_actualizar",
                            type: "GET",
                            data: {vfolio : $('#folio').val(),
                            vvalorc6p14 : ''},
                            dataType: "html",
                            success : function(obj)
                            {
                            //location.href = "../c_c6p10/fc_c6p10?folio=" + $('#folio').val();                    
                            }
                           });
                           
                           
                       $.ajax({
                         url: "../c_c11p1/fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),
                                 vc11p1o1 : '98',
                                 vc11p1o2 : '98',
                                 vc11p1o3 : '98',
                                 vc11p1o4 : '98',
                                 vc11p1o5 : '98',
                                 vc11p1o6 : '98',
                                  vc11p1o7 : '98',
                                  vc11p1o8 : '98',vc11p1cual: '98'},
                          dataType: "html",
                          success : function(obj){                      
                          //botonguardar();
                          }
                       });
                           
                           $.ajax({
                          url: "../c_c11p2/fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(), 
                                vc11p2o1 : '98',
                                vc11p2o2 : '98',
                                vc11p2o3 : '98',
                                vc11p2o4 : '98',
                                vc11p2o5 : '98',
                                vc11p2o6 : '98',
                                vc11p2o7 : '98',vc11p2cual : '98'},    
                          dataType: "html",
                          success : function(obj){                      
                          //botonguardar();
                          }
                        });  

                            $.ajax({
                          url: "../c_c11p3/fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),
                                 vc11p3o1 : '98',
                                 vc11p3o2 : '98',
                                 vc11p3o3 : '98',
                                 vc11p3o4 : '98',
                                 vc11p3o5 : '98',
                                 vc11p3o6 : '98',
                                 vc11p3cual : '98'},    
                          dataType: "html",
                          success : function(obj){                      
                         // botonguardar();
                          }
                           });  
                       
                           $.ajax({
                            url: "../c_c6p15/fc_actualizar",
                            type: "GET",
                            data: {vfolio : $('#folio').val(),
                            vvalorc6p15 : ''},
                            dataType: "html",
                            success : function(obj)
                            {
                     //       location.href = "../c_c6p10/fc_c6p10?folio=" + $('#folio').val();                    
                            }
                           });
           }
      
           else if (($('#valorc6menores18').val() === '1' && $('#c6p10').val() === '98' && $('#c1p13').val() !== 'c1p13o13' ))
           {                $.ajax({
                            url: "../c_c6p10/fc_actualizar",
                            type: "GET",
                            data: {vfolio : $('#folio').val(),
                            vvalorc6p10 : ''},
                            dataType: "html",
                            success : function(obj)
                            {
                            //location.href = "../c_c6p10/fc_c6p10?folio=" + $('#folio').val();                    
                            }
                           });
                           $.ajax({
                            url: "../c_c6p11/fc_actualizar",
                            type: "GET",
                            data: {vfolio : $('#folio').val(),
                            vvalorc6p11 : ''},
                            dataType: "html",
                            success : function(obj)
                            {
                            //location.href = "../c_c6p10/fc_c6p10?folio=" + $('#folio').val();                    
                            }
                           });
                           $.ajax({
                            url: "../c_c6p12/fc_actualizar",
                            type: "GET",
                            data: {vfolio : $('#folio').val(),
                            vvalorc6p12 : ''},
                            dataType: "html",
                            success : function(obj)
                            {
                            //location.href = "../c_c6p10/fc_c6p10?folio=" + $('#folio').val();                    
                            }
                           });
                           $.ajax({
                            url: "../c_c6p13/fc_actualizar",
                            type: "GET",
                            data: {vfolio : $('#folio').val(),
                            vvalorc6p13 : ''},
                            dataType: "html",
                            success : function(obj)
                            {
                            //location.href = "../c_c6p10/fc_c6p10?folio=" + $('#folio').val();                    
                            }
                           });
                           $.ajax({
                            url: "../c_c6p14/fc_actualizar",
                            type: "GET",
                            data: {vfolio : $('#folio').val(),
                            vvalorc6p14 : ''},
                            dataType: "html",
                            success : function(obj)
                            {
                            //location.href = "../c_c6p10/fc_c6p10?folio=" + $('#folio').val();                    
                            }
                           });
                           
                           
                       $.ajax({
                         url: "../c_c11p1/fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),
                                 vc11p1o1 : '',
                                 vc11p1o2 : '',
                                 vc11p1o3 : '',
                                 vc11p1o4 : '',
                                 vc11p1o5 : '',
                                 vc11p1o6 : '',
                                  vc11p1o7 : '',
                                  vc11p1o8 : '',vc11p1cual: ''},
                          dataType: "html",
                          success : function(obj){                      
                          //botonguardar();
                          }
                       });
                           
                           
                           $.ajax({
                          url: "../c_c11p2/fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(), 
                                vc11p2o1 : '',
                                vc11p2o2 : '',
                                vc11p2o3 : '',
                                vc11p2o4 : '',
                                vc11p2o5 : '',
                                vc11p2o6 : '',
                                vc11p2o7 : '',vc11p2cual : ''},    
                          dataType: "html",
                          success : function(obj){                      
                          //botonguardar();
                          }
                        });  

                            $.ajax({
                          url: "../c_c11p3/fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),
                                 vc11p3o1 : '',
                                 vc11p3o2 : '',
                                 vc11p3o3 : '',
                                 vc11p3o4 : '',
                                 vc11p3o5 : '',
                                 vc11p3o6 : '',
                                 vc11p3cual : ''},    
                          dataType: "html",
                          success : function(obj){                      
                         // botonguardar();
                          }
                           });  
                       
                           $.ajax({
                            url: "../c_c6p15/fc_actualizar",
                            type: "GET",
                            data: {vfolio : $('#folio').val(),
                            vvalorc6p15 : ''},
                            dataType: "html",
                            success : function(obj)
                            {
                    //        location.href = "../c_c6p10/fc_c6p10?folio=" + $('#folio').val();                    
                            }
                           });
           }
           else
                 {
                  //   location.href = "../c_c6p10/fc_c6p10?folio=" + $('#folio').val();                    
                 }


                          ////////////////////////////////// fin  salto //////////////////////////







                          botonactualizar();
                          }
                        });                   
        });
 /////////////////////////////////////////////////////////////////////////////////
 $("#siguiente").click(function ()
        {
         botonsiguiente();
         if($('#valorc6menores18').val() === '2')
           {                $.ajax({
                            url: "../c_c6p10/fc_actualizar",
                            type: "GET",
                            data: {vfolio : $('#folio').val(),
                            vvalorc6p10 : '98'},
                            dataType: "html",
                            success : function(obj)
                            {
                           // location.href = "../c_c6p16/fc_c6p16?folio=" + $('#folio').val();                    
                            }
                           });
                           $.ajax({
                            url: "../c_c6p11/fc_actualizar",
                            type: "GET",
                            data: {vfolio : $('#folio').val(),
                            vvalorc6p11 : '98'},
                            dataType: "html",
                            success : function(obj)
                            {
                            //location.href = "../c_c6p16/fc_c6p16?folio=" + $('#folio').val();                    
                            }
                           });
                           $.ajax({
                            url: "../c_c6p12/fc_actualizar",
                            type: "GET",
                            data: {vfolio : $('#folio').val(),
                            vvalorc6p12 : '98'},
                            dataType: "html",
                            success : function(obj)
                            {
                            //location.href = "../c_c6p16/fc_c6p16?folio=" + $('#folio').val();                    
                            }
                           });
                           $.ajax({
                            url: "../c_c6p13/fc_actualizar",
                            type: "GET",
                            data: {vfolio : $('#folio').val(),
                            vvalorc6p13 : '98'},
                            dataType: "html",
                            success : function(obj)
                            {
                            //location.href = "../c_c6p16/fc_c6p16?folio=" + $('#folio').val();                    
                            }
                           });
                           $.ajax({
                            url: "../c_c6p14/fc_actualizar",
                            type: "GET",
                            data: {vfolio : $('#folio').val(),
                            vvalorc6p14 : '98'},
                            dataType: "html",
                            success : function(obj)
                            {
                            //location.href = "../c_c6p16/fc_c6p16?folio=" + $('#folio').val();                    
                            }
                           });
                           
                           $.ajax({
                          url: "../c_c11p1/fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),
                                 vc11p1o1 : '98',
                                 vc11p1o2 : '98',
                                 vc11p1o3 : '98',
                                 vc11p1o4 : '98',
                                 vc11p1o5 : '98',
                                 vc11p1o6 : '98',
                                  vc11p1o7 : '98',
                                  vc11p1o8 : '98',vc11p1cual: '98'},
                          dataType: "html",
                          success : function(obj){                      
                          //botonguardar();
                          }
                        });
                        
                        $.ajax({
                          url: "../c_c11p2/fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(), 
                                vc11p2o1 : '98',
                                vc11p2o2 : '98',
                                vc11p2o3 : '98',
                                vc11p2o4 : '98',
                                vc11p2o5 : '98',
                                vc11p2o6 : '98',
                                vc11p2o7 : '98',vc11p2cual : '98'},    
                          dataType: "html",
                          success : function(obj){                      
                          //botonguardar();
                          }
                        }); 
            
                        $.ajax({
                          url: "../c_c11p3/fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),
                                 vc11p3o1 : '98',
                                 vc11p3o2 : '98',
                                 vc11p3o3 : '98',
                                 vc11p3o4 : '98',
                                 vc11p3o5 : '98',
                                 vc11p3o6 : '98',
                                 vc11p3cual : '98'},    
                          dataType: "html",
                          success : function(obj){                      
                         // botonguardar();
                          }
                        });  
                   
                           $.ajax({
                            url: "../c_c6p15/fc_actualizar",
                            type: "GET",
                            data: {vfolio : $('#folio').val(),
                            vvalorc6p15 : '98'},
                            dataType: "html",
                            success : function(obj)
                            {
                            location.href = "../c_c6p16/fc_c6p16?folio=" + $('#folio').val();                    
                            }
                           });                        
                           
           }
           else if (($('#valorc6menores18').val() === '1' && $('#c1p13').val() == 'c1p13o13' ))
           {                
                            $.ajax({
                            url: "../c_c6p10/fc_actualizar",
                            type: "GET",
                            data: {vfolio : $('#folio').val(),
                            vvalorc6p10 : '98'},
                            dataType: "html",
                            success : function(obj)
                            {
                            //location.href = "../c_c6p10/fc_c6p10?folio=" + $('#folio').val();                    
                            }
                           });
                           $.ajax({
                            url: "../c_c6p11/fc_actualizar",
                            type: "GET",
                            data: {vfolio : $('#folio').val(),
                            vvalorc6p11 : '98'},
                            dataType: "html",
                            success : function(obj)
                            {
                            //location.href = "../c_c6p10/fc_c6p10?folio=" + $('#folio').val();                    
                            }
                           });
                           $.ajax({
                            url: "../c_c6p12/fc_actualizar",
                            type: "GET",
                            data: {vfolio : $('#folio').val(),
                            vvalorc6p12 : '98'},
                            dataType: "html",
                            success : function(obj)
                            {
                            //location.href = "../c_c6p10/fc_c6p10?folio=" + $('#folio').val();                    
                            }
                           });
                           $.ajax({
                            url: "../c_c6p13/fc_actualizar",
                            type: "GET",
                            data: {vfolio : $('#folio').val(),
                            vvalorc6p13 : '98'},
                            dataType: "html",
                            success : function(obj)
                            {
                            //location.href = "../c_c6p10/fc_c6p10?folio=" + $('#folio').val();                    
                            }
                           });
                           $.ajax({
                            url: "../c_c6p14/fc_actualizar",
                            type: "GET",
                            data: {vfolio : $('#folio').val(),
                            vvalorc6p14 : '98'},
                            dataType: "html",
                            success : function(obj)
                            {
                            //location.href = "../c_c6p10/fc_c6p10?folio=" + $('#folio').val();                    
                            }
                           });
                           
                       $.ajax({
                         url: "../c_c11p1/fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),
                                 vc11p1o1 : '98',
                                 vc11p1o2 : '98',
                                 vc11p1o3 : '98',
                                 vc11p1o4 : '98',
                                 vc11p1o5 : '98',
                                 vc11p1o6 : '98',
                                  vc11p1o7 : '98',
                                  vc11p1o8 : '98',vc11p1cual: '98'},
                          dataType: "html",
                          success : function(obj){                      
                          //botonguardar();
                          }
                       });
                           
                           $.ajax({
                          url: "../c_c11p2/fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(), 
                                vc11p2o1 : '98',
                                vc11p2o2 : '98',
                                vc11p2o3 : '98',
                                vc11p2o4 : '98',
                                vc11p2o5 : '98',
                                vc11p2o6 : '98',
                                vc11p2o7 : '98',vc11p2cual : '98'},    
                          dataType: "html",
                          success : function(obj){                      
                          //botonguardar();
                          }
                        });  

                            $.ajax({
                          url: "../c_c11p3/fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),
                                 vc11p3o1 : '98',
                                 vc11p3o2 : '98',
                                 vc11p3o3 : '98',
                                 vc11p3o4 : '98',
                                 vc11p3o5 : '98',
                                 vc11p3o6 : '98',
                                 vc11p3cual : '98'},    
                          dataType: "html",
                          success : function(obj){                      
                         // botonguardar();
                          }
                           });  
                       
                           $.ajax({
                            url: "../c_c6p15/fc_actualizar",
                            type: "GET",
                            data: {vfolio : $('#folio').val(),
                            vvalorc6p15 : '98'},
                            dataType: "html",
                            success : function(obj)
                            {
                            location.href = "../c_c6p16/fc_c6p16?folio=" + $('#folio').val();                    
                            }
                           });
           }
           
           else if (($('#valorc6menores18').val() === '1' && $('#c1p13').val() == 'c1p13o14' ))
           {                
                            $.ajax({
                            url: "../c_c6p10/fc_actualizar",
                            type: "GET",
                            data: {vfolio : $('#folio').val(),
                            vvalorc6p10 : ''},
                            dataType: "html",
                            success : function(obj)
                            {
                            //location.href = "../c_c6p10/fc_c6p10?folio=" + $('#folio').val();                    
                            }
                           });
                           $.ajax({
                            url: "../c_c6p11/fc_actualizar",
                            type: "GET",
                            data: {vfolio : $('#folio').val(),
                            vvalorc6p11 : ''},
                            dataType: "html",
                            success : function(obj)
                            {
                            //location.href = "../c_c6p10/fc_c6p10?folio=" + $('#folio').val();                    
                            }
                           });
                           $.ajax({
                            url: "../c_c6p12/fc_actualizar",
                            type: "GET",
                            data: {vfolio : $('#folio').val(),
                            vvalorc6p12 : ''},
                            dataType: "html",
                            success : function(obj)
                            {
                            //location.href = "../c_c6p10/fc_c6p10?folio=" + $('#folio').val();                    
                            }
                           });
                           $.ajax({
                            url: "../c_c6p13/fc_actualizar",
                            type: "GET",
                            data: {vfolio : $('#folio').val(),
                            vvalorc6p13 : ''},
                            dataType: "html",
                            success : function(obj)
                            {
                            //location.href = "../c_c6p10/fc_c6p10?folio=" + $('#folio').val();                    
                            }
                           });
                           $.ajax({
                            url: "../c_c6p14/fc_actualizar",
                            type: "GET",
                            data: {vfolio : $('#folio').val(),
                            vvalorc6p14 : ''},
                            dataType: "html",
                            success : function(obj)
                            {
                            //location.href = "../c_c6p10/fc_c6p10?folio=" + $('#folio').val();                    
                            }
                           });
                           
                           
                       $.ajax({
                         url: "../c_c11p1/fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),
                                 vc11p1o1 : '98',
                                 vc11p1o2 : '98',
                                 vc11p1o3 : '98',
                                 vc11p1o4 : '98',
                                 vc11p1o5 : '98',
                                 vc11p1o6 : '98',
                                  vc11p1o7 : '98',
                                  vc11p1o8 : '98',vc11p1cual: '98'},
                          dataType: "html",
                          success : function(obj){                      
                          //botonguardar();
                          }
                       });
                           
                           $.ajax({
                          url: "../c_c11p2/fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(), 
                                vc11p2o1 : '98',
                                vc11p2o2 : '98',
                                vc11p2o3 : '98',
                                vc11p2o4 : '98',
                                vc11p2o5 : '98',
                                vc11p2o6 : '98',
                                vc11p2o7 : '98',vc11p2cual : '98'},    
                          dataType: "html",
                          success : function(obj){                      
                          //botonguardar();
                          }
                        });  

                            $.ajax({
                          url: "../c_c11p3/fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),
                                 vc11p3o1 : '98',
                                 vc11p3o2 : '98',
                                 vc11p3o3 : '98',
                                 vc11p3o4 : '98',
                                 vc11p3o5 : '98',
                                 vc11p3o6 : '98',
                                 vc11p3cual : '98'},    
                          dataType: "html",
                          success : function(obj){                      
                         // botonguardar();
                          }
                           });  
                       
                           $.ajax({
                            url: "../c_c6p15/fc_actualizar",
                            type: "GET",
                            data: {vfolio : $('#folio').val(),
                            vvalorc6p15 : ''},
                            dataType: "html",
                            success : function(obj)
                            {
                            location.href = "../c_c6p10/fc_c6p10?folio=" + $('#folio').val();                    
                            }
                           });
           }
      
           else if (($('#valorc6menores18').val() === '1' && $('#c6p10').val() === '98' && $('#c1p13').val() !== 'c1p13o13' ))
           {                $.ajax({
                            url: "../c_c6p10/fc_actualizar",
                            type: "GET",
                            data: {vfolio : $('#folio').val(),
                            vvalorc6p10 : ''},
                            dataType: "html",
                            success : function(obj)
                            {
                            //location.href = "../c_c6p10/fc_c6p10?folio=" + $('#folio').val();                    
                            }
                           });
                           $.ajax({
                            url: "../c_c6p11/fc_actualizar",
                            type: "GET",
                            data: {vfolio : $('#folio').val(),
                            vvalorc6p11 : ''},
                            dataType: "html",
                            success : function(obj)
                            {
                            //location.href = "../c_c6p10/fc_c6p10?folio=" + $('#folio').val();                    
                            }
                           });
                           $.ajax({
                            url: "../c_c6p12/fc_actualizar",
                            type: "GET",
                            data: {vfolio : $('#folio').val(),
                            vvalorc6p12 : ''},
                            dataType: "html",
                            success : function(obj)
                            {
                            //location.href = "../c_c6p10/fc_c6p10?folio=" + $('#folio').val();                    
                            }
                           });
                           $.ajax({
                            url: "../c_c6p13/fc_actualizar",
                            type: "GET",
                            data: {vfolio : $('#folio').val(),
                            vvalorc6p13 : ''},
                            dataType: "html",
                            success : function(obj)
                            {
                            //location.href = "../c_c6p10/fc_c6p10?folio=" + $('#folio').val();                    
                            }
                           });
                           $.ajax({
                            url: "../c_c6p14/fc_actualizar",
                            type: "GET",
                            data: {vfolio : $('#folio').val(),
                            vvalorc6p14 : ''},
                            dataType: "html",
                            success : function(obj)
                            {
                            //location.href = "../c_c6p10/fc_c6p10?folio=" + $('#folio').val();                    
                            }
                           });
                           
                           
                       $.ajax({
                         url: "../c_c11p1/fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),
                                 vc11p1o1 : '',
                                 vc11p1o2 : '',
                                 vc11p1o3 : '',
                                 vc11p1o4 : '',
                                 vc11p1o5 : '',
                                 vc11p1o6 : '',
                                  vc11p1o7 : '',
                                  vc11p1o8 : '',vc11p1cual: ''},
                          dataType: "html",
                          success : function(obj){                      
                          //botonguardar();
                          }
                       });
                           
                           
                           $.ajax({
                          url: "../c_c11p2/fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(), 
                                vc11p2o1 : '',
                                vc11p2o2 : '',
                                vc11p2o3 : '',
                                vc11p2o4 : '',
                                vc11p2o5 : '',
                                vc11p2o6 : '',
                                vc11p2o7 : '',vc11p2cual : ''},    
                          dataType: "html",
                          success : function(obj){                      
                          //botonguardar();
                          }
                        });  

                            $.ajax({
                          url: "../c_c11p3/fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),
                                 vc11p3o1 : '',
                                 vc11p3o2 : '',
                                 vc11p3o3 : '',
                                 vc11p3o4 : '',
                                 vc11p3o5 : '',
                                 vc11p3o6 : '',
                                 vc11p3cual : ''},    
                          dataType: "html",
                          success : function(obj){                      
                         // botonguardar();
                          }
                           });  
                       
                           $.ajax({
                            url: "../c_c6p15/fc_actualizar",
                            type: "GET",
                            data: {vfolio : $('#folio').val(),
                            vvalorc6p15 : ''},
                            dataType: "html",
                            success : function(obj)
                            {
                            location.href = "../c_c6p10/fc_c6p10?folio=" + $('#folio').val();                    
                            }
                           });
           }
           else
                 {
                     location.href = "../c_c6p10/fc_c6p10?folio=" + $('#folio').val();                    
                 }
        });
        
$("#anterior").click(function ()
       {
         botonanterior();
         location.href = "../c_c6p9/fc_c6p9?folio=" + $('#folio').val();                    
        });

//para cargar variables capitulo, pregunta,encuestador,vivienda,barra
cargardatosgenerales('<?php echo($arraydatosgenerales['ecapitulo']); ?>','Pregunta 9a de 19','<?php echo($arraydatosgenerales['enomcoges']); ?>','<?php echo($arraydatosgenerales['etitular']); ?>','46');
//control del boton ayuda
botonayuda();

});                  
        
//
//        $("#siguiente").click(function ()
//        {
//         botonsiguiente();
//         location.href = "../c_c6p10/fc_c6p10?folio=" + $('#folio').val();                    
//
//        });
//              
//        $("#anterior").click(function ()
//        {
//         botonanterior();
//         location.href = "../c_c6p9/fc_c6p9?folio=" + $('#folio').val();                    
//        });
//
////para cargar variables capitulo, pregunta,encuestador,vivienda,barra
//cargardatosgenerales('<?php echo($arraydatosgenerales['ecapitulo']); ?>','Pregunta 9 de 19','<?php echo($arraydatosgenerales['enomcoges']); ?>','<?php echo($arraydatosgenerales['etitular']); ?>','45');
////control del boton ayuda
//botonayuda();
//
//});

</script>
</html>