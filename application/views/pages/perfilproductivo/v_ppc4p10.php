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
        <input type="text" class="form-control input-sm" id="valorppc4p1" name="valorppc4p1"  style="display:none"   placeholder="" value="<?php echo($carrayrespuestas['eppc4p1']); ?>">
        <!--fin para imprimir el idintegrante y llevarlo-->
<hr>
        <form class="form-group" name="formulario" id="formulario">
           <div class="row">
           <div><label class="control-label"><br/>
            10. ACTIVIDAD PRODUCTIVA DEL NEGOCIO  
            (Sería lista desplegable de acuerdo a la clasificación establecida - Según códigos CIIU. Dm IT)
            <button type="button" id="vayuda" name="vayuda" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModal">
                        <span class="glyphicon glyphicon-question-sign" aria-hidden="true"></span> Ayuda
            </button> 
        </label>
           </div><br>
           <div class="bs-example">
    <div class="panel-group" id="accordion">
<!--        INICIO DE LA PESTAÑA DIRECCIÓN Y GERENCIA DEL ACORDEON-->
        <div class="panel panel-success">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">01. Agricultura, ganadería, caza y actividades de servicios conexas </a>
                </h4>
            </div>
            <div id="collapseOne" class="panel-collapse collapse ">
                <div class="panel-body">
                    <div class="row col-md-offset-0">
                        <div id="ppc4p10div" class="has-error" onclick="validaracordeon()" name="ppc4p10div" <?php if($carrayrespuestas['eppc4p10']==''){echo('class="form-group col-md-12 form-group-sm has-error"');}else{echo('class="form-group col-md-12 form-group-sm"');}?>>   
                <div class="radio">
                    <label>
<!--                        en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="ppc4p10" id="ppc4p10" onclick="colocaropcion('ppc4p10a1','valorppc4p10','ppc4p10div');" value="ppc4p10a1" <?php if($carrayrespuestas['eppc4p10']=='ppc4p10a1'){echo('checked');}?>>
                        011  Cultivos agrícolas transitorios 
                    </label>          
                </div>
               <div class="radio">
                    <label>
<!--                        en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="ppc4p10" id="ppc4p10" onclick="colocaropcion('ppc4p10a2','valorppc4p10','ppc4p10div');" value="ppc4p10a2" <?php if($carrayrespuestas['eppc4p10']=='ppc4p10a2'){echo('checked');}?>>
                        012 Cultivos agrícolas permanentes  
                    </label>          
                </div>
                            <div class="radio">
                    <label>
<!--                        en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="ppc4p10" id="ppc4p10" onclick="colocaropcion('ppc4p10a3','valorppc4p10','ppc4p10div');" value="ppc4p10a3" <?php if($carrayrespuestas['eppc4p10']=='ppc4p10a3'){echo('checked');}?>>
                        013 Propagación de plantas (actividades de los viveros, excepto viveros forestales) 
                    </label>          
                </div>
                            <div class="radio">
                    <label>
<!--                        en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="ppc4p10" id="ppc4p10" onclick="colocaropcion('ppc4p10a4','valorppc4p10','ppc4p10div');" value="ppc4p10a4" <?php if($carrayrespuestas['eppc4p10']=='ppc4p10a4'){echo('checked');}?>>
                        014 Ganadería  
                    </label>          
                </div>
                            <div class="radio">
                    <label>
<!--                        en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="ppc4p10" id="ppc4p10" onclick="colocaropcion('ppc4p10a5','valorppc4p10','ppc4p10div');" value="ppc4p10a5" <?php if($carrayrespuestas['eppc4p10']=='ppc4p10a5'){echo('checked');}?>>
                        015 Explotación mixta (agrícola y pecuaria) 
                    </label>          
                </div>
                            <div class="radio">
                    <label>
<!--                        en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="ppc4p10" id="ppc4p10" onclick="colocaropcion('ppc4p10a6','valorppc4p10','ppc4p10div');" value="ppc4p10a6" <?php if($carrayrespuestas['eppc4p10']=='ppc4p10a6'){echo('checked');}?>>
                        016 Actividades de apoyo a la agricultura y la ganadería, y actividades posteriores a la cosecha 
                    </label>          
                </div>
                            <div class="radio">
                    <label>
<!--                        en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="ppc4p10" id="ppc4p10" onclick="colocaropcion('ppc4p10a7','valorppc4p10','ppc4p10div');" value="ppc4p10a7" <?php if($carrayrespuestas['eppc4p10']=='ppc4p10a7'){echo('checked');}?>>
                        017 Caza ordinaria y mediante trampas y actividades de servicios conexas 

                    </label>          
                </div>
                <input type="text" class="form-control" id="valorppc4p10" name="valorppc4p10" style="display:none"   placeholder="Text input" value="<?php echo($carrayrespuestas['eppc4p10']); ?>">
               </div>
               </div> 
               </div>
               </div>
               </div>
<!--TERMINA PRIMERA PESTAÑA ACORDEON-->
<!--        INICIO DE LA PESTAÑA FINANZAS Y ADMINISTRACIÓN DEL ACORDEON-->
        <div class="panel panel-success">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">02 Silvicultura(forestal) y extracción de madera</a>
                </h4>
            </div>
            <div id="collapseTwo" class="panel-collapse collapse">
                <div class="panel-body">
            <div id="ppc4p10div2" class="has-error" onclick="validaracordeon()" name="ppc4p10div2" <?php if($carrayrespuestas['eppc4p10']==''){echo('class="form-group col-md-12 form-group-sm has-error"');}else{echo('class="form-group col-md-12 form-group-sm"');}?>>   
                <div class="radio">
                    <label>
<!--                        en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="ppc4p10" id="ppc4p10" onclick="colocaropcion('ppc4p10a8','valorppc4p10','ppc4p10div2');" value="ppc4p10a8" <?php if($carrayrespuestas['eppc4p10']=='ppc4p10a8'){echo('checked');}?>>
                          021 Silvicultura y otras actividades forestales
                    </label>
                </div>
                <div class="radio">
                    <label>
<!--                        en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="ppc4p10" id="ppc4p10" onclick="colocaropcion('ppc4p10a10','valorppc4p10','ppc4p10div2');" value="ppc4p10a10" <?php if($carrayrespuestas['eppc4p10']=='ppc4p10a10'){echo('checked');}?>>
                          022 Extracción de madera 
                    </label>
                </div>
                  <div class="radio">
                    <label>
<!--                        en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="ppc4p10" id="ppc4p10" onclick="colocaropcion('ppc4p10a11','valorppc4p10','ppc4p10div2');" value="ppc4p10a11" <?php if($carrayrespuestas['eppc4p10']=='ppc4p10a11'){echo('checked');}?>>
                         023 Recolección de productos forestales diferentes a la madera
                    </label>
                </div>
                  <div class="radio">
                    <label>
<!--                        en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="ppc4p10" id="ppc4p10" onclick="colocaropcion('ppc4p10a12','valorppc4p10','ppc4p10div2');" value="ppc4p10a12" <?php if($carrayrespuestas['eppc4p10']=='ppc4p10a12'){echo('checked');}?>>
                          04 Servicios de apoyo a la silvicultura 

                    </label>
                </div>
            </div>
            </div>
            </div>
        </div>

<!--FIN PESTAÑA FINANZAS Y ADMINISTRACIÓN DEL ACORDEON-->

<!--        INICIO DE LA PESTAÑA CIENCIAS NATURALES Y APLICADAS DEL ACORDEON-->
        <div class="panel panel-success">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">03 Pesca y acuicultura</a>
                </h4>
            </div>
            
            <div id="collapseThree" class="panel-collapse collapse">
                <div class="panel-body">
                    
                    <div id="ppc4p10div3" class="has-error" onclick="validaracordeon()" name="ppc4p10div3" <?php if($carrayrespuestas['eppc4p10']==''){echo('class="form-group col-md-12 form-group-sm has-error"');}else{echo('class="form-group col-md-12 form-group-sm"');}?>>   

                <div class="radio">
                    <label>
<!--                        en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="ppc4p10" id="ppc4p10" onclick="colocaropcion('ppc4p10a13','valorppc4p10','ppc4p10div3');" value="ppc4p10a13" <?php if($carrayrespuestas['eppc4p10']=='ppc4p10a13'){echo('checked');}?>>
                           031 Pesca 

                    </label>
                </div>
                
                <div class="radio">
                    <label>
<!--                        en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="ppc4p10" id="ppc4p10" onclick="colocaropcion('ppc4p10a14','valorppc4p10','ppc4p10div3');" value="ppc4p10a14" <?php if($carrayrespuestas['eppc4p10']=='ppc4p10a14'){echo('checked');}?>>
                          032 Acuicultura 

                    </label>
                </div>
                
                   </div>
                    
                </div>
            </div>
        </div>

<!--FIN PESTAÑA FINANZAS Y ADMINISTRACIÓN DEL ACORDEON-->
         <div class="panel panel-success">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapsefour">05 Extracción de carbón de piedra y lignito</a>
                </h4>
            </div>
            <div id="collapsefour" class="panel-collapse collapse">
                <div class="panel-body">
                    
                    <div id="ppc4p10div4" class="has-error" onclick="validaracordeon()" name="ppc4p10div4" <?php if($carrayrespuestas['eppc4p10']==''){echo('class="form-group col-md-12 form-group-sm has-error"');}else{echo('class="form-group col-md-12 form-group-sm"');}?>>   

                <div class="radio">
                    <label>
<!--                        en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="ppc4p10" id="ppc4p10" onclick="colocaropcion('ppc4p10a15','valorppc4p10','ppc4p10div4');" value="ppc4p10a15" <?php if($carrayrespuestas['eppc4p10']=='ppc4p10a15'){echo('checked');}?>>
                          051 Extracción de hulla (carbón de piedra)

                    </label>
                </div>
                
                <div class="radio">
                    <label>
<!--                        en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="ppc4p10" id="ppc4p10" onclick="colocaropcion('ppc4p10a16','valorppc4p10','ppc4p10div4');" value="ppc4p10a16" <?php if($carrayrespuestas['eppc4p10']=='ppc4p10a16'){echo('checked');}?>>
                         052 Extracción de carbón lignito
                    </label>
                </div>
            </div>
                    
                </div>
            </div>
        </div>
<!--FIN DE LA PESTAÑA SALUD DEL ACORDEON-->

<!--INICIO DE LA PESTAÑA CIENCIAS SOCIALES, EDUCACIÓN, SERVICIOS GUBERNAMENTALES Y RELIGIÓN DEL ACORDEON-->
         <div class="panel panel-success">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapsefive">06 Extracción de petróleo crudo y gas natural</a>
                </h4>
            </div>
            <div id="collapsefive" class="panel-collapse collapse">
                <div class="panel-body">
                    
                    <div id="ppc4p10div5" class="has-error" onclick="validaracordeon()" name="ppc4p10div5" <?php if($carrayrespuestas['eppc4p10']==''){echo('class="form-group col-md-12 form-group-sm has-error"');}else{echo('class="form-group col-md-12 form-group-sm"');}?>>   

                <div class="radio">
                    <label>
<!--                        en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="ppc4p10" id="ppc4p10" onclick="colocaropcion('ppc4p10a17','valorppc4p10','ppc4p10div5');" value="ppc4p10a17" <?php if($carrayrespuestas['eppc4p10']=='ppc4p10a17'){echo('checked');}?>>
                       061 Extracción de petróleo crudo

                    </label>
                </div>
                
                <div class="radio">
                    <label>
<!--                        en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="ppc4p10" id="ppc4p10" onclick="colocaropcion('ppc4p10a18','valorppc4p10','ppc4p10div5');" value="ppc4p10a18" <?php if($carrayrespuestas['eppc4p10']=='ppc4p10a18'){echo('checked');}?>>
                      062 Extracción de gas natural

                    </label>
                </div>
                
                   </div>
                    
                </div>
            </div>
        </div>

<!--FIN DE LA PESTAÑA CIENCIAS SOCIALES, EDUCACIÓN, SERVICIOS GUBERNAMENTALES Y RELIGIÓN DEL ACORDEON-->

<!--INICIO DE LA PESTAÑA ARTE, CULTURA, ESPARCIMIENTO Y DEPORTES DEL ACORDEON-->
        
         <div class="panel panel-success">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapsesix">07 Extracción de minerales metalíferos</a>
                </h4>
            </div>
            <div id="collapsesix" class="panel-collapse collapse">
                <div class="panel-body">
                    
                    <div id="ppc4p10div6" class="has-error" onclick="validaracordeon()" name="ppc4p10div6" <?php if($carrayrespuestas['eppc4p10']==''){echo('class="form-group col-md-12 form-group-sm has-error"');}else{echo('class="form-group col-md-12 form-group-sm"');}?>>   

                <div class="radio">
                    <label>
<!--                        en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="ppc4p10" id="ppc4p10" onclick="colocaropcion('ppc4p10a19','valorppc4p10','ppc4p10div6');" value="ppc4p10a19" <?php if($carrayrespuestas['eppc4p10']=='ppc4p10a19'){echo('checked');}?>>
                         071 Extracción de minerales de hierro

                    </label>
                </div>
                
                <div class="radio">
                    <label>
<!--                        en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="ppc4p10" id="ppc4p10" onclick="colocaropcion('ppc4p10a20','valorppc4p10','ppc4p10div6');" value="ppc4p10a20" <?php if($carrayrespuestas['eppc4p10']=='ppc4p10a20'){echo('checked');}?>>
                          072 Extracción de minerales metalíferos no ferrosos

                    </label>
                </div>
                
                  </div>
                    
                </div>
            </div>
        </div>

<!--FIN DE LA PESTAÑA ARTE, CULTURA, ESPARCIMIENTO Y DEPORTES DEL ACORDEON-->

<!--INICIO DE LA PESTAÑA VENTAS Y SERVICIOS DEL ACORDEON-->
        
         <div class="panel panel-success">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseseven">08 Extracción de otras minas y canteras</a>
                </h4>
            </div>
            <div id="collapseseven" class="panel-collapse collapse">
                <div class="panel-body">
                    
                    <div id="ppc4p10div7" class="has-error" onclick="validaracordeon()" name="ppc4p10div7" <?php if($carrayrespuestas['eppc4p10']==''){echo('class="form-group col-md-12 form-group-sm has-error"');}else{echo('class="form-group col-md-12 form-group-sm"');}?>>   

                <div class="radio">
                    <label>
<!--                        en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="ppc4p10" id="ppc4p10" onclick="colocaropcion('ppc4p10a21','valorppc4p10','ppc4p10div7');" value="ppc4p10a21" <?php if($carrayrespuestas['eppc4p10']=='ppc4p10a21'){echo('checked');}?>>
                           081 Extracción de piedra, arena, arcillas, cal, yeso, caolín, bentonitas y similares

                    </label>
                </div>
                
                <div class="radio">
                    <label>
<!--                        en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="ppc4p10" id="ppc4p10" onclick="colocaropcion('ppc4p10a22','valorppc4p10','ppc4p10div7');" value="ppc4p10a22" <?php if($carrayrespuestas['eppc4p10']=='ppc4p10a22'){echo('checked');}?>>
                          082 Extracción de esmeraldas, piedras preciosas y semipreciosas

                    </label>
                </div>
                
                  <div class="radio">
                    <label>
<!--                        en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="ppc4p10" id="ppc4p10" onclick="colocaropcion('ppc4p10a23','valorppc4p10','ppc4p10div7');" value="ppc4p10a23" <?php if($carrayrespuestas['eppc4p10']=='ppc4p10a23'){echo('checked');}?>>
                           083 Extracción de otros minerales no metálicos n.c.p.

                    </label>
                </div>
                         
            </div>
                    
                </div>
            </div>
        </div>
        
<!--FIN DE LA PESTAÑA VENTAS Y SERVICIOS DEL ACORDEON-->

<!--INICIO DE LA PESTAÑA EXPLOTACIÓN PRIMARIA Y EXTRACTIVA DEL ACORDEON-->
         <div class="panel panel-success">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseeight">09 Actividades de servicios de apoyo para la explotación de minas </a>
                </h4>
            </div>
            <div id="collapseeight" class="panel-collapse collapse">
                <div class="panel-body">
                    
                    <div id="ppc4p10div8" class="has-error" onclick="validaracordeon()" name="ppc4p10div8" <?php if($carrayrespuestas['eppc4p10']==''){echo('class="form-group col-md-12 form-group-sm has-error"');}else{echo('class="form-group col-md-12 form-group-sm"');}?>>   

                <div class="radio">
                    <label>
<!--                        en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="ppc4p10" id="ppc4p10" onclick="colocaropcion('ppc4p10a24','valorppc4p10','ppc4p10div8');" value="ppc4p10a24" <?php if($carrayrespuestas['eppc4p10']=='ppc4p10a24'){echo('checked');}?>>
                         09  Actividades de servicios de apoyo para la explotación de minas

                    </label>
                </div>
                
                </div>
                    
                </div>
            </div>
        </div>

<!--FIN DE LA PESTAÑA EXPLOTACIÓN PRIMARIA Y EXTRACTIVA DEL ACORDEON-->

<!--INICIO DE LA PESTAÑA OPERACIÓN DE EQUIPOS DEL TRANSPORTE Y OFICIOS DEL ACORDEON-->
        
         <div class="panel panel-success">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapsenine">10 Elaboración de productos alimenticios</a>
                </h4>
            </div>
            <div id="collapsenine" class="panel-collapse collapse">
                <div class="panel-body">
                    
                    <div id="ppc4p10div9" class="has-error" onclick="validaracordeon()" name="ppc4p10div9" <?php if($carrayrespuestas['eppc4p10']==''){echo('class="form-group col-md-12 form-group-sm has-error"');}else{echo('class="form-group col-md-12 form-group-sm"');}?>>   

                <div class="radio">
                    <label>
<!--                        en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="ppc4p10" id="ppc4p10" onclick="colocaropcion('ppc4p10a25','valorppc4p10','ppc4p10div9');" value="ppc4p10a25" <?php if($carrayrespuestas['eppc4p10']=='ppc4p10a25'){echo('checked');}?>>
                            101 Procesamiento y conservación de carne, pescado, crustáceos y moluscos 

                    </label>
                </div>
                
                <div class="radio">
                    <label>
