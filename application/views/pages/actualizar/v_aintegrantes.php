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
            <?php echo($head44); ?>
<!-- fin head            -->

                <!--<div  class="row">
                    <div class="col-md-10">
                    <h6>Folio: <small><?php echo($folio); ?></small></h6>
                    <h6>Documento: <small><?php echo($tdatinte['tdoc']); ?></small></h6>
                    <h6>IDintegrante: <small><?php echo($tdatinte['tidintegrante']); ?></small></h6>
                    <h6>Nombre: <small><?php echo($tdatinte['tnombre']); ?></small></h6>
                    <p class="text-right"><small>Te encuentras en el capitulo <strong>4. CARACTERISTICAS GENERALES (Integrantes)</strong></small></p><br>
                    <?php echo($dtitular['tidintegrantetitular']); ?>
                </div>
                </div><br>-->
<!--para imprimir el folio y llevarlo-->
                        <input type="text" class="form-control input-sm" id="doccogestor" name="doccogestor" style="display: none" placeholder="Text input" value="<?php echo($doccogestor); ?>">
                        <input type="text" class="form-control input-sm" id="folio" name="folio" style="display: none" placeholder="Text input" value="<?php echo($folio); ?>">
                        <input type="text" class="form-control input-sm" id="idtitular" style="display: none" name="idtitular" placeholder="Text input" value="<?php echo($dtitular['tidintegrantetitular']); ?>">
                        <input type="text" class="form-control input-sm" id="idintegrante" style="display: none" name="idintegrante" placeholder="Text input" value="<?php echo($tdatinte['tidintegrante']); ?>">
                        <input type="text" class="form-control input-sm" id="idint" name="idint" style="display: none" placeholder="Text input" value="<?php echo($idintegrante); ?>">
<!--fin para imprimir el folio y llevarlo-->

                <form class="form-group col-lg-12" name="formulario" id="formulario"><br><br>
<!--opcion de seleccion-->
                    <div class="row">
                    <div   id="tdocumentoodiv" name="tdocumentoodiv" <?php if($foexiste['etipodocumento']==''){echo('class="form-group col-md-4 form-group-sm has-error"');}else{echo('class="form-group col-md-4 form-group-sm"');}?>>
                        <label class="control-label" for="tdocumento">Tipo de Identificación</label>
                        <select class="form-control input-sm" onchange="habilitarnacionalidad('tdocumentoodiv','tdocumento')" id="tdocumento" name="tdocumento">
                            <?php if($foexiste['etipodocumento']=="")
                                {
                                echo('<option value="">Seleccione una opcion</option>');
                                }
                                else
                                {
                                echo('<option value="'.$foexiste['etipodocumento'].'">'.$foexiste['etipodocumento'].'</option>');
                                }?>
                            
                            <?php echo($datos); ?>
                        </select>
                    </div>

                    <div class="form-group col-md-4 form-group-sm" id="nacionalidaddiv" name="nacionalidaddiv" <?php if($foexiste['enacionalidad']==''){echo('style="display: none"' );}else{echo('style="display: "');} ?>>
                    <label class="control-label">Nacionalidad</label>
                        <select class="form-control input-sm" onchange="validarbolitasytexto('nacionalidaddiv','nacionalidadv')" id="nacionalidadv" name="nacionalidadv">
                            <?php if($foexiste['enacionalidad']=="")
                                {
                                echo('<option value="">Seleccione una opcion</option>');
                                }
                                else
                                {
                                echo('<option value="'.$foexiste['enacionalidad'].'">'.$foexiste['enacionalidad'].'</option>');
                                }?>
                            
                            <?php echo($paises); ?>
                        </select>
                </div>

                       <div  id="ndocumentodiv" name="ndocumentodiv" <?php if($foexiste['etipodocumento']=='No tiene'){echo('class="form-group col-md-4 form-group-sm" style="display: none"');}else if($foexiste['edocumento']==''){echo('class="form-group col-md-4 form-group-sm has-error"');}else{echo('class="form-group col-md-4 form-group-sm"');}?>>
                       <label class="control-label">Número de Documento</label>
                       <input type="text" class="form-control input-sm" id="ndocumento"  onchange="validarbolitasytexto('ndocumentodiv','ndocumento')" name="ndocumento" onkeypress="return soloNumeros(event)"  placeholder="Numero de documento" value="<?php echo($foexiste['edocumento']); ?>">
                       </div>
            </div>
            <br>   

                    <div class="row">
                       <div  id="pnombrediv"  name="pnombrediv" <?php if($foexiste['enombre1']==''){echo('class="form-group col-md-3 form-group-sm has-error"');}else{echo('class="form-group col-md-3 form-group-sm"');}?>>
                       <label class="control-label">Primer Nombre</label>
                       <input type="text" class="form-control input-sm"  onchange="validarbolitasytexto('pnombrediv','pnombre')"  id="pnombre" name="pnombre"  onkeypress="return soloLetras(event)" placeholder="Primer Nombre" value="<?php  echo($foexiste['enombre1']); ?>">
                       </div>
                       
                       <div  id="snombrediv" name="snombrediv" class="form-group col-md-3 form-group-sm">
                       <label class="control-label">Segundo Nombre</label>
                       <input type="text" class="form-control input-sm" on id="snombre" onchange="validarguardar()" name="snombre" onkeypress="return soloLetras(event)" placeholder="Segundo Nombre" value="<?php echo($foexiste['enombre2']); ?>">
                       </div>
                       
                       <div  id="papellidodiv" name="papellidodiv" <?php if($foexiste['eapellido1']==''){echo('class="form-group col-md-3 form-group-sm has-error"');}else{echo('class="form-group col-md-3 form-group-sm"');}?>>
                       <label class="control-label">Primer Apellido</label>
                       <input type="text" class="form-control input-sm" id="papellido" onchange="validarbolitasytexto('papellidodiv','papellido')" name="papellido" onkeypress="return soloLetras(event)" placeholder="Primer Apellido" value="<?php echo($foexiste['eapellido1']); ?>">
                       </div>
                       
                       <div  id="sapellidodiv" name="sapellidodiv" class="form-group col-md-3 form-group-sm">
                       <label class="control-label">Segundo Apellido</label>
                       <input type="text" class="form-control input-sm" onchange="validarguardar()" id="sapellido" name="sapellido" onkeypress="return soloLetras(event)" placeholder="Segundo Apellido" value="<?php echo($foexiste['eapellido2']); ?>">
                       </div>
                   </div><br>
