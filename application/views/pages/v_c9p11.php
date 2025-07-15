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

            <!--inicio radio una sola seleccion-->
            <div class="row">
            <div id="c9p11div" name="c9p11div" <?php if($arrayrespuestas['ec9p11']==''||$arrayrespuestas['ec9p11']=='98'){echo('class="form-group col-md-12 form-group-sm has-error"');}else{echo('class="form-group col-md-12 form-group-sm"');}?>>   
                <label class="control-label">4. ¿El mes pasado recibió ingresos por concepto de horas extras? (Unica Respuesta)
                    <button type="button" id="vayuda" name="vayuda" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModal">
                        <span class="glyphicon glyphicon-question-sign" aria-hidden="true"></span> Ayuda
                    </button>
                </label>
                <div class="radio">
                    <label><!--en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="c9p11" id="c9p11" onclick="colocaropcionc9p11('1','valorc9p11','c9p11div');" value="1" <?php if($arrayrespuestas['ec9p11']=='1'){echo('checked');}?>>
                        Si
                    </label>
                </div>
        <div class="row" id="c9p11cuantodivmostrar" name="c9p11cuantodivmostrar" <?php if($arrayrespuestas['ec9p11cuanto']== ''||$arrayrespuestas['ec9p11cuanto']== '98'){echo('style="display:none"');}else{echo('');}  ?> >
        <div  id="c9p11cuantodiv" name="c9p11cuantodiv" class="form-group col-md-4">
                       <label class="control-label">a. Cuanto Recibio?</label>
                       <input type="text"  class="form-control text-uppercase" id="valorc9p11cuanto" onkeypress="return soloNumeros(event)"  onchange="validarcampotexcuadros('c9p11cuantodiv','valorc9p11cuanto','1')" name="valorc9p11cuanto"   placeholder="Cuanto?" value="<?php if($arrayrespuestas['ec9p11cuanto'] == ''){echo('');}else{ echo($arrayrespuestas['ec9p11cuanto']);} ?>">
        </div>
            <div class="col-md-6" name="c9p11incluyodiv" id="c9p11incluyodiv" <?php if($arrayrespuestas['ec9p11incluyo']==''||$arrayrespuestas['ec9p11incluyo']=='98'){echo('class="form-group col-md-12 form-group-sm has-error"');}else{echo('class="form-group col-md-12 form-group-sm"');}?> >
                <label class="control-label"> b. ¿incluyó este valor en los ingresos del mes pasado que me declaró anteriormente?  </label> 
            <div class="radio">
                    <label><!--en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="c9p11incluyo" id="c9p11incluyo" onclick="colocaropcionc9p11incluyo('1','valorc9p11incluyo','c9p11incluyodiv');" value="1" <?php if($arrayrespuestas['ec9p11incluyo']=='1'){echo('checked');}?>>
                        Si
                    </label>
                </div>
            <div class="radio">
                    <label>
                        <input type="radio" name="c9p11incluyo" id="c9p11incluyo" onclick="colocaropcionc9p11incluyo('2','valorc9p11incluyo','c9p11incluyodiv');" value="2" <?php if($arrayrespuestas['ec9p11incluyo']=='2'){echo('checked');}?>>
                        No
                    </label>             
                </div> 
            <input type="text" class="form-control" id="valorc9p11incluyo" name="valorc9p11incluyo" style="display:none" placeholder="Text input" value="<?php echo($arrayrespuestas['ec9p11incluyo']); ?>">
            
            </div>
            
        </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="c9p11" id="c9p11" onclick="colocaropcionc9p11('2','valorc9p11','c9p11div');" value="2" <?php if($arrayrespuestas['ec9p11']=='2'){echo('checked');}?>>
                        No
                    </label>             
                </div> 
                <div class="radio">
                    <label>
                        <input type="radio" name="c9p11" id="c9p11" onclick="colocaropcionc9p11('3','valorc9p11','c9p11div');" value="3" <?php if($arrayrespuestas['ec9p11']=='3'){echo('checked');}?>>
                        No sabe, no informa
                    </label>             
                </div> 
                <input type="text" class="form-control" id="valorc9p11" name="valorc9p11" style="display:none" placeholder="Text input" value="<?php echo($arrayrespuestas['ec9p11']); ?>">
            </div>
            </div> 
            <!--fin radio una sola seleccion-->
            
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
            <?php if($arrayrespuestas['ec9p11']=="")
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
                          data: {vfolio : $('#folio').val(),vidintegrante : $('#idintegrante').val(), vvalorc9p11 : $('#valorc9p11').val(),vvalorc9p11cuanto : $('#valorc9p11cuanto').val(),vvalorc9p11incluyo : $('#valorc9p11incluyo').val()},    
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
                          data: {vfolio : $('#folio').val(),vidintegrante : $('#idintegrante').val(), vvalorc9p11 : $('#valorc9p11').val(),vvalorc9p11cuanto : $('#valorc9p11cuanto').val(),vvalorc9p11incluyo : $('#valorc9p11incluyo').val()},    
                          dataType: "html",
                          success : function(obj){                      
                          botonguardar();
                          }
                        });                    
        });
        

        $("#siguiente").click(function ()
        {                           
         location.href = "../c_c9p12/fc_c9p12?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                      

        });

        $("#anterior").click(function ()
        {
         botonanterior();
         location.href = "../c_c9p8/fc_c9p8?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                
          
        });

