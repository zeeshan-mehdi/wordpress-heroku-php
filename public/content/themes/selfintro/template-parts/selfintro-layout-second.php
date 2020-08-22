<!doctype html>
<?php
/**
 * Template name: Second Layout
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package SelfIntro
 */
wp_head();
if(function_exists( 'fw_get_db_settings_option' )):	
	$selfintro_data = fw_get_db_settings_option();  
endif; 
$logo_image ='';
if(!empty($selfintro_data['logo_image']['url'])):
   $logo_image = $selfintro_data['logo_image']['url'];
else:
   $logo_image = get_template_directory_uri().'/assets/images/logo.png';
endif;
if(!empty($selfintro_data['banner_image']['url'])):
  $banner_image = $selfintro_data['banner_image']['url'];
endif;
$text_image = '';
if(!empty($selfintro_data['text_image']['url'])):
  $text_image = $selfintro_data['text_image']['url'];
endif;
$logo_svgcode = '';
if(!empty($selfintro_data['logo_svgcode'])):
    $logo_svgcode =$selfintro_data['logo_svgcode'];
endif;
$selfintro_color = '';
if(!empty($selfintro_data['selfintro_color'])):
   $selfintro_color = $selfintro_data['selfintro_color'];
endif;
$us_text = '';
if(!empty($selfintro_data['us_text'])):
  $us_text = $selfintro_data['us_text'];
endif;
$banner_image_url = '';
if(!empty($banner_image)):
   $banner_image_url = 'background-image:url(' .$banner_image. ');';
endif;
$text_image_url = '';
if(!empty($text_image)):
   $text_image_url = 'background-image:url('.$text_image.');';
endif;  
$bg_image = '';
if(!empty($selfintro_data['bg_image']['url'])):
   $bg_image = $selfintro_data['bg_image']['url'];
endif;
$bg_image_url = '';
if(!empty($bg_image)):
   $bg_image = 'style= background-image:url(' .$bg_image. ');';
endif;
$whitebanere = '';
if($selfintro_color ==2):
 $whitebanere = 'home_white';
endif;
$resume_button = '';
if(!empty($selfintro_data['button_on_off'])):
    $resume_button =$selfintro_data['button_on_off'];
endif;
?>  
<body <?php body_class(); ?>>
<?php 
$color_switcher = '';
if(!empty($selfintro_data['theme_color'])):  
	$color_switcher = $selfintro_data['theme_color'];
endif; 
if($color_switcher =='on'):
	if(function_exists('selfintro_color_switcher')):
	 selfintro_color_switcher_second();
	endif;
endif;	
$loader_image = '';
if(!empty($selfintro_data['loader_image']['url'])):
  $loader_image = $selfintro_data['loader_image']['url'];
else:
  $loader_image = get_template_directory_uri().'/assets/images/loader.gif';
endif;
$loader_switch = '';
if(!empty($selfintro_data['loader_switch'])):
  $loader_switch = $selfintro_data['loader_switch'];
endif;
$header_style = '';
if(!empty($selfintro_data['header_style'])):
  $header_style = $selfintro_data['header_style'];
endif;
$video_url = '';
if(!empty($selfintro_data['video_url'])):
    $video_url =$selfintro_data['video_url'];
endif;
$typedsettings = '';
if(!empty($selfintro_data['banner_switch_typed'])):
    $typedsettings =$selfintro_data['banner_switch_typed'];
endif; 
$videosettings = '';
if(!empty($selfintro_data['banner_video_switch'])):
    $videosettings =$selfintro_data['banner_video_switch'];
endif; 
if($loader_switch == 'on'):
  if(!empty($loader_image)):
?>  
<div id="preloader">
	<div id="status">
	  <img src="<?php echo esc_url($loader_image); ?>" alt="<?php esc_attr_e('loader','selfintro'); ?>">
	</div>
</div> 
<?php 
 endif;
