<?php
/*
  Template Name: Startseite
*/
?>

<?php get_header(); ?>

  <?php if ( get_field( 'banner') ) { ?>
      <style>
        .jumbotron {
          background-image: url( <?php the_field( 'banner' ); ?> );
        }
      </style>
  <?php } ?>

  <div class="jumbotron jumbotron-fluid">

    <a href=" <?php echo esc_url( home_url( '/' ) ); ?> "><img id="proto-education-logo" class="hidden-md-down" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/proto-nrw-logo.png" alt="Das Proto-NRW Logo"></a>

    <div class="banner-text col-lg-4">
      <svg id="three-circles" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 83.65 147.94"><defs><style>.tc-cls-1,.tc-cls-3{fill:none;}.tc-cls-2{isolation:isolate;}.tc-cls-3{stroke:#772684;}.tc-cls-4{fill:#772684;}.tc-cls-5{fill:#0069b4;}.tc-cls-6{fill:#7ab538;}.tc-cls-7{mix-blend-mode:multiply;}.tc-cls-8{clip-path:url(#clip-path);}.tc-cls-9{clip-path:url(#clip-path-2);}</style><clipPath id="clip-path"><rect class="cls-1" x="23.86" y="7.31" width="22.79" height="22.79"/></clipPath><clipPath id="clip-path-2"><rect class="cls-1" x="23.91" y="7.37" width="22.68" height="22.68"/></clipPath></defs><g class="tc-cls-2"><g id="Ebene_2" data-name="Ebene 2"><g id="Ebene_2-2" data-name="Ebene 2"><line class="tc-cls-3" x1="0.5" y1="147.94" x2="0.5" y2="30.55"/><path class="tc-cls-4" d="M11.84,42.39A11.84,11.84,0,1,0,0,30.55,11.84,11.84,0,0,0,11.84,42.39"/><path class="tc-cls-5" d="M74.07,40.12a9.57,9.57,0,1,0-9.57-9.57,9.57,9.57,0,0,0,9.57,9.57"/><path class="tc-cls-6" d="M35.25,37.42A18.71,18.71,0,1,0,16.54,18.71,18.71,18.71,0,0,0,35.25,37.42"/><g class="tc-cls-7"><g class="tc-cls-8"><g class="tc-cls-9"></g></g></g><path class="tc-cls-1" d="M16.54,18.71A18.71,18.71,0,1,0,35.25,0,18.71,18.71,0,0,0,16.54,18.71"/></g></g></g>
      </svg>
      <p> <?php the_field( 'banner_text' ); ?> </p>
      <svg id="two-circles" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 43.44 37.28"><defs><style>.cls-1{fill:#f09025;}.cls-2{fill:#cc1236;}</style></defs><g id="Ebene_2" data-name="Ebene 2"><g id="Ebene_2-2" data-name="Ebene 2"><path class="cls-1" d="M30.94,37.28a12.5,12.5,0,1,0-12.5-12.5,12.5,12.5,0,0,0,12.5,12.5"/><path class="cls-2" d="M9.57,19.15A9.57,9.57,0,1,0,0,9.57a9.57,9.57,0,0,0,9.57,9.57"/></g></g></svg>
    </div>
  </div>





  <section id="veranstaltungen">

    <h2>Kommende Veranstaltungen</h2>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 111"><defs><style>.veranstaltungen-cls-1{fill:none;stroke:#00a3e0;stroke-width:2px;}</style></defs><title>veranstaltungen</title><g id="Ebene_2" data-name="Ebene 2"><g id="Ebene_2-2" data-name="Ebene 2"><polyline class="veranstaltungen-cls-1" points="1 0 1 64.64 575 64 575 111"/></g></g></svg>

    <div id="wowshow">
      <div class="controls">
        <span class="wow-prev">
          <span class="wow-prev-icon"></span>
          <span class="sr-only">Previous</span>
        </span>
        <span class="wow-next" >
          <span class="wow-next-icon"></span>
          <span class="sr-only">Next</span>
        </span>
      </div>
      
      
      <ol> 
        <?php $query = new WP_Query( array( 'category_name' => 'veranstaltungen', 'nopaging' => 'true', 'order' => 'ASC' ) ); ?>

        <?php if ( $query->have_posts() ): ?>
           <?php $counter = 0; ?>
           <?php while ( $query->have_posts() ): $query->the_post(); ?>
                
                <li class="wow-slide <?php echo ($counter < 1) ? 'active' : 'not-active' ; ?>">
                  <a href=" <?php the_permalink(); ?> ">
                    <h3 class="text-uppercase"><?php the_field( 'veranstaltung_datum' ); ?><br><?php the_field( 'veranstaltung_ort' ); ?></h3>
                    <h4 class="name"><?php the_field( 'veranstaltung_name' ); ?></h4>
                    <h4 class="time"><?php the_field( 'veranstaltung_zeit' ); ?></h4>
                    <h4 class="address"><?php the_field( 'veranstaltung_adresse' ); ?></h4>
                  </a>
                </li>
                
        
                <?php $counter++; ?>

            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>

          <?php endif; ?>
          
      </ol>

    </div>
  </section>


