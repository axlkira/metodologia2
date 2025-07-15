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
        <input type="text" class="form-control input-sm" id="c13p2" name="c13p2" style="display: none" placeholder=" " value="<?php echo($arrayrespuestas['ec13p2']); ?>">
<!--        <input type="text" class="form-control input-sm" id="idintegrante" name="idintegrante"  style="display:none"   placeholder="idintegrante" value="<?php echo($idintegrante); ?>">
        <input type="text" class="form-control input-sm" id="edad" name="edad"  style="display:none"   placeholder="" value="<?php echo($arraydatosgenerales['eedadintegrante']); ?>">
       <input type="text" class="form-control input-sm" id="sexo" name="sexo"  style="display:none"   placeholder="" value="<?php echo($arraydatosgenerales['esexointegrante']); ?>">-->
        <!--fin para imprimir el idintegrante y llevarlo-->
<hr>
        <form class="form-group" name="formulario" id="formulario">

            <!--inicio radio una sola seleccion-->
            <div class="row">
            <div id="c13p4o1div" name="c13p4o1div" <?php if($arrayrespuestas['ec13p4o1']==''){echo('class="form-group col-md-12 form-group-sm has-error"');}else{echo('class="form-group col-md-12 form-group-sm"');}?>>   
            <label class="control-label">4. EN SU HOGAR CUENTAN CON SERVICIOS PÚBLICOS DOMICILIARIOS CON CONEXIÓN A: 
                    <button type="button" id="vayuda" name="vayuda" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModal">
                        <span class="glyphicon glyphicon-question-sign" aria-hidden="true"></span> Ayuda
                    </button>
            </label><br><br>
            <div class="radio">
                <div class="col-md-3">
                    <label><!--en este caso se manda a la fincion javascript el valor del campo-->
                    a. Alcantarillado
                    </label>
                </div>
                <div class="col-md-2">
                    <label><!--en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="c13p4o1" id="c13p4o1" onclick="colocaropcion('1','valorc13p4o1','c13p4o1div');" value="1" <?php if($arrayrespuestas['ec13p4o1']=='1'){echo('checked');}?>>
                        Si 
                    </label>
                </div>
                <div class="col-md-2">
                    <label>
                        <input type="radio" name="c13p4o1" id="c13p4o1" onclick="colocaropcion('2','valorc13p4o1','c13p4o1div');" value="2" <?php if($arrayrespuestas['ec13p4o1']=='2'){echo('checked');}?>>
                        No
                    </label>             
                </div>
                <input type="text" class="form-control" id="valorc13p4o1" name="valorc13p4o1"  placeholder="Text input" style="display: none" value="<?php echo($arrayrespuestas['ec13p4o1']); ?>">
                </div>
            </div>
            </div>
            <div class="row">
            <div id="c13p4o2div" name="c13p4o2div" <?php if($arrayrespuestas['ec13p4o2']==''){echo('class="form-group col-md-12 form-group-sm has-error"');}else{echo('class="form-group col-md-12 form-group-sm"');}?>>   
            <div class="radio">
                <div class="col-md-3">
                    <label><!--en este caso se manda a la fincion javascript el valor del campo-->
                    b. Energia
                    </label>
                </div>
                <div class="col-md-2">
                    <label><!--en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="c13p4o2" id="c13p4o2" onclick="colocaropcion('1','valorc13p4o2','c13p4o2div');" value="1" <?php if($arrayrespuestas['ec13p4o2']=='1'){echo('checked');}?>>
                        Si 
                    </label>
                </div>
                <div class="col-md-2">
                    <label>
                        <input type="radio" name="c13p4o2" id="c13p4o2" onclick="colocaropcion('2','valorc13p4o2','c13p4o2div');" value="2" <?php if($arrayrespuestas['ec13p4o2']=='2'){echo('checked');}?>>
                        No
                    </label>             
                </div>
                <input type="text" class="form-control" id="valorc13p4o2" name="valorc13p4o2"  placeholder="Text input" style="display: none" value="<?php echo($arrayrespuestas['ec13p4o2']); ?>">
                </div>
                </div>
                </div>
            <div class="row">
            <div id="c13p4o3div" name="c13p4o3div" <?php if($arrayrespuestas['ec13p4o3']==''){echo('class="form-group col-md-12 form-group-sm has-error"');}else{echo('class="form-group col-md-12 form-group-sm"');}?>>   
            <div class="radio">
                <div class="col-md-3">
                    <label><!--en este caso se manda a la fincion javascript el valor del campo-->
                    c. Acueducto
                    </label>
                </div>
                <div class="col-md-2">
                    <label><!--en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="c13p4o3" id="c13p4o3" onclick="colocaropcion('1','valorc13p4o3','c13p4o3div');" value="1" <?php if($arrayrespuestas['ec13p4o3']=='1'){echo('checked');}?>>
                        Si 
                    </label>
                </div>
                <div class="col-md-2">
                    <label>
                        <input type="radio" name="c13p4o3" id="c13p4o3" onclick="colocaropcion('2','valorc13p4o3','c13p4o3div');" value="2" <?php if($arrayrespuestas['ec13p4o3']=='2'){echo('checked');}?>>
                        No
                    </label>             
                </div>
                <input type="text" class="form-control" id="valorc13p4o3" name="valorc13p4o3"  placeholder="Text input" style="display: none" value="<?php echo($arrayrespuestas['ec13p4o3']); ?>">
                </div>
                </div>
                </div>
            <div class="row">
            <div id="c13p4o4div" name="c13p4o4div" <?php if($arrayrespuestas['ec13p4o4']==''){echo('class="form-group col-md-12 form-group-sm has-error"');}else{echo('class="form-group col-md-12 form-group-sm"');}?>>   
            <div class="radio">
                <div class="col-md-3">
                    <label><!--en este caso se manda a la fincion javascript el valor del campo-->
                    d. Telefonia
                    </label>
                </div>
                <div class="col-md-2">
                    <label><!--en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="c13p4o4" id="c13p4o4" onclick="colocaropcion('1','valorc13p4o4','c13p4o4div');" value="1" <?php if($arrayrespuestas['ec13p4o4']=='1'){echo('checked');}?>>
                        Si 
                    </label>
                </div>
                <div class="col-md-2">
                    <label>
                        <input type="radio" name="c13p4o4" id="c13p4o4" onclick="colocaropcion('2','valorc13p4o4','c13p4o4div');" value="2" <?php if($arrayrespuestas['ec13p4o4']=='2'){echo('checked');}?>>
                        No
                    </label>             
                </div>
                <input type="text" class="form-control" id="valorc13p4o4" name="valorc13p4o4"  placeholder="Text input" style="display: none" value="<?php echo($arrayrespuestas['ec13p4o4']); ?>">
                </div>
                </div>
                </div>
            <div class="row">
            <div id="c13p4o5div" name="c13p4o5div" <?php if($arrayrespuestas['ec13p4o5']==''){echo('class="form-group col-md-12 form-group-sm has-error"');}else{echo('class="form-group col-md-12 form-group-sm"');}?>>   
            <div class="radio">
                <div class="col-md-3">
                    <label><!--en este caso se manda a la fincion javascript el valor del campo-->
                    e. Gas
                    </label>
                </div>
                <div class="col-md-2">
                    <label><!--en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="c13p4o5" id="c13p4o5" onclick="colocaropcion('1','valorc13p4o5','c13p4o5div');" value="1" <?php if($arrayrespuestas['ec13p4o5']=='1'){echo('checked');}?>>
                        Si 
                    </label>
                </div>
                <div class="col-md-2">
                    <label>
                        <input type="radio" name="c13p4o5" id="c13p4o5" onclick="colocaropcion('2','valorc13p4o5','c13p4o5div');" value="2" <?php if($arrayrespuestas['ec13p4o5']=='2'){echo('checked');}?>>
                        No
                    </label>             
                </div>
                <input type="text" class="form-control" id="valorc13p4o5" name="valorc13p4o5"  placeholder="Text input" style="display: none" value="<?php echo($arrayrespuestas['ec13p4o5']); ?>">
                </div>
                </div>
                </div>
            <div class="row">
            <div id="c13p4o6div" name="c13p4o6div" <?php if($arrayrespuestas['ec13p4o6']==''){echo('class="form-group col-md-12 form-group-sm has-error"');}else{echo('class="form-group col-md-12 form-group-sm"');}?>>   
            <div class="radio">
                <div class="col-md-3">
                    <label><!--en este caso se manda a la fincion javascript el valor del campo-->
                    f. Internet
                    </label>
                </div>
                <div class="col-md-2">
                    <label><!--en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="c13p4o6" id="c13p4o6" onclick="colocaropcion('1','valorc13p4o6','c13p4o6div');" value="1" <?php if($arrayrespuestas['ec13p4o6']=='1'){echo('checked');}?>>
                        Si 
                    </label>
                </div>
                <div class="col-md-2">
                    <label>
                        <input type="radio" name="c13p4o6" id="c13p4o6" onclick="colocaropcion('2','valorc13p4o6','c13p4o6div');" value="2" <?php if($arrayrespuestas['ec13p4o6']=='2'){echo('checked');}?>>
                        No
                    </label>             
                </div>
                <input type="text" class="form-control" id="valorc13p4o6" name="valorc13p4o6"  placeholder="Text input" style="display: none" value="<?php echo($arrayrespuestas['ec13p4o6']); ?>">
                </div>
                </div>
                </div>
            <div class="row">
            <div id="c13p4o7div" name="c13p4o7div" <?php if($arrayrespuestas['ec13p4o7']==''){echo('class="form-group col-md-12 form-group-sm has-error"');}else{echo('class="form-group col-md-12 form-group-sm"');}?>>   
            <div class="radio">
                <div class="col-md-3">
                    <label><!--en este caso se manda a la fincion javascript el valor del campo-->
                    g. Saneamiento
                    </label>
                </div>
                <div class="col-md-2">
                    <label><!--en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="c13p4o7" id="c13p4o7" onclick="colocaropcion('1','valorc13p4o7','c13p4o7div');" value="1" <?php if($arrayrespuestas['ec13p4o7']=='1'){echo('checked');}?>>
                        Si 
                    </label>
                </div>
                <div class="col-md-2">
                    <label>
                        <input type="radio" name="c13p4o7" id="c13p4o7" onclick="colocaropcion('2','valorc13p4o7','c13p4o7div');" value="2" <?php if($arrayrespuestas['ec13p4o7']=='2'){echo('checked');}?>>
                        No
                    </label>             
                </div>
                <input type="text" class="form-control" id="valorc13p4o7" name="valorc13p4o7"  placeholder="Text input" style="display: none" value="<?php echo($arrayrespuestas['ec13p4o7']); ?>">
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
            <?php if($arrayrespuestas['ec13p4o1']=="")
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
                          vvalorc13p4o1 : $('#valorc13p4o1').val(),
                          vvalorc13p4o2 : $('#valorc13p4o2').val(),
                          vvalorc13p4o3 : $('#valorc13p4o3').val(),
                          vvalorc13p4o4 : $('#valorc13p4o4').val(),
                          vvalorc13p4o5 : $('#valorc13p4o5').val(),
                          vvalorc13p4o6 : $('#valorc13p4o6').val(),
                          vvalorc13p4o7 : $('#valorc13p4o7').val()},    
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
                          vvalorc13p4o1 : $('#valorc13p4o1').val(),
                          vvalorc13p4o2 : $('#valorc13p4o2').val(),
                          vvalorc13p4o3 : $('#valorc13p4o3').val(),
                          vvalorc13p4o4 : $('#valorc13p4o4').val(),
                          vvalorc13p4o5 : $('#valorc13p4o5').val(),
                          vvalorc13p4o6 : $('#valorc13p4o6').val(),
                          vvalorc13p4o7 : $('#valorc13p4o7').val()},    
                          dataType: "html",
                          success : function(obj){                      
                          botonguardar();
                          }
                        });                    
        });
        

        $("#siguiente").click(function ()
        {
         botonsiguiente();
         if($('#valorc13p4o3').val() === '1' )
           {   $.ajax({
                             url: "../c_c13p41/fc_actualizar",
                             type: "GET",
                             data: {vfolio : $('#folio').val(), vvalorc13p41 : '98'},    
                             dataType: "html",
                             success : function(obj){  
                             location.href = "../c_c13p5/fc_c13p5?folio=" + $('#folio').val();                    
                             }
                           }); 
           }
           else
           {    $.ajax({
                             url: "../c_c13p41/fc_actualizar",
                             type: "GET",
                             data: { vfolio : $('#folio').val(),  vvalorc13p41 : ''},    
                             dataType: "html",
                             success : function(obj){  
                             location.href = "../c_c13p41/fc_c13p41?folio=" + $('#folio').val();                        
                             }
                           }); 
           }
         
                      

        });
              
        $("#anterior").click(function ()
        {
         if($('#c13p2').val()=='c13p2o4'|| $('#c13p2').val() === 'c13p2o5'){
                location.href = "../c_c13p2/fc_c13p2?folio=" + $('#folio').val(); 
            }
            else{
         botonanterior();
         location.href = "../c_c13p3/fc_c13p3?folio=" + $('#folio').val(); 
            }   
          
        //location.href = "../c_capitulosintegrantes/fc_capitulosintegrantes?idintegrante=" + $('#idintegrante').val()+ "&idintegrante="+"&idintegrante=0";                    
        });

//para cargar variables capitulo, pregunta,encuestador,vivienda,barra



cargardatosgenerales('<?php echo($arraydatosgenerales['ecapitulo']); ?>','Pregunta 4 de 22','<?php echo($arraydatosgenerales['enomcoges']); ?>','<?php echo($arraydatosgenerales['etitular']); ?>','9');
//control del boton ayuda
botonayuda();

});

</script>
</html>