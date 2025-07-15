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
            
<!--head            -->
        <?php echo($head1); ?>
<!-- fin head            -->

                <div  class="row">
                    <div class="col-md-12">
                    <h6>Folio: <small><?php echo($folio); ?></small></h6>
                    <h6>Documento: <small><?php echo($tdatinte['tdoc']); ?></small></h6>
                    <h6>IDintegrante: <small><?php echo($tdatinte['tidintegrante']); ?></small></h6>
                    <h6>Nombre: <small><?php echo($tdatinte['tnombre']); ?></small></h6>
                    <p class="text-right"><small>Te encuentras en el capitulo <strong>1</strong> - Preguntas del <strong>1</strong> al <strong>12</strong>.</small></p>
                    </div>
                </div>
<!--para imprimir el folio y llevarlo-->
                        <input type="text" class="form-control input-sm" id="folio" name="folio" style="display: none" placeholder="Text input" value="<?php echo($folio); ?>">
                        <input type="text" class="form-control input-sm" id="idintegrante" name="idintegrante" style="display: none" placeholder="Text input" value="<?php echo($tdatinte['tidintegrante']); ?>">
<!--fin para imprimir el folio y llevarlo-->

                <form class="form-group" name="formulario" id="formulario">
<!--incio de campos de texto-->
                    <label>UBICACIÓN Y CONTROL</label><br>
                    <div class="row">
                    <div class="form-group col-md-6 form-group-sm">
                        <label for="c1p1">1 Departamento</label>
                        <input type="text" class="form-control input-sm" id="c1p1" name="c1p1" OnFocus="this.blur()"  value="Antioquia">
                    </div>
                    <div class="form-group col-md-6 form-group-sm">
                        <label for="c1p2">2 Municipio/Localidad</label>
                        <input type="text" class="form-control input-sm" id="c1p2" name="c1p2" OnFocus="this.blur()"  value="Medellin">
                    </div>    
                    </div>                    
<!--fin campo de texto-->

<!--opcion de seleccion-->
                    <div class="row">
                    <div id="c1p3div" name="c1p3div" <?php if($foexiste['ec1p3']==''){echo('class="form-group col-md-6 form-group-sm has-error"');}else{echo('class="form-group col-md-6 form-group-sm"');}?>>   
                        <label class="control-label" for="c1p3">3 Estrato</label>
                        <select class="form-control input-sm" id="c1p3" name="c1p3" onchange="validarbolitasytexto('c1p3div','c1p3');">
                            <?php if($foexiste['ec1p3']=="")
                                {
                                echo('<option value="">Seleccione una opción</option>');
                                }
                                else
                                {
                                echo('<option value="'.$foexiste['ec1p3'].'">'.$foexiste['eestadoc1p3'].'</option>');
                                }?>
                            
                            <?php echo($estratos); ?>
                        </select>
                    </div>
                    <div id="c1p4div" name="c1p4div" <?php if($foexiste['ec1p4']==''){echo('class="form-group col-md-6 form-group-sm has-error"');}else{echo('class="form-group col-md-6 form-group-sm"');}?>>   
                        <label class="control-label" for="c1p4">4 Comuna</label>
                        <select class="form-control input-sm" id="c1p4" name="c1p4" onchange="traebarrio()">
                            <?php if($foexiste['ec1p4']=="")
                                {
                                echo('<option value="">Seleccione una opción</option>');
                                }
                                else
                                {
                                echo('<option value="'.$foexiste['ec1p4'].'">'.$foexiste['ec1p4'].'</option>');
                                }?>
                            
                            <?php echo($comunas); ?>
                        </select>
                    </div>    
                    </div>
<!--fin de seleccion-->

<!--opcion de seleccion-->
                    <div class="row">
                   <div id="c1p5div" name="c1p5div" <?php if($foexiste['ec1p5']==''){echo('class="form-group col-md-12 form-group-sm has-error"');}else{echo('class="form-group col-md-12 form-group-sm"');}?>>
                       <label for="c1p6" class="control-label">5 Barrio</label>
                       <select class="form-control input-sm" id="c1p5" name="c1p5" disabled="" onchange="validarbolitasytexto('c1p5div','c1p5');">
                           <?php if($foexiste['ec1p5'] == "")
                               {
                               echo('<option value="">Seleccione una opción</option>');
                               }
                               else
                               {
                               echo('<option value="'.$foexiste['ec1p5'].'">'.$foexiste['eestadoc1p5'].'</option>');
                               }?>
                           
                           <?php echo($barrios); ?>
                       </select>
                   </div>
                   </div>
<!--fin de seleccion-->

