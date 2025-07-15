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
        <input type="text" class="form-control input-sm" id="edad" name="edad"  style="display:none" placeholder="" value="<?php echo($arraydatosgenerales['eedadintegrante']); ?>">
        <input type="text" class="form-control input-sm" id="sexo" name="sexo"  style="display:none"   placeholder="" value="<?php echo($arraydatosgenerales['esexointegrante']); ?>">
        <input type="text" class="form-control input-sm" id="c5p5o5" name="c5p5o5"   style="display:none" placeholder="" value="<?php echo($arrayrespuestas['ec5p5o5']); ?>">
        <!--fin para imprimir el idintegrante y llevarlo-->
<hr>
        <form class="form-group" name="formulario" id="formulario">

            <!--inicio radio una sola seleccion-->
            <div class="row">
            <div id="c5p4div" name="c5p4div" <?php if($arrayrespuestas['ec5p4']==''){echo('class="form-group col-md-12 form-group-sm has-error"');}else{echo('class="form-group col-md-12 form-group-sm"');}?>>   
                <label class="control-label">4. ¿ Conoce usted los derechos en Salud Sexual y Reproductiva? (Unica Respuesta)
                    <button type="button" id="vayuda" name="vayuda" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModal">
                        <span class="glyphicon glyphicon-question-sign" aria-hidden="true"></span> Ayuda
                    </button>
                </label>
                <div class="radio">
                    <label><!--en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="c5p4" id="c5p4" onclick="colocaropcion('1','valorc5p4','c5p4div');" value="1" <?php if($arrayrespuestas['ec5p4']=='1'){echo('checked');}?>>
                        Si
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="c5p4" id="c5p4" onclick="colocaropcion('2','valorc5p4','c5p4div');" value="2" <?php if($arrayrespuestas['ec5p4']=='2'){echo('checked');}?>>
                        No
                    </label>             
                </div>               
                 
                 
               
                
                <input type="text" class="form-control" id="valorc5p4" name="valorc5p4" style="display:none" placeholder="Text input" value="<?php echo($arrayrespuestas['ec5p4']); ?>">
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
            <?php if($arrayrespuestas['ec5p4']=="")
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
                          data: {vfolio : $('#folio').val(),vidintegrante : $('#idintegrante').val(),
                          vvalorc5p4 : $('#valorc5p4').val()},    
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
                          data: {vfolio : $('#folio').val(),vidintegrante : $('#idintegrante').val(),
                          vvalorc5p4 : $('#valorc5p4').val()},    
                          dataType: "html",
                          success : function(obj){                      
                          botonguardar();
                          }
                        });                    
        });
          $("#siguiente").click(function ()
       {
        botonsiguiente();
        
        if(($('#edad').val() < 12) && ($('#edad').val() >= 10)  )
        
        {
            $.ajax({
                           url: "../c_c5p5/fc_actualizar",
                           type: "GET",
                           data: {vfolio : $('#folio').val(),
                          vidintegrante : $('#idintegrante').val(),
                          vc5p5o1 : '98',          
                          vc5p5o2 : '98',
                          vc5p5o3 : '98',
                          vc5p5o4 : '98',
                          vc5p5o5 : '98',
                          vc5p5o6 : '98',
                          vc5p5o7 : '98',
                          vc5p5o8 : '98',
                          vc5p5o9 : '98',
                          vc5p5o10 : '98',
                          vc5p5o11 : '98',
                          vc5p5o12 : '98',
                          vc5p5o13 : '98',
                          vc5p5cual : '98'},    
                           dataType: "html",
                           success : function(obj)
                           {
//                          location.href = "../c_c5p7/fc_c5p7?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
                           }
                          });
                          
                          $.ajax({
                           url: "../c_c5p6/fc_actualizar",
                           type: "GET",
                           data: {vfolio : $('#folio').val(),
                          vidintegrante : $('#idintegrante').val(),
                          vc5p6o1 : '98',          
                          vc5p6o2 : '98',
                          vc5p6o3 : '98',
                          vc5p6o4 : '98',
                          vc5p6o5 : '98',
                          vc5p6o6 : '98',
                          vc5p6o7 : '98',
                          vc5p6o8 : '98',
                          vc5p6o9 : '98',
                          vc5p6o10 : '98',
                          vc5p6o11 : '98',
                          vc5p6cual : '98',
                          
                          vc5p6o12 :'98',
                          vc5p6o13 :'98',
                          vc5p6o14 :'98',
                          vc5p6o15 :'98'},    
                           dataType: "html",
                           success : function(obj)
                           {
//                          location.href = "../c_c5p7/fc_c5p7?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
                           }
                          });
                          
                          
                          $.ajax({
                           url: "../c_c5p7/fc_actualizar",
                           type: "GET",
                           data: {vfolio : $('#folio').val(),
                               vidintegrante : $('#idintegrante').val(),
                               vvalorc5p7 : '98',
                               vvalorc5p7resultado : '98'},    
                           dataType: "html",
                           success : function(obj)
                           {
//                          location.href = "../c_c5p7/fc_c5p7?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
                           }
                          });
                          
                          $.ajax({
                           url: "../c_c5p8/fc_actualizar",
                           type: "GET",
                           data: {vfolio : $('#folio').val(),
                          vidintegrante : $('#idintegrante').val(),
                          vc5p8o1 : '98',          
                          vc5p8o2 : '98',
                          vc5p8o3 : '98',
                          vc5p8o4 : '98',
                          vc5p8o5 : '98'},   
                           dataType: "html",
                           success : function(obj)
                           {
//                          location.href = "../c_c5p7/fc_c5p7?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
                           }
                          });
                          
                           $.ajax({
                           url: "../c_c5p9/fc_actualizar",
                           type: "GET",
                           data: {vfolio : $('#folio').val(),
                               vidintegrante : $('#idintegrante').val(),
                               vvalorc5p9 : '98'},   
                           dataType: "html",
                           success : function(obj)
                           {
//                          location.href = "../c_c5p7/fc_c5p7?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
                           }
                          });
                          
                          $.ajax({
                           url: "../c_c5p10/fc_actualizar",
                           type: "GET",
                           data: {vfolio : $('#folio').val(),
                          vidintegrante : $('#idintegrante').val(),
                          vc5p10o1 : '98',          
                          vc5p10o2 : '98',
                          vc5p10o3 : '98',
                          vc5p10o4 : '98',
                          vc5p10o5 : '98',                          
                          vc5p10cual : '98'},   
                           dataType: "html",
                           success : function(obj)
                           {
//                          location.href = "../c_c5p7/fc_c5p7?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
                           }
                          });                          
                          
                          $.ajax({
                           url: "../c_c5p11/fc_actualizar",
                           type: "GET",
                           data: {vfolio : $('#folio').val(),
                               vidintegrante : $('#idintegrante').val(), 
                               vvalorc5p11 : '98',
                               vvalorc5p11cual : '98'},    
                               dataType: "html",
                           success : function(obj)
                           {
//                          location.href = "../c_c5p7/fc_c5p7?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
                           }
                          });
                          
                           $.ajax({
                          url: "../c_c5p12/fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),
                              vidintegrante : $('#idintegrante').val(), 
                              vvalorc5p12 : '98'},    
                          dataType: "html",
                           success : function(obj)
                           {
                                          
                           }
                          });
                          
                          
                          
                          
                          $.ajax({
                          url: "../c_c5p121/fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),
                          vidintegrante : $('#idintegrante').val(),
                          vc5p121o1 : '98',          
                          vc5p121o2 : '98',
                          vc5p121o3 : '98',
                          vc5p121o4 : '98',
                          vc5p121o5 : '98',
                          vc5p121o6 : '98',
                          vc5p121o7 : '98',
                          vc5p121o8 : '98',
                          vc5p121o9 : '98'},
                          dataType: "html",
                           success : function(obj)
                           {
                                          
                           }
                          });
                          
                           $.ajax({
                          url: "../c_c5p13/fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),
                              vidintegrante : $('#idintegrante').val(), 
                              vvalorc5p13 : '98'},    
                          dataType: "html",
                           success : function(obj)
                           {
                                          
                           }
                          });
                          
                          $.ajax({
                          url: "../c_c5p131/fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),
                           vidintegrante : $('#idintegrante').val(),
                          vc5p131o1 : '98',          
                          vc5p131o2 : '98',
                          vc5p131o3 : '98',
                          vc5p131o4 : '98',
                          vc5p131o5 : '98',                                                   
                          vc5p131cual :'98'},    
                          dataType: "html",
                           success : function(obj)
                           {
                                          
                           }
                          });
                          
                          
                          $.ajax({
                          url: "../c_c5p14/fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),vidintegrante : $('#idintegrante').val(),
                          vvalorc5p14 : '98',
                          vvalorc5p14esquema : '98'},    
                          dataType: "html",
                           success : function(obj)
                           {
                         location.href = "../c_capitulosintegrante/fc_capitulosintegrante?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";
                           }
                          });
        }
        
        else if($('#edad').val() > 12 && ($('#c5p5o5') === '98') )
            
        {
            $.ajax({
                           url: "../c_c5p5/fc_actualizar",
                           type: "GET",
                           data: {vfolio : $('#folio').val(),
                          vidintegrante : $('#idintegrante').val(),
                          vc5p5o1 : '',          
                          vc5p5o2 : '',
                          vc5p5o3 : '',
                          vc5p5o4 : '',
                          vc5p5o5 : '',
                          vc5p5o6 : '',
                          vc5p5o7 : '',
                          vc5p5o8 : '',
                          vc5p5o9 : '',
                          vc5p5o10 : '',
                          vc5p5o11 : '',
                          vc5p5o12 : '',
                          vc5p5o13 : '',
                          vc5p5cual : ''},    
                           dataType: "html",
                           success : function(obj)
                           {
//                          location.href = "../c_c5p7/fc_c5p7?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
                           }
                          });
                          
                          $.ajax({
                           url: "../c_c5p6/fc_actualizar",
                           type: "GET",
                           data: {vfolio : $('#folio').val(),
                          vidintegrante : $('#idintegrante').val(),
                          vc5p6o1 : '',          
                          vc5p6o2 : '',
                          vc5p6o3 : '',
                          vc5p6o4 : '',
                          vc5p6o5 : '',
                          vc5p6o6 : '',
                          vc5p6o7 : '',
                          vc5p6o8 : '',
                          vc5p6o9 : '',
                          vc5p6o10 : '',
                          vc5p6o11 : '',
                          vc5p6cual : '',
                          
                          vc5p6o12 :'',
                          vc5p6o13 :'',
                          vc5p6o14 :'',
                          vc5p6o15 :''},    
                           dataType: "html",
                           success : function(obj)
                           {
//                          location.href = "../c_c5p7/fc_c5p7?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
                           }
                          });
                          
                          
                          $.ajax({
                           url: "../c_c5p7/fc_actualizar",
                           type: "GET",
                           data: {vfolio : $('#folio').val(),
                               vidintegrante : $('#idintegrante').val(),
                               vvalorc5p7 : '',
                               vvalorc5p7resultado : ''},    
                           dataType: "html",
                           success : function(obj)
                           {
//                          location.href = "../c_c5p7/fc_c5p7?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
                           }
                          });
                          
                          $.ajax({
                           url: "../c_c5p8/fc_actualizar",
                           type: "GET",
                           data: {vfolio : $('#folio').val(),
                          vidintegrante : $('#idintegrante').val(),
                          vc5p8o1 : '',          
                          vc5p8o2 : '',
                          vc5p8o3 : '',
                          vc5p8o4 : '',
                          vc5p8o5 : ''},   
                           dataType: "html",
                           success : function(obj)
                           {
//                          location.href = "../c_c5p7/fc_c5p7?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
                           }
                          });
                          
                           $.ajax({
                           url: "../c_c5p9/fc_actualizar",
                           type: "GET",
                           data: {vfolio : $('#folio').val(),
                               vidintegrante : $('#idintegrante').val(),
                               vvalorc5p9 : ''},   
                           dataType: "html",
                           success : function(obj)
                           {
//                          location.href = "../c_c5p7/fc_c5p7?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
                           }
                          });
                          
                          $.ajax({
                           url: "../c_c5p10/fc_actualizar",
                           type: "GET",
                           data: {vfolio : $('#folio').val(),
                          vidintegrante : $('#idintegrante').val(),
                          vc5p10o1 : '',          
                          vc5p10o2 : '',
                          vc5p10o3 : '',
                          vc5p10o4 : '',
                          vc5p10o5 : '',                          
                          vc5p10cual : ''},   
                           dataType: "html",
                           success : function(obj)
                           {
//                          location.href = "../c_c5p7/fc_c5p7?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
                           }
                          });                          
                          
                          $.ajax({
                           url: "../c_c5p11/fc_actualizar",
                           type: "GET",
                           data: {vfolio : $('#folio').val(),
                               vidintegrante : $('#idintegrante').val(), 
                               vvalorc5p11 : '',
                               vvalorc5p11cual : ''},    
                               dataType: "html",
                           success : function(obj)
                           {
//                          location.href = "../c_c5p7/fc_c5p7?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
                           }
                          });
                          
                           $.ajax({
                          url: "../c_c5p12/fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),
                              vidintegrante : $('#idintegrante').val(), 
                              vvalorc5p12 : ''},    
                          dataType: "html",
                           success : function(obj)
                           {
                                          
                           }
                          });
                          
                          
                          
                          
                          $.ajax({
                          url: "../c_c5p121/fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),
                          vidintegrante : $('#idintegrante').val(),
                          vc5p121o1 : '',          
                          vc5p121o2 : '',
                          vc5p121o3 : '',
                          vc5p121o4 : '',
                          vc5p121o5 : '',
                          vc5p121o6 : '',
                          vc5p121o7 : '',
                          vc5p121o8 : '',
                          vc5p121o9 : ''},
                          dataType: "html",
                           success : function(obj)
                           {
                                          
                           }
                          });
                          
                           $.ajax({
                          url: "../c_c5p13/fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),
                              vidintegrante : $('#idintegrante').val(), 
                              vvalorc5p13 : ''},    
                          dataType: "html",
                           success : function(obj)
                           {
                                          
                           }
                          });
                          
                          $.ajax({
                          url: "../c_c5p131/fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),
                           vidintegrante : $('#idintegrante').val(),
                          vc5p131o1 : '',          
                          vc5p131o2 : '',
                          vc5p131o3 : '',
                          vc5p131o4 : '',
                          vc5p131o5 : '',                                                   
                          vc5p131cual :''},    
                          dataType: "html",
                           success : function(obj)
                           {
                                          
                           }
                          });
                          
                          
                          $.ajax({
                          url: "../c_c5p14/fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),vidintegrante : $('#idintegrante').val(),
                          vvalorc5p14 : '',
                          vvalorc5p14esquema : ''},    
                          dataType: "html",
                           success : function(obj)
                           {
                         location.href = "../c_c5p5/fc_c5p5?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() ; 
                           }
                          });
        }
        
        else
        {
           location.href = "../c_c5p5/fc_c5p5?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() ;                     
        }
        
        ///////////////////////////////////////////////////////////