<div class="container">
  <section id="beschreibung">

    <div class="row">
      <div class="col-md-8 offset-md-2">
        <h1> <?php the_field( 'beschreibungstitel' ); ?> </h1>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 614 48"><defs><style>.beschreibung-cls-1{fill:none;stroke:#ffe90a;stroke-width:2px;}</style></defs><g id="Ebene_2" data-name="Ebene 2"><g id="Ebene_1-2" data-name="Ebene 1"><polyline class="beschreibung-cls-1" points="1 48 1 1.64 613 1 613 48"/></g></g></svg>
        <p><?php the_field( 'beschreibung' ); ?></p>
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>/formate
" class="button">Unsere Formate</a>
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>/methoden
" class="button red">Unsere Methoden</a>
      </div>
    </div>

  </section>

  <section id="referenzen">

    <div class="row">
      <div class="col-md-8 offset-md-2">
        <h2>Referenzen</h2>
      </div>

      <div id="brands">
        <?php $referenz_bild_1 = get_field( 'referenz_bild_1' ); ?>
        <?php if ( $referenz_bild_1 ) { ?>
          <div class="brand-container">
            <img src="<?php echo $referenz_bild_1['url']; ?>" alt="<?php echo $referenz_bild_1['alt']; ?>" />
          </div>
        <?php } ?>

        <?php $referenz_bild_2 = get_field( 'referenz_bild_2' ); ?>
        <?php if ( $referenz_bild_2 ) { ?>
          <div class="brand-container">
            <img src="<?php echo $referenz_bild_2['url']; ?>" alt="<?php echo $referenz_bild_2['alt']; ?>" />
          </div>
        <?php } ?>

        <?php $referenz_bild_3 = get_field( 'referenz_bild_3' ); ?>
        <?php if ( $referenz_bild_3 ) { ?>
          <div class="brand-container">
      	    <img src="<?php echo $referenz_bild_3['url']; ?>" alt="<?php echo $referenz_bild_3['alt']; ?>" />
          </div>
        <?php } ?>

        <?php $referenz_bild_4 = get_field( 'referenz_bild_4' ); ?>
        <?php if ( $referenz_bild_4 ) { ?>
          <div class="brand-container">
            <img src="<?php echo $referenz_bild_4['url']; ?>" alt="<?php echo $referenz_bild_4['alt']; ?>" />
          </div>
        <?php } ?>

        <?php $referenz_bild_5 = get_field( 'referenz_bild_5' ); ?>
        <?php if ( $referenz_bild_5 ) { ?>
          <div class="brand-container">
        	  <img src="<?php echo $referenz_bild_5['url']; ?>" alt="<?php echo $referenz_bild_5['alt']; ?>" />
          </div>
        <?php } ?>

        <?php $referenz_bild_6 = get_field( 'referenz_bild_6' ); ?>
        <?php if ( $referenz_bild_6 ) { ?>
          <div class="brand-container">
            <img src="<?php echo $referenz_bild_6['url']; ?>" alt="<?php echo $referenz_bild_6['alt']; ?>" />
          </div>
        <?php } ?>

        <?php $referenz_bild_7 = get_field( 'referenz_bild_7' ); ?>
        <?php if ( $referenz_bild_7 ) { ?>
          <div class="brand-container">
            <img src="<?php echo $referenz_bild_7['url']; ?>" alt="<?php echo $referenz_bild_7['alt']; ?>" />
          </div>
        <?php } ?>

        <?php $referenz_bild_8 = get_field( 'referenz_bild_8' ); ?>
        <?php if ( $referenz_bild_8 ) { ?>
          <div class="brand-container">
            <img src="<?php echo $referenz_bild_8['url']; ?>" alt="<?php echo $referenz_bild_8['alt']; ?>" />
          </div>
        <?php } ?>

        <?php $referenz_bild_9 = get_field( 'referenz_bild_9' ); ?>
        <?php if ( $referenz_bild_9 ) { ?>
          <div class="brand-container">
            <img src="<?php echo $referenz_bild_9['url']; ?>" alt="<?php echo $referenz_bild_9['alt']; ?>" />
          </div>
        <?php } ?>

        <?php $referenz_bild_10 = get_field( 'referenz_bild_10' ); ?>
        <?php if ( $referenz_bild_10 ) { ?>
          <div class="brand-container">
            <img src="<?php echo $referenz_bild_10['url']; ?>" alt="<?php echo $referenz_bild_10['alt']; ?>" />
          </div>
        <?php } ?>
      </div>


      <div class="col-md-4 col-lg-2">
        <?php $testamonial_1_bild = get_field( 'testamonial_1_bild' ); ?>
        <?php if ( $testamonial_1_bild ) { ?>
        	<img class="testa-img" src="<?php echo $testamonial_1_bild['url']; ?>" alt="<?php echo $testamonial_1_bild['alt']; ?>" />
        <?php } ?>

        <?php the_field( 'testamonial_1_titel' ); ?>
      </div>

      <div class="testa-text col-md-8 col-lg-4">
        <svg class="quotation" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 21 16.51"><g id="Ebene_2" data-name="Ebene 2"><g id="Ebene_1-2" data-name="Ebene 1"><path d="M9.08,5.91C9.08,2.46,7.08,0,4.3,0A4.32,4.32,0,0,0,.06,4.44c0,2.16,1.51,3.94,3.33,3.94a2.65,2.65,0,0,0,.67-.06A6.94,6.94,0,0,1,0,13.8l1.69,2.71a17.31,17.31,0,0,0,5.08-4.25,10.89,10.89,0,0,0,2.3-6.35M21,5.91C21,2.46,19,0,16.22,0A4.32,4.32,0,0,0,12,4.44c0,2.16,1.51,3.94,3.33,3.94A2.65,2.65,0,0,0,16,8.32a6.94,6.94,0,0,1-4.05,5.48l1.69,2.71a17.31,17.31,0,0,0,5.08-4.25A10.89,10.89,0,0,0,21,5.91"/></g></g></svg>

        <p> <?php the_field( 'testamonial_1_text' ); ?> </p>

        <svg class="quotation right" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 15.64"><g id="Ebene_2" data-name="Ebene 2"><g id="Ebene_1-2" data-name="Ebene 1"><path d="M8.65,2.57,7,0A16.48,16.48,0,0,0,2.19,4,10.28,10.28,0,0,0,0,10c0,3.27,1.9,5.6,4.55,5.6a4.1,4.1,0,0,0,4-4.2A3.52,3.52,0,0,0,5.42,7.7a2.52,2.52,0,0,0-.63.06A6.57,6.57,0,0,1,8.65,2.57M20,2.57,18.39,0a16.46,16.46,0,0,0-4.84,4,10.27,10.27,0,0,0-2.19,6c0,3.27,1.9,5.6,4.55,5.6a4.1,4.1,0,0,0,4-4.2A3.52,3.52,0,0,0,16.77,7.7a2.53,2.53,0,0,0-.63.06A6.58,6.58,0,0,1,20,2.57"/></g></g></svg>

      </div>

      <div class="col-md-4 col-lg-2">
        <?php $testamonial_2_bild = get_field( 'testamonial_2_bild' ); ?>
        <?php if ( $testamonial_2_bild ) { ?>
    	     <img class="testa-img" src="<?php echo $testamonial_2_bild['url']; ?>" alt="<?php echo $testamonial_2_bild['alt']; ?>" />
        <?php } ?>

        <?php the_field( 'testamonial_2_titel' ); ?>
      </div>

      <div class="testa-text col-md-8 col-lg-4">
        <svg class="quotation" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 21 16.51"><g id="Ebene_2" data-name="Ebene 2"><g id="Ebene_1-2" data-name="Ebene 1"><path d="M9.08,5.91C9.08,2.46,7.08,0,4.3,0A4.32,4.32,0,0,0,.06,4.44c0,2.16,1.51,3.94,3.33,3.94a2.65,2.65,0,0,0,.67-.06A6.94,6.94,0,0,1,0,13.8l1.69,2.71a17.31,17.31,0,0,0,5.08-4.25,10.89,10.89,0,0,0,2.3-6.35M21,5.91C21,2.46,19,0,16.22,0A4.32,4.32,0,0,0,12,4.44c0,2.16,1.51,3.94,3.33,3.94A2.65,2.65,0,0,0,16,8.32a6.94,6.94,0,0,1-4.05,5.48l1.69,2.71a17.31,17.31,0,0,0,5.08-4.25A10.89,10.89,0,0,0,21,5.91"/></g></g></svg>

        <p> <?php the_field( 'testamonial_2_text' ); ?> </p>

        <svg class="quotation right" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 15.64"><g id="Ebene_2" data-name="Ebene 2"><g id="Ebene_1-2" data-name="Ebene 1"><path d="M8.65,2.57,7,0A16.48,16.48,0,0,0,2.19,4,10.28,10.28,0,0,0,0,10c0,3.27,1.9,5.6,4.55,5.6a4.1,4.1,0,0,0,4-4.2A3.52,3.52,0,0,0,5.42,7.7a2.52,2.52,0,0,0-.63.06A6.57,6.57,0,0,1,8.65,2.57M20,2.57,18.39,0a16.46,16.46,0,0,0-4.84,4,10.27,10.27,0,0,0-2.19,6c0,3.27,1.9,5.6,4.55,5.6a4.1,4.1,0,0,0,4-4.2A3.52,3.52,0,0,0,16.77,7.7a2.53,2.53,0,0,0-.63.06A6.58,6.58,0,0,1,20,2.57"/></g></g></svg>
      </div>
    </div>
  </section>