<!--Inicio grupo c1p6 armar dirección-->
<!--opcion de seleccion-->
                    <label for="c1p6">6 Dirección de la vivienda</label>
                    <div class="row">
                    <div id="divc1p6a" name="divc1p6a" <?php if($foexiste['ec1p6']==''){echo('class="form-group col-md-3 form-group-sm has-error"');}else{echo('class="form-group col-md-3 form-group-sm"');}?>>   
                    <select class="form-control input-sm" id="c1p6a" name="c1p6a" onchange="validardireccion('divc1p6a','c1p6a');">
                            <option value="">Seleccione una opción</option>    
                            <option value="CL">Calle</option>
                            <option value="CR">Carrera</option>
                            <option value="AV">Avenida</option>
                            <option value="KLM">Kilómetro</option>
                            <option value="CI">Circular</option>
                            <option value="DI">Diagonal</option>
                            <option value="TV">Transversal</option>
                    </select> 
                    </div>
                            <div class="form-group col-md-1 form-group-sm">
                            <label> </label>
                            </div>
                    <div id="divc1p6b" name="divc1p6b" <?php if($foexiste['ec1p6']==''){echo('class="form-group col-md-1 form-group-sm has-error"');}else{echo('class="form-group col-md-1 form-group-sm"');}?>>   
                    <input type="text" class="form-control input-sm" id="c1p6b" name="c1p6b" onchange="validardireccion('divc1p6b','c1p6b');" onKeyPress="return soloNumeros(event)" maxlength="4" placeholder="" value="">
                    </div>
                        
                    <div class="form-group col-md-1 form-group-sm">
                    <input type="text" class="form-control input-sm" id="c1p6c" name="c1p6c" onchange="validardireccion();" onKeyPress="return soloLetras(event)" maxlength="4" placeholder="" value="">
                    </div>
                    </div>
                    
                    <div class="row">
                    <div class="form-group col-md-3 form-group-sm">
                    <select class="form-control input-sm" id="c1p6d" name="c1p6d" onchange="validardireccion();">
                            <option value="">Seleccione una opción</option>
                            <option value="Norte">Norte</option>
                            <option value="Sur">Sur</option>
                            <option value="Este">Este</option>
                            <option value="Oeste">Oeste</option>
                    </select> 
                    </div>
                    
                    <div class="form-group col-md-1 form-group-sm">
                    <label>#</label>
                    </div>
                    <div id="divc1p6e" name="divc1p6e" <?php if($foexiste['ec1p6']==''){echo('class="form-group col-md-1 form-group-sm has-error"');}else{echo('class="form-group col-md-1 form-group-sm"');}?>>   
                    <input type="text" class="form-control input-sm" id="c1p6e" name="c1p6e" onchange="validardireccion('divc1p6e','c1p6e');" onKeyPress="return soloNumeros(event)" maxlength="4" placeholder="" value="">
                    </div>
                        
                    <div class="form-group col-md-1 form-group-sm">
                    <input type="text" class="form-control input-sm" id="c1p6f" name="c1p6f" onchange="validardireccion();" onKeyPress="return soloLetras(event)" maxlength="4" placeholder="" value="">
                    </div>
                    </div>
                    
                    <div class="row">
                    <div class="form-group col-md-3 form-group-sm">
                    <select class="form-control input-sm" id="c1p6g" name="c1p6g" onchange="validardireccion();">
                            <option value="">Seleccione una opción</option>
                            <option value="Norte">Norte</option>
                            <option value="Sur">Sur</option>
                            <option value="Este">Este</option>
                            <option value="Oeste">Oeste</option>
                    </select> 
                    </div>
                        
                    <div class="form-group col-md-1 form-group-sm">
                    <label>-</label>
                    </div>
                    <div id="divc1p6h" name="divc1p6h" <?php if($foexiste['ec1p6']==''){echo('class="form-group col-md-1 form-group-sm has-error"');}else{echo('class="form-group col-md-1 form-group-sm"');}?>>   
                    <input type="text" class="form-control input-sm" id="c1p6h" name="c1p6h" onchange="validardireccion('divc1p6h','c1p6h');" onKeyPress="return soloNumeros(event)" maxlength="4" placeholder="" value="">
                    </div>
                    
                    <div class="form-group col-md-1 form-group-sm">
                    <input type="text" class="form-control input-sm" id="c1p6i" name="c1p6i" onchange="validarc1p6i();" onKeyPress="return soloNumeros(event)" maxlength="4" placeholder="Interior" value="">
                    </div>
                    
                    <div id="divc1p6j" name="divc1p6j" <?php if($foexiste['ec1p6']==''){echo('class="form-group col-md-6 form-group-sm has-error"');}else{echo('class="form-group col-md-6 form-group-sm"');}?>>   
                    <input type="text" class="form-control input-sm" id="c1p6j" name="c1p6j" onchange="validardireccion('divc1p6j','c1p6j');" onKeyPress="return soloLetras(event)" placeholder="Observación" value="">
                    </div>    
                    </div>
