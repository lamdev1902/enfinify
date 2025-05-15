<?php 
if (function_exists('acf_add_options_page')) {
    $parent = acf_add_options_page(array(
        'page_title' => 'Website Option',
        'menu_title' => 'Website Option',
        'icon_url' => 'dashicons-image-filter',
    ));
    acf_add_options_sub_page(array(
        'page_title' => 'Option',
        'menu_title' => 'Option',
        'parent_slug' => $parent['menu_slug'],
    ));
    acf_add_options_sub_page(array(
        'page_title' => 'Sitemap',
        'menu_title' => 'Sitemap',
        'parent_slug' => $parent['menu_slug'],
    ));
}

function theme_mcs_scripts()
{
    /* general css */
    wp_enqueue_style('style-slick', get_template_directory_uri() . '/assets/js/slick/slick.css');
    wp_enqueue_style('style-slick-theme', get_template_directory_uri() . '/assets/js/slick/slick-theme.css');
    wp_enqueue_style('style-main', get_template_directory_uri() . '/assets/css/main.css', '', '1.0.4');
    wp_enqueue_style('style-custom', get_template_directory_uri() . '/assets/css/custom.css', '', '1.0.0');
    wp_enqueue_style('style-base', get_template_directory_uri() . '/assets/css/base.css', '', '1.0.1');

    wp_enqueue_style('style-element', get_template_directory_uri() . '/assets/css/element.css', '', '1.1.3');
    wp_enqueue_style('style-responsive', get_template_directory_uri() . '/assets/css/responsive.css', '', '1.0.7', 'screen and (max-width: 1200px)');
	wp_enqueue_style('style-awesome', get_template_directory_uri() . '/assets/fonts/css/fontawesome.css');
    wp_enqueue_style('style-regular', get_template_directory_uri() . '/assets/fonts/css/regular.css');
    wp_enqueue_style('style-solid', get_template_directory_uri() . '/assets/fonts/css/solid.css');
}
add_action('wp_enqueue_scripts', 'theme_mcs_scripts');

function custom_enqueue_scripts()
{

    wp_enqueue_script('jquery');

    // Slick slider
    wp_enqueue_script(
        'slick-js',
        get_template_directory_uri() . '/assets/js/slick/slick.js',
        array('jquery'),
        null,
        true
    );

    wp_enqueue_script(
        'rating-js',
        get_template_directory_uri() . '/assets/js/rating.js',
        array('jquery'),
        '1.0.1',
        true
    );

    wp_localize_script('rating-js', 'theme_rating', array(
        'theme_url' => get_template_directory_uri(),
    ));

    // Chart.js

    wp_enqueue_script(
        'main-js',
        get_template_directory_uri() . '/assets/js/main.js',
        array('jquery'),
        '1.1.0',
        true
    );

    // Klaviyo script (async)
    wp_enqueue_script(
        'klaviyo-js',
        'https://static.klaviyo.com/onsite/js/klaviyo.js?company_id=RG9krj',
        array(),
        null,
        true
    );

    add_filter('script_loader_tag', function ($tag, $handle) {
        if ($handle === 'klaviyo-js') {
            return str_replace(' src', ' async src', $tag);
        }
        return $tag;
    }, 10, 2);

}
add_action('wp_enqueue_scripts', 'custom_enqueue_scripts');

function register_my_menu(): void {
    register_nav_menu('menu_enfinity',__( 'Menu Enfinity' ));
    register_nav_menu('menu_cat',__( 'Menu Cat' ));
  }
  add_action( 'init', 'register_my_menu' );


?>