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
        <input type="text" class="form-control input-sm" id="c11p12_1o1" name="c11p12_1o1" style="display:none" placeholder="" value="<?php echo($arrayrespuestas['ec11p12_1o1']); ?>">
        <!--fin para imprimir el folio y llevarlo-->
<hr>
       <form class="form-group" name="formulario" id="formulario">

<!--inicio radio una sola seleccion-->
            <div class="row">
            <div id="c11p12div" name="c11p12div" <?php if($arrayrespuestas['ec11p12']=='' || $arrayrespuestas['ec11p12']=='98'){echo('class="form-group col-md-12 form-group-sm has-error"');}else{echo('class="form-group col-md-12 form-group-sm"');}?>>   
                <label class="control-label">12.   ¿ El integrante de la familia ha consultado anteriormente por problemas emocionales, Psicológicos o psiquiátricos?<br/>
                   Discapacidad cognitiva
                  <button type="button" id="vayuda" name="vayuda" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModal">
                        <span class="glyphicon glyphicon-question-sign" aria-hidden="true"></span> Ayuda
                    </button>
                </label>
                <div class="radio">
                    <label><!--en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="c11p12" id="c11p12" onclick="colocaropcion('1','valorc11p12','c11p12div');" value="1" <?php if($arrayrespuestas['ec11p12']=='1'){echo('checked');}?>>
                        Sí
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="c11p12" id="c11p12" onclick="colocaropcion('2','valorc11p12','c11p12div');" value="2" <?php if($arrayrespuestas['ec11p12']=='2'){echo('checked');}?>>
                        No
                    </label>             
                </div>
                <input type="text" class="form-control" id="valorc11p12" name="valorc11p12" style="display:none" placeholder="Text input" value="<?php echo($arrayrespuestas['ec11p12']); ?>">
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
            <?php if($arrayrespuestas['ec11p12']=="")
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
                          data: {vfolio : $('#folio').val(),vidintegrante : $('#idintegrante').val(), vvalorc11p12 : $('#valorc11p12').val()},
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
                          data: {vfolio : $('#folio').val(),vidintegrante : $('#idintegrante').val(), vvalorc11p12 : $('#valorc11p12').val()},
                          dataType: "html",
                          success : function(obj){                      
                          botonactualizar();
                          }
                        });                   
        });
        $("#siguiente").click(function ()
        {
         botonsiguiente();
            if($('#valorc11p12').val() === '1')
           {  
               $.ajax({
                             url: "../c_c11p12_1/fc_actualizar",
                             type: "GET",
                             data: {vfolio : $('#folio').val(),vidintegrante : $('#idintegrante').val(), vc11p12_1o1 :'98', vc11p12_1o2 :'98',
                             vc11p12_1o3 :'98', vc11p12_1o4 :'98', vc11p12_1o5 :'98', vc11p12_1cual :'98'},    
                             dataType: "html",
                             success : function(obj){  
                             location.href = "../c_c11p12a/fc_c11p12a?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                                         
                             }
                           }); 
                           
           }
          else if ($('#valorc11p12').val() === '2' && $('#c11p12_1o1').val() === '98')
           {    
              
               
               $.ajax({      url: "../c_c11p12_1/fc_actualizar",
                             type: "GET",
                             data: {vfolio : $('#folio').val(),vidintegrante : $('#idintegrante').val(), vc11p12_1o1 :'', vc11p12_1o2 :'',
                             vc11p12_1o3 :'', vc11p12_1o4 :'', vc11p12_1o5 :'', vc11p12_1cual :''},    
                             dataType: "html",
                             success : function(obj){  
                             location.href = "../c_c11p12_1/fc_c11p12_1?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                                         
             
                             }
                           });                 
           }
           else
                {
                   
                   location.href = "../c_c11p12_1/fc_c11p12_1?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                                         
                }
        });

        
//
//        $("#siguiente").click(function ()
//        {
//         botonsiguiente();
//         location.href = "../c_c11p12_1/fc_c11p12_1?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() ;            
//
//        });
//              
        $("#anterior").click(function ()
        {
         botonanterior();
         location.href = "../c_capitulosintegrante/fc_capitulosintegrante?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val();     
        //location.href = "../c_capitulosintegrantes/fc_capitulosintegrantes?folio=" + $('#folio').val()+ "&idintegrante="+"&idintegrante=0";                    
        });

//para cargar variables capitulo, pregunta,encuestador,vivienda,barra
cargardatosgenerales('<?php echo($arraydatosgenerales['ecapitulo']); ?>','Pregunta 12 de 15','<?php echo($arraydatosgenerales['enomcoges']); ?>','<?php echo($arraydatosgenerales['enombreintegrante']." "." - "." "."Sexo:"." ".$arraydatosgenerales['esexointegrante']."   "."  -  "."   "."Edad:"."   ".$arraydatosgenerales['eedadintegrante']); ?>','25');
//control del boton ayuda
botonayuda();

});



    
    
    
    
    
    

</script>
</html>