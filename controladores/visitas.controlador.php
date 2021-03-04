<?php

class ctrVisitas{

	/*----------------------------------------------------------
	CREAR REGISTRO DE PÁGINA EN BASE DE DATOS
	----------------------------------------------------------*/
	static public function ctrNuevaVisitaPagina($datos){

		if(isset($datos["ip"])){

            $datosNuevaVisitaPagina = array(
                "ip"=>$datos["ip"],
                "region"=>$datos["region"],
                "codigo_region"=>$datos["codigo_region"],
                "nombre_region"=>$datos["nombre_region"],
                "codigo_pais"=>$datos["codigo_pais"],
                "nombre_pais"=>$datos["nombre_pais"],
                "codigo_continente"=>$datos["codigo_continente"],
                "nombre_continente"=>$datos["nombre_continente"],
                "latitud"=>$datos["latitud"],
                "longitud"=>$datos["longitud"],
                "codigo_moneda"=>$datos["codigo_moneda"],
                "simbolo_moneda"=>$datos["simbolo_moneda"],
                "conversion_moneda"=>$datos["conversion_moneda"],

                "navegador"=>$datos["navegador"],
                "lenguaje_navegador"=>$datos["lenguaje_navegador"],
                "tipo_dispositivo"=>$datos["tipo_dispositivo"],
                "pagina"=>$datos["pagina"],
                "url_referente"=>$datos["url_referente"],

                "id"=>$datos["id"],
                );

            $respuesta = mdlVisitas::mdlNuevaVisitaPagina("visitantes", $datosNuevaVisitaPagina);

            return $respuesta;

        }
		
    }

}