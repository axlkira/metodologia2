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
         <input type="text" class="form-control" id="valorc9p32" name="valorc9p32" style="display:none" placeholder="Text input" value="<?php echo($arrayrespuestas['ec9p32']); ?>">
         <input type="text" class="form-control" id="valorc9p34" name="valorc9p34" style="display:none" placeholder="Text input" value="<?php echo($arrayrespuestas['ec9p34']); ?>">
        <!--fin para imprimir el idintegrante y llevarlo-->
<hr>
        <form class="form-group" name="formulario" id="formulario">

            <!--inicio radio una sola seleccion-->
            <div class="row">
            <div id="c9p31div" name="c9p31div" <?php if($arrayrespuestas['ec9p31']==''){echo('class="form-group col-md-12 form-group-sm has-error"');}else{echo('class="form-group col-md-12 form-group-sm"');}?>>   
                <label class="control-label">2.Actualmente tiene:
                    <button type="button" id="vayuda" name="vayuda" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModal">
                        <span class="glyphicon glyphicon-question-sign" aria-hidden="true"></span> Ayuda
                    </button>
                </label>
                <div class="radio">
                    <label><!--en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="c9p31" id="c9p31" onclick="colocaropcion('c9p31o1','valorc9p31','c9p31div');" value="c9p31o1" <?php if($arrayrespuestas['ec9p31']=='c9p31o1'){echo('checked');}?>>
                        Idea de Negocio
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="c9p31" id="c9p31" onclick="colocaropcion('c9p31o2','valorc9p31','c9p31div');" value="c9p31o2" <?php if($arrayrespuestas['ec9p31']=='c9p31o2'){echo('checked');}?>>
                        Proyecto de negocio funcionando
                    </label>             
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="c9p31" id="c9p31" onclick="colocaropcion('c9p31o3','valorc9p31','c9p31div');" value="c9p31o3" <?php if($arrayrespuestas['ec9p31']=='c9p31o3'){echo('checked');}?>>
                        Negocio funcionando
                    </label>             
                </div> 
                <div class="radio">
                    <label>
                        <input type="radio" name="c9p31" id="c9p31" onclick="colocaropcion('c9p31o4','valorc9p31','c9p31div');" value="c9p31o4" <?php if($arrayrespuestas['ec9p31']=='c9p31o4'){echo('checked');}?>>
                        Niguna de las anteriores
                    </label>             
                </div> 
                
                <input type="text" class="form-control" id="valorc9p31" name="valorc9p31" style="display:none" placeholder="Text input" value="<?php echo($arrayrespuestas['ec9p31']); ?>">
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
            <?php if($arrayrespuestas['ec9p31']=="")
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
                          data: {vfolio : $('#folio').val(),vidintegrante : $('#idintegrante').val(), vvalorc9p31 : $('#valorc9p31').val()},    
                          dataType: "html",
                          success : function(obj){                      
                          botonguardar();
                          saltarc9p31();
                          }
                        });                    
        });

        
        $("#actualizar").click(function ()
        {
                        $.ajax({
                          url: "fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),vidintegrante : $('#idintegrante').val(), vvalorc9p31 : $('#valorc9p31').val()},    
                          dataType: "html",
                          success : function(obj){                      
                          botonguardar();
                          saltarc9p31();
                          }
                        });                    
        });
        

        $("#siguiente").click(function ()
        {
         botonsiguiente();
         if($('#valorc9p31').val() === 'c9p31o1' || $('#valorc9p31').val() === 'c9p31o2' )
         {
                           
         location.href = "../c_c9p34/fc_c9p34?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                     
         }    
         else if($('#valorc9p31').val() === 'c9p31o4')
         {
             location.href = "../c_capitulosintegrante/fc_capitulosintegrante?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";
         }
         else
         {
             location.href = "../c_c9p32/fc_c9p32?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +""; 
         }

        });
              
        $("#anterior").click(function ()
        {
         botonanterior();
         location.href = "../c_c9p30/fc_c9p30?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";     
        //location.href = "../c_capitulosintegrantes/fc_capitulosintegrantes?idintegrante=" + $('#idintegrante').val()+ "&idintegrante="+"&idintegrante=0";                    
        });

