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

           <!--Check varias selecciones -->
    <div class="row">
        <div id="c9p27intermediadiv" name="c9p27intermediadiv" class="form-group col-md-12 form-group-sm">
        <div id="c9p27intermediao0div" class="has-error">
        <label class="control-label">2. El mes pasado recibió pagos por: (Selección mútiple)
                    
            <button type="button" id="vayuda" name="vayuda" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModal">
                        <span class="glyphicon glyphicon-question-sign" aria-hidden="true"></span> Ayuda
                    </button>       
        </label>
        </div>
            
        <div id="c9p27intermediao1div" <?php if($arrayrespuestas['ec9p27intermediao1']=='' || $arrayrespuestas['ec9p27intermediao1']=='NO' || $arrayrespuestas['ec9p27intermediao1']=='98'){echo('class=" has-error"');}?>>
        <div class="checkbox">
            <label> <!--en este caso se manda a la fincion javascript el nombre del campo-->
              <input type="checkbox" name="c9p27intermediao1" id="c9p27intermediao1" onclick="cambiarsinoc9p27intermedia('SI','c9p27intermediao1','c9p27intermediao1div','c9p27intermediadiv',3);" <?php if($arrayrespuestas['ec9p27intermediao1']=='SI'){echo('value="SI" checked');}else{echo('value="NO" ');}?>>
            a. Arriendos de casas, apartamentos, fincas, lotes, vehiculos, equipos, etc.
            </label>
        </div>
        </div>
            
         <div class="row" id="c9p27intermediao1cuantomostrar" name="c9p27intermediao1cuantomostrar" <?php if($arrayrespuestas['ec9p27intermediao1cuanto']=='SI'|| $arrayrespuestas['ec9p27intermediao1cuanto']==''|| $arrayrespuestas['ec9p27intermediao1cuanto']=='98'){echo('style="display:none"');}?> >
        <div  id="c9p27intermediao1cuantodiv" name="c9p27intermediao1cuantodiv" class="form-group col-md-3">
        <label class="control-label">Valor mes pasado?</label>
        <input type="text" class="form-control text-uppercase" id="c9p27intermediao1cuanto" onkeypress="return soloNumeros(event)"  onchange="validarcampotexcuadros('c9p27intermediao1cuantodiv','c9p27intermediao1cuanto','4')" name="c9p27intermediao1cuanto" value="<?php if($arrayrespuestas['ec9p27intermediao1cuanto'] == ''){echo('98');}else{ echo($arrayrespuestas['ec9p27intermediao1cuanto']);} ?>">
        </div>

        </div>   
            
            
        <div id="c9p27intermediao2div" <?php if($arrayrespuestas['ec9p27intermediao2']=='' || $arrayrespuestas['ec9p27intermediao2']=='NO' || $arrayrespuestas['ec9p27intermediao2']=='98'){echo('class=" has-error"');}?>>
        <div class="checkbox">
            <label> <!--en este caso se manda a la fincion javascript el nombre del campo-->
              <input type="checkbox" name="c9p27intermediao2" id="c9p27intermediao2" onclick="cambiarsinoc9p27intermedia('SI','c9p27intermediao2','c9p27intermediao2div','c9p27intermediadiv',3);" <?php if($arrayrespuestas['ec9p27intermediao2']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            b. Pensiones o jubilaciones por vejez, invalidez o sustitución pensional.
            </label>
        </div>
        </div> 
            
        <div class="row" id="c9p27intermediao2cuantomostrar" name="c9p27intermediao2cuantomostrar" <?php if($arrayrespuestas['ec9p27intermediao2cuanto']=='SI'|| $arrayrespuestas['ec9p27intermediao2cuanto']=='' || $arrayrespuestas['ec9p27intermediao2cuanto']=='98'){echo('style="display:none"');}?> >
        <div  id="c9p27intermediao2cuantodiv" name="c9p27intermediao2cuantodiv" class="form-group col-md-3">
        <label class="control-label">Valor mes pasado?</label>
        <input type="text" class="form-control text-uppercase" id="c9p27intermediao2cuanto" onkeypress="return soloNumeros(event)"  onchange="validarcampotexcuadros('c9p27intermediao2cuantodiv','c9p27intermediao2cuanto','4')" name="c9p27intermediao2cuanto" value="<?php if($arrayrespuestas['ec9p27intermediao2cuanto'] == ''){echo('98');}else{ echo($arrayrespuestas['ec9p27intermediao2cuanto']);} ?>">
        </div>

        </div>    
            
            
        <div id="c9p27intermediao3div" <?php if($arrayrespuestas['ec9p27intermediao3']=='' || $arrayrespuestas['ec9p27intermediao3']=='NO' || $arrayrespuestas['ec9p27intermediao3']=='98'){echo('class=" has-error"');}?>>
        <div class="checkbox">
            <label> <!--en este caso se manda a la fincion javascript el nombre del campo-->
              <input type="checkbox" name="c9p27intermediao3" id="c9p27intermediao3" onclick="cambiarsinoc9p27intermedia('SI','c9p27intermediao3','c9p27intermediao3div','c9p27intermediadiv',3);" <?php if($arrayrespuestas['ec9p27intermediao3']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
             c. Pensión alimenticia por paternidad, divorcio o separación.
            </label>
        </div>
        </div> 
            
            <br>
            
        <div class="row" id="c9p27intermediao3cuantomostrar" name="c9p27intermediao3cuantomostrar" <?php if($arrayrespuestas['ec9p27intermediao3cuanto']=='SI'|| $arrayrespuestas['ec9p27intermediao3cuanto']=='' || $arrayrespuestas['ec9p27intermediao3cuanto']=='98'){echo('style="display:none"');}?> >
        <div  id="c9p27intermediao3cuantodiv" name="c9p27intermediao3cuantodiv" class="form-group col-md-3">
        <label class="control-label">Valor mes pasado?</label>
        <input type="text" class="form-control text-uppercase" id="c9p27intermediao3cuanto" onkeypress="return soloNumeros(event)"  onchange="validarcampotexcuadros('c9p27intermediao3cuantodiv','c9p27intermediao3cuanto','4')" name="c9p27intermediao3cuanto" value="<?php if($arrayrespuestas['ec9p27intermediao3cuanto'] == ''){echo('98');}else{ echo($arrayrespuestas['ec9p27intermediao3cuanto']);} ?>">
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
<br>
            <!--inicio botonera guardar y actualizar-->
            <?php if($arrayrespuestas['ec9p27intermediao1']=="" & $arrayrespuestas['ec9p27intermediao2']=="" & $arrayrespuestas['ec9p27intermediao3']=="")
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
                          vc9p27intermediao1 : $('#c9p27intermediao1').val(),
                          vc9p27intermediao1cuanto : $('#c9p27intermediao1cuanto').val(),
                          vc9p27intermediao2 : $('#c9p27intermediao2').val(),
                          vc9p27intermediao2cuanto : $('#c9p27intermediao2cuanto').val(),
                          vc9p27intermediao3 : $('#c9p27intermediao3').val(),
                          vc9p27intermediao3cuanto : $('#c9p27intermediao3cuanto').val()},                      
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
                          vc9p27intermediao1 : $('#c9p27intermediao1').val(),
                          vc9p27intermediao1cuanto : $('#c9p27intermediao1cuanto').val(),
                          vc9p27intermediao2 : $('#c9p27intermediao2').val(),
                          vc9p27intermediao2cuanto : $('#c9p27intermediao2cuanto').val(),
                          vc9p27intermediao3 : $('#c9p27intermediao3').val(),
                          vc9p27intermediao3cuanto : $('#c9p27intermediao3cuanto').val()},                      
                          dataType: "html",
                          success : function(obj){                      
                          botonguardar();
                          }
                        });                    
        });
        
        
         $("#capitulos").click(function ()
        {
            
            location.href = "../c_capitulosintegranteintermediaLCV1/fc_capitulosintegranteintermediaLCV1?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() ;                    
         
            });

        $("#siguiente").click(function ()
        {
         botonsiguiente();
         
         location.href = "../c_c9p28intermediaLCV1/fc_c9p28intermediaLCV1?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val();                    

        });

              
        $("#anterior").click(function ()
        {
         botonanterior();
         location.href = "../c_c9p26intermediaLCV1/fc_c9p26intermediaLCV1?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
        });

