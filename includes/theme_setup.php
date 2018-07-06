<?php
if ( ! function_exists( 'theme_setup' ) ) :

  // Setup Theme Defaults
  function theme_setup() {
  	 
  	// Add default posts and comments RSS feed links to head.
  	add_theme_support( 'automatic-feed-links' );
  	
  	// Add image gallery support.
  
  	// Let WordPress manage the document title.
  	add_theme_support( 'title-tag' );
      
    // Support custom post thumbnails
    add_theme_support('post-thumbnails');
  
  }

endif;
add_action( 'after_setup_theme', 'theme_setup' );  

// Set the content width in pixels, based on the theme's design and stylesheet.
function theme_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'content_width', 1200 );
}
add_action( 'after_setup_theme', 'theme_content_width', 0 );

// Set excerpt display.
function theme_excerpt_more( $more ) {
  return '...';
}
add_filter( 'excerpt_more', 'theme_excerpt_more' );

// Set excerpt length.
function theme_custom_excerpt_length( $length ) {
  return 18;
}
add_filter( 'excerpt_length', 'theme_custom_excerpt_length' );

// Add responsive container to embeds
function alx_embed_html( $html ) {
  return '<div class="video-container">' . $html . '</div>';
}
add_filter( 'embed_oembed_html', 'alx_embed_html', 10, 3 );
?>