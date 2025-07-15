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
        <input type="text" class="form-control input-sm" id="c9p4" name="c9p4" style="display:none"    placeholder="" value="<?php echo($arrayrespuestas['ec9p4']); ?>">
        <input type="text" class="form-control input-sm" id="c9p3" name="c9p3"  style="display:none"  placeholder="" value="<?php echo($arrayrespuestas['ec9p3']); ?>">
        <input type="text" class="form-control input-sm" id="c9p9" name="c9p9"  style="display:none"  placeholder="" value="<?php echo($arrayrespuestas['ec9p9']); ?>">
        <input type="text" class="form-control input-sm" id="c9p10" name="c9p10"   style="display:none"  placeholder="" value="<?php echo($arrayrespuestas['ec9p10']); ?>">
        <!--fin para imprimir el idintegrante y llevarlo-->
<hr>
        <form class="form-group" name="formulario" id="formulario">

            <!--inicio radio una sola seleccion-->
            <div class="row">
            <div id="c9p8div" name="c9p8div" <?php if($arrayrespuestas['ec9p8']==''||$arrayrespuestas['ec9p8']=='98'){echo('class="form-group col-md-12 form-group-sm has-error"');}else{echo('class="form-group col-md-12 form-group-sm"');}?>>   
                <label class="control-label">2. En este trabajo es: (Lea las alternativas) (Unica Respuesta)
                    <button type="button" id="vayuda" name="vayuda" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModal">
                        <span class="glyphicon glyphicon-question-sign" aria-hidden="true"></span> Ayuda
                    </button>
                </label>
                <div class="radio">
                    <label><!--en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="c9p8" id="c9p8" onclick="colocaropcionc9p8('c9p8o1','valorc9p8','c9p8div');" value="c9p8o1" <?php if($arrayrespuestas['ec9p8']=='c9p8o1'){echo('checked');}?>>
                        Obrero o Empleado de Empresa Particular
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="c9p8" id="c9p8" onclick="colocaropcionc9p8('c9p8o2','valorc9p8','c9p8div');" value="c9p8o2" <?php if($arrayrespuestas['ec9p8']=='c9p8o2'){echo('checked');}?>>
                        Obrero o Empleado del Gobierno
                    </label>             
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="c9p8" id="c9p8" onclick="colocaropcionc9p8('c9p8o3','valorc9p8','c9p8div');" value="c9p8o3" <?php if($arrayrespuestas['ec9p8']=='c9p8o3'){echo('checked');}?>>
                        Empleado Doméstico
                    </label>             
                </div>
                 <div class="radio">
                    <label>
                        <input type="radio" name="c9p8" id="c9p8" onclick="colocaropcionc9p8('c9p8o4','valorc9p8','c9p8div');" value="c9p8o4" <?php if($arrayrespuestas['ec9p8']=='c9p8o4'){echo('checked');}?>>
                        Trabajador por Cuenta Propia
                    </label>             
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="c9p8" id="c9p8" onclick="colocaropcionc9p8('c9p8o5','valorc9p8','c9p8div');" value="c9p8o5" <?php if($arrayrespuestas['ec9p8']=='c9p8o5'){echo('checked');}?>>
                       Patrono o Empleador
                    </label>             
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="c9p8" id="c9p8" onclick="colocaropcionc9p8('c9p8o6','valorc9p8','c9p8div');" value="c9p8o6" <?php if($arrayrespuestas['ec9p8']=='c9p8o6'){echo('checked');}?>>
                       Trabajador Familiar sin remuneración
                    </label>             
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="c9p8" id="c9p8" onclick="colocaropcionc9p8('c9p8o7','valorc9p8','c9p8div');" value="c9p8o7" <?php if($arrayrespuestas['ec9p8']=='c9p8o7'){echo('checked');}?>>
                       Trabajador sin remuneración
                    </label>             
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="c9p8" id="c9p8" onclick="colocaropcionc9p8('c9p8o8','valorc9p8','c9p8div');" value="c9p8o8" <?php if($arrayrespuestas['ec9p8']=='c9p8o8'){echo('checked');}?>>
                       Jornalero o Peón
                    </label>             
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="c9p8" id="c9p8" onclick="colocaropcionc9p8('c9p8o9','valorc9p8','c9p8div');" value="c9p8o9" <?php if($arrayrespuestas['ec9p8']=='c9p8o9'){echo('checked');}?>>
                       Otro
                    </label>             
                </div>
                
        <div class="row" id="c9p8cualmostrar" name="c9p8cualmostrar" <?php if($arrayrespuestas['ec9p8cual']== ''||$arrayrespuestas['ec9p8cual']== '98'){echo('style="display:none"');}else{echo('');}  ?> >
        <div  id="c9p8cualdiv" name="c9p8cualdiv" class="form-group col-md-8">
                       <label class="control-label">Cual?</label>
                       <input type="text" class="form-control text-uppercase" id="c9p8cual" onkeypress="return soloLetras(event)"  onchange="validarcampotexcuadros('c9p8cualdiv','c9p8cual','1')" name="c9p8cual"   placeholder="Cual?" value="<?php if($arrayrespuestas['ec9p8cual'] == ''){echo('');}else{ echo($arrayrespuestas['ec9p8cual']);} ?>">
        </div>
        </div>
            <input type="text" class="form-control" id="valorc9p8" name="valorc9p8"  style="display:none"  placeholder="Text input" value="<?php echo($arrayrespuestas['ec9p8']); ?>">
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
            <?php if($arrayrespuestas['ec9p8']=="")
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
  
  function saltarc9p8()
{
       if($('#valorc9p8').val() === 'c9p8o1' && $('#c9p10').val() === '98' || $('#valorc9p8').val() === 'c9p8o2'  && $('#c9p10').val() === '98' || $('#valorc9p8').val() === 'c9p8o3'  && $('#c9p10').val() === '98' || $('#valorc9p8').val() === 'c9p8o8' && $('#c9p10').val() === '98')
         {                
                          //alert('1');
                          $.ajax({
                          url: "../c_c9p9/fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),vidintegrante : $('#idintegrante').val(),
                              vvalorc9p9 : '',vvalorc9p9cuanto : ''},
                          dataType: "html",
                          success : function(obj)
                          {
                         //location.href = "../c_c8p7/fc_c8p7?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
                          }
                         });
                         
                         $.ajax({
                          url: "../c_c9p10/fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),vidintegrante : $('#idintegrante').val(),
                                 vvalorc9p10 : ''},
                          dataType: "html",
                          success : function(obj)
                          {
                         //location.href = "../c_c8p7/fc_c8p7?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
                          }
                         });
                         
                         $.ajax({
                          url: "../c_c9p11/fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),vidintegrante : $('#idintegrante').val(), 
                                 vvalorc9p11 : '',vvalorc9p11cuanto : '',vvalorc9p11incluyo : ''},
                          dataType: "html",
                          success : function(obj)
                          {
                         //location.href = "../c_c8p7/fc_c8p7?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
                          }
                         });
 
                         $.ajax({
                          url: "../c_c9p12/fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),
                          vidintegrante : $('#idintegrante').val(),
                          vc9p12o1 : '',          
                          vc9p12o2 : '',
                          vc9p12o3 : '',
                          vc9p12o4 : '',                          
                          vc9p12cuanto : ''},
                          dataType: "html",
                          success : function(obj)
                          {
                         //location.href = "../c_c8p7/fc_c8p7?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
                          }
                         });
 
 
                         $.ajax({
                          url: "../c_c9p13/fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),
                          vidintegrante : $('#idintegrante').val(),
                          vc9p13o1 : '',          
                          vc9p13o2 : '',
                          vc9p13o3 : '',                                                  
                          vc9p13cuanto : ''},
                          dataType: "html",
                          success : function(obj)
                          {
                         //location.href = "../c_c8p7/fc_c8p7?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
                          }
                         });

                        $.ajax({
                          url: "../c_c9p14/fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),
                          vidintegrante : $('#idintegrante').val(),
                          vc9p14o1 : '',          
                          vc9p14o2 : '',
                          vc9p14o3 : '',
                          vc9p14o4 : '',                          
                          vc9p14cuanto : ''},
                          dataType: "html",
                          success : function(obj)
                          {
                         //location.href = "../c_c8p7/fc_c8p7?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
                          }
                         });
                         
                         

        }
        
        else if($('#valorc9p8').val() === 'c9p8o1'|| $('#valorc9p8').val() === 'c9p8o2'|| $('#valorc9p8').val() === 'c9p8o3'  || $('#valorc9p8').val() === 'c9p8o8')
         {                
                          //alert('1aaaa');
                          $.ajax({
                          url: "../c_c9p9/fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),vidintegrante : $('#idintegrante').val(),
                              vvalorc9p9 : '98',vvalorc9p9cuanto : '98'},
                          dataType: "html",
                          success : function(obj)
                          {
                         //location.href = "../c_c8p7/fc_c8p7?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
                          }
                         });

        }
        
        
        
        else if ($('#valorc9p8').val() === 'c9p8o4' || $('#valorc9p8').val() === 'c9p8o5'  || $('#valorc9p8').val() === 'c9p8o9')
         {                
                          //alert('2');
                          $.ajax({
                          url: "../c_c9p9/fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),vidintegrante : $('#idintegrante').val(),
                              vvalorc9p9 : '98',vvalorc9p9cuanto : '98'},
                          dataType: "html",
                          success : function(obj)
                          {
                         //location.href = "../c_c8p7/fc_c8p7?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
                          }
                         });

                          $.ajax({
                          url: "../c_c9p10/fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),vidintegrante : $('#idintegrante').val(),
                                 vvalorc9p10 : '98'},
                          dataType: "html",
                          success : function(obj)
                          {
                         //location.href = "../c_c8p7/fc_c8p7?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
                          }
                         });

                           
                           $.ajax({
                          url: "../c_c9p11/fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),vidintegrante : $('#idintegrante').val(), 
                                 vvalorc9p11 : '98',vvalorc9p11cuanto : '98',vvalorc9p11incluyo : '98'},
                          dataType: "html",
                          success : function(obj)
                          {
                         //location.href = "../c_c8p7/fc_c8p7?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
                          }
                         });
 
                         $.ajax({
                          url: "../c_c9p12/fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),
                          vidintegrante : $('#idintegrante').val(),
                          vc9p12o1 : '98',          
                          vc9p12o2 : '98',
                          vc9p12o3 : '98',
                          vc9p12o4 : '98',                          
                          vc9p12cuanto : '98'},
                          dataType: "html",
                          success : function(obj)
                          {
                         //location.href = "../c_c8p7/fc_c8p7?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
                          }
                         });
 
 
                         $.ajax({
                          url: "../c_c9p13/fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),
                          vidintegrante : $('#idintegrante').val(),
                          vc9p13o1 : '98',          
                          vc9p13o2 : '98',
                          vc9p13o3 : '98',                                                  
                          vc9p13cuanto : '98'},
                          dataType: "html",
                          success : function(obj)
                          {
                         //location.href = "../c_c8p7/fc_c8p7?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
                          }
                         });

                        $.ajax({
                          url: "../c_c9p14/fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),
                          vidintegrante : $('#idintegrante').val(),
                          vc9p14o1 : '98',          
                          vc9p14o2 : '98',
                          vc9p14o3 : '98',
                          vc9p14o4 : '98',                          
                          vc9p14cuanto : '98'},
                          dataType: "html",
                          success : function(obj)
                          {
                         //location.href = "../c_c8p7/fc_c8p7?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
                          }
                         });
                         
                         $.ajax({
                          url: "../c_c9p16/fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),vidintegrante : $('#idintegrante').val(), vvalorc9p16 : ''},
                          dataType: "html",
                          success : function(obj)
                          {
                         //location.href = "../c_c8p7/fc_c8p7?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
                          }
                         });
                         
                         $.ajax({
                          url: "../c_c9p17/fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),vidintegrante : $('#idintegrante').val(), vvalorc9p17 : ''},
                          dataType: "html",
                          success : function(obj)
                          {
                         //location.href = "../c_c8p7/fc_c8p7?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
                          }
                         });
                         
                         $.ajax({
                          url: "../c_c9p18/fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),vidintegrante : $('#idintegrante').val(), vvalorc9p18 : ''},
                          dataType: "html",
                          success : function(obj)
                          {
                         //location.href = "../c_c8p7/fc_c8p7?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
                          }
                         });
                         

        }
        
        
        
        
