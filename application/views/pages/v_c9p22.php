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
        <input type="text" class="form-control input-sm" id="c9p23" name="c9p23" style="display:none"   placeholder="" value="<?php echo($arrayrespuestas['ec9p23']); ?>">
        
        <!--fin para imprimir el idintegrante y llevarlo-->
<hr>
        <form class="form-group" name="formulario" id="formulario">

            <!--inicio radio una sola seleccion-->
            <div class="row">
            <div id="c9p22div" name="c9p22div" <?php if($arrayrespuestas['ec9p22']==''||$arrayrespuestas['ec9p22']=='98'){echo('class="form-group col-md-12 form-group-sm has-error"');}else{echo('class="form-group col-md-12 form-group-sm"');}?>>   
                <label class="control-label">15. En ese segundo trabajo es: (Lea las alternativas) (Unica Respuesta)
                    <button type="button" id="vayuda" name="vayuda" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModal">
                        <span class="glyphicon glyphicon-question-sign" aria-hidden="true"></span> Ayuda
                    </button>
                </label>
                <div class="radio">
                    <label><!--en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="c9p22" id="c9p22" onclick="colocaropcionc9p22('c9p22o1','valorc9p22','c9p22div');" value="c9p22o1" <?php if($arrayrespuestas['ec9p22']=='c9p22o1'){echo('checked');}?>>
                        Obrero o Empleado de Empresa Particular
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="c9p22" id="c9p22" onclick="colocaropcionc9p22('c9p22o2','valorc9p22','c9p22div');" value="c9p22o2" <?php if($arrayrespuestas['ec9p22']=='c9p22o2'){echo('checked');}?>>
                        Obrero o Empleado del Gobierno
                    </label>             
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="c9p22" id="c9p22" onclick="colocaropcionc9p22('c9p22o3','valorc9p22','c9p22div');" value="c9p22o3" <?php if($arrayrespuestas['ec9p22']=='c9p22o3'){echo('checked');}?>>
                        Empleado Doméstico
                    </label>             
                </div>
                 <div class="radio">
                    <label>
                        <input type="radio" name="c9p22" id="c9p22" onclick="colocaropcionc9p22('c9p22o4','valorc9p22','c9p22div');" value="c9p22o4" <?php if($arrayrespuestas['ec9p22']=='c9p22o4'){echo('checked');}?>>
                        Trabajador por Cuenta Propia
                    </label>             
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="c9p22" id="c9p22" onclick="colocaropcionc9p22('c9p22o5','valorc9p22','c9p22div');" value="c9p22o5" <?php if($arrayrespuestas['ec9p22']=='c9p22o5'){echo('checked');}?>>
                       Patrono o Empleador
                    </label>             
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="c9p22" id="c9p22" onclick="colocaropcionc9p22('c9p22o6','valorc9p22','c9p22div');" value="c9p22o6" <?php if($arrayrespuestas['ec9p22']=='c9p22o6'){echo('checked');}?>>
                       Trabajador Familiar sin remuneración
                    </label>             
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="c9p22" id="c9p22" onclick="colocaropcionc9p22('c9p22o7','valorc9p22','c9p22div');" value="c9p22o7" <?php if($arrayrespuestas['ec9p22']=='c9p22o7'){echo('checked');}?>>
                       Trabajador sin remuneración
                    </label>             
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="c9p22" id="c9p22" onclick="colocaropcionc9p22('c9p22o8','valorc9p22','c9p22div');" value="c9p22o8" <?php if($arrayrespuestas['ec9p22']=='c9p22o8'){echo('checked');}?>>
                       Jornalero o Peón
                    </label>             
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="c9p22" id="c9p22" onclick="colocaropcionc9p22('c9p22o9','valorc9p22','c9p22div');" value="c9p22o9" <?php if($arrayrespuestas['ec9p22']=='c9p22o9'){echo('checked');}?>>
                       Otro
                    </label>             
                </div>
                
        <div class="row" id="c9p22cualmostrar" name="c9p22cualmostrar" <?php if($arrayrespuestas['ec9p22cual']== ''||$arrayrespuestas['ec9p22cual']== '98'){echo('style="display:none"');}else{echo('');}  ?> >
        <div  id="c9p22cualdiv" name="c9p22cualdiv" class="form-group col-md-8">
                       <label class="control-label">Cual?</label>
                       <input type="text" class="form-control text-uppercase" id="c9p22cual" onkeypress="return soloLetras(event)"  onchange="validarcampotexcuadros('c9p22cualdiv','c9p22cual','1')" name="c9p22cual"   placeholder="Cual?" value="<?php if($arrayrespuestas['ec9p22cual'] == ''){echo('');}else{ echo($arrayrespuestas['ec9p22cual']);} ?>">
        </div>
        </div>
            <input type="text" class="form-control" id="valorc9p22" name="valorc9p22" style="display:none" placeholder="Text input" value="<?php echo($arrayrespuestas['ec9p22']); ?>">
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
            <?php if($arrayrespuestas['ec9p22']=="")
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
                          data: {vfolio : $('#folio').val(),vidintegrante : $('#idintegrante').val(), vvalorc9p22 : $('#valorc9p22').val(),vvalorc9p22cual : $('#c9p22cual').val()},    
                          dataType: "html",
                          success : function(obj){                      
                          botonguardar();
                          saltop1();
                          }
                        });                    
        });

        
        $("#actualizar").click(function ()
        {
                        $.ajax({
                          url: "fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),vidintegrante : $('#idintegrante').val(), vvalorc9p22 : $('#valorc9p22').val(),vvalorc9p22cual : $('#c9p22cual').val()},    
                          dataType: "html",
                          success : function(obj){                      
                          botonguardar();
                          saltop1();
                          }
                        });                    
        });
        

        $("#siguiente").click(function ()
        {
            if($('#valorc9p22').val() === 'c9p22o6'||$('#valorc9p22').val() === 'c9p22o7')
            {
         location.href = "../c_c9p26/fc_c9p26?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
         }
         else
         {
          location.href = "../c_c9p23/fc_c9p23?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                       
         }
        });
        $("#anterior").click(function ()
        {
         botonanterior();
          
       location.href = "../c_c9p21/fc_c9p21?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
         
        });