<!--fin de seleccion-->

    <div class="row">
        <div  id="fnacimientodiv" name="fnacimientodiv" <?php if($foexiste['efnacimiento']==''){echo('class="form-group col-md-2 form-group-sm has-error"');}else{echo('class="form-group col-md-2 form-group-sm"');}?>>
          
         <label class="control-label">Fecha de Nacimiento</label>
         <input type="date" class="form-control input-sm" id="fnacimiento" onchange="enviarnumjp()" name="fnacimiento" onblur="calcularfecha(this.value)" disabled=""  value="<?php  echo($foexiste['efnacimiento']); ?>">
        </div>
        
        <div  id="sexodiv" name="sexodiv" <?php if($foexiste['esexo']==''){echo('class="form-group col-md-2 form-group-sm has-error"');}else{echo('class="form-group col-md-2 form-group-sm"');}?>>
                        <label class="control-label" for="sexo">Sexo</label>
                        <select class="form-control input-sm" id="sexo" onchange="enviarnumjp('sexodiv','sexo')"   disabled="" name="sexo">
                            <?php if($foexiste['esexo']=="")
                                {
                                echo('<option value="">Seleccione una opcion</option>');
                                }
                                else
                                {
                                echo('<option value="'.$foexiste['esexo'].'">'.$foexiste['esexo'].'</option>');
                                }?>
                            
                            <?php echo($datos2); ?>
                        </select>
                     
                        <div>
                            <input type="text" id="enviarnum" name="enviarnum" style="display: none" value="">
                       </div>
                    </div>
        
        <div  id="edaddiv" name="edaddiv" class="form-group col-md-2 form-group-sm">
         <label class="control-label">Edad</label>
         <input type="text" class="form-control input-sm" id="edad"  onkeypress="return soloNumeros(event)" name="edad"onchange="validarbolitasytexto('edaddiv','edad')" placeholder="ingrese la edad" disabled="" value="<?php  echo($foexiste['eedad']); ?>">
         </div>
        
         <div  id="telefonodiv" name="telefonodiv" <?php if($foexiste['etelefono']==''){echo('class="form-group col-md-2 form-group-sm has-error"');}else{echo('class="form-group col-md-2 form-group-sm"');}?>>
         <label class="control-label">Teléfono fijo/celular</label>
         <input type="text" class="form-control input-sm" id="telefono" maxlength="10" onchange="validarcantdigitosfijo('telefono','telefonodiv')" name="telefono" onkeypress="return soloNumeros(event)" placeholder="ingrese número telefónico"   value="<?php  echo($foexiste['etelefono']); ?>">
         </div>
        
         <div  id="celulardiv" name="celulardiv" <?php if($foexiste['ecelular']==''){echo('class="form-group col-md-2 form-group-sm has-error"');}else{echo('class="form-group col-md-2 form-group-sm"');}?>>
         <label class="control-label">Celular</label>
         <input type="text" class="form-control input-sm" id="celular" maxlength="10" onchange="validarcantdigitos('celular',10,'celulardiv')" name="celular" onkeypress="return soloNumeros(event)"  placeholder="ingrese celular" value="<?php  echo($foexiste['ecelular']); ?>">
         </div>
        
         <div  id="correodiv" name="correodiv" class="form-group col-md-2 form-group-sm">
         <label class="control-label">Correo Electronico</label>
         <input type="email" class="form-control input-sm" id="correo" name="correo" placeholder="Ingrese correo electronico" onchange="validarbolitasytexto('correodiv','correo')" value="<?php  echo($foexiste['ecorreo']); ?>">
    </div>
    </div>
    <br>
    <!-- inicio nuevas variables -->            
    <div class="row">
                <div id="etniasdiv" name="etniasdiv" <?php if ($foexiste['eetnia'] == '') {
                echo ('class="form-group col-md-4 form-group-sm has-error"');
                } else {
                echo ('class="form-group col-md-4 form-group-sm"');
                } ?>>
                    <label class="control-label" for="etnias">Etnia</label>
                    <select class="form-control input-sm" onchange="validarbolitasytexto('etniasdiv','etnias');" id="etnias" name="etnias">
                        <?php if ($foexiste['eetnia'] == "") {
                            echo ('<option value="">Seleccione una opcion</option>');
                        } else {
                            echo ('<option value="' . $foexiste['eidetnia'] . '">' . $foexiste['eetnia'] . '</option>');
                        } ?>

                        <?php echo ($etnias); ?>
                    </select>
                </div>

                <div id="Osexualdiv" name="Osexualdiv" <?php if ($foexiste['eOrientacion_sexual'] == '') {
                echo ('class="form-group col-md-4 form-group-sm has-error"');
                } else {
                echo ('class="form-group col-md-4 form-group-sm"');
                } ?>>
                    <label class="control-label">Orientación Sexual</label>
                    <select class="form-control input-sm" onchange="validarbolitasytexto('Osexualdiv','Osexual')" id="Osexual" name="Osexual">
                        <?php if ($foexiste['eOrientacion_sexual'] == "") {
                            echo ('<option value="">Seleccione una opcion</option>');
                        } else {
                            echo ('<option value="' . $foexiste['eidosexual'] . '">' . $foexiste['eOrientacion_sexual'] . '</option>');
                        } ?>

                        <?php echo ($Osexual); ?>
                    </select>
                </div>

                <div id="Igenerodiv" name="Igenerodiv" <?php if ($foexiste['eIdentidad_genero'] == '') {
                echo ('class="form-group col-md-4 form-group-sm has-error"');
                } else {
                echo ('class="form-group col-md-4 form-group-sm"');
                } ?>>
                    <label class="control-label">Identidad de Género</label>
                    <select class="form-control input-sm" onchange="validarbolitasytexto('Igenerodiv','Igenero')" id="Igenero" name="Igenero">
                        <?php if ($foexiste['eIdentidad_genero'] == "") {
                            echo ('<option value="">Seleccione una opcion</option>');
                        } else {
                            echo ('<option value="' . $foexiste['eidigenero'] . '">' . $foexiste['eIdentidad_genero'] . '</option>');
                        } ?>

                        <?php echo ($Igenero); ?>
                    </select>
                </div>
