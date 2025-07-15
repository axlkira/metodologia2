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
        <div id="c5p5div" name="c5p5div" class="form-group col-md-12 form-group-sm">
        <div id="c5p5o0div" class="has-error">
            <label class="control-label">5.¿Qué métodos conoce  o de cuáles ha oído hablar ….. para evitar un embarazo? </br>
                     Multiple respuesta
                     <button type="button" id="vayuda" name="vayuda" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModal">
                        <span class="glyphicon glyphicon-question-sign" aria-hidden="true"></span> Ayuda
                    </button>       
        </label>
        </div>
        <div id="c5p5o1div" <?php if($arrayrespuestas['ec5p5o1']=='' || $arrayrespuestas['ec5p5o1']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
            <label> <!--en este caso se manda a la fincion javascript el nombre del campo-->
              <input type="checkbox" name="c5p5o1" id="c5p5o1" onclick="cambiarsinoc5p5('SI','c5p5o1','c5p5o1div','c5p5div',13);" <?php if($arrayrespuestas['ec5p5o1']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            Ligadura de trompas o cirugía (esterilización femenina)
            </label>
        </div>
        </div>
        <div id="c5p5o2div" <?php if($arrayrespuestas['ec5p5o2']=='' || $arrayrespuestas['ec5p5o2']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="c5p5o2" id="c5p5o2" onclick="cambiarsinoc5p5('SI','c5p5o2','c5p5o2div','c5p5div',13);" <?php if($arrayrespuestas['ec5p5o2']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            Píldora o pastilla
          </label>
        </div>
        </div>
        <div id="c5p5o3div" <?php if($arrayrespuestas['ec5p5o3']==''|| $arrayrespuestas['ec5p5o3']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="c5p5o3" id="c5p5o3" onclick="cambiarsinoc5p5('SI','c5p5o3','c5p5o3div','c5p5div',13);" <?php if($arrayrespuestas['ec5p5o3']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            DIU(Dispositivo Intrauterino)
          </label>
        </div>
        </div>  
         
       <div id="c5p5o4div" <?php if($arrayrespuestas['ec5p5o4']==''|| $arrayrespuestas['ec5p5o4']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="c5p5o4" id="c5p5o4" onclick="cambiarsinoc5p5('SI','c5p5o4','c5p5o4div','c5p5div',13);" <?php if($arrayrespuestas['ec5p5o4']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            Inyección (Anticonceptivos Inyectables)
          </label>
        </div>
        </div>
       <div id="c5p5o5div" <?php if($arrayrespuestas['ec5p5o5']==''|| $arrayrespuestas['ec5p5o5']=='NO'){echo('class=" has-error"');}?>>
       <div class="checkbox">
         <label>
             <input type="checkbox" name="c5p5o5" id="c5p5o5" onclick="cambiarsinoc5p5('SI','c5p5o5','c5p5o5div','c5p5div',13);" <?php if($arrayrespuestas['ec5p5o5']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
           Implantes subdermicos (Norplant, Jadelle)
         </label>
       </div>
       </div>
       <div id="c5p5o6div" <?php if($arrayrespuestas['ec5p5o6']==''|| $arrayrespuestas['ec5p5o6']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="c5p5o6" id="c5p5o6" onclick="cambiarsinoc5p5('SI','c5p5o6','c5p5o6div','c5p5div',13);" <?php if($arrayrespuestas['ec5p5o6']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            Condón  Femenino
          </label>
        </div>
        </div>
            <div id="c5p5o7div" <?php if($arrayrespuestas['ec5p5o7']==''|| $arrayrespuestas['ec5p5o7']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="c5p5o7" id="c5p5o7" onclick="cambiarsinoc5p5('SI','c5p5o7','c5p5o7div','c5p5div',13);" <?php if($arrayrespuestas['ec5p5o7']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            Espuma, jalea,óvulos (métodos vaginales espermicidas)
          </label>
        </div>
        </div>
            <div id="c5p5o8div" <?php if($arrayrespuestas['ec5p5o8']==''|| $arrayrespuestas['ec5p5o8']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="c5p5o8" id="c5p5o8" onclick="cambiarsinoc5p5('SI','c5p5o8','c5p5o8div','c5p5div',13);" <?php if($arrayrespuestas['ec5p5o8']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            Métodos naturales (coito interrumpido"Eyacular fuera de la vagina"  MELA " Ausencia de la mestruaciòn en la lactancia, el ritmo"consiste en conocer què dìas tiene lugar la  ovulaciòn)
          </label>
        </div>
        </div>
            <div id="c5p5o9div" <?php if($arrayrespuestas['ec5p5o9']==''|| $arrayrespuestas['ec5p5o9']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="c5p5o9" id="c5p5o9" onclick="cambiarsinoc5p5('SI','c5p5o9','c5p5o9div','c5p5div',13);" <?php if($arrayrespuestas['ec5p5o9']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
           Anticoncepción de emergencia(Pastilla  que se ingiere dentro de  las 72 horas siguientes a la relaciòn Sexual)
          </label>
        </div>
        </div>
         <div id="c5p5o10div" <?php if($arrayrespuestas['ec5p5o10']==''|| $arrayrespuestas['ec5p5o10']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="c5p5o10" id="c5p5o10" onclick="cambiarsinoc5p5('SI','c5p5o10','c5p5o10div','c5p5div',13);" <?php if($arrayrespuestas['ec5p5o10']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
           Vasectomía (esterilización masculina)
          </label>
        </div>
        </div>
         <div id="c5p5o11div" <?php if($arrayrespuestas['ec5p5o11']==''|| $arrayrespuestas['ec5p5o11']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="c5p5o11" id="c5p5o11" onclick="cambiarsinoc5p5('SI','c5p5o11','c5p5o11div','c5p5div',13);" <?php if($arrayrespuestas['ec5p5o11']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
           Preservativo o condón
          </label>
        </div>
        </div>
         <div id="c5p5o12div" <?php if($arrayrespuestas['ec5p5o12']==''|| $arrayrespuestas['ec5p5o12']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="c5p5o12" id="c5p5o12" onclick="cambiarsinoc5p5('SI','c5p5o12','c5p5o12div','c5p5div',13);" <?php if($arrayrespuestas['ec5p5o12']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
           Otra  ¿Cuál?
          </label>
        </div>
        </div>         
            
        <div class="row" id="c5p5cualmostrar" name="c5p5cualmostrar" <?php if($arrayrespuestas['ec5p5o12']== 'NO'||$arrayrespuestas['ec5p5o12']== ''){echo('style="display:none"');}else{echo('');}  ?> >
        <div  id="c5p5cualdiv" name="c5p5cualdiv" class="form-group col-md-3">
                       <label class="control-label">Cual?</label>
                       <input type="text" class="form-control text-uppercase" id="c5p5cual" onkeypress="return soloLetras(event)"  onchange="validarcampotexcuadros('c5p5cualdiv','c5p5cual','10')" name="c5p5cual"   placeholder="Cual?" value="<?php if($arrayrespuestas['ec5p5cual'] == ''){echo('0');}else{ echo($arrayrespuestas['ec5p5cual']);} ?>">
        </div>
        </div>
        <div id="c5p5o13div" <?php if($arrayrespuestas['ec5p5o13']==''|| $arrayrespuestas['ec5p5o13']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="c5p5o13" id="c5p5o13" onclick="cambiarsinoc5p5('SI','c5p5o13','c5p5o13div','c5p5div',13);" <?php if($arrayrespuestas['ec5p5o13']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            Ninguno
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
            <?php if($arrayrespuestas['ec5p5o1']=="" & $arrayrespuestas['ec5p5o2']=="" & $arrayrespuestas['ec5p5o3']==""& $arrayrespuestas['ec5p5o4']==""
                     & $arrayrespuestas['ec5p5o5']==""& $arrayrespuestas['ec5p5o6']==""& $arrayrespuestas['ec5p5o7']==""& $arrayrespuestas['ec5p5o8']==""& $arrayrespuestas['ec5p5o9']==""& $arrayrespuestas['ec5p5o10']==""
                    & $arrayrespuestas['ec5p5o11']==""& $arrayrespuestas['ec5p5o12']==""& $arrayrespuestas['ec5p5o13']=="" )
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
                          vc5p5o1 : $('#c5p5o1').val(),          
                          vc5p5o2 : $('#c5p5o2').val(),
                          vc5p5o3 : $('#c5p5o3').val(),
                          vc5p5o4 : $('#c5p5o4').val(),
                          vc5p5o5 : $('#c5p5o5').val(),
                          vc5p5o6 : $('#c5p5o6').val(),
                          vc5p5o7 : $('#c5p5o7').val(),
                          vc5p5o8 : $('#c5p5o8').val(),
                          vc5p5o9 : $('#c5p5o9').val(),
                          vc5p5o10 : $('#c5p5o10').val(),
                          vc5p5o11 : $('#c5p5o11').val(),
                          vc5p5o12 : $('#c5p5o12').val(),
                          vc5p5o13 : $('#c5p5o13').val(),
                          vc5p5cual : $('#c5p5cual').val()},
                      
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
                          vc5p5o1 : $('#c5p5o1').val(),          
                          vc5p5o2 : $('#c5p5o2').val(),
                          vc5p5o3 : $('#c5p5o3').val(),
                          vc5p5o4 : $('#c5p5o4').val(),
                          vc5p5o5 : $('#c5p5o5').val(),
                          vc5p5o6 : $('#c5p5o6').val(),
                          vc5p5o7 : $('#c5p5o7').val(),
                          vc5p5o8 : $('#c5p5o8').val(),
                          vc5p5o9 : $('#c5p5o9').val(),
                          vc5p5o10 : $('#c5p5o10').val(),
                          vc5p5o11 : $('#c5p5o11').val(),
                          vc5p5o12 : $('#c5p5o12').val(),
                          vc5p5o13 : $('#c5p5o13').val(),
                          vc5p5cual : $('#c5p5cual').val()},
                      
                          dataType: "html",
                          success : function(obj){                      
                          botonguardar();
                          }
                        });                    
        });
        

        $("#siguiente").click(function ()
        {
         botonsiguiente();
         location.href = "../c_c5p6/fc_c5p6?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    

        });
              
        $("#anterior").click(function ()
        {
         botonanterior();
         if($('#edad').val() > 12)
         {
         location.href = "../c_c5p4/fc_c5p4?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
         }
        });

//para cargar variables capitulo, pregunta,encuestador,vivienda,barra



cargardatosgenerales('<?php echo($arraydatosgenerales['ecapitulo']); ?>','Pregunta 5 de 14','<?php echo($arraydatosgenerales['enomcoges']); ?>','<?php echo($arraydatosgenerales['enombreintegrante']." "." - "." "."Sexo:"." ".$arraydatosgenerales['esexointegrante']."   "."  -  "."   "."Edad:"."   ".$arraydatosgenerales['eedadintegrante']); ?>','24');
//control del boton ayuda
botonayuda();

});
//dea aca para abajo es logica de cuadros
function cambiarsinoc5p5(opcion,campoval,divcampo,divcompleto,campos)
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
    if(campoval == 'c5p5o12')
        {
            if($('#' + campoval).val() == 'SI')
            {
                //alert('aca lo muestra');
                $('#c5p5cualmostrar').show(1000);
                $('#c5p5cual').val('');
                $('#c5p5cualdiv').addClass(' has-error');            

            }
            else
            {
                //alert('aca lo oculta');
                $('#c5p5cualmostrar').hide(1000);
                $('#c5p5cual').val('98');
                $('#c5p5cualdiv').removeClass(' has-error');
  
            }
        }
        
        if(campoval == 'c5p5o13')
           {
            if($('#' + campoval).val() == 'SI')
            {
              $('#c5p5o1').prop('checked' , false);
              $('#c5p5o1div').addClass(' has-error');
              $('#c5p5o2').prop('checked' , false);
              $('#c5p5o2div').addClass(' has-error');
              $('#c5p5o3').prop('checked' , false);
              $('#c5p5o3div').addClass(' has-error');
              $('#c5p5o4').prop('checked' , false);
              $('#c5p5o4div').addClass(' has-error');
              $('#c5p5o5').prop('checked' , false);
              $('#c5p5o5div').addClass(' has-error');
              $('#c5p5o6').prop('checked' , false);
              $('#c5p5o6div').addClass(' has-error');
              $('#c5p5o7').prop('checked' , false);
              $('#c5p5o7div').addClass(' has-error');
              $('#c5p5o8').prop('checked' , false);
              $('#c5p5o8div').addClass(' has-error');
              $('#c5p5o9').prop('checked' , false);
              $('#c5p5o9div').addClass(' has-error');
              $('#c5p5o10').prop('checked' , false);
              $('#c5p5o10div').addClass(' has-error');
              $('#c5p5o11').prop('checked' , false);
              $('#c5p5o11div').addClass(' has-error');
              $('#c5p5o12').prop('checked' , false);
              $('#c5p5o12div').addClass(' has-error');
              
              $('#c5p5cualmostrar').hide(1000);
              $('#c5p5cual').val('98');
                            
              $('#c5p5o1').val('NO');
              $('#c5p5o2').val('NO');
              $('#c5p5o3').val('NO');
              $('#c5p5o4').val('NO');
              $('#c5p5o5').val('NO');
              $('#c5p5o6').val('NO');
              $('#c5p5o7').val('NO');
              $('#c5p5o8').val('NO');
              $('#c5p5o9').val('NO');
              $('#c5p5o10').val('NO');
              $('#c5p5o11').val('NO');
              $('#c5p5o12').val('NO');
              
              
              }
}
        else
       {
          $('#c5p5o13').prop('checked' , false); 
          $('#c5p5o13').val('NO');
          $('#c5p5o13div').addClass(' has-error');
      }
      validarcuadrosc5p5(divcompleto,campos);
}
function validarcuadrosc5p5(divcuadro,ncampos)
{
    //alert($('#' + divcuadro).find('input').prop('checked', true).length);
    //alert($('.has-error').length);
    //alert(ncampos + ' ncampos');
    
    if ($('#c5p5cual').val() != '')
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

    validarcuadrosc5p5(div,ncampos);
}
</script>
</html>