<!--fin de seleccion-->
<!--incio de campo de texto-->
                    <div class="row">
                    <div id="c1p6div" name="c1p6div" class="form-group col-md-12 form-group-sm">   
                        <input type="text" class="form-control input-sm" id="c1p6" name="c1p6" placeholder="Dirección" DISABLED="" value="<?php echo($foexiste['ec1p6']); ?>">
                    </div>
                    </div>                    
<!--fin campo de texto-->
<!--Fin grupo c1p6 armar dirección-->

<!--incio de campos de texto-->
                    <div class="row">
                    <div id="c1p7div" name="c1p7div" <?php if($foexiste['ec1p7']==''){echo('class="form-group col-md-6 form-group-sm has-error"');}else{echo('class="form-group col-md-6 form-group-sm"');}?>>   
                        <label class="control-label" for="c1p7">7 Teléfono fijo/celular</label>
                        <input type="text" class="form-control input-sm" id="c1p7" name="c1p7" onKeyPress="return soloNumeros(event)" onblur="validarcantdigitosfijo('c1p7','c1p7div')" maxlength="10" value="<?php echo($foexiste['ec1p7']); ?>">
                    </div>
                    <div id="c1p8div" name="c1p8div" <?php if($foexiste['ec1p8']==''){echo('class="form-group col-md-6 form-group-sm has-error"');}else{echo('class="f6orm-group col-md-6 form-group-sm"');}?>>   
                        <label class="control-label" for="c1p8">8 Teléfono celular</label>
                        <input type="text" class="form-control input-sm" id="c1p8" name="c1p8" onKeyPress="return soloNumeros(event)" onblur="validarcantdigitos('c1p8',10,'c1p8div')" maxlength="10" value="<?php echo($foexiste['ec1p8']); ?>">
                    </div>    
                    </div>                    
<!--fin campo de texto-->

<!--incio de campos de texto-->
                    <div class="row">
                    <div id="c1p9div" name="c1p9div" <?php if($foexiste['ec1p9']==''){echo('class="form-group col-md-6 form-group-sm has-error"');}else{echo('class="form-group col-md-6 form-group-sm"');}?>>   
                        <label class="control-label" for="c1p9">9 Nombre de un contacto</label>
                        <input type="text" class="form-control input-sm" id="c1p9" name="c1p9" onKeyPress="return soloLetras(event)" onchange="validarbolitasytexto('c1p9div','c1p9');"  value="<?php echo($foexiste['ec1p9']); ?>">
                    </div>
                    
                    <div id="c1p10div" name="c1p10div" <?php if($foexiste['ec1p10']==''){echo('class="form-group col-md-6 form-group-sm has-error"');}else{echo('class="form-group col-md-6 form-group-sm"');}?>>   
                        <label class="control-label" for="c1p10">10 Parentesco o relación del contacto</label>
                        <select class="form-control input-sm" id="c1p10" name="c1p10" onchange="validarbolitasytexto('c1p10div','c1p10');">
                            <?php if($foexiste['ec1p10']=="")
                                {
                                echo('<option value="">Seleccione una opción</option>');
                                }
                                else
                                {
                                echo('<option value="'.$foexiste['ec1p10'].'">'.$foexiste['eestadoc1p10'].'</option>');
                                }?>
                            
                            <?php echo($relcont); ?>
                        </select>
                    </div>    
                        
                        
                        
                    </div>                    
<!--fin campo de texto-->

<!--incio de campo de texto-->
                    <div class="row">
                    
                    <div id="c1p11div" name="c1p11div" <?php if($foexiste['ec1p11']==''){echo('class="form-group col-md-4 form-group-sm has-error"');}else{echo('class="form-group col-md-4 form-group-sm"');}?>>   
                        <label class="control-label" for="c1p11">11 Teléfono fijo/celular del contacto</label>
                        <input type="text" class="form-control input-sm" id="c1p11" name="c1p11" onchange="cambiarcontacto(this.value)" onKeyPress="return soloNumeros(event)"  onblur="validarcantdigitosfijo('c1p11','c1p11div')" maxlength="10" value="<?php echo($foexiste['ec1p11']); ?>">
                    </div>

                    <div id="c1p11adiv" name="c1p11adiv" <?php if($foexiste['ec1p11a']==''){echo('class="form-group col-md-4 form-group-sm has-error"');}else{echo('class="form-group col-md-4 form-group-sm"');}?>>   
                        <label class="control-label" for="c1p11a">11a Celular del contacto</label>
                        <input type="text" class="form-control input-sm" id="c1p11a" name="c1p11a" onchange="cambiarcontacto2(this.value)" onKeyPress="return soloNumeros(event)"  onblur="validarcantdigitos('c1p11a',10,'c1p11adiv')" maxlength="10" value="<?php echo($foexiste['ec1p11a']); ?>">
                    </div>    
                        
                    <div id="c1p12div" name="c1p12div" <?php if($foexiste['ec1p12']==''){echo('class="form-group col-md-4 form-group-sm has-error"');}else{echo('class="form-group col-md-4 form-group-sm"');}?>>   
                        <label class="control-label" for="c1p12">12 Persona responsable que brinda la información</label>
                        <input type="text" class="form-control input-sm" id="c1p12" name="c1p12" onKeyPress="return soloLetras(event)" onchange="validarbolitasytexto('c1p12div','c1p12');"  value="<?php echo($foexiste['ec1p12']); ?>">
                    </div>
                    </div>                    
