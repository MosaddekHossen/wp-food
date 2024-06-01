<?php

/**
 * Essential theme supports
 * */
function theme_setup()
{
    /** automatic feed link*/
    add_theme_support('automatic-feed-links');

    /** tag-title **/
    add_theme_support('title-tag');

    /** post formats */
    $post_formats = array('aside', 'image', 'gallery', 'video', 'audio', 'link', 'quote', 'status');
    add_theme_support('post-formats', $post_formats);

    /** post thumbnail **/
    add_theme_support('post-thumbnails');

    /** HTML5 support **/
    add_theme_support('html5', array('comment-list', 'comment-form', 'search-form', 'gallery', 'caption'));

    /** refresh widgest **/
    add_theme_support('customize-selective-refresh-widgets');

    /** custom background **/
    $bg_defaults = array(
        'default-image' => '',
        'default-preset' => 'default',
        'default-size' => 'cover',
        'default-repeat' => 'no-repeat',
        'default-attachment' => 'scroll',
    );
    add_theme_support('custom-background', $bg_defaults);

    /** custom header **/
    $header_defaults = array(
        'default-image' => '',
        'width' => 300,
        'height' => 60,
        'flex-height' => true,
        'flex-width' => true,
        'default-text-color' => '',
        'header-text' => true,
        'uploads' => true,
    );
    add_theme_support('custom-header', $header_defaults);

    /** custom log **/
    add_theme_support('custom-logo', array(
        'height' => 60,
        'width' => 400,
        'flex-height' => true,
        'flex-width' => true,
        'header-text' => array('site-title', 'site-description'),
    ));

    // register_nav_menu
    register_nav_menus(
        array(
            'menu-right' => __('Menu right', 'food'),
            'menu-left' => __('Menu left', 'food'),
        )
    );

    remove_theme_support('widgets-block-editor');
}
add_action('after_setup_theme', 'theme_setup');

// food_copyright_option
function food_copyright_option()
{
    $food_copyright = get_theme_mod('food_copyright_id', __('&copy; Copyright 2024 Made with <i class="ti-heart text-danger"></i> By <a href="#">DevCRUD</a>', 'food'));
?>
    <p class="mb-0 py-3 text-muted small"><?php echo wp_kses_post($food_copyright); ?></p>
<?php
}

// food_footer
function food_footer()
{
    get_template_part('/inc/template-parts/footer/footer');
}

// nec files
include_once('inc/common/scripts.php');
include_once('inc/food-kirki.php');
include_once('inc/common/template-function.php');
