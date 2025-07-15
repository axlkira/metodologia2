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
        <!--fin para imprimir el folio y llevarlo-->
<hr>
       <form class="form-group" name="formulario" id="formulario">

<!--Check varias selecciones -->
    <div class="row">
        <div id="c2p13bdiv" name="c2p13bdiv" class="form-group col-md-12 form-group-sm">
        <div id="c2p13bo0div" class="has-error">
        <label class="control-label">13b.¿Qué uso le dan  a los residuos inorganicos?  (Multiple respuesta) 
            <button type="button" id="vayuda" name="vayuda" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModal">
                        <span class="glyphicon glyphicon-question-sign" aria-hidden="true"></span> Ayuda
                    </button>       
        </label>
        </div>
        <div id="c2p13bo1div" <?php if($arrayrespuestas['ec2p13bo1']=='' || $arrayrespuestas['ec2p13bo1']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
            <label> <!--en este caso se manda a la fincion javascript el nombre del campo-->
              <input type="checkbox" name="c2p13bo1" id="c2p13bo1" onclick="cambiarsinoc2p13b('SI','c2p13bo1','c2p13bo1div','c2p13bdiv',4);" <?php if($arrayrespuestas['ec2p13bo1']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            Los separan (papel,carton,plastico) y entregan a un recuperador 
            </label>
        </div>
        </div>
        <div id="c2p13bo2div" <?php if($arrayrespuestas['ec2p13bo2']=='' || $arrayrespuestas['ec2p13bo2']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="c2p13bo2" id="c2p13bo2" onclick="cambiarsinoc2p13b('SI','c2p13bo2','c2p13bo2div','c2p13bdiv',4);" <?php if($arrayrespuestas['ec2p13bo2']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            Los venden o hacen canje con ellos
          </label>
        </div>
        </div>
        <div id="c2p13bo3div" <?php if($arrayrespuestas['ec2p13bo3']==''|| $arrayrespuestas['ec2p13bo3']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="c2p13bo3" id="c2p13bo3" onclick="cambiarsinoc2p13b('SI','c2p13bo3','c2p13bo3div','c2p13bdiv',4);" <?php if($arrayrespuestas['ec2p13bo3']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
            Los recoge el servicio de aseo
          </label>
        </div>
        </div>
             <div id="c2p13bo4div" <?php if($arrayrespuestas['ec2p13bo4']==''|| $arrayrespuestas['ec2p13bo4']=='NO'){echo('class=" has-error"');}?>>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="c2p13bo4" id="c2p13bo4" onclick="cambiarsinoc2p13b('SI','c2p13bo4','c2p13bo4div','c2p13bdiv',4);" <?php if($arrayrespuestas['ec2p13bo4']=='SI'){echo('value="SI" checked');}else{echo('value="NO"');}?>>
           Otro Uso
          </label>
        </div>
        </div>   
            <div class="row" id="c2p13bcualmostrar" name="c2p13bcualmostrar" <?php if($arrayrespuestas['ec2p13bo4']== 'NO'||$arrayrespuestas['ec2p13bo4']== ''){echo('style="display:none"');}else{echo('');}  ?> >
            <div  id="c2p13bcualdiv" name="c2p13bcualdiv" class="form-group col-md-3">
                       <label class="control-label">Cual?</label>
                       <input type="text" class="form-control text-uppercase" id="c2p13bcual" onkeypress="return soloLetras(event)"  onchange="validarcampotexcuadros('c2p13bcualdiv','c2p13bcual','4')" name="c2p13bcual"   placeholder="Cual?" value="<?php if($arrayrespuestas['ec2p13bcual'] == ''){echo('0');}else{ echo($arrayrespuestas['ec2p13bcual']);} ?>">
            </div>
            </div>
            
            
       
        </div>
          
      </div>
    
<!--Fin Chek varias selecciones-->

            
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
            <?php if($arrayrespuestas['ec2p13bo1']=="" & $arrayrespuestas['ec2p13bo2']=="" & $arrayrespuestas['ec2p13bo3']==""& $arrayrespuestas['ec2p13bo4']=="")
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
                          data: {vfolio : $('#folio').val(), vc2p13bo1 : $('#c2p13bo1').val(),vc2p13bo2 : $('#c2p13bo2').val(),vc2p13bo3 : $('#c2p13bo3').val(),vc2p13bo4 : $('#c2p13bo4').val(),vc2p13bcual : $('#c2p13bcual').val()},    
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
                          data: {vfolio : $('#folio').val(), vc2p13bo1 : $('#c2p13bo1').val(),vc2p13bo2 : $('#c2p13bo2').val(),vc2p13bo3 : $('#c2p13bo3').val(),vc2p13bo4 : $('#c2p13bo4').val(),vc2p13bcual : $('#c2p13bcual').val()},    
                          dataType: "html",
                          success : function(obj){                      
                          botonactualizar();
                          }
                        });                   
        });
        

        $("#siguiente").click(function ()
        {
         botonsiguiente();
         location.href = "../c_c2p14/fc_c2p14?folio=" + $('#folio').val();                    

        });
              
        $("#anterior").click(function ()
        {
         botonanterior();
         location.href = "../c_c2p13a/fc_c2p13a?folio=" + $('#folio').val(); 
        //location.href = "../c_capitulosintegrantes/fc_capitulosintegrantes?folio=" + $('#folio').val()+ "&idintegrante="+"&idintegrante=0";                    
        });

//para cargar variables capitulo, pregunta,encuestador,vivienda,barra
cargardatosgenerales('<?php echo($arraydatosgenerales['ecapitulo']); ?>','Pregunta 13b de 16','<?php echo($arraydatosgenerales['enomcoges']); ?>','<?php echo($arraydatosgenerales['etitular']); ?>','85');
//control del boton ayuda
botonayuda();

});

