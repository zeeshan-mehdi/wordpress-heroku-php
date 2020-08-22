<?php
/**
 * Template name: Page Full Width
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
get_header(); 
$selfintro_page_data = '';
if ( function_exists( 'fw_get_db_post_option' )):	
    $selfintro_page_data = fw_get_db_post_option(get_the_ID()); 
endif;
$page_sidebar_position = '';
if(!empty($selfintro_page_data['page_sidebar'])):
	$page_sidebar_position = $selfintro_page_data['page_sidebar'];
 else:
	$page_sidebar_position = 'right';
endif; 
if(!empty($selfintro_page_data['comment_switch'])):
    $comment_switch = $selfintro_page_data['comment_switch'];
  else:
    $comment_switch = 'yes';
endif;
$bread_image = '';
if(!empty($selfintro_page_data['breadcrumbs_page_image']['url'])):
  $bread_image = $selfintro_page_data['breadcrumbs_page_image']['url'];
endif;
$bread_color = '';
if(!empty($selfintro_page_data['breadcrumbs_page_color'])):
   $bread_color = $selfintro_page_data['breadcrumbs_page_color'];
endif; 
$breadcrumbs_switch = '';
if(!empty($selfintro_page_data['breadcrumbs_switch'])):
   $breadcrumbs_switch = $selfintro_page_data['breadcrumbs_switch'];
 else:
    $breadcrumbs_switch = 'yes'; 
endif;
if($breadcrumbs_switch == 'yes'):
  if(function_exists('selfintro_breadcrumb_funcation')):
    selfintro_breadcrumb_funcation($bread_color,$bread_image);
  endif; 
endif;
?> 
<div class="si_fullwidth_page">
<?php
while ( have_posts() ) : the_post();
    the_content();
endwhile;
?>
</div> 
<?php
get_footer();