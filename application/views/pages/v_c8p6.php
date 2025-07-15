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
       <input type="text" class="form-control input-sm" id="c8p4" name="c8p4"  style="display:none"   placeholder="" value="<?php echo($arrayrespuestas['ec8p4']); ?>">
       
       <!--fin para imprimir el idintegrante y llevarlo-->
<hr>
        <form class="form-group" name="formulario" id="formulario">

            <!--inicio radio una sola seleccion-->
            <div class="row">
            <div id="c8p6div" name="c8p6div" <?php if($arrayrespuestas['ec8p6']==''||$arrayrespuestas['ec8p6']=='98'){echo('class="form-group col-md-12 form-group-sm has-error"');}else{echo('class="form-group col-md-12 form-group-sm"');}?>>   
                <label class="control-label">6. ¿Cuál  es la principal razón para que …. no estudie?
                  <button type="button" id="vayuda" name="vayuda" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModal">
                        <span class="glyphicon glyphicon-question-sign" aria-hidden="true"></span> Ayuda
                    </button>
                </label>
                <div class="radio">
                    <label><!--en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="c8p6" id="c8p6" onclick="colocaropcionc8p6('c8p6o1','valorc8p6','c8p6div');" value="c8p6o1" <?php if($arrayrespuestas['ec8p6']=='c8p6o1'){echo('checked');}?>>
                        No necesita o no quiere estudiar más
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="c8p6" id="c8p6" onclick="colocaropcionc8p6('c8p6o2','valorc8p6','c8p6div');" value="c8p6o2" <?php if($arrayrespuestas['ec8p6']=='c8p6o2'){echo('checked');}?>>
                        Falta de dinero
                    </label>             
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="c8p6" id="c8p6" onclick="colocaropcionc8p6('c8p6o3','valorc8p6','c8p6div');" value="c8p6o3" <?php if($arrayrespuestas['ec8p6']=='c8p6o3'){echo('checked');}?>>
                        Debe encargarse de labores domésticas y/o del cuidado de los niños, ancianos o discapacitados
                    </label>             
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="c8p6" id="c8p6" onclick="colocaropcionc8p6('c8p6o4','valorc8p6','c8p6div');" value="c8p6o4" <?php if($arrayrespuestas['ec8p6']=='c8p6o4'){echo('checked');}?>>
                        Por embarazo o embarazo de su pareja
                    </label>             
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="c8p6" id="c8p6" onclick="colocaropcionc8p6('c8p6o5','valorc8p6','c8p6div');" value="c8p6o5" <?php if($arrayrespuestas['ec8p6']=='c8p6o5'){echo('checked');}?>>
                        Esta buscando trabajo
                    </label>             
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="c8p6" id="c8p6" onclick="colocaropcionc8p6('c8p6o6','valorc8p6','c8p6div');" value="c8p6o6" <?php if($arrayrespuestas['ec8p6']=='c8p6o6'){echo('checked');}?>>
                        Falta de cupos 
                    </label>             
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="c8p6" id="c8p6" onclick="colocaropcionc8p6('c8p6o7','valorc8p6','c8p6div');" value="c8p6o7" <?php if($arrayrespuestas['ec8p6']=='c8p6o7'){echo('checked');}?>>
                        No existe centro educativo cercano o el establecimiento asignado es muy lejano
                    </label>             
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="c8p6" id="c8p6" onclick="colocaropcionc8p6('c8p6o8','valorc8p6','c8p6div');" value="c8p6o8" <?php if($arrayrespuestas['ec8p6']=='c8p6o8'){echo('checked');}?>>
                        Necesita trabajar
                    </label>             
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="c8p6" id="c8p6" onclick="colocaropcionc8p6('c8p6o9','valorc8p6','c8p6div');" value="c8p6o9" <?php if($arrayrespuestas['ec8p6']=='c8p6o9'){echo('checked');}?>>
                        Por enfermedad
                    </label>             
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="c8p6" id="c8p6" onclick="colocaropcionc8p6('c8p6o10','valorc8p6','c8p6div');" value="c8p6o10" <?php if($arrayrespuestas['ec8p6']=='c8p6o10'){echo('checked');}?>>
                        Necesita educación especial
                    </label>             
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="c8p6" id="c8p6" onclick="colocaropcionc8p6('c8p6o11','valorc8p6','c8p6div');" value="c8p6o11" <?php if($arrayrespuestas['ec8p6']=='c8p6o11'){echo('checked');}?>>
                        Por la edad
                    </label>             
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="c8p6" id="c8p6" onclick="colocaropcionc8p6('c8p6o12','valorc8p6','c8p6div');" value="c8p6o12" <?php if($arrayrespuestas['ec8p6']=='c8p6o12'){echo('checked');}?>>
                        Aspectos relacionados con el conflicto urbano
                    </label>             
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="c8p6" id="c8p6" onclick="colocaropcionc8p6('c8p6o13','valorc8p6','c8p6div');" value="c8p6o13" <?php if($arrayrespuestas['ec8p6']=='c8p6o13'){echo('checked');}?>>
                        Otra razón. Cuál
                    </label>             
                </div>
                <input type="text" class="form-control" id="valorc8p6" name="valorc8p6" style="display:none" placeholder="Text input" value="<?php echo($arrayrespuestas['ec8p6']); ?>">
            
        <div class="row" id="c8p6cualmostrar" name="c8p6cualmostrar" <?php if($arrayrespuestas['ec8p6cual']== ''||$arrayrespuestas['ec8p6cual']== '98'){echo('style="display:none"');}else{echo('');}  ?> >
        <div  id="c8p6cualdiv" name="c8p6cualdiv" class="form-group col-md-3">
                       <label class="control-label">Cual?</label>
                       <input type="text" class="form-control text-uppercase" id="c8p6cual" onkeypress="return soloLetras(event)"  onchange="validarcampotexcuadros('c8p6cualdiv','c8p6cual','1')" name="c8p6cual"   placeholder="Cual?" value="<?php if($arrayrespuestas['ec8p6cual'] == ''){echo('');}else{ echo($arrayrespuestas['ec8p6cual']);} ?>">
        </div>
        </div>
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
            <?php if($arrayrespuestas['ec8p6']=="")
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
                          vvalorc8p6 : $('#valorc8p6').val(),    
                          vc8p6cual : $('#c8p6cual').val()},
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
                          vvalorc8p6 : $('#valorc8p6').val(),    
                          vc8p6cual : $('#c8p6cual').val()},
                          dataType: "html",
                          success : function(obj){                      
                          botonguardar();
                          }
                        });                    
        });
        

        $("#siguiente").click(function ()
        {
        location.href = "../c_capitulosintegrante/fc_capitulosintegrante?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                 
        });
              
        $("#anterior").click(function ()
        {
         botonanterior();
         location.href = "../c_c8p5/fc_c8p5?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
        });
