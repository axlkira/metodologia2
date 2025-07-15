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
        <input type="text" class="form-control input-sm" id="edad" name="edad" style="display:none"  placeholder="" value="<?php echo($arraydatosgenerales['eedadintegrante']); ?>">
        <input type="text" class="form-control input-sm" id="sexo" name="sexo"  style="display:none"   placeholder="" value="<?php echo($arraydatosgenerales['esexointegrante']); ?>">
        <input type="text" class="form-control input-sm" id="c5p20" name="c5p20" style="display:none"   placeholder="" value="<?php echo($arrayrespuestas['ec5p20']); ?>">
        <input type="text" class="form-control input-sm" id="c5p211o1" name="c5p211o1" style="display:none"   placeholder="" value="<?php echo($arrayrespuestas['ec5p211o1']); ?>">
        <!--fin para imprimir el idintegrante y llevarlo-->
<hr>
        <form class="form-group" name="formulario" id="formulario">

            <!--inicio radio una sola seleccion-->
            <div class="row">
            <div id="c5p21div" name="c5p21div" <?php if($arrayrespuestas['ec5p21']==''){echo('class="form-group col-md-12 form-group-sm has-error"');}else{echo('class="form-group col-md-12 form-group-sm"');}?>>   
                <label class="control-label">21.  ¿En los ultimos 12 meses ha asistido a control de niño sano o control de crecimiento y desarrollo?  (Unica Respuesta)
                    <button type="button" id="vayuda" name="vayuda" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModal">
                        <span class="glyphicon glyphicon-question-sign" aria-hidden="true"></span> Ayuda
                    </button>
                </label>
                <div class="radio">
                    <label><!--en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="c5p21" id="c5p21" onclick="colocaropcion('1','valorc5p21','c5p21div');" value="1" <?php if($arrayrespuestas['ec5p21']=='1'){echo('checked');}?>>
                        Si
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="c5p21" id="c5p21" onclick="colocaropcion('2','valorc5p21','c5p21div');" value="2" <?php if($arrayrespuestas['ec5p21']=='2'){echo('checked');}?>>
                        No
                    </label>             
                </div>               
             <input type="text" class="form-control" id="valorc5p21" name="valorc5p21" style="display:none" placeholder="Text input" value="<?php echo($arrayrespuestas['ec5p21']); ?>">
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
            <?php if($arrayrespuestas['ec5p21']=="")
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
                          data: {vfolio : $('#folio').val(),vidintegrante : $('#idintegrante').val(), vvalorc5p21 : $('#valorc5p21').val()},    
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
                          data: {vfolio : $('#folio').val(),vidintegrante : $('#idintegrante').val(), vvalorc5p21 : $('#valorc5p21').val()},    
                          dataType: "html",
                          success : function(obj){                      
                          botonguardar();
                          }
                        });                    
        });
        
         $("#siguiente").click(function ()
       {
        botonsiguiente();
        if($('#valorc5p21').val() === '1' && $('#edad').val() < 6)
          {              
              //alert('salto');
                           $.ajax({
                           url: "../c_c5p211/fc_actualizar",
                           type: "GET",
                           data: {vfolio : $('#folio').val(),
                           vidintegrante : $('#idintegrante').val(),   
                           vc5p211o1 : '98',          
                          vc5p211o2 : '98',
                          vc5p211o3 : '98',
                          vc5p211o4 : '98',
                          vc5p211o5 : '98',                                                   
                          vc5p211cual : '98'},
                           dataType: "html",
                           success : function(obj)
                           {
                          location.href = "../c_c5p22/fc_c5p22?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
                           }
                          });
                          }
          else if (($('#valorc5p21').val() === '2' && $('#c5p211o1').val() === '98'))
          { 
              // alert('no salto borra');             
              $.ajax({
                           url: "../c_c5p201/fc_actualizar",
                           type: "GET",
                           data: {vfolio : $('#folio').val(),
                           vidintegrante : $('#idintegrante').val(),
                          vc5p211o1 : '',          
                          vc5p211o2 : '',
                          vc5p211o3 : '',
                          vc5p211o4 : '',
                          vc5p211o5 : '',                                                   
                          vc5p211cual :''},
                           dataType: "html",
                           success : function(obj)
                           {
                           location.href = "../c_c5p211/fc_c5p211?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
                           }
                          });
                          }
                          
          else if (($('#valorc5p21').val() === '2'))
          {  
              // alert('no salto borra');             

              location.href = "../c_c5p211/fc_c5p211?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
          }                 
          else
                {
                    //alert('salto');
                           $.ajax({
                           url: "../c_c5p211/fc_actualizar",
                           type: "GET",
                           data: {vfolio : $('#folio').val(),
                           vidintegrante : $('#idintegrante').val(),   
                           vc5p211o1 : '98',          
                          vc5p211o2 : '98',
                          vc5p211o3 : '98',
                          vc5p211o4 : '98',
                          vc5p211o5 : '98',                                                   
                          vc5p211cual : '98'},
                           dataType: "html",
                           success : function(obj)
                           {
                          location.href = "../c_capituloshogar/fc_capituloshogar?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
                           }
                          });}
            });

        $("#anterior").click(function ()
        {
         botonanterior();
          if($('#c5p20').val() !== 'c5p20o3' && $('#c5p20').val() !== '98')
          {
              //alert('saltoooo');
         location.href = "../c_c5p20/fc_c5p20?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
          }
          else if($('#edad').val()>= 0 && $('#edad').val() <= 10 )
          {
              //alert('a la p 7');
         location.href = "../c_c5p7/fc_c5p7?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
          }
          else
          {
              // alert('no saltoooo');
              location.href = "../c_c5p201/fc_c5p201?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
          }
         
//          else
//          {
//               alert('no saltoooo');
//              location.href = "../c_c5p201/fc_c5p201?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
//          }
        });
              
//        $("#anterior").click(function ()
//        {
//         botonanterior();
//         location.href = "../c_c5p20/fc_c5p20?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";     
//        //location.href = "../c_capitulosintegrantes/fc_capitulosintegrantes?idintegrante=" + $('#idintegrante').val()+ "&idintegrante="+"&idintegrante=0";                    
//        });

//para cargar variables capitulo, pregunta,encuestador,vivienda,barra



cargardatosgenerales('<?php echo($arraydatosgenerales['ecapitulo']); ?>','Pregunta 21 de 22','<?php echo($arraydatosgenerales['enomcoges']); ?>','<?php echo($arraydatosgenerales['enombreintegrante']." "." - "." "."Sexo:"." ".$arraydatosgenerales['esexointegrante']."   "."  -  "."   "."Edad:"."   ".$arraydatosgenerales['eedadintegrante']); ?>','95');
//control del boton ayuda
botonayuda();

});

</script>
</html>