//para cargar variables capitulo, pregunta,encuestador,vivienda,barra



cargardatosgenerales('<?php echo($arraydatosgenerales['ecapitulo']); ?>','Pregunta 2 de 4','<?php echo($arraydatosgenerales['enomcoges']); ?>','<?php echo($arraydatosgenerales['enombreintegrante']." "." - "." "."Sexo:"." ".$arraydatosgenerales['esexointegrante']."   "."  -  "."   "."Edad:"."   ".$arraydatosgenerales['eedadintegrante']); ?>','50');
//control del boton ayuda
botonayuda();

});
//dea aca para abajo es logica de cuadros
function cambiarsinoc9p27intermedia(opcion,campoval,divcampo,divcompleto,campos)
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
    if(campoval == 'c9p27intermediao1')
        {
            if($('#' + campoval).val() == 'SI')
            {
                //alert('aca lo muestra');
                $('#c9p27intermediao1cuantomostrar').show();
                $('#c9p27intermediao1cuanto').val('');
                $('#c9p27intermediao1cuantodiv').addClass(' has-error');            

            }
            else
            {
                //alert('aca lo oculta');
                $('#c9p27intermediao1cuantomostrar').hide();
                $('#c9p27intermediao1cuanto').val('98');
                $('#c9p27intermediao1cuantodiv').removeClass(' has-error');
  
            }
        }
        if(campoval == 'c9p27intermediao2')
        {
            if($('#' + campoval).val() == 'SI')
            {
                //alert('aca lo muestra');
                $('#c9p27intermediao2cuantomostrar').show();
                $('#c9p27intermediao2cuanto').val('');
                $('#c9p27intermediao2cuantodiv').addClass(' has-error');            
            }
            else
            {
                //alert('aca lo oculta');
                $('#c9p27intermediao2cuantomostrar').hide();
                $('#c9p27intermediao2cuanto').val('98');
                $('#c9p27intermediao2cuantodiv').removeClass(' has-error');
  
            }
        }
        if(campoval == 'c9p27intermediao3')
        {
            if($('#' + campoval).val() == 'SI')
            {
                //alert('aca lo muestra');
                $('#c9p27intermediao3cuantomostrar').show();
                $('#c9p27intermediao3cuanto').val('');
                $('#c9p27intermediao3cuantodiv').addClass(' has-error');             
            }
            else
            {
                //alert('aca lo oculta');
                $('#c9p27intermediao3cuantomostrar').hide();
                $('#c9p27intermediao3cuanto').val('98');
                $('#c9p27intermediao3cuantodiv').removeClass(' has-error');
            }
        }
     
        
      validarcuadrosc9p27intermedia(divcompleto,campos);
}
function validarcuadrosc9p27intermedia(divcuadro,ncampos)
{
    //alert($('#' + divcuadro).find('input').prop('checked', true).length);
    //alert($('.has-error').length);
    //alert(ncampos + ' ncampos');
    
    if ($('#c9p27intermediao1cuanto').val() != '' && $('#c9p27intermediao2cuanto').val() != '' && $('#c9p27intermediao3cuanto').val() != '')
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
function validarcampotexcuadros(div,campo,ncampos)
{
    validarbolitasytexto(div,campo);

    validarcuadrosc9p27intermedia(div,ncampos);
}</script>
</html>