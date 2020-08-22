<?php 
/**
 *Selfintro Shorting
 */
if (!function_exists('selfintro_sort_sections')){
	function selfintro_sort_sections(){
		if(!has_nav_menu('selfintro')){
			return;
		}
		if ( ( $locations = get_nav_menu_locations()) && isset( $locations['selfintro'] )){
		$menu = wp_get_nav_menu_object( $locations['selfintro'] );
			if(!isset($menu->term_id)) return;
			$items  = wp_get_nav_menu_items($menu->term_id);
			$sections = array();
			foreach((array) $items as $key => $menu_items){
				if('page' == $menu_items->object){
					$sections[] = $menu_items->object_id;
				}
			}
			return $sections;
		}
	}
}     
/**
 * Navigation Related Functions
 */
add_filter('template_redirect', 'selfintro_page_section_redirect');
function selfintro_page_section_redirect(){
	global $wp;
	if(is_404()){
		if(isset($wp->query_vars["page"]) && !empty($wp->query_vars["name"])){
			wp_redirect(home_url('/#').$wp->query_vars["name"]);
		}
	}
}
add_filter( 'wp_nav_menu_objects', 'selfintro_single_page_nav_links');
function selfintro_single_page_nav_links($items) {
	foreach ($items as $item ) {
		if('page' == $item->object){ 
			$current_post = get_post($item->object_id); 
			$menu_title = "#wpdance-".$current_post->post_name;
				if(is_page_template('selfintro-parallax-template.php')){
					$item->url = $menu_title;
				}else{
					if(is_single() || is_page() || is_category() || is_search() || is_tag() || is_404() || is_archive()){
						$item->url =  esc_url( home_url( '/' ) ).$menu_title;
					}
				}
		}elseif('custom' == $item->type && !is_home()){
			if( 1 === preg_match('/^#([^\/]+)$/', $item->url , $matches)){
			$item->url = esc_url( home_url( '/' ) ).$item->url;
			}
		}
	}
  return $items;   
} 