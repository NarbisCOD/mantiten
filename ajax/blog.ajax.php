<?php

require_once "../controladores/blog.controlador.php";
require_once "../modelos/blog.modelo.php";

class AjaxBlog{

    /*----------------------------------------------------------
	AGREGAR VISITAS + 1
	----------------------------------------------------------*/
	public $valor;
	public $item;
    public $ruta;
    public $id;

    public function ajaxVisitasArticulo(){

        $datos = array(
            "ruta"=>$this->ruta, // rutas[0]
            "nuevoValorVisitas"=>$this->nuevoValorVisitas,
            "id"=>$this->id,
            );

        $respuesta = ctrBlog::ctrVisitasArticulo($datos);

        echo $respuesta;

    }

}

if(isset($_POST["nuevoValorVisitas"])){

	$visitasArticulo = new AjaxBlog();
	$visitasArticulo -> ruta = $_POST["ruta"];
    $visitasArticulo -> nuevoValorVisitas = $_POST["nuevoValorVisitas"];
    $visitasArticulo -> id = $_POST["id"];
	$visitasArticulo -> ajaxVisitasArticulo();

}