<!--                        en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="ppc4p10" id="ppc4p10" onclick="colocaropcion('ppc4p10a26','valorppc4p10','ppc4p10div9');" value="ppc4p10a26" <?php if($carrayrespuestas['eppc4p10']=='ppc4p10a26'){echo('checked');}?>>
                          102 Procesamiento y conservación de frutas, legumbres, hortalizas y tubérculos

                    </label>
                </div>
                
                  <div class="radio">
                    <label>
<!--                        en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="ppc4p10" id="ppc4p10" onclick="colocaropcion('ppc4p10a27','valorppc4p10','ppc4p10div9');" value="ppc4p10a27" <?php if($carrayrespuestas['eppc4p10']=='ppc4p10a27'){echo('checked');}?>>
                           103 Elaboración de aceites y grasas de origen vegetal y animal

                    </label>
                </div>
                
                  <div class="radio">
                    <label>
<!--                        en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="ppc4p10" id="ppc4p10" onclick="colocaropcion('ppc4p10a28','valorppc4p10','ppc4p10div9');" value="ppc4p10a28" <?php if($carrayrespuestas['eppc4p10']=='ppc4p10a28'){echo('checked');}?>>
                        104 Elaboración de productos lácteos

                    </label>
                </div>
                         
                         <div class="radio">
                    <label>
<!--                        en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="ppc4p10" id="ppc4p10" onclick="colocaropcion('ppc4p10a29','valorppc4p10','ppc4p10div9');" value="ppc4p10a29" <?php if($carrayrespuestas['eppc4p10']=='ppc4p10a29'){echo('checked');}?>>
                         105 Elaboración de productos de molinería, almidones y productos derivados del almidón

                    </label>
                </div>
                
                        
                        <div class="radio">
                    <label>
<!--                        en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="ppc4p10" id="ppc4p10" onclick="colocaropcion('ppc4p10a30','valorppc4p10','ppc4p10div9');" value="ppc4p10a30" <?php if($carrayrespuestas['eppc4p10']=='ppc4p10a30'){echo('checked');}?>>
                          106 Elaboración de productos de café

                    </label>
                </div>
                        
                        <div class="radio">
                    <label>
<!--                        en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="ppc4p10" id="ppc4p10" onclick="colocaropcion('ppc4p10a31','valorppc4p10','ppc4p10div9');" value="ppc4p10a31" <?php if($carrayrespuestas['eppc4p10']=='ppc4p10a31'){echo('checked');}?>>
                           107 Elaboración de azúcar y panela

                    </label>
                </div>
                        
                        <div class="radio">
                    <label>
<!--                        en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="ppc4p10" id="ppc4p10" onclick="colocaropcion('ppc4p10a32','valorppc4p10','ppc4p10div9');" value="ppc4p10a32" <?php if($carrayrespuestas['eppc4p10']=='ppc4p10a32'){echo('checked');}?>>
                         108 Elaboración de otros productos alimenticios

                    </label>
                </div>
                        
                        <div class="radio">
                    <label>
<!--                        en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="ppc4p10" id="ppc4p10" onclick="colocaropcion('ppc4p10a33','valorppc4p10','ppc4p10div9');" value="ppc4p10a33" <?php if($carrayrespuestas['eppc4p10']=='ppc4p10a33'){echo('checked');}?>>
                          109 Elaboración de alimentos preparados para animales

                    </label>
                </div>
                                  
            </div>
                    
                </div>
            </div>
        </div>

<!--FIN DE LA PESTAÑA OPERACIÓN DE EQUIPOS DEL TRANSPORTE Y OFICIOS DEL ACORDEON-->

<!--INICIO DE LA PESTAÑA PROCESAMIENTO, FABRICACIÓN Y ENSAMBLE DEL ACORDEON-->
        
         <div class="panel panel-success">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseten">011 Elaboración de bebidas</a>
                </h4>
            </div>
            <div id="collapseten" class="panel-collapse collapse">
                <div class="panel-body">
                   
                    
                    <div id="ppc4p10div10" class="has-error" onclick="validaracordeon()" name="ppc4p10div10" <?php if($carrayrespuestas['eppc4p10']==''){echo('class="form-group col-md-12 form-group-sm has-error"');}else{echo('class="form-group col-md-12 form-group-sm"');}?>>   

                <div class="radio">
                    <label>
<!--                        en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="ppc4p10" id="ppc4p10" onclick="colocaropcion('ppc4p10a34','valorppc4p10','ppc4p10div10');" value="ppc4p10a34" <?php if($carrayrespuestas['eppc4p10']=='ppc4p10a34'){echo('checked');}?>>
                         011  Elaboración de bebidas

                    </label>
                </div>
                
                </div>
                    
                </div>
            </div>
        </div>


 <div class="panel panel-success">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapsetwelve">012 Elaboración de productos de tabaco</a>
                </h4>
            </div>
            <div id="collapsetwelve" class="panel-collapse collapse">
                <div class="panel-body">
                   
                    
                    <div id="ppc4p10div11" class="has-error" onclick="validaracordeon()" name="ppc4p10div11" <?php if($carrayrespuestas['eppc4p10']==''){echo('class="form-group col-md-12 form-group-sm has-error"');}else{echo('class="form-group col-md-12 form-group-sm"');}?>>   

                <div class="radio">
                    <label>
<!--                        en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="ppc4p10" id="ppc4p10" onclick="colocaropcion('ppc4p10a35','valorppc4p10','ppc4p10div11');" value="ppc4p10a35" <?php if($carrayrespuestas['eppc4p10']=='ppc4p10a35'){echo('checked');}?>>
                         012 Elaboración de productos de tabaco

                    </label>
                </div>
                
                </div>
                    
                </div>
            </div>
        </div>


<div class="panel panel-success">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse13">013 Fabricación de productos textiles</a>
                </h4>
            </div>
            <div id="collapse13" class="panel-collapse collapse">
                <div class="panel-body">
                   
                    
                    <div id="ppc4p10div12" class="has-error" onclick="validaracordeon()" name="ppc4p10div12" <?php if($carrayrespuestas['eppc4p10']==''){echo('class="form-group col-md-12 form-group-sm has-error"');}else{echo('class="form-group col-md-12 form-group-sm"');}?>>   

                <div class="radio">
                    <label>
<!--                        en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="ppc4p10" id="ppc4p10" onclick="colocaropcion('ppc4p10a36','valorppc4p10','ppc4p10div12');" value="ppc4p10a36" <?php if($carrayrespuestas['eppc4p10']=='ppc4p10a36'){echo('checked');}?>>
                        013 Fabricación de productos textiles

                    </label>
                </div>
                
                </div>
                    
                </div>
            </div>
        </div>



<div class="panel panel-success">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse14">014 Confección de prendas de vestir</a>
                </h4>
            </div>
            <div id="collapse14" class="panel-collapse collapse">
                <div class="panel-body">
                   
                    
                    <div id="ppc4p10div13" class="has-error" onclick="validaracordeon()" name="ppc4p10div13" <?php if($carrayrespuestas['eppc4p10']==''){echo('class="form-group col-md-12 form-group-sm has-error"');}else{echo('class="form-group col-md-12 form-group-sm"');}?>>   

                <div class="radio">
                    <label>
<!--                        en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="ppc4p10" id="ppc4p10" onclick="colocaropcion('ppc4p10a37','valorppc4p10','ppc4p10div13');" value="ppc4p10a37" <?php if($carrayrespuestas['eppc4p10']=='ppc4p10a37'){echo('checked');}?>>
                        014 Confección de prendas de vestir

                    </label>
                </div>
                
                </div>
                    
                </div>
            </div>
        </div>


<div class="panel panel-success">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse15">015 Curtido y recurtido de cueros; fabricación de calzado; fabricación de artículos de viaje, maletas, bolsos de mano y artículos similares, y fabricación de artículos de talabartería y guarnicionería; adobo y teñido de pieles</a>
                </h4>
            </div>
            <div id="collapse15" class="panel-collapse collapse">
                <div class="panel-body">
                   
                    
                    <div id="ppc4p10div14" class="has-error" onclick="validaracordeon()" name="ppc4p10div14" <?php if($carrayrespuestas['eppc4p10']==''){echo('class="form-group col-md-12 form-group-sm has-error"');}else{echo('class="form-group col-md-12 form-group-sm"');}?>>   

                <div class="radio">
                    <label>
<!--                        en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="ppc4p10" id="ppc4p10" onclick="colocaropcion('ppc4p10a38','valorppc4p10','ppc4p10div14');" value="ppc4p10a38" <?php if($carrayrespuestas['eppc4p10']=='ppc4p10a38'){echo('checked');}?>>
                        015 Curtido y recurtido de cueros; fabricación de calzado; fabricación de artículos de viaje, maletas, bolsos de mano y artículos similares, y fabricación de artículos de talabartería y guarnicionería; adobo y teñido de pieles

                    </label>
                </div>
                
                </div>
                    
                </div>
            </div>
        </div>



<div class="panel panel-success">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse16">016 Transformación de la madera y fabricación de productos de madera y de corcho, excepto muebles; fabricación de artículos de cestería y espartería</a>
                </h4>
            </div>
            <div id="collapse16" class="panel-collapse collapse">
                <div class="panel-body">
                   
                    
                    <div id="ppc4p10div15" class="has-error" onclick="validaracordeon()" name="ppc4p10div15" <?php if($carrayrespuestas['eppc4p10']==''){echo('class="form-group col-md-12 form-group-sm has-error"');}else{echo('class="form-group col-md-12 form-group-sm"');}?>>   

                <div class="radio">
                    <label>
<!--                        en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="ppc4p10" id="ppc4p10" onclick="colocaropcion('ppc4p10a39','valorppc4p10','ppc4p10div15');" value="ppc4p10a39" <?php if($carrayrespuestas['eppc4p10']=='ppc4p10a39'){echo('checked');}?>>
                         016 Transformación de la madera y fabricación de productos de madera y de corcho, excepto muebles; fabricación de artículos de cestería y espartería

                    </label>
                </div>
                
                </div>
                    
                </div>
            </div>
        </div>


<div class="panel panel-success">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse17">017 Fabricación de papel, cartón y productos de papel y cartón</a>
                </h4>
            </div>
            <div id="collapse17" class="panel-collapse collapse">
                <div class="panel-body">
                   
                    
                    <div id="ppc4p10div16" class="has-error" onclick="validaracordeon()" name="ppc4p10div16" <?php if($carrayrespuestas['eppc4p10']==''){echo('class="form-group col-md-12 form-group-sm has-error"');}else{echo('class="form-group col-md-12 form-group-sm"');}?>>   

                <div class="radio">
                    <label>
<!--                        en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="ppc4p10" id="ppc4p10" onclick="colocaropcion('ppc4p10a40','valorppc4p10','ppc4p10div16');" value="ppc4p10a40" <?php if($carrayrespuestas['eppc4p10']=='ppc4p10a40'){echo('checked');}?>>
                         017 Fabricación de papel, cartón y productos de papel y cartón

                    </label>
                </div>
                
                </div>
                    
                </div>
            </div>
        </div>


<div class="panel panel-success">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse18">018 Actividades de impresión y de producción de copias a partir de grabaciones originales </a>
                </h4>
            </div>
            <div id="collapse18" class="panel-collapse collapse">
                <div class="panel-body">
                   
                    
                    <div id="ppc4p10div17" class="has-error" onclick="validaracordeon()" name="ppc4p10div17" <?php if($carrayrespuestas['eppc4p10']==''){echo('class="form-group col-md-12 form-group-sm has-error"');}else{echo('class="form-group col-md-12 form-group-sm"');}?>>   

                <div class="radio">
                    <label>
<!--                        en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="ppc4p10" id="ppc4p10" onclick="colocaropcion('ppc4p10a41','valorppc4p10','ppc4p10div17');" value="ppc4p10a41" <?php if($carrayrespuestas['eppc4p10']=='ppc4p10a41'){echo('checked');}?>>
                        018 Actividades de impresión y de producción de copias a partir de grabaciones originales 

                    </label>
                </div>
                
                </div>
                    
                </div>
            </div>
        </div>

<div class="panel panel-success">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse19">019 Coquización, fabricación de productos de la refinación del petróleo y actividad de mezcla de combustibles </a>
                </h4>
            </div>
            <div id="collapse19" class="panel-collapse collapse">
                <div class="panel-body">
                   
                    
                    <div id="ppc4p10div18" class="has-error" onclick="validaracordeon()" name="ppc4p10div18" <?php if($carrayrespuestas['eppc4p10']==''){echo('class="form-group col-md-12 form-group-sm has-error"');}else{echo('class="form-group col-md-12 form-group-sm"');}?>>   

                <div class="radio">
                    <label>
<!--                        en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="ppc4p10" id="ppc4p10" onclick="colocaropcion('ppc4p10a42','valorppc4p10','ppc4p10div18');" value="ppc4p10a42" <?php if($carrayrespuestas['eppc4p10']=='ppc4p10a42'){echo('checked');}?>>
                         0191 Fabricación de productos de hornos de coque

                    </label>
                </div>
                        
                         <div class="radio">
                    <label>
<!--                        en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="ppc4p10" id="ppc4p10" onclick="colocaropcion('ppc4p10a43','valorppc4p10','ppc4p10div18');" value="ppc4p10a43" <?php if($carrayrespuestas['eppc4p10']=='ppc4p10a43'){echo('checked');}?>>
                         0192 Fabricación de productos de la refinación del petróleo

                    </label>
                </div>
                
                </div>
                    
                </div>
            </div>
        </div>

<div class="panel panel-success">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse20">20 Fabricación de sustancias y productos químicos</a>
                </h4>
            </div>
            <div id="collapse20" class="panel-collapse collapse">
                <div class="panel-body">
                   
                    
                    <div id="ppc4p10div19" class="has-error" onclick="validaracordeon()" name="ppc4p10div19" <?php if($carrayrespuestas['eppc4p10']==''){echo('class="form-group col-md-12 form-group-sm has-error"');}else{echo('class="form-group col-md-12 form-group-sm"');}?>>   

                <div class="radio">
                    <label>
<!--                        en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="ppc4p10" id="ppc4p10" onclick="colocaropcion('ppc4p10a44','valorppc4p10','ppc4p10div19');" value="ppc4p10a44" <?php if($carrayrespuestas['eppc4p10']=='ppc4p10a44'){echo('checked');}?>>
                        201 Fabricación de sustancias químicas básicas, abonos y compuestos inorgánicos nitrogenados, plásticos y caucho sintético en formas primarias

                    </label>
                </div>
                        
                         <div class="radio">
                    <label>
<!--                        en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="ppc4p10" id="ppc4p10" onclick="colocaropcion('ppc4p10a45','valorppc4p10','ppc4p10div19');" value="ppc4p10a45" <?php if($carrayrespuestas['eppc4p10']=='ppc4p10a45'){echo('checked');}?>>
                        202 Fabricación de otros productos químicos

                    </label>
                </div>
                        
                         <div class="radio">
                    <label>
<!--                        en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="ppc4p10" id="ppc4p10" onclick="colocaropcion('ppc4p10a46','valorppc4p10','ppc4p10div19');" value="ppc4p10a46" <?php if($carrayrespuestas['eppc4p10']=='ppc4p10a46'){echo('checked');}?>>
                        203 Fabricación de fibras sintéticas y artificiales

                    </label>
                </div>
                                       
                </div>
                    
                </div>
            </div>
        </div>

<div class="panel panel-success">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse21">21 Fabricación de productos farmacéuticos, sustancias químicas medicinales y productos botánicos de uso farmacéutico</a>
                </h4>
            </div>
            <div id="collapse21" class="panel-collapse collapse">
                <div class="panel-body">
                   
                    
                    <div id="ppc4p10div20" class="has-error" onclick="validaracordeon()" name="ppc4p10div20" <?php if($carrayrespuestas['eppc4p10']==''){echo('class="form-group col-md-12 form-group-sm has-error"');}else{echo('class="form-group col-md-12 form-group-sm"');}?>>   

                <div class="radio">
                    <label>
<!--                        en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="ppc4p10" id="ppc4p10" onclick="colocaropcion('ppc4p10a47','valorppc4p10','ppc4p10div20');" value="ppc4p10a47" <?php if($carrayrespuestas['eppc4p10']=='ppc4p10a47'){echo('checked');}?>>
                         21 Fabricación de productos farmacéuticos, sustancias químicas medicinales y productos botánicos de uso farmacéutico

                    </label>
                </div>
                
                </div>
                    
                </div>
            </div>
        </div>

<div class="panel panel-success">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse22">22 Fabricación de productos de caucho y de plástico</a>
                </h4>
            </div>
            <div id="collapse22" class="panel-collapse collapse">
                <div class="panel-body">
                   
                    
                    <div id="ppc4p10div21" class="has-error" onclick="validaracordeon()" name="ppc4p10div21" <?php if($carrayrespuestas['eppc4p10']==''){echo('class="form-group col-md-12 form-group-sm has-error"');}else{echo('class="form-group col-md-12 form-group-sm"');}?>>   

                <div class="radio">
                    <label>
<!--                        en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="ppc4p10" id="ppc4p10" onclick="colocaropcion('ppc4p10a48','valorppc4p10','ppc4p10div21');" value="ppc4p10a48" <?php if($carrayrespuestas['eppc4p10']=='ppc4p10a48'){echo('checked');}?>>
                         22 Fabricación de productos de caucho y de plástico

                    </label>
                </div>
                
                </div>
                    
                </div>
            </div>
        </div>

<div class="panel panel-success">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse23">23 Fabricación de otros productos minerales no metálicos</a>
                </h4>
            </div>
            <div id="collapse23" class="panel-collapse collapse">
                <div class="panel-body">
                   
                    
                    <div id="ppc4p10div22" class="has-error" onclick="validaracordeon()" name="ppc4p10div22" <?php if($carrayrespuestas['eppc4p10']==''){echo('class="form-group col-md-12 form-group-sm has-error"');}else{echo('class="form-group col-md-12 form-group-sm"');}?>>   

                <div class="radio">
                    <label>
