<?php
/*
Template Name: Blogpost
Template Post Type: post
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

<div id="two-column-layout" class="container">
  
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  <div id="main-area">
    
    <h1><?php the_title(); ?></h1>

    <?php the_content(); ?>

    <?php get_template_part( 'template-parts/content', 'contact-button' ); ?>
    
  </div>
  
  <aside id="sidebar" class="sidebar widget-area" role="complementary">
      
    <img class="logo" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/protostart-logo.png" alt="Das Protostart Logo">

    <?php get_template_part( 'template-parts/content', 'sidebar' ); ?>

    <?php get_sidebar(); ?>
    
  </aside><!-- .sidebar .widget-area -->

<?php endwhile; else : ?>
  <p><?php _e( 'Leider gibt es keine Posts die deiner Suchanfrage entsprechen, sorry.' ); ?></p>
<?php endif; ?>
  
</div>

<?php get_template_part( 'template-parts/content', 'legal' ); ?>

<?php get_footer(); ?>