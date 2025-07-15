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
            <input type="text" class="form-control input-sm" id="doccogestor" name="doccogestor" style="display: none"  placeholder="Text input" value="<?php echo($foexiste['edoccogestor']); ?>">
            <input type="text" class="form-control input-sm" id="folio" name="folio" style="display: none" placeholder="Text input" value="<?php echo($folio); ?>">
            <input type="text" class="form-control input-sm" id="idintegrante" style="display: none" name="idintegrante"  placeholder="Text input" value="<?php echo($tdatinte['tidintegrante']); ?>">
            
            <input type="text" class="form-control input-sm" id="colordimension1" style="display: none" name="colordimension1"  placeholder="Text input" value="<?php echo substr($colordimension1,1); ?>">
            <input type="text" class="form-control input-sm" id="colordimension2" style="display: none" name="colordimension2"  placeholder="Text input" value="<?php echo substr($colordimension2,1); ?>">
            <input type="text" class="form-control input-sm" id="colordimension3" style="display: none" name="colordimension3"  placeholder="Text input" value="<?php echo substr($colordimension3,1); ?>">
            <input type="text" class="form-control input-sm" id="colordimension4" style="display: none" name="colordimension4"  placeholder="Text input" value="<?php echo substr($colordimension4,1); ?>">
            <input type="text" class="form-control input-sm" id="colordimension5" style="display: none" name="colordimension5"  placeholder="Text input" value="<?php echo substr($colordimension5,1); ?>">
            <input type="text" class="form-control input-sm" id="colordimension6" style="display: none" name="colordimension6"  placeholder="Text input" value="<?php echo substr($colordimension6,1); ?>">
            <input type="text" class="form-control input-sm" id="colordimension7" style="display: none" name="colordimension7"  placeholder="Text input" value="<?php echo substr($colordimension7,1); ?>">
            <input type="text" class="form-control input-sm" id="colordimension8" style="display: none" name="colordimension8"  placeholder="Text input" value="<?php echo substr($colordimension8,1); ?>">
            <input type="text" class="form-control input-sm" id="colordimension9" style="display: none" name="colordimension9"  placeholder="Text input" value="<?php echo substr($colordimension9,1); ?>">
            
            
            <input type="text" class="form-control input-sm" id="colordimension1PF" style="display: none" name="colordimension1PF"  placeholder="Text input" value="<?php echo substr($colordimension1PF,1); ?>">
            <input type="text" class="form-control input-sm" id="colordimension2PF" style="display: none" name="colordimension2PF"  placeholder="Text input" value="<?php echo substr($colordimension2PF,1); ?>">
            <input type="text" class="form-control input-sm" id="colordimension3PF" style="display: none" name="colordimension3PF"  placeholder="Text input" value="<?php echo substr($colordimension3PF,1); ?>">
            <input type="text" class="form-control input-sm" id="colordimension4PF" style="display: none" name="colordimension4PF"  placeholder="Text input" value="<?php echo substr($colordimension4PF,1); ?>">
            <input type="text" class="form-control input-sm" id="colordimension5PF" style="display: none" name="colordimension5PF"  placeholder="Text input" value="<?php echo substr($colordimension5PF,1); ?>">
            <input type="text" class="form-control input-sm" id="colordimension6PF" style="display: none" name="colordimension6PF"  placeholder="Text input" value="<?php echo substr($colordimension6PF,1); ?>">
            <input type="text" class="form-control input-sm" id="colordimension7PF" style="display: none" name="colordimension7PF"  placeholder="Text input" value="<?php echo substr($colordimension7PF,1); ?>">
            <input type="text" class="form-control input-sm" id="colordimension8PF" style="display: none" name="colordimension8PF"  placeholder="Text input" value="<?php echo substr($colordimension8PF,1); ?>">
            <input type="text" class="form-control input-sm" id="colordimension9PF" style="display: none" name="colordimension9PF"  placeholder="Text input" value="<?php echo substr($colordimension9PF,1); ?>">
            
            
            <input type="text" class="form-control input-sm" id="idestacion" style="display: none"  name="idestacion"  value="<?php echo $this->session->userdata('idestacion') ?>">
            
            <!-- fin head            -->
            <h3>Vista de las dimensiones e información de los logros promovidos</h3>

            <table class="table table-bordered" colspan="6">
                            <thead>
                                <tr>
                                    <td colspan="6" align="center" bgcolor="#D1DFD3">Total logros calculados: <?php echo($foexisteporcen['etotal']); ?></td>
                                   
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td colspan="1" align="center">Total logros rojos: <?php echo($foexisteporcen['etotalrojo']); ?></td>
                                    <td colspan="1" align="center">Total logros verdes: <?php echo($foexisteporcen['etotalverd']); ?></td>
                                    <td colspan="1" align="center">Total logros Gris: <?php echo($foexisteporcen['etotalgris']); ?></td>
                                    <td colspan="1" align="center">Total logros azul: <?php echo($foexisteporcen['etotalazul']); ?></td>
                                    <td colspan="1" align="center">Total logros café: <?php echo($foexisteporcen['etotalcafe']); ?></td>
                                    <td colspan="1" align="center">Total logros blanco: <?php echo($foexisteporcen['etotalblan']); ?></td>
                                </tr>
                                <tr>
                                    <td colspan="1" align="center">Porcentaje logros rojos: <?php echo($foexisteporcen['eporcerojo']); ?> %</td>
                                    <td colspan="1" align="center">Porcentaje logros verdes: <?php echo($foexisteporcen['eporceverd']); ?> %</td>
                                    <td colspan="1" align="center">Porcentaje logros Gris: <?php echo($foexisteporcen['eporcegris']); ?> %</td>
                                    <td colspan="1" align="center">Porcentaje logros azul: <?php echo($foexisteporcen['eporceazul']); ?> %</td>
                                    <td colspan="1" align="center">Porcentaje logros café: <?php echo($foexisteporcen['eporcecafe']); ?> %</td>
                                    <td colspan="1" align="center">Porcentaje logros blanco: <?php echo($foexisteporcen['eporceblan']); ?> %</td>
                                </tr>
                            </tbody>
                        </table>

                        <table class="table table-bordered" colspan="6">
                            <thead>
                                <tr>
                                    <td colspan="6" align="center" bgcolor="#D1DFD3">Porcentaje de logros que le apuntan a las privaciones: <?php echo($foexisteporcenaplicacn['eporcentajeactual']); ?> %</td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td colspan="1" align="center">Total logros rojos: <?php echo($foexisteporcenaplicacn['egeneralrojo']); ?></td>
                                    <td colspan="1" align="center">Total logros verdes: <?php echo($foexisteporcenaplicacn['egeneralverd']); ?></td>
                                    <td colspan="1" align="center">Total logros Gris: <?php echo($foexisteporcenaplicacn['egeneralgris']); ?></td>
                                </tr>
                                <tr>
                                    <td colspan="1" align="center">Total logros azul: <?php echo($foexisteporcenaplicacn['egeneralazul']); ?></td>
                                    <td colspan="1" align="center">Total logros café: <?php echo($foexisteporcenaplicacn['egeneralcafe']); ?></td>
                                    <td colspan="1" align="center">Total logros blanco: <?php echo($foexisteporcenaplicacn['egeneralblan']); ?></td>
                                </tr>
                            </tbody>
                        </table>

                        <table class="table table-bordered" colspan="6">
                            <thead>
                                <tr>
                                    <td colspan="6" align="center" bgcolor="#D1DFD3">Logros que le apuntan a las privaciones:</td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td colspan="1" align="left">7. Las personas entre 18 a 65 años que lo requieren acceden a servicios de intermediacion laboral.</td>
                                    <td colspan="1" align="left">8. Los hombres y las mujeres entre 15 y 65 años que lo requieren acceden a certificacion de competencias laborales o  formacion para el trabajo.</td>
                                    <td colspan="1" align="left">9. Los hombres y las mujeres entre 18 y 65 años que lo requieran acceden a apoyo a emprendimientos o fortalecimiento de Unidades Productivas.</td>
                                </tr>
                                <tr>
                                    <td colspan="1" align="left">10. Ningun niño, niña o adolescente entre 5 y 14 años esta vinculado a actividades laborales y ningun adolescente entre 15 y 17 años realiza trabajo sin permiso del Ministerio de trabajo.</td>
                                    <td colspan="1" align="left">11. Los menores en edad escolar (desde los 5 hasta los 17 años) que no hayan terminado el ciclo basico o media, estan siendo atendidos por el servicio educativo formal.</td>
                                    <td colspan="1" align="left">12. Las personas mayores de 15 anos y mas saben leer y escribir</td>
                                </tr>
                                <tr>
                                    <td colspan="1" align="left">13. Los adultos entre 18 y 65 años que no  hayan terminado el ciclo media (11 ) y no esten estudiando, se vinculan al sistema educativo.</td>
                                    <td colspan="1" align="left">15. Los niños y niñas menores de 5 años estan vinculados a algun programa de atención integral en cuidado, nutrición y educación inicial.</td>
                                    <td colspan="1" align="left">16. Los integrantes  del hogar estan afiliados al Sistema General de Seguridad Social en Salud - SGSS-.</td>
                                </tr>
                                <tr>
                                    <td colspan="1" align="left">17. Los integrantes del hogar acceden a las intervenciones de promoción y prevención en salud en el marco SGSSS.</td>
                                    <td colspan="1" align="left">24. El hogar cuenta con recursos para el acceso y consumo de alimentos.</td>
                                    <td colspan="1" align="left">25. La vivienda cuenta con abastecimiento de agua potable.</td>
                                </tr>
                                <tr>
                                    <td colspan="1" align="left">26. La vivienda cuenta con un sistema de desagues.</td>
                                    <td colspan="1" align="left">28. La vivienda cuenta con espacios diferenciados de baño, cocina, y dormitorios.</td>
                                    <td colspan="1" align="left">29. En la vivienda no duermen tres o más personas en cada cuarto.</td>
                                </tr>
                                <tr>
                                    <td colspan="1" align="left">30. La vivienda no tiene pisos de tierra.</td>
                                    <td colspan="1" align="left">31. La vivienda posee paredes adecuadas que posibilitan la seguridad en la estructura fisica.</td>
                                </tr>
                            </tbody>
                        </table>
           
           
            <table style="width:100%">
            
                <tr>
                    <td><h4>folio: <?php echo($folio);?></h4></td>
                </tr>
                <tr>
                    <td><h4>Nombre Representante: <?php echo($tdatinte['tnombre']);?></h4></td>
                    <td><h4>Diagnostico Inicial</h4></td>
                    <td><h4>Diagnostico Actual</h4></td>
                </tr>
            </table>
            
            <?php echo($listarlogros); ?>
        
             <?php echo($botoneral);?>
            <!--INICIO Este es el footer NO TOCAR-->
            <?php echo($foot); ?>
                <!--fin del footer NO TOCAR-->
    </div>
    
    
 <div class="modal fade" id="modal2" data-backdrop="static" >
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
<!--          <span aria-hidden="true">&times;</span>-->
        </button>
      </div>
      <div class="modal-body">
        <p>Por favor , presionar Clic en el boton continuar.</p>
      </div>
      <div class="modal-footer">
          <button type="button" id="continuar2" class="btn btn-primary">Continuar</button>
