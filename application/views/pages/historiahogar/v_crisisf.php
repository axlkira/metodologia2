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
            <div class="panel-heading">VULNERABILIDAD, DIFICULTAD O CRISIS EN LO <strong>FAMILIAR</strong></div>
        </div>
    
        <div id="crisisfdiv" name="crisisfdiv" class="form-group col-md-12 form-group-sm">
        <div id="crisisfo0div" class="has-error">
            <label class="control-label"><br>Factores Familiares internos y/o externos que afecten, pongan en riesgo o vulneren al hogar
                     
                     <button type="button" id="vayuda" name="vayuda" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModal">
                        <span class="glyphicon glyphicon-question-sign" aria-hidden="true"></span> Ayuda
                    </button>       
        </label>
        </div>
        <div id="crisisfo1div" <?php if($arrayrespuestas['ecrisisfo1']=='' || $arrayrespuestas['ecrisisfo1']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
            <label>
              <input type="checkbox" name="crisisfo1" id="crisisfo1" onclick="cambiarsinocrisisf('SI','crisisfo1','crisisfo1div','crisisfdiv',21);" <?php if($arrayrespuestas['ecrisisfo1']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
           Violencia intrafamiliar
            </label>
        </div>
        </div>
        <div id="crisisfo2div" <?php if($arrayrespuestas['ecrisisfo2']=='' || $arrayrespuestas['ecrisisfo2']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="crisisfo2" id="crisisfo2" onclick="cambiarsinocrisisf('SI','crisisfo2','crisisfo2div','crisisfdiv',21);" <?php if($arrayrespuestas['ecrisisfo2']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            Dificultades en las Relaciones Familiares
          </label>
        </div>
        </div>
        <div id="crisisfo3div" <?php if($arrayrespuestas['ecrisisfo3']==''|| $arrayrespuestas['ecrisisfo3']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="crisisfo3" id="crisisfo3" onclick="cambiarsinocrisisf('SI','crisisfo3','crisisfo3div','crisisfdiv',21);" <?php if($arrayrespuestas['ecrisisfo3']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
           Eventos familiares difíciles (fallecimientos, separación, superación de etapas del ciclo vital familiar)
          </label>
        </div>
        </div>  
        <div id="crisisfo4div" <?php if($arrayrespuestas['ecrisisfo4']==''|| $arrayrespuestas['ecrisisfo4']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="crisisfo4" id="crisisfo4" onclick="cambiarsinocrisisf('SI','crisisfo4','crisisfo4div','crisisfdiv',21);" <?php if($arrayrespuestas['ecrisisfo4']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
           Consumo de sustancias psicoactivas
          </label>
        </div>
        </div>  
        <div id="crisisfo5div" <?php if($arrayrespuestas['ecrisisfo5']==''|| $arrayrespuestas['ecrisisfo5']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="crisisfo5" id="crisisfo5" onclick="cambiarsinocrisisf('SI','crisisfo5','crisisfo5div','crisisfdiv',21);" <?php if($arrayrespuestas['ecrisisfo5']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
           Otra
          </label>
        </div>
        </div>
                <div class="row" id="cualcfmostrar" name="cualcfmostrar" <?php if($arrayrespuestas['ecrisisfo5']== 'NO'||$arrayrespuestas['ecrisisfo5']== ''){echo('style="display:none"');}else{echo('');}  ?> >
                <div  id="cualcfdiv" name="cualcfdiv" class="form-group col-md-3">
                       <label class="control-label">Cual?</label>
                       <input type="text" class="form-control text-uppercase" id="cualcf" onkeypress="return soloLetras(event)"  onchange="validarcampotexcuadros('cualcfdiv','cualcf','24')" name="cualcf"   placeholder="Cual?" value="<?php if($arrayrespuestas['ecualcf'] == ''){echo('0');}else{ echo($arrayrespuestas['ecualcf']);} ?>">
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
                    <?php echo($carraytraercrisisfcual1); ?>
                 </div>    
              </div>
            </div>
        </div>
    
       
    
<!--Fin Chek varias selecciones-->

<!--Check varias selecciones  TANGIBLES -->
    <div class="row">
        <div id="facttfdiv" name="facttfdiv" class="form-group col-md-12 form-group-sm">
        <div id="facttfo0div" class="has-error">
            <label class="control-label"><br>Activos o Factores Protectores Tangibles que facilitan el tratamiento de la dificultad o problemática Familiar
                     
                    <button type="button" id="vayuda" name="vayuda" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModal">
                        <span class="glyphicon glyphicon-question-sign" aria-hidden="true"></span> Ayuda
                    </button>       
        </label>
        </div>
        <div id="facttfo1div" <?php if($arrayrespuestas['efacttfo1']=='' || $arrayrespuestas['efacttfo1']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
            <label>
              <input type="checkbox" name="facttfo1" id="facttfo1" onclick="cambiarsinocrisisf('SI','facttfo1','facttfo1div','facttfdiv',21);" <?php if($arrayrespuestas['efacttfo1']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
           Acceso a servicios de intervención de violencia intrafamiliar
            </label>
        </div>
        </div>
        <div id="facttfo2div" <?php if($arrayrespuestas['efacttfo2']=='' || $arrayrespuestas['efacttfo2']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="facttfo2" id="facttfo2" onclick="cambiarsinocrisisf('SI','facttfo2','facttfo2div','facttfdiv',21);" <?php if($arrayrespuestas['efacttfo2']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            Acceso a atención psicosocial
          </label>
        </div>
        </div>
        <div id="facttfo3div" <?php if($arrayrespuestas['efacttfo3']==''|| $arrayrespuestas['efacttfo3']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="facttfo3" id="facttfo3" onclick="cambiarsinocrisisf('SI','facttfo3','facttfo3div','facttfdiv',21);" <?php if($arrayrespuestas['efacttfo3']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
           Expresiones de Afecto: Abrazos, besos, caricias, Otros
          </label>
        </div>
        </div>  
        <div id="facttfo4div" <?php if($arrayrespuestas['efacttfo4']==''|| $arrayrespuestas['efacttfo4']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="facttfo4" id="facttfo4" onclick="cambiarsinocrisisf('SI','facttfo4','facttfo4div','facttfdiv',21);" <?php if($arrayrespuestas['efacttfo4']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
           Reconocimiento puntos de referencia en la localidad para compartir en familia 
          </label>
        </div>
        </div>  
        <div id="facttfo5div" <?php if($arrayrespuestas['efacttfo5']==''|| $arrayrespuestas['efacttfo5']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="facttfo5" id="facttfo5" onclick="cambiarsinocrisisf('SI','facttfo5','facttfo5div','facttfdiv',21);" <?php if($arrayrespuestas['efacttfo5']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
           Actividades  o proyectos en familia
          </label>
        </div>
        </div>
        <div id="facttfo6div" <?php if($arrayrespuestas['efacttfo6']==''|| $arrayrespuestas['efacttfo6']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="facttfo6" id="facttfo6" onclick="cambiarsinocrisisf('SI','facttfo6','facttfo6div','facttfdiv',21);" <?php if($arrayrespuestas['efacttfo6']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            Otra
          </label>
        </div>
        </div>
                <div class="row" id="cualtfmostrar" name="cualtfmostrar" <?php if($arrayrespuestas['efacttfo6']== 'NO'||$arrayrespuestas['efacttfo6']== ''){echo('style="display:none"');}else{echo('');}  ?> >
                <div  id="cualtfdiv" name="cualtfdiv" class="form-group col-md-3">
                       <label class="control-label">Cual?</label>
                       <input type="text" class="form-control text-uppercase" id="cualtf" onkeypress="return soloLetras(event)"  onchange="validarcampotexcuadros('cualtfdiv','cualtf','24')" name="cualte"   placeholder="Cual?" value="<?php if($arrayrespuestas['ecualtf'] == ''){echo('0');}else{ echo($arrayrespuestas['ecualtf']);} ?>">
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
        <div id="factifdiv" name="factifdiv" class="form-group col-md-12 form-group-sm">
        <div id="factifo0div" class="has-error">
            <label class="control-label"><br>Activos o Factores Protectores Intangibles que facilitan el tratamiento de la dificultad o problemática Familiar
                     
                    <button type="button" id="vayuda" name="vayuda" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModal">
                        <span class="glyphicon glyphicon-question-sign" aria-hidden="true"></span> Ayuda
                    </button>       
        </label>
        </div>
        <div id="factifo1div" <?php if($arrayrespuestas['efactifo1']=='' || $arrayrespuestas['efactifo1']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
            <label>
              <input type="checkbox" name="factifo1" id="factifo1" onclick="cambiarsinocrisisf('SI','factifo1','factifo1div','factifdiv',21);" <?php if($arrayrespuestas['efactifo1']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
           Red de apoyo
            </label>
        </div>
        </div>
        <div id="factifo2div" <?php if($arrayrespuestas['efactifo2']=='' || $arrayrespuestas['efactifo2']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="factifo2" id="factifo2" onclick="cambiarsinocrisisf('SI','factifo2','factifo2div','factifdiv',21);" <?php if($arrayrespuestas['efactifo2']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            Acuerdos para resolver problemas
          </label>
        </div>
        </div>
        <div id="factifo3div" <?php if($arrayrespuestas['efactifo3']==''|| $arrayrespuestas['efactifo3']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="factifo3" id="factifo3" onclick="cambiarsinocrisisf('SI','factifo3','factifo3div','factifdiv',21);" <?php if($arrayrespuestas['efactifo3']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
           Otra
          </label>
        </div>
          </div>
                <div class="row" id="cualifmostrar" name="cualifmostrar" <?php if($arrayrespuestas['efactifo3']== 'NO'||$arrayrespuestas['efactifo3']== ''){echo('style="display:none"');}else{echo('');}  ?> >
                <div  id="cualifdiv" name="cualifdiv" class="form-group col-md-3">
                       <label class="control-label">Cual?</label>
                       <input type="text" class="form-control text-uppercase" id="cualif" onkeypress="return soloLetras(event)"  onchange="validarcampotexcuadros('cualifdiv','cualif','24')" name="cualif"   placeholder="Cual?" value="<?php if($arrayrespuestas['ecualif'] == ''){echo('0');}else{ echo($arrayrespuestas['ecualif']);} ?>">
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
                      <textarea id="crisisfcual1" class="form-control"   onchange="validarcampocrisisfcual1()"></textarea>
                  </div>
                  <div class="modal-footer">
                    
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                    <button type="button" id="btncrisisfcual1" class="btn btn-danger" data-dismiss="modal" disabled="" onclick="guardarcrisisfcual1()">Guardar</button>
                  </div>
                </div>
              </div>
            </div>
 <!--FIN Modal -->
            
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
            <?php if($arrayrespuestas['ecrisisfo1']=="" & $arrayrespuestas['ecrisisfo2']=="" & $arrayrespuestas['ecrisisfo3']=="")
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
                          data: {vfolio : $('#folio').val(), vcrisisfo1 : $('#crisisfo1').val(),vcrisisfo2 : $('#crisisfo2').val(),
                                 vcrisisfo3 : $('#crisisfo3').val(),vcrisisfo4 : $('#crisisfo4').val(),vcrisisfo5 : $('#crisisfo5').val(),
                                 vfacttfo1 : $('#facttfo1').val(),vfacttfo2 : $('#facttfo2').val(),vfacttfo3 : $('#facttfo3').val(),
                                 vfacttfo4 : $('#facttfo4').val(),vfacttfo5 : $('#facttfo5').val(),vfacttfo6 : $('#facttfo6').val(),
                                 vfactifo1 : $('#factifo1').val(),vfactifo2 : $('#factifo2').val(),vfactifo3 : $('#factifo3').val(),
                                 vcualcf : $('#cualcf').val(),vcualtf : $('#cualtf').val(),vcualif : $('#cualif').val()},    
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
                          data: {vfolio : $('#folio').val(), vcrisisfo1 : $('#crisisfo1').val(),vcrisisfo2 : $('#crisisfo2').val(),
                                 vcrisisfo3 : $('#crisisfo3').val(),vcrisisfo4 : $('#crisisfo4').val(),vcrisisfo5 : $('#crisisfo5').val(),
                                 vfacttfo1 : $('#facttfo1').val(),vfacttfo2 : $('#facttfo2').val(),vfacttfo3 : $('#facttfo3').val(),
                                 vfacttfo4 : $('#facttfo4').val(),vfacttfo5 : $('#facttfo5').val(),vfacttfo6 : $('#facttfo6').val(),
                                 vfactifo1 : $('#factifo1').val(),vfactifo2 : $('#factifo2').val(),vfactifo3 : $('#factifo3').val(),
                                 vcualcf : $('#cualcf').val(),vcualtf : $('#cualtf').val(),vcualif : $('#cualif').val()},
                          dataType: "html",
                          success : function(obj){                      
                          botonactualizar();
                          }
                        });                   
        });
        

        $("#siguiente").click(function ()
        {
        location.href = "../c_crisiss/fc_crisiss?folio="+ $('#folio').val() +"&idintegrante=0"+"&doccogestor="+$('#doccogestor').val();                         
        });

        $("#anterior").click(function ()
        {
        location.href = "../c_crisise/fc_crisise?folio="+ $('#folio').val() +"&idintegrante=0"+"&doccogestor="+$('#doccogestor').val();                         
        });
//para cargar variables capitulo, pregunta,encuestador,vivienda,barra
cargardatosgenerales('<?php echo('Historia hogar'); ?>','Vista 3 de 7','<?php echo($arraydatosgenerales['enomcoges']); ?>','<?php echo($arraydatosgenerales['etitular']); ?>','42');
//control del boton ayuda
botonayuda();

});

function validarcampocrisisfcual1()
{
    if ($('#crisisfcual1').val() == '')
    {
        $('#btncrisisfcual1').prop('disabled', true);
    }
    else
    {
        $('#btncrisisfcual1').prop('disabled', false);
    }
}

function guardarcrisisfcual1()
{
                        $.ajax({
                          url: "fc_crisisfcual1",
                          type: "POST",
                          data: {vfolio : $('#folio').val(), vcrisisfcual1 : $('#crisisfcual1').val(), vestacion : 'Estación H'},    
                          dataType: "html",
                          success : function(obj){
                          $('#collapseOne').html(obj);    
                          mensajito('MENSAJE','La informacion se actualizo');
                          $('#crisisfcual1').val('');
                          $('#btncrisisfcual1').prop('disabled', true);
                          }
                        });     
}


//dea aca para abajo es logica de cuadros
function cambiarsinocrisisf(opcion,campoval,divcampo,divcompleto,campos,mostrar)
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
    
    if(campoval == 'crisisfo5')
        {
           if($('#' + campoval).val() == 'SI')
            {
                $('#cualcfmostrar').show(1000);
                $('#cualcf').val('');
            }
            else
            {
                $('#cualcfmostrar').hide(1000);
                $('#cualcf').val('98');
            }
        }
        
// TANGIBLES        
        
    if(campoval == 'facttfo6')
        {
            if($('#' + campoval).val() == 'SI')
            {
                $('#cualtfmostrar').show(1000);
                $('#cualtf').val('');
            }
            else
            {
                $('#cualtfmostrar').hide(1000);
                $('#cualtf').val('98');
            }
        }            
// TANGIBLES

// INTANGIBLES        
        
    if(campoval == 'factifo3')
        {
            if($('#' + campoval).val() == 'SI')
            {
                $('#cualifmostrar').show(1000);
                $('#cualif').val('');
            }
            else
            {
                $('#cualifmostrar').hide(1000);
                $('#cualif').val('98');
            }
      
        }
   validarcuadroscrisisf(divcompleto,campos);     
}

function validarcuadroscrisisf(divcuadro,ncampos)
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
    validarcuadroscrisisf(div,ncampos);
}
$("#capitulos").hide();
</script>
</html>