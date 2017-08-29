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
        <a href="http://www.scca-susq.com/rallycross/beginners-guide/">
        <div class="feature feature-RX wow bounceIn" data-wow-delay="0.05s">
			<h3>BEGINNER'S GUIDE</h3>
			<p>The ins and outs of RX</p>
            <div class="circle">
         			<img src="http://www.scca-susq.com/images/RX-custom-icons-cone.png" width="97" height="auto" alt="BEGINNER'S GUIDE" /> 
            </div><!--circle-->
		</div><!--feature-->
        </a>
        <a href="http://www.scca-susq.com/rallycross/rules-regulations/">
            <div class="feature feature-RX wow bounceIn" data-wow-delay="0.05s">
			<h3>RULES & REGS</h3>
			<p>Get the particulars</p>
            <div class="circle">
         			<img src="http://www.scca-susq.com/images/RX-custom-icons-checkmark.png" width="97" height="auto" alt="RULES & REGS"/> 
            </div><!--circle-->
		</div><!--feature-->
		</a>
        <a href="http://www.scca-susq.com/rallycross/calendar/">
            <div class="feature feature-RX wow bounceIn" data-wow-delay="0.05s">
			<h3>EVENTS CALENDAR</h3>
			<p>View the event schedule</p>
            <div class="circle">
         			<img src="http://www.scca-susq.com/images/RX-custom-icons-cal.png" width="97" height="auto" alt="EVENTS CALENDAR"/> 
            </div><!--circle-->
		</div><!--feature-->
        </a>
        <a href="http://www.scca-susq.com/rallycross/location/">
            <div class="feature feature-RX wow bounceIn" data-wow-delay="0.05s">
			<h3>LOCATIONS</h3>
			<p>Find out where we run</p>
            <div class="circle">
         			<img src="http://www.scca-susq.com/images/RX-custom-icons-location.png" width="97" height="auto" alt="LOCATIONS"/> 
            </div><!--circle-->
		</div><!--feature-->
        </a>

	</div><!--features-wrap-->
    
<div id="features-wrap">
<div class="center">        
		<a href="http://www.scca-susq.com/rallycross/current-results/">            
		<div class="feature feature-RX wow bounceIn half-width" data-wow-delay="0.05s">
			<h3>CURRENT RESULTS</h3>
			<p>See how things are going</p>
            <div class="circle">
         			<img src="http://www.scca-susq.com/images/RX-custom-icons-medal.png" width="97" height="auto" alt="CURRENT RESULTS"/> 
            </div><!--circle-->
		</div><!--feature-->
        </a>
        <a href="http://www.scca-susq.com/rallycross/photos/">
            <div class="feature feature-RX wow bounceIn half-width" data-wow-delay="0.05s">
			<h3>PHOTOS</h3>
			<p>Check out event photos</p>
            <div class="circle">
         			<img src="http://www.scca-susq.com/images/RX-custom-icons-camera.png" width="97" height="auto" alt="PHOTOS"/> 
            </div><!--circle-->
		</div><!--feature-->
        </a>
</div>

        
</div><!--features-wrap--> 

  
</div><!--features-->