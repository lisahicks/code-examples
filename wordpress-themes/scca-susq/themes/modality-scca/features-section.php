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
		<div class="feature feature-AX wow bounceIn" data-wow-delay="0.05s">
			<h3><?php echo esc_attr($modality_theme_options['feature_one']); ?></h3>
			<p><?php echo esc_attr($modality_theme_options['feature_one_desc']); ?></p>
			<?php if ($modality_theme_options['feature_one_image'] !='') { ?>
				<?php if ($modality_theme_options['feature_one_url'] !='') { ?>
					<a href="<?php echo esc_url($modality_theme_options['feature_one_url']); ?>">
						<div class="circle">
							<img alt="Featured Image" src="<?php echo esc_url($modality_theme_options['feature_one_image']) ?>">
						</div><!--circle-->
					</a>
				<?php } else { ?>
					<div class="circle">
						<img alt="Featured Image" src="<?php echo esc_url($modality_theme_options['feature_one_image']) ?>">
					</div><!--circle-->
				<?php } ?>
			<?php } else { ?>
				<?php if ($modality_theme_options['feature_one_url'] !='') { ?>
					<a href="<?php echo esc_url($modality_theme_options['feature_one_url']); ?>">
						<div class="circle">
                        	<img src="http://www.scca-susq.com/images/icons-ax-novice.png" width="90" height="auto" alt="AX Novice Guide" /> 
                        </div><!--circle-->
					</a>
				<?php } else { ?>
					<div class="circle">
                        	<img src="http://www.scca-susq.com/images/icons-ax-novice.png" width="90" height="auto" alt="AX Novice Guide" /> 					</div><!--circle-->			
				<?php } ?>
			<?php } ?>	
		</div><!--feature-->
		<div class="feature feature-RX wow bounceIn" data-wow-delay="0.5s">
			<h3><?php echo esc_attr($modality_theme_options['feature_two']); ?></h3>
			<p><?php echo esc_attr($modality_theme_options['feature_two_desc']); ?></p>
			<?php if ($modality_theme_options['feature_two_image'] !='') { ?>
				<?php if ($modality_theme_options['feature_two_url'] !='') { ?>
					<a href="<?php echo esc_url($modality_theme_options['feature_two_url']); ?>">
						<div class="circle">
							<img alt="Featured Image" src="<?php echo esc_url($modality_theme_options['feature_two_image']) ?>">
						</div><!--circle-->
					</a>
				<?php } else { ?>
					<div class="circle">
						<img alt="Featured Image" src="<?php echo esc_url($modality_theme_options['feature_two_image']) ?>">
					</div><!--circle-->
				<?php } ?>
			<?php } else { ?>
				<?php if ($modality_theme_options['feature_two_url'] !='') { ?>
					<a href="<?php echo esc_url($modality_theme_options['feature_two_url']); ?>">
						<div class="circle">
                        	<img src="http://www.scca-susq.com/images/icons-rx-cone-lg.png" width="90" height="auto" alt="RX Novice Guide" /> 						</div><!--circle-->
					</a>
				<?php } else { ?>
					<div class="circle">
                        	<img src="http://www.scca-susq.com/images/icons-rx-cone-lg.png" width="90" height="auto" alt="RX Novice Guide" /> 					</div><!--circle-->			
				<?php } ?>
			<?php } ?>	
		</div><!--feature-->
		<div class="feature feature-get-involved wow bounceIn" data-wow-delay="0.8s">
			<h3><?php echo esc_attr($modality_theme_options['feature_three']); ?></h3>
			<p><?php echo esc_attr($modality_theme_options['feature_three_desc']); ?></p>
			<?php if ($modality_theme_options['feature_three_image'] !='') { ?>
				<?php if ($modality_theme_options['feature_three_url'] !='') { ?>
					<a href="<?php echo esc_url($modality_theme_options['feature_three_url']); ?>">
						<div class="circle">
							<img alt="Featured Image" src="<?php echo esc_url($modality_theme_options['feature_three_image']) ?>">
						</div><!--circle-->
					</a>
				<?php } else { ?>
					<div class="circle">
						<img alt="Featured Image" src="<?php echo esc_url($modality_theme_options['feature_three_image']) ?>">
					</div><!--circle-->
				<?php } ?>
			<?php } else { ?>
				<?php if ($modality_theme_options['feature_three_url'] !='') { ?>
					<a href="<?php echo esc_url($modality_theme_options['feature_three_url']); ?>">
						<div class="circle">
							<i class="fa <?php echo esc_attr($modality_theme_options['feature_three_icon']); ?>"></i>
						</div><!--circle-->
					</a>
				<?php } else { ?>
					<div class="circle">
						<i class="fa <?php echo esc_attr($modality_theme_options['feature_three_icon']); ?>"></i>
					</div><!--circle-->			
				<?php } ?>
			<?php } ?>	
		</div><!--feature-->
		<div class="feature feature-contact wow bounceIn" data-wow-delay="1.1s">
			<h3><?php echo esc_attr($modality_theme_options['feature_four']); ?></h3>
			<p><?php echo esc_attr($modality_theme_options['feature_four_desc']); ?></p>
			<?php if ($modality_theme_options['feature_four_image'] !='') { ?>
				<?php if ($modality_theme_options['feature_four_url'] !='') { ?>
					<a href="<?php echo esc_url($modality_theme_options['feature_four_url']); ?>">
						<div class="circle">
							<img alt="Featured Image" src="<?php echo esc_url($modality_theme_options['feature_four_image']) ?>">
						</div><!--circle-->
					</a>
				<?php } else { ?>
					<div class="circle">
						<img alt="Featured Image" src="<?php echo esc_url($modality_theme_options['feature_four_image']) ?>">
					</div><!--circle-->
				<?php } ?>
			<?php } else { ?>
				<?php if ($modality_theme_options['feature_four_url'] !='') { ?>
					<a href="<?php echo esc_url($modality_theme_options['feature_four_url']); ?>">
						<div class="circle">
							<i class="fa <?php echo esc_attr($modality_theme_options['feature_four_icon']); ?>"></i>
						</div><!--circle-->
					</a>
				<?php } else { ?>
					<div class="circle">
						<i class="fa <?php echo esc_attr($modality_theme_options['feature_four_icon']); ?>"></i>
					</div><!--circle-->			
				<?php } ?>
			<?php } ?>	
		</div><!--feature-->
	</div><!--features-wrap-->
</div><!--features-->