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
        <div id="c9p14intermediadiv" name="c9p14intermediadiv" class="form-group col-md-12 form-group-sm">
        <div id="c9p14intermediao0div" class="has-error">
        <label class="control-label">7. ¿En los últimos 12 meses recibió? (Selección Múltiple)
                    
            <button type="button" id="vayuda" name="vayuda" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModal">
                        <span class="glyphicon glyphicon-question-sign" aria-hidden="true"></span> Ayuda
                    </button>       
        </label>
        </div>
            
        <div id="c9p14intermediao1div" <?php if($arrayrespuestas['ec9p14intermediao1']=='' || $arrayrespuestas['ec9p14intermediao1']=='NO' || $arrayrespuestas['ec9p14intermediao1']=='98'){echo('class=" has-error"');}?>>
        <div class="checkbox">
            <label> <!--en este caso se manda a la fincion javascript el nombre del campo-->
              <input type="checkbox" name="c9p14intermediao1" id="c9p14intermediao1" onclick="cambiarsinoc9p14intermedia('SI','c9p14intermediao1','c9p14intermediao1div','c9p14intermediadiv',4);" <?php if($arrayrespuestas['ec9p14intermediao1']=='SI'){echo('value="SI" checked');}else{echo('value="NO" ');}?>>
            a. prima de servicios, navidad, vacaciones
            </label>
        </div>
        </div>
            
        <div id="c9p14intermediao2div" <?php if($arrayrespuestas['ec9p14intermediao2']=='' || $arrayrespuestas['ec9p14intermediao2']=='NO' || $arrayrespuestas['ec9p14intermediao2']=='98'){echo('class=" has-error"');}?>>
        <div class="checkbox">
            <label> <!--en este caso se manda a la fincion javascript el nombre del campo-->
              <input type="checkbox" name="c9p14intermediao2" id="c9p14intermediao2" onclick="cambiarsinoc9p14intermedia('SI','c9p14intermediao2','c9p14intermediao2div','c9p14intermediadiv',4);" <?php if($arrayrespuestas['ec9p14intermediao2']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            b. viáticos permanentes y/o bonificaciones anuales
            </label>
        </div>
        </div> 
            
        <div id="c9p14intermediao3div" <?php if($arrayrespuestas['ec9p14intermediao3']=='' || $arrayrespuestas['ec9p14intermediao3']=='NO' || $arrayrespuestas['ec9p14intermediao3']=='98'){echo('class=" has-error"');}?>>
        <div class="checkbox">
            <label> <!--en este caso se manda a la fincion javascript el nombre del campo-->
              <input type="checkbox" name="c9p14intermediao3" id="c9p14intermediao3" onclick="cambiarsinoc9p14intermedia('SI','c9p14intermediao3','c9p14intermediao3div','c9p14intermediadiv',4);" <?php if($arrayrespuestas['ec9p14intermediao3']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
             c. pagos por accidentes de trabajo
            </label>
        </div>
        </div> 
            
        <div id="c9p14intermediao4div" <?php if($arrayrespuestas['ec9p14intermediao4']=='' || $arrayrespuestas['ec9p14intermediao4']=='NO' || $arrayrespuestas['ec9p14intermediao4']=='98'){echo('class=" has-error"');}?>>
        <div class="checkbox">
            <label> <!--en este caso se manda a la fincion javascript el nombre del campo-->
              <input type="checkbox" name="c9p14intermediao4" id="c9p14intermediao4" onclick="cambiarsinoc9p14intermedia('SI','c9p14intermediao4','c9p14intermediao4div','c9p14intermediadiv',4);" <?php if($arrayrespuestas['ec9p14intermediao4']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
             d. No recibió
            </label>
        </div>
        </div>     
            <br>
            
        <div class="row" id="c9p14intermediacuantomostrar" name="c9p14intermediacuantomostrar" <?php if($arrayrespuestas['ec9p14intermediao4']=='SI'|| $arrayrespuestas['ec9p14intermediacuanto']==''){echo('style="display:none"');}?> >
        <div  id="c9p14intermediacuantodiv" name="c9p14intermediacuantodiv" class="form-group col-md-3">
        <label class="control-label">En Cuanto estima lo que recibio?</label>
        <input type="text" class="form-control text-uppercase" id="c9p14intermediacuanto" onkeypress="return soloNumeros(event)"  onchange="validarcampotexcuadros('c9p14intermediacuantodiv','c9p14intermediacuanto','4')" name="c9p14intermediacuanto" value="<?php if($arrayrespuestas['ec9p14intermediacuanto'] == ''){}else{ echo($arrayrespuestas['ec9p14intermediacuanto']);} ?>">
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
            <?php if($arrayrespuestas['ec9p14intermediao1']=="" & $arrayrespuestas['ec9p14intermediao2']=="" & $arrayrespuestas['ec9p14intermediao3']==""& $arrayrespuestas['ec9p14intermediao4']=="")
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
function saltarc9p14intermedia()
{
    
                      if($('#edad').val() > 14 && $('#edad').val()  < 18 )
                      {
                         
                         $.ajax({
                          url: "../c_c9p16intermediaLCV1/fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),vidintegrante : $('#idintegrante').val(),
                              vvalorc9p16intermedia : '98'},
                          dataType: "html",
                          success : function(obj)
                          {
                         //location.href = "../c_c9p7/fc_c9p7?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";      
                         
                          $.ajax({
                          url: "../c_c9p19intermediaLCV1/fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),vidintegrante : $('#idintegrante').val(),
                              vvalorc9p19intermedia : ''},
                          dataType: "html",
                          success : function(obj)
                          {
                         //location.href = "../c_c9p/fc_c8p7?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";   
                          botonguardar();
                          }
                         });
                         
                          }
                         });
                         
                         }
                         
                         else
                         {  
                         
                         $.ajax({
                          url: "../c_c9p16intermediaLCV1/fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),vidintegrante : $('#idintegrante').val(),
                              vvalorc9p16intermedia : '98'},
                          dataType: "html",
                          success : function(obj)
                          {
                         //location.href = "../c_c9p7/fc_c9p7?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";  
                         
                          $.ajax({
                          url: "../c_c9p19intermediaLCV1/fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),vidintegrante : $('#idintegrante').val(),
                              vvalorc9p19intermedia : '98'},
                          dataType: "html",
                          success : function(obj)
                          {
                         //location.href = "../c_c9p/fc_c8p7?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";  
                          botonguardar();
                         
                          }
                         });
                         
                          }
                         });
                         
                        
                         
                        
                         
                         }       
 }                              
                     
    
    
    
    
    
    $(document).ready(function()
    {

        $("#guardar").click(function ()
        {
                        $.ajax({
                          url: "fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),
                          vidintegrante : $('#idintegrante').val(),
                          vc9p14intermediao1 : $('#c9p14intermediao1').val(),          
                          vc9p14intermediao2 : $('#c9p14intermediao2').val(),
                          vc9p14intermediao3 : $('#c9p14intermediao3').val(),
                          vc9p14intermediao4 : $('#c9p14intermediao4').val(),                          
                          vc9p14intermediacuanto : $('#c9p14intermediacuanto').val()},                      
                          dataType: "html",
                          success : function(obj){                      
                         
                          saltarc9p14intermedia();
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
                          vc9p14intermediao1 : $('#c9p14intermediao1').val(),          
                          vc9p14intermediao2 : $('#c9p14intermediao2').val(),
                          vc9p14intermediao3 : $('#c9p14intermediao3').val(),
                          vc9p14intermediao4 : $('#c9p14intermediao4').val(),                          
                          vc9p14intermediacuanto : $('#c9p14intermediacuanto').val()},                      
                          dataType: "html",
                          success : function(obj){                      
                         
                          saltarc9p14intermedia();
                          }
                        });                    
        });
        
         $("#capitulos").click(function ()
        {
            
            location.href = "../c_capitulosintegranteintermediaLCV1/fc_capitulosintegranteintermediaLCV1?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() ;                    
         
            });
        

        $("#siguiente").click(function ()
        {
         if($('#edad').val() > 14 && $('#edad').val() <18 )
         
        {
          location.href = "../c_c9p19intermediaLCV1/fc_c9p19intermediaLCV1?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
         
            }
            else
            {
         
          location.href = "../c_c9p20intermediaLCV1/fc_c9p20intermediaLCV1?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
         
            } 
      
        });

              
        $("#anterior").click(function ()
        {
         botonanterior();
         location.href = "../c_c9p13intermediaLCV1/fc_c9p13intermediaLCV1?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
        });

//para cargar variables capitulo, pregunta,encuestador,vivienda,barra



cargardatosgenerales('<?php echo($arraydatosgenerales['ecapitulo']); ?>','7 de 12 subcapitulo 9M','<?php echo($arraydatosgenerales['enomcoges']); ?>','<?php echo($arraydatosgenerales['enombreintegrante']." "." - "." "."Sexo:"." ".$arraydatosgenerales['esexointegrante']."   "."  -  "."   "."Edad:"."   ".$arraydatosgenerales['eedadintegrante']); ?>','46');
//control del boton ayuda
botonayuda();

});
//dea aca para abajo es logica de cuadros
function cambiarsinoc9p14intermedia(opcion,campoval,divcampo,divcompleto,campos)
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
    
    if(campoval == 'c9p14intermediao1' || campoval == 'c9p14intermediao2' || campoval == 'c9p14intermediao3' )
            {  
                //alert('aca lo muestra');
                $('#c9p14intermediacuantomostrar').show();
                $('#c9p14intermediacuanto').val('');
                $('#c9p14intermediacuantodiv').addClass('has-error');            

            }
            else
            {
                //alert('aca lo oculta');
                $('#c9p14intermediacuantomostrar').hide();
                $('#c9p14intermediacuanto').val('98');
                $('#c9p14intermediacuantodiv').removeClass(' has-error');
            }         
     
        if(campoval == 'c9p14intermediao4')
           {
            if($('#' + campoval).val() == 'SI')
            {
              $('#c9p14intermediao1').prop('checked' , false);
              $('#c9p14intermediao1div').addClass(' has-error');
              $('#c9p14intermediao2').prop('checked' , false);
              $('#c9p14intermediao2div').addClass(' has-error');
              $('#c9p14intermediao3').prop('checked' , false);
              $('#c9p14intermediao3div').addClass(' has-error');
                           
              
              $('#c9p14intermediacuantomostrar').hide();
              $('#c9p14intermediacuanto').val('98');             
                            
              $('#c9p14intermediao1').val('NO');
              $('#c9p14intermediao2').val('NO');
              $('#c9p14intermediao3').val('NO');
                       
              }
}
        else
      {
          $('#c9p14intermediao4').prop('checked' , false); 
          $('#c9p14intermediao4').val('NO');
          $('#c9p14intermediao4div').addClass(' has-error');
      }
      
        validarcuadrosc9p14intermedia(divcompleto,campos);
}

function validarcuadrosc9p14intermedia(divcuadro,ncampos)
{
    //alert($('#' + divcuadro).find('input').prop('checked', true).length);
    //alert($('.has-error').length);
    if ($('#c9p14intermediacuanto').val() != '')
    {
    if($('.has-error').length == (ncampos + 1))
    {   //alert('soniguales');
       $('#guardar').prop('disabled', true);
       $('#actualizar').prop('disabled', true);
       $('#cancelar').prop('disabled', true);
       $('#anterior').prop('disabled', false);
       $('#siguiente').prop('disabled', true);
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
}

    
function validarcampotexcuadros(div,campo,ncampos)
{
    validarbolitasytexto(div,campo);

    validarcuadrosc9p14intermedia(div,ncampos);
}

</script>
</html>