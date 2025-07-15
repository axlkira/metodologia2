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
<!--        <input type="text" class="form-control input-sm" id="c8p3" name="c8p3" style="display:none" placeholder="" value="<?php echo($arrayrespuestas['ec8p3']); ?>">-->
        <!--fin para imprimir el idintegrante y llevarlo-->
<hr>
        <form class="form-group" name="formulario" id="formulario">
            
        
            <!--inicio radio una sola seleccion pregunta 3.2-->
            <div class="row">
            <div id="ppc1p3n2div" name="ppc1p3n2div" <?php if($arrayrespuestas['eppc1p3n2']==''||$arrayrespuestas['eppc1p3n2']=='98'){echo('class="form-group form-group-sm has-error"');}else{echo('class="form-group  form-group-sm"');}?>>   
                <label class="control-label">3.2 NIVEL EDUCATIVO: Educación Básica<br>
                    SELECCIÓN UNICA
<!--                    <button type="button" id="vayuda" name="vayuda" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModal">
                        <span class="glyphicon glyphicon-question-sign" aria-hidden="true"></span> Ayuda
                    </button>-->
                </label>
                <div class="radio">
                    <label><!--en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="ppc1p3n2" id="ppc1p3n2" onclick="colocaropcionppc1p3n2('ppc1p3n2o1','valorppc1p3n2','ppc1p3n2div');" value="ppc1p3n2o1" <?php if($arrayrespuestas['eppc1p3n2']=='ppc1p3n2o1'){echo('checked');}?>>
                        Ninguno
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="ppc1p3n2" id="ppc1p3n2" onclick="colocaropcionppc1p3n2('ppc1p3n2o2','valorppc1p3n2','ppc1p3n2div');" value="ppc1p3n2o2" <?php if($arrayrespuestas['eppc1p3n2']=='ppc1p3n2o2'){echo('checked');}?>>
                        Preescolar
                    </label>             
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="ppc1p3n2" id="ppc1p3n2" onclick="colocaropcionppc1p3n2('ppc1p3n2o3','valorppc1p3n2','ppc1p3n2div');" value="ppc1p3n2o3" <?php if($arrayrespuestas['eppc1p3n2']=='ppc1p3n2o3'){echo('checked');}?>>
                        Básica primaria (1 a 5)
                    </label>             
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="ppc1p3n2" id="ppc1p3n2" onclick="colocaropcionppc1p3n2('ppc1p3n2o4','valorppc1p3n2','ppc1p3n2div');" value="ppc1p3n2o4" <?php if($arrayrespuestas['eppc1p3n2']=='ppc1p3n2o4'){echo('checked');}?>>
                        Básica secundaria  (6 a 9)
                    </label>             
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="ppc1p3n2" id="ppc1p3n2" onclick="colocaropcionppc1p3n2('ppc1p3n2o14','valorppc1p3n2','ppc1p3n2div');" value="ppc1p3n2o14" <?php if($arrayrespuestas['eppc1p3n2']=='ppc1p3n2o14'){echo('checked');}?>>
                        Media (10)
                    </label>             
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="ppc1p3n2" id="ppc1p3n2" onclick="colocaropcionppc1p3n2('ppc1p3n2o5','valorppc1p3n2','ppc1p3n2div');" value="ppc1p3n2o5" <?php if($arrayrespuestas['eppc1p3n2']=='ppc1p3n2o5'){echo('checked');}?>>
                        Media (11,12,13)
                    </label>             
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="ppc1p3n2" id="ppc1p3n2" onclick="colocaropcionppc1p3n2('ppc1p3n2o6','valorppc1p3n2','ppc1p3n2div');" value="ppc1p3n2o6" <?php if($arrayrespuestas['eppc1p3n2']=='ppc1p3n2o6'){echo('checked');}?>>
                        Técnico sin título
                    </label>             
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="ppc1p3n2" id="ppc1p3n2" onclick="colocaropcionppc1p3n2('ppc1p3n2o7','valorppc1p3n2','ppc1p3n2div');" value="ppc1p3n2o7" <?php if($arrayrespuestas['eppc1p3n2']=='ppc1p3n2o7'){echo('checked');}?>>
                        Técnico con título
                    </label>             
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="ppc1p3n2" id="ppc1p3n2" onclick="colocaropcionppc1p3n2('ppc1p3n2o8','valorppc1p3n2','ppc1p3n2div');" value="ppc1p3n2o8" <?php if($arrayrespuestas['eppc1p3n2']=='ppc1p3n2o8'){echo('checked');}?>>
                        Tecnológico sin título
                    </label>             
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="ppc1p3n2" id="ppc1p3n2" onclick="colocaropcionppc1p3n2('ppc1p3n2o9','valorppc1p3n2','ppc1p3n2div');" value="ppc1p3n2o9" <?php if($arrayrespuestas['eppc1p3n2']=='ppc1p3n2o9'){echo('checked');}?>>
                        Tecnológico con título
                    </label>             
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="ppc1p3n2" id="ppc1p3n2" onclick="colocaropcionppc1p3n2('ppc1p3n2o10','valorppc1p3n2','ppc1p3n2div');" value="ppc1p3n2o10" <?php if($arrayrespuestas['eppc1p3n2']=='ppc1p3n2o10'){echo('checked');}?>>
                        Universitario sin título
                    </label>             
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="ppc1p3n2" id="ppc1p3n2" onclick="colocaropcionppc1p3n2('ppc1p3n2o11','valorppc1p3n2','ppc1p3n2div');" value="ppc1p3n2o11" <?php if($arrayrespuestas['eppc1p3n2']=='ppc1p3n2o11'){echo('checked');}?>>
                        Universitario con título
                    </label>             
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="ppc1p3n2" id="ppc1p3n2" onclick="colocaropcionppc1p3n2('ppc1p3n2o12','valorppc1p3n2','ppc1p3n2div');" value="ppc1p3n2o12" <?php if($arrayrespuestas['eppc1p3n2']=='ppc1p3n2o12'){echo('checked');}?>>
                        Posgrado sin título
                    </label>             
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="ppc1p3n2" id="ppc1p3n2" onclick="colocaropcionppc1p3n2('ppc1p3n2o13','valorppc1p3n2','ppc1p3n2div');" value="ppc1p3n2o13" <?php if($arrayrespuestas['eppc1p3n2']=='ppc1p3n2o13'){echo('checked');}?>>
                        Posgrado con título
                    </label>             
                </div>
