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
        <div class="panel panel-info form-group-sm">
            <div class="panel-heading">VULNERABILIDAD, DIFICULTAD O CRISIS EN LO <strong>ECONÓMICO</strong></div>
        </div>    
        <div id="crisisediv" name="crisisediv" class="form-group col-md-12 form-group-sm">
        <div id="crisiseo0div" class="has-error">
            <label class="control-label"><br>Factores Económicos internos y/o externos que afecten, pongan en riesgo o vulneren al hogar
                     
                     <button type="button" id="vayuda" name="vayuda" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModal">
                        <span class="glyphicon glyphicon-question-sign" aria-hidden="true"></span> Ayuda
                    </button>       
        </label>
        </div>
        <div id="crisiseo1div" <?php if($arrayrespuestas['ecrisiseo1']=='' || $arrayrespuestas['ecrisiseo1']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
            <label>
              <input type="checkbox" name="crisiseo1" id="crisiseo1" onclick="cambiarsinocrisise('SI','crisiseo1','crisiseo1div','crisisediv',21);" <?php if($arrayrespuestas['ecrisiseo1']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
           Desempleo
            </label>
        </div>
        </div>
            
        <div id="crisiseo2div" <?php if($arrayrespuestas['ecrisiseo2']=='' || $arrayrespuestas['ecrisiseo2']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="crisiseo2" id="crisiseo2" onclick="cambiarsinocrisise('SI','crisiseo2','crisiseo2div','crisisediv',21);" <?php if($arrayrespuestas['ecrisiseo2']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            Empleo informal
          </label>
        </div>
        </div>
            
        <div id="crisiseo3div" <?php if($arrayrespuestas['ecrisiseo3']==''|| $arrayrespuestas['ecrisiseo3']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="crisiseo3" id="crisiseo3" onclick="cambiarsinocrisise('SI','crisiseo3','crisiseo3div','crisisediv',21);" <?php if($arrayrespuestas['ecrisiseo3']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
           Analfabetismo
          </label>
        </div>
        </div>  
            
        <div id="crisiseo4div" <?php if($arrayrespuestas['ecrisiseo4']==''|| $arrayrespuestas['ecrisiseo4']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="crisiseo4" id="crisiseo4" onclick="cambiarsinocrisise('SI','crisiseo4','crisiseo4div','crisisediv',21);" <?php if($arrayrespuestas['ecrisiseo4']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
           No formación complementaria
          </label>
        </div>
        </div>  
            
        <div id="crisiseo5div" <?php if($arrayrespuestas['ecrisiseo5']==''|| $arrayrespuestas['ecrisiseo5']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="crisiseo5" id="crisiseo5" onclick="cambiarsinocrisise('SI','crisiseo5','crisiseo5div','crisisediv',21);" <?php if($arrayrespuestas['ecrisiseo5']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
           Ingresos limitados
          </label>
        </div>
        </div>
            
        <div id="crisiseo6div" <?php if($arrayrespuestas['ecrisiseo6']==''|| $arrayrespuestas['ecrisiseo6']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="crisiseo6" id="crisiseo6" onclick="cambiarsinocrisise('SI','crisiseo6','crisiseo6div','crisisediv',21);" <?php if($arrayrespuestas['ecrisiseo6']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            Otra
          </label>
        </div>
        </div>
                <div class="row" id="cualcemostrar" name="cualcemostrar" <?php if($arrayrespuestas['ecrisiseo6']== 'NO'||$arrayrespuestas['ecrisiseo6']== ''){echo('style="display:none"');}else{echo('');}  ?> >
                <div  id="cualcediv" name="cualcediv" class="form-group col-md-3">
                       <label class="control-label">Cual?</label>
                       <input type="text" class="form-control text-uppercase" id="cualce" onkeypress="return soloLetras(event)"  onchange="validarcampotexcuadros('cualcediv','cualce','24')" name="cualce"   placeholder="Cual?" value="<?php if($arrayrespuestas['ecualce'] == ''){echo('0');}else{ echo($arrayrespuestas['ecualce']);} ?>">
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
                    <?php echo($carraytraercrisisecual1); ?>
                 </div>    
              </div>
            </div>
            
      </div> 
    
<!--Fin Chek varias selecciones-->

<!--Check varias selecciones  TANGIBLES -->
    <div class="row">
        
        <div id="facttediv" name="facttediv" class="form-group col-md-12 form-group-sm">
        <div id="factteo0div" class="has-error">
            <label class="control-label"><br>Activos o Factores Protectores Tangibles que facilitan el tratamiento de la dificultad o problemática económica
                     
                    <button type="button" id="vayuda" name="vayuda" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModal">
                        <span class="glyphicon glyphicon-question-sign" aria-hidden="true"></span> Ayuda
                    </button>       
        </label>
        </div>
        <div id="factteo1div" <?php if($arrayrespuestas['efactteo1']=='' || $arrayrespuestas['efactteo1']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
            <label>
              <input type="checkbox" name="factteo1" id="factteo1" onclick="cambiarsinocrisise('SI','factteo1','factteo1div','facttediv',21);" <?php if($arrayrespuestas['efactteo1']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
           Vinculación laboral
            </label>
        </div>
        </div>
            
        <div id="factteo2div" <?php if($arrayrespuestas['efactteo2']=='' || $arrayrespuestas['efactteo2']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="factteo2" id="factteo2" onclick="cambiarsinocrisise('SI','factteo2','factteo2div','facttediv',21);" <?php if($arrayrespuestas['efactteo2']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            Unidad productiva - Intermediación laboral
          </label>
        </div>
        </div>
            
        <div id="factteo3div" <?php if($arrayrespuestas['efactteo3']==''|| $arrayrespuestas['efactteo3']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="factteo3" id="factteo3" onclick="cambiarsinocrisise('SI','factteo3','factteo3div','facttediv',21);" <?php if($arrayrespuestas['efactteo3']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
           Generación de ingresos para la subsistencia del hogar
          </label>
        </div>
        </div>  
            
        <div id="factteo4div" <?php if($arrayrespuestas['efactteo4']==''|| $arrayrespuestas['efactteo4']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="factteo4" id="factteo4" onclick="cambiarsinocrisise('SI','factteo4','factteo4div','facttediv',21);" <?php if($arrayrespuestas['efactteo4']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
           Bienes o enseres como: Carro de perros, máquina de coser, casa, carro, etc. 
          </label>
        </div>
        </div>  
            
        <div id="factteo5div" <?php if($arrayrespuestas['efactteo5']==''|| $arrayrespuestas['efactteo5']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="factteo5" id="factteo5" onclick="cambiarsinocrisise('SI','factteo5','factteo5div','facttediv',21);" <?php if($arrayrespuestas['efactteo5']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
           Subsidios Pensiones
          </label>
        </div>
        </div>
            
        <div id="factteo6div" <?php if($arrayrespuestas['efactteo6']==''|| $arrayrespuestas['efactteo6']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="factteo6" id="factteo6" onclick="cambiarsinocrisise('SI','factteo6','factteo6div','facttediv',21);" <?php if($arrayrespuestas['efactteo6']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            Otra
          </label>
        </div>
        </div>
                <div class="row" id="cualtemostrar" name="cualtemostrar" <?php if($arrayrespuestas['efactteo6']== 'NO'||$arrayrespuestas['efactteo6']== ''){echo('style="display:none"');}else{echo('');}  ?> >
                <div  id="cualtediv" name="cualtediv" class="form-group col-md-3">
                       <label class="control-label">Cual?</label>
                       <input type="text" class="form-control text-uppercase" id="cualte" onkeypress="return soloLetras(event)"  onchange="validarcampotexcuadros('cualtediv','cualte','24')" name="cualte"   placeholder="Cual?" value="<?php if($arrayrespuestas['ecualte'] == ''){echo('0');}else{ echo($arrayrespuestas['ecualte']);} ?>">
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
        <div id="factieo0div" class="has-error">
            <label class="control-label"><br>Activos o Factores Protectores Intangibles que facilitan el tratamiento de la dificultad o problemática económica
                     
                    <button type="button" id="vayuda" name="vayuda" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModal">
                        <span class="glyphicon glyphicon-question-sign" aria-hidden="true"></span> Ayuda
                    </button>       
        </label>
        </div>
        <div id="factieo1div" <?php if($arrayrespuestas['efactieo1']=='' || $arrayrespuestas['efactieo1']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
            <label>
              <input type="checkbox" name="factieo1" id="factieo1" onclick="cambiarsinocrisise('SI','factieo1','factieo1div','factiediv',21);" <?php if($arrayrespuestas['efactieo1']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
           Educación básica
            </label>
        </div>
        </div>
            
        <div id="factieo2div" <?php if($arrayrespuestas['efactieo2']=='' || $arrayrespuestas['efactieo2']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="factieo2" id="factieo2" onclick="cambiarsinocrisise('SI','factieo2','factieo2div','factiediv',21);" <?php if($arrayrespuestas['efactieo2']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            Educación Complementaria
          </label>
        </div>
        </div>
            
        <div id="factieo3div" <?php if($arrayrespuestas['efactieo3']==''|| $arrayrespuestas['efactieo3']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="factieo3" id="factieo3" onclick="cambiarsinocrisise('SI','factieo3','factieo3div','factiediv',21);" <?php if($arrayrespuestas['efactieo3']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
           Educación superior
          </label>
        </div>
        </div>  
            
        <div id="factieo4div" <?php if($arrayrespuestas['efactieo4']==''|| $arrayrespuestas['efactieo4']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="factieo4" id="factieo4" onclick="cambiarsinocrisise('SI','factieo4','factieo4div','factiediv',21);" <?php if($arrayrespuestas['efactieo4']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
           Conocimientos empírico en un arte o un oficio.
          </label>
        </div>
        </div>  
            
        <div id="factieo5div" <?php if($arrayrespuestas['efactieo5']==''|| $arrayrespuestas['efactieo5']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="factieo5" id="factieo5" onclick="cambiarsinocrisise('SI','factieo5','factieo5div','factiediv',21);" <?php if($arrayrespuestas['efactieo5']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
           Red de apoyo pública, privada, familiar, comunitaria, entre otras. 
          </label>
        </div>
        </div>
            
        <div id="factieo6div" <?php if($arrayrespuestas['efactieo6']==''|| $arrayrespuestas['efactieo6']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="factieo6" id="factieo6" onclick="cambiarsinocrisise('SI','factieo6','factieo6div','factiediv',21);" <?php if($arrayrespuestas['efactieo6']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            Otra
          </label>
        </div>
        </div>
                <div class="row" id="cualiemostrar" name="cualiemostrar" <?php if($arrayrespuestas['efactieo6']== 'NO'||$arrayrespuestas['efactieo6']== ''){echo('style="display:none"');}else{echo('');}  ?> >
                <div  id="cualiediv" name="cualiediv" class="form-group col-md-3">
                       <label class="control-label">Cual?</label>
                       <input type="text" class="form-control text-uppercase" id="cualie" onkeypress="return soloLetras(event)"  onchange="validarcampotexcuadros('cualiediv','cualie','24')" name="cualie"   placeholder="Cual?" value="<?php if($arrayrespuestas['ecualie'] == ''){echo('0');}else{ echo($arrayrespuestas['ecualie']);} ?>">
                </div>
                </div>

            
       </div>
        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true"> 
              <div class="panel panel-danger">
                <div class="panel-heading" role="tab" id="heading1i">
                  <h4 class="panel-title">
                    <a class="col-sm-offset-12"  role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse1i" aria-expanded="true" aria-controls="collapse1i">
<!--                      <h5>Descripción: <small></small></h5>-->
                    </a>.
<!--                    <button type="button" id="vayuda" name="vayuda" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModalieb">
                        <span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span> Adicionar
                    </button> 
                  </h4>-->
                </div>
                <div id="collapse1i" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading1i">
                 </div>    
              </div>
            </div>
        
      </div> 
    
<!--Fin Chek varias selecciones Intangibles-->

<!--ESTRATEGIAS -->
            <!-- Modal Desempleo-->
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
                      <textarea id="crisisecual1" class="form-control"   onchange="validarcampocrisisecual1()"></textarea>
                  </div>
                  <div class="modal-footer">
                    
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                    <button type="button" id="btncrisisecual1" class="btn btn-danger" data-dismiss="modal" disabled="" onclick="guardarcrisisecual1()">Guardar</button>
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
            <?php if($arrayrespuestas['ecrisiseo1']=="" & $arrayrespuestas['ecrisiseo2']=="" & $arrayrespuestas['ecrisiseo3']=="" & $arrayrespuestas['ecrisiseo6']=="")
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
                          data: {vfolio : $('#folio').val(), vcrisiseo1 : $('#crisiseo1').val(),vcrisiseo2 : $('#crisiseo2').val(),
                                 vcrisiseo3 : $('#crisiseo3').val(),vcrisiseo4 : $('#crisiseo4').val(),vcrisiseo5 : $('#crisiseo5').val(),
                                 vcrisiseo6 : $('#crisiseo6').val(),vfactteo1 : $('#factteo1').val(),vfactteo2 : $('#factteo2').val(),
                                 vfactteo3 : $('#factteo3').val(),vfactteo4 : $('#factteo4').val(),vfactteo5 : $('#factteo5').val(),
                                 vfactteo6 : $('#factteo6').val(),vfactieo1 : $('#factieo1').val(),vfactieo2 : $('#factieo2').val(),
                                 vfactieo3 : $('#factieo3').val(),vfactieo4 : $('#factieo4').val(),vfactieo5 : $('#factieo5').val(),
                                 vfactieo6 : $('#factieo6').val(),vcualce : $('#cualce').val(),vcualte : $('#cualte').val(),vcualie : $('#cualie').val()},    
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
                          data: {vfolio : $('#folio').val(), vcrisiseo1 : $('#crisiseo1').val(),vcrisiseo2 : $('#crisiseo2').val(),
                                 vcrisiseo3 : $('#crisiseo3').val(),vcrisiseo4 : $('#crisiseo4').val(),vcrisiseo5 : $('#crisiseo5').val(),
                                 vcrisiseo6 : $('#crisiseo6').val(),vfactteo1 : $('#factteo1').val(),vfactteo2 : $('#factteo2').val(),
                                 vfactteo3 : $('#factteo3').val(),vfactteo4 : $('#factteo4').val(),vfactteo5 : $('#factteo5').val(),
                                 vfactteo6 : $('#factteo6').val(),vfactieo1 : $('#factieo1').val(),vfactieo2 : $('#factieo2').val(),
                                 vfactieo3 : $('#factieo3').val(),vfactieo4 : $('#factieo4').val(),vfactieo5 : $('#factieo5').val(),
                                 vfactieo6 : $('#factieo6').val(),vcualce : $('#cualce').val(),vcualte : $('#cualte').val(),vcualie : $('#cualie').val()},
                          dataType: "html",
                          success : function(obj){                      
                          botonactualizar();
                          }
                        });                   
        });
        

        $("#siguiente").click(function ()
        {
//         botonsiguiente();
         location.href = "../c_crisisf/fc_crisisf?folio="+ $('#folio').val() +"&idintegrante=0"+"&doccogestor="+$('#doccogestor').val();                     
        });

        $("#anterior").click(function ()
        {
         location.href = "../c_historiahogar/fc_historiahogar?folio="+ $('#folio').val() +"&idintegrante=0"+"&doccogestor="+$('#doccogestor').val();;;   
        });
//para cargar variables capitulo, pregunta,encuestador,vivienda,barra
cargardatosgenerales('<?php echo('Historia hogar'); ?>','Vista 2 de 7','<?php echo($arraydatosgenerales['enomcoges']); ?>','<?php echo($arraydatosgenerales['etitular']); ?>','28');
//control del boton ayuda
botonayuda();

});

function validarcampocrisisecual1()
{
    if ($('#crisisecual1').val() == '')
    {
        $('#btncrisisecual1').prop('disabled', true);
    }
    else
    {
        $('#btncrisisecual1').prop('disabled', false);
    }
}

function guardarcrisisecual1()
{
                        $.ajax({
                          url: "fc_crisisecual1",
                          type: "GET",
                          data: {vfolio : $('#folio').val(), vcrisisecual1 : $('#crisisecual1').val(), vestacion : 'Estación H'},    
                          dataType: "html",
                          success : function(obj){
                          $('#collapseOne').html(obj);    
                          mensajito('MENSAJE','La informacion se actualizo');
                          $('#crisisecual1').val('');
                          $('#btncrisisecual1').prop('disabled', true);
                          }
                        });     
}

//dea aca para abajo es logica de cuadros
function cambiarsinocrisise(opcion,campoval,divcampo,divcompleto,campos,mostrar)
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
    if(campoval == 'crisiseo6')
        {
            if($('#' + campoval).val() == 'SI')
            {
                $('#cualcemostrar').show(1000);
                $('#cualce').val('');
            }
            else
            {
                $('#cualcemostrar').hide(1000);
                $('#cualce').val('98');
            }
        }    
        
// TANGIBLES        
        
    if(campoval == 'factteo6')
        {
            if($('#' + campoval).val() == 'SI')
            {
                $('#cualtemostrar').show(1000);
                $('#cualte').val('');
            }
            else
            {
                $('#cualtemostrar').hide(1000);
                $('#cualte').val('98');
            }
        }            
// TANGIBLES

// INTANGIBLES        
        
    if(campoval == 'factieo6')
        {
            if($('#' + campoval).val() == 'SI')
            {
                $('#cualiemostrar').show(1000);
                $('#cualie').val('');
            }
            else
            {
                $('#cualiemostrar').hide(1000);
                $('#cualie').val('98');
            }
        }            

      validarcuadroscrisise(divcompleto,campos);
}

function validarcuadroscrisise(divcuadro,ncampos)
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
    validarcuadroscrisise(div,ncampos);
}

$("#capitulos").hide();
</script>
</html>