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
            <div id="c9p11intermediadiv" name="c9p11intermediadiv" <?php if($arrayrespuestas['ec9p11intermedia']==''||$arrayrespuestas['ec9p11intermedia']=='98'){echo('class="form-group col-md-12 form-group-sm has-error"');}else{echo('class="form-group col-md-12 form-group-sm"');}?>>   
                <label class="control-label">4. ¿El mes pasado recibió ingresos por concepto de horas extras? (Unica Respuesta)
                    <button type="button" id="vayuda" name="vayuda" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModal">
                        <span class="glyphicon glyphicon-question-sign" aria-hidden="true"></span> Ayuda
                    </button>
                </label>
                <div class="radio">
                    <label><!--en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="c9p11intermedia" id="c9p11intermedia" onclick="colocaropcionc9p11intermedia('1','valorc9p11intermedia','c9p11intermediadiv');" value="1" <?php if($arrayrespuestas['ec9p11intermedia']=='1'){echo('checked');}?>>
                        Si
                    </label>
                </div>
        <div class="row" id="c9p11intermediacuantodivmostrar" name="c9p11intermediacuantodivmostrar" <?php if($arrayrespuestas['ec9p11intermediacuanto']== ''||$arrayrespuestas['ec9p11intermediacuanto']== '98'){echo('style="display:none"');}else{echo('');}  ?> >
        <div  id="c9p11intermediacuantodiv" name="c9p11intermediacuantodiv" class="form-group col-md-4">
                       <label class="control-label">a. Cuanto Recibio?</label>
                       <input type="text"  class="form-control text-uppercase" id="valorc9p11intermediacuanto" onkeypress="return soloNumeros(event)"  onchange="validarcampotexcuadros('c9p11intermediacuantodiv','valorc9p11intermediacuanto','1')" name="valorc9p11intermediacuanto"   placeholder="Cuanto?" value="<?php if($arrayrespuestas['ec9p11intermediacuanto'] == ''){echo('');}else{ echo($arrayrespuestas['ec9p11intermediacuanto']);} ?>">
        </div>
            <div class="col-md-6" name="c9p11intermediaincluyodiv" id="c9p11intermediaincluyodiv" <?php if($arrayrespuestas['ec9p11intermediaincluyo']==''||$arrayrespuestas['ec9p11intermediaincluyo']=='98'){echo('class="form-group col-md-12 form-group-sm has-error"');}else{echo('class="form-group col-md-12 form-group-sm"');}?> >
                <label class="control-label"> b. ¿incluyó este valor en los ingresos del mes pasado que me declaró anteriormente?  </label> 
            <div class="radio">
                    <label><!--en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="c9p11intermediaincluyo" id="c9p11intermediaincluyo" onclick="colocaropcionc9p11intermediaincluyo('1','valorc9p11intermediaincluyo','c9p11intermediaincluyodiv');" value="1" <?php if($arrayrespuestas['ec9p11intermediaincluyo']=='1'){echo('checked');}?>>
                        Si
                    </label>
                </div>
            <div class="radio">
                    <label>
                        <input type="radio" name="c9p11intermediaincluyo" id="c9p11intermediaincluyo" onclick="colocaropcionc9p11intermediaincluyo('2','valorc9p11intermediaincluyo','c9p11intermediaincluyodiv');" value="2" <?php if($arrayrespuestas['ec9p11intermediaincluyo']=='2'){echo('checked');}?>>
                        No
                    </label>             
                </div> 
            <input type="text" class="form-control" id="valorc9p11intermediaincluyo" name="valorc9p11intermediaincluyo" style="display:none" placeholder="Text input" value="<?php echo($arrayrespuestas['ec9p11intermediaincluyo']); ?>">
            
            </div>
            
        </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="c9p11intermedia" id="c9p11intermedia" onclick="colocaropcionc9p11intermedia('2','valorc9p11intermedia','c9p11intermediadiv');" value="2" <?php if($arrayrespuestas['ec9p11intermedia']=='2'){echo('checked');}?>>
                        No
                    </label>             
                </div> 
                <div class="radio">
                    <label>
                        <input type="radio" name="c9p11intermedia" id="c9p11intermedia" onclick="colocaropcionc9p11intermedia('3','valorc9p11intermedia','c9p11intermediadiv');" value="3" <?php if($arrayrespuestas['ec9p11intermedia']=='3'){echo('checked');}?>>
                        No sabe, no informa
                    </label>             
                </div> 
                <input type="text" class="form-control" id="valorc9p11intermedia" name="valorc9p11intermedia" style="display:none" placeholder="Text input" value="<?php echo($arrayrespuestas['ec9p11intermedia']); ?>">
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
            <?php if($arrayrespuestas['ec9p11intermedia']=="")
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
                          data: {vfolio : $('#folio').val(),vidintegrante : $('#idintegrante').val(), vvalorc9p11intermedia : $('#valorc9p11intermedia').val(),vvalorc9p11intermediacuanto : $('#valorc9p11intermediacuanto').val(),vvalorc9p11intermediaincluyo : $('#valorc9p11intermediaincluyo').val()},    
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
                          data: {vfolio : $('#folio').val(),vidintegrante : $('#idintegrante').val(), vvalorc9p11intermedia : $('#valorc9p11intermedia').val(),vvalorc9p11intermediacuanto : $('#valorc9p11intermediacuanto').val(),vvalorc9p11intermediaincluyo : $('#valorc9p11intermediaincluyo').val()},    
                          dataType: "html",
                          success : function(obj){                      
                          botonguardar();
                          }
                        });                    
        });
        
        
         $("#capitulos").click(function ()
        {
            
            location.href = "../c_capitulosintegranteintermediaLCV1/fc_capitulosintegranteintermediaLCV1?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() ;                    
         
            }); 
        

        $("#siguiente").click(function ()
        {                           
         location.href = "../c_c9p12intermediaLCV1/fc_c9p12intermediaLCV1?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                      

        });

        $("#anterior").click(function ()
        {
         botonanterior();
         location.href = "../c_c9p10intermediaLCV1/fc_c9p10intermediaLCV1?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                
          
        });

