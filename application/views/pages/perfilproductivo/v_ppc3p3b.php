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
        <!--fin para imprimir el idintegrante y llevarlo-->
<hr>
        <form class="form-group" name="formulario" id="formulario">

           <div class="row">
               
               <div>
                   <label>3.2  EXPERIENCIAS LABORALES: Referencie los últimos 3 empleos de más relevancia según su expectativa laboral (desde el más reciente al más antiguo). </label><br><br>
               </div>
            
               <div class="col-md-offset-1">
              <button class="btn btn-success " type="button" id="agregar" data-target="#myModal" data-toggle="modal" name="agregar"><span class="glyphicon glyphicon-circle-arrow-up"></span> Agregar empleo</button> 
               </div><br><br>
               
               <!--                                modal-->




<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content ">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Experiencia laboral</h4>
      </div>
      <div class="modal-body">
                          
                                                                  
                                <div class="row">
                                    <div id="divnombreempresa"  name="divnombreempresa"  class="has-error col-md-12">
                                        <label  class=" control-label">Empresa</label>
                                        <input type="text" class="form-control text-uppercase" required id="empresa" onkeypress="return soloLetras(event)" name="empresa"  value=""  onchange="validarbolitasytexto('divnombreempresa','empresa')">
                                    </div>
                                </div><br>
          
                                <div class="row"> 

                                    <div  id="divtelempresa" class="has-error col-md-12">
                                        <label  class="control-label">Tel empresa</label>
                                        <input type="text" class="form-control text-uppercase" onkeypress="return soloNumeros(event)"  id="telempresa" name="telempresa" value="" onchange="validarbolitasytexto('divtelempresa','telempresa')">
                                    </div>
                                    
                                </div><br>
                        
                                <div class="row">
                            
                                    <div id="divcargo" class="has-error col-md-12">
                                        <label  class=" control-label">Cargo</label>
                                        <input type="text" class="form-control text-uppercase"  id="cargo" onkeypress="return soloLetras(event)" name="cargo" value="" onchange="validarbolitasytexto('divcargo','cargo')" >
                                    </div>
                                </div><br>
                            
                                <div class="row">
                                    <div id="divfechai" class="has-error col-md-6">
                                        <label  class=" control-label">Fecha inicio</label>
                                        <input type="date" class="form-control text-uppercase"  id="fechai" name="fechai" onblur="fechas()" value="" onchange="validarbolitasytexto('divfechai','fechai')"  >
                                    </div>
                            
                                    <div id="divfechaf" class="has-error col-md-6">
                                        <label  class=" control-label">Fecha Terminacion</label>
                                        <input type="date" class="form-control text-uppercase"  id="fechaf" name="fechaf" onblur="fechas()" value="" onchange="validarbolitasytexto('divfechaf','fechaf')"  >
                                    </div>
                                   
                                    
                                </div>
                                
                                
                                 <div id="actual" class="row col-md-offset-0"  >
                                    
                                        <div class="checkbox">
                                        <label> <!--en este caso se manda a la fincion javascript el nombre del campo-->
                                            <input type="checkbox" name="check1" id="check1" onclick="check();">
                                        Actualmente
                                        </label>
                                    </div>
                                 </div>
                                
                                <div class="row">
                            
                                     <div  id="divciudad" class="has-error col-md-12">
                                        <label  class=" control-label">Ciudad</label>
                                        <input type="text" class="form-control text-uppercase"  id="ciudad" name="ciudad" onkeypress="return soloLetras(event)" value="" onchange="validarbolitasytexto('divciudad','ciudad')"  >
                                     </div>
                                    
                                    
                                    
                                </div><br><br>
                                
<!--                                FIN DE LOS CAMPOS DE TEXT EN EL MODAL-->
<!--                                COMIENZA EL ACORDEON DENTRO DEL MODAL-->
                               
<div class="row">
            
               <div class="bs-example">
                   <label>3.4 ÁREA OCUPACIONAL EN LA CUÁL SE DESEMPEÑO</label>
    <div class="panel-group" id="accordion">
        
<!--        INICIO DE LA PESTAÑA DIRECCIÓN Y GERENCIA DEL ACORDEON-->
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">DIRECCIÓN Y GERENCIA</a>
                </h4>
            </div>
            <div id="collapseOne" class="panel-collapse collapse ">
                <div class="panel-body">
                    <div class="row col-md-offset-0">
                        
                        
                        <div id="ppc3p3ddiv" class="has-error" onclick="validaracordeon()" name="ppc3p3ddiv" <?php if($carrayrespuestas['eppc3p3d']==''){echo('class="form-group col-md-12 form-group-sm has-error"');}else{echo('class="form-group col-md-12 form-group-sm"');}?>>   

                <div class="radio">
                    <label>
<!--                        en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="ppc3p3d" id="ppc3p3d" onclick="colocaropcion('ppc3p3d1','valorppc3p3d','ppc3p3ddiv');" value="ppc3p3d1" <?php if($carrayrespuestas['eppc3p3d']=='ppc3p3d1'){echo('checked');}?>>
                        Cargos directivos y gerencia
                    </label>
                </div>
               
                            <input type="text" class="form-control" id="valorppc3p3d" name="valorppc3p3d" style="display:none"   placeholder="Text input" value="<?php echo($carrayrespuestas['eppc3p3d']); ?>">
                
                
            </div>
                   
                       
                        
            </div> 
                </div>
            </div>
        </div>

<!--TERMINA PRIMERA PESTAÑA ACORDEON-->

<!--        INICIO DE LA PESTAÑA FINANZAS Y ADMINISTRACIÓN DEL ACORDEON-->
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">FINANZAS Y ADMINISTRACIÓN</a>
                </h4>
            </div>
            <div id="collapseTwo" class="panel-collapse collapse">
                <div class="panel-body">
                    
                                
            <div id="ppc3p3ddiv2" class="has-error" onclick="validaracordeon()" name="ppc3p3ddiv2" <?php if($carrayrespuestas['eppc3p3d']==''){echo('class="form-group col-md-12 form-group-sm has-error"');}else{echo('class="form-group col-md-12 form-group-sm"');}?>>   

                <div class="radio">
                    <label>
<!--                        en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="ppc3p3d" id="ppc3p3b" onclick="colocaropcion('ppc3p3d2','valorppc3p3d','ppc3p3ddiv2');" value="ppc3p3d2" <?php if($carrayrespuestas['eppc3p3d']=='ppc3p3d2'){echo('checked');}?>>
                          Servicios Financieros

                    </label>
                </div>
                
                <div class="radio">
                    <label>
