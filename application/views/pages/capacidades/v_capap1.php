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
<!--        <input type="text" class="form-control input-sm" id="idintegrante" name="idintegrante"  style="display:none"   placeholder="idintegrante" value="<?php echo($idintegrante); ?>">-->
<!--        <input type="text" class="form-control input-sm" id="edad" name="edad"  style="display:none"   placeholder="" value="<?php echo($arraydatosgenerales['eedadintegrante']); ?>">
        <input type="text" class="form-control input-sm" id="sexo" name="sexo"  style="display:none"   placeholder="" value="<?php echo($arraydatosgenerales['esexointegrante']); ?>">-->
<!--        <input type="text" class="form-control input-sm" id="c11p12d" name="c11p12d" style="display:none"  placeholder="" value="<?php echo($arrayrespuestas['ec11p12d']); ?>">
        <input type="text" class="form-control input-sm" id="c11p14o1" name="c11p14o1"  style="display:none"  placeholder="" value="<?php echo($arrayrespuestas['ec11p14o1']); ?>">
        <input type="text" class="form-control" id="valorc11p12a" style="display:none" name="valorc11p12a"  placeholder="Text input" value="<?php echo($arrayrespuestas['ec11p12a']); ?>">-->
        <!--fin para imprimir el folio y llevarlo-->    
<hr>
       <form class="form-group" name="formulario" id="formulario">

