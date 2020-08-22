<?php  
$options = array(
    'style_switcher' => array(
        'type' => 'tab',
        'title' => esc_html__('Style Switcher', 'selfintro'),
        'options' => array(
		    'selfintro_color' => array(
				'label'   => esc_html__('Theme Background Color ', 'selfintro'),
				'type'    => 'image-picker',
				'value'   => '1',
				'desc'    => esc_html__('Select theme Background color.','selfintro'),
				'choices' => array(
					'1' => array(
						'small' => array(
							'height' => 70,
							'width' => 70,
							'src'    => get_template_directory_uri() . '/assets/images/black.png'
						  ),
					), 
					'2' => array(
						'small' => array(
							'height' => 70,
							'width' => 70,
							'src'    => get_template_directory_uri() . '/assets/images/white.png'
						),
					),
					
				),
			), 
		   'theme_color' => array(  
				 'type'  => 'switch',
				 'value' => 'on',
				 'label' => esc_html__('Theme color Enable/Disable', 'selfintro'),
				   'left-choice' => array(
					    'value' => 'off',
					    'label' => esc_html__('Off', 'selfintro'),
				        ),
				   'right-choice' => array(
					     'value' => 'on',
					     'label' => esc_html__('On', 'selfintro'),
				         ),
				     ),
		 'selfintro_theme_color' => array(
				'label'   => esc_html__('Theme Color ', 'selfintro'),
				'type'    => 'image-picker',
				'value'   => '1',
				'desc'    => esc_html__( 'Select theme color.','selfintro' ),
				'choices' => array(
				    '0' => array(
						'small' => array(
							'height' => 70,
							'width' => 70,
							'src'    => get_template_directory_uri() . '/assets/images/color0.jpg'
						  ),
					), 
					'1' => array(
						'small' => array(
							'height' => 70,
							'width' => 70,
							'src'    => get_template_directory_uri() . '/assets/images/color1.jpg'
						  ),
					), 
					'2' => array(
						'small' => array(
							'height' => 70,
							'width' => 70,
							'src'    => get_template_directory_uri() . '/assets/images/color2.jpg'
						),
					),
					'3' => array(
						'small' => array(
							'height' => 70,
							'width' => 70,
							'src'    => get_template_directory_uri() . '/assets/images/color3.jpg'
						),
					),
					'4' => array(
						'small' => array(
							'height' => 70,
							'width' => 70,
							'src'    => get_template_directory_uri() . '/assets/images/color4.jpg'
						),
					),
				   '5' => array(
						'small' => array(
							'height' => 70,
							'width' => 70,
							'src'    => get_template_directory_uri() . '/assets/images/color5.jpg'
						),
					 ),
				   '6' => array(
						'small' => array(
							'height' => 70,
							'width' => 70,
							'src'    => get_template_directory_uri() . '/assets/images/color6.jpg'
						),
					 ),
					'7' => array(
						'small' => array(
							'height' => 70,
							'width' => 70,
							'src'    => get_template_directory_uri() . '/assets/images/color7.jpg'
						),
					 ),
				),
			),
			
		)
    )
);  
?> 