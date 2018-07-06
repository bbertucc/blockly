<?php
// ====================================================
// All the theme functions are kept in the "includes/"
// ====================================================

// Default Width, Title Tag, and Other Setup Functions
require_once('includes/theme_setup.php' );

// Enqueued Scripts and Styles
require_once('includes/enqueue.php' );

// Update Customizer
require_once('includes/customizer.php' );

// Gutenberg Setup
require_once('includes/gutenberg_setup.php' );

// Required Plugins
require_once('includes/require_plugins.php' );

// Admin Notices
require_once('includes/admin_notices.php' );

// Custom Menus
require_once('includes/custom_menus.php' );

// Custom Post Types
require_once('includes/custom_post_types.php' );
?>