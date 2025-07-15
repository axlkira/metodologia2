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
       <input type="text" class="form-control input-sm" id="c5p11" name="c5p11"  style="display:none"  placeholder="" value="<?php echo($arrayrespuestas['ec5p11']); ?>"> 
       <!--fin para imprimir el idintegrante y llevarlo-->
<hr>
        <form class="form-group" name="formulario" id="formulario">

           <!--Check varias selecciones -->
    <div class="row">
        <div id="c5p8div" name="c5p8div" class="form-group col-md-12 form-group-sm">
        <div id="c5p8o0div" class="has-error">
        <label class="control-label">8. ¿Qué  actividades  en salud  utiliza para  prevenir el càncer de seno?  (Multiple respuesta)
                     <button type="button" id="vayuda" name="vayuda" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModal">
                        <span class="glyphicon glyphicon-question-sign" aria-hidden="true"></span> Ayuda
                    </button>       
        </label>
        </div>
        <div id="c5p8o1div" <?php if($arrayrespuestas['ec5p8o1']=='' || $arrayrespuestas['ec5p8o1']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
            <label> <!--en este caso se manda a la fincion javascript el nombre del campo-->
              <input type="checkbox" name="c5p8o1" id="c5p8o1" onclick="cambiarsinoc5p8('SI','c5p8o1','c5p8o1div','c5p8div',5);" <?php if($arrayrespuestas['ec5p8o1']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            Autoexamen de seno  cada mes
            </label>
        </div>
        </div>
        <div id="c5p8o2div" <?php if($arrayrespuestas['ec5p8o2']=='' || $arrayrespuestas['ec5p8o2']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="c5p8o2" id="c5p8o2" onclick="cambiarsinoc5p8('SI','c5p8o2','c5p8o2div','c5p8div',5);" <?php if($arrayrespuestas['ec5p8o2']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            Exàmen Clìnico de seno practicado por el mèdico ò enfermera  en los ùltimos 6 meses 
          </label>
        </div>
        </div>
        <div id="c5p8o3div" <?php if($arrayrespuestas['ec5p8o3']==''|| $arrayrespuestas['ec5p8o3']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="c5p8o3" id="c5p8o3" onclick="cambiarsinoc5p8('SI','c5p8o3','c5p8o3div','c5p8div',5);" <?php if($arrayrespuestas['ec5p8o3']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            Ecografia Mamaria en los ùltimos 6 meses
          </label>
        </div>
        </div>  
         
       <div id="c5p8o4div" <?php if($arrayrespuestas['ec5p8o4']==''|| $arrayrespuestas['ec5p8o4']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="c5p8o4" id="c5p8o4" onclick="cambiarsinoc5p8('SI','c5p8o4','c5p8o4div','c5p8div',5);" <?php if($arrayrespuestas['ec5p8o4']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            Mamografia en los ùltimos 12 meses
          </label>
        </div>
        </div>      
         <div id="c5p8o5div" <?php if($arrayrespuestas['ec5p8o5']==''|| $arrayrespuestas['ec5p8o5']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="c5p8o5" id="c5p8o5" onclick="cambiarsinoc5p8('SI','c5p8o5','c5p8o5div','c5p8div',5);" <?php if($arrayrespuestas['ec5p8o5']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            Ninguna de las anteriores
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
            <?php if($arrayrespuestas['ec5p8o1']=="" & $arrayrespuestas['ec5p8o2']=="" & $arrayrespuestas['ec5p8o3']==""& $arrayrespuestas['ec5p8o4']==""
                     & $arrayrespuestas['ec5p8o5']=="")
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
                          vc5p8o1 : $('#c5p8o1').val(),          
                          vc5p8o2 : $('#c5p8o2').val(),
                          vc5p8o3 : $('#c5p8o3').val(),
                          vc5p8o4 : $('#c5p8o4').val(),
                          vc5p8o5 : $('#c5p8o5').val()},
                      
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
                          data: {vfolio : $('#folio').val(),
                          vidintegrante : $('#idintegrante').val(),
                          vc5p8o1 : $('#c5p8o1').val(),          
                          vc5p8o2 : $('#c5p8o2').val(),
                          vc5p8o3 : $('#c5p8o3').val(),
                          vc5p8o4 : $('#c5p8o4').val(),
                          vc5p8o5 : $('#c5p8o5').val()},
                          dataType: "html",
                          success : function(obj){                      
                          botonguardar();
                          }
                        });                    
        });
        

        $("#siguiente").click(function ()
        {
         botonsiguiente();
         location.href = "../c_c5p9/fc_c5p9?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    

        });
        $("#anterior").click(function ()
        {
         botonanterior();
         
        
         {
             location.href = "../c_c5p7/fc_c5p7?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() ;                    
         }
         
//          if($('#c5p11').val() !== '98')
//          {
//         location.href = "../c_c5p11/fc_c5p11?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val();                    
//          }
//          else
//          {
//              location.href = "../c_c5p12/fc_c5p12?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() ;                    
//          }
        });
              
//        $("#anterior").click(function ()
//        {
//         botonanterior();
//         location.href = "../c_c5p12/fc_c5p12?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
//        });

//para cargar variables capitulo, pregunta,encuestador,vivienda,barra



cargardatosgenerales('<?php echo($arraydatosgenerales['ecapitulo']); ?>','Pregunta 8 de 14','<?php echo($arraydatosgenerales['enomcoges']); ?>','<?php echo($arraydatosgenerales['enombreintegrante']." "." - "." "."Sexo:"." ".$arraydatosgenerales['esexointegrante']."   "."  -  "."   "."Edad:"."   ".$arraydatosgenerales['eedadintegrante']); ?>','59');
//control del boton ayuda
botonayuda();

});
//dea aca para abajo es logica de cuadros
function cambiarsinoc5p8(opcion,campoval,divcampo,divcompleto,campos)
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
        if(campoval == 'c5p8o5')
           {
            if($('#' + campoval).val() == 'SI')
            {
              $('#c5p8o1').prop('checked' , false);
              $('#c5p8o1div').addClass(' has-error');
              $('#c5p8o2').prop('checked' , false);
              $('#c5p8o2div').addClass(' has-error');
              $('#c5p8o3').prop('checked' , false);
              $('#c5p8o3div').addClass(' has-error');
              $('#c5p8o4').prop('checked' , false);
              $('#c5p8o4div').addClass(' has-error');
              
              $('#c5p8o1').val('NO');
              $('#c5p8o2').val('NO');
              $('#c5p8o3').val('NO');
              $('#c5p8o4').val('NO');
              
              }
}
        else
       {
          $('#c5p8o5').prop('checked' , false); 
          $('#c5p8o5').val('NO');
          $('#c5p8o5div').addClass(' has-error');
      }
      validarcuadrosc5p8(divcompleto,campos);
}
function validarcuadrosc5p8(divcuadro,ncampos)
{
    //alert($('#' + divcuadro).find('input').prop('checked', true).length);
    //alert($('.has-error').length);
    //alert(ncampos + ' ncampos');
    
    if ($('#c5p8o5').val() != '')
    {
        //|| $('#c3p2cualdiv')===('form-group col-md-10 form-group-sm has-error')
        if($('.has-error').length === (ncampos + 1))
        {   //alert('soniguales');
           $('#guardar').prop('disabled', true);
           $('#actualizar').prop('disabled', true);
           $('#cancelar').prop('disabled', true);
           $('#anterior').prop('disabled', false);
           $('#siguiente').prop('disabled', false);
        }
        else
        {
           $('#guardar').prop('disabled', false);
           $('#actualizar').prop('disabled', false);
           $('#cancelar').prop('disabled', false);
           $('#anterior').prop('disabled', true);
           $('#siguiente').prop('disabled', true);       
        }
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
function validarcampotexcuadros(div,campo,ncampos)
{
    validarbolitasytexto(div,campo);

    validarcuadrosc5p8(div,ncampos);
}

</script>
</html>