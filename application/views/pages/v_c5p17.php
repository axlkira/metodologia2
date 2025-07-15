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
       <input type="text" class="form-control input-sm" id="c5p18" name="c5p18"  style="display:none"   placeholder="" value="<?php echo($arrayrespuestas['ec5p18']); ?>">
        <!--fin para imprimir el idintegrante y llevarlo-->
<hr>
        <form class="form-group" name="formulario" id="formulario">

           <!--Check varias selecciones -->
    <div class="row">
        <div id="c5p17div" name="c5p17div" class="form-group col-md-12 form-group-sm">
        <div id="c5p17o0div" class="has-error">
            <label class="control-label">17.  Preguntar a mujeres  gestantes ¿Cuáles de los siguientes suplementos nutricionales, le recetó el médico ?  </br>
                     Multiple respuesta
                     <button type="button" id="vayuda" name="vayuda" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModal">
                        <span class="glyphicon glyphicon-question-sign" aria-hidden="true"></span> Ayuda
                    </button>       
        </label>
        </div>
        <div id="c5p17o1div" <?php if($arrayrespuestas['ec5p17o1']=='' || $arrayrespuestas['ec5p17o1']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
            <label> <!--en este caso se manda a la fincion javascript el nombre del campo-->
              <input type="checkbox" name="c5p17o1" id="c5p17o1" onclick="cambiarsinoc5p17('SI','c5p17o1','c5p17o1div','c5p17div',5);" <?php if($arrayrespuestas['ec5p17o1']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            Hierro
            </label>
        </div>
        </div>
        <div id="c5p17o2div" <?php if($arrayrespuestas['ec5p17o2']=='' || $arrayrespuestas['ec5p17o2']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="c5p17o2" id="c5p17o2" onclick="cambiarsinoc5p17('SI','c5p17o2','c5p17o2div','c5p17div',5);" <?php if($arrayrespuestas['ec5p17o2']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            Calcio
          </label>
        </div>
        </div>
        <div id="c5p17o3div" <?php if($arrayrespuestas['ec5p17o3']==''|| $arrayrespuestas['ec5p17o3']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="c5p17o3" id="c5p17o3" onclick="cambiarsinoc5p17('SI','c5p17o3','c5p17o3div','c5p17div',5);" <?php if($arrayrespuestas['ec5p17o3']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            Acido Fólico
          </label>
        </div>
        </div>  
      
         <div id="c5p17o4div" <?php if($arrayrespuestas['ec5p17o4']==''|| $arrayrespuestas['ec5p17o4']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="c5p17o4" id="c5p17o4" onclick="cambiarsinoc5p17('SI','c5p17o4','c5p17o4div','c5p17div',5);" <?php if($arrayrespuestas['ec5p17o4']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
           Otro
          </label>
        </div>
        </div>         
            
        <div class="row" id="c5p17cualmostrar" name="c5p17cualmostrar" <?php if($arrayrespuestas['ec5p17o4']== 'NO'||$arrayrespuestas['ec5p17o4']== ''){echo('style="display:none"');}else{echo('');}  ?> >
        <div  id="c5p17cualdiv" name="c5p17cualdiv" class="form-group col-md-3">
                       <label class="control-label">Cual?</label>
                       <input type="text" class="form-control text-uppercase" id="c5p17cual" onkeypress="return soloLetras(event)"  onchange="validarcampotexcuadros('c5p17cualdiv','c5p17cual','10')" name="c5p17cual"   placeholder="Cual?" value="<?php if($arrayrespuestas['ec5p17cual'] == ''){echo('0');}else{ echo($arrayrespuestas['ec5p17cual']);} ?>">
        </div>
        </div>
        <div id="c5p17o5div" <?php if($arrayrespuestas['ec5p17o5']==''|| $arrayrespuestas['ec5p17o5']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="c5p17o5" id="c5p17o5" onclick="cambiarsinoc5p17('SI','c5p17o5','c5p17o5div','c5p17div',5);" <?php if($arrayrespuestas['ec5p17o5']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
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
            <?php if($arrayrespuestas['ec5p17o1']=="" & $arrayrespuestas['ec5p17o2']=="" & $arrayrespuestas['ec5p17o3']==""& $arrayrespuestas['ec5p17o4']==""
                     & $arrayrespuestas['ec5p17o5']=="")
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
                          vc5p17o1 : $('#c5p17o1').val(),          
                          vc5p17o2 : $('#c5p17o2').val(),
                          vc5p17o3 : $('#c5p17o3').val(),
                          vc5p17o4 : $('#c5p17o4').val(),
                          vc5p17o5 : $('#c5p17o5').val(),
                          vc5p17cual : $('#c5p17cual').val()},
                      
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
                          vc5p17o1 : $('#c5p17o1').val(),          
                          vc5p17o2 : $('#c5p17o2').val(),
                          vc5p17o3 : $('#c5p17o3').val(),
                          vc5p17o4 : $('#c5p17o4').val(),
                          vc5p17o5 : $('#c5p17o5').val(),                          
                          vc5p17cual : $('#c5p17cual').val()},
                      
                          dataType: "html",
                          success : function(obj){                      
                          botonguardar();
                          }
                        });                    
        });
         $("#siguiente").click(function ()
       {
        botonsiguiente();
        if($('#c5p17o5').val() === 'SI')
          {                $.ajax({
                           url: "../c_c5p18/fc_actualizar",
                           type: "GET",
                           data: {vfolio : $('#folio').val(),
                           vidintegrante : $('#idintegrante').val(),    
                           vvalorc5p18 : '98'},    
                           dataType: "html",
                           success : function(obj)
                           {
                          //location.href = "../c_c5p17/fc_c5p17?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
                           }
                          });
                          $.ajax({
                           url: "../c_c5p19/fc_actualizar",
                           type: "GET",
                           data: {vfolio : $('#folio').val(),
                           vidintegrante : $('#idintegrante').val(),    
                           vvalorc5p19 : '98',
                           vvalorc5p19cual : '98'},    
                           dataType: "html",
                           success : function(obj)
                           {
                         // location.href = "../c_c5p17/fc_c5p17?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
                           }
                          });
                          $.ajax({
                           url: "../c_c5p20/fc_actualizar",
                           type: "GET",
                           data: {vfolio : $('#folio').val(),
                           vidintegrante : $('#idintegrante').val(),    
                           vvalorc5p20 :'98'},    
                           dataType: "html",
                           success : function(obj)
                           {
                        //  location.href = "../c_c5p17/fc_c5p17?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
                           }
                          });
                          $.ajax({
                           url: "../c_c5p201/fc_actualizar",
                           type: "GET",
                           data: {vfolio : $('#folio').val(),
                           vidintegrante : $('#idintegrante').val(),    
                           vc5p201o1 : '98',          
                           vc5p201o2 : '98',
                           vc5p201o3 : '98',
                           vc5p201o4 : '98',
                           vc5p201o5 : '98',
                           vc5p201o6 : '98',
                           vc5p201o7 : '98',
                           vc5p201o8 : '98',
                           vc5p201o9 : '98'},
                           dataType: "html", 
                           success : function(obj)
                           {
                          //location.href = "../c_c5p17/fc_c5p17?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
                           }
                          });
                          $.ajax({
                           url: "../c_c5p21/fc_actualizar",
                           type: "GET",
                           data: {vfolio : $('#folio').val(),
                           vidintegrante : $('#idintegrante').val(),    
                           vvalorc5p21 :'98'},    
                           dataType: "html",
                           success : function(obj)
                           {
                          //location.href = "../c_c5p17/fc_c5p17?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
                           }
                          });
                          $.ajax({
                           url: "../c_c5p211/fc_actualizar",
                           type: "GET",
                           data: {vfolio : $('#folio').val(),
                           vidintegrante : $('#idintegrante').val(),    
                           vc5p211o1 :'98',          
                           vc5p211o2 :'98',
                           vc5p211o3 :'98',
                           vc5p211o4 :'98',
                           vc5p211o5 :'98',                                                   
                           vc5p211cual :'98'},
                           dataType: "html",
                           success : function(obj)
                           {
                          //location.href = "../c_c5p17/fc_c5p17?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
                           }
                          });
                          $.ajax({
                           url: "../c_c5p22/fc_actualizar",
                           type: "GET",
                           data: {vfolio : $('#folio').val(),
                           vidintegrante : $('#idintegrante').val(),    
                           vvalorc5p22 : '98',
                           vvalorc5p22esquema : '98'},                      
                           dataType: "html",
                           success : function(obj)
                           {
                          location.href = "../c_capitulosintegrante/fc_capitulosintegrante?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                     
                           }
                          });
           }
          else if (($('#c5p17o5').val() === 'NO' && $('#c5p18').val() === '98'))
          {                $.ajax({
                           url: "../c_c5p18/fc_actualizar",
                           type: "GET",
                           data: {vfolio : $('#folio').val(),
                           vidintegrante : $('#idintegrante').val(),    
                           vvalorc5p18 : ''},    
                           dataType: "html",
                           success : function(obj)
                           {
                          //location.href = "../c_c5p17/fc_c5p17?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
                           }
                          });
                          $.ajax({
                           url: "../c_c5p19/fc_actualizar",
                           type: "GET",
                           data: {vfolio : $('#folio').val(),
                           vidintegrante : $('#idintegrante').val(),    
                           vvalorc5p19 : '',
                           vvalorc5p19cual : ''},    
                           dataType: "html",
                           success : function(obj)
                           {
                         // location.href = "../c_c5p17/fc_c5p17?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
                           }
                          });
                          $.ajax({
                           url: "../c_c5p20/fc_actualizar",
                           type: "GET",
                           data: {vfolio : $('#folio').val(),
                           vidintegrante : $('#idintegrante').val(),    
                           vvalorc5p20 :''},    
                           dataType: "html",
                           success : function(obj)
                           {
                        //  location.href = "../c_c5p17/fc_c5p17?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
                           }
                          });
                          $.ajax({
                           url: "../c_c5p201/fc_actualizar",
                           type: "GET",
                           data: {vfolio : $('#folio').val(),
                           vidintegrante : $('#idintegrante').val(),    
                           vc5p201o1 : '',          
                           vc5p201o2 : '',
                           vc5p201o3 : '',
                           vc5p201o4 : '',
                           vc5p201o5 : '',
                           vc5p201o6 : '',
                           vc5p201o7 : '',
                           vc5p201o8 : '',
                           vc5p201o9 : ''},
                           dataType: "html", 
                           success : function(obj)
                           {
                          //location.href = "../c_c5p17/fc_c5p17?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
                           }
                          });
                          $.ajax({
                           url: "../c_c5p21/fc_actualizar",
                           type: "GET",
                           data: {vfolio : $('#folio').val(),
                           vidintegrante : $('#idintegrante').val(),    
                           vvalorc5p21 :''},    
                           dataType: "html",
                           success : function(obj)
                           {
                          //location.href = "../c_c5p17/fc_c5p17?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
                           }
                          });
                          $.ajax({
                           url: "../c_c5p211/fc_actualizar",
                           type: "GET",
                           data: {vfolio : $('#folio').val(),
                           vidintegrante : $('#idintegrante').val(),    
                           vc5p211o1 :'',          
                           vc5p211o2 :'',
                           vc5p211o3 :'',
                           vc5p211o4 :'',
                           vc5p211o5 :'',                                                   
                           vc5p211cual :''},
                           dataType: "html",
                           success : function(obj)
                           {
                          //location.href = "../c_c5p17/fc_c5p17?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
                           }
                          });
                          $.ajax({
                           url: "../c_c5p22/fc_actualizar",
                           type: "GET",
                           data: {vfolio : $('#folio').val(),
                           vidintegrante : $('#idintegrante').val(),    
                           vvalorc5p22 :'',
                           vvalorc5p22esquema :''},    
                           dataType: "html",
                           success : function(obj)
                           {
                          location.href = "../c_c5p18/fc_c5p18?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
                           }
                          });
                }
          else
                {
                    location.href = "../c_c5p18/fc_c5p18?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
                }
            });
        

//        $("#siguiente").click(function ()
//        {
//         botonsiguiente();
//         location.href = "../c_c5p18/fc_c5p18?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
//
//        });
//              
        $("#anterior").click(function ()
        {
         botonanterior();
         location.href = "../c_c5p16/fc_c5p16?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
        });

//para cargar variables capitulo, pregunta,encuestador,vivienda,barra



cargardatosgenerales('<?php echo($arraydatosgenerales['ecapitulo']); ?>','Pregunta 17 de 22','<?php echo($arraydatosgenerales['enomcoges']); ?>','<?php echo($arraydatosgenerales['enombreintegrante']." "." - "." "."Sexo:"." ".$arraydatosgenerales['esexointegrante']."   "."  -  "."   "."Edad:"."   ".$arraydatosgenerales['eedadintegrante']); ?>','70');
//control del boton ayuda
botonayuda();

});
//dea aca para abajo es logica de cuadros
function cambiarsinoc5p17(opcion,campoval,divcampo,divcompleto,campos)
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
    if(campoval == 'c5p17o4')
        {
            if($('#' + campoval).val() == 'SI')
            {
                //alert('aca lo muestra');
                $('#c5p17cualmostrar').show(1000);
                $('#c5p17cual').val('');
                $('#c5p17cualdiv').addClass(' has-error');            

            }
            else
            {
                //alert('aca lo oculta');
                $('#c5p17cualmostrar').hide(1000);
                $('#c5p17cual').val('98');
                $('#c5p17cualdiv').removeClass(' has-error');
  
            }
        }
        
        if(campoval == 'c5p17o5')
           {
            if($('#' + campoval).val() == 'SI')
            {
              $('#c5p17o1').prop('checked' , false);
              $('#c5p17o1div').addClass(' has-error');
              $('#c5p17o2').prop('checked' , false);
              $('#c5p17o2div').addClass(' has-error');
              $('#c5p17o3').prop('checked' , false);
              $('#c5p17o3div').addClass(' has-error');
              $('#c5p17o4').prop('checked' , false);
              $('#c5p17o4div').addClass(' has-error');
              
              
              $('#c5p17cualmostrar').hide(1000);
              $('#c5p17cual').val('98');
                            
              $('#c5p17o1').val('NO');
              $('#c5p17o2').val('NO');
              $('#c5p17o3').val('NO');
              $('#c5p17o4').val('NO');
              
              
              }
}
        else
       {
          $('#c5p17o5').prop('checked' , false); 
          $('#c5p17o5').val('NO');
          $('#c5p17o5div').addClass(' has-error');
      }
      validarcuadrosc5p17(divcompleto,campos);
}
function validarcuadrosc5p17(divcuadro,ncampos)
{
    //alert($('#' + divcuadro).find('input').prop('checked', true).length);
    //alert($('.has-error').length);
    //alert(ncampos + ' ncampos');
    
    if ($('#c5p17cual').val() != '')
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

    validarcuadrosc5p17(div,ncampos);
}
</script>
</html>