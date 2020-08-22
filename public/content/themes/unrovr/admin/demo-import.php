<?php

	function unrovr_ocdi_import_files()
	{
		$theme_directory     = trailingslashit(get_template_directory());
		$theme_directory_url = trailingslashit(get_template_directory_uri());
		
		return array(
			array(
				'import_file_name'             => esc_html__('Demo 1', 'unrovr'),
				'local_import_file'            => $theme_directory     . 'admin/demo-data/01/content.xml',
				'local_import_widget_file'     => $theme_directory     . 'admin/demo-data/01/widgets.wie',
				'local_import_customizer_file' => $theme_directory     . 'admin/demo-data/01/customizer.dat',
				'import_preview_image_url'     => $theme_directory_url . 'admin/demo-data/01/screenshot.png'
			),
			array(
				'import_file_name'             => esc_html__('Demo 2', 'unrovr'),
				'local_import_file'            => $theme_directory     . 'admin/demo-data/02/content.xml',
				'local_import_widget_file'     => $theme_directory     . 'admin/demo-data/02/widgets.wie',
				'local_import_customizer_file' => $theme_directory     . 'admin/demo-data/02/customizer.dat',
				'import_preview_image_url'     => $theme_directory_url . 'admin/demo-data/02/screenshot.png'
			),
			array(
				'import_file_name'             => esc_html__('Demo 3', 'unrovr'),
				'local_import_file'            => $theme_directory     . 'admin/demo-data/03/content.xml',
				'local_import_widget_file'     => $theme_directory     . 'admin/demo-data/03/widgets.wie',
				'local_import_customizer_file' => $theme_directory     . 'admin/demo-data/03/customizer.dat',
				'import_preview_image_url'     => $theme_directory_url . 'admin/demo-data/03/screenshot.png'
			),
			array(
				'import_file_name'             => esc_html__('Demo 4', 'unrovr'),
				'local_import_file'            => $theme_directory     . 'admin/demo-data/04/content.xml',
				'local_import_widget_file'     => $theme_directory     . 'admin/demo-data/04/widgets.wie',
				'local_import_customizer_file' => $theme_directory     . 'admin/demo-data/04/customizer.dat',
				'import_preview_image_url'     => $theme_directory_url . 'admin/demo-data/04/screenshot.png'
			),
			array(
				'import_file_name'             => esc_html__('Demo 5', 'unrovr'),
				'local_import_file'            => $theme_directory     . 'admin/demo-data/05/content.xml',
				'local_import_widget_file'     => $theme_directory     . 'admin/demo-data/05/widgets.wie',
				'local_import_customizer_file' => $theme_directory     . 'admin/demo-data/05/customizer.dat',
				'import_preview_image_url'     => $theme_directory_url . 'admin/demo-data/05/screenshot.png'
			),
			array(
				'import_file_name'             => esc_html__('Demo 6', 'unrovr'),
				'local_import_file'            => $theme_directory     . 'admin/demo-data/06/content.xml',
				'local_import_widget_file'     => $theme_directory     . 'admin/demo-data/06/widgets.wie',
				'local_import_customizer_file' => $theme_directory     . 'admin/demo-data/06/customizer.dat',
				'import_preview_image_url'     => $theme_directory_url . 'admin/demo-data/06/screenshot.png'
			),
			array(
				'import_file_name'             => esc_html__('Demo 7', 'unrovr'),
				'local_import_file'            => $theme_directory     . 'admin/demo-data/07/content.xml',
				'local_import_widget_file'     => $theme_directory     . 'admin/demo-data/07/widgets.wie',
				'local_import_customizer_file' => $theme_directory     . 'admin/demo-data/07/customizer.dat',
				'import_preview_image_url'     => $theme_directory_url . 'admin/demo-data/07/screenshot.png'
			),
			array(
				'import_file_name'             => esc_html__('Demo 8', 'unrovr'),
				'local_import_file'            => $theme_directory     . 'admin/demo-data/08/content.xml',
				'local_import_widget_file'     => $theme_directory     . 'admin/demo-data/08/widgets.wie',
				'local_import_customizer_file' => $theme_directory     . 'admin/demo-data/08/customizer.dat',
				'import_preview_image_url'     => $theme_directory_url . 'admin/demo-data/08/screenshot.png'
			)
		);
	}
	
	add_filter('pt-ocdi/import_files', 'unrovr_ocdi_import_files');
	
	
	function unrovr_ocdi_time_for_one_ajax_call()
	{
		return 10;
	}
	
	add_action('pt-ocdi/time_for_one_ajax_call', 'unrovr_ocdi_time_for_one_ajax_call');


/* ============================================================================================================================================= */


	function unrovr_after_import()
	{
		// Assign Homepage and Blog page.
		
		$homepage_id  = get_page_by_title('Homepage'); // Homepage.
		$blog_page_id = get_page_by_title('the blog.'); // Blog page.
		
		update_option('show_on_front', 'page');
		update_option('page_on_front', $homepage_id->ID); // Homepage.
		update_option('page_for_posts', $blog_page_id->ID); // Blog page.
	}
	
	add_action('pt-ocdi/after_import', 'unrovr_after_import');


/* ============================================================================================================================================= */


	add_filter('pt-ocdi/disable_pt_branding', '__return_true');
	
	
	add_filter('pt-ocdi/regenerate_thumbnails_in_content_import', '__return_false');

?>