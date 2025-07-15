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
        <div id="c5p201div" name="c5p201div" class="form-group col-md-12 form-group-sm">
        <div id="c5p201o0div" class="has-error">
        <label class="control-label">20.1  Razones de no realizaciòn de los exàmenes:  (Multiple respuesta)
                     <button type="button" id="vayuda" name="vayuda" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModal">
                        <span class="glyphicon glyphicon-question-sign" aria-hidden="true"></span> Ayuda
                    </button>       
        </label>
        </div>
        <div id="c5p201o1div" <?php if($arrayrespuestas['ec5p201o1']=='' || $arrayrespuestas['ec5p201o1']=='NO'|| $arrayrespuestas['ec5p201o1']=='98'){echo('class=" has-error"');}?>>
        <div class="checkbox">
            <label> <!--en este caso se manda a la fincion javascript el nombre del campo-->
              <input type="checkbox" name="c5p201o1" id="c5p201o1" onclick="cambiarsino('SI','c5p201o1','c5p201o1div','c5p201div',9);" <?php if($arrayrespuestas['ec5p201o1']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
           No conocía este exàmen
            </label>
        </div>
        </div>
        <div id="c5p201o2div" <?php if($arrayrespuestas['ec5p201o2']=='' || $arrayrespuestas['ec5p201o2']=='NO'|| $arrayrespuestas['ec5p201o2']=='98'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="c5p201o2" id="c5p201o2" onclick="cambiarsino('SI','c5p201o2','c5p201o2div','c5p201div',9);" <?php if($arrayrespuestas['ec5p201o2']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            No sabe dónde prestan el servicio
          </label>
        </div>
        </div>
        <div id="c5p201o3div" <?php if($arrayrespuestas['ec5p201o3']==''|| $arrayrespuestas['ec5p201o3']=='NO'|| $arrayrespuestas['ec5p201o3']=='98'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="c5p201o3" id="c5p201o3" onclick="cambiarsino('SI','c5p201o3','c5p201o3div','c5p201div',9);" <?php if($arrayrespuestas['ec5p201o3']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            El examen es muy caro/no ha tenido plata 
          </label>
        </div>
        </div>  
         
       <div id="c5p201o4div" <?php if($arrayrespuestas['ec5p201o4']==''|| $arrayrespuestas['ec5p201o4']=='NO'|| $arrayrespuestas['ec5p201o4']=='98'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="c5p201o4" id="c5p201o4" onclick="cambiarsino('SI','c5p201o4','c5p201o4div','c5p201div',9);" <?php if($arrayrespuestas['ec5p201o4']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            Dificultad geografica
          </label>
        </div>
        </div>      
         <div id="c5p201o5div" <?php if($arrayrespuestas['ec5p201o5']==''|| $arrayrespuestas['ec5p201o5']=='NO'|| $arrayrespuestas['ec5p201o5']=='98'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="c5p201o5" id="c5p201o5" onclick="cambiarsino('SI','c5p201o5','c5p201o5div','c5p201div',9);" <?php if($arrayrespuestas['ec5p201o5']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            No se siente enfermo
          </label>
        </div>
        </div>
        <div id="c5p201o6div" <?php if($arrayrespuestas['ec5p201o6']==''|| $arrayrespuestas['ec5p201o6']=='NO'|| $arrayrespuestas['ec5p201o6']=='98'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="c5p201o6" id="c5p201o6" onclick="cambiarsino('SI','c5p201o6','c5p201o6div','c5p201div',9);" <?php if($arrayrespuestas['ec5p201o6']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            Por pena o verguenza
          </label>
        </div>
        </div> 
        <div id="c5p201o7div" <?php if($arrayrespuestas['ec5p201o7']==''|| $arrayrespuestas['ec5p201o7']=='NO'|| $arrayrespuestas['ec5p201o7']=='98'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="c5p201o7" id="c5p201o7" onclick="cambiarsino('SI','c5p201o7','c5p201o7div','c5p201div',9);" <?php if($arrayrespuestas['ec5p201o7']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
           Descuido/lo ha ido aplazando
          </label>
        </div>
        </div>    
        <div id="c5p201o8div" <?php if($arrayrespuestas['ec5p201o8']==''|| $arrayrespuestas['ec5p201o8']=='NO'|| $arrayrespuestas['ec5p201o8']=='98'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="c5p201o8" id="c5p201o8" onclick="cambiarsino('SI','c5p201o8','c5p201o8div','c5p201div',9);" <?php if($arrayrespuestas['ec5p201o8']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
           por miedo
          </label>
        </div>
        </div> 
        <div id="c5p201o9div" <?php if($arrayrespuestas['ec5p201o9']==''|| $arrayrespuestas['ec5p201o9']=='NO'|| $arrayrespuestas['ec5p201o9']=='98'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="c5p201o9" id="c5p201o9" onclick="cambiarsino('SI','c5p201o9','c5p201o9div','c5p201div',9);" <?php if($arrayrespuestas['ec5p201o9']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
           No es importante/necesario
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
            <?php if($arrayrespuestas['ec5p201o1']=="" & $arrayrespuestas['ec5p201o2']=="" & $arrayrespuestas['ec5p201o3']==""& $arrayrespuestas['ec5p201o4']==""
                     & $arrayrespuestas['ec5p201o5']==""& $arrayrespuestas['ec5p201o6']==""& $arrayrespuestas['ec5p201o7']==""& $arrayrespuestas['ec5p201o8']==""& $arrayrespuestas['ec5p201o9']=="")
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
                          vc5p201o1 : $('#c5p201o1').val(),          
                          vc5p201o2 : $('#c5p201o2').val(),
                          vc5p201o3 : $('#c5p201o3').val(),
                          vc5p201o4 : $('#c5p201o4').val(),
                          vc5p201o5 : $('#c5p201o5').val(),
                          vc5p201o6 : $('#c5p201o6').val(),
                          vc5p201o7 : $('#c5p201o7').val(),
                          vc5p201o8 : $('#c5p201o8').val(),
                          vc5p201o9 : $('#c5p201o9').val()},
                      
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
                          vc5p201o1 : $('#c5p201o1').val(),          
                          vc5p201o2 : $('#c5p201o2').val(),
                          vc5p201o3 : $('#c5p201o3').val(),
                          vc5p201o4 : $('#c5p201o4').val(),
                          vc5p201o5 : $('#c5p201o5').val(),
                          vc5p201o6 : $('#c5p201o6').val(),
                          vc5p201o7 : $('#c5p201o7').val(),
                          vc5p201o8 : $('#c5p201o8').val(),
                          vc5p201o9 : $('#c5p201o9').val()},
                          dataType: "html",
                          success : function(obj){                      
                          botonguardar();
                          }
                        });                    
        });
        

        $("#siguiente").click(function ()
        {
         //botonsiguiente();
       
                           $.ajax({
                           url: "../c_c5p21/fc_actualizar",
                           type: "GET",
                           data: {vfolio : $('#folio').val(),vidintegrante : $('#idintegrante').val(), vvalorc5p21 : '98'},
                           dataType: "html",
                           success : function(obj)
                           {
                          //location.href = "../c_capituloshogar/fc_capituloshogar?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
                           }
                          });
                          
                          $.ajax({
                           url: "../c_c5p211/fc_actualizar",
                           type: "GET",
                           data: {vfolio : $('#folio').val(),
                          vidintegrante : $('#idintegrante').val(),
                          vc5p211o1 : '98',          
                          vc5p211o2 : '98',
                          vc5p211o3 : '98',
                          vc5p211o4 : '98',
                          vc5p211o5 : '98',                                                   
                          vc5p211cual : '98'},
                           dataType: "html",
                           success : function(obj)
                           {
                          //location.href = "../c_capituloshogar/fc_capituloshogar?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
                           }
                          });
                          
                          $.ajax({
                           url: "../c_c5p22/fc_actualizar",
                           type: "GET",
                           data: {vfolio : $('#folio').val(),vidintegrante : $('#idintegrante').val(),
                          vvalorc5p22 : '98',
                          vvalorc5p22esquema : '98'},
                           dataType: "html",
                           success : function(obj)
                           {
                          location.href = "../c_capitulosintegrante/fc_capitulosintegrante?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";               
                           }
                          });


        });
              
        $("#anterior").click(function ()
        {
         botonanterior();
         location.href = "../c_c5p20/fc_c5p20?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
        });

//para cargar variables capitulo, pregunta,encuestador,vivienda,barra



cargardatosgenerales('<?php echo($arraydatosgenerales['ecapitulo']); ?>','Pregunta 20.1 de 22','<?php echo($arraydatosgenerales['enomcoges']); ?>','<?php echo($arraydatosgenerales['enombreintegrante']." "." - "." "."Sexo:"." ".$arraydatosgenerales['esexointegrante']."   "."  -  "."   "."Edad:"."   ".$arraydatosgenerales['eedadintegrante']); ?>','90');
//control del boton ayuda
botonayuda();

});
//dea aca para abajo es logica de cuadros
function cambiarsinoc5p201(opcion,campoval,divcampo,divcompleto,campos)
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
        if(campoval == 'c5p201o5')
           {
            if($('#' + campoval).val() == 'SI')
            {
              $('#c5p201o1').prop('checked' , false);
              $('#c5p201o1div').addClass(' has-error');
              $('#c5p201o2').prop('checked' , false);
              $('#c5p201o2div').addClass(' has-error');
              $('#c5p201o3').prop('checked' , false);
              $('#c5p201o3div').addClass(' has-error');
              $('#c5p201o4').prop('checked' , false);
              $('#c5p201o4div').addClass(' has-error');
              
              $('#c5p201o1').val('NO');
              $('#c5p201o2').val('NO');
              $('#c5p201o3').val('NO');
              $('#c5p201o4').val('NO');
              
              }
}
        else
       {
          $('#c5p201o5').prop('checked' , false); 
          $('#c5p201o5').val('NO');
          $('#c5p201o5div').addClass(' has-error');
      }
      validarcuadrosc5p201(divcompleto,campos);
}
function validarcuadrosc5p201(divcuadro,ncampos)
{
    //alert($('#' + divcuadro).find('input').prop('checked', true).length);
    //alert($('.has-error').length);
    //alert(ncampos + ' ncampos');
    
    if ($('#c5p201o5').val() != '')
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

    validarcuadrosc5p201(div,ncampos);
}

</script>
</html>