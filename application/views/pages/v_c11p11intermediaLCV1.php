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
<!--        <input type="text" class="form-control input-sm" id="c11p11intermediaao1" name="c11p11intermediaao1" style="display:none" value="<?php echo($arrayrespuestas['ec11p11intermediaao1']); ?>">-->
<!--        <input type="text" class="form-control input-sm" id="c11p3ao1" name="c11p3ao1"  style="display:none"  value="<?php echo($arrayrespuestas['ec11p3ao1']); ?>">
        fin para imprimir el folio y llevarlo-->
<hr>
        <form class="form-group" name="formulario" id="formulario">

           <!--Check varias selecciones -->
    <div class="row">
        <div id="c11p11intermediadiv" name="c11p11intermediadiv" class="form-group col-md-12 form-group-sm">
        <div id="c11p11intermediao0div" class="has-error">
            <label class="control-label">11. En la familia, ¿Cuáles de las siguientes situaciones se presentan actualmente?( SELECCIÓN DE MULTIPLE RESPUESTA)
                     
                     <button type="button" id="vayuda" name="vayuda" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModal">
                        <span class="glyphicon glyphicon-question-sign" aria-hidden="true"></span> Ayuda
                    </button>       
        </label>
        </div>
        <div id="c11p11intermediao1div" <?php if($arrayrespuestas['ec11p11intermediao1']=='' || $arrayrespuestas['ec11p11intermediao1']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
            <label> <!--en este caso se manda a la fincion javascript el nombre del campo-->
              <input type="checkbox" name="c11p11intermediao1" id="c11p11intermediao1" onclick="cambiarsinoc11p11intermedia('SI','c11p11intermediao1','c11p11intermediao1div','c11p11intermediadiv',16);" <?php if($arrayrespuestas['ec11p11intermediao1']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
           Violencia intrafamiliar
            </label>
        </div>
        </div>
        <div id="c11p11intermediao2div" <?php if($arrayrespuestas['ec11p11intermediao2']=='' || $arrayrespuestas['ec11p11intermediao2']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="c11p11intermediao2" id="c11p11intermediao2" onclick="cambiarsinoc11p11intermedia('SI','c11p11intermediao2','c11p11intermediao2div','c11p11intermediadiv',16);" <?php if($arrayrespuestas['ec11p11intermediao2']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            Violencia de género
          </label>
        </div>
        </div>
        <div id="c11p11intermediao3div" <?php if($arrayrespuestas['ec11p11intermediao3']==''|| $arrayrespuestas['ec11p11intermediao3']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="c11p11intermediao3" id="c11p11intermediao3" onclick="cambiarsinoc11p11intermedia('SI','c11p11intermediao3','c11p11intermediao3div','c11p11intermediadiv',16);" <?php if($arrayrespuestas['ec11p11intermediao3']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
           Abuso sexual
          </label>
        </div>
        </div>  
            
            <div id="c11p11intermediao4div" <?php if($arrayrespuestas['ec11p11intermediao4']==''|| $arrayrespuestas['ec11p11intermediao4']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="c11p11intermediao4" id="c11p11intermediao4" onclick="cambiarsinoc11p11intermedia('SI','c11p11intermediao4','c11p11intermediao4div','c11p11intermediadiv',16);" <?php if($arrayrespuestas['ec11p11intermediao4']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
           Trabajo infantil
          </label>
        </div>
        </div>  
            
            <div id="c11p11intermediao5div" <?php if($arrayrespuestas['ec11p11intermediao5']==''|| $arrayrespuestas['ec11p11intermediao5']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="c11p11intermediao5" id="c11p11intermediao5" onclick="cambiarsinoc11p11intermedia('SI','c11p11intermediao5','c11p11intermediao5div','c11p11intermediadiv',16);" <?php if($arrayrespuestas['ec11p11intermediao5']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
           Farmacodependencia
          </label>
        </div>
        </div>  
        <div id="c11p11intermediao6div" <?php if($arrayrespuestas['ec11p11intermediao6']==''|| $arrayrespuestas['ec11p11intermediao6']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="c11p11intermediao6" id="c11p11intermediao6" onclick="cambiarsinoc11p11intermedia('SI','c11p11intermediao6','c11p11intermediao6div','c11p11intermediadiv',16);" <?php if($arrayrespuestas['ec11p11intermediao6']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            Alcoholismo
          </label>
        </div>
        </div>
        <div id="c11p11intermediao7div" <?php if($arrayrespuestas['ec11p11intermediao7']==''|| $arrayrespuestas['ec11p11intermediao7']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="c11p11intermediao7" id="c11p11intermediao7" onclick="cambiarsinoc11p11intermedia('SI','c11p11intermediao7','c11p11intermediao7div','c11p11intermediadiv',16);" <?php if($arrayrespuestas['ec11p11intermediao7']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            Intento de suicidio
          </label>
        </div>
        </div>
            <div id="c11p11intermediao8div" <?php if($arrayrespuestas['ec11p11intermediao8']==''|| $arrayrespuestas['ec11p11intermediao8']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="c11p11intermediao8" id="c11p11intermediao8" onclick="cambiarsinoc11p11intermedia('SI','c11p11intermediao8','c11p11intermediao8div','c11p11intermediadiv',16);" <?php if($arrayrespuestas['ec11p11intermediao8']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            Crisis por el desempleo o dificultades económicas
          </label>
        </div>
        </div>
            <div id="c11p11intermediao9div" <?php if($arrayrespuestas['ec11p11intermediao9']==''|| $arrayrespuestas['ec11p11intermediao9']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="c11p11intermediao9" id="c11p11intermediao9" onclick="cambiarsinoc11p11intermedia('SI','c11p11intermediao9','c11p11intermediao9div','c11p11intermediadiv',16);" <?php if($arrayrespuestas['ec11p11intermediao9']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            Elaboraciones de duelo ( Muerte, desaparición, separación, entre otras)
          </label>
        </div>
        </div>
            <div id="c11p11intermediao10div" <?php if($arrayrespuestas['ec11p11intermediao10']==''|| $arrayrespuestas['ec11p11intermediao10']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="c11p11intermediao10" id="c11p11intermediao10" onclick="cambiarsinoc11p11intermedia('SI','c11p11intermediao10','c11p11intermediao10div','c11p11intermediadiv',16);" <?php if($arrayrespuestas['ec11p11intermediao10']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            Embarazo adolescente
          </label>
        </div>
        </div>
            <div id="c11p11intermediao11div" <?php if($arrayrespuestas['ec11p11intermediao11']==''|| $arrayrespuestas['ec11p11intermediao11']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="c11p11intermediao11" id="c11p11intermediao11" onclick="cambiarsinoc11p11intermedia('SI','c11p11intermediao11','c11p11intermediao11div','c11p11intermediadiv',16);" <?php if($arrayrespuestas['ec11p11intermediao11']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            Dificultades en el cuidado de personas en situación de discapacidad
          </label>
        </div>
        </div>
            <div id="c11p11intermediao12div" <?php if($arrayrespuestas['ec11p11intermediao12']==''|| $arrayrespuestas['ec11p11intermediao12']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="c11p11intermediao12" id="c11p11intermediao12" onclick="cambiarsinoc11p11intermedia('SI','c11p11intermediao12','c11p11intermediao12div','c11p11intermediadiv',16);" <?php if($arrayrespuestas['ec11p11intermediao12']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            Dificultades en el cuidado de adultos mayores
          </label>
        </div>
        </div>
            <div id="c11p11intermediao13div" <?php if($arrayrespuestas['ec11p11intermediao13']==''|| $arrayrespuestas['ec11p11intermediao13']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="c11p11intermediao13" id="c11p11intermediao13" onclick="cambiarsinoc11p11intermedia('SI','c11p11intermediao13','c11p11intermediao13div','c11p11intermediadiv',16);" <?php if($arrayrespuestas['ec11p11intermediao13']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            Alteración en los estados de ánimo de algún integrante
          </label>
        </div>
        </div>
            <div id="c11p11intermediao14div" <?php if($arrayrespuestas['ec11p11intermediao14']==''|| $arrayrespuestas['ec11p11intermediao14']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="c11p11intermediao14" id="c11p11intermediao14" onclick="cambiarsinoc11p11intermedia('SI','c11p11intermediao14','c11p11intermediao14div','c11p11intermediadiv',16);" <?php if($arrayrespuestas['ec11p11intermediao14']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            Otra  ¿ Cuál ?
          </label>
        </div>
        </div>
            <div id="c11p11intermediao15div" <?php if($arrayrespuestas['ec11p11intermediao15']==''|| $arrayrespuestas['ec11p11intermediao15']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="c11p11intermediao15" id="c11p11intermediao15" onclick="cambiarsinoc11p11intermedia('SI','c11p11intermediao15','c11p11intermediao15div','c11p11intermediadiv',16);" <?php if($arrayrespuestas['ec11p11intermediao15']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            Ninguna
          </label>
        </div>
        </div>
       <div class="row" id="c11p11intermediacualmostrar" name="c11p11intermediacualmostrar" <?php if($arrayrespuestas['ec11p11intermediao14']== 'NO'||$arrayrespuestas['ec11p11intermediao14']== ''){echo('style="display:none"');}else{echo('');}  ?> >
        <div  id="c11p11intermediacualdiv" name="c11p11intermediacualdiv" class="form-group col-md-3">
                       <label class="control-label">Cual?</label>
                       <input type="text" class="form-control text-uppercase" id="c11p11intermediacual" onkeypress="return soloLetras(event)"  onchange="validarcampotexcuadros('c11p11intermediacualdiv','c11p11intermediacual','8')" name="c11p11intermediacual"   placeholder="Cual?" value="<?php if($arrayrespuestas['ec11p11intermediacual'] == ''){echo('0');}else{ echo($arrayrespuestas['ec11p11intermediacual']);} ?>">
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
            <?php if($arrayrespuestas['ec11p11intermediao1']=="" & $arrayrespuestas['ec11p11intermediao2']=="" & $arrayrespuestas['ec11p11intermediao3']=="" & $arrayrespuestas['ec11p11intermediao6']=="" & $arrayrespuestas['ec11p11intermediacual']=="")
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
                          data: {vfolio : $('#folio').val(), vc11p11intermediao1 : $('#c11p11intermediao1').val(),vc11p11intermediao2 : $('#c11p11intermediao2').val(),
                              vc11p11intermediao3 : $('#c11p11intermediao3').val(),vc11p11intermediao4 : $('#c11p11intermediao4').val(),vc11p11intermediao5 : $('#c11p11intermediao5').val(),
                              vc11p11intermediao6 : $('#c11p11intermediao6').val(),vc11p11intermediao7 : $('#c11p11intermediao7').val(),vc11p11intermediao8 : $('#c11p11intermediao8').val()
                              ,vc11p11intermediao9 : $('#c11p11intermediao9').val(),vc11p11intermediao10 : $('#c11p11intermediao10').val(),vc11p11intermediao11 : $('#c11p11intermediao11').val()
                              ,vc11p11intermediao12 : $('#c11p11intermediao12').val(),vc11p11intermediao13 : $('#c11p11intermediao13').val(),vc11p11intermediao14 : $('#c11p11intermediao14').val()
                              ,vc11p11intermediao15 : $('#c11p11intermediao15').val(),vc11p11intermediacual : $('#c11p11intermediacual').val()},    
                          dataType: "html",
                          success : function(obj){                      
                          botonguardar();
                          }
                        });                    
        });
        
        
          $("#capitulos").click(function ()
        {
            
            location.href = "../c_capituloshogarintermediaLCV1/fc_capituloshogarintermediaLCV1?folio=" + $('#folio').val() +  "&idintegrante=0" ;                    
         
            });

        
        $("#actualizar").click(function ()
        {
                        $.ajax({
                          url: "fc_actualizar",
                          type: "GET",
                         data: {vfolio : $('#folio').val(), vc11p11intermediao1 : $('#c11p11intermediao1').val(),vc11p11intermediao2 : $('#c11p11intermediao2').val(),
                              vc11p11intermediao3 : $('#c11p11intermediao3').val(),vc11p11intermediao4 : $('#c11p11intermediao4').val(),vc11p11intermediao5 : $('#c11p11intermediao5').val(),
                              vc11p11intermediao6 : $('#c11p11intermediao6').val(),vc11p11intermediao7 : $('#c11p11intermediao7').val(),vc11p11intermediao8 : $('#c11p11intermediao8').val()
                              ,vc11p11intermediao9 : $('#c11p11intermediao9').val(),vc11p11intermediao10 : $('#c11p11intermediao10').val(),vc11p11intermediao11 : $('#c11p11intermediao11').val()
                              ,vc11p11intermediao12 : $('#c11p11intermediao12').val(),vc11p11intermediao13 : $('#c11p11intermediao13').val(),vc11p11intermediao14 : $('#c11p11intermediao14').val()
                              ,vc11p11intermediao15 : $('#c11p11intermediao15').val(),vc11p11intermediacual : $('#c11p11intermediacual').val()}, 
                         dataType: "html",
                          success : function(obj){                      
                          botonactualizar();
                          }
                        });                   
        });
        

        $("#siguiente").click(function ()
        {
         
         
//         $.ajax({
//                          url: "fc_cerrarpaso",
//                          type: "GET",
//                         data: {vfolio: $('#folio').val(), vidpaso: 8103, vestado:1},
//                          dataType: "html",
//                          success : function(obj){   
                              
                              location.href = "../c_capituloshogarintermediaLCV1/fc_capituloshogarintermediaLCV1?folio=" + $('#folio').val() + "&idintegrante=0";                    
                          
                        
         
         
        });

//        $("#siguiente").click(function ()
//        {
//         botonsiguiente();
//         location.href = "../c_c11p11intermediaa/fc_c11p11intermediaa?folio=" + $('#folio').val();                    
//
//        });

 $("#anterior").click(function ()
        {
         botonanterior();
        location.href = "../c_c6p15intermediaLCV1/fc_c6p15intermediaLCV1?folio=" + $('#folio').val();                    
        });

//        $("#anterior").click(function ()
//        {
//         botonanterior();
//         if($('#c11p2o7').val() == 'SI')
//         {
//             
//             location.href = "../c_c11p2/fc_c11p2?folio=" + $('#folio').val();                    
//         }
//         else{
//        location.href = "../c_c11p2b/fc_c11p2b?folio=" + $('#folio').val();                    
//        }});

//para cargar variables capitulo, pregunta,encuestador,vivienda,barra
cargardatosgenerales('<?php echo($arraydatosgenerales['ecapitulo']); ?>','Pregunta 11 de 11','<?php echo($arraydatosgenerales['enomcoges']); ?>','<?php echo($arraydatosgenerales['etitular']); ?>','98');
//control del boton ayuda
botonayuda();

});




//dea aca para abajo es logica de cuadros
function cambiarsinoc11p11intermedia(opcion,campoval,divcampo,divcompleto,campos,mostrar)
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
    if(campoval == 'c11p11intermediao14')
        {
            if($('#' + campoval).val() == 'SI')
            {
                //alert('aca lo muestra');
                $('#c11p11intermediacualmostrar').show();
                $('#c11p11intermediacual').val('');
                $('#c11p11intermediacualdiv').addClass(' has-error');            

            }
            else
            {
                //alert('aca lo oculta');
                $('#c11p11intermediacualmostrar').hide();
                $('#c11p11intermediacual').val('98');
                $('#c11p11intermediacualdiv').removeClass(' has-error');
  
            }
        }
        
        
        if(campoval == 'c11p11intermediao15')
           {
            if($('#' + campoval).val() == 'SI')
            {
              $('#c11p11intermediao1').prop('checked' , false);
              $('#c11p11intermediao1div').addClass(' has-error');
              $('#c11p11intermediao2').prop('checked' , false);
              $('#c11p11intermediao2div').addClass(' has-error');
              $('#c11p11intermediao3').prop('checked' , false);
              $('#c11p11intermediao3div').addClass(' has-error');
              $('#c11p11intermediao4').prop('checked' , false);
              $('#c11p11intermediao4div').addClass(' has-error');
              $('#c11p11intermediao5').prop('checked' , false);
              $('#c11p11intermediao5div').addClass(' has-error');
              $('#c11p11intermediao6').prop('checked' , false);
              $('#c11p11intermediao6div').addClass(' has-error');
              $('#c11p11intermediao7').prop('checked' , false);
              $('#c11p11intermediao7div').addClass(' has-error');
              $('#c11p11intermediao8').prop('checked' , false);
              $('#c11p11intermediao8div').addClass(' has-error');
              $('#c11p11intermediao9').prop('checked' , false);
              $('#c11p11intermediao9div').addClass(' has-error');
              $('#c11p11intermediao10').prop('checked' , false);
              $('#c11p11intermediao10div').addClass(' has-error');
              $('#c11p11intermediao11').prop('checked' , false);
              $('#c11p11intermediao11div').addClass(' has-error');
              $('#c11p11intermediao12').prop('checked' , false);
              $('#c11p11intermediao12div').addClass(' has-error');
              $('#c11p11intermediao13').prop('checked' , false);
              $('#c11p11intermediao13div').addClass(' has-error');
              $('#c11p11intermediao14').prop('checked' , false);
              $('#c11p11intermediao14div').addClass(' has-error');
              
              $('#c11p11intermediacualmostrar').hide(1000);
              $('#c11p11intermediacual').val('98');
                            
              $('#c11p11intermediao1').val('NO');
              $('#c11p11intermediao2').val('NO');
              $('#c11p11intermediao3').val('NO');
              $('#c11p11intermediao4').val('NO');
              $('#c11p11intermediao5').val('NO');
              $('#c11p11intermediao6').val('NO');
              $('#c11p11intermediao7').val('NO');
              $('#c11p11intermediao8').val('NO');
              $('#c11p11intermediao9').val('NO');
              $('#c11p11intermediao10').val('NO');
              $('#c11p11intermediao11').val('NO');
              $('#c11p11intermediao12').val('NO');
              $('#c11p11intermediao13').val('NO');
              $('#c11p11intermediao14').val('NO');
              
              }
}
        else
       {
          $('#c11p11intermediao15').prop('checked' , false); 
          $('#c11p11intermediao15').val('NO');
          $('#c11p11intermediao15div').addClass(' has-error');
      }
        

      validarcuadrosc11p11intermedia(divcompleto,campos);
}

function validarcuadrosc11p11intermedia(divcuadro,ncampos)
{
    
    if ($('#c11p11intermediacual').val() != '')
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

    validarcuadrosc11p11intermedia(div,ncampos);
}



</script>
</html>