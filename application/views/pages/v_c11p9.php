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
        <!--para tener la variable de idvivienda-->
        <input type="text" class="form-control input-sm" id="folio" name="folio"  style="display:none"   placeholder="folio" value="<?php echo($folio); ?>">
<!--        <input type="text" class="form-control input-sm" id="idintegrante" name="idintegrante"  style="display:none"   placeholder="idintegrante" value="<?php echo($idintegrante); ?>">
        <input type="text" class="form-control input-sm" id="edad" name="edad"  style="display:none"   placeholder="" value="<?php echo($arraydatosgenerales['eedadintegrante']); ?>">
        <input type="text" class="form-control input-sm" id="sexo" name="sexo"  style="display:none"   placeholder="" value="<?php echo($arraydatosgenerales['esexointegrante']); ?>">
        <input type="text" class="form-control input-sm" id="valorc11p21" name="valorc11p21"  value="<?php echo($arrayrespuestas['ec11p21o1']); ?>">
        fin para imprimir el folio y llevarlo
        fin para imprimir el folio y llevarlo-->
<hr>
       <form class="form-group" name="formulario" id="formulario">

<!--Check varias selecciones -->
    <div class="row">
        
        <div id="c11p9div1" name="c11p9div1" <?php if($arrayrespuestas['ec11p9o1']=='' ){echo('class="form-group col-md-12 form-group-sm has-error"');}else{echo('class="form-group col-md-12 form-group-sm"');}?>>   
        <label class="control-label">9. Responda
                     <button type="button" id="vayuda" name="vayuda" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModal">
                        <span class="glyphicon glyphicon-question-sign" aria-hidden="true"></span> Ayuda
                    </button>       
        </label><br><br>
        <label class="control-label col-md-5">En caso de requerir ayuda, cuenta con personas que puedan brindarle apoyo</label>
          <div class="radio-inline">
                    <label>
                        <input type="radio" name="c11p9o1" id="c11p9o1" onclick="colocaropcion('Si','valorc11p9o1','c11p9div1');" value="Si" <?php if($arrayrespuestas['ec11p9o1']=='Si'){echo('checked');}?>>
                        Si
                    </label>
                </div>
                <div class="radio-inline">
                    <label>
                        <input type="radio" name="c11p9o1" id="c11p9o1" onclick="colocaropcion('No','valorc11p9o1','c11p9div1');" value="No" <?php if($arrayrespuestas['ec11p9o1']=='No'){echo('checked');}?>>
                        No
                    </label>             
                </div>
             
          <input type="text" class="form-control" id="valorc11p9o1" style="display: none" name="valorc11p9o1"  placeholder="Text input" value="<?php echo($arrayrespuestas['ec11p9o1']); ?>">
          </div> 
        <div id="c11p9div2" name="c11p9div2" <?php if($arrayrespuestas['ec11p9o2']=='' ){echo('class="form-group col-md-12 form-group-sm has-error"');}else{echo('class="form-group col-md-12 form-group-sm"');}?>>   
          <label class="control-label col-md-5">Para sus actividades diarias, requiere de una persona que le ayude a desarrollarlas</label>
          <div class="radio-inline">
                   <label>
                        <input type="radio" name="c11p9o2" id="c11p9o2" onclick="colocaropcion('Si','valorc11p9o2','c11p9div2');" value="Si" <?php if($arrayrespuestas['ec11p9o2']=='Si'){echo('checked');}?>>
                        Si
                    </label>
                </div>
                <div class="radio-inline">
                    <label>
                        <input type="radio" name="c11p9o2" id="c11p9o2" onclick="colocaropcion('No','valorc11p9o2','c11p9div2');" value="No" <?php if($arrayrespuestas['ec11p9o2']=='No'){echo('checked');}?>>
                        No
                    </label>             
                </div>
              <input type="text" class="form-control" id="valorc11p9o2" style="display: none" name="valorc11p9o2"  placeholder="Text input" value="<?php echo($arrayrespuestas['ec11p9o2']); ?>">
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
            <?php if($arrayrespuestas['ec11p9o1']=="" & $arrayrespuestas['ec11p9o2']=="" )
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
                          data: {vfolio : $('#folio').val(),vvalorc11p9o1 : $('#valorc11p9o1').val(),
                          vvalorc11p9o2 : $('#valorc11p9o2').val()},
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
                          data: {vfolio : $('#folio').val(),vvalorc11p9o1 : $('#valorc11p9o1').val(),
                          vvalorc11p9o2 : $('#valorc11p9o2').val()},
                          dataType: "html",
                          success : function(obj){                      
                          botonactualizar();
                          }
                        });                   
        });

 $("#siguiente").click(function ()
        {
         botonsiguiente();
         location.href = "../c_c11p10/fc_c11p10?folio=" + $('#folio').val();                    

        });

 $("#anterior").click(function ()
        {
         botonanterior();
        location.href = "../c_c11p8/fc_c11p8?folio=" + $('#folio').val();                    
        });
        //para cargar variables capitulo, pregunta,encuestador,vivienda,barra
cargardatosgenerales('<?php echo($arraydatosgenerales['ecapitulo']); ?>','Pregunta 9 de 11','<?php echo($arraydatosgenerales['enomcoges']); ?>','<?php echo($arraydatosgenerales['etitular']); ?>','81');
//control del boton ayuda
botonayuda();

});

</script>
</html>