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
        <div id="c9p12intermediadiv" name="c9p12intermediadiv" class="form-group col-md-12 form-group-sm">
        <div id="c9p12intermediao0div" class="has-error">
        <label class="control-label">5. Además del salario en dinero, ¿el mes pasado recibió alguna de las siguientes modalidades como parte de pago por su trabajo?  (Seleccion Multiple)
                    
            <button type="button" id="vayuda" name="vayuda" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModal">
                        <span class="glyphicon glyphicon-question-sign" aria-hidden="true"></span> Ayuda
                    </button>       
        </label>
        </div>
            
        <div id="c9p12intermediao1div" <?php if($arrayrespuestas['ec9p12intermediao1']=='' || $arrayrespuestas['ec9p12intermediao1']=='NO' || $arrayrespuestas['ec9p12intermediao1']=='98'){echo('class=" has-error"');}?>>
        <div class="checkbox">
            <label> <!--en este caso se manda a la fincion javascript el nombre del campo-->
              <input type="checkbox" name="c9p12intermediao1" id="c9p12intermediao1" onclick="cambiarsinoc9p12intermedia('SI','c9p12intermediao1','c9p12intermediao1div','c9p12intermediadiv',4);" <?php if($arrayrespuestas['ec9p12intermediao1']=='SI'){echo('value="SI" checked');}else{echo('value="NO" ');}?>>
            Alimentacion
            </label>
        </div>
        </div>
            
        <div id="c9p12intermediao2div" <?php if($arrayrespuestas['ec9p12intermediao2']=='' || $arrayrespuestas['ec9p12intermediao2']=='NO' || $arrayrespuestas['ec9p12intermediao2']=='98'){echo('class=" has-error"');}?>>
        <div class="checkbox">
            <label> <!--en este caso se manda a la fincion javascript el nombre del campo-->
              <input type="checkbox" name="c9p12intermediao2" id="c9p12intermediao2" onclick="cambiarsinoc9p12intermedia('SI','c9p12intermediao2','c9p12intermediao2div','c9p12intermediadiv',4);" <?php if($arrayrespuestas['ec9p12intermediao2']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            Vivienda
            </label>
        </div>
        </div> 
            
        <div id="c9p12intermediao3div" <?php if($arrayrespuestas['ec9p12intermediao3']=='' || $arrayrespuestas['ec9p12intermediao3']=='NO' || $arrayrespuestas['ec9p12intermediao3']=='98'){echo('class=" has-error"');}?>>
        <div class="checkbox">
            <label> <!--en este caso se manda a la fincion javascript el nombre del campo-->
              <input type="checkbox" name="c9p12intermediao3" id="c9p12intermediao3" onclick="cambiarsinoc9p12intermedia('SI','c9p12intermediao3','c9p12intermediao3div','c9p12intermediadiv',4);" <?php if($arrayrespuestas['ec9p12intermediao3']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
             En especie (Electrodomésticos, Vestidos, Otros Productos Diferentes a Alimentos o bonos como Sodexo)
            </label>
        </div>
        </div> 
            
        <div id="c9p12intermediao4div" <?php if($arrayrespuestas['ec9p12intermediao4']=='' || $arrayrespuestas['ec9p12intermediao4']=='NO' || $arrayrespuestas['ec9p12intermediao4']=='98'){echo('class=" has-error"');}?>>
        <div class="checkbox">
            <label> <!--en este caso se manda a la fincion javascript el nombre del campo-->
              <input type="checkbox" name="c9p12intermediao4" id="c9p12intermediao4" onclick="cambiarsinoc9p12intermedia('SI','c9p12intermediao4','c9p12intermediao4div','c9p12intermediadiv',4);" <?php if($arrayrespuestas['ec9p12intermediao4']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
             No recibió
            </label>
        </div>
        </div>     
            <br>
            
        <div class="row" id="c9p12intermediacuantomostrar" name="c9p12intermediacuantomostrar" <?php if($arrayrespuestas['ec9p12intermediao4']=='SI'|| $arrayrespuestas['ec9p12intermediacuanto']==''){echo('style="display:none"');}?> >
        <div  id="c9p12intermediacuantodiv" name="c9p12intermediacuantodiv" class="form-group col-md-3">
        <label class="control-label">En Cuanto estima lo que recibio?</label>
        <input type="text" class="form-control text-uppercase" id="c9p12intermediacuanto" onkeypress="return soloNumeros(event)"  onchange="validarcampotexcuadros('c9p12intermediacuantodiv','c9p12intermediacuanto','4')" name="c9p12intermediacuanto" value="<?php if($arrayrespuestas['ec9p12intermediacuanto'] == ''){}else{ echo($arrayrespuestas['ec9p12intermediacuanto']);} ?>">
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
            <?php if($arrayrespuestas['ec9p12intermediao1']=="" & $arrayrespuestas['ec9p12intermediao2']=="" & $arrayrespuestas['ec9p12intermediao3']==""& $arrayrespuestas['ec9p12intermediao4']=="")
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
                          vc9p12intermediao1 : $('#c9p12intermediao1').val(),          
                          vc9p12intermediao2 : $('#c9p12intermediao2').val(),
                          vc9p12intermediao3 : $('#c9p12intermediao3').val(),
                          vc9p12intermediao4 : $('#c9p12intermediao4').val(),                          
                          vc9p12intermediacuanto : $('#c9p12intermediacuanto').val()},                      
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
                          vc9p12intermediao1 : $('#c9p12intermediao1').val(),          
                          vc9p12intermediao2 : $('#c9p12intermediao2').val(),
                          vc9p12intermediao3 : $('#c9p12intermediao3').val(),
                          vc9p12intermediao4 : $('#c9p12intermediao4').val(),                          
                          vc9p12intermediacuanto : $('#c9p12intermediacuanto').val()},                      
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
         botonsiguiente();
         
         location.href = "../c_c9p13intermediaLCV1/fc_c9p13intermediaLCV1?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val();                    

        });

              
        $("#anterior").click(function ()
        {
         botonanterior();
         location.href = "../c_c9p11intermediaLCV1/fc_c9p11intermediaLCV1?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
        });