<!-- fin nuevas variables -->
    </div>
    <br>
    <div id="estadointegrantediv" name="estadointegrantediv" >   
                <label class="control-label">Estado del Integrante</label>
                <div class="radio">
                    <label><!--en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="estadoint" id="estadoint1" <?php echo($disabled); ?> onclick="colocaropcionestadoint('1','valorestadoint','estadointegrantediv');" value="1" <?php if($foexiste['eestadointegrante']=='1'){echo('checked');}?>>
                        Activo
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="estadoint" id="estadoint2" <?php echo($disabled); ?> onclick="colocaropcionestadoint('6','valorestadoint','estadointegrantediv');" value="6" <?php if($foexiste['eestadointegrante']=='6'){echo('checked');}?>>
                        Inactivo
                    </label>             
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="estadoint" id="estadoint3" <?php echo($disabled); ?> disabled="" onclick="colocaropcionestadoint('5','valorestadoint','estadointegrantediv');" value="5" <?php if($foexiste['eestadointegrante']=='5'){echo('checked');}?>>
                        Inactivo por inactivacion del folio
                    </label>             
                </div>
                <input type="text" class="form-control" id="valorestadoint" style="display: none" name="valorestadoint" placeholder="Text input" value="<?php echo($foexiste['eestadointegrante']); ?>">
    </div>
      <div class="radio" id="estadointmotivodiv" name="estadointmotivodiv" <?php if($foexiste['eestadointegrante']=='1' || $foexiste['eestadointegrante']=='5'){echo('style="display: none"');}?>>
          <label><h4>Motivos de inactivacion</h4></label>
                <div class="radio">
                    <label>
                        <input type="radio" name="motivoint" id="motivoint1" onclick="colocaropcionmotivo('io1','valormotivoint','estadointmotivodiv');" value="io1" <?php if($foexiste['eintegranteactivomotivo']=='io1' || $foexiste['eintegranteactivomotivo']=='Doble titularidad'){echo('checked');}?>>
                        Fallecido
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="motivoint" id="motivoint2" onclick="colocaropcionmotivo('io2','valormotivoint','estadointmotivodiv');" value="io2" <?php if($foexiste['eintegranteactivomotivo']=='io2' || $foexiste['eintegranteactivomotivo']=='No ubicado'){echo('checked');}?>>
                        Desaparición
                    </label>             
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="motivoint" id="motivoint3" onclick="colocaropcionmotivo('io3','valormotivoint','estadointmotivodiv');" value="io3" <?php if($foexiste['eintegranteactivomotivo']=='io3' || $foexiste['eintegranteactivomotivo']=='Fuera de medellin'){echo('checked');}?>>
                        No residente habitual (carcel, Servicio militar)
                    </label>             
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="motivoint" id="motivoint4" onclick="colocaropcionmotivo('io4','valormotivoint','estadointmotivodiv');" value="io4" <?php if($foexiste['eintegranteactivomotivo']=='io4' || $foexiste['eintegranteactivomotivo']=='Retiro voluntario'){echo('checked');}?>>
                        No residente habitual (motivos laborales)
                    </label>             
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="motivoint" id="motivoint5" onclick="colocaropcionmotivo('io5','valormotivoint','estadointmotivodiv');" value="io5" <?php if($foexiste['eintegranteactivomotivo']=='io5' || $foexiste['eintegranteactivomotivo']=='No corresponsabilidad'){echo('checked');}?>>
                        Discapacidad (Movilidad y cognitiva severa, no mueve logros)
                    </label>             
                </div>
             <div class="radio">
                    <label>
                        <input type="radio" name="motivoint" id="motivoint6" onclick="colocaropcionmotivo('io6','valormotivoint','estadointmotivodiv');" value="io6" <?php if($foexiste['eintegranteactivomotivo']=='io6' || $foexiste['eintegranteactivomotivo']=='No corresponsabilidad'){echo('checked');}?>>
                        Genero nuevo nucleo familiar
                    </label>             
                </div>
            </div>
            <input type="text" class="form-control" id="valormotivoint" style="display: none" name="valormotivoint" placeholder="Text input" value="<?php echo($foexiste['eintegranteactivomotivo']); ?>">
<!--            </div>-->
            <div id="estadointobdiv" name="estadointobdiv" <?php if($foexiste['eestadointegrante']=='1' || $foexiste['eestadointegrante']=='5'){echo('style="display: none"');}?>>
            <label class="control-label">Observacion del motivo</label><br>
            <label>
            <input type="text" class="form-control" id="estadointob" name="estadointob" onKeyPress="return soloLetras(event)" size="100" onchange="validarbolitasytexto('estadointobdiv','estadointob')" placeholder="Observacion" value="<?php echo($foexiste['eintegranteactivoobs']); ?>">
            </label>
            </div>

<label class="col-lg-offset-4" style="color:#FF4000 " >Ingrese las redes sociales que tiene el integrante.</label><br><br>
<div class="row">
          <div  id="twitterdiv" name="twitterdiv" class="form-group col-md-3 form-group-sm">
         <label class="control-label">twitter</label>
         <input type="text" class="form-control input-sm" id="twitter" name="twitter" placeholder="@usuario" onchange="validarbolitasytexto('twitterdiv','twitter')" value="<?php echo($foexiste['etwitter']); ?>">
         </div>
        
         <div  id="facebookdiv" name="facebookdiv" class="form-group col-md-3 form-group-sm">
         <label class="control-label">facebook</label>
         <input type="text" class="form-control input-sm" id="facebook" name="facebook" placeholder="Ingrese facebook" onchange="validarbolitasytexto('facebookdiv','facebook')"  value="<?php echo($foexiste['efacebook']); ?>">
         </div> 
        
         <div  id="instagramdiv" name="instagramdiv" class="form-group col-md-3 form-group-sm">
         <label class="control-label">Instagram</label>
         <input type="text" class="form-control input-sm" id="instagram" name="instagram" onchange="validarbolitasytexto('instagramdiv','instagram')" placeholder="Ingrese instagram"  value="<?php  echo($foexiste['einstagram']); ?>">
         </div>
        
         <div  id="googlediv" name="googlediv" class="form-group col-md-3 form-group-sm">
             <label class="control-label">Google+</label>
             <input type="text" class="form-control input-sm" id="google" name="google"  onchange="validarbolitasytexto('googlediv','google')" placeholder="Ingrese google+"  value="<?php echo($foexiste['egoogle']); ?>">
         </div>
   
    </div><br> 

