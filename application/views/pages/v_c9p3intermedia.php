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
        <input type="text" class="form-control" id="valorc9p4" name="valorc9p4"  style="display:none" placeholder="Text input" value="<?php echo($arrayrespuestas['ec9p4']); ?>">
        <!--fin para imprimir el idintegrante y llevarlo-->
<hr>
        <form class="form-group" name="formulario" id="formulario">

            <!--inicio radio una sola seleccion-->
            <div class="row">
            <div id="c9p3intermediadiv" name="c9p3intermediadiv" <?php if($arrayrespuestas['ec9p3intermedia']==''||$arrayrespuestas['ec9p3intermedia']=='98'){echo('class="form-group col-md-12 form-group-sm has-error"');}else{echo('class="form-group col-md-12 form-group-sm"');}?>>   
                <label class="control-label">1. En que actividad ocupó la mayor parte del tiempo la semana pasada? (Unica Respuesta)
                    <button type="button" id="vayuda" name="vayuda" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModal">
                        <span class="glyphicon glyphicon-question-sign" aria-hidden="true"></span> Ayuda
                    </button>
                </label>
                <div class="radio">
                    <label><!--en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="c9p3intermedia" id="c9p3intermedia" onclick="colocaropcionc9p3intermedia('c9p3intermediao1','valorc9p3intermedia','c9p3intermediadiv');" value="c9p3intermediao1" <?php if($arrayrespuestas['ec9p3intermedia']=='c9p3intermediao1'){echo('checked');}?>>
                        Trabajando
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="c9p3intermedia" id="c9p3intermedia" onclick="colocaropcionc9p3intermedia('c9p3intermediao2','valorc9p3intermedia','c9p3intermediadiv');" value="c9p3intermediao2" <?php if($arrayrespuestas['ec9p3intermedia']=='c9p3intermediao2'){echo('checked');}?>>
                        Buscando trabajo
                    </label>             
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="c9p3intermedia" id="c9p3intermedia" onclick="colocaropcionc9p3intermedia('c9p3intermediao3','valorc9p3intermedia','c9p3intermediadiv');" value="c9p3intermediao3" <?php if($arrayrespuestas['ec9p3intermedia']=='c9p3intermediao3'){echo('checked');}?>>
                        Estudiando
                    </label>             
                </div>
                 <div class="radio">
                    <label>
                        <input type="radio" name="c9p3intermedia" id="c9p3intermedia" onclick="colocaropcionc9p3intermedia('c9p3intermediao4','valorc9p3intermedia','c9p3intermediadiv');" value="c9p3intermediao4" <?php if($arrayrespuestas['ec9p3intermedia']=='c9p3intermediao4'){echo('checked');}?>>
                        Oficios del hogar
                    </label>             
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="c9p3intermedia" id="c9p3intermedia" onclick="colocaropcionc9p3intermedia('c9p3intermediao5','valorc9p3intermedia','c9p3intermediadiv');" value="c9p3intermediao5" <?php if($arrayrespuestas['ec9p3intermedia']=='c9p3intermediao5'){echo('checked');}?>>
                        Incapacitado permanente para trabajar
                    </label>             
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="c9p3intermedia" id="c9p3intermedia" onclick="colocaropcionc9p3intermedia('c9p3intermediao6','valorc9p3intermedia','c9p3intermediadiv');" value="c9p3intermediao6" <?php if($arrayrespuestas['ec9p3intermedia']=='c9p3intermediao6'){echo('checked');}?>>
                       Otra actividad
                    </label>             
                </div>
                
        <div class="row" id="c9p3intermediacualmostrar" name="c9p3intermediacualmostrar" <?php if($arrayrespuestas['ec9p3intermediacual']== ''||$arrayrespuestas['ec9p3intermediacual']== '98'){echo('style="display:none"');}else{echo('');}  ?> >
        <div  id="c9p3intermediacualdiv" name="c9p3intermediacualdiv" class="form-group col-md-8">
                       <label class="control-label">Cual?</label>
                       <input type="text" class="form-control text-uppercase" id="c9p3intermediacual" onkeypress="return soloLetras(event)"  onchange="validarcampotexcuadros('c9p3intermediacualdiv','c9p3intermediacual','1')" name="c9p3intermediacual"   placeholder="Cual?" value="<?php if($arrayrespuestas['ec9p3intermediacual'] == ''){echo('');}else{ echo($arrayrespuestas['ec9p3intermediacual']);} ?>">
        </div>
        </div>
            <input type="text" class="form-control" id="valorc9p3intermedia" name="valorc9p3intermedia" style="display:none" placeholder="Text input" value="<?php echo($arrayrespuestas['ec9p3intermedia']); ?>">
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
            <?php if($arrayrespuestas['ec9p3intermedia']=="")
            {
                echo($botoneraginter);
            }
            else
            {
                echo($botoneraainter);
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
                          data: {vfolio : $('#folio').val(),vidintegrante : $('#idintegrante').val(), vvalorc9p3intermedia : $('#valorc9p3intermedia').val(),vvalorc9p3intermediacual : $('#c9p3intermediacual').val()},    
                          dataType: "html",
                          success : function(obj){                      
                          botonguardar();
                          saltarc9p3intermedia();
                          }
                        });
      
       
                        
        });

        
        $("#actualizar").click(function ()
        {
                        $.ajax({
                          url: "fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),vidintegrante : $('#idintegrante').val(), vvalorc9p3intermedia : $('#valorc9p3intermedia').val(),vvalorc9p3intermediacual : $('#c9p3intermediacual').val()},    
                          dataType: "html",
                          success : function(obj){                      
                          botonguardar();
                          saltarc9p3intermedia();
                          }
                        });
   //////////////////////////////////////////
   
                        
        });
        
         $("#capitulos").click(function ()
        {
            
            location.href = "../c_capitulosintegranteintermedia/fc_capitulosintegranteintermedia?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() ;                    
         
            });
        

        $("#siguiente").click(function ()
        {
         
         if($('#valorc9p3intermedia').val() === 'c9p3intermediao1')
         {
          location.href = "../c_c9p7intermedia/fc_c9p7intermedia?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
         
            }
            else{
         //botonanterior();
          location.href = "../c_c9p4intermedia/fc_c9p4intermedia?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
         
            } 

        });
        
        $("#anterior").click(function ()
        {
         //botonanterior();
          
              location.href = "../c_capitulosintegranteintermedia/fc_capitulosintegranteintermedia?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                      
         
        });
