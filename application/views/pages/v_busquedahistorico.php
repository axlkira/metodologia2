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
            
<!-- head -->

            <?php echo($head1); ?> <br>

        <div class="row">
                     
            <form class="navbar-form navbar-left has-error">
                <input type="text" class="form-control input-sm" onKeyPress="return soloNumeros(event)" placeholder="Buscar Folio" name="buscarfolio" id="buscarfolio">
            </form> 
            <form class="navbar-form navbar-left has-error">
                <select class="form-control input-sm" id="buscarestado" name="buscarestado"  >
                   <?php echo($lisestado); ?> 
                </select>
                
            </form> 
            <form class="navbar-form navbar-left has-error"> 
                <button class="btn btn-danger btn-sm" type="button" id="buscar" name="buscar"><span class="glyphicon glyphicon-search"></span> - Buscar!!! </button>
            </form>             
        </div>            
<!-- fin head -->

                <div  class="row">
                    <div class="">
                    <p class="text-right"><small>Te encuentras en la vista <strong>BUSQUEDA HOGAR POR ESTADO</strong></small></p>
                    </div>
     
 <!-- <button class="btn btn-danger btn-sm" type="button" id="sinco" name="sinco"><span class="glyphicon glyphicon-random"></span> - iniciar Sincronizacion...</button>-->
                    
					<?php if ($numerodefolios > '0'){ ?>
                    <button class="btn btn-danger btn-sm" type="button" id="sinco" name="sinco"><span class="glyphicon glyphicon-random"></span> - iniciar Sincronizacion</button>
                    <?php } ?>
					
					<?php if ($numerodefolios == '0'){ ?>
                    <button class="btn btn-danger btn-sm" type="button" id="sincoblanco" name="sincoblanco"><span class="glyphicon glyphicon-random"></span> - iniciar Sincronizacion en blanco</button>
                    <?php } ?> 
                </div><br>
                
<!--para imprimir el folio y llevarlo-->
<input type="text" class="form-control input-sm" id="docanalista" name="docanalista" style="display: none" placeholder="Text input" value="<?php echo($doccogestor); ?>">
<!--fin para imprimir el folio y llevarlo-->
            <form class="form-group" name="formulario" id="formulario">
                <div class="row">
                    <div class="form-group form-group-sm">   
                        <div class="form-group  ">
                            <div class="panel panel-primary">
                           <!-- Default panel contents -->
                           <div class="panel-heading">Hogares Asignados</div>
                           <div class="panel-body">
                             <p>En esta tabla encontraras el historico de todos los estado de los folios por cada estacion y su estado.</p>
                            
                           </div>
                            <table class="table table-condensed">
                                <thead>
                                    <tr>
                                        <th>Folio</th>
                                        <th>Momento</th>
                                        <th>Estado</th>
                                        <th>Fecha Registro</th>
                                        <th>Observacion</th>
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
 
 
<!--inicio botonera guardar y actualizar NO SE TOCA-->

<a href="../c_principalhogar/fc_principalhogar" class="btn btn-primary btn-sm" role="button" id="volv"><span class="glyphicon glyphicon-chevron-left"></span> Volver</a>
                                

<!--Fin botonera guardar y actualizar NO TOCAR-->

                </form>
<!--Inicio Modal-->
<div class="modal fade bs-example-modal-sm" id="modalsinco" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title" id="myModalLabel"><img src="<?php echo IMAGEN, 'cargando.gif'; ?>" alt="Brand"> Sincronizando...</h4>
        </div>
        <div class="modal-body">
        
        Por favor no cierre este dialogo... hasta que salga el mensaje de finalizacion.
        </div>
    </div>
  </div>
</div>
<!--Fin Modal-->
<!--INICIO Este es el footer NO TOCAR-->
            <?php echo($foot); ?>
<!--fin del footer NO TOCAR-->
        </div>
<!--INICIO ENLACES - NO TOCAR-->
        <script src="<?php echo BOOTSTRAP, 'js/jquery-1.11.0.js' ?>"></script>
        <script src="<?php echo BOOTSTRAP, 'js/bootstrap.min.js' ?>"></script>
        <script src="<?php echo BOOTSTRAP, 'js/jquery.bootstrap.wizard.js' ?>"></script>
        <script src="<?php echo BOOTSTRAP, 'js/prettify.js' ?>"></script>
        <script src="<?php echo JBOX, 'Source/jBox.min.js' ?>"></script>
        <link href="<?php echo JBOX, 'Source/jBox.css' ?>" rel="stylesheet">
