<?php
/**
 * template name: parallax template
 */
 get_header();
?>
<div class="container-fluid">
 <div class="row">
<?php  
$page_sort_sections = '';
if(function_exists('selfintro_sort_sections')):
  $page_sort_sections = selfintro_sort_sections();
endif;
$args = array(
	'posts_per_page' => -1,
	'post_type' => 'Page',
	'post__in'  => (array) $page_sort_sections,
	'orderby' => 'post__in',
 	);
$home_query = new WP_Query($args);  
if($home_query->have_posts()):  
   while($home_query->have_posts()) : $home_query->the_post();
      get_template_part('template-parts/page-sections');
   endwhile;
else: 
    echo '<div class="container">
	       <div class="cv_notfoundtemp">';
            get_template_part( 'template-parts/content', 'none');
    echo "</div> 
	  </div>";
endif; 
wp_reset_postdata();
?>   
</div>
</div> 
<?php get_footer(); ?>