<!--                <div class="radio">
                    <label>
                        <input type="radio" name="ppc1p3n2" id="ppc1p3n2" onclick="colocaropcionppc1p3n2('ppc1p3n2o15','valorppc1p3n2','ppc1p3n2div');" value="ppc1p3n2o15" <?php if($arrayrespuestas['eppc1p3n2']=='ppc1p3n2o15'){echo('checked');}?>>
                        Especialización
                    </label>             
                </div>-->
<!--                <div class="radio">
                    <label>
                        <input type="radio" name="ppc1p3n2" id="ppc1p3n2" onclick="colocaropcionppc1p3n2('ppc1p3n2o16','valorppc1p3n2','ppc1p3n2div');" value="ppc1p3n2o16" <?php if($arrayrespuestas['eppc1p3n2']=='ppc1p3n2o16'){echo('checked');}?>>
                        Maestría
                    </label>             
                </div>-->
<!--                <div class="radio">
                    <label>
                        <input type="radio" name="ppc1p3n2" id="ppc1p3n2" onclick="colocaropcionppc1p3n2('ppc1p3n2o17','valorppc1p3n2','ppc1p3n2div');" value="ppc1p3n2o17" <?php if($arrayrespuestas['eppc1p3n2']=='ppc1p3n2o17'){echo('checked');}?>>
                        Doctorado
                    </label>             
                </div>-->
                <input type="text" class="form-control" id="valorppc1p3n2" name="valorppc1p3n2" style="display:none" placeholder="Text input" value="<?php echo($arrayrespuestas['eppc1p3n2']); ?>">
                </div>
                <!--   fin pregunta 3.2   -->
                <!--   inicio del ultimo grado aprovado dividido en subgrupos   -->
                <div id="ppc1p3n2grado1a5divmostrar" name="ppc1p3n2grado1a5divmostrar" <?php if($arrayrespuestas['eppc1p3n2']==''||$arrayrespuestas['eppc1p3n2']=='98'){echo('style="display:none"');}else{echo('');}?>>
                <div id="ppc1p3n2gradodiv" name="ppc1p3n2gradodiv"<?php if($arrayrespuestas['eultimogrado']==''||$arrayrespuestas['eultimogrado']=='98'){echo('style="display:none" ');}else{echo('');}?>>   
                <label class="control-label">Último grado aprobado: <br></label>
                <div id="ppc1p3n2grado1a5div" name="ppc1p3n2grado1a5div"<?php if($arrayrespuestas['eultimogrado']<>'1'&&$arrayrespuestas['eultimogrado']<>'2'&&$arrayrespuestas['eultimogrado']<>'3'&&$arrayrespuestas['eultimogrado']<>'4'&&$arrayrespuestas['eultimogrado']<>'5'){echo('style="display:none" ');}else{echo('');}?>>
                <div class="radio">
                    <label><!--en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="ppc1p3n2grado" id="ppc1p3n2grado1" onclick="colocaropcionppc1p3n2('1','valorultimogrado','ppc1p3n2gradodiv');" value="1" <?php if($arrayrespuestas['eultimogrado']=='1'){echo('checked');}?>>
                        1
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="ppc1p3n2grado" id="ppc1p3n2grado2" onclick="colocaropcionppc1p3n2('2','valorultimogrado','ppc1p3n2gradodiv');" value="2" <?php if($arrayrespuestas['eultimogrado']=='2'){echo('checked');}?>>
                        2
                    </label>             
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="ppc1p3n2grado" id="ppc1p3n2grado3" onclick="colocaropcionppc1p3n2('3','valorultimogrado','ppc1p3n2gradodiv');" value="3" <?php if($arrayrespuestas['eultimogrado']=='3'){echo('checked');}?>>
                       3
                    </label>             
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="ppc1p3n2grado" id="ppc1p3n2grado4" onclick="colocaropcionppc1p3n2('4','valorultimogrado','ppc1p3n2gradodiv');" value="4" <?php if($arrayrespuestas['eultimogrado']=='4'){echo('checked');}?>>
                        4
                    </label>             
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="ppc1p3n2grado" id="ppc1p3n2grado5" onclick="colocaropcionppc1p3n2('5','valorultimogrado','ppc1p3n2gradodiv');" value="5" <?php if($arrayrespuestas['eultimogrado']=='5'){echo('checked');}?>>
                        5
                    </label>             
                </div>
                </div>
                <div id="ppc1p3n2grado6a9div" name="ppc1p3n2grado6a9div"<?php if($arrayrespuestas['eultimogrado']<>'6'&&$arrayrespuestas['eultimogrado']<>'7'&&$arrayrespuestas['eultimogrado']<>'8'&&$arrayrespuestas['eultimogrado']<>'9'){echo('style="display:none" ');}else{echo('');}?>>
                <div class="radio">
                    <label><!--en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="ppc1p3n2grado" id="ppc1p3n2grado6" onclick="colocaropcionppc1p3n2('6','valorultimogrado','ppc1p3n2gradodiv');" value="6" <?php if($arrayrespuestas['eultimogrado']=='6'){echo('checked');}?>>
                        6
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="ppc1p3n2grado" id="ppc1p3n2grado7" onclick="colocaropcionppc1p3n2('7','valorultimogrado','ppc1p3n2gradodiv');" value="7" <?php if($arrayrespuestas['eultimogrado']=='7'){echo('checked');}?>>
                        7
                    </label>             
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="ppc1p3n2grado" id="ppc1p3n2grado8" onclick="colocaropcionppc1p3n2('8','valorultimogrado','ppc1p3n2gradodiv');" value="8" <?php if($arrayrespuestas['eultimogrado']=='8'){echo('checked');}?>>
                       8
                    </label>             
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="ppc1p3n2grado" id="ppc1p3n2grado9" onclick="colocaropcionppc1p3n2('9','valorultimogrado','ppc1p3n2gradodiv');" value="9" <?php if($arrayrespuestas['eultimogrado']=='9'){echo('checked');}?>>
                        9
                    </label>             
                </div>
                </div>
                <div id="ppc1p3n2grado10div" name="ppc1p3n2grado10div"<?php if($arrayrespuestas['eultimogrado']<>'10'){echo('style="display:none" ');}else{echo('');}?>>
                <div class="radio">
                    <label><!--en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="ppc1p3n2grado" id="ppc1p3n2grado10" onclick="colocaropcionppc1p3n2('10','valorultimogrado','ppc1p3n2gradodiv');" value="10" <?php if($arrayrespuestas['eultimogrado']=='10'){echo('checked');}?>>
                        10
                    </label>
                </div>
                </div>
                <div id="ppc1p3n2grado11a13div" name="ppc1p3n2grado11a13div"<?php if($arrayrespuestas['eultimogrado']<>'11'&&$arrayrespuestas['eultimogrado']<>'12'&&$arrayrespuestas['eultimogrado']<>'13'){echo('style="display:none" ');}else{echo('');}?>>
                <div class="radio">
                    <label><!--en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="ppc1p3n2grado" id="ppc1p3n2grado11" onclick="colocaropcionppc1p3n2('11','valorultimogrado','ppc1p3n2gradodiv');" value="11" <?php if($arrayrespuestas['eultimogrado']=='11'){echo('checked');}?>>
                        11
                    </label>
                </div>
                <div class="radio">
                    <label><!--en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="ppc1p3n2grado" id="ppc1p3n2grado12" onclick="colocaropcionppc1p3n2('12','valorultimogrado','ppc1p3n2gradodiv');" value="12" <?php if($arrayrespuestas['eultimogrado']=='12'){echo('checked');}?>>
                        12
                    </label>
                </div>
                <div class="radio">
                    <label><!--en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="ppc1p3n2grado" id="ppc1p3n2grado13" onclick="colocaropcionppc1p3n2('13','valorultimogrado','ppc1p3n2gradodiv');" value="13" <?php if($arrayrespuestas['eultimogrado']=='13'){echo('checked');}?>>
                        13
                    </label>
                </div>
                </div>
                <input type="text" class="form-control" id="valorultimogrado" name="valorultimogrado" style="display:none" placeholder="Text input" value="<?php echo($arrayrespuestas['eultimogrado']); ?>">
                </div>
                </div>
                <!--fin radio ultimo grado-->
        <!--inicio texto pregunta 3.3-->
        <div id="ppc1p3n3mostrar" name="ppc1p3n3mostrar" <?php if($arrayrespuestas['eppc1p3n3']==''||$arrayrespuestas['eppc1p3n3']=='98'){echo('style="display:none"');}else{echo('');}?>>       
        <div id="ppc1p3n3div" name="ppc1p3n3div" <?php if($arrayrespuestas['eppc1p3n3']==''||$arrayrespuestas['eppc1p3n3']=='98'){echo('class="form-group col-md-5 form-group-sm has-error"');}else{echo('class="form-group col-md-5 form-group-sm"');}?>>   
        <label class="control-label">3.3 INSTITUCIÓN</label><br>&nbsp;&nbsp;&nbsp; 
        <div class="radio">
                    <label><!--en este caso se manda a la fincion javascript el valor del campo-->
                    <input type="text" class="form-control" id="ppc1p3n3" name="ppc1p3n3" size="100" onKeyPress="return soloLetras(event)" onchange="validarbolitasytextoppc1p3n2('ppc1p3n3div','ppc1p3n3')" placeholder="Titulo obtenido" value="<?php echo($arrayrespuestas['eppc1p3n3']); ?>">
                    </label>
        </div>
        </div>
            
        <div id="ppc1p3n31div" name="ppc1p3n31div" <?php if($arrayrespuestas['efechaultimogradoaprobado']==''){echo('class="form-group col-md-5 form-group-sm has-error"');}else{echo('class="form-group col-md-5 form-group-sm"');}?>>   
            <label class="control-label">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AÑO DEL ÚLTIMO GRADO APROBADO</label><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;solo se puede ingresar los años desde 1965 hasta el año actual.
        <div class="radio">
                    <label><!--en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="text" class="form-control" id="ppc1p3n31" name="ppc1p3n31" size="100" onKeyPress="return soloNumeros(event)" onchange="validarrango('ppc1p3n31',<?php echo($actuaA); ?>,1965,'ppc1p3n31div')" maxlength="4" placeholder="Titulo obtenido" value="<?php echo($arrayrespuestas['efechaultimogradoaprobado']); ?>">
                    </label>
        </div>
        </div>
        </div>
        <!--inicio texto pregunta 3.4-->    
        <div id="ppc1p3n4mostrar" name="ppc1p3n4mostrar"<?php if($arrayrespuestas['eppc1p3n4']==''||$arrayrespuestas['eppc1p3n4']=='98'){echo('style="display:none"');}else{echo('');}?>>
            <div id="ppc1p3n4div" name="ppc1p3n4div" <?php if($arrayrespuestas['eppc1p3n4']==''){echo('class="form-group form-group-sm has-error"');}else{echo('class="form-group form-group-sm"');}?>>   
                <label class="control-label">3.4 ESTADO NIVEL ALCANZADO
                    <button type="button" id="vayuda" name="vayuda" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModal">
                        <span class="glyphicon glyphicon-question-sign" aria-hidden="true"></span> Ayuda
                    </button>
                </label>
                <div class="radio">
                    <label><!--en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="ppc1p3n4" id="ppc1p3n4a" onclick="colocaropcionppc1p3n2('ppc1p3n4o1','valorppc1p3n4','ppc1p3n4div');" value="ppc1p3n4o1" <?php if($arrayrespuestas['eppc1p3n4']=='ppc1p3n4o1'){echo('checked');}?>>
                    EN CURSO
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="ppc1p3n4" id="ppc1p3n4b" onclick="colocaropcionppc1p3n2('ppc1p3n4o2','valorppc1p3n4','ppc1p3n4div');" value="ppc1p3n4o2" <?php if($arrayrespuestas['eppc1p3n4']=='ppc1p3n4o2'){echo('checked');}?>>
                    SUSPENDIDO
                    </label>             
                </div>    
                <div class="radio">
                    <label>
                        <input type="radio" name="ppc1p3n4" id="ppc1p3n4c" onclick="colocaropcionppc1p3n2('ppc1p3n4o3','valorppc1p3n4','ppc1p3n4div');" value="ppc1p3n4o3" <?php if($arrayrespuestas['eppc1p3n4']=='ppc1p3n4o3'){echo('checked');}?>>
                    A LA ESPERA DE PRÁCTICAS
                    </label>             
                </div> 
                <input type="text" class="form-control" id="valorppc1p3n4" name="valorppc1p3n4" style="display:none" placeholder="Text input" value="<?php echo($arrayrespuestas['eppc1p3n4']); ?>">
            </div>
            </div>     
            <!--fin texto pregunta 3.4-->
            <!--inicio lista desplegable pregunta 3.5-->
            <div id="ppc1p3n5institucionmostrar" name="ppc1p3n5institucionmostrar"<?php if($arrayrespuestas['eppc1p3n5institucion']==''||$arrayrespuestas['eppc1p3n5institucion']=='98'){echo('style="display:none"');}else{echo('');}?>>  
            <div id="ppc1p3n5instituciondiv" name="ppc1p3n5instituciondiv" <?php if($arrayrespuestas['eppc1p3n5institucion']==''){echo('class="form-group col-md-5 form-group-sm has-error"');}else{echo('class="form-group col-md-5 form-group-sm"');}?>>   
            <label class="control-label">3.5 Estudios Realizados</label><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;INSTITUCIÓN
            <div class="radio">
                    <label><!--en este caso se manda a la fincion javascript el valor del campo-->
                    <input type="text" class="form-control" id="ppc1p3n5institucion" name="ppc1p3n5institucion" size="100" onKeyPress="return soloLetras(event)" onchange="validarbolitasytextoppc1p3n2('ppc1p3n5instituciondiv','ppc1p3n5institucion')" placeholder="Institución" value="<?php echo($arrayrespuestas['eppc1p3n5institucion']); ?>">
                    </label>
            
            </div>
            </div>
            </div>
            
            <div id="ppc1p3n5areamostrar" name="ppc1p3n5areamostrar"<?php if($arrayrespuestas['eppc1p3n5area']==''||$arrayrespuestas['eppc1p3n5area']=='98'){echo('style="display:none"');}else{echo('');}?>>  
            <div id="ppc1p3n5areadiv" name="ppc1p3n5areadiv" <?php if($arrayrespuestas['eppc1p3n5area']==''){echo('class="form-group col-md-5 form-group-sm has-error"');}else{echo('class="form-group col-md-5 form-group-sm"');}?>>   
             
                <label class="control-label" for="ppc1p3n5">&nbsp;&nbsp;&nbsp;</label><br>&nbsp;ÁREA DEL PROGRAMA
                <div class="radio">
                        <select class="form-control input-sm" id="ppc1p3n5area" name="ppc1p3n5area" onchange="validararea(this.value,'ppc1p3n5areadiv','areacono');">
                            <?php if($arrayrespuestas['eppc1p3n5area']==""||$arrayrespuestas['eppc1p3n5area']=="98")
                                {
                                echo('<option value="">Seleccione una opción</option>');
                                }
                                else
                                {
                                echo('<option value="'.$arrayrespuestas['eppc1p3n5area'].'">'.$arrayrespuestas['eppc1p3n5area'].'</option>');
                                }?>
                            
                            <?php echo($areasconocimiento); ?>
                        </select>
                     <input type="text" class="form-control" id="areacono" name="areacono" style="display:none" placeholder="Text input" value="<?php echo($arrayrespuestas['eppc1p3n5area']);?>">
            </div>
            </div>
            </div>    
               
            <!--fin lista desplegable pregunta 3.5-->
        <!--inicio texto pregunta 3.6-->
        <div id="ppc1p3n6mostrar" name="ppc1p3n6mostrar"<?php if($arrayrespuestas['eppc1p3n6']==''||$arrayrespuestas['eppc1p3n6']=='98'){echo('style="display:none"');}else{echo('');}?> >   
        <div id="ppc1p3n6div" name="ppc1p3n6div" <?php if($arrayrespuestas['eppc1p3n6']==''){echo('class="form-group col-md-12 form-group-sm has-error"');}else{echo('class="form-group col-md-12 form-group-sm"');}?>>   
        <label class="control-label">3.6 AÑO DE EGRESO</label><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;solo se puede ingresar los años desde 1965 hasta el año actual.
        <div class="radio">
                    <label><!--en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="text" class="form-control" id="ppc1p3n6" name="ppc1p3n6" maxlength="4" onKeyPress="return soloNumeros(event)" onchange="validarrango('ppc1p3n6',<?php echo($actuaA); ?>,1965,'ppc1p3n6div')" placeholder="" value="<?php echo($arrayrespuestas['eppc1p3n6']); ?>">
                    </label>
        </div>
        </div>
        </div>
        <!--fin texto pregunta 3.6-->
        <!--inicio texto pregunta 3.7-->
        <div id="ppc1p3n7mostrar" name="ppc1p3n7mostrar"<?php if($arrayrespuestas['eppc1p3n7']==''||$arrayrespuestas['eppc1p3n7']=='98'){echo('style="display:none"');}else{echo('');}?> >   
        <div id="ppc1p3n7div" name="ppc1p3n7div" <?php if($arrayrespuestas['eppc1p3n7']==''){echo('class="form-group col-md-12 form-group-sm has-error"');}else{echo('class="form-group col-md-12 form-group-sm"');}?>>   
        <label class="control-label">3.7 NOMBRE DEL PROGRAMA FINALIZADO</label>
        <div class="radio">
                    <label><!--en este caso se manda a la fincion javascript el valor del campo-->
                    <input type="text" class="form-control" id="ppc1p3n7" name="ppc1p3n7" size="100" onKeyPress="return soloLetras(event)" onchange="validarbolitasytextoppc1p3n2('ppc1p3n7div','ppc1p3n7')" placeholder="Titulo obtenido" value="<?php echo($arrayrespuestas['eppc1p3n7']); ?>">
                    </label>
        </div>
        </div>
        </div>
        <!--fin texto pregunta 3.7-->
         </div>
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
           <?php if($arrayrespuestas['eppc1p3n2']=="")
           {
               echo($botoneragotro);
           }
           else 
           if($arrayrespuestas['eppc1p3n2']=="ppc1p3n2o7"||$arrayrespuestas['eppc1p3n2']=="ppc1p3n2o9"||$arrayrespuestas['eppc1p3n2']=="ppc1p3n2o11"||$arrayrespuestas['eppc1p3n2']=="ppc1p3n2o13")
           {
               echo($botoneraaotro);
               
           }
           else
           {
               echo($botonotro);
           }    
               ?>   
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
function validararea(opcion, div, campo)
    {
    $('#areacono').val(opcion);
    
    validarbolitasytextoppc1p3n2(div,campo);   
    }

