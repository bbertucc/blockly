<?php
// =====================================================================
// Home
// =====================================================================
// The layout for the blog homepage.
// =====================================================================

// Begin Home Layout
if( is_home() ):
?>

<div class="layout-home">

  <?php
  // Begin Sidebar (if theme has widgets)
  if ( is_active_sidebar( 'primary' ) ):
  ?>
  
  <div class="archive-sidebar">

    <?php
    // Primary Sidebar (sidebar.php)
    get_sidebar('primary');
    ?>
    
  </div>
  
  <?php
  // End Sidebar
  endif;


  // Start Archive Loop
  if(have_posts()):
  ?>

  <div class="home-content">  
    <div class="content-loop">
      
      <?php 
      // Single Post List
      while(have_posts()): the_post();
      ?>

      <div class="loop-listed_post">

        <?php  
        // Begin Responsive Image
        if(has_post_thumbnail()):
        ?>

        <a class="listed_post-image" href="<?php the_permalink(); ?>">    
        
          <?php        
          // Set Up Image Variables
          $img_src = wp_get_attachment_image_url( get_post_thumbnail_id(), 'medium' );
          $img_srcset =  wp_get_attachment_image_srcset( get_post_thumbnail_id(), 'medium' );;
          $img_sizes = '672px';
          
          // The Image
          echo '<img class="image-the_image" src="'.esc_url($img_src).'" srcset="'.esc_attr($img_srcset).'" sizes="'.$img_sizes.'">';
          ?>
        
        </a>
        
        <?php
        // End Responsive Image
        endif;
        ?>
        
        <div class="listed_post-post">    
          <div class="post-meta"><?php the_category(', ');?></div>
          <a href="<?php the_permalink(); ?>" class="post-title"><?php the_title();?></a>
            <div class="post-excerpt"><?php echo get_the_excerpt();?></div>
          </div>
      </div>

      <?php
      // End Single Post List
      endwhile;

      // Standard Pagination
      wp_link_pages();

      // Start Pagination
      $prev_link = get_previous_posts_link(__('&laquo; Older Entries', 'tu-boilerplate-gutenberg'));
      $next_link = get_next_posts_link(__('Newer Entries &raquo;', 'tu-boilerplate-gutenberg'));
      if ($prev_link || $next_link):
      ?>

      <div class="loop-page">
        
        <?php
        // Page Navigation 
        echo paginate_links( array(
          'base' => str_replace( 99999900000, '%#%', esc_url( get_pagenum_link( 99999900000 ) ) ),
          'format' => '?paged=%#%',
          'current' => max( 1, get_query_var('paged') ),
          'total' => $wp_query->max_num_pages
        ) );
        ?>
        
      </div>

      <?php
      // End Pagination
      endif;
      ?>
    
    </div>

  <?php
  // If no posts exist..
  else:
  ?>

    <div class="content-error">
      <div class="error-title">Sorry!</div>
      <div class="error-body">No content exists.</div>
    </div>
    
  <?php
  // End Archive Loop
  endif;
  ?>

  </div>
</div>

<?php
// End Archive Layout
endif;
?>