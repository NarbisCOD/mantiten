<?php # ----------------------------------------------------------------------------------------------------------
# Si existe 'www' entonces muestra link rel="canonical" con la URL que debería tomar en cuenta el Bot de Google
# ------------------------------------------------------------------------------------------------------------- ?>
<?php
    if($_SERVER['HTTP_HOST'] == "www.mantiten.com"){
        if(isset($rutas[0])){
            echo '<link rel="canonical" href="http://mantiten.com/'.$rutas[0].'">';
        }else{
            echo '<link rel="canonical" href="http://mantiten.com/">';
        }
    }
?>

<?php # ----------------------------------------------------------------------------------------------------------
# Cambia el color de la barra de navegación en la aplicación Chrome para dispositivos Android
# -------------------------------------------------------
# Utiliza valores HEX dentro del atributo content=".." pero no agregues transparencia. Deben ir 6 caracteres
# -------------------------------------------------------
# También puedes condicionar colores para diferentes páginas según su URL amigable con la variable $rutas[0]
# ------------------------------------------------------------------------------------------------------------- ?>
<?php
    if(!isset($rutas[0])){
        echo '<meta name="theme-color" content="#ffffff">';
    }else{
        echo '<meta name="theme-color" content="#ffffff">';
    }
    #eb1d22
?>

<?php # ----------------------------------------------------------------------------------------------------------
# Ahora el equivalente para dispositivos móviles de Apple, pero como no tengo ninguno a mano no lo he probado.
# ------------------------------------------------------------------------------------------------------------- ?>
<meta name="apple-mobile-web-app-status-bar-style" content="#ffffff">

<?php # ----------------------------------------------------------------------------------------------------------
# Variables meta - fundamentales para los resultados de búsqueda de Google
# ----------------------------------------------------------------------------------------------------------------

    # ------------------------------------------------------------------------------------------------------------------------------
    # La variable $meta_image la uso para itemprop="image" y property="og:image". Son metadatos para Google y Facebook
    # -------------------------------------------------------------
    # Es importante ya que si compartís la web en una publicación de facebook e incluso dentro de un comentario pegás miweb.com
    # va a aparecer cualquier imagen en tu sitio, pero de esta manera le decimos que muestre una imagen en particular.
    # La resolución recomendada es 1280x720 y el formato .jpg o .png, no uses .svg
    # ------------------------------------------------------------------------------------------------------------------------------
    $meta_image = $_dominio.'vistas/modulos/_edit/_src/_img/meta-image.jpg';

    # ----------------------------------------------------------------------------------------------------------
    # Si existe $rutas[0] - es decir, si hay algo despues de .com/
    # ----------------------------------------------------------------------------------------------------------
    if(isset($rutas[0])){

        # ---------------------------------------------------------------------------------------------------------------------
        # Observa las siguientes condiciones
        # -------------------------------------------------------------
        # Acá se define lo que irá en <title> y en <meta name="description" content="..."> según lo que haya despúes de .com/
        # ---------------------------------------------------------------------------------------------------------------------
        if($rutas[0] == "landing-page"){
            $meta_title = "Mantiten";
            $meta_description = "Resultados que se basan en años de experiencia en cada segmento de actuación. Desarrollos en ingeniería eléctrica.";

        }else if($rutas[0] == "contacto"){
            $meta_title = "Mantiten";
            $meta_description = "Resultados que se basan en años de experiencia en cada segmento de actuación. Desarrollos en ingeniería eléctrica.";

        # ---------------------------------------------------------------------------------------------------------------------
        # OTROS
        # ---------------------------------------------------------------------------------------------------------------------   
        }else if($rutas[0] == "mensaje-enviado"){
            $meta_title = "Mensaje enviado satisfactoriamente a nuestra casilla de correo";
            $meta_description = "Excelente, tu mensaje ha sido sin inconvenientes. En breve te responderemos a tu correo electrónico.";

            echo '<meta name="robots" content="nofollow"><meta name="googlebot" content="noindex">';
        
        }else if($rutas[0] == "vulneracion"){
            $meta_title = "Mensaje no enviado por intento de vulneración";
            $meta_description = "Parece que has intentando vulnerar el formulario, por tanto el mensaje no ha podido ser enviado.";

            echo '<meta name="robots" content="nofollow"><meta name="googlebot" content="noindex">';
        
        # ---------------------------------------------------------------------------------------------------------------------
        # EN CASO DE QUE RUTAS[0] COINCIDA CON ALGÚN ARTÍCULO
        # ---------------------------------------------------------------------------------------------------------------------  
        }else if($rutas[0] == $rutaArticuloBlog["ruta"] && $rutaArticuloBlog["estado"] == 1){

            $meta_title = $rutaArticuloBlog["titulo"];
            $meta_description = $rutaArticuloBlog["descripcion"];
            $meta_image = $_app.'src/noticias/img/card/'.$rutaArticuloBlog["img_card"].'';

        }
        
        # ---------------------------------------------------------------------------------------------------------------------
        # Error 404 - cuando la URL escrita no existe en tu sitio
        # ---------------------------------------------------------------------------------------------------------------------
        else{
            $meta_title = "Mantiten";
            $meta_description = "Resultados que se basan en años de experiencia en cada segmento de actuación. Desarrollos en ingeniería eléctrica.";

            echo '<meta name="robots" content="nofollow"><meta name="googlebot" content="noindex">';
        }

    # ---------------------------------------------------------------------------------------------------------------------
    # Si está escrito solo el dominio - ej. miweb.com y no miweb.com/blog
    # ---------------------------------------------------------------------------------------------------------------------
    }else{
        $meta_title = "Mantiten";
        $meta_description = "Resultados que se basan en años de experiencia en cada segmento de actuación. Desarrollos en ingeniería eléctrica.";
    }
    
