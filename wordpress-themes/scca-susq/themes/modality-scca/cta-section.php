<?php
/**
 * @package Modality
 */
$modality_theme_options = modality_get_options( 'modality_theme_options' );
$cta_bg_image = $modality_theme_options['cta_bg_image'];

if ($cta_bg_image !='') { ?>
	<div class="cta" style="background: url(<?php echo esc_url($cta_bg_image); ?>) 50% 0 no-repeat fixed; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover;">
<?php } else { ?>
	<div class="cta">
<?php } ?>
	<div id="cta-wrap">
		<div>
			<h4 class="wow bounceInRight" data-wow-delay="0.1s"><?php echo esc_attr($modality_theme_options['cta_section_sm_header']); ?> </h4>
			<h2 class="boxtitle wow bounceInLeft" data-wow-delay="0.1s"><?php echo esc_attr($modality_theme_options['cta_section_big_header']); ?></h2>
<p>Autocross is an inexpensive, timed motorsport competition where drivers navigate one at a time through a defined course in low-hazard environment like a large parking lot or air strip. It can be a fun weekend activity, a chance to test and tune your driving skills (and car), or used as an entry-level motorsport as a stepping stone if you're looking to move into other more competitive (and expensive) forms of racing. While speeds are no greater than those normally encountered in legal highway driving, the combination of concentration and car feedback creates an adrenaline-pumping experience!</p>
		</div>
	</div>
</div>