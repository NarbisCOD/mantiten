<?php
    $_SESSION["id"] = 6;
    $_app = "https://m57.app/"; # no se usa en Quick

    # -----------------------------------------------------------------
    # Info Cliente (tabla usuarios)
    # -----------------------------------------------------------------
    $tabla = "usuarios"; $item = "id"; $valor = $_SESSION["id"];
    $___general = UnaCondicion::ctr1Condicion($tabla, $item, $valor);

    $_id = $___general["id"];
    $_logo = $___general["logo"];
    $_cliente = $___general["tienda"];
    $_http = $___general["http_"];
    $_web = $___general["web"];
    $_direccion = $___general["direccion"];
    $_ciudad = $___general["ciudad"];
    $_provincia = $___general["provincia"];
    $_pais = $___general["pais"];
    $_telefono_visible = $___general["telefono_visible"];
    $_telefono_link = $___general["telefono_link"];
    $_email_publico = $___general["email_publico"];
    $_horarios1 = $___general["horarios1"];
    $_horarios2 = $___general["horarios2"];
    $_facebook = $___general["facebook"];
    $_instagram = $___general["instagram"];
    $_twitter = $___general["twitter"];
    $_linkedin = $___general["linkedin"];
    $_whatsapp_visible = $___general["whatsapp_visible"];
    $_whatsapp_link = $___general["whatsapp_link"];
    $_google_maps_url = $___general["google_maps_url"];
    $_google_maps_iframe = $___general["google_maps_iframe"];
    $_pixel_facebook = $___general["pixel_facebook"];
    $_google_analytics = $___general["google_analytics"];
    $_mp_cliente = $___general["mp_cliente"];
    $_mp_llave_secreta = $___general["mp_llave_secreta"];

    $_ip_filtro_1 = $___general["ip_filtro_1"];
    $_ip_filtro_2 = $___general["ip_filtro_2"];
    $_ip_filtro_3 = $___general["ip_filtro_3"];
    $_ip_filtro_4 = $___general["ip_filtro_4"];
    
    $_dominio = $_http.$_web;

    # -----------------------------------------------------------------
    # Geolocalizador IP
    # -----------------------------------------------------------------
    # Latitud y Longitud -> https://www.coordenadas-gps.com/
    # Random IP -> https://www.browserling.com/tools/random-ip
    # Código de Paises -> http://country-code.cl/es/

    # Obtener IP del usuario/visitante
    $ip = $_SERVER['REMOTE_ADDR'];
    # Info que trae la IP
    $geo_ip = unserialize(file_get_contents('http://www.geoplugin.net/php.gp?ip='.$_SERVER['REMOTE_ADDR']));

    # -------------------------------------------------------------------------------
    # Navegador Utilizado (strpos busca coincidencias en lo escrito en la variable)
    # -------------------------------------------------------------------------------
    $user_agent = $_SERVER['HTTP_USER_AGENT'];

    if(strpos($user_agent, 'Chromium') !== FALSE){
        $user_navigator = 'Chromium';
    }else if(strpos($user_agent, 'Edge') !== FALSE){
        $user_navigator = 'Microsoft Edge';
    }else if(strpos($user_agent, 'Trident') !== FALSE){ //IE 11
        $user_navigator = 'Internet Explorer';
    }else if(strpos($user_agent, 'MSIE') !== FALSE){
        $user_navigator = 'Internet Explorer';
    }else if(strpos($user_agent, 'Opera Mini') !== FALSE){
        $user_navigator = "Opera Mini";
    }else if(strpos($user_agent, 'Opera') || strpos($user_agent, 'OPR') !== FALSE){
        $user_navigator = "Opera";
    }else if(strpos($user_agent, 'Firefox') !== FALSE){
        $user_navigator = 'Mozilla Firefox';
    }else if(strpos($user_agent, 'Chrome') !== FALSE){
        $user_navigator = 'Google Chrome';
    }else if(strpos($user_agent, 'Safari') !== FALSE){
        $user_navigator = "Safari";
    }else if(strpos($user_agent, 'iTunes') !== FALSE){
        $user_navigator = 'iTunes';
    }else{
        $user_navigator = 'Desconocido';
    }

    # -------------------------------------------------------------------------------
    # Detectar si es o no un dispositivo móvil
    # -------------------------------------------------------------------------------
    if(strpos($user_agent, 'Android') !== FALSE
    || strpos($user_agent, 'webOS') !== FALSE
    || strpos($user_agent, 'iPhone') !== FALSE
    || strpos($user_agent, 'iPad') !== FALSE
    || strpos($user_agent, 'iPod') !== FALSE
    || strpos($user_agent, 'BlackBerry') !== FALSE
    || strpos($user_agent, 'Windows Phone') !== FALSE){
        $device = 'mobile';
    }else{
        $device = 'desktop';
    }

    # -------------------------------------------------------------------------------
    # Lenguaje del Navegador Utilizado
    # -------------------------------------------------------------------------------
    $lang_navigator = null;

    # -----------------------------------------------------------------
    # Blog (traer artículos)
    # -----------------------------------------------------------------
    $tabla = "noticias"; $ordenar = "fecha"; $item = "id_administrador"; $valor = $_SESSION["id"]; $item2 = "estado"; $valor2 = 1;
    $base = 0; $tope = 12; $modo = "DESC";
    $todos_los_articulos = DosCondiciones::ctr2CondicionesFAobtm($tabla, $ordenar, $item, $valor, $item2, $valor2, $base, $tope, $modo);

    $base = 0; $tope = 2; $modo = "DESC";
    $ultimos_2_articulos = DosCondiciones::ctr2CondicionesFAobtm($tabla, $ordenar, $item, $valor, $item2, $valor2, $base, $tope, $modo);

    $base = 0; $tope = 3; $modo = "DESC";
    $ultimos_3_articulos = DosCondiciones::ctr2CondicionesFAobtm($tabla, $ordenar, $item, $valor, $item2, $valor2, $base, $tope, $modo);

    $base = 0; $tope = 4; $modo = "DESC";
    $ultimos_4_articulos = DosCondiciones::ctr2CondicionesFAobtm($tabla, $ordenar, $item, $valor, $item2, $valor2, $base, $tope, $modo);

    # -----------------------------------------------------------------
    # Artículo (uno en particular) | Se puede crear si existe rutas[0]
    # -----------------------------------------------------------------
    if(isset($rutas[0])){
        $tabla = "noticias"; $item = "id_administrador"; $valor = $_SESSION["id"]; $item2 = "ruta"; $valor2 = $rutas[0];
        $articulo = DosCondiciones::ctr2Condiciones($tabla, $item, $valor, $item2, $valor2);
    }

    # -----------------------------------------------------------------
    # URL'S AMIGABLES DE ARTICULOS - BLOG
    # -----------------------------------------------------------------
    if(isset($rutas[0])){
        $item = "ruta";
        $valor = $rutas[0];
        $tabla = "noticias";
        $rutaArticuloBlog = UnaCondicion::ctr1Condicion($tabla, $item, $valor);
    }

?>