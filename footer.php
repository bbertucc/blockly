<?php
// =====================================================================
// FOOTER
// =====================================================================
// The standard WordPress footer.
// =====================================================================
?>
  <div class="footer">

    <?php
    // Footer Navigation
    if(has_nav_menu('footer_menu'))
      wp_nav_menu('menu_id=header_navigation&container=&menu_class=footer-menu&theme_location=footer_menu&depth=1');

    // Footer Embed Codes
    if(get_theme_mod( 'theme_copyright_info' ) ) 
      echo '<div class="footer-copyright_info">' . get_theme_mod( 'theme_copyright_info' ) . '</div>';
    ?>

  </div>

  <?php
  // Footer Embed Codes
  if(get_theme_mod( 'theme_footer_code' ) ) 
    echo get_theme_mod( 'theme_footer_code' );
  ?>
  
</body>

<?php wp_footer();?>