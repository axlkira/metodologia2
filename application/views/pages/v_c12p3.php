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
        <input type="text" class="form-control input-sm" id="c12p2ao4" name="c12p2ao4" style="display:none"  placeholder="" value="<?php echo($arrayrespuestas['ec12p2ao4']); ?>">
       <!--fin para imprimir el idintegrante y llevarlo-->
<hr>
        <form class="form-group" name="formulario" id="formulario">

            <!--inicio radio una sola seleccion-->
            <div class="row">
            <div id="c12p3div" name="c12p3div" <?php if($arrayrespuestas['ec12p3']==''){echo('class="form-group col-md-12 form-group-sm has-error"');}else{echo('class="form-group col-md-12 form-group-sm"');}?>>   
                <label class="control-label">3. ¿ La persona en situación de discapacidad esta recibiendo en la actualidad algún tipo de rehabilitación integral ( "Estas son las acciones dirigidas al individuo, a su familia y a su comunidad, desarrolladas en corresponsabilidad por los diferentes sectores: salud, educación, trabajo, cultura, recreación y deportes, comunicaciones y transporte, entre otros, con el objeto de facilitar la promoción, prevención, recuperación, rehabilitación e inclusión social de la población" ?
                    <button type="button" id="vayuda" name="vayuda" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModal">
                        <span class="glyphicon glyphicon-question-sign" aria-hidden="true"></span> Ayuda
                    </button>
                </label>
                <div class="radio">
                    <label><!--en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="c12p3" id="c12p3" onclick="colocaropcionc12p3('1','valorc12p3','c12p3div');" value="1" <?php if($arrayrespuestas['ec12p3']=='1'){echo('checked');}?>>
                        Si
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="c12p3" id="c12p3" onclick="colocaropcionc12p3('2','valorc12p3','c12p3div');" value="2" <?php if($arrayrespuestas['ec12p3']=='2'){echo('checked');}?>>
                        No
                    </label>             
                </div>               
                <div class="radio">
                    <label>
                        <input type="radio" name="c12p3" id="c12p3" onclick="colocaropcionc12p3('5','valorc12p3','c12p3div');" value="5" <?php if($arrayrespuestas['ec12p3']=='5'){echo('checked');}?>>
                        No le interesa
                    </label>             
                </div>               

                <input type="text" class="form-control" id="valorc12p3" name="valorc12p3" style="display:none" placeholder="Text input" value="<?php echo($arrayrespuestas['ec12p3']); ?>">
            </div>
            </div> 
            <!--fin radio una sola seleccion-->
            <div class="row" id="c12p3cualmostrar" name="c12p3cualmostrar" <?php if($arrayrespuestas['ec12p3cual']== ''||$arrayrespuestas['ec12p3cual']== '98'){echo('style="display:none"');}else{echo('');}  ?> >
            <div  id="c12p3cualdiv" name="c12p3cualdiv" class="form-group col-md-3">
                       <label class="control-label">Especifique cuál</label>
                       <input type="text" class="form-control text-uppercase" id="c12p3cual" onkeypress="return soloLetras(event)" onchange="validarcampotexcuadros('c12p3cualdiv','c12p3cual','1')" name="c12p3cual"   placeholder="Especifique cuál" value="<?php if($arrayrespuestas['ec12p3cual'] == ''){echo('');}else{ echo($arrayrespuestas['ec12p3cual']);} ?>">
            </div>
            </div>
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
            <?php if($arrayrespuestas['ec12p3']=="")
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
                          data: {vfolio : $('#folio').val(),
                          vidintegrante : $('#idintegrante').val(),
                          vvalorc12p3 : $('#valorc12p3').val(),
                          vc12p3cual : $('#c12p3cual').val()},    
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
                          data: {vfolio : $('#folio').val(),
                          vidintegrante : $('#idintegrante').val(),
                          vvalorc12p3 : $('#valorc12p3').val(),
                          vc12p3cual : $('#c12p3cual').val()},  
                          dataType: "html",
                          success : function(obj){                      
                          botonguardar();
                          }
                        });                    
        });
        

        $("#siguiente").click(function ()
        {
         botonsiguiente();
         location.href = "../c_c12p4/fc_c12p4?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    

        });
              
        $("#anterior").click(function ()
        {
         botonanterior();
         if($('#c12p2ao4').val() === '2')
           {           
            location.href = "../c_c12p2ao4/fc_c12p2ao4?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
           }
           else
           {
           location.href = "../c_c12p2ao4a/fc_c12p2ao4a?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
           }
           });

//        location.href = "../c_c12p2ao4a/fc_c12p2ao4a?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
//        });

//para cargar variables capitulo, pregunta,encuestador,vivienda,barra



cargardatosgenerales('<?php echo($arraydatosgenerales['ecapitulo']); ?>','Pregunta 3 de 4','<?php echo($arraydatosgenerales['enomcoges']); ?>','<?php echo($arraydatosgenerales['enombreintegrante']." "." - "." "."Sexo:"." ".$arraydatosgenerales['esexointegrante']."   "."  -  "."   "."Edad:"."   ".$arraydatosgenerales['eedadintegrante']); ?>','90');
//control del boton ayuda
botonayuda();

});
/* 
Funciones para validar campos y gaurdar
 */
//habilitar boton guardar
function validarguardarc12p3()
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
function validarbolitasytextoc12p3(div,campo)
{ //alert(div + ' juanpis ' + campo);
   if(($('#'+ campo).val() == '') || ($('#'+ campo).val() == '0'))
   { 
       $('#' + div).addClass(' has-error');
   }
   else
   { 
       $('#' + div).removeClass('has-error');
   }
    validarguardarc12p3();
}
// colocar opcion para todos
function colocaropcionc12p3(opcion,campoval,divcampo)
{
    //alert(opcion);
    $('#' + campoval).val(opcion);
    
    if(opcion == '1')
        {
           // alert('aca lo muestra');
            $('#c12p3cualmostrar').show(1000);
            $('#c12p3cual').val('');
            $('#c12p3cualdiv').addClass(' has-error');            
        }
        else
        {
            //alert('aca lo oculta');
            $('#c12p3cualmostrar').hide(1000);
            $('#c12p3cual').val('98');
            $('#c12p3cualdiv').removeClass(' has-error');            

        }
    validarbolitasytextoc12p3(divcampo,campoval);
}
//de aca para arriba es logica de bolas y textos
function validarcampotexcuadros(div,campo,ncampos)
{
    validarbolitasytexto(div,campo);

    validarcuadrosc12p3(div,ncampos);
}
</script>
</html>