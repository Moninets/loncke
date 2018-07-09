<?php
/*
Template Name: Template Home
*/
get_header(); ?>

    <!-- BEGAN BANNER -->

    <section class="lo-banner full-height align-center align-middle"
             style="background-image: url(<?php the_field('banner_image'); ?>">
        <a href="<?php echo esc_url(home_url('/')); ?>">
            <img class="lo-banner__logo" src="<?php header_image(); ?>" alt="Logo">
        </a>
        <a href="#lo-scroll" class="lo-banner__scroll">
            <i class="fa fa-angle-down" aria-hidden="true"></i>
        </a>
    </section>

    <!-- AND BANNER -->

    <!-- BEGAN HISTORY -->

    <section class="lo-history align-middle" id="lo-scroll">
        <div class="grid-container">
            <div class="grid-x grid-padding-x">
                <div class="cell medium-6 lo-content__left ">
                    <h3 class="lo-history__title"><?php the_field('history_title'); ?></h3>
                    <img src="<?php the_field('history_image'); ?>" alt="Carpenter">
                </div>
                <div class="cell medium-6 lo-content__right">
                    <div class="lo-history__text">
                        <?php the_field('history_content'); ?>
                    </div>
                </div>
            </div>
        </div>
        <a href="<?php the_field('history_link'); ?>" class="alo-history__arrow">
            <i class="fa fa-angle-right" aria-hidden="true"></i>
        </a>
    </section>

    <!-- AND HISTORY -->

    <!-- BEGAN CONCEPTION -->

    <section class="lo-conception align-middle">
        <div class="grid-container">
            <h3 class="lo-conception__content">
                <?php the_field('conception_content'); ?>
            </h3>
            <div class="lo-conception__image">
                <img src="<?php the_field('conception_image'); ?>" alt="Kitchen">
            </div>
        </div>
        <a href="<?php the_field('history_link'); ?>" class="alo-history__arrow">
            <i class="fa fa-angle-right" aria-hidden="true"></i>
        </a>
    </section>

    <!-- AND CONCEPTION -->

<?php get_footer();

