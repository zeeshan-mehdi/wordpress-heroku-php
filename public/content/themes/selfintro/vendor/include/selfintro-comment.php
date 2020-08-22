<?php
function selfintro_custom_comments($comment, $args, $depth){
	$GLOBALS['comment'] = $comment;
	extract($args, EXTR_SKIP);
	if ( 'div' == $args['style'] ) {
		$tag = 'div';
		$add_below = 'comment'; 
	}else{
		$tag = 'li';
		$add_below = 'div-comment';
	}
?>
<<?php echo esc_attr($tag); ?> <?php comment_class( empty( $args['has_children'] ) ? '' : 'parent' ) ?> id="comment-<?php comment_ID() ?>">
	<?php if ( 'div' != $args['style'] ) : ?>
	 <div id="div-comment-<?php comment_ID() ?>" class="dc_comment_wrapper">
	<?php endif; ?>
	<div class="ed_blog_comment ed_toppadder30">
     <div class="ed_comment_image"> 
		<?php echo get_avatar($comment,$size='80') ?>
	 </div>   
	<div class="ed_comment_text">
	     <h5>
		 <a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>"><?php echo esc_attr($comment->comment_author); ?></a>
		 <span><i class="fa fa-calculator"></i> 
		       <?php echo  esc_html( get_comment_date() ); ?>  &nbsp;<i class="fa fa-clock-o"></i>  
			        <?php comment_time(); ?> <?php comment_reply_link( array_merge( $args, array(  'add_below' => $add_below,'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?></span>
		</h5>
		<?php if ( $comment->comment_approved == '0' ) { ?> 
		<p class="comment-awaiting-moderation">
	 	    <?php  esc_html_e('Your comment is awaiting moderation.','selfintro');  ?> 
		</p>
		<br />
		<?php }else{ ?>		 
		<?php 
		    esc_html(comment_text()); }
		  ?>
		  </div>
		</div>
	  <?php if ( 'div' != $args['style'] ) : ?>
	</div>
 <?php 
endif; 
}