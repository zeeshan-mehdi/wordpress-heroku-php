<?php

	function unrovr_customize_register__sections($wp_customize)
	{
		$wp_customize->add_section(
			'unrovr_section_general',
			array(
				'title'       => esc_html__('General', 'unrovr'),
				'description' => esc_html__('Theme general settings.', 'unrovr'),
				'priority'    => 1
			)
		);
		
		$wp_customize->add_section(
			'unrovr_section_buttons',
			array(
				'title'       => esc_html__('Buttons', 'unrovr'),
				'description' => esc_html__('Theme buttons settings.', 'unrovr'),
				'priority'    => 21
			)
		);
		
		$wp_customize->add_section(
			'unrovr_section_blog',
			array(
				'title'       => esc_html__('Blog', 'unrovr'),
				'description' => esc_html__('Theme blog page settings.', 'unrovr'),
				'priority'    => 22
			)
		);
		
		$wp_customize->add_section(
			'unrovr_section_post',
			array(
				'title'       => esc_html__('Single Post', 'unrovr'),
				'description' => esc_html__('Theme post page settings.', 'unrovr'),
				'priority'    => 23
			)
		);
		
		$wp_customize->add_section(
			'unrovr_section_sidebar',
			array(
				'title'       => esc_html__('Sidebar', 'unrovr'),
				'description' => esc_html__('Theme sidebar settings.', 'unrovr'),
				'priority'    => 24
			)
		);
	}
	
	add_action('customize_register', 'unrovr_customize_register__sections');
	
	
	function unrovr_sanitize($value)
	{
		return $value;
	}

?>