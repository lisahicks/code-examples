<?php
/**
 * Template Name: About_History_Page With Right Sidebar
 *
 * @package Modality
 */
$modality_theme_options = modality_get_options( 'modality_theme_options' );
get_header(); ?>
	<div id="main" class="col2-l">
	<?php
		// Start the Loop.
		while ( have_posts() ) : the_post(); ?>
        
<?php if( get_field('post_title_icon') ): ?>
	<img class="header-icon" src="<?php the_field('post_title_icon'); ?>" />
<?php endif; ?>
<div class="content-posts-wrap">
	<div id="content-box">
		<div id="post-body">
			<div <?php post_class('post-single'); ?>>
				<h1 id="post-title" <?php post_class('entry-title'); ?>><?php the_title(); ?> </h1>
				<?php 
				if ($modality_theme_options['breadcrumbs'] == '1') { ?>
				<div class="breadcrumbs">
					<div class="breadcrumbs-wrap"> 
						<?php get_template_part( 'breadcrumbs'); ?>
					</div><!--breadcrumbs-wrap-->
				</div><!--breadcrumbs-->
			<?php } 
				 
				if ( has_post_thumbnail() ) { 
						
					if ($modality_theme_options['featured_img_post'] == '1') {?>
						<div class="thumb-wrapper">
							<?php the_post_thumbnail('full'); ?>
						</div><!--thumb-wrapper-->
					<?php
					} 
						
				} ?>
				<div id="article">
					<?php the_content(); 
					the_tags('<p class="post-tags"><span>'.__('Tags:','modality').'</span> ','','</p>');
					wp_link_pages( array(
						'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'modality' ) . '</span>',
						'after'       => '</div>',
						'link_before' => '<span>',
						'link_after'  => '</span>',
					) );
					
					//Displays navigation to next/previous post.
					if ( $modality_theme_options['post_navigation'] == 'below') { get_template_part('post','nav'); }
				
					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) {
						comments_template( '', true );
					} ?>
			
				</div><!--article-->
			</div><!--post-single-->
				<?php get_template_part('post','sidebar'); ?>
		</div><!--post-body-->
	</div><!--content-box-->
	<div class="sidebar-frame">
		<div class="sidebar">
			<?php get_sidebar(); ?>
		</div><!--sidebar-->
							<?php if($post->post_parent) {
                            $parent_link = get_permalink($post->post_parent); ?>
                            <a href="<?php echo $parent_link; ?>" title="Category Name" class="button black"><i class="fa fa-caret-left"></i> Back to About</a>
                            <?php } ?>                
                      </div><!--sidebar-frame-->
                  </div><!--content-posts-wrap-->
                 
                <?php get_template_part( 'sponsorsinner', 'section' );		?>		

        	<?php	
		endwhile;
	?>
	</div><!--main-->
<?php if ($modality_theme_options['social_section_on'] == '1') {
	get_template_part( 'social', 'section' );	
}
get_footer(); ?>