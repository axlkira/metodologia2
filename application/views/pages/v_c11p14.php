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
        <!--fin para imprimir el idintegrante y llevarlo-->
<hr>
        <form class="form-group" name="formulario" id="formulario">

            <!--inicio radio una sola seleccion-->
             <div class="row">
        <div id="c11p14div" name="c11p14div" class="form-group col-md-12 form-group-sm">
        <div id="c11p14o0div" class="has-error">
            <label class="control-label">14. ¿Por qué razón el integrante del hogar no participan? (MULTIPLE RESPUESTA)
                     
                     <button type="button" id="vayuda" name="vayuda" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModal">
                        <span class="glyphicon glyphicon-question-sign" aria-hidden="true"></span> Ayuda
                     </button>   <br><br>
            </label>
        </div>
       
        <div id="c11p14o1div" <?php if($arrayrespuestas['ec11p14o1']=='' || $arrayrespuestas['ec11p14o1']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="c11p14o1" id="c11p14o1" onclick="cambiarsinoc11p14('SI','c11p14o1','c11p14o1div','c11p14div',7);" <?php if($arrayrespuestas['ec11p14o1']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            Conoce los espacios en los que se podría vincular pero no le interesa 
          </label>
        </div>
        </div>
        <div id="c11p14o2div" <?php if($arrayrespuestas['ec11p14o2']==''|| $arrayrespuestas['ec11p14o2']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="c11p14o2" id="c11p14o2" onclick="cambiarsinoc11p14('SI','c11p14o2','c11p14o2div','c11p14div',7);" <?php if($arrayrespuestas['ec11p14o2']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
           No conoce espacios o grupos a los cuales se pueda vincular
          </label>
        </div>
        </div>  
            
            <div id="c11p14o3div" <?php if($arrayrespuestas['ec11p14o3']==''|| $arrayrespuestas['ec11p14o3']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="c11p14o3" id="c11p14o3" onclick="cambiarsinoc11p14('SI','c11p14o3','c11p14o3div','c11p14div',7);" <?php if($arrayrespuestas['ec11p14o3']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
          Desea vincularse pero no ha sido posible

          </label>
        </div>
        </div>  
            
            <div id="c11p14o4div" <?php if($arrayrespuestas['ec11p14o4']==''|| $arrayrespuestas['ec11p14o4']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="c11p14o4" id="c11p14o4" onclick="cambiarsinoc11p14('SI','c11p14o4','c11p14o4div','c11p14div',7);" <?php if($arrayrespuestas['ec11p14o4']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
           Le da temor
          </label>
        </div>
        </div>  
            
        <div id="c11p14o5div" <?php if($arrayrespuestas['ec11p14o5']==''|| $arrayrespuestas['ec11p14o5']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="c11p14o5" id="c11p14o5" onclick="cambiarsinoc11p14('SI','c11p14o5','c11p14o5div','c11p14div',7);" <?php if($arrayrespuestas['ec11p14o5']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
           No existen organizaciones
         </label>
        </div>
        </div>
            
            <div id="c11p14o6div" <?php if($arrayrespuestas['ec11p14o6']==''|| $arrayrespuestas['ec11p14o6']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="c11p14o6" id="c11p14o6" onclick="cambiarsinoc11p14('SI','c11p14o6','c11p14o6div','c11p14div',7);" <?php if($arrayrespuestas['ec11p14o6']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
           Otro. Cuál?
         </label>
        </div>
        </div>
         
        <div class="row" id="c11p14cualmostrar" name="c11p14cualmostrar" <?php if($arrayrespuestas['ec11p14o6']== 'NO'||$arrayrespuestas['ec11p14o6']== ''){echo('style="display:none"');}else{echo('');}  ?> >
        <div  id="c11p14cualdiv" name="c11p14cualdiv" class="form-group col-md-3">
                       <label class="control-label">Cual?</label>
                       <input type="text" class="form-control text-uppercase" id="c11p14cual" onkeypress="return soloLetras(event)"  onchange="validarcampotexcuadros('c11p14cualdiv','c11p14cual','7')" name="c11p14cual"   placeholder="Cual?" value="<?php if($arrayrespuestas['ec11p14cual'] == ''){echo('0');}else{ echo($arrayrespuestas['ec11p14cual']);} ?>">
        </div>
        </div>
       
            
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
            <?php if( $arrayrespuestas['ec11p14o2']=="" & $arrayrespuestas['ec11p14o3']=="" & $arrayrespuestas['ec11p14o4']==""& $arrayrespuestas['ec11p14cual']=="")
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
                          data: {vfolio : $('#folio').val(),vidintegrante : $('#idintegrante').val(), vc11p14o1 : $('#c11p14o1').val(), vc11p14o2 : $('#c11p14o2').val(),
                          vc11p14o3 : $('#c11p14o3').val(), vc11p14o4 : $('#c11p14o4').val(), vc11p14o5 : $('#c11p14o5').val(), vc11p14o6 : $('#c11p14o6').val(), vc11p14cual : $('#c11p14cual').val()},    
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
                          data: {vfolio : $('#folio').val(),vidintegrante : $('#idintegrante').val(), vc11p14o1 : $('#c11p14o1').val(), vc11p14o2 : $('#c11p14o2').val(),
                          vc11p14o3 : $('#c11p14o3').val(), vc11p14o4 : $('#c11p14o4').val(), vc11p14o5 : $('#c11p14o5').val(), vc11p14o6 : $('#c11p14o6').val(), vc11p14cual : $('#c11p14cual').val()},    
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
         location.href = "../c_c11p13/fc_c11p13?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
        
        });



cargardatosgenerales('<?php echo($arraydatosgenerales['ecapitulo']); ?>','Pregunta 14 de 15','<?php echo($arraydatosgenerales['enomcoges']); ?>','<?php echo($arraydatosgenerales['enombreintegrante']." "." - "." "."Sexo:"." ".$arraydatosgenerales['esexointegrante']."   "."  -  "."   "."Edad:"."   ".$arraydatosgenerales['eedadintegrante']); ?>','75');
//control del boton ayuda
botonayuda();

});


//dea aca para abajo es logica de cuadros
function cambiarsinoc11p14(opcion,campoval,divcampo,divcompleto,campos,mostrar)
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
    if(campoval == 'c11p14o6')
        {
            if($('#' + campoval).val() == 'SI')
            {
                //alert('aca lo muestra');
                $('#c11p14cualmostrar').show(1000);
                $('#c11p14cual').val('');
                $('#c11p14cualdiv').addClass(' has-error');            

            }
            else
            {
                //alert('aca lo oculta');
                $('#c11p14cualmostrar').hide(1000);
                $('#c11p14cual').val('98');
                $('#c11p14cualdiv').removeClass(' has-error');
  
            }
        }
       if(campoval == 'c11p14o5')
           {
            if($('#' + campoval).val() == 'SI')
            {
              $('#c11p14o1').prop('checked' , false);
              $('#c11p14o1div').addClass(' has-error');
              $('#c11p14o2').prop('checked' , false);
              $('#c11p14o2div').addClass(' has-error');
              $('#c11p14o3').prop('checked' , false);
              $('#c11p14o3div').addClass(' has-error');
              $('#c11p14o4').prop('checked' , false);
              $('#c11p14o4div').addClass(' has-error');
              $('#c11p14o6').prop('checked' , false);
              $('#c11p14o6div').addClass(' has-error');
              
              $('#c11p14cualmostrar').hide(1000);
              $('#c11p14cual').val('98');
                            
              $('#c11p14o1').val('NO');
              $('#c11p14o2').val('NO');
              $('#c11p14o3').val('NO');
              $('#c11p14o4').val('NO');
              $('#c11p14o6').val('NO');
              
              }
}
        else
       {
          $('#c11p14o5').prop('checked' , false); 
          $('#c11p14o5').val('NO');
          $('#c11p14o5div').addClass(' has-error');
      }
        


      validarcuadrosc11p14(divcompleto,campos);
}

function validarcuadrosc11p14(divcuadro,ncampos)
{
    
    if ($('#c11p14cual').val() != '')
    {
        //|| $('#c3p2cualdiv')===('form-group col-md-10 form-group-sm has-error')
        if($('.has-error').length === (ncampos))
        {   //alert('soniguales');
           $('#guardar').prop('disabled', true);
           $('#actualizar').prop('disabled', true);
           $('#cancelar').prop('disabled', true);
           $('#anterior').prop('disabled', false);
           $('#siguiente').prop('disabled', true);
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
           $('#siguiente').prop('disabled', true);        
    }
}

function validarcampotexcuadros(div,campo,ncampos)
{
    validarbolitasytexto(div,campo);

    validarcuadrosc11p14(div,ncampos);
}


</script>
</html>