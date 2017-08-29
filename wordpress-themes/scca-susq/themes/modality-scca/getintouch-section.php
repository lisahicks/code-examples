<?php
/**
 * @package Modality
 */
$modality_theme_options = modality_get_options( 'modality_theme_options' );
$getin_bg_image = $modality_theme_options['getin_bg_image'];

if ($getin_bg_image != '') { ?>
	<div class="get-in-touch" style="background: url(<?php echo esc_url($getin_bg_image); ?>) 50% 0 no-repeat fixed; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover;"> 
<?php } else { ?>
	<div class="get-in-touch">
<?php } ?>
	<div id="get-in-touch-wrap">
		<div>
			<h2 class="boxtitle wow bounceInLeft" data-wow-delay="0.1s"><?php echo esc_attr($modality_theme_options['getin_section_header']); ?></h2>
			<h4 class="sub-title wow bounceInRight" data-wow-delay="0.2s"><?php echo esc_attr($modality_theme_options['getin_section_text']); ?> </h4>
<p>RallyCross is often considered "autocross on dirt." Just imagine a scaled-down (safer) version of a rally stage on an unpaved plot of land. Luckily, the course is laid out with traffic cones instead of trees or rocks reducing hazards that could cause damage. Just like autocross, the emphasis is on your skills as a driver and car handling rather than strictly speed. Whether you're looking for a cost effective way to gauge your interest for "doing it in the dirt," or you just want  some exciting seat time, rallycross is for you!</p>       
			<a href="<?php echo esc_url($modality_theme_options['getin_button_url']); ?>" class="git-link"><?php echo esc_attr($modality_theme_options['getin_button_text']); ?></a>
		</div>
	</div>
</div>