//              
//        $("#anterior").click(function ()
//        {
//         botonanterior();
//         location.href = "../c_c5p11/fc_c5p11?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";     
//        //location.href = "../c_capitulosintegrantes/fc_capitulosintegrantes?idintegrante=" + $('#idintegrante').val()+ "&idintegrante="+"&idintegrante=0";                    
//        });

//para cargar variables capitulo, pregunta,encuestador,vivienda,barra



cargardatosgenerales('<?php echo($arraydatosgenerales['ecapitulo']); ?>','Pregunta 1 de 4','<?php echo($arraydatosgenerales['enomcoges']); ?>','<?php echo($arraydatosgenerales['enombreintegrante']." "." - "." "."Sexo:"." ".$arraydatosgenerales['esexointegrante']."   "."  -  "."   "."Edad:"."   ".$arraydatosgenerales['eedadintegrante']); ?>','25');
//control del boton ayuda
botonayuda();

});
/* 
Funciones para validar campos y gaurdar
 */
//habilitar boton guardar
function saltarc9p3intermedia()
{
if($('#valorc9p3intermedia').val() === 'c9p3intermediao1')
         {                
                          $.ajax({
                          url: "../c_c9p4intermedia/fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),
                          vidintegrante : $('#idintegrante').val(),    
                          vvalorc9p4intermedia : '98'},
                          dataType: "html",
                          success : function(obj)
                          {
                         //location.href = "../c_c8p7/fc_c8p7?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
                          }
                         });
                         
//                         $.ajax({
//                          url: "../c_c9p5/fc_actualizar",
//                          type: "GET",
//                          data: {vfolio : $('#folio').val(),
//                          vidintegrante : $('#idintegrante').val(),    
//                          vvalorc9p5 : '98',vvalorc9p5cual : '98'},
//                          dataType: "html",
//                          success : function(obj)
//                          {
//                         //location.href = "../c_c9p/fc_c8p7?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
//                          }
//                         });
                         
//                         $.ajax({
//                          url: "../c_c9p6/fc_actualizar",
//                          type: "GET",
//                          data: {vfolio : $('#folio').val(),
//                          vidintegrante : $('#idintegrante').val(),    
//                          vvalorc9p6 : '98'},
//                          dataType: "html",
//                          success : function(obj)
//                          {
//                         //location.href = "../c_c9p7/fc_c9p7?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
//                          }
//                         });
                         
                         $.ajax({
                          url: "../c_c9p7intermedia/fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),
                          vidintegrante : $('#idintegrante').val(),    
                          vvalorc9p7intermedia : ''},
                          dataType: "html",
                          success : function(obj)
                          {
                         //location.href = "../c_c9p7/fc_c9p7?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
                          }
                         });
                         
                          $.ajax({
                          url: "../c_c9p8intermedia/fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),
                          vidintegrante : $('#idintegrante').val(),    
                          vvalorc9p8intermedia : '',
                          vvalorc9p8intermediacual : ''},
                          dataType: "html",
                          success : function(obj)
                          {
                         //location.href = "../c_c9p7/fc_c9p7?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
                          }
                         });