<!--fin campo de texto-->
<br>    

            <div class="row">
            <div id="c1p13div" name="c1p13div" <?php if($foexiste['ec1p13']==''){echo('class="form-group col-md-12 form-group-sm has-error"');}else{echo('class="form-group col-md-12 form-group-sm"');}?>>   
                <label class="control-label">13. Elija clasificación del hogar: orientado al acompañamiento diferencial (Unica respuesta) 
<!--                    <button type="button" id="vayuda" name="vayuda" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModal">
                        <span class="glyphicon glyphicon-question-sign" aria-hidden="true"></span> Ayuda
                    </button>-->
                </label>
                <div class="radio">
                    <label><!--en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="c1p13" id="c1p13" onclick="colocaropcionc1p13('c1p13o1','valorc1p13','c1p13div');" value="c1p13o1" <?php if($foexiste['ec1p13']=='c1p13o1'){echo('checked');}?>>
                        1. Hogar de clasificación general  (Corresponde a todos los posibles tipos de conformacion familiar diferentes a hogares unipersonales o solo integrados por personas mayores)
                    </label>
                </div>
<!--                <div class="radio">
                    <label>
                        <input type="radio" name="c1p13" id="c1p13" onclick="colocaropcionc1p13('c1p13o2','valorc1p13','c1p13div');" value="c1p13o2" <?php // if($foexiste['ec1p13']=='c1p13o2'){echo('checked');}?>>
                       2. Familia extensa
                    </label>             
                </div> 
                <div class="radio">
                    <label>
                        <input type="radio" name="c1p13" id="c1p13" onclick="colocaropcionc1p13('c1p13o3','valorc1p13','c1p13div');" value="c1p13o3" <?php // if($foexiste['ec1p13']=='c1p13o3'){echo('checked');}?>>
                       3. Familia ampliada
                    </label>             
                </div> 
                <div class="radio">
                    <label>
                        <input type="radio" name="c1p13" id="c1p13" onclick="colocaropcionc1p13('c1p13o4','valorc1p13','c1p13div');" value="c1p13o4" <?php // if($foexiste['ec1p13']=='c1p13o4'){echo('checked');}?>>
                       4. Familia extendida
                    </label>             
                </div> 
                <div class="radio">
                    <label>
                        <input type="radio" name="c1p13" id="c1p13" onclick="colocaropcionc1p13('c1p13o5','valorc1p13','c1p13div');" value="c1p13o5" <?php //  if($foexiste['ec1p13']=='c1p13o5'){echo('checked');}?>>
                       5. Familia simultánea 
                    </label>             
                </div> 
                <div class="radio">
                    <label>
                        <input type="radio" name="c1p13" id="c1p13" onclick="colocaropcionc1p13('c1p13o6','valorc1p13','c1p13div');" value="c1p13o6" <?php // if($foexiste['ec1p13']=='c1p13o6'){echo('checked');}?>>
                       6. Familia monoparental jefatura femenina
                    </label>             
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="c1p13" id="c1p13" onclick="colocaropcionc1p13('c1p13o7','valorc1p13','c1p13div');" value="c1p13o7" <?php // if($foexiste['ec1p13']=='c1p13o7'){echo('checked');}?>>
                       7. Familia monoparental jefatura masculina
                    </label>             
                </div> 
                <div class="radio">
                    <label>
                        <input type="radio" name="c1p13" id="c1p13" onclick="colocaropcionc1p13('c1p13o8','valorc1p13','c1p13div');" value="c1p13o8" <?php // if($foexiste['ec1p13']=='c1p13o8'){echo('checked');}?>>
                       8. Familia homoparental
                    </label>             
                </div> 
                <div class="radio">
                    <label>
                        <input type="radio" name="c1p13" id="c1p13" onclick="colocaropcionc1p13('c1p13o9','valorc1p13','c1p13div');" value="c1p13o9" <?php // if($foexiste['ec1p13']=='c1p13o9'){echo('checked');}?>>
                       9. Familia fraterna
                    </label>             
                </div> 
                <div class="radio">
                    <label>
                        <input type="radio" name="c1p13" id="c1p13" onclick="colocaropcionc1p13('c1p13o10','valorc1p13','c1p13div');" value="c1p13o10" <?php //if($foexiste['ec1p13']=='c1p13o10'){echo('checked');}?>>
                       10. Hogar multipersonal
                    </label>             
                </div> 
                <div class="radio">
                    <label>
                        <input type="radio" name="c1p13" id="c1p13" onclick="colocaropcionc1p13('c1p13o11','valorc1p13','c1p13div');" value="c1p13o11" <?php //if($foexiste['ec1p13']=='c1p13o11'){echo('checked');}?>>
                       11. Hogar comunitario 
                    </label>             
                </div> 
                <div class="radio">
                    <label>
                        <input type="radio" name="c1p13" id="c1p13" onclick="colocaropcionc1p13('c1p13o12','valorc1p13','c1p13div');" value="c1p13o12" <?php //if($foexiste['ec1p13']=='c1p13o12'){echo('checked');}?>>
                       12. Pareja sin hijos
                    </label>             
                </div>-->
                <div class="radio">
                    <label>
                        <input type="radio" name="c1p13" id="c1p13" onclick="colocaropcionc1p13('c1p13o13','valorc1p13','c1p13div');" value="c1p13o13" <?php if($foexiste['ec1p13']=='c1p13o13'){echo('checked');}?>>
                       2. Hogar conformado solo por persona mayor (Corresponde a los hogares en los cuales el integrante o los integrantes que lo conforman tienen 50 años o mas)
                    </label>             
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="c1p13" id="c1p13" onclick="colocaropcionc1p13('c1p13o14','valorc1p13','c1p13div');" value="c1p13o14" <?php if($foexiste['ec1p13']=='c1p13o14'){echo('checked');}?>>
                       3. Hogar unipersonal (Hogar conformado por un solo integrante)
                    </label>             
                </div> 
                          
                
                <input type="text" class="form-control" id="valorc1p13" name="valorc1p13" style="display:none"  value="<?php echo($foexiste['ec1p13']); ?>">
            </div>
            </div>

