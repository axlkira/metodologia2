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
        <input type="text" class="form-control input-sm" id="c2p16" name="c2p16" style="display:none" placeholder="" value="<?php echo($arrayrespuestas['ec2p16']); ?>">
        <!--fin para imprimir el folio y llevarlo-->
<hr>
        <form class="form-group" name="formulario" id="formulario">

            <!--inicio radio una sola seleccion-->
            <div class="row">
            <div id="c2p15div" name="c2p15div" <?php if($arrayrespuestas['ec2p15']==''){echo('class="form-group col-md-12 form-group-sm has-error"');}else{echo('class="form-group col-md-12 form-group-sm"');}?>>   
                <label class="control-label">15. La vivienda y/o el lote  ocupada por este hogar es: (Unica respuesta)
                    <button type="button" id="vayuda" name="vayuda" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModal">
                        <span class="glyphicon glyphicon-question-sign" aria-hidden="true"></span> Ayuda
                    </button>
                </label>
                <div class="radio">
                    <label><!--en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="c2p15" id="c2p15" onclick="colocaropcionc2p15('c2p15o1','valorc2p15','c2p15div');" value="c2p15o1" <?php if($arrayrespuestas['ec2p15']=='c2p15o1'){echo('checked');}?>>
                        Propia, la están pagando
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="c2p15" id="c2p15" onclick="colocaropcionc2p15('c2p15o2','valorc2p15','c2p15div');" value="c2p15o2" <?php if($arrayrespuestas['ec2p15']=='c2p15o2'){echo('checked');}?>>
                        Propia, totalmente pagada
                    </label>             
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="c2p15" id="c2p15" onclick="colocaropcionc2p15('c2p15o3','valorc2p15','c2p15div');" value="c2p15o3" <?php if($arrayrespuestas['ec2p15']=='c2p15o3'){echo('checked');}?>>
                        En arriendo o subarriendo
                    </label>             
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="c2p15" id="c2p15" onclick="colocaropcionc2p15('c2p15o4','valorc2p15','c2p15div');" value="c2p15o4" <?php if($arrayrespuestas['ec2p15']=='c2p15o4'){echo('checked');}?>>
                        En usufructo
                    </label>             
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="c2p15" id="c2p15" onclick="colocaropcionc2p15('c2p15o5','valorc2p15','c2p15div');" value="c2p15o5" <?php if($arrayrespuestas['ec2p15']=='c2p15o5'){echo('checked');}?>>
                        Ocupante de hecho o poseedor
                    </label>             
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="c2p15" id="c2p15" onclick="colocaropcionc2p15('c2p15o6','valorc2p15','c2p15div');" value="c2p15o6" <?php if($arrayrespuestas['ec2p15']=='c2p15o6'){echo('checked');}?>>
                        Familiar
                    </label>             
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="c2p15" id="c2p15" onclick="colocaropcionc2p15('c2p15o7','valorc2p15','c2p15div');" value="c2p15o7" <?php if($arrayrespuestas['ec2p15']=='c2p15o7'){echo('checked');}?>>
                        Otras formas
                    </label>             
                </div>
                <div class="" name="c2p15cualdiv" id="c2p15cualdiv" <?php if($arrayrespuestas['ec2p15cual']== ''||$arrayrespuestas['ec2p15cual']== '98'){echo('style="display:none"');}else{echo('');}  ?> >
                   <label> Cual? </label>  
                    <input type="text" class="form-control" id="c2p15cual" name="c2p15cual" style="" onKeyPress="return soloLetras(event)" onchange="validarbolitasytexto('c2p15cualdiv','c2p15cual')"  placeholder="Cual" value="<?php echo($arrayrespuestas['ec2p15cual']); ?>">        
                </div>
                <input type="text" class="form-control" id="valorc2p15" name="valorc2p15" style="display:none" placeholder="Text input" value="<?php echo($arrayrespuestas['ec2p15']); ?>">
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
            <?php if($arrayrespuestas['ec2p15']=="")
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
                          data: {vfolio : $('#folio').val(), vvalorc2p15 : $('#valorc2p15').val(),vvalorc2p15cual : $('#c2p15cual').val()},    
                          dataType: "html",
                          success : function(obj){                      
                          botonguardar();
                          salto15()
                          }
                        });                    
        });

        
        $("#actualizar").click(function ()
        {
                        $.ajax({
                          url: "fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(), vvalorc2p15 : $('#valorc2p15').val(),vvalorc2p15cual : $('#c2p15cual').val()},    
                          dataType: "html",
                          success : function(obj){                      
                          botonactualizar();
                          salto15()
                          }
                        });                   
        });
        

        $("#siguiente").click(function ()
        {
          if($('#valorc2p15').val() === 'c2p15o3' || $('#valorc2p15').val() === 'c2p15o4' || $('#valorc2p15').val() === 'c2p15o5' || $('#valorc2p15').val() === 'c2p15o6'|| $('#valorc2p15').val() === 'c2p15o7' )
          {
          location.href = "../c_capituloshogar/fc_capituloshogar?folio=" + $('#folio').val() + "&idintegrante=0";                     
         
            }
            else{
         location.href = "../c_c2p16/fc_c2p16?folio=" + $('#folio').val();                      
            }   
           });
              
        $("#anterior").click(function ()
        {
         botonanterior();
          location.href = "../c_c2p14/fc_c2p14?folio=" + $('#folio').val(); 
        //location.href = "../c_capitulosintegrantes/fc_capitulosintegrantes?folio=" + $('#folio').val()+ "&idintegrante="+"&idintegrante=0";                    
        });

