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
         <input type="text" class="form-control input-sm" id="valorppc4p1" name="valorppc4p1"  style="display:none"     placeholder="" value="<?php echo($arrayrespuestas['eppc4p1']); ?>">
       
        <!--fin para imprimir el idintegrante y llevarlo-->
<hr>
        <form class="form-group" name="formulario" id="formulario">

            <!--inicio radio una sola seleccion-->
            <div class="row">
            <div id="ppc4p9div" name="ppc4p9div" <?php if($arrayrespuestas['eppc4p9']==''){echo('class="form-group col-md-12 form-group-sm has-error"');}else{echo('class="form-group col-md-12 form-group-sm"');}?>>   
                <label class="control-label">9 SU NEGOCIO FUNCIONA EN:
                    <button type="button" id="vayuda" name="vayuda" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModal">
                        <span class="glyphicon glyphicon-question-sign" aria-hidden="true"></span> Ayuda
                    </button>
                </label>
                <div class="radio">
                    <label><!--en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="ppc4p9" id="ppc4p9" onclick="colocaropcion('ppc4p9o1','valorppc4p9','ppc4p9div'),(mostrarcual());" value="ppc4p9o1" <?php if($arrayrespuestas['eppc4p9']=='ppc4p9o1'){echo('checked');}?>>
                        A.SU CASA
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="ppc4p9" id="ppc4p9" onclick="colocaropcion('ppc4p9o2','valorppc4p9','ppc4p9div'),(mostrarcual());" value="ppc4p9o2" <?php if($arrayrespuestas['eppc4p9']=='ppc4p9o2'){echo('checked');}?>>
                        B.EN LOCAL O LOTE  PROPIO
                    </label>             
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="ppc4p9" id="ppc4p9" onclick="colocaropcion('ppc4p9o3','valorppc4p9','ppc4p9div'),(mostrarcual());" value="ppc4p9o3" <?php if($arrayrespuestas['eppc4p9']=='ppc4p9o3'){echo('checked');}?>>
                        C.EN LOCAL O LOTE ARRENDADO 
                    </label>             
                </div> 
                <div class="radio">
                    <label>
                        <input type="radio" name="ppc4p9" id="ppc4p9" onclick="colocaropcion('ppc4p9o4','valorppc4p9','ppc4p9div'),(mostrarcual());" value="ppc4p9o4" <?php if($arrayrespuestas['eppc4p9']=='ppc4p9o4'){echo('checked');}?>>
                        D.EN ESPACIO PÚBLICO (En la Calle)
                    </label>             
                </div> 
                
                <div class="radio">
                    <label>
                        <input type="radio" name="ppc4p9" id="ppc4p9" onclick="colocaropcion('ppc4p9o5','valorppc4p9','ppc4p9div'),(mostrarcual());" value="ppc4p9o5" <?php if($arrayrespuestas['eppc4p9']=='ppc4p9o5'){echo('checked');}?>>
                        E.OTRO
                    </label>             
                </div> 
                
                <input type="text" class="form-control" id="valorppc4p9" name="valorppc4p9" style="display:none" placeholder="Text input" value="<?php echo($arrayrespuestas['eppc4p9']); ?>">
            </div>
            </div> 
            <!--fin radio una sola seleccion-->
            
            
            <div class="row">
                <div id="ppc4p9divcual" name="ppc4p9divcual" <?php if($arrayrespuestas['eppc4p9cual'] == '' || $arrayrespuestas['eppc4p9cual'] == '0' || $arrayrespuestas['eppc4p9cual'] == '98' ){echo ('class=" form-group col-md-3 has-error " style="display: none"  ' );} else {echo('class="form-group col-md-3 "'); } ?> >
                    <label class="control-label">CUÁL?</label>
                      <input type="text" class="form-control text-uppercase" id="ppc4p9cual" onkeypress="return soloLetras(event)" onchange="validarbolitasytexto('ppc4p9divcual','ppc4p9cual')"  name="ppc4p9cual"   placeholder="Cuál?" value="<?php echo  ($arrayrespuestas['eppc4p9cual']) ?>">

                </div>
            </div>
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
            <?php if($arrayrespuestas['eppc4p9']=="")
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
                          data: {vfolio : $('#folio').val(),
                                vidintegrante : $('#idintegrante').val(),
                                vvalorppc4p9 : $('#valorppc4p9').val(),
                                vppc4p9cual : $('#ppc4p9cual').val()},    
                          dataType: "html",
                          success : function(obj){ 
                          $('#siguiente').prop('disabled', true);            
                          saltarppc4p9();
                          botonguardar();
                      //    location.reload();
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
                          data: {vfolio : $('#folio').val(),
                                vidintegrante : $('#idintegrante').val(),
                                vvalorppc4p9 : $('#valorppc4p9').val(),
                                vppc4p9cual : $('#ppc4p9cual').val()},    
                          dataType: "html",
                          success : function(obj){  
                          $('#siguiente').prop('disabled', true);                
                          saltarppc4p9();
                          botonguardar();
                    //      location.reload();
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
         
         if($('#valorppc4p1').val() =='ppc4p1o3')
         {
       location.href = "../c_ppcapitulosintegrante/fc_ppcapitulosintegrante?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";
         }
         else
         {
             location.href = "../c_ppc4p10/fc_ppc4p10?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +""; 
         }
          
        });
              
        $("#anterior").click(function ()
        {
         botonanterior();
//         location.href = "../c_c9p30/fc_c9p30?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";     
        //location.href = "../c_capitulosintegrantes/fc_capitulosintegrantes?idintegrante=" + $('#idintegrante').val()+ "&idintegrante="+"&idintegrante=0"; 
        location.href = "../c_ppc4p8/fc_ppc4p8?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +""; 
        });

//para cargar variables capitulo, pregunta,encuestador,vivienda,barra

cargardatosgenerales('<?php echo($arraydatosgenerales['ecapitulo']); ?>','Pregunta 9 de 13','<?php echo($arraydatosgenerales['enomcoges']); ?>','<?php echo($arraydatosgenerales['enombreintegrante']." "." - "." "."Sexo:"." ".$arraydatosgenerales['esexointegrante']."   "."  -  "."   "."Edad:"."   ".$arraydatosgenerales['eedadintegrante']); ?>','55');
//control del boton ayuda
botonayuda();

});

function mostrarcual()
{
if ($('#valorppc4p9').val() === 'ppc4p9o5' )
{
    $('#ppc4p9divcual').show(1000);
    $('#ppc4p9divcual').addClass('has-error');
    $('#ppc4p9cual').val('');
    
}
else
{
     $('#ppc4p9divcual').hide(1000);
     $('#ppc4p9divcual').removeClass('has-error');
     $('#ppc4p9cual').val('98');
     
}

validarguardar(); 
}

function saltarppc4p9()
{
 if($('#valorppc4p1').val() == 'ppc4p1o3' && $('#valorppc4p9').val() !== '') 
 {
     
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
 {
     
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
 
}

</script>
</html>