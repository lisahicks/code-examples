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
        <a href="http://www.scca-susq.com/about-susquehanna-scca/officers-committees/">
        <div class="feature feature-AX wow bounceIn" data-wow-delay="0.05s">
			<h3>OFFICERS & COMMITTEES</h3>
			<p>Members, just like you</p>
            <div class="circle">
         			<img src="http://www.scca-susq.com/images/about-custom-icons-cog.png" width="97" height="auto" alt="Officers & Committees" /> 
            </div><!--circle-->
		</div><!--feature-->
        </a>
            <a href="http://www.scca-susq.com/about-susquehanna-scca/meetings-minutes/">
            <div class="feature feature-AX wow bounceIn" data-wow-delay="0.05s">
			<h3>MEETINGS & MINUTES</h3>
			<p>The what, when and how</p>
            <div class="circle">
         			<img src="http://www.scca-susq.com/images/about-custom-icons-text-file.png" width="97" height="auto" alt="Meetings & Minutes"/> 
            </div><!--circle-->
		</div><!--feature-->
			</a>
        <a href="http://www.scca-susq.com/about-susquehanna-scca/event-calendar/">
            <div class="feature feature-AX wow bounceIn" data-wow-delay="0.05s">
			<h3>EVENTS CALENDAR</h3>
			<p>View all scheduled events</p>
            <div class="circle">
         			<img src="http://www.scca-susq.com/images/about-custom-icons-calendar.png" width="97" height="auto" alt="Events Calendar"/> 
            </div><!--circle-->
		</div><!--feature-->
        </a>
        <a href="http://www.scca-susq.com/about-susquehanna-scca/newsletter/">
            <div class="feature feature-AX wow bounceIn" data-wow-delay="0.05s">
			<h3>NEWSLETTER</h3>
			<p>Read and sign up</p>
            <div class="circle">
         			<img src="http://www.scca-susq.com/images/about-custom-icons-comment.png " width="97" height="auto" alt="Newsletter"/> 
            </div><!--circle-->
		</div><!--feature-->
        </a>
	</div><!--features-wrap-->
	<div id="features-wrap">
    
        <a href="http://www.scca-susq.com/about-susquehanna-scca/join-scca/">
        <div class="feature feature-AX wow bounceIn" data-wow-delay="0.05s">
			<h3>JOIN SCCA</h3>
			<p>Find your fast</p>
            <div class="circle">
         			<img src="http://www.scca-susq.com/images/about-custom-icons-join.png" width="97" height="auto" alt="Join SCCA" /> 
            </div><!--circle-->
		</div><!--feature-->
        </a>
        
        <a href="http://www.scca-susq.com/about-susquehanna-scca/history/">
        <div class="feature feature-AX wow bounceIn" data-wow-delay="0.05s">
			<h3>HISTORY</h3>
			<p>Where we came from</p>
            <div class="circle">
         			<img src="http://www.scca-susq.com/images/about-custom-icons-history.png" width="97" height="auto" alt="History" /> 
            </div><!--circle-->
		</div><!--feature-->
        </a>
        <a href="http://www.scca-susq.com/about-susquehanna-scca/chapter-clubs/">
        <div class="feature feature-AX wow bounceIn" data-wow-delay="0.05s">
			<h3>CHAPTER CLUBS</h3>
			<p>A unique combination</p>
            <div class="circle">
         			<img src="http://www.scca-susq.com/images/about-custom-icons-tachometer.png" width="97" height="auto" alt="Chapter Club" /> 
            </div><!--circle-->
		</div><!--feature-->
        </a>
        <a href="http://www.scca-susq.com/about-susquehanna-scca/sponsors/">
        <div class="feature feature-AX wow bounceIn" data-wow-delay="0.05s">
			<h3>SPONSORS</h3>
			<p>We couldn't do it without them</p>
            <div class="circle">
         			<img src="http://www.scca-susq.com/images/about-custom-icons-wrench.png" width="97" height="auto" alt="Sponsors" /> 
            </div><!--circle-->
		</div><!--feature-->
        </a>

	</div><!--features-wrap-->
	<div id="features-wrap">
    
        <a href="http://www.scca-susq.com/about-susquehanna-scca/contact-susq-scca/">
        <div class="feature feature-AX wow bounceIn" data-wow-delay="0.05s">
			<h3>CONTACT US</h3>
			<p>We'd be happy to hear from you</p>
            <div class="circle">
         			<img src="http://www.scca-susq.com/images/about-custom-icons-envelope.png" width="97" height="auto" alt="COntact Us" /> 
            </div><!--circle-->
		</div><!--feature-->
        </a>
        
	</div><!--features-wrap-->
</div><!--features-->