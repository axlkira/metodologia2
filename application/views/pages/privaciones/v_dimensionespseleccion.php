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
            <input type="text" class="form-control input-sm" id="ipmintermedia" style="display: none" name="ipmintermedia" value="<?php echo($tipmintermedia['eipmintermedia']); ?>">
            <!-- fin head            -->

            <table><h3>Vista del estado inicial y actual de las privaciones</h3>
                <tr>
                <td><h4>folio: <?php echo($folio);?></h4>
                </td>
                </tr>
              </table>  
                <table style="width:100%"><h3>Vista de las Privaciones</h3>
                <tr>
                    <td><h4>Nombre Representante: <?php echo($tdatinte['tnombre']);?></h4></td>
                    <td><h4>Diagnostico Inicial</h4></td>
                    
        <?php if($tipmintermedia['eipmintermedia'] >= '1')
            {
            echo('<td><h4>Con Diagnostico Actual</h4></td>');
            }
            else
            {
              echo('<td><h4>Sin Diagnostico Actual</h4></td>');
            }?>
                </tr>
                <tr>
                <td></td>    
                <td><button type="button" class="btn btn-success" onclick="irprivacionini();">Ir Diagnostico Inicial</button></td>
            <?php if($tipmintermedia['eipmintermedia'] >= '1')
            {
            echo('<td><button type="button" class="btn btn-success" onclick="irprivacionfin();">Ir al Diagnostico Actual</button></td>');
            }
            else
            {
              echo('<td><button type="button" style="display:none" class="btn btn-success" onclick="irprivacionfin();">Ir al Diagnostico Actual</button></td>');
            }?>
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
 function irprivacionini()
    {      
    location.href = "../c_dimensionesp/fc_dimensionesp?folio="+ $('#folio').val() +"&idintegrante=0"+"&doccogestor="+$('#doccogestor').val();                  
    }
  function irprivacionfin()
    {      
    location.href = "../../privacionesintermedia/c_dimensionesp/fc_dimensionesp?folio="+ $('#folio').val() +"&idintegrante=0"+"&doccogestor="+$('#doccogestor').val();                  
    }               
$("#anterior").click(function ()
        {
        location.href = "../../c_principalhogar/fc_principalhogar";        
//        if($('#idestacion').val() == '1')
//      {    
//        location.href = "../../c_principalhogar/fc_principalhogar";    
//    }
//    else if($('#idestacion').val() == '32')
//    {
//     location.href = "../../historiahogarf3v2/c_seleccionaropcion/fc_seleccionaropcion?folio="+ $('#folio').val() +"&idintegrante=0"+"&idestacion="+$('#idestacion').val();                     
//    }
    });
$("#salir").click(function ()
        {
         location.href = "../../c_principalhogar/fc_principalhogar"; 
        });
      
</script>
</html>