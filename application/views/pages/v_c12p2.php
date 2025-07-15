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
       <input type="text" class="form-control input-sm" id="c12p2ao1" name="c12p2ao1" placeholder="" style="display:none" value="<?php echo($arrayrespuestas['ec12p2ao1']); ?>">
        <input type="text" class="form-control input-sm" id="valorp2" name="valorp2" style="display:none" value="">
        <!--fin para imprimir el idintegrante y llevarlo-->
<hr>
        <form class="form-group" name="formulario" id="formulario">

            <!--inicio radio una sola seleccion-->
            <div class="row">
            <div id="c12p2div" name="c12p2div" <?php if($arrayrespuestas['ec12p2']==''||$arrayrespuestas['ec12p2']=='98'){echo('class="form-group col-md-12 form-group-sm has-error"');}else{echo('class="form-group col-md-12 form-group-sm"');}?>>   
                <label class="control-label">2. ¿ El integrante que se encuentra en situación de discapacidad tiene certificación ( Diagnóstico de la discapacidad) por su EPS ( Saviasalud, comeva, saludtotal,saludcoop,SURA, etc) u otra entidad avalada para ello?
                    <button type="button" id="vayuda" name="vayuda" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModal">
                        <span class="glyphicon glyphicon-question-sign" aria-hidden="true"></span> Ayuda
                    </button>
                </label>
                <div class="radio">
                    <label><!--en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="c12p2" id="c12p2" onclick="colocaropcion('1','valorc12p2','c12p2div');" value="1" <?php if($arrayrespuestas['ec12p2']=='1'){echo('checked');}?>>
                        Si
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="c12p2" id="c12p2" onclick="colocaropcion('2','valorc12p2','c12p2div');" value="2" <?php if($arrayrespuestas['ec12p2']=='2'){echo('checked');}?>>
                        No
                    </label>             
                </div>               
                <input type="text" class="form-control" id="valorc12p2" name="valorc12p2" style="display:none" placeholder="Text input" value="<?php echo($arrayrespuestas['ec12p2']); ?>">
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
            <?php if($arrayrespuestas['ec12p2']=="")
            {
                echo($botonerag);
            }
            else if($arrayrespuestas['ec12p2']=="1")
            {
                echo($botoneraadisable);
            }
            else
            {
                echo($botoneraa);
            }    
            ?>   
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
                          vvalorc12p2 : $('#valorc12p2').val()},  
                          dataType: "html",
                          success : function(obj){
                          $('#siguiente').prop('disabled', true);    
                          saltoc12p2();    
                          botonguardar();
                          $.ajax({
                          url: "fc_traerp2",
                          type: "GET",
                          data: {vidintegrante : $('#idintegrante').val()},
                          dataType: "json",
                          success : function(obj){ 
                         // alert('JUAN' + obj.ec12p2ao1);
                         $('#valorp2').val(obj.ec12p2ao1);
                          }
                          });
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
                          vvalorc12p2 : $('#valorc12p2').val()},
                          dataType: "html",
                          success : function(obj){
                          $('#siguiente').prop('disabled', true);    
                          saltoc12p2();
                          botonguardar();
                          $.ajax({
                          url: "fc_traerp2",
                          type: "GET",
                          data: {vidintegrante : $('#idintegrante').val()},
                          dataType: "json",
                          success : function(obj){ 
                        //  alert('JUAN' + obj.ec12p2ao1);
                         $('#valorp2').val(obj.ec12p2ao1);
                          }
                          });
                          }
                        });                    
        });
        $("#siguiente").click(function ()
        {
         if($('#valorc12p2').val() == '2')
         {
          location.href = "../c_capitulosintegrante/fc_capitulosintegrante?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                       
         }
         else if ($('#valorc12p2').val() == '1')
         {
          location.href = "../c_c12p2ao1/fc_c12p2ao1?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
         }
         botonsiguiente();
         });
        $("#anterior").click(function ()
        {
         botonanterior();
        location.href = "../c_c12p1/fc_c12p1?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
        });

