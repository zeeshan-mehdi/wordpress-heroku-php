<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package SelfIntro
 */
get_header();
$theme_sidebar = $selfintro_data = '';
if (function_exists( 'fw_get_db_settings_option' )):	
	$selfintro_data = fw_get_db_settings_option();  
endif; 
if(!empty($selfintro_data['search_sidebar'])):
   $theme_sidebar = $selfintro_data['search_sidebar'];
else:
   $theme_sidebar = 'right';
endif;  
$bread_image = '';
if(!empty($selfintro_data['breadcrumbs_image']['url'])):
  $bread_image = $selfintro_data['breadcrumbs_image']['url'];
endif;
$bread_color = '';
if(!empty($selfintro_data['breadcrumbs_color'])):
   $bread_color = $selfintro_data['breadcrumbs_color'];
endif;
$breadcrumbs_switch = '';
if(!empty($selfintro_data['breadcrumbs_switch'])):
    $breadcrumbs_switch = $selfintro_data['breadcrumbs_switch'];
else:
    $breadcrumbs_switch = 'on'; 
endif;
if($breadcrumbs_switch == 'on'): 
   selfintro_breadcrumb_funcation($bread_color,$bread_image);
endif;
?>
<div id="primary" class="content-area">
		<main id="main" class="site-main">
		    <div class="container">
		        <div class="row">
		   <?php
           if($theme_sidebar == 'full'):
    		   echo '<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">';
    	   else:
    		  if($theme_sidebar == 'left'): 
    		      echo '<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 col-lg-push-3 col-md-push-3">';
    		  else:
    		     echo '<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">';
    		  endif;
    	   endif;
		    if(have_posts()):
              
            /* Start the Loop */
			 while ( have_posts() ) : the_post();

				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'template-parts/content', 'search' );

			endwhile;
               selfintro_pagination();
           else :
              get_template_part( 'template-parts/content', 'none' );
           endif; 
		 ?>
         </div>
         <?php 
          if($theme_sidebar == 'left'):  ?> 
	        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 col-lg-pull-9 col-md-pull-9">
               <?php get_sidebar(); ?>
            </div>
        <?php 
        endif; 
        if($theme_sidebar == 'right'):  ?> 
	        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
             <?php get_sidebar(); ?>
           </div>
        <?php endif; ?>
       </div> 
     </div>
	</main><!-- #main -->
 </div><!-- #primary -->
<?php
get_footer(); 