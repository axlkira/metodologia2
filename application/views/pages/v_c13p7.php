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

            <!--inicio radio una sola seleccion-->
            <div class="row">
            <div id="c13p7div" name="c13p7div" <?php if($arrayrespuestas['ec13p7']==''){echo('class="form-group col-md-12 form-group-sm has-error"');}else{echo('class="form-group col-md-12 form-group-sm"');}?>>   
                <label class="control-label">7. ¿CUÁL ES EL MATERIAL PREDOMINANTE DE LAS PAREDES EXTERIORES DE LA VIVIENDA? (ÚNICA RESPUESTA)              
                    <button type="button" id="vayuda" name="vayuda" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModal">
                        <span class="glyphicon glyphicon-question-sign" aria-hidden="true"></span> Ayuda
                    </button>
                </label>
                <div class="radio">
                    <label><!--en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="c13p7" id="c13p7" onclick="colocaropcion('c13p7o1','valorc13p7','c13p7div');" value="c13p7o1" <?php if($arrayrespuestas['ec13p7']=='c13p7o1'){echo('checked');}?>>
                        a. Bloque o ladrillo
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="c13p7" id="c13p7" onclick="colocaropcion('c13p7o2','valorc13p7','c13p7div');" value="c13p7o2" <?php if($arrayrespuestas['ec13p7']=='c13p7o2'){echo('checked');}?>>
                        b. Madera pulida
                    </label>             
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="c13p7" id="c13p7" onclick="colocaropcion('c13p7o3','valorc13p7','c13p7div');" value="c13p7o3" <?php if($arrayrespuestas['ec13p7']=='c13p7o3'){echo('checked');}?>>
                        c. Madera burda
                    </label>             
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="c13p7" id="c13p7" onclick="colocaropcion('c13p7o4','valorc13p7','c13p7div');" value="c13p7o4" <?php if($arrayrespuestas['ec13p7']=='c13p7o4'){echo('checked');}?>>
                        d. Tabla o tablon
                    </label>             
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="c13p7" id="c13p7" onclick="colocaropcion('c13p7o5','valorc13p7','c13p7div');" value="c13p7o5" <?php if($arrayrespuestas['ec13p7']=='c13p7o5'){echo('checked');}?>>
                        e. Zinc
                    </label>             
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="c13p7" id="c13p7" onclick="colocaropcion('c13p7o6','valorc13p7','c13p7div');" value="c13p7o6" <?php if($arrayrespuestas['ec13p7']=='c13p7o6'){echo('checked');}?>>
                        f.Desechos
                    </label>             
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="c13p7" id="c13p7" onclick="colocaropcion('c13p7o7','valorc13p7','c13p7div');" value="c13p7o7" <?php if($arrayrespuestas['ec13p7']=='c13p7o7'){echo('checked');}?>>
                        g. Tapia
                    </label>             
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="c13p7" id="c13p7" onclick="colocaropcion('c13p7o8','valorc13p7','c13p7div');" value="c13p7o8" <?php if($arrayrespuestas['ec13p7']=='c13p7o8'){echo('checked');}?>>
                        h. Guadua
                    </label>             
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="c13p7" id="c13p7" onclick="colocaropcion('c13p7o9','valorc13p7','c13p7div');" value="c13p7o9" <?php if($arrayrespuestas['ec13p7']=='c13p7o9'){echo('checked');}?>>
                        i. Bahareque
                    </label>             
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="c13p7" id="c13p7" onclick="colocaropcion('c13p7o10','valorc13p7','c13p7div');" value="c13p7o10" <?php if($arrayrespuestas['ec13p7']=='c13p7o10'){echo('checked');}?>>
                        j. Carton o plastico
                    </label>             
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="c13p7" id="c13p7" onclick="colocaropcion('c13p7o11','valorc13p7','c13p7div');" value="c13p7o11" <?php if($arrayrespuestas['ec13p7']=='c13p7o11'){echo('checked');}?>>
                        k. Tela o lona
                    </label>             
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="c13p7" id="c13p7" onclick="colocaropcion('c13p7o12','valorc13p7','c13p7div');" value="c13p7o12" <?php if($arrayrespuestas['ec13p7']=='c13p7o12'){echo('checked');}?>>
                        l. Material prefabricado
                    </label>             
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="c13p7" id="c13p7" onclick="colocaropcion('c13p7o13','valorc13p7','c13p7div');" value="c13p7o13" <?php if($arrayrespuestas['ec13p7']=='c13p7o13'){echo('checked');}?>>
                        m. Sin paredes
                    </label>             
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="c13p7" id="c13p7" onclick="colocaropcion('c13p7o14','valorc13p7','c13p7div');" value="c13p7o14" <?php if($arrayrespuestas['ec13p7']=='c13p7o14'){echo('checked');}?>>
                        n. Otra
                    </label>             
                </div>
                <div class="" name="c13p7cualdiv" id="c13p7cualdiv">
                   <label> Cual? </label>  
                    <input type="text" class="form-control" id="c13p7cual" name="c13p7cual" style="" onKeyPress="return soloLetras(event)" onchange="validarbolitasytexto('c13p7cualdiv','c13p7cual')"  placeholder="Cual" value="<?php echo($arrayrespuestas['ec13p7cual']); ?>">        
                </div>
                <input type="text" class="form-control" id="valorc13p7" name="valorc13p7" style="display:none" placeholder="Text input" value="<?php echo($arrayrespuestas['ec13p7']); ?>">
            </div>
            </div> 
            <!--fin radio una sola seleccion-->
            
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
            <?php if($arrayrespuestas['ec13p7']=="")
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
                          data: {vfolio : $('#folio').val(), vvalorc13p7 : $('#valorc13p7').val(),vvalorc13p7cual : $('#c13p7cual').val()},    
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
                          data: {vfolio : $('#folio').val(), vvalorc13p7 : $('#valorc13p7').val(),vvalorc13p7cual : $('#c13p7cual').val()},    
                          dataType: "html",
                          success : function(obj){                      
                          botonactualizar();
                          }
                        });                   
        });
        

        $("#siguiente").click(function ()
        {
         botonsiguiente();
         location.href = "../c_c13p8/fc_c13p8?folio=" + $('#folio').val();                    

        });
              
        $("#anterior").click(function ()
        {
         botonanterior();
         location.href = "../c_c13p6/fc_c13p6?folio=" + $('#folio').val(); 
        //location.href = "../c_capitulosintegrantes/fc_capitulosintegrantes?folio=" + $('#folio').val()+ "&idintegrante="+"&idintegrante=0";                    
        });

//para cargar variables capitulo, pregunta,encuestador,vivienda,barra
cargardatosgenerales('<?php echo($arraydatosgenerales['ecapitulo']); ?>','Pregunta 7 de 22','<?php echo($arraydatosgenerales['enomcoges']); ?>','<?php echo($arraydatosgenerales['etitular']); ?>','21');
//control del boton ayuda
botonayuda();

});

</script>
</html>