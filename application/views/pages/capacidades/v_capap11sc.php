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
        <input type="text" class="form-control input-sm" id="idestacion" name="idestacion"  style="display:none"   placeholder="folio" value="<?php echo($idestacion); ?>">
        <!--fin para imprimir el folio y llevarlo-->
<hr>
        <form class="form-group" name="formulario" id="formulario">

            <!--inicio radio una sola seleccion-->
            <div class="row">
                
                 &nbsp&nbsp&nbsp&nbsp <label class="control-label">2. ESTRATEGIAS
                     
                     
        </label><br><br>
            <div id="capap11div" name="capap11div" <?php if($arrayrespuestas['ecapap11']==''){echo('class="form-group col-md-12 form-group-sm has-error"');}else{echo('class="form-group col-md-12 form-group-sm"');}?>>   
                <label class="control-label">11. ¿Qué hacen en su hogar cuando disminuyen los ingresos mensuales?(Unica respuesta)
                    <button type="button" id="vayuda" name="vayuda" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModal">
                        <span class="glyphicon glyphicon-question-sign" aria-hidden="true"></span> Ayuda
                    </button>
                </label>
                <div class="radio">
                    <label><!--en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="capap11" id="capap11" onclick="colocaropcion('capap11o1','valorcapap11','capap11div');" value="capap11o1" <?php if($arrayrespuestas['ecapap11']=='capap11o1'){echo('checked');}?>>
                        Buscan fuentes alternativas de ingresos económicos. 
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="capap11" id="capap11" onclick="colocaropcion('capap11o2','valorcapap11','capap11div');" value="capap11o2" <?php if($arrayrespuestas['ecapap11']=='capap11o2'){echo('checked');}?>>
                        Esperan que el estado otorgue un subsidio económico. 
                    </label>             
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="capap11" id="capap11" onclick="colocaropcion('capap11o3','valorcapap11','capap11div');" value="capap11o3" <?php if($arrayrespuestas['ecapap11']=='capap11o3'){echo('checked');}?>>
                        Se despreocupa de la situación. 
                    </label>             
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="capap11" id="capap11" onclick="colocaropcion('capap11o4','valorcapap11','capap11div');" value="capap11o4" <?php if($arrayrespuestas['ecapap11']=='capap11o4'){echo('checked');}?>>
                        Economizar 
                    </label>             
                </div>
               
                
                <input type="text" class="form-control" id="valorcapap11" name="valorcapap11" style="display:none" placeholder="Text input" value="<?php echo($arrayrespuestas['ecapap11']); ?>">
            </div>
            </div> 
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
            <?php if($arrayrespuestas['ecapap11']=="")
            {
                echo($botoneragcapa);
            }
            else
            {
                echo($botoneraacapa);
            }?>   
            <!--Fin botonera guardar y actualizar-->

        </form>
    
    <!--Inicio Este es el footer NO TOCAR-->
    <?php echo($foot); ?>
    <!--fin del footer NO TOCAR-->
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
  function botonguardar21()
{
    $('#siguiente').show();
    $('#siguiente').prop('disabled', false);
    $('#actualizar').show();
    $('#actualizar').prop('disabled', true);
    $('#cancelar').show();
    $('#cancelar').prop('disabled', true);
    $('#guardar').hide();
    $('#anterior').prop('disabled', true);

    mensajito('MENSAJE:','La informacion se guardo');//me llama el mensajito de guardar

}

function botonactualizar21()
{
    $('#siguiente').prop('disabled', false);
    $('#actualizar').prop('disabled', true);
    $('#cancelar').prop('disabled', true);
    $('#anterior').prop('disabled', true);

    mensajito('MENSAJE','La informacion se actualizo');//me llama el mensajito de guardar

}
    
    
    
    $(document).ready(function()
    {

        $("#guardar").click(function ()
        {
                        $.ajax({
                          url: "fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(), vvalorcapap11 : $('#valorcapap11').val()},    
                          dataType: "html",
                          success : function(obj){
                          
                          botonguardar21();
                          }
                        });                    
        });

        
        $("#actualizar").click(function ()
        {
                        $.ajax({
                          url: "fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(), vvalorcapap11 : $('#valorcapap11').val()},    
                          dataType: "html",
                          success : function(obj){
                        
                          botonactualizar21();
                          }
                        });                   
        });
        

        $("#siguiente").click(function ()
        {
         botonsiguiente();
        
         location.href = "../c_capap12sc/fc_capap12sc?folio=" + $('#folio').val()+"&idestacion="+$('#idestacion').val();                  

        });
              
        $("#anterior").click(function ()
        {
         botonanterior();
                            
        });

//para cargar variables capitulo, pregunta,encuestador,vivienda,barra
cargardatosgenerales('<?php echo($arraydatosgenerales['ecapitulo']); ?>','Pregunta 1 de 3','<?php echo($arraydatosgenerales['enomcoges']); ?>','<?php echo($arraydatosgenerales['etitular']); ?>','33');
//control del boton ayuda
botonayuda();

});

</script>
</html>