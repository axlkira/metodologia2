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
        <div id="c9p13div" name="c9p13div" class="form-group col-md-12 form-group-sm">
        <div id="c9p13o0div" class="has-error">
        <label class="control-label">6. ¿El mes pasado recibió? (Selección Múltiple)
                    
            <button type="button" id="vayuda" name="vayuda" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModal">
                        <span class="glyphicon glyphicon-question-sign" aria-hidden="true"></span> Ayuda
                    </button>       
        </label>
        </div>
            
        <div id="c9p13o1div" <?php if($arrayrespuestas['ec9p13o1']=='' || $arrayrespuestas['ec9p13o1']=='NO' || $arrayrespuestas['ec9p13o1']=='98'){echo('class=" has-error"');}?>>
        <div class="checkbox">
            <label> <!--en este caso se manda a la fincion javascript el nombre del campo-->
              <input type="checkbox" name="c9p13o1" id="c9p13o1" onclick="cambiarsinoc9p13('SI','c9p13o1','c9p13o1div','c9p13div',3);" <?php if($arrayrespuestas['ec9p13o1']=='SI'){echo('value="SI" checked');}else{echo('value="NO" ');}?>>
            a. Primas ? (técnica, de antiguedad,clima, orden publico,  otras, etc)
            </label>
        </div>
        </div>
            
        <div id="c9p13o2div" <?php if($arrayrespuestas['ec9p13o2']=='' || $arrayrespuestas['ec9p13o2']=='NO' || $arrayrespuestas['ec9p13o2']=='98'){echo('class=" has-error"');}?>>
        <div class="checkbox">
            <label> <!--en este caso se manda a la fincion javascript el nombre del campo-->
              <input type="checkbox" name="c9p13o2" id="c9p13o2" onclick="cambiarsinoc9p13('SI','c9p13o2','c9p13o2div','c9p13div',3);" <?php if($arrayrespuestas['ec9p13o2']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            b. Algún tipo de bonificación de carácter mensual
            </label>
        </div>
        </div> 
            
        <div id="c9p13o3div" <?php if($arrayrespuestas['ec9p13o3']=='' || $arrayrespuestas['ec9p13o3']=='NO' || $arrayrespuestas['ec9p13o3']=='98'){echo('class=" has-error"');}?>>
        <div class="checkbox">
            <label> <!--en este caso se manda a la fincion javascript el nombre del campo-->
              <input type="checkbox" name="c9p13o3" id="c9p13o3" onclick="cambiarsinoc9p13('SI','c9p13o3','c9p13o3div','c9p13div',3);" <?php if($arrayrespuestas['ec9p13o3']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
             c. No recibió
            </label>
        </div>
        </div> 
    
            
        <div class="row" id="c9p13cuantomostrar" name="c9p13cuantomostrar" <?php if($arrayrespuestas['ec9p13o3']=='SI'|| $arrayrespuestas['ec9p13cuanto']==''){echo('style="display:none"');}?> >
        <div  id="c9p13cuantodiv" name="c9p13cuantodiv" class="form-group col-md-3">
        <label class="control-label">En Cuanto estima lo que recibio?</label>
        <input type="text" class="form-control text-uppercase" id="c9p13cuanto" onkeypress="return soloNumeros(event)"  onchange="validarcampotexcuadros('c9p13cuantodiv','c9p13cuanto','3')" name="c9p13cuanto" value="<?php if($arrayrespuestas['ec9p13cuanto'] == ''){}else{ echo($arrayrespuestas['ec9p13cuanto']);} ?>">
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
            <?php if($arrayrespuestas['ec9p13o1']=="" & $arrayrespuestas['ec9p13o2']=="" & $arrayrespuestas['ec9p13o3']=="")
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
                          vc9p13o1 : $('#c9p13o1').val(),          
                          vc9p13o2 : $('#c9p13o2').val(),
                          vc9p13o3 : $('#c9p13o3').val(),                                                  
                          vc9p13cuanto : $('#c9p13cuanto').val()},                      
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
                          vc9p13o1 : $('#c9p13o1').val(),          
                          vc9p13o2 : $('#c9p13o2').val(),
                          vc9p13o3 : $('#c9p13o3').val(),                                                 
                          vc9p13cuanto : $('#c9p13cuanto').val()},                      
                          dataType: "html",
                          success : function(obj){                      
                          botonguardar();
                          }
                        });                    
        });
        

        $("#siguiente").click(function ()
        {
         botonsiguiente();
         
         location.href = "../c_c9p14/fc_c9p14?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val();                    

        });

              
        $("#anterior").click(function ()
        {
         botonanterior();
         location.href = "../c_c9p12/fc_c9p12?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
        });

