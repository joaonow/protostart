<?php get_header(); ?>

<?php if ( get_field( 'banner') ) { ?>
  <style>
    .jumbotron {
      background-image: url( <?php the_field( 'banner' ); ?> );
    }
  </style>
<?php } ?>

<div class="jumbotron jumbotron-fluid"></div>

<div class="container">
  <h1 class="text-center">404</h1>

  <h2>Upps, da ist irgendetwas schief gegangen.</h2>

  <a href=" <?php echo esc_url( home_url( '/' ) ); ?> " class="button">
    Zurück zur Startseite
  </a>
</div>

<div id="contact-icons" class="container-fluid">
    <h2>Get in contact</h2>

    <div class="row">

      <div class="call col-sm-6 col-md-3">
        <a href="callto:022829977972">
          <div class="contact-item">
            <span></span>
          </div>
          <h3 class="h5">0228-299779 72</h3>
        </a>
      </div>

      <div class="mail col-sm-6 col-md-3">
        <a href="mailto:info@protostart.de">
          <div class="contact-item">
            <span></span>
          </div>
          <h3 class="h5">info@protostart.de</h3>
        </a>
      </div>

      <div class="facebook col-sm-6 col-md-3">
        <a href="facebook.com/protostart">
          <div class="contact-item">
            <span></span>
          </div>
          <h3 class="h5">facebook.com/protostart</h3>
        </a>
      </div>

      <div class="linkedin col-sm-6 col-md-3">
        <a href="facebook.com/protostart">
          <div class="contact-item">
            <span></span>
          </div>
          <h3 class="h5">linkedin.com</h3>
        </a>
      </div>

    </div>

    <a href="<?php the_field( 'impressum_link' ); ?>" id="impressum">Impressum</a>
</div>

<?php get_footer(); ?>