<!--                        en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="ppc4p10" id="ppc4p10" onclick="colocaropcion('ppc4p10a49','valorppc4p10','ppc4p10div22');" value="ppc4p10a49" <?php if($carrayrespuestas['eppc4p10']=='ppc4p10a49'){echo('checked');}?>>
                         231 Fabricación de vidrio y productos de vidrio

                    </label>
                </div>
                        
                         <div class="radio">
                    <label>
<!--                        en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="ppc4p10" id="ppc4p10" onclick="colocaropcion('ppc4p10a50','valorppc4p10','ppc4p10div22');" value="ppc4p10a50" <?php if($carrayrespuestas['eppc4p10']=='ppc4p10a50'){echo('checked');}?>>
                         239 Fabricación de productos minerales no metálicos n.c.p.

                    </label>
                </div>
                        
                                        
                </div>
                    
                </div>
            </div>
        </div>

<div class="panel panel-success">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse24">24 Fabricación de productos metalúrgicos básicos</a>
                </h4>
            </div>
            <div id="collapse24" class="panel-collapse collapse">
                <div class="panel-body">
                   
                    
                    <div id="ppc4p10div23" class="has-error" onclick="validaracordeon()" name="ppc4p10div23" <?php if($carrayrespuestas['eppc4p10']==''){echo('class="form-group col-md-12 form-group-sm has-error"');}else{echo('class="form-group col-md-12 form-group-sm"');}?>>   

                <div class="radio">
                    <label>
<!--                        en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="ppc4p10" id="ppc4p10" onclick="colocaropcion('ppc4p10a51','valorppc4p10','ppc4p10div23');" value="ppc4p10a51" <?php if($carrayrespuestas['eppc4p10']=='ppc4p10a51'){echo('checked');}?>>
                         241 Industrias básicas de hierro y de acero

                    </label>
                </div>
                        
                        
                <div class="radio">
                    <label>
<!--                        en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="ppc4p10" id="ppc4p10" onclick="colocaropcion('ppc4p10a52','valorppc4p10','ppc4p10div23');" value="ppc4p10a52" <?php if($carrayrespuestas['eppc4p10']=='ppc4p10a52'){echo('checked');}?>>
                         242 Industrias básicas de metales preciosos y de metales no ferrosos

                    </label>
                </div>
                        
                        
                <div class="radio">
                    <label>
<!--                        en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="ppc4p10" id="ppc4p10" onclick="colocaropcion('ppc4p10a53','valorppc4p10','ppc4p10div23');" value="ppc4p10a53" <?php if($carrayrespuestas['eppc4p10']=='ppc4p10a53'){echo('checked');}?>>
                         243 Fundición de metales

                    </label>
                </div>
                
                </div>
                    
                </div>
            </div>
        </div>

<div class="panel panel-success">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse25">25 Fabricación de productos elaborados de metal, excepto maquinaria y equipo</a>
                </h4>
            </div>
            <div id="collapse25" class="panel-collapse collapse">
                <div class="panel-body">
                   
                    
                    <div id="ppc4p10div24" class="has-error" onclick="validaracordeon()" name="ppc4p10div24" <?php if($carrayrespuestas['eppc4p10']==''){echo('class="form-group col-md-12 form-group-sm has-error"');}else{echo('class="form-group col-md-12 form-group-sm"');}?>>   

                <div class="radio">
                    <label>
<!--                        en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="ppc4p10" id="ppc4p10" onclick="colocaropcion('ppc4p10a54','valorppc4p10','ppc4p10div24');" value="ppc4p10a54" <?php if($carrayrespuestas['eppc4p10']=='ppc4p10a54'){echo('checked');}?>>
                         251 Fabricación de productos metálicos para uso estructural, tanques, depósitos y generadores de vapor

                    </label>
                </div>
                        
                        <div class="radio">
                    <label>
<!--                        en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="ppc4p10" id="ppc4p10" onclick="colocaropcion('ppc4p10a55','valorppc4p10','ppc4p10div24');" value="ppc4p10a55" <?php if($carrayrespuestas['eppc4p10']=='ppc4p10a55'){echo('checked');}?>>
                         252 Fabricación de armas y municiones

                    </label>
                </div>
                        
                        <div class="radio">
                    <label>
<!--                        en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="ppc4p10" id="ppc4p10" onclick="colocaropcion('ppc4p10a56','valorppc4p10','ppc4p10div24');" value="ppc4p10a56" <?php if($carrayrespuestas['eppc4p10']=='ppc4p10a56'){echo('checked');}?>>
                         259 Fabricación de otros productos elaborados de metal y actividades de servicios relacionadas con el trabajo de metales

                    </label>
                </div>
                
                </div>
                    
                </div>
            </div>
        </div>

<div class="panel panel-success">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse26">26 Fabricación de productos informáticos, electrónicos y ópticos</a>
                </h4>
            </div>
            <div id="collapse26" class="panel-collapse collapse">
                <div class="panel-body">
                   
                    
                    <div id="ppc4p10div25" class="has-error" onclick="validaracordeon()" name="ppc4p10div25" <?php if($carrayrespuestas['eppc4p10']==''){echo('class="form-group col-md-12 form-group-sm has-error"');}else{echo('class="form-group col-md-12 form-group-sm"');}?>>   

                <div class="radio">
                    <label>
<!--                        en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="ppc4p10" id="ppc4p10" onclick="colocaropcion('ppc4p10a57','valorppc4p10','ppc4p10div25');" value="ppc4p10a57" <?php if($carrayrespuestas['eppc4p10']=='ppc4p10a57'){echo('checked');}?>>
                         261 Fabricación de componentes y tableros electrónicos

                    </label>
                </div>
                        
                        
                <div class="radio">
                    <label>
<!--                        en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="ppc4p10" id="ppc4p10" onclick="colocaropcion('ppc4p10a58','valorppc4p10','ppc4p10div25');" value="ppc4p10a58" <?php if($carrayrespuestas['eppc4p10']=='ppc4p10a58'){echo('checked');}?>>
                         262 Fabricación de computadoras y de equipo periférico

                    </label>
                </div>
                        
                        
                <div class="radio">
                    <label>
<!--                        en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="ppc4p10" id="ppc4p10" onclick="colocaropcion('ppc4p10a59','valorppc4p10','ppc4p10div25');" value="ppc4p10a59" <?php if($carrayrespuestas['eppc4p10']=='ppc4p10a59'){echo('checked');}?>>
                         263 Fabricación de equipos de comunicación

                    </label>
                </div>
                        
                        
                <div class="radio">
                    <label>
<!--                        en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="ppc4p10" id="ppc4p10" onclick="colocaropcion('ppc4p10a60','valorppc4p10','ppc4p10div25');" value="ppc4p10a60" <?php if($carrayrespuestas['eppc4p10']=='ppc4p10a60'){echo('checked');}?>>
                         264 Fabricación de aparatos electrónicos de consumo

                    </label>
                </div>
                        
                        
                <div class="radio">
                    <label>
<!--                        en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="ppc4p10" id="ppc4p10" onclick="colocaropcion('ppc4p10a61','valorppc4p10','ppc4p10div25');" value="ppc4p10a61" <?php if($carrayrespuestas['eppc4p10']=='ppc4p10a61'){echo('checked');}?>>
                         265 Fabricación de equipo de medición, prueba, navegación y control; fabricación de relojes

                    </label>
                </div>
                        
                        
                <div class="radio">
                    <label>
<!--                        en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="ppc4p10" id="ppc4p10" onclick="colocaropcion('ppc4p10a62','valorppc4p10','ppc4p10div25');" value="ppc4p10a62" <?php if($carrayrespuestas['eppc4p10']=='ppc4p10a62'){echo('checked');}?>>
                         266 Fabricación de equipo de irradiación y equipo electrónico de uso médico y terapéutico

                    </label>
                </div>
                        
                        
                <div class="radio">
                    <label>
<!--                        en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="ppc4p10" id="ppc4p10" onclick="colocaropcion('ppc4p10a63','valorppc4p10','ppc4p10div25');" value="ppc4p10a63" <?php if($carrayrespuestas['eppc4p10']=='ppc4p10a63'){echo('checked');}?>>
                         267 Fabricación de instrumentos ópticos y equipo fotográfico

                    </label>
                </div>
                        
                        
                <div class="radio">
                    <label>
<!--                        en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="ppc4p10" id="ppc4p10" onclick="colocaropcion('ppc4p10a64','valorppc4p10','ppc4p10div25');" value="ppc4p10a64" <?php if($carrayrespuestas['eppc4p10']=='ppc4p1067'){echo('checked');}?>>
                         268 Fabricación de medios magnéticos y ópticos para almacenamiento de datos

                    </label>
                </div>
                
                </div>
                    
                </div>
            </div>
        </div>

<div class="panel panel-success">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse27">27 Fabricación de aparatos y equipo eléctrico</a>
                </h4>
            </div>
            <div id="collapse27" class="panel-collapse collapse">
                <div class="panel-body">
                   
                    
                    <div id="ppc4p10div26" class="has-error" onclick="validaracordeon()" name="ppc4p10div26" <?php if($carrayrespuestas['eppc4p10']==''){echo('class="form-group col-md-12 form-group-sm has-error"');}else{echo('class="form-group col-md-12 form-group-sm"');}?>>   

                <div class="radio">
                    <label>
<!--                        en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="ppc4p10" id="ppc4p10" onclick="colocaropcion('ppc4p10a65','valorppc4p10','ppc4p10div26');" value="ppc4p10a65" <?php if($carrayrespuestas['eppc4p10']=='ppc4p10a65'){echo('checked');}?>>
                         271 Fabricación de motores, generadores y transformadores eléctricos y de aparatos de distribución y control de la energía eléctrica

                    </label>
                </div>
                        
                        
                <div class="radio">
                    <label>
<!--                        en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="ppc4p10" id="ppc4p10" onclick="colocaropcion('ppc4p10a66','valorppc4p10','ppc4p10div26');" value="ppc4p10a66" <?php if($carrayrespuestas['eppc4p10']=='ppc4p10a66'){echo('checked');}?>>
                         272 Fabricación de pilas, baterías y acumuladores eléctricos

                    </label>
                </div>
                        
                        
                <div class="radio">
                    <label>
<!--                        en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="ppc4p10" id="ppc4p10" onclick="colocaropcion('ppc4p10a67','valorppc4p10','ppc4p10div26');" value="ppc4p10a67" <?php if($carrayrespuestas['eppc4p10']=='ppc4p10a67'){echo('checked');}?>>
                         273 Fabricación de hilos y cables aislados y sus dispositivos

                    </label>
                </div>
                        
                        
                <div class="radio">
                    <label>
<!--                        en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="ppc4p10" id="ppc4p10" onclick="colocaropcion('ppc4p10a68','valorppc4p10','ppc4p10div26');" value="ppc4p10a68" <?php if($carrayrespuestas['eppc4p10']=='ppc4p10a68'){echo('checked');}?>>
                         274 Fabricación de equipos eléctricos de iluminación
                    </label>
                </div>
                        
                        
                <div class="radio">
                    <label>
<!--                        en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="ppc4p10" id="ppc4p10" onclick="colocaropcion('ppc4p10a69','valorppc4p10','ppc4p10div26');" value="ppc4p10a69" <?php if($carrayrespuestas['eppc4p10']=='ppc4p10a69'){echo('checked');}?>>
                         275 Fabricación de aparatos de uso doméstico

                    </label>
                </div>
                        
                        
                <div class="radio">
                    <label>
<!--                        en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="ppc4p10" id="ppc4p10" onclick="colocaropcion('ppc4p10a70','valorppc4p10','ppc4p10div26');" value="ppc4p10a70" <?php if($carrayrespuestas['eppc4p10']=='ppc4p10a70'){echo('checked');}?>>
                         279 Fabricación de otros tipos de equipo eléctrico n.c.p.

                    </label>
                </div>
                        
                        
                <div class="radio">
                    <label>
<!--                        en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="ppc4p10" id="ppc4p10" onclick="colocaropcion('ppc4p10a71','valorppc4p10','ppc4p10div26');" value="ppc4p10a71" <?php if($carrayrespuestas['eppc4p10']=='ppc4p10a71'){echo('checked');}?>>
                         267 Fabricación de instrumentos ópticos y equipo fotográfico

                    </label>
                </div>
                                      
                </div>
                    
                </div>
            </div>
        </div>

<div class="panel panel-success">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse28">28 Fabricación de maquinaria y equipo n.c.p.</a>
                </h4>
            </div>
            <div id="collapse28" class="panel-collapse collapse">
                <div class="panel-body">
                   
                    
                    <div id="ppc4p10div27" class="has-error" onclick="validaracordeon()" name="ppc4p10div27" <?php if($carrayrespuestas['eppc4p10']==''){echo('class="form-group col-md-12 form-group-sm has-error"');}else{echo('class="form-group col-md-12 form-group-sm"');}?>>   

                <div class="radio">
                    <label>
<!--                        en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="ppc4p10" id="ppc4p10" onclick="colocaropcion('ppc4p10a72','valorppc4p10','ppc4p10div27');" value="ppc4p10a72" <?php if($carrayrespuestas['eppc4p10']=='ppc4p10a72'){echo('checked');}?>>
                         28 Fabricación de maquinaria y equipo n.c.p.

                    </label>
                </div>
                        
                        
                
                
                </div>
                    
                </div>
            </div>
        </div>

<div class="panel panel-success">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse29">29 Fabricación de vehículos automotores, remolques y semirremolques</a>
                </h4>
            </div>
            <div id="collapse29" class="panel-collapse collapse">
                <div class="panel-body">
                   
                    
                    <div id="ppc4p10div28" class="has-error" onclick="validaracordeon()" name="ppc4p10div28" <?php if($carrayrespuestas['eppc4p10']==''){echo('class="form-group col-md-12 form-group-sm has-error"');}else{echo('class="form-group col-md-12 form-group-sm"');}?>>   

                <div class="radio">
                    <label>
<!--                        en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="ppc4p10" id="ppc4p10" onclick="colocaropcion('ppc4p10a73','valorppc4p10','ppc4p10div28');" value="ppc4p10a73" <?php if($carrayrespuestas['eppc4p10']=='ppc4p10a73'){echo('checked');}?>>
                         291 Fabricación de vehículos automotores y sus motores

                    </label>
                </div>
                        
                        
                <div class="radio">
                    <label>
<!--                        en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="ppc4p10" id="ppc4p10" onclick="colocaropcion('ppc4p10a74','valorppc4p10','ppc4p10div28');" value="ppc4p10a74" <?php if($carrayrespuestas['eppc4p10']=='ppc4p10a74'){echo('checked');}?>>
                         292 Fabricación de carrocerías para vehículos automotores; fabricación de remolques y semirremolques 

                    </label>
                </div>
                        
                        
                <div class="radio">
                    <label>
<!--                        en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="ppc4p10" id="ppc4p10" onclick="colocaropcion('ppc4p10a75','valorppc4p10','ppc4p10div28');" value="ppc4p10a75" <?php if($carrayrespuestas['eppc4p10']=='ppc4p10a75'){echo('checked');}?>>
                         293 Fabricación de partes, piezas (autopartes) y accesorios (lujos) para vehículos automotores

                    </label>
                </div>
                        
                        
                 </div>
                    
                </div>
            </div>
        </div>

<div class="panel panel-success">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse30">30 Fabricación de otros tipos de equipo de transporte</a>
                </h4>
            </div>
            <div id="collapse30" class="panel-collapse collapse">
                <div class="panel-body">
                   
                    
                    <div id="ppc4p10div29" class="has-error" onclick="validaracordeon()" name="ppc4p10div29" <?php if($carrayrespuestas['eppc4p10']==''){echo('class="form-group col-md-12 form-group-sm has-error"');}else{echo('class="form-group col-md-12 form-group-sm"');}?>>   

                <div class="radio">
                    <label>
<!--                        en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="ppc4p10" id="ppc4p10" onclick="colocaropcion('ppc4p10a76','valorppc4p10','ppc4p10div29');" value="ppc4p10a76" <?php if($carrayrespuestas['eppc4p10']=='ppc4p10a76'){echo('checked');}?>>
                         30 Fabricación de otros tipos de equipo de transporte

                    </label>
                </div>
                        
                        
                               
                </div>
                    
                </div>
            </div>
        </div>

<div class="panel panel-success">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse31">31 Fabricación de muebles, colchones y somieres</a>
                </h4>
            </div>
            <div id="collapse31" class="panel-collapse collapse">
                <div class="panel-body">
                   
                    
                    <div id="ppc4p10div30" class="has-error" onclick="validaracordeon()" name="ppc4p10div30" <?php if($carrayrespuestas['eppc4p10']==''){echo('class="form-group col-md-12 form-group-sm has-error"');}else{echo('class="form-group col-md-12 form-group-sm"');}?>>   

                <div class="radio">
                    <label>
<!--                        en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="ppc4p10" id="ppc4p10" onclick="colocaropcion('ppc4p10a77','valorppc4p10','ppc4p10div30');" value="ppc4p10a77" <?php if($carrayrespuestas['eppc4p10']=='ppc4p10a77'){echo('checked');}?>>
                         31 Fabricación de muebles, colchones y somieres

                    </label>
                </div>
                     
                </div>
                    
                </div>
            </div>
        </div>

<div class="panel panel-success">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse32">32 Otras industrias manufactureras</a>
                </h4>
            </div>
            <div id="collapse32" class="panel-collapse collapse">
                <div class="panel-body">
                   
                    
                    <div id="ppc4p10div31" class="has-error" onclick="validaracordeon()" name="ppc4p10div31" <?php if($carrayrespuestas['eppc4p10']==''){echo('class="form-group col-md-12 form-group-sm has-error"');}else{echo('class="form-group col-md-12 form-group-sm"');}?>>   

                <div class="radio">
                    <label>
<!--                        en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="ppc4p10" id="ppc4p10" onclick="colocaropcion('ppc4p10a78','valorppc4p10','ppc4p10div31');" value="ppc4p10a78" <?php if($carrayrespuestas['eppc4p10']=='ppc4p10a78'){echo('checked');}?>>
                         321 Fabricación de joyas, bisutería y artículos conexos                                                                                            

                    </label>
                </div>
                        
                        
                <div class="radio">
                    <label>
