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
       <input type="text"  class="form-control input-sm " id="c9p7" style="display:none"    name="c9p7"    value="<?php echo ($arrayrespuestas['ec9p7']);?>">
        <!--fin para imprimir el idintegrante y llevarlo-->
<hr>
        <form class="form-group" name="formulario" id="formulario">

            <!--inicio radio una sola seleccion-->
            <div class="row">
            <div id="c9p8intermediadiv" name="c9p8intermediadiv" <?php if($arrayrespuestas['ec9p8intermedia']==''||$arrayrespuestas['ec9p8intermedia']=='98'){echo('class="form-group col-md-12 form-group-sm has-error"');}else{echo('class="form-group col-md-12 form-group-sm"');}?>>   
                <label class="control-label">2. En este trabajo es: (Lea las alternativas) (Unica Respuesta)
                    <button type="button" id="vayuda" name="vayuda" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModal">
                        <span class="glyphicon glyphicon-question-sign" aria-hidden="true"></span> Ayuda
                    </button>
                </label>
                <div class="radio">
                    <label><!--en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="c9p8intermedia" id="c9p8intermedia" onclick="colocaropcionc9p8intermedia('c9p8intermediao1','valorc9p8intermedia','c9p8intermediadiv');" value="c9p8intermediao1" <?php if($arrayrespuestas['ec9p8intermedia']=='c9p8intermediao1'){echo('checked');}?>>
                        Obrero o Empleado de Empresa Particular
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="c9p8intermedia" id="c9p8intermedia" onclick="colocaropcionc9p8intermedia('c9p8intermediao2','valorc9p8intermedia','c9p8intermediadiv');" value="c9p8intermediao2" <?php if($arrayrespuestas['ec9p8intermedia']=='c9p8intermediao2'){echo('checked');}?>>
                        Obrero o Empleado del Gobierno
                    </label>             
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="c9p8intermedia" id="c9p8intermedia" onclick="colocaropcionc9p8intermedia('c9p8intermediao3','valorc9p8intermedia','c9p8intermediadiv');" value="c9p8intermediao3" <?php if($arrayrespuestas['ec9p8intermedia']=='c9p8intermediao3'){echo('checked');}?>>
                        Empleado Doméstico
                    </label>             
                </div>
                 <div class="radio">
                    <label>
                        <input type="radio" name="c9p8intermedia" id="c9p8intermedia" onclick="colocaropcionc9p8intermedia('c9p8intermediao4','valorc9p8intermedia','c9p8intermediadiv');" value="c9p8intermediao4" <?php if($arrayrespuestas['ec9p8intermedia']=='c9p8intermediao4'){echo('checked');}?>>
                        Trabajador por Cuenta Propia
                    </label>             
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="c9p8intermedia" id="c9p8intermedia" onclick="colocaropcionc9p8intermedia('c9p8intermediao5','valorc9p8intermedia','c9p8intermediadiv');" value="c9p8intermediao5" <?php if($arrayrespuestas['ec9p8intermedia']=='c9p8intermediao5'){echo('checked');}?>>
                       Patrono o Empleador
                    </label>             
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="c9p8intermedia" id="c9p8intermedia" onclick="colocaropcionc9p8intermedia('c9p8intermediao6','valorc9p8intermedia','c9p8intermediadiv');" value="c9p8intermediao6" <?php if($arrayrespuestas['ec9p8intermedia']=='c9p8intermediao6'){echo('checked');}?>>
                       Trabajador Familiar sin remuneración
                    </label>             
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="c9p8intermedia" id="c9p8intermedia" onclick="colocaropcionc9p8intermedia('c9p8intermediao7','valorc9p8intermedia','c9p8intermediadiv');" value="c9p8intermediao7" <?php if($arrayrespuestas['ec9p8intermedia']=='c9p8intermediao7'){echo('checked');}?>>
                       Trabajador sin remuneración
                    </label>             
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="c9p8intermedia" id="c9p8intermedia" onclick="colocaropcionc9p8intermedia('c9p8intermediao8','valorc9p8intermedia','c9p8intermediadiv');" value="c9p8intermediao8" <?php if($arrayrespuestas['ec9p8intermedia']=='c9p8intermediao8'){echo('checked');}?>>
                       Jornalero o Peón
                    </label>             
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="c9p8intermedia" id="c9p8intermedia" onclick="colocaropcionc9p8intermedia('c9p8intermediao9','valorc9p8intermedia','c9p8intermediadiv');" value="c9p8intermediao9" <?php if($arrayrespuestas['ec9p8intermedia']=='c9p8intermediao9'){echo('checked');}?>>
                       Otro
                    </label>             
                </div>
                
        <div class="row" id="c9p8intermediacualmostrar" name="c9p8intermediacualmostrar" <?php if($arrayrespuestas['ec9p8intermediacual']== ''||$arrayrespuestas['ec9p8intermediacual']== '98'){echo('style="display:none"');}else{echo('');}  ?> >
        <div  id="c9p8intermediacualdiv" name="c9p8intermediacualdiv" class="form-group col-md-8">
                       <label class="control-label">Cual?</label>
                       <input type="text" class="form-control text-uppercase" id="c9p8intermediacual" onkeypress="return soloLetras(event)"  onchange="validarcampotexcuadros('c9p8intermediacualdiv','c9p8intermediacual','1')" name="c9p8intermediacual"   placeholder="Cual?" value="<?php if($arrayrespuestas['ec9p8intermediacual'] == ''){echo('');}else{ echo($arrayrespuestas['ec9p8intermediacual']);} ?>">
        </div>
        </div>
            <input type="text" class="form-control" id="valorc9p8intermedia" name="valorc9p8intermedia"  style="display:none"  placeholder="Text input" value="<?php echo($arrayrespuestas['ec9p8intermedia']); ?>">
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
            <?php if($arrayrespuestas['ec9p8intermedia']=="")
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
  
  function saltarc9p8intermedia()
{
    //alert($('#valorc9p8intermedia').val());
       if($('#valorc9p8intermedia').val() == 'c9p8intermediao4' || $('#valorc9p8intermedia').val() == 'c9p8intermediao5' || $('#valorc9p8intermedia').val() == 'c9p8intermediao9' )
         {                
                          //alert('1');
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
                                       
                                      terminasinco();
                                      botonguardar();

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
        else if ($('#valorc9p8intermedia').val() == 'c9p8intermediao6' || $('#valorc9p8intermedia').val() == 'c9p8intermediao7' )
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
                                        terminasinco();
                                        botonguardar();
                                        
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
                                   vvalorc9p16intermedia : ''},
                                   dataType: "html",
                                    success : function(obj)
                                    {
                                        
                                        
                                    $.ajax({
                                     url: "../c_c9p19intermedia/fc_actualizar",
                                     type: "GET",
                                     data: {
                                      vfolio : $('#folio').val()
                                     ,vidintegrante : $('#idintegrante').val()
                                     ,vvalorc9p19intermedia : ''},    
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
                                        terminasinco();
                                        botonguardar();
                                        
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


    $(document).ready(function()
    {

        $("#guardar").click(function ()
        {
            mensajedesinco();
                        $.ajax({
                          url: "fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),vidintegrante : $('#idintegrante').val(), vvalorc9p8intermedia : $('#valorc9p8intermedia').val(),vvalorc9p8intermediacual : $('#c9p8intermediacual').val()},    
                          dataType: "html",
                          success : function(obj){                      
                          //botonguardar();
                          saltarc9p8intermedia();
                          }
                        });                    
        });

        
        $("#actualizar").click(function ()
        {
            mensajedesinco();
                        $.ajax({
                          url: "fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),vidintegrante : $('#idintegrante').val(), vvalorc9p8intermedia : $('#valorc9p8intermedia').val(),vvalorc9p8intermediacual : $('#c9p8intermediacual').val()},    
                          dataType: "html",
                          success : function(obj){                      
                          //botonguardar();
                          saltarc9p8intermedia();
                          }
                        });                    
        });
        
         $("#capitulos").click(function ()
        {
            
            location.href = "../c_capitulosintegranteintermedia/fc_capitulosintegranteintermedia?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() ;                    
         
            });
        

        $("#siguiente").click(function ()
        {
          if($('#valorc9p8intermedia').val() === 'c9p8intermediao1' || $('#valorc9p8intermedia').val() === 'c9p8intermediao2'  || $('#valorc9p8intermedia').val() === 'c9p8intermediao3'  || $('#valorc9p8intermedia').val() === 'c9p8intermediao8')
          {
          location.href = "../c_c9p10intermedia/fc_c9p10intermedia?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
         
            }
         else if ($('#valorc9p8intermedia').val() === 'c9p8intermediao4' || $('#valorc9p8intermedia').val() === 'c9p8intermediao5'  || $('#valorc9p8intermedia').val() === 'c9p8intermediao9')
            {
         
          location.href = "../c_c9p16intermedia/fc_c9p16intermedia?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
         
            } 
            else
            { 
            location.href = "../c_c9p26intermedia/fc_c9p26intermedia?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";   
              
            }



        });
        
        
        
        $ ("#anterior").click(function ()
        {
           if($('#c9p7').val()=='98')
           {
                location.href = "../c_capitulosintegranteintermedia/fc_capitulosintegranteintermedia?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() ;                    
           }
           else
           {
              location.href = "../c_c9p7intermedia/fc_c9p7intermedia?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                     
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
function validarguardarc9p8intermedia()
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
function validarbolitasytextoc9p8intermedia(div,campo)
{ //alert(div + ' juanpis ' + campo);
   if(($('#'+ campo).val() == '') || ($('#'+ campo).val() == '0'))
   { 
       $('#' + div).addClass(' has-error');
   }
   else
   { 
       $('#' + div).removeClass('has-error');
   }
    validarguardarc9p8intermedia();
}
// colocar opcion para todos
function colocaropcionc9p8intermedia(opcion,campoval,divcampo)
{
    //alert(opcion);
    $('#' + campoval).val(opcion);
    
    if(opcion == 'c9p8intermediao9')
        {
           // alert('aca lo muestra');
            $('#c9p8intermediacualmostrar').show(1000);
            $('#c9p8intermediacual').val('');
            $('#c9p8intermediacualdiv').addClass(' has-error');            
        }
        else
        {
            //alert('aca lo oculta');
            $('#c9p8intermediacualmostrar').hide(1000);
            $('#c9p8intermediacual').val('98');
            $('#c9p8intermediacualdiv').removeClass(' has-error');            
        }
    validarbolitasytextoc9p8intermedia(divcampo,campoval);
}
//de aca para arriba es logica de bolas y textos
function validarcampotexcuadros(div,campo,ncampos)
{
    validarbolitasytexto(div,campo);
    validarcuadrosc9p8intermedia(div,ncampos);
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