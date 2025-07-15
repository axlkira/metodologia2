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
        <div id="c9p37div" name="c9p37div" class="form-group col-md-12 form-group-sm">
        <div id="c9p37o0div" class="has-error">
            <label class="control-label">1. Observe e indague ¿Sí el niño, niña o adolecente realiza alguna de las siguientes actividades? (Selección multiple)
                     
                     <button type="button" id="vayuda" name="vayuda" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModal">
                        <span class="glyphicon glyphicon-question-sign" aria-hidden="true"></span> Ayuda
                     </button>   <br><br>
            </label>
        </div>
       
        <div id="c9p37o1div" <?php if($arrayrespuestas['ec9p37o1']=='' || $arrayrespuestas['ec9p37o1']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="c9p37o1" id="c9p37o1" onclick="cambiarsinoc9p37('SI','c9p37o1','c9p37o1div','c9p37div',12);" <?php if($arrayrespuestas['ec9p37o1']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            Trabajo doméstico (En vivienda diferente a la suya)  
          </label>
        </div>
        </div>
        <div id="c9p37o2div" <?php if($arrayrespuestas['ec9p37o2']==''|| $arrayrespuestas['ec9p37o2']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="c9p37o2" id="c9p37o2" onclick="cambiarsinoc9p37('SI','c9p37o2','c9p37o2div','c9p37div',12);" <?php if($arrayrespuestas['ec9p37o2']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
           Trabajo en minas
          </label>
        </div>
        </div>  
            
            <div id="c9p37o3div" <?php if($arrayrespuestas['ec9p37o3']==''|| $arrayrespuestas['ec9p37o3']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="c9p37o3" id="c9p37o3" onclick="cambiarsinoc9p37('SI','c9p37o3','c9p37o3div','c9p37div',12);" <?php if($arrayrespuestas['ec9p37o3']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
          Explotación sexual comercial
          </label>
        </div>
        </div>  
            
            <div id="c9p37o4div" <?php if($arrayrespuestas['ec9p37o4']==''|| $arrayrespuestas['ec9p37o4']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="c9p37o4" id="c9p37o4" onclick="cambiarsinoc9p37('SI','c9p37o4','c9p37o4div','c9p37div',12);" <?php if($arrayrespuestas['ec9p37o4']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
           Reclutamiento para el conflicto armado
          </label>
        </div>
        </div>  
            
        <div id="c9p37o5div" <?php if($arrayrespuestas['ec9p37o5']==''|| $arrayrespuestas['ec9p37o5']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="c9p37o5" id="c9p37o5" onclick="cambiarsinoc9p37('SI','c9p37o5','c9p37o5div','c9p37div',12);" <?php if($arrayrespuestas['ec9p37o5']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
           Producción y micro tráfico de estupefacientes 
         </label>
        </div>
        </div>
            
            <div id="c9p37o6div" <?php if($arrayrespuestas['ec9p37o6']==''|| $arrayrespuestas['ec9p37o6']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="c9p37o6" id="c9p37o6" onclick="cambiarsinoc9p37('SI','c9p37o6','c9p37o6div','c9p37div',12);" <?php if($arrayrespuestas['ec9p37o6']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            Ventas ambulantes
         </label>
        </div>
        </div>
            <div id="c9p37o7div" <?php if($arrayrespuestas['ec9p37o7']==''|| $arrayrespuestas['ec9p37o7']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="c9p37o7" id="c9p37o7" onclick="cambiarsinoc9p37('SI','c9p37o7','c9p37o7div','c9p37div',12);" <?php if($arrayrespuestas['ec9p37o7']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
             Reciclaje
         </label>
        </div>
        </div>
            <div id="c9p37o8div" <?php if($arrayrespuestas['ec9p37o8']==''|| $arrayrespuestas['ec9p37o8']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="c9p37o8" id="c9p37o8" onclick="cambiarsinoc9p37('SI','c9p37o8','c9p37o8div','c9p37div',12);" <?php if($arrayrespuestas['ec9p37o8']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            Trabajo en calle
         </label>
        </div>
        </div>
            <div id="c9p37o9div" <?php if($arrayrespuestas['ec9p37o9']==''|| $arrayrespuestas['ec9p37o9']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="c9p37o9" id="c9p37o9" onclick="cambiarsinoc9p37('SI','c9p37o9','c9p37o9div','c9p37div',12);" <?php if($arrayrespuestas['ec9p37o9']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            Mendicidad
         </label>
        </div>
        </div>
            <div id="c9p37o10div" <?php if($arrayrespuestas['ec9p37o10']==''|| $arrayrespuestas['ec9p37o10']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" onclick="modal1207()" name="c9p37o10" id="c9p37o10" onclick="cambiarsinoc9p37('SI','c9p37o10','c9p37o10div','c9p37div',12);" <?php if($arrayrespuestas['ec9p37o10']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            Otra, Cual?
         </label>
        </div>
        </div>
                        <div id="c9p37o11div" <?php if($arrayrespuestas['ec9p37o11']==''|| $arrayrespuestas['ec9p37o11']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="c9p37o11" id="c9p37o11" onclick="cambiarsinoc9p37('SI','c9p37o11','c9p37o11div','c9p37div',12);" <?php if($arrayrespuestas['ec9p37o11']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            Ninguna 
         </label>
        </div>
        </div>
         
        <div class="row" id="c9p37cualmostrar" name="c9p37cualmostrar" <?php if($arrayrespuestas['ec9p37o10']== 'NO'||$arrayrespuestas['ec9p37o10']== ''){echo('style="display:none"');}else{echo('');}  ?> >
        <div  id="c9p37cualdiv" name="c9p37cualdiv" class="form-group col-md-3">
                       <label class="control-label">Cual?</label>
                       <input type="text" class="form-control text-uppercase" id="c9p37cual" onkeypress="return soloLetras(event)"  onchange="validarcuadrosc9p37('c9p37cualdiv','12')" name="c9p37cual"   placeholder="Cual?" value="<?php if($arrayrespuestas['ec9p37cual'] == ''){}else{ echo($arrayrespuestas['ec9p37cual']);} ?>">
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
            <?php if( $arrayrespuestas['ec9p37o2']=="" & $arrayrespuestas['ec9p37o3']=="" & $arrayrespuestas['ec9p37o4']==""& $arrayrespuestas['ec9p37cual']=="")
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
    
    <div class="modal fade" id="modal1207" data-backdrop="static" >
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
<!--          <span aria-hidden="true">&times;</span>-->
        </button>
      </div>
      <div class="modal-body">
        <p>Esta opción se elige si la actividad a registrar indica trabajo infantil</p>
      </div>
      <div class="modal-footer">
          <button type="button" id="conti" class="btn btn-primary" data-dismiss="modal">Continuar</button>
          <button type="button" id="cancel" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
      </div>
    </div>
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
  
   
    
    function modal1207() 
{
$('#modal1207').modal();
}  
    
    $(document).ready(function()
    {
        
//        $("#continuar1207").click(function ()
//        {
//                        document.getElementById('c9p37o10').checked  = true;         
//        });
        $("#conti").click(function ()
        {
                     if(document.getElementById('c9p37o10').checked){
                         $('#c9p37cualmostrar').show();
                         $('#c9p37cual').val('');
                              }else{
                         $('#c9p37cualmostrar').hide();
                         $('#c9p37cual').val('98');
                     }         
                        
        });
        
         $("#cancel").click(function ()
        {
                        document.getElementById('c9p37o10').checked = false;         
                        $('#c9p37cualmostrar').hide();
        });
        

        $("#guardar").click(function ()
        {
                        $.ajax({
                          url: "fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),vidintegrante : $('#idintegrante').val(), vc9p37o1 : $('#c9p37o1').val(), vc9p37o2 : $('#c9p37o2').val(),
                          vc9p37o3 : $('#c9p37o3').val(), vc9p37o4 : $('#c9p37o4').val(), vc9p37o5 : $('#c9p37o5').val(), vc9p37o6 : $('#c9p37o6').val(),
                          vc9p37o7 : $('#c9p37o7').val(), vc9p37o8 : $('#c9p37o8').val(), vc9p37o9 : $('#c9p37o9').val(), vc9p37o10 : $('#c9p37o10').val(), vc9p37o11 : $('#c9p37o11').val(),vc9p37cual : $('#c9p37cual').val()},    
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
                          data: {vfolio : $('#folio').val(),vidintegrante : $('#idintegrante').val(), vc9p37o1 : $('#c9p37o1').val(), vc9p37o2 : $('#c9p37o2').val(),
                          vc9p37o3 : $('#c9p37o3').val(), vc9p37o4 : $('#c9p37o4').val(), vc9p37o5 : $('#c9p37o5').val(), vc9p37o6 : $('#c9p37o6').val(),
                          vc9p37o7 : $('#c9p37o7').val(), vc9p37o8 : $('#c9p37o8').val(), vc9p37o9 : $('#c9p37o9').val(), vc9p37o10 : $('#c9p37o10').val(),vc9p37o11 : $('#c9p37o11').val(),vc9p37cual : $('#c9p37cual').val()},    
                          dataType: "html",
                          success : function(obj){                      
                          botonguardar();
                          }
                        });                    
        });
        
        $("#siguiente").click(function ()
        {
         botonsiguiente();
         location.href = "../c_c9p38/fc_c9p38?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    

        });
              
        $("#anterior").click(function ()
        {
         botonanterior();
         location.href = "../c_capitulosintegrante/fc_capitulosintegrante?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                   
        
        });



cargardatosgenerales('<?php echo($arraydatosgenerales['ecapitulo']); ?>','Pregunta 1 de 7','<?php echo($arraydatosgenerales['enomcoges']); ?>','<?php echo($arraydatosgenerales['enombreintegrante']." "." - "." "."Sexo:"." ".$arraydatosgenerales['esexointegrante']."   "."  -  "."   "."Edad:"."   ".$arraydatosgenerales['eedadintegrante']); ?>','15');
//control del boton ayuda
botonayuda();

});


//dea aca para abajo es logica de cuadros
function cambiarsinoc9p37(opcion,campoval,divcampo,divcompleto,campos,mostrar)
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
    if(campoval == 'c9p37o10')
        {
            if($('#' + campoval).val() == 'SI')
            {
                //alert('aca lo muestra');
                $('#c9p37cualmostrar').show(1000);
                $('#c9p37cual').val('');
                $('#c9p37cualdiv').addClass(' has-error');            

            }
            else
            {
                //alert('aca lo oculta');
                $('#c9p37cualmostrar').hide(1000);
                $('#c9p37cual').val('98');
                $('#c9p37cualdiv').removeClass(' has-error');
  
            }
        }
       if(campoval == 'c9p37o11')
           {
            if($('#' + campoval).val() == 'SI')
            {
              $('#c9p37o1').prop('checked' , false);
              $('#c9p37o1div').addClass(' has-error');
              $('#c9p37o2').prop('checked' , false);
              $('#c9p37o2div').addClass(' has-error');
              $('#c9p37o3').prop('checked' , false);
              $('#c9p37o3div').addClass(' has-error');
              $('#c9p37o4').prop('checked' , false);
              $('#c9p37o4div').addClass(' has-error');
              $('#c9p37o5').prop('checked' , false);
              $('#c9p37o5div').addClass(' has-error');
              $('#c9p37o6').prop('checked' , false);
              $('#c9p37o6div').addClass(' has-error');
              $('#c9p37o7').prop('checked' , false);
              $('#c9p37o7div').addClass(' has-error');
              $('#c9p37o8').prop('checked' , false);
              $('#c9p37o8div').addClass(' has-error');
              $('#c9p37o9').prop('checked' , false);
              $('#c9p37o9div').addClass(' has-error');
              $('#c9p37o10').prop('checked' , false);
              $('#c9p37o10div').addClass(' has-error');
              
              $('#c9p37cualmostrar').hide(1000);
              $('#c9p37cual').val('98');
                            
              $('#c9p37o1').val('NO');
              $('#c9p37o2').val('NO');
              $('#c9p37o3').val('NO');
              $('#c9p37o4').val('NO');
              $('#c9p37o5').val('NO');
              $('#c9p37o6').val('NO');
              $('#c9p37o7').val('NO');
              $('#c9p37o8').val('NO');
              $('#c9p37o9').val('NO');
              $('#c9p37o10').val('NO');
              
              }
}
        else
       {
          $('#c9p37o11').prop('checked' , false); 
          $('#c9p37o11').val('NO');
          $('#c9p37o11div').addClass(' has-error');
      }
        


      validarcuadrosc9p37(divcompleto,campos);
}

function validarcuadrosc9p37(divcuadro,ncampos)
{   
    
    //if ($('#c9p37cual').val() !== '')
    //{
        //|| $('#c3p2cualdiv')===('form-group col-md-10 form-group-sm has-error')
        
        if(document.getElementById('c9p37o10').checked && $('#c9p37cual').val() !== ''){
            
             $('#guardar').prop('disabled', false);
           $('#actualizar').prop('disabled', false);
           $('#cancelar').prop('disabled', true);
           $('#anterior').prop('disabled', false);
           $('#siguiente').prop('disabled', true);
            
        }else{
       
        if($('.has-error').length == (ncampos))
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
//    }
//    else
//    {
//           $('#guardar').prop('disabled', false);
//           $('#actualizar').prop('disabled', true);
//           $('#cancelar').prop('disabled', true);
//           $('#anterior').prop('disabled', false);
//           $('#siguiente').prop('disabled', true);        
//    }
}

function validarcampotexcuadros(div,campo,ncampos)
{
    validarbolitasytexto(div,campo);

    validarcuadrosc9p37(div,ncampos);
}


</script>
</html>