<!DOCTYPE html>
<html lang="es">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <title><?php echo $titulo ?></title>
        <link rel="stylesheet" href="<?php echo BOOTSTRAP, 'css/bootstrap1.min.css'; ?>" >
        <link rel="stylesheet" href="<?php echo BOOTSTRAP, 'css/style.css'; ?>" >
        <meta charset="utf-8">
        <meta http-equiv="Content-Language" content="es"/>
        <script language="javascript" type="text/javascript">
   function MakeStaticHeader(gridId, height, width, headerHeight, isFooter) {
       var tbl = document.getElementById(gridId);
       if (tbl) {
       var DivHR = document.getElementById('DivHeaderRow');
       var DivMC = document.getElementById('DivMainContent');
       var DivFR = document.getElementById('DivFooterRow');

       //*** Set divheaderRow Properties ****
       DivHR.style.height = headerHeight + 'px';
       DivHR.style.width = (parseInt(width) - 16) + 'px';
       DivHR.style.position = 'relative';
       DivHR.style.top = '0px';
       DivHR.style.zIndex = '10';
       DivHR.style.verticalAlign = 'top';

       //*** Set divMainContent Properties ****
       DivMC.style.width = width + 'px';
       DivMC.style.height = height + 'px';
       DivMC.style.position = 'relative';
       DivMC.style.top = -headerHeight + 'px';
       DivMC.style.zIndex = '1';

       //*** Set divFooterRow Properties ****
       DivFR.style.width = (parseInt(width) - 16) + 'px';
       DivFR.style.position = 'relative';
       DivFR.style.top = -headerHeight + 'px';
       DivFR.style.verticalAlign = 'top';
       DivFR.style.paddingtop = '2px';

       if (isFooter) {
        var tblfr = tbl.cloneNode(true);
        tblfr.removeChild(tblfr.getElementsByTagName('tbody')[0]);
        var tblBody = document.createElement('tbody');
        tblfr.style.width = '100%';
        tblfr.cellSpacing = "0";
        //*****In the case of Footer Row *******
        tblBody.appendChild(tbl.rows[tbl.rows.length - 1]);
        tblfr.appendChild(tblBody);
        DivFR.appendChild(tblfr);
        }
       //****Copy Header in divHeaderRow****
       //DivHR.appendChild(tbl.cloneNode(true));
    }
   }
   function OnScrollDiv(Scrollablediv) {
   document.getElementById('DivHeaderRow').scrollLeft = Scrollablediv.scrollLeft;
   document.getElementById('DivFooterRow').scrollLeft = Scrollablediv.scrollLeft;
   }
   </script>

    </head>
    <body>  
        <div class="container">
        <!--head            -->
            <?php echo($head1); ?><br>
            <input type="text" class="form-control input-sm" id="doccogestor" name="doccogestor" style="display: none" placeholder="Text input" value="<?php echo($foexiste['edoccogestor']); ?>">
            <input type="text" class="form-control input-sm" id="folio" name="folio" style="display: none" placeholder="Text input" value="<?php echo($folio); ?>">
            <input type="text" class="form-control input-sm" id="idintegrante" name="idintegrante" style="display: none" placeholder="Text input" value="<?php echo($tdatinte['tidintegrante']); ?>"><br><br>
            <!-- fin head            -->
            <div  class="row col-md-12 col-md-offset-0"><br>
            <ul class="nav nav-tabs">
                <li role="presentation" class="active"><a href="#">Contando nuestros sueños</a></li>
                
            </ul>
            </div><br>
            
            <form class="form-group col-md-12 col-md-offset-0" name="formulario" id="formulario"><br>
                <!--incio de campos de texto-->
                    <div class="row">
                    <div class="form-group col-md-4 form-group-sm">
                        <label for="folio">Folio</label>
                        <input type="text" class="form-control input-sm" id="folio" disabled="" name="folio" OnFocus="this.blur()" placeholder="Text input" value="<?php echo($foexiste['efolio']); ?>">
                    </div>
                    <div class="form-group col-md-4 form-group-sm">
                        <label for="estado">Id integrante Titular</label>
                        <input type="text" class="form-control input-sm" id="idintegrante" disabled="" name="idintegrante" OnFocus="this.blur()" placeholder="Text input" value="<?php echo($tdatinte['tidintegrante']); ?>">
                    </div>
                        
                     <div class="form-group col-md-4 form-group-sm">
                        <label for="estado">Nombre del Representante</label>
                        <input type="text" class="form-control input-sm" id="representante" disabled="" name="representante" OnFocus="this.blur()" placeholder="Text input" value="<?php echo($foexiste['erephogar']); ?>">
                    </div>   
                    </div>    
                    <!--opcion de seleccion-->
                    <div class="row">
                    <div id="idintegrantesdiv"<?php {echo('class="form-group col-md-6 has-error"');}?>>        
                        <label class="control-label" for="idintegrantes">Quien quiere contar su sueño</label>
                        <select class="form-control input-sm" id="idintegrantes" name="idintegrantes" onchange="mostraridintegrantes();">
                            <?php {
                                  echo('<option value="">Seleccione un integrante</option>');
                                  }?>
                            
                            <?php echo($representante); ?>
                        </select>
                    </div>

                    <div id="aplicadiv"<?php {echo('class="form-group col-md-6 has-error"');}?>>    
                    <label class="control-label" for="aplica">A quien aplica</label>
                    <select class="form-control input-sm" id="aplica" name="aplica" onchange="mostraralqueaplica();" >
                            <?php {
                                  echo('<option value="">Seleccione una opción</option>');
                                  }?>
                            
                            <?php echo($motivo); ?>
                    </select> 
                    </div> 
                    </div>