//para cargar variables capitulo, pregunta,encuestador,vivienda,barra



cargardatosgenerales('<?php echo($arraydatosgenerales['ecapitulo']); ?>','4 de 12 subcapitulo 9M','<?php echo($arraydatosgenerales['enomcoges']); ?>','<?php echo($arraydatosgenerales['enombreintegrante']." "." - "." "."Sexo:"." ".$arraydatosgenerales['esexointegrante']."   "."  -  "."   "."Edad:"."   ".$arraydatosgenerales['eedadintegrante']); ?>','36');
//control del boton ayuda
botonayuda();

});
/* 
Funciones para validar campos y gaurdar
 */
//habilitar boton guardar
function validarguardarc9p11intermedia()
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
function validarbolitasytextoc9p11intermedia(div,campo)
{ //alert(div + ' juanpis ' + campo);
   if(($('#'+ campo).val() == '') || ($('#'+ campo).val() == '0'))
   { 
       $('#' + div).addClass(' has-error');
   }
   else
   { 
       $('#' + div).removeClass('has-error');
   }
    validarguardarc9p11intermedia();
}
// colocar opcion para todos
function colocaropcionc9p11intermedia(opcion,campoval,divcampo)
{
    //alert(opcion);
    $('#' + campoval).val(opcion);
    
    if(opcion == '1')
        {
           // alert('aca lo muestra');
            $('#c9p11intermediacuantodivmostrar').show();
            $('#valorc9p11intermediacuanto').val('');
            $('#valorc9p11intermediaincluyo').val('');
            $('#c9p11intermediacuantodiv').addClass(' has-error');
            $('#c9p11intermediaincluyodiv').addClass(' has-error')
        }
        else
        {
            //alert('aca lo oculta');
            $('#c9p11intermediacuantodivmostrar').hide();
            $('#valorc9p11intermediacuanto').val('98');
            $('#valorc9p11intermediaincluyo').val('98');
            $('#c9p11intermediaincluyo').prop('checked',false); 
            $('#c9p11intermediacuantodiv').removeClass(' has-error');
            $('#c9p11intermediaincluyodiv').removeClass(' has-error')
            
        }
    validarbolitasytextoc9p11intermedia(divcampo,campoval);
}

function colocaropcionc9p11intermediaincluyo(opcion,campoval,divcampo)
{
    //alert(opcion);
    $('#' + campoval).val(opcion);    
   
    validarbolitasytextoc9p11intermedia(divcampo,campoval);
}


//de aca para arriba es logica de bolas y textos
function validarcampotexcuadros(div,campo,ncampos)
{
    validarbolitasytexto(div,campo);
    validarcuadrosc9p11intermedia(div,ncampos);
}

</script>
</html>