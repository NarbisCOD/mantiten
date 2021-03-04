<?php include_once(__DIR__.'/../_src-pages/--header-transparent-light.php'); ?>
<main class="">

	<div class="left bg-dark pattern-overlay-2">
		<div class="container">
			<div class="row all-text-white">
				<div class="col-md-12 align-self-center">
					<h1 class="font-weight-bold display-4 display-md-1 mb-2 mb-md-n4 mt-9 text-white">Contacto</h1>
				</div>
			</div>
		</div>
	</div>

	<?php /* ------------------------------------------------------------------------------------------ */ ?>
	<section class="" style="/*border-top: 1px solid #7c7d7fab;*/">
		<div class="container h-100">
			<div class="row">
				<div class="col-md-12 align-self-center">
					<div class="title text-left pb-0">
						<?php # <span class="pre-title">¿Por qué elegirnos?</span> ?>
						<h3>Profesionales 4000 expertos y con una constante vocación en innovación como método de satisfacción al cliente y sus requerimientos.</h3>
						<h3>Nuestra visión es alcanzar los máximos niveles de calidad en servicios y productos asociados con continua innonvación tecnológica.</h3>
						<!-- <p class="mb-0 text-dark">Nuestra visión es alcanzar los máximos niveles de calidad en servicios y productos asociados con continua innonvación tecnológica.</p> -->
					</div>
				</div>
				<?php /* <div class="col-md-10 col-lg-6 mx-md-auto align-self-center p-0">
					<img class="rounded" src="<?php echo $_dominio ?>vistas/modulos/_edit/_src/_img/logo-alternativo-black.svg" alt="<?php echo $_cliente ?> - Logo" style="filter: grayscale(0);">
				</div> */ ?>
			</div>
		</div>
	</section>


	<?php /* ------------------------------------------------------------------------------------------ */ ?>
	<section class="mb-n6 p-0">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<h4 class="text-left mb-4">Contactanos para poder acercarte la mejor propuesta en base a tus necesidades.</h4 class="text-left mb-3">
				</div>
			</div>
		</div>
		<div class="container">
			<div class="shadow border-radius-3 overflow-hidden">
				<div class="row no-gutters">

					<div class="col-md-8 bg-white">
					<a href="mailto:<?php echo $_email_publico ?>">
						<form id="btn-submit-contacto" action="<?php echo $_dominio ?>vistas/modulos/_edit/_src/_form/form-contact-phone.php" method="post">
							<div class="row h-100 p-4 p-md-5">
								<div class="col-lg-3 align-self-center">
									<i class="mdi mdi-email-check-outline display-1 text-dark"></i>
								</div>
								<div class="col-lg-9 mt-2 mt-lg-0" style="align-self: center;">
									<h3 class="mb-3">Contactanos</h3>
									<div class="row">
										<div class="col-12">
											<input class="form-control" placeholder="Nombre" type="text" name="name" required="">
										</div>
										<div class="col-12">
											<input class="form-control" placeholder="Email" type="email" name="email-address" required="">
										</div>
									</div>
									<div class="row">
										<div class="col-12">
											<input class="form-control" placeholder="Teléfono" type="text" name="phone" required="">
										</div>
									</div>
									<button class="btn btn-dark" type="submit" fit="contact-form">Enviar mensaje</button>
									<p class="small mb-0">Te responderemos a tu email lo antes posible.</p>
								</div>
							</div>
						</form>
					</a>
					</div>
					<div class="col-md-4 d-flex bg-grad-success pattern-overlay-2">
						<div class="p-4 p-sm-5 h-auto" style="align-self: center;">
							<div class="all-text-white">
								<h3><i class="mdi mdi-whatsapp"></i> WhatsApp</h3>
								<p class="m-0">Contactanos ahora por WhatsApp.</p>
							</div>
							<div class="mt-3">
								<a class="btn btn-dark btn-sm mb-0" href="https://api.whatsapp.com/send?phone=<?php echo $_whatsapp_link ?>" target="_blank">Enviar Mensaje</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

</main>
<?php include_once(__DIR__.'../../_src-pages/--footer.php'); ?>