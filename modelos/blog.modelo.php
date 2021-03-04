<?php

require_once "conexion.php";

class mdlBlog{

	/*----------------------------------------------------------
	AGREGAR VISITAS + 1
	----------------------------------------------------------*/
	static public function mdlVisitasArticulo($tabla, $datos){

        $stmt = Conexion::conectar()->prepare("UPDATE $tabla SET vistas = :vistas WHERE ruta = :ruta AND id_administrador = :id_administrador");

        $stmt->bindParam(":vistas", $datos["nuevoValorVisitas"], PDO::PARAM_STR);
        $stmt->bindParam(":ruta", $datos["ruta"], PDO::PARAM_STR);
		$stmt->bindParam(":id_administrador", $datos["id"], PDO::PARAM_STR);

		if($stmt->execute()){

			return "ok";

		}else{

			return "error";
		
		}

		$stmt->close();
		$stmt = null;

    }

}