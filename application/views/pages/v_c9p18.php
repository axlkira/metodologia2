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
        <input type="text" class="form-control input-sm" id="c9p20" name="c9p20" style="display:none" placeholder="" value="<?php echo($arrayrespuestas['ec9p20']); ?>">
      
        <!--fin para imprimir el idintegrante y llevarlo-->
<hr>
        <form class="form-group" name="formulario" id="formulario">

            <!--inicio radio una sola seleccion-->
         <div class="row">
            <div id="c9p18div" name="c9p18div" <?php if($arrayrespuestas['ec9p18']==''||$arrayrespuestas['ec9p18']=='98'){echo('class="form-group col-md-12 form-group-sm has-error"');}else{echo('class="form-group col-md-12 form-group-sm"');}?>>   
                <label class="control-label">11. ¿Cuántas horas a la semana trabaja normalmente en ese trabajo?
                    <button type="button" id="vayuda" name="vayuda" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModal">
                        <span class="glyphicon glyphicon-question-sign" aria-hidden="true"></span> Ayuda
                    </button>
                </label>
                <br><br>
        <div class="row" id="c9p18cuantodivmostrar" name="c9p18cuantodivmostrar">
        <div  id="c9p18div" name="c9p18div" class="form-group col-md-4">
            <label class="control-label"> horas</label>     
                       <input type="text"  class="form-control text-uppercase" id="valorc9p18" onkeypress="return soloNumeros(event)"  onchange="validarcampotexcuadros('c9p18div','valorc9p18','1')" name="valorc9p18"   placeholder="Cuantas horas" value="<?php if($arrayrespuestas['ec9p18'] == ''){echo('');}else{ echo($arrayrespuestas['ec9p18']);} ?>">
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
            <?php if($arrayrespuestas['ec9p18']=="")
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
                          data: {vfolio : $('#folio').val(),vidintegrante : $('#idintegrante').val(), vvalorc9p18 : $('#valorc9p18').val()},    
                          dataType: "html",
                          success : function(obj){                      
                          botonguardar();
                          //saltarc9p18();
                          
                          }
                        });                    
        });

        
        $("#actualizar").click(function ()
        {
                        $.ajax({
                          url: "fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),vidintegrante : $('#idintegrante').val(), vvalorc9p18 : $('#valorc9p18').val()},   
                          dataType: "html",
                          success : function(obj){                      
                          botonguardar();
                          //saltarc9p18();
                           
                          }
                        });                    
        });
        

        $("#siguiente").click(function ()
        { 
//          if($('#valorc9p18').val() <= 39)
//          {
//         location.href = "../c_c9p23/fc_c9p23?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                      
//          }
//          else 
          if ($('#edad').val() > 14 && $('#edad').val() < 18 )
          {
         location.href = "../c_c9p19/fc_c9p19?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                        
          }
         else
          {
         location.href = "../c_c9p20/fc_c9p20?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                        
          }   
         
         
        });

        $("#anterior").click(function ()
        {
         botonanterior();
         location.href = "../c_c9p17/fc_c9p17?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                
          
        });

//para cargar variables capitulo, pregunta,encuestador,vivienda,barra



cargardatosgenerales('<?php echo($arraydatosgenerales['ecapitulo']); ?>','Pregunta 10 de 16','<?php echo($arraydatosgenerales['enomcoges']); ?>','<?php echo($arraydatosgenerales['enombreintegrante']." "." - "." "."Sexo:"." ".$arraydatosgenerales['esexointegrante']."   "."  -  "."   "."Edad:"."   ".$arraydatosgenerales['eedadintegrante']); ?>','60');
//control del boton ayuda
botonayuda();

});
/* 
Funciones para validar campos y gaurdar
 */
//habilitar boton guardar
function validarguardarc9p18()
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
function validarbolitasytextoc9p18(div,campo)
{ //alert(div + ' juanpis ' + campo);
   if(($('#'+ campo).val() == '') || ($('#'+ campo).val() == '0'))
   { 
       $('#' + div).addClass(' has-error');
   }
   else
   { 
       $('#' + div).removeClass('has-error');
   }
    validarguardarc9p18();
}
// colocar opcion para todos
function colocaropcionc9p18(opcion,campoval,divcampo)
{
    //alert(opcion);
    $('#' + campoval).val(opcion);
    
    if(opcion == '1')
        {
           // alert('aca lo muestra');
            $('#c9p18cuantodivmostrar').show(1000);
            $('#valorc9p18cuanto').val('');
            $('#c9p18cuantodiv').addClass(' has-error');            
        }
        else
        {
            //alert('aca lo oculta');
            $('#c9p18cuantodivmostrar').hide(1000);
            $('#valorc9p18cuanto').val('98');
            $('#c9p18cuantodiv').removeClass(' has-error');            
        }
    validarbolitasytextoc9p18(divcampo,campoval);
}
//de aca para arriba es logica de bolas y textos
function validarcampotexcuadros(div,campo,ncampos)
{
    validarbolitasytexto(div,campo);
    validarcuadrosc9p18(div,ncampos);
}


