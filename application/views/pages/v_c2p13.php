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
        <input type="text" class="form-control input-sm" id="c2p13ao1" name="c2p13ao1" style="display:none"  placeholder="" value="<?php echo($arrayrespuestas['ec2p13ao1']); ?>">
        <input type="text" class="form-control input-sm" id="c2p1" name="c2p1" style="display:none" value="<?php echo($arrayrespuestas['ec2p1']); ?>">
        <!--fin para imprimir el folio y llevarlo-->
<hr>
        <form class="form-group" name="formulario" id="formulario">

            <!--inicio radio una sola seleccion-->
            <div class="row">
            <div id="c2p13div" name="c2p13div" <?php if($arrayrespuestas['ec2p13']==''){echo('class="form-group col-md-12 form-group-sm has-error"');}else{echo('class="form-group col-md-12 form-group-sm"');}?>>   
                <label class="control-label">13.  Separan los residuos orgánicos de los inorgánicos  (Unica respuesta)
                    <button type="button" id="vayuda" name="vayuda" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModal">
                        <span class="glyphicon glyphicon-question-sign" aria-hidden="true"></span> Ayuda
                    </button>
                </label>
                <div class="radio">
                    <label><!--en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="c2p13" id="c2p13" onclick="colocaropcion('1','valorc2p13','c2p13div');" value="1" <?php if($arrayrespuestas['ec2p13']=='1'){echo('checked');}?>>
                        Si
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="c2p13" id="c2p13" onclick="colocaropcion('2','valorc2p13','c2p13div');" value="2" <?php if($arrayrespuestas['ec2p13']=='2'){echo('checked');}?>>
                        No
                    </label>             
                </div> 
               
                
                <input type="text" class="form-control" id="valorc2p13" name="valorc2p13" style="display:none" placeholder="Text input" value="<?php echo($arrayrespuestas['ec2p13']); ?>">
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
            <?php if($arrayrespuestas['ec2p13']=="")
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
                          data: {vfolio : $('#folio').val(), vvalorc2p13 : $('#valorc2p13').val()},    
                          dataType: "html",
                          success : function(obj){                      
                          botonguardar();
                          salto13();
                          }
                        });                    
        });

        
        $("#actualizar").click(function ()
        {
                        $.ajax({
                          url: "fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(), vvalorc2p13 : $('#valorc2p13').val()},    
                          dataType: "html",
                          success : function(obj){                      
                          botonactualizar();
                          salto13();
                          }
                        });                   
        });
        

        $("#siguiente").click(function ()
        {
           if($('#valorc2p13').val() === '2')
         {
         location.href = "../c_c2p14/fc_c2p14?folio=" + $('#folio').val();                     
            }
            else
            {
         
          location.href = "../c_c2p13a/fc_c2p13a?folio=" + $('#folio').val();                     
         
            } 
        });
              
        $("#anterior").click(function ()
        {
             if($('#c2p1').val() === 'c2p1o3'||$('#c2p1').val() === 'c2p1o4')
         {
         location.href = "../c_c2p10/fc_c2p10?folio=" + $('#folio').val();                    
            }
            else
            {
         
          location.href = "../c_c2p13a/fc_c2p13a?folio=" + $('#folio').val();                     
         
            } 
        });

//para cargar variables capitulo, pregunta,encuestador,vivienda,barra
cargardatosgenerales('<?php echo($arraydatosgenerales['ecapitulo']); ?>','Pregunta 13 de 16','<?php echo($arraydatosgenerales['enomcoges']); ?>','<?php echo($arraydatosgenerales['etitular']); ?>','75');
//control del boton ayuda
botonayuda();

});
function salto13()
{
     if($('#valorc2p13').val() === '2')
             {                  $.ajax({
                          url: "../c_c2p13a/fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),                              
                          vc2p13ao1 : '98',
                          vc2p13ao2 : '98',
                          vc2p13ao3 : '98',
                          vc2p13ao4 : '98',
                          vc2p13ao5 : '98',
                          vc2p13acual : '98'},
                          dataType: "html",
                          success : function(obj)
                          {
                         //location.href = "../c_c8p7/fc_c8p7?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
                          }
                         });
                         
                         $.ajax({
                          url: "../c_c2p13b/fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),                              
                          vc2p13bo1 : '98',
                          vc2p13bo2 : '98',
                          vc2p13bo3 : '98',
                          vc2p13bo4 : '98',
                          vc2p13bcual : '98'},
                          dataType: "html",
                          success : function(obj)
                          {
                        // location.href = "../c_c2p14/fc_c2p14?folio=" + $('#folio').val();                     
                          }
                         });

              }
              
           else if (($('#valorc2p13').val() === '1' && $('#c2p13ao1').val() === '98'))
              {               
                          $.ajax({
                          url: "../c_c2p13a/fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),                              
                          vc2p13ao1 : '',
                          vc2p13ao2 : '',
                          vc2p13ao3 : '',
                          vc2p13ao4 : '',
                          vc2p13ao5 : '',
                          vc2p13acual : ''},
                          dataType: "html",
                          success : function(obj)
                          {
                         //location.href = "../c_c8p7/fc_c8p7?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
                          }
                         });
                         
                         $.ajax({
                          url: "../c_c2p13b/fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),                              
                          vc2p13bo1 : '',
                          vc2p13bo2 : '',
                          vc2p13bo3 : '',
                          vc2p13bo4 : '',
                          vc2p13bcual : ''},
                          dataType: "html",
                          success : function(obj)
                          {
                        // location.href = "../c_c2p13a/fc_c2p13a?folio=" + $('#folio').val();                     
                          }
                         });
                         }    

              else
               {
                //   location.href = "../c_c2p13a/fc_c2p13a?folio=" + $('#folio').val();                   
               }
            
}

</script>
</html>