function cambiarsinoc2p13b(opcion,campoval,divcampo,divcompleto,campos)
{
    if($('#' + campoval).val() === opcion)
    {
        $('#' + campoval).val("NO");
        $('#' + divcampo).addClass('has-error');
    }
    else
    {
        $('#' + campoval).val(opcion);
        $('#' + divcampo).removeClass('has-error');
    }
    if(campoval == 'c2p13bo4')
        {
            if($('#' + campoval).val() == 'SI')
            {
                //alert('aca lo muestra');
                $('#c2p13bcualmostrar').show(1000);
                $('#c2p13bcual').val('');
                $('#c2p13bcualdiv').addClass(' has-error');            

            }
            else
            {
                //alert('aca lo oculta');
                $('#c2p13bcualmostrar').hide(1000);
                $('#c2p13bcual').val('98');
                $('#c2p13bcualdiv').removeClass(' has-error');
  
            }
        }
      
      validarcuadrosc2p13b(divcompleto,campos);
}

function validarcuadrosc2p13b(divcuadro,ncampos)
{
    //alert($('#' + divcuadro).find('input').prop('checked', true).length);
    //alert($('.has-error').length);
    //alert(ncampos + ' ncampos');
    
    if ($('#c2p13bcual').val() != '')
    {
        //|| $('#c3p2cualdiv')===('form-group col-md-10 form-group-sm has-error')
        if($('.has-error').length === (ncampos + 1))
        {   //alert('soniguales');
           $('#guardar').prop('disabled', true);
           $('#actualizar').prop('disabled', true);
           $('#cancelar').prop('disabled', true);
           $('#anterior').prop('disabled', false);
           $('#siguiente').prop('disabled', false);
        }
        else
        {
           $('#guardar').prop('disabled', false);
           $('#actualizar').prop('disabled', false);
           $('#cancelar').prop('disabled', false);
           $('#anterior').prop('disabled', true);
           $('#siguiente').prop('disabled', true);       
        }
    }
    else
    {
           $('#guardar').prop('disabled', true);
           $('#actualizar').prop('disabled', true);
           $('#cancelar').prop('disabled', true);
           $('#anterior').prop('disabled', false);
           $('#siguiente').prop('disabled', false);        
    }

}

function validarcampotexcuadros(div,campo,ncampos)
{
    validarbolitasytexto(div,campo);

    validarcuadrosc2p13b(div,ncampos);

}

</script>
</html>