//para cargar variables capitulo, pregunta,encuestador,vivienda,barra



cargardatosgenerales('<?php echo($arraydatosgenerales['ecapitulo']); ?>','Pregunta 2 de 6','<?php echo($arraydatosgenerales['enomcoges']); ?>','<?php echo($arraydatosgenerales['enombreintegrante']." "." - "." "."Sexo:"." ".$arraydatosgenerales['esexointegrante']."   "."  -  "."   "."Edad:"."   ".$arraydatosgenerales['eedadintegrante']); ?>','34');
//control del boton ayuda
botonayuda();

});


function saltarc9p31()
{
if($('#valorc9p31').val() === 'c9p31o1' || $('#valorc9p31').val() === 'c9p31o2' )
         {                
                         
                         
                         $.ajax({
                          url: "../c_c9p32/fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),
                          vidintegrante : $('#idintegrante').val(),    
                          vvalorc9p32 : '98',
                          vvalorc9p32cual : '98'},
                          dataType: "html",
                          success : function(obj)
                          {
                         //location.href = "../c_c9p/fc_c8p7?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
                          }
                         });
                         
                         $.ajax({
                          url: "../c_c9p33/fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),
                          vidintegrante : $('#idintegrante').val(),    
                          vvalorc9p33 : '98'},
                          dataType: "html",
                          success : function(obj)
                          {
                         //location.href = "../c_c9p7/fc_c9p7?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
                          }
                         });  
                         
                          if(($('#valorc9p31').val() === 'c9p31o1' || $('#valorc9p31').val() === 'c9p31o2') && ($('#valorc9p34').val() === '98') )
                         {
                             $.ajax({
                          url: "../c_c9p34/fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),
                          vidintegrante : $('#idintegrante').val(),    
                          vvalorc9p34 : ''},
                          dataType: "html",
                          success : function(obj)
                          {
                         //location.href = "../c_c9p7/fc_c9p7?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
                          }
                         });
                         }
                            
        }
        
         else if   ($('#valorc9p31').val()==='c9p31o3' && $('#valorc9p32').val()==='98') 
         {               
                          
                         
                         $.ajax({
                          url: "../c_c9p32/fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),
                          vidintegrante : $('#idintegrante').val(),    
                          vvalorc9p32 : '',
                          vvalorc9p32cual : ''},
                          dataType: "html",
                          success : function(obj)
                          {
                         //location.href = "../c_c9p/fc_c8p7?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
                          }
                         });
                         
                         $.ajax({
                          url: "../c_c9p33/fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),
                          vidintegrante : $('#idintegrante').val(),    
                          vvalorc9p33 : ''},
                          dataType: "html",
                          success : function(obj)
                          {
                         //location.href = "../c_c9p7/fc_c9p7?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
                          }
                         });
                         
                         $.ajax({
                          url: "../c_c9p34/fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),
                          vidintegrante : $('#idintegrante').val(),    
                          vvalorc9p34 : ''},
                          dataType: "html",
                          success : function(obj)
                          {
                         //location.href = "../c_c9p7/fc_c9p7?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
                          }
                         });
                                    
                         }
                         
        else if($('#valorc9p31').val() === 'c9p31o4')
               {
                // location.href = "../c_c9p4/fc_c9p4?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
                
                         $.ajax({
                          url: "../c_c9p32/fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),
                          vidintegrante : $('#idintegrante').val(),    
                          vvalorc9p32 : '98',
                          vvalorc9p32cual : '98'},
                          dataType: "html",
                          success : function(obj)
                          {
                         //location.href = "../c_c9p/fc_c8p7?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
                          }
                         });
                         
                         $.ajax({
                          url: "../c_c9p33/fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),
                          vidintegrante : $('#idintegrante').val(),    
                          vvalorc9p33 : '98'},
                          dataType: "html",
                          success : function(obj)
                          {
                         //location.href = "../c_c9p7/fc_c9p7?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
                          }
                         });
                         
                          $.ajax({
                          url: "../c_c9p34/fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),
                          vidintegrante : $('#idintegrante').val(),    
                          vvalorc9p34 : '98'},
                          dataType: "html",
                          success : function(obj)
                          {
                         //location.href = "../c_c9p7/fc_c9p7?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
                          }
                         });
                         
                          $.ajax({
                          url: "../c_c9p35/fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),
                          vidintegrante : $('#idintegrante').val(),    
                          vc9p35o1 : '98',
                          vc9p35o2 : '98',
                          vc9p35o3 : '98',
                          vc9p35o4 : '98',
                          vc9p35o5 : '98',
                          vc9p35o6 : '98',
                          vc9p35o7 : '98',
                          vc9p35o7cual : '98'},
                          dataType: "html",
                          success : function(obj)
                          {
                         //location.href = "../c_c9p7/fc_c9p7?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
                          }
                         });
                         
                          $.ajax({
                          url: "../c_c9p36/fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),
                          vidintegrante : $('#idintegrante').val(),    
                          vc9p36o1 : '98',
                          vc9p36o2 : '98',
                          vc9p36o3 : '98',
                          vc9p36o4 : '98',
                          vc9p36o5 : '98',
                          vc9p36o6 :'98',
                          vc9p36o7 : '98',
                          vc9p36o8 : '98'},
                          dataType: "html",
                          success : function(obj)
                          {
                         //location.href = "../c_c9p7/fc_c9p7?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
                          }
                         });
                         
                     }
                     else if ($('#valorc9p31').val() === 'c9p31o4' && $('#valorc9p34').val() === '98' )
                     {
                         $.ajax({
                          url: "../c_c9p32/fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),
                          vidintegrante : $('#idintegrante').val(),    
                          vvalorc9p32 : '',
                          vvalorc9p32cual : ''},
                          dataType: "html",
                          success : function(obj)
                          {
                         //location.href = "../c_c9p/fc_c8p7?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
                          }
                         });
                         
                         $.ajax({
                          url: "../c_c9p33/fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),
                          vidintegrante : $('#idintegrante').val(),    
                          vvalorc9p33 : ''},
                          dataType: "html",
                          success : function(obj)
                          {
                         //location.href = "../c_c9p7/fc_c9p7?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
                          }
                         });
                         
                          $.ajax({
                          url: "../c_c9p34/fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),
                          vidintegrante : $('#idintegrante').val(),    
                          vvalorc9p34 : ''},
                          dataType: "html",
                          success : function(obj)
                          {
                         //location.href = "../c_c9p7/fc_c9p7?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
                          }
                         });
                         
                          $.ajax({
                          url: "../c_c9p35/fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),
                          vidintegrante : $('#idintegrante').val(),    
                          vc9p35o1 : '',
                          vc9p35o2 : '',
                          vc9p35o3 : '',
                          vc9p35o4 : '',
                          vc9p35o5 : '',
                          vc9p35o6 : '',
                          vc9p35o7 : '',
                          vc9p35o7cual : ''},
                          dataType: "html",
                          success : function(obj)
                          {
                         //location.href = "../c_c9p7/fc_c9p7?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
                          }
                         });
                         
                          $.ajax({
                          url: "../c_c9p36/fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),
                          vidintegrante : $('#idintegrante').val(),    
                          vc9p36o1 : '',
                          vc9p36o2 : '',
                          vc9p36o3 : '',
                          vc9p36o4 : '',
                          vc9p36o5 : '',
                          vc9p36o6 :'',
                          vc9p36o7 : '',
                          vc9p36o8 : ''},
                          dataType: "html",
                          success : function(obj)
                          {
                         //location.href = "../c_c9p7/fc_c9p7?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
                          }
                         });
                         
                     }
                 }

</script>
</html>