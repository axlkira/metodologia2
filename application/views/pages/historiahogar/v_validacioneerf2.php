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
        <input type="text" class="form-control input-sm" id="doccogestor" name="doccogestor" style="display:none" placeholder="Text input" value="<?php echo($doccogestor); ?>">
        <input type="text" class="form-control input-sm" id="idestacion" name="idestacion" style="display:none" placeholder="Text input" value="<?php echo($idestacion); ?>">
        <!--fin para imprimir el folio y llevarlo-->
<hr>



<div class="row">
    
        <div class="panel panel-info">
            <div class="panel-heading">IDENTIFICACIÓN DE LAS RELACIONES FAMILIARES EN EL HOGAR POR MEDIO DE LA ESCALA EVALUATIVA DE RELACIONES FAMILIARES </div>
        </div>                  
<!--                        <p class="category">
                            A continuación encontrará usted una serie de afirmaciones acerca de su familia y de la forma como ustedes se relacionan. 
                            Por favor, seleccionar la opción que corresponda con su opinión:
                            <br>
                            <b>Totalmente de acuerdo: </b> 5 <br>
                            <b>De acuerdo: </b> 4 <br>
                            <b>Ni de acuerdo ni en desacuerdo: </b> 3 <br>
                            <b>En desacuerdo: </b> 2 <br>
                            <b>Totalmente en desacuerdo: </b> 1 <br>
                            <br>
                            <b>Recuerde que NO hay respuestas buenas o malas. Sólo queremos conocer su opinión sobre la manera como usted percibe las relaciones en su familia. </b><br><br>
                            <b>Recuerde que la persona que elija debe ser quien respondió la primera encuesta aplicada. </b><br><br>
                            

                        </p>-->
                        
                        
                        
                            <div class="col-md-6">
                                <div class="form-group label-floating">
                                    <label class="" style="width:400px">¿ Quien respondio la primera evaluacion?</label>
                                    <select class="form-control" id="inteerf1"  name="inteerf1" onchange="guardardocumento();yita();nocuentainfo()">
                                     <?php  echo $carraydatosintegrante?>
                                           <option value ="0">NO SE CUENTA CON LA INFORMACION</option>
                                    </select>
                                </div>
                            </div></div>
                        <?php
                        
//                        $integrante = "";
//                        
//                        if($carraydatosintegranteerfam1['edocerfam1'] == "")
//                        {
//                            $integrante = '<div class="row">
//                            <div class="col-md-6">
//                                <div class="form-group label-floating">
//                                    <label class="" style="width:400px">¿ Quien respondio la primera evaluacion?</label>
//                                    <select class="form-control" id="inteerf1"  name="inteerf1" onchange="guardardocumento();yita();nocuentainfo()">
//                                       '.$carraydatosintegrante.'
//                                           <option value ="0">NO SE CUENTA CON LA INFORMACION</option>
//                                    </select>
//                                </div>
//                            </div></div>';
//                        }
//                        
//                        else
//                        {
//                            $integrante = '<div class="row">
//                            <div class="col-md-6">
//                            <label class="" style="width:400px">El integrante que dio respuesta a la primera aplicacion de la ERFAM es </label>
//                            <input type="text" class="form-control input-sm" id="nomintegranteerfam1" name="nomintegranteerfam1" disabled="disabled" placeholder="Text input" value="'.$carraydatosintegranteerfam1['enombreerfam1'].'">
//                             </div>
//                        </div><br>';
//                        }
//                        
//                        echo $integrante;
                        
                        ?>
                        
                             <input type="text" class="form-control input-sm" id="docintegranteerfam1" name="docintegranteerfam1" style="display: none" placeholder="Text input" value="<?php echo ($carraydatosintegranteerfam1['edocerfam1']); ?>">