//para cargar variables capitulo, pregunta,encuestador,vivienda,barra



cargardatosgenerales('<?php echo($arraydatosgenerales['ecapitulo']); ?>','Pregunta 2 de 4','<?php echo($arraydatosgenerales['enomcoges']); ?>','<?php echo($arraydatosgenerales['enombreintegrante']." "." - "." "."Sexo:"." ".$arraydatosgenerales['esexointegrante']."   "."  -  "."   "."Edad:"."   ".$arraydatosgenerales['eedadintegrante']); ?>','40');
//control del boton ayuda
botonayuda();
function saltoc12p2()
{
if($('#valorc12p2').val() == '2')
           {              $.ajax({
                          url: "../c_c12p2ao1/fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),
                          vidintegrante : $('#idintegrante').val(),
                          vvalorc12p2ao1 : '98'},    
                          dataType: "html",
                          success : function(obj)
                          {
                          $('#capitulos').prop('disabled', false);   
                          //location.href = "../c_c10p5/fc_c10p5?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
                          }
                          });
                          $.ajax({
                          url: "../c_c12p2ao1a/fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),
                          vidintegrante : $('#idintegrante').val(),
                          vvalorc12p2ao1a : '98',    
                          vc12p2ao1acual : '98'},
                          dataType: "html",
                          success : function(obj)
                          {
                          //location.href = "../c_c10p5/fc_c10p5?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
                          }
                           });
                          $.ajax({
                          url: "../c_c12p2ao2/fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),
                          vidintegrante : $('#idintegrante').val(),
                          vvalorc12p2ao2 : '98'},    
                          dataType: "html",
                          success : function(obj)
                          {
                          //location.href = "../c_c10p5/fc_c10p5?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
                          }
                           });
                           $.ajax({
                          url: "../c_c12p2ao2b/fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),
                          vidintegrante : $('#idintegrante').val(),
                          vvalorc12p2ao2b : '98'},
                          dataType: "html",
                          success : function(obj){                      
                          }
                        }); 
                           $.ajax({
                          url: "../c_c12p2ao3/fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),
                          vidintegrante : $('#idintegrante').val(),
                          vvalorc12p2ao3 : '98'},    
                          dataType: "html",
                          success : function(obj)
                          {
                          //location.href = "../c_c10p5/fc_c10p5?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
                          }
                           });
                          $.ajax({
                          url: "../c_c12p2ao3a/fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),
                          vidintegrante : $('#idintegrante').val(),
                          vvalorc12p2ao3a : '98',    
                          vc12p2ao3acual : '98'},
                          dataType: "html",
                          success : function(obj)
                          {
                          //location.href = "../c_c10p5/fc_c10p5?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
                          }
                           });
                          $.ajax({
                          url: "../c_c12p2ao4/fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),
                          vidintegrante : $('#idintegrante').val(),
                          vvalorc12p2ao4 : '98'},                      
                          dataType: "html",
                          success : function(obj)
                          {
                          //location.href = "../c_c10p5/fc_c10p5?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
                          }
                           });
                           $.ajax({
                          url: "../c_c12p2ao4a/fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),
                          vidintegrante : $('#idintegrante').val(),
                          vvalorc12p2ao4a : '98',    
                          vc12p2ao4acual : '98'},
                          dataType: "html",
                          success : function(obj)
                          {
                          //location.href = "../c_c10p5/fc_c10p5?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
                          }
                           });
                            $.ajax({
                          url: "../c_c12p3/fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),
                          vidintegrante : $('#idintegrante').val(),
                          vvalorc12p3 : '98',
                          vc12p3cual : '98'},  
                          dataType: "html",
                          success : function(obj)
                          {
                          //location.href = "../c_c10p5/fc_c10p5?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
                          }
                           });
                             $.ajax({
                          url: "../c_c12p4/fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),
                          vidintegrante : $('#idintegrante').val(),
                          vvalorc12p4 : '98',
                          vc12p4cual : '98'}, 
                          dataType: "html",
                          success : function(obj)
                          {
         //                 location.href = "../c_capitulosintegrante/fc_capitulosintegrante?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
                          }
                           });
                    }
                     else if ($('#valorc12p2').val() == '1' && $('#c12p2ao1').val() == '98' || ($('#valorc12p2').val() == '1' && $('#valorp2').val() == '98'))
                     {   
                         //alert('okkkkk');
                          $.ajax({
                          url: "../c_c12p2ao1/fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),
                          vidintegrante : $('#idintegrante').val(),
                          vvalorc12p2ao1 : ''},    
                          dataType: "html",
                          success : function(obj)
                          {
                           $('#capitulos').prop('disabled', true);   
                          //location.href = "../c_c10p5/fc_c10p5?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
                          }
                          });
                          $.ajax({
                          url: "../c_c12p2ao1a/fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),
                          vidintegrante : $('#idintegrante').val(),
                          vvalorc12p2ao1a : '',    
                          vc12p2ao1acual : ''},
                          dataType: "html",
                          success : function(obj)
                          {
                          //location.href = "../c_c10p5/fc_c10p5?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
                          }
                           });
                          $.ajax({
                          url: "../c_c12p2ao2/fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),
                          vidintegrante : $('#idintegrante').val(),
                          vvalorc12p2ao2 : ''},    
                          dataType: "html",
                          success : function(obj)
                          {
                          //location.href = "../c_c10p5/fc_c10p5?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
                          }
                           });
                           $.ajax({
                          url: "../c_c12p2ao2b/fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),
                          vidintegrante : $('#idintegrante').val(),
                          vvalorc12p2ao2b : ''},
                          dataType: "html",
                          success : function(obj){                      
                          }
                        });
                           $.ajax({
                          url: "../c_c12p2ao3/fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),
                          vidintegrante : $('#idintegrante').val(),
                          vvalorc12p2ao3 : ''},    
                          dataType: "html",
                          success : function(obj)
                          {
                          //location.href = "../c_c10p5/fc_c10p5?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
                          }
                           });
                          $.ajax({
                          url: "../c_c12p2ao3a/fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),
                          vidintegrante : $('#idintegrante').val(),
                          vvalorc12p2ao3a : '',    
                          vc12p2ao3acual : ''},
                          dataType: "html",
                          success : function(obj)
                          {
                          //location.href = "../c_c10p5/fc_c10p5?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
                          }
                           });
                          $.ajax({
                          url: "../c_c12p2ao4/fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),
                          vidintegrante : $('#idintegrante').val(),
                          vvalorc12p2ao4 : ''},                      
                          dataType: "html",
                          success : function(obj)
                          {
                          //location.href = "../c_c10p5/fc_c10p5?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
                          }
                           });
                           $.ajax({
                          url: "../c_c12p2ao4a/fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),
                          vidintegrante : $('#idintegrante').val(),
                          vvalorc12p2ao4a : '',    
                          vc12p2ao4acual : ''},
                          dataType: "html",
                          success : function(obj)
                          {
                          //location.href = "../c_c10p5/fc_c10p5?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
                          }
                           });
                            $.ajax({
                          url: "../c_c12p3/fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),
                          vidintegrante : $('#idintegrante').val(),
                          vvalorc12p3 : '',
                          vc12p3cual : ''},  
                          dataType: "html",
                          success : function(obj)
                          {
                          //location.href = "../c_c10p5/fc_c10p5?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
                          }
                           });
                             $.ajax({
                          url: "../c_c12p4/fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),
                          vidintegrante : $('#idintegrante').val(),
                          vvalorc12p4 : '',
                          vc12p4cual : ''}, 
                          dataType: "html",
                          success : function(obj)
                          {
                     //     location.href = "../c_c12p2ao1/fc_c12p2ao1?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                 
                          }
                           });  
                  }
             else
                 {
                     $('#capitulos').prop('disabled', true);
            //         location.href = "../c_c12p2ao1/fc_c12p2ao1?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
                 }
                
    }
});

</script>
</html>