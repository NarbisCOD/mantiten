<?php # -------------------------------------------------------------------------------
# El es icono miniatura que se ve en la pestaña del navegador. No lo borres.
# Si vas a asignarle otro, acordate de llamarlo favicon.
# Respecto a la extensión puede ser .png o .ico, pero no .svg o Chrome no lo leerá
# ---------------------------------------------------------------------------------- ?>
<link rel="icon" href="<?php echo $_dominio ?>vistas/modulos/_edit/_src/_img/favicon.png" type="image/png">

<?php # -------------------------------------------------------------------------------------------------------------
# CSS -> Fancybox -> Click y agranda una imagen | Eliminalo si no vas a usarlo o condicionalo por URL amigable
# ---------------------------------------------------------------------------------------------------------------- ?>
<?php /* <link rel="stylesheet" type="text/css" href="<?php echo $_dominio ?>vistas/assets/vendor/fancybox/css/jquery.fancybox.min.css" /> */ ?>

<?php # -------------------------------------------------------------------------------------------------------------
# No lo borres ya que es el archivo .css del tema Wizixo 
# ---------------------------------------------------------------------------------------------------------------- ?>
<link rel="stylesheet" type="text/css" href="<?php echo $_dominio ?>vistas/assets/css/style.css" />

<?php # -------------------------------------------------------------------------------
# Mantiten - Si lo borrás algunas cosas en el sitio pueden deformarse
# ---------------------------------------------------------------------------------- ?>
<link rel="stylesheet" type="text/css" href="<?php echo $_dominio ?>vistas/mantiten.css" />

<?php # -------------------------------------------------------------------------------------------------------------
# Material Design Icons - Son los iconos que uso generalmente. Si no vas a usarlos, podés eliminar este enlace
# ---------------------------------------------------------------------------------------------------------------- ?>
<link rel="stylesheet" href="vistas/assets/fonts/material-design/css/materialdesignicons.min.css">
<?php # -------------------------------------------------------------------------------------------------------------
# Font-Awesome y otros del Tema
# ---------------------------------------------------------------------------------------------------------------- ?>
<link rel="stylesheet" type="text/css" href="<?php echo $url ?>vistas/assets/vendor/font-awesome/css/font-awesome.min.css" />
<link rel="stylesheet" type="text/css" href="<?php echo $url ?>vistas/assets/vendor/themify-icons/css/themify-icons.css" />


<?php
# -----------------------------------------------------------------------------------------------
# También podés agregar más elementos como links (.css) y scripts (.js)
# Por ej. podés agregar fuentes de Google Fonts
# -----------------------------------------------------------------------------------------------
?>
<link rel="stylesheet" type="text/css" href="<?php echo $_dominio ?>vistas/assets/vendor/swiper/css/swiper.min.css" />


<?php
# ---------------------------------------------------------------------------
# Si agregaste algo en el campo "Pixel de Facebook" del Dashboard,
# entonces aparecerá en la web. Si no agregaste nada no aparecerá nada.
#
# No olvides agregar el Pixel de Facebook completo
# (en el dashboard, acá no), con las etiquetas <script> y <noscript>.

if(!empty($_pixel_facebook)){
    echo $_pixel_facebook;
}
# ---------------------------------------------------------------------------
?>

<?php # Si es un artículo, agregá esta fuente y modificaciones de estilo
    if(isset($rutas[0])){
        if(($rutas[0] == $rutaArticuloBlog["ruta"] && $rutaArticuloBlog["estado"]) == 1 || $rutas[0] == "blog"){
            echo'<style>
                    h1, h2, h3, h4, h5, h6 {font-family: "Lora", serif;}
                    p {font-size: 0.95rem; font-family: "Lora", serif;}
                    h3 {font-size: 1.05rem;margin-top: 1.85rem;}
                    .lead {font-size: 20px;}
                    h1 {font-size: 3rem;}
                    .body-font {font-family: "Roboto", sans-serif; font-size: 0.875rem; color: #8f9397;}
                </style>';
        }
        if(($rutas[0] == $rutaArticuloBlog["ruta"] && $rutaArticuloBlog["estado"]) == 1) {
            echo'<style>p{font-size: 19px; color:#212529; margin-bottom: 1.8rem;}</style>';
        }
    }
?>