<!--Check varias selecciones -->
    <div class="row">
        
        <label class="control-label">A continuación le voy a leer una situación y posteriormente le voy a leer dos palabras. Usted debe escoger entre los números del 1 al 7 que se encuentran entre las dos palabras, entre más cerca se encuentre el número a la palabra más fuerte será su creencia en que esa palabra se aplica para la situación; el número 4 se encuentra en la mitad, esto quiere decir que usted no se inclina ni por una ni por la otra palabra; en la medida de lo posible trate de evitar esta respuesta.
        </label><br><br>
        
        &nbsp&nbsp&nbsp&nbsp<label class="control-label">Capacidad 1: Vida
        </label><br><br>
        
        
        <div class="form-group">
        <div id="capap1div1" name="capap1div1" <?php if($arrayrespuestas['ecapap1o1']=='' ){echo('class="form-group col-md-12 form-group-sm has-error"');}else{echo('class="form-group col-md-12 form-group-sm"');}?>>   
        <label class="control-label">1. El cuidado de la vida supone la realización de un grupo de prácticas que propenden por el sostenimiento e integridad de la vida, prácticas como una alimentación saludable, balanceada, el ejercicio constante y las actividades lúdicas y recreativas son claros ejemplos de estas prácticas; esto afecta tanto a usted como a su familia; considera que su hogar es:
                     <button type="button" id="vayuda" name="vayuda" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModal">
                        <span class="glyphicon glyphicon-question-sign" aria-hidden="true"></span> Ayuda
                    </button>       
        </label><br><br><br>
        <label class="control-label col-md-2">Cuidadoso</label>
          <div class="radio-inline">
                    <label>
                        <input type="radio" name="capap1o1" id="capap1o1" onclick="colocaropcion('1','valorcapap1o1','capap1div1');" value="1" <?php if($arrayrespuestas['ecapap1o1']=='1'){echo('checked');}?>>
                        1
                    </label>
                </div>
                <div class="radio-inline">
                    <label>
                        <input type="radio" name="capap1o1" id="capap1o1" onclick="colocaropcion('2','valorcapap1o1','capap1div1');" value="2" <?php if($arrayrespuestas['ecapap1o1']=='2'){echo('checked');}?>>
                        2
                    </label>             
                </div>
             <div class="radio-inline">
                    <label>
                        <input type="radio" name="capap1o1" id="capap1o1" onclick="colocaropcion('3','valorcapap1o1','capap1div1');" value="3" <?php if($arrayrespuestas['ecapap1o1']=='3'){echo('checked');}?>>
                        3
                    </label>             
                </div>
            <div class="radio-inline">
                    <label>
                        <input type="radio" name="capap1o1" id="capap1o1" onclick="colocaropcion('4','valorcapap1o1','capap1div1');" value="4" <?php if($arrayrespuestas['ecapap1o1']=='4'){echo('checked');}?>>
                        4
                    </label>             
                </div>
              <div class="radio-inline">
                    <label>
                        <input type="radio" name="capap1o1" id="capap1o1" onclick="colocaropcion('5','valorcapap1o1','capap1div1');" value="5" <?php if($arrayrespuestas['ecapap1o1']=='5'){echo('checked');}?>>
                        5
                    </label>             
                </div>
               <div class="radio-inline">
                    <label>
                        <input type="radio" name="capap1o1" id="capap1o1" onclick="colocaropcion('6','valorcapap1o1','capap1div1');" value="6" <?php if($arrayrespuestas['ecapap1o1']=='6'){echo('checked');}?>>
                        6
                    </label>             
                </div>
                 <div class="radio-inline">
                    <label>
                        <input type="radio" name="capap1o1" id="capap1o1" onclick="colocaropcion('7','valorcapap1o1','capap1div1');" value="7" <?php if($arrayrespuestas['ecapap1o1']=='7'){echo('checked');}?>>
                        7
                    </label>             
                </div>
          <input type="text" class="form-control" id="valorcapap1o1" name="valorcapap1o1" style="display:none" placeholder="Text input" value="<?php echo($arrayrespuestas['ecapap1o1']); ?>">
    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        <label class="control-label ">Descuidado</label>

        </div>
        </div>
        
        
        <div class="form-group">
        <div id="capap1div2" name="capap1div2" <?php if($arrayrespuestas['ecapap1o2']=='' ){echo('class="form-group col-md-12 form-group-sm has-error"');}else{echo('class="form-group col-md-12 form-group-sm"');}?>>   
        <label class="control-label col-md-2">Protector</label>
          <div class="radio-inline">
                    <label>
                        <input type="radio" name="capap1o2" id="capap1o2" onclick="colocaropcion('1','valorcapap1o2','capap1div2');" value="1" <?php if($arrayrespuestas['ecapap1o2']=='1'){echo('checked');}?>>
                        1
                    </label>
                </div>
                <div class="radio-inline">
                    <label>
                        <input type="radio" name="capap1o2" id="capap1o2" onclick="colocaropcion('2','valorcapap1o2','capap1div2');" value="2" <?php if($arrayrespuestas['ecapap1o2']=='2'){echo('checked');}?>>
                        2
                    </label>             
                </div>
             <div class="radio-inline">
                    <label>
                        <input type="radio" name="capap1o2" id="capap1o2" onclick="colocaropcion('3','valorcapap1o2','capap1div2');" value="3" <?php if($arrayrespuestas['ecapap1o2']=='3'){echo('checked');}?>>
                        3
                    </label>             
                </div>
            <div class="radio-inline">
                    <label>
                        <input type="radio" name="capap1o2" id="capap1o2" onclick="colocaropcion('4','valorcapap1o2','capap1div2');" value="4" <?php if($arrayrespuestas['ecapap1o2']=='4'){echo('checked');}?>>
                        4
                    </label>             
                </div>
              <div class="radio-inline">
                    <label>
                        <input type="radio" name="capap1o2" id="capap1o2" onclick="colocaropcion('5','valorcapap1o2','capap1div2');" value="5" <?php if($arrayrespuestas['ecapap1o2']=='5'){echo('checked');}?>>
                        5
                    </label>             
                </div>
               <div class="radio-inline">
                    <label>
                        <input type="radio" name="capap1o2" id="capap1o2" onclick="colocaropcion('6','valorcapap1o2','capap1div2');" value="6" <?php if($arrayrespuestas['ecapap1o2']=='6'){echo('checked');}?>>
                        6
                    </label>             
                </div>
                 <div class="radio-inline">
                    <label>
                        <input type="radio" name="capap1o2" id="capap1o2" onclick="colocaropcion('7','valorcapap1o2','capap1div2');" value="7" <?php if($arrayrespuestas['ecapap1o2']=='7'){echo('checked');}?>>
                        7
                    </label>             
                </div>
          <input type="text" class="form-control" id="valorcapap1o2" name="valorcapap1o2" style="display:none" placeholder="Text input" value="<?php echo($arrayrespuestas['ecapap1o2']); ?>">
    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        <label class="control-label ">Relajado</label>

        </div>
        </div>
       
        <div class="form-group">
        <div id="capap1div3" name="capap1div3" <?php if($arrayrespuestas['ecapap1o3']=='' ){echo('class="form-group col-md-12 form-group-sm has-error"');}else{echo('class="form-group col-md-12 form-group-sm"');}?>>   
        <label class="control-label col-md-2">Diligente</label>
          <div class="radio-inline">
                    <label>
                        <input type="radio" name="capap1o3" id="capap1o3" onclick="colocaropcion('1','valorcapap1o3','capap1div3');" value="1" <?php if($arrayrespuestas['ecapap1o3']=='1'){echo('checked');}?>>
                        1
                    </label>
                </div>
                <div class="radio-inline">
                    <label>
                        <input type="radio" name="capap1o3" id="capap1o3" onclick="colocaropcion('2','valorcapap1o3','capap1div3');" value="2" <?php if($arrayrespuestas['ecapap1o3']=='2'){echo('checked');}?>>
                        2
                    </label>             
                </div>
             <div class="radio-inline">
                    <label>
                        <input type="radio" name="capap1o3" id="capap1o3" onclick="colocaropcion('3','valorcapap1o3','capap1div3');" value="3" <?php if($arrayrespuestas['ecapap1o3']=='3'){echo('checked');}?>>
                        3
                    </label>             
                </div>
            <div class="radio-inline">
                    <label>
                        <input type="radio" name="capap1o3" id="capap1o3" onclick="colocaropcion('4','valorcapap1o3','capap1div3');" value="4" <?php if($arrayrespuestas['ecapap1o3']=='4'){echo('checked');}?>>
                        4
                    </label>             
                </div>
              <div class="radio-inline">
                    <label>
                        <input type="radio" name="capap1o3" id="capap1o3" onclick="colocaropcion('5','valorcapap1o3','capap1div3');" value="5" <?php if($arrayrespuestas['ecapap1o3']=='5'){echo('checked');}?>>
                        5
                    </label>             
                </div>
               <div class="radio-inline">
                    <label>
                        <input type="radio" name="capap1o3" id="capap1o3" onclick="colocaropcion('6','valorcapap1o3','capap1div3');" value="6" <?php if($arrayrespuestas['ecapap1o3']=='6'){echo('checked');}?>>
                        6
                    </label>             
                </div>
                 <div class="radio-inline">
                    <label>
                        <input type="radio" name="capap1o3" id="capap1o3" onclick="colocaropcion('7','valorcapap1o3','capap1div3');" value="7" <?php if($arrayrespuestas['ecapap1o3']=='7'){echo('checked');}?>>
                        7
                    </label>             
                </div>
          <input type="text" class="form-control" id="valorcapap1o3" name="valorcapap1o3" style="display:none" placeholder="Text input" value="<?php echo($arrayrespuestas['ecapap1o3']); ?>">
    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        <label class="control-label ">Perezoso</label>

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
            <?php if($arrayrespuestas['ecapap1o1']=="" & $arrayrespuestas['ecapap1o2']=="" )
            {
                echo($botoneragcapa);
            }
            else
            {
                echo($botoneraacapa);
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
                          vvalorcapap1o1 : $('#valorcapap1o1').val(),
                          vvalorcapap1o2 : $('#valorcapap1o2').val(),
                          vvalorcapap1o3 : $('#valorcapap1o3').val()},
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
                          vvalorcapap1o1 : $('#valorcapap1o1').val(),
                          vvalorcapap1o2 : $('#valorcapap1o2').val(),
                          vvalorcapap1o3 : $('#valorcapap1o3').val()},
                          dataType: "html",
                          success : function(obj){                      
                          botonactualizar();                         
                          }
                        });                   
        });

  $("#siguiente").click(function ()
        {
         location.href = "../c_capap2/fc_capap2?folio=" + $('#folio').val();               
        });

        
 $("#anterior").click(function ()
       {
         botonanterior();
        
          location.href = "../../c_protocolol1e2/fc_protocolol1e2?folio="+ $('#folio').val() +"&idintegrante=0";           
         });

