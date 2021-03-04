<?php

class ctrBlog{

	/*----------------------------------------------------------
	AGREGAR VISITAS + 1
	----------------------------------------------------------*/
	static public function ctrVisitasArticulo($datos){

		if(isset($datos["nuevoValorVisitas"])){

            $datosValorVisitas = array(
                "ruta"=>$datos["ruta"],
                "nuevoValorVisitas"=>$datos["nuevoValorVisitas"],
                "id"=>$datos["id"]
                );

            $respuesta = mdlBlog::mdlVisitasArticulo("noticias", $datosValorVisitas);

            return $respuesta;

        }
		
    }

}