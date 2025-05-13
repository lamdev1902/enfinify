<!DOCTYPE HTML>
<html lang="en-US">

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="p:domain_verify" content="28c2a5883d9783b56cfa793df37dcd1a" />
    <title><?php
    global $page, $paged;
    wp_title('|', true, 'right');
    $site_description = get_bloginfo('description', 'display');
    if ($site_description && (is_home() || is_front_page()))
        echo " | $site_description";
    if ($paged >= 2 || $page >= 2)
        echo ' | ' . sprintf(__('Page %s', 'twentyeleven'), max($paged, $page));
    ?></title>
    <?php
    if (is_singular() && get_option('thread_comments'))
        wp_enqueue_script('comment-reply');
    wp_head();
    ?>

    <link rel="preload" href="<?= get_template_directory_uri() . '/assets/images/enfit/first-mb.png' ?>" as="image">

    <!-- Canon Link -->
    <link rel="canonical" href="<?= the_permalink() ?>" />

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo get_field('favicon', 'option'); ?>" />
    <link rel="icon" href="<?= (get_field('favicon_16', 'option')) ? get_field('favicon_16', 'option') : "#"; ?>"
        sizes="16x16" />
    <link rel="icon" href="<?= (get_field('favicon_32', 'option')) ? get_field('favicon_32', 'option') : "#"; ?>"
        sizes="32x32" />
    <link rel="icon" href="<?= (get_field('favicon_96', 'option')) ? get_field('favicon_96', 'option') : "#"; ?>"
        sizes="96x96" />
    <link rel="apple-touch-icon"
        href="<?= (get_field('favicon_180', 'option')) ? get_field('favicon_180', 'option') : "#"; ?>"
        sizes="180x180" />
    <link rel="icon" href="<?= (get_field('favicon_256', 'option')) ? get_field('favicon_256', 'option') : "#"; ?>"
        sizes="256x256" />
    <meta name="msapplication-TileImage" content="<?php echo get_field('favicon_512', 'option'); ?>" />
    <meta name="msapplication-TileImage" content="<?php echo get_field('favicon_size_270', 'option'); ?>" />
</head>

<body <?php body_class(); ?>>
    <header class="menf" id="menf">
        <div class="container">
            <div class="menf__content flex">
                <div class="menf__logo">
                    <a href="#">
                        <img width="192" height="46" src="<?= get_field('enfinity_logo', 'option') ?>" alt="">
                    </a>
                </div>
                <nav class="menf__menu">
                    <div class="container">
                        <nav class="menf__menu-box">
                            <?php
                            wp_nav_menu(
                                array(
                                    'theme_location' => 'menu_enfinity',
                                )
                            );
                            ?>
                        </nav>
                    </div>
                </nav>
                <div class="menf__icon"></div>
                <div class="menf__action">
                    <a href="#" class="menf__action">Get Started</a>
                </div>
            </div>
        </div>
    </header>