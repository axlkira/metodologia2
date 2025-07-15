function calcularcondicion(idestacion)
   {
    //alert('test');
                        $.ajax({
                          url: "../condicionnec/c_condicionnec/fc_condicionnec",
                          type: "GET",
                          data: {vfolio: $('#folio').val(),videstacion: idestacion},
                          dataType: "html",
                          success: function(obj) {
                          //me llama el mensajito de actualizar
                          //$('#datos').html(obj);
                          //location.href = "../c_capituloshogar/fc_capituloshogar?folio="+ $('#folio').val() +"&idintegrante="+$('#idintegrante').val();                  
                        }
                       });
   }