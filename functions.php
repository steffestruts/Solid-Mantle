<?php

if ( ! isset( $content_width ) ) {
	$content_width = 800;
} 

// Register Theme Features
function solidmantle_features()  {
  
  // Switching Some Elements To HTML5
  add_theme_support( 'html5', array(
    'gallery',
    'caption'
  ));

  // Lets Wordpress Handle The Title Tag
  add_theme_support( 'title-tag' );

  // JPEG Compression Quality
  add_filter( 'jpeg_quality', create_function( '', 'return 90;' ) );

   // Enables Post Thumbnails
  add_theme_support( 'post-thumbnails' );
  
  // Register Main Menu
  register_nav_menus( array(
    'primary' => __( 'Huvudmeny', 'solidmantle' ),
  ) );
  
  // Removes Paragraph Around Images
  function filter_ptags_on_images($content){
    return preg_replace('/<p>\s*(<a .*>)?\s*(<img .* \/>)\s*(<\/a>)?\s*<\/p>/iU', '\1\2\3', $content);
  }
  add_filter('the_content', 'filter_ptags_on_images');

}
add_action( 'after_setup_theme', 'solidmantle_features' );

// Register And  Solid Mantle Scripts And Styles
add_action('init', 'solidmantle_register_files');
function solidmantle_register_files() {
  wp_register_style('main', get_template_directory_uri() . '/css/main.css', '', '2016.07');
  wp_register_style('main-font', 'https://fonts.googleapis.com/css?family=PT+Sans:400,400italic,700,700italic');
  wp_register_style('alt-font', 'https://fonts.googleapis.com/css?family=Montserrat:400,700');
  wp_register_script('menu-trigger', get_stylesheet_directory_uri() . '/js/menu-trigger.min.js', array( 'jquery' ), '2016.07', true);
  wp_register_style('magnific', get_template_directory_uri() . '/css/magnific-popup.min.css', '', '1.1.0');
  wp_register_script('magnific-popup', get_template_directory_uri() . '/js/magnific-popup.min.js', array( 'jquery' ), '1.1.0', true);
  wp_register_script('magnific-init', get_template_directory_uri() . '/js/magnific-init.min.js', array( 'magnific-popup' ), '1.1.0', true);
}
add_action( 'wp_enqueue_scripts', 'solidmantle_enqueue_files' );

// Enqueue Scripts and Styles
function solidmantle_enqueue_files() {
  wp_enqueue_style('main-font');
  wp_enqueue_style('alt-font');
  wp_enqueue_style('main');
  wp_enqueue_script('menu-trigger');
  if ( is_singular('portfolio') ) {
    wp_enqueue_style('magnific');
    wp_enqueue_script('magnific-init');
  }
}

// Embed Responsive
function embed_responsive($html) {
  return '<div class="embed-container">' . $html . '</div>';
}
add_filter( 'embed_oembed_html', 'embed_responsive', 10, 3 );

?>