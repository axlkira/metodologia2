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
<!--         <input type="text" class="form-control input-sm" id="idoportunidad" name="idoportunidad"     placeholder="idoportunidad" value="<?php echo($idoportunidad); ?>">-->
        <input type="text" class="form-control input-sm" id="folio" name="folio" style="display:none"    placeholder="folio" value="<?php echo($folio); ?>">
        <input type="text" class="form-control input-sm" id="idtitular" name="idtitular" style="display:none"     placeholder="idtitular" value="<?php echo($idintegrante); ?>">
        <input type="text" class="form-control input-sm" id="edad" name="edad"  style="display:none"   placeholder="" value="<?php echo($arraydatosgenerales['eedadintegrante']); ?>">
        <input type="text" class="form-control input-sm" id="sexo" name="sexo"  style="display:none"   placeholder="" value="<?php echo($arraydatosgenerales['esexointegrante']); ?>">
        <input type="text" class="form-control input-sm" id="evariable" name="evariable"  style="display:none"   placeholder="variable" value="<?php echo($evariable); ?>">
        <!--fin para imprimir el idintegrante y llevarlo-->
<hr>
         <form class="form-group col-md-offset-0 " name="formulario" id="formulario">
                <div class="row">
                    
                      <!--    inicio de la barra de navegación-->
    <div class="navbar-collapse  collapse" id="navbar-main">
        
        <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#" id="themes">Ver Oportunidades Efectivas/No Efectivas <span class="caret"></span></a>
              <ul class="dropdown-menu" aria-labelledby="themes">
                <li><a href="../c_oportunidadhistorica/fc_oportunidadhistorica?folio=<?php echo($folio); ?>&idintegrante=<?php echo($idintegrante); ?>&variable=<?php echo($evariable);?>">Ver Historico de Oportunidades</a></li>
               
               
                
              </ul>
            </li>
        </ul>
    </div>
                      <!--    fin de la barra de navegación-->
                    <div class="form-group col-md-12 form-group-sm">   
                        <div class="form-group  ">
                          <div class="panel panel-info">
                           <!-- Default panel contents -->
                           <div class="panel-heading"><span class="badge">Listado de Ofertas</span></div>
                           <div class="panel-body">
                               <p>En esta tabla encontrará todas las oportunidades disponibles.</p>
                               <p>
                               <ul class="list-group" id="tothogar">
                               </ul>                                   
                               </p>
                               <p>Recuerde que puede filtrar por Id de la oportunidad, Nombre de la oportunida y/o Estado de la oportunidad.</p>
                             <div class="form-group">
                                 
                                 <div class="col-sm-2">
                                     <input type="text"  class="form-control input-sm text-uppercase" id="idbuscoph" onkeypress="return soloNumeros(event)" placeholder="Digite el id" >
                                </div>
                                 
                                 <div class="col-sm-2">
                                     <input type="text"  class="form-control input-sm text-uppercase" id="nombuscop"  placeholder="Digite Oportunidad" onkeypress="" placeholder="Nombre integrante " >
                                </div>

                                 <div class="col-sm-2">
                                     <select class="form-control input-sm "  id="estbuscopi" >
                                      <option value="9">Todos los estados</option>
                                      <option value="1">Acercada</option>
                                      <option value="2">Efectiva</option>
                                      <option value="3">No Efectiva</option>
                                         
                                     </select>                                     
                                </div>       
                                 
                                    <div id="dimensiondiv" >    
              <div class="row col-sm-3 ">
     
                  <select class="form-control input-sm  " id="dimension" name="dimension"  >
                                                      
                     <option value="">Seleccione Dimension</option>
                      <option value="1">IDENTIFICACIÓN</option>
                      <option value="8">BANCARIZACIÓN Y AHORRO</option>
                      <option value="6">HABITABILIDAD</option>
                      <option value="4">SALUD</option>
                      <option value="5">NUTRICION</option>
                      <option value="9">ACCESO A LA JUSTICIA</option>
                      <option value="3">EDUCACIÓN</option>
                      <option value="21">INGRESO Y TRABAJO/FORMACIÓN PARA EL TRABAJO</option>
                      <option value="22">INGRESO Y TRABAJO/EMPRENDIMIENTO</option>
                      <option value="23">INGRESO Y TRABAJO/INTERMEDIACION LABORAL</option>
                      <option value="7">DINAMICA FAMILIAR</option>
                          
                  </select>
              </div>
                                         <div class="row col-sm-1"></div>
                                       <div>   
                                       <button class="btn btn-danger col-sm-offset-0" type="button" id="buscar"  onclick="filtrartablah();" name="buscar"> Buscar </button>
                                       
                                   </div>
          </div><br><br><br><br>
                                 
                                 
                            </div>
                           </div>
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        
                                        <th>Id Oportunidad</th>
                                        <th>Nombre Oportunidad</th>
                                        <th>Descripcion</th>
                                        <th>Fichar Oportunidad</th>
                                        <th>Guardar Oportunidad</th>
                                  
                                        
                                    </tr>
                                </thead>

                                <tbody id='datos'>
                                    <?php echo($datos); ?>
                                </tbody>
                            </table>
                            </div>
                        </div>
                    </div>
                </div> 
             
              <div id="modala">
             <?php echo($modal); ?>
             </div>
             
             <div id="modal2a">
             <?php echo($modal2); ?>
             </div>

             <div id="modal2a1">
             <?php echo($modal21); ?>
             </div>
             
              <!--Inicio Modal-->
