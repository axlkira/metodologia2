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
        <input type="text" class="form-control input-sm" id="folio" name="folio"  style="display:none"   placeholder="folio" value="<?php echo($folio); ?>">
        <input type="text" class="form-control input-sm" id="doccogestor" name="doccogestor" style="display: none" placeholder="Text input" value="<?php echo($doccogestor); ?>">
         <input type="text" class="form-control input-sm" id="idestacion" name="idestacion"  style="display:none"   placeholder="" value="<?php echo($idestacion); ?>">
        <hr>
        <form class="form-group" name="formulario" id="formulario">
              
        <!--inicio radio una sola seleccion-->
            <div class="row">
            <div class="panel panel-info">
            <div class="panel-heading">CORRESPONSABILIDAD Y AUTONOMÍA </div>
            </div>     
                <label class=" form-group col-md-12 control-label"><h4><strong>Información de corresponsabilidad</strong></h4></label>      
            <div id="infocorresp1div" name="infocorresp1div" <?php if($carrayrespuestasinfocorresp['einfocorresp1']==''){echo('class="form-group col-md-12 form-group-sm has-error"');}else{echo('class="form-group col-md-12 form-group-sm"');}?>>   
                <label class="control-label">1. El hogar recibe de manera activa el acompañamiento familiar ?</label>
                <div class="radio">
                    <label><!--en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="infocorresp1" id="infocorresp1" onclick="colocaropcion('1','valorinfocorresp1','infocorresp1div');" value="1" <?php if($carrayrespuestasinfocorresp['einfocorresp1']=='1'){echo('checked');}?>>
                        Si
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="infocorresp1" id="infocorresp1" onclick="colocaropcion('2','valorinfocorresp1','infocorresp1div');" value="2" <?php if($carrayrespuestasinfocorresp['einfocorresp1']=='2'){echo('checked');}?>>
                        No
                    </label>             
                </div>               
                <input type="text" class="form-control" id="valorinfocorresp1" name="valorinfocorresp1" style="display:none" placeholder="Text input" value="<?php echo($carrayrespuestasinfocorresp['einfocorresp1']); ?>">
            </div>
            </div> 
            <!--fin radio una sola seleccion-->
            <!--inicio radio una sola seleccion-->
            <div class="row">
            <div id="infocorresp2div" name="infocorresp2div" <?php if($carrayrespuestasinfocorresp['einfocorresp2']==''){echo('class="form-group col-md-12 form-group-sm has-error"');}else{echo('class="form-group col-md-12 form-group-sm"');}?>>   
                <label class="control-label">2. El hogar asiste y acude a las oportunidades acercadas ?</label>
                <div class="radio">
                    <label><!--en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="infocorresp2" id="infocorresp2" onclick="colocaropcion('1','valorinfocorresp2','infocorresp2div');" value="1" <?php if($carrayrespuestasinfocorresp['einfocorresp2']=='1'){echo('checked');}?>>
                        Si
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="infocorresp2" id="infocorresp2" onclick="colocaropcion('2','valorinfocorresp2','infocorresp2div');" value="2" <?php if($carrayrespuestasinfocorresp['einfocorresp2']=='2'){echo('checked');}?>>
                        No
                    </label>             
                </div>               
                <input type="text" class="form-control" id="valorinfocorresp2" name="valorinfocorresp2" style="display:none" placeholder="Text input" value="<?php echo($carrayrespuestasinfocorresp['einfocorresp2']); ?>">
            </div>
            </div> 
            <!--fin radio una sola seleccion-->
            <!--inicio radio una sola seleccion-->
            <div class="row">
            <div id="infocorresp3div" name="infocorresp3div" <?php if($carrayrespuestasinfocorresp['einfocorresp3']==''){echo('class="form-group col-md-12 form-group-sm has-error"');}else{echo('class="form-group col-md-12 form-group-sm"');}?>>   
                <label class="control-label">3. El hogar cumple con los compromisos asociados al acompañamiento familiar ?</label>
                <div class="radio">
                    <label><!--en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="infocorresp3" id="infocorresp3" onclick="colocaropcion('1','valorinfocorresp3','infocorresp3div');" value="1" <?php if($carrayrespuestasinfocorresp['einfocorresp3']=='1'){echo('checked');}?>>
                        Si
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="infocorresp3" id="infocorresp3" onclick="colocaropcion('2','valorinfocorresp3','infocorresp3div');" value="2" <?php if($carrayrespuestasinfocorresp['einfocorresp3']=='2'){echo('checked');}?>>
                        No
                    </label>             
                </div>               
                <input type="text" class="form-control" id="valorinfocorresp3" name="valorinfocorresp3" style="display:none" placeholder="Text input" value="<?php echo($carrayrespuestasinfocorresp['einfocorresp3']); ?>">
            </div>
            </div> 
            <!--fin radio una sola seleccion-->
            <div class="row">
            <div  id="infocorrespcualmostrar" name="infocorrespcualmostrar" class="form-group col-md-12 form-group-sm">
            <label class="control-label">Información cualitativa:</label>
            <textarea class="form-control" id="infocorrespcual" onkeypress="return soloLetras(event)"  onchange="validarbolitasytexto('infocorrespcualmostrar','infocorrespcual')" name="infocorrespcual" value=""><?php if($carrayrespuestasinfocorresp['einfocorrespcual'] == ''){echo('');}else{ echo($carrayrespuestasinfocorresp['einfocorrespcual']);} ?></textarea>
            </div>
            </div>
            <label><h4><strong>Información de autonomía familiar</strong></h4></label>    
        <!--inicio radio una sola seleccion-->
            <div class="row">
            <div id="infoautonomia1div" name="infoautonomia1div" <?php if($carrayrespuestasinfocorresp['einfoautonomia1']==''){echo('class="form-group col-md-12 form-group-sm has-error"');}else{echo('class="form-group col-md-12 form-group-sm"');}?>>   
                <label class="control-label">1. El hogar propone y gestiona alternativas para superar o mejorar sus condiciones de vida ?</label>
                <div class="radio">
                    <label><!--en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="infoautonomia1" id="infoautonomia1" onclick="colocaropcion('1','valorinfoautonomia1','infoautonomia1div');" value="1" <?php if($carrayrespuestasinfocorresp['einfoautonomia1']=='1'){echo('checked');}?>>
                        Si
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="infoautonomia1" id="infoautonomia1" onclick="colocaropcion('2','valorinfoautonomia1','infoautonomia1div');" value="2" <?php if($carrayrespuestasinfocorresp['einfoautonomia1']=='2'){echo('checked');}?>>
                        No
                    </label>             
                </div>               
                <input type="text" class="form-control" id="valorinfoautonomia1" name="valorinfoautonomia1" style="display:none" placeholder="Text input" value="<?php echo($carrayrespuestasinfocorresp['einfoautonomia1']); ?>">
            </div>
            </div> 
            <!--fin radio una sola seleccion-->
            <!--inicio radio una sola seleccion-->
            <div class="row">
            <div id="infoautonomia2div" name="infoautonomia2div" <?php if($carrayrespuestasinfocorresp['einfoautonomia2']==''){echo('class="form-group col-md-12 form-group-sm has-error"');}else{echo('class="form-group col-md-12 form-group-sm"');}?>>   
                <label class="control-label">2. El hogar reconoce sus dificultades y trabaja o toma decisiones para avanzar sobre las mismas ?</label>
                <div class="radio">
                    <label><!--en este caso se manda a la fincion javascript el valor del campo-->
                        <input type="radio" name="infoautonomia2" id="infoautonomia2" onclick="colocaropcion('1','valorinfoautonomia2','infoautonomia2div');" value="1" <?php if($carrayrespuestasinfocorresp['einfoautonomia2']=='1'){echo('checked');}?>>
                        Si
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="infoautonomia2" id="infoautonomia2" onclick="colocaropcion('2','valorinfoautonomia2','infoautonomia2div');" value="2" <?php if($carrayrespuestasinfocorresp['einfoautonomia2']=='2'){echo('checked');}?>>
                        No
                    </label>             
                </div>               
                <input type="text" class="form-control" id="valorinfoautonomia2" name="valorinfoautonomia2" style="display:none" placeholder="Text input" value="<?php echo($carrayrespuestasinfocorresp['einfoautonomia2']); ?>">
            </div>
            </div> 
            <!--fin radio una sola seleccion-->
            <div class="row">
            <div  id="infoautonomia2cualmostrar" name="infoautonomia2cualmostrar" class="form-group col-md-12 form-group-sm">
            <label class="control-label">Información cualitativa:</label>
            <textarea class="form-control" id="infoautonomiacual" onkeypress="return soloLetras(event)"  onchange="validarbolitasytexto('infoautonomia2cualmostrar','infoautonomiacual')" name="infoautonomiacual" value=""><?php if($carrayrespuestasinfocorresp['einfoautonomiacual'] == ''){echo('');}else{ echo($carrayrespuestasinfocorresp['einfoautonomiacual']);} ?></textarea>
            </div>
            </div>
            
            <!--inicio botonera guardar y actualizar-->
            <?php if($carrayrespuestasinfocorresp['einfocorresp1']=="")
            {
                echo($botonerag);
            }
            else
            {
                echo($botoneraa);
            }?>   
            <!--Fin botonera guardar y actualizar-->

        </form>
    
    <!--Inicio Este es el footer NO TOCAR-->
    <?php echo($foot); ?>
    <!--fin del footer NO TOCAR-->
    </div>
    
    
    
    <div class="modal fade" data-backdrop="static" id="Modaleditareqipo">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
