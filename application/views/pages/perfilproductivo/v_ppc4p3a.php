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
        
        <div id="ppc4p3adiv" name="ppc4p3adiv" class="form-group col-md-5 form-group-sm">
        <div id="ppc4p3a0div" class="has-error">
        <label class="control-label"> 
            <br/>
            3A. ESPECIFIQUE CON CUÁL INSTITUCIÓN 
            <button type="button" id="vayuda" name="vayuda" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModal">
                        <span class="glyphicon glyphicon-question-sign" aria-hidden="true"></span> Ayuda
                    </button> 
            
        </label>
        </div>
        <div id="ppc4p3a1div" <?php if($carrayrespuestas['eppc4p3a1']=='' || $carrayrespuestas['eppc4p3a1']=='NO' || $carrayrespuestas['eppc4p3a1']=='98'){echo('class=" has-error"');}?>>
        <div class="checkbox">
            <label> <!--en este caso se manda a la fincion javascript el nombre del campo-->
              <input type="checkbox" name="ppc4p3a1" id="ppc4p3a1" onclick="cambiarsinoppc4p3a('SI','ppc4p3a1','ppc4p3a1div','ppc4p3adiv',5);" <?php if($carrayrespuestas['eppc4p3a1']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            A.Asesoría u orientación
            </label>
        </div>
        </div>
     
            
        <div id="ppc4p3a2div" <?php if($carrayrespuestas['eppc4p3a2']=='' || $carrayrespuestas['eppc4p3a2']=='NO' || $carrayrespuestas['eppc4p3a2']=='98' ){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="ppc4p3a2" id="ppc4p3a2" onclick="cambiarsinoppc4p3a('SI','ppc4p3a2','ppc4p3a2div','ppc4p3adiv',5);" <?php if($carrayrespuestas['eppc4p3a2']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            B.Acompañamiento en creación de plan de negocio
          </label>
        </div>
        </div>
            
                    
        <div id="ppc4p3a3div" <?php if($carrayrespuestas['eppc4p3a3']==''|| $carrayrespuestas['eppc4p3a3']=='NO'|| $carrayrespuestas['eppc4p3a3']=='98'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="ppc4p3a3" id="ppc4p3a3" onclick="cambiarsinoppc4p3a('SI','ppc4p3a3','ppc4p3a3div','ppc4p3adiv',5);" <?php if($carrayrespuestas['eppc4p3a3']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            C.Financiamiento
          </label>
        </div>
        </div>  
         
       <div id="ppc4p3a4div" <?php if($carrayrespuestas['eppc4p3a4']==''|| $carrayrespuestas['eppc4p3a4']=='NO'|| $carrayrespuestas['eppc4p3a4']=='98'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="ppc4p3a4" id="ppc4p3a4" onclick="cambiarsinoppc4p3a('SI','ppc4p3a4','ppc4p3a4div','ppc4p3adiv',5);" <?php if($carrayrespuestas['eppc4p3a4']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            D.Capital o insumos
          </label>
        </div>
        </div>     
            
      </div>
      </div>  
           
            
       <div class="row" id="ppc4p3a5divmostrar" >
            <div  id="ppc4p3a5div" name="ppc4p3a5div"<?php if($carrayrespuestas['eppc4p3a5'] == ''){echo ('class=" form-group col-md-5 has-error"');} else {echo('class="form-group col-md-5 "'); } ?> >
            <label class="control-label">ENTIDAD:</label>
            <input type="text" class="form-control text-uppercase" id="ppc4p3a5" onkeypress="return soloLetras(event)" onchange="validarcampotexcuadros('ppc4p3a5div','ppc4p3a5','5')"  name="ppc4p3a5"   placeholder="Cual?" value="<?php  echo($carrayrespuestas['eppc4p3a5']); ?>">
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
            <?php if($carrayrespuestas['eppc4p3a1']=="" & $carrayrespuestas['eppc4p3a2']=="" & $carrayrespuestas['eppc4p3a3']==""& $carrayrespuestas['eppc4p3a4']==""
                     & $carrayrespuestas['eppc4p3a5']=="")
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
                          vppc4p3a1 : $('#ppc4p3a1').val(),          
                          vppc4p3a2 : $('#ppc4p3a2').val(),
                          vppc4p3a3 : $('#ppc4p3a3').val(),
                          vppc4p3a4 : $('#ppc4p3a4').val(),
                          vppc4p3a5 : $('#ppc4p3a5').val()
                          },
                      
                          dataType: "html",
                          success : function(obj){                      
                          botonguardar();
                          },
                          error: function (jqXHR, ajaxOptions, thrownError) {terminasinco();
                                    if (jqXHR.status === 0) {
                                        mensajito ('Error al sincronizar!!!','Sin Conexion a internet, por favor verifca tu conexion a internet y vuelve a intentar. [0]');
                                    } else if (jqXHR.status == 404) {
                                        mensajito ('Error al sincronizar!!!','Sin Conexion a internet, por favor verifca tu conexion a internet y vuelve a intentar. [404]');
                                    } else if (jqXHR.status == 500) {
                                        mensajito ('Error al sincronizar!!!','Sin Conexion a internet, por favor verifca tu conexion a internet y vuelve a intentar. [500].');
                                    } else {
                                        mensajito ('Error interno!!!','Comuniquese con el analista en sede');
                                    }

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
                          vppc4p3a1 : $('#ppc4p3a1').val(),          
                          vppc4p3a2 : $('#ppc4p3a2').val(),
                          vppc4p3a3 : $('#ppc4p3a3').val(),
                          vppc4p3a4 : $('#ppc4p3a4').val(),
                          vppc4p3a5 : $('#ppc4p3a5').val()
                          },
                      
                          dataType: "html",
                          success : function(obj){                      
                          botonguardar();
                          },
                          error: function (jqXHR, ajaxOptions, thrownError) {terminasinco();
                                    if (jqXHR.status === 0) {
                                        mensajito ('Error al sincronizar!!!','Sin Conexion a internet, por favor verifca tu conexion a internet y vuelve a intentar. [0]');
                                    } else if (jqXHR.status == 404) {
                                        mensajito ('Error al sincronizar!!!','Sin Conexion a internet, por favor verifca tu conexion a internet y vuelve a intentar. [404]');
                                    } else if (jqXHR.status == 500) {
                                        mensajito ('Error al sincronizar!!!','Sin Conexion a internet, por favor verifca tu conexion a internet y vuelve a intentar. [500].');
                                    } else {
                                        mensajito ('Error interno!!!','Comuniquese con el analista en sede');
                                    }

                              }
                        });                    
        });
        

        $("#siguiente").click(function ()
        {
            botonsiguiente();
            location.href = "../c_ppc4p4/fc_ppc4p4?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
         
        });
        
        
        $("#anterior").click(function ()
        {
         botonanterior();
         location.href = "../c_ppc4p3/fc_ppc4p3?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
        });

//para cargar variables capitulo, pregunta,encuestador,vivienda,barra



cargardatosgenerales('<?php echo($arraydatosgenerales['ecapitulo']); ?>','Pregunta 3a de 13','<?php echo($arraydatosgenerales['enomcoges']); ?>','<?php echo($arraydatosgenerales['enombreintegrante']." "." - "." "."Sexo:"." ".$arraydatosgenerales['esexointegrante']."   "."  -  "."   "."Edad:"."   ".$arraydatosgenerales['eedadintegrante']); ?>','20');
//control del boton ayuda
botonayuda();

});
//dea aca para abajo es logica de cuadros
function cambiarsinoppc4p3a(opcion,campoval,divcampo,divcompleto,campos)
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
        validarcuadrosppc4p3a(divcompleto,campos);
    }
        