function colocaropcionppc1p3n2(opcion,campoval,divcampo)
{
    ////alert(opcion);
    ////alert('1');
    $('#' + campoval).val(opcion);
    
    if(opcion == 'ppc1p3n2o1')
        {
           // //alert('aca salta a la 4');
            $('#ppc1p3n2gradodiv').hide();
            $('#ppc1p3n2gradodiv').removeClass('has-error');
            $('#ppc1p3n3mostrar').hide();
            $('#ppc1p3n3div').removeClass('has-error');
            $('#ppc1p3n31div').removeClass('has-error');
            $('#ppc1p3n4div').hide();
            $('#ppc1p3n4div').removeClass('has-error');
            $('#ppc1p3n5instituciondiv').hide();
            $('#ppc1p3n5instituciondiv').removeClass('has-error');
            $('#ppc1p3n5areadiv').hide();
            $('#ppc1p3n5areadiv').removeClass('has-error');
            $('#ppc1p3n6div').hide();
            $('#ppc1p3n6div').removeClass('has-error');
            $('#ppc1p3n7div').hide();
            $('#ppc1p3n7div').removeClass('has-error');
            
            $('#valorultimogrado').val('98');
            $('#ppc1p3n3').val('98');
            $('#ppc1p3n31').val('98');
            $('#valorppc1p3n4').val('98');
            $('#ppc1p3n5institucion').val('98');
            $('#areacono').val('98');
            $('#ppc1p3n6').val('98');
            $('#ppc1p3n7').val('98');
            
            deschequeo();
        }
        else if(opcion == 'ppc1p3n2o2')
        {
            ////alert('aca lo muestra 3.3');
            $('#ppc1p3n3mostrar').show();
            $('#ppc1p3n3div').addClass('has-error');
            $('#ppc1p3n31div').addClass('has-error');
            
            $('#ppc1p3n2gradodiv').hide();
            $('#ppc1p3n2gradodiv').removeClass('has-error');
            $('#ppc1p3n2gradodiv').hide();
            $('#ppc1p3n2gradodiv').removeClass('has-error');
            $('#ppc1p3n4div').hide();
            $('#ppc1p3n4div').removeClass('has-error');
            $('#ppc1p3n5instituciondiv').hide();
            $('#ppc1p3n5instituciondiv').removeClass('has-error');
            $('#ppc1p3n5areadiv').hide();
            $('#ppc1p3n5areadiv').removeClass('has-error');
            $('#ppc1p3n6div').hide();
            $('#ppc1p3n6div').removeClass('has-error');
            $('#ppc1p3n7div').hide();
            $('#ppc1p3n7div').removeClass('has-error');
            
            $('#valorultimogrado').val('98');
            $('#ppc1p3n3').val('');
            $('#ppc1p3n31').val('');
            $('#valorppc1p3n4').val('98');
            $('#ppc1p3n5institucion').val('98');
            $('#areacono').val('98');
            $('#ppc1p3n6').val('98');
            $('#ppc1p3n7').val('98');
            
            deschequeo();
            
        }
        else if(opcion == 'ppc1p3n2o3')
        {
            ////alert('aca lo muestra 1 a 5');
            $('#ppc1p3n2grado1a5divmostrar').show();            
            $('#ppc1p3n2gradodiv').show();
            $('#ppc1p3n2grado1a5div').show();
            $('#ppc1p3n2grado6a9div').show();
            $('#ppc1p3n2grado10div').show();
            $('#ppc1p3n2grado11a13div').show();
            $('#ppc1p3n2gradodiv').addClass('has-error'); 
            
            $('#ppc1p3n2grado6a9div').hide();
            $('#ppc1p3n2grado10div').hide();
            $('#ppc1p3n2grado11a13div').hide();
            $('#ppc1p3n3mostrar').show();
            $('#ppc1p3n3div').addClass('has-error');
            $('#ppc1p3n31div').addClass('has-error');
            $('#ppc1p3n4div').hide();
            $('#ppc1p3n4div').removeClass('has-error');
            $('#ppc1p3n5instituciondiv').hide();
            $('#ppc1p3n5instituciondiv').removeClass('has-error');
            $('#ppc1p3n5areadiv').hide();
            $('#ppc1p3n5areadiv').removeClass('has-error');
            $('#ppc1p3n6div').hide();
            $('#ppc1p3n6div').removeClass('has-error');
            $('#ppc1p3n7div').hide();
            $('#ppc1p3n7div').removeClass('has-error');
            
            $('#ppc1p3n3').val('');
            $('#ppc1p3n31').val('');
            $('#valorppc1p3n4').val('98');
            $('#ppc1p3n5institucion').val('98');
            $('#areacono').val('98');
            $('#ppc1p3n6').val('98');
            $('#ppc1p3n7').val('98');
            deschequeo();
        }
        else if(opcion == 'ppc1p3n2o4')
        {
            // //alert('aca lo muestra 6 a 9');
            $('#ppc1p3n2grado1a5divmostrar').show();         
            $('#ppc1p3n2gradodiv').show();
            $('#ppc1p3n2grado1a5div').show();
            $('#ppc1p3n2grado6a9div').show();
            $('#ppc1p3n2grado10div').show();
            $('#ppc1p3n2grado11a13div').show();
            $('#ppc1p3n2gradodiv').addClass('has-error'); 
            
            $('#ppc1p3n2grado1a5div').hide();
            $('#ppc1p3n2grado10div').hide();
            $('#ppc1p3n2grado11a13div').hide();
            $('#ppc1p3n3mostrar').show();
            $('#ppc1p3n3div').addClass('has-error');
            $('#ppc1p3n31div').addClass('has-error');
            $('#ppc1p3n4div').hide();
            $('#ppc1p3n4div').removeClass('has-error');
            $('#ppc1p3n5instituciondiv').hide();
            $('#ppc1p3n5instituciondiv').removeClass('has-error');
            $('#ppc1p3n5areadiv').hide();
            $('#ppc1p3n5areadiv').removeClass('has-error');
            $('#ppc1p3n6div').hide();
            $('#ppc1p3n6div').removeClass('has-error');
            $('#ppc1p3n7div').hide();
            $('#ppc1p3n7div').removeClass('has-error');
            
            $('#ppc1p3n3').val('');
            $('#ppc1p3n31').val('');
            $('#valorppc1p3n4').val('98');
            $('#ppc1p3n5institucion').val('98');
            $('#areacono').val('98');
            $('#ppc1p3n6').val('98');
            $('#ppc1p3n7').val('98');
            deschequeo();
            
        }
        else if(opcion == 'ppc1p3n2o14')
        {
            // //alert('aca lo muestra 10');
            $('#ppc1p3n2grado1a5divmostrar').show();         
            $('#ppc1p3n2gradodiv').show();
            $('#ppc1p3n2grado1a5div').show();
            $('#ppc1p3n2grado6a9div').show();
            $('#ppc1p3n2grado10div').show();
            $('#ppc1p3n2grado11a13div').show();
            $('#ppc1p3n2gradodiv').addClass('has-error'); 
            
            $('#ppc1p3n2grado1a5div').hide();
            $('#ppc1p3n2grado6a9div').hide();
            $('#ppc1p3n2grado11a13div').hide();
            $('#ppc1p3n3mostrar').show();
            $('#ppc1p3n3div').addClass('has-error');
            $('#ppc1p3n31div').addClass('has-error');
            $('#ppc1p3n4div').hide();
            $('#ppc1p3n4div').removeClass('has-error');
            $('#ppc1p3n5instituciondiv').hide();
            $('#ppc1p3n5instituciondiv').removeClass('has-error');
            $('#ppc1p3n5areadiv').hide();
            $('#ppc1p3n5areadiv').removeClass('has-error');
            $('#ppc1p3n6div').hide();
            $('#ppc1p3n6div').removeClass('has-error');
            $('#ppc1p3n7div').hide();
            $('#ppc1p3n7div').removeClass('has-error');
            
            $('#ppc1p3n3').val('');
            $('#ppc1p3n31').val('');
            $('#valorppc1p3n4').val('98');
            $('#ppc1p3n5institucion').val('98');
            $('#areacono').val('98');
            $('#ppc1p3n6').val('98');
            $('#ppc1p3n7').val('98');
            deschequeo();
        }
        else if(opcion == 'ppc1p3n2o5')
        {
            // //alert('aca lo muestra 11 a 13');
            $('#ppc1p3n2grado1a5divmostrar').show();         
            $('#ppc1p3n2gradodiv').show();
            $('#ppc1p3n2grado1a5div').show();
            $('#ppc1p3n2grado6a9div').show();
            $('#ppc1p3n2grado10div').show();
            $('#ppc1p3n2grado11a13div').show();
            $('#ppc1p3n2gradodiv').addClass('has-error'); 
            
            $('#ppc1p3n2grado1a5div').hide();
            $('#ppc1p3n2grado6a9div').hide();
            $('#ppc1p3n2grado10div').hide();
            $('#ppc1p3n3mostrar').show();
            $('#ppc1p3n3div').addClass('has-error');
            $('#ppc1p3n31div').addClass('has-error');
            $('#ppc1p3n4div').hide();
            $('#ppc1p3n4div').removeClass('has-error');
            $('#ppc1p3n5instituciondiv').hide();
            $('#ppc1p3n5instituciondiv').removeClass('has-error');
            $('#ppc1p3n5areadiv').hide();
            $('#ppc1p3n5areadiv').removeClass('has-error');
            $('#ppc1p3n6div').hide();
            $('#ppc1p3n6div').removeClass('has-error');
            $('#ppc1p3n7div').hide();
            $('#ppc1p3n7div').removeClass('has-error');
            
            $('#ppc1p3n3').val('');
            $('#ppc1p3n31').val('');
            $('#valorppc1p3n4').val('98');
            $('#ppc1p3n5institucion').val('98');
            $('#areacono').val('98');
            $('#ppc1p3n6').val('98');
            $('#ppc1p3n7').val('98');
            deschequeo();
        }
        else if(opcion == 'ppc1p3n2o6'|| opcion == 'ppc1p3n2o8'|| opcion == 'ppc1p3n2o10'|| opcion == 'ppc1p3n2o12')
        {
           //   //alert('aca muestra 3.4 y 3.5');
            $('#ppc1p3n4mostrar').show();
            $('#ppc1p3n4div').show();
            $('#ppc1p3n4div').addClass('has-error');
            
            $('#ppc1p3n5institucionmostrar').show();
            $('#ppc1p3n5instituciondiv').show();
            $('#ppc1p3n5instituciondiv').addClass('has-error');
            $('#ppc1p3n5areamostrar').show();
            $('#ppc1p3n5areadiv').show();
            $('#ppc1p3n5areadiv').addClass('has-error');
            // //alert('aca salta a la 4');
            
            $('#ppc1p3n2gradodiv').hide();
            $('#ppc1p3n2gradodiv').removeClass('has-error');
            $('#ppc1p3n3mostrar').hide();
            $('#ppc1p3n3div').removeClass('has-error');
            $('#ppc1p3n31div').removeClass('has-error');
            
            $('#ppc1p3n6div').hide();
            $('#ppc1p3n6div').removeClass('has-error');
            $('#ppc1p3n7div').hide();
            $('#ppc1p3n7div').removeClass('has-error');
            
            $('#valorppc1p3n4').val('');
            $('#ppc1p3n5institucion').val('');
            $('#ppc1p3n5area').val('');
            $('#areacono').val('');
            $('#valorultimogrado').val('98');
            $('#ppc1p3n3').val('98');
            $('#ppc1p3n31').val('98');
            
            $('#ppc1p3n6').val('98');
            $('#ppc1p3n7').val('98');
            deschequeo();
        }
        else if(opcion == 'ppc1p3n2o7'||opcion == 'ppc1p3n2o9'||opcion == 'ppc1p3n2o11'||opcion == 'ppc1p3n2o13'||opcion == 'ppc1p3n2o15'||opcion == 'ppc1p3n2o16'||opcion == 'ppc1p3n2o17')
        {
           //   //alert('aca muestra 3.4 y 3.5');
            
            $('#ppc1p3n5institucionmostrar').show();
            $('#ppc1p3n5instituciondiv').show();
            $('#ppc1p3n5instituciondiv').addClass('has-error');
            $('#ppc1p3n5areamostrar').show();
            $('#ppc1p3n5areadiv').show();
            $('#ppc1p3n5areadiv').addClass('has-error');
            $('#ppc1p3n6mostrar').show();
            $('#ppc1p3n6div').show();
            $('#ppc1p3n6div').addClass('has-error');
            $('#ppc1p3n7mostrar').show();
            $('#ppc1p3n7div').show();
            $('#ppc1p3n7div').addClass('has-error');
            
            // //alert('aca salta a la 4');
            
            $('#ppc1p3n2gradodiv').hide();
            $('#ppc1p3n2gradodiv').removeClass('has-error');
            $('#ppc1p3n3mostrar').hide();
            $('#ppc1p3n3div').removeClass('has-error');
            $('#ppc1p3n31div').removeClass('has-error');
            
            $('#ppc1p3n4div').hide();
            $('#ppc1p3n4div').removeClass('has-error');
            
            
            $('#ppc1p3n5institucion').val('');
            $('#ppc1p3n5area').val('');
            $('#areacono').val('');
            $('#ppc1p3n6').val('');
            $('#ppc1p3n7').val('');
            $('#ppc1p3n3').val('98');
            $('#ppc1p3n31').val('98');
            $('#valorultimogrado').val('98');
            $('#valorppc1p3n4').val('98');
            deschequeo();
         }
        else
        {
            
        }
    validarbolitasytextoppc1p3n2(divcampo,campoval);
}
function deschequeo()
{
           // //alert('deschequeo');
            $('#ppc1p3n2grado1').prop('checked',false);
            $('#ppc1p3n2grado2').prop('checked',false);
            $('#ppc1p3n2grado3').prop('checked',false);
            $('#ppc1p3n2grado4').prop('checked',false);
            $('#ppc1p3n2grado5').prop('checked',false);
            $('#ppc1p3n2grado6').prop('checked',false);
            $('#ppc1p3n2grado7').prop('checked',false);
            $('#ppc1p3n2grado8').prop('checked',false);
            $('#ppc1p3n2grado9').prop('checked',false);
            $('#ppc1p3n2grado10').prop('checked',false);
            $('#ppc1p3n2grado11').prop('checked',false);
            $('#ppc1p3n2grado12').prop('checked',false);
            $('#ppc1p3n2grado13').prop('checked',false);
            
            $('#ppc1p3n4a').prop('checked',false);
            $('#ppc1p3n4b').prop('checked',false);
            $('#ppc1p3n4c').prop('checked',false);
           
} 
function mostrar3()
{
            $('#ppc1p3n3mostrar').show();
            
            $('#ppc1p3n3div').addClass('has-error');
            $('#ppc1p3n31div').addClass('has-error');
            
            
            $('#ppc1p3n4div').hide();
            $('#ppc1p3n4div').removeClass('has-error');
            $('#ppc1p3n5instituciondiv').hide();
            $('#ppc1p3n5instituciondiv').removeClass('has-error');
            $('#ppc1p3n5areadiv').hide();
            $('#ppc1p3n5areadiv').removeClass('has-error');
            $('#ppc1p3n6div').hide();
            $('#ppc1p3n6div').removeClass('has-error');
            $('#ppc1p3n7div').hide();
            $('#ppc1p3n7div').removeClass('has-error');
            
            
            $('#ppc1p3n3').val('');
            $('#ppc1p3n31').val('');
            $('#valorppc1p3n4').val('98');
            $('#ppc1p3n5institucion').val('98');
            $('#areacono').val('98');
            $('#ppc1p3n6').val('98');
            $('#ppc1p3n7').val('98');
}
//de aca para arriba es logica de bolas y textos
function validarcampotexcuadros(div,campo,ncampos)
{
    validarbolitasytextoppc1p3n2(div,campo);
    validarcuadrosppc1p3n2(div,ncampos);
} 
    
 function validarguardarppc1p3n2()
{
   ////alert($('.has-error').length);
   if($('.has-error').length === 0)
   {
     //  //alert('==0');
       $('#guardar').prop('disabled', false);
       $('#actualizar').prop('disabled', false);
       $('#cancelar').prop('disabled', false);
       $('#anterior').prop('disabled', true);
       $('#siguiente').prop('disabled', true);  
     //  aler('entra a otro');
       $('#otro').prop('disabled', true);       
   }
   else
   {
      ////alert('<>0');
       $('#guardar').prop('disabled', true);
       $('#actualizar').prop('disabled', true);
       $('#cancelar').prop('disabled', true);
       $('#anterior').prop('disabled', false);
       $('#siguiente').prop('disabled', true);
      
            $('#otro').prop('disabled', true);       
   }
   
}

