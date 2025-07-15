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

                    
                
 

  <div class="form-group  has-feedback">
    <label class="control-label" for="valorfiltro">Digite para filtrar</label>
    <input type="text" class="form-control input-sm" id="valorfiltro" name="valorfiltro" aria-describedby="inputSuccess4Status" onkeyup="filtar()">
    <span class="glyphicon glyphicon-search form-control-feedback" aria-hidden="true"></span>
  </div>
 
  <div class="form-group  has-feedback">
    <label class="control-label" for="valorc11p12b">ID Opcion Seleccionada</label>
    <input type="text" class="form-control input-sm" id="valorc11p12b" name="valorc11p12b"  value="<?php echo($arrayrespuestas['ec11p12b']); ?>" disabled="disabled">
    <span class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span>
  </div>

            <div id="c11p12bdiv" name="c11p12bdiv" <?php if($arrayrespuestas['ec11p12b']==''){echo('class="form-group col-md-12 form-group-sm has-error"');}else{echo('class="form-group col-md-12 form-group-sm"');}?>>   
                <label class="control-label">12b. ¿Cuál es el diagnóstico?
                    <button type="button" id="vayuda" name="vayuda" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModal">
                        <span class="glyphicon glyphicon-question-sign" aria-hidden="true"></span> Ayuda
                    </button>
                </label>
                <div id="filtrosdiag">
                        <?php echo($arraygianostico); ?>
                </div>
                
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
            <?php if($arrayrespuestas['ec11p12b']=="")
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
    
    function filtar()
    {//alert('JP');
                        $.ajax({
                          url: "filtrarcategoria",
                          type: "GET",
                          data: {vidintegrante : $('#idintegrante').val(), vcategoria : $('#valorfiltro').val()},    
                          dataType: "html",
                          success : function(obj){                      
                          $('#filtrosdiag').html(obj);
                          }
                        });         
    }
///////////////////////////////////////Funciones que llaman al controlador para guardar y actualizar////////////////////////////////////////////////////////////////////////    
    $(document).ready(function()
    {

        $("#guardar").click(function ()
        {
                        $.ajax({
                          url: "fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),vidintegrante : $('#idintegrante').val(), vvalorc11p12b : $('#valorc11p12b').val()},    
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
                          data: {vfolio : $('#folio').val(),vidintegrante : $('#idintegrante').val(), vvalorc11p12b : $('#valorc11p12b').val()},    
                          dataType: "html",
                          success : function(obj){                      
                          botonguardar();
                          }
                        });                    
        });
        

        $("#siguiente").click(function ()
                           {
                         botonsiguiente();
//                            if($('#valorc11p12b').val() == '1')
//                           {  
//                             $.ajax({
//                             url: "../c_c11p12ba/fc_actualizar",
//                             type: "GET",
//                             data: {vfolio : $('#folio').val(),vidintegrante : $('#idintegrante').val(), vc11p12bao2 :'98', vc11p12bao3 : '98' , vc11p12bao4 :'98', vc11p12bao5 : '98' ,vc11p12bao6 :'98', vc11p12bacual : '98'},    
//                             dataType: "html",
//                             success : function(obj){  
//                             location.href = "../c_c11p17/fc_c11p17?folio="  + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val();
//                             }
//                           }); 
//                           
//                           
//                                                       
//           }
//          else if ( $('#c11p12bao2').val() == '98')
//           {   
//              
//               
//             $.ajax({
//                             url: "../c_c11p12ba/fc_actualizar",
//                             type: "GET",
//                             data: {vfolio : $('#folio').val(),vidintegrante : $('#idintegrante').val(), vc11p12bao2 :'', vc11p12bao3 : '' , vc11p12bao4 :'', vc11p12bao5 : '' ,vc11p12bao6 :'', vc11p12bacual : ''},    
//                             dataType: "html",
//                             success : function(obj){  
//                             location.href = "../c_c11p12ba/fc_c11p12ba?folio="  + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val();
//                             }
//                           }); 
//                           
//                                                                 
//           }
//           else
//                {
                    
                    location.href = "../c_c11p12c/fc_c11p12c?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val();   
                //}
        });
              
        $("#anterior").click(function ()
        {
         botonanterior();
         location.href = "../c_c11p12a/fc_c11p12a?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val();                    
        //location.href = "../c_capitulosintegrantes/fc_capitulosintegrantes?idintegrante=" + $('#idintegrante').val()+ "&idintegrante="+"&idintegrante=0";                    
        });



cargardatosgenerales('<?php echo($arraydatosgenerales['ecapitulo']); ?>','Pregunta 12b de 15','<?php echo($arraydatosgenerales['enomcoges']); ?>','<?php echo($arraydatosgenerales['enombreintegrante']." "." - "." "."Sexo:"." ".$arraydatosgenerales['esexointegrante']."   "."  -  "."   "."Edad:"."   ".$arraydatosgenerales['eedadintegrante']); ?>','25');
//control del boton ayuda
botonayuda();

});

</script>
</html>