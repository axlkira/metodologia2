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
        <?php echo($head1); ?>
        <!-- fin head-->
        
        <!--para tener la variable de idvivienda-->
        <input type="text" class="form-control input-sm" id="folio" name="folio" style="display:none"    placeholder="folio" value="<?php echo($folio); ?>">
        <input type="text" class="form-control input-sm" id="idintegrante" name="idintegrante"  style="display:none"   placeholder="idintegrante" value="<?php echo($idintegrante); ?>">
         <input type="text" class="form-control input-sm" id="documento" name="documento" style="display:none"   placeholder="idintegrante" value="<?php echo($cdocumento); ?>">
        <input type="text" class="form-control input-sm" id="idestacion" name="idestacion"  style="display:none"   placeholder="" value="<?php echo($idestacion); ?>">
        <input type="text" class="form-control input-sm" id="doccogestor" name="doccogestor"  style="display:none"   placeholder="" value="<?php echo($doccogestor); ?>">
        <!--
       <input type="text" class="form-control input-sm" id="sexo" name="sexo"  style="display:none"   placeholder="" value="<?php echo($arraydatosgenerales['esexointegrante']); ?>">-->
        <!--fin para imprimir el idintegrante y llevarlo-->
<hr>
        <form class="form-group" name="formulario" id="formulario">

            <div class="row">
                
                <div class="row">
                    <div id="divdimerfam"  <?php if($arraydatosgenerales['dimerfam'] == ''){echo 'class="has-error col-md-6" ';}else{echo 'class=" col-md-6" ';} ?>>
                            <label><h5>Elija la dimensión de la <strong>ERFAM</strong> fortalecida en el <strong>BUEN VIVIR EN FAMILIA</strong></h5></label>
                            <select class="form-control input-sm" onchange="mostartextoavance();validarbotonguardar()" id="erfam"   name="erfam"  ><!-- onclick="filtrartabla();" onchange="deshabilitarbuscar()" -->

                               
                    <?php if ($arraydatosgenerales['dimerfam'] == '')
                       {
                           echo   '  <option value="">SELECCIONE</option>
                               <option value="COMUNICACION">COMUNICACIÓN</option>
                               <option value="CONVIVENCIA FAMILIAR">CONVIVENCIA FAMILIAR</option>
                               <option value="AFECTIVIDAD">AFECTIVIDAD</option>
                               <option value="INTERACCION">INTERACCIÓN</option>';
                       }  
                       else                  
                       {
                          echo  '<option value="'.$arraydatosgenerales['dimerfam'].'">'.$arraydatosgenerales['dimerfam'].'</option>'
                                  . ' <option value="COMUNICACION">COMUNICACIÓN</option>
                               <option value="CONVIVENCIA FAMILIAR">CONVIVENCIA FAMILIAR</option>
                               <option value="AFECTIVIDAD">AFECTIVIDAD</option>
                               <option value="INTERACCION">INTERACCIÓN</option>  ';  
                       }
                      ?>
                              
                            </select>
                    </div>
              
                    <div id="divdeshum"  <?php if($arraydatosgenerales['dimdllohum'] == ''){echo 'class="has-error col-md-6" ';}else{echo 'class=" col-md-6" ';} ?> >
                             <label><h5>Elija la dimensión del  <strong>desarrollo humano</strong> trabajada en la <strong>SESIÓN EDUCATIVA</strong></h5></label>
                            <select   class="form-control input-sm  " id="deshum" onchange="mostartextoavance();validarbotonguardar()"   name="deshum"  ><!-- onclick="filtrartabla();" onchange="deshabilitarbuscar()" -->

                               
                                 <?php if ($arraydatosgenerales['dimdllohum'] == '')
                       {
                           echo   '  <option value="">SELECCIONE</option>
                               <option value="EDUCACION">EDUCACIÓN</option>
                               <option value="SALUD">SALUD</option>
                               <option value="INGRESOS Y TRABAJO">INGRESOS Y TRABAJO</option>
                               <option value="HABITABILIDAD">HABITABILIDAD</option>
                               <option value="IDENTIFICACION">IDENTIFICACIÓN</option>
                               <option value="BANCARIZACION Y AHORRO">BANCARIZACIÓN Y AHORRO</option>
                               <option value="ACCESO A LA JUSTICIA">ACCESO A LA JUSTICIA</option>
                               <option value="NUTRICION">NUTRICIÓN</option>';
                       }  
                       else                  
                       {
                          echo  '<option value="'.$arraydatosgenerales['dimdllohum'].'">'.$arraydatosgenerales['dimdllohum'].'</option>'
                                  . ' <option value="EDUCACION">EDUCACIÓN</option>
                               <option value="SALUD">SALUD</option>
                               <option value="INGRESOS Y TRABAJO">INGRESOS Y TRABAJO</option>
                               <option value="HABITABILIDAD">HABITABILIDAD</option>
                               <option value="IDENTIFICACION">IDENTIFICACIÓN</option>
                               <option value="BANCARIZACION Y AHORRO">BANCARIZACIÓN Y AHORRO</option>
                               <option value="ACCESO A LA JUSTICIA">ACCESO A LA JUSTICIA</option>
                               <option value="NUTRICION">NUTRICIÓN</option>';  
                       }
                      ?>
                               
                            </select>
                    </div>
              </div>
                
            </div><br><br>
            
            <div class="row">              
               
                <div id="divtextoav" <?php if($arraydatosgenerales['textoavance'] == ''){echo 'class="has-error col-md-12" style="display:none"';}else{echo 'class="col-md-12" style="display" ';} ?>>
                     <label>“En este campo el gestor  territorial deberá describir de manera clara el tema trabajado en la sesión  educativa y en el encuentro del Buen vivir en Familia, la metodología asi  como las estrategias y/o material pedagógico empleado”.</label>
                    <!-- <textarea class="form-control"  <?php if($arraydatosgenerales['textoavance'] == ''){echo 'style="display:none" ';}else{echo 'style="display" ';} ?> onkeyup="validarbolitasytexto('divtextoav','textoav');validarbotonguardar()" id="textoav"  name="textoav" rows="6"><?php  echo($arraydatosgenerales['textoavance']); ?></textarea>-->
                    <textarea class="form-control" onkeyup="validarbolitasytextot6('divtextoav','textoav');validarbotonguardar()" id="textoav"  name="textoav" rows="6"><?php  echo($arraydatosgenerales['textoavance']); ?></textarea>              
                </div>
                
            </div><br><br>
            
            <div class="row">
                
                <div id="divtextoav2" <?php if($arraydatosgenerales['textoavance2'] == ''){echo 'class="has-error col-md-12" style="display:none"';}else{echo 'class="col-md-12" style="display"';} ?>>
                    <label>Avances del hogar</label>
                    <!--<textarea class="form-control"  <?php if($arraydatosgenerales['textoavance2'] == ''){echo 'style="display:none" ';}else{echo 'style="display" ';} ?> onkeyup="validarbolitasytexto('divtextoav2','textoav2');validarbotonguardar()" id="textoav2"  name="textoav2" rows="6"><?php  echo($arraydatosgenerales['textoavance2']); ?></textarea>-->
                    <textarea class="form-control" onkeyup="validarbolitasytextot6('divtextoav2','textoav2');validarbotonguardar()" id="textoav2"  name="textoav2" rows="6"><?php  echo($arraydatosgenerales['textoavance2']); ?></textarea>              
                </div>
          
            </div><br><br>
        
            
      <div id="p0divAccion" name="p0divAccion" <?php if($arraydatosgenerales['accioneducativa'] == ''){echo 'class="has-error col-md-12" style="display:none"';}else{echo 'class="col-md-12" style="display" ';} ?>><label class="control-label">¿En esta visita se hizo "Acción Educativa"?</label>
      <!-- <div id="p0divAccion" style="display:none" name="p0divAccion" class="form-group col-md-12 form-group-sm has-error" ><label class="control-label">¿En esta visita se hizo "Acción Educativa"?</label>-->
      <div class="radio"><label><input type="radio" name="pregunta0Accion" id="pregunta0Accion" onclick="validarcualmotivoAccion('Si','valorp0Accion');" value="Si" <?php if($arraydatosgenerales['accioneducativa'] == 'Si'){echo('checked');}?>>Si</label></div>
      <div class="radio"><label><input type="radio" name="pregunta0Accion" id="pregunta00Accion" onclick="validarcualmotivoAccion('No','valorp0Accion');" value="No" <?php if($arraydatosgenerales['accioneducativa'] == 'No'){echo('checked');}?>>No</label></div>
      <input type="text" class="form-control" id="valorp0Accion" name="valorp0Accion" style="display:none" placeholder="Text input" value="<?php echo($arraydatosgenerales['accioneducativa']); ?>">
      </div>
    
      <div class="row">
      <div id="divcualmotivoAccion" name="divcualmotivoAccion" <?php if($arraydatosgenerales['accioneducativa'] == 'No' || $arraydatosgenerales['accioneducativa'] == ''){echo 'class="has-error col-md-12" style="display:none"';}else{echo 'class="col-md-12" style="display" ';} ?>>
      <!-- <div class="row" id="divcualmotivoAccion" name="divcualmotivoAccion" style="display:none">-->
                        <div class="col-sm-12" id="cualmotivodivAccion" name="cualmotivodivAccion"><label class="control-label">¿Cuál fue la temática desarrollada?</label>
                        <select class="form-control input-sm" id="vcualmotivoAccion" name="vcualmotivoAccion" onchange="validarpaso0Accion('vcualmotivoAccion');validarbotonguardar()">  
                        <?php if ($arraydatosgenerales['accioneducativacual'] == '')
                       {
                           echo'<option value="">Seleccione una opción</option>    
                           <option value="Convivencia familiar">Convivencia familiar pruebaaaa</option>
                           <option value="Participacion democratica en la resolucion de conflictos">Participación democrática en la resolución de conflictos</option>
                           <option value="Toma de decisiones en la familia">Toma de decisiones en la familia</option>
                           <option value="Reconocimiento de los derechos y red de apoyo institucional">Reconocimiento de los derechos y red de apoyo institucional</option>
                           <option value="Equidad de genero en la familia">Equidad de género en la familia</option>
                           <option value="Prevencion del embarazo adolescente y subsecuente">Prevención del embarazo adolescente y subsecuente</option>
                           <option value="En familia Jugamos">En familia Jugamos</option>
                           <option value="Mi familia, mi lugar seguro">Mi familia, mi lugar seguro</option>
                           <option value="Educacion financiera">Educación financiera</option>
                           <option value="Distribucion equitativa del cuidado en la familia">Distribución equitativa del cuidado en la familia</option>
                           <option value="Enganchemonos con la vida">Enganchémonos con la vida</option>
                           <option value="Familia cuidadora del medio ambiente">Familia cuidadora del medio ambiente</option>
                           <option value="La importancia de construir vínculos sanos, momento 1">La importancia de construir vínculos sanos, momento 1</option>
                           <option value="La importancia de construir vínculos sanos, momento 2">La importancia de construir vínculos sanos, momento 2</option>
                           <option value="El regalo mes de la familia">El regalo mes de la familia</option>';
                       }  
                       else                  
                       {
                          echo  '<option value="'.$arraydatosgenerales['accioneducativacual'].'">'.$arraydatosgenerales['accioneducativacual'].'</option>'
                                  . '<option value="Convivencia familiar">Convivencia familiar</option>
                                  <option value="Participacion democratica en la resolucion de conflictos">Participación democrática en la resolución de conflictos</option>
                                  <option value="Toma de decisiones en la familia">Toma de decisiones en la familia</option>
                                  <option value="Reconocimiento de los derechos y red de apoyo institucional">Reconocimiento de los derechos y red de apoyo institucional</option>
                                  <option value="Equidad de genero en la familia">Equidad de género en la familia</option>
                                  <option value="Prevencion del embarazo adolescente y subsecuente">Prevención del embarazo adolescente y subsecuente</option>
                                  <option value="En familia Jugamos">En familia Jugamos</option>
                                  <option value="Mi familia, mi lugar seguro">Mi familia, mi lugar seguro</option>
                                  <option value="Educacion financiera">Educación financiera</option>
                                  <option value="Distribucion equitativa del cuidado en la familia">Distribución equitativa del cuidado en la familia</option>
                                  <option value="Enganchemonos con la vida">Enganchémonos con la vida</option>
                                  <option value="Familia cuidadora del medio ambiente">Familia cuidadora del medio ambiente</option>
                                  <option value="La importancia de construir vínculos sanos, momento 1">La importancia de construir vínculos sanos, momento 1</option>
                                  <option value="La importancia de construir vínculos sanos, momento 2">La importancia de construir vínculos sanos, momento 2</option>';  
                       }
                      ?>
                      </select>  
                      </div>
        </div>
        </div><br>
           <div class="row">
                
                 <div id="divboton" class="col-lg-offset-5">
                   <button type="button" id="guardar" disabled="disabled"  name="guardar" class="btn btn-success">Guardar toda la información</button>
