<?php include_once(__DIR__.'../../_src-pages/--header.php'); ?>
<main>

	<div class="left bg-grad pattern-overlay-2">
		<div class="container">
			<div class="row all-text-white">
				<div class="col-md-12 align-self-center">
					<h1 class="font-weight-bold display-4 display-md-1 mb-2 mb-md-n4 mt-9">Contacto</h1>
				</div>
			</div>
		</div>
	</div>


	<?php /* ------------------------------------------------------------------------------------------ */ ?>
	<section>
		<div class="container h-100">
			<div class="row">
				<div class="col-md-12 col-lg-6 align-self-center">
					<div class="title text-left">
						<?php # <span class="pre-title">¿Por qué elegirnos?</span> ?>
						<h3>Profesionales expertos y con una constante vocación en innovación como método de satisfacción al cliente y sus requerimientos.</h3>
						<p class="mb-0">Nuestra visión es alcanzar los máximos niveles de calidad en servicios y productos asociados con continua innonvación tecnológica.</p>
					</div>
				</div>
				<div class="col-md-10 col-lg-6 mx-md-auto align-self-center">
					<img class="rounded show-desktop" src="<?php echo $_dominio ?>vistas/modulos/_edit/_src/_img/meta-image.jpg" alt="<?php echo $_cliente ?> - Logo" style="filter: grayscale(0);">
				</div>
			</div>
		</div>
	</section>


	<?php /* ------------------------------------------------------------------------------------------ */ ?>
	<section class="mb-n6 p-0">
		<div class="container">
			<div class="shadow border-radius-3 overflow-hidden">
				<div class="row no-gutters">

					<div class="col-md-8 bg-white">
						<a href="mailto:<?php echo $_email_publico ?>" target="_blank">
							<form id="btn-submit-contacto" action="<?php echo $_dominio ?>vistas/modulos/_edit/_src/_form/form-contact-message.php" method="post">
								<div class="row h-100 p-4 p-md-5">
									<div class="col-lg-3 align-self-center">
										<i class="mdi mdi-email-check-outline display-1 text-danger"></i>
									</div>
									<div class="col-lg-9 mt-2 mt-lg-0" style="align-self: center;">
										<h3 class="mb-3">Envianos un mensaje</h3>
										<div class="row">
											<div class="col-md-6">
												<input class="form-control" placeholder="Nombre" type="text" name="name" required="">
											</div>
											<div class="col-md-6">
												<input class="form-control" placeholder="Email" type="email" name="email-address" required="">
											</div>
										</div>
										<div class="row">
											<div class="col-12">
												<textarea class="form-control" placeholder="Escribe tu mensaje..." name="message" rows="3" required=""></textarea>
											</div>
										</div>
										<button class="btn btn-dark" type="submit" fit="contact-form">Enviar mensaje</button>
										<p class="small mb-0 text-dark">Te responderemos a tu email lo antes posible.</p>
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