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
<!--        <input type="text" class="form-control input-sm" id="c2p13" name="c2p13" style="display:none"  placeholder="" value="<?php echo($arrayrespuestas['ec2p13']); ?>">-->
        <!--fin para imprimir el folio y llevarlo-->
<hr>
       <form class="form-group" name="formulario" id="formulario">

<!--Check varias selecciones -->
    <div class="row">
        <div id="c1l2e1p5div" name="c1l2e1p5div" class="form-group col-md-12 form-group-sm">
        <div id="c1l2e1p5o0div" class="has-error">
        <label class="control-label">1. Identificacion y registro de los recursos existentes (Multiple respuesta)
                     <button type="button" id="vayuda" name="vayuda" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModal">
                        <span class="glyphicon glyphicon-question-sign" aria-hidden="true"></span> Ayuda
                    </button>   
            
        </label>
            <br><br>
        <label class="control-label">Recursos internos
                           
        </label>      
            <br><br>
        </div>
        <div id="c1l2e1p5o1div" <?php if($arrayrespuestas['ec1l2e1p5o1']=='' || $arrayrespuestas['ec1l2e1p5o1']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
            <label> <!--en este caso se manda a la fincion javascript el nombre del campo-->
              <input type="checkbox" name="c1l2e1p5o1" id="c1l2e1p5o1" onclick="cambiarsinoc1l2e1p5('SI','c1l2e1p5o1','c1l2e1p5o1div','c1l2e1p5div',10);" <?php if($arrayrespuestas['ec1l2e1p5o1']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            Acceso a Informacion
            </label>
        </div>
        </div>
        <div id="c1l2e1p5o2div" <?php if($arrayrespuestas['ec1l2e1p5o2']=='' || $arrayrespuestas['ec1l2e1p5o2']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="c1l2e1p5o2" id="c1l2e1p5o2" onclick="cambiarsinoc1l2e1p5('SI','c1l2e1p5o2','c1l2e1p5o2div','c1l2e1p5div',10);" <?php if($arrayrespuestas['ec1l2e1p5o2']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            Acceso a TIC'S
          </label>
        </div>
        </div>
        <div id="c1l2e1p5o3div" <?php if($arrayrespuestas['ec1l2e1p5o3']==''|| $arrayrespuestas['ec1l2e1p5o3']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="c1l2e1p5o3" id="c1l2e1p5o3" onclick="cambiarsinoc1l2e1p5('SI','c1l2e1p5o3','c1l2e1p5o3div','c1l2e1p5div',10);" <?php if($arrayrespuestas['ec1l2e1p5o3']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            Recursos economicos
            
          </label>
        </div>
        </div>
             <div id="c1l2e1p5o4div" <?php if($arrayrespuestas['ec1l2e1p5o4']==''|| $arrayrespuestas['ec1l2e1p5o4']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="c1l2e1p5o4" id="c1l2e1p5o4" onclick="cambiarsinoc1l2e1p5('SI','c1l2e1p5o4','c1l2e1p5o4div','c1l2e1p5div',10);" <?php if($arrayrespuestas['ec1l2e1p5o4']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
           Cumplimiento de requisitos previos
          </label>
        </div>
        </div> 
        <div id="c1l2e1p5o5div" <?php if($arrayrespuestas['ec1l2e1p5o5']==''|| $arrayrespuestas['ec1l2e1p5o5']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="c1l2e1p5o5" id="c1l2e1p5o5" onclick="cambiarsinoc1l2e1p5('SI','c1l2e1p5o5','c1l2e1p5o5div','c1l2e1p5div',10);" <?php if($arrayrespuestas['ec1l2e1p5o5']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            Capacidades individuales
          </label>
        </div>
        </div> 
        <div id="c1l2e1p5o6div" <?php if($arrayrespuestas['ec1l2e1p5o6']==''|| $arrayrespuestas['ec1l2e1p5o6']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="c1l2e1p5o6" id="c1l2e1p5o6" onclick="cambiarsinoc1l2e1p5('SI','c1l2e1p5o6','c1l2e1p5o6div','c1l2e1p5div',10);" <?php if($arrayrespuestas['ec1l2e1p5o6']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            Red familiar de apoyo
          </label>
        </div>
        </div>
            <div id="c1l2e1p5o7div" <?php if($arrayrespuestas['ec1l2e1p5o7']==''|| $arrayrespuestas['ec1l2e1p5o7']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="c1l2e1p5o7" id="c1l2e1p5o7" onclick="cambiarsinoc1l2e1p5('SI','c1l2e1p5o7','c1l2e1p5o7div','c1l2e1p5div',10);" <?php if($arrayrespuestas['ec1l2e1p5o7']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            Capacidades familiares (resilencia,resolucion de conflictos, empatia)
          </label>
        </div>
        </div> 
            <div id="c1l2e1p5o8div" <?php if($arrayrespuestas['ec1l2e1p5o8']==''|| $arrayrespuestas['ec1l2e1p5o8']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="c1l2e1p5o8" id="c1l2e1p5o8" onclick="cambiarsinoc1l2e1p5('SI','c1l2e1p5o8','c1l2e1p5o8div','c1l2e1p5div',10);" <?php if($arrayrespuestas['ec1l2e1p5o8']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            Estructura y valores familiares
          </label>
        </div>
        </div> 
            
            <div id="c1l2e1p5o9div" <?php if($arrayrespuestas['ec1l2e1p5o9']==''|| $arrayrespuestas['ec1l2e1p5o9']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="c1l2e1p5o9" id="c1l2e1p5o9" onclick="cambiarsinoc1l2e1p5('SI','c1l2e1p5o9','c1l2e1p5o9div','c1l2e1p5div',10);" <?php if($arrayrespuestas['ec1l2e1p5o9']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            Metodos educativos
          </label>
        </div>
        </div> 
      
           <div id="c1l2e1p5o10div" <?php if($arrayrespuestas['ec1l2e1p5o10']==''|| $arrayrespuestas['ec1l2e1p5o10']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="c1l2e1p5o10" id="c1l2e1p5o10" onclick="cambiarsinoc1l2e1p5('SI','c1l2e1p5o10','c1l2e1p5o10div','c1l2e1p5div',10);" <?php if($arrayrespuestas['ec1l2e1p5o10']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            Nivel de formacion y/o ocupacional verificado de los integrantes de la familia 
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
            <?php if($arrayrespuestas['ec1l2e1p5o1']=="" & $arrayrespuestas['ec1l2e1p5o2']=="" & $arrayrespuestas['ec1l2e1p5o3']==""& $arrayrespuestas['ec1l2e1p5o4']==""& $arrayrespuestas['ec1l2e1p5o5']==""& $arrayrespuestas['ec1l2e1p5o6']=="" )
            {
                echo($botoneragl2);
            }
            else
            {
                echo($botoneraal2);
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
 //dea aca para abajo es logica de cuadros
function cambiarsinoc1l2e1p5(opcion,campoval,divcampo,divcompleto,campos)
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
     
            

     
   validarcuadros(divcompleto,campos);
}   
    
///////////////////////////////////////Funciones que llaman al controlador para guardar y actualizar////////////////////////////////////////////////////////////////////////    
    $(document).ready(function()
    {

        $("#guardar").click(function ()
        {
                        $.ajax({
                          url: "fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(), vc1l2e1p5o1 : $('#c1l2e1p5o1').val(),vc1l2e1p5o2 : $('#c1l2e1p5o2').val(),vc1l2e1p5o3 : $('#c1l2e1p5o3').val(),vc1l2e1p5o4 : $('#c1l2e1p5o4').val(),vc1l2e1p5o5 : $('#c1l2e1p5o5').val(),vc1l2e1p5o6 : $('#c1l2e1p5o6').val(),vc1l2e1p5o7 : $('#c1l2e1p5o7').val(),vc1l2e1p5o8 : $('#c1l2e1p5o8').val(),vc1l2e1p5o9 : $('#c1l2e1p5o9').val(),vc1l2e1p5o10 : $('#c1l2e1p5o10').val()},    
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
                          data: {vfolio : $('#folio').val(), vc1l2e1p5o1 : $('#c1l2e1p5o1').val(),vc1l2e1p5o2 : $('#c1l2e1p5o2').val(),vc1l2e1p5o3 : $('#c1l2e1p5o3').val(),vc1l2e1p5o4 : $('#c1l2e1p5o4').val(),vc1l2e1p5o5 : $('#c1l2e1p5o5').val(),vc1l2e1p5o6 : $('#c1l2e1p5o6').val(),vc1l2e1p5o7 : $('#c1l2e1p5o7').val(),vc1l2e1p5o8 : $('#c1l2e1p5o8').val(),vc1l2e1p5o9 : $('#c1l2e1p5o9').val(),vc1l2e1p5o10 : $('#c1l2e1p5o10').val()},    
                          dataType: "html",
                          success : function(obj){                      
                          botonactualizar();
                          }
                        });                   
        });
        

        $("#siguiente").click(function ()
        {
         botonsiguiente();
         location.href = "../../linea2estacion1/c_c1l2e1p52/fc_c1l2e1p52?folio=" + $('#folio').val();                    

        });
              
        $("#anterior").click(function ()
        {
            
            
            location.href = "../../c_protocolol2e1/fc_protocolol2e1?folio="+ $('#folio').val() +"&idintegrante=0" + "&doccogestor="+$('#doccogestor').val();
//           if($('#c2p13').val() === '2'){
//            location.href = "../c_c2p13/fc_c2p13?folio=" + $('#folio').val(); 
//            }
//            else{        
//         location.href = "../c_c2p13b/fc_c2p13b?folio=" + $('#folio').val(); 
//            } 
// 
            
//         botonanterior();
//         location.href = "../c_c2p13/fc_c2p13?folio=" + $('#folio').val(); 
        //location.href = "../c_capitulosintegrantes/fc_capitulosintegrantes?folio=" + $('#folio').val()+ "&idintegrante="+"&idintegrante=0";                    
        });

//para cargar variables capitulo, pregunta,encuestador,vivienda,barra
cargardatosgenerales('<?php echo($arraydatosgenerales['ecapitulo']); ?>','Pregunta 1 de 2','<?php echo($arraydatosgenerales['enomcoges']); ?>','<?php echo($arraydatosgenerales['etitular']); ?>','50');
//control del boton ayuda
botonayuda();

});

</script>
</html>