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
         <input type="text"  class="form-control input-sm " id="c9p37o11" style="display:none"    name="c9p37o11"   value="<?php echo ($arrayrespuestas['ec9p37intermediao11']);?>">
          <input type="text"  class="form-control input-sm " id="c9p39o7"  style="display:none"   name="c9p39o7"   value="<?php echo ($arrayrespuestas['ec9p39intermediao7']);?>">
        <!--fin para imprimir el idintegrante y llevarlo-->
<hr>
        <form class="form-group" name="formulario" id="formulario">

           <!--Check varias selecciones -->
    <div class="row">
        <div id="c9p38intermediadiv" name="c9p38intermediadiv" class="form-group col-md-12 form-group-sm">
        <div id="c9p38intermediao0div" class="has-error">
            <label class="control-label">2. Ayudas a tus padres, familiares o alguna otra persona a realizar algunas de las siguientes actividades: (Selección Múltiple)
                     
                     <button type="button" id="vayuda" name="vayuda" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModal">
                        <span class="glyphicon glyphicon-question-sign" aria-hidden="true"></span> Ayuda
                    </button>       
        </label>
        </div>
        <div id="c9p38intermediao1div" <?php if($arrayrespuestas['ec9p38intermediao1']=='' || $arrayrespuestas['ec9p38intermediao1']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
            <label> <!--en este caso se manda a la fincion javascript el nombre del campo-->
              <input type="checkbox" name="c9p38intermediao1" id="c9p38intermediao1" onclick="cambiarsinoc9p38intermedia('SI','c9p38intermediao1','c9p38intermediao1div','c9p38intermediadiv',11);" <?php if($arrayrespuestas['ec9p38intermediao1']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
           Cuidado de niños o hermanos menores
            </label>
        </div>
        </div>
        <div id="c9p38intermediao2div" <?php if($arrayrespuestas['ec9p38intermediao2']=='' || $arrayrespuestas['ec9p38intermediao2']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="c9p38intermediao2" id="c9p38intermediao2" onclick="cambiarsinoc9p38intermedia('SI','c9p38intermediao2','c9p38intermediao2div','c9p38intermediadiv',11);" <?php if($arrayrespuestas['ec9p38intermediao2']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
           Hacer el aseo de la casa
        </label>
        </div>
        </div>
        <div id="c9p38intermediao3div" <?php if($arrayrespuestas['ec9p38intermediao3']==''|| $arrayrespuestas['ec9p38intermediao3']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="c9p38intermediao3" id="c9p38intermediao3" onclick="cambiarsinoc9p38intermedia('SI','c9p38intermediao3','c9p38intermediao3div','c9p38intermediadiv',11);" <?php if($arrayrespuestas['ec9p38intermediao3']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
           Hacer de comer
          </label>
        </div>
        </div>  
        <div id="c9p38intermediao4div" <?php if($arrayrespuestas['ec9p38intermediao4']==''|| $arrayrespuestas['ec9p38intermediao4']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="c9p38intermediao4" id="c9p38intermediao4" onclick="cambiarsinoc9p38intermedia('SI','c9p38intermediao4','c9p38intermediao4div','c9p38intermediadiv',11);" <?php if($arrayrespuestas['ec9p38intermediao4']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
           Lavar la ropa
          </label>
        </div>
        </div>  
        <div id="c9p38intermediao5div" <?php if($arrayrespuestas['ec9p38intermediao5']==''|| $arrayrespuestas['ec9p38intermediao5']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="c9p38intermediao5" id="c9p38intermediao5" onclick="cambiarsinoc9p38intermedia('SI','c9p38intermediao5','c9p38intermediao5div','c9p38intermediadiv',11);" <?php if($arrayrespuestas['ec9p38intermediao5']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
           Cuidado de la Huerta
          </label>
        </div>
        </div>
        <div id="c9p38intermediao6div" <?php if($arrayrespuestas['ec9p38intermediao6']=='' || $arrayrespuestas['ec9p38intermediao6']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
            <label> <!--en este caso se manda a la fincion javascript el nombre del campo-->
              <input type="checkbox" name="c9p38intermediao6" id="c9p38intermediao6" onclick="cambiarsinoc9p38intermedia('SI','c9p38intermediao6','c9p38intermediao6div','c9p38intermediadiv',11);" <?php if($arrayrespuestas['ec9p38intermediao6']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
           Buscar leña
            </label>
        </div>
        </div>
        <div id="c9p38intermediao7div" <?php if($arrayrespuestas['ec9p38intermediao7']=='' || $arrayrespuestas['ec9p38intermediao7']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
            <label> <!--en este caso se manda a la fincion javascript el nombre del campo-->
              <input type="checkbox" name="c9p38intermediao7" id="c9p38intermediao7" onclick="cambiarsinoc9p38intermedia('SI','c9p38intermediao7','c9p38intermediao7div','c9p38intermediadiv',11);" <?php if($arrayrespuestas['ec9p38intermediao7']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            Alimentar animales
            </label>
        </div>
        </div>
        <div id="c9p38intermediao8div" <?php if($arrayrespuestas['ec9p38intermediao8']=='' || $arrayrespuestas['ec9p38intermediao8']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
            <label> <!--en este caso se manda a la fincion javascript el nombre del campo-->
              <input type="checkbox" name="c9p38intermediao8" id="c9p38intermediao8" onclick="cambiarsinoc9p38intermedia('SI','c9p38intermediao8','c9p38intermediao8div','c9p38intermediadiv',11);" <?php if($arrayrespuestas['ec9p38intermediao8']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            Cuidado de niños menores
            </label>
        </div>
        </div>
        <div id="c9p38intermediao9div" <?php if($arrayrespuestas['ec9p38intermediao9']=='' || $arrayrespuestas['ec9p38intermediao9']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
            <label> <!--en este caso se manda a la fincion javascript el nombre del campo-->
              <input type="checkbox" name="c9p38intermediao9" id="c9p38intermediao9" onclick="cambiarsinoc9p38intermedia('SI','c9p38intermediao9','c9p38intermediao9div','c9p38intermediadiv',11);" <?php if($arrayrespuestas['ec9p38intermediao9']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            No ayudo a mis padres en ninguna actividad
            </label>
        </div>
        </div>
        <div id="c9p38intermediao10div" <?php if($arrayrespuestas['ec9p38intermediao10']=='' || $arrayrespuestas['ec9p38intermediao10']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
            <label> <!--en este caso se manda a la fincion javascript el nombre del campo-->
              <input type="checkbox" name="c9p38intermediao10" id="c9p38intermediao10" onclick="cambiarsinoc9p38intermedia('SI','c9p38intermediao10','c9p38intermediao10div','c9p38intermediadiv',11);" <?php if($arrayrespuestas['ec9p38intermediao10']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
             Otras. Cuál?
            </label>
        </div>
        </div>
        <div class="row" id="c9p38intermediacualmostrar" name="c9p38intermediacualmostrar" <?php if($arrayrespuestas['ec9p38intermediao10']== 'NO'||$arrayrespuestas['ec9p38intermediao10']== ''){echo('style="display:none"');}else{echo('');}  ?> >
        <div  id="c9p38intermediacualdiv" name="c9p38intermediacualdiv" class="form-group col-md-3">
                       <label class="control-label">Cual?</label>
                       <input type="text" class="form-control text-uppercase" id="c9p38intermediacual" onkeypress="return soloLetras(event)"  onchange="validarcampotexcuadros('c9p38intermediacualdiv','c9p38intermediacual','6')" name="c9p38intermediacual"   placeholder="Cual?" value="<?php if($arrayrespuestas['ec9p38intermediacual'] == ''){echo('0');}else{ echo($arrayrespuestas['ec9p38intermediacual']);} ?>">
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

            <!--inicio botonera guardar y actualizar-->
            <?php if($arrayrespuestas['ec9p38intermediao1']=="" & $arrayrespuestas['ec9p38intermediao2']=="" & $arrayrespuestas['ec9p38intermediao3']=="" & $arrayrespuestas['ec9p38intermediacual']=="")
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
                          data: {vfolio : $('#folio').val(),vidintegrante : $('#idintegrante').val(), vc9p38intermediao1 : $('#c9p38intermediao1').val(), vc9p38intermediao2 : $('#c9p38intermediao2').val(),
                          vc9p38intermediao3 : $('#c9p38intermediao3').val(), vc9p38intermediao4 : $('#c9p38intermediao4').val(), vc9p38intermediao5 : $('#c9p38intermediao5').val(), vc9p38intermediao6 : $('#c9p38intermediao6').val(),
                          vc9p38intermediao7 : $('#c9p38intermediao7').val(), vc9p38intermediao8 : $('#c9p38intermediao8').val(), vc9p38intermediao9 : $('#c9p38intermediao9').val(), vc9p38intermediao10 : $('#c9p38intermediao10').val(),vc9p38intermediacual : $('#c9p38intermediacual').val()},    
                          dataType: "html",
                          success : function(obj){                      
                          botonguardar();
                          saltarc9p38intermedia();
                          }
                        });                    
        });

        
        $("#actualizar").click(function ()
        {
                        $.ajax({
                          url: "fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),vidintegrante : $('#idintegrante').val(), vc9p38intermediao1 : $('#c9p38intermediao1').val(), vc9p38intermediao2 : $('#c9p38intermediao2').val(),
                          vc9p38intermediao3 : $('#c9p38intermediao3').val(), vc9p38intermediao4 : $('#c9p38intermediao4').val(), vc9p38intermediao5 : $('#c9p38intermediao5').val(), vc9p38intermediao6 : $('#c9p38intermediao6').val(),
                          vc9p38intermediao7 : $('#c9p38intermediao7').val(), vc9p38intermediao8 : $('#c9p38intermediao8').val(), vc9p38intermediao9 : $('#c9p38intermediao9').val(), vc9p38intermediao10 : $('#c9p38intermediao10').val(),vc9p38intermediacual : $('#c9p38intermediacual').val()},    
                          dataType: "html",
                          success : function(obj){                      
                          botonguardar();
                          saltarc9p38intermedia();
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
         location.href = "../c_c9p39intermedia/fc_c9p39intermedia?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    

        });
              
        $("#anterior").click(function ()
        {
         botonanterior();
         location.href = "../c_c9p37intermedia/fc_c9p37intermedia?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
        
        });


cargardatosgenerales('<?php echo($arraydatosgenerales['ecapitulo']); ?>','Pregunta 2 de 7','<?php echo($arraydatosgenerales['enomcoges']); ?>','<?php echo($arraydatosgenerales['enombreintegrante']." "." - "." "."Sexo:"." ".$arraydatosgenerales['esexointegrante']."   "."  -  "."   "."Edad:"."   ".$arraydatosgenerales['eedadintegrante']); ?>','30');
//control del boton ayuda
botonayuda();

});

//dea aca para abajo es logica de cuadros
function cambiarsinoc9p38intermedia(opcion,campoval,divcampo,divcompleto,campos,mostrar)
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
    if(campoval == 'c9p38intermediao10')
        {
            if($('#' + campoval).val() == 'SI')
            {
                //alert('aca lo muestra');
                $('#c9p38intermediacualmostrar').show(1000);
                $('#c9p38intermediacual').val('');
                $('#c9p38intermediacualdiv').addClass(' has-error');            

            }
            else
            {
                //alert('aca lo oculta');
                $('#c9p38intermediacualmostrar').hide(1000);
                $('#c9p38intermediacual').val('98');
                $('#c9p38intermediacualdiv').removeClass(' has-error');
  
            }
        }
       if(campoval == 'c9p38intermediao9')
           {
            if($('#' + campoval).val() == 'SI')
            {
              $('#c9p38intermediao1').prop('checked' , false);
              $('#c9p38intermediao1div').addClass(' has-error');
              $('#c9p38intermediao2').prop('checked' , false);
              $('#c9p38intermediao2div').addClass(' has-error');
              $('#c9p38intermediao3').prop('checked' , false);
              $('#c9p38intermediao3div').addClass(' has-error');
              $('#c9p38intermediao4').prop('checked' , false);
              $('#c9p38intermediao4div').addClass(' has-error');
              $('#c9p38intermediao5').prop('checked' , false);
              $('#c9p38intermediao5div').addClass(' has-error');
              $('#c9p38intermediao6').prop('checked' , false);
              $('#c9p38intermediao6div').addClass(' has-error');
              $('#c9p38intermediao7').prop('checked' , false);
              $('#c9p38intermediao7div').addClass(' has-error');
              $('#c9p38intermediao8').prop('checked' , false);
              $('#c9p38intermediao8div').addClass(' has-error');
              $('#c9p38intermediao10').prop('checked' , false);
              $('#c9p38intermediao10div').addClass(' has-error');
              
              $('#c9p38intermediacualmostrar').hide(1000);
              $('#c9p38intermediacual').val('98');
                            
              $('#c9p38intermediao1').val('NO');
              $('#c9p38intermediao2').val('NO');
              $('#c9p38intermediao3').val('NO');
              $('#c9p38intermediao4').val('NO');
              $('#c9p38intermediao5').val('NO');
              $('#c9p38intermediao6').val('NO');
              $('#c9p38intermediao7').val('NO');
              $('#c9p38intermediao8').val('NO');
              $('#c9p38intermediao10').val('NO');
              
              }
}
        else
       {
          $('#c9p38intermediao9').prop('checked' , false); 
          $('#c9p38intermediao9').val('NO');
          $('#c9p38intermediao9div').addClass(' has-error');
      }
        


      validarcuadrosc9p38intermedia(divcompleto,campos);
}

function validarcuadrosc9p38intermedia(divcuadro,ncampos)
{
    
    if ($('#c9p38intermediacual').val() != '')
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

    validarcuadrosc9p38intermedia(div,ncampos);
}


function saltarc9p38intermedia()
{
    if ($('#c9p38intermediao9').val()=== 'SI'  && $('#c9p37o11').val()=== 'SI'  && $('#c9p39o7').val()=== 'SI')
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