<?php get_header(); ?>

<?php if ( get_field( 'banner') ) { ?>
  <style>
    .jumbotron {
      background-image: url( <?php the_field( 'banner' ); ?> );
    }
  </style>
<?php } ?>

<div class="jumbotron jumbotron-fluid"></div>

<section class="container">

  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <h1 class="text-center"><?php the_title(); ?></h1>

    <?php the_content(); ?>

  <?php endwhile; else : ?>
    <p><?php _e( 'Leider gibt es keine Posts die deiner Suchanfrage entsprechen, sorry.' ); ?></p>
  <?php endif; ?>
  
  <?php get_template_part( 'template-parts/content', 'legal' ); ?>
  
</section>

<?php get_footer(); ?>