endif; 
?> 
<div class="self_layout_second <?php echo esc_html($header_style); ?>">
	<div class="self_header_toggle">
		<button type="button" class="self_toggle_btn">
			<i class="fa fa-bars"></i>
		</button>
	</div>
	<div class="self_header">
		<div class="self_logo">
		<?php 
			if(empty($logo_svgcode)):
			    if(!empty($logo_image)): ?>
			<a href="<?php echo esc_url(home_url('/')); ?>">
                 <img src="<?php echo esc_url($logo_image); ?>" alt=""></a>
			<?php
             endif;				
			else:
			echo '<a href="'.esc_url(home_url('/')).'">';
				   printf($logo_svgcode);
			echo '</a>';
			endif;
			?>
		</div>
		<ul>
		<?php 
		     $loader_image = '';
            if(!empty($selfintro_data['custom_menu'])):
                $custom_menu = $selfintro_data['custom_menu'];
            endif;
            if(!empty($custom_menu)):
			$i = 1;
                foreach($custom_menu as $values):
                  if(!empty($values['class_style']) && !empty($values['menu_id']) && !empty($values['title'])):
				    if($i == 1):
					  echo '<li class="active"><a href="#'.$values['menu_id'].'" class="'.$values['class_style'].'">'. $values['title'].'</a></li>';
					  else:
						echo '<li><a href="#'.$values['menu_id'].'" class="'.$values['class_style'].'">'. $values['title'].'</a></li>';
					  endif;
				   endif;
				  $i++;
    		    endforeach;
		    endif;
	 	   ?>
		</ul>
		<?php 
		if($resume_button == 'on'):
		  selfintro_resume_button();
		endif;
		?>
	</div>
	<div class="self_section_body">
	    <div class="self_home_page" <?php printf($bg_image); ?>>
			<div class="self_pages">
			<?php 
			if($videosettings == 'on'):
			 ?>
			<div class="self_page_sections self_page_video_sections section_home_part home_active">  
			<div class="prt_home_wrapper <?php echo esc_html($whitebanere);?>">
			<?php 
			 if(!empty($video_url)):
			?>
			<video autoplay muted loop id="myVideo">
				<source src="<?php echo esc_url($video_url); ?>" type="video/mp4">
				<?php esc_html_e('Your browser does not support HTML5 video.',''); ?>
				</video>
			<?php  
			endif; 
			?>
			<div class="container">
				 <div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<h1 style=<?php printf($text_image_url); ?>><?php printf($us_text); ?></h1>
					</div>
				  </div>
		    </div> 
			</div>
		  </div>
		  <?php 
			else:
		  ?>	
			<div class="self_page_sections section_home_part home_active">
				<div class="prt_home_wrapper <?php echo esc_html($whitebanere);?>" style=<?php printf($banner_image_url); ?>>
					<div class="container">
						<div class="row">
							<div class="col-lg-6 col-md-7 col-sm-10 col-xs-12 col-lg-offset-6 col-md-offset-5 col-sm-offset-2 col-xs-offset-0">
							    <?php 
								if($typedsettings == 'on'): ?>
									<div class="typed_strings">
									 <?php if(!empty($us_text)): ?>
										<h1 class="write"  data-strings="<?php printf($us_text); ?>" style=<?php printf($text_image_url); ?>>
										   <?php printf($us_text); ?>
										</h1> 
									<?php endif; ?>
									</div> 
								<?php  
								  else:
									if(!empty($us_text)): ?>
									  <h1 style=<?php printf($text_image_url); ?>>
										  <?php printf($us_text); ?></h1>
								<?php endif;
								  endif;
								?>
							</div>
						</div>
					</div>
				  </div>
			</div>
			<?php endif; ?>
				<div class="self_page_sections section_about_part">
					<?php 
						if(class_exists('Selfintro')):
							 $selfintro_obj = new Selfintro();
							 $selfintro_obj->selfintro_about();
						endif;
					?>
				</div>
				<div class="self_page_sections section_services_part">
					<?php 
						if(class_exists('Selfintro')):
							 $selfintro_obj = new Selfintro();
							 $selfintro_obj->selfintro_strength();
						endif;
					?>
				</div>
				<div class="self_page_sections section_contact_part">
					<?php 
						if(class_exists('Selfintro')):
							 $selfintro_obj = new Selfintro();
							 $selfintro_obj->selfintro_contact();
						endif;
					?>
				</div>
				<div class="self_page_sections section_portfolio_part">
					<?php 
						if(class_exists('Selfintro')):
							 $selfintro_obj = new Selfintro();
							 $selfintro_obj->selfintro_portfolio();
						endif;
					?>
				</div>
				<div class="self_page_sections section_shop_part">
					<?php 
						if(class_exists('Selfintro')):
							 $selfintro_obj = new Selfintro();
							 $selfintro_obj->selfintro_shop();
						endif;
					?>
				</div>
			</div>
		</div>
	</div>	
</div>	
<?php 
wp_footer();
?> 
</body> 