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
        <!--para tener la variable de idvivienda-->
        <input type="text" class="form-control input-sm" id="folio" name="folio"  style="display:none"   placeholder="folio" value="<?php echo($folio); ?>">
        <input type="text" class="form-control input-sm" id="c1p13" name="c1p13" style="display:none"    placeholder="" value="<?php echo($arrayrespuestas['ec1p13']); ?>">
<!--        <input type="text" class="form-control input-sm" id="idintegrante" name="idintegrante"  style="display:none"   placeholder="idintegrante" value="<?php echo($idintegrante); ?>">
        <input type="text" class="form-control input-sm" id="edad" name="edad"  style="display:none"   placeholder="" value="<?php echo($arraydatosgenerales['eedadintegrante']); ?>">
        fin para imprimir el folio y llevarlo
        fin para imprimir el folio y llevarlo-->
<hr>
       <form class="form-group" name="formulario" id="formulario">

<!--Check varias selecciones -->
    <div class="row">
        
        <div id="c11p8div1" name="c11p8div1" <?php if($arrayrespuestas['ec11p8o1']=='' ){echo('class="form-group col-md-12 form-group-sm has-error"');}else{echo('class="form-group col-md-12 form-group-sm"');}?>>   
        <label class="control-label">8. Con qué frecuencia realiza las siguientes situaciones (SELECCIÓN ÚNICA) 
                     <button type="button" id="vayuda" name="vayuda" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModal">
                        <span class="glyphicon glyphicon-question-sign" aria-hidden="true"></span> Ayuda
                    </button>       
        </label><br><br>
        <label class="control-label col-md-5">Mantiene un contacto permanente con personas (Familiares o amigos) </label>
          <div class="radio-inline">
                    <label>
                        <input type="radio" name="c11p8o1" id="c11p8o1" onclick="colocaropcion('Siempre','valorc11p8o1','c11p8div1');" value="Siempre" <?php if($arrayrespuestas['ec11p8o1']=='Siempre'){echo('checked');}?>>
                        Siempre
                    </label>
                </div>
                <div class="radio-inline">
                    <label>
                        <input type="radio" name="c11p8o1" id="c11p8o1" onclick="colocaropcion('A veces','valorc11p8o1','c11p8div1');" value="A veces" <?php if($arrayrespuestas['ec11p8o1']=='A veces'){echo('checked');}?>>
                        A veces
                    </label>             
                </div>
             <div class="radio-inline">
                    <label>
                        <input type="radio" name="c11p8o1" id="c11p8o1" onclick="colocaropcion('Nunca','valorc11p8o1','c11p8div1');" value="Nunca" <?php if($arrayrespuestas['ec11p8o1']=='Nunca'){echo('checked');}?>>
                        Nunca
                    </label>             
                </div>
          <input type="text" class="form-control" id="valorc11p8o1" style="display: none" name="valorc11p8o1"  placeholder="Text input" value="<?php echo($arrayrespuestas['ec11p8o1']); ?>">
          </div> 
        <div id="c11p8div2" name="c11p8div2" <?php if($arrayrespuestas['ec11p8o2']=='' ){echo('class="form-group col-md-12 form-group-sm has-error"');}else{echo('class="form-group col-md-12 form-group-sm"');}?>>   
          <label class="control-label col-md-5">En el momento de tomar una decisión, busca apoyo de otras personas o instituciones</label>
          <div class="radio-inline">
                   <label>
                        <input type="radio" name="c11p8o2" id="c11p8o2" onclick="colocaropcion('Siempre','valorc11p8o2','c11p8div2');" value="Siempre" <?php if($arrayrespuestas['ec11p8o2']=='Siempre'){echo('checked');}?>>
                        Siempre
                    </label>
                </div>
                <div class="radio-inline">
                    <label>
                        <input type="radio" name="c11p8o2" id="c11p8o2" onclick="colocaropcion('A veces','valorc11p8o2','c11p8div2');" value="A veces" <?php if($arrayrespuestas['ec11p8o2']=='A veces'){echo('checked');}?>>
                        A veces
                    </label>             
                </div>
             <div class="radio-inline">
                    <label>
                        <input type="radio" name="c11p8o2" id="c11p8o2" onclick="colocaropcion('Nunca','valorc11p8o2','c11p8div2');" value="Nunca" <?php if($arrayrespuestas['ec11p8o2']=='Nunca'){echo('checked');}?>>
                        Nunca
                    </label>             
                </div>
          <input type="text" class="form-control" id="valorc11p8o2" style="display: none" name="valorc11p8o2"  placeholder="Text input" value="<?php echo($arrayrespuestas['ec11p8o2']); ?>">
             </div>
          </div>
        <!--Fin Chek varias selecciones-->
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
            <?php if($arrayrespuestas['ec11p8o1']=="" & $arrayrespuestas['ec11p8o2']=="" )
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
 function saltop8()
{
             if($('#c1p13').val() == 'c1p13o14')
             {  
               
                          $.ajax({
                             url: "../c_c11p9/fc_actualizar",
                             type: "GET",
                             data: {vfolio : $('#folio').val(),vvalorc11p9o1 :'98',vvalorc11p9o2 :'98'},
                             dataType: "html",
                             success : function(obj){  
                             //location.href = "../c_c11p4/fc_c11p4?folio=" + $('#folio').val();      
                             }
                           });  
                }
                else if($('#c1p13').val() == 'c1p13o13')
                { 
                    //alert('es adulto');
//                            $.ajax({
//                             url: "../c_c11p8/fc_actualizar",
//                             type: "GET",
//                             data: {vfolio : $('#folio').val(),vvalorc11p8o1 :'',vvalorc11p8o2 :''},
//                             dataType: "html",
//                             success : function(obj){  
//                             //location.href = "../c_c11p4/fc_c11p4?folio=" + $('#folio').val();      
//                             }
//                           }); 
//                          $.ajax({
//                             url: "../c_c11p9/fc_actualizar",
//                             type: "GET",
//                             data: {vfolio : $('#folio').val(),vvalorc11p9o1 :'',vvalorc11p9o2 :''},
//                             dataType: "html",
//                             success : function(obj){  
//                             //location.href = "../c_c11p4/fc_c11p4?folio=" + $('#folio').val();      
//                             }
//                           });   
                }
 }
          

 
 
   
    