<!--FIN ENLACES - NO TOCAR-->
    </body>


<script> 
    
function mensajito(titulo, mensaje)
{
new jBox('Notice', {
    title: titulo,
    content: mensaje,
    color: 'black',
    animation: {open: 'flip', close: 'flip'},
    position: {x: 'right', y: 'center'},
    autoClose: 3000
});
}
// funcion que permite ir a la vista principal protocolo    
function mostaradjuntar(idfila)
{ //alert(idfila);
    if($('#estadovisita' + idfila).val() == 2)
    {
        //alert('es efectivo');
        $('#linkadjuntar' + idfila).show(1000);
    }
    else
    {
        $('#linkadjuntar' + idfila).hide(1000);
    }
}

function guardar(folio,idestacion,idestadoestacion,idfila)
{ //alert(idfila);
    $.ajax({
                    url: "fc_guardar",
                    type: "GET",
                    data: {vfolio: $('#folio' + folio).val(),videstacion: $('#estacion' + idestacion).val(),videstadoestacion: $('#estadoestacion' + idestadoestacion).val(),vestadovisita: $('#estadovisita' + idfila).val(), vlinkadjuntar: $('#linkadjuntar' + idfila).val(), vobservacion: $('#observacion' + idfila).val()},
                    dataType: "html",
                    success : function(obj){                      
                      $('#datos').html(obj);
                    }
                });
}
    
    function iraactualizar(folio,doccogestor)
    { 
        location.href = "../actualizar/c_actualizar/fc_actualizar?folio="+ folio +"&idintegrante=0"+"&doccogestor="+doccogestor;
    }
    
//funciones para consultar dinamicamente el folio, documento y nombre
function traerfoliodinamic()
{
                //alert($('#bucasdoc').val());
                $.ajax({
                    url: "fc_traerfolio",
                    type: "GET",
                    data: {vfolio: $('#buscarfolio').val(),vdoccogestor: $('#doccogestor').val()},
                    dataType: "html",
                    success : function(obj){                      
                      $('#datos').html(obj);
                    }
                });
}

function traerdocdinamic()
{
                //alert($('#bucasdoc').val());
                $.ajax({
                    url: "fc_traerdoc",
                    type: "GET",
                    data: {vdocumento: $('#buscardoc').val(),vdoccogestor: $('#doccogestor').val()},
                    dataType: "html",
                    success : function(obj){                      
                      $('#datos').html(obj);
                    }
                });
}

function traernombredinamic()
{
                //alert($('#bucasdoc').val());
                $.ajax({
                    url: "fc_traernom",
                    type: "GET",
                    data: {vnombre: $('#buscarnom').val(),vdoccogestor: $('#doccogestor').val()},
                    dataType: "html",
                    success : function(obj){                      
                      $('#datos').html(obj);
                    }
                });
}
//fin de funciones para consultar dinamicamente el folio, documento y nombre

    //VALIDACIOND DE NUMEROS Y LETRAS
//SE DEBE COLOCAR ESTO EN EL CAMPO PARA QUE FUNCIONE onKeyPress="return soloNumeros(event)"
function soloNumeros(e) 
{ 
//    alert(e);
var key = window.Event ? e.which : e.keyCode 
if ((key >= 48 && key <= 57) || (key==8)){}
else
{
   okletrasnum('Ingresa solo numeros!!!');
}
return ((key >= 48 && key <= 57) || (key==8)) 
}

//SE DEBE COLOCAR ESTO EN EL CAMPO PARA QUE FUNCIONE onKeyPress="return soloLetras(event)"
function soloLetras(e) 
{ 
//    alert(e);
var key = window.Event ? e.which : e.keyCode

if ((key >= 65 && key <= 90) || (key==8) || (key==32)){}
else
{
   okletrasnum('Ingresa solo letras mayusculas!!!');
}

return ((key >= 65 && key <= 90) || (key==8) || (key==32)) 
}

    //NO TOCAR funcion qmostrar el mensaje de letras o numeros    
    function okletrasnum(mensaje)
    {
    new jBox('Notice', {
        content: mensaje,
        color: 'green',
        animation: {open: 'tada', close: 'flip'},
        position: {x: 'right', y: 'center'},
        autoClose: 2000
    });
    }
