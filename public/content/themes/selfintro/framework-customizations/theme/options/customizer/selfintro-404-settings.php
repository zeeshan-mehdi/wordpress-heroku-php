<?php
$options = array(
    'error_404_settings' => array(
        'type' => 'tab',
        'title' => esc_html__('404 Setting', 'selfintro'),
        'options' => array(
		    'error_404_heading'  => array( 
				'label' => esc_html__('Heading', 'selfintro'),
				'type' => 'text',
				'value' => '404',
				'desc' => esc_html__('', 'selfintro'),
			),
			'error_404_desc'  => array( 
				'label' => esc_html__('Title', 'selfintro'),
				'type' => 'wp-editor',
				'value' => 'Sorry, This Page Is Not Available',
				'desc' => esc_html__('', 'selfintro'),
				'media_buttons' => false,
				'wpautop' => false,
			),
			
		)
    ) 
);  
?> 