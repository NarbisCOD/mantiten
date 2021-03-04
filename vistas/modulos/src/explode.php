<?php
    $url = Ruta::ctrRuta();
    
    $rutas = array();

    if(isset($_GET["ruta"])){

        $rutas = explode("/", $_GET["ruta"]);
        $ruta = $rutas[0];

    }else{

        $ruta = "home";
        
    }
?>