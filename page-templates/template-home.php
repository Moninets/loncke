<?php
/*
Template Name: Template Home
*/
get_header(); ?>

    <section class="lo-banner full-height align-center align-middle"
             style="background-image: url(<?php the_field('banner_image'); ?>">
        <a href="<?php echo esc_url(home_url('/')); ?>">
            <img class="lo-banner__logo" src="<?php header_image(); ?>" alt="Logo">
        </a>
    </section>

<?php get_footer();

