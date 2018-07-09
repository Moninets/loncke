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


    <!-- BEGAN REALISATIONS -->

    <section class=" lo-realisations">
        <div class="grid-container">
            <h3 class="lo-realisations__title">
                <?php the_field('realisations_title'); ?>
            </h3>
            <?php
            $args = array(
                'post_type' => 'realisations',
                'posts_per_page' => 2,
                'order' => 'DESC',
            );
            $posts = new WP_Query($args);
            ?>

            <?php if ($posts->have_posts()): while ($posts->have_posts()) : $posts->the_post(); ?>
                <article class="lo-realisations__post">
                    <?php $images = get_field('gallery'); ?>
                    <?php if ($images): ?>
                        <div class="grid-x grid-margin-x">
                            <?php $i = 1; ?>
                            <?php foreach ($images as $image): ?>
                                <div class="cell medium-6 large-3">
                                    <a href="<?php echo $image['url']; ?>">
                                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
                                    </a>
                                </div>
                            <?php
                                $i++;
                                if($i === 5) {break;}
                            ?>
                            <?php endforeach; ?>
                            <div class="cell">
                                <h5 class="lo-article__title">
                                    <?php the_field('pre_title', 'options'); ?>
                                    <?php the_title(); ?>
                                </h5>
                            </div>
                        </div>
                    <?php endif; ?>
                </article>
            <?php endwhile; endif;
            wp_reset_postdata(); ?>


            <a href="<?php the_field('realisations_link'); ?>" class="realisations_link">
                <?php the_field('realisations_text'); ?>
                <i class="fa fa-long-arrow-right"></i>
            </a>
        </div>

    </section>

    <!-- AND REALISATIONS -->

    <!-- BEGAN CONTACT-->

    <section class="lo-contact">
        <div class="grid-container">
            <div class="lo-contact__title">
                <?php the_field('contact_title'); ?>
            </div>
            <div class="lo-contact__map">
                <?php
                $location = get_field('map');
                if (!empty($location)):
                    ?>
                    <div id="map" class="acf-map">
                        <div class="marker" data-lat="<?php echo $location['lat']; ?>"
                             data-lng="<?php echo $location['lng']; ?>">
                        </div>
                    </div>
                <?php endif; ?>
            </div>

        </div>
    </section>

    <!-- AND CONTACT -->


<?php get_footer();

