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
<!--        <input type="text" class="form-control input-sm" id="c11p2o7" name="c11p2o7"  style="display:none"   value="<?php echo($arrayrespuestas['ec11p2o7']); ?>">
        <input type="text" class="form-control input-sm" id="c11p3ao1" name="c11p3ao1"  style="display:none"  value="<?php echo($arrayrespuestas['ec11p3ao1']); ?>">
        fin para imprimir el folio y llevarlo-->
<hr>
        <form class="form-group" name="formulario" id="formulario">

           <!--Check varias selecciones -->
    <div class="row">
        <div id="c11p6div" name="c11p6div" class="form-group col-md-12 form-group-sm">
        <div id="c11p6o0div" class="has-error">
            <label class="control-label">6. En el momento de tomar una decisión ¿Quiénes participan de esta ?( SELECCIÓN DE MULTIPLE RESPUESTA)
                     
                     <button type="button" id="vayuda" name="vayuda" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModal">
                        <span class="glyphicon glyphicon-question-sign" aria-hidden="true"></span> Ayuda
                    </button>       
        </label>
        </div>
        <div id="c11p6o1div" <?php if($arrayrespuestas['ec11p6o1']=='' || $arrayrespuestas['ec11p6o1']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
            <label> <!--en este caso se manda a la fincion javascript el nombre del campo-->
              <input type="checkbox" name="c11p6o1" id="c11p6o1" onclick="cambiarsino('SI','c11p6o1','c11p6o1div','c11p6div',7);" <?php if($arrayrespuestas['ec11p6o1']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
           La pareja
            </label>
        </div>
        </div>
        <div id="c11p6o2div" <?php if($arrayrespuestas['ec11p6o2']=='' || $arrayrespuestas['ec11p6o2']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="c11p6o2" id="c11p6o2" onclick="cambiarsino('SI','c11p6o2','c11p6o2div','c11p6div',7);" <?php if($arrayrespuestas['ec11p6o2']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            La madre
          </label>
        </div>
        </div>
        <div id="c11p6o3div" <?php if($arrayrespuestas['ec11p6o3']==''|| $arrayrespuestas['ec11p6o3']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="c11p6o3" id="c11p6o3" onclick="cambiarsino('SI','c11p6o3','c11p6o3div','c11p6div',7);" <?php if($arrayrespuestas['ec11p6o3']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
           El padre
          </label>
        </div>
        </div>  
            
            <div id="c11p6o4div" <?php if($arrayrespuestas['ec11p6o4']==''|| $arrayrespuestas['ec11p6o4']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="c11p6o4" id="c11p6o4" onclick="cambiarsino('SI','c11p6o4','c11p6o4div','c11p6div',7);" <?php if($arrayrespuestas['ec11p6o4']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
           Los hijos
          </label>
        </div>
        </div>  
            
            <div id="c11p6o5div" <?php if($arrayrespuestas['ec11p6o5']==''|| $arrayrespuestas['ec11p6o5']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="c11p6o5" id="c11p6o5" onclick="cambiarsino('SI','c11p6o5','c11p6o5div','c11p6div',7);" <?php if($arrayrespuestas['ec11p6o5']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
           Los abuelos
          </label>
        </div>
        </div>  
        <div id="c11p6o6div" <?php if($arrayrespuestas['ec11p6o6']==''|| $arrayrespuestas['ec11p6o6']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="c11p6o6" id="c11p6o6" onclick="cambiarsino('SI','c11p6o6','c11p6o6div','c11p6div',7);" <?php if($arrayrespuestas['ec11p6o6']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            Otro integrante de la familia
          </label>
        </div>
        </div>
        <div id="c11p6o7div" <?php if($arrayrespuestas['ec11p6o7']==''|| $arrayrespuestas['ec11p6o7']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="c11p6o7" id="c11p6o7" onclick="cambiarsino('SI','c11p6o7','c11p6o7div','c11p6div',7);" <?php if($arrayrespuestas['ec11p6o7']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            Amigos, vecinos o conocidos
          </label>
        </div>
        </div>    
            
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
            <?php if($arrayrespuestas['ec11p6o1']=="" & $arrayrespuestas['ec11p6o2']=="" & $arrayrespuestas['ec11p6o3']=="" & $arrayrespuestas['ec11p6o6']=="")
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
                          data: {vfolio : $('#folio').val(), vc11p6o1 : $('#c11p6o1').val(),vc11p6o2 : $('#c11p6o2').val(),
                              vc11p6o3 : $('#c11p6o3').val(),vc11p6o4 : $('#c11p6o4').val(),vc11p6o5 : $('#c11p6o5').val(),
                              vc11p6o6 : $('#c11p6o6').val(),vc11p6o7 : $('#c11p6o7').val()},    
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
                          data: {vfolio : $('#folio').val(), vc11p6o1 : $('#c11p6o1').val(),vc11p6o2 : $('#c11p6o2').val(),
                          vc11p6o3 : $('#c11p6o3').val(),vc11p6o4 : $('#c11p6o4').val(),vc11p6o5 : $('#c11p6o5').val(),
                          vc11p6o6 : $('#c11p6o6').val(),vc11p6o7 : $('#c11p6o7').val()},
                          dataType: "html",
                          success : function(obj){                      
                          botonactualizar();
                          }
                        });                   
        });
        

//        $("#siguiente").click(function ()
//        {
//         botonsiguiente();
//            if($('#c11p3o7').val() === 'SI')
//           {  
//               $.ajax({
//                             url: "../c_c11p3a/fc_actualizar",
//                             type: "GET",
//                             data: {vfolio : $('#folio').val(), vc11p3ao1 :'98', vc11p3ao2 : '98', vc11p3ao3 : '98', vc11p3ao4 : '98', vc11p3ao5 : '98',vc11p3ao6 :'98', vc11p3acual : '98'},    
//                             dataType: "html",
//                             success : function(obj){  
//                             location.href = "../c_c11p4/fc_c11p4?folio=" + $('#folio').val();      
//                             }
//                           }); 
//                           
//           }
//          else if ($('#c11p3o7').val() === 'NO' && $('#c11p3ao1').val() === '98')
//           {    
//              
//               
//               $.ajax({      url: "../c_c11p3a/fc_actualizar",
//                             type: "GET",
//                             data: {vfolio : $('#folio').val(), vc11p3ao1 : '', vc11p3ao2 : '', vc11p3ao3 : '', vc11p3ao4 : '', vc11p3ao5 : '', vc11p3ao6 : '', vc11p3acual : ''},
//                             dataType: "html",
//                             success : function(obj){  
//                             location.href = "../c_c11p3a/fc_c11p3a?folio=" + $('#folio').val();   
//                             
//                             }
//                           });                 
//           }
//           else
//                {
//                   
//                   location.href = "../c_c11p3a/fc_c11p3a?folio=" + $('#folio').val();   
//                }
//        });
//
        $("#siguiente").click(function ()
        {
         botonsiguiente();
         location.href = "../c_c11p7/fc_c11p7?folio=" + $('#folio').val();                    

        });

 $("#anterior").click(function ()
        {
         botonanterior();
        location.href = "../c_c11p5/fc_c11p5?folio=" + $('#folio').val();                    
        });

//        $("#anterior").click(function ()
//        {
//         botonanterior();
//         if($('#c11p2o7').val() == 'SI')
//         {
//             
//             location.href = "../c_c11p2/fc_c11p2?folio=" + $('#folio').val();                    
//         }
//         else{
//        location.href = "../c_c11p2b/fc_c11p2b?folio=" + $('#folio').val();                    
//        }});

//para cargar variables capitulo, pregunta,encuestador,vivienda,barra
cargardatosgenerales('<?php echo($arraydatosgenerales['ecapitulo']); ?>','Pregunta 6 de 11','<?php echo($arraydatosgenerales['enomcoges']); ?>','<?php echo($arraydatosgenerales['etitular']); ?>','54');
//control del boton ayuda
botonayuda();

});



</script>
</html>