<!-- inicio nuevo perfil productivo -->
<div id="bloquePP"> 
<label style="color:#FF4000 " >Empleabilidad </label><br><br>
<div class="row">
                <div id="empleoactdiv" name="empleoactdiv" <?php if ($foexistepp['eempleado_actualmente'] == '') {
                echo ('class="form-group col-md-4 form-group-sm has-error"');
                } else {
                echo ('class="form-group col-md-4 form-group-sm"');
                } ?>>
                    <label class="control-label" for="empleoact">¿Está empleado actualmente?</label>
                    <select class="form-control input-sm" onchange="validarempleoact('empleoactdiv','empleoact');" id="empleoact" name="empleoact">
                        <?php if ($foexistepp['eempleado_actualmente'] == "") {
                            echo ('<option value="">Seleccione una opcion</option>');
                        } else {
                            echo ('<option value="' . $foexistepp['eid_ea'] . '">' . $foexistepp['eempleado_actualmente'] . '</option>');
                        } ?>
                        <?php echo ($SiNo); ?>
                    </select>
                </div>

                <div id="Cambiarempdiv" name="Cambiarempdiv" <?php if ($foexistepp['ecambiar_empleo'] == '') {
                echo ('class="form-group col-md-4 form-group-sm" style="display: none"');
                } else {
                echo ('class="form-group col-md-4 form-group-sm"');
                } ?>>
                    <label class="control-label">¿Está interesado en cambiar de empleo?</label>
                    <select class="form-control input-sm" onchange="validarbolitasytexto('Cambiarempdiv','Cambiaremp')" id="Cambiaremp" name="Cambiaremp">
                        <?php if ($foexistepp['ecambiar_empleo'] == "") {
                            echo ('<option value="">Seleccione una opcion</option>');
                        } else {
                            echo ('<option value="' . $foexistepp['eid_ce'] . '">' . $foexistepp['ecambiar_empleo'] . '</option>');
                        } ?>
                        <?php echo ($SiNo); ?>
                    </select>
                </div>

                <div  id="TiempoEmpleadodiv" name="TiempoEmpleadodiv" <?php if($foexistepp['etiempo_empleado']==''){echo('class="form-group col-md-4 form-group-sm" style="display: none"');}else{echo('class="form-group col-md-4 form-group-sm"');}?>>
                <label class="control-label">¿Hace cuántos meses está empleado (a)?</label>
                <input type="text" class="form-control input-sm" id="TiempoEmpleado" onchange="validarbolitasytexto('TiempoEmpleadodiv','TiempoEmpleado')" name="TiempoEmpleado" onkeypress="return soloNumeros(event)" maxlength="3" value="<?php  echo($foexistepp['etiempo_empleado']); ?>">
                </div>
                </div><br>
                
                <div class="row">
                <div id="TipoEdiv" name="TipoEdiv" <?php if ($foexistepp['etipo_empleo'] == '') {
                echo ('class="form-group col-md-4 form-group-sm" style="display: none"');
                } else {
                echo ('class="form-group col-md-4 form-group-sm"');
                } ?>>
                    <label class="control-label" for="TipoE">Tipo de empleo</label>
                    <select class="form-control input-sm" onchange="validarbolitasytexto('TipoEdiv','TipoE');" id="TipoE" name="TipoE">
                        <?php if ($foexistepp['etipo_empleo'] == "") {
                            echo ('<option value="">Seleccione una opcion</option>');
                        } else {
                            echo ('<option value="' . $foexistepp['eid_te'] . '">' . $foexistepp['etipo_empleo'] . '</option>');
                        } ?>

                        <?php echo ($TipoE); ?>
                    </select>
                </div>

                <div  id="TiempoDesEmpleadodiv" name="TiempoDesEmpleadodiv" <?php if($foexistepp['etiempo_desempleado']==''){echo('class="form-group col-md-4 form-group-sm" style="display: none"');}else{echo('class="form-group col-md-4 form-group-sm"');}?>>
                <label class="control-label">¿Hace cuántos meses está desempleado (a)?</label>
                <input type="text" class="form-control input-sm" id="TiempoDesEmpleado" onchange="validarbolitasytexto('TiempoDesEmpleadodiv','TiempoDesEmpleado')" name="TiempoDesEmpleado" onkeypress="return soloNumeros(event)" maxlength="3" value="<?php  echo($foexistepp['etiempo_desempleado']); ?>">
                </div>

                <div id="BarreraAdiv" name="BarreraAdiv" <?php if ($foexistepp['ebarrera_acceso'] == '') {
                echo ('class="form-group col-md-4 form-group-sm" style="display: none"');
                } else {
                echo ('class="form-group col-md-4 form-group-sm"');
                } ?>>
                    <label class="control-label">Barrera de acceso:</label>
                    <select class="form-control input-sm" onchange="validarbolitasytexto('BarreraAdiv','BarreraA')" id="BarreraA" name="BarreraA">
                        <?php if ($foexistepp['ebarrera_acceso'] == "") {
                            echo ('<option value="">Seleccione una opcion</option>');
                        } else {
                            echo ('<option value="' . $foexistepp['eid_ba'] . '">' . $foexistepp['ebarrera_acceso'] . '</option>');
                        } ?>

                        <?php echo ($BarreraA); ?>
                    </select>
                </div>
                </div><br>
<label style="color:#FF4000 " >Educación </label><br><br>                
<div class="row">
                <div id="ActualmenteEstdiv" name="ActualmenteEstdiv" <?php if ($foexistepp['eactualmente_estudiando'] == '') {
                echo ('class="form-group col-md-12 form-group-sm has-error"');
                } else {
                echo ('class="form-group col-md-12 form-group-sm"');
                } ?>>
                    <label class="control-label" for="ActualmenteEst">Actualmente está estudiando</label>
                    <select class="form-control input-sm" onchange="validarbolitasytextoNE('ActualmenteEstdiv','ActualmenteEst');" id="ActualmenteEst" name="ActualmenteEst">
                        <?php if ($foexistepp['eactualmente_estudiando'] == "") {
                            echo ('<option value="">Seleccione una opcion</option>');
                        } else {
                            echo ('<option value="' . $foexistepp['eid_aest'] . '">' . $foexistepp['eactualmente_estudiando'] . '</option>');
                        } ?>

                        <?php echo ($SiNo); ?>
                    </select>
                </div>
