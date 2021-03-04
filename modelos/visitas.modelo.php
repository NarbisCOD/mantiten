<?php

require_once "conexion.php";

class mdlVisitas{

	/*----------------------------------------------------------
	CREAR REGISTRO DE PÁGINA EN BASE DE DATOS
	----------------------------------------------------------*/
	static public function mdlNuevaVisitaPagina($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla 
		(id_administrador, ip, region, codigo_region, nombre_region, codigo_pais, nombre_pais, codigo_continente, nombre_continente, latitud, longitud, codigo_moneda, simbolo_moneda, conversion_moneda, navegador, lenguaje_navegador, tipo_dispositivo, pagina, url_referente)
		VALUES (:id_administrador, :ip, :region, :codigo_region, :nombre_region, :codigo_pais, :nombre_pais, :codigo_continente, :nombre_continente, :latitud, :longitud, :codigo_moneda, :simbolo_moneda, :conversion_moneda, :navegador, :lenguaje_navegador, :tipo_dispositivo, :pagina, :url_referente)"); 
		
		$stmt->bindParam(":id_administrador", $datos["id"], PDO::PARAM_STR);

		$stmt->bindParam(":ip", $datos["ip"], PDO::PARAM_STR);
		$stmt->bindParam(":region", $datos["region"], PDO::PARAM_STR);
		$stmt->bindParam(":codigo_region", $datos["codigo_region"], PDO::PARAM_STR);
		$stmt->bindParam(":nombre_region", $datos["nombre_region"], PDO::PARAM_STR);
		$stmt->bindParam(":codigo_pais", $datos["codigo_pais"], PDO::PARAM_STR);
		$stmt->bindParam(":nombre_pais", $datos["nombre_pais"], PDO::PARAM_STR);
		$stmt->bindParam(":codigo_continente", $datos["codigo_continente"], PDO::PARAM_STR);
		$stmt->bindParam(":nombre_continente", $datos["nombre_continente"], PDO::PARAM_STR);
		$stmt->bindParam(":latitud", $datos["latitud"], PDO::PARAM_STR);
		$stmt->bindParam(":longitud", $datos["longitud"], PDO::PARAM_STR);
		$stmt->bindParam(":codigo_moneda", $datos["codigo_moneda"], PDO::PARAM_STR);
		$stmt->bindParam(":simbolo_moneda", $datos["simbolo_moneda"], PDO::PARAM_STR);
		$stmt->bindParam(":conversion_moneda", $datos["conversion_moneda"], PDO::PARAM_STR);

		$stmt->bindParam(":navegador", $datos["navegador"], PDO::PARAM_STR);
		$stmt->bindParam(":lenguaje_navegador", $datos["lenguaje_navegador"], PDO::PARAM_STR);
		$stmt->bindParam(":tipo_dispositivo", $datos["tipo_dispositivo"], PDO::PARAM_STR);
		$stmt->bindParam(":pagina", $datos["pagina"], PDO::PARAM_STR);
		$stmt->bindParam(":url_referente", $datos["url_referente"], PDO::PARAM_STR);

		if($stmt->execute()){

			return "ok";

		}else{

			return "error";
		
		}

		$stmt->close();
		$stmt = null;

    }

}