<?php

class ctrRegistroExterno{

	/*----------------------------------------------------------
	CREAR REGISTRO PROSPECTOS
	----------------------------------------------------------*/

	static public function ctrNuevoProspecto($datos){

		if(isset($datos["indice_0"])){

                $datosNuevoProspecto = array(
                    "indice_0"=>$datos["indice_0"],
                    "name"=>$datos["name"],
                    "email_address"=>$datos["email_address"],
					"phone"=>$datos["phone"],
					"codigo_pais"=>$datos["codigo_pais"],

					# Estos solo los modifico yo
					"id_administrador"=>2,
					"message"=>"-",
					"web"=>"mantiten.com",
					"verify"=>"uF2JVZoR8u",
					"verify_"=>"aIhOuXQ2tW",
					"verify__"=>"G2jcbV000jiazwhCe47MoV9qkNNZ2lI0A7e6Gq1u2l60DTfIQ4z2"
                    );

				$respuesta = mdlRegistroExterno::mdlNuevoProspecto("prospectos", $datosNuevoProspecto);

				return $respuesta;
				

			}
		
		}

}