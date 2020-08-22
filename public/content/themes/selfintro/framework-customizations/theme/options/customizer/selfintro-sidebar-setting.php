<?php
$options = array(
    'sidebar_settings' => array(
        'type' => 'tab',
        'title' => esc_html__('Sidebar Setting', 'selfintro'),
        'options' => array(
		'blog_sidebar' => array(
				'label'   => esc_html__( 'Blog Sidebar Position', 'selfintro'),
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
		 'archive_sidebar' => array(
				'label'   => esc_html__( 'Archive Sidebar Position', 'selfintro' ),
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
		
		'search_sidebar' => array(
				'label'   => esc_html__( 'Search Sidebar Position', 'selfintro' ),
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
			
		 )
    )
); 
?>