<?php 
if (!defined( 'FW' ))  die('Forbidden') ;
$options = array(
	'post_setting' => array(
		'title' => esc_html__('Blog Single Page Setting', 'selfintro'),
		'type' => 'box', 
		'options' => array(
		    'facebook' => array(
                              'type'  => 'text',
                              'label' =>esc_html__('Facebook Page Url', 'selfintro'),
                              'desc'  => esc_html__('', 'selfintro'),
                              'value' => esc_html__('', 'selfintro'),
                              ),
            'twitter' => array(
                              'type'  => 'text',
                              'label' =>esc_html__('Twitter Page Url', 'selfintro'),
                              'desc'  => esc_html__('', 'selfintro'),
                              'value' => esc_html__('', 'selfintro'),
                              ),
            'googleplus' => array(
                              'type'  => 'text',
                              'label' =>esc_html__('Google Plus Page Url', 'selfintro'),
                              'desc'  => esc_html__('', 'selfintro'),
                              'value' => esc_html__('', 'selfintro'),
                              ),
            'linkedin' => array(
                              'type'  => 'text',
                              'label' =>esc_html__('Linkedin Page Url', 'selfintro'),
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
	    'icon_add' =>	array(
                'type'  => 'icon-v2',
                'preview_size' => 'medium',
                'modal_size' => 'medium',
                'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
                'label' => __('Add Icon', 'selfintro'),
                'desc'  => __('Description', 'selfintro'),
                'help'  => __('Help tip', 'selfintro'),
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