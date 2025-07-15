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
        <input type="text" class="form-control input-sm" id="c5p121o1" name="c5p121o1" style="display:none" placeholder="" value="<?php echo($arrayrespuestas['ec5p121o1']); ?>">
<!--        <input type="text" class="form-control input-sm" id="c5p9o1" name="c5p9o1" style="display:none" placeholder="" value="<?php echo($arrayrespuestas['ec5p9o1']); ?>">-->
        <!--fin para imprimir el idintegrante y llevarlo-->
<hr>
        <form class="form-group" name="formulario" id="formulario">

            <!--inicio radio una sola seleccion-->
            <div class="row">
            <div id="c5p12div" name="c5p12div" <?php if($arrayrespuestas['ec5p12']==''){echo('class="form-group col-md-12 form-group-sm has-error"');}else{echo('class="form-group col-md-12 form-group-sm"');}?>>   
                <label class="control-label">12. Que actividades realiza para prevenir  el càncer de pròstata? En caso de no realizar ninguna actividad  explicar la razòn. (Unica Respuesta)
                    <button type="button" id="vayuda" name="vayuda" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModal">
                        <span class="glyphicon glyphicon-question-sign" aria-hidden="true"></span> Ayuda
                    </button>
                </label>
                <div class="radio">
                    <label><!--en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="c5p12" id="c5p12" onclick="colocaropcion('c5p12o1','valorc5p12','c5p12div');" value="c5p12o1" <?php if($arrayrespuestas['ec5p12']=='c5p12o1'){echo('checked');}?>>
                    Exàmen de tacto anal  cada año        
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="c5p12" id="c5p12" onclick="colocaropcion('c5p12o2','valorc5p12','c5p12div');" value="c5p12o2" <?php if($arrayrespuestas['ec5p12']=='c5p12o2'){echo('checked');}?>>
                   Exàmen de sangre (Antigeno Prostàtico) cada 6 meses
                    </label>             
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="c5p12" id="c5p12" onclick="colocaropcion('c5p12o3','valorc5p12','c5p12div');" value="c5p12o3" <?php if($arrayrespuestas['ec5p12']=='c5p12o3'){echo('checked');}?>>
                        No realiza
                    </label>             
                </div>
            <input type="text" class="form-control" id="valorc5p12" name="valorc5p12" style="display:none" placeholder="Text input" value="<?php echo($arrayrespuestas['ec5p12']); ?>">
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
            <?php if($arrayrespuestas['ec5p12']=="")
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
                          data: {vfolio : $('#folio').val(),vidintegrante : $('#idintegrante').val(), vvalorc5p12 : $('#valorc5p12').val()},    
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
                          data: {vfolio : $('#folio').val(),vidintegrante : $('#idintegrante').val(), vvalorc5p12 : $('#valorc5p12').val()},    
                          dataType: "html",
                          success : function(obj){                      
                          botonguardar();
                          }
                        });                    
        });
         $("#siguiente").click(function ()
       {
        //botonsiguiente();
        if($('#valorc5p12').val() !== 'c5p12o3')
          {               //alert('salto');
                            $.ajax({
                          url: "../c_c5p121/fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),
                          vidintegrante : $('#idintegrante').val(),
                          vc5p121o1 : '98',          
                          vc5p121o2 : '98',
                          vc5p121o3 : '98',
                          vc5p121o4 : '98',
                          vc5p121o5 : '98',
                          vc5p121o6 : '98',
                          vc5p121o7 : '98',
                          vc5p121o8 : '98',
                          vc5p121o9 : '98'},
                          dataType: "html",
                           success : function(obj)
                           {
                                          
                           }
                          });
                          
                           $.ajax({
                          url: "../c_c5p13/fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),
                              vidintegrante : $('#idintegrante').val(), 
                              vvalorc5p13 : '98'},    
                          dataType: "html",
                           success : function(obj)
                           {
                                          
                           }
                          });
                          
                          $.ajax({
                          url: "../c_c5p131/fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),
                           vidintegrante : $('#idintegrante').val(),
                          vc5p131o1 : '98',          
                          vc5p131o2 : '98',
                          vc5p131o3 : '98',
                          vc5p131o4 : '98',
                          vc5p131o5 : '98',                                                   
                          vc5p131cual :'98'},    
                          dataType: "html",
                           success : function(obj)
                           {
                                          
                           }
                          });
                          
                          
                          $.ajax({
                          url: "../c_c5p14/fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),vidintegrante : $('#idintegrante').val(),
                          vvalorc5p14 : '98',
                          vvalorc5p14esquema : '98'},    
                          dataType: "html",
                           success : function(obj)
                           {
                         location.href = "../c_capitulosintegrante/fc_capitulosintegrante?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";
                           }
                          });
                          
                          
                          
             }
             else if(($('#valorc5p12').val() === 'c5p12o3') && ($('#c5p121o1').val() === '98')) 
             {
//                  location.href = "../c_c5p121/fc_c5p121?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val();

                    $.ajax({
                          url: "../c_c5p121/fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),
                          vidintegrante : $('#idintegrante').val(),
                          vc5p121o1 : '',          
                          vc5p121o2 : '',
                          vc5p121o3 : '',
                          vc5p121o4 : '',
                          vc5p121o5 : '',
                          vc5p121o6 : '',
                          vc5p121o7 : '',
                          vc5p121o8 : '',
                          vc5p121o9 : ''},
                          dataType: "html",
                           success : function(obj)
                           {
                                          
                           }
                          });
                          
                           $.ajax({
                          url: "../c_c5p13/fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),
                              vidintegrante : $('#idintegrante').val(), 
                              vvalorc5p13 : ''},    
                          dataType: "html",
                           success : function(obj)
                           {
                                          
                           }
                          });
                          
                          $.ajax({
                          url: "../c_c5p131/fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),
                           vidintegrante : $('#idintegrante').val(),
                          vc5p131o1 : '',          
                          vc5p131o2 : '',
                          vc5p131o3 : '',
                          vc5p131o4 : '',
                          vc5p131o5 : '',                                                   
                          vc5p131cual :''},    
                          dataType: "html",
                           success : function(obj)
                           {
                                          
                           }
                          });
                          
                          
                          $.ajax({
                          url: "../c_c5p14/fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),vidintegrante : $('#idintegrante').val(),
                          vvalorc5p14 : '',
                          vvalorc5p14esquema : ''},    
                          dataType: "html",
                           success : function(obj)
                           {
                          location.href = "../c_c5p121/fc_c5p121?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val();
                           }
                          });
             }
             else
             {
                 location.href = "../c_c5p121/fc_c5p121?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val();
             }
          
            });

