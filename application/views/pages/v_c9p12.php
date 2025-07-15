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
        <div id="c9p12div" name="c9p12div" class="form-group col-md-12 form-group-sm">
        <div id="c9p12o0div" class="has-error">
        <label class="control-label">5. Además del salario en dinero, ¿el mes pasado recibió alguna de las siguientes modalidades como parte de pago por su trabajo?  (Seleccion Multiple)
                    
            <button type="button" id="vayuda" name="vayuda" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModal">
                        <span class="glyphicon glyphicon-question-sign" aria-hidden="true"></span> Ayuda
                    </button>       
        </label>
        </div>
            
        <div id="c9p12o1div" <?php if($arrayrespuestas['ec9p12o1']=='' || $arrayrespuestas['ec9p12o1']=='NO' || $arrayrespuestas['ec9p12o1']=='98'){echo('class=" has-error"');}?>>
        <div class="checkbox">
            <label> <!--en este caso se manda a la fincion javascript el nombre del campo-->
              <input type="checkbox" name="c9p12o1" id="c9p12o1" onclick="cambiarsinoc9p12('SI','c9p12o1','c9p12o1div','c9p12div',4);" <?php if($arrayrespuestas['ec9p12o1']=='SI'){echo('value="SI" checked');}else{echo('value="NO" ');}?>>
            Alimentacion
            </label>
        </div>
        </div>
            
        <div id="c9p12o2div" <?php if($arrayrespuestas['ec9p12o2']=='' || $arrayrespuestas['ec9p12o2']=='NO' || $arrayrespuestas['ec9p12o2']=='98'){echo('class=" has-error"');}?>>
        <div class="checkbox">
            <label> <!--en este caso se manda a la fincion javascript el nombre del campo-->
              <input type="checkbox" name="c9p12o2" id="c9p12o2" onclick="cambiarsinoc9p12('SI','c9p12o2','c9p12o2div','c9p12div',4);" <?php if($arrayrespuestas['ec9p12o2']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            Vivienda
            </label>
        </div>
        </div> 
            
        <div id="c9p12o3div" <?php if($arrayrespuestas['ec9p12o3']=='' || $arrayrespuestas['ec9p12o3']=='NO' || $arrayrespuestas['ec9p12o3']=='98'){echo('class=" has-error"');}?>>
        <div class="checkbox">
            <label> <!--en este caso se manda a la fincion javascript el nombre del campo-->
              <input type="checkbox" name="c9p12o3" id="c9p12o3" onclick="cambiarsinoc9p12('SI','c9p12o3','c9p12o3div','c9p12div',4);" <?php if($arrayrespuestas['ec9p12o3']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
             En especie (Electrodomésticos, Vestidos, Otros Productos Diferentes a Alimentos o bonos como Sodexo)
            </label>
        </div>
        </div> 
            
        <div id="c9p12o4div" <?php if($arrayrespuestas['ec9p12o4']=='' || $arrayrespuestas['ec9p12o4']=='NO' || $arrayrespuestas['ec9p12o4']=='98'){echo('class=" has-error"');}?>>
        <div class="checkbox">
            <label> <!--en este caso se manda a la fincion javascript el nombre del campo-->
              <input type="checkbox" name="c9p12o4" id="c9p12o4" onclick="cambiarsinoc9p12('SI','c9p12o4','c9p12o4div','c9p12div',4);" <?php if($arrayrespuestas['ec9p12o4']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
             No recibió
            </label>
        </div>
        </div>     
            <br>
            
        <div class="row" id="c9p12cuantomostrar" name="c9p12cuantomostrar" <?php if($arrayrespuestas['ec9p12o4']=='SI'|| $arrayrespuestas['ec9p12cuanto']==''){echo('style="display:none"');}?> >
        <div  id="c9p12cuantodiv" name="c9p12cuantodiv" class="form-group col-md-3">
        <label class="control-label">En Cuanto estima lo que recibio?</label>
        <input type="text" class="form-control text-uppercase" id="c9p12cuanto" onkeypress="return soloNumeros(event)"  onchange="validarcampotexcuadros('c9p12cuantodiv','c9p12cuanto','4')" name="c9p12cuanto" value="<?php if($arrayrespuestas['ec9p12cuanto'] == ''){}else{ echo($arrayrespuestas['ec9p12cuanto']);} ?>">
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
            <?php if($arrayrespuestas['ec9p12o1']=="" & $arrayrespuestas['ec9p12o2']=="" & $arrayrespuestas['ec9p12o3']==""& $arrayrespuestas['ec9p12o4']=="")
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
                          vc9p12o1 : $('#c9p12o1').val(),          
                          vc9p12o2 : $('#c9p12o2').val(),
                          vc9p12o3 : $('#c9p12o3').val(),
                          vc9p12o4 : $('#c9p12o4').val(),                          
                          vc9p12cuanto : $('#c9p12cuanto').val()},                      
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
                          vc9p12o1 : $('#c9p12o1').val(),          
                          vc9p12o2 : $('#c9p12o2').val(),
                          vc9p12o3 : $('#c9p12o3').val(),
                          vc9p12o4 : $('#c9p12o4').val(),                          
                          vc9p12cuanto : $('#c9p12cuanto').val()},                      
                          dataType: "html",
                          success : function(obj){                      
                          botonguardar();
                          }
                        });                    
        });
        

        $("#siguiente").click(function ()
        {
         botonsiguiente();
         
         location.href = "../c_c9p13/fc_c9p13?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val();                    

        });

              
        $("#anterior").click(function ()
        {
         botonanterior();
         location.href = "../c_c9p11/fc_c9p11?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
        });

