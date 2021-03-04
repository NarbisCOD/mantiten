<header class="header-static navbar-sticky navbar-light">
	<!-- Logo Nav Start -->
	<nav class="navbar navbar-expand-lg">
		<div class="container">
			<!-- Logo -->
			<a class="navbar-brand" href="<?php echo $_dominio ?>">
				<!-- SVG Logo Start -->
				<img class="navbar-brand-item" src="<?php echo $_dominio ?>vistas/modulos/_edit/_src/_img/mantiten.png" alt="<?php echo $_cliente ?> - Logo" style="filter: grayscale(0);height: 36px;">
			</a>
			<!-- Menu opener button -->
			<button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"> </span>
			</button>
			<!-- Main Menu Start -->
			<div class="collapse navbar-collapse" id="navbarCollapse">
				<ul class="navbar-nav ml-auto">
					<!-- Inicio -->
					<li class="nav-item">
						<a class="nav-link" href="<?php echo $_dominio ?>">Inicio</a>
					</li>

					<!-- División Calefacción -->
					<li class="nav-item">
						<a class="nav-link" href="<?php echo $_dominio ?>division-calefaccion">División Calefacción</a>
					</li>
					
					<!-- Proyectos -->
					<li class="nav-item">
						<a class="nav-link" href="<?php echo $_dominio ?>proyectos">Proyectos</a>
					</li>

					<?php /*
					<!-- Preguntas Frecuentes -->
					<li class="nav-item d-lg-none d-xl-block">
						<a class="nav-link" href="<?php echo $_dominio ?>preguntas-frecuentes">Preguntas Frecuentes</a>
					</li> */ ?>
					
					<!-- Contacto -->
					<li class="nav-item">
						<a class="nav-link" href="<?php echo $_dominio ?>contacto">Contacto</a>
					</li>
				</ul>
			</div>
			<!-- Main Menu End -->
		</div>
	</nav>
	<!-- Logo Nav End -->
</header>