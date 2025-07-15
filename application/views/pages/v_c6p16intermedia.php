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
<!--        <input type="text" class="form-control input-sm" id="c6menores18" name="c6menores18" style="display:none"     value="<?php echo($arrayrespuestas['ec6menores18']); ?>">-->
<!--        <input type="text" class="form-control input-sm" id="c1p13" name="c1p13" style="display:none"     value="<?php echo($arrayrespuestas['ec1p13']); ?>">-->
        <!--fin para imprimir el folio y llevarlo-->
<hr>
       <form class="form-group" name="formulario" id="formulario">

<!--Check varias selecciones -->
    <div class="row">
        <div id="c6p16intermediadiv" name="c6p16intermediadiv" class="form-group col-md-12 form-group-sm">
        <div id="c6p16intermediao0div" class="has-error">
        <label class="control-label">16. ¿Cuáles son las principales fuentes por las que su hogar consigue los alimentos? Opcion multiple
                     <button type="button" id="vayuda" name="vayuda" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModal">
                        <span class="glyphicon glyphicon-question-sign" aria-hidden="true"></span> Ayuda
                    </button>       
        </label>
        </div>
        <div id="c6p16intermediao1div" <?php if($arrayrespuestas['ec6p16intermediao1']=='' || $arrayrespuestas['ec6p16intermediao1']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
            <label> <!--en este caso se manda a la fincion javascript el nombre del campo-->
              <input type="checkbox" name="c6p16intermediao1" id="c6p16intermediao1" onclick="cambiarsinoc6p16intermedia('SI','c6p16intermediao1','c6p16intermediao1div','c6p16intermediadiv',10);" <?php if($arrayrespuestas['ec6p16intermediao1']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            Compra
            </label>
        </div>
        </div>
        <div id="c6p16intermediao2div" <?php if($arrayrespuestas['ec6p16intermediao2']=='' || $arrayrespuestas['ec6p16intermediao2']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="c6p16intermediao2" id="c6p16intermediao2" onclick="cambiarsinoc6p16intermedia('SI','c6p16intermediao2','c6p16intermediao2div','c6p16intermediadiv',10);" <?php if($arrayrespuestas['ec6p16intermediao2']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            Programas de complementación alimentaria
          </label>
        </div>
        </div>
        <div id="c6p16intermediao3div" <?php if($arrayrespuestas['ec6p16intermediao3']==''|| $arrayrespuestas['ec6p16intermediao3']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="c6p16intermediao3" id="c6p16intermediao3" onclick="cambiarsinoc6p16intermedia('SI','c6p16intermediao3','c6p16intermediao3div','c6p16intermediadiv',10);" <?php if($arrayrespuestas['ec6p16intermediao3']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            Subsidios
          </label>
        </div>
        </div>  
         
       <div id="c6p16intermediao4div" <?php if($arrayrespuestas['ec6p16intermediao4']==''|| $arrayrespuestas['ec6p16intermediao4']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="c6p16intermediao4" id="c6p16intermediao4" onclick="cambiarsinoc6p16intermedia('SI','c6p16intermediao4','c6p16intermediao4div','c6p16intermediadiv',10);" <?php if($arrayrespuestas['ec6p16intermediao4']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            Huertas
          </label>
        </div>
        </div>
        <div id="c6p16intermediao5div" <?php if($arrayrespuestas['ec6p16intermediao5']==''|| $arrayrespuestas['ec6p16intermediao5']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="c6p16intermediao5" id="c6p16intermediao5" onclick="cambiarsinoc6p16intermedia('SI','c6p16intermediao5','c6p16intermediao5div','c6p16intermediadiv',10);" <?php if($arrayrespuestas['ec6p16intermediao5']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            Apoyo familiar
          </label>
        </div>
        </div>
        <div id="c6p16intermediao6div" <?php if($arrayrespuestas['ec6p16intermediao6']==''|| $arrayrespuestas['ec6p16intermediao6']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="c6p16intermediao6" id="c6p16intermediao6" onclick="cambiarsinoc6p16intermedia('SI','c6p16intermediao6','c6p16intermediao6div','c6p16intermediadiv',10);" <?php if($arrayrespuestas['ec6p16intermediao6']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            Trueque (intercambio de alimentos)
          </label>
        </div>
        </div>
        <div id="c6p16intermediao7div" <?php if($arrayrespuestas['ec6p16intermediao7']==''|| $arrayrespuestas['ec6p16intermediao7']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="c6p16intermediao7" id="c6p16intermediao7" onclick="cambiarsinoc6p16intermedia('SI','c6p16intermediao7','c6p16intermediao7div','c6p16intermediadiv',10);" <?php if($arrayrespuestas['ec6p16intermediao7']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            Apoyo comunitario
          </label>
        </div>
        </div>
        <div id="c6p16intermediao8div" <?php if($arrayrespuestas['ec6p16intermediao8']==''|| $arrayrespuestas['ec6p16intermediao8']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="c6p16intermediao8" id="c6p16intermediao8" onclick="cambiarsinoc6p16intermedia('SI','c6p16intermediao8','c6p16intermediao8div','c6p16intermediadiv',10);" <?php if($arrayrespuestas['ec6p16intermediao8']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            Recorrido
          </label>
        </div>
        </div>
        <div id="c6p16intermediao9div" <?php if($arrayrespuestas['ec6p16intermediao9']==''|| $arrayrespuestas['ec6p16intermediao9']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="c6p16intermediao9" id="c6p16intermediao9" onclick="cambiarsinoc6p16intermedia('SI','c6p16intermediao9','c6p16intermediao9div','c6p16intermediadiv',10);" <?php if($arrayrespuestas['ec6p16intermediao9']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            Ninguna
          </label>
        </div>
        </div>
         <div id="c6p16intermediao10div" <?php if($arrayrespuestas['ec6p16intermediao10']==''|| $arrayrespuestas['ec6p16intermediao10']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="c6p16intermediao10" id="c6p16intermediao10" onclick="cambiarsinoc6p16intermedia('SI','c6p16intermediao10','c6p16intermediao10div','c6p16intermediadiv',10);" <?php if($arrayrespuestas['ec6p16intermediao10']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            Otros:
          </label>
        </div>
        </div> 
        <div class="row" id="c6p16intermediacualmostrar" name="c6p16intermediacualmostrar" <?php if($arrayrespuestas['ec6p16intermediao10']== 'NO'||$arrayrespuestas['ec6p16intermediao10']== ''){echo('style="display:none"');}else{echo('');}  ?> >
            <div  id="c6p16intermediacualdiv" name="c6p16intermediacualdiv" class="form-group col-md-3">
                       <label class="control-label">Cual?</label>
                       <input type="text" class="form-control text-uppercase" id="c6p16intermediacual" onkeypress="return soloLetras(event)"  onchange="validarcampotexcuadros('c6p16intermediacualdiv','c6p16intermediacual','10')" name="c6p16intermediacual"   placeholder="Cual?" value="<?php if($arrayrespuestas['ec6p16intermediacual'] == ''){echo('0');}else{ echo($arrayrespuestas['ec6p16intermediacual']);} ?>">
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
            <?php if($arrayrespuestas['ec6p16intermediao1']=="" & $arrayrespuestas['ec6p16intermediao2']=="" & $arrayrespuestas['ec6p16intermediao3']==""& $arrayrespuestas['ec6p16intermediao4']==""& $arrayrespuestas['ec6p16intermediao5']==""
                     & $arrayrespuestas['ec6p16intermediao6']==""& $arrayrespuestas['ec6p16intermediao7']==""& $arrayrespuestas['ec6p16intermediao8']==""& $arrayrespuestas['ec6p16intermediao9']==""& $arrayrespuestas['ec6p16intermediao10']=="")
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
///////////////////////////////////////Funciones que llaman al controlador para guardar y actualizar////////////////////////////////////////////////////////////////////////    
    $(document).ready(function()
    {

        $("#guardar").click(function ()
        {
                        $.ajax({
                          url: "fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),
                          vc6p16intermediao1 : $('#c6p16intermediao1').val(),
                          vc6p16intermediao2 : $('#c6p16intermediao2').val(),
                          vc6p16intermediao3 : $('#c6p16intermediao3').val(),
                          vc6p16intermediao4 : $('#c6p16intermediao4').val(),
                          vc6p16intermediao5 : $('#c6p16intermediao5').val(),
                          vc6p16intermediao6 : $('#c6p16intermediao6').val(),
                          vc6p16intermediao7 : $('#c6p16intermediao7').val(),
                          vc6p16intermediao8 : $('#c6p16intermediao8').val(),
                          vc6p16intermediao9 : $('#c6p16intermediao9').val(),
                          vc6p16intermediao10 : $('#c6p16intermediao10').val(),
                          vc6p16intermediacual : $('#c6p16intermediacual').val()},    
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
                          vc6p16intermediao1 : $('#c6p16intermediao1').val(),
                          vc6p16intermediao2 : $('#c6p16intermediao2').val(),
                          vc6p16intermediao3 : $('#c6p16intermediao3').val(),
                          vc6p16intermediao4 : $('#c6p16intermediao4').val(),
                          vc6p16intermediao5 : $('#c6p16intermediao5').val(),
                          vc6p16intermediao6 : $('#c6p16intermediao6').val(),
                          vc6p16intermediao7 : $('#c6p16intermediao7').val(),
                          vc6p16intermediao8 : $('#c6p16intermediao8').val(),
                          vc6p16intermediao9 : $('#c6p16intermediao9').val(),
                          vc6p16intermediao10 : $('#c6p16intermediao10').val(),
                          vc6p16intermediacual : $('#c6p16intermediacual').val()}, 
                          dataType: "html",
                          success : function(obj){                      
                          botonactualizar();
                          }
                        });                   
        });
        

        $("#siguiente").click(function ()
        {
         botonsiguiente();
         location.href = "../c_c6p17intermedia/fc_c6p17intermedia?folio=" + $('#folio').val();                    

        });
              
        $("#anterior").click(function ()
        {
            location.href = "../c_c6p15intermedia/fc_c6p15intermedia?folio=" + $('#folio').val();                          
            
//          if($('#c6menores18').val() === '2')
//       {
//        location.href = "../c_c6menores18/fc_c6menores18?folio=" + $('#folio').val()+ "&idintegrante="+"&idintegrante=0";                   
//       }
//       else if($('#c6menores18').val() === '1' && $('#c1p13').val() !== 'c1p13o14' )
//       {
//        location.href = "../c_c6menores18/fc_c6menores18?folio=" + $('#folio').val()+ "&idintegrante="+"&idintegrante=0";                         
//       }
//       else
//       {
//        location.href = "../c_c6p15intermedia/fc_c6p15intermedia?folio=" + $('#folio').val();                          
//       }
        });

//para cargar variables capitulo, pregunta,encuestador,vivienda,barra
cargardatosgenerales('<?php echo($arraydatosgenerales['ecapitulo']); ?>','Pregunta 16 de 19','<?php echo($arraydatosgenerales['enomcoges']); ?>','<?php echo($arraydatosgenerales['etitular']); ?>','80');
//control del boton ayuda
botonayuda();

});
//dea aca para abajo es logica de cuadros
function cambiarsinoc6p16intermedia(opcion,campoval,divcampo,divcompleto,campos)
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
    if(campoval == 'c6p16intermediao10')
        {
            if($('#' + campoval).val() == 'SI')
            {
                //alert('aca lo muestra');
                $('#c6p16intermediacualmostrar').show(1000);
                $('#c6p16intermediacual').val('');
                $('#c6p16intermediacualdiv').addClass(' has-error');            

            }
            else
            {
                //alert('aca lo oculta');
                $('#c6p16intermediacualmostrar').hide(1000);
                $('#c6p16intermediacual').val('98');
                $('#c6p16intermediacualdiv').removeClass(' has-error');
  
            }
        }
        
        if(campoval == 'c6p16intermediao9')
           {
            if($('#' + campoval).val() == 'SI')
            {
              $('#c6p16intermediao1').prop('checked' , false);
              $('#c6p16intermediao1div').addClass(' has-error');
              $('#c6p16intermediao2').prop('checked' , false);
              $('#c6p16intermediao2div').addClass(' has-error');
              $('#c6p16intermediao3').prop('checked' , false);
              $('#c6p16intermediao3div').addClass(' has-error');
              $('#c6p16intermediao4').prop('checked' , false);
              $('#c6p16intermediao4div').addClass(' has-error');
              $('#c6p16intermediao5').prop('checked' , false);
              $('#c6p16intermediao5div').addClass(' has-error');
              $('#c6p16intermediao6').prop('checked' , false);
              $('#c6p16intermediao6div').addClass(' has-error');
              $('#c6p16intermediao7').prop('checked' , false);
              $('#c6p16intermediao7div').addClass(' has-error');
              $('#c6p16intermediao8').prop('checked' , false);
              $('#c6p16intermediao8div').addClass(' has-error');
              $('#c6p16intermediao10').prop('checked' , false);
              $('#c6p16intermediao10div').addClass(' has-error');
              
              $('#c6p16intermediacualmostrar').hide(1000);
              $('#c6p16intermediacual').val('98');
                            
              $('#c6p16intermediao1').val('NO');
              $('#c6p16intermediao2').val('NO');
              $('#c6p16intermediao3').val('NO');
              $('#c6p16intermediao4').val('NO');
              $('#c6p16intermediao5').val('NO');
              $('#c6p16intermediao6').val('NO');
              $('#c6p16intermediao7').val('NO');
              $('#c6p16intermediao8').val('NO');
              $('#c6p16intermediao10').val('NO');
              }
}
        else
       {
          $('#c6p16intermediao9').prop('checked' , false); 
          $('#c6p16intermediao9').val('NO');
          $('#c6p16intermediao9div').addClass(' has-error');
      }
      validarcuadrosc6p16intermedia(divcompleto,campos);
}
function validarcuadrosc6p16intermedia(divcuadro,ncampos)
{
    //alert($('#' + divcuadro).find('input').prop('checked', true).length);
    //alert($('.has-error').length);
    //alert(ncampos + ' ncampos');
    
    if ($('#c6p16intermediacual').val() != '')
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

    validarcuadrosc6p16intermedia(div,ncampos);
}
</script>
</html>