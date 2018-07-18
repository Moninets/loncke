<?php
/*
Template Name: Template Novels
*/
get_header(); ?>



    <section class="lo-novels-template">
        <div class="grid-container lo-novels-template__container">
            <h3 class="lo-novels__title">
                <?php the_field('novels_title'); ?>
            </h3>
            <?php
            $args = array(
                'post_type' => 'novels',
                'posts_per_page' => -1,
                'order_by' => 'date',
                'order' => 'ASC',
            );
            $posts = new WP_Query($args);
            ?>

            <?php if ($posts->have_posts()): while ($posts->have_posts()) : $posts->the_post(); ?>
                <article class="lo-novels__post">
                    <?php $images = get_field('gallery'); ?>
                    <?php if ($images): ?>
                        <div class="grid-x grid-margin-x lo-novels-template__content container-wrap">
                            <?php $i = 1; ?>
                            <?php foreach ($images as $image): ?>
                                <div class="lo-novels-template__wrap--image">
                                    <a href="<?php echo $image['url']; ?>">
                                        <img class="lo-novels-template__image" src="<?php echo $image['url']; ?>"
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
                            <a href="<?php the_field('history_link'); ?>" class="lo-novels-template__arrow--right lo-arrow__small">
                                <img src="<?php the_field('section_arrow', 'options'); ?>" alt="Arrow">
                            </a>
                        </div>
                        <h5 class="lo-novels-template__title">
                            <?php the_title(); ?>
                        </h5>
                    <?php endif; ?>
                </article>
            <?php endwhile; endif;
            wp_reset_postdata(); ?>
            <a class="lo-novels-template__arrow--left" href="<?php echo esc_url(home_url('/')); ?>">
                <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/arrow-white-left.png" alt="Arrow">
            </a>
        </div>
    </section>

<?php get_footer();
