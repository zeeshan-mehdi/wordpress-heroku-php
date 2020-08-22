<?php
$options = array(
    'contactus_settings' => array(
        'type' => 'tab',
        'title' => esc_html__('Contact Section Setting', 'selfintro'),
        'options' => array(
        'map_apikey' => array( 
			'type' => 'text',
			'value' => '',
			'desc' => esc_html__('Enter Google Map Api Key https://developers.google.com/maps/documentation/javascript/get-api-key', 'selfintro'),
			     ),
		'contact_us_heading'  => array( 
			'label' => esc_html__('Contact Us Heading', 'selfintro'),
			'type' => 'text',
			'value' => '',
			'desc' => esc_html__('', 'selfintro'),
			), 	 
		'contact_us_sub_heading'  => array( 
			'label' => esc_html__('Contact Us Sub Heading', 'selfintro'),
			'type' => 'text',
			'value' => '',
			'desc' => esc_html__('', 'selfintro'),
			), 	 
		'form_heading'  => array( 
			'label' => esc_html__('Contact Us Form Heading', 'selfintro'),
			'type' => 'text',
			'value' => '',
			'desc' => esc_html__('', 'selfintro'),
			), 	 	
		'form_shortcode'  => array( 
			 'label' => esc_html__('Add Form Shortcode', 'selfintro'),
		 	 'type' => 'text',
			 'value' => '',
			 'desc' => esc_html__('', 'selfintro'),
			),   
		'googlemap_ifram'  => array( 
				'label' => esc_html__('Add Google Map Ifram', 'selfintro'),
				'type' => 'wp-editor',
				'value' => '',
				'desc' => esc_html__('', 'selfintro'),
				'media_buttons' => false,
				'wpautop' => false,
			),	     
		'contactus_detail' =>array( 
		      'type' => 'addable-popup',
		      'value' => array(
			   array(
				    'contactus_address' => 'Contact Us Detail',
			        ),
	     	     ),  
		      'label' => esc_html__('Add Contact Address', 'selfintro'),
		      'template' => esc_html__('Contact Us Detail','selfintro'),
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
	           'address_info'  => array( 
				   'label' => esc_html__('Address Information', 'selfintro'),
				   'type' => 'wp-editor',
			   	   'value' => '',
				   'desc' => esc_html__('', 'selfintro'),
				   'media_buttons' => false,
			       'wpautop' => false,
			      ),	   
	           'add_bg_image'  => array( 
			        'label' => esc_html__('Background Image', 'selfintro'),
			        'desc' => esc_html__('Upload Profile images Here.', 'selfintro'),
			         'type' => 'upload', 
			       ),   
			      ), 
	            ),	
	         'map_address' => array(
		           'label' => esc_html__('Google Map Address', 'selfintro'),
		           'type' => 'text',
	              ),
	        'longitude' => array(
		           'label' => esc_html__('Longitude', 'selfintro'),
		           'type' => 'text',
	              ), 
             'latitude' => array(
		           'label' => esc_html__('Latitude', 'selfintro'),
		           'type' => 'text',
	               ),
	         'map_zoom' => array(
			    'type'  => 'text',
				'label' => esc_html__('Enter Google Map Zoom', 'selfintro'),
				),
	       'geometry' => array(
            'type'  => 'color-picker',
            'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
            'label' => __('Map Geometry Color Set', 'selfintro'),
            'desc'  => __('Map Geometry Color', 'selfintro'),
           ),
        'labelstextstroke' => array(
            'type'  => 'color-picker',
            'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
            'label' => __('Map Labelstextstroke Color Set', 'selfintro'),
            'desc'  => __('Map Labelstextstroke Color', 'selfintro'),
           ),
	     'labelstextfill' => array(
            'type'  => 'color-picker',
            'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
            'label' => __('Map Labelstextfill Color Set', 'selfintro'),
            'desc'  => __('Map Labelstextfill Color', 'selfintro'),
            ),
	    'locality_text_fill_color' => array(
            'type'  => 'color-picker',
            'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
            'label' => __('Map Locality Text Fill Color Set', 'selfintro'),
            'desc'  => __('Map Locality Text Fill Color', 'selfintro'),
           ),
		    'poi_text_fill_color' => array(
            'type'  => 'color-picker',
            'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
            'label' => __('Map Poi Text Fill Color Set', 'selfintro'),
            'desc'  => __('Map Poi Text Fill Color', 'selfintro'),
           ),
	  
	    'poipark_text_fill_color' => array(
            'type'  => 'color-picker',
            'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
            'label' => __('Map Poi Park Text Fill Color Set', 'selfintro'),
            'desc'  => __('Map Poi Park Text Fill Color', 'selfintro'),
           ),	   
	  'poi_park_geometry_color' => array(
            'type'  => 'color-picker',
            'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
            'label' => __('Map Poi Park Geometry Color Set', 'selfintro'),
            'desc'  => __('Map Poi Park Geometry Color', 'selfintro'),
           ),
	  'road_geometry_color' => array(
            'type'  => 'color-picker',
            'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
            'label' => __('Road Geometry Color Set', 'selfintro'),
            'desc'  => __('Road Geometry Color', 'selfintro'),
           ),
	  'road_geometry_stroke_color' => array(
            'type'  => 'color-picker',
            'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
            'label' => __('Map Road Geometry Stroke Color Set', 'selfintro'),
            'desc'  => __('Map Road Geometry Stroke Color', 'selfintro'),
           ),
	  'road_text_fill_color' => array(
            'type'  => 'color-picker',
            'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
            'label' => __('Map Road Text Fill Color Set', 'selfintro'),
            'desc'  => __('Map Road Text Fill Color', 'selfintro'),
           ),
	  'road_highway_geometry_color' => array(
            'type'  => 'color-picker',
            'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
            'label' => __('Map Road Highway Geometry Color Set', 'selfintro'),
            'desc'  => __('Map Road Highway Geometry Color', 'selfintro'),
           ),
	  'roadhighway_geometry_stroke_color' => array(
            'type'  => 'color-picker',
            'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
            'label' => __('Map Road Hightway Geometry Stroke Color Set', 'selfintro'),
            'desc'  => __('Map Road Hightway Geometry Stroke Color', 'selfintro'),
           ),
	  'roadhighway_text_fill_color' => array(
            'type'  => 'color-picker',
            'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
            'label' => __('Map Road Highway Text Fill Color Set', 'selfintro'),
            'desc'  => __('Map Road Highway Text Fill Color', 'selfintro'),
           ), 
	  'transit_geometry_color' => array(
            'type'  => 'color-picker',
            'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
            'label' => __('Map Transit Geometry Color Set', 'selfintro'),
            'desc'  => __('Map Transit Geometry Color', 'selfintro'),
           ),
	  'transitstation_text_fill_color' => array(
            'type'  => 'color-picker',
            'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
            'label' => __('Map Transit Station Text Fill Color Set', 'selfintro'),
            'desc'  => __('Map Transit Station Text Fill Color', 'selfintro'),
           ),
	  'water_geometry' => array(
            'type'  => 'color-picker',
            'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
            'label' => __('Map Water Geometry Color Set', 'selfintro'),
            'desc'  => __('Map Water Geometry Color', 'selfintro'),
           ),
	  'water_text_fill_color' => array(
            'type'  => 'color-picker',
            'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
            'label' => __('Map Water Text Fill Color Set', 'selfintro'),
            'desc'  => __('Map Water Color', 'selfintro'),
           ),
	  'water_text_stroke_color' => array(
            'type'  => 'color-picker',
            'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
            'label' => __('Map Water Text Fill Color Set', 'selfintro'),
            'desc'  => __('Map Water Color', 'selfintro'),
           ),  
				   
          )
         )
       );