<!DOCTYPE html>
<html lang="es">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <title><?php echo $titulo ?></title>
        <link rel="stylesheet" href="<?php echo BOOTSTRAP, 'css/bootstrap1.min.css'; ?>" >
        <link rel="stylesheet" href="<?php echo BOOTSTRAP, 'css/style.css'; ?>" >
        
        
        <meta charset="utf-8">
        <meta http-equiv="Content-Language" content="es"/>
    </head>

    <body>  
    <!-- Contenedor -->
    <div class="container" id="acordeon">
            <!--head            -->
            <?php echo($head); ?><br>
            <input type="text" class="form-control input-sm" id="idestacion" name="idestacion" style="display: none" value="<?php echo($cidestacion); ?>">
            <input type="text" class="form-control input-sm" id="doccogestor" style="display: none" name="doccogestor"   placeholder="Text input" value="<?php echo($foexiste['edoccogestor']); ?>">
            <input type="text" class="form-control input-sm" id="folio" name="folio" style="display: none" placeholder="Text input" value="<?php echo($folio); ?>">
            <input type="text" class="form-control input-sm" id="idintegrante" style="display: none" name="idintegrante"  placeholder="Text input" value="<?php echo($tdatinte['tidintegrante']); ?>">
            
            <input type="text" class="form-control input-sm" id="colordimension2" style="display: none" name="colordimension2"  placeholder="Text input" value="<?php echo substr($colordimension2,1); ?>">
            <input type="text" class="form-control input-sm" id="colordimension3" style="display: none" name="colordimension3"  placeholder="Text input" value="<?php echo substr($colordimension3,1); ?>">
            <input type="text" class="form-control input-sm" id="colordimension4" style="display: none" name="colordimension4"  placeholder="Text input" value="<?php echo substr($colordimension4,1); ?>">
            <input type="text" class="form-control input-sm" id="colordimension6" style="display: none" name="colordimension6"  placeholder="Text input" value="<?php echo substr($colordimension6,1); ?>">
            
            <input type="text" class="form-control input-sm" id="casillamatriz" style="display: none" name="casillamatriz"  placeholder="Text input" value="<?php echo($matrizg['ecasillamatriz']); ?>">
            <input type="text" class="form-control input-sm" id="foliomatriz" style="display: none" name="foliomatriz"  placeholder="Text input" value="<?php echo($matrizg['efolio']); ?>">
            <input type="text" class="form-control input-sm" id="idintegrantematriz" style="display: none" name="idintegrantematriz"  placeholder="Text input" value="<?php echo($matrizg['eidintegrante']); ?>">
            <input type="text" class="form-control input-sm" id="nombreintmatriz" style="display: none" name="nombreintmatriz"  placeholder="Text input" value="<?php echo($matrizg['enombreintegrante']); ?>">
            <!-- fin head            -->

            <table><h3>Vista de las dimensiones que tienen privaciones Intermedia</h3>
                <tr>
                <td><h4>folio: <?php echo($folio);?></h4>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">Ver Matriz de Graduación del Formulario Intermedia</button>
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="exampleModalLabel">Matriz de Graduación de Intermedia</h4>
                      </div>
                      <div class="modal-body">
                      <table class="table table-bordered" colspan="4">
                            <thead>
                                <tr>
                                    <td colspan="1">ITI / IPM</td>
                                    <td colspan="1">Pobre extremo IPM</td>
                                    <td colspan="1">Pobre moderado IPM</td>
                                    <td colspan="1">No pobre IPM</td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td colspan="1">Pobre extremo ITI</td>
                                                                      
                                    <td colspan="1" align="center" <?php if($matrizg['ecasillamatriz']=='1'){echo('bgcolor="#DF0101"');}else{}?>>1</td>
                                    <td colspan="1" align="center" <?php if($matrizg['ecasillamatriz']=='2'){echo('bgcolor="#DF0101"');}else{}?>>2</td>
                                    <td colspan="1" align="center" <?php if($matrizg['ecasillamatriz']=='3'){echo('bgcolor="#DF0101"');}else{}?>>3</td>
                                </tr>
                                <tr>
                                    <td colspan="1">Pobre moderado ITI</td>
                                    <td colspan="1" align="center" <?php if($matrizg['ecasillamatriz']=='4'){echo('bgcolor="#DF0101"');}else{}?>>4</td>
                                    <td colspan="1" align="center" <?php if($matrizg['ecasillamatriz']=='5'){echo('bgcolor="#DF0101"');}else{}?>>5</td>
                                    <td colspan="1" align="center" <?php if($matrizg['ecasillamatriz']=='6'){echo('bgcolor="#DF0101"');}else{}?>>6</td>
                                </tr>
                                <tr>
                                    <td colspan="1">No pobre ITI</td>
                                    <td colspan="1" align="center" <?php if($matrizg['ecasillamatriz']=='7'){echo('bgcolor="#DF0101"');}else{}?>>7</td>
                                    <td colspan="1" align="center" <?php if($matrizg['ecasillamatriz']=='8'){echo('bgcolor="#DF0101"');}else{}?>>8</td>
                                    <td colspan="1" align="center" <?php if($matrizg['ecasillamatriz']=='9'){echo('bgcolor="#30E24E"');}else{}?>>9</td>
                                </tr>
                            </tbody>
                        </table>
                        <table class="table table-bordered" colspan="4">
                            <thead>
                                <tr>
                                <td colspan="4">INDICE TRADICIONAL DE INGRESOS DEL HOGAR (ITI): $ <?php echo($matrizg['eindicetradicionalingreso']);?></td>
                                </tr>
                                <tr>
                                    <td colspan="2" bgcolor="#DF0101" >SIN CONDICIONES PARA PROMOVER</td>
                                    <td colspan="2" bgcolor="#30E24E" >CON CONDICIONES PARA PROMOVER</td>
                                    
                                </tr>
                            </thead>
                        </table>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      </div>
                    </div>
                  </div>
                </div>
                </td>
                </tr>
                <tr>
                    <td><h4>Nombre Representante: <?php echo($tdatinte['tnombre']); ?></h4></td>
                </tr>
            </table>
        
            <?php echo($listarprivaciones); ?>
        
             <?php echo($botoneral);?>
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
$("#anterior").click(function ()
        {
            
         location.href = "../../privaciones/c_dimensionespseleccion/fc_dimensionespseleccion?folio=" + $('#folio').val()+"&idintegrante=0"+"&doccogestor="+ $('#doccogestor').val()+"&idestacion="+$('#idestacion').val();                                          
     //   location.href = "../../privaciones/c_dimensionespseleccion/fc_dimensionespseleccion?folio=" + $('#folio').val()+"&idintegrante=0"+"&doccogestor="+ $('#doccogestor').val();    
        });
              
        $("#salir").click(function ()
        {
         location.href = "../../c_principalhogar/fc_principalhogar"; 
        //location.href = "../c_capitulosintegrantes/fc_capitulosintegrantes?folio=" + $('#folio').val()+ "&idintegrante="+"&idintegrante=0";                    
        });

function iravista(folio,iddimen,idpriv,idestacion)
    {   if (iddimen == '2')
        {
        var colordimension = $('#colordimension2').val();
        }
        if (iddimen == '3')
        {
        var colordimension = $('#colordimension3').val();
        }
        if (iddimen == '4')
        {
        var colordimension = $('#colordimension4').val();
        }
        if (iddimen == '6')
        {
        var colordimension = $('#colordimension6').val();
        }
        
    // alert('folio' + folio + 'iddimension' + iddimen + 'logro' + idlog + 'color dimension' + colordimension );
     
      location.href = "../c_privaciones/fc_privaciones?folio="+ folio +"&iddimension="+iddimen +"&idprivacion="+idpriv+"&colordimension="+colordimension;
     
    }    

</script>
</html>