<!--        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>-->
      </div>
    </div>
  </div>
</div>
    
     <div class="modal fade" id="modal2105" data-backdrop="static" >
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
<!--          <span aria-hidden="true">&times;</span>-->
        </button>
      </div>
      <div class="modal-body">
        <p>Por favor , presionar Clic en el boton continuar.</p>
      </div>
      <div class="modal-footer">
          <button type="button" id="continuar2105" class="btn btn-primary">Continuar</button>
<!--        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>-->
      </div>
    </div>
  </div>
</div>
    
    <div class="modal fade" id="modal2304" data-backdrop="static" >
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
<!--          <span aria-hidden="true">&times;</span>-->
        </button>
      </div>
      <div class="modal-body">
        <p>Por favor , presionar Clic en el boton continuar.</p>
      </div>
      <div class="modal-footer">
          <button type="button" id="continuar2304" class="btn btn-primary">Continuar</button>
<!--        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>-->
      </div>
    </div>
  </div>
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
 $(document).ready(function()
    {
 $("#continuar2").click(function (){
            
           
            location.href = "../../c_protocolol2e2/fc_protocolol2e2?folio="+ $('#folio').val() +"&idintegrante=0"+"&doccogestor="+$('#doccogestor').val()+"&idestacion=22";
            
        });
        
        $("#continuar2105").click(function (){
            
           
            location.href = "../../c_protocolol2e1/fc_protocolol2e1?folio="+ $('#folio').val() +"&idintegrante=0"+"&doccogestor="+$('#doccogestor').val()+"&idestacion=21";
            
        });
        
         $("#continuar2304").click(function (){
            
           
            location.href = "../../c_protocolol2e3/fc_protocolol2e3?folio="+ $('#folio').val() +"&idintegrante=0"+"&doccogestor="+$('#doccogestor').val()+"&idestacion=23";
            
        });





$("#anterior").click(function ()
        {
            if($('#idestacion').val() == '21')
            {
                
                modal2105();
                insertarpaso(2105);
            }else  if($('#idestacion').val() == '22')
            {
                
                modal2();
                insertarpaso(2204);
            }
            if($('#idestacion').val() == '23')
            {
                
                modal2304();
                insertarpaso(2304);
            }
            else
            {
                    location.href = "../../c_principalhogar/fc_principalhogar";    
                   //  location.href = "../c_dimensiones/fc_dimensiones?folio=" + $('#folio').val()+"&idintegrante=0";                    
            }
           
        });
              
        $("#salir").click(function ()
        {
         location.href = "../../c_principalhogar/fc_principalhogar"; 
        //location.href = "../c_capitulosintegrantes/fc_capitulosintegrantes?folio=" + $('#folio').val()+ "&idintegrante="+"&idintegrante=0";                    
        });
        
        });