<!--          <span aria-hidden="true">&times;</span>-->
        </button>
      </div>
      <div class="modal-body">
        <p>Fin de la estación H, por favor presione clic en el boton continuar.</p>
      </div>
      <div class="modal-footer">
        <button type="button" id="continuar" class="btn btn-primary">Continuar</button>
<!--        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>-->
      </div>
    </div>
  </div>
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
      <script src="<?php echo JSPERFIL, 'jscoordenadas.js' ?>"></script>
    <script src="<?php echo JSPERFIL, 'jscargardatos.js' ?>"></script>
    <link href="<?php echo JBOX, 'Source/jBox.css' ?>" rel="stylesheet">
    <!--Inicio de los enlaces-->
</body>

<script> 
///////////////////////////////////////Funciones que llaman al controlador para guardar y actualizar////////////////////////////////////////////////////////////////////////    
   
    function Modaleditarequipoespe() 
{
$('#Modaleditareqipo').modal();
}
    
    $(document).ready(function()
    {

        $("#guardar").click(function ()
        {
                        $.ajax({
                          url: "fc_actualizar",
                          type: "POST",
                          data: {vfolio : $('#folio').val(), vvalorinfocorresp1 : $('#valorinfocorresp1').val(),vvalorinfocorresp2 : $('#valorinfocorresp2').val(),vvalorinfocorresp3 : $('#valorinfocorresp3').val(),vinfocorrespcual : $('#infocorrespcual').val(),vvalorinfoautonomia1 : $('#valorinfoautonomia1').val(),vvalorinfoautonomia2 : $('#valorinfoautonomia2').val(),vinfoautonomiacual : $('#infoautonomiacual').val()},    
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
                          type: "POST",
                          data: {vfolio : $('#folio').val(), vvalorinfocorresp1 : $('#valorinfocorresp1').val(),vvalorinfocorresp2 : $('#valorinfocorresp2').val(),vvalorinfocorresp3 : $('#valorinfocorresp3').val(),vinfocorrespcual : $('#infocorrespcual').val(),vvalorinfoautonomia1 : $('#valorinfoautonomia1').val(),vvalorinfoautonomia2 : $('#valorinfoautonomia2').val(),vinfoautonomiacual : $('#infoautonomiacual').val()},    
                          dataType: "html",
                          success : function(obj){                      
                          botonactualizar();
                          }
                        });                   
        });
        
        
        
        $("#continuar").click(function ()
        {
               location.href = "../../c_principalprotocolo/fc_principalprotocolo?folio=" + $('#folio').val()+"&idintegrante=0"+"&doccogestor="+$('#doccogestor').val();                             
        });
        
        
        
        $("#siguiente").click(function ()
        {
            
//         botonsiguiente();
//         insertarpaso(1207); 
//        location.href = "../../c_protocolol1e2/fc_protocolol1e2?folio="+ $('#folio').val() +"&idintegrante=0"+"&doccogestor="+$('#doccogestor').val();  
        
     
        if($('#idestacion').val() == 0 ){
            //insertarpaso(1001);
        //Modaleditarequipoespe() ;
        //coordenadas(10);
         //location.href = "../../c_principalprotocolo/fc_principalprotocolo?folio=" + $('#folio').val()+"&idintegrante=0"+"&doccogestor="+$('#doccogestor').val();   
         location.href = "../c_lograrhogar/fc_lograrhogar?folio=" + $('#folio').val()+"&idintegrante=0"+"&doccogestor="+$('#doccogestor').val() +"&idestacion=" +$('#idestacion').val();  
    }
    else
    {
        location.href = "../../linea2estacion1/c_avanceproceso/fc_avanceproceso?folio=" + $('#folio').val()+"&idintegrante=0"+"&doccogestor="+$('#doccogestor').val()+ "&idestacion=" +$('#idestacion').val();                    
    }
        });
        $("#anterior").click(function ()
        {
            if($('#idestacion').val() == 0 ){
                
                location.href = "../c_crisiss/fc_crisiss?folio="+ $('#folio').val() +"&idintegrante=0"+"&doccogestor="+$('#doccogestor').val() +"&idestacion="+$('#idestacion').val();                     
            }
            else if ($('#idestacion').val() == 25 )
            {
        location.href = "../c_historiahogar3/fc_historiahogar3?folio="+ $('#folio').val() +"&idintegrante=0"+"&doccogestor="+$('#doccogestor').val() +"&idestacion="+$('#idestacion').val();                     
            }
            else
             {
        location.href = "../c_historiahogar2/fc_historiahogar2?folio="+ $('#folio').val() +"&idintegrante=0"+"&doccogestor="+$('#doccogestor').val() +"&idestacion="+$('#idestacion').val();                     
            }
   
            

        });
//para cargar variables capitulo, pregunta,encuestador,vivienda,barra
cargardatosgenerales('<?php echo('Historia hogar'); ?>','Vista 5 de 7','<?php echo($arraydatosgenerales['enomcoges']); ?>','<?php echo($arraydatosgenerales['etitular']); ?>','70');
//control del boton ayuda
botonayuda();
});
$("#capitulos").hide();


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



</script>
</html>