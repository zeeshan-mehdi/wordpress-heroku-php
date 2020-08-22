<?php 
if (!defined( 'FW' ))  die('Forbidden') ;
$options = array(
	'post_setting' => array(
		'title' => esc_html__('Blog Single Page Setting', 'selfintro'),
		'type' => 'box',
		'options' => array(
		    'portfolio_style' => array(
                'label'   => __('Portfolio select Style', 'selfintro'),
                'desc'    => __('Portfolio select Layou1Style', 'selfintro'),
                'type'    => 'select',
                'choices' => array(
                    'style1'  => __('style 1', 'selfintro'),
                    'style2'  => __('style 2', 'selfintro'),
                ),
                'value'   => 'style1'
            ),
		    'image_sub_title' => array(
		           'label' => esc_html__('Image Sub Title', 'selfintro'),
		           'type' => 'text',
	              ), 
		     'video_title' => array(
		           'label' => esc_html__('Video Title', 'selfintro'),
		           'type' => 'text',
	              ), 
	       'video_sub_title' => array(
		           'label' => esc_html__('Video Sub Title', 'selfintro'),
		           'type' => 'text',
	              ), 
	       'video_url' => array(
		           'label' => esc_html__('Youtube Video Url', 'selfintro'),
		           'type' => 'text',
	              ), 
		    'video_image'  => array( 
					'label' => esc_html__('Portfolio Video Image', 'selfintro'),
					'desc' => esc_html__('Portfolio Video Image Upload  image Here.', 'selfintro'),
					'type' => 'upload', 
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
						'value' => 'no',
						'label' => esc_html__('Show Breadcrumbs', 'selfintro'),
						'left-choice' => array(
								'value' => 'no',
								'label' => esc_html__('No', 'selfintro'),
								),
						'right-choice' => array(
								'value' => 'yes',
								'label' => esc_html__('Yes', 'selfintro'),
								),
						),
		'comment_switch' => array( 
                        'type'  => 'switch',
						'value' => 'no',
						'label' => esc_html__('Show Comment', 'selfintro'),
						'left-choice' => array(
								'value' => 'no',
								'label' => esc_html__('No', 'selfintro'),
								),
						'right-choice' => array(
								'value' => 'yes',
								'label' => esc_html__('Yes', 'selfintro'),
								),
							 ),
            'breadcrumbs_post_image'  => array( 
						    'label' => esc_html__('Breadcrumbs Background Image', 'selfintro'),
						    'desc' => esc_html__('Breadcrumbs Background  Upload  image Here.', 'selfintro'),
						    'type' => 'upload', 
					        ),	
			
			        ),
	         ),
      );
?>