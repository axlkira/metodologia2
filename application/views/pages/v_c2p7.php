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
        <div id="c2p7div" name="c2p7div" class="form-group col-md-12 form-group-sm">
        <div id="c2p7o0div" class="has-error">
        <label class="control-label">7. En la vivienda cuentan con: (observación del cogestor) (Multiple respuesta)
                     <button type="button" id="vayuda" name="vayuda" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModal">
                        <span class="glyphicon glyphicon-question-sign" aria-hidden="true"></span> Ayuda
                    </button>       
        </label>
        </div>
        <div id="c2p7o1div" <?php if($arrayrespuestas['ec2p7o1']=='' || $arrayrespuestas['ec2p7o1']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
            <label> <!--en este caso se manda a la fincion javascript el nombre del campo-->
              <input type="checkbox" name="c2p7o1" id="c2p7o1" onclick="cambiarsinoc2p7('SI','c2p7o1','c2p7o1div','c2p7div',6);" <?php if($arrayrespuestas['ec2p7o1']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            Energía eléctrica
            </label>
        </div>
        </div>
        <div id="c2p7o2div" <?php if($arrayrespuestas['ec2p7o2']=='' || $arrayrespuestas['ec2p7o2']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="c2p7o2" id="c2p7o2" onclick="cambiarsinoc2p7('SI','c2p7o2','c2p7o2div','c2p7div',6);" <?php if($arrayrespuestas['ec2p7o2']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            Alcantarillado
          </label>
        </div>
        </div>
        <div id="c2p7o3div" <?php if($arrayrespuestas['ec2p7o3']==''|| $arrayrespuestas['ec2p7o3']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="c2p7o3" id="c2p7o3" onclick="cambiarsinoc2p7('SI','c2p7o3','c2p7o3div','c2p7div',6);" <?php if($arrayrespuestas['ec2p7o3']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            Acueducto
          </label>
        </div>
        </div>
             <div id="c2p7o4div" <?php if($arrayrespuestas['ec2p7o4']==''|| $arrayrespuestas['ec2p7o4']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="c2p7o4" id="c2p7o4" onclick="cambiarsinoc2p7('SI','c2p7o4','c2p7o4div','c2p7div',6);" <?php if($arrayrespuestas['ec2p7o4']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
           Gas natural domiciliario
          </label>
        </div>
        </div> 
        <div id="c2p7o5div" <?php if($arrayrespuestas['ec2p7o5']==''|| $arrayrespuestas['ec2p7o5']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="c2p7o5" id="c2p7o5" onclick="cambiarsinoc2p7('SI','c2p7o5','c2p7o5div','c2p7div',6);" <?php if($arrayrespuestas['ec2p7o5']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            Recolección de basuras
          </label>
        </div>
        </div> 
        <div id="c2p7o6div" <?php if($arrayrespuestas['ec2p7o6']==''|| $arrayrespuestas['ec2p7o6']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="c2p7o6" id="c2p7o6" onclick="cambiarsinoc2p7('SI','c2p7o6','c2p7o6div','c2p7div',6);" <?php if($arrayrespuestas['ec2p7o6']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            Ningún servicio
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
            <?php if($arrayrespuestas['ec2p7o1']=="" & $arrayrespuestas['ec2p7o2']=="" & $arrayrespuestas['ec2p7o3']==""& $arrayrespuestas['ec2p7o4']==""& $arrayrespuestas['ec2p7o5']==""& $arrayrespuestas['ec2p7o6']=="" )
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
 //dea aca para abajo es logica de cuadros
function cambiarsinoc2p7(opcion,campoval,divcampo,divcompleto,campos)
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
     
     if(campoval === 'c2p7o6')
       {
           if($('#' + campoval).val() === 'SI')
           {
               $('#c2p7o1').prop('checked',false);
               $('#c2p7o2').prop('checked',false);
               $('#c2p7o3').prop('checked',false);
               $('#c2p7o4').prop('checked',false);
               $('#c2p7o5').prop('checked',false);
               
               $('#c2p7o1').val('NO');
               $('#c2p7o2').val('NO');
               $('#c2p7o3').val('NO');
               $('#c2p7o4').val('NO');
               $('#c2p7o5').val('NO'); 
               
               $('#c2p7o1div').addClass('has-error');
               $('#c2p7o2div').addClass('has-error');
               $('#c2p7o3div').addClass('has-error');
               $('#c2p7o4div').addClass('has-error');
               $('#c2p7o5div').addClass('has-error');
           }
       }
       else
       {
           $('#c2p7o6').prop('checked',false); 
           $('#c2p7o6').val('NO');  
           $('#c2p7o6div').addClass('has-error');
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
                          data: {vfolio : $('#folio').val(), vc2p7o1 : $('#c2p7o1').val(),vc2p7o2 : $('#c2p7o2').val(),vc2p7o3 : $('#c2p7o3').val(),vc2p7o4 : $('#c2p7o4').val(),vc2p7o5 : $('#c2p7o5').val(),vc2p7o6 : $('#c2p7o6').val()},    
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
                          data: {vfolio : $('#folio').val(), vc2p7o1 : $('#c2p7o1').val(),vc2p7o2 : $('#c2p7o2').val(),vc2p7o3 : $('#c2p7o3').val(),vc2p7o4 : $('#c2p7o4').val(),vc2p7o5 : $('#c2p7o5').val(),vc2p7o6 : $('#c2p7o6').val()},    
                          dataType: "html",
                          success : function(obj){                      
                          botonactualizar();
                          }
                        });                   
        });
        

        $("#siguiente").click(function ()
        {
         botonsiguiente();
         location.href = "../c_c2p8/fc_c2p8?folio=" + $('#folio').val();                    

        });
              
        $("#anterior").click(function ()
        {
         botonanterior();
         location.href = "../c_c2p6/fc_c2p6?folio=" + $('#folio').val(); 
        //location.href = "../c_capitulosintegrantes/fc_capitulosintegrantes?folio=" + $('#folio').val()+ "&idintegrante="+"&idintegrante=0";                    
        });

//para cargar variables capitulo, pregunta,encuestador,vivienda,barra
cargardatosgenerales('<?php echo($arraydatosgenerales['ecapitulo']); ?>','Pregunta 7 de 16','<?php echo($arraydatosgenerales['enomcoges']); ?>','<?php echo($arraydatosgenerales['etitular']); ?>','35');
//control del boton ayuda
botonayuda();

});

</script>
</html>