//para cargar variables capitulo, pregunta,encuestador,vivienda,barra



cargardatosgenerales('<?php echo($arraydatosgenerales['ecapitulo']); ?>','Pregunta 4 de 16','<?php echo($arraydatosgenerales['enomcoges']); ?>','<?php echo($arraydatosgenerales['enombreintegrante']." "." - "." "."Sexo:"." ".$arraydatosgenerales['esexointegrante']."   "."  -  "."   "."Edad:"."   ".$arraydatosgenerales['eedadintegrante']); ?>','18');
//control del boton ayuda
botonayuda();

});
/* 
Funciones para validar campos y gaurdar
 */
//habilitar boton guardar
function validarguardarc9p11()
{
   //alert($('.has-error').length);
   if($('.has-error').length === 0)
   {
       $('#guardar').prop('disabled', false);
       $('#actualizar').prop('disabled', false);
       $('#cancelar').prop('disabled', false);
       $('#anterior').prop('disabled', true);
       $('#siguiente').prop('disabled', true);       
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

//validar bolitas y texto
function validarbolitasytextoc9p11(div,campo)
{ //alert(div + ' juanpis ' + campo);
   if(($('#'+ campo).val() == '') || ($('#'+ campo).val() == '0'))
   { 
       $('#' + div).addClass(' has-error');
   }
   else
   { 
       $('#' + div).removeClass('has-error');
   }
    validarguardarc9p11();
}
// colocar opcion para todos
function colocaropcionc9p11(opcion,campoval,divcampo)
{
    //alert(opcion);
    $('#' + campoval).val(opcion);
    
    if(opcion == '1')
        {
           // alert('aca lo muestra');
            $('#c9p11cuantodivmostrar').show(1000);
            $('#valorc9p11cuanto').val('');
            $('#valorc9p11incluyo').val('');
            $('#c9p11cuantodiv').addClass(' has-error');
            $('#c9p11incluyodiv').addClass(' has-error')
        }
        else
        {
            //alert('aca lo oculta');
            $('#c9p11cuantodivmostrar').hide(1000);
            $('#valorc9p11cuanto').val('98');
            $('#valorc9p11incluyo').val('98');
            $('#c9p11incluyo').prop('checked',false); 
            $('#c9p11cuantodiv').removeClass(' has-error');
            $('#c9p11incluyodiv').removeClass(' has-error')
            
        }
    validarbolitasytextoc9p11(divcampo,campoval);
}

function colocaropcionc9p11incluyo(opcion,campoval,divcampo)
{
    //alert(opcion);
    $('#' + campoval).val(opcion);    
   
    validarbolitasytextoc9p11(divcampo,campoval);
}


//de aca para arriba es logica de bolas y textos
function validarcampotexcuadros(div,campo,ncampos)
{
    validarbolitasytexto(div,campo);
    validarcuadrosc9p11(div,ncampos);
}

</script>
</html>