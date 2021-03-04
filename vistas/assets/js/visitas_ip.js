//

var ip = $("#geolocalizador").attr("ip");

var region = $("#geolocalizador").attr("region");
var codigo_region = $("#geolocalizador").attr("codigo_region");
var nombre_region = $("#geolocalizador").attr("nombre_region");

var codigo_pais = $("#geolocalizador").attr("codigo_pais");
var nombre_pais = $("#geolocalizador").attr("nombre_pais");

var codigo_continente = $("#geolocalizador").attr("codigo_continente");
var nombre_continente = $("#geolocalizador").attr("nombre_continente");

var latitud = $("#geolocalizador").attr("latitud");
var longitud = $("#geolocalizador").attr("longitud");

var codigo_moneda = $("#geolocalizador").attr("codigo_moneda");
var simbolo_moneda = $("#geolocalizador").attr("simbolo_moneda");
var conversion_moneda = $("#geolocalizador").attr("conversion_moneda");

//

var navegador = $("#user_agent").attr("navegador");
var lenguaje_navegador = $("#user_agent").attr("lenguaje_navegador");
var tipo_dispositivo = $("#user_agent").attr("tipo_dispositivo");
var pagina = $("#user_agent").attr("pagina");
var url_referente = document.referrer;

//

$(window).on("load", function(){

    var datos = new FormData();
    datos.append("ip", ip);
    datos.append("region", region);
    datos.append("codigo_region", codigo_region);
    datos.append("nombre_region", nombre_region);
    datos.append("codigo_pais", codigo_pais);
    datos.append("nombre_pais", nombre_pais);
    datos.append("codigo_continente", codigo_continente);
    datos.append("nombre_continente", nombre_continente);
    datos.append("latitud", latitud);
    datos.append("longitud", longitud);
    datos.append("codigo_moneda", codigo_moneda);
    datos.append("simbolo_moneda", simbolo_moneda);
    datos.append("conversion_moneda", conversion_moneda);

    datos.append("navegador", navegador);
    datos.append("lenguaje_navegador", lenguaje_navegador);
    datos.append("tipo_dispositivo", tipo_dispositivo);
    datos.append("pagina", pagina);
    datos.append("url_referente", url_referente);

    datos.append("id", id);

	$.ajax({

		url:urlBase+"ajax/visitas.ajax.php",
		method:"POST",
		data: datos,
		cache: false,
		contentType: false,
		processData:false,
		success: function(respuesta){}

	});

})