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
        <!--fin para imprimir el folio y llevarlo-->
<hr>
       <form class="form-group" name="formulario" id="formulario">

<!--Check varias selecciones -->
    <div class="row">
        <div id="c3p1adiv" name="c3p1adiv" class="form-group col-md-12 form-group-sm">
        <div id="c3p1ao0div" class="has-error">
        <label class="control-label">1a. Por qué no ahorra ? (Multiple respuesta)
                     <button type="button" id="vayuda" name="vayuda" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModal">
                        <span class="glyphicon glyphicon-question-sign" aria-hidden="true"></span> Ayuda
                    </button>       
        </label>
        </div>
        <div id="c3p1ao1div" <?php if($arrayrespuestas['ec3p1ao1']=='' || $arrayrespuestas['ec3p1ao1']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
            <label> <!--en este caso se manda a la fincion javascript el nombre del campo-->
              <input type="checkbox" name="c3p1ao1" id="c3p1ao1" onclick="cambiarsino('SI','c3p1ao1','c3p1ao1div','c3p1adiv',5);" <?php if($arrayrespuestas['ec3p1ao1']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            A. Ingresos insuficientes
            </label>
        </div>
        </div>
        <div id="c3p1ao2div" <?php if($arrayrespuestas['ec3p1ao2']=='' || $arrayrespuestas['ec3p1ao2']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="c3p1ao2" id="c3p1ao2" onclick="cambiarsino('SI','c3p1ao2','c3p1ao2div','c3p1adiv',5);" <?php if($arrayrespuestas['ec3p1ao2']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            B. No sabe como hacerlo
          </label>
        </div>
        </div>
        <div id="c3p1ao3div" <?php if($arrayrespuestas['ec3p1ao3']==''|| $arrayrespuestas['ec3p1ao3']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="c3p1ao3" id="c3p1ao3" onclick="cambiarsino('SI','c3p1ao3','c3p1ao3div','c3p1adiv',5);" <?php if($arrayrespuestas['ec3p1ao3']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
                C. No tiene cultura de ahorro
          </label>
        </div>
        </div>  
         
       <div id="c3p1ao4div" <?php if($arrayrespuestas['ec3p1ao4']==''|| $arrayrespuestas['ec3p1ao4']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="c3p1ao4" id="c3p1ao4" onclick="cambiarsino('SI','c3p1ao4','c3p1ao4div','c3p1adiv',5);" <?php if($arrayrespuestas['ec3p1ao4']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            D. Considera que no es importante
          </label>
        </div>
        </div>  
        <div id="c3p1ao5div" <?php if($arrayrespuestas['ec3p1ao5']==''|| $arrayrespuestas['ec3p1ao5']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="c3p1ao5" id="c3p1ao5" onclick="cambiarsino('SI','c3p1ao5','c3p1ao5div','c3p1adiv',5);" <?php if($arrayrespuestas['ec3p1ao5']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            E. Realiza algún tipo de inversión
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
            <?php if($arrayrespuestas['ec3p1ao1']=="" & $arrayrespuestas['ec3p1ao2']=="" & $arrayrespuestas['ec3p1ao3']==""& $arrayrespuestas['ec3p1ao4']==""& $arrayrespuestas['ec3p1ao5']=="")
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
                          data: {vfolio : $('#folio').val(), vc3p1ao1 : $('#c3p1ao1').val(),vc3p1ao2 : $('#c3p1ao2').val(),vc3p1ao3 : $('#c3p1ao3').val(),vc3p1ao4 : $('#c3p1ao4').val(),vc3p1ao5 : $('#c3p1ao5').val()},    
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
                          data: {vfolio : $('#folio').val(), vc3p1ao1 : $('#c3p1ao1').val(),vc3p1ao2 : $('#c3p1ao2').val(),vc3p1ao3 : $('#c3p1ao3').val(),vc3p1ao4 : $('#c3p1ao4').val(),vc3p1ao5 : $('#c3p1ao5').val()},    
                          dataType: "html",
                          success : function(obj){                      
                          botonactualizar();
                          }
                        });                   
        });
        

        $("#siguiente").click(function ()
        {
         botonsiguiente();
           {   $.ajax({
                             url: "../c_c3p2/fc_actualizar",
                             type: "GET",
                             data: {vfolio : $('#folio').val(), vc3p2o1 : '98', vc3p2o2 : '98', vc3p2o3 : '98', vc3p2o4 : '98',
                             vc3p2cual : '98'},    
                             dataType: "html",
                             success : function(obj){  
                             location.href = "../c_c3p3/fc_c3p3?folio=" + $('#folio').val();                    
                             }
                           }); 
           }
         });
              
        $("#anterior").click(function ()
        {
         botonanterior();
         location.href = "../c_c3p1/fc_c3p1?folio=" + $('#folio').val(); 
        });

//para cargar variables capitulo, pregunta,encuestador,vivienda,barra
cargardatosgenerales('<?php echo($arraydatosgenerales['ecapitulo']); ?>','Pregunta 1a de 4','<?php echo($arraydatosgenerales['enomcoges']); ?>','<?php echo($arraydatosgenerales['etitular']); ?>','40');
//control del boton ayuda
botonayuda();

});

</script>
</html>