<!doctype html>
<?php
/**
 * Template name: Main Layout
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
?> 
<body <?php body_class(); ?>>
<?php
if(function_exists( 'fw_get_db_settings_option' )):	
	$selfintro_data = fw_get_db_settings_option();  
endif; 
$color_switcher = '';
if(!empty($selfintro_data['theme_color'])):  
  $color_switcher = $selfintro_data['theme_color'];
endif; 
if($color_switcher =='on'):
  if(function_exists('selfintro_color_switcher')):
    selfintro_color_switcher();
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
<div class="switch-color-out">
<div class="prt_main_wrapper">
<?php 
if(class_exists('Selfintro')):
 $selfintro_obj = new Selfintro();
 $selfintro_obj->selfintro_menu();
 $selfintro_obj->selfintro_about();
 $selfintro_obj->selfintro_contact();
 $selfintro_obj->selfintro_portfolio();
 $selfintro_obj->selfintro_strength();
endif;
?>
</div>
</div> 
<?php 
wp_footer();
?>  
</body> 