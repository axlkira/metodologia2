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
        <div id="c9p29div" name="c9p29div" class="form-group col-md-12 form-group-sm">
        <div id="c9p29o0div" class="has-error">
        <label class="control-label">4. ¿Cuál o cuáles de los siguientes subsidios recibió el mes pasado? (Selección mútiple)
                    
            <button type="button" id="vayuda" name="vayuda" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModal">
                        <span class="glyphicon glyphicon-question-sign" aria-hidden="true"></span> Ayuda
                    </button>       
        </label>
        </div>
            
        <div id="c9p29o1div" <?php if($arrayrespuestas['ec9p29o1']=='' || $arrayrespuestas['ec9p29o1']=='NO' || $arrayrespuestas['ec9p29o1']=='98'){echo('class=" has-error"');}?>>
        <div class="checkbox">
            <label> <!--en este caso se manda a la fincion javascript el nombre del campo-->
              <input type="checkbox" name="c9p29o1" id="c9p29o1" onclick="cambiarsinoc9p29('SI','c9p29o1','c9p29o1div','c9p29div',5);" <?php if($arrayrespuestas['ec9p29o1']=='SI'){echo('value="SI" checked');}else{echo('value="NO" ');}?>>
            a.  Auxilio o subsidio de alimentacion?
            </label>
        </div>
        </div>
            
         <div class="row" id="c9p29o1cuantomostrar" name="c9p29o1cuantomostrar" <?php if($arrayrespuestas['ec9p29o1cuanto']=='SI'|| $arrayrespuestas['ec9p29o1cuanto']==''|| $arrayrespuestas['ec9p29o1cuanto']=='98'){echo('style="display:none"');}?> >
        <div  id="c9p29o1cuantodiv" name="c9p29o1cuantodiv" class="form-group col-md-3">
        <label class="control-label">Valor?</label>
        <input type="text" class="form-control text-uppercase" id="c9p29o1cuanto" onkeypress="return soloNumeros(event)"  onchange="validarcampotexcuadros('c9p29o1cuantodiv','c9p29o1cuanto','4')" name="c9p29o1cuanto" value="<?php if($arrayrespuestas['ec9p29o1cuanto'] == ''){echo('98');}else{ echo($arrayrespuestas['ec9p29o1cuanto']);} ?>">
        </div>

        </div>   
            
            
        <div id="c9p29o2div" <?php if($arrayrespuestas['ec9p29o2']=='' || $arrayrespuestas['ec9p29o2']=='NO' || $arrayrespuestas['ec9p29o2']=='98'){echo('class=" has-error"');}?>>
        <div class="checkbox">
            <label> <!--en este caso se manda a la fincion javascript el nombre del campo-->
              <input type="checkbox" name="c9p29o2" id="c9p29o2" onclick="cambiarsinoc9p29('SI','c9p29o2','c9p29o2div','c9p29div',5);" <?php if($arrayrespuestas['ec9p29o2']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            b. Auxilio o subsidio de transporte?
            </label>
        </div>
        </div> 
            
        <div class="row" id="c9p29o2cuantomostrar" name="c9p29o2cuantomostrar" <?php if($arrayrespuestas['ec9p29o2cuanto']=='SI'|| $arrayrespuestas['ec9p29o2cuanto']=='' || $arrayrespuestas['ec9p29o2cuanto']=='98'){echo('style="display:none"');}?> >
        <div  id="c9p29o2cuantodiv" name="c9p29o2cuantodiv" class="form-group col-md-3">
        <label class="control-label">Valor?</label>
        <input type="text" class="form-control text-uppercase" id="c9p29o2cuanto" onkeypress="return soloNumeros(event)"  onchange="validarcampotexcuadros('c9p29o2cuantodiv','c9p29o2cuanto','4')" name="c9p29o2cuanto" value="<?php if($arrayrespuestas['ec9p29o2cuanto'] == ''){echo('98');}else{ echo($arrayrespuestas['ec9p29o2cuanto']);} ?>">
        </div>

        </div>    
            
            
        <div id="c9p29o3div" <?php if($arrayrespuestas['ec9p29o3']=='' || $arrayrespuestas['ec9p29o3']=='NO' || $arrayrespuestas['ec9p29o3']=='98'){echo('class=" has-error"');}?>>
        <div class="checkbox">
            <label> <!--en este caso se manda a la fincion javascript el nombre del campo-->
              <input type="checkbox" name="c9p29o3" id="c9p29o3" onclick="cambiarsinoc9p29('SI','c9p29o3','c9p29o3div','c9p29div',5);" <?php if($arrayrespuestas['ec9p29o3']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
             c. Subsidio Familiar?
            </label>
        </div>
        </div> 
      
            
        <div class="row" id="c9p29o3cuantomostrar" name="c9p29o3cuantomostrar" <?php if($arrayrespuestas['ec9p29o3cuanto']=='SI'|| $arrayrespuestas['ec9p29o3cuanto']=='' || $arrayrespuestas['ec9p29o3cuanto']=='98'){echo('style="display:none"');}?> >
        <div  id="c9p29o3cuantodiv" name="c9p29o3cuantodiv" class="form-group col-md-3">
        <label class="control-label">Valor?</label>
        <input type="text" class="form-control text-uppercase" id="c9p29o3cuanto" onkeypress="return soloNumeros(event)"  onchange="validarcampotexcuadros('c9p29o3cuantodiv','c9p29o3cuanto','4')" name="c9p29o3cuanto" value="<?php if($arrayrespuestas['ec9p29o3cuanto'] == ''){echo('98');}else{ echo($arrayrespuestas['ec9p29o3cuanto']);} ?>">
        </div>

        </div>
            
            
            
        <div id="c9p29o4div" <?php if($arrayrespuestas['ec9p29o4']=='' || $arrayrespuestas['ec9p29o4']=='NO' || $arrayrespuestas['ec9p29o4']=='98'){echo('class=" has-error"');}?>>
        <div class="checkbox">
            <label> <!--en este caso se manda a la fincion javascript el nombre del campo-->
              <input type="checkbox" name="c9p29o4" id="c9p29o4" onclick="cambiarsinoc9p29('SI','c9p29o4','c9p29o4div','c9p29div',5);" <?php if($arrayrespuestas['ec9p29o4']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
             d. Subsidio Educativo?
            </label>
        </div>
        </div> 
      
            
        <div class="row" id="c9p29o4cuantomostrar" name="c9p29o4cuantomostrar" <?php if($arrayrespuestas['ec9p29o4cuanto']=='SI'|| $arrayrespuestas['ec9p29o4cuanto']=='' || $arrayrespuestas['ec9p29o4cuanto']=='98'){echo('style="display:none"');}?> >
        <div  id="c9p29o4cuantodiv" name="c9p29o4cuantodiv" class="form-group col-md-3">
        <label class="control-label">Valor?</label>
        <input type="text" class="form-control text-uppercase" id="c9p29o4cuanto" onkeypress="return soloNumeros(event)"  onchange="validarcampotexcuadros('c9p29o4cuantodiv','c9p29o4cuanto','4')" name="c9p29o4cuanto" value="<?php if($arrayrespuestas['ec9p29o4cuanto'] == ''){echo('98');}else{ echo($arrayrespuestas['ec9p29o4cuanto']);} ?>">
        </div>

        </div>    
     
            
         <div id="c9p29o5div" <?php if($arrayrespuestas['ec9p29o5']=='' || $arrayrespuestas['ec9p29o5']=='NO' || $arrayrespuestas['ec9p29o5']=='98'){echo('class=" has-error"');}?>>
        <div class="checkbox">
            <label> <!--en este caso se manda a la fincion javascript el nombre del campo-->
              <input type="checkbox" name="c9p29o5" id="c9p29o5" onclick="cambiarsinoc9p29('SI','c9p29o5','c9p29o5div','c9p29div',5);" <?php if($arrayrespuestas['ec9p29o5']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
           g. No recibió
            </label>
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
<br>
            <!--inicio botonera guardar y actualizar-->
            <?php if($arrayrespuestas['ec9p29o1']=="" & $arrayrespuestas['ec9p29o2']=="" & $arrayrespuestas['ec9p29o3']=="")
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
                          vc9p29o1 : $('#c9p29o1').val(),
                          vc9p29o1cuanto : $('#c9p29o1cuanto').val(),
                          vc9p29o2 : $('#c9p29o2').val(),
                          vc9p29o2cuanto : $('#c9p29o2cuanto').val(),
                          vc9p29o3 : $('#c9p29o3').val(),
                          vc9p29o3cuanto : $('#c9p29o3cuanto').val(),
                          vc9p29o4 : $('#c9p29o4').val(),
                          vc9p29o4cuanto : $('#c9p29o4cuanto').val(),
                          vc9p29o5 : $('#c9p29o5').val()},                      
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
                          vc9p29o1 : $('#c9p29o1').val(),
                          vc9p29o1cuanto : $('#c9p29o1cuanto').val(),
                          vc9p29o2 : $('#c9p29o2').val(),
                          vc9p29o2cuanto : $('#c9p29o2cuanto').val(),
                          vc9p29o3 : $('#c9p29o3').val(),
                          vc9p29o3cuanto : $('#c9p29o3cuanto').val(),
                          vc9p29o4 : $('#c9p29o4').val(),
                          vc9p29o4cuanto : $('#c9p29o4cuanto').val(),
                          vc9p29o5 : $('#c9p29o5').val()},                      
                          dataType: "html",
                          success : function(obj){                      
                          botonguardar();
                          }
                        });                    
        });
        

        $("#siguiente").click(function ()
        {
         botonsiguiente();
         
         location.href = "../c_capitulosintegrante/fc_capitulosintegrante?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                      

        });

              
        $("#anterior").click(function ()
        {
         botonanterior();
         location.href = "../c_c9p28/fc_c9p28?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
        });

