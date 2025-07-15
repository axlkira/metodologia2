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
        <input type="text" class="form-control input-sm" id="sexo" name="sexo"  style="display:none"   placeholder="" value="<?php echo($arraydatosgenerales['esexointegrante']); ?>">
        <input type="text" class="form-control input-sm" id="c11p12d" name="c11p12d" style="display:none"  placeholder="" value="<?php echo($arrayrespuestas['ec11p12d']); ?>">
        <input type="text" class="form-control input-sm" id="c11p14o1" name="c11p14o1"  style="display:none"  placeholder="" value="<?php echo($arrayrespuestas['ec11p14o1']); ?>">
        <input type="text" class="form-control" id="valorc11p12a" style="display:none" name="valorc11p12a"  placeholder="Text input" value="<?php echo($arrayrespuestas['ec11p12a']); ?>">
        fin para imprimir el folio y llevarlo    -->
<hr>
       <form class="form-group" name="formulario" id="formulario">

<!--Check varias selecciones -->
    <div class="row">
        
<!--        <label class="control-label">A continuación le voy a leer una situación y posteriormente le voy a leer dos palabras. Usted debe escoger entre los números del 1 al 7 que se encuentran entre las dos palabras, entre más cerca se encuentre el número a la palabra más fuerte será su creencia en que esa palabra se aplica para la situación; el número 4 se encuentra en la mitad, esto quiere decir que usted no se inclina ni por una ni por la otra palabra; en la medida de lo posible trate de evitar esta respuesta.
        </label><br><br>-->
        
       &nbsp&nbsp&nbsp&nbsp <label class="control-label">Capacidad 3: Integridad corporal
        </label><br><br>
        
        
        <div class="form-group">
        <div id="capap3div1" name="capap3div1" <?php if($arrayrespuestas['ecapap3o1']=='' ){echo('class="form-group col-md-12 form-group-sm has-error"');}else{echo('class="form-group col-md-12 form-group-sm"');}?>>   
        <label class="control-label">3. Usted se encuentra en su casa y escucha unos disparos en las cercanías; ante esta situación usualmente las personas buscan enterarse de lo ocurrido utilizando diferentes estrategias, considera que las estrategias que usarían en su hogar para saber lo ocurrido son:
                     <button type="button" id="vayuda" name="vayuda" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModal">
                        <span class="glyphicon glyphicon-question-sign" aria-hidden="true"></span> Ayuda
                    </button>       
        </label><br><br><br>
        <label class="control-label col-md-2">Prudentes</label>
          <div class="radio-inline">
                    <label>
                        <input type="radio" name="capap3o1" id="capap3o1" onclick="colocaropcion('1','valorcapap3o1','capap3div1');" value="1" <?php if($arrayrespuestas['ecapap3o1']=='1'){echo('checked');}?>>
                        1
                    </label>
                </div>
                <div class="radio-inline">
                    <label>
                        <input type="radio" name="capap3o1" id="capap3o1" onclick="colocaropcion('2','valorcapap3o1','capap3div1');" value="2" <?php if($arrayrespuestas['ecapap3o1']=='2'){echo('checked');}?>>
                        2
                    </label>             
                </div>
             <div class="radio-inline">
                    <label>
                        <input type="radio" name="capap3o1" id="capap3o1" onclick="colocaropcion('3','valorcapap3o1','capap3div1');" value="3" <?php if($arrayrespuestas['ecapap3o1']=='3'){echo('checked');}?>>
                        3
                    </label>             
                </div>
            <div class="radio-inline">
                    <label>
                        <input type="radio" name="capap3o1" id="capap3o1" onclick="colocaropcion('4','valorcapap3o1','capap3div1');" value="4" <?php if($arrayrespuestas['ecapap3o1']=='4'){echo('checked');}?>>
                        4
                    </label>             
                </div>
              <div class="radio-inline">
                    <label>
                        <input type="radio" name="capap3o1" id="capap3o1" onclick="colocaropcion('5','valorcapap3o1','capap3div1');" value="5" <?php if($arrayrespuestas['ecapap3o1']=='5'){echo('checked');}?>>
                        5
                    </label>             
                </div>
               <div class="radio-inline">
                    <label>
                        <input type="radio" name="capap3o1" id="capap3o1" onclick="colocaropcion('6','valorcapap3o1','capap3div1');" value="6" <?php if($arrayrespuestas['ecapap3o1']=='6'){echo('checked');}?>>
                        6
                    </label>             
                </div>
                 <div class="radio-inline">
                    <label>
                        <input type="radio" name="capap3o1" id="capap3o1" onclick="colocaropcion('7','valorcapap3o1','capap3div1');" value="7" <?php if($arrayrespuestas['ecapap3o1']=='7'){echo('checked');}?>>
                        7
                    </label>             
                </div>
          <input type="text" class="form-control" id="valorcapap3o1" name="valorcapap3o1" style="display:none" placeholder="Text input" value="<?php echo($arrayrespuestas['ecapap3o1']); ?>">
    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        <label class="control-label ">Arriesgadas</label>

        </div>
        </div>
        
        
        <div class="form-group">
        <div id="capap3div2" name="capap3div2" <?php if($arrayrespuestas['ecapap3o2']=='' ){echo('class="form-group col-md-12 form-group-sm has-error"');}else{echo('class="form-group col-md-12 form-group-sm"');}?>>   
        <label class="control-label col-md-2">Discretas</label>
          <div class="radio-inline">
                    <label>
                        <input type="radio" name="capap3o2" id="capap3o2" onclick="colocaropcion('1','valorcapap3o2','capap3div2');" value="1" <?php if($arrayrespuestas['ecapap3o2']=='1'){echo('checked');}?>>
                        1
                    </label>
                </div>
                <div class="radio-inline">
                    <label>
                        <input type="radio" name="capap3o2" id="capap3o2" onclick="colocaropcion('2','valorcapap3o2','capap3div2');" value="2" <?php if($arrayrespuestas['ecapap3o2']=='2'){echo('checked');}?>>
                        2
                    </label>             
                </div>
             <div class="radio-inline">
                    <label>
                        <input type="radio" name="capap3o2" id="capap3o2" onclick="colocaropcion('3','valorcapap3o2','capap3div2');" value="3" <?php if($arrayrespuestas['ecapap3o2']=='3'){echo('checked');}?>>
                        3
                    </label>             
                </div>
            <div class="radio-inline">
                    <label>
                        <input type="radio" name="capap3o2" id="capap3o2" onclick="colocaropcion('4','valorcapap3o2','capap3div2');" value="4" <?php if($arrayrespuestas['ecapap3o2']=='4'){echo('checked');}?>>
                        4
                    </label>             
                </div>
              <div class="radio-inline">
                    <label>
                        <input type="radio" name="capap3o2" id="capap3o2" onclick="colocaropcion('5','valorcapap3o2','capap3div2');" value="5" <?php if($arrayrespuestas['ecapap3o2']=='5'){echo('checked');}?>>
                        5
                    </label>             
                </div>
               <div class="radio-inline">
                    <label>
                        <input type="radio" name="capap3o2" id="capap3o2" onclick="colocaropcion('6','valorcapap3o2','capap3div2');" value="6" <?php if($arrayrespuestas['ecapap3o2']=='6'){echo('checked');}?>>
                        6
                    </label>             
                </div>
                 <div class="radio-inline">
                    <label>
                        <input type="radio" name="capap3o2" id="capap3o2" onclick="colocaropcion('7','valorcapap3o2','capap3div2');" value="7" <?php if($arrayrespuestas['ecapap3o2']=='7'){echo('checked');}?>>
                        7
                    </label>             
                </div>
          <input type="text" class="form-control" id="valorcapap3o2" name="valorcapap3o2" style="display:none" placeholder="Text input" value="<?php echo($arrayrespuestas['ecapap3o2']); ?>">
    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        <label class="control-label ">Chismosas</label>

        </div>
        </div>
       
        <div class="form-group">
        <div id="capap3div3" name="capap3div3" <?php if($arrayrespuestas['ecapap3o3']=='' ){echo('class="form-group col-md-12 form-group-sm has-error"');}else{echo('class="form-group col-md-12 form-group-sm"');}?>>   
        <label class="control-label col-md-2">Cobardes</label>
          <div class="radio-inline">
                    <label>
                        <input type="radio" name="capap3o3" id="capap3o3" onclick="colocaropcion('1','valorcapap3o3','capap3div3');" value="1" <?php if($arrayrespuestas['ecapap3o3']=='1'){echo('checked');}?>>
                        1
                    </label>
                </div>
                <div class="radio-inline">
                    <label>
                        <input type="radio" name="capap3o3" id="capap3o3" onclick="colocaropcion('2','valorcapap3o3','capap3div3');" value="2" <?php if($arrayrespuestas['ecapap3o3']=='2'){echo('checked');}?>>
                        2
                    </label>             
                </div>
             <div class="radio-inline">
                    <label>
                        <input type="radio" name="capap3o3" id="capap3o3" onclick="colocaropcion('3','valorcapap3o3','capap3div3');" value="3" <?php if($arrayrespuestas['ecapap3o3']=='3'){echo('checked');}?>>
                        3
                    </label>             
                </div>
            <div class="radio-inline">
                    <label>
                        <input type="radio" name="capap3o3" id="capap3o3" onclick="colocaropcion('4','valorcapap3o3','capap3div3');" value="4" <?php if($arrayrespuestas['ecapap3o3']=='4'){echo('checked');}?>>
                        4
                    </label>             
                </div>
              <div class="radio-inline">
                    <label>
                        <input type="radio" name="capap3o3" id="capap3o3" onclick="colocaropcion('5','valorcapap3o3','capap3div3');" value="5" <?php if($arrayrespuestas['ecapap3o3']=='5'){echo('checked');}?>>
                        5
                    </label>             
                </div>
               <div class="radio-inline">
                    <label>
                        <input type="radio" name="capap3o3" id="capap3o3" onclick="colocaropcion('6','valorcapap3o3','capap3div3');" value="6" <?php if($arrayrespuestas['ecapap3o3']=='6'){echo('checked');}?>>
                        6
                    </label>             
                </div>
                 <div class="radio-inline">
                    <label>
                        <input type="radio" name="capap3o3" id="capap3o3" onclick="colocaropcion('7','valorcapap3o3','capap3div3');" value="7" <?php if($arrayrespuestas['ecapap3o3']=='7'){echo('checked');}?>>
                        7
                    </label>             
                </div>
          <input type="text" class="form-control" id="valorcapap3o3" name="valorcapap3o3" style="display:none" placeholder="Text input" value="<?php echo($arrayrespuestas['ecapap3o3']); ?>">
    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        <label class="control-label ">Valientes</label>

        </div>
        </div>
        
        
        <div class="form-group">
        <div id="capap3div4" name="capap3div4" <?php if($arrayrespuestas['ecapap3o4']=='' ){echo('class="form-group col-md-12 form-group-sm has-error"');}else{echo('class="form-group col-md-12 form-group-sm"');}?>>   
        <label class="control-label col-md-2">Reservadas</label>
          <div class="radio-inline">
                    <label>
                        <input type="radio" name="capap3o4" id="capap3o4" onclick="colocaropcion('1','valorcapap3o4','capap3div4');" value="1" <?php if($arrayrespuestas['ecapap3o4']=='1'){echo('checked');}?>>
                        1
                    </label>
                </div>
                <div class="radio-inline">
                    <label>
                        <input type="radio" name="capap3o4" id="capap3o4" onclick="colocaropcion('2','valorcapap3o4','capap3div4');" value="2" <?php if($arrayrespuestas['ecapap3o4']=='2'){echo('checked');}?>>
                        2
                    </label>             
                </div>
             <div class="radio-inline">
                    <label>
                        <input type="radio" name="capap3o4" id="capap3o4" onclick="colocaropcion('3','valorcapap3o4','capap3div4');" value="3" <?php if($arrayrespuestas['ecapap3o4']=='3'){echo('checked');}?>>
                        3
                    </label>             
                </div>
            <div class="radio-inline">
                    <label>
                        <input type="radio" name="capap3o4" id="capap3o4" onclick="colocaropcion('4','valorcapap3o4','capap3div4');" value="4" <?php if($arrayrespuestas['ecapap3o4']=='4'){echo('checked');}?>>
                        4
                    </label>             
                </div>
              <div class="radio-inline">
                    <label>
                        <input type="radio" name="capap3o4" id="capap3o4" onclick="colocaropcion('5','valorcapap3o4','capap3div4');" value="5" <?php if($arrayrespuestas['ecapap3o4']=='5'){echo('checked');}?>>
                        5
                    </label>             
                </div>
               <div class="radio-inline">
                    <label>
                        <input type="radio" name="capap3o4" id="capap3o4" onclick="colocaropcion('6','valorcapap3o4','capap3div4');" value="6" <?php if($arrayrespuestas['ecapap3o4']=='6'){echo('checked');}?>>
                        6
                    </label>             
                </div>
                 <div class="radio-inline">
                    <label>
                        <input type="radio" name="capap3o4" id="capap3o4" onclick="colocaropcion('7','valorcapap3o4','capap3div4');" value="7" <?php if($arrayrespuestas['ecapap3o4']=='7'){echo('checked');}?>>
                        7
                    </label>             
                </div>
          <input type="text" class="form-control" id="valorcapap3o4" name="valorcapap3o4" style="display:none" placeholder="Text input" value="<?php echo($arrayrespuestas['ecapap3o4']); ?>">
    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        <label class="control-label ">Fisgones</label>

        </div>
        </div>
        
        
        <div class="form-group">
        <div id="capap3div5" name="capap3div5" <?php if($arrayrespuestas['ecapap3o5']=='' ){echo('class="form-group col-md-12 form-group-sm has-error"');}else{echo('class="form-group col-md-12 form-group-sm"');}?>>   
        <label class="control-label col-md-2">Sensatas</label>
          <div class="radio-inline">
                    <label>
                        <input type="radio" name="capap3o5" id="capap3o5" onclick="colocaropcion('1','valorcapap3o5','capap3div5');" value="1" <?php if($arrayrespuestas['ecapap3o5']=='1'){echo('checked');}?>>
                        1
                    </label>
                </div>
                <div class="radio-inline">
                    <label>
                        <input type="radio" name="capap3o5" id="capap3o5" onclick="colocaropcion('2','valorcapap3o5','capap3div5');" value="2" <?php if($arrayrespuestas['ecapap3o5']=='2'){echo('checked');}?>>
                        2
                    </label>             
                </div>
             <div class="radio-inline">
                    <label>
                        <input type="radio" name="capap3o5" id="capap3o5" onclick="colocaropcion('3','valorcapap3o5','capap3div5');" value="3" <?php if($arrayrespuestas['ecapap3o5']=='3'){echo('checked');}?>>
                        3
                    </label>             
                </div>
            <div class="radio-inline">
                    <label>
                        <input type="radio" name="capap3o5" id="capap3o5" onclick="colocaropcion('4','valorcapap3o5','capap3div5');" value="4" <?php if($arrayrespuestas['ecapap3o5']=='4'){echo('checked');}?>>
                        4
                    </label>             
                </div>
              <div class="radio-inline">
                    <label>
                        <input type="radio" name="capap3o5" id="capap3o5" onclick="colocaropcion('5','valorcapap3o5','capap3div5');" value="5" <?php if($arrayrespuestas['ecapap3o5']=='5'){echo('checked');}?>>
                        5
                    </label>             
                </div>
               <div class="radio-inline">
                    <label>
                        <input type="radio" name="capap3o5" id="capap3o5" onclick="colocaropcion('6','valorcapap3o5','capap3div5');" value="6" <?php if($arrayrespuestas['ecapap3o5']=='6'){echo('checked');}?>>
                        6
                    </label>             
                </div>
                 <div class="radio-inline">
                    <label>
                        <input type="radio" name="capap3o5" id="capap3o5" onclick="colocaropcion('7','valorcapap3o5','capap3div5');" value="7" <?php if($arrayrespuestas['ecapap3o5']=='7'){echo('checked');}?>>
                        7
                    </label>             
                </div>
          <input type="text" class="form-control" id="valorcapap3o5" name="valorcapap3o5" style="display:none" placeholder="Text input" value="<?php echo($arrayrespuestas['ecapap3o5']); ?>">
    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        <label class="control-label ">Curiosas</label>

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
            <?php if($arrayrespuestas['ecapap3o1']=="" & $arrayrespuestas['ecapap3o2']=="" )
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
                          vvalorcapap3o1 : $('#valorcapap3o1').val(),
                          vvalorcapap3o2 : $('#valorcapap3o2').val(),
                          vvalorcapap3o3 : $('#valorcapap3o3').val(),
                          vvalorcapap3o4 : $('#valorcapap3o4').val(),
                          vvalorcapap3o5 : $('#valorcapap3o5').val()},
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
                          vvalorcapap3o1 : $('#valorcapap3o1').val(),
                          vvalorcapap3o2 : $('#valorcapap3o2').val(),
                          vvalorcapap3o3 : $('#valorcapap3o3').val(),
                          vvalorcapap3o4 : $('#valorcapap3o4').val(),
                          vvalorcapap3o5 : $('#valorcapap3o5').val()},
                          dataType: "html",
                          success : function(obj){                      
                          botonactualizar();                         
                          }
                        });                   
        });

  $("#siguiente").click(function ()
        {
         location.href = "../c_capap4/fc_capap4?folio=" + $('#folio').val();            
        });

        
 $("#anterior").click(function ()
       {
         botonanterior();
        
          location.href = "../c_capap2/fc_capap2?folio=" + $('#folio').val();          
         });

// $("#anterior").click(function ()
//        {
//         botonanterior();
//        location.href = "../c_c11p12d_1/fc_c11p12d_1?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() ;            
//        });
        //para cargar variables capitulo, pregunta,encuestador,vivienda,barra
cargardatosgenerales('<?php echo($arraydatosgenerales['ecapitulo']); ?>','Pregunta 3 de 10','<?php echo($arraydatosgenerales['enomcoges']); ?>','<?php echo($arraydatosgenerales['etitular']); ?>','30');
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