<!--                        en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="ppc4p10" id="ppc4p10" onclick="colocaropcion('ppc4p10a79','valorppc4p10','ppc4p10div31');" value="ppc4p10a79" <?php if($carrayrespuestas['eppc4p10']=='ppc4p10a79'){echo('checked');}?>>
                         322 Fabricación de instrumentos musicales

                    </label>
                </div>
                        
                        
                <div class="radio">
                    <label>
<!--                        en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="ppc4p10" id="ppc4p10" onclick="colocaropcion('ppc4p10a80','valorppc4p10','ppc4p10div31');" value="ppc4p10a80" <?php if($carrayrespuestas['eppc4p10']=='ppc4p10a80'){echo('checked');}?>>
                         323 Fabricación de artículos y equipo para la práctica del deporte

                    </label>
                </div>
                        
                        
                <div class="radio">
                    <label>
<!--                        en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="ppc4p10" id="ppc4p10" onclick="colocaropcion('ppc4p10a81','valorppc4p10','ppc4p10div31');" value="ppc4p10a81" <?php if($carrayrespuestas['eppc4p10']=='ppc4p10a81'){echo('checked');}?>>
                         324 Fabricación de juegos, juguetes y rompecabezas

                    </label>
                </div>
                        
                        
                <div class="radio">
                    <label>
<!--                        en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="ppc4p10" id="ppc4p10" onclick="colocaropcion('ppc4p10a82','valorppc4p10','ppc4p10div31');" value="ppc4p10a82" <?php if($carrayrespuestas['eppc4p10']=='ppc4p10a82'){echo('checked');}?>>
                         325 Fabricación de instrumentos, aparatos y materiales médicos y odontológicos (incluido mobiliario)

                    </label>
                </div>
                        
                        
                <div class="radio">
                    <label>
<!--                        en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="ppc4p10" id="ppc4p10" onclick="colocaropcion('ppc4p10a83','valorppc4p10','ppc4p10div31');" value="ppc4p10a83" <?php if($carrayrespuestas['eppc4p10']=='ppc4p10a83'){echo('checked');}?>>
                         329 Otras industrias manufactureras n.c.p.

                    </label>
                </div>
                         
                
                </div>
                    
                </div>
            </div>
        </div>

<div class="panel panel-success">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse33">33 Instalación, mantenimiento y reparación especializado de maquinaria y equipo</a>
                </h4>
            </div>
            <div id="collapse33" class="panel-collapse collapse">
                <div class="panel-body">
                   
                    
                    <div id="ppc4p10div32" class="has-error" onclick="validaracordeon()" name="ppc4p10div32" <?php if($carrayrespuestas['eppc4p10']==''){echo('class="form-group col-md-12 form-group-sm has-error"');}else{echo('class="form-group col-md-12 form-group-sm"');}?>>   

                <div class="radio">
                    <label>
<!--                        en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="ppc4p10" id="ppc4p10" onclick="colocaropcion('ppc4p10a84','valorppc4p10','ppc4p10div32');" value="ppc4p10a84" <?php if($carrayrespuestas['eppc4p10']=='ppc4p10a84'){echo('checked');}?>>
                         33 Instalación, mantenimiento y reparación especializado de maquinaria y equipo

                    </label>
                </div>
                  
                </div>
                    
                </div>
            </div>
        </div>

<div class="panel panel-success">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse35">35 Suministro de electricidad, gas, vapor y aire acondicionado </a>
                </h4>
            </div>
            <div id="collapse35" class="panel-collapse collapse">
                <div class="panel-body">
                   
                    
                    <div id="ppc4p10div33" class="has-error" onclick="validaracordeon()" name="ppc4p10div33" <?php if($carrayrespuestas['eppc4p10']==''){echo('class="form-group col-md-12 form-group-sm has-error"');}else{echo('class="form-group col-md-12 form-group-sm"');}?>>   

                <div class="radio">
                    <label>
<!--                        en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="ppc4p10" id="ppc4p10" onclick="colocaropcion('ppc4p10a85','valorppc4p10','ppc4p10div33');" value="ppc4p10a85" <?php if($carrayrespuestas['eppc4p10']=='ppc4p10a85'){echo('checked');}?>>
                        351 Generación, transmisión, distribución y comercialización de energía eléctrica

                    </label>
                </div>
                        
                        
                <div class="radio">
                    <label>
<!--                        en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="ppc4p10" id="ppc4p10" onclick="colocaropcion('ppc4p10a86','valorppc4p10','ppc4p10div33');" value="ppc4p10a86" <?php if($carrayrespuestas['eppc4p10']=='ppc4p10a86'){echo('checked');}?>>
                         352 Producción de gas; distribución de combustibles gaseosos por tuberías

                    </label>
                </div>
                        
                        
                <div class="radio">
                    <label>
<!--                        en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="ppc4p10" id="ppc4p10" onclick="colocaropcion('ppc4p10a87','valorppc4p10','ppc4p10div33');" value="ppc4p10a87" <?php if($carrayrespuestas['eppc4p10']=='ppc4p10a87'){echo('checked');}?>>
                         353 Suministro de vapor y aire acondicionado

                    </label>
                </div>
                        
                               
                </div>
                    
                </div>
            </div>
        </div>

<div class="panel panel-success">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse36">36 Captación, tratamiento y distribución de agua</a>
                </h4>
            </div>
            <div id="collapse36" class="panel-collapse collapse">
                <div class="panel-body">
                   
                    
                    <div id="ppc4p10div34" class="has-error" onclick="validaracordeon()" name="ppc4p10div34" <?php if($carrayrespuestas['eppc4p10']==''){echo('class="form-group col-md-12 form-group-sm has-error"');}else{echo('class="form-group col-md-12 form-group-sm"');}?>>   

                <div class="radio">
                    <label>
<!--                        en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="ppc4p10" id="ppc4p10" onclick="colocaropcion('ppc4p10a88','valorppc4p10','ppc4p10div34');" value="ppc4p10a88" <?php if($carrayrespuestas['eppc4p10']=='ppc4p10a88'){echo('checked');}?>>
                         36 Captación, tratamiento y distribución de agua

                    </label>
                </div>
                         
                </div>
                    
                </div>
            </div>
        </div>

<div class="panel panel-success">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse37">37 Evacuación y tratamiento de aguas residuales</a>
                </h4>
            </div>
            <div id="collapse37" class="panel-collapse collapse">
                <div class="panel-body">
                   
                    
                    <div id="ppc4p10div35" class="has-error" onclick="validaracordeon()" name="ppc4p10div35" <?php if($carrayrespuestas['eppc4p10']==''){echo('class="form-group col-md-12 form-group-sm has-error"');}else{echo('class="form-group col-md-12 form-group-sm"');}?>>   

                <div class="radio">
                    <label>
<!--                        en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="ppc4p10" id="ppc4p10" onclick="colocaropcion('ppc4p10a89','valorppc4p10','ppc4p10div35');" value="ppc4p10a89" <?php if($carrayrespuestas['eppc4p10']=='ppc4p10a89'){echo('checked');}?>>
                         37 Evacuación y tratamiento de aguas residuales

                    </label>
                </div>
                        
                </div>
                    
                </div>
            </div>
        </div>

<div class="panel panel-success">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse38">38 Recolección, tratamiento y disposición de desechos, recuperación de materiales</a>
                </h4>
            </div>
            <div id="collapse38" class="panel-collapse collapse">
                <div class="panel-body">
                   
                    
                    <div id="ppc4p10div36" class="has-error" onclick="validaracordeon()" name="ppc4p10div36" <?php if($carrayrespuestas['eppc4p10']==''){echo('class="form-group col-md-12 form-group-sm has-error"');}else{echo('class="form-group col-md-12 form-group-sm"');}?>>   

                <div class="radio">
                    <label>
<!--                        en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="ppc4p10" id="ppc4p10" onclick="colocaropcion('ppc4p10a90','valorppc4p10','ppc4p10div36');" value="ppc4p10a90" <?php if($carrayrespuestas['eppc4p10']=='ppc4p10a90'){echo('checked');}?>>
                         38 Recolección, tratamiento y disposición de desechos, recuperación de materiales

                    </label>
                </div>
                        
                </div>
                    
                </div>
            </div>
        </div>

<div class="panel panel-success">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse39">39 Actividades de saneamiento ambiental y otros servicios de gestión de desechos</a>
                </h4>
            </div>
            <div id="collapse39" class="panel-collapse collapse">
                <div class="panel-body">
                   
                    
                    <div id="ppc4p10div37" class="has-error" onclick="validaracordeon()" name="ppc4p10div37" <?php if($carrayrespuestas['eppc4p10']==''){echo('class="form-group col-md-12 form-group-sm has-error"');}else{echo('class="form-group col-md-12 form-group-sm"');}?>>   

                <div class="radio">
                    <label>
<!--                        en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="ppc4p10" id="ppc4p10" onclick="colocaropcion('ppc4p10a91','valorppc4p10','ppc4p10div37');" value="ppc4p10a91" <?php if($carrayrespuestas['eppc4p10']=='ppc4p10a91'){echo('checked');}?>>
                         39 Actividades de saneamiento ambiental y otros servicios de gestión de desechos

                    </label>
                </div>
                        
                </div>
                    
                </div>
            </div>
        </div>

<div class="panel panel-success">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse41">41 Construcción de edificios</a>
                </h4>
            </div>
            <div id="collapse41" class="panel-collapse collapse">
                <div class="panel-body">
                   
                    
                    <div id="ppc4p10div38" class="has-error" onclick="validaracordeon()" name="ppc4p10div38" <?php if($carrayrespuestas['eppc4p10']==''){echo('class="form-group col-md-12 form-group-sm has-error"');}else{echo('class="form-group col-md-12 form-group-sm"');}?>>   

                <div class="radio">
                    <label>
<!--                        en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="ppc4p10" id="ppc4p10" onclick="colocaropcion('ppc4p10a92','valorppc4p10','ppc4p10div38');" value="ppc4p10a92" <?php if($carrayrespuestas['eppc4p10']=='ppc4p10a92'){echo('checked');}?>>
                         41 Construcción de edificios

                    </label>
                </div>
                        
                </div>
                    
                </div>
            </div>
        </div>

<div class="panel panel-success">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse42">42 Obras de ingeniería civil -Construcción</a>
                </h4>
            </div>
            <div id="collapse42" class="panel-collapse collapse">
                <div class="panel-body">
                   
                    
                    <div id="ppc4p10div39" class="has-error" onclick="validaracordeon()" name="ppc4p10div39" <?php if($carrayrespuestas['eppc4p10']==''){echo('class="form-group col-md-12 form-group-sm has-error"');}else{echo('class="form-group col-md-12 form-group-sm"');}?>>   

                <div class="radio">
                    <label>
<!--                        en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="ppc4p10" id="ppc4p10" onclick="colocaropcion('ppc4p10a93','valorppc4p10','ppc4p10div39');" value="ppc4p10a93" <?php if($carrayrespuestas['eppc4p10']=='ppc4p10a93'){echo('checked');}?>>
                         42 Obras de ingeniería civil -Construcción

                    </label>
                </div>
                        
                </div>
                    
                </div>
            </div>
        </div>

<div class="panel panel-success">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse43">43 Actividades especializadas para la construcción de edificios y obras de ingeniería civil</a>
                </h4>
            </div>
            <div id="collapse43" class="panel-collapse collapse">
                <div class="panel-body">
                   
                    
                    <div id="ppc4p10div40" class="has-error" onclick="validaracordeon()" name="ppc4p10div40" <?php if($carrayrespuestas['eppc4p10']==''){echo('class="form-group col-md-12 form-group-sm has-error"');}else{echo('class="form-group col-md-12 form-group-sm"');}?>>   

                <div class="radio">
                    <label>
<!--                        en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="ppc4p10" id="ppc4p10" onclick="colocaropcion('ppc4p10a94','valorppc4p10','ppc4p10div40');" value="ppc4p10a94" <?php if($carrayrespuestas['eppc4p10']=='ppc4p10a94'){echo('checked');}?>>
                        431 Demolición y preparación del terreno

                    </label>
                </div>
                        
                        <div class="radio">
                    <label>
<!--                        en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="ppc4p10" id="ppc4p10" onclick="colocaropcion('ppc4p10a95','valorppc4p10','ppc4p10div40');" value="ppc4p10a95" <?php if($carrayrespuestas['eppc4p10']=='ppc4p10a95'){echo('checked');}?>>
                        432 Instalaciones eléctricas, de fontanería y otras instalaciones especializadas

                    </label>
                </div>
                        
                        <div class="radio">
                    <label>
<!--                        en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="ppc4p10" id="ppc4p10" onclick="colocaropcion('ppc4p10a96','valorppc4p10','ppc4p10div40');" value="ppc4p10a96" <?php if($carrayrespuestas['eppc4p10']=='ppc4p10a96'){echo('checked');}?>>
                        433 Terminación y acabado de edificios y obras de ingeniería civil

                    </label>
                </div>
                        
                        <div class="radio">
                    <label>
<!--                        en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="ppc4p10" id="ppc4p10" onclick="colocaropcion('ppc4p10a97','valorppc4p10','ppc4p10div40');" value="ppc4p10a97" <?php if($carrayrespuestas['eppc4p10']=='ppc4p10a97'){echo('checked');}?>>
                       439 Otras actividades especializadas para la construcción de edificios y obras de ingeniería civil

                    </label>
                </div>
                        
                </div>
                    
                </div>
            </div>
        </div>

<div class="panel panel-success">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse45">45 Comercio, mantenimiento y reparación de vehículos automotores y motocicletas, sus partes, piezas y accesorios</a>
                </h4>
            </div>
            <div id="collapse45" class="panel-collapse collapse">
                <div class="panel-body">
                   
                    
                    <div id="ppc4p10div41" class="has-error" onclick="validaracordeon()" name="ppc4p10div41" <?php if($carrayrespuestas['eppc4p10']==''){echo('class="form-group col-md-12 form-group-sm has-error"');}else{echo('class="form-group col-md-12 form-group-sm"');}?>>   

                <div class="radio">
                    <label>
<!--                        en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="ppc4p10" id="ppc4p10" onclick="colocaropcion('ppc4p10a98','valorppc4p10','ppc4p10div41');" value="ppc4p10a98" <?php if($carrayrespuestas['eppc4p10']=='ppc4p10a98'){echo('checked');}?>>
                         451 Comercio de vehículos automotores

                    </label>
                </div>
                        
                        <div class="radio">
                    <label>
<!--                        en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="ppc4p10" id="ppc4p10" onclick="colocaropcion('ppc4p10a99','valorppc4p10','ppc4p10div41');" value="ppc4p10a99" <?php if($carrayrespuestas['eppc4p10']=='ppc4p10a99'){echo('checked');}?>>
                         452 Mantenimiento y reparación de vehículos automotores

                    </label>
                </div>
                        
                        <div class="radio">
                    <label>
<!--                        en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="ppc4p10" id="ppc4p10" onclick="colocaropcion('ppc4p10a100','valorppc4p10','ppc4p10div41');" value="ppc4p10a100" <?php if($carrayrespuestas['eppc4p10']=='ppc4p10a100'){echo('checked');}?>>
                         453 Comercio de partes, piezas (autopartes) y accesorios (lujos) para vehículos automotores

                    </label>
                </div>
                        
                        <div class="radio">
                    <label>
<!--                        en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="ppc4p10" id="ppc4p10" onclick="colocaropcion('ppc4p10a101','valorppc4p10','ppc4p10div41');" value="ppc4p10a101" <?php if($carrayrespuestas['eppc4p10']=='ppc4p10a101'){echo('checked');}?>>
                         454 Comercio, mantenimiento y reparación de motocicletas y de sus partes, piezas y accesorios

                    </label>
                </div>
                        
                </div>
                    
                </div>
            </div>
        </div>

<div class="panel panel-success">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse46">46 Comercio al por mayor y en comisión o por contrata, excepto el comercio de vehículos automotores y motocicletas</a>
                </h4>
            </div>
            <div id="collapse46" class="panel-collapse collapse">
                <div class="panel-body">
                   
                    
                    <div id="ppc4p10div42" class="has-error" onclick="validaracordeon()" name="ppc4p10div42" <?php if($carrayrespuestas['eppc4p10']==''){echo('class="form-group col-md-12 form-group-sm has-error"');}else{echo('class="form-group col-md-12 form-group-sm"');}?>>   

                <div class="radio">
                    <label>
<!--                        en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="ppc4p10" id="ppc4p10" onclick="colocaropcion('ppc4p10a102','valorppc4p10','ppc4p10div42');" value="ppc4p10a102" <?php if($carrayrespuestas['eppc4p10']=='ppc4p10a102'){echo('checked');}?>>
                        46 Comercio al por mayor y en comisión o por contrata, excepto el comercio de vehículos automotores y motocicletas

                    </label>
                </div>
                        
                </div>
                    
                </div>
            </div>
        </div>

<div class="panel panel-success">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse47">47 Comercio al por menor (incluso el comercio al por menor de combustibles), excepto el de vehículos automotores y motocicletas</a>
                </h4>
            </div>
            <div id="collapse47" class="panel-collapse collapse">
                <div class="panel-body">
                   
                    
                    <div id="ppc4p10div43" class="has-error" onclick="validaracordeon()" name="ppc4p10div43" <?php if($carrayrespuestas['eppc4p10']==''){echo('class="form-group col-md-12 form-group-sm has-error"');}else{echo('class="form-group col-md-12 form-group-sm"');}?>>   

                <div class="radio">
                    <label>
<!--                        en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="ppc4p10" id="ppc4p10" onclick="colocaropcion('ppc4p10a103','valorppc4p10','ppc4p10div43');" value="ppc4p10a103" <?php if($carrayrespuestas['eppc4p10']=='ppc4p10a103'){echo('checked');}?>>
                         471 Comercio al por menor en establecimientos no especializados

                    </label>
                </div>
                        
                        <div class="radio">
                    <label>
