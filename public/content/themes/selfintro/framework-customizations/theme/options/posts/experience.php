<?php if(!defined( 'FW' ))  die('Forbidden') ;
$options = array(
	'post_setting' => array(
		'title' => esc_html__('Testimonial Page Setting', 'selfintro'),
		'type' => 'box',
		'options' => array(
		'city' => array(
                'type'  => 'text',
                'label' =>esc_html__('Enter City Name', 'selfintro'),
                'desc'  => esc_html__('', 'selfintro'),
                'value' => esc_html__('', 'selfintro'),
             ),
        'time_prode' => array(
                'type'  => 'text',
                'label' =>esc_html__('Enter Time Preode', 'selfintro'),
                'desc'  => esc_html__('', 'selfintro'),
                'value' => esc_html__('', 'selfintro'),
             ),    
        'year' => array(
                'type'  => 'text',
                'label' =>esc_html__('Enter Year', 'selfintro'),
                'desc'  => esc_html__('', 'selfintro'),
                'value' => esc_html__('', 'selfintro'),
             ),
		'blog_single_sidebar' => array(
				'label'   => esc_html__( 'Sidebar Position', 'selfintro' ),
				'type'    => 'image-picker',
				'value'   => esc_html__('right', 'selfintro' ),
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
				      'value' => esc_html__('no','selfintro'),
				      'label' => esc_html__('Show Breadcrumbs', 'selfintro'),
				      'left-choice' => array(
						'value' => esc_html__('no', 'selfintro'),
						'label' => esc_html__('No', 'selfintro'),
						),
				     'right-choice' => array(
						'value' => esc_html__('yes', 'selfintro'),
						'label' => esc_html__('Yes', 'selfintro'),
						  ),
						),
			'comment_switch' => array( 
                        'type'  => 'switch',
						'value' => esc_html__('no','selfintro'),
						'label' => esc_html__('Show Comment', 'selfintro'),
						'left-choice' => array(
								'value' => esc_html__('no','selfintro'),
								'label' => esc_html__('No', 'selfintro'),
								),
						'right-choice' => array(
								'value' => esc_html__('yes', 'selfintro'),
								'label' => esc_html__('Yes', 'selfintro'),
								),
							 ),
            'breadcrumbs_post_image'  => array( 
						  'label' => esc_html__('Breadcrumbs Background Image', 'selfintro'),
						  'desc' => esc_html__('Breadcrumbs Background Upload  image Here.', 'selfintro'),
						  'type' => 'upload', 
					        ),	
        	'testing'  => array(  
        				 'type' => 'text',
        				 'value' => esc_html__('','selfintro'),
        				 'desc' => esc_html__('Enter logo width size in pixels. Ex: 200', 'selfintro'),
        				),
           ),
	   ),
   );
?>