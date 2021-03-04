<main>

<section style="height: 100vh;padding-top: 3.8rem;padding-bottom: 3.8rem;">
    <div class="container" style="display: flex;flex-direction: column;justify-content: center;height: 100%;margin: auto auto !important;">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center">
                <h1 class="display-4 font-weight-bold text-grad">Error 404 - Página no encontrada</h1>
                <p>Parece que el enlace al que intentas acceder nunca existió o fue eliminado. Revisa que esté bien escrita la URL. También puedes ir a la página principal o regresar a la anterior.</p>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6 mx-auto text-center">
                <div class="skill skill-text-in skill-grad mb-0 mb-md-4">
                    <div class="skill-wrap">
                        <div class="skill-item">
                            <p>Error 404</p>
                            <div class="progress">
                                <div class="progress-bar wow fadeInLeft" data-wow-duration="3s" data-wow-delay="1s" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="25" style="width:25%"><span class="skill-percent"><i class="mdi mdi-bomb"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6 mx-auto text-center">
                <a class="btn btn-light mr-2" href="<?php echo $_dominio ?>" style="border: 1px solid #dfdfdf;">Volver al sitio</a>
                <button class="btn btn-light" style="border: 1px solid #dfdfdf;" onclick='history.back()'>Pagina anterior</button>
            </div>
        </div>

        <div class="row"> 
            <div class="col-lg-6 mx-auto text-center">
                <ul class="social-icons round light si-colored-bg-on-hover text-center mt-5">
                    <li class="social-icons-item social-facebook"><a class="social-icons-link" href="https://www.facebook.com/<?php echo $_facebook ?>" target="_blank"><i class="mdi mdi-facebook"></i></a></li>
                    <li class="social-icons-item social-youtube"><a class="social-icons-link" href="https://www.instagram.com/<?php echo $_instagram ?>" target="_blank"><i class="mdi mdi-instagram"></i></a></li>
                    <li class="social-icons-item social-vimeo"><a class="social-icons-link" href="mailto:<?php echo $_email_publico ?>"><i class="mdi mdi-mail-ru"></i></a></li>
                    <li class="social-icons-item social-rss"><a class="social-icons-link" href="<?php echo $_dominio ?>"><i class="mdi mdi-web"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</section>

</main>

<?php echo '<script>window.location.href = "'.$_dominio.'";exit();</script>'; ?>