<?php
$options = array( 
    'services_settings' => array(
        'type' => 'tab',
        'title' => esc_html__('Services Section Setting', 'selfintro'),
        'options' => array(
        'services_heading'  => array( 
			'label' => esc_html__('Services Heading', 'selfintro'),
			'type' => 'text',
			'value' => '',
			'desc' => esc_html__('', 'selfintro'),
			), 	 
		'services_sub_heading'  => array( 
			'label' => esc_html__('Services Sub Heading', 'selfintro'),
			'type' => 'text',
			'value' => '',
			'desc' => esc_html__('', 'selfintro'),
			), 	 

		'services_about_images' =>array( 
		      'type' => 'addable-popup',
		      'value' => array(
			   array(
				    'services_about_images' => 'Services About Images',
			        ),
	     	     ),
		      'label' => esc_html__('Add Services About Images', 'selfintro'),
		      'template' => esc_html__('Services About Images','selfintro'),
		      'popup-title' => null, 
		      'size' => 'small', // small, medium, large
		      'limit' => 0, // limit the number of popup`s that can be added
	      	  'add-button-text' => esc_html__('Add', 'selfintro'), 
		      'sortable' => true,
		      'popup-options' => array(
		      'about_images' => array( 
			       'label' => esc_html__('Services About Images', 'selfintro'),
			       'desc' => esc_html__('Upload Services About Images Here.', 'selfintro'),
			        'type' => 'upload', 
			       ),   
			      ), 
	            ),		  
		'our_services' =>array( 
		      'type' => 'addable-popup',
		      'value' => array(
			   array(
				    'services' => 'Services Us Detail',
			        ),
	     	     ),
		      'label' => esc_html__('Add Services', 'selfintro'),
		      'template' => esc_html__('Add Services','selfintro'),
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
	           'descreption'  => array( 
				   'label' => esc_html__('Descreption', 'selfintro'),
				   'type' => 'wp-editor',
			   	   'value' => '',
				   'desc' => esc_html__('', 'selfintro'),
				   'media_buttons' => false,
			       'wpautop' => false,
			      ),	   
	           'services_icon'  => array( 
			       'label' => esc_html__('Services Icon', 'selfintro'),
			       'desc' => esc_html__('Upload Services Icon Here.', 'selfintro'),
			        'type' => 'upload', 
			       ),   
			      ), 
	            ),	
	    'award_bg_image'  => array( 
			  'label' => esc_html__('Award Background Image', 'selfintro'),
			  'desc' => esc_html__('Upload Award Background Image Here.', 'selfintro'),
			   'type' => 'upload', 
			 ),          
	   'our_award' =>array( 
		      'type' => 'addable-popup',
		      'value' => array(
			   array(
				    'our_award' => 'Our Award',
			        ),
	     	     ),
		      'label' => esc_html__('Add Award', 'selfintro'),
		      'template' => esc_html__('Add Award','selfintro'),
		      'popup-title' => null, 
		      'size' => 'small', // small, medium, large
		      'limit' => 0, // limit the number of popup`s that can be added
	      	  'add-button-text' => esc_html__('Add', 'selfintro'), 
		      'sortable' => true,
		      'popup-options' => array(
		      'award_title' => array(
		          'label' => esc_html__('Title', 'selfintro'),
		           'type' => 'text', 
	               ),
	     'award_number' => array(
		             'label' => esc_html__('Number', 'selfintro'),
		             'type' => 'text', 
	                 ), 
	    'award_icon'  => array( 
			       'label' => esc_html__('Services Icon', 'selfintro'),
			       'desc' => esc_html__('Upload Services Icon Here.', 'selfintro'),
			        'type' => 'upload', 
			       ),   
			      ), 
	            ),	
	    'skills_heading'  => array( 
    			'label' => esc_html__('Skills Heading', 'selfintro'),
    			'type' => 'text',
    			'value' => '',
    			'desc' => esc_html__('', 'selfintro'),
			), 	 
	    'skills_sub_heading'  => array( 
    			'label' => esc_html__('Skills Sub Heading', 'selfintro'),
    			'type' => 'text',
    			'value' => '',
    			'desc' => esc_html__('', 'selfintro'),
			), 	         
	   'our_skills' =>array( 
		      'type' => 'addable-popup',
		      'value' => array(
			   array(
				    'our_skills' => 'Our Skills',
			        ),
	     	     ),
		      'label' => esc_html__('Add Skills', 'selfintro'),
		      'template' => esc_html__('Add Skills','selfintro'),
		      'popup-title' => null,
		      'size' => 'small', // small, medium, large
		      'limit' => 0, // limit the number of popup`s that can be added
	      	  'add-button-text' => esc_html__('Add', 'selfintro'), 
		      'sortable' => true,
		      'popup-options' => array(
		      'skills_title' => array(
		          'label' => esc_html__('Title', 'selfintro'),
		           'type' => 'text', 
	               ),
	            'skills_number' => array(
		             'label' => esc_html__('Number', 'selfintro'),
		             'type' => 'text', 
	                 ),
	           'skills_color_bgFill' => array(
                    'label' => __('Color BgFill', 'selfintro'),
                    'desc' => __('Select the BgFill color', 'selfintro'),
                    'value' => '',
                    'type' => 'color-picker'
                ),
                'skills_color_frFill' => array(
                    'label' => __('Color FrFill', 'selfintro'),
                    'desc' => __('Select the FrFill color', 'selfintro'),
                    'value' => '',
                    'type' => 'color-picker'
                ),
                'skills_textcolor' => array(
                    'label' => __('Text Color', 'selfintro'),
                    'desc' => __('Select the Text color', 'selfintro'),
                    'value' => '',
                    'type' => 'color-picker'
                ),
	            'skills_icon'  => array( 
			       'label' => esc_html__('Services Icon', 'selfintro'),
			       'desc' => esc_html__('Upload Services Icon Here.', 'selfintro'),
			        'type' => 'upload', 
			       ),   
			      ), 
	            ),	
				
	    'clients_heading'  => array( 
    			'label' => esc_html__('Clients Heading', 'selfintro'),
    			'type' => 'text',
    			'value' => '',
    			'desc' => esc_html__('', 'selfintro'),
			), 	 
	    'clients_sub_heading'  => array( 
    			'label' => esc_html__('Clients Sub Heading', 'selfintro'),
    			'type' => 'text',
    			'value' => '',
    			'desc' => esc_html__('', 'selfintro'),
			), 	 
        'our_clients' =>array( 
		      'type' => 'addable-popup',
		      'value' => array(
			   array(
				    'our_clients' => 'Our Clients',
			        ),
	     	     ),
		      'label' => esc_html__('Add Clients', 'selfintro'),
		      'template' => esc_html__('Our Clients','selfintro'),
		      'popup-title' => null,
		      'size' => 'small', // small, medium, large
		      'limit' => 0, // limit the number of popup`s that can be added
	      	  'add-button-text' => esc_html__('Add', 'selfintro'), 
		      'sortable' => true,
		      'popup-options' => array(
		        'clients_icon'  => array( 
			       'label' => esc_html__('Services Icon', 'selfintro'),
			       'desc' => esc_html__('Upload Services Icon Here.', 'selfintro'),
			        'type' => 'upload', 
			       ), 
					'clients_url'  => array( 
    			'label' => esc_html__('Clients Url', 'selfintro'),
    			'type' => 'text',
    			'value' => '',
    			'desc' => esc_html__('', 'selfintro'),
			),
			       
			      ), 
	            ),	
	                
               )
             )
         );