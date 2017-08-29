<?php
/**
 * The Header of the theme.
 *
 * Displays all of the <head> section and everything up till <main id="main">
 *
 * @package Modality
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
<link rel="icon" type="image/png" href="/favicon-32x32.png" sizes="32x32">
<link rel="icon" type="image/png" href="/favicon-16x16.png" sizes="16x16">
<link rel="manifest" href="/manifest.json">
<link rel="mask-icon" href="/safari-pinned-tab.svg" color="#f00d0d">
<meta name="theme-color" content="#ffffff">

<link href='https://fonts.googleapis.com/css?family=Ubuntu:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div id="grid-container">
	<div class="clear"></div>
		<?php $modality_theme_options = modality_get_options( 'modality_theme_options' );
		if ($modality_theme_options['header_top_enable'] == '1') {
			get_template_part( 'top', 'header' );
		} ?>
		<?php if (get_header_image()!='') { ?>
			<div id="header-holder" style="background: url(<?php echo esc_url(header_image()); ?>) 50% 0 no-repeat fixed; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover;">
		<?php } else { ?>
			<div id="header-holder">
		<?php } ?>
			<div id ="header-wrap">
      			<nav class="navbar navbar-default">
					<div id="logo">
						<?php if ( $modality_theme_options['logo'] != '' ) { ?>
							<a href="<?php echo esc_url( home_url( '/' ) ) ?>"><img src="<?php echo esc_url($modality_theme_options['logo']); ?>" alt="<?php echo esc_attr($modality_theme_options['logo_alt_text']); ?>"/></a>
							<?php if ($modality_theme_options['enable_logo_tagline'] == '1' ) { ?> 
								<h5 class="site-description"><?php echo esc_attr(bloginfo('description')); ?></h5>
							<?php } ?>
						<?php } else { ?>
							<a href="<?php echo esc_url( home_url( '/' ) ) ?>"><?php esc_attr(bloginfo( 'name' )); ?></a>
							<?php if ($modality_theme_options['enable_logo_tagline'] == '1' ) { ?> 
								<h5 class="site-description"><?php echo esc_attr(bloginfo('description')); ?></h5>
							<?php } ?>
						<?php } ?>
					</div><!--logo-->
         <div id="header-nav-join" class="tablet-hide mobile-hide">
         <a href="https://www.scca.com/pages/join-scca">
         	<img src="http://www.scca-susq.com/images/header-scca-join-now.png" width="249" height="103" alt="SCCA Join Now"></a> </div>
         <div class="navbar-header">
            			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              			<span class="sr-only">Toggle navigation</span>
              			<span class="icon-bar"></span>
              			<span class="icon-bar"></span>
              			<span class="icon-bar"></span>
            			</button>
          			</div><!--navbar-header-->
          			<div id="navbar" class="navbar-collapse collapse">
					<?php 
					if (has_nav_menu('main_navigation')) {
						
						$modality_default_menu = array(
    						'theme_location'  => 'main_navigation',
							'menu'       => 'main_navigation',
    						'depth'      => 0,
    						'container'  => false,
    						'menu_class' => 'nav navbar-nav',
                			'fallback_cb'       => 'wp_page_menu',
    						'walker'     => new wp_bootstrap_navwalker(),
						);
					
					} else {
						
						$modality_default_menu = array(
    						'theme_location'  => 'main_navigation',
							'menu'       => 'main_navigation',
    						'depth'      => 0,
    						'container'  => false,
    						'menu_class' => 'nav-bar',
                			'fallback_cb'       => 'wp_page_menu',
						);
						
					} 
					
					wp_nav_menu( $modality_default_menu );
					
					?>
      </nav>
          			</div><!--/.nav-collapse -->
       </div><!--header-wrap-->
       <div id="header-bottom">
            <div id="site-search">
            	<form method="get" id="searchform" action="<?php bloginfo('home'); ?>/">
              <div class="site-search"><input type="text" size="18" value="<?php echo wp_specialchars($s, 1); ?>" name="s" id="s" />
              <input id="btn" type="image" name="submit" src="http://www.scca-susq.com/images/header-search-btn.png" border="0" alt="Submit" />
                    </div>
                </form>
            </div>
       </div>
 </div><!--header-holder-->