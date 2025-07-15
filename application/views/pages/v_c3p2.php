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
        <input type="text" class="form-control input-sm" id="c3p1" name="c3p1" style="display: none" placeholder=" " value="<?php echo($arrayrespuestas['ec3p1']); ?>">
        <!--fin para imprimir el folio y llevarlo-->
<hr>
       <form class="form-group" name="formulario" id="formulario">

<!--Check varias selecciones -->
    <div class="row">
        <div id="c3p2div" name="c3p2div" class="form-group col-md-12 form-group-sm">
        <div id="c3p2o0div" class="has-error">
        <label class="control-label">2. La forma que tiene esta familia de guardar los ahorros es:
                     <button type="button" id="vayuda" name="vayuda" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModal">
                        <span class="glyphicon glyphicon-question-sign" aria-hidden="true"></span> Ayuda
                    </button>       
        </label>
        </div>
        <div id="c3p2o1div" <?php if($arrayrespuestas['ec3p2o1']=='' || $arrayrespuestas['ec3p2o1']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
            <label> <!--en este caso se manda a la fincion javascript el nombre del campo-->
              <input type="checkbox" name="c3p2o1" id="c3p2o1" onclick="cambiarsinoc3p2('SI','c3p2o1','c3p2o1div','c3p2div',4);" <?php if($arrayrespuestas['ec3p2o1']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            En los bancos u otras instituciones financieras
            </label>
        </div>
        </div>
        <div id="c3p2o2div" <?php if($arrayrespuestas['ec3p2o2']=='' || $arrayrespuestas['ec3p2o2']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="c3p2o2" id="c3p2o2" onclick="cambiarsinoc3p2('SI','c3p2o2','c3p2o2div','c3p2div',4);" <?php if($arrayrespuestas['ec3p2o2']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            Dinero en efectivo, en la casa
          </label>
        </div>
        </div>
        <div id="c3p2o3div" <?php if($arrayrespuestas['ec3p2o3']==''|| $arrayrespuestas['ec3p2o3']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="c3p2o3" id="c3p2o3" onclick="cambiarsinoc3p2('SI','c3p2o3','c3p2o3div','c3p2div',4);" <?php if($arrayrespuestas['ec3p2o3']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            En grupos de ahorro informal (Natilleras, Fondo de Empleados)
          </label>
        </div>
        </div>  
         
       <div id="c3p2o4div" <?php if($arrayrespuestas['ec3p2o4']==''|| $arrayrespuestas['ec3p2o4']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="c3p2o4" id="c3p2o4" onclick="cambiarsinoc3p2('SI','c3p2o4','c3p2o4div','c3p2div',4);" <?php if($arrayrespuestas['ec3p2o4']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            Otra forma
          </label>
        </div>
        </div> 
            <div class="row" id="c3p2cualmostrar" name="c3p2cualmostrar" <?php if($arrayrespuestas['ec3p2o4']== 'NO'||$arrayrespuestas['ec3p2o4']== ''){echo('style="display:none"');}else{echo('');}  ?> >
            <div  id="c3p2cualdiv" name="c3p2cualdiv" class="form-group col-md-3">
                       <label class="control-label">Cual?</label>
                       <input type="text" class="form-control text-uppercase" id="c3p2cual" onkeypress="return soloLetras(event)"  onchange="validarcampotexcuadros('c3p2cualdiv','c3p2cual','4')" name="c3p2cual"   placeholder="Cual?" value="<?php if($arrayrespuestas['ec3p2cual'] == ''){echo('0');}else{ echo($arrayrespuestas['ec3p2cual']);} ?>">
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
            <?php if($arrayrespuestas['ec3p2o1']=="" & $arrayrespuestas['ec3p2o2']=="" & $arrayrespuestas['ec3p2o3']==""& $arrayrespuestas['ec3p2o4']=="")
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
                          data: {vfolio : $('#folio').val(), vc3p2o1 : $('#c3p2o1').val(),vc3p2o2 : $('#c3p2o2').val(),vc3p2o3 : $('#c3p2o3').val(),vc3p2o4 : $('#c3p2o4').val(),vc3p2cual : $('#c3p2cual').val()},    
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
                          data: {vfolio : $('#folio').val(), vc3p2o1 : $('#c3p2o1').val(),vc3p2o2 : $('#c3p2o2').val(),vc3p2o3 : $('#c3p2o3').val(),vc3p2o4 : $('#c3p2o4').val(),vc3p2cual : $('#c3p2cual').val()},  
                          dataType: "html",
                          success : function(obj){                      
                          botonactualizar();
                          }
                        });                   
        });
        

        $("#siguiente").click(function ()
        {
         botonsiguiente();
         location.href = "../c_c3p3/fc_c3p3?folio=" + $('#folio').val();                    

        });
              
        $("#anterior").click(function ()
        {
          if($('#c3p1').val()=='1'){
                location.href = "../c_c3p1/fc_c3p1?folio=" + $('#folio').val(); 
            }
            else{
         botonanterior();
         location.href = "../c_c3p1a/fc_c3p1a?folio=" + $('#folio').val(); 
            }});

//para cargar variables capitulo, pregunta,encuestador,vivienda,barra
cargardatosgenerales('<?php echo($arraydatosgenerales['ecapitulo']); ?>','Pregunta 2 de 4','<?php echo($arraydatosgenerales['enomcoges']); ?>','<?php echo($arraydatosgenerales['etitular']); ?>','60');
//control del boton ayuda
botonayuda();

});

//dea aca para abajo es logica de cuadros
function cambiarsinoc3p2(opcion,campoval,divcampo,divcompleto,campos)
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
    if(campoval == 'c3p2o4')
        {
            if($('#' + campoval).val() == 'SI')
            {
                //alert('aca lo muestra');
                $('#c3p2cualmostrar').show(1000);
                $('#c3p2cual').val('');
                $('#c3p2cualdiv').addClass(' has-error');            

            }
            else
            {
                //alert('aca lo oculta');
                $('#c3p2cualmostrar').hide(1000);
                $('#c3p2cual').val('98');
                $('#c3p2cualdiv').removeClass(' has-error');
  
            }
        }
      
      validarcuadrosc3p2(divcompleto,campos);
}

function validarcuadrosc3p2(divcuadro,ncampos)
{
    //alert($('#' + divcuadro).find('input').prop('checked', true).length);
    //alert($('.has-error').length);
    //alert(ncampos + ' ncampos');
    
    if ($('#c3p2cual').val() != '')
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

    validarcuadrosc3p2(div,ncampos);

}
</script>
</html>