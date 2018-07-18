<?php
/*
Template Name: Template History 2
*/
get_header(); ?>


    <section class=" lo-history2">
        <div class="grid-container lo-history2__container--page">
            <div class="grid-x grid-margin-x">
                <div class="cell">
                    <h3 class="lo-history2__title">
                        <span style="color: <?php the_field('history_color_secondary'); ?>;">
                        <?php the_field('history2_pre__title'); ?>
                    </span>
                        <?php the_title(); ?>
                    </h3>
                </div>
                <div class="cell medium-6">
                    <div class="lo-history2__content">
                        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                            <?php the_content(); ?>
                        <?php endwhile; endif; ?>
                    </div>
                </div>
                <div class="cell medium-6">
                    <div class="lo-history2__image">
                        <a href="#">
                            <img src="<?php the_field('history2_image_top'); ?>" alt="">
                        </a>
                        <a href="#">
                            <img src="<?php the_field('history2_image_bottom'); ?>" alt="">
                        </a>
                    </div>
                </div>
            </div>
            <a class="lo-history2__arrow--left" href="<?php echo esc_url(home_url('/')); ?>">
                <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/arrow-white-left.png"
                     alt="Arrow">
            </a>
        </div>
    </section>
<?php get_footer();
