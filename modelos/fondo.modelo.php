<?php

require_once "conexion.php";

class ModeloFondo{

	/* -------------
	------------------------------------------------------------------------------------
		TRAEMOS META DATOS
		-----------------------------------------------------------*/

	static public function mdlTraerMetaDatos($tabla, $ruta){

		$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE ruta = :ruta");

		$stmt -> bindParam(":ruta", $ruta, PDO::PARAM_STR);

		$stmt -> execute();

		return $stmt -> fetch();

		$stmt -> close();

		$stmt = null;

	}


}