<!--                                 <div class="row">
                            <div class="col-md-6">
                                <div class="form-group label-floating">
                                    <label class="" style="width:400px">¿ Quien respondio la primera evaluacion?</label>
                                    <select class="form-control" id="inteerf1" name="inteerf1" onchange="habilitarguardar()">
                                       <?php echo $carraydatosintegrante ?>

                                    </select>
                                </div>
                            </div>-->
                             
                             
     <div  class="col-md-6 row">
         <div class="form-group label-floating" id="divsino">
                                    <label class="" style="width:400px">El integrante que va a responder la segunda aplicación de la erfam es?</label>
                                    <input type="text" class="form-control input-sm" id="nomintegranteerfam1" name="nomintegranteerfam1" disabled="disabled" placeholder="" value="<?php echo ($carraydatosintegranteerfam1['enombreerfam1']); ?>"><br>
                                    <label style="display: none">Por favor responda SI o NO</label>
                                    <select class="form-control" id="sino"  name="sino" <?php  if($carraydatosintegranteerfam1['edocerfam1'] == "") {echo 'style="display:none"';} ?>  onchange="habilitacuandono(); ">
                                         <option value="">SELECCIONE</option>
                                        <option value="SI">SI</option>
                                         <option value="NO">NO</option>

                                    </select>
                                </div>
                            </div>
                        <br><br>
                        
                        <div class="row">
                            <div id="divselect2" style="display: none" class="col-sm-12">
                                <select class="form-control" id="rfinal" name="rfinal" onchange="habilitarguardar()">
                                    <option value="">SELECCIONE</option>     
                                    <option value="1">Integrante ausente al momento de la visita (queda abierta la visita, para que el cogestor diligencie telefónicamente)</option>
                                        <option value="2"> Integrante ya no hace parte del hogar (inhabilitar ERFAM y cerrar la visita)</option>
                                         <option value="3">Integrante ausente y definitivamente no se logra contactar para aplicación de ERFAM(inhabilitar ERFAM y cerrar la visita)</option>

                                    </select> 
                            </div>
                            
                        </div>
                        
                        <div class="row" style="text-align: left">
                            <div class="col-md-12">
                                <?php
                               
                                    echo($botonerag);
                               
                                ?>   
                            </div>
                        </div>
                        
                        
                        
                        <br><br><br>





       

            
            
            <!--Fin botonera guardar y actualizar-->

      
            
    <!--Inicio Este es el footer NO TOCAR-->
    <?php echo($foot); ?>
    <!--fin del footer NO TOCAR-->
    
    
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
    <script src="<?php echo JSPERFIL, 'jscoordenadas.js?9.2' ?>"></script>
    <link href="<?php echo JBOX, 'Source/jBox.css' ?>" rel="stylesheet">
    <!--Inicio de los enlaces-->
</body>

<script> 
///////////////////////////////////////Funciones que llaman al controlador para guardar y actualizar////////////////////////////////////////////////////////////////////////    
//
//
//
//
//
//
//function
//
//NO TOCAR funcion que generar el mensaje de guardado    
    function okguardar()
    {
    new jBox('Notice', {
        content: 'Tu informacion se Guardado!!!',
        color: 'red',
        animation: {open: 'tada', close: 'flip'},
        position: {x: 'right', y: 'center'},
        autoClose: 2000
    });
    }
    //fin funcion que generar el mensaje de guardado
    
    function yita()
    {
        if($('#inteerf1').val()!=='')
        {
            $('#sino').show();
        }
    }

function nocuentainfo(){
    if ($('#inteerf1').val() == 0)
    {
        $('#divsino').hide(1000);
        $('#divselect2').hide(1000);
        $('#guardar').prop('disabled',false);
        $('#nomintegranteerfam1').val('') ;
    }
    else
    {
       $('#divsino').show(1000);       
       $('#guardar').prop('disabled',true);
    }
    
}

//function llamarguardar()
//{
//if($('#sino').val()=='NO')
//    {
//        $('#divselect2').show(500);
//    }
//    else
//    {
//        $('#divselect2').hide(500);
//    }    
//    
//}