//FIN VALIDAR NUMERO LETRAS

   
    
// fin funcion que permite ir a la vista principal protocolo    
///////////////////////////////////////FIN Funciones que llaman a los mensajitos para guardar y actualizar////////////////////////////////////////////////////////////////////////    
    //NO TOCAR funcion que generar el mensaje de guardado    
    function okguardar()
    {
    new jBox('Notice', {
        content: 'Tu informacion se Guardado!!!',
        color: 'red',
        animation: {open: 'tada', close: 'flip'},
        position: {x: 'right', y: 'center'},
        autoClose: 2000
    });
    }
    //fin funcion que generar el mensaje de guardado

    //NO TOCAR funcion que generar el mensaje de actualizar    
    function okactualizar()
    {
    new jBox('Notice', {
        content: 'Tu informacion se Actualizo!!!',
        color: 'yellow',
        animation: {open: 'tada', close: 'flip'},
        position: {x: 'right', y: 'center'},
        autoClose: 2000
    });
    }
    //fin funcion que generar el mensaje de guardado
///////////////////////////////////////FIN Funciones que llaman a los mensajitos para guardar y actualizar////////////////////////////////////////////////////////////////////////    

///////////////////////////////////////Funciones que llaman al controlador para guardar y actualizar////////////////////////////////////////////////////////////////////////    
    $(document).ready(function()
    {

               //NO TOCAR - salir                
                $("#salir").click(function ()
                {
                    $.ajax({
                      url: "fc_salir",
                      success : function(obj)
                      {       //alert(obj);              
                        location.href = "../c_login/fc_vlogin";
                      }
                    }); 
                });
                //fin salir   

        $("#buscar").click(function ()
        { 
//       {alert($('#buscarcobertura').val());
//         alert($('#buscarfolio').val());
//         alert($('#buscarestado').val());
                        $.ajax({
                          url: "fc_buscar",
                          type: "GET",
                          data: {vbuscarfo : $('#buscarfolio').val(), vbuscares : $('#buscarestado').val()},    
                          dataType: "html",
                          success : function(obj){                      
                          $('#datos').html(obj);
                          }
                        });                    
        });
 // sincronizar    
        $("#sincoblanco").click(function ()
        {
            location.href = "../c_sincroarribad/fc_sincroinicio";
        });

        $("#sinco").click(function ()
        { 
            location.href = "../c_sincroarriba/fc_sincroinicio";
//        mensajedesinco();
//          
//                        $.ajax({
//                          url: "fc_sincronizar",
//                          type: "GET",
//                          data: {vbuscarfo : $('#buscarfolio').val(), vbuscares : $('#buscarestado').val()},
//                          dataType: "html",
//                          success : function(obj){
//                          $('#datos').html(obj);
//                          //alert(obj);
//                          terminasinco();
//                          //$('#modalsinco').modal('hide');
//                          mensajito('Sincronizado','Proceso Ok!!!');},
//                          error: function (jqXHR, ajaxOptions, thrownError) {terminasinco();
//                                    if (jqXHR.status === 0) {
//                                        mensajito ('Error al sincronizar!!!','Sin Conexion a internet, por favor verifca tu conexion a internet y vuelve a intentar. [0]');
//                                    } else if (jqXHR.status == 404) {
//                                        mensajito ('Error al sincronizar!!!','Sin Conexion a internet, por favor verifca tu conexion a internet y vuelve a intentar. [404]');
//                                    } else if (jqXHR.status == 500) {
//                                        mensajito ('Error al sincronizar!!!','Sin Conexion a internet, por favor verifca tu conexion a internet y vuelve a intentar. [500].');
//                                    } else {
//                                        mensajito ('Error interno!!!','Comuniquese con el analista en sede');
//                                    }
//
//                              }
//                        });
                        
                        
         
        });        
                
    });
/////////////////////////////////////// FIN Funciones que llaman al controlador para guardar y actualizar////////////////////////////////////////////////////////////////////////        
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
</script>
</html>