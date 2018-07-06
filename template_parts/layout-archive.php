<?php
// Archive Layout
if( is_archive() || is_home()  || is_search() ):
?>

<div class="layout-archive">
  
  <?php
  // Declare Variables
  $title = null;
  $body = null;
  $background_image = null;
  $inverted = null;    
    
  // Set Archive Content
  if(is_home()){
    
    // Standard Post List Archive
    $title = get_theme_mod('theme_post_archive_title');
    $body = get_theme_mod('theme_post_archive_body');
    $background_image = get_theme_mod( 'theme_post_archive_background' );
    $inverted = get_theme_mod( 'theme_post_archive_inverted' );    
    
  }elseif(is_archive()){
    
    // Generic Archive Content
    $title = get_the_archive_title();
    $body = get_the_archive_description();
       
  }elseif(is_search()){
    
    // Search Results
    $title = '"'.get_search_query().'"';
    $body = 'Search Results';

  }
  
  // Sart Callout
  if( !empty($title) || !empty($body) ):
  ?>
  
  <div class="archive-callout">
    
    <?php
    // Callout Background 
    if($background_image)      
     echo '<div class="callout-background_image" style="background-image:url('.wp_get_attachment_image_url( $background_image, 'large' ).')"></div>';
    
    // Set Optional Inverted Text Class
    if($inverted == true){
      $content_class = '_inverted';
    }else{
      $content_class = null;
    }
    ?>
    
    <div class="callout-text<?php echo $content_class; ?>">
      
      <?php
      // Segment Title
      if($title)
        echo '<div class="text'.$content_class.'-title">'.$title.'</div>';
        
      // Segment Body
      if($body)
        echo '<div class="text'.$content_class.'-body">'.$body.'</div>';
      ?>
      
    </div>    
    
    <?php
    // Callout Background 
    if($background_image)      
     echo '<div class="callout-background_image" style="background-image:url('.wp_get_attachment_image_url( $background_image, 'large' ).')"></div>';
    ?>
    
  </div>
  
  <?php
  // End Callout
  endif;  
  
  // Start Archive Loop
  if(have_posts()):
  ?>
  
  <div class="archive-loop_content">
    
    <?php 
    // Single Post List
    while(have_posts()): the_post();
      get_template_part('template_parts/loop_content', 'listed_post');
    endwhile;
      get_template_part('template_parts/loop_content', 'pagination');
    ?>
  
  </div>

  <?php
  // If no posts exist..
  else:
  ?>
    
  <div class="archive-loop_content">
    
    <?php
    // Error
    get_template_part('template_parts/loop_content', 'error_message');
    ?>
    
  </div>
    
  <?php
  // End Archive Loop
  endif;
  ?>  

</div>

<?php
// End Archive Layout
endif;
?>