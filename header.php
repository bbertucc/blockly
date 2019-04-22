<?php
// =====================================================================
// HEADER
// =====================================================================
// The standard WordPress header.
// =====================================================================
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?> >
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <?php wp_head();?>    
    
  </head>
  
  <body <?php body_class(); ?>>
    
    <?php
    // Header Embed Codes
    if(get_theme_mod( 'theme_header_code' ) ) 
      echo get_theme_mod( 'theme_header_code' );
    ?>
    
    <div class="header">  
        
        <?php        
        // Set Up Image Variables
        $img_src = wp_get_attachment_image_url( get_theme_mod( 'theme_logo' ), 'small' );
          
        // Logo from Customizer 
        if(get_theme_mod( 'theme_logo' ) ):

          // Set Logo Variables
          $img_srcset =  wp_get_attachment_image_srcset( get_theme_mod( 'theme_logo' ) );
          $img_sizes = '322px';  

          // The Logo
          echo '<div class="header-logo"> <a class="logo-link" href="'.get_home_url().'"><img class="link-image" src="'.esc_url($img_src).'" srcset="'.esc_attr($img_srcset).'" sizes="'.$img_sizes.'" alt="logo"></a></div>';

        // If no logo exists, get title and description
        else:
        ?>

        <a class="header-title_and_tagline" href="<?php echo get_home_url();?>">
          <div class="title_and_tagline-title">

            <?php bloginfo('title'); ?>

          </div>
          <div class="title_and_tagline-tagline">

            <?php bloginfo('description'); ?>

          </div>
        </a>

        <?php
        // End logo or title/description
        endif;

        // Begin Header Menu
        if(has_nav_menu('header_menu')):
        ?>
        
          <a class="header-toggle" id="header_menu_toggle"> Menu</a>
          
          <?php
          // Header Navigation
          wp_nav_menu('menu_id=header_navigation&container=&menu_class=header-menu&theme_location=header_menu&depth=1');
          ?>

        <?php
        // End Header Menu
        endif;
        ?>

      </div>
    </div>