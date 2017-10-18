<!doctype html>
<html <?php language_attributes(); ?> class="no-js no-svg">
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta name="description" content="<?php bloginfo('description'); ?>" />
      <link rel="icon" type="image/png" href="<?php echo esc_url( get_template_directory_uri() ); ?>/images/favicon-32x32.png" sizes="32x32">
      <link rel="icon" type="image/png" href="<?php echo esc_url( get_template_directory_uri() ); ?>/images/favicon-16x16.png" sizes="16x16">
      <title> <?php wp_title( '|', true, 'right'); bloginfo( 'name' ); ?> </title>
      <?php wp_head(); ?>

    </head>
    <body <?php body_class(); ?> >

      <nav>
        
          <div id="menu-bar">
            <div class="nav-container">
              <a href=" <?php echo esc_url( home_url( '/' ) ); ?> ">
                <img id="logo" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/protostart-logo.png" alt="Das Protostart Logo">
              </a>
              <svg class="trigger" xmlns="http://www.w3.org/2000/svg" width="25.72" height="21.406" viewBox="0 0 25.72 21.406">
                <defs>
                  <style>
                    .menu-icon-cls-1 {
                      fill: #000;
                      fill-rule: evenodd;
                    }
                  </style>
                </defs>
                <path class="menu-icon-cls-1" d="M2754.31,402.329a1.081,1.081,0,0,0-1.07-1.071h-23.57a1.075,1.075,0,0,0-1.07,1.071v2.143a1.075,1.075,0,0,0,1.07,1.071h23.57a1.081,1.081,0,0,0,1.07-1.071v-2.143Zm0-8.57a1.081,1.081,0,0,0-1.07-1.071h-23.57a1.075,1.075,0,0,0-1.07,1.071V395.9a1.075,1.075,0,0,0,1.07,1.071h23.57a1.082,1.082,0,0,0,1.07-1.071v-2.143Zm0-8.57a1.082,1.082,0,0,0-1.07-1.072h-23.57a1.076,1.076,0,0,0-1.07,1.072v2.142a1.076,1.076,0,0,0,1.07,1.072h23.57a1.082,1.082,0,0,0,1.07-1.072v-2.142Z" transform="translate(-2728.59 -384.125)"/>
              </svg>
            </div>
          </div>

          <div id="collapse" class="open">
            <?php
            $defaults = array(
                'container' => false,
                'theme_location' => 'primary-menu',
                'menu_class' => '',
                'depth' => '2',
                'link_before' => '<span>',
                'link_after' => '</span>'

            );
            wp_nav_menu( $defaults );
            ?>
          </div>
      </nav>