function habilitacuandono()
{
    if($('#sino').val()=='NO')
    {
        $('#divselect2').show(500);
        
    }
    else
    {
        $('#divselect2').hide(500);
        $('#guardar').prop('disabled', false);
    }
}



    //NO TOCAR funcion que generar el mensaje de actualizar    
    function okactualizar()
    {
    new jBox('Notice', {
        content: 'Tu informacion se Actualizo!!!',
        color: 'red',
        animation: {open: 'tada', close: 'flip'},
        position: {x: 'right', y: 'center'},
        autoClose: 2000
    });
    }
    //fin funcion que generar el mensaje de guardado
    
 
    $(document).ready(function()
    {   
      

        $("#guardar").click(function ()
        {
          //  alert($('#idestacion').val());
          //  alert($('#inteerf1').val());
          //  alert($('#sino').val());
          //  alert($('#rfinal').val());
     
            
            if($('#inteerf1').val() !== '0'){
            
            
                       if(($('#sino').val()== 'NO' &&  $('#rfinal').val()== '2') || ($('#sino').val()=='NO' &&  $('#rfinal').val()=='3') )
                       {
                        //alert('jjjajajajaj');   
                        $.ajax({
                          url: "fc_actualizar",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),
                                 vsino : $('#sino').val(),
                                 vrfinal: $('#rfinal').val()
                                 },    
                          dataType: "html",
                          success : function(obj){                      
//                        $('#siguiente').show();
//                        $('#siguiente').prop('disabled', false);
                          //alert ('La información se guardó satisfactoriamente, respuesta cuando es NO');
                          //coordenadas(10);
                          //location.href = "../c_historiahogar/fc_historiahogar?folio="+ $('#folio').val() +"&idintegrante=0"+"&doccogestor="+$('#doccogestor').val()+ "&idestacion=0";                      
                          $('#cancelar').show();
                          $('#siguiente').show();
                          $('#cancelar').prop('disabled', true);
                          $('#guardar').prop('disabled', true);
                          $('#siguiente').prop('disabled', false);
                       

  mensajito('MENSAJE:','La informacion se guardo');//me llama el mensajito de guardar

                          }
                        });                    
        }
    else
    {
        if($('#sino').val()=='SI')
        {
            //alert('SIIIIII');
            //alert($('#docintegranteerfam1').val());
            
            
            
            $.ajax({
                          url: "fc_actualizar1",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),
                                 vsino : $('#sino').val(),                                 
                                 vdocintegranteerfam1: $('#docintegranteerfam1').val()
                                 },    
                          dataType: "html",
                          success : function(obj){                      
//                        $('#siguiente').show();
//                        $('#siguiente').prop('disabled', false);
                          //alert ('La información se guardó satisfactoriamente, RESPUESTA CUANDO ES SI');
                          //coordenadas(10);
                          //location.href = "../c_historiahogar/fc_historiahogar?folio="+ $('#folio').val() +"&idintegrante=0"+"&doccogestor="+$('#doccogestor').val()+ "&idestacion=0";                      
                          $('#cancelar').show();
                          $('#siguiente').show();
                          $('#cancelar').prop('disabled', true);
                          $('#guardar').prop('disabled', true);
                          $('#siguiente').prop('disabled', false);
                       

  mensajito('MENSAJE:','La informacion se guardo');//me llama el mensajito de guardar

                          }
                        });                    
        } 
    }
    if($('#sino').val()== 'NO' &&  $('#rfinal').val()== '1'){
         $.ajax({
                          url: "fc_actualizar2",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),
                                 vsino : $('#sino').val(),                                 
                                 vrfinal: $('#rfinal').val()
                                 },    
                          dataType: "html",
                          success : function(obj){                      
//                        $('#siguiente').show();
//                        $('#siguiente').prop('disabled', false);
                          //alert ('La información se guardó satisfactoriamente, RESPUESTA CUANDO ES SI');
                          //coordenadas(10);
                          //location.href = "../c_historiahogar/fc_historiahogar?folio="+ $('#folio').val() +"&idintegrante=0"+"&doccogestor="+$('#doccogestor').val()+ "&idestacion=0";                      
                          $('#cancelar').show();
                          $('#siguiente').show();
                          $('#cancelar').prop('disabled', true);
                          $('#guardar').prop('disabled', true);
                          $('#siguiente').prop('disabled', false);
                       

  mensajito('MENSAJE:','La informacion se guardo');//me llama el mensajito de guardar

                          }
                        }); 
        
        
        }
    }
        else
        {
            $.ajax({
                          url: "fc_actualizar3",
                          type: "GET",
                          data: {vfolio : $('#folio').val(),
                                 vsino : '0',
                                 vrfinal: '0',
                                 vinteerf1 : $('#inteerf1').val()
                                 },    
                          dataType: "html",
                          success : function(obj){                      
//                        $('#siguiente').show();
//                        $('#siguiente').prop('disabled', false);
                          //alert ('La información se guardó satisfactoriamente, respuesta cuando es NO');
                          //coordenadas(10);
                          //location.href = "../c_historiahogar/fc_historiahogar?folio="+ $('#folio').val() +"&idintegrante=0"+"&doccogestor="+$('#doccogestor').val()+ "&idestacion=0";                      
                          $('#cancelar').show();
                          $('#siguiente').show();
                          $('#cancelar').prop('disabled', true);
                          $('#guardar').prop('disabled', true);
                          $('#siguiente').prop('disabled', false);
                       

  mensajito('MENSAJE:','La informacion se guardo');//me llama el mensajito de guardar

                          }
                        }); 
            
        }
        
        
             
    
    });
        