//                         
//                          $.ajax({
//                          url: "../c_c9p9/fc_actualizar",
//                          type: "GET",
//                          data: {vfolio : $('#folio').val(),
//                          vidintegrante : $('#idintegrante').val(),    
//                          vvalorc9p9 : '',
//                          vvalorc9p9cuanto : ''},
//                          dataType: "html",
//                          success : function(obj)
//                          {
//                         //location.href = "../c_c9p7/fc_c9p7?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
//                          }
//                         });
                         
                          $.ajax({
                          url: "../c_c9p10intermedia/fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),
                          vidintegrante : $('#idintegrante').val(),    
                          vvalorc9p10intermedia : ''},
                          dataType: "html",
                          success : function(obj)
                          {
                         //location.href = "../c_c9p7/fc_c9p7?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
                          }
                         });
                         
                          $.ajax({
                          url: "../c_c9p11intermedia/fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),
                          vidintegrante : $('#idintegrante').val(),    
                          vvalorc9p11intermedia : '',
                          vvalorc9p11intermediacuanto : '',
                          vvalorc9p11intermediaincluyo : ''},
                          dataType: "html",
                          success : function(obj)
                          {
                         //location.href = "../c_c9p7/fc_c9p7?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
                          }
                         });
                         
                          $.ajax({
                          url: "../c_c9p12intermedia/fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),
                          vidintegrante : $('#idintegrante').val(),    
                          vc9p12intermediao1 : '',          
                          vc9p12intermediao2 : '',
                          vc9p12intermediao3 : '',
                          vc9p12intermediao4 : '',                          
                          vc9p12intermediacuanto : ''},
                          dataType: "html",
                          success : function(obj)
                          {
                         //location.href = "../c_c9p7/fc_c9p7?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
                          }
                         });
                         
                          $.ajax({
                          url: "../c_c9p13intermedia/fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),
                          vidintegrante : $('#idintegrante').val(),    
                          vc9p13intermediao1 : '',          
                          vc9p13intermediao2 : '',
                          vc9p13intermediao3 : '',                                                 
                          vc9p13intermediacuanto : ''},
                          dataType: "html",
                          success : function(obj)
                          {
                         //location.href = "../c_c9p7/fc_c9p7?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
                          }
                         });
                         
                          $.ajax({
                          url: "../c_c9p14intermedia/fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),
                          vidintegrante : $('#idintegrante').val(),    
                          vc9p14intermediao1 : '',          
                          vc9p14intermediao2 : '',
                          vc9p14intermediao3 : '',
                          vc9p14intermediao4 : '',                          
                          vc9p14intermediacuanto : ''},
                          dataType: "html",
                          success : function(obj)
                          {
                         //location.href = "../c_c9p7/fc_c9p7?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
                          }
                         });
                         
//                          $.ajax({
//                          url: "../c_c9p15/fc_actualizar",
//                          type: "GET",
//                          data: {vfolio : $('#folio').val(),
//                          vidintegrante : $('#idintegrante').val(),    
//                          vvalorc9p15 : '',
//                          vvalorc9p15cual : ''},
//                          dataType: "html",
//                          success : function(obj)
//                          {
//                         //location.href = "../c_c9p7/fc_c9p7?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
//                          }
//                         });
                         
                          $.ajax({
                          url: "../c_c9p16intermedia/fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),
                          vidintegrante : $('#idintegrante').val(),    
                          vvalorc9p16intermedia : ''},
                          dataType: "html",
                          success : function(obj)
                          {
                         //location.href = "../c_c9p7/fc_c9p7?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
                          }
                         });
                         
//                          $.ajax({
//                          url: "../c_c9p17intermedia/fc_actualizar",
//                          type: "GET",
//                          data: {vfolio : $('#folio').val(),
//                          vidintegrante : $('#idintegrante').val(),    
//                          vvalorc9p17 : ''},
//                          dataType: "html",
//                          success : function(obj)
//                          {
//                         //location.href = "../c_c9p7/fc_c9p7?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
//                          }
//                         });
                         
//                          $.ajax({
//                          url: "../c_c9p18/fc_actualizar",
//                          type: "GET",
//                          data: {vfolio : $('#folio').val(),
//                          vidintegrante : $('#idintegrante').val(),    
//                          vvalorc9p18 : ''},
//                          dataType: "html",
//                          success : function(obj)
//                          {
//                         //location.href = "../c_c9p7/fc_c9p7?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
//                          }
//                         });
                         
