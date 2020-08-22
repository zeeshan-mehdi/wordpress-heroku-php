<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package SelfIntro
 */
get_header(); 
$selfintro_post_data = $bread_image = $comment_switch = '';
if ( function_exists( 'fw_get_db_post_option' )):	
    $selfintro_post_data = fw_get_db_post_option(get_the_ID()); 
endif;
if(!empty($selfintro_post_data['blog_single_sidebar'])):
    $post_sidebar_position = $selfintro_post_data['blog_single_sidebar'];
 else:
    $post_sidebar_position = 'right';
 endif;
 $comment_switch = '';
if(!empty($selfintro_post_data['comment_switch'])):
     $comment_switch = $selfintro_post_data['comment_switch'];
  else:
    $comment_switch = 'yes';
endif; 
$breadcrumbs_switch = '';
if(!empty($selfintro_post_data['breadcrumbs_switch'])):
   $breadcrumbs_switch = $selfintro_post_data['breadcrumbs_switch'];
else:
   $breadcrumbs_switch = 'yes';   
endif;
$bread_image = '';
if(!empty($selfintro_post_data['breadcrumbs_post_image']['url'])):
  $bread_image = $selfintro_post_data['breadcrumbs_post_image']['url'];
endif;
$bread_color = '';
if(!empty($selfintro_post_data['breadcrumbs_post_color'])):
   $bread_color = $selfintro_post_data['breadcrumbs_post_color'];
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
		       if($post_sidebar_position == 'full'):
    		      echo '<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">';
				else:
    		      if($post_sidebar_position == 'left'): 
    		         echo '<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 col-lg-push-3 col-md-push-3">';
    		     else:
    		         echo '<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">';
    		     endif;
    	        endif;
		        while ( have_posts() ) : the_post();
                      get_template_part( 'template-parts/content','single');
					  
                  // If comments are open or we have at least one comment, load up the comment template.
			     if($comment_switch == 'yes'):
			         if(comments_open() || get_comments_number() ) :
					      comments_template();
					endif;
                 endif;
	         endwhile; // End of the loop.
			?>
         </div> 
         <?php if($post_sidebar_position == 'left'):  ?> 
	        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 col-lg-pull-9 col-md-pull-9">
               <?php get_sidebar(); ?>
            </div>
          <?php endif; ?>
          <?php if($post_sidebar_position == 'right'):  ?> 
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