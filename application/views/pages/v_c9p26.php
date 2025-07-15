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
        <input type="text" class="form-control input-sm" id="c9p21" name="c9p21" style="display:none"  placeholder="" value="<?php echo($arrayrespuestas['ec9p21']); ?>">
        <input type="text" class="form-control input-sm" id="c9p22" name="c9p22" style="display:none"  placeholder="" value="<?php echo($arrayrespuestas['ec9p22']); ?>">
        <input type="text" class="form-control input-sm" id="c9p23" name="c9p23" style="display:none"  placeholder="" value="<?php echo($arrayrespuestas['ec9p23']); ?>">
        <input type="text" class="form-control input-sm" id="c9p27o1" name="c9p27o1" style="display:none"  placeholder="" value="<?php echo($arrayrespuestas['ec9p27o1']); ?>">
        <input type="text" class="form-control input-sm" id="c9p3" name="c9p3" style="display:none"  placeholder="" value="<?php echo($arrayrespuestas['ec9p3']); ?>">
        <input type="text" class="form-control input-sm" id="c9p4" name="c9p4" style="display:none"  placeholder="" value="<?php echo($arrayrespuestas['ec9p4']); ?>">
        <input type="text" class="form-control input-sm" id="c9p9" name="c9p9" style="display:none"  placeholder="" value="<?php echo($arrayrespuestas['ec9p9']); ?>">
        <input type="text" class="form-control input-sm" id="c9p6" name="c9p6"  style="display:none"   placeholder="" value="<?php echo($arrayrespuestas['ec9p6']); ?>">
        <!--fin para imprimir el idintegrante y llevarlo-->
<hr>
        <form class="form-group" name="formulario" id="formulario">

            <!--inicio radio una sola seleccion-->
            <div class="row">
            <div id="c9p26div" name="c9p26div" <?php if($arrayrespuestas['ec9p26']==''){echo('class="form-group col-md-12 form-group-sm has-error"');}else{echo('class="form-group col-md-12 form-group-sm"');}?>>   
                <label class="control-label">1. El mes pasado, ¿recibió pagos por concepto de arriendos y/o pensiones? (Única respuesta) 
                    <button type="button" id="vayuda" name="vayuda" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModal">
                        <span class="glyphicon glyphicon-question-sign" aria-hidden="true"></span> Ayuda
                    </button>
                </label>
                <div class="radio">
                    <label><!--en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="c9p26" id="c9p26" onclick="colocaropcion('1','valorc9p26','c9p26div');" value="1" <?php if($arrayrespuestas['ec9p26']=='1'){echo('checked');}?>>
                        Si
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="c9p26" id="c9p26" onclick="colocaropcion('2','valorc9p26','c9p26div');" value="2" <?php if($arrayrespuestas['ec9p26']=='2'){echo('checked');}?>>
                        No
                    </label>             
                </div> 
                <input type="text" class="form-control" id="valorc9p26" name="valorc9p26" style="display:none" placeholder="Text input" value="<?php echo($arrayrespuestas['ec9p26']); ?>">
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
            <?php if($arrayrespuestas['ec9p26']=="")
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
                          data: {vfolio : $('#folio').val(),vidintegrante : $('#idintegrante').val(), vvalorc9p26 : $('#valorc9p26').val()},    
                          dataType: "html",
                          success : function(obj){                      
                          botonguardar();
                          salto26();
                          }
                        });                    
        });

        
        $("#actualizar").click(function ()
        {
                        $.ajax({
                          url: "fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),vidintegrante : $('#idintegrante').val(), vvalorc9p26 : $('#valorc9p26').val()},    
                          dataType: "html",
                          success : function(obj){                      
                          botonguardar();
                          salto26();
                          }
                        });                    
        });
        

        $("#siguiente").click(function ()
        {
        if($('#valorc9p26').val() === '2')
        {
        location.href = "../c_c9p28/fc_c9p28?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                         
        } 
        else
        {
         location.href = "../c_c9p27/fc_c9p27?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                     
        }                  

        });
              
        $("#anterior").click(function ()
        {
        if($('#c9p21').val() === '2')
        {
         location.href = "../c_c9p21/fc_c9p21?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                        
        }
        else if($('#c9p22').val() === 'c9p22o7'||$('#c9p22').val() === 'c9p22o6')
        {
         location.href = "../c_c9p22/fc_c9p22?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                        
        }
        else if($('#c9p23').val() !== '98')
        {
         location.href = "../c_c9p23/fc_c9p23?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                        
        }
        else if($('#c9p3').val() === 'c9p3o5' && $('#c9p4').val() === '2' )
        {
         location.href = "../c_c9p4/fc_c9p4?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                        
        }
        else if($('#c9p9').val() === '1' ||$('#c9p9').val() === '2' )
        {
         location.href = "../c_c9p9/fc_c9p9?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                        
        }
        else if($('#c9p6').val() === '2' )
        {
         location.href = "../c_c9p6/fc_c9p6?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                        
        } 
        else        
        {
        location.href = "../c_capitulosintegrante/fc_capitulosintegrante?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                             
        }
        });

//para cargar variables capitulo, pregunta,encuestador,vivienda,barra



cargardatosgenerales('<?php echo($arraydatosgenerales['ecapitulo']); ?>','Pregunta 1 de 4','<?php echo($arraydatosgenerales['enomcoges']); ?>','<?php echo($arraydatosgenerales['enombreintegrante']." "." - "." "."Sexo:"." ".$arraydatosgenerales['esexointegrante']."   "."  -  "."   "."Edad:"."   ".$arraydatosgenerales['eedadintegrante']); ?>','25');
//control del boton ayuda
botonayuda();

});
function salto26()
{
    if($('#valorc9p26').val() === '2')
         {                
             
                          $.ajax({
                          url: "../c_c9p27/fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),
                          vidintegrante : $('#idintegrante').val(),
                          vc9p27o1 :'98',vc9p27o1cuanto :'98',vc9p27o2 :'98',
                          vc9p27o2cuanto :'98',vc9p27o3 :'98',vc9p27o3cuanto :'98'},
                          dataType: "html",
                          success : function(obj)
                          {
                         location.href = "../c_c9p26/fc_c9p26?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
                          }
                         });
                         
        }
        
         else if (($('#valorc9p26').val() === '1' && $('#c9p27o1').val() === '98'))
         {               
                          
                          $.ajax({
                          url: "../c_c9p27/fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),
                          vidintegrante : $('#idintegrante').val(),
                          vc9p27o1 :'',vc9p27o1cuanto :'',vc9p27o2 :'',
                          vc9p27o2cuanto :'',vc9p27o3 :'',vc9p27o3cuanto :''},
                          dataType: "html",
                          success : function(obj)
                          {
                         location.href = "../c_c9p26/fc_c9p26?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
                          }
                         });
                         
        }
         else
               {
                 location.href = "../c_c9p26/fc_c9p26?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
               }




}
</script>
</html>