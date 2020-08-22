<?php

	unrovr_customize_setting(
		$wp_customize,
		$section           = 'unrovr_section_blog',
		$id                = 'unrovr_setting_font_size_4',
		$label             = esc_html__('Blog List Title Font Size', 'unrovr'),
		$description       = "",
		$sanitize_callback = 'unrovr_sanitize',
		$transport         = 'postMessage',
		$type              = 'number',
		$default           = '34',
		$choices           = array(),
		$input_attrs       = array(
			'min'  => 10,
			'max'  => 120,
			'step' => 2
		)
	);
	
	
	unrovr_customize_setting(
		$wp_customize,
		$section           = 'unrovr_section_blog',
		$id                = 'unrovr_setting_automatic_excerpt',
		$label             = esc_html__('Automatic Excerpt', 'unrovr'),
		$description       = "",
		$sanitize_callback = 'unrovr_sanitize',
		$transport         = 'refresh',
		$type              = 'select',
		$default           = 'yes_standard',
		$choices           = array(
			'yes_standard' => esc_html__('Yes - Only for standard format', 'unrovr'),
			'yes_all'      => esc_html__('Yes - For all post formats', 'unrovr'),
			'no'           => esc_html__('No', 'unrovr')
		),
		$input_attrs       = array()
	);
	
	
	unrovr_customize_setting(
		$wp_customize,
		$section           = 'unrovr_section_blog',
		$id                = 'unrovr_setting_blog_navigation',
		$label             = esc_html__('Blog Navigation', 'unrovr'),
		$description       = "",
		$sanitize_callback = 'unrovr_sanitize',
		$transport         = 'refresh',
		$type              = 'select',
		$default           = 'older_newer',
		$choices           = array(
			'older_newer' => esc_html__('Older/Newer Links', 'unrovr'),
			'numbered'    => esc_html__('Numbered Pagination', 'unrovr')
		),
		$input_attrs       = array()
	);
	
	
	unrovr_customize_setting(
		$wp_customize,
		$section           = 'unrovr_section_blog',
		$id                = 'unrovr_setting_back_to_blog_link_behaviour',
		$label             = esc_html__('Back To Blog', 'unrovr'),
		$description       = esc_html__('Link behaviour.', 'unrovr'),
		$sanitize_callback = 'unrovr_sanitize',
		$transport         = 'refresh',
		$type              = 'select',
		$default           = 'to_regular_blog',
		$choices           = array(
			'to_regular_blog' => esc_html__('To Regular Blog', 'unrovr'),
			'to_grid_blog'    => esc_html__('To Grid Blog', 'unrovr')
		),
		$input_attrs       = array()
	);

?>