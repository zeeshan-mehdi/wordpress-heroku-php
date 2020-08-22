<?php

	unrovr_customize_setting(
		$wp_customize,
		$section           = 'unrovr_section_sidebar',
		$id                = 'unrovr_setting_sidebar_blog',
		$label             = esc_html__('Blog Sidebar', 'unrovr'),
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
		$section           = 'unrovr_section_sidebar',
		$id                = 'unrovr_setting_sidebar_post',
		$label             = esc_html__('Post Sidebar', 'unrovr'),
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

?>