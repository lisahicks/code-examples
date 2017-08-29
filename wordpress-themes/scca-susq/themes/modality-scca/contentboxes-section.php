<?php
/**
 * @package Modality
 */
$modality_theme_options = modality_get_options( 'modality_theme_options' );
$cntbx_bg_image = $modality_theme_options['cntbx_bg_image'];

if ($cntbx_bg_image != '') { ?>
	<div class="content-boxes" style="background: url(<?php echo esc_url($cntbx_bg_image); ?>) 50% 0 no-repeat fixed; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover;">
<?php } else { ?>	
	<div class="content-boxes">
<?php } ?>
	<div id="content-boxes-wrap">
		<div class="content-boxes-AX col wow bounceIn" data-wow-delay="0.2s">
			<div class="circle">
            	<img src="http://www.scca-susq.com/images/icon-content-boxes-AX.png" width="99" height="97" alt="AutoCross Beginners" /> 
            </div>
			<h4><?php echo esc_attr($modality_theme_options['first_column_header']); ?></h4>
			<p><?php echo esc_attr($modality_theme_options['first_column_text']); ?></p>
			<a class="content-btn" href="<?php echo esc_url($modality_theme_options['first_column_url']); ?>"><?php _e('Read More','modality'); ?></a>
		</div>
		<div class="content-boxes-RX col wow bounceIn" data-wow-delay="0.5s">
			<div class="circle">	
            	<img src="http://www.scca-susq.com/images/icon-content-boxes-RX.png" width="99" height="98" alt="RallyCross Beginners" /> 
            </div>
			<h4><?php echo esc_attr($modality_theme_options['second_column_header']); ?></h4>
			<p><?php echo esc_attr($modality_theme_options['second_column_text']); ?></p>
			<a class="content-btn" href="<?php echo esc_url($modality_theme_options['second_column_url']); ?>"><?php _e('Read More','modality'); ?></a>
		</div>
		<div class="content-boxes-CAL col wow bounceIn" data-wow-delay="0.8s">
			<div class="circle">	
            	<img src="http://www.scca-susq.com/images/icon-content-boxes-CAL.png" width="103" height="99" alt="SCCA Events Calendar" /> 
            </div>
			<h4><?php echo esc_attr($modality_theme_options['third_column_header']); ?></h4>
			<p><?php echo esc_attr($modality_theme_options['third_column_text']); ?></p>
			<a class="content-btn" href="<?php echo esc_url($modality_theme_options['third_column_url']); ?>"><?php _e('Read More','modality'); ?></a>
		</div>
	</div>
</div>