function validarcuadrosppc4p3a(divcuadro,ncampos)
{
    //alert($('#' + divcuadro).find('input').prop('checked', true).length);
//    alert($('.has-error').length);
//    alert(ncampos + ' ncampos');
    
    if ($('#ppc4p3a5').val()!='' && (document.getElementById('ppc4p3a1').checked || document.getElementById('ppc4p3a2').checked || document.getElementById('ppc4p3a3').checked || document.getElementById('ppc4p3a4').checked))
    {
//        alert('ENTRO');
        //|| $('#c3p2cualdiv')===('form-group col-md-10 form-group-sm has-error')
        if($('.has-error').length === (ncampos + 1))
        {   
//            alert('soniguales');
           $('#guardar').prop('disabled', true);
           $('#actualizar').prop('disabled', true);
           $('#cancelar').prop('disabled', true);
           $('#anterior').prop('disabled', false);
           $('#siguiente').prop('disabled', false);
        }
        else
        {
//            alert('NO son iguales');
           $('#guardar').prop('disabled', false);
           $('#actualizar').prop('disabled', false);
           $('#cancelar').prop('disabled', false);
           $('#anterior').prop('disabled', true);
           $('#siguiente').prop('disabled', true);       
        }
//        validarguardar();
    }
    else
    {
//        alert('ENTRO AL SINO');
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

    validarcuadrosppc4p3a(div,ncampos);
}



</script>
</html>