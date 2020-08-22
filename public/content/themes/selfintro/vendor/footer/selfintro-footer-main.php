<?php
$selfintro_data = '';
if(function_exists( 'fw_get_db_settings_option' )):	
    $selfintro_data = fw_get_db_settings_option();     
endif; 
$copright = '';
if(!empty($selfintro_data['footer_copyrigth'])):
    $copright = $selfintro_data['footer_copyrigth'];
endif;
$facebook ='';
if(!empty($selfintro_data['facebook'])):
    $facebook = $selfintro_data['facebook'];
endif;
$googleplus ='';
if(!empty($selfintro_data['google_plus'])):
    $googleplus = $selfintro_data['google_plus'];
endif;
$linkedin ='';
if(!empty($selfintro_data['linkedin'])):
    $linkedin = $selfintro_data['linkedin'];
endif;
$twitter ='';
if(!empty($selfintro_data['twitter'])):
    $twitter = $selfintro_data['twitter'];
endif;
$pinterest ='';
if(!empty($selfintro_data['pinterest'])):
    $pinterest = $selfintro_data['pinterest'];
endif;
$behance = '';
if(!empty($selfintro_data['behance'])):
    $behance = $selfintro_data['behance'];
endif;
$dribbble = '';
if(!empty($selfintro_data['dribbble'])):
    $dribbble = $selfintro_data['dribbble'];
endif;
?>
<div class="cv_footer">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<?php 
				if(!empty($copright)):
					echo '<p>'.$copright.'</p>'; 
				else:
					 echo '<p>'.esc_html__('Copyright','selfintro').
					 ' <i class="fa fa-copyright"></i> '.esc_html__('2018 All Rights Reserved','selfintro').'</p>';
				endif;
				echo '<ul>';
				if(!empty($facebook)):
					echo '<li><a href="'.esc_url($facebook).'"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>';
				endif;
				if(!empty($twitter)):
					echo '<li><a href="'.esc_url($twitter).'"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>';
				endif;
				if(!empty($pinterest)):
					echo '<li><a href="'.esc_url($pinterest).'"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>';
				endif;
				if(!empty($behance)):
					echo '<li><a href="'.esc_url($behance).'"><i class="fa fa-behance" aria-hidden="true"></i></a></li>';
				endif;
				if(!empty($googleplus)):
					echo '<li><a href="'.esc_url($googleplus).'"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>';
				endif;
				if(!empty($dribbble)):
					echo '<li><a href="'.esc_url($dribbble).'">
							<i class="fa fa-dribbble" aria-hidden="true"></i></a></li>'; 
				endif;	
				echo '</ul>';
				?> 
			</div>
		</div>
	</div> 
</div> 
<p id="back-top">
 <a href="#"><span><i class="fa fa-chevron-up"></i></span></a>
</p> 