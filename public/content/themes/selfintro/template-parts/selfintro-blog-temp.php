<?php
/**
 *Template Name: blog
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
   selfintro_breadcrumb_funcation($bread_color,$bread_image);
endif; 
?>
<div class="prt_blogpage_wrapper prt_toppadder80 prt_bottompadder30">
    <div class="container">
        <div class="row">
           <?php
            if($page_sidebar_position == 'full'):
    		      echo '<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">';
    		      $selfintro_thumb_w =880;
		          $selfintro_thumb_h =400;
    		 else:
    		 if($page_sidebar_position == 'left'): 
    		        echo '<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 col-lg-push-3 col-md-push-3">';
    		        $selfintro_thumb_w =880;
		            $selfintro_thumb_h =400;
    		      else:
    		        echo '<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">';
    		        $selfintro_thumb_w =880;
		            $selfintro_thumb_h =400;
    		    endif;
    	    endif;
    	   $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
		   $args = array(
                   'post_type' =>'post',
				   'paged' => $paged,
				   'post_status' =>'publish',
                  );
            $self_query = new WP_Query($args);
            if($self_query->have_posts()):
                while($self_query->have_posts()): $self_query->the_post();
				if(has_post_thumbnail(get_the_ID())):
                   $self_attachment_url = wp_get_attachment_url(get_post_thumbnail_id(get_the_ID()), 'full');
			           $thum_image = selfintro_resize($self_attachment_url, $selfintro_thumb_w, $selfintro_thumb_h,true);
			    endif;	
    	    ?>
    	    <div class="prt_blog_section">
    	        <?php if(!empty($thum_image)): ?>
                    <div class="blog_img">
                       <img src="<?php echo esc_url($thum_image); ?>" alt="<?php echo esc_attr(get_the_title()); ?>" title="<?php echo get_the_title(); ?>" class="img-responsive">
                    </div>    
                <?php endif; ?>
                <div class="blog_text">
                    <p class="post_meta">
                          <?php  selfintro_posted_on(); ?>
		            </p>  
                    <p><?php echo selfintro_the_excerpt(250); ?></p>
                    <a href="<?php echo esc_url(get_the_permalink(get_the_ID()));?>" class="prt_btn"><?php esc_html_e('read more','selfintro'); ?></a>
                 </div>    
               </div>
               <?php
              endwhile;
                $GLOBALS['wp_query']->max_num_pages = $self_query->max_num_pages;
                selfintro_pagination();
				wp_reset_postdata();	
             endif;
            ?>
            </div>
             <?php if($page_sidebar_position == 'left'):  ?> 
	        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 col-lg-pull-9 col-md-pull-9">
               <?php get_sidebar(); ?>
            </div> 
          <?php 
          endif; 
          if($page_sidebar_position == 'right'):  ?> 
	        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                <?php get_sidebar(); ?>
            </div>
         <?php endif; ?>
        </div>
    </div>
</div>
<?php	    
get_footer();
?>