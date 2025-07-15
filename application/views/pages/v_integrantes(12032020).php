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
            <?php echo($head3); ?>
<!-- fin head            -->

                <div  class="row">
                    <div class="col-md-10">
                    <h6>Folio: <small><?php echo($folio); ?></small></h6>
                    <h6>Documento: <small><?php echo($tdatinte['tdoc']); ?></small></h6>
                    <h6>IDintegrante: <small><?php echo($tdatinte['tidintegrante']); ?></small></h6>
                    <h6>Nombre: <small><?php echo($tdatinte['tnombre']); ?></small></h6>
                    <p class="text-right"><small>Te encuentras en el capitulo <strong>4. CARACTERISTICAS GENERALES (Integrantes)</strong></small></p><br>
                    <!--<?php echo($dtitular['tidintegrantetitular']); ?>-->
                    </div>
                </div><br>
<!--para imprimir el folio y llevarlo-->
                        
                        <input type="text" class="form-control input-sm" id="folio" name="folio" style="display: none" placeholder="Text input" value="<?php echo($folio); ?>">
                        <input type="text" class="form-control input-sm" id="idtitular" name="idtitular" style="display: none" placeholder="Text input" value="<?php echo($dtitular['tidintegrantetitular']); ?>">
                        <input type="text" class="form-control input-sm" id="idintegrante" name="idintegrante" style="display: none" placeholder="Text input" value="<?php echo($tdatinte['tidintegrante']); ?>">
                        <input type="text" class="form-control input-sm" id="idint" name="idint" style="display: none" placeholder="Text input" value="<?php echo($idintegrante); ?>">
                        <input type="text" class="form-control input-sm" id="banderainsertar" name="banderainsertar"  placeholder="Text input" style="display: none" value="<?php echo($banderainsertar);?>">
                        <input type="text" class="form-control input-sm" id="variable" name="variable" style="display: none" value="<?php echo($variable);?>">
<!--fin para imprimir el folio y llevarlo-->
<label style="color:#FF4000">Solamente se incluiran los residentes habituales del hogar (residente habitual aquel miembro que vive en la vivienda la mayor parte del tiempo) </label><br><br><br>
                <form class="form-group" name="formulario" id="formulario">
<!--opcion de seleccion-->
                   <div class="row">
                    <div   id="tdocumentoodiv" name="tdocumentoodiv" <?php if($foexiste['etipodocumento']==''){echo('class="form-group col-md-2 form-group-sm has-error"');}else{echo('class="form-group col-md-2 form-group-sm"');}?>>
                        <label class="control-label" for="tdocumento">Tipo de documento</label>
                        <select class="form-control input-sm" onchange="validarbolitasytexto('tdocumentoodiv','tdocumento'); deshabilitardoc()" id="tdocumento" name="tdocumento">
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
                       
                       
                       
                       
<div  id="ndocumentodiv" name="ndocumentodiv" <?php if($foexiste['edocumento']==''){echo('class="form-group col-md-2 form-group-sm has-error"');}else if ( $foexiste['edocumento']=='98'){echo ('class="form-group col-md-2 form-group-sm" style="display: none"'); }{echo('class="form-group col-md-2 form-group-sm"');}?>>
                       <label class="control-label">Numero de Documento</label>
                       <input type="text" class="form-control input-sm" id="ndocumento" onblur="cantidadcaracteres()" onchange="validarbolitasytexto('ndocumentodiv','ndocumento')" name="ndocumento" onkeypress="return soloNumeros(event)"  placeholder="Numero de documento" value="<?php echo($foexiste['edocumento']); ?>">
                       </div>
                       
                       <div  id="pnombrediv"  name="pnombrediv" <?php if($foexiste['enombre1']==''){echo('class="form-group col-md-2 form-group-sm has-error"');}else{echo('class="form-group col-md-2 form-group-sm"');}?>>
                       <label class="control-label">Primer Nombre</label>
                       <input type="text" class="form-control input-sm"  onchange="validarbolitasytexto('pnombrediv','pnombre')"  id="pnombre" name="pnombre"  onkeypress="return soloLetras(event)" placeholder="Primer Nombre" value="<?php  echo($foexiste['enombre1']); ?>">
                       </div>
                       
                       <div  id="snombrediv" name="snombrediv" class="form-group col-md-2 form-group-sm">
                       <label class="control-label">Segundo Nombre</label>
                       <input type="text" class="form-control input-sm" on id="snombre"  name="snombre" onkeypress="return soloLetras(event)" onchange="validarguardar()" placeholder="Segundo Nombre" value="<?php echo($foexiste['enombre2']); ?>">
                       </div>
                       
                       <div  id="papellidodiv" name="papellidodiv" <?php if($foexiste['eapellido1']==''){echo('class="form-group col-md-2 form-group-sm has-error"');}else{echo('class="form-group col-md-2 form-group-sm"');}?>>
                       <label class="control-label">Primer Apellido</label>
                       <input type="text" class="form-control input-sm" id="papellido" onchange="validarbolitasytexto('papellidodiv','papellido')" name="papellido" onkeypress="return soloLetras(event)" placeholder="Primer Apellido" value="<?php echo($foexiste['eapellido1']); ?>">
                       </div>
                       
                       <div  id="sapellidodiv" name="sapellidodiv" class="form-group col-md-2 form-group-sm">
                       <label class="control-label">Segundo Apellido</label>
                       <input type="text" class="form-control input-sm"  id="sapellido" name="sapellido" onkeypress="return soloLetras(event)" onchange="validarguardar()" placeholder="Segundo Apellido" value="<?php echo($foexiste['eapellido2']); ?>">
                       </div>
                   </div><br>
