<?php
$options = array(
    'shop_settings' => array(
        'type' => 'tab',
        'title' => esc_html__('Shop Section Setting', 'selfintro'),
        'options' => array(
        'shop_heading'  => array( 
			'about_label' => esc_html__('Shop Heading', 'selfintro'),
			'type' => 'text',
			'value' => '',
			'desc' => esc_html__('', 'selfintro'),
			), 
		'shop_sub_heading'  => array( 
			'label' => esc_html__('Shop Sub Heading', 'selfintro'),
			'type' => 'text',
			'value' => '',
			'desc' => esc_html__('', 'selfintro'),
			),	
		'shop_product_show'  => array( 
			'label' => esc_html__('Show Number Of Products', 'selfintro'),
			'type' => 'text',
			'value' => '',
			'desc' => esc_html__('', 'selfintro'),
			),	
        'shop_product_load'  => array( 
			'label' => esc_html__('Load Number Of Products', 'selfintro'),
			'type' => 'text',
			'value' => '',
			'desc' => esc_html__('', 'selfintro'),
			),				
		   )
         )
     );