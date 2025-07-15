/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
//coordenadas FIN DE LA ESTACION
function coordenadas(estacion){
	//alert('entro');
        var error = "";
        var lon = "";
        var lat = "";
	if (navigator.geolocation)
	{//alert('entro1');
		navigator.geolocation.getCurrentPosition(function(objPosition)
		{//alert("1");
			lon = objPosition.coords.longitude;
			lat = objPosition.coords.latitude;

			//content.innerHTML = "<p><strong>Latitud:</strong> " + lat + "</p><p><strong>Longitud:</strong> " + lon + "</p>";
                        //alert(lon);
                        //alert(lat);
                        guardarconcoordenadas(lon , lat, error,estacion);
                        
//fin para el segundo
                        
		}, function(objPositionError)
		{//alert('entro2');
			switch (objPositionError.code)
			{
				case objPositionError.PERMISSION_DENIED:
					error ="No se ha permitido el acceso a la posición del usuario.";
				break;
				case objPositionError.POSITION_UNAVAILABLE:
					error ="No se ha podido acceder a la información de su posición.";
				break;
				case objPositionError.TIMEOUT:
					error ="El servicio ha tardado demasiado tiempo en responder.";
				break;
				default:
					error ="Error desconocido.";
			}
                        guardarconcoordenadas(lon , lat, error,estacion);
		}, {
			maximumAge: 75000,
			timeout: 15000
		});
	}
	else
	{
		error ="Su navegador no soporta la API de geolocalización.";
                //alert('entro3');
                guardarconcoordenadas(lon , lat, error, estacion);
	}

//alert('entro4');

//return coordoneestoy;    
};
// fin coordenadas 

//guardar con coordenadas
function guardarconcoordenadas(xlon,xlat,xmsn,estacion)
{
                        //alert('entro a guardar');
                        $.ajax({
                          url: "fc_cerrarestacion",
                          type: "GET",
                          data: {vfolio: $('#folio').val(), videstacion:estacion, vestado:1, vlongitud:xlon,vlatitud:xlat,vmensajedonde:xmsn},
                          dataType: "html",
                          success : function(){                      
                         // okguardar();//me llama el mensajito de guardar
                            //$('#datos').html(obj);
                          //location.reload();
                          //alert(estacion);
                          if (estacion === 10) {
                          location.href = "../c_principalhogar/fc_principalhogar";    
                          }
                          else{
                          location.href = "../c_principalhogar/fc_principalhogar";                  
                          }
                          }
                        });      
}


//guardar con coordenadas
//fin guaradar con coordenadas FIN DE LA ESTACION

//INICIO PARA COORDDENADAS INICIO DE LA ESTACION

function iniciocoordenadas(paso){
	//alert('entro');
        var error = "";
        var lon = "";
        var lat = "";
	if (navigator.geolocation)
	{//alert('entro1');
		navigator.geolocation.getCurrentPosition(function(objPosition)
		{//alert("1");
			lon = objPosition.coords.longitude;
			lat = objPosition.coords.latitude;

			//content.innerHTML = "<p><strong>Latitud:</strong> " + lat + "</p><p><strong>Longitud:</strong> " + lon + "</p>";
                        //alert(lon);
                        //alert(lat);
                        inicioguardarconcoordenadas(lon , lat, error,paso);
                        
//fin para el segundo
                        
		}, function(objPositionError)
		{//alert('entro2');
			switch (objPositionError.code)
			{
				case objPositionError.PERMISSION_DENIED:
					error ="No se ha permitido el acceso a la posición del usuario.";
				break;
				case objPositionError.POSITION_UNAVAILABLE:
					error ="No se ha podido acceder a la información de su posición.";
				break;
				case objPositionError.TIMEOUT:
					error ="El servicio ha tardado demasiado tiempo en responder.";
				break;
				default:
					error ="Error desconocido.";
			}
                        inicioguardarconcoordenadas(lon , lat, error,paso);
		}, {
			maximumAge: 75000,
			timeout: 15000
		});
	}
	else
	{
		error ="Su navegador no soporta la API de geolocalización.";
                //alert('entro3');
                inicioguardarconcoordenadas(lon , lat, error, paso);
	}

//alert('entro4');

//return coordoneestoy;    
};
// fin coordenadas 

//guardar con coordenadas
function inicioguardarconcoordenadas(xlon,xlat,xmsn,paso)
{
                        //alert('entro a guardar');
                        $.ajax({
                          url: "../inicioestacion/c_inicioestacion/fc_inicioestacion",
                          type: "GET",
                          data: {vfolio: $('#folio').val(), vidpaso:paso, vestado:1, vlongitud:xlon,vlatitud:xlat,vmensajedonde:xmsn},
                          dataType: "html",
                          success : function(){                      
                          }
                        });      
}

//FIN PARA COORDENADAS INICIO ESTACION