<!--                   <button type="button" id="siguiente" disabled="disabled"  name="siguiente" class="btn btn-success">Siguiente</button>-->
                </div>
                
            </div><br>
          

        </form>
    <br>
    
    <div class="row col-lg-offset-0">
        <button type="button" id="anterior" name="anterior" class="btn btn-primary"><< Anterior</button>
        <button type="button" id="siguiente1"   name="siguiente1" class="btn btn-primary"  <?php if($arraydatosgenerales['textoavance'] == '' && $arraydatosgenerales['textoavance2'] == ''){echo 'disabled="disabled" ';}else{echo '';} ?>  >>> Siguiente</button>
    </div>
          
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
        <p>Por favor , presionar Clic en el boton continuar.</p>
      </div>
      <div class="modal-footer">
          <button type="button" id="continuar1207" class="btn btn-primary">Continuar</button>
<!--        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>-->
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
//   
 function modal1207() 
{
$('#modal1207').modal();
}



//function habilitasiguiente()
//{
//   if(($('#textoavance').val()!=='' ) && ($('#textoavance2').val()!=='') )
//   {
//       $('#siguiente').prop('disabled',false);
//   }
//   else
//   {
//       $('#siguiente').prop('disabled',true);
//   }
//}
   
   function validarbotonguardar()
   {
   // alert($('#erfam').val());alert($('#deshum').val());alert($('#textoav').val());alert($('#textoav2').val());alert($('#valorp0Accion').val());alert($('#vcualmotivoAccion').val());
       if (($('#erfam').val() != '' && $('#deshum').val() != '' && $('#textoav').val() != '' && $('#textoav2').val() != '' && $('#valorp0Accion').val() == 'No')
        || ($('#erfam').val() != '' && $('#deshum').val() != '' && $('#textoav').val() != '' && $('#textoav2').val() != '' && $('#valorp0Accion').val() == 'Si' && ($('#vcualmotivoAccion').val() != '' && $('#vcualmotivoAccion').val() !== null)))
       {
           $('#guardar').prop('disabled',false);
           $('#siguiente1').prop('disabled',true);
           
       }
       else
       {
           $('#guardar').prop('disabled',true);
       }
   }
   
   
    function validartexto()
    {
        
        if ($('#erfam').val()!= '' && $('#deshum').val()!= '')
        {
            $('#textoav').show();
            $('#textoav').addClass('has-error');
            $('#divdeshum').removeClass('has-error');
            $('#divdimerfam').removeClass('has-error');
            
        }
        else
        {
            $('#textoav').hide();
            $('#textoav').removeClass('has-error');
            $('#divdeshum').addClass('has-error');
            $('#divdimerfam').addClass('has-error');
            $('#textoav').val('');
        }
        
    }
   
    function mostartextoavance()
    {
 //       alert($('#erfam').val());
 //       alert($('#deshum').val());
        if ($('#erfam').val()!= '' && $('#deshum').val()!= '')
        {
            $('#divtextoav').show();
            $('#textoav').show();

            $('#divtextoav2').show();
            $('#textoav2').show();
            
            $('#divdeshum').removeClass('has-error');
            $('#divdimerfam').removeClass('has-error');

            $('#p0divAccion').show();
        }
        else
        {
              $('#divtextoav').hide();
              $('#divtextoav2').hide();
              $('#textoav').val('');
              $('#textoav2').val('');
              $('#divtextoav').addClass('has-error');
              $('#divtextoav2').addClass('has-error');

              $('#p0divAccion').hide();
              $('#p0divAccion').addClass('has-error');
              $('#pregunta0Accion').prop('checked',false);
              $('#pregunta00Accion').prop('checked',false);

              $('#divcualmotivoAccion').hide();
              $('#divcualmotivoAccion').addClass('has-error');  
              $('#vcualmotivoAccion').val('');
              $('#valorp0Accion').val('');

              
              
              $('#divdeshum').addClass('has-error');
              $('#divdimerfam').addClass('has-error');
        }
    }
    
    $(document).ready(function()
    {

        $("#guardar").click(function ()
        {
                        $.ajax({
                          url: "fc_guardaravanceproceso",
                          type: "POST",
                          data: {
                          vfolio : $('#folio').val(),
                          verfam : $('#erfam').val(),
                          vdeshum : $('#deshum').val(),
                          vtextoav : $('#textoav').val(),
                          vtextoav2 : $('#textoav2').val(),
                          vdocumento: $('#documento').val(),
                          videstacion: $('#idestacion').val(),
                        
                          vvalorp0Accion: $('#valorp0Accion').val(),
                          vvcualmotivoAccion: $('#vcualmotivoAccion').val()},

                          dataType: "html",
                          success : function(obj){
                              $('#siguiente1').prop('disabled',false);
                              
                              //botonguardar();
                               mensajito('MENSAJE:','La informacion se guardo');
                              if($('#idestacion').val() == '21'){
                               //insertidpaso(2107);
                               insertarfolioexitoso21();
           //location.href = "../../casoexitoso/c_casoexitoso/fc_casoexitoso?folio="+ $('#folio').val() +"&idintegrante="+$('#idintegrante').val()+"&doccogestor="+$('#doccogestor').val()+"&idestacion=21";  
       }
       else if($('#idestacion').val() == '22')
       {
                                      //insertidpaso(2206);
       insertarfolioexitoso22();
           
       }
       else if($('#idestacion').val() == '23')
       {
           insertarfolioexitoso23();
       }
       else if($('#idestacion').val() == '24')
         {
           insertarfolioexitoso24();
       }
       else if($('#idestacion').val() == '25')
         {
           insertarfolioexitoso25();
       }
       else if($('#idestacion').val() == '26')
         {
             //alert('entro a 24');
           insertarfolioexitoso26();
       }
       else if($('#idestacion').val() == '27')
         {
             //alert('entro a 24');
           insertarfolioexitoso27();
       }
       else
       {
           
       }
      
//                               location.href = "../c_avanceproceso/fc_avanceproceso?folio="+ $('#folio').val()+ "&id=" + obj;
//                          botonguardar();
//                          $("#guardar").hide(1000)
                          }
                        });                    
        });
        
        
        
$("#continuar1207").click(function (){
            
         
           location.href = "../../c_protocolol1e2/fc_protocolol1e2?folio="+ $('#folio').val() +"&idintegrante=0"+"&doccogestor="+$('#doccogestor').val()+"&idestacion=12";
                 });
        
        
         $("#anterior").click(function ()
        {
            
         botonanterior();
         location.href = "../../historiahogar/c_infocorresp/fc_infocorresp?folio="+ $('#folio').val() +"&idintegrante=0"+"&doccogestor="+$('#doccogestor').val() +"&idestacion="+$('#idestacion').val();                    
        //location.href = "../c_capitulosintegrantes/fc_capitulosintegrantes?folio=" + $('#folio').val()+ "&idintegrante="+"&idintegrante=0";                    
        });
        
        
           $("#siguiente1").click(function ()
        {
            if($('#idestacion').val() == '21')
            {            
         botonanterior();
        location.href = "../../casoexitoso/c_casoexitoso/fc_casoexitoso?folio="+ $('#folio').val() +"&idintegrante="+$('#idintegrante').val()+"&doccogestor="+$('#doccogestor').val()+"&idestacion=21";  
        //location.href = "../c_capitulosintegrantes/fc_capitulosintegrantes?folio=" + $('#folio').val()+ "&idintegrante="+"&idintegrante=0";                    
    }else  if($('#idestacion').val() == '22')
    {
        location.href = "../../casoexitoso/c_casoexitoso/fc_casoexitoso?folio="+ $('#folio').val() +"&idintegrante="+$('#idintegrante').val()+"&doccogestor="+$('#doccogestor').val()+"&idestacion=22";  
    }
    else  if($('#idestacion').val() == '23')
    {
        location.href = "../../casoexitoso/c_casoexitoso/fc_casoexitoso?folio="+ $('#folio').val() +"&idintegrante="+$('#idintegrante').val()+"&doccogestor="+$('#doccogestor').val()+"&idestacion=23";  
    }
    else  if($('#idestacion').val() == '24')
    {
        location.href = "../../casoexitoso/c_casoexitoso/fc_casoexitoso?folio="+ $('#folio').val() +"&idintegrante="+$('#idintegrante').val()+"&doccogestor="+$('#doccogestor').val()+"&idestacion=24";  
    }
    else  if($('#idestacion').val() == '25')
    {
        location.href = "../../casoexitoso/c_casoexitoso/fc_casoexitoso?folio="+ $('#folio').val() +"&idintegrante="+$('#idintegrante').val()+"&doccogestor="+$('#doccogestor').val()+"&idestacion=25";  
    }
    else  if($('#idestacion').val() == '26')
    {
        location.href = "../../casoexitoso/c_casoexitoso/fc_casoexitoso?folio="+ $('#folio').val() +"&idintegrante="+$('#idintegrante').val()+"&doccogestor="+$('#doccogestor').val()+"&idestacion=26";  
    }
    else  if($('#idestacion').val() == '27')
    {
        location.href = "../../casoexitoso/c_casoexitoso/fc_casoexitoso?folio="+ $('#folio').val() +"&idintegrante="+$('#idintegrante').val()+"&doccogestor="+$('#doccogestor').val()+"&idestacion=27";  
    }
    else  if($('#idestacion').val() == '28')
    {
        location.href = "../../casoexitoso/c_casoexitoso/fc_casoexitoso?folio="+ $('#folio').val() +"&idintegrante="+$('#idintegrante').val()+"&doccogestor="+$('#doccogestor').val()+"&idestacion=28";  
    }
    else
    {
        insertidpaso(1207);
        modal1207();
        //location.href = "../../c_protocolol1e2/fc_protocolol1e2?folio="+ $('#folio').val() +"&idintegrante=0"+"&doccogestor="+$('#doccogestor').val()+"&idestacion=12";
    }
        });
        

        
        $("#actualizar").click(function ()
        {
                        $.ajax({
                          url: "fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),
                          vidintegrante : $('#idintegrante').val(),
                          vvaloravanceproceso : $('#valoravanceproceso').val()},    
                          dataType: "html",
                          success : function(obj){                      
                          botonguardar();
                          }
                        });                    
        });
        

//        $("#siguiente").click(function ()
//        {
//         botonsiguiente();
//         location.href = "../c_c10p2/fc_c10p2?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
//
//        });
//              
//        $("#anterior").click(function ()
//        {
//         botonanterior();
//        location.href = "../c_capitulosintegrante/fc_capitulosintegrante?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val();                    
//        });

//para cargar variables capitulo, pregunta,encuestador,vivienda,barra





});


