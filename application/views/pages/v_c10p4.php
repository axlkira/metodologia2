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
       <input type="text" class="form-control" id="valorc10p2" name="valorc10p2" style="display:none" placeholder="Text input" value="<?php echo($arrayrespuestas['ec10p2']); ?>">
       <input type="text" class="form-control input-sm" id="victimaconflicto" name="victimaconflicto" style="display:none" placeholder="" value="<?php echo($arrayrespuestas['ec4p11o1']); ?>">
       <input type="text" class="form-control" id="c10p5o1" name="c10p5o1"  placeholder="Text input" style="display:none" value="<?php echo($arrayrespuestas['ec10p5o1']); ?>">
       <input type="text" class="form-control" id="c10p6o1" name="c10p6o1"  placeholder="Text input" style="display:none" value="<?php echo($arrayrespuestas['ec10p6o1']); ?>">
       <!--fin para imprimir el idintegrante y llevarlo-->
        
<hr>
        <form class="form-group" name="formulario" id="formulario">

            <!--inicio radio una sola seleccion-->
            <div class="row">
            <div id="c10p4div" name="c10p4div" <?php if($arrayrespuestas['ec10p4']==''){echo('class="form-group col-md-12 form-group-sm has-error"');}else{echo('class="form-group col-md-12 form-group-sm"');}?>>   
                <label class="control-label">4. En los ÚLTIMOS 12 MESES,  ¿.…. ha necesitado de los servicios de justicia para resolver algún problema o conflicto?
                    <button type="button" id="vayuda" name="vayuda" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModal">
                        <span class="glyphicon glyphicon-question-sign" aria-hidden="true"></span> Ayuda
                    </button>
                </label>
                <div class="radio">
                    <label><!--en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="c10p4" id="c10p4" onclick="colocaropcionc10p4('1','valorc10p4','c10p4div');" value="1" <?php if($arrayrespuestas['ec10p4']=='1'){echo('checked');}?>>
                        Si
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="c10p4" id="c10p4" onclick="colocaropcionc10p4('2','valorc10p4','c10p4div');" value="2" <?php if($arrayrespuestas['ec10p4']=='2'){echo('checked');}?>>
                        No
                    </label>             
                </div>               
                <input type="text" class="form-control" id="valorc10p4" name="valorc10p4" style="display:none" placeholder="Text input" value="<?php echo($arrayrespuestas['ec10p4']); ?>">
            </div>
            </div> 
            <!--fin radio una sola seleccion-->
            <div class="row" id="c10p4cualmostrar" name="c10p4cualmostrar" <?php if($arrayrespuestas['ec10p4cual']== ''||$arrayrespuestas['ec10p4cual']== '98'){echo('style="display:none"');}else{echo('');}  ?> >
            <div  id="c10p4cualdiv" name="c10p4cualdiv" class="form-group col-md-3">
                       <label class="control-label">Cuántas veces</label>
                       <input type="text" class="form-control text-uppercase" id="c10p4cual" onkeypress="return soloNumeros(event)" maxlength="2" onchange="validarcampotexcuadros('c10p4cualdiv','c10p4cual','1')" name="c10p4cual"   placeholder="Cuántas veces" value="<?php if($arrayrespuestas['ec10p4cual'] == ''){echo('');}else{ echo($arrayrespuestas['ec10p4cual']);} ?>">
            </div>
            </div>
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
            <?php if($arrayrespuestas['ec10p4']=="")
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
                          vvalorc10p4 : $('#valorc10p4').val(),
                          vc10p4cual : $('#c10p4cual').val()},    
                          dataType: "html",
                          success : function(obj){                      
                          botonguardar();
                          saltop4();
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
                          vvalorc10p4 : $('#valorc10p4').val(),
                          vc10p4cual : $('#c10p4cual').val()},    
                          dataType: "html",
                          success : function(obj){                      
                          botonguardar();
                          saltop4();
                          }
                        });                    
        });
        

        $("#siguiente").click(function ()
        {
         botonsiguiente();
        if (($('#victimaconflicto').val() == '2') && ($('#valorc10p4').val()== '2')) 
        {
         location.href = "../c_capitulosintegrante/fc_capitulosintegrante?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val();                       
        }
        else if (($('#victimaconflicto').val() == '2') && ($('#valorc10p4').val()== '1')) 
        {
         location.href = "../c_c10p5/fc_c10p5?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val();      
        }
        else if (($('#victimaconflicto').val() == '1') && ($('#valorc10p4').val()== '2')) 
        {
         location.href = "../c_c10p6/fc_c10p6?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val();      
        }
         else if (($('#victimaconflicto').val() == '1') && ($('#valorc10p4').val()== '1')) 
         {
          location.href = "../c_c10p5/fc_c10p5?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val();       
         }
        
        });
              
        $("#anterior").click(function ()
        {
         botonanterior();
         if ($('#valorc10p2').val()== '2')
         {
         location.href = "../c_c10p2/fc_c10p2?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val();    
         }
         else
         {
         location.href = "../c_c10p3/fc_c10p3?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val();    
         }
        });
