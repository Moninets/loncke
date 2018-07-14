<?php
/*
Template Name: Template Realisations
*/
get_header(); ?>

    <section class=" lo-realisations-template">
        <div class="grid-container lo-realisations-template__container">
            <h3 class="lo-realisations-template__title">
                <?php the_field('realisations_title'); ?>
            </h3>
            <?php
            $args = array(
                'post_type' => 'realisations',
                'posts_per_page' => -1,
                'order' => 'DESC',
            );
            $posts = new WP_Query($args);
            ?>

            <?php if ($posts->have_posts()): while ($posts->have_posts()) : $posts->the_post(); ?>
                <article class="lo-realisations-template__post">
                    <?php $images = get_field('gallery'); ?>
                    <?php if ($images): ?>
                        <div class="grid-x grid-margin-x lo-realisations-template__content container-wrap">
                            <?php $i = 1; ?>
                            <?php foreach ($images as $image): ?>
                                <div class="cell medium-6 large-3 lo-realisations-template__gallery">
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
                            <a href="<?php the_field('history_link'); ?>" class="lo-realisations-template__arrow lo-arrow__small">
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
            <a class="lo-realisations-template__arrow--left" href="<?php echo esc_url(home_url('/')); ?>">
                <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/arrow-white-left.png" alt="Arrow">
            </a>
        </div>
    </section>

<?php get_footer();
