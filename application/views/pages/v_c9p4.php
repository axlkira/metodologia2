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
        <input type="text" class="form-control input-sm" id="c9p3" name="c9p3"  style="display:none"  placeholder="" value="<?php echo($arrayrespuestas['ec9p3']); ?>">
        <input type="text" class="form-control input-sm" id="c9p5" name="c9p5" style="display:none"   placeholder="" value="<?php echo($arrayrespuestas['ec9p5']); ?>">
        <!--fin para imprimir el idintegrante y llevarlo-->
<hr>
        <form class="form-group" name="formulario" id="formulario">

            <!--inicio radio una sola seleccion-->
            <div class="row">
            <div id="c9p4div" name="c9p4div" <?php if($arrayrespuestas['ec9p4']==''){echo('class="form-group col-md-12 form-group-sm has-error"');}else{echo('class="form-group col-md-12 form-group-sm"');}?>>   
                <label class="control-label">2. Además de lo anterior , ¿Realizó la semana pasada alguna actividad paga por una hora o más ó tuvo algún trabajo o negocio por el que recibió ingresos? (Unica Respuesta)
                    <button type="button" id="vayuda" name="vayuda" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModal">
                        <span class="glyphicon glyphicon-question-sign" aria-hidden="true"></span> Ayuda
                    </button>
                </label>
                <div class="radio">
                    <label><!--en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="c9p4" id="c9p4" onclick="colocaropcion('1','valorc9p4','c9p4div');" value="1" <?php if($arrayrespuestas['ec9p4']=='1'){echo('checked');}?>>
                        Si
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="c9p4" id="c9p4" onclick="colocaropcion('2','valorc9p4','c9p4div');" value="2" <?php if($arrayrespuestas['ec9p4']=='2'){echo('checked');}?>>
                        No
                    </label>             
                </div> 
                <input type="text" class="form-control" id="valorc9p4" name="valorc9p4" style="display:none" placeholder="Text input" value="<?php echo($arrayrespuestas['ec9p4']); ?>">
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
            <?php if($arrayrespuestas['ec9p4']=="")
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

function validarguardarc9p4()
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


function saltarc9p4()
{
    
  if($('#valorc9p4').val() === '1')
         {                
                   if($('#c9p3').val() === 'c9p3o5')   
                   {
                         $.ajax({
                          url: "../c_c9p4/fc_saltarc9p4a",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),
                          vidintegrante : $('#idintegrante').val()},
                          dataType: "html",
                          success : function(obj)
                          {
                         //location.href = "../c_c8p7/fc_c8p7?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
                          }
                         });
                   }
                   else if(($('#c9p3').val() !== 'c9p3o5') && ($('#c9p3').val() !== 'c9p3o1'))
                   {
                       
                       $.ajax({
                          url: "../c_c9p4/fc_nosaltarc9p4",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),
                          vidintegrante : $('#idintegrante').val()},
                          dataType: "html",
                          success : function(obj)
                          {
                         //location.href = "../c_c8p7/fc_c8p7?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";   
                         
                         $.ajax({
                          url: "../c_c9p5/fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),
                          vidintegrante : $('#idintegrante').val(),    
                          vvalorc9p5 : '98',vvalorc9p5cual : '98'},
                          dataType: "html",
                          success : function(obj)
                          {
                         //location.href = "../c_c9p/fc_c8p7?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";    
                         
                          }
                          
                         });
                         
                         $.ajax({
                          url: "../c_c9p6/fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),
                          vidintegrante : $('#idintegrante').val(),    
                          vvalorc9p6 : '98'},
                          dataType: "html",
                          success : function(obj)
                          {
                         //location.href = "../c_c9p7/fc_c9p7?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
                          }
                         });
                         
                          }
                         }); 
                         
                        
                         
                   }

   
        }
        else
        {
            if($('#c9p3').val() === 'c9p3o5')
            {
                 $.ajax({
                          url: "../c_c9p4/fc_saltarc9p4",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),
                          vidintegrante : $('#idintegrante').val()},
                          dataType: "html",
                          success : function(obj)
                          {
                         //location.href = "../c_c8p7/fc_c8p7?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
                          }
                         });
                         
                         $.ajax({
                          url: "../c_c9p19/fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),vidintegrante : $('#idintegrante').val(), vvalorc9p19 : '98'},
                          dataType: "html",
                          success : function(obj)
                          {
                         //location.href = "../c_c8p7/fc_c8p7?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
                          }
                         });
                         
                         
            }
            else if(($('#c9p3').val() !== 'c9p3o5') && ($('#c9p3').val() !== 'c9p3o1'))
            {
                $.ajax({
                          url: "../c_c9p4/fc_nosaltarc9p4",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),
                          vidintegrante : $('#idintegrante').val()},
                          dataType: "html",
                          success : function(obj)
                          {
                         //location.href = "../c_c8p7/fc_c8p7?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";   
                         
                          }
                         }); 
            }
            
            
            
        }
        
