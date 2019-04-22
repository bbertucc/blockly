<?php
// =====================================================================
// ACF Settings
// =====================================================================
// Register fields and add Advanced Custom Field settings that are
// unique to this theme.
// =====================================================================
if( function_exists('acf_add_local_field_group') ):

  // Content Settings
  acf_add_local_field_group(array(
    'key' => 'group_5cbb893a290e8',
    'title' => 'Content Settings',
    'fields' => array(
      array(
        'key' => 'field_5cbb894aaa709',
        'label' => 'Hide title?',
        'name' => 'hide_title',
        'type' => 'true_false',
        'instructions' => '',
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'message' => '',
        'default_value' => 0,
        'ui' => 0,
        'ui_on_text' => '',
        'ui_off_text' => '',
      ),
    ),
    'location' => array(
      array(
        array(
          'param' => 'post_type',
          'operator' => '==',
          'value' => 'page',
        ),
      ),
      array(
        array(
          'param' => 'post_type',
          'operator' => '==',
          'value' => 'post',
        ),
      ),
    ),
    'menu_order' => 0,
    'position' => 'side',
    'style' => 'default',
    'label_placement' => 'top',
    'instruction_placement' => 'label',
    'hide_on_screen' => '',
    'active' => true,
    'description' => '',
  ));
  
endif;