//para cargar variables capitulo, pregunta,encuestador,vivienda,barra
cargardatosgenerales('<?php echo($arraydatosgenerales['ecapitulo']); ?>','Pregunta 4 de 6','<?php echo($arraydatosgenerales['enomcoges']); ?>','<?php echo($arraydatosgenerales['enombreintegrante']." "." - "." "."Sexo:"." ".$arraydatosgenerales['esexointegrante']."   "."  -  "."   "."Edad:"."   ".$arraydatosgenerales['eedadintegrante']); ?>','70');
//control del boton ayuda
botonayuda();

});
/* 
Funciones para validar campos y gaurdar
 */
function saltop4()
{

if (($('#victimaconflicto').val() == '2') && ($('#valorc10p4').val()== '2')) 
        {
         //alert('2 y 2');
            $.ajax({
                          url: "../c_c10p5/fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),
                          vidintegrante : $('#idintegrante').val(),
                           vc10p5o1 : '98',          
                          vc10p5o2 : '98',
                          vc10p5o3 : '98',
                          vc10p5o4 : '98',
                          vc10p5o5 : '98',
                          vc10p5o6 : '98',
                          vc10p5o7 : '98',
                          vc10p5o8 : '98',
                          vc10p5o9 : '98',
                          vc10p5o10 : '98',
                          vc10p5o11 : '98',
                          vc10p5o12 : '98',
                          vc10p5o13 : '98',
                          vc10p5o14 : '98',
                          vc10p5o15 : '98',
                          vc10p5o16 : '98',
                          vc10p5o17 : '98',
                          vc10p5o18 : '98',
                          vc10p5o19 : '98',
                          vc10p5o20 : '98',
                          vc10p5o21 : '98',
                          vc10p5o22 : '98',
                          vc10p5o23 : '98',
                          vinstitucion1 : '98',
                          vinstitucion2 : '98',
                          vc10p5cual : '98'},    
                          dataType: "html",
                          success : function(obj)
                          {                      
                         //location.href = "../c_c10p4/fc_c10p4?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val();    
                          }
                        });
                        
                        
                         $.ajax({
                          url: "../c_c10p6/fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),
                          vidintegrante : $('#idintegrante').val(),
                          vc10p6o1 :'98',          
                          vc10p6o2 : '98',
                          vc10p6o3 : '98',
                          vc10p6o4 : '98',
                          vc10p6o5 : '98',
                          vc10p6o6 : '98',
                          vc10p6o7 : '98',
                          vc10p6o8 : '98',
                          vc10p6o9 : '98',
                          vc10p6o10 : '98',
                          vc10p6o11 : '98',
                          vc10p6o12 : '98',
                          vc10p6o13 : '98',
                          vc10p6o14 : '98',
                          vc10p6o15 : '98',
                          vc10p6o16 : '98',
                          vc10p6o17 : '98',
                          vc10p6cual : '98'},
                      
                          dataType: "html",
                          success : function(obj)
                          {
                          //location.href = "../c_capitulosintegrante/fc_capitulosintegrante?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val();                    
                          }
                        }); 
        }        
        else if (($('#victimaconflicto').val() == '2') && ($('#valorc10p4').val()== '1')) 
        {
           //               alert('2 y 1');
                          $.ajax({     
                          url: "../c_c10p5/fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),
                          vidintegrante : $('#idintegrante').val(),
                           vc10p5o1 : '',          
                          vc10p5o2 : '',
                          vc10p5o3 : '',
                          vc10p5o4 : '',
                          vc10p5o5 : '',
                          vc10p5o6 : '',
                          vc10p5o7 : '',
                          vc10p5o8 : '',
                          vc10p5o9 : '',
                          vc10p5o10 : '',
                          vc10p5o11 : '',
                          vc10p5o12 : '',
                          vc10p5o13 : '',
                          vc10p5o14 : '',
                          vc10p5o15 : '',
                          vc10p5o16 : '',
                          vc10p5o17 : '',
                          vc10p5o18 : '',
                          vc10p5o19 : '',
                          vc10p5o20 : '',
                          vc10p5o21 : '',
                          vc10p5o22 : '',
                          vc10p5o23 : '',
                          vinstitucion1 : '',
                          vinstitucion2 : '',
                          vc10p5cual : ''},    
                          dataType: "html",
                          success : function(obj){                      
                          
                          }
                        });
                        
                        
                         $.ajax({
                          url: "../c_c10p6/fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),
                          vidintegrante : $('#idintegrante').val(),
                          vc10p6o1 :'98',          
                          vc10p6o2 : '98',
                          vc10p6o3 : '98',
                          vc10p6o4 : '98',
                          vc10p6o5 : '98',
                          vc10p6o6 : '98',
                          vc10p6o7 : '98',
                          vc10p6o8 : '98',
                          vc10p6o9 : '98',
                          vc10p6o10 : '98',
                          vc10p6o11 : '98',
                          vc10p6o12 : '98',
                          vc10p6o13 : '98',
                          vc10p6o14 : '98',
                          vc10p6o15 : '98',
                          vc10p6o16 : '98',
                          vc10p6o17 : '98',
                          vc10p6cual : '98'},
                      
                          dataType: "html",
                          success : function(obj){                      
                          
                          //location.href = "../c_c10p5/fc_c10p5?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val();    
                          }
                        }); 
                    }
                   
                    else if (($('#victimaconflicto').val() == '1') && ($('#valorc10p4').val()== '2')) 
        {
             //             alert('1 y 2');
                          $.ajax({     
                          url: "../c_c10p5/fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),
                          vidintegrante : $('#idintegrante').val(),
                           vc10p5o1 : '98',          
                          vc10p5o2 : '98',
                          vc10p5o3 : '98',
                          vc10p5o4 : '98',
                          vc10p5o5 : '98',
                          vc10p5o6 : '98',
                          vc10p5o7 : '98',
                          vc10p5o8 : '98',
                          vc10p5o9 : '98',
                          vc10p5o10 : '98',
                          vc10p5o11 : '98',
                          vc10p5o12 : '98',
                          vc10p5o13 : '98',
                          vc10p5o14 : '98',
                          vc10p5o15 : '98',
                          vc10p5o16 : '98',
                          vc10p5o17 : '98',
                          vc10p5o18 : '98',
                          vc10p5o19 : '98',
                          vc10p5o20 : '98',
                          vc10p5o21 : '98',
                          vc10p5o22 : '98',
                          vc10p5o23 : '98',
                          vinstitucion1 : '98',
                          vinstitucion2 : '98',
                          vc10p5cual : '98'},    
                          dataType: "html",
                          success : function(obj){                      
                          
                          }
                        });
                        $.ajax({
                          url: "../c_c10p6/fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),
                          vidintegrante : $('#idintegrante').val(),
                          vc10p6o1 :'',          
                          vc10p6o2 : '',
                          vc10p6o3 : '',
                          vc10p6o4 : '',
                          vc10p6o5 : '',
                          vc10p6o6 : '',
                          vc10p6o7 : '',
                          vc10p6o8 : '',
                          vc10p6o9 : '',
                          vc10p6o10 : '',
                          vc10p6o11 : '',
                          vc10p6o12 : '',
                          vc10p6o13 : '',
                          vc10p6o14 : '',
                          vc10p6o15 : '',
                          vc10p6o16 : '',
                          vc10p6o17 : '',
                          vc10p6cual : ''},
                      
                          dataType: "html",
                          success : function(obj){                      
                          
                         // location.href = "../c_c10p6/fc_c10p6?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val();    
                          }
                        });
                         
                    }  
                    else if (($('#victimaconflicto').val() == '1') && ($('#valorc10p4').val()== '1')) 
        {
               //           alert('1 y 1');
                          $.ajax({
                          url: "../c_c10p5/fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),
                          vidintegrante : $('#idintegrante').val(),
                           vc10p5o1 : '',          
                          vc10p5o2 : '',
                          vc10p5o3 : '',
                          vc10p5o4 : '',
                          vc10p5o5 : '',
                          vc10p5o6 : '',
                          vc10p5o7 : '',
                          vc10p5o8 : '',
                          vc10p5o9 : '',
                          vc10p5o10 : '',
                          vc10p5o11 : '',
                          vc10p5o12 : '',
                          vc10p5o13 : '',
                          vc10p5o14 : '',
                          vc10p5o15 : '',
                          vc10p5o16 : '',
                          vc10p5o17 : '',
                          vc10p5o18 : '',
                          vc10p5o19 : '',
                          vc10p5o20 : '',
                          vc10p5o21 : '',
                          vc10p5o22 : '',
                          vc10p5o23 : '',
                          vinstitucion1 : '',
                          vinstitucion2 : '',
                          vc10p5cual : ''},    
                          dataType: "html",
                          success : function(obj){                      
                          
                          }
                        });
                        
                        
                         $.ajax({
                          url: "../c_c10p6/fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),
                          vidintegrante : $('#idintegrante').val(),
                          vc10p6o1 :'',          
                          vc10p6o2 : '',
                          vc10p6o3 : '',
                          vc10p6o4 : '',
                          vc10p6o5 : '',
                          vc10p6o6 : '',
                          vc10p6o7 : '',
                          vc10p6o8 : '',
                          vc10p6o9 : '',
                          vc10p6o10 : '',
                          vc10p6o11 : '',
                          vc10p6o12 : '',
                          vc10p6o13 : '',
                          vc10p6o14 : '',
                          vc10p6o15 : '',
                          vc10p6o16 : '',
                          vc10p6o17 : '',
                          vc10p6cual : ''},
                      
                          dataType: "html",
                          success : function(obj){                      
                          
                          //location.href = "../c_c10p5/fc_c10p5?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val();    
                          }
                        }); 
                    }
                    else
                    {
                    }
}
//habilitar boton guardar
function validarguardarc10p4()
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
function validarbolitasytextoc10p4(div,campo)
{ //alert(div + ' juanpis ' + campo);
   if(($('#'+ campo).val() == '') || ($('#'+ campo).val() == '0'))
   { 
       $('#' + div).addClass(' has-error');
   }
   else
   { 
       $('#' + div).removeClass('has-error');
   }
    validarguardarc10p4();
}
// colocar opcion para todos
function colocaropcionc10p4(opcion,campoval,divcampo)
{
    //alert(opcion);
    $('#' + campoval).val(opcion);
    
    if(opcion == '1')
        {
           // alert('aca lo muestra');
            $('#c10p4cualmostrar').show(1000);
            $('#c10p4cual').val('');
            $('#c10p4cualdiv').addClass(' has-error');            
        }
        else
        {
            //alert('aca lo oculta');
            $('#c10p4cualmostrar').hide(1000);
            $('#c10p4cual').val('98');
            $('#c10p4cualdiv').removeClass(' has-error');            

        }
    validarbolitasytextoc10p4(divcampo,campoval);
}
//de aca para arriba es logica de bolas y textos
function validarcampotexcuadros(div,campo,ncampos)
{
    validarbolitasytexto(div,campo);

    validarcuadrosc10p4(div,ncampos);
}

</script>
</html>