<?php
/**
 * The template for displaying the footer.
 *
 *
 * @package Modality
 */ 
$modality_theme_options = modality_get_options( 'modality_theme_options' );?>
	<div class="clear"></div>
	<div id="footer">
	<?php if ( $modality_theme_options['footer_widgets'] == '1') { ?>
		<div id="footer-wrap">
			<?php  get_sidebar('footer'); ?>
		</div><!--footer-wrap-->
	<?php } ?>
	</div><!--footer-->
	<?php get_template_part( 'copyright' ); ?>
</div><!--grid-container-->
<?php wp_footer(); ?>
</body>
</html>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script> 
<script type="text/javascript" src="http://www.scca-susq.com/wp-content/themes/modality-scca/js/custom-mods.js"></script>
<!--<script type="text/javascript" src="http://www.scca-susq.com/wp-content/themes/modality-scca/css/bootstrap-submenu.min.css"></script>-->