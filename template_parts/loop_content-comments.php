<?php 
// Start Comments 
if ( (comments_open() || get_comments_number()) ) :  
?>

<div class="loop_content-comments">

  <?php
  // Begin Comment List
  if(have_comments()):  
  ?>

  <div class="comments-list">
    
    <?php
    wp_list_comments( array(
      'style'       => 'div',
      'short_ping'  => true,
      'avatar_size' => 74,
    ) );
    ?>
      
  </div>

  <?php
  // End Comments List
  endif;
    
  // Start Comment Navigation
  if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) :
  ?>
  
  <div class="comments-navigation" role="navigation">
    <div class="navigation-previous"><?php previous_comments_link(); ?></div>
    <div class="navigation-next"><?php next_comments_link(); ?></div>
  </div>
  
  <?php 
  // End Comment Navigation
  endif; 
  
  // Comments Close
  if ( ! comments_open() && get_comments_number() )
   echo '<div class="comments-fallback">Comments are closed.</div>';
   
  // Comment Form
  comment_form(); 
  ?>

</div>

<?php
// End Comments  
endif;
?>