</div><br>
            <div id="ppc1p3n2div" name="ppc1p3n2div" <?php if($foexistepp['eid_ne'] == ''){echo('class="form-group form-group-sm has-error"');}else{echo('class="form-group  form-group-sm"');}?>>       
            <label class="control-label">Nivel educativo</label><br>
                <div class="radio">
                    <label><!--en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="ppc1p3n2" id="ppc1p3n2" onclick="colocaropcionppc1p3n2('ppc1p3n2o1','valorppc1p3n2','ppc1p3n2div');" value="ppc1p3n2o1" <?php if($foexistepp['eid_ne']=='ppc1p3n2o1'){echo('checked');}?>>
                        Ninguno
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="ppc1p3n2" id="ppc1p3n2" onclick="colocaropcionppc1p3n2('ppc1p3n2o2','valorppc1p3n2','ppc1p3n2div');" value="ppc1p3n2o2" <?php if($foexistepp['eid_ne']=='ppc1p3n2o2'){echo('checked');}?>>
                        Preescolar
                    </label>             
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="ppc1p3n2" id="ppc1p3n2" onclick="colocaropcionppc1p3n2('ppc1p3n2o3','valorppc1p3n2','ppc1p3n2div');" value="ppc1p3n2o3" <?php if($foexistepp['eid_ne']=='ppc1p3n2o3'){echo('checked');}?>>
                        Básica primaria (1 a 5)
                    </label>             
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="ppc1p3n2" id="ppc1p3n2" onclick="colocaropcionppc1p3n2('ppc1p3n2o4','valorppc1p3n2','ppc1p3n2div');" value="ppc1p3n2o4" <?php if($foexistepp['eid_ne']=='ppc1p3n2o4'){echo('checked');}?>>
                        Básica secundaria  (6 a 9)
                    </label>             
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="ppc1p3n2" id="ppc1p3n2" onclick="colocaropcionppc1p3n2('ppc1p3n2o14','valorppc1p3n2','ppc1p3n2div');" value="ppc1p3n2o14" <?php if($foexistepp['eid_ne']=='ppc1p3n2o14'){echo('checked');}?>>
                        Media (10)
                    </label>             
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="ppc1p3n2" id="ppc1p3n2" onclick="colocaropcionppc1p3n2('ppc1p3n2o5','valorppc1p3n2','ppc1p3n2div');" value="ppc1p3n2o5" <?php if($foexistepp['eid_ne']=='ppc1p3n2o5'){echo('checked');}?>>
                        Media (11,12,13)
                    </label>             
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="ppc1p3n2" id="ppc1p3n2" onclick="colocaropcionppc1p3n2('ppc1p3n2o6','valorppc1p3n2','ppc1p3n2div');" value="ppc1p3n2o6" <?php if($foexistepp['eid_ne']=='ppc1p3n2o6'){echo('checked');}?>>
                        Técnico sin título
                    </label>             
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="ppc1p3n2" id="ppc1p3n2" onclick="colocaropcionppc1p3n2('ppc1p3n2o7','valorppc1p3n2','ppc1p3n2div');" value="ppc1p3n2o7" <?php if($foexistepp['eid_ne']=='ppc1p3n2o7'){echo('checked');}?>>
                        Técnico con título
                    </label>             
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="ppc1p3n2" id="ppc1p3n2" onclick="colocaropcionppc1p3n2('ppc1p3n2o8','valorppc1p3n2','ppc1p3n2div');" value="ppc1p3n2o8" <?php if($foexistepp['eid_ne']=='ppc1p3n2o8'){echo('checked');}?>>
                        Tecnológico sin título
                    </label>             
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="ppc1p3n2" id="ppc1p3n2" onclick="colocaropcionppc1p3n2('ppc1p3n2o9','valorppc1p3n2','ppc1p3n2div');" value="ppc1p3n2o9" <?php if($foexistepp['eid_ne']=='ppc1p3n2o9'){echo('checked');}?>>
                        Tecnológico con título
                    </label>             
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="ppc1p3n2" id="ppc1p3n2" onclick="colocaropcionppc1p3n2('ppc1p3n2o10','valorppc1p3n2','ppc1p3n2div');" value="ppc1p3n2o10" <?php if($foexistepp['eid_ne']=='ppc1p3n2o10'){echo('checked');}?>>
                        Universitario sin título
                    </label>             
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="ppc1p3n2" id="ppc1p3n2" onclick="colocaropcionppc1p3n2('ppc1p3n2o11','valorppc1p3n2','ppc1p3n2div');" value="ppc1p3n2o11" <?php if($foexistepp['eid_ne']=='ppc1p3n2o11'){echo('checked');}?>>
                        Universitario con título
                    </label>             
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="ppc1p3n2" id="ppc1p3n2" onclick="colocaropcionppc1p3n2('ppc1p3n2o12','valorppc1p3n2','ppc1p3n2div');" value="ppc1p3n2o12" <?php if($foexistepp['eid_ne']=='ppc1p3n2o12'){echo('checked');}?>>
                        Posgrado sin título
                    </label>             
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="ppc1p3n2" id="ppc1p3n2" onclick="colocaropcionppc1p3n2('ppc1p3n2o13','valorppc1p3n2','ppc1p3n2div');" value="ppc1p3n2o13" <?php if($foexistepp['eid_ne']=='ppc1p3n2o13'){echo('checked');}?>>
                        Posgrado con título
                    </label>             
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="ppc1p3n2" id="ppc1p3n2" onclick="colocaropcionppc1p3n2('ppc1p3n2o15','valorppc1p3n2','ppc1p3n2div');" value="ppc1p3n2o15" <?php if($foexistepp['eid_ne']=='ppc1p3n2o15'){echo('checked');}?>>
                        Especialización
                    </label>             
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="ppc1p3n2" id="ppc1p3n2" onclick="colocaropcionppc1p3n2('ppc1p3n2o16','valorppc1p3n2','ppc1p3n2div');" value="ppc1p3n2o16" <?php if($foexistepp['eid_ne']=='ppc1p3n2o16'){echo('checked');}?>>
                        Maestría
                    </label>             
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="ppc1p3n2" id="ppc1p3n2" onclick="colocaropcionppc1p3n2('ppc1p3n2o17','valorppc1p3n2','ppc1p3n2div');" value="ppc1p3n2o17" <?php if($foexistepp['eid_ne']=='ppc1p3n2o17'){echo('checked');}?>>
                        Doctorado
                    </label>             
                </div>
                <input type="text" class="form-control" id="valorppc1p3n2" name="valorppc1p3n2" style="display: none" value="<?php echo($foexistepp['eid_ne']); ?>">
                </div>
                <!--   fin pregunta 3.2   -->
</div>
<!-- fin nuevo perfil productivo -->





<!--inicio botonera guardar y actualizar NO SE TOCA-->
  <?php {
    echo('<button class="btn btn-primary"  type="button" id="actualizar" disabled=""  name="actualizar">Actualizar</button>&nbsp');//NO SE TOCA bonotes si es para actualizar folio
    echo('<button class="btn btn-primary " type="button" id="cancelar" name="cancelar">Volver</button>');
   } ?>  

<!--Fin botonera guardar y actualizar NO TOCAR-->
<!--INICIO Este es el footer NO TOCAR-->
            <?php echo($foot); ?>

