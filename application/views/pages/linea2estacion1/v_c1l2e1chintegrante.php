<!DOCTYPE html>
<html lang="es">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title><?php echo $titulo ?>  </title>
    <link rel="stylesheet" href="<?php echo BOOTSTRAP, 'css/bootstrap1.min.css'; ?>" >
    <meta charset="utf-8">
    <meta http-equiv="Content-Language" content="es"/>

</head>
<body onload="contarck()">  
    <div class="container">
        <!--head-->
        <?php echo($head); ?>
        <!-- fin head-->
        
        <!--para tener la variable de idvivienda-->
        <input type="text" class="form-control input-sm" id="folio" name="folio"  style="display:none"   placeholder="folio" value="<?php echo($folio); ?>">
        <input type="text" class="form-control input-sm" id="idintegrante" name="idintegrante"  style="display:none"   placeholder="idintegrante" value="<?php echo($idintegrante); ?>">
<!--        <input type="text" class="form-control input-sm" id="edad" name="edad"  style="display:none"   placeholder="" value="<?php echo($arraydatosgenerales['eedadintegrante']); ?>">
        <input type="text" class="form-control input-sm" id="sexo" name="sexo"  style="display:none"   placeholder="" value="<?php echo($arraydatosgenerales['esexointegrante']); ?>">-->
        
        <!--fin para imprimir el idintegrante y llevarlo-->
<hr>
        <form class="form-group" name="formulario" id="formulario">

            <!--inicio radio una sola seleccion-->
            <div class="row">

                    
                
 

  <div class="form-group  has-feedback">
    <label class="control-label" for="valorfiltro">Digite para realizar la busqueda</label>
    <input type="text" class="form-control input-sm" id="valorfiltro" name="valorfiltro" aria-describedby="inputSuccess4Status" onkeyup="filtar()">
    <span class="glyphicon glyphicon-search form-control-feedback" aria-hidden="true"></span>
  </div>
 
  <div class="form-group  has-feedback">
    <label class="control-label" for="valorc11p12a">Primera cualidad seleccionada</label>
    <input type="text" class="form-control input-sm" id="valorcualidad1" name="valorcualidad1"  value="<?php echo($arrayrespuestas['ecualidad1int']); ?>" disabled="disabled">
    <span class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span>
  </div>
  
   <div class="form-group  has-feedback">
    <label class="control-label" for="valorc11p12b">Segunda cualidad seleccionada</label>
    <input type="text" class="form-control input-sm" id="valorcualidad2" name="valorcualidad2"  value="<?php echo($arrayrespuestas['ecualidad2int']); ?>" disabled="disabled">
    <span class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span>
  </div>

    <div class="form-group  has-feedback">
    <label class="control-label" for="valorc11p12c">Tercera cualidad seleccionada</label>
    <input type="text" class="form-control input-sm" id="valorcualidad3" name="valorcualidad4"  value="<?php echo($arrayrespuestas['ecualidad3int']); ?>" disabled="disabled">
    <span class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span>
  </div>
                
  <div class="form-group  has-feedback">
    <label class="control-label" for="valorc11p12d">Cuarta cualidad seleccionada</label>
    <input type="text" class="form-control input-sm" id="valorcualidad4" name="valorcualidad4"  value="<?php echo($arrayrespuestas['ecualidad4int']); ?>" disabled="disabled">
    <span class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span>
  </div>
                

            <div id="c11p12bdiv" name="c11p12bdiv" <?php if($arrayrespuestas['ecualidad1int']==''){echo('class="form-group col-md-12 form-group-sm has-error"');}else{echo('class="form-group col-md-12 form-group-sm"');}?>>   
                <label class="control-label">Identificacion de las cualidades de cada integrante
                    <button type="button" id="vayuda" name="vayuda" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModal">
                        <span class="glyphicon glyphicon-question-sign" aria-hidden="true"></span> Ayuda
                    </button>
                </label>
                
                
            </div>
             <div id="filtroscualidades">
                        <?php echo($arraydatoscualidades); ?>
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
            <?php if($arrayrespuestas['ecualidad1int']=="")
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
    
    function filtar()
    {
        
                        $.ajax({
                          url: "filtrarcualidades",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),vidintegrante : $('#idintegrante').val(),
                                                            vcualidad : $('#valorfiltro').val(),
                                                            vcualidad1 : $('#valorcualidad1').val(),
                                                            vcualidad2 : $('#valorcualidad2').val(),
                                                            vcualidad3 : $('#valorcualidad3').val(),
                                                            vcualidad4 : $('#valorcualidad4').val()},    
                          dataType: "html",
                          success : function(obj){                      
                          $('#filtroscualidades').html(obj);
                          // contarck();
                          }
                          }); 
                        
                        
    }
    
    
    //Número máximo de casillas marcadas por cada fila 
var maxi=4; 
var total = 0;
var nuevomaxi = 0;
//El contador es un arrayo de forma que cada posición del array es una linea del formulario 


function contarck(){
     var i = 0;
    
     
  for (i=1;i<141;i++){
      
       if ($('#c1l2e1ch' + i).is(':checked')){ 
        $('#c1l2e1chdiv' + i).removeClass('has-error');  
         total++;
      }
      
  }
  nuevomaxi =  maxi - total;
 
}
  var contador=new Array(total);

