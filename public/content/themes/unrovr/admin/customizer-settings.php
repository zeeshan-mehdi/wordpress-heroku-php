<?php

	function unrovr_customize_setting__regular($wp_customize, $section, $id, $label, $description, $sanitize_callback, $transport, $type, $default, $choices, $input_attrs, $priority)
	{
		$wp_customize->add_setting(
			$id,
			array(
				'default'           => $default,
				'sanitize_callback' => $sanitize_callback,
				'transport'         => $transport
			)
		);
		
		$wp_customize->add_control(
			$id,
			array(
				'label'       => $label,
				'description' => $description,
				'section'     => $section,
				'settings'    => $id,
				'type'        => $type, // TYPES: text, textarea, select, radio, checkbox, dropdown-pages, number, range, url, email, date, hidden, color, image
				'choices'     => $choices, // FOR: select, radio
				'input_attrs' => $input_attrs, // FOR: number, range
				'priority'    => $priority
			)
		);
	}


/* ============================================================================================================================================= */


	function unrovr_customize_setting__color($wp_customize, $section, $id, $label, $description, $sanitize_callback, $transport, $type, $default, $choices, $input_attrs, $priority)
	{
		$wp_customize->add_setting(
			$id,
			array(
				'default'           => $default,
				'sanitize_callback' => $sanitize_callback,
				'transport'         => $transport
			)
		);
		
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				$id,
				array(
					'label'       => $label,
					'description' => $description,
					'section'     => $section,
					'settings'    => $id,
					'priority'    => $priority
				)
			)
		);
	}


/* ============================================================================================================================================= */


	function unrovr_customize_setting__image($wp_customize, $section, $id, $label, $description, $sanitize_callback, $transport, $type, $default, $choices, $input_attrs, $priority)
	{
		$wp_customize->add_setting(
			$id,
			array(
				'default'           => $default,
				'sanitize_callback' => $sanitize_callback,
				'transport'         => $transport
			)
		);
		
		$wp_customize->add_control(
			new WP_Customize_Image_Control(
				$wp_customize,
				$id,
				array(
					'label'       => $label,
					'description' => $description,
					'section'     => $section,
					'settings'    => $id,
					'priority'    => $priority
				)
			)
		);
	}


/* ============================================================================================================================================= */


	function unrovr_customize_setting($wp_customize, $section, $id, $label, $description, $sanitize_callback, $transport, $type, $default, $choices, $input_attrs, $priority = 10)
	{
		if ($type == 'color')
		{
			unrovr_customize_setting__color($wp_customize, $section, $id, $label, $description, $sanitize_callback, $transport, $type, $default, $choices, $input_attrs, $priority);
		}
		elseif ($type == 'image')
		{
			unrovr_customize_setting__image($wp_customize, $section, $id, $label, $description, $sanitize_callback, $transport, $type, $default, $choices, $input_attrs, $priority);
		}
		else
		{
			unrovr_customize_setting__regular($wp_customize, $section, $id, $label, $description, $sanitize_callback, $transport, $type, $default, $choices, $input_attrs, $priority);
		}
	}


/* ============================================================================================================================================= */


	include_once(get_template_directory() . '/admin/fonts.php');
	
	
	function unrovr_font_weights()
	{
		$font_weights = array(
			'100' => '100',
			'200' => '200',
			'300' => '300',
			'400' => '400',
			'500' => '500',
			'600' => '600',
			'700' => '700',
			'800' => '800',
			'900' => '900'
		);
		
		return $font_weights;
	}


/* ============================================================================================================================================= */


	function unrovr_customize_register__settings($wp_customize)
	{
		$theme_directory = get_template_directory(); // Without the trailing slash.
		
		include_once($theme_directory . '/admin/customizer-settings-site-identity.php');
		include_once($theme_directory . '/admin/customizer-settings-general.php');
		include_once($theme_directory . '/admin/customizer-settings-blog.php');
		include_once($theme_directory . '/admin/customizer-settings-post.php');
		include_once($theme_directory . '/admin/customizer-settings-sidebar.php');
		include_once($theme_directory . '/admin/customizer-settings-buttons.php');
		include_once($theme_directory . '/admin/customizer-settings-home.php');
	}
	
	add_action('customize_register', 'unrovr_customize_register__settings');

?>