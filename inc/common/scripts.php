<?php
function food_add_theme_scripts()
{
    wp_enqueue_style('themify', get_template_directory_uri() . '/assets/css/themify-icons.css', array(), '1.1', 'all');
    wp_enqueue_style('animate', get_template_directory_uri() . '/assets/css/animate.css', array(), '1.1', 'all');
    wp_enqueue_style('main-foodhut', get_template_directory_uri() . '/assets/css/foodhut.css', array(), '1.1', 'all');

    wp_enqueue_style('style', get_stylesheet_uri());

    wp_enqueue_script('bundle', get_template_directory_uri() . '/assets/js/bootstrap.bundle.js', array('jquery'), 1.1, true);
    wp_enqueue_script('affix', get_template_directory_uri() . '/assets/js/bootstrap.affix.js', array(), 1.1, true);
    wp_enqueue_script('wow', get_template_directory_uri() . '/assets/js/wow.js', array(), 1.1, true);
    wp_enqueue_script('map', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js.map', array(), 1.1, true);
    wp_enqueue_script('main-foodhut', get_template_directory_uri() . '/assets/js/foodhut.js', array(), 1.1, true);

    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}
add_action('wp_enqueue_scripts', 'food_add_theme_scripts');
