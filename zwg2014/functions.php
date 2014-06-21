<?php
/**
 * Roots includes
 */
require_once locate_template('/lib/utils.php');           // Utility functions
require_once locate_template('/lib/init.php');            // Initial theme setup and constants
require_once locate_template('/lib/wrapper.php');         // Theme wrapper class
require_once locate_template('/lib/sidebar.php');         // Sidebar class
require_once locate_template('/lib/config.php');          // Configuration
require_once locate_template('/lib/activation.php');      // Theme activation
require_once locate_template('/lib/titles.php');          // Page titles
require_once locate_template('/lib/cleanup.php');         // Cleanup
require_once locate_template('/lib/nav.php');             // Custom nav modifications
require_once locate_template('/lib/gallery.php');         // Custom [gallery] modifications
require_once locate_template('/lib/comments.php');        // Custom comments modifications
require_once locate_template('/lib/relative-urls.php');   // Root relative URLs
require_once locate_template('/lib/widgets.php');         // Sidebars and widgets
require_once locate_template('/lib/scripts.php');         // Scripts and stylesheets
require_once locate_template('/lib/custom.php');          // Custom functions

function roots_page_menu_args( $args ) {
    $args['show_home'] = false;
    return $args;
}
add_filter( 'wp_page_menu_args', 'roots_page_menu_args' );

/***********************************************
add_action
***********************************************/
function digwp_insert_custom_css() {
  if (is_page() || is_single()) {
    if (have_posts()) : while (have_posts()) : the_post();
      $filename = get_post_meta(get_the_ID(), '_custom_css', true);
      if ($filename) {
        echo "<link rel='stylesheet' type='text/css' href='" . get_bloginfo('template_url') . "/css/" . $filename . "' />";
      }
    endwhile; endif;
    rewind_posts();
  }
}

function theme_name_assets() {
  wp_register_style( 'custom-style', get_template_directory_uri() . '/assets/fonts/octicons/octicons.css', array(), '20140601', 'all' );
  wp_enqueue_style( 'custom-style' );

  //wp_enqueue_style( 'style-name', get_stylesheet_uri() );
  //wp_enqueue_script( 'script-name', get_template_directory_uri() . '/js/example.js', array(), '1.0.0', true );
}

function my_theme_setup(){
  // $locale = get_locale();
  // $locale = apply_filters( 'theme_locale', $locale, 'roots' );
  // echo $locale;
  load_theme_textdomain('roots', get_template_directory() . '/lang');
  //var_dump(load_theme_textdomain('croots', get_template_directory() . '/lang'));
}

add_action( 'wp_enqueue_scripts', 'theme_name_assets' );
add_action('wp_head','digwp_insert_custom_css');
add_action('after_setup_theme', 'my_theme_setup');
