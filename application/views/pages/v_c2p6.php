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
        <!--fin para imprimir el folio y llevarlo-->
<hr>
       <form class="form-group" name="formulario" id="formulario">

<!--Check varias selecciones -->
    <div class="row">
        <div id="c2p6div" name="c2p6div" class="form-group col-md-12 form-group-sm">
        <div id="c2p6o0div" class="has-error">
        <label class="control-label">6. En la vivienda (observación del cogestor) (Multiple respuesta)
                     <button type="button" id="vayuda" name="vayuda" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModal">
                        <span class="glyphicon glyphicon-question-sign" aria-hidden="true"></span> Ayuda
                    </button>       
        </label>
        </div>
        <div id="c2p6o1div" <?php if($arrayrespuestas['ec2p6o1']=='' || $arrayrespuestas['ec2p6o1']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
            <label> <!--en este caso se manda a la fincion javascript el nombre del campo-->
              <input type="checkbox" name="c2p6o1" id="c2p6o1" onclick="cambiarsinoc2p6('SI','c2p6o1','c2p6o1div','c2p6div',3);" <?php if($arrayrespuestas['ec2p6o1']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            Se visualiza una estructura adecuada de la vivienda (si selecciona esta respuesta inhabilita las dos siguientes opciones)
            </label>
        </div>
        </div>
        <div id="c2p6o2div" <?php if($arrayrespuestas['ec2p6o2']=='' || $arrayrespuestas['ec2p6o2']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="c2p6o2" id="c2p6o2" onclick="cambiarsinoc2p6('SI','c2p6o2','c2p6o2div','c2p6div',3);" <?php if($arrayrespuestas['ec2p6o2']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            No se visualiza un sistema de columnas y vigas que brinden estabilidad a la vivienda
          </label>
        </div>
        </div>
        <div id="c2p6o3div" <?php if($arrayrespuestas['ec2p6o3']==''|| $arrayrespuestas['ec2p6o3']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="c2p6o3" id="c2p6o3" onclick="cambiarsinoc2p6('SI','c2p6o3','c2p6o3div','c2p6div',3);" <?php if($arrayrespuestas['ec2p6o3']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            Se visualizan grietas que ponen en riesgo la estructura de la vivienda
          </label>
        </div>
        </div>   
           
        </div>
          
      </div>
    
<!--Fin Chek varias selecciones-->

            
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
            <?php if($arrayrespuestas['ec2p6o1']=="" & $arrayrespuestas['ec2p6o2']=="" & $arrayrespuestas['ec2p6o3']=="")
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

function cambiarsinoc2p6(opcion,campoval,divcampo,divcompleto,campos)
{
   if($('#' + campoval).val() == opcion)
   {
       $('#' + campoval).val("NO");
       $('#' + divcampo).addClass('has-error');
   }
   else
   {
       $('#' + campoval).val(opcion);
       $('#' + divcampo).removeClass('has-error');
   }
     
     if(campoval === 'c2p6o1')
       {
           if($('#' + campoval).val() === 'SI')
           {
               $('#c2p6o2').prop('checked',false);
               $('#c2p6o3').prop('checked',false);
               
               
               $('#c2p6o2').val('NO');
               $('#c2p6o3').val('NO');
                
               
               $('#c2p6o2div').addClass('has-error');
               $('#c2p6o3div').addClass('has-error');
               
           }
       }
       else
       {
           $('#c2p6o1').prop('checked',false); 
           $('#c2p6o1').val('NO');  
           $('#c2p6o1div').addClass('has-error');
       }        

     
   validarcuadros(divcompleto,campos);
}
///////////////////////////////////////Funciones que llaman al controlador para guardar y actualizar////////////////////////////////////////////////////////////////////////    
    $(document).ready(function()
    {

        $("#guardar").click(function ()
        {
                        $.ajax({
                          url: "fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(), vc2p6o1 : $('#c2p6o1').val(),vc2p6o2 : $('#c2p6o2').val(),vc2p6o3 : $('#c2p6o3').val()},    
                          dataType: "html",
                          success : function(obj){                      
                          botonguardar();
                          }
                        });                    
        });

        
        $("#actualizar").click(function ()
        {
                        $.ajax({
                          url: "fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(), vc2p6o1 : $('#c2p6o1').val(),vc2p6o2 : $('#c2p6o2').val(),vc2p6o3 : $('#c2p6o3').val()},    
                          dataType: "html",
                          success : function(obj){                      
                          botonactualizar();
                          }
                        });                   
        });
        

        $("#siguiente").click(function ()
        {
         botonsiguiente();
         location.href = "../c_c2p7/fc_c2p7?folio=" + $('#folio').val();                    

        });
              
        $("#anterior").click(function ()
        {
         botonanterior();
         location.href = "../c_c2p5/fc_c2p5?folio=" + $('#folio').val(); 
        //location.href = "../c_capitulosintegrantes/fc_capitulosintegrantes?folio=" + $('#folio').val()+ "&idintegrante="+"&idintegrante=0";                    
        });

//para cargar variables capitulo, pregunta,encuestador,vivienda,barra
cargardatosgenerales('<?php echo($arraydatosgenerales['ecapitulo']); ?>','Pregunta 6 de 16','<?php echo($arraydatosgenerales['enomcoges']); ?>','<?php echo($arraydatosgenerales['etitular']); ?>','30');
//control del boton ayuda
botonayuda();

});

</script>
</html>