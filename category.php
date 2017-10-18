<?php get_header(); ?>

<?php if ( get_field( 'banner') ) { ?>
      <style>
        .jumbotron {
          background-image: url( <?php the_field( 'banner' ); ?> );
        }
      </style>
    <?php } ?>

<div class="jumbotron jumbotron-fluid"></div>

<section id="category">
  
  
    
    <div class="container">
      
      <h1 class="text-center"><?php single_cat_title( '', true ); ?></h1>

      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <h2><?php the_title();?></h2>
        <?php the_excerpt(); ?>
        <a href="<?php the_permalink(); ?>" class="button">Zum Artikel</a>  

      <?php endwhile; ?>
      
      <div id="pagination">
       <?php previous_posts_link('Vorherige Seite'); ?>
       <?php next_posts_link('Nächste Seite'); ?>
      </div>
      

      <?php else : ?>
        <p><?php _e( 'Leider gibt es keine Posts die deiner Suchanfrage entsprechen, sorry.' ); ?></p>
      <?php endif; ?>

      
        
    </div>
</section>

<?php get_template_part( 'template-parts/content', 'legal' ); ?>

<?php get_footer(); ?>