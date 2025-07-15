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
        <div id="ppc1p4n7div" name="ppc1p4n7div" class="form-group col-md-12 form-group-sm">
        <div id="ppc1p4n7o0div" class="has-error">
        <label class="control-label">4.7  CUÁLES DE LOS SIGUIENTES DE SISTEMAS BÁSICOS MANEJA:
            <br/>SELECCIÓN MULTIPLE         
            <button type="button" id="vayuda" name="vayuda" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModal">
                        <span class="glyphicon glyphicon-question-sign" aria-hidden="true"></span> Ayuda
                    </button>       
        </label>
        </div>
        <div id="ppc1p4n7o1div" <?php if($arrayrespuestas['eppc1p4n7o1']=='' || $arrayrespuestas['eppc1p4n7o1']=='NO' || $arrayrespuestas['eppc1p4n7o1']=='98'){echo('class=" has-error"');}?>>
        <div class="checkbox">
            <label> <!--en este caso se manda a la fincion javascript el nombre del campo-->
              <input type="checkbox" name="ppc1p4n7o1" id="ppc1p4n7o1" onclick="cambiarsinoppc1p4n7('SI','ppc1p4n7o1','ppc1p4n7o1div','ppc1p4n7div',4);" <?php if($arrayrespuestas['eppc1p4n7o1']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            WORD
            </label>
        </div>
        </div>
            
<!--        <div class="row" id="ppc1p4n7institucion1mostrar" name="ppc1p4n7institucion1mostrar" <?php if($arrayrespuestas['eppc1p4n7o2']== 'NO'||$arrayrespuestas['eppc1p4n7o2']== '' ||$arrayrespuestas['eppc1p4n7o2']== '98'){echo('style="display:none"');}else{echo('');}  ?> >
        <div  id="ppc1p4n7institucion1div" name="ppc1p4n7institucion1div" class="form-group col-md-3">
        <label class="control-label">Cual?</label>
        <input type="text" class="form-control text-uppercase" id="institucion1" onkeypress="return soloLetras(event)"  onchange="validarcampotexcuadros('ppc1p4n7institucion1div','institucion1','10')" name="institucion1"   placeholder="Cual?" value="<?php if($arrayrespuestas['eppc1p4n7o2'] == ''){echo('0');}else{ echo($arrayrespuestas['eppc1p4n7o2']);} ?>">
        </div>
        </div>-->
            
        <div id="ppc1p4n7o2div" <?php if($arrayrespuestas['eppc1p4n7o2']=='' || $arrayrespuestas['eppc1p4n7o2']=='NO' || $arrayrespuestas['eppc1p4n7o2']=='98' ){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="ppc1p4n7o2" id="ppc1p4n7o2" onclick="cambiarsinoppc1p4n7('SI','ppc1p4n7o2','ppc1p4n7o2div','ppc1p4n7div',4);" <?php if($arrayrespuestas['eppc1p4n7o2']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            POWER POINT
          </label>
        </div>
        </div>
            
<!--        <div class="row" id="ppc1p4n7institucion2mostrar" name="ppc1p4n7institucion2mostrar" <?php if($arrayrespuestas['eppc1p4n7o2']== 'NO'||$arrayrespuestas['eppc1p4n7o2']== '' ||$arrayrespuestas['eppc1p4n7o2']== '98'){echo('style="display:none"');}else{echo('');}  ?> >
        <div  id="ppc1p4n7institucion2div" name="ppc1p4n7institucion2div" class="form-group col-md-3">
        <label class="control-label">Cual?</label>
        <input type="text" class="form-control text-uppercase" id="institucion2" onkeypress="return soloLetras(event)"  onchange="validarcampotexcuadros('ppc1p4n7institucion2div','institucion2','10')" name="institucion2"   placeholder="Cual?" value="<?php if($arrayrespuestas['eppc1p4n7institucion2'] == ''){echo('0');}else{ echo($arrayrespuestas['eppc1p4n7institucion2']);} ?>">
        </div>
        </div>-->
            
        <div id="ppc1p4n7o3div" <?php if($arrayrespuestas['eppc1p4n7o3']==''|| $arrayrespuestas['eppc1p4n7o3']=='NO'|| $arrayrespuestas['eppc1p4n7o2']=='98'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="ppc1p4n7o3" id="ppc1p4n7o3" onclick="cambiarsinoppc1p4n7('SI','ppc1p4n7o3','ppc1p4n7o3div','ppc1p4n7div',4);" <?php if($arrayrespuestas['eppc1p4n7o3']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            EXCEL
          </label>
        </div>
        </div>  
         
       <div id="ppc1p4n7o4div" <?php if($arrayrespuestas['eppc1p4n7o4']==''|| $arrayrespuestas['eppc1p4n7o4']=='NO'|| $arrayrespuestas['eppc1p4n7o4']=='98'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="ppc1p4n7o4" id="ppc1p4n7o4" onclick="cambiarsinoppc1p4n7('SI','ppc1p4n7o4','ppc1p4n7o4div','ppc1p4n7div',4);" <?php if($arrayrespuestas['eppc1p4n7o4']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            NINGUNO
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
            <?php if($arrayrespuestas['eppc1p4n7o1']=="" & $arrayrespuestas['eppc1p4n7o2']=="" & $arrayrespuestas['eppc1p4n7o3']==""& $arrayrespuestas['eppc1p4n7o4']=="")
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
                          vppc1p4n7o1 : $('#ppc1p4n7o1').val(),          
                          vppc1p4n7o2 : $('#ppc1p4n7o2').val(),
                          vppc1p4n7o3 : $('#ppc1p4n7o3').val(),
                          vppc1p4n7o4 : $('#ppc1p4n7o4').val()},
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
                          vppc1p4n7o1 : $('#ppc1p4n7o1').val(),          
                          vppc1p4n7o2 : $('#ppc1p4n7o2').val(),
                          vppc1p4n7o3 : $('#ppc1p4n7o3').val(),
                          vppc1p4n7o4 : $('#ppc1p4n7o4').val()},
                      
                          dataType: "html",
                          success : function(obj){                      
                          botonguardar();
                          }
                        });                    
        });
        

        $("#siguiente").click(function ()
        {
         location.href = "../c_ppc1p5n1/fc_ppc1p5n1?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
        });
        $("#anterior").click(function ()
        {
         botonanterior();
         location.href = "../c_ppc1p4n6/fc_ppc1p4n6?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
        });

//para cargar variables capitulo, pregunta,encuestador,vivienda,barra



cargardatosgenerales('<?php echo($arraydatosgenerales['ecapitulo']); ?>','Pregunta 4.7 de 5.1','<?php echo($arraydatosgenerales['enomcoges']); ?>','<?php echo($arraydatosgenerales['enombreintegrante']." "." - "." "."Sexo:"." ".$arraydatosgenerales['esexointegrante']."   "."  -  "."   "."Edad:"."   ".$arraydatosgenerales['eedadintegrante']); ?>','92');
//control del boton ayuda
botonayuda();

});
//dea aca para abajo es logica de cuadros
function cambiarsinoppc1p4n7(opcion,campoval,divcampo,divcompleto,campos)
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

if(campoval == 'ppc1p4n7o4')
          {
           if($('#' + campoval).val() == 'SI')
           {
             $('#ppc1p4n7o1').prop('checked' , false);
             $('#ppc1p4n7o1div').addClass(' has-error');
             $('#ppc1p4n7o2').prop('checked' , false);
             $('#ppc1p4n7o2div').addClass(' has-error');
             $('#ppc1p4n7o3').prop('checked' , false);
             $('#ppc1p4n7o3div').addClass(' has-error');
                           
             $('#ppc1p4n7o1').val('NO');
             $('#ppc1p4n7o2').val('NO');
             $('#ppc1p4n7o3').val('NO');
             
             }
}
       else
      {
         $('#ppc1p4n7o4').prop('checked' , false); 
         $('#ppc1p4n7o4').val('NO');
         $('#ppc1p4n7o4div').addClass(' has-error');
     }
     
        validarcuadrosppc1p4n7(divcompleto,campos);
}
function validarcuadrosppc1p4n7(divcuadro,ncampos)
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
    
    
    
    
</script>
</html>