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
        
          <a class="header-toggle" id="header_menu_toggle"><span class="toggle-icon"></span></a>
          
          <?php
          // Header Menu
          wp_nav_menu('menu_id=header_menu&container=&menu_class=header-menu&theme_location=header_menu&depth=1');
          $menu_id = wp_get_nav_menu_object(get_nav_menu_locations()['header_menu']);

          // Button Addon
          if(get_field('menu_addons', $menu_id) == 'button')
            echo '<a class="header-button_addon" href="'.get_field('button_url', $menu_id).'">'.get_field('button_text', $menu_id).'</a>';
          
          // Begin Search Form Addon
          if(get_field('menu_addons', $menu_id) == 'search_form'):
          ?>
          
          <form class="header-search_form" id="searchform" action="<?php echo get_site_url();?>" method="get">
            <input class="search_form-input" type="text" name="s" id="s" placeholder="Search.." value="<?php the_search_query(); ?>"> 
            <button class="search_form-submit">
              <img class="submit-icon" src="<?php echo get_template_directory_uri();?>/images/icon-search.svg">
            </button>
          </form>
            
          <?php
          // End Search Form Addon
          endif;

        // End Header Menu
        endif;
        ?>

      </div>
    </div>