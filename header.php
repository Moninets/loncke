<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "container" div.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>
<!doctype html>
<html class="no-js" <?php language_attributes(); ?> >
<head>
    <meta charset="<?php bloginfo('charset'); ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<?php if (get_theme_mod('wpt_mobile_menu_layout') === 'offcanvas') : ?>
    <?php get_template_part('template-parts/mobile-off-canvas'); ?>
<?php endif; ?>


<header class="lo-header" role="banner">
    <div class="grid-container full">
        <div class="grid-x align-middle align-justify">
            <a href="<?php echo esc_url(home_url('/')); ?>" class="lo-header__logo">
                <img src="<?php header_image(); ?>" alt="Logo">
            </a>
            <a href="#" data-toggle="offCanvasNestedOverlap">
                <div class="lo-hamburger">
                    <span class="lo-hamburger__inner lo-hamburger__inner--first"></span>
                    <span class="lo-hamburger__inner lo-hamburger__inner--middle"></span>
                    <span class="lo-hamburger__inner lo-hamburger__inner--last"></span>
                </div>

            </a>
        </div>
        </button>
    </div>

</header>

<div class="off-canvas position-right flex-container align-middle is-closed" data-transition="overlap"
     id="offCanvasNestedOverlap"
     data-off-canvas>
    <div class="callout lo-callout">
        <?php foundationpress_main_menu(); ?>
        <a class="lo-callout__link" href="">034535353</a>
        <?php if (have_rows('socials', 'options')): ?>
            <ul class="lo-socials__list">
                <?php while (have_rows('socials', 'options')) : the_row(); ?>
                    <li class="lo-socials__item">
                        <a href="<?php the_sub_field('socials_link'); ?>" class="lo-socials__link">
                            <i class="fa <?php the_sub_field('socials_icon', 'options'); ?>"></i>
                        </a>
                    </li>
                <?php endwhile; ?>
            </ul>
        <?php endif; ?>
    </div>
</div>

<div class="lo-menu__bottom flex-container  align-justify">
    <div class="lo-menu--left lo-menu ">
        <i class="lo-menu__icon fa fa-share-alt"></i>
        <?php if (have_rows('socials', 'options')): ?>
            <ul class="lo-menu__socials">
                <?php while (have_rows('socials', 'options')) : the_row(); ?>
                    <li class="lo-menu__item">
                        <a href="<?php the_sub_field('socials_link'); ?>" class="lo-menu__link">
                            <i class="fa <?php the_sub_field('socials_icon', 'options'); ?>"></i>
                        </a>
                    </li>
                <?php endwhile; ?>
            </ul>
        <?php endif; ?>
    </div>
    <div class="lo-menu__right">
        <i class=" lo-phone fa fa-phone"></i>
        <a href="<?php the_field('phone_link', 'options'); ?>"><?php the_field('phone_text', 'options'); ?> </a>
    </div>
</div>