function iravista(folio,iddimen,idlog)
    { 
    //    alert(folio);
    //    alert(iddimen);
    //    alert(idlog);
        if (iddimen == '1')
        {
        //var colordimension = $('#colordimension1').val();
        var colordimensionPF = $('#colordimension1PF').val();
        }
        if (iddimen == '2')
        {
        //var colordimension = $('#colordimension2').val();
        var colordimensionPF = $('#colordimension2PF').val();
        }
        if (iddimen == '3')
        {
        //var colordimension = $('#colordimension3').val();
        var colordimensionPF = $('#colordimension3PF').val();
        }
        if (iddimen == '4')
        {
        var colordimensionPF = $('#colordimension4PF').val();    
        //var colordimension = $('#colordimension4').val();
        }
        if (iddimen == '5')
        {
        //var colordimension = $('#colordimension5').val();
        var colordimensionPF = $('#colordimension5PF').val();
        }
        if (iddimen == '6')
        {
        //var colordimension = $('#colordimension6').val();
        var colordimensionPF = $('#colordimension6PF').val();
        }
        if (iddimen == '7')
        {
        //var colordimension = $('#colordimension7').val();
        var colordimensionPF = $('#colordimension7PF').val();
        }
        if (iddimen == '8')
        {
        //var colordimension = $('#colordimension8').val();
        var colordimensionPF = $('#colordimension8PF').val();
        }
        if (iddimen == '9')
        {
        //var colordimension = $('#colordimension9').val();
        var colordimensionPF = $('#colordimension9PF').val();
        }
    //    alert(colordimensionPF);
    // alert('folio' + folio + 'iddimension' + iddimen + 'logro' + idlog + 'color dimension' + colordimension );
     
      location.href = "../c_logros/fc_logros?folio="+ folio +"&iddimension="+iddimen +"&idlogro="+idlog+"&colordimensionPF="+colordimensionPF;
     
    }    
    
    function insertarpaso(paso)
   {
    //alert('test');
                        $.ajax({
                          url: "fc_cerrarpaso",
                          type: "GET",
                          data: {vfolio: $('#folio').val(), vidpaso: paso, vestado:1},
                          dataType: "html",
                          success: function(obj) {
                          //me llama el mensajito de actualizar
                          //$('#datos').html(obj);
                          //location.href = "../c_capituloshogar/fc_capituloshogar?folio="+ $('#folio').val() +"&idintegrante="+$('#idintegrante').val();                  
                        }
                       });
   }




function modal2() 
{
$('#modal2').modal();
}


function modal2105() 
{
$('#modal2105').modal();
}

function modal2304() 
{
$('#modal2304').modal();
}
</script>
</html>