//        $("#guardar").click(function ()
//        {
//                        $.ajax({
//                          url: "fc_actualizar1",
//                          type: "GET",
//                          data: {vfolio : $('#folio').val(),
//                                 vsino : $('#sino').val(),
//                                 vrfinal: $('#rfinal').val(),
//                                 vdocintegranteerfam1: $('#docintegranteerfam1').val()
//                                 },    
//                          dataType: "html",
//                          success : function(obj){                      
////                        $('#siguiente').show();
////                        $('#siguiente').prop('disabled', false);
//                          alert ('La información se guardó satisfactoriamente');
//                          //coordenadas(10);
//                          //location.href = "../c_historiahogar/fc_historiahogar?folio="+ $('#folio').val() +"&idintegrante=0"+"&doccogestor="+$('#doccogestor').val()+ "&idestacion=0";                      
//                          $('#cancelar').show();
//                          $('#siguiente').show();
//                          $('#cancelar').prop('disabled', true);
//                          $('#guardar').prop('disabled', true);
//                          $('#siguiente').prop('disabled', false);
//                       
//
//  mensajito('MENSAJE:','La informacion se guardo');//me llama el mensajito de guardar
//
//                          }
//                        });                    
//        });

        
        
        

        $("#siguiente").click(function ()
        {
                
         if($('#inteerf1').val()== '0' &&  $('#idestacion').val()== '23') 
            {
            insertidpaso('2308');
            location.href = "../../c_protocolol2e3/fc_protocolol2e3?folio=" + $('#folio').val()+"&idintegrante=0"+"&doccogestor="+$('#doccogestor').val()+ "&idestacion=23";  
            
            }
            
            else if($('#inteerf1').val()== '0' &&  $('#idestacion').val()== '31') 
            {
          //insertidpaso('2308');
            location.href = "../../capacidades/c_capap11sc/fc_capap11sc?folio=" + $('#folio').val()+"&idintegrante=0"+"&doccogestor="+$('#doccogestor').val()+ "&idestacion=31";
           
           }

           ///////////// nuevo
           else if($('#inteerf1').val()== '0' &&  $('#idestacion').val()== '91') 
            {
            location.href = "../../capacidades/c_capap11sc/fc_capap11sc?folio=" + $('#folio').val()+"&idintegrante=0"+"&doccogestor="+$('#doccogestor').val()+ "&idestacion=91";
           }
           ///////////// fin nuevo










            
            else if(($('#sino').val()== 'NO' &&  $('#rfinal').val()== '2'&&  $('#idestacion').val()== '23') || ($('#sino').val()=='NO' &&  $('#rfinal').val()=='3' &&  $('#idestacion').val()== '23') )
            {
            insertidpaso('2308');
            location.href = "../../c_protocolol2e3/fc_protocolol2e3?folio=" + $('#folio').val()+"&idintegrante=0"+"&doccogestor="+$('#doccogestor').val()+ "&idestacion=23";  
            
            }
            
          else if($('#sino').val()== 'NO' &&  $('#rfinal').val()== '1' && $('#idestacion').val()== '23' )       
          {
          location.href = "../../c_protocolol2e3/fc_protocolol2e3?folio=" + $('#folio').val()+"&idintegrante=0"+"&doccogestor="+$('#doccogestor').val()+ "&idestacion=23";    
          }
            
           else if($('#sino').val()== 'SI' &&  $('#idestacion').val()== '23') 
           {
              location.href = "../../historiahogar/c_eerf2/fc_eerf2?folio="+ $('#folio').val() + "&idintegrante=0"+ "&doccogestor=" + $('#doccogestor').val()+ "&idestacion=23";     
           }
         
         
       else if(($('#sino').val()== 'NO' &&  $('#rfinal').val()== '2'&&  $('#idestacion').val()== '31') || ($('#sino').val()=='NO' &&  $('#rfinal').val()=='3'&&  $('#idestacion').val()== '31') )    
         {
       location.href = "../../capacidades/c_capap11sc/fc_capap11sc?folio=" + $('#folio').val()+"&idintegrante=0"+"&doccogestor="+$('#doccogestor').val()+ "&idestacion=31";
         } 
       
       else if($('#sino').val()== 'NO' &&  $('#rfinal').val()== '1' && $('#idestacion').val()== '31' )       
         {
         location.href = "../../c_protocolol3sc/fc_protocolol3sc?folio=" + $('#folio').val()+"&idintegrante=0"+"&doccogestor="+$('#doccogestor').val()+ "&idestacion=31";    
          }  
       
          
////////////// NUEVO
else if(($('#sino').val()== 'NO' &&  $('#rfinal').val()== '2'&&  $('#idestacion').val()== '91') || ($('#sino').val()=='NO' &&  $('#rfinal').val()=='3'&&  $('#idestacion').val()== '91') )    
         {
       location.href = "../../capacidades/c_capap11sc/fc_capap11sc?folio=" + $('#folio').val()+"&idintegrante=0"+"&doccogestor="+$('#doccogestor').val()+ "&idestacion=91";
         } 
       
       else if($('#sino').val()== 'NO' &&  $('#rfinal').val()== '1' && $('#idestacion').val()== '91' )       
         {
         location.href = "../../c_protocolocierreadmin/fc_protocolocierreadmin?folio=" + $('#folio').val()+"&idintegrante=0"+"&doccogestor="+$('#doccogestor').val()+ "&idestacion=91";    
          }

////////// FIN NUEVO          






       else if($('#sino').val()== 'SI' && $('#idestacion').val()== '31')   
          {
           location.href = "../../historiahogar/c_eerf2/fc_eerf2?folio="+ $('#folio').val() + "&idintegrante=0"+ "&doccogestor=" + $('#doccogestor').val()+ "&idestacion=31";     
          }
          
        //////////// NUEVO
        else if($('#sino').val()== 'SI' && $('#idestacion').val()== '91')   
          {
           location.href = "../../historiahogar/c_eerf2/fc_eerf2?folio="+ $('#folio').val() + "&idintegrante=0"+ "&doccogestor=" + $('#doccogestor').val()+ "&idestacion=91";     
          }  
        //////// FIN NUEVO



//       else if($('#sino').val()== 'NO' &&  $('#rfinal').val()== '1' && $('#idestacion').val()== '23' )       
//          {
//          location.href = "../../c_protocolol2e3/fc_protocolol2e3?folio=" + $('#folio').val()+"&idintegrante=0"+"&doccogestor="+$('#doccogestor').val()+ "&idestacion=23";    
//          }

            
        //location.href = "../../capacidades/c_capap11sc/fc_capap11sc?folio=" + $('#folio').val()+"&idintegrante=0"+"&doccogestor="+$('#doccogestor').val();
        });
              
              
              
              
        $("#anterior").click(function ()
        {
         if($('#idestacion').val()== '31') 
         {
          location.href = "../../c_protocolol3sc/fc_protocolol3sc?folio=" + $('#folio').val()+"&idintegrante=0"+ "&doccogestor=" + $('#doccogestor').val()+ "&idestacion=31";  
         }
         else if($('#idestacion').val()== '91') 
         {
          location.href = "../../c_protocolocierreadmin/fc_protocolocierreadmin?folio=" + $('#folio').val()+"&idintegrante=0"+ "&doccogestor=" + $('#doccogestor').val()+ "&idestacion=91";  
         } 
         else
         {
          location.href = "../../c_protocolol2e3/fc_protocolol2e3?folio=" + $('#folio').val()+"&idintegrante=0"+ "&doccogestor=" + $('#doccogestor').val()+ "&idestacion=23";   
         }
        });