<!--      <div class="row">
        <div id="c1p14div" name="c1p14div" class="form-group col-md-12 form-group-sm">
        <div id="c1p14o0div" class="">
        <label class="control-label">14. Luego de señalar la conformación familiar, seleccione para el enfoque diferencial con relación al tiempo del Acompañamiento Familiar que tendrá el hogar: (Seleccionar de las siguientes dos opciones, no excluye el diligenciamiento de la conformación anterior (Multiple respuesta)
                     <button type="button" id="vayuda" name="vayuda" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModal">
                        <span class="glyphicon glyphicon-question-sign" aria-hidden="true"></span> Ayuda
                    </button>       
        </label>
        </div>
        <div id="c1p14o1div" <?php // if($foexiste['ec1p14o1']=='' || $foexiste['ec1p14o1']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
            <label> en este caso se manda a la fincion javascript el nombre del campo
              <input type="checkbox" name="c1p14o1" id="c1p14o1" onclick="cambiarsinoc1p14('SI','c1p14o1','c1p14o1div','c1p14div',2);" <?php // if($foexiste['ec1p14o1']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            Hogar sólo Adulto Mayor
            </label>
        </div>
        </div>
        <div id="c1p14o2div" <?php // if($foexiste['ec1p14o2']=='' || $foexiste['ec1p14o2']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="c1p14o2" id="c1p14o2" onclick="cambiarsinoc1p14('SI','c1p14o2','c1p14o2div','c1p14div',2);" <?php // if($foexiste['ec1p14o2']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
             Hogar unipersonal
          </label>
        </div>
        </div>
          
           
        </div>
          
      </div> -->








<!--inicio botonera guardar y actualizar NO SE TOCA-->

                            <?php if($foexiste['efolio']=="")//NO SE TOCA bonotes si es nuevo folio
                                {
                                echo($botonerag);
                                }
                                else
                                {
                                echo($botoneraa);//NO SE TOCA bonotes si es para actualizar folio
                                }?>   

<!--Fin botonera guardar y actualizar NO TOCAR-->

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
function validardireccion(div,campo)
{
    
 if(($('#'+ campo).val() == ''))
   { 
       $('#' + div).addClass('has-error');
   }
   else
   { 
       $('#' + div).removeClass('has-error');
   }
   /////////////////////////////////////////////////////  
   if(($('#c1p6j').val() !== ''))
   { 
       $('#divc1p6j').removeClass('has-error');
       $('#divc1p6a').removeClass('has-error');
       $('#divc1p6b').removeClass('has-error');
       $('#divc1p6e').removeClass('has-error');
       $('#divc1p6h').removeClass('has-error');
   }
   else if(($('#c1p6a').val() == '')&&($('#c1p6b').val() == '')&&($('#c1p6e').val() == '')&&($('#c1p6h').val() == ''))
       {    
            $('#divc1p6j').addClass('has-error');
            $('#divc1p6a').addClass('has-error');
            $('#divc1p6b').addClass('has-error');
            $('#divc1p6e').addClass('has-error');
            $('#divc1p6h').addClass('has-error');
       }
   else if(($('#c1p6j').val() == ''))
   { 
       if(($('#c1p6a').val() == ''))
       {
            $('#divc1p6a').addClass('has-error');
       }
       else
       {
            $('#divc1p6a').removeClass('has-error');
            $('#divc1p6j').removeClass('has-error');
       }   
       if(($('#c1p6b').val() == ''))
       {    
       $('#divc1p6b').addClass('has-error');
       }
       else
       {
            $('#divc1p6b').removeClass('has-error');
            $('#divc1p6j').removeClass('has-error');
       }
       if(($('#c1p6e').val() == ''))
       {
       $('#divc1p6e').addClass('has-error');
       }
       else
       {
            $('#divc1p6e').removeClass('has-error');
            $('#divc1p6j').removeClass('has-error');
       }
       if(($('#c1p6h').val() == ''))
       {    
       $('#divc1p6h').addClass('has-error');
       }
       else
       {
            $('#divc1p6h').removeClass('has-error');
            $('#divc1p6j').removeClass('has-error');
       }
       
    }
  llenarotrocampo();
}  
function insertaradultounipersonal()
{
 
                 if($('#valorc1p13').val() === 'c1p13o14' || $('#valorc1p13').val() === 'c1p13o13' )
                  {             
                          $.ajax({
                            url: "../c_c1p1ap12/fc_unipersonal",
                            type: "GET",
                            data: {vfolio : $('#folio').val()},
                            dataType: "html",
                            success : function(obj)
                            {
                           //location.href = "../c_capituloshogar/fc_capituloshogar?folio="+ $('#folio').val() +"&idintegrante="+$('#idintegrante').val();                
                            }
                           });
 
               }
               else 
                   
//        (($('#valorc1p13').val() !== 'c1p13o1'))
               {              
                            $.ajax({
                            url: "../c_c1p1ap12/fc_unipersonalborrar",
                            type: "GET",
                            data: {vfolio : $('#folio').val()},
                            dataType: "html",
                            success : function(obj)
                            {
                            //location.href = "../c_capituloshogar/fc_capituloshogar?folio="+ $('#folio').val() +"&idintegrante="+$('#idintegrante').val();                   
                            }
                           });

               }

}
function colocaropcionc1p13(opcion,campoval,divcampo)
{
    //alert(opcion);
    $('#' + campoval).val(opcion);
    validarbolitasytexto(divcampo,campoval);
}
//de aca para arriba es logica de bolas y textos
//dea aca para abajo es logica de cuadros
function cambiarsinoc1p14(opcion,campoval,divcampo,divcompleto,campos)
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
     
      validarcuadrosc1p14(divcompleto,campos);
}    
    
