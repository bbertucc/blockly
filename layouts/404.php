<?php
// =====================================================================
// 404 Layout
// =====================================================================
// This is what happens when you discover a page that doesn't exist.
// =====================================================================

// Begin 404 Layout
if( is_404() ):
?>

<div class="layout-404">

  <?php
  // Begin Sidebar (if theme has widgets)
  if ( is_active_sidebar( 'primary' ) ):
  ?>
  
  <div class="404-sidebar">

    <?php
    // Primary Sidebar (sidebar.php)
    get_sidebar('primary');
    ?>
    
  </div>

  <?php
  // End Sidebar
  endif;
  ?>

  <div class="404-error_message">
    <div class="error_message-title">Sorry!</div>
    <div class="error_message-body">No content exists.</div>
  </div>
</div>

<?php
// End 404 Layout
endif;
?>