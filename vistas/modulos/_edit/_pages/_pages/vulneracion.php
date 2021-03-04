<main>

<section style="height: 100vh;padding-top: 3.8rem;padding-bottom: 3.8rem;">
  <div class="container" style="display: flex;flex-direction: column;justify-content: center;height: 100%;margin: auto auto !important;">
    <div class="row">
      <div class="col-lg-8 mx-auto text-center">
        <h1 class="display-4 font-weight-bold text-danger">El mensaje no ha podido ser enviado</h1>
        <p>No hemos recibido tu mensaje porque intentaste vulnerar el formulario.</p>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-6 mx-auto text-center">
        <div class="skill skill-text-in skill-danger-grad mb-0 mb-md-4">
          <div class="skill-wrap">
            <!-- Skill item -->
            <div class="skill-item">
              <p>Envío Fallido</p>
              <div class="progress">
                <div class="progress-bar wow fadeInLeft" data-wow-duration="3s" data-wow-delay="1s" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="50" style="width:50%"><span class="skill-percent">50%</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-6 mx-auto text-center">
        <a class="btn btn-light" href="<?php echo $_dominio ?>" style="border: 1px solid #dfdfdf;">Volver al sitio</a>
      </div>
    </div>

    <div class="row"> 
      <div class="col-lg-6 mx-auto text-center">
        <!-- social icons -->
        <ul class="social-icons round light si-colored-bg-on-hover text-center mt-5">
          <?php
            if(!empty($_facebook)){
              echo '<li class="social-icons-item social-facebook"><a class="social-icons-link" href="https://www.facebook.com/'.$_facebook.'" target="_blank"><i class="mdi mdi-facebook"></i></a></li>';
            }
            if(!empty($_instagram)){
              echo '<li class="social-icons-item social-youtube"><a class="social-icons-link" href="https://www.instagram.com/'.$_instagram.'" target="_blank"><i class="mdi mdi-instagram"></i></a></li>';
            }

            if(!empty($_email_publico)){
              echo '<li class="social-icons-item social-evernote"><a class="social-icons-link" href="mailto:'.$_email_publico.'"><i class="mdi mdi-mail-ru"></i></a></li>';
            }

              echo '<li class="social-icons-item social-rss"><a class="social-icons-link" href="'.$_dominio.'"><i class="mdi mdi-web"></i></a></li>'
          ?>
        </ul>
      </div>
    </div>

  </div>
</section>

</main>