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
        <input type="text" class="form-control input-sm" id="c11p12d" name="c11p12d" style="display:none"  placeholder="" value="<?php echo($arrayrespuestas['ec11p12d']); ?>">
        <input type="text" class="form-control input-sm" id="c11p14o1" name="c11p14o1"  style="display:none"  placeholder="" value="<?php echo($arrayrespuestas['ec11p14o1']); ?>">
        <input type="text" class="form-control" id="valorc11p12a" style="display:none" name="valorc11p12a"  placeholder="Text input" value="<?php echo($arrayrespuestas['ec11p12a']); ?>">
        <!--fin para imprimir el folio y llevarlo-->    
<hr>
       <form class="form-group" name="formulario" id="formulario">

<!--Check varias selecciones -->
    <div class="row">
        
        <div id="c11p13div1" name="c11p13div1" <?php if($arrayrespuestas['ec11p13o1']=='' ){echo('class="form-group col-md-12 form-group-sm has-error"');}else{echo('class="form-group col-md-12 form-group-sm"');}?>>   
        <label class="control-label">13. El integrante del hogar pertenece y participa de alguno de los siguientes grupos: (SELECCIÓN DE ÚNICA RESPUESTA POR ITEM)
                     <button type="button" id="vayuda" name="vayuda" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModal">
                        <span class="glyphicon glyphicon-question-sign" aria-hidden="true"></span> Ayuda
                    </button>       
        </label><br><br>
        <label class="control-label col-md-5">Asociaciones de padres de familia </label>
          <div class="radio-inline">
                    <label>
                        <input type="radio" name="c11p13o1" id="c11p13o1" onclick="colocaropcion('c11p13a','valorc11p13o1','c11p13div1');" value="c11p13a" <?php if($arrayrespuestas['ec11p13o1']=='c11p13a'){echo('checked');}?>>
                        Activamente
                    </label>
                </div>
                <div class="radio-inline">
                    <label>
                        <input type="radio" name="c11p13o1" id="c11p13o1" onclick="colocaropcion('c11p13r','valorc11p13o1','c11p13div1');" value="c11p13r" <?php if($arrayrespuestas['ec11p13o1']=='c11p13r'){echo('checked');}?>>
                        Regularmente
                    </label>             
                </div>
             <div class="radio-inline">
                    <label>
                        <input type="radio" name="c11p13o1" id="c11p13o1" onclick="colocaropcion('c11p13o','valorc11p13o1','c11p13div1');" value="c11p13o" <?php if($arrayrespuestas['ec11p13o1']=='c11p13o'){echo('checked');}?>>
                        Ocasionalmente
                    </label>             
                </div>
            <div class="radio-inline">
                    <label>
                        <input type="radio" name="c11p13o1" id="c11p13o1" onclick="colocaropcion('c11p13n','valorc11p13o1','c11p13div1');" value="c11p13n" <?php if($arrayrespuestas['ec11p13o1']=='c11p13n'){echo('checked');}?>>
                        No se encuentra vinculado a este grupo
                    </label>             
                </div>
          <input type="text" class="form-control" id="valorc11p13o1" name="valorc11p13o1" style="display:none" placeholder="Text input" value="<?php echo($arrayrespuestas['ec11p13o1']); ?>">
          </div>
        <div id="c11p13div2" name="c11p13div2" <?php if($arrayrespuestas['ec11p13o2']=='' ){echo('class="form-group col-md-12 form-group-sm has-error"');}else{echo('class="form-group col-md-12 form-group-sm"');}?>>   
          <label class="control-label col-md-5">Juntas de Acción Comunal </label>
          <div class="radio-inline">
                   <label>
                        <input type="radio" name="c11p13o2" id="c11p13o2" onclick="colocaropcion('c11p13a','valorc11p13o2','c11p13div2');" value="c11p13a" <?php if($arrayrespuestas['ec11p13o2']=='c11p13a'){echo('checked');}?>>
                        Activamente
                    </label>
                </div>
                <div class="radio-inline">
                    <label>
                        <input type="radio" name="c11p13o2" id="c11p13o2" onclick="colocaropcion('c11p13r','valorc11p13o2','c11p13div2');" value="c11p13r" <?php if($arrayrespuestas['ec11p13o2']=='c11p13r'){echo('checked');}?>>
                        Regularmente
                    </label>             
                </div>
             <div class="radio-inline">
                    <label>
                        <input type="radio" name="c11p13o2" id="c11p13o2" onclick="colocaropcion('c11p13o','valorc11p13o2','c11p13div2');" value="c11p13o" <?php if($arrayrespuestas['ec11p13o2']=='c11p13o'){echo('checked');}?>>
                        Ocasionalmente
                    </label>             
                </div>
          <div class="radio-inline">
                    <label>
                        <input type="radio" name="c11p13o2" id="c11p13o2" onclick="colocaropcion('c11p13n','valorc11p13o2','c11p13div2');" value="c11p13n" <?php if($arrayrespuestas['ec11p13o2']=='c11p13n'){echo('checked');}?>>
                        No se encuentra vinculado a este grupo
                    </label>             
                </div>
          <input type="text" class="form-control" id="valorc11p13o2" name="valorc11p13o2" style="display:none"  placeholder="Text input" value="<?php echo($arrayrespuestas['ec11p13o2']); ?>">
             </div>
        <div id="c11p13div3" name="c11p13div3" <?php if($arrayrespuestas['ec11p13o3']=='' ){echo('class="form-group col-md-12 form-group-sm has-error"');}else{echo('class="form-group col-md-12 form-group-sm"');}?>>   
          <label class="control-label col-md-5">Juntas de usuarios de servicios públicos </label>
          <div class="radio-inline">
                   <label>
                        <input type="radio" name="c11p13o3" id="c11p13o3" onclick="colocaropcion('c11p13a','valorc11p13o3','c11p13div3');" value="c11p13a" <?php if($arrayrespuestas['ec11p13o3']=='c11p13a'){echo('checked');}?>>
                        Activamente
                    </label>
                </div>
                <div class="radio-inline">
                    <label>
                        <input type="radio" name="c11p13o3" id="c11p13o3" onclick="colocaropcion('c11p13r','valorc11p13o3','c11p13div3');" value="c11p13r" <?php if($arrayrespuestas['ec11p13o3']=='c11p13r'){echo('checked');}?>>
                        Regularmente
                    </label>             
                </div>
             <div class="radio-inline">
                    <label>
                        <input type="radio" name="c11p13o3" id="c11p13o3" onclick="colocaropcion('c11p13o','valorc11p13o3','c11p13div3');" value="c11p13o" <?php if($arrayrespuestas['ec11p13o3']=='c11p13o'){echo('checked');}?>>
                        Ocasionalmente
                    </label>             
                </div>
          <div class="radio-inline">
                    <label>
                        <input type="radio" name="c11p13o3" id="c11p13o3" onclick="colocaropcion('c11p13n','valorc11p13o3','c11p13div3');" value="c11p13n" <?php if($arrayrespuestas['ec11p13o3']=='c11p13n'){echo('checked');}?>>
                        No se encuentra vinculado a este grupo
                    </label>             
                </div>
          <input type="text" class="form-control" id="valorc11p13o3"  name="valorc11p13o3" style="display:none"  placeholder="Text input" value="<?php echo($arrayrespuestas['ec11p13o3']); ?>">
             </div>
        <div id="c11p13div4" name="c11p13div4" <?php if($arrayrespuestas['ec11p13o4']=='' ){echo('class="form-group col-md-12 form-group-sm has-error"');}else{echo('class="form-group col-md-12 form-group-sm"');}?>>   
          <label class="control-label col-md-5">Comités de Participación Comunitaria </label>
          <div class="radio-inline">
                   <label>
                        <input type="radio" name="c11p13o4" id="c11p13o4" onclick="colocaropcion('c11p13a','valorc11p13o4','c11p13div4');" value="c11p13a" <?php if($arrayrespuestas['ec11p13o4']=='c11p13a'){echo('checked');}?>>
                        Activamente
                    </label>
                </div>
                <div class="radio-inline">
                    <label>
                        <input type="radio" name="c11p13o4" id="c11p13o4" onclick="colocaropcion('c11p13r','valorc11p13o4','c11p13div4');" value="c11p13r" <?php if($arrayrespuestas['ec11p13o4']=='c11p13r'){echo('checked');}?>>
                        Regularmente
                    </label>             
                </div>
             <div class="radio-inline">
                    <label>
                        <input type="radio" name="c11p13o4" id="c11p13o4" onclick="colocaropcion('c11p13o','valorc11p13o4','c11p13div4');" value="c11p13o" <?php if($arrayrespuestas['ec11p13o4']=='c11p13o'){echo('checked');}?>>
                        Ocasionalmente
                    </label>             
                </div>
          <div class="radio-inline">
                    <label>
                        <input type="radio" name="c11p13o4" id="c11p13o4" onclick="colocaropcion('c11p13n','valorc11p13o4','c11p13div4');" value="c11p13n" <?php if($arrayrespuestas['ec11p13o4']=='c11p13n'){echo('checked');}?>>
                        No se encuentra vinculado a este grupo
                    </label>             
                </div>
          <input type="text" class="form-control" id="valorc11p13o4" name="valorc11p13o4" style="display:none"  placeholder="Text input" value="<?php echo($arrayrespuestas['ec11p13o4']); ?>">
             </div>
 
        <div id="c11p13div5" name="c11p13div5" <?php if($arrayrespuestas['ec11p13o5']=='' ){echo('class="form-group col-md-12 form-group-sm has-error"');}else{echo('class="form-group col-md-12 form-group-sm"');}?>>   
          <label class="control-label col-md-5">Juntas Municipales de Educación </label>
          <div class="radio-inline">
                   <label>
                        <input type="radio" name="c11p13o5" id="c11p13o5" onclick="colocaropcion('c11p13a','valorc11p13o5','c11p13div5');" value="c11p13a" <?php if($arrayrespuestas['ec11p13o5']=='c11p13a'){echo('checked');}?>>
                        Activamente
                    </label>
                </div>
                <div class="radio-inline">
                    <label>
                        <input type="radio" name="c11p13o5" id="c11p13o5" onclick="colocaropcion('c11p13r','valorc11p13o5','c11p13div5');" value="c11p13r" <?php if($arrayrespuestas['ec11p13o5']=='c11p13r'){echo('checked');}?>>
                        Regularmente
                    </label>             
                </div>
             <div class="radio-inline">
                    <label>
                        <input type="radio" name="c11p13o5" id="c11p13o5" onclick="colocaropcion('c11p13o','valorc11p13o5','c11p13div5');" value="c11p13o" <?php if($arrayrespuestas['ec11p13o5']=='c11p13o'){echo('checked');}?>>
                        Ocasionalmente
                    </label>             
                </div>
          <div class="radio-inline">
                    <label>
                        <input type="radio" name="c11p13o5" id="c11p13o5" onclick="colocaropcion('c11p13n','valorc11p13o5','c11p13div5');" value="c11p13n" <?php if($arrayrespuestas['ec11p13o5']=='c11p13n'){echo('checked');}?>>
                        No se encuentra vinculado a este grupo
                    </label>             
                </div>
          <input type="text" class="form-control" id="valorc11p13o5" name="valorc11p13o5" style="display:none"  placeholder="Text input" value="<?php echo($arrayrespuestas['ec11p13o5']); ?>">
             </div>
        <div id="c11p13div6" name="c11p13div6" <?php if($arrayrespuestas['ec11p13o6']=='' ){echo('class="form-group col-md-12 form-group-sm has-error"');}else{echo('class="form-group col-md-12 form-group-sm"');}?>>   
          <label class="control-label col-md-5">Organizaciones de Población en Situación de Desplazamiento </label>
          <div class="radio-inline">
                   <label>
                        <input type="radio" name="c11p13o6" id="c11p13o6" onclick="colocaropcion('c11p13a','valorc11p13o6','c11p13div6');" value="c11p13a" <?php if($arrayrespuestas['ec11p13o6']=='c11p13a'){echo('checked');}?>>
                        Activamente
                    </label>
                </div>
                <div class="radio-inline">
                    <label>
                        <input type="radio" name="c11p13o6" id="c11p13o6" onclick="colocaropcion('c11p13r','valorc11p13o6','c11p13div6');" value="c11p13r" <?php if($arrayrespuestas['ec11p13o6']=='c11p13r'){echo('checked');}?>>
                        Regularmente
                    </label>             
                </div>
             <div class="radio-inline">
                    <label>
                        <input type="radio" name="c11p13o6" id="c11p13o6" onclick="colocaropcion('c11p13o','valorc11p13o6','c11p13div6');" value="c11p13o" <?php if($arrayrespuestas['ec11p13o6']=='c11p13o'){echo('checked');}?>>
                        Ocasionalmente
                    </label>             
                </div>
          <div class="radio-inline">
                    <label>
                        <input type="radio" name="c11p13o6" id="c11p13o6" onclick="colocaropcion('c11p13n','valorc11p13o6','c11p13div6');" value="c11p13n" <?php if($arrayrespuestas['ec11p13o6']=='c11p13n'){echo('checked');}?>>
                        No se encuentra vinculado a este grupo
                    </label>             
                </div>
          <input type="text" class="form-control" id="valorc11p13o6" name="valorc11p13o6" style="display:none"  placeholder="Text input" value="<?php echo($arrayrespuestas['ec11p13o6']); ?>">
             </div>
        <div id="c11p13div7" name="c11p13div7" <?php if($arrayrespuestas['ec11p13o7']=='' ){echo('class="form-group col-md-12 form-group-sm has-error"');}else{echo('class="form-group col-md-12 form-group-sm"');}?>>   
          <label class="control-label col-md-5">Organizaciones de grupos étnicos </label>
          <div class="radio-inline">
                   <label>
                        <input type="radio" name="c11p13o7" id="c11p13o7" onclick="colocaropcion('c11p13a','valorc11p13o7','c11p13div7');" value="c11p13a" <?php if($arrayrespuestas['ec11p13o7']=='c11p13a'){echo('checked');}?>>
                        Activamente
                    </label>
                </div>
                <div class="radio-inline">
                    <label>
                        <input type="radio" name="c11p13o7" id="c11p13o7" onclick="colocaropcion('c11p13r','valorc11p13o7','c11p13div7');" value="c11p13r" <?php if($arrayrespuestas['ec11p13o7']=='c11p13r'){echo('checked');}?>>
                        Regularmente
                    </label>             
                </div>
             <div class="radio-inline">
                    <label>
                        <input type="radio" name="c11p13o7" id="c11p13o7" onclick="colocaropcion('c11p13o','valorc11p13o7','c11p13div7');" value="c11p13o" <?php if($arrayrespuestas['ec11p13o7']=='c11p13o'){echo('checked');}?>>
                        Ocasionalmente
                    </label>             
                </div>
          <div class="radio-inline">
                    <label>
                        <input type="radio" name="c11p13o7" id="c11p13o7" onclick="colocaropcion('c11p13n','valorc11p13o7','c11p13div7');" value="c11p13n" <?php if($arrayrespuestas['ec11p13o7']=='c11p13n'){echo('checked');}?>>
                        No se encuentra vinculado a este grupo
                    </label>             
                </div>
          <input type="text" class="form-control" id="valorc11p13o7" name="valorc11p13o7" style="display:none"  placeholder="Text input" value="<?php echo($arrayrespuestas['ec11p13o7']); ?>">
             </div>
        <div id="c11p13div8" name="c11p13div8" <?php if($arrayrespuestas['ec11p13o8']=='' ){echo('class="form-group col-md-12 form-group-sm has-error"');}else{echo('class="form-group col-md-12 form-group-sm"');}?>>   
          <label class="control-label col-md-5">Grupos de adulto mayor</label>
          <div class="radio-inline">
                   <label>
                        <input type="radio" name="c11p13o8" id="c11p13o8" onclick="colocaropcion('c11p13a','valorc11p13o8','c11p13div8');" value="c11p13a" <?php if($arrayrespuestas['ec11p13o8']=='c11p13a'){echo('checked');}?>>
                        Activamente
                    </label>
                </div>
                <div class="radio-inline">
                    <label>
                        <input type="radio" name="c11p13o8" id="c11p13o8" onclick="colocaropcion('c11p13r','valorc11p13o8','c11p13div8');" value="c11p13r" <?php if($arrayrespuestas['ec11p13o8']=='c11p13r'){echo('checked');}?>>
                        Regularmente
                    </label>             
                </div>
             <div class="radio-inline">
                    <label>
                        <input type="radio" name="c11p13o8" id="c11p13o8" onclick="colocaropcion('c11p13o','valorc11p13o8','c11p13div8');" value="c11p13o" <?php if($arrayrespuestas['ec11p13o8']=='c11p13o'){echo('checked');}?>>
                        Ocasionalmente
                    </label>             
                </div>
          <div class="radio-inline">
                    <label>
                        <input type="radio" name="c11p13o8" id="c11p13o8" onclick="colocaropcion('c11p13n','valorc11p13o8','c11p13div8');" value="c11p13n" <?php if($arrayrespuestas['ec11p13o8']=='c11p13n'){echo('checked');}?>>
                        No se encuentra vinculado a este grupo
                    </label>             
                </div>
          <input type="text" class="form-control" id="valorc11p13o8" name="valorc11p13o8" style="display:none"  placeholder="Text input" value="<?php echo($arrayrespuestas['ec11p13o8']); ?>">
             </div>


        <div id="c11p13div9" name="c11p13div9" <?php if($arrayrespuestas['ec11p13o9']=='' ){echo('class="form-group col-md-12 form-group-sm has-error"');}else{echo('class="form-group col-md-12 form-group-sm"');}?>>   
          <label class="control-label col-md-5">Grupo productivo, cooperativa </label>
          <div class="radio-inline">
                   <label>
                        <input type="radio" name="c11p13o9" id="c11p13o9" onclick="colocaropcion('c11p13a','valorc11p13o9','c11p13div9');" value="c11p13a" <?php if($arrayrespuestas['ec11p13o9']=='c11p13a'){echo('checked');}?>>
                        Activamente
                    </label>
                </div>
                <div class="radio-inline">
                    <label>
                        <input type="radio" name="c11p13o9" id="c11p13o9" onclick="colocaropcion('c11p13r','valorc11p13o9','c11p13div9');" value="c11p13r" <?php if($arrayrespuestas['ec11p13o9']=='c11p13r'){echo('checked');}?>>
                        Regularmente
                    </label>             
                </div>
             <div class="radio-inline">
                    <label>
                        <input type="radio" name="c11p13o9" id="c11p13o9" onclick="colocaropcion('c11p13o','valorc11p13o9','c11p13div9');" value="c11p13o" <?php if($arrayrespuestas['ec11p13o9']=='c11p13o'){echo('checked');}?>>
                        Ocasionalmente
                    </label>             
                </div>
          <div class="radio-inline">
                    <label>
                        <input type="radio" name="c11p13o9" id="c11p13o9" onclick="colocaropcion('c11p13n','valorc11p13o9','c11p13div9');" value="c11p13n" <?php if($arrayrespuestas['ec11p13o9']=='c11p13n'){echo('checked');}?>>
                        No se encuentra vinculado a este grupo
                    </label>             
                </div>
          <input type="text" class="form-control" id="valorc11p13o9" name="valorc11p13o9" style="display:none"  placeholder="Text input" value="<?php echo($arrayrespuestas['ec11p13o9']); ?>">
             </div>
        <div id="c11p13div10" name="c11p13div10" <?php if($arrayrespuestas['ec11p13o10']=='' ){echo('class="form-group col-md-12 form-group-sm has-error"');}else{echo('class="form-group col-md-12 form-group-sm"');}?>>   
          <label class="control-label col-md-5">Grupos religiosos </label>
          <div class="radio-inline">
                   <label>
                        <input type="radio" name="c11p13o10" id="c11p13o10" onclick="colocaropcion('c11p13a','valorc11p13o10','c11p13div10');" value="c11p13a" <?php if($arrayrespuestas['ec11p13o10']=='c11p13a'){echo('checked');}?>>
                        Activamente
                    </label>
                </div>
                <div class="radio-inline">
                    <label>
                        <input type="radio" name="c11p13o10" id="c11p13o10" onclick="colocaropcion('c11p13r','valorc11p13o10','c11p13div10');" value="c11p13r" <?php if($arrayrespuestas['ec11p13o10']=='c11p13r'){echo('checked');}?>>
                        Regularmente
                    </label>             
                </div>
             <div class="radio-inline">
                    <label>
                        <input type="radio" name="c11p13o10" id="c11p13o10" onclick="colocaropcion('c11p13o','valorc11p13o10','c11p13div10');" value="c11p13o" <?php if($arrayrespuestas['ec11p13o10']=='c11p13o'){echo('checked');}?>>
                        Ocasionalmente
                    </label>             
                </div>
          <div class="radio-inline">
                    <label>
                        <input type="radio" name="c11p13o10" id="c11p13o10" onclick="colocaropcion('c11p13n','valorc11p13o10','c11p13div10');" value="c11p13n" <?php if($arrayrespuestas['ec11p13o10']=='c11p13n'){echo('checked');}?>>
                        No se encuentra vinculado a este grupo
                    </label>             
                </div>
          <input type="text" class="form-control" id="valorc11p13o10" name="valorc11p13o10" style="display:none"  placeholder="Text input" value="<?php echo($arrayrespuestas['ec11p13o10']); ?>">
             </div>


        <div id="c11p13div11" name="c11p13div11" <?php if($arrayrespuestas['ec11p13o11']=='' ){echo('class="form-group col-md-12 form-group-sm has-error"');}else{echo('class="form-group col-md-12 form-group-sm"');}?>>   
          <label class="control-label col-md-5">Grupos políticos</label>
          <div class="radio-inline">
                   <label>
                        <input type="radio" name="c11p13o11" id="c11p13o11" onclick="colocaropcion('c11p13a','valorc11p13o11','c11p13div11');" value="c11p13a" <?php if($arrayrespuestas['ec11p13o11']=='c11p13a'){echo('checked');}?>>
                        Activamente
                    </label>
                </div>
                <div class="radio-inline">
                    <label>
                        <input type="radio" name="c11p13o11" id="c11p13o11" onclick="colocaropcion('c11p13r','valorc11p13o11','c11p13div11');" value="c11p13r" <?php if($arrayrespuestas['ec11p13o11']=='c11p13r'){echo('checked');}?>>
                        Regularmente
                    </label>             
                </div>
             <div class="radio-inline">
                    <label>
                        <input type="radio" name="c11p13o11" id="c11p13o11" onclick="colocaropcion('c11p13o','valorc11p13o11','c11p13div11');" value="c11p13o" <?php if($arrayrespuestas['ec11p13o11']=='c11p13o'){echo('checked');}?>>
                        Ocasionalmente
                    </label>             
                </div>
          <div class="radio-inline">
                    <label>
                        <input type="radio" name="c11p13o11" id="c11p13o11" onclick="colocaropcion('c11p13n','valorc11p13o11','c11p13div11');" value="c11p13n" <?php if($arrayrespuestas['ec11p13o11']=='c11p13n'){echo('checked');}?>>
                        No se encuentra vinculado a este grupo
                    </label>             
                </div>
          <input type="text" class="form-control" id="valorc11p13o11" name="valorc11p13o11" style="display:none"  placeholder="Text input" value="<?php echo($arrayrespuestas['ec11p13o11']); ?>">
             </div>
        <div id="c11p13div12" name="c11p13div12" <?php if($arrayrespuestas['ec11p13o12']=='' ){echo('class="form-group col-md-12 form-group-sm has-error"');}else{echo('class="form-group col-md-12 form-group-sm"');}?>>   
          <label class="control-label col-md-5">Grupos de mujeres</label>
          <div class="radio-inline">
                   <label>
                        <input type="radio" name="c11p13o12" id="c11p13o12" onclick="colocaropcion('c11p13a','valorc11p13o12','c11p13div12');" value="c11p13a" <?php if($arrayrespuestas['ec11p13o12']=='c11p13a'){echo('checked');}?>>
                        Activamente
                    </label>
                </div>
                <div class="radio-inline">
                    <label>
                        <input type="radio" name="c11p13o12" id="c11p13o12" onclick="colocaropcion('c11p13r','valorc11p13o12','c11p13div12');" value="c11p13r" <?php if($arrayrespuestas['ec11p13o12']=='c11p13r'){echo('checked');}?>>
                        Regularmente
                    </label>             
                </div>
             <div class="radio-inline">
                    <label>
                        <input type="radio" name="c11p13o12" id="c11p13o12" onclick="colocaropcion('c11p13o','valorc11p13o12','c11p13div12');" value="c11p13o" <?php if($arrayrespuestas['ec11p13o12']=='c11p13o'){echo('checked');}?>>
                        Ocasionalmente
                    </label>             
                </div>
          <div class="radio-inline">
                    <label>
                        <input type="radio" name="c11p13o12" id="c11p13o12" onclick="colocaropcion('c11p13n','valorc11p13o12','c11p13div12');" value="c11p13n" <?php if($arrayrespuestas['ec11p13o12']=='c11p13n'){echo('checked');}?>>
                        No se encuentra vinculado a este grupo
                    </label>             
                </div>
          <input type="text" class="form-control" id="valorc11p13o12" name="valorc11p13o12" style="display:none" placeholder="Text input" value="<?php echo($arrayrespuestas['ec11p13o12']); ?>">
             </div>
        <div id="c11p13div13" name="c11p13div13" <?php if($arrayrespuestas['ec11p13o13']=='' ){echo('class="form-group col-md-12 form-group-sm has-error"');}else{echo('class="form-group col-md-12 form-group-sm"');}?>>   
          <label class="control-label col-md-5">Grupos de recreación, cultura y Deporte</label>
          <div class="radio-inline">
                   <label>
                        <input type="radio" name="c11p13o13" id="c11p13o13" onclick="colocaropcion('c11p13a','valorc11p13o13','c11p13div13');" value="c11p13a" <?php if($arrayrespuestas['ec11p13o13']=='c11p13a'){echo('checked');}?>>
                        Activamente
                    </label>
                </div>
                <div class="radio-inline">
                    <label>
                        <input type="radio" name="c11p13o13" id="c11p13o13" onclick="colocaropcion('c11p13r','valorc11p13o13','c11p13div13');" value="c11p13r" <?php if($arrayrespuestas['ec11p13o13']=='c11p13r'){echo('checked');}?>>
                        Regularmente
                    </label>             
                </div>
             <div class="radio-inline">
                    <label>
                        <input type="radio" name="c11p13o13" id="c11p13o13" onclick="colocaropcion('c11p13o','valorc11p13o13','c11p13div13');" value="c11p13o" <?php if($arrayrespuestas['ec11p13o13']=='c11p13o'){echo('checked');}?>>
                        Ocasionalmente
                    </label>             
                </div>
          <div class="radio-inline">
                    <label>
                        <input type="radio" name="c11p13o13" id="c11p13o13" onclick="colocaropcion('c11p13n','valorc11p13o13','c11p13div13');" value="c11p13n" <?php if($arrayrespuestas['ec11p13o13']=='c11p13n'){echo('checked');}?>>
                        No se encuentra vinculado a este grupo
                    </label>             
                </div>
          <input type="text" class="form-control" id="valorc11p13o13" name="valorc11p13o13" style="display:none"  placeholder="Text input" value="<?php echo($arrayrespuestas['ec11p13o13']); ?>">
             </div>
        <div id="c11p13div14" name="c11p13div14" <?php if($arrayrespuestas['ec11p13o14']=='' ){echo('class="form-group col-md-12 form-group-sm has-error"');}else{echo('class="form-group col-md-12 form-group-sm"');}?>>   
          <label class="control-label col-md-5">Grupos Juveniles</label>
          <div class="radio-inline">
                   <label>
                        <input type="radio" name="c11p13o14" id="c11p13o14" onclick="colocaropcion('c11p13a','valorc11p13o14','c11p13div14');" value="c11p13a" <?php if($arrayrespuestas['ec11p13o14']=='c11p13a'){echo('checked');}?>>
                        Activamente
                    </label>
                </div>
                <div class="radio-inline">
                    <label>
                        <input type="radio" name="c11p13o14" id="c11p13o14" onclick="colocaropcion('c11p13r','valorc11p13o14','c11p13div14');" value="c11p13r" <?php if($arrayrespuestas['ec11p13o14']=='c11p13r'){echo('checked');}?>>
                        Regularmente
                    </label>             
                </div>
             <div class="radio-inline">
                    <label>
                        <input type="radio" name="c11p13o14" id="c11p13o14" onclick="colocaropcion('c11p13o','valorc11p13o14','c11p13div14');" value="c11p13o" <?php if($arrayrespuestas['ec11p13o14']=='c11p13o'){echo('checked');}?>>
                        Ocasionalmente
                    </label>             
                </div>
          <div class="radio-inline">
                    <label>
                        <input type="radio" name="c11p13o14" id="c11p13o14" onclick="colocaropcion('c11p13n','valorc11p13o14','c11p13div14');" value="c11p13n" <?php if($arrayrespuestas['ec11p13o14']=='c11p13n'){echo('checked');}?>>
                        No se encuentra vinculado a este grupo
                    </label>             
                </div>
          <input type="text" class="form-control" id="valorc11p13o14"  name="valorc11p13o14" style="display:none"  placeholder="Text input" value="<?php echo($arrayrespuestas['ec11p13o14']); ?>">
             </div>
        <div id="c11p13div15" name="c11p13div15" <?php if($arrayrespuestas['ec11p13o15']=='' ){echo('class="form-group col-md-12 form-group-sm has-error"');}else{echo('class="form-group col-md-12 form-group-sm"');}?>>   
          <label class="control-label col-md-5">Otro tipo de organizaciones</label>
          <div class="radio-inline">
                   <label>
                        <input type="radio" name="c11p13o15" id="c11p13o15" onclick="colocaropcion('c11p13a','valorc11p13o15','c11p13div15');" value="c11p13a" <?php if($arrayrespuestas['ec11p13o15']=='c11p13a'){echo('checked');}?>>
                        Activamente
                    </label>
                </div>
                <div class="radio-inline">
                    <label>
                        <input type="radio" name="c11p13o15" id="c11p13o15" onclick="colocaropcion('c11p13r','valorc11p13o15','c11p13div15');" value="c11p13r" <?php if($arrayrespuestas['ec11p13o15']=='c11p13r'){echo('checked');}?>>
                        Regularmente
                    </label>             
                </div>
             <div class="radio-inline">
                    <label>
                        <input type="radio" name="c11p13o15" id="c11p13o15" onclick="colocaropcion('c11p13o','valorc11p13o15','c11p13div15');" value="c11p13o" <?php if($arrayrespuestas['ec11p13o15']=='c11p13o'){echo('checked');}?>>
                        Ocasionalmente
                    </label>             
                </div>
          <div class="radio-inline">
                    <label>
                        <input type="radio" name="c11p13o15" id="c11p13o15" onclick="colocaropcion('c11p13n','valorc11p13o15','c11p13div15');" value="c11p13n" <?php if($arrayrespuestas['ec11p13o15']=='c11p13n'){echo('checked');}?>>
                        No se encuentra vinculado a este grupo
                    </label>             
                </div>
          <input type="text" class="form-control" id="valorc11p13o15" name="valorc11p13o15" style="display:none"  placeholder="Text input" value="<?php echo($arrayrespuestas['ec11p13o15']); ?>">
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
            <?php if($arrayrespuestas['ec11p13o1']=="" & $arrayrespuestas['ec11p13o2']=="" )
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
                          data: {vfolio : $('#folio').val(),vidintegrante : $('#idintegrante').val(),
                          vvalorc11p13o1 : $('#valorc11p13o1').val(),vvalorc11p13o2 : $('#valorc11p13o2').val()
                          ,vvalorc11p13o3 : $('#valorc11p13o3').val(),vvalorc11p13o4 : $('#valorc11p13o4').val()
                          ,vvalorc11p13o5 : $('#valorc11p13o5').val(),vvalorc11p13o6 : $('#valorc11p13o6').val()
                          ,vvalorc11p13o7 : $('#valorc11p13o7').val(),vvalorc11p13o8 : $('#valorc11p13o8').val()
                          ,vvalorc11p13o9 : $('#valorc11p13o9').val(),vvalorc11p13o10 : $('#valorc11p13o10').val()
                          ,vvalorc11p13o11 : $('#valorc11p13o11').val(),vvalorc11p13o12 : $('#valorc11p13o12').val()
                          ,vvalorc11p13o13 : $('#valorc11p13o13').val(),vvalorc11p13o14 : $('#valorc11p13o14').val()
                          ,vvalorc11p13o15 : $('#valorc11p13o15').val()},
                          dataType: "html",
                          success : function(obj){   
                          $('#siguiente').prop('disabled', true);       
                          botonguardar();
                          $('#siguiente').prop('disabled', true);       
                          saltop13();
                          $('#siguiente').prop('disabled', false);       
                          }
                        });                    
        });
        $("#actualizar").click(function ()
        {
                        $.ajax({
                          url: "fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),vidintegrante : $('#idintegrante').val(),
                          vvalorc11p13o1 : $('#valorc11p13o1').val(),vvalorc11p13o2 : $('#valorc11p13o2').val()
                          ,vvalorc11p13o3 : $('#valorc11p13o3').val(),vvalorc11p13o4 : $('#valorc11p13o4').val()
                          ,vvalorc11p13o5 : $('#valorc11p13o5').val(),vvalorc11p13o6 : $('#valorc11p13o6').val()
                          ,vvalorc11p13o7 : $('#valorc11p13o7').val(),vvalorc11p13o8 : $('#valorc11p13o8').val()
                          ,vvalorc11p13o9 : $('#valorc11p13o9').val(),vvalorc11p13o10 : $('#valorc11p13o10').val()
                          ,vvalorc11p13o11 : $('#valorc11p13o11').val(),vvalorc11p13o12 : $('#valorc11p13o12').val()
                          ,vvalorc11p13o13 : $('#valorc11p13o13').val(),vvalorc11p13o14 : $('#valorc11p13o14').val()
                          ,vvalorc11p13o15 : $('#valorc11p13o15').val()},
                          dataType: "html",
                          success : function(obj){ 
                          $('#siguiente').prop('disabled', true);       
                          botonactualizar();
                          $('#siguiente').prop('disabled', true);       
                          saltop13();
                          $('#siguiente').prop('disabled', false);       
                          }
                        });                   
        });

  $("#siguiente").click(function ()
        {
         botonsiguiente();
         if($('#c11p14o1').val()=='98')
         {
         location.href = "../c_c11p15/fc_c11p15?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() ;               
         }
        else
        {
         location.href = "../c_c11p14/fc_c11p14?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() ;               
        }
            
        });
        $("#anterior").click(function ()
        {
         botonanterior();
         if($('#c11p12d').val() == '2')
         {
          location.href = "../c_c11p12d/fc_c11p12d?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() ;            
         }
         else  if  ($('#valorc11p12a').val()== '2' )
         {
          location.href = "../c_c11p12a/fc_c11p12a?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() ;            
         }
         else{
        location.href = "../c_c11p12d_1/fc_c11p12d_1?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() ;            
        }});

