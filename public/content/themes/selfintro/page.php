<?php
/**
 * The template for displaying all pages
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
$woocommerce_sidebar = '';
if(!empty($selfintro_page_data['woocommerce_sidebar'])):
   $woocommerce_sidebar = $selfintro_page_data['woocommerce_sidebar'];
endif; 
$breadcrumbs_switch = '';
if(!empty($selfintro_page_data['breadcrumbs_switch'])):
    $breadcrumbs_switch = $selfintro_page_data['breadcrumbs_switch'];
 else:
    $breadcrumbs_switch = 'yes'; 
endif;
if($breadcrumbs_switch == 'yes'):
   selfintro_breadcrumb_funcation($bread_color,$bread_image);
endif; 
?>
<div id="primary" class="content-area">
		<main id="main" class="site-main">
		    <div class="container">
		      <div class="row">
		       <?php
               if($page_sidebar_position == 'full'):
    		      echo '<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">';
				else:
    		     if($page_sidebar_position == 'left'): 
    		       echo '<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 col-lg-push-3 col-md-push-3">';
    		     else:
    		       echo '<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">';
    		     endif;
    	       endif;
		 	   while ( have_posts() ) : the_post();

				   get_template_part( 'template-parts/content', 'page' );

			  	 // If comments are open or we have at least one comment, load up the comment template.
			  	 if($comment_switch == 'yes'):
			  	    if(comments_open() || get_comments_number()):
					    comments_template();
					 endif;
                endif;
			  endwhile; // End of the loop. ?>
		  </div>
		  <?php if($page_sidebar_position == 'left'):  ?> 
	        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 col-lg-pull-9 col-md-pull-9">
               <?php 
			   if($woocommerce_sidebar == 'yes'):
			   get_sidebar('product');
			   else:
			   get_sidebar();
               endif;
			   ?>
			   
            </div> 
          <?php 
          endif; 
          if($page_sidebar_position == 'right'):  ?> 
	        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                 <?php 
				   if($woocommerce_sidebar == 'yes'):
				   get_sidebar('product');
				   else:
				   get_sidebar();
				   endif;
			     ?>
            </div>
         <?php endif; ?>
       </div>
    </div>
 </main>
</div>
<?php
get_footer();