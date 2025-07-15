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
        <input type="text" class="form-control input-sm" id="edad" name="edad" style="display:none"  placeholder="" value="<?php echo($arraydatosgenerales['eedadintegrante']); ?>">
       <input type="text" class="form-control input-sm" id="sexo" name="sexo"  style="display:none"   placeholder="" value="<?php echo($arraydatosgenerales['esexointegrante']); ?>">
       <input type="text" class="form-control input-sm" id="c5p14" name="c5p14" style="display:none"  placeholder="" value="<?php echo($arrayrespuestas['ec5p14']); ?>">
        <!--fin para imprimir el idintegrante y llevarlo-->
<hr>
        <form class="form-group" name="formulario" id="formulario">

           <!--Check varias selecciones -->
    <div class="row">
        <div id="c5p131div" name="c5p131div" class="form-group col-md-12 form-group-sm">
        <div id="c5p131o0div" class="has-error">
        <label class="control-label">13.1 Razones de la no asistencia. Multiple respuesta 
                     <button type="button" id="vayuda" name="vayuda" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModal">
                        <span class="glyphicon glyphicon-question-sign" aria-hidden="true"></span> Ayuda
                    </button>       
        </label>
        </div>
        <div id="c5p131o1div" <?php if($arrayrespuestas['ec5p131o1']=='' || $arrayrespuestas['ec5p131o1']=='NO'|| $arrayrespuestas['ec5p131o1']=='98'){echo('class=" has-error"');}?>>
        <div class="checkbox">
            <label> <!--en este caso se manda a la fincion javascript el nombre del campo-->
              <input type="checkbox" name="c5p131o1" id="c5p131o1" onclick="cambiarsinoc5p131('SI','c5p131o1','c5p131o1div','c5p131div',5);" <?php if($arrayrespuestas['ec5p131o1']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            No hay citas disponibles
            </label>
        </div>
        </div>
        <div id="c5p131o2div" <?php if($arrayrespuestas['ec5p131o2']=='' || $arrayrespuestas['ec5p131o2']=='NO'|| $arrayrespuestas['ec5p131o2']=='98'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="c5p131o2" id="c5p131o2" onclick="cambiarsinoc5p131('SI','c5p131o2','c5p131o2div','c5p131div',5);" <?php if($arrayrespuestas['ec5p131o2']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            No cuenta con recursos para desplazarse
          </label>
        </div>
        </div>
        <div id="c5p131o3div" <?php if($arrayrespuestas['ec5p131o3']==''|| $arrayrespuestas['ec5p131o3']=='NO'|| $arrayrespuestas['ec5p131o3']=='98'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="c5p131o3" id="c5p131o3" onclick="cambiarsinoc5p131('SI','c5p131o3','c5p131o3div','c5p131div',5);" <?php if($arrayrespuestas['ec5p131o3']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            No tenia conocimiento de los controles
          </label>
        </div>
        </div>  
         
       <div id="c5p131o4div" <?php if($arrayrespuestas['ec5p131o4']==''|| $arrayrespuestas['ec5p131o4']=='NO'|| $arrayrespuestas['ec5p131o4']=='98'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="c5p131o4" id="c5p131o4" onclick="cambiarsinoc5p131('SI','c5p131o4','c5p131o4div','c5p131div',5);" <?php if($arrayrespuestas['ec5p131o4']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            No le interesa
          </label>
        </div>
        </div>
                
         <div id="c5p131o5div" <?php if($arrayrespuestas['ec5p131o5']==''|| $arrayrespuestas['ec5p131o5']=='NO'|| $arrayrespuestas['ec5p131o5']=='98'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="c5p131o5" id="c5p131o5" onclick="cambiarsinoc5p131('SI','c5p131o5','c5p131o5div','c5p131div',5);" <?php if($arrayrespuestas['ec5p131o5']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            Otra.
          </label>
        </div>
        </div>
        <div class="row" id="c5p131cualmostrar" name="c5p131cualmostrar" <?php if($arrayrespuestas['ec5p131o5']== 'NO'||$arrayrespuestas['ec5p131o5']== ''||$arrayrespuestas['ec5p131o5']== '98'){echo('style="display:none"');}else{echo('');}  ?> >
        <div  id="c5p131cualdiv" name="c5p131cualdiv" class="form-group col-md-3">
                       <label class="control-label">Cual?</label>
                       <input type="text" class="form-control text-uppercase" id="c5p131cual" onkeypress="return soloLetras(event)"  onchange="validarcampotexcuadros('c5p131cualdiv','c5p131cual','10')" name="c5p131cual"   placeholder="Cual?" value="<?php if($arrayrespuestas['ec5p131cual'] == ''){echo('0');}else{ echo($arrayrespuestas['ec5p131cual']);} ?>">
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
            <?php if($arrayrespuestas['ec5p131o1']=="" & $arrayrespuestas['ec5p131o2']=="" & $arrayrespuestas['ec5p131o3']==""& $arrayrespuestas['ec5p131o4']==""
                     & $arrayrespuestas['ec5p131o5']=="")
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
                          vc5p131o1 : $('#c5p131o1').val(),          
                          vc5p131o2 : $('#c5p131o2').val(),
                          vc5p131o3 : $('#c5p131o3').val(),
                          vc5p131o4 : $('#c5p131o4').val(),
                          vc5p131o5 : $('#c5p131o5').val(),                                                   
                          vc5p131cual : $('#c5p131cual').val()},
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
                          vc5p131o1 : $('#c5p131o1').val(),          
                          vc5p131o2 : $('#c5p131o2').val(),
                          vc5p131o3 : $('#c5p131o3').val(),
                          vc5p131o4 : $('#c5p131o4').val(),
                          vc5p131o5 : $('#c5p131o5').val(),                                                   
                          vc5p131cual : $('#c5p131cual').val()},
                          dataType: "html",
                          success : function(obj){                      
                          botonguardar();
                          }
                        });                    
        });
         $("#siguiente").click(function ()
       {
        botonsiguiente();
        if($('#edad').val() >= 6)
          {                $.ajax({
                           url: "../c_c5p14/fc_actualizar",
                           type: "GET",
                           data: {vfolio : $('#folio').val(),
                           vidintegrante : $('#idintegrante').val(),    
                           vvalorc5p14 : '98',
                           vvalorc5p14esquema : '98'},   
                           dataType: "html",
                           success : function(obj)
                           {
                          
                           location.href = "../c_capitulosintegrante/fc_capitulosintegrante?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                  
                           }
                          });
                          }
          else if (($('#edad').val() < 6 && $('#c5p14').val() === '98'))
          {                $.ajax({
                           url: "../c_c5p14/fc_actualizar",
                           type: "GET",
                           data: {vfolio : $('#folio').val(),
                           vidintegrante : $('#idintegrante').val(),
                           vvalorc5p14 : '',
                           vvalorc5p14esquema : ''},   
                           dataType: "html",
                           success : function(obj)
                           {
                           location.href = "../c_c5p14/fc_c5p14?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
                           }
                          });
                          }
          else
                {
                    location.href = "../c_c5p14/fc_c5p14?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
                }
            });
//        $("#siguiente").click(function ()
//        {
//         botonsiguiente();
//         location.href = "../c_c5p22/fc_c5p22?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
//        });
        $("#anterior").click(function ()
        {
         botonanterior();
         location.href = "../c_c5p13/fc_c5p13?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
        });
//para cargar variables capitulo, pregunta,encuestador,vivienda,barra
cargardatosgenerales('<?php echo($arraydatosgenerales['ecapitulo']); ?>','Pregunta 13.1 de 14','<?php echo($arraydatosgenerales['enomcoges']); ?>','<?php echo($arraydatosgenerales['enombreintegrante']." "." - "." "."Sexo:"." ".$arraydatosgenerales['esexointegrante']."   "."  -  "."   "."Edad:"."   ".$arraydatosgenerales['eedadintegrante']); ?>','98');
//control del boton ayuda
botonayuda();
});
//dea aca para abajo es logica de cuadros
function cambiarsinoc5p131(opcion,campoval,divcampo,divcompleto,campos)
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
    if(campoval == 'c5p131o5')
        {
            if($('#' + campoval).val() == 'SI')
            {
                //alert('aca lo muestra');
                $('#c5p131cualmostrar').show(1000);
                $('#c5p131cual').val('');
                $('#c5p131cualdiv').addClass(' has-error');            

            }
            else
            {
                //alert('aca lo oculta');
                $('#c5p131cualmostrar').hide(1000);
                $('#c5p131cual').val('98');
                $('#c5p131cualdiv').removeClass(' has-error');
  
            }
        }
    validarcuadrosc5p131(divcompleto,campos);
}

function validarcuadrosc5p131(divcuadro,ncampos)
{
    //alert($('#' + divcuadro).find('input').prop('checked', true).length);
    //alert($('.has-error').length);
    //alert(ncampos + ' ncampos');
    
    if ($('#c5p131cual').val() != '')
    {
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
    else
    {
           $('#guardar').prop('disabled', true);
           $('#actualizar').prop('disabled', true);
           $('#cancelar').prop('disabled', true);
           $('#anterior').prop('disabled', false);
           $('#siguiente').prop('disabled', false);        
    }

}

function validarcampotexcuadros(div,campo,ncampos)
{
    validarbolitasytexto(div,campo);

    validarcuadrosc5p131(div,ncampos);

}
</script>
</html>