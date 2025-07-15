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
        <input type="text" class="form-control input-sm" id="c5p10o1" name="c5p10o1" style="display:none"  placeholder="" value="<?php echo($arrayrespuestas['ec5p10o1']); ?>">
        <input type="text" class="form-control" id="valorc5p11" name="valorc5p11" style="display:none" placeholder="Text input" value="<?php echo($arrayrespuestas['ec5p11']); ?>">
        <!--
        <input type="text" class="form-control input-sm" id="c5p20" name="c5p20" style="display:none" placeholder="" value="<?php echo($arrayrespuestas['ec5p20']); ?>">-->
        <!--fin para imprimir el idintegrante y llevarlo-->
<hr>
        <form class="form-group" name="formulario" id="formulario">

            <!--inicio radio una sola seleccion-->
            <div class="row">
            <div id="c5p9div" name="c5p9div" <?php if($arrayrespuestas['ec5p9']==''){echo('class="form-group col-md-12 form-group-sm has-error"');}else{echo('class="form-group col-md-12 form-group-sm"');}?>>   
                <label class="control-label">9... actualmente está? (Unica Respuesta)
                    <button type="button" id="vayuda" name="vayuda" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModal">
                        <span class="glyphicon glyphicon-question-sign" aria-hidden="true"></span> Ayuda
                    </button>
                </label>
                <div class="radio">
                    <label><!--en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="c5p9" id="c5p9" onclick="colocaropcionc5p9('c5p9o1','valorc5p9','c5p9div');" value="c5p9o1" <?php if($arrayrespuestas['ec5p9']=='c5p9o1'){echo('checked');}?>>
                         Embarazada
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="c5p9" id="c5p9" onclick="colocaropcionc5p9('c5p9o2','valorc5p9','c5p9div');" value="c5p9o2" <?php if($arrayrespuestas['ec5p9']=='c5p9o2'){echo('checked');}?>>
                        Lactando
                    </label>             
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="c5p9" id="c5p9" onclick="colocaropcionc5p9('c5p9o3','valorc5p9','c5p9div');" value="c5p9o3" <?php if($arrayrespuestas['ec5p9']=='c5p9o3'){echo('checked');}?>>
                       Ninguna
                    </label>             
                </div>
            <input type="text" class="form-control" id="valorc5p9" name="valorc5p9" style="display:none" placeholder="Text input" value="<?php echo($arrayrespuestas['ec5p9']); ?>">
            </div>
            </div> 
            <!--fin radio una sola seleccion-->
            <!--inicio radio una sola seleccion-->
            <div class="radio" id="c5p9adivmostrar" name="c5p9adivmostrar"<?php if($arrayrespuestas['ec5p9a']==''||$arrayrespuestas['ec5p9a']=='98'){echo('style="display:none"');}else{echo('class="form-group col-md-12 form-group-sm"');}?>> 
            <div id="c5p9adiv" name="c5p9adiv" <?php if($arrayrespuestas['ec5p9']==''){echo('class="form-group col-md-12 form-group-sm has-error"');}else{echo('class="form-group col-md-12 form-group-sm"');}?>>   
                
                <div class="radio">ASISTE A CONTROLES PRENATALES :<br>
                    <label><!--en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="c5p9a" id="c5p9a" onclick="colocaropcion('1','valorc5p9a','c5p9adiv');" value="1" <?php if($arrayrespuestas['ec5p9a']=='1'){echo('checked');}?>>
                         Si
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="c5p9a" id="c5p9a" onclick="colocaropcion('2','valorc5p9a','c5p9adiv');" value="2" <?php if($arrayrespuestas['ec5p9a']=='2'){echo('checked');}?>>
                        No
                    </label>             
                </div>
               <input type="text" class="form-control" id="valorc5p9a" name="valorc5p9a" style="display:none" placeholder="Text input" value="<?php echo($arrayrespuestas['ec5p9a']); ?>">
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
            <?php if($arrayrespuestas['ec5p9']=="")
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
function saltarc5p9()
{
if($('#valorc5p9').val() === 'c5p9o3')
        {
                    $.ajax({
                           url: "../c_c5p10/fc_actualizar",
                           type: "GET",
                           data: {vfolio : $('#folio').val(),
                          vidintegrante : $('#idintegrante').val(),
                          vc5p10o1 : '98',          
                          vc5p10o2 : '98',
                          vc5p10o3 : '98',
                          vc5p10o4 : '98',
                          vc5p10o5 : '98',                          
                          vc5p10cual : '98'},   
                           dataType: "html",
                           success : function(obj)
                           {
//                          location.href = "../c_c5p7/fc_c5p7?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
                           }
                          });                          
                          
                          $.ajax({
                           url: "../c_c5p11/fc_actualizar",
                           type: "GET",
                           data: {vfolio : $('#folio').val(),
                               vidintegrante : $('#idintegrante').val(), 
                               vvalorc5p11 : '98',
                               vvalorc5p11cual : '98'},    
                               dataType: "html",
                           success : function(obj)
                           {
//                          location.href = "../c_c5p7/fc_c5p7?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
                           }
                          });
                          
                           $.ajax({
                          url: "../c_c5p12/fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),
                              vidintegrante : $('#idintegrante').val(), 
                              vvalorc5p12 : '98'},    
                          dataType: "html",
                           success : function(obj)
                           {
                                          
                           }
                          });
                          
                          
                          
                          
                          $.ajax({
                          url: "../c_c5p121/fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),
                          vidintegrante : $('#idintegrante').val(),
                          vc5p121o1 : '98',          
                          vc5p121o2 : '98',
                          vc5p121o3 : '98',
                          vc5p121o4 : '98',
                          vc5p121o5 : '98',
                          vc5p121o6 : '98',
                          vc5p121o7 : '98',
                          vc5p121o8 : '98',
                          vc5p121o9 : '98'},
                          dataType: "html",
                           success : function(obj)
                           {
                                          
                           }
                          });
                          
                           $.ajax({
                          url: "../c_c5p13/fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),
                              vidintegrante : $('#idintegrante').val(), 
                              vvalorc5p13 : '98'},    
                          dataType: "html",
                           success : function(obj)
                           {
                                          
                           }
                          });
                          
                          $.ajax({
                          url: "../c_c5p131/fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),
                           vidintegrante : $('#idintegrante').val(),
                          vc5p131o1 : '98',          
                          vc5p131o2 : '98',
                          vc5p131o3 : '98',
                          vc5p131o4 : '98',
                          vc5p131o5 : '98',                                                   
                          vc5p131cual :'98'},    
                          dataType: "html",
                           success : function(obj)
                           {
                                          
                           }
                          });
                          
                          
                          $.ajax({
                          url: "../c_c5p14/fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),vidintegrante : $('#idintegrante').val(),
                          vvalorc5p14 : '98',
                          vvalorc5p14esquema : '98'},    
                          dataType: "html",
                           success : function(obj)
                           {
                         //location.href = "../c_capitulosintegrante/fc_capitulosintegrante?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";
                           }
                          });           
        }
        else if ($('#valorc5p9').val() === 'c5p9o2' )
        {
            $.ajax({
                           url: "../c_c5p10/fc_actualizar",
                           type: "GET",
                           data: {vfolio : $('#folio').val(),
                          vidintegrante : $('#idintegrante').val(),
                          vc5p10o1 : '98',          
                          vc5p10o2 : '98',
                          vc5p10o3 : '98',
                          vc5p10o4 : '98',
                          vc5p10o5 : '98',                          
                          vc5p10cual : '98'},   
                           dataType: "html",
                           success : function(obj)
                           {
                            if ($('#valorc5p11').val() === '98' )   
                               {
                               
                                   $.ajax({
                                   url: "../c_c5p11/fc_actualizar",
                                   type: "GET",
                                   data: {vfolio : $('#folio').val(),
                                       vidintegrante : $('#idintegrante').val(), 
                                       vvalorc5p11 : '',
                                       vvalorc5p11cual : ''},    
                                       dataType: "html",
                                   success : function(obj)
                                   {
                                       
                                    //location.href = "../c_c5p11/fc_c5p11?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
                                   }
                                  });
                              }
                              else
                              {
                                  //location.href = "../c_c5p11/fc_c5p11?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";
                              }
        
                                 
                           }
                           
                          });
                          
                          
        }
        
        else if($('#valorc5p9').val() === 'c5p9o1' && ($('#c5p10o1').val()=== '98') )
        {
            
                              $.ajax({
                           url: "../c_c5p10/fc_actualizar",
                           type: "GET",
                           data: {vfolio : $('#folio').val(),
                          vidintegrante : $('#idintegrante').val(),
                          vc5p10o1 : '',          
                          vc5p10o2 : '',
                          vc5p10o3 : '',
                          vc5p10o4 : '',
                          vc5p10o5 : '',                          
                          vc5p10cual : ''},   
                           dataType: "html",
                           success : function(obj)
                           {
                                                   
                           }
                           
                          });
                          
                           $.ajax({
                           url: "../c_c5p11/fc_actualizar",
                           type: "GET",
                           data: {vfolio : $('#folio').val(),
                               vidintegrante : $('#idintegrante').val(), 
                               vvalorc5p11 : '',
                               vvalorc5p11cual : ''},    
                               dataType: "html",
                           success : function(obj)
                           {
//                          location.href = "../c_c5p7/fc_c5p7?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
                           }
                          });
                          
                           $.ajax({
                          url: "../c_c5p12/fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),
                              vidintegrante : $('#idintegrante').val(), 
                              vvalorc5p12 : ''},    
                          dataType: "html",
                           success : function(obj)
                           {
                                          
                           }
                          });
                          
                          
                          
                          
                          $.ajax({
                          url: "../c_c5p121/fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),
                          vidintegrante : $('#idintegrante').val(),
                          vc5p121o1 : '',          
                          vc5p121o2 : '',
                          vc5p121o3 : '',
                          vc5p121o4 : '',
                          vc5p121o5 : '',
                          vc5p121o6 : '',
                          vc5p121o7 : '',
                          vc5p121o8 : '',
                          vc5p121o9 : ''},
                          dataType: "html",
                           success : function(obj)
                           {
                                          
                           }
                          });
                          
                           $.ajax({
                          url: "../c_c5p13/fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),
                              vidintegrante : $('#idintegrante').val(), 
                              vvalorc5p13 : ''},    
                          dataType: "html",
                           success : function(obj)
                           {
                                          
                           }
                          });
                          
                          $.ajax({
                          url: "../c_c5p131/fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),
                           vidintegrante : $('#idintegrante').val(),
                          vc5p131o1 : '',          
                          vc5p131o2 : '',
                          vc5p131o3 : '',
                          vc5p131o4 : '',
                          vc5p131o5 : '',                                                   
                          vc5p131cual :''},    
                          dataType: "html",
                           success : function(obj)
                           {
                                          
                           }
                          });
                          
                          
                          $.ajax({
                          url: "../c_c5p14/fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),vidintegrante : $('#idintegrante').val(),
                          vvalorc5p14 : '',
                          vvalorc5p14esquema : ''},    
                          dataType: "html",
                           success : function(obj)
                           {
                         //location.href = "../c_c5p10/fc_c5p10?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() ;
                           }
                          });
            
