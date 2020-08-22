<?php
$options = array(
    'portfolio_settings' => array(
        'type' => 'tab',
        'title' => esc_html__('Portfolio Section Setting', 'selfintro'),
        'options' => array(
        'portfolio_heading'  => array( 
			'about_label' => esc_html__('Portfolio Heading', 'selfintro'),
			'type' => 'text',
			'value' => '',
			'desc' => esc_html__('', 'selfintro'),
			), 
		'portfolio_sub_heading'  => array( 
			'label' => esc_html__('Portfolio Sub Heading', 'selfintro'),
			'type' => 'text',
			'value' => '',
			'desc' => esc_html__('', 'selfintro'),
			),
		'portfolio_show_number'  => array( 
			'label' => esc_html__('Show Number Of Portfolio', 'selfintro'),
			'type' => 'text',
			'value' => '',
			'desc' => esc_html__('', 'selfintro'),
			),	
		'portfolio_load_number'  => array( 
			'label' => esc_html__('Show Load More Number Of Portfolio', 'selfintro'),
			'type' => 'text',
			'value' => '',
			'desc' => esc_html__('', 'selfintro'),
			),		
		   )
         )
     );