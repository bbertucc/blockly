<?php
// Gutenbergtheme functions and definitions
if ( ! function_exists( 'gutenbergtheme_setup' ) ) {

  // Adding support for core block visual styles.
  add_theme_support( 'wp-block-styles' );

  // Add support for full and wide align images.
  add_theme_support( 'align-wide' );

}
?>