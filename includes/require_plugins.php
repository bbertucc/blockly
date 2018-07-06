<?php
// Require Theme Dependent Plugins: Gutenberg
function require_plugins_error() {
  if( !function_exists( 'the_gutenberg_project' ) ) {
  	$class = 'notice notice-error';
  	$message = __( '<strong>Vital plugins are missing!</strong> Please contact tech support immediately to resolve the issue' );
  	printf( '<div class="%1$s"><p>%2$s</p></div>', $class, $message ); 
  }
}
add_action( 'admin_notices', 'require_plugins_error' );
?>