<?php 
/**
 * Enqueue scripts and styles.
 */
function selfintro_scripts() {
$selfintro_data = '';
if(function_exists('fw_get_db_settings_option')):	
  $selfintro_data = fw_get_db_settings_option();  
endif; 
$selfintro_color = '';
if(!empty($selfintro_data['selfintro_color'])):
   $selfintro_color = $selfintro_data['selfintro_color'];
endif;
$map_key = $map_api_key = '';
if(isset($selfintro_data['map_apikey']) && !empty($selfintro_data['map_apikey'])):
   $map_key = $selfintro_data['map_apikey']; 
else:
  $map_key = 'AIzaSyBu8iQ-iWoBeNUiDhplXx_St_DPHwTMq-4';  
endif; 
$map_api_key = "//maps.googleapis.com/maps/api/js?key=$map_key"; 
/**
 *scripts
 */ 


wp_enqueue_script('bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.js', array('jquery'), '20151215', true );
	 
wp_enqueue_script('jquery-magnific-popup', get_template_directory_uri() . '/assets/js/jquery.magnific-popup.min.js', array('jquery'), '20151215', true );
	 
wp_enqueue_script('owl-carousel', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array('jquery'), '20151215', true );
	 
wp_enqueue_script('jquery-countTo', get_template_directory_uri() . '/assets/js/plugin/countto/jquery.countTo.js', array('jquery'), '20151215', true );
	 
wp_enqueue_script('jquery-appear', get_template_directory_uri() . '/assets/js/plugin/countto/jquery.appear.js', array('jquery'), '20151215', true );
	
wp_enqueue_script('circles', get_template_directory_uri() . '/assets/js/circles.js', array('jquery'), '20151215', true );

wp_enqueue_script('typed-min', get_template_directory_uri() . '/assets/js/typed.min.js', array('jquery'), '20151215', true );  
	 
wp_enqueue_script('selfintro-custom', get_template_directory_uri() . '/assets/js/selfintro-custom.js', array('jquery'), '20151215', true );
	 
wp_enqueue_script('selfintro-navigation', get_template_directory_uri() . '/assets/js/navigation.js', array('jquery'), '20151215', true );
	 
wp_enqueue_script('jquery-circle-diagram', get_template_directory_uri() . '/assets/js/jquery.circle-diagram.js', array('jquery'), '20151215', true );
	 
wp_enqueue_script('selfintro-skip-link-focus-fix', get_template_directory_uri() . '/assets/js/skip-link-focus-fix.js', array('jquery'), '20151215', true );


wp_enqueue_script('google-map', $map_api_key);

if (is_singular() && comments_open() && get_option('thread_comments') ) {
		wp_enqueue_script('comment-reply');
	 }	 
/**
 *styles
 */
wp_enqueue_style('selfintro-style', get_stylesheet_uri());
	
wp_enqueue_style('animate', get_template_directory_uri().'/assets/css/animate.css', array(), '1', 'all');
	
wp_enqueue_style('fonts', get_template_directory_uri().'/assets/css/fonts.css', array(), '1', 'all');
	
wp_enqueue_style('bootstrap', get_template_directory_uri().'/assets/css/bootstrap.css', array(), '1', 'all');
	
wp_enqueue_style('font_awesome', get_template_directory_uri().'/assets/css/font-awesome.css', array(), '1', 'all');
	
wp_enqueue_style('magnific-popup', get_template_directory_uri().'/assets/css/magnific-popup.css', array(), '1', 'all');
	
wp_enqueue_style('owl-carousel', get_template_directory_uri().'/assets/css/owl.carousel.min.css', array(), '1', 'all');
	
wp_enqueue_style('owl-theme-default', get_template_directory_uri().'/assets/css/owl.theme.default.min.css', array(), '1', 'all');
	 
if($selfintro_color == 1): 
   wp_enqueue_style('selfintro-black-custom-style', get_template_directory_uri().'/assets/css/selfintro-black-custom-style.css', array(), '1', 'all');
else:
   wp_enqueue_style('selfintro-white-custom-style', get_template_directory_uri().'/assets/css/selfintro-white-custom-style.css', array(), '1', 'all');
endif;

$theme_color = '';
if(!empty($selfintro_data['selfintro_theme_color'])):
     $theme_color = $selfintro_data['selfintro_theme_color'];
endif;
switch($theme_color):  
    case "1":
      wp_enqueue_style('selfintro-color1', get_template_directory_uri()."/assets/css/colors/color1.css", array(), '1', 'all');
    break; 
    case "2": 
      wp_enqueue_style('selfintro-color2', get_template_directory_uri()."/assets/css/colors/color2.css", array(), '1', 'all');
    break;
	case "3":
      wp_enqueue_style('selfintro-color3', get_template_directory_uri()."/assets/css/colors/color3.css", array(), '1', 'all');
    break;
	case "4":
      wp_enqueue_style('selfintro-color4', get_template_directory_uri()."/assets/css/colors/color4.css", array(), '1', 'all');
    break;
	case "5":
      wp_enqueue_style('selfintro-color5', get_template_directory_uri()."/assets/css/colors/color5.css", array(), '1', 'all');
    break;
	case "6":
      wp_enqueue_style('selfintro-color6', get_template_directory_uri()."/assets/css/colors/color6.css", array(), '1', 'all');
    break;
    case "7":
      wp_enqueue_style('selfintro-color7', get_template_directory_uri()."/assets/css/colors/color7.css", array(), '1', 'all');
    break;
endswitch;  
wp_enqueue_style('slefintro-theme-change', '#', array(), '1', 'all');
}
add_action( 'wp_enqueue_scripts', 'selfintro_scripts' );  