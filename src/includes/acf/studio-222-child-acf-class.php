<?php

class S222_ACF {

  public function __construct() {
    add_action('admin_init', array( $this, 'acf_admin_init'), 99);
    add_action('acf/init', array( $this, 'acf_init' ) );

    // hide acf in admin - client doesnt need to see this
    // add_filter('acf/settings/show_admin', '__return_false');
  }


  public function acf_admin_init() {
    // hide options page
    // remove_menu_page('acf-options');
  }

  public function acf_init() {
    if( function_exists('acf_add_local_field_group') ):

      acf_add_local_field_group(array(
      	'key' => 'group_5b8fc498c9251',
      	'title' => 'Page Footer',
      	'fields' => array(
      		array(
      			'key' => 'field_5b8fc52a41570',
      			'label' => 'Add Footer CTA?',
      			'name' => 'footer_cta',
      			'type' => 'true_false',
      			'default_value' => 0,
      		),
      		array(
      			'key' => 'field_5b8fc49e4156e',
      			'label' => 'Image',
      			'name' => 'footer_image',
      			'type' => 'image',
      			'conditional_logic' => array(
      				array(
      					array(
      						'field' => 'field_5b8fc52a41570',
      						'operator' => '==',
      						'value' => '1',
      					),
      				),
      			),
      			'return_format' => 'url',
      			'preview_size' => 'full',
      		),
      		array(
      			'key' => 'field_5b8fc50f4156f',
      			'label' => 'Title',
      			'name' => 'footer_title',
      			'type' => 'text',
      			'conditional_logic' => array(
      				array(
      					array(
      						'field' => 'field_5b8fc52a41570',
      						'operator' => '==',
      						'value' => '1',
      					),
      				),
      			),
      		),
      		array(
      			'key' => 'field_5b8fc56a41571',
      			'label' => 'Content',
      			'name' => 'footer_content',
      			'type' => 'textarea',
      			'conditional_logic' => array(
      				array(
      					array(
      						'field' => 'field_5b8fc52a41570',
      						'operator' => '==',
      						'value' => '1',
      					),
      				),
      			),
      			'rows' => 3,
      		),
      		array(
      			'key' => 'field_5b8fc58e41572',
      			'label' => 'CTA Text',
      			'name' => 'footer_cta_text',
      			'type' => 'text',
      			'conditional_logic' => array(
      				array(
      					array(
      						'field' => 'field_5b8fc52a41570',
      						'operator' => '==',
      						'value' => '1',
      					),
      				),
      			),
      		),
      		array(
      			'key' => 'field_5b8fc5a041573',
      			'label' => 'CTA Link',
      			'name' => 'footer_cta_link',
      			'type' => 'link',
      			'conditional_logic' => array(
      				array(
      					array(
      						'field' => 'field_5b8fc52a41570',
      						'operator' => '==',
      						'value' => '1',
      					),
      				),
      			),
      			'return_format' => 'url',
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
      	),
      	'menu_order' => 0,
      	'active' => 1,
      ));

      acf_add_local_field_group(array(
      	'key' => 'group_5b8961f058869',
      	'title' => 'Page Header',
      	'fields' => array(
      		array(
      			'key' => 'field_5b8961f888c80',
      			'label' => 'Header Style',
      			'name' => 'header_style',
      			'type' => 'radio',
      			'instructions' => '',
      			'required' => 1,
      			'choices' => array(
      				'style_1' => 'Style 1 (opaque with picture)',
      				'style_2' => 'Style 2 (white)',
      			),
      			'allow_null' => 0,
      			'other_choice' => 0,
      			'default_value' => '',
      			'layout' => 'vertical',
      			'return_format' => 'value',
      			'save_other_choice' => 0,
      		),
      		array(
      			'key' => 'field_5b8972f729801',
      			'label' => 'Tagline',
      			'name' => 'tagline',
      			'type' => 'text',
      		),
      	),
      	'location' => array(
      		array(
      			array(
      				'param' => 'post_type',
      				'operator' => '==',
      				'value' => 'post',
      			),
      		),
      		array(
      			array(
      				'param' => 'post_type',
      				'operator' => '==',
      				'value' => 'page',
      			),
      		),
      	),
      	'menu_order' => 0,
      	'active' => 1,
      ));

    endif;
  }
}

?>