function validarcuadrosc1p14(divcuadro,ncampos)
{
    //alert($('#' + divcuadro).find('input').prop('checked', true).length);
    //alert($('.has-error').length);
    if($('.has-error').length === (ncampos))
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
    
    
//habilitar boton guardar
function validarguardar()
{
  //alert($('.has-error').length);
   if($('.has-error').length === 0)
   {
       $('#guardar').prop('disabled', false);
       $('#actualizar').prop('disabled', false);
       $('#cancelar').prop('disabled', false);
       $('#anterior').prop('disabled', true);
       $('#siguiente').prop('disabled', true);       
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

//validar bolitas

function validarbolitasytexto(div,campo)
{ 
   if(($('#'+ campo).val() === '') || ($('#'+ campo).val() === '0') || ($('#'+ campo).val() === '   #  -  | ') ) 
  { 
      $('#' + div).removeClass('form-group col-md-10 form-group-sm');
      $('#' + div).addClass('form-group col-md-10 form-group-sm has-error');
  }
  else
  { 
      $('#' + div).removeClass('form-group col-md-10 form-group-sm has-error');
      $('#' + div).addClass('form-group col-md-10 form-group-sm');       
  }
   validarguardar();   
}
// Fin validar bolitas 

//VALIDACIOND DE CANTIDAD DE DIGITOS
function validarcantdigitosfijo(campo,divcam)
{
    if(($('#' + campo).val().length != '7') && ($('#' + campo).val().length != '10'))
    {
        $('#' + campo).val('');
        okcantidaddigitos('7 ó 10');
        $('#' + campo).focus();
        validarbolitasytexto(divcam,campo);
    }
    else
    {
        validarbolitasytexto(divcam,campo);
    }
    
}


//VALIDACIOND DE CANTIDAD DE DIGITOS
    function validarcantdigitos(campo,canti,divcam)
{
    
    if($('#' + campo).val().length !== canti)
    {
        $('#' + campo).val('');
        okcantidaddigitos(canti);
        $('#' + campo).focus();
        validarbolitasytexto(divcam,campo);
    }
    else
    {
        validarbolitasytexto(divcam,campo);
    }
}
//esta es la caja para mostar el mensaje de numero de caracteres
    function okcantidaddigitos(canti)
    {
    new jBox('Notice', {
        content: 'Solo aceptan ' + canti +'  digitos!!! vuelve a digitar',
        color: 'black',
        animation: {open: 'tada', close: 'flip'},
        position: {x: 'right', y: 'center'},
        autoClose: 2000
    });
    }
//FIN VALIDACIOND DE CANTIDAD DE DIGITOS....

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
        color: 'black',
        animation: {open: 'tada', close: 'flip'},
        position: {x: 'right', y: 'center'},
        autoClose: 2000
    });
    }

 //FIN DE VALIDACION NUMEROS Y LETRAS
    
    function traebarrio()
    {
        validarbolitasytexto('c1p4div','c1p4')
        //alert($('#c1p4').val());
            
                $.ajax({
                  url: "fc_traerbarrios",
                  type: "GET",
                  data: {vidcomuna : $('#c1p4').val()},
                  dataType: "html",
                  success : function(obj){                      
                      $('#c1p5').html(obj);
                  }
                });
                
             $('#c1p5').prop('disabled', false);   
    }
