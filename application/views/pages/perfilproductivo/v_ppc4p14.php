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
<!--        <input type="text" class="form-control input-sm" id="idintegrante" name="idintegrante" style="display: none" placeholder="Text input" value="<?php echo($tdatinte['tidintegrante']); ?>">-->
<!--        <input type="text" class="form-control input-sm" id="c2p1" name="c2p1" style="display:none" value="<?php echo($arrayrespuestas['ec2p1']); ?>">-->
        <!--fin para imprimir el folio y llevarlo-->
<hr>
        <form class="form-group" name="formulario" id="formulario">

           <!--Check varias selecciones -->
    <div class="row col-md-12">
        <div id="ppc4p14adiv" name="ppc4p14adiv" class="form-group col-md-12 form-group-sm">
        <div id="eppc4p14a0div" class="has-error">
        <label class="control-label">1.5.2 ¿Qué uso le da a los productos que genera a través de la actividad agraria?
                    
            <button type="button" id="vayuda" name="vayuda" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModal">
                        <span class="glyphicon glyphicon-question-sign" aria-hidden="true"></span> Ayuda
                    </button>       
        </label>
        </div>
        <div id="ppc4p14a1div" <?php if($arrayrespuestas['eppc4p14a1']=='' || $arrayrespuestas['eppc4p14a1']=='NO' || $arrayrespuestas['eppc4p14a1']=='98'){echo('class=" has-error"');}?>>
        <div class="checkbox">
            <label> <!--en este caso se manda a la fincion javascript el nombre del campo-->
              <input type="checkbox" name="ppc4p14a1" id="ppc4p14a1" onclick="cambiarsinoppc4p14a('SI','ppc4p14a1','ppc4p14a1div','ppc4p14adiv',5);" <?php if($arrayrespuestas['eppc4p14a1']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
           A.Autoconsumo.
            </label>
        </div>
        </div>
            
                    
        <div id="eppc4p14a2div" <?php if($arrayrespuestas['eppc4p14a2']=='' || $arrayrespuestas['eppc4p14a2']=='NO' || $arrayrespuestas['eppc4p14a2']=='98' ){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="ppc4p14a2" id="ppc4p14a2" onclick="cambiarsinoppc4p14a('SI','ppc4p14a2','eppc4p14a2div','ppc4p14adiv',5);" <?php if($arrayrespuestas['eppc4p14a2']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            B.Intercambio.
          </label>
        </div>
        </div>
            
       
            
        <div id="eppc4p14a3div" <?php if($arrayrespuestas['eppc4p14a3']==''|| $arrayrespuestas['eppc4p14a3']=='NO'|| $arrayrespuestas['eppc4p14a3']=='98'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="ppc4p14a3" id="ppc4p14a3" onclick="cambiarsinoppc4p14a('SI','ppc4p14a3','eppc4p14a3div','ppc4p14adiv',5);" <?php if($arrayrespuestas['eppc4p14a3']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            C.Donación.
          </label>
        </div>
        </div>  
         
            
        <div id="ppc4p14a4div" <?php if($arrayrespuestas['eppc4p14a4']==''|| $arrayrespuestas['eppc4p14a4']=='NO'|| $arrayrespuestas['eppc4p14a4']=='98'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="ppc4p14a4" id="ppc4p14a4" onclick="cambiarsinoppc4p14a('SI','ppc4p14a4','ppc4p14a4div','ppc4p14adiv',5);" <?php if($arrayrespuestas['eppc4p14a4']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            D.Comercialización.
          </label>
        </div>
        </div>
            
      
        <div id="ppc4p14a5div" <?php if($arrayrespuestas['eppc4p14a5']==''|| $arrayrespuestas['eppc4p14a5']=='NO'|| $arrayrespuestas['eppc4p14a5']=='98'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="ppc4p14a5" id="ppc4p14a5" onclick="cambiarsinoppc4p14a('SI','ppc4p14a5','ppc4p14a5div','ppc4p14adiv',5);" <?php if($arrayrespuestas['eppc4p14a5']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            Otro.
          </label>
        </div>
        </div>
            
        <div class="row" id="ppc4p14acualmostrar" name="ppc4p14acualmostrar" <?php if($arrayrespuestas['eppc4p14a5']== 'NO'||$arrayrespuestas['eppc4p14a5']== ''||$arrayrespuestas['eppc4p14a5']== '98'){echo('style="display:none"');}else{echo('');}  ?> >
        <div  id="ppc4p14acualdiv" name="ppc4p14acualdiv" class="form-group col-md-3">
        <label class="control-label">Cual?</label>
        <input type="text" class="form-control text-uppercase" id="ppc4p14acual" onkeypress="return soloLetras(event)"  onchange="validarcampotexcuadros('ppc4p14acualdiv','ppc4p14acual','5')" name="ppc4p14acual"   placeholder="Cual?" value="<?php if($arrayrespuestas['eppc4p14acual'] == ''){echo('0');}else{ echo($arrayrespuestas['eppc4p14acual']);} ?>">
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
            <?php if($arrayrespuestas['eppc4p14a1']=="" & $arrayrespuestas['eppc4p14a2']=="" & $arrayrespuestas['eppc4p14a3']==""& $arrayrespuestas['eppc4p14a5']==""
                     & $arrayrespuestas['eppc4p14acual']=="")
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
                          vppc4p14a1 : $('#ppc4p14a1').val(),          
                          vppc4p14a2 : $('#ppc4p14a2').val(),
                          vppc4p14a3 : $('#ppc4p14a3').val(),
                          vppc4p14a4 : $('#ppc4p14a4').val(),
                          vppc4p14a5 : $('#ppc4p14a5').val(),
                          vppc4p14acual : $('#ppc4p14acual').val()},                      
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
                          vppc4p14a1 : $('#ppc4p14a1').val(),          
                          vppc4p14a2 : $('#ppc4p14a2').val(),
                          vppc4p14a3 : $('#ppc4p14a3').val(),
                          vppc4p14a4 : $('#ppc4p14a4').val(),
                          vppc4p14a5 : $('#ppc4p14a5').val(),
                          vppc4p14acual : $('#ppc4p14acual').val()},                      
                          dataType: "html",
                          success : function(obj){                      
                          botonguardar();
                          }
                        });                    
        });
        

        $("#siguiente").click(function ()
        {
         botonsiguiente();
        {
       location.href = "../c_ppdiligenciarintegrante/fc_ppdiligenciarintegrante?folio=" + $('#folio').val()+"&idintegrante=0";  
        }
        });
        
        
        $("#anterior").click(function ()
        {
         botonanterior();
         location.href = "../c_ppc1p1n51/fc_ppc1p1n51?folio=" + $('#folio').val()+"&idintegrante=0"; 
        });

//para cargar variables capitulo, pregunta,encuestador,vivienda,barra



cargardatosgenerales('<?php echo($arraydatosgenerales['ecapitulo']); ?>','Pregunta 1.5.2','<?php echo($arraydatosgenerales['enomcoges']); ?>','<?php echo($arraydatosgenerales['etitular']); ?>','75');
//control del boton ayuda
botonayuda();

});
//dea aca para abajo es logica de cuadros
function cambiarsinoppc4p14a(opcion,campoval,divcampo,divcompleto,campos)
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
   
        
        if(campoval == 'ppc4p14a5')
        {
            if($('#' + campoval).val() == 'SI')
            {
                //alert('aca lo muestra');
                $('#ppc4p14acualmostrar').show(1000);
                $('#ppc4p14acual').val('');
                $('#ppc4p14acualdiv').addClass(' has-error');            
            }
            else
            {
                //alert('aca lo oculta');
                $('#ppc4p14acualmostrar').hide(1000);
                $('#ppc4p14acual').val('98');
                $('#ppc4p14acualdiv').removeClass(' has-error');
            }
        }
     validarcuadrosppc4p14a(divcompleto,campos);
}


//ESTA FUNCION SE ENCARGA DE CHEQUEAR QUE MINIMO HAYA UN CUADRO CHECKEADO, QUE SI ESCOJE EL OTRO HAYA QUE LLENAR EL CAMPO CUAL Y QUE LA ENTIDAD SEA OBLIGATORIA
function validarcuadrosppc4p14a(divcuadro,ncampos)
{
    //alert($('#' + divcuadro).find('input').prop('checked', true).length);
    //alert($('.has-error').length);
    //alert(ncampos + ' ncampos');
    
    if ($('#ppc4p14acual').val()!=='' || (document.getElementById('ppc4p14a1').checked || document.getElementById('ppc4p14a2').checked || document.getElementById('ppc4p14a3').checked || document.getElementById('ppc4p14a4').checked || document.getElementById('ppc4p14a4').checked))
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

//FIN FUNCION
function validarcampotexcuadros(div,campo,ncampos)
{
    validarbolitasytexto(div,campo);

    validarcuadrosppc4p14a(div,ncampos);
}

</script>
</html>