//para cargar variables capitulo, pregunta,encuestador,vivienda,barra



cargardatosgenerales('<?php echo($arraydatosgenerales['ecapitulo']); ?>','Pregunta 6 de 16','<?php echo($arraydatosgenerales['enomcoges']); ?>','<?php echo($arraydatosgenerales['enombreintegrante']." "." - "." "."Sexo:"." ".$arraydatosgenerales['esexointegrante']."   "."  -  "."   "."Edad:"."   ".$arraydatosgenerales['eedadintegrante']); ?>','32');
//control del boton ayuda
botonayuda();

});
//dea aca para abajo es logica de cuadros
function cambiarsinoc9p13(opcion,campoval,divcampo,divcompleto,campos)
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
    
    if(campoval == 'c9p13o1' || campoval == 'c9p13o2')
            {  
                //alert('aca lo muestra');
                $('#c9p13cuantomostrar').show(1000);
                $('#c9p13cuanto').val('');
                $('#c9p13cuantodiv').addClass('has-error');            

            }
            else
            {
                //alert('aca lo oculta');
                $('#c9p13cuantomostrar').hide(1000);
                $('#c9p13cuanto').val('98');
                $('#c9p13cuantodiv').removeClass(' has-error');
            }         
     
        if(campoval == 'c9p13o3')
           {
            if($('#' + campoval).val() == 'SI')
            {
              $('#c9p13o1').prop('checked' , false);
              $('#c9p13o1div').addClass(' has-error');
              $('#c9p13o2').prop('checked' , false);
              $('#c9p13o2div').addClass(' has-error');              
                           
              
              $('#c9p13cuantomostrar').hide(1000);
              $('#c9p13cuanto').val('98');             
                            
              $('#c9p13o1').val('NO');
              $('#c9p13o2').val('NO');
              
                       
              }
}
        else
      {
          $('#c9p13o3').prop('checked' , false); 
          $('#c9p13o3').val('NO');
          $('#c9p13o3div').addClass(' has-error');
      }
      
        validarcuadrosc9p13(divcompleto,campos);
}

function validarcuadrosc9p13(divcuadro,ncampos)
{
    //alert($('#' + divcuadro).find('input').prop('checked', true).length);
    //alert($('.has-error').length);
    if ($('#c9p13cuanto').val() != '')
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

//function validarcuadrosc9p13(divcuadro,ncampos)
//{
//    //alert($('#' + divcuadro).find('input').prop('checked', true).length);
//    //alert($('.has-error').length);
//    //alert(ncampos + ' ncampos');
//    
//    if ($('#c9p13cuanto').val() != '')
//    {
//        //|| $('#c3p2cualdiv')===('form-group col-md-10 form-group-sm has-error')
//        if($('.has-error').length === (ncampos + 1))
//    {   //alert('soniguales');
//       $('#guardar').prop('disabled', true);
//       $('#actualizar').prop('disabled', true);
//       $('#cancelar').prop('disabled', true);
//       $('#anterior').prop('disabled', false);
//       $('#siguiente').prop('disabled', false);
//    }
//    else
//    {
//       $('#guardar').prop('disabled', false);
//       $('#actualizar').prop('disabled', false);
//       $('#cancelar').prop('disabled', false);
//       $('#anterior').prop('disabled', true);
//       $('#siguiente').prop('disabled', true);       
//    }
    
function validarcampotexcuadros(div,campo,ncampos)
{
    validarbolitasytexto(div,campo);

    validarcuadrosc9p13(div,ncampos);
}

</script>
</html>