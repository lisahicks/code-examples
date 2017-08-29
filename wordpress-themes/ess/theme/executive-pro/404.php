<?php
/**
 * Handles display of 404 page not found errors.
 *
 * Custom 404 page not found error template. Exclude Hidden Pages From 404 Page Not Found Error Page.
 *
 * @category Genesis
 * @package  Templates
 * @author   Brad Dalton
 * @link     http://wpsites.net/web-design/add-content-404-page-genesis/
 */

/** Remove default loop **/
remove_action( 'genesis_loop', 'genesis_do_loop' );

add_action( 'genesis_loop', 'genesis_404' );
/**
 * This function outputs a 404 "Not Found" error message
 *
 * @since 1.6
 */
function genesis_404() { ?>

	<div class="post hentry">

		<h1 class="entry-title"><?php _e( 'Not Found, Error 404', 'genesis' ); ?></h1>
		<div class="entry-content">
			<p><?php printf( __( 'The page you are looking for no longer exists. Perhaps you can return back to the site\'s <a href="%s">homepage</a> and see if you can find what you are looking for. Or, you can try finding it with the information below.', 'genesis' ), home_url() ); ?></p>

			<div class="archive-page">

				<h4><?php _e( 'Pages:', 'genesis' ); ?></h4>
				<ul>
					<?php wp_list_pages('title_li='); ?>
				</ul>

				<h4><?php _e( 'Posts:', 'genesis' ); ?></h4>
				<ul>
					<?php wp_get_archives( 'type=postbypost&limit=100' ); ?>
				</ul>

			</div><!-- end .archive-page-->

		</div><!-- end .entry-content -->

	</div><!-- end .postclass -->

<?php
}

genesis();