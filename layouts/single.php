<?php
// =====================================================================
// SINGLE CONTENT LAYOUT
// =====================================================================
// This layout displays single content items, like posts or pages.
// =====================================================================

// Begin Single Content Layout
if( is_single() || is_singular() ): 
?>

<div class="layout-single">

  <?php 
  // Begin Loop
  if(have_posts()): while(have_posts()): the_post();
  ?>

  <div <?php post_class( 'single-loop' ); ?> id="post-<?php the_ID(); ?>">

    <?php
    // Optional Title
    if(!get_field('hide_title'))
      the_title('<div class="loop-the_title">', '</div>', true);
    ?>

    <div class="loop-the_content">

      <?php
      // The Content
      the_content();
      ?>
      
    </div>  
  </div>

  <?php
  // End Single Content Layout
  endwhile;

  // Error Fallback
  else:
  ?>

  <div class="single-error">
    <div class="error-title">Sorry!</div>
    <div class="error-body">No content exists.</div>
  </div>
  
  <?php
  // End Loop
  endif;
  ?>
</div>

<?php
// End Single Content Layout
endif;
?>