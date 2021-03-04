<?php # ---------------------------------------------------------------------------------------------------
# No borres estos dos ya que contienen jQuery, Bootstrap.js - Son necesarios para que funcionen el resto
# ------------------------------------------------------------------------------------------------------ ?>
<script src="<?php echo $_dominio ?>vistas/assets/vendor/jquery/jquery.min.js"></script>
<script src="<?php echo $_dominio ?>vistas/assets/vendor/popper.js/umd/popper.min.js"></script>
<script src="<?php echo $_dominio ?>vistas/assets/vendor/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="<?php echo $_dominio ?>vistas/assets/vendor/jquery-easing/jquery.easing.min.js"></script>

<?php # ---------------------------------------------------------------------------------------------------
# Estos son scripts opcionales. Podés agregar o eliminar según necesites.
# Más info sobre estos scripts en:
# https://preview.webpixels.io/quick-website-ui-kit-v1.0.0/docs/getting-started/file-structure.html
# ------------------------------------------------------------------------------------------------------ ?>
<?php /* <script src="<?php echo $_dominio ?>vistas/assets/vendor/fancybox/js/jquery.fancybox.min.js"></script> */ ?>
<script src="<?php echo $_dominio ?>vistas/assets/vendor/swiper/js/swiper.js"></script>
<script src="<?php echo $_dominio ?>vistas/assets/vendor/animated-headline/main.js"></script>

<?php # --------------------------------------------------------------------------------------------
# No borres este script ya que es del tema. Si lo eliminás algunas instrucciones no funcionarán
# ----------------------------------------------------------------------------------------------- ?>
<script src="<?php echo $_dominio ?>vistas/assets/js/functions.js"></script>

<?php # --------------------------------------------------------------------------------------------
# Estas variables son fundamentales para que funcionen validations.js y visitas_ip.js 
# ----------------------------------------------------------------------------------------------- ?>
<script>var urlBase = $("#urlBase").attr("url");var indice_0 = $("#urlBase").attr("indice_0"); var id = $("#urlBase").attr("_id");</script>

<?php
# ---------------------------------------------------------------------------
# Si agregaste algo en el campo "Google Analytics" del Dashboard,
# entonces aparecerá en la web. Si no agregaste nada no aparecerá nada.
#
# No olvides agregar el Google Analytics completo
# (en el dashboard, acá no), con las etiquetas <script> y <noscript>.

if(!empty($_google_analytics)){
    echo $_google_analytics;
}
# ---------------------------------------------------------------------------
?>