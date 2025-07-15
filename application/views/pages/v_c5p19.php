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
        <input type="text" class="form-control input-sm" id="c5p14" name="c5p14" style="display:none" placeholder="" value="<?php echo($arrayrespuestas['ec5p14']); ?>">
        <!--fin para imprimir el idintegrante y llevarlo-->
<hr>
        <form class="form-group" name="formulario" id="formulario">

            <!--inicio radio una sola seleccion-->
            <div class="row">
            <div id="c5p19div" name="c5p19div" <?php if($arrayrespuestas['ec5p19']==''||$arrayrespuestas['ec5p19']=='98'){echo('class="form-group col-md-12 form-group-sm has-error"');}else{echo('class="form-group col-md-12 form-group-sm"');}?>>   
                <label class="control-label">19. Preguntar a  mujeres lactantes     Despues del parto…Ha accedido algùn  complemento  alimentario (leche fortificada etc) (Unica Respuesta)
                    <button type="button" id="vayuda" name="vayuda" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModal">
                        <span class="glyphicon glyphicon-question-sign" aria-hidden="true"></span> Ayuda
                    </button>
                </label>
                <div class="radio">
                    <label><!--en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="c5p19" id="c5p19" onclick="colocaropcionc5p19('1','valorc5p19','c5p19div');" value="1" <?php if($arrayrespuestas['ec5p19']=='1'){echo('checked');}?>>
                        Si
                    </label>
                </div>
        <div class="row" id="c5p19cualdivmostrar" name="c5p19cualdivmostrar" <?php if($arrayrespuestas['ec5p19cual']== ''||$arrayrespuestas['ec5p19cual']== '98'){echo('style="display:none"');}else{echo('');}  ?> >
        <div  id="c5p19cualdiv" name="c5p19cualdiv" class="form-group col-md-3">
                       <label class="control-label">Cual?</label>
                       <input type="text" class="form-control text-uppercase" id="valorc5p19cual" onkeypress="return soloLetras(event)"  onchange="validarcampotexcuadros('c5p19cualdiv','valorc5p19cual','1')" name="valorc5p19cual"   placeholder="Cual?" value="<?php if($arrayrespuestas['ec5p19cual'] == ''){echo('');}else{ echo($arrayrespuestas['ec5p19cual']);} ?>">
        </div>
        </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="c5p19" id="c5p19" onclick="colocaropcionc5p19('2','valorc5p19','c5p19div');" value="2" <?php if($arrayrespuestas['ec5p19']=='2'){echo('checked');}?>>
                        No
                    </label>             
                </div> 
                <input type="text" class="form-control" id="valorc5p19" name="valorc5p19" style="display:none" placeholder="Text input" value="<?php echo($arrayrespuestas['ec5p19']); ?>">
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
            <?php if($arrayrespuestas['ec5p19']=="")
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
                          data: {vfolio : $('#folio').val(),vidintegrante : $('#idintegrante').val(), vvalorc5p19 : $('#valorc5p19').val(),vvalorc5p19cual : $('#valorc5p19cual').val()},    
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
                          data: {vfolio : $('#folio').val(),vidintegrante : $('#idintegrante').val(), vvalorc5p19 : $('#valorc5p19').val(),vvalorc5p19cual : $('#valorc5p19cual').val()},    
                          dataType: "html",
                          success : function(obj){                      
                          botonguardar();
                          }
                        });                    
        });
        

        $("#siguiente").click(function ()
        {
                           botonsiguiente();
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
                           vvalorc5p22 :'98',
                           vvalorc5p22esquema : '98'},
                           dataType: "html",
                           success : function(obj)
                           {
                          location.href = "../c_capitulosintegrante/fc_capitulosintegrante?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                       
                           }
                          });
         //location.href = "../c_c5p19/fc_c5p19?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    

        });

        $("#anterior").click(function ()
        {
         botonanterior();
          if($('#c5p14').val() === 'c5p14o2')
          {
         location.href = "../c_c5p14/fc_c5p14?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
          }
          else
          {
              location.href = "../c_c5p18/fc_c5p18?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
          }
        });

//para cargar variables capitulo, pregunta,encuestador,vivienda,barra



cargardatosgenerales('<?php echo($arraydatosgenerales['ecapitulo']); ?>','Pregunta 19 de 22','<?php echo($arraydatosgenerales['enomcoges']); ?>','<?php echo($arraydatosgenerales['enombreintegrante']." "." - "." "."Sexo:"." ".$arraydatosgenerales['esexointegrante']."   "."  -  "."   "."Edad:"."   ".$arraydatosgenerales['eedadintegrante']); ?>','85');
//control del boton ayuda
botonayuda();

});
/* 
Funciones para validar campos y gaurdar
 */
//habilitar boton guardar
function validarguardarc5p19()
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
function validarbolitasytextoc5p19(div,campo)
{ //alert(div + ' juanpis ' + campo);
   if(($('#'+ campo).val() == '') || ($('#'+ campo).val() == '0'))
   { 
       $('#' + div).addClass(' has-error');
   }
   else
   { 
       $('#' + div).removeClass('has-error');
   }
    validarguardarc5p19();
}
// colocar opcion para todos
function colocaropcionc5p19(opcion,campoval,divcampo)
{
    //alert(opcion);
    $('#' + campoval).val(opcion);
    
    if(opcion == '1')
        {
           // alert('aca lo muestra');
            $('#c5p19cualdivmostrar').show(1000);
            $('#valorc5p19cual').val('');
            $('#c5p19cualdiv').addClass(' has-error');            
        }
        else
        {
            //alert('aca lo oculta');
            $('#c5p19cualdivmostrar').hide(1000);
            $('#valorc5p19cual').val('98');
            $('#c5p19cualdiv').removeClass(' has-error');            
        }
    validarbolitasytextoc5p19(divcampo,campoval);
}
//de aca para arriba es logica de bolas y textos
function validarcampotexcuadros(div,campo,ncampos)
{
    validarbolitasytexto(div,campo);
    validarcuadrosc5p19(div,ncampos);
}

</script>
</html>