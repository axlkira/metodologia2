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
        <input type="text" class="form-control input-sm" id="folio" name="folio"  style="display:none"   placeholder="folio" value="<?php echo($folio); ?>">
        <input type="text" class="form-control input-sm" id="doccogestor" name="doccogestor" style="display: none" placeholder="Text input" value="<?php echo($doccogestor); ?>">
        <input type="text" class="form-control input-sm" id="idestacion" name="idestacion"  style="display:none"   placeholder="" value="<?php echo($idestacion); ?>">
        <hr>
        <form class="form-group" name="formulario" id="formulario">
            <!--inicio radio una sola seleccion-->
            <div class="row">
            <div class="panel panel-info">
            <div class="panel-heading">¿QUÉ QUIERO LOGRAR CON MI HOGAR?</strong></div>
            </div>    
            <label><h5><strong>Generar o crear en conjunto con el hogar mínimo una meta y máximo 3, que desee lograr a través del acompañamiento familiar. Si el hogar plantea más, acordar tres prioritarios.</strong></h5></label>        
            <div class="row">
            <div  id="meta1mostrarp" name="meta1mostrarp"<?php if($carraymetas['emeta1'] == ''){echo('class="form-group col-md-8 form-group-sm has-error"');}else{echo('class="form-group col-md-8 form-group-sm"');} ?>>
            <label class="control-label">Describir  la meta 1</label>
            <textarea class="form-control" id="meta1mostrar" onkeypress="return soloLetras(event)"  onchange="meta1error('meta1mostrarp','meta1mostrar')" name="meta1mostrar" value=""><?php if($carraymetas['emeta1'] == ''){echo('');}else{ echo($carraymetas['emeta1']);} ?></textarea>
            </div>
            <div id="meta1dimediv" name="meta1dimediv" <?php if($carraymetas['emeta1dimension']==""){echo('class="form-group col-md-4 form-group-sm has-error"');}else{echo('class="form-group col-md-4 form-group-sm"');}?>>
                        <label class="control-label" for="enunmeta1">Dimensión de la meta</label>
                        <select class="form-control input-sm" id="meta1dime" name="meta1dime" onchange="meta1error('meta1dimediv','meta1dime')">
                            <?php if($carraymetas['emeta1dimension']=="")
                                {
                                echo('<option value="">Seleccione una opción</option>');
                                }
                                else
                                {
                                echo('<option value="'.$carraymetas['emeta1dimension'].'">'.$carraymetas['enombdimension1'].'</option>');
                                }?>
                            
                            <?php echo($dimensiones); ?>
                        </select>
            </div>
            </div>
            <div class="row">
            <div  id="meta2mostrarp" name="meta2mostrarp" class="form-group col-md-8 form-group-sm">
            <label class="control-label">Describir  la meta 2</label>
            <textarea class="form-control" id="meta2mostrar" onkeypress="return soloLetras(event)"  onchange="meta2error()" name="meta2mostrar" value=""><?php if($carraymetas['emeta2'] == ''){echo('');}else{ echo($carraymetas['emeta2']);} ?></textarea>
            </div>
            <div id="meta2dimediv" name="meta2dimediv" class="form-group col-md-4 form-group-sm">
                        <label class="control-label" for="enunmeta2">Dimensión de la meta</label>
                        <select class="form-control input-sm" id="meta2dime" name="meta2dime" onchange="meta2error()">
                            <?php if($carraymetas['emeta2dimension']=="")
                                {
                                echo('<option value="">Seleccione una opción</option>');
                                }
                                else
                                {
                                echo('<option value="'.$carraymetas['emeta2dimension'].'">'.$carraymetas['enombdimension2'].'</option>');
                                }?>
                            
                            <?php echo($dimensiones); ?>
                        </select>
            </div>
            </div>
            <div class="row">
            <div  id="meta3mostrarp" name="meta3mostrarp" class="form-group col-md-8 form-group-sm">
            <label class="control-label">Describir  la meta 3</label>
            <textarea class="form-control" id="meta3mostrar" onkeypress="return soloLetras(event)"  onchange="meta3error()" name="meta3mostrar" value=""><?php if($carraymetas['emeta3'] == ''){echo('');}else{ echo($carraymetas['emeta3']);} ?></textarea>
            </div>
            <div id="meta3dimediv" name="meta3dimediv" class="form-group col-md-4 form-group-sm">
                        <label class="control-label" for="enunmeta3">Dimensión de la meta</label>
                        <select class="form-control input-sm" id="meta3dime" name="meta3dime" onchange="meta3error()">
                            <?php if($carraymetas['emeta2dimension']=="")
                                {
                                echo('<option value="">Seleccione una opción</option>');
                                }
                                else
                                {
                                echo('<option value="'.$carraymetas['emeta3dimension'].'">'.$carraymetas['enombdimension3'].'</option>');
                                }?>
                            
                            <?php echo($dimensiones); ?>
                        </select>
            </div>
                
                
            </div>
            <br><br>
            <!--inicio modal-->
            <div class="modal fade bs-example-modal-sm" id="modalsinco" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" data-backdrop="static">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h3>                                          
                                            Cierre de la estación H. 
                                            </h3>    
                                        </div>
                                        <div class="modal-body">
                                            <!--<input type="text" class="form-control input-sm" id="valoridpaso" name="valoridpaso"  style="display:none" placeholder="Text input" value="">-->
                                        <h5 class="modal- text-justify" id="myModalLabel">Se ha realizado el cierre satisfactoriamente de la estación H.<br><br>
                                        </h5>    
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button"  onclick="salirPrincipal();" name=salirPrinc id=salirPrinc class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                                        </div>
                                    </div>
                                </div>
                            </div><br>                    
                    <!--fin modal-->
            
            <button type="button" id="cerrarestacionh" class="btn btn-success" data-dismiss="modal"  onclick="cerrarestacionhi()" <?php if($carraymetas['eeerf']!= ''){echo('');}else{echo('disabled=""');}?>>Cerrar estacion H - HISTORIA DEL HOGAR</button>
            <!--inicio botonera guardar y actualizar-->
            <?php if($carraymetas['emeta1']=="")
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
    <script src="<?php echo JSPERFIL, 'jscoordenadas.js' ?>"></script>
    <link href="<?php echo JBOX, 'Source/jBox.css' ?>" rel="stylesheet">
    <!--Inicio de los enlaces-->
