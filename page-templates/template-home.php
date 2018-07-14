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
            <div class="grid-x grid-padding-x lo-history__content">
                <div class="cell medium-6 lo-content__left ">
                    <h3 class="lo-history__title"><?php the_field('history_title'); ?></h3>
                    <img src="<?php the_field('history_image'); ?>" alt="Carpenter">
                </div>
                <div class="cell medium-6 lo-content__right">
                    <div class="lo-history__text">
                        <?php the_field('history_content'); ?>
                    </div>
                </div>
                <a href="<?php the_field('history_link'); ?>" class="lo-history__arrow">
                    <img src="<?php the_field('section_arrow', 'options'); ?>" alt="Arrow">
                </a>
            </div>

        </div>
    </section>

    <!-- AND HISTORY -->

    <!-- BEGAN CONCEPTION -->

    <section class="lo-conception align-middle">
        <div class="grid-container lo-conception__container">
            <h3 class="lo-conception__content">
                <?php the_field('conception_content'); ?>
            </h3>
            <div class="lo-video__wrapper">
                <?php if (get_field('video_type') == 'video_url'): ?>
                    <div class="lo-video__overlay"
                         style=" background-image: url(<?php the_field('conception_image'); ?>);">
                        <button class="lo-video__button">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 99.9 99.9">
                                <path class="st0"
                                      d="M50 0C22.4 0 0 22.4 0 50c0 27.6 22.4 50 50 50 2.8 0 5.4-0.3 8.1-0.7-0.1-0.2-0.1-0.4-0.2-0.6-2-6.6-3.2-12.2-4.6-14.5-2.6-4.4-2.5-8.8-6.7-11.8-2.7-1.9-7.4-6.1-8.9-7.4-1.4-1.3-3-3.8-5.1-4.3-2.9-0.8-5.3-1.7-8.1-2.8-1.9-0.7-5-1.5-7.1-2.7-0.7-0.4-1.5-1.5-1.4-2.5 0.1-1.3 1.2-2.4 3.3-2.1 1.7 0.3 4.3 1 6.2 1.9 0.8 0.4 5 1.9 7.3 1.9 0.6 0 0.9-0.1 1-0.4 0.1-0.1 0.2-0.1 0.1-0.3-0.2-0.9-1.4-1.2-2.4-2.1-2.1-1.7-5.3-3.6-6-4.3-2.2-2-6.4-3.7-7.3-6.3-0.4-1.2 0-1.6 0.3-2.1 0.5-0.9 1.5-1 2.8-0.8 1.8 0.3 2.8 1.2 3.9 2.2 2.4 2.1 5.8 4.7 8.4 6.3 0.6 0.3 2.1 1.4 3 2.1-0.3-0.7-1.2-1.3-2-2.2-1.9-2.2-4.9-4.9-5.5-5.8-2-2.5-6-5.2-6.6-8.2-0.3-1.3 0.2-1.7 0.6-2.2 0.7-0.9 1.7-0.9 3-0.4 1.8 0.7 2.8 1.8 3.8 3 2.1 2.8 5.5 5.9 8 8.1 0.6 0.5 1.4 1.7 2.2 2.6 0.3 0.3 0.7 0.4 1.2 0.4 0.1-0.6-0.4-1-0.7-1.3-1-1.3-1.9-2.8-3-4.5-2.1-3.1-3.8-6.4-6-9.9-0.7-1.1-1.8-2.6-1-4.1 0.8-1.6 2.7-2 4.2-1 1.5 0.9 4.1 7.1 6.1 9.6 1 1.2 1.9 2.6 2.7 4.2 0.9 1.6 1.6 2.7 2.5 3.7 0.5 0.6 0.7-0.4 0.5-1.7-0.2-0.8-2-4.6-3.3-8.1-0.4-0.9-0.5-1.8-0.8-2.6-0.4-1-1-2-1.2-2.6-1-3-0.9-4.7 1.2-5.3 2.1-0.6 3 1.3 4 3.4 0.8 1.7 0.6 1.8 1.6 4.2 0.4 1.1 1.3 2.9 1.9 3.9 0.5 1 0.8 2 1.2 3.1 0.9 1.9 2.4 3.6 3.8 5.1 1.5 1.6 2.7 3.6 4.5 4.9 2.4 1.7 5.4 2.8 8.3 0.1 1.2-1 1.4-2 1.9-2.9 0.7-1.1 1.7-2.3 3-3.6 1.7-1.6 3.9-2.3 5.9-2 1.5 0.3 2.9 0.6 4 1.5 1 0.9 1.5 2.1 1.4 2.7-0.2 1.7-2.5 1.6-4.6 2.2-1.1 0.3-1.9 1.1-2.8 1.9-1.7 1.4-2 4.1-2.4 5.6-0.5 2.5-1.7 4.2-2.3 5.8-0.5 1.4-0.4 2.7-1.5 4.4-0.6 1-1.5 2.5-1.6 4.1-0.2 1.6 0.4 3.2 0.9 4.6 0.8 2.1 1.6 4.6 2.6 6.6 1.3 2.7 1.8 5 3.1 7.9 0.6 1.6 1.7 4.1 2.5 6.2 0.2 0.4 0.3 0.7 0.5 1.1 13-9 21.5-24 21.5-41.1C99.9 22.4 77.5 0 50 0z"></path>
                            </svg>
                        </button>
                    </div>
                    <video class="lo-video" controls src="<?php the_field('video_url'); ?>"></video>
                <?php else: ?>
                    <?php the_field('video_external'); ?>
                <?php endif; ?>
                <a href="<?php the_field('history_link'); ?>" class="lo-video__arrow">
                    <img src="<?php the_field('section_arrow_dark', 'options'); ?>" alt="Arrow">
                </a>
            </div>
        </div>

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
                        <div class="grid-x grid-margin-x lo-realisations__content container-wrap">
                            <?php $i = 1; ?>
                            <?php foreach ($images as $image): ?>
                                <div class="cell medium-6 large-3 lo-realisations__gallery">
                                    <a href="<?php echo $image['url']; ?>"
                                       style="background-image: url(<?php echo $image['url']; ?>);">
                                    </a>
                                </div>
                                <?php
                                $i++;
                                if ($i === 5) {
                                    break;
                                }
                                ?>
                            <?php endforeach; ?>
                            <a href="<?php the_field('history_link'); ?>" class="lo-realisation__arrow lo-arrow__small">
                                <img src="<?php the_field('section_arrow', 'options'); ?>" alt="Arrow">
                            </a>
                        </div>
                        <h5 class="lo-article__title">
                            <?php the_field('pre_title', 'options'); ?>
                            <?php the_title(); ?>
                        </h5>
                    <?php endif; ?>

                </article>
            <?php endwhile; endif;
            wp_reset_postdata(); ?>
            <a class="lo-realisations__button style-button" href="<?php the_field('realisations_link'); ?>"
               class="realisations_link">
                <?php the_field('realisations_text'); ?>
                <i class="fa fa-long-arrow-right"></i>
            </a>
        </div>
    </section>


    <!-- AND REALISATIONS -->

    <!-- BEGAN CONTACT-->

    <section class="lo-contact">
        <div class="grid-container">
            <h3 class="lo-contact__title">
                <?php the_field('contact_title'); ?>
            </h3>
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
            <div class="grid-x lo-location">
                <?php if (get_field('contacts')): ?>
                    <?php while (has_sub_field('contacts')): ?>
                        <div class="cell medium-4">
                            <div class="lo-location__title">
                                <?php the_sub_field('contacts_title'); ?>
                            </div>
                            <ul class="lo-location__list">
                                <li class="lo-location__item">
                                    <?php the_sub_field('contacts_address'); ?>
                                </li>
                                <li class="lo-location__item">
                                    <a href="<?php tel:the_sub_field('contacts__phone_link') ?>"
                                       class="lo-location__link">
                                        <?php the_sub_field('contacts_phone_text') ?>
                                    </a>
                                </li>
                                <li class="lo-location__item">
                                    <a href="<?php the_sub_field('contacts__email'); ?>" class="lo-location__link">
                                        info@loncke.fr
                                    </a>
                                </li>
                            </ul>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </section>

    <!-- AND CONTACT -->

    <!-- BEGAN NOVELS -->

    <section class=" lo-novels">
        <div class="grid-container">
            <h3 class="lo-novels__title">
                <?php the_field('novels_title'); ?>
            </h3>
            <?php
            $args = array(
                'post_type' => 'novels',
                'posts_per_page' => 2,
                'order_by' => 'date',
                'order' => 'ASC',
            );
            $posts = new WP_Query($args);
            ?>

            <?php if ($posts->have_posts()): while ($posts->have_posts()) : $posts->the_post(); ?>
                <article class="lo-novels__post">
                    <?php $images = get_field('gallery'); ?>
                    <?php if ($images): ?>
                        <div class="grid-x grid-margin-x lo-novels__content container-wrap">
                            <?php $i = 1; ?>
                            <?php foreach ($images as $image): ?>
                                <div class="lo-novels__wrap--image">
                                    <a href="<?php echo $image['url']; ?>">
                                        <img class="lo-novels__image" src="<?php echo $image['url']; ?>"
                                             alt="<?php echo $image['alt']; ?>">
                                    </a>
                                </div>
                                <?php
                                $i++;
                                if ($i === 4) {
                                    break;
                                }
                                ?>
                            <?php endforeach; ?>
                            <a href="<?php the_field('history_link'); ?>" class="lo-novels__arrow lo-arrow__small">
                                <img src="<?php the_field('section_arrow', 'options'); ?>" alt="Arrow">
                            </a>
                        </div>
                        <h5 class="lo-article__title">
                            <?php the_title(); ?>
                        </h5>
                    <?php endif; ?>
                </article>
            <?php endwhile; endif;
            wp_reset_postdata(); ?>


            <a class="lo-novels__button style-button" href="<?php the_field('novels_link'); ?>"
               class="novels_link">
                <?php the_field('novels_text'); ?>
                <i class="fa fa-long-arrow-right"></i>
            </a>
        </div>

    </section>

    <!-- AND NOVELS -->
<?php get_footer();

