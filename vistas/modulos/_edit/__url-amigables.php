<?php

    # Páginas -----------------------------------------------------------------------
    if($rutas[0] == "contacto"
                || $rutas[0] == "division-calefaccion"
                || $rutas[0] == "proyectos"
                
                || $rutas[0] == "mensaje-enviado"
                || $rutas[0] == "vulneracion"){

            include(__DIR__.'/_pages/_pages/'.$rutas[0].'.php');

    # -----------------------------------------------------------------------------
    # ERROR (si no es URL amigable muesta página de error 404)
    }else{

        # Es importante crear una página de error para evitar que Google crea que hay páginas duplicadas
        include(__DIR__.'/_pages/_error.php');
    }
?>