<?php
/**
 * The Template for displaying all single posts.
 *
 * @package Modality
 */
$modality_theme_options = modality_get_options( 'modality_theme_options' );
get_header(); ?>
<div id="main" class="<?php echo esc_attr($modality_theme_options['layout_settings']);?>">
	<div class="content-posts-wrap">
	<div id="features-wrap">
    <img class="alignleft size-full wp-image-1260" src="http://www.scca-susq.com/wp-content/uploads/2016/04/red-flag.jpg" alt="red-flag" width="259" height="281" />
        <div id="red-flag"><p class="red-flag-title">RED FLAG!</p>
        <p>I'm sure they didn't mean it, but someone did something silly and you've been red flagged. Since this page doesn't exist anymore, you can just <a href="http://www.scca-susq.com/" style="color: #e83c40; text-decoration:underline; font-weight:bold;">return to the start</a> for a re-run, and we'll just pretend this didn't happened.</p>
    </div>
   </div>
	</div><!--wrap-->
	</div><!--content-posts-wrap-->
</div><!--main-->
<?php if ($modality_theme_options['social_section_on'] == '1') {
	get_template_part( 'social', 'section' );	
}
get_footer(); ?>