cargardatosgenerales('<?php echo($arraydatosgenerales['ecapitulo']); ?>','Pregunta 13 de 15','<?php echo($arraydatosgenerales['enomcoges']); ?>','<?php echo($arraydatosgenerales['enombreintegrante']." "." - "." "."Sexo:"." ".$arraydatosgenerales['esexointegrante']."   "."  -  "."   "."Edad:"."   ".$arraydatosgenerales['eedadintegrante']); ?>','50');
//control del boton ayuda
botonayuda();

});
function saltop13()
{
    //alert('uyyy que embalada');
    if($('#valorc11p13o1').val() != 'c11p13n' 
            || $('#valorc11p13o2').val() != 'c11p13n'
            || $('#valorc11p13o3').val() != 'c11p13n'
            || $('#valorc11p13o4').val() != 'c11p13n'
            || $('#valorc11p13o5').val() != 'c11p13n'
            || $('#valorc11p13o6').val() != 'c11p13n'
            || $('#valorc11p13o7').val() != 'c11p13n'
            || $('#valorc11p13o8').val() != 'c11p13n'
            || $('#valorc11p13o9').val() != 'c11p13n'
            || $('#valorc11p13o10').val() != 'c11p13n'
            || $('#valorc11p13o11').val() != 'c11p13n'
            || $('#valorc11p13o12').val() != 'c11p13n'
            || $('#valorc11p13o13').val() != 'c11p13n'
            || $('#valorc11p13o14').val() != 'c11p13n'
            || $('#valorc11p13o15').val() != 'c11p13n')
           {  
            //alert('111');
            $.ajax({
                             url: "../c_c11p14/fc_actualizar",
                             type: "GET",
                             data: {vfolio : $('#folio').val(),vidintegrante : $('#idintegrante').val(), vc11p14o1 :'98', vc11p14o2 :'98',
                             vc11p14o3 :'98', vc11p14o4 :'98', vc11p14o5 :'98', vc11p14o6 :'98', vc11p14cual :'98'},    
                             dataType: "html",
                             success : function(obj){  
                            // location.href = "../c_c11p15/fc_c11p15?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                                         
                             }
                           }); 
                           $.ajax({      
                             
                            url: "../c_c11p15/fc_actualizar",
                             type: "GET",
                             data: {vfolio : $('#folio').val(),vidintegrante : $('#idintegrante').val(), vvalorc11p15 :''},
                             dataType: "html",
                             success : function(obj){  
                             location.href = "../c_c11p13/fc_c11p13?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                                         
                             }
                           });
                           
           }
          else if (($('#valorc11p13o1').val() == 'c11p13n' && $('#c11p14o1').val() == '98')
                && ($('#valorc11p13o2').val() == 'c11p13n' && $('#c11p14o1').val() == '98')
                && ($('#valorc11p13o3').val() == 'c11p13n' && $('#c11p14o1').val() == '98')
                && ($('#valorc11p13o4').val() == 'c11p13n' && $('#c11p14o1').val() == '98')
                && ($('#valorc11p13o5').val() == 'c11p13n' && $('#c11p14o1').val() == '98')
                && ($('#valorc11p13o6').val() == 'c11p13n' && $('#c11p14o1').val() == '98')
                && ($('#valorc11p13o7').val() == 'c11p13n' && $('#c11p14o1').val() == '98')
                && ($('#valorc11p13o8').val() == 'c11p13n' && $('#c11p14o1').val() == '98')
                && ($('#valorc11p13o9').val() == 'c11p13n' && $('#c11p14o1').val() == '98')
                && ($('#valorc11p13o10').val() == 'c11p13n' && $('#c11p14o1').val() == '98')
                && ($('#valorc11p13o11').val() == 'c11p13n' && $('#c11p14o1').val() == '98')
                && ($('#valorc11p13o12').val() == 'c11p13n' && $('#c11p14o1').val() == '98')
                && ($('#valorc11p13o13').val() == 'c11p13n' && $('#c11p14o1').val() == '98')
                && ($('#valorc11p13o14').val() == 'c11p13n' && $('#c11p14o1').val() == '98')
                && ($('#valorc11p13o15').val() == 'c11p13n' && $('#c11p14o1').val() == '98'))

          {    
            //alert('222');  
            $.ajax({      
                             
                            url: "../c_c11p14/fc_actualizar",
                             type: "GET",
                             data: {vfolio : $('#folio').val(),vidintegrante : $('#idintegrante').val(), vc11p14o1 :'', vc11p14o2 :'',
                             vc11p14o3 :'', vc11p14o4 :'', vc11p14o5 :'', vc11p14o6 :'', vc11p14cual :''},    
                             dataType: "html",
                             success : function(obj){  
                            // location.href = "../c_c11p14/fc_c11p14?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                                         
                             }
                           });
                           $.ajax({      
                            url: "../c_c11p15/fc_actualizar",
                             type: "GET",
                             data: {vfolio : $('#folio').val(),vidintegrante : $('#idintegrante').val(), vvalorc11p15 :'98'},
                             dataType: "html",
                             success : function(obj){  
                             location.href = "../c_c11p13/fc_c11p13?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                                         
                             }
                           });
           }
           
           else
                {
                   //alert('333');
                   $.ajax({      
                             
                            url: "../c_c11p15/fc_actualizar",
                             type: "GET",
                             data: {vfolio : $('#folio').val(),vidintegrante : $('#idintegrante').val(), vvalorc11p15 :'98'},
                             dataType: "html",
                             success : function(obj){  
                             location.href = "../c_c11p13/fc_c11p13?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                                         
                             }
                           });
                 // location.href = "../c_c11p14/fc_c11p14?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                                         
                }
}
</script>
</html>