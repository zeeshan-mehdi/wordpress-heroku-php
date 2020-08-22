<?php
/**
 *Selfintro enqueue
 */
require get_template_directory().'/vendor/include/selfintro-enqueue.php';
/**
 *Selfintro enqueue
 */
require get_template_directory().'/vendor/include/selfintro-aq-resizer.php';
/**
 *Selfintro menu shorter   
 */
function slefintro_menu_single(){
 require get_template_directory().'/vendor/include/selfintro-menu-short.php';
}
/**
 *Selfintro Comment Load
 */ 
require get_template_directory().'/vendor/include/selfintro-comment.php';
/**
 *Load Selfintro Tgm Plugin Load
 */ 
require get_template_directory().'/vendor/theme-plugin/selfintro-plugin-activate-config.php'; 
/**  
 *get_the_excerpt
 */ 
function selfintro_the_excerpt($charlength) {
	 $result = '';
	 $excerpt = get_the_excerpt();
	 $charlength++;
     if (mb_strlen( $excerpt ) > $charlength ):
		$subex = mb_substr( $excerpt, 0, $charlength - 5 );
		$exwords = explode( ' ', $subex );
		$excut = - ( mb_strlen( $exwords[ count( $exwords ) - 1 ] ) );
		if($excut < 0):
		  $result .= mb_substr( $subex, 0, $excut );
		else :
		  $result .= $subex;
	    endif;
		  $result .= '[...]';
	    else :
		  $result .= $excerpt; 
	  endif;
	  return $result;
	 
}
/** 
 *Selfintro Breadcrumb Funcation 
 */
function selfintro_breadcrumb_funcation($bread_color,$bread_image){
    $bg_color = '';
    if(!empty($bread_color)):
       $bg_color = 'background-color:' .$bread_color. ';';
    endif;
    $bg_image = '';
    if(!empty($bread_image)):
        $bg_image = 'background-image:url(' .$bread_image. ');';
    endif;
    $background = '';
    $background   = ($bg_image || $bg_color) ? 'style="' . esc_attr($bg_image.$bg_color) . '"' : '';
	?>
     <div class="cv_banner" <?php printf($background); ?>>
            <div class="container">
                <div class="row">
                    <div class="cv_banner_title">
					 <?php 
                      echo '<h1>';
                         if(is_home() && have_posts()) :
			               esc_html_e('Blog','selfintro');
                         endif;
		               if(is_page()):
                          the_title();
                       endif;
                       if(is_single()): 
                         single_post_title();
                       endif;
                       if(class_exists( 'WooCommerce' ) ):
                         if(is_shop()){
                               esc_html_e('Shop','selfintro');
                           }else{
                           if(is_archive()):
                              the_archive_title();
                           endif;
                           }
                           endif;
                        if(!class_exists('WooCommerce')):
                           if(is_archive()):
                              the_archive_title();
                           endif;
                        endif;
                        if(is_search()):
                          printf( esc_html__( 'Search Results for: %s', 'selfintro' ), '<span>'.get_search_query().'</span>' );
                       endif;
                  echo '</h1>
                        <div class="cv_breadcrumb">';
                         if(function_exists('fw_ext_breadcrumbs')) { echo fw_ext_breadcrumbs(); }
			      echo '</div>';
				  ?>
                    </div>
                </div>
            </div>
        </div>
<?php 
 $bread_color = $bread_image = '';
  }
/** 
 * Selfintro Footer Copyright Funcation
 */ 
