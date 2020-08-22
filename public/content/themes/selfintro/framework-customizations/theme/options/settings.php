<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
}
$options = array(
    fw()->theme->get_options( 'customizer/selfintro-general-settings'),
    fw()->theme->get_options( 'customizer/selfintro-custom-menu-setting'),
    fw()->theme->get_options( 'customizer/selfintro-breadcrumbs-setting'),
    fw()->theme->get_options( 'customizer/selfintro-video-banner-setting'),
    fw()->theme->get_options( 'customizer/selfintro-typed-banner-setting'),
    fw()->theme->get_options( 'customizer/selfintro-socialmenu-setting'),
    fw()->theme->get_options( 'customizer/selfintro-switcher-setting'),
    fw()->theme->get_options( 'customizer/selfintro-sidebar-setting'),
    fw()->theme->get_options( 'customizer/selfintro-about-setting'),
    fw()->theme->get_options( 'customizer/selfintro-services-setting'),
    fw()->theme->get_options( 'customizer/selfintro-portfolio-setting'),
    fw()->theme->get_options( 'customizer/selfintro-services-setting'),
    fw()->theme->get_options( 'customizer/selfintro-contactus-setting'),
	fw()->theme->get_options( 'customizer/selfintro-shop-setting'),
	fw()->theme->get_options( 'customizer/selfintro-resume-setting'),
	fw()->theme->get_options( 'customizer/selfintro-woocommerce-setting'),
    fw()->theme->get_options( 'customizer/selfintro-404-settings'),
    fw()->theme->get_options( 'customizer/selfintro-footer-settings'),
	
 ); 
?>  