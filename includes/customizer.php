<?php
// =====================================================================
// CUSTOMIZER SETTINGS
// =====================================================================
// All the theme-related Customizer settings are
// registered here.
// =====================================================================
function theme_customizer_register( $wp_customize ) {
    
  // Add Controls & Settings to Existing Sections
  $wp_customize->add_setting( 'theme_logo' );
  $wp_customize->add_setting( 'theme_copyright_info' );
  $wp_customize->add_control( 
    new WP_Customize_Media_Control( $wp_customize, 'theme_logo',
      array(
        'label' => 'Logo',
        'section' => 'title_tagline',
        'settings' => 'theme_logo',
      ) 
    ) 
  );
  $wp_customize->add_control( 'theme_copyright_info',
    array(
      'label' => 'Copyright Info',
      'section' => 'title_tagline',
      'type' => 'text',
    )
  );

  // Add "Embed Codes" Section, Controls and Settings  
  $wp_customize->add_section( 'theme_embed_codes', array(
      'title' => __('Theme Embed Codes', 'blockly'),
      'description' => __('Tracking pixels, analytics codes, ..', 'blockly'),
      'priority' => 38,
    )
  );
  $wp_customize->add_setting( 'theme_header_code' );
  $wp_customize->add_setting( 'theme_footer_code' );
  $wp_customize->add_control( 'theme_header_code',
    array(
      'label' => 'Code before Header',
      'section' => 'embed_codes',
      'type' => 'textarea',
    )
  );    
  $wp_customize->add_control( 'theme_footer_code',
    array(
      'label' => 'Code after Footer',
      'section' => 'embed_codes',
      'type' => 'textarea',
    )
  );
  
}
add_action( 'customize_register', 'theme_customizer_register' ); 
?>