<!--                        en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="ppc4p10" id="ppc4p10" onclick="colocaropcion('ppc4p10a104','valorppc4p10','ppc4p10div43');" value="ppc4p10a104" <?php if($carrayrespuestas['eppc4p10']=='ppc4p10a104'){echo('checked');}?>>
                         472 Comercio al por menor de alimentos (víveres en general), bebidas y tabaco, en establecimientos especializados

                    </label>
                </div>
                        
                        <div class="radio">
                    <label>
<!--                        en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="ppc4p10" id="ppc4p10" onclick="colocaropcion('ppc4p10a105','valorppc4p10','ppc4p10div43');" value="ppc4p10a105" <?php if($carrayrespuestas['eppc4p10']=='ppc4p10a105'){echo('checked');}?>>
                         473 Comercio al por menor de combustible, lubricantes, aditivos y productos de limpieza para automotores, en establecimientos especializados

                    </label>
                </div>
                        
                        <div class="radio">
                    <label>
<!--                        en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="ppc4p10" id="ppc4p10" onclick="colocaropcion('ppc4p10a106','valorppc4p10','ppc4p10div43');" value="ppc4p10a106" <?php if($carrayrespuestas['eppc4p10']=='ppc4p10a106'){echo('checked');}?>>
                         474 Comercio al por menor de equipos de informática y de comunicaciones, en establecimientos especializados

                    </label>
                </div>
                        
                        <div class="radio">
                    <label>
<!--                        en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="ppc4p10" id="ppc4p10" onclick="colocaropcion('ppc4p10a107','valorppc4p10','ppc4p10div43');" value="ppc4p10a107" <?php if($carrayrespuestas['eppc4p10']=='ppc4p10a107'){echo('checked');}?>>
                         475 Comercio al por menor de otros enseres domésticos en establecimientos especializados

                    </label>
                </div>
                        
                        <div class="radio">
                    <label>
<!--                        en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="ppc4p10" id="ppc4p10" onclick="colocaropcion('ppc4p10a108','valorppc4p10','ppc4p10div43');" value="ppc4p10a108" <?php if($carrayrespuestas['eppc4p10']=='ppc4p10a108'){echo('checked');}?>>
                         476 Comercio al por menor de artículos culturales y de entretenimiento, en establecimientos especializados

                    </label>
                </div>
                        
                        <div class="radio">
                    <label>
<!--                        en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="ppc4p10" id="ppc4p10" onclick="colocaropcion('ppc4p10a109','valorppc4p10','ppc4p10div43');" value="ppc4p10a109" <?php if($carrayrespuestas['eppc4p10']=='ppc4p10a109'){echo('checked');}?>>
                         477 Comercio al por menor de otros productos en establecimientos especializados

                    </label>
                </div>
                        
                        <div class="radio">
                    <label>
<!--                        en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="ppc4p10" id="ppc4p10" onclick="colocaropcion('ppc4p10a110','valorppc4p10','ppc4p10div43');" value="ppc4p10a110" <?php if($carrayrespuestas['eppc4p10']=='ppc4p10a110'){echo('checked');}?>>
                         478 Comercio al por menor en puestos de venta móviles

                    </label>
                </div>
                        
                        <div class="radio">
                    <label>
<!--                        en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="ppc4p10" id="ppc4p10" onclick="colocaropcion('ppc4p10a111','valorppc4p10','ppc4p10div43');" value="ppc4p10a111" <?php if($carrayrespuestas['eppc4p10']=='ppc4p10a111'){echo('checked');}?>>
                         479 Comercio al por menor no realizado en establecimientos, puestos de venta o mercados

                    </label>
                </div>
                        
                </div>
                    
                </div>
            </div>
        </div>

<div class="panel panel-success">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse49">49 Evacuación y tratamiento de aguas residuales</a>
                </h4>
            </div>
            <div id="collapse49" class="panel-collapse collapse">
                <div class="panel-body">
                   
                    
                    <div id="ppc4p10div44" class="has-error" onclick="validaracordeon()" name="ppc4p10div44" <?php if($carrayrespuestas['eppc4p10']==''){echo('class="form-group col-md-12 form-group-sm has-error"');}else{echo('class="form-group col-md-12 form-group-sm"');}?>>   

                <div class="radio">
                    <label>
<!--                        en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="ppc4p10" id="ppc4p10" onclick="colocaropcion('ppc4p10a112','valorppc4p10','ppc4p10div44');" value="ppc4p10a112" <?php if($carrayrespuestas['eppc4p10']=='ppc4p10a112'){echo('checked');}?>>
                         491 Transporte férreo

                    </label>
                </div>
                        
                        <div class="radio">
                    <label>
<!--                        en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="ppc4p10" id="ppc4p10" onclick="colocaropcion('ppc4p10a113','valorppc4p10','ppc4p10div44');" value="ppc4p10a113" <?php if($carrayrespuestas['eppc4p10']=='ppc4p10a113'){echo('checked');}?>>
                         492 Transporte terrestre público automotor

                    </label>
                </div>
                        
                        <div class="radio">
                    <label>
<!--                        en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="ppc4p10" id="ppc4p10" onclick="colocaropcion('ppc4p10a114','valorppc4p10','ppc4p10div44');" value="ppc4p10a114" <?php if($carrayrespuestas['eppc4p10']=='ppc4p10a114'){echo('checked');}?>>
                         493 Transporte por tuberías

                    </label>
                </div>
                        
                </div>
                    
                </div>
            </div>
        </div>

<div class="panel panel-success">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse50">50 Transporte acuático</a>
                </h4>
            </div>
            <div id="collapse50" class="panel-collapse collapse">
                <div class="panel-body">
                   
                    
                    <div id="ppc4p10div45" class="has-error" onclick="validaracordeon()" name="ppc4p10div45" <?php if($carrayrespuestas['eppc4p10']==''){echo('class="form-group col-md-12 form-group-sm has-error"');}else{echo('class="form-group col-md-12 form-group-sm"');}?>>   

                <div class="radio">
                    <label>
<!--                        en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="ppc4p10" id="ppc4p10" onclick="colocaropcion('ppc4p10a115','valorppc4p10','ppc4p10div45');" value="ppc4p10a115" <?php if($carrayrespuestas['eppc4p10']=='ppc4p10a115'){echo('checked');}?>>
                         50 Transporte acuático

                    </label>
                </div>
                        
                </div>
                    
                </div>
            </div>
        </div>

<div class="panel panel-success">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse51">51 Transporte aéreo</a>
                </h4>
            </div>
            <div id="collapse51" class="panel-collapse collapse">
                <div class="panel-body">
                   
                    
                    <div id="ppc4p10div46" class="has-error" onclick="validaracordeon()" name="ppc4p10div46" <?php if($carrayrespuestas['eppc4p10']==''){echo('class="form-group col-md-12 form-group-sm has-error"');}else{echo('class="form-group col-md-12 form-group-sm"');}?>>   

                <div class="radio">
                    <label>
<!--                        en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="ppc4p10" id="ppc4p10" onclick="colocaropcion('ppc4p10a116','valorppc4p10','ppc4p10div46');" value="ppc4p10a116" <?php if($carrayrespuestas['eppc4p10']=='ppc4p10a116'){echo('checked');}?>>
                         51 Transporte aéreo

                    </label>
                </div>
                        
                </div>
                    
                </div>
            </div>
        </div>

<div class="panel panel-success">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse52">52 Almacenamiento y actividades complementarias al transporte</a>
                </h4>
            </div>
            <div id="collapse52" class="panel-collapse collapse">
                <div class="panel-body">
                   
                    
                    <div id="ppc4p10div47" class="has-error" onclick="validaracordeon()" name="ppc4p10div47" <?php if($carrayrespuestas['eppc4p10']==''){echo('class="form-group col-md-12 form-group-sm has-error"');}else{echo('class="form-group col-md-12 form-group-sm"');}?>>   

                <div class="radio">
                    <label>
<!--                        en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="ppc4p10" id="ppc4p10" onclick="colocaropcion('ppc4p10a117','valorppc4p10','ppc4p10div47');" value="ppc4p10a117" <?php if($carrayrespuestas['eppc4p10']=='ppc4p10a117'){echo('checked');}?>>
                         521 Almacenamiento y depósito

                    </label>
                </div>
                        
                         <div class="radio">
                    <label>
<!--                        en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="ppc4p10" id="ppc4p10" onclick="colocaropcion('ppc4p10a118','valorppc4p10','ppc4p10div47');" value="ppc4p10a118" <?php if($carrayrespuestas['eppc4p10']=='ppc4p10a118'){echo('checked');}?>>
                         522 Actividades de las estaciones, vías y servicios complementarios para el transporte

                    </label>
                </div>
                        
                </div>
                    
                </div>
            </div>
        </div>

<div class="panel panel-success">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse53">53 Correo y servicios de mensajería</a>
                </h4>
            </div>
            <div id="collapse53" class="panel-collapse collapse">
                <div class="panel-body">
                   
                    
                    <div id="ppc4p10div48" class="has-error" onclick="validaracordeon()" name="ppc4p10div48" <?php if($carrayrespuestas['eppc4p10']==''){echo('class="form-group col-md-12 form-group-sm has-error"');}else{echo('class="form-group col-md-12 form-group-sm"');}?>>   

                <div class="radio">
                    <label>
<!--                        en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="ppc4p10" id="ppc4p10" onclick="colocaropcion('ppc4p10a119','valorppc4p10','ppc4p10div48');" value="ppc4p10a119" <?php if($carrayrespuestas['eppc4p10']=='ppc4p10a119'){echo('checked');}?>>
                        53 Correo y servicios de mensajería

                    </label>
                </div>
                        
                </div>
                    
                </div>
            </div>
        </div>

<div class="panel panel-success">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse55">55 Alojamiento</a>
                </h4>
            </div>
            <div id="collapse55" class="panel-collapse collapse">
                <div class="panel-body">
                   
                    
                    <div id="ppc4p10div49" class="has-error" onclick="validaracordeon()" name="ppc4p10div49" <?php if($carrayrespuestas['eppc4p10']==''){echo('class="form-group col-md-12 form-group-sm has-error"');}else{echo('class="form-group col-md-12 form-group-sm"');}?>>   

                <div class="radio">
                    <label>
<!--                        en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="ppc4p10" id="ppc4p10" onclick="colocaropcion('ppc4p10a120','valorppc4p10','ppc4p10div49');" value="ppc4p10a120" <?php if($carrayrespuestas['eppc4p10']=='ppc4p10a120'){echo('checked');}?>>
                         55 Alojamiento

                    </label>
                </div>
                        
                </div>
                    
                </div>
            </div>
        </div>

<div class="panel panel-success">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse56">56 Actividades de servicios de comidas y bebidaso</a>
                </h4>
            </div>
            <div id="collapse56" class="panel-collapse collapse">
                <div class="panel-body">
                   
                    
                    <div id="ppc4p10div50" class="has-error" onclick="validaracordeon()" name="ppc4p10div50" <?php if($carrayrespuestas['eppc4p10']==''){echo('class="form-group col-md-12 form-group-sm has-error"');}else{echo('class="form-group col-md-12 form-group-sm"');}?>>   

                <div class="radio">
                    <label>
<!--                        en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="ppc4p10" id="ppc4p10" onclick="colocaropcion('ppc4p10a121','valorppc4p10','ppc4p10div50');" value="ppc4p10a121" <?php if($carrayrespuestas['eppc4p10']=='ppc4p10a121'){echo('checked');}?>>
                         56 Actividades de servicios de comidas y bebidaso

                    </label>
                </div>
                        
                </div>
                    
                </div>
            </div>
        </div>



<div class="panel panel-success">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse58">58 Actividades de edición-comunicaciones</a>
                </h4>
            </div>
            <div id="collapse58" class="panel-collapse collapse">
                <div class="panel-body">
                   
                    
                    <div id="ppc4p10div51" class="has-error" onclick="validaracordeon()" name="ppc4p10div51" <?php if($carrayrespuestas['eppc4p10']==''){echo('class="form-group col-md-12 form-group-sm has-error"');}else{echo('class="form-group col-md-12 form-group-sm"');}?>>   

                <div class="radio">
                    <label>
<!--                        en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="ppc4p10" id="ppc4p10" onclick="colocaropcion('ppc4p10a122','valorppc4p10','ppc4p10div51');" value="ppc4p10a122" <?php if($carrayrespuestas['eppc4p10']=='ppc4p10a122'){echo('checked');}?>>
                         581 Edición de libros, publicaciones periódicas y otras actividades de edición

                    </label>
                </div>
                        
                         <div class="radio">
                    <label>
<!--                        en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="ppc4p10" id="ppc4p10" onclick="colocaropcion('ppc4p10a123','valorppc4p10','ppc4p10div51');" value="ppc4p10a123" <?php if($carrayrespuestas['eppc4p10']=='ppc4p10a123'){echo('checked');}?>>
                         582 Edición de programas de informática (software)

                    </label>
                </div>
                        
                </div>
                    
                </div>
            </div>
        </div>

<div class="panel panel-success">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse59">59 Actividades cinematográficas, de video y producción de programas de televisión, grabación de sonido y edición de música</a>
                </h4>
            </div>
            <div id="collapse59" class="panel-collapse collapse">
                <div class="panel-body">
                   
                    
                    <div id="ppc4p10div52" class="has-error" onclick="validaracordeon()" name="ppc4p10div52" <?php if($carrayrespuestas['eppc4p10']==''){echo('class="form-group col-md-12 form-group-sm has-error"');}else{echo('class="form-group col-md-12 form-group-sm"');}?>>   

                <div class="radio">
                    <label>
<!--                        en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="ppc4p10" id="ppc4p10" onclick="colocaropcion('ppc4p10a124','valorppc4p10','ppc4p10div52');" value="ppc4p10a124" <?php if($carrayrespuestas['eppc4p10']=='ppc4p10a124'){echo('checked');}?>>
                         59 Actividades cinematográficas, de video y producción de programas de televisión, grabación de sonido y edición de música

                    </label>
                </div>
                        
                </div>
                    
                </div>
            </div>
        </div>

<div class="panel panel-success">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse60">60 Actividades de programación, transmisión y/o difusión</a>
                </h4>
            </div>
            <div id="collapse60" class="panel-collapse collapse">
                <div class="panel-body">
                   
                    
                    <div id="ppc4p10div53" class="has-error" onclick="validaracordeon()" name="ppc4p10div53" <?php if($carrayrespuestas['eppc4p10']==''){echo('class="form-group col-md-12 form-group-sm has-error"');}else{echo('class="form-group col-md-12 form-group-sm"');}?>>   

                <div class="radio">
                    <label>
<!--                        en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="ppc4p10" id="ppc4p10" onclick="colocaropcion('ppc4p10a125','valorppc4p10','ppc4p10div53');" value="ppc4p10a125" <?php if($carrayrespuestas['eppc4p10']=='ppc4p10a125'){echo('checked');}?>>
                         601 Actividades de programación y transmisión en el servicio de radiodifusión sonora

                    </label>
                </div>
                        <div class="radio">
                    <label>
<!--                        en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="ppc4p10" id="ppc4p10" onclick="colocaropcion('ppc4p10a126','valorppc4p10','ppc4p10div53');" value="ppc4p10a126" <?php if($carrayrespuestas['eppc4p10']=='ppc4p10a126'){echo('checked');}?>>
                         602 Actividades de programación y transmisión de televisión

                    </label>
                </div>
                        
                </div>
                    
                </div>
            </div>
        </div>

<div class="panel panel-success">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse61">61 Telecomunicaciones</a>
                </h4>
            </div>
            <div id="collapse61" class="panel-collapse collapse">
                <div class="panel-body">
                   
                    
                    <div id="ppc4p10div54" class="has-error" onclick="validaracordeon()" name="ppc4p10div54" <?php if($carrayrespuestas['eppc4p10']==''){echo('class="form-group col-md-12 form-group-sm has-error"');}else{echo('class="form-group col-md-12 form-group-sm"');}?>>   

                <div class="radio">
                    <label>
<!--                        en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="ppc4p10" id="ppc4p10" onclick="colocaropcion('ppc4p10a127','valorppc4p10','ppc4p10div54');" value="ppc4p10a127" <?php if($carrayrespuestas['eppc4p10']=='ppc4p10a127'){echo('checked');}?>>
                         611 Actividades de telecomunicaciones alámbricas

                    </label>
                </div>
                        
                        
                         <div class="radio">
                    <label>
<!--                        en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="ppc4p10" id="ppc4p10" onclick="colocaropcion('ppc4p10a128','valorppc4p10','ppc4p10div54');" value="ppc4p10a128" <?php if($carrayrespuestas['eppc4p10']=='ppc4p10a128'){echo('checked');}?>>
                         612 Actividades de telecomunicaciones inalámbricas

                    </label>
                </div>
                        
                         <div class="radio">
                    <label>
<!--                        en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="ppc4p10" id="ppc4p10" onclick="colocaropcion('ppc4p10a129','valorppc4p10','ppc4p10div54');" value="ppc4p10a129" <?php if($carrayrespuestas['eppc4p10']=='ppc4p10a129'){echo('checked');}?>>
                         613 Actividades de telecomunicación satelital

                    </label>
                </div>
                        
                         <div class="radio">
                    <label>
<!--                        en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="ppc4p10" id="ppc4p10" onclick="colocaropcion('ppc4p10a130','valorppc4p10','ppc4p10div54');" value="ppc4p10a130" <?php if($carrayrespuestas['eppc4p10']=='ppc4p10a130'){echo('checked');}?>>
                         619 Otras actividades de telecomunicaciones

                    </label>
                </div>
                </div>
                    
                </div>
            </div>
        </div>

<div class="panel panel-success">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse62">62 Desarrollo de sistemas informáticos (planificación, análisis, diseño, programación, pruebas), consultoría informática y actividades relacionadas</a>
                </h4>
            </div>
            <div id="collapse62" class="panel-collapse collapse">
                <div class="panel-body">
                   
                    
                    <div id="ppc4p10div55" class="has-error" onclick="validaracordeon()" name="ppc4p10div55" <?php if($carrayrespuestas['eppc4p10']==''){echo('class="form-group col-md-12 form-group-sm has-error"');}else{echo('class="form-group col-md-12 form-group-sm"');}?>>   

                <div class="radio">
                    <label>
