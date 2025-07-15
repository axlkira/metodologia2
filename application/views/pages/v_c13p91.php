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
<!--        <input type="text" class="form-control input-sm" id="idintegrante" name="idintegrante"  style="display:none"   placeholder="idintegrante" value="<?php echo($idintegrante); ?>">
        <input type="text" class="form-control input-sm" id="edad" name="edad"  style="display:none"   placeholder="" value="<?php echo($arraydatosgenerales['eedadintegrante']); ?>">
       <input type="text" class="form-control input-sm" id="sexo" name="sexo"  style="display:none"   placeholder="" value="<?php echo($arraydatosgenerales['esexointegrante']); ?>">-->
        <!--fin para imprimir el idintegrante y llevarlo-->
<hr>
        <form class="form-group" name="formulario" id="formulario">

            <!--inicio radio una sola seleccion-->
            <div class="row">
            <div id="c13p91o1div" name="c13p91o1div" <?php if($arrayrespuestas['ec13p91o1']==''){echo('class="form-group col-md-12 form-group-sm has-error"');}else{echo('class="form-group col-md-12 form-group-sm"');}?>>   
            <label class="control-label">9.1 ¿POR QUÉ NO ASISTIÓ A NINGÚN PROGRAMA EN ATENCIÓN Y PREVENCIÓN?
                    <button type="button" id="vayuda" name="vayuda" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModal">
                        <span class="glyphicon glyphicon-question-sign" aria-hidden="true"></span> Ayuda
                    </button>
            </label><br><br>
            <div class="radio">
                <div class="col-md-3">
                    <label><!--en este caso se manda a la fincion javascript el valor del campo-->
                    a. Porque no los necesitaba
                    </label>
                </div>
                <div class="col-md-2">
                    <label><!--en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="c13p91o1" id="c13p91o1" onclick="colocaropcion('1','valorc13p91o1','c13p91o1div');" value="1" <?php if($arrayrespuestas['ec13p91o1']=='1'){echo('checked');}?>>
                        Si 
                    </label>
                </div>
                <div class="col-md-2">
                    <label>
                        <input type="radio" name="c13p91o1" id="c13p91o1" onclick="colocaropcion('2','valorc13p91o1','c13p91o1div');" value="2" <?php if($arrayrespuestas['ec13p91o1']=='2'){echo('checked');}?>>
                        No
                    </label>             
                </div>
                <input type="text" class="form-control" id="valorc13p91o1" name="valorc13p91o1"  placeholder="Text input" style="display: none" value="<?php echo($arrayrespuestas['ec13p91o1']); ?>">
                </div>
            </div>
            </div>
            <div class="row">
            <div id="c13p91o2div" name="c13p91o2div" <?php if($arrayrespuestas['ec13p91o2']==''){echo('class="form-group col-md-12 form-group-sm has-error"');}else{echo('class="form-group col-md-12 form-group-sm"');}?>>   
            <div class="radio">
                <div class="col-md-3">
                    <label><!--en este caso se manda a la fincion javascript el valor del campo-->
                    b. Porque no los conocia
                    </label>
                </div>
                <div class="col-md-2">
                    <label><!--en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="c13p91o2" id="c13p91o2" onclick="colocaropcion('1','valorc13p91o2','c13p91o2div');" value="1" <?php if($arrayrespuestas['ec13p91o2']=='1'){echo('checked');}?>>
                        Si 
                    </label>
                </div>
                <div class="col-md-2">
                    <label>
                        <input type="radio" name="c13p91o2" id="c13p91o2" onclick="colocaropcion('2','valorc13p91o2','c13p91o2div');" value="2" <?php if($arrayrespuestas['ec13p91o2']=='2'){echo('checked');}?>>
                        No
                    </label>             
                </div>
                <input type="text" class="form-control" id="valorc13p91o2" name="valorc13p91o2"  placeholder="Text input" style="display: none" value="<?php echo($arrayrespuestas['ec13p91o2']); ?>">
                </div>
                </div>
                </div>
            <div class="row">
            <div id="c13p91o3div" name="c13p91o3div" <?php if($arrayrespuestas['ec13p91o3']==''){echo('class="form-group col-md-12 form-group-sm has-error"');}else{echo('class="form-group col-md-12 form-group-sm"');}?>>   
            <div class="radio">
                <div class="col-md-3">
                    <label><!--en este caso se manda a la fincion javascript el valor del campo-->
                    c. El médico no se los ordenó
                    </label>
                </div>
                <div class="col-md-2">
                    <label><!--en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="c13p91o3" id="c13p91o3" onclick="colocaropcion('1','valorc13p91o3','c13p91o3div');" value="1" <?php if($arrayrespuestas['ec13p91o3']=='1'){echo('checked');}?>>
                        Si 
                    </label>
                </div>
                <div class="col-md-2">
                    <label>
                        <input type="radio" name="c13p91o3" id="c13p91o3" onclick="colocaropcion('2','valorc13p91o3','c13p91o3div');" value="2" <?php if($arrayrespuestas['ec13p91o3']=='2'){echo('checked');}?>>
                        No
                    </label>             
                </div>
                <input type="text" class="form-control" id="valorc13p91o3" name="valorc13p91o3"  placeholder="Text input" style="display: none" value="<?php echo($arrayrespuestas['ec13p91o3']); ?>">
                </div>
                </div>
                </div>
            <div class="row">
            <div id="c13p91o4div" name="c13p91o4div" <?php if($arrayrespuestas['ec13p91o4']==''){echo('class="form-group col-md-12 form-group-sm has-error"');}else{echo('class="form-group col-md-12 form-group-sm"');}?>>   
            <div class="radio">
                <div class="col-md-3">
                    <label><!--en este caso se manda a la fincion javascript el valor del campo-->
                    d.Son muy costosos
                    </label>
                </div>
                <div class="col-md-2">
                    <label><!--en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="c13p91o4" id="c13p91o4" onclick="colocaropcion('1','valorc13p91o4','c13p91o4div');" value="1" <?php if($arrayrespuestas['ec13p91o4']=='1'){echo('checked');}?>>
                        Si 
                    </label>
                </div>
                <div class="col-md-2">
                    <label>
                        <input type="radio" name="c13p91o4" id="c13p91o4" onclick="colocaropcion('2','valorc13p91o4','c13p91o4div');" value="2" <?php if($arrayrespuestas['ec13p91o4']=='2'){echo('checked');}?>>
                        No
                    </label>             
                </div>
                <input type="text" class="form-control" id="valorc13p91o4" name="valorc13p91o4"  placeholder="Text input" style="display: none" value="<?php echo($arrayrespuestas['ec13p91o4']); ?>">
                </div>             
                </div> 
                 </div>
                
               
                <div class="row">
                <div id="c13p91o5div" name="c13p91o5div" <?php if($arrayrespuestas['ec13p91o5']==''){echo('class="form-group col-md-12 form-group-sm has-error"');}else{echo('class="form-group col-md-12 form-group-sm"');}?>>   
                <div class="radio">
                <div class="col-md-3">
                    <label><!--en este caso se manda a la fincion javascript el valor del campo-->
                    e. Otro
                    </label>
                </div>
                <div class="col-md-2">
                    <label><!--en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="c13p91o5" id="c13p91o5" onclick="colocaropcion('1','valorc13p91o5','c13p91o5div');" value="1" <?php if($arrayrespuestas['ec13p91o5']=='1'){echo('checked');}?>>
                        Si 
                    </label>
                </div>
                <div class="col-md-2">
                    <label>
                        <input type="radio" name="c13p91o5" id="c13p91o5" onclick="colocaropcion('2','valorc13p91o5','c13p91o5div');" value="2" <?php if($arrayrespuestas['ec13p91o5']=='2'){echo('checked');}?>>
                        No
                    </label>             
                </div>
                <input type="text" class="form-control" id="valorc13p91o5" name="valorc13p91o5"  placeholder="Text input" style="display: none" value="<?php echo($arrayrespuestas['ec13p91o5']); ?>">
                </div>  
                <br><br>
                <div class="" name="c13p91cualdiv" id="c13p91cualdiv">
                   <label> Cual? </label>  
                    <input type="text" class="form-control" id="valorc13p91cual" name="valorc13p91cual" style="" onKeyPress="return soloLetras(event)" onchange="validarbolitasytexto('c13p91cualdiv','valorc13p91cual')"  placeholder="Cual" value="<?php echo($arrayrespuestas['ec13p91cual']); ?>">        
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
            <?php if($arrayrespuestas['ec13p91o1']=="")
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
                          vvalorc13p91o1 : $('#valorc13p91o1').val(),
                          vvalorc13p91o2 : $('#valorc13p91o2').val(),
                          vvalorc13p91o3 : $('#valorc13p91o3').val(),
                          vvalorc13p91o4 : $('#valorc13p91o4').val(),
                          vvalorc13p91o5 : $('#valorc13p91o5').val(),                         
                          vvalorc13p91cual : $('#valorc13p91cual').val()},    
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
                          vvalorc13p91o1 : $('#valorc13p91o1').val(),
                          vvalorc13p91o2 : $('#valorc13p91o2').val(),
                          vvalorc13p91o3 : $('#valorc13p91o3').val(),
                          vvalorc13p91o4 : $('#valorc13p91o4').val(),
                          vvalorc13p91o5 : $('#valorc13p91o5').val(),                          
                          vvalorc13p91cual : $('#valorc13p91cual').val()},    
                          dataType: "html",
                          success : function(obj){                      
                          botonguardar();
                          }
                        });                    
        });
        

        $("#siguiente").click(function ()
        {
         botonsiguiente();
         location.href = "../c_c13p10/fc_c13p10?folio=" + $('#folio').val();                    

        });
              
        $("#anterior").click(function ()
        {
         botonanterior();
         location.href = "../c_c13p9/fc_c13p9?folio=" + $('#folio').val();   
        //location.href = "../c_capitulosintegrantes/fc_capitulosintegrantes?idintegrante=" + $('#idintegrante').val()+ "&idintegrante="+"&idintegrante=0";                    
        });

//para cargar variables capitulo, pregunta,encuestador,vivienda,barra



cargardatosgenerales('<?php echo($arraydatosgenerales['ecapitulo']); ?>','Pregunta 9.1 de 22','<?php echo($arraydatosgenerales['enomcoges']); ?>','<?php echo($arraydatosgenerales['etitular']); ?>','33');
//control del boton ayuda
botonayuda();

});

</script>
</html>