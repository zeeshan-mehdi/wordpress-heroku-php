<?php 
    $options = array(
     'banner_settings' => array(
        'type' => 'tab',
        'title' => esc_html__('Video Banner Setting', 'selfintro'),
        'options' => array(
            'banner_video_switch' => array(
				      'type'  => 'switch',
				      'value' => 'on',
				      'label' => esc_html__('Video Banner Enable/Disable', 'selfintro'),
				'left-choice' => array(
					 'value' => 'off',
					 'label' => esc_html__('Off', 'selfintro'),
				     ),
				'right-choice' => array(
					     'value' => 'on',
					     'label' => esc_html__('On', 'selfintro'),
				         ),
			           ),
			'video_url'=> array(
						'type'  => 'oembed',
						'value' => '',
						'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
						'label' => __('Video Url', 'selfintro'),
						'desc'  => __('', 'selfintro'),
					),
			
				) 
             ) 
        ); 