function validar(check,checkdiv,valor) { 

   if ($('#' + check + '').is(':checked')){ 
      	//está marcada, entonces aumento en uno el contador del grupo 
    $('#' + checkdiv + '').removeClass('has-error');
            contador++; 
       
      	//compruebo si el contador ha llegado al máximo permitido 
      	if (contador>nuevomaxi) { 
         	//si ha llegado al máximo, muestro mensaje de error 
                mensajito('MENSAJE:','No se pueden elegir mas de 4 cualidades');
         	//alert('No se pueden elegir más de '+maxi+' cualidades.'); 
         	//desmarco la casilla, porque no se puede permitir marcar 
         	$('#' + check + '').prop('checked',false);
                $('#' + checkdiv + '').addClass('has-error');
                 
                
         	//resto una unidad al contador de grupo, porque he desmarcado una casilla 
         	contador--; 
      	}
        else{
            //alert('colocar1');
            llenarinputcolocar(check,valor);
        } 
   }else { 
      	//si la casilla no estaba marcada, resto uno al contador de grupo 
      	    $('#' + checkdiv + '').addClass('has-error');
            llenarinputquitar(check,valor);
            contador--; 
     
   } 
   
   
   
   habilitarboton();
}


function mensajito(titulo, mensaje)
{
new jBox('Notice', {
    title: titulo,
    content: mensaje,
    color: 'red',
    animation: {open: 'flip', close: 'flip'},
    position: {x: 'right', y: 'center'},
    autoClose: 2000
});
}


function habilitarboton()
{
    if($('#valorcualidad1').val() == '' && $('#valorcualidad2').val() == '' && $('#valorcualidad3').val() == '' && $('#valorcualidad4').val() == '')
    {
       $('#guardar').prop('disabled', true);
       $('#actualizar').prop('disabled', true);
       $('#cancelar').prop('disabled', true);
       $('#anterior').prop('disabled', false);
       $('#siguiente').prop('disabled', false);
    }else
    {
       $('#guardar').prop('disabled', false);
       $('#actualizar').prop('disabled', false);
       $('#cancelar').prop('disabled', false);
       $('#anterior').prop('disabled', true);
       $('#siguiente').prop('disabled', true);
    }
}


function llenarinputcolocar(chulo,valor){
    //alert('colocar');
    for(i=1;i<5;i++){
    if($('#valorcualidad' + i).val() == ''){
        
        $('#valorcualidad' + i).val(valor);
        break;
        
    }
    }
}

function llenarinputquitar(chulo,valor){
    
    for(i=1;i<5;i++){

        if($('#valorcualidad' + i).val() == valor){
            $('#valorcualidad' + i).val('');
            break;
        }
    
    }
}

///////////////////////////////////////Funciones que llaman al controlador para guardar y actualizar////////////////////////////////////////////////////////////////////////    
    $(document).ready(function()
    {
        

/* Podemos usar un selector cualquiera siempre que tenga checkboxes… y podéis limitarlo a lo que queráis */
        

        $("#guardar").click(function ()
        {
                        $.ajax({
                          url: "fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),vidintegrante : $('#idintegrante').val(),vvalorcualidad1int: $('#valorcualidad1').val(), vvalorcualidad2int : $('#valorcualidad2').val(),vvalorcualidad3int : $('#valorcualidad3').val(),vvalorcualidad4int : $('#valorcualidad4').val()},
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
                          data: {vfolio : $('#folio').val(),vidintegrante : $('#idintegrante').val(),vvalorcualidad1int: $('#valorcualidad1').val(), vvalorcualidad2int : $('#valorcualidad2').val(),vvalorcualidad3int : $('#valorcualidad3').val(),vvalorcualidad4int : $('#valorcualidad4').val()},    
                          dataType: "html",
                          success : function(obj){                      
                          botonguardar();
                          }
                        });                    
        });
        

        $("#siguiente").click(function ()
                           {
        //insertidpaso();
         location.href = "../c_l2e1diligenciarintegrante/fc_l2e1diligenciarintegrante?folio="+ $('#folio').val() +"&idintegrante=0"+"&doccogestor="+$('#doccogestor').val();;
         
        });
              
        $("#anterior").click(function ()
        {
         botonanterior();
         location.href = "../c_l2e1diligenciarintegrante/fc_l2e1diligenciarintegrante?folio="+ $('#folio').val() +"&idintegrante=0"+"&doccogestor="+$('#doccogestor').val();;                 
        //location.href = "../c_capitulosintegrantes/fc_capitulosintegrantes?idintegrante=" + $('#idintegrante').val()+ "&idintegrante="+"&idintegrante=0";                    
        });



cargardatosgenerales('<?php echo($arraydatosgenerales['ecapitulo']); ?>','Pregunta 1 de 6','<?php echo($arraydatosgenerales['enomcoges']); ?>','<?php echo($arraydatosgenerales['enombreintegrante']." "." - "." "."Sexo:"." ".$arraydatosgenerales['esexointegrante']."   "."  -  "."   "."Edad:"."   ".$arraydatosgenerales['eedadintegrante']); ?>','16');
//control del boton ayuda
botonayuda();

});

</script>
</html>