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
            <div id="c13p172div" name="c13p172div" <?php if($arrayrespuestas['ec13p172']==''){echo('class="form-group col-md-12 form-group-sm has-error"');}else{echo('class="form-group col-md-12 form-group-sm"');}?>>   
                <label class="control-label">17.2 ¿CUÁL ES LA PRINCIPAL RAZÓN POR LA QUE EL MENOR NO ASISTE A UN HOGAR COMUNITARIO, GUARDERÍA, PREESCOLAR O MODALIDAD DEL PROGRAMA DE ATENCIÓN EN CUIDADO, NUTRICIÓN Y EDUCACIÓN INICIAL? (ÚNICA RESPUESTA)            
                    <button type="button" id="vayuda" name="vayuda" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModal">
                        <span class="glyphicon glyphicon-question-sign" aria-hidden="true"></span> Ayuda
                    </button>
                </label>
                <div class="radio">
                    <label><!--en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="c13p172" id="c13p172" onclick="colocaropcion('c13p172o1','valorc13p172','c13p172div');" value="c13p172o1" <?php if($arrayrespuestas['ec13p172']=='c13p172o1'){echo('checked');}?>>
                        a. No hay instituciones cerca
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="c13p172" id="c13p172" onclick="colocaropcion('c13p172o2','valorc13p172','c13p172div');" value="c13p172o2" <?php if($arrayrespuestas['ec13p172']=='c13p172o2'){echo('checked');}?>>
                        b. No puede pagar el costo del servicio
                    </label>             
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="c13p172" id="c13p172" onclick="colocaropcion('c13p172o3','valorc13p172','c13p172div');" value="c13p172o3" <?php if($arrayrespuestas['ec13p172']=='c13p172o3'){echo('checked');}?>>
                        c. No había cupo
                    </label>             
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="c13p172" id="c13p172" onclick="colocaropcion('c13p172o4','valorc13p172','c13p172div');" value="c13p172o4" <?php if($arrayrespuestas['ec13p172']=='c13p172o4'){echo('checked');}?>>
                        d. Prefiere que no asista todavía o considera que todavía no esta en edad de asistir
                    </label>             
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="c13p172" id="c13p172" onclick="colocaropcion('c13p172o5','valorc13p172','c13p172div');" value="c13p172o5" <?php if($arrayrespuestas['ec13p172']=='c13p172o5'){echo('checked');}?>>
                        e. Tiene quien lo cuide
                    </label>             
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="c13p172" id="c13p172" onclick="colocaropcion('c13p172o6','valorc13p172','c13p172div');" value="c13p172o6" <?php if($arrayrespuestas['ec13p172']=='c13p172o6'){echo('checked');}?>>
                        f. Otra razón
                    </label>             
                </div>
                
                <div class="" name="c13p172cualdiv" id="c13p172cualdiv">
                   <label> Cual? </label>  
                    <input type="text" class="form-control" id="c13p172cual" name="c13p172cual" style="" onKeyPress="return soloLetras(event)" onchange="validarbolitasytexto('c13p172cualdiv','c13p172cual')"  placeholder="Cual" value="<?php echo($arrayrespuestas['ec13p172cual']); ?>">        
                </div>
                <input type="text" class="form-control" id="valorc13p172" name="valorc13p172" style="display:none" placeholder="Text input" value="<?php echo($arrayrespuestas['ec13p172']); ?>">
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
            <?php if($arrayrespuestas['ec13p172']=="")
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
                          data: {vfolio : $('#folio').val(), vvalorc13p172 : $('#valorc13p172').val(),vvalorc13p172cual : $('#c13p172cual').val()},    
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
                          data: {vfolio : $('#folio').val(), vvalorc13p172 : $('#valorc13p172').val(),vvalorc13p172cual : $('#c13p172cual').val()},    
                          dataType: "html",
                          success : function(obj){                      
                          botonactualizar();
                          }
                        });                   
        });
        

        $("#siguiente").click(function ()
        {
         botonsiguiente();
         location.href = "../c_c13p18/fc_c13p18?folio=" + $('#folio').val();                    

        });
              
        $("#anterior").click(function ()
        {
         botonanterior();
         location.href = "../c_c13p171/fc_c13p171?folio=" + $('#folio').val(); 
        //location.href = "../c_capitulosintegrantes/fc_capitulosintegrantes?folio=" + $('#folio').val()+ "&idintegrante="+"&idintegrante=0";                    
        });

//para cargar variables capitulo, pregunta,encuestador,vivienda,barra
cargardatosgenerales('<?php echo($arraydatosgenerales['ecapitulo']); ?>','Pregunta 17.2 de 22','<?php echo($arraydatosgenerales['enomcoges']); ?>','<?php echo($arraydatosgenerales['etitular']); ?>','63');
//control del boton ayuda
botonayuda();

});

</script>
</html>