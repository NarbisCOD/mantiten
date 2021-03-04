<?php

require_once "../controladores/visitas.controlador.php";
require_once "../modelos/visitas.modelo.php";

class AjaxVisitas{

    /*----------------------------------------------------------
	CREAR REGISTRO DE PÁGINA EN BASE DE DATOS
	----------------------------------------------------------*/
    public $ip;
    public $region;
    public $codigo_region;
    public $nombre_region;
    public $codigo_pais;
    public $nombre_pais;
    public $codigo_continente;
    public $nombre_continente;
    public $latitud;
    public $longitud;
    public $codigo_moneda;
    public $simbolo_moneda;
    public $conversion_moneda;

    public $navegador;
    public $lenguaje_navegador;
    public $tipo_dispositivo;
    public $pagina;
    public $url_referente;

    public $id;

    public function ajaxNuevaVisitaPagina(){

        $datos = array(
            "ip"=>$this->ip,
            "region"=>$this->region,
            "codigo_region"=>$this->codigo_region,
            "nombre_region"=>$this->nombre_region,
            "codigo_pais"=>$this->codigo_pais,
            "nombre_pais"=>$this->nombre_pais,
            "codigo_continente"=>$this->codigo_continente,
            "nombre_continente"=>$this->nombre_continente,
            "latitud"=>$this->latitud,
            "longitud"=>$this->longitud,
            "codigo_moneda"=>$this->codigo_moneda,
            "simbolo_moneda"=>$this->simbolo_moneda,
            "conversion_moneda"=>$this->conversion_moneda,

            "navegador"=>$this->navegador,
            "lenguaje_navegador"=>$this->lenguaje_navegador,
            "tipo_dispositivo"=>$this->tipo_dispositivo,
            "pagina"=>$this->pagina,
            "url_referente"=>$this->url_referente,

            "id"=>$this->id,
            );

        $respuesta = ctrVisitas::ctrNuevaVisitaPagina($datos);

        echo $respuesta;

    }

}

if(isset($_POST["ip"])){

	$visitaPagina = new AjaxVisitas();
    
    $visitaPagina -> ip = $_POST["ip"];
    $visitaPagina -> region = $_POST["region"];
    $visitaPagina -> codigo_region = $_POST["codigo_region"];
    $visitaPagina -> nombre_region = $_POST["nombre_region"];
    $visitaPagina -> codigo_pais = $_POST["codigo_pais"];
    $visitaPagina -> nombre_pais = $_POST["nombre_pais"];
    $visitaPagina -> codigo_continente = $_POST["codigo_continente"];
    $visitaPagina -> nombre_continente = $_POST["nombre_continente"];
    $visitaPagina -> latitud = $_POST["latitud"];
    $visitaPagina -> longitud = $_POST["longitud"];
    $visitaPagina -> codigo_moneda = $_POST["codigo_moneda"];
    $visitaPagina -> simbolo_moneda = $_POST["simbolo_moneda"];
    $visitaPagina -> conversion_moneda = $_POST["conversion_moneda"];

    $visitaPagina -> navegador = $_POST["navegador"];
    $visitaPagina -> lenguaje_navegador = $_POST["lenguaje_navegador"];
    $visitaPagina -> tipo_dispositivo = $_POST["tipo_dispositivo"];
    $visitaPagina -> pagina = $_POST["pagina"];
    $visitaPagina -> url_referente = $_POST["url_referente"];

    $visitaPagina -> id = $_POST["id"];

    $visitaPagina -> ajaxNuevaVisitaPagina();

}