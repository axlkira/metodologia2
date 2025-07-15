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
        <input type="text" class="form-control input-sm" id="c9p26" name="c9p26" style="display:none" placeholder="" value="<?php echo($arrayrespuestas['ec9p26']); ?>">
       
        <!--fin para imprimir el idintegrante y llevarlo-->
<hr>
        <form class="form-group" name="formulario" id="formulario">

           <!--Check varias selecciones -->
    <div class="row">
        <div id="c9p28div" name="c9p28div" class="form-group col-md-12 form-group-sm">
        <div id="c9p28o0div" class="has-error">
        <label class="control-label">3. Durante los últimos 12 meses recibió: (Selección mútiple)
                    
            <button type="button" id="vayuda" name="vayuda" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModal">
                        <span class="glyphicon glyphicon-question-sign" aria-hidden="true"></span> Ayuda
                    </button>       
        </label>
        </div>
            
        <div id="c9p28o1div" <?php if($arrayrespuestas['ec9p28o1']=='' || $arrayrespuestas['ec9p28o1']=='NO' || $arrayrespuestas['ec9p28o1']=='98'){echo('class=" has-error"');}?>>
        <div class="checkbox">
            <label> <!--en este caso se manda a la fincion javascript el nombre del campo-->
              <input type="checkbox" name="c9p28o1" id="c9p28o1" onclick="cambiarsinoc9p28('SI','c9p28o1','c9p28o1div','c9p28div',7);" <?php if($arrayrespuestas['ec9p28o1']=='SI'){echo('value="SI" checked');}else{echo('value="NO" ');}?>>
            a. Dinero de otros hogares o personas residentes en el país?
            </label>
        </div>
        </div>
            
         <div class="row" id="c9p28o1cuantomostrar" name="c9p28o1cuantomostrar" <?php if($arrayrespuestas['ec9p28o1cuanto']=='SI'|| $arrayrespuestas['ec9p28o1cuanto']==''|| $arrayrespuestas['ec9p28o1cuanto']=='98'){echo('style="display:none"');}?> >
        <div  id="c9p28o1cuantodiv" name="c9p28o1cuantodiv" class="form-group col-md-3">
        <label class="control-label">Valor?</label>
        <input type="text" class="form-control text-uppercase" id="c9p28o1cuanto" onkeypress="return soloNumeros(event)"  onchange="validarcampotexcuadros('c9p28o1cuantodiv','c9p28o1cuanto','7')" name="c9p28o1cuanto" value="<?php if($arrayrespuestas['ec9p28o1cuanto'] == ''){echo('98');}else{ echo($arrayrespuestas['ec9p28o1cuanto']);} ?>">
        </div>

        </div>   
            
            
        <div id="c9p28o2div" <?php if($arrayrespuestas['ec9p28o2']=='' || $arrayrespuestas['ec9p28o2']=='NO' || $arrayrespuestas['ec9p28o2']=='98'){echo('class=" has-error"');}?>>
        <div class="checkbox">
            <label> <!--en este caso se manda a la fincion javascript el nombre del campo-->
              <input type="checkbox" name="c9p28o2" id="c9p28o2" onclick="cambiarsinoc9p28('SI','c9p28o2','c9p28o2div','c9p28div',7);" <?php if($arrayrespuestas['ec9p28o2']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            b. Dinero de otros hogares o personas residentes fuera del país?
            </label>
        </div>
        </div> 
            
        <div class="row" id="c9p28o2cuantomostrar" name="c9p28o2cuantomostrar" <?php if($arrayrespuestas['ec9p28o2cuanto']=='SI'|| $arrayrespuestas['ec9p28o2cuanto']=='' || $arrayrespuestas['ec9p28o2cuanto']=='98'){echo('style="display:none"');}?> >
        <div  id="c9p28o2cuantodiv" name="c9p28o2cuantodiv" class="form-group col-md-3">
        <label class="control-label">Valor?</label>
        <input type="text" class="form-control text-uppercase" id="c9p28o2cuanto" onkeypress="return soloNumeros(event)"  onchange="validarcampotexcuadros('c9p28o2cuantodiv','c9p28o2cuanto','7')" name="c9p28o2cuanto" value="<?php if($arrayrespuestas['ec9p28o2cuanto'] == ''){echo('98');}else{ echo($arrayrespuestas['ec9p28o2cuanto']);} ?>">
        </div>

        </div>    
            
            
        <div id="c9p28o3div" <?php if($arrayrespuestas['ec9p28o3']=='' || $arrayrespuestas['ec9p28o3']=='NO' || $arrayrespuestas['ec9p28o3']=='98'){echo('class=" has-error"');}?>>
        <div class="checkbox">
            <label> <!--en este caso se manda a la fincion javascript el nombre del campo-->
              <input type="checkbox" name="c9p28o3" id="c9p28o3" onclick="cambiarsinoc9p28('SI','c9p28o3','c9p28o3div','c9p28div',7);" <?php if($arrayrespuestas['ec9p28o3']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
             c. Ayudas en dinero de instituciones del país o de fuera del país?
            </label>
        </div>
        </div> 
      
            
        <div class="row" id="c9p28o3cuantomostrar" name="c9p28o3cuantomostrar" <?php if($arrayrespuestas['ec9p28o3cuanto']=='SI'|| $arrayrespuestas['ec9p28o3cuanto']=='' || $arrayrespuestas['ec9p28o3cuanto']=='98'){echo('style="display:none"');}?> >
        <div  id="c9p28o3cuantodiv" name="c9p28o3cuantodiv" class="form-group col-md-3">
        <label class="control-label">Valor?</label>
        <input type="text" class="form-control text-uppercase" id="c9p28o3cuanto" onkeypress="return soloNumeros(event)"  onchange="validarcampotexcuadros('c9p28o3cuantodiv','c9p28o3cuanto','7')" name="c9p28o3cuanto" value="<?php if($arrayrespuestas['ec9p28o3cuanto'] == ''){echo('98');}else{ echo($arrayrespuestas['ec9p28o3cuanto']);} ?>">
        </div>

        </div>
            
            
            
        <div id="c9p28o4div" <?php if($arrayrespuestas['ec9p28o4']=='' || $arrayrespuestas['ec9p28o4']=='NO' || $arrayrespuestas['ec9p28o4']=='98'){echo('class=" has-error"');}?>>
        <div class="checkbox">
            <label> <!--en este caso se manda a la fincion javascript el nombre del campo-->
              <input type="checkbox" name="c9p28o4" id="c9p28o4" onclick="cambiarsinoc9p28('SI','c9p28o4','c9p28o4div','c9p28div',7);" <?php if($arrayrespuestas['ec9p28o4']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
             d. Dinero por intereses de préstamo o por CDT's, depósitos de ahorro, utilidades, ganancias o dividendos por inversiones?
            </label>
        </div>
        </div> 
      
            
        <div class="row" id="c9p28o4cuantomostrar" name="c9p28o4cuantomostrar" <?php if($arrayrespuestas['ec9p28o4cuanto']=='SI'|| $arrayrespuestas['ec9p28o4cuanto']=='' || $arrayrespuestas['ec9p28o4cuanto']=='98'){echo('style="display:none"');}?> >
        <div  id="c9p28o4cuantodiv" name="c9p28o4cuantodiv" class="form-group col-md-3">
        <label class="control-label">Valor?</label>
        <input type="text" class="form-control text-uppercase" id="c9p28o4cuanto" onkeypress="return soloNumeros(event)"  onchange="validarcampotexcuadros('c9p28o4cuantodiv','c9p28o4cuanto','7')" name="c9p28o4cuanto" value="<?php if($arrayrespuestas['ec9p28o4cuanto'] == ''){echo('98');}else{ echo($arrayrespuestas['ec9p28o4cuanto']);} ?>">
        </div>

        </div>    
            
            <div id="c9p28o5div" <?php if($arrayrespuestas['ec9p28o5']=='' || $arrayrespuestas['ec9p28o5']=='NO' || $arrayrespuestas['ec9p28o5']=='98'){echo('class=" has-error"');}?>>
        <div class="checkbox">
            <label> <!--en este caso se manda a la fincion javascript el nombre del campo-->
              <input type="checkbox" name="c9p28o5" id="c9p28o5" onclick="cambiarsinoc9p28('SI','c9p28o5','c9p28o5div','c9p28div',7);" <?php if($arrayrespuestas['ec9p28o5']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
             e. Ingresos por concepto de cesantías y/o intereses a las cesantías?
            </label>
        </div>
        </div> 
      
            
        <div class="row" id="c9p28o5cuantomostrar" name="c9p28o5cuantomostrar" <?php if($arrayrespuestas['ec9p28o5cuanto']=='SI'|| $arrayrespuestas['ec9p28o5cuanto']=='' || $arrayrespuestas['ec9p28o5cuanto']=='98'){echo('style="display:none"');}?> >
        <div  id="c9p28o5cuantodiv" name="c9p28o5cuantodiv" class="form-group col-md-3">
        <label class="control-label">Valor?</label>
        <input type="text" class="form-control text-uppercase" id="c9p28o5cuanto" onkeypress="return soloNumeros(event)"  onchange="validarcampotexcuadros('c9p28o5cuantodiv','c9p28cuanto','7')" name="c9p28o5cuanto" value="<?php if($arrayrespuestas['ec9p28o5cuanto'] == ''){echo('98');}else{ echo($arrayrespuestas['ec9p28o5cuanto']);} ?>">
        </div>

        </div>  
            
            
         <div id="c9p28o6div" <?php if($arrayrespuestas['ec9p28o6']=='' || $arrayrespuestas['ec9p28o6']=='NO' || $arrayrespuestas['ec9p28o6']=='98'){echo('class=" has-error"');}?>>
        <div class="checkbox">
            <label> <!--en este caso se manda a la fincion javascript el nombre del campo-->
              <input type="checkbox" name="c9p28o6" id="c9p28o6" onclick="cambiarsinoc9p28('SI','c9p28o6','c9p28o6div','c9p28div',7);" <?php if($arrayrespuestas['ec9p28o6']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
             f. Dinero de otras fuentes diferentes a las anteriores (ingresos por ganancias en juegos de azar, chances, loterías, indemnizaciones, liquidaciones, venta de propiedades, acciones, vehículos, etc.)
            </label>
        </div>
        </div> 
      
            
        <div class="row" id="c9p28o6cuantomostrar" name="c9p28o6cuantomostrar" <?php if($arrayrespuestas['ec9p28o6cuanto']=='SI'|| $arrayrespuestas['ec9p28o6cuanto']=='' || $arrayrespuestas['ec9p28o6cuanto']=='98'){echo('style="display:none"');}?> >
        <div  id="c9p28o6cuantodiv" name="c9p28o6cuantodiv" class="form-group col-md-3">
        <label class="control-label">Valor?</label>
        <input type="text" class="form-control text-uppercase" id="c9p28o6cuanto" onkeypress="return soloNumeros(event)"  onchange="validarcampotexcuadros('c9p28o6cuantodiv','c9p28o6cuanto','7')" name="c9p28o6cuanto" value="<?php if($arrayrespuestas['ec9p28o6cuanto'] == ''){echo('98');}else{ echo($arrayrespuestas['ec9p28o6cuanto']);} ?>">
        </div>

        </div>   
            
         <div id="c9p28o7div" <?php if($arrayrespuestas['ec9p28o7']=='' || $arrayrespuestas['ec9p28o7']=='NO' || $arrayrespuestas['ec9p28o7']=='98'){echo('class=" has-error"');}?>>
        <div class="checkbox">
            <label> <!--en este caso se manda a la fincion javascript el nombre del campo-->
              <input type="checkbox" name="c9p28o7" id="c9p28o7" onclick="cambiarsinoc9p28('SI','c9p28o7','c9p28o7div','c9p28div',7);" <?php if($arrayrespuestas['ec9p28o7']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
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
            <?php if($arrayrespuestas['ec9p28o1']=="" & $arrayrespuestas['ec9p28o2']=="" & $arrayrespuestas['ec9p28o3']=="")
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
                          vc9p28o1 : $('#c9p28o1').val(),
                          vc9p28o1cuanto : $('#c9p28o1cuanto').val(),
                          vc9p28o2 : $('#c9p28o2').val(),
                          vc9p28o2cuanto : $('#c9p28o2cuanto').val(),
                          vc9p28o3 : $('#c9p28o3').val(),
                          vc9p28o3cuanto : $('#c9p28o3cuanto').val(),
                          vc9p28o4 : $('#c9p28o4').val(),
                          vc9p28o4cuanto : $('#c9p28o4cuanto').val(),
                          vc9p28o5 : $('#c9p28o5').val(),
                          vc9p28o5cuanto : $('#c9p28o5cuanto').val(),
                          vc9p28o6 : $('#c9p28o6').val(),
                          vc9p28o6cuanto : $('#c9p28o6cuanto').val(),
                           vc9p28o7 : $('#c9p28o7').val()},                      
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
                          vc9p28o1 : $('#c9p28o1').val(),
                          vc9p28o1cuanto : $('#c9p28o1cuanto').val(),
                          vc9p28o2 : $('#c9p28o2').val(),
                          vc9p28o2cuanto : $('#c9p28o2cuanto').val(),
                          vc9p28o3 : $('#c9p28o3').val(),
                          vc9p28o3cuanto : $('#c9p28o3cuanto').val(),
                          vc9p28o4 : $('#c9p28o4').val(),
                          vc9p28o4cuanto : $('#c9p28o4cuanto').val(),
                          vc9p28o5 : $('#c9p28o5').val(),
                          vc9p28o5cuanto : $('#c9p28o5cuanto').val(),
                          vc9p28o6 : $('#c9p28o6').val(),
                          vc9p28o6cuanto : $('#c9p28o6cuanto').val(),
                           vc9p28o7 : $('#c9p28o7').val()},                      
                          dataType: "html",
                          success : function(obj){                      
                          botonguardar();
                          }
                        });                    
        });
        

        $("#siguiente").click(function ()
        {
         botonsiguiente();
         
         location.href = "../c_c9p29/fc_c9p29?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val();                    

        });

              
        $("#anterior").click(function ()
        {
         if($('#c9p26').val() === '2')
         {
         location.href = "../c_c9p26/fc_c9p26?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
         }
         else
         {
           location.href = "../c_c9p27/fc_c9p27?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                      
         }
        });

