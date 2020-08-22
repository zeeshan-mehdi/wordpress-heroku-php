<?php

	$wp_customize->get_setting('blogname')->transport 		 = 'postMessage';
	$wp_customize->get_setting('blogdescription')->transport = 'postMessage';
	
	
	/* ================================================== */
	
	
	unrovr_customize_setting(
		$wp_customize,
		$section           = 'title_tagline',
		$id                = 'unrovr_setting_header_bg_img',
		$label             = esc_html__('Header Background Image', 'unrovr'),
		$description       = esc_html__('Upload an image or choose from your media library.', 'unrovr'),
		$sanitize_callback = 'unrovr_sanitize',
		$transport         = 'refresh',
		$type              = 'image',
		$default           = "",
		$choices           = array(),
		$input_attrs       = array()
	);

?>