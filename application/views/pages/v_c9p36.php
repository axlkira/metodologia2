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
        <input type="text" class="form-control" id="valorc9p34" name="valorc9p34" style="display:none" placeholder="Text input" value="<?php echo($arrayrespuestas['ec9p34']); ?>">
       
        <!--fin para imprimir el idintegrante y llevarlo-->
<hr>
        <form class="form-group" name="formulario" id="formulario">

           <!--Check varias selecciones -->
    <div class="row">
        <div id="c9p36div" name="c9p36div" class="form-group col-md-12 form-group-sm">
        <div id="c9p36o0div" class="has-error">
        <label class="control-label">6. ¿Cuáles han sido las dos principales dificultades que ha tenido para desarollar el negocio? (Selección mútiple)
                    
            <button type="button" id="vayuda" name="vayuda" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModal">
                        <span class="glyphicon glyphicon-question-sign" aria-hidden="true"></span> Ayuda
                    </button>       
        </label>
        </div>
            
        <div id="c9p36o1div" <?php if($arrayrespuestas['ec9p36o1']=='' || $arrayrespuestas['ec9p36o1']=='NO' || $arrayrespuestas['ec9p36o1']=='98'){echo('class=" has-error"');}?>>
        <div class="checkbox">
            <label> <!--en este caso se manda a la fincion javascript el nombre del campo-->
              <input type="checkbox" name="c9p36o1" id="c9p36o1" onclick="cambiarsinoc9p36('SI','c9p36o1','c9p36o1div','c9p36div',7);" <?php if($arrayrespuestas['ec9p36o1']=='SI'){echo('value="SI" checked');}else{echo('value="NO" ');}?>>
            Falta de capital
            </label>
        </div>
        </div>
             
            
        <div id="c9p36o2div" <?php if($arrayrespuestas['ec9p36o2']=='' || $arrayrespuestas['ec9p36o2']=='NO' || $arrayrespuestas['ec9p36o2']=='98'){echo('class=" has-error"');}?>>
        <div class="checkbox">
            <label> <!--en este caso se manda a la fincion javascript el nombre del campo-->
              <input type="checkbox" name="c9p36o2" id="c9p36o2" onclick="cambiarsinoc9p36('SI','c9p36o2','c9p36o2div','c9p36div',7);" <?php if($arrayrespuestas['ec9p36o2']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
           Poca información
            </label>
        </div>
        </div> 
       
            
        <div id="c9p36o3div" <?php if($arrayrespuestas['ec9p36o3']=='' || $arrayrespuestas['ec9p36o3']=='NO' || $arrayrespuestas['ec9p36o3']=='98'){echo('class=" has-error"');}?>>
        <div class="checkbox">
            <label> <!--en este caso se manda a la fincion javascript el nombre del campo-->
              <input type="checkbox" name="c9p36o3" id="c9p36o3" onclick="cambiarsinoc9p36('SI','c9p36o3','c9p36o3div','c9p36div',7);" <?php if($arrayrespuestas['ec9p36o3']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
             Miedo al fracaso
            </label>
        </div>
        </div> 
          
         <div id="c9p36o4div" <?php if($arrayrespuestas['ec9p36o4']=='' || $arrayrespuestas['ec9p36o4']=='NO' || $arrayrespuestas['ec9p36o4']=='98'){echo('class=" has-error"');}?>>
        <div class="checkbox">
            <label> <!--en este caso se manda a la fincion javascript el nombre del campo-->
              <input type="checkbox" name="c9p36o4" id="c9p36o4" onclick="cambiarsinoc9p36('SI','c9p36o4','c9p36o4div','c9p36div',7);" <?php if($arrayrespuestas['ec9p36o4']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
          No cuenta con asesoria
            </label>
        </div>
        </div>
            
        <div id="c9p36o5div" <?php if($arrayrespuestas['ec9p36o5']=='' || $arrayrespuestas['ec9p36o5']=='NO' || $arrayrespuestas['ec9p36o5']=='98'){echo('class=" has-error"');}?>>
        <div class="checkbox">
            <label> <!--en este caso se manda a la fincion javascript el nombre del campo-->
              <input type="checkbox" name="c9p36o5" id="c9p36o5" onclick="cambiarsinoc9p36('SI','c9p36o5','c9p36o5div','c9p36div',7);" <?php if($arrayrespuestas['ec9p36o5']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
          No tiene personal
            </label>
        </div>
        </div>
            
        <div id="c9p36o6div" <?php if($arrayrespuestas['ec9p36o6']=='' || $arrayrespuestas['ec9p36o6']=='NO' || $arrayrespuestas['ec9p36o6']=='98'){echo('class=" has-error"');}?>>
        <div class="checkbox">
            <label> <!--en este caso se manda a la fincion javascript el nombre del campo-->
              <input type="checkbox" name="c9p36o6" id="c9p36o6" onclick="cambiarsinoc9p36('SI','c9p36o6','c9p36o6div','c9p36div',7);" <?php if($arrayrespuestas['ec9p36o6']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
          Problemas de seguridad
            </label>
        </div>
        </div>
            
        <div id="c9p36o7div" <?php if($arrayrespuestas['ec9p36o7']=='' || $arrayrespuestas['ec9p36o7']=='NO' || $arrayrespuestas['ec9p36o7']=='98'){echo('class=" has-error"');}?>>
        <div class="checkbox">
            <label> <!--en este caso se manda a la fincion javascript el nombre del campo-->
              <input type="checkbox" name="c9p36o7" id="c9p36o7" onclick="cambiarsinoc9p36('SI','c9p36o7','c9p36o7div','c9p36div',7);" <?php if($arrayrespuestas['ec9p36o7']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
         Falta de local
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
<br>
            <!--inicio botonera guardar y actualizar-->
            <?php if($arrayrespuestas['ec9p36o1']=="" & $arrayrespuestas['ec9p36o2']=="" & $arrayrespuestas['ec9p36o3']==""& $arrayrespuestas['ec9p36o4']==""& $arrayrespuestas['ec9p36o5']==""& $arrayrespuestas['ec9p36o6']==""& $arrayrespuestas['ec9p36o7']==""& $arrayrespuestas['ec9p36o8']=="")
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
                          vc9p36o1 : $('#c9p36o1').val(),
                          vc9p36o2 : $('#c9p36o2').val(),
                          vc9p36o3 : $('#c9p36o3').val(),
                          vc9p36o4 : $('#c9p36o4').val(),
                          vc9p36o5 : $('#c9p36o5').val(),
                          vc9p36o6 : $('#c9p36o6').val(),
                          vc9p36o7 : $('#c9p36o7').val(),
                          vc9p36o8 : $('#c9p36o8').val()},                      
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
                          vc9p36o1 : $('#c9p36o1').val(),
                          vc9p36o2 : $('#c9p36o2').val(),
                          vc9p36o3 : $('#c9p36o3').val(),
                          vc9p36o4 : $('#c9p36o4').val(),
                          vc9p36o5 : $('#c9p36o5').val(),
                          vc9p36o6 : $('#c9p36o6').val(),
                          vc9p36o7 : $('#c9p36o7').val(),
                          vc9p36o8 : $('#c9p36o8').val()},                      
                          dataType: "html",
                          success : function(obj){                      
                          botonguardar();
                          }
                        });                    
        });
        

        $("#siguiente").click(function ()
        {
         botonsiguiente();
         
         location.href = "../c_capitulosintegrante/fc_capitulosintegrante?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                      

        });

              
        $("#anterior").click(function ()
        {
          location.href = "../c_c9p35/fc_c9p35?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";  
//         botonanterior();
//         if($('#valorc9p34').val() === '2')
//         {
//         location.href = "../c_c9p34/fc_c9p34?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";
//         }
//        else
//         {
//             location.href = "../c_c9p35/fc_c9p35?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";
//         }
        });

//para cargar variables capitulo, pregunta,encuestador,vivienda,barra



cargardatosgenerales('<?php echo($arraydatosgenerales['ecapitulo']); ?>','Pregunta 6 de 6','<?php echo($arraydatosgenerales['enomcoges']); ?>','<?php echo($arraydatosgenerales['enombreintegrante']." "." - "." "."Sexo:"." ".$arraydatosgenerales['esexointegrante']."   "."  -  "."   "."Edad:"."   ".$arraydatosgenerales['eedadintegrante']); ?>','100');
//control del boton ayuda
botonayuda();

});
//dea aca para abajo es logica de cuadros
function cambiarsinoc9p36(opcion,campoval,divcampo,divcompleto,campos)
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

        
      validarcuadrosc9p36(divcompleto,campos);
}
function validarcuadrosc9p36(divcuadro,ncampos)
{
    //alert($('#' + divcuadro).find('input').prop('checked', true).length);
    //alert($('.has-error').length);
    //alert(ncampos + ' ncampos');
    
   
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
    
function validarcampotexcuadros(div,campo,ncampos)
{
    validarbolitasytexto(div,campo);

    validarcuadrosc9p36(div,ncampos);
}</script>
</html>