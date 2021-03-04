<?php

# fondo -------------------------------------
require_once "controladores/fondo.controlador.php";
require_once "modelos/fondo.modelo.php";
require_once "modelos/rutas.php";

# general -------------------------------------
// require_once "controladores/general.controlador.php";
// require_once "modelos/general.modelo.php";

# ext-connection -------------------------------------
// require_once "controladores/ext-connection.controlador.php";
// require_once "modelos/ext-connection.modelo.php";

# ---------------------------------------------------

# blog -------------------------------------
// require_once "controladores/blog.controlador.php";
// require_once "modelos/blog.modelo.php";

# visitas -------------------------------------
// require_once "controladores/visitas.controlador.php";
// require_once "modelos/visitas.modelo.php";

$fondo = new ControladorFondo();
$fondo -> fondo();