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
       <input type="text" class="form-control input-sm" id="c1p13" name="c1p13" style="display:none"  value="<?php echo($arrayrespuestas['ec1p13']); ?>">
        <!-- <input type="text" class="form-control input-sm" id="c11p3ao1" name="c11p3ao1"  style="display:none"  value="<?php echo($arrayrespuestas['ec11p3ao1']); ?>">
        fin para imprimir el folio y llevarlo-->
<hr>
        <form class="form-group" name="formulario" id="formulario">

           <!--Check varias selecciones -->
    <div class="row">
        <div id="c11p7div" name="c11p7div" class="form-group col-md-12 form-group-sm">
        <div id="c11p7o0div" class="has-error">
            <label class="control-label">7. ¿ Cuándo en la familia se presenta alguna dificultad, la manera de resolverla es? ( SELECCIÓN DE MULTIPLE RESPUESTA)
                     
                     <button type="button" id="vayuda" name="vayuda" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModal">
                        <span class="glyphicon glyphicon-question-sign" aria-hidden="true"></span> Ayuda
                    </button>       
        </label>
        </div>
        <div id="c11p7o1div" <?php if($arrayrespuestas['ec11p7o1']=='' || $arrayrespuestas['ec11p7o1']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
            <label> <!--en este caso se manda a la fincion javascript el nombre del campo-->
              <input type="checkbox" name="c11p7o1" id="c11p7o1" onclick="cambiarsinoc11p7('SI','c11p7o1','c11p7o1div','c11p7div',8);" <?php if($arrayrespuestas['ec11p7o1']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
           Por acuerdos entre los integrantes del hogar 
            </label>
        </div>
        </div>
        <div id="c11p7o2div" <?php if($arrayrespuestas['ec11p7o2']=='' || $arrayrespuestas['ec11p7o2']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="c11p7o2" id="c11p7o2" onclick="cambiarsinoc11p7('SI','c11p7o2','c11p7o2div','c11p7div',8);" <?php if($arrayrespuestas['ec11p7o2']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
           Buscando apoyo de otros familiares o amigos
          </label>
        </div>
        </div>
        <div id="c11p7o3div" <?php if($arrayrespuestas['ec11p7o3']==''|| $arrayrespuestas['ec11p7o3']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="c11p7o3" id="c11p7o3" onclick="cambiarsinoc11p7('SI','c11p7o3','c11p7o3div','c11p7div',8);" <?php if($arrayrespuestas['ec11p7o3']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
          Buscando información y/o ayudas de otras instituciones o programas
          </label>
        </div>
        </div>  
            
            <div id="c11p7o4div" <?php if($arrayrespuestas['ec11p7o4']==''|| $arrayrespuestas['ec11p7o4']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="c11p7o4" id="c11p7o4" onclick="cambiarsinoc11p7('SI','c11p7o4','c11p7o4div','c11p7div',8);" <?php if($arrayrespuestas['ec11p7o4']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
           Por medio del castigo físico
          </label>
        </div>
        </div>  
            
            <div id="c11p7o5div" <?php if($arrayrespuestas['ec11p7o5']==''|| $arrayrespuestas['ec11p7o5']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="c11p7o5" id="c11p7o5" onclick="cambiarsinoc11p7('SI','c11p7o5','c11p7o5div','c11p7div',8);" <?php if($arrayrespuestas['ec11p7o5']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
           Usando amenazas
          </label>
        </div>
        </div>  
        <div id="c11p7o6div" <?php if($arrayrespuestas['ec11p7o6']==''|| $arrayrespuestas['ec11p7o6']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="c11p7o6" id="c11p7o6" onclick="cambiarsinoc11p7('SI','c11p7o6','c11p7o6div','c11p7div',8);" <?php if($arrayrespuestas['ec11p7o6']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            Otra. Cuál?
          </label>
        </div>
        </div>
        <div id="c11p7o7div" <?php if($arrayrespuestas['ec11p7o7']==''|| $arrayrespuestas['ec11p7o7']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="c11p7o7" id="c11p7o7" onclick="cambiarsinoc11p7('SI','c11p7o7','c11p7o7div','c11p7div',8);" <?php if($arrayrespuestas['ec11p7o7']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            No se implementa ninguna estrategia
          </label>
        </div>
        </div>    
       <div class="row" id="c11p7cualmostrar" name="c11p7cualmostrar" <?php if($arrayrespuestas['ec11p7o6']== 'NO'||$arrayrespuestas['ec11p7o6']== ''){echo('style="display:none"');}else{echo('');}  ?> >
        <div  id="c11p7cualdiv" name="c11p7cualdiv" class="form-group col-md-3">
                       <label class="control-label">Cual?</label>
                       <input type="text" class="form-control text-uppercase" id="c11p7cual" onkeypress="return soloLetras(event)"  onchange="validarcampotexcuadros('c11p7cualdiv','c11p7cual','8')" name="c11p7cual"   placeholder="Cual?" value="<?php if($arrayrespuestas['ec11p7cual'] == ''){echo('0');}else{ echo($arrayrespuestas['ec11p7cual']);} ?>">
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
            <?php if($arrayrespuestas['ec11p7o1']=="" & $arrayrespuestas['ec11p7o2']=="" & $arrayrespuestas['ec11p7o3']=="" & $arrayrespuestas['ec11p7o6']=="" & $arrayrespuestas['ec11p7cual']=="")
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
                          data: {vfolio : $('#folio').val(), vc11p7o1 : $('#c11p7o1').val(),vc11p7o2 : $('#c11p7o2').val(),
                              vc11p7o3 : $('#c11p7o3').val(),vc11p7o4 : $('#c11p7o4').val(),vc11p7o5 : $('#c11p7o5').val(),
                              vc11p7o6 : $('#c11p7o6').val(),vc11p7o7 : $('#c11p7o7').val(),vc11p7cual : $('#c11p7cual').val()},    
                          dataType: "html",
                          success : function(obj){                      
                          botonguardar();
                          saltop7();
                          }
                        });                    
        });

        
        $("#actualizar").click(function ()
        {
                        $.ajax({
                          url: "fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(), vc11p7o1 : $('#c11p7o1').val(),vc11p7o2 : $('#c11p7o2').val(),
                          vc11p7o3 : $('#c11p7o3').val(),vc11p7o4 : $('#c11p7o4').val(),vc11p7o5 : $('#c11p7o5').val(),
                          vc11p7o6 : $('#c11p7o6').val(),vc11p7o7 : $('#c11p7o7').val(),vc11p7cual : $('#c11p7cual').val()},                          dataType: "html",
                          success : function(obj){                      
                          botonactualizar();
                          saltop7();
                          }
                        });                   
        });

 $("#siguiente").click(function ()
        {
             if($('#c1p13').val() != 'c1p13o14')
           {  
               //alert('diferente a unipersol');
                if($('#c1p13').val() != 'c1p13o13')   
                {    
                    //alert('diferente tambn a adulto');
                    {  
                    location.href = "../c_c11p10/fc_c11p10?folio=" + $('#folio').val();      
                    }
                }
                else
                {
                    //alert('es adulto');
                   {  
                   location.href = "../c_c11p8/fc_c11p8?folio=" + $('#folio').val();      
                   }
                      
                }
           }
          else
                {
                   //alert('es unipersonal');
                   {  
                   location.href = "../c_c11p8/fc_c11p8?folio=" + $('#folio').val();      
                   }
                   
                }
});

 $("#anterior").click(function ()
        {
         botonanterior();
        location.href = "../c_c11p6/fc_c11p6?folio=" + $('#folio').val();                    
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
cargardatosgenerales('<?php echo($arraydatosgenerales['ecapitulo']); ?>','Pregunta 5 de 11','<?php echo($arraydatosgenerales['enomcoges']); ?>','<?php echo($arraydatosgenerales['etitular']); ?>','45');
//control del boton ayuda
botonayuda();

});
function saltop7()
{
             if($('#c1p13').val() != 'c1p13o14')
           {  
              // alert('diferente a unipersol');
                if($('#c1p13').val() != 'c1p13o13')   
                {   
                    //alert('diferente tambn a adulto');
                    $.ajax({
                             url: "../c_c11p8/fc_actualizar",
                             type: "GET",
                             data: {vfolio : $('#folio').val(),vvalorc11p8o1 :'98',vvalorc11p8o2 :'98'},
                             dataType: "html",
                             success : function(obj){  
                             //location.href = "../c_c11p4/fc_c11p4?folio=" + $('#folio').val();      
                             }
                           }); 
                          $.ajax({
                             url: "../c_c11p9/fc_actualizar",
                             type: "GET",
                             data: {vfolio : $('#folio').val(),vvalorc11p9o1 :'98',vvalorc11p9o2 :'98'},
                             dataType: "html",
                             success : function(obj){  
                             //location.href = "../c_c11p4/fc_c11p4?folio=" + $('#folio').val();      
                             }
                           });  
                }
                else
                { 
                    //alert('es adulto');
                   $.ajax({
                             url: "../c_c11p8/fc_actualizar",
                             type: "GET",
                             data: {vfolio : $('#folio').val(),vvalorc11p8o1 :'',vvalorc11p8o2 :''},
                             dataType: "html",
                             success : function(obj){  
                             //location.href = "../c_c11p4/fc_c11p4?folio=" + $('#folio').val();      
                             }
                           }); 
                          $.ajax({
                             url: "../c_c11p9/fc_actualizar",
                             type: "GET",
                             data: {vfolio : $('#folio').val(),vvalorc11p9o1 :'',vvalorc11p9o2 :''},
                             dataType: "html",
                             success : function(obj){  
                             //location.href = "../c_c11p4/fc_c11p4?folio=" + $('#folio').val();      
                             }
                           });   
                }
           }
          else
                {
                  // alert('es unipersonal');
                   $.ajax({
                             url: "../c_c11p8/fc_actualizar",
                             type: "GET",
                             data: {vfolio : $('#folio').val(),vvalorc11p8o1 :'',vvalorc11p8o2 :''},
                             dataType: "html",
                             success : function(obj){  
                             //location.href = "../c_c11p4/fc_c11p4?folio=" + $('#folio').val();      
                             }
                           }); 
                          $.ajax({
                             url: "../c_c11p9/fc_actualizar",
                             type: "GET",
                             data: {vfolio : $('#folio').val(),vvalorc11p9o1 :'98',vvalorc11p9o2 :'98'},
                             dataType: "html",
                             success : function(obj){  
                             //location.href = "../c_c11p4/fc_c11p4?folio=" + $('#folio').val();      
                             }
                           });   
                   //location.href = "../c_c11p3a/fc_c11p3a?folio=" + $('#folio').val();   
                }


 
 
}
//dea aca para abajo es logica de cuadros
function cambiarsinoc11p7(opcion,campoval,divcampo,divcompleto,campos,mostrar)
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
    if(campoval == 'c11p7o6')
        {
            if($('#' + campoval).val() == 'SI')
            {
                //alert('aca lo muestra');
                $('#c11p7cualmostrar').show(1000);
                $('#c11p7cual').val('');
                $('#c11p7cualdiv').addClass(' has-error');            

            }
            else
            {
                //alert('aca lo oculta');
                $('#c11p7cualmostrar').hide(1000);
                $('#c11p7cual').val('98');
                $('#c11p7cualdiv').removeClass(' has-error');
  
            }
        }
        
        
        if(campoval == 'c11p7o7')
           {
            if($('#' + campoval).val() == 'SI')
            {
              $('#c11p7o1').prop('checked' , false);
              $('#c11p7o1div').addClass(' has-error');
              $('#c11p7o2').prop('checked' , false);
              $('#c11p7o2div').addClass(' has-error');
              $('#c11p7o3').prop('checked' , false);
              $('#c11p7o3div').addClass(' has-error');
              $('#c11p7o4').prop('checked' , false);
              $('#c11p7o4div').addClass(' has-error');
              $('#c11p7o5').prop('checked' , false);
              $('#c11p7o5div').addClass(' has-error');
              $('#c11p7o6').prop('checked' , false);
              $('#c11p7o6div').addClass(' has-error');
              
              $('#c11p7cualmostrar').hide(1000);
              $('#c11p7cual').val('98');
                            
              $('#c11p7o1').val('NO');
              $('#c11p7o2').val('NO');
              $('#c11p7o3').val('NO');
              $('#c11p7o4').val('NO');
              $('#c11p7o5').val('NO');
              $('#c11p7o6').val('NO');
              
              }
}
        else
       {
          $('#c11p7o7').prop('checked' , false); 
          $('#c11p7o7').val('NO');
          $('#c11p7o7div').addClass(' has-error');
      }
        

      validarcuadrosc11p7(divcompleto,campos);
}

function validarcuadrosc11p7(divcuadro,ncampos)
{
    
    if ($('#c11p7cual').val() != '')
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

    validarcuadrosc11p7(div,ncampos);
}



</script>
</html>