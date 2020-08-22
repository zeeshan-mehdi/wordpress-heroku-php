<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package SelfIntro
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <?php wp_head(); ?>
</head> 
<body <?php body_class(); ?>>
<?php
$selfintro_data = '';
if(function_exists('fw_get_db_settings_option')):	
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
$singlepage_switch = '';
if(!empty($selfintro_data['singlepage_switch'])):
 $singlepage_switch = $selfintro_data['singlepage_switch'];
endif;
if($singlepage_switch =='on'):
  if(function_exists('slefintro_menu_single')):
    slefintro_menu_single();
  endif;
endif;  
if($loader_switch == 'on'):
  if(!empty($loader_image)):  
?>  
<div class="switch-color-out">
<div id="preloader">
	<div id="status">
	   <img src="<?php echo esc_url($loader_image); ?>" alt="<?php esc_attr_e('loader','selfintro'); ?>">
	</div>
</div>   
<?php    
 endif;
endif;
get_template_part('vendor/header/selfintro-header','main'); 
?>  