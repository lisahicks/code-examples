<?php
/**
 * Modality functions and definitions
 *
 * @package Modality
 *
 *
 */
/*Allow shortcode for page content insert*/
	$the_query = new WP_Query( 'page_id=719' );
	$output = "";
		while ( $the_query->have_posts() ) :
			$the_query->the_post();
			$output .= get_the_title();
			$output .= get_the_content();
		endwhile;
	wp_reset_postdata();
	return $output;
	
	
	//add theme support for post thumbnails
	add_theme_support( 'post-thumbnails' ); 
	
	//add link to post featured image
	add_filter( 'post_thumbnail_html', 'my_post_image_html', 10, 3 );
		function my_post_image_html( $html, $post_id, $post_image_id ) {
			$html = '<a href="' . get_permalink( $post_id ) . '" title="' . esc_attr( get_post_field( 'post_title', $post_id ) ) . '">' . $html . '</a>';
			return $html;
	}
?>