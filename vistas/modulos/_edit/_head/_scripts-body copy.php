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

<?php # --------------------------------------------------------------------------------------------
# Este código facilita el país para el registro que se creará en la DB si completan el formulario
# --------------------------------------------------------------------------------------------------

    # Siempre existe esta variable, aun así prefiero ser exagerado y preguntar si existe
    if(isset($geo_ip)){

        # Así generamos en nuestro HTML una etiqueta donde dejamos info de la ubicación del visitante
        echo '<span id="geolocalizador" class="d-none"
                ip="'.$_SERVER['REMOTE_ADDR'].'"

                region="'.$geo_ip["geoplugin_region"].'"
                codigo_region="'.$geo_ip["geoplugin_regionCode"].'"
                nombre_region="'.$geo_ip["geoplugin_regionName"].'"

                codigo_pais="'.$geo_ip["geoplugin_countryCode"].'"
                nombre_pais="'.$geo_ip["geoplugin_countryName"].'"

                codigo_continente="'.$geo_ip["geoplugin_continentCode"].'"
                nombre_continente="'.$geo_ip["geoplugin_continentName"].'"

                latitud="'.$geo_ip["geoplugin_latitude"].'"
                longitud="'.$geo_ip["geoplugin_longitude"].'"

                codigo_moneda="'.$geo_ip["geoplugin_currencyCode"].'"
                simbolo_moneda="'.$geo_ip["geoplugin_currencySymbol"].'"
                conversion_moneda="'.$geo_ip["geoplugin_currencyConverter"].'"
              ></span>';
        
        # Si se cumple lo de abajo entonces se quita el botón de "Enviar mensaje" en el formulario
        if($geo_ip["geoplugin_continentCode"] != "SA" && $geo_ip["geoplugin_continentCode"] != "EU" && $geo_ip["geoplugin_continentCode"] != "NA"){
            echo '<script>$("[fit=contact-form]").remove()</script>';
            # Esta página te puede servir para crear condiciones: http://country-code.cl/es/
        }
    }

?>

<?php # ----------------------------------------------------------------------------------------
# Datos del dispositivo que usa el Usuario
# ----------------------------------------------------------------------------------------------
    echo '<span id="user_agent" class="d-none"
            navegador="'.$user_navigator.'"
            lenguaje_navegador="'.$lang_navigator.'"
            tipo_dispositivo="'.$device.'"
            pagina="'.$_SERVER['REQUEST_URI'].'"
          ></span>';
?>

<?php # -------------------------------------------------------------------------------
# Esta es la validación del formulario en .com/contacto
# ---------------------------------------------------------------------------------- ?>
<?php
    if(!isset($rutas[0]) || (isset($rutas[0]) && $rutas[0] == "contacto")){
        echo '<script src="'.$_dominio.'vistas/assets/js/validations.js"></script>';
    }
?>

<?php # -------------------------------------------------------------------------------
# Esta script registra cada página visitada (incluyendo las del blog)
# ---------------------------------------------------------------------------------- ?>
<?php
    if($ip != $_ip_filtro_1 && $ip != $_ip_filtro_2 && $ip != $_ip_filtro_3 && $ip != $_ip_filtro_4){
        echo '<script src="'.$_dominio.'vistas/assets/js/visitas_ip.js"></script>';
    }
?>

<?php # ----------------------------------------------------------------------------------------
# Este script sirve para agregar una visita al contador de un artículo cuando es visitado
# ------------------------------------------------------------------------------------------- ?>
<?php
    if($ip != $_ip_filtro_1 && $ip != $_ip_filtro_2 && $ip != $_ip_filtro_3 && $ip != $_ip_filtro_4){
        echo '<script src="'.$_dominio.'vistas/assets/js/visitas_articulo.js"></script>';
    }
?>

<?php # ---------------------------------------------------------------------------------------------------
# También podés agregar otros scripts o condicionarlos según URL amigable ($rutas[0])
#
# No agregues scripts antes que los dos primeros o puede haber problemas.
# Ej. si tu script usa jQuery y lo ponés antes que "jquery.min.js" entonces no funcionará
# ------------------------------------------------------------------------------------------------------ ?>

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