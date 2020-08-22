<?php

	unrovr_customize_setting(
		$wp_customize,
		$section           = 'unrovr_section_buttons',
		$id                = 'unrovr_setting_color_5',
		$label             = esc_html__('Primary Button Color', 'unrovr'),
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
		$section           = 'unrovr_section_buttons',
		$id                = 'unrovr_setting_color_6',
		$label             = esc_html__('Secondary Button Color', 'unrovr'),
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
		$section           = 'unrovr_section_buttons',
		$id                = 'unrovr_setting_font_size_3',
		$label             = esc_html__('Buttons Font Size', 'unrovr'),
		$description       = "",
		$sanitize_callback = 'unrovr_sanitize',
		$transport         = 'postMessage',
		$type              = 'number',
		$default           = '11',
		$choices           = array(),
		$input_attrs       = array(
			'min'  => 9,
			'max'  => 20,
			'step' => 1
		)
	);
	
	
	unrovr_customize_setting(
		$wp_customize,
		$section           = 'unrovr_section_buttons',
		$id                = 'unrovr_setting_font_weight_2',
		$label             = esc_html__('Buttons Font Weight', 'unrovr'),
		$description       = "",
		$sanitize_callback = 'unrovr_sanitize',
		$transport         = 'postMessage',
		$type              = 'select',
		$default           = '700',
		$choices           = unrovr_font_weights(),
		$input_attrs       = array()
	);
	
	
	unrovr_customize_setting(
		$wp_customize,
		$section           = 'unrovr_section_buttons',
		$id                = 'unrovr_setting_letter_spacing_1',
		$label             = esc_html__('Buttons Letter Spacing', 'unrovr'),
		$description       = "",
		$sanitize_callback = 'unrovr_sanitize',
		$transport         = 'postMessage',
		$type              = 'range',
		$default           = '1',
		$choices           = array(),
		$input_attrs       = array(
			'min'  => 0,
			'max'  => 10,
			'step' => 1
		)
	);

?>