</form>
<!--fin del footer NO TOCAR-->
</div> <!--INICIO ENLACES - NO TOCAR-->
        <script src="<?php echo BOOTSTRAP, 'js/jquery-1.11.0.js' ?>"></script>
        <script src="<?php echo BOOTSTRAP, 'js/bootstrap.min.js' ?>"></script>
        <script src="<?php echo BOOTSTRAP, 'js/jquery.bootstrap.wizard.js' ?>"></script>
        <script src="<?php echo BOOTSTRAP, 'js/prettify.js' ?>"></script>
        <script src="<?php echo BOOTSTRAP, 'js/bloquepp.js' ?>"></script>
        <script src="<?php echo JBOX, 'Source/jBox.min.js' ?>"></script>
        <link href="<?php echo JBOX, 'Source/jBox.css' ?>" rel="stylesheet">
<!--FIN ENLACES - NO TOCAR-->
</body>

<script>
     function enviarnumjp(campo,dicam)
    {
         $('#enviarnum').val(1);     
         validarbolitasytexto('sexodiv','sexo');
         
    }
///////////////////////////////////////Funciones para opcion multiple o unica////////////////////////////////////////////////////////////////////////    
    //esta funcion nos permite guardar el valor de una opcion de seleccion multiple
    
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
        
        //alert($('#' + campo).val());
    }
    //fin funcion nos permite guardar el valor de una opcion de seleccion multiple
    
     function colocaropcionc9op1(opcion)
    {
        //alert(opcion);
        $('#valorc9op1').val(opcion);
    }
    
    //ESTO ES PA LAS BOLITAS esta funcion nos permite guardar el valor de una opcion unico
    function colocaropcionc9op2(opcion)
    {
        //alert(opcion);
        $('#valorc9op2').val(opcion);
    }
    
     function colocaropcionc9op3(opcion)
    {
        //alert(opcion);
        $('#valorc9op3').val(opcion);
    }
    
     function colocaropcionc9op4(opcion)
    {
        //alert(opcion);
        $('#valorc9op4').val(opcion);
    }
    
    function colocaropcionc9op5(opcion)
    {
        //alert(opcion);
        $('#valorc9op5').val(opcion);
    }
    //fin funcion nos permite guardar el valor de una opcion unico
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
        color: 'yellow',
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
                //esta funcion es para actualizar
                $("#actualizar").click(function ()
                {
 //                   alert($('#valorestadoint').val());
                   // alert('juapis');
                        $.ajax({
                          url: "fc_actualizar",
                          type: "GET",
                           data: {vfolio : $('#folio').val(), vidintegrante : $('#idintegrante').val(),vtdocumento : $('#tdocumento').val(),vndocumento : $('#ndocumento').val(),vpnombre : $('#pnombre').val(),vsnombre : $('#snombre').val(),vpapellido : $('#papellido').val(),vsapellido : $('#sapellido').val(),
                              vfnacimiento : $('#fnacimiento').val(),vsexo : $('#sexo').val(),vedad : $('#edad').val(),vtelefono : $('#telefono').val(),vcelular : $('#celular').val(),vcorreo : $('#correo').val(),vtwitter : $('#twitter').val(),vfacebook : $('#facebook').val(),vinstagram: $('#instagram').val(),vgoogle : $('#google').val(),
                             vvalorestadoint : $('#valorestadoint').val(),vvalormotivoint : $('#valormotivoint').val(),vestadointob : $('#estadointob').val(),vdoccogestor : $('#doccogestor').val(),vnacionalidadv : $('#nacionalidadv').val(),
                             vetnias: $('#etnias').val(),
                             vOsexual: $('#Osexual').val(),
                             vIgenero: $('#Igenero').val()


                             ,vempleoact: $('#empleoact').val()
                              ,vCambiaremp: $('#Cambiaremp').val()
                              ,vTiempoEmpleado: $('#TiempoEmpleado').val()
                              ,vTipoE: $('#TipoE').val()
                              ,vTiempoDesEmpleado: $('#TiempoDesEmpleado').val()
                              ,vBarreraA: $('#BarreraA').val()
                              ,vActualmenteEst: $('#ActualmenteEst').val()
                              ,vvalorppc1p3n2: $('#valorppc1p3n2').val()

                            },

                          dataType: "html",
                          success : function(obj){
                          $('#actualizar').prop('disabled', true); 
                          $('#cancelar').prop('disabled', false); 
                         // $('#volver').prop('disabled', false);
                          okactualizar();//me llama el mensajito de actualizar
                            //alert('cambio fecha de naciomiento y sexo')
                          }
                        });
                });
                $("#eliminar").hide();     
                $("#cancelar").click(function ()
                {
                   // alert('juapis');
                 location.href = "../c_actualizarint/fc_actualizarint?folio="+ $('#folio').val() +"&idintegrante=0"+"&doccogestor="+ $('#doccogestor').val(); //$('#datos').html(obj);
                    
                });
                //fin de la funcion siguiente
                         
    });
    
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
////////////VALIRDAR TEXTO ////////////////////////////////////    
function validarbolitasytextoinactivo(div,campo)
{ 
 if($('#'+ campo).val() === '')
 { 
     $('#' + div).removeClass('form-group form-group-sm');
     $('#' + div).addClass('form-group form-group-sm has-error');
 }
 else
 { 
     $('#' + div).removeClass('form-group form-group-sm has-error');
     $('#' + div).addClass('form-group form-group-sm');       
 }
   validarguardarinactivo();
 }
////////////////////////////////VALIDAR GUARDAR////////////////////
function validarguardarinactivo()
{
//alert($('.has-error').length);
if ($('.has-error').length === 0)
{
   $('#guardar').prop('disabled', false);
   $('#actualizar').prop('disabled', true);
}
else
{
   $('#guardar').prop('disabled', true);
   $('#actualizar').prop('disabled', true);
}
}                                        
    
////////////VALIRDAR TEXTO ////////////////////////////////////    
function validarbolitasytexto(div,campo)
{ 
 if($('#'+ campo).val() === '')
 { 
     $('#' + div).removeClass('form-group form-group-sm');
     $('#' + div).addClass('form-group form-group-sm has-error');
 }
 else
 { 
     $('#' + div).removeClass('form-group form-group-sm has-error');
     $('#' + div).addClass('form-group form-group-sm');       
 }
   validarguardar();
 }
