<?php
function register_custom_post_types() {
    $labels = array(
        'name' => 'Leadership',
        'singular_name' => 'Leadership',
        'add_new' => 'Add leadership',
        'add_new_item' => 'Add leadership',
        'edit_item' => 'Edit leadership',
        'new_item' => 'New leadership',
        'all_items' => 'All leaderships',
        'menu_name' => 'Leadership'
    );
    $args = array(
        'labels' => $labels,
        'publicly_queryable' => true,
        'exclude_from_search' => false,
        'show_in_nav_menus' => true,
        'show_ui' => true,
        'menu_icon' => 'dashicons-megaphone',
        'menu_position' => 5,
        'has_archive' => true,
        'supports' => array( 'title', 'thumbnail' )
    );
    register_post_type('leadership', $args);

    $labels = array(
        'name' => 'Case Study',
        'singular_name' => 'Case Study',
        'add_new' => 'Add Case Study',
        'add_new_item' => 'Add Case Study',
        'edit_item' => 'Edit Case Study',
        'new_item' => 'New Case Study',
        'all_items' => 'All Case Study',
        'menu_name' => 'Case Study'
    );
    $args = array(
        'labels' => $labels,
        'show_in_nav_menus' => true,
        'show_ui' => true,
        'menu_icon' => 'dashicons-edit',
        'menu_position' => 6,
        'supports' => array( 'title', 'editor', 'thumbnail' ),
        'public' => true
    );
    register_post_type('case_study', $args);

    $labels = array(
        'name' => 'Ebook',
        'singular_name' => 'Ebook',
        'add_new' => 'Add Ebook',
        'add_new_item' => 'Add Ebook',
        'edit_item' => 'Edit Ebook',
        'new_item' => 'New Ebook',
        'all_items' => 'All Ebook',
        'menu_name' => 'Ebook'
    );
    $args = array(
        'labels' => $labels,
        'show_in_nav_menus' => true,
        'show_ui' => true,
        'menu_icon' => 'dashicons-visibility',
        'menu_position' => 7,
        'exclude_from_search'   => false,
        'supports' => array( 'title', 'editor', 'thumbnail' ),
        'public' => true
    );
    register_post_type('ebook', $args);
}
add_action( 'init', 'register_custom_post_types' );