<!--                        en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="ppc4p10" id="ppc4p10" onclick="colocaropcion('ppc4p10a131','valorppc4p10','ppc4p10div55');" value="ppc4p10a131" <?php if($carrayrespuestas['eppc4p10']=='ppc4p10a131'){echo('checked');}?>>
                        62 Desarrollo de sistemas informáticos (planificación, análisis, diseño, programación, pruebas), consultoría informática y actividades relacionadas

                    </label>
                </div>
                        
                </div>
                    
                </div>
            </div>
        </div>

<div class="panel panel-success">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse63">63 Actividades de servicios de información</a>
                </h4>
            </div>
            <div id="collapse63" class="panel-collapse collapse">
                <div class="panel-body">
                   
                    
                    <div id="ppc4p10div56" class="has-error" onclick="validaracordeon()" name="ppc4p10div56" <?php if($carrayrespuestas['eppc4p10']==''){echo('class="form-group col-md-12 form-group-sm has-error"');}else{echo('class="form-group col-md-12 form-group-sm"');}?>>   

                <div class="radio">
                    <label>
<!--                        en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="ppc4p10" id="ppc4p10" onclick="colocaropcion('ppc4p10a132','valorppc4p10','ppc4p10div56');" value="ppc4p10a132" <?php if($carrayrespuestas['eppc4p10']=='ppc4p10a132'){echo('checked');}?>>
                         631 Procesamiento de datos, alojamiento (hosting) y actividades relacionadas; portales web

                    </label>
                </div>
                        
                         <div class="radio">
                    <label>
<!--                        en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="ppc4p10" id="ppc4p10" onclick="colocaropcion('ppc4p10a133','valorppc4p10','ppc4p10div56');" value="ppc4p10a133" <?php if($carrayrespuestas['eppc4p10']=='ppc4p10a133'){echo('checked');}?>>
                         639 Otras actividades de servicio de información

                    </label>
                </div>
                        
                </div>
                    
                </div>
            </div>
        </div>

<div class="panel panel-success">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse64">64 Actividades de servicios financieros, excepto las de seguros y de pensiones</a>
                </h4>
            </div>
            <div id="collapse64" class="panel-collapse collapse">
                <div class="panel-body">
                   
                    
                    <div id="ppc4p10div57" class="has-error" onclick="validaracordeon()" name="ppc4p10div57" <?php if($carrayrespuestas['eppc4p10']==''){echo('class="form-group col-md-12 form-group-sm has-error"');}else{echo('class="form-group col-md-12 form-group-sm"');}?>>   

                <div class="radio">
                    <label>
<!--                        en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="ppc4p10" id="ppc4p10" onclick="colocaropcion('ppc4p10a134','valorppc4p10','ppc4p10div57');" value="ppc4p10a134" <?php if($carrayrespuestas['eppc4p10']=='ppc4p10a134'){echo('checked');}?>>
                        64 Actividades de servicios financieros, excepto las de seguros y de pensiones

                    </label>
                </div>
                        
                </div>
                    
                </div>
            </div>
        </div>

<div class="panel panel-success">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse65">65 Seguros (incluso el reaseguro), seguros sociales y fondos de pensiones, excepto la seguridad social</a>
                </h4>
            </div>
            <div id="collapse65" class="panel-collapse collapse">
                <div class="panel-body">
                   
                    
                    <div id="ppc4p10div58" class="has-error" onclick="validaracordeon()" name="ppc4p10div58" <?php if($carrayrespuestas['eppc4p10']==''){echo('class="form-group col-md-12 form-group-sm has-error"');}else{echo('class="form-group col-md-12 form-group-sm"');}?>>   

                <div class="radio">
                    <label>
<!--                        en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="ppc4p10" id="ppc4p10" onclick="colocaropcion('ppc4p10a135','valorppc4p10','ppc4p10div58');" value="ppc4p10a135" <?php if($carrayrespuestas['eppc4p10']=='ppc4p10a135'){echo('checked');}?>>
                         651 Seguros y capitalización 

                    </label>
                </div>
                        
                        <div class="radio">
                    <label>
<!--                        en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="ppc4p10" id="ppc4p10" onclick="colocaropcion('ppc4p10a136','valorppc4p10','ppc4p10div58');" value="ppc4p10a136" <?php if($carrayrespuestas['eppc4p10']=='ppc4p10a136'){echo('checked');}?>>
                         652 Servicios de seguros sociales de salud y riesgos profesionales

                    </label>
                </div>
                        
                        <div class="radio">
                    <label>
<!--                        en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="ppc4p10" id="ppc4p10" onclick="colocaropcion('ppc4p10a137','valorppc4p10','ppc4p10div58');" value="ppc4p10a137" <?php if($carrayrespuestas['eppc4p10']=='ppc4p10a137'){echo('checked');}?>>
                         653 Servicios de seguros sociales de pensiones

                    </label>
                </div>
                        
                </div>
                    
                </div>
            </div>
        </div>

<div class="panel panel-success">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse66">66 Actividades auxiliares de las actividades de servicios financieros</a>
                </h4>
            </div>
            <div id="collapse66" class="panel-collapse collapse">
                <div class="panel-body">
                   
                    
                    <div id="ppc4p10div59" class="has-error" onclick="validaracordeon()" name="ppc4p10div59" <?php if($carrayrespuestas['eppc4p10']==''){echo('class="form-group col-md-12 form-group-sm has-error"');}else{echo('class="form-group col-md-12 form-group-sm"');}?>>   

                <div class="radio">
                    <label>
<!--                        en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="ppc4p10" id="ppc4p10" onclick="colocaropcion('ppc4p10a138','valorppc4p10','ppc4p10div59');" value="ppc4p10a138" <?php if($carrayrespuestas['eppc4p10']=='ppc4p10a138'){echo('checked');}?>>
                        66 Actividades auxiliares de las actividades de servicios financieros

                    </label>
                </div>
                        
                </div>
                    
                </div>
            </div>
        </div>

<div class="panel panel-success">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse68">68 Actividades inmobiliarias</a>
                </h4>
            </div>
            <div id="collapse68" class="panel-collapse collapse">
                <div class="panel-body">
                   
                    
                    <div id="ppc4p10div60" class="has-error" onclick="validaracordeon()" name="ppc4p10div60" <?php if($carrayrespuestas['eppc4p10']==''){echo('class="form-group col-md-12 form-group-sm has-error"');}else{echo('class="form-group col-md-12 form-group-sm"');}?>>   

                <div class="radio">
                    <label>
<!--                        en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="ppc4p10" id="ppc4p10" onclick="colocaropcion('ppc4p10a139','valorppc4p10','ppc4p10div60');" value="ppc4p10a139" <?php if($carrayrespuestas['eppc4p10']=='ppc4p10a139'){echo('checked');}?>>
                         68 Actividades inmobiliarias

                    </label>
                </div>
                        
                </div>
                    
                </div>
            </div>
        </div>

<div class="panel panel-success">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse69">69 Actividades jurídicas y de contabilidad</a>
                </h4>
            </div>
            <div id="collapse69" class="panel-collapse collapse">
                <div class="panel-body">
                   
                    
                    <div id="ppc4p10div61" class="has-error" onclick="validaracordeon()" name="ppc4p10div61" <?php if($carrayrespuestas['eppc4p10']==''){echo('class="form-group col-md-12 form-group-sm has-error"');}else{echo('class="form-group col-md-12 form-group-sm"');}?>>   

                <div class="radio">
                    <label>
<!--                        en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="ppc4p10" id="ppc4p10" onclick="colocaropcion('ppc4p10a140','valorppc4p10','ppc4p10div61');" value="ppc4p10a140" <?php if($carrayrespuestas['eppc4p10']=='ppc4p10a140'){echo('checked');}?>>
                         69 Actividades jurídicas y de contabilidad

                    </label>
                </div>
                        
                </div>
                    
                </div>
            </div>
        </div>

<div class="panel panel-success">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse70">70 Actividades de administración empresarial; actividades de consultoría de gestión</a>
                </h4>
            </div>
            <div id="collapse70" class="panel-collapse collapse">
                <div class="panel-body">
                   
                    
                    <div id="ppc4p10div62" class="has-error" onclick="validaracordeon()" name="ppc4p10div62" <?php if($carrayrespuestas['eppc4p10']==''){echo('class="form-group col-md-12 form-group-sm has-error"');}else{echo('class="form-group col-md-12 form-group-sm"');}?>>   

                <div class="radio">
                    <label>
<!--                        en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="ppc4p10" id="ppc4p10" onclick="colocaropcion('ppc4p10a141','valorppc4p10','ppc4p10div62');" value="ppc4p10a141" <?php if($carrayrespuestas['eppc4p10']=='ppc4p10a141'){echo('checked');}?>>
                         70 Actividades de administración empresarial; actividades de consultoría de gestión

                    </label>
                </div>
                        
                </div>
                    
                </div>
            </div>
        </div>

<div class="panel panel-success">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse71">71 Actividades de arquitectura e ingeniería; ensayos y análisis técnicos</a>
                </h4>
            </div>
            <div id="collapse71" class="panel-collapse collapse">
                <div class="panel-body">
                   
                    
                    <div id="ppc4p10div63" class="has-error" onclick="validaracordeon()" name="ppc4p10div63" <?php if($carrayrespuestas['eppc4p10']==''){echo('class="form-group col-md-12 form-group-sm has-error"');}else{echo('class="form-group col-md-12 form-group-sm"');}?>>   

                <div class="radio">
                    <label>
<!--                        en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="ppc4p10" id="ppc4p10" onclick="colocaropcion('ppc4p10a142','valorppc4p10','ppc4p10div63');" value="ppc4p10a142" <?php if($carrayrespuestas['eppc4p10']=='ppc4p10a142'){echo('checked');}?>>
                         71 Actividades de arquitectura e ingeniería; ensayos y análisis técnicos

                    </label>
                </div>
                        
                </div>
                    
                </div>
            </div>
        </div>

<div class="panel panel-success">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse72">72 Investigación científica y desarrollo</a>
                </h4>
            </div>
            <div id="collapse72" class="panel-collapse collapse">
                <div class="panel-body">
                   
                    
                    <div id="ppc4p10div64" class="has-error" onclick="validaracordeon()" name="ppc4p10div64" <?php if($carrayrespuestas['eppc4p10']==''){echo('class="form-group col-md-12 form-group-sm has-error"');}else{echo('class="form-group col-md-12 form-group-sm"');}?>>   

                <div class="radio">
                    <label>
<!--                        en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="ppc4p10" id="ppc4p10" onclick="colocaropcion('ppc4p10a143','valorppc4p10','ppc4p10div64');" value="ppc4p10a143" <?php if($carrayrespuestas['eppc4p10']=='ppc4p10a143'){echo('checked');}?>>
                         72 Investigación científica y desarrollo

                    </label>
                </div>
                        
                </div>
                    
                </div>
            </div>
        </div>

<div class="panel panel-success">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse73">73 Publicidad y estudios de mercado</a>
                </h4>
            </div>
            <div id="collapse73" class="panel-collapse collapse">
                <div class="panel-body">
                   
                    
                    <div id="ppc4p10div65" class="has-error" onclick="validaracordeon()" name="ppc4p10div65" <?php if($carrayrespuestas['eppc4p10']==''){echo('class="form-group col-md-12 form-group-sm has-error"');}else{echo('class="form-group col-md-12 form-group-sm"');}?>>   

                <div class="radio">
                    <label>
<!--                        en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="ppc4p10" id="ppc4p10" onclick="colocaropcion('ppc4p10a144','valorppc4p10','ppc4p10div65');" value="ppc4p10a144" <?php if($carrayrespuestas['eppc4p10']=='ppc4p10a144'){echo('checked');}?>>
                         73 Publicidad y estudios de mercado

                    </label>
                </div>
                        
                </div>
                    
                </div>
            </div>
        </div>

<div class="panel panel-success">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse74">74 Otras actividades profesionales, científicas y técnicas</a>
                </h4>
            </div>
            <div id="collapse74" class="panel-collapse collapse">
                <div class="panel-body">
                   
                    
                    <div id="ppc4p10div66" class="has-error" onclick="validaracordeon()" name="ppc4p10div66" <?php if($carrayrespuestas['eppc4p10']==''){echo('class="form-group col-md-12 form-group-sm has-error"');}else{echo('class="form-group col-md-12 form-group-sm"');}?>>   

                <div class="radio">
                    <label>
<!--                        en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="ppc4p10" id="ppc4p10" onclick="colocaropcion('ppc4p10a145','valorppc4p10','ppc4p10div66');" value="ppc4p10a145" <?php if($carrayrespuestas['eppc4p10']=='ppc4p10a145'){echo('checked');}?>>
                         741 Actividades especializadas de diseño 

                    </label>
                </div>
                        
                        <div class="radio">
                    <label>
<!--                        en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="ppc4p10" id="ppc4p10" onclick="colocaropcion('ppc4p10a146','valorppc4p10','ppc4p10div66');" value="ppc4p10a146" <?php if($carrayrespuestas['eppc4p10']=='ppc4p10a146'){echo('checked');}?>>
                         742 Actividades de fotografía

                    </label>
                </div>
                        
                        <div class="radio">
                    <label>
<!--                        en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="ppc4p10" id="ppc4p10" onclick="colocaropcion('ppc4p10a147','valorppc4p10','ppc4p10div66');" value="ppc4p10a147" <?php if($carrayrespuestas['eppc4p10']=='ppc4p10a147'){echo('checked');}?>>
                         749 Otras actividades profesionales, científicas y técnicas n.c.p.

                    </label>
                </div>
                        
                </div>
                    
                </div>
            </div>
        </div>

<div class="panel panel-success">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse75">75 Actividades veterinarias</a>
                </h4>
            </div>
            <div id="collapse75" class="panel-collapse collapse">
                <div class="panel-body">
                   
                    
                    <div id="ppc4p10div67" class="has-error" onclick="validaracordeon()" name="ppc4p10div67" <?php if($carrayrespuestas['eppc4p10']==''){echo('class="form-group col-md-12 form-group-sm has-error"');}else{echo('class="form-group col-md-12 form-group-sm"');}?>>   

                <div class="radio">
                    <label>
<!--                        en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="ppc4p10" id="ppc4p10" onclick="colocaropcion('ppc4p10a148','valorppc4p10','ppc4p10div67');" value="ppc4p10a148" <?php if($carrayrespuestas['eppc4p10']=='ppc4p10a148'){echo('checked');}?>>
                         75 Actividades veterinarias

                    </label>
                </div>
                        
                </div>
                    
                </div>
            </div>
        </div>

<div class="panel panel-success">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse77">77 Actividades de alquiler y arrendamiento</a>
                </h4>
            </div>
            <div id="collapse77" class="panel-collapse collapse">
                <div class="panel-body">
                   
                    
                    <div id="ppc4p10div68" class="has-error" onclick="validaracordeon()" name="ppc4p10div68" <?php if($carrayrespuestas['eppc4p10']==''){echo('class="form-group col-md-12 form-group-sm has-error"');}else{echo('class="form-group col-md-12 form-group-sm"');}?>>   

                <div class="radio">
                    <label>
<!--                        en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="ppc4p10" id="ppc4p10" onclick="colocaropcion('ppc4p10a149','valorppc4p10','ppc4p10div68');" value="ppc4p10a149" <?php if($carrayrespuestas['eppc4p10']=='ppc4p10a149'){echo('checked');}?>>
                         77 Actividades de alquiler y arrendamiento

                    </label>
                </div>
                        
                </div>
                    
                </div>
            </div>
        </div>

<div class="panel panel-success">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse78">78 Actividades de empleo-agencias</a>
                </h4>
            </div>
            <div id="collapse78" class="panel-collapse collapse">
                <div class="panel-body">
                   
                    
                    <div id="ppc4p10div69" class="has-error" onclick="validaracordeon()" name="ppc4p10div69" <?php if($carrayrespuestas['eppc4p10']==''){echo('class="form-group col-md-12 form-group-sm has-error"');}else{echo('class="form-group col-md-12 form-group-sm"');}?>>   

                <div class="radio">
                    <label>
<!--                        en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="ppc4p10" id="ppc4p10" onclick="colocaropcion('ppc4p10a150','valorppc4p10','ppc4p10div69');" value="ppc4p10a150" <?php if($carrayrespuestas['eppc4p10']=='ppc4p10a150'){echo('checked');}?>>
                         78 Actividades de empleo-agencias

                    </label>
                </div>
                        
                </div>
                    
                </div>
            </div>
        </div>

<div class="panel panel-success">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse79">79 Actividades de las agencias de viajes, operadores turísticos, servicios de reserva y actividades relacionadas</a>
                </h4>
            </div>
            <div id="collapse79" class="panel-collapse collapse">
                <div class="panel-body">
                   
                    
                    <div id="ppc4p10div70" class="has-error" onclick="validaracordeon()" name="ppc4p10div70" <?php if($carrayrespuestas['eppc4p10']==''){echo('class="form-group col-md-12 form-group-sm has-error"');}else{echo('class="form-group col-md-12 form-group-sm"');}?>>   

                <div class="radio">
                    <label>
<!--                        en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="ppc4p10" id="ppc4p10" onclick="colocaropcion('ppc4p10a151','valorppc4p10','ppc4p10div70');" value="ppc4p10a151" <?php if($carrayrespuestas['eppc4p10']=='ppc4p10a151'){echo('checked');}?>>
                         79 Actividades de las agencias de viajes, operadores turísticos, servicios de reserva y actividades relacionadas

                    </label>
                </div>
                        
                </div>
                    
                </div>
            </div>
        </div>

<div class="panel panel-success">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse80">80 Actividades de seguridad e investigación privada</a>
                </h4>
            </div>
            <div id="collapse80" class="panel-collapse collapse">
                <div class="panel-body">
                   
                    
                    <div id="ppc4p10div71" class="has-error" onclick="validaracordeon()" name="ppc4p10div71" <?php if($carrayrespuestas['eppc4p10']==''){echo('class="form-group col-md-12 form-group-sm has-error"');}else{echo('class="form-group col-md-12 form-group-sm"');}?>>   

                <div class="radio">
                    <label>