////////////////////////////////VALIDAR GUARDAR////////////////////
function validarguardar()
{
//alert($('.has-error').length);
if ($('.has-error').length === 0)
{
   $('#guardar').prop('disabled', false);
   $('#actualizar').prop('disabled', false);
}
else
{
   $('#guardar').prop('disabled', true);
   $('#actualizar').prop('disabled', true);
}
}                                        
/////////////////////////////////////// FIN Funciones que llaman al controlador para guardar y actualizar////////////////////////////////////////////////////////////////////////        
////////////////////////CALUCLAR EDAD ///////////////////////
    function calcularfecha(ffeccha)
    {   
        //alert($('#fnacimiento').val());
        
        if($('#fnacimiento').val() === '')
        {
           // validarbolitasytexto('fnacimientodiv', 'fnacimiento');
            validarbolitasytexto('fnacimientodiv','fnacimiento');
        }
        else
        {
            var aaaammdd = calcular_edad(ffeccha);
        
            if((aaaammdd[0] < 0)||(aaaammdd[0] > 100)) 
            {
            $('#edad').val(0);
            //$('#telefono').val(0);
            //$('#celular').val(0);
            $('#fnacimiento').val('');
            boxfechanac('Fecha Invalida: No puede ser mayor a la fecha actual o tener mas de 100 años');
            $('#fnacimiento').focus();
            }
            else
            {
            $('#edad').val(aaaammdd[0]);
            //$('#telefono').val(aaaammdd[1]);
            //$('#celular').val(aaaammdd[2]);
            }    
            //alert('juna');
            validarbolitasytexto('fnacimientodiv','fnacimiento');
        }
    }

function boxfechanac(mensaje)
{
new jBox('Notice', {
    content: mensaje,
    color: 'green',
    animation: {open: 'tada', close: 'flip'},
    position: {x: 'right', y: 'center'},
    autoClose: 2000
});
}
//funcion que generar el mensaje de igual al titular    
    function igualtitular()
    {
    new jBox('Notice', {
        content: 'No puede inactivar este integrante ya que es el representante...debe cambiar primero el representante del hogar!!!',
        color: 'red',
        animation: {open: 'tada', close: 'flip'},
        position: {x: 'center', y: 'center'},
        autoClose: 6000
    });
    }
//fin funcion que generar el mensaje de guardado
/*----------Funcion para obtener la edad------------*/
function calcular_edad(fecha) 
{//alert(fecha);
var fechaActual = new Date();
var diaActual = fechaActual.getDate();
var mmActual = fechaActual.getMonth() + 1;
var yyyyActual = fechaActual.getFullYear();
//alert(diaActual);
//alert(mmActual);
//alert(yyyyActual);
FechaNac = fecha.split("-");
var yyyyCumple = FechaNac[0]; 
var mmCumple = FechaNac[1];
var diaCumple = FechaNac[2];
//alert(diaCumple);
//alert(mmCumple);
//alert(yyyyCumple);
//retiramos el primer cero de la izquierda
if (mmCumple.substr(0,1) == 0) 
{
mmCumple= mmCumple.substring(1, 2);
}
//retiramos el primer cero de la izquierda
if (diaCumple.substr(0, 1) == 0) 
{
diaCumple = diaCumple.substring(1, 2);
}
var edad = yyyyActual - yyyyCumple;
//alert(edad + " 2");
//validamos si el mes de cumpleaños es menor al actual
//o si el mes de cumpleaños es igual al actual
//y el dia actual es menor al del nacimiento
//De ser asi, se resta un año
var diamm = mmActual - mmCumple;
if(diamm < 0)
{
   diamm = diamm + 12; 
}

var diadd = diaActual - diaCumple;
if(diadd < 0)
{
   diadd = diadd + 30; 
}
if ((mmActual < mmCumple) || (mmActual == mmCumple && diaActual < diaCumple)) 
{

edad--;
}
//alert('A: ' + edad + 'M: ' + diamm + 'D: ' + diadd);

var yearmesdia = [edad , diamm, diadd];

//alert(yearmesdia[0]);
return yearmesdia;
}
////////////////////////FIN CALCULAR EDAD///////////////////
function colocaropcionestadoint(opcion,campoval,divcampo)
{
  //   alert($('#idtitular').val());
  //   alert($('#idintegrante').val());
    $('#' + campoval).val(opcion);
    if(opcion == '6' && (($('#idtitular').val())==($('#idintegrante').val())))
    {
     $('#actualizar').prop('disabled', true);   
     $('#estadoint1').prop('disabled', false);
     $('#estadoint1').prop('checked', true);   
     $('#estadoint2').prop('disabled', false);
     $('#estadoint2').prop('checked', false);
     $('#estadointmotivodiv').hide();
     $('#estadointobdiv').hide();
     $('#valormotivoint').val('98');
     $('#estadointob').val('98');
     $('#estadointmotivodiv').removeClass(' has-error');            
     $('#estadointobdiv').removeClass(' has-error');
     igualtitular() 
     validarbolitasytextoinactivo(divcampo,campoval);
    }
    else if(opcion == '6')
        {   $('#motivoint1').prop('disabled', false);
            $('#motivoint1').prop('checked', false);
            $('#motivoint2').prop('disabled', false);
            $('#motivoint2').prop('checked', false);
            $('#motivoint3').prop('disabled', false);
            $('#motivoint3').prop('checked', false);
            $('#motivoint4').prop('disabled', false);
            $('#motivoint4').prop('checked', false);
            $('#motivoint5').prop('disabled', false);
            $('#motivoint5').prop('checked', false);
            $('#motivoint6').prop('disabled', false);
            $('#motivoint6').prop('checked', false);
            $('#motivoint7').prop('disabled', false);
            $('#motivoint7').prop('checked', false);
    
            $('#estadointmotivodiv').show();
            $('#estadointobdiv').show();
            
            $('#valormotivoint').val('');
            $('#estadointob').val('');
            
            $('#estadointmotivodiv').addClass(' has-error');            
            $('#estadointobdiv').addClass(' has-error'); 
            validarbolitasytextoinac(divcampo,campoval);
        }
        else if(opcion == '1')
        {
            $('#estadointmotivodiv').hide();
            $('#estadointobdiv').hide();
            $('#valormotivoint').val('98');
            $('#estadointob').val('98');
            $('#estadointmotivodiv').removeClass(' has-error');            
            $('#estadointobdiv').removeClass(' has-error');  
            validarbolitasytextoinac(divcampo,campoval);
        }
        else if(opcion == '5')
        {
            $('#motivoint1').prop('disabled', false);
            $('#motivoint1').prop('checked', false);
            $('#motivoint2').prop('disabled', false);
            $('#motivoint2').prop('checked', false);
            $('#motivoint3').prop('disabled', false);
            $('#motivoint3').prop('checked', false);
            $('#motivoint4').prop('disabled', false);
            $('#motivoint4').prop('checked', false);
            $('#motivoint5').prop('disabled', false);
            $('#motivoint5').prop('checked', false);
            $('#motivoint6').prop('disabled', false);
            $('#motivoint6').prop('checked', false);
            $('#motivoint7').prop('disabled', true);
            $('#motivoint7').prop('checked', true);
            
            $('#estadointmotivodiv').show();
            $('#estadointobdiv').show();
            
            $('#valormotivoint').val('');
            $('#estadointob').val('');
            
            $('#estadointmotivodiv').addClass(' has-error');            
            $('#estadointobdiv').addClass(' has-error');            
            validarbolitasytextoinac(divcampo,campoval);
        }
        
  //  validarbolitasytextoinac(divcampo,campoval);
}
function validarbolitasytextoinac(div,campo)
{ 
//    alert(div + ' juanpis ' + campo);
   if(($('#'+ campo).val() == ''))
   { 
       $('#' + div).addClass(' has-error');
   }
   else
   { 
       $('#' + div).removeClass('has-error');
   }
   validarguardarinac();
}   
 function validarguardarinac()
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
function colocaropcionmotivo(opcion,campoval,divcampo)
{
     $('#' + campoval).val(opcion);
    validarbolitasytexto(divcampo,campoval);
}

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
/*
function deshabilitardoc()
    {
       // alert($('#tdocumento').val());

        if(($('#tdocumento').val() == 'Pasaporte') || ($('#tdocumento').val() == 'Cedula de extranjeria'))
        {   
            $('#nacionalidadv').val('');
            $('#nacionalidaddiv').addClass('has-error');       
            $('#nacionalidaddiv').show();
        }
        else
        {   
            $('#nacionalidadv').val('');
            $('#nacionalidaddiv').removeClass('has-error');   
            $('#nacionalidaddiv').hide();
        }

        if($('#tdocumento').val() == 'No tiene')
        {   
            $('#ndocumento').val('');
            $('#ndocumento').prop('disabled',true);
            $('#ndocumentodiv').removeClass('form-group col-md-10 form-group-sm has-error');       
            $('#ndocumentodiv').hide();
        }
        else
        {   $('#ndocumento').val('');
            $('#ndocumento').prop('disabled',false);
            $('#ndocumentodiv').addClass('form-group col-md-10 form-group-sm has-error');
            $('#ndocumentodiv').show();
        }
        
        validarguardar();
    }



*/

        ////////// inicio nuevas variables ////////////////
    function habilitarnacionalidad(divcam,campo)
    {
       // alert($('#tdocumento').val());
    if (($('#tdocumento').val() == 'Registro civil') || ($('#tdocumento').val() == 'Tarjeta de identidad') || ($('#tdocumento').val() == 'Cedula de ciudadania'))
        {
            $('#nacionalidadv').val('');
            $('#nacionalidaddiv').removeClass('has-error');
            $('#nacionalidaddiv').hide();
              if($('#ndocumento').val() == ''){
                $('#ndocumentodiv').show();
                $('#ndocumentodiv').addClass('has-error');
              }else{
                $('#ndocumentodiv').show();
                $('#ndocumentodiv').removeClass('has-error');
              }
              validarbolitasytexto(divcam,campo);
        }
        else if(($('#tdocumento').val() == 'No tiene'))
        {
            $('#nacionalidadv').val('');
            $('#nacionalidaddiv').removeClass('has-error');
            $('#nacionalidaddiv').hide();

            $('#ndocumento').val('');
            $('#ndocumentodiv').removeClass('has-error');
            $('#ndocumentodiv').hide();

            validarbolitasytexto(divcam,campo);

        } else{
                $.ajax({
                  url: "fc_listarnacionalidad",
                  type: "GET",
                  data: {vdocumento : $('#tdocumento').val()},
                  dataType: "html",
                  success : function(obj){                      
                      $('#nacionalidadv').html(obj);
                  }
                });

            $('#nacionalidaddiv').addClass('has-error');
            $('#nacionalidaddiv').show();

            if($('#ndocumento').val() == ''){
                $('#ndocumentodiv').show();
                $('#ndocumentodiv').addClass('has-error');
              }else{
                $('#ndocumentodiv').show();
                $('#ndocumentodiv').removeClass('has-error');
              }
           // $('#ndocumentodiv').show();
            validarbolitasytexto(divcam,campo);
        }
                  
    }
    ////////// fin nuevas variables ////////////////

