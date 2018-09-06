<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "off-canvas-wrap" div and all content after.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

if(is_page_template('page-templates/template-history.php')) {
    $footer_class = 'lo-footer--white';
} else {
    $footer_class = '';
}

?>

<footer class="lo-footer <?php echo $footer_class; ?> ">
    <div class="grid-container align-center">
        <a href="<?php echo esc_url(home_url('/')); ?>" class="lo-footer__logo">
            <img src="<?php header_image(); ?>" alt="Logo">
        </a>
        <?php foundationpress_footer_menu(); ?>
        <ul class="lo-footer__socials--list">
            <?php while (have_rows('socials', 'options')) : the_row(); ?>
                <li class="lo-footer__socials--item">
                    <a href="<?php the_sub_field('socials_link'); ?>" target="_blank" class="lo-footer__socials--link">
                        <i class="fa <?php the_sub_field('socials_icon', 'options'); ?>"></i>
                    </a>
                </li>
            <?php endwhile; ?>
        </ul>

        <ul class="lo-footer__bottom--list">
            <li class="lo-bottom__item">
                <a href="<?php echo esc_url(home_url('/')); ?>" class="lo-bottom__link">
                    <img class="lo-bottom__image" src="<?php header_image(); ?>" alt="Logo">
                </a>
            </li>
            <li class="lo-bottom__item">
                <a href="<?php the_field('footer_privacy_link', 'options'); ?>" target="_blank" class="lo-bottom__link">
                    <?php the_field('footer_privacy_text', 'options'); ?>
                </a>
            </li>
            <li class="lo-bottom__item">
                <a href="<?php the_field('footer_disclaimer_link', 'options'); ?>" target="_blank" class="lo-bottom__link">
                    <?php the_field('footer_disclaimer_text', 'options'); ?>
                </a>
            </li>
            <li class="lo-bottom__item">
                <a href="<?php the_field('footer_website_link', 'options'); ?>" target="_blank" class="lo-bottom__link">
                    <?php the_field('footer_website_text', 'options'); ?>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 99.9 99.9">
                        <path class="st0"
                              d="M50 0C22.4 0 0 22.4 0 50c0 27.6 22.4 50 50 50 2.8 0 5.4-0.3 8.1-0.7-0.1-0.2-0.1-0.4-0.2-0.6-2-6.6-3.2-12.2-4.6-14.5-2.6-4.4-2.5-8.8-6.7-11.8-2.7-1.9-7.4-6.1-8.9-7.4-1.4-1.3-3-3.8-5.1-4.3-2.9-0.8-5.3-1.7-8.1-2.8-1.9-0.7-5-1.5-7.1-2.7-0.7-0.4-1.5-1.5-1.4-2.5 0.1-1.3 1.2-2.4 3.3-2.1 1.7 0.3 4.3 1 6.2 1.9 0.8 0.4 5 1.9 7.3 1.9 0.6 0 0.9-0.1 1-0.4 0.1-0.1 0.2-0.1 0.1-0.3-0.2-0.9-1.4-1.2-2.4-2.1-2.1-1.7-5.3-3.6-6-4.3-2.2-2-6.4-3.7-7.3-6.3-0.4-1.2 0-1.6 0.3-2.1 0.5-0.9 1.5-1 2.8-0.8 1.8 0.3 2.8 1.2 3.9 2.2 2.4 2.1 5.8 4.7 8.4 6.3 0.6 0.3 2.1 1.4 3 2.1-0.3-0.7-1.2-1.3-2-2.2-1.9-2.2-4.9-4.9-5.5-5.8-2-2.5-6-5.2-6.6-8.2-0.3-1.3 0.2-1.7 0.6-2.2 0.7-0.9 1.7-0.9 3-0.4 1.8 0.7 2.8 1.8 3.8 3 2.1 2.8 5.5 5.9 8 8.1 0.6 0.5 1.4 1.7 2.2 2.6 0.3 0.3 0.7 0.4 1.2 0.4 0.1-0.6-0.4-1-0.7-1.3-1-1.3-1.9-2.8-3-4.5-2.1-3.1-3.8-6.4-6-9.9-0.7-1.1-1.8-2.6-1-4.1 0.8-1.6 2.7-2 4.2-1 1.5 0.9 4.1 7.1 6.1 9.6 1 1.2 1.9 2.6 2.7 4.2 0.9 1.6 1.6 2.7 2.5 3.7 0.5 0.6 0.7-0.4 0.5-1.7-0.2-0.8-2-4.6-3.3-8.1-0.4-0.9-0.5-1.8-0.8-2.6-0.4-1-1-2-1.2-2.6-1-3-0.9-4.7 1.2-5.3 2.1-0.6 3 1.3 4 3.4 0.8 1.7 0.6 1.8 1.6 4.2 0.4 1.1 1.3 2.9 1.9 3.9 0.5 1 0.8 2 1.2 3.1 0.9 1.9 2.4 3.6 3.8 5.1 1.5 1.6 2.7 3.6 4.5 4.9 2.4 1.7 5.4 2.8 8.3 0.1 1.2-1 1.4-2 1.9-2.9 0.7-1.1 1.7-2.3 3-3.6 1.7-1.6 3.9-2.3 5.9-2 1.5 0.3 2.9 0.6 4 1.5 1 0.9 1.5 2.1 1.4 2.7-0.2 1.7-2.5 1.6-4.6 2.2-1.1 0.3-1.9 1.1-2.8 1.9-1.7 1.4-2 4.1-2.4 5.6-0.5 2.5-1.7 4.2-2.3 5.8-0.5 1.4-0.4 2.7-1.5 4.4-0.6 1-1.5 2.5-1.6 4.1-0.2 1.6 0.4 3.2 0.9 4.6 0.8 2.1 1.6 4.6 2.6 6.6 1.3 2.7 1.8 5 3.1 7.9 0.6 1.6 1.7 4.1 2.5 6.2 0.2 0.4 0.3 0.7 0.5 1.1 13-9 21.5-24 21.5-41.1C99.9 22.4 77.5 0 50 0z"></path>
                    </svg>
                </a>
            </li>
        </ul>
    </div>
</footer>

<script src="https://alvarotrigo.com/fullPage/fullpage.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.3.5/jquery.fancybox.min.js"></script>


<?php wp_footer(); ?>
</body>
</html>