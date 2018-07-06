<div class="feature-recent_posts">
  <div class="recent_posts-title">Recent Posts</div>
  
  <?php
  // Set offset loaded on first posts page to prevent duplicates
  if(is_home() && get_query_var('paged') == 0){
    $offset = get_option('posts_per_page');
  }else{
    $offset = null;
  }
  
  // Set Query
  $recent_posts = get_posts('posts_per_page=5&offset='.$offset);
  
  // Start Loop
  foreach ( $recent_posts as $post ) : setup_postdata( $post ); 
  ?>
  
  <a class="recent_posts-post" href="<?php the_permalink(); ?>">
    
    <?php 
      
    // Responsive Image
    if(has_post_thumbnail()){

      // Set Up Image Variables
      $img_src = wp_get_attachment_image_url( get_post_thumbnail_id(), 'thumbnail' );
      $img_srcset =  wp_get_attachment_image_srcset( get_post_thumbnail_id(), 'thumbnail' );;
      $img_sizes = '50px';
      
      // The Image
      echo '<div class="post-image"><img class="image-the_image" src="'.esc_url($img_src).'" srcset="'.esc_attr($img_srcset).'" sizes="'.$img_sizes.'"></div>';
      
    }
    
    // The Title
    the_title('<div class="post-title">', '</div>'); 
      
    ?>
  
  </a>
  	
  <?php 
  // End loop
  endforeach; 
  wp_reset_postdata();
  ?>
    
</div>