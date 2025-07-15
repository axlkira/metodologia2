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
        <input type="text" class="form-control input-sm" id="edad" name="edad" style="display:none"   placeholder="" value="<?php echo($arraydatosgenerales['eedadintegrante']); ?>">
       <input type="text" class="form-control input-sm" id="sexo" name="sexo"  style="display:none" placeholder="" value="<?php echo($arraydatosgenerales['esexointegrante']); ?>">
<!--       <input type="text" class="form-control input-sm" id="c5p10" name="c5p10" style="display:none"  placeholder="" value="<?php echo($arrayrespuestas['ec5p10']); ?>">
       <input type="text" class="form-control input-sm" id="c5p20" name="c5p20" style="display:none"  placeholder="" value="<?php echo($arrayrespuestas['ec5p20']); ?>">-->
        <!--fin para imprimir el idintegrante y llevarlo-->
<hr>
        <form class="form-group" name="formulario" id="formulario">

           <!--Check varias selecciones -->
      <div class="row">
        <div id="c5p6div" name="c5p6div" class="form-group col-md-12 form-group-sm">
        <div id="c5p6o0div" class="has-error">
            <label class="control-label">6.¿Cuáles métodos utiliza …..?  Multiple respuesta                     
                     <button type="button" id="vayuda" name="vayuda" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModal">
                        <span class="glyphicon glyphicon-question-sign" aria-hidden="true"></span> Ayuda
                    </button>       
        </label>
        </div>
         <div id="c5p6mujer" name="c5p6mujer"<?php if($arraydatosgenerales['esexointegrante']=='MASCULINO'){echo('style="display:none"');}?>>    
        <div id="c5p6o1div" <?php if($arrayrespuestas['ec5p6o1']=='' || $arrayrespuestas['ec5p6o1']=='NO'|| $arrayrespuestas['ec5p6o1']=='98'){echo('class=" has-error"');}?>>
        <div class="checkbox">
            <label> <!--en este caso se manda a la fincion javascript el nombre del campo-->
              <input type="checkbox" name="c5p6o1" id="c5p6o1" onclick="cambiarsinoc5p6('SI','c5p6o1','c5p6o1div','c5p6div',11);" <?php if($arrayrespuestas['ec5p6o1']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            Ligadura de trompas o cirugía (esterilización femenina)
            </label>
        </div>
        </div>
        <div id="c5p6o2div" <?php if($arrayrespuestas['ec5p6o2']=='' || $arrayrespuestas['ec5p6o2']=='NO'|| $arrayrespuestas['ec5p6o2']=='98'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="c5p6o2" id="c5p6o2" onclick="cambiarsinoc5p6('SI','c5p6o2','c5p6o2div','c5p6div',11);" <?php if($arrayrespuestas['ec5p6o2']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            Píldora o pastilla
          </label>
        </div>
        </div>
        <div id="c5p6o3div" <?php if($arrayrespuestas['ec5p6o3']==''|| $arrayrespuestas['ec5p6o3']=='NO'|| $arrayrespuestas['ec5p6o3']=='98'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="c5p6o3" id="c5p6o3" onclick="cambiarsinoc5p6('SI','c5p6o3','c5p6o3div','c5p6div',11);" <?php if($arrayrespuestas['ec5p6o3']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            DIU(Dispositivo Intrauterino)
          </label>
        </div>
        </div>  
         
       <div id="c5p6o4div" <?php if($arrayrespuestas['ec5p6o4']==''|| $arrayrespuestas['ec5p6o4']=='NO'|| $arrayrespuestas['ec5p6o4']=='98'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="c5p6o4" id="c5p6o4" onclick="cambiarsinoc5p6('SI','c5p6o4','c5p6o4div','c5p6div',11);" <?php if($arrayrespuestas['ec5p6o4']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            Inyección (Anticonceptivos Inyectables)
          </label>
        </div>
        </div>
       <div id="c5p6o5div" <?php if($arrayrespuestas['ec5p6o5']==''|| $arrayrespuestas['ec5p6o5']=='NO'|| $arrayrespuestas['ec5p6o5']=='98'){echo('class=" has-error"');}?>>
       <div class="checkbox">
         <label>
             <input type="checkbox" name="c5p6o5" id="c5p6o5" onclick="cambiarsinoc5p6('SI','c5p6o5','c5p6o5div','c5p6div',11);" <?php if($arrayrespuestas['ec5p6o5']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
           Implantes subdermicos (Norplant, Jadelle)
         </label>
       </div>
       </div>
       <div id="c5p6o6div" <?php if($arrayrespuestas['ec5p6o6']==''|| $arrayrespuestas['ec5p6o6']=='NO'|| $arrayrespuestas['ec5p6o6']=='98'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="c5p6o6" id="c5p6o6" onclick="cambiarsinoc5p6('SI','c5p6o6','c5p6o6div','c5p6div',11);" <?php if($arrayrespuestas['ec5p6o6']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            Condón  Femenino
          </label>
        </div>
        </div>
            <div id="c5p6o7div" <?php if($arrayrespuestas['ec5p6o7']==''|| $arrayrespuestas['ec5p6o7']=='NO'|| $arrayrespuestas['ec5p6o7']=='98'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="c5p6o7" id="c5p6o7" onclick="cambiarsinoc5p6('SI','c5p6o7','c5p6o7div','c5p6div',11);" <?php if($arrayrespuestas['ec5p6o7']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            Espuma, jalea,óvulos (métodos vaginales espermicidas)
          </label>
        </div>
        </div>
            <div id="c5p6o8div" <?php if($arrayrespuestas['ec5p6o8']==''|| $arrayrespuestas['ec5p6o8']=='NO'|| $arrayrespuestas['ec5p6o8']=='98'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="c5p6o8" id="c5p6o8" onclick="cambiarsinoc5p6('SI','c5p6o8','c5p6o8div','c5p6div',11);" <?php if($arrayrespuestas['ec5p6o8']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            Métodos naturales (coito interrumpido"Eyacular fuera de la vagina"  MELA " Ausencia de la mestruaciòn en la lactancia, el ritmo"consiste en conocer què dìas tiene lugar la  ovulaciòn)
          </label>
        </div>
        </div>
        <div id="c5p6o9div" <?php if($arrayrespuestas['ec5p6o9']==''|| $arrayrespuestas['ec5p6o9']=='NO'|| $arrayrespuestas['ec5p6o9']=='98'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="c5p6o9" id="c5p6o9" onclick="cambiarsinoc5p6('SI','c5p6o9','c5p6o9div','c5p6div',11);" <?php if($arrayrespuestas['ec5p6o9']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
           Anticoncepción de emergencia(Pastilla  que se ingiere dentro de  las 72 horas siguientes a la relaciòn Sexual)
          </label>
        </div>
        </div>           
             
        <div id="c5p6o10div" <?php if($arrayrespuestas['ec5p6o10']==''|| $arrayrespuestas['ec5p6o10']=='NO'|| $arrayrespuestas['ec5p6o10']=='98'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="c5p6o10" id="c5p6o10" onclick="cambiarsinoc5p6('SI','c5p6o10','c5p6o10div','c5p6div',11);" <?php if($arrayrespuestas['ec5p6o10']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
           Otro  ¿Cuál?
          </label>
        </div>
        </div>         
            
        <div class="row" id="c5p6cualmostrar" name="c5p6cualmostrar" <?php if($arrayrespuestas['ec5p6o10']== 'NO'||$arrayrespuestas['ec5p6o10']== ''||$arrayrespuestas['ec5p6o10']== '98'){echo('style="display:none"');}else{echo('');}  ?> >
        <div  id="c5p6cualdiv" name="c5p6cualdiv" class="form-group col-md-3">
                       <label class="control-label">Cual?</label>
                       <input type="text" class="form-control text-uppercase" id="c5p6cual" onkeypress="return soloLetras(event)"  onchange="validarcampotexcuadros('c5p6cualdiv','c5p6cual','10')" name="c5p6cual"   placeholder="Cual?" value="<?php if($arrayrespuestas['ec5p6cual'] == ''){echo('0');}else{ echo($arrayrespuestas['ec5p6cual']);} ?>">
        </div>
        </div>   
         
        <div id="c5p6o11div" <?php if($arrayrespuestas['ec5p6o11']==''|| $arrayrespuestas['ec5p6o11']=='NO'|| $arrayrespuestas['ec5p6o11']=='98'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="c5p6o11" id="c5p6o11" onclick="cambiarsinoc5p6('SI','c5p6o11','c5p6o11div','c5p6div',11);" <?php if($arrayrespuestas['ec5p6o11']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            Ninguno
          </label>
        </div>
        </div>
                      
             
             
       </div>   
       </div>
      </div>      
            
            
       <div class="row">
       <div id="c5p6hdiv" name="c5p6hdiv" class="form-group col-md-12 form-group-sm">     
        <div id="c5p6hombre" name="c5p6hombre"<?php if($arraydatosgenerales['esexointegrante']=='FEMENINO'){echo('style="display:none"');}?>>          
      
            
         <div id="c5p6ho12div" <?php if($arrayrespuestas['ec5p6o12']==''|| $arrayrespuestas['ec5p6o12']=='NO'|| $arrayrespuestas['ec5p6o12']=='98'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="c5p6o12" id="c5p6o12" onclick="cambiarsinoc5p6h('SI','c5p6o12','c5p6ho12div','c5p6hdiv',4);" <?php if($arrayrespuestas['ec5p6o12']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
           Vasectomía (esterilización masculina)
          </label>
        </div>
        </div>
            
         <div id="c5p6ho13div" <?php if($arrayrespuestas['ec5p6o13']==''|| $arrayrespuestas['ec5p6o13']=='NO'|| $arrayrespuestas['ec5p6o13']=='98'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="c5p6o13" id="c5p6o13" onclick="cambiarsinoc5p6h('SI','c5p6o13','c5p6ho13div','c5p6hdiv',4);" <?php if($arrayrespuestas['ec5p6o13']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
           Preservativo o condón
          </label>
        </div>
        </div>
         <div id="c5p6ho14div" <?php if($arrayrespuestas['ec5p6o14']==''|| $arrayrespuestas['ec5p6o14']=='NO'|| $arrayrespuestas['ec5p6o14']=='98'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="c5p6o14" id="c5p6o14" onclick="cambiarsinoc5p6h('SI','c5p6o14','c5p6ho14div','c5p6hdiv',4);" <?php if($arrayrespuestas['ec5p6o14']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
           Mètodos Naturales (coito interrumpido"Eyacular fuera de la vagina  MELA " Ausencia de la mestruaciòn en la lactancia, el ritmo"consiste en conocer què dìas tiene lugar la  ovulaciòn)
          </label>
        </div>
        </div>         
        <div id="c5p6ho15div" <?php if($arrayrespuestas['ec5p6o15']==''|| $arrayrespuestas['ec5p6o15']=='NO'|| $arrayrespuestas['ec5p6o15']=='98'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="c5p6o15" id="c5p6o15" onclick="cambiarsinoc5p6h('SI','c5p6o15','c5p6ho15div','c5p6hdiv',4);" <?php if($arrayrespuestas['ec5p6o15']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            Ninguno
          </label>
        </div>
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
            <?php if($arrayrespuestas['ec5p6o1']=="" & $arrayrespuestas['ec5p6o2']=="" & $arrayrespuestas['ec5p6o3']==""& $arrayrespuestas['ec5p6o4']==""
                     & $arrayrespuestas['ec5p6o5']==""& $arrayrespuestas['ec5p6o6']==""& $arrayrespuestas['ec5p6o7']==""& $arrayrespuestas['ec5p6o8']==""& $arrayrespuestas['ec5p6o9']==""& $arrayrespuestas['ec5p6o10']==""
                    & $arrayrespuestas['ec5p6o11']==""& $arrayrespuestas['ec5p6o12']==""& $arrayrespuestas['ec5p6o13']=="" )
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
            if($('#sexo').val() === 'MASCULINO')

                        $.ajax({
                          url: "fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),
                          vidintegrante : $('#idintegrante').val(),
                          vc5p6o1 :'98',          
                          vc5p6o2 :'98',
                          vc5p6o3 :'98',
                          vc5p6o4 :'98',
                          vc5p6o5 :'98',
                          vc5p6o6 :'98',
                          vc5p6o7 :'98',
                          vc5p6o8 :'98',
                          vc5p6o9 :'98',
                          vc5p6o10 :'98',
                          vc5p6o11 :'98',
                          vc5p6cual :'98',
                          
                          vc5p6o12 : $('#c5p6o12').val(),
                          vc5p6o13 : $('#c5p6o13').val(),
                          vc5p6o14 : $('#c5p6o14').val(),
                          vc5p6o15 : $('#c5p6o15').val()},                      
                          dataType: "html",
                          success : function(obj){                      
                          botonguardar();
                          }
                        });    
                    else $.ajax({
                          url: "fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),
                          vidintegrante : $('#idintegrante').val(),
                          vc5p6o1 : $('#c5p6o1').val(),          
                          vc5p6o2 : $('#c5p6o2').val(),
                          vc5p6o3 : $('#c5p6o3').val(),
                          vc5p6o4 : $('#c5p6o4').val(),
                          vc5p6o5 : $('#c5p6o5').val(),
                          vc5p6o6 : $('#c5p6o6').val(),
                          vc5p6o7 : $('#c5p6o7').val(),
                          vc5p6o8 : $('#c5p6o8').val(),
                          vc5p6o9 : $('#c5p6o9').val(),
                          vc5p6o10 : $('#c5p6o10').val(),
                          vc5p6o11 : $('#c5p6o11').val(),
                          vc5p6cual : $('#c5p6cual').val(),
                          
                          vc5p6o12 :'98',
                          vc5p6o13 :'98',
                          vc5p6o14 :'98',
                          vc5p6o15 :'98'},                      
                          dataType: "html",
                          success : function(obj){                      
                          botonguardar();
                          }
                        });    
        });

        
        $("#actualizar").click(function ()
        {
            if($('#sexo').val() === 'MASCULINO')

                        $.ajax({
                          url: "fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),
                          vidintegrante : $('#idintegrante').val(),
                          vc5p6o1 :'98',          
                          vc5p6o2 :'98',
                          vc5p6o3 :'98',
                          vc5p6o4 :'98',
                          vc5p6o5 :'98',
                          vc5p6o6 :'98',
                          vc5p6o7 :'98',
                          vc5p6o8 :'98',
                          vc5p6o9 :'98',
                          vc5p6o10 :'98',
                          vc5p6o11 :'98',
                          vc5p6cual :'98',
                          
                          vc5p6o12 : $('#c5p6o12').val(),
                          vc5p6o13 : $('#c5p6o13').val(),
                          vc5p6o14 : $('#c5p6o14').val(),
                          vc5p6o15 : $('#c5p6o15').val()},                      
                          dataType: "html",
                          success : function(obj){                      
                          botonguardar();
                          }
                        });    
                    else $.ajax({
                          url: "fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),
                          vidintegrante : $('#idintegrante').val(),
                          vc5p6o1 : $('#c5p6o1').val(),          
                          vc5p6o2 : $('#c5p6o2').val(),
                          vc5p6o3 : $('#c5p6o3').val(),
                          vc5p6o4 : $('#c5p6o4').val(),
                          vc5p6o5 : $('#c5p6o5').val(),
                          vc5p6o6 : $('#c5p6o6').val(),
                          vc5p6o7 : $('#c5p6o7').val(),
                          vc5p6o8 : $('#c5p6o8').val(),
                          vc5p6o9 : $('#c5p6o9').val(),
                          vc5p6o10 : $('#c5p6o10').val(),
                          vc5p6o11 : $('#c5p6o11').val(),
                          vc5p6cual : $('#c5p6cual').val(),
                          
                          vc5p6o12 :'98',
                          vc5p6o13 :'98',
                          vc5p6o14 :'98',
                          vc5p6o15 :'98'},                      
                          dataType: "html",
                          success : function(obj){                      
                          botonguardar();
                          }
                        });    
        });
          
        $("#siguiente").click(function ()
       {
        botonsiguiente();
        if(($('#sexo').val() === 'MASCULINO' && $('#edad').val() >= 40))
          {            
               $.ajax({
                           url: "../c_c5p7/fc_actualizar",
                           type: "GET",
                           data: {vfolio : $('#folio').val(),
                               vidintegrante : $('#idintegrante').val(),
                               vvalorc5p7 : '98',
                               vvalorc5p7resultado : '98'},    
                           dataType: "html",
                           success : function(obj)
                           {
//                          location.href = "../c_c5p7/fc_c5p7?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
                           }
                          });
              
              
              
                          $.ajax({
                           url: "../c_c5p8/fc_actualizar",
                           type: "GET",
                           data: {vfolio : $('#folio').val(),
                          vidintegrante : $('#idintegrante').val(),
                          vc5p8o1 : '98',          
                          vc5p8o2 : '98',
                          vc5p8o3 : '98',
                          vc5p8o4 : '98',
                          vc5p8o5 : '98'},   
                           dataType: "html",
                           success : function(obj)
                           {
//                          location.href = "../c_c5p7/fc_c5p7?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
                           }
                          });
                          
                           $.ajax({
                           url: "../c_c5p9/fc_actualizar",
                           type: "GET",
                           data: {vfolio : $('#folio').val(),
                               vidintegrante : $('#idintegrante').val(),
                               vvalorc5p9 : '98'},   
                           dataType: "html",
                           success : function(obj)
                           {
//                          location.href = "../c_c5p7/fc_c5p7?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
                           }
                          });
                          
                          $.ajax({
                           url: "../c_c5p10/fc_actualizar",
                           type: "GET",
                           data: {vfolio : $('#folio').val(),
                          vidintegrante : $('#idintegrante').val(),
                          vc5p10o1 : '98',          
                          vc5p10o2 : '98',
                          vc5p10o3 : '98',
                          vc5p10o4 : '98',
                          vc5p10o5 : '98',                          
                          vc5p10cual : '98'},   
                           dataType: "html",
                           success : function(obj)
                           {
//                          location.href = "../c_c5p7/fc_c5p7?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
                           }
                          });                          
                          
                          $.ajax({
                           url: "../c_c5p11/fc_actualizar",
                           type: "GET",
                           data: {vfolio : $('#folio').val(),
                               vidintegrante : $('#idintegrante').val(), 
                               vvalorc5p11 : '98',
                               vvalorc5p11cual : '98'},    
                               dataType: "html",
                           success : function(obj)
                           {
                         location.href = "../c_c5p12/fc_c5p12?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
                           }
                          });
          }
          else if (($('#sexo').val() === 'MASCULINO' && $('#edad').val() < 40))
          {               //  alert('fc_spsaltoc5ac6');
                           $.ajax({
                           url: "../c_c5p7/fc_actualizar",
                           type: "GET",
                           data: {vfolio : $('#folio').val(),
                               vidintegrante : $('#idintegrante').val(),
                               vvalorc5p7 : '98',
                               vvalorc5p7resultado : '98'},    
                           dataType: "html",
                           success : function(obj)
                           {
//                          location.href = "../c_c5p7/fc_c5p7?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
                           }
                          });
                          
                          $.ajax({
                           url: "../c_c5p8/fc_actualizar",
                           type: "GET",
                           data: {vfolio : $('#folio').val(),
                          vidintegrante : $('#idintegrante').val(),
                          vc5p8o1 : '98',          
                          vc5p8o2 : '98',
                          vc5p8o3 : '98',
                          vc5p8o4 : '98',
                          vc5p8o5 : '98'},   
                           dataType: "html",
                           success : function(obj)
                           {
//                          location.href = "../c_c5p7/fc_c5p7?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
                           }
                          });
                          
                           $.ajax({
                           url: "../c_c5p9/fc_actualizar",
                           type: "GET",
                           data: {vfolio : $('#folio').val(),
                               vidintegrante : $('#idintegrante').val(),
                               vvalorc5p9 : '98'},   
                           dataType: "html",
                           success : function(obj)
                           {
//                          location.href = "../c_c5p7/fc_c5p7?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
                           }
                          });
                          
                          $.ajax({
                           url: "../c_c5p10/fc_actualizar",
                           type: "GET",
                           data: {vfolio : $('#folio').val(),
                          vidintegrante : $('#idintegrante').val(),
                          vc5p10o1 : '98',          
                          vc5p10o2 : '98',
                          vc5p10o3 : '98',
                          vc5p10o4 : '98',
                          vc5p10o5 : '98',                          
                          vc5p10cual : '98'},   
                           dataType: "html",
                           success : function(obj)
                           {
//                          location.href = "../c_c5p7/fc_c5p7?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
                           }
                          });                          
                          
                          $.ajax({
                           url: "../c_c5p11/fc_actualizar",
                           type: "GET",
                           data: {vfolio : $('#folio').val(),
                               vidintegrante : $('#idintegrante').val(), 
                               vvalorc5p11 : '98',
                               vvalorc5p11cual : '98'},    
                               dataType: "html",
                           success : function(obj)
                           {
//                          location.href = "../c_c5p7/fc_c5p7?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
                           }
                          });
                          
                           $.ajax({
                          url: "../c_c5p12/fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),
                              vidintegrante : $('#idintegrante').val(), 
                              vvalorc5p12 : '98'},    
                          dataType: "html",
                           success : function(obj)
                           {
                                          
                           }
                          });
                          
                          
                          
                          
                          $.ajax({
                          url: "../c_c5p121/fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),
                          vidintegrante : $('#idintegrante').val(),
                          vc5p121o1 : '98',          
                          vc5p121o2 : '98',
                          vc5p121o3 : '98',
                          vc5p121o4 : '98',
                          vc5p121o5 : '98',
                          vc5p121o6 : '98',
                          vc5p121o7 : '98',
                          vc5p121o8 : '98',
                          vc5p121o9 : '98'},
                          dataType: "html",
                           success : function(obj)
                           {
                                          
                           }
                          });
                          
                           $.ajax({
                          url: "../c_c5p13/fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),
                              vidintegrante : $('#idintegrante').val(), 
                              vvalorc5p13 : '98'},    
                          dataType: "html",
                           success : function(obj)
                           {
                                          
                           }
                          });
                          
                          $.ajax({
                          url: "../c_c5p131/fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),
                           vidintegrante : $('#idintegrante').val(),
                          vc5p131o1 : '98',          
                          vc5p131o2 : '98',
                          vc5p131o3 : '98',
                          vc5p131o4 : '98',
                          vc5p131o5 : '98',                                                   
                          vc5p131cual :'98'},    
                          dataType: "html",
                           success : function(obj)
                           {
                                          
                           }
                          });
                          
                          
                          $.ajax({
                          url: "../c_c5p14/fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),vidintegrante : $('#idintegrante').val(),
                          vvalorc5p14 : '98',
                          vvalorc5p14esquema : '98'},    
                          dataType: "html",
                           success : function(obj)
                           {
                         location.href = "../c_capitulosintegrante/fc_capitulosintegrante?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";
                           }
                          });
                          }
           else if(($('#sexo').val() === 'FEMENINO' && $('#edad').val() >= 12))
                {
                    //alert('nadaaaaa');
                    location.href = "../c_c5p7/fc_c5p7?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
                }
                
                
                
//                if(($('#sexo').val() === 'FEMENINO' && $('#edad').val() > 12))
//                {
//                    //alert('nadaaaaa');
//                    location.href = "../c_c5p8/fc_c5p8?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
//                }
            });

        $("#anterior").click(function ()
        {
         botonanterior();
         location.href = "../c_c5p5/fc_c5p5?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
        });

//para cargar variables capitulo, pregunta,encuestador,vivienda,barra



cargardatosgenerales('<?php echo($arraydatosgenerales['ecapitulo']); ?>','Pregunta 6 de 14','<?php echo($arraydatosgenerales['enomcoges']); ?>','<?php echo($arraydatosgenerales['enombreintegrante']." "." - "." "."Sexo:"." ".$arraydatosgenerales['esexointegrante']."   "."  -  "."   "."Edad:"."   ".$arraydatosgenerales['eedadintegrante']); ?>','28');
//control del boton ayuda
botonayuda();

});
//dea aca para abajo es logica de cuadros
function cambiarsinoc5p6(opcion,campoval,divcampo,divcompleto,campos)
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
    if(campoval == 'c5p6o10')
        {
            if($('#' + campoval).val() == 'SI')
            {
                //alert('aca lo muestra');
                $('#c5p6cualmostrar').show(1000);
                $('#c5p6cual').val('');
                $('#c5p6cualdiv').addClass(' has-error');            

            }
            else
            {
                //alert('aca lo oculta');
                $('#c5p6cualmostrar').hide(1000);
                $('#c5p6cual').val('98');
                $('#c5p6cualdiv').removeClass(' has-error');
  
            }
        }
        
        if(campoval == 'c5p6o11')
           {
            if($('#' + campoval).val() == 'SI')
            {
              $('#c5p6o1').prop('checked' , false);
              $('#c5p6o1div').addClass(' has-error');
              $('#c5p6o2').prop('checked' , false);
              $('#c5p6o2div').addClass(' has-error');
              $('#c5p6o3').prop('checked' , false);
              $('#c5p6o3div').addClass(' has-error');
              $('#c5p6o4').prop('checked' , false);
              $('#c5p6o4div').addClass(' has-error');
              $('#c5p6o5').prop('checked' , false);
              $('#c5p6o5div').addClass(' has-error');
              $('#c5p6o6').prop('checked' , false);
              $('#c5p6o6div').addClass(' has-error');
              $('#c5p6o7').prop('checked' , false);
              $('#c5p6o7div').addClass(' has-error');
              $('#c5p6o8').prop('checked' , false);
              $('#c5p6o8div').addClass(' has-error');
              $('#c5p6o9').prop('checked' , false);
              $('#c5p6o9div').addClass(' has-error');
              $('#c5p6o10').prop('checked' , false);
              $('#c5p6o10div').addClass(' has-error');
             
              
              $('#c5p6cualmostrar').hide(1000);
              $('#c5p6cual').val('98');
                            
              $('#c5p6o1').val('NO');
              $('#c5p6o2').val('NO');
              $('#c5p6o3').val('NO');
              $('#c5p6o4').val('NO');
              $('#c5p6o5').val('NO');
              $('#c5p6o6').val('NO');
              $('#c5p6o7').val('NO');
              $('#c5p6o8').val('NO');
              $('#c5p6o9').val('NO');
              $('#c5p6o10').val('NO');
             
              
              
              }
}
        else
       {
          $('#c5p6o11').prop('checked' , false); 
          $('#c5p6o11').val('NO');
          $('#c5p6o11div').addClass(' has-error');
      }
      validarcuadrosc5p6(divcompleto,campos);
}
function validarcuadrosc5p6(divcuadro,ncampos)
{
    //alert($('#' + divcuadro).find('input').prop('checked', true).length);
    //alert($('.has-error').length);
    //alert(ncampos + ' ncampos');
    
    if ($('#c5p6cual').val() != '')
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

    validarcuadrosc5p6(div,ncampos);
}

function cambiarsinoc5p6h(opcion,campoval,divcampo,divcompleto,campos)
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
           
        if(campoval == 'c5p6o15')
           {
            if($('#' + campoval).val() == 'SI')
            {
              $('#c5p6o12').prop('checked' , false);
              $('#c5p6ho12div').addClass(' has-error');
              $('#c5p6o13').prop('checked' , false);
              $('#c5p6ho13div').addClass(' has-error');
              $('#c5p6o14').prop('checked' , false);
              $('#c5p6ho14div').addClass(' has-error');
              
                            
              $('#c5p6o12').val('NO');
              $('#c5p6o13').val('NO');
              $('#c5p6o14').val('NO');
                        
              
              
              }
}
        else
       {
          $('#c5p6o15').prop('checked' , false); 
          $('#c5p6o15').val('NO');
          $('#c5p6ho15div').addClass(' has-error');
      }
      validarcuadrosc5p6h(divcompleto,campos);
}
function validarcuadrosc5p6h(divcuadro,ncampos)
{
    //alert($('#' + divcuadro).find('input').prop('checked', true).length);
    //alert($('.has-error').length);
    //alert(ncampos + ' ncampos');
    
    if ($('#c5p6cual').val() != '')
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




</script>
</html>