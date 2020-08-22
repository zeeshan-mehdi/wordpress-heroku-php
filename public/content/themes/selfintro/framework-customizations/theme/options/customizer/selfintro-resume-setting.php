<?php
$options = array(
    'resume_settings' => array(
        'type' => 'tab',
        'title' => esc_html__('Resume Button Setting', 'selfintro'),
        'options' => array(
		'button_on_off' => array(
				'type'  => 'switch',
				'label' => esc_html__('Button On Off','selfintro'),
				'value' => esc_html__('Off', 'selfintro'),
				'left-choice' => array(
					'value' => 'off',
					'label' => __('Off', '{domain}'),
				),
				'right-choice' => array(
					'value' => 'on',
					'label' => __('On', '{domain}'),
				),
					),
        'button_text'  => array( 
			'about_label' => esc_html__('Button Title', 'selfintro'),
			'type' => 'text',
			'value' => '',
			'desc' => esc_html__('', 'selfintro'),
			), 
		'resume_download'  => array(
			   'type'  => 'upload',
			   'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
			   'label' => __('Resume File Upload', 'selfintro'),
			   'desc'  => __('Resume File Upload', 'selfintro'),
			   'help'  => __('Help tip', 'selfintro'),
			   'images_only' => false,
			  ),
		'resume_download_url'  => array( 
				'about_label' => esc_html__('Resume Download File Link', 'selfintro'),
				'type' => 'text',
				'value' => '',
				 'desc' => esc_html__('', 'selfintro'),
				 ),		
		   )
         )
     );