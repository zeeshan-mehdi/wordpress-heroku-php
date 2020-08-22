<?php  
$selfintro_data = '';
if(function_exists( 'fw_get_db_settings_option' )):	
    $selfintro_data = fw_get_db_settings_option();     
endif; 
$selfintro_thumb_w = $selfintro_thumb_h = '';
if(!empty( $selfintro_data['logo_width']) && !empty( $selfintro_data['logo_height'])):
    $selfintro_thumb_w =  $selfintro_data['logo_width'];
    $selfintro_thumb_h =  $selfintro_data['logo_height'];
endif; 
$selfintro_color = '';
if(!empty($selfintro_data['selfintro_color'])):
   $selfintro_color = $selfintro_data['selfintro_color'];
endif;
$logo_svgcode = '';
if(!empty($selfintro_data['logo_svgcode'])):
    $logo_svgcode =$selfintro_data['logo_svgcode'];
endif;
$attachment_id = $selfintro_logoimage =  $logoimage = '';
if(!empty($selfintro_data['logo_image']['url'])):
	$attachment_id = $selfintro_data['logo_image']['attachment_id'];
	$selfintro_logoimage = wp_get_attachment_url($attachment_id, 'full');
	$logoimage = selfintro_resize($selfintro_logoimage, $selfintro_thumb_w, $selfintro_thumb_h , true); 
else:   
  if($selfintro_color == 1): 
    $logoimage = get_template_directory_uri().'/assets/images/logo.svg'; 
  else:
    $logoimage = get_template_directory_uri().'/assets/images/logo-black.svg';
  endif;
endif;
$breadcrumbs_switch = '';
if(!empty($selfintro_data['breadcrumbs_switch'])):
    $breadcrumbs_switch = $selfintro_data['breadcrumbs_switch'];
 else:
    $breadcrumbs_switch = 'on'; 
endif;
if($breadcrumbs_switch == 'on'):
    echo '<div class="cv_header">';
else:
    echo '<div class="cv_header cv_without_breadcrumb">';
endif;
?> 
<div class="container">
        <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
            <div class="cv_logo">
               <?php 
			    if(empty($logo_svgcode)):
				    if(!empty($logoimage)): ?>
				      <a href="<?php echo esc_url(home_url('/')); ?>">
                       <img src="<?php echo esc_url($logoimage); ?>" alt="<?php esc_attr_e('Logo','selfintro'); ?>"></a>
				<?php
                    endif;				
				else:
				 echo '<a href="'.esc_url(home_url('/')).'">';
				   printf($logo_svgcode);
				echo '</a>';
				endif;
				?>
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
    					<span class="icon-bar"></span>
    					<span class="icon-bar"></span>
    					<span class="icon-bar"></span>                        
      			</button>
			</div>    
        </div>
        <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">
            <div class="cv_menu">
                <nav class="navbar">
    				<div class="collapse navbar-collapse" id="myNavbar">
					   <?php
            				wp_nav_menu( array(
            					'theme_location' => 'selfintro',
            					'menu_id' => 'primary-menu',
								'fallback_cb'=> 'selfintro_menu_editor'
            				) );
			            ?>
					</div>
    			</nav> 
				<?php 
				$woocommerce_minicart = '';
				if(!empty($selfintro_data['woocommerce_minicart'])):
					$woocommerce_minicart = $selfintro_data['woocommerce_minicart'];
				 else:
					$woocommerce_minicart = 'off'; 
				endif;
				if($woocommerce_minicart =='on'):
				  selfintro_custom_mini_cart();
                endif;
			  ?>
            </div> 
        </div> 
    </div> 
</div>