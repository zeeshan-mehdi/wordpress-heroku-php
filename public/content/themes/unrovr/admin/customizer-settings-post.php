<?php

	unrovr_customize_setting(
		$wp_customize,
		$section           = 'unrovr_section_post',
		$id                = 'unrovr_setting_related_posts',
		$label             = esc_html__('Related Posts', 'unrovr'),
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