//para cargar variables capitulo, pregunta,encuestador,vivienda,barra
cargardatosgenerales('<?php echo($arraydatosgenerales['ecapitulo']); ?>','Pregunta 15 de 16','<?php echo($arraydatosgenerales['enomcoges']); ?>','<?php echo($arraydatosgenerales['etitular']); ?>','95');
//control del boton ayuda
botonayuda();

});

function salto15()
{
  if($('#valorc2p15').val() === 'c2p15o3' || $('#valorc2p15').val() === 'c2p15o4' || $('#valorc2p15').val() === 'c2p15o5' || $('#valorc2p15').val() === 'c2p15o6'|| $('#valorc2p15').val() === 'c2p15o7' )
         {                
                          $.ajax({
                          url: "../c_c2p16/fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),                              
                          vvalorc2p16 : '98'},
                          dataType: "html",
                          success : function(obj)
                          {
                        // location.href = "../c_capituloshogar/fc_capituloshogar?folio=" + $('#folio').val() + "&idintegrante=0";                     
                          }
                         });
                         
                        
                        
      }   
      
            
        else if ($('#valorc2p15').val() === 'c2p15o1' && $('#c2p16').val() === '98' || ($('#valorc2p15').val() === 'c2p15o2' && $('#c2p16').val() === '98'))
         {                $.ajax({
                          url: "../c_c2p16/fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),                              
                          vvalorc2p16 : ''},
                          dataType: "html",
                          success : function(obj)
                          {
                        //  location.href = "../c_c2p16/fc_c2p16?folio=" + $('#folio').val();                      
                          }
                         });                        
                         
                         
                     }
                     else
               {
               //    location.href = "../c_c2p16/fc_c2p16?folio=" + $('#folio').val();                    
               }
            
           
}
function validarguardarc2p15()
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
function validarbolitasytextoc2p15(div,campo)
{ //alert(div + ' juanpis ' + campo);
   if(($('#'+ campo).val() == '') || ($('#'+ campo).val() == '0'))
   { 
       $('#' + div).addClass(' has-error');
   }
   else
   { 
       $('#' + div).removeClass('has-error');
   }
    validarguardarc2p15();
}
// colocar opcion para todos
function colocaropcionc2p15(opcion,campoval,divcampo)
{
    //alert(opcion);
    $('#' + campoval).val(opcion);
    
    if(opcion == 'c2p15o7')
        {
           // alert('aca lo muestra');
            $('#c2p15cualdiv').show(1000);
            $('#c2p15cual').val('');
            $('#c2p15cualdiv').addClass(' has-error');            
        }
        else
        {
            //alert('aca lo oculta');
            $('#c2p15cualdiv').hide(1000);
            $('#c2p15cual').val('98');
            $('#c2p15cualdiv').removeClass(' has-error');            
        }
    validarbolitasytextoc2p15(divcampo,campoval);
}
//de aca para arriba es logica de bolas y textos
function validarcampotexcuadros(div,campo,ncampos)
{
    validarbolitasytexto(div,campo);
    validarcuadrosc2p15(div,ncampos);
}


</script>
</html>