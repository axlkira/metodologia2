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
<!--       <input type="text" class="form-control input-sm" id="c10p6o1" name="c10p6o1" style="display:none" placeholder="" value="<?php echo($arrayrespuestas['ec10p6o1']); ?>">-->
       
        <!--fin para imprimir el idintegrante y llevarlo-->
<hr>
        <form class="form-group" name="formulario" id="formulario">

           <!--Check varias selecciones -->
    <div class="row">
        <div id="ppc1p5n1div" name="ppc1p5n1div" class="form-group col-md-12 form-group-sm">
        <div id="ppc1p5n1o0div" class="has-error">
        <label class="control-label">5.1 Actualmente tiene interés en:
            <br/>Opción múltiple (orientar la selección de una o máximo dos opciones)
            <button type="button" id="vayuda" name="vayuda" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModal">
                        <span class="glyphicon glyphicon-question-sign" aria-hidden="true"></span> Ayuda
                    </button>       
        </label>
        </div>
        <div id="ppc1p5n1o1div" <?php if($arrayrespuestas['eppc1p5n1o1']=='' || $arrayrespuestas['eppc1p5n1o1']=='NO' || $arrayrespuestas['eppc1p5n1o1']=='98'){echo('class=" has-error"');}?>>
        <div class="checkbox">
            <label> <!--en este caso se manda a la fincion javascript el nombre del campo-->
              <input type="checkbox" name="ppc1p5n1o1" id="ppc1p5n1o1" onclick="cambiarsinoppc1p5n1('SI','ppc1p5n1o1','ppc1p5n1o1div','ppc1p5n1div',4);" <?php if($arrayrespuestas['eppc1p5n1o1']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
             Iniciar programas de formación para el empleo o de Educación Superior
            </label>
        </div>
        </div>
       
        <div id="ppc1p5n1o2div" <?php if($arrayrespuestas['eppc1p5n1o2']=='' || $arrayrespuestas['eppc1p5n1o2']=='NO' || $arrayrespuestas['eppc1p5n1o2']=='98' ){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="ppc1p5n1o2" <?php echo $disabled?> id="ppc1p5n1o2" onclick="cambiarsinoppc1p5n1('SI','ppc1p5n1o2','ppc1p5n1o2div','ppc1p5n1div',4);" <?php if($arrayrespuestas['eppc1p5n1o2']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
             Emplearse y vincularse laboralmente
          </label>
        </div>
        </div>
        <div id="ppc1p5n1o3div" <?php if($arrayrespuestas['eppc1p5n1o3']==''|| $arrayrespuestas['eppc1p5n1o3']=='NO'|| $arrayrespuestas['eppc1p5n1o2']=='98'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="ppc1p5n1o3"  <?php echo $disabled?> id="ppc1p5n1o3" onclick="cambiarsinoppc1p5n1('SI','ppc1p5n1o3','ppc1p5n1o3div','ppc1p5n1div',4);" <?php if($arrayrespuestas['eppc1p5n1o3']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
             Creación y/o fortalecimiento de una Unidad Productiva
          </label>
        </div>
        </div>  
         
       <div id="ppc1p5n1o4div" <?php if($arrayrespuestas['eppc1p5n1o4']==''|| $arrayrespuestas['eppc1p5n1o4']=='NO'|| $arrayrespuestas['eppc1p5n1o4']=='98'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="ppc1p5n1o4" id="ppc1p5n1o4" onclick="cambiarsinoppc1p5n1('SI','ppc1p5n1o4','ppc1p5n1o4div','ppc1p5n1div',4);" <?php if($arrayrespuestas['eppc1p5n1o4']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            Ninguna
          </label>
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
            <?php if($arrayrespuestas['eppc1p5n1o1']=="" & $arrayrespuestas['eppc1p5n1o2']=="" & $arrayrespuestas['eppc1p5n1o3']==""& $arrayrespuestas['eppc1p5n1o4']=="")
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
                          vppc1p5n1o1 : $('#ppc1p5n1o1').val(),          
                          vppc1p5n1o2 : $('#ppc1p5n1o2').val(),
                          vppc1p5n1o3 : $('#ppc1p5n1o3').val(),
                          vppc1p5n1o4 : $('#ppc1p5n1o4').val()},
                          dataType: "html",
                          success : function(obj){ 
                          $('#siguiente').prop('disabled', true);        
                          llenarcapitulospp();
                          botonguardar();
                         // location.reload();
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
                          vppc1p5n1o1 : $('#ppc1p5n1o1').val(),          
                          vppc1p5n1o2 : $('#ppc1p5n1o2').val(),
                          vppc1p5n1o3 : $('#ppc1p5n1o3').val(),
                          vppc1p5n1o4 : $('#ppc1p5n1o4').val()},
                          dataType: "html",
                          success : function(obj){                      
                          $('#siguiente').prop('disabled', true);        
                          llenarcapitulospp();
                          botonguardar();
                         // location.reload();
                          }
                        });                    
        });
        $("#siguiente").click(function ()
        {
       location.href = "../c_ppcapitulosintegrante/fc_ppcapitulosintegrante?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                        
        });
        $("#anterior").click(function ()
        {
         botonanterior();
         location.href = "../c_ppc1p4n7/fc_ppc1p4n7?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
        });
//para cargar variables capitulo, pregunta,encuestador,vivienda,barra
cargardatosgenerales('<?php echo($arraydatosgenerales['ecapitulo']); ?>','Pregunta 5.1 de 5.1','<?php echo($arraydatosgenerales['enomcoges']); ?>','<?php echo($arraydatosgenerales['enombreintegrante']." "." - "." "."Sexo:"." ".$arraydatosgenerales['esexointegrante']."   "."  -  "."   "."Edad:"."   ".$arraydatosgenerales['eedadintegrante']); ?>','100');
//control del boton ayuda
botonayuda();
});
//dea aca para abajo es logica de cuadros
function cambiarsinoppc1p5n1(opcion,campoval,divcampo,divcompleto,campos)
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
    if(campoval == 'ppc1p5n1o4')
           {
            if($('#' + campoval).val() == 'SI')
            {
              $('#ppc1p5n1o1').prop('checked' , false);
              $('#ppc1p5n1o1div').addClass(' has-error');
              $('#ppc1p5n1o2').prop('checked' , false);
              $('#ppc1p5n1o2div').addClass(' has-error');
              $('#ppc1p5n1o3').prop('checked' , false);
              $('#ppc1p5n1o3div').addClass(' has-error');
                            
              $('#ppc1p5n1o1').val('NO');
              $('#ppc1p5n1o2').val('NO');
              $('#ppc1p5n1o3').val('NO');
              
              }
}
        else
       {
          $('#ppc1p5n1o4').prop('checked' , false); 
          $('#ppc1p5n1o4').val('NO');
          $('#ppc1p5n1o4div').addClass(' has-error');
      }
      /////////////////////////////////////////////////////////////
      if($('#ppc1p5n1o1').val()=='SI' && $('#ppc1p5n1o2').val()=='SI' && $('#ppc1p5n1o3').val()=='SI')
           {
         ////alert('Solo puede seleccionar maximo 2 opciones');
         
         mensaje();
          $('#ppc1p5n1o1').prop('checked' , false); 
          $('#ppc1p5n1o1').val('NO');
          $('#ppc1p5n1o1div').addClass(' has-error');
         
          $('#ppc1p5n1o2').prop('checked' , false); 
          $('#ppc1p5n1o2').val('NO');
          $('#ppc1p5n1o2div').addClass(' has-error');
         
             
          $('#ppc1p5n1o3').prop('checked' , false); 
          $('#ppc1p5n1o3').val('NO');
          $('#ppc1p5n1o3div').addClass(' has-error');
              
            }

        else
       {
       }