<!--fin de seleccion-->


<!--inicio radio una sola seleccion-->
    <div class="row">
        <div  id="fnacimientodiv" name="fnacimientodiv" <?php if($foexiste['efnacimiento']==''){echo('class="form-group col-md-2 form-group-sm has-error "');}else{echo('class="form-group col-md-2 form-group-sm"');}?>>
          
         <label class="control-label">Fecha de Nacimiento</label>
         <input type="date" class="form-control input-sm" id="fnacimiento" onchange="enviarnumjp()" name="fnacimiento" onblur="calcularfecha(this.value)"   value="<?php  echo($foexiste['efnacimiento']); ?>" <?php if($banderainsertar=='1'){echo('');}else{echo('disabled=""');}?>>
        </div>
        
        <div  id="sexodiv" name="sexodiv" <?php if($foexiste['esexo']==''){echo('class="form-group col-md-2 form-group-sm has-error"');}else{echo('class="form-group col-md-2 form-group-sm"');}?>>
                        <label class="control-label" for="sexo" >Sexo</label>
                        <select class="form-control input-sm"  id="sexo" onchange="enviarnumjp('sexodiv','sexo')"   name="sexo" <?php if($banderainsertar=='1'){echo('');}else{echo('disabled=""');}?>>
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
         <label class="control-label">Teléfono</label>
         <input type="text" class="form-control input-sm" id="telefono" maxlength="7" onchange="validarcantdigitos('telefono',7,'telefonodiv')" name="telefono" onkeypress="return soloNumeros(event)" placeholder="ingrese número telefónico"   value="<?php  echo($foexiste['etelefono']); ?>">
         </div>
        
         <div  id="celulardiv" name="celulardiv" <?php if($foexiste['ecelular']==''){echo('class="form-group col-md-2 form-group-sm has-error"');}else{echo('class="form-group col-md-2 form-group-sm"');}?>>
         <label class="control-label">Celular</label>
         <input type="text" class="form-control input-sm" id="celular" maxlength="10" onchange="validarcantdigitos('celular',10,'celulardiv')" name="celular" onkeypress="return soloNumeros(event)"  placeholder="ingrese celular" value="<?php  echo($foexiste['ecelular']); ?>">
         </div>
        
         <div  id="correodiv" name="correodiv" class="form-group col-md-2 form-group-sm">
         <label class="control-label">Correo Electronico</label>
         <input type="email" class="form-control input-sm" id="correo" name="correo"  placeholder="Ingrese correo electronico" value="<?php  echo($foexiste['ecorreo']); ?>">
         </div>
        
      
        
        </div>
        <br><br> 
        <div id="acutualizardiv"  <?php if($variable == '81' ){ echo'style="display:none"'; }else{ echo''; }  ?>>
        <button class="btn btn-success"  type="button" id="actualizarfs" name="actualizarfs"  class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal" data-target="#myModal" <?php if($banderainsertar=='1'){echo('disabled=""');}else{echo('');}?> >Editar fecha de nacimiento(Edad) y Sexo  </button>
         </div>  
    <hr> <br><br>
