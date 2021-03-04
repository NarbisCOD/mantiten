<!DOCTYPE html>
<html lang="es">
<head>
	
	<?php include_once(__DIR__.'/modulos/src/explode.php'); ?>
	<?php include_once(__DIR__.'/modulos/src/--protocol.php'); ?>
	<?php include_once(__DIR__.'/modulos/src/meta-datos.php'); ?>
	<?php include_once(__DIR__.'/modulos/src/links.php'); ?>
	
</head>

<body>
	<div class="preloader">
		<img src="<?php echo $url ?>vistas/modulos/_edit/_src/_img/preloader.svg" alt="Pre-loader">
	</div>

	<?php

		# CONTENIDO DINÁMICO
		$rutas = array();
		$ruta = null;

		if(isset($_GET["ruta"])){

			$rutas = explode("/", $_GET["ruta"]);

			$item = "ruta";
			$valor = $rutas[0];

			# -------------------------------------------------------------------------------------

			include_once(__DIR__.'/modulos/_edit/__url-amigables.php');

			# -------------------------------------------------------------------------------------			

		# index (si no existe $rutas[0])
		}else{
			include "modulos/_edit/_pages/_home.php";
		}

	?>
	
	<span id="urlBase" _id="<?php echo $_SESSION["id"] ?>" url="<?php echo $url ?>" indice_0="<?php if(!isset($rutas[0])){ echo "home"; }else{ echo $rutas[0]; } ?>" style="display: none"></span>
	<span id="urlActual" url="<?php echo 'https://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'] ?>" style="display: none"></span>
	<?php include_once(__DIR__.'/modulos/src/scripts-body.php'); ?>

	<?php # -------------------------------------------------------------
	#
	# ---------------------------------------------------------------- ?>

    </body>
</html>