//            location.href = "../c_c5p10/fc_c5p10?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";  
            
            
        }
        else
        {
            //location.href = "../c_c5p10/fc_c5p10?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() ;
        }



}   
    
    
    
    
    $(document).ready(function()
    {

        $("#guardar").click(function ()
        {
                        $.ajax({
                          url: "fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),vidintegrante : $('#idintegrante').val(), vvalorc5p9 : $('#valorc5p9').val(), vvalorc5p9a : $('#valorc5p9a').val()},    
                          dataType: "html",
                          success : function(obj){                      
                          botonguardar();
                          saltarc5p9();
                          }
                        });                    
        });

        
        $("#actualizar").click(function ()
        {
                        $.ajax({
                          url: "fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),vidintegrante : $('#idintegrante').val(), vvalorc5p9 : $('#valorc5p9').val(), vvalorc5p9a : $('#valorc5p9a').val()},    
                          dataType: "html",
                          success : function(obj){                      
                          botonguardar();
                          saltarc5p9();
                          }
                        });                    
        });
         $("#siguiente").click(function ()
       {
         if($('#valorc5p9').val() === 'c5p9o3')
          {  
          location.href = "../c_capitulosintegrante/fc_capitulosintegrante?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";
          }
         else if($('#valorc5p9').val() === 'c5p9o2')
         {  
         location.href = "../c_c5p11/fc_c5p11?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";
          }
         else if($('#valorc5p9').val() === 'c5p9o1')
         {  
         location.href = "../c_c5p10/fc_c5p10?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() ;
          }
         });
        
        
        
        //------------------------hasta aqui----------------------------
//        if(($('#valorc5p9').val() === 'c5p9o3'))
//          {              //alert('SALTO CAPITULO');
//                         $.ajax({
//                         url: "fc_sspsaltoc5p9ac6",
//                         type: "GET",
//                         data: {vfolio : $('#folio').val(),
//                         vidintegrante : $('#idintegrante').val()},
//                         dataType: "html",
//                         success : function(obj){                      
//                         location.href = "../c_capitulosintegrante/fc_capitulosintegrante?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                   
//                         }
//                       });
//          }
//          else if (($('#valorc5p9').val() === 'c5p9o2'&& $('#c5p15').val() !== '98'&& $('#c5p20').val() !== '98'))
//          {              //alert('SALTO 19');
//                         $.ajax({
//                         url: "fc_sspsaltoc5p9ac5p19",
//                         type: "GET",
//                         data: {vfolio : $('#folio').val(),
//                         vidintegrante : $('#idintegrante').val()},
//                         dataType: "html",
//                         success : function(obj){                      
//                         location.href = "../c_c5p19/fc_c5p19?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
//                         }
//                       });
//          }
//           else if (($('#valorc5p9').val() === 'c5p9o2' && $('#c5p15').val() === '98'&& $('#c5p20').val() === '98'))
//          {              //alert('SALTO 19 op 2');
//                         $.ajax({
//                         url: "fc_sspsaltoc5p9ac6o2",
//                         type: "GET",
//                         data: {vfolio : $('#folio').val(),
//                         vidintegrante : $('#idintegrante').val()},
//                         dataType: "html",
//                         success : function(obj){                      
//                         location.href = "../c_c5p19/fc_c5p19?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
//                         }
//                       });
//          }
//          else if (($('#valorc5p9').val() === 'c5p9o2' && $('#c5p15').val() === '98'&& $('#c5p20').val() !== '98'))
//          {              //alert('salta normal a 19');
//                         $.ajax({
//                         url: "fc_sspsaltoc5p9ac5p19",
//                         type: "GET",
//                         data: {vfolio : $('#folio').val(),
//                         vidintegrante : $('#idintegrante').val()},
//                         dataType: "html",
//                         success : function(obj){                      
//                         location.href = "../c_c5p19/fc_c5p19?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
//                         }
//                       });
//          }
//          
//          ////////////////////////////////////////////////////////////////
//          else if (($('#valorc5p9').val() === 'c5p9o2' && $('#c5p15').val() !== '98'&& $('#c5p20').val() === '98'))
//          {              //alert('salta normal a 19');
//                         $.ajax({
//                         url: "fc_sspsaltoc5p9ac6o2",
//                         type: "GET",
//                         data: {vfolio : $('#folio').val(),
//                         vidintegrante : $('#idintegrante').val()},
//                         dataType: "html",
//                         success : function(obj){                      
//                         location.href = "../c_c5p19/fc_c5p19?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
//                         }
//                       });
//          }
//          else if (($('#valorc5p9').val() === 'c5p9o1' && $('#c5p15').val() !== '98'&& $('#c5p20').val() === '98'))
//          {              //alert(' no salta de capitulo');
//                         $.ajax({
//                         url: "fc_sspnosaltoc5p9ac6",
//                         type: "GET",
//                         data: {vfolio : $('#folio').val(),
//                         vidintegrante : $('#idintegrante').val()},
//                         dataType: "html",
//                         success : function(obj){                      
//                         location.href = "../c_c5p15/fc_c5p15?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
//                         }
//                       });
//          }
//          else if (($('#valorc5p9').val() === 'c5p9o1' && $('#c5p15').val() === '98'&& $('#c5p20').val() !== '98'))
//          {              //alert('no salta 19 ok');
//                         $.ajax({
//                         url: "fc_sspnosaltoc5p9ac5p19",
//                         type: "GET",
//                         data: {vfolio : $('#folio').val(),
//                         vidintegrante : $('#idintegrante').val()},
//                         dataType: "html",
//                         success : function(obj){                      
//                         location.href = "../c_c5p15/fc_c5p15?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
//                         }
//                       });
//          }
//          else if (($('#valorc5p9').val() === 'c5p9o1' && $('#c5p15').val() === '98'&& $('#c5p20').val() === '98'))
//          {              //alert('no salta 19 ok');
//                         $.ajax({
//                         url: "fc_sspnosaltoc5p9ac6",
//                         type: "GET",
//                         data: {vfolio : $('#folio').val(),
//                         vidintegrante : $('#idintegrante').val()},
//                         dataType: "html",
//                         success : function(obj){                      
//                         location.href = "../c_c5p15/fc_c5p15?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
//                         }
//                       });
//          }
//        else
//                {
//                    //alert('nadaaaaaaaa');
//                    location.href = "../c_c5p15/fc_c5p15?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
//                }
           
        

//        $("#siguiente").click(function ()
//        {
//         botonsiguiente();
//         location.href = "../c_c5p15/fc_c5p15?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
//
//        });
              
        $("#anterior").click(function ()
        {
         //botonanterior();
         location.href = "../c_c5p8/fc_c5p8?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";     
        //location.href = "../c_capitulosintegrantes/fc_capitulosintegrantes?idintegrante=" + $('#idintegrante').val()+ "&idintegrante="+"&idintegrante=0";                    
        });

//para cargar variables capitulo, pregunta,encuestador,vivienda,barra



cargardatosgenerales('<?php echo($arraydatosgenerales['ecapitulo']); ?>','Pregunta 9 de 14','<?php echo($arraydatosgenerales['enomcoges']); ?>','<?php echo($arraydatosgenerales['enombreintegrante']." "." - "." "."Sexo:"." ".$arraydatosgenerales['esexointegrante']."   "."  -  "."   "."Edad:"."   ".$arraydatosgenerales['eedadintegrante']); ?>','64');
//control del boton ayuda
botonayuda();

});
//habilitar boton guardar
function validarguardarc5p9()
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

//validar bolitas y texto
function validarbolitasytextoc5p9(div,campo)
{ //alert(div + ' juanpis ' + campo);
   if(($('#'+ campo).val() == '') || ($('#'+ campo).val() == '0'))
   { 
       $('#' + div).addClass(' has-error');
   }
   else
   { 
       $('#' + div).removeClass('has-error');
   }
    validarguardarc5p9();
}


// colocar opcion para todos
function colocaropcionc5p9(opcion,campoval,divcampo)
{   
        //alert('aca entra');
   //esta linea me guarda el valor del campo
    $('#' + campoval).val(opcion);
          if(opcion === 'c5p9o1')
            {
                //alert('aca lo muestra');
                $('#c5p9adivmostrar').show(1000);
                $('#valorc5p9a').val('');
                $('#c5p9adiv').addClass(' has-error'); 
              
            }
            else
            {
               //alert('aca lo oculta');
                $('#c5p9adivmostrar').hide(1000);
                $('#valorc5p9a').val('98');
                $('#c5p9adiv').removeClass(' has-error');
                
            }
          
    validarbolitasytexto(divcampo,campoval);
}
//de aca para arriba es logica de bolas y textos

</script>
</html>