//validar bolitas y texto
function validarbolitasytextoppc1p3n2(div,campo)
{ ////alert(div + ' juanpis ' + campo);
   if(($('#'+ campo).val() == '') || ($('#'+ campo).val() == '0'))
   { 
       $('#' + div).addClass(' has-error');
   }
   else
   { 
       $('#' + div).removeClass('has-error');
   }
    validarguardarppc1p3n2();
}
    $(document).ready(function()
    {

        $("#guardar").click(function ()
        {
            if($('#valorppc1p3n2').val()=='ppc1p3n2o1'|| $('#valorppc1p3n2').val()=='ppc1p3n2o2'|| $('#valorppc1p3n2').val()=='ppc1p3n2o3'|| $('#valorppc1p3n2').val()=='ppc1p3n2o4'|| $('#valorppc1p3n2').val()=='ppc1p3n2o14'|| $('#valorppc1p3n2').val()=='ppc1p3n2o6' ||$('#valorppc1p3n2').val()=='ppc1p3n2o5'||$('#valorppc1p3n2').val()=='ppc1p3n2o8'||$('#valorppc1p3n2').val()=='ppc1p3n2o10'||$('#valorppc1p3n2').val()=='ppc1p3n2o12')
            
                {
                   //alert('entro');
                        $.ajax({
                          url: "fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),
                          vidintegrante : $('#idintegrante').val(),
                          vvalorppc1p3n2 : $('#valorppc1p3n2').val(),
                          vultimogrado : $('#valorultimogrado').val(),
                          vppc1p3n3 : $('#ppc1p3n3').val(),
                          vppc1p3n31 : $('#ppc1p3n31').val(),
                          vppc1p3n4 : $('#valorppc1p3n4').val(),
                          vppc1p3n5institucion : $('#ppc1p3n5institucion').val(),
                          vppc1p3n5area : $('#areacono').val(),
                          vppc1p3n6 : $('#ppc1p3n6').val(),
                          vppc1p3n7 : $('#ppc1p3n7').val()},    
                          dataType: "html",
                          success : function(obj){                      
                          botonotrodisable();
                          terminaperfil();
                          }
                        });                    
                 }               
                        else
                         {
                         //  alert('no entro');
                          $.ajax({
                          url: "fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),
                          vidintegrante : $('#idintegrante').val(),
                          vvalorppc1p3n2 : $('#valorppc1p3n2').val(),
                          vultimogrado : $('#valorultimogrado').val(),
                          vppc1p3n3 : $('#ppc1p3n3').val(),
                          vppc1p3n31 : $('#ppc1p3n31').val(),
                          vppc1p3n4 : $('#valorppc1p3n4').val(),
                          vppc1p3n5institucion : $('#ppc1p3n5institucion').val(),
                          vppc1p3n5area : $('#areacono').val(),
                          vppc1p3n6 : $('#ppc1p3n6').val(),
                          vppc1p3n7 : $('#ppc1p3n7').val()},    
                          dataType: "html",
                          success : function(obj){                      
                          botonguardarotro();
                          terminaperfil();
                          }
                        }); 
                        } 
          });

        
        $("#actualizar").click(function ()
        {
            if($('#valorppc1p3n2').val()=='ppc1p3n2o1'||$('#valorppc1p3n2').val()=='ppc1p3n2o2'||$('#valorppc1p3n2').val()=='ppc1p3n2o3'||$('#valorppc1p3n2').val()=='ppc1p3n2o4'||$('#valorppc1p3n2').val()=='ppc1p3n2o14'||$('#valorppc1p3n2').val()=='ppc1p3n2o6' ||$('#valorppc1p3n2').val()=='ppc1p3n2o5'||$('#valorppc1p3n2').val()=='ppc1p3n2o8'||$('#valorppc1p3n2').val()=='ppc1p3n2o10'||$('#valorppc1p3n2').val()=='ppc1p3n2o12')
            
                {     //  alert('entro');
                        $.ajax({
                          url: "fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),
                          vidintegrante : $('#idintegrante').val(),
                          vvalorppc1p3n2 : $('#valorppc1p3n2').val(),
                          vultimogrado : $('#valorultimogrado').val(),
                          vppc1p3n3 : $('#ppc1p3n3').val(),
                          vppc1p3n31 : $('#ppc1p3n31').val(),
                          vppc1p3n4 : $('#valorppc1p3n4').val(),
                          vppc1p3n5institucion : $('#ppc1p3n5institucion').val(),
                          vppc1p3n5area : $('#areacono').val(),
                          vppc1p3n6 : $('#ppc1p3n6').val(),
                          vppc1p3n7 : $('#ppc1p3n7').val()},         
                          dataType: "html",
                          success : function(obj){                      
                          botonotrodisable();
                          terminaperfil();
                          }
                        }); 
                        }
                        else
                             {
                           //      alert('no entro');
                                  $.ajax({
                          url: "fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),
                          vidintegrante : $('#idintegrante').val(),
                          vvalorppc1p3n2 : $('#valorppc1p3n2').val(),
                          vultimogrado : $('#valorultimogrado').val(),
                          vppc1p3n3 : $('#ppc1p3n3').val(),
                          vppc1p3n31 : $('#ppc1p3n31').val(),
                          vppc1p3n4 : $('#valorppc1p3n4').val(),
                          vppc1p3n5institucion : $('#ppc1p3n5institucion').val(),
                          vppc1p3n5area : $('#areacono').val(),
                          vppc1p3n6 : $('#ppc1p3n6').val(),
                          vppc1p3n7 : $('#ppc1p3n7').val()},         
                          dataType: "html",
                          success : function(obj){                      
                          botonactualizarotro();
                          terminaperfil();
                          }
                        }); 
                             }
        });
        $("#siguiente").click(function ()
       {
        botonsiguiente();
        if(($('#edad').val() > 15 && $('#edad').val() < 18) && ($('#valorultimogrado').val()<9))
        {
        location.href = "../c_ppcapitulosintegrante/fc_ppcapitulosintegrante?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
        }
        else if (($('#edad').val() > 14 && $('#edad').val() < 18) && ($('#valorppc1p3n2').val() == 'ppc1p3n2o1') || ($('#edad').val() > 14 && $('#edad').val() < 18) && ($('#valorppc1p3n2').val() == 'ppc1p3n2o2' )) 
        {
         location.href = "../c_ppcapitulosintegrante/fc_ppcapitulosintegrante?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";    
            
        }
       else
       {
       location.href = "../c_ppc1p4n1/fc_ppc1p4n1?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
       }
       });
              
        $("#anterior").click(function ()
        {
         botonanterior();
         location.href = "../c_ppc1p3n1/fc_ppc1p3n1?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
        });
        $("#otro").click(function ()
        {
            //alert('ingreso otro');
             $.ajax({
                          url: "fc_insertarotro",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),
                          vidintegrante : $('#idintegrante').val()},
                          dataType: "html",
                          success : function(obj){                      
                          location.href = "../c_ppc1p3n2o1/fc_ppc1p3n2o1?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                                      
        //botonguardarotro();
                          }
                        });     
            
            
        // botonsiguiente();
         //location.href = "../c_ppc1p4n1/fc_ppc1p4n1?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    
        });