//        if ($('#edad').val()>= 0 && $('#edad').val() <= 10 )
//        ///////////////////////////////////////////////////////////
//        {             //alert('salto al 21');
//                        $.ajax({
//                         url: "fc_spsaltoc5p4ap21",
//                         type: "GET",
//                         data: {vfolio : $('#folio').val(),
//                         vidintegrante : $('#idintegrante').val()},
//                         dataType: "html",
//                         success : function(obj){                      
//                         location.href = "../c_c5p21/fc_c5p21?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
//                         }
//                       });
//        }
//          else if($('#edad').val() > 10 && $('#edad').val() <= 12)
//        {   //alert('salto capitlo');          
//            $.ajax({
//                         url: "fc_spsaltoc5p4ac6",
//                         type: "GET",
//                         data: {vfolio : $('#folio').val(),
//                         vidintegrante : $('#idintegrante').val()},
//                         dataType: "html",
//                         success : function(obj){                      
//                         location.href = "../c_capitulosintegrante/fc_capitulosintegrante?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                 
//                         }
//                       });
//        }
//          else
//        {
//            //alert('no hace nada');
//                    location.href = "../c_c5p5/fc_c5p5?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
//        }
        });

        

//        $("#siguiente").click(function ()
//        {
//         botonsiguiente();
//         location.href = "../c_c5p8/fc_c5p8?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
//
//        });
         $("#anterior").click(function ()
        {
         botonanterior();
          if($('#edad').val() >10)
          {
         location.href = "../c_c5p3/fc_c5p3?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
          }
          else
          {
              location.href = "../c_c5p3/fc_c5p3?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
          }
        });
//        $("#anterior").click(function ()
//        {
//         botonanterior();
//         location.href = "../c_c5p6/fc_c5p6?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";     
//        //location.href = "../c_capitulosintegrantes/fc_capitulosintegrantes?idintegrante=" + $('#idintegrante').val()+ "&idintegrante="+"&idintegrante=0";                    
//        });

//para cargar variables capitulo, pregunta,encuestador,vivienda,barra



cargardatosgenerales('<?php echo($arraydatosgenerales['ecapitulo']); ?>','Pregunta 4 de 14','<?php echo($arraydatosgenerales['enomcoges']); ?>','<?php echo($arraydatosgenerales['enombreintegrante']." "." - "." "."Sexo:"." ".$arraydatosgenerales['esexointegrante']."   "."  -  "."   "."Edad:"."   ".$arraydatosgenerales['eedadintegrante']); ?>','20');
//control del boton ayuda
botonayuda();

});

</script>
</html>