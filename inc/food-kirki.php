<?php
new \Kirki\Panel(
    'food_panel_id',
    [
        'priority'    => 10,
        'title'       => esc_html__('Header Options', 'food'),
        'description' => esc_html__('My Panel Description.', 'food'),
    ]
);

// food_header_logo
function food_header_logo()
{
    new \Kirki\Section(
        'logo_section_id',
        [
            'title'       => esc_html__('Logo Section', 'food'),
            'description' => esc_html__('Logo Section Description.', 'food'),
            'panel'       => 'food_panel_id',
            'priority'    => 160,
        ]
    );

    new \Kirki\Field\Image(
        [
            'settings'    => 'food_header_logo',
            'label'       => esc_html__('food header logo', 'food'),
            'description' => esc_html__('The saved value will be the URL.', 'food'),
            'section'     => 'logo_section_id',
            'default'     => get_template_directory_uri() . '/img/logo.png',
        ]
    );
}
food_header_logo();

// food_copyright
function food_copyright()
{
    new \Kirki\Section(
        'food_copyright_section_id',
        [
            'title'       => esc_html__('Footer Copyright', 'food'),
            'description' => esc_html__('My Copyright Section.', 'food'),
            'panel'       => 'food_panel_id',
            'priority'    => 160,
        ]
    );

    new \Kirki\Field\Text(
        [
            'settings' => 'food_copyright_id',
            'label'    => esc_html__('food Copyright', 'food'),
            'section'  => 'food_copyright_section_id',
            'default'  => esc_html__('&copy; Copyright 2024 Made with <i class="ti-heart text-danger"></i> By <a href="#">DevCRUD', 'food'),
            'priority' => 10,
        ]
    );
}
food_copyright();
