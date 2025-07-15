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
   <div id="logrosdiv" name="logrosdiv" class="form-group col-md-12 form-group-sm has-error"><label class="control-label">Solo verificación del Cogestor</label>
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
      <div id="c9p4div" name="c9p4div"class="form-group col-md-12 form-group-sm has-error"><label class="control-label">2. Además de lo anterior , ¿Realizó la semana pasada alguna actividad paga por una hora o más ó tuvo algún trabajo o negocio por el que recibió ingresos? (Unica Respuesta)</label>
      <div class="radio"><label><input type="radio" name="c9p4" id="c9p4" onclick="colocaropcionc9p4('1','valorc9p4','c9p4div');" value="1">Si</label></div>
      <div class="radio"><label><input type="radio" name="c9p4" id="c9p4" onclick="colocaropcionc9p4('2','valorc9p4','c9p4div');" value="2">No</label></div> 
      <input type="text" class="form-control" id="valorc9p4" name="valorc9p4" style="display: none" placeholder="Text input" value="">
      </div>
      </div> 
      <!--fin radio una sola seleccion pregunta 2 capitulo 9L-->
      <!--inicio radio una sola seleccion pregunta 12 capitulo 9M-->
      <div class="row">
      <div id="c9p19div" name="c9p19div" class="form-group col-md-12 form-group-sm has-error"><label class="control-label">12. ¿Han gestionado el permiso para trabajar ante la oficina del Ministerio del Trabajo? (Única respuesta)</label>
      <div class="radio"><label><input type="radio" name="c9p19" id="c9p19" onclick="colocaropcionc9p4('1','valorc9p19','c9p19div');" value="1">Si</label></div>
      <div class="radio"><label><input type="radio" name="c9p19" id="c9p19" onclick="colocaropcionc9p4('2','valorc9p19','c9p19div');" value="2" >No</label></div> 
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
        <div class="modal-body"><h3>Desea guardar la información de la oportunidad???</h3>
      <div class="row" id="mensajecalculo24" align="center" name="mensajecalculo24" style="display: none"><label><h1 class="control-label" id="exampleModalLabelpreval24">Información guardada....calculo realizado del logro 24</h1></label></div> 
      <div class="row">
      </div> 
      <div class="modal-footer">
      <input type="text" class="form-control" id="idintegrantemodaloport" name="idintegrantemodaloport" style="display: none" placeholder="" value="">        
      <input type="text" class="form-control" id="version" name="version" style="display: none" placeholder="" value="">        
      <input type="text" class="form-control" id="idoportunidad" name="idoportunidad" style="display: none" placeholder="" value="">        
      <input type="text" class="form-control" id="valoropo" name="valoropo" style="display: none" placeholder="" value="">        
      <button id="guardarlogroxoport" type="button" class="btn btn-primary">Guardar</button>
      <button id="cerrarlogroxoportsino"type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
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
                    $.ajax({
                          url: "fc_insertarlogroxoport",
                          type: "GET",
                          data: {vfolio : $('#folio').val(), vidintegrantemodaloport : $('#idintegrantemodaloport').val(),vidlogro: $('#idlogro').val(),vidoportunidad: $('#idoportunidad').val(),vversion: $('#version').val(),vdoccogestor: $('#doccogestor').val(),vvaloropo: $('#valoropo').val()},
                          dataType: "html",
                          success : function(obj){ 
                          ocultardivlogxoport();    
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
              location.href = "../c_dimensiones/fc_dimensiones?folio=" + $('#folio').val()+"&idintegrante=0"+"&idestacion="+$('#idestacion').val();                    

             });
                //fin de la funcion atras
                $("#salir").click(function ()
        {
         location.href = "../../c_login/fc_vlogin";
        });
    });
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
function exampleModallogroxoportunidadsino(idoport,idlog,folio,version,valoropo)
{
$('#idoportunidad').val(idoport);
$('#version').val(version);
$('#valoropo').val(valoropo);
$('#exampleModallogroxoportsino').modal();
$('#idintegrantemodaloport').val();
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
       $('#' + div).addClass(' has-error');
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
</script>
</html>