</div> <!--  end of container -->


<div id="dtp" class="container-fluid">

      <div class="first col-md-10 offset-md-1">
        <h2> <?php the_field( 'dtp_title' ); ?> </h2>
        <div class="col-md-8 offset-md-2">
          <p class="text-center"> <?php the_field( 'dtp_kurzbeschreibung' ); ?> </p>
        </div>
      </div>



      <div id="grafik">
        <span id="moving-line"></span>

        <div class="row">
          <div class="col-md-4 offset-md-4">
            <div id="verstaendnis" class="circle">Verständnis</div>
          </div>

          <div class="step step-1 col-md-4">

            <h3> <?php the_field( 'dtp_schritt_1_überschrift' ); ?> </h3>
            <p> <?php the_field( 'dtp_schritt_1_text' ); ?> </p>
          </div>
        </div>


        <?php $dtp_schritt_1_bild = get_field( 'dtp_schritt_1_bild' ); ?>
        <?php if ( $dtp_schritt_1_bild ) { ?>
        	<span id="stp-1-img" class="mood-image hidden-sm-down">
            <style>
              #stp-1-img {
                background-image: url('<?php echo $dtp_schritt_1_bild['url']; ?>');
                }
            </style>
          </span>
        <?php } ?>




        <div id="erkundung" class="square">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 356.65 423.86"><defs><style>.arrows-cls-1{fill:#00a2df;}</style></defs><g id="Ebene_2" data-name="Ebene 2"><g id="Ebene_2-2" data-name="Ebene 2"><polygon class="arrows-cls-1" points="95.91 93.59 61.25 126.94 61.8 93.05 95.91 93.59"/><polygon class="arrows-cls-1" points="177.3 213.62 173.18 209.61 288.66 92.27 292.78 96.27 177.3 213.62"/><polygon class="arrows-cls-1" points="172.36 214.86 172.36 10.74 178.13 10.74 178.13 208.37 347.06 187.5 347.77 193.18 172.36 214.86"/><polygon class="arrows-cls-1" points="301.02 118.88 267.45 84.46 301.56 84.99 301.02 118.88"/><polygon class="arrows-cls-1" points="27.71 173.01 19.89 220.3 0 192.77 27.71 173.01"/><polygon class="arrows-cls-1" points="38.73 309.28 72.3 343.7 38.19 343.16 38.73 309.28"/><polygon class="arrows-cls-1" points="200.96 24.34 152.72 23.58 177.22 0 200.96 24.34"/><polygon class="arrows-cls-1" points="269.79 345.07 304.44 311.73 303.9 345.61 269.79 345.07"/><polygon class="arrows-cls-1" points="153.68 399.52 201.92 400.28 177.42 423.86 153.68 399.52"/><polygon class="arrows-cls-1" points="336.13 209.88 329.39 162.43 356.65 182.81 336.13 209.88"/><rect class="arrows-cls-1" x="173.64" y="211.6" width="5.77" height="199.14" transform="translate(-3.99 2.3) rotate(-0.74)"/><rect class="arrows-cls-1" x="95.34" y="127.12" width="5.73" height="154.74" transform="translate(-114.46 283.46) rotate(-84.72)"/><polygon class="arrows-cls-1" points="44.28 337.88 40.33 333.71 173.27 209.53 177.22 213.7 44.28 337.88"/><polygon class="arrows-cls-1" points="288.61 336.32 72.39 105.29 76.61 101.39 292.83 332.41 288.61 336.32"/></g></g></svg>
          <div class="circle">
            Erkundung
          </div>
        </div>

        <?php $dtp_schritt_2_bild = get_field( 'dtp_schritt_2_bild' ); ?>
        <?php if ( $dtp_schritt_2_bild ) { ?>
        	<span id="stp-2-img" class="mood-image hidden-sm-down">
            <style>
              #stp-2-img {
                background-image: url('<?php echo $dtp_schritt_2_bild['url']; ?>');
                }
            </style>
          </span>
        <?php } ?>

        <div class="step step-2 col-md-4">
          <h3> <?php the_field( 'dtp_schritt_2_überschrift' ); ?> </h3>
          <p> <?php the_field( 'dtp_schritt_2_text' ); ?> </p>
        </div>

        <div class="row row-2">
          <div class="col-md-4 offset-md-4">
            <div id="synthese" class="circle">Synthese</div>
          </div>
          <div class="step step-3 col-md-4">
            <h3> <?php the_field( 'dtp_schritt_3_überschrift' ); ?> </h3>
            <p> <?php the_field( 'dtp_schritt_3_text' ); ?> </p>
          </div>
        </div>

        <?php $dtp_schritt_3_bild = get_field( 'dtp_schritt_3_bild' ); ?>
        <?php if ( $dtp_schritt_3_bild ) { ?>
        	<span id="stp-3-img" class="mood-image hidden-sm-down">
            <style>
              #stp-3-img {
                background-image: url('<?php echo $dtp_schritt_3_bild['url']; ?>');
                }
            </style>
          </span>
        <?php } ?>





        <div id="ideen" class="square">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 357.15 364.15"><defs><style>.cls-1{fill:#f39008;}</style></defs><g id="Ebene_2" data-name="Ebene 2"><g id="Ebene_2-2" data-name="Ebene 2"><path class="cls-1" d="M233.48,47.38A24.84,24.84,0,1,0,258,72.21a24.69,24.69,0,0,0-24.49-24.84m0,54.67A29.84,29.84,0,1,1,262.9,72.21,29.66,29.66,0,0,1,233.48,102"/><path class="cls-1" d="M122.29,65.5a16.71,16.71,0,1,0,16.48,16.71A16.62,16.62,0,0,0,122.29,65.5m0,38.42A21.71,21.71,0,1,1,143.7,82.21a21.58,21.58,0,0,1-21.41,21.71"/><path class="cls-1" d="M98.68,239.29a18.28,18.28,0,1,0,18,18.28,18.17,18.17,0,0,0-18-18.28m0,41.55a23.28,23.28,0,1,1,22.95-23.27,23.14,23.14,0,0,1-22.95,23.27"/><path class="cls-1" d="M186.41,306.67a26.24,26.24,0,1,0,25.87,26.24,26.09,26.09,0,0,0-25.87-26.24m0,57.48a31.24,31.24,0,1,1,30.8-31.24,31.06,31.06,0,0,1-30.8,31.24"/><path class="cls-1" d="M282.45,274.18a13.59,13.59,0,1,0,13.4,13.59,13.51,13.51,0,0,0-13.4-13.59m0,32.18a18.59,18.59,0,1,1,18.33-18.59,18.48,18.48,0,0,1-18.33,18.59"/><path class="cls-1" d="M310.95,128.29a16.25,16.25,0,1,0,16,16.24,16.15,16.15,0,0,0-16-16.24m0,37.49a21.25,21.25,0,1,1,20.94-21.24,21.12,21.12,0,0,1-20.94,21.24"/><path class="cls-1" d="M76.29,157.86a13.59,13.59,0,1,0,13.4,13.59,13.51,13.51,0,0,0-13.4-13.59m0,32.18a18.59,18.59,0,1,1,18.33-18.59A18.48,18.48,0,0,1,76.29,190"/><path class="cls-1" d="M183.33,5A10.83,10.83,0,1,0,194,15.83,10.76,10.76,0,0,0,183.33,5m0,26.66a15.73,15.73,0,0,1-15.6-15.83,15.61,15.61,0,1,1,31.21,0,15.74,15.74,0,0,1-15.61,15.83"/><path class="cls-1" d="M338.83,199.69a13.59,13.59,0,1,0,13.4,13.59,13.51,13.51,0,0,0-13.4-13.59m0,32.18a18.59,18.59,0,1,1,18.33-18.59,18.48,18.48,0,0,1-18.33,18.59"/><path class="cls-1" d="M15,192.49a11.13,11.13,0,0,0,0,22.25,11.13,11.13,0,0,0,0-22.25m0,26.34a15.22,15.22,0,0,1,0-30.43,15.22,15.22,0,0,1,0,30.43"/></g></g></svg>
          <div class="circle">
            Ideen
          </div>
        </div>

        <?php $dtp_schritt_4_bild = get_field( 'dtp_schritt_4_bild' ); ?>
        <?php if ( $dtp_schritt_4_bild ) { ?>
        	<span id="stp-4-img" class="mood-image hidden-sm-down">
            <style>
              #stp-4-img {
                background-image: url('<?php echo $dtp_schritt_4_bild['url']; ?>');
                }
            </style>
          </span>
        <?php } ?>

        <div class="step step-4 col-md-4">
          <h3> <?php the_field( 'dtp_schritt_4_überschrift' ); ?> </h3>
          <p> <?php the_field( 'dtp_schritt_4_text' ); ?> </p>
        </div>

        <div class="row">
          <div class="col-md-4 offset-md-4">
            <div id="prototyp" class="circle ">Prototyp</div>
          </div>
          <div class="step step-5 col-md-4">
            <h3> <?php the_field( 'dtp_schritt_5_überschrift' ); ?> </h3>
            <p> <?php the_field( 'dtp_schritt_5_text' ); ?> </p>
            <div id="red-circle"></div>
          </div>
        </div>

        <?php $dtp_schritt_5_bild = get_field( 'dtp_schritt_5_bild' ); ?>
        <?php if ( $dtp_schritt_5_bild ) { ?>
        	<span id="stp-5-img" class="mood-image hidden-sm-down">
            <style>
              #stp-5-img {
                background-image: url('<?php echo $dtp_schritt_5_bild['url']; ?>');
                }
            </style>
          </span>
        <?php } ?>



        <svg id="arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 44.05 177.56"><defs><style>.arrow-cls-1{fill:none;stroke:#000;stroke-width:14px;}</style></defs><g id="Ebene_2" data-name="Ebene 2"><g id="Ebene_2-2" data-name="Ebene 2"><line class="arrow-cls-1" x1="22.03" x2="22.03" y2="140.29"/><polygon points="0 155.53 22.03 177.56 44.05 155.53 29.04 155.53 29.04 138 15.02 138 15.02 155.53 0 155.53"/></g></g></svg>

        <div class="row">
          <div class="step step-6 col-md-4">
            <h3> <?php the_field( 'dtp_schritt_6_überschrift' ); ?> </h3>
            <p> <?php the_field( 'dtp_schritt_6_text' ); ?> </p>
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 131.05 406.94"><defs><style>.test-cls-1,.test-cls-10{fill:none;}.test-cls-2{isolation:isolate;}.test-cls-3{fill:#e21d57;}.test-cls-4{opacity:0.4;}.test-cls-5{clip-path:url(#clip-path);}.test-cls-6{fill:#772684;}.test-cls-7{mix-blend-mode:luminosity;}.test-cls-8{clip-path:url(#clip-path-2);}.test-cls-9{clip-path:url(#clip-path-3);}.test-cls-10{stroke:#772684;stroke-width:2px;}</style><clipPath id="clip-path"><rect class="test-cls-1" x="86.35" y="55.81" width="34.04" height="34.04"/></clipPath><clipPath id="clip-path-2"><rect class="test-cls-1" x="26.19" y="12.73" width="45.37" height="45.37"/></clipPath><clipPath id="clip-path-3"><rect class="test-cls-1" x="26.3" y="12.84" width="45.15" height="45.15"/></clipPath></defs><title>last-item</title><g class="test-cls-2"><g id="Ebene_2" data-name="Ebene 2"><g id="Ebene_2-2" data-name="Ebene 2"><path class="test-cls-3" d="M109.2,46.63A21.85,21.85,0,1,1,131,24.79,21.85,21.85,0,0,1,109.2,46.63"/><g class="test-cls-4"><g class="test-cls-5"><path class="cls-3" d="M103.38,88.84a16,16,0,1,1,16-16,16,16,0,0,1-16,16"/></g></g><path class="test-cls-6" d="M49.49,72.82A36.41,36.41,0,1,1,85.9,36.41,36.41,36.41,0,0,1,49.49,72.82"/><g class="test-cls-7"><g class="test-cls-8"><g class="test-cls-9"></g></g></g><path class="test-cls-1" d="M13.08,36.41A36.41,36.41,0,1,0,49.49,0,36.41,36.41,0,0,0,13.08,36.41"/><line class="test-cls-10" x1="23.11" y1="406.94" x2="23.11" y2="89.58"/><path class="test-cls-6" d="M12,101.24a12,12,0,1,1,12-12,12,12,0,0,1-12,12"/></g></g></g>
            </svg>

          </div>

          <div class="col-md-4">
            <div id="test" class="circle">Test</div>
          </div>


        </div>

      </div>

</div> <!--  end of container fluid -->

<div class="container">
    <div id="endtext" class="col-md-8 offset-md-2">
      <h3> <?php the_field( 'dtp_endtext_überschrift' ); ?> </h3>
      <p> <?php the_field( 'dtp_endtext' ); ?> </p>
    </div>
</div>

<div id="contact-icons" class="container-fluid">
  <h2>Kontaktieren sie uns</h2>

  <?php get_template_part( 'template-parts/content', 'contact' ); ?>

  <?php get_template_part( 'template-parts/content', 'legal' ); ?>
</div>

<?php get_footer(); ?>
