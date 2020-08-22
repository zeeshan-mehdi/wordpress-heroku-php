<?php
$options = array(
    'general_settings' => array(
        'type' => 'tab',
        'title' => esc_html__('General Setting', 'selfintro'),
        'options' => array(
		 'singlepage_switch' => array(
				'type'  => 'switch',
				'value' => 'off',
				'label' => esc_html__('Single Page Enable/Disable', 'selfintro'),
				'left-choice' => array(
					      'value' => 'off', 
					      'label' => esc_html__('Off', 'selfintro'),
				        ),
				'right-choice' => array(
					         'value' => 'on',
					         'label' => esc_html__('On', 'selfintro'),
				            ),
			 ), 
			'logo_setting' => array(
				'type' => 'group',
				'options' => array(
					'logo_image'  => array( 
						'label' => esc_html__('Logo Image', 'selfintro'),
						'desc' => esc_html__('Upload logo image Here.', 'selfintro'),
						'type' => 'upload', 
					),
					'logo_width'  => array( 
						'type' => 'text',
						'value' => '111',
						'desc' => esc_html__('Enter logo width size in pixels. Ex: 200', 'selfintro'),
				    	),
					'logo_height'  => array( 
						'type' => 'text',
						'value' => '111',
						'desc' => esc_html__('Enter logo width size in pixels. Ex: 200', 'selfintro'),
					),
					'logo_svgcode'  => array(
						'type'  => 'textarea',
						'value' => '',
						'label' => __('Logo Svg Code', 'selfintro'),
						'desc'  => __('Enter svg code', 'selfintro'),
					),
				), 
			),
           'loader_switch' => array(
			    'type'  => 'switch',
		        'value' => 'on',
		        'label' => esc_html__('Loader Enable/Disable', 'selfintro'),
		        'left-choice' => array(
				'value' => 'off',
				'label' => esc_html__('Off', 'selfintro'),
				 ),
		        'right-choice' => array(
					  'value' => 'on',
					  'label' => esc_html__('On', 'selfintro'),
				           ),
			             ),
                'loader_image'  => array( 
        			'label' => esc_html__('Loader Image', 'selfintro'),
        			'desc' => esc_html__('Upload logo image Here.', 'selfintro'),
        			'type' => 'upload', 
        			),

		 )
    )
);
?> 