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
        <div id="c2p7intermediadiv" name="c2p7intermediadiv" class="form-group col-md-12 form-group-sm">
        <div id="c2p7intermediao0div" class="has-error">
        <label class="control-label">7. En la vivienda cuentan con: (observación del cogestor) (Multiple respuesta)
                     <button type="button" id="vayuda" name="vayuda" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModal">
                        <span class="glyphicon glyphicon-question-sign" aria-hidden="true"></span> Ayuda
                    </button>       
        </label>
        </div>
        <div id="c2p7intermediao1div" <?php if($arrayrespuestas['ec2p7intermediao1']=='' || $arrayrespuestas['ec2p7intermediao1']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
            <label> <!--en este caso se manda a la fincion javascript el nombre del campo-->
              <input type="checkbox" name="c2p7intermediao1" id="c2p7intermediao1" onclick="cambiarsinoc2p7intermedia('SI','c2p7intermediao1','c2p7intermediao1div','c2p7intermediadiv',6);" <?php if($arrayrespuestas['ec2p7intermediao1']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            Energía eléctrica
            </label>
        </div>
        </div>
        <div id="c2p7intermediao2div" <?php if($arrayrespuestas['ec2p7intermediao2']=='' || $arrayrespuestas['ec2p7intermediao2']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="c2p7intermediao2" id="c2p7intermediao2" onclick="cambiarsinoc2p7intermedia('SI','c2p7intermediao2','c2p7intermediao2div','c2p7intermediadiv',6);" <?php if($arrayrespuestas['ec2p7intermediao2']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            Alcantarillado
          </label>
        </div>
        </div>
        <div id="c2p7intermediao3div" <?php if($arrayrespuestas['ec2p7intermediao3']==''|| $arrayrespuestas['ec2p7intermediao3']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="c2p7intermediao3" id="c2p7intermediao3" onclick="cambiarsinoc2p7intermedia('SI','c2p7intermediao3','c2p7intermediao3div','c2p7intermediadiv',6);" <?php if($arrayrespuestas['ec2p7intermediao3']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            Acueducto
          </label>
        </div>
        </div>
             <div id="c2p7intermediao4div" <?php if($arrayrespuestas['ec2p7intermediao4']==''|| $arrayrespuestas['ec2p7intermediao4']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="c2p7intermediao4" id="c2p7intermediao4" onclick="cambiarsinoc2p7intermedia('SI','c2p7intermediao4','c2p7intermediao4div','c2p7intermediadiv',6);" <?php if($arrayrespuestas['ec2p7intermediao4']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
           Gas natural domiciliario
          </label>
        </div>
        </div> 
        <div id="c2p7intermediao5div" <?php if($arrayrespuestas['ec2p7intermediao5']==''|| $arrayrespuestas['ec2p7intermediao5']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="c2p7intermediao5" id="c2p7intermediao5" onclick="cambiarsinoc2p7intermedia('SI','c2p7intermediao5','c2p7intermediao5div','c2p7intermediadiv',6);" <?php if($arrayrespuestas['ec2p7intermediao5']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            Recolección de basuras
          </label>
        </div>
        </div> 
        <div id="c2p7intermediao6div" <?php if($arrayrespuestas['ec2p7intermediao6']==''|| $arrayrespuestas['ec2p7intermediao6']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="c2p7intermediao6" id="c2p7intermediao6" onclick="cambiarsinoc2p7intermedia('SI','c2p7intermediao6','c2p7intermediao6div','c2p7intermediadiv',6);" <?php if($arrayrespuestas['ec2p7intermediao6']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
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
            <?php if($arrayrespuestas['ec2p7intermediao1']=="" & $arrayrespuestas['ec2p7intermediao2']=="" & $arrayrespuestas['ec2p7intermediao3']==""& $arrayrespuestas['ec2p7intermediao4']==""& $arrayrespuestas['ec2p7intermediao5']==""& $arrayrespuestas['ec2p7intermediao6']=="" )
             {
                echo($botoneraginterh);
            }
            else
            {
                echo($botoneraainterh);
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
function cambiarsinoc2p7intermedia(opcion,campoval,divcampo,divcompleto,campos)
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
     
     if(campoval === 'c2p7intermediao6')
       {
           if($('#' + campoval).val() === 'SI')
           {
               $('#c2p7intermediao1').prop('checked',false);
               $('#c2p7intermediao2').prop('checked',false);
               $('#c2p7intermediao3').prop('checked',false);
               $('#c2p7intermediao4').prop('checked',false);
               $('#c2p7intermediao5').prop('checked',false);
               
               $('#c2p7intermediao1').val('NO');
               $('#c2p7intermediao2').val('NO');
               $('#c2p7intermediao3').val('NO');
               $('#c2p7intermediao4').val('NO');
               $('#c2p7intermediao5').val('NO'); 
               
               $('#c2p7intermediao1div').addClass('has-error');
               $('#c2p7intermediao2div').addClass('has-error');
               $('#c2p7intermediao3div').addClass('has-error');
               $('#c2p7intermediao4div').addClass('has-error');
               $('#c2p7intermediao5div').addClass('has-error');
           }
       }
       else
       {
           $('#c2p7intermediao6').prop('checked',false); 
           $('#c2p7intermediao6').val('NO');  
           $('#c2p7intermediao6div').addClass('has-error');
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
                          data: {vfolio : $('#folio').val(), vc2p7intermediao1 : $('#c2p7intermediao1').val(),vc2p7intermediao2 : $('#c2p7intermediao2').val(),vc2p7intermediao3 : $('#c2p7intermediao3').val(),vc2p7intermediao4 : $('#c2p7intermediao4').val(),vc2p7intermediao5 : $('#c2p7intermediao5').val(),vc2p7intermediao6 : $('#c2p7intermediao6').val()},    
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
                          data: {vfolio : $('#folio').val(), vc2p7intermediao1 : $('#c2p7intermediao1').val(),vc2p7intermediao2 : $('#c2p7intermediao2').val(),vc2p7intermediao3 : $('#c2p7intermediao3').val(),vc2p7intermediao4 : $('#c2p7intermediao4').val(),vc2p7intermediao5 : $('#c2p7intermediao5').val(),vc2p7intermediao6 : $('#c2p7intermediao6').val()},    
                          dataType: "html",
                          success : function(obj){                      
                          botonactualizar();
                          }
                        });                   
        });
        
        
         $("#capitulos").click(function ()
        {
            
            location.href = "../c_capituloshogarintermedia/fc_capituloshogarintermedia?folio=" + $('#folio').val() +  "&idintegrante=0" ;                    
         
            });

        $("#siguiente").click(function ()
        {
         botonsiguiente();
         location.href = "../c_c2p8intermedia/fc_c2p8intermedia?folio=" + $('#folio').val();                    

        });
              
        $("#anterior").click(function ()
        {
         botonanterior();
         location.href = "../c_c2p5intermedia/fc_c2p5intermedia?folio=" + $('#folio').val(); 
        //location.href = "../c_capitulosintegrantes/fc_capitulosintegrantes?folio=" + $('#folio').val()+ "&idintegrante="+"&idintegrante=0";                    
        });

//para cargar variables capitulo, pregunta,encuestador,vivienda,barra
cargardatosgenerales('<?php echo($arraydatosgenerales['ecapitulo']); ?>','Pregunta 7 de 16','<?php echo($arraydatosgenerales['enomcoges']); ?>','<?php echo($arraydatosgenerales['etitular']); ?>','35');
//control del boton ayuda
botonayuda();

});

</script>
</html>