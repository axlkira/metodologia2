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
        <div id="ppc4p11adiv" name="ppc4p11adiv" class="form-group col-md-12 form-group-sm">
        <div id="eppc4p11a0div" class="has-error">
        <label class="control-label">11A.  SELECCIONE EL TIPO DE APOYO E INSTITUCIÓN DE LA CUAL RECIBIO APOYO”
                    
            <button type="button" id="vayuda" name="vayuda" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModal">
                        <span class="glyphicon glyphicon-question-sign" aria-hidden="true"></span> Ayuda
                    </button>       
        </label>
        </div>
        <div id="ppc4p11a1div" <?php if($arrayrespuestas['eppc4p11a1']=='' || $arrayrespuestas['eppc4p11a1']=='NO' || $arrayrespuestas['eppc4p11a1']=='98'){echo('class=" has-error"');}?>>
        <div class="checkbox">
            <label> <!--en este caso se manda a la fincion javascript el nombre del campo-->
              <input type="checkbox" name="ppc4p11a1" id="ppc4p11a1" onclick="cambiarsinoppc4p11a('SI','ppc4p11a1','ppc4p11a1div','ppc4p11adiv',6);" <?php if($arrayrespuestas['eppc4p11a1']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            Asesoría u orientación
            </label>
        </div>
        </div>
            
                    
        <div id="eppc4p11a2div" <?php if($arrayrespuestas['eppc4p11a2']=='' || $arrayrespuestas['eppc4p11a2']=='NO' || $arrayrespuestas['eppc4p11a2']=='98' ){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="ppc4p11a2" id="ppc4p11a2" onclick="cambiarsinoppc4p11a('SI','ppc4p11a2','eppc4p11a2div','ppc4p11adiv',6);" <?php if($arrayrespuestas['eppc4p11a2']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            Acompañamiento en creación de plan de negocio
          </label>
        </div>
        </div>
            
       
            
        <div id="eppc4p11a3div" <?php if($arrayrespuestas['eppc4p11a3']==''|| $arrayrespuestas['eppc4p11a3']=='NO'|| $arrayrespuestas['eppc4p11a3']=='98'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="ppc4p11a3" id="ppc4p11a3" onclick="cambiarsinoppc4p11a('SI','ppc4p11a3','eppc4p11a3div','ppc4p11adiv',6);" <?php if($arrayrespuestas['eppc4p11a3']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            Financiamiento
          </label>
        </div>
        </div>  
         
      
<div id="ppc4p11a4div" <?php if($arrayrespuestas['eppc4p11a4']==''|| $arrayrespuestas['eppc4p11a4']=='NO'|| $arrayrespuestas['eppc4p11a4']=='98'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="ppc4p11a4" id="ppc4p11a4" onclick="cambiarsinoppc4p11a('SI','ppc4p11a4','ppc4p11a4div','ppc4p11adiv',6);" <?php if($arrayrespuestas['eppc4p11a4']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            Otro. Cuál 
          </label>
        </div>
        </div>
            
        <div class="row" id="ppc4p11acualmostrar" name="ppc4p11acualmostrar" <?php if($arrayrespuestas['eppc4p11a4']== 'NO'||$arrayrespuestas['eppc4p11a4']== ''||$arrayrespuestas['eppc4p11a4']== '98'){echo('style="display:none"');}else{echo('');}  ?> >
        <div  id="ppc4p11acualdiv" name="ppc4p11acualdiv" class="form-group col-md-3">
        <label class="control-label">Cual?</label>
        <input type="text" class="form-control text-uppercase" id="ppc4p11acual" onkeypress="return soloLetras(event)"  onchange="validarcampotexcuadros('ppc4p11acualdiv','ppc4p11acual','10')" name="ppc4p11acual"   placeholder="Cual?" value="<?php if($arrayrespuestas['eppc4p11acual'] == ''){echo('0');}else{ echo($arrayrespuestas['eppc4p11acual']);} ?>">
        </div>
        </div>

        
      </div>
      </div>  
           
           <div class="row" id="ppc4p11aentidaddivmostrar" >
            <div  id="ppc4p11aentidaddiv" name="ppc4p11aentidaddiv"<?php if($arrayrespuestas['eppc4p11entidad'] == ''){echo ('class=" form-group col-md-5 has-error"');} else {echo('class="form-group col-md-5 "'); } ?> >
            <label class="control-label">ENTIDAD:</label>
            <input type="text" class="form-control text-uppercase" id="ppc4p11aentidad" onkeypress="return soloLetras(event)" onchange="validarcampotexcuadros('ppc4p11aentidaddiv','ppc4p11aentidad','6')"  name="ppc4p11aentidad"   placeholder="Cual?" value="<?php  echo($arrayrespuestas['eppc4p11entidad']); ?>">
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
            <?php if($arrayrespuestas['eppc4p11a1']=="" & $arrayrespuestas['eppc4p11a2']=="" & $arrayrespuestas['eppc4p11a3']==""& $arrayrespuestas['eppc4p11a4']==""
                     & $arrayrespuestas['eppc4p11acual']==""& $arrayrespuestas['eppc4p11entidad']=="")
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
                          vppc4p11a1 : $('#ppc4p11a1').val(),          
                          vppc4p11a2 : $('#ppc4p11a2').val(),
                          vppc4p11a3 : $('#ppc4p11a3').val(),
                          vppc4p11a4 : $('#ppc4p11a4').val(),
                          vppc4p11acual : $('#ppc4p11acual').val(),
                          vppc4p11aentidad : $('#ppc4p11aentidad').val()},
                      
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
                          vppc4p11a1 : $('#ppc4p11a1').val(),          
                          vppc4p11a2 : $('#ppc4p11a2').val(),
                          vppc4p11a3 : $('#ppc4p11a3').val(),
                          vppc4p11a4 : $('#ppc4p11a4').val(),
                          vppc4p11acual : $('#ppc4p11acual').val(),
                          vppc4p11aentidad : $('#ppc4p11aentidad').val()},
                      
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
        {
         location.href = "../c_ppc4p12/fc_ppc4p12?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                      
        }
        });
        $("#anterior").click(function ()
        {
         botonanterior();
         location.href = "../c_ppc4p11/fc_ppc4p11?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
        });

//para cargar variables capitulo, pregunta,encuestador,vivienda,barra



cargardatosgenerales('<?php echo($arraydatosgenerales['ecapitulo']); ?>','Pregunta 11a de 13','<?php echo($arraydatosgenerales['enomcoges']); ?>','<?php echo($arraydatosgenerales['enombreintegrante']." "." - "." "."Sexo:"." ".$arraydatosgenerales['esexointegrante']."   "."  -  "."   "."Edad:"."   ".$arraydatosgenerales['eedadintegrante']); ?>','70');
//control del boton ayuda
botonayuda();

});
//dea aca para abajo es logica de cuadros
function cambiarsinoppc4p11a(opcion,campoval,divcampo,divcompleto,campos)
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
   
        
        if(campoval == 'ppc4p11a4')
        {
            if($('#' + campoval).val() == 'SI')
            {
                //alert('aca lo muestra');
                $('#ppc4p11acualmostrar').show(1000);
                $('#ppc4p11acual').val('');
                $('#ppc4p11acualdiv').addClass(' has-error');            
            }
            else
            {
                //alert('aca lo oculta');
                $('#ppc4p11acualmostrar').hide(1000);
                $('#ppc4p11acual').val('98');
                $('#ppc4p11acualdiv').removeClass(' has-error');
            }
        }
     validarcuadrosppc4p11a(divcompleto,campos);
}


//ESTA FUNCION SE ENCARGA DE CHEQUEAR QUE MINIMO HAYA UN CUADRO CHECKEADO, QUE SI ESCOJE EL OTRO HAYA QUE LLENAR EL CAMPO CUAL Y QUE LA ENTIDAD SEA OBLIGATORIA
function validarcuadrosppc4p11a(divcuadro,ncampos)
{
    //alert($('#' + divcuadro).find('input').prop('checked', true).length);
    //alert($('.has-error').length);
    //alert(ncampos + ' ncampos');
    
    if ($('#ppc4p11aentidad').val()!=='' && $('#ppc4p11acual').val()!=='' && (document.getElementById('ppc4p11a1').checked || document.getElementById('ppc4p11a2').checked || document.getElementById('ppc4p11a3').checked || document.getElementById('ppc4p11a4').checked || document.getElementById('ppc4p11a4').checked))
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

//FIN FUNCION
function validarcampotexcuadros(div,campo,ncampos)
{
    validarbolitasytexto(div,campo);

    validarcuadrosppc4p11a(div,ncampos);
}</script>
</html>