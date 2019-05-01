<?php
// =====================================================================
// BLOCK SETUP
// =====================================================================
// All the "Gutenberg" block editor related functions.
// =====================================================================
if ( ! function_exists( 'gutenbergtheme_setup' ) ) {

  // Adding support for core block visual styles.
  // add_theme_support( 'wp-block-styles' );

  // Add support for full and wide align images.
  add_theme_support( 'align-wide' );

  // Add responsive embeds
  add_theme_support( 'responsive-embeds' );

  // Disable custom font sizes
  add_theme_support('disable-custom-font-sizes');

  // Disable custom colors
  add_theme_support( 'disable-custom-colors' );

  // Add Editor Styles
  add_theme_support('editor-styles');
  add_editor_style( 'style.css' );

  // Color Pallet
  add_theme_support( 'editor-color-palette', array(
    array(
      'name' => 'blue',
      'slug' => 'blue',
      'color' => '#007fac',
    ),
    array(
      'name' => 'dark',
      'slug' => 'dark',
      'color' => '#282828',
    ),
    array(
      'name' => 'darker',
      'slug' => 'darker',
      'color' => '#191e23',
    ),
    array(
      'name' => 'black',
      'slug' => 'black',
      'color' => '#000',
    ),
    array(
      'name' => 'light',
      'slug' => 'light',
      'color' => '#40464d',
    ),
    array(
      'name' => 'lighter',
      'slug' => 'lighter',
      'color' => '#8f98a1',
    ),
    array(
      'name' => 'lightest',
      'slug' => 'lightest',
      'color' => '#f3f3f4',
    ),
    array(
      'name' => 'white',
      'slug' => 'white',
      'color' => '#fff',
    ),
    array(
      'name' => 'translucent',
      'slug' => 'translucent',
      'color' => 'rgba(0,0,0,0.6)',
    ),
  ) );

}
?>