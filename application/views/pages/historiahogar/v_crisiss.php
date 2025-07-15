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
        <hr>
        <form class="form-group" name="formulario" id="formulario">

            
           <!--Check varias selecciones -->
        <div class="row">
        <div class="panel panel-info">
            <div class="panel-heading">VULNERABILIDAD, DIFICULTAD O CRISIS EN LO <strong>SOCIAL</strong></div>
        </div>
    
        <div id="crisissdiv" name="crisissdiv" class="form-group col-md-12 form-group-sm">
        <div id="crisisso0div" class="has-error">
            <label class="control-label"><br>Factores Sociales internos y/o externos que afecten, pongan en riesgo o vulneren al hogar
                     
                     <button type="button" id="vayuda" name="vayuda" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModal">
                        <span class="glyphicon glyphicon-question-sign" aria-hidden="true"></span> Ayuda
                    </button>       
        </label>
        </div>
        <div id="crisisso1div" <?php if($arrayrespuestas['ecrisisso1']=='' || $arrayrespuestas['ecrisisso1']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
            <label>
              <input type="checkbox" name="crisisso1" id="crisisso1" onclick="cambiarsinocrisiss('SI','crisisso1','crisisso1div','crisissdiv',14);" <?php if($arrayrespuestas['ecrisisso1']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
           Conflicto (vecinos, pareja, amigos).
            </label>
        </div>
        </div>
        <div id="crisisso2div" <?php if($arrayrespuestas['ecrisisso2']=='' || $arrayrespuestas['ecrisisso2']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="crisisso2" id="crisisso2" onclick="cambiarsinocrisiss('SI','crisisso2','crisisso2div','crisissdiv',14);" <?php if($arrayrespuestas['ecrisisso2']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            Conflicto armado y desplazamiento forzado.
          </label>
        </div>
        </div>
        <div id="crisisso3div" <?php if($arrayrespuestas['ecrisisso3']==''|| $arrayrespuestas['ecrisisso3']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="crisisso3" id="crisisso3" onclick="cambiarsinocrisiss('SI','crisisso3','crisisso3div','crisissdiv',14);" <?php if($arrayrespuestas['ecrisisso3']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
           Consumo de sustancias psicoactivas.
          </label>
        </div>
        </div>  
        <div id="crisisso4div" <?php if($arrayrespuestas['ecrisisso4']==''|| $arrayrespuestas['ecrisisso4']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="crisisso4" id="crisisso4" onclick="cambiarsinocrisiss('SI','crisisso4','crisisso4div','crisissdiv',14);" <?php if($arrayrespuestas['ecrisisso4']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
           Desastres (naturales).
          </label>
        </div>
        </div>  
        <div id="crisisso5div" <?php if($arrayrespuestas['ecrisisso5']==''|| $arrayrespuestas['ecrisisso5']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="crisisso5" id="crisisso5" onclick="cambiarsinocrisiss('SI','crisisso5','crisisso5div','crisissdiv',14);" <?php if($arrayrespuestas['ecrisisso5']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
           Otra.
          </label>
        </div>
        </div>
                <div class="row" id="cualcsmostrar" name="cualcsmostrar" <?php if($arrayrespuestas['ecrisisso5']== 'NO'||$arrayrespuestas['ecrisisso5']== ''){echo('style="display:none"');}else{echo('');}  ?> >
                <div  id="cualcsdiv" name="cualcsdiv" class="form-group col-md-3">
                       <label class="control-label">Cual?</label>
                       <input type="text" class="form-control text-uppercase" id="cualcs" onkeypress="return soloLetras(event)"  onchange="validarcampotexcuadros('cualcsdiv','cualcs','24')" name="cualcs"   placeholder="Cual?" value="<?php if($arrayrespuestas['ecualcs'] == ''){echo('0');}else{ echo($arrayrespuestas['ecualcs']);} ?>">
                </div>
                </div>

       </div>
            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true"> 
              <div class="panel panel-danger">
                <div class="panel-heading" role="tab" id="headingOne">
                  <h4 class="panel-title">
                    <h5><strong>¿Qué acciones emprendió el hogar para superar la dificultad o crisis?</strong></h5>    
                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                      <h5>Estrategias: <small>que ha utilizado la familia para afrontar las situaciones o dificultades expresadas</small></h5>
                    </a>
                    <button type="button" id="vayuda" name="vayuda" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModalconf">
                        <span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span> Adicionar
                    </button> 
                  </h4>
                </div>
                <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                    <?php echo($carraytraercrisisscual1); ?>
                 </div>    
              </div>
            </div>  
            
      </div> 
    
<!--Fin Chek varias selecciones-->

<!--Check varias selecciones  TANGIBLES -->
    <div class="row">
        <div id="facttediv" name="facttediv" class="form-group col-md-12 form-group-sm">
        <div id="facttso0div" class="has-error">
            <label class="control-label"><br>Activos o Factores Protectores Tangibles que facilitan el tratamiento de la dificultad o problemática económica
                     
                    <button type="button" id="vayuda" name="vayuda" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModal">
                        <span class="glyphicon glyphicon-question-sign" aria-hidden="true"></span> Ayuda
                    </button>       
        </label>
        </div>
        <div id="facttso1div" <?php if($arrayrespuestas['efacttso1']=='' || $arrayrespuestas['efacttso1']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
            <label>
              <input type="checkbox" name="facttso1" id="facttso1" onclick="cambiarsinocrisiss('SI','facttso1','facttso1div','facttediv',14);" <?php if($arrayrespuestas['efacttso1']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
           Acceso a instituciones (Salud, educación, identificación, participación, etc).
            </label>
        </div>
        </div>
        <div id="facttso2div" <?php if($arrayrespuestas['efacttso2']=='' || $arrayrespuestas['efacttso2']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="facttso2" id="facttso2" onclick="cambiarsinocrisiss('SI','facttso2','facttso2div','facttediv',14);" <?php if($arrayrespuestas['efacttso2']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            Acceso a atención psicosocial.
          </label>
        </div>
        </div>
        <div id="facttso3div" <?php if($arrayrespuestas['efacttso3']==''|| $arrayrespuestas['efacttso3']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="facttso3" id="facttso3" onclick="cambiarsinocrisiss('SI','facttso3','facttso3div','facttediv',14);" <?php if($arrayrespuestas['efacttso3']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
           Otra.
          </label>
        </div>
        </div>
                <div class="row" id="cualtsmostrar" name="cualtsmostrar" <?php if($arrayrespuestas['efacttso3']== 'NO'||$arrayrespuestas['efacttso3']== ''){echo('style="display:none"');}else{echo('');}  ?> >
                <div  id="cualtsdiv" name="cualtsdiv" class="form-group col-md-3">
                       <label class="control-label">Cual?</label>
                       <input type="text" class="form-control text-uppercase" id="cualts" onkeypress="return soloLetras(event)"  onchange="validarcampotexcuadros('cualtsdiv','cualts','24')" name="cualts"   placeholder="Cual?" value="<?php if($arrayrespuestas['ecualts'] == ''){echo('0');}else{ echo($arrayrespuestas['ecualts']);} ?>">
                </div>
                </div>
       </div>
           <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true"> 
              <div class="panel panel-danger">
                <div class="panel-heading" role="tab" id="heading1t">
                  <h4 class="panel-title">
                    <a role="button" class="col-sm-offset-12" data-toggle="collapse" data-parent="#accordion" href="#collapse1t" aria-expanded="true" aria-controls="collapse1t">
<!--                      <h5>Descripción: <small></small></h5>-->
                    </a>.
<!--                    <button type="button" id="vayuda" name="vayuda" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModaltvl">
                        <span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span> Adicionar
                    </button> -->
                  </h4>
                </div>
                <div id="collapse1t" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading1t">
                </div>    
              </div>
            </div> 
      </div> 
<!--Fin Chek varias selecciones TANGIBLES-->

<!--Check varias selecciones  INTANGIBLES -->
    <div class="row">
        <div id="factiediv" name="factiediv" class="form-group col-md-12 form-group-sm">
        <div id="factiso0div" class="has-error">
            <label class="control-label"><br>Activos o Factores Protectores Intangibles que facilitan el tratamiento de la dificultad o problemática económica
                     
                    <button type="button" id="vayuda" name="vayuda" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModal">
                        <span class="glyphicon glyphicon-question-sign" aria-hidden="true"></span> Ayuda
                    </button>       
        </label>
        </div>
        <div id="factiso1div" <?php if($arrayrespuestas['efactiso1']=='' || $arrayrespuestas['efactiso1']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
            <label>
              <input type="checkbox" name="factiso1" id="factiso1" onclick="cambiarsinocrisiss('SI','factiso1','factiso1div','factiediv',14);" <?php if($arrayrespuestas['efactiso1']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
           Reconocimiento de instituciones y rutas de atención.
            </label>
        </div>
        </div>
        <div id="factiso2div" <?php if($arrayrespuestas['efactiso2']=='' || $arrayrespuestas['efactiso2']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="factiso2" id="factiso2" onclick="cambiarsinocrisiss('SI','factiso2','factiso2div','factiediv',14);" <?php if($arrayrespuestas['efactiso2']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            Red de apoyo (amigos, compañeros, vecinos, etc.) activa
          </label>
        </div>
        </div>
        <div id="factiso3div" <?php if($arrayrespuestas['efactiso3']==''|| $arrayrespuestas['efactiso3']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="factiso3" id="factiso3" onclick="cambiarsinocrisiss('SI','factiso3','factiso3div','factiediv',14);" <?php if($arrayrespuestas['efactiso3']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
           Otra.
          </label>
        </div>
        </div>
                <div class="row" id="cualismostrar" name="cualismostrar" <?php if($arrayrespuestas['efactiso3']== 'NO'||$arrayrespuestas['efactiso3']== ''){echo('style="display:none"');}else{echo('');}  ?> >
                <div  id="cualisdiv" name="cualisdiv" class="form-group col-md-3">
                       <label class="control-label">Cual?</label>
                       <input type="text" class="form-control text-uppercase" id="cualis" onkeypress="return soloLetras(event)"  onchange="validarcampotexcuadros('cualisdiv','cualis','24')" name="cualis"   placeholder="Cual?" value="<?php if($arrayrespuestas['ecualis'] == ''){echo('0');}else{ echo($arrayrespuestas['ecualis']);} ?>">
                </div>
                </div>

       </div>
            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true"> 
              <div class="panel panel-danger">
                <div class="panel-heading" role="tab" id="heading1i">
                  <h4 class="panel-title">
                    <a role="button" class="col-sm-offset-12" data-toggle="collapse" data-parent="#accordion" href="#collapse1i" aria-expanded="true" aria-controls="collapse1i">
<!--                      <h5>Descripción: <small></small></h5>-->
                    </a>.
<!--                    <button type="button" id="vayuda" name="vayuda" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModalieb">
                        <span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span> Adicionar
                    </button> -->
                  </h4>
                </div>
                <div id="collapse1i" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading1i">
                </div>    
              </div>
            </div>
      </div> 
    
<!--Fin Chek varias selecciones Intangibles-->

<!--ESTRATEGIAS-->
            <!-- Modal -->
            <div class="modal fade" id="myModalconf" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Nueva estrategia que la familia ha utilizado para afrontar las situaciones o dificultades expresadas</h4>
                  </div>
                  <div class="modal-body">
                      <p></p>
                      <hr/>
<!--                  <textarea id="textconformacion" class="form-control" rows="3" onchange="validarconformacionlleno()"></textarea>-->
                      <textarea id="crisisscual1" class="form-control"   onchange="validarcampocrisisscual1()"></textarea>
                  </div>
                  <div class="modal-footer">
                    
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                    <button type="button" id="btncrisisscual1" class="btn btn-danger" data-dismiss="modal" disabled="" onclick="guardarcrisisscual1()">Guardar</button>
                  </div>
                </div>
              </div>
            </div>
            <!-- Modal -->
              
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
            <?php if($arrayrespuestas['ecrisisso1']=="" & $arrayrespuestas['ecrisisso2']=="" & $arrayrespuestas['ecrisisso3']=="" & $arrayrespuestas['ecrisisso4']=="")
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
                          data: {vfolio : $('#folio').val(), vcrisisso1 : $('#crisisso1').val(),vcrisisso2 : $('#crisisso2').val(),
                                 vcrisisso3 : $('#crisisso3').val(),vcrisisso4 : $('#crisisso4').val(),vcrisisso5 : $('#crisisso5').val()
                                 ,vfacttso1 : $('#facttso1').val(),vfacttso2 : $('#facttso2').val(),
                                 vfacttso3 : $('#facttso3').val(),vfactiso1 : $('#factiso1').val(),vfactiso2 : $('#factiso2').val(),
                                 vfactiso3 : $('#factiso3').val(),vcualcs : $('#cualcs').val(),vcualts : $('#cualts').val(),vcualis : $('#cualis').val()},    
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
                          data: {vfolio : $('#folio').val(), vcrisisso1 : $('#crisisso1').val(),vcrisisso2 : $('#crisisso2').val(),
                                 vcrisisso3 : $('#crisisso3').val(),vcrisisso4 : $('#crisisso4').val(),vcrisisso5 : $('#crisisso5').val(),
                                 vfacttso1 : $('#facttso1').val(),vfacttso2 : $('#facttso2').val(),
                                 vfacttso3 : $('#facttso3').val(),vfactiso1 : $('#factiso1').val(),vfactiso2 : $('#factiso2').val(),
                                 vfactiso3 : $('#factiso3').val(),vcualcs : $('#cualcs').val(),vcualts : $('#cualts').val(),vcualis : $('#cualis').val()},
                          dataType: "html",
                          success : function(obj){                      
                          botonactualizar();
                          }
                        });                   
        });
        

        $("#siguiente").click(function ()
        {
        location.href = "../c_infocorresp/fc_infocorresp?folio="+ $('#folio').val() +"&idintegrante=0"+"&doccogestor="+$('#doccogestor').val()+"&idestacion=0";                     
        });

        $("#anterior").click(function ()
        {
        location.href = "../c_crisisf/fc_crisisf?folio="+ $('#folio').val() +"&idintegrante=0"+"&doccogestor="+$('#doccogestor').val();                     
        });
//para cargar variables capitulo, pregunta,encuestador,vivienda,barra
cargardatosgenerales('<?php echo('Historia hogar'); ?>','Vista 4 de 7','<?php echo($arraydatosgenerales['enomcoges']); ?>','<?php echo($arraydatosgenerales['etitular']); ?>','56');
//control del boton ayuda
botonayuda();

});

function validarcampocrisisscual1()
{
    if ($('#crisisscual1').val() == '')
    {
        $('#btncrisisscual1').prop('disabled', true);
    }
    else
    {
        $('#btncrisisscual1').prop('disabled', false);
    }
}

function guardarcrisisscual1()
{
                        $.ajax({
                          url: "fc_crisisscual1",
                          type: "POST",
                          data: {vfolio : $('#folio').val(), vcrisisscual1 : $('#crisisscual1').val(), vestacion : 'Estación H'},    
                          dataType: "html",
                          success : function(obj){
                          $('#collapseOne').html(obj);    
                          mensajito('MENSAJE','La informacion se actualizo');
                          $('#crisisscual1').val('');
                          $('#btncrisisscual1').prop('disabled', true);
                          }
                        });     
}


//dea aca para abajo es logica de cuadros
function cambiarsinocrisiss(opcion,campoval,divcampo,divcompleto,campos,mostrar)
{
//    alert ('entra');
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
    
    if(campoval == 'crisisso5')
        {
            if($('#' + campoval).val() == 'SI')
            {
                $('#cualcsmostrar').show(1000);
                $('#cualcs').val('');
            }
            else
            {
                $('#cualcsmostrar').hide(1000);
                $('#cualcs').val('98');
            }
        }
        
// TANGIBLES        
        
    if(campoval == 'facttso3')
        {
            if($('#' + campoval).val() == 'SI')
            {
                $('#cualtsmostrar').show(1000);
                $('#cualts').val('');
            }
            else
            {
                $('#cualtsmostrar').hide(1000);
                $('#cualts').val('98');
            }
        }            

// TANGIBLES

// INTANGIBLES        
        
    if(campoval == 'factiso3')
        {
            if($('#' + campoval).val() == 'SI')
            {
                $('#cualismostrar').show(1000);
                $('#cualis').val('');
            }
            else
            {
                $('#cualismostrar').hide(1000);
                $('#cualis').val('98');
            }
        }            

      validarcuadroscrisiss(divcompleto,campos);
}

function validarcuadroscrisiss(divcuadro,ncampos)
{

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

function validarcampotexcuadros(div,campo,ncampos)
{
    //alert('entra');
    validarbolitasytexto(div,campo);
    validarcuadroscrisiss(div,ncampos);
}
$("#capitulos").hide();
</script>
</html>