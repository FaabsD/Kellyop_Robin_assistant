<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header>
    <?php if ( function_exists('the_custom_logo') ) : ?>
        <?php if ( get_theme_mod('custom_logo') ) : ?>
            <?php the_custom_logo(); ?>
        <?php else : ?>
            <div class="header__text">
                <?php echo get_bloginfo('name') ?>
            </div>
        <?php endif; ?>
    <?php endif; ?>

    <?php if ( function_exists('dynamic_sidebar') ) {
        dynamic_sidebar('header_menu_section');
    } ?>
</header>
