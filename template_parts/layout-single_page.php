<?php
// Begin Single Page Layout
if(is_page()):
?>

<div class="layout-single_page">
  <div class="single_page-loop_content">

	<?php
	// Start Loop
  if ( have_posts() ) : while ( have_posts() ) : the_post();  

    // Post Content	
  	get_template_part('template_parts/loop_content', 'post_content');
  	
  // End Loop
  endwhile;
  else:
  
    // Error Message		
  	get_template_part('template_parts/loop_content', 'error_message');

  endif;
  ?>
  
  </div>
</div>

<?php
// End Single Page Layout
endif;
?>