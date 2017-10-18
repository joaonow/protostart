<?php
/*
  Template Name: Methoden
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

<div class="jumbotron jumbotron-fluid"></div>

<section id="methoden">
    
    <h1>Unsere Methoden</h1>
    
    
    <div class="container">
      
      <span id="border-line"></span>
      
        <?php $query = new WP_Query( array( 'category_name' => 'methoden', 'nopaging' => 'true', 'order' => 'ASC' ) ); ?>

        <?php if ( $query->have_posts() ): ?>
           <?php while ( $query->have_posts() ): $query->the_post(); ?>
      
                  <div class="methode">
                    
                    <?php if ( get_field( 'verlinkung_zum_blogpost' ) == 1 ): ?> 
                    
                      <a href="<?php the_permalink(); ?>">
                      <div class="wow-box"> 
                        <div class="aspect-center">
                          <h2><?php the_field( 'methode_titel' ); ?></h2>
                        </div>
                      </div>
                      <p><?php the_field( 'beschreibung' ); ?></p>	
                      </a>
                    
                    <?php else : ?> 
                    
                      <div class="wow-box"> 
                        <div class="aspect-center">
                          <h2><?php the_field( 'methode_titel' ); ?></h2>
                        </div>
                      </div>
                      <p><?php the_field( 'beschreibung' ); ?></p>	
                      
                    <?php endif; ?>
                    
                  </div>

          <?php endwhile; ?>
          <?php wp_reset_postdata(); ?>

          <?php endif; ?>
      
    </div>
</section>

<section id="cta" class="container">
  <p><?php the_field( 'kontakt_text' ); ?></p>
  <a href="<?php echo esc_url( home_url( '/' ) ); ?>/kontakt">Kontakt</a>
</section>

<?php get_template_part( 'template-parts/content', 'legal' ); ?>

<?php get_footer(); ?>