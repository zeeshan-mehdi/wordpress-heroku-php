<?php
/**
 * Top Header
 */
$options = array(
    'custom_menu_settings' => array(
           'type' => 'tab',
           'title' => esc_html__('Custom Menu Setting', 'selfintro'),
           'options' => array(
            'banner_image'  => array( 
			   'label' => esc_html__('Banner Image', 'selfintro'),
			   'desc' => esc_html__('Upload Banner image Here.', 'selfintro'),
			   'type' => 'upload', 
			 ),    
			'text_image'  => array( 
			   'label' => esc_html__('Text Image', 'selfintro'),
			   'desc' => esc_html__('Upload Banner image Here.', 'selfintro'),
			   'type' => 'upload', 
			  ),   
			'us_text' => array(
		          'label' => esc_html__('Text here', 'selfintro'),
		          'type' => 'text',
	           ),
           'custom_menu' =>array( 
		      'type' => 'addable-popup',
		      'value' => array(
			   array(
				     'Custom_Menu_title' => '',
			       ),
	     	     ),
		     'label' => esc_html__('Add Custom Menu', 'selfintro'),
		     'template' => esc_html__('Add Custom Menu', 'selfintro'),
		     'popup-title' => null,  
		     'size' => 'small', // small, medium, large
		     'limit' => 0, // limit the number of popup`s that can be added
	      	 'add-button-text' => esc_html__('Add', 'selfintro'), 
		     'sortable' => true,
		     'popup-options' => array(
		           
		           'title' => array(
		                'label' => esc_html__('Menu Name', 'selfintro'),
		                 'type' => 'text',
	                    ),
	               'menu_id' => array(
		                'label' => esc_html__('Menu ID', 'selfintro'),
		                 'type' => 'text',
	                    ),
	               'class_style' => array( 
                        'type'  => 'select',
                        'label' => esc_html__('Select Header','selfintro'),
                        'value' => esc_html__('prt_top', 'selfintro'),
                        'choices' => array(
                        'prt_top' => esc_html__('prt top', 'selfintro'),
                        'prt_right' => esc_html__('prt right', 'selfintro'),
                        'prt_bottom' => esc_html__('prt bottom', 'selfintro'),
                        'prt_left' => esc_html__('prt left', 'selfintro'),
                         
                          ),
                        ),
			
                    ), 
	               ),
				'bg_image'  => array( 
						'label' => esc_html__('Section Background Image', 'selfintro'),
						'desc' => esc_html__('Section Background Image', 'selfintro'),
						'type' => 'upload', 
					),
				'header_style' => array(
                        'type'  => 'select',
                            'label' => esc_html__('Select Header Style','selfintro'),
                            'value' => esc_html__('header_left', 'selfintro'),
                            'choices' => array(
                                    'header_left' => esc_html__('Header Left', 'selfintro'),
                                    'header_top' => esc_html__('Header Top', 'selfintro'),
                                    'header_bottom' => esc_html__('Header Bottom', 'selfintro'),
									 ), 
                                ),
             
				),
			),
			
        );