<?php
/**
	Theme Name: Executive Pro Theme
	Theme URI: http://my.studiopress.com/themes/executive/
	Description: Executive is designed with the understanding that your most important projects need to be front and center, strategically and expertly displayed. 
	Author: StudioPress
	Author URI: http://www.studiopress.com/
	Version: 3.1.2
 *
 * @package Genesis\Templates
 * @author  StudioPress
 * @license GPL-2.0+
 * @link    http://my.studiopress.com/themes/genesis/
 */

do_action( 'genesis_doctype' );
do_action( 'genesis_title' );
do_action( 'genesis_meta' );

wp_head(); // We need this for plugins.
?>
</head>
<?php
genesis_markup( array(
	'open'   => '<body %s>',
	'context' => 'body',
) );
do_action( 'genesis_before' );

genesis_markup( array(
	'open'   => '<div %s>',
	'context' => 'site-container',
) );

do_action( 'genesis_before_header' );
do_action( 'genesis_header' );
do_action( 'genesis_after_header' );

genesis_markup( array(
	'open'   => '<div %s>',
	'context' => 'site-inner',
) );
genesis_structural_wrap( 'site-inner' );
