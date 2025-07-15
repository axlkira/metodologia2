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
        <input type="text"  class="form-control input-sm " id="valorc9p43"  style="display:none"  name="valorc9p43"   value="<?php echo ($arrayrespuestas['ec9p43']);?>">
        <!--fin para imprimir el idintegrante y llevarlo-->
<hr>
        <form class="form-group" name="formulario" id="formulario">

            <!--inicio radio una sola seleccion-->
             <div class="row">
        <div id="c9p42intermediadiv" name="c9p42intermediadiv" class="form-group col-md-12 form-group-sm">
        <div id="c9p42intermediao0div" class="has-error">
            <label class="control-label">6. ¿Qué recibe a cambio por haber realizado esa(s) actividad(es)? (Selección Multiple)
                     
                     <button type="button" id="vayuda" name="vayuda" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModal">
                        <span class="glyphicon glyphicon-question-sign" aria-hidden="true"></span> Ayuda
                     </button>   <br><br>
            </label>
        </div>
       
        <div id="c9p42intermediao1div" <?php if($arrayrespuestas['ec9p42intermediao1']=='' || $arrayrespuestas['ec9p42intermediao1']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
             <input type="checkbox" name="c9p42intermediao1" id="c9p42intermediao1" onclick="cambiarsinoc9p42intermedia('SI','c9p42intermediao1','c9p42intermediao1div','c9p42intermediadiv',6);" <?php if($arrayrespuestas['ec9p42intermediao1']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
             Recibe cosas u objetos a cambio (juguetes, ropa, electrodomésticos)
          </label>
        </div>
        </div>
        <div id="c9p42intermediao2div" <?php if($arrayrespuestas['ec9p42intermediao2']==''|| $arrayrespuestas['ec9p42intermediao2']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="c9p42intermediao2" id="c9p42intermediao2" onclick="cambiarsinoc9p42intermedia('SI','c9p42intermediao2','c9p42intermediao2div','c9p42intermediadiv',6);" <?php if($arrayrespuestas['ec9p42intermediao2']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
           Recibe dinero a cambio
          </label>
        </div>
        </div>  
            
            <div id="c9p42intermediao3div" <?php if($arrayrespuestas['ec9p42intermediao3']==''|| $arrayrespuestas['ec9p42intermediao3']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="c9p42intermediao3" id="c9p42intermediao3" onclick="cambiarsinoc9p42intermedia('SI','c9p42intermediao3','c9p42intermediao3div','c9p42intermediadiv',6);" <?php if($arrayrespuestas['ec9p42intermediao3']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
          Recibe comida a cambio

          </label>
        </div>
        </div>  
            
            <div id="c9p42intermediao4div" <?php if($arrayrespuestas['ec9p42intermediao4']==''|| $arrayrespuestas['ec9p42intermediao4']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="c9p42intermediao4" id="c9p42intermediao4" onclick="cambiarsinoc9p42intermedia('SI','c9p42intermediao4','c9p42intermediao4div','c9p42intermediadiv',6);" <?php if($arrayrespuestas['ec9p42intermediao4']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            Otro ¿Cuál?
          </label>
        </div>
        </div>  
            
        <div id="c9p42intermediao5div" <?php if($arrayrespuestas['ec9p42intermediao5']==''|| $arrayrespuestas['ec9p42intermediao5']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="c9p42intermediao5" id="c9p42intermediao5" onclick="cambiarsinoc9p42intermedia('SI','c9p42intermediao5','c9p42intermediao5div','c9p42intermediadiv',6);" <?php if($arrayrespuestas['ec9p42intermediao5']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
           No recibe nada a cambio
         </label>
        </div>
        </div>
            
        <div class="row" id="c9p42intermediacualmostrar" name="c9p42intermediacualmostrar" <?php if($arrayrespuestas['ec9p42intermediao4']== 'NO'||$arrayrespuestas['ec9p42intermediao4']== ''){echo('style="display:none"');}else{echo('');}  ?> >
        <div  id="c9p42intermediacualdiv" name="c9p42intermediacualdiv" class="form-group col-md-3">
                       <label class="control-label">Cual?</label>
                       <input type="text" class="form-control text-uppercase" id="c9p42intermediacual" onkeypress="return soloLetras(event)"  onchange="validarcampotexcuadros('c9p42intermediacualdiv','c9p42intermediacual','9')" name="c9p42intermediacual"   placeholder="Cual?" value="<?php if($arrayrespuestas['ec9p42intermediacual'] == ''){echo('0');}else{ echo($arrayrespuestas['ec9p42intermediacual']);} ?>">
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
            <?php if( $arrayrespuestas['ec9p42intermediao2']=="" & $arrayrespuestas['ec9p42intermediao3']=="" & $arrayrespuestas['ec9p42intermediao4']==""& $arrayrespuestas['ec9p42intermediacual']=="")
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
                          data: {vfolio : $('#folio').val(),vidintegrante : $('#idintegrante').val(), vc9p42intermediao1 : $('#c9p42intermediao1').val(), vc9p42intermediao2 : $('#c9p42intermediao2').val(),
                          vc9p42intermediao3 : $('#c9p42intermediao3').val(), vc9p42intermediao4 : $('#c9p42intermediao4').val(), vc9p42intermediao5 : $('#c9p42intermediao5').val(),vc9p42intermediacual : $('#c9p42intermediacual').val()},    
                          dataType: "html",
                          success : function(obj){                      
                          botonguardar();
                          saltarc9p42intermedia();
                          }
                        });                    
        });

        
        $("#actualizar").click(function ()
        {
                        $.ajax({
                          url: "fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),vidintegrante : $('#idintegrante').val(), vc9p42intermediao1 : $('#c9p42intermediao1').val(), vc9p42intermediao2 : $('#c9p42intermediao2').val(),
                          vc9p42intermediao3 : $('#c9p42intermediao3').val(), vc9p42intermediao4 : $('#c9p42intermediao4').val(), vc9p42intermediao5 : $('#c9p42intermediao5').val(),vc9p42intermediacual : $('#c9p42intermediacual').val()},    
                          dataType: "html",
                          success : function(obj){                      
                          botonguardar();
                          saltarc9p42intermedia();
                          }
                        });                    
        });
        
        
        $("#siguiente").click(function ()
        {
         botonsiguiente();
         if($('#c9p42intermediao5').val() === 'SI')
         {
//         
         location.href = "../c_capitulosintegranteintermediaLCV1/fc_capitulosintegranteintermediaLCV1?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";
         }
         else if ($('#c9p42intermediao5').val() === 'NO')
         {
           location.href = "../c_c9p43intermediaLCV1/fc_c9p43intermediaLCV1?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";    
         }
         
        });
        
         $("#capitulos").click(function ()
        {
            
            location.href = "../c_capitulosintegranteintermediaLCV1/fc_capitulosintegranteintermediaLCV1?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() ;                    
         
            });
              
        $("#anterior").click(function ()
        {
         botonanterior();
        
         {
         location.href = "../c_c9p41intermediaLCV1/fc_c9p41intermediaLCV1?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
         }
        });



cargardatosgenerales('<?php echo($arraydatosgenerales['ecapitulo']); ?>','Pregunta 6 de 7','<?php echo($arraydatosgenerales['enomcoges']); ?>','<?php echo($arraydatosgenerales['enombreintegrante']." "." - "." "."Sexo:"." ".$arraydatosgenerales['esexointegrante']."   "."  -  "."   "."Edad:"."   ".$arraydatosgenerales['eedadintegrante']); ?>','90');
//control del boton ayuda
botonayuda();

});


function saltarc9p42intermedia()
{
if($('#c9p42intermediao5').val() === 'SI')
         {                
                         
                    $.ajax({
                          url: "../c_c9p43intermediaLCV1/fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),
                          vidintegrante : $('#idintegrante').val(),    
                          vvalorc9p43intermedia : '98'},
                          dataType: "html",
                          success : function(obj)
                          {
                         //location.href = "../c_c9p7/fc_c9p7?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
                          }
                         });
                        
                            
        }
        
         else 
         {               
                   
                    $.ajax({
                          url: "../c_c9p43intermediaLCV1/fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),
                          vidintegrante : $('#idintegrante').val(),    
                          vvalorc9p43intermedia : ''},
                          dataType: "html",
                          success : function(obj)
                          {
                         //location.href = "../c_c9p7/fc_c9p7?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
                          }
                         });
                         
        }
                         
        
                 }


//dea aca para abajo es logica de cuadros
function cambiarsinoc9p42intermedia(opcion,campoval,divcampo,divcompleto,campos,mostrar)
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
    if(campoval == 'c9p42intermediao4')
        {
            if($('#' + campoval).val() == 'SI')
            {
                //alert('aca lo muestra');
                $('#c9p42intermediacualmostrar').show();
                $('#c9p42intermediacual').val('');
                $('#c9p42intermediacualdiv').addClass(' has-error');            

            }
            else
            {
                //alert('aca lo oculta');
                $('#c9p42intermediacualmostrar').hide();
                $('#c9p42intermediacual').val('98');
                $('#c9p42intermediacualdiv').removeClass(' has-error');
  
            }
        }
       if(campoval == 'c9p42intermediao5')
           {
            if($('#' + campoval).val() == 'SI')
            {
              $('#c9p42intermediao1').prop('checked' , false);
              $('#c9p42intermediao1div').addClass(' has-error');
              $('#c9p42intermediao2').prop('checked' , false);
              $('#c9p42intermediao2div').addClass(' has-error');
              $('#c9p42intermediao3').prop('checked' , false);
              $('#c9p42intermediao3div').addClass(' has-error');
              $('#c9p42intermediao4').prop('checked' , false);
              $('#c9p42intermediao4div').addClass(' has-error');
              
              $('#c9p42intermediacualmostrar').hide();
              $('#c9p42intermediacual').val('98');
                            
              $('#c9p42intermediao1').val('NO');
              $('#c9p42intermediao2').val('NO');
              $('#c9p42intermediao3').val('NO');
              $('#c9p42intermediao4').val('NO');
              
              
              }
}
        else
       {
          $('#c9p42intermediao5').prop('checked' , false); 
          $('#c9p42intermediao5').val('NO');
          $('#c9p42intermediao5div').addClass(' has-error');
      }
        


      validarcuadrosc9p42intermedia(divcompleto,campos);
}

function validarcuadrosc9p42intermedia(divcuadro,ncampos)
{
    
    if ($('#c9p42intermediacual').val() != '')
    {
        //|| $('#c3p2cualdiv')===('form-group col-md-10 form-group-sm has-error')
        if($('.has-error').length === (ncampos))
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
    else
    {
           $('#guardar').prop('disabled', true);
           $('#actualizar').prop('disabled', true);
           $('#cancelar').prop('disabled', true);
           $('#anterior').prop('disabled', false);
           $('#siguiente').prop('disabled', true);        
    }
}

function validarcampotexcuadros(div,campo,ncampos)
{
    validarbolitasytexto(div,campo);

    validarcuadrosc9p42intermedia(div,ncampos);
}

</script>
</html>