<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>

<?php get_template_part( 'template-parts/featured-image' ); ?>

		<main class="main-content">
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'template-parts/content', '' ); ?>


			<?php endwhile; ?>

		</main>
<section class="lo-realisations">
        <div class="grid-container">
            <article class="lo-realisations__post">
                <?php $images = get_field('gallery'); ?>
                <?php if ($images): ?>
                    <h5 class="lo-article__title">
                        <?php the_field('pre_title', 'options'); ?>
                        <?php the_title(); ?>
                    </h5>
                    <div class="grid-x grid-margin-x lo-realisations__content container-wrap">
                        <?php foreach ($images as $image): ?>
                            <div class="cell medium-6 large-3 lo-realisations__gallery">
                                <a href="<?php echo $image['url']; ?>" rel="gallery"
                                   data-fancybox="gallery-real"
                                   style="background-image: url(<?php echo $image['sizes'] ['realisations-small']; ?>);">
                                </a>
                            </div>
                        <?php endforeach; ?>
                    </div>

                <?php endif; ?>
            </article>
        </div>
    </section>
<?php get_footer();