//para cargar variables capitulo, pregunta,encuestador,vivienda,barra
cargardatosgenerales('<?php echo($arraydatosgenerales['ecapitulo']); ?>','Pregunta 6 de 7','<?php echo($arraydatosgenerales['enomcoges']); ?>','<?php echo($arraydatosgenerales['enombreintegrante']." "." - "." "."Sexo:"." ".$arraydatosgenerales['esexointegrante']."   "."  -  "."   "."Edad:"."   ".$arraydatosgenerales['eedadintegrante']); ?>','88');
//control del boton ayuda
botonayuda();

});
//habilitar boton guardar
function validarguardarc8p6()
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
function validarbolitasytextoc8p6(div,campo)
{ //alert(div + ' juanpis ' + campo);
   if(($('#'+ campo).val() == '') || ($('#'+ campo).val() == '0'))
   { 
       $('#' + div).addClass(' has-error');
   }
   else
   { 
       $('#' + div).removeClass('has-error');
   }
    validarguardarc8p6();
}
// colocar opcion para todos
function colocaropcionc8p6(opcion,campoval,divcampo)
{
    //alert(opcion);
    $('#' + campoval).val(opcion);
    
    if(opcion == 'c8p6o13')
        {
           // alert('aca lo muestra');
            $('#c8p6cualmostrar').show(1000);
            $('#c8p6cual').val('');
            $('#c8p6cualdiv').addClass(' has-error');            
        }
        else
        {
            //alert('aca lo oculta');
            $('#c8p6cualmostrar').hide(1000);
            $('#c8p6cual').val('98');
            $('#c8p6cualdiv').removeClass(' has-error');            
        }
    validarbolitasytextoc8p6(divcampo,campoval);
}
//de aca para arriba es logica de bolas y textos
function validarcampotexcuadros(div,campo,ncampos)
{
    validarbolitasytexto(div,campo);
    validarcuadrosc6p17(div,ncampos);
}
</script>
</html>