//        $("#siguiente").click(function ()
//        {
//         botonsiguiente();
//         location.href = "../c_c5p121/fc_c5p121?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
//
//        });
         $("#anterior").click(function ()
        {
         botonanterior();
          if(($('#sexo').val() === 'MASCULINO' && $('#edad').val() >= 40))
          {
              location.href = "../c_c5p6/fc_c5p6?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val();
          }
        });
              
//        $("#anterior").click(function ()
//        {
//         botonanterior();
//         location.href = "../c_c5p19/fc_c5p19?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";     
//        //location.href = "../c_capitulosintegrantes/fc_capitulosintegrantes?idintegrante=" + $('#idintegrante').val()+ "&idintegrante="+"&idintegrante=0";                    
//        });

//para cargar variables capitulo, pregunta,encuestador,vivienda,barra



cargardatosgenerales('<?php echo($arraydatosgenerales['ecapitulo']); ?>','Pregunta 12 de 14','<?php echo($arraydatosgenerales['enomcoges']); ?>','<?php echo($arraydatosgenerales['enombreintegrante']." "." - "." "."Sexo:"." ".$arraydatosgenerales['esexointegrante']."   "."  -  "."   "."Edad:"."   ".$arraydatosgenerales['eedadintegrante']); ?>','90');
//control del boton ayuda
botonayuda();

});

</script>
</html>