///////////////////////////////////////Funciones para opcion multiple o unica////////////////////////////////////////////////////////////////////////    
    function validarc1p6i(){
        if ($('#c1p6i').val() !== ''){
        $('#c1p6i').val("Interior"+" "+$('#c1p6i').val());    
        }
        llenarotrocampo();
    }
    
    function llenarotrocampo()
    {
        //alert('text');
        $('#c1p6').val($('#c1p6a').val() + " " + $('#c1p6b').val() + " " + $('#c1p6c').val()+ " " + $('#c1p6d').val()+ "#" + $('#c1p6e').val()+ " " + $('#c1p6f').val()+ " " + $('#c1p6g').val()+ "-" + $('#c1p6h').val()+ " " + $('#c1p6i').val()+ "||"+ " "+$('#c1p6j').val());
       validarbolitasytexto('c1p6div','c1p6') 
    }

//esta funcion nos permite guardar el valor de una opcion de seleccion multiple
    function cambiarsinoc5p3(campo)
    {
        //alert(campo);
        if($('#' + campo).val() === 'no')
        {
            $('#' + campo).val('si');
        }
        else
        {
            $('#' + campo).val('no');
        }
        validarguardar()
        //alert($('#' + campo).val());
    }
    //fin funcion nos permite guardar el valor de una opcion de seleccion multiple
    
    
///////////////////////////////////////FIN Funciones para opcion multiple o unica////////////////////////////////////////////////////////////////////////    
    
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
        color: 'red',
        animation: {open: 'tada', close: 'flip'},
        position: {x: 'right', y: 'center'},
        autoClose: 2000
    });
    }
    
     function telefono()
    {
    new jBox('Notice', {
        content: 'Los números del contacto no pueden ser igual al los números del integrante',
        color: 'red',
        animation: {open: 'tada', close: 'flip'},
        position: {x: 'right', y: 'center'},
        autoClose: 4000
    });
    }
    
//    funcion que compara el numero de integrante con el del contacto
    function cambiarcontacto(opcion)
{
    if ($('#c1p7').val() == opcion)
    {
       
    $('#c1p11').val('');
    telefono();
}
    }
    
    
   //    funcion que compara el numero de celular del integrante con el del contacto 
        function cambiarcontacto2(opcion)
{
    if ($('#c1p8').val() == opcion)
    {
       
    $('#c1p11a').val('');
    telefono();
}
    }
 
    //fin funcion que generar el mensaje de guardado
///////////////////////////////////////FIN Funciones que llaman a los mensajitos para guardar y actualizar////////////////////////////////////////////////////////////////////////    

