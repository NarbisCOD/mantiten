<?php

class ControladorFondo{

	/* -------------
	------------------------------------------------------------------------------------
		LLAMAMOS EL FONDO
		-----------------------------------------------------------*/

	public function fondo(){

		include "vistas/fondo.php";

	}

	/* -------------
	------------------------------------------------------------------------------------
		TRAEMOS METADATOS
		-----------------------------------------------------------*/

	static public function ctrTraerMetaDatos($ruta){

		$tabla = "metadatos";

		$respuesta = ModeloFondo::mdlTraerMetaDatos($tabla, $ruta);

		return $respuesta;

	}


}