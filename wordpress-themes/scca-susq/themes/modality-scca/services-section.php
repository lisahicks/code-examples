<?php
/**
 * @package Modality
 */
 
add_filter("the_content", "plugin_myContentFilter");

	function plugin_myContentFilter($content)
	{
		// Take the existing content and return a subset of it
		return substr($content, 0, 10000);
	}
	
$modality_theme_options = modality_get_options( 'modality_theme_options' );
$services_bg_image = $modality_theme_options['services_bg_image'];

if ($services_bg_image !='') { ?>
	<div id="services" style="background: url(<?php echo esc_url($services_bg_image); ?>) 50% 0 no-repeat fixed; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover;">
<?php } else { ?>
	<div id="services">
<?php } ?>
	<div id="services-wrap">
		<div class="services-left wow bounceInLeft" data-wow-delay="0.1s">
            <?php
				$my_id = 719;
				$post_id_719 = get_post($my_id);
				$content = $post_id_719->post_content;
				$content = apply_filters( 'the_content', $content );
				print $content;
			?>
		</div><!--services-left-->
		<div class="services-right">
			<script class="ai1ec-widget-placeholder" data-widget="ai1ec_agenda_widget" data-events_seek_type="events" data-cat_ids="40,43,41" data-events_per_page="5" data-days_per_page="5">
					  (function(){var d=document,s=d.createElement('script'),
					  i='ai1ec-script';if(d.getElementById(i))return;s.async=1;
					  s.id=i;s.src='//www.scca-susq.com/?ai1ec_js_widget';
					  d.getElementsByTagName('head')[0].appendChild(s);})();
			</script>               
		</div><!--services-right-->
	</div><!--services-wrap-->
</div><!--services-->