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

           <!--Check varias selecciones -->
    <div class="row">
        <div id="c9p38div" name="c9p38div" class="form-group col-md-12 form-group-sm">
        <div id="c9p38o0div" class="has-error">
            <label class="control-label">2. Ayudas a tus padres, familiares o alguna otra persona a realizar algunas de las siguientes actividades: (Selección Múltiple)
                     
                     <button type="button" id="vayuda" name="vayuda" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModal">
                        <span class="glyphicon glyphicon-question-sign" aria-hidden="true"></span> Ayuda
                    </button>       
        </label>
        </div>
        <div id="c9p38o1div" <?php if($arrayrespuestas['ec9p38o1']=='' || $arrayrespuestas['ec9p38o1']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
            <label> <!--en este caso se manda a la fincion javascript el nombre del campo-->
              <input type="checkbox" name="c9p38o1" id="c9p38o1" onclick="cambiarsinoc9p38('SI','c9p38o1','c9p38o1div','c9p38div',11);" <?php if($arrayrespuestas['ec9p38o1']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
           Cuidado de niños o hermanos menores
            </label>
        </div>
        </div>
        <div id="c9p38o2div" <?php if($arrayrespuestas['ec9p38o2']=='' || $arrayrespuestas['ec9p38o2']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="c9p38o2" id="c9p38o2" onclick="cambiarsinoc9p38('SI','c9p38o2','c9p38o2div','c9p38div',11);" <?php if($arrayrespuestas['ec9p38o2']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
           Hacer el aseo de la casa
        </label>
        </div>
        </div>
        <div id="c9p38o3div" <?php if($arrayrespuestas['ec9p38o3']==''|| $arrayrespuestas['ec9p38o3']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="c9p38o3" id="c9p38o3" onclick="cambiarsinoc9p38('SI','c9p38o3','c9p38o3div','c9p38div',11);" <?php if($arrayrespuestas['ec9p38o3']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
           Hacer de comer
          </label>
        </div>
        </div>  
        <div id="c9p38o4div" <?php if($arrayrespuestas['ec9p38o4']==''|| $arrayrespuestas['ec9p38o4']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="c9p38o4" id="c9p38o4" onclick="cambiarsinoc9p38('SI','c9p38o4','c9p38o4div','c9p38div',11);" <?php if($arrayrespuestas['ec9p38o4']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
           Lavar la ropa
          </label>
        </div>
        </div>  
        <div id="c9p38o5div" <?php if($arrayrespuestas['ec9p38o5']==''|| $arrayrespuestas['ec9p38o5']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="c9p38o5" id="c9p38o5" onclick="cambiarsinoc9p38('SI','c9p38o5','c9p38o5div','c9p38div',11);" <?php if($arrayrespuestas['ec9p38o5']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
           Cuidado de la Huerta
          </label>
        </div>
        </div>
        <div id="c9p38o6div" <?php if($arrayrespuestas['ec9p38o6']=='' || $arrayrespuestas['ec9p38o6']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
            <label> <!--en este caso se manda a la fincion javascript el nombre del campo-->
              <input type="checkbox" name="c9p38o6" id="c9p38o6" onclick="cambiarsinoc9p38('SI','c9p38o6','c9p38o6div','c9p38div',11);" <?php if($arrayrespuestas['ec9p38o6']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
           Buscar leña
            </label>
        </div>
        </div>
        <div id="c9p38o7div" <?php if($arrayrespuestas['ec9p38o7']=='' || $arrayrespuestas['ec9p38o7']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
            <label> <!--en este caso se manda a la fincion javascript el nombre del campo-->
              <input type="checkbox" name="c9p38o7" id="c9p38o7" onclick="cambiarsinoc9p38('SI','c9p38o7','c9p38o7div','c9p38div',11);" <?php if($arrayrespuestas['ec9p38o7']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            Alimentar animales
            </label>
        </div>
        </div>
        <div id="c9p38o8div" <?php if($arrayrespuestas['ec9p38o8']=='' || $arrayrespuestas['ec9p38o8']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
            <label> <!--en este caso se manda a la fincion javascript el nombre del campo-->
              <input type="checkbox" name="c9p38o8" id="c9p38o8" onclick="cambiarsinoc9p38('SI','c9p38o8','c9p38o8div','c9p38div',11);" <?php if($arrayrespuestas['ec9p38o8']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            Cuidado de niños menores
            </label>
        </div>
        </div>
        <div id="c9p38o9div" <?php if($arrayrespuestas['ec9p38o9']=='' || $arrayrespuestas['ec9p38o9']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
            <label> <!--en este caso se manda a la fincion javascript el nombre del campo-->
              <input type="checkbox" name="c9p38o9" id="c9p38o9" onclick="cambiarsinoc9p38('SI','c9p38o9','c9p38o9div','c9p38div',11);" <?php if($arrayrespuestas['ec9p38o9']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            No ayudo a mis padres en ninguna actividad
            </label>
        </div>
        </div>
        <div id="c9p38o10div" <?php if($arrayrespuestas['ec9p38o10']=='' || $arrayrespuestas['ec9p38o10']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
            <label> <!--en este caso se manda a la fincion javascript el nombre del campo-->
              <input type="checkbox" name="c9p38o10" id="c9p38o10" onclick="cambiarsinoc9p38('SI','c9p38o10','c9p38o10div','c9p38div',11);" <?php if($arrayrespuestas['ec9p38o10']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
             Otras. Cuál?
            </label>
        </div>
        </div>
        <div class="row" id="c9p38cualmostrar" name="c9p38cualmostrar" <?php if($arrayrespuestas['ec9p38o10']== 'NO'||$arrayrespuestas['ec9p38o10']== ''){echo('style="display:none"');}else{echo('');}  ?> >
        <div  id="c9p38cualdiv" name="c9p38cualdiv" class="form-group col-md-3">
                       <label class="control-label">Cual?</label>
                       <input type="text" class="form-control text-uppercase" id="c9p38cual" onkeypress="return soloLetras(event)"  onchange="validarcampotexcuadros('c9p38cualdiv','c9p38cual','6')" name="c9p38cual"   placeholder="Cual?" value="<?php if($arrayrespuestas['ec9p38cual'] == ''){echo('0');}else{ echo($arrayrespuestas['ec9p38cual']);} ?>">
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
            <?php if($arrayrespuestas['ec9p38o1']=="" & $arrayrespuestas['ec9p38o2']=="" & $arrayrespuestas['ec9p38o3']=="" & $arrayrespuestas['ec9p38cual']=="")
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
                          data: {vfolio : $('#folio').val(),vidintegrante : $('#idintegrante').val(), vc9p38o1 : $('#c9p38o1').val(), vc9p38o2 : $('#c9p38o2').val(),
                          vc9p38o3 : $('#c9p38o3').val(), vc9p38o4 : $('#c9p38o4').val(), vc9p38o5 : $('#c9p38o5').val(), vc9p38o6 : $('#c9p38o6').val(),
                          vc9p38o7 : $('#c9p38o7').val(), vc9p38o8 : $('#c9p38o8').val(), vc9p38o9 : $('#c9p38o9').val(), vc9p38o10 : $('#c9p38o10').val(),vc9p38cual : $('#c9p38cual').val()},    
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
                          data: {vfolio : $('#folio').val(),vidintegrante : $('#idintegrante').val(), vc9p38o1 : $('#c9p38o1').val(), vc9p38o2 : $('#c9p38o2').val(),
                          vc9p38o3 : $('#c9p38o3').val(), vc9p38o4 : $('#c9p38o4').val(), vc9p38o5 : $('#c9p38o5').val(), vc9p38o6 : $('#c9p38o6').val(),
                          vc9p38o7 : $('#c9p38o7').val(), vc9p38o8 : $('#c9p38o8').val(), vc9p38o9 : $('#c9p38o9').val(), vc9p38o10 : $('#c9p38o10').val(),vc9p38cual : $('#c9p38cual').val()},    
                          dataType: "html",
                          success : function(obj){                      
                          botonguardar();
                          }
                        });                    
        });

      $("#siguiente").click(function ()
        {
         botonsiguiente();
         location.href = "../c_c9p39/fc_c9p39?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    

        });
              
        $("#anterior").click(function ()
        {
         botonanterior();
         location.href = "../c_c9p37/fc_c9p37?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
        
        });


cargardatosgenerales('<?php echo($arraydatosgenerales['ecapitulo']); ?>','Pregunta 2 de 7','<?php echo($arraydatosgenerales['enomcoges']); ?>','<?php echo($arraydatosgenerales['enombreintegrante']." "." - "." "."Sexo:"." ".$arraydatosgenerales['esexointegrante']."   "."  -  "."   "."Edad:"."   ".$arraydatosgenerales['eedadintegrante']); ?>','30');
//control del boton ayuda
botonayuda();

});

//dea aca para abajo es logica de cuadros
function cambiarsinoc9p38(opcion,campoval,divcampo,divcompleto,campos,mostrar)
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
    if(campoval == 'c9p38o10')
        {
            if($('#' + campoval).val() == 'SI')
            {
                //alert('aca lo muestra');
                $('#c9p38cualmostrar').show(1000);
                $('#c9p38cual').val('');
                $('#c9p38cualdiv').addClass(' has-error');            

            }
            else
            {
                //alert('aca lo oculta');
                $('#c9p38cualmostrar').hide(1000);
                $('#c9p38cual').val('98');
                $('#c9p38cualdiv').removeClass(' has-error');
  
            }
        }
       if(campoval == 'c9p38o9')
           {
            if($('#' + campoval).val() == 'SI')
            {
              $('#c9p38o1').prop('checked' , false);
              $('#c9p38o1div').addClass(' has-error');
              $('#c9p38o2').prop('checked' , false);
              $('#c9p38o2div').addClass(' has-error');
              $('#c9p38o3').prop('checked' , false);
              $('#c9p38o3div').addClass(' has-error');
              $('#c9p38o4').prop('checked' , false);
              $('#c9p38o4div').addClass(' has-error');
              $('#c9p38o5').prop('checked' , false);
              $('#c9p38o5div').addClass(' has-error');
              $('#c9p38o6').prop('checked' , false);
              $('#c9p38o6div').addClass(' has-error');
              $('#c9p38o7').prop('checked' , false);
              $('#c9p38o7div').addClass(' has-error');
              $('#c9p38o8').prop('checked' , false);
              $('#c9p38o8div').addClass(' has-error');
              $('#c9p38o10').prop('checked' , false);
              $('#c9p38o10div').addClass(' has-error');
              
              $('#c9p38cualmostrar').hide(1000);
              $('#c9p38cual').val('98');
                            
              $('#c9p38o1').val('NO');
              $('#c9p38o2').val('NO');
              $('#c9p38o3').val('NO');
              $('#c9p38o4').val('NO');
              $('#c9p38o5').val('NO');
              $('#c9p38o6').val('NO');
              $('#c9p38o7').val('NO');
              $('#c9p38o8').val('NO');
              $('#c9p38o10').val('NO');
              
              }
}
        else
       {
          $('#c9p38o9').prop('checked' , false); 
          $('#c9p38o9').val('NO');
          $('#c9p38o9div').addClass(' has-error');
      }
        


      validarcuadrosc9p38(divcompleto,campos);
}

function validarcuadrosc9p38(divcuadro,ncampos)
{
    
    if ($('#c9p38cual').val() != '')
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

    validarcuadrosc9p38(div,ncampos);
}


</script>
</html>