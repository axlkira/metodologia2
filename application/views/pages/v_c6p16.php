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
        <input type="text" class="form-control input-sm" id="c6menores18" name="c6menores18" style="display:none"     value="<?php echo($arrayrespuestas['ec6menores18']); ?>">
        <input type="text" class="form-control input-sm" id="c1p13" name="c1p13" style="display:none"     value="<?php echo($arrayrespuestas['ec1p13']); ?>">
        <!--fin para imprimir el folio y llevarlo-->
<hr>
       <form class="form-group" name="formulario" id="formulario">

<!--Check varias selecciones -->
    <div class="row">
        <div id="c6p16div" name="c6p16div" class="form-group col-md-12 form-group-sm">
        <div id="c6p16o0div" class="has-error">
        <label class="control-label">16. ¿Cuáles son las principales fuentes por las que su hogar consigue los alimentos? Opcion multiple
                     <button type="button" id="vayuda" name="vayuda" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModal">
                        <span class="glyphicon glyphicon-question-sign" aria-hidden="true"></span> Ayuda
                    </button>       
        </label>
        </div>
        <div id="c6p16o1div" <?php if($arrayrespuestas['ec6p16o1']=='' || $arrayrespuestas['ec6p16o1']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
            <label> <!--en este caso se manda a la fincion javascript el nombre del campo-->
              <input type="checkbox" name="c6p16o1" id="c6p16o1" onclick="cambiarsinoc6p16('SI','c6p16o1','c6p16o1div','c6p16div',10);" <?php if($arrayrespuestas['ec6p16o1']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            Compra
            </label>
        </div>
        </div>
        <div id="c6p16o2div" <?php if($arrayrespuestas['ec6p16o2']=='' || $arrayrespuestas['ec6p16o2']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="c6p16o2" id="c6p16o2" onclick="cambiarsinoc6p16('SI','c6p16o2','c6p16o2div','c6p16div',10);" <?php if($arrayrespuestas['ec6p16o2']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            Programas de complementación alimentaria
          </label>
        </div>
        </div>
        <div id="c6p16o3div" <?php if($arrayrespuestas['ec6p16o3']==''|| $arrayrespuestas['ec6p16o3']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="c6p16o3" id="c6p16o3" onclick="cambiarsinoc6p16('SI','c6p16o3','c6p16o3div','c6p16div',10);" <?php if($arrayrespuestas['ec6p16o3']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            Subsidios
          </label>
        </div>
        </div>  
         
       <div id="c6p16o4div" <?php if($arrayrespuestas['ec6p16o4']==''|| $arrayrespuestas['ec6p16o4']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="c6p16o4" id="c6p16o4" onclick="cambiarsinoc6p16('SI','c6p16o4','c6p16o4div','c6p16div',10);" <?php if($arrayrespuestas['ec6p16o4']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            Huertas
          </label>
        </div>
        </div>
        <div id="c6p16o5div" <?php if($arrayrespuestas['ec6p16o5']==''|| $arrayrespuestas['ec6p16o5']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="c6p16o5" id="c6p16o5" onclick="cambiarsinoc6p16('SI','c6p16o5','c6p16o5div','c6p16div',10);" <?php if($arrayrespuestas['ec6p16o5']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            Apoyo familiar
          </label>
        </div>
        </div>
        <div id="c6p16o6div" <?php if($arrayrespuestas['ec6p16o6']==''|| $arrayrespuestas['ec6p16o6']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="c6p16o6" id="c6p16o6" onclick="cambiarsinoc6p16('SI','c6p16o6','c6p16o6div','c6p16div',10);" <?php if($arrayrespuestas['ec6p16o6']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            Trueque (intercambio de alimentos)
          </label>
        </div>
        </div>
        <div id="c6p16o7div" <?php if($arrayrespuestas['ec6p16o7']==''|| $arrayrespuestas['ec6p16o7']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="c6p16o7" id="c6p16o7" onclick="cambiarsinoc6p16('SI','c6p16o7','c6p16o7div','c6p16div',10);" <?php if($arrayrespuestas['ec6p16o7']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            Apoyo comunitario
          </label>
        </div>
        </div>
        <div id="c6p16o8div" <?php if($arrayrespuestas['ec6p16o8']==''|| $arrayrespuestas['ec6p16o8']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="c6p16o8" id="c6p16o8" onclick="cambiarsinoc6p16('SI','c6p16o8','c6p16o8div','c6p16div',10);" <?php if($arrayrespuestas['ec6p16o8']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            Recorrido
          </label>
        </div>
        </div>
        <div id="c6p16o9div" <?php if($arrayrespuestas['ec6p16o9']==''|| $arrayrespuestas['ec6p16o9']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="c6p16o9" id="c6p16o9" onclick="cambiarsinoc6p16('SI','c6p16o9','c6p16o9div','c6p16div',10);" <?php if($arrayrespuestas['ec6p16o9']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            Ninguna
          </label>
        </div>
        </div>
         <div id="c6p16o10div" <?php if($arrayrespuestas['ec6p16o10']==''|| $arrayrespuestas['ec6p16o10']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="c6p16o10" id="c6p16o10" onclick="cambiarsinoc6p16('SI','c6p16o10','c6p16o10div','c6p16div',10);" <?php if($arrayrespuestas['ec6p16o10']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            Otros:
          </label>
        </div>
        </div> 
        <div class="row" id="c6p16cualmostrar" name="c6p16cualmostrar" <?php if($arrayrespuestas['ec6p16o10']== 'NO'||$arrayrespuestas['ec6p16o10']== ''){echo('style="display:none"');}else{echo('');}  ?> >
            <div  id="c6p16cualdiv" name="c6p16cualdiv" class="form-group col-md-3">
                       <label class="control-label">Cual?</label>
                       <input type="text" class="form-control text-uppercase" id="c6p16cual" onkeypress="return soloLetras(event)"  onchange="validarcampotexcuadros('c6p16cualdiv','c6p16cual','10')" name="c6p16cual"   placeholder="Cual?" value="<?php if($arrayrespuestas['ec6p16cual'] == ''){echo('0');}else{ echo($arrayrespuestas['ec6p16cual']);} ?>">
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
            <?php if($arrayrespuestas['ec6p16o1']=="" & $arrayrespuestas['ec6p16o2']=="" & $arrayrespuestas['ec6p16o3']==""& $arrayrespuestas['ec6p16o4']==""& $arrayrespuestas['ec6p16o5']==""
                     & $arrayrespuestas['ec6p16o6']==""& $arrayrespuestas['ec6p16o7']==""& $arrayrespuestas['ec6p16o8']==""& $arrayrespuestas['ec6p16o9']==""& $arrayrespuestas['ec6p16o10']=="")
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
                          vc6p16o1 : $('#c6p16o1').val(),
                          vc6p16o2 : $('#c6p16o2').val(),
                          vc6p16o3 : $('#c6p16o3').val(),
                          vc6p16o4 : $('#c6p16o4').val(),
                          vc6p16o5 : $('#c6p16o5').val(),
                          vc6p16o6 : $('#c6p16o6').val(),
                          vc6p16o7 : $('#c6p16o7').val(),
                          vc6p16o8 : $('#c6p16o8').val(),
                          vc6p16o9 : $('#c6p16o9').val(),
                          vc6p16o10 : $('#c6p16o10').val(),
                          vc6p16cual : $('#c6p16cual').val()},    
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
                          vc6p16o1 : $('#c6p16o1').val(),
                          vc6p16o2 : $('#c6p16o2').val(),
                          vc6p16o3 : $('#c6p16o3').val(),
                          vc6p16o4 : $('#c6p16o4').val(),
                          vc6p16o5 : $('#c6p16o5').val(),
                          vc6p16o6 : $('#c6p16o6').val(),
                          vc6p16o7 : $('#c6p16o7').val(),
                          vc6p16o8 : $('#c6p16o8').val(),
                          vc6p16o9 : $('#c6p16o9').val(),
                          vc6p16o10 : $('#c6p16o10').val(),
                          vc6p16cual : $('#c6p16cual').val()}, 
                          dataType: "html",
                          success : function(obj){                      
                          botonactualizar();
                          }
                        });                   
        });
        

        $("#siguiente").click(function ()
        {
         botonsiguiente();
         location.href = "../c_c6p17/fc_c6p17?folio=" + $('#folio').val();                    

        });
              
        $("#anterior").click(function ()
        {
            
          if($('#c6menores18').val() === '2')
       {
        location.href = "../c_c6menores18/fc_c6menores18?folio=" + $('#folio').val()+ "&idintegrante="+"&idintegrante=0";                   
       }
       else if($('#c6menores18').val() === '1' && $('#c1p13').val() !== 'c1p13o14' )
       {
        location.href = "../c_c6menores18/fc_c6menores18?folio=" + $('#folio').val()+ "&idintegrante="+"&idintegrante=0";                         
       }
       else
       {
        location.href = "../c_c6p15/fc_c6p15?folio=" + $('#folio').val();                          
       }
        });

//para cargar variables capitulo, pregunta,encuestador,vivienda,barra
cargardatosgenerales('<?php echo($arraydatosgenerales['ecapitulo']); ?>','Pregunta 16 de 19','<?php echo($arraydatosgenerales['enomcoges']); ?>','<?php echo($arraydatosgenerales['etitular']); ?>','80');
//control del boton ayuda
botonayuda();

});
//dea aca para abajo es logica de cuadros
function cambiarsinoc6p16(opcion,campoval,divcampo,divcompleto,campos)
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
    if(campoval == 'c6p16o10')
        {
            if($('#' + campoval).val() == 'SI')
            {
                //alert('aca lo muestra');
                $('#c6p16cualmostrar').show(1000);
                $('#c6p16cual').val('');
                $('#c6p16cualdiv').addClass(' has-error');            

            }
            else
            {
                //alert('aca lo oculta');
                $('#c6p16cualmostrar').hide(1000);
                $('#c6p16cual').val('98');
                $('#c6p16cualdiv').removeClass(' has-error');
  
            }
        }
        
        if(campoval == 'c6p16o9')
           {
            if($('#' + campoval).val() == 'SI')
            {
              $('#c6p16o1').prop('checked' , false);
              $('#c6p16o1div').addClass(' has-error');
              $('#c6p16o2').prop('checked' , false);
              $('#c6p16o2div').addClass(' has-error');
              $('#c6p16o3').prop('checked' , false);
              $('#c6p16o3div').addClass(' has-error');
              $('#c6p16o4').prop('checked' , false);
              $('#c6p16o4div').addClass(' has-error');
              $('#c6p16o5').prop('checked' , false);
              $('#c6p16o5div').addClass(' has-error');
              $('#c6p16o6').prop('checked' , false);
              $('#c6p16o6div').addClass(' has-error');
              $('#c6p16o7').prop('checked' , false);
              $('#c6p16o7div').addClass(' has-error');
              $('#c6p16o8').prop('checked' , false);
              $('#c6p16o8div').addClass(' has-error');
              $('#c6p16o10').prop('checked' , false);
              $('#c6p16o10div').addClass(' has-error');
              
              $('#c6p16cualmostrar').hide(1000);
              $('#c6p16cual').val('98');
                            
              $('#c6p16o1').val('NO');
              $('#c6p16o2').val('NO');
              $('#c6p16o3').val('NO');
              $('#c6p16o4').val('NO');
              $('#c6p16o5').val('NO');
              $('#c6p16o6').val('NO');
              $('#c6p16o7').val('NO');
              $('#c6p16o8').val('NO');
              $('#c6p16o10').val('NO');
              }
}
        else
       {
          $('#c6p16o9').prop('checked' , false); 
          $('#c6p16o9').val('NO');
          $('#c6p16o9div').addClass(' has-error');
      }
      validarcuadrosc6p16(divcompleto,campos);
}
function validarcuadrosc6p16(divcuadro,ncampos)
{
    //alert($('#' + divcuadro).find('input').prop('checked', true).length);
    //alert($('.has-error').length);
    //alert(ncampos + ' ncampos');
    
    if ($('#c6p16cual').val() != '')
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

    validarcuadrosc6p16(div,ncampos);
}
</script>
</html>