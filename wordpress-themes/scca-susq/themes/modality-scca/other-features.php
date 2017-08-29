<?php
/**
 * @package Modality
 */
$modality_theme_options = modality_get_options( 'modality_theme_options' );
$features_bg_image = $modality_theme_options['features_bg_image'];

if ($features_bg_image !='') { ?>
	<div id="features" style="background: url(<?php echo esc_url($features_bg_image); ?>) 50% 0 no-repeat fixed; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover;">
<?php } else { ?>
	<div id="features">
<?php } ?>
	<div id="features-wrap">
        <a href="http://www.scca-susq.com/other-racing-programs/hillclimb/">
        <div class="feature feature-AX wow bounceIn" data-wow-delay="0.05s">
			<h3>HILLCLIMB</h3>
			<p>With the PHA</p>
            <div class="circle">
         			<img src="http://www.scca-susq.com/images/other-custom-icons-tire.png" width="97" height="auto" alt="HILLCLIMB" /> 
        </div><!--circle-->
		</div><!--feature-->
        </a>
        <a href="http://www.scca-susq.com/other-racing-programs/road-racing/">
        <div class="feature feature-AX wow bounceIn" data-wow-delay="0.05s">
			<h3>ROAD RACING</h3>
			<p>Close to home</p>
            <div class="circle">
         			<img src="http://www.scca-susq.com/images/other-custom-icons-flag.png" width="97" height="auto" alt="ROAD RACING"/> 
            </div><!--circle-->
		</div><!--feature-->
			</a>
        <a href="http://www.scca-susq.com/other-racing-programs/road-rallye/">
        <div class="feature feature-AX wow bounceIn" data-wow-delay="0.05s">
			<h3>ROAD RALLYE</h3>
			<p>An old staple</p>
            <div class="circle">
         			<img src="http://www.scca-susq.com/images/other-custom-icons-road.png" width="97" height="auto" alt="ROAD RALLYE"/> 
            </div><!--circle-->
		</div><!--feature-->
        </a>
        <a href="http://www.scca-susq.com/other-racing-programs/karting/">
        <div class="feature feature-AX wow bounceIn" data-wow-delay="0.05s">
			<h3>KARTING</h3>
			<p>High-speed thrill</p>
            <div class="circle">
         			<img src="http://www.scca-susq.com/images/other-custom-icons-wheel.png" width="97" height="auto" alt="KARTING"/> 
            </div><!--circle-->
		</div><!--feature-->
        </a>

	</div><!--features-wrap-->
</div><!--features-->