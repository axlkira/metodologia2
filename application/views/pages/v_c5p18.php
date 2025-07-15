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
        <input type="text" class="form-control input-sm" id="idintegrante" name="idintegrante"  style="display:none"   placeholder="idintegrante" value="<?php echo($idintegrante); ?>">
        <input type="text" class="form-control input-sm" id="edad" name="edad"  style="display:none"   placeholder="" value="<?php echo($arraydatosgenerales['eedadintegrante']); ?>">
        <input type="text" class="form-control input-sm" id="sexo" name="sexo"  style="display:none"   placeholder="" value="<?php echo($arraydatosgenerales['esexointegrante']); ?>">
        <!--fin para imprimir el idintegrante y llevarlo-->
<hr>
        <form class="form-group" name="formulario" id="formulario">

            <!--inicio radio una sola seleccion-->
            <div class="row">
            <div id="c5p18div" name="c5p18div" <?php if($arrayrespuestas['ec5p18']==''){echo('class="form-group col-md-12 form-group-sm has-error"');}else{echo('class="form-group col-md-12 form-group-sm"');}?>>   
                <label class="control-label">18.    ¿..… está consumiendo la cantidad de suplemento nutricional, según lo ordenado por el médico? (Unica Respuesta)
                    <button type="button" id="vayuda" name="vayuda" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModal">
                        <span class="glyphicon glyphicon-question-sign" aria-hidden="true"></span> Ayuda
                    </button>
                </label>
                <div class="radio">
                    <label><!--en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="c5p18" id="c5p18" onclick="colocaropcion('1','valorc5p18','c5p18div');" value="1" <?php if($arrayrespuestas['ec5p18']=='1'){echo('checked');}?>>
                        Si
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="c5p18" id="c5p18" onclick="colocaropcion('2','valorc5p18','c5p18div');" value="2" <?php if($arrayrespuestas['ec5p18']=='2'){echo('checked');}?>>
                        No
                    </label>             
                </div> 
                <input type="text" class="form-control" id="valorc5p18" name="valorc5p18" style="display:none" placeholder="Text input" value="<?php echo($arrayrespuestas['ec5p18']); ?>">
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
            <?php if($arrayrespuestas['ec5p18']=="")
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
                          data: {vfolio : $('#folio').val(),vidintegrante : $('#idintegrante').val(), vvalorc5p18 : $('#valorc5p18').val()},    
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
                          data: {vfolio : $('#folio').val(),vidintegrante : $('#idintegrante').val(), vvalorc5p18 : $('#valorc5p18').val()},    
                          dataType: "html",
                          success : function(obj){                      
                          botonguardar();
                          }
                        });                    
        });
        

        $("#siguiente").click(function ()
        {
         botonsiguiente();
                           $.ajax({
                           url: "../c_c5p19/fc_actualizar",
                           type: "GET",
                           data: {vfolio : $('#folio').val(),
                           vidintegrante : $('#idintegrante').val(),    
                           vvalorc5p19 : '98',
                           vvalorc5p19cual : '98'},    
                           dataType: "html",
                           success : function(obj)
                           {
                         // location.href = "../c_c5p17/fc_c5p17?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
                           }
                          });
                          $.ajax({
                           url: "../c_c5p20/fc_actualizar",
                           type: "GET",
                           data: {vfolio : $('#folio').val(),
                           vidintegrante : $('#idintegrante').val(),    
                           vvalorc5p20 :'98'},    
                           dataType: "html",
                           success : function(obj)
                           {
                        //  location.href = "../c_c5p17/fc_c5p17?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
                           }
                          });
                          $.ajax({
                           url: "../c_c5p201/fc_actualizar",
                           type: "GET",
                           data: {vfolio : $('#folio').val(),
                           vidintegrante : $('#idintegrante').val(),    
                           vc5p201o1 : '98',          
                           vc5p201o2 : '98',
                           vc5p201o3 : '98',
                           vc5p201o4 : '98',
                           vc5p201o5 : '98',
                           vc5p201o6 : '98',
                           vc5p201o7 : '98',
                           vc5p201o8 : '98',
                           vc5p201o9 : '98'},
                           dataType: "html", 
                           success : function(obj)
                           {
                          //location.href = "../c_c5p17/fc_c5p17?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
                           }
                          });
                          $.ajax({
                           url: "../c_c5p21/fc_actualizar",
                           type: "GET",
                           data: {vfolio : $('#folio').val(),
                           vidintegrante : $('#idintegrante').val(),    
                           vvalorc5p21 :'98'},    
                           dataType: "html",
                           success : function(obj)
                           {
                          //location.href = "../c_c5p17/fc_c5p17?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
                           }
                          });
                          $.ajax({
                           url: "../c_c5p211/fc_actualizar",
                           type: "GET",
                           data: {vfolio : $('#folio').val(),
                           vidintegrante : $('#idintegrante').val(),    
                           vc5p211o1 :'98',          
                           vc5p211o2 :'98',
                           vc5p211o3 :'98',
                           vc5p211o4 :'98',
                           vc5p211o5 :'98',                                                   
                           vc5p211cual :'98'},
                           dataType: "html",
                           success : function(obj)
                           {
                          //location.href = "../c_c5p17/fc_c5p17?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
                           }
                          });
                          $.ajax({
                           url: "../c_c5p22/fc_actualizar",
                           type: "GET",
                           data: {vfolio : $('#folio').val(),
                           vidintegrante : $('#idintegrante').val(),    
                           vvalorc5p22 : '98',
                           vvalorc5p22esquema : '98'},    
                           dataType: "html",
                           success : function(obj)
                           {
                          location.href = "../c_capitulosintegrante/fc_capitulosintegrante?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                   
                           }
                          });
         //location.href = "../c_c5p19/fc_c5p19?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    

        });
              
        $("#anterior").click(function ()
        {
         botonanterior();
         location.href = "../c_c5p17/fc_c5p17?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";     
        //location.href = "../c_capitulosintegrantes/fc_capitulosintegrantes?idintegrante=" + $('#idintegrante').val()+ "&idintegrante="+"&idintegrante=0";                    
        });

//para cargar variables capitulo, pregunta,encuestador,vivienda,barra



cargardatosgenerales('<?php echo($arraydatosgenerales['ecapitulo']); ?>','Pregunta 18 de 22','<?php echo($arraydatosgenerales['enomcoges']); ?>','<?php echo($arraydatosgenerales['enombreintegrante']." "." - "." "."Sexo:"." ".$arraydatosgenerales['esexointegrante']."   "."  -  "."   "."Edad:"."   ".$arraydatosgenerales['eedadintegrante']); ?>','75');
//control del boton ayuda
botonayuda();

});

</script>
</html>