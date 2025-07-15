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
        <!--fin para imprimir el idintegrante y llevarlo-->
<hr>
        <form class="form-group" name="formulario" id="formulario">

           <div class="row">
               
               <div id="eppc4p11a0div" class="has-error">
        <label class="control-label">13a. Listado de maquinaria:
                    
            <button type="button" id="vayuda" name="vayuda" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModal">
                        <span class="glyphicon glyphicon-question-sign" aria-hidden="true"></span> Ayuda
                    </button>       
        </label>
               </div><br><br>
            
               <div class="bs-example">
    <div class="panel-group" id="accordion">
        
<!--        INICIO DE LA PESTAÑA DIRECCIÓN Y GERENCIA DEL ACORDEON-->
        <div class="panel panel-success">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">Maquinaria agrícola</a>
                </h4>
            </div>
            <div id="collapseOne" class="panel-collapse collapse ">
                <div class="panel-body">
                    <div class="row col-md-offset-0">
                        
  <div id="ppc4p13avalidar1" name="ppc4p13avalidar1" class="form-group col-md-12 form-group-sm">
             <!-- comienza  checkbox-->
               <div id="ppc4p13a1div" <?php if($arrayrespuestas['eppc4p13a1']=='' || $arrayrespuestas['eppc4p13a1']=='NO' || $arrayrespuestas['eppc4p13a1']=='98'){echo('class=" has-error"');}?>>
                    <div class="checkbox">
                        <label> <!--en este caso se manda a la fincion javascript el nombre del campo-->
                          <input type="checkbox" name="ppc4p13a1" id="ppc4p13a1" onclick="cambiarsinoppc4p13a('SI','ppc4p13a1','ppc4p13a1div','ppc4p13adiv',6);" <?php if($arrayrespuestas['eppc4p13a1']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
                        tractor
                        </label>
                    </div>
               </div>
<!--fin checkbox-->
 <!-- comienza  checkbox-->                   
        <div id="eppc4p13a2div" <?php if($arrayrespuestas['eppc4p13a2']=='' || $arrayrespuestas['eppc4p13a2']=='NO' || $arrayrespuestas['eppc4p13a2']=='98' ){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="ppc4p13a2" id="ppc4p13a2" onclick="cambiarsinoppc4p13a('SI','ppc4p13a2','eppc4p13a2div','ppc4p13adiv',6);" <?php if($arrayrespuestas['eppc4p13a2']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            motocultor
          </label>
        </div>
        </div>
 <!--fin checkbox-->           
       
     <!-- comienza  checkbox-->             
        <div id="eppc4p13a3div" <?php if($arrayrespuestas['eppc4p13a3']==''|| $arrayrespuestas['eppc4p13a3']=='NO'|| $arrayrespuestas['eppc4p13a3']=='98'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="ppc4p13a3" id="ppc4p13a3" onclick="cambiarsinoppc4p13a('SI','ppc4p13a3','eppc4p13a3div','ppc4p13adiv',6);" <?php if($arrayrespuestas['eppc4p13a3']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            cosechadora
          </label>
        </div>
        </div>  
     <!--fin checkbox--> 
                   
     
   </div>
                       
                        
                    </div> 
                </div>
            </div>
        </div>

<!--TERMINA PRIMERA PESTAÑA ACORDEON-->

<!--        INICIO DE LA PESTAÑA FINANZAS Y ADMINISTRACIÓN DEL ACORDEON-->
        <div class="panel panel-success">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">Equipos agrícolas</a>
                </h4>
            </div>
            <div id="collapseTwo" class="panel-collapse collapse">
                <div class="panel-body">
                    
                    <div id="ppc4p13adivvalidar2" name="ppc4p13adivvalidar2" class="form-group col-md-12 form-group-sm">
                        
        <div id="ppc4p13a4div" <?php if($arrayrespuestas['eppc4p13a4']=='' || $arrayrespuestas['eppc4p13a4']=='NO' || $arrayrespuestas['eppc4p13a4']=='98'){echo('class=" has-error"');}?>>
                <div class="checkbox">
                    <label> <!--en este caso se manda a la fincion javascript el nombre del campo-->
                      <input type="checkbox" name="ppc4p13a4" id="ppc4p13a4" onclick="cambiarsinoppc4p13a('SI','ppc4p13a4','ppc4p13a4div','ppc4p13adiv',6);" <?php if($arrayrespuestas['eppc4p13a4']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
                    Arado
                    </label>
                </div>
        </div>
            
                    
        <div id="eppc4p13a5div" <?php if($arrayrespuestas['eppc4p13a5']=='' || $arrayrespuestas['eppc4p13a5']=='NO' || $arrayrespuestas['eppc4p13a5']=='98' ){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="ppc4p13a5" id="ppc4p13a5" onclick="cambiarsinoppc4p13a('SI','ppc4p13a5','eppc4p13a5div','ppc4p13adiv',6);" <?php if($arrayrespuestas['eppc4p13a5']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            Rastra
          </label>
        </div>
        </div>
            
       
            
        <div id="eppc4p13a6div" <?php if($arrayrespuestas['eppc4p13a6']==''|| $arrayrespuestas['eppc4p13a6']=='NO'|| $arrayrespuestas['eppc4p13a6']=='98'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="ppc4p13a6" id="ppc4p13a6" onclick="cambiarsinoppc4p13a('SI','ppc4p13a6','eppc4p13a6div','ppc4p13adiv',6);" <?php if($arrayrespuestas['eppc4p13a6']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            Asperjadora
          </label>
        </div>
        </div>  
                        
        <div id="eppc4p13a7div" <?php if($arrayrespuestas['eppc4p13a7']==''|| $arrayrespuestas['eppc4p13a7']=='NO'|| $arrayrespuestas['eppc4p13a7']=='98'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="ppc4p13a7" id="ppc4p13a7" onclick="cambiarsinoppc4p13a('SI','ppc4p13a7','eppc4p13a7div','ppc4p13adiv',6);" <?php if($arrayrespuestas['eppc4p13a7']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            Sembradora de siembra directa 
          </label>
        </div>
        </div>  
                        
         <div id="eppc4p13a8div" <?php if($arrayrespuestas['eppc4p13a8']==''|| $arrayrespuestas['eppc4p13a8']=='NO'|| $arrayrespuestas['eppc4p13a8']=='98'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="ppc4p13a8" id="ppc4p13a8" onclick="cambiarsinoppc4p13a('SI','ppc4p13a8','eppc4p13a8div','ppc4p13adiv',6);" <?php if($arrayrespuestas['eppc4p13a8']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            Abonadora
          </label>
        </div>
        </div>  
                        
        <div id="eppc4p13a9div" <?php if($arrayrespuestas['eppc4p13a9']==''|| $arrayrespuestas['eppc4p13a9']=='NO'|| $arrayrespuestas['eppc4p13a9']=='98'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="ppc4p13a9" id="ppc4p13a9" onclick="cambiarsinoppc4p13a('SI','ppc4p13a9','eppc4p13a9div','ppc4p13adiv',6);" <?php if($arrayrespuestas['eppc4p13a9']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            Empacadora 
          </label>
        </div>
        </div>  
                        
                    </div>
                                
            
                    
                </div>
            </div>
        </div>

<!--FIN PESTAÑA FINANZAS Y ADMINISTRACIÓN DEL ACORDEON-->

<!--        INICIO DE LA PESTAÑA CIENCIAS NATURALES Y APLICADAS DEL ACORDEON-->
        <div class="panel panel-success">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">Herramientas agrícolas</a>
                </h4>
            </div>
            
            <div id="collapseThree" class="panel-collapse collapse">
                <div class="panel-body">
                    <div id="ppc4p13adivvalidar3" name="ppc4p13adivvalidar3" class="form-group col-md-12 form-group-sm">
                        
                                         
        <div id="ppc4p13a10div" <?php if($arrayrespuestas['eppc4p13a10']=='' || $arrayrespuestas['eppc4p13a10']=='NO' || $arrayrespuestas['eppc4p13a10']=='98'){echo('class=" has-error"');}?>>
                <div class="checkbox">
                    <label> <!--en este caso se manda a la fincion javascript el nombre del campo-->
                      <input type="checkbox" name="ppc4p13a10" id="ppc4p13a10" onclick="cambiarsinoppc4p13a('SI','ppc4p13a10','ppc4p13a10div','ppc4p13adiv',6);" <?php if($arrayrespuestas['eppc4p13a10']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
                    Barretones
                    </label>
                </div>
        </div>
            
                    
        <div id="eppc4p13a11div" <?php if($arrayrespuestas['eppc4p13a11']=='' || $arrayrespuestas['eppc4p13a11']=='NO' || $arrayrespuestas['eppc4p13a11']=='98' ){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="ppc4p13a11" id="ppc4p13a11" onclick="cambiarsinoppc4p13a('SI','ppc4p13a11','eppc4p13a11div','ppc4p13adiv',6);" <?php if($arrayrespuestas['eppc4p13a11']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            Carretillas
          </label>
        </div>
        </div>
            
       
            
        <div id="eppc4p13a12div" <?php if($arrayrespuestas['eppc4p13a12']==''|| $arrayrespuestas['eppc4p13a12']=='NO'|| $arrayrespuestas['eppc4p13a12']=='98'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="ppc4p13a12" id="ppc4p13a12" onclick="cambiarsinoppc4p13a('SI','ppc4p13a12','eppc4p13a12div','ppc4p13adiv',6);" <?php if($arrayrespuestas['eppc4p13a12']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            Escardillas
          </label>
        </div>
        </div>  
                        
        <div id="eppc4p13a13div" <?php if($arrayrespuestas['eppc4p13a13']==''|| $arrayrespuestas['eppc4p13a13']=='NO'|| $arrayrespuestas['eppc4p13a13']=='98'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="ppc4p13a13" id="ppc4p13a13" onclick="cambiarsinoppc4p13a('SI','ppc4p13a13','eppc4p13a13div','ppc4p13adiv',6);" <?php if($arrayrespuestas['eppc4p13a13']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            Machetes 
          </label>
        </div>
        </div>  
                        
         <div id="eppc4p13a14div" <?php if($arrayrespuestas['eppc4p13a14']==''|| $arrayrespuestas['eppc4p13a14']=='NO'|| $arrayrespuestas['eppc4p13a14']=='98'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="ppc4p13a14" id="ppc4p13a14" onclick="cambiarsinoppc4p13a('SI','ppc4p13a14','eppc4p13a14div','ppc4p13adiv',6);" <?php if($arrayrespuestas['eppc4p13a14']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            Palas
          </label>
        </div>
        </div>  
                        
        <div id="eppc4p13a15div" <?php if($arrayrespuestas['eppc4p13a15']==''|| $arrayrespuestas['eppc4p13a15']=='NO'|| $arrayrespuestas['eppc4p13a15']=='98'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="ppc4p13a15" id="ppc4p13a15" onclick="cambiarsinoppc4p13a('SI','ppc4p13a15','eppc4p13a15div','ppc4p13adiv',6);" <?php if($arrayrespuestas['eppc4p13a15']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            Picos 
          </label>
        </div>
        </div>  
                        
                        <div id="eppc4p13a16div" <?php if($arrayrespuestas['eppc4p13a16']==''|| $arrayrespuestas['eppc4p13a16']=='NO'|| $arrayrespuestas['eppc4p13a16']=='98'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="ppc4p13a16" id="ppc4p13a16" onclick="cambiarsinoppc4p13a('SI','ppc4p13a16','eppc4p13a16div','ppc4p13adiv',6);" <?php if($arrayrespuestas['eppc4p13a16']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            Rastrillos 
          </label>
        </div>
        </div> 
                        
                        <div id="eppc4p13a17div" <?php if($arrayrespuestas['eppc4p13a17']==''|| $arrayrespuestas['eppc4p13a17']=='NO'|| $arrayrespuestas['eppc4p13a17']=='98'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="ppc4p13a17" id="ppc4p13a17" onclick="cambiarsinoppc4p13a('SI','ppc4p13a17','eppc4p13a17div','ppc4p13adiv',6);" <?php if($arrayrespuestas['eppc4p13a17']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            Regaderas 
          </label>
        </div>
        </div> 
               
                        
         <div id="eppc4p13a18div" <?php if($arrayrespuestas['eppc4p13a18']==''|| $arrayrespuestas['eppc4p13a18']=='NO'|| $arrayrespuestas['eppc4p13a18']=='98'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="ppc4p13a18" id="ppc4p13a18" onclick="cambiarsinoppc4p13a('SI','ppc4p13a18','eppc4p13a18div','ppc4p13adiv',6);" <?php if($arrayrespuestas['eppc4p13a18']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            Trasplantadoras 
          </label>
        </div>
        </div> 
                        
                    </div>
                    
                </div>
            </div>
        </div>

<!--FIN PESTAÑA FINANZAS Y ADMINISTRACIÓN DEL ACORDEON-->
          
    </div>
</div>

               
            </div> 
            
            
                 
                 <!--inicio radio una sola seleccion-->
            
<!--            
            <div class="row">
            <div id="ppc4p13iv" name="ppc4p13iv" <?php if($arrayrespuestas['eppc4p13']==''){echo('class="form-group col-md-12 form-group-sm has-error"');}else{echo('class="form-group col-md-12 form-group-sm"');}?>>   
                <label class="control-label">7. Parentesco con la persona jefe del Hogar
                    <button type="button" id="vayuda" name="vayuda" class="btn btn-success btn-xs" data-toggle="modal" data-target="#myModal">
                        <span class="glyphicon glyphicon-question-sign" aria-hidden="true"></span> Ayuda
                    </button>
                </label>
                <div class="radio">
                    <label>en este caso se manda a la fincion javascript el valor del campo
                        <input type="radio" name="ppc4p13" id="ppc4p13" onclick="colocaropcion('1','valorppc4p13','ppc4p13iv');" value="1" <?php if($arrayrespuestas['eppc4p13']=='1'){echo('checked');}?>>
                        PRIMERA CLASE
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="ppc4p13" id="ppc4p13" onclick="colocaropcion('2','valorppc4p13','ppc4p13iv');" value="2" <?php if($arrayrespuestas['eppc4p13']=='2'){echo('checked');}?>>
                        SEGUNDA CLASE
                    </label>             
                </div> 
                
                        
                <input type="text" class="form-control" id="valorppc4p13" name="valorppc4p13" style="display:none" placeholder="Text input" value="<?php echo($arrayrespuestas['eppc4p13']); ?>">
            </div>
            </div> -->
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
            <?php if($arrayrespuestas['eppc4p13a1']=="")
            {
                echo($botonerag);
            }
            else
            {
                echo($botoneraa);
            }?>   
          <!-- Fin botonera guardar y actualizar-->

        
    
    <!--Inicio Este es el footer NO TOCAR-->
    <?php echo($foot); ?>
    <!--fin del footer NO TOCAR-->
    </form>
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
                                 vidintegrante : $('#idintegrante').val(),
                                 vppc4p13a1: $('#ppc4p13a1').val(),
                                 vppc4p13a2: $('#ppc4p13a2').val(),
                                 vppc4p13a3: $('#ppc4p13a3').val(),
                                 vppc4p13a4: $('#ppc4p13a4').val(),
                                 vppc4p13a5: $('#ppc4p13a5').val(),
                                 vppc4p13a6: $('#ppc4p13a6').val(),
                                 vppc4p13a7: $('#ppc4p13a7').val(),
                                 vppc4p13a8: $('#ppc4p13a8').val(),
                                 vppc4p13a9: $('#ppc4p13a9').val(),
                                 vppc4p13a10: $('#ppc4p13a10').val(),
                                 vppc4p13a11: $('#ppc4p13a11').val(),
                                 vppc4p13a12: $('#ppc4p13a12').val(),
                                 vppc4p13a13: $('#ppc4p13a13').val(),
                                 vppc4p13a14: $('#ppc4p13a14').val(),
                                 vppc4p13a15: $('#ppc4p13a15').val(),
                                 vppc4p13a16: $('#ppc4p13a16').val(),
                                 vppc4p13a17: $('#ppc4p13a17').val(),
                                 vppc4p13a18: $('#ppc4p13a18').val()},    
                          dataType: "html",
                          success : function(obj){                      
                          botonguardar();
                          },
                          error: function (jqXHR, ajaxOptions, thrownError) {terminasinco();
                                    if (jqXHR.status === 0) {
                                        mensajito ('Error al sincronizar!!!','Sin Conexion a internet, por favor verifca tu conexion a internet y vuelve a intentar. [0]');
                                    } else if (jqXHR.status == 404) {
                                        mensajito ('Error al sincronizar!!!','Sin Conexion a internet, por favor verifca tu conexion a internet y vuelve a intentar. [404]');
                                    } else if (jqXHR.status == 500) {
                                        mensajito ('Error al sincronizar!!!','Sin Conexion a internet, por favor verifca tu conexion a internet y vuelve a intentar. [500].');
                                    } else {
                                        mensajito ('Error interno!!!','Comuniquese con el analista en sede');
                                    }

                              }
                        });                    
        });

        
        $("#actualizar").click(function ()
        {
                        $.ajax({
                          url: "fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),
                                 vidintegrante : $('#idintegrante').val(),
                                 vppc4p13a1: $('#ppc4p13a1').val(),
                                 vppc4p13a2: $('#ppc4p13a2').val(),
                                 vppc4p13a3: $('#ppc4p13a3').val(),
                                 vppc4p13a4: $('#ppc4p13a4').val(),
                                 vppc4p13a5: $('#ppc4p13a5').val(),
                                 vppc4p13a6: $('#ppc4p13a6').val(),
                                 vppc4p13a7: $('#ppc4p13a7').val(),
                                 vppc4p13a8: $('#ppc4p13a8').val(),
                                 vppc4p13a9: $('#ppc4p13a9').val(),
                                 vppc4p13a10: $('#ppc4p13a10').val(),
                                 vppc4p13a11: $('#ppc4p13a11').val(),
                                 vppc4p13a12: $('#ppc4p13a12').val(),
                                 vppc4p13a13: $('#ppc4p13a13').val(),
                                 vppc4p13a14: $('#ppc4p13a14').val(),
                                 vppc4p13a15: $('#ppc4p13a15').val(),
                                 vppc4p13a16: $('#ppc4p13a16').val(),
                                 vppc4p13a17: $('#ppc4p13a17').val(),
                                 vppc4p13a18: $('#ppc4p13a18').val()},       
                          dataType: "html",
                          success : function(obj){                      
                          botonguardar();
                          },
                          error: function (jqXHR, ajaxOptions, thrownError) {terminasinco();
                                    if (jqXHR.status === 0) {
                                        mensajito ('Error al sincronizar!!!','Sin Conexion a internet, por favor verifca tu conexion a internet y vuelve a intentar. [0]');
                                    } else if (jqXHR.status == 404) {
                                        mensajito ('Error al sincronizar!!!','Sin Conexion a internet, por favor verifca tu conexion a internet y vuelve a intentar. [404]');
                                    } else if (jqXHR.status == 500) {
                                        mensajito ('Error al sincronizar!!!','Sin Conexion a internet, por favor verifca tu conexion a internet y vuelve a intentar. [500].');
                                    } else {
                                        mensajito ('Error interno!!!','Comuniquese con el analista en sede');
                                    }

                              }
                        });                    
        });
        

        $("#siguiente").click(function ()
        {
         botonsiguiente();
        location.href = "../c_ppcapitulosintegrante/fc_ppcapitulosintegrante?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                 

        });
              
        $("#anterior").click(function ()
        {
         botonanterior();
          location.href = "../c_ppc4p13/fc_ppc4p13?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";   
        //location.href = "../c_capitulosintegrantes/fc_capitulosintegrantes?idintegrante=" + $('#idintegrante').val()+ "&idintegrante="+"&idintegrante=0";                    
        });

//para cargar variables capitulo, pregunta,encuestador,vivienda,barra
cargardatosgenerales('<?php echo($arraydatosgenerales['ecapitulo']); ?>','Pregunta 13a de 13','<?php echo($arraydatosgenerales['enomcoges']); ?>','<?php echo($arraydatosgenerales['enombreintegrante']." "." - "." "."Sexo:"." ".$arraydatosgenerales['esexointegrante']."   "."  -  "."   "."Edad:"."   ".$arraydatosgenerales['eedadintegrante']); ?>','100');
//control del boton ayuda
botonayuda();

});


function cambiarsinoppc4p13a(opcion,campoval,divcampo,divcompleto,campos)
{
    if($('#' + campoval).val() == opcion)
    {
        $('#' + campoval).val("NO");
        $('#' + divcampo).addClass('has-error');
    }
    else
    {
        $('#' + campoval).val(opcion);
        $('#' + divcampo).removeClass('has-error');
    }      
        
     validarcuadrosppc4p13a(divcompleto,campos);
}


//ESTA FUNCION SE ENCARGA DE CHEQUEAR QUE MINIMO HAYA UN CUADRO CHECKEADO
function validarcuadrosppc4p13a(divcuadro,ncampos)
{
    //alert($('#' + divcuadro).find('input').prop('checked', true).length);
    //alert($('.has-error').length);
    //alert(ncampos + ' ncampos');
    
    if (document.getElementById('ppc4p13a1').checked || document.getElementById('ppc4p13a2').checked || document.getElementById('ppc4p13a3').checked || document.getElementById('ppc4p13a4').checked || document.getElementById('ppc4p13a5').checked
            || document.getElementById('ppc4p13a6').checked || document.getElementById('ppc4p13a7').checked || document.getElementById('ppc4p13a8').checked || document.getElementById('ppc4p13a9').checked
            || document.getElementById('ppc4p13a10').checked || document.getElementById('ppc4p13a11').checked || document.getElementById('ppc4p13a12').checked || document.getElementById('ppc4p13a13').checked
            || document.getElementById('ppc4p13a14').checked || document.getElementById('ppc4p13a15').checked || document.getElementById('ppc4p13a16').checked || document.getElementById('ppc4p13a17').checked
            || document.getElementById('ppc4p13a18').checked)
    {
        //|| $('#c3p2cualdiv')===('form-group col-md-10 form-group-sm has-error')
        if($('.has-error').length === (ncampos + 1))
        {   //alert('soniguales');
           $('#guardar').prop('disabled', true);
           $('#actualizar').prop('disabled', true);
           $('#cancelar').prop('disabled', true);
           $('#anterior').prop('disabled', false);
           $('#siguiente').prop('disabled', false);
        }
        else
        {
           $('#guardar').prop('disabled', false);
           $('#actualizar').prop('disabled', false);
           $('#cancelar').prop('disabled', false);
           $('#anterior').prop('disabled', true);
           $('#siguiente').prop('disabled', true);       
        }
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

//FIN FUNCION
function validarcampotexcuadros(div,campo,ncampos)
{
    validarbolitasytexto(div,campo);

    validarcuadrosppc4p13a(div,ncampos);
}










//esta funcion nos valida todos los radio butons que hay en el acordeon



</script>
</html>