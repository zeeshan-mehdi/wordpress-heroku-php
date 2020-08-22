<?php

	unrovr_customize_setting(
		$wp_customize,
		$section           = 'static_front_page',
		$id                = 'unrovr_setting_card_image',
		$label             = esc_html__('Card Image', 'unrovr'),
		$description       = esc_html__('Upload an image or choose from your media library.', 'unrovr'),
		$sanitize_callback = 'unrovr_sanitize',
		$transport         = 'refresh',
		$type              = 'image',
		$default           = "",
		$choices           = array(),
		$input_attrs       = array(),
		$priority          = 1
	);
	
	
	unrovr_customize_setting(
		$wp_customize,
		$section           = 'static_front_page',
		$id                = 'unrovr_setting_color_10',
		$label             = esc_html__('Card Image Mask Color', 'unrovr'),
		$description       = "",
		$sanitize_callback = 'sanitize_hex_color',
		$transport         = 'postMessage',
		$type              = 'color',
		$default           = '#0d3d6d',
		$choices           = array(),
		$input_attrs       = array(),
		$priority          = 1
	);
	
	
	unrovr_customize_setting(
		$wp_customize,
		$section           = 'static_front_page',
		$id                = 'unrovr_setting_card_image_mask_opacity',
		$label             = esc_html__('Card Image Mask Opacity', 'unrovr'),
		$description       = "",
		$sanitize_callback = 'unrovr_sanitize',
		$transport         = 'postMessage',
		$type              = 'range',
		$default           = '0.2',
		$choices           = array(),
		$input_attrs       = array(
			'min'  => 0,
			'max'  => 1,
			'step' => 0.1
		),
		$priority          = 1
	);
	
	
	unrovr_customize_setting(
		$wp_customize,
		$section           = 'static_front_page',
		$id                = 'unrovr_setting_home_description',
		$label             = esc_html__('Description', 'unrovr'),
		$description       = "",
		$sanitize_callback = 'unrovr_sanitize',
		$transport         = 'refresh',
		$type              = 'textarea',
		$default           = "",
		$choices           = array(),
		$input_attrs       = array(),
		$priority          = 1
	);
	
	
	unrovr_customize_setting(
		$wp_customize,
		$section           = 'static_front_page',
		$id                = 'unrovr_setting_home_button_text',
		$label             = esc_html__('"Download CV" Button Text', 'unrovr'),
		$description       = "",
		$sanitize_callback = 'unrovr_sanitize',
		$transport         = 'refresh',
		$type              = 'text',
		$default           = "",
		$choices           = array(),
		$input_attrs       = array(),
		$priority          = 1
	);
	
	
	unrovr_customize_setting(
		$wp_customize,
		$section           = 'static_front_page',
		$id                = 'unrovr_setting_home_button_url',
		$label             = esc_html__('"Download CV" Button URL', 'unrovr'),
		$description       = "",
		$sanitize_callback = 'unrovr_sanitize',
		$transport         = 'refresh',
		$type              = 'url',
		$default           = "",
		$choices           = array(),
		$input_attrs       = array(
			'placeholder' => 'http://'
		),
		$priority          = 1
	);
	
	
	unrovr_customize_setting(
		$wp_customize,
		$section           = 'static_front_page',
		$id                = 'unrovr_setting_home_button_new_tab',
		$label             = esc_html__('"Download CV" Button New Tab', 'unrovr'),
		$description       = esc_html__('Open in new tab.', 'unrovr'),
		$sanitize_callback = 'unrovr_sanitize',
		$transport         = 'refresh',
		$type              = 'checkbox',
		$default           = 0,
		$choices           = array(),
		$input_attrs       = array(),
		$priority          = 1
	);
	
	
	unrovr_customize_setting(
		$wp_customize,
		$section           = 'static_front_page',
		$id                = 'unrovr_setting_color_7',
		$label             = esc_html__('Intro Title Color', 'unrovr'),
		$description       = "",
		$sanitize_callback = 'sanitize_hex_color',
		$transport         = 'postMessage',
		$type              = 'color',
		$default           = "",
		$choices           = array(),
		$input_attrs       = array(),
		$priority          = 1
	);
	
	
	unrovr_customize_setting(
		$wp_customize,
		$section           = 'static_front_page',
		$id                = 'unrovr_setting_font_weight_3',
		$label             = esc_html__('Intro Title Font Weight', 'unrovr'),
		$description       = "",
		$sanitize_callback = 'unrovr_sanitize',
		$transport         = 'postMessage',
		$type              = 'select',
		$default           = '700',
		$choices           = unrovr_font_weights(),
		$input_attrs       = array(),
		$priority          = 1
	);
	
	
	unrovr_customize_setting(
		$wp_customize,
		$section           = 'static_front_page',
		$id                = 'unrovr_setting_letter_spacing_2',
		$label             = esc_html__('Intro Title Letter Spacing', 'unrovr'),
		$description       = "",
		$sanitize_callback = 'unrovr_sanitize',
		$transport         = 'postMessage',
		$type              = 'range',
		$default           = '-5',
		$choices           = array(),
		$input_attrs       = array(
			'min'  => -10,
			'max'  => 10,
			'step' => 1
		),
		$priority          = 1
	);
	
	
	unrovr_customize_setting(
		$wp_customize,
		$section           = 'static_front_page',
		$id                = 'unrovr_setting_font_size_5',
		$label             = esc_html__('Intro Text Font Size', 'unrovr'),
		$description       = "",
		$sanitize_callback = 'unrovr_sanitize',
		$transport         = 'postMessage',
		$type              = 'range',
		$default           = '25',
		$choices           = array(),
		$input_attrs       = array(
			'min'  => 10,
			'max'  => 36,
			'step' => 1
		),
		$priority          = 1
	);
	
	
	unrovr_customize_setting(
		$wp_customize,
		$section           = 'static_front_page',
		$id                = 'unrovr_setting_color_8',
		$label             = esc_html__('Card Title Background Color', 'unrovr'),
		$description       = "",
		$sanitize_callback = 'sanitize_hex_color',
		$transport         = 'postMessage',
		$type              = 'color',
		$default           = '#1755cf',
		$choices           = array(),
		$input_attrs       = array(),
		$priority          = 1
	);
	
	
	unrovr_customize_setting(
		$wp_customize,
		$section           = 'static_front_page',
		$id                = 'unrovr_setting_color_9',
		$label             = esc_html__('Card Title Text Color', 'unrovr'),
		$description       = "",
		$sanitize_callback = 'sanitize_hex_color',
		$transport         = 'postMessage',
		$type              = 'color',
		$default           = '#ffffff',
		$choices           = array(),
		$input_attrs       = array(),
		$priority          = 1
	);
	
	
	unrovr_customize_setting(
		$wp_customize,
		$section           = 'static_front_page',
		$id                = 'unrovr_setting_font_size_6',
		$label             = esc_html__('Card Title Font Size', 'unrovr'),
		$description       = "",
		$sanitize_callback = 'unrovr_sanitize',
		$transport         = 'postMessage',
		$type              = 'range',
		$default           = '11',
		$choices           = array(),
		$input_attrs       = array(
			'min'  => 9,
			'max'  => 36,
			'step' => 1
		),
		$priority          = 1
	);
	
	
	unrovr_customize_setting(
		$wp_customize,
		$section           = 'static_front_page',
		$id                = 'unrovr_setting_font_weight_4',
		$label             = esc_html__('Card Title Font Weight', 'unrovr'),
		$description       = "",
		$sanitize_callback = 'unrovr_sanitize',
		$transport         = 'postMessage',
		$type              = 'select',
		$default           = '400',
		$choices           = unrovr_font_weights(),
		$input_attrs       = array(),
		$priority          = 1
	);
	
	
	unrovr_customize_setting(
		$wp_customize,
		$section           = 'static_front_page',
		$id                = 'unrovr_setting_letter_spacing_3',
		$label             = esc_html__('Card Title Letter Spacing', 'unrovr'),
		$description       = "",
		$sanitize_callback = 'unrovr_sanitize',
		$transport         = 'postMessage',
		$type              = 'range',
		$default           = '3',
		$choices           = array(),
		$input_attrs       = array(
			'min'  => 0,
			'max'  => 10,
			'step' => 1
		),
		$priority          = 1
	);
	
	
	unrovr_customize_setting(
		$wp_customize,
		$section           = 'static_front_page',
		$id                = 'unrovr_setting_color_2',
		$label             = esc_html__('Menu Selected Item Color', 'unrovr'),
		$description       = "",
		$sanitize_callback = 'sanitize_hex_color',
		$transport         = 'postMessage',
		$type              = 'color',
		$default           = '#faff32',
		$choices           = array(),
		$input_attrs       = array(),
		$priority          = 1
	);
	
	
	unrovr_customize_setting(
		$wp_customize,
		$section           = 'static_front_page',
		$id                = 'unrovr_setting_font_weight_5',
		$label             = esc_html__('Grid Title Font Weight', 'unrovr'),
		$description       = "",
		$sanitize_callback = 'unrovr_sanitize',
		$transport         = 'postMessage',
		$type              = 'select',
		$default           = '700',
		$choices           = unrovr_font_weights(),
		$input_attrs       = array(),
		$priority          = 1
	);
	
	
	unrovr_customize_setting(
		$wp_customize,
		$section           = 'static_front_page',
		$id                = 'unrovr_setting_font_size_7',
		$label             = esc_html__('Grid Title Font Size', 'unrovr'),
		$description       = "",
		$sanitize_callback = 'unrovr_sanitize',
		$transport         = 'postMessage',
		$type              = 'number',
		$default           = '18',
		$choices           = array(),
		$input_attrs       = array(
			'min'  => 10,
			'max'  => 30,
			'step' => 1
		),
		$priority          = 1
	);
	
	
	unrovr_customize_setting(
		$wp_customize,
		$section           = 'static_front_page',
		$id                = 'unrovr_setting_grid_title_text_transform',
		$label             = esc_html__('Grid Title Text Transform', 'unrovr'),
		$description       = "",
		$sanitize_callback = 'unrovr_sanitize',
		$transport         = 'postMessage',
		$type              = 'select',
		$default           = 'none',
		$choices           = array(
			'none'      => 'None',
			'uppercase' => 'Uppercase'
		),
		$input_attrs       = array(),
		$priority          = 1
	);
	
	
	unrovr_customize_setting(
		$wp_customize,
		$section           = 'static_front_page',
		$id                = 'unrovr_setting_letter_spacing_4',
		$label             = esc_html__('Grid Title Letter Spacing', 'unrovr'),
		$description       = "",
		$sanitize_callback = 'unrovr_sanitize',
		$transport         = 'postMessage',
		$type              = 'range',
		$default           = '0',
		$choices           = array(),
		$input_attrs       = array(
			'min'  => 0,
			'max'  => 10,
			'step' => 1
		),
		$priority          = 1
	);

?>