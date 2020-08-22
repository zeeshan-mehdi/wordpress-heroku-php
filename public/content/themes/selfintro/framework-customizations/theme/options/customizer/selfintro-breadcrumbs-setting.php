<?php 
$options = array(
     'breadcrumbs_settings' => array(
        'type' => 'tab',
        'title' => esc_html__('Breadcrumbs Setting', 'selfintro'),
        'options' => array(
            'breadcrumbs_switch' => array(
				      'type'  => 'switch',
				      'value' => 'on',
				      'label' => esc_html__('Breadcrumbs Enable/Disable', 'selfintro'),
				              'left-choice' => array(
					                           'value' => 'off',
					                           'label' => esc_html__('Off', 'selfintro'),
				                              ),
				              'right-choice' => array(
					                         'value' => 'on',
					                         'label' => esc_html__('On', 'selfintro'),
				                            ),
			                         ),
			'breadcrumbs_image'  => array( 
						 'label' => esc_html__('Breadcrumbs Background Image', 'selfintro'),
						 'desc' => esc_html__('Breadcrumbs Background Upload  image Here.', 'selfintro'),
						 'type' => 'upload', 
					  ),
					  
		   	     )
             ) 
        ); 