function saltarc9p18()
{
if($('#valorc9p18').val() <= 39)
         {                
                          //alert('menor de 39 y en edad de 15 a 17')
                          $.ajax({
                          url: "../c_c9p19/fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),
                          vidintegrante : $('#idintegrante').val(),
                          vvalorc9p19 : '98'},    
                          dataType: "html",
                          success : function(obj)
                          {
                         //location.href = "../c_c8p7/fc_c8p7?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
                          }
                         });
                         
                         $.ajax({
                          url: "../c_c9p20/fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),vidintegrante : $('#idintegrante').val(), vvalorc9p20 :'98'},    
                          dataType: "html",
                          success : function(obj)
                          {
                         //location.href = "../c_c9p/fc_c8p7?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
                          }
                         });
                         
                         $.ajax({
                          url: "../c_c9p21/fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),vidintegrante : $('#idintegrante').val(), vvalorc9p21 :'98'},    
                          dataType: "html",
                          success : function(obj)
                          {
                         //location.href = "../c_c9p7/fc_c9p7?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
                          }
                         });
                         $.ajax({
                          url: "../c_c9p22/fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),vidintegrante : $('#idintegrante').val(), vvalorc9p22 :'98',vvalorc9p22cual :'98'},    
                          dataType: "html",
                          success : function(obj)
                          {
                         //location.href = "../c_c9p18/fc_c9p18?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
                          }
                         });
                         
                         $.ajax({
                          url: "../c_c9p23/fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),vidintegrante : $('#idintegrante').val(), vvalorc9p23 : ''},    
                          dataType: "html",
                          success : function(obj)
                          {
                         //location.href = "../c_c9p18/fc_c9p18?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
                          }
                         });
  
        }
    else if($('#valorc9p18').val() >= 40 &&  ($('#edad').val() > 14 && $('#edad').val() < 18 ))
               {
                         //alert('mayor de 40 horas y en edad de 15');
                          $.ajax({
                          url: "../c_c9p19/fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),
                          vidintegrante : $('#idintegrante').val(),
                          vvalorc9p19 : ''},    
                          dataType: "html",
                          success : function(obj)
                          {
                         //location.href = "../c_c8p7/fc_c8p7?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
                          }
                         });
                         
                         $.ajax({
                          url: "../c_c9p20/fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),vidintegrante : $('#idintegrante').val(), vvalorc9p20 :''},    
                          dataType: "html",
                          success : function(obj)
                          {
                         //location.href = "../c_c9p/fc_c8p7?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
                          }
                         });
                         
                         $.ajax({
                          url: "../c_c9p21/fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),vidintegrante : $('#idintegrante').val(), vvalorc9p21 :''},    
                          dataType: "html",
                          success : function(obj)
                          {
                         //location.href = "../c_c9p7/fc_c9p7?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
                          }
                         });
                         $.ajax({
                          url: "../c_c9p22/fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),vidintegrante : $('#idintegrante').val(), vvalorc9p22 :'',vvalorc9p22cual :''},    
                          dataType: "html",
                          success : function(obj)
                          {
                         //location.href = "../c_c9p18/fc_c9p18?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
                          }
                         });
                         $.ajax({
                          url: "../c_c9p23/fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),vidintegrante : $('#idintegrante').val(), vvalorc9p23 : ''},    
                          dataType: "html",
                          success : function(obj)
                          {
                         //location.href = "../c_c9p18/fc_c9p18?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
                          }
                         });
                 }    
        
        else
             {               
//                          $.ajax({
//                          url: "../c_c9p19/fc_actualizar",
//                          type: "GET",
//                          data: {vfolio : $('#folio').val(),
//                          vidintegrante : $('#idintegrante').val(),
//                          vvalorc9p19 : ''},    
//                          dataType: "html",
//                          success : function(obj)
//                          {
//                         //location.href = "../c_c8p7/fc_c8p7?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
//                          }
//                         });
                         
                         $.ajax({
                          url: "../c_c9p20/fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),vidintegrante : $('#idintegrante').val(), vvalorc9p20 :''},    
                          dataType: "html",
                          success : function(obj)
                          {
                         //location.href = "../c_c9p/fc_c8p7?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
                          }
                         });
                         
                         $.ajax({
                          url: "../c_c9p21/fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),vidintegrante : $('#idintegrante').val(), vvalorc9p21 :''},    
                          dataType: "html",
                          success : function(obj)
                          {
                         //location.href = "../c_c9p7/fc_c9p7?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
                          }
                         });
                         $.ajax({
                          url: "../c_c9p22/fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),vidintegrante : $('#idintegrante').val(), vvalorc9p22 :'',vvalorc9p22cual :''},    
                          dataType: "html",
                          success : function(obj)
                          {
                         //location.href = "../c_c9p18/fc_c9p18?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
                          }
                         });
                         $.ajax({
                          url: "../c_c9p23/fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),vidintegrante : $('#idintegrante').val(), vvalorc9p23 : ''},    
                          dataType: "html",
                          success : function(obj)
                          {
                         //location.href = "../c_c9p18/fc_c9p18?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
                          }
                         });
                         
        
         }
                
                
                
               
 }



</script>
</html>