<!--                        en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="ppc3p3d" id="ppc3p3b" onclick="colocaropcion('ppc3p3d3','valorppc3p3d','ppc3p3ddiv2');" value="ppc3p3d3" <?php if($carrayrespuestas['eppc3p3d']=='ppc3p3d3'){echo('checked');}?>>
                          Servicios en Seguros

                    </label>
                </div>
                
                  <div class="radio">
                    <label>
<!--                        en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="ppc3p3d" id="ppc3p3b" onclick="colocaropcion('ppc3p3d4','valorppc3p3d','ppc3p3ddiv2');" value="ppc3p3d4" <?php if($carrayrespuestas['eppc3p3d']=='ppc3p3d4'){echo('checked');}?>>
                          ervicios en Inversiones

                    </label>
                </div>
                
                  <div class="radio">
                    <label>
<!--                        en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="ppc3p3d" id="ppc3p3b" onclick="colocaropcion('ppc3p3d5','valorppc3p3d','ppc3p3ddiv2');" value="ppc3p3d5" <?php if($carrayrespuestas['eppc3p3d']=='ppc3p3d5'){echo('checked');}?>>
                          Servicios administrativos o de apoyo en oficina

                    </label>
                </div>
                
                
               
                
                
            </div>
                    
                </div>
            </div>
        </div>

<!--FIN PESTAÑA FINANZAS Y ADMINISTRACIÓN DEL ACORDEON-->

<!--        INICIO DE LA PESTAÑA CIENCIAS NATURALES Y APLICADAS DEL ACORDEON-->
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">CIENCIAS NATURALES Y APLICADAS</a>
                </h4>
            </div>
            
            <div id="collapseThree" class="panel-collapse collapse">
                <div class="panel-body">
                    
                    <div id="ppc3p3ddiv3" class="has-error" onclick="validaracordeon()" name="ppc3p3ddiv3" <?php if($carrayrespuestas['eppc3p3d']==''){echo('class="form-group col-md-12 form-group-sm has-error"');}else{echo('class="form-group col-md-12 form-group-sm"');}?>>   

                <div class="radio">
                    <label>
<!--                        en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="ppc3p3d" id="ppc3p3b" onclick="colocaropcion('ppc3p3d6','valorppc3p3d','ppc3p3ddiv3');" value="ppc3p3d6" <?php if($carrayrespuestas['eppc3p3d']=='ppc3p3d6'){echo('checked');}?>>
                           Investigación

                    </label>
                </div>
                
                <div class="radio">
                    <label>
<!--                        en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="ppc3p3d" id="ppc3p3b" onclick="colocaropcion('ppc3p3d7','valorppc3p3d','ppc3p3ddiv3');" value="ppc3p3d7" <?php if($carrayrespuestas['eppc3p3d']=='ppc3p3d7'){echo('checked');}?>>
                          Ingeniería

                    </label>
                </div>
                
                  <div class="radio">
                    <label>
<!--                        en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="ppc3p3d" id="ppc3p3b" onclick="colocaropcion('ppc3p3d8','valorppc3p3d','ppc3p3ddiv3');" value="ppc3p3d8" <?php if($carrayrespuestas['eppc3p3d']=='ppc3p3d8'){echo('checked');}?>>
                           Arquitectura

                    </label>
                </div>
                
                  <div class="radio">
                    <label>
<!--                        en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="ppc3p3d" id="ppc3p3b" onclick="colocaropcion('ppc3p3d9','valorppc3p3d','ppc3p3ddiv3');" value="ppc3p3d9" <?php if($carrayrespuestas['eppc3p3d']=='ppc3p3d9'){echo('checked');}?>>
                          Urbanismo

                    </label>
                </div>
                         
                         <div class="radio">
                    <label>
<!--                        en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="ppc3p3d" id="ppc3p3b" onclick="colocaropcion('ppc3p3d10','valorppc3p3d','ppc3p3ddiv3');" value="ppc3p3d10" <?php if($carrayrespuestas['eppc3p3d']=='ppc3p3d10'){echo('checked');}?>>
                          Docencia en las anteriores áreas

                    </label>
                </div>
                
                
               
                
                
            </div>
                    
                </div>
            </div>
        </div>

<!--FIN PESTAÑA FINANZAS Y ADMINISTRACIÓN DEL ACORDEON-->
        
        
         <div class="panel panel-primary">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapsefour">SALUD</a>
                </h4>
            </div>
            <div id="collapsefour" class="panel-collapse collapse">
                <div class="panel-body">
                    
                    <div id="ppc3p3ddiv4" class="has-error" onclick="validaracordeon()" name="ppc3p3ddiv4" <?php if($carrayrespuestas['eppc3p3d']==''){echo('class="form-group col-md-12 form-group-sm has-error"');}else{echo('class="form-group col-md-12 form-group-sm"');}?>>   

                <div class="radio">
                    <label>
<!--                        en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="ppc3p3d" id="ppc3p3b" onclick="colocaropcion('ppc3p3d11','valorppc3p3d','ppc3p3ddiv4');" value="ppc3p3d11" <?php if($carrayrespuestas['eppc3p3d']=='ppc3p3d11'){echo('checked');}?>>
                           Enfermería

                    </label>
                </div>
                
                <div class="radio">
                    <label>
<!--                        en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="ppc3p3d" id="ppc3p3b" onclick="colocaropcion('ppc3p3d12','valorppc3p3d','ppc3p3ddiv4');" value="ppc3p3d12" <?php if($carrayrespuestas['eppc3p3d']=='ppc3p3d12'){echo('checked');}?>>
                           
                           Auxiliar de Enfermería

                    </label>
                </div>
                
                  <div class="radio">
                    <label>
<!--                        en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="ppc3p3d" id="ppc3p3b" onclick="colocaropcion('ppc3p3d13','valorppc3p3d','ppc3p3ddiv4');" value="ppc3p3d13" <?php if($carrayrespuestas['eppc3p3d']=='ppc3p3d13'){echo('checked');}?>>
                           Camillero(a)

                    </label>
                </div>
                
                  <div class="radio">
                    <label>
