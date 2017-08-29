<?php /*
Template Name: Inner Pages No Sidebar
*/ ?>

<?php get_header(); ?>

<?php genesis_before_content(); ?>
<main class="content">
<?php genesis_before_loop(); ?>
<?php genesis_loop(); ?>
<?php genesis_after_loop(); ?>
</main>

<?php get_footer(); ?>