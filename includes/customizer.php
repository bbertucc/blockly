<?php
// Register Customizer Sections, Settings and Controls
function theme_customizer_register( $wp_customize ) {
  
  // Removed Unused Sections
  $wp_customize->remove_section( 'static_front_page' );
  
  // Add Controls & Settings to Existing Sections
  $wp_customize->add_setting( 'theme_logo' );
  $wp_customize->add_setting( 'theme_alternate_logo' );
  $wp_customize->add_control( 
    new WP_Customize_Media_Control( $wp_customize, 'theme_logo',
      array(
        'label' => 'Logo',
        'section' => 'title_tagline',
        'settings' => 'theme_logo',
      ) 
    ) 
  );
  $wp_customize->add_control( 
    new WP_Customize_Media_Control( $wp_customize, 'theme_alternate_logo',
      array(
        'label' => 'Alternate Logo',
        'section' => 'title_tagline',
        'settings' => 'theme_alternate_logo',
      ) 
    ) 
  );

  // Add "Archive Settings" Section, Controls and Settings
  $wp_customize->add_section( 'archive_settings', array(
      'title' => __('Archive Settings'),
      'description' => __('Update content on archives.'),
      'priority' => 34,
    )
  );
  $wp_customize->add_setting( 'theme_post_archive_title' );
  $wp_customize->add_setting( 'theme_post_archive_body' );
  $wp_customize->add_setting( 'theme_post_archive_background' );
  $wp_customize->add_setting( 'theme_post_archive_inverted' );
  $wp_customize->add_control( 'theme_post_archive_title',
    array(
      'label' => 'Post Archive Title',
      'section' => 'archive_settings',
      'type' => 'text',
    )
  );
  $wp_customize->add_control( 'theme_post_archive_body',
    array(
      'label' => 'Post Archive Body',
      'section' => 'archive_settings',
      'type' => 'textarea',
    )
  );
  $wp_customize->add_control( 'theme_post_archive_inverted',
    array(
      'section'   => 'archive_settings',
      'label'     => 'Invert callout text.',
      'type'      => 'checkbox'
    )
  );
  $wp_customize->add_control( 
    new WP_Customize_Media_Control( $wp_customize, 'theme_post_archive_background',
      array(
        'label' => 'Post Archive Callout Background',
        'section' => 'archive_settings',
        'setting' => 'theme_post_archive_background',
      )
    )
  );     

  // Add "Social Links" Section, Controls and Settings  
  $wp_customize->add_section( 'social_links', array(
      'title' => __('Social Links'),
      'description' => __('Add social links.'),
      'priority' => 36,
    )
  );
  $wp_customize->add_setting( 'theme_newsletter_url' );
  $wp_customize->add_setting( 'theme_linkedin_url' );
  $wp_customize->add_setting( 'theme_facebook_url' );
  $wp_customize->add_setting( 'theme_twitter_url' );
  $wp_customize->add_setting( 'theme_instagram_url' );
  $wp_customize->add_setting( 'theme_pinterest_url' );
  $wp_customize->add_setting( 'theme_youtube_url' );
  $wp_customize->add_setting( 'theme_medium_url' );
  $wp_customize->add_control( 'theme_newsletter_url',
    array(
      'label' => 'Newsletter URL',
      'section' => 'social_links',
      'type' => 'text',
    )
  );
  $wp_customize->add_control( 'theme_linkedin_url',
    array(
      'label' => 'LinkedIn URL',
      'section' => 'social_links',
      'type' => 'text',
    )
  );
  $wp_customize->add_control( 'theme_facebook_url',
    array(
      'label' => 'Facebook URL',
      'section' => 'social_links',
      'type' => 'text',
    )
  );
  $wp_customize->add_control( 'theme_twitter_url',
    array(
      'label' => 'Twitter URL',
      'section' => 'social_links',
      'type' => 'text',
    )
  );
  $wp_customize->add_control( 'theme_instagram_url',
    array(
      'label' => 'Instagram URL',
      'section' => 'social_links',
      'type' => 'text',
    )
  );
  $wp_customize->add_control( 'theme_pinterest_url',
    array(
      'label' => 'Pinterest URL',
      'section' => 'social_links',
      'type' => 'text',
    )
  );
  $wp_customize->add_control( 'theme_medium_url',
    array(
      'label' => 'Medium URL',
      'section' => 'social_links',
      'type' => 'text',
    )
  );
  $wp_customize->add_control( 'theme_youtube_url',
    array(
      'label' => 'YouTube URL',
      'section' => 'social_links',
      'type' => 'text',
    )
  );

  // Add "Footer Content" Section, Controls and Settings  
  $wp_customize->add_section( 'footer_content', array(
      'title' => __('Footer Content'),
      'description' => __('Add footer text.'),
      'priority' => 36,
    )
  );
  $wp_customize->add_setting( 'theme_footer_text' );
  $wp_customize->add_control( 'theme_footer_text',
    array(
      'label' => 'Footer Text',
      'section' => 'footer_content',
      'type' => 'textarea',
    )
  );

  // Add "Embed Codes" Section, Controls and Settings  
  $wp_customize->add_section( 'embed_codes', array(
      'title' => __('Embed Codes'),
      'description' => __('Tracking pixels, analytics codes..'),
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