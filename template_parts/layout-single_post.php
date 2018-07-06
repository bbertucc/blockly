<?php
// Begin Single Post Layout
if(is_single()):
?>

<div class="layout-single_post">
  <div class="single_post-loop_content">

	<?php
	// Start Loop
  if ( have_posts() ) : while ( have_posts() ) : the_post();  
    
    // Post Content		
  	get_template_part('template_parts/loop_content', 'post_content');
  	
    // Comments		
  	get_template_part('template_parts/loop_content', 'comments');
  	
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
// End Single Post Layout
endif;
?>