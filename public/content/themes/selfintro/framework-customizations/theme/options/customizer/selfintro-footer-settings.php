<?php
$options = array(
    'footer_settings' => array(
        'type' => 'tab',
        'title' => esc_html__('Footer Setting', 'selfintro'),
        'options' => array(
            'footer_copyrigth' => array(
				'label' => esc_html__('Copyright', 'selfintro'),
				'desc' => esc_html__('Enter Copyright Text Here.', 'selfintro'),
				'type' => 'text', 
				'value' => ''
			      ),
                 )
              )
          ); 
?> 