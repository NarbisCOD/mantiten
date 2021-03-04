<footer class="footer bg-light 
	<?php
		if(!isset($rutas[0]) || (isset($rutas[0]) && $rutas[0] == "contacto")){
			echo 'pt-8';
		}else{
			echo 'pt-6';
		}
	?>" style="border-top: 1px solid #8f939738;">
	<div class="footer-content pb-3">
		<div class="container">
			<div class="row" style="align-items: center; justify-content: space-between;">

					<!-- Footer widget 1 -->
					<div class="col-md-6 col-lg-4">
						<div class="widget">
							<a href="<?php echo $_dominio ?>" class="footer-logo">
								<!-- footer SVG logo Start -->
								<img class="navbar-brand-item" src="<?php echo $_dominio ?>vistas/modulos/_edit/_src/_img/mantiten-transparente.png" alt="<?php echo $_cliente ?> - Logo" style="filter: grayscale(0);">
								<!-- footer SVG logo End -->
							</a>
							<p class="mt-3 body-font">Resultados que se basan en años de experiencia en cada segmento de actuación. Desarrollos en ingeniería eléctrica.</p>
						</div>
					</div>
					<!-- Footer widget 2 -->
					<div class="col-sm-6 col-lg-4">
						<div class="widget address">
							<ul class="list-unstyled">
								<li class="media mb-1"><i class="mr-3 display-8 mdi mdi-google-maps"></i> <p class="mb-0 body-font" style="line-height: 2.3;"><?php echo $_provincia ?>, <?php echo $_pais ?></p></li>
								<li class="media mb-1"><i class="mr-3 display-8 mdi mdi-phone"></i> <p class="mb-0 body-font" style="line-height: 2.3;"><?php echo $_telefono_visible ?></p></li>
								<li class="media mb-1"><i class="mr-3 display-8 mdi mdi-mail-ru"></i> <p class="mb-0 body-font" style="line-height: 2.3;"><a href="mailto:<?php echo $_email_publico ?>" style="color: inherit;"><?php echo $_email_publico ?></a></p></li>
								<li class="media mb-1"><i class="mr-3 display-8 mdi mdi-clock-outline"></i>
									<p class="mb-0 body-font" style="line-height: 2.3;">Lun - Vie: <strong>09:00 - 21:00</strong></p>
								</li>
							</ul>
						</div>
					</div>

					<!-- Footer widget 3 a -->
					<div class="col-md-4 col-sm-6 d-none d-lg-block col-lg-4 col-xl-4">
						<div class="widget">
							<h6>Enlaces rápidos</h6>
							<ul class="nav flex-column primary-hover">
								<li class="nav-item"><a class="nav-link" href="<?php echo $_dominio ?>">Inicio</a></li>
								<li class="nav-item"><a class="nav-link" href="<?php echo $_dominio ?>proyectos">Proyectos</a></li>
								<li class="nav-item"><a class="nav-link" href="<?php echo $_dominio ?>division-calefaccion">División Calefacción</a></li>
							</ul>
						</div>
					</div>

			</div>

		</div>
	</div>
	<div class="divider mt-md-3"></div>
	<!--footer copyright -->
	<div class="footer-copyright py-3">
		<div class="container">
			<div class="d-md-flex justify-content-between align-items-center py-3 text-center text-md-left">
				<!-- copyright text -->
				<div class="copyright-text">©2019 - <?php echo $_cliente ?></div>
			</div>
		</div>
	</div>
</footer>

<?php /*
<div class="contenedor-boton">
	<a href="https://api.whatsapp.com/send?phone=<?= $_whatsapp_link ?>&text=Hola, me interesan sus servicios." target="_blank">
		<ul>
			<li style="list-style: none;" class="logo-ctw-nov082017-jp">
				<img src="<?php echo $_dominio ?>vistas/modulos/_edit/_src/_img/whatsapp_logo.png">
			</li>
			<li style="list-style: none;" class="icon-ctw-nov082017-jp">
				<img src="<?php echo $_dominio ?>vistas/modulos/_edit/_src/_img/noti.png" alt="">
			</li>
			<li style="list-style: none;" class="mensaje">
				<img src="<?php echo $_dominio ?>vistas/modulos/_edit/_src/_img/mensaje.png">
			</li>
		</ul>
	</a>
</div> */ ?>

<?php
	if(isset($rutas[0]) && $rutas[0] == "landing"){
		echo '<div class="btn-llamada" style="display: block;width: 70px;height: 70px;color: #fff;position: fixed;left: 12px;bottom: 14px;border-radius: 50%;line-height: 80px;text-align: center;z-index: 999;">
				<a href="tel:'.$_telefono.'" class="">
					<img src="'.$_dominio.'vistas/modulos/_edit/_src/_img/btn_llamada.svg">
				</a>
			</div>';
	}
?>