<div class="modal fade bs-example-modal-sm" id="modalsinco" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title" id="myModalLabel"><img src="<?php echo IMAGEN, 'cargando.gif'; ?>" alt="Brand"> Buscando...</h4>
        </div>
        <div class="modal-body">
        
        Por favor no cierre este dialogo... hasta que salga el mensaje de finalizacion.
        </div>
    </div>
  </div>
</div>
<!--Fin Modal-->
 


 
              <!--Inicio Modal-->
<div class="modal fade bs-example-modal-sm" id="modalsincoguardar" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title" id="myModalLabel"><img src="<?php echo IMAGEN, 'cargando.gif'; ?>" alt="Brand"> Guardando...</h4>
        </div>
        <div class="modal-body">
        
        Por favor no cierre este dialogo... hasta que salga el mensaje de finalizacion.
        </div>
    </div>
  </div>
</div>
<!--Fin Modal-->
 
 
<!--inicio botonera guardar y actualizar NO SE TOCA-->

                           <?php echo('<button class="btn btn-danger col-sm-offset-0" type="button" id="volver" name="salir"> <<  Volver  >> </button>');?>
                                

<!--Fin botonera guardar y actualizar NO TOCAR-->

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


              

//        $("#guardar").click(function ()
//        {
//                        $.ajax({
//                          url: "fc_actualizar",
//                          type: "GET",
//                          data: {vfolio : $('#folio').val(),
//                          vidintegrante : $('#idintegrante').val(),
//                          vvaloracercaroportunidadh : $('#valoracercaroportunidadh').val()},    
//                          dataType: "html",
//                          success : function(obj){                      
//                          botonguardar();
//                          }
//                        });                    
//        });
//
//        
//        $("#actualizar").click(function ()
//        {
//                        $.ajax({
//                          url: "fc_actualizar",
//                          type: "GET",
//                          data: {vfolio : $('#folio').val(),
//                          vidintegrante : $('#idintegrante').val(),
//                          vsel1 : $('#valoracercaroportunidadh').val()},    
//                          dataType: "html",
//                          success : function(obj){                      
//                          botonguardar();
//                          }
//                        });                    
//        });
//        

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

totalizar();

cargardatosgenerales('<?php echo($arraydatosgenerales['ecapitulo']); ?>','oportunidad','<?php echo($arraydatosgenerales['enomcoges']); ?>','<?php echo($arraydatosgenerales['enombreintegrante']." "." - "." "."Sexo:"." ".$arraydatosgenerales['esexointegrante']."   "."  -  "."   "."Edad:"."   ".$arraydatosgenerales['eedadintegrante']); ?>','0');
//control del boton ayuda
botonayuda();
$('#xcapitulo').hide();
$('#xpregunta').hide();
$('#progressBar').hide();

});

function botong(a){
    

    if ($('#idoportunidad' + a).val() == ''){
 
        
        $('#acercarh' + a).prop('disabled',true);
    }else{

        $('#acercarh' + a).prop('disabled',false);
    }
    
}


