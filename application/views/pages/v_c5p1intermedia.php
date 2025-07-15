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
<!--        <input type="text" class="form-control input-sm" id="c5p2" name="c5p2"  style="display:none"  placeholder="" value="<?php echo($arrayrespuestas['ec5p2']); ?>">-->
          <input type="text" class="form-control input-sm" id="doccogestor" name="edad" style="display:none"   placeholder="" value="<?php echo($doccogestor); ?>">
        <!--fin para imprimir el idintegrante y llevarlo-->
<hr>
        <form class="form-group" name="formulario" id="formulario">

            <!--inicio radio una sola seleccion-->
            <div class="row">
            <div id="c5p1intermediadiv" name="c5p1intermediadiv" <?php if($arrayrespuestas['ec5p1intermedia']==''){echo('class="form-group col-md-12 form-group-sm has-error"');}else{echo('class="form-group col-md-12 form-group-sm"');}?>>   
                <label class="control-label">1. Está afiliado, es cotizante o beneficiario de alguna entidad de seguridad social en salud (Unica Respuesta)
                    <button type="button" id="vayuda" name="vayuda" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModal">
                        <span class="glyphicon glyphicon-question-sign" aria-hidden="true"></span> Ayuda
                    </button>
                </label>
                <div class="radio">
                    <label><!--en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="c5p1intermedia" id="c5p1intermedia" onclick="colocaropcion('1','valorc5p1intermedia','c5p1intermediadiv');" value="1" <?php if($arrayrespuestas['ec5p1intermedia']=='1'){echo('checked');}?>>
                        Si
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="c5p1intermedia" id="c5p1intermedia" onclick="colocaropcion('2','valorc5p1intermedia','c5p1intermediadiv');" value="2" <?php if($arrayrespuestas['ec5p1intermedia']=='2'){echo('checked');}?>>
                        No
                    </label>             
                </div>               
                 
                 
               
                
                <input type="text" class="form-control" id="valorc5p1intermedia" name="valorc5p1intermedia" style="display:none" placeholder="Text input" value="<?php echo($arrayrespuestas['ec5p1intermedia']); ?>">
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
            
            
            <div class="modal fade bs-example-modal-sm" id="modalsinco" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" data-backdrop="static">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title" id="myModalLabel"><img src="<?php echo IMAGEN, 'cargando.gif'; ?>" alt="Brand"> Guardando...</h4>
        </div>
        <div class="modal-body">
        
        Por favor no cierre este dialogo... hasta que salga el mensaje de finalizacion.
        </div>
    </div>
  </div>
</div>

            <!--inicio botonera guardar y actualizar-->
            <?php if($arrayrespuestas['ec5p1intermedia']=="")
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
                          data: {vfolio : $('#folio').val(),vidintegrante : $('#idintegrante').val(), vvalorc5p1intermedia : $('#valorc5p1intermedia').val()},    
                          dataType: "html",
                          success : function(obj){                      
                          botonguardar();
                          
                           //saltomenoresedades();
                           //saltarc9p14intermedia();
                          }
                        });                    
        });

        
        $("#actualizar").click(function ()
        {
            
                        $.ajax({
                          url: "fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),vidintegrante : $('#idintegrante').val(), vvalorc5p1intermedia : $('#valorc5p1intermedia').val()},    
                          dataType: "html",
                          success : function(obj){       
                             
                         botonguardar();
                         //saltomenoresedades();
                         //saltarc9p14intermedia();
                          }
                        });                    
        });
        
         $("#capitulos").click(function ()
        {
            
            location.href = "../c_capitulosintegranteintermedia/fc_capitulosintegranteintermedia?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() ;                    
         
            });
        

        $("#siguiente").click(function ()
        {
          botonsiguiente();
          location.href = "../c_c5pextraintermedia/fc_c5pextraintermedia?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
//        if($('#valorc5p1intermedia').val() === '1')
//          {                $.ajax({
//                           url: "../c_c5p2/fc_actualizar",
//                           type: "GET",
//                           data: {vfolio : $('#folio').val(),
//                           vidintegrante : $('#idintegrante').val(),    
//                           vvalorc5p2 : '98'},
//                           dataType: "html",
//                           success : function(obj)
//                           {
//                          location.href = "../c_c5p3/fc_c5p3?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
//                           }
//                          });
//                          }
//          else if (($('#valorc5p1intermedia').val() === '2' && $('#c5p2').val() === '98'))
//          {                $.ajax({
//                           url: "../c_c5p2/fc_actualizar",
//                           type: "GET",
//                           data: {vfolio : $('#folio').val(),
//                           vidintegrante : $('#idintegrante').val(),
//                           vvalorc5p2 : ''},
//                           dataType: "html",
//                           success : function(obj)
//                           {
//                           location.href = "../c_c5p2/fc_c5p2?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
//                           }
//                          });
//                          }
//          else
//                {
//                    location.href = "../c_c5p2/fc_c5p2?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
//                }
            });    
        
