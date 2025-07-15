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
        <input type="text" class="form-control input-sm" id="c8p3intermedia" name="c8p3intermedia" style="display:none" placeholder="" value="<?php echo($arrayrespuestas['ec8p3intermedia']); ?>">
        <!--fin para imprimir el idintegrante y llevarlo-->
<hr>
        <form class="form-group" name="formulario" id="formulario">

            <!--inicio radio una sola seleccion-->
            <div class="row">
            <div id="c8p2intermediadiv" name="c8p2intermediadiv" <?php if($arrayrespuestas['ec8p2intermedia']==''){echo('class="form-group col-md-12 form-group-sm has-error"');}else{echo('class="form-group col-md-12 form-group-sm"');}?>>   
                <label class="control-label">2. ¿Cuál es el nivel educativo más alto alcanzado por .…. y el último grado aprobado en ese nivel?</br>
                    SELECCIÓN UNICA
                    <button type="button" id="vayuda" name="vayuda" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModal">
                        <span class="glyphicon glyphicon-question-sign" aria-hidden="true"></span> Ayuda
                    </button>
                </label>
                <div class="radio">
                    <label><!--en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="c8p1" id="c8p1" onclick="colocaropcionc8p2intermedia('c8p2intermediao1','valorc8p2intermedia','c8p2intermediadiv');" value="c8p2intermediao1" <?php if($arrayrespuestas['ec8p2intermedia']=='c8p2intermediao1'){echo('checked');}?>>
                        Ninguno
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="c8p1" id="c8p1" onclick="colocaropcionc8p2intermedia('c8p2intermediao2','valorc8p2intermedia','c8p2intermediadiv');" value="c8p2intermediao2" <?php if($arrayrespuestas['ec8p2intermedia']=='c8p2intermediao2'){echo('checked');}?>>
                        Preescolar
                    </label>             
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="c8p1" id="c8p1" onclick="colocaropcionc8p2intermedia('c8p2intermediao3','valorc8p2intermedia','c8p2intermediadiv');" value="c8p2intermediao3" <?php if($arrayrespuestas['ec8p2intermedia']=='c8p2intermediao3'){echo('checked');}?>>
                        Básica primaria (1 a 5)
                    </label>             
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="c8p1" id="c8p1" onclick="colocaropcionc8p2intermedia('c8p2intermediao4','valorc8p2intermedia','c8p2intermediadiv');" value="c8p2intermediao4" <?php if($arrayrespuestas['ec8p2intermedia']=='c8p2intermediao4'){echo('checked');}?>>
                        Básica secundaria  (6 a 9)
                    </label>             
                </div>
                
                 <div class="radio">
                    <label>
                        <input type="radio" name="c8p1" id="c8p1" onclick="colocaropcionc8p2intermedia('c8p2intermediao14','valorc8p2intermedia','c8p2intermediadiv');" value="c8p2intermediao14" <?php if($arrayrespuestas['ec8p2intermedia']=='c8p2intermediao14'){echo('checked');}?>>
                        Media (10)
                    </label>             
                </div>
                
                <div class="radio">
                    <label>
                        <input type="radio" name="c8p1" id="c8p1" onclick="colocaropcionc8p2intermedia('c8p2intermediao5','valorc8p2intermedia','c8p2intermediadiv');" value="c8p2intermediao5" <?php if($arrayrespuestas['ec8p2intermedia']=='c8p2intermediao5'){echo('checked');}?>>
                        Media (11,12,13)
                    </label>             
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="c8p1" id="c8p1" onclick="colocaropcionc8p2intermedia('c8p2intermediao6','valorc8p2intermedia','c8p2intermediadiv');" value="c8p2intermediao6" <?php if($arrayrespuestas['ec8p2intermedia']=='c8p2intermediao6'){echo('checked');}?>>
                        Técnico sin título
                    </label>             
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="c8p1" id="c8p1" onclick="colocaropcionc8p2intermedia('c8p2intermediao7','valorc8p2intermedia','c8p2intermediadiv');" value="c8p2intermediao7" <?php if($arrayrespuestas['ec8p2intermedia']=='c8p2intermediao7'){echo('checked');}?>>
                        Técnico con título
                    </label>             
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="c8p1" id="c8p1" onclick="colocaropcionc8p2intermedia('c8p2intermediao8','valorc8p2intermedia','c8p2intermediadiv');" value="c8p2intermediao8" <?php if($arrayrespuestas['ec8p2intermedia']=='c8p2intermediao8'){echo('checked');}?>>
                        Tecnológico sin título
                    </label>             
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="c8p1" id="c8p1" onclick="colocaropcionc8p2intermedia('c8p2intermediao9','valorc8p2intermedia','c8p2intermediadiv');" value="c8p2intermediao9" <?php if($arrayrespuestas['ec8p2intermedia']=='c8p2intermediao9'){echo('checked');}?>>
                        Tecnológico con título
                    </label>             
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="c8p1" id="c8p1" onclick="colocaropcionc8p2intermedia('c8p2intermediao10','valorc8p2intermedia','c8p2intermediadiv');" value="c8p2intermediao10" <?php if($arrayrespuestas['ec8p2intermedia']=='c8p2intermediao10'){echo('checked');}?>>
                        Universitario sin título
                    </label>             
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="c8p1" id="c8p1" onclick="colocaropcionc8p2intermedia('c8p2intermediao11','valorc8p2intermedia','c8p2intermediadiv');" value="c8p2intermediao11" <?php if($arrayrespuestas['ec8p2intermedia']=='c8p2intermediao11'){echo('checked');}?>>
                        Universitario con título
                    </label>             
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="c8p1" id="c8p1" onclick="colocaropcionc8p2intermedia('c8p2intermediao12','valorc8p2intermedia','c8p2intermediadiv');" value="c8p2intermediao12" <?php if($arrayrespuestas['ec8p2intermedia']=='c8p2intermediao12'){echo('checked');}?>>
                        Posgrado sin título
                    </label>             
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="c8p1" id="c8p1" onclick="colocaropcionc8p2intermedia('c8p2intermediao13','valorc8p2intermedia','c8p2intermediadiv');" value="c8p2intermediao13" <?php if($arrayrespuestas['ec8p2intermedia']=='c8p2intermediao13'){echo('checked');}?>>
                        Posgrado con título
                    </label>             
                </div>
                
               <input type="text" class="form-control" id="valorc8p2intermedia" name="valorc8p2intermedia" style="display:none" placeholder="Text input" value="<?php echo($arrayrespuestas['ec8p2intermedia']); ?>">
            </div>
               
      <!-- chachaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa -->          

      <div id="c8p2intermediagradodiv" name="c8p2intermediagradodiv" <?php if($arrayrespuestas['ec8p2intermedia']==''){echo('class="form-group col-md-12 form-group-sm"');}else{echo('class="form-group col-md-12 form-group-sm"');}?>>   
            <div class="radio" id="c8p2intermediagrado1a5div" name="c8p2intermediagrado1a5div" <?php if($arrayrespuestas['ec8p2intermedia'] <> 'c8p2intermediao3'){echo('style="display:none"');}else{echo('');}  ?> >
                <div class="radio">2.b Cual es el ultimo nivel cursado ?<br>
                    <label><!--en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="c8p2intermediag" id="c8p2intermediag" onclick="colocaropcion('1','c8p2intermediagrado','c8p2intermediagrado1a5div');" value="1" <?php if($arrayrespuestas['ec8p2intermediagrado']=='1'){echo('checked');}?>>
                        1
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="c8p2intermediag" id="c8p2intermediag" onclick="colocaropcion('2','c8p2intermediagrado','c8p2intermediagrado1a5div');" value="2" <?php if($arrayrespuestas['ec8p2intermediagrado']=='2'){echo('checked');}?>>
                        2
                    </label>             
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="c8p2intermediag" id="c8p2intermediag" onclick="colocaropcion('3','c8p2intermediagrado','c8p2intermediagrado1a5div');" value="3" <?php if($arrayrespuestas['ec8p2intermediagrado']=='3'){echo('checked');}?>>
                        3
                    </label>             
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="c8p2intermediag" id="c8p2intermediag" onclick="colocaropcion('4','c8p2intermediagrado','c8p2intermediagrado1a5div');" value="4" <?php if($arrayrespuestas['ec8p2intermediagrado']=='4'){echo('checked');}?>>
                        4
                    </label>             
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="c8p2intermediag" id="c8p2intermediag" onclick="colocaropcion('5','c8p2intermediagrado','c8p2intermediagrado1a5div');" value="5" <?php if($arrayrespuestas['ec8p2intermediagrado']=='5'){echo('checked');}?>>
                        5
                    </label>             
                </div>
             </div>
                
            <div class="radio" id="c8p2intermediagrado6a9div" name="c8p2intermediagrado6a9div" <?php if($arrayrespuestas['ec8p2intermedia'] <> 'c8p2intermediao4'){echo('style="display:none"');}else{echo('');}  ?> >    
                <div class="radio">2.b Cual es el ultimo nivel cursado ?<br>
                    <label>
                        <input type="radio" name="c8p2intermediag" id="c8p2intermediag" onclick="colocaropcion('6','c8p2intermediagrado','c8p2intermediagrado6a9div');" value="6" <?php if($arrayrespuestas['ec8p2intermediagrado']=='6'){echo('checked');}?>>
                        6
                    </label>             
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="c8p2intermediag" id="c8p2intermediag" onclick="colocaropcion('7','c8p2intermediagrado','c8p2intermediagrado6a9div');" value="7" <?php if($arrayrespuestas['ec8p2intermediagrado']=='7'){echo('checked');}?>>
                        7
                    </label>             
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="c8p2intermediag" id="c8p2intermediag" onclick="colocaropcion('8','c8p2intermediagrado','c8p2intermediagrado6a9div');" value="8" <?php if($arrayrespuestas['ec8p2intermediagrado']=='8'){echo('checked');}?>>
                        8
                    </label>             
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="c8p2intermediag" id="c8p2intermediag" onclick="colocaropcion('9','c8p2intermediagrado','c8p2intermediagrado6a9div');" value="9" <?php if($arrayrespuestas['ec8p2intermediagrado']=='9'){echo('checked');}?>>
                        9
                    </label>             
                </div>
            </div>
            
            <div class="radio" id="c8p2intermediagrado10div" name="c8p2intermediagrado10div" <?php if($arrayrespuestas['ec8p2intermedia'] <> 'c8p2intermediao14'){echo('style="display:none"');}else{echo('');}  ?> >        
                <div class="radio">2.b Cual es el ultimo nivel cursado ?<br>
                    <label>
                        <input type="radio" name="c8p2intermediag" id="c8p2intermediag" onclick="colocaropcion('10','c8p2intermediagrado','c8p2intermediagrado10div');" value="10" <?php if($arrayrespuestas['ec8p2intermediagrado']=='10'){echo('checked');}?>>
                        10
                    </label>             
                </div>
            </div>
            <div class="radio" id="c8p2intermediagrado11a13div" name="c8p2intermediagrado11a13div" <?php if($arrayrespuestas['ec8p2intermedia'] <> 'c8p2intermediao5'){echo('style="display:none"');}else{echo('');}  ?> >        
                <div class="radio">2.b Cual es el ultimo nivel cursado ?<br>
                    <label>
                        <input type="radio" name="c8p2intermediag" id="c8p2intermediag" onclick="colocaropcion('11','c8p2intermediagrado','c8p2intermediagrado11a13div');" value="11" <?php if($arrayrespuestas['ec8p2intermediagrado']=='11'){echo('checked');}?>>
                        11
                    </label>             
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="c8p2intermediag" id="c8p2intermediag" onclick="colocaropcion('12','c8p2intermediagrado','c8p2intermediagrado11a13div');" value="12" <?php if($arrayrespuestas['ec8p2intermediagrado']=='12'){echo('checked');}?>>
                        12
                    </label>             
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="c8p2intermediag" id="c8p2intermediag" onclick="colocaropcion('13','c8p2intermediagrado','c8p2intermediagrado11a13div');" value="13" <?php if($arrayrespuestas['ec8p2intermediagrado']=='13'){echo('checked');}?>>
                        13
                    </label>             
                </div>
                </div>
            <input type="text" class="form-control" id="c8p2intermediagrado" name="c8p2intermediagrado" style="display:none" placeholder="Text input" value="<?php echo($arrayrespuestas['ec8p2intermediagrado']); ?>">
            </div>    
      <!-- finnn chachaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa -->
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
              
            
            <?php if($arrayrespuestas['ec8p2intermedia']=="")
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
    function colocaropcionc8p2intermedia(opcion,campoval,divcampo)
{
    //alert(opcion);
    $('#' + campoval).val(opcion);
    
    if(opcion == 'c8p2intermediao1' || opcion == 'c8p2intermediao2')
        {
           // alert('aca lo muestra') c8p2intermediagrado1a5div;
           
            
           
            $('#c8p2intermediagrado').val('0');
            $('#c8p2intermediagrado10div').hide(1000);
            $('#c8p2intermediagrado11a13div').hide(1000);
            $('#c8p2intermediagrado6a9div').hide(1000);
            $('#c8p2intermediagrado1a5div').hide(1000);
            
            $('#c8p2intermediagrado1a5div').removeClass('has-error');
            $('#c8p2intermediagrado6a9div').removeClass('has-error');
            $('#c8p2intermediagrado11a13div').removeClass('has-error');
            $('#c8p2intermediagrado10div').removeClass('has-error');
                    
                    
                    
                    
           
            
        }
        
       else if(opcion == 'c8p2intermediao6' || opcion == 'c8p2intermediao7')
        {
           // alert('aca lo muestra');
           
            
           
            $('#c8p2intermediagrado').val('9');
            $('#c8p2intermediagrado10div').hide(1000);
            $('#c8p2intermediagrado11a13div').hide(1000);
            $('#c8p2intermediagrado6a9div').hide(1000);
            $('#c8p2intermediagrado1a5div').hide(1000);
            
            $('#c8p2intermediagrado1a5div').removeClass('has-error');
            $('#c8p2intermediagrado6a9div').removeClass('has-error');
            $('#c8p2intermediagrado11a13div').removeClass('has-error');
            $('#c8p2intermediagrado10div').removeClass('has-error');
           
            
        }
        else if(opcion == 'c8p2intermediao8' || opcion == 'c8p2intermediao9' || opcion == 'c8p2intermediao10' || opcion == 'c8p2intermediao11' || opcion == 'c8p2intermediao12' || opcion == 'c8p2intermediao13')
        {
           // alert('aca lo muestra' );
           
            
           
            $('#c8p2intermediagrado').val('11');
            $('#c8p2intermediagrado10div').hide(1000);
            
            $('#c8p2intermediagrado11a13div').hide(1000);
            
            $('#c8p2intermediagrado6a9div').hide(1000);
            
            $('#c8p2intermediagrado1a5div').hide(1000);
            $('#c8p2intermediagrado1a5div').removeClass('has-error');
            $('#c8p2intermediagrado6a9div').removeClass('has-error');
            $('#c8p2intermediagrado11a13div').removeClass('has-error');
            $('#c8p2intermediagrado10div').removeClass('has-error');
           
            
        }
    else if(opcion == 'c8p2intermediao3')
        {
           // alert('aca lo muestra');
            $('#c8p2intermediagrado1a5div').show();
            $('#c8p2intermediagrado').val('');
            $('#c8p2intermediagrado1a5div').addClass(' has-error');            
            
            $('#c8p2intermediagrado6a9div').hide();
            $('#c8p2intermediagrado').val('98');
            $('#c8p2intermediagrado6a9div').removeClass(' has-error');
            
            $('#c8p2intermediagrado10div').hide();
            $('#c8p2intermediagrado').val('98');
            $('#c8p2intermediagrado10div').removeClass(' has-error');
            
            $('#c8p2intermediagrado11a13div').hide();
            $('#c8p2intermediagrado').val('98');
            $('#c8p2intermediagrado11a13div').removeClass(' has-error');
            
        }
        else if(opcion == 'c8p2intermediao4')
        {
           // alert('aca lo muestra');
            $('#c8p2intermediagrado6a9div').show();
            $('#c8p2intermediagrado').val('');
            $('#c8p2intermediagrado6a9div').addClass(' has-error');            
            
            $('#c8p2intermediagrado1a5div').hide();
            $('#c8p2intermediagrado').val('98');
            $('#c8p2intermediagrado1a5div').removeClass(' has-error');            
            
            $('#c8p2intermediagrado10div').hide();
            $('#c8p2intermediagrado').val('98');
            $('#c8p2intermediagrado10div').removeClass(' has-error');
            
            $('#c8p2intermediagrado11a13div').hide();
            $('#c8p2intermediagrado').val('98');
            $('#c8p2intermediagrado11a13div').removeClass(' has-error');
            
        }
        else if(opcion == 'c8p2intermediao14')
        {
           // alert('aca lo muestra');
            $('#c8p2intermediagrado10div').show();
            $('#c8p2intermediagrado').val('');
            $('#c8p2intermediagrado10div').addClass(' has-error');            
            
            $('#c8p2intermediagrado1a5div').hide();
            $('#c8p2intermediagrado').val('98');
            $('#c8p2intermediagrado1a5div').removeClass(' has-error');            
            
            $('#c8p2intermediagrado6a9div').hide();
            $('#c8p2intermediagrado').val('98');
            $('#c8p2intermediagrado6a9div').removeClass(' has-error');            
            
            $('#c8p2intermediagrado11a13div').hide();
            $('#c8p2intermediagrado').val('98');
            $('#c8p2intermediagrado11a13div').removeClass(' has-error');
            
        }
        else if(opcion == 'c8p2intermediao5')
        {
           // alert('aca lo muestra');
            $('#c8p2intermediagrado11a13div').show();
            $('#c8p2intermediagrado').val('');
            $('#c8p2intermediagrado11a13div').addClass(' has-error');            
            
            $('#c8p2intermediagrado1a5div').hide();
            $('#c8p2intermediagrado').val('98');
            $('#c8p2intermediagrado1a5div').removeClass(' has-error');            
            
            $('#c8p2intermediagrado6a9div').hide();
            $('#c8p2intermediagrado').val('98');
            $('#c8p2intermediagrado6a9div').removeClass(' has-error');            
            
            $('#c8p2intermediagrado10div').hide();
            $('#c8p2intermediagrado').val('98');
            $('#c8p2intermediagrado10div').removeClass(' has-error');
            
        }
        else
        {
            //alert('aca lo oculta');
            // $('#c8p2intermediagradodiv').hide();
            $('#c8p2intermediagrado1a5div').hide();
            $('#c8p2intermediagrado1a5div').removeClass(' has-error');
            $('#c8p2intermediagrado6a9div').hide();
            $('#c8p2intermediagrado6a9div').removeClass(' has-error');
            $('#c8p2intermediagrado10div').hide();
            $('#c8p2intermediagrado10div').removeClass(' has-error');
            $('#c8p2intermediagrado11a13div').hide();
            $('#c8p2intermediagrado11a13div').removeClass(' has-error');
            $('#c8p2intermediagrado').val('98');
           // $('#c8p2intermediagradodiv').removeClass(' has-error');            
        }
    validarbolitasytextoc8p2intermedia(divcampo,campoval);
}
//de aca para arriba es logica de bolas y textos
function validarcampotexcuadros(div,campo,ncampos)
{
    validarbolitasytextoc8p2intermedia(div,campo);
    validarcuadrosc8p2intermedia(div,ncampos);
} 
    
 function validarguardarc8p2intermedia()
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
function validarbolitasytextoc8p2intermedia(div,campo)
{ 
//    alert(div + ' juanpis ' + campo);
   if(($('#'+ campo).val() == '') || ($('#'+ campo).val() == '0'))
   { 
       $('#' + div).addClass(' has-error');
   }
   else
   { 
       $('#' + div).removeClass('has-error');
   }
   validarguardarc8p2intermedia();
}   
    
    
    
    
    
    $(document).ready(function()
    {

        $("#guardar").click(function ()
        {
                        $.ajax({
                          url: "fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),
                          vidintegrante : $('#idintegrante').val(),
                          vvalorc8p2intermedia : $('#valorc8p2intermedia').val(),vvalorc8p2intermediagrado : $('#c8p2intermediagrado').val()},    
                          dataType: "html",
                          success : function(obj){                      
                          botonguardar();
                          }
                        });                    
        });


 $("#capitulos").click(function ()
        {
            
            location.href = "../c_capitulosintegranteintermedia/fc_capitulosintegranteintermedia?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() ;                    
         
            });
        
        $("#actualizar").click(function ()
        {
                        $.ajax({
                          url: "fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),
                          vidintegrante : $('#idintegrante').val(),
                          vvalorc8p2intermedia : $('#valorc8p2intermedia').val(),vvalorc8p2intermediagrado : $('#c8p2intermediagrado').val()},    
                          dataType: "html",
                          success : function(obj){                      
                          botonguardar();
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
        if($('#valorc8p2intermedia').val() == 'c8p2intermediao1' || $('#valorc8p2intermedia').val() == 'c8p2intermediao14' || $('#valorc8p2intermedia').val() == 'c8p2intermediao2' || $('#valorc8p2intermedia').val() == 'c8p2intermediao3' || $('#valorc8p2intermedia').val() === 'c8p2intermediao4' || 
           $('#valorc8p2intermedia').val() == 'c8p2intermediao6' || $('#valorc8p2intermedia').val() == 'c8p2intermediao8' || $('#valorc8p2intermedia').val() == 'c8p2intermediao10' || $('#valorc8p2intermedia').val() == 'c8p2intermediao12')
           {                $.ajax({
                            url: "../c_c8p3intermedia/fc_actualizar",
                            type: "GET",
                            data: {vfolio : $('#folio').val(),
                            vidintegrante : $('#idintegrante').val(),
                            vc8p3intermedia : '98'},
                            dataType: "html",
                            success : function(obj)
                            {
                            location.href = "../c_c8p4intermedia/fc_c8p4intermedia?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
                            }
                           });
                           
           }
           else if (($('#valorc8p2intermedia').val() == 'c8p2intermediao5' && $('#c8p3intermedia').val() == '98')||
                    ($('#valorc8p2intermedia').val() == 'c8p2intermediao7' && $('#c8p3intermedia').val() == '98') ||
                    ($('#valorc8p2intermedia').val() == 'c8p2intermediao9' && $('#c8p3intermedia').val() == '98') ||
                    ($('#valorc8p2intermedia').val() == 'c8p2intermediao11' && $('#c8p3intermedia').val() == '98')||
                    ($('#valorc8p2intermedia').val() == 'c8p2intermediao13' && $('#c8p3intermedia').val() == '98'))
                 {
                    $.ajax({
                            url: "../c_c8p3intermedia/fc_actualizar",
                            type: "GET",
                            data: {vfolio : $('#folio').val(),
                            vidintegrante : $('#idintegrante').val(),
                            vc8p3intermedia : ''},
                            dataType: "html",
                            success : function(obj)
                            {
                            location.href = "../c_c8p3intermedia/fc_c8p3intermedia?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
                            }
                           });
                 }
                 else{
                     location.href = "../c_c8p3intermedia/fc_c8p3intermedia?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
                 }
        });
              
        $("#anterior").click(function ()
        {
            
            if($('#edad').val() > 4 && $('#edad').val() <8)
            {
                botonanterior();
                 location.href = "../c_capitulosintegranteintermedia/fc_capitulosintegranteintermedia?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() ;                    
            }
            else if($('#edad').val() > 7 )
            {
                 botonanterior();
         location.href = "../c_c8p1intermedia/fc_c8p1intermedia?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"&variable=81";                    
            }
        
        });

//para cargar variables capitulo, pregunta,encuestador,vivienda,barra



cargardatosgenerales('<?php echo($arraydatosgenerales['ecapitulo']); ?>','Pregunta 2 de 7','<?php echo($arraydatosgenerales['enomcoges']); ?>','<?php echo($arraydatosgenerales['enombreintegrante']." "." - "." "."Sexo:"." ".$arraydatosgenerales['esexointegrante']."   "."  -  "."   "."Edad:"."   ".$arraydatosgenerales['eedadintegrante']); ?>','25');
//control del boton ayuda
botonayuda();

});

</script>
</html>