function totalizar()
{
                   $.ajax({
                    url: "fc_toalizarhogar",
                    type: "GET",
                    data: {vidintegrante : $('#idtitular').val()},    
                    dataType: "html",
                    success : function(obj){  
                        $('#tothogar').html(obj);

                    }
                  });     
}

              function filtrartablah()
               {
                    mensajedesinco();
                  $.ajax({
                    url: "fc_filtrartablah",
                    type: "GET",
                    data: {vidintegrante : $('#idtitular').val(),
                           vidbuscoph : $('#idbuscoph').val(),
                           vnombuscop : $('#nombuscop').val(),
                           vestbuscopi : $('#estbuscopi').val(),
                           vdimension : $('#dimension').val()},    
                    dataType: "json",
                    success : function(obj){  
                       
                         $('#datos').html(obj.datos);
                                               $('#modala').html(obj.modal);
                                              $('#modal2a').html(obj.modal2);
                                              totalizar();
                                              terminasinco();
                    }
                  }); 
              }



              function otraopormejora(idoportunidadno,versionn,valor)
                              {
                                 if(valor == 10)
                                 {
                                  $('#mejoracondicionesno'+idoportunidadno+versionn).show();  
                                 }else{
                                 $('#mejoracondicionesno'+idoportunidadno+versionn).hide();
                                 $('#mejoracondicionesno'+idoportunidadno+versionn).val('');
                                }

                              }
              //funcion que llama al modal cuando se acerca una oportunidad efectiva

              function modale(x,v)
              {
                  
                  if($('#idoportunidad' + x).val() == '2')
                  {
                      $('#myModalg' + x).modal('show');
                  }
                  else if($('#idoportunidad' + x).val() == '3')
                  {
                  $('#myModalex1' + x).modal('show');
                  }
                  else
                  {                     
                   guardaroportunidadh(x,v);
                  }
                      
              }

                function guardaroportunidadh(idoportunidad,version)
                {
              
                  if($('#idoportunidad' + idoportunidad).val() == '2') // efectiva
                    {
                   // mensajedesincoguarda();
                    if($('#idoportunidad' + idoportunidad).val() == '' || $('#mc' + idoportunidad+version).val() == '')
                    {
                      mensajitooportunidades('ALERTA:','Debes seleccionar la información solicitada');
                    }
                    else
                    {
                      mensajedesincoguarda();
                    $.ajax({
                                          url: "fc_insertaroportunidad",
                                          type: "GET",
                                          data: {vfolio : $('#folio').val(),
                                                 vidintegrante : $('#idtitular').val(),                                             
                                                 vidoportunidad : idoportunidad,
                                                 vversion : version,
                                                 videstado : $('#idoportunidad' + idoportunidad).val(),
                                                 vidtipo: $('#idtipo' + idoportunidad).val(),
                                                 mejoracondiciones : $('#mc' + idoportunidad+version).val(),
                                                 idestadoobservacion : $('#mejoracondicionesno' + idoportunidad+version).val()},        
                                          dataType: "json",
                                          success : function(obj){                      
                                            mensajitooportunidadesOK('MENSAJE:','La informacion se guardo satisfactoriamente');
                                            $('#datos').html(obj.datos);
                                             // $('#modala').html(obj.modal);
                                             // $('#modal2a').html(obj.modal2);
                                                  totalizar();
                                                  terminasincoguarda();
                                          }
                                        }); 
                   }                     
                                        
                }else if($('#idoportunidad' + idoportunidad).val() == '3') // no efectiva
                    { 
                        if(($('#idoportunidad' + idoportunidad).val() == '' || $('#mcf' + idoportunidad+version).val() == '') ||
                        ($('#mcf' + idoportunidad+version).val() == '10' && $('#mejoracondicionesno' + idoportunidad+version).val() == ''))
                      {
                        mensajitooportunidades('ALERTA:','Debes seleccionar la información solicitada');
                      }
                      else
                      {         
                        mensajedesincoguarda();
                    $.ajax({
                                          url: "fc_insertaroportunidad",
                                          type: "GET",
                                          data: {vfolio : $('#folio').val(),
                                                 vidintegrante : $('#idtitular').val(),                                             
                                                 vidoportunidad : idoportunidad,
                                                 vversion : version,
                                                 videstado : $('#idoportunidad' + idoportunidad).val(),
                                                 vidtipo: $('#idtipo' + idoportunidad).val(),
                                                 mejoracondiciones : $('#mcf' + idoportunidad+version).val(),
                                                 idestadoobservacion : $('#mejoracondicionesno' + idoportunidad+version).val()},    
                                          dataType: "json",
                                          success : function(obj){                      
                                            mensajitooportunidadesOK('MENSAJE:','La informacion se guardo satisfactoriamente');
                                            $('#datos').html(obj.datos);
                                             // $('#modala').html(obj.modal);
                                             // $('#modal2a').html(obj.modal2);
                                                  totalizar();
                                                  terminasincoguarda();
                                          }
                                        }); 
                   }                   
                  }else{
                    mensajedesincoguarda();
                    $.ajax({
                                          url: "fc_insertaroportunidad",
                                          type: "GET",
                                          data: {vfolio : $('#folio').val(),
                                                 vidintegrante : $('#idtitular').val(),                                             
                                                 vidoportunidad : idoportunidad,
                                                 vversion : version,
                                                 videstado : $('#idoportunidad' + idoportunidad).val(),
                                                 vidtipo: $('#idtipo' + idoportunidad).val(),
                                                 mejoracondiciones : 0,
                                                 idestadoobservacion : $('#mejoracondicionesno' + idoportunidad+version).val()},        
                                          dataType: "json",
                                          success : function(obj){                      
                                            mensajitooportunidadesOK('MENSAJE:','La informacion se guardo satisfactoriamente');
                                            $('#datos').html(obj.datos);
                                             // $('#modala').html(obj.modal);
                                             // $('#modal2a').html(obj.modal2);
                                                  totalizar();
                                                  terminasincoguarda();
                                          }
                                        }); 
                   }                   

                  }
                 function eliminaroportunidadh(idoportunidad)
                {
                    if($('#idoportunidad' + idoportunidad).val() == '')
                    {
                       mensajito('ALERTA:','Oportunidad no acercada, no se puede eliminar');
                    }
                    else
                    {                   
                    
                    $.ajax({
                                          url: "fc_eliminaroportunidad",
                                          type: "GET",
                                          data: {vfolio : $('#folio').val(),
                                                 vidintegrante : $('#idtitular').val(),                                                 
                                                 vidoportunidad : idoportunidad,
                                                 videstado : $('#idoportunidad' + idoportunidad).val()},    
                                                 dataType: "html",
                                          success : function(obj){
                                              mensajito('MENSAJE:','La informacion se Elimino');
                                              $('#datos').html(obj);
//                                          location.reload();  
                                           totalizar();
                                           
                                          }
                                        });
                    }                    
                }
                
                
                
         $("#volver").click(function ()
        {

         if ($('#evariable').val()== '1')
          {          
         location.href = "../c_acercaroportunidad/fc_acercaroportunidad?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idtitular').val() + "&variable=1";                 
           }
           else  if ($('#evariable').val()== '2')
           {          
         location.href = "../c_acercaroportunidad/fc_acercaroportunidad?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idtitular').val() + "&variable=2";                     
           }
           else  if ($('#evariable').val()== '4')
           {          
         location.href = "../c_acercaroportunidad/fc_acercaroportunidad?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idtitular').val() + "&variable=4";                     
           }
           else  if ($('#evariable').val()== '5')
           {          
         location.href = "../c_acercaroportunidad/fc_acercaroportunidad?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idtitular').val() + "&variable=5";                     
           }
           else  if ($('#evariable').val()== '7')
           {          
         location.href = "../c_acercaroportunidad/fc_acercaroportunidad?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idtitular').val() + "&variable=7";                     
           }
           else  if ($('#evariable').val()== '8')
           {          
         location.href = "../c_acercaroportunidad/fc_acercaroportunidad?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idtitular').val() + "&variable=8";                     
           }
           else  if ($('#evariable').val()== '9')
           {          
         location.href = "../c_acercaroportunidad/fc_acercaroportunidad?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idtitular').val() + "&variable=9";                     
           }
           else  if ($('#evariable').val()== '10')
           {          
         location.href = "../c_acercaroportunidad/fc_acercaroportunidad?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idtitular').val() + "&variable=10";                     
           }
           else  if ($('#evariable').val()== '11')
           {          
         location.href = "../c_acercaroportunidad/fc_acercaroportunidad?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idtitular').val() + "&variable=11";                     
           }
           else  if ($('#evariable').val()== '6')
           {          
         location.href = "../c_acercaroportunidad/fc_acercaroportunidad?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idtitular').val() + "&variable=6";                     
           }
           else  if ($('#evariable').val()== '81')
           {          
         location.href = "../c_acercaroportunidad/fc_acercaroportunidad?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idtitular').val() + "&variable=81";                     
           }
           else  if ($('#evariable').val()== '90')
            {          
            location.href = "../c_acercaroportunidad/fc_acercaroportunidad?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idtitular').val() + "&variable=90";                     
            }
            else  if ($('#evariable').val()== '91')
            {          
            location.href = "../c_acercaroportunidad/fc_acercaroportunidad?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idtitular').val() + "&variable=91";                     
            }
           else  if ($('#evariable').val()== '102')
           {          
         location.href = "../c_acercaroportunidad/fc_acercaroportunidad?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idtitular').val() + "&variable=102";                     
           }
           else
           {          
         location.href = "../c_acercaroportunidad/fc_acercaroportunidad?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idtitular').val() + "&variable=3";                    
           }   
                            

        });
        
        
        
           function mensajedesinco()
{
    $('#modalsinco').modal('show');
    $('#sinco').prop('disabled', true);
    $('#buscar').prop('disabled', true);
    $('#volv').prop('disabled', true);   
}

function terminasinco()
{
    $('#modalsinco').modal('hide');
    $('#sinco').prop('disabled', false);
    $('#buscar').prop('disabled', false);
    $('#volv').prop('disabled', false);   
}


  function mensajedesincoguarda()
{
    $('#modalsincoguardar').modal('show');
    $('#sinco').prop('disabled', true);
    $('#buscar').prop('disabled', true);
    $('#volv').prop('disabled', true);   
}

function terminasincoguarda()
{
    $('#modalsincoguardar').modal('hide');
    $('#sinco').prop('disabled', false);
    $('#buscar').prop('disabled', false);
    $('#volv').prop('disabled', false);   
}
        
        
        
                
</script>
</html>