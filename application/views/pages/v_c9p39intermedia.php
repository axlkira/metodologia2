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
        <input type="text"  class="form-control input-sm " id="c9p37o11" style="display:none"    name="c9p37o11"   value="<?php echo ($arrayrespuestas['ec9p37o11']);?>">
        <input type="text"  class="form-control input-sm " id="c9p38o9" style="display:none"    name="c9p38o9"   value="<?php echo ($arrayrespuestas['ec9p38o9']);?>">
        <input type="text" class="form-control" id="valorc9p40" style="display:none" name="valorc9p40"  placeholder="Text input" value="<?php echo($arrayrespuestas['ec9p40']); ?>">
        <!--fin para imprimir el idintegrante y llevarlo-->
<hr>
        <form class="form-group" name="formulario" id="formulario">

            <!--inicio radio una sola seleccion-->
             <div class="row">
        <div id="c9p39intermediadiv" name="c9p39intermediadiv" class="form-group col-md-12 form-group-sm">
        <div id="c9p39intermediao0div" class="has-error">
            <label class="control-label">3. Ayudas a tus padres, familiares a alguna otra persona en un negocio o cultivo en alguna de las siguientes actividades: (Selección Múltiple)
                     
                     <button type="button" id="vayuda" name="vayuda" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModal">
                        <span class="glyphicon glyphicon-question-sign" aria-hidden="true"></span> Ayuda
                     </button>   <br><br>
            </label>
        </div>
       
        <div id="c9p39intermediao1div" <?php if($arrayrespuestas['ec9p39intermediao1']=='' || $arrayrespuestas['ec9p39intermediao1']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="c9p39intermediao1" id="c9p39intermediao1" onclick="cambiarsinoc9p39intermedia('SI','c9p39intermediao1','c9p39intermediao1div','c9p39intermediadiv',9);" <?php if($arrayrespuestas['ec9p39intermediao1']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            Fabricar productos
          </label>
        </div>
        </div>
        <div id="c9p39intermediao2div" <?php if($arrayrespuestas['ec9p39intermediao2']==''|| $arrayrespuestas['ec9p39intermediao2']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="c9p39intermediao2" id="c9p39intermediao2" onclick="cambiarsinoc9p39intermedia('SI','c9p39intermediao2','c9p39intermediao2div','c9p39intermediadiv',9);" <?php if($arrayrespuestas['ec9p39intermediao2']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
           Ayudar a cocinar
          </label>
        </div>
        </div>  
            
            <div id="c9p39intermediao3div" <?php if($arrayrespuestas['ec9p39intermediao3']==''|| $arrayrespuestas['ec9p39intermediao3']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="c9p39intermediao3" id="c9p39intermediao3" onclick="cambiarsinoc9p39intermedia('SI','c9p39intermediao3','c9p39intermediao3div','c9p39intermediadiv',9);" <?php if($arrayrespuestas['ec9p39intermediao3']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
          Vender Productos o servicios

          </label>
        </div>
        </div>  
            
            <div id="c9p39intermediao4div" <?php if($arrayrespuestas['ec9p39intermediao4']==''|| $arrayrespuestas['ec9p39intermediao4']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="c9p39intermediao4" id="c9p39intermediao4" onclick="cambiarsinoc9p39intermedia('SI','c9p39intermediao4','c9p39intermediao4div','c9p39intermediadiv',9);" <?php if($arrayrespuestas['ec9p39intermediao4']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
           Llevar Domicilios o hacer mandados
          </label>
        </div>
        </div>  
            
        <div id="c9p39intermediao5div" <?php if($arrayrespuestas['ec9p39intermediao5']==''|| $arrayrespuestas['ec9p39intermediao5']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="c9p39intermediao5" id="c9p39intermediao5" onclick="cambiarsinoc9p39intermedia('SI','c9p39intermediao5','c9p39intermediao5div','c9p39intermediadiv',9);" <?php if($arrayrespuestas['ec9p39intermediao5']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
           Cultivar la tierra
         </label>
        </div>
        </div>
            
            <div id="c9p39intermediao6div" <?php if($arrayrespuestas['ec9p39intermediao6']==''|| $arrayrespuestas['ec9p39intermediao6']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="c9p39intermediao6" id="c9p39intermediao6" onclick="cambiarsinoc9p39intermedia('SI','c9p39intermediao6','c9p39intermediao6div','c9p39intermediadiv',9);" <?php if($arrayrespuestas['ec9p39intermediao6']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
             Recolectar cartones y/o botellas
         </label>
        </div>
        </div>
            <div id="c9p39intermediao7div" <?php if($arrayrespuestas['ec9p39intermediao7']==''|| $arrayrespuestas['ec9p39intermediao7']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="c9p39intermediao7" id="c9p39intermediao7" onclick="cambiarsinoc9p39intermedia('SI','c9p39intermediao7','c9p39intermediao7div','c9p39intermediadiv',9);" <?php if($arrayrespuestas['ec9p39intermediao7']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
             No ayudo a nadie en un negocio o cultivo
         </label>
        </div>
        </div>
            <div id="c9p39intermediao8div" <?php if($arrayrespuestas['ec9p39intermediao8']==''|| $arrayrespuestas['ec9p39intermediao8']=='NO'){echo'class=" has-error"';}else{echo'class=""';}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="c9p39intermediao8"  id="c9p39intermediao8" onclick="modal1207()" onclick="cambiarsinoc9p39intermedia('SI','c9p39intermediao8','c9p39intermediao8div','c9p39intermediadiv',9);" <?php if($arrayrespuestas['ec9p39intermediao8']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            Otras. Cuál?
         </label>
        </div>
        </div>
            
        <div class="row" id="c9p39intermediacualmostrar" name="c9p39intermediacualmostrar" <?php if($arrayrespuestas['ec9p39intermediao8']== 'NO'||$arrayrespuestas['ec9p39intermediao8']== ''){echo('style="display:none"');}else{echo('');}  ?> >
        <div  id="c9p39intermediacualdiv" name="c9p39intermediacualdiv" class="form-group col-md-3">
                       <label class="control-label">Cual?</label>
                       <input type="text" class="form-control text-uppercase" id="c9p39intermediacual" onkeypress="return soloLetras(event)"  onchange="validarcuadrosc9p39intermedia('c9p39intermediacualdiv',9)" name="c9p39intermediacual"   placeholder="Cual?" value="<?php if($arrayrespuestas['ec9p39intermediacual'] == ''){echo('0');}else{ echo($arrayrespuestas['ec9p39intermediacual']);} ?>">
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
            <?php if( $arrayrespuestas['ec9p39intermediao2']=="" & $arrayrespuestas['ec9p39intermediao3']=="" & $arrayrespuestas['ec9p39intermediao4']==""& $arrayrespuestas['ec9p39intermediacual']=="")
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
    
    <div class="modal fade" id="modal1207" data-backdrop="static" >
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
<!--          <span aria-hidden="true">&times;</span>-->
        </button>
      </div>
      <div class="modal-body">
        <p>Esta opción se elige si la actividad a registrar indica trabajo infantil</p>
      </div>
      <div class="modal-footer">
          <button type="button" id="conti" class="btn btn-primary" data-dismiss="modal">Continuar</button>
          <button type="button" id="cancel" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
      </div>
    </div>
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
      function modal1207() 
{
$('#modal1207').modal('show');

}  
    
     
    
    $(document).ready(function()
    {
        
         $("#conti").click(function ()
        {
                     if(document.getElementById('c9p39intermediao8').checked){
//                         alert('chulo');
                         $('#c9p39intermediacualmostrar').show();
                         $('#c9p39intermediacual').val('');
//                         $('#c9p39intermediao8').val('SI');
                         $('#c9p39intermediao8div').removeClass('has-error');
                         $('#c9p39intermediacualdiv').addClass('has-error');
                         
                         
                         
                         
                              }
                              else
                              {
                         $('#c9p39intermediacualmostrar').hide();
                         $('#c9p39intermediacual').val('98'); 
                         $('#c9p39intermediao8div').addClass('has-error');
                         $('#c9p39intermediacualdiv').removeClass('has-error');
                         
                     }         
                        
        });
        
         $("#cancel").click(function ()
        {
                        document.getElementById('c9p39intermediao8').checked = false;         
                        $('#c9p39intermediacualmostrar').hide();
        });

        $("#guardar").click(function ()
        {
                        $.ajax({
                          url: "fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),vidintegrante : $('#idintegrante').val(), vc9p39intermediao1 : $('#c9p39intermediao1').val(), vc9p39intermediao2 : $('#c9p39intermediao2').val(),
                          vc9p39intermediao3 : $('#c9p39intermediao3').val(), vc9p39intermediao4 : $('#c9p39intermediao4').val(), vc9p39intermediao5 : $('#c9p39intermediao5').val(), vc9p39intermediao6 : $('#c9p39intermediao6').val(),
                          vc9p39intermediao7 : $('#c9p39intermediao7').val(), vc9p39intermediao8 : $('#c9p39intermediao8').val(),vc9p39intermediacual : $('#c9p39intermediacual').val()},    
                          dataType: "html",
                          success : function(obj){                      
                          botonguardar();
                          saltarc9p39intermedia();
                          }
                        });                    
        });

        
        $("#actualizar").click(function ()
        {
                        $.ajax({
                          url: "fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),vidintegrante : $('#idintegrante').val(), vc9p39intermediao1 : $('#c9p39intermediao1').val(), vc9p39intermediao2 : $('#c9p39intermediao2').val(),
                          vc9p39intermediao3 : $('#c9p39intermediao3').val(), vc9p39intermediao4 : $('#c9p39intermediao4').val(), vc9p39intermediao5 : $('#c9p39intermediao5').val(), vc9p39intermediao6 : $('#c9p39intermediao6').val(),
                          vc9p39intermediao7 : $('#c9p39intermediao7').val(), vc9p39intermediao8 : $('#c9p39intermediao8').val(),vc9p39intermediacual : $('#c9p39intermediacual').val()},    
                          dataType: "html",
                          success : function(obj){                      
                          botonguardar();
                          saltarc9p39intermedia();
                          }
                        });                    
        });
        
        
         $("#capitulos").click(function ()
        {
            
            location.href = "../c_capitulosintegranteintermedia/fc_capitulosintegranteintermedia?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() ;                    
         
            });
        
        
        $("#siguiente").click(function ()
        {
         botonsiguiente();
         if ($('#c9p37o11').val()=== 'SI' && $('#c9p38o9').val()=== 'SI' && $('#c9p39intermediao7').val()=== 'SI')
         {
         location.href = "../c_capitulosintegranteintermedia/fc_capitulosintegranteintermedia?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
         }
         else
         {
         location.href = "../c_c9p40intermedia/fc_c9p40intermedia?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";
         }
         
        });
              
        $("#anterior").click(function ()
        {
         botonanterior();
         location.href = "../c_c9p38intermedia/fc_c9p38intermedia?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
        
        });



cargardatosgenerales('<?php echo($arraydatosgenerales['ecapitulo']); ?>','Pregunta 3 de 7','<?php echo($arraydatosgenerales['enomcoges']); ?>','<?php echo($arraydatosgenerales['enombreintegrante']." "." - "." "."Sexo:"." ".$arraydatosgenerales['esexointegrante']."   "."  -  "."   "."Edad:"."   ".$arraydatosgenerales['eedadintegrante']); ?>','45');
//control del boton ayuda
botonayuda();

});


//dea aca para abajo es logica de cuadros
function cambiarsinoc9p39intermedia(opcion,campoval,divcampo,divcompleto,campos,mostrar)
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
    if(campoval == 'c9p39intermediao8')
        {
            if($('#' + campoval).val() == 'SI')
            {
                //alert('aca lo muestra');
                $('#c9p39intermediacualmostrar').show(1000);
                $('#c9p39intermediacual').val('');
                $('#c9p39intermediacualdiv').addClass(' has-error');        
                $('#c9p39intermediao8div').removeClass(' has-error');

            }
            else
            {
                //alert('aca lo oculta');
                $('#c9p39intermediacualdiv').hide(1000);
                $('#c9p39intermediacual').val('98');
                $('#c9p39intermediacualdiv').removeClass(' has-error');
                $('#c9p39intermediao8div').addClass(' has-error');
  
            }
        }
       if(campoval == 'c9p39intermediao7')
           {
            if($('#' + campoval).val() == 'SI')
            {
              $('#c9p39intermediao1').prop('checked' , false);
              $('#c9p39intermediao1div').addClass(' has-error');
              $('#c9p39intermediao2').prop('checked' , false);
              $('#c9p39intermediao2div').addClass(' has-error');
              $('#c9p39intermediao3').prop('checked' , false);
              $('#c9p39intermediao3div').addClass(' has-error');
              $('#c9p39intermediao4').prop('checked' , false);
              $('#c9p39intermediao4div').addClass(' has-error');
              $('#c9p39intermediao5').prop('checked' , false);
              $('#c9p39intermediao5div').addClass(' has-error');
              $('#c9p39intermediao6').prop('checked' , false);
              $('#c9p39intermediao6div').addClass(' has-error');
              $('#c9p39intermediao8').prop('checked' , false);
              $('#c9p39intermediao8div').addClass(' has-error');
              
              $('#c9p39intermediacualmostrar').hide(1000);
              $('#c9p39intermediacual').val('98');
                            
              $('#c9p39intermediao1').val('NO');
              $('#c9p39intermediao2').val('NO');
              $('#c9p39intermediao3').val('NO');
              $('#c9p39intermediao4').val('NO');
              $('#c9p39intermediao5').val('NO');
              $('#c9p39intermediao6').val('NO');
              $('#c9p39intermediao8').val('NO');
              
              }
}
        else
       {
          $('#c9p39intermediao7').prop('checked' , false); 
          $('#c9p39intermediao7').val('NO');
          $('#c9p39intermediao7div').addClass(' has-error');
      }
        


      validarcuadrosc9p39intermedia(divcompleto,campos);
}

function validarcuadrosc9p39intermedia(divcuadro,ncampos)
{//alert(ncampos + '-' + $('.has-error').length + '-' + $('#c9p39intermediacual').val());
    
    if(document.getElementById('c9p39intermediao8').checked && $('#c9p39intermediacual').val() !== ''){
            
           $('#guardar').prop('disabled', false);
           $('#actualizar').prop('disabled', false);
           $('#cancelar').prop('disabled', true);
           $('#anterior').prop('disabled', false);
           $('#siguiente').prop('disabled', true);
           
           
          
        
//        $('#c9p39intermediacualdiv').removeClass('has-error');
    
            
        }else{
//        $('#c9p39intermediacualdiv').addClass('has-error');
        if($('.has-error').length == (ncampos))
        {  
            
          
            
            
           $('#guardar').prop('disabled', true);
           $('#actualizar').prop('disabled', true);
           $('#cancelar').prop('disabled', true);
           $('#anterior').prop('disabled', false);
           $('#siguiente').prop('disabled', true);
        }
        else
        { //alert('diferentes');
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

    validarcuadrosc9p39intermedia(div,ncampos);
}



function saltarc9p39intermedia()
{
    if ($('#c9p37o11').val()=== 'SI'  && $('#c9p38o9').val()=== 'SI'  && $('#c9p39intermediao7').val()=== 'SI')
    {
        
                         $.ajax({
                          url: "../c_c9p40intermedia/fc_actualizar",
                          type: "GET",
                          data: {
                              vfolio : $('#folio').val()
                              ,vidintegrante : $('#idintegrante').val()
                              , vvalorc9p40intermedia : '98'
                          },
                          dataType: "html",
                          success : function(obj)
                          {      
                           
                          }
                        }); 
                        
                         $.ajax({
                          url: "../c_c9p41intermedia/fc_actualizar",
                          type: "GET",
                          data: {
                              vfolio : $('#folio').val()
                              ,vidintegrante : $('#idintegrante').val()
                              , vvalorc9p41intermedia : '98'
                          },
                          dataType: "html",
                          success : function(obj){                   
                           
                          }
                        }); 
                        
                        
                        $.ajax({
                          url: "../c_c9p42intermedia/fc_actualizar",
                          type: "GET",
                          data: {
                              vfolio : $('#folio').val()
                              ,vidintegrante : $('#idintegrante').val()
                              , vc9p42intermediao1 : '98'
                              , vc9p42intermediao2 : '98'
                              ,vc9p42intermediao3 : '98'
                                , vc9p42intermediao4 : '98'
                                , vc9p42intermediao5 : '98'
                                ,vc9p42intermediacual : '98'},    
                          dataType: "html",
                          success : function(obj)
                          {                      
                           
                          }
                        }); 
                        
                        $.ajax({
                          url: "../c_c9p43intermedia/fc_actualizar",
                          type: "GET",
                       data: {
                           vfolio : $('#folio').val()
                           ,vidintegrante : $('#idintegrante').val()
                           , vvalorc9p43intermedia : '98'},    
                          dataType: "html",
                          success : function(obj)
                          {                      
                           
                          }
                        }); 
    }
    else
    {
        //alert('axl');
                           $.ajax({
                          url: "../c_c9p40intermedia/fc_actualizar",
                          type: "GET",
                          data: {
                              vfolio : $('#folio').val()
                              ,vidintegrante : $('#idintegrante').val()
                              , vvalorc9p40intermedia : ''
                          },
                          dataType: "html",
                          success : function(obj)
                          {      
                           
                          }
                        }); 
                        
                         $.ajax({
                          url: "../c_c9p41intermedia/fc_actualizar",
                          type: "GET",
                          data: {
                              vfolio : $('#folio').val()
                              ,vidintegrante : $('#idintegrante').val()
                              , vvalorc9p41intermedia : ''
                          },
                          dataType: "html",
                          success : function(obj){                   
                           
                          }
                        }); 
                        
                        
                        $.ajax({
                          url: "../c_c9p42intermedia/fc_actualizar",
                          type: "GET",
                          data: {
                              vfolio : $('#folio').val()
                              ,vidintegrante : $('#idintegrante').val()
                              , vc9p42intermediao1 : ''
                              , vc9p42intermediao2 : ''
                              ,vc9p42intermediao3 : ''
                                , vc9p42intermediao4 : ''
                                , vc9p42intermediao5 : ''
                                ,vc9p42intermediacual : ''},    
                          dataType: "html",
                          success : function(obj)
                          {                      
                           
                          }
                        }); 
                        
                        $.ajax({
                          url: "../c_c9p43intermedia/fc_actualizar",
                          type: "GET",
                       data: {
                           vfolio : $('#folio').val()
                           ,vidintegrante : $('#idintegrante').val()
                           , vvalorc9p43intermedia : ''},    
                          dataType: "html",
                          success : function(obj)
                          {                      
                           
                          }
                        }); 
    }
    
 
    
}




</script>
</html>