//para cargar variables capitulo, pregunta,encuestador,vivienda,barra



cargardatosgenerales('<?php echo($arraydatosgenerales['ecapitulo']); ?>','Pregunta 4 de 4','<?php echo($arraydatosgenerales['enomcoges']); ?>','<?php echo($arraydatosgenerales['enombreintegrante']." "." - "." "."Sexo:"." ".$arraydatosgenerales['esexointegrante']."   "."  -  "."   "."Edad:"."   ".$arraydatosgenerales['eedadintegrante']); ?>','100');
//control del boton ayuda
botonayuda();

});
//dea aca para abajo es logica de cuadros
function cambiarsinoc9p29(opcion,campoval,divcampo,divcompleto,campos)
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
    if(campoval == 'c9p29o1')
        {
            if($('#' + campoval).val() == 'SI')
            {
                //alert('aca lo muestra');
                $('#c9p29o1cuantomostrar').show(1000);
                $('#c9p29o1cuanto').val('');
                $('#c9p29o1cuantodiv').addClass(' has-error');            

            }
            else
            {
                //alert('aca lo oculta');
                $('#c9p29o1cuantomostrar').hide(1000);
                $('#c9p29o1cuanto').val('98');
                $('#c9p29o1cuantodiv').removeClass(' has-error');
  
            }
        }
        if(campoval == 'c9p29o2')
        {
            if($('#' + campoval).val() == 'SI')
            {
                //alert('aca lo muestra');
                $('#c9p29o2cuantomostrar').show(1000);
                $('#c9p29o2cuanto').val('');
                $('#c9p29o2cuantodiv').addClass(' has-error');            
            }
            else
            {
                //alert('aca lo oculta');
                $('#c9p29o2cuantomostrar').hide(1000);
                $('#c9p29o2cuanto').val('98');
                $('#c9p29o2cuantodiv').removeClass(' has-error');
  
            }
        }
        if(campoval == 'c9p29o3')
        {
            if($('#' + campoval).val() == 'SI')
            {
                //alert('aca lo muestra');
                $('#c9p29o3cuantomostrar').show(1000);
                $('#c9p29o3cuanto').val('');
                $('#c9p29o3cuantodiv').addClass(' has-error');             
            }
            else
            {
                //alert('aca lo oculta');
                $('#c9p29o3cuantomostrar').hide(1000);
                $('#c9p29o3cuanto').val('98');
                $('#c9p29o3cuantodiv').removeClass(' has-error');
            }
        }
       if(campoval == 'c9p29o4')
        {
            if($('#' + campoval).val() == 'SI')
            {
                //alert('aca lo muestra');
                $('#c9p29o4cuantomostrar').show(1000);
                $('#c9p29o4cuanto').val('');
                $('#c9p29o4cuantodiv').addClass(' has-error');             
            }
            else
            {
                //alert('aca lo oculta');
                $('#c9p29o4cuantomostrar').hide(1000);
                $('#c9p29o4cuanto').val('98');
                $('#c9p29o4cuantodiv').removeClass(' has-error');
            }
        }
       

        if(campoval == 'c9p29o5')
           {
            if($('#' + campoval).val() == 'SI')
            {
              $('#c9p29o1').prop('checked' , false);
              $('#c9p29o1div').addClass(' has-error');
              $('#c9p29o1cuanto').val('98');
              $('#c9p29o2').prop('checked' , false);
              $('#c9p29o2div').addClass(' has-error');
              $('#c9p29o2cuanto').val('98');
              $('#c9p29o3').prop('checked' , false);
              $('#c9p29o3div').addClass(' has-error');
              $('#c9p29o3cuanto').val('98');
              $('#c9p29o4').prop('checked' , false);
              $('#c9p29o4div').addClass(' has-error');
              $('#c9p29o4cuanto').val('98');
              
              
              $('#c9p29o1cuantomostrar').hide(1000);
              $('c9p29o1cuanto').val('98');
              $('#c9p29o2cuantomostrar').hide(1000);
              $('c9p29o2cuanto').val('98');
              $('#c9p29o3cuantomostrar').hide(1000);
              $('c9p29o3cuanto').val('98');
              $('#c9p29o4cuantomostrar').hide(1000);
              $('c9p29o4cuanto').val('98');
              
                            
              $('#c9p29o1').val('NO');
              $('#c9p29o2').val('NO');
              $('#c9p29o3').val('NO');
              $('#c9p29o4').val('NO');
              
              
}
        else
       {
          $('#c9p29o5').prop('checked' , false); 
          $('#c9p29o5').val('NO');
          $('#c9p29o5div').addClass(' has-error');
      }

}
else
    {

          $('#c9p29o5').prop('checked' , false); 
          $('#c9p29o5').val('NO');
          $('#c9p29o5div').addClass(' has-error');
        
    }
        
      validarcuadrosc9p29(divcompleto,campos);
}
function validarcuadrosc9p29(divcuadro,ncampos)
{
    //alert($('#' + divcuadro).find('input').prop('checked', true).length);
    //alert($('.has-error').length);
    //alert(ncampos + ' ncampos');
    
    if ($('#c9p29o1cuanto').val() != '' && $('#c9p29o2cuanto').val() != ''  && $('#c9p29o3cuanto').val() != '' && $('#c9p29o4cuanto').val() != '')
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

    validarcuadrosc9p29(div,ncampos);
}</script>
</html>