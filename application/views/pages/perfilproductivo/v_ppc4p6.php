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

           <div class="row">
            <div id="ppc4p6div" name="ppc4p6div" <?php if($carrayrespuestas['eppc4p6']==''){echo('class="form-group col-md-12 form-group-sm has-error"');}else{echo('class="form-group col-md-12 form-group-sm"');}?>>   
                <label class="control-label">6 PAGA SEGURIDAD SOCIAL POR SUS EMPLEADOS:
                    <button type="button" id="vayuda" name="vayuda" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModal">
                        <span class="glyphicon glyphicon-question-sign" aria-hidden="true"></span> Ayuda
                    </button>
                </label>
                <div class="radio">
                    <label><!--en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="ppc4p6" id="ppc4p6" onclick="colocaropcion('1','valorppc4p6','ppc4p6div');" value="1" <?php if($carrayrespuestas['eppc4p6']=='1'){echo('checked');}?>>
                        Si
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="ppc4p6" id="ppc4p6" onclick="colocaropcion('2','valorppc4p6','ppc4p6div');" value="2" <?php if($carrayrespuestas['eppc4p6']=='2'){echo('checked');}?>>
                        No
                    </label>             
                </div> 
                
                <input type="text" class="form-control" id="valorppc4p6" name="valorppc4p6" style="display:none"  placeholder="Text input" value="<?php echo($carrayrespuestas['eppc4p6']); ?>">
            </div>
            </div> 
            

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
            <?php if($carrayrespuestas['eppc4p6']=="")
            {
                echo($botonerag);
            }
            else
            {
                echo($botoneraa);
            }?>   
          <!-- Fin botonera guardar y actualizar-->

        
    
    <!--Inicio Este es el footer NO TOCAR-->
    <?php echo($foot); ?>
    <!--fin del footer NO TOCAR-->
    </form>
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
                                 vidintegrante : $('#idintegrante').val(),
                                 vvalorppc4p6: $('#valorppc4p6').val()},    
                          dataType: "html",
                          success : function(obj){                      
                          botonguardar();
                          saltoppc4p6();
                          },
                          error: function (jqXHR, ajaxOptions, thrownError) {terminasinco();
                                    if (jqXHR.status === 0) {
                                        mensajito ('Error al sincronizar!!!','Sin Conexion a internet, por favor verifca tu conexion a internet y vuelve a intentar. [0]');
                                    } else if (jqXHR.status == 404) {
                                        mensajito ('Error al sincronizar!!!','Sin Conexion a internet, por favor verifca tu conexion a internet y vuelve a intentar. [404]');
                                    } else if (jqXHR.status == 500) {
                                        mensajito ('Error al sincronizar!!!','Sin Conexion a internet, por favor verifca tu conexion a internet y vuelve a intentar. [500].');
                                    } else {
                                        mensajito ('Error interno!!!','Comuniquese con el analista en sede');
                                    }

                              }
                        });                    
        });

        
        $("#actualizar").click(function ()
        {
                        $.ajax({
                          url: "fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),
                                 vidintegrante : $('#idintegrante').val(),
                                 vvalorppc4p6: $('#valorppc4p6').val()},       
                          dataType: "html",
                          success : function(obj){                      
                          botonguardar();
                          saltoppc4p6();
                          },
                          error: function (jqXHR, ajaxOptions, thrownError) {terminasinco();
                                    if (jqXHR.status === 0) {
                                        mensajito ('Error al sincronizar!!!','Sin Conexion a internet, por favor verifca tu conexion a internet y vuelve a intentar. [0]');
                                    } else if (jqXHR.status == 404) {
                                        mensajito ('Error al sincronizar!!!','Sin Conexion a internet, por favor verifca tu conexion a internet y vuelve a intentar. [404]');
                                    } else if (jqXHR.status == 500) {
                                        mensajito ('Error al sincronizar!!!','Sin Conexion a internet, por favor verifca tu conexion a internet y vuelve a intentar. [500].');
                                    } else {
                                        mensajito ('Error interno!!!','Comuniquese con el analista en sede');
                                    }

                              }
                        });                    
        });
        

        $("#siguiente").click(function ()
        {
         botonsiguiente();
         if ($('#valorppc4p6').val()=== '2')
         {
         location.href = "../c_ppc4p7/fc_ppc4p7?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
         }
         else
         {
              location.href = "../c_ppc4p6a/fc_ppc4p6a?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";   
         }

        });
              
        $("#anterior").click(function ()
        {
         botonanterior();
          location.href = "../c_ppc4p5/fc_ppc4p5?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";   
        //location.href = "../c_capitulosintegrantes/fc_capitulosintegrantes?idintegrante=" + $('#idintegrante').val()+ "&idintegrante="+"&idintegrante=0";                    
        });

//para cargar variables capitulo, pregunta,encuestador,vivienda,barra
cargardatosgenerales('<?php echo($arraydatosgenerales['ecapitulo']); ?>','Pregunta 6 de 13','<?php echo($arraydatosgenerales['enomcoges']); ?>','<?php echo($arraydatosgenerales['enombreintegrante']." "." - "." "."Sexo:"." ".$arraydatosgenerales['esexointegrante']."   "."  -  "."   "."Edad:"."   ".$arraydatosgenerales['eedadintegrante']); ?>','35');
//control del boton ayuda
botonayuda();

});



function saltoppc4p6()
{
    
    if ($('#valorppc4p6').val()=== '2')
    {
         $.ajax({
                          url: "../c_ppc4p6a/fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),vidintegrante : $('#idintegrante').val(),
                                  vppc4p6a1 : '98',          
                                  vppc4p6a2 : '98',
                                  vppc4p6a3 : '98',
                                  vppc4p6a4 : '98',
                                  vppc4p6a5 : '98'},    
                          dataType: "html",
                          success : function(obj)
                          {
                         //location.href = "../c_c9p/fc_c8p7?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
                          }
                 });            
   
    }
    else
    {
        $.ajax({
                          url: "../c_ppc4p6a/fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),vidintegrante : $('#idintegrante').val(),
                                  vppc4p6a1 : '',          
                                  vppc4p6a2 : '',
                                  vppc4p6a3 : '',
                                  vppc4p6a4 : '',
                                  vppc4p6a5 : ''},    
                          dataType: "html",
                          success : function(obj)
                          {
                         //location.href = "../c_c9p/fc_c8p7?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
                          }
                 });
    }
    
}




</script>
</html>