<!--fin radio una sola seleccion-->
<label class="col-lg-offset-4" style="color:#FF4000 " >Ingrese las redes sociales que tiene el integrante.</label><br><br>
<div class="row">
          <div  id="twitterdiv" name="twitterdiv" class="form-group col-md-2 form-group-sm">
         <label class="control-label">twitter</label>
         <input type="text" class="form-control input-sm" id="twitter" name="twitter" placeholder="@usuario"  value="<?php echo($foexiste['etwitter']); ?>">
         </div>
        
         <div  id="facebookdiv" name="facebookdiv" class="form-group col-md-2 form-group-sm">
         <label class="control-label">facebook</label>
         <input type="text" class="form-control input-sm" id="facebook" name="facebook" placeholder="Ingrese facebook"   value="<?php echo($foexiste['efacebook']); ?>">
         </div> 
        
         <div  id="instagramdiv" name="instagramdiv" class="form-group col-md-2 form-group-sm">
         <label class="control-label">Instagram</label>
         <input type="text" class="form-control input-sm" id="instagram" name="instagram"  placeholder="Ingrese instagram"  value="<?php  echo($foexiste['einstagram']); ?>">
         </div>
        
         <div  id="googlediv" name="googlediv" class="form-group col-md-2 form-group-sm">
             <label class="control-label">Google+</label>
             <input type="text" class="form-control input-sm" id="google" name="google"  placeholder="Ingrese google+"  value="<?php echo($foexiste['egoogle']); ?>">
         </div>
    
    
        
    </div> 
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel" >Edicion fecha de nacimiento y Sexo</h4>
      </div>
      <div class="modal-body">
     ESTA SEGURO QUE DESEA ACTUALIZAR LA EDAD Y EL SEXO ??  RECUERDE QUE AL CAMBIAR ESTOS DATOS, DEBERA NUEVAMENTE DILIGENCIAR LOS CAPITULOS QUE EN EL RECALCULO SE ACTIVEN PARA SU DILIGENCIAMIENTO.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal" onclick="quitar()">SI</button>
        <button type="button" class="btn btn-primary" data-dismiss="modal" onclick="quitarno()">NO</button>
      </div>
    </div>
  </div>
</div>

<div class="row">
    
</div> <br>


 
<!--fin radio una sola seleccion-->
 
<!--inicio botonera guardar y actualizar NO SE TOCA-->



                            <?php if($idintegrante <> 0)//NO SE TOCA bonotes si es nuevo folio
                                {
                                if($idintegrante <> $dtitular['tidintegrantetitular'])
                                    {
                                    echo('<button class="btn btn-primary"  type="button" id="actualizar" disabled=""  name="actualizar">Actualizar</button>&nbsp');//NO SE TOCA bonotes si es para actualizar folio
                                    echo('<button class="btn btn-primary " type="button" id="cancelar" name="cancelar">Volver</button>');
                                    echo('<button class="btn btn-primary  col-sm-offset-7"  type="button" id="eliminar" name="eliminar">Eliminar</button>');
                                    }
                                else
                                    {
                                    echo('<button class="btn btn-primary"  type="button" id="actualizar" disabled=""  name="actualizar">Actualizar</button>&nbsp');//NO SE TOCA bonotes si es para actualizar folio
                                    echo('<button class="btn btn-primary " type="button" id="cancelar" name="cancelar">Volver</button>');
                                    echo('<button class="btn btn-primary  col-sm-offset-7"  type="button" id="eliminar" name="eliminar" disabled="">Eliminar</button>');   
                                    }    
                                
                                }
                                else 
                                {
                                echo('<button class="btn btn-primary" type="button" id="guardar" disabled="" name="guardar">Guardar</button>');
                                echo('<button class="btn btn-primary col-sm-offset-8" type="button" id="cancelar" name="cancelar">Cancelar</button>');
                                } ?>  