/////////////////////////////////////////////////////////////////////////      
      validarcuadrosppc1p5n1(divcompleto,campos);
}
function validarcuadrosppc1p5n1(divcuadro,ncampos)
{
    ////alert($('#' + divcuadro).find('input').prop('checked', true).length);
    ////alert($('.has-error').length);
    if($('.has-error').length === (ncampos + 1))
    {   //alert('soniguales');
       $('#guardar').prop('disabled', true);
       $('#actualizar').prop('disabled', true);
       $('#cancelar').prop('disabled', true);
       $('#anterior').prop('disabled', false);
       $('#siguiente').prop('disabled', true);
    }
    else
    {  //alert('no');
       $('#guardar').prop('disabled', false);
       $('#actualizar').prop('disabled', false);
       $('#cancelar').prop('disabled', false);
       $('#anterior').prop('disabled', true);
       $('#siguiente').prop('disabled', true);       
    }

}
function mensaje()
{

    mensajito('MENSAJE:','Solo puede seleccionar maximo 2 opciones');//me llama el mensajito de guardar

}

function llenarcapitulospp()
{
if($('#ppc1p5n1o1').val() == 'NO')
           {
                          $.ajax({
                          url: "fc_llenarcapitulo2pp",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),
                          vidintegrante : $('#idintegrante').val()},    
                          dataType: "html",
                          success : function(obj){                      
                          }
                          });
           }
           else 
               {
                          $.ajax({
                          url: "fc_borrarcapitulo2pp",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),
                          vidintegrante : $('#idintegrante').val()},    
                          dataType: "html",
                          success : function(obj){                      
                          }
                          });
           }
if($('#ppc1p5n1o2').val() == 'NO')
           {
                          $.ajax({
                          url: "fc_llenarcapitulo3pp",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),
                          vidintegrante : $('#idintegrante').val()},    
                          dataType: "html",
                          success : function(obj){                      
                          }
                          });
           }
           else
           {
                          $.ajax({
                          url: "fc_borrarcapitulo3pp",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),
                          vidintegrante : $('#idintegrante').val()},    
                          dataType: "html",
                          success : function(obj){                      
                          }
                          });
           }
if($('#ppc1p5n1o3').val() == 'NO')
           {
                          $.ajax({
                          url: "fc_llenarcapitulo4pp",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),
                          vidintegrante : $('#idintegrante').val()},    
                          dataType: "html",
                          success : function(obj){                      
                          }
                          });
           }
           else
             {
                          $.ajax({
                          url: "fc_borrarcapitulo4pp",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),
                          vidintegrante : $('#idintegrante').val()},    
                          dataType: "html",
                          success : function(obj){                      
                          }
                          });
           }  
if($('#ppc1p5n1o4').val() == 'SI')
           {
                          $.ajax({
                          url: "fc_llenarcapitulotodospp",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),
                          vidintegrante : $('#idintegrante').val()},    
                          dataType: "html",
                          success : function(obj){                      
                          }
                          });
           }
           else
               {
               }    
}
</script>
</html>