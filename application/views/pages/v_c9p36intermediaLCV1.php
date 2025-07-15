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
        <input type="text" class="form-control input-sm" id="doccogestor" name="doccogestor" style="display:none"    placeholder="folio" value="<?php echo($doccogestor); ?>">
        <input type="text" class="form-control input-sm" id="idintegrante" name="idintegrante"  style="display:none"   placeholder="idintegrante" value="<?php echo($idintegrante); ?>">
        <input type="text" class="form-control input-sm" id="edad" name="edad"  style="display:none"   placeholder="" value="<?php echo($arraydatosgenerales['eedadintegrante']); ?>">
       <input type="text" class="form-control input-sm" id="sexo" name="sexo"  style="display:none"   placeholder="" value="<?php echo($arraydatosgenerales['esexointegrante']); ?>">
        <input type="text" class="form-control" id="valorc9p34" name="valorc9p34" style="display:none" placeholder="Text input" value="<?php echo($arrayrespuestas['ec9p34']); ?>">
       
        <!--fin para imprimir el idintegrante y llevarlo-->
<hr>
        <form class="form-group" name="formulario" id="formulario">

           <!--Check varias selecciones -->
    <div class="row">
        <div id="c9p36intermediadiv" name="c9p36intermediadiv" class="form-group col-md-12 form-group-sm">
        <div id="titulo22" class="has-error">
        <label class="control-label">6. ¿Cuáles han sido las dos principales dificultades que ha tenido para desarollar el negocio? (Selección mútiple)
                    
            <button type="button" id="vayuda" name="vayuda" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModal">
                        <span class="glyphicon glyphicon-question-sign" aria-hidden="true"></span> Ayuda
                    </button>       
        </label>
        </div>
            
        <div id="c9p36intermediao1div" <?php if($arrayrespuestas['ec9p36intermediao1']=='' || $arrayrespuestas['ec9p36intermediao1']=='NO' || $arrayrespuestas['ec9p36intermediao1']=='98'){echo('class=" has-error"');}?>>
        <div class="checkbox">
            <label> <!--en este caso se manda a la fincion javascript el nombre del campo-->
              <input type="checkbox" name="p1" id="c9p36intermediao1" onclick="cambiarsinoc9p36intermedia('SI','c9p36intermediao1','c9p36intermediao1div');validari2rp()" <?php if($arrayrespuestas['ec9p36intermediao1']=='SI'){echo('value="SI" checked');}else{echo('value="NO" ');}?>>
            Falta de capital
            </label>
        </div>
        </div>
             
            
        <div id="c9p36intermediao2div" <?php if($arrayrespuestas['ec9p36intermediao2']=='' || $arrayrespuestas['ec9p36intermediao2']=='NO' || $arrayrespuestas['ec9p36intermediao2']=='98'){echo('class=" has-error"');}?>>
        <div class="checkbox">
            <label> <!--en este caso se manda a la fincion javascript el nombre del campo-->
              <input type="checkbox" name="p2" id="c9p36intermediao2" onclick="cambiarsinoc9p36intermedia('SI','c9p36intermediao2','c9p36intermediao2div');validari2rp()" <?php if($arrayrespuestas['ec9p36intermediao2']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
           Poca información
            </label>
        </div>
        </div> 
       
            
        <div id="c9p36intermediao3div" <?php if($arrayrespuestas['ec9p36intermediao3']=='' || $arrayrespuestas['ec9p36intermediao3']=='NO' || $arrayrespuestas['ec9p36intermediao3']=='98'){echo('class=" has-error"');}?>>
        <div class="checkbox">
            <label> <!--en este caso se manda a la fincion javascript el nombre del campo-->
              <input type="checkbox" name="p3" id="c9p36intermediao3" onclick="cambiarsinoc9p36intermedia('SI','c9p36intermediao3','c9p36intermediao3div');validari2rp()" <?php if($arrayrespuestas['ec9p36intermediao3']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
             Miedo al fracaso
            </label>
        </div>
        </div> 
          
         <div id="c9p36intermediao4div" <?php if($arrayrespuestas['ec9p36intermediao4']=='' || $arrayrespuestas['ec9p36intermediao4']=='NO' || $arrayrespuestas['ec9p36intermediao4']=='98'){echo('class=" has-error"');}?>>
        <div class="checkbox">
            <label> <!--en este caso se manda a la fincion javascript el nombre del campo-->
              <input type="checkbox" name="p4" id="c9p36intermediao4" onclick="cambiarsinoc9p36intermedia('SI','c9p36intermediao4','c9p36intermediao4div');validari2rp()" <?php if($arrayrespuestas['ec9p36intermediao4']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
          No cuenta con asesoria
            </label>
        </div>
        </div>
            
        <div id="c9p36intermediao5div" <?php if($arrayrespuestas['ec9p36intermediao5']=='' || $arrayrespuestas['ec9p36intermediao5']=='NO' || $arrayrespuestas['ec9p36intermediao5']=='98'){echo('class=" has-error"');}?>>
        <div class="checkbox">
            <label> <!--en este caso se manda a la fincion javascript el nombre del campo-->
              <input type="checkbox" name="p5" id="c9p36intermediao5" onclick="cambiarsinoc9p36intermedia('SI','c9p36intermediao5','c9p36intermediao5div');validari2rp()" <?php if($arrayrespuestas['ec9p36intermediao5']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
          No tiene personal
            </label>
        </div>
        </div>
            
        <div id="c9p36intermediao6div" <?php if($arrayrespuestas['ec9p36intermediao6']=='' || $arrayrespuestas['ec9p36intermediao6']=='NO' || $arrayrespuestas['ec9p36intermediao6']=='98'){echo('class=" has-error"');}?>>
        <div class="checkbox">
            <label> <!--en este caso se manda a la fincion javascript el nombre del campo-->
              <input type="checkbox" name="p6" id="c9p36intermediao6" onclick="cambiarsinoc9p36intermedia('SI','c9p36intermediao6','c9p36intermediao6div');validari2rp()" <?php if($arrayrespuestas['ec9p36intermediao6']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
          Problemas de seguridad
            </label>
        </div>
        </div>
            
        <div id="c9p36intermediao7div" <?php if($arrayrespuestas['ec9p36intermediao7']=='' || $arrayrespuestas['ec9p36intermediao7']=='NO' || $arrayrespuestas['ec9p36intermediao7']=='98'){echo('class=" has-error"');}?>>
        <div class="checkbox">
            <label> <!--en este caso se manda a la fincion javascript el nombre del campo-->
              <input type="checkbox" name="p7" id="c9p36intermediao7" onclick="cambiarsinoc9p36intermedia('SI','c9p36intermediao7','c9p36intermediao7div');validari2rp()" <?php if($arrayrespuestas['ec9p36intermediao7']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
         Falta de local
            </label>
        </div>
        </div>
            
             <div id="c9p36intermediao8div" <?php if($arrayrespuestas['ec9p36intermediao8']=='' || $arrayrespuestas['ec9p36intermediao8']=='NO' || $arrayrespuestas['ec9p36intermediao8']=='98'){echo('class=" has-error"');}?>>
        <div class="checkbox">
            <label> <!--en este caso se manda a la fincion javascript el nombre del campo-->
              <input type="checkbox" name="p8" id="c9p36intermediao8" onclick="cambiarsinoc9p36intermedia('SI','c9p36intermediao8','c9p36intermediao8div');mostrarcual('c9p36intermediao8','c9p36intermediao8cualdiv','c9p36intermediao8cual');validari2rp()" <?php if($arrayrespuestas['ec9p36intermediao8']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
         Otro
            </label>
        </div>
        </div>
            
            <div  class="row">
        <div  id="c9p36intermediao8cualdiv" name="c9p36intermediao8cualdiv" class="form-group col-md-3" <?php if ($arrayrespuestas['ec9p36intermediao8cual']=='' || $arrayrespuestas['ec9p36intermediao8cual']=='98' ){echo('class="col-md-5 col-lg-offset-0 has-error" style="display:none" ');}else{echo('class="col-md-5 col-lg-offset-0" ');} ?>>
        <label class="control-label">Cual?</label>
        <input type="text" class="form-control text-uppercase" id="c9p36intermediao8cual" onkeypress="return soloLetras(event)"  onkeyup="cambiarcolorvalidacion('c9p36intermediao8cualdiv','c9p36intermediao8cual');validari2rp()" name="c9p36intermediao8cual" value="<?php if($arrayrespuestas['ec9p36intermediao8cual'] == ''){echo'98';}else{ echo($arrayrespuestas['ec9p36intermediao8cual']);} ?>">
        </div>

        
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
            <?php if($arrayrespuestas['ec9p36intermediao1']=="" & $arrayrespuestas['ec9p36intermediao2']=="" & $arrayrespuestas['ec9p36intermediao3']==""& $arrayrespuestas['ec9p36intermediao4']==""& $arrayrespuestas['ec9p36intermediao5']==""& $arrayrespuestas['ec9p36intermediao6']==""& $arrayrespuestas['ec9p36intermediao7']==""& $arrayrespuestas['ec9p36intermediao8']=="")
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
                          vc9p36intermediao1 : $('#c9p36intermediao1').val(),
                          vc9p36intermediao2 : $('#c9p36intermediao2').val(),
                          vc9p36intermediao3 : $('#c9p36intermediao3').val(),
                          vc9p36intermediao4 : $('#c9p36intermediao4').val(),
                          vc9p36intermediao5 : $('#c9p36intermediao5').val(),
                          vc9p36intermediao6 : $('#c9p36intermediao6').val(),
                          vc9p36intermediao7 : $('#c9p36intermediao7').val(),
                          vc9p36intermediao8 : $('#c9p36intermediao8').val(),
                          vc9p36intermediao8cual : $('#c9p36intermediao8cual').val()},                      
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
                          vc9p36intermediao1 : $('#c9p36intermediao1').val(),
                          vc9p36intermediao2 : $('#c9p36intermediao2').val(),
                          vc9p36intermediao3 : $('#c9p36intermediao3').val(),
                          vc9p36intermediao4 : $('#c9p36intermediao4').val(),
                          vc9p36intermediao5 : $('#c9p36intermediao5').val(),
                          vc9p36intermediao6 : $('#c9p36intermediao6').val(),
                          vc9p36intermediao7 : $('#c9p36intermediao7').val(),
                          vc9p36intermediao8 : $('#c9p36intermediao8').val(),
                          vc9p36intermediao8cual : $('#c9p36intermediao8cual').val()},                      
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
         
         if($('#edad').val() >='5' && $('#edad').val() <='14')
         {
            location.href = "../c_c9p37intermediaLCV1/fc_c9p37intermediaLCV1?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";  
         }
         else 
         {
           location.href = "../c_capitulosintegranteintermediaLCV1/fc_capitulosintegranteintermediaLCV1?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +""; 
        }
        });

              
        $("#anterior").click(function ()
        {
          location.href = "../c_c9p35intermediaLCV1/fc_c9p35intermediaLCV1?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";  
        });

//para cargar variables capitulo, pregunta,encuestador,vivienda,barra



cargardatosgenerales('<?php echo($arraydatosgenerales['ecapitulo']); ?>','Pregunta 6 de 6','<?php echo($arraydatosgenerales['enomcoges']); ?>','<?php echo($arraydatosgenerales['enombreintegrante']." "." - "." "."Sexo:"." ".$arraydatosgenerales['esexointegrante']."   "."  -  "."   "."Edad:"."   ".$arraydatosgenerales['eedadintegrante']); ?>','100');
//control del boton ayuda
botonayuda();

});
//dea aca para abajo es logica de cuadros
function cambiarsinoc9p36intermedia(opcion,campoval,divcampo,divcompleto,campos)
{
    
     var j= 1;
        
        
        for(j=1;j<=8;j++){
        
       
            if($("input[name='p" + j+"']").is(":checked") === true){
                
                $('#titulo22').removeClass('has-error');
                break;
            }else{
                $('#titulo22').addClass('has-error');
            }
        }
    
    
    
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
    
       if(campoval == 'c9p36intermediao8')
        {
            if($('#' + campoval).val() == 'SI')
            {
                //alert('aca lo muestra');
                $('#c9p36intermediao8cualmostrar').show();
                $('#c9p36intermediao8cual').val('');
                $('#c9p36intermediao8cualdiv').addClass(' has-error');            

            }
            else
            {
                //alert('aca lo oculta');
                $('#c9p36intermediao8cualmostrar').hide();
                $('#c9p36intermediao8cual').val('98');
                $('#c9p36intermediao8cualdiv').removeClass(' has-error');
  
            }
          
        }

        
   
}

function validari2rp()

{
    if($('#titulo22').hasClass('has-error') || $('#c9p36intermediao8cual').val()=='' )
    {
        $('#guardar').prop('disabled', true);
        $('#actualizar').prop('disabled', true);
         $('#anterior').prop('disabled', false);
         $('#siguiente').prop('disabled', false);
         $('#cancelar').prop('disabled', true);
    }
    else
    {
        $('#guardar').prop('disabled', false);
        $('#actualizar').prop('disabled', false);
          $('#anterior').prop('disabled', true);
         $('#siguiente').prop('disabled', true);
         $('#cancelar').prop('disabled', false);
    }
}

function cambiarcolorvalidacion(div,idcampo)
{
    if($('#'+idcampo).val()=='')
    {
        $('#'+div).addClass('has-error');
    }
    else
    {
        $('#'+div).removeClass('has-error');
    }
    
}

function mostrarcual(idcampo,div,campo2)
{
    if($('#'+idcampo).val()=='SI')
    {
        $('#'+div).show();
        $('#'+div).addClass('has-error');
        $('#'+campo2).val('');
    }
    else
    {
        $('#'+div).hide();
        $('#'+div).removeClass('has-error');
        $('#'+campo2).val('98');
        
    }
}

</script>
</html>