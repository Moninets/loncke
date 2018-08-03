<?php
/*
Template Name: Template History
*/
get_header(); ?>


    <section class=" lo-history lo-history--single"
             style="background-color: <?php the_field('history_color_main'); ?>;">
        <div class="grid-container lo-history__container">
            <div class="grid-x grid-margin-x ">
                <div class="cell">
                    <h3 class="lo-history__title">
                        <span style="color: <?php the_field('history_color_secondary'); ?>;">
                            <?php the_field('pre_title'); ?>
                        </span>
                        <?php the_title(); ?>
                    </h3>
                </div>
                <div class="cell medium-6">
                    <div class="lo-history__content2" style="color: <?php the_field('history_color_secondary'); ?>;">
                        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                            <?php the_content(); ?>
                        <?php endwhile; endif; ?>
                    </div>
                </div>
                <div class="cell medium-6">
                    <a class="lo-history__image" href="<?php echo get_the_post_thumbnail_url() ?>" data-fancybox>
                        <img src="<?php echo get_the_post_thumbnail_url() ?>" alt="Stairs">
                    </a>
                </div>
            </div>
            <div class="grid-x grid-margin-x">
                <div class="cell">
                    <?php
                    $args = array(
                        'post_type' => 'history',
                        'posts_per_page' => 1,
                        'order_by' => 'date',
                        'order' => 'ASC',
                    );
                    $posts = new WP_Query($args);
                    ?>
                    <?php if ($posts->have_posts()): while ($posts->have_posts()) : $posts->the_post(); ?>
                        <article class="lo-history__post">
                            <?php $images = get_field('gallery'); ?>
                            <?php if ($images): ?>
                                <div class="grid-x grid-margin-x">
                                    <?php $i = 1; ?>
                                    <?php foreach ($images as $image): ?>
                                        <div class="cell medium-6 large-3 lo-history__post--image">
                                            <a href="<?php echo $image['url']; ?>" rel="gallery" data-fancybox="gallery"
                                               style="background-image: url(<?php echo $image['url']; ?>);">
                                            </a>
                                        </div>
                                        <?php
                                        $i++;
                                        if ($i === 9) {
                                            break;
                                        }
                                        ?>
                                    <?php endforeach; ?>
                                </div>
                            <?php endif; ?>
                        </article>
                    <?php endwhile; endif;
                    wp_reset_postdata(); ?>
                </div>
            </div>
            <a class="lo-arrow" href="<?php echo esc_url(home_url('/')); ?>">
                <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/arrow-dark-left.png"
                     alt="Arrow">
            </a>

        </div>
    </section>
<?php get_footer();
