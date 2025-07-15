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
<!--        <input type="text" class="form-control input-sm" id="c11p2o7" name="c11p2o7"  style="display:none"   value="<?php echo($arrayrespuestas['ec11p2o7']); ?>">
        <input type="text" class="form-control input-sm" id="c11p3ao1" name="c11p3ao1"  style="display:none"  value="<?php echo($arrayrespuestas['ec11p3ao1']); ?>">
        fin para imprimir el folio y llevarlo-->
<hr>
        <form class="form-group" name="formulario" id="formulario">

           <!--Check varias selecciones -->
    <div class="row">
        <div id="c11p11adiv" name="c11p11adiv" class="form-group col-md-12 form-group-sm">
        <div id="c11p11ao0div" class="has-error">
            <label class="control-label">11a. ¿ Cuáles han sido las soluciones que han implementado ante dichas situaciones?( SELECCIÓN DE MULTIPLE RESPUESTA)
                     
                     <button type="button" id="vayuda" name="vayuda" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModal">
                        <span class="glyphicon glyphicon-question-sign" aria-hidden="true"></span> Ayuda
                    </button>       
        </label>
        </div>
        <div id="c11p11ao1div" <?php if($arrayrespuestas['ec11p11ao1']=='' || $arrayrespuestas['ec11p11ao1']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
            <label> <!--en este caso se manda a la fincion javascript el nombre del campo-->
              <input type="checkbox" name="c11p11ao1" id="c11p11ao1" onclick="cambiarsinoc11p11a('SI','c11p11ao1','c11p11ao1div','c11p11adiv',5);" <?php if($arrayrespuestas['ec11p11ao1']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
           Búsqueda de ayuda institucional ( Programas, entidades o proyectos que brindan atención en la situación que )
            </label>
        </div>
        </div>
        <div id="c11p11ao2div" <?php if($arrayrespuestas['ec11p11ao2']=='' || $arrayrespuestas['ec11p11ao2']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="c11p11ao2" id="c11p11ao2" onclick="cambiarsinoc11p11a('SI','c11p11ao2','c11p11ao2div','c11p11adiv',5);" <?php if($arrayrespuestas['ec11p11ao2']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            Apoyo de familiares  y/o amigos
          </label>
        </div>
        </div>
        <div id="c11p11ao3div" <?php if($arrayrespuestas['ec11p11ao3']==''|| $arrayrespuestas['ec11p11ao3']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="c11p11ao3" id="c11p11ao3" onclick="cambiarsinoc11p11a('SI','c11p11ao3','c11p11ao3div','c11p11adiv',5);" <?php if($arrayrespuestas['ec11p11ao3']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
           No ha implementado ninguna estrategia
          </label>
        </div>
        </div>  
            
            <div id="c11p11ao4div" <?php if($arrayrespuestas['ec11p11ao4']==''|| $arrayrespuestas['ec11p11ao4']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="c11p11ao4" id="c11p11ao4" onclick="cambiarsinoc11p11a('SI','c11p11ao4','c11p11ao4div','c11p11adiv',5);" <?php if($arrayrespuestas['ec11p11ao4']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
           Otra. Cuál?
          </label>
        </div>
        </div>  
        <div class="row" id="c11p11acualmostrar" name="c11p11acualmostrar" <?php if($arrayrespuestas['ec11p11ao4']== 'NO'||$arrayrespuestas['ec11p11ao4']== ''){echo('style="display:none"');}else{echo('');}  ?> >
        <div  id="c11p11acualdiv" name="c11p11acualdiv" class="form-group col-md-3">
                       <label class="control-label">Cual?</label>
                       <input type="text" class="form-control text-uppercase" id="c11p11acual" onkeypress="return soloLetras(event)"  onchange="validarcampotexcuadros('c11p11acualdiv','c11p11acual','8')" name="c11p11acual"   placeholder="Cual?" value="<?php if($arrayrespuestas['ec11p11acual'] == ''){echo('0');}else{ echo($arrayrespuestas['ec11p11acual']);} ?>">
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
            <?php if($arrayrespuestas['ec11p11ao1']=="" & $arrayrespuestas['ec11p11ao2']=="" & $arrayrespuestas['ec11p11ao3']=="" & $arrayrespuestas['ec11p11ao4']=="" & $arrayrespuestas['ec11p11acual']=="")
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
                          data: {vfolio : $('#folio').val(), vc11p11ao1 : $('#c11p11ao1').val(),vc11p11ao2 : $('#c11p11ao2').val(),
                          vc11p11ao3 : $('#c11p11ao3').val(),vc11p11ao4 : $('#c11p11ao4').val(),vc11p11acual : $('#c11p11acual').val()},    
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
                         data: {vfolio : $('#folio').val(), vc11p11ao1 : $('#c11p11ao1').val(),vc11p11ao2 : $('#c11p11ao2').val(),
                              vc11p11ao3 : $('#c11p11ao3').val(),vc11p11ao4 : $('#c11p11ao4').val(),vc11p11acual : $('#c11p11acual').val()}, 
                         dataType: "html",
                          success : function(obj){                      
                          botonactualizar();
                          }
                        });                   
        });
        
        $("#siguiente").click(function ()
        {
         botonsiguiente();
         location.href = "../c_capituloshogar/fc_capituloshogar?folio="+ $('#folio').val() +"&idintegrante=0";                       

        });

 $("#anterior").click(function ()
        {
         botonanterior();
        location.href = "../c_c11p11/fc_c11p11?folio=" + $('#folio').val();                    
        });

//        $("#anterior").click(function ()
//        {
//         botonanterior();
//         if($('#c11p2o7').val() == 'SI')
//         {
//             
//             location.href = "../c_c11p2/fc_c11p2?folio=" + $('#folio').val();                    
//         }
//         else{
//        location.href = "../c_c11p2b/fc_c11p2b?folio=" + $('#folio').val();                    
//        }});

//para cargar variables capitulo, pregunta,encuestador,vivienda,barra
cargardatosgenerales('<?php echo($arraydatosgenerales['ecapitulo']); ?>','Pregunta 11a de 11','<?php echo($arraydatosgenerales['enomcoges']); ?>','<?php echo($arraydatosgenerales['etitular']); ?>','100');
//control del boton ayuda
botonayuda();

});




//dea aca para abajo es logica de cuadros
function cambiarsinoc11p11a(opcion,campoval,divcampo,divcompleto,campos,mostrar)
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
    if(campoval == 'c11p11ao4')
        {
            if($('#' + campoval).val() == 'SI')
            {
                //alert('aca lo muestra');
                $('#c11p11acualmostrar').show(1000);
                $('#c11p11acual').val('');
                $('#c11p11acualdiv').addClass(' has-error');            

            }
            else
            {
                //alert('aca lo oculta');
                $('#c11p11acualmostrar').hide(1000);
                $('#c11p11acual').val('98');
                $('#c11p11acualdiv').removeClass(' has-error');
  
            }
        }
        
        
        if(campoval == 'c11p11ao3')
           {
            if($('#' + campoval).val() == 'SI')
            {
              $('#c11p11ao1').prop('checked' , false);
              $('#c11p11ao1div').addClass(' has-error');
              $('#c11p11ao2').prop('checked' , false);
              $('#c11p11ao2div').addClass(' has-error');
              $('#c11p11ao4').prop('checked' , false);
              $('#c11p11ao4div').addClass(' has-error');
              
              $('#c11p11acualmostrar').hide(1000);
              $('#c11p11acual').val('98');
                            
              $('#c11p11ao1').val('NO');
              $('#c11p11ao2').val('NO');
              $('#c11p11ao4').val('NO');
              
              }
}
        else
       {
          $('#c11p11ao3').prop('checked' , false); 
          $('#c11p11ao3').val('NO');
          $('#c11p11ao3div').addClass(' has-error');
      }
        

      validarcuadrosc11p11a(divcompleto,campos);
}

function validarcuadrosc11p11a(divcuadro,ncampos)
{
    
    if ($('#c11p11acual').val() != '')
    {
        //|| $('#c3p2cualdiv')===('form-group col-md-10 form-group-sm has-error')
        if($('.has-error').length === (ncampos))
        {   //alert('soniguales');
           $('#guardar').prop('disabled', true);
           $('#actualizar').prop('disabled', true);
           $('#cancelar').prop('disabled', true);
           $('#anterior').prop('disabled', false);
           $('#siguiente').prop('disabled', true);
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
           $('#siguiente').prop('disabled', true);        
    }
}

function validarcampotexcuadros(div,campo,ncampos)
{
    validarbolitasytexto(div,campo);

    validarcuadrosc11p11a(div,ncampos);
}



</script>
</html>