// $("#anterior").click(function ()
//        {
//         botonanterior();
//        location.href = "../c_c11p12d_1/fc_c11p12d_1?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() ;            
//        });
        //para cargar variables capitulo, pregunta,encuestador,vivienda,barra
//para cargar variables capitulo, pregunta,encuestador,vivienda,barra
cargardatosgenerales('<?php echo($arraydatosgenerales['ecapitulo']); ?>','Pregunta 1 de 10','<?php echo($arraydatosgenerales['enomcoges']); ?>','<?php echo($arraydatosgenerales['etitular']); ?>','10');
//control del boton ayuda
botonayuda();

});
//function saltop13()
//{
//    //alert('uyyy que embalada');
//    if($('#valorc11p13o1').val() != 'No se encuentra vinculado a este grupo' 
//            || $('#valorc11p13o2').val() != 'No se encuentra vinculado a este grupo'
//            || $('#valorc11p13o3').val() != 'No se encuentra vinculado a este grupo'
//            || $('#valorc11p13o4').val() != 'No se encuentra vinculado a este grupo'
//            || $('#valorc11p13o5').val() != 'No se encuentra vinculado a este grupo'
//            || $('#valorc11p13o6').val() != 'No se encuentra vinculado a este grupo'
//            || $('#valorc11p13o7').val() != 'No se encuentra vinculado a este grupo'
//            || $('#valorc11p13o8').val() != 'No se encuentra vinculado a este grupo'
//            || $('#valorc11p13o9').val() != 'No se encuentra vinculado a este grupo'
//            || $('#valorc11p13o10').val() != 'No se encuentra vinculado a este grupo'
//            || $('#valorc11p13o11').val() != 'No se encuentra vinculado a este grupo'
//            || $('#valorc11p13o12').val() != 'No se encuentra vinculado a este grupo'
//            || $('#valorc11p13o13').val() != 'No se encuentra vinculado a este grupo'
//            || $('#valorc11p13o14').val() != 'No se encuentra vinculado a este grupo'
//            || $('#valorc11p13o15').val() != 'No se encuentra vinculado a este grupo')
//           {  
//            //alert('111');
//            $.ajax({
//                
//                             url: "../c_c11p14/fc_actualizar",
//                             type: "GET",
//                             data: {vfolio : $('#folio').val(),vidintegrante : $('#idintegrante').val(), vc11p14o1 :'98', vc11p14o2 :'98',
//                             vc11p14o3 :'98', vc11p14o4 :'98', vc11p14o5 :'98', vc11p14o6 :'98', vc11p14cual :'98'},    
//                             dataType: "html",
//                             success : function(obj){  
//                            // location.href = "../c_c11p15/fc_c11p15?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                                         
//                             }
//                           }); 
//                           $.ajax({      
//                             
//                            url: "../c_c11p15/fc_actualizar",
//                             type: "GET",
//                             data: {vfolio : $('#folio').val(),vidintegrante : $('#idintegrante').val(), vvalorc11p15 :''},
//                             dataType: "html",
//                             success : function(obj){  
//                             location.href = "../c_c11p13/fc_c11p13?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                                         
//                             }
//                           });
//                           
//           }
//          else if (($('#valorc11p13o1').val() == 'No se encuentra vinculado a este grupo' && $('#c11p14o1').val() == '98')
//                && ($('#valorc11p13o2').val() == 'No se encuentra vinculado a este grupo' && $('#c11p14o1').val() == '98')
//                && ($('#valorc11p13o3').val() == 'No se encuentra vinculado a este grupo' && $('#c11p14o1').val() == '98')
//                && ($('#valorc11p13o4').val() == 'No se encuentra vinculado a este grupo' && $('#c11p14o1').val() == '98')
//                && ($('#valorc11p13o5').val() == 'No se encuentra vinculado a este grupo' && $('#c11p14o1').val() == '98')
//                && ($('#valorc11p13o6').val() == 'No se encuentra vinculado a este grupo' && $('#c11p14o1').val() == '98')
//                && ($('#valorc11p13o7').val() == 'No se encuentra vinculado a este grupo' && $('#c11p14o1').val() == '98')
//                && ($('#valorc11p13o8').val() == 'No se encuentra vinculado a este grupo' && $('#c11p14o1').val() == '98')
//                && ($('#valorc11p13o9').val() == 'No se encuentra vinculado a este grupo' && $('#c11p14o1').val() == '98')
//                && ($('#valorc11p13o10').val() == 'No se encuentra vinculado a este grupo' && $('#c11p14o1').val() == '98')
//                && ($('#valorc11p13o11').val() == 'No se encuentra vinculado a este grupo' && $('#c11p14o1').val() == '98')
//                && ($('#valorc11p13o12').val() == 'No se encuentra vinculado a este grupo' && $('#c11p14o1').val() == '98')
//                && ($('#valorc11p13o13').val() == 'No se encuentra vinculado a este grupo' && $('#c11p14o1').val() == '98')
//                && ($('#valorc11p13o14').val() == 'No se encuentra vinculado a este grupo' && $('#c11p14o1').val() == '98')
//                && ($('#valorc11p13o15').val() == 'No se encuentra vinculado a este grupo' && $('#c11p14o1').val() == '98'))
//
//          {    
//            //alert('222');  
//            $.ajax({      
//                             
//                            url: "../c_c11p14/fc_actualizar",
//                             type: "GET",
//                             data: {vfolio : $('#folio').val(),vidintegrante : $('#idintegrante').val(), vc11p14o1 :'', vc11p14o2 :'',
//                             vc11p14o3 :'', vc11p14o4 :'', vc11p14o5 :'', vc11p14o6 :'', vc11p14cual :''},    
//                             dataType: "html",
//                             success : function(obj){  
//                            // location.href = "../c_c11p14/fc_c11p14?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                                         
//                             }
//                           });
//                           $.ajax({      
//                             
//                            url: "../c_c11p15/fc_actualizar",
//                             type: "GET",
//                             data: {vfolio : $('#folio').val(),vidintegrante : $('#idintegrante').val(), vvalorc11p15 :'98'},
//                             dataType: "html",
//                             success : function(obj){  
//                             location.href = "../c_c11p13/fc_c11p13?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                                         
//                             }
//                           });
//           }
//           
//           else
//                {
//                   //alert('333');
//                   $.ajax({      
//                             
//                            url: "../c_c11p15/fc_actualizar",
//                             type: "GET",
//                             data: {vfolio : $('#folio').val(),vidintegrante : $('#idintegrante').val(), vvalorc11p15 :'98'},
//                             dataType: "html",
//                             success : function(obj){  
//                             location.href = "../c_c11p13/fc_c11p13?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                                         
//                             }
//                           });
//                 // location.href = "../c_c11p14/fc_c11p14?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                                         
//                }
//}
</script>
</html>