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
        <div id="c6p17adiv" name="c6p17adiv" class="form-group col-md-12 form-group-sm">
        <div id="c6p17ao0div" class="has-error">
        <label class="control-label">17a. Cuales? (Seleccion Multiple)
                     <button type="button" id="vayuda" name="vayuda" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModal">
                        <span class="glyphicon glyphicon-question-sign" aria-hidden="true"></span> Ayuda
                    </button>       
        </label>
        </div>
        <div id="c6p17ao1div" <?php if($arrayrespuestas['ec6p17ao1']=='' || $arrayrespuestas['ec6p17ao1']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
            <label> <!--en este caso se manda a la fincion javascript el nombre del campo-->
              <input type="checkbox" name="c6p17ao1" id="c6p17ao1" onclick="cambiarsino('SI','c6p17ao1','c6p17ao1div','c6p17adiv',11);" <?php if($arrayrespuestas['ec6p17ao1']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            Paquete para madres gestantes y lactantes
            </label>
        </div>
        </div>
        <div id="c6p17ao2div" <?php if($arrayrespuestas['ec6p17ao2']=='' || $arrayrespuestas['ec6p17ao2']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="c6p17ao2" id="c6p17ao2" onclick="cambiarsino('SI','c6p17ao2','c6p17ao2div','c6p17adiv',11);" <?php if($arrayrespuestas['ec6p17ao2']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            Compotas
          </label>
        </div>
        </div>
        <div id="c6p17ao3div" <?php if($arrayrespuestas['ec6p17ao3']==''|| $arrayrespuestas['ec6p17ao3']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="c6p17ao3" id="c6p17ao3" onclick="cambiarsino('SI','c6p17ao3','c6p17ao3div','c6p17adiv',11);" <?php if($arrayrespuestas['ec6p17ao3']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            Alimentaciòn en Buen Comienzo
          </label>
        </div>
        </div>  
         
       <div id="c6p17ao4div" <?php if($arrayrespuestas['ec6p17ao4']==''|| $arrayrespuestas['ec6p17ao4']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="c6p17ao4" id="c6p17ao4" onclick="cambiarsino('SI','c6p17ao4','c6p17ao4div','c6p17adiv',11);" <?php if($arrayrespuestas['ec6p17ao4']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            Alimentaciòn Mana infatil
          </label>
        </div>
        </div>
        <div id="c6p17ao5div" <?php if($arrayrespuestas['ec6p17ao5']==''|| $arrayrespuestas['ec6p17ao5']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="c6p17ao5" id="c6p17ao5" onclick="cambiarsino('SI','c6p17ao5','c6p17ao5div','c6p17adiv',11);" <?php if($arrayrespuestas['ec6p17ao5']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            Restaurante Escolar - Vaso de Leche
          </label>
        </div>
        </div>
        <div id="c6p17ao6div" <?php if($arrayrespuestas['ec6p17ao6']==''|| $arrayrespuestas['ec6p17ao6']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="c6p17ao6" id="c6p17ao6" onclick="cambiarsino('SI','c6p17ao6','c6p17ao6div','c6p17adiv',11);" <?php if($arrayrespuestas['ec6p17ao6']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            Restaurante Escolar - Desayuno /almuerzo
          </label>
        </div>
        </div>
        <div id="c6p17ao7div" <?php if($arrayrespuestas['ec6p17ao7']==''|| $arrayrespuestas['ec6p17ao7']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="c6p17ao7" id="c6p17ao7" onclick="cambiarsino('SI','c6p17ao7','c6p17ao7div','c6p17adiv',11);" <?php if($arrayrespuestas['ec6p17ao7']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            Paquete alimentario Familiar
          </label>
        </div>
        </div>
        <div id="c6p17ao8div" <?php if($arrayrespuestas['ec6p17ao8']==''|| $arrayrespuestas['ec6p17ao8']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="c6p17ao8" id="c6p17ao8" onclick="cambiarsino('SI','c6p17ao8','c6p17ao8div','c6p17adiv',11);" <?php if($arrayrespuestas['ec6p17ao8']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            Paquete alimentario Adulto Mayor
          </label>
        </div>
        </div>
        <div id="c6p17ao9div" <?php if($arrayrespuestas['ec6p17ao9']==''|| $arrayrespuestas['ec6p17ao9']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="c6p17ao9" id="c6p17ao9" onclick="cambiarsino('SI','c6p17ao9','c6p17ao9div','c6p17adiv',11);" <?php if($arrayrespuestas['ec6p17ao9']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            Mercado de Emergencia
          </label>
        </div>
        </div>
         <div id="c6p17ao10div" <?php if($arrayrespuestas['ec6p17ao10']==''|| $arrayrespuestas['ec6p17ao10']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="c6p17ao10" id="c6p17ao10" onclick="cambiarsino('SI','c6p17ao10','c6p17ao10div','c6p17adiv',11);" <?php if($arrayrespuestas['ec6p17ao10']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            Comedores Comunitarios
          </label>
        </div>
        </div>   
            
         <div id="c6p17ao11div" <?php if($arrayrespuestas['ec6p17ao11']==''|| $arrayrespuestas['ec6p17ao11']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="c6p17ao11" id="c6p17ao11" onclick="cambiarsino('SI','c6p17ao11','c6p17ao11div','c6p17adiv',11);" <?php if($arrayrespuestas['ec6p17ao11']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            Bono Alimentario
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
            <?php if($arrayrespuestas['ec6p17ao1']=="" & $arrayrespuestas['ec6p17ao2']=="" & $arrayrespuestas['ec6p17ao3']==""& $arrayrespuestas['ec6p17ao4']==""& $arrayrespuestas['ec6p17ao5']==""
                     & $arrayrespuestas['ec6p17ao6']==""& $arrayrespuestas['ec6p17ao7']==""& $arrayrespuestas['ec6p17ao8']==""& $arrayrespuestas['ec6p17ao9']==""& $arrayrespuestas['ec6p17ao10']==""& $arrayrespuestas['ec6p17ao11']=="")
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
                          vc6p17ao1 : $('#c6p17ao1').val(),
                          vc6p17ao2 : $('#c6p17ao2').val(),
                          vc6p17ao3 : $('#c6p17ao3').val(),
                          vc6p17ao4 : $('#c6p17ao4').val(),
                          vc6p17ao5 : $('#c6p17ao5').val(),
                          vc6p17ao6 : $('#c6p17ao6').val(),
                          vc6p17ao7 : $('#c6p17ao7').val(),
                          vc6p17ao8 : $('#c6p17ao8').val(),
                          vc6p17ao9 : $('#c6p17ao9').val(),
                          vc6p17ao10 : $('#c6p17ao10').val(),
                          vc6p17ao11 : $('#c6p17ao11').val()},
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
                          vc6p17ao1 : $('#c6p17ao1').val(),
                          vc6p17ao2 : $('#c6p17ao2').val(),
                          vc6p17ao3 : $('#c6p17ao3').val(),
                          vc6p17ao4 : $('#c6p17ao4').val(),
                          vc6p17ao5 : $('#c6p17ao5').val(),
                          vc6p17ao6 : $('#c6p17ao6').val(),
                          vc6p17ao7 : $('#c6p17ao7').val(),
                          vc6p17ao8 : $('#c6p17ao8').val(),
                          vc6p17ao9 : $('#c6p17ao9').val(),
                          vc6p17ao10 : $('#c6p17ao10').val(), 
                          vc6p17ao11 : $('#c6p17ao11').val()},
                          dataType: "html",
                          success : function(obj){                      
                          botonactualizar();
                          }
                        });                   
        });
        

        $("#siguiente").click(function ()
        {
         botonsiguiente();
         location.href = "../c_c6p18/fc_c6p18?folio=" + $('#folio').val();                    

        });
              
        $("#anterior").click(function ()
        {
         botonanterior();
         location.href = "../c_c6p17/fc_c6p17?folio=" + $('#folio').val(); 
        });

//para cargar variables capitulo, pregunta,encuestador,vivienda,barra
cargardatosgenerales('<?php echo($arraydatosgenerales['ecapitulo']); ?>','Pregunta 17a de 19','<?php echo($arraydatosgenerales['enomcoges']); ?>','<?php echo($arraydatosgenerales['etitular']); ?>','90');
//control del boton ayuda
botonayuda();

});

</script>
</html>