//        else if ($('#valorc9p8').val() === 'c9p8o4' || $('#valorc9p8').val() === 'c9p8o5'  || $('#valorc9p8').val() === 'c9p8o9')
//         {                
//                          //alert('2');
//                          $.ajax({
//                          url: "../c_c9p9/fc_actualizar",
//                          type: "GET",
//                          data: {vfolio : $('#folio').val(),vidintegrante : $('#idintegrante').val(),
//                              vvalorc9p9 : '98',vvalorc9p9cuanto : '98'},
//                          dataType: "html",
//                          success : function(obj)
//                          {
//                         //location.href = "../c_c8p7/fc_c8p7?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
//                          }
//                         });
//
//                          $.ajax({
//                          url: "../c_c9p10/fc_actualizar",
//                          type: "GET",
//                          data: {vfolio : $('#folio').val(),vidintegrante : $('#idintegrante').val(),
//                                 vvalorc9p10 : '98'},
//                          dataType: "html",
//                          success : function(obj)
//                          {
//                         //location.href = "../c_c8p7/fc_c8p7?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
//                          }
//                         });
//
//                           
//                           $.ajax({
//                          url: "../c_c9p11/fc_actualizar",
//                          type: "GET",
//                          data: {vfolio : $('#folio').val(),vidintegrante : $('#idintegrante').val(), 
//                                 vvalorc9p11 : '98',vvalorc9p11cuanto : '98',vvalorc9p11incluyo : '98'},
//                          dataType: "html",
//                          success : function(obj)
//                          {
//                         //location.href = "../c_c8p7/fc_c8p7?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
//                          }
//                         });
// 
//                         $.ajax({
//                          url: "../c_c9p12/fc_actualizar",
//                          type: "GET",
//                          data: {vfolio : $('#folio').val(),
//                          vidintegrante : $('#idintegrante').val(),
//                          vc9p12o1 : '98',          
//                          vc9p12o2 : '98',
//                          vc9p12o3 : '98',
//                          vc9p12o4 : '98',                          
//                          vc9p12cuanto : '98'},
//                          dataType: "html",
//                          success : function(obj)
//                          {
//                         //location.href = "../c_c8p7/fc_c8p7?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
//                          }
//                         });
// 
// 
//                         $.ajax({
//                          url: "../c_c9p13/fc_actualizar",
//                          type: "GET",
//                          data: {vfolio : $('#folio').val(),
//                          vidintegrante : $('#idintegrante').val(),
//                          vc9p13o1 : '98',          
//                          vc9p13o2 : '98',
//                          vc9p13o3 : '98',                                                  
//                          vc9p13cuanto : '98'},
//                          dataType: "html",
//                          success : function(obj)
//                          {
//                         //location.href = "../c_c8p7/fc_c8p7?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
//                          }
//                         });
//
//                        $.ajax({
//                          url: "../c_c9p14/fc_actualizar",
//                          type: "GET",
//                          data: {vfolio : $('#folio').val(),
//                          vidintegrante : $('#idintegrante').val(),
//                          vc9p14o1 : '98',          
//                          vc9p14o2 : '98',
//                          vc9p14o3 : '98',
//                          vc9p14o4 : '98',                          
//                          vc9p14cuanto : '98'},
//                          dataType: "html",
//                          success : function(obj)
//                          {
//                         //location.href = "../c_c8p7/fc_c8p7?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
//                          }
//                         });
//
//        }
        
        
        
        
        
  //////////////////
  
  else if ($('#valorc9p8').val() === 'c9p8o6'  &&  $('#c9p10').val() !== '98' || $('#valorc9p8').val() === 'c9p8o7' &&  $('#c9p10').val() !== '98')
         {                
                          
                          //alert('3');
                          $.ajax({
                          url: "../c_c9p9/fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),vidintegrante : $('#idintegrante').val(),
                              vvalorc9p9 : '',vvalorc9p9cuanto : ''},
                          dataType: "html",
                          success : function(obj)
                          {
                         //location.href = "../c_c8p7/fc_c8p7?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
                          }
                         });
                         
                          $.ajax({
                          url: "../c_c9p10/fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),vidintegrante : $('#idintegrante').val(),
                                 vvalorc9p10 : ''},
                          dataType: "html",
                          success : function(obj)
                          {
                         //location.href = "../c_c8p7/fc_c8p7?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
                          }
                         });

                           
                           $.ajax({
                          url: "../c_c9p11/fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),vidintegrante : $('#idintegrante').val(), 
                                 vvalorc9p11 : '',vvalorc9p11cuanto : '',vvalorc9p11incluyo : ''},
                          dataType: "html",
                          success : function(obj)
                          {
                         //location.href = "../c_c8p7/fc_c8p7?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
                          }
                         });
 
                         $.ajax({
                          url: "../c_c9p12/fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),
                          vidintegrante : $('#idintegrante').val(),
                          vc9p12o1 : '',          
                          vc9p12o2 : '',
                          vc9p12o3 : '',
                          vc9p12o4 : '',                          
                          vc9p12cuanto : ''},
                          dataType: "html",
                          success : function(obj)
                          {
                         //location.href = "../c_c8p7/fc_c8p7?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
                          }
                         });
 
 
                         $.ajax({
                          url: "../c_c9p13/fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),
                          vidintegrante : $('#idintegrante').val(),
                          vc9p13o1 : '',          
                          vc9p13o2 : '',
                          vc9p13o3 : '',                                                  
                          vc9p13cuanto : ''},
                          dataType: "html",
                          success : function(obj)
                          {
                         //location.href = "../c_c8p7/fc_c8p7?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
                          }
                         });

                        $.ajax({
                          url: "../c_c9p14/fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),
                          vidintegrante : $('#idintegrante').val(),
                          vc9p14o1 : '',          
                          vc9p14o2 : '',
                          vc9p14o3 : '',
                          vc9p14o4 : '',                          
                          vc9p14cuanto : ''},
                          dataType: "html",
                          success : function(obj)
                          {
                         //location.href = "../c_c8p7/fc_c8p7?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
                          }
                         });
                         
                         

        }
        
      
      else if ($('#valorc9p8').val() === 'c9p8o6'  &&  $('#c9p10').val() === '98' || $('#valorc9p8').val() === 'c9p8o7' &&  $('#c9p10').val() === '98')
         {                
                          
                          //alert('4');
                          $.ajax({
                          url: "../c_c9p9/fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),vidintegrante : $('#idintegrante').val(),
                              vvalorc9p9 : '',vvalorc9p9cuanto : ''},
                          dataType: "html",
                          success : function(obj)
                          {
                         //location.href = "../c_c8p7/fc_c8p7?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
                          }
                         });
                         
                         
                         $.ajax({
                          url: "../c_c9p10/fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),vidintegrante : $('#idintegrante').val(),
                                 vvalorc9p10 : ''},
                          dataType: "html",
                          success : function(obj)
                          {
                         //location.href = "../c_c8p7/fc_c8p7?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
                          }
                         });

                           
                           $.ajax({
                          url: "../c_c9p11/fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),vidintegrante : $('#idintegrante').val(), 
                                 vvalorc9p11 : '',vvalorc9p11cuanto : '',vvalorc9p11incluyo : ''},
                          dataType: "html",
                          success : function(obj)
                          {
                         //location.href = "../c_c8p7/fc_c8p7?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
                          }
                         });
 
                         $.ajax({
                          url: "../c_c9p12/fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),
                          vidintegrante : $('#idintegrante').val(),
                          vc9p12o1 : '',          
                          vc9p12o2 : '',
                          vc9p12o3 : '',
                          vc9p12o4 : '',                          
                          vc9p12cuanto : ''},
                          dataType: "html",
                          success : function(obj)
                          {
                         //location.href = "../c_c8p7/fc_c8p7?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
                          }
                         });
 
 
                         $.ajax({
                          url: "../c_c9p13/fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),
                          vidintegrante : $('#idintegrante').val(),
                          vc9p13o1 : '',          
                          vc9p13o2 : '',
                          vc9p13o3 : '',                                                  
                          vc9p13cuanto : ''},
                          dataType: "html",
                          success : function(obj)
                          {
                         //location.href = "../c_c8p7/fc_c8p7?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
                          }
                         });

                        $.ajax({
                          url: "../c_c9p14/fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),
                          vidintegrante : $('#idintegrante').val(),
                          vc9p14o1 : '',          
                          vc9p14o2 : '',
                          vc9p14o3 : '',
                          vc9p14o4 : '',                          
                          vc9p14cuanto : ''},
                          dataType: "html",
                          success : function(obj)
                          {
                         //location.href = "../c_c8p7/fc_c8p7?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
                          }
                         });

        }


         
         else
               {
                 //alert('6');                 
               }



}  


    $(document).ready(function()
    {

        $("#guardar").click(function ()
        {
                        $.ajax({
                          url: "fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),vidintegrante : $('#idintegrante').val(), vvalorc9p8 : $('#valorc9p8').val(),vvalorc9p8cual : $('#c9p8cual').val()},    
                          dataType: "html",
                          success : function(obj){                      
                          botonguardar();
                          saltarc9p8();
                          }
                        });                    
        });

        
        $("#actualizar").click(function ()
        {
                        $.ajax({
                          url: "fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),vidintegrante : $('#idintegrante').val(), vvalorc9p8 : $('#valorc9p8').val(),vvalorc9p8cual : $('#c9p8cual').val()},    
                          dataType: "html",
                          success : function(obj){                      
                          botonguardar();
                          saltarc9p8();
                          }
                        });                    
        });
        

        $("#siguiente").click(function ()
        {
          if($('#valorc9p8').val() === 'c9p8o1' || $('#valorc9p8').val() === 'c9p8o2'  || $('#valorc9p8').val() === 'c9p8o3'  || $('#valorc9p8').val() === 'c9p8o8')
          {
          location.href = "../c_c9p10/fc_c9p10?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
         
            }
         else if ($('#valorc9p8').val() === 'c9p8o4' || $('#valorc9p8').val() === 'c9p8o5'  || $('#valorc9p8').val() === 'c9p8o9')
            {
         
          location.href = "../c_c9p15/fc_c9p15?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
         
            } 
            else
            { 
            location.href = "../c_c9p9/fc_c9p9?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";   
              
            }



        });
        
        
        
        $ ("#anterior").click(function ()
        {
            
           if($('#c9p4').val() === '1' && $('#c9p3').val() === 'c9p3o5' )
           {
                location.href = "../c_c9p4/fc_c9p4?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    

            }
            else
             {
                location.href = "../c_c9p7/fc_c9p7?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    

             }   
      //location.href = "../c_capitulosintegrantes/fc_capitulosintegrantes?idintegrante=" + $('#idintegrante').val()+ "&idintegrante="+"&idintegrante=0";                    
        });



cargardatosgenerales('<?php echo($arraydatosgenerales['ecapitulo']); ?>','Pregunta 2 de 16','<?php echo($arraydatosgenerales['enomcoges']); ?>','<?php echo($arraydatosgenerales['enombreintegrante']." "." - "." "."Sexo:"." ".$arraydatosgenerales['esexointegrante']."   "."  -  "."   "."Edad:"."   ".$arraydatosgenerales['eedadintegrante']); ?>','12');
//control del boton ayuda
botonayuda();

});
/* 
Funciones para validar campos y gaurdar
 */
