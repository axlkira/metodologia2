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
        <input type="text"  class="form-control input-sm " id="c9p37o11"  style="display:none"  name="c9p37o11"   value="<?php echo ($arrayrespuestas['ec9p37o11']);?>">
        <input type="text"  class="form-control input-sm " id="c9p38o9"  style="display:none"  name="c9p38o9"   value="<?php echo ($arrayrespuestas['ec9p38o9']);?>">
        <input type="text" class="form-control" id="valorc9p40" style="display:none" name="valorc9p40"  placeholder="Text input" value="<?php echo($arrayrespuestas['ec9p40']); ?>">
        <!--fin para imprimir el idintegrante y llevarlo-->
<hr>
        <form class="form-group" name="formulario" id="formulario">

            <!--inicio radio una sola seleccion-->
             <div class="row">
        <div id="c9p39div" name="c9p39div" class="form-group col-md-12 form-group-sm">
        <div id="c9p39o0div" class="has-error">
            <label class="control-label">3. Ayudas a tus padres, familiares a alguna otra persona en un negocio o cultivo en alguna de las siguientes actividades: (Selección Múltiple)
                     
                     <button type="button" id="vayuda" name="vayuda" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModal">
                        <span class="glyphicon glyphicon-question-sign" aria-hidden="true"></span> Ayuda
                     </button>   <br><br>
            </label>
        </div>
       
        <div id="c9p39o1div" <?php if($arrayrespuestas['ec9p39o1']=='' || $arrayrespuestas['ec9p39o1']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="c9p39o1" id="c9p39o1" onclick="cambiarsinoc9p39('SI','c9p39o1','c9p39o1div','c9p39div',9);" <?php if($arrayrespuestas['ec9p39o1']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            Fabricar productos
          </label>
        </div>
        </div>
        <div id="c9p39o2div" <?php if($arrayrespuestas['ec9p39o2']==''|| $arrayrespuestas['ec9p39o2']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="c9p39o2" id="c9p39o2" onclick="cambiarsinoc9p39('SI','c9p39o2','c9p39o2div','c9p39div',9);" <?php if($arrayrespuestas['ec9p39o2']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
           Ayudar a cocinar
          </label>
        </div>
        </div>  
            
            <div id="c9p39o3div" <?php if($arrayrespuestas['ec9p39o3']==''|| $arrayrespuestas['ec9p39o3']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="c9p39o3" id="c9p39o3" onclick="cambiarsinoc9p39('SI','c9p39o3','c9p39o3div','c9p39div',9);" <?php if($arrayrespuestas['ec9p39o3']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
          Vender Productos o servicios

          </label>
        </div>
        </div>  
            
            <div id="c9p39o4div" <?php if($arrayrespuestas['ec9p39o4']==''|| $arrayrespuestas['ec9p39o4']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="c9p39o4" id="c9p39o4" onclick="cambiarsinoc9p39('SI','c9p39o4','c9p39o4div','c9p39div',9);" <?php if($arrayrespuestas['ec9p39o4']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
           Llevar Domicilios o hacer mandados
          </label>
        </div>
        </div>  
            
        <div id="c9p39o5div" <?php if($arrayrespuestas['ec9p39o5']==''|| $arrayrespuestas['ec9p39o5']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="c9p39o5" id="c9p39o5" onclick="cambiarsinoc9p39('SI','c9p39o5','c9p39o5div','c9p39div',9);" <?php if($arrayrespuestas['ec9p39o5']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
           Cultivar la tierra
         </label>
        </div>
        </div>
            
            <div id="c9p39o6div" <?php if($arrayrespuestas['ec9p39o6']==''|| $arrayrespuestas['ec9p39o6']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="c9p39o6" id="c9p39o6" onclick="cambiarsinoc9p39('SI','c9p39o6','c9p39o6div','c9p39div',9);" <?php if($arrayrespuestas['ec9p39o6']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
             Recolectar cartones y/o botellas
         </label>
        </div>
        </div>
            <div id="c9p39o7div" <?php if($arrayrespuestas['ec9p39o7']==''|| $arrayrespuestas['ec9p39o7']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="c9p39o7" id="c9p39o7" onclick="cambiarsinoc9p39('SI','c9p39o7','c9p39o7div','c9p39div',9);" <?php if($arrayrespuestas['ec9p39o7']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
             No ayudo a nadie en un negocio o cultivo
         </label>
        </div>
        </div>
            <div id="c9p39o8div" <?php if($arrayrespuestas['ec9p39o8']==''|| $arrayrespuestas['ec9p39o8']=='NO'){echo'class=" has-error"';}else{echo'class=""';}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="c9p39o8"  id="c9p39o8" onclick="modal1207()" onclick="cambiarsinoc9p39('SI','c9p39o7','c9p39o7div','c9p39div',9);" <?php if($arrayrespuestas['ec9p39o8']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            Otras. Cuál?
         </label>
        </div>
        </div>
            
        <div class="row" id="c9p39cualmostrar" name="c9p39cualmostrar" <?php if($arrayrespuestas['ec9p39o8']== 'NO'||$arrayrespuestas['ec9p39o8']== ''){echo('style="display:none"');}else{echo('');}  ?> >
        <div  id="c9p39cualdiv" name="c9p39cualdiv" class="form-group col-md-3">
                       <label class="control-label">Cual?</label>
                       <input type="text" class="form-control text-uppercase" id="c9p39cual" onkeypress="return soloLetras(event)"  onchange="validarcuadrosc9p39('c9p39cualdiv',9)" name="c9p39cual"   placeholder="Cual?" value="<?php if($arrayrespuestas['ec9p39cual'] == ''){echo('0');}else{ echo($arrayrespuestas['ec9p39cual']);} ?>">
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
            <?php if( $arrayrespuestas['ec9p39o2']=="" & $arrayrespuestas['ec9p39o3']=="" & $arrayrespuestas['ec9p39o4']==""& $arrayrespuestas['ec9p39cual']=="")
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
    
    <div class="modal fade" id="modal1207" data-backdrop="static" >
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
<!--          <span aria-hidden="true">&times;</span>-->
        </button>
      </div>
      <div class="modal-body">
        <p>Esta opción se elige si la actividad a registrar indica trabajo infantil</p>
      </div>
      <div class="modal-footer">
          <button type="button" id="conti" class="btn btn-primary" data-dismiss="modal">Continuar</button>
          <button type="button" id="cancel" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
      </div>
    </div>
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
      function modal1207() 
{
$('#modal1207').modal('show');

}  
    
     
    
    $(document).ready(function()
    {
        
         $("#conti").click(function ()
        {
                     if(document.getElementById('c9p39o8').checked){
//                         alert('chulo');
                         $('#c9p39cualmostrar').show();
                         $('#c9p39cual').val('');
//                         $('#c9p39o8').val('SI');
                         $('#c9p39o8div').removeClass('has-error');
                         $('#c9p39cualdiv').addClass('has-error');
                         
                         
                         
                         
                              }
                              else
                              {
                         $('#c9p39cualmostrar').hide();
                         $('#c9p39cual').val('98'); 
                         $('#c9p39o8div').addClass('has-error');
                         $('#c9p39cualdiv').removeClass('has-error');
                         
                     }         
                        
        });
        
         $("#cancel").click(function ()
        {
                        document.getElementById('c9p39o8').checked = false;         
                        $('#c9p39cualmostrar').hide();
        });

        $("#guardar").click(function ()
        {
                        $.ajax({
                          url: "fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),vidintegrante : $('#idintegrante').val(), vc9p39o1 : $('#c9p39o1').val(), vc9p39o2 : $('#c9p39o2').val(),
                          vc9p39o3 : $('#c9p39o3').val(), vc9p39o4 : $('#c9p39o4').val(), vc9p39o5 : $('#c9p39o5').val(), vc9p39o6 : $('#c9p39o6').val(),
                          vc9p39o7 : $('#c9p39o7').val(), vc9p39o8 : $('#c9p39o8').val(),vc9p39cual : $('#c9p39cual').val()},    
                          dataType: "html",
                          success : function(obj){                      
                          botonguardar();
                          saltarc9p39();
                          }
                        });                    
        });

        
        $("#actualizar").click(function ()
        {
                        $.ajax({
                          url: "fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),vidintegrante : $('#idintegrante').val(), vc9p39o1 : $('#c9p39o1').val(), vc9p39o2 : $('#c9p39o2').val(),
                          vc9p39o3 : $('#c9p39o3').val(), vc9p39o4 : $('#c9p39o4').val(), vc9p39o5 : $('#c9p39o5').val(), vc9p39o6 : $('#c9p39o6').val(),
                          vc9p39o7 : $('#c9p39o7').val(), vc9p39o8 : $('#c9p39o8').val(),vc9p39cual : $('#c9p39cual').val()},    
                          dataType: "html",
                          success : function(obj){                      
                          botonguardar();
                          saltarc9p39();
                          }
                        });                    
        });
        $("#siguiente").click(function ()
        {
         botonsiguiente();
         if ($('#c9p37o11').val()=== 'SI' && $('#c9p38o9').val()=== 'SI' && $('#c9p39o7').val()=== 'SI')
         {
         location.href = "../c_capitulosintegrante/fc_capitulosintegrante?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
         }
         else
         {
         location.href = "../c_c9p40/fc_c9p40?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";
         }
         
        });
              
        $("#anterior").click(function ()
        {
         botonanterior();
         location.href = "../c_c9p38/fc_c9p38?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
        
        });



cargardatosgenerales('<?php echo($arraydatosgenerales['ecapitulo']); ?>','Pregunta 3 de 7','<?php echo($arraydatosgenerales['enomcoges']); ?>','<?php echo($arraydatosgenerales['enombreintegrante']." "." - "." "."Sexo:"." ".$arraydatosgenerales['esexointegrante']."   "."  -  "."   "."Edad:"."   ".$arraydatosgenerales['eedadintegrante']); ?>','45');
//control del boton ayuda
botonayuda();

});


//dea aca para abajo es logica de cuadros
function cambiarsinoc9p39(opcion,campoval,divcampo,divcompleto,campos,mostrar)
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
    if(campoval == 'c9p39o8')
        {
            if($('#' + campoval).val() == 'SI')
            {
                //alert('aca lo muestra');
                $('#c9p39cualmostrar').show(1000);
                $('#c9p39cual').val('');
                $('#c9p39cualdiv').addClass(' has-error');        
                $('#c9p39o8div').removeClass(' has-error');

            }
            else
            {
                //alert('aca lo oculta');
                $('#c9p39cualdiv').hide(1000);
                $('#c9p39cual').val('98');
                $('#c9p39cualdiv').removeClass(' has-error');
                $('#c9p39o8div').addClass(' has-error');
  
            }
        }
       if(campoval == 'c9p39o7')
           {
            if($('#' + campoval).val() == 'SI')
            {
              $('#c9p39o1').prop('checked' , false);
              $('#c9p39o1div').addClass(' has-error');
              $('#c9p39o2').prop('checked' , false);
              $('#c9p39o2div').addClass(' has-error');
              $('#c9p39o3').prop('checked' , false);
              $('#c9p39o3div').addClass(' has-error');
              $('#c9p39o4').prop('checked' , false);
              $('#c9p39o4div').addClass(' has-error');
              $('#c9p39o5').prop('checked' , false);
              $('#c9p39o5div').addClass(' has-error');
              $('#c9p39o6').prop('checked' , false);
              $('#c9p39o6div').addClass(' has-error');
              $('#c9p39o8').prop('checked' , false);
              $('#c9p39o8div').addClass(' has-error');
              
              $('#c9p39cualmostrar').hide(1000);
              $('#c9p39cual').val('98');
                            
              $('#c9p39o1').val('NO');
              $('#c9p39o2').val('NO');
              $('#c9p39o3').val('NO');
              $('#c9p39o4').val('NO');
              $('#c9p39o5').val('NO');
              $('#c9p39o6').val('NO');
              $('#c9p39o8').val('NO');
              
              }
}
        else
       {
          $('#c9p39o7').prop('checked' , false); 
          $('#c9p39o7').val('NO');
          $('#c9p39o7div').addClass(' has-error');
      }
        


      validarcuadrosc9p39(divcompleto,campos);
}

function validarcuadrosc9p39(divcuadro,ncampos)
{//alert(ncampos + '-' + $('.has-error').length + '-' + $('#c9p39cual').val());
    
    if(document.getElementById('c9p39o8').checked && $('#c9p39cual').val() !== ''){
            
           $('#guardar').prop('disabled', false);
           $('#actualizar').prop('disabled', false);
           $('#cancelar').prop('disabled', true);
           $('#anterior').prop('disabled', false);
           $('#siguiente').prop('disabled', true);
           
           
          
        
//        $('#c9p39cualdiv').removeClass('has-error');
    
            
        }else{
//        $('#c9p39cualdiv').addClass('has-error');
        if($('.has-error').length == (ncampos))
        {  
            
          
            
            
           $('#guardar').prop('disabled', true);
           $('#actualizar').prop('disabled', true);
           $('#cancelar').prop('disabled', true);
           $('#anterior').prop('disabled', false);
           $('#siguiente').prop('disabled', true);
        }
        else
        { //alert('diferentes');
           $('#guardar').prop('disabled', false);
           $('#actualizar').prop('disabled', false);
           $('#cancelar').prop('disabled', false);
           $('#anterior').prop('disabled', true);
           $('#siguiente').prop('disabled', true);       
        }
    }
}

function validarcampotexcuadros(div,campo,ncampos)
{
    validarbolitasytexto(div,campo);

    validarcuadrosc9p39(div,ncampos);
}



function saltarc9p39()
{
    if ($('#c9p37o11').val()=== 'SI' && $('#c9p38o9').val()=== 'SI' && $('#c9p39o7').val()=== 'SI')
    {
                          $.ajax({
                          url: "../c_c9p40/fc_actualizar",
                          type: "GET",
                          data: {
                          vfolio : $('#folio').val(),
                          vidintegrante : $('#idintegrante').val(),
                          vvalorc9p40 : '98'},
                          dataType: "html",
                          success : function(obj)
                          {                      
                           
                          }
                        }); 
                        
                         $.ajax({
                          url: "../c_c9p41/fc_actualizar",
                          type: "GET",
                          data: {
                          vfolio : $('#folio').val(),
                          vidintegrante : $('#idintegrante').val(),
                          vvalorc9p41 : '98'},
                          dataType: "html",
                          success : function(obj)
                          {                      
                           
                          }
                        }); 
                        
                        
                        $.ajax({
                          url: "../c_c9p42/fc_actualizar",
                          type: "GET",
                          data: {
                          vfolio : $('#folio').val(),
                          vidintegrante : $('#idintegrante').val(),
                          vc9p42o1 : '98',
                          vc9p42o2 : '98',
                          vc9p42o3 : '98',
                          vc9p42o4 : '98',
                          vc9p42o5 : '98',
                          vc9p42cual : '98'},
                          dataType: "html",
                          success : function(obj)
                          {                      
                           
                          }
                        }); 
                        
                        $.ajax({
                          url: "../c_c9p43/fc_actualizar",
                          type: "GET",
                          data: {
                          vfolio : $('#folio').val(),
                          vidintegrante : $('#idintegrante').val(),
                          vvalorc9p43 : '98'},
                          dataType: "html",
                          success : function(obj)
                          {                      
                           
                          }
                        }); 
    }
    else if (($('#c9p37o11').val()!== 'SI' && $('#valorc9p40').val()!== '98' ) || ($('#c9p38o9').val()!== 'SI' && $('#valorc9p40').val()!== '98'  ) || ($('#c9p39o7').val()!== 'SI' && $('#valorc9p40').val()!== '98' ))
    {
        //alert('axl');
                          $.ajax({
                          url: "../c_c9p40/fc_actualizar",
                          type: "GET",
                          data: {
                          vfolio : $('#folio').val(),
                          vidintegrante : $('#idintegrante').val(),
                          vvalorc9p40 : ''},
                          dataType: "html",
                          success : function(obj)
                          {                      
                           
                          }
                        }); 
                        
                         $.ajax({
                          url: "../c_c9p41/fc_actualizar",
                          type: "GET",
                          data: {
                          vfolio : $('#folio').val(),
                          vidintegrante : $('#idintegrante').val(),
                          vvalorc9p41 : ''},
                          dataType: "html",
                          success : function(obj)
                          {                      
                           
                          }
                        }); 
                        
                        
                        $.ajax({
                          url: "../c_c9p42/fc_actualizar",
                          type: "GET",
                          data: {
                          vfolio : $('#folio').val(),
                          vidintegrante : $('#idintegrante').val(),
                          vc9p42o1 : '',
                          vc9p42o2 : '',
                          vc9p42o3 : '',
                          vc9p42o4 : '',
                          vc9p42o5 : '',
                          vc9p42cual : ''},
                          dataType: "html",
                          success : function(obj)
                          {                      
                           
                          }
                        }); 
                        
                        $.ajax({
                          url: "../c_c9p43/fc_actualizar",
                          type: "GET",
                          data: {
                          vfolio : $('#folio').val(),
                          vidintegrante : $('#idintegrante').val(),
                          vvalorc9p43 : ''},
                          dataType: "html",
                          success : function(obj)
                          {                      
                           
                          }
                        }); 
        
    }else
    {
        $.ajax({
                          url: "../c_c9p40/fc_actualizar",
                          type: "GET",
                          data: {
                          vfolio : $('#folio').val(),
                          vidintegrante : $('#idintegrante').val(),
                          vvalorc9p40 : ''},
                          dataType: "html",
                          success : function(obj)
                          {                      
                           
                          }
                        }); 
                        
                         $.ajax({
                          url: "../c_c9p41/fc_actualizar",
                          type: "GET",
                          data: {
                          vfolio : $('#folio').val(),
                          vidintegrante : $('#idintegrante').val(),
                          vvalorc9p41 : ''},
                          dataType: "html",
                          success : function(obj)
                          {                      
                           
                          }
                        }); 
                        
                        
                        $.ajax({
                          url: "../c_c9p42/fc_actualizar",
                          type: "GET",
                          data: {
                          vfolio : $('#folio').val(),
                          vidintegrante : $('#idintegrante').val(),
                          vc9p42o1 : '',
                          vc9p42o2 : '',
                          vc9p42o3 : '',
                          vc9p42o4 : '',
                          vc9p42o5 : '',
                          vc9p42cual : ''},
                          dataType: "html",
                          success : function(obj)
                          {                      
                           
                          }
                        }); 
                        
                        $.ajax({
                          url: "../c_c9p43/fc_actualizar",
                          type: "GET",
                          data: {
                          vfolio : $('#folio').val(),
                          vidintegrante : $('#idintegrante').val(),
                          vvalorc9p43 : ''},
                          dataType: "html",
                          success : function(obj)
                          {                      
                           
                          }
                        }); 
    }
    
 
    
}




</script>
</html>