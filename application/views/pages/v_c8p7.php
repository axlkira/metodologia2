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
       <input type="text" class="form-control input-sm" id="c8p6" name="c8p6"  style="display:none"  placeholder="" value="<?php echo($arrayrespuestas['ec8p6']); ?>">
       <input type="text" class="form-control input-sm" id="c8p5" name="c8p5"  style="display:none"  placeholder="" value="<?php echo($arrayrespuestas['ec8p5']); ?>">
        <!--fin para imprimir el idintegrante y llevarlo-->
<hr>
        <form class="form-group" name="formulario" id="formulario">

           <!--Check varias selecciones -->
    <div class="row">
        <div id="c8p7div" name="c8p7div" class="form-group col-md-12 form-group-sm">
        <div id="c8p7o0div" class="has-error">
        <label class="control-label">7. Observe e indague ¿Sí…..realiza alguna de las siguientes actividades? 
                     <button type="button" id="vayuda" name="vayuda" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModal">
                        <span class="glyphicon glyphicon-question-sign" aria-hidden="true"></span> Ayuda
                    </button>       
        </label>
        </div>
        <div id="c8p7o1div" <?php if($arrayrespuestas['ec8p7o1']=='' || $arrayrespuestas['ec8p7o1']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
            <label> <!--en este caso se manda a la fincion javascript el nombre del campo-->
              <input type="checkbox" name="c8p7o1" id="c8p7o1" onclick="cambiarsinoc8p7('SI','c8p7o1','c8p7o1div','c8p7div',10);" <?php if($arrayrespuestas['ec8p7o1']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            Trabajo doméstico
            </label>
        </div>
        </div>
        <div id="c8p7o2div" <?php if($arrayrespuestas['ec8p7o2']=='' || $arrayrespuestas['ec8p7o2']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="c8p7o2" id="c8p7o2" onclick="cambiarsinoc8p7('SI','c8p7o2','c8p7o2div','c8p7div',10);" <?php if($arrayrespuestas['ec8p7o2']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            Trabajo en minas
          </label>
        </div>
        </div>
        <div id="c8p7o3div" <?php if($arrayrespuestas['ec8p7o3']==''|| $arrayrespuestas['ec8p7o3']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="c8p7o3" id="c8p7o3" onclick="cambiarsinoc8p7('SI','c8p7o3','c8p7o3div','c8p7div',10);" <?php if($arrayrespuestas['ec8p7o3']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            Explotación sexual comercial
          </label>
        </div>
        </div>  
         
       <div id="c8p7o4div" <?php if($arrayrespuestas['ec8p7o4']==''|| $arrayrespuestas['ec8p7o4']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="c8p7o4" id="c8p7o4" onclick="cambiarsinoc8p7('SI','c8p7o4','c8p7o4div','c8p7div',10);" <?php if($arrayrespuestas['ec8p7o4']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            Reclutamiento para el conflicto armado
          </label>
        </div>
        </div>
            
       <div id="c8p7o5div" <?php if($arrayrespuestas['ec8p7o5']==''|| $arrayrespuestas['ec8p7o5']=='NO'){echo('class=" has-error"');}?>>
       <div class="checkbox">
         <label>
             <input type="checkbox" name="c8p7o5" id="c8p7o5" onclick="cambiarsinoc8p7('SI','c8p7o5','c8p7o5div','c8p7div',10);" <?php if($arrayrespuestas['ec8p7o5']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
           Producción y micro tráfico de estupefacientes 
         </label>
       </div>
       </div>
       <div id="c8p7o6div" <?php if($arrayrespuestas['ec8p7o6']==''|| $arrayrespuestas['ec8p7o6']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="c8p7o6" id="c8p7o6" onclick="cambiarsinoc8p7('SI','c8p7o6','c8p7o6div','c8p7div',10);" <?php if($arrayrespuestas['ec8p7o6']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            Ventas ambulantes
          </label>
        </div>
        </div>
            <div id="c8p7o7div" <?php if($arrayrespuestas['ec8p7o7']==''|| $arrayrespuestas['ec8p7o7']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="c8p7o7" id="c8p7o7" onclick="cambiarsinoc8p7('SI','c8p7o7','c8p7o7div','c8p7div',10);" <?php if($arrayrespuestas['ec8p7o7']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            Reciclaje
          </label>
        </div>
        </div>
            <div id="c8p7o8div" <?php if($arrayrespuestas['ec8p7o8']==''|| $arrayrespuestas['ec8p7o8']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="c8p7o8" id="c8p7o8" onclick="cambiarsinoc8p7('SI','c8p7o8','c8p7o8div','c8p7div',10);" <?php if($arrayrespuestas['ec8p7o8']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            Trabajo en calle
          </label>
        </div>
        </div>
            <div id="c8p7o9div" <?php if($arrayrespuestas['ec8p7o9']==''|| $arrayrespuestas['ec8p7o9']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="c8p7o9" id="c8p7o9" onclick="cambiarsinoc8p7('SI','c8p7o9','c8p7o9div','c8p7div',10);" <?php if($arrayrespuestas['ec8p7o9']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            Mendicidad
          </label>
        </div>
        </div>
            <div id="c8p7o10div" <?php if($arrayrespuestas['ec8p7o10']==''|| $arrayrespuestas['ec8p7o10']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="c8p7o10" id="c8p7o10" onclick="cambiarsinoc8p7('SI','c8p7o10','c8p7o10div','c8p7div',10);" <?php if($arrayrespuestas['ec8p7o10']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            Otra, Cual?
          </label>
        </div>
        </div>
        <div class="row" id="c8p7cualmostrar" name="c8p7cualmostrar" <?php if($arrayrespuestas['ec8p7o10']== 'NO'||$arrayrespuestas['ec8p7o10']== ''){echo('style="display:none"');}else{echo('');}  ?> >
        <div  id="c8p7cualdiv" name="c8p7cualdiv" class="form-group col-md-3">
                       <label class="control-label">Cual?</label>
                       <input type="text" class="form-control text-uppercase" id="c8p7cual" onkeypress="return soloLetras(event)"  onchange="validarcampotexcuadros('c8p7cualdiv','c8p7cual','10')" name="c8p7cual"   placeholder="Cual?" value="<?php if($arrayrespuestas['ec8p7cual'] == ''){echo('0');}else{ echo($arrayrespuestas['ec8p7cual']);} ?>">
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
            <?php if($arrayrespuestas['ec8p7o1']=="" & $arrayrespuestas['ec8p7o2']=="" & $arrayrespuestas['ec8p7o3']==""& $arrayrespuestas['ec8p7o4']==""
                     & $arrayrespuestas['ec8p7o5']==""& $arrayrespuestas['ec8p7o6']==""& $arrayrespuestas['ec8p7o7']==""& $arrayrespuestas['ec8p7o8']==""
                    & $arrayrespuestas['ec8p7o9']==""& $arrayrespuestas['ec8p7o10']=="")
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
                          vc8p7o1 : $('#c8p7o1').val(),          
                          vc8p7o2 : $('#c8p7o2').val(),
                          vc8p7o3 : $('#c8p7o3').val(),
                          vc8p7o4 : $('#c8p7o4').val(),
                          vc8p7o5 : $('#c8p7o5').val(),
                          vc8p7o6 : $('#c8p7o6').val(),
                          vc8p7o7 : $('#c8p7o7').val(),
                          vc8p7o8 : $('#c8p7o8').val(),
                          vc8p7o9 : $('#c8p7o9').val(),
                          vc8p7o10 : $('#c8p7o10').val(),
                          vc8p7cual : $('#c8p7cual').val()},
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
                          vc8p7o1 : $('#c8p7o1').val(),          
                          vc8p7o2 : $('#c8p7o2').val(),
                          vc8p7o3 : $('#c8p7o3').val(),
                          vc8p7o4 : $('#c8p7o4').val(),
                          vc8p7o5 : $('#c8p7o5').val(),
                          vc8p7o6 : $('#c8p7o6').val(),
                          vc8p7o7 : $('#c8p7o7').val(),
                          vc8p7o8 : $('#c8p7o8').val(),
                          vc8p7o9 : $('#c8p7o9').val(),
                          vc8p7o10 : $('#c8p7o10').val(),
                          vc8p7cual : $('#c8p7cual').val()},
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
         botonanterior();
         location.href = "../c_c8p6/fc_c8p6?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val();
//         if($('#c8p5').val() === '1')
//         {
//         location.href = "../c_c8p6/fc_c8p6?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
//         }
//        else
//        {
//        location.href = "../c_c8p7/fc_c8p7?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
//        }
        });
        
//        $("#anterior").click(function ()
//        {
//         botonanterior();
//         location.href = "../c_c8p7/fc_c8p7?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
//        });
//para cargar variables capitulo, pregunta,encuestador,vivienda,barra
cargardatosgenerales('<?php echo($arraydatosgenerales['ecapitulo']); ?>','Pregunta 7 de 7','<?php echo($arraydatosgenerales['enomcoges']); ?>','<?php echo($arraydatosgenerales['enombreintegrante']." "." - "." "."Sexo:"." ".$arraydatosgenerales['esexointegrante']."   "."  -  "."   "."Edad:"."   ".$arraydatosgenerales['eedadintegrante']); ?>','100');
//control del boton ayuda
botonayuda();
});
//dea aca para abajo es logica de cuadros
function cambiarsinoc8p7(opcion,campoval,divcampo,divcompleto,campos)
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
    if(campoval == 'c8p7o10')
        {
            if($('#' + campoval).val() == 'SI')
            {
                //alert('aca lo muestra');
                $('#c8p7cualmostrar').show(1000);
                $('#c8p7cual').val('');
                $('#c8p7cualdiv').addClass(' has-error');            

            }
            else
            {
                //alert('aca lo oculta');
                $('#c8p7cualmostrar').hide(1000);
                $('#c8p7cual').val('98');
                $('#c8p7cualdiv').removeClass(' has-error');
  
            }
        }
    validarcuadrosc8p7(divcompleto,campos);
}

function validarcuadrosc8p7(divcuadro,ncampos)
{
    //alert($('#' + divcuadro).find('input').prop('checked', true).length);
    //alert($('.has-error').length);
    //alert(ncampos + ' ncampos');
    
    if ($('#c8p7cual').val() != '')
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

    validarcuadrosc8p7(div,ncampos);

}
</script>
</html>