function insertarfolioexitoso21()
   {
    //alert('test');
                        $.ajax({
                          url: "fc_insertarfolioexitoso",
                          type: "GET",
                          data: {vfolio: $('#folio').val(),videstacion: '21'},
                          dataType: "html",
                          success: function(obj) {
                          //me llama el mensajito de actualizar
                          //$('#datos').html(obj);
                          //location.href = "../c_capituloshogar/fc_capituloshogar?folio="+ $('#folio').val() +"&idintegrante="+$('#idintegrante').val();                  
                        }
                       });
   }



function insertarfolioexitoso22()
   {
    //alert('test');
                        $.ajax({
                          url: "fc_insertarfolioexitoso",
                          type: "GET",
                          data: {vfolio: $('#folio').val(),videstacion: '22'},
                          dataType: "html",
                          success: function(obj) {
                          //me llama el mensajito de actualizar
                          //$('#datos').html(obj);
                          //location.href = "../c_capituloshogar/fc_capituloshogar?folio="+ $('#folio').val() +"&idintegrante="+$('#idintegrante').val();                  
                        }
                       });
   }
   
   function insertarfolioexitoso23()
   {
    //alert('test');
                        $.ajax({
                          url: "fc_insertarfolioexitoso",
                          type: "GET",
                          data: {vfolio: $('#folio').val(),videstacion: '23'},
                          dataType: "html",
                          success: function(obj) {
                          //me llama el mensajito de actualizar
                          //$('#datos').html(obj);
                          //location.href = "../c_capituloshogar/fc_capituloshogar?folio="+ $('#folio').val() +"&idintegrante="+$('#idintegrante').val();                  
                        }
                       });
   }

