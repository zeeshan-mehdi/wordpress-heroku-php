<?php
/**
 * Single Product Thumbnails
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/product-thumbnails.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     3.3.2
 */

defined( 'ABSPATH' ) || exit;

// Note: `wc_get_gallery_image_html` was added in WC 3.3.2 and did not exist prior. This check protects against theme overrides being used on older versions of WC.
if ( ! function_exists( 'wc_get_gallery_image_html' ) ) {
	return;
}

global $product;
$attachment_ids = $product->get_gallery_image_ids();
if ( $attachment_ids && has_post_thumbnail() ) {
	echo '<ul class="flex-control-thumbs">'; 
	foreach ( $attachment_ids as $attachment_id ) {
		$image_url = wp_get_attachment_image_url($attachment_id ,'full');
		$thum_image = selfintro_resize($image_url, $thumb_w=100, $thumb_h=100); 
		echo '<li><img src="'.esc_url($image_url).'" alt="'.get_the_title().'" class="sl_product_img"></li>';
	}
	echo '</ul>';
}