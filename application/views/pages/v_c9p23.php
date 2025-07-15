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
        <input type="text" class="form-control input-sm" id="c9p18" name="c9p18" style="display:none" placeholder="" value="<?php echo($arrayrespuestas['ec9p18']); ?>">
      
        <!--fin para imprimir el idintegrante y llevarlo-->
<hr>
        <form class="form-group" name="formulario" id="formulario">

            <!--inicio radio una sola seleccion-->
         <div class="row">
            <div id="c9p23div" name="c9p23div" <?php if($arrayrespuestas['ec9p23']==''||$arrayrespuestas['ec9p23']=='98'){echo('class="form-group col-md-12 form-group-sm has-error"');}else{echo('class="form-group col-md-12 form-group-sm"');}?>>   
                <label class="control-label">16. ¿Cuánto ganó el mes pasado en ese Segundo trabajo o negocio?
                    <button type="button" id="vayuda" name="vayuda" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModal">
                        <span class="glyphicon glyphicon-question-sign" aria-hidden="true"></span> Ayuda
                    </button>
                </label>
                <br><br>
        <div class="row" id="c9p23cuantodivmostrar" name="c9p23cuantodivmostrar">
        <div  id="c9p23div" name="c9p23div" class="form-group col-md-4">
         
                       <input type="text"  class="form-control text-uppercase" id="valorc9p23" onkeypress="return soloNumeros(event)"  onchange="validarcampotexcuadros('c9p23div','valorc9p23','1')" name="valorc9p23"   placeholder="Cuanto?" value="<?php if($arrayrespuestas['ec9p23'] == ''){echo('');}else{ echo($arrayrespuestas['ec9p23']);} ?>">
        </div>
        </div>
              
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
            <?php if($arrayrespuestas['ec9p23']=="")
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
                          data: {vfolio : $('#folio').val(),vidintegrante : $('#idintegrante').val(), vvalorc9p23 : $('#valorc9p23').val()},    
                          dataType: "html",
                          success : function(obj){                      
                          botonguardar();
                          saltop2();
                          }
                        });                    
        });

        
        $("#actualizar").click(function ()
        {
                        $.ajax({
                          url: "fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),vidintegrante : $('#idintegrante').val(), vvalorc9p23 : $('#valorc9p23').val()},   
                          dataType: "html",
                          success : function(obj){                      
                          botonguardar();
                          saltop2();
                          }
                        });                    
        });
        

        $("#siguiente").click(function ()
        {                           
         location.href = "../c_c9p26/fc_c9p26?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                      

        });

        $("#anterior").click(function ()
        {
//         if($('#c9p18').val() <= 39)
//          {
//         location.href = "../c_c9p18/fc_c9p18?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                      
//          }
//          else
//          {
          location.href = "../c_c9p22/fc_c9p22?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                      
          
        });

//para cargar variables capitulo, pregunta,encuestador,vivienda,barra



cargardatosgenerales('<?php echo($arraydatosgenerales['ecapitulo']); ?>','Pregunta 16 de 16','<?php echo($arraydatosgenerales['enomcoges']); ?>','<?php echo($arraydatosgenerales['enombreintegrante']." "." - "." "."Sexo:"." ".$arraydatosgenerales['esexointegrante']."   "."  -  "."   "."Edad:"."   ".$arraydatosgenerales['eedadintegrante']); ?>','100');
//control del boton ayuda
botonayuda();

});
/* 
Funciones para validar campos y gaurdar
 */
function saltop2()
{                        $.ajax({
                          url: "../c_c9p24/fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),vidintegrante : $('#idintegrante').val(), vvalorc9p24 :'98'},    
                          dataType: "html",
                          success : function(obj)
                          {
                         //location.href = "../c_c9p7/fc_c9p7?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
                          }
                         });
                         $.ajax({
                          url: "../c_c9p25/fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),vidintegrante : $('#idintegrante').val(), vvalorc9p25 :'98'},    
                          dataType: "html",
                          success : function(obj)
                          {
                         location.href = "../c_c9p23/fc_c9p23?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
                          }
                         });
}
//habilitar boton guardar
function validarguardarc9p23()
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
function validarbolitasytextoc9p23(div,campo)
{ //alert(div + ' juanpis ' + campo);
   if(($('#'+ campo).val() == '') || ($('#'+ campo).val() == '0'))
   { 
       $('#' + div).addClass(' has-error');
   }
   else
   { 
       $('#' + div).removeClass('has-error');
   }
    validarguardarc9p23();
}
// colocar opcion para todos
function colocaropcionc9p23(opcion,campoval,divcampo)
{
    //alert(opcion);
    $('#' + campoval).val(opcion);
    
    if(opcion == '1')
        {
           // alert('aca lo muestra');
            $('#c9p23cuantodivmostrar').show(1000);
            $('#valorc9p23cuanto').val('');
            $('#c9p23cuantodiv').addClass(' has-error');            
        }
        else
        {
            //alert('aca lo oculta');
            $('#c9p23cuantodivmostrar').hide(1000);
            $('#valorc9p23cuanto').val('98');
            $('#c9p23cuantodiv').removeClass(' has-error');            
        }
    validarbolitasytextoc9p23(divcampo,campoval);
}
//de aca para arriba es logica de bolas y textos
function validarcampotexcuadros(div,campo,ncampos)
{
    validarbolitasytexto(div,campo);
    validarcuadrosc9p23(div,ncampos);
}

</script>
</html>