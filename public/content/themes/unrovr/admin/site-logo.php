<?php

	function unrovr_text_logo()
	{
		$site_title = get_bloginfo('name');
		
		if (! empty($site_title))
		{
			?>
				<h1 class="site-title">
					<?php
						echo esc_html($site_title);
					?>
				</h1> <!-- .site-title -->
			<?php
		}
	}
	
	
	function unrovr_image_logo($image_logo_url)
	{
		?>
			<h1 class="site-title">
				<img alt="<?php bloginfo('name'); ?>" src="<?php echo esc_url($image_logo_url); ?>">
			</h1> <!-- .site-title -->
		<?php
	}


/* ============================================================================================================================================= */


	function unrovr_site_logo()
	{
		if (has_custom_logo())
		{
			$image_logo_id  = get_theme_mod('custom_logo');
			$image_logo_url = wp_get_attachment_image_url($image_logo_id , 'full');
			
			unrovr_image_logo($image_logo_url);
		}
		else
		{
			unrovr_text_logo();
		}
	}


/* ============================================================================================================================================= */


	function unrovr_site_tagline()
	{
		$tagline = get_bloginfo('description');
		
		if (! empty($tagline))
		{
			?>
				<p class="site-description">
					<?php
						echo esc_html($tagline);
					?>
				</p> <!-- .site-description -->
			<?php
		}
	}

?>