//////////////// nuevas variables pp/////////
function colocaropcionppc1p3n2(opcion,campoval,divcampo)
{
    $('#' + campoval).val(opcion);
    validarbolitasytextoNE(divcampo,campoval);
}
function validarbolitasytextoNE(div,campo)
        { 
         if($('#'+ campo).val() === '')
         { 
             $('#' + div).addClass('has-error');
         }
         else
         { 
             $('#' + div).removeClass('has-error');
         }
           validarguardar();
         }

function validarempleoact()
{   //alert($('#empleoact').val());
    if($('#empleoact').val() == '1')
    {
        $('#Cambiarempdiv').addClass('has-error');
        $('#Cambiarempdiv').show();
        $('#TiempoEmpleadodiv').addClass('has-error');
        $('#TiempoEmpleadodiv').show();
        $('#TipoEdiv').addClass('has-error');
        $('#TipoEdiv').show();
        $('#TiempoDesEmpleadodiv').hide();
        $('#TiempoDesEmpleadodiv').removeClass('has-error');
        $('#TiempoDesEmpleado').val('');
        $('#BarreraAdiv').hide();
        $('#BarreraAdiv').removeClass('has-error');
        $('#BarreraA').val('');
    
    }else{
        $('#Cambiarempdiv').hide();
        $('#Cambiarempdiv').removeClass('has-error');
        $('#Cambiaremp').val('');
        $('#TiempoEmpleadodiv').hide();
        $('#TiempoEmpleadodiv').removeClass('has-error');
        $('#TiempoEmpleado').val('');
        $('#TipoEdiv').hide();
        $('#TipoEdiv').removeClass('has-error');
        $('#TipoE').val('');
        $('#TiempoDesEmpleadodiv').addClass('has-error');
        $('#TiempoDesEmpleadodiv').show();
        $('#BarreraAdiv').addClass('has-error');
        $('#BarreraAdiv').show();
    }
    
    validarbolitasytextoNE('empleoactdiv','empleoact')
}

validarBloquePPmoduloActualizar($('#edad').val())
</script>
</html>