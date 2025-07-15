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
                
                <div id="pp2p1div" name="pp2p1div" >   
                <label class="control-label">1. CUAL(ES) ÁREA(S) DE FORMACIÓN (SON) DE SU INTERÉS? 
                    <button type="button" id="vayuda" name="vayuda" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModal">
                        <span class="glyphicon glyphicon-question-sign" aria-hidden="true"></span> Ayuda
                    </button>
                </label>
                </div>
                <div   id="areaformacionr1div" name="areaformacionr1div" <?php if($carrayrespuestas['eppc2p1o1']==''){echo('class="form-group col-md-5 form-group-sm has-error"');}else{echo('class="form-group col-md-5 form-group-sm"');}?>>
                    <label class="control-label" for="areaformacionr1"></label><br><br><br>
                        <select class="form-control input-sm" onchange="validarbolitasytexto('areaformacionr1div','tdocumareaformacionr1');compararselect()" id="areaformacionr1" name="areaformacionr1">
                            <?php if($carrayrespuestas['eppc2p1o1']=="")
                                {
                                echo('<option value="">SELECCIONE UNA OPCION</option>');
                                }
                                else
                                {
                                echo('<option value="'.$carrayrespuestas['eppc2p1o1'].'">'.$carrayrespuestas['eppc2p1o1'].'</option>');
                                }?>
                            
                            <?php echo($datosppc2p1o1); ?>
                        </select>
                
            </div><br> 
            
            </div>
            
            <div class="row">
                <div   id="areaformacionr1div2" name="areaformacionr1div2" class="col-md-5">
                    <label class="control-label" for="areaformacionr2"></label><br><br><br>
                        <select class="form-control input-sm" onchange="validarbolitasytexto('areaformacionr1div2','tdocumareaformacionr2')" id="areaformacionr2" name="areaformacionr2">
                            <?php if($carrayrespuestas['eppc2p1o2']=="")
                                {
                                echo('<option value="">SELECCIONE UNA OPCION</option>');
                                }
                                else
                                {
                                echo('<option value="'.$carrayrespuestas['eppc2p1o2'].'">'.$carrayrespuestas['eppc2p1o2'].'</option>');
                                }?>
                            
                            <?php echo($datosppc2p1o2); ?>
                        </select>
                
            </div><br><br><br><br><br><br><br><br>
                 
                 <!--inicio radio una sola seleccion-->
            
<!--            
            <div class="row">
            <div id="ppc2p1div" name="ppc2p1div" <?php if($arrayrespuestas['eppc2p1']==''){echo('class="form-group col-md-12 form-group-sm has-error"');}else{echo('class="form-group col-md-12 form-group-sm"');}?>>   
                <label class="control-label">7. Parentesco con la persona jefe del Hogar
                    <button type="button" id="vayuda" name="vayuda" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModal">
                        <span class="glyphicon glyphicon-question-sign" aria-hidden="true"></span> Ayuda
                    </button>
                </label>
                <div class="radio">
                    <label>en este caso se manda a la fincion javascript el valor del campo
                        <input type="radio" name="ppc2p1" id="ppc2p1" onclick="colocaropcion('1','valorppc2p1','ppc2p1div');" value="1" <?php if($arrayrespuestas['eppc2p1']=='1'){echo('checked');}?>>
                        PRIMERA CLASE
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="ppc2p1" id="ppc2p1" onclick="colocaropcion('2','valorppc2p1','ppc2p1div');" value="2" <?php if($arrayrespuestas['eppc2p1']=='2'){echo('checked');}?>>
                        SEGUNDA CLASE
                    </label>             
                </div> 
                
                        
                <input type="text" class="form-control" id="valorppc2p1" name="valorppc2p1" style="display:none" placeholder="Text input" value="<?php echo($arrayrespuestas['eppc2p1']); ?>">
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
            <?php if($carrayrespuestas['eppc2p1o1']=="")
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
</div>
        </form>
    
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
                                 vidintegrante : $('#idintegrante').val()
                                 ,vareaformacionr1: $('#areaformacionr1').val(),
                                 vareaformacionr2: $('#areaformacionr2').val()},    
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
                                 vareaformacionr1: $('#areaformacionr1').val(),
                                 vareaformacionr2: $('#areaformacionr2').val()},    
                          dataType: "html",
                          success : function(obj){                      
                          botonguardar();
                          }
                        });                    
        });
        

        $("#siguiente").click(function ()
        {
         botonsiguiente();
         location.href = "../c_ppc2p2/fc_ppc2p2?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";                    

        });
              
        $("#anterior").click(function ()
        {
         botonanterior();
          location.href = "../c_ppcapitulosintegrante/fc_ppcapitulosintegrante?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val() +"";   
        //location.href = "../c_capitulosintegrantes/fc_capitulosintegrantes?idintegrante=" + $('#idintegrante').val()+ "&idintegrante="+"&idintegrante=0";                    
        });

//para cargar variables capitulo, pregunta,encuestador,vivienda,barra
cargardatosgenerales('<?php echo($arraydatosgenerales['ecapitulo']); ?>','Pregunta 1 de 2','<?php echo($arraydatosgenerales['enomcoges']); ?>','<?php echo($arraydatosgenerales['enombreintegrante']." "." - "." "."Sexo:"." ".$arraydatosgenerales['esexointegrante']."   "."  -  "."   "."Edad:"."   ".$arraydatosgenerales['eedadintegrante']); ?>','50');
//control del boton ayuda
botonayuda();

});

//esta funcion lleva el parametro a la funcion fc_compararselect del controlador, para cuando se responda en el primer select, me traiga la informacion que hay en la tabla para el segundo select, sin repetir la respuesta del primero

function compararselect()
{
    $.ajax({
                          url: "fc_compararselect",
                          type: "GET",
                          data: {
                                 vareaformacionr1: $('#areaformacionr1').val()
                                },    
                          dataType: "html",
                          success : function(obj){                      
                          $('#areaformacionr2').html(obj);
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

//fin funcion compararselect
</script>
</html>