//         botonsiguiente();
//         location.href = "../c_c5p2/fc_c5p2?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
//
//        });
//              
        $("#anterior").click(function ()
        {
         //botonanterior();
        // location.href = "../c_integranteintermedia/fc_integranteintermedia?folio=" + $('#folio').val() +  "&idintegrante=0" + "&doccogestor="+ $('#doccogestor').val() +"&variable=51";       
         location.href = "../c_capitulosintegranteintermedia/fc_capitulosintegranteintermedia?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() ;                    
        //location.href = "../c_capitulosintegrantes/fc_capitulosintegrantes?idintegrante=" + $('#idintegrante').val()+ "&idintegrante="+"&idintegrante=0";                    
        });

//para cargar variables capitulo, pregunta,encuestador,vivienda,barra

function saltomenoresedades()
{
    if($('#edad').val() < 18)
    {
        
                                   $.ajax({
                                    url: "../c_c9p3intermedia/fc_actualizar",
                                    type: "GET",
                                    data: {vfolio : $('#folio').val()
                                        ,vidintegrante : $('#idintegrante').val()
                                        , vvalorc9p3intermedia :'98'
                                        ,vvalorc9p3intermediacual : '98'
                                    },    
                                          dataType: "html",
                                    success : function(obj)
                                    {
                                        
                                     $.ajax({
                                    url: "../c_c9p4intermedia/fc_actualizar",
                                    type: "GET",
                                    data: {vfolio : $('#folio').val()
                                        ,vidintegrante : $('#idintegrante').val()
                                        , vvalorc9p4intermedia : '98'},    
                                           dataType: "html",
                                    success : function(obj)
                                    {
                                        
                                         $.ajax({
                                    url: "../c_c9p7intermedia/fc_actualizar",
                                    type: "GET",
                                     data: {vfolio : $('#folio').val(),
                                    vidintegrante : $('#idintegrante').val(),    
                                    vvalorc9p7intermedia : '98'},
                                    dataType: "html",
                                    success : function(obj)
                                    {
                                        
                                        $.ajax({
                                    url: "../c_c9p8intermedia/fc_actualizar",
                                    type: "GET",
                                    data: {vfolio : $('#folio').val(),
                                   vidintegrante : $('#idintegrante').val(),    
                                   vvalorc9p8intermedia : '98',
                                   vvalorc9p8intermediacual : '98'},
                                   dataType: "html",
                                    success : function(obj)
                                    {
                                        
                                        
                                    $.ajax({
                                    url: "../c_c9p10intermedia/fc_actualizar",
                                    type: "GET",
                                    data: {vfolio : $('#folio').val(),
                                    vidintegrante : $('#idintegrante').val(),    
                                    vvalorc9p10intermedia : '98'},
                                    dataType: "html",
                                    success : function(obj)
                                    {
                                        
                                        
                                       $.ajax({
                                      url: "../c_c9p11intermedia/fc_actualizar",
                                      type: "GET",
                                      data: {vfolio : $('#folio').val(),
                                      vidintegrante : $('#idintegrante').val(),    
                                      vvalorc9p11intermedia : '98',
                                      vvalorc9p11intermediacuanto : '98',
                                      vvalorc9p11intermediaincluyo : '98'},
                                      dataType: "html",
                                    success : function(obj)
                                    {
                                      
                                      
                                      $.ajax({
                                         url: "../c_c9p12intermedia/fc_actualizar",
                                         type: "GET",
                                         data: {vfolio : $('#folio').val(),
                                         vidintegrante : $('#idintegrante').val(),    
                                         vc9p12intermediao1 : '98',          
                                         vc9p12intermediao2 : '98',
                                         vc9p12intermediao3 : '98',
                                         vc9p12intermediao4 : '98',                          
                                         vc9p12intermediacuanto : '98'},
                                         dataType: "html",
                                    success : function(obj)
                                    {
                                        
                                        $.ajax({
                                          url: "../c_c9p13intermedia/fc_actualizar",
                                          type: "GET",
                                          data: {vfolio : $('#folio').val(),
                                          vidintegrante : $('#idintegrante').val(),    
                                          vc9p13intermediao1 : '98',          
                                          vc9p13intermediao2 : '98',
                                          vc9p13intermediao3 : '98',                                                 
                                          vc9p13intermediacuanto : '98'},
                                          dataType: "html",
                                    success : function(obj)
                                    {
                                        
                                          $.ajax({
                                           url: "../c_c9p14intermedia/fc_actualizar",
                                           type: "GET",
                                           data: {vfolio : $('#folio').val(),
                                           vidintegrante : $('#idintegrante').val(),    
                                           vc9p14intermediao1 : '98',          
                                           vc9p14intermediao2 : '98',
                                           vc9p14intermediao3 : '98',
                                           vc9p14intermediao4 : '98',                          
                                           vc9p14intermediacuanto : '98'},
                                           dataType: "html",
                                    success : function(obj)
                                    {
                                        
                                        $.ajax({
                                           url: "../c_c9p16intermedia/fc_actualizar",
                                           type: "GET",
                                           data: {vfolio : $('#folio').val(),
                                           vidintegrante : $('#idintegrante').val(),    
                                           vvalorc9p16intermedia : '98'},
                                           dataType: "html",
                                    success : function(obj)
                                    {
                                        
                                            $.ajax({
                                           url: "../c_c9p19intermedia/fc_actualizar",
                                           type: "GET",
                                           data: {
                                            vfolio : $('#folio').val()
                                           ,vidintegrante : $('#idintegrante').val()
                                           ,vvalorc9p19intermedia : '98'},    
                                           dataType: "html",
                                    success : function(obj)
                                    {
                                        
                                        
                                          $.ajax({
                                          url: "../c_c9p20intermedia/fc_actualizar",
                                          type: "GET",
                                          data: {vfolio : $('#folio').val(),
                                          vidintegrante : $('#idintegrante').val(),    
                                          vvalorc9p20intermedia : '98'},
                                          dataType: "html",
                                    success : function(obj)
                                    {
                                         $.ajax({
                                          url: "../c_c9p21intermedia/fc_actualizar",
                                          type: "GET",
                                          data: {vfolio : $('#folio').val(),
                                          vidintegrante : $('#idintegrante').val(),    
                                          vvalorc9p21intermedia : '98'},
                                          dataType: "html",
                                    success : function(obj)
                                    {
                                        
                                        
                                          $.ajax({
                                        url: "../c_c9p23intermedia/fc_actualizar",
                                        type: "GET",
                                        data: {vfolio : $('#folio').val(),
                                        vidintegrante : $('#idintegrante').val(),    
                                        vvalorc9p23intermedia : '98'},
                                        dataType: "html",
                                    success : function(obj)
                                    {
                                        
                                           $.ajax({
                                       url: "../c_c9p24intermedia/fc_actualizar",
                                       type: "GET",
                                       data: {vfolio : $('#folio').val(),
                                       vidintegrante : $('#idintegrante').val(),    
                                       vvalorc9p24intermedia : '98'},
                                       dataType: "html",
                                    success : function(obj)
                                    {
                                        
                                      $.ajax({
                                        url: "../c_c9p25intermedia/fc_actualizar",
                                        type: "GET",
                                        data: {vfolio : $('#folio').val(),
                                        vidintegrante : $('#idintegrante').val(),    
                                        vvalorc9p25intermedia : '98'},
                                        dataType: "html",
                                    success : function(obj)
                                    {
                                        
                                          $.ajax({
                                        url: "../c_c9p26intermedia/fc_actualizar",
                                        type: "GET",
                                        data: {
                                            vfolio : $('#folio').val()
                                            ,vidintegrante : $('#idintegrante').val()
                                            , vvalorc9p26intermedia : '98'},    
                                         dataType: "html",
                                    success : function(obj)
                                    {
                                        
                                           $.ajax({
                                        url: "../c_c9p27intermedia/fc_actualizar",
                                        type: "GET",
                                        data: {vfolio : $('#folio').val(),
                                        vidintegrante : $('#idintegrante').val(),
                                        vc9p27intermediao1 : '98',
                                        vc9p27intermediao1cuanto : '98',
                                        vc9p27intermediao2 : '98',
                                        vc9p27intermediao2cuanto : '98',
                                        vc9p27intermediao3 : '98',
                                        vc9p27intermediao3cuanto : '98'},                      
                                        dataType: "html",
                                    success : function(obj)
                                    {
                                        
                                           $.ajax({
                                        url: "../c_c9p28intermedia/fc_actualizar",
                                        type: "GET",
                                         data: {vfolio : $('#folio').val(),
                                        vidintegrante : $('#idintegrante').val(),
                                        vc9p28intermediao1 : '98',
                                        vc9p28intermediao1cuanto : '98',
                                        vc9p28intermediao2 : '98',
                                        vc9p28intermediao2cuanto : '98',
                                        vc9p28intermediao3 : '98',
                                        vc9p28intermediao3cuanto : '98',
                                        vc9p28intermediao4 : '98',
                                        vc9p28intermediao4cuanto : '98',
                                        vc9p28intermediao5 : '98',
                                        vc9p28intermediao5cuanto : '98',
                                        vc9p28intermediao6 : '98',
                                        vc9p28intermediao6cuanto : '98',
                                         vc9p28intermediao7 : '98'},                      
                                        dataType: "html",
                                    success : function(obj)
                                    {
                                        
                                        $.ajax({
                                        url: "../c_c9p29intermedia/fc_actualizar",
                                        type: "GET",
                                         data: {vfolio : $('#folio').val(),
                                        vidintegrante : $('#idintegrante').val(),
                                        vc9p29intermediao1 : '98',
                                        vc9p29intermediao1cuanto : '98',
                                        vc9p29intermediao2 :'98',
                                        vc9p29intermediao2cuanto : '98',
                                        vc9p29intermediao3 : '98',
                                        vc9p29intermediao3cuanto : '98',
                                        vc9p29intermediao4 : '98',
                                        vc9p29intermediao4cuanto : '98',
                                        vc9p29intermediao5 : '98'},                      
                                        dataType: "html",
                                    success : function(obj)
                                    {
                                        
                                        
                                         $.ajax({
                                        url: "../c_c9p30intermedia/fc_actualizar",
                                        type: "GET",
                                        data: {
                                            vfolio : $('#folio').val()
                                            ,vidintegrante : $('#idintegrante').val()
                                            ,vvalorc9p30intermedia : '98'},    
                                         dataType: "html",
                                    success : function(obj)
                                    {
                                        
                                        
                                          $.ajax({
                                        url: "../c_c9p31intermedia/fc_actualizar",
                                        type: "GET",
                                        data: {vfolio : $('#folio').val()
                                            ,vidintegrante : $('#idintegrante').val()
                                            , vvalorc9p31intermedia : '98'},    
                                        dataType: "html",
                                    success : function(obj)
                                    {
                                        
                                        
                                           $.ajax({
                                        url: "../c_c9p32intermedia/fc_actualizar",
                                        type: "GET",
                                        data: {vfolio : $('#folio').val()
                                            ,vidintegrante : $('#idintegrante').val()
                                            , vvalorc9p32intermedia : '98'
                                            ,vvalorc9p32intermediacual : '98'},    
                                        dataType: "html",
                                    success : function(obj)
                                    {
                                        
                                         $.ajax({
                                        url: "../c_c9p33intermedia/fc_actualizar",
                                        type: "GET",
                                        data: {vfolio : $('#folio').val()
                                            ,vidintegrante : $('#idintegrante').val()
                                            , vvalorc9p33intermedia : '98'},    
                                        dataType: "html",
                                    success : function(obj)
                                    {
                                        
                                        
                                        $.ajax({
                                        url: "../c_c9p34intermedia/fc_actualizar",
                                        type: "GET",
                                        data: {vfolio : $('#folio').val()
                                            ,vidintegrante : $('#idintegrante').val()
                                            , vvalorc9p34intermedia : '98'},    
                                        dataType: "html",
                                    success : function(obj)
                                    {
                                        
                                        
                                    $.ajax({
                                    url: "../c_c9p35intermedia/fc_actualizar",
                                    type: "GET",
                                    data: {vfolio : $('#folio').val(),
                                    vidintegrante : $('#idintegrante').val(),
                                    vc9p35intermediao1 : '98',
                                    vc9p35intermediao2 : '98',
                                    vc9p35intermediao3 : '98',
                                    vc9p35intermediao4 : '98',
                                    vc9p35intermediao5 : '98',
                                    vc9p35intermediao6 : '98',
                                    vc9p35intermediao7 : '98',
                                    vc9p35intermediao7cual : '98'
                                    ,vc9p35intermediao8 : '98'
                                    ,vc9p35intermediao9 : '98'},                      
                                    dataType: "html",
                                    success : function(obj)
                                    {
                                        
                                        
                                          $.ajax({
                                    url: "../c_c9p36intermedia/fc_actualizar",
                                    type: "GET",
                                    data: {vfolio : $('#folio').val(),
                                    vidintegrante : $('#idintegrante').val(),
                                    vc9p36intermediao1 : '98',
                                    vc9p36intermediao2 : '98',
                                    vc9p36intermediao3 : '98',
                                    vc9p36intermediao4 : '98',
                                    vc9p36intermediao5 : '98',
                                    vc9p36intermediao6 : '98',
                                    vc9p36intermediao7 : '98',
                                    vc9p36intermediao8 : '98'},                      
                                    dataType: "html",
                                    success : function(obj)
                                    {
                                        
                                        //botonguardar();
                                        terminasinco();
                                        
                                    }
                                        
                                    });
                                        
                                        
                                        
                                        
                                    }
                                        
                                    });
                                        
                                        
                                        
                                    }
                                        
                                    });
                                        
                                        
                                    }
                                        
                                    });
                                        
                                        
                                        
                                    }
                                        
                                    });
                                        
                                        
                                    }
                                        
                                    });
                                        
                                        
                                        
                                    }
                                        
                                    });
                                        
                                        
                                    }
                                        
                                    });
                                        
                                        
                                    }
                                        
                                    });
                                        
                                        
                                    }
                                        
                                    });
                                        
                                        
                                        
                                    }
                                        
                                    });
                                        
                                        
                                        
                                    }
                                        
                                    });
                                        
                                        
                                        
                                    }
                                        
                                    });
                                        
                                        
                                        
                                    }
                                        
                                    });
                                        
                                        
                                        
                                    }
                                        
                                    });
                                        
                                        
                                    }
                                        
                                    });
                                        
                                        
                                        
                                    }
                                        
                                    });
                                        
                                        
                                        
                                    }
                                        
                                    });
                                        
                                    }
                                        
                                    });
                                        
                                        
                                        
                                    }
                                        
                                    });
                                        
                                        
                                        
                                    }
                                        
                                    });
                                        
                                        
                                    }
                                        
                                    });
                                        
                                        
                                        
                                    }
                                        
                                    });
                                        
                                        
                                        
                                    }
                                        
                                    });
                                        
                                        
                                        
                                    }
                                        
                                    });
                                        
                                    }
                                        
                                    });
                                        
                                        
                                        
                                    }
                                        
                                    });
        
    }
    
    else
        
        {
            
             $.ajax({
                                    url: "../c_c9p3intermedia/fc_actualizar",
                                    type: "GET",
                                    data: {vfolio : $('#folio').val()
                                        ,vidintegrante : $('#idintegrante').val()
                                        , vvalorc9p3intermedia :''
                                        ,vvalorc9p3intermediacual : ''
                                    },    
                                          dataType: "html",
                                    success : function(obj)
                                    {
                                        
                                     $.ajax({
                                    url: "../c_c9p4intermedia/fc_actualizar",
                                    type: "GET",
                                    data: {vfolio : $('#folio').val()
                                        ,vidintegrante : $('#idintegrante').val()
                                        , vvalorc9p4intermedia : ''},    
                                           dataType: "html",
                                    success : function(obj)
                                    {
                                        
                                         $.ajax({
                                    url: "../c_c9p7intermedia/fc_actualizar",
                                    type: "GET",
                                     data: {vfolio : $('#folio').val(),
                                    vidintegrante : $('#idintegrante').val(),    
                                    vvalorc9p7intermedia : ''},
                                    dataType: "html",
                                    success : function(obj)
                                    {
                                        
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
                                        
                                        
                                    $.ajax({
                                    url: "../c_c9p10intermedia/fc_actualizar",
                                    type: "GET",
                                    data: {vfolio : $('#folio').val(),
                                    vidintegrante : $('#idintegrante').val(),    
                                    vvalorc9p10intermedia : ''},
                                    dataType: "html",
                                    success : function(obj)
                                    {
                                        
                                        
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
                                        
                                        $.ajax({
                                           url: "../c_c9p16intermedia/fc_actualizar",
                                           type: "GET",
                                           data: {vfolio : $('#folio').val(),
                                           vidintegrante : $('#idintegrante').val(),    
                                           vvalorc9p16intermedia : '98'},
                                           dataType: "html",
                                    success : function(obj)
                                    {
                                        
                                            $.ajax({
                                           url: "../c_c9p19intermedia/fc_actualizar",
                                           type: "GET",
                                           data: {
                                            vfolio : $('#folio').val()
                                           ,vidintegrante : $('#idintegrante').val()
                                           ,vvalorc9p19intermedia : '98'},    
                                           dataType: "html",
                                    success : function(obj)
                                    {
                                        
                                        
                                          $.ajax({
                                          url: "../c_c9p20intermedia/fc_actualizar",
                                          type: "GET",
                                          data: {vfolio : $('#folio').val(),
                                          vidintegrante : $('#idintegrante').val(),    
                                          vvalorc9p20intermedia : ''},
                                          dataType: "html",
                                    success : function(obj)
                                    {
                                         $.ajax({
                                          url: "../c_c9p21intermedia/fc_actualizar",
                                          type: "GET",
                                          data: {vfolio : $('#folio').val(),
                                          vidintegrante : $('#idintegrante').val(),    
                                          vvalorc9p21intermedia : ''},
                                          dataType: "html",
                                    success : function(obj)
                                    {
                                        
                                        
                                          $.ajax({
                                        url: "../c_c9p23intermedia/fc_actualizar",
                                        type: "GET",
                                        data: {vfolio : $('#folio').val(),
                                        vidintegrante : $('#idintegrante').val(),    
                                        vvalorc9p23intermedia : ''},
                                        dataType: "html",
                                    success : function(obj)
                                    {
                                        
                                           $.ajax({
                                       url: "../c_c9p24intermedia/fc_actualizar",
                                       type: "GET",
                                       data: {vfolio : $('#folio').val(),
                                       vidintegrante : $('#idintegrante').val(),    
                                       vvalorc9p24intermedia : ''},
                                       dataType: "html",
                                    success : function(obj)
                                    {
                                        
                                      $.ajax({
                                        url: "../c_c9p25intermedia/fc_actualizar",
                                        type: "GET",
                                        data: {vfolio : $('#folio').val(),
                                        vidintegrante : $('#idintegrante').val(),    
                                        vvalorc9p25intermedia : ''},
                                        dataType: "html",
                                    success : function(obj)
                                    {
                                        
                                          $.ajax({
                                        url: "../c_c9p26intermedia/fc_actualizar",
                                        type: "GET",
                                        data: {
                                            vfolio : $('#folio').val()
                                            ,vidintegrante : $('#idintegrante').val()
                                            , vvalorc9p26intermedia : ''},    
                                         dataType: "html",
                                    success : function(obj)
                                    {
                                        
                                           $.ajax({
                                        url: "../c_c9p27intermedia/fc_actualizar",
                                        type: "GET",
                                        data: {vfolio : $('#folio').val(),
                                        vidintegrante : $('#idintegrante').val(),
                                        vc9p27intermediao1 : '',
                                        vc9p27intermediao1cuanto : '',
                                        vc9p27intermediao2 : '',
                                        vc9p27intermediao2cuanto : '',
                                        vc9p27intermediao3 : '',
                                        vc9p27intermediao3cuanto : ''},                      
                                        dataType: "html",
                                    success : function(obj)
                                    {
                                        
                                           $.ajax({
                                        url: "../c_c9p28intermedia/fc_actualizar",
                                        type: "GET",
                                         data: {vfolio : $('#folio').val(),
                                        vidintegrante : $('#idintegrante').val(),
                                        vc9p28intermediao1 : '',
                                        vc9p28intermediao1cuanto : '',
                                        vc9p28intermediao2 : '',
                                        vc9p28intermediao2cuanto : '',
                                        vc9p28intermediao3 : '',
                                        vc9p28intermediao3cuanto : '',
                                        vc9p28intermediao4 : '',
                                        vc9p28intermediao4cuanto : '',
                                        vc9p28intermediao5 : '',
                                        vc9p28intermediao5cuanto : '',
                                        vc9p28intermediao6 : '',
                                        vc9p28intermediao6cuanto : '',
                                         vc9p28intermediao7 : ''},                      
                                        dataType: "html",
                                    success : function(obj)
                                    {
                                        
                                        $.ajax({
                                        url: "../c_c9p29intermedia/fc_actualizar",
                                        type: "GET",
                                         data: {vfolio : $('#folio').val(),
                                        vidintegrante : $('#idintegrante').val(),
                                        vc9p29intermediao1 : '',
                                        vc9p29intermediao1cuanto : '',
                                        vc9p29intermediao2 :'',
                                        vc9p29intermediao2cuanto : '',
                                        vc9p29intermediao3 : '',
                                        vc9p29intermediao3cuanto : '',
                                        vc9p29intermediao4 : '',
                                        vc9p29intermediao4cuanto : '',
                                        vc9p29intermediao5 : ''},                      
                                        dataType: "html",
                                    success : function(obj)
                                    {
                                        
                                        
                                         $.ajax({
                                        url: "../c_c9p30intermedia/fc_actualizar",
                                        type: "GET",
                                        data: {
                                            vfolio : $('#folio').val()
                                            ,vidintegrante : $('#idintegrante').val()
                                            ,vvalorc9p30intermedia : ''},    
                                         dataType: "html",
                                    success : function(obj)
                                    {
                                        
                                        
                                          $.ajax({
                                        url: "../c_c9p31intermedia/fc_actualizar",
                                        type: "GET",
                                        data: {vfolio : $('#folio').val()
                                            ,vidintegrante : $('#idintegrante').val()
                                            , vvalorc9p31intermedia : ''},    
                                        dataType: "html",
                                    success : function(obj)
                                    {
                                        
                                        
                                           $.ajax({
                                        url: "../c_c9p32intermedia/fc_actualizar",
                                        type: "GET",
                                        data: {vfolio : $('#folio').val()
                                            ,vidintegrante : $('#idintegrante').val()
                                            , vvalorc9p32intermedia : ''
                                            ,vvalorc9p32intermediacual : ''},    
                                        dataType: "html",
                                    success : function(obj)
                                    {
                                        
                                         $.ajax({
                                        url: "../c_c9p33intermedia/fc_actualizar",
                                        type: "GET",
                                        data: {vfolio : $('#folio').val()
                                            ,vidintegrante : $('#idintegrante').val()
                                            , vvalorc9p33intermedia : ''},    
                                        dataType: "html",
                                    success : function(obj)
                                    {
                                        
                                        
                                        $.ajax({
                                        url: "../c_c9p34intermedia/fc_actualizar",
                                        type: "GET",
                                        data: {vfolio : $('#folio').val()
                                            ,vidintegrante : $('#idintegrante').val()
                                            , vvalorc9p34intermedia : ''},    
                                        dataType: "html",
                                    success : function(obj)
                                    {
                                        
                                        
                                    $.ajax({
                                    url: "../c_c9p35intermedia/fc_actualizar",
                                    type: "GET",
                                    data: {vfolio : $('#folio').val(),
                                    vidintegrante : $('#idintegrante').val(),
                                    vc9p35intermediao1 : '',
                                    vc9p35intermediao2 : '',
                                    vc9p35intermediao3 : '',
                                    vc9p35intermediao4 : '',
                                    vc9p35intermediao5 : '',
                                    vc9p35intermediao6 : '',
                                    vc9p35intermediao7 : '',
                                    vc9p35intermediao7cual : ''
                                    ,vc9p35intermediao8 : ''
                                    ,vc9p35intermediao9 : ''},                      
                                    dataType: "html",
                                    success : function(obj)
                                    {
                                        
                                        
                                          $.ajax({
                                    url: "../c_c9p36intermedia/fc_actualizar",
                                    type: "GET",
                                    data: {vfolio : $('#folio').val(),
                                    vidintegrante : $('#idintegrante').val(),
                                    vc9p36intermediao1 : '',
                                    vc9p36intermediao2 : '',
                                    vc9p36intermediao3 : '',
                                    vc9p36intermediao4 : '',
                                    vc9p36intermediao5 : '',
                                    vc9p36intermediao6 : '',
                                    vc9p36intermediao7 : '',
                                    vc9p36intermediao8 : ''},                      
                                    dataType: "html",
                                    success : function(obj)
                                    {
                                        
                                        //botonguardar();
                                        terminasinco();
                                    }
                                        
                                    });
                                        
                                        
                                        
                                        
                                    }
                                        
                                    });
                                        
                                        
                                        
                                    }
                                        
                                    });
                                        
                                        
                                    }
                                        
                                    });
                                        
                                        
                                        
                                    }
                                        
                                    });
                                        
                                        
                                    }
                                        
                                    });
                                        
                                        
                                        
                                    }
                                        
                                    });
                                        
                                        
                                    }
                                        
                                    });
                                        
                                        
                                    }
                                        
                                    });
                                        
                                        
                                    }
                                        
                                    });
                                        
                                        
                                        
                                    }
                                        
                                    });
                                        
                                        
                                        
                                    }
                                        
                                    });
                                        
                                        
                                        
                                    }
                                        
                                    });
                                        
                                        
                                        
                                    }
                                        
                                    });
                                        
                                        
                                        
                                    }
                                        
                                    });
                                        
                                        
                                    }
                                        
                                    });
                                        
                                        
                                        
                                    }
                                        
                                    });
                                        
                                        
                                        
                                    }
                                        
                                    });
                                        
                                    }
                                        
                                    });
                                        
                                        
                                        
                                    }
                                        
                                    });
                                        
                                        
                                        
                                    }
                                        
                                    });
                                        
                                        
                                    }
                                        
                                    });
                                        
                                        
                                        
                                    }
                                        
                                    });
                                        
                                        
                                        
                                    }
                                        
                                    });
                                        
                                        
                                        
                                    }
                                        
                                    });
                                        
                                    }
                                        
                                    });
                                        
                                        
                                        
                                    }
                                        
                                    });
            
        }
    
}





 

