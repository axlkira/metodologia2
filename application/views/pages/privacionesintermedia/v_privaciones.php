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
        
        <div class="container">

            <!--head            -->
            <?php echo($head); ?><br>
            <input type="text" class="form-control input-sm" id="doccogestor" name="doccogestor" style="display: none" placeholder="Text input" value="<?php echo($foexiste['edoccogestor']); ?>">
            <input type="text" class="form-control input-sm" id="folio" name="folio"  style="display: none" placeholder="Text input" value="<?php echo($folio); ?>">
            <input type="text" class="form-control input-sm" id="iddimension" style="display: none" name="iddimension"  placeholder="Text input" value="<?php echo($iddimen); ?>">
            <input type="text" class="form-control input-sm" id="idprivacion" style="display: none" name="idprivacion"  placeholder="Text input" value="<?php echo($idpriva); ?>">
            <input type="text" class="form-control input-sm" id="colordimension" style="display: none" name="colordimension"  placeholder="Text input" value="<?php echo($colordimen); ?>">
          
            <!--fin para imprimir el folio y llevarlo-->
            <form class="form-group" name="formulario" id="formulario">
                <div class="row">
                    <div class="form-group form-group-sm">   
                        <div class="form-group  ">
                                              <div class="panel panel-primary">
                           <!-- Default panel contents -->
                           <div class="panel-heading"><h2>Resultado del calculo de privaciones por integrante y por hogar del folio: <?php echo($folio);?></h2></div>
                           
                           <?php echo($tabla); ?>

                        </div>
                    </div>
                </div> 
 

      <?php echo($botoneral);?>

            <!--INICIO Este es el footer NO TOCAR-->
            <?php echo($foot); ?>
                <!--fin del footer NO TOCAR-->
        </div>
            </form>
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
         location.href = "../c_dimensionesp/fc_dimensionesp?folio=" + $('#folio').val()+"&idintegrante=0";                    

        });
              
        $("#salir").click(function ()
        {
         location.href = "../../c_login/fc_vlogin";
        //location.href = "../c_capitulosintegrantes/fc_capitulosintegrantes?folio=" + $('#folio').val()+ "&idintegrante="+"&idintegrante=0";                    
        });
/////////////////////////////////////// FIN Funciones que llaman al controlador para guardar y actualizar////////////////////////////////////////////////////////////////////////                        
</script>
</html>