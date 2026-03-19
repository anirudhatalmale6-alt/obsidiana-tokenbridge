<?php
/**
 * Obsidiana TokenBridge Theme Functions
 */

// Enqueue styles and scripts
function obsidiana_enqueue_assets() {
    // Google Fonts
    wp_enqueue_style('obsidiana-fonts', 'https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&family=Instrument+Serif:ital@0;1&display=swap', array(), null);

    // Main stylesheet
    wp_enqueue_style('obsidiana-style', get_template_directory_uri() . '/assets/css/obsidiana.css', array('obsidiana-fonts'), '1.0.3');

    // Main JS
    wp_enqueue_script('obsidiana-js', get_template_directory_uri() . '/assets/js/main.js', array(), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'obsidiana_enqueue_assets');

// Theme setup
function obsidiana_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');

    register_nav_menus(array(
        'primary' => __('Primary Navigation', 'obsidiana'),
    ));
}
add_action('after_setup_theme', 'obsidiana_setup');

// Remove admin bar margin on frontend
function obsidiana_remove_admin_bar_bump() {
    remove_action('wp_head', '_admin_bar_bump_cb');
}
add_action('get_header', 'obsidiana_remove_admin_bar_bump');

// Add Elementor support
function obsidiana_elementor_support() {
    add_theme_support('elementor');
}
add_action('after_setup_theme', 'obsidiana_elementor_support');

// Helper to get image URL
function obsidiana_img($filename) {
    return get_template_directory_uri() . '/assets/images/' . $filename;
}

// Helper to get uploads URL
function obsidiana_upload($filename) {
    $upload_dir = wp_upload_dir();
    return $upload_dir['baseurl'] . '/obsidiana/' . $filename;
}
