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
        <input type="text" class="form-control input-sm" id="c9p26intermedia" name="c9p26intermedia" style="display:none" placeholder="" value="<?php echo($arrayrespuestas['ec9p26']); ?>">
       
        <!--fin para imprimir el idintegrante y llevarlo-->
<hr>
        <form class="form-group" name="formulario" id="formulario">

           <!--Check varias selecciones -->
    <div class="row">
        <div id="c9p28intermediadiv" name="c9p28intermediadiv" class="form-group col-md-12 form-group-sm">
        <div id="c9p28intermediao0div" class="has-error">
        <label class="control-label">3. Durante los últimos 12 meses recibió: (Selección mútiple)
                    
            <button type="button" id="vayuda" name="vayuda" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModal">
                        <span class="glyphicon glyphicon-question-sign" aria-hidden="true"></span> Ayuda
                    </button>       
        </label>
        </div>
            
        <div id="c9p28intermediao1div" <?php if($arrayrespuestas['ec9p28intermediao1']=='' || $arrayrespuestas['ec9p28intermediao1']=='NO' || $arrayrespuestas['ec9p28intermediao1']=='98'){echo('class=" has-error"');}?>>
        <div class="checkbox">
            <label> <!--en este caso se manda a la fincion javascript el nombre del campo-->
              <input type="checkbox" name="c9p28intermediao1" id="c9p28intermediao1" onclick="cambiarsinoc9p28intermedia('SI','c9p28intermediao1','c9p28intermediao1div','c9p28intermediadiv',7);" <?php if($arrayrespuestas['ec9p28intermediao1']=='SI'){echo('value="SI" checked');}else{echo('value="NO" ');}?>>
            a. Dinero de otros hogares o personas residentes en el país?
            </label>
        </div>
        </div>
            
         <div class="row" id="c9p28intermediao1cuantomostrar" name="c9p28intermediao1cuantomostrar" <?php if($arrayrespuestas['ec9p28intermediao1cuanto']=='SI'|| $arrayrespuestas['ec9p28intermediao1cuanto']==''|| $arrayrespuestas['ec9p28intermediao1cuanto']=='98'){echo('style="display:none"');}?> >
        <div  id="c9p28intermediao1cuantodiv" name="c9p28intermediao1cuantodiv" class="form-group col-md-3">
        <label class="control-label">Valor?</label>
        <input type="text" class="form-control text-uppercase" id="c9p28intermediao1cuanto" onkeypress="return soloNumeros(event)"  onchange="validarcampotexcuadros('c9p28intermediao1cuantodiv','c9p28intermediao1cuanto','7')" name="c9p28intermediao1cuanto" value="<?php if($arrayrespuestas['ec9p28intermediao1cuanto'] == ''){echo('98');}else{ echo($arrayrespuestas['ec9p28intermediao1cuanto']);} ?>">
        </div>

        </div>   
            
            
        <div id="c9p28intermediao2div" <?php if($arrayrespuestas['ec9p28intermediao2']=='' || $arrayrespuestas['ec9p28intermediao2']=='NO' || $arrayrespuestas['ec9p28intermediao2']=='98'){echo('class=" has-error"');}?>>
        <div class="checkbox">
            <label> <!--en este caso se manda a la fincion javascript el nombre del campo-->
              <input type="checkbox" name="c9p28intermediao2" id="c9p28intermediao2" onclick="cambiarsinoc9p28intermedia('SI','c9p28intermediao2','c9p28intermediao2div','c9p28intermediadiv',7);" <?php if($arrayrespuestas['ec9p28intermediao2']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            b. Dinero de otros hogares o personas residentes fuera del país?
            </label>
        </div>
        </div> 
            
        <div class="row" id="c9p28intermediao2cuantomostrar" name="c9p28intermediao2cuantomostrar" <?php if($arrayrespuestas['ec9p28intermediao2cuanto']=='SI'|| $arrayrespuestas['ec9p28intermediao2cuanto']=='' || $arrayrespuestas['ec9p28intermediao2cuanto']=='98'){echo('style="display:none"');}?> >
        <div  id="c9p28intermediao2cuantodiv" name="c9p28intermediao2cuantodiv" class="form-group col-md-3">
        <label class="control-label">Valor?</label>
        <input type="text" class="form-control text-uppercase" id="c9p28intermediao2cuanto" onkeypress="return soloNumeros(event)"  onchange="validarcampotexcuadros('c9p28intermediao2cuantodiv','c9p28intermediao2cuanto','7')" name="c9p28intermediao2cuanto" value="<?php if($arrayrespuestas['ec9p28intermediao2cuanto'] == ''){echo('98');}else{ echo($arrayrespuestas['ec9p28intermediao2cuanto']);} ?>">
        </div>

        </div>    
            
            
        <div id="c9p28intermediao3div" <?php if($arrayrespuestas['ec9p28intermediao3']=='' || $arrayrespuestas['ec9p28intermediao3']=='NO' || $arrayrespuestas['ec9p28intermediao3']=='98'){echo('class=" has-error"');}?>>
        <div class="checkbox">
            <label> <!--en este caso se manda a la fincion javascript el nombre del campo-->
              <input type="checkbox" name="c9p28intermediao3" id="c9p28intermediao3" onclick="cambiarsinoc9p28intermedia('SI','c9p28intermediao3','c9p28intermediao3div','c9p28intermediadiv',7);" <?php if($arrayrespuestas['ec9p28intermediao3']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
             c. Ayudas en dinero de instituciones del país o de fuera del país?
            </label>
        </div>
        </div> 
      
            
        <div class="row" id="c9p28intermediao3cuantomostrar" name="c9p28intermediao3cuantomostrar" <?php if($arrayrespuestas['ec9p28intermediao3cuanto']=='SI'|| $arrayrespuestas['ec9p28intermediao3cuanto']=='' || $arrayrespuestas['ec9p28intermediao3cuanto']=='98'){echo('style="display:none"');}?> >
        <div  id="c9p28intermediao3cuantodiv" name="c9p28intermediao3cuantodiv" class="form-group col-md-3">
        <label class="control-label">Valor?</label>
        <input type="text" class="form-control text-uppercase" id="c9p28intermediao3cuanto" onkeypress="return soloNumeros(event)"  onchange="validarcampotexcuadros('c9p28intermediao3cuantodiv','c9p28intermediao3cuanto','7')" name="c9p28intermediao3cuanto" value="<?php if($arrayrespuestas['ec9p28intermediao3cuanto'] == ''){echo('98');}else{ echo($arrayrespuestas['ec9p28intermediao3cuanto']);} ?>">
        </div>

        </div>
            
            
            
        <div id="c9p28intermediao4div" <?php if($arrayrespuestas['ec9p28intermediao4']=='' || $arrayrespuestas['ec9p28intermediao4']=='NO' || $arrayrespuestas['ec9p28intermediao4']=='98'){echo('class=" has-error"');}?>>
        <div class="checkbox">
            <label> <!--en este caso se manda a la fincion javascript el nombre del campo-->
              <input type="checkbox" name="c9p28intermediao4" id="c9p28intermediao4" onclick="cambiarsinoc9p28intermedia('SI','c9p28intermediao4','c9p28intermediao4div','c9p28intermediadiv',7);" <?php if($arrayrespuestas['ec9p28intermediao4']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
             d. Dinero por intereses de préstamo o por CDT's, depósitos de ahorro, utilidades, ganancias o dividendos por inversiones?
            </label>
        </div>
        </div> 
      
            
        <div class="row" id="c9p28intermediao4cuantomostrar" name="c9p28intermediao4cuantomostrar" <?php if($arrayrespuestas['ec9p28intermediao4cuanto']=='SI'|| $arrayrespuestas['ec9p28intermediao4cuanto']=='' || $arrayrespuestas['ec9p28intermediao4cuanto']=='98'){echo('style="display:none"');}?> >
        <div  id="c9p28intermediao4cuantodiv" name="c9p28intermediao4cuantodiv" class="form-group col-md-3">
        <label class="control-label">Valor?</label>
        <input type="text" class="form-control text-uppercase" id="c9p28intermediao4cuanto" onkeypress="return soloNumeros(event)"  onchange="validarcampotexcuadros('c9p28intermediao4cuantodiv','c9p28intermediao4cuanto','7')" name="c9p28intermediao4cuanto" value="<?php if($arrayrespuestas['ec9p28intermediao4cuanto'] == ''){echo('98');}else{ echo($arrayrespuestas['ec9p28intermediao4cuanto']);} ?>">
        </div>

        </div>    
            
            <div id="c9p28intermediao5div" <?php if($arrayrespuestas['ec9p28intermediao5']=='' || $arrayrespuestas['ec9p28intermediao5']=='NO' || $arrayrespuestas['ec9p28intermediao5']=='98'){echo('class=" has-error"');}?>>
        <div class="checkbox">
            <label> <!--en este caso se manda a la fincion javascript el nombre del campo-->
              <input type="checkbox" name="c9p28intermediao5" id="c9p28intermediao5" onclick="cambiarsinoc9p28intermedia('SI','c9p28intermediao5','c9p28intermediao5div','c9p28intermediadiv',7);" <?php if($arrayrespuestas['ec9p28intermediao5']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
             e. Ingresos por concepto de cesantías y/o intereses a las cesantías?
            </label>
        </div>
        </div> 
      
            
        <div class="row" id="c9p28intermediao5cuantomostrar" name="c9p28intermediao5cuantomostrar" <?php if($arrayrespuestas['ec9p28intermediao5cuanto']=='SI'|| $arrayrespuestas['ec9p28intermediao5cuanto']=='' || $arrayrespuestas['ec9p28intermediao5cuanto']=='98'){echo('style="display:none"');}?> >
        <div  id="c9p28intermediao5cuantodiv" name="c9p28intermediao5cuantodiv" class="form-group col-md-3">
        <label class="control-label">Valor?</label>
        <input type="text" class="form-control text-uppercase" id="c9p28intermediao5cuanto" onkeypress="return soloNumeros(event)"  onchange="validarcampotexcuadros('c9p28intermediao5cuantodiv','c9p28intermediacuanto','7')" name="c9p28intermediao5cuanto" value="<?php if($arrayrespuestas['ec9p28intermediao5cuanto'] == ''){echo('98');}else{ echo($arrayrespuestas['ec9p28intermediao5cuanto']);} ?>">
        </div>

        </div>  
            
            
         <div id="c9p28intermediao6div" <?php if($arrayrespuestas['ec9p28intermediao6']=='' || $arrayrespuestas['ec9p28intermediao6']=='NO' || $arrayrespuestas['ec9p28intermediao6']=='98'){echo('class=" has-error"');}?>>
        <div class="checkbox">
            <label> <!--en este caso se manda a la fincion javascript el nombre del campo-->
              <input type="checkbox" name="c9p28intermediao6" id="c9p28intermediao6" onclick="cambiarsinoc9p28intermedia('SI','c9p28intermediao6','c9p28intermediao6div','c9p28intermediadiv',7);" <?php if($arrayrespuestas['ec9p28intermediao6']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
             f. Dinero de otras fuentes diferentes a las anteriores (ingresos por ganancias en juegos de azar, chances, loterías, indemnizaciones, liquidaciones, venta de propiedades, acciones, vehículos, etc.)
            </label>
        </div>
        </div> 
      
            
        <div class="row" id="c9p28intermediao6cuantomostrar" name="c9p28intermediao6cuantomostrar" <?php if($arrayrespuestas['ec9p28intermediao6cuanto']=='SI'|| $arrayrespuestas['ec9p28intermediao6cuanto']=='' || $arrayrespuestas['ec9p28intermediao6cuanto']=='98'){echo('style="display:none"');}?> >
        <div  id="c9p28intermediao6cuantodiv" name="c9p28intermediao6cuantodiv" class="form-group col-md-3">
        <label class="control-label">Valor?</label>
        <input type="text" class="form-control text-uppercase" id="c9p28intermediao6cuanto" onkeypress="return soloNumeros(event)"  onchange="validarcampotexcuadros('c9p28intermediao6cuantodiv','c9p28intermediao6cuanto','7')" name="c9p28intermediao6cuanto" value="<?php if($arrayrespuestas['ec9p28intermediao6cuanto'] == ''){echo('98');}else{ echo($arrayrespuestas['ec9p28intermediao6cuanto']);} ?>">
        </div>

        </div>   
            
         <div id="c9p28intermediao7div" <?php if($arrayrespuestas['ec9p28intermediao7']=='' || $arrayrespuestas['ec9p28intermediao7']=='NO' || $arrayrespuestas['ec9p28intermediao7']=='98'){echo('class=" has-error"');}?>>
        <div class="checkbox">
            <label> <!--en este caso se manda a la fincion javascript el nombre del campo-->
              <input type="checkbox" name="c9p28intermediao7" id="c9p28intermediao7" onclick="cambiarsinoc9p28intermedia('SI','c9p28intermediao7','c9p28intermediao7div','c9p28intermediadiv',7);" <?php if($arrayrespuestas['ec9p28intermediao7']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
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
            <?php if($arrayrespuestas['ec9p28intermediao1']=="" & $arrayrespuestas['ec9p28intermediao2']=="" & $arrayrespuestas['ec9p28intermediao3']=="")
            {
                echo($botoneraginter);
            }
            else
            {
                echo($botoneraainter);
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
                          vc9p28intermediao1 : $('#c9p28intermediao1').val(),
                          vc9p28intermediao1cuanto : $('#c9p28intermediao1cuanto').val(),
                          vc9p28intermediao2 : $('#c9p28intermediao2').val(),
                          vc9p28intermediao2cuanto : $('#c9p28intermediao2cuanto').val(),
                          vc9p28intermediao3 : $('#c9p28intermediao3').val(),
                          vc9p28intermediao3cuanto : $('#c9p28intermediao3cuanto').val(),
                          vc9p28intermediao4 : $('#c9p28intermediao4').val(),
                          vc9p28intermediao4cuanto : $('#c9p28intermediao4cuanto').val(),
                          vc9p28intermediao5 : $('#c9p28intermediao5').val(),
                          vc9p28intermediao5cuanto : $('#c9p28intermediao5cuanto').val(),
                          vc9p28intermediao6 : $('#c9p28intermediao6').val(),
                          vc9p28intermediao6cuanto : $('#c9p28intermediao6cuanto').val(),
                           vc9p28intermediao7 : $('#c9p28intermediao7').val()},                      
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
                          vc9p28intermediao1 : $('#c9p28intermediao1').val(),
                          vc9p28intermediao1cuanto : $('#c9p28intermediao1cuanto').val(),
                          vc9p28intermediao2 : $('#c9p28intermediao2').val(),
                          vc9p28intermediao2cuanto : $('#c9p28intermediao2cuanto').val(),
                          vc9p28intermediao3 : $('#c9p28intermediao3').val(),
                          vc9p28intermediao3cuanto : $('#c9p28intermediao3cuanto').val(),
                          vc9p28intermediao4 : $('#c9p28intermediao4').val(),
                          vc9p28intermediao4cuanto : $('#c9p28intermediao4cuanto').val(),
                          vc9p28intermediao5 : $('#c9p28intermediao5').val(),
                          vc9p28intermediao5cuanto : $('#c9p28intermediao5cuanto').val(),
                          vc9p28intermediao6 : $('#c9p28intermediao6').val(),
                          vc9p28intermediao6cuanto : $('#c9p28intermediao6cuanto').val(),
                           vc9p28intermediao7 : $('#c9p28intermediao7').val()},                      
                          dataType: "html",
                          success : function(obj){                      
                          botonguardar();
                          }
                        });                    
        });
        
        
         $("#capitulos").click(function ()
        {
            
            location.href = "../c_capitulosintegranteintermedia/fc_capitulosintegranteintermedia?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() ;                    
         
            });

        $("#siguiente").click(function ()
        {
         botonsiguiente();
         
         location.href = "../c_c9p29intermedia/fc_c9p29intermedia?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val();                    

        });

              
        $("#anterior").click(function ()
        {
         if($('#c9p26intermedia').val() === '2')
         {
         location.href = "../c_c9p26intermedia/fc_c9p26intermedia?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
         }
         else
         {
           location.href = "../c_c9p27intermedia/fc_c9p27intermedia?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                      
         }
        });

//para cargar variables capitulo, pregunta,encuestador,vivienda,barra



cargardatosgenerales('<?php echo($arraydatosgenerales['ecapitulo']); ?>','Pregunta 3 de 4','<?php echo($arraydatosgenerales['enomcoges']); ?>','<?php echo($arraydatosgenerales['enombreintegrante']." "." - "." "."Sexo:"." ".$arraydatosgenerales['esexointegrante']."   "."  -  "."   "."Edad:"."   ".$arraydatosgenerales['eedadintegrante']); ?>','75');
//control del boton ayuda
botonayuda();

});
//dea aca para abajo es logica de cuadros
function cambiarsinoc9p28intermedia(opcion,campoval,divcampo,divcompleto,campos)
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
    if(campoval == 'c9p28intermediao1')
        {
            if($('#' + campoval).val() == 'SI')
            {
                //alert('aca lo muestra');
                $('#c9p28intermediao1cuantomostrar').show(1000);
                $('#c9p28intermediao1cuanto').val('');
                $('#c9p28intermediao1cuantodiv').addClass(' has-error');  
                

            }
            else
            {
                //alert('aca lo oculta');
                $('#c9p28intermediao1cuantomostrar').hide(1000);
                $('#c9p28intermediao1cuanto').val('98');
                $('#c9p28intermediao1cuantodiv').removeClass(' has-error');
  
            }
        }
        if(campoval == 'c9p28intermediao2')
        {
            if($('#' + campoval).val() == 'SI')
            {
                //alert('aca lo muestra');
                $('#c9p28intermediao2cuantomostrar').show(1000);
                $('#c9p28intermediao2cuanto').val('');
                $('#c9p28intermediao2cuantodiv').addClass(' has-error');            
            }
            else
            {
                //alert('aca lo oculta');
                $('#c9p28intermediao2cuantomostrar').hide(1000);
                $('#c9p28intermediao2cuanto').val('98');
                $('#c9p28intermediao2cuantodiv').removeClass(' has-error');
  
            }
        }
        if(campoval == 'c9p28intermediao3')
        {
            if($('#' + campoval).val() == 'SI')
            {
                //alert('aca lo muestra');
                $('#c9p28intermediao3cuantomostrar').show(1000);
                $('#c9p28intermediao3cuanto').val('');
                $('#c9p28intermediao3cuantodiv').addClass(' has-error');             
            }
            else
            {
                //alert('aca lo oculta');
                $('#c9p28intermediao3cuantomostrar').hide(1000);
                $('#c9p28intermediao3cuanto').val('98');
                $('#c9p28intermediao3cuantodiv').removeClass(' has-error');
            }
        }
       if(campoval == 'c9p28intermediao4')
        {
            if($('#' + campoval).val() == 'SI')
            {
                //alert('aca lo muestra');
                $('#c9p28intermediao4cuantomostrar').show(1000);
                $('#c9p28intermediao4cuanto').val('');
                $('#c9p28intermediao4cuantodiv').addClass(' has-error');             
            }
            else
            {
                //alert('aca lo oculta');
                $('#c9p28intermediao4cuantomostrar').hide(1000);
                $('#c9p28intermediao4cuanto').val('98');
                $('#c9p28intermediao4cuantodiv').removeClass(' has-error');
            }
        }
       
       if(campoval == 'c9p28intermediao5')
        {
            if($('#' + campoval).val() == 'SI')
            {
                //alert('aca lo muestra');
                $('#c9p28intermediao5cuantomostrar').show(1000);
                $('#c9p28intermediao5cuanto').val('');
                $('#c9p28intermediao5cuantodiv').addClass(' has-error');             
            }
            else
            {
                //alert('aca lo oculta');
                $('#c9p28intermediao5cuantomostrar').hide(1000);
                $('#c9p28intermediao5cuanto').val('98');
                $('#c9p28intermediao5cuantodiv').removeClass(' has-error');
            }
        }
       
       if(campoval == 'c9p28intermediao6')
        {
            if($('#' + campoval).val() == 'SI')
            {
                //alert('aca lo muestra');
                $('#c9p28intermediao6cuantomostrar').show(1000);
                $('#c9p28intermediao6cuanto').val('');
                $('#c9p28intermediao6cuantodiv').addClass(' has-error');             
            }
            else
            {
                //alert('aca lo oculta');
                $('#c9p28intermediao6cuantomostrar').hide(1000);
                $('#c9p28intermediao6cuanto').val('98');
                $('#c9p28intermediao6cuantodiv').removeClass(' has-error');
            }
        }

        if(campoval == 'c9p28intermediao7')
           { //alert($('#' + campoval).val());
            if($('#' + campoval).val() == 'SI')
            { //alert($('#' + campoval).val());
              $('#c9p28intermediao1').prop('checked' , false);
              //$('#c9p28intermediao1').prop('disabled', true);
              $('#c9p28intermediao1div').addClass(' has-error');
              $('#c9p28intermediao1cuanto').val('98');
              $('#c9p28intermediao2').prop('checked' , false);
              //$('#c9p28intermediao2').prop('disabled', true);
              $('#c9p28intermediao2div').addClass(' has-error');
              $('#c9p28intermediao2cuanto').val('98');
              $('#c9p28intermediao3').prop('checked' , false);
              //$('#c9p28intermediao3').prop('disabled', true);
              $('#c9p28intermediao3div').addClass(' has-error');
              $('#c9p28intermediao3cuanto').val('98');
              $('#c9p28intermediao4').prop('checked' , false);
              //$('#c9p28intermediao4').prop('disabled', true);
              $('#c9p28intermediao4div').addClass(' has-error');
              $('#c9p28intermediao4cuanto').val('98');
              $('#c9p28intermediao5').prop('checked' , false);
              //$('#c9p28intermediao5').prop('disabled', true);
              $('#c9p28intermediao5div').addClass(' has-error');
              $('#c9p28intermediao5cuanto').val('98');
              $('#c9p28intermediao6').prop('checked' , false);
              //$('#c9p28intermediao6').prop('disabled', true);
              $('#c9p28intermediao6div').addClass(' has-error');
              $('#c9p28intermediao6cuanto').val('98');
              
              $('#c9p28intermediao1cuantomostrar').hide(1000);
              $('#c9p28intermediao1cuanto').val('98');
              $('#c9p28intermediao2cuantomostrar').hide(1000);
              $('#c9p28intermediao2cuanto').val('98');
              $('#c9p28intermediao3cuantomostrar').hide(1000);
              $('#c9p28intermediao3cuanto').val('98');
              $('#c9p28intermediao4cuantomostrar').hide(1000);
              $('#c9p28intermediao4cuanto').val('98');
              $('#c9p28intermediao5cuantomostrar').hide(1000);
              $('#c9p28intermediao5cuanto').val('98');
              $('#c9p28intermediao6cuantomostrar').hide(1000);
              $('#c9p28intermediao6cuanto').val('98');
                            
              $('#c9p28intermediao1').val('NO');
              $('#c9p28intermediao2').val('NO');
              $('#c9p28intermediao3').val('NO');
              $('#c9p28intermediao4').val('NO');
              $('#c9p28intermediao5').val('NO');
              $('#c9p28intermediao6').val('NO');
              
       }
        else
       {//alert('es no');
          $('#c9p28intermediao7').prop('checked' , false); 
          $('#c9p28intermediao7').val('NO');
          $('#c9p28intermediao7div').addClass(' has-error');
        }

    }
    else
    {

          $('#c9p28intermediao7').prop('checked' , false); 
          $('#c9p28intermediao7').val('NO');
          $('#c9p28intermediao7div').addClass(' has-error');
        
    }
        
      validarcuadrosc9p28intermedia(divcompleto,campos);
}
function validarcuadrosc9p28intermedia(divcuadro,ncampos)
{
    //alert($('#' + divcuadro).find('input').prop('checked', true).length);
    //alert($('.has-error').length);
    //alert(ncampos + ' ncampos');
    //alert($('.has-error').length + "-" + ncampos);
    if ($('#c9p28intermediao1cuanto').val() != '' && $('#c9p28intermediao2cuanto').val() != '' && $('#c9p28intermediao3cuanto').val() != ''  && $('#c9p28intermediao4cuanto').val() != '' && $('#c9p28intermediao5cuanto').val() != '' && $('#c9p28intermediao6cuanto').val() != '')
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

    validarcuadrosc9p28intermedia(div,ncampos);
}</script>
</html>