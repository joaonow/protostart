<?php
/*
  Template Name: Formate
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

<section id="formate">
    
    <h1>Unsere Formate</h1>
    
    <div class="container">
      
      <span id="border-line"></span>
      
      <?php $query = new WP_Query( array( 'category_name' => 'formate', 'nopaging' => 'true', 'order' => 'ASC' ) ); ?>

        <?php if ( $query->have_posts() ): ?>
           <?php while ( $query->have_posts() ): $query->the_post(); ?>
                    
                    <?php if ( get_field( 'format_verlinkung' ) == 1 ): ?> 
                    
                      <div class="format">
                        <a href="<?php the_permalink(); ?>">
                          <h2><?php the_field( 'format_titel' ); ?></h2>
                          <p class="subheadline"><?php the_field( 'format_subheadline' ); ?></p>
                          <p><?php the_field( 'format_beschreibung' ); ?></p>
                        </a>
                      </div>
  
                    
                    <?php else : ?> 
                    
                      <div class="format">
                          <h2><?php the_field( 'format_titel' ); ?></h2>
                          <p class="subheadline"><?php the_field( 'format_subheadline' ); ?></p>
                          <p><?php the_field( 'format_beschreibung' ); ?></p>
                      </div>	
                      
                    <?php endif; ?>

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