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
        <input type="text" class="form-control input-sm" id="c2p1" name="c2p1"  style="display:none"  placeholder="" value="<?php echo($arrayrespuestas['ec2p1']); ?>">
        <!--fin para imprimir el folio y llevarlo-->
<hr>
        <form class="form-group" name="formulario" id="formulario">

            <!--inicio radio una sola seleccion-->
            <div class="row">
            <div id="c2p12div" name="c2p12div" <?php if($arrayrespuestas['ec2p12']==''){echo('class="form-group col-md-12 form-group-sm has-error"');}else{echo('class="form-group col-md-12 form-group-sm"');}?>>   
                <label class="control-label">12.¿Cómo eliminan principalmente los residuos en esta vivienda? (Unica respuesta)
                    <button type="button" id="vayuda" name="vayuda" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModal">
                        <span class="glyphicon glyphicon-question-sign" aria-hidden="true"></span> Ayuda
                    </button>
                </label>
                <div class="radio">
                    <label><!--en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="c2p12" id="c2p12" onclick="colocaropcionc2p12('c2p12o1','valorc2p12','c2p12div');" value="c2p12o1" <?php if($arrayrespuestas['ec2p12']=='c2p12o1'){echo('checked');}?>>
                        La recogen los servicios de aseo
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="c2p12" id="c2p12" onclick="colocaropcionc2p12('c2p12o2','valorc2p12','c2p12div');" value="c2p12o2" <?php if($arrayrespuestas['ec2p12']=='c2p12o2'){echo('checked');}?>>
                        La entierran
                    </label>             
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="c2p12" id="c2p12" onclick="colocaropcionc2p12('c2p12o3','valorc2p12','c2p12div');" value="c2p12o3" <?php if($arrayrespuestas['ec2p12']=='c2p12o3'){echo('checked');}?>>
                        La queman
                    </label>             
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="c2p12" id="c2p12" onclick="colocaropcionc2p12('c2p12o4','valorc2p12','c2p12div');" value="c2p12o4" <?php if($arrayrespuestas['ec2p12']=='c2p12o4'){echo('checked');}?>>
                        La tiran a un patio, lote, zanja o baldío
                    </label>             
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="c2p12" id="c2p12" onclick="colocaropcionc2p12('c2p12o5','valorc2p12','c2p12div');" value="c2p12o5" <?php if($arrayrespuestas['ec2p12']=='c2p12o5'){echo('checked');}?>>
                        La tiran al río, caño, quebrada o laguna
                    </label>             
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="c2p12" id="c2p12" onclick="colocaropcionc2p12('c2p12o6','valorc2p12','c2p12div');" value="c2p12o6" <?php if($arrayrespuestas['ec2p12']=='c2p12o6'){echo('checked');}?>>
                        La recoge un servicio informal  (zorra, carreta, etc.)
                    </label>             
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="c2p12" id="c2p12" onclick="colocaropcionc2p12('c2p12o7','valorc2p12','c2p12div');" value="c2p12o7" <?php if($arrayrespuestas['ec2p12']=='c2p12o7'){echo('checked');}?>>
                        Otra
                    </label>             
                </div>                       
                                   
                
                <div class="" name="c2p12cualdiv" id="c2p12cualdiv" <?php if($arrayrespuestas['ec2p12cual']== ''||$arrayrespuestas['ec2p12cual']== '98'){echo('style="display:none"');}else{echo('');}  ?> >
                   <label> Cual? </label>  
                    <input type="text" class="form-control" id="c2p12cual" name="c2p12cual" onKeyPress="return soloLetras(event)" onchange="validarbolitasytexto('c2p12cualdiv','c2p12cual')"  style="" placeholder="Cual" value="<?php echo($arrayrespuestas['ec2p12cual']); ?>">        
                </div>
                <input type="text" class="form-control" id="valorc2p12" name="valorc2p12" style="display:none" placeholder="Text input" value="<?php echo($arrayrespuestas['ec2p12']); ?>">
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
            <?php if($arrayrespuestas['ec2p12']=="")
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
                          data: {vfolio : $('#folio').val(), vvalorc2p12 : $('#valorc2p12').val(),vvalorc2p12cual : $('#c2p12cual').val()},    
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
                          data: {vfolio : $('#folio').val(), vvalorc2p12 : $('#valorc2p12').val(),vvalorc2p12cual : $('#c2p12cual').val()},    
                          dataType: "html",
                          success : function(obj){                      
                          botonactualizar();
                          }
                        });                   
        });
        

        $("#siguiente").click(function ()
        {
         botonsiguiente();
         location.href = "../c_c2p13/fc_c2p13?folio=" + $('#folio').val();                    

        });
              
        $("#anterior").click(function ()
        {
            
        if($('#c2p1').val() === 'c2p1o3' || $('#c2p1').val() === 'c2p1o4'  )
            {
            location.href = "../c_c2p9/fc_c2p9?folio=" + $('#folio').val(); 
            }
            else{        
         location.href = "../c_c2p11/fc_c2p11?folio=" + $('#folio').val(); 
            } 
            
            
            
//         botonanterior();
//         location.href = "../c_c2p12/fc_c2p12?folio=" + $('#folio').val(); 
        //location.href = "../c_capitulosintegrantes/fc_capitulosintegrantes?folio=" + $('#folio').val()+ "&idintegrante="+"&idintegrante=0";                    
        });

//para cargar variables capitulo, pregunta,encuestador,vivienda,barra
cargardatosgenerales('<?php echo($arraydatosgenerales['ecapitulo']); ?>','Pregunta 12 de 16','<?php echo($arraydatosgenerales['enomcoges']); ?>','<?php echo($arraydatosgenerales['etitular']); ?>','70');
//control del boton ayuda
botonayuda();

});

function validarguardarc2p12()
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
function validarbolitasytextoc2p12(div,campo)
{ //alert(div + ' juanpis ' + campo);
   if(($('#'+ campo).val() == '') || ($('#'+ campo).val() == '0'))
   { 
       $('#' + div).addClass(' has-error');
   }
   else
   { 
       $('#' + div).removeClass('has-error');
   }
    validarguardarc2p12();
}
// colocar opcion para todos
function colocaropcionc2p12(opcion,campoval,divcampo)
{
    //alert(opcion);
    $('#' + campoval).val(opcion);
    
    if(opcion == 'c2p12o7')
        {
           // alert('aca lo muestra');
            $('#c2p12cualdiv').show(1000);
            $('#c2p12cual').val('');
            $('#c2p12cualdiv').addClass(' has-error');            
        }
        else
        {
            //alert('aca lo oculta');
            $('#c2p12cualdiv').hide(1000);
            $('#c2p12cual').val('98');
            $('#c2p12cualdiv').removeClass(' has-error');            
        }
    validarbolitasytextoc2p12(divcampo,campoval);
}
//de aca para arriba es logica de bolas y textos
function validarcampotexcuadros(div,campo,ncampos)
{
    validarbolitasytexto(div,campo);
    validarcuadrosc2p12(div,ncampos);
}




</script>
</html>