<?php 
$options = array(
     'type_settings' => array(
        'type' => 'tab',
        'title' => esc_html__('Typed Banner Setting', 'selfintro'),
        'options' => array(
            'banner_switch_typed' => array(
				      'type'  => 'switch',
				      'value' => 'off',
				      'label' => esc_html__('Typed Banner Enable/Disable', 'selfintro'),
				'left-choice' => array(
					 'value' => 'off',
					 'label' => esc_html__('Off', 'selfintro'),
				     ),
				'right-choice' => array(
					     'value' => 'on',
					     'label' => esc_html__('On', 'selfintro'),
				         ),
			           ),
			     )
             ) 
        );  