<!--                        en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="ppc3p3d" id="ppc3p3b" onclick="colocaropcion('ppc3p3d14','valorppc3p3d','ppc3p3ddiv4');" value="ppc3p3d14" <?php if($carrayrespuestas['eppc3p3d']=='ppc3p3d14'){echo('checked');}?>>
                          Odontólogos(as

                    </label>
                </div>
                         
                <div class="radio">
                    <label>
<!--                        en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="ppc3p3d" id="ppc3p3b" onclick="colocaropcion('ppc3p3d15','valorppc3p3d','ppc3p3ddiv4');" value="ppc3p3d15" <?php if($carrayrespuestas['eppc3p3d']=='ppc3p3d15'){echo('checked');}?>>
                          Auxiliar Salud Oral

                    </label>
                </div>
                        
                        
                          <div class="radio">
                    <label>
<!--                        en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="ppc3p3d" id="ppc3p3b" onclick="colocaropcion('ppc3p3d16','valorppc3p3d','ppc3p3ddiv4');" value="ppc3p3d16" <?php if($carrayrespuestas['eppc3p3d']=='ppc3p3d16'){echo('checked');}?>>
                          Médicos(as)

                    </label>
                </div>
                        
                        
                          <div class="radio">
                    <label>
<!--                        en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="ppc3p3d" id="ppc3p3b" onclick="colocaropcion('ppc3p3d17','valorppc3p3d','ppc3p3ddiv4');" value="ppc3p3d17" <?php if($carrayrespuestas['eppc3p3d']=='ppc3p3d17'){echo('checked');}?>>
                           Auxiliar Administrativo en Salud

                    </label>
                </div>
                        
                        
                          <div class="radio">
                    <label>
<!--                        en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="ppc3p3d" id="ppc3p3b" onclick="colocaropcion('ppc3p3d18','valorppc3p3d','ppc3p3ddiv4');" value="ppc3p3d18" <?php if($carrayrespuestas['eppc3p3d']=='ppc3p3d18'){echo('checked');}?>>
                          Profesionales Salud Ocupacional

                    </label>
                </div>
                        
                        
                          <div class="radio">
                    <label>
<!--                        en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="ppc3p3d" id="ppc3p3b" onclick="colocaropcion('ppc3p3d19','valorppc3p3d','ppc3p3ddiv4');" value="ppc3p3d19" <?php if($carrayrespuestas['eppc3p3d']=='ppc3p3d19'){echo('checked');}?>>
                          Paramédicos(as)

                    </label>
                </div>     
                
               
                
                
            </div>
                    
                </div>
            </div>
        </div>
        

<!--FIN DE LA PESTAÑA SALUD DEL ACORDEON-->

<!--INICIO DE LA PESTAÑA CIENCIAS SOCIALES, EDUCACIÓN, SERVICIOS GUBERNAMENTALES Y RELIGIÓN DEL ACORDEON-->
         <div class="panel panel-primary">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapsefive">CIENCIAS SOCIALES, EDUCACIÓN, SERVICIOS GUBERNAMENTALES Y RELIGIÓN</a>
                </h4>
            </div>
            <div id="collapsefive" class="panel-collapse collapse">
                <div class="panel-body">
                    
                    <div id="ppc3p3ddiv5" class="has-error" onclick="validaracordeon()" name="ppc3p3ddiv5" <?php if($carrayrespuestas['eppc3p3d']==''){echo('class="form-group col-md-12 form-group-sm has-error"');}else{echo('class="form-group col-md-12 form-group-sm"');}?>>   

                <div class="radio">
                    <label>
<!--                        en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="ppc3p3d" id="ppc3p3b" onclick="colocaropcion('ppc3p3d20','valorppc3p3d','ppc3p3ddiv5');" value="ppc3p3d20" <?php if($carrayrespuestas['eppc3p3d']=='ppc3p3d20'){echo('checked');}?>>
                            Leyes

                    </label>
                </div>
                
                <div class="radio">
                    <label>
<!--                        en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="ppc3p3d" id="ppc3p3b" onclick="colocaropcion('ppc3p3d21','valorppc3p3d','ppc3p3ddiv5');" value="ppc3p3d21" <?php if($carrayrespuestas['eppc3p3d']=='ppc3p3d21'){echo('checked');}?>>
                          Docencia

                    </label>
                </div>
                
                  <div class="radio">
                    <label>
<!--                        en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="ppc3p3d" id="ppc3p3b" onclick="colocaropcion('ppc3p3d22','valorppc3p3d','ppc3p3ddiv5');" value="ppc3p3d22" <?php if($carrayrespuestas['eppc3p3d']=='ppc3p3d22'){echo('checked');}?>>
                           Investigación

                    </label>
                </div>
                
                  <div class="radio">
                    <label>
<!--                        en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="ppc3p3d" id="ppc3p3b" onclick="colocaropcion('ppc3p3d23','valorppc3p3d','ppc3p3ddiv5');" value="ppc3p3d23" <?php if($carrayrespuestas['eppc3p3d']=='ppc3p3d23'){echo('checked');}?>>
                          Trabajo Social y Comunitario

                    </label>
                </div>
                         
                   </div>
                    
                </div>
            </div>
        </div>

<!--FIN DE LA PESTAÑA CIENCIAS SOCIALES, EDUCACIÓN, SERVICIOS GUBERNAMENTALES Y RELIGIÓN DEL ACORDEON-->

<!--INICIO DE LA PESTAÑA ARTE, CULTURA, ESPARCIMIENTO Y DEPORTES DEL ACORDEON-->
        
         <div class="panel panel-primary">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapsesix">ARTE, CULTURA, ESPARCIMIENTO Y DEPORTES</a>
                </h4>
            </div>
            <div id="collapsesix" class="panel-collapse collapse">
                <div class="panel-body">
                    
                    <div id="ppc3p3ddiv6" class="has-error" onclick="validaracordeon()" name="ppc3p3ddiv6" <?php if($carrayrespuestas['eppc3p3d']==''){echo('class="form-group col-md-12 form-group-sm has-error"');}else{echo('class="form-group col-md-12 form-group-sm"');}?>>   

                <div class="radio">
                    <label>
<!--                        en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="ppc3p3d" id="ppc3p3b" onclick="colocaropcion('ppc3p3d24','valorppc3p3d','ppc3p3ddiv6');" value="ppc3p3d24" <?php if($carrayrespuestas['eppc3p3d']=='ppc3p3d24'){echo('checked');}?>>
                           Artes Escénicas

                    </label>
                </div>
                
                <div class="radio">
                    <label>
<!--                        en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="ppc3p3d" id="ppc3p3b" onclick="colocaropcion('ppc3p3d25','valorppc3p3d','ppc3p3ddiv6');" value="ppc3p3d25" <?php if($carrayrespuestas['eppc3p3d']=='ppc3p3d25'){echo('checked');}?>>
                          Periodismo

                    </label>
                </div>
                
                  <div class="radio">
                    <label>
<!--                        en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="ppc3p3d" id="ppc3p3b" onclick="colocaropcion('ppc3p3d26','valorppc3p3d','ppc3p3ddiv6');" value="ppc3p3d26" <?php if($carrayrespuestas['eppc3p3d']=='ppc3p3d26'){echo('checked');}?>>
                            Literatura

                    </label>
                </div>
                
                  <div class="radio">
                    <label>
<!--                        en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="ppc3p3d" id="ppc3p3b" onclick="colocaropcion('ppc3p3d27','valorppc3p3d','ppc3p3ddiv6');" value="ppc3p3d27" <?php if($carrayrespuestas['eppc3p3d']=='ppc3p3d27'){echo('checked');}?>>
                          Diseño Creativo

                    </label>
                </div>
                         
                         <div class="radio">
                    <label>
<!--                        en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="ppc3p3d" id="ppc3p3b" onclick="colocaropcion('ppc3p3d28','valorppc3p3d','ppc3p3ddiv6');" value="ppc3p3d28" <?php if($carrayrespuestas['eppc3p3d']=='ppc3p3d28'){echo('checked');}?>>
                          Deporte

                    </label>
                </div>
                
                
               
                
                
            </div>
                    
                </div>
            </div>
        </div>

<!--FIN DE LA PESTAÑA ARTE, CULTURA, ESPARCIMIENTO Y DEPORTES DEL ACORDEON-->

<!--INICIO DE LA PESTAÑA VENTAS Y SERVICIOS DEL ACORDEON-->
        
         <div class="panel panel-primary">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseseven">VENTAS Y SERVICIOS</a>
                </h4>
            </div>
            <div id="collapseseven" class="panel-collapse collapse">
                <div class="panel-body">
                    
                    <div id="ppc3p3ddiv7" class="has-error" onclick="validaracordeon()" name="ppc3p3ddiv7" <?php if($carrayrespuestas['eppc3p3d']==''){echo('class="form-group col-md-12 form-group-sm has-error"');}else{echo('class="form-group col-md-12 form-group-sm"');}?>>   

                <div class="radio">
                    <label>
<!--                        en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="ppc3p3d" id="ppc3p3b" onclick="colocaropcion('ppc3p3d29','valorppc3p3d','ppc3p3ddiv7');" value="ppc3p3d29" <?php if($carrayrespuestas['eppc3p3d']=='ppc3p3d29'){echo('checked');}?>>
                           Venta de Productos

                    </label>
                </div>
                
                <div class="radio">
                    <label>
<!--                        en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="ppc3p3d" id="ppc3p3b" onclick="colocaropcion('ppc3p3d30','valorppc3p3d','ppc3p3ddiv7');" value="ppc3p3d30" <?php if($carrayrespuestas['eppc3p3d']=='ppc3p3d30'){echo('checked');}?>>
                          Venta de Servicios

                    </label>
                </div>
                
                  <div class="radio">
                    <label>
<!--                        en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="ppc3p3d" id="ppc3p3b" onclick="colocaropcion('ppc3p3d31','valorppc3p3d','ppc3p3ddiv7');" value="ppc3p3d31" <?php if($carrayrespuestas['eppc3p3d']=='ppc3p3d31'){echo('checked');}?>>
                           Turismo

                    </label>
                </div>
                
                  <div class="radio">
                    <label>
<!--                        en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="ppc3p3d" id="ppc3p3b" onclick="colocaropcion('ppc3p3d32','valorppc3p3d','ppc3p3ddiv7');" value="ppc3p3d32" <?php if($carrayrespuestas['eppc3p3d']=='ppc3p3d32'){echo('checked');}?>>
                          Hotelería

                    </label>
                </div>
                         
                         <div class="radio">
                    <label>
<!--                        en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="ppc3p3d" id="ppc3p3b" onclick="colocaropcion('ppc3p3d33','valorppc3p3d','ppc3p3ddiv7');" value="ppc3p3d33" <?php if($carrayrespuestas['eppc3p3d']=='ppc3p3d33'){echo('checked');}?>>
                          Gastronomía/alimentos

                    </label>
                </div>
                        
                        
                        <div class="radio">
                    <label>
<!--                        en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="ppc3p3d" id="ppc3p3b" onclick="colocaropcion('ppc3p3d34','valorppc3p3d','ppc3p3ddiv7');" value="ppc3p3d34" <?php if($carrayrespuestas['eppc3p3d']=='ppc3p3d34'){echo('checked');}?>>
                          Belleza/Estética

                    </label>
                </div>
                        
                        <div class="radio">
                    <label>
<!--                        en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="ppc3p3d" id="ppc3p3b" onclick="colocaropcion('ppc3p3d35','valorppc3p3d','ppc3p3ddiv7');" value="ppc3p3d35" <?php if($carrayrespuestas['eppc3p3d']=='ppc3p3d35'){echo('checked');}?>>
                          Oficios Domésticos

                    </label>
                </div>
                        
                        <div class="radio">
                    <label>
<!--                        en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="ppc3p3d" id="ppc3p3b" onclick="colocaropcion('ppc3p3d36','valorppc3p3d','ppc3p3ddiv7');" value="ppc3p3d36" <?php if($carrayrespuestas['eppc3p3d']=='ppc3p3d36'){echo('checked');}?>>
                          Aseo Especializado

                    </label>
                </div>
                        
                        <div class="radio">
                    <label>
<!--                        en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="ppc3p3d" id="ppc3p3b" onclick="colocaropcion('ppc3p3d37','valorppc3p3d','ppc3p3ddiv7');" value="ppc3p3d37" <?php if($carrayrespuestas['eppc3p3d']=='ppc3p3d37'){echo('checked');}?>>
                          Operadores logísticos

                    </label>
                </div>
                        
                        <div class="radio">
                    <label>
<!--                        en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="ppc3p3d" id="ppc3p3b" onclick="colocaropcion('ppc3p3d38','valorppc3p3d','ppc3p3ddiv7');" value="ppc3p3d38" <?php if($carrayrespuestas['eppc3p3d']=='ppc3p3d38'){echo('checked');}?>>
                          Oficios Varios

                    </label>
                </div>
                        
                        <div class="radio">
                    <label>
<!--                        en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="ppc3p3d" id="ppc3p3b" onclick="colocaropcion('ppc3p3d39','valorppc3p3d','ppc3p3ddiv7');" value="ppc3p3d39" <?php if($carrayrespuestas['eppc3p3d']=='ppc3p3d39'){echo('checked');}?>>
                          Automotriz

                    </label>
                </div>
                        
                        <div class="radio">
                    <label>
<!--                        en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="ppc3p3d" id="ppc3p3b" onclick="colocaropcion('ppc3p3d40','valorppc3p3d','ppc3p3ddiv7');" value="ppc3p3d40" <?php if($carrayrespuestas['eppc3p3d']=='ppc3p3d40'){echo('checked');}?>>
                          Atención al cliente

                    </label>
                </div>
                        
                        <div class="radio">
                    <label>
<!--                        en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="ppc3p3d" id="ppc3p3b" onclick="colocaropcion('ppc3p3d41','valorppc3p3d','ppc3p3ddiv7');" value="ppc3p3d41" <?php if($carrayrespuestas['eppc3p3d']=='ppc3p3d41'){echo('checked');}?>>
                          Contact Center/Telecomunicaciones

                    </label>
                </div>
                        
                        <div class="radio">
                    <label>
<!--                        en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="ppc3p3d" id="ppc3p3b" onclick="colocaropcion('ppc3p3d42','valorppc3p3d','ppc3p3ddiv7');" value="ppc3p3d42" <?php if($carrayrespuestas['eppc3p3d']=='ppc3p3d42'){echo('checked');}?>>
                          Cuidado de adultos Mayores y niños

                    </label>
                </div>
                        
                        <div class="radio">
                    <label>
<!--                        en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="ppc3p3d" id="ppc3p3b" onclick="colocaropcion('ppc3p3d43','valorppc3p3d','ppc3p3ddiv7');" value="ppc3p3d43" <?php if($carrayrespuestas['eppc3p3d']=='ppc3p3d43'){echo('checked');}?>>
                           Vigilancia

                    </label>
                </div>
                        
                        <div class="radio">
                    <label>
<!--                        en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="ppc3p3d" id="ppc3p3b" onclick="colocaropcion('ppc3p3d44','valorppc3p3d','ppc3p3ddiv7');" value="ppc3p3d44" <?php if($carrayrespuestas['eppc3p3d']=='ppc3p3d44'){echo('checked');}?>>
                          Mensajería

                    </label>
                </div>
                        
                        
                        
                
                
               
                
                
            </div>
                    
                </div>
            </div>
        </div>
        
<!--FIN DE LA PESTAÑA VENTAS Y SERVICIOS DEL ACORDEON-->

<!--INICIO DE LA PESTAÑA EXPLOTACIÓN PRIMARIA Y EXTRACTIVA DEL ACORDEON-->
         <div class="panel panel-primary">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseeight">EXPLOTACIÓN PRIMARIA Y EXTRACTIVA</a>
                </h4>
            </div>
            <div id="collapseeight" class="panel-collapse collapse">
                <div class="panel-body">
                    
                    <div id="ppc3p3ddiv8" class="has-error" onclick="validaracordeon()" name="ppc3p3ddiv8" <?php if($carrayrespuestas['eppc3p3d']==''){echo('class="form-group col-md-12 form-group-sm has-error"');}else{echo('class="form-group col-md-12 form-group-sm"');}?>>   

                <div class="radio">
                    <label>
<!--                        en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="ppc3p3d" id="ppc3p3b" onclick="colocaropcion('ppc3p3d45','valorppc3p3d','ppc3p3ddiv8');" value="ppc3p3d45" <?php if($carrayrespuestas['eppc3p3d']=='ppc3p3d45'){echo('checked');}?>>
                           Explotación y Extracción de Minerales

                    </label>
                </div>
                
                <div class="radio">
                    <label>
<!--                        en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="ppc3p3d" id="ppc3p3b" onclick="colocaropcion('ppc3p3d46','valorppc3p3d','ppc3p3ddiv8');" value="ppc3p3d46" <?php if($carrayrespuestas['eppc3p3d']=='ppc3p3d46'){echo('checked');}?>>
                          Explotación de Gas

                    </label>
                </div>
                
                  <div class="radio">
                    <label>
<!--                        en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="ppc3p3d" id="ppc3p3b" onclick="colocaropcion('ppc3p3d47','valorppc3p3d','ppc3p3ddiv8');" value="ppc3p3d47" <?php if($carrayrespuestas['eppc3p3d']=='ppc3p3d47'){echo('checked');}?>>
                           Explotación de Petróleo

                    </label>
                </div>
                
                  <div class="radio">
                    <label>
<!--                        en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="ppc3p3d" id="ppc3p3b" onclick="colocaropcion('ppc3p3d48','valorppc3p3d','ppc3p3ddiv8');" value="ppc3p3d48" <?php if($carrayrespuestas['eppc3p3d']=='ppc3p3d48'){echo('checked');}?>>
                          Producción Agrícola

                    </label>
                </div>
                         
                         <div class="radio">
                    <label>
<!--                        en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="ppc3p3d" id="ppc3p3b" onclick="colocaropcion('ppc3p3d49','valorppc3p3d','ppc3p3ddiv8');" value="ppc3p3d49" <?php if($carrayrespuestas['eppc3p3d']=='ppc3p3d49'){echo('checked');}?>>
                          Producción Pecuaria

                    </label>
                </div>
                        
                        <div class="radio">
                    <label>
<!--                        en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="ppc3p3d" id="ppc3p3b" onclick="colocaropcion('ppc3p3d50','valorppc3p3d','ppc3p3ddiv8');" value="ppc3p3d50" <?php if($carrayrespuestas['eppc3p3d']=='ppc3p3d50'){echo('checked');}?>>
                          Producción Pesquera

                    </label>
                </div>
                        
                        <div class="radio">
                    <label>
<!--                        en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="ppc3p3d" id="ppc3p3b" onclick="colocaropcion('ppc3p3d51','valorppc3p3d','ppc3p3ddiv8');" value="ppc3p3d51" <?php if($carrayrespuestas['eppc3p3d']=='ppc3p3d51'){echo('checked');}?>>
                          Producción Forestal

                    </label>
                </div>            
            </div>
                    
                </div>
            </div>
        </div>

<!--FIN DE LA PESTAÑA EXPLOTACIÓN PRIMARIA Y EXTRACTIVA DEL ACORDEON-->

<!--INICIO DE LA PESTAÑA OPERACIÓN DE EQUIPOS DEL TRANSPORTE Y OFICIOS DEL ACORDEON-->
        
         <div class="panel panel-primary">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapsenine">OPERACIÓN DE EQUIPOS DEL TRANSPORTE Y OFICIOS</a>
                </h4>
            </div>
            <div id="collapsenine" class="panel-collapse collapse">
                <div class="panel-body">
                    
                    <div id="ppc3p3ddiv9" class="has-error" onclick="validaracordeon()" name="ppc3p3ddiv9" <?php if($carrayrespuestas['eppc3p3d']==''){echo('class="form-group col-md-12 form-group-sm has-error"');}else{echo('class="form-group col-md-12 form-group-sm"');}?>>   

                <div class="radio">
                    <label>
<!--                        en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="ppc3p3d" id="ppc3p3b" onclick="colocaropcion('ppc3p3d52','valorppc3p3d','ppc3p3ddiv9');" value="ppc3p3d52" <?php if($carrayrespuestas['eppc3p3d']=='ppc3p3d52'){echo('checked');}?>>
                            Construcción

                    </label>
                </div>
                
                <div class="radio">
                    <label>
<!--                        en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="ppc3p3d" id="ppc3p3b" onclick="colocaropcion('ppc3p3d53','valorppc3p3d','ppc3p3ddiv9');" value="ppc3p3d53" <?php if($carrayrespuestas['eppc3p3d']=='ppc3p3d53'){echo('checked');}?>>
                          Operadores equipo de transporte

                    </label>
                </div>
                
                  <div class="radio">
                    <label>
<!--                        en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="ppc3p3d" id="ppc3p3b" onclick="colocaropcion('ppc3p3d54','valorppc3p3d','ppc3p3ddiv9');" value="ppc3p3d54" <?php if($carrayrespuestas['eppc3p3d']=='ppc3p3d54'){echo('checked');}?>>
                           Operadores de equipos pesados

                    </label>
                </div>
                
                  <div class="radio">
                    <label>
<!--                        en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="ppc3p3d" id="ppc3p3b" onclick="colocaropcion('ppc3p3d55','valorppc3p3d','ppc3p3ddiv9');" value="ppc3p3d55" <?php if($carrayrespuestas['eppc3p3d']=='ppc3p3d55'){echo('checked');}?>>
                          Mecánicos

                    </label>
                </div>
                         
                         <div class="radio">
                    <label>
<!--                        en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="ppc3p3d" id="ppc3p3b" onclick="colocaropcion('ppc3p3d56','valorppc3p3d','ppc3p3ddiv9');" value="ppc3p3d56" <?php if($carrayrespuestas['eppc3p3d']=='ppc3p3d56'){echo('checked');}?>>
                          Electricistas

                    </label>
                </div>
                
                        
                        <div class="radio">
                    <label>
<!--                        en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="ppc3p3d" id="ppc3p3b" onclick="colocaropcion('ppc3p3d57','valorppc3p3d','ppc3p3ddiv9');" value="ppc3p3d57" <?php if($carrayrespuestas['eppc3p3d']=='ppc3p3d57'){echo('checked');}?>>
                          Instaladores de redes eléctrica

                    </label>
                </div>
                        
                        <div class="radio">
                    <label>
<!--                        en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="ppc3p3d" id="ppc3p3b" onclick="colocaropcion('ppc3p3d58','valorppc3p3d','ppc3p3ddiv9');" value="ppc3p3d58" <?php if($carrayrespuestas['eppc3p3d']=='ppc3p3d58'){echo('checked');}?>>
                           Instaladores de redes de comunicaciones

                    </label>
                </div>
                        
                        <div class="radio">
                    <label>
<!--                        en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="ppc3p3d" id="ppc3p3b" onclick="colocaropcion('ppc3p3d59','valorppc3p3d','ppc3p3ddiv9');" value="ppc3p3d59" <?php if($carrayrespuestas['eppc3p3d']=='ppc3p3d59'){echo('checked');}?>>
                          Instaladores de redes de gas

                    </label>
                </div>
                        
                        <div class="radio">
                    <label>
<!--                        en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="ppc3p3d" id="ppc3p3b" onclick="colocaropcion('ppc3p3d60','valorppc3p3d','ppc3p3ddiv9');" value="ppc3p3d60" <?php if($carrayrespuestas['eppc3p3d']=='ppc3p3d60'){echo('checked');}?>>
                          Carpintería

                    </label>
                </div>
                        
                        <div class="radio">
                    <label>
<!--                        en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="ppc3p3d" id="ppc3p3b" onclick="colocaropcion('ppc3p3d61','valorppc3p3d','ppc3p3ddiv9');" value="ppc3p3d61" <?php if($carrayrespuestas['eppc3p3d']=='ppc3p3d61'){echo('checked');}?>>
                          Sastrería

                    </label>
                </div>
                        
                        <div class="radio">
                    <label>
<!--                        en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="ppc3p3d" id="ppc3p3b" onclick="colocaropcion('ppc3p3d62','valorppc3p3d','ppc3p3ddiv9');" value="ppc3p3d62" <?php if($carrayrespuestas['eppc3p3d']=='ppc3p3d62'){echo('checked');}?>>
                          Plomería

                    </label>
                </div>
                        
                        <div class="radio">
                    <label>
<!--                        en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="ppc3p3d" id="ppc3p3b" onclick="colocaropcion('ppc3p3d63','valorppc3p3d','ppc3p3ddiv9');" value="ppc3p3d63" <?php if($carrayrespuestas['eppc3p3d']=='ppc3p3d63'){echo('checked');}?>>
                          Tapicería

                    </label>
                </div>
                        
                        <div class="radio">
                    <label>
<!--                        en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="ppc3p3d" id="ppc3p3b" onclick="colocaropcion('ppc3p3d64','valorppc3p3d','ppc3p3ddiv9');" value="ppc3p3d64" <?php if($carrayrespuestas['eppc3p3d']=='ppc3p3d64'){echo('checked');}?>>
                          Zapatería

                    </label>
                </div>
                        
                        <div class="radio">
                    <label>
<!--                        en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="ppc3p3d" id="ppc3p3b" onclick="colocaropcion('ppc3p3d65','valorppc3p3d','ppc3p3ddiv9');" value="ppc3p3d65" <?php if($carrayrespuestas['eppc3p3d']=='ppc3p3d65'){echo('checked');}?>>
                          Conductores

                    </label>
                </div>
                
               
                
                
            </div>
                    
                </div>
            </div>
        </div>

<!--FIN DE LA PESTAÑA OPERACIÓN DE EQUIPOS DEL TRANSPORTE Y OFICIOS DEL ACORDEON-->

<!--INICIO DE LA PESTAÑA PROCESAMIENTO, FABRICACIÓN Y ENSAMBLE DEL ACORDEON-->
        
         <div class="panel panel-primary">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseten">PROCESAMIENTO, FABRICACIÓN Y ENSAMBLE</a>
                </h4>
            </div>
            <div id="collapseten" class="panel-collapse collapse">
                <div class="panel-body">
                   
                    
                    <div id="ppc3p3ddiv10" class="has-error" onclick="validaracordeon()" name="ppc3p3ddiv10" <?php if($carrayrespuestas['eppc3p3d']==''){echo('class="form-group col-md-12 form-group-sm has-error"');}else{echo('class="form-group col-md-12 form-group-sm"');}?>>   

                <div class="radio">
                    <label>
<!--                        en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="ppc3p3d" id="ppc3p3b" onclick="colocaropcion('ppc3p3d66','valorppc3p3d','ppc3p3ddiv10');" value="ppc3p3d66" <?php if($carrayrespuestas['eppc3p3d']=='ppc3p3d66'){echo('checked');}?>>
                           Supervisión

                    </label>
                </div>
                
                <div class="radio">
                    <label>
<!--                        en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="ppc3p3d" id="ppc3p3b" onclick="colocaropcion('ppc3p3d67','valorppc3p3d','ppc3p3ddiv10');" value="ppc3p3d67" <?php if($carrayrespuestas['eppc3p3d']=='ppc3p3d67'){echo('checked');}?>>
                          Operarios de fabricación

                    </label>
                </div>
                
                  <div class="radio">
                    <label>
<!--                        en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="ppc3p3d" id="ppc3p3b" onclick="colocaropcion('ppc3p3d68','valorppc3p3d','ppc3p3ddiv10');" value="ppc3p3d68" <?php if($carrayrespuestas['eppc3p3d']=='ppc3p3d68'){echo('checked');}?>>
                           Operarios de ensamble

                    </label>
                </div>
                
                  <div class="radio">
                    <label>
<!--                        en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="ppc3p3d" id="ppc3p3b" onclick="colocaropcion('ppc3p3d69','valorppc3p3d','ppc3p3ddiv10');" value="ppc3p3d69" <?php if($carrayrespuestas['eppc3p3d']=='ppc3p3d69'){echo('checked');}?>>
                          Recuperación y Reciclaje Residuos

                    </label>
                </div>
                                  
            </div>
                    
                </div>
            </div>
        </div>

<!--FIN DE LA PESTAÑA PROCESAMIENTO, FABRICACIÓN Y ENSAMBLE DEL ACORDEON-->
        
                 
    </div>
</div>

               
            </div> 
           </div>                     
                                
                        
                        
<!--        BOTON QUE GUARDA EL FORMULARIO DE EXPERIENCIA LABORAL                -->
      
      <div class="modal-footer">
          <button type="button" id="guardarempresa"  disabled="disabled" name="guardarempresa"  class="btn btn-success">Guardar</button>
                <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
      </div>
<!--    FIN    BOTON QUE GUARDA EL FORMULARIO DE EXPERIENCIA LABORAL                -->
    </div>
  </div>
</div>

<!--fin modal-->
           
            

            <!-- Modal Ayuda-->
            <div class="modal fade"  id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header ">
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
            
             <div class="row">
    <div class="form-group col-md-10 col-md-offset-1 ">   
        
        <div class="panel panel-primary  ">
                            <!-- Default panel contents -->
                            <div class="panel-heading ">Experiencia laboral</div>
                            <div class="panel-body">
                              <p>En esta tabla, se listarán los 3 ultimos empleos del integrante .</p>
                               <p>Recuerde que solo se permite ingresar tres empleos.</p>
                            </div>
        
        <div class="form-group  ">
            
<!--            TABLA QUE ME REFLEJA LA INFORMACION DE LA EXPERIENCIA LABORAL-->
                                <table class="table table-condensed">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>EMPRESA</th>
                                            <th>TELÉFONO DE LA EMPRESA</th>
                                            <th>CARGO </th>
                                            <th>FECHA DE INICIO </th>
                                            <th>FECHA DETERMINACIÓN </th>
                                            <th>CIUDAD </th>
                                            <th>ELIMINAR</th>
                                            
                                            
                                        </tr>
                                    </thead>
                                    
                                    <tbody id='datos2'>
                        <?php  echo($datos2); ?>
                </tbody>
                                </table>

<!--FIN TABLA EXPERIENCIA LABORAL-->
        </div>

                            </div>
    </div>
    </div> 
<!--INICIO DE LA BOTONERA DE EXPERIENCIA LABORAL-->
    <?php if($carrayrespuestas['eppc3p3b1']<>"")
    {
        echo '<div class="row">
           <div class=" col-lg-offset-1">
           <button class="btn btn-primary"  type="button"  id="anterior" name="anterior"> << Anterior</button> 
           <button class="btn btn-primary"  class="col-offset-1" type="button" id="siguiente" name="siguiente">Siguiente >></button>
           </div>
           </div>';
    }
    else
    {
        echo '<div class="row">
            <div class="row col-lg-offset-1">
             <button class="btn btn-primary"  type="button"  id="anterior" name="anterior"> << Anterior</button> 
             <button class="btn btn-primary" disabled="" type="button" id="siguiente" name="siguiente">Siguiente >></button>
                    </div>
                    </div>';
    }
   ?>    
    
<!--FIN DE LA BOTONERA DE EXPERIENCIA LABORAL-->
    
    
    <!--Inicio Este es el footer NO TOCAR-->
    <?php echo($foot); ?>
    <!--fin del footer NO TOCAR-->
    

            
    </div>
        
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
function check()
{

if ( $('#check1').is(":checked") )
    {
          
      $('#divfechaf').removeClass('has-error');
      $('#divfechaf').hide(1000);
      
      $('#fechaf').val('3000-01-01');

      
    }
    else
    { 
      $('#divfechaf').addClass('has-error');
      $('#divfechaf').show(1000); 
      $('#fechaf').val('');
    }
       
       
}


function fechas()
{
if ($('#fechai').val() > $('#fechaf').val())
{
    
    
    $('#divfechaf').addClass('has-error');
    $('#fechaf').val('');
}
validarbolitasytexto('divfechaf','fechaf');
}

    $(document).ready(function()
    {

        $("#guardarempresa").click(function ()
        {
                        $.ajax({
                          url: "fc_insertarempleo",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),
                                 vidintegrante : $('#idintegrante').val(),
                                 vempresa: $('#empresa').val(),
                                 vtelempresa: $('#telempresa').val(),
                                 vcargo: $('#cargo').val(),
                                 vfechai: $('#fechai').val(),
                                 vfechaf: $('#fechaf').val(),
                                 vciudad: $('#ciudad').val(),
                                 vvalorppc3p3d: $('#valorppc3p3d').val()},    
                          dataType: "html",
                          success : function(obj){  
                              okguardar();
                              $('#datos2').html(obj);
                              $('#empresa').val('');
                              $('#telempresa').val('');
                              $('#cargo').val('');
                              $('#fechai').val('');
                              $('#fechaf').val('');
                              $('#ciudad').val('');
                              $('#divnombreempresa').addClass('has-error');
                              $('#divtelempresa').addClass('has-error');
                              $('#divcargo').addClass('has-error');
                              $('#divfechai').addClass('has-error');
                              $('#divfechaf').addClass('has-error');
                              $('#divciudad').addClass('has-error');
                              $('#ppc3p3ddiv').addClass('has-error');
                              $('#ppc3p3ddiv2').addClass('has-error');
                              $('#ppc3p3ddiv3').addClass('has-error');
                              $('#ppc3p3ddiv4').addClass('has-error');
                              $('#ppc3p3ddiv5').addClass('has-error');
                              $('#ppc3p3ddiv6').addClass('has-error');
                              $('#ppc3p3ddiv7').addClass('has-error');
                              $('#ppc3p3ddiv8').addClass('has-error');
                              $('#ppc3p3ddiv9').addClass('has-error');
                              $('#ppc3p3ddiv10').addClass('has-error');                              
                              $('#guardarempresa').prop('disabled', true);
                              
                             
                          
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


        
//        $("#actualizar").click(function ()
//        {
//                        $.ajax({
//                          url: "fc_actualizar",
//                          type: "GET",
//                          data: {vfolio : $('#folio').val(),
//                                 vidintegrante : $('#idintegrante').val(),
//                                 vtelempresappc3p3b: $('#telempresappc3p3b').val()},       
//                          dataType: "html",
//                          success : function(obj){                      
//                          botonguardar();
//                          }
//                        });                    
//        });
        

        $("#siguiente").click(function ()
        {
         botonsiguiente();
         location.href = "../c_ppc3p3c/fc_ppc3p3c?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    

        });
              
        $("#anterior").click(function ()
        {
         botonanterior();
          location.href = "../c_ppc3p3a/fc_ppc3p3a?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";   
        //location.href = "../c_capitulosintegrantes/fc_capitulosintegrantes?idintegrante=" + $('#idintegrante').val()+ "&idintegrante="+"&idintegrante=0";                    
        });

//para cargar variables capitulo, pregunta,encuestador,vivienda,barra
cargardatosgenerales('<?php echo($arraydatosgenerales['ecapitulo']); ?>','Pregunta 3b de 4','<?php echo($arraydatosgenerales['enomcoges']); ?>','<?php echo($arraydatosgenerales['enombreintegrante']." "." - "." "."Sexo:"." ".$arraydatosgenerales['esexointegrante']."   "."  -  "."   "."Edad:"."   ".$arraydatosgenerales['eedadintegrante']); ?>','64');
//control del boton ayuda
botonayuda();

});


function eliminarexplaboral(a)
    { //alert(a);
      $.ajax({
                          url: "fc_eliminarexplaboral",
                          type: "GET",
                          data: {vidintegrante : $('#idintegrante').val(),
                                 vidlabor : a},  
                               
                          dataType: "html",
                          success : function(obj)
                          {  
                             $('#datos2').html(obj);
                          //location.reload();
                         
                                                    
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
    }



function okguardar()
    {
    new jBox('Notice', {
        content: 'Tu informacion se Guardado!!!',
        color: 'green',
        animation: {open: 'tada', close: 'flip'},
        position: {x: 'right', y: 'center'},
        autoClose: 2000
    });
    }
    
    
    function validarguardarlabor()
{
   //alert($('.has-error').length);
   if($('.has-error').length === 0)
 
   {
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
    
    function validarbolitasytexto(div,campo)
{ 
   if(($('#'+ campo).val() === '') || ($('#'+ campo).val() === '0'))
  { 
      $('#' + div).removeClass('');
      $('#' + div).addClass('has-error');
  }
  else
  { 
      $('#' + div).removeClass('has-error');
      $('#' + div).addClass('');       
  }
//   validarguardar();   
   validarguardarlabor();
   validarguardarotro();
}



function validarguardarotro()
{
  
   
  if($('.has-error').length === 0 )
  {
      $('#guardarempresa').prop('disabled', false);
     
      //$('#cerrar').prop('disabled', false);
  }
  else
  {
      $('#guardarempresa').prop('disabled', true);
      //$('#cerrar').prop('disabled', true);
  }
  
  
}


function validaracordeon()
{
    if($('#ppc3p3ddiv').val() === '')
    {
        $('#ppc3p3ddiv2').removeClass('has-error');
        $('#ppc3p3ddiv3').removeClass('has-error');
        $('#ppc3p3ddiv4').removeClass('has-error');
        $('#ppc3p3ddiv5').removeClass('has-error');
        $('#ppc3p3ddiv6').removeClass('has-error');
        $('#ppc3p3ddiv7').removeClass('has-error');
        $('#ppc3p3ddiv8').removeClass('has-error');
        $('#ppc3p3ddiv9').removeClass('has-error');
        $('#ppc3p3ddiv10').removeClass('has-error');
    }
    
    else($('#ppc3p3ddiv').val() !== '')
    {
        $('#ppc3p3ddiv').removeClass('has-error');
        
    }
        
       
      
        
}


</script>
</html>