//para cargar variables capitulo, pregunta,encuestador,vivienda,barra
cargardatosgenerales('<?php echo('APLICACION ERFAM'); ?>','Vista 1','<?php echo($arraydatosgenerales['enomcoges']); ?>','<?php echo($arraydatosgenerales['etitular']); ?>','100');
//control del boton ayuda
botonayuda();

});
//dea aca para abajo es logica de cuadros

function habilitarguardar(){

    
    if($('#sino').val() == ''){

            $('#guardar').prop('disabled',true);
    }else{
        $('#guardar').prop('disabled',false);
    }
    
}

function guardardocumento(){

    if ($('#inteerf1').val() == 0)
    {
//       alert('si entro para 0');
//       alert($('#inteerf1').val());
        $.ajax({
                          url: "fc_guardarintegrante1",
                          type: "GET",
                          data: {vfolio: $('#folio').val(), vinteerf1: '0'},
                          dataType: "html",
                          success: function(obj) {
                          
                              
                          //me llama el mensajito de actualizar
                          //$('#datos').html(obj);
                          //location.href = "../c_validacioneerf2/fc_validacioneerf2?folio="+ $('#folio').val() +"&idintegrante="+$('#idintegrante').val()+"&idestacion="+$('#idestacion').val();                  
                        }
                       }); 
    }
    else
    {
//    alert($('#inteerf1').val());
     $.ajax({
         
                          url: "fc_guardarintegrante1",
                          type: "GET",
                          data: {vfolio: $('#folio').val(), vinteerf1: $('#inteerf1').val()},
                          dataType: "html",
                          success: function(obj) {
                          var combo = document.getElementById("inteerf1");
                          var selected = combo.options[combo.selectedIndex].text;
                          $('#nomintegranteerfam1').val(selected);
                          
                          $('#docintegranteerfam1').val($('#inteerf1').val());
                              
                          //me llama el mensajito de actualizar
                          //$('#datos').html(obj);
                          //location.href = "../c_validacioneerf2/fc_validacioneerf2?folio="+ $('#folio').val() +"&idintegrante="+$('#idintegrante').val()+"&idestacion="+$('#idestacion').val();                  
                        }
                       });
    
}
}

function insertidpaso(opcion)
   {
    //alert('test');
                        $.ajax({
                          url: "fc_cerrarpaso",
                          type: "GET",
                          data: {vfolio: $('#folio').val(), vidpaso: opcion, vestado:1},
                          dataType: "html",
                          success: function(obj) {
                          //me llama el mensajito de actualizar
                          //$('#datos').html(obj);
                          //location.href = "../c_capituloshogar/fc_capituloshogar?folio="+ $('#folio').val() +"&idintegrante="+$('#idintegrante').val();                  
                        }
                       });
   }


$("#capitulos").hide();

</script>
</html>