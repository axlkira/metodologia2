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
        <?php echo($head3); ?>
        <!-- fin head-->

        <!--para tener la variable de idvivienda-->
        <input type="text" class="form-control input-sm" id="idestacion" name="idestacion"  style="display:none"   placeholder="folio" value="<?php echo($idestacion); ?>">
        <input type="text" class="form-control input-sm" id="folio" name="folio"  style="display:none"   placeholder="folio" value="<?php echo($folio); ?>">
        <input type="text" class="form-control input-sm" id="doccogestor" style="display:none" name="doccogestor"  placeholder="Text input" value="<?php echo($doccogestor); ?>">
        <input type="text" class="form-control input-sm" id="idintegrante" style="display:none" name="idintegrante"  placeholder="Text input" value="<?php echo($idintegrante); ?>">
        <!--fin para imprimir el folio y llevarlo-->
         <hr>
       <form class="form-group" name="formulario" id="formulario">

        
           
<!--Check varias selecciones -->
    <div class="row">
        <div id="cexitosodiv" name="cexitosodiv" class="form-group col-md-12 form-group-sm">        
        <label class="control-label">Dimensiones en las que  se destaca el hogar´ (Multiple respuesta) 
            <button type="button" id="vayuda" name="vayuda" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModal">
                        <span class="glyphicon glyphicon-question-sign" aria-hidden="true"></span> Ayuda
                    </button>      
        </label>
        </div>
        
        <div id="cexitosoo1div" <?php if($arrayrespuestas['ecexitosoo1']=='' || $arrayrespuestas['ecexitosoo1']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
            <label> <!--en este caso se manda a la fincion javascript el nombre del campo-->
              <input type="checkbox" name="cexitosoo1" id="cexitosoo1" onclick="cambiarsinocexitoso('SI','cexitosoo1','cexitosoo1div','textoavo1',9);abrirtext('divtextoavo1','textoavo1','cexitosoo1');" <?php if($arrayrespuestas['ecexitosoo1']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            IDENTIFICACION
            </label>
        </div>            
        </div>        
              <div id="divtextoavo1" <?php if($arrayrespuestas['ecexitosoo1']=='' || $arrayrespuestas['ecexitosoo1']=='NO'){echo('class=" has-error"');}?> >
                    <textarea class="form-control" <?php if($arrayrespuestas['ecexitosoo1cual'] == '' || $arrayrespuestas['ecexitosoo1cual'] == '98'){echo 'style="display:none" ';}else{echo 'style="display" ';} ?> onkeyup="validarbolitasytexto('divtextoavo1','textoavo1'); validarcuadroscexitoso();" id="textoavo1"  name="textoavo1" rows="6"><?php  if($arrayrespuestas['ecexitosoo1cual'] == ''){echo '98';}else{echo $arrayrespuestas['ecexitosoo1cual'];} ?></textarea>              
                </div>
        
        
        <div id="cexitosoo2div" <?php if($arrayrespuestas['ecexitosoo2']=='' || $arrayrespuestas['ecexitosoo2']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="cexitosoo2" id="cexitosoo2" onclick="cambiarsinocexitoso('SI','cexitosoo2','cexitosoo2div','cexitosodiv',9);abrirtext('divtextoavo2','textoavo2','cexitosoo2');" <?php if($arrayrespuestas['ecexitosoo2']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            EDUCACION
          </label>
        </div>           
        </div>
         <div id="divtextoavo2">
                    <textarea class="form-control" <?php if($arrayrespuestas['ecexitosoo2cual'] == '' || $arrayrespuestas['ecexitosoo2cual'] == '98'){echo 'style="display:none" ';}else{echo 'style="display" ';} ?> onkeyup="validarbolitasytexto('divtextoavo2','textoavo2'); validarcuadroscexitoso();" id="textoavo2"  name="textoavo2" rows="6"><?php if($arrayrespuestas['ecexitosoo2cual'] == ''){echo '98';}else{echo $arrayrespuestas['ecexitosoo2cual'];}  ?></textarea>              
                </div>
        
        
        <div id="cexitosoo3div" <?php if($arrayrespuestas['ecexitosoo3']==''|| $arrayrespuestas['ecexitosoo3']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="cexitosoo3" id="cexitosoo3" onclick="cambiarsinocexitoso('SI','cexitosoo3','cexitosoo3div','cexitosodiv',9);abrirtext('divtextoavo3','textoavo3','cexitosoo3');" <?php if($arrayrespuestas['ecexitosoo3']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            SALUD
          </label>
        </div>          
        </div>
         <div id="divtextoavo3">
                    <textarea class="form-control" <?php if($arrayrespuestas['ecexitosoo3cual'] == '' || $arrayrespuestas['ecexitosoo3cual'] == '98'){echo 'style="display:none" ';}else{echo 'style="display" ';} ?> onkeyup="validarbolitasytexto('divtextoavo3','textoavo3'); validarcuadroscexitoso();" id="textoavo3"  name="textoavo3" rows="6"><?php if($arrayrespuestas['ecexitosoo3cual'] == ''){echo '98';}else{echo $arrayrespuestas['ecexitosoo3cual'];}  ?></textarea>              
                </div>
        
        
        <div id="cexitosoo4div" <?php if($arrayrespuestas['ecexitosoo4']==''|| $arrayrespuestas['ecexitosoo4']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="cexitosoo4" id="cexitosoo4" onclick="cambiarsinocexitoso('SI','cexitosoo4','cexitosoo4div','cexitosodiv',9);abrirtext('divtextoavo4','textoavo4','cexitosoo4');" <?php if($arrayrespuestas['ecexitosoo4']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
           NUTRICION
          </label>
        </div>            
        </div> 
        <div id="divtextoavo4">
        <textarea class="form-control" <?php if($arrayrespuestas['ecexitosoo4cual'] == '' || $arrayrespuestas['ecexitosoo4cual'] == '98'){echo 'style="display:none" ';}else{echo 'style="display" ';} ?> onkeyup="validarbolitasytexto('divtextoavo4','textoavo4'); validarcuadroscexitoso();" id="textoavo4"  name="textoavo4" rows="6"><?php  if($arrayrespuestas['ecexitosoo4cual'] == ''){echo '98';}else{echo $arrayrespuestas['ecexitosoo4cual'];}  ?></textarea>              
       </div>
        
        <div id="cexitosoo5div" <?php if($arrayrespuestas['ecexitosoo5']==''|| $arrayrespuestas['ecexitosoo5']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="cexitosoo5" id="cexitosoo5" onclick="cambiarsinocexitoso('SI','cexitosoo5','cexitosoo5div','cexitosodiv',9);abrirtext('divtextoavo5','textoavo5','cexitosoo5');" <?php if($arrayrespuestas['ecexitosoo5']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
           HABITABILIDAD
          </label>
        </div>         
        </div>
        <div id="divtextoavo5">
        <textarea class="form-control" <?php if($arrayrespuestas['ecexitosoo5cual'] == '' || $arrayrespuestas['ecexitosoo5cual'] == '98'){echo 'style="display:none" ';}else{echo 'style="display" ';} ?> onkeyup="validarbolitasytexto('divtextoavo5','textoavo5'); validarcuadroscexitoso();" id="textoavo5"  name="textoavo5" rows="6"><?php if($arrayrespuestas['ecexitosoo5cual'] == ''){echo '98';}else{echo $arrayrespuestas['ecexitosoo5cual'];}  ?></textarea>              
        </div>
        
        
            <div id="cexitosoo6div" <?php if($arrayrespuestas['ecexitosoo6']==''|| $arrayrespuestas['ecexitosoo6']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="cexitosoo6" id="cexitosoo6" onclick="cambiarsinocexitoso('SI','cexitosoo6','cexitosoo6div','cexitosodiv',9);abrirtext('divtextoavo6','textoavo6','cexitosoo6');" <?php if($arrayrespuestas['ecexitosoo6']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
           ENTORNO FAMILIAR
          </label>
        </div>         
        </div>
               <div id="divtextoavo6">
                    <textarea class="form-control" <?php if($arrayrespuestas['ecexitosoo6cual'] == '' || $arrayrespuestas['ecexitosoo6cual'] == '98'){echo 'style="display:none" ';}else{echo 'style="display" ';} ?> onkeyup="validarbolitasytexto('divtextoavo6','textoavo6'); validarcuadroscexitoso();" id="textoavo6"  name="textoavo6" rows="6"><?php  if($arrayrespuestas['ecexitosoo6cual'] == ''){echo '98';}else{echo $arrayrespuestas['ecexitosoo6cual'];}  ?></textarea>              
                </div>
        
            <div id="cexitosoo7div" <?php if($arrayrespuestas['ecexitosoo7']==''|| $arrayrespuestas['ecexitosoo7']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="cexitosoo7" id="cexitosoo7" onclick="cambiarsinocexitoso('SI','cexitosoo7','cexitosoo7div','cexitosodiv',9);abrirtext('divtextoavo7','textoavo7','cexitosoo7');" <?php if($arrayrespuestas['ecexitosoo7']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
           BANCARIZACION Y AHORRO
          </label>
        </div>                
        </div>
        <div id="divtextoavo7">
                    <textarea class="form-control" <?php if($arrayrespuestas['ecexitosoo7cual'] == '' || $arrayrespuestas['ecexitosoo7cual'] == '98'){echo 'style="display:none" ';}else{echo 'style="display" ';} ?>  onkeyup="?php if($arrayrespuestas['ecexitosoo7cual'] == ''validarbolitasytexto('divtextoavo7','textoavo7'); validarcuadroscexitoso();" id="textoavo7"  name="textoavo7" rows="6"><?php  if($arrayrespuestas['ecexitosoo7cual'] == ''){echo '98';}else{echo $arrayrespuestas['ecexitosoo7cual'];}  ?></textarea>              
                </div>
            
        <div id="cexitosoo8div" <?php if($arrayrespuestas['ecexitosoo8']==''|| $arrayrespuestas['ecexitosoo8']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="cexitosoo5" id="cexitosoo8" onclick="cambiarsinocexitoso('SI','cexitosoo8','cexitosoo8div','cexitosodiv',9);abrirtext('divtextoavo8','textoavo8','cexitosoo8');" <?php if($arrayrespuestas['ecexitosoo8']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
           ACCESO A LA JUSTICIA
          </label>
        </div>      
        </div>
      <div id="divtextoavo8">
        <textarea class="form-control" <?php if($arrayrespuestas['ecexitosoo8cual'] == '' || $arrayrespuestas['ecexitosoo8cual'] == '98'){echo 'style="display:none" ';}else{echo 'style="display" ';} ?>  onkeyup="validarbolitasytexto('divtextoavo8','textoavo8'); validarcuadroscexitoso();" id="textoavo8"  name="textoavo8" rows="6"><?php  if($arrayrespuestas['ecexitosoo8cual'] == ''){echo '98';}else{echo $arrayrespuestas['ecexitosoo8cual'];}  ?></textarea>              
      </div>
            
       <div id="cexitosoo9div" <?php if($arrayrespuestas['ecexitosoo9']==''|| $arrayrespuestas['ecexitosoo9']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="cexitosoo9" id="cexitosoo9" onclick="cambiarsinocexitoso('SI','cexitosoo9','cexitosoo9div','cexitosodiv',9);abrirtext('divtextoavo9','textoavo9','cexitosoo9');" <?php if($arrayrespuestas['ecexitosoo9']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
           INGRESO Y TRABAJO
          </label>
        </div>
            
        </div> 
        <div id="divtextoavo9">
            <textarea class="form-control" <?php if($arrayrespuestas['ecexitosoo9cual'] == '' || $arrayrespuestas['ecexitosoo9cual'] == '98'){echo 'style="display:none" ';}else{echo 'style="display" ';} ?> onkeyup="validarbolitasytexto('divtextoavo9','textoavo9'); validarcuadroscexitoso();" id="textoavo9"  name="textoavo9" rows="6"><?php  if($arrayrespuestas['ecexitosoo9cual'] == ''){echo '98';}else{echo $arrayrespuestas['ecexitosoo9cual'];}  ?></textarea>              
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
            <?php if($arrayrespuestas['ecexitosoo1']=="" & $arrayrespuestas['ecexitosoo2']=="" & $arrayrespuestas['ecexitosoo3']==""& $arrayrespuestas['ecexitosoo4']==""& $arrayrespuestas['ecexitosoo5']=="")
            {
                echo($botoneragcapa);
            }
            else
            {
                echo($botoneraacapa);
            }?>   
            <!--Fin botonera guardar y actualizar-->

        </form>
  
    <!--Inicio Este es el footer NO TOCAR-->
    <?php echo($foot); ?>
    <!--fin del footer NO TOCAR-->
    </div>
    
    
     <div class="modal fade" id="modal2108" data-backdrop="static" >
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
<!--          <span aria-hidden="true">&times;</span>-->
        </button>
      </div>
      <div class="modal-body">
        <p>Por favor , presionar Clic en el boton continuar.</p>
      </div>
      <div class="modal-footer">
          <button type="button" id="continuar2108" class="btn btn-primary">Continuar</button>
<!--        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>-->
      </div>
    </div>
  </div>
</div>
    
    
     <div class="modal fade" id="modal2207" data-backdrop="static" >
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
<!--          <span aria-hidden="true">&times;</span>-->
        </button>
      </div>
      <div class="modal-body">
        <p>Por favor , presionar Clic en el boton continuar.</p>
      </div>
      <div class="modal-footer">
          <button type="button" id="continuar2207" class="btn btn-primary">Continuar</button>
<!--        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>-->
      </div>
    </div>
  </div>
</div>
    
    
     <div class="modal fade" id="modal2307" data-backdrop="static" >
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
<!--          <span aria-hidden="true">&times;</span>-->
        </button>
      </div>
      <div class="modal-body">
        <p>Por favor , presionar Clic en el boton continuar.</p>
      </div>
      <div class="modal-footer">
          <button type="button" id="continuar2307" class="btn btn-primary">Continuar</button>
<!--        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>-->
      </div>
    </div>
  </div>
</div>
    
    <div class="modal fade" id="modal2406" data-backdrop="static" >
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
<!--          <span aria-hidden="true">&times;</span>-->
        </button>
      </div>
      <div class="modal-body">
        <p>Por favor , presionar Clic en el boton continuar.</p>
      </div>
      <div class="modal-footer">
          <button type="button" id="continuar2406" class="btn btn-primary">Continuar</button>
<!--        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>-->
      </div>
    </div>
  </div>
</div>
    
    <div class="modal fade" id="modal2506" data-backdrop="static" >
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
<!--          <span aria-hidden="true">&times;</span>-->
        </button>
      </div>
      <div class="modal-body">
        <p>Por favor , presionar Clic en el boton continuar.</p>
      </div>
      <div class="modal-footer">
          <button type="button" id="continuar2506" class="btn btn-primary">Continuar</button>
<!--        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>-->
      </div>
    </div>
  </div>
</div>
    
    
    <div class="modal fade" id="modal2607" data-backdrop="static" >
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
<!--          <span aria-hidden="true">&times;</span>-->
        </button>
      </div>
      <div class="modal-body">
        <p>Por favor , presionar Clic en el boton continuar.</p>
      </div>
      <div class="modal-footer">
          <button type="button" id="continuar2607" class="btn btn-primary">Continuar</button>
<!--        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>-->
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="modal2705" data-backdrop="static" >
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
<!--          <span aria-hidden="true">&times;</span>-->
        </button>
      </div>
      <div class="modal-body">
        <p>Por favor , presionar Clic en el boton continuar.</p>
      </div>
      <div class="modal-footer">
          <button type="button" id="continuar2705" class="btn btn-primary">Continuar</button>
<!--        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>-->
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="modal2806" data-backdrop="static" >
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
<!--          <span aria-hidden="true">&times;</span>-->
        </button>
      </div>
      <div class="modal-body">
        <p>Por favor , presionar Clic en el boton continuar.</p>
      </div>
      <div class="modal-footer">
          <button type="button" id="continuar2806" class="btn btn-primary">Continuar</button>
<!--        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>-->
      </div>
    </div>
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

function modal2108() 
{
$('#modal2108').modal();
}

function modal2207() 
{
$('#modal2207').modal();
}

function modal2307() 
{
$('#modal2307').modal();
}

function modal2406() 
{
$('#modal2406').modal();
}

function modal2506() 
{
$('#modal2506').modal();
}

function modal2607() 
{
$('#modal2607').modal();
}
function modal2705() 
{
$('#modal2705').modal();
}
function modal2806() 
{
$('#modal2806').modal();
}





    $(document).ready(function()
    {
//alert($('.has-error').length + 'al entrar');
        $("#guardar").click(function ()
        {
                        $.ajax({
                          url: "fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(), vcexitosoo1 : $('#cexitosoo1').val(),vcexitosoo2 : $('#cexitosoo2').val(),vcexitosoo3 : $('#cexitosoo3').val(),vcexitosoo4 : $('#cexitosoo4').val(),vcexitosoo5 : $('#cexitosoo5').val(),vcexitosoo6: $('#cexitosoo6').val(),
                          vcexitosoo7 : $('#cexitosoo7').val(),vcexitosoo8 : $('#cexitosoo8').val(),vcexitosoo9 : $('#cexitosoo9').val(),vtextoavo1 : $('#textoavo1').val(),vtextoavo2 : $('#textoavo2').val(),
                          vtextoavo3 : $('#textoavo3').val(),vtextoavo4 : $('#textoavo4').val(),vtextoavo5 : $('#textoavo5').val(),vtextoavo6 : $('#textoavo6').val(),vtextoavo7 : $('#textoavo7').val(),vtextoavo8 : $('#textoavo8').val(),vtextoavo9 : $('#textoavo9').val(),videstacion: $('#idestacion').val()},    
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
                          data: {vfolio : $('#folio').val(), vcexitosoo1 : $('#cexitosoo1').val(),vcexitosoo2 : $('#cexitosoo2').val(),vcexitosoo3 : $('#cexitosoo3').val(),vcexitosoo4 : $('#cexitosoo4').val(),vcexitosoo5 : $('#cexitosoo5').val(),vcexitosoo6: $('#cexitosoo6').val(),
                          vcexitosoo7 : $('#cexitosoo7').val(),vcexitosoo8 : $('#cexitosoo8').val(),vcexitosoo9 : $('#cexitosoo9').val(),vtextoavo1 : $('#textoavo1').val(),vtextoavo2 : $('#textoavo2').val(),
                          vtextoavo3 : $('#textoavo3').val(),vtextoavo4 : $('#textoavo4').val(),vtextoavo5 : $('#textoavo5').val(),vtextoavo6 : $('#textoavo6').val(),vtextoavo7 : $('#textoavo7').val(),vtextoavo8 : $('#textoavo8').val(),vtextoavo9 : $('#textoavo9').val(),videstacion: $('#idestacion').val()},    
                          dataType: "html",
                          success : function(obj){                      
                          botonactualizar();
                          }
                        });                   
        });
        
        
           $("#continuar2207").click(function (){
            
           
            location.href = "../../c_protocolol2e2/fc_protocolol2e2?folio="+ $('#folio').val() +"&idintegrante="+$('#idintegrante').val()+"&doccogestor="+$('#doccogestor').val()+ "&idestacion="+ $('#idestacion').val();   
            
        });
        
         $("#continuar2307").click(function (){
            
           
            location.href = "../../c_protocolol2e3/fc_protocolol2e3?folio="+ $('#folio').val() +"&idintegrante="+$('#idintegrante').val()+"&doccogestor="+$('#doccogestor').val()+ "&idestacion="+ $('#idestacion').val();   
            
        });
        
        $("#continuar2406").click(function (){
            
            
           
            location.href = "../../c_protocolol2e4/fc_protocolol2e4?folio="+ $('#folio').val() +"&idintegrante="+$('#idintegrante').val()+"&doccogestor="+$('#doccogestor').val()+ "&idestacion="+ $('#idestacion').val();   
            
        });
        
        $("#continuar2506").click(function (){
            
           
            location.href = "../../c_protocolol2e5/fc_protocolol2e5?folio="+ $('#folio').val() +"&idintegrante="+$('#idintegrante').val()+"&doccogestor="+$('#doccogestor').val()+ "&idestacion="+ $('#idestacion').val();   
            
        });
        
        $("#continuar2607").click(function (){
         //   location.href = "../../c_protocolol2e4/fc_protocolol2e4?folio="+ $('#folio').val() +"&idintegrante=0"+"&doccogestor="+$('#doccogestor').val();   
           
           location.href = "../../c_protocolol2e6/fc_protocolol2e6?folio="+ $('#folio').val() +"&idintegrante="+$('#idintegrante').val()+"&doccogestor="+$('#doccogestor').val()+ "&idestacion="+ $('#idestacion').val();   
            
        });
        
        $("#continuar2705").click(function (){
         //   location.href = "../../c_protocolol2e4/fc_protocolol2e4?folio="+ $('#folio').val() +"&idintegrante=0"+"&doccogestor="+$('#doccogestor').val();   
           
           location.href = "../../c_protocolol2e7/fc_protocolol2e7?folio="+ $('#folio').val() +"&idintegrante="+$('#idintegrante').val()+"&doccogestor="+$('#doccogestor').val()+ "&idestacion="+ $('#idestacion').val();   
            
        });

        $("#continuar2806").click(function (){
         //   location.href = "../../c_protocolol2e4/fc_protocolol2e4?folio="+ $('#folio').val() +"&idintegrante=0"+"&doccogestor="+$('#doccogestor').val();   
           
           location.href = "../../c_protocolol2e8/fc_protocolol2e8?folio="+ $('#folio').val() +"&idintegrante="+$('#idintegrante').val()+"&doccogestor="+$('#doccogestor').val()+ "&idestacion="+ $('#idestacion').val();   
            
        });
         $("#continuar2108").click(function (){
            
           
             location.href = "../../c_protocolol2e1/fc_protocolol2e1?folio=" + $('#folio').val()+"&idintegrante="+$('#idintegrante').val()+ "&doccogestor="+ $('#doccogestor').val() + "&idestacion="+ $('#idestacion').val(); 
            
        });
        

        $("#siguiente").click(function ()
        {
            
            if($('#idestacion').val()== '21')
            {
                
                insertidpaso2108();
                modal2108();
                 
            }
            else  if($('#idestacion').val()== '22')
            {
             
             insertidpaso2207();
             modal2207();
             //location.href = "../../c_protocolol2e2/fc_protocolol2e2?folio=" + $('#folio').val()+"&idintegrante="+$('#idintegrante').val()+ "&doccogestor="+ $('#doccogestor').val() + "&idestacion="+ $('#idestacion').val();  
//             modal2108();
        
         // location.href = "../c_casoexitoso1/fc_casoexitoso1?folio="+ $('#folio').val() +"&idintegrante="+$('#idintegrante').val()+"&doccogestor="+$('#doccogestor').val()+"&idestacion="+$('#idestacion').val();   
         
            }
            else  if($('#idestacion').val()== '23')
            {
             
             insertidpaso2307();
             modal2307();
             //location.href = "../../c_protocolol2e2/fc_protocolol2e2?folio=" + $('#folio').val()+"&idintegrante="+$('#idintegrante').val()+ "&doccogestor="+ $('#doccogestor').val() + "&idestacion="+ $('#idestacion').val();  
//             modal2108();
        
         // location.href = "../c_casoexitoso1/fc_casoexitoso1?folio="+ $('#folio').val() +"&idintegrante="+$('#idintegrante').val()+"&doccogestor="+$('#doccogestor').val()+"&idestacion="+$('#idestacion').val();   
         
            }
            
            
            else  if($('#idestacion').val()== '24')
            {
             
             insertidpaso2406();
             modal2406();
             //location.href = "../../c_protocolol2e2/fc_protocolol2e2?folio=" + $('#folio').val()+"&idintegrante="+$('#idintegrante').val()+ "&doccogestor="+ $('#doccogestor').val() + "&idestacion="+ $('#idestacion').val();  
//             modal2108();
        
         // location.href = "../c_casoexitoso1/fc_casoexitoso1?folio="+ $('#folio').val() +"&idintegrante="+$('#idintegrante').val()+"&doccogestor="+$('#doccogestor').val()+"&idestacion="+$('#idestacion').val();   
         
            }
            
            else  if($('#idestacion').val()== '25')
            {
             
             insertidpaso2506();
             modal2506();
             //location.href = "../../c_protocolol2e2/fc_protocolol2e2?folio=" + $('#folio').val()+"&idintegrante="+$('#idintegrante').val()+ "&doccogestor="+ $('#doccogestor').val() + "&idestacion="+ $('#idestacion').val();  
//             modal2108();
        
         // location.href = "../c_casoexitoso1/fc_casoexitoso1?folio="+ $('#folio').val() +"&idintegrante="+$('#idintegrante').val()+"&doccogestor="+$('#doccogestor').val()+"&idestacion="+$('#idestacion').val();   
         
            }
            
            else  if($('#idestacion').val()== '26')
            {
             
             insertidpaso2607();
             modal2607();
             //location.href = "../../c_protocolol2e2/fc_protocolol2e2?folio=" + $('#folio').val()+"&idintegrante="+$('#idintegrante').val()+ "&doccogestor="+ $('#doccogestor').val() + "&idestacion="+ $('#idestacion').val();  
//             modal2108();
        
         // location.href = "../c_casoexitoso1/fc_casoexitoso1?folio="+ $('#folio').val() +"&idintegrante="+$('#idintegrante').val()+"&doccogestor="+$('#doccogestor').val()+"&idestacion="+$('#idestacion').val();   
         
            }

            else  if($('#idestacion').val()== '27')
            {
             
             insertidpaso2705();
             modal2705();
             //location.href = "../../c_protocolol2e2/fc_protocolol2e2?folio=" + $('#folio').val()+"&idintegrante="+$('#idintegrante').val()+ "&doccogestor="+ $('#doccogestor').val() + "&idestacion="+ $('#idestacion').val();  
//             modal2108();
        
         // location.href = "../c_casoexitoso1/fc_casoexitoso1?folio="+ $('#folio').val() +"&idintegrante="+$('#idintegrante').val()+"&doccogestor="+$('#doccogestor').val()+"&idestacion="+$('#idestacion').val();   
         
            }
                      
            else  if($('#idestacion').val()== '28')
            {
             
             insertidpaso2806();
             modal2806();
             //location.href = "../../c_protocolol2e2/fc_protocolol2e2?folio=" + $('#folio').val()+"&idintegrante="+$('#idintegrante').val()+ "&doccogestor="+ $('#doccogestor').val() + "&idestacion="+ $('#idestacion').val();  
//             modal2108();
        
         // location.href = "../c_casoexitoso1/fc_casoexitoso1?folio="+ $('#folio').val() +"&idintegrante="+$('#idintegrante').val()+"&doccogestor="+$('#doccogestor').val()+"&idestacion="+$('#idestacion').val();   
         
            }               

        });
              
        $("#anterior").click(function ()
        {
        
        location.href = "../c_casoexitoso/fc_casoexitoso?folio=" + $('#folio').val()+"&idintegrante="+$('#idintegrante').val()+ "&doccogestor="+ $('#doccogestor').val() + "&idestacion="+ $('#idestacion').val();                    
        });

//para cargar variables capitulo, pregunta,encuestador,vivienda,barra
cargardatosgenerales('<?php echo($arraydatosgenerales['ecapitulo']); ?>','Pregunta 13a de 16','<?php echo($arraydatosgenerales['enomcoges']); ?>','<?php echo($arraydatosgenerales['etitular']); ?>','100');
//control del boton ayuda
botonayuda();

});

function cambiarsinocexitoso(opcion,campoval,divcampo,divcompleto,campos)
{
    if($('#' + campoval).val() === opcion)
    {
        $('#' + campoval).val("NO");
        $('#' + divcampo).addClass('has-error');
    }
    else
    {
        $('#' + campoval).val(opcion);
        $('#' + divcampo).removeClass('has-error');
    }
    
            
     
}  



function insertidpaso2108()
   {
    //alert('test');
                        $.ajax({
                          url: "fc_cerrarpaso",
                          type: "GET",
                           data: {vfolio: $('#folio').val(), vidpaso: 2108, vestado:1},
                          dataType: "html",
                          success: function(obj) {
                          //me llama el mensajito de actualizar
                          //$('#datos').html(obj);
                          //location.href = "../c_capituloshogar/fc_capituloshogar?folio="+ $('#folio').val() +"&idintegrante="+$('#idintegrante').val();                  
                        }
                       });
   }
 
   function insertidpaso2207()
   {
    //alert('test');
                        $.ajax({
                          url: "fc_cerrarpaso",
                          type: "GET",
                          data: {vfolio: $('#folio').val(), vidpaso: 2207, vestado:1},
                          dataType: "html",
                          success: function(obj) {
                          //me llama el mensajito de actualizar
                          //$('#datos').html(obj);
                          //location.href = "../c_capituloshogar/fc_capituloshogar?folio="+ $('#folio').val() +"&idintegrante="+$('#idintegrante').val();                  
                        }
                       });

   }


   function insertidpaso2307()
   {
    //alert('test');
                        $.ajax({
                          url: "fc_cerrarpaso",
                          type: "GET",
                          data: {vfolio: $('#folio').val(), vidpaso: 2307, vestado:1},
                          dataType: "html",
                          success: function(obj) {
                          //me llama el mensajito de actualizar
                          //$('#datos').html(obj);
                          //location.href = "../c_capituloshogar/fc_capituloshogar?folio="+ $('#folio').val() +"&idintegrante="+$('#idintegrante').val();                  
                        }
                       });

   }
   
   function insertidpaso2406()
   {
    //alert('test');
                        $.ajax({
                          url: "fc_cerrarpaso",
                          type: "GET",
                          data: {vfolio: $('#folio').val(), vidpaso: 2407, vestado:1},
                          dataType: "html",
                          success: function(obj) {
                          //me llama el mensajito de actualizar
                          //$('#datos').html(obj);
                          //location.href = "../c_capituloshogar/fc_capituloshogar?folio="+ $('#folio').val() +"&idintegrante="+$('#idintegrante').val();                  
                        }
                       });

   }
   
   function insertidpaso2506()
   {
    //alert('test');
                        $.ajax({
                          url: "fc_cerrarpaso",
                          type: "GET",
                          data: {vfolio: $('#folio').val(), vidpaso: 2507, vestado:1},
                          dataType: "html",
                          success: function(obj) {
                          //me llama el mensajito de actualizar
                          //$('#datos').html(obj);
                          //location.href = "../c_capituloshogar/fc_capituloshogar?folio="+ $('#folio').val() +"&idintegrante="+$('#idintegrante').val();                  
                        }
                       });

   }
   
   function insertidpaso2607()
   {
    //alert('test');
                        $.ajax({
                          url: "fc_cerrarpaso",
                          type: "GET",
                          data: {vfolio: $('#folio').val(), vidpaso: 2607, vestado:1},
                          dataType: "html",
                          success: function(obj) {
                          //me llama el mensajito de actualizar
                          //$('#datos').html(obj);
                          //location.href = "../c_capituloshogar/fc_capituloshogar?folio="+ $('#folio').val() +"&idintegrante="+$('#idintegrante').val();                  
                        }
                       });

   }
   function insertidpaso2705()
   {
    //alert('test');
                        $.ajax({
                          url: "fc_cerrarpaso",
                          type: "GET",
                          data: {vfolio: $('#folio').val(), vidpaso: 2705, vestado:1},
                          dataType: "html",
                          success: function(obj) {
                          //me llama el mensajito de actualizar
                          //$('#datos').html(obj);
                          //location.href = "../c_capituloshogar/fc_capituloshogar?folio="+ $('#folio').val() +"&idintegrante="+$('#idintegrante').val();                  
                        }
                       });

   }

   function insertidpaso2806()
   {
    //alert('test');
                        $.ajax({
                          url: "fc_cerrarpaso",
                          type: "GET",
                          data: {vfolio: $('#folio').val(), vidpaso: 2806, vestado:1},
                          dataType: "html",
                          success: function(obj) {
                          //me llama el mensajito de actualizar
                          //$('#datos').html(obj);
                          //location.href = "../c_capituloshogar/fc_capituloshogar?folio="+ $('#folio').val() +"&idintegrante="+$('#idintegrante').val();                  
                        }
                       });

   }





function validarcuadroscexitoso()
{
//  alert($('.has-error').length + 'escribir');
//  
//  alert($('#textoavo1').val() + ' - Valor del textarea');
  
  for(i = 1; i < 10; i++){
      
      if($('#textoavo' + i).val() == '98' || $('#textoavo' + i).val() == ''){
         
           $('#guardar').prop('disabled', true);
           $('#actualizar').prop('disabled', true);
           $('#cancelar').prop('disabled', true);
           $('#anterior').prop('disabled', false);
           $('#siguiente').prop('disabled', true);
          
      }else{
        
           $('#guardar').prop('disabled', false);
           $('#actualizar').prop('disabled', false);
           $('#cancelar').prop('disabled', true);
           $('#anterior').prop('disabled', false);
           $('#siguiente').prop('disabled', true);
           break;
      }
      
      
  }
  
//        if($('.has-error').length === (ncampos + 1))
//        {   //alert('soniguales');
//           $('#guardar').prop('disabled', true);
//           $('#actualizar').prop('disabled', true);
//           $('#cancelar').prop('disabled', true);
//           $('#anterior').prop('disabled', false);
//           $('#siguiente').prop('disabled', false);
//        }
//        else
//        {
//           $('#guardar').prop('disabled', false);
//           $('#actualizar').prop('disabled', false);
//           $('#cancelar').prop('disabled', false);
//           $('#anterior').prop('disabled', true);
//           $('#siguiente').prop('disabled', true);       
//        }
//    if($('.has-error').length === (texto + 1))
//        else
//    {   //alert('soniguales');
//           $('#guardar').prop('disabled', true);
//           $('#actualizar').prop('disabled', true);
//           $('#cancelar').prop('disabled', true);
//           $('#anterior').prop('disabled', false);
//           $('#siguiente').prop('disabled', false);
//        }
//        else
//        {
//           $('#guardar').prop('disabled', false);
//           $('#actualizar').prop('disabled', false);
//           $('#cancelar').prop('disabled', false);
//           $('#anterior').prop('disabled', true);
//           $('#siguiente').prop('disabled', true);       
//        }
//    
//    else
//    {
//          $('#guardar').prop('disabled', true);
//          $('#actualizar').prop('disabled', true);
//          $('#cancelar').prop('disabled', true);
//          $('#anterior').prop('disabled', false);
//           $('#siguiente').prop('disabled', false);        
//    }

}

function validarcampotexcuadros(div,campo,ncampos)
{
    validarbolitasytexto(div,campo); //llama cada textarea al escribir y pinta el cuadro

    validarcuadroscexitoso(div,ncampos); //activar guardar al escribir en el textarea

}

function abrirtext(div,campo,campoval)
{
 if ($('#' + campoval).val()== 'SI')   
     
        {
         $('#' + campo).show(500);
         $('#' + campo).val('');
         $('#' + div).addClass ('has-error');
        }
      else
        {
         $('#' + campo).hide(500);
         $('#' + campo).val('98');
         $('#' + div).removeClass('has-error');
        }
     validarcuadroscexitoso();    
}




</script>
</html>