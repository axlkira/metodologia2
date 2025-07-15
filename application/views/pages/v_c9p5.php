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

            <!--inicio radio una sola seleccion-->
            <div class="row">
            <div id="c9p5div" name="c9p5div" <?php if($arrayrespuestas['ec9p5']==''||$arrayrespuestas['ec9p5']=='98'){echo('class="form-group col-md-12 form-group-sm has-error"');}else{echo('class="form-group col-md-12 form-group-sm"');}?>>   
                <label class="control-label">3. ¿ Qué hizo principalmente en las ÚLTIMAS CUATRO SEMANAS para conseguir un trabajo o instalar un negocio?(Unica Respuesta)
                    <button type="button" id="vayuda" name="vayuda" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModal">
                        <span class="glyphicon glyphicon-question-sign" aria-hidden="true"></span> Ayuda
                    </button>
                </label>
                <div class="radio">
                    <label><!--en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="c9p5" id="c9p5" onclick="colocaropcionc9p5('c9p5o1','valorc9p5','c9p5div');" value="c9p5o1" <?php if($arrayrespuestas['ec9p5']=='c9p5o1'){echo('checked');}?>>
                        Pidió ayuda a familiares, amigos o colegas
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="c9p5" id="c9p5" onclick="colocaropcionc9p5('c9p5o2','valorc9p5','c9p5div');" value="c9p5o2" <?php if($arrayrespuestas['ec9p5']=='c9p5o2'){echo('checked');}?>>
                        Visitó, llevó o envió hojas de vida a empresas o empleadores
                    </label>             
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="c9p5" id="c9p5" onclick="colocaropcionc9p5('c9p5o3','valorc9p5','c9p5div');" value="c9p5o3" <?php if($arrayrespuestas['ec9p5']=='c9p5o3'){echo('checked');}?>>
                        Visitó, llevó o envió hojas de vida a bolsas de empleo o intermediarios
                    </label>             
                </div>
                 <div class="radio">
                    <label>
                        <input type="radio" name="c9p5" id="c9p5" onclick="colocaropcionc9p5('c9p5o4','valorc9p5','c9p5div');" value="c9p5o4" <?php if($arrayrespuestas['ec9p5']=='c9p5o4'){echo('checked');}?>>
                        Puso o consultó avisos clasificados
                    </label>             
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="c9p5" id="c9p5" onclick="colocaropcionc9p5('c9p5o5','valorc9p5','c9p5div');" value="c9p5o5" <?php if($arrayrespuestas['ec9p5']=='c9p5o5'){echo('checked');}?>>
                        Se presentó a convocatorias
                    </label>             
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="c9p5" id="c9p5" onclick="colocaropcionc9p5('c9p5o6','valorc9p5','c9p5div');" value="c9p5o6" <?php if($arrayrespuestas['ec9p5']=='c9p5o6'){echo('checked');}?>>
                        Hizo preparativos para iniciar un negocio
                    </label>             
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="c9p5" id="c9p5" onclick="colocaropcionc9p5('c9p5o7','valorc9p5','c9p5div');" value="c9p5o7" <?php if($arrayrespuestas['ec9p5']=='c9p5o7'){echo('checked');}?>>
                       Otra medio
                    </label>             
                </div>
                
        <div class="row" id="c9p5cualmostrar" name="c9p5cualmostrar" <?php if($arrayrespuestas['ec9p5cual']== ''||$arrayrespuestas['ec9p5cual']== '98'){echo('style="display:none"');}else{echo('');}  ?> >
        <div  id="c9p5cualdiv" name="c9p5cualdiv" class="form-group col-md-8">
                       <label class="control-label">Cual?</label>
                       <input type="text" class="form-control text-uppercase" id="c9p5cual" onkeypress="return soloLetras(event)"  onchange="validarcampotexcuadros('c9p5cualdiv','c9p5cual','1')" name="c9p5cual"   placeholder="Cual?" value="<?php if($arrayrespuestas['ec9p5cual'] == ''){echo('');}else{ echo($arrayrespuestas['ec9p5cual']);} ?>">
        </div>
        </div>
            <div class="radio">
                    <label>
                        <input type="radio" name="c9p5" id="c9p5" onclick="colocaropcionc9p5('c9p5o8','valorc9p5','c9p5div');" value="c9p5o8" <?php if($arrayrespuestas['ec9p5']=='c9p5o8'){echo('checked');}?>>
                       No hizo nada
                    </label>             
                </div>    
                
            <input type="text" class="form-control" id="valorc9p5" name="valorc9p5" style="display:none" placeholder="Text input" value="<?php echo($arrayrespuestas['ec9p5']); ?>">
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
            <?php if($arrayrespuestas['ec9p5']=="")
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
                          data: {vfolio : $('#folio').val(),vidintegrante : $('#idintegrante').val(), vvalorc9p5 : $('#valorc9p5').val(),vvalorc9p5cual : $('#c9p5cual').val()},    
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
                          data: {vfolio : $('#folio').val(),vidintegrante : $('#idintegrante').val(), vvalorc9p5 : $('#valorc9p5').val(),vvalorc9p5cual : $('#c9p5cual').val()},    
                          dataType: "html",
                          success : function(obj){                      
                          botonguardar();
                          }
                        });                    
        });
        

        $("#siguiente").click(function ()
        {
         botonsiguiente();
         location.href = "../c_c9p6/fc_c9p6?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    

        });
        $("#anterior").click(function ()
        {
         botonanterior();
          
              location.href = "../c_c9p4/fc_c9p4?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
         
        });
