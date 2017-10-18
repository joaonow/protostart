<?php

// ########### EXCERPT ###########

function wow_theme_excerpt_length( $length ) {
    return 100;
}
add_filter( 'excerpt_length', 'wow_theme_excerpt_length', 999 );


// ########### MENUS ###########

add_theme_support( 'menus' );

function register_theme_menus() {

    register_nav_menus(
        array(
            'primary-menu' => _( 'Primary Menu' )
        )
      );
}

add_action( 'init', 'register_theme_menus' );

// ########### WIDGETS ###########

/**
 * Registers a widget area.
 *
 * @link https://developer.wordpress.org/reference/functions/register_sidebar/
 *
 * @since Twenty Sixteen 1.0
 */
function twentysixteen_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'twentysixteen' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Add widgets here to appear in your sidebar.', 'twentysixteen' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
  
}
add_action( 'widgets_init', 'twentysixteen_widgets_init' );

// ########### STYLESHEETS ###########

function wow_theme_styles() {

    wp_enqueue_style( 'main_css' , get_template_directory_uri() . '/style.css' );
}

add_action( 'wp_enqueue_scripts', 'wow_theme_styles' );

// ########### JAVASCRIPT ###########

function wow_theme_js() {

    wp_enqueue_script( 'main_js', get_template_directory_uri() . '/js/main.min.js', array('jquery'), '' , true );
}

add_action( 'wp_enqueue_scripts', 'wow_theme_js' );

//define( 'ACF_LITE', true );
//include_once('advanced-custom-fields/acf.php');

?>
