/*----------------------------------------------------------
AGREGAR VISITAS + 1
----------------------------------------------------------*/
var contador = 0;

$(window).on("load", function(){

	var vistas = $("span.vistas").html();

    // Cantidad de visitas + 1
	contador = Number(vistas) + 1;

	$("span.vistas").html(contador);
	var ruta = $("#urlBase").attr("indice_0");

	var datos = new FormData();
	datos.append("ruta", ruta);
	datos.append("nuevoValorVisitas", contador);
	datos.append("id", id);

	$.ajax({

		url:urlBase+"ajax/blog.ajax.php",
		method:"POST",
		data: datos,
		cache: false,
		contentType: false,
		processData:false,
		success: function(respuesta){}

	});

})