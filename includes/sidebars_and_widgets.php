<?php
// =====================================================================
// SIDEBARS AND WIDGETS
// =====================================================================
// All sidebar and widget related functions.
// =====================================================================

// Intialize Sidebars
add_action( 'widgets_init', 'theme_widgets_init' );
function theme_widgets_init() {
  register_sidebar( array(
    'name' => __( 'Primary Sidebar', 'blockly' ),
    'id' => 'primary',
    'description' => __( 'This sidebar is on the entire site, except on pages and posts that turned off the sidebar.', 'blockly' ),
    'before_widget' => '<div id="%1$s" class="sidebar-widget %2$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<div class="widget-title">',
    'after_title'   => '</div>',
  ) );
}
?>