//para cargar variables capitulo, pregunta,encuestador,vivienda,barra


cargardatosgenerales('<?php echo($arraydatosgenerales['ecapitulo']); ?>','5 de 12 subcapitulo 9M','<?php echo($arraydatosgenerales['enomcoges']); ?>','<?php echo($arraydatosgenerales['enombreintegrante']." "." - "." "."Sexo:"." ".$arraydatosgenerales['esexointegrante']."   "."  -  "."   "."Edad:"."   ".$arraydatosgenerales['eedadintegrante']); ?>','30');
//control del boton ayuda
botonayuda();

});
//dea aca para abajo es logica de cuadros
function cambiarsinoc9p12intermedia(opcion,campoval,divcampo,divcompleto,campos)
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
    
    if(campoval == 'c9p12intermediao1' || campoval == 'c9p12intermediao2' || campoval == 'c9p12intermediao3' )
            {  
                //alert('aca lo muestra');
                $('#c9p12intermediacuantomostrar').show();
                $('#c9p12intermediacuanto').val('');
                $('#c9p12intermediacuantodiv').addClass('has-error');            

            }
            else
            {
                //alert('aca lo oculta');
                $('#c9p12intermediacuantomostrar').hide();
                $('#c9p12intermediacuanto').val('98');
                $('#c9p12intermediacuantodiv').removeClass(' has-error');
            }         
     
        if(campoval == 'c9p12intermediao4')
           {
            if($('#' + campoval).val() == 'SI')
            {
              $('#c9p12intermediao1').prop('checked' , false);
              $('#c9p12intermediao1div').addClass(' has-error');
              $('#c9p12intermediao2').prop('checked' , false);
              $('#c9p12intermediao2div').addClass(' has-error');
              $('#c9p12intermediao3').prop('checked' , false);
              $('#c9p12intermediao3div').addClass(' has-error');
                           
              
              $('#c9p12intermediacuantomostrar').hide(1000);
              $('#c9p12intermediacuanto').val('98');             
                            
              $('#c9p12intermediao1').val('NO');
              $('#c9p12intermediao2').val('NO');
              $('#c9p12intermediao3').val('NO');
                       
              }
}
        else
      {
          $('#c9p12intermediao4').prop('checked' , false); 
          $('#c9p12intermediao4').val('NO');
          $('#c9p12intermediao4div').addClass(' has-error');
      }
      
        validarcuadrosc9p12intermedia(divcompleto,campos);
}

function validarcuadrosc9p12intermedia(divcuadro,ncampos)
{
    //alert($('#' + divcuadro).find('input').prop('checked', true).length);
    //alert($('.has-error').length);
    if ($('#c9p12intermediacuanto').val() != '')
    {
    if($('.has-error').length == (ncampos + 1))
    {   //alert('soniguales');
       $('#guardar').prop('disabled', true);
       $('#actualizar').prop('disabled', true);
       $('#cancelar').prop('disabled', true);
       $('#anterior').prop('disabled', false);
       $('#siguiente').prop('disabled', false);
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

    validarcuadrosc9p12intermedia(div,ncampos);
}

</script>
</html>