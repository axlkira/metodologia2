<!DOCTYPE html>
<html lang="es">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <title><?php echo $titulo ?></title>
        <link rel="stylesheet" href="<?php echo BOOTSTRAP, 'css/bootstrap1.min.css'; ?>" >
        <link rel="stylesheet" href="<?php echo BOOTSTRAP, 'css/style.css'; ?>" >
        <meta charset="utf-8">
        <meta http-equiv="Content-Language" content="es"/>
<!-- funcion para crear tabla cuando se desborda -->
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
   <style>
   th{
      width:250px;
     }
   </style>
<!--   fin crear tabla cuando se desborda-->
</head>
<body> 
<div class="container">
            <!--head-->
            <?php echo($head); ?><br>
            <input type="text" class="form-control input-sm" id="doccogestor" name="doccogestor" style="display:none" placeholder="Text input" value="<?php echo($foexiste['edoccogestor']); ?>">
            <input type="text" class="form-control input-sm" id="folio" name="folio" style="display: none" placeholder="Text input" value="<?php echo($folio); ?>">
            <input type="text" class="form-control input-sm" id="iddimension" name="iddimension" style="display: none" placeholder="Text input" value="<?php echo($iddimen); ?>">
            <input type="text" class="form-control input-sm" id="idlogro" name="idlogro" style="display: none" placeholder="Text input" value="<?php echo($idlog); ?>">
            <input type="text" class="form-control input-sm" id="colordimension" name="colordimension" style="display: none"  placeholder="Text input" value="<?php echo($colordimen); ?>">
            <input type="text" class="form-control input-sm" id="idoportunidadinfo" name="idoportunidadinfo" style="display: none" placeholder="Text input" value="">
            <input type="text" class="form-control input-sm" id="folio" name="folio" style="display: none" placeholder="Text input" value="">
            <input type="text" class="form-control input-sm" id="edad" name="edad" style="display: none" placeholder="Text input" value="">
            <input type="text" class="form-control input-sm" id="idestacion" style="display: none"  name="idestacion"  value="<?php echo $this->session->userdata('idestacion') ?>">
            <!--fin para imprimir el folio y llevarlo-->
            <form class="form-group" name="formulario" id="formulario">
                <div class="row">
                    <div class="form-group form-group-sm">   
                        <div class="form-group">
                           <div class="panel panel-info">
                           <div class="panel-heading"><h2>Resultado del calculo de logros por integrante y por hogar del folio: <?php echo($folio);?></h2></div>
                           <?php echo($tabla); ?>
                           </div>
                        </div>
                    </div> 
               <?php echo($botoneral);?>
               <!--INICIO Este es el footer NO TOCAR-->
               <?php echo($foot); ?>
                <!--fin del footer NO TOCAR-->
               </div>
            </form>
<!-- modal verificacion cogestor inicio-->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" data-keyboard="false" data-backdrop="static">
<div class="modal-dialog" role="document">
 <div class="modal-content">
  <div class="modal-body">
   <div class="row" id="mensajeoportmostrar" align="center" name="mensajeoportmostrar" style="display: none"><label><h1 class="control-label" id="exampleModalLabel">Oportunidad efectiva por validación del cogestor</h1></label></div> 
   <!--inicio radio una sola seleccion-->
   <div id="logrosdiv" name="logrosdiv" class="form-group col-md-12 form-group-sm has-error"><label class="control-label">Solo verificación del Cogestor</label><br>
   <?php if($idlog=="7")
   {
       echo $elogro7;
   }
   else if($idlog=="8")
   {
   echo $elogro8;
   }
   else if($idlog=="9")
   {
   echo $elogro9;
   }
   else if($idlog=="11")
   {
   echo $elogro11;
   }
   else if($idlog=="12")
   {
   echo $elogro12;
   }
   else if($idlog=="13")
   {
   echo $elogro13;
   }
   else if($idlog=="14")
   {
   echo $elogro14;
   }
   else if($idlog=="15")
   {
   echo $elogro15;
   }
   else if($idlog=="16")
   {
   echo $elogro16;
   }
   else if($idlog=="17")
   {
   echo $elogro17;
   }
   else if($idlog=="22")
   {
   echo $elogro22;
   }
   else if($idlog=="23")
   {
   echo $elogro23;
   }
   else if($idlog=="28")
   {
   echo $elogro28;
   }
   else if($idlog=="29")
   {
   echo $elogro29;
   }
   else if($idlog=="30")
   {
   echo $elogro30;
   }
   else if($idlog=="31")
   {
   echo $elogro31;
   }
   else if($idlog=="32")
   {
   echo $elogro32;
   }
   else if($idlog=="36")
   {
   echo $elogro36;
   }
   else if($idlog=="37")
   {
   echo $elogro37;
   }
   else if($idlog=="38")
   {
   echo $elogro38;
   }
   else if($idlog=="40")
   {
   echo $elogro40;
   }
   ?>    
<!--      <div class="radio"><label><input type="radio" name="logromov" id="logromov" onclick="colocaropcionlogro('l01','valorlogromov','logrosdiv');" value="1">Oferta acercada de fichero</label></div>-->
   <div class="radio"><label><input type="radio" name="logromov" id="logromov" onclick="colocaropcionlogro('l02','valorlogromov','logrosdiv');" value="2">Oportunidad no incluida en fichero</label></div>
   <div class="radio"><label><input type="radio" name="logromov" id="logromov" onclick="colocaropcionlogro('l03','valorlogromov','logrosdiv');" value="3">Propios medios del hogar</label></div>
   <input type="text" class="form-control" id="valorlogromov" name="valorlogromov" style="display: none" placeholder="Text input" value="">
   </div>
   <!--fin radio una sola seleccion-->  
   <div  id="nombreopoobsdiv" name="nombreopoobsdiv" class="form-group col-md-12 form-group-sm has-error"><label class="control-label">Observación</label>
   <textarea  class="form-control" id="nombreoportunidadobs" disabled="" onkeypress="return soloLetras(event)"  onchange="validarbolitasytextomodallog('nombreopoobsdiv','nombreoportunidadobs')" name="nombreoportunidadobs"   placeholder="Observación de la oportunidad" value=""></textarea>
   </div> 
   <div  id="nombreopodiv" name="nombreopodiv" style="display:none"><label class="control-label">Nombre oportunidad</label>
   <textarea  class="form-control" id="nombreoportunidad" onkeypress="return soloLetras(event)"  onchange="validarbolitasytextomodallog()" name="nombreoportunidad"   placeholder="Nombre de la oportunidad" value=""></textarea>
   </div>
   <div id="telcontactodiv" name="telcontactodiv" style="display:none"><label class="control-label">Telefono contacto al que ofrece la oportunidad</label>  
   <input type="text" class="form-control" id="telcontactocual" name="telcontactocual" maxlength="10" onKeyPress="return soloNumeros(event)" onchange="validarbolitasytextomodallog()" placeholder="Cual" value="">        
   </div>
   </div>
   <div class="modal-footer"><input type="text" class="form-control" id="idintegrantemodal" name="idintegrantemodal"  style="display: none" placeholder="" value="">        
   <button id="cerrar"type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
   <button id="guardar"type="button" disabled="" class="btn btn-primary">Guardar</button>
   </div>
   </div>
  </div>
</div>
<!-- modal verificacion cogestor fin-->
<!-- modal preguntas de validacion cogestor logro 10 edad menor a 15 inicio-->
<div class="modal fade" id="exampleModalpregvallog10a14" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" data-keyboard="false" data-backdrop="static">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
      <div class="row" id="mensajecalculopregvallog10" align="center" name="mensajecalculopregvallog10" style="display: none"><label><h1 class="control-label" id="exampleModalLabelpreval">Información guardada....calculo realizado del logro 10 para integrantes menores de 15 años</h1></label></div> 
      <!--inicio check seleccion pregunta 1 capitulo 9R-->
      <div class="row">
      <div id="c9p37div" name="c9p37div" class="form-group col-md-12 form-group-sm">
      <div id="c9p37o0div" class="has-error"><label class="control-label">1. Observe e indague ¿Sí el niño, niña o adolecente realiza alguna de las siguientes actividades? (Selección multiple)</label></div>
      <div id="c9p37o1div" class="has-error">
      <div class="checkbox"><label><input type="checkbox" name="c9p37o1" id="c9p37o1" onclick="cambiarsinoc9p37modal('SI','c9p37o1','c9p37o1div','c9p37div',12);" value="NO">Trabajo doméstico</label></div>
      </div>
      <div id="c9p37o2div" class="has-error">
      <div class="checkbox"><label><input type="checkbox" name="c9p37o2" id="c9p37o2" onclick="cambiarsinoc9p37modal('SI','c9p37o2','c9p37o2div','c9p37div',12);" value="NO">Trabajo en minas</label></div>
      </div>  
      <div id="c9p37o3div" class="has-error">
      <div class="checkbox"><label><input type="checkbox" name="c9p37o3" id="c9p37o3" onclick="cambiarsinoc9p37modal('SI','c9p37o3','c9p37o3div','c9p37div',12);" value="NO">Explotación sexual comercial</label></div>
      </div>  
      <div id="c9p37o4div" class="has-error">
      <div class="checkbox"><label><input type="checkbox" name="c9p37o4" id="c9p37o4" onclick="cambiarsinoc9p37modal('SI','c9p37o4','c9p37o4div','c9p37div',12);" value="NO">Reclutamiento para el conflicto armado</label></div>
      </div>  
      <div id="c9p37o5div" class="has-error">
      <div class="checkbox"><label><input type="checkbox" name="c9p37o5" id="c9p37o5" onclick="cambiarsinoc9p37modal('SI','c9p37o5','c9p37o5div','c9p37div',12);" value="NO">Producción y micro tráfico de estupefacientes</label></div>
      </div>
      <div id="c9p37o6div" class="has-error">
      <div class="checkbox"><label><input type="checkbox" name="c9p37o6" id="c9p37o6" onclick="cambiarsinoc9p37modal('SI','c9p37o6','c9p37o6div','c9p37div',12);" value="NO">Ventas ambulantes</label></div>
      </div>
      <div id="c9p37o7div" class="has-error">
      <div class="checkbox"><label><input type="checkbox" name="c9p37o7" id="c9p37o7" onclick="cambiarsinoc9p37modal('SI','c9p37o7','c9p37o7div','c9p37div',12);" value="NO">Reciclaje</label></div>
      </div>
      <div id="c9p37o8div" class="has-error">
      <div class="checkbox"><label><input type="checkbox" name="c9p37o8" id="c9p37o8" onclick="cambiarsinoc9p37modal('SI','c9p37o8','c9p37o8div','c9p37div',12);" value="NO">Trabajo en calle</label></div>
      </div>
      <div id="c9p37o9div" class="has-error">
      <div class="checkbox"><label><input type="checkbox" name="c9p37o9" id="c9p37o9" onclick="cambiarsinoc9p37modal('SI','c9p37o9','c9p37o9div','c9p37div',12);" value="NO">Mendicidad</label></div>
      </div>
      <div id="c9p37o10div" class="has-error">
      <div class="checkbox"><label><input type="checkbox" name="c9p37o10" id="c9p37o10" onclick="cambiarsinoc9p37modal('SI','c9p37o10','c9p37o10div','c9p37div',12);" value="NO">Otra, Cual?</label></div>
      </div>
      <div id="c9p37o11div" class="has-error">
      <div class="checkbox"><label><input type="checkbox" name="c9p37o11" id="c9p37o11" onclick="cambiarsinoc9p37modal('SI','c9p37o11','c9p37o11div','c9p37div',12);" value="NO">Ninguna</label></div>
      </div>
      <div class="row" id="c9p37cualmostrar" name="c9p37cualmostrar" style="display:none">
      <div  id="c9p37cualdiv" name="c9p37cualdiv" class="form-group col-md-12"><label class="control-label">Cual?</label>
      <input type="text" class="form-control text-uppercase" id="c9p37cual" onkeypress="return soloLetras(event)"  onchange="validarcampotexcuadrosc9p37('c9p37cualdiv','c9p37cual')" name="c9p37cual"   placeholder="Cual?" value="98">
      </div>
      </div>
      </div>
      </div> 
      <!--fin check seleccion pregunta 1 capitulo 9R-->  
      <!--inicio check seleccion pregunta 3 capitulo 9R-->
      <div class="row">
      <div id="c9p39div" name="c9p39div" class="form-group col-md-12 form-group-sm" style="display:none">
      <div id="c9p39o0div" class="has-error"><label class="control-label">3. Ayudas a tus padres, familiares a alguna otra persona en un negocio o cultivo en alguna de las siguientes actividades: (Selección Múltiple)</label></div>
      <div id="c9p39o1div" class="has-error"><div class="checkbox"><label>
      <input type="checkbox" name="c9p39o1" id="c9p39o1" onclick="cambiarsinoc9p39modal('SI','c9p39o1','c9p39o1div','c9p39div',9);" value="NO">Fabricar productos</label></div>
      </div>
      <div id="c9p39o2div" class="has-error">
      <div class="checkbox"><label><input type="checkbox" name="c9p39o2" id="c9p39o2" onclick="cambiarsinoc9p39modal('SI','c9p39o2','c9p39o2div','c9p39div',9);" value="NO">Ayudar a cocinar</label></div>
      </div>  
      <div id="c9p39o3div" class="has-error">
      <div class="checkbox"><label><input type="checkbox" name="c9p39o3" id="c9p39o3" onclick="cambiarsinoc9p39modal('SI','c9p39o3','c9p39o3div','c9p39div',9);" value="NO">Vender Productos o servicios</label></div>
      </div>  
      <div id="c9p39o4div" class="has-error">
      <div class="checkbox"><label><input type="checkbox" name="c9p39o4" id="c9p39o4" onclick="cambiarsinoc9p39modal('SI','c9p39o4','c9p39o4div','c9p39div',9);" value="NO">Llevar Domicilios o hacer mandados</label></div>
      </div>  
      <div id="c9p39o5div" class="has-error">
      <div class="checkbox"><label><input type="checkbox" name="c9p39o5" id="c9p39o5" onclick="cambiarsinoc9p39modal('SI','c9p39o5','c9p39o5div','c9p39div',9);" value="NO">Cultivar la tierra</label></div>
      </div>
      <div id="c9p39o6div" class="has-error">
      <div class="checkbox"><label><input type="checkbox" name="c9p39o6" id="c9p39o6" onclick="cambiarsinoc9p39modal('SI','c9p39o6','c9p39o6div','c9p39div',9);" value="NO">Recolectar cartones y/o botellas</label></div>
      </div>
      <div id="c9p39o7div" class="has-error">
      <div class="checkbox"><label><input type="checkbox" name="c9p39o7" id="c9p39o7" onclick="cambiarsinoc9p39modal('SI','c9p39o7','c9p39o7div','c9p39div',9);" value="NO">No ayudo a nadie en un negocio o cultivo</label></div>
      </div>
      <div id="c9p39o8div" class="has-error">
      <div class="checkbox"><label><input type="checkbox" name="c9p39o8" id="c9p39o8" onclick="cambiarsinoc9p39modal('SI','c9p39o8','c9p39o8div','c9p39div',9);" value="NO">Otras. Cuál?</label></div>
      </div>
      <div class="row" id="c9p39cualmostrar" name="c9p39cualmostrar" style="display:none">
      <div  id="c9p39cualdiv" name="c9p39cualdiv" class="form-group col-md-12"><label class="control-label">Cual?</label>
      <input type="text" class="form-control text-uppercase" id="c9p39cual" onkeypress="return soloLetras(event)"  onchange="validarcampotexcuadrosc9p39('c9p39cualdiv','c9p39cual')" name="c9p39cual"   placeholder="Cual?" value="98">
      </div>
      </div>
      </div>
      </div>
      <!--fin check seleccion pregunta 3 capitulo 9R-->
      <!--inicio radio una sola seleccion pregunta 4 capitulo 9R-->
      <div class="row">
      <div id="c9p40div" name="c9p40div" class="form-group col-md-12 form-group-sm has-error" style="display:none"><label class="control-label">4.¿Cuánto tiempo a la semana dedica(n) a realizar esta(s) actividad(es)? (Única elección)</label>
      <div class="radio"><label><input type="radio" name="c9p40" id="c9p40" onclick="colocaropcionc9p40('c9p40o1','valorc9p40','c9p40div');" value="c9p40o1">De 1 – 5 horas</label></div>
      <div class="radio"><label><input type="radio" name="c9p40" id="c9p40" onclick="colocaropcionc9p40('c9p40o2','valorc9p40','c9p40div');" value="c9p40o2">De 6 – 10 horas</label></div>
      <div class="radio"><label><input type="radio" name="c9p40" id="c9p40" onclick="colocaropcionc9p40('c9p40o3','valorc9p40','c9p40div');" value="c9p40o3">De 11 – 14 horas</label></div>
      <div class="radio"><label><input type="radio" name="c9p40" id="c9p40" onclick="colocaropcionc9p40('c9p40o4','valorc9p40','c9p40div');" value="c9p40o4">De 15 – 19 horas</label></div>
      <div class="radio"><label><input type="radio" name="c9p40" id="c9p40" onclick="colocaropcionc9p40('c9p40o5','valorc9p40','c9p40div');" value="c9p40o5">Más de 20 horas</label></div>
      <input type="text" class="form-control" id="valorc9p40" name="valorc9p40" style="display: none" placeholder="Text input" value="98">
      </div>
      </div> 
      <!--fin radio una sola seleccion pregunta 4 capitulo 9R-->
      </div>   
      <div class="modal-footer">
      <input type="text" class="form-control" id="idintegrantemodal" name="idintegrantemodal" style="display: none" placeholder="" value="">        
      <button id="cerrarpreval10a14" type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
      <button id="guardarpreval10a14" type="button" disabled=""class="btn btn-primary">Guardar</button>
      <button id="siguientec9p37" type="button" disabled="" class="btn btn-primary" onclick="divc9p37()" style="display: none">Siguiente</button>
      <button id="siguientec9p39" type="button" disabled="" class="btn btn-primary" onclick="divc9p39()" style="display: none">Siguiente</button>
      </div>  
    </div>
  </div>
</div>

<!-- modal preguntas de validacion cogestor logro 10 edad menor a 15 final-->
<!-- modal preguntas de validacion cogestor logro 10 edad mayor a 14 y menor a 17 inicio-->
<div class="modal fade" id="exampleModalpregvallog10a17" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" data-keyboard="false" data-backdrop="static">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
      <div class="row" id="mensajecalculopregvallog10m" align="center" name="mensajecalculopregvallog10m" style="display: none"><label><h1 class="control-label" id="exampleModalLabelpreval">Información guardada....calculo realizado del logro 10 para integrantes con edades entre 15 a 17 años</h1></label></div> 
      <!--inicio radio una sola seleccion pregunta 1 capitulo 9L-->
      <div class="row">
      <div id="c9p3div" name="c9p3div" class="form-group col-md-12 form-group-sm has-error"><label class="control-label">1. En que actividad ocupó la mayor parte del tiempo la semana pasada? (Unica Respuesta)</label>
      <div class="radio"><label><input type="radio" name="c9p3" id="c9p3" onclick="colocaropcionc9p3('c9p3o1','valorc9p3','c9p3div');" value="c9p3o1">Trabajando</label></div>
      <div class="radio"><label><input type="radio" name="c9p3" id="c9p3" onclick="colocaropcionc9p3('c9p3o2','valorc9p3','c9p3div');" value="c9p3o2">Buscando trabajo</label></div>
      <div class="radio"><label><input type="radio" name="c9p3" id="c9p3" onclick="colocaropcionc9p3('c9p3o3','valorc9p3','c9p3div');" value="c9p3o3">Estudiando</label></div>
      <div class="radio"><label><input type="radio" name="c9p3" id="c9p3" onclick="colocaropcionc9p3('c9p3o4','valorc9p3','c9p3div');" value="c9p3o4">Oficios del hogar</label></div>
      <div class="radio"><label><input type="radio" name="c9p3" id="c9p3" onclick="colocaropcionc9p3('c9p3o5','valorc9p3','c9p3div');" value="c9p3o5">Incapacitado permanente para trabajar</label></div>
      <div class="radio"><label><input type="radio" name="c9p3" id="c9p3" onclick="colocaropcionc9p3('c9p3o6','valorc9p3','c9p3div');" value="c9p3o6">Otra actividad</label></div>
      <div class="row" id="c9p3cualmostrar" name="c9p3cualmostrar" style="display: none">
      <div  id="c9p3cualdiv" name="c9p3cualdiv" class="form-group col-md-12">
      <label class="control-label">Cual?</label>
      <input type="text" class="form-control text-uppercase" id="c9p3cual" onkeypress="return soloLetras(event)"  onchange="validarcampotexcuadrosc9p3('c9p3cualdiv','c9p3cual','1')" name="c9p3cual"   placeholder="Cual?" value="98">
      </div>
      </div>
      <input type="text" class="form-control" id="valorc9p3" name="valorc9p3" style="display: none" placeholder="Text input" value="">
      </div>
      </div> 
      <!--fin radio una sola seleccion pregunta 1 capitulo 9L-->
      <!--inicio radio una sola seleccion pregunta 2 capitulo 9L-->
      <div class="row">
          <div id="c9p4div" name="c9p4div"class="form-group col-md-12 form-group-sm has-error" style="display: none"><label class="control-label">2. Además de lo anterior , ¿Realizó la semana pasada alguna actividad paga por una hora o más ó tuvo algún trabajo o negocio por el que recibió ingresos? (Unica Respuesta)</label>
      <div class="radio"><label><input type="radio" name="c9p4" id="c9p4" onclick="colocaropcionc9p4a('1','valorc9p4','c9p4div');" value="1">Si</label></div>
      <div class="radio"><label><input type="radio" name="c9p4" id="c9p4a" onclick="colocaropcionc9p4a('2','valorc9p4','c9p4div');" value="2">No</label></div> 
      <input type="text" class="form-control" id="valorc9p4" name="valorc9p4" style="display: none" placeholder="Text input" value="">
      </div>
      </div> 
      <!--fin radio una sola seleccion pregunta 2 capitulo 9L-->
      <!--inicio radio una sola seleccion pregunta 12 capitulo 9M-->
      <div class="row">
      <div id="c9p19div" name="c9p19div" class="form-group col-md-12 form-group-sm has-error" style="display: none"><label class="control-label">12. ¿Han gestionado el permiso para trabajar ante la oficina del Ministerio del Trabajo? (Única respuesta)</label>
      <div class="radio"><label><input type="radio" name="c9p19" id="c9p19" onclick="colocaropcionc9p4('1','valorc9p19','c9p19div');" value="1">Si</label></div>
      <div class="radio"><label><input type="radio" name="c9p19" id="c9p19a" onclick="colocaropcionc9p4('2','valorc9p19','c9p19div');" value="2" >No</label></div> 
      <input type="text" class="form-control" id="valorc9p19" name="valorc9p19" style="display: none" placeholder="Text input" value="">
      </div>
      </div> 
      <!--fin radio una sola seleccion  pregunta 12 capitulo 9M-->
      </div>           
      <div class="modal-footer">
      <input type="text" class="form-control" id="idintegrantemodal" name="idintegrantemodal" style="display: none" placeholder="" value="">        
      <button id="cerrarpreval10a17" type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
      <button id="guardarpreval10a17" type="button" class="btn btn-primary" disabled="">Guardar</button>
      </div>  
    </div>
  </div>
</div>
<!-- modal preguntas de validacion cogestor logro 10 edad mayor a 14 y menor a 18 final-->
<!-- modal preguntas de validacion cogestor logro 18 inicio-->
<div class="modal fade" id="exampleModalpregval18" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" data-keyboard="false" data-backdrop="static">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
      <div class="row" id="mensajecalculo18" align="center" name="mensajecalculo18" style="display: none"><label><h1 class="control-label" id="exampleModalLabelpreval18">Información guardada....calculo realizado del logro 18</h1></label></div> 
      <!--Check varias selecciones -->
      <div class="row">
      <div id="c5p5div" name="c5p5div" class="form-group col-md-12 form-group-sm">
      <div id="c5p5o0div" class="has-error"><label class="control-label">5.¿Qué métodos conoce  o de cuáles ha oído hablar ….. para evitar un embarazo? (Multiple respuesta)</label></div>
      <div id="c5p5o1div" class="has-error">
      <div class="checkbox"><label><input type="checkbox" name="c5p5o1" id="c5p5o1" onclick="cambiarsinoc5p5('SI','c5p5o1','c5p5o1div','c5p5div',13);" value="NO">Ligadura de trompas o cirugía (esterilización femenina)</label></div>
      </div>
      <div id="c5p5o2div" class="has-error">
      <div class="checkbox"><label><input type="checkbox" name="c5p5o2" id="c5p5o2" onclick="cambiarsinoc5p5('SI','c5p5o2','c5p5o2div','c5p5div',13);" value="NO">Píldora o pastilla</label></div>
      </div>
      <div id="c5p5o3div" class="has-error">
      <div class="checkbox"><label><input type="checkbox" name="c5p5o3" id="c5p5o3" onclick="cambiarsinoc5p5('SI','c5p5o3','c5p5o3div','c5p5div',13);" value="NO">DIU(Dispositivo Intrauterino)</label></div>
      </div>  
      <div id="c5p5o4div" class="has-error">
      <div class="checkbox"><label><input type="checkbox" name="c5p5o4" id="c5p5o4" onclick="cambiarsinoc5p5('SI','c5p5o4','c5p5o4div','c5p5div',13);" value="NO">Inyección (Anticonceptivos Inyectables)</label></div>
      </div>
      <div id="c5p5o5div" class="has-error">
      <div class="checkbox"><label><input type="checkbox" name="c5p5o5" id="c5p5o5" onclick="cambiarsinoc5p5('SI','c5p5o5','c5p5o5div','c5p5div',13);" value="NO">Implantes subdermicos (Norplant, Jadelle)</label></div>
      </div>
      <div id="c5p5o6div" class="has-error">
      <div class="checkbox"><label><input type="checkbox" name="c5p5o6" id="c5p5o6" onclick="cambiarsinoc5p5('SI','c5p5o6','c5p5o6div','c5p5div',13);" value="NO">Condón  Femenino</label></div>
      </div>
      <div id="c5p5o7div" class="has-error">
      <div class="checkbox"><label><input type="checkbox" name="c5p5o7" id="c5p5o7" onclick="cambiarsinoc5p5('SI','c5p5o7','c5p5o7div','c5p5div',13);" value="NO">Espuma, jalea,óvulos (métodos vaginales espermicidas)</label></div>
      </div>
      <!-- <div id="c5p5o8div" class="has-error">
      <div class="checkbox"><label><input type="checkbox" name="c5p5o8" id="c5p5o8" onclick="cambiarsinoc5p5('SI','c5p5o8','c5p5o8div','c5p5div',13);" value="NO">Métodos naturales (coito interrumpido"Eyacular fuera de la vagina"  MELA " Ausencia de la mestruaciòn en la lactancia, el ritmo"consiste en conocer què dìas tiene lugar la  ovulaciòn)</label></div> 
      </div>-->
      <div id="c5p5o9div" class="has-error">
      <div class="checkbox"><label><input type="checkbox" name="c5p5o9" id="c5p5o9" onclick="cambiarsinoc5p5('SI','c5p5o9','c5p5o9div','c5p5div',13);" value="NO">Anticoncepción de emergencia(Pastilla  que se ingiere dentro de  las 72 horas siguientes a la relaciòn Sexual)</label></div>
      </div>
      <div id="c5p5o10div" class="has-error">
      <div class="checkbox"><label><input type="checkbox" name="c5p5o10" id="c5p5o10" onclick="cambiarsinoc5p5('SI','c5p5o10','c5p5o10div','c5p5div',13);" value="NO">Vasectomía (esterilización masculina)</label></div>
      </div>
      <div id="c5p5o11div" class="has-error">
      <div class="checkbox"><label><input type="checkbox" name="c5p5o11" id="c5p5o11" onclick="cambiarsinoc5p5('SI','c5p5o11','c5p5o11div','c5p5div',13);" value="NO">Preservativo o condón</label></div>
      </div>
      <!--<div id="c5p5o12div" class="has-error">
      <div class="checkbox"><label><input type="checkbox" name="c5p5o12" id="c5p5o12" onclick="cambiarsinoc5p5('SI','c5p5o12','c5p5o12div','c5p5div',13);" value="NO">Otra  ¿Cuál?</label></div>
      </div>         
      <div class="row" id="c5p5cualmostrar" name="c5p5cualmostrar" style="display: none">
      <div  id="c5p5cualdiv" name="c5p5cualdiv" class="form-group col-md-12"><label class="control-label">Cual?</label>
      <input type="text" class="form-control text-uppercase" id="c5p5cual" onkeypress="return soloLetras(event)" onchange="validarcampotexcuadros('c5p5cualdiv','c5p5cual','10')" name="c5p5cual"   placeholder="Cual?" value="98">
      </div>
      </div>-->
      <div id="c5p5o13div" class="has-error">
      <div class="checkbox"><label><input type="checkbox" name="c5p5o13" id="c5p5o13" onclick="cambiarsinoc5p5('SI','c5p5o13','c5p5o13div','c5p5div',13);" value="NO">Ninguno</label></div>
      </div>
      </div>
      </div>    
      <!--Fin Chek varias selecciones-->
      <div class="modal-footer">
      <input type="text" class="form-control" id="idintegrantemodal" name="idintegrantemodal" style="display: none" placeholder="" value="">        
      <button id="cerrarpreval18"type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
      <button id="guardarpreval18"type="button" disabled="" class="btn btn-primary">Guardar</button>
      </div>  
    </div>
  </div>
</div>
</div>
<!-- modal preguntas de validacion cogestor logro 18 final-->
<!-- modal preguntas de validacion cogestor logro 24 inicio-->
<div class="modal fade" id="exampleModalpregval24" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" data-keyboard="false" data-backdrop="static">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
      <div class="row" id="mensajecalculo24" align="center" name="mensajecalculo24" style="display: none"><label><h1 class="control-label" id="exampleModalLabelpreval24">Información guardada....calculo realizado del logro 24</h1></label></div> 
      <!--inicio radio una sola seleccion-->
            <div class="row">
            <div id="c6p2div" name="c6p2div" class="form-group col-md-12 form-group-sm has-error"><label class="control-label">2. En los últimos 30 días, ¿alguna vez en su hogar se quedaron sin dinero para obtener una alimentación nutritiva: es decir que contenga carne, leche o productos lácteos, frutas, huevos, verduras, cereales, leguminosas, tubérculos y plátanos? (no se pudo comer de todos los alimentos).</label>
            <div class="radio"><label><input type="radio" name="c6p2" id="c6p2" onclick="colocaropcionc6('1','valorc6p2','c6p2div');" value="">Si</label></div>
            <div class="radio"><label><input type="radio" name="c6p2" id="c6p2" onclick="colocaropcionc6('2','valorc6p2','c6p2div');" value="">No</label></div>
            <input type="text" class="form-control" id="valorc6p2" name="valorc6p2" style="display:none" placeholder="Text input" value="">
            </div>
            </div> 
            <!--fin radio una sola seleccion--> 
            <!--inicio radio una sola seleccion-->
            <div class="row">
            <div id="c6p3div" name="c6p3div" class="form-group col-md-12 form-group-sm has-error"><label class="control-label">3. En los últimos 30 días, ¿alguna vez usted o algun adulto de su hogar no pudo variar la alimentaciòn por falta de dinero? (comer siempre lo mismo).</label>
            <div class="radio"><label><input type="radio" name="c6p3" id="c6p3" onclick="colocaropcionc6('1','valorc6p3','c6p3div');" value="1">Si</label></div>
            <div class="radio"><label><input type="radio" name="c6p3" id="c6p3" onclick="colocaropcionc6('2','valorc6p3','c6p3div');" value="2">No</label></div>
            <input type="text" class="form-control" id="valorc6p3" name="valorc6p3" style="display:none" placeholder="Text input" value="">
            </div>
            </div> 
            <!--fin radio una sola seleccion--> 
            <!--inicio radio una sola seleccion-->
            <div class="row">
            <div id="c6p5div" name="c6p5div" class="form-group col-md-12 form-group-sm has-error"><label class="control-label">5. En los últimos 30 días, ¿alguna vez en su hogar se quedaron sin alimentos por falta de dinero?</label>
            <div class="radio"><label><input type="radio" name="c6p5" id="c6p5" onclick="colocaropcionc6('1','valorc6p5','c6p5div');" value="1">Si</label></div>
            <div class="radio"><label><input type="radio" name="c6p5" id="c6p5" onclick="colocaropcionc6('2','valorc6p5','c6p5div');" value="2">No</label></div>
            <input type="text" class="form-control" id="valorc6p5" name="valorc6p5" style="display:none" placeholder="Text input" value="">
            </div>
            </div> 
            <!--fin radio una sola seleccion-->    
            <!--inicio radio una sola seleccion-->
            <div class="row">
            <div id="c6p9div" name="c6p9div" class="form-group col-md-12 form-group-sm has-error"><label class="control-label">9. En los últimos 30 días, ¿alguna vez usted o algún adulto de su hogar se acosto con hambre porque no alcanzo el dinero para los alimentos?</label>
            <div class="radio"><label><input type="radio" name="c6p9" id="c6p9" onclick="colocaropcionc6('1','valorc6p9','c6p9div');" value="1">Si</label></div>
            <div class="radio"><label><input type="radio" name="c6p9" id="c6p9" onclick="colocaropcionc6('2','valorc6p9','c6p9div');" value="2">No</label></div>
            <input type="text" class="form-control" id="valorc6p9" name="valorc6p9" style="display:none" placeholder="Text input" value="">
            </div>
            </div> 
            <!--fin radio una sola seleccion-->       
      <div class="modal-footer">
      <input type="text" class="form-control" id="idintegrantemodal" name="idintegrantemodal" style="display: none" placeholder="" value="">        
      <button id="cerrarpreval24"type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
      <button id="guardarpreval24"type="button" disabled="" class="btn btn-primary">Guardar</button>
      </div>  
    </div>
  </div>
</div>
</div>
<!-- modal preguntas de validacion cogestor logro 24 final-->
<!-- modal preguntas de validacion cogestor logro 33 inicio-->
<div class="modal fade" id="exampleModalpregval33" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" data-keyboard="false" data-backdrop="static">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
      <div class="row" id="mensajecalculo33" align="center" name="mensajecalculo33" style="display: none"><label><h1 class="control-label" id="exampleModalLabelpreval33">Información guardada....calculo realizado del logro 33</h1></label></div> 
      <!--Check varias selecciones capitulo 11 pregunta 1 -->
      <div class="row">
      <div id="c11p1div" name="c11p1div" class="form-group col-md-12 form-group-sm">
      <div id="c11p1o0div" class="has-error"><label class="control-label">1. En la familia, ¿ Cuáles son las estrategias que se implementan para corregir o reprender a los niños, niñas y adolescentes ? ( SELECCIÓN DE MULTIPLE RESPUESTA)</label></div>
      <div id="c11p1o1div" class="has-error">
      <div class="checkbox"><label><input type="checkbox" name="c11p1o1" id="c11p1o1" onclick="cambiarsinoc11p1('SI','c11p1o1','c11p1o1div','c11p1div',9);" value="NO">Prohibiéndoles aquello que más les gusta ( En éste ámbito no se incluye la prohibición de alimentos u otro acto que vulnere los derechos de los NNA)</label></div>
      </div>
      <div id="c11p1o2div" class="has-error">
      <div class="checkbox"><label><input type="checkbox" name="c11p1o2" id="c11p1o2" onclick="cambiarsinoc11p1('SI','c11p1o2','c11p1o2div','c11p1div',9);" value="NO">Conversando con ellos sobre la situación</label></div>
      </div>
      <div id="c11p1o3div" class="has-error">
      <div class="checkbox"><label><input type="checkbox" name="c11p1o3" id="c11p1o3" onclick="cambiarsinoc11p1('SI','c11p1o3','c11p1o3div','c11p1div',9);" value="NO">Haciéndoles saber lo que se espera de ellos</label></div>
      </div>  
      <div id="c11p1o4div" class="has-error">
      <div class="checkbox"><label><input type="checkbox" name="c11p1o4" id="c11p1o4" onclick="cambiarsinoc11p1('SI','c11p1o4','c11p1o4div','c11p1div',9);" value="NO">Tratándolos con indiferencia o dejandoles de hablar</label></div>
      </div>  
      <div id="c11p1o5div" class="has-error">
      <div class="checkbox"><label><input type="checkbox" name="c11p1o5" id="c11p1o5" onclick="cambiarsinoc11p1('SI','c11p1o5','c11p1o5div','c11p1div',9);" value="NO">Con gritos, amenazas o insultos</label></div>
      </div>  
      <div id="c11p1o6div" class="has-error">
      <div class="checkbox"><label><input type="checkbox" name="c11p1o6" id="c11p1o6" onclick="cambiarsinoc11p1('SI','c11p1o6','c11p1o6div','c11p1div',9);" value="NO">Por medio del castigo físico ( Éste entendido como el uso de la fuerza física con el fin de causar dolor o daño, imponer disciplina, corrección, control o modificar la conducta, tales como: bofetadas, golpes en la cabeza, tirones de pelo y orejas, pellizcos,entre otros)</label></div>
      </div>
      <div id="c11p1o7div" class="has-error">
      <div class="checkbox"><label><input type="checkbox" name="c11p1o7" id="c11p1o7" onclick="cambiarsinoc11p1('SI','c11p1o7','c11p1o7div','c11p1div',9);" value="NO">No los corrigen</label></div>
      </div>
      <div id="c11p1o8div" class="has-error">
      <div class="checkbox"><label><input type="checkbox" name="c11p1o8" id="c11p1o8" onclick="cambiarsinoc11p1('SI','c11p1o8','c11p1o8div','c11p1div',9);" value="NO">Otra ¿ Cuál?</label></div>
      </div>
      <div class="row" id="c11p1cualmostrar" name="c11p1cualmostrar" style="display: none">
      <div  id="c11p1cualdiv" name="c11p1cualdiv" class="form-group col-md-12"><label class="control-label">Cual?</label>
      <input type="text" class="form-control text-uppercase" id="c11p1cual" onkeypress="return soloLetras(event)"  onchange="validarcampotexcuadrosc11p1('c11p1cualdiv','c11p1cual','8')" name="c11p1cual"   placeholder="Cual?" value="98"></div>
      </div>
      </div>
      </div> 
      <!--Fin Chek varias selecciones capitulo 11 pregunta 1-->
      <!--Inicio Check varias selecciones capitulo 11 pregunta 2 -->
      <div class="row">
      <div id="c11p2div" name="c11p2div" class="form-group col-md-12 form-group-sm" style="display: none">
      <div id="c11p2o0div" class="has-error"><label class="control-label">2. En la familia ¿ Cuáles son las estrategias que se implementan para motivar a los niños, niñas y adolescentes?( SELECCIÓN DE MULTIPLE RESPUESTA)</label></div>
      <div id="c11p2o1div" class="has-error">
      <div class="checkbox"><label><input type="checkbox" name="c11p2o1" id="c11p2o1" onclick="cambiarsinoc11p2('SI','c11p2o1','c11p2o1div','c11p2div',8);" value="NO">Los vinculan a grupos culturales o recreativos</label></div>
      </div>
      <div id="c11p2o2div" class="has-error">
      <div class="checkbox"><label><input type="checkbox" name="c11p2o2" id="c11p2o2" onclick="cambiarsinoc11p2('SI','c11p2o2','c11p2o2div','c11p2div',8);" value="NO">Los felicitan</label></div>
      </div>
      <div id="c11p2o3div" class="has-error">
      <div class="checkbox"><label><input type="checkbox" name="c11p2o3" id="c11p2o3" onclick="cambiarsinoc11p2('SI','c11p2o3','c11p2o3div','c11p2div',8);" value="NO">Les resaltan sus cualidades</label></div>
      </div>  
      <div id="c11p2o4div" class="has-error">
      <div class="checkbox"><label><input type="checkbox" name="c11p2o4" id="c11p2o4" onclick="cambiarsinoc11p2('SI','c11p2o4','c11p2o4div','c11p2div',8);" value="NO">Les dan dinero</label></div>
      </div>  
      <div id="c11p2o5div" class="has-error">
      <div class="checkbox"><label><input type="checkbox" name="c11p2o5" id="c11p2o5" onclick="cambiarsinoc11p2('SI','c11p2o5','c11p2o5div','c11p2div',8);" value="NO">Les dan un regalo</label></div>
      </div>  
      <div id="c11p2o6div" class="has-error">
      <div class="checkbox"><label><input type="checkbox" name="c11p2o6" id="c11p2o6" onclick="cambiarsinoc11p2('SI','c11p2o6','c11p2o6div','c11p2div',8);" value="NO">Otra ¿ cuál?</label></div>
      </div>
      <div id="c11p2o7div" class="has-error">
      <div class="checkbox"><label><input type="checkbox" name="c11p2o7" id="c11p2o7" onclick="cambiarsinoc11p2('SI','c11p2o7','c11p2o7div','c11p2div',8);" value="NO">No se implementa ninguna estrategia</label></div>
      </div>
      <div class="row" id="c11p2cualmostrar" name="c11p2cualmostrar" style="display: none">
      <div  id="c11p2cualdiv" name="c11p2cualdiv" class="form-group col-md-12"><label class="control-label">Cual?</label>
      <input type="text" class="form-control text-uppercase" id="c11p2cual" onkeypress="return soloLetras(event)"  onchange="validarcampotexcuadrosc11p2('c11p2cualdiv','c11p2cual','8')" name="c11p2cual"   placeholder="Cual?" value="98">
      </div>
      </div>
      </div>
      </div> 
      <!--Fin Chek varias selecciones capitulo 11 pregunta 2-->
      <!--inicio Chek varias selecciones capitulo 11 pregunta 3-->
      <div class="row">
      <div id="c11p3div" name="c11p3div" class="form-group col-md-12 form-group-sm" style="display: none">
      <div id="c11p3o0div" class="has-error"><label class="control-label">3. En la familia, se implementan hábitos y rutinas  para la educación de los niños, niñas y adolescentes, relacionadas con( SELECCIÓN DE MULTIPLE RESPUESTA)</label></div>
      <div id="c11p3o1div" class="has-error">
      <div class="checkbox"><label><input type="checkbox" name="c11p3o1" id="c11p3o1" onclick="cambiarsinoc11p3('SI','c11p3o1','c11p3o1div','c11p3div',7);" value="NO">Actividades de recreación y juego</label></div>
      </div>
      <div id="c11p3o2div" class="has-error">
      <div class="checkbox"><label><input type="checkbox" name="c11p3o2" id="c11p3o2" onclick="cambiarsinoc11p3('SI','c11p3o2','c11p3o2div','c11p3div',7);" value="NO">Realización de actividades escolares</label></div>
      </div>
      <div id="c11p3o3div" class="has-error">
      <div class="checkbox"><label><input type="checkbox" name="c11p3o3" id="c11p3o3" onclick="cambiarsinoc11p3('SI','c11p3o3','c11p3o3div','c11p3div',7);" value="NO">Establecimiento de horarios (Levantarse, acostarse, comer, alimentarse)</label></div>
      </div>  
      <div id="c11p3o4div" class="has-error">
      <div class="checkbox"><label><input type="checkbox" name="c11p3o4" id="c11p3o4" onclick="cambiarsinoc11p3('SI','c11p3o4','c11p3o4div','c11p3div',7);" value="NO">Apoyo en organización y limpieza del hogar</label></div>
      </div>  
      <div id="c11p3o5div" class="has-error">
      <div class="checkbox"><label><input type="checkbox" name="c11p3o5" id="c11p3o5" onclick="cambiarsinoc11p3('SI','c11p3o5','c11p3o5div','c11p3div',7);" value="NO">Otra ¿Cuál?</label></div>
      </div>  
      <div id="c11p3o6div" class="has-error">
      <div class="checkbox"><label><input type="checkbox" name="c11p3o6" id="c11p3o6" onclick="cambiarsinoc11p3('SI','c11p3o6','c11p3o6div','c11p3div',7);" value="NO">No se implementa ningún hábito y rutina</label></div>
      </div>
      <div class="row" id="c11p3cualmostrar" name="c11p3cualmostrar" style="display: none">
      <div  id="c11p3cualdiv" name="c11p3cualdiv" class="form-group col-md-12 has-error"><label class="control-label">Cual?</label>
      <input type="text" class="form-control text-uppercase" id="c11p3cual" onkeypress="return soloLetras(event)"  onchange="validarcampotexcuadrosc11p3('c11p3cualdiv','c11p3cual','7')" name="c11p3cual"   placeholder="Cual?" value="98">
      </div>
      </div>
      </div>
      </div> 
      <!--Fin Chek varias selecciones capitulo 11 pregunta 3-->
      <div class="modal-footer">
      <input type="text" class="form-control" id="idintegrantemodal" name="idintegrantemodal" style="display: none" placeholder="" value="">        
      <button id="cerrarpreval33"type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
      <button id="guardarpreval33"type="button" disabled="" class="btn btn-primary" style="display: none">Guardar</button>
      <button id="siguientec11p1"type="button" disabled="" class="btn btn-primary" onclick="divc11p2()">Siguiente</button>
      <button id="siguientec11p2"type="button" disabled="" class="btn btn-primary" style="display: none" onclick="divc11p3()">Siguiente</button>
      </div>  
    </div>
  </div>
</div>
</div>
<!-- modal preguntas de validacion cogestor logro 33 final-->
<!-- modal preguntas de validacion cogestor logro 34 inicio-->
<div class="modal fade" id="exampleModalpregval34" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" data-keyboard="false" data-backdrop="static">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
      <div class="row" id="mensajecalculo34" align="center" name="mensajecalculo34" style="display: none"><label><h1 class="control-label" id="exampleModalLabelpreval34">Información guardada....calculo realizado del logro 34</h1></label></div> 
      <!--Check varias selecciones capitulo 11 pregunta 4 -->
      <div class="row">
      <div id="c11p4div" name="c11p4div" class="form-group col-md-12 form-group-sm">
      <div id="c11p4o0div" class="has-error"><label class="control-label">4. En la familia, se generan espacios para: ( SELECCIÓN DE MULTIPLE RESPUESTA)</label></div>
      <div id="c11p4o1div" class="has-error">
      <div class="checkbox"><label><input type="checkbox" name="c11p4o1" id="c11p4o1" onclick="cambiarsinoc11p4('SI','c11p4o1','c11p4o1div','c11p4div',7);"value="NO">Expresar emociones y/o pensamientos.</label></div>
      </div>
      <div id="c11p4o2div" class="has-error">
      <div class="checkbox"><label><input type="checkbox" name="c11p4o2" id="c11p4o2" onclick="cambiarsinoc11p4('SI','c11p4o2','c11p4o2div','c11p4div',7);"value="NO">Conversar entre los integrantes</label></div>
      </div>
      <div id="c11p4o3div" class=" has-error">
      <div class="checkbox"><label><input type="checkbox" name="c11p4o3" id="c11p4o3" onclick="cambiarsinoc11p4('SI','c11p4o3','c11p4o3div','c11p4div',7);"value="NO">Disfrutar de espacios recreativos, lúdicos</label></div>
      </div>  
      <div id="c11p4o4div" class="has-error">
      <div class="checkbox"><label><input type="checkbox" name="c11p4o4" id="c11p4o4" onclick="cambiarsinoc11p4('SI','c11p4o4','c11p4o4div','c11p4div',7);"value="NO">Buscar alternativas para resolver los conflictos</label></div>
      </div>  
      <div id="c11p4o5div" class="has-error">
      <div class="checkbox"><label><input type="checkbox" name="c11p4o5" id="c11p4o5" onclick="cambiarsinoc11p4('SI','c11p4o5','c11p4o5div','c11p4div',7);"value="NO">Otra ¿Cuál?</label></div>
      </div>  
      <div id="c11p4o6div" class="has-error">
      <div class="checkbox"><label><input type="checkbox" name="c11p4o6" id="c11p4o6" onclick="cambiarsinoc11p4('SI','c11p4o6','c11p4o6div','c11p4div',7);"value="NO">No se genera ningún espacio de dialogo</label></div>
      </div>
      <div class="row" id="c11p4cualmostrar" name="c11p4cualmostrar" style="display: none">
      <div  id="c11p4cualdiv" name="c11p4cualdiv" class="form-group col-md-12 has-error">
      <label class="control-label">Cual?</label>
      <input type="text" class="form-control text-uppercase" id="c11p4cual" onkeypress="return soloLetras(event)"  onchange="validarcampotexcuadrosc11p4('c11p4cualdiv','c11p4cual','7')" name="c11p4cual"   placeholder="Cual?" value="98">
      </div>
      </div>
      </div>
      </div> 
      <!--Fin Chek varias selecciones capitulo 11 pregunta 4-->
      <!--Inicio Check varias selecciones capitulo 11 pregunta 5 -->
      <div class="row">
      <div id="c11p5div" name="c11p5div" class="form-group col-md-12 form-group-sm" style="display: none">
      <div id="c11p5o0div" class="has-error"><label class="control-label">5. Entre los integrantes de la familia se demuestran el afecto a través de (SELECCIÓN DE MULTIPLE RESPUESTA)</label></div>
      <div id="c11p5o1div" class="has-error">
      <div class="checkbox"><label><input type="checkbox" name="c11p5o1" id="c11p5o1" onclick="cambiarsinoc11p5('SI','c11p5o1','c11p5o1div','c11p5div',8);" value="NO">Palabras cariñosas</label></div>
      </div>
      <div id="c11p5o2div" class="has-error">
      <div class="checkbox"><label><input type="checkbox" name="c11p5o2" id="c11p5o2" onclick="cambiarsinoc11p5('SI','c11p5o2','c11p5o2div','c11p5div',8);" value="NO">Detalles</label></div>
      </div>
      <div id="c11p5o3div" class="has-error">
      <div class="checkbox"><label><input type="checkbox" name="c11p5o3" id="c11p5o3" onclick="cambiarsinoc11p5('SI','c11p5o3','c11p5o3div','c11p5div',8);" value="NO">Apoyo</label></div>
      </div>  
      <div id="c11p5o4div" class="has-error">
      <div class="checkbox"><label><input type="checkbox" name="c11p5o4" id="c11p5o4" onclick="cambiarsinoc11p5('SI','c11p5o4','c11p5o4div','c11p5div',8);" value="NO">Abrazos</label></div>
      </div>  
      <div id="c11p5o5div" class="has-error">
      <div class="checkbox"><label><input type="checkbox" name="c11p5o5" id="c11p5o5" onclick="cambiarsinoc11p5('SI','c11p5o5','c11p5o5div','c11p5div',8);" value="NO">Besos</label></div>
      </div>  
      <div id="c11p5o6div" class="has-error">
      <div class="checkbox"><label><input type="checkbox" name="c11p5o6" id="c11p5o6" onclick="cambiarsinoc11p5('SI','c11p5o6','c11p5o6div','c11p5div',8);" value="NO">Otra. Cuál?</label></div>
      </div>
      <div id="c11p5o7div" class="has-error">
      <div class="checkbox"><label><input type="checkbox" name="c11p5o7" id="c11p5o7" onclick="cambiarsinoc11p5('SI','c11p5o7','c11p5o7div','c11p5div',8);" value="NO">No existen demostraciones de afecto</label></div>
      </div>    
      <div class="row" id="c11p5cualmostrar" name="c11p5cualmostrar" style="display: none">
      <div  id="c11p5cualdiv" name="c11p5cualdiv" class="form-group col-md-12 has-error">
      <label class="control-label">Cual?</label>
      <input type="text" class="form-control text-uppercase" id="c11p5cual" onkeypress="return soloLetras(event)"  onchange="validarcampotexcuadrosc11p5('c11p5cualdiv','c11p5cual','8')" name="c11p5cual"   placeholder="Cual?" value="98">
      </div>
      </div>
      </div>
      </div> 
      <!--Fin Chek varias selecciones capitulo 11 pregunta 5-->
      <!--inicio Chek varias selecciones capitulo 11 pregunta 7-->
      <div class="row">
      <div id="c11p7div" name="c11p7div" class="form-group col-md-12 form-group-sm" style="display: none">
      <div id="c11p7o0div" class="has-error"><label class="control-label">7. ¿ Cuándo en la familia se presenta alguna dificultad, la manera de resolverla es? (SELECCIÓN DE MULTIPLE RESPUESTA)</label></div>
      <div id="c11p7o1div" class="has-error">
      <div class="checkbox"><label><input type="checkbox" name="c11p7o1" id="c11p7o1" onclick="cambiarsinoc11p7('SI','c11p7o1','c11p7o1div','c11p7div',8);" value="NO">Por acuerdos entre los integrantes del hogar</label></div>
      </div>
      <div id="c11p7o2div" class="has-error">
      <div class="checkbox"><label><input type="checkbox" name="c11p7o2" id="c11p7o2" onclick="cambiarsinoc11p7('SI','c11p7o2','c11p7o2div','c11p7div',8);" value="NO">Buscando apoyo de otros familiares o amigos</label></div>
      </div>
      <div id="c11p7o3div" class="has-error">
      <div class="checkbox"><label><input type="checkbox" name="c11p7o3" id="c11p7o3" onclick="cambiarsinoc11p7('SI','c11p7o3','c11p7o3div','c11p7div',8);" value="NO">Buscando información y/o ayudas de otras instituciones o programas</label></div>
      </div>  
      <div id="c11p7o4div" class="has-error">
      <div class="checkbox"><label><input type="checkbox" name="c11p7o4" id="c11p7o4" onclick="cambiarsinoc11p7('SI','c11p7o4','c11p7o4div','c11p7div',8);" value="NO">Por medio del castigo físico</label></div>
      </div>  
      <div id="c11p7o5div" class="has-error">
      <div class="checkbox"><label><input type="checkbox" name="c11p7o5" id="c11p7o5" onclick="cambiarsinoc11p7('SI','c11p7o5','c11p7o5div','c11p7div',8);" value="NO">Usando amenazas</label></div>
      </div>  
      <div id="c11p7o6div" class="has-error">
      <div class="checkbox"><label><input type="checkbox" name="c11p7o6" id="c11p7o6" onclick="cambiarsinoc11p7('SI','c11p7o6','c11p7o6div','c11p7div',8);" value="NO">Otra. Cuál?</label></div>
      </div>
      <div id="c11p7o7div" class="has-error">
      <div class="checkbox"><label><input type="checkbox" name="c11p7o7" id="c11p7o7" onclick="cambiarsinoc11p7('SI','c11p7o7','c11p7o7div','c11p7div',8);" value="NO">No se implementa ninguna estrategia</label></div>
      </div>    
      <div class="row" id="c11p7cualmostrar" name="c11p7cualmostrar" style="display: none">
      <div  id="c11p7cualdiv" name="c11p7cualdiv" class="form-group col-md-12 has-error">
      <label class="control-label">Cual?</label>
      <input type="text" class="form-control text-uppercase" id="c11p7cual" onkeypress="return soloLetras(event)"  onchange="validarcampotexcuadrosc11p7('c11p7cualdiv','c11p7cual','8')" name="c11p7cual"   placeholder="Cual?" value="98">
      </div>
      </div>
      </div>
      </div> 
      <!--Fin Chek varias selecciones capitulo 11 pregunta 7-->
      <div class="modal-footer">
      <input type="text" class="form-control" id="idintegrantemodal" name="idintegrantemodal" style="display: none" placeholder="" value="">        
      <button id="cerrarpreval34"type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
      <button id="guardarpreval34"type="button" disabled="" class="btn btn-primary" style="display: none">Guardar</button>
      <button id="siguientec11p4"type="button" disabled="" class="btn btn-primary" onclick="divc11p4()">Siguiente</button>
      <button id="siguientec11p5"type="button" disabled="" class="btn btn-primary" style="display: none" onclick="divc11p5()">Siguiente</button>
      </div>  
    </div>
  </div>
</div>
</div>
<!-- modal preguntas de validacion cogestor logro 34 final-->
<!-- modal preguntas de validacion cogestor logro 39 inicio-->
<div class="modal fade" id="exampleModalpregval39" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" data-keyboard="false" data-backdrop="static">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
      <div class="row" id="mensajecalculo39" align="center" name="mensajecalculo39" style="display: none"><label><h1 class="control-label" id="exampleModalLabelpreval39">Información guardada....calculo realizado 39</h1></label></div> 
      <!--Check varias selecciones capitulo 10 pregunta 5 -->
      <div class="row">
      <div id="c10p5div" name="c10p5div" class="form-group col-md-12 form-group-sm">
      <div id="c10p5o0div" class="has-error"><label class="control-label">5. ¿Ante qué autoridades acudió ..… para resolver esos problemas o conflictos? (SELECCIÓN MULTIPLE)</label></div>
      <div id="c10p5o1div" class="has-error">
      <div class="checkbox"><label><input type="checkbox" name="c10p5o1" id="c10p5o1" onclick="cambiarsinoc10p5('SI','c10p5o1','c10p5o1div','c10p5div',23);" value="NO">Casa de justicia. Qué institución</label></div>
      </div>
      <div class="row" id="c10p5institucion1mostrar" name="c10p5institucion1mostrar" style="display: none">
      <div  id="c10p5institucion1div" name="c10p5institucion1div" class="form-group col-md-12 has-error">
      <label class="control-label">Cual?</label>
      <input type="text" class="form-control text-uppercase" id="institucion1" onkeypress="return soloLetras(event)" onchange="validarcampotexcuadrosc10p5('c10p5institucion1div','institucion1','10')" name="institucion1" placeholder="Cual?" value="98">
      </div>
      </div>
      <div id="c10p5o2div" class="has-error">
      <div class="checkbox"><label><input type="checkbox" name="c10p5o2" id="c10p5o2" onclick="cambiarsinoc10p5('SI','c10p5o2','c10p5o2div','c10p5div',23);" value="NO">Centro de convivencia ciudadana. Qué institución</label></div>
      </div>
      <div class="row" id="c10p5institucion2mostrar" name="c10p5institucion2mostrar" style="display: none">
      <div  id="c10p5institucion2div" name="c10p5institucion2div" class="form-group col-md-12 has-error">
      <label class="control-label">Cual?</label>
      <input type="text" class="form-control text-uppercase" id="institucion2" onkeypress="return soloLetras(event)" onchange="validarcampotexcuadrosc10p5('c10p5institucion2div','institucion2','10')" name="institucion2" placeholder="Cual?" value="98">
      </div>
      </div>
      <div id="c10p5o3div" class="has-error">
      <div class="checkbox"><label><input type="checkbox" name="c10p5o3" id="c10p5o3" onclick="cambiarsinoc10p5('SI','c10p5o3','c10p5o3div','c10p5div',23);" value="NO">Centro de conciliación</label></div>
      </div>  
      <div id="c10p5o4div" class="has-error">
      <div class="checkbox"><label><input type="checkbox" name="c10p5o4" id="c10p5o4" onclick="cambiarsinoc10p5('SI','c10p5o4','c10p5o4div','c10p5div',23);" value="NO">Fiscalía General de la Nación</label></div>
      </div>
      <div id="c10p5o5div" class="has-error">
      <div class="checkbox"><label><input type="checkbox" name="c10p5o5" id="c10p5o5" onclick="cambiarsinoc10p5('SI','c10p5o5','c10p5o5div','c10p5div',23);" value="NO">Despacho judicial (juzgado)</label></div>
      </div>
      <div id="c10p5o6div" class="has-error">
      <div class="checkbox"><label><input type="checkbox" name="c10p5o6" id="c10p5o6" onclick="cambiarsinoc10p5('SI','c10p5o6','c10p5o6div','c10p5div',23);" value="NO">Comisaría de familia</label></div>
      </div>
      <div id="c10p5o7div" class="has-error">
      <div class="checkbox"><label><input type="checkbox" name="c10p5o7" id="c10p5o7" onclick="cambiarsinoc10p5('SI','c10p5o7','c10p5o7div','c10p5div',23);" value="NO">Inspección de policía</label></div>
      </div>
      <div id="c10p5o8div" class="has-error">
      <div class="checkbox"><label><input type="checkbox" name="c10p5o8" id="c10p5o8" onclick="cambiarsinoc10p5('SI','c10p5o8','c10p5o8div','c10p5div',23);" value="NO">Superintendencia (de servicios, industria, solidaria, salud, etc.)</label></div>
      </div>
      <div id="c10p5o9div" class="has-error">
      <div class="checkbox"><label><input type="checkbox" name="c10p5o9" id="c10p5o9" onclick="cambiarsinoc10p5('SI','c10p5o9','c10p5o9div','c10p5div',23);" value="NO">Base militar</label></div>
      </div>
      <!--<div id="c10p5o10div" class="has-error">
      <div class="checkbox"><label><input type="checkbox" name="c10p5o10" id="c10p5o10" onclick="cambiarsinoc10p5('SI','c10p5o10','c10p5o10div','c10p5div',23);" value="NO">Grupo armado al margen de la ley</label></div>
      </div>-->
      <div id="c10p5o11div" class="has-error">
      <div class="checkbox"><label><input type="checkbox" name="c10p5o11" id="c10p5o11" onclick="cambiarsinoc10p5('SI','c10p5o11','c10p5o11div','c10p5div',23);" value="NO">Jurisdicción especial indígena</label></div>
      </div>         
      <div id="c10p5o12div" class="has-error">
      <div class="checkbox"><label><input type="checkbox" name="c10p5o12" id="c10p5o12" onclick="cambiarsinoc10p5('SI','c10p5o12','c10p5o12div','c10p5div',23);" value="NO">Jurisdicción de paz (juez de paz)</label></div>
      </div>
      <div id="c10p5o13div" class="has-error">
      <div class="checkbox"><label><input type="checkbox" name="c10p5o13" id="c10p5o13" onclick="cambiarsinoc10p5('SI','c10p5o13','c10p5o13div','c10p5div',23);" value="NO">ICBF</label></div>
      </div>
      <!--<div id="c10p5o14div" class="has-error">
      <div class="checkbox"><label><input type="checkbox" name="c10p5o14" id="c10p5o14" onclick="cambiarsinoc10p5('SI','c10p5o14','c10p5o14div','c10p5div',23);" value="NO">Justicia negritudes</label></div>
      </div>-->
      <!--<div id="c10p5o15div" class="has-error">
      <div class="checkbox"><label><input type="checkbox" name="c10p5o15" id="c10p5o15" onclick="cambiarsinoc10p5('SI','c10p5o15','c10p5o15div','c10p5div',23);" value="NO">Organización comunitaria (JAC, JAL)</label></div>
      </div>-->
      <div id="c10p5o16div" class="has-error">
      <div class="checkbox"><label><input type="checkbox" name="c10p5o16" id="c10p5o16" onclick="cambiarsinoc10p5('SI','c10p5o16','c10p5o16div','c10p5div',23);" value="NO">Defensoría del Pueblo</label></div>
      </div>
      <div id="c10p5o17div" class="has-error">
      <div class="checkbox"><label><input type="checkbox" name="c10p5o17" id="c10p5o17" onclick="cambiarsinoc10p5('SI','c10p5o17','c10p5o17div','c10p5div',23);" value="NO">Personería Municipal</label></div>
      </div>
      <div id="c10p5o18div" class="has-error">
      <div class="checkbox"><label><input type="checkbox" name="c10p5o18" id="c10p5o18" onclick="cambiarsinoc10p5('SI','c10p5o18','c10p5o18div','c10p5div',23);" value="NO">Conciliación en equidad</label></div>
      </div>
      <div id="c10p5o19div" class="has-error">
      <div class="checkbox"><label><input type="checkbox" name="c10p5o19" id="c10p5o19" onclick="cambiarsinoc10p5('SI','c10p5o19','c10p5o19div','c10p5div',23);" value="NO">Notaría</label></div>
      </div>
      <div id="c10p5o20div" class="has-error">
      <div class="checkbox"><label><input type="checkbox" name="c10p5o20" id="c10p5o20" onclick="cambiarsinoc10p5('SI','c10p5o20','c10p5o20div','c10p5div',23);" value="NO">Un abogado</label></div>
      </div>
      <!--<div id="c10p5o21div" class="has-error">
      <div class="checkbox"><label><input type="checkbox" name="c10p5o21" id="c10p5o21" onclick="cambiarsinoc10p5('SI','c10p5o21','c10p5o21div','c10p5div',23);" value="NO">Un particular</label></div>
      </div>-->
      <div id="c10p5o22div" class="has-error">
      <div class="checkbox"><label><input type="checkbox" name="c10p5o22" id="c10p5o22" onclick="cambiarsinoc10p5('SI','c10p5o22','c10p5o22div','c10p5div',23);" value="NO">Otro. Cuál</label></div>
      </div>
      <div class="row" id="c10p5cualmostrar" name="c10p5cualmostrar" style="display: none">
      <div  id="c10p5cualdiv" name="c10p5cualdiv" class="form-group col-md-12 has-error">
      <label class="control-label">Cual?</label>
      <input type="text" class="form-control text-uppercase" id="c10p5cual" onkeypress="return soloLetras(event)"  onchange="validarcampotexcuadrosc10p5('c10p5cualdiv','c10p5cual','10')" name="c10p5cual"   placeholder="Cual?" value="98">
      </div>
      </div>
      <!--<div id="c10p5o23div" class="has-error">
      <div class="checkbox"><label><input type="checkbox" name="c10p5o23" id="c10p5o23" onclick="cambiarsinoc10p5('SI','c10p5o23','c10p5o23div','c10p5div',23);" value="NO">No ha solicitado ayuda</label></div>
      </div>-->
      </div>
      </div>    
      <!--Check varias selecciones capitulo 10 pregunta 5 fin-->
      <div class="modal-footer">
      <input type="text" class="form-control" id="idintegrantemodal" name="idintegrantemodal" style="display: none" placeholder="" value="">        
      <button id="cerrarpreval39"type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
      <button id="guardarpreval39"type="button" disabled="" class="btn btn-primary" >Guardar</button>
      </div>  
    </div>
  </div>
</div>
</div>
<!-- modal preguntas de validacion cogestor logro 39 final-->
<!-- modal movimiento de logros por oportunidades inicio-->
<div class="modal fade bs-example-modal-lg" id="exampleModallogroxoport" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" data-keyboard="false" data-backdrop="static">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-body">
      <div class="row" id="mensajecalculologroxoport" align="center" name="mensajecalculologroxoport" style="display: none"><label><h1 class="control-label" id="exampleModallogroxoport">Información guardada....calculo realizado de los logros por oportunidades</h1></label></div> 
      <div class="panel-heading"  id="modallogroxoport"><h3>Oportunidades que aplican al logro</h3></div>
      <div class="panel-body"></div>
      <table class="table table-bordered" id="modallogroxoporttabla">
        <thead>
            <tr>
                    <th>nombre_oportunidad</th>
                    <th>Descripción</th>
                    <th>estado</th>
                    <th>Guardar</th>
            </tr>
        </thead>
        <tbody id='tablalogxopor'>
        <?php // echo($tablalogxopor); ?>
         <?php // echo ($valorenunciado);    ?>   
        </tbody>
      </table>
      <div class="modal-footer">
      <input type="text" class="form-control" id="idintegrantemodaloport" style="display: none" name="idintegrantemodaloport" placeholder="" value="">        
      <button id="cerrarlogroxoport"type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
      </div>  
    </div>
  </div>
</div>
</div>
<!-- modal movimiento de logros por oportunidades fin-->
<!-- modal informacion oportunidades inicio-->
<div class="modal fade bs-example-modal-lg" id="exampleModallogroxoportinformcion" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" data-keyboard="false" data-backdrop="static">
<div class="modal-dialog modal-lg" role="document">
<div class="modal-content">
<div class="modal-body">
<div class="panel-heading"  id="modallogroxoportinfo"><h3>Descripción de la oportunidad</h3></div>
<div class="panel-body"></div>
 <div>
 <label> ID OPORTUNIDAD</label>
 <p><object declare value="" id="idoport" name="idoport" width="400" height="400"></object></p>
 </div><br> 
 <div>
 <label> NOMBRE OPORTUNIDAD</label>
 <p><p><object declare value="" id="nombre_oportunidad" name="nombre_oportunidad" width="400" height="400"></object></p>
 </div><br>
 <div>
 <label>DESCRIPCIÓN OPORTUNIDAD</label>
 <p><object declare value="" id="descripcion_oport" name="descripcion_oport" width="400" height="400"></object></p>
 </div><br> 
 <div>
 <label>REQUISITOS OPORTUNIDAD</label>
 <p><object declare value="" id="requisito_oportunidad" name="requisito_oportunidad" width="400" height="400"></object></p>
 </div><br>
 <div>
 <label>RUTA DE ACCESO OPORTUNIDAD</label>
 <p><object declare value="" id="ruta_acceso" name="ruta_acceso" width="400" height="400"></object></p>
 </div><br> 
 <div>
 <label>FECHA DE INICIO</label>
 <p><object declare value="" id="fechainicio_oportunidad" name="fechainicio_oportunidad" width="400" height="400"></object></p>
 </div><br>
 <div>
 <label>LIMITE ACERCAMIENTO</label>
 <p><object declare value="" id="fechalimite_acercamientoop" name="fechalimite_acercamientoop" width="400" height="400"></object></p>
 </div><br>
 <div>
 <label>LIMITE EFECTIVIDAD</label>
 <p><object declare value="" id="fechalimite_efectividadop" name="fechalimite_efectividadop" width="400" height="400"></object></p>
 </div><br>
 <div class="modal-footer">
 <button id="cerrarlogroxoportinfo"type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
 </div>  
 </div>
 </div>
</div>
</div>
<!-- modal informacion oportunidades fin-->
<!-- modal movimiento de logros por oportunidades inicio si o no-->
<div class="modal fade" id="exampleModallogroxoportsino" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" data-keyboard="false" data-backdrop="static">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
        
    <div class="modal-body" style="text-align:center" id="mensajeoportmejcond" name="mensajeoportmejcond" style="display: none"><h3>¿Esta oportunidad le representó para usted o su familia una mejora en las condiciones de vida?</h3></div> 
    <div class="modal-body" style="text-align:center" id="mensajeoportmejcondno" name="mensajeoportmejcondno" style="display: none"><h3>¿Cuál fue la razón por la que no pudo acceder de manera efectiva a esta oportunidad?</h3></div> 
      <div class="modal-body" style="text-align:center"> <!-- <h3>¿Desea guardar la información de la oportunidad?</h3> -->
      <div class="row" id="mensajecalculo24" align="center" name="mensajecalculo24" style="display: none"><label><h1 class="control-label" id="exampleModalLabelpreval24">Información guardada....calculo realizado del logro 24</h1></label></div> 
      <div class="row">

      <div class="col-sm-12">
      <select class="form-control input-sm" id="idefectiva" onchange="otraopormejora($('#idoportunidad').val(),$('#version').val(),this.value)"></select>
      </div> 
      <br><br>
      <div class="col-sm-12" id="divmejoracondicionesno" style="display: none" align="left">¿Cuál?
      <textarea class="form-control" id="mejoracondicionesno" name="mejoracondicionesno" style="display:none" value=""></textarea> 
      </div>
      </div> 
      <div class="modal-footer">
      <input type="text" class="form-control" id="idintegrantemodaloport" name="idintegrantemodaloport" style="display: none" placeholder="" value="">     
      <input type="text" class="form-control" id="version" name="version" style="display: none" placeholder="" value="">        
      <input type="text" class="form-control" id="idoportunidad" name="idoportunidad" style="display: none" placeholder="" value="">        
      <input type="text" class="form-control" id="valoropo" name="valoropo" style="display: none" placeholder="" value="">        
      <center><button id="guardarlogroxoport" type="button" class="btn btn-success">Guardar la opción selecciona</button>
      <button id="cerrarlogroxoportsino"type="button" class="btn btn-danger" data-dismiss="modal">Cancelar la opción seleccionada</button></center>
      </div>  
    </div>
  </div>
</div>
</div>
<!-- modal movimiento de logros por oportunidades fin si o no-->
<!-- modal para elegir movimiento por oportunidad o cogestor inicio-->
<div class="modal fade" id="Modalseleccionopcion" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" data-keyboard="false" data-backdrop="static">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body"><h3>Desea mover el logro por:</h3>
      <div class="">
      <input type="text" class="form-control" id="idlogromodaloporval" name="idlogromodaloporval" style="display: none" placeholder="" value="">        
      <input type="text" class="form-control" id="foliomodaloporval" name="foliomodaloporval" style="display: none" placeholder="" value="">            
      <input type="text" class="form-control" id="idintegrantemodaloporval" name="idintegrantemodaloporval" style="display: none" placeholder="" value="">        
      <button id="iroportunidades"type="button" onclick="exampleModallogroxoportunidad($('#idlogromodaloporval').val(),$('#foliomodaloporval').val(),$('#idintegrantemodaloporval').val());" class="btn btn-success">Oportunidades</button>
      <button id="irvalidarcogest"type="button" onclick="modal($('#idintegrantemodaloporval').val());" class="btn btn-success">Validación Cogestor</button>
      <button id="irvalidarcogestd"type="button" onclick="modalescogeropcionoportdifaz($('#idintegrantemodaloporval').val(),$('#foliomodaloporval').val(),$('#idintegrantemodaloporval').val());" class="btn btn-success">Dificultad de Alcanzarlo</button>
      <button id="cerraroporvali"type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
      </div>  
    </div>
  </div>
</div>
</div>
<!-- modal para elegir movimiento por oportunidad o cogestor final-->


<!-- modal para elegir movimiento por oportunidad o cogestor inicio-->
<div class="modal fade" id="Modalseleccionopcionoporvali3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" data-keyboard="false" data-backdrop="static">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body"><h3>Desea mover el logro por:</h3>
      <div class="">
      <input type="text" class="form-control" id="idlogromodaloporval" name="idlogromodaloporval" style="display: none" placeholder="" value="">        
      <input type="text" class="form-control" id="foliomodaloporval" name="foliomodaloporval" style="display: none" placeholder="" value="">            
      <input type="text" class="form-control" id="idintegrantemodaloporval" name="idintegrantemodaloporval" style="display: none" placeholder="" value="">        
      <button id="iroportunidades"type="button" onclick="exampleModallogroxoportunidad($('#idlogromodaloporval').val(),$('#foliomodaloporval').val(),$('#idintegrantemodaloporval').val());" class="btn btn-success">Oportunidades</button>
      <button id="irvalidarcogest"type="button" onclick="modal($('#idintegrantemodaloporval').val());" class="btn btn-success">Validación Cogestor</button>
      <button id="irvalidarcogestd"type="button" onclick="modalescogeropcionoportdifcfaz($('#idintegrantemodaloporval').val(),$('#foliomodaloporval').val(),$('#idintegrantemodaloporval').val());" class="btn btn-success">Dificultad de Alcanzarlo</button>
      <button id="cerraroporvali"type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
      </div>  
    </div>
  </div>
</div>
</div>
<!-- modal para elegir movimiento por oportunidad o cogestor final-->


<!-- modal para elegir movimiento por oportunidad o cogestor inicio-->
<div class="modal fade" id="Modalseleccionopcionoporvali1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" data-keyboard="false" data-backdrop="static">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body"><h3>Desea mover el logro por:</h3>
      <div class="">
      <input type="text" class="form-control" id="idlogromodaloporval" name="idlogromodaloporval" style="display: none" placeholder="" value="">        
      <input type="text" class="form-control" id="foliomodaloporval" name="foliomodaloporval" style="display: none" placeholder="" value="">            
      <input type="text" class="form-control" id="idintegrantemodaloporval" name="idintegrantemodaloporval" style="display: none" placeholder="" value="">        
      <button id="iroportunidades"type="button" onclick="exampleModallogroxoportunidad($('#idlogromodaloporval').val(),$('#foliomodaloporval').val(),$('#idintegrantemodaloporval').val());" class="btn btn-success">Oportunidades</button>
      <button id="irvalidarcogest"type="button" onclick="modal($('#idintegrantemodaloporval').val());" class="btn btn-success">Validación Cogestor</button>
      <button id="irvalidarcogestd"type="button" onclick="modalescogeropcionoportdife($('#idintegrantemodaloporval').val(),$('#foliomodaloporval').val(),$('#idintegrantemodaloporval').val());" class="btn btn-success">Dificultad de Alcanzarlo</button>
      <button id="cerraroporvali1"type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
      </div>  
    </div>
  </div>
</div>
</div>
<!-- modal para elegir movimiento por oportunidad o cogestor final-->






<!-- modal para elegir movimiento por oportunidad o cogestor cafe azul dificultad inicio-->
<div class="modal fade" id="Modalseleccionopcioncfaz" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" data-keyboard="false" data-backdrop="static">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body"><h3>Desea mover el logro por:</h3>
      <div class="modal-footer">
      <input type="text" class="form-control" id="idlogromodaloporval" name="idlogromodaloporval" style="display: none" placeholder="" value="">        
      <input type="text" class="form-control" id="foliomodaloporval" name="foliomodaloporval" style="display: none" placeholder="" value="">            
      <input type="text" class="form-control" id="idintegrantemodaloporval" name="idintegrantemodaloporval" style="display: none" placeholder="" value="">        
      <button id="iroportunidades"type="button" onclick="exampleModallogroxoportunidad($('#idlogromodaloporval').val(),$('#foliomodaloporval').val(),$('#idintegrantemodaloporval').val());" class="btn btn-success">Oportunidades</button>
      <button id="irvalidarcogest"type="button" onclick="modalescogeropcionoportdifcfaz($('#idlogromodaloporval').val(),$('#foliomodaloporval').val(),$('#idintegrantemodaloporval').val());" class="btn btn-success">Dificultad para alcanzar el logro</button>
      <button id="cerrarcafeazul"type="button" class="btn btn-default" data-dismiss="modal">Cancelar y Cerrar </button>
      </div>  
    </div>
  </div>
</div>
</div>
<!-- modal para elegir movimiento por oportunidad o cogestor cafe azul dificultad final-->



<!-- modal para elegir movimiento por oportunidad o cogestor dificultad cafe inicio-->
<div class="modal fade" id="Modalseleccionopcioncfe" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" data-keyboard="false" data-backdrop="static">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body"><h3>Desea mover el logro por:</h3>
      <div class="modal-footer">
      <input type="text" class="form-control" id="idlogromodaloporval" name="idlogromodaloporval" style="display: none" placeholder="" value="">        
      <input type="text" class="form-control" id="foliomodaloporval" name="foliomodaloporval" style="display: none" placeholder="" value="">            
      <input type="text" class="form-control" id="idintegrantemodaloporval" name="idintegrantemodaloporval" style="display: none" placeholder="" value="">        
      <button id="iroportunidades"type="button" onclick="exampleModallogroxoportunidad($('#idlogromodaloporval').val(),$('#foliomodaloporval').val(),$('#idintegrantemodaloporval').val());" class="btn btn-success">Oportunidades</button>
      <button id="irvalidarcogest"type="button" onclick="modalescogeropcionoportdife($('#idlogromodaloporval').val(),$('#foliomodaloporval').val(),$('#idintegrantemodaloporval').val());" class="btn btn-success">Dificultad para alcanzar el logro</button>
      <button id="cerrarcafe"type="button" class="btn btn-default" data-dismiss="modal">Cancelar y Cerrar </button>
      </div>  
    </div>
  </div>
</div>
</div>
<!-- modal para elegir movimiento por oportunidad o cogestor dificultad cafe final-->


<!-- modal para elegir movimiento por oportunidad o cogestor azul dificultad inicio-->
<div class="modal fade" id="Modalseleccionopcionaz" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" data-keyboard="false" data-backdrop="static">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body"><h3>Desea mover el logro por:</h3>
      <div class="modal-footer">
      <input type="text" class="form-control" id="idlogromodaloporval" name="idlogromodaloporval" style="display: none" placeholder="" value="">        
      <input type="text" class="form-control" id="foliomodaloporval" name="foliomodaloporval" style="display: none" placeholder="" value="">            
      <input type="text" class="form-control" id="idintegrantemodaloporval" name="idintegrantemodaloporval" style="display: none" placeholder="" value="">        
      <button id="iroportunidades"type="button" onclick="exampleModallogroxoportunidad($('#idlogromodaloporval').val(),$('#foliomodaloporval').val(),$('#idintegrantemodaloporval').val());" class="btn btn-success">Oportunidades</button>
      <button id="irvalidarcogest"type="button" onclick="modalescogeropcionoportdifaz($('#idlogromodaloporval').val(),$('#foliomodaloporval').val(),$('#idintegrantemodaloporval').val());" class="btn btn-success">Dificultad para alcanzar el logro</button>
      <button id="cerrarazul"type="button" class="btn btn-default" data-dismiss="modal">Cancelar y Cerrar </button>
      </div>  
    </div>
  </div>
</div>
</div>
<!-- modal para elegir movimiento por oportunidad o cogestor azul dificultad final-->













<!-- modal para elegir movimiento por oportunidad o cogestor logro 10 inicio-->
<div class="modal fade" id="Modalseleccionopcionoporpreval" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" data-keyboard="false" data-backdrop="static">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body"><h3>Desea mover el logro por:</h3>
      <div class="">
      <input type="text" class="form-control" id="idlogrooporval" name="idlogrooporval" style="display: none"  placeholder="" value="">        
      <input type="text" class="form-control" id="foliooporval" name="foliooporval" style="display: none" placeholder="" value="">            
      <input type="text" class="form-control" id="idintedaloporval" name="idintedaloporval" style="display: none" placeholder="" value="">        
      <input type="text" class="form-control" id="edadintemodaloporval" name="edadintemodaloporval" style="display: none" placeholder="" value="">        
      <button id="iroportunidades"type="button" onclick="exampleModallogroxoportunidad($('#idlogrooporval').val(),$('#foliooporval').val(),$('#idintedaloporval').val());" class="btn btn-success">Oportunidades</button>
      <button id="irvalidarcogest"type="button" onclick="modalpreguntavalidacion10($('#idlogrooporval').val(),$('#foliooporval').val(),$('#idintedaloporval').val(),$('#edadintemodaloporval').val());" class="btn btn-success">Preguntas Validación</button>
      <button id="irvalidarcogest"type="button" onclick="modalescogeropcionoportdife($('#idlogrooporval').val(),$('#foliomodaloporval').val(),$('#idintedaloporval').val());" class="btn btn-success">Dificultad de alcanzarlo</button>
      <button id="cerraroporvalid10"type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
      </div>  
    </div>
  </div>
</div>
</div>
<!-- modal para elegir movimiento por oportunidad o cogestor logro 10 final-->






<!-- modal para elegir movimiento por oportunidad o cogestor logro 18 inicio-->
<div class="modal fade" id="Modalseleccionopcionoporpreval18" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" data-keyboard="false" data-backdrop="static">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body"><h3>Desea mover el logro por:</h3>
      <div class="">
      <input type="text" class="form-control" id="idlogrooporval18" name="idlogrooporval18" style="display: none" placeholder="" value="">        
      <input type="text" class="form-control" id="foliooporval18" name="foliooporval18" style="display: none" placeholder="" value="">            
      <input type="text" class="form-control" id="idintedaloporval18" name="idintedaloporval18" style="display: none" placeholder="" value="">        
      <button id="iroportunidades"type="button" onclick="exampleModallogroxoportunidad($('#idlogrooporval18').val(),$('#foliooporval18').val(),$('#idintedaloporval18').val());" class="btn btn-success">Oportunidades</button>
      <button id="irvalidarcogest"type="button" onclick="modalpreguntavalidacion18($('#idlogrooporval18').val(),$('#foliooporval18').val(),$('#idintedaloporval18').val());" class="btn btn-success">Preguntas Validación</button>
      <button id="irvalidarcogestd"type="button" onclick="modalescogeropcionoportdifaz($('#idlogrooporval18').val(),$('#foliooporval18').val(),$('#idintedaloporval18').val());" class="btn btn-success">Dificultad de Alcanzarlo</button>
      <button id="cerraroporvalid18"type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
      </div>  
    </div>
  </div>
</div>
</div>
<!-- modal para elegir movimiento por oportunidad o cogestor logro 18 final-->
<!-- modal para elegir movimiento por oportunidad o cogestor logro 24 inicio-->
<div class="modal fade" id="Modalseleccionopcionoporpreval24" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" data-keyboard="false" data-backdrop="static">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body"><h3>Desea mover el logro por:</h3>
      <div class="modal-footer">
      <input type="text" class="form-control" id="idlogrooporval24" name="idlogrooporval24" style="display: none" placeholder="" value="">        
      <input type="text" class="form-control" id="foliooporval24" name="foliooporval24" style="display: none" placeholder="" value="">            
      <input type="text" class="form-control" id="idintedaloporval24" name="idintedaloporval24" style="display: none" placeholder="" value="">        
      <button id="iroportunidades"type="button" onclick="exampleModallogroxoportunidad($('#idlogrooporval24').val(),$('#foliooporval24').val(),$('#idintedaloporval24').val());" class="btn btn-success">Oportunidades</button>
      <button id="irvalidarcogest"type="button" onclick="modalpreguntavalidacion24($('#idlogrooporval24').val(),$('#foliooporval24').val(),$('#idintedaloporval24').val());" class="btn btn-success">Preguntas de Validación</button>
      <button id="cerraroporvalid24"type="button" class="btn btn-default" data-dismiss="modal">Cancelar y Cerrar </button>
      </div>  
    </div>
  </div>
</div>
</div>
<!-- modal para elegir movimiento por oportunidad o cogestor logro 24 final-->
<!-- modal para elegir movimiento por oportunidad o cogestor logro 33 inicio-->
<div class="modal fade" id="Modalseleccionopcionoporpreval33" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" data-keyboard="false" data-backdrop="static">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body"><h3>Desea mover el logro por:</h3>
      <div class="">
      <input type="text" class="form-control" id="idlogrooporval33" name="idlogrooporval33" style="display: none" placeholder="" value="">        
      <input type="text" class="form-control" id="foliooporval33" name="foliooporval33" style="display: none" placeholder="" value="">            
      <input type="text" class="form-control" id="idintedaloporval33" name="idintedaloporval33" style="display: none" placeholder="" value="">        
      <button id="iroportunidades"type="button" onclick="exampleModallogroxoportunidad($('#idlogrooporval33').val(),$('#foliooporval33').val(),$('#idintedaloporval33').val());" class="btn btn-success">Oportunidades</button>
      <button id="irvalidarcogest"type="button" onclick="modalpreguntavalidacion33($('#idlogrooporval33').val(),$('#foliooporval33').val(),$('#idintedaloporval33').val());" class="btn btn-success">Preguntas Validación</button>
      <button id="irvalidarcogest"type="button" onclick="modalescogeropcionoportdife($('#idlogrooporval33').val(),$('#foliooporval33').val(),$('#idintedaloporval33').val());" class="btn btn-success">Dificultad de alcanzarlo</button>
      <button id="cerraroporvalid33"type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
      </div>  
    </div>
  </div>
</div>
</div>
<!-- modal para elegir movimiento por oportunidad o cogestor logro 33 final-->
<!-- modal para elegir movimiento por oportunidad o cogestor logro 34 inicio-->
<div class="modal fade" id="Modalseleccionopcionoporpreval34" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" data-keyboard="false" data-backdrop="static">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body"><h3>Desea mover el logro por:</h3>
      <div class="">
      <input type="text" class="form-control" id="idlogrooporval34" name="idlogrooporval34" style="display: none" placeholder="" value="">        
      <input type="text" class="form-control" id="foliooporval34" name="foliooporval34" style="display: none" placeholder="" value="">            
      <input type="text" class="form-control" id="idintedaloporval34" name="idintedaloporval34" style="display: none" placeholder="" value="">        
      <button id="iroportunidades"type="button" onclick="exampleModallogroxoportunidad($('#idlogrooporval34').val(),$('#foliooporval34').val(),$('#idintedaloporval34').val());" class="btn btn-success">Oportunidades</button>
      <button id="irvalidarcogest"type="button" onclick="modalpreguntavalidacion34($('#idlogrooporval34').val(),$('#foliooporval34').val(),$('#idintedaloporval34').val());" class="btn btn-success">Preguntas Validación</button>
      <button id="irvalidarcogest"type="button" onclick="modalescogeropcionoportdife($('#idlogrooporval34').val(),$('#foliooporval34').val(),$('#idintedaloporval34').val());" class="btn btn-success">Dificultad de alcanzarlo</button>
      <button id="cerraroporvalid34"type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
      </div>  
    </div>
  </div>
</div>
</div>
<!-- modal para elegir movimiento por oportunidad o cogestor logro 34 final-->
<!-- modal para elegir movimiento por oportunidad o cogestor logro 39 inicio-->
<div class="modal fade" id="Modalseleccionopcionoporpreval39" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" data-keyboard="false" data-backdrop="static">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body"><h3>Desea mover el logro por:</h3>
      <div class="">
      <input type="text" class="form-control" id="idlogrooporval39" name="idlogrooporval39" style="display: none" placeholder="" value="">        
      <input type="text" class="form-control" id="foliooporval39" name="foliooporval39" style="display: none" placeholder="" value="">            
      <input type="text" class="form-control" id="idintedaloporval39" name="idintedaloporval39" style="display: none" placeholder="" value="">        
      <button id="iroportunidades"type="button" onclick="exampleModallogroxoportunidad($('#idlogrooporval39').val(),$('#foliooporval39').val(),$('#idintedaloporval39').val());" class="btn btn-success">Oportunidades</button>
      <button id="irvalidarcogest"type="button" onclick="modalpreguntavalidacion39($('#idlogrooporval39').val(),$('#foliooporval39').val(),$('#idintedaloporval39').val());" class="btn btn-success">Preguntas Validación</button>
      <button id="irvalidarcogestd"type="button" onclick="modalescogeropcionoportdifaz($('#idlogrooporval39').val(),$('#foliooporval39').val(),$('#idintedaloporval39').val());" class="btn btn-success">Dificultad de Alcanzarlo</button>
      <button id="cerraroporvalid34"type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
      </div>  
    </div>
  </div>
</div>
</div>
<!-- modal para elegir movimiento por oportunidad o cogestor logro 39 final-->
<!-- modal para elegir movimiento por oportunidad o verificacion cogestor logro 12 inicio-->
<div class="modal fade" id="Modalseleccionopcionoporverif12" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" data-keyboard="false" data-backdrop="static">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body"><h3>Desea mover el logro por:</h3>
      <div class="">
      <input type="text" class="form-control" id="idlogrooporver12" style="display: none" name="idlogrooporver12" placeholder="" value="">        
      <input type="text" class="form-control" id="foliooporver12" style="display: none" name="foliooporver12" placeholder="" value="">            
      <input type="text" class="form-control" id="idintedaloporver12" style="display: none" name="idintedaloporver12" placeholder="" value="">        
      <button id="iroportunidades"type="button" onclick="exampleModallogroxoportunidad($('#idlogrooporver12').val(),$('#foliooporver12').val(),$('#idintedaloporver12').val());" class="btn btn-success">Oportunidades</button>
      <button id="irvalidarcogest"type="button" onclick="modal($('#idintedaloporver12').val());" class="btn btn-success">Verificación cogestor</button>
      <button id="irvalidarcogest"type="button" onclick="modalescogeropcionoportdife($('#idlogrooporver12').val(),$('#foliooporver12').val(),$('#idintedaloporver12').val());" class="btn btn-success">Dificultad de alcanzarlo</button>
      <button id="cerraroporvalid12"type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
      </div>  
    </div>
  </div>
</div>
</div>
<!-- modal para elegir movimiento por oportunidad o verificacion cogestor logro 12 final-->



<!-- modal verificacion cogestor logro cafe o azul inicio-->
<div class="modal fade" id="exampleModallogrocafeazul" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" data-keyboard="false" data-backdrop="static">
<div class="modal-dialog" role="document">
 <div class="modal-content">
  <div class="modal-body">
   <div class="row" id="mensajeoportmostrarlogrocafeazul" align="center" name="mensajeoportmostrarlogrocafeazul" style="display: none"><label><h1 class="control-label" id="exampleModalLabel">Movimiento del logro por factores externos al programa (Discapacidad, Adulto Mayor o Desinteres)</h1></label></div> 
   <!--inicio radio una sola seleccion-->
   <input type="text" class="form-control" id="idintegrantemodalcfaz"  name="idintegrantemodalcfaz" style="display: none" placeholder="" value="">            
   <div id="logrosdivcfaz" name="logrosdivcfaz" class="form-group col-md-12 form-group-sm has-error"><label class="control-label">Dificultad para alcanzar el logro:</label>
   <div class="radio"><label><input type="radio" name="logromovcfaz" id="logromovcfaz" onclick="colocaropcionlogrocfaz('dl01','valorlogromovcfaz','logrosdivcfaz');" value="">Discapacidad</label></div>
   <div class="radio"><label><input type="radio" name="logromovcfaz" id="logromovcfaz" onclick="colocaropcionlogrocfaz('dl02','valorlogromovcfaz','logrosdivcfaz');" value="">Adulto mayor</label></div>
   <div class="radio"><label><input type="radio" name="logromovcfaz" id="logromovcfaz" onclick="colocaropcionlogrocfaz('dl03','valorlogromovcfaz','logrosdivcfaz');" value="">Desinterés</label></div>
   <input type="text" class="form-control" id="valorlogromovcfaz" name="valorlogromovcfaz" style="display: none" placeholder="Text input" value="">
   </div>
   <!--fin radio una sola seleccion-->  
   <div  id="nombreopoobsdivcfaz" name="nombreopoobsdivcfaz" class="form-group col-md-12 form-group-sm has-error"><label class="control-label">Observación de la Dificultad</label>
   <textarea  class="form-control" id="nombreoportunidadobscfaz" disabled="" onkeypress="return soloLetras(event)"  onchange="validarbolitasytextomodallogcfaz('nombreopoobsdivcfaz','nombreoportunidadobscfaz')" name="nombreoportunidadobscfaz"   placeholder="Observación de la oportunidad" value=""></textarea>
   </div> 
   </div>
   <div class="modal-footer">
<!--   <input type="text" class="form-control" id="idintegrantemodalcf" name="idintegrantemodalcf"  style="display: none" placeholder="" value="">        -->
   <button id="cerrarcfaz"type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
   <button id="guardarcfaz"type="button" disabled="" class="btn btn-primary">Guardar</button>
   </div>
   </div>
  </div>
</div>
<!-- modal verificacion cogestor logro cafe o azul fin-->
<!-- modal verificacion cogestor logro cafe inicio-->
<div class="modal fade" id="exampleModallogrocafe" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" data-keyboard="false" data-backdrop="static">
<div class="modal-dialog" role="document">
 <div class="modal-content">
  <div class="modal-body">
   <div class="row" id="mensajeoportmostrarlogrocafe" align="center" name="mensajeoportmostrarlogrocafe" style="display: none"><label><h1 class="control-label" id="exampleModalLabel">Movimiento del logro por factores externos al programa (Desinteres)</h1></label></div> 
   <!--inicio radio una sola seleccion-->
   <input type="text" class="form-control" id="idintegrantemodalcfe" style="display: none" name="idintegrantemodalcfe" placeholder="" value="">            
   <div id="logrosdivcfe" name="logrosdivcfe" class="form-group col-md-12 form-group-sm has-error"><label class="control-label">Dificultad para alcanzar el logro:</label>
<!--   <div class="radio"><label><input type="radio" name="logromovcf" id="logromovcf" onclick="colocaropcionlogrocf('dl01','valorlogromovcf','logrosdivcf');" value="">Discapacidad</label></div>
   <div class="radio"><label><input type="radio" name="logromovcf" id="logromovcf" onclick="colocaropcionlogrocf('dl02','valorlogromovcf','logrosdivcf');" value="">Adulto mayor</label></div>-->
   <div class="radio"><label><input type="radio" name="logromovcfe" id="logromovcfe" onclick="colocaropcionlogrocfe('dl03','valorlogromovcfe','logrosdivcfe');" value="">Desinterés</label></div>
   <input type="text" class="form-control" id="valorlogromovcfe" name="valorlogromovcfe" style="display: none" placeholder="Text input" value="">
   </div>
   <!--fin radio una sola seleccion-->  
   <div  id="nombreopoobsdivcfe" name="nombreopoobsdivcfe" class="form-group col-md-12 form-group-sm has-error"><label class="control-label">Observación de la Dificultad</label>
   <textarea  class="form-control" id="nombreoportunidadobscfe" disabled="" onkeypress="return soloLetras(event)"  onchange="validarbolitasytextomodallogcfe('nombreopoobsdivcfe','nombreoportunidadobscfe')" name="nombreoportunidadobscfe"   placeholder="Observación de la oportunidad" value=""></textarea>
   </div> 
   </div>
   <div class="modal-footer">
   <button id="cerrarcfe"type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
   <button id="guardarcfe"type="button" disabled="" class="btn btn-primary">Guardar</button>
   </div>
   </div>
  </div>
</div>
<!-- modal verificacion cogestor logro cafe fin-->


<!-- modal verificacion cogestor logro azul inicio-->
<div class="modal fade" id="exampleModallogroazul" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" data-keyboard="false" data-backdrop="static">
<div class="modal-dialog" role="document">
 <div class="modal-content">
  <div class="modal-body">
   <div class="row" id="mensajeoportmostrarlogroazul" align="center" name="mensajeoportmostrarlogroazul" style="display: none"><label><h1 class="control-label" id="exampleModalLabel">Movimiento del logro por factores externos al programa (Discapacidad o Desinteres)</h1></label></div> 
   <!--inicio radio una sola seleccion-->
   <input type="text" class="form-control" id="idintegrantemodalaz"  name="idintegrantemodalaz" style="display: none" placeholder="" value="">            
   <div id="logrosdivaz" name="logrosdivaz" class="form-group col-md-12 form-group-sm has-error"><label class="control-label">Dificultad para alcanzar el logro:</label>
   <div class="radio"><label><input type="radio" name="logromovaz" id="logromovaz" onclick="colocaropcionlogroaz('dl01','valorlogromovaz','logrosdivaz');" value="">Discapacidad</label></div>
<!--   <div class="radio"><label><input type="radio" name="logromovcfaz" id="logromovcfaz" onclick="colocaropcionlogroaz('dl02','valorlogromovcfaz','logrosdivcfaz');" value="">Adulto mayor</label></div>-->
   <div class="radio"><label><input type="radio" name="logromovaz" id="logromovaz" onclick="colocaropcionlogroaz('dl03','valorlogromovaz','logrosdivaz');" value="">Desinterés</label></div>
   <input type="text" class="form-control" id="valorlogromovaz" name="valorlogromovaz" style="display: none"  placeholder="Text input" value="">
   </div>
   <!--fin radio una sola seleccion-->  
   <div  id="nombreopoobsdivaz" name="nombreopoobsdivaz" class="form-group col-md-12 form-group-sm has-error"><label class="control-label">Observación de la Dificultad</label>
   <textarea  class="form-control" id="nombreoportunidadobsaz" disabled="" onkeypress="return soloLetras(event)"  onchange="validarbolitasytextomodallogaz('nombreopoobsdivaz','nombreoportunidadobsaz')" name="nombreoportunidadobsaz"   placeholder="Observación de la oportunidad" value=""></textarea>
   </div> 
   </div>
   <div class="modal-footer"><input type="text" class="form-control" id="idintegrantemodalcf" name="idintegrantemodalcf"  style="display: none" placeholder="" value="">        
   <button id="cerraraz"type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
   <button id="guardaraz"type="button" disabled="" class="btn btn-primary">Guardar</button>
   </div>
   </div>
  </div>
</div>
<!-- modal verificacion cogestor logro  azul fin-->





<!-- modal para recalcular el logro 2 inicio-->
<div class="modal fade" id="Modalpreguntasrecalculolog2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" data-keyboard="false" data-backdrop="static">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body"><h3>Realizar las preguntas para recalcular el logro 2?</h3>
      <div class="modal-footer">
      <input type="text" class="form-control" id="idlogrorecalculolog2" name="idlogrorecalculolog2" style="display:none" value="">        
      <input type="text" class="form-control" id="foliorecalculolog2" name="foliorecalculolog2" style="display:none" value="">            
      <input type="text" class="form-control" id="idintegranterecalculolog2" name="idintegranterecalculolog2" style="display:none" value="">        
      <input type="text" class="form-control" id="edadintemodalrecalculolog2" name="edadintemodalrecalculolog2" style="display: none" placeholder="" value="">        
      <center><button align="center" id="recalculologro2" type="button" onclick="modalrecalculolog2($('#idlogrorecalculolog2').val(),$('#foliorecalculolog2').val(),$('#idintegranterecalculolog2').val(),$('#edadintemodalrecalculolog2').val());" class="btn btn-success">Realizar Preguntas</button>
      <button id="cerrarrecalculolog2"type="button" class="btn btn-default" data-dismiss="modal">Cancelar y Cerrar </button></center>
      </div>  
    </div>
  </div>
</div>
</div>
<!-- modal para recalcular el logro 2 fin-->
<!-- modal recalculo logro 2 inicio-->
<div class="modal fade" id="Modallogro2recalculo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" data-keyboard="false" data-backdrop="static">
<div class="modal-dialog" role="document">
 <div class="modal-content">
  <div class="modal-body">
   <div class="row" id="mensajelogro2recalculo" align="center" name="mensajelogro2recalculo" style="display: none"><label><h1 class="control-label" id="exampleModalLabel">Recalculo del logro 2 realizado</h1></label></div> 
   <!--inicio radio una sola seleccion-->
   <!--<input type="text" class="form-control" id="idintegrantemodalcfaz"  name="idintegrantemodalcfaz" style="display: none" placeholder="" value="">            -->
<!--inicio radio una sola seleccion-->
<div class="row">
<div id="c4p8o1div" name="c4p8o1div" class="form-group col-md-12 form-group-sm has-error">   
<label class="control-label">8. ¿Con cuál de los siguientes documentos  se está identificando actualmente?</label>
<!-- <div class="radio"><label><input type="radio" name="c4p8o1" id="c4p8o1" onclick="mostrarpais('c4p8o1');" value="c4p8o1">Cédula de Ciudadanía o contraseña</label></div> -->
<div class="radio"><label><input type="radio" name="c4p8o1" id="c4p8o1" onclick="mostrarpais('c4p8o2');" value="c4p8o2">Tarjeta de Identidad</label></div> 
<div class="radio"><label><input type="radio" name="c4p8o1" id="c4p8o1" onclick="mostrarpais('c4p8o3');" value="c4p8o3">Registro Civil</label></div> 
<!-- <div class="radio"><label><input type="radio" name="c4p8o1" id="c4p8o1" onclick="mostrarpais('c4p8o4');" value="c4p8o4">Cédula de Extranjeria</label></div> -->
<div class="radio"><label><input type="radio" name="c4p8o1" id="c4p8o1" onclick="mostrarpais('c4p8o5');" value="c4p8o5">No tiene</label></div> 

<input type="text" class="form-control" id="valorc4p8o1"  name="valorc4p8o1" style="display: none" value="">
</div>
<div class="col-md-6 form-group" id="c4p8o2m" name="c4p8o2m" style="display: none">
<label class="control-label">Nacionalidad</label>
<select class="form-control " onchange="validarbolitasytextorecalculolog2('c4p8o2m','c4p8o2')" id="c4p8o2" name="c4p8o2">
<?php echo('<option value="">Seleccione una opción</option>');?>
<?php echo($paises); ?>
</select>
</div>
</div>
<!--fin radio una sola seleccion-->
   </div>
   <div class="modal-footer">
<!--   <input type="text" class="form-control" id="idintegrantemodalcf" name="idintegrantemodalcf"  style="display: none" placeholder="" value="">        -->
   <button id="cerrarpregrecalculolog2"type="button" class="btn btn-default" data-dismiss="modal">cerrar</button>
   <button id="guardarrecalculolog2"type="button" disabled="" class="btn btn-primary">guardar</button>
   </div>
   </div>
  </div>
</div>
<!-- modal recalculo logro 2 fin-->








<!-- modal para recalcular el logro 3 inicio-->
<div class="modal fade" id="Modalpreguntasrecalculolog3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" data-keyboard="false" data-backdrop="static">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body"><h3>Realizar las preguntas para recalcular el logro 3?</h3>
      <div class="modal-footer">
      <input type="text" class="form-control" id="idlogrorecalculolog3" name="idlogrorecalculolog3" style="display:none" value="">        
      <input type="text" class="form-control" id="foliorecalculolog3" name="foliorecalculolo3" style="display:none" value="">            
      <input type="text" class="form-control" id="idintegranterecalculolog3" name="idintegranterecalculolog3" style="display:none" value="">        
      <input type="text" class="form-control" id="edadintemodalrecalculolog3" name="edadintemodalrecalculolog3" style="display: none" placeholder="" value="">        
      <center><button align="center" id="recalculologro3" type="button" onclick="modalrecalculolog3($('#idlogrorecalculolog3').val(),$('#foliorecalculolog3').val(),$('#idintegranterecalculolog3').val(),$('#edadintemodalrecalculolog3').val());" class="btn btn-success">Realizar Preguntas</button>
      <button id="cerrarrecalculolog3"type="button" class="btn btn-default" data-dismiss="modal">Cancelar y Cerrar </button></center>
      </div>  
    </div>
  </div>
</div>
</div>
<!-- modal para recalcular el logro 3 fin-->
<!-- modal recalculo logro 3 inicio-->
<div class="modal fade" id="Modallogro3recalculo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" data-keyboard="false" data-backdrop="static">
<div class="modal-dialog" role="document">
 <div class="modal-content">
  <div class="modal-body">
   <div class="row" id="mensajelogro3recalculo" align="center" name="mensajelogro3recalculo" style="display: none"><label><h1 class="control-label" id="exampleModalLabel">Recalculo del logro 3 realizado</h1></label></div> 
   <!--inicio radio una sola seleccion-->
   <!-- <input type="text" class="form-control" id="idintegrantemodalcfaz"  name="idintegrantemodalcfaz" style="display: none" placeholder="" value="">            -->   
   
<!--inicio radio una sola seleccion-->
<div class="row">
<div id="c4p8o1div3" name="c4p8o1div3" class="form-group col-md-12 form-group-sm has-error">   
<label class="control-label">8. ¿Con cuál de los siguientes documentos  se está identificando actualmente?</label>
<div class="radio"><label><input type="radio" name="c4p8o1a" id="c4p8o1a" onclick="mostrarpais3('c4p8o1');" value="c4p8o1">Cédula de Ciudadanía o contraseña</label></div>
<div class="radio"><label><input type="radio" name="c4p8o1a" id="c4p8o1a" onclick="mostrarpais3('c4p8o2');" value="c4p8o2">Tarjeta de Identidad</label></div> 
<div class="radio"><label><input type="radio" name="c4p8o1a" id="c4p8o1a" onclick="mostrarpais3('c4p8o3');" value="c4p8o3">Registro Civil</label></div> 
<div class="radio"><label><input type="radio" name="c4p8o1a" id="c4p8o1a" onclick="mostrarpais3('c4p8o4');" value="c4p8o4">Cédula de Extranjeria</label></div> 
<div class="radio"><label><input type="radio" name="c4p8o1a" id="c4p8o1a" onclick="mostrarpais3('c4p8o5');" value="c4p8o5">No tiene</label></div> 

<input type="text" class="form-control" id="valorc4p8o1a"  name="valorc4p8o1a" style="display: none" value="">
</div>
<div class="col-md-6 form-group" id="c4p8o2m3" name="c4p8o2m3" style="display: none">
<label class="control-label">Nacionalidad</label>
<select class="form-control " onchange="validarbolitasytextorecalculolog3('c4p8o2m3','c4p8o2a')" id="c4p8o2a" name="c4p8o2a">
<?php echo('<option value="">Seleccione una opción</option>');?>
<?php echo($paises); ?>
</select>
</div>
</div>
<!--fin radio una sola seleccion-->
   </div>
   <div class="modal-footer">
<!--   <input type="text" class="form-control" id="idintegrantemodalcf" name="idintegrantemodalcf"  style="display: none" placeholder="" value="">        -->
   <button id="cerrarpregrecalculolog3"type="button" class="btn btn-default" data-dismiss="modal">cerrar</button>
   <button id="guardarrecalculolog3"type="button" disabled="" class="btn btn-primary">guardar</button>
   </div>
   </div>
  </div>
</div>
<!-- modal recalculo logro 3 fin-->
<!-- modal para recalcular el logro 5 inicio-->
<div class="modal fade" id="Modalpreguntasrecalculolog5" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" data-keyboard="false" data-backdrop="static">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body"><h3>Realizar las preguntas para recalcular el logro 5?</h3>
      <div class="modal-footer">
      <input type="text" class="form-control" id="idlogrorecalculolog5" name="idlogrorecalculolog5" style="display:none" value="">        
      <input type="text" class="form-control" id="foliorecalculolog5" name="foliorecalculolo5" style="display:none" value="">            
      <input type="text" class="form-control" id="idintegranterecalculolog5" name="idintegranterecalculolog5" style="display:none" value="">        
      <input type="text" class="form-control" id="edadintemodalrecalculolog5" name="edadintemodalrecalculolog5" style="display: none" placeholder="" value="">        
      <center><button align="center" id="recalculologro5" type="button" onclick="modalrecalculolog5($('#idlogrorecalculolog5').val(),$('#foliorecalculolog5').val(),$('#idintegranterecalculolog5').val(),$('#edadintemodalrecalculolog5').val());" class="btn btn-success">Realizar Preguntas</button>
      <button id="cerrarrecalculolog5"type="button" class="btn btn-default" data-dismiss="modal">Cancelar y Cerrar </button></center>
      </div>  
    </div>
  </div>
</div>
</div>
<!-- modal para recalcular el logro 5 fin-->
<!-- modal recalculo logro 5 inicio-->
<div class="modal fade" id="Modallogro5recalculo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" data-keyboard="false" data-backdrop="static">
<div class="modal-dialog" role="document">
 <div class="modal-content">
  <div class="modal-body">
   <div class="row" id="mensajelogro5recalculo" align="center" name="mensajelogro5recalculo" style="display: none"><label><h1 class="control-label" id="exampleModalLabel">Recalculo del logro 5 realizado</h1></label></div> 
   <!--inicio radio una sola seleccion-->
   <!-- <input type="text" class="form-control" id="idintegrantemodalcfaz"  name="idintegrantemodalcfaz" style="display: none" placeholder="" value="">            -->   
   
<!--inicio radio una sola seleccion-->
<div class="row">
<div id="c4p9div" name="c4p9div" class="form-group col-md-12 form-group-sm has-error"><label class="control-label">9. ¿Tiene resuelta su situación militar?</label>
    <div class="radio"><label><input type="radio" name="c4p9" id="c4p9" onclick="colocaropcionc4p9('1','valorc4p9','c4p9div');" value="1">Si</label></div>
    <div class="radio"><label><input type="radio" name="c4p9" id="c4p9" onclick="colocaropcionc4p9('2','valorc4p9','c4p9div');" value="2">No</label></div> 
<!--    <div class="radio"><label><input type="radio" name="c4p9" id="c4p9" onclick="colocaropcionc4p9('5','valorc4p9','c4p9div');" value="5">Desinteres</label></div>  -->
    <input type="text" class="form-control" id="valorc4p9" name="valorc4p9" style="display:none" placeholder="Text input" value="">
</div>
</div> 
<!--fin radio una sola seleccion-->

  </div>
   <div class="modal-footer">
<!--   <input type="text" class="form-control" id="idintegrantemodalcf" name="idintegrantemodalcf"  style="display: none" placeholder="" value="">        -->
   <button id="cerrarpregrecalculolog5"type="button" class="btn btn-default" data-dismiss="modal">cerrar</button>
   <button id="guardarrecalculolog5"type="button" disabled="" class="btn btn-primary">guardar</button>
   </div>
   </div>
  </div>
</div>
<!-- modal recalculo logro 5 fin-->














<!-- modal para recalcular el logro 7 inicio-->
<div class="modal fade" id="Modalpreguntasrecalculolog7" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" data-keyboard="false" data-backdrop="static">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body"><h3>Realizar las preguntas para recalcular el logro 7?</h3>
      <div class="modal-footer">
      <input type="text" class="form-control" id="idlogrorecalculolog7" name="idlogrorecalculolog7" style="display:none" value="">        
      <input type="text" class="form-control" id="foliorecalculolog7" name="foliorecalculolo7" style="display:none" value="">            
      <input type="text" class="form-control" id="idintegranterecalculolog7" name="idintegranterecalculolog7" style="display:none" value="">        
      <input type="text" class="form-control" id="edadintemodalrecalculolog7" name="edadintemodalrecalculolog7" style="display: none" placeholder="" value="">        
      <center><button align="center" id="recalculologro7" type="button" onclick="modalrecalculolog7($('#idlogrorecalculolog7').val(),$('#foliorecalculolog7').val(),$('#idintegranterecalculolog7').val(),$('#edadintemodalrecalculolog7').val());" class="btn btn-success">Realizar Preguntas</button>
      <button id="cerrarrecalculolog7"type="button" class="btn btn-default" data-dismiss="modal">Cancelar y Cerrar</button></center>
      </div>  
    </div>
  </div>
</div>
</div>
<!-- modal para recalcular el logro 7 fin-->
<!-- modal recalculo logro 7 inicio-->
<div class="modal fade" id="Modallogro7recalculo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" data-keyboard="false" data-backdrop="static">
<div class="modal-dialog" role="document">
 <div class="modal-content">
  <div class="modal-body">
   <div class="row" id="mensajelogro7recalculo" align="center" name="mensajelogro7recalculo" style="display: none"><label><h1 class="control-label" id="exampleModalLabel">Recalculo del logro 7 realizado</h1></label></div> 
   <!--inicio radio una sola seleccion-->
   <!-- <input type="text" class="form-control" id="idintegrantemodalcfaz"  name="idintegrantemodalcfaz" style="display: none" placeholder="" value="">            -->   
   <!--inicio radio una sola seleccion pregunta 1 capitulo 9L-->
      <div class="row">
      <div id="c9p3divrecalculolog7" name="c9p3divrecalculolog7" class="form-group col-md-12 form-group-sm has-error"><label class="control-label">1. En que actividad ocupó la mayor parte del tiempo la semana pasada? (Unica Respuesta)</label>
      <div class="radio"><label><input type="radio" name="c9p3recalculolog7" id="c9p3recalculolog7" onclick="colocaropcionc9p3recalculolog7('c9p3o1','valorc9p3recalculolog7','c9p3divrecalculolog7');" value="c9p3o1">Trabajando</label></div>
      <div class="radio"><label><input type="radio" name="c9p3recalculolog7" id="c9p3recalculolog7" onclick="colocaropcionc9p3recalculolog7('c9p3o2','valorc9p3recalculolog7','c9p3divrecalculolog7');" value="c9p3o2">Buscando trabajo</label></div>
      <div class="radio"><label><input type="radio" name="c9p3recalculolog7" id="c9p3recalculolog7" onclick="colocaropcionc9p3recalculolog7('c9p3o3','valorc9p3recalculolog7','c9p3divrecalculolog7');" value="c9p3o3">Estudiando</label></div>
      <div class="radio"><label><input type="radio" name="c9p3recalculolog7" id="c9p3recalculolog7" onclick="colocaropcionc9p3recalculolog7('c9p3o4','valorc9p3recalculolog7','c9p3divrecalculolog7');" value="c9p3o4">Oficios del hogar</label></div>
      <div class="radio"><label><input type="radio" name="c9p3recalculolog7" id="c9p3recalculolog7" onclick="colocaropcionc9p3recalculolog7('c9p3o5','valorc9p3recalculolog7','c9p3divrecalculolog7');" value="c9p3o5">Incapacitado permanente para trabajar</label></div>
      <div class="radio"><label><input type="radio" name="c9p3recalculolog7" id="c9p3recalculolog7" onclick="colocaropcionc9p3recalculolog7('c9p3o6','valorc9p3recalculolog7','c9p3divrecalculolog7');" value="c9p3o6">Otra actividad</label></div>
      <div class="row" id="c9p3cualmostrarrecalculolog7" name="c9p3cualmostrarrecalculolog7">
          <div  id="c9p3cualdivrecalculolog7" name="c9p3cualdivrecalculolog7" class="form-group col-md-12" style="display : none">
      <label class="control-label">Cual?</label>
      <input type="text" class="form-control text-uppercase" id="c9p3cualrecalculolog7" onkeypress="return soloLetras(event)"  onchange="validarcampotexcuadrosreclog7('c9p3cualdivrecalculolog7','c9p3cualrecalculolog7','1')" name="c9p3cualrecalculolog7"   placeholder="Cual?" value="">
      </div>
      </div>
      <input type="text" class="form-control" id="valorc9p3recalculolog7" name="valorc9p3recalculolog7" style="display: none" value="">
      </div>
      </div> 
      <!--fin radio una sola seleccion pregunta 1 capitulo 9L-->
      <!--inicio radio una sola seleccion pregunta 2 capitulo 9L-->
      <div class="row">
      <div id="c9p4divrecalculolog7" name="c9p4divrecalculolog7"class="form-group col-md-12 form-group-sm has-error" style="display: none"><label class="control-label">2. Además de lo anterior , ¿Realizó la semana pasada alguna actividad paga por una hora o más ó tuvo algún trabajo o negocio por el que recibió ingresos? (Unica Respuesta)</label>
      <div class="radio"><label><input type="radio" name="c9p4recalculolog7" id="c9p4recalculolog7" onclick="colocaropcionc9p4reclog7('1','valorc9p4recalculolog7','c9p4divrecalculolog7');" value="1">Si</label></div>
      <div class="radio"><label><input type="radio" name="c9p4recalculolog7" id="c9p4recalculolog7a" onclick="colocaropcionc9p4reclog7('2','valorc9p4recalculolog7','c9p4divrecalculolog7');" value="2">No</label></div> 
      <input type="text" class="form-control" id="valorc9p4recalculolog7" name="valorc9p4recalculolog7" style="display: none" value="">
      </div>
      </div> 
      <!--fin radio una sola seleccion pregunta 2 capitulo 9L-->
      <!--inicio radio una sola seleccion pregunta 3 capitulo 9L-->
            <div class="row">
            <div id="c9p5divrecalculolog7" name="c9p5divrecalculolog7" class="form-group col-md-12 form-group-sm has-error" style="display: none">   
            <label class="control-label">3. ¿ Qué hizo principalmente en las ÚLTIMAS CUATRO SEMANAS para conseguir un trabajo o instalar un negocio?(Unica Respuesta)</label>
            <div class="radio"><label><input type="radio" name="c9p5recalculolog7" id="c9p5recalculolog7" onclick="colocaropcionc9p4reclog7r('c9p5o1','valorc9p5recalculolog7','c9p5divrecalculolog7');" value="c9p5o1">Pidió ayuda a familiares, amigos o colegas</label></div>
            <div class="radio"><label><input type="radio" name="c9p5recalculolog7" id="c9p5recalculolog7a" onclick="colocaropcionc9p4reclog7r('c9p5o2','valorc9p5recalculolog7','c9p5divrecalculolog7');" value="c9p5o2">Visitó, llevó o envió hojas de vida a empresas o empleadores</label></div>
            <div class="radio"><label><input type="radio" name="c9p5recalculolog7" id="c9p5recalculolog7b" onclick="colocaropcionc9p4reclog7r('c9p5o3','valorc9p5recalculolog7','c9p5divrecalculolog7');" value="c9p5o3">Visitó, llevó o envió hojas de vida a bolsas de empleo o intermediarios</label></div>
            <div class="radio"><label><input type="radio" name="c9p5recalculolog7" id="c9p5recalculolog7c" onclick="colocaropcionc9p4reclog7r('c9p5o4','valorc9p5recalculolog7','c9p5divrecalculolog7');" value="c9p5o4">Puso o consultó avisos clasificados</label></div>
            <div class="radio"><label><input type="radio" name="c9p5recalculolog7" id="c9p5recalculolog7d" onclick="colocaropcionc9p4reclog7r('c9p5o5','valorc9p5recalculolog7','c9p5divrecalculolog7');" value="c9p5o5">Se presentó a convocatorias</label></div>
            <div class="radio"><label><input type="radio" name="c9p5recalculolog7" id="c9p5recalculolog7e" onclick="colocaropcionc9p4reclog7r('c9p5o6','valorc9p5recalculolog7','c9p5divrecalculolog7');" value="c9p5o6">Hizo preparativos para iniciar un negocio</label></div>
            <div class="radio"><label><input type="radio" name="c9p5recalculolog7" id="c9p5recalculolog7f" onclick="colocaropcionc9p4reclog7r('c9p5o7','valorc9p5recalculolog7','c9p5divrecalculolog7');" value="c9p5o7">Otro medio</label></div>
            <div class="radio"><label><input type="radio" name="c9p5recalculolog7" id="c9p5recalculolog7h" onclick="colocaropcionc9p4reclog7r('c9p5o8','valorc9p5recalculolog7','c9p5divrecalculolog7');" value="c9p5o8">No hizo nada</label></div>    
            <input type="text" class="form-control" id="valorc9p5recalculolog7" name="valorc9p5recalculolog7" style="display:none" value="">
            </div>
            <div id="c9p5cualmostrarrecalculolog7" name="c9p5cualmostrarrecalculolog7" class="form-group col-md-12" style="display : none">
            <div  id="c9p5cualdivrecalculolog7" name="c9p5cualdivrecalculolog7">
                       <label class="control-label">Cual?</label>
                       <input type="text" class="form-control text-uppercase" id="c9p5cualrecalculolog7g" onkeypress="return soloLetras(event)"  onchange="validarcampotexcuadrosreclog7('c9p5cualmostrarrecalculolog7','c9p5cualrecalculolog7g','1')" name="c9p5cualrecalculolog7g"   placeholder="Cual?" value="">
            </div>
            </div>    
            </div> 
            <!--fin radio una sola seleccion pregunta 3 capitulo 9L-->
        <!--inicio radio una sola seleccion-->
            <div class="row">
            <div id="c9p6div" name="c9p6div" class="form-group col-md-12 form-group-sm has-error" style="display:none">   
                <label class="control-label">4. Si le hubiera resultado algún trabajo ¿estaba disponible la semana pasada para empezar a trabajar? (Unica Respuesta)</label><div class="radio">
                <label><input type="radio" name="c9p6" id="c9p6" onclick="colocaropcionc9p4reclog7pre4('1','valorc9p6','c9p6div');" value="1">Si</label></div>
                <div class="radio"><label><input type="radio" name="c9p6" id="c9p6a" onclick="colocaropcionc9p4reclog7pre4('2','valorc9p6','c9p6div');" value="2">No</label></div> 
                <input type="text" class="form-control" id="valorc9p6" name="valorc9p6" style="display:none" value="">
            </div>
            </div> 
            <!--fin radio una sola seleccion-->    
            
      
  </div>
   <div class="modal-footer">
<!--   <input type="text" class="form-control" id="idintegrantemodalcf" name="idintegrantemodalcf"  style="display: none" placeholder="" value="">        -->
   <button id="cerrarpregrecalculolog7"type="button" class="btn btn-default" data-dismiss="modal">cerrar</button>
   <button id="guardarrecalculolog7"type="button" disabled="" class="btn btn-primary">guardar</button>
   </div>
   </div>
  </div>
</div>
<!-- modal recalculo logro 7 fin-->










<!-- modal para recalcular el logro 8 inicio-->
<div class="modal fade" id="Modalpreguntasrecalculolog8" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" data-keyboard="false" data-backdrop="static">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body"><h3>Realizar las preguntas para recalcular el logro 8?</h3>
      <div class="modal-footer">
      <input type="text" class="form-control" id="idlogrorecalculolog8" name="idlogrorecalculolog8" style="display:none" value="">        
      <input type="text" class="form-control" id="foliorecalculolog8" name="foliorecalculolog8" style="display:none" value="">            
      <input type="text" class="form-control" id="idintegranterecalculolog8" name="idintegranterecalculolog8" style="display:none" value="">        
      <input type="text" class="form-control" id="edadintemodalrecalculolog8" name="edadintemodalrecalculolog8" style="display: none" value="">        
      <center><button align="center" id="recalculologro8" type="button" onclick="modalrecalculolog8($('#idlogrorecalculolog8').val(),$('#foliorecalculolog8').val(),$('#idintegranterecalculolog8').val(),$('#edadintemodalrecalculolog8').val());" class="btn btn-success">Realizar Preguntas</button>
      <button id="cerrarrecalculolog8"type="button" class="btn btn-default" data-dismiss="modal">Cancelar y Cerrar</button></center>
      </div>  
    </div>
  </div>
</div>
</div>
<!-- modal para recalcular logro 8-->
<!-- modal recalculo logro 8 inicio-->
<div class="modal fade" id="Modallogro8recalculo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" data-keyboard="false" data-backdrop="static">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
       <div class="row" id="mensajelogro8recalculo" align="center" name="mensajelogro8recalculo" style="display: none"><label><h1 class="control-label" id="exampleModalLabel">Recalculo del logro 8 realizado</h1></label></div>    
       <!--inicio radio una sola seleccion-->
            <div class="row">
            <div id="c9p1div" name="c9p1div" class="form-group col-md-12 form-group-sm has-error">   
                <label class="control-label">1.  Ademas de la información reportada sobre educación. En los últimos 24 meses ¿ha tomado o está tomando algún curso de formación para el trabajo? (Unica Respuesta)</label>
                <div class="radio"><label><input type="radio" name="c9p1" id="c9p1" onclick="colocaropcionc9p1('1','valorc9p1','c9p1div');" value="1">Si</label></div>
        <div class="row" id="c9p1cualdivmostrar" name="c9p1cualdivmostrar" style="display:none">
        <div  id="c9p1cualdiv" name="c9p1cualdiv" class="form-group col-md-12"><label class="control-label">Cual?</label>
                       <input type="text"  class="form-control text-uppercase" id="valorc9p1cual" onkeypress="return soloLetras(event)"  onchange="validarcampotexcuadrosc9p1('c9p1cualdiv','valorc9p1cual','1')" name="valorc9p1cual"   placeholder="Cual?" value="">
        </div>
        </div><div class="radio"><label><input type="radio" name="c9p1" id="c9p1" onclick="colocaropcionc9p1('2','valorc9p1','c9p1div');" value="2">No</label></div> 
                <input type="text" class="form-control" id="valorc9p1" name="valorc9p1" style="display:none" value="">
            </div>
            </div> 
            <!--fin radio una sola seleccion-->
            <!--inicio radio una sola seleccion-->
            <div class="row">
            <div id="c9p2div" name="c9p2div" class="form-group col-md-12 form-group-sm has-error">   
                <label class="control-label">2.  En los últimos 24 meses, ¿se ha certificado o se está certificando en alguna competencia laboral o conocimiento específico? (Unica Respuesta)</label>
                <div class="radio"><label><input type="radio" name="c9p2" id="c9p2" onclick="colocaropcionc9p2('1','valorc9p2','c9p2div');" value="1">Si</label></div>
                <div class="radio"><label><input type="radio" name="c9p2" id="c9p2" onclick="colocaropcionc9p2('2','valorc9p2','c9p2div');" value="2">No</label></div> 
                <input type="text" class="form-control" id="valorc9p2" name="valorc9p2" style="display:none" value="">
            </div>
            </div> 
            <!--fin radio una sola seleccion-->
     </div>           
      <div class="modal-footer">
      <input type="text" class="form-control" id="idintegrantemodal" name="idintegrantemodal" style="display: none" placeholder="" value="">        
      <button id="cerrarrecalculolog8final" type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
      <button id="guardarrecalculolog8final" type="button" class="btn btn-primary" disabled="">Guardar</button>
      </div>  
    </div>
  </div>
</div>
<!-- modal recalculo logro 8 final-->












<!-- modal para recalcular el logro 9 inicio-->
<div class="modal fade" id="Modalpreguntasrecalculolog9" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" data-keyboard="false" data-backdrop="static">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body"><h3>Realizar las preguntas para recalcular el logro 9?</h3>
      <div class="modal-footer">
      <input type="text" class="form-control" id="idlogrorecalculolog9" name="idlogrorecalculolog9" style="display:none" value="">        
      <input type="text" class="form-control" id="foliorecalculolog9" name="foliorecalculolog9" style="display:none" value="">            
      <input type="text" class="form-control" id="idintegranterecalculolog9" name="idintegranterecalculolog9" style="display:none" value="">        
      <input type="text" class="form-control" id="edadintemodalrecalculolog9" name="edadintemodalrecalculolog9" style="display: none" placeholder="" value="">        
      <center><button align="center" id="recalculologro9" type="button" onclick="modalrecalculolog9($('#idlogrorecalculolog9').val(),$('#foliorecalculolog9').val(),$('#idintegranterecalculolog9').val(),$('#edadintemodalrecalculolog9').val());" class="btn btn-success">Realizar Preguntas</button>
      <button id="cerrarrecalculolog9"type="button" class="btn btn-default" data-dismiss="modal">Cancelar y Cerrar</button></center>
      </div>  
    </div>
  </div>
</div>
</div>
<!-- modal para recalcular logro 9-->
<!-- modal recalculo logro 9 inicio-->
<div class="modal fade" id="Modallogro9recalculo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" data-keyboard="false" data-backdrop="static">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
       <div class="row" id="mensajelogro9recalculo" align="center" name="mensajelogro10recalculomenores" style="display: none"><label><h1 class="control-label" id="exampleModalLabel">Recalculo del logro 9 realizado</h1></label></div>    
        <!--inicio radio una sola seleccion-->
            <div class="row">
            <div id="c9p30div" name="c9p30div" class="form-group col-md-12 form-group-sm has-error">   
            <label class="control-label">1.Tiene un negocio o dentro de sus expectativas está la conformacion de un negoció?</label>
            <div class="radio"><label><input type="radio" name="c9p30" id="c9p30" onclick="colocaropcionc9p30('1','valorc9p30','c9p30div');" value="1">Si</label></div>
            <div class="radio"><label><input type="radio" name="c9p30" id="c9p30" onclick="colocaropcionc9p30('2','valorc9p30','c9p30div');" value="2">No</label></div> 
            <input type="text" class="form-control" id="valorc9p30" name="valorc9p30" style="display:none" placeholder="Text input" value="">
            </div>
            </div> 
            <!--fin radio una sola seleccion-->
       <!--inicio radio una sola seleccion-->
            <div class="row">
            <div id="c9p34div" name="c9p34div" style="display: none">   
            <label class="control-label">4.Ha recibido algun tipo de apoyo a emprendimiento y/o fortalecimietno para su unidad productiva (diferente a financiamiento)?</label>
            <div class="radio"><label><input type="radio" name="c9p34" id="c9p34" onclick="colocaropcionc9p4reclog9('1','valorc9p34','c9p34div');" value="1">Si</label></div>
            <div class="radio"><label><input type="radio" name="c9p34" id="c9p34a" onclick="colocaropcionc9p4reclog9('2','valorc9p34','c9p34div');" value="2">No</label></div> 
            <input type="text" class="form-control" id="valorc9p34" name="valorc9p34" style="display:none" value="">
            </div>
            </div> 
       <!--fin radio una sola seleccion-->
       <!--Check varias selecciones -->
       <div class="row">
       <div id="c9p35div" name="c9p35div" style="display: none">
       <div id="c9p35o0div" class="has-error"><label class="control-label">5.Ha recibido financiamiento para emprendimiento y/o fortalecimiento para su unidad productiva en las siguientes modalidades</label></div>
       <div id="c9p35o1div" class="has-error">
       <div class="checkbox"><label><input type="checkbox" name="c9p35o1" id="c9p35o1" onclick="cambiarsinoc9p35('SI','c9p35o1','c9p35o1div','c9p35div',9);" value="NO">Credito con entidad financiera</label></div>
       </div>
       <div id="c9p35o2div" class="has-error">
       <div class="checkbox"><label><input type="checkbox" name="c9p35o2" id="c9p35o2" onclick="cambiarsinoc9p35('SI','c9p35o2','c9p35o2div','c9p35div',9);" value="NO">Credito con agioista o paga diario</label></div>
       </div> 
       <div id="c9p35o3div" class="has-error">
       <div class="checkbox"><label><input type="checkbox" name="c9p35o3" id="c9p35o3" onclick="cambiarsinoc9p35('SI','c9p35o3','c9p35o3div','c9p35div',9);" value="NO">Recursos propios</label></div>
       </div> 
       <div id="c9p35o4div" class="has-error">
       <div class="checkbox"><label><input type="checkbox" name="c9p35o4" id="c9p35o4" onclick="cambiarsinoc9p35('SI','c9p35o4','c9p35o4div','c9p35div',9);" value="NO">Créditos con fondos de emprendimiento</label></div>
       </div>
       <div id="c9p35o5div" class="has-error">
       <div class="checkbox"><label><input type="checkbox" name="c9p35o5" id="c9p35o5" onclick="cambiarsinoc9p35('SI','c9p35o5','c9p35o5div','c9p35div',9);" value="NO">Donaciones</label></div>
       </div>
       <div id="c9p35o6div" class="has-error">
       <div class="checkbox"><label><input type="checkbox" name="c9p35o6" id="c9p35o6" onclick="cambiarsinoc9p35('SI','c9p35o6','c9p35o6div','c9p35div',9);" value="NO">Subsidios</label></div>
       </div>
       <div id="c9p35o7div" class="has-error">
       <div class="checkbox"><label><input type="checkbox" name="c9p35o7" id="c9p35o7" onclick="cambiarsinoc9p35('SI','c9p35o7','c9p35o7div','c9p35div',9);" value="NO">Otros</label></div>
       </div>
       <div id="c9p35o8div" class="has-error">
       <div class="checkbox"><label><input type="checkbox" name="c9p35o8" id="c9p35o8" onclick="cambiarsinoc9p35('SI','c9p35o8','c9p35o8div','c9p35div',9);" value="NO">Ninguna</label></div>
       </div>      
       <div id="c9p35o9div" class="has-error">
       <div class="checkbox"><label><input type="checkbox" name="c9p35o9" id="c9p35o9" onclick="cambiarsinoc9p35('SI','c9p35o9','c9p35o9div','c9p35div',9);" value="NO">No necesita financiamiento</label></div>
       </div>    
        <div  id="c9p35o7cualmostrar" name="c9p35o7cualmostrar" style="display:none">
        <div  id="c9p35o7cualdiv" name="c9p35o7cualdiv" class="form-group col-md-12">
        <label class="control-label">Cual?</label>
        <input type="text" class="form-control text-uppercase" id="c9p35o7cual" onkeypress="return soloLetras(event)"  onchange="validarcampotexcuadrosc9p4reclog9('c9p35o7cualdiv','c9p35o7cual','4')" name="c9p35o7cual" value="98">
        </div>                                                                                                                                             
      </div> 
      </div>
      <!--Fin Chek varias selecciones-->
     </div>           
      <div class="modal-footer">
      <input type="text" class="form-control" id="idintegrantemodal" name="idintegrantemodal" style="display: none" placeholder="" value="">        
      <button id="cerrarrecalculolog9final" type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
      <button id="guardarrecalculolog9final" type="button" class="btn btn-primary" disabled="">Guardar</button>
      </div>  
    </div>
  </div>
</div>
</div>    
<!-- modal recalculo logro 9 final-->
   













<!-- modal para recalcular el logro 10 inicio-->
<div class="modal fade" id="Modalpreguntasrecalculolog10" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" data-keyboard="false" data-backdrop="static">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body"><h3>Realizar las preguntas para recalcular el logro 10?</h3>
      <div class="modal-footer">
      <input type="text" class="form-control" id="idlogrorecalculolog10" name="idlogrorecalculolog10" style="display:none" value="">        
      <input type="text" class="form-control" id="foliorecalculolog10" name="foliorecalculolog10" style="display:none" value="">            
      <input type="text" class="form-control" id="idintegranterecalculolog10" name="idintegranterecalculolog10" style="display:none" value="">        
      <input type="text" class="form-control" id="edadintemodalrecalculolog10" name="edadintemodalrecalculolog10" style="display: none" placeholder="" value="">        
      <center><button align="center" id="recalculologro10" type="button" onclick="modalrecalculolog10($('#idlogrorecalculolog10').val(),$('#foliorecalculolog10').val(),$('#idintegranterecalculolog10').val(),$('#edadintemodalrecalculolog10').val());" class="btn btn-success">Realizar Preguntas</button>
      <button id="cerrarrecalculolog10"type="button" class="btn btn-default" data-dismiss="modal">Cancelar y Cerrar</button></center>
      </div>  
    </div>
  </div>
</div>
</div>
<!-- modal para recalcular logro 10 edad menor a 15 inicio-->
<!-- modal recalculo logro 10 inicio-->
<div class="modal fade" id="Modallogro10recalculomenores15" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" data-keyboard="false" data-backdrop="static">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
       <div class="row" id="mensajelogro10recalculomenores" align="center" name="mensajelogro10recalculomenores" style="display: none"><label><h1 class="control-label" id="exampleModalLabel">Recalculo del logro 10 realizado para menores de 15 años</h1></label></div>    
      <!--inicio check seleccion pregunta 1 capitulo 9R-->
      <div class="row">
      <div id="c9p37diva" name="c9p37diva" class="form-group col-md-12 form-group-sm">
      <div id="c9p37o0diva" class="has-error"><label class="control-label">1. Observe e indague ¿Sí el niño, niña o adolecente realiza alguna de las siguientes actividades? (Selección multiple) AAAAA</label></div>
      <div id="c9p37o1diva" class="has-error">
      <div class="checkbox"><label><input type="checkbox" name="ac9p37o1" id="ac9p37o1" onclick="cambiarsinoc9p37modala('SI','ac9p37o1','c9p37o1diva','c9p37diva',12);" value="NO">Trabajo doméstico</label></div>
      </div>
      <div id="c9p37o2diva" class="has-error">
      <div class="checkbox"><label><input type="checkbox" name="ac9p37o2" id="ac9p37o2" onclick="cambiarsinoc9p37modala('SI','ac9p37o2','c9p37o2diva','c9p37diva',12);" value="NO">Trabajo en minas</label></div>
      </div>  
      <div id="c9p37o3diva" class="has-error">
      <div class="checkbox"><label><input type="checkbox" name="ac9p37o3" id="ac9p37o3" onclick="cambiarsinoc9p37modala('SI','ac9p37o3','c9p37o3diva','c9p37diva',12);" value="NO">Explotación sexual comercial</label></div>
      </div>  
      <div id="c9p37o4diva" class="has-error">
      <div class="checkbox"><label><input type="checkbox" name="ac9p37o4" id="ac9p37o4" onclick="cambiarsinoc9p37modala('SI','ac9p37o4','c9p37o4diva','c9p37diva',12);" value="NO">Reclutamiento para el conflicto armado</label></div>
      </div>  
      <div id="c9p37o5diva" class="has-error">
      <div class="checkbox"><label><input type="checkbox" name="ac9p37o5" id="ac9p37o5" onclick="cambiarsinoc9p37modala('SI','ac9p37o5','c9p37o5diva','c9p37diva',12);" value="NO">Producción y micro tráfico de estupefacientes</label></div>
      </div>
      <div id="c9p37o6diva" class="has-error">
      <div class="checkbox"><label><input type="checkbox" name="ac9p37o6" id="ac9p37o6" onclick="cambiarsinoc9p37modala('SI','ac9p37o6','c9p37o6diva','c9p37diva',12);" value="NO">Ventas ambulantes</label></div>
      </div>
      <div id="c9p37o7diva" class="has-error">
      <div class="checkbox"><label><input type="checkbox" name="ac9p37o7" id="ac9p37o7" onclick="cambiarsinoc9p37modala('SI','ac9p37o7','c9p37o7diva','c9p37diva',12);" value="NO">Reciclaje</label></div>
      </div>
      <div id="c9p37o8diva" class="has-error">
      <div class="checkbox"><label><input type="checkbox" name="ac9p37o8" id="ac9p37o8" onclick="cambiarsinoc9p37modala('SI','ac9p37o8','c9p37o8diva','c9p37diva',12);" value="NO">Trabajo en calle</label></div>
      </div>
      <div id="c9p37o9diva" class="has-error">
      <div class="checkbox"><label><input type="checkbox" name="ac9p37o9" id="ac9p37o9" onclick="cambiarsinoc9p37modala('SI','ac9p37o9','c9p37o9diva','c9p37diva',12);" value="NO">Mendicidad</label></div>
      </div>
      <div id="c9p37o10diva" class="has-error">
      <div class="checkbox"><label><input type="checkbox" name="ac9p37o10" id="ac9p37o10" onclick="cambiarsinoc9p37modala('SI','ac9p37o10','c9p37o10diva','c9p37diva',12);" value="NO">Otra, Cual?</label></div>
      </div>
      <div id="c9p37o11diva" class="has-error">
      <div class="checkbox"><label><input type="checkbox" name="ac9p37o11" id="ac9p37o11" onclick="cambiarsinoc9p37modala('SI','ac9p37o11','c9p37o11diva','c9p37diva',12);" value="NO">Ninguna</label></div>
      </div>
      <div class="row" id="c9p37cualmostrara" name="c9p37cualmostrara" style="display:none">
      <div  id="c9p37cualdiva" name="c9p37cualdiva" class="form-group col-md-12"><label class="control-label">Cual?</label>
      <input type="text" class="form-control text-uppercase" id="c9p37cuala" onkeypress="return soloLetras(event)"  onchange="validarcampotexcuadrosc9p37a('c9p37cualdiva','c9p37cuala')" name="c9p37cuala"   placeholder="Cual?" value="98">
      </div>
      </div>
      </div>
      </div> 
      <!--fin check seleccion pregunta 1 capitulo 9R-->  
      <!--inicio check seleccion pregunta 3 capitulo 9R-->
      <div class="row">
      <div id="c9p39diva" name="c9p39diva" class="form-group col-md-12 form-group-sm" style="display:none">
      <div id="c9p39o0diva" class="has-error"><label class="control-label">3. Ayudas a tus padres, familiares a alguna otra persona en un negocio o cultivo en alguna de las siguientes actividades: (Selección Múltiple)</label></div>
      <div id="c9p39o1diva" class="has-error"><div class="checkbox"><label>
      <input type="checkbox" name="ac9p39o1" id="ac9p39o1" onclick="cambiarsinoc9p39modala('SI','ac9p39o1','c9p39o1diva','c9p39diva',9);" value="NO">Fabricar productos</label></div>
      </div>
      <div id="c9p39o2diva" class="has-error">
      <div class="checkbox"><label><input type="checkbox" name="ac9p39o2" id="ac9p39o2" onclick="cambiarsinoc9p39modala('SI','ac9p39o2','c9p39o2diva','c9p39diva',9);" value="NO">Ayudar a cocinar</label></div>
      </div>  
      <div id="c9p39o3diva" class="has-error">
      <div class="checkbox"><label><input type="checkbox" name="ac9p39o3" id="ac9p39o3" onclick="cambiarsinoc9p39modala('SI','ac9p39o3','c9p39o3diva','c9p39diva',9);" value="NO">Vender Productos o servicios</label></div>
      </div>  
      <div id="c9p39o4diva" class="has-error">
      <div class="checkbox"><label><input type="checkbox" name="ac9p39o4" id="ac9p39o4" onclick="cambiarsinoc9p39modala('SI','ac9p39o4','c9p39o4diva','c9p39diva',9);" value="NO">Llevar Domicilios o hacer mandados</label></div>
      </div>  
      <div id="c9p39o5diva" class="has-error">
      <div class="checkbox"><label><input type="checkbox" name="ac9p39o5" id="ac9p39o5" onclick="cambiarsinoc9p39modala('SI','ac9p39o5','c9p39o5diva','c9p39diva',9);" value="NO">Cultivar la tierra</label></div>
      </div>
      <div id="c9p39o6diva" class="has-error">
      <div class="checkbox"><label><input type="checkbox" name="ac9p39o6" id="ac9p39o6" onclick="cambiarsinoc9p39modala('SI','ac9p39o6','c9p39o6diva','c9p39diva',9);" value="NO">Recolectar cartones y/o botellas</label></div>
      </div>
      <div id="c9p39o7diva" class="has-error">
      <div class="checkbox"><label><input type="checkbox" name="ac9p39o7" id="ac9p39o7" onclick="cambiarsinoc9p39modala('SI','ac9p39o7','c9p39o7diva','c9p39diva',9);" value="NO">No ayudo a nadie en un negocio o cultivo</label></div>
      </div>
      <div id="c9p39o8diva" class="has-error">
      <div class="checkbox"><label><input type="checkbox" name="ac9p39o8" id="ac9p39o8" onclick="cambiarsinoc9p39modala('SI','ac9p39o8','c9p39o8diva','c9p39diva',9);" value="NO">Otras. Cuál?</label></div>
      </div>
      <div class="row" id="c9p39cualmostrara" name="c9p39cualmostrara" style="display:none">
      <div  id="c9p39cualdiva" name="c9p39cualdiva" class="form-group col-md-12"><label class="control-label">Cual?</label>
      <input type="text" class="form-control text-uppercase" id="c9p39cuala" onkeypress="return soloLetras(event)" onchange="validarcampotexcuadrosc9p39a('c9p39cualdiva','c9p39cuala')" name="c9p39cuala" placeholder="Cual?" value="98">
      </div>
      </div>
      </div>
      </div>
      <!--fin check seleccion pregunta 3 capitulo 9R-->
      <!--inicio radio una sola seleccion pregunta 4 capitulo 9R-->
      <div class="row">
      <div id="c9p40diva" name="c9p40diva" class="form-group col-md-12 form-group-sm has-error" style="display:none"><label class="control-label">4.¿Cuánto tiempo a la semana dedica(n) a realizar esta(s) actividad(es)? (Única elección)</label>
      <div class="radio"><label><input type="radio" name="c9p40a" id="c9p40a" onclick="colocaropcionc9p40a('c9p40o1','valorc9p40a','c9p40diva');" value="c9p40o1">De 1 – 5 horas</label></div>
      <div class="radio"><label><input type="radio" name="c9p40a" id="c9p40a" onclick="colocaropcionc9p40a('c9p40o2','valorc9p40a','c9p40diva');" value="c9p40o2">De 6 – 10 horas</label></div>
      <div class="radio"><label><input type="radio" name="c9p40a" id="c9p40a" onclick="colocaropcionc9p40a('c9p40o3','valorc9p40a','c9p40diva');" value="c9p40o3">De 11 – 14 horas</label></div>
      <div class="radio"><label><input type="radio" name="c9p40a" id="c9p40a" onclick="colocaropcionc9p40a('c9p40o4','valorc9p40a','c9p40diva');" value="c9p40o4">De 15 – 19 horas</label></div>
      <div class="radio"><label><input type="radio" name="c9p40a" id="c9p40a" onclick="colocaropcionc9p40a('c9p40o5','valorc9p40a','c9p40diva');" value="c9p40o5">Más de 20 horas</label></div>
      <input type="text" class="form-control" id="valorc9p40a" name="valorc9p40a" style="display: none" value="98">
      </div>
      </div> 
      <!--fin radio una sola seleccion pregunta 4 capitulo 9R-->
      </div>   
      <div class="modal-footer">
      <input type="text" class="form-control" id="idintegrantemodal" name="idintegrantemodal" style="display: none" placeholder="" value="">        
      <button id="cerrarpreval10a14a" type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
      <button id="guardarpreval10a14a" type="button" disabled=""class="btn btn-primary">Guardar</button>
      <button id="siguientec9p37a" type="button" disabled="" class="btn btn-primary" onclick="divc9p37a()" style="display: none">Siguiente</button>
      <button id="siguientec9p39a" type="button" disabled="" class="btn btn-primary" onclick="divc9p39a()" style="display: none">Siguiente</button>
      </div>  
    </div>
  </div>
</div>

<!-- modal recalculo logro 10 edad menor a 15 final-->
<!-- modal recalculo logro 10 edad mayor a 14 y menor a 17 inicio-->
<div class="modal fade" id="Modallogro10recalculomayores14" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" data-keyboard="false" data-backdrop="static">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
      <div class="row" id="mensajelogro10recalculomayores" align="center" name="mensajelogro10recalculomayores" style="display: none"><label><h1 class="control-label" id="exampleModalLabelpreval">Recalculo del logro 10 realizado para integrantes entre 15 y 17 años</h1></label></div> 
      <!--inicio radio una sola seleccion pregunta 1 capitulo 9L-->
      <div class="row">
      <div id="c9p3diva" name="c9p3diva" class="form-group col-md-12 form-group-sm has-error"><label class="control-label">1. En que actividad ocupó la mayor parte del tiempo la semana pasada? (Unica Respuesta)</label>
      <div class="radio"><label><input type="radio" name="ac9p3" id="ac9p3" onclick="colocaropcionc9p3r('ac9p3o1','valorc9p3a','c9p3diva');" value="ac9p3o1">Trabajando</label></div>
      <div class="radio"><label><input type="radio" name="ac9p3" id="ac9p3" onclick="colocaropcionc9p3r('ac9p3o2','valorc9p3a','c9p3diva');" value="ac9p3o2">Buscando trabajo</label></div>
      <div class="radio"><label><input type="radio" name="ac9p3" id="ac9p3" onclick="colocaropcionc9p3r('ac9p3o3','valorc9p3a','c9p3diva');" value="ac9p3o3">Estudiando</label></div>
      <div class="radio"><label><input type="radio" name="ac9p3" id="ac9p3" onclick="colocaropcionc9p3r('ac9p3o4','valorc9p3a','c9p3diva');" value="ac9p3o4">Oficios del hogar</label></div>
      <div class="radio"><label><input type="radio" name="ac9p3" id="ac9p3" onclick="colocaropcionc9p3r('ac9p3o5','valorc9p3a','c9p3diva');" value="ac9p3o5">Incapacitado permanente para trabajar</label></div>
      <div class="radio"><label><input type="radio" name="ac9p3" id="ac9p3" onclick="colocaropcionc9p3r('ac9p3o6','valorc9p3a','c9p3diva');" value="ac9p3o6">Otra actividad</label></div>
      <div class="row" id="c9p3cualmostrara" name="c9p3cualmostrara" style="display: none">
      <div  id="c9p3cualdiva" name="c9p3cualdiva" class="form-group col-md-12">
      <label class="control-label">Cual?</label>
      <input type="text" class="form-control text-uppercase" id="c9p3cuala" onkeypress="return soloLetras(event)"  onchange="validarcampotexcuadrosc9p3r('c9p3cualdiva','c9p3cuala','1')" name="c9p3cuala"   placeholder="Cual?" value="98">
      </div>
      </div>
      <input type="text" class="form-control" id="valorc9p3a" name="valorc9p3a" style="display: none" value="">
      </div>
      </div> 
      <!--fin radio una sola seleccion pregunta 1 capitulo 9L-->
      <!--inicio radio una sola seleccion pregunta 2 capitulo 9L-->
      <div class="row">
      <div id="c9p4diva" name="c9p4diva"class="form-group col-md-12 form-group-sm has-error" style="display: none"><label class="control-label">2. Además de lo anterior , ¿Realizó la semana pasada alguna actividad paga por una hora o más ó tuvo algún trabajo o negocio por el que recibió ingresos? (Unica Respuesta)</label>
      <div class="radio"><label><input type="radio" name="ac9p4" id="ac9p4" onclick="colocaropcionc9p4ar('1','valorc9p4a','c9p4diva');" value="1">Si</label></div>
      <div class="radio"><label><input type="radio" name="ac9p4" id="ac9p4a" onclick="colocaropcionc9p4ar('2','valorc9p4a','c9p4diva');" value="2">No</label></div> 
      <input type="text" class="form-control" id="valorc9p4a" name="valorc9p4a" style="display: none" value="">
      </div>
      </div> 
      <!--fin radio una sola seleccion pregunta 2 capitulo 9L-->
      <!--inicio radio una sola seleccion pregunta 12 capitulo 9M-->
      <div class="row">
      <div id="c9p19diva" name="c9p19diva" class="form-group col-md-12 form-group-sm has-error" style="display: none"><label class="control-label">12. ¿Han gestionado el permiso para trabajar ante la oficina del Ministerio del Trabajo? (Única respuesta)</label>
      <div class="radio"><label><input type="radio" name="ac9p19" id="ac9p19" onclick="colocaropcionc9p4r('1','valorc9p19a','c9p19diva');" value="1">Si</label></div>
      <div class="radio"><label><input type="radio" name="ac9p19" id="ac9p19a" onclick="colocaropcionc9p4r('2','valorc9p19a','c9p19diva');" value="2" >No</label></div> 
      <input type="text" class="form-control" id="valorc9p19a" name="valorc9p19a" style="display: none" placeholder="Text input" value="">
      </div>
      </div> 
      <!--fin radio una sola seleccion  pregunta 12 capitulo 9M-->
      </div>           
      <div class="modal-footer">
      <input type="text" class="form-control" id="idintegrantemodal" name="idintegrantemodal" style="display: none" placeholder="" value="">        
      <button id="cerrarpreval10a17a" type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
      <button id="guardarpreval10a17a" type="button" class="btn btn-primary" disabled="">Guardar</button>
      </div>  
    </div>
  </div>
</div>
<!-- modal recalculo logro 10 edad mayor a 14 y menor a 18 final-->
   











<!-- modal para recalcular el logro 11 inicio-->
<div class="modal fade" id="Modalpreguntasrecalculolog11" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" data-keyboard="false" data-backdrop="static">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body"><h3>Realizar las preguntas para recalcular el logro 11?</h3>
      <div class="modal-footer">
      <input type="text" class="form-control" id="idlogrorecalculolog11" name="idlogrorecalculolog11" style="display:none" value="">        
      <input type="text" class="form-control" id="foliorecalculolog11" name="foliorecalculolog11" style="display:none" value="">            
      <input type="text" class="form-control" id="idintegranterecalculolog11" name="idintegranterecalculolog11" style="display:none" value="">        
      <input type="text" class="form-control" id="edadintemodalrecalculolog11" name="edadintemodalrecalculolog11" style="display: none" placeholder="" value="">        
      <center><button align="center" id="recalculologro11" type="button" onclick="modalrecalculolog11($('#idlogrorecalculolog11').val(),$('#foliorecalculolog11').val(),$('#idintegranterecalculolog11').val(),$('#edadintemodalrecalculolog11').val());" class="btn btn-success">Realizar Preguntas</button>
      <button id="cerrarrecalculolog11"type="button" class="btn btn-default" data-dismiss="modal">Cancelar y Cerrar</button></center>
      </div>  
    </div>
  </div>
</div>
</div>
<!-- modal para recalcular el logro 11 fin-->
<!-- modal recalculo logro 11 inicio-->
<div class="modal fade" id="Modallogro11recalculo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" data-keyboard="false" data-backdrop="static">
<div class="modal-dialog" role="document">
 <div class="modal-content">
  <div class="modal-body">
   <div class="row" id="mensajelogro11recalculo" align="center" name="mensajelogro11recalculo" style="display: none"><label><h1 class="control-label" id="exampleModalLabel">Recalculo del logro 11 realizado</h1></label></div> 
   <!--inicio radio una sola seleccion-->
     <!--inicio radio una sola seleccion-->
            <div class="row">
            <div id="c8p4divreclog11" name="c8p4divreclog11" class="form-group col-md-12 form-group-sm has-error">   
                <label class="control-label">4. ¿... actualmente estudia? (asiste al colegio, escuela o universidad)</label>
                <div class="radio"><label><input type="radio" name="c8p4reclog11" id="c8p4reclog11" onclick="colocaropcionc8p2rec('1','valorc8p4reclog11','c8p4divreclog11');" value="1">Si</label>
                </div><div class="radio"><label><input type="radio" name="c8p4reclog11" id="c8p4reclog11" onclick="colocaropcionc8p2rec('2','valorc8p4reclog11','c8p4divreclog11');" value="2">No</label></div>
                <input type="text" class="form-control" id="valorc8p4reclog11" name="valorc8p4reclog11" style="display:none" placeholder="Text input" value="">
            </div>
            </div> 
            <!--fin radio una sola seleccion-->
            <div class="row" id="c8p2gradomostrar" name="c8p2gradomostrar">
            <div  id="c8p2gradomostrardiv" name="c8p2gradomostrardiv" class="form-group col-md-12 form-group-sm has-error">
                       <label class="control-label">2.b Cual es el ultimo nivel cursado ?</label>
                       <input type="text" class="form-control text-uppercase" id="c8p2gradorecalculolog11" onkeypress="return soloNumeros(event)"  onchange="validarrangorecalculolog11('c8p2gradorecalculolog11',13,0,'c8p2gradomostrardiv')" name="c8p2gradorecalculolog11"   placeholder="El grado solo puede ir de cero(0) a trece (13)" value="">
            </div>
            </div>
  </div>
   <div class="modal-footer">
   <button id="cerrarpregrecalculolog11"type="button" class="btn btn-default" data-dismiss="modal">cerrar</button>
   <button id="guardarrecalculolog11"type="button" disabled="" class="btn btn-primary">guardar</button>
   </div>
   </div>
  </div>
</div>
<!-- modal recalculo logro 11 fin-->
















<!-- modal para recalcular el logro 12 inicio-->
<div class="modal fade" id="Modalpreguntasrecalculolog12" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" data-keyboard="false" data-backdrop="static">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body"><h3>Realizar las preguntas para recalcular el logro 12?</h3>
      <div class="modal-footer">
      <input type="text" class="form-control" id="idlogrorecalculolog12" name="idlogrorecalculolog12" style="display:none" value="">        
      <input type="text" class="form-control" id="foliorecalculolog12" name="foliorecalculolog12" style="display:none" value="">            
      <input type="text" class="form-control" id="idintegranterecalculolog12" name="idintegranterecalculolog12" style="display:none" value="">        
      <input type="text" class="form-control" id="edadintemodalrecalculolog12" name="edadintemodalrecalculolog12" style="display: none" placeholder="" value="">        
      <center><button align="center" id="recalculologro12" type="button" onclick="modalrecalculolog12($('#idlogrorecalculolog12').val(),$('#foliorecalculolog12').val(),$('#idintegranterecalculolog12').val(),$('#edadintemodalrecalculolog12').val());" class="btn btn-success">Realizar Preguntas</button>
      <button id="cerrarrecalculolog12"type="button" class="btn btn-default" data-dismiss="modal">Cancelar y Cerrar</button></center>
      </div>  
    </div>
  </div>
</div>
</div>
<!-- modal para recalcular el logro 12 fin-->
<!-- modal recalculo logro 12 inicio-->
<div class="modal fade" id="Modallogro12recalculo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" data-keyboard="false" data-backdrop="static">
<div class="modal-dialog" role="document">
 <div class="modal-content">
  <div class="modal-body">
   <div class="row" id="mensajelogro12recalculo" align="center" name="mensajelogro12recalculo" style="display: none"><label><h1 class="control-label" id="exampleModalLabel">Recalculo del logro 12 realizado</h1></label></div> 
   <!--inicio radio una sola seleccion-->
    <!--inicio radio una sola seleccion-->
            <div class="row">
            <div id="c8p1div" name="c8p1div" class="form-group col-md-12 form-group-sm has-error">   
                <label class="control-label">1. ¿.…. sabe leer y escribir?  (PARA MAYORES DE 7 AÑOS)</label>
                <div class="radio"><label><input type="radio" name="c8p1" id="c8p1" onclick="colocaropcionc8p1('1','valorc8p1','c8p1div');" value="1">Si</label></div>
                <div class="radio"><label><input type="radio" name="c8p1" id="c8p1" onclick="colocaropcionc8p1('2','valorc8p1','c8p1div');" value="2">No</label></div>               
                <input type="text" class="form-control" id="valorc8p1" name="valorc8p1" style="display:none" placeholder="Text input" value="">
            </div>
            </div> 
    <!--fin radio una sola seleccion-->
  </div>
   <div class="modal-footer">
   <button id="cerrarpregrecalculolog12"type="button" class="btn btn-default" data-dismiss="modal">cerrar</button>
   <button id="guardarrecalculolog12"type="button" disabled="" class="btn btn-primary">guardar</button>
   </div>
   </div>
  </div>
</div>
<!-- modal recalculo logro 12 fin-->






















<!-- modal para recalcular el logro 13 inicio-->
<div class="modal fade" id="Modalpreguntasrecalculolog13" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" data-keyboard="false" data-backdrop="static">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body"><h3>Realizar las preguntas para recalcular el logro 13?</h3>
      <div class="modal-footer">
      <input type="text" class="form-control" id="idlogrorecalculolog13" name="idlogrorecalculolog13" style="display:none" value="">        
      <input type="text" class="form-control" id="foliorecalculolog13" name="foliorecalculolog13" style="display:none" value="">            
      <input type="text" class="form-control" id="idintegranterecalculolog13" name="idintegranterecalculolog13" style="display:none" value="">        
      <input type="text" class="form-control" id="edadintemodalrecalculolog13" name="edadintemodalrecalculolog13" style="display: none" placeholder="" value="">        
      <center><button align="center" id="recalculologro13" type="button" onclick="modalrecalculolog13($('#idlogrorecalculolog13').val(),$('#foliorecalculolog13').val(),$('#idintegranterecalculolog13').val(),$('#edadintemodalrecalculolog13').val());" class="btn btn-success">Realizar Preguntas</button>
      <button id="cerrarrecalculolog13"type="button" class="btn btn-default" data-dismiss="modal">Cancelar y Cerrar</button></center>
      </div>  
    </div>
  </div>
</div>
</div>
<!-- modal para recalcular el logro 13 fin-->
<!-- modal recalculo logro 13 inicio-->
<div class="modal fade" id="Modallogro13recalculo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" data-keyboard="false" data-backdrop="static">
<div class="modal-dialog" role="document">
 <div class="modal-content">
  <div class="modal-body">
   <div class="row" id="mensajelogro13recalculo" align="center" name="mensajelogro13recalculo" style="display: none"><label><h1 class="control-label" id="exampleModalLabel">Recalculo del logro 13 realizado</h1></label></div> 
   <!--inicio radio una sola seleccion-->
   <!--inicio radio una sola seleccion-->
            <div class="row">
            <div id="c8p2div" name="c8p2div" class="form-group col-md-12 form-group-sm has-error">   
            <label class="control-label">2. ¿Cuál es el nivel educativo más alto alcanzado por... y el último grado aprobado en ese nivel? (unica selección)</label>
            <div class="radio"><label><input type="radio" name="c8p1" id="c8p1" onclick="colocaropcionc8p2('c8p2o1','valorc8p2','c8p2div');" value="c8p2o1">Ninguno</label></div>
            <div class="radio"><label><input type="radio" name="c8p1" id="c8p1" onclick="colocaropcionc8p2('c8p2o2','valorc8p2','c8p2div');" value="c8p2o2">Preescolar</label></div>
            <div class="radio"><label><input type="radio" name="c8p1" id="c8p1" onclick="colocaropcionc8p2('c8p2o3','valorc8p2','c8p2div');" value="c8p2o3">Básica primaria (1 a 5)</label></div>
            <div class="radio"><label><input type="radio" name="c8p1" id="c8p1" onclick="colocaropcionc8p2('c8p2o4','valorc8p2','c8p2div');" value="c8p2o4">Básica secundaria (6 a 9)</label></div>
            <div class="radio"><label><input type="radio" name="c8p1" id="c8p1" onclick="colocaropcionc8p2('c8p2o14','valorc8p2','c8p2div');" value="c8p2o14">Media (10)</label></div>
            <div class="radio"><label><input type="radio" name="c8p1" id="c8p1" onclick="colocaropcionc8p2('c8p2o5','valorc8p2','c8p2div');" value="c8p2o5">Media (11,12,13)</label></div>
            <div class="radio"><label><input type="radio" name="c8p1" id="c8p1" onclick="colocaropcionc8p2('c8p2o6','valorc8p2','c8p2div');" value="c8p2o6">Técnico sin título</label></div>
            <div class="radio"><label><input type="radio" name="c8p1" id="c8p1" onclick="colocaropcionc8p2('c8p2o7','valorc8p2','c8p2div');" value="c8p2o7">Técnico con título</label></div>
            <div class="radio"><label><input type="radio" name="c8p1" id="c8p1" onclick="colocaropcionc8p2('c8p2o8','valorc8p2','c8p2div');" value="c8p2o8">Tecnológico sin título</label></div>
            <div class="radio"><label><input type="radio" name="c8p1" id="c8p1" onclick="colocaropcionc8p2('c8p2o9','valorc8p2','c8p2div');" value="c8p2o9">Tecnológico con título</label></div>
            <div class="radio"><label><input type="radio" name="c8p1" id="c8p1" onclick="colocaropcionc8p2('c8p2o10','valorc8p2','c8p2div');" value="c8p2o10">Universitario sin título</label></div>
            <div class="radio"><label><input type="radio" name="c8p1" id="c8p1" onclick="colocaropcionc8p2('c8p2o11','valorc8p2','c8p2div');" value="c8p2o11">Universitario con título</label></div>
            <div class="radio"><label><input type="radio" name="c8p1" id="c8p1" onclick="colocaropcionc8p2('c8p2o12','valorc8p2','c8p2div');" value="c8p2o12">Posgrado sin título</label></div>
            <div class="radio"><label><input type="radio" name="c8p1" id="c8p1" onclick="colocaropcionc8p2('c8p2o13','valorc8p2','c8p2div');" value="c8p2o13">Posgrado con título</label></div>
            <input type="text" class="form-control" id="valorc8p2" name="valorc8p2" style="display:none" placeholder="Text input" value="">
            </div>
      <!-- chachaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa -->          
      
            <div id="c8p2gradodiv" name="c8p2gradodiv" class="form-group col-md-12 form-group-sm">   
            <div class="radio" id="c8p2grado1a5div" name="c8p2grado1a5div" style="display:none">
            <div class="radio">2.b Cual es el ultimo nivel cursado ?<br>
            <label><input type="radio" name="c8p2g" id="c8p2g1" onclick="colocaropcionc8p2grado('1','c8p2grado','c8p2grado1a5div');" value="1">1</label></div>
            <div class="radio"><label><input type="radio" name="c8p2g" id="c8p2g2" onclick="colocaropcionc8p2grado('2','c8p2grado','c8p2grado1a5div');" value="2">2</label></div>
            <div class="radio"><label><input type="radio" name="c8p2g" id="c8p2g3" onclick="colocaropcionc8p2grado('3','c8p2grado','c8p2grado1a5div');" value="3">3</label></div>
            <div class="radio"><label><input type="radio" name="c8p2g" id="c8p2g4" onclick="colocaropcionc8p2grado('4','c8p2grado','c8p2grado1a5div');" value="4">4</label></div>
            <div class="radio"><label><input type="radio" name="c8p2g" id="c8p2g5" onclick="colocaropcionc8p2grado('5','c8p2grado','c8p2grado1a5div');" value="5">5</label></div>
            </div>
                
            <div class="radio" id="c8p2grado6a9div" name="c8p2grado6a9div" style="display:none">    
            <div class="radio">2.b Cual es el ultimo nivel cursado ?<br>
            <label><input type="radio" name="c8p2g" id="c8p2g6" onclick="colocaropcionc8p2grado('6','c8p2grado','c8p2grado6a9div');" value="6">6</label></div>
            <div class="radio"><label><input type="radio" name="c8p2g" id="c8p2g7" onclick="colocaropcionc8p2grado('7','c8p2grado','c8p2grado6a9div');" value="7">7</label></div>
            <div class="radio"><label><input type="radio" name="c8p2g" id="c8p2g8" onclick="colocaropcionc8p2grado('8','c8p2grado','c8p2grado6a9div');" value="8">8</label></div>
            <div class="radio"><label><input type="radio" name="c8p2g" id="c8p2g9" onclick="colocaropcionc8p2grado('9','c8p2grado','c8p2grado6a9div');" value="9">9</label></div>
            </div>
            
            <div class="radio" id="c8p2grado10div" name="c8p2grado10div" style="display:none">        
            <div class="radio">2.b Cual es el ultimo nivel cursado ?<br>
            <label><input type="radio" name="c8p2g" id="c8p2g10" onclick="colocaropcionc8p2grado('10','c8p2grado','c8p2grado10div');" value="10">10</label></div>
            </div> 
            <div class="radio" id="c8p2grado11a13div" name="c8p2grado11a13div" style="display:none">        
            <div class="radio">2.b Cual es el ultimo nivel cursado ?<br>
            <label><input type="radio" name="c8p2g" id="c8p2g11" onclick="colocaropcionc8p2grado('11','c8p2grado','c8p2grado11a13div');" value="11">11</label></div>
            <div class="radio"><label><input type="radio" name="c8p2g" id="c8p2g12" onclick="colocaropcionc8p2grado('12','c8p2grado','c8p2grado11a13div');" value="12">12</label></div>
            <div class="radio"><label><input type="radio" name="c8p2g" id="c8p2g13" onclick="colocaropcionc8p2grado('13','c8p2grado','c8p2grado11a13div');" value="13">13</label></div>
            </div>
            <input type="text" class="form-control" id="c8p2grado" name="c8p2grado" style="display:none" placeholder="Text input" value="">
            </div>    
      <!-- finnn chachaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa -->
            </div> 
            <!--fin radio una sola seleccion-->
            <!--inicio radio una sola seleccion-->
            <div class="row">
            <div id="c8p4div" name="c8p4div" class="form-group col-md-12 form-group-sm has-error">   
            <label class="control-label">4. ¿... actualmente estudia? (asiste al colegio, escuela o universidad)</label>
            <div class="radio"><label><input type="radio" name="c8p4" id="c8p4" onclick="colocaropcionc8p2grado('1','valorc8p4','c8p4div');" value="1">Si</label></div>
            <div class="radio"><label><input type="radio" name="c8p4" id="c8p4" onclick="colocaropcionc8p2grado('2','valorc8p4','c8p4div');" value="2">No</label></div>
            <input type="text" class="form-control" id="valorc8p4" name="valorc8p4" style="display:none" placeholder="Text input" value="">
            </div>
            </div> 
            <!--fin radio una sola seleccion-->
  </div>
   <div class="modal-footer">
   <button id="cerrarpregrecalculolog13"type="button" class="btn btn-default" data-dismiss="modal">cerrar</button>
   <button id="guardarrecalculolog13"type="button" disabled="" class="btn btn-primary">guardar</button>
   </div>
   </div>
  </div>
</div>
<!-- modal recalculo logro 13 fin-->
















<!-- modal para recalcular el logro 22 inicio-->
<div class="modal fade" id="Modalpreguntasrecalculolog22" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" data-keyboard="false" data-backdrop="static">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body"><h3>Realizar las preguntas para recalcular el logro 22?</h3>
      <div class="modal-footer">
      <input type="text" class="form-control" id="idlogrorecalculolog22" name="idlogrorecalculolog22" style="display:none" value="">        
      <input type="text" class="form-control" id="foliorecalculolog22" name="foliorecalculolo22" style="display:none" value="">            
      <input type="text" class="form-control" id="idintegranterecalculolog22" name="idintegranterecalculolog22" style="display:none" value="">        
      <input type="text" class="form-control" id="edadintemodalrecalculolog22" name="edadintemodalrecalculolog22" style="display: none" placeholder="" value="">        
      <center><button align="center" id="recalculologro22" type="button" onclick="modalrecalculolog22($('#idlogrorecalculolog22').val(),$('#foliorecalculolog22').val(),$('#idintegranterecalculolog22').val(),$('#edadintemodalrecalculolog22').val());" class="btn btn-success">Realizar Preguntas</button>
      <button id="cerrarrecalculolog22"type="button" class="btn btn-default" data-dismiss="modal">Cancelar y Cerrar</button></center>
      </div>  
    </div>
  </div>
</div>
</div>
<!-- modal para recalcular el logro 22 fin-->
<!-- modal recalculo logro 22 inicio-->
<div class="modal fade" id="Modallogro22recalculo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" data-keyboard="false" data-backdrop="static">
<div class="modal-dialog" role="document">
 <div class="modal-content">
  <div class="modal-body">
   <div class="row" id="mensajelogro22recalculo" align="center" name="mensajelogro22recalculo" style="display: none"><label><h1 class="control-label" id="exampleModalLabel">Recalculo del logro 22 realizado</h1></label></div> 
   <!--inicio radio una sola seleccion-->
   <!-- <input type="text" class="form-control" id="idintegrantemodalcfaz"  name="idintegrantemodalcfaz" style="display: none" placeholder="" value="">            -->   
   <!--inicio radio una sola seleccion-->
            <div class="row">
            <div id="c5p7div" name="c5p7div" class="form-group col-md-12 form-group-sm has-error">   
            <label class="control-label">7. ¿Cuándo fue la última vez que... se hizo una citología vaginal? (Unica Respuesta)</label>
            <div class="radio"><label><input type="radio" name="c5p7" id="c5p7" onclick="colocaropcionc5p7('c5p7o1','valorc5p7','c5p7div');" value="c5p7o1">Hace menos de un año</label></div>
            <div class="radio"><label><input type="radio" name="c5p7" id="c5p7" onclick="colocaropcionc5p7('c5p7o2','valorc5p7','c5p7div');" value="c5p7o2">Hace más de un año</label></div>
            <div class="radio"><label><input type="radio" name="c5p7" id="c5p7" onclick="colocaropcionc5p7('c5p7o3','valorc5p7','c5p7div');" value="c5p7o3">No se la ha hecho</label></div>
            <input type="text" class="form-control" id="valorc5p7" style="display:none" name="valorc5p7" value="">
            </div>
             
            <div class="radio" id="c5p7rdivmostrar" name="c5p7rdivmostrar" style="display:none"> 
            <div id="c5p7rdiv" name="c5p7rdiv" class="form-group col-md-12 form-group-sm has-error"> 
            <div class="radio">Conoció el resultado?<br>
            <label><input type="radio" name="c5p7r" id="c5p7r1" onclick="colocaropcionc5p7r('1','valorc5p7r','c5p7rdiv');" value="1">Si</label></div>
            <div class="radio">
            <label><input type="radio" name="c5p7r" id="c5p7r2" onclick="colocaropcionc5p7r('2','valorc5p7r','c5p7rdiv');" value="2">No</label></div>     
            <input type="text" class="form-control" id="valorc5p7r" name="valorc5p7r" style="display:none" placeholder="Text input" value=""></div>
            </div>
            </div>    
  <!--fin radio una sola seleccion-->
  <!--Check varias selecciones -->
    <div class="row">
        <div id="c5p8div" name="c5p8div" class="form-group col-md-12 form-group-sm">
        <div id="c5p8o0div" class="has-error">
        <label class="control-label">8. ¿Qué  actividades  en salud  utiliza para  prevenir el càncer de seno?  (Multiple respuesta)</label>
        </div>
        <div id="c5p8o1div" class="has-error">
        <div class="checkbox"><label><input type="checkbox" name="c5p8o1" id="c5p8o1" onclick="cambiarsinoc5p8('SI','c5p8o1','c5p8o1div','c5p8div',5);" value="NO">Autoexamen de seno  cada mes</label></div>
        </div>
        <div id="c5p8o2div" class="has-error">
        <div class="checkbox"><label><input type="checkbox" name="c5p8o2" id="c5p8o2" onclick="cambiarsinoc5p8('SI','c5p8o2','c5p8o2div','c5p8div',5);" value="NO">Exámen Clìnico de seno practicado por el médico ó enfermera  en los últimos 6 meses</label></div>
        </div>
        <div id="c5p8o3div" class="has-error">
        <div class="checkbox"><label><input type="checkbox" name="c5p8o3" id="c5p8o3" onclick="cambiarsinoc5p8('SI','c5p8o3','c5p8o3div','c5p8div',5);" value="NO">Ecografia Mamaria en los últimos 6 meses</label></div>
        </div>  
        <div id="c5p8o4div" class="has-error">
        <div class="checkbox"><label><input type="checkbox" name="c5p8o4" id="c5p8o4" onclick="cambiarsinoc5p8('SI','c5p8o4','c5p8o4div','c5p8div',5);" value="NO">Mamografia en los últimos 12 meses</label></div>
        </div>      
        <div id="c5p8o5div" class=" has-error">
        <div class="checkbox"><label><input type="checkbox" name="c5p8o5" id="c5p8o5" onclick="cambiarsinoc5p8('SI','c5p8o5','c5p8o5div','c5p8div',5);" value="NO">Ninguna de las anteriores</label></div>
        </div>
        </div>
    </div>    
<!--Fin Chek varias selecciones-->
  </div>
   <div class="modal-footer">
   <button id="cerrarpregrecalculolog22"type="button" class="btn btn-default" data-dismiss="modal">cerrar</button>
   <button id="guardarrecalculolog22"type="button" disabled="" class="btn btn-primary">guardar</button>
   </div>
   </div>
  </div>
</div>
<!-- modal recalculo logro 22 fin-->











<!-- modal para recalcular el logro 23 inicio-->
<div class="modal fade" id="Modalpreguntasrecalculolog23" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" data-keyboard="false" data-backdrop="static">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body"><h3>Realizar las preguntas para recalcular el logro 23?</h3>
      <div class="modal-footer">
      <input type="text" class="form-control" id="idlogrorecalculolog23" name="idlogrorecalculolog23" style="display:none" value="">        
      <input type="text" class="form-control" id="foliorecalculolog23" name="foliorecalculolo23" style="display:none" value="">            
      <input type="text" class="form-control" id="idintegranterecalculolog23" name="idintegranterecalculolog23" style="display:none" value="">        
      <input type="text" class="form-control" id="edadintemodalrecalculolog23" name="edadintemodalrecalculolog23" style="display: none" placeholder="" value="">        
      <center><button align="center" id="recalculologro23" type="button" onclick="modalrecalculolog23($('#idlogrorecalculolog23').val(),$('#foliorecalculolog23').val(),$('#idintegranterecalculolog23').val(),$('#edadintemodalrecalculolog23').val());" class="btn btn-success">Realizar Preguntas</button>
      <button id="cerrarrecalculolog23"type="button" class="btn btn-default" data-dismiss="modal">Cancelar y Cerrar </button></center>
      </div>  
    </div>
  </div>
</div>
</div>
<!-- modal para recalcular el logro 23 fin-->
<!-- modal recalculo logro 23 inicio-->
<div class="modal fade" id="Modallogro23recalculo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" data-keyboard="false" data-backdrop="static">
<div class="modal-dialog" role="document">
 <div class="modal-content">
  <div class="modal-body">
   <div class="row" id="mensajelogro23recalculo" align="center" name="mensajelogro23recalculo" style="display: none"><label><h1 class="control-label" id="exampleModalLabel">Recalculo del logro 23 realizado</h1></label></div> 
   <!--inicio radio una sola seleccion-->
   <!-- <input type="text" class="form-control" id="idintegrantemodalcfaz"  name="idintegrantemodalcfaz" style="display: none" placeholder="" value="">            -->   
   

   
   
   
  <!--inicio radio una sola seleccion-->
            <div class="row">
            <div id="c5p12div" name="c5p12div"class="form-group col-md-12 form-group-sm has-error">   
            <label class="control-label">12. Que actividades realiza para prevenir  el cáncer de próstata?(Unica Respuesta)</label>
            <div class="radio"><label><input type="radio" name="c5p12" id="c5p12" onclick="colocaropcionc5p12('c5p12o1','valorc5p12','c5p12div');" value="c5p12o1">Exámen de tacto anal  cada año</label></div>
            <div class="radio"><label><input type="radio" name="c5p12" id="c5p12" onclick="colocaropcionc5p12('c5p12o2','valorc5p12','c5p12div');" value="c5p12o2">Exámen de sangre (Antigeno Prostàtico) cada 6 meses</label></div>
            <div class="radio"><label><input type="radio" name="c5p12" id="c5p12" onclick="colocaropcionc5p12('c5p12o3','valorc5p12','c5p12div');" value="c5p12o3">No realiza</label></div>
            <input type="text" class="form-control" id="valorc5p12" name="valorc5p12" style="display:none" placeholder="Text input" value="">
            </div>
            </div> 
  <!--fin radio una sola seleccion-->    
  </div>
   <div class="modal-footer">
<!--   <input type="text" class="form-control" id="idintegrantemodalcf" name="idintegrantemodalcf"  style="display: none" placeholder="" value="">        -->
   <button id="cerrarpregrecalculolog23"type="button" class="btn btn-default" data-dismiss="modal">cerrar</button>
   <button id="guardarrecalculolog23"type="button" disabled="" class="btn btn-primary">guardar</button>
   </div>
   </div>
  </div>
</div>
<!-- modal recalculo logro 23 fin-->





<!--Inicio Modal imagen cargando-->
<div class="modal fade bs-example-modal-sm" id="modalsinco" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" data-backdrop="static">
                      <div class="modal-dialog modal-sm">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title" id="myModalLabel"><img src="<?php echo IMAGEN, 'cargando.gif'; ?>" alt="Brand"> Calculando el porcentaje de logros </h4>
                            </div>
                            <div class="modal-body">

                            Por favor espere un momento.
                            </div>
                        </div>
                      </div>
                    </div>
<!--Fin Modal-->














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
///////////////////////////////////////Funciones que llaman al controlador para guardar y actualizar////////////////////////////////////////////////////////////////////////    
    $(document).ready(function() // Se utiliza para funciones que funcionan con eventos
    {   
     // PARAMETROS PARA LA TABLA 
     MakeStaticHeader('tr24h', 300, 1100, 52, false);
     // MakeStaticHeader('tr24h2', 500, 1100, 60, false);
        $("#guardarcfaz").click(function ()// funcion que guarda el primer modal exampleModal preguntas cogestor
                {  
                    $.ajax({
                          url: "fc_insertarcf",
                          type: "GET",
                          data: {vfolio : $('#folio').val(), vidintegrantemodal : $('#idintegrantemodalcfaz').val(),viddimension: $('#iddimension').val(), vidlogro: $('#idlogro').val(),vvalorlogromovcf: $('#valorlogromovcfaz').val(),vnombreoportunidadobscf: $('#nombreoportunidadobscfaz').val(),vdoccogestor: $('#doccogestor').val()},
                          dataType: "html",
                          success : function(obj){      
                          ocultardivlogcfaz();    
                          $('#cerrarcfaz').show();  
                          $('#guardarcfaz').hide();
                          }
                        });                    
                });     
        $("#guardarcfe").click(function ()// funcion que guarda el primer modal exampleModal preguntas cogestor
                {  
                    $.ajax({
                          url: "fc_insertarcf",
                          type: "GET",
                          data: {vfolio : $('#folio').val(), vidintegrantemodal : $('#idintegrantemodalcfe').val(),viddimension: $('#iddimension').val(), vidlogro: $('#idlogro').val(),vvalorlogromovcf: $('#valorlogromovcfe').val(),vnombreoportunidadobscf: $('#nombreoportunidadobscfe').val(),vdoccogestor: $('#doccogestor').val()},
                          dataType: "html",
                          success : function(obj){      
                          ocultardivlogcfe();    
                          $('#cerrarcfe').show();  
                          $('#guardarcfe').hide();
                          }
                        });                    
                });
        $("#guardaraz").click(function ()// funcion que guarda el primer modal exampleModal preguntas cogestor
                {  
                    $.ajax({
                          url: "fc_insertarcf",
                          type: "GET",
                          data: {vfolio : $('#folio').val(), vidintegrantemodal : $('#idintegrantemodalaz').val(),viddimension: $('#iddimension').val(), vidlogro: $('#idlogro').val(),vvalorlogromovcf: $('#valorlogromovaz').val(),vnombreoportunidadobscf: $('#nombreoportunidadobsaz').val(),vdoccogestor: $('#doccogestor').val()},
                          dataType: "html",
                          success : function(obj){      
                          ocultardivlogaz();    
                          $('#cerraraz').show();  
                          $('#guardaraz').hide();
                          }
                        });                    
                });
        $("#guardar").click(function ()// funcion que guarda el primer modal exampleModal preguntas cogestor
                {  
                    $.ajax({
                          url: "fc_insertar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(), vidintegrantemodal : $('#idintegrantemodal').val(),viddimension: $('#iddimension').val(), vidlogro: $('#idlogro').val(),vvalorlogromov: $('#valorlogromov').val(),vnombreoportunidadobs: $('#nombreoportunidadobs').val(),vnombreoportunidad: $('#nombreoportunidad').val(),vtelcontactocual: $('#telcontactocual').val(),vdoccogestor: $('#doccogestor').val()},
                          dataType: "html",
                          success : function(obj){      
                          ocultardivlog();    
                          $('#cerrar').show();  
                          $('#guardar').hide();
                          }
                        });                    
                });
                
                
                
                
             
                
                
                
                
                
                
        $("#guardarpreval10a14").click(function ()// funcion que guarda el segundo modal exampleModalpregvallog10a14 preguntas de validacion pregunta 10
                {   
                    if($('#c9p37o11').val()=='SI')
                    {
                    $.ajax({
                          url: "fc_insertarpreval10a14",
                          type: "GET",
                          data: {vfolio : $('#folio').val(), vidintegrantemodal : $('#idintegrantemodal').val(),viddimension: $('#iddimension').val(),vidlogro: $('#idlogro').val(),vc9p37o1: $('#c9p37o1').val(),vc9p37o2: $('#c9p37o2').val(),vc9p37o3: $('#c9p37o3').val(),vc9p37o4: $('#c9p37o4').val(),vc9p37o5: $('#c9p37o5').val(),vc9p37o6: $('#c9p37o6').val(),vc9p37o7: $('#c9p37o7').val(),vc9p37o8: $('#c9p37o8').val(),vc9p37o9: $('#c9p37o9').val(),vc9p37o10: $('#c9p37o10').val(),vc9p37o11: $('#c9p37o11').val(),vc9p37cual: $('#c9p37cual').val(),vc9p39o1: $('#c9p39o1').val(),vc9p39o2: $('#c9p39o2').val(),vc9p39o3: $('#c9p39o3').val(),vc9p39o4: $('#c9p39o4').val(),vc9p39o5: $('#c9p39o5').val(),vc9p39o6: $('#c9p39o6').val(),vc9p39o7: $('#c9p39o7').val(),vc9p39o8: $('#c9p39o8').val(),vc9p39cual: $('#c9p39cual').val(),vvalorc9p40: $('#valorc9p40').val(),vvalorc9p3:'98',vc9p3cual:'98',vvalorc9p4:'98',vvalorc9p19:'98',vedad: $('#edad').val(),vdoccogestor: $('#doccogestor').val()},
                          dataType: "html",
                          success : function(obj){      
                          ocultardivlogpreval10();    
                          $('#cerrarpreval10a14').show();  
                          $('#guardarpreval10a14').hide();
                          }
                        });
                    }else
                    {
                        $.ajax({
                          url: "fc_insertarpreval10a14",
                          type: "GET",
                          data: {vfolio : $('#folio').val(), vidintegrantemodal : $('#idintegrantemodal').val(),viddimension: $('#iddimension').val(),vidlogro: $('#idlogro').val(),vc9p37o1: $('#c9p37o1').val(),vc9p37o2: $('#c9p37o2').val(),vc9p37o3: $('#c9p37o3').val(),vc9p37o4: $('#c9p37o4').val(),vc9p37o5: $('#c9p37o5').val(),vc9p37o6: $('#c9p37o6').val(),vc9p37o7: $('#c9p37o7').val(),vc9p37o8: $('#c9p37o8').val(),vc9p37o9: $('#c9p37o9').val(),vc9p37o10: $('#c9p37o10').val(),vc9p37o11: $('#c9p37o11').val(),vc9p37cual: $('#c9p37cual').val(),vc9p39o1:'98',vc9p39o2:'98',vc9p39o3:'98',vc9p39o4:'98',vc9p39o5:'98',vc9p39o6:'98',vc9p39o7:'98',vc9p39o8:'98',vc9p39cual:'98',vvalorc9p40:'98',vvalorc9p3:'98',vc9p3cual:'98',vvalorc9p4:'98',vvalorc9p19:'98',vedad: $('#edad').val(),vdoccogestor: $('#doccogestor').val()},
                          dataType: "html",
                          success : function(obj){      
                          ocultardivlogpreval10();    
                          $('#cerrarpreval10a14').show();  
                          $('#guardarpreval10a14').hide();
                          }
                        });
                    }
                });
         $("#guardarpreval10a17").click(function ()// funcion que guarda el segundo modal exampleModalpregvallog10a14 preguntas de validacion pregunta 10
                {   
                    $.ajax({
                          url: "fc_insertarpreval10a14",
                          type: "GET",
                          data: {vfolio : $('#folio').val(), vidintegrantemodal : $('#idintegrantemodal').val(),viddimension: $('#iddimension').val(),vidlogro: $('#idlogro').val(),vc9p37o1:'98',vc9p37o2:'98',vc9p37o3:'98',vc9p37o4:'98',vc9p37o5:'98',vc9p37o6:'98',vc9p37o7:'98',vc9p37o8:'98',vc9p37o9:'98',vc9p37o10:'98',vc9p37o11:'98',vc9p37cual:'98',vc9p39o1:'98',vc9p39o2:'98',vc9p39o3:'98',vc9p39o4:'98',vc9p39o5:'98',vc9p39o6:'98',vc9p39o7:'98',vc9p39o8:'98',vc9p39cual:'98',vvalorc9p40:'98',vvalorc9p3: $('#valorc9p3').val(),vc9p3cual:$('#c9p3cual').val(),vvalorc9p4:$('#valorc9p4').val(),vvalorc9p19:$('#valorc9p19').val(),vedad: $('#edad').val(),vdoccogestor: $('#doccogestor').val()},
                          dataType: "html",
                          success : function(obj){      
                          ocultardivlogpreval10m();    
                          $('#cerrarpreval10a17').show();  
                          $('#guardarpreval10a17').hide();
                          }
                        });
                });
        $("#guardarpreval18").click(function ()// funcion que guarda el segundo modal exampleModalpregval18 preguntas de validacion pregunta 18
                {   
                    $.ajax({
                          url: "fc_insertarpreval18",
                          type: "GET",
                          data: {vfolio : $('#folio').val(), vidintegrantemodal : $('#idintegrantemodal').val(),viddimension: $('#iddimension').val(),vidlogro: $('#idlogro').val(),vc5p5o1: $('#c5p5o1').val(),vc5p5o2: $('#c5p5o2').val(),vc5p5o3: $('#c5p5o3').val(),vc5p5o4: $('#c5p5o4').val(),vc5p5o5: $('#c5p5o5').val(),vc5p5o6: $('#c5p5o6').val(),vc5p5o7: $('#c5p5o7').val(),/**vc5p5o8: $('#c5p5o8').val(),**/vc5p5o9: $('#c5p5o9').val(),vc5p5o10: $('#c5p5o10').val(),vc5p5o11: $('#c5p5o11').val(),/**vc5p5o12: $('#c5p5o12').val(),**/vc5p5o13: $('#c5p5o13').val(),/**vc5p5cual: $('#c5p5cual').val(),**/vdoccogestor: $('#doccogestor').val()},
                          dataType: "html",
                          success : function(obj){      
                          ocultardivlogpreval18();    
                          $('#cerrarpreval18').show();  
                          $('#guardarpreval18').hide();
                          }
                        });
                });
        $("#guardarpreval24").click(function ()// funcion que guarda el segundo modal exampleModalpregval24 preguntas de validacion pregunta 24
                {   
                    $.ajax({
                          url: "fc_insertarpreval24",
                          type: "GET",
                          data: {vfolio : $('#folio').val(), vidintegrantemodal : $('#idintegrantemodal').val(),viddimension: $('#iddimension').val(),vidlogro: $('#idlogro').val(),vvalorc6p2: $('#valorc6p2').val(),vvalorc6p3: $('#valorc6p3').val(),vvalorc6p5: $('#valorc6p5').val(),vvalorc6p9: $('#valorc6p9').val(),vdoccogestor: $('#doccogestor').val()},
                          dataType: "html",
                          success : function(obj){      
                          ocultardivlogpreval24();    
                          $('#cerrarpreval24').show();  
                          $('#guardarpreval24').hide();
                          }
                        });
                });
        $("#guardarpreval33").click(function ()// funcion que guarda el segundo modal exampleModalpregval33 preguntas de validacion pregunta 33
                {   
                    $.ajax({
                          url: "fc_insertarpreval33",
                          type: "GET",
                          data: {vfolio : $('#folio').val(), vidintegrantemodal : $('#idintegrantemodal').val(),viddimension: $('#iddimension').val(),vidlogro: $('#idlogro').val(),vc11p1o1 : $('#c11p1o1').val(),vc11p1o2 : $('#c11p1o2').val(),vc11p1o3 : $('#c11p1o3').val(),vc11p1o4 : $('#c11p1o4').val(),vc11p1o5 : $('#c11p1o5').val(),vc11p1o6 : $('#c11p1o6').val(),vc11p1o7 : $('#c11p1o7').val(),vc11p1o8 : $('#c11p1o8').val(),vc11p1cual : $('#c11p1cual').val(),vc11p2o1 : $('#c11p2o1').val(),vc11p2o2 : $('#c11p2o2').val(),vc11p2o3 : $('#c11p2o3').val(),vc11p2o4 : $('#c11p2o4').val(),vc11p2o5 : $('#c11p2o5').val(),vc11p2o6 : $('#c11p2o6').val(),vc11p2o7 : $('#c11p2o7').val(),vc11p2cual : $('#c11p2cual').val(),vc11p3o1 : $('#c11p3o1').val(),vc11p3o2 : $('#c11p3o2').val(),vc11p3o3 : $('#c11p3o3').val(),vc11p3o4 : $('#c11p3o4').val(),vc11p3o5 : $('#c11p3o5').val(),vc11p3o6 : $('#c11p3o6').val(),vc11p3cual : $('#c11p3cual').val(),vdoccogestor: $('#doccogestor').val()},
                          dataType: "html",
                          success : function(obj){      
                          ocultardivlogpreval33();    
                          $('#cerrarpreval33').show();  
                          $('#guardarpreval33').hide();
                          }
                        });
                });
                $("#guardarpreval34").click(function ()// funcion que guarda el segundo modal exampleModalpregval34 preguntas de validacion pregunta 33
                {   
                    $.ajax({
                          url: "fc_insertarpreval34",
                          type: "GET",
                          data: {vfolio : $('#folio').val(), vidintegrantemodal : $('#idintegrantemodal').val(),viddimension: $('#iddimension').val(),vidlogro: $('#idlogro').val(),vc11p4o1 : $('#c11p4o1').val(),vc11p4o2 : $('#c11p4o2').val(),vc11p4o3 : $('#c11p4o3').val(),vc11p4o4 : $('#c11p4o4').val(),vc11p4o5 : $('#c11p4o5').val(),vc11p4o6 : $('#c11p4o6').val(),vc11p4cual : $('#c11p4cual').val(),vc11p5o1 : $('#c11p5o1').val(),vc11p5o2 : $('#c11p5o2').val(),vc11p5o3 : $('#c11p5o3').val(),vc11p5o4 : $('#c11p5o4').val(),vc11p5o5 : $('#c11p5o5').val(),vc11p5o6 : $('#c11p5o6').val(),vc11p5o7 : $('#c11p5o7').val(),vc11p5cual : $('#c11p5cual').val(),vc11p7o1 : $('#c11p7o1').val(),vc11p7o2 : $('#c11p7o2').val(),vc11p7o3 : $('#c11p7o3').val(),vc11p7o4 : $('#c11p7o4').val(),vc11p7o5 : $('#c11p7o5').val(),vc11p7o6 : $('#c11p7o6').val(),vc11p7o7 : $('#c11p7o7').val(),vc11p7cual : $('#c11p7cual').val(),vdoccogestor: $('#doccogestor').val()},
                          dataType: "html",
                          success : function(obj){      
                          ocultardivlogpreval34();    
                          $('#cerrarpreval34').show();  
                          $('#guardarpreval34').hide();
                          }
                        });
                });
                $("#guardarpreval39").click(function ()// funcion que guarda el segundo modal exampleModalpregval34 preguntas de validacion pregunta 33
                {   
                    $.ajax({
                          url: "fc_insertarpreval39",
                          type: "GET",
                          data: {vfolio : $('#folio').val(), vidintegrantemodal : $('#idintegrantemodal').val(),viddimension: $('#iddimension').val(),vidlogro: $('#idlogro').val(),vc10p5o1 : $('#c10p5o1').val(),vc10p5o2 : $('#c10p5o2').val(),vc10p5o3 : $('#c10p5o3').val(),vc10p5o4 : $('#c10p5o4').val(),vc10p5o5 : $('#c10p5o5').val(),vc10p5o6 : $('#c10p5o6').val(),vc10p5o7 : $('#c10p5o7').val(),vc10p5o8 : $('#c10p5o8').val(),vc10p5o9 : $('#c10p5o9').val(),/** vc10p5o10 : $('#c10p5o10').val(),**/vc10p5o11 : $('#c10p5o11').val(),vc10p5o12 : $('#c10p5o12').val(),vc10p5o13 : $('#c10p5o13').val(),/** vc10p5o14 : $('#c10p5o14').val(),**//** vc10p5o15 : $('#c10p5o15').val(),**/vc10p5o16 : $('#c10p5o16').val(),vc10p5o17 : $('#c10p5o17').val(),vc10p5o18 : $('#c10p5o18').val(),vc10p5o19 : $('#c10p5o19').val(),vc10p5o20 : $('#c10p5o20').val(),/** vc10p5o21 : $('#c10p5o21').val(),**/vc10p5o22 : $('#c10p5o22').val(),/** vc10p5o23 : $('#c10p5o23').val(),**/vinstitucion1 : $('#institucion1').val(),vinstitucion2 : $('#institucion2').val(),vc10p5cual : $('#c10p5cual').val(),vdoccogestor: $('#doccogestor').val()},
                          dataType: "html",
                          success : function(obj){      
                          ocultardivlogpreval39();    
                          $('#cerrarpreval39').show();  
                          $('#guardarpreval39').hide();
                          }
                        });
                });




                $("#guardarlogroxoport").click(function ()// funcion que guarda el segundo modal exampleModalpregval34 preguntas de validacion pregunta 33
                {   
                    //alert($('#valoropo').val());alert($('#mejoracondicionesno').val());alert($('#idefectiva').val());

                    if($('#valoropo').val() == 1){
                        var efectiva = 0;
                    }else{
                        var efectiva = $('#idefectiva').val();
                    }

                    if(($('#valoropo').val() == 2 && efectiva == 0) || ($('#valoropo').val() == 3 && efectiva == 0) || ($('#valoropo').val() == 3 && efectiva == 10 && $('#mejoracondicionesno').val() == ''))
                 
                    {
                    mensajitooportunidades('ALERTA:','Debes seleccionar la información solicitada');
                    }
                    else
                    { 
                        $.ajax({
                            url: "fc_insertarlogroxoport",
                            type: "GET",
                            data: {vfolio : $('#folio').val(), vidintegrantemodaloport : $('#idintegrantemodaloport').val(),vidlogro: $('#idlogro').val(),vidoportunidad: $('#idoportunidad').val(),vversion: $('#version').val(),vdoccogestor: $('#doccogestor').val(),vvaloropo: $('#valoropo').val(),videfectiva: efectiva,vmejoracondicionesno: $('#mejoracondicionesno').val()},
                            dataType: "html",
                            success : function(obj){ 
                            ocultardivlogxoport();    
                            }
                            });

                        }


                });
                
                
               
                


                
                
                
                $("#guardarrecalculolog2").click(function ()// funcion que guarda el segundo modal exampleModalpregval34 preguntas de validacion pregunta 33
                {   
                    $.ajax({
                          url: "fc_insertarrecalculolog2",
                          type: "GET",
                          data: {vfoliorecalculolog2 : $('#foliorecalculolog2').val(),vidintegranterecalculolog2: $('#idintegranterecalculolog2').val(), vidlogrorecalculolog2 : $('#idlogrorecalculolog2').val(),vedadintemodalrecalculolog2: $('#edadintemodalrecalculolog2').val(),vvalorc4p8o1: $('#valorc4p8o1').val(),vc4p8o2: $('#c4p8o2').val(),vdoccogestor: $('#doccogestor').val()},
                          dataType: "html",
                          success : function(obj){ 
                          $('#mensajelogro2recalculo').show();  
                          $('#c4p8o1div').hide();
                          $('#c4p8o2m').hide();
                          $('#guardarrecalculolog2').hide();
                          }
                        });
                });
                $("#guardarrecalculolog3").click(function ()// funcion que guarda el segundo modal exampleModalpregval34 preguntas de validacion pregunta 33
                {   
                    $.ajax({
                          url: "fc_insertarrecalculolog3",
                          type: "GET",
                          data: {vfoliorecalculolog3 : $('#foliorecalculolog3').val(),vidintegranterecalculolog3: $('#idintegranterecalculolog3').val(), vidlogrorecalculolog3 : $('#idlogrorecalculolog3').val(),vedadintemodalrecalculolog3: $('#edadintemodalrecalculolog3').val(),vvalorc4p8o1a: $('#valorc4p8o1a').val(),vc4p8o2a: $('#c4p8o2a').val(),vdoccogestor: $('#doccogestor').val()},
                          dataType: "html",
                          success : function(obj){ 
                          $('#mensajelogro3recalculo').show();  
                          $('#c4p8o1div3').hide();
                          $('#c4p8o2m3').hide();
                          $('#guardarrecalculolog3').hide();
                          }
                        });
                });
                $("#guardarrecalculolog5").click(function ()// funcion que guarda el segundo modal exampleModalpregval34 preguntas de validacion pregunta 33
                {   
                    $.ajax({
                          url: "fc_insertarrecalculolog5",
                          type: "GET",
                          data: {vfoliorecalculolog5 : $('#foliorecalculolog5').val(),vidintegranterecalculolog5: $('#idintegranterecalculolog5').val(), vidlogrorecalculolog5 : $('#idlogrorecalculolog5').val(),vedadintemodalrecalculolog5: $('#edadintemodalrecalculolog5').val(),vvalorc4p9: $('#valorc4p9').val(),vdoccogestor: $('#doccogestor').val()},
                          dataType: "html",
                          success : function(obj){ 
                          $('#mensajelogro5recalculo').show();  
                          $('#c4p9div').hide();
                          $('#guardarrecalculolog5').hide();
                          }
                        });
                });
                $("#guardarrecalculolog7").click(function ()// funcion que guarda el segundo modal exampleModalpregval34 preguntas de validacion pregunta 33
                {   
                    $.ajax({
                          url: "fc_insertarrecalculolog7",
                          type: "GET",
                          data: {vfoliorecalculolog7 : $('#foliorecalculolog7').val(),vidintegranterecalculolog7: $('#idintegranterecalculolog7').val(),viddimension: $('#iddimension').val(), vidlogrorecalculolog7 : $('#idlogrorecalculolog7').val(),vedadintemodalrecalculolog7: $('#edadintemodalrecalculolog7').val(),vvalorc9p3recalculolog7: $('#valorc9p3recalculolog7').val(),vc9p3cualrecalculolog7: $('#c9p3cualrecalculolog7').val(),vvalorc9p4recalculolog7: $('#valorc9p4recalculolog7').val(),vvalorc9p5recalculolog7: $('#valorc9p5recalculolog7').val(),vc9p5cualrecalculolog7g: $('#c9p5cualrecalculolog7g').val(),vvalorc9p6: $('#valorc9p6').val(),vdoccogestor: $('#doccogestor').val()},
                          dataType: "html",
                          success : function(obj){ 
                          $('#mensajelogro7recalculo').show();  
                          $('#c9p3divrecalculolog7').hide();
                          $('#c9p4divrecalculolog7').hide();
                          $('#c9p5divrecalculolog7').hide();
                          $('#c9p5cualmostrarrecalculolog7').hide();
                          $('#c9p6div').hide();
                          $('#guardarrecalculolog7').hide();
                          }
                        });
                });
                
                
                $("#guardarrecalculolog8final").click(function ()// funcion que guarda el segundo modal exampleModalpregval34 preguntas de validacion pregunta 33
                {   
                    $.ajax({
                          url: "fc_insertarrecalculolog8",
                          type: "GET",
                          data: {vfoliorecalculolog8 : $('#foliorecalculolog8').val(),vidintegranterecalculolog8: $('#idintegranterecalculolog8').val(),viddimension: $('#iddimension').val(), vidlogrorecalculolog8 : $('#idlogrorecalculolog8').val(),vedadintemodalrecalculolog8: $('#edadintemodalrecalculolog8').val(),vvalorc9p1: $('#valorc9p1').val(),vvalorc9p1cual: $('#valorc9p1cual').val(),vvalorc9p2: $('#valorc9p2').val(),vdoccogestor: $('#doccogestor').val()},
                          dataType: "html",
                          success : function(obj){ 
                          $('#c9p1div').hide();
                          $('#c9p2div').hide();
                          $('#guardarrecalculolog8final').hide();
                          $('#mensajelogro8recalculo').show();  
                          }
                        });
                });
                
                $("#guardarrecalculolog9final").click(function ()// funcion que guarda el segundo modal exampleModalpregval34 preguntas de validacion pregunta 33
                {   
                    if($('#valorc9p30').val()=='2')
                    {
                    $.ajax({
                          url: "fc_insertarrecalculolog9",
                          type: "GET",
                          data: {vfolio : $('#foliorecalculolog9').val(), vidintegrantemodal : $('#idintegranterecalculolog9').val(),viddimension: $('#iddimension').val(),vidlogro: $('#idlogrorecalculolog9').val(),vvalorc9p30: $('#valorc9p30').val(),vvalorc9p34: '98',vc9p35o1: '98',vc9p35o2: '98',vc9p35o3: '98',vc9p35o4: '98',vc9p35o5: '98',vc9p35o6: '98',vc9p35o7: '98',vc9p35o8: '98',vc9p35o9: '98',vc9p35o7cual: '98',vedad: $('#edadintemodalrecalculolog9').val(),vdoccogestor: $('#doccogestor').val()},
                          dataType: "html",
                          success : function(obj){      
                          $('#c9p30div').hide();
                          $('#c9p34div').hide();
                          $('#c9p35div').hide();
                          $('#c9p35o7cualmostrar').hide();
                          $('#guardarrecalculolog9final').hide();
                          $('#mensajelogro9recalculo').show();  
                          $('#cerrarrecalculolog9final').show();
                          }
                        });
                    }else
                    {
                        $.ajax({
                          url: "fc_insertarrecalculolog9",
                          type: "GET",
                          data: {vfolio : $('#foliorecalculolog9').val(), vidintegrantemodal : $('#idintegranterecalculolog9').val(),viddimension: $('#iddimension').val(),vidlogro: $('#idlogrorecalculolog9').val(),vvalorc9p30: $('#valorc9p30').val(),vvalorc9p34: $('#valorc9p34').val(),vc9p35o1: $('#c9p35o1').val(),vc9p35o2: $('#c9p35o2').val(),vc9p35o3: $('#c9p35o3').val(),vc9p35o4: $('#c9p35o4').val(),vc9p35o5: $('#c9p35o5').val(),vc9p35o6: $('#c9p35o6').val(),vc9p35o7: $('#c9p35o7').val(),vc9p35o8: $('#c9p35o8').val(),vc9p35o9: $('#c9p35o9').val(),vc9p35o7cual: $('#c9p35o7cual').val(),vedad: $('#edadintemodalrecalculolog9').val(),vdoccogestor: $('#doccogestor').val()},
                          dataType: "html",
                          success : function(obj){
                          $('#c9p30div').hide();
                          $('#c9p34div').hide();
                          $('#c9p35div').hide();
                          $('#c9p35o7cualmostrar').hide();
                          $('#guardarrecalculolog9final').hide();
                          $('#mensajelogro9recalculo').show();  
                          $('#cerrarrecalculolog9final').show();    
                          }
                        });
                    }
                });
                
                $("#guardarpreval10a14a").click(function ()// funcion que guarda el segundo modal exampleModalpregvallog10a14 preguntas de validacion pregunta 10
                {   
                    if($('#ac9p37o11').val()=='SI')
                    {
                    $.ajax({
                          url: "fc_insertarpreval10a14a",
                          type: "GET",
                          data: {vfolio : $('#foliorecalculolog10').val(), vidintegrantemodal : $('#idintegranterecalculolog10').val(),viddimension: $('#iddimension').val(),vidlogro: $('#idlogrorecalculolog10').val(),vc9p37o1: $('#ac9p37o1').val(),vc9p37o2: $('#ac9p37o2').val(),vc9p37o3: $('#ac9p37o3').val(),vc9p37o4: $('#ac9p37o4').val(),vc9p37o5: $('#ac9p37o5').val(),vc9p37o6: $('#ac9p37o6').val(),vc9p37o7: $('#ac9p37o7').val(),vc9p37o8: $('#ac9p37o8').val(),vc9p37o9: $('#ac9p37o9').val(),vc9p37o10: $('#ac9p37o10').val(),vc9p37o11: $('#ac9p37o11').val(),vc9p37cual: $('#ac9p37cual').val(),vc9p39o1: $('#ac9p39o1').val(),vc9p39o2: $('#ac9p39o2').val(),vc9p39o3: $('#ac9p39o3').val(),vc9p39o4: $('#ac9p39o4').val(),vc9p39o5: $('#ac9p39o5').val(),vc9p39o6: $('#ac9p39o6').val(),vc9p39o7: $('#ac9p39o7').val(),vc9p39o8: $('#ac9p39o8').val(),vc9p39cual: $('#c9p39cuala').val(),vvalorc9p40: $('#valorc9p40a').val(),vvalorc9p3:'98',vc9p3cual:'98',vvalorc9p4:'98',vvalorc9p19:'98',vedad: $('#edadintemodalrecalculolog10').val(),vdoccogestor: $('#doccogestor').val()},
                          dataType: "html",
                          success : function(obj){      
                          $('#c9p37diva').hide();
                          $('#c9p39diva').hide();
                          $('#c9p40diva').hide();
                          $('#guardarpreval10a14a').hide();
                          $('#mensajelogro10recalculomenores').show();  
                          $('#cerrarpreval10a14a').show();
                          }
                        });
                    }else
                    {
                        $.ajax({
                          url: "fc_insertarpreval10a14a",
                          type: "GET",
                          data: {vfolio : $('#foliorecalculolog10').val(), vidintegrantemodal : $('#idintegranterecalculolog10').val(),viddimension: $('#iddimension').val(),vidlogro: $('#idlogrorecalculolog10').val(),vc9p37o1: $('#ac9p37o1').val(),vc9p37o2: $('#ac9p37o2').val(),vc9p37o3: $('#ac9p37o3').val(),vc9p37o4: $('#ac9p37o4').val(),vc9p37o5: $('#ac9p37o5').val(),vc9p37o6: $('#ac9p37o6').val(),vc9p37o7: $('#ac9p37o7').val(),vc9p37o8: $('#ac9p37o8').val(),vc9p37o9: $('#ac9p37o9').val(),vc9p37o10: $('#ac9p37o10').val(),vc9p37o11: $('#ac9p37o11').val(),vc9p37cual: $('#c9p37cuala').val(),vc9p39o1:'98',vc9p39o2:'98',vc9p39o3:'98',vc9p39o4:'98',vc9p39o5:'98',vc9p39o6:'98',vc9p39o7:'98',vc9p39o8:'98',vc9p39cual:'98',vvalorc9p40:'98',vvalorc9p3:'98',vc9p3cual:'98',vvalorc9p4:'98',vvalorc9p19:'98',vedad: $('#edadintemodalrecalculolog10').val(),vdoccogestor: $('#doccogestor').val()},
                          dataType: "html",
                          success : function(obj){      
                          $('#c9p37diva').hide();
                          $('#c9p39diva').hide();
                          $('#c9p40diva').hide();
                          $('#guardarpreval10a14a').hide();
                          $('#mensajelogro10recalculomenores').show();  
                          $('#cerrarpreval10a14a').show();
                          }
                        });
                    }
                });      
                $("#guardarpreval10a17a").click(function ()// funcion que guarda el segundo modal exampleModalpregvallog10a14 preguntas de validacion pregunta 10
                {   
                    $.ajax({
                          url: "fc_insertarpreval10a14a",
                          type: "GET",
                          data: {vfolio : $('#foliorecalculolog10').val(), vidintegrantemodal : $('#idintegranterecalculolog10').val(),viddimension: $('#iddimension').val(),vidlogro: $('#idlogrorecalculolog10').val(),vc9p37o1:'98',vc9p37o2:'98',vc9p37o3:'98',vc9p37o4:'98',vc9p37o5:'98',vc9p37o6:'98',vc9p37o7:'98',vc9p37o8:'98',vc9p37o9:'98',vc9p37o10:'98',vc9p37o11:'98',vc9p37cual:'98',vc9p39o1:'98',vc9p39o2:'98',vc9p39o3:'98',vc9p39o4:'98',vc9p39o5:'98',vc9p39o6:'98',vc9p39o7:'98',vc9p39o8:'98',vc9p39cual:'98',vvalorc9p40:'98',vvalorc9p3: $('#valorc9p3a').val(),vc9p3cual:$('#c9p3cuala').val(),vvalorc9p4:$('#valorc9p4a').val(),vvalorc9p19:$('#valorc9p19a').val(),vedad: $('#edadintemodalrecalculolog10').val(),vdoccogestor: $('#doccogestor').val()},
                          dataType: "html",
                          success : function(obj){      
                       //   ocultardivlogpreval10m();    
                          $('#guardarpreval10a17a').hide();
                          $('#c9p3diva').hide();
                          $('#c9p4diva').hide();
                          $('#c9p19diva').hide();
                          $('#mensajelogro10recalculomayores').show();  
                          $('#cerrarpreval10a17a').show();  
                          }
                        });
                });
                
                
             
                $("#guardarrecalculolog11").click(function ()// funcion que guarda el segundo modal exampleModalpregval34 preguntas de validacion pregunta 33
                {   
                    $.ajax({
                          url: "fc_insertarrecalculolog11",
                          type: "GET",
                          data: {vfoliorecalculolog11 : $('#foliorecalculolog11').val(),vidintegranterecalculolog11: $('#idintegranterecalculolog11').val(), vidlogrorecalculolog11 : $('#idlogrorecalculolog11').val(),vedadintemodalrecalculolog11: $('#edadintemodalrecalculolog11').val(),vvalorc8p4reclog11: $('#valorc8p4reclog11').val(),vc8p2gradorecalculolog11: $('#c8p2gradorecalculolog11').val(),vdoccogestor: $('#doccogestor').val()},
                          dataType: "html",
                          success : function(obj){ 
                          $('#mensajelogro11recalculo').show();  
                          $('#c8p4divreclog11').hide();
                          $('#c8p2gradomostrardiv').hide();
                          $('#guardarrecalculolog11').hide();
                          }
                        });
                });
                $("#guardarrecalculolog12").click(function ()// funcion que guarda el segundo modal exampleModalpregval34 preguntas de validacion pregunta 33
                {   
                    $.ajax({
                          url: "fc_insertarrecalculolog12",
                          type: "GET",
                          data: {vfoliorecalculolog12 : $('#foliorecalculolog12').val(),vidintegranterecalculolog12: $('#idintegranterecalculolog12').val(), vidlogrorecalculolog12 : $('#idlogrorecalculolog12').val(),vedadintemodalrecalculolog12: $('#edadintemodalrecalculolog12').val(),vvalorc8p1: $('#valorc8p1').val(),vdoccogestor: $('#doccogestor').val()},
                          dataType: "html",
                          success : function(obj){ 
                          $('#mensajelogro12recalculo').show();  
                          $('#c8p1div').hide();
                          $('#guardarrecalculolog12').hide();
                          }
                        });
                });
                $("#guardarrecalculolog13").click(function ()// funcion que guarda el segundo modal exampleModalpregval34 preguntas de validacion pregunta 33
                {   
                    $.ajax({
                          url: "fc_insertarrecalculolog13",
                          type: "GET",
                          data: {vfoliorecalculolog13 : $('#foliorecalculolog13').val(),vidintegranterecalculolog13: $('#idintegranterecalculolog13').val(), vidlogrorecalculolog13 : $('#idlogrorecalculolog13').val(),vedadintemodalrecalculolog13: $('#edadintemodalrecalculolog13').val(),vvalorc8p2: $('#valorc8p2').val(),vc8p2grado: $('#c8p2grado').val(),vvalorc8p4 : $('#valorc8p4').val(),vdoccogestor: $('#doccogestor').val()},
                          dataType: "html",
                          success : function(obj){ 
                          $('#mensajelogro13recalculo').show();  
                          $('#c8p2div').hide();
                          $('#c8p2gradodiv').hide();
                          $('#c8p4div').hide();
                          $('#guardarrecalculolog13').hide();
                          }
                        });
                });
                $("#guardarrecalculolog22").click(function ()// funcion que guarda el segundo modal exampleModalpregval34 preguntas de validacion pregunta 33
                {   
                    $.ajax({
                          url: "fc_insertarrecalculolog22",
                          type: "GET",
                          data: {vfoliorecalculolog22 : $('#foliorecalculolog22').val(),vidintegranterecalculolog22: $('#idintegranterecalculolog22').val(), vidlogrorecalculolog22 : $('#idlogrorecalculolog22').val(),vedadintemodalrecalculolog22: $('#edadintemodalrecalculolog22').val(),vvalorc5p7: $('#valorc5p7').val(),vvalorc5p7r: $('#valorc5p7r').val(),vc5p8o1 : $('#c5p8o1').val(),vc5p8o2 : $('#c5p8o2').val(),vc5p8o3 : $('#c5p8o3').val(),vc5p8o4 : $('#c5p8o4').val(),vc5p8o5 : $('#c5p8o5').val(),vdoccogestor: $('#doccogestor').val()},
                          dataType: "html",
                          success : function(obj){ 
                          $('#mensajelogro22recalculo').show();  
                          $('#c5p7div').hide();
                          $('#c5p7rdivmostrar').hide();
                          $('#c5p8div').hide();
                          $('#guardarrecalculolog22').hide();
                          }
                        });
                });
                $("#guardarrecalculolog23").click(function ()// funcion que guarda el segundo modal exampleModalpregval34 preguntas de validacion pregunta 33
                {   
                    $.ajax({
                          url: "fc_insertarrecalculolog23",
                          type: "GET",
                          data: {vfoliorecalculolog23 : $('#foliorecalculolog23').val(),vidintegranterecalculolog23: $('#idintegranterecalculolog23').val(), vidlogrorecalculolog23 : $('#idlogrorecalculolog23').val(),vedadintemodalrecalculolog23: $('#edadintemodalrecalculolog23').val(),vvalorc5p12: $('#valorc5p12').val(),vdoccogestor: $('#doccogestor').val()},
                          dataType: "html",
                          success : function(obj){ 
                          $('#mensajelogro23recalculo').show();  
                          $('#c5p12div').hide();
                          $('#guardarrecalculolog23').hide();
                          }
                        });
                });
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                $("#cerrar").click(function()// funcion que cierra el primer modal exampleModal
                {
                 location.reload();
                });
                $("#cerrarpreval10a14").click(function()// funcion que cierra el primer modal exampleModal
                {
                 location.reload();
                });
                $("#cerrarpreval10a14a").click(function()// funcion que cierra el primer modal exampleModal
                {
                 location.reload();
                });
                $("#cerrarpreval10a17a").click(function()// funcion que cierra el primer modal exampleModal
                {
                 location.reload();
                });
                $("#cerrarpreval10a17").click(function()// funcion que cierra el primer modal exampleModal
                {
                 location.reload();
                });
                $("#cerrarpreval18").click(function()// funcion que cierra el primer modal exampleModal
                {
                 location.reload();
                });
                $("#cerrarpreval24").click(function()// funcion que cierra el primer modal exampleModal
                {
                 location.reload();
                });
                $("#cerrarpreval33").click(function()// funcion que cierra el primer modal exampleModal
                {
                 location.reload();
                });
                $("#cerrarpreval34").click(function()// funcion que cierra el primer modal exampleModal
                {
                 location.reload();
                });
                $("#cerrarpreval39").click(function()// funcion que cierra el primer modal exampleModal
                {
                 location.reload();
                });
                $("#cerrarlogroxoport").click(function()// funcion que cierra el primer modal exampleModal
                {
                 location.reload();
                });
                $("#cerrarlogroxoportsino").click(function()// funcion que cierra el primer modal exampleModal
                {
                 location.reload();
                });
                $("#cerraroporvali").click(function()// funcion que cierra el primer modal exampleModal
                {
                 location.reload();
                });
                $("#cerraroporvali1").click(function()// funcion que cierra el primer modal exampleModal
                {
                 location.reload();
                });
                $("#cerraroporvalid10").click(function()// funcion que cierra el primer modal exampleModal
                {
                 location.reload();
                });
                $("#cerraroporvalid18").click(function()// funcion que cierra el primer modal exampleModal
                {
                 location.reload();
                });
                $("#cerraroporvalid24").click(function()// funcion que cierra el primer modal exampleModal
                {
                 location.reload();
                });
                $("#cerraroporvalid33").click(function()// funcion que cierra el primer modal exampleModal
                {
                 location.reload();
                });
                $("#cerraroporvalid34").click(function()// funcion que cierra el primer modal exampleModal
                {
                 location.reload();
                });
                $("#cerraroporvalid12").click(function()// funcion que cierra el primer modal exampleModal
                {
                 location.reload();
                });
                $("#cerrarcfaz").click(function()// funcion que cierra el primer modal exampleModal
                {
                 location.reload();
                });
                $("#cerrarcfe").click(function()// funcion que cierra el primer modal exampleModal
                {
                 location.reload();
                });
                $("#cerrarcafe").click(function()// funcion que cierra el primer modal exampleModal
                {
                 location.reload();
                });
                $("#cerrarcafeazul").click(function()// funcion que cierra el primer modal exampleModal
                {
                 location.reload();
                });
                $("#cerrarrecalculolog2").click(function()// funcion que cierra el primer modal exampleModal
                {
                 location.reload();
                });
                $("#cerrarrecalculolog3").click(function()// funcion que cierra el primer modal exampleModal
                {
                 location.reload();
                });
                $("#cerrarrecalculolog5").click(function()// funcion que cierra el primer modal exampleModal
                {
                 location.reload();
                });
                $("#cerrarrecalculolog7").click(function()// funcion que cierra el primer modal exampleModal
                {
                 location.reload();
                });
                $("#cerrarrecalculolog8").click(function()// funcion que cierra el primer modal exampleModal
                {
                 location.reload();
                });
                $("#cerrarrecalculolog8final").click(function()// funcion que cierra el primer modal exampleModal
                {
                 location.reload();
                }); 
                $("#cerrarrecalculolog9").click(function()// funcion que cierra el primer modal exampleModal
                {
                 location.reload();
                }); 
                $("#cerrarrecalculolog9final").click(function()// funcion que cierra el primer modal exampleModal
                {
                 location.reload();
                }); 
                $("#cerrarrecalculolog10").click(function()// funcion que cierra el primer modal exampleModal
                {
                 location.reload();
                }); 
                $("#cerrarrecalculolog11").click(function()// funcion que cierra el primer modal exampleModal
                {
                 location.reload();
                });
                $("#cerrarrecalculolog12").click(function()// funcion que cierra el primer modal exampleModal
                {
                 location.reload();
                });
                $("#cerrarrecalculolog13").click(function()// funcion que cierra el primer modal exampleModal
                {
                 location.reload();
                });
                $("#cerrarrecalculolog22").click(function()// funcion que cierra el primer modal exampleModal
                {
                 location.reload();
                });
                $("#cerrarrecalculolog23").click(function()// funcion que cierra el primer modal exampleModal
                {
                 location.reload();
                });
                $("#cerrarpregrecalculolog2").click(function()// funcion que cierra el primer modal exampleModal
                {
                 location.reload();
                });
                $("#cerrarpregrecalculolog3").click(function()// funcion que cierra el primer modal exampleModal
                {
                 location.reload();
                });
                $("#cerrarpregrecalculolog5").click(function()// funcion que cierra el primer modal exampleModal
                {
                 location.reload();
                });
                $("#cerrarpregrecalculolog7").click(function()// funcion que cierra el primer modal exampleModal
                {
                 location.reload();
                });
                $("#cerrarpregrecalculolog11").click(function()// funcion que cierra el primer modal exampleModal
                {
                 location.reload();
                });
                $("#cerrarpregrecalculolog12").click(function()// funcion que cierra el primer modal exampleModal
                {
                 location.reload();
                });
                $("#cerrarpregrecalculolog13").click(function()// funcion que cierra el primer modal exampleModal
                {
                 location.reload();
                });
                $("#cerrarpregrecalculolog22").click(function()// funcion que cierra el primer modal exampleModal
                {
                 location.reload();
                });
                $("#cerrarpregrecalculolog23").click(function()// funcion que cierra el primer modal exampleModal
                {
                 location.reload();
                });
                
                
                
                
                $("#cerrarazul").click(function()// funcion que cierra el primer modal exampleModal
                {
                 location.reload();
                });
                $("#cerraraz").click(function()// funcion que cierra el primer modal exampleModal
                {
                 location.reload();
                });
                //si las preguntas son por hogar mandar idintegrante en 0                
              $("#anterior").click(function ()
              {
                $('#modalsinco').modal('show');
                location.href = "../c_dimensiones/fc_dimensiones?folio=" + $('#folio').val()+"&idintegrante=0"+"&idestacion="+$('#idestacion').val();                    
              });
                //fin de la funcion atras
                $("#salir").click(function ()
        {
         location.href = "../../c_login/fc_vlogin";
        });
    });
function divc9p37a()//funcion que me habilita el div del cap 11 preg 2  
{
 $('#c9p39diva').show();
 $('#c9p37diva').hide();
 $('#c9p40diva').hide();
 $('#siguientec9p37a').hide();
 $('#siguientec9p39a').show();
}   
function divc9p39a()//funcion que me habilita el div del cap 11 preg 2  
{
 $('#c9p39diva').hide();
 $('#c9p37diva').hide();
 $('#c9p40diva').show();
 $('#siguientec9p37a').hide();
 $('#siguientec9p39a').hide();
 $('#guardarpreval10a14a').show();
 $('#guardarpreval10a14a').prop('disabled',true);
}
function divc9p37()//funcion que me habilita el div del cap 11 preg 2  
{
 $('#c9p39div').show();
 $('#c9p37div').hide();
 $('#c9p40div').hide();
 $('#siguientec9p37').hide();
 $('#siguientec9p39').show();
}
function divc9p39()//funcion que me habilita el div del cap 11 preg 2  
{
 $('#c9p39div').hide();
 $('#c9p37div').hide();
 $('#c9p40div').show();
 $('#siguientec9p37').hide();
 $('#siguientec9p39').hide();
 $('#guardarpreval10a14').show();
 $('#guardarpreval10a14').prop('disabled',true);
}
function divc11p2()//funcion que me habilita el div del cap 11 preg 2  
{
 $('#c11p1div').hide();
 $('#c11p2div').show();
 $('#siguientec11p1').hide();
 $('#siguientec11p2').show();
}
function divc11p3()//funcion que me habilita el div del cap 11 preg 3  
{
 $('#c11p1div').hide();
 $('#c11p2div').hide();
 $('#c11p3div').show();
 $('#siguientec11p2').hide();
}
function divc11p4()//funcion que me habilita el div del cap 11 preg 2  
{
 $('#c11p4div').hide();
 $('#c11p5div').show();
 $('#siguientec11p4').hide();
 $('#siguientec11p5').show();
}
function divc11p5()//funcion que me habilita el div del cap 11 preg 2  
{
 $('#c11p5div').hide();
 $('#c11p7div').show();
 $('#siguientec11p5').hide();
 $('#guardarpreval34').show();
}







function modalescogeropcion(idlogro,folio,idinte) // java de la verificacion del cogestor 
{
$('#idlogromodaloporval').val(idlogro);
$('#foliomodaloporval').val(folio);
$('#idintegrantemodaloporval').val(idinte);
$('#Modalseleccionopcion').modal();
}


function modalescogeropcionoporvali3(idlogro,folio,idinte) // java de la verificacion del cogestor 
{
$('#idlogromodaloporval').val(idlogro);
$('#foliomodaloporval').val(folio);
$('#idintegrantemodaloporval').val(idinte);
$('#Modalseleccionopcionoporvali3').modal();
}
function modalescogeropcionoporvali1(idlogro,folio,idinte) // java de la verificacion del cogestor 
{
$('#idlogromodaloporval').val(idlogro);
$('#foliomodaloporval').val(folio);
$('#idintegrantemodaloporval').val(idinte);
$('#Modalseleccionopcionoporvali1').modal();
}

function modalpreguntasrecalculologro2(idlogro,folio,idinte,edad) // java de la verificacion del cogestor
{
$('#idlogrorecalculolog2').val(idlogro);
$('#foliorecalculolog2').val(folio);
$('#idintegranterecalculolog2').val(idinte);
$('#edadintemodalrecalculolog2').val(edad);
$('#Modalpreguntasrecalculolog2').modal();
}
function modalpreguntasrecalculologro3(idlogro,folio,idinte,edad) // java de la verificacion del cogestor
{
$('#idlogrorecalculolog3').val(idlogro);
$('#foliorecalculolog3').val(folio);
$('#idintegranterecalculolog3').val(idinte);
$('#edadintemodalrecalculolog3').val(edad);
$('#Modalpreguntasrecalculolog3').modal();
}
function modalpreguntasrecalculologro5(idlogro,folio,idinte,edad) // java de la verificacion del cogestor
{
$('#idlogrorecalculolog5').val(idlogro);
$('#foliorecalculolog5').val(folio);
$('#idintegranterecalculolog5').val(idinte);
$('#edadintemodalrecalculolog5').val(edad);
$('#Modalpreguntasrecalculolog5').modal();
}
function modalpreguntasrecalculologro7(idlogro,folio,idinte,edad) // java de la verificacion del cogestor
{
$('#idlogrorecalculolog7').val(idlogro);
$('#foliorecalculolog7').val(folio);
$('#idintegranterecalculolog7').val(idinte);
$('#edadintemodalrecalculolog7').val(edad);
$('#Modalpreguntasrecalculolog7').modal();
}
function modalpreguntasrecalculologro8(idlogro,folio,idinte,edad) // java de la verificacion del cogestor
{
$('#idlogrorecalculolog8').val(idlogro);
$('#foliorecalculolog8').val(folio);
$('#idintegranterecalculolog8').val(idinte);
$('#edadintemodalrecalculolog8').val(edad);
$('#Modalpreguntasrecalculolog8').modal();
}
function modalpreguntasrecalculologro9(idlogro,folio,idinte,edad) // java de la verificacion del cogestor
{
$('#idlogrorecalculolog9').val(idlogro);
$('#foliorecalculolog9').val(folio);
$('#idintegranterecalculolog9').val(idinte);
$('#edadintemodalrecalculolog9').val(edad);
$('#Modalpreguntasrecalculolog9').modal();
}
function modalpreguntasrecalculologro10(idlogro,folio,idinte,edad) // java de la verificacion del cogestor
{
$('#idlogrorecalculolog10').val(idlogro);
$('#foliorecalculolog10').val(folio);
$('#idintegranterecalculolog10').val(idinte);
$('#edadintemodalrecalculolog10').val(edad);
$('#Modalpreguntasrecalculolog10').modal();
}
function modalpreguntasrecalculologro11(idlogro,folio,idinte,edad) // java de la verificacion del cogestor
{
$('#idlogrorecalculolog11').val(idlogro);
$('#foliorecalculolog11').val(folio);
$('#idintegranterecalculolog11').val(idinte);
$('#edadintemodalrecalculolog11').val(edad);
$('#Modalpreguntasrecalculolog11').modal();
}
function modalpreguntasrecalculologro12(idlogro,folio,idinte,edad) // java de la verificacion del cogestor
{
$('#idlogrorecalculolog12').val(idlogro);
$('#foliorecalculolog12').val(folio);
$('#idintegranterecalculolog12').val(idinte);
$('#edadintemodalrecalculolog12').val(edad);
$('#Modalpreguntasrecalculolog12').modal();
}
function modalpreguntasrecalculologro13(idlogro,folio,idinte,edad) // java de la verificacion del cogestor
{
$('#idlogrorecalculolog13').val(idlogro);
$('#foliorecalculolog13').val(folio);
$('#idintegranterecalculolog13').val(idinte);
$('#edadintemodalrecalculolog13').val(edad);
$('#Modalpreguntasrecalculolog13').modal();
}
function modalpreguntasrecalculologro22(idlogro,folio,idinte,edad) // java de la verificacion del cogestor
{
$('#idlogrorecalculolog22').val(idlogro);
$('#foliorecalculolog22').val(folio);
$('#idintegranterecalculolog22').val(idinte);
$('#edadintemodalrecalculolog22').val(edad);
$('#Modalpreguntasrecalculolog22').modal();
}
function modalpreguntasrecalculologro23(idlogro,folio,idinte,edad) // java de la verificacion del cogestor
{
$('#idlogrorecalculolog23').val(idlogro);
$('#foliorecalculolog23').val(folio);
$('#idintegranterecalculolog23').val(idinte);
$('#edadintemodalrecalculolog23').val(edad);
$('#Modalpreguntasrecalculolog23').modal();
}













function modalescogeropcionoportdificulcfaz(idlogro,folio,idinte) // java de la verificacion del cogestor
{
$('#idlogromodaloporval').val(idlogro);
$('#foliomodaloporval').val(folio);
$('#idintegrantemodaloporval').val(idinte);
$('#Modalseleccionopcioncfaz').modal();
}

function modalescogeropcionoportdificulcf(idlogro,folio,idinte) // java de la verificacion del cogestor
{
//    alert('modal oportdif');
$('#idlogromodaloporval').val(idlogro);
$('#foliomodaloporval').val(folio);
$('#idintegrantemodaloporval').val(idinte);
$('#Modalseleccionopcioncfe').modal();
}

function modalescogeropcionoportdificulaz(idlogro,folio,idinte) // java de la verificacion del cogestor
{
$('#idlogromodaloporval').val(idlogro);
$('#foliomodaloporval').val(folio);
$('#idintegrantemodaloporval').val(idinte);
$('#Modalseleccionopcionaz').modal();
}


















function modalescogeropcionoportpreval(idlogro,folio,idinte,edad) // java de la verificacion del cogestor
{ 
$('#idlogrooporval').val(idlogro);
$('#foliooporval').val(folio);
$('#idintedaloporval').val(idinte);
$('#edadintemodaloporval').val(edad);
$('#Modalseleccionopcionoporpreval').modal();
}
function modalescogeropcionoportpreval18(idlogro,folio,idinte) // java de la verificacion del cogestor
{ 
$('#idlogrooporval18').val(idlogro);
$('#foliooporval18').val(folio);
$('#idintedaloporval18').val(idinte);
$('#Modalseleccionopcionoporpreval18').modal();
}
function modalescogeropcionoportpreval24(idlogro,folio,idinte) // java de la verificacion del cogestor
{ 
$('#idlogrooporval24').val(idlogro);
$('#foliooporval24').val(folio);
$('#idintedaloporval24').val(idinte);
$('#Modalseleccionopcionoporpreval24').modal();
}
function modalescogeropcionoportpreval33(idlogro,folio,idinte) // java de la verificacion del cogestor
{ 
$('#idlogrooporval33').val(idlogro);
$('#foliooporval33').val(folio);
$('#idintedaloporval33').val(idinte);
$('#Modalseleccionopcionoporpreval33').modal();
}
function modalescogeropcionoportpreval34(idlogro,folio,idinte) // java de la verificacion del cogestor
{ 
$('#idlogrooporval34').val(idlogro);
$('#foliooporval34').val(folio);
$('#idintedaloporval34').val(idinte);
$('#Modalseleccionopcionoporpreval34').modal();
}
function modalescogeropcionoportpreval39(idlogro,folio,idinte) // java de la verificacion del cogestor
{ 
$('#idlogrooporval39').val(idlogro);
$('#foliooporval39').val(folio);
$('#idintedaloporval39').val(idinte);
$('#Modalseleccionopcionoporpreval39').modal();
}
function modalescogeropcionoportverifcog12(idlogro,folio,idinte) // java de la verificacion del cogestor
{ 
$('#idlogrooporver12').val(idlogro);
$('#foliooporver12').val(folio);
$('#idintedaloporver12').val(idinte);
$('#Modalseleccionopcionoporverif12').modal();
}
function modal(idinte) // java de la verificacion del cogestor
{
$('#Modalseleccionopcionoporverif12').hide();    
$('#Modalseleccionopcion').hide();
$('#Modalseleccionopcionoporvali3').hide();
$('#Modalseleccionopcionoporvali1').hide();
$('#exampleModal').modal();
$('#idintegrantemodal').val(idinte);
}
function modalpreguntavalidacion10(idlog,folio,idinte,edad)
{
$('#edad').val(edad);
if ($('#edad').val() <= 14)
{ 
    $('#Modalseleccionopcionoporpreval').hide();
    $('#exampleModalpregvallog10a14').modal();
    $('#idintegrantemodal').val(idinte);
}
else if (($('#edad').val() >= 15 && $('#edad').val() < 18))
{
    $('#Modalseleccionopcionoporpreval').hide();
    $('#exampleModalpregvallog10a17').modal();
    $('#idintegrantemodal').val(idinte);
}
}
function modalpreguntavalidacion18(idlog,folio,idinte)
{
$('#Modalseleccionopcionoporpreval18').hide();
$('#exampleModalpregval18').modal();
$('#idintegrantemodal').val(idinte);
}
function modalpreguntavalidacion24(idlog,folio,idinte)
{
$('#Modalseleccionopcionoporpreval24').hide();
$('#exampleModalpregval24').modal();
$('#idintegrantemodal').val(idinte);
}
function modalpreguntavalidacion33(idlog,folio,idinte)
{
$('#Modalseleccionopcionoporpreval33').hide();    
$('#exampleModalpregval33').modal();
$('#idintegrantemodal').val(idinte);
}
function modalpreguntavalidacion34(idlog,folio,idinte)
{
$('#Modalseleccionopcionoporpreval34').hide();     
$('#exampleModalpregval34').modal();
$('#idintegrantemodal').val(idinte);
}
function modalpreguntavalidacion39(idlog,folio,idinte)
{
$('#Modalseleccionopcionoporpreval39').hide(); 
$('#exampleModalpregval39').modal();
$('#idintegrantemodal').val(idinte);
}







function modalescogeropcionoportdifcfaz(idlogro,folio,idinte)
{
$('#Modalseleccionopcioncf').hide();
$('#exampleModallogrocafeazul').modal();
$('#idintegrantemodalcfaz').val(idinte);
}

function modalescogeropcionoportdife(idlogro,folio,idinte)
{
$('#Modalseleccionopcioncf').hide();
$('#exampleModallogrocafe').modal();
$('#idintegrantemodalcfe').val(idinte);
}

function modalescogeropcionoportdifaz(idlogro,folio,idinte)
{
$('#Modalseleccionopcioncf').hide();
$('#exampleModallogroazul').modal();
$('#idintegrantemodalaz').val(idinte);
}








function modalrecalculolog2(idlogro,folio,idinte,edad)
{
$('#Modalpreguntasrecalculolog2').hide();
$('#Modallogro2recalculo').modal();
$('#idintegranterecalculolog2').val(idinte);
}
function modalrecalculolog3(idlogro,folio,idinte,edad)
{
$('#Modalpreguntasrecalculolog3').hide();
$('#Modallogro3recalculo').modal();
$('#idintegranterecalculolog3').val(idinte);
}
function modalrecalculolog5(idlogro,folio,idinte,edad)
{
$('#Modalpreguntasrecalculolog5').hide();
$('#Modallogro5recalculo').modal();
$('#idintegranterecalculolog5').val(idinte);
}
function modalrecalculolog7(idlogro,folio,idinte,edad)
{
$('#Modalpreguntasrecalculolog7').hide();
$('#Modallogro7recalculo').modal();
$('#idintegranterecalculolog7').val(idinte);
}
function modalrecalculolog8(idlogro,folio,idinte,edad)
{
$('#Modalpreguntasrecalculolog8').hide();
$('#Modallogro8recalculo').modal();
$('#idintegranterecalculolog8').val(idinte);
}
function modalrecalculolog9(idlogro,folio,idinte,edad)
{
$('#Modalpreguntasrecalculolog9').hide();
$('#Modallogro9recalculo').modal();
$('#idintegranterecalculolog9').val(idinte);
}
function modalrecalculolog10(idlog,folio,idinte,edad)
{
$('#edad').val(edad);
if ($('#edad').val() <= 14)
{ 
    $('#Modalpreguntasrecalculolog10').hide();
    $('#Modallogro10recalculomenores15').modal();
    $('#idintegrantemodalreclog10').val(idinte);
}
else if (($('#edad').val() >= 15 && $('#edad').val() < 18))
{
    $('#Modalpreguntasrecalculolog10').hide();
    $('#Modallogro10recalculomayores14').modal();
    $('#idintegrantemodalreclog10').val(idinte);
}
}
function modalrecalculolog11(idlogro,folio,idinte,edad)
{
$('#Modalpreguntasrecalculolog11').hide();
$('#Modallogro11recalculo').modal();
$('#idintegranterecalculolog11').val(idinte);
}
function modalrecalculolog12(idlogro,folio,idinte,edad)
{
$('#Modalpreguntasrecalculolog12').hide();
$('#Modallogro12recalculo').modal();
$('#idintegranterecalculolog12').val(idinte);
}
function modalrecalculolog13(idlogro,folio,idinte,edad)
{
$('#Modalpreguntasrecalculolog13').hide();
$('#Modallogro13recalculo').modal();
$('#idintegranterecalculolog13').val(idinte);
}
function modalrecalculolog22(idlogro,folio,idinte,edad)
{
$('#Modalpreguntasrecalculolog22').hide();
$('#Modallogro22recalculo').modal();
$('#idintegranterecalculolog22').val(idinte);
}
function modalrecalculolog23(idlogro,folio,idinte,edad)
{
$('#Modalpreguntasrecalculolog23').hide();
$('#Modallogro23recalculo').modal();
$('#idintegranterecalculolog23').val(idinte);
}




function exampleModallogroxoportunidad(idlog,folio,idinte)
{
    $.ajax({
                          url: "fc_oportunidadxlogroxintegrante",
                          type: "GET",
                          data: {vlogro: idlog,
                                vidintegrante: idinte,
                                vfolio: folio},
                          dataType: "html",
                          success : function(obj){ 
                           
                                $('#tablalogxopor').html(obj);
                                $('#Modalseleccionopcion').hide();
                                $('#Modalseleccionopcionoporpreval').hide();
                                $('#Modalseleccionopcionoporpreval18').hide();
                                $('#Modalseleccionopcionoporpreval24').hide();
                                $('#Modalseleccionopcionoporpreval33').hide();
                                $('#Modalseleccionopcionoporpreval34').hide();
                                $('#Modalseleccionopcionoporpreval39').hide();
                                $('#Modalseleccionopcionoporverif12').hide();
                                $('#Modalseleccionopcioncf').hide();
                                $('#Modalseleccionopcioncfe').hide();
                                $('#Modalseleccionopcioncfaz').hide();
                                $('#Modalseleccionopcionaz').hide();
                                $('#Modalseleccionopcionoporvali3').hide();
                                $('#Modalseleccionopcionoporvali1').hide();
                                $('#exampleModallogroxoport').modal();
                                $('#idintegrantemodaloport').val(idinte);
                          }
                        });

}
function exampleModallogroxoportunidadsino(idoport,idlog,folio,version,valoropo,cidintegrante)
{

    if(valoropo == 2){
        $('#idefectiva').html('<?php echo $datosmc;?>')
        $('#mensajeoportmejcond').show();
        $('#mensajeoportmejcondno').hide();
    }else if (valoropo == 3){
        $('#idefectiva').html('<?php echo $datosmcno;?>')
        $('#mensajeoportmejcond').hide();
        $('#mensajeoportmejcondno').show();
    }else if (valoropo == 1){
        $('#idefectiva').html('<?php echo $datosmcno;?>').hide();
        $('#mensajeoportmejcond').hide();
        $('#mensajeoportmejcondno').hide();
    }
$('#idoportunidad').val(idoport);
$('#version').val(version);
$('#valoropo').val(valoropo);
$('#exampleModallogroxoportsino').modal();
$('#idintegrantemodaloport').val(cidintegrante);
}
function exampleModallogroxoportunidadinfo(idoport)
{
$('#idoportunidadinfo').val(idoport);
                    $.ajax({
                          url: "fc_buscarinfooport",
                          type: "GET",
                          data: {vidoportunidad: $('#idoportunidadinfo').val()},
                          dataType: "json",
                          success : function(obj){ 
                          $('#idoport').html(obj.eidoportunidad); 
                          $('#nombre_oportunidad').html(obj.enombre_oportunidad); 
                          $('#descripcion_oport').html(obj.edescripcion); 
                          $('#requisito_oportunidad').html(obj.erequisito_oportunidad); 
                          $('#ruta_acceso').html(obj.eruta_acceso);
                          $('#fechainicio_oportunidad').html(obj.efechainicio_oportunidad);
                          $('#fechalimite_acercamientoop').html(obj.efechalimite_acercamientoop);
                          $('#fechalimite_efectividadop').html(obj.efechalimite_efectividadop);
                            mostrarmodalinfopor();    
                          }
                        });
}
function mostrarmodalinfopor() 
{
$('#exampleModallogroxoportinformcion').modal();
}
function colocaropcionlogro(opcion,campoval,divcampo) // java validacion de la verificacion del cogestor
{
    $('#' + campoval).val(opcion);
    if(opcion == 'l02')
        {
            $('#infooportunidad').show();
            $('#nombreoportunidad').val('');
            $('#telcontactocual').val('');
            $('#nombreopodiv').show();            
            $('#telcontactodiv').show();            
            $('#nombreopodiv').addClass(' has-error');            
            $('#telcontactodiv').addClass(' has-error');
            $('#nombreopoobsdiv').addClass(' has-error');
            $('#nombreoportunidadobs').val('');
            $('#guardar').prop('disabled', true);
        }
        else
        {
            $('#infooportunidad').hide();
            $('#nombreoportunidad').val('98');
            $('#telcontactocual').val('98');
            $('#nombreopodiv').hide();            
            $('#telcontactodiv').hide();            
            $('#nombreopodiv').removeClass(' has-error');            
            $('#telcontactodiv').removeClass(' has-error');
            $('#nombreopoobsdiv').addClass(' has-error');
            $('#nombreoportunidadobs').val('');
            $('#guardar').prop('disabled', true);
        }
        $('#nombreoportunidadobs').prop('disabled',false);
        validarbolitasytextologro(divcampo,campoval);
}
function validarbolitasytextologro(div,campo)
{ 
   if(($('#'+ campo).val() == '') || ($('#'+ campo).val() == '0'))
   { 
       $('#' + div).addClass(' has-error');
   }
   else
   { 
       $('#' + div).removeClass('has-error');
   }
}
function validarbolitasytextomodallog()
{ 
  if(($('#nombreoportunidadobs').val() !== '')) 
  {
  $('#nombreopoobsdiv').removeClass('has-error');
  }
  else
  {
  $('#nombreopoobsdiv').addClass('has-error');
  }  
  if(($('#nombreoportunidad').val() !== '')) 
  {
  $('#nombreopodiv').removeClass('has-error');
  }
  else
  {
  $('#nombreopodiv').addClass('has-error');
  }
  if(($('#telcontactocual').val() !== '')) 
  {
  $('#telcontactodiv').removeClass('has-error');
  }
  else
  {
  $('#telcontactodiv').addClass('has-error');
  }
  if(($('#nombreoportunidad').val() !== '') && ($('#telcontactocual').val() !== '') && ($('#nombreoportunidadobs').val() !== '') && ($('#valorlogromov').val() !== ''))
  { 
  $('#guardar').prop('disabled', false);
  }
  else
  { 
  $('#guardar').prop('disabled', true);
  }
}






function colocaropcionlogrocfaz(opcion,campoval,divcampo) // java validacion de la verificacion del cogestor de cafe o azul
{
    $('#' + campoval).val(opcion);
    $('#nombreoportunidadobscfaz').prop('disabled',false);
    validarbolitasytextologrocfaz(divcampo,campoval);
}
function validarbolitasytextologrocfaz(div,campo)
{ 
   if(($('#'+ campo).val() == '') || ($('#'+ campo).val() == '0'))
   { 
       $('#' + div).addClass(' has-error');
   }
   else
   { 
       $('#' + div).removeClass('has-error');
   }
}
function validarbolitasytextomodallogcfaz()
{ 
  if(($('#nombreoportunidadobscfaz').val() !== '')) 
  {
  $('#nombreopoobsdivcfaz').removeClass('has-error');
  }
  else
  {
  $('#nombreopoobsdivcfaz').addClass('has-error');
  }  
  if(($('#nombreoportunidadobscfaz').val() !== ''))
  { 
  $('#guardarcfaz').prop('disabled', false);
  }
  else
  { 
  $('#guardarcfaz').prop('disabled', true);
  }
}




function colocaropcionlogrocfe(opcion,campoval,divcampo) // java validacion de la verificacion del cogestor de cafe o azul
{
    $('#' + campoval).val(opcion);
    $('#nombreoportunidadobscfe').prop('disabled',false);
    validarbolitasytextologrocfe(divcampo,campoval);
}
function validarbolitasytextologrocfe(div,campo)
{ 
   if(($('#'+ campo).val() == '') || ($('#'+ campo).val() == '0'))
   { 
       $('#' + div).addClass(' has-error');
   }
   else
   { 
       $('#' + div).removeClass('has-error');
   }
}
function validarbolitasytextomodallogcfe()
{ 
  if(($('#nombreoportunidadobscfe').val() !== '')) 
  {
  $('#nombreopoobsdivcfe').removeClass('has-error');
  }
  else
  {
  $('#nombreopoobsdivcfe').addClass('has-error');
  }  
  if(($('#nombreoportunidadobscfe').val() !== ''))
  { 
  $('#guardarcfe').prop('disabled', false);
  }
  else
  { 
  $('#guardarcfe').prop('disabled', true);
  }
}










function colocaropcionlogroaz(opcion,campoval,divcampo) // java validacion de la verificacion del cogestor de cafe o azul
{
    $('#' + campoval).val(opcion);
    $('#nombreoportunidadobsaz').prop('disabled',false);
    validarbolitasytextologroaz(divcampo,campoval);
}
function validarbolitasytextologroaz(div,campo)
{ 
   if(($('#'+ campo).val() == '') || ($('#'+ campo).val() == '0'))
   { 
       $('#' + div).addClass(' has-error');
   }
   else
   { 
       $('#' + div).removeClass('has-error');
   }
}
function validarbolitasytextomodallogaz()
{ 
  if(($('#nombreoportunidadobsaz').val() !== '')) 
  {
  $('#nombreopoobsdivaz').removeClass('has-error');
  }
  else
  {
  $('#nombreopoobsdivaz').addClass('has-error');
  }  
  if(($('#nombreoportunidadobsaz').val() !== ''))
  { 
  $('#guardaraz').prop('disabled', false);
  }
  else
  { 
  $('#guardaraz').prop('disabled', true);
  }
}
function ocultardivlogcfaz()
{
 $('#logrosdivcfaz').hide();
 $('#nombreopoobsdivcfaz').hide();
 $('#mensajeoportmostrarlogrocafeazul').show();
}
function ocultardivlogcfe()
{
 $('#logrosdivcfe').hide();
 $('#nombreopoobsdivcfe ').hide();
 $('#mensajeoportmostrarlogrocafe').show();
}
function ocultardivlogaz()
{
 $('#logrosdivaz').hide();
 $('#nombreopoobsdivaz').hide();
 $('#mensajeoportmostrarlogroazul').show();
}
function ocultardivlog()
{
 $('#logrosdiv').hide();
 $('#nombreopoobsdiv').hide();
 $('#nombreopodiv').hide();
 $('#telcontactodiv').hide();
 $('#mensajeoportmostrar').show();
}
//function ocultardivlogpreval10r()
//{
// $('#c9p37diva').hide();
// $('#c9p39diva').hide();
// $('#c9p40diva').hide();
// $('#mensajecalculopregvallog10').show();
//}
function ocultardivlogpreval10()
{
 $('#c9p37div').hide();
 $('#c9p39div').hide();
 $('#c9p40div').hide();
 $('#mensajecalculopregvallog10').show();
}
function ocultardivlogpreval10m()
{
 $('#c9p3div').hide();
 $('#c9p4div').hide();
 $('#c9p19div').hide();
 $('#mensajecalculopregvallog10m').show();
}
function ocultardivlogpreval18()
{
 $('#c5p5div').hide();
 $('#mensajecalculo18').show();
}
function ocultardivlogpreval24()
{
 $('#c6p2div').hide();
 $('#c6p3div').hide();
 $('#c6p5div').hide();
 $('#c6p9div').hide();
 $('#mensajecalculo24').show();
}
function ocultardivlogpreval33()
{
 $('#c11p1div').hide();
 $('#c11p2div').hide();
 $('#c11p3div').hide();
 $('#mensajecalculo33').show();
}
function ocultardivlogpreval34()
{
 $('#c11p4div').hide();
 $('#c11p5div').hide();
 $('#c11p7div').hide();
 $('#mensajecalculo34').show();
}
function ocultardivlogpreval39()
{
 $('#c10p5div').hide();
 $('#mensajecalculo39').show();
}
function ocultardivlogxoport()
{
 $('#exampleModallogroxoportsino').hide();   
 $('#modallogroxoport').hide();
 $('#modallogroxoporttabla').hide(); 
 $('#mensajecalculologroxoport').show();
}
// inicio funcion para validar el logro 10 capitulo 9 preg 37
function cambiarsinoc9p37modal(opcion,campoval,divcampo,divcompleto,campos) // java de la pregunta 37
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
    if(campoval == 'c9p37o10')
        {
            if($('#' + campoval).val() == 'SI')
            {
                $('#c9p37cualmostrar').show();
                $('#c9p37cual').val('');
                $('#c9p37cualdiv').addClass(' has-error');            
            }
            else
            {
                $('#c9p37cualmostrar').hide();
                $('#c9p37cual').val('98');
                $('#c9p37cualdiv').removeClass(' has-error');
            }
        }   
    if(campoval == 'c9p37o11')
           {
            if($('#' + campoval).val() == 'SI')
            {
              $('#c9p37o1').prop('checked' , false);
              $('#c9p37o1div').addClass(' has-error');
              $('#c9p37o2').prop('checked' , false);
              $('#c9p37o2div').addClass(' has-error');
              $('#c9p37o3').prop('checked' , false);
              $('#c9p37o3div').addClass(' has-error');
              $('#c9p37o4').prop('checked' , false);
              $('#c9p37o4div').addClass(' has-error');
              $('#c9p37o5').prop('checked' , false);
              $('#c9p37o5div').addClass(' has-error');
              $('#c9p37o6').prop('checked' , false);
              $('#c9p37o6div').addClass(' has-error');
              $('#c9p37o7').prop('checked' , false);
              $('#c9p37o7div').addClass(' has-error');
              $('#c9p37o8').prop('checked' , false);
              $('#c9p37o8div').addClass(' has-error');
              $('#c9p37o9').prop('checked' , false);
              $('#c9p37o9div').addClass(' has-error');
              $('#c9p37o10').prop('checked' , false);
              $('#c9p37o10div').addClass(' has-error');
              
              $('#c9p37cualmostrar').hide();
              $('#c9p37cual').val('98');
                            
              $('#c9p37o1').val('NO');
              $('#c9p37o2').val('NO');
              $('#c9p37o3').val('NO');
              $('#c9p37o4').val('NO');
              $('#c9p37o5').val('NO');
              $('#c9p37o6').val('NO');
              $('#c9p37o7').val('NO');
              $('#c9p37o8').val('NO');
              $('#c9p37o9').val('NO');
              $('#c9p37o10').val('NO');
              
              $('#guardarpreval10a14').hide();
              $('#siguientec9p37').show();
              $('#siguientec9p37').prop('disabled',false);
              }else{
              $('#siguientec9p37').hide();
              $('#guardarpreval10a14').show();
              $('#guardarpreval10a14').prop('disabled',true);  
              }
           }
        else
       {
          $('#c9p37o11').prop('checked' , false); 
          $('#c9p37o11').val('NO');
          $('#c9p37o11div').addClass(' has-error');
          $('#siguientec9p37').hide();
          $('#guardarpreval10a14').show();
          $('#guardarpreval10a14').prop('disabled',false);
       }
        validarcuadrosc9p37();
}
function validarcuadrosc9p37(divcuadro,ncampos)
{
    if ($('#c9p37cual').val() != '')
    {
    for(i=1;i<=11;i++){
    if($('#c9p37o'+i).val() == 'SI'){
       $('#guardarpreval10a14').prop('disabled', false);
        break;
        }
        else
        {
         $('#guardarpreval10a14').prop('disabled', true);
        }
        }
    }
    else
    {
           $('#guardarpreval10a14').prop('disabled', true);
    }
}
function validarcampotexcuadrosc9p37(div,campo,ncampos)
{
    validarbolitasytextoc9p37(div,campo);
    validarcuadrosc9p37(div,ncampos);
}
function validarbolitasytextoc9p37(div,campo)
{ 
   if(($('#'+ campo).val() == '') || ($('#'+ campo).val() == '0') || ($('#'+ campo).val() == '98'))
   { 
       $('#' + div).addClass(' has-error');
   }
   else
   { 
       $('#' + div).removeClass('has-error');
   }
    validarguardarc9p37();
}
function validarguardarc9p37()
{  if($('.has-error').length === 0)
   {
       $('#guardarpreval10a14').prop('disabled', false);
   }
   else
   {
       $('#guardarpreval10a14').prop('disabled', true);
   }
}
// fin funcion para validar el logro 10 capitulo 9 preg 37
// inicio funcion para validar el logro 10 capitulo 9 preg 39
function cambiarsinoc9p39modal(opcion,campoval,divcampo,divcompleto,campos,mostrar)
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
    if(campoval == 'c9p39o8')
        {
            if($('#' + campoval).val() == 'SI')
            {
                $('#c9p39cualmostrar').show();
                $('#c9p39cual').val('');
                $('#c9p39cualdiv').addClass(' has-error');            
            }
            else
            {
                $('#c9p39cualmostrar').hide();
                $('#c9p39cual').val('98');
                $('#c9p39cualdiv').removeClass(' has-error');
            }
        }
       if(campoval == 'c9p39o7')
           {
            if($('#' + campoval).val() == 'SI')
            {
              $('#c9p39o1').prop('checked' , false);
              $('#c9p39o1div').addClass(' has-error');
              $('#c9p39o2').prop('checked' , false);
              $('#c9p39o2div').addClass(' has-error');
              $('#c9p39o3').prop('checked' , false);
              $('#c9p39o3div').addClass(' has-error');
              $('#c9p39o4').prop('checked' , false);
              $('#c9p39o4div').addClass(' has-error');
              $('#c9p39o5').prop('checked' , false);
              $('#c9p39o5div').addClass(' has-error');
              $('#c9p39o6').prop('checked' , false);
              $('#c9p39o6div').addClass(' has-error');
              $('#c9p39o8').prop('checked' , false);
              $('#c9p39o8div').addClass(' has-error');
              $('#c9p39cualmostrar').hide();
              $('#c9p39cual').val('98');
              $('#c9p39o1').val('NO');
              $('#c9p39o2').val('NO');
              $('#c9p39o3').val('NO');
              $('#c9p39o4').val('NO');
              $('#c9p39o5').val('NO');
              $('#c9p39o6').val('NO');
              $('#c9p39o8').val('NO');
              $('#siguientec9p39').hide();
              $('#guardarpreval10a14').show();
              $('#guardarpreval10a14').prop('disabled',false);
              }
              else
              {
              $('#guardarpreval10a14').hide();
              $('#siguientec9p39').show();
              $('#siguientec9p39').prop('disabled',true);  
              }
           }
        else
       {
          $('#c9p39o7').prop('checked' , false); 
          $('#c9p39o7').val('NO');
          $('#c9p39o7div').addClass(' has-error');
          $('#guardarpreval10a14').hide();
          $('#siguientec9p39').show();
          $('#siguientec9p39').prop('disabled',false);
      }
      validarcuadrosc9p39(divcompleto,campos);
}
function validarcuadrosc9p39(divcuadro,ncampos)
{
    if ($('#c9p39cual').val() != '')
    {
    for(i=1;i<=8;i++){
    if($('#c9p39o'+i).val() == 'SI'){
       $('#siguientec9p39').prop('disabled', false);
        break;
        }
        else
        {
         $('#siguientec9p39').prop('disabled', true);
        }
        }
    }
    else
    {
           $('#siguientec9p39').prop('disabled', true);
    }
}
function validarcampotexcuadrosc9p39(div,campo,ncampos)
{
    validarbolitasytextoc9p39(div,campo);
    validarcuadrosc9p39(div,ncampos);
}
function validarbolitasytextoc9p39(div,campo)
{ 
   if(($('#'+ campo).val() == '') || ($('#'+ campo).val() == '0') || ($('#'+ campo).val() == '98'))
   { 
       $('#' + div).addClass(' has-error');
   }
   else
   { 
       $('#' + div).removeClass('has-error');
   }
    validarguardarc9p39();
}
function validarguardarc9p39()
{  if($('.has-error').length === 0)
   {
       $('#siguientec9p39').prop('disabled', false);
   }
   else
   {
       $('#siguientec9p39').prop('disabled', true);
   }
}
// fin funcion para validar el logro 10 capitulo 9 preg 39
// inicio funcion para validar el logro 10 capitulo 9 preg 40
function validarguardarc9p40()
{
   if($('.has-error').length === 0)
   {
       $('#guardarpreval10a14').show();
       $('#guardarpreval10a14').prop('disabled',true);       
   }
   else
   {
       $('#guardarpreval10a14').show();
       $('#guardarpreval10a14').prop('disabled',false);
   }
}
function validarbolitasytextoc9p40(div,campo)
{ //alert(div + ' juanpis ' + campo);
   if(($('#'+ campo).val() == '') || ($('#'+ campo).val() == '0') || ($('#'+ campo).val() == '98'))
   { 
       $('#' + div).addClass(' has-error');
   }
   else
   { 
       $('#' + div).removeClass('has-error');
   }
    validarguardarc9p40();
}
function colocaropcionc9p40(opcion,campoval,divcampo)
{
    $('#' + campoval).val(opcion);
    validarbolitasytextoc9p40(divcampo,campoval);
}
// fin funcion para validar el logro 10 capitulo 9 preg 39
// inicio funcion para validar el logro 10 capitulo 9 preg 3
function validarguardarc9p3()
{  
    if($('#valorc9p3').val() !=="" && $('#valorc9p4').val() !=="" && $('#valorc9p19').val() !=="" && $('#c9p3cual').val() !=="")
   {
       $('#guardarpreval10a17').prop('disabled', false);
    }
   else
   {
       $('#guardarpreval10a17').prop('disabled', true);
   }
}
//validar bolitas y texto
function validarbolitasytextoc9p3(div,campo)
{ //alert(div + ' juanpis ' + campo);
   if(($('#'+ campo).val() == '') || ($('#'+ campo).val() == '0'))
   { 
       $('#' + div).addClass(' has-error');
   }
   else
   { 
       $('#' + div).removeClass('has-error');
   }
    validarguardarc9p3();
}
// colocar opcion para todos
function colocaropcionc9p3(opcion,campoval,divcampo)
{
    $('#' + campoval).val(opcion);
    if(opcion == 'c9p3o1')
        {
            $('#c9p4div').hide();
            $('#valorc9p4').val('98');
            $('#c9p4div').removeClass('has-error'); 
            $('#c9p4').prop('checked',false);
            $('#c9p4a').prop('checked',false);
            
            $('#c9p19div').show();
            $('#valorc9p19').val('');
            $('#c9p19div').addClass('has-error');            
            $('#c9p19').prop('checked',false);
            $('#c9p19a').prop('checked',false);
        }
        else
        {
            $('#c9p19div').hide();
            $('#valorc9p19').val('98');
            $('#c9p19div').removeClass('has-error'); 
            $('#c9p19').prop('checked',false);
            $('#c9p19a').prop('checked',false);
            
            $('#c9p4div').show();
            $('#valorc9p4').val('');
            $('#c9p4div').addClass('has-error');
            $('#c9p4').prop('checked',false);
            $('#c9p4a').prop('checked',false);
            
        }
       if(opcion == 'c9p3o6')
        {
            $('#c9p3cualmostrar').show();
            $('#c9p3cual').val('');
            $('#c9p3cualdiv').addClass(' has-error');            
        }
        else
        {
            $('#c9p3cualmostrar').hide();
            $('#c9p3cual').val('98');
            $('#c9p3cualdiv').removeClass(' has-error');            
        }
    validarbolitasytextoc9p3(divcampo,campoval);
}
function colocaropcionc9p4a(opcion,campoval,divcampo)
{
    $('#' + campoval).val(opcion);
    if(opcion == '1')
        {
            $('#c9p19div').show();
            $('#valorc9p19').val('');
            $('#c9p19div').addClass('has-error');            
            $('#c9p19').prop('checked',false);
            $('#c9p19a').prop('checked',false);
        }
        else
        {
            $('#c9p19div').hide();
            $('#valorc9p19').val('98');
            $('#c9p19div').removeClass('has-error'); 
            $('#c9p19').prop('checked',false);
            $('#c9p19a').prop('checked',false);
            
        }
    
    validarbolitasytextoc9p3(divcampo,campoval);
}
function colocaropcionc9p4(opcion,campoval,divcampo)
{
    $('#' + campoval).val(opcion);
    validarbolitasytextoc9p3(divcampo,campoval);
}
//de aca para arriba es logica de bolas y textos
function validarcampotexcuadrosc9p3(div,campo,ncampos)
{
    validarbolitasytextoc9p3(div,campo);
    validarcuadrosc9p3(div,ncampos);
}
// fin funcion para validar el logro 10 capitulo 9 preg 3
//funciones para validar el logro 18
function cambiarsinoc5p5(opcion,campoval,divcampo,divcompleto,campos)
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
    if(campoval == 'c5p5o12')
        {
            if($('#' + campoval).val() == 'SI')
            {
                $('#c5p5cualmostrar').show();
                $('#c5p5cual').val('');
                $('#c5p5cualdiv').addClass(' has-error');            
            }
            else
            {
                $('#c5p5cualmostrar').hide();
                $('#c5p5cual').val('98');
                $('#c5p5cualdiv').removeClass(' has-error');
            }
        }
        if(campoval == 'c5p5o13')
           {
            if($('#' + campoval).val() == 'SI')
            {
              $('#c5p5o1').prop('checked' , false);
              $('#c5p5o1div').addClass(' has-error');
              $('#c5p5o2').prop('checked' , false);
              $('#c5p5o2div').addClass(' has-error');
              $('#c5p5o3').prop('checked' , false);
              $('#c5p5o3div').addClass(' has-error');
              $('#c5p5o4').prop('checked' , false);
              $('#c5p5o4div').addClass(' has-error');
              $('#c5p5o5').prop('checked' , false);
              $('#c5p5o5div').addClass(' has-error');
              $('#c5p5o6').prop('checked' , false);
              $('#c5p5o6div').addClass(' has-error');
              $('#c5p5o7').prop('checked' , false);
              $('#c5p5o7div').addClass(' has-error');
              $('#c5p5o8').prop('checked' , false);
              $('#c5p5o8div').addClass(' has-error');
              $('#c5p5o9').prop('checked' , false);
              $('#c5p5o9div').addClass(' has-error');
              $('#c5p5o10').prop('checked' , false);
              $('#c5p5o10div').addClass(' has-error');
              $('#c5p5o11').prop('checked' , false);
              $('#c5p5o11div').addClass(' has-error');
              $('#c5p5o12').prop('checked' , false);
              $('#c5p5o12div').addClass(' has-error');
              
              $('#c5p5cualmostrar').hide();
              $('#c5p5cual').val('98');
                            
              $('#c5p5o1').val('NO');
              $('#c5p5o2').val('NO');
              $('#c5p5o3').val('NO');
              $('#c5p5o4').val('NO');
              $('#c5p5o5').val('NO');
              $('#c5p5o6').val('NO');
              $('#c5p5o7').val('NO');
              $('#c5p5o8').val('NO');
              $('#c5p5o9').val('NO');
              $('#c5p5o10').val('NO');
              $('#c5p5o11').val('NO');
              $('#c5p5o12').val('NO');
            }
           }
        else
       {
          $('#c5p5o13').prop('checked' , false); 
          $('#c5p5o13').val('NO');
          $('#c5p5o13div').addClass(' has-error');
       }
      validarcuadrosc5p5(divcompleto,campos);
}
function validarcuadrosc5p5(divcuadro,ncampos)
{
    if ($('#c5p5cual').val() != '')
    {
    for(i=1;i<=13;i++){
    if($('#c5p5o'+i).val() == 'SI'){
       $('#guardarpreval18').prop('disabled', false);
        break;
        }
        else
        {
         $('#guardarpreval18').prop('disabled', true);
        }
        }
    }
    else
    {
           $('#guardarpreval18').prop('disabled', true);
    }
}
function validarcampotexcuadros(div,campo,ncampos)
{
    validarbolitasytextoc5p5(div,campo);
    validarcuadrosc5p5(div,ncampos);
}
function validarbolitasytextoc5p5(div,campo)
{ 
   if(($('#'+ campo).val() == '') || ($('#'+ campo).val() == '0') || ($('#'+ campo).val() == '98'))
   { 
       $('#' + div).addClass(' has-error');
   }
   else
   { 
       $('#' + div).removeClass('has-error');
   }
    validarguardarc5p5();
}
function validarguardarc5p5()
{  if($('.has-error').length === 0)
   {
       $('#guardarpreval18').prop('disabled', false);
   }
   else
   {
       $('#guardarpreval18').prop('disabled', true);
   }
}
// fin funciones para validar el logro 18
// inicio funcion para validar el logro 24
function colocaropcionc6(opcion,campoval,divcampo)
{   
    $('#' + campoval).val(opcion);
    validarbolitasytextoc6(divcampo,campoval);
}
    function validarbolitasytextoc6(div,campo)
    { //alert(div + ' juanpis ' + campo);
       if(($('#'+ campo).val() == '') || ($('#'+ campo).val() == '0') || ($('#'+ campo).val() == '98'))
       { 
           $('#' + div).addClass(' has-error');
       }
       else
       { 
           $('#' + div).removeClass('has-error');
       }
        validarguardarc6();
    }

    function validarguardarc6()
    {  
       if(($('#valorc6p2').val() !== '')&&($('#valorc6p3').val() !== '')&&($('#valorc6p5').val() !== '')&&($('#valorc6p9').val() !== ''))
       {
           $('#guardarpreval24').prop('disabled', false);
       }
       else
       {
           $('#guardarpreval24').prop('disabled', true);
       }
    }
// fin funciones para validar el logro 24
// inicio funciones para validar el logro 33 cap 11 preg 1
function cambiarsinoc11p1(opcion,campoval,divcampo,divcompleto,campos,mostrar)
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
    if(campoval == 'c11p1o8')
        {
            if($('#' + campoval).val() == 'SI')
            {
                $('#c11p1cualmostrar').show();
                $('#c11p1cual').val('');
                $('#c11p1cualdiv').addClass('has-error');            
            }
            else
            {
                $('#c11p1cualmostrar').hide();
                $('#c11p1cual').val('98');
                $('#c11p1cualdiv').removeClass('has-error');
            }
        }
        if(campoval == 'c11p1o7')
           {
            if($('#' + campoval).val() == 'SI')
            {
              $('#c11p1o1').prop('checked' , false);
              $('#c11p1o1div').addClass(' has-error');
              $('#c11p1o2').prop('checked' , false);
              $('#c11p1o2div').addClass(' has-error');
              $('#c11p1o3').prop('checked' , false);
              $('#c11p1o3div').addClass(' has-error');
              $('#c11p1o4').prop('checked' , false);
              $('#c11p1o4div').addClass(' has-error');
              $('#c11p1o5').prop('checked' , false);
              $('#c11p1o5div').addClass(' has-error');
              $('#c11p1o6').prop('checked' , false);
              $('#c11p1o6div').addClass(' has-error');
              $('#c11p1o8').prop('checked' , false);
              $('#c11p1o8div').addClass(' has-error');
              
              $('#c11p1cualmostrar').hide();
              $('#c11p1cual').val('98');
                            
              $('#c11p1o1').val('NO');
              $('#c11p1o2').val('NO');
              $('#c11p1o3').val('NO');
              $('#c11p1o4').val('NO');
              $('#c11p1o5').val('NO');
              $('#c11p1o6').val('NO');
              $('#c11p1o8').val('NO');
              
              }
            }
        else
       {
          $('#c11p1o7').prop('checked' , false); 
          $('#c11p1o7').val('NO');
          $('#c11p1o7div').addClass(' has-error');
       }
       validarcuadrosc11p1(divcompleto,campos);
}
function validarcuadrosc11p1(divcuadro,ncampos)
{
    if ($('#c11p1cual').val() != '')
    {
    for(i=1;i<=8;i++){
    if($('#c11p1o'+i).val() == 'SI'){
       $('#siguientec11p1').prop('disabled', false);
        break;
        }
        else
        {
         $('#siguientec11p1').prop('disabled', true);
        }
        }
    }
    else
    {
           $('#siguientec11p1').prop('disabled', true);
    }
}
function validarcampotexcuadrosc11p1(div,campo,ncampos)
{
    validarbolitasytextoc11p1(div,campo);
    validarcuadrosc11p1(div,ncampos);
}
function validarbolitasytextoc11p1(div,campo)
{ 
   if(($('#'+ campo).val() == '') || ($('#'+ campo).val() == '0') || ($('#'+ campo).val() == '98'))
   { 
       $('#' + div).addClass(' has-error');
   }
   else
   { 
       $('#' + div).removeClass('has-error');
   }
    validarguardarc11p1();
}
function validarguardarc11p1()
{  if($('.has-error').length === 0)
   {
       $('#siguientec11p1').prop('disabled', false);
   }
   else
   {
       $('#siguientec11p1').prop('disabled', true);
   }
}
// fin funciones para validar el logro 33 cap 11 preg 1
//inicio funciones para validar el logro 33 cap 11 preg 2
function cambiarsinoc11p2(opcion,campoval,divcampo,divcompleto,campos,mostrar)
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
    if(campoval == 'c11p2o6')
        {
            if($('#' + campoval).val() == 'SI')
            {
                $('#c11p2cualmostrar').show();
                $('#c11p2cual').val('');
                $('#c11p2cualdiv').addClass(' has-error');            
            }
            else
            {
                $('#c11p2cualmostrar').hide(1000);
                $('#c11p2cual').val('98');
                $('#c11p2cualdiv').removeClass(' has-error');
            }
        }
        if(campoval == 'c11p2o7')
           {
            if($('#' + campoval).val() == 'SI')
            {
              $('#c11p2o1').prop('checked' , false);
              $('#c11p2o1div').addClass(' has-error');
              $('#c11p2o2').prop('checked' , false);
              $('#c11p2o2div').addClass(' has-error');
              $('#c11p2o3').prop('checked' , false);
              $('#c11p2o3div').addClass(' has-error');
              $('#c11p2o4').prop('checked' , false);
              $('#c11p2o4div').addClass(' has-error');
              $('#c11p2o5').prop('checked' , false);
              $('#c11p2o5div').addClass(' has-error');
              $('#c11p2o6').prop('checked' , false);
              $('#c11p2o6div').addClass(' has-error');
              
              $('#c11p2cualmostrar').hide();
              $('#c11p2cual').val('98');
                            
              $('#c11p2o1').val('NO');
              $('#c11p2o2').val('NO');
              $('#c11p2o3').val('NO');
              $('#c11p2o4').val('NO');
              $('#c11p2o5').val('NO');
              $('#c11p2o6').val('NO');
              }
}
        else
       {
          $('#c11p2o7').prop('checked' , false); 
          $('#c11p2o7').val('NO');
          $('#c11p2o7div').addClass(' has-error');
      }
        

      validarcuadrosc11p2(divcompleto,campos);
}

function validarcuadrosc11p2(divcuadro,ncampos)
{
 if ($('#c11p2cual').val() != '')
    {
    for(i=1;i<=7;i++){
    if($('#c11p2o'+i).val() == 'SI'){
       $('#siguientec11p2').prop('disabled', false);
        break;
        }
        else
        {
         $('#siguientec11p2').prop('disabled', true);
        }
        }
    }
    else
    {
           $('#siguientec11p2').prop('disabled', true);
    }
}

function validarcampotexcuadrosc11p2(div,campo,ncampos)
{
    validarbolitasytextoc11p2(div,campo);

    validarcuadrosc11p2(div,ncampos);
}
function validarbolitasytextoc11p2(div,campo)
{ 
   if(($('#'+ campo).val() == '') || ($('#'+ campo).val() == '0') || ($('#'+ campo).val() == '98'))
   { 
       $('#' + div).addClass(' has-error');
   }
   else
   { 
       $('#' + div).removeClass('has-error');
   }
    validarguardarc11p2();
}
function validarguardarc11p2()
{  if($('.has-error').length === 0)
   {
       $('#siguientec11p2').prop('disabled', false);
   }
   else
   {
       $('#siguientec11p2').prop('disabled', true);
   }
}
// fin funciones para validar el logro 33 cap 11 preg 2
// inicio funciones para validar el logro 33 cap 11 preg 3
function cambiarsinoc11p3(opcion,campoval,divcampo,divcompleto,campos,mostrar)
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
    if(campoval == 'c11p3o5')
        {
            if($('#' + campoval).val() == 'SI')
            {
                $('#c11p3cualmostrar').show();
                $('#c11p3cual').val('');
                $('#c11p3cualdiv').addClass(' has-error');            
            }
            else
            {
                $('#c11p3cualmostrar').hide();
                $('#c11p3cual').val('98');
                $('#c11p3cualdiv').removeClass(' has-error');
            }
        }
        if(campoval == 'c11p3o6')
           {
            if($('#' + campoval).val() == 'SI')
            {
              $('#c11p3o1').prop('checked' , false);
              $('#c11p3o1div').addClass(' has-error');
              $('#c11p3o2').prop('checked' , false);
              $('#c11p3o2div').addClass(' has-error');
              $('#c11p3o3').prop('checked' , false);
              $('#c11p3o3div').addClass(' has-error');
              $('#c11p3o4').prop('checked' , false);
              $('#c11p3o4div').addClass(' has-error');
              $('#c11p3o5').prop('checked' , false);
              $('#c11p3o5div').addClass(' has-error');
              $('#c11p3cualmostrar').hide();
              $('#c11p3cual').val('98');
              $('#c11p3o1').val('NO');
              $('#c11p3o2').val('NO');
              $('#c11p3o3').val('NO');
              $('#c11p3o4').val('NO');
              $('#c11p3o5').val('NO');
              }
           }
        else
       {
          $('#c11p3o6').prop('checked' , false); 
          $('#c11p3o6').val('NO');
          $('#c11p3o6div').addClass(' has-error');
      }
      validarcuadrosc11p3(divcompleto,campos);
}
function validarcuadrosc11p3(divcuadro,ncampos)
{
    if ($('#c11p3cual').val() != '')
    {
    for(i=1;i<=6;i++){
    if($('#c11p3o'+i).val() == 'SI'){
       $('#guardarpreval33').show(); 
       $('#guardarpreval33').prop('disabled', false);
        break;
        }
        else
        {
         $('#guardarpreval33').show();    
         $('#guardarpreval33').prop('disabled', true);
        }
        }
    }
    else
    {      $('#guardarpreval33').show(); 
           $('#guardarpreval33').prop('disabled', true);
    }
}
function validarcampotexcuadrosc11p3(div,campo,ncampos)
{
    validarbolitasytextoc11p3(div,campo);
    validarcuadrosc11p3(div,ncampos);
}
function validarcampotexcuadrosc11p3(div,campo,ncampos)
{
    validarbolitasytextoc11p3(div,campo);

    validarcuadrosc11p3(div,ncampos);
}
function validarbolitasytextoc11p3(div,campo)
{ 
   if(($('#'+ campo).val() == '') || ($('#'+ campo).val() == '0') || ($('#'+ campo).val() == '98'))
   { 
       $('#' + div).addClass(' has-error');
   }
   else
   { 
       $('#' + div).removeClass('has-error');
   }
    validarguardarc11p3();
}
function validarguardarc11p3()
{  if($('.has-error').length === 0)
   {
       $('#guardarpreval33').prop('disabled', false);
   }
   else
   {
       $('#guardarpreval33').prop('disabled', true);
   }
}
// fin funciones para validar el logro 33 cap 11 preg 3
// inicio funciones para validar el logro 34 cap 11 preg 4
function cambiarsinoc11p4(opcion,campoval,divcampo,divcompleto,campos,mostrar)
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
    if(campoval == 'c11p4o5')
        {
            if($('#' + campoval).val() == 'SI')
            {
                $('#c11p4cualmostrar').show();
                $('#c11p4cual').val('');
                $('#c11p4cualdiv').addClass(' has-error');            
            }
            else
            {
                $('#c11p4cualmostrar').hide();
                $('#c11p4cual').val('98');
                $('#c11p4cualdiv').removeClass(' has-error');
            }
        }
        if(campoval == 'c11p4o6')
           {
            if($('#' + campoval).val() == 'SI')
            {
              $('#c11p4o1').prop('checked' , false);
              $('#c11p4o1div').addClass('has-error');
              $('#c11p4o2').prop('checked' , false);
              $('#c11p4o2div').addClass('has-error');
              $('#c11p4o3').prop('checked' , false);
              $('#c11p4o3div').addClass('has-error');
              $('#c11p4o4').prop('checked' , false);
              $('#c11p4o4div').addClass('has-error');
              $('#c11p4o5').prop('checked' , false);
              $('#c11p4o5div').addClass('has-error');
              $('#c11p4cualmostrar').hide();
              $('#c11p4cual').val('98');
              $('#c11p4o1').val('NO');
              $('#c11p4o2').val('NO');
              $('#c11p4o3').val('NO');
              $('#c11p4o4').val('NO');
              $('#c11p4o5').val('NO');
              }
            }
        else
       {
          $('#c11p4o6').prop('checked' , false); 
          $('#c11p4o6').val('NO');
          $('#c11p4o6div').addClass(' has-error');
      }
      validarcuadrosc11p4(divcompleto,campos);
}
function validarcuadrosc11p4(divcuadro,ncampos)
{
if ($('#c11p4cual').val() != '')
    {
    for(i=1;i<=6;i++){
    if($('#c11p4o'+i).val() == 'SI'){
       $('#siguientec11p4').prop('disabled', false);
        break;
        }
        else
        {
         $('#siguientec11p4').prop('disabled', true);
        }
        }
    }
    else
    {
           $('#siguientec11p4').prop('disabled', true);
    }
}
function validarcampotexcuadrosc11p4(div,campo,ncampos)
{
    validarbolitasytextoc11p4(div,campo);
    validarcuadrosc11p4(div,ncampos);
}
function validarbolitasytextoc11p4(div,campo)
{ 
   if(($('#'+ campo).val() == '') || ($('#'+ campo).val() == '0') || ($('#'+ campo).val() == '98'))
   { 
       $('#' + div).addClass(' has-error');
   }
   else
   { 
       $('#' + div).removeClass('has-error');
   }
    validarguardarc11p4();
}
function validarguardarc11p4()
{  if($('.has-error').length === 0)
   {
       $('#siguientec11p4').prop('disabled', false);
   }
   else
   {
       $('#siguientec11p4').prop('disabled', true);
   }
}
// fin funciones para validar el logro 34 cap 11 preg 4
// fin funciones para validar el logro 34 cap 11 preg 5
function cambiarsinoc11p5(opcion,campoval,divcampo,divcompleto,campos,mostrar)
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
    if(campoval == 'c11p5o6')
        {
            if($('#' + campoval).val() == 'SI')
            {
                $('#c11p5cualmostrar').show();
                $('#c11p5cual').val('');
                $('#c11p5cualdiv').addClass('has-error');            
            }
            else
            {
                $('#c11p5cualmostrar').hide();
                $('#c11p5cual').val('98');
                $('#c11p5cualdiv').removeClass('has-error');
            }
        }
        if(campoval == 'c11p5o7')
           {
            if($('#' + campoval).val() == 'SI')
            {
              $('#c11p5o1').prop('checked' , false);
              $('#c11p5o1div').addClass(' has-error');
              $('#c11p5o2').prop('checked' , false);
              $('#c11p5o2div').addClass(' has-error');
              $('#c11p5o3').prop('checked' , false);
              $('#c11p5o3div').addClass(' has-error');
              $('#c11p5o4').prop('checked' , false);
              $('#c11p5o4div').addClass(' has-error');
              $('#c11p5o5').prop('checked' , false);
              $('#c11p5o5div').addClass(' has-error');
              $('#c11p5o6').prop('checked' , false);
              $('#c11p5o6div').addClass(' has-error');
              $('#c11p5cualmostrar').hide();
              $('#c11p5cual').val('98');
              $('#c11p5o1').val('NO');
              $('#c11p5o2').val('NO');
              $('#c11p5o3').val('NO');
              $('#c11p5o4').val('NO');
              $('#c11p5o5').val('NO');
              $('#c11p5o6').val('NO');
              }
            }
        else
       {
          $('#c11p5o7').prop('checked' , false); 
          $('#c11p5o7').val('NO');
          $('#c11p5o7div').addClass(' has-error');
      }
      validarcuadrosc11p5(divcompleto,campos);
}
function validarcuadrosc11p5(divcuadro,ncampos)
{
    
 if ($('#c11p5cual').val() != '')
    {
    for(i=1;i<=7;i++){
    if($('#c11p5o'+i).val() == 'SI'){
       $('#siguientec11p5').prop('disabled', false);
        break;
        }
        else
        {
         $('#siguientec11p5').prop('disabled', true);
        }
        }
    }
    else
    {
           $('#siguientec11p5').prop('disabled', true);
    }
}
function validarcampotexcuadrosc11p5(div,campo,ncampos)
{
    validarbolitasytextoc11p5(div,campo);
    validarcuadrosc11p5(div,ncampos);
}
function validarbolitasytextoc11p5(div,campo)
{ 
   if(($('#'+ campo).val() == '') || ($('#'+ campo).val() == '0') || ($('#'+ campo).val() == '98'))
   { 
       $('#' + div).addClass(' has-error');
   }
   else
   { 
       $('#' + div).removeClass('has-error');
   }
    validarguardarc11p5();
}
function validarguardarc11p5()
{  if($('.has-error').length === 0)
   {
       $('#siguientec11p5').prop('disabled', false);
   }
   else
   {
       $('#siguientec11p5').prop('disabled', true);
   }
}
// fin funciones para validar el logro 34 cap 11 preg 5
// inicio funciones para validar el logro 34 cap 11 preg 7
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
                $('#c11p7cualmostrar').show();
                $('#c11p7cual').val('');
                $('#c11p7cualdiv').addClass(' has-error');            
            }
            else
            {
                $('#c11p7cualmostrar').hide();
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
              $('#c11p7cualmostrar').hide();
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
    for(i=1;i<=7;i++){
    if($('#c11p7o'+i).val() == 'SI'){
       $('#guardarpreval34').prop('disabled', false);
        break;
        }
        else
        {
         $('#guardarpreval34').prop('disabled', true);
        }
        }
    }
    else
    {
           $('#guardarpreval34').prop('disabled', true);
    }
}
function validarcampotexcuadrosc11p7(div,campo,ncampos)
{
    validarbolitasytextoc11p7(div,campo);
    validarcuadrosc11p7(div,ncampos);
}
function validarbolitasytextoc11p7(div,campo)
{ 
   if(($('#'+ campo).val() == '') || ($('#'+ campo).val() == '0') || ($('#'+ campo).val() == '98'))
   { 
       $('#' + div).addClass(' has-error');
   }
   else
   { 
       $('#' + div).removeClass('has-error');
   }
    validarguardarc11p7();
}
function validarguardarc11p7()
{  if($('.has-error').length === 0)
   {
       $('#guardarpreval34').prop('disabled', false);
   }
   else
   {
       $('#guardarpreval34').prop('disabled', true);
   }
}
// fin funciones para validar el logro 34 cap 11 preg 7
// inicio funciones para validar el logro 39 cap 10 preg 5
function cambiarsinoc10p5(opcion,campoval,divcampo,divcompleto,campos)
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
    if(campoval == 'c10p5o1')
        {
            if($('#' + campoval).val() == 'SI')
            {
                $('#c10p5institucion1mostrar').show();
                $('#institucion1').val('');
                $('#c10p5institucion1div').addClass(' has-error');            
            }
            else
            {
                $('#c10p5institucion1mostrar').hide();
                $('#institucion1').val('98');
                $('#c10p5institucion1div').removeClass(' has-error');
            }
        }
        if(campoval == 'c10p5o2')
        {
            if($('#' + campoval).val() == 'SI')
            {
                $('#c10p5institucion2mostrar').show();
                $('#institucion2').val('');
                $('#c10p5institucion2div').addClass(' has-error');            
            }
            else
            {
                $('#c10p5institucion2mostrar').hide();
                $('#institucion2').val('98');
                $('#c10p5institucion2div').removeClass(' has-error');
            }
        }
        if(campoval == 'c10p5o22')
        {
            if($('#' + campoval).val() == 'SI')
            {
                $('#c10p5cualmostrar').show();
                $('#c10p5cual').val('');
                $('#c10p5cualdiv').addClass(' has-error');            
            }
            else
            {
                $('#c10p5cualmostrar').hide();
                $('#c10p5cual').val('98');
                $('#c10p5cualdiv').removeClass(' has-error');
            }
        }
        if(campoval == 'c10p5o23')
           {
            if($('#' + campoval).val() == 'SI')
            {
              $('#c10p5o1').prop('checked' , false);
              $('#c10p5o1div').addClass(' has-error');
              $('#c10p5o2').prop('checked' , false);
              $('#c10p5o2div').addClass(' has-error');
              $('#c10p5o3').prop('checked' , false);
              $('#c10p5o3div').addClass(' has-error');
              $('#c10p5o4').prop('checked' , false);
              $('#c10p5o4div').addClass(' has-error');
              $('#c10p5o5').prop('checked' , false);
              $('#c10p5o5div').addClass(' has-error');
              $('#c10p5o6').prop('checked' , false);
              $('#c10p5o6div').addClass(' has-error');
              $('#c10p5o7').prop('checked' , false);
              $('#c10p5o7div').addClass(' has-error');
              $('#c10p5o8').prop('checked' , false);
              $('#c10p5o8div').addClass(' has-error');
              $('#c10p5o9').prop('checked' , false);
              $('#c10p5o9div').addClass(' has-error');
              $('#c10p5o10').prop('checked' , false);
              $('#c10p5o10div').addClass(' has-error');
              $('#c10p5o11').prop('checked' , false);
              $('#c10p5o11div').addClass(' has-error');
              $('#c10p5o12').prop('checked' , false);
              $('#c10p5o12div').addClass(' has-error');
              $('#c10p5o13').prop('checked' , false);
              $('#c10p5o13div').addClass(' has-error');
              $('#c10p5o14').prop('checked' , false);
              $('#c10p5o14div').addClass(' has-error');
              $('#c10p5o15').prop('checked' , false);
              $('#c10p5o15div').addClass(' has-error');
              $('#c10p5o16').prop('checked' , false);
              $('#c10p5o16div').addClass(' has-error');
              $('#c10p5o17').prop('checked' , false);
              $('#c10p5o17div').addClass(' has-error');
              $('#c10p5o18').prop('checked' , false);
              $('#c10p5o18div').addClass(' has-error');
              $('#c10p5o19').prop('checked' , false);
              $('#c10p5o19div').addClass(' has-error');
              $('#c10p5o20').prop('checked' , false);
              $('#c10p5o20div').addClass(' has-error');
              $('#c10p5o21').prop('checked' , false);
              $('#c10p5o21div').addClass(' has-error');
              $('#c10p5o22').prop('checked' , false);
              $('#c10p5o22div').addClass(' has-error');
              $('#c10p5institucion1mostrar').hide();
              $('#institucion1').val('98');
              $('#c10p5institucion2mostrar').hide();
              $('#institucion2').val('98');
              $('#c10p5cualmostrar').hide();
              $('#c10p5cual').val('98');
              $('#c10p5o1').val('NO');
              $('#c10p5o2').val('NO');
              $('#c10p5o3').val('NO');
              $('#c10p5o4').val('NO');
              $('#c10p5o5').val('NO');
              $('#c10p5o6').val('NO');
              $('#c10p5o7').val('NO');
              $('#c10p5o8').val('NO');
              $('#c10p5o9').val('NO');
              $('#c10p5o10').val('NO');
              $('#c10p5o11').val('NO');
              $('#c10p5o12').val('NO');
              $('#c10p5o13').val('NO');
              $('#c10p5o14').val('NO');
              $('#c10p5o15').val('NO');
              $('#c10p5o16').val('NO');
              $('#c10p5o17').val('NO');
              $('#c10p5o18').val('NO');
              $('#c10p5o19').val('NO');
              $('#c10p5o20').val('NO');
              $('#c10p5o21').val('NO');
              $('#c10p5o22').val('NO');
              }
}
        else
       {
          $('#c10p5o23').prop('checked' , false); 
          $('#c10p5o23').val('NO');
          $('#c10p5o23div').addClass(' has-error');
      }
      validarcuadrosc10p5(divcompleto,campos);
}
function validarcuadrosc10p5(divcuadro,ncampos)
{
if ($('#institucion1').val() != '' && $('#institucion2').val() != '' && $('#c10p5cual').val() != '')
    {
    for(i=1;i<=23;i++){
    if($('#c10p5o'+i).val() == 'SI'){
       $('#guardarpreval39').prop('disabled', false);
        break;
        }
        else
        {
         $('#guardarpreval39').prop('disabled', true);
        }
        }
    }
    else
    {
           $('#guardarpreval39').prop('disabled', true);
    }
}
function validarcampotexcuadrosc10p5(div,campo,ncampos)
{
    validarbolitasytextoc10p5(div,campo);
    validarcuadrosc10p5(div,ncampos);
}
function validarbolitasytextoc10p5(div,campo)
{ 
   if(($('#'+ campo).val() == '') || ($('#'+ campo).val() == '0') || ($('#'+ campo).val() == '98'))
   { 
       $('#' + div).addClass('has-error');
   }
   else
   { 
       $('#' + div).removeClass('has-error');
   }
    validarguardarc10p5();
}
function validarguardarc10p5()
{  if($('.has-error').length === 0)
   {
       $('#guardarpreval39').prop('disabled', false);
   }
   else
   {
       $('#guardarpreval39').prop('disabled', true);
   }
}
// fin funciones para validar el logro 39 cap 10 preg 5
//SE DEBE COLOCAR ESTO EN EL CAMPO PARA QUE FUNCIONE onKeyPress="return soloNumeros(event)"
function soloNumeros(e) 
{
var key = window.Event ? e.which : e.keyCode 
if ((key >= 48 && key <= 57) || (key==8)){}
else
{
   okletrasnum('Ingresa solo numeros!!!');
}
return ((key >= 48 && key <= 57) || (key==8)) 
}
function soloLetras(e) 
{ 
var key = window.Event ? e.which : e.keyCode
if ((key >= 65 && key <= 90) || (key==8) || (key==32)){}
else
{
   okletrasnum('Ingresa solo letras mayusculas!!!');
}
return ((key >= 65 && key <= 90) || (key==8) || (key==32)) 
}
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
function botongoport(a){
    if ($('#listaestado' + a).val() == '')
    {
        $('#edicion' + a).prop('disabled',true);
    }else
    {
    $('#edicion' + a).prop('disabled',false);
    }
}
function mostrarpais(opcion)
    {
        $('#valorc4p8o1').val(opcion);
        if(opcion === 'c4p8o4')
        {
            $('#c4p8o1div').removeClass('has-error');
            $('#c4p8o2m').show();
            $('#c4p8o2m').addClass('has-error');
            $('#c4p8o2').val('');
        }
        else
        {
            $('#c4p8o1div').removeClass('has-error');
            $('#c4p8o2m').hide(); 
            $('#c4p8o2m').removeClass('has-error');
            $('#c4p8o2').val('98');
        }  
         validarguardarrecalculolog2();
    }
function validarbolitasytextorecalculolog2(div,campo)
{ //alert(div + ' juanpis ' + campo);
   if(($('#'+ campo).val() == ''))
   { 
       $('#' + div).addClass('has-error');
   }
   else
   { 
       $('#' + div).removeClass('has-error');
   }
    validarguardarrecalculolog2(campo);
}
function validarguardarrecalculolog2()
{  
   if(($('#valorc4p8o1').val() !== '')&&($('#c4p8o2').val() !== ''))
   {
       $('#guardarrecalculolog2').prop('disabled', false);
   }
   else
   {
       $('#guardarrecalculolog2').prop('disabled', true);
   }
}
function mostrarpais3(opcion)
    {
        $('#valorc4p8o1a').val(opcion);
        if(opcion === 'c4p8o4')
        {
            $('#c4p8o1div3').removeClass('has-error');
            $('#c4p8o2m3').show();
            $('#c4p8o2m3').addClass('has-error');
            $('#c4p8o2a').val('');
        }
        else
        {
            $('#c4p8o1div3').removeClass('has-error');
            $('#c4p8o2m3').hide(); 
            $('#c4p8o2m3').removeClass('has-error');
            $('#c4p8o2a').val('98');
        }  
         validarguardarrecalculolog3();
    }
function validarbolitasytextorecalculolog3(div,campo)
{  
   if(($('#'+ campo).val() == ''))
   { 
       $('#' + div).addClass('has-error');
   }
   else
   { 
       $('#' + div).removeClass('has-error');
   }
    validarguardarrecalculolog3(campo);
}
function validarguardarrecalculolog3()
{  
   if(($('#valorc4p8o1a').val() !== '')&&($('#c4p8o2a').val() !== ''))
   {
       $('#guardarrecalculolog3').prop('disabled', false);
   }
   else
   {
       $('#guardarrecalculolog3').prop('disabled', true);
   }
}
//validar bolitas y texto
function validarbolitasytextoc4p9(div,campo)
{ //alert(div + ' juanpis ' + campo);
   if(($('#'+ campo).val() == ''))
   { 
       $('#' + div).addClass(' has-error');
       $('#guardarrecalculolog5').prop('disabled', true);
   }
   else
   { 
       $('#' + div).removeClass('has-error');
       $('#guardarrecalculolog5').prop('disabled', false);
   }
}
// colocar opcion para todos
function colocaropcionc4p9(opcion,campoval,divcampo)
{
    $('#' + campoval).val(opcion);
    validarbolitasytextoc4p9(divcampo,campoval);
}




//validar bolitas y texto
function validarbolitasytextoc8p1(div,campo)
{ //alert(div + ' juanpis ' + campo);
   if(($('#'+ campo).val() == ''))
   { 
       $('#' + div).addClass(' has-error');
       $('#guardarrecalculolog12').prop('disabled', true);
   }
   else
   { 
       $('#' + div).removeClass('has-error');
       $('#guardarrecalculolog12').prop('disabled', false);
   }
}
// colocar opcion para todos
function colocaropcionc8p1(opcion,campoval,divcampo)
{
    $('#' + campoval).val(opcion);
    validarbolitasytextoc8p1(divcampo,campoval);
}



//validar bolitas y texto
function validarbolitasytextoc5p12(div,campo)
{ //alert(div + ' juanpis ' + campo);
   if(($('#'+ campo).val() == ''))
   { 
       $('#' + div).addClass(' has-error');
       $('#guardarrecalculolog23').prop('disabled', true);
   }
   else
   { 
       $('#' + div).removeClass('has-error');
       $('#guardarrecalculolog23').prop('disabled', false);
   }
}
// colocar opcion para todos
function colocaropcionc5p12(opcion,campoval,divcampo)
{
    $('#' + campoval).val(opcion);
    validarbolitasytextoc5p12(divcampo,campoval);
}












// colocar opcion para todos
function colocaropcionc5p7(opcion,campoval,divcampo)
{
   //esta linea me guarda el valor del campo
    $('#' + campoval).val(opcion);
          if(opcion === 'c5p7o1'||opcion === 'c5p7o2')
            {
            //    alert('aca lo muestra');
                $('#c5p7rdivmostrar').show();
                $('#valorc5p7r').val('');
                $('#c5p7rdiv').addClass('has-error'); 
                $('#c5p7r1').prop('checked' , false);
                $('#c5p7r2').prop('checked' , false);
             
            }
            else
            {
          //      alert('aca lo oculta');
                $('#c5p7rdivmostrar').hide();
                $('#valorc5p7r').val('98');
                $('#c5p7rdiv').removeClass('has-error');
                $('#c5p7r1').prop('checked' , false);
                $('#c5p7r2').prop('checked' , false);
            }
          
    validarbolitasytextorecalculolog22(divcampo,campoval);
}
//de aca para arriba es logica de bolas y textos
function validarbolitasytextorecalculolog22(div,campo)
{ //alert(div + ' juanpis ' + campo);
   if(($('#'+ campo).val() == ''))
   { 
       $('#' + div).addClass(' has-error');
   }
   else
   { 
       $('#' + div).removeClass('has-error');
   }
   if(($('#valorc5p7r').val() !== '') && ($('#valorc5p7').val() !== '') && (($('#c5p8o1').val() !== 'NO') || ($('#c5p8o2').val() !== 'NO') || ($('#c5p8o3').val() !== 'NO') || ($('#c5p8o4').val() !== 'NO') || ($('#c5p8o5').val() !== 'NO')))
   {
       $('#guardarrecalculolog22').prop('disabled', false);
   }
   else
   {
       $('#guardarrecalculolog22').prop('disabled', true);
   }    
}
function colocaropcionc5p7r(opcion,campoval,divcampo)
{
    $('#' + campoval).val(opcion);
    validarbolitasytextorecalculolog22(divcampo,campoval);
}
//dea aca para abajo es logica de cuadros
function cambiarsinoc5p8(opcion,campoval,divcampo,divcompleto,campos)
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
        if(campoval == 'c5p8o5')
           {
            if($('#' + campoval).val() == 'SI')
            {
              $('#c5p8o1').prop('checked' , false);
              $('#c5p8o1div').addClass(' has-error');
              $('#c5p8o2').prop('checked' , false);
              $('#c5p8o2div').addClass(' has-error');
              $('#c5p8o3').prop('checked' , false);
              $('#c5p8o3div').addClass(' has-error');
              $('#c5p8o4').prop('checked' , false);
              $('#c5p8o4div').addClass(' has-error');
              
              $('#c5p8o1').val('NO');
              $('#c5p8o2').val('NO');
              $('#c5p8o3').val('NO');
              $('#c5p8o4').val('NO');
              
              }
}
        else
       {
          $('#c5p8o5').prop('checked' , false); 
          $('#c5p8o5').val('NO');
          $('#c5p8o5div').addClass(' has-error');
      }
      validarbolitasytextorecalculolog22(divcompleto,campos);
}





















    function colocaropcionc8p2(opcion,campoval,divcampo)
{
    //alert(opcion);
    $('#' + campoval).val(opcion);
    
    if(opcion == 'c8p2o3')
        {
           // alert('aca lo muestra');
            $('#c8p2grado1a5div').show();$('#c8p2grado').val('');$('#c8p2grado1a5div').addClass('has-error');            
            
            $('#c8p2grado6a9div').hide(); $('#c8p2grado6a9div').removeClass('has-error');
            
            $('#c8p2grado10div').hide();$('#c8p2grado10div').removeClass('has-error');
            
            $('#c8p2grado11a13div').hide();$('#c8p2grado11a13div').removeClass('has-error');
            
            $('#c8p2g1').prop('checked',false);$('#c8p2g2').prop('checked',false);$('#c8p2g3').prop('checked',false); 
            $('#c8p2g4').prop('checked',false);$('#c8p2g5').prop('checked',false);$('#c8p2g6').prop('checked',false);
            $('#c8p2g7').prop('checked',false);$('#c8p2g8').prop('checked',false);$('#c8p2g9').prop('checked',false);
            $('#c8p2g10').prop('checked',false);$('#c8p2g11').prop('checked',false);$('#c8p2g12').prop('checked',false);
            $('#c8p2g13').prop('checked',false);
            
        }
        else if(opcion == 'c8p2o4')
        {
           // alert('aca lo muestra');
            $('#c8p2grado6a9div').show();$('#c8p2grado').val('');$('#c8p2grado6a9div').addClass('has-error');            
            
            $('#c8p2grado1a5div').hide();$('#c8p2grado1a5div').removeClass('has-error');            
            
            $('#c8p2grado10div').hide();$('#c8p2grado10div').removeClass('has-error');
            
            $('#c8p2grado11a13div').hide();$('#c8p2grado11a13div').removeClass('has-error');
            
            $('#c8p2g1').prop('checked',false);$('#c8p2g2').prop('checked',false);$('#c8p2g3').prop('checked',false); 
            $('#c8p2g4').prop('checked',false);$('#c8p2g5').prop('checked',false);$('#c8p2g6').prop('checked',false);
            $('#c8p2g7').prop('checked',false);$('#c8p2g8').prop('checked',false);$('#c8p2g9').prop('checked',false);
            $('#c8p2g10').prop('checked',false);$('#c8p2g11').prop('checked',false);$('#c8p2g12').prop('checked',false);
            $('#c8p2g13').prop('checked',false);
            
        }
        else if(opcion == 'c8p2o14')
        {
           // alert('aca lo muestra');
            $('#c8p2grado10div').show();$('#c8p2grado').val('');$('#c8p2grado10div').addClass('has-error');            
            
            $('#c8p2grado1a5div').hide();$('#c8p2grado1a5div').removeClass('has-error');            
            
            $('#c8p2grado6a9div').hide();$('#c8p2grado6a9div').removeClass('has-error');            
            
            $('#c8p2grado11a13div').hide();$('#c8p2grado11a13div').removeClass('has-error');
            
            $('#c8p2g1').prop('checked',false);$('#c8p2g2').prop('checked',false);$('#c8p2g3').prop('checked',false); 
            $('#c8p2g4').prop('checked',false);$('#c8p2g5').prop('checked',false);$('#c8p2g6').prop('checked',false);
            $('#c8p2g7').prop('checked',false);$('#c8p2g8').prop('checked',false);$('#c8p2g9').prop('checked',false);
            $('#c8p2g10').prop('checked',false);$('#c8p2g11').prop('checked',false);$('#c8p2g12').prop('checked',false);
            $('#c8p2g13').prop('checked',false);
        }
        else if(opcion == 'c8p2o5')
        {
           // alert('aca lo muestra');
            $('#c8p2grado11a13div').show();$('#c8p2grado').val('');$('#c8p2grado11a13div').addClass('has-error');            
            
            $('#c8p2grado1a5div').hide();$('#c8p2grado1a5div').removeClass('has-error');            
            
            $('#c8p2grado6a9div').hide();$('#c8p2grado6a9div').removeClass('has-error');            
            
            $('#c8p2grado10div').hide();$('#c8p2grado10div').removeClass('has-error');
            
            $('#c8p2g1').prop('checked',false);$('#c8p2g2').prop('checked',false);$('#c8p2g3').prop('checked',false); 
            $('#c8p2g4').prop('checked',false);$('#c8p2g5').prop('checked',false);$('#c8p2g6').prop('checked',false);
            $('#c8p2g7').prop('checked',false);$('#c8p2g8').prop('checked',false);$('#c8p2g9').prop('checked',false);
            $('#c8p2g10').prop('checked',false);$('#c8p2g11').prop('checked',false);$('#c8p2g12').prop('checked',false);
            $('#c8p2g13').prop('checked',false);
            
        }
        else
        {
            //alert('aca lo oculta');
            // $('#c8p2gradodiv').hide();
            $('#c8p2grado1a5div').hide();
            $('#c8p2grado1a5div').removeClass('has-error');
            $('#c8p2grado6a9div').hide();
            $('#c8p2grado6a9div').removeClass('has-error');
            $('#c8p2grado10div').hide();
            $('#c8p2grado10div').removeClass('has-error');
            $('#c8p2grado11a13div').hide();
            $('#c8p2grado11a13div').removeClass('has-error');
            $('#c8p2grado').val('98');
           // $('#c8p2gradodiv').removeClass(' has-error');            
        }
    validarbolitasytextoc8p2(divcampo,campoval);
}



function validarbolitasytextoc8p2(div,campo)
{ //alert(div + ' juanpis ' + campo);
   if(($('#'+ campo).val() == ''))
   { 
       $('#' + div).addClass(' has-error');
   }
   else
   { 
       $('#' + div).removeClass('has-error');
   }
   if(($('#valorc8p2').val() !== '') && ($('#c8p2grado').val() !== '') && ($('#valorc8p4').val() !== ''))
   {
       $('#guardarrecalculolog13').prop('disabled', false);
   }
   else
   {
       $('#guardarrecalculolog13').prop('disabled', true);
   }    
}


function colocaropcionc8p2grado(opcion,campoval,divcampo)
{
    $('#' + campoval).val(opcion);
    validarbolitasytextoc8p2(divcampo,campoval);
}












//de aca para arriba es logica de bolas y textos
function validarrecalculolog11(div,campo)
{ //alert(div + ' juanpis ' + campo);
   if(($('#'+ campo).val() == ''))
   { 
       $('#' + div).addClass(' has-error');
   }
   else
   { 
       $('#' + div).removeClass('has-error');
   }
   if(($('#valorc8p4reclog11').val() !== '') && ($('#c8p2gradorecalculolog11').val() !== ''))
   {
       $('#guardarrecalculolog11').prop('disabled', false);
   }
   else
   {
       $('#guardarrecalculolog11').prop('disabled', true);
   }    
}
function colocaropcionc8p2rec(opcion,campoval,divcampo)
{
    $('#' + campoval).val(opcion);
    validarrecalculolog11(divcampo,campoval);
}
//valir el rango de valores
function validarrangorecalculolog11(campo,canti,canti1,divcam)
{   
    if($('#' + campo).val() > canti ||$('#' + campo).val() < canti1)
    {
        $('#' + campo).val('');
        mensajitorec('ALERTA:','El grado no puede ser mayor a ' + canti + ', ni menor a ' + canti1);
        validarrecalculolog11(divcam,campo);
    }
    else
    {
     validarrecalculolog11(divcam,campo);
    }
}
function mensajitorec(titulo, mensaje)
{
new jBox('Notice', {
    title: titulo,
    content: mensaje,
    color: 'black',
    animation: {open: 'flip', close: 'flip'},
    position: {x: 'right', y: 'center'},
    autoClose: 2000
});
}







// inicio funcion para validar el logro 10 capitulo 9 preg 37
function cambiarsinoc9p37modala(opcion,campoval,divcampo,divcompleto,campos) // java de la pregunta 37
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
    if(campoval == 'ac9p37o10')
        {
            if($('#' + campoval).val() == 'SI')
            {
                $('#c9p37cualmostrara').show();
                $('#c9p37cuala').val('');
                $('#c9p37cualdiva').addClass('has-error'); 
            }
            else
            {
                $('#c9p37cualmostrara').hide();
                $('#c9p37cuala').val('98');
                $('#c9p37cualdiva').removeClass('has-error');
            }
        }   
    if(campoval == 'ac9p37o11')
           {
            if($('#' + campoval).val() == 'SI')
            {
              $('#ac9p37o1').prop('checked' , false);
              $('#c9p37o1diva').addClass(' has-error');
              $('#ac9p37o2').prop('checked' , false);
              $('#c9p37o2diva').addClass(' has-error');
              $('#ac9p37o3').prop('checked' , false);
              $('#c9p37o3diva').addClass(' has-error');
              $('#ac9p37o4').prop('checked' , false);
              $('#c9p37o4diva').addClass(' has-error');
              $('#ac9p37o5').prop('checked' , false);
              $('#c9p37o5diva').addClass(' has-error');
              $('#ac9p37o6').prop('checked' , false);
              $('#c9p37o6diva').addClass(' has-error');
              $('#ac9p37o7').prop('checked' , false);
              $('#c9p37o7diva').addClass(' has-error');
              $('#ac9p37o8').prop('checked' , false);
              $('#c9p37o8diva').addClass(' has-error');
              $('#ac9p37o9').prop('checked' , false);
              $('#c9p37o9diva').addClass(' has-error');
              $('#ac9p37o10').prop('checked' , false);
              $('#c9p37o10diva').addClass(' has-error');
              
              $('#c9p37cualmostrara').hide();
              $('#c9p37cuala').val('98');
                            
              $('#ac9p37o1').val('NO');
              $('#ac9p37o2').val('NO');
              $('#ac9p37o3').val('NO');
              $('#ac9p37o4').val('NO');
              $('#ac9p37o5').val('NO');
              $('#ac9p37o6').val('NO');
              $('#ac9p37o7').val('NO');
              $('#ac9p37o8').val('NO');
              $('#ac9p37o9').val('NO');
              $('#ac9p37o10').val('NO');
              
              $('#guardarpreval10a14a').hide();
              $('#siguientec9p37a').show();
              $('#siguientec9p37a').prop('disabled',false);
              }else{
              $('#siguientec9p37a').hide();
              $('#guardarpreval10a14a').show();
              $('#guardarpreval10a14a').prop('disabled',true);  
              }
           }
        else
       {
          $('#ac9p37o11').prop('checked' , false); 
          $('#ac9p37o11').val('NO');
          $('#c9p37o11diva').addClass(' has-error');
          $('#siguientec9p37a').hide();
          $('#guardarpreval10a14a').show();
          $('#guardarpreval10a14a').prop('disabled',false);
       }
        validarcuadrosc9p37a();
}
function validarcuadrosc9p37a(divcuadro,ncampos)
{
    if ($('#c9p37cuala').val() != '')
    {
    for(i=1;i<=11;i++){
    if($('#ac9p37o'+i).val() == 'SI'){
       $('#guardarpreval10a14a').prop('disabled', false);
        break;
        }
        else
        {
         $('#guardarpreval10a14a').prop('disabled', true);
        }
        }
    }
    else
    {
           $('#guardarpreval10a14a').prop('disabled', true);
    }
}

function validarcampotexcuadrosc9p37a(div,campo,ncampos)
{
    validarbolitasytextoc9p37a(div,campo);
    validarcuadrosc9p37a(div,ncampos);
}
function validarbolitasytextoc9p37a(div,campo)
{ 
   if(($('#'+ campo).val() == '') || ($('#'+ campo).val() == '0') || ($('#'+ campo).val() == '98'))
   { 
       $('#' + div).addClass('has-error');
   }
   else
   { 
       $('#' + div).removeClass('has-error');
   }
    validarguardarc9p37a();
}
function validarguardarc9p37a()
{  if($('.has-error').length === 0)
   {
       $('#guardarpreval10a14a').prop('disabled', false);
   }
   else
   {
       $('#guardarpreval10a14a').prop('disabled', true);
   }
}
// fin funcion para validar el logro 10 capitulo 9 preg 37
// inicio funcion para validar el logro 10 capitulo 9 preg 39
function cambiarsinoc9p39modala(opcion,campoval,divcampo,divcompleto,campos,mostrar)
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
    if(campoval == 'ac9p39o8')
        {
            if($('#' + campoval).val() == 'SI')
            {
                $('#c9p39cualmostrara').show();
                $('#c9p39cuala').val('');
                $('#c9p39cualdiva').addClass(' has-error');            
            }
            else
            {
                $('#c9p39cualmostrara').hide();
                $('#c9p39cuala').val('98');
                $('#c9p39cualdiva').removeClass(' has-error');
            }
        }
       if(campoval == 'ac9p39o7')
           {
            if($('#' + campoval).val() == 'SI')
            {
              $('#ac9p39o1').prop('checked' , false);
              $('#c9p39o1diva').addClass(' has-error');
              $('#ac9p39o2').prop('checked' , false);
              $('#c9p39o2diva').addClass(' has-error');
              $('#ac9p39o3').prop('checked' , false);
              $('#c9p39o3diva').addClass(' has-error');
              $('#ac9p39o4').prop('checked' , false);
              $('#c9p39o4diva').addClass(' has-error');
              $('#ac9p39o5').prop('checked' , false);
              $('#c9p39o5diva').addClass(' has-error');
              $('#ac9p39o6').prop('checked' , false);
              $('#c9p39o6diva').addClass(' has-error');
              $('#ac9p39o8').prop('checked' , false);
              $('#c9p39o8diva').addClass(' has-error');
              $('#c9p39cualmostrara').hide();
              $('#c9p39cuala').val('98');
              $('#ac9p39o1').val('NO');
              $('#ac9p39o2').val('NO');
              $('#ac9p39o3').val('NO');
              $('#ac9p39o4').val('NO');
              $('#ac9p39o5').val('NO');
              $('#ac9p39o6').val('NO');
              $('#ac9p39o8').val('NO');
              $('#siguientec9p39a').hide();
              $('#guardarpreval10a14a').show();
              $('#guardarpreval10a14a').prop('disabled',false);
              }
              else
              {
              $('#guardarpreval10a14a').hide();
              $('#siguientec9p39a').show();
              $('#siguientec9p39a').prop('disabled',true);  
              }
           }
        else
       {
          $('#ac9p39o7').prop('checked' , false); 
          $('#ac9p39o7').val('NO');
          $('#c9p39o7diva').addClass(' has-error');
          $('#guardarpreval10a14a').hide();
          $('#siguientec9p39a').show();
          $('#siguientec9p39a').prop('disabled',false);
      }
      validarcuadrosc9p39a(divcompleto,campos);
}
function validarcuadrosc9p39a(divcuadro,ncampos)
{
    if ($('#c9p39cuala').val() != '')
    {
    for(i=1;i<=8;i++){
    if($('#ac9p39o'+i).val() == 'SI'){
       $('#siguientec9p39a').prop('disabled', false);
        break;
        }
        else
        {
         $('#siguientec9p39a').prop('disabled', true);
        }
        }
    }
    else
    {
           $('#siguientec9p39a').prop('disabled', true);
    }
}
function validarcampotexcuadrosc9p39a(div,campo,ncampos)
{
    validarbolitasytextoc9p39a(div,campo);
    validarcuadrosc9p39a(div,ncampos);
}
function validarbolitasytextoc9p39a(div,campo)
{ 
   if(($('#'+ campo).val() == '') || ($('#'+ campo).val() == '0') || ($('#'+ campo).val() == '98'))
   { 
       $('#' + div).addClass('has-error');
   }
   else
   { 
       $('#' + div).removeClass('has-error');
   }
    validarguardarc9p39a();
}
function validarguardarc9p39a()
{  if($('.has-error').length === 0)
   {
       $('#siguientec9p39a').prop('disabled', false);
   }
   else
   {
       $('#siguientec9p39a').prop('disabled', true);
   }
}
// fin funcion para validar el logro 10 capitulo 9 preg 39
// inicio funcion para validar el logro 10 capitulo 9 preg 40
function validarguardarc9p40a()
{
   if($('.has-error').length === 0)
   {
       $('#guardarpreval10a14a').show();
       $('#guardarpreval10a14a').prop('disabled',true);       
   }
   else
   {
       $('#guardarpreval10a14a').show();
       $('#guardarpreval10a14a').prop('disabled',false);
   }
}
function validarbolitasytextoc9p40a(div,campo)
{ //alert(div + ' juanpis ' + campo);
   if(($('#'+ campo).val() == '') || ($('#'+ campo).val() == '0') || ($('#'+ campo).val() == '98'))
   { 
       $('#' + div).addClass('has-error');
   }
   else
   { 
       $('#' + div).removeClass('has-error');
   }
    validarguardarc9p40a();
}
function colocaropcionc9p40a(opcion,campoval,divcampo)
{
    $('#' + campoval).val(opcion);
    validarbolitasytextoc9p40a(divcampo,campoval);
}
// fin funcion para validar el logro 10 capitulo 9 preg 39
function colocaropcionc9p4(opcion,campoval,divcampo)
{
    $('#' + campoval).val(opcion);
    validarbolitasytextoc9p3(divcampo,campoval);
}














// inicio funcion para validar el logro 10 capitulo 9 preg 3
function validarguardarc9p3r()
{  
    if($('#valorc9p3a').val() !=="" && $('#valorc9p4a').val() !=="" && $('#valorc9p19a').val() !=="" && $('#c9p3cuala').val() !=="")
   {
       $('#guardarpreval10a17a').prop('disabled', false);
    }
   else
   {
       $('#guardarpreval10a17a').prop('disabled', true);
   }
}
//validar bolitas y texto
function validarbolitasytextoc9p3r(div,campo)
{ //alert(div + ' juanpis ' + campo);
   if(($('#'+ campo).val() == '') || ($('#'+ campo).val() == '0'))
   { 
       $('#' + div).addClass('has-error');
   }
   else
   { 
       $('#' + div).removeClass('has-error');
   }
    validarguardarc9p3r();
}
// colocar opcion para todos
function colocaropcionc9p3r(opcion,campoval,divcampo)
{
    $('#' + campoval).val(opcion);
    if(opcion == 'ac9p3o1')
        {
            $('#c9p4diva').hide();
            $('#valorc9p4a').val('98');
            $('#c9p4diva').removeClass('has-error'); 
            $('#ac9p4').prop('checked',false);
            $('#ac9p4a').prop('checked',false);
            
            $('#c9p19diva').show();
            $('#valorc9p19a').val('');
            $('#c9p19diva').addClass('has-error');            
            $('#ac9p19').prop('checked',false);
            $('#ac9p19a').prop('checked',false);
        }
        else
        {
            $('#c9p19diva').hide();
            $('#valorc9p19a').val('98');
            $('#c9p19diva').removeClass('has-error'); 
            $('#ac9p19').prop('checked',false);
            $('#ac9p19a').prop('checked',false);
            
            $('#c9p4diva').show();
            $('#valorc9p4a').val('');
            $('#c9p4diva').addClass('has-error');
            $('#ac9p4').prop('checked',false);
            $('#ac9p4a').prop('checked',false);
            
        }
       if(opcion == 'ac9p3o6')
        {
            $('#c9p3cualmostrara').show();
            $('#c9p3cuala').val('');
            $('#c9p3cualdiva').addClass(' has-error');            
        }
        else
        {
            $('#c9p3cualmostrara').hide();
            $('#c9p3cuala').val('98');
            $('#c9p3cualdiva').removeClass(' has-error');            
        }
    validarbolitasytextoc9p3r(divcampo,campoval);
}
function colocaropcionc9p4ar(opcion,campoval,divcampo)
{
    $('#' + campoval).val(opcion);
    if(opcion == '1')
        {
            $('#c9p19diva').show();
            $('#valorc9p19a').val('');
            $('#c9p19diva').addClass('has-error');            
            $('#ac9p19').prop('checked',false);
            $('#ac9p19a').prop('checked',false);
        }
        else
        {
            $('#c9p19diva').hide();
            $('#valorc9p19a').val('98');
            $('#c9p19diva').removeClass('has-error'); 
            $('#ac9p19').prop('checked',false);
            $('#ac9p19a').prop('checked',false);
            
        }
    
    validarbolitasytextoc9p3r(divcampo,campoval);
}
function colocaropcionc9p4r(opcion,campoval,divcampo)
{
    $('#' + campoval).val(opcion);
    validarbolitasytextoc9p3r(divcampo,campoval);
}
//de aca para arriba es logica de bolas y textos
function validarcampotexcuadrosc9p3r(div,campo,ncampos)
{
    validarbolitasytextoc9p3r(div,campo);
    validarcuadrosc9p3r(div,ncampos);
}
// fin funcion para validar el logro 10 capitulo 9 preg 3












//dea aca para abajo es logica de cuadros
function cambiarsinoc9p35(opcion,campoval,divcampo,divcompleto,campos)
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

       
        if(campoval == 'c9p35o7')
        {
            if($('#' + campoval).val() == 'SI')
            {
                //alert('aca lo muestra');
                $('#c9p35o7cualmostrar').show();
                $('#c9p35o7cual').val('');
                $('#c9p35o7cualdiv').addClass('has-error');            

            }
            else
            {
                //alert('aca lo oculta');
                $('#c9p35o7cualmostrar').hide();
                $('#c9p35o7cual').val('98');
                $('#c9p35o7cualdiv').removeClass('has-error');
  
            }
        }
     
             if(campoval == 'c9p35o8')
           {
            if($('#' + campoval).val() == 'SI')
            {
              $('#c9p35o1').prop('checked' , false);
              $('#c9p35o1div').addClass('has-error');
              $('#c9p35o2').prop('checked' , false);
              $('#c9p35o2div').addClass('has-error');
              $('#c9p35o3').prop('checked' , false);
              $('#c9p35o3div').addClass('has-error');
              $('#c9p35o4').prop('checked' , false);
              $('#c9p35o4div').addClass('has-error');
              $('#c9p35o5').prop('checked' , false);
              $('#c9p35o5div').addClass('has-error');
              $('#c9p35o6').prop('checked' , false);
              $('#c9p35o6div').addClass('has-error');
              $('#c9p35o7').prop('checked' , false);
              $('#c9p35o7div').addClass('has-error');
              $('#c9p35o9').prop('checked' , false);
              $('#c9p35o9div').addClass('has-error');
              
              $('#c9p35o7cualmostrar').hide();
              $('#c9p35o7cual').val('98');
                            
              $('#c9p35o1').val('NO');
              $('#c9p35o2').val('NO');
              $('#c9p35o3').val('NO');
              $('#c9p35o4').val('NO');
              $('#c9p35o5').val('NO');
              $('#c9p35o6').val('NO');
              $('#c9p35o7').val('NO');
              $('#c9p35o9').val('NO');
              
              }
}
        else
       {
          $('#c9p35o8').prop('checked' , false); 
          $('#c9p35o8').val('NO');
          $('#c9p35o8div').addClass('has-error');
      }
        
        if(campoval == 'c9p35o9')
           {
            if($('#' + campoval).val() == 'SI')
            {
              $('#c9p35o1').prop('checked' , false);
              $('#c9p35o1div').addClass('has-error');
              $('#c9p35o2').prop('checked' , false);
              $('#c9p35o2div').addClass('has-error');
              $('#c9p35o3').prop('checked' , false);
              $('#c9p35o3div').addClass('has-error');
              $('#c9p35o4').prop('checked' , false);
              $('#c9p35o4div').addClass('has-error');
              $('#c9p35o5').prop('checked' , false);
              $('#c9p35o5div').addClass('has-error');
              $('#c9p35o6').prop('checked' , false);
              $('#c9p35o6div').addClass('has-error');
              $('#c9p35o7').prop('checked' , false);
              $('#c9p35o7div').addClass('has-error');
              $('#c9p35o8').prop('checked' , false);
              $('#c9p35o8div').addClass('has-error');
              
              $('#c9p35o7cualmostrar').hide();
              $('#c9p35o7cual').val('98');
                            
              $('#c9p35o1').val('NO');
              $('#c9p35o2').val('NO');
              $('#c9p35o3').val('NO');
              $('#c9p35o4').val('NO');
              $('#c9p35o5').val('NO');
              $('#c9p35o6').val('NO');
              $('#c9p35o7').val('NO');
              $('#c9p35o8').val('NO');
              
              }
}
        else
       {
          $('#c9p35o9').prop('checked' , false); 
          $('#c9p35o9').val('NO');
          $('#c9p35o9div').addClass('has-error');
      }
        
        
        validarguardarc9p4reclog9();
    //  validarcuadrosc9p35(divcompleto,campos);
}
//habilitar boton guardar
function validarguardarc9p4reclog9()
{
   //($('#c9p35o7cual').val());
   if((($('#valorc9p34').val() !== '') && (($('#c9p35o1').val() == 'SI') || ($('#c9p35o2').val() == 'SI')
           || ($('#c9p35o3').val() == 'SI') || ($('#c9p35o4').val() == 'SI')|| ($('#c9p35o5').val() == 'SI')
           || ($('#c9p35o6').val() == 'SI')) && ($('#c9p35o7cual').val() !== ''))
          || (($('#valorc9p34').val() !== '') && (($('#c9p35o9').val() == 'SI') || ($('#c9p35o8').val() == 'SI')))
   || (($('#valorc9p34').val() !== '') && (($('#c9p35o7').val() == 'SI') && ($('#c9p35o7cual').val() !== '')))
   )
   {
       $('#guardarrecalculolog9final').prop('disabled', false);
    }
   else
   {
       $('#guardarrecalculolog9final').prop('disabled', true);
   }
   
}

//validar bolitas y texto
function validarbolitasytextoc9p4reclog9(div,campo)
{ //alert(div + ' juanpis ' + campo);
   if(($('#'+ campo).val() == '') || ($('#'+ campo).val() == '98'))
   { 
       $('#' + div).addClass('has-error');
   }
   else
   { 
       $('#' + div).removeClass('has-error');
   }
    validarguardarc9p4reclog9();
}


// colocar opcion para todos
function colocaropcionc9p4reclog9(opcion,campoval,divcampo)
{
    //alert(opcion);
    $('#' + campoval).val(opcion);
    validarbolitasytextoc9p4reclog9(divcampo,campoval);
}

function validarcampotexcuadrosc9p4reclog9(div,campo,ncampos)
{
    validarbolitasytextoc9p4reclog9(div,campo);
 //   validarcuadrosc5p5(div,ncampos);
}
//dea aca para abajo es logica de cuadros
function colocaropcionc9p30(opcion,campoval,divcampo)
{
    $('#' + campoval).val(opcion);
    if(($('#'+ campoval).val() == ''))
   { 
       $('#' + divcampo).addClass('has-error');
   }
   else
   { 
       $('#' + divcampo).removeClass('has-error');
   }
       
       if($('#' + campoval).val() == '1')
            {
                //alert('aca lo muestra');
                $('#c9p34div').show();
                $('#c9p35div').show();
                $('#c9p35div').addClass('form-group col-md-12 form-group-sm has-error');
                $('#c9p34div').addClass('form-group col-md-12 form-group-sm has-error');
                
                $('#c9p34').prop('checked', false);
                $('#c9p34a').prop('checked', false);
                $('#c9p35o1').prop('checked', false);
                $('#c9p35o2').prop('checked', false);
                $('#c9p35o3').prop('checked', false);
                $('#c9p35o4').prop('checked', false);
                $('#c9p35o5').prop('checked', false);
                $('#c9p35o6').prop('checked', false);
                $('#c9p35o7').prop('checked', false);
                $('#c9p35o8').prop('checked', false);
                $('#c9p35o9').prop('checked', false);
        
                $('#c9p35o7cualmostrar').hide();
                $('#c9p35o7cual').val('98');
                
                $('#guardarrecalculolog9final').prop('disabled', true);

            }
            else
            {
                //alert('aca lo oculta');
            $('#c9p34div').hide();
            $('#c9p35div').hide();
            $('#c9p35div').removeClass('form-group col-md-12 form-group-sm has-error');
            $('#c9p34div').removeClass('form-group col-md-12 form-group-sm has-error'); 
            
            $('#c9p34').prop('checked', false);
            $('#c9p34a').prop('checked', false);
            $('#c9p35o1').prop('checked', false);
            $('#c9p35o2').prop('checked', false);
            $('#c9p35o3').prop('checked', false);
            $('#c9p35o4').prop('checked', false);
            $('#c9p35o5').prop('checked', false);
            $('#c9p35o6').prop('checked', false);
            $('#c9p35o7').prop('checked', false);
            $('#c9p35o8').prop('checked', false);
            $('#c9p35o9').prop('checked', false);
            
            $('#c9p35o7cualmostrar').hide();
            $('#c9p35o7cual').val('98');
            
            
            
            $('#guardarrecalculolog9final').prop('disabled', false);
  
            }
        
        
        
    //    validarguardarc9p4reclog9();
    
}


// colocar opcion para todos
function colocaropcionc9p1(opcion,campoval,divcampo)
{
    //alert(opcion);
    $('#' + campoval).val(opcion);
    
    if(opcion == '1')
        {
           // alert('aca lo muestra');
            $('#c9p1cualdivmostrar').show();
            $('#valorc9p1cual').val('');
            $('#c9p1cualdiv').addClass('has-error');  
            $('#c9p1div').removeClass('has-error');            
        }
        else
        {
            //alert('aca lo oculta');
            $('#c9p1cualdivmostrar').hide();
            $('#valorc9p1cual').val('98');
            $('#c9p1cualdiv').removeClass('has-error'); 
            $('#c9p1div').removeClass('has-error');            
        }
    validarguardarc9p1();
}
// colocar opcion para todos
function colocaropcionc9p2(opcion,campoval,divcampo)
{
    //alert(opcion);
    $('#' + campoval).val(opcion);
    
    if(opcion !== '')
        {
            $('#c9p2div').removeClass('has-error');            
        }
        else
        {
            $('#c9p2div').addClass('has-error');            
        }
    validarguardarc9p1();
}
function validarcampotexcuadrosc9p1(div,campo,ncampos)
{
    validarbolitasytextoc9p1(div,campo);
//    validarcuadrosc5p5(div,ncampos);
}
function validarbolitasytextoc9p1(div,campo)
{ 
   if(($('#'+ campo).val() == '') || ($('#'+ campo).val() == '0') || ($('#'+ campo).val() == '98'))
   { 
       $('#' + div).addClass(' has-error');
   }
   else
   { 
       $('#' + div).removeClass('has-error');
   }
    validarguardarc9p1();
}
function validarguardarc9p1()
{ 
   if(($('#valorc9p1').val() !== '') && ($('#valorc9p1cual').val() !== '') && ($('#valorc9p2').val() !== ''))
   { 
       $('#guardarrecalculolog8final').prop('disabled',false);
   }
   else
   { 
       $('#guardarrecalculolog8final').prop('disabled',true);
   }
 //   validarguardarc5p5();
}













//validar recalculo logro 7
function colocaropcionc9p3recalculolog7(opcion,campoval,divcampo)
{
    $('#' + campoval).val(opcion);
    if(($('#'+ campoval).val() == ''))
   { 
       $('#' + divcampo).addClass('has-error');
   }
   else
   { 
       $('#' + divcampo).removeClass('has-error');
   }
       
       if($('#' + campoval).val() == 'c9p3o1')
            {
                //alert('aca lo muestra');
                $('#c9p3cualdivrecalculolog7').hide();
                $('#c9p3cualdivrecalculolog7').removeClass('form-group col-md-12 form-group-sm has-error');  
                $('#c9p3cualrecalculolog7').val('98');
                
                $('#c9p4divrecalculolog7').hide();
                $('#c9p5divrecalculolog7').hide();
                $('#c9p6div').hide();
                $('#c9p4divrecalculolog7').removeClass('form-group col-md-12 form-group-sm has-error');
                $('#c9p5divrecalculolog7').removeClass('form-group col-md-12 form-group-sm has-error');
                $('#c9p6div').removeClass('form-group col-md-12 form-group-sm has-error');
                
                $('#c9p5cualmostrarrecalculolog7').hide();
                $('#c9p5cualmostrarrecalculolog7').removeClass('form-group col-md-12 form-group-sm has-error');
                $('#c9p5cualrecalculolog7g').val('98');
                
                
                $('#c9p4recalculolog7').prop('checked', false);
                $('#c9p4recalculolog7a').prop('checked', false);
                $('#valorc9p4recalculolog7').val('98');
                
                $('#c9p5recalculolog7').prop('checked', false);
                $('#c9p5recalculolog7a').prop('checked', false);
                $('#c9p5recalculolog7b').prop('checked', false);
                $('#c9p5recalculolog7c').prop('checked', false);
                $('#c9p5recalculolog7d').prop('checked', false);
                $('#c9p5recalculolog7e').prop('checked', false);
                $('#c9p5recalculolog7f').prop('checked', false);
                $('#c9p5recalculolog7h').prop('checked', false);
                
                $('#valorc9p5recalculolog7').val('98');
                
                $('#c9p6').prop('checked', false);
                $('#c9p6a').prop('checked', false);
                
                $('#valorc9p6').val('98');
                
            }
             else if($('#' + campoval).val() == 'c9p3o6')
            {
             $('#c9p3cualdivrecalculolog7').show();
             $('#c9p3cualdivrecalculolog7').addClass('form-group col-md-12 form-group-sm has-error');  
             $('#c9p3cualrecalculolog7').val('');
             
             $('#c9p4divrecalculolog7').show();
             $('#c9p5divrecalculolog7').hide();
             $('#c9p6div').hide();
             $('#c9p4divrecalculolog7').addClass('form-group col-md-12 form-group-sm has-error');
             $('#c9p5divrecalculolog7').removeClass('form-group col-md-12 form-group-sm has-error');
             $('#c9p6div').removeClass('form-group col-md-12 form-group-sm has-error');  
                
             $('#c9p4recalculolog7').prop('checked', false);
             $('#c9p4recalculolog7a').prop('checked', false);
             $('#valorc9p4recalculolog7').val('');
                
             $('#c9p5recalculolog7').prop('checked', false);
             $('#c9p5recalculolog7a').prop('checked', false);
             $('#c9p5recalculolog7b').prop('checked', false);
             $('#c9p5recalculolog7c').prop('checked', false);
             $('#c9p5recalculolog7d').prop('checked', false);
             $('#c9p5recalculolog7e').prop('checked', false);
             $('#c9p5recalculolog7f').prop('checked', false);
             $('#c9p5recalculolog7h').prop('checked', false);
             $('#valorc9p5recalculolog7').val('98');
             
             $('#c9p5cualmostrarrecalculolog7').hide();
             $('#c9p5cualmostrarrecalculolog7').removeClass('form-group col-md-12 form-group-sm has-error');      
             $('#c9p5cualrecalculolog7g').val('98');
             
             $('#c9p6').prop('checked', false);
             $('#c9p6a').prop('checked', false);
             $('#valorc9p6').val('98');   
             
            }

            else
            {
                //alert('aca lo oculta');
             $('#c9p3cualdivrecalculolog7').hide();
             $('#c9p3cualdivrecalculolog7').removeClass('form-group col-md-12 form-group-sm has-error');  
             $('#c9p3cualrecalculolog7').val('98');   
                
             $('#c9p5divrecalculolog7').hide();
             $('#c9p6div').hide();
             
             $('#c9p5divrecalculolog7').removeClass('form-group col-md-12 form-group-sm has-error');
             $('#c9p6div').removeClass('form-group col-md-12 form-group-sm has-error');   
             $('#c9p4divrecalculolog7').show();   
             $('#c9p4divrecalculolog7').addClass('form-group col-md-12 form-group-sm has-error'); 
             
             $('#c9p4recalculolog7').prop('checked', false);
             $('#c9p4recalculolog7a').prop('checked', false);
             $('#valorc9p4recalculolog7').val('');
                
             $('#c9p5recalculolog7').prop('checked', false);
             $('#c9p5recalculolog7a').prop('checked', false);
             $('#c9p5recalculolog7b').prop('checked', false);
             $('#c9p5recalculolog7c').prop('checked', false);
             $('#c9p5recalculolog7d').prop('checked', false);
             $('#c9p5recalculolog7e').prop('checked', false);
             $('#c9p5recalculolog7f').prop('checked', false);
             $('#c9p5recalculolog7h').prop('checked', false);
             $('#valorc9p5recalculolog7').val('98');
             
             $('#c9p5cualmostrarrecalculolog7').hide();
             $('#c9p5cualmostrarrecalculolog7').removeClass('form-group col-md-12 form-group-sm has-error');   
             $('#c9p5cualrecalculolog7g').val('98');
             
             $('#c9p6').prop('checked', false);
             $('#c9p6a').prop('checked', false);
                
             $('#valorc9p6').val('98');
                
            }
        validarguardarrecalculolog7final();
    
}


function validarbolitasytextoc9p4reclog7(div,campo)
{ //alert(div + ' juanpis ' + campo);
   if(($('#'+ campo).val() == ''))
   { 
       $('#' + div).addClass('has-error');
   }
   else
   { 
       $('#' + div).removeClass('has-error');
   }
    validarguardarrecalculolog7final();
}
function colocaropcionc9p4reclog7(opcion,campoval,divcampo)
{
    $('#' + campoval).val(opcion);
    if($('#valorc9p3recalculolog7').val() == 'c9p3o5')
            {
                $('#c9p5divrecalculolog7').hide();
                $('#c9p6div').hide();
                $('#c9p5divrecalculolog7').removeClass('form-group col-md-12 form-group-sm has-error');
                $('#c9p6div').removeClass('form-group col-md-12 form-group-sm has-error');
                
                $('#c9p5cualmostrarrecalculolog7').hide();
                $('#c9p5cualmostrarrecalculolog7').removeClass('form-group col-md-12 form-group-sm has-error');
                $('#c9p5cualrecalculolog7g').val('98');
                
                $('#c9p5recalculolog7').prop('checked', false);
                $('#c9p5recalculolog7a').prop('checked', false);
                $('#c9p5recalculolog7b').prop('checked', false);
                $('#c9p5recalculolog7c').prop('checked', false);
                $('#c9p5recalculolog7d').prop('checked', false);
                $('#c9p5recalculolog7e').prop('checked', false);
                $('#c9p5recalculolog7f').prop('checked', false);
                $('#c9p5recalculolog7h').prop('checked', false);
                
                $('#valorc9p5recalculolog7').val('98');
                
                $('#c9p6').prop('checked', false);
                $('#c9p6a').prop('checked', false);
                
                $('#valorc9p6').val('98');
                
            }
            else if($('#' + campoval).val() == '1')
            {
                $('#c9p5divrecalculolog7').hide();
                $('#c9p6div').hide();
                $('#c9p5divrecalculolog7').removeClass('form-group col-md-12 form-group-sm has-error');
                $('#c9p6div').removeClass('form-group col-md-12 form-group-sm has-error');
                
                $('#c9p5cualmostrarrecalculolog7').hide();
                $('#c9p5cualmostrarrecalculolog7').removeClass('form-group col-md-12 form-group-sm has-error');
                $('#c9p5cualrecalculolog7g').val('98');
                
                $('#c9p5recalculolog7').prop('checked', false);
                $('#c9p5recalculolog7a').prop('checked', false);
                $('#c9p5recalculolog7b').prop('checked', false);
                $('#c9p5recalculolog7c').prop('checked', false);
                $('#c9p5recalculolog7d').prop('checked', false);
                $('#c9p5recalculolog7e').prop('checked', false);
                $('#c9p5recalculolog7f').prop('checked', false);
                $('#c9p5recalculolog7h').prop('checked', false);
                
                $('#valorc9p5recalculolog7').val('98');
                
                $('#c9p6').prop('checked', false);
                $('#c9p6a').prop('checked', false);
                
                $('#valorc9p6').val('98');
                
            }
            else
            {
                $('#c9p5divrecalculolog7').show();
                $('#c9p6div').show();
                $('#c9p5divrecalculolog7').addClass('form-group col-md-12 form-group-sm has-error');
                $('#c9p6div').addClass('form-group col-md-12 form-group-sm has-error');
                
                $('#c9p5cualmostrarrecalculolog7').hide();
                $('#c9p5cualmostrarrecalculolog7').removeClass('form-group col-md-12 form-group-sm has-error');
                $('#c9p5cualrecalculolog7g').val('');
                
                $('#c9p5recalculolog7').prop('checked', false);
                $('#c9p5recalculolog7a').prop('checked', false);
                $('#c9p5recalculolog7b').prop('checked', false);
                $('#c9p5recalculolog7c').prop('checked', false);
                $('#c9p5recalculolog7d').prop('checked', false);
                $('#c9p5recalculolog7e').prop('checked', false);
                $('#c9p5recalculolog7f').prop('checked', false);
                $('#c9p5recalculolog7h').prop('checked', false);
                
                $('#valorc9p5recalculolog7').val('98');
                
                $('#c9p6').prop('checked', false);
                $('#c9p6a').prop('checked', false);
                
                $('#valorc9p6').val('');
            }
    
    validarbolitasytextoc9p4reclog7(divcampo,campoval);
}
function colocaropcionc9p4reclog7pre4(opcion,campoval,divcampo)
{
    $('#' + campoval).val(opcion);
    validarbolitasytextoc9p4reclog7(divcampo,campoval);
}


function colocaropcionc9p4reclog7r(opcion,campoval,divcampo)
{
    $('#' + campoval).val(opcion);
    if(($('#'+ campoval).val() == ''))
   { 
       $('#' + divcampo).addClass('has-error');
   }
   else
   { 
       $('#' + divcampo).removeClass('has-error');
   }
       
       if($('#' + campoval).val() == 'c9p5o7')
            {
                $('#c9p5cualmostrarrecalculolog7').show();
                $('#c9p5cualmostrarrecalculolog7').addClass('form-group col-md-12 form-group-sm has-error');  
                $('#c9p5cualrecalculolog7g').val('');
                
            }
            else
            {
                $('#c9p5cualmostrarrecalculolog7').hide();
                $('#c9p5cualmostrarrecalculolog7').removeClass('form-group col-md-12 form-group-sm has-error');  
                $('#c9p5cualrecalculolog7g').val('98');
            }    
        validarguardarrecalculolog7final();
    
}
function validarcampotexcuadrosreclog7(div,campo,ncampos)
{
    validarbolitasytextorecallog7(div,campo);
 //   validarcuadrosc5p5(div,ncampos);
}
function validarbolitasytextorecallog7(div,campo)
{ 
   if(($('#'+ campo).val() == ''))
   { 
       $('#' + div).addClass('has-error');
   }
   else
   { 
       $('#' + div).removeClass('has-error');
   }
    validarguardarrecalculolog7final();
}
function validarguardarrecalculolog7final()
{  
   if(($('#valorc9p3recalculolog7').val() !== '')&&($('#c9p3cualrecalculolog7').val() !== '')
           &&($('#valorc9p4recalculolog7').val() !== '')&&($('#valorc9p5recalculolog7').val() !== '')
           &&($('#c9p5cualrecalculolog7g').val() !== '')&&($('#valorc9p6').val() !== ''))
   {
       $('#guardarrecalculolog7').prop('disabled', false);
   }
   else
   {
       $('#guardarrecalculolog7').prop('disabled', true);
   }
}


function otraopormejora(idoportunidadno,versionn,valor)
                              {
                                 if(valor == 10)
                                 {
                                 $('#divmejoracondicionesno').show();
                                 $('#mejoracondicionesno').show();  
                                 }else{
                                 $('#divmejoracondicionesno').hide();
                                 $('#mejoracondicionesno').hide();
                                 $('#mejoracondicionesno').val('');
                                }

                              }

    function mensajitooportunidades(titulo, mensaje)
    {
    new jBox('Notice', {
        title: titulo,
        content: mensaje,
        color: 'red',
        animation: {open: 'flip', close: 'flip'},
        position: {x: 'center', y: 'center'},
        autoClose: 2000
    });
    }
/*
    function mensajitooportunidadesOK(titulo, mensaje)
    {
    new jBox('Notice', {
        title: titulo,
        content: mensaje,
        color: 'green',
        animation: {open: 'flip', close: 'flip'},
        position: {x: 'center', y: 'center'},
        autoClose: 2000
    });
    }
*/
</script>
</html>