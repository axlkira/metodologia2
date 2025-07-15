function validarBloquePP(estacion,edad)
{
//alert(estacion);
//alert(edad);
    if((estacion < 12) || (edad < 15)){
//    if(estacion >= '21'){
 //   alert('entro');
    $('#bloquePP').hide();
    $('#empleoactdiv').removeClass('has-error');
    $('#Cambiarempdiv').removeClass('has-error');
    $('#TiempoEmpleadodiv').removeClass('has-error');
    $('#TipoEdiv').removeClass('has-error');
    $('#TiempoDesEmpleadodiv').removeClass('has-error');
    $('#BarreraAdiv').removeClass('has-error');
    $('#ActualmenteEstdiv').removeClass('has-error');
    $('#ppc1p3n2div').removeClass('has-error');
        
}

}

function validarBloquePPmoduloActualizar(edad)
{
//alert(edad);
    if((edad < 15 || edad == '')){
//    if(estacion >= '21'){
//    alert('entro');
    $('#bloquePP').hide();
    $('#empleoactdiv').removeClass('has-error');
    $('#Cambiarempdiv').removeClass('has-error');
    $('#TiempoEmpleadodiv').removeClass('has-error');
    $('#TipoEdiv').removeClass('has-error');
    $('#TiempoDesEmpleadodiv').removeClass('has-error');
    $('#BarreraAdiv').removeClass('has-error');
    $('#ActualmenteEstdiv').removeClass('has-error');
    $('#ppc1p3n2div').removeClass('has-error');
        
}

}