<!--                        en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="ppc4p10" id="ppc4p10" onclick="colocaropcion('ppc4p10a152','valorppc4p10','ppc4p10div71');" value="ppc4p10a152" <?php if($carrayrespuestas['eppc4p10']=='ppc4p10a152'){echo('checked');}?>>
                         80 Actividades de seguridad e investigación privada

                    </label>
                </div>
                        
                </div>
                    
                </div>
            </div>
        </div>

<div class="panel panel-success">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse81">81 Actividades de servicios a edificios y paisajismo (jardines, zonas verdes)</a>
                </h4>
            </div>
            <div id="collapse81" class="panel-collapse collapse">
                <div class="panel-body">
                   
                    
                    <div id="ppc4p10div72" class="has-error" onclick="validaracordeon()" name="ppc4p10div72" <?php if($carrayrespuestas['eppc4p10']==''){echo('class="form-group col-md-12 form-group-sm has-error"');}else{echo('class="form-group col-md-12 form-group-sm"');}?>>   

                <div class="radio">
                    <label>
<!--                        en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="ppc4p10" id="ppc4p10" onclick="colocaropcion('ppc4p10a153','valorppc4p10','ppc4p10div72');" value="ppc4p10a153" <?php if($carrayrespuestas['eppc4p10']=='ppc4p10a153'){echo('checked');}?>>
                         81 Actividades de servicios a edificios y paisajismo (jardines, zonas verdes)

                    </label>
                </div>
                        
                </div>
                    
                </div>
            </div>
        </div>

<div class="panel panel-success">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse82">82 Actividades administrativas y de apoyo de oficina y otras actividades de apoyo a las empresas</a>
                </h4>
            </div>
            <div id="collapse82" class="panel-collapse collapse">
                <div class="panel-body">
                   
                    
                    <div id="ppc4p10div73" class="has-error" onclick="validaracordeon()" name="ppc4p10div73" <?php if($carrayrespuestas['eppc4p10']==''){echo('class="form-group col-md-12 form-group-sm has-error"');}else{echo('class="form-group col-md-12 form-group-sm"');}?>>   

                <div class="radio">
                    <label>
<!--                        en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="ppc4p10" id="ppc4p10" onclick="colocaropcion('ppc4p10a154','valorppc4p10','ppc4p10div73');" value="ppc4p10a154" <?php if($carrayrespuestas['eppc4p10']=='ppc4p10a154'){echo('checked');}?>>
                         821 Actividades administrativas y de apoyo de oficina

                    </label>
                </div>
                        
                        <div class="radio">
                    <label>
<!--                        en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="ppc4p10" id="ppc4p10" onclick="colocaropcion('ppc4p10a155','valorppc4p10','ppc4p10div73');" value="ppc4p10a155" <?php if($carrayrespuestas['eppc4p10']=='ppc4p10a155'){echo('checked');}?>>
                         822 Actividades de centros de llamadas (Call center)

                    </label>
                </div>
                        
                        <div class="radio">
                    <label>
<!--                        en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="ppc4p10" id="ppc4p10" onclick="colocaropcion('ppc4p10a156','valorppc4p10','ppc4p10div73');" value="ppc4p10a156" <?php if($carrayrespuestas['eppc4p10']=='ppc4p10a156'){echo('checked');}?>>
                         823 Organización de convenciones y eventos comerciales

                    </label>
                </div>
                        
                        <div class="radio">
                    <label>
<!--                        en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="ppc4p10" id="ppc4p10" onclick="colocaropcion('ppc4p10a157','valorppc4p10','ppc4p10div73');" value="ppc4p10a157" <?php if($carrayrespuestas['eppc4p10']=='ppc4p10a157'){echo('checked');}?>>
                         829 Actividades de servicios de apoyo a las empresas n.c.p.

                    </label>
                </div>
                        
                </div>
                    
                </div>
            </div>
        </div>

<div class="panel panel-success">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse84">84 Administración pública y defensa; planes de seguridad social de afiliación obligatoria </a>
                </h4>
            </div>
            <div id="collapse84" class="panel-collapse collapse">
                <div class="panel-body">
                   
                    
                    <div id="ppc4p10div74" class="has-error" onclick="validaracordeon()" name="ppc4p10div74" <?php if($carrayrespuestas['eppc4p10']==''){echo('class="form-group col-md-12 form-group-sm has-error"');}else{echo('class="form-group col-md-12 form-group-sm"');}?>>   

                <div class="radio">
                    <label>
<!--                        en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="ppc4p10" id="ppc4p10" onclick="colocaropcion('ppc4p10a158','valorppc4p10','ppc4p10div74');" value="ppc4p10a158" <?php if($carrayrespuestas['eppc4p10']=='ppc4p10a158'){echo('checked');}?>>
                         841 Administración del Estado y aplicación de la política económica y social de la comunidad

                    </label>
                </div>
                        
                        
                         <div class="radio">
                    <label>
<!--                        en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="ppc4p10" id="ppc4p10" onclick="colocaropcion('ppc4p10a159','valorppc4p10','ppc4p10div74');" value="ppc4p10a159" <?php if($carrayrespuestas['eppc4p10']=='ppc4p10a159'){echo('checked');}?>>
                         842 Prestación de servicios a la comunidad en general

                    </label>
                </div>
                        
                         <div class="radio">
                    <label>
<!--                        en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="ppc4p10" id="ppc4p10" onclick="colocaropcion('ppc4p10a160','valorppc4p10','ppc4p10div74');" value="ppc4p10a160" <?php if($carrayrespuestas['eppc4p10']=='ppc4p10a160'){echo('checked');}?>>
                         843 Actividades de planes de seguridad social de afiliación obligatoria

                    </label>
                </div>
                </div>
                    
                </div>
            </div>
        </div>

<div class="panel panel-success">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse85">85 Educación</a>
                </h4>
            </div>
            <div id="collapse85" class="panel-collapse collapse">
                <div class="panel-body">
                   
                    
                    <div id="ppc4p10div75" class="has-error" onclick="validaracordeon()" name="ppc4p10div75" <?php if($carrayrespuestas['eppc4p10']==''){echo('class="form-group col-md-12 form-group-sm has-error"');}else{echo('class="form-group col-md-12 form-group-sm"');}?>>   

                <div class="radio">
                    <label>
<!--                        en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="ppc4p10" id="ppc4p10" onclick="colocaropcion('ppc4p10a161','valorppc4p10','ppc4p10div75');" value="ppc4p10a161" <?php if($carrayrespuestas['eppc4p10']=='ppc4p10a161'){echo('checked');}?>>
                        851 Educación de la primera infancia, preescolar y básica primaria

                    </label>
                </div>
                        
                        <div class="radio">
                    <label>
<!--                        en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="ppc4p10" id="ppc4p10" onclick="colocaropcion('ppc4p10a162','valorppc4p10','ppc4p10div75');" value="ppc4p10a162" <?php if($carrayrespuestas['eppc4p10']=='ppc4p10a162'){echo('checked');}?>>
                        852 Educación secundaria y de formación laboral

                    </label>
                </div>
                        
                        <div class="radio">
                    <label>
<!--                        en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="ppc4p10" id="ppc4p10" onclick="colocaropcion('ppc4p10a163','valorppc4p10','ppc4p10div75');" value="ppc4p10a163" <?php if($carrayrespuestas['eppc4p10']=='ppc4p10a163'){echo('checked');}?>>
                        853 Establecimientos que combinan diferentes niveles de educación 

                    </label>
                </div>
                        
                        <div class="radio">
                    <label>
<!--                        en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="ppc4p10" id="ppc4p10" onclick="colocaropcion('ppc4p10a164','valorppc4p10','ppc4p10div75');" value="ppc4p10a164" <?php if($carrayrespuestas['eppc4p10']=='ppc4p10a164'){echo('checked');}?>>
                        854 Educación superior

                    </label>
                </div>
                        
                        <div class="radio">
                    <label>
<!--                        en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="ppc4p10" id="ppc4p10" onclick="colocaropcion('ppc4p10a165','valorppc4p10','ppc4p10div75');" value="ppc4p10a165" <?php if($carrayrespuestas['eppc4p10']=='ppc4p10a165'){echo('checked');}?>>
                        855 Otros tipos de educación

                    </label>
                </div>
                        
                        <div class="radio">
                    <label>
<!--                        en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="ppc4p10" id="ppc4p10" onclick="colocaropcion('ppc4p10a166','valorppc4p10','ppc4p10div75');" value="ppc4p10a166" <?php if($carrayrespuestas['eppc4p10']=='ppc4p10a166'){echo('checked');}?>>
                        856 Actividades de apoyo a la educación

                    </label>
                </div>
                        
                </div>
                    
                </div>
            </div>
        </div>

<div class="panel panel-success">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse86">86 Actividades de atención de la salud humana</a>
                </h4>
            </div>
            <div id="collapse86" class="panel-collapse collapse">
                <div class="panel-body">
                   
                    
                    <div id="ppc4p10div76" class="has-error" onclick="validaracordeon()" name="ppc4p10div76" <?php if($carrayrespuestas['eppc4p10']==''){echo('class="form-group col-md-12 form-group-sm has-error"');}else{echo('class="form-group col-md-12 form-group-sm"');}?>>   

                <div class="radio">
                    <label>
<!--                        en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="ppc4p10" id="ppc4p10" onclick="colocaropcion('ppc4p10a167','valorppc4p10','ppc4p10div76');" value="ppc4p10a167" <?php if($carrayrespuestas['eppc4p10']=='ppc4p10a167'){echo('checked');}?>>
                        861 Actividades de hospitales y clínicas, con internación

                    </label>
                </div>
                        
                        <div class="radio">
                    <label>
<!--                        en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="ppc4p10" id="ppc4p10" onclick="colocaropcion('ppc4p10a168','valorppc4p10','ppc4p10div76');" value="ppc4p10a168" <?php if($carrayrespuestas['eppc4p10']=='ppc4p10a168'){echo('checked');}?>>
                        862 Actividades de práctica médica y odontológica, sin internación 

                    </label>
                </div>
                        
                        <div class="radio">
                    <label>
<!--                        en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="ppc4p10" id="ppc4p10" onclick="colocaropcion('ppc4p10a169','valorppc4p10','ppc4p10div76');" value="ppppc4p10a169c4p267" <?php if($carrayrespuestas['eppc4p10']=='ppc4p10a169'){echo('checked');}?>>
                        869 Otras actividades de atención relacionadas con la salud humana

                    </label>
                </div>
                        
                </div>
                    
                </div>
            </div>
        </div>

<div class="panel panel-success">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse87">87 Actividades de atención residencial medicalizada</a>
                </h4>
            </div>
            <div id="collapse87" class="panel-collapse collapse">
                <div class="panel-body">
                   
                    
                    <div id="ppc4p10div77" class="has-error" onclick="validaracordeon()" name="ppc4p10div77" <?php if($carrayrespuestas['eppc4p10']==''){echo('class="form-group col-md-12 form-group-sm has-error"');}else{echo('class="form-group col-md-12 form-group-sm"');}?>>   

                <div class="radio">
                    <label>
<!--                        en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="ppc4p10" id="ppc4p10" onclick="colocaropcion('ppc4p10a170','valorppc4p10','ppc4p10div77');" value="ppc4p10a170" <?php if($carrayrespuestas['eppc4p10']=='ppc4p10a170'){echo('checked');}?>>
                         871 Actividades de atención residencial medicalizada de tipo general

                    </label>
                </div>
                        
                        <div class="radio">
                    <label>
<!--                        en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="ppc4p10" id="ppc4p10" onclick="colocaropcion('ppc4p10a171','valorppc4p10','ppc4p10div77');" value="ppc4p10a171" <?php if($carrayrespuestas['eppc4p10']=='ppc4p10a171'){echo('checked');}?>>
                         872 Actividades de atención residencial, para el cuidado de pacientes con retardo mental, enfermedad mental y consumo de sustancias psicoactivas

                    </label>
                </div>
                        
                        <div class="radio">
                    <label>
<!--                        en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="ppc4p10" id="ppc4p10" onclick="colocaropcion('ppc4p10a172','valorppc4p10','ppc4p10div77');" value="ppc4p10a172" <?php if($carrayrespuestas['eppc4p10']=='ppc4p10a172'){echo('checked');}?>>
                         873 Actividades de atención en instituciones para el cuidado de personas mayores y/o discapacitadas

                    </label>
                </div>
                        
                        <div class="radio">
                    <label>
<!--                        en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="ppc4p10" id="ppc4p10" onclick="colocaropcion('ppc4p10a173','valorppc4p10','ppc4p10div77');" value="ppc4p10a173" <?php if($carrayrespuestas['eppc4p10']=='ppc4p10a173'){echo('checked');}?>>
                         879 Otras actividades de atención en instituciones con alojamiento

                    </label>
                </div>
                        
                </div>
                    
                </div>
            </div>
        </div>

<div class="panel panel-success">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse88">88 Actividades de asistencia social sin alojamiento</a>
                </h4>
            </div>
            <div id="collapse88" class="panel-collapse collapse">
                <div class="panel-body">
                   
                    
                    <div id="ppc4p10div78" class="has-error" onclick="validaracordeon()" name="ppc4p10div78" <?php if($carrayrespuestas['eppc4p10']==''){echo('class="form-group col-md-12 form-group-sm has-error"');}else{echo('class="form-group col-md-12 form-group-sm"');}?>>   

                <div class="radio">
                    <label>
<!--                        en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="ppc4p10" id="ppc4p10" onclick="colocaropcion('ppc4p10a174','valorppc4p10','ppc4p10div78');" value="ppc4p10a174" <?php if($carrayrespuestas['eppc4p10']=='ppc4p10a174'){echo('checked');}?>>
                         881 Actividades de asistencia social sin alojamiento para personas mayores y discapacitadas

                    </label>
                </div>
                        
                        <div class="radio">
                    <label>
<!--                        en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="ppc4p10" id="ppc4p10" onclick="colocaropcion('ppc4p10a175','valorppc4p10','ppc4p10div78');" value="ppc4p10a175" <?php if($carrayrespuestas['eppc4p10']=='ppc4p10a175'){echo('checked');}?>>
                         889 Otras actividades de asistencia social sin alojamiento

                    </label>
                </div>
                        
                </div>
                    
                </div>
            </div>
        </div>

<div class="panel panel-success">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse90">90 Actividades creativas, artísticas y de entretenimiento</a>
                </h4>
            </div>
            <div id="collapse90" class="panel-collapse collapse">
                <div class="panel-body">
                   
                    
                    <div id="ppc4p10div79" class="has-error" onclick="validaracordeon()" name="ppc4p10div79" <?php if($carrayrespuestas['eppc4p10']==''){echo('class="form-group col-md-12 form-group-sm has-error"');}else{echo('class="form-group col-md-12 form-group-sm"');}?>>   

                <div class="radio">
                    <label>
<!--                        en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="ppc4p10" id="ppc4p10" onclick="colocaropcion('ppc4p10a176','valorppc4p10','ppc4p10div79');" value="ppc4p10a176" <?php if($carrayrespuestas['eppc4p10']=='ppc4p10a176'){echo('checked');}?>>
                         90 Actividades creativas, artísticas y de entretenimiento

                    </label>
                </div>
                        
                </div>
                    
                </div>
            </div>
        </div>

<div class="panel panel-success">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse91">91 Actividades de bibliotecas, archivos, museos y otras actividades culturales</a>
                </h4>
            </div>
            <div id="collapse91" class="panel-collapse collapse">
                <div class="panel-body">
                   
                    
                    <div id="ppc4p10div80" class="has-error" onclick="validaracordeon()" name="ppc4p10div80" <?php if($carrayrespuestas['eppc4p10']==''){echo('class="form-group col-md-12 form-group-sm has-error"');}else{echo('class="form-group col-md-12 form-group-sm"');}?>>   

                <div class="radio">
                    <label>
<!--                        en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="ppc4p10" id="ppc4p10" onclick="colocaropcion('ppc4p10a177','valorppc4p10','ppc4p10div80');" value="ppc4p10a177" <?php if($carrayrespuestas['eppc4p10']=='ppc4p10a177'){echo('checked');}?>>
                        91 Actividades de bibliotecas, archivos, museos y otras actividades culturales  

                    </label>
                </div>
                        
                </div>
                    
                </div>
            </div>
        </div>

<div class="panel panel-success">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse92">92 Actividades de juegos de azar y apuestas</a>
                </h4>
            </div>
            <div id="collapse92" class="panel-collapse collapse">
                <div class="panel-body">
                   
                    
                    <div id="ppc4p10div81" class="has-error" onclick="validaracordeon()" name="ppc4p10div81" <?php if($carrayrespuestas['eppc4p10']==''){echo('class="form-group col-md-12 form-group-sm has-error"');}else{echo('class="form-group col-md-12 form-group-sm"');}?>>   

                <div class="radio">
                    <label>
<!--                        en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="ppc4p10" id="ppc4p10" onclick="colocaropcion('ppc4p10a178','valorppc4p10','ppc4p10div81');" value="ppc4p10a178" <?php if($carrayrespuestas['eppc4p10']=='ppc4p10a178'){echo('checked');}?>>
                         92 Actividades de juegos de azar y apuestas

                    </label>
                </div>
                        
                </div>
                    
                </div>
            </div>
        </div>

<div class="panel panel-success">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse93">93 Actividades deportivas y actividades recreativas y de esparcimiento</a>
                </h4>
            </div>
            <div id="collapse93" class="panel-collapse collapse">
                <div class="panel-body">
                   
                    
                    <div id="ppc4p10div82" class="has-error" onclick="validaracordeon()" name="ppc4p10div82" <?php if($carrayrespuestas['eppc4p10']==''){echo('class="form-group col-md-12 form-group-sm has-error"');}else{echo('class="form-group col-md-12 form-group-sm"');}?>>   

                <div class="radio">
                    <label>