//              
//        $("#anterior").click(function ()
//        {
//         botonanterior();
//         location.href = "../c_c5p11/fc_c5p11?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";     
//        //location.href = "../c_capitulosintegrantes/fc_capitulosintegrantes?idintegrante=" + $('#idintegrante').val()+ "&idintegrante="+"&idintegrante=0";                    
//        });

//para cargar variables capitulo, pregunta,encuestador,vivienda,barra



cargardatosgenerales('<?php echo($arraydatosgenerales['ecapitulo']); ?>','Pregunta 3 de 4','<?php echo($arraydatosgenerales['enomcoges']); ?>','<?php echo($arraydatosgenerales['enombreintegrante']." "." - "." "."Sexo:"." ".$arraydatosgenerales['esexointegrante']."   "."  -  "."   "."Edad:"."   ".$arraydatosgenerales['eedadintegrante']); ?>','75');
//control del boton ayuda
botonayuda();

});
/* 
Funciones para validar campos y gaurdar
 */
//habilitar boton guardar
function validarguardarc9p5()
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
function validarbolitasytextoc9p5(div,campo)
{ //alert(div + ' juanpis ' + campo);
   if(($('#'+ campo).val() == '') || ($('#'+ campo).val() == '0'))
   { 
       $('#' + div).addClass(' has-error');
   }
   else
   { 
       $('#' + div).removeClass('has-error');
   }
    validarguardarc9p5();
}
// colocar opcion para todos
function colocaropcionc9p5(opcion,campoval,divcampo)
{
    //alert(opcion);
    $('#' + campoval).val(opcion);
    
    if(opcion == 'c9p5o7')
        {
           // alert('aca lo muestra');
            $('#c9p5cualmostrar').show(1000);
            $('#c9p5cual').val('');
            $('#c9p5cualdiv').addClass(' has-error');            
        }
        else
        {
            //alert('aca lo oculta');
            $('#c9p5cualmostrar').hide(1000);
            $('#c9p5cual').val('98');
            $('#c9p5cualdiv').removeClass(' has-error');            
        }
    validarbolitasytextoc9p5(divcampo,campoval);
}
//de aca para arriba es logica de bolas y textos
function validarcampotexcuadros(div,campo,ncampos)
{
    validarbolitasytexto(div,campo);
    validarcuadrosc9p5(div,ncampos);
}
</script>
</html>