///////////////////////////////////////Funciones que llaman al controlador para guardar y actualizar////////////////////////////////////////////////////////////////////////    
    $(document).ready(function()
    {

        $("#guardar").click(function ()
        {
                        $.ajax({
                          url: "fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),vvalorc11p8o1 : $('#valorc11p8o1').val(),
                          vvalorc11p8o2 : $('#valorc11p8o2').val()},
                          dataType: "html",
                          success : function(obj){                      
                          botonguardar();
                          saltop8();
                          }
                        });                    
        });

        
        $("#actualizar").click(function ()
        {
                        $.ajax({
                          url: "fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),vvalorc11p8o1 : $('#valorc11p8o1').val(),
                          vvalorc11p8o2 : $('#valorc11p8o2').val()},
                          dataType: "html",
                          success : function(obj){                      
                          botonactualizar();
                          saltop8();
                          }
                        });                   
        });
        

 $("#siguiente").click(function ()
        {
         if($('#c1p13').val() == 'c1p13o14')
         {
         location.href = "../c_c11p10/fc_c11p10?folio=" + $('#folio').val();                    
         }
         else
         {
         location.href = "../c_c11p9/fc_c11p9?folio=" + $('#folio').val();                       
         }
        });

 $("#anterior").click(function ()
        {
        if($('#c1p13').val() == 'c1p13o13'||$('#c1p13').val() == 'c1p13o14')
        {
         location.href = "../c_capituloshogar/fc_capituloshogar?folio=" + $('#folio').val()+ "&idintegrante="+"&idintegrante=0";                   
        }
        else
        {
         location.href = "../c_c11p7/fc_c11p7?folio=" + $('#folio').val();                          
        }
        });
        //para cargar variables capitulo, pregunta,encuestador,vivienda,barra
cargardatosgenerales('<?php echo($arraydatosgenerales['ecapitulo']); ?>','Pregunta 8 de 11','<?php echo($arraydatosgenerales['enomcoges']); ?>','<?php echo($arraydatosgenerales['etitular']); ?>','72');
//control del boton ayuda
botonayuda();

});

</script>
</html>