/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
function botonguardar()
{
    $('#siguiente').show();
    $('#siguiente').prop('disabled', false);
    $('#actualizar').show();
    $('#actualizar').prop('disabled', true);
    $('#cancelar').show();
    $('#cancelar').prop('disabled', true);
    $('#guardar').hide();
    $('#anterior').prop('disabled', false);

    mensajito('MENSAJE:','La informacion se guardo');//me llama el mensajito de guardar

}

function botonactualizar()
{
    $('#siguiente').prop('disabled', false);
    $('#actualizar').prop('disabled', true);
    $('#cancelar').prop('disabled', true);
    $('#anterior').prop('disabled', false);

    mensajito('MENSAJE','La informacion se actualizo');//me llama el mensajito de guardar

}

function botonguardar2()
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

function botonactualizar2()
{
    $('#siguiente').prop('disabled', false);
    $('#actualizar').prop('disabled', true);
    $('#cancelar').prop('disabled', true);
    $('#anterior').prop('disabled', true);

    mensajito('MENSAJE','La informacion se actualizo');//me llama el mensajito de guardar

}

function botoncancelar()
{ 
    location.reload();
}
               
$("#capitulos").click(function ()
{
//  estadointe(folio,idint,estint);
if (typeof($('#idintegrante').val()) !== "undefined")
{

location.href = "../c_capitulosintegrante/fc_capitulosintegrante?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val();                   
                 
}
else 
{
  
   location.href = "../c_capituloshogar/fc_capituloshogar?folio=" + $('#folio').val() + "&idintegrante=0"; 
}

});



$("#capitulos2").click(function ()
{
//  estadointe(folio,idint,estint);
if (typeof($('#idintegrante').val()) !== "undefined")
{

location.href = "../c_ppcapitulosintegrante/fc_ppcapitulosintegrante?folio=" + $('#folio').val() +  "&idintegrante=" + $('#idintegrante').val();                   
                 
}

});

function botonanterior()
{
   
}

function botonsiguiente()
{
    
} 

//////////////////////////////////////////////////////
function botonguardarotro()
{
    $('#siguiente').show();
    $('#siguiente').prop('disabled', false);
    $('#actualizar').show();
    $('#actualizar').prop('disabled', true);
    $('#cancelar').show();
    $('#cancelar').prop('disabled', true);
    $('#guardar').hide();
    $('#anterior').prop('disabled', false);
    $('#otro').show();
    $('#otro').prop('disabled', false);

    mensajito('MENSAJE:','La informacion se guardo');//me llama el mensajito de guardar

}

function botonactualizarotro()
{
    $('#siguiente').prop('disabled', false);
    $('#actualizar').prop('disabled', true);
    $('#cancelar').prop('disabled', true);
    $('#anterior').prop('disabled', false);
    $('#otro').show();
    $('#otro').prop('disabled', false);

    mensajito('MENSAJE','La informacion se actualizo');//me llama el mensajito de guardar

}
function botonotrodisable()
{
    $('#siguiente').show();
    $('#siguiente').prop('disabled', false);
    $('#actualizar').show();
    $('#actualizar').prop('disabled', true);
    $('#cancelar').show();
    $('#cancelar').prop('disabled', true);
    $('#guardar').hide();
    $('#anterior').prop('disabled', false);
    $('#otro').show();
    $('#otro').prop('disabled', true);
    
    mensajito('MENSAJE','La informacion se guardo');//me llama el mensajito de guardar

}

function botonguardarotro1()
{
    $('#siguiente').show();
    $('#siguiente').prop('disabled', false);
    $('#actualizar').show();
    $('#actualizar').prop('disabled', true);
    $('#cancelar').show();
    $('#cancelar').prop('disabled', true);
    $('#guardar').hide();
    $('#eliminar').prop('disabled', false);
    $('#otro1').show();
    $('#otro1').prop('disabled', false);

    mensajito('MENSAJE:','La informacion se guardo');//me llama el mensajito de guardar

}

function botonactualizarotro1()
{
    $('#siguiente').prop('disabled', false);
    $('#actualizar').prop('disabled', true);
    $('#cancelar').prop('disabled', true);
    $('#eliminar').prop('disabled', false);
    $('#otro1').prop('disabled', false);

    mensajito('MENSAJE','La informacion se actualizo');//me llama el mensajito de guardar

}