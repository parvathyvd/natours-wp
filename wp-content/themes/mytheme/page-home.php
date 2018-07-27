<?php
/*******
Template Name: Home Page
 */
get_header();
?>

<?php get_template_part( 'template-parts/content', 'about' ); ?>

<?php get_template_part('template-parts/content', 'features'); ?>

<?php get_template_part('template-parts/content', 'pricing'); ?>

<?php get_template_part('template-parts/content', 'testimonials'); ?>

<?php get_template_part('template-parts/content', 'contact'); ?>

<?php get_footer(); ?>