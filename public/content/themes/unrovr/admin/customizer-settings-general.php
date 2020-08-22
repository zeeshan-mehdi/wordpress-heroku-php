<?php

	unrovr_customize_setting(
		$wp_customize,
		$section           = 'unrovr_section_general',
		$id                = 'unrovr_setting_color_1',
		$label             = esc_html__('Body Text Color', 'unrovr'),
		$description       = "",
		$sanitize_callback = 'sanitize_hex_color',
		$transport         = 'postMessage',
		$type              = 'color',
		$default           = '#334455',
		$choices           = array(),
		$input_attrs       = array()
	);
	
	
	unrovr_customize_setting(
		$wp_customize,
		$section           = 'unrovr_section_general',
		$id                = 'unrovr_setting_color_11',
		$label             = esc_html__('Link Color', 'unrovr'),
		$description       = "",
		$sanitize_callback = 'sanitize_hex_color',
		$transport         = 'postMessage',
		$type              = 'color',
		$default           = '#4ece99',
		$choices           = array(),
		$input_attrs       = array()
	);
	
	
	unrovr_customize_setting(
		$wp_customize,
		$section           = 'unrovr_section_general',
		$id                = 'unrovr_setting_color_12',
		$label             = esc_html__('Link Hover Color', 'unrovr'),
		$description       = "",
		$sanitize_callback = 'sanitize_hex_color',
		$transport         = 'postMessage',
		$type              = 'color',
		$default           = '#399670',
		$choices           = array(),
		$input_attrs       = array()
	);
	
	
	unrovr_customize_setting(
		$wp_customize,
		$section           = 'unrovr_section_general',
		$id                = 'unrovr_setting_color_3',
		$label             = esc_html__('Primary Color', 'unrovr'),
		$description       = "",
		$sanitize_callback = 'sanitize_hex_color',
		$transport         = 'postMessage',
		$type              = 'color',
		$default           = '#4ece99',
		$choices           = array(),
		$input_attrs       = array()
	);
	
	
	unrovr_customize_setting(
		$wp_customize,
		$section           = 'unrovr_section_general',
		$id                = 'unrovr_setting_color_4',
		$label             = esc_html__('Section Title Underline Color', 'unrovr'),
		$description       = "",
		$sanitize_callback = 'sanitize_hex_color',
		$transport         = 'postMessage',
		$type              = 'color',
		$default           = '#fdf854',
		$choices           = array(),
		$input_attrs       = array()
	);
	
	
	unrovr_customize_setting(
		$wp_customize,
		$section           = 'unrovr_section_general',
		$id                = 'unrovr_setting_font_1',
		$label             = esc_html__('Body Font', 'unrovr'),
		$description       = "",
		$sanitize_callback = 'unrovr_sanitize',
		$transport         = 'postMessage',
		$type              = 'select',
		$default           = 'Roboto',
		$choices           = unrovr_fonts(),
		$input_attrs       = array()
	);
	
	
	unrovr_customize_setting(
		$wp_customize,
		$section           = 'unrovr_section_general',
		$id                = 'unrovr_setting_font_size_1',
		$label             = esc_html__('Body Font Size', 'unrovr'),
		$description       = "",
		$sanitize_callback = 'unrovr_sanitize',
		$transport         = 'postMessage',
		$type              = 'number',
		$default           = '14',
		$choices           = array(),
		$input_attrs       = array(
			'min'  => 10,
			'max'  => 30,
			'step' => 1
		)
	);
	
	
	unrovr_customize_setting(
		$wp_customize,
		$section           = 'unrovr_section_general',
		$id                = 'unrovr_setting_font_2',
		$label             = esc_html__('Headings Font', 'unrovr'),
		$description       = "",
		$sanitize_callback = 'unrovr_sanitize',
		$transport         = 'postMessage',
		$type              = 'select',
		$default           = 'Poppins',
		$choices           = unrovr_fonts(),
		$input_attrs       = array()
	);
	
	
	unrovr_customize_setting(
		$wp_customize,
		$section           = 'unrovr_section_general',
		$id                = 'unrovr_setting_font_size_2',
		$label             = esc_html__('Headings Font Size', 'unrovr'),
		$description       = "",
		$sanitize_callback = 'unrovr_sanitize',
		$transport         = 'postMessage',
		$type              = 'number',
		$default           = '42',
		$choices           = array(),
		$input_attrs       = array(
			'min'  => 10,
			'max'  => 100,
			'step' => 2
		)
	);
	
	
	unrovr_customize_setting(
		$wp_customize,
		$section           = 'unrovr_section_general',
		$id                = 'unrovr_setting_font_weight_1',
		$label             = esc_html__('Headings Font Weight', 'unrovr'),
		$description       = "",
		$sanitize_callback = 'unrovr_sanitize',
		$transport         = 'postMessage',
		$type              = 'select',
		$default           = '600',
		$choices           = unrovr_font_weights(),
		$input_attrs       = array()
	);
	
	
	unrovr_customize_setting(
		$wp_customize,
		$section           = 'unrovr_section_general',
		$id                = 'unrovr_setting_font_3',
		$label             = esc_html__('Sub Headings Font', 'unrovr'),
		$description       = "",
		$sanitize_callback = 'unrovr_sanitize',
		$transport         = 'postMessage',
		$type              = 'select',
		$default           = 'Roboto',
		$choices           = unrovr_fonts(),
		$input_attrs       = array()
	);
	
	
	unrovr_customize_setting(
		$wp_customize,
		$section           = 'unrovr_section_general',
		$id                = 'unrovr_setting_font_styles',
		$label             = esc_html__('Include All Font Weights (100-900)', 'unrovr'),
		$description       = esc_html__('Bold/italic styles.', 'unrovr'),
		$sanitize_callback = 'unrovr_sanitize',
		$transport         = 'refresh',
		$type              = 'select',
		$default           = 'Yes',
		$choices           = array(
			'Yes' => esc_html__('Yes', 'unrovr'),
			'No'  => esc_html__('No', 'unrovr')
		),
		$input_attrs       = array()
	);
	
	
	unrovr_customize_setting(
		$wp_customize,
		$section           = 'unrovr_section_general',
		$id                = 'unrovr_setting_font_character_sets',
		$label             = esc_html__('Font Character Sets', 'unrovr'),
		$description       = esc_html__('Some fonts support all character sets.', 'unrovr'),
		$sanitize_callback = 'unrovr_sanitize',
		$transport         = 'postMessage',
		$type              = 'hidden',
		$default           = "",
		$choices           = array(),
		$input_attrs       = array()
	);
	
	
	unrovr_customize_setting(
		$wp_customize,
		$section           = 'unrovr_section_general',
		$id                = 'unrovr_setting_font_char_sets_latin',
		$label             = esc_html__('Latin Characters', 'unrovr'),
		$description       = "",
		$sanitize_callback = 'unrovr_sanitize',
		$transport         = 'refresh',
		$type              = 'checkbox',
		$default           = 1,
		$choices           = array(),
		$input_attrs       = array()
	);
	
	
	unrovr_customize_setting(
		$wp_customize,
		$section           = 'unrovr_section_general',
		$id                = 'unrovr_setting_font_char_sets_latin_ext',
		$label             = esc_html__('Latin Characters (extended)', 'unrovr'),
		$description       = "",
		$sanitize_callback = 'unrovr_sanitize',
		$transport         = 'refresh',
		$type              = 'checkbox',
		$default           = 0,
		$choices           = array(),
		$input_attrs       = array()
	);
	
	
	unrovr_customize_setting(
		$wp_customize,
		$section           = 'unrovr_section_general',
		$id                = 'unrovr_setting_font_char_sets_cyrillic',
		$label             = esc_html__('Cyrillic Characters', 'unrovr'),
		$description       = "",
		$sanitize_callback = 'unrovr_sanitize',
		$transport         = 'refresh',
		$type              = 'checkbox',
		$default           = 0,
		$choices           = array(),
		$input_attrs       = array()
	);
	
	
	unrovr_customize_setting(
		$wp_customize,
		$section           = 'unrovr_section_general',
		$id                = 'unrovr_setting_font_char_sets_cyrillic_ext',
		$label             = esc_html__('Cyrillic Characters (extended)', 'unrovr'),
		$description       = "",
		$sanitize_callback = 'unrovr_sanitize',
		$transport         = 'refresh',
		$type              = 'checkbox',
		$default           = 0,
		$choices           = array(),
		$input_attrs       = array()
	);
	
	
	unrovr_customize_setting(
		$wp_customize,
		$section           = 'unrovr_section_general',
		$id                = 'unrovr_setting_font_char_sets_greek',
		$label             = esc_html__('Greek Characters', 'unrovr'),
		$description       = "",
		$sanitize_callback = 'unrovr_sanitize',
		$transport         = 'refresh',
		$type              = 'checkbox',
		$default           = 0,
		$choices           = array(),
		$input_attrs       = array()
	);
	
	
	unrovr_customize_setting(
		$wp_customize,
		$section           = 'unrovr_section_general',
		$id                = 'unrovr_setting_font_char_sets_greek_ext',
		$label             = esc_html__('Greek Characters (extended)', 'unrovr'),
		$description       = "",
		$sanitize_callback = 'unrovr_sanitize',
		$transport         = 'refresh',
		$type              = 'checkbox',
		$default           = 0,
		$choices           = array(),
		$input_attrs       = array()
	);
	
	
	unrovr_customize_setting(
		$wp_customize,
		$section           = 'unrovr_section_general',
		$id                = 'unrovr_setting_font_char_sets_vietnamese',
		$label             = esc_html__('Vietnamese Characters', 'unrovr'),
		$description       = "",
		$sanitize_callback = 'unrovr_sanitize',
		$transport         = 'refresh',
		$type              = 'checkbox',
		$default           = 0,
		$choices           = array(),
		$input_attrs       = array()
	);
	
	
	unrovr_customize_setting(
		$wp_customize,
		$section           = 'unrovr_section_general',
		$id                = 'unrovr_setting_sound_effects',
		$label             = esc_html__('Sound Effects', 'unrovr'),
		$description       = "",
		$sanitize_callback = 'unrovr_sanitize',
		$transport         = 'refresh',
		$type              = 'select',
		$default           = 'yes',
		$choices           = array(
			'yes' => esc_html__('Yes', 'unrovr'),
			'no'  => esc_html__('No', 'unrovr')
		),
		$input_attrs       = array()
	);
	
	
	unrovr_customize_setting(
		$wp_customize,
		$section           = 'unrovr_section_general',
		$id                = 'unrovr_setting_classic_nav_menu',
		$label             = esc_html__('Classic Navigation Menu', 'unrovr'),
		$description       = "",
		$sanitize_callback = 'unrovr_sanitize',
		$transport         = 'refresh',
		$type              = 'select',
		$default           = 'yes_all',
		$choices           = array(
			'yes_all'  => esc_html__('Yes - For all pages', 'unrovr'),
			'yes_home' => esc_html__('Yes - Only for homepage', 'unrovr'),
			'no'       => esc_html__('No', 'unrovr')
		),
		$input_attrs       = array()
	);
	
	
	unrovr_customize_setting(
		$wp_customize,
		$section           = 'unrovr_section_general',
		$id                = 'unrovr_setting_mobile_zoom',
		$label             = esc_html__('Mobile Zoom', 'unrovr'),
		$description       = "",
		$sanitize_callback = 'unrovr_sanitize',
		$transport         = 'refresh',
		$type              = 'select',
		$default           = 'no',
		$choices           = array(
			'no'  => esc_html__('No', 'unrovr'),
			'yes' => esc_html__('Yes', 'unrovr')
		),
		$input_attrs       = array()
	);
	
	
	unrovr_customize_setting(
		$wp_customize,
		$section           = 'unrovr_section_general',
		$id                = 'unrovr_setting_ajax',
		$label             = esc_html__('Ajax', 'unrovr'),
		$description       = esc_html__('Ajax functionality for portfolio posts.', 'unrovr'),
		$sanitize_callback = 'unrovr_sanitize',
		$transport         = 'refresh',
		$type              = 'select',
		$default           = 'yes',
		$choices           = array(
			'yes' => esc_html__('Yes', 'unrovr'),
			'no'  => esc_html__('No', 'unrovr')
		),
		$input_attrs       = array()
	);
	
	
	unrovr_customize_setting(
		$wp_customize,
		$section           = 'unrovr_section_general',
		$id                = 'unrovr_setting_google_map_api_key',
		$label             = esc_html__('Google Map API Key', 'unrovr'),
		$description       = esc_html__('Get an API key', 'unrovr') . ' ' . '<a target="_blank" href="//developers.google.com/maps/documentation/javascript/get-api-key#get-an-api-key">' . esc_html__('here', 'unrovr') . '</a>.',
		$sanitize_callback = 'unrovr_sanitize',
		$transport         = 'refresh',
		$type              = 'text',
		$default           = "",
		$choices           = array(),
		$input_attrs       = array()
	);

?>