//para cargar variables capitulo, pregunta,encuestador,vivienda,barra



cargardatosgenerales('<?php echo($arraydatosgenerales['ecapitulo']); ?>','Pregunta 3 de 4','<?php echo($arraydatosgenerales['enomcoges']); ?>','<?php echo($arraydatosgenerales['enombreintegrante']." "." - "." "."Sexo:"." ".$arraydatosgenerales['esexointegrante']."   "."  -  "."   "."Edad:"."   ".$arraydatosgenerales['eedadintegrante']); ?>','75');
//control del boton ayuda
botonayuda();

});
//dea aca para abajo es logica de cuadros
function cambiarsinoc9p28(opcion,campoval,divcampo,divcompleto,campos)
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
    if(campoval == 'c9p28o1')
        {
            if($('#' + campoval).val() == 'SI')
            {
                //alert('aca lo muestra');
                $('#c9p28o1cuantomostrar').show(1000);
                $('#c9p28o1cuanto').val('');
                $('#c9p28o1cuantodiv').addClass(' has-error');  
                

            }
            else
            {
                //alert('aca lo oculta');
                $('#c9p28o1cuantomostrar').hide(1000);
                $('#c9p28o1cuanto').val('98');
                $('#c9p28o1cuantodiv').removeClass(' has-error');
  
            }
        }
        if(campoval == 'c9p28o2')
        {
            if($('#' + campoval).val() == 'SI')
            {
                //alert('aca lo muestra');
                $('#c9p28o2cuantomostrar').show(1000);
                $('#c9p28o2cuanto').val('');
                $('#c9p28o2cuantodiv').addClass(' has-error');            
            }
            else
            {
                //alert('aca lo oculta');
                $('#c9p28o2cuantomostrar').hide(1000);
                $('#c9p28o2cuanto').val('98');
                $('#c9p28o2cuantodiv').removeClass(' has-error');
  
            }
        }
        if(campoval == 'c9p28o3')
        {
            if($('#' + campoval).val() == 'SI')
            {
                //alert('aca lo muestra');
                $('#c9p28o3cuantomostrar').show(1000);
                $('#c9p28o3cuanto').val('');
                $('#c9p28o3cuantodiv').addClass(' has-error');             
            }
            else
            {
                //alert('aca lo oculta');
                $('#c9p28o3cuantomostrar').hide(1000);
                $('#c9p28o3cuanto').val('98');
                $('#c9p28o3cuantodiv').removeClass(' has-error');
            }
        }
       if(campoval == 'c9p28o4')
        {
            if($('#' + campoval).val() == 'SI')
            {
                //alert('aca lo muestra');
                $('#c9p28o4cuantomostrar').show(1000);
                $('#c9p28o4cuanto').val('');
                $('#c9p28o4cuantodiv').addClass(' has-error');             
            }
            else
            {
                //alert('aca lo oculta');
                $('#c9p28o4cuantomostrar').hide(1000);
                $('#c9p28o4cuanto').val('98');
                $('#c9p28o4cuantodiv').removeClass(' has-error');
            }
        }
       
       if(campoval == 'c9p28o5')
        {
            if($('#' + campoval).val() == 'SI')
            {
                //alert('aca lo muestra');
                $('#c9p28o5cuantomostrar').show(1000);
                $('#c9p28o5cuanto').val('');
                $('#c9p28o5cuantodiv').addClass(' has-error');             
            }
            else
            {
                //alert('aca lo oculta');
                $('#c9p28o5cuantomostrar').hide(1000);
                $('#c9p28o5cuanto').val('98');
                $('#c9p28o5cuantodiv').removeClass(' has-error');
            }
        }
       
       if(campoval == 'c9p28o6')
        {
            if($('#' + campoval).val() == 'SI')
            {
                //alert('aca lo muestra');
                $('#c9p28o6cuantomostrar').show(1000);
                $('#c9p28o6cuanto').val('');
                $('#c9p28o6cuantodiv').addClass(' has-error');             
            }
            else
            {
                //alert('aca lo oculta');
                $('#c9p28o6cuantomostrar').hide(1000);
                $('#c9p28o6cuanto').val('98');
                $('#c9p28o6cuantodiv').removeClass(' has-error');
            }
        }

        if(campoval == 'c9p28o7')
           { //alert($('#' + campoval).val());
            if($('#' + campoval).val() == 'SI')
            { //alert($('#' + campoval).val());
              $('#c9p28o1').prop('checked' , false);
              //$('#c9p28o1').prop('disabled', true);
              $('#c9p28o1div').addClass(' has-error');
              $('#c9p28o1cuanto').val('98');
              $('#c9p28o2').prop('checked' , false);
              //$('#c9p28o2').prop('disabled', true);
              $('#c9p28o2div').addClass(' has-error');
              $('#c9p28o2cuanto').val('98');
              $('#c9p28o3').prop('checked' , false);
              //$('#c9p28o3').prop('disabled', true);
              $('#c9p28o3div').addClass(' has-error');
              $('#c9p28o3cuanto').val('98');
              $('#c9p28o4').prop('checked' , false);
              //$('#c9p28o4').prop('disabled', true);
              $('#c9p28o4div').addClass(' has-error');
              $('#c9p28o4cuanto').val('98');
              $('#c9p28o5').prop('checked' , false);
              //$('#c9p28o5').prop('disabled', true);
              $('#c9p28o5div').addClass(' has-error');
              $('#c9p28o5cuanto').val('98');
              $('#c9p28o6').prop('checked' , false);
              //$('#c9p28o6').prop('disabled', true);
              $('#c9p28o6div').addClass(' has-error');
              $('#c9p28o6cuanto').val('98');
              
              $('#c9p28o1cuantomostrar').hide(1000);
              $('#c9p28o1cuanto').val('98');
              $('#c9p28o2cuantomostrar').hide(1000);
              $('#c9p28o2cuanto').val('98');
              $('#c9p28o3cuantomostrar').hide(1000);
              $('#c9p28o3cuanto').val('98');
              $('#c9p28o4cuantomostrar').hide(1000);
              $('#c9p28o4cuanto').val('98');
              $('#c9p28o5cuantomostrar').hide(1000);
              $('#c9p28o5cuanto').val('98');
              $('#c9p28o6cuantomostrar').hide(1000);
              $('#c9p28o6cuanto').val('98');
                            
              $('#c9p28o1').val('NO');
              $('#c9p28o2').val('NO');
              $('#c9p28o3').val('NO');
              $('#c9p28o4').val('NO');
              $('#c9p28o5').val('NO');
              $('#c9p28o6').val('NO');
              
       }
        else
       {//alert('es no');
          $('#c9p28o7').prop('checked' , false); 
          $('#c9p28o7').val('NO');
          $('#c9p28o7div').addClass(' has-error');
        }

    }
    else
    {

          $('#c9p28o7').prop('checked' , false); 
          $('#c9p28o7').val('NO');
          $('#c9p28o7div').addClass(' has-error');
        
    }
        
      validarcuadrosc9p28(divcompleto,campos);
}
function validarcuadrosc9p28(divcuadro,ncampos)
{
    //alert($('#' + divcuadro).find('input').prop('checked', true).length);
    //alert($('.has-error').length);
    //alert(ncampos + ' ncampos');
    //alert($('.has-error').length + "-" + ncampos);
    if ($('#c9p28o1cuanto').val() != '' && $('#c9p28o2cuanto').val() != '' && $('#c9p28o3cuanto').val() != ''  && $('#c9p28o4cuanto').val() != '' && $('#c9p28o5cuanto').val() != '' && $('#c9p28o6cuanto').val() != '')
    {   //alert('todos llenos');
        //||$('#c3p2cualdiv')===('form-group col-md-10 form-group-sm has-error')
        if($('.has-error').length === (ncampos + 1))
        { // alert('juanpis');
           $('#guardar').prop('disabled', true);
           $('#actualizar').prop('disabled', true);
           $('#cancelar').prop('disabled', true);
           $('#anterior').prop('disabled', false);
           $('#siguiente').prop('disabled', false);
        }
        else
        {   //alert('hab guardar');
           $('#guardar').prop('disabled', false);
           $('#actualizar').prop('disabled', false);
           $('#cancelar').prop('disabled', false);
           $('#anterior').prop('disabled', true);
           $('#siguiente').prop('disabled', true);       
        }
    }
    else
    {//alert('liche');
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

    validarcuadrosc9p28(div,ncampos);
}</script>
</html>