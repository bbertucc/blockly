<?php
// Begin 404 Layout
if( is_404() ):
?>

<div class="layout-error_404">
  <div class="error_404-loop_content">

    <?php 
    // Error Message
    get_template_part('template_parts/loop_content', 'error_message');
    ?>
      
  </div>
</div>

<?php
// End 404 Layout
endif;
?>