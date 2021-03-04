<?php

require_once "../controladores/ext-connection.controlador.php";
require_once "../modelos/ext-connection.modelo.php";

class AjaxRegistroExterno{

    /*----------------------------------------------------------
	CREAR REGISTRO PROSPECTOS
	----------------------------------------------------------*/
    public $indice_0;
    public $name;
    public $email_address;
    public $phone;
    public $codigo_pais;

    public function ajaxNuevoProspecto(){

        $datos = array(
            "indice_0"=>$this->indice_0,
            "name"=>$this->name,
            "email_address"=>$this->email_address,
            "phone"=>$this->phone,
            "codigo_pais"=>$this->codigo_pais
            );

        $respuesta = ctrRegistroExterno::ctrNuevoProspecto($datos);

        echo $respuesta;

    }

}


/*----------------------------------------------------------
CREAR REGISTRO PROSPECTOS
----------------------------------------------------------*/
if(isset($_POST["indice_0"])){

    $nuevoProspecto = new AjaxRegistroExterno();
    $nuevoProspecto -> indice_0 = $_POST["indice_0"];
    $nuevoProspecto -> name = $_POST["name"];
    $nuevoProspecto -> email_address = $_POST["email_address"];
    $nuevoProspecto -> phone = $_POST["phone"];
    $nuevoProspecto -> codigo_pais = $_POST["codigo_pais"];

    $nuevoProspecto -> ajaxNuevoProspecto();

}