<!--                        en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="ppc4p10" id="ppc4p10" onclick="colocaropcion('ppc4p10a179','valorppc4p10','ppc4p10div82');" value="ppc4p10a179" <?php if($carrayrespuestas['eppc4p10']=='ppc4p10a179'){echo('checked');}?>>
                         93 Actividades deportivas y actividades recreativas y de esparcimiento

                    </label>
                </div>
                        
                </div>
                    
                </div>
            </div>
        </div>

<div class="panel panel-success">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse94">94 Actividades de asociaciones</a>
                </h4>
            </div>
            <div id="collapse94" class="panel-collapse collapse">
                <div class="panel-body">
                   
                    
                    <div id="ppc4p10div83" class="has-error" onclick="validaracordeon()" name="ppc4p10div83" <?php if($carrayrespuestas['eppc4p10']==''){echo('class="form-group col-md-12 form-group-sm has-error"');}else{echo('class="form-group col-md-12 form-group-sm"');}?>>   

                <div class="radio">
                    <label>
<!--                        en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="ppc4p10" id="ppc4p10" onclick="colocaropcion('ppc4p10a180','valorppc4p10','ppc4p10div83');" value="ppc4p10a180" <?php if($carrayrespuestas['eppc4p10']=='ppc4p10a180'){echo('checked');}?>>
                         941 Actividades de asociaciones empresariales y de empleadores.

                    </label>
                </div>
                        
                        
                <div class="radio">
                    <label>
<!--                        en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="ppc4p10" id="ppc4p10" onclick="colocaropcion('ppc4p10a181','valorppc4p10','ppc4p10div83');" value="ppc4p10a181" <?php if($carrayrespuestas['eppc4p10']=='ppc4p10a181'){echo('checked');}?>>
                         942 Actividades de sindicatos de empleados.
                    </label>
                </div>
                        
                        
                <div class="radio">
                    <label>
<!--                        en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="ppc4p10" id="ppc4p10" onclick="colocaropcion('ppc4p10a182','valorppc4p10','ppc4p10div83');" value="ppc4p10a182" <?php if($carrayrespuestas['eppc4p10']=='ppc4p10a182'){echo('checked');}?>>
                         949 Actividades de otras asociaciones 

                    </label>
                </div>
                        
                </div>
                    
                </div>
            </div>
        </div>

<div class="panel panel-success">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse95">95 Mantenimiento y reparación de computadores, efectos personales y enseres domésticos</a>
                </h4>
            </div>
            <div id="collapse95" class="panel-collapse collapse">
                <div class="panel-body">
                   
                    
                    <div id="ppc4p10div84" class="has-error" onclick="validaracordeon()" name="ppc4p10div84" <?php if($carrayrespuestas['eppc4p10']==''){echo('class="form-group col-md-12 form-group-sm has-error"');}else{echo('class="form-group col-md-12 form-group-sm"');}?>>   

                <div class="radio">
                    <label>
<!--                        en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="ppc4p10" id="ppc4p10" onclick="colocaropcion('ppc4p10a183','valorppc4p10','ppc4p10div84');" value="ppc4p10a183" <?php if($carrayrespuestas['eppc4p10']=='ppc4p10a183'){echo('checked');}?>>
                         95 Mantenimiento y reparación de computadores, efectos personales y enseres domésticos

                    </label>
                </div>
                        
                </div>
                    
                </div>
            </div>
        </div>

<div class="panel panel-success">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse96">96 Reparación de calzado y artículos de cuero</a>
                </h4>
            </div>
            <div id="collapse96" class="panel-collapse collapse">
                <div class="panel-body">
                   
                    
                    <div id="ppc4p10div85" class="has-error" onclick="validaracordeon()" name="ppc4p10div85" <?php if($carrayrespuestas['eppc4p10']==''){echo('class="form-group col-md-12 form-group-sm has-error"');}else{echo('class="form-group col-md-12 form-group-sm"');}?>>   

                <div class="radio">
                    <label>
<!--                        en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="ppc4p10" id="ppc4p10" onclick="colocaropcion('ppc4p10a184','valorppc4p10','ppc4p10div85');" value="ppc4p10a184" <?php if($carrayrespuestas['eppc4p10']=='ppc4p10a184'){echo('checked');}?>>
                        96 Reparación de calzado y artículos de cuero

                    </label>
                </div>
                        
                </div>
                    
                </div>
            </div>
        </div>

<div class="panel panel-success">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse97">97 Actividades de los hogares individuales como empleadores de personal doméstico</a>
                </h4>
            </div>
            <div id="collapse97" class="panel-collapse collapse">
                <div class="panel-body">
                   
                    
                    <div id="ppc4p10div86" class="has-error" onclick="validaracordeon()" name="ppc4p10div86" <?php if($carrayrespuestas['eppc4p10']==''){echo('class="form-group col-md-12 form-group-sm has-error"');}else{echo('class="form-group col-md-12 form-group-sm"');}?>>   

                <div class="radio">
                    <label>
<!--                        en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="ppc4p10" id="ppc4p10" onclick="colocaropcion('ppc4p10a185','valorppc4p10','ppc4p10div86');" value="ppc4p10a185" <?php if($carrayrespuestas['eppc4p10']=='ppc4p10a185'){echo('checked');}?>>
                         97 Actividades de los hogares individuales como empleadores de personal doméstico

                    </label>
                </div>
                        
                </div>
                    
                </div>
            </div>
        </div>

<div class="panel panel-success">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse98">98 Actividades no diferenciadas de los hogares individuales como productores de bienes y servicios para uso propio</a>
                </h4>
            </div>
            <div id="collapse98" class="panel-collapse collapse">
                <div class="panel-body">
                   
                    
                    <div id="ppc4p10div87" class="has-error" onclick="validaracordeon()" name="ppc4p10div87" <?php if($carrayrespuestas['eppc4p10']==''){echo('class="form-group col-md-12 form-group-sm has-error"');}else{echo('class="form-group col-md-12 form-group-sm"');}?>>   

                <div class="radio">
                    <label>
<!--                        en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="ppc4p10" id="ppc4p10" onclick="colocaropcion('ppc4p10a186','valorppc4p10','ppc4p10div87');" value="ppc4p10a186" <?php if($carrayrespuestas['eppc4p10']=='ppc4p10a186'){echo('checked');}?>>
                         98 Actividades no diferenciadas de los hogares individuales como productores de bienes y servicios para uso propio

                    </label>
                </div>
                        
                </div>
                    
                </div>
            </div>
        </div>

<div class="panel panel-success">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse99">99 Actividades de organizaciones y entidades extraterritoriales</a>
                </h4>
            </div>
            <div id="collapse99" class="panel-collapse collapse">
                <div class="panel-body">
                   
                    
                    <div id="ppc4p10div88" class="has-error" onclick="validaracordeon()" name="ppc4p10div88" <?php if($carrayrespuestas['eppc4p10']==''){echo('class="form-group col-md-12 form-group-sm has-error"');}else{echo('class="form-group col-md-12 form-group-sm"');}?>>   

                <div class="radio">
                    <label>
<!--                        en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="ppc4p10" id="ppc4p10" onclick="colocaropcion('ppc4p10a187','valorppc4p10','ppc4p10div88');" value="ppc4p10a187" <?php if($carrayrespuestas['eppc4p10']=='ppc4p10a187'){echo('checked');}?>>
                         99 Actividades de organizaciones y entidades extraterritoriales

                    </label>
                </div>
                        
                </div>
                    
                </div>
            </div>
        </div>

<!--FIN DE LA PESTAÑA PROCESAMIENTO, FABRICACIÓN Y ENSAMBLE DEL ACORDEON ....  -->
        
                 
    </div>
</div>

               
            </div> 
            
            
                 
                 <!--inicio radio una sola seleccion-->
            
<!--            
            <div class="row">
            <div id="ppc4p10iv" name="ppc4p10iv" <?php if($carrayrespuestas['eppc4p10']==''){echo('class="form-group col-md-12 form-group-sm has-error"');}else{echo('class="form-group col-md-12 form-group-sm"');}?>>   
                <label class="control-label">7. Parentesco con la persona jefe del Hogar
                    <button type="button" id="vayuda" name="vayuda" class="btn btn-success btn-xs" data-toggle="modal" data-target="#myModal">
                        <span class="glyphicon glyphicon-question-sign" aria-hidden="true"></span> Ayuda
                    </button>
                </label>
                <div class="radio">
                    <label>en este caso se manda a la fincion javascript el valor del campo
                        <input type="radio" name="ppc4p10" id="ppc4p10" onclick="colocaropcion('1','valorppc4p10','ppc4p10iv');" value="1" <?php if($carrayrespuestas['eppc4p10']=='1'){echo('checked');}?>>
                        PRIMERA CLASE
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="ppc4p10" id="ppc4p10" onclick="colocaropcion('2','valorppc4p10','ppc4p10iv');" value="2" <?php if($carrayrespuestas['eppc4p10']=='2'){echo('checked');}?>>
                        SEGUNDA CLASE
                    </label>             
                </div> 
                
                        
                <input type="text" class="form-control" id="valorppc4p10" name="valorppc4p10" style="display:none" placeholder="Text input" value="<?php echo($carrayrespuestas['eppc4p10']); ?>">
            </div>
            </div> -->
            <!--fin radio una sola seleccion-->
            
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
            <?php if($carrayrespuestas['eppc4p10']=="")
            {
                echo($botonerag);
            }
            else
            {
                echo($botoneraa);
            }?>   
          <!-- Fin botonera guardar y actualizar-->

        
    
    <!--Inicio Este es el footer NO TOCAR-->
    <?php echo($foot); ?>
    <!--fin del footer NO TOCAR-->
    </form>
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
                                 vvalorppc4p10: $('#valorppc4p10').val()},    
                          dataType: "html",
                          success : function(obj){                      
                          botonguardar();
                          },
                          error: function (jqXHR, ajaxOptions, thrownError) {terminasinco();
                                    if (jqXHR.status === 0) {
                                        mensajito ('Error al sincronizar!!!','Sin Conexion a internet, por favor verifca tu conexion a internet y vuelve a intentar. [0]');
                                    } else if (jqXHR.status == 404) {
                                        mensajito ('Error al sincronizar!!!','Sin Conexion a internet, por favor verifca tu conexion a internet y vuelve a intentar. [404]');
                                    } else if (jqXHR.status == 500) {
                                        mensajito ('Error al sincronizar!!!','Sin Conexion a internet, por favor verifca tu conexion a internet y vuelve a intentar. [500].');
                                    } else {
                                        mensajito ('Error interno!!!','Comuniquese con el analista en sede');
                                    }

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
                                 vvalorppc4p10: $('#valorppc4p10').val()},       
                          dataType: "html",
                          success : function(obj){                      
                          botonguardar();
                          },
                          error: function (jqXHR, ajaxOptions, thrownError) {terminasinco();
                                    if (jqXHR.status === 0) {
                                        mensajito ('Error al sincronizar!!!','Sin Conexion a internet, por favor verifca tu conexion a internet y vuelve a intentar. [0]');
                                    } else if (jqXHR.status == 404) {
                                        mensajito ('Error al sincronizar!!!','Sin Conexion a internet, por favor verifca tu conexion a internet y vuelve a intentar. [404]');
                                    } else if (jqXHR.status == 500) {
                                        mensajito ('Error al sincronizar!!!','Sin Conexion a internet, por favor verifca tu conexion a internet y vuelve a intentar. [500].');
                                    } else {
                                        mensajito ('Error interno!!!','Comuniquese con el analista en sede');
                                    }

                              }
                        });                    
        });
        

        $("#siguiente").click(function ()
        {
         botonsiguiente();
         location.href = "../c_ppc4p11/fc_ppc4p11?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    

        });
              
        $("#anterior").click(function ()
        {
         botonanterior();
         if($('#valorppc4p1').val() =='ppc4p1o1' || $('#valorppc4p1').val() =='ppc4p1o2')
         {
          location.href = "../c_ppc4p1/fc_ppc4p1?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";   
         }
         else if ($('#valorppc4p1').val() =='ppc4p1o3')
         {
            location.href = "../c_ppc4p9/fc_ppc4p9?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";    
         }
         else
         {
              location.href = "../c_ppc4p9/fc_ppc4p9?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";    
         }
        //location.href = "../c_capitulosintegrantes/fc_capitulosintegrantes?idintegrante=" + $('#idintegrante').val()+ "&idintegrante="+"&idintegrante=0";                    
        });

//para cargar variables capitulo, pregunta,encuestador,vivienda,barra
cargardatosgenerales('<?php echo($arraydatosgenerales['ecapitulo']); ?>','Pregunta 10 de 13','<?php echo($arraydatosgenerales['enomcoges']); ?>','<?php echo($arraydatosgenerales['enombreintegrante']." "." - "." "."Sexo:"." ".$arraydatosgenerales['esexointegrante']."   "."  -  "."   "."Edad:"."   ".$arraydatosgenerales['eedadintegrante']); ?>','60');
//control del boton ayuda
botonayuda();

});




//esta funcion nos valida todos los radio butons que hay en el acordeon
function validaracordeon()
{
    if($('#ppc4p10div').val() === '')
    {
        $('#ppc4p10div2').removeClass('has-error');
        $('#ppc4p10div3').removeClass('has-error');
        $('#ppc4p10div4').removeClass('has-error');
        $('#ppc4p10div5').removeClass('has-error');
        $('#ppc4p10div6').removeClass('has-error');
        $('#ppc4p10div7').removeClass('has-error');
        $('#ppc4p10div8').removeClass('has-error');
        $('#ppc4p10div9').removeClass('has-error');
        $('#ppc4p10div10').removeClass('has-error');
        $('#ppc4p10div11').removeClass('has-error');
        $('#ppc4p10div12').removeClass('has-error');
        $('#ppc4p10div13').removeClass('has-error');
        $('#ppc4p10div14').removeClass('has-error');
        $('#ppc4p10div15').removeClass('has-error');
        $('#ppc4p10div16').removeClass('has-error');
        $('#ppc4p10div17').removeClass('has-error');
        $('#ppc4p10div18').removeClass('has-error');
        $('#ppc4p10div19').removeClass('has-error');
        $('#ppc4p10div20').removeClass('has-error');
        $('#ppc4p10div21').removeClass('has-error');
        $('#ppc4p10div22').removeClass('has-error');
        $('#ppc4p10div23').removeClass('has-error');
        $('#ppc4p10div24').removeClass('has-error');
        $('#ppc4p10div25').removeClass('has-error');
        $('#ppc4p10div26').removeClass('has-error');
        $('#ppc4p10div27').removeClass('has-error');
        $('#ppc4p10div28').removeClass('has-error');
        $('#ppc4p10div29').removeClass('has-error');
        $('#ppc4p10div30').removeClass('has-error');
        $('#ppc4p10div31').removeClass('has-error');
        $('#ppc4p10div32').removeClass('has-error');
        $('#ppc4p10div33').removeClass('has-error');
        $('#ppc4p10div34').removeClass('has-error');
        $('#ppc4p10div35').removeClass('has-error');
        $('#ppc4p10div36').removeClass('has-error');
        $('#ppc4p10div37').removeClass('has-error');
        $('#ppc4p10div38').removeClass('has-error');
        $('#ppc4p10div39').removeClass('has-error');
        $('#ppc4p10div40').removeClass('has-error');
        $('#ppc4p10div41').removeClass('has-error');
        $('#ppc4p10div42').removeClass('has-error');
        $('#ppc4p10div43').removeClass('has-error');
        $('#ppc4p10div44').removeClass('has-error');
        $('#ppc4p10div45').removeClass('has-error');
        $('#ppc4p10div46').removeClass('has-error');
        $('#ppc4p10div47').removeClass('has-error');
        $('#ppc4p10div48').removeClass('has-error');
        $('#ppc4p10div49').removeClass('has-error');
        $('#ppc4p10div50').removeClass('has-error');
        $('#ppc4p10div51').removeClass('has-error');
        $('#ppc4p10div52').removeClass('has-error');
        $('#ppc4p10div53').removeClass('has-error');
        $('#ppc4p10div54').removeClass('has-error');
        $('#ppc4p10div55').removeClass('has-error');
        $('#ppc4p10div56').removeClass('has-error');
        $('#ppc4p10div57').removeClass('has-error');
        $('#ppc4p10div58').removeClass('has-error');
        $('#ppc4p10div59').removeClass('has-error');
        $('#ppc4p10div60').removeClass('has-error');
        $('#ppc4p10div61').removeClass('has-error');
        $('#ppc4p10div62').removeClass('has-error');
        $('#ppc4p10div63').removeClass('has-error');
        $('#ppc4p10div64').removeClass('has-error');
        $('#ppc4p10div65').removeClass('has-error');
        $('#ppc4p10div66').removeClass('has-error');
        $('#ppc4p10div67').removeClass('has-error');
        $('#ppc4p10div68').removeClass('has-error');
        $('#ppc4p10div69').removeClass('has-error');
        $('#ppc4p10div70').removeClass('has-error');
        $('#ppc4p10div71').removeClass('has-error');
        $('#ppc4p10div72').removeClass('has-error');
        $('#ppc4p10div73').removeClass('has-error');
        $('#ppc4p10div74').removeClass('has-error');
        $('#ppc4p10div75').removeClass('has-error');
        $('#ppc4p10div76').removeClass('has-error');
        $('#ppc4p10div77').removeClass('has-error');
        $('#ppc4p10div78').removeClass('has-error');
        $('#ppc4p10div79').removeClass('has-error');
        $('#ppc4p10div80').removeClass('has-error');
        $('#ppc4p10div81').removeClass('has-error');
        $('#ppc4p10div82').removeClass('has-error');
        $('#ppc4p10div83').removeClass('has-error');
        $('#ppc4p10div84').removeClass('has-error');
        $('#ppc4p10div85').removeClass('has-error');
        $('#ppc4p10div86').removeClass('has-error');
        $('#ppc4p10div87').removeClass('has-error');
        $('#ppc4p10div88').removeClass('has-error');
    }
    
    else($('#ppc4p10div').val() !== '')
    {
        $('#ppc4p10div').removeClass('has-error');
        
    }
        
       
      
        
}
//fin de la funcion


</script>
</html>