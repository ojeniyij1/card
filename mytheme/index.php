/**
Theme Name: My Theme
Author: Pixel Pier
**/

<?php get_header(); ?>

<?php if(have_posts()): while (have_posts()) : the_post(); ?>

<h2>Index</h2>

<?php endwhile; endif; ?>

<?php get_footer() ?>