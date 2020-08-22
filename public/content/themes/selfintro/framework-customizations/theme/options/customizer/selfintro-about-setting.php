<?php 
$options = array(
    'about_section_settings' => array(
        'type' => 'tab',
        'title' => esc_html__('About Section Setting', 'selfintro'),
        'options' => array(
		'heading'  => array( 
			'about_label' => esc_html__('Heading', 'selfintro'),
			'type' => 'text',
			'value' => '',
			'desc' => esc_html__('', 'selfintro'),
			), 
		'heading_sub'  => array( 
			'about_label' => esc_html__('Sub Heading', 'selfintro'),
			'type' => 'text',
			'value' => '',
			'desc' => esc_html__('', 'selfintro'),
			),
		'about_image'  => array( 
			'label' => esc_html__('About Image', 'selfintro'),
			'desc' => esc_html__('Upload about image Here.', 'selfintro'),
			'type' => 'upload', 
		 ),	
		'about_desc'  => array( 
				'label' => esc_html__('Description', 'selfintro'),
				'type' => 'wp-editor',
				'value' => '',
				'desc' => esc_html__('', 'selfintro'),
				'media_buttons' => false,
				'wpautop' => false,
			),
		'resume_download'  => array( 
		    'about_label' => esc_html__('Resume Download File Link', 'selfintro'),
		    'type' => 'text',
		    'value' => '',
		    'desc' => esc_html__('', 'selfintro'),
		 ),
		'hire_me'  => array( 
		    'about_label' => esc_html__('Hire Me Url', 'selfintro'),
		    'type' => 'text',
		    'value' => '',
		    'desc' => esc_html__('', 'selfintro'),
		 ), 
		 'profiles_slider' =>array( 
		      'type' => 'addable-popup',
		      'value' => array(
			   array(
				   'profiles_slider' => 'Profiles Slider',
			       ),
	     	   ),
		     'label' => esc_html__('Add Profiles Slider', 'selfintro'),
		     'template' => esc_html__('Profiles Slider','selfintro'),
		     'popup-title' => null,
		     'size' => 'small', // small, medium, large
		     'limit' => 0, // limit the number of popup`s that can be added
	      	 'add-button-text' => esc_html__('Add', 'selfintro'), 
		     'sortable' => true,
		     'popup-options' => array(
		           'title' => array(
		           'label' => esc_html__('Title', 'selfintro'),
		           'type' => 'text', 
	                    ),
	               'profile_image'  => array( 
			         'label' => esc_html__('Profile Images', 'selfintro'),
			         'desc' => esc_html__('Upload Profile images Here.', 'selfintro'),
			         'type' => 'upload', 
			          ), 
				   'profiles_url'  => array( 
					 'label' => esc_html__('profiles Url', 'selfintro'),
					 'type' => 'text',
					 'value' => '',
					 'desc' => esc_html__('', 'selfintro'),
					),					  
			        ), 
	               ),
	    'profiles_title'  => array( 
			    'profiles_label' => esc_html__('Profiles Heading', 'selfintro'),
		 	    'type' => 'text',
			    'value' => '',
			    'desc' => esc_html__('', 'selfintro'),
			   ), 
	    'profiles_sub_title'  => array( 
			    'profiles_label' => esc_html__('Profiles Sub Heading', 'selfintro'),
		 	    'type' => 'text',
			    'value' => '',
			    'desc' => esc_html__('', 'selfintro'),
			   ), 
	    'profiles_desc'  => array( 
				'label' => esc_html__('Profiles Description', 'selfintro'),
				'type' => 'wp-editor',
				'value' => '',
				'desc' => esc_html__('', 'selfintro'),
				'media_buttons' => false,
				'wpautop' => false,
			),
		'education_heading'  => array( 
			'label' => esc_html__('Education Heading', 'selfintro'),
			'type' => 'text',
			'value' => '',
			'desc' => esc_html__('', 'selfintro'),
			), 	 
		'education_sub_heading'  => array( 
			'label' => esc_html__('Education Sub Heading', 'selfintro'),
			'type' => 'text',
			'value' => '',
			'desc' => esc_html__('', 'selfintro'),
			), 	  		
		'education_number'  => array( 
			'label' => esc_html__('Show Number Of Education', 'selfintro'),
			'type' => 'text',
			'value' => '',
			'desc' => esc_html__('', 'selfintro'),
			), 	 
		'experience_heading'  => array( 
			'label' => esc_html__('Experience Heading', 'selfintro'),
			'type' => 'text',
			'value' => '',
			'desc' => esc_html__('', 'selfintro'),
			), 	 
		'experience_sub_heading'  => array( 
			'label' => esc_html__('Experience Sub Heading', 'selfintro'),
			'type' => 'text',
			'value' => '',
			'desc' => esc_html__('', 'selfintro'),
			), 	  		
		'experience_number'  => array( 
			'label' => esc_html__('Show Number Of Experience', 'selfintro'),
			'type' => 'text',
			'value' => '',
			'desc' => esc_html__('', 'selfintro'),
			), 	 
		'blog_heading' => array(
    		'type'  => 'text',
    		'label' => esc_html__('Enter Blog Heading', 'selfintro'),
		),
    	'blog_sub_heading' => array(
    		'type'  => 'text',
    		'label' => esc_html__('Enter Blog Sub Heading', 'selfintro'),
		),
       'show_blog' => array(
			'type'  => 'text',
			'label' => esc_html__('Enter Number Show Blog', 'selfintro'),
			),
			
		)
    )
);
?>