//                          $.ajax({
//                          url: "../c_c9p19/fc_actualizar",
//                          type: "GET",
//                          data: {vfolio : $('#folio').val(),
//                          vidintegrante : $('#idintegrante').val(),    
//                          vvalorc9p19 : ''},
//                          dataType: "html",
//                          success : function(obj)
//                          {
//                         //location.href = "../c_c9p7/fc_c9p7?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
//                          }
//                         });
                         
                          $.ajax({
                          url: "../c_c9p20intermedia/fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),
                          vidintegrante : $('#idintegrante').val(),    
                          vvalorc9p20intermedia : ''},
                          dataType: "html",
                          success : function(obj)
                          {
                         //location.href = "../c_c9p7/fc_c9p7?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
                          }
                         });
                         
                          $.ajax({
                          url: "../c_c9p21intermedia/fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),
                          vidintegrante : $('#idintegrante').val(),    
                          vvalorc9p21intermedia : ''},
                          dataType: "html",
                          success : function(obj)
                          {
                         //location.href = "../c_c9p7/fc_c9p7?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
                          }
                         });
                         
//                          $.ajax({
//                          url: "../c_c9p22/fc_actualizar",
//                          type: "GET",
//                          data: {vfolio : $('#folio').val(),
//                          vidintegrante : $('#idintegrante').val(),    
//                          vvalorc9p22 : '',
//                          vvalorc9p22cual : ''},
//                          dataType: "html",
//                          success : function(obj)
//                          {
//                         //location.href = "../c_c9p7/fc_c9p7?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
//                          }
//                         });
                         
                          $.ajax({
                          url: "../c_c9p23intermedia/fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),
                          vidintegrante : $('#idintegrante').val(),    
                          vvalorc9p23intermedia : ''},
                          dataType: "html",
                          success : function(obj)
                          {
                         //location.href = "../c_c9p7/fc_c9p7?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
                          }
                         });
                         
                          $.ajax({
                          url: "../c_c9p24intermedia/fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),
                          vidintegrante : $('#idintegrante').val(),    
                          vvalorc9p24intermedia : ''},
                          dataType: "html",
                          success : function(obj)
                          {
                         //location.href = "../c_c9p7/fc_c9p7?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
                          }
                         });
                         
                          $.ajax({
                          url: "../c_c9p25intermedia/fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),
                          vidintegrante : $('#idintegrante').val(),    
                          vvalorc9p25intermedia : ''},
                          dataType: "html",
                          success : function(obj)
                          {
                         //location.href = "../c_c9p7/fc_c9p7?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
                          }
                         });

   
        }
        
         else if ($('#valorc9p3intermedia').val() !== 'c9p3intermediao1' && $('#valorc9p4').val() === '98')
         {               
                         $.ajax({
                          url: "../c_c9p4intermedia/fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),
                          vidintegrante : $('#idintegrante').val(),    
                          vvalorc9p4intermedia : ''},
                          dataType: "html",
                          success : function(obj)
                          {
                         //location.href = "../c_c8p7/fc_c8p7?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
                          }
                         });
                         
                       
                         }
         else  if ($('#valorc9p3intermedia').val() !== '' )
               {
                // location.href = "../c_c9p4/fc_c9p4?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +""; 
                 $.ajax({
                          url: "../c_c9p4intermedia/fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),
                          vidintegrante : $('#idintegrante').val(),    
                          vvalorc9p4intermedia : ''},
                          dataType: "html",
                          success : function(obj)
                          {
                         //location.href = "../c_c8p7/fc_c8p7?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
                          }
                         });
               }



}
function validarguardarc9p3intermedia()
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
function validarbolitasytextoc9p3intermedia(div,campo)
{ //alert(div + ' juanpis ' + campo);
   if(($('#'+ campo).val() == '') || ($('#'+ campo).val() == '0'))
   { 
       $('#' + div).addClass(' has-error');
   }
   else
   { 
       $('#' + div).removeClass('has-error');
   }
    validarguardarc9p3intermedia();
}
// colocar opcion para todos
function colocaropcionc9p3intermedia(opcion,campoval,divcampo)
{
    //alert(opcion);
    $('#' + campoval).val(opcion);
    
    if(opcion == 'c9p3intermediao6')
        {
           // alert('aca lo muestra');
            $('#c9p3intermediacualmostrar').show(1000);
            $('#c9p3intermediacual').val('');
            $('#c9p3intermediacualdiv').addClass(' has-error');            
        }
        else
        {
            //alert('aca lo oculta');
            $('#c9p3intermediacualmostrar').hide(1000);
            $('#c9p3intermediacual').val('98');
            $('#c9p3intermediacualdiv').removeClass(' has-error');            
        }
        
        
        
        
    validarbolitasytextoc9p3intermedia(divcampo,campoval);
}
//de aca para arriba es logica de bolas y textos
function validarcampotexcuadros(div,campo,ncampos)
{
    validarbolitasytexto(div,campo);
    validarcuadrosc9p3intermedia(div,ncampos);
}
</script>
</html>