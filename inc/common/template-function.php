<?php
// food_logo
function food_logo()
{
    $food_logo = get_theme_mod('food_header_logo', get_template_directory_uri() . '/img/logo.png');
?>
    <a href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo esc_url($food_logo); ?>" alt="<?php echo bloginfo(); ?>"></a>
<?php
}

// food_menu
function food_menu()
{
    wp_nav_menu(
        array(
            'theme_location'  => 'main-menu',
            'container'       => 'false',
            'menu_class'      => 'nav menu',
        )
    );
}

// food_footer_widget
function food_footer_widget()
{
    register_sidebar(array(
        'name'          => __('Footer Widget 01', 'food'),
        'id'            => 'footer-sidebar-1',
        'description'   => __('Widgets in this area will be shown on footer.', 'food'),
        'before_widget' => '<div id="%1$s" class="text-muted %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<p>',
        'after_title'   => '</p>',
    ));
    register_sidebar(array(
        'name'          => __('Footer Widget 02', 'food'),
        'id'            => 'footer-sidebar-2',
        'description'   => __('Widgets in this area will be shown on footer.', 'food'),
        'before_widget' => '<div id="%1$s" class="text-muted %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<div class="footer-heading"><p>',
        'after_title'   => '</p></div>',
    ));
    register_sidebar(array(
        'name'          => __('Footer Widget 03', 'food'),
        'id'            => 'footer-sidebar-3',
        'description'   => __('Widgets in this area will be shown on footer.', 'food'),
        'before_widget' => '<div id="%1$s" class="text-muted %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<div class="footer-heading"><p>',
        'after_title'   => '</p></div>',
    ));
}
add_action('widgets_init', 'food_footer_widget');