<!--Fin botonera guardar y actualizar NO TOCAR-->

                
<!--INICIO Este es el footer NO TOCAR-->
            <?php echo($foot); ?>
        
</form></div>
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
    var banderaactualizar = 0;
     function actualizaredad(estado)
    {

    } 
    
     function quitar()
    {
    $('#fnacimiento').prop('disabled',false);
    $('#sexo').prop('disabled',false);
    banderaactualizar = '1';
    
    } 
    
    function quitarno()
    {
    $('#fnacimiento').prop('disabled',true);
    $('#sexo').prop('disabled',true);
    } 
    
    
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
        
                //esta funcion es para guardar
                $("#guardar").click(function ()
                {
                   // alert('juapis');
                        $.ajax({
                          url: "fc_insertar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(), vtdocumento : $('#tdocumento').val(),vndocumento : $('#ndocumento').val(),vpnombre : $('#pnombre').val(),vsnombre : $('#snombre').val(),vpapellido : $('#papellido').val(),vsapellido : $('#sapellido').val(),
                              vfnacimiento : $('#fnacimiento').val(),vsexo : $('#sexo').val(),vedad : $('#edad').val(),vtelefono : $('#telefono').val(),vcelular : $('#celular').val(),vcorreo : $('#correo').val(),vtwitter : $('#twitter').val(),vfacebook : $('#facebook').val(),vinstagram: $('#instagram').val(),vgoogle : $('#google').val()},
                          dataType: "html",
                          success : function(obj){                      
                          okguardar();//me llama el mensajito de guardar
                          if($('#variable').val() == 81){
								location.href = "../c_totalintegrantesintermedia/fc_totalintegrantesintermedia?folio="+ $('#folio').val() +"&idintegrante=0"+"&variable="+$('#variable').val();  
								
							}else{
                        location.href = "../c_totalintegrantes/fc_totalintegrantes?folio="+ $('#folio').val() +"&idintegrante=0"; //$('#datos').html(obj);
                          }
                      }
                        });                    
                });
                //fin de la funcion guardar
                //
                //esta funcion es para actualizar
                $("#actualizar").click(function ()
                {
                    //alert(banderaactualizar);
                      if (banderaactualizar == 1)
                      {
                          
                        $.ajax({
                          url: "fc_actualizar",
                          type: "GET",
                           data: {vfolio : $('#folio').val(), vidintegrante : $('#idintegrante').val(),vtdocumento : $('#tdocumento').val(),vndocumento : $('#ndocumento').val(),vpnombre : $('#pnombre').val(),vsnombre : $('#snombre').val(),vpapellido : $('#papellido').val(),vsapellido : $('#sapellido').val(),
                              vfnacimiento : $('#fnacimiento').val(),vsexo : $('#sexo').val(),vedad : $('#edad').val(),vtelefono : $('#telefono').val(),vcelular : $('#celular').val(),vcorreo : $('#correo').val(),vtwitter : $('#twitter').val(),vfacebook : $('#facebook').val(),vinstagram: $('#instagram').val(),vgoogle : $('#google').val()},
                          dataType: "html",
                          success : function(obj){                      
                          okactualizar();//me llama el mensajito de actualizar
                            //$('#datos').html(obj);
                            
                            //alert('cambio fecha de nacimiento y sexo')
                          }
                        });  
                          
                      }
                      else
                      {  
                       $.ajax({
                          url: "fc_actualizarsincalculo",
                          type: "GET",
                           data: {vfolio : $('#folio').val(), vidintegrante : $('#idintegrante').val(),vtdocumento : $('#tdocumento').val(),vndocumento : $('#ndocumento').val(),vpnombre : $('#pnombre').val(),vsnombre : $('#snombre').val(),vpapellido : $('#papellido').val(),vsapellido : $('#sapellido').val(),
                              vtelefono : $('#telefono').val(),vcelular : $('#celular').val(),vcorreo : $('#correo').val(),vtwitter : $('#twitter').val(),vfacebook : $('#facebook').val(),vinstagram: $('#instagram').val(),vgoogle : $('#google').val()},
                          dataType: "html",
                          success : function(obj){                      
                          okactualizar();//me llama el mensajito de actualizar
                            //$('#datos').html(obj);
                            
                            //alert('cambio fecha de nacimiento y sexo')
                          }
                        });   
                          
                      }
                        
                        
                        //akis
                });
                
               
               
                 
                $("#eliminar").click(function ()
                {
                   // alert('juapis');
                        $.ajax({
                          url: "fc_eliminar",
                          type: "GET",
                           data: {vfolio : $('#folio').val(), vidintegrante : $('#idintegrante').val()},
                          dataType: "html",
                          success : function(obj){                      
//                          okactualizar();//me llama el mensajito de actualizar
                            //$('#datos').html(obj);
							if($('#variable').val() == 81){
								location.href = "../c_totalintegrantesintermedia/fc_totalintegrantesintermedia?folio="+ $('#folio').val() +"&idintegrante=0"+"&variable="+$('#variable').val();  
								
							}else{
							
                          location.href = "../c_totalintegrantes/fc_totalintegrantes?folio="+ $('#folio').val() +"&idintegrante=0";  
                          }
						  }
                        });                    
                });
                //fin de la funcion actualizar

                
                 $("#cancelar").click(function ()
                {
                   // alert('juapis');
                 if($('#variable').val() == '81'){  
                  location.href = "../c_totalintegrantesintermedia/fc_totalintegrantesintermedia?folio="+ $('#folio').val() +"&idintegrante=0"+"&variable="+$('#variable').val(); //$('#datos').html(obj);
            
             }else{
                
            location.href = "../c_totalintegrantes/fc_totalintegrantes?folio="+ $('#folio').val() +"&idintegrante=0"; //$('#datos').html(obj);     
             }
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
    
        function validarbolitasytexto(div,campo)
        { 
         if($('#'+ campo).val() === '')
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
function deshabilitardoc()
    {
        
        if($('#tdocumento').val() == 'Indocumentado')
        {   
            $('#ndocumento').val('98');
            $('#ndocumento').prop('disabled',true);
            $('#ndocumentodiv').removeClass('form-group col-md-10 form-group-sm has-error');       
            $('#ndocumentodiv').hide(1000);
        }
        else
        {   $('#ndocumento').val('');
            $('#ndocumento').prop('disabled',false);
            $('#ndocumentodiv').addClass('form-group col-md-10 form-group-sm has-error');
            $('#ndocumentodiv').show(100);
        }
        
        validarguardar();
    }
    
    
function cantidadcaracteres(){
var ndocumento = document.getElementById('ndocumento');
if((ndocumento.value.length < 4)||(ndocumento.value.length > 11)) {
new jBox('Notice', {
       content: 'Solo aceptan entre 4 y 11 digitos... por favor revisar',
       color: 'black',
       animation: {open: 'tada', close: 'flip'},
       position: {x: 'right', y: 'center'},
       autoClose: 4000
   });
$('#ndocumentodiv').addClass('form-group col-md-10 form-group-sm has-error');
$('#ndocumento').val('');
}
validarguardar();
}

</script>
</html>