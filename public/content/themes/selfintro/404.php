<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package SelfIntro
 */
get_header();
if (function_exists( 'fw_get_db_settings_option' )):	
	$selfintro_data = fw_get_db_settings_option();  
endif; 
$error_404_heading = '';
if(!empty($selfintro_data['error_404_heading'])):
    $error_404_heading = $selfintro_data['error_404_heading'];
endif;  
$error_404_desc = '';
if(!empty($selfintro_data['error_404_desc'])):
    $error_404_desc = $selfintro_data['error_404_desc'];
endif;  
?>
<div class="cv_404">
    <div class="container">
        <div class="row">
		 <?php 
		  if(!empty($error_404_heading)):
		     echo '<h1>'.esc_html($error_404_heading).'</h1>';
		  else:
             echo '<h1>'.esc_html__('404','selfintro').'</h1>';
          endif;
		  if(!empty($error_404_heading)):
		    echo '<p>'.esc_html($error_404_desc).'</p>';
		  else:
		    echo '<p>'.esc_html__('You found yourself on the lonely place. Return back to the home page','selfintro').'</p>';
		  endif;
            echo '<a href="'.esc_url(home_url('/')).'" class="prt_btn">'.esc_html__('return back','selfintro').'</a>';
		 ?>
       </div>     
    </div>    
</div> 
<?php
get_footer();