function selfintro_footer_copyright(){
    $selfintro_data = '';
    if ( function_exists( 'fw_get_db_settings_option' )):	
          $selfintro_data = fw_get_db_settings_option();     
    endif; 
    $copright = '';
    if(!empty($selfintro_data['footer_copyrigth'])):
         $copright = $selfintro_data['footer_copyrigth'];
    endif;
    $facebook ='';
     if(!empty($selfintro_data['facebook'])):
         $facebook = $selfintro_data['facebook'];
    endif;
    $googleplus ='';
     if(!empty($selfintro_data['google_plus'])):
         $googleplus = $selfintro_data['google_plus'];
    endif;
    $linkedin ='';
     if(!empty($selfintro_data['linkedin'])):
         $linkedin = $selfintro_data['linkedin'];
    endif;
    $twitter ='';
    if(!empty($selfintro_data['twitter'])):
         $twitter = $selfintro_data['twitter'];
    endif;
    $pinterest ='';
    if(!empty($selfintro_data['pinterest'])):
         $pinterest = $selfintro_data['pinterest'];
    endif;
    $behance = '';
    if(!empty($selfintro_data['behance'])):
         $behance = $selfintro_data['behance'];
    endif;
    $dribbble = '';
    if(!empty($selfintro_data['dribbble'])):
         $dribbble = $selfintro_data['dribbble'];
    endif;
    echo '<div class="prt_footer_wrapper prt_toppadder30 prt_bottompadder30">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">';
					if(!empty($copright)):
						echo '<p>'.printf($copright).'</p>';
					else:
					  echo '<p>'.esc_html__('Copyright','selfintro').
					    ' <i class="fa fa-copyright"></i> '.esc_html__('2018 All Rights Reserved','selfintro').'</p>';
					endif; 
				    echo '<ul>';
				           if(!empty($facebook)):
							  echo '<li><a href="'.esc_url($facebook).'"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>';
							endif;
							if(!empty($twitter)):
							   echo '<li><a href="'.esc_url($twitter).'"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>';
							endif;
							if(!empty($pinterest)):
							   echo '<li><a href="'.esc_url($pinterest).'"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>';
							endif;
							if(!empty($behance)):
							  echo '<li><a href="'.esc_url($behance).'"><i class="fa fa-behance" aria-hidden="true"></i></a></li>';
							endif;
							if(!empty($googleplus)):
							  echo '<li><a href="'.esc_url($googleplus).'"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>';
							endif;
							if(!empty($dribbble)):
							   echo '<li><a href="'.esc_url($dribbble).'">
							      <i class="fa fa-dribbble" aria-hidden="true"></i></a></li>'; 
						     endif;	
					echo '</ul>
					</div>
				</div> 
			</div> 
		</div>';
}
/**
 *Selfintro Footer Copyright Funcation
 */
 if(!function_exists('selfintro_menu_editor')){

	function selfintro_menu_editor($args){
       
	   if ( ! current_user_can( 'manage_options' ) ){
           return;
        }
        // see wp-includes/nav-menu-template.php for available arguments
        extract( $args );
        $link = $link_before
             . '<a href="' .admin_url( 'nav-menus.php' ) . '">'.$before.esc_html__('Add a menu','selfintro').$after.'</a>'
            . $link_after;
        // We have a list
        if ( FALSE !== stripos( $items_wrap, '<ul' )

			or FALSE !== stripos( $items_wrap, '<ol' )

		) {
        $link = "<li>$link</li>";
        }
        $output = sprintf( $items_wrap, $menu_id, $menu_class, $link );
        if ( ! empty ( $container ) ){
           $output  = "<$container class='$container_class' id='$container_id'>$output</$container>";
        }
        if ( $echo ){
           echo "$output";
        }
        return $output;

	}

}
/**
 *global Variable
 */
function selfintro_post_variables(){
	global $post;
	return $post; 
}  
/**
 *Theme Color Switcher 
 */ 
function selfintro_color_switcher(){
echo '<div id="style-switcher" class="hs_color_set">
	<div class="dc_switcher_innerdiv">
		<div class="transparent-background">
		<h6>'.esc_html__('color option','selfintro').'</h6> 
		<input type="hidden" name="selfintro_template_url" value="'.esc_attr(get_template_directory_uri()).'"/>  
		 <ul class="dc_colors"> 
		  <li><p class="cv_colorchange" id="color0"></p></li>
		  <li><p class="cv_colorchange" id="color1"></p></li>
		  <li><p class="cv_colorchange" id="color2"></p></li>
		  <li><p class="cv_colorchange" id="color3"></p></li>
		  <li><p class="cv_colorchange" id="color4"></p></li>
		  <li><p class="cv_colorchange" id="color5"></p></li>
		  <li><p class="cv_colorchange" id="color6"></p></li>
		  <li><p class="cv_colorchange" id="color7"></p></li>
		 </ul>
		 <div class="clearfix"></div>
		  <div id="colorSelector">
		  <div style="background-color: #00ff00"></div></div>
		</div>
	</div>
	<div class="bottom"> <a href="" class="settings"><i class="fa fa-gear fa-spin"></i></a> </div>
</div>';
}  
/**
 *Theme Color Switcher second 
 */ 