//habilitar boton guardar
function validarguardarc9p8()
{
   //alert($('.has-error').length);
   if($('.has-error').length === 0)
   {
       $('#guardar').prop('disabled', false);
       $('#actualizar').prop('disabled', false);
       $('#cancelar').prop('disabled', false);
       $('#anterior').prop('disabled', true);
       $('#siguiente').prop('disabled', true);       
   }
   else
   {
       $('#guardar').prop('disabled', true);
       $('#actualizar').prop('disabled', true);
       $('#cancelar').prop('disabled', true);
       $('#anterior').prop('disabled', false);
       $('#siguiente').prop('disabled', false);
   }
   
}

//validar bolitas y texto
function validarbolitasytextoc9p8(div,campo)
{ //alert(div + ' juanpis ' + campo);
   if(($('#'+ campo).val() == '') || ($('#'+ campo).val() == '0'))
   { 
       $('#' + div).addClass(' has-error');
   }
   else
   { 
       $('#' + div).removeClass('has-error');
   }
    validarguardarc9p8();
}
// colocar opcion para todos
function colocaropcionc9p8(opcion,campoval,divcampo)
{
    //alert(opcion);
    $('#' + campoval).val(opcion);
    
    if(opcion == 'c9p8o9')
        {
           // alert('aca lo muestra');
            $('#c9p8cualmostrar').show(1000);
            $('#c9p8cual').val('');
            $('#c9p8cualdiv').addClass(' has-error');            
        }
        else
        {
            //alert('aca lo oculta');
            $('#c9p8cualmostrar').hide(1000);
            $('#c9p8cual').val('98');
            $('#c9p8cualdiv').removeClass(' has-error');            
        }
    validarbolitasytextoc9p8(divcampo,campoval);
}
//de aca para arriba es logica de bolas y textos
function validarcampotexcuadros(div,campo,ncampos)
{
    validarbolitasytexto(div,campo);
    validarcuadrosc9p8(div,ncampos);
}
</script>
</html>