//              
//        $("#anterior").click(function ()
//        {
//         botonanterior();
//         location.href = "../c_c5p11/fc_c5p11?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";     
//        //location.href = "../c_capitulosintegrantes/fc_capitulosintegrantes?idintegrante=" + $('#idintegrante').val()+ "&idintegrante="+"&idintegrante=0";                    
//        });

//para cargar variables capitulo, pregunta,encuestador,vivienda,barra



cargardatosgenerales('<?php echo($arraydatosgenerales['ecapitulo']); ?>','Pregunta 15 de 16','<?php echo($arraydatosgenerales['enomcoges']); ?>','<?php echo($arraydatosgenerales['enombreintegrante']." "." - "." "."Sexo:"." ".$arraydatosgenerales['esexointegrante']."   "."  -  "."   "."Edad:"."   ".$arraydatosgenerales['eedadintegrante']); ?>','90');
//control del boton ayuda
botonayuda();

});
/* 
Funciones para validar campos y gaurdar
 */
function saltop1()
{
    if($('#valorc9p22').val() === 'c9p22o6'||$('#valorc9p22').val() === 'c9p22o7')
         {                
                         $.ajax({
                          url: "../c_c9p23/fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),vidintegrante : $('#idintegrante').val(), vvalorc9p23 :'98'},    
                          dataType: "html",
                          success : function(obj)
                          {
                         //location.href = "../c_c9p/fc_c8p7?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
                          }
                         });
                         
                         $.ajax({
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
                         location.href = "../c_c9p22/fc_c9p22?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
                          }
                         });
   
        }
        
         else if (($('#valorc9p22').val() !== 'c9p22o6' && $('#c9p23').val() === '98' || $('#valorc9p22').val() !== 'c9p22o7' && $('#c9p23').val() === '98'))
                       {               
                          $.ajax({
                          url: "../c_c9p23/fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),vidintegrante : $('#idintegrante').val(), vvalorc9p23 :''},    
                          dataType: "html",
                          success : function(obj)
                          {
                         //location.href = "../c_c9p/fc_c8p7?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
                          }
                         });
                         
                         $.ajax({
                          url: "../c_c9p24/fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),vidintegrante : $('#idintegrante').val(), vvalorc9p24 :''},    
                          dataType: "html",
                          success : function(obj)
                          {
                         //location.href = "../c_c9p7/fc_c9p7?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
                          }
                         });
                         $.ajax({
                          url: "../c_c9p25/fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),vidintegrante : $('#idintegrante').val(), vvalorc9p25 :''},    
                          dataType: "html",
                          success : function(obj)
                          {
                         location.href = "../c_c9p22/fc_c9p22?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
                          }
                         });
                         }
         else
               {
                location.href = "../c_c9p22/fc_c9p22?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
               }




}
//habilitar boton guardar
function validarguardarc9p22()
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
function validarbolitasytextoc9p22(div,campo)
{ //alert(div + ' juanpis ' + campo);
   if(($('#'+ campo).val() == '') || ($('#'+ campo).val() == '0'))
   { 
       $('#' + div).addClass(' has-error');
   }
   else
   { 
       $('#' + div).removeClass('has-error');
   }
    validarguardarc9p22();
}
// colocar opcion para todos
function colocaropcionc9p22(opcion,campoval,divcampo)
{
    //alert(opcion);
    $('#' + campoval).val(opcion);
    
    if(opcion == 'c9p22o9')
        {
           // alert('aca lo muestra');
            $('#c9p22cualmostrar').show(1000);
            $('#c9p22cual').val('');
            $('#c9p22cualdiv').addClass(' has-error');            
        }
        else
        {
            //alert('aca lo oculta');
            $('#c9p22cualmostrar').hide(1000);
            $('#c9p22cual').val('98');
            $('#c9p22cualdiv').removeClass(' has-error');            
        }
    validarbolitasytextoc9p22(divcampo,campoval);
}
//de aca para arriba es logica de bolas y textos
function validarcampotexcuadros(div,campo,ncampos)
{
    validarbolitasytexto(div,campo);
    validarcuadrosc9p22(div,ncampos);
}


</script>
</html>