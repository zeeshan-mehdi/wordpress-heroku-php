<?php 
if (!defined( 'FW' ))  die('Forbidden') ;
$options = array(
	'post_setting' => array(
		'title' => esc_html__('Product Single Page Setting', 'selfintro'),
		'type' => 'box',
		'options' => array(
		    'video_url' => array(  
                'type'  => 'text',
                'label' => esc_html__('Enter Video Url', 'selfintro'),
                'desc'  => esc_html__('', 'selfintro'),
                'value' => esc_html__('', 'selfintro'),
                ),
			'blog_single_sidebar' => array(
				'label'   => esc_html__( 'Sidebar Position', 'selfintro' ),
				'type'    => 'image-picker',
				'value'   => 'right',
				'desc'    => esc_html__( 'Select main content and sidebar alignment. Choose between 1, 2 or 3 column layout.','selfintro' ),
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
            'breadcrumbs_switch' => array( 
                        'type'  => 'switch',
						'value' => 'yes',
						'label' => esc_html__('Show Breadcrumbs', 'selfintro'),
						'right-choice' => array(
								'value' => 'yes',
								'label' => esc_html__('Yes', 'selfintro'),
								),
						'left-choice' => array(
								'value' => 'no',
								'label' => esc_html__('No', 'selfintro'),
								),
						),
			'comment_switch' => array( 
                        'type'  => 'switch',
						'value' => 'yes',
						'label' => esc_html__('Show Comment', 'selfintro'),
						'right-choice' => array(
								'value' => 'yes',
								'label' => esc_html__('Yes', 'selfintro'),
								),
						'left-choice' => array(
								'value' => 'no',
								'label' => esc_html__('No', 'selfintro'),
								),
						),
            'breadcrumbs_post_image'  => array( 
						 'label' => esc_html__('Breadcrumbs Background  Image', 'selfintro'),
						 'desc' => esc_html__('Breadcrumbs Background  Upload  image Here.', 'selfintro'),
						 'type' => 'upload', 
					    ),	
			'breadcrumbs_post_color'  =>array(
                       'type'  => 'color-picker',
                       'value' => '',
                       'palettes' => array( '#ba4e4e', '#0ce9ed', '#941940' ),
                       'label' => __('Breadcrumbs Bg Color Option', 'selfintro'),
                       'desc'  => __('Breadcrumbs Bg Color Option', 'selfintro'),
                       'help'  => __('Help tip', 'selfintro'),
                      ),  
			    ),
	        ),
    );
?>