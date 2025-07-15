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
   <!--      <input type="text" class="form-control" id="valorc9p32" name="valorc9p32" style="display:none" placeholder="Text input" value="<?php echo($arrayrespuestas['ec9p32']); ?>">
         <input type="text" class="form-control" id="valorc9p34" name="valorc9p34" style="display:none" placeholder="Text input" value="<?php echo($arrayrespuestas['ec9p34']); ?>"> -->
        <!--fin para imprimir el idintegrante y llevarlo-->
<hr>
        <form class="form-group" name="formulario" id="formulario">

            <!--inicio radio una sola seleccion-->
            <div class="row">
            <div id="ppc4p1div" name="ppc4p1div" <?php if($arrayrespuestas['eppc4p1']==''){echo('class="form-group col-md-12 form-group-sm has-error"');}else{echo('class="form-group col-md-12 form-group-sm"');}?>>   
                <label class="control-label">1.Actualmente tiene:
                    <button type="button" id="vayuda" name="vayuda" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModal">
                        <span class="glyphicon glyphicon-question-sign" aria-hidden="true"></span> Ayuda
                    </button>
                </label>
                <div class="radio">
                    <label><!--en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="ppc4p1" id="ppc4p1" onclick="colocaropcion('ppc4p1o1','valorppc4p1','ppc4p1div');" value="ppc4p1o1" <?php if($arrayrespuestas['eppc4p1']=='ppc4p1o1'){echo('checked');}?>>
                        Idea de Negocio
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="ppc4p1" id="ppc4p1" onclick="colocaropcion('ppc4p1o2','valorppc4p1','ppc4p1div');" value="ppc4p1o2" <?php if($arrayrespuestas['eppc4p1']=='ppc4p1o2'){echo('checked');}?>>
                        Proyecto de negocio 
                    </label>             
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="ppc4p1" id="ppc4p1" onclick="colocaropcion('ppc4p1o3','valorppc4p1','ppc4p1div');" value="ppc4p1o3" <?php if($arrayrespuestas['eppc4p1']=='ppc4p1o3'){echo('checked');}?>>
                        Negocio funcionando
                    </label>             
                </div> 
                <div class="radio">
                    <label>
                        <input type="radio" name="ppc4p1" id="ppc4p1" onclick="colocaropcion('ppc4p1o4','valorppc4p1','ppc4p1div');" value="ppc4p1o4" <?php if($arrayrespuestas['eppc4p1']=='ppc4p1o4'){echo('checked');}?>>
                        Niguna de las anteriores
                    </label>             
                </div> 
                
                <input type="text" class="form-control" id="valorppc4p1" name="valorppc4p1" style="display:none" placeholder="Text input" value="<?php echo($arrayrespuestas['eppc4p1']); ?>">
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
            <?php if($arrayrespuestas['eppc4p1']=="")
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
                          data: {vfolio : $('#folio').val(),vidintegrante : $('#idintegrante').val(), vvalorppc4p1 : $('#valorppc4p1').val()},    
                          dataType: "html",
                          success : function(){                  
                          $('#siguiente').prop('disabled', true);    
                          saltarppc4p1();
                          botonguardar();
                        //  location.reload();
                          },
                          error: function (jqXHR, ajaxOptions, thrownError) {terminasinco();
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
        $("#actualizar").click(function ()
        {
                        $.ajax({
                          url: "fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),vidintegrante : $('#idintegrante').val(), vvalorppc4p1 : $('#valorppc4p1').val()},    
                          dataType: "html",
                          success : function(){
                          $('#siguiente').prop('disabled', true);
                          saltarppc4p1();
                          botonguardar();
                        //  location.reload();
                          },
                          error: function (jqXHR, ajaxOptions, thrownError) {terminasinco();
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
        $("#siguiente").click(function ()
        {
         botonsiguiente();
         if($('#valorppc4p1').val() ==='ppc4p1o4')
         {
             location.href = "../c_ppcapitulosintegrante/fc_ppcapitulosintegrante?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";
         }
         else if ($('#valorppc4p1').val() ==='ppc4p1o1' || $('#valorppc4p1').val() ==='ppc4p1o2')
         {
             location.href = "../c_ppc4p10/fc_ppc4p10?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +""; 
         }
         else
         {
             location.href = "../c_ppc4p1a1/fc_ppc4p1a1?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";
         }
        });
        $("#anterior").click(function ()
        {
         botonanterior();
         location.href = "../c_ppcapitulosintegrante/fc_ppcapitulosintegrante?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                 
        });
//para cargar variables capitulo, pregunta,encuestador,vivienda,barra
cargardatosgenerales('<?php echo($arraydatosgenerales['ecapitulo']); ?>','Pregunta 1 de 13','<?php echo($arraydatosgenerales['enomcoges']); ?>','<?php echo($arraydatosgenerales['enombreintegrante']." "." - "." "."Sexo:"." ".$arraydatosgenerales['esexointegrante']."   "."  -  "."   "."Edad:"."   ".$arraydatosgenerales['eedadintegrante']); ?>','5');
//control del boton ayuda
botonayuda();
});
function saltarppc4p1()
{
    if($('#valorppc4p1').val() =='ppc4p1o4')
//    if($('#valorppc4p1').val() ==='ppc4p1o1' || $('#valorppc4p1').val() ==='ppc4p1o2')
    {
       $.ajax({
                          url: "../c_ppc4p1a1/fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),vidintegrante : $('#idintegrante').val(), vvalorppc4p1a1 :'98'},    
                          dataType: "html",
                          success : function(){
                          }
                      });
        $.ajax({
                          url: "../c_ppc4p2/fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),
                                 vidintegrante : $('#idintegrante').val(),
                                 vvalorppc4p2 :'98'},    
                          dataType: "html",
                          success : function(obj)
                          {
                         //location.href = "../c_c9p/fc_c8p7?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
                          }
                         });
        $.ajax({
                          url: "../c_ppc4p3/fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),vidintegrante : $('#idintegrante').val(), vvalorppc4p3 :'98'},    
                          dataType: "html",
                          success : function(obj)
                          {
                         //location.href = "../c_c9p/fc_c8p7?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
                          }
                         });
                         $.ajax({
                          url: "../c_ppc4p3a/fc_actualizar",
                          type: "GET",
                          data: { vfolio : $('#folio').val(),
                                  vidintegrante : $('#idintegrante').val(),
                                  vppc4p3a1 : '98',          
                                  vppc4p3a2 : '98',
                                  vppc4p3a3 : '98',
                                  vppc4p3a4 : '98',
                                  vppc4p3a5 : '98'
                                  },    
                          dataType: "html",
                          success : function(obj)
                          {
//                         location.href = "../c_c9p22/fc_c9p22?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
                          }
                         });
                         
                         $.ajax({
                          url: "../c_ppc4p4/fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),
                                 vidintegrante : $('#idintegrante').val(),
                                 vvalorppc4p4: '98'
                                 },    
                          dataType: "html",
                          success : function(obj)
                          {
                          }
                         });
                          $.ajax({
                          url: "../c_ppc4p5/fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),
                                 vidintegrante : $('#idintegrante').val(),
                                 vvalorppc4p5: '98',
                                 vppc4p5a: '98'
                                 },    
                          dataType: "html",
                          success : function(obj)
                          {
                          }
                         });
                          $.ajax({
                          url: "../c_ppc4p6/fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),
                                 vidintegrante : $('#idintegrante').val(),
                                 vvalorppc4p6: '98'
                                 },    
                          dataType: "html",
                          success : function(obj)
                          {
                          }
                         });
                          $.ajax({
                          url: "../c_ppc4p6a/fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),
                                 vidintegrante : $('#idintegrante').val(),
                                 vppc4p6a1: '98',
                                 vppc4p6a2: '98',
                                 vppc4p6a3: '98',
                                 vppc4p6a4: '98',
                                 vppc4p6a5: '98'
                                 },    
                          dataType: "html",
                          success : function(obj)
                          {
                          }
                         });
                          $.ajax({
                          url: "../c_ppc4p7/fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),
                                 vidintegrante : $('#idintegrante').val(),
                                 vvalorppc4p7: '98'
                                 },    
                          dataType: "html",
                          success : function(obj)
                          {
                          }
                         });
                          $.ajax({
                          url: "../c_ppc4p8/fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),
                                 vidintegrante : $('#idintegrante').val(),
                                 vvalorppc4p8: '98'
                                 },    
                          dataType: "html",
                          success : function(obj)
                          {
                          }
                         });
                          $.ajax({
                          url: "../c_ppc4p9/fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),
                                 vidintegrante : $('#idintegrante').val(),
                                 vvalorppc4p9: '98',
                                 vppc4p9cual: '98'
                                 },    
                          dataType: "html",
                          success : function(obj)
                          {
                          }
                         });
                         
                          $.ajax({
                          url: "../c_ppc4p10/fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),
                                 vidintegrante : $('#idintegrante').val(),
                                 vvalorppc4p10: '98'
                                 },    
                          dataType: "html",
                          success : function(obj)
                          {
                          }
                         });
                         
                          $.ajax({
                          url: "../c_ppc4p11/fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),
                                 vidintegrante : $('#idintegrante').val(),
                                 vvalorppc4p11: '98'
                                 },    
                          dataType: "html",
                          success : function(obj)
                          {
                          }
                         });
                         
                          $.ajax({
                          url: "../c_ppc4p11a/fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),
                                 vidintegrante : $('#idintegrante').val(),
                                 vppc4p11a1: '98',
                                 vppc4p9cual: '98',
                                 vppc4p11a2: '98',
                                 vppc4p11a3: '98',
                                 vppc4p11a4: '98',
                                 vppc4p11acual: '98',
                                 vppc4p11aentidad: '98'
                                 },    
                          dataType: "html",
                          success : function(obj)
                          {
                          }
                         });
                          $.ajax({
                          url: "../c_ppc4p12/fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),
                                 vidintegrante : $('#idintegrante').val(),
                                 vvalorppc4p12: '98',
                                 vppc4p12a: '98'
                                 },    
                          dataType: "html",
                          success : function(obj)
                          {
                          }
                         });
                           $.ajax({
                          url: "../c_ppc4p13/fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),
                                 vidintegrante : $('#idintegrante').val(),
                                 vvalorppc4p13: '98'
                                 },    
                          dataType: "html",
                          success : function(obj)
                          {
                          }
                         });
                           $.ajax({
                          url: "../c_ppc4p13a/fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),
                                 vidintegrante : $('#idintegrante').val(),
                                 vppc4p13a1: '98',
                                 vppc4p13a2: '98',
                                 vppc4p13a3: '98',
                                 vppc4p13a4: '98',
                                 vppc4p13a5: '98',
                                 vppc4p13a6: '98',
                                 vppc4p13a7: '98',
                                 vppc4p13a8: '98',
                                 vppc4p13a9: '98',
                                 vppc4p13a10: '98',
                                 vppc4p13a11: '98',
                                 vppc4p13a12: '98',
                                 vppc4p13a13: '98',
                                 vppc4p13a14: '98',
                                 vppc4p13a15: '98',
                                 vppc4p13a16: '98',
                                 vppc4p13a17: '98',
                                 vppc4p13a18: '98'
                                 },    
                          dataType: "html",
                          success : function(obj)
                          {
                          }
                         });
        }
         else 
        if($('#valorppc4p1').val() =='ppc4p1o1' || $('#valorppc4p1').val() =='ppc4p1o2')
    {
        $.ajax({
                          url: "../c_ppc4p1a1/fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),vidintegrante : $('#idintegrante').val(), vvalorppc4p1a1 :'98'},    
                          dataType: "html",
                          success : function(){
                          }
                      });
        $.ajax({
                          url: "../c_ppc4p2/fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),
                                 vidintegrante : $('#idintegrante').val(),
                                 vvalorppc4p2 :'98'},    
                          dataType: "html",
                          success : function(obj)
                          {
                         //location.href = "../c_c9p/fc_c8p7?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
                          }
                         });
        $.ajax({
                          url: "../c_ppc4p3/fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),vidintegrante : $('#idintegrante').val(), vvalorppc4p3 :'98'},    
                          dataType: "html",
                          success : function(obj)
                          {
                         //location.href = "../c_c9p/fc_c8p7?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
                          }
                         });
                         $.ajax({
                          url: "../c_ppc4p3a/fc_actualizar",
                          type: "GET",
                          data: { vfolio : $('#folio').val(),
                                  vidintegrante : $('#idintegrante').val(),
                                  vppc4p3a1 : '98',          
                                  vppc4p3a2 : '98',
                                  vppc4p3a3 : '98',
                                  vppc4p3a4 : '98',
                                  vppc4p3a5 : '98'
                                  },    
                          dataType: "html",
                          success : function(obj)
                          {
//                         location.href = "../c_c9p22/fc_c9p22?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
                          }
                         });
                         
                         $.ajax({
                          url: "../c_ppc4p4/fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),
                                 vidintegrante : $('#idintegrante').val(),
                                 vvalorppc4p4: '98'
                                 },    
                          dataType: "html",
                          success : function(obj)
                          {
                          }
                         });
                          $.ajax({
                          url: "../c_ppc4p5/fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),
                                 vidintegrante : $('#idintegrante').val(),
                                 vvalorppc4p5: '98',
                                 vppc4p5a: '98'
                                 },    
                          dataType: "html",
                          success : function(obj)
                          {
                          }
                         });
                          $.ajax({
                          url: "../c_ppc4p6/fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),
                                 vidintegrante : $('#idintegrante').val(),
                                 vvalorppc4p6: '98'
                                 },    
                          dataType: "html",
                          success : function(obj)
                          {
                          }
                         });
                          $.ajax({
                          url: "../c_ppc4p6a/fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),
                                 vidintegrante : $('#idintegrante').val(),
                                 vppc4p6a1: '98',
                                 vppc4p6a2: '98',
                                 vppc4p6a3: '98',
                                 vppc4p6a4: '98',
                                 vppc4p6a5: '98'
                                 },    
                          dataType: "html",
                          success : function(obj)
                          {
                          }
                         });
                          $.ajax({
                          url: "../c_ppc4p7/fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),
                                 vidintegrante : $('#idintegrante').val(),
                                 vvalorppc4p7: '98'
                                 },    
                          dataType: "html",
                          success : function(obj)
                          {
                          }
                         });
                         
                          $.ajax({
                          url: "../c_ppc4p8/fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),
                                 vidintegrante : $('#idintegrante').val(),
                                 vvalorppc4p8: '98'
                                 },    
                          dataType: "html",
                          success : function(obj)
                          {
                          }
                         });
                         
                          $.ajax({
                          url: "../c_ppc4p9/fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),
                                 vidintegrante : $('#idintegrante').val(),
                                 vvalorppc4p9: '98',
                                 vppc4p9cual: '98'
                                 },    
                          dataType: "html",
                          success : function(obj)
                          {
                          }
                         });
                          $.ajax({
                          url: "../c_ppc4p10/fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),
                                 vidintegrante : $('#idintegrante').val(),
                                 vvalorppc4p10: ''
                                 },    
                          dataType: "html",
                          success : function(obj)
                          {
                          }
                         });
                          $.ajax({
                          url: "../c_ppc4p11/fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),
                                 vidintegrante : $('#idintegrante').val(),
                                 vvalorppc4p11: ''
                                 },    
                          dataType: "html",
                          success : function(obj)
                          {
                          }
                         });
                          $.ajax({
                          url: "../c_ppc4p11a/fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),
                                 vidintegrante : $('#idintegrante').val(),
                                 vppc4p11a1: '',
                                 vppc4p9cual: '',
                                 vppc4p11a2: '',
                                 vppc4p11a3: '',
                                 vppc4p11a4: '',
                                 vppc4p11acual: '',
                                 vppc4p11aentidad: ''
                                 },    
                          dataType: "html",
                          success : function(obj)
                          {
                          }
                         });
                          $.ajax({
                          url: "../c_ppc4p12/fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),
                                 vidintegrante : $('#idintegrante').val(),
                                 vvalorppc4p12: '',
                                 vppc4p12a: ''
                                 },    
                          dataType: "html",
                          success : function(obj)
                          {
                          }
                         });
                           $.ajax({
                          url: "../c_ppc4p13/fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),
                                 vidintegrante : $('#idintegrante').val(),
                                 vvalorppc4p13: ''
                                 },    
                          dataType: "html",
                          success : function(obj)
                          {
                          }
                         });
                           $.ajax({
                          url: "../c_ppc4p13a/fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),
                                 vidintegrante : $('#idintegrante').val(),
                                 vppc4p13a1: '',
                                 vppc4p13a2: '',
                                 vppc4p13a3: '',
                                 vppc4p13a4: '',
                                 vppc4p13a5: '',
                                 vppc4p13a6: '',
                                 vppc4p13a7: '',
                                 vppc4p13a8: '',
                                 vppc4p13a9: '',
                                 vppc4p13a10: '',
                                 vppc4p13a11: '',
                                 vppc4p13a12: '',
                                 vppc4p13a13: '',
                                 vppc4p13a14: '',
                                 vppc4p13a15: '',
                                 vppc4p13a16: '',
                                 vppc4p13a17: '',
                                 vppc4p13a18: ''
                                 },    
                          dataType: "html",
                          success : function(obj)
                          {
                          }
                         });
    }
    else
    {
        $.ajax({
                          url: "../c_ppc4p1a1/fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),vidintegrante : $('#idintegrante').val(), vvalorppc4p1a1 :''},    
                          dataType: "html",
                          success : function(){
                          }
                      });
        $.ajax({
                          url: "../c_ppc4p2/fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),
                                 vidintegrante : $('#idintegrante').val(),
                                 vvalorppc4p2 :''},    
                          dataType: "html",
                          success : function(obj)
                          {
                         //location.href = "../c_c9p/fc_c8p7?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
                          }
                         });
        $.ajax({
                          url: "../c_ppc4p3/fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),vidintegrante : $('#idintegrante').val(), vvalorppc4p3 :''},    
                          dataType: "html",
                          success : function(obj)
                          {
                         //location.href = "../c_c9p/fc_c8p7?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
                          }
                         });
                         $.ajax({
                          url: "../c_ppc4p3a/fc_actualizar",
                          type: "GET",
                          data: { vfolio : $('#folio').val(),
                                  vidintegrante : $('#idintegrante').val(),
                                  vppc4p3a1 : '',          
                                  vppc4p3a2 : '',
                                  vppc4p3a3 : '',
                                  vppc4p3a4 : '',
                                  vppc4p3a5 : ''
                                  },    
                          dataType: "html",
                          success : function(obj)
                          {
//                         location.href = "../c_c9p22/fc_c9p22?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
                          }
                         });
                         $.ajax({
                          url: "../c_ppc4p4/fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),
                                 vidintegrante : $('#idintegrante').val(),
                                 vvalorppc4p4: ''
                                 },    
                          dataType: "html",
                          success : function(obj)
                          {
                          }
                         });
                          $.ajax({
                          url: "../c_ppc4p5/fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),
                                 vidintegrante : $('#idintegrante').val(),
                                 vvalorppc4p5: '',
                                 vppc4p5a: ''
                                 },    
                          dataType: "html",
                          success : function(obj)
                          {
                          }
                         });
                          $.ajax({
                          url: "../c_ppc4p6/fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),
                                 vidintegrante : $('#idintegrante').val(),
                                 vvalorppc4p6: ''
                                 },    
                          dataType: "html",
                          success : function(obj)
                          {
                          }
                         });
                          $.ajax({
                          url: "../c_ppc4p6a/fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),
                                 vidintegrante : $('#idintegrante').val(),
                                 vppc4p6a1: '',
                                 vppc4p6a2: '',
                                 vppc4p6a3: '',
                                 vppc4p6a4: '',
                                 vppc4p6a5: ''
                                 },    
                          dataType: "html",
                          success : function(obj)
                          {
                          }
                         });
                          $.ajax({
                          url: "../c_ppc4p7/fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),
                                 vidintegrante : $('#idintegrante').val(),
                                 vvalorppc4p7: ''
                                 },    
                          dataType: "html",
                          success : function(obj)
                          {
                          }
                         });
                          $.ajax({
                          url: "../c_ppc4p8/fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),
                                 vidintegrante : $('#idintegrante').val(),
                                 vvalorppc4p8: ''
                                 },    
                          dataType: "html",
                          success : function(obj)
                          {
                          }
                         });
                          $.ajax({
                          url: "../c_ppc4p9/fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),
                                 vidintegrante : $('#idintegrante').val(),
                                 vvalorppc4p9: '',
                                 vppc4p9cual: ''
                                 },    
                          dataType: "html",
                          success : function(obj)
                          {
                          }
                         });
                          $.ajax({
                          url: "../c_ppc4p10/fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),
                                 vidintegrante : $('#idintegrante').val(),
                                 vvalorppc4p10: '98'
                                 },    
                          dataType: "html",
                          success : function(obj)
                          {
                          }
                         });
                          $.ajax({
                          url: "../c_ppc4p11/fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),
                                 vidintegrante : $('#idintegrante').val(),
                                 vvalorppc4p11: '98'
                                 },    
                          dataType: "html",
                          success : function(obj)
                          {
                          }
                         });
                          $.ajax({
                          url: "../c_ppc4p11a/fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),
                                 vidintegrante : $('#idintegrante').val(),
                                 vppc4p11a1: '98',
                                 vppc4p9cual: '98',
                                 vppc4p11a2: '98',
                                 vppc4p11a3: '98',
                                 vppc4p11a4: '98',
                                 vppc4p11acual: '98',
                                 vppc4p11aentidad: '98'
                                 },    
                          dataType: "html",
                          success : function(obj)
                          {
                          }
                         });
                          $.ajax({
                          url: "../c_ppc4p12/fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),
                                 vidintegrante : $('#idintegrante').val(),
                                 vvalorppc4p12: '98',
                                 vppc4p12a: '98'
                                 },    
                          dataType: "html",
                          success : function(obj)
                          {
                          }
                         });
                           $.ajax({
                          url: "../c_ppc4p13/fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),
                                 vidintegrante : $('#idintegrante').val(),
                                 vvalorppc4p13: '98'
                                 },    
                          dataType: "html",
                          success : function(obj)
                          {
                          }
                         });
                           $.ajax({
                          url: "../c_ppc4p13a/fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),
                                 vidintegrante : $('#idintegrante').val(),
                                 vppc4p13a1: '98',
                                 vppc4p13a2: '98',
                                 vppc4p13a3: '98',
                                 vppc4p13a4: '98',
                                 vppc4p13a5: '98',
                                 vppc4p13a6: '98',
                                 vppc4p13a7: '98',
                                 vppc4p13a8: '98',
                                 vppc4p13a9: '98',
                                 vppc4p13a10: '98',
                                 vppc4p13a11: '98',
                                 vppc4p13a12: '98',
                                 vppc4p13a13: '98',
                                 vppc4p13a14: '98',
                                 vppc4p13a15: '98',
                                 vppc4p13a16: '98',
                                 vppc4p13a17: '98',
                                 vppc4p13a18: '98'
                                 },    
                          dataType: "html",
                          success : function(obj)
                          {
                          }
                         });
                           $.ajax({
                          url: "../c_ppc4p14/fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),
                                 vidintegrante : $('#idintegrante').val(),
                                 vppc4p14a1: '98',
                                 vppc4p14a2: '98',
                                 vppc4p14a3: '98',
                                 vppc4p14a4: '98',
                                 vppc4p14a5: '98',
                                 vppc4p14acual: '98'
                               
                                 },    
                          dataType: "html",
                          success : function(obj)
                          {
//                        location.href = "../c_ppc4p10/fc_ppc4p10?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
                          }
                         });
    }
}
</script>
</html>