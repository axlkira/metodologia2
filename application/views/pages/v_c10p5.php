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
       <input type="text" class="form-control input-sm" id="c10p6o1" name="c10p6o1" style="display:none" placeholder="" value="<?php echo($arrayrespuestas['ec10p6o1']); ?>">
       
        <!--fin para imprimir el idintegrante y llevarlo-->
<hr>
        <form class="form-group" name="formulario" id="formulario">

           <!--Check varias selecciones -->
    <div class="row">
        <div id="c10p5div" name="c10p5div" class="form-group col-md-12 form-group-sm">
        <div id="c10p5o0div" class="has-error">
        <label class="control-label">5. ¿Ante qué autoridades acudió ..… para resolver esos problemas o conflictos?
            <br/>SELECCIÓN MULTIPLE         
            <button type="button" id="vayuda" name="vayuda" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModal">
                        <span class="glyphicon glyphicon-question-sign" aria-hidden="true"></span> Ayuda
                    </button>       
        </label>
        </div>
        <div id="c10p5o1div" <?php if($arrayrespuestas['ec10p5o1']=='' || $arrayrespuestas['ec10p5o1']=='NO' || $arrayrespuestas['ec10p5o1']=='98'){echo('class=" has-error"');}?>>
        <div class="checkbox">
            <label> <!--en este caso se manda a la fincion javascript el nombre del campo-->
              <input type="checkbox" name="c10p5o1" id="c10p5o1" onclick="cambiarsinoc10p5('SI','c10p5o1','c10p5o1div','c10p5div',23);" <?php if($arrayrespuestas['ec10p5o1']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            Casa de justicia. Qué institución
            </label>
        </div>
        </div>
            
        <div class="row" id="c10p5institucion1mostrar" name="c10p5institucion1mostrar" <?php if($arrayrespuestas['ec10p5o1']== 'NO'||$arrayrespuestas['ec10p5o1']== '' ||$arrayrespuestas['ec10p5o1']== '98'){echo('style="display:none"');}else{echo('');}  ?> >
        <div  id="c10p5institucion1div" name="c10p5institucion1div" class="form-group col-md-3">
        <label class="control-label">Cual?</label>
        <input type="text" class="form-control text-uppercase" id="institucion1" onkeypress="return soloLetras(event)"  onchange="validarcampotexcuadros('c10p5institucion1div','institucion1','10')" name="institucion1"   placeholder="Cual?" value="<?php if($arrayrespuestas['ec10p5institucion1'] == ''){echo('0');}else{ echo($arrayrespuestas['ec10p5institucion1']);} ?>">
        </div>
        </div>
            
        <div id="c10p5o2div" <?php if($arrayrespuestas['ec10p5o2']=='' || $arrayrespuestas['ec10p5o2']=='NO' || $arrayrespuestas['ec10p5o2']=='98' ){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="c10p5o2" id="c10p5o2" onclick="cambiarsinoc10p5('SI','c10p5o2','c10p5o2div','c10p5div',23);" <?php if($arrayrespuestas['ec10p5o2']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            Centro de convivencia ciudadana. Qué institución
          </label>
        </div>
        </div>
            
        <div class="row" id="c10p5institucion2mostrar" name="c10p5institucion2mostrar" <?php if($arrayrespuestas['ec10p5o2']== 'NO'||$arrayrespuestas['ec10p5o2']== '' ||$arrayrespuestas['ec10p5o2']== '98'){echo('style="display:none"');}else{echo('');}  ?> >
        <div  id="c10p5institucion2div" name="c10p5institucion2div" class="form-group col-md-3">
        <label class="control-label">Cual?</label>
        <input type="text" class="form-control text-uppercase" id="institucion2" onkeypress="return soloLetras(event)"  onchange="validarcampotexcuadros('c10p5institucion2div','institucion2','10')" name="institucion2"   placeholder="Cual?" value="<?php if($arrayrespuestas['ec10p5institucion2'] == ''){echo('0');}else{ echo($arrayrespuestas['ec10p5institucion2']);} ?>">
        </div>
        </div>
            
        <div id="c10p5o3div" <?php if($arrayrespuestas['ec10p5o3']==''|| $arrayrespuestas['ec10p5o3']=='NO'|| $arrayrespuestas['ec10p5o3']=='98'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="c10p5o3" id="c10p5o3" onclick="cambiarsinoc10p5('SI','c10p5o3','c10p5o3div','c10p5div',23);" <?php if($arrayrespuestas['ec10p5o3']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            Centro de conciliación 
          </label>
        </div>
        </div>  
         
       <div id="c10p5o4div" <?php if($arrayrespuestas['ec10p5o4']==''|| $arrayrespuestas['ec10p5o4']=='NO'|| $arrayrespuestas['ec10p5o4']=='98'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="c10p5o4" id="c10p5o4" onclick="cambiarsinoc10p5('SI','c10p5o4','c10p5o4div','c10p5div',23);" <?php if($arrayrespuestas['ec10p5o4']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            Fiscalía General de la Nación 
          </label>
        </div>
        </div>
       <div id="c10p5o5div" <?php if($arrayrespuestas['ec10p5o5']==''|| $arrayrespuestas['ec10p5o5']=='NO'|| $arrayrespuestas['ec10p5o5']=='98'){echo('class=" has-error"');}?>>
       <div class="checkbox">
         <label>
             <input type="checkbox" name="c10p5o5" id="c10p5o5" onclick="cambiarsinoc10p5('SI','c10p5o5','c10p5o5div','c10p5div',23);" <?php if($arrayrespuestas['ec10p5o5']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
           Despacho judicial (juzgado)
         </label>
       </div>
       </div>
       <div id="c10p5o6div" <?php if($arrayrespuestas['ec10p5o6']==''|| $arrayrespuestas['ec10p5o6']=='NO'|| $arrayrespuestas['ec10p5o6']=='98'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="c10p5o6" id="c10p5o6" onclick="cambiarsinoc10p5('SI','c10p5o6','c10p5o6div','c10p5div',23);" <?php if($arrayrespuestas['ec10p5o6']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            Comisaría de familia
          </label>
        </div>
        </div>
            <div id="c10p5o7div" <?php if($arrayrespuestas['ec10p5o7']==''|| $arrayrespuestas['ec10p5o7']=='NO'|| $arrayrespuestas['ec10p5o7']=='98'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="c10p5o7" id="c10p5o7" onclick="cambiarsinoc10p5('SI','c10p5o7','c10p5o7div','c10p5div',23);" <?php if($arrayrespuestas['ec10p5o7']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            Inspección de policía 
          </label>
        </div>
        </div>
            <div id="c10p5o8div" <?php if($arrayrespuestas['ec10p5o8']==''|| $arrayrespuestas['ec10p5o8']=='NO'|| $arrayrespuestas['ec10p5o8']=='98'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="c10p5o8" id="c10p5o8" onclick="cambiarsinoc10p5('SI','c10p5o8','c10p5o8div','c10p5div',23);" <?php if($arrayrespuestas['ec10p5o8']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            Superintendencia (de servicios, industria, solidaria, salud, etc.) 
          </label>
        </div>
        </div>
            <div id="c10p5o9div" <?php if($arrayrespuestas['ec10p5o9']==''|| $arrayrespuestas['ec10p5o9']=='NO'|| $arrayrespuestas['ec10p5o9']=='98'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="c10p5o9" id="c10p5o9" onclick="cambiarsinoc10p5('SI','c10p5o9','c10p5o9div','c10p5div',23);" <?php if($arrayrespuestas['ec10p5o9']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            Base militar
          </label>
        </div>
        </div>
        <div id="c10p5o10div" <?php if($arrayrespuestas['ec10p5o10']==''|| $arrayrespuestas['ec10p5o10']=='NO'|| $arrayrespuestas['ec10p5o10']=='98'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="c10p5o10" id="c10p5o10" onclick="cambiarsinoc10p5('SI','c10p5o10','c10p5o10div','c10p5div',23);" <?php if($arrayrespuestas['ec10p5o10']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            Grupo armado al margen de la ley
          </label>
        </div>
        </div>
        <div id="c10p5o11div" <?php if($arrayrespuestas['ec10p5o11']==''|| $arrayrespuestas['ec10p5o11']=='NO'|| $arrayrespuestas['ec10p5o11']=='98'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="c10p5o11" id="c10p5o11" onclick="cambiarsinoc10p5('SI','c10p5o11','c10p5o11div','c10p5div',23);" <?php if($arrayrespuestas['ec10p5o11']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            Jurisdicción especial indígena 
          </label>
        </div>
        </div>         
        <div id="c10p5o12div" <?php if($arrayrespuestas['ec10p5o12']==''|| $arrayrespuestas['ec10p5o12']=='NO'|| $arrayrespuestas['ec10p5o12']=='98'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="c10p5o12" id="c10p5o12" onclick="cambiarsinoc10p5('SI','c10p5o12','c10p5o12div','c10p5div',23);" <?php if($arrayrespuestas['ec10p5o12']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            Jurisdicción de paz (juez de paz)
          </label>
        </div>
        </div>
<div id="c10p5o13div" <?php if($arrayrespuestas['ec10p5o13']==''|| $arrayrespuestas['ec10p5o13']=='NO'|| $arrayrespuestas['ec10p5o13']=='98'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="c10p5o13" id="c10p5o13" onclick="cambiarsinoc10p5('SI','c10p5o13','c10p5o13div','c10p5div',23);" <?php if($arrayrespuestas['ec10p5o13']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            ICBF
          </label>
        </div>
        </div>
<div id="c10p5o14div" <?php if($arrayrespuestas['ec10p5o14']==''|| $arrayrespuestas['ec10p5o14']=='NO'|| $arrayrespuestas['ec10p5o14']=='98'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="c10p5o14" id="c10p5o14" onclick="cambiarsinoc10p5('SI','c10p5o14','c10p5o14div','c10p5div',23);" <?php if($arrayrespuestas['ec10p5o14']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            Justicia negritudes
          </label>
        </div>
        </div>
<div id="c10p5o15div" <?php if($arrayrespuestas['ec10p5o15']==''|| $arrayrespuestas['ec10p5o15']=='NO'|| $arrayrespuestas['ec10p5o15']=='98'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="c10p5o15" id="c10p5o15" onclick="cambiarsinoc10p5('SI','c10p5o15','c10p5o15div','c10p5div',23);" <?php if($arrayrespuestas['ec10p5o15']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            Organización comunitaria (JAC, JAL) 
          </label>
        </div>
        </div>
<div id="c10p5o16div" <?php if($arrayrespuestas['ec10p5o16']==''|| $arrayrespuestas['ec10p5o16']=='NO'|| $arrayrespuestas['ec10p5o16']=='98'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="c10p5o16" id="c10p5o16" onclick="cambiarsinoc10p5('SI','c10p5o16','c10p5o16div','c10p5div',23);" <?php if($arrayrespuestas['ec10p5o16']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            Defensoría del Pueblo
          </label>
        </div>
        </div>
<div id="c10p5o17div" <?php if($arrayrespuestas['ec10p5o17']==''|| $arrayrespuestas['ec10p5o17']=='NO'|| $arrayrespuestas['ec10p5o17']=='98'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="c10p5o17" id="c10p5o17" onclick="cambiarsinoc10p5('SI','c10p5o17','c10p5o17div','c10p5div',23);" <?php if($arrayrespuestas['ec10p5o17']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            Personería Municipal
          </label>
        </div>
        </div>
<div id="c10p5o18div" <?php if($arrayrespuestas['ec10p5o18']==''|| $arrayrespuestas['ec10p5o18']=='NO'|| $arrayrespuestas['ec10p5o18']=='98'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="c10p5o18" id="c10p5o18" onclick="cambiarsinoc10p5('SI','c10p5o18','c10p5o18div','c10p5div',23);" <?php if($arrayrespuestas['ec10p5o18']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            Conciliación en equidad
          </label>
        </div>
        </div>
<div id="c10p5o19div" <?php if($arrayrespuestas['ec10p5o19']==''|| $arrayrespuestas['ec10p5o19']=='NO'|| $arrayrespuestas['ec10p5o19']=='98'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="c10p5o19" id="c10p5o19" onclick="cambiarsinoc10p5('SI','c10p5o19','c10p5o19div','c10p5div',23);" <?php if($arrayrespuestas['ec10p5o19']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            Notaría
          </label>
        </div>
        </div>
<div id="c10p5o20div" <?php if($arrayrespuestas['ec10p5o20']==''|| $arrayrespuestas['ec10p5o20']=='NO'|| $arrayrespuestas['ec10p5o20']=='98'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="c10p5o20" id="c10p5o20" onclick="cambiarsinoc10p5('SI','c10p5o20','c10p5o20div','c10p5div',23);" <?php if($arrayrespuestas['ec10p5o20']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            Un abogado
          </label>
        </div>
        </div>
<div id="c10p5o21div" <?php if($arrayrespuestas['ec10p5o21']==''|| $arrayrespuestas['ec10p5o21']=='NO'|| $arrayrespuestas['ec10p5o21']=='98'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="c10p5o21" id="c10p5o21" onclick="cambiarsinoc10p5('SI','c10p5o21','c10p5o21div','c10p5div',23);" <?php if($arrayrespuestas['ec10p5o21']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            Un particular
          </label>
        </div>
        </div>
<div id="c10p5o22div" <?php if($arrayrespuestas['ec10p5o22']==''|| $arrayrespuestas['ec10p5o22']=='NO'|| $arrayrespuestas['ec10p5o22']=='98'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="c10p5o22" id="c10p5o22" onclick="cambiarsinoc10p5('SI','c10p5o22','c10p5o22div','c10p5div',23);" <?php if($arrayrespuestas['ec10p5o22']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            Otro. Cuál 
          </label>
        </div>
        </div>
            
        <div class="row" id="c10p5cualmostrar" name="c10p5cualmostrar" <?php if($arrayrespuestas['ec10p5o22']== 'NO'||$arrayrespuestas['ec10p5o22']== ''||$arrayrespuestas['ec10p5o22']== '98'){echo('style="display:none"');}else{echo('');}  ?> >
        <div  id="c10p5cualdiv" name="c10p5cualdiv" class="form-group col-md-3">
        <label class="control-label">Cual?</label>
        <input type="text" class="form-control text-uppercase" id="c10p5cual" onkeypress="return soloLetras(event)"  onchange="validarcampotexcuadros('c10p5cualdiv','c10p5cual','10')" name="c10p5cual"   placeholder="Cual?" value="<?php if($arrayrespuestas['ec10p5cual'] == ''){echo('0');}else{ echo($arrayrespuestas['ec10p5cual']);} ?>">
        </div>
        </div>

        <div id="c10p5o23div" <?php if($arrayrespuestas['ec10p5o23']==''|| $arrayrespuestas['ec10p5o23']=='NO'|| $arrayrespuestas['ec10p5o23']=='98'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="c10p5o23" id="c10p5o23" onclick="cambiarsinoc10p5('SI','c10p5o23','c10p5o23div','c10p5div',23);" <?php if($arrayrespuestas['ec10p5o23']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            No ha solicitado ayuda
          </label>
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
            <?php if($arrayrespuestas['ec10p5o1']=="" & $arrayrespuestas['ec10p5o2']=="" & $arrayrespuestas['ec10p5o3']==""& $arrayrespuestas['ec10p5o4']==""
                     & $arrayrespuestas['ec10p5o5']==""& $arrayrespuestas['ec10p5o6']==""& $arrayrespuestas['ec10p5o7']==""& $arrayrespuestas['ec10p5o8']==""
                    & $arrayrespuestas['ec10p5o9']==""& $arrayrespuestas['ec10p5o10']==""& $arrayrespuestas['ec10p5o11']==""& $arrayrespuestas['ec10p5o12']==""
                    & $arrayrespuestas['ec10p5o13']==""& $arrayrespuestas['ec10p5o14']==""& $arrayrespuestas['ec10p5o15']==""& $arrayrespuestas['ec10p5o16']==""
                    & $arrayrespuestas['ec10p5o17']==""& $arrayrespuestas['ec10p5o18']==""& $arrayrespuestas['ec10p5o19']==""& $arrayrespuestas['ec10p5o20']==""
                    & $arrayrespuestas['ec10p5o21']==""& $arrayrespuestas['ec10p5o22']==""& $arrayrespuestas['ec10p5o23']=="")
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
                          vc10p5o1 : $('#c10p5o1').val(),          
                          vc10p5o2 : $('#c10p5o2').val(),
                          vc10p5o3 : $('#c10p5o3').val(),
                          vc10p5o4 : $('#c10p5o4').val(),
                          vc10p5o5 : $('#c10p5o5').val(),
                          vc10p5o6 : $('#c10p5o6').val(),
                          vc10p5o7 : $('#c10p5o7').val(),
                          vc10p5o8 : $('#c10p5o8').val(),
                          vc10p5o9 : $('#c10p5o9').val(),
                          vc10p5o10 : $('#c10p5o10').val(),
                          vc10p5o11 : $('#c10p5o11').val(),
                          vc10p5o12 : $('#c10p5o12').val(),
                          vc10p5o13 : $('#c10p5o13').val(),
                          vc10p5o14 : $('#c10p5o14').val(),
                          vc10p5o15 : $('#c10p5o15').val(),
                          vc10p5o16 : $('#c10p5o16').val(),
                          vc10p5o17 : $('#c10p5o17').val(),
                          vc10p5o18 : $('#c10p5o18').val(),
                          vc10p5o19 : $('#c10p5o19').val(),
                          vc10p5o20 : $('#c10p5o20').val(),
                          vc10p5o21 : $('#c10p5o21').val(),
                          vc10p5o22 : $('#c10p5o22').val(),
                          vc10p5o23 : $('#c10p5o23').val(),
                          vinstitucion1 : $('#institucion1').val(),
                          vinstitucion2 : $('#institucion2').val(),
                          vc10p5cual : $('#c10p5cual').val()},
                      
                          dataType: "html",
                          success : function(obj){                      
                          botonguardar();
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
                          vc10p5o1 : $('#c10p5o1').val(),          
                          vc10p5o2 : $('#c10p5o2').val(),
                          vc10p5o3 : $('#c10p5o3').val(),
                          vc10p5o4 : $('#c10p5o4').val(),
                          vc10p5o5 : $('#c10p5o5').val(),
                          vc10p5o6 : $('#c10p5o6').val(),
                          vc10p5o7 : $('#c10p5o7').val(),
                          vc10p5o8 : $('#c10p5o8').val(),
                          vc10p5o9 : $('#c10p5o9').val(),
                          vc10p5o10 : $('#c10p5o10').val(),
                          vc10p5o11 : $('#c10p5o11').val(),
                          vc10p5o12 : $('#c10p5o12').val(),
                          vc10p5o13 : $('#c10p5o13').val(),
                          vc10p5o14 : $('#c10p5o14').val(),
                          vc10p5o15 : $('#c10p5o15').val(),
                          vc10p5o16 : $('#c10p5o16').val(),
                          vc10p5o17 : $('#c10p5o17').val(),
                          vc10p5o18 : $('#c10p5o18').val(),
                          vc10p5o19 : $('#c10p5o19').val(),
                          vc10p5o20 : $('#c10p5o20').val(),
                          vc10p5o21 : $('#c10p5o21').val(),
                          vc10p5o22 : $('#c10p5o22').val(),
                          vc10p5o23 : $('#c10p5o23').val(),
                          vinstitucion1 : $('#institucion1').val(),
                          vinstitucion2 : $('#institucion2').val(),
                          vc10p5cual : $('#c10p5cual').val()},
                      
                          dataType: "html",
                          success : function(obj){                      
                          botonguardar();
                          }
                        });                    
        });
        

        $("#siguiente").click(function ()
        {
        
          if (($('#c10p6o1').val() == '98')) 
         {
         location.href = "../c_capitulosintegrante/fc_capitulosintegrante?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val();                       
        }
        else
        {
         location.href = "../c_c10p6/fc_c10p6?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                       
        }
        });
        $("#anterior").click(function ()
        {
         botonanterior();
         location.href = "../c_c10p4/fc_c10p4?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
        });

//para cargar variables capitulo, pregunta,encuestador,vivienda,barra



cargardatosgenerales('<?php echo($arraydatosgenerales['ecapitulo']); ?>','Pregunta 5 de 6','<?php echo($arraydatosgenerales['enomcoges']); ?>','<?php echo($arraydatosgenerales['enombreintegrante']." "." - "." "."Sexo:"." ".$arraydatosgenerales['esexointegrante']."   "."  -  "."   "."Edad:"."   ".$arraydatosgenerales['eedadintegrante']); ?>','85');
//control del boton ayuda
botonayuda();

});
//dea aca para abajo es logica de cuadros
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
                //alert('aca lo muestra');
                $('#c10p5institucion1mostrar').show(1000);
                $('#institucion1').val('');
                $('#c10p5institucion1div').addClass(' has-error');            

            }
            else
            {
                //alert('aca lo oculta');
                $('#c10p5institucion1mostrar').hide(1000);
                $('#institucion1').val('98');
                $('#c10p5institucion1div').removeClass(' has-error');
  
            }
        }
        if(campoval == 'c10p5o2')
        {
            if($('#' + campoval).val() == 'SI')
            {
                //alert('aca lo muestra');
                $('#c10p5institucion2mostrar').show(1000);
                $('#institucion2').val('');
                $('#c10p5institucion2div').addClass(' has-error');            
            }
            else
            {
                //alert('aca lo oculta');
                $('#c10p5institucion2mostrar').hide(1000);
                $('#institucion2').val('98');
                $('#c10p5institucion2div').removeClass(' has-error');
  
            }
        }
        if(campoval == 'c10p5o22')
        {
            if($('#' + campoval).val() == 'SI')
            {
                //alert('aca lo muestra');
                $('#c10p5cualmostrar').show(1000);
                $('#c10p5cual').val('');
                $('#c10p5cualdiv').addClass(' has-error');            
            }
            else
            {
                //alert('aca lo oculta');
                $('#c10p5cualmostrar').hide(1000);
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
              
              $('#c10p5institucion1mostrar').hide(1000);
              $('#institucion1').val('98');
              $('#c10p5institucion2mostrar').hide(1000);
              $('#institucion2').val('98');
              $('#c10p5cualmostrar').hide(1000);
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
    //alert($('#' + divcuadro).find('input').prop('checked', true).length);
    //alert($('.has-error').length);
    //alert(ncampos + ' ncampos');
    
    if ($('#c10p5cual').val() != ''&& $('#institucion2').val() != ''&& $('#institucion1').val() != '')
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
function validarcampotexcuadros(div,campo,ncampos)
{
    validarbolitasytexto(div,campo);

    validarcuadrosc10p5(div,ncampos);
}</script>
</html>