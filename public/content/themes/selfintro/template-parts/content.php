<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package SelfIntro
 */
$selfintro_thumb_w =1900;
$selfintro_thumb_h =800;
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
		 echo '<h2 class="entry-title">';
		   if(is_sticky() && is_home() ) :
             echo '<div class="sticky-post"><i class="fa fa-thumb-tack" aria-hidden="true"></i></div>';
           endif;
	     echo '<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">'.
		 get_the_title().'</a></h2>';
		  ?>
	</header>  
    <?php  
    if (has_post_thumbnail(get_the_ID())):
            $selfintro_attachment_url = wp_get_attachment_url(get_post_thumbnail_id(get_the_ID()), 'full');
			$thum_image = selfintro_resize($selfintro_attachment_url, $selfintro_thumb_w, $selfintro_thumb_h); 
		if(!empty($thum_image)):
	         echo '<div class="ed_blog_image">
			   <a href="'.esc_url(get_the_permalink(get_the_ID())).'">
			    <img src="'.esc_url($thum_image).'" alt="'.esc_attr(get_the_title()).'" /></a>
		     </div>';
		endif;
    endif; 
    ?>
	<?php if('post' === get_post_type()) : ?>
	  <div class="entry-meta">
		<?php selfintro_posted_on(); ?>
	  </div>
	<?php endif; ?>
    <div class="entry-content">
		<?php
		the_content();
		wp_link_pages( array(
				'before'  => '<div class="page-links"><span class="page-links-title">'.esc_html__( 'Pages:', 'selfintro').'</span>',
				'after'   => '</div>',
				'link_before' => '<span>',
				'link_after'  => '</span>',
				'pagelink'    => '<span class="screen-reader-text">'.esc_html__('Page', 'selfintro' ).'</span>%',
				'separator'   => '<span class="screen-reader-text">, </span>',
			) ); 
		?> 
	</div><!-- .entry-content -->
    <footer class="entry-footer">
		<?php selfintro_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->