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
            <div id="c13p13o1div" name="c13p13o1div" <?php if($arrayrespuestas['ec13p13o1']==''){echo('class="form-group col-md-12 form-group-sm has-error"');}else{echo('class="form-group col-md-12 form-group-sm"');}?>>   
            <label class="control-label">13. PARA MANTENERSE ECONÓMICAMENTE SU HOGAR RECIBE DINERO DE:    
                <button type="button" id="vayuda" name="vayuda" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModal">
                        <span class="glyphicon glyphicon-question-sign" aria-hidden="true"></span> Ayuda
                    </button>
            </label><br><br>
            <div class="radio">
                <div class="col-md-3">
                    <label><!--en este caso se manda a la fincion javascript el valor del campo-->
                    a. El salario u honorarios que reciben por su trabajo
                    </label>
                </div>
                <div class="col-md-2">
                    <label><!--en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="c13p13o1" id="c13p13o1" onclick="colocaropcion('1','valorc13p13o1','c13p13o1div');" value="1" <?php if($arrayrespuestas['ec13p13o1']=='1'){echo('checked');}?>>
                        Si 
                    </label>
                </div>
                <div class="col-md-2">
                    <label>
                        <input type="radio" name="c13p13o1" id="c13p13o1" onclick="colocaropcion('2','valorc13p13o1','c13p13o1div');" value="2" <?php if($arrayrespuestas['ec13p13o1']=='2'){echo('checked');}?>>
                        No
                    </label>             
                </div>
                <input type="text" class="form-control" id="valorc13p13o1" name="valorc13p13o1"  placeholder="Text input" style="display: none" value="<?php echo($arrayrespuestas['ec13p13o1']); ?>">
                </div>
            </div>
            </div>
            <div class="row">
            <div id="c13p13o2div" name="c13p13o2div" <?php if($arrayrespuestas['ec13p13o2']==''){echo('class="form-group col-md-12 form-group-sm has-error"');}else{echo('class="form-group col-md-12 form-group-sm"');}?>>   
            <div class="radio">
                <div class="col-md-3">
                    <label><!--en este caso se manda a la fincion javascript el valor del campo-->
                    b. Un negocio propio
                    </label>
                </div>
                <div class="col-md-2">
                    <label><!--en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="c13p13o2" id="c13p13o2" onclick="colocaropcion('1','valorc13p13o2','c13p13o2div');" value="1" <?php if($arrayrespuestas['ec13p13o2']=='1'){echo('checked');}?>>
                        Si 
                    </label>
                </div>
                <div class="col-md-2">
                    <label>
                        <input type="radio" name="c13p13o2" id="c13p13o2" onclick="colocaropcion('2','valorc13p13o2','c13p13o2div');" value="2" <?php if($arrayrespuestas['ec13p13o2']=='2'){echo('checked');}?>>
                        No
                    </label>             
                </div>
                <input type="text" class="form-control" id="valorc13p13o2" name="valorc13p13o2"  placeholder="Text input" style="display: none" value="<?php echo($arrayrespuestas['ec13p13o2']); ?>">
                </div>
                </div>
                </div>
            <div class="row">
            <div id="c13p13o3div" name="c13p13o3div" <?php if($arrayrespuestas['ec13p13o3']==''){echo('class="form-group col-md-12 form-group-sm has-error"');}else{echo('class="form-group col-md-12 form-group-sm"');}?>>   
            <div class="radio">
                <div class="col-md-3">
                    <label><!--en este caso se manda a la fincion javascript el valor del campo-->
                    c. Pension
                    </label>
                </div>
                <div class="col-md-2">
                    <label><!--en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="c13p13o3" id="c13p13o3" onclick="colocaropcion('1','valorc13p13o3','c13p13o3div');" value="1" <?php if($arrayrespuestas['ec13p13o3']=='1'){echo('checked');}?>>
                        Si 
                    </label>
                </div>
                <div class="col-md-2">
                    <label>
                        <input type="radio" name="c13p13o3" id="c13p13o3" onclick="colocaropcion('2','valorc13p13o3','c13p13o3div');" value="2" <?php if($arrayrespuestas['ec13p13o3']=='2'){echo('checked');}?>>
                        No
                    </label>             
                </div>
                <input type="text" class="form-control" id="valorc13p13o3" name="valorc13p13o3"  placeholder="Text input" style="display: none" value="<?php echo($arrayrespuestas['ec13p13o3']); ?>">
                </div>
                </div>
                </div>
            <div class="row">
            <div id="c13p13o4div" name="c13p13o4div" <?php if($arrayrespuestas['ec13p13o4']==''){echo('class="form-group col-md-12 form-group-sm has-error"');}else{echo('class="form-group col-md-12 form-group-sm"');}?>>   
            <div class="radio">
                <div class="col-md-3">
                    <label><!--en este caso se manda a la fincion javascript el valor del campo-->
                    d.  Su conyugue o compañero(a)permanente
                    </label>
                </div>
                <div class="col-md-2">
                    <label><!--en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="c13p13o4" id="c13p13o4" onclick="colocaropcion('1','valorc13p13o4','c13p13o4div');" value="1" <?php if($arrayrespuestas['ec13p13o4']=='1'){echo('checked');}?>>
                        Si 
                    </label>
                </div>
                <div class="col-md-2">
                    <label>
                        <input type="radio" name="c13p13o4" id="c13p13o4" onclick="colocaropcion('2','valorc13p13o4','c13p13o4div');" value="2" <?php if($arrayrespuestas['ec13p13o4']=='2'){echo('checked');}?>>
                        No
                    </label>             
                </div>
                <input type="text" class="form-control" id="valorc13p13o4" name="valorc13p13o4"  placeholder="Text input" style="display: none" value="<?php echo($arrayrespuestas['ec13p13o4']); ?>">
                </div>             
                </div> 
                 </div>
                
               
                <div class="row">
                <div id="c13p13o5div" name="c13p13o5div" <?php if($arrayrespuestas['ec13p13o5']==''){echo('class="form-group col-md-12 form-group-sm has-error"');}else{echo('class="form-group col-md-12 form-group-sm"');}?>>   
                <div class="radio">
                <div class="col-md-3">
                    <label><!--en este caso se manda a la fincion javascript el valor del campo-->
                    e. Recibe subsidios del Estado
                    </label>
                </div>
                <div class="col-md-2">
                    <label><!--en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="c13p13o5" id="c13p13o5" onclick="colocaropcion('1','valorc13p13o5','c13p13o5div');" value="1" <?php if($arrayrespuestas['ec13p13o5']=='1'){echo('checked');}?>>
                        Si 
                    </label>
                </div>
                <div class="col-md-2">
                    <label>
                        <input type="radio" name="c13p13o5" id="c13p13o5" onclick="colocaropcion('2','valorc13p13o5','c13p13o5div');" value="2" <?php if($arrayrespuestas['ec13p13o5']=='2'){echo('checked');}?>>
                        No
                    </label>             
                </div>
                <input type="text" class="form-control" id="valorc13p13o5" name="valorc13p13o5"  placeholder="Text input" style="display: none" value="<?php echo($arrayrespuestas['ec13p13o5']); ?>">
                </div>                
                </div>  
                </div> 
            
                <div class="row">
                <div id="c13p13o6div" name="c13p13o6div" <?php if($arrayrespuestas['ec13p13o6']==''){echo('class="form-group col-md-12 form-group-sm has-error"');}else{echo('class="form-group col-md-12 form-group-sm"');}?>>   
                <div class="radio">
                <div class="col-md-3">
                    <label><!--en liaeste caso se manda a la fincion javascript el valor del campo-->
                    f. Otros familiares
                    </label>
                </div>
                <div class="col-md-2">
                    <label><!--en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="c13p13o6" id="c13p13o6" onclick="colocaropcion('1','valorc13p13o6','c13p13o6div');" value="1" <?php if($arrayrespuestas['ec13p13o6']=='1'){echo('checked');}?>>
                        Si 
                    </label>
                </div>
                <div class="col-md-2">
                    <label>
                        <input type="radio" name="c13p13o6" id="c13p13o6" onclick="colocaropcion('2','valorc13p13o6','c13p13o6div');" value="2" <?php if($arrayrespuestas['ec13p13o6']=='2'){echo('checked');}?>>
                        No
                    </label>             
                </div>
                <input type="text" class="form-control" id="valorc13p13o6" name="valorc13p13o6"  placeholder="Text input" style="display: none" value="<?php echo($arrayrespuestas['ec13p13o6']); ?>">
                </div>                
                </div>  
                </div>
            
                <div class="row">
                <div id="c13p13o7div" name="c13p13o7div" <?php if($arrayrespuestas['ec13p13o7']==''){echo('class="form-group col-md-12 form-group-sm has-error"');}else{echo('class="form-group col-md-12 form-group-sm"');}?>>   
                <div class="radio">
                <div class="col-md-3">
                    <label><!--en este caso se manda a la fincion javascript el valor del campo-->
                    g. Arriendo
                    </label>
                </div>
                <div class="col-md-2">
                    <label><!--en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="c13p13o7" id="c13p13o7" onclick="colocaropcion('1','valorc13p13o7','c13p13o7div');" value="1" <?php if($arrayrespuestas['ec13p13o7']=='1'){echo('checked');}?>>
                        Si 
                    </label>
                </div>
                <div class="col-md-2">
                    <label>
                        <input type="radio" name="c13p13o7" id="c13p13o7" onclick="colocaropcion('2','valorc13p13o7','c13p13o7div');" value="2" <?php if($arrayrespuestas['ec13p13o7']=='2'){echo('checked');}?>>
                        No
                    </label>             
                </div>
                <input type="text" class="form-control" id="valorc13p13o7" name="valorc13p13o7"  placeholder="Text input" style="display: none" value="<?php echo($arrayrespuestas['ec13p13o7']); ?>">
                </div>                
                </div>  
                </div>
            
               <div class="row">
                <div id="c13p13o8div" name="c13p13o8div" <?php if($arrayrespuestas['ec13p13o8']==''){echo('class="form-group col-md-12 form-group-sm has-error"');}else{echo('class="form-group col-md-12 form-group-sm"');}?>>   
                <div class="radio">
                <div class="col-md-3">
                    <label><!--en este caso se manda a la fincion javascript el valor del campo-->
                    h. Venta de propiedades
                    </label>
                </div>
                <div class="col-md-2">
                    <label><!--en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="c13p13o8" id="c13p13o8" onclick="colocaropcion('1','valorc13p13o8','c13p13o8div');" value="1" <?php if($arrayrespuestas['ec13p13o8']=='1'){echo('checked');}?>>
                        Si 
                    </label>
                </div>
                <div class="col-md-2">
                    <label>
                        <input type="radio" name="c13p13o8" id="c13p13o8" onclick="colocaropcion('2','valorc13p13o8','c13p13o8div');" value="2" <?php if($arrayrespuestas['ec13p13o8']=='2'){echo('checked');}?>>
                        No
                    </label>             
                </div>
                <input type="text" class="form-control" id="valorc13p13o8" name="valorc13p13o8"  placeholder="Text input" style="display: none" value="<?php echo($arrayrespuestas['ec13p13o8']); ?>">
                </div>
                </div>  
                </div>
            
            <div class="row">
                <div id="c13p13o9div" name="c13p13o9div" <?php if($arrayrespuestas['ec13p13o9']==''){echo('class="form-group col-md-12 form-group-sm has-error"');}else{echo('class="form-group col-md-12 form-group-sm"');}?>>   
                <div class="radio">
                <div class="col-md-3">
                    <label><!--en este caso se manda a la fincion javascript el valor del campo-->
                    i. Otros
                    </label>
                </div>
                <div class="col-md-2">
                    <label><!--en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="c13p13o9" id="c13p13o9" onclick="colocaropcion('1','valorc13p13o9','c13p13o9div');" value="1" <?php if($arrayrespuestas['ec13p13o9']=='1'){echo('checked');}?>>
                        Si 
                    </label>
                </div>
                <div class="col-md-2">
                    <label>
                        <input type="radio" name="c13p13o9" id="c13p13o9" onclick="colocaropcion('2','valorc13p13o9','c13p13o9div');" value="2" <?php if($arrayrespuestas['ec13p13o9']=='2'){echo('checked');}?>>
                        No
                    </label>             
                </div>
                <input type="text" class="form-control" id="valorc13p13o9" name="valorc13p13o9"  placeholder="Text input" style="display: none" value="<?php echo($arrayrespuestas['ec13p13o9']); ?>">
                </div> <br><br>
                <div class="" name="c13p13cualdiv" id="c13p13cualdiv">
                   <label> Cual? </label>  
                    <input type="text" class="form-control" id="valorc13p13cual" name="valorc13p13cual" style="" onKeyPress="return soloLetras(event)" onchange="validarbolitasytexto('c13p13cualdiv','valorc13p13cual')"  placeholder="Cual" value="<?php echo($arrayrespuestas['ec13p13cual']); ?>">        
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
            <?php if($arrayrespuestas['ec13p13o1']=="")
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
                          vvalorc13p13o1 : $('#valorc13p13o1').val(),
                          vvalorc13p13o2 : $('#valorc13p13o2').val(),
                          vvalorc13p13o3 : $('#valorc13p13o3').val(),
                          vvalorc13p13o4 : $('#valorc13p13o4').val(),
                          vvalorc13p13o5 : $('#valorc13p13o5').val(),
                          vvalorc13p13o6 : $('#valorc13p13o6').val(),
                          vvalorc13p13o7 : $('#valorc13p13o7').val(),
                          vvalorc13p13o8 : $('#valorc13p13o8').val(),
                          vvalorc13p13o9 : $('#valorc13p13o9').val(),
                          vvalorc13p13cual : $('#valorc13p13cual').val()},    
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
                          vvalorc13p13o1 : $('#valorc13p13o1').val(),
                          vvalorc13p13o2 : $('#valorc13p13o2').val(),
                          vvalorc13p13o3 : $('#valorc13p13o3').val(),
                          vvalorc13p13o4 : $('#valorc13p13o4').val(),
                          vvalorc13p13o5 : $('#valorc13p13o5').val(),
                          vvalorc13p13o6 : $('#valorc13p13o6').val(),
                          vvalorc13p13o7 : $('#valorc13p13o7').val(),
                          vvalorc13p13o8 : $('#valorc13p13o8').val(),
                          vvalorc13p13o9 : $('#valorc13p13o9').val(),
                          vvalorc13p13cual : $('#valorc13p13cual').val()},    
                          dataType: "html",
                          success : function(obj){                      
                          botonguardar();
                          }
                        });                    
        });
        

        $("#siguiente").click(function ()
        {
         botonsiguiente();
         location.href = "../c_c13p131/fc_c13p131?folio=" + $('#folio').val();                    

        });
              
        $("#anterior").click(function ()
        {
         botonanterior();
         location.href = "../c_c13p122/fc_c13p122?folio=" + $('#folio').val();   
        //location.href = "../c_capitulosintegrantes/fc_capitulosintegrantes?idintegrante=" + $('#idintegrante').val()+ "&idintegrante="+"&idintegrante=0";                    
        });

//para cargar variables capitulo, pregunta,encuestador,vivienda,barra



cargardatosgenerales('<?php echo($arraydatosgenerales['ecapitulo']); ?>','Pregunta 13 de 22','<?php echo($arraydatosgenerales['enomcoges']); ?>','<?php echo($arraydatosgenerales['etitular']); ?>','43');
//control del boton ayuda
botonayuda();

});

</script>
</html>