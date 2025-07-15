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
        <input type="text" class="form-control input-sm" id="ppc3p3a" name="ppc3p3a"  style="display:none"   placeholder="" value="<?php echo($carrayrespuestas['eppc3p3a']); ?>">
       
       
        <!--fin para imprimir el idintegrante y llevarlo-->
<hr>
        <form class="form-group" name="formulario" id="formulario">

           <!--Check varias selecciones -->
    <div class="row">
        <div id="ppc3p3ediv" name="ppc3p3ediv" class="form-group col-md-12 form-group-sm">
        <div id="ppc3p3e0div" class="has-error">
        <label class="control-label">3.5 INTERESES LABORALES
            <br/>SELECCIÓN MULTIPLE. Teniendo en cuenta su formación académica o experiencia laboral ¿Qué cargos está en capacidad e interés en desempeñar?         
            <button type="button" id="vayuda" name="vayuda" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModal">
                        <span class="glyphicon glyphicon-question-sign" aria-hidden="true"></span> Ayuda
                    </button>       
        </label>
        </div>
        <div id="ppc3p3e1div" <?php if($carrayrespuestas['eppc3p3e1']=='' || $carrayrespuestas['eppc3p3e1']=='NO' || $carrayrespuestas['eppc3p3e1']=='98'){echo('class=" has-error"');}?>>
        <div class="checkbox">
            <label> <!--en este caso se manda a la fincion javascript el nombre del campo-->
              <input type="checkbox" name="ppc3p3e1" id="ppc3p3e1" onclick="cambiarsinoppc3p3e('SI','ppc3p3e1','ppc3p3e1div','ppc3p3ediv',12);" <?php if($carrayrespuestas['eppc3p3e1']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            A.Administrativo
            </label>
        </div>
        </div>
     
            
        <div id="ppc3p3e2div" <?php if($carrayrespuestas['eppc3p3e2']=='' || $carrayrespuestas['eppc3p3e2']=='NO' || $carrayrespuestas['eppc3p3e2']=='98' ){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="ppc3p3e2" id="ppc3p3e2" onclick="cambiarsinoppc3p3e('SI','ppc3p3e2','ppc3p3e2div','ppc3p3ediv',12);" <?php if($carrayrespuestas['eppc3p3e2']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            B.Comerciales
          </label>
        </div>
        </div>
            
       
            
        <div id="ppc3p3e3div" <?php if($carrayrespuestas['eppc3p3e3']==''|| $carrayrespuestas['eppc3p3e3']=='NO'|| $carrayrespuestas['eppc3p3e3']=='98'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="ppc3p3e3" id="ppc3p3e3" onclick="cambiarsinoppc3p3e('SI','ppc3p3e3','ppc3p3e3div','ppc3p3ediv',12);" <?php if($carrayrespuestas['eppc3p3e3']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            C.Técnicos
          </label>
        </div>
        </div>  
         
       <div id="ppc3p3e4div" <?php if($carrayrespuestas['eppc3p3e4']==''|| $carrayrespuestas['eppc3p3e4']=='NO'|| $carrayrespuestas['eppc3p3e4']=='98'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="ppc3p3e4" id="ppc3p3e4" onclick="cambiarsinoppc3p3e('SI','ppc3p3e4','ppc3p3e4div','ppc3p3ediv',12);" <?php if($carrayrespuestas['eppc3p3e4']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            D.Operativos
          </label>
        </div>
        </div>
       <div id="ppc3p3e5div" <?php if($carrayrespuestas['eppc3p3e5']==''|| $carrayrespuestas['eppc3p3e5']=='NO'|| $carrayrespuestas['eppc3p3e5']=='98'){echo('class=" has-error"');}?>>
       <div class="checkbox">
         <label>
             <input type="checkbox" name="ppc3p3e5" id="ppc3p3e5" onclick="cambiarsinoppc3p3e('SI','ppc3p3e5','ppc3p3e5div','ppc3p3ediv',12);" <?php if($carrayrespuestas['eppc3p3e5']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
          E.Servicios
         </label>
       </div>
       </div>
       <div id="ppc3p3e6div" <?php if($carrayrespuestas['eppc3p3e6']==''|| $carrayrespuestas['eppc3p3e6']=='NO'|| $carrayrespuestas['eppc3p3e6']=='98'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="ppc3p3e6" id="ppc3p3e6" onclick="cambiarsinoppc3p3e('SI','ppc3p3e6','ppc3p3e6div','ppc3p3ediv',12);" <?php if($carrayrespuestas['eppc3p3e6']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            F.Fabricacion, ensamble y procesamiento 
          </label>
        </div>
        </div>
            <div id="ppc3p3e7div" <?php if($carrayrespuestas['eppc3p3e7']==''|| $carrayrespuestas['eppc3p3e7']=='NO'|| $carrayrespuestas['eppc3p3e7']=='98'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="ppc3p3e7" id="ppc3p3e7" onclick="cambiarsinoppc3p3e('SI','ppc3p3e7','ppc3p3e7div','ppc3p3ediv',12);" <?php if($carrayrespuestas['eppc3p3e7']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            G.Servicios Sociales 
          </label>
        </div>
        </div>
            <div id="ppc3p3e8div" <?php if($carrayrespuestas['eppc3p3e8']==''|| $carrayrespuestas['eppc3p3e8']=='NO'|| $carrayrespuestas['eppc3p3e8']=='98'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="ppc3p3e8" id="ppc3p3e8" onclick="cambiarsinoppc3p3e('SI','ppc3p3e8','ppc3p3e8div','ppc3p3ediv',12);" <?php if($carrayrespuestas['eppc3p3e8']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
           H.Salud 
          </label>
        </div>
        </div>
            <div id="ppc3p3e9div" <?php if($carrayrespuestas['eppc3p3e9']==''|| $carrayrespuestas['eppc3p3e9']=='NO'|| $carrayrespuestas['eppc3p3e9']=='98'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="ppc3p3e9" id="ppc3p3e9" onclick="cambiarsinoppc3p3e('SI','ppc3p3e9','ppc3p3e9div','ppc3p3ediv',12);" <?php if($carrayrespuestas['eppc3p3e9']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            I.Educación
          </label>
        </div>
        </div>
       
        
<div id="ppc3p3e10div" <?php if($carrayrespuestas['eppc3p3e10']==''|| $carrayrespuestas['eppc3p3e10']=='NO'|| $carrayrespuestas['eppc3p3e10']=='98'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="ppc3p3e10" id="ppc3p3e10" onclick="cambiarsinoppc3p3e('SI','ppc3p3e10','ppc3p3e10div','ppc3p3ediv',12);" <?php if($carrayrespuestas['eppc3p3e10']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            Otro. Cuál 
          </label>
        </div>
        </div>
            
        <div class="row" id="ppc3p3ecualmostrar" name="ppc3p3ecualmostrar" <?php if($carrayrespuestas['eppc3p3e10']== 'NO'||$carrayrespuestas['eppc3p3e10']== ''||$carrayrespuestas['eppc3p3e10']== '98'){echo('style="display:none"');}else{echo('');}  ?> >
        <div  id="ppc3p3ecualdiv" name="ppc3p3ecualdiv" class="form-group col-md-3">
        <label class="control-label">Cual?</label>
        <input type="text" class="form-control text-uppercase" id="ppc3p3ecual" onkeypress="return soloLetras(event)"  onchange="validarcampotexcuadros('ppc3p3ecualdiv','ppc3p3ecual','11')" name="ppc3p3ecual"   placeholder="Cual?" value="<?php if($carrayrespuestas['eppc3p3ecual'] == ''){echo('0');}else{ echo($carrayrespuestas['eppc3p3ecual']);} ?>">
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
            <?php if($carrayrespuestas['eppc3p3e1']=="" & $carrayrespuestas['eppc3p3e2']=="" & $carrayrespuestas['eppc3p3e3']==""& $carrayrespuestas['eppc3p3e4']==""
                     & $carrayrespuestas['eppc3p3e5']==""& $carrayrespuestas['eppc3p3e6']==""& $carrayrespuestas['eppc3p3e7']==""& $carrayrespuestas['eppc3p3e8']==""
                    & $carrayrespuestas['eppc3p3e9']==""& $carrayrespuestas['eppc3p3e10']=="")
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
                          vppc3p3e1 : $('#ppc3p3e1').val(),          
                          vppc3p3e2 : $('#ppc3p3e2').val(),
                          vppc3p3e3 : $('#ppc3p3e3').val(),
                          vppc3p3e4 : $('#ppc3p3e4').val(),
                          vppc3p3e5 : $('#ppc3p3e5').val(),
                          vppc3p3e6 : $('#ppc3p3e6').val(),
                          vppc3p3e7 : $('#ppc3p3e7').val(),
                          vppc3p3e8 : $('#ppc3p3e8').val(),
                          vppc3p3e9 : $('#ppc3p3e9').val(),
                          vppc3p3e10 : $('#ppc3p3e10').val(),
                          vppc3p3ecual : $('#ppc3p3ecual').val()},
                      
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
                          vppc3p3e1 : $('#ppc3p3e1').val(),          
                          vppc3p3e2 : $('#ppc3p3e2').val(),
                          vppc3p3e3 : $('#ppc3p3e3').val(),
                          vppc3p3e4 : $('#ppc3p3e4').val(),
                          vppc3p3e5 : $('#ppc3p3e5').val(),
                          vppc3p3e6 : $('#ppc3p3e6').val(),
                          vppc3p3e7 : $('#ppc3p3e7').val(),
                          vppc3p3e8 : $('#ppc3p3e8').val(),
                          vppc3p3e9 : $('#ppc3p3e9').val(),
                          vppc3p3e10 : $('#ppc3p3e10').val(),
                          vppc3p3ecual : $('#ppc3p3ecual').val()},
                      
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
         location.href = "../c_ppc3p4/fc_ppc3p4?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                       
        }
        });
        $("#anterior").click(function ()
        {
         botonanterior();
         
         if ($('#ppc3p3a').val()=== '2')
         {
         location.href = "../c_ppc3p3a/fc_ppc3p3a?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";   
         }
     else
         {
          location.href = "../c_ppc3p3c/fc_ppc3p3c?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";   
         }
            });

//para cargar variables capitulo, pregunta,encuestador,vivienda,barra



cargardatosgenerales('<?php echo($arraydatosgenerales['ecapitulo']); ?>','Pregunta 3e de 4','<?php echo($arraydatosgenerales['enomcoges']); ?>','<?php echo($arraydatosgenerales['enombreintegrante']." "." - "." "."Sexo:"." ".$arraydatosgenerales['esexointegrante']."   "."  -  "."   "."Edad:"."   ".$arraydatosgenerales['eedadintegrante']); ?>','90');
//control del boton ayuda
botonayuda();

});
//dea aca para abajo es logica de cuadros
function cambiarsinoppc3p3e(opcion,campoval,divcampo,divcompleto,campos)
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
   
               
        if(campoval == 'ppc3p3e10')
        {
            if($('#' + campoval).val() == 'SI')
            {
                //alert('aca lo muestra');
                $('#ppc3p3ecualmostrar').show(1000);
                $('#ppc3p3ecual').val('');
                $('#ppc3p3ecualdiv').addClass(' has-error');            
            }
            else
            {
                //alert('aca lo oculta');
                $('#ppc3p3ecualmostrar').hide(1000);
                $('#ppc3p3ecual').val('98');
                $('#ppc3p3ecualdiv').removeClass(' has-error');
            }
        }
        validarcuadrosppc3p3e(divcompleto,campos);
    }
        
function validarcuadrosppc3p3e(divcuadro,ncampos)
{
    //alert($('#' + divcuadro).find('input').prop('checked', true).length);
    //alert($('.has-error').length);
    //alert(ncampos + ' ncampos');
    
    if ($('#ppc3p3ecual').val() )
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
//        validarguardar();
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

    validarcuadrosppc3p3e(div,ncampos);
}</script>
</html>