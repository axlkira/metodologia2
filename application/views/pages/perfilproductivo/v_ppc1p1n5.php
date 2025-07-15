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
<!--        <input type="text" class="form-control input-sm" id="idintegrante" name="idintegrante" style="display: none" placeholder="Text input" value="<?php echo($tdatinte['tidintegrante']); ?>">-->
<!--        <input type="text" class="form-control input-sm" id="c2p1" name="c2p1" style="display:none" value="<?php echo($arrayrespuestas['ec2p1']); ?>">-->
        <!--fin para imprimir el folio y llevarlo-->
<hr>
        <form class="form-group" name="formulario" id="formulario">

            <!--inicio radio una sola seleccion-->
            <div class="row">
            <div id="ppc1p1n5div" name="ppc1p1n5div" <?php if($arrayrespuestas['eppc1p1n5']==''){echo('class="form-group col-md-12 form-group-sm has-error"');}else{echo('class="form-group col-md-12 form-group-sm"');}?>>   
                <label class="control-label">1.5. En su vivienda posee un espacio  para realizar  actividades agrarias? 
                    <button type="button" id="vayuda" name="vayuda" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModal">
                        <span class="glyphicon glyphicon-question-sign" aria-hidden="true"></span> Ayuda
                    </button>
                </label>
                <div class="radio">
                    <label><!--en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="ppc1p1n5" id="ppc1p1n5" onclick="colocaropcion('1','valorppc1p1n5','ppc1p1n5div');" value="1" <?php if($arrayrespuestas['eppc1p1n5']=='1'){echo('checked');}?>>
                        Si
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="ppc1p1n5" id="ppc1p1n5" onclick="colocaropcion('2','valorppc1p1n5','ppc1p1n5div');" value="2" <?php if($arrayrespuestas['eppc1p1n5']=='2'){echo('checked');}?>>
                        No
                    </label>             
                </div> 
               
                
                <input type="text" class="form-control" id="valorppc1p1n5" name="valorppc1p1n5" style="display:none" placeholder="Text input" value="<?php echo($arrayrespuestas['eppc1p1n5']); ?>">
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
            <?php if($arrayrespuestas['eppc1p1n5']=="")
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
                          data: {vfolio : $('#folio').val(), vvalorppc1p1n5 : $('#valorppc1p1n5').val()},    
                          dataType: "html",
                          success : function(obj){                      
                          botonguardar();
                          saltoc1p1n5();
                          }
                        });                    
        });

        
        $("#actualizar").click(function ()
        {
                        $.ajax({
                          url: "fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(), vvalorppc1p1n5 : $('#valorppc1p1n5').val()},    
                          dataType: "html",
                          success : function(obj){                      
                          botonactualizar();
                          saltoc1p1n5();
                          }
                        });                   
        });
        

       $("#siguiente").click(function ()
        {
           if($('#valorppc1p1n5').val() === '2')
         {
             ////alert('salta a capitulo');
         location.href = "../c_ppdiligenciarintegrante/fc_ppdiligenciarintegrante?folio=" + $('#folio').val()+"&idintegrante=0";      
            }
            else
            {
         
          location.href = "../c_ppc1p1n51/fc_ppc1p1n51?folio=" + $('#folio').val()+"&idintegrante=0";  
         
            } 
        });
              
        $("#anterior").click(function ()
        {
         
         location.href = "../../c_protocolol1e2/fc_protocolol1e2?folio="+ $('#folio').val() +"&idintegrante=0"; 
//         location.href = "../c_ppc1p1n5/fc_ppc1p1n5?folio=" + $('#folio').val()+ "&idintegrante=0";  
        //location.href = "../c_capitulosintegrantes/fc_capitulosintegrantes?folio=" + $('#folio').val()+ "&idintegrante="+"&idintegrante=0";                    
        });

//para cargar variables capitulo, pregunta,encuestador,vivienda,barra
cargardatosgenerales('<?php echo($arraydatosgenerales['ecapitulo']); ?>','Pregunta 1.5 de 1.5.1','<?php echo($arraydatosgenerales['enomcoges']); ?>','<?php echo($arraydatosgenerales['etitular']); ?>','50');
//control del boton ayuda
botonayuda();

});
function saltoc1p1n5()
{
   // //alert('entro');
     if($('#valorppc1p1n5').val() === '2')
             {           
                          ////alert('entro == 2');
                         $.ajax({
                          url: "../c_ppc1p1n51/fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(), vvalorppc1p1n51 :'98' },
                          dataType: "html",
                          success : function(obj)
                          {
                         //location.href = "../c_c8p7/fc_c8p7?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
                          }
                         });
                         
                         
                         $.ajax({
                          url: "../c_ppc4p14/fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),
                          vppc4p14a1 : '98',          
                          vppc4p14a2 : '98',
                          vppc4p14a3 : '98',
                          vppc4p14a4 : '98',
                          vppc4p14a5 : '98',
                          vppc4p14acual : '98' },
                          dataType: "html",
                          success : function(obj)
                          {
                         //location.href = "../c_c8p7/fc_c8p7?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
                          }
                         });
                      
              }
              
              else
               {
                    ////alert('entro == 1');
                         $.ajax({
                          url: "../c_ppc1p1n51/fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(), vvalorppc1p1n51 :'' },
                          dataType: "html",
                          success : function(obj)
                          {
                         //location.href = "../c_c8p7/fc_c8p7?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
                          }
                         });
                         
                         $.ajax({
                          url: "../c_ppc4p14/fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),
                          vppc4p14a1 : '',          
                          vppc4p14a2 : '',
                          vppc4p14a3 : '',
                          vppc4p14a4 : '',
                          vppc4p14a5 : '',
                          vppc4p14acual : ''},
                          dataType: "html",
                          success : function(obj)
                          {
                         //location.href = "../c_c8p7/fc_c8p7?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
                          }
                         });
                //   location.href = "../c_c2p13a/fc_c2p13a?folio=" + $('#folio').val();                   
               }
            
}


</script>
</html>