///////////////////////////////////////Funciones que llaman al controlador para guardar y actualizar////////////////////////////////////////////////////////////////////////    
    $(document).ready(function()
    {
                //esta funcion es para guardar
                $("#guardar").click(function ()
                {
                   // alert('text');
                        $.ajax({
                          url: "fc_insertar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(), vc1p1: $('#c1p1').val(), vc1p2: $('#c1p2').val(), vc1p3: $('#c1p3').val(),
                              vc1p4: $('#c1p4').val(), vc1p5: $('#c1p5').val(), 
                              vc1p6: $('#c1p6').val(), vc1p7: $('#c1p7').val(),vc1p8: $('#c1p8').val(),
                              vc1p9: $('#c1p9').val(),vc1p10: $('#c1p10').val(),vc1p11: $('#c1p11').val(),
                              vc1p11a: $('#c1p11a').val(),vc1p12: $('#c1p12').val(),
                              vc1p13: $('#valorc1p13').val()},
                          dataType: "html",
                          success : function(obj){                      
                          okguardar();
                          insertaradultounipersonal();
 ////me llama el mensajito de guardar
                            //$('#datos').html(obj);
                          //location.reload();
                        $('#cerrar').show(1000);  
                        $('#actualizar').show(1000);
                        $('#guardar').hide(1000);
                          }
                        });                    
                });
                //fin de la funcion guardar
                //
                //esta funcion es para actualizar
                $("#actualizar").click(function ()
                {
                   // alert('juapis');
                        $.ajax({
                          url: "fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(), vidintegrante : $('#idintegrante').val(), vc1p1: $('#c1p1').val(), vc1p2: $('#c1p2').val(), vc1p3: $('#c1p3').val(), vc1p4: $('#c1p4').val(), vc1p5: $('#c1p5').val(), vc1p6: $('#c1p6').val(), vc1p7: $('#c1p7').val(),vc1p8: $('#c1p8').val(),vc1p9: $('#c1p9').val(),vc1p10: $('#c1p10').val(),vc1p11: $('#c1p11').val(),vc1p11a: $('#c1p11a').val(),vc1p12: $('#c1p12').val(),vc1p13: $('#valorc1p13').val()},
                          dataType: "html",
                          success : function(obj){                      
                          okactualizar();
                          insertaradultounipersonal();
                          ////me llama el mensajito de actualizar
                            //$('#datos').html(obj);
                            $('#siguiente').show(1000);
                             $('#siguiente').prop('disabled', false);
                            $('#anterior').prop('disabled', false);
                            $('#actualizar').prop('disabled', true);
                            $('#cancelar').prop('disabled', true);
                          }
                        });                    
                });
                //fin de la funcion actualizar

                $("#cerrar").click(function()
                {
                   // alert('juapis');
                        $.ajax({
                          url: "fc_cerrarcapitulo",
                          type: "GET",
                          data: {vfolio: $('#folio').val(), close: 1},
                          dataType: "html",
                          success: function(obj) {
                          //me llama el mensajito de actualizar
                          //$('#datos').html(obj);
                        location.href = "../c_capituloshogar/fc_capituloshogar?folio="+ $('#folio').val() +"&idintegrante="+$('#idintegrante').val();                  
                        }
                       });
                                            });

                //esta funcion es para siguiente
                //si las preguntas son por hogar mandar idintegrante en 0
                $("#siguiente").click(function ()
                {
                    
                location.href = "../c_capituloshogar/fc_capituloshogar?folio="+ $('#folio').val() +"&idintegrante="+$('#idintegrante').val();                
              
                });
                //fin de la funcion siguiente
                
                //esta funcion es para atras
                //si las preguntas son por hogar mandar idintegrante en 0                
                $("#anterior").click(function ()
                {
                   // alert('juapis');
                location.href = "../c_capituloshogar/fc_capituloshogar?folio="+ $('#folio').val() +"&idintegrante="+$('#idintegrante').val();                  
                });
                //fin de la funcion atras
                
               //NO TOCAR - voler a capitulos                
                $("#capitulos").click(function ()
                {
                   // alert('juapis');
                location.href = "../c_capituloshogar/fc_capituloshogar?folio="+ $('#folio').val() +"&idintegrante="+$('#idintegrante').val();                  
                });
                //fin voler a capitulos                      
                                    
    });
/////////////////////////////////////// FIN Funciones que llaman al controlador para guardar y actualizar////////////////////////////////////////////////////////////////////////        

//if ($('#valorc1p13').val() === '' || $('#valorc1p13').val() === 0)
//{
//   $('#siguiente').hide(1000);
//}
//else
//{
//   $('#siguiente').show(1000);
//}



</script>
</html>