</body>

<script> 
///////////////////////////////////////Funciones que llaman al controlador para guardar y actualizar////////////////////////////////////////////////////////////////////////    
function meta1error(div,campo)
{
    //    alert(div + ' juanpis ' + campo);
   if(($('#'+ campo).val() == ''))
   { 
       $('#' + div).addClass('has-error');
   }
   else
   { 
       $('#' + div).removeClass('has-error');
   }
    validarbolitasytexto(div,campo)
}
function meta2error()
{
   if(($('#meta2mostrar').val() !== '' && $('#meta2dime').val()== '' ))
   { 
       
       $('#meta2dimediv').addClass('has-error');
      // validarbolitasytexto(div,campo)
    //   $('#' + div).addClass('has-error');
   }
   else if($('#meta2mostrar').val() == '' && $('#meta2dime').val()!== '' )
   { 
       $('#meta2mostrarp').addClass('has-error');
     //  validarbolitasytexto(div,campo)
       //$('#' + div).removeClass('has-error');
   }
   else 
   { 
       $('#meta2mostrarp').removeClass('has-error');
       $('#meta2dimediv').removeClass('has-error');
    //   validarbolitasytexto(div,campo)
       //$('#' + div).removeClass('has-error');
   }
   validarguardar();
 //   validarbolitasytexto(div,campo)
}
function meta3error()
{
   if(($('#meta3mostrar').val() !== '' && $('#meta3dime').val()== '' ))
   { 
       
       $('#meta3dimediv').addClass('has-error');
      // validarbolitasytexto(div,campo)
    //   $('#' + div).addClass('has-error');
   }
   else if($('#meta3mostrar').val() == '' && $('#meta3dime').val()!== '' )
   { 
       $('#meta3mostrarp').addClass('has-error');
     //  validarbolitasytexto(div,campo)
       //$('#' + div).removeClass('has-error');
   }
   else 
   { 
       $('#meta3mostrarp').removeClass('has-error');
       $('#meta3dimediv').removeClass('has-error');
    //   validarbolitasytexto(div,campo)
       //$('#' + div).removeClass('has-error');
   }
   validarguardar();
 //   validarbolitasytexto(div,campo)
}

function cerrarestacionhi()
{
        $.ajax({
          url: "fc_cerrarpaso",
          type: "GET",
          data: {vfolio: $('#folio').val(), vidpaso:1002, vestado:1},
          dataType: "html",
          success: function(obj) { 
          $('#modalsinco').modal('show');
        //  coordenadas(10);
          }
          }); 
}
function salirPrincipal()
{   
    location.href = "../../c_protocolol1e0/fc_protocolol1e0?folio="+ $('#folio').val() +"&idintegrante=0"+"&doccogestor="+$('#doccogestor').val(); 
}
    
    $(document).ready(function()
    {

        $("#guardar").click(function ()
        {
                        $.ajax({
                          url: "fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(), vmeta1mostrar : $('#meta1mostrar').val(),vmeta1dime : $('#meta1dime').val(),vmeta2mostrar : $('#meta2mostrar').val(),vmeta2dime : $('#meta2dime').val(),vmeta3mostrar : $('#meta3mostrar').val(),vmeta3dime : $('#meta3dime').val()},    
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
                          data: {vfolio : $('#folio').val(), vmeta1mostrar : $('#meta1mostrar').val(),vmeta1dime : $('#meta1dime').val(),vmeta2mostrar : $('#meta2mostrar').val(),vmeta2dime : $('#meta2dime').val(),vmeta3mostrar : $('#meta3mostrar').val(),vmeta3dime : $('#meta3dime').val()},    
                          dataType: "html",
                          success : function(obj){                      
                          botonactualizar();
                          }
                        });                   
        });
        $("#siguiente").click(function ()
        {
        if ('<?php echo ($carraymetas['eeerf']);?>' == '') {            
            location.href = "../c_eerf/fc_eerf?folio=" + $('#folio').val()+"&idintegrante=0"+"&doccogestor="+$('#doccogestor').val()+"&idestacion="+$('#idestacion').val();                                    
        }
        else {
            $('#cerrarestacionh').prop('disabled', false);
           location.href = "../c_lograrhogar/fc_lograrhogar?folio="+ $('#folio').val() +"&idintegrante=0"+"&doccogestor="+$('#doccogestor').val() +"&idestacion="+$('#idestacion').val();
        }
        });
        
        $("#anterior").click(function ()
        {
             location.href = "../c_infocorresp/fc_infocorresp?folio=" + $('#folio').val()+"&idintegrante=0"+"&doccogestor="+$('#doccogestor').val();                   
        });
//para cargar variables capitulo, pregunta,encuestador,vivienda,barra
cargardatosgenerales('<?php echo('Historia del hogar'); ?>','Vista 6 de 7','<?php echo($arraydatosgenerales['enomcoges']); ?>','<?php echo($arraydatosgenerales['etitular']); ?>','84');
//control del boton ayuda
botonayuda();
});
$("#capitulos").hide();
</script>
</html>