function insertarfolioexitoso24()
   {
    //alert('test');
                        $.ajax({
                          url: "fc_insertarfolioexitoso",
                          type: "GET",
                          data: {vfolio: $('#folio').val(),videstacion: '24'},
                          dataType: "html",
                          success: function(obj) {
                          //me llama el mensajito de actualizar
                          //$('#datos').html(obj);
                          //location.href = "../c_capituloshogar/fc_capituloshogar?folio="+ $('#folio').val() +"&idintegrante="+$('#idintegrante').val();                  
                        }
                       });
   }
   
   function insertarfolioexitoso25()
   {
    //alert('test');
                        $.ajax({
                          url: "fc_insertarfolioexitoso",
                          type: "GET",
                          data: {vfolio: $('#folio').val(),videstacion: '25'},
                          dataType: "html",
                          success: function(obj) {
                          //me llama el mensajito de actualizar
                          //$('#datos').html(obj);
                          //location.href = "../c_capituloshogar/fc_capituloshogar?folio="+ $('#folio').val() +"&idintegrante="+$('#idintegrante').val();                  
                        }
                       });
   }
   
   function insertarfolioexitoso26()
   {
    //alert('test');
                        $.ajax({
                          url: "fc_insertarfolioexitoso",
                          type: "GET",
                          data: {vfolio: $('#folio').val(),videstacion: '26'},
                          dataType: "html",
                          success: function(obj) {
                          //me llama el mensajito de actualizar
                          //$('#datos').html(obj);
                          //location.href = "../c_capituloshogar/fc_capituloshogar?folio="+ $('#folio').val() +"&idintegrante="+$('#idintegrante').val();                  
                        }
                       });
   }

   function insertarfolioexitoso27()
   {
    //alert('test');
                        $.ajax({
                          url: "fc_insertarfolioexitoso",
                          type: "GET",
                          data: {vfolio: $('#folio').val(),videstacion: '27'},
                          dataType: "html",
                          success: function(obj) {
                          //me llama el mensajito de actualizar
                          //$('#datos').html(obj);
                          //location.href = "../c_capituloshogar/fc_capituloshogar?folio="+ $('#folio').val() +"&idintegrante="+$('#idintegrante').val();                  
                        }
                       });
   }