//para cargar variables capitulo, pregunta,encuestador,vivienda,barra



cargardatosgenerales('<?php echo($arraydatosgenerales['ecapitulo']); ?>','Pregunta 3.2 a 3.7 de 5.1','<?php echo($arraydatosgenerales['enomcoges']); ?>','<?php echo($arraydatosgenerales['enombreintegrante']." "." - "." "."Sexo:"." ".$arraydatosgenerales['esexointegrante']."   "."  -  "."   "."Edad:"."   ".$arraydatosgenerales['eedadintegrante']); ?>','60');
//control del boton ayuda
botonayuda();

});

//valir rango de el año
function validarrango(campo,canti,canti1,divcam)
{
   // alert(canti);
    if($('#' + campo).val() > canti ||$('#' + campo).val() < canti1)
    {
        $('#' + campo).val('');
        mensajito('ALERTA:','El año no puede ser mayor a ' + canti + ',ni menor a ' + canti1);
        validarbolitasytextoppc1p3n2(divcam,campo);
       
    }
    else
    {
        validarbolitasytextoppc1p3n2(divcam,campo);
    }
}


//terminar perfil
function terminaperfil(campo)
{
   //alert($('#valorultimogrado').val());
   if(($('#edad').val() > 14 && $('#edad').val() < 18) && ($('#valorultimogrado').val()<9))
   {
      //alert('termina perfil');
                           $.ajax({
                          url: "fc_llenarpptodosloscapitulos",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),
                          vidintegrante : $('#idintegrante').val()},    
                          dataType: "html",
                          success : function(obj){                      
                          //botonguardar();
                          //location.href = "../c_totalintegrantes/fc_totalintegrantes?folio="+ $('#folio').val() +"&idintegrante=0";
                          }
                          });
   
   }
   else if (($('#edad').val() > 14 && $('#edad').val() < 18) && ($('#valorppc1p3n2').val() == 'ppc1p3n2o1') || ($('#edad').val() > 14 && $('#edad').val() < 18) && ($('#valorppc1p3n2').val() == 'ppc1p3n2o2' )) 
   {
                          $.ajax({
                          url: "fc_llenarpptodosloscapitulos",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),
                          vidintegrante : $('#idintegrante').val()},    
                          dataType: "html",
                          success : function(obj){                      
                          //botonguardar();
                          //location.href = "../c_totalintegrantes/fc_totalintegrantes?folio="+ $('#folio').val() +"&idintegrante=0";
                          }
                          });    
       
   }
   else
   {
                          $.ajax({
                          url: "fc_borrarpptodosloscapitulos",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),
                          vidintegrante : $('#idintegrante').val()},    
                          dataType: "html",
                          success : function(obj){                      
                          //botonguardar();
                          //location.href = "../c_totalintegrantes/fc_totalintegrantes?folio="+ $('#folio').val() +"&idintegrante=0";
                          }
                          });
    
    
    
    
   }
   
   
   
   }

</script>
</html>