//         else if ($('#valorc9p4').val() === '2'  && $('#c9p3').val() === 'c9p3o5' )
//         {               
//             
//                          $.ajax({
//                          url: "../c_c9p4/fc_saltarc9p4",
//                          type: "GET",
//                          data: {vfolio : $('#folio').val(),
//                          vidintegrante : $('#idintegrante').val()},
//                          dataType: "html",
//                          success : function(obj)
//                          {
//                         //location.href = "../c_c8p7/fc_c8p7?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
//                          }
//                         });
//                         
//            }
//         else if ($('#c9p3').val() !== 'c9p3o5' && $('#c9p5').val() === '98') 
//         {           
//             
//             alert('hola');
//                     $.ajax({
//                          url: "../c_c9p4/fc_nosaltarc9p4",
//                          type: "GET",
//                          data: {vfolio : $('#folio').val(),
//                          vidintegrante : $('#idintegrante').val()},
//                          dataType: "html",
//                          success : function(obj)
//                          {
//                         //location.href = "../c_c8p7/fc_c8p7?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";   
//                         
//                          }
//                         });                      
//                         
//            }
//           
//        if (($('#c9p3').val() !== 'c9p3o5' && $('#valorc9p4').val() === '1') || ($('#c9p3').val() !== 'c9p3o1' && $('#valorc9p4').val() === '1'))
//            {
//                alert('axl');
//                
//               $.ajax({
//                          url: "../c_c9p5/fc_actualizar",
//                          type: "GET",
//                          data: {vfolio : $('#folio').val(),
//                          vidintegrante : $('#idintegrante').val(),    
//                          vvalorc9p5 : '98',vvalorc9p5cual : '98'},
//                          dataType: "html",
//                          success : function(obj)
//                          {
//                         //location.href = "../c_c9p/fc_c8p7?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";    
//                         
//                          }
//                          
//                         });
//                         
//                         $.ajax({
//                          url: "../c_c9p6/fc_actualizar",
//                          type: "GET",
//                          data: {vfolio : $('#folio').val(),
//                          vidintegrante : $('#idintegrante').val(),    
//                          vvalorc9p6 : '98'},
//                          dataType: "html",
//                          success : function(obj)
//                          {
//                         //location.href = "../c_c9p7/fc_c9p7?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
//                          }
//                         });
//                
//            }
//            else if (($('#c9p3').val() !== 'c9p3o5' && $('#valorc9p4').val() === '2' && $('#c9p5').val() === '98') 
//                    || ($('#c9p3').val() !== 'c9p3o1' && $('#valorc9p4').val() === '2' && $('#c9p5').val() === '98'))
//            {
//                $.ajax({
//                          url: "../c_c9p5/fc_actualizar",
//                          type: "GET",
//                          data: {vfolio : $('#folio').val(),
//                          vidintegrante : $('#idintegrante').val(),    
//                          vvalorc9p5 : '',vvalorc9p5cual : ''},
//                          dataType: "html",
//                          success : function(obj)
//                          {
//                         //location.href = "../c_c9p/fc_c8p7?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
//                          }
//                         });
//                         
//                         $.ajax({
//                          url: "../c_c9p6/fc_actualizar",
//                          type: "GET",
//                          data: {vfolio : $('#folio').val(),
//                          vidintegrante : $('#idintegrante').val(),    
//                          vvalorc9p6 : ''},
//                          dataType: "html",
//                          success : function(obj)
//                          {
//                         //location.href = "../c_c9p7/fc_c9p7?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
//                          }
//                         });
//            }
//            else          
//            {
//
//            }
//            
//          
           
}
    $(document).ready(function()
    {

        $("#guardar").click(function ()
        {
                        $.ajax({
                          url: "fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),vidintegrante : $('#idintegrante').val(), vvalorc9p4 : $('#valorc9p4').val()},    
                          dataType: "html",
                          success : function(obj){                      
                          botonguardar();
                          saltarc9p4();
                          
                          }
                        });                    
        });

        
        $("#actualizar").click(function ()
        {
                        $.ajax({
                          url: "fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),vidintegrante : $('#idintegrante').val(), vvalorc9p4 : $('#valorc9p4').val()},    
                          dataType: "html",
                          success : function(obj){                      
                          botonguardar();
                          saltarc9p4();
                          }
                        });                    
        });
        

        $("#siguiente").click(function ()
        {
       
         if($('#valorc9p4').val() === '1' && $('#c9p3').val() === 'c9p3o5')
         {
           location.href = "../c_c9p8/fc_c9p8?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +""; 
         }
         else if($('#valorc9p4').val() === '2' && $('#c9p3').val() === 'c9p3o5')
         {
         //botonanterior();
            location.href = "../c_c9p26/fc_c9p26?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +""; 
          } 
         else if (($('#c9p3').val() !== 'c9p3o5' && $('#valorc9p4').val() === '1') || ($('#c9p3').val() !== 'c9p3o1' && $('#valorc9p4').val() === '1'))
         {
             location.href = "../c_c9p7/fc_c9p7?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";
         }
         
          else if (($('#c9p3').val() !== 'c9p3o5' && $('#valorc9p4').val() === '2' && $('#c9p5').val() === '98') 
                    || ($('#c9p3').val() !== 'c9p3o1' && $('#valorc9p4').val() === '2' && $('#c9p5').val() === '98'))
            {
                location.href = "../c_c9p5/fc_c9p5?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";
            }
          
       else 
          {  
              location.href = "../c_c9p5/fc_c9p5?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";     
          }
       
       
        });
              
        $("#anterior").click(function ()
        {
         botonanterior();
         location.href = "../c_c9p3/fc_c9p3?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";     
        //location.href = "../c_capitulosintegrantes/fc_capitulosintegrantes?idintegrante=" + $('#idintegrante').val()+ "&idintegrante="+"&idintegrante=0";                    
        });

//para cargar variables capitulo, pregunta,encuestador,vivienda,barra



cargardatosgenerales('<?php echo($arraydatosgenerales['ecapitulo']); ?>','Pregunta 2 de 4','<?php echo($arraydatosgenerales['enomcoges']); ?>','<?php echo($arraydatosgenerales['enombreintegrante']." "." - "." "."Sexo:"." ".$arraydatosgenerales['esexointegrante']."   "."  -  "."   "."Edad:"."   ".$arraydatosgenerales['eedadintegrante']); ?>','50');
//control del boton ayuda
botonayuda();

});

</script>
</html>