?>

<?php # ---------------------------------------------------------------------------------------------------------------------
# HTML5 - Según la URL de la página - ej. .com/blog, .com/contacto, .com/nosotros - cambiará la info - Esto es fundamental
# ------------------------------------------------------------------------------------------------------------------------ ?>
<title><?= $meta_title ?></title>
<meta name="description" content="<?= $meta_description ?>">

<?php # ---------------------------------------------------------------------------------------------------------------------
# Datos Estructurados | Open Graph en General - Sirve para cuando compartes o comparten una URL específica de tu sitio
# ------------------------------------------------------------------------------------------------------------------------ ?>
<meta property="og:title" content="<?= $meta_title ?>">
<?php # $_SERVER['REQUEST_URI'] traerá lo que sigue en la URL después de tu dominio ?>
<?php
    if(!isset($rutas[0])){
        echo '<meta property="og:url" content="'.$_dominio.'">';
    }else{
        echo '<meta property="og:url" content="'.$_dominio.$rutas[0].'">';
    }
?>
<meta property="og:description" content="<?= $meta_description ?>">
<meta property="og:image" content="<?= $meta_image ?>">

<?php # ---------------------------------------------------------------------------------------------------------------------
# Datos Estructurados de Facebook - Esta es la información visible cuando compartes o comparten una URL específica de tu sitio
# ------------------------------------------------------------------------------------------------------------------------ ?>

<?php # ---------------------------------------------------------------------------------------------------------------------
# Datos Estructurados de Twitter y Open Graph en General - Sirve para cuando compartes o comparten una URL específica de tu sitio
# ------------------------------------------------------------------------------------------------------------------------ ?>

<?php # ---------------------------------------------------------------------------------------------------------------------
# PODÉS ENCONTRAR MAS INFORMACIÓN SOBRE METADATOS EN -> http://www.alyrae.org/html-head
# ------------------------------------------------------------------------------------------------------------------------ ?>