//para cargar variables capitulo, pregunta,encuestador,vivienda,barra



cargardatosgenerales('<?php echo($arraydatosgenerales['ecapitulo']); ?>','Pregunta 5 de 16','<?php echo($arraydatosgenerales['enomcoges']); ?>','<?php echo($arraydatosgenerales['enombreintegrante']." "." - "." "."Sexo:"." ".$arraydatosgenerales['esexointegrante']."   "."  -  "."   "."Edad:"."   ".$arraydatosgenerales['eedadintegrante']); ?>','26');
//control del boton ayuda
botonayuda();

});
//dea aca para abajo es logica de cuadros
function cambiarsinoc9p12(opcion,campoval,divcampo,divcompleto,campos)
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
    
    if(campoval == 'c9p12o1' || campoval == 'c9p12o2' || campoval == 'c9p12o3' )
            {  
                //alert('aca lo muestra');
                $('#c9p12cuantomostrar').show(1000);
                $('#c9p12cuanto').val('');
                $('#c9p12cuantodiv').addClass('has-error');            

            }
            else
            {
                //alert('aca lo oculta');
                $('#c9p12cuantomostrar').hide(1000);
                $('#c9p12cuanto').val('98');
                $('#c9p12cuantodiv').removeClass(' has-error');
            }         
     
        if(campoval == 'c9p12o4')
           {
            if($('#' + campoval).val() == 'SI')
            {
              $('#c9p12o1').prop('checked' , false);
              $('#c9p12o1div').addClass(' has-error');
              $('#c9p12o2').prop('checked' , false);
              $('#c9p12o2div').addClass(' has-error');
              $('#c9p12o3').prop('checked' , false);
              $('#c9p12o3div').addClass(' has-error');
                           
              
              $('#c9p12cuantomostrar').hide(1000);
              $('#c9p12cuanto').val('98');             
                            
              $('#c9p12o1').val('NO');
              $('#c9p12o2').val('NO');
              $('#c9p12o3').val('NO');
                       
              }
}
        else
      {
          $('#c9p12o4').prop('checked' , false); 
          $('#c9p12o4').val('NO');
          $('#c9p12o4div').addClass(' has-error');
      }
      
        validarcuadrosc9p12(divcompleto,campos);
}

function validarcuadrosc9p12(divcuadro,ncampos)
{
    //alert($('#' + divcuadro).find('input').prop('checked', true).length);
    //alert($('.has-error').length);
    if ($('#c9p12cuanto').val() != '')
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

//function validarcuadrosc9p12(divcuadro,ncampos)
//{
//    //alert($('#' + divcuadro).find('input').prop('checked', true).length);
//    //alert($('.has-error').length);
//    //alert(ncampos + ' ncampos');
//    
//    if ($('#c9p12cuanto').val() != '')
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

    validarcuadrosc9p12(div,ncampos);
}

</script>
</html>