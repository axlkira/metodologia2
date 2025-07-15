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
        <div id="c9p35div" name="c9p35div" class="form-group col-md-12 form-group-sm">
        <div id="c9p35o0div" class="has-error">
        <label class="control-label">5.Ha recibido financiamiento para emprendimiento y/o fortalecimiento para su unidad productiva en las siguientes modalidades
                    
            <button type="button" id="vayuda" name="vayuda" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModal">
                        <span class="glyphicon glyphicon-question-sign" aria-hidden="true"></span> Ayuda
                    </button>       
        </label>
        </div>
            
        <div id="c9p35o1div" <?php if($arrayrespuestas['ec9p35o1']=='' || $arrayrespuestas['ec9p35o1']=='NO' || $arrayrespuestas['ec9p35o1']=='98'){echo('class=" has-error"');}?>>
        <div class="checkbox">
            <label> <!--en este caso se manda a la fincion javascript el nombre del campo-->
              <input type="checkbox" name="c9p35o1" id="c9p35o1" onclick="cambiarsinoc9p35('SI','c9p35o1','c9p35o1div','c9p35div',9);" <?php if($arrayrespuestas['ec9p35o1']=='SI'){echo('value="SI" checked');}else{echo('value="NO" ');}?>>
            Credito con entidad financiera
            </label>
        </div>
        </div>
             
            
        <div id="c9p35o2div" <?php if($arrayrespuestas['ec9p35o2']=='' || $arrayrespuestas['ec9p35o2']=='NO' || $arrayrespuestas['ec9p35o2']=='98'){echo('class=" has-error"');}?>>
        <div class="checkbox">
            <label> <!--en este caso se manda a la fincion javascript el nombre del campo-->
              <input type="checkbox" name="c9p35o2" id="c9p35o2" onclick="cambiarsinoc9p35('SI','c9p35o2','c9p35o2div','c9p35div',9);" <?php if($arrayrespuestas['ec9p35o2']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
           Credito con agioista o paga diario
            </label>
        </div>
        </div> 
       
            
        <div id="c9p35o3div" <?php if($arrayrespuestas['ec9p35o3']=='' || $arrayrespuestas['ec9p35o3']=='NO' || $arrayrespuestas['ec9p35o3']=='98'){echo('class=" has-error"');}?>>
        <div class="checkbox">
            <label> <!--en este caso se manda a la fincion javascript el nombre del campo-->
              <input type="checkbox" name="c9p35o3" id="c9p35o3" onclick="cambiarsinoc9p35('SI','c9p35o3','c9p35o3div','c9p35div',9);" <?php if($arrayrespuestas['ec9p35o3']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
             Recursos propios
            </label>
        </div>
        </div> 
          
         <div id="c9p35o4div" <?php if($arrayrespuestas['ec9p35o4']=='' || $arrayrespuestas['ec9p35o4']=='NO' || $arrayrespuestas['ec9p35o4']=='98'){echo('class=" has-error"');}?>>
        <div class="checkbox">
            <label> <!--en este caso se manda a la fincion javascript el nombre del campo-->
              <input type="checkbox" name="c9p35o4" id="c9p35o4" onclick="cambiarsinoc9p35('SI','c9p35o4','c9p35o4div','c9p35div',9);" <?php if($arrayrespuestas['ec9p35o4']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
          Créditos con fondos de emprendimiento
            </label>
        </div>
        </div>
            
        <div id="c9p35o5div" <?php if($arrayrespuestas['ec9p35o5']=='' || $arrayrespuestas['ec9p35o5']=='NO' || $arrayrespuestas['ec9p35o5']=='98'){echo('class=" has-error"');}?>>
        <div class="checkbox">
            <label> <!--en este caso se manda a la fincion javascript el nombre del campo-->
              <input type="checkbox" name="c9p35o5" id="c9p35o5" onclick="cambiarsinoc9p35('SI','c9p35o5','c9p35o5div','c9p35div',9);" <?php if($arrayrespuestas['ec9p35o5']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
          Donaciones
            </label>
        </div>
        </div>
            
        <div id="c9p35o6div" <?php if($arrayrespuestas['ec9p35o6']=='' || $arrayrespuestas['ec9p35o6']=='NO' || $arrayrespuestas['ec9p35o6']=='98'){echo('class=" has-error"');}?>>
        <div class="checkbox">
            <label> <!--en este caso se manda a la fincion javascript el nombre del campo-->
              <input type="checkbox" name="c9p35o6" id="c9p35o6" onclick="cambiarsinoc9p35('SI','c9p35o6','c9p35o6div','c9p35div',9);" <?php if($arrayrespuestas['ec9p35o6']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
          Subsidios
            </label>
        </div>
        </div>
            
        <div id="c9p35o7div" <?php if($arrayrespuestas['ec9p35o7']=='' || $arrayrespuestas['ec9p35o7']=='NO' || $arrayrespuestas['ec9p35o7']=='98'){echo('class=" has-error"');}?>>
        <div class="checkbox">
            <label> <!--en este caso se manda a la fincion javascript el nombre del campo-->
              <input type="checkbox" name="c9p35o7" id="c9p35o7" onclick="cambiarsinoc9p35('SI','c9p35o7','c9p35o7div','c9p35div',9);" <?php if($arrayrespuestas['ec9p35o7']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
         Otros
            </label>
        </div>
        </div>
            
                
       
         
      <div id="c9p35o8div" <?php if($arrayrespuestas['ec9p35o8']=='' || $arrayrespuestas['ec9p35o8']=='NO' || $arrayrespuestas['ec9p35o8']=='98'){echo('class=" has-error"');}?>>
        <div class="checkbox">
            <label> <!--en este caso se manda a la fincion javascript el nombre del campo-->
              <input type="checkbox" name="c9p35o8" id="c9p35o8" onclick="cambiarsinoc9p35('SI','c9p35o8','c9p35o8div','c9p35div',9);" <?php if($arrayrespuestas['ec9p35o8']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
          Ninguna
            </label>
        </div>
        </div>      
            
        <div id="c9p35o9div" <?php if($arrayrespuestas['ec9p35o9']=='' || $arrayrespuestas['ec9p35o9']=='NO' || $arrayrespuestas['ec9p35o9']=='98'){echo('class=" has-error"');}?>>
        <div class="checkbox">
            <label> <!--en este caso se manda a la fincion javascript el nombre del campo-->
              <input type="checkbox" name="c9p35o9" id="c9p35o9" onclick="cambiarsinoc9p35('SI','c9p35o9','c9p35o9div','c9p35div',9);" <?php if($arrayrespuestas['ec9p35o9']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
          No necesita financiamiento
            </label>
        </div>
        </div>    
            
         <div  id="c9p35o7cualmostrar" name="c9p35o7cualmostrar" <?php if( $arrayrespuestas['ec9p35o7cual']=='' || $arrayrespuestas['ec9p35o7cual']=='98'){echo('style="display:none"');}?> >
        <div  id="c9p35o7cualdiv" name="c9p35o7cualdiv" class="form-group col-md-3">
        <label class="control-label">Cual?</label>
        <input type="text" class="form-control text-uppercase" id="c9p35o7cual" onkeypress="return soloLetras(event)"  onchange="validarcampotexcuadros('c9p35o7cualmostrar','c9p35o7cual','4')" name="c9p35o7cual" value="<?php if($arrayrespuestas['ec9p35o7cual'] == ''){}else{ echo($arrayrespuestas['ec9p35o7cual']);} ?>">
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
            <?php if($arrayrespuestas['ec9p35o1']=="" & $arrayrespuestas['ec9p35o2']=="" & $arrayrespuestas['ec9p35o3']==""& $arrayrespuestas['ec9p35o4']==""& $arrayrespuestas['ec9p35o5']==""& $arrayrespuestas['ec9p35o6']==""& $arrayrespuestas['ec9p35o7']=="")
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
                          vc9p35o1 : $('#c9p35o1').val(),
                          vc9p35o2 : $('#c9p35o2').val(),
                          vc9p35o3 : $('#c9p35o3').val(),
                          vc9p35o4 : $('#c9p35o4').val(),
                          vc9p35o5 : $('#c9p35o5').val(),
                          vc9p35o6 : $('#c9p35o6').val(),
                          vc9p35o7 : $('#c9p35o7').val(),
                          vc9p35o7cual : $('#c9p35o7cual').val(),vc9p35o8 : $('#c9p35o8').val(),vc9p35o9 : $('#c9p35o9').val()},                      
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
                          vc9p35o1 : $('#c9p35o1').val(),
                          vc9p35o2 : $('#c9p35o2').val(),
                          vc9p35o3 : $('#c9p35o3').val(),
                          vc9p35o4 : $('#c9p35o4').val(),
                          vc9p35o5 : $('#c9p35o5').val(),
                          vc9p35o6 : $('#c9p35o6').val(),
                          vc9p35o7 : $('#c9p35o7').val(),
                          vc9p35o7cual : $('#c9p35o7cual').val(),vc9p35o8 : $('#c9p35o8').val(),vc9p35o9 : $('#c9p35o9').val()},                      
                          dataType: "html",
                          success : function(obj){                      
                          botonguardar();
                          }
                        });                    
        });
        

        $("#siguiente").click(function ()
        {
         botonsiguiente();
         
         location.href = "../c_c9p36/fc_c9p36?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val();                    

        });

              
        $("#anterior").click(function ()
        {
         botonanterior();
         location.href = "../c_c9p34/fc_c9p34?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
        });

//para cargar variables capitulo, pregunta,encuestador,vivienda,barra



cargardatosgenerales('<?php echo($arraydatosgenerales['ecapitulo']); ?>','Pregunta 5 de 6','<?php echo($arraydatosgenerales['enomcoges']); ?>','<?php echo($arraydatosgenerales['enombreintegrante']." "." - "." "."Sexo:"." ".$arraydatosgenerales['esexointegrante']."   "."  -  "."   "."Edad:"."   ".$arraydatosgenerales['eedadintegrante']); ?>','75');
//control del boton ayuda
botonayuda();

});
//dea aca para abajo es logica de cuadros
function cambiarsinoc9p35(opcion,campoval,divcampo,divcompleto,campos)
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
    
       
        if(campoval == 'c9p35o7')
        {
            if($('#' + campoval).val() == 'SI')
            {
                //alert('aca lo muestra');
                $('#c9p35o7cualmostrar').show(1000);
                $('#c9p35o7cual').val('');
                $('#c9p35o7cualdiv').addClass(' has-error');            

            }
            else
            {
                //alert('aca lo oculta');
                $('#c9p35o7cualmostrar').hide(1000);
                $('#c9p35o7cual').val('98');
                $('#c9p35o7cualdiv').removeClass(' has-error');
  
            }
        }
     
             if(campoval == 'c9p35o8')
           {
            if($('#' + campoval).val() == 'SI')
            {
              $('#c9p35o1').prop('checked' , false);
              $('#c9p35o1div').addClass(' has-error');
              $('#c9p35o2').prop('checked' , false);
              $('#c9p35o2div').addClass(' has-error');
              $('#c9p35o3').prop('checked' , false);
              $('#c9p35o3div').addClass(' has-error');
              $('#c9p35o4').prop('checked' , false);
              $('#c9p35o4div').addClass(' has-error');
              $('#c9p35o5').prop('checked' , false);
              $('#c9p35o5div').addClass(' has-error');
              $('#c9p35o6').prop('checked' , false);
              $('#c9p35o6div').addClass(' has-error');
              $('#c9p35o7').prop('checked' , false);
              $('#c9p35o7div').addClass(' has-error');
              $('#c9p35o9').prop('checked' , false);
              $('#c9p35o9div').addClass(' has-error');
              
              $('#c9p35o7cualmostrar').hide(1000);
              $('#c9p35o7cual').val('98');
                            
              $('#c9p35o1').val('NO');
              $('#c9p35o2').val('NO');
              $('#c9p35o3').val('NO');
              $('#c9p35o4').val('NO');
              $('#c9p35o5').val('NO');
              $('#c9p35o6').val('NO');
              $('#c9p35o7').val('NO');
              $('#c9p35o9').val('NO');
              
              }
}
        else
       {
          $('#c9p35o8').prop('checked' , false); 
          $('#c9p35o8').val('NO');
          $('#c9p35o8div').addClass(' has-error');
      }
        
        if(campoval == 'c9p35o9')
           {
            if($('#' + campoval).val() == 'SI')
            {
              $('#c9p35o1').prop('checked' , false);
              $('#c9p35o1div').addClass(' has-error');
              $('#c9p35o2').prop('checked' , false);
              $('#c9p35o2div').addClass(' has-error');
              $('#c9p35o3').prop('checked' , false);
              $('#c9p35o3div').addClass(' has-error');
              $('#c9p35o4').prop('checked' , false);
              $('#c9p35o4div').addClass(' has-error');
              $('#c9p35o5').prop('checked' , false);
              $('#c9p35o5div').addClass(' has-error');
              $('#c9p35o6').prop('checked' , false);
              $('#c9p35o6div').addClass(' has-error');
              $('#c9p35o7').prop('checked' , false);
              $('#c9p35o7div').addClass(' has-error');
              $('#c9p35o8').prop('checked' , false);
              $('#c9p35o8div').addClass(' has-error');
              
              $('#c9p35o7cualmostrar').hide(1000);
              $('#c9p35o7cual').val('98');
                            
              $('#c9p35o1').val('NO');
              $('#c9p35o2').val('NO');
              $('#c9p35o3').val('NO');
              $('#c9p35o4').val('NO');
              $('#c9p35o5').val('NO');
              $('#c9p35o6').val('NO');
              $('#c9p35o7').val('NO');
              $('#c9p35o8').val('NO');
              
              }
}
        else
       {
          $('#c9p35o9').prop('checked' , false); 
          $('#c9p35o9').val('NO');
          $('#c9p35o9div').addClass(' has-error');
      }
        
        
        
        
      validarcuadrosc9p35(divcompleto,campos);
}
function validarcuadrosc9p35(divcuadro,ncampos)
{
    //alert($('#' + divcuadro).find('input').prop('checked', true).length);
    //alert($('.has-error').length);
    //alert(ncampos + ' ncampos');
    
   
        //|| $('#c3p2cualdiv')===('form-group col-md-10 form-group-sm has-error')
        if($('.has-error').length === (ncampos + 1))
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
   

function validarcampotexcuadros(div,campo,ncampos)
{
    validarbolitasytexto(div,campo);

    validarcuadrosc9p35(div,ncampos);
}</script>
</html>