function selfintro_color_switcher_second(){
echo '
<div class="switcher_second_layout">
<div id="style-switcher_second" class="hs_color_set">
	<div class="dc_switcher_innerdiv">
		<div class="transparent-background">
		<h6>color option</h6> 
		<input type="hidden" name="selfintro_template_url" value="'.esc_attr(get_template_directory_uri()).'"/>  
		 <ul class="dc_colors"> 
		  <li><p class="cv_colorchange" id="color0"></p></li>
		  <li><p class="cv_colorchange" id="color1"></p></li>
		  <li><p class="cv_colorchange" id="color2"></p></li>
		  <li><p class="cv_colorchange" id="color3"></p></li>
		  <li><p class="cv_colorchange" id="color4"></p></li>
		  <li><p class="cv_colorchange" id="color5"></p></li>
		  <li><p class="cv_colorchange" id="color6"></p></li>
		  <li><p class="cv_colorchange" id="color7"></p></li>
		 </ul>
		 <div class="clearfix"></div>
		  <div id="colorSelector">
		  <div style="background-color: #00ff00"></div></div>
			<div class="header_switcher">
				<h6>header position</h6> 
				<ul class="header_tabs">
					<li><a class="header_left">Left</a></li>
					<li><a class="header_top">top</a></li>
					<li><a class="header_bottom">bottom</a></li>
				</ul>	
			</div>
		</div>
	</div>
	<div class="bottom"> <a href="" class="settings"><i class="fa fa-gear fa-spin"></i></a> </div>
</div>
</div>';	
}
/** product title */
remove_action('woocommerce_shop_loop_item_title','woocommerce_template_loop_product_title',10);
remove_action('woocommerce_before_main_content','woocommerce_breadcrumb',20);
remove_action('woocommerce_before_main_content','woocommerce_output_content_wrapper',10);
remove_action('woocommerce_single_product_summary','woocommerce_template_single_title',5);
remove_action( 'woocommerce_archive_description', 'action_woocommerce_archive_description', 10, 2 ); 
add_action('woocommerce_shop_loop_item_title','selfintro_product_title',10);
function selfintro_product_title() 
{
   echo '<h4 class="self_product_heading">'.get_the_title().'</h4>';
}
/**
 *add_theme_support
 */
function selfintro_woocommerce_support() {
   add_theme_support('woocommerce');
} 
add_action('after_setup_theme', 'selfintro_woocommerce_support');
/**
 * Mini Cart
 */
function selfintro_custom_mini_cart() { 
   if(class_exists("Woocommerce")){
	echo '<div class="self-cart-dropdown"><a href="#" class="dropdown-back" data-toggle="dropdown"> ';
	    echo '<i class="fa fa-opencart" aria-hidden="true"></i>';
	    echo '<div class="basket-item-count" style="display: inline;">';
	        echo '<span class="cart-items-count count">';
	            echo WC()->cart->get_cart_contents_count();
	        echo '</span>';
	    echo '</div>';
	echo '</a>';
	echo '<ul class="dropdown-menu dropdown-menu-mini-cart">';
	        echo '<li> <div class="widget_shopping_cart_content">';
			          woocommerce_mini_cart();
		 echo '</div></li></ul></div>';
	}

}
//set deafult loop product 
add_filter('loop_shop_per_page', create_function('$cols', 'return 9;'));

/**
 * Resume function
 */
function selfintro_resume_button(){
if(function_exists( 'fw_get_db_settings_option' )):	
	$selfintro_data = fw_get_db_settings_option();  
endif; 
$button_text = '';
if(!empty($selfintro_data['button_text'])):
  $button_text = $selfintro_data['button_text'];
endif;
$resume_download = '';
if(!empty($selfintro_data['resume_download'])):
  $resume_download = $selfintro_data['resume_download'];
endif;
$resume_download_url = '';
if(!empty($selfintro_data['resume_download_url'])):
  $resume_download_url = $selfintro_data['resume_download_url'];
endif;
$button_style_change = '';
if(!empty($selfintro_data['button_style_change'])):
  $button_style_change = $selfintro_data['button_style_change'];
endif;
if(!empty($resume_download) || !empty($resume_download_url)):
 if($button_style_change =='left-side'):
   echo '<div class="self-resume-download resume_second_layout">';
 else:
   echo '<div class="self-resume-download resume_second_layout">'; 
 endif;
 if(!empty($resume_download)): ?>
  <a href="<?php echo esc_url($resume_download); ?>" class="prt_btn">
  <?php else: ?>
  <a href="<?php echo esc_url($resume_download_url); ?>" class="prt_btn">
  <?php 
  endif;
  if(!empty($button_text)):
	echo esc_html($button_text); 
  else:
	esc_html_e('Download Resume','selfintro'); 
  endif; 
   ?>
   <i class="fa fa-download"></i>
  </a> 
</div>
<?php endif; 
 }