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
        <div id="c1l2e1p52div" name="c1l2e1p52div" class="form-group col-md-12 form-group-sm">
        <div id="c1l2e1p52o0div" class="has-error">
        <label class="control-label">2. Identificacion y registro de los recursos existentes (Multiple respuesta)
                     <button type="button" id="vayuda" name="vayuda" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModal">
                        <span class="glyphicon glyphicon-question-sign" aria-hidden="true"></span> Ayuda
                    </button>   
            
        </label>
            <br><br>
        <label class="control-label">Recursos externos
                           
        </label>      
            <br><br>
        </div>
        <div id="c1l2e1p52o1div" <?php if($arrayrespuestas['ec1l2e1p52o1']=='' || $arrayrespuestas['ec1l2e1p52o1']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
            <label> <!--en este caso se manda a la fincion javascript el nombre del campo-->
              <input type="checkbox" name="c1l2e1p52o1" id="c1l2e1p52o1" onclick="cambiarsinoc1l2e1p52('SI','c1l2e1p52o1','c1l2e1p52o1div','c1l2e1p52div',5);" <?php if($arrayrespuestas['ec1l2e1p52o1']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            Accesibilidad a vias y medios de transporte
            </label>
        </div>
        </div>
        <div id="c1l2e1p52o2div" <?php if($arrayrespuestas['ec1l2e1p52o2']=='' || $arrayrespuestas['ec1l2e1p52o2']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="c1l2e1p52o2" id="c1l2e1p52o2" onclick="cambiarsinoc1l2e1p52('SI','c1l2e1p52o2','c1l2e1p52o2div','c1l2e1p52div',5);" <?php if($arrayrespuestas['ec1l2e1p52o2']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            TIC'S disponibles 
          </label>
        </div>
        </div>
        <div id="c1l2e1p52o3div" <?php if($arrayrespuestas['ec1l2e1p52o3']==''|| $arrayrespuestas['ec1l2e1p52o3']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="c1l2e1p52o3" id="c1l2e1p52o3" onclick="cambiarsinoc1l2e1p52('SI','c1l2e1p52o3','c1l2e1p52o3div','c1l2e1p52div',5);" <?php if($arrayrespuestas['ec1l2e1p52o3']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            Acceso a programas , proyectos o servicios publico/privados.
            
          </label>
        </div>
        </div>
             <div id="c1l2e1p52o4div" <?php if($arrayrespuestas['ec1l2e1p52o4']==''|| $arrayrespuestas['ec1l2e1p52o4']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="c1l2e1p52o4" id="c1l2e1p52o4" onclick="cambiarsinoc1l2e1p52('SI','c1l2e1p52o4','c1l2e1p52o4div','c1l2e1p52div',5);" <?php if($arrayrespuestas['ec1l2e1p52o4']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
           Red social de apoyo y tejido social
          </label>
        </div>
        </div> 
        <div id="c1l2e1p52o5div" <?php if($arrayrespuestas['ec1l2e1p52o5']==''|| $arrayrespuestas['ec1l2e1p52o5']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="c1l2e1p52o5" id="c1l2e1p52o5" onclick="cambiarsinoc1l2e1p52('SI','c1l2e1p52o5','c1l2e1p52o5div','c1l2e1p52div',5);" <?php if($arrayrespuestas['ec1l2e1p52o5']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            Acceso a servicios publicos
          </label>
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
            <?php if($arrayrespuestas['ec1l2e1p52o1']=="" & $arrayrespuestas['ec1l2e1p52o2']=="" & $arrayrespuestas['ec1l2e1p52o3']==""& $arrayrespuestas['ec1l2e1p52o4']==""& $arrayrespuestas['ec1l2e1p52o5']=="")
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
function cambiarsinoc1l2e1p52(opcion,campoval,divcampo,divcompleto,campos)
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

function insertidpaso()
   {
    //alert('test');
                        $.ajax({
                          url: "fc_cerrarpaso",
                          type: "GET",
                          data: {vfolio: $('#folio').val(), vidpaso: 2106, vestado:1},
                          dataType: "html",
                          success: function(obj) {
                          //me llama el mensajito de actualizar
                          //$('#datos').html(obj);
                          //location.href = "../c_capituloshogar/fc_capituloshogar?folio="+ $('#folio').val() +"&idintegrante="+$('#idintegrante').val();                  
                        }
                       });
   }


    
///////////////////////////////////////Funciones que llaman al controlador para guardar y actualizar////////////////////////////////////////////////////////////////////////    
    $(document).ready(function()
    {

        $("#guardar").click(function ()
        {
                        $.ajax({
                          url: "fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(), vc1l2e1p52o1 : $('#c1l2e1p52o1').val(),vc1l2e1p52o2 : $('#c1l2e1p52o2').val(),vc1l2e1p52o3 : $('#c1l2e1p52o3').val(),vc1l2e1p52o4 : $('#c1l2e1p52o4').val(),vc1l2e1p52o5 : $('#c1l2e1p52o5').val()},    
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
                          data: {vfolio : $('#folio').val(), vc1l2e1p52o1 : $('#c1l2e1p52o1').val(),vc1l2e1p52o2 : $('#c1l2e1p52o2').val(),vc1l2e1p52o3 : $('#c1l2e1p52o3').val(),vc1l2e1p52o4 : $('#c1l2e1p52o4').val(),vc1l2e1p52o5 : $('#c1l2e1p52o5').val()},    
                          dataType: "html",
                          success : function(obj){                      
                          botonactualizar();
                          }
                        });                   
        });
        

        $("#siguiente").click(function ()
        {
         
         insertidpaso();
         location.href = "../../c_protocolol2e1/fc_protocolol2e1?folio="+ $('#folio').val() +"&idintegrante=0"+"&doccogestor="+$('#doccogestor').val();;
         
         
        });
              
        $("#anterior").click(function ()
        {
            
            location.href = "../../linea2estacion1/c_c1l2e1p5/fc_c1l2e1p5?folio=" + $('#folio').val(); 
            
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
cargardatosgenerales('<?php echo($arraydatosgenerales['ecapitulo']); ?>','Pregunta 2 de 2','<?php echo($arraydatosgenerales['enomcoges']); ?>','<?php echo($arraydatosgenerales['etitular']); ?>','100');
//control del boton ayuda
botonayuda();

});

</script>
</html>