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
        <input type="text" class="form-control input-sm" id="c11p11ao1" name="c11p11ao1" style="display:none" value="<?php echo($arrayrespuestas['ec11p11ao1']); ?>">
<!--        <input type="text" class="form-control input-sm" id="c11p3ao1" name="c11p3ao1"  style="display:none"  value="<?php echo($arrayrespuestas['ec11p3ao1']); ?>">
        fin para imprimir el folio y llevarlo-->
<hr>
        <form class="form-group" name="formulario" id="formulario">

           <!--Check varias selecciones -->
    <div class="row">
        <div id="c11p11div" name="c11p11div" class="form-group col-md-12 form-group-sm">
        <div id="c11p11o0div" class="has-error">
            <label class="control-label">11. En la familia, ¿Cuáles de las siguientes situaciones se presentan actualmente?( SELECCIÓN DE MULTIPLE RESPUESTA)
                     
                     <button type="button" id="vayuda" name="vayuda" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModal">
                        <span class="glyphicon glyphicon-question-sign" aria-hidden="true"></span> Ayuda
                    </button>       
        </label>
        </div>
        <div id="c11p11o1div" <?php if($arrayrespuestas['ec11p11o1']=='' || $arrayrespuestas['ec11p11o1']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
            <label> <!--en este caso se manda a la fincion javascript el nombre del campo-->
              <input type="checkbox" name="c11p11o1" id="c11p11o1" onclick="cambiarsinoc11p11('SI','c11p11o1','c11p11o1div','c11p11div',16);" <?php if($arrayrespuestas['ec11p11o1']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
           Violencia intrafamiliar
            </label>
        </div>
        </div>
        <div id="c11p11o2div" <?php if($arrayrespuestas['ec11p11o2']=='' || $arrayrespuestas['ec11p11o2']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="c11p11o2" id="c11p11o2" onclick="cambiarsinoc11p11('SI','c11p11o2','c11p11o2div','c11p11div',16);" <?php if($arrayrespuestas['ec11p11o2']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            Violencia de género
          </label>
        </div>
        </div>
        <div id="c11p11o3div" <?php if($arrayrespuestas['ec11p11o3']==''|| $arrayrespuestas['ec11p11o3']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="c11p11o3" id="c11p11o3" onclick="cambiarsinoc11p11('SI','c11p11o3','c11p11o3div','c11p11div',16);" <?php if($arrayrespuestas['ec11p11o3']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
           Abuso sexual
          </label>
        </div>
        </div>  
            
            <div id="c11p11o4div" <?php if($arrayrespuestas['ec11p11o4']==''|| $arrayrespuestas['ec11p11o4']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="c11p11o4" id="c11p11o4" onclick="cambiarsinoc11p11('SI','c11p11o4','c11p11o4div','c11p11div',16);" <?php if($arrayrespuestas['ec11p11o4']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
           Trabajo infantil
          </label>
        </div>
        </div>  
            
            <div id="c11p11o5div" <?php if($arrayrespuestas['ec11p11o5']==''|| $arrayrespuestas['ec11p11o5']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="c11p11o5" id="c11p11o5" onclick="cambiarsinoc11p11('SI','c11p11o5','c11p11o5div','c11p11div',16);" <?php if($arrayrespuestas['ec11p11o5']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
           Farmacodependencia
          </label>
        </div>
        </div>  
        <div id="c11p11o6div" <?php if($arrayrespuestas['ec11p11o6']==''|| $arrayrespuestas['ec11p11o6']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="c11p11o6" id="c11p11o6" onclick="cambiarsinoc11p11('SI','c11p11o6','c11p11o6div','c11p11div',16);" <?php if($arrayrespuestas['ec11p11o6']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            Alcoholismo
          </label>
        </div>
        </div>
        <div id="c11p11o7div" <?php if($arrayrespuestas['ec11p11o7']==''|| $arrayrespuestas['ec11p11o7']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="c11p11o7" id="c11p11o7" onclick="cambiarsinoc11p11('SI','c11p11o7','c11p11o7div','c11p11div',16);" <?php if($arrayrespuestas['ec11p11o7']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            Intento de suicidio
          </label>
        </div>
        </div>
            <div id="c11p11o8div" <?php if($arrayrespuestas['ec11p11o8']==''|| $arrayrespuestas['ec11p11o8']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="c11p11o8" id="c11p11o8" onclick="cambiarsinoc11p11('SI','c11p11o8','c11p11o8div','c11p11div',16);" <?php if($arrayrespuestas['ec11p11o8']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            Crisis por el desempleo o dificultades económicas
          </label>
        </div>
        </div>
            <div id="c11p11o9div" <?php if($arrayrespuestas['ec11p11o9']==''|| $arrayrespuestas['ec11p11o9']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="c11p11o9" id="c11p11o9" onclick="cambiarsinoc11p11('SI','c11p11o9','c11p11o9div','c11p11div',16);" <?php if($arrayrespuestas['ec11p11o9']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            Elaboraciones de duelo ( Muerte, desaparición, separación, entre otras)
          </label>
        </div>
        </div>
            <div id="c11p11o10div" <?php if($arrayrespuestas['ec11p11o10']==''|| $arrayrespuestas['ec11p11o10']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="c11p11o10" id="c11p11o10" onclick="cambiarsinoc11p11('SI','c11p11o10','c11p11o10div','c11p11div',16);" <?php if($arrayrespuestas['ec11p11o10']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            Embarazo adolescente
          </label>
        </div>
        </div>
            <div id="c11p11o11div" <?php if($arrayrespuestas['ec11p11o11']==''|| $arrayrespuestas['ec11p11o11']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="c11p11o11" id="c11p11o11" onclick="cambiarsinoc11p11('SI','c11p11o11','c11p11o11div','c11p11div',16);" <?php if($arrayrespuestas['ec11p11o11']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            Dificultades en el cuidado de personas en situación de discapacidad
          </label>
        </div>
        </div>
            <div id="c11p11o12div" <?php if($arrayrespuestas['ec11p11o12']==''|| $arrayrespuestas['ec11p11o12']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="c11p11o12" id="c11p11o12" onclick="cambiarsinoc11p11('SI','c11p11o12','c11p11o12div','c11p11div',16);" <?php if($arrayrespuestas['ec11p11o12']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            Dificultades en el cuidado de adultos mayores
          </label>
        </div>
        </div>
            <div id="c11p11o13div" <?php if($arrayrespuestas['ec11p11o13']==''|| $arrayrespuestas['ec11p11o13']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="c11p11o13" id="c11p11o13" onclick="cambiarsinoc11p11('SI','c11p11o13','c11p11o13div','c11p11div',16);" <?php if($arrayrespuestas['ec11p11o13']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            Alteración en los estados de ánimo de algún integrante
          </label>
        </div>
        </div>
            <div id="c11p11o14div" <?php if($arrayrespuestas['ec11p11o14']==''|| $arrayrespuestas['ec11p11o14']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="c11p11o14" id="c11p11o14" onclick="cambiarsinoc11p11('SI','c11p11o14','c11p11o14div','c11p11div',16);" <?php if($arrayrespuestas['ec11p11o14']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            Otra  ¿ Cuál ?
          </label>
        </div>
        </div>
            <div id="c11p11o15div" <?php if($arrayrespuestas['ec11p11o15']==''|| $arrayrespuestas['ec11p11o15']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="c11p11o15" id="c11p11o15" onclick="cambiarsinoc11p11('SI','c11p11o15','c11p11o15div','c11p11div',16);" <?php if($arrayrespuestas['ec11p11o15']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            Ninguna
          </label>
        </div>
        </div>
       <div class="row" id="c11p11cualmostrar" name="c11p11cualmostrar" <?php if($arrayrespuestas['ec11p11o14']== 'NO'||$arrayrespuestas['ec11p11o14']== ''){echo('style="display:none"');}else{echo('');}  ?> >
        <div  id="c11p11cualdiv" name="c11p11cualdiv" class="form-group col-md-3">
                       <label class="control-label">Cual?</label>
                       <input type="text" class="form-control text-uppercase" id="c11p11cual" onkeypress="return soloLetras(event)"  onchange="validarcampotexcuadros('c11p11cualdiv','c11p11cual','8')" name="c11p11cual"   placeholder="Cual?" value="<?php if($arrayrespuestas['ec11p11cual'] == ''){echo('0');}else{ echo($arrayrespuestas['ec11p11cual']);} ?>">
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
            <?php if($arrayrespuestas['ec11p11o1']=="" & $arrayrespuestas['ec11p11o2']=="" & $arrayrespuestas['ec11p11o3']=="" & $arrayrespuestas['ec11p11o6']=="" & $arrayrespuestas['ec11p11cual']=="")
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
                          data: {vfolio : $('#folio').val(), vc11p11o1 : $('#c11p11o1').val(),vc11p11o2 : $('#c11p11o2').val(),
                              vc11p11o3 : $('#c11p11o3').val(),vc11p11o4 : $('#c11p11o4').val(),vc11p11o5 : $('#c11p11o5').val(),
                              vc11p11o6 : $('#c11p11o6').val(),vc11p11o7 : $('#c11p11o7').val(),vc11p11o8 : $('#c11p11o8').val()
                              ,vc11p11o9 : $('#c11p11o9').val(),vc11p11o10 : $('#c11p11o10').val(),vc11p11o11 : $('#c11p11o11').val()
                              ,vc11p11o12 : $('#c11p11o12').val(),vc11p11o13 : $('#c11p11o13').val(),vc11p11o14 : $('#c11p11o14').val()
                              ,vc11p11o15 : $('#c11p11o15').val(),vc11p11cual : $('#c11p11cual').val()},    
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
                         data: {vfolio : $('#folio').val(), vc11p11o1 : $('#c11p11o1').val(),vc11p11o2 : $('#c11p11o2').val(),
                              vc11p11o3 : $('#c11p11o3').val(),vc11p11o4 : $('#c11p11o4').val(),vc11p11o5 : $('#c11p11o5').val(),
                              vc11p11o6 : $('#c11p11o6').val(),vc11p11o7 : $('#c11p11o7').val(),vc11p11o8 : $('#c11p11o8').val()
                              ,vc11p11o9 : $('#c11p11o9').val(),vc11p11o10 : $('#c11p11o10').val(),vc11p11o11 : $('#c11p11o11').val()
                              ,vc11p11o12 : $('#c11p11o12').val(),vc11p11o13 : $('#c11p11o13').val(),vc11p11o14 : $('#c11p11o14').val()
                              ,vc11p11o15 : $('#c11p11o15').val(),vc11p11cual : $('#c11p11cual').val()}, 
                         dataType: "html",
                          success : function(obj){                      
                          botonactualizar();
                          }
                        });                   
        });
        

        $("#siguiente").click(function ()
        {
         botonsiguiente();
            if($('#c11p11o15').val() === 'SI')
           {  
               $.ajax({
                             url: "../c_c11p11a/fc_actualizar",
                             type: "GET",
                             data: {vfolio : $('#folio').val(), vc11p11ao1 :'98',vc11p11ao2 :'98',
                             vc11p11ao3 :'98',vc11p11ao4 :'98',vc11p11acual :'98'},    
                             dataType: "html",
                             success : function(obj){  
                             location.href = "../c_capituloshogar/fc_capituloshogar?folio="+ $('#folio').val() +"&idintegrante=0";      
                             }
                           }); 
                           
           }
          else if ($('#c11p11o15').val() === 'NO' && $('#c11p11ao1').val() === '98')
           {    
              
               
               $.ajax({      url: "../c_c11p11a/fc_actualizar",
                             type: "GET",
                             data: {vfolio : $('#folio').val(), vc11p11ao1 :'',vc11p11ao2 :'',
                             vc11p11ao3 :'',vc11p11ao4 :'',vc11p11acual :''},    
                             dataType: "html",
                             success : function(obj){  
                             location.href = "../c_c11p11a/fc_c11p11a?folio=" + $('#folio').val();      
                             }
                           });                 
           }
           else
                {
                   
                   location.href = "../c_c11p11a/fc_c11p11a?folio=" + $('#folio').val();   
                }
        });

//        $("#siguiente").click(function ()
//        {
//         botonsiguiente();
//         location.href = "../c_c11p11a/fc_c11p11a?folio=" + $('#folio').val();                    
//
//        });

 $("#anterior").click(function ()
        {
         botonanterior();
        location.href = "../c_c11p10/fc_c11p10?folio=" + $('#folio').val();                    
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
function cambiarsinoc11p11(opcion,campoval,divcampo,divcompleto,campos,mostrar)
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
    if(campoval == 'c11p11o14')
        {
            if($('#' + campoval).val() == 'SI')
            {
                //alert('aca lo muestra');
                $('#c11p11cualmostrar').show(1000);
                $('#c11p11cual').val('');
                $('#c11p11cualdiv').addClass(' has-error');            

            }
            else
            {
                //alert('aca lo oculta');
                $('#c11p11cualmostrar').hide(1000);
                $('#c11p11cual').val('98');
                $('#c11p11cualdiv').removeClass(' has-error');
  
            }
        }
        
        
        if(campoval == 'c11p11o15')
           {
            if($('#' + campoval).val() == 'SI')
            {
              $('#c11p11o1').prop('checked' , false);
              $('#c11p11o1div').addClass(' has-error');
              $('#c11p11o2').prop('checked' , false);
              $('#c11p11o2div').addClass(' has-error');
              $('#c11p11o3').prop('checked' , false);
              $('#c11p11o3div').addClass(' has-error');
              $('#c11p11o4').prop('checked' , false);
              $('#c11p11o4div').addClass(' has-error');
              $('#c11p11o5').prop('checked' , false);
              $('#c11p11o5div').addClass(' has-error');
              $('#c11p11o6').prop('checked' , false);
              $('#c11p11o6div').addClass(' has-error');
              $('#c11p11o7').prop('checked' , false);
              $('#c11p11o7div').addClass(' has-error');
              $('#c11p11o8').prop('checked' , false);
              $('#c11p11o8div').addClass(' has-error');
              $('#c11p11o9').prop('checked' , false);
              $('#c11p11o9div').addClass(' has-error');
              $('#c11p11o10').prop('checked' , false);
              $('#c11p11o10div').addClass(' has-error');
              $('#c11p11o11').prop('checked' , false);
              $('#c11p11o11div').addClass(' has-error');
              $('#c11p11o12').prop('checked' , false);
              $('#c11p11o12div').addClass(' has-error');
              $('#c11p11o13').prop('checked' , false);
              $('#c11p11o13div').addClass(' has-error');
              $('#c11p11o14').prop('checked' , false);
              $('#c11p11o14div').addClass(' has-error');
              
              $('#c11p11cualmostrar').hide(1000);
              $('#c11p11cual').val('98');
                            
              $('#c11p11o1').val('NO');
              $('#c11p11o2').val('NO');
              $('#c11p11o3').val('NO');
              $('#c11p11o4').val('NO');
              $('#c11p11o5').val('NO');
              $('#c11p11o6').val('NO');
              $('#c11p11o7').val('NO');
              $('#c11p11o8').val('NO');
              $('#c11p11o9').val('NO');
              $('#c11p11o10').val('NO');
              $('#c11p11o11').val('NO');
              $('#c11p11o12').val('NO');
              $('#c11p11o13').val('NO');
              $('#c11p11o14').val('NO');
              
              }
}
        else
       {
          $('#c11p11o15').prop('checked' , false); 
          $('#c11p11o15').val('NO');
          $('#c11p11o15div').addClass(' has-error');
      }
        

      validarcuadrosc11p11(divcompleto,campos);
}

function validarcuadrosc11p11(divcuadro,ncampos)
{
    
    if ($('#c11p11cual').val() != '')
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

    validarcuadrosc11p11(div,ncampos);
}



</script>
</html>