function insertidpaso(paso)
   {
    //alert('test');
        $.ajax({
          url: "fc_cerrarpaso",
          type: "GET",
          data: {vfolio: $('#folio').val(), vidpaso: paso, vestado:1},
          dataType: "html",
          success: function(obj) {
          
        }
       });
   }

   function validarcualmotivoAccion(opcion,campoval)
{
    $('#' + campoval).val(opcion);
   
    if(($('#'+ campoval).val() == 'No'))
   {
    $('#vcualmotivoAccion').val('');
    $('#p0divAccion').removeClass('has-error');
    $('#pregunta0Accion').removeClass('has-error');
    $('#divcualmotivoAccion').hide();
    $('#cualmotivodivAccion').removeClass('has-error'); 
    validarbotonguardar();           
    }
   else
   {
    $('#vcualmotivoAccion').val('');
    $('#p0divAccion').removeClass('has-error');
    $('#pregunta0Accion').removeClass('has-error');

    $('#divcualmotivoAccion').show();
    $('#cualmotivodivAccion').addClass('has-error');  
    $('#guardar').prop('disabled',true);
    validarbotonguardar();
   }
}   
function validarpaso0Accion()
{
//alert($('#vcualmotivoAccion').val());
   if($('#vcualmotivoAccion').val() == '')
   {
       $('#divcualmotivoAccion').addClass('has-error');
       $('#cualmotivodivAccion').addClass('has-error');
    }
   else
   {   $('#divcualmotivoAccion').removeClass('has-error');
       $('#cualmotivodivAccion').removeClass('has-error');
   }
}

//validar bolitas y texto
function validarbolitasytextot6(div,campo)
{ //alert(div + ' juanpis ' + campo);
   if(($('#'+ campo).val() == ''))
   { 
       $('#' + div).addClass(' has-error');
   }
   else
   { 
       $('#' + div).removeClass('has-error');
   }
}
</script>
</html>