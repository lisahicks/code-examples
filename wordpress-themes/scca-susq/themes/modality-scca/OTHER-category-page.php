<?php
/**
 * Template Name: OTHER-category-page
 *
 * @package Modality
 */
$modality_theme_options = modality_get_options( 'modality_theme_options' );
get_header(); ?>
	<div id="main" class="<?php echo esc_attr($modality_theme_options['layout_settings']); ?>">
    <div>
    	<img src="http://www.scca-susq.com/images/catgory-image-other.jpg" width="100%" height="auto" alt="AX-category-page"/> 
	</div>
	<?php 
			get_template_part( 'getstarted', 'section' );
			get_template_part( 'othermaincat', 'title' );
			get_template_part( 'other', 'features' );
			get_template_part( 'sponsorsinner', 'section' );	
	 ?>
	</div><!--main-->
	<?php if ($modality_theme_options['social_section_on'] == '1') {
			get_template_part( 'social', 'section' );	
		}
get_footer(); ?>