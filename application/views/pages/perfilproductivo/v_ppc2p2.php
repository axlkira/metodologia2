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
        <input type="text" class="form-control input-sm" id="ultimogrado" name="ultimogrado"  style="display:none"   placeholder="" value="<?php echo($carrayrespuestas['eultimogrado']); ?>">
        <input type="text" class="form-control input-sm" id="ultimonivel" name="ultimonivel" style="display:none"     placeholder="" value="<?php echo($carrayrespuestas['eppc1p3n2']); ?>">
        <!--fin para imprimir el idintegrante y llevarlo-->
        
<hr>
        <form class="form-group" name="formulario" id="formulario">

           <div class="row">
            <div id="ppc2p2div" name="ppc2p2div" <?php if($carrayrespuestas['eppc2p2']==''){echo('class="form-group col-md-12 form-group-sm has-error"');}else{echo('class="form-group col-md-12 form-group-sm"');}?>>   
                <label class="control-label">2. NIVEL DE FORMACIÓN PARA EL EMPLEO/ EDUCACIÓN SUPERIOR QUE ESTÉ INTERESADO EN REALIZAR:
                    <button type="button" id="vayuda" name="vayuda" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModal">
                        <span class="glyphicon glyphicon-question-sign" aria-hidden="true"></span> Ayuda
                    </button>
                </label>
                
                

                <div class="radio" id="op1">
                    <label><!--en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="ppc2p2" id="ppc2p2" onclick="colocaropcion('ppc2p2o1','valorppc2p2','ppc2p2div');" value="ppc2p2o1" <?php if($carrayrespuestas['eppc2p2']=='ppc2p2o1'){echo('checked');}?>>
                        A. Curso/Taller/seminario
                    </label>
                </div>

             
               

                <div class="radio" id="op2">
                    <label>
                        <input type="radio" name="ppc2p2"  id="ppc2p2" onclick="colocaropcion('ppc2p2o2','valorppc2p2','ppc2p2div');" value="ppc2p2o2" <?php if($carrayrespuestas['eppc2p2']=='ppc2p2o2'){echo('checked');}?>>
                        B.Técnica
                    </label>             
                </div> 

                
                

                 <div class="radio" id="op3">
                    <label>
                        <input type="radio" name="ppc2p2" id="ppc2p2" onclick="colocaropcion('ppc2p2o3','valorppc2p2','ppc2p2div');" value="ppc2p2o3" <?php if($carrayrespuestas['eppc2p2']=='ppc2p2o3'){echo('checked');}?>>
                        C.Tecnología
                    </label>             
                </div> 

                

                <div class="radio" id="op4">
                    <label>
                        <input type="radio" name="ppc2p2" id="ppc2p2" onclick="colocaropcion('ppc2p2o4','valorppc2p2','ppc2p2div');" value="ppc2p2o4" <?php if($carrayrespuestas['eppc2p2']=='ppc2p2o4'){echo('checked');}?>>
                        D.Pregrado
                    </label>             
                </div> 

                
                                
                 
               
                
                <input type="text" class="form-control" id="valorppc2p2" name="valorppc2p2" style="display:none"  placeholder="Text input" value="<?php echo($carrayrespuestas['eppc2p2']); ?>">
            </div>
            </div> 
            
            
                 
                 <!--inicio radio una sola seleccion-->
            
<!--            
            <div class="row">
            <div id="ppc2p2div" name="ppc2p2div" <?php if($carrayrespuestas['eppc2p2']==''){echo('class="form-group col-md-12 form-group-sm has-error"');}else{echo('class="form-group col-md-12 form-group-sm"');}?>>   
                <label class="control-label">7. Parentesco con la persona jefe del Hogar
                    <button type="button" id="vayuda" name="vayuda" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModal">
                        <span class="glyphicon glyphicon-question-sign" aria-hidden="true"></span> Ayuda
                    </button>
                </label>
                <div class="radio">
                    <label>en este caso se manda a la fincion javascript el valor del campo
                        <input type="radio" name="ppc2p2" id="ppc2p2" onclick="colocaropcion('1','valorppc2p2','ppc2p2div');" value="1" <?php if($carrayrespuestas['eppc2p2']=='1'){echo('checked');}?>>
                        PRIMERA CLASE
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="ppc2p2" id="ppc2p2" onclick="colocaropcion('2','valorppc2p2','ppc2p2div');" value="2" <?php if($carrayrespuestas['eppc2p2']=='2'){echo('checked');}?>>
                        SEGUNDA CLASE
                    </label>             
                </div> 
                
                        
                <input type="text" class="form-control" id="valorppc2p2" name="valorppc2p2" style="display:none" placeholder="Text input" value="<?php echo($carrayrespuestas['eppc2p2']); ?>">
            </div>
            </div> -->
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
            <?php if($carrayrespuestas['eppc2p2']=="")
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
                                 vvalorppc2p2: $('#valorppc2p2').val()},    
                          dataType: "html",
                          success : function(obj){                      
                          botonguardar();
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
                                 vvalorppc2p2: $('#valorppc2p2').val()},       
                          dataType: "html",
                          success : function(obj){                      
                          botonguardar();
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
         location.href = "../c_ppcapitulosintegrante/fc_ppcapitulosintegrante?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    

        });
              
        $("#anterior").click(function ()
        {
         botonanterior();
          location.href = "../c_ppc2p1/fc_ppc2p1?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";   
        //location.href = "../c_capitulosintegrantes/fc_capitulosintegrantes?idintegrante=" + $('#idintegrante').val()+ "&idintegrante="+"&idintegrante=0";                    
        });
        
        
        
if ($('#ultimonivel').val() == 'ppc1p3n2o1' || $('#ultimonivel').val() == 'ppc1p3n2o2' )
{
   
   $('#op2').hide();
   $('#op3').hide();
   $('#op4').hide();
}


else if ($('#ultimogrado').val() < 9)
{
   
   $('#op2').hide();
   $('#op3').hide();
   $('#op4').hide();
}
else if ($('#ultimogrado').val() >= 9 && $('#ultimogrado').val()<= 10  )
{
    $('#op3').hide();
    $('#op4').hide();
    
}



//   
////    $("ppc2p2").disabled = true;
//$('#radio1').hide(1000)        

//para cargar variables capitulo, pregunta,encuestador,vivienda,barra
cargardatosgenerales('<?php echo($arraydatosgenerales['ecapitulo']); ?>','Pregunta 2 de 2','<?php echo($arraydatosgenerales['enomcoges']); ?>','<?php echo($arraydatosgenerales['enombreintegrante']." "." - "." "."Sexo:"." ".$arraydatosgenerales['esexointegrante']."   "."  -  "."   "."Edad:"."   ".$arraydatosgenerales['eedadintegrante']); ?>','9.09');
//control del boton ayuda
botonayuda();
});

//
//if ($('#ultimogrado').val() < '9' )
//{
//   
////    $("ppc2p2").disabled = true;
//$('#radio1').hide(1000)
//    
//}







</script>
</html>