cargardatosgenerales('<?php echo($arraydatosgenerales['ecapitulo']); ?>','Pregunta 1 de 14','<?php echo($arraydatosgenerales['enomcoges']); ?>','<?php echo($arraydatosgenerales['enombreintegrante']." "." - "." "."Sexo:"." ".$arraydatosgenerales['esexointegrante']."   "."  -  "."   "."Edad:"."   ".$arraydatosgenerales['eedadintegrante']); ?>','5');
//control del boton ayuda
botonayuda();

});

function saltarc9p14intermedia()
{
    
                      if($('#edad').val() >= 15 && $('#edad').val()  <= 17 )
                      {
                         
                         
                         
                         $.ajax({
                          url: "../c_c9p16intermedia/fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),vidintegrante : $('#idintegrante').val(),
                              vvalorc9p16intermedia : '98'},
                          dataType: "html",
                          success : function(obj)
                          {
                         //location.href = "../c_c9p7/fc_c9p7?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";      
                         
                          $.ajax({
                          url: "../c_c9p19intermedia/fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),vidintegrante : $('#idintegrante').val(),
                              vvalorc9p19intermedia : ''},
                          dataType: "html",
                          success : function(obj)
                          {
                         //location.href = "../c_c9p/fc_c8p7?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";   
                          botonguardar();
                          terminasinco();
                          }
                         });
                         
                          }
                         });
                         
                       
                        
                         
                         
                         }
                         
                         
                         else
                         {  
                             
                             
                       
                         
                         $.ajax({
                          url: "../c_c9p16intermedia/fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),vidintegrante : $('#idintegrante').val(),
                              vvalorc9p16intermedia : '98'},
                          dataType: "html",
                          success : function(obj)
                          {
                         //location.href = "../c_c9p7/fc_c9p7?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";  
                         
                          $.ajax({
                          url: "../c_c9p19intermedia/fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),vidintegrante : $('#idintegrante').val(),
                              vvalorc9p19intermedia : '98'},
                          dataType: "html",
                          success : function(obj)
                          {
                         //location.href = "../c_c9p/fc_c8p7?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";  
                          botonguardar();
                          terminasinco();
                         
                          }
                         });
                         
                          }
                         });
                         
                        
                         
                        
                         
                         }       
 }                              
                
function mensajedesinco()
{//alert('juanpi');
    $('#modalsinco').modal('show');
    $('#sinco').prop('disabled', true);
    $('#buscar').prop('disabled', true);
    $('#volv').prop('disabled', true);   
}

function terminasinco()
{ //alert('juanpo');
    $('#modalsinco').modal('hide');
    $('#sinco').prop('disabled', false);
    $('#buscar').prop('disabled', false);
    $('#volv').prop('disabled', false);   
}

</script>
</html>