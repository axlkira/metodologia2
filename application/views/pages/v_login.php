<!DOCTYPE html>
<html lang="es">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <title>Login  </title>
        <link rel="stylesheet" href="<?php echo BOOTSTRAP, 'css/bootstrap1.min.css'; ?>" >
        <!--<link rel="stylesheet" href="<?php echo BOOTSTRAP, 'css/styleresponsive.css'; ?>" >-->
        <link rel="stylesheet" href="<?php echo BOOTSTRAP, 'css/style.css'; ?>" >
        <meta charset="utf-8">
        <meta http-equiv="Content-Language" content="es"/>
        

    </head>
    <body>  
      <br>
        <div class="container">


            <!--head            -->
            <?php echo($head); ?>
            <!-- fin head            -->
            <br/><br/>
<div class="row">
    <div class=" col-md-offset-4">
    <div class="container well form-group col-md-5">
        
        <div class="panel panel-success">
            <div class="panel-heading">
              <h3 class="panel-title text-center">Autenticación</h3>
            </div>
            <div class="panel-body">
              Por favor digite su usuario y contraseña
            </div>
        </div>

            <div class="form-group">
              <label for="documento">Usuario</label>
              <input id="documento"   name="documento" type="text" class="form-control" placeholder="Digite su usuario">
            </div>
        
            <div class="form-group">
              <label for="contrasena">Constraseña</label>
             <input id="contrasena"  name="contrasena" type="password" class="form-control" placeholder="Digite su Contraseña">
            </div>            
            <button name="enviar" id="enviar" class="btn btn-lg btn-danger btn-block" style="background-color: #5393EB">Ingresar</button>

    </div>
    </div>
</div>

<!--fin del row loguin-->
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
            <script src="<?php echo JSPERFIL, 'jsmensajes.js' ?>"></script>
            <script src="<?php echo BOOTSTRAP, 'js/jsdeshabilitarf12.js' ?>"></script>
            <!--FIN ENLACES - NO TOCAR-->
            </body>


            <script>
     $(document).ready(function()
    {               
         $('#progressBar').hide();  
         $('#camposhead').hide(); 
//         $('#ipregunta').hide(); 
//         $('#iecuestador').hide(); 
//         $('#iidviviendo').hide(); 

        $('#enviar').on('click', function() 
        {
                $.ajax({
                  url: "fc_login",
                  type: "GET",
                  data: {documento: $('#documento').val(), 
                  contrasena: $('#contrasena').val()},    
                  dataType: "html",
                  success : function(obj)
                  {       //alert(obj);              
                        if (obj === '1') 
                        {
                            window.location = "../c_principalhogar/fc_principalhogar";
                        } 
                        else 
                        {
                            mensajito('NO VALIDO', 'Datos incorrectos');
                        }
                  }
                }); 
        });


    });

  
                                            
                                            
            </script>
</html>