<!--fin de seleccion-->
<button type="button" id="crearsueno"  class="btn btn-default" disabled="" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Crear un Sueño</button><br><br>

                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" data-keyboard="false" data-backdrop="static">
                    <div class="modal-dialog" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"></span></button>
                    <h3 class="modal-title" id="exampleModalLabel">El Sueño:</h3>
                    </div>
                        <div class="modal-body">
                        
                        <div class="row" id="mensajesuenomostrar" align="center" name="mensajesuenomostrar" style="display: none">
                        
                        <label>    
                        <h1 class="control-label" id="exampleModalLabel">El sueño fue creado</h1>    
                        </label>
<!--                        <label class="control-label">El sueño fue creado</label>-->
                        </div>    
                            
                            
                        <div class="row" id="nombresuenomostrar" name="nombresuenomostrar">
                        <div  id="nombresuenodiv" name="nombresuenodiv" <?php {echo('class="form-group col-md-12 has-error"');}?>>
                        <label class="control-label">Nombre del Sueño:</label>
                        <textarea  class="form-control" id="nombresueno" onkeypress="return soloLetras(event)"  onchange="validarbolitasytextomodal()" name="nombresueno"   placeholder="Escriba el nombre de su sueño" value=""></textarea>
                        </div>
                        </div>    
                        
                          <div id="catsuenodiv" <?php {echo('class="has-error"');}?>>
                          <label class="control-label" for="catsueno">Categoria del Sueño</label>
                          <select class="form-control input-sm" id="catsueno" name="catsueno" onchange="validarbolitasytextomodal();">
                            <?php {
                                  echo('<option value="">Seleccione una opción</option>');
                                  }?>
                            
                            <?php echo($categorias); ?>
                          </select>
                          </div>
                                     <!--Check varias selecciones -->
    <div class="row">
        <div id="recursosintdiv" name="recursosintdiv" class="form-group col-md-12 form-group-sm">
        <div id="recursosinto0div" class="has-error">
        <label class="control-label">Recursos internos con los que cuenta: SELECCIÓN MULTIPLE</label>
        </div>
        <div id="recursosinto1div" <?php {echo('class=" has-error"');}?>>
        <div class="checkbox">
            <label> <!--en este caso se manda a la fincion javascript el nombre del campo-->
                <input type="checkbox" name="recursosinto1" id="recursosinto1" onclick="cambiarsinorecursos('SI','recursosinto1','recursosinto1div','recursosintdiv',9);" value="NO">
            Acceso a información.
            </label>
        </div>
        </div>
        <div id="recursosinto2div" <?php {echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="recursosinto2" id="recursosinto2" onclick="cambiarsinorecursos('SI','recursosinto2','recursosinto2div','recursosintdiv',9);" value="NO">
            Acceso a TIC’S.
          </label>
        </div>
        </div>
        <div id="recursosinto3div" <?php {echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="recursosinto3" id="recursosinto3" onclick="cambiarsinorecursos('SI','recursosinto3','recursosinto3div','recursosintdiv',9);" value="NO">
            Recursos económicos.
          </label>
        </div>
        </div>  
       <div id="recursosinto4div" <?php {echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="recursosinto4" id="recursosinto4" onclick="cambiarsinorecursos('SI','recursosinto4','recursosinto4div','recursosintdiv',9);" value="NO">
            Cumplimiento de requisitos previos. 
          </label>
        </div>
        </div>
       <div id="recursosinto5div" <?php {echo('class=" has-error"');}?>>
       <div class="checkbox">
         <label>
             <input type="checkbox" name="recursosinto5" id="recursosinto5" onclick="cambiarsinorecursos('SI','recursosinto5','recursosinto5div','recursosintdiv',9);" value="NO">
           Capacidades / habilidades individuales. 
         </label>
       </div>
       </div>
       <div id="recursosinto6div" <?php {echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="recursosinto6" id="recursosinto6" onclick="cambiarsinorecursos('SI','recursosinto6','recursosinto6div','recursosintdiv',10);" value="NO">
           Red familiar de apoyo. 
          </label>
        </div>
        </div>
            <div id="recursosinto7div" <?php {echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="recursosinto7" id="recursosinto7" onclick="cambiarsinorecursos('SI','recursosinto7','recursosinto7div','recursosintdiv',10);" value="NO">
           Recursos familiares (resiliencia, resolución de conflictos, empatía). 
          </label>
        </div>
        </div>
            <div id="recursosinto8div" <?php {echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="recursosinto8" id="recursosinto8" onclick="cambiarsinorecursos('SI','recursosinto8','recursosinto8div','recursosintdiv',10);" value="NO">
           Estructura y valores familiares. 
          </label>
        </div>
        </div>
            <div id="recursosinto9div" <?php {echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="recursosinto9" id="recursosinto9" onclick="cambiarsinorecursos('SI','recursosinto9','recursosinto9div','recursosintdiv',10);" value="NO">
           Nivel de formación y/u ocupación de los integrantes de la familia. 
          </label>
        </div>
        </div>
            
       </div>
      </div>    
      <!--Fin Chek varias selecciones-->

      <div class="row">
        <div id="recursosextdiv" name="recursosextdiv" class="form-group col-md-12 form-group-sm">
        <div id="recursosexto0div" class="has-error">
        <label class="control-label">Recursos externos con los que cuenta: SELECCIÓN MULTIPLE</label>
        </div>
        <div id="recursosexto1div" <?php {echo('class=" has-error"');}?>>
        <div class="checkbox">
            <label> <!--en este caso se manda a la fincion javascript el nombre del campo-->
              <input type="checkbox" name="recursosexto1" id="recursosexto1" onclick="cambiarsinorecursos('SI','recursosexto1','recursosexto1div','recursosextdiv',10);" value="NO">
            Accesibilidad a vías y medios de transporte.
            </label>
        </div>
        </div>
        <div id="recursosexto2div" <?php {echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="recursosexto2" id="recursosexto2" onclick="cambiarsinorecursos('SI','recursosexto2','recursosexto2div','recursosextdiv',10);" value="NO">
            TICS disponibles.
          </label>
        </div>
        </div>
        <div id="recursosexto3div" <?php {echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="recursosexto3" id="recursosexto3" onclick="cambiarsinorecursos('SI','recursosexto3','recursosexto3div','recursosextdiv',10);" value="NO">
            Acceso a programas, proyectos y servicios.
          </label>
        </div>
        </div>  
         
       <div id="recursosexto4div" <?php {echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="recursosexto4" id="recursosexto4" onclick="cambiarsinorecursos('SI','recursosexto4','recursosexto4div','recursosextdiv',10);" value="NO">
            Red social de apoyo y tejido social. 
          </label>
        </div>
        </div>
       <div id="recursosexto5div" <?php {echo('class=" has-error"');}?>>
       <div class="checkbox">
         <label>
             <input type="checkbox" name="recursosexto5" id="recursosexto5" onclick="cambiarsinorecursos('SI','recursosexto5','recursosexto5div','recursosextdiv',10);" value="NO">
           Acceso a servicios públicos. 
         </label>
       </div>
       </div>
            
       </div>
      </div>    
      <!--Fin Chek varias selecciones-->

    </div>
    <div class="modal-footer">
        <button id="cerrar"type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        <button id="guardar"type="button" disabled="" class="btn btn-primary">Guardar</button>
    </div>
    </div>
    </div>
    </div>
<!--inicio botonera guardar y actualizar NO SE TOCA-->
                           <div class="panel panel-primary">
                           <!-- Default panel contents -->
                           <div class="panel-heading">Sueños del hogar y/o integrantes</div>
                           <div class="panel-body">
<!--                           <p><button class="btn btn-warning" <?php echo($disabled); ?> type="button" id="nintegrante" name="nintegrante" >Ingresar Nuevo Integrante</button></p>-->
                           </div>
<!--                            <table class="table table-condensed">
                                <thead>
                                    <tr>
                                            <th>Nombre integrante</th>		
                                            <th>Aplica al</th>
                                            <th>Id sueño</th> 
                                            <th>Nombre del sueño</th>
                                            <th>Categoria del sueño</th>
                                            <th>Fecha creacion sueño</th>
                                            <th>Crear o ver acciones</th>
                                            <th>Editar sueño</th>
                                            <th>Eliminar sueño</th>
                                         </tr>
                                </thead>

                                <tbody id='datos'>
                                    <?php echo($datossueno); ?>
                                </tbody>
                            </table>-->
                           <!--LICHEEEEEEEEEEEEEEEEEEEEE-->
                           
<!--                           <div class="form-group col-sm-12">   -->
<!--        <div class="panel">-->
<!--            <div class="panel-heading">    -->
                <div class="form-group">
                        
                    
                    <div id="DivRoot" align="left">
                     <div style="overflow: hidden;" id="DivHeaderRow">
                       <table class="table table-bordered" id="tr24h2" style="table-layout: fixed">
                           <thead>
                               <tr class="success">
                                   <th style="width:200px;">Nombre integrante</th>
                                   <th style="width:100px;">Aplica al</th>
                                   <th style="width:50px;">Id sueño</th>
                                   <th style="width:300px;">Nombre del sueño</th>
                                   <th style="width:130px;">Categoria del sueño</th>
<!--                                   <th style="width:150px;">Fecha creacion sueño</th>-->
                                   <th style="width:150px;">Crear o ver acciones</th>
                                   <th style="width:110px;">Editar sueño</th>
                                   <th style="width:120px;">Eliminar sueño</th>
                               </tr>
                           </thead>
                     </table>
                   </div>

                    <div style="overflow:scroll;" onscroll="OnScrollDiv(this)" id="DivMainContent">
                      <table class="table table-bordered table-striped" name="tr24h" id="tr24h" style="table-layout: fixed">
                             <thead>
                               <tr class="success">
                                   <th style="width:200px;">Nombre integrante</th>
                                   <th style="width:100px;">Aplica al</th>
                                   <th style="width:50px;">Id sueño</th>
                                   <th style="width:300px;">Nombre del sueño</th>
                                   <th style="width:130px;">Categoria del sueño</th>
<!--                                   <th style="width:150px;">Fecha creacion sueño</th>-->
                                   <th style="width:150px;">Crear o ver acciones</th>
                                   <th style="width:110px;">Editar sueño</th>
                                   <th style="width:120px;">Eliminar sueño</th>
                               </tr>
                           </thead>
                            <tbody id='datos2'>
                            <?php echo($datossueno); ?>
                            </tbody>
                    </table>  
                    </div>
                    <div id="DivFooterRow" style="overflow:hidden">
                    </div>
                    </div>

            </div>
<!--        </div>-->
<!--    </div>          -->
                    
<!--</div>-->
                           
                            </div>

                            <?php if($suevsaccion['esuenosinaccion']=='1')//NO SE TOCA bonotes si es nuevo folio
                                {
                                echo('<button class="btn btn-primary " type="button" id="anterior" name="anterior">Volver</button>&nbsp');
                                echo('<button class="btn btn-success " type="button" id="terminarsueno" disabled="" name="terminarsueno" data-toggle="modal" data-target="#myModal" data-target="#myModal"> Terminar de ingresar Sueños</button>&nbsp');
                                }
                                else
                                {
                                echo('<button class="btn btn-primary " type="button" id="anterior" name="anterior">Volver</button>&nbsp');
                                echo('<button class="btn btn-success " type="button" id="terminarsueno" name="terminarsueno" data-toggle="modal" data-target="#myModal" data-target="#myModal" >Terminar de ingresar Sueños</button>&nbsp');
                                }?>   
<!--Fin botonera guardar y actualizar NO TOCAR-->

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel" ></h4>
      </div>
      <div class="modal-body">
     DESEA ADICIONAR MAS SUEÑOS?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal" onclick="quitar()">SI</button>
        <button type="button" id="terminarsuenof" name="terminarsuenof" class="btn btn-primary" data-dismiss="modal" >NO</button>
      </div>
    </div>
  </div>
</div>


            
            </form>
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
function validarbolitasytextomodal()
{ 
  if(($('#nombresueno').val() !== '')) 
  { 
  $('#nombresuenodiv').removeClass('has-error');
  }
  else
  { 
  $('#nombresuenodiv').addClass('has-error');
  }
  if(($('#catsueno').val() !== '')) 
  { 
  $('#catsuenodiv').removeClass('has-error');
  }
  else
  { 
  $('#catsuenodiv').addClass('has-error');
  }
  // alert('entra al validar guardar')
  if(($('#nombresueno').val() !== '') && ($('#catsueno').val() !== '') &&
    (($('#recursosinto1').val() !== 'NO') || ($('#recursosinto2').val() !== 'NO')|| ($('#recursosinto3').val() !== 'NO')||
    ($('#recursosinto4').val() !== 'NO')|| ($('#recursosinto5').val() !== 'NO')|| ($('#recursosinto6').val() !== 'NO')||
    ($('#recursosinto7').val() !== 'NO')|| ($('#recursosinto8').val() !== 'NO')|| ($('#recursosinto9').val() !== 'NO'))
    && (($('#recursosexto1').val() !== 'NO')||($('#recursosexto2').val() !== 'NO')||($('#recursosexto3').val() !== 'NO')||
    ($('#recursosexto4').val() !== 'NO')||($('#recursosexto5').val() !== 'NO'))) 
  { 
 //  alert('habilitar guardar')   
  $('#guardar').prop('disabled', false);
  }
  else
  { 
 //  alert('inhabilitar guardar')   
  $('#guardar').prop('disabled', true);
  }
  // validarguardar();   
}
// Fin validar bolitas 
//SE DEBE COLOCAR ESTO EN EL CAMPO PARA QUE FUNCIONE onKeyPress="return soloNumeros(event)"

function quitar()
    {
       
    } 
    
    
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
        color: 'black',
        animation: {open: 'tada', close: 'flip'},
        position: {x: 'right', y: 'center'},
        autoClose: 2000
    });
    }
 //FIN DE VALIDACION NUMEROS Y LETRAS
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
        color: 'red',
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
     // PARAMETROS PARA LA TABLA 
     MakeStaticHeader('tr24h', 300, 1100, 10, false);
     // MakeStaticHeader('tr24h2', 500, 1100, 60, false);

                //esta funcion es para guardar
                $("#guardar").click(function ()
                {
                   // alert('text');
                        $.ajax({
                          url: "fc_insertar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(), vidintegrante : $('#idintegrantes').val(),vaplica: $('#aplica').val(), vnombresueno: $('#nombresueno').val(), vcatsueno: $('#catsueno').val(),vrecursosinto1: $('#recursosinto1').val(), vrecursosinto2: $('#recursosinto2').val(),vrecursosinto3: $('#recursosinto3').val(),vrecursosinto4: $('#recursosinto4').val(),vrecursosinto5: $('#recursosinto5').val(),vrecursosinto6: $('#recursosinto6').val(),vrecursosinto7: $('#recursosinto7').val(),vrecursosinto8: $('#recursosinto8').val(),vrecursosinto9: $('#recursosinto9').val(),vrecursosexto1: $('#recursosexto1').val(),vrecursosexto2: $('#recursosexto2').val(),vrecursosexto3: $('#recursosexto3').val(),vrecursosexto4: $('#recursosexto4').val(),vrecursosexto5: $('#recursosexto5').val()},
                          dataType: "html",
                          success : function(obj){      
                          ocultardiv();    
                        //  okguardar();//me llama el mensajito de guardar
                          $('#cerrar').show();  
                          $('#guardar').hide();
                          }
                        });                    
                });
                //fin de la funcion guardar
                $("#cerrar").click(function()
                {
                // borrarcheck();
                 location.reload();
                });
                //si las preguntas son por hogar mandar idintegrante en 0                
                $("#anterior").click(function ()
                {
                   // alert('juapis');
                location.href = "../../c_protocolol2e2/fc_protocolol2e2?folio="+ $('#folio').val() + "&idintegrante=0"+ "&doccogestor=" + $('#doccogestor').val();                 
                });
                //fin de la funcion atras
                
                //esta funcion es para cerrar formulario, paso 6 de L1 estación 1
                $("#terminarsuenof").click(function ()
                {
                    //alert('test');
                        $.ajax({
                          url: "fc_cerrarpaso",
                          type: "GET",
                          data: {vfolio: $('#folio').val(), vidpaso: 2204, vestado:1},
                          dataType: "html",
                          success: function(obj) {
                        location.href = "../../c_protocolol2e2/fc_protocolol2e2?folio="+ $('#folio').val() +"&idintegrante=0";      
                        }
                     });
                });
                //fin esta funcion es para cerrar formulario, paso 6 de L1 estación 1
                
                
                
    });
    //validar bolitas
    function acciones(id,folio,idinte)
    { 
      location.href = "../c_accionessueno/fc_accionessueno?folio="+ folio +"&idintegrante="+idinte+"&idsueno="+id;
    }
    function editarsueno(id,folio,idinte)
    { 
      location.href = "../c_editarsueno/fc_editarsueno?folio="+ folio +"&idintegrante="+idinte+"&idsueno="+id;
    }
    function eliminarsueno(id,folio,idinte)
    { 
                       $.ajax({
                          url: "fc_eliminarsueno",
                          type: "GET",
                          data: {vid : id, vfolio : folio, vidintegrante : idinte},
                          dataType: "html",
                          success : function(obj){                      
                          }
                        });
        location.reload();               
    }
function cambiarsinorecursos(opcion,campoval,divcampo,divcompleto,campos)
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
       
    validarbolitasytextomodal();
}

function mostraridintegrantes()
{
  if($('#idintegrantes').val()=='')
  {
  $('#idintegrantesdiv').addClass('has-error')
  }
  else
  {
  $('#idintegrantesdiv').removeClass('has-error')    
  }
  validarguardarmodal()
// $('#crearsueno').prop('disabled', false);
}
function mostraralqueaplica()
{
  if($('#aplica').val()=='')
  {
  $('#aplicadiv').addClass('has-error')
  }
  else
  {
  $('#aplicadiv').removeClass('has-error')    
  } 
  validarguardarmodal()
}

function mostrarcategoria()
{
   $('#catsuenodiv').removeClass('has-error')
}
function validarguardarmodal()
{ 
  if(($('#aplica').val()!=='') && ($('#idintegrantes').val()!==''))
  {
      $('#crearsueno').prop('disabled', false);
  }
  else
  {    
      $('#crearsueno').prop('disabled', true);
  }
}
function ocultardiv()
{
 $('#nombresuenomostrar').hide();
 $('#catsuenodiv').hide();
 $('#recursosintdiv').hide();
 $('#recursosextdiv').hide();
 $('#mensajesuenomostrar').show();
}
/////////////////////////////////////// FIN Funciones que llaman al controlador para guardar y actualizar////////////////////////////////////////////////////////////////////////                        
</script>
</html>















