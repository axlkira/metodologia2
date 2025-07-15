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
        <input type="text" class="form-control input-sm" id="id" name="id"  style="display:none"   placeholder="" value="<?php echo($id); ?>"><!--
       <input type="text" class="form-control input-sm" id="sexo" name="sexo"  style="display:none"   placeholder="" value="<?php echo($arraydatosgenerales['esexointegrante']); ?>">-->
        <!--fin para imprimir el idintegrante y llevarlo-->
<hr>
        <form class="form-group" name="formulario" id="formulario">

            <div class="row">
                
                <div class="row col-md-3 col-lg-offset-2 ">
                    <div id="divdimerfam"  <?php if($arraydatosgenerales['dimerfam'] == ''){echo 'class="has-error" ';}else{echo 'class="" ';} ?>>
                            <label>DIMENSIONES ERFAM</label>
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
              </div>
                
                
                 <div class="row col-md-3 col-lg-offset-1 ">
                    <div id="divdeshum"  <?php if($arraydatosgenerales['dimdllohum'] == ''){echo 'class="has-error" ';}else{echo 'class="" ';} ?> >
                             <label >DIMENSIONES DLLO HUMANO</label>
                            <select   class="form-control input-sm  " id="deshum" onchange="mostartextoavance();validarbotonguardar()"   name="deshum"  ><!-- onclick="filtrartabla();" onchange="deshabilitarbuscar()" -->

                               
                                 <?php if ($arraydatosgenerales['dimdllohum'] == '')
                       {
                           echo   '  <option value="">SELECCIONE</option>
                               <option value="EDUCACION">EDUCACIÓN</option>
                               <option value="SALUD">SALUD</option>
                               <option value="INGRESOS Y TRABAJO">AFECTIVIDAD</option>
                               <option value="HABITABILIDAD">HABITABILIDAD</option>
                               <option value="IDENTIFICACION">IDENTIFICACIÓN</option>
                               <option value="BANCARIZACION Y AHORRO">BANCARIZACIÓN Y AHORRO</option>
                               <option value="ACCESO A LA JUSTICIA">ACCESO A LA JUSTICIA</option>
                               <option value="NUTRICION">NUTRICIÓN</option>
                               <option value="ENTORNO FAMILIAR">ENTORNO FAMILIAR</option> ';
                       }  
                       else                  
                       {
                          echo  '<option value="'.$arraydatosgenerales['dimdllohum'].'">'.$arraydatosgenerales['dimdllohum'].'</option>'
                                  . ' <option value="EDUCACION">EDUCACIÓN</option>
                               <option value="SALUD">SALUD</option>
                               <option value="INGRESOS Y TRABAJO">AFECTIVIDAD</option>
                               <option value="HABITABILIDAD">HABITABILIDAD</option>
                               <option value="IDENTIFICACION">IDENTIFICACIÓN</option>
                               <option value="BANCARIZACION Y AHORRO">BANCARIZACIÓN Y AHORRO</option>
                               <option value="ACCESO A LA JUSTICIA">ACCESO A LA JUSTICIA</option>
                               <option value="NUTRICION">NUTRICIÓN</option>
                               <option value="ENTORNO FAMILIAR">ENTORNO FAMILIAR</option> ';  
                       }
                      ?>
                               
                            </select>
                    </div>
              </div>
                
            </div><br><br>
            
            <div class="row">
                
                <div id="divtextoav"   <?php if($arraydatosgenerales['textoavance'] == ''){echo 'class="has-error col-lg-offset-1 col-md-9 " ';}else{echo 'class=" col-lg-offset-1 col-md-9 " ';} ?> >
                    <textarea class="form-control"  <?php if($arraydatosgenerales['textoavance'] == ''){echo 'style="display:none" ';}else{echo 'style="display" ';} ?> onkeyup="validarbolitasytexto('divtextoav','textoav');validarbotonguardar()" id="textoav"  name="textoav" rows="6"><?php  echo($arraydatosgenerales['textoavance']); ?></textarea>              
                </div>
                
            </div><br><br>
            
             <div class="row">
                
                 <div id="divboton" class="col-lg-offset-5">
                   <button type="button" id="guardar" disabled="disabled"  name="guardar" class="btn btn-success">Guardar</button>
                </div>
                
            </div><br><br>
          

        </form>
    <br><br>
          
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
   
   
   function validarbotonguardar()
   {
       if ($('#erfam').val()!= '' && $('#deshum').val()!= '' && $('#textoav').val()!= '')
       {
           $('#guardar').prop('disabled',false);
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
            $('#textoav').show(1000);
            $('#textoav').addClass('has-error');
            $('#divdeshum').removeClass('has-error');
            $('#divdimerfam').removeClass('has-error');
            
        }
        else
        {
            
            $('#textoav').hide(1000);
            $('#textoav').removeClass('has-error');
            $('#divdeshum').addClass('has-error');
            $('#divdimerfam').addClass('has-error');
            $('#textoav').val('');
        }
        
    }
   
   
    
    function mostartextoavance()
    {
        
        if ($('#erfam').val()!= '' && $('#deshum').val()!= '')
        {
            $('#textoav').show(1000);
            $('#textoav').addClass('has-error');
            $('#divdeshum').removeClass('has-error');
            $('#divdimerfam').removeClass('has-error');
            
        }
        else
        {
            
            $('#textoav').hide(1000);
            $('#textoav').removeClass('has-error');
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
                          type: "GET",
                          data: {
                          vfolio : $('#folio').val(),
                          verfam : $('#erfam').val(),
                          vdeshum : $('#deshum').val(),
                          vtextoav : $('#textoav').val(),
                          vdocumento: $('#documento').val()
                      },    
                          dataType: "html",
                          success : function(obj){       
                               location.href = "../c_avanceproceso/fc_avanceproceso?folio="+ $('#folio').val()+ "&id=" + obj;
                          botonguardar();
                          $("#guardar").hide(1000)
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
                          vvaloravanceproceso : $('#valoravanceproceso').val()},    
                          dataType: "html",
                          success : function(obj){                      
                          botonguardar();
                          }
                        });                    
        });
        

        $("#siguiente").click(function ()
        {
         botonsiguiente();
         location.href = "../c_c10p2/fc_c10p2?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    

        });
              
        $("#anterior").click(function ()
        {
         botonanterior();
        location.href = "../c_capitulosintegrante/fc_capitulosintegrante?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val();                    
        });

//para cargar variables capitulo, pregunta,encuestador,vivienda,barra





});

</script>
</html>