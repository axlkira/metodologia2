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
        <input type="text" class="form-control input-sm" id="idtitular" name="idtitular"  style="display:none"     placeholder="idtitular" value="<?php echo($idintegrante); ?>">
        <input type="text" class="form-control input-sm" id="folio" name="folio" style="display:none"     placeholder="folio" value="<?php echo($folio); ?>">
        <input type="text" class="form-control input-sm" id="evariable" name="evariable"   style="display: none"    placeholder="variable" value="<?php echo($evariable); ?>">
        <!--fin para imprimir el idintegrante y llevarlo-->
<hr>
         <form class="form-group col-md-offset-0 " name="formulario" id="formulario">
                <div class="row">
                  
<!--    Fin de la barra de navegación-->
                    <div class="form-group col-md-12 form-group-sm">   
                        <div class="form-group  ">
                          <div class="panel panel-primary">
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
                                     <input type="text"  class="form-control input-sm text-uppercase" id="idbuscoph" onkeypress="return soloNumeros(event)" placeholder="Digite el id" onkeyup="filtrartablaoportunidadhistorico();">
                                </div>
                                 
                                 <div class="col-sm-2">
                                     <input type="text"  class="form-control input-sm text-uppercase" id="nombuscop"  placeholder="Digite Oportunidad" onkeypress="" placeholder="Nombre integrante " onkeyup="filtrartablaoportunidadhistorico();">
                                </div>

                                 <div class="col-sm-2">
                                     <select class="form-control input-sm "  id="estbuscopi" onchange="filtrartablaoportunidadhistorico();">
                                      <option value="">Todos los estados</option>
                                      <option value="2">Efectiva</option>
                                      <option value="3">No Efectiva</option>
                                         
                                     </select>                                     
                                </div>                                  
                                 
                            </div>
                             
                           </div>
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Id Oportunidad</th>
                                        <th>Nombre Oportunidad</th>
                                        <th>Estado Oportunidad</th>
                                        <th>Fecha Registro</th>
                                        <th>Fecha Actualización</th>
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
             
           
             
<!--             <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Otros</h4>
      </div>
      <div class="modal-body">
        <div class="row">
                                  <div class="form-group has-success" >    
                                      
                                      <label><?php echo ($descripcion); ?></label>


                                      
                                </div> 
                        </div><br>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success" data-dismiss="modal">Cerrar</button>
       
      </div>
    </div>
  </div>
</div>-->
 
 
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
//                          vvaloroportunidadhistorica : $('#valoroportunidadhistorica').val()},    
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
//                          vsel1 : $('#valoroportunidadhistorica').val()},    
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





});






               function filtrartablaoportunidadhistorico()
               {
                  $.ajax({
                    url: "fc_filtrartablaoportunidadhistorico",
                    type: "GET",
                    data: {
                        vidintegrante : $('#idtitular').val(),
                           vidbuscoph : $('#idbuscoph').val(),
                           vnombuscop : $('#nombuscop').val(),
                           vestbuscopi : $('#estbuscopi').val()},    
                    dataType: "html",
                    success : function(obj){  
                        $('#datos').html(obj);
                      
                    }
                  }); 
                  
                 
               }

                                             
                
                
                $("#volver").click(function ()
        {
//         botonsiguiente();
         location.href = "../c_acercaroportunidad/fc_acercaroportunidad?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idtitular').val() + "&variable=" + $('#evariable').val() +"";                    

        });
                
</script>
</html>