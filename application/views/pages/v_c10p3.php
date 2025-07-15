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
        <div id="c10p3div" name="c10p3div" class="form-group col-md-12 form-group-sm">
        <div id="c10p3o0div" class="has-error">
        <label class="control-label">3. ¿Cuál de estos ha utilizado? SELECCIÓN MULTIPLE
                     <button type="button" id="vayuda" name="vayuda" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModal">
                        <span class="glyphicon glyphicon-question-sign" aria-hidden="true"></span> Ayuda
                    </button>       
        </label>
        </div>
        <div id="c10p3o1div" <?php if($arrayrespuestas['ec10p3o1']=='' || $arrayrespuestas['ec10p3o1']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
            <label> <!--en este caso se manda a la fincion javascript el nombre del campo-->
              <input type="checkbox" name="c10p3o1" id="c10p3o1" onclick="cambiarsinoc10p3('SI','c10p3o1','c10p3o1div','c10p3div',10);" <?php if($arrayrespuestas['ec10p3o1']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            A. Derecho de petición.
            </label>
        </div>
        </div>
        <div id="c10p3o2div" <?php if($arrayrespuestas['ec10p3o2']=='' || $arrayrespuestas['ec10p3o2']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="c10p3o2" id="c10p3o2" onclick="cambiarsinoc10p3('SI','c10p3o2','c10p3o2div','c10p3div',10);" <?php if($arrayrespuestas['ec10p3o2']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            B. Habeas corpus
          </label>
        </div>
        </div>
        <div id="c10p3o3div" <?php if($arrayrespuestas['ec10p3o3']==''|| $arrayrespuestas['ec10p3o3']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="c10p3o3" id="c10p3o3" onclick="cambiarsinoc10p3('SI','c10p3o3','c10p3o3div','c10p3div',10);" <?php if($arrayrespuestas['ec10p3o3']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            C. Habeas data
          </label>
        </div>
        </div>  
         
       <div id="c10p3o4div" <?php if($arrayrespuestas['ec10p3o4']==''|| $arrayrespuestas['ec10p3o4']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="c10p3o4" id="c10p3o4" onclick="cambiarsinoc10p3('SI','c10p3o4','c10p3o4div','c10p3div',10);" <?php if($arrayrespuestas['ec10p3o4']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            D. Acción de tutela
          </label>
        </div>
        </div>
       <div id="c10p3o5div" <?php if($arrayrespuestas['ec10p3o5']==''|| $arrayrespuestas['ec10p3o5']=='NO'){echo('class=" has-error"');}?>>
       <div class="checkbox">
         <label>
             <input type="checkbox" name="c10p3o5" id="c10p3o5" onclick="cambiarsinoc10p3('SI','c10p3o5','c10p3o5div','c10p3div',10);" <?php if($arrayrespuestas['ec10p3o5']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
           E. Acción de cumplimiento
         </label>
       </div>
       </div>
       <div id="c10p3o6div" <?php if($arrayrespuestas['ec10p3o6']==''|| $arrayrespuestas['ec10p3o6']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="c10p3o6" id="c10p3o6" onclick="cambiarsinoc10p3('SI','c10p3o6','c10p3o6div','c10p3div',10);" <?php if($arrayrespuestas['ec10p3o6']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            F. Conciliación.
          </label>
        </div>
        </div>
            <div id="c10p3o7div" <?php if($arrayrespuestas['ec10p3o7']==''|| $arrayrespuestas['ec10p3o7']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="c10p3o7" id="c10p3o7" onclick="cambiarsinoc10p3('SI','c10p3o7','c10p3o7div','c10p3div',10);" <?php if($arrayrespuestas['ec10p3o7']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            G. Demandas.
          </label>
        </div>
        </div>
            <div id="c10p3o8div" <?php if($arrayrespuestas['ec10p3o8']==''|| $arrayrespuestas['ec10p3o8']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="c10p3o8" id="c10p3o8" onclick="cambiarsinoc10p3('SI','c10p3o8','c10p3o8div','c10p3div',10);" <?php if($arrayrespuestas['ec10p3o8']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            H. Denuncias.
          </label>
        </div>
        </div>
            <div id="c10p3o9div" <?php if($arrayrespuestas['ec10p3o9']==''|| $arrayrespuestas['ec10p3o9']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="c10p3o9" id="c10p3o9" onclick="cambiarsinoc10p3('SI','c10p3o9','c10p3o9div','c10p3div',10);" <?php if($arrayrespuestas['ec10p3o9']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            I. Acciones populares y de grupo. 
          </label>
        </div>
        </div>
            <div id="c10p3o10div" <?php if($arrayrespuestas['ec10p3o10']==''|| $arrayrespuestas['ec10p3o10']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="c10p3o10" id="c10p3o10" onclick="cambiarsinoc10p3('SI','c10p3o10','c10p3o10div','c10p3div',10);" <?php if($arrayrespuestas['ec10p3o10']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            J. Ninguno 
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
            <?php if($arrayrespuestas['ec10p3o1']=="" & $arrayrespuestas['ec10p3o2']=="" & $arrayrespuestas['ec10p3o3']==""& $arrayrespuestas['ec10p3o4']==""
                     & $arrayrespuestas['ec10p3o5']==""& $arrayrespuestas['ec10p3o6']==""& $arrayrespuestas['ec10p3o7']==""& $arrayrespuestas['ec10p3o8']==""
                    & $arrayrespuestas['ec10p3o9']==""& $arrayrespuestas['ec10p3o10']=="")
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
                          vc10p3o1 : $('#c10p3o1').val(),          
                          vc10p3o2 : $('#c10p3o2').val(),
                          vc10p3o3 : $('#c10p3o3').val(),
                          vc10p3o4 : $('#c10p3o4').val(),
                          vc10p3o5 : $('#c10p3o5').val(),
                          vc10p3o6 : $('#c10p3o6').val(),
                          vc10p3o7 : $('#c10p3o7').val(),
                          vc10p3o8 : $('#c10p3o8').val(),
                          vc10p3o9 : $('#c10p3o9').val(),
                          vc10p3o10 : $('#c10p3o10').val()},
                      
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
                          vc10p3o1 : $('#c10p3o1').val(),          
                          vc10p3o2 : $('#c10p3o2').val(),
                          vc10p3o3 : $('#c10p3o3').val(),
                          vc10p3o4 : $('#c10p3o4').val(),
                          vc10p3o5 : $('#c10p3o5').val(),
                          vc10p3o6 : $('#c10p3o6').val(),
                          vc10p3o7 : $('#c10p3o7').val(),
                          vc10p3o8 : $('#c10p3o8').val(),
                          vc10p3o9 : $('#c10p3o9').val(),
                          vc10p3o10 : $('#c10p3o10').val()},
                          dataType: "html",
                          success : function(obj){                      
                          botonguardar();
                          }
                        });                    
        });
        

        $("#siguiente").click(function ()
        {
         botonsiguiente();
         location.href = "../c_c10p4/fc_c10p4?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    

        });
              
        $("#anterior").click(function ()
        {
         botonanterior();
         location.href = "../c_c10p2/fc_c10p2?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
        });

//para cargar variables capitulo, pregunta,encuestador,vivienda,barra



cargardatosgenerales('<?php echo($arraydatosgenerales['ecapitulo']); ?>','Pregunta 3 de 6','<?php echo($arraydatosgenerales['enomcoges']); ?>','<?php echo($arraydatosgenerales['enombreintegrante']." "." - "." "."Sexo:"." ".$arraydatosgenerales['esexointegrante']."   "."  -  "."   "."Edad:"."   ".$arraydatosgenerales['eedadintegrante']); ?>','48');
//control del boton ayuda
botonayuda();

});
//dea aca para abajo es logica de cuadros
function cambiarsinoc10p3(opcion,campoval,divcampo,divcompleto,campos)
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
        if(campoval == 'c10p3o10')
           {
            if($('#' + campoval).val() == 'SI')
            {
              $('#c10p3o1').prop('checked' , false);
              $('#c10p3o1div').addClass(' has-error');
              $('#c10p3o2').prop('checked' , false);
              $('#c10p3o2div').addClass(' has-error');
              $('#c10p3o3').prop('checked' , false);
              $('#c10p3o3div').addClass(' has-error');
              $('#c10p3o4').prop('checked' , false);
              $('#c10p3o4div').addClass(' has-error');
              $('#c10p3o5').prop('checked' , false);
              $('#c10p3o5div').addClass(' has-error');
              $('#c10p3o6').prop('checked' , false);
              $('#c10p3o6div').addClass(' has-error');
              $('#c10p3o7').prop('checked' , false);
              $('#c10p3o7div').addClass(' has-error');
              $('#c10p3o8').prop('checked' , false);
              $('#c10p3o8div').addClass(' has-error');
              $('#c10p3o9').prop('checked' , false);
              $('#c10p3o9div').addClass(' has-error');
              
              $('#c10p3o1').val('NO');
              $('#c10p3o2').val('NO');
              $('#c10p3o3').val('NO');
              $('#c10p3o4').val('NO');
              $('#c10p3o5').val('NO');
              $('#c10p3o6').val('NO');
              $('#c10p3o7').val('NO');
              $('#c10p3o8').val('NO');
              $('#c10p3o9').val('NO');
              }
}
        else
       {
          $('#c10p3o10').prop('checked' , false); 
          $('#c10p3o10').val('NO');
          $('#c10p3o10div').addClass(' has-error');
      }
      validarcuadrosc10p3(divcompleto,campos);
}
function validarcuadrosc10p3(divcuadro,ncampos)
{
    //alert($('#' + divcuadro).find('input').prop('checked', true).length);
    //alert($('.has-error').length);
    //alert(ncampos + ' ncampos');
    
    if ($('#c10p3o10').val() != '')
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

    validarcuadrosc10p3(div,ncampos);
}

</script>
</html>