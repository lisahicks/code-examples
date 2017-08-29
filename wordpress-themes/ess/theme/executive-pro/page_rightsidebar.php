<?php /*
Template Name: Inner Pages Right Sidebar
*/ ?>

<?php get_header(); ?>

<?php genesis_before_content(); ?>
<main class="content">
<?php genesis_before_loop(); ?>
<?php genesis_loop(); ?>
<?php genesis_after_loop(); ?>
</main>
<?php genesis_before_content_sidebar_wrap(); ?>
<aside class="sidebar">
<?php genesis_after_content(); ?>
</aside>
<?php genesis_after_content_sidebar_wrap(); ?>

<?php get_footer(); ?>