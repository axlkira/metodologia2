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
       <input type="text" class="form-control input-sm" id="c10p5o1" name="c10p5o1" style="display:none" placeholder="" value="<?php echo($arrayrespuestas['ec10p5o1']); ?>">
        <!--fin para imprimir el idintegrante y llevarlo-->
<hr>
        <form class="form-group" name="formulario" id="formulario">

           <!--Check varias selecciones -->
    <div class="row">
        <div id="c10p6div" name="c10p6div" class="form-group col-md-12 form-group-sm">
        <div id="c10p6o0div" class="has-error">
            <label class="control-label">6. Solo para víctimas del conflicto armado.Usted como víctima del conflicto armado, ha recibido o está recibiendo: </br>
                     SELECCIÓN MULTIPLE
                     <button type="button" id="vayuda" name="vayuda" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModal">
                        <span class="glyphicon glyphicon-question-sign" aria-hidden="true"></span> Ayuda
                    </button>       
        </label>
        </div>
        <div id="c10p6o1div" <?php if($arrayrespuestas['ec10p6o1']=='' || $arrayrespuestas['ec10p6o1']=='NO'|| $arrayrespuestas['ec10p6o1']=='98'){echo('class=" has-error"');}?>>
        <div class="checkbox">
            <label> <!--en este caso se manda a la fincion javascript el nombre del campo-->
              <input type="checkbox" name="c10p6o1" id="c10p6o1" onclick="cambiarsinoc10p6('SI','c10p6o1','c10p6o1div','c10p6div',17);" <?php if($arrayrespuestas['ec10p6o1']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            Atención Humanitaria - Ayuda Humanitaria de Emergencia 
            </label>
        </div>
        </div>
        <div id="c10p6o2div" <?php if($arrayrespuestas['ec10p6o2']=='' || $arrayrespuestas['ec10p6o2']=='NO'|| $arrayrespuestas['ec10p6o2']=='98'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="c10p6o2" id="c10p6o2" onclick="cambiarsinoc10p6('SI','c10p6o2','c10p6o2div','c10p6div',17);" <?php if($arrayrespuestas['ec10p6o2']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            Atención a Población desplazada (Acciones de orientación, información, acompañamiento a las víctimas para acceder derechos)
          </label>
        </div>
        </div>
        <div id="c10p6o3div" <?php if($arrayrespuestas['ec10p6o3']==''|| $arrayrespuestas['ec10p6o3']=='NO'|| $arrayrespuestas['ec10p6o3']=='98'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="c10p6o3" id="c10p6o3" onclick="cambiarsinoc10p6('SI','c10p6o3','c10p6o3div','c10p6div',17);" <?php if($arrayrespuestas['ec10p6o3']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            Salud
          </label>
        </div>
        </div>  
         
       <div id="c10p6o4div" <?php if($arrayrespuestas['ec10p6o4']==''|| $arrayrespuestas['ec10p6o4']=='NO'|| $arrayrespuestas['ec10p6o4']=='98'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="c10p6o4" id="c10p6o4" onclick="cambiarsinoc10p6('SI','c10p6o4','c10p6o4div','c10p6div',17);" <?php if($arrayrespuestas['ec10p6o4']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            Educación
          </label>
        </div>
        </div>
       <div id="c10p6o5div" <?php if($arrayrespuestas['ec10p6o5']==''|| $arrayrespuestas['ec10p6o5']=='NO'|| $arrayrespuestas['ec10p6o5']=='98'){echo('class=" has-error"');}?>>
       <div class="checkbox">
         <label>
             <input type="checkbox" name="c10p6o5" id="c10p6o5" onclick="cambiarsinoc10p6('SI','c10p6o5','c10p6o5div','c10p6div',17);" <?php if($arrayrespuestas['ec10p6o5']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
           Asistencia Funeraria 
         </label>
       </div>
       </div>
       <div id="c10p6o6div" <?php if($arrayrespuestas['ec10p6o6']==''|| $arrayrespuestas['ec10p6o6']=='NO'|| $arrayrespuestas['ec10p6o6']=='98'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="c10p6o6" id="c10p6o6" onclick="cambiarsinoc10p6('SI','c10p6o6','c10p6o6div','c10p6div',17);" <?php if($arrayrespuestas['ec10p6o6']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            Identidad 
          </label>
        </div>
        </div>
            <div id="c10p6o7div" <?php if($arrayrespuestas['ec10p6o7']==''|| $arrayrespuestas['ec10p6o7']=='NO'|| $arrayrespuestas['ec10p6o7']=='98'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="c10p6o7" id="c10p6o7" onclick="cambiarsinoc10p6('SI','c10p6o7','c10p6o7div','c10p6div',17);" <?php if($arrayrespuestas['ec10p6o7']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            Alimentación 
          </label>
        </div>
        </div>
            <div id="c10p6o8div" <?php if($arrayrespuestas['ec10p6o8']==''|| $arrayrespuestas['ec10p6o8']=='NO'|| $arrayrespuestas['ec10p6o8']=='98'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="c10p6o8" id="c10p6o8" onclick="cambiarsinoc10p6('SI','c10p6o8','c10p6o8div','c10p6div',17);" <?php if($arrayrespuestas['ec10p6o8']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            Reunificación Familiar
          </label>
        </div>
        </div>
            <div id="c10p6o9div" <?php if($arrayrespuestas['ec10p6o9']==''|| $arrayrespuestas['ec10p6o9']=='NO'|| $arrayrespuestas['ec10p6o9']=='98'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="c10p6o9" id="c10p6o9" onclick="cambiarsinoc10p6('SI','c10p6o9','c10p6o9div','c10p6div',17);" <?php if($arrayrespuestas['ec10p6o9']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            Restitución
          </label>
        </div>
        </div>
         <div id="c10p6o10div" <?php if($arrayrespuestas['ec10p6o10']==''|| $arrayrespuestas['ec10p6o10']=='NO'|| $arrayrespuestas['ec10p6o10']=='98'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="c10p6o10" id="c10p6o10" onclick="cambiarsinoc10p6('SI','c10p6o10','c10p6o10div','c10p6div',17);" <?php if($arrayrespuestas['ec10p6o10']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            Indemnización 
          </label>
        </div>
        </div>
            <div id="c10p6o11div" <?php if($arrayrespuestas['ec10p6o11']==''|| $arrayrespuestas['ec10p6o11']=='NO'|| $arrayrespuestas['ec10p6o11']=='98'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="c10p6o11" id="c10p6o11" onclick="cambiarsinoc10p6('SI','c10p6o11','c10p6o11div','c10p6div',17);" <?php if($arrayrespuestas['ec10p6o11']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            Rehabilitación 
          </label>
        </div>
        </div>
            <div id="c10p6o12div" <?php if($arrayrespuestas['ec10p6o12']==''|| $arrayrespuestas['ec10p6o12']=='NO'|| $arrayrespuestas['ec10p6o12']=='98'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="c10p6o12" id="c10p6o12" onclick="cambiarsinoc10p6('SI','c10p6o12','c10p6o12div','c10p6div',17);" <?php if($arrayrespuestas['ec10p6o12']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            Satisfacción 
          </label>
        </div>
        </div>
            <div id="c10p6o13div" <?php if($arrayrespuestas['ec10p6o13']==''|| $arrayrespuestas['ec10p6o13']=='NO'|| $arrayrespuestas['ec10p6o13']=='98'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="c10p6o13" id="c10p6o13" onclick="cambiarsinoc10p6('SI','c10p6o13','c10p6o13div','c10p6div',17);" <?php if($arrayrespuestas['ec10p6o13']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            Garantías de  no repetición
          </label>
        </div>
        </div>
        <div id="c10p6o14div" <?php if($arrayrespuestas['ec10p6o14']==''|| $arrayrespuestas['ec10p6o14']=='NO'|| $arrayrespuestas['ec10p6o14']=='98'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="c10p6o14" id="c10p6o14" onclick="cambiarsinoc10p6('SI','c10p6o14','c10p6o14div','c10p6div',17);" <?php if($arrayrespuestas['ec10p6o14']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            Planes de Reparación Colectiva 
          </label>
        </div>
        </div>
            <div id="c10p6o15div" <?php if($arrayrespuestas['ec10p6o15']==''|| $arrayrespuestas['ec10p6o15']=='NO'|| $arrayrespuestas['ec10p6o15']=='98'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="c10p6o15" id="c10p6o15" onclick="cambiarsinoc10p6('SI','c10p6o15','c10p6o15div','c10p6div',17);" <?php if($arrayrespuestas['ec10p6o15']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            Incluido en el PAARI (Plan de Atención, asistencia y reparación integral a las víctimas)
          </label>
        </div>
        </div>
            <div id="c10p6o16div" <?php if($arrayrespuestas['ec10p6o16']==''|| $arrayrespuestas['ec10p6o16']=='NO'|| $arrayrespuestas['ec10p6o16']=='98'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="c10p6o16" id="c10p6o16" onclick="cambiarsinoc10p6('SI','c10p6o16','c10p6o16div','c10p6div',17);" <?php if($arrayrespuestas['ec10p6o16']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            Otra  ¿Cuál?
          </label>
        </div>
        </div>
            
        <div class="row" id="c10p6cualmostrar" name="c10p6cualmostrar" <?php if($arrayrespuestas['ec10p6o16']== 'NO'||$arrayrespuestas['ec10p6o16']== ''||$arrayrespuestas['ec10p6o16']== '98'){echo('style="display:none"');}else{echo('');}  ?> >
        <div  id="c10p6cualdiv" name="c10p6cualdiv" class="form-group col-md-3">
                       <label class="control-label">Cual?</label>
                       <input type="text" class="form-control text-uppercase" id="c10p6cual" onkeypress="return soloLetras(event)"  onchange="validarcampotexcuadros('c10p6cualdiv','c10p6cual','10')" name="c10p6cual"   placeholder="Cual?" value="<?php if($arrayrespuestas['ec10p6cual'] == ''){echo('0');}else{ echo($arrayrespuestas['ec10p6cual']);} ?>">
        </div>
        </div>
        <div id="c10p6o17div" <?php if($arrayrespuestas['ec10p6o17']==''|| $arrayrespuestas['ec10p6o17']=='NO'|| $arrayrespuestas['ec10p6o17']=='98'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="c10p6o17" id="c10p6o17" onclick="cambiarsinoc10p6('SI','c10p6o17','c10p6o17div','c10p6div',17);" <?php if($arrayrespuestas['ec10p6o17']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
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
            <?php if($arrayrespuestas['ec10p6o1']=="" & $arrayrespuestas['ec10p6o2']=="" & $arrayrespuestas['ec10p6o3']==""& $arrayrespuestas['ec10p6o4']==""
                     & $arrayrespuestas['ec10p6o5']==""& $arrayrespuestas['ec10p6o6']==""& $arrayrespuestas['ec10p6o7']==""& $arrayrespuestas['ec10p6o8']==""
                    & $arrayrespuestas['ec10p6o9']==""& $arrayrespuestas['ec10p6o10']==""& $arrayrespuestas['ec10p6o11']==""& $arrayrespuestas['ec10p6o12']==""
                    & $arrayrespuestas['ec10p6o13']==""& $arrayrespuestas['ec10p6o14']==""& $arrayrespuestas['ec10p6o15']==""& $arrayrespuestas['ec10p6o16']==""
                    & $arrayrespuestas['ec10p6o17']=="")
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
                          vc10p6o1 : $('#c10p6o1').val(),          
                          vc10p6o2 : $('#c10p6o2').val(),
                          vc10p6o3 : $('#c10p6o3').val(),
                          vc10p6o4 : $('#c10p6o4').val(),
                          vc10p6o5 : $('#c10p6o5').val(),
                          vc10p6o6 : $('#c10p6o6').val(),
                          vc10p6o7 : $('#c10p6o7').val(),
                          vc10p6o8 : $('#c10p6o8').val(),
                          vc10p6o9 : $('#c10p6o9').val(),
                          vc10p6o10 : $('#c10p6o10').val(),
                          vc10p6o11 : $('#c10p6o11').val(),
                          vc10p6o12 : $('#c10p6o12').val(),
                          vc10p6o13 : $('#c10p6o13').val(),
                          vc10p6o14 : $('#c10p6o14').val(),
                          vc10p6o15 : $('#c10p6o15').val(),
                          vc10p6o16 : $('#c10p6o16').val(),
                          vc10p6o17 : $('#c10p6o17').val(),
                          vc10p6cual : $('#c10p6cual').val()},
                      
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
                          vc10p6o1 : $('#c10p6o1').val(),          
                          vc10p6o2 : $('#c10p6o2').val(),
                          vc10p6o3 : $('#c10p6o3').val(),
                          vc10p6o4 : $('#c10p6o4').val(),
                          vc10p6o5 : $('#c10p6o5').val(),
                          vc10p6o6 : $('#c10p6o6').val(),
                          vc10p6o7 : $('#c10p6o7').val(),
                          vc10p6o8 : $('#c10p6o8').val(),
                           vc10p6o9 : $('#c10p6o9').val(),
                          vc10p6o10 : $('#c10p6o10').val(),
                          vc10p6o11 : $('#c10p6o11').val(),
                          vc10p6o12 : $('#c10p6o12').val(),
                          vc10p6o13 : $('#c10p6o13').val(),
                          vc10p6o14 : $('#c10p6o14').val(),
                          vc10p6o15 : $('#c10p6o15').val(),
                          vc10p6o16 : $('#c10p6o16').val(),
                          vc10p6o17 : $('#c10p6o17').val(),
                          vc10p6cual : $('#c10p6cual').val()},
                      
                          dataType: "html",
                          success : function(obj){                      
                          botonguardar();
                          }
                        });                    
        });
        

        $("#siguiente").click(function ()
        {
         
        location.href = "../c_capitulosintegrante/fc_capitulosintegrante?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val();                       
        
        });
              
        $("#anterior").click(function ()
        {
            if (($('#c10p5o1').val() != '98')) 
         {
         location.href = "../c_c10p5/fc_c10p5?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
        }
        else
        {
         location.href = "../c_c10p4/fc_c10p4?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                       
        }
         
        });

//para cargar variables capitulo, pregunta,encuestador,vivienda,barra



cargardatosgenerales('<?php echo($arraydatosgenerales['ecapitulo']); ?>','Pregunta 6 de 6','<?php echo($arraydatosgenerales['enomcoges']); ?>','<?php echo($arraydatosgenerales['enombreintegrante']." "." - "." "."Sexo:"." ".$arraydatosgenerales['esexointegrante']."   "."  -  "."   "."Edad:"."   ".$arraydatosgenerales['eedadintegrante']); ?>','100');
//control del boton ayuda
botonayuda();

});
//dea aca para abajo es logica de cuadros
function cambiarsinoc10p6(opcion,campoval,divcampo,divcompleto,campos)
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
    if(campoval == 'c10p6o16')
        {
            if($('#' + campoval).val() == 'SI')
            {
                //alert('aca lo muestra');
                $('#c10p6cualmostrar').show(1000);
                $('#c10p6cual').val('');
                $('#c10p6cualdiv').addClass(' has-error');            

            }
            else
            {
                //alert('aca lo oculta');
                $('#c10p6cualmostrar').hide(1000);
                $('#c10p6cual').val('98');
                $('#c10p6cualdiv').removeClass(' has-error');
  
            }
        }
        
        if(campoval == 'c10p6o17')
           {
            if($('#' + campoval).val() == 'SI')
            {
              $('#c10p6o1').prop('checked' , false);
              $('#c10p6o1div').addClass(' has-error');
              $('#c10p6o2').prop('checked' , false);
              $('#c10p6o2div').addClass(' has-error');
              $('#c10p6o3').prop('checked' , false);
              $('#c10p6o3div').addClass(' has-error');
              $('#c10p6o4').prop('checked' , false);
              $('#c10p6o4div').addClass(' has-error');
              $('#c10p6o5').prop('checked' , false);
              $('#c10p6o5div').addClass(' has-error');
              $('#c10p6o6').prop('checked' , false);
              $('#c10p6o6div').addClass(' has-error');
              $('#c10p6o7').prop('checked' , false);
              $('#c10p6o7div').addClass(' has-error');
              $('#c10p6o8').prop('checked' , false);
              $('#c10p6o8div').addClass(' has-error');
              $('#c10p6o9').prop('checked' , false);
              $('#c10p6o9div').addClass(' has-error');
              $('#c10p6o10').prop('checked' , false);
              $('#c10p6o10div').addClass(' has-error');
              $('#c10p6o11').prop('checked' , false);
              $('#c10p6o11div').addClass(' has-error');
              $('#c10p6o12').prop('checked' , false);
              $('#c10p6o12div').addClass(' has-error');
              $('#c10p6o13').prop('checked' , false);
              $('#c10p6o13div').addClass(' has-error');
              $('#c10p6o14').prop('checked' , false);
              $('#c10p6o14div').addClass(' has-error');
              $('#c10p6o15').prop('checked' , false);
              $('#c10p6o15div').addClass(' has-error');
              $('#c10p6o16').prop('checked' , false);
              $('#c10p6o16div').addClass(' has-error');
              
              $('#c10p6cualmostrar').hide(1000);
              $('#c10p6cual').val('98');
                            
              $('#c10p6o1').val('NO');
              $('#c10p6o2').val('NO');
              $('#c10p6o3').val('NO');
              $('#c10p6o4').val('NO');
              $('#c10p6o5').val('NO');
              $('#c10p6o6').val('NO');
              $('#c10p6o7').val('NO');
              $('#c10p6o8').val('NO');
              $('#c10p6o9').val('NO');
              $('#c10p6o10').val('NO');
              $('#c10p6o11').val('NO');
              $('#c10p6o12').val('NO');
              $('#c10p6o13').val('NO');
              $('#c10p6o14').val('NO');
              $('#c10p6o15').val('NO');
              $('#c10p6o16').val('NO');
              
              }
}
        else
       {
          $('#c10p6o17').prop('checked' , false); 
          $('#c10p6o17').val('NO');
          $('#c10p6o17div').addClass(' has-error');
      }
      validarcuadrosc10p6(divcompleto,campos);
}
function validarcuadrosc10p6(divcuadro,ncampos)
{
    //alert($('#' + divcuadro).find('input').prop('checked', true).length);
    //alert($('.has-error').length);
    //alert(ncampos + ' ncampos');
    
    if ($('#c10p6cual').val() != '')
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

    validarcuadrosc10p6(div,ncampos);
}
</script>
</html>