<?php
$options = array(
    'woocommerce_settings' => array(
        'type' => 'tab',
        'title' => esc_html__('WooCommerce Setting', 'selfintro'),
        'options' => array(
		   'woocommerce_minicart' => array(
				      'type'  => 'switch',
				      'value' => 'on',
				      'label' => esc_html__('WooCommerce Mini Cart Enable/Disable', 'selfintro'),
				    'left-choice' => array(
					                 'value' => 'off',
					                 'label' => esc_html__('Off', 'selfintro'),
				                     ),
				    'right-choice' => array(
					                 'value' => 'on',
					                 'label' => esc_html__('On', 'selfintro'),
				                  ),
			                 ),
		    'shop_pageurl'  => array( 
			     'about_label' => esc_html__('Shop Page Url', 'selfintro'),
			     'type' => 'text',
			     'value' => '',
			     'desc' => esc_html__('', 'selfintro'),
			     ),	
			'shop_icon'  => array( 
			     'about_label' => esc_html__('Shop Icon', 'selfintro'),
			     'type' => 'textarea',
			     'value' => '',
			     'desc' => esc_html__('', 'selfintro'),
			     ),					 
		    'woocommerce_sidebar' => array(
				'label'   => esc_html__( 'WooCommerce Sidebar Position', 'selfintro' ),
				'type'    => 'image-picker',
				'value'   => 'right',
				'desc'    => esc_html__( 'Select WooCommerce sidebar alignment. Choose between 1, 2 or 3 column layout.','selfintro' ),
				'choices' => array(
					'full' => array(
						'small' => array(
							'height' => 40,
							'src'    => get_template_directory_uri() . '/assets/images/1c.png'
						),
					),
					'left' => array(
						'small' => array(
							'height' => 40,
							'src'    => get_template_directory_uri() . '/assets/images/2cl.png'
						),
					),
					'right' => array(
						'small' => array(
							'height' => 40,
							'src'    => get_template_directory_uri() . '/assets/images/2cr.png'
						),
					),
				),
			),			 
							 
                 )
           )
     );
?> 