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
        <input type="text" class="form-control input-sm" id="c3p2o1" name="c3p2o1" style="display: none" placeholder=" " value="<?php echo($arrayrespuestas['ec3p2o1']); ?>">
        <!--fin para imprimir el folio y llevarlo-->
<hr>
       <form class="form-group" name="formulario" id="formulario">

<!--Check varias selecciones -->
    <div class="row">
        <div id="c3p3div" name="c3p3div" class="form-group col-md-12 form-group-sm">
        <div id="c3p3o0div" class="has-error">
        <label class="control-label">3. Algun miembro del hogar ha recibido educación financiera en:
                     <button type="button" id="vayuda" name="vayuda" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModal">
                        <span class="glyphicon glyphicon-question-sign" aria-hidden="true"></span> Ayuda
                    </button>       
        </label>
        </div>
        <div id="c3p3o1div" <?php if($arrayrespuestas['ec3p3o1']=='' || $arrayrespuestas['ec3p3o1']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
            <label> <!--en este caso se manda a la fincion javascript el nombre del campo-->
              <input type="checkbox" name="c3p3o1" id="c3p3o1" onclick="cambiarsinoc3p3('SI','c3p3o1','c3p3o1div','c3p3div',5);" <?php if($arrayrespuestas['ec3p3o1']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            Entidad financiera
            </label>
        </div>
        </div>
        <div id="c3p3o2div" <?php if($arrayrespuestas['ec3p3o2']=='' || $arrayrespuestas['ec3p3o2']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="c3p3o2" id="c3p3o2" onclick="cambiarsinoc3p3('SI','c3p3o2','c3p3o2div','c3p3div',5);" <?php if($arrayrespuestas['ec3p3o2']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            Cooperativas de Ahorro y crédito
          </label>
        </div>
        </div>
        <div id="c3p3o3div" <?php if($arrayrespuestas['ec3p3o3']==''|| $arrayrespuestas['ec3p3o3']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="c3p3o3" id="c3p3o3" onclick="cambiarsinoc3p3('SI','c3p3o3','c3p3o3div','c3p3div',5);" <?php if($arrayrespuestas['ec3p3o3']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            ONG´S
          </label>
        </div>
        </div>  
       <div id="c3p3o4div" <?php if($arrayrespuestas['ec3p3o4']==''|| $arrayrespuestas['ec3p3o4']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="c3p3o4" id="c3p3o4" onclick="cambiarsinoc3p3('SI','c3p3o4','c3p3o4div','c3p3div',5);" <?php if($arrayrespuestas['ec3p3o4']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            No ha recibido educación financiera
          </label>
        </div>
        </div> 
       <div id="c3p3o5div" <?php if($arrayrespuestas['ec3p3o5']==''|| $arrayrespuestas['ec3p3o5']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="c3p3o5" id="c3p3o5" onclick="cambiarsinoc3p3('SI','c3p3o5','c3p3o5div','c3p3div',5);" <?php if($arrayrespuestas['ec3p3o5']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            Otra
          </label>
        </div>
        </div> 
            <div class="row" id="c3p3cualmostrar" name="c3p3cualmostrar" <?php if($arrayrespuestas['ec3p3o5']== 'NO'||$arrayrespuestas['ec3p3o5']== ''){echo('style="display:none"');}else{echo('');}  ?> >
            <div  id="c3p3cualdiv" name="c3p3cualdiv" class="form-group col-md-3">
                       <label class="control-label">Cual?</label>
                       <input type="text" class="form-control text-uppercase" id="c3p3cual" onkeypress="return soloLetras(event)"  onchange="validarcampotexcuadros('c3p3cualdiv','c3p3cual','5')" name="c3p3cual"   placeholder="Cual?" value="<?php if($arrayrespuestas['ec3p3cual'] == ''){echo('0');}else{ echo($arrayrespuestas['ec3p3cual']);} ?>">
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
            <?php if($arrayrespuestas['ec3p3o1']=="" & $arrayrespuestas['ec3p3o2']=="" & $arrayrespuestas['ec3p3o3']==""& $arrayrespuestas['ec3p3o4']==""& $arrayrespuestas['ec3p3o5']=="")
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
                          data: {vfolio : $('#folio').val(), vc3p3o1 : $('#c3p3o1').val(),vc3p3o2 : $('#c3p3o2').val(),vc3p3o3 : $('#c3p3o3').val(),vc3p3o4 : $('#c3p3o4').val(),vc3p3o5 : $('#c3p3o5').val(),vc3p3cual : $('#c3p3cual').val()},    
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
                          data: {vfolio : $('#folio').val(), vc3p3o1 : $('#c3p3o1').val(),vc3p3o2 : $('#c3p3o2').val(),vc3p3o3 : $('#c3p3o3').val(),vc3p3o4 : $('#c3p3o4').val(),vc3p3o5 : $('#c3p3o5').val(),vc3p3cual : $('#c3p3cual').val()}, 
                          dataType: "html",
                          success : function(obj){                      
                          botonactualizar();
                          }
                        });                   
        });
        

        $("#siguiente").click(function ()
        {
         botonsiguiente();
         location.href = "../c_c3p4/fc_c3p4?folio=" + $('#folio').val();                    

        });
              
        $("#anterior").click(function ()
        {
            if($('#c3p2o1').val()=='98'){
                {   $.ajax({
                             url: "../c_c3p2/fc_actualizar",
                             type: "GET",
                             data: {vfolio : $('#folio').val(), vc3p2o1 : '', vc3p2o2 : '', vc3p2o3 : '', vc3p2o4 : '',
                             vc3p2cual : ''},    
                             dataType: "html",
                             success : function(obj){  
                             location.href = "../c_c3p1a/fc_c3p1a?folio=" + $('#folio').val(); 
                             }
                           }); 
           }
               
            }
            else{
         botonanterior();
         location.href = "../c_c3p2/fc_c3p2?folio=" + $('#folio').val(); 
     }});

//para cargar variables capitulo, pregunta,encuestador,vivienda,barra
cargardatosgenerales('<?php echo($arraydatosgenerales['ecapitulo']); ?>','Pregunta 3 de 4','<?php echo($arraydatosgenerales['enomcoges']); ?>','<?php echo($arraydatosgenerales['etitular']); ?>','80');
//control del boton ayuda
botonayuda();

});
//dea aca para abajo es logica de cuadros
function cambiarsinoc3p3(opcion,campoval,divcampo,divcompleto,campos)
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
    if(campoval == 'c3p3o5')
        {
            if($('#' + campoval).val() == 'SI')
            {
                //alert('aca lo muestra');
                $('#c3p3cualmostrar').show(1000);
                $('#c3p3cual').val('');
                $('#c3p3cualdiv').addClass(' has-error');            

            }
            else
            {
                //alert('aca lo oculta');
                $('#c3p3cualmostrar').hide(1000);
                $('#c3p3cual').val('98');
                $('#c3p3cualdiv').removeClass(' has-error');
  
            }
        }
        
        if(campoval == 'c3p3o4')
           {
            if($('#' + campoval).val() == 'SI')
            {
              $('#c3p3o1').prop('checked' , false);
              $('#c3p3o1div').addClass(' has-error');
              $('#c3p3o2').prop('checked' , false);
              $('#c3p3o2div').addClass(' has-error');
              $('#c3p3o3').prop('checked' , false);
              $('#c3p3o3div').addClass(' has-error');
              $('#c3p3o5').prop('checked' , false);
              $('#c3p3o5div').addClass(' has-error');
              
              $('#c3p3cualmostrar').hide(1000);
              $('#c3p3cual').val('98');
                            
              $('#c3p3o1').val('NO');
              $('#c3p3o2').val('NO');
              $('#c3p3o3').val('NO');
              $('#c3p3o5').val('NO');
              
            }

        }
        else
       {
          $('#c3p3o4').prop('checked' , false); 
          $('#c3p3o4').val('NO');
          $('#c3p3o4div').addClass(' has-error');
      }
        
      
      validarcuadrosc3p3(divcompleto,campos);
}

function validarcuadrosc3p3(divcuadro,ncampos)
{
    //alert($('#' + divcuadro).find('input').prop('checked', true).length);
    //alert($('.has-error').length);
    //alert(ncampos + ' ncampos');
    
    if ($('#c3p3cual').val() != '')
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

    validarcuadrosc3p3(div,ncampos);

}

</script>
</html>