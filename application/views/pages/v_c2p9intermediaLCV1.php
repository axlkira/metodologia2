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
         <input type="text" class="form-control input-sm" id="valorc2p11intermedia" name="valorc2p11intermedia" style="display:none"   placeholder="" value="<?php echo $arrayrespuestas['ec2p11intermedia']; ?>">
        <!--fin para imprimir el folio y llevarlo-->
<hr>
        <form class="form-group" name="formulario" id="formulario">

            <!--inicio radio una sola seleccion-->
            <div class="row">
            <div id="c2p9intermediadiv" name="c2p9intermediadiv" <?php if($arrayrespuestas['ec2p9intermedia']==''){echo('class="form-group col-md-12 form-group-sm has-error"');}else{echo('class="form-group col-md-12 form-group-sm"');}?>>   
                <label class="control-label">9.  El agua para consumo y preparación de los alimentos la obtienen principalmente de:  (Unica respuesta)
                    <button type="button" id="vayuda" name="vayuda" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModal">
                        <span class="glyphicon glyphicon-question-sign" aria-hidden="true"></span> Ayuda
                    </button>
                </label>
                <div class="radio">
                    <label><!--en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="c2p9intermedia" id="c2p9intermedia" onclick="colocaropcion('c2p9intermediao1','valorc2p9intermedia','c2p9intermediadiv');" value="c2p9intermediao1" <?php if($arrayrespuestas['ec2p9intermedia']=='c2p9intermediao1'){echo('checked');}?>>
                        Acueducto veredal o comunal
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="c2p9intermedia" id="c2p9intermedia" onclick="colocaropcion('c2p9intermediao2','valorc2p9intermedia','c2p9intermediadiv');" value="c2p9intermediao2" <?php if($arrayrespuestas['ec2p9intermedia']=='c2p9intermediao2'){echo('checked');}?>>
                        Acueducto público
                    </label>             
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="c2p9intermedia" id="c2p9intermedia" onclick="colocaropcion('c2p9intermediao3','valorc2p9intermedia','c2p9intermediadiv');" value="c2p9intermediao3" <?php if($arrayrespuestas['ec2p9intermedia']=='c2p9intermediao3'){echo('checked');}?>>
                        Pozo con bomba
                    </label>             
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="c2p9intermedia" id="c2p9intermedia" onclick="colocaropcion('c2p9intermediao4','valorc2p9intermedia','c2p9intermediadiv');" value="c2p9intermediao4" <?php if($arrayrespuestas['ec2p9intermedia']=='c2p9intermediao4'){echo('checked');}?>>
                        Pozo sin bomba
                    </label>             
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="c2p9intermedia" id="c2p9intermedia" onclick="colocaropcion('c2p9intermediao5','valorc2p9intermedia','c2p9intermediadiv');" value="c2p9intermediao5" <?php if($arrayrespuestas['ec2p9intermedia']=='c2p9intermediao5'){echo('checked');}?>>
                        Agua lluvia
                    </label>             
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="c2p9intermedia" id="c2p9intermedia" onclick="colocaropcion('c2p9intermediao6','valorc2p9intermedia','c2p9intermediadiv');" value="c2p9intermediao6" <?php if($arrayrespuestas['ec2p9intermedia']=='c2p9intermediao6'){echo('checked');}?>>
                        Río, quebrada, manantial, nacimiento
                    </label>             
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="c2p9intermedia" id="c2p9intermedia" onclick="colocaropcion('c2p9intermediao7','valorc2p9intermedia','c2p9intermediadiv');" value="c2p9intermediao7" <?php if($arrayrespuestas['ec2p9intermedia']=='c2p9intermediao7'){echo('checked');}?>>
                        Pila pública
                    </label>             
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="c2p9intermedia" id="c2p9intermedia" onclick="colocaropcion('c2p9intermediao8','valorc2p9intermedia','c2p9intermediadiv');" value="c2p9intermediao8" <?php if($arrayrespuestas['ec2p9intermedia']=='c2p9intermediao8'){echo('checked');}?>>
                        Manguera conectada a tubo madre
                    </label>             
                </div>
                
                
                <div class="radio">
                    <label>
                        <input type="radio" name="c2p9intermedia" id="c2p9intermedia" onclick="colocaropcion('c2p9intermediao9','valorc2p9intermedia','c2p9intermediadiv');" value="c2p9intermediao9" <?php if($arrayrespuestas['ec2p9intermedia']=='c2p9intermediao9'){echo('checked');}?>>
                        Carro tanque
                    </label>             
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="c2p9intermedia" id="c2p9intermedia" onclick="colocaropcion('c2p9intermediao10','valorc2p9intermedia','c2p9intermediadiv');" value="c2p9intermediao10" <?php if($arrayrespuestas['ec2p9intermedia']=='c2p9intermediao10'){echo('checked');}?>>
                        Aguatero
                    </label>             
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="c2p9intermedia" id="c2p9intermedia" onclick="colocaropcion('c2p9intermediao11','valorc2p9intermedia','c2p9intermediadiv');" value="c2p9intermediao11" <?php if($arrayrespuestas['ec2p9intermedia']=='c2p9intermediao11'){echo('checked');}?>>
                        La obtiene de otra vivienda 
                    </label>             
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="c2p9intermedia" id="c2p9intermedia" onclick="colocaropcion('c2p9intermediao12','valorc2p9intermedia','c2p9intermediadiv');" value="c2p9intermediao12" <?php if($arrayrespuestas['ec2p9intermedia']=='c2p9intermediao12'){echo('checked');}?>>
                        Agua embotellada o en bolsa
                    </label>             
                </div>
               
                
                <input type="text" class="form-control" id="valorc2p9intermedia" name="valorc2p9intermedia" style="display:none" placeholder="Text input" value="<?php echo($arrayrespuestas['ec2p9intermedia']); ?>">
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
            <?php if($arrayrespuestas['ec2p9intermedia']=="")
             {
                echo($botoneraginterh);
            }
            else
            {
                echo($botoneraainterh);
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
                          data: {vfolio : $('#folio').val(), vvalorc2p9intermedia : $('#valorc2p9intermedia').val()},    
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
                          data: {vfolio : $('#folio').val(), vvalorc2p9intermedia : $('#valorc2p9intermedia').val()},    
                          dataType: "html",
                          success : function(obj){                      
                          botonactualizar();
                          }
                        });                   
        });
        
        
         $("#capitulos").click(function ()
        {
            
            location.href = "../c_capituloshogarintermediaLCV1/fc_capituloshogarintermediaLCV1?folio=" + $('#folio').val() +  "&idintegrante=0" ;                    
         
            });

        $("#siguiente").click(function ()
        {
            
            if($('#valorc2p11intermedia').val()=='98')
            {
                location.href = "../c_capituloshogarintermediaLCV1/fc_capituloshogarintermediaLCV1?folio=" + $('#folio').val() +  "&idintegrante=0" ;                    
            }
            else
            {
                location.href = "../c_c2p11intermediaLCV1/fc_c2p11intermediaLCV1?folio=" + $('#folio').val();                    
            }
         
         botonsiguiente();

        });
              
        $("#anterior").click(function ()
        {
         botonanterior();
         location.href = "../c_c2p8intermediaLCV1/fc_c2p8intermediaLCV1?folio=" + $('#folio').val();  
        });

//para cargar variables capitulo, pregunta,encuestador,vivienda,barra
cargardatosgenerales('<?php echo($arraydatosgenerales['ecapitulo']); ?>','Pregunta 9 de 16','<?php echo($arraydatosgenerales['enomcoges']); ?>','<?php echo($arraydatosgenerales['etitular']); ?>','45');
//control del boton ayuda
botonayuda();

});

</script>
</html>