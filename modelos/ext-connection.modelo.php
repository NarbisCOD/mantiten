<?php

require_once "conexion.php";

class mdlRegistroExterno{

	/*----------------------------------------------------------
	CREAR REGISTRO PROSPECTOS
	----------------------------------------------------------*/

	static public function mdlNuevoProspecto($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(id_administrador, ruta, name, email_address, phone, message, web, pais, verify, verify_, verify__) VALUES (:id_administrador, :ruta, :name, :email_address, :phone, :message, :web, :pais, :verify, :verify_, :verify__)");

		$stmt->bindParam(":id_administrador", $datos["id_administrador"], PDO::PARAM_STR);

        $stmt->bindParam(":ruta", $datos["indice_0"], PDO::PARAM_STR);
        $stmt->bindParam(":name", $datos["name"], PDO::PARAM_STR);
        $stmt->bindParam(":email_address", $datos["email_address"], PDO::PARAM_STR);
		$stmt->bindParam(":message", $datos["message"], PDO::PARAM_STR);
		$stmt->bindParam(":pais", $datos["codigo_pais"], PDO::PARAM_STR);
		
		$stmt->bindParam(":phone", $datos["phone"], PDO::PARAM_STR);
		$stmt->bindParam(":web", $datos["web"], PDO::PARAM_STR);
		$stmt->bindParam(":verify", $datos["verify"], PDO::PARAM_STR);
		$stmt->bindParam(":verify_", $datos["verify_"], PDO::PARAM_STR);
		$stmt->bindParam(":verify__", $datos["verify__"], PDO::PARAM_STR);

		if($stmt->execute()){

			return "ok";

		}else{

			return "error";
		
		}

		$stmt->close();
		$stmt = null;

    }

}