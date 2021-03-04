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
<link rel="stylesheet" type="text/css" href="<?php echo $_dominio ?>vistas/assets/vendor/font-awesome/css/font-awesome.min.css" />
<link rel="stylesheet" type="text/css" href="<?php echo $_dominio ?>vistas/assets/vendor/themify-icons/css/themify-icons.css" />


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