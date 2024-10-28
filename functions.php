<?php
function dextergal_portfolio_enqueue_scripts() {
    // Enqueue Styles
    wp_enqueue_style( 'main-style', get_template_directory_uri() . '/css/style.css', array(), '1.0.0' );
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/open-iconic-bootstrap.min.css', array(), '1.0.0' );
    wp_enqueue_style( 'animate', get_template_directory_uri() . '/css/animate.css', array(), '1.0.0' );
    wp_enqueue_style( 'owl-carousel', get_template_directory_uri() . '/css/owl.carousel.min.css', array(), '1.0.0' );
    wp_enqueue_style( 'aos', get_template_directory_uri() . '/css/aos.css', array(), '1.0.0' );
    wp_enqueue_style( 'ionicons', get_template_directory_uri() . '/css/ionicons.min.css', array(), '1.0.0' );
    wp_enqueue_style( 'flaticon', get_template_directory_uri() . '/css/flaticon.css', array(), '1.0.0' );
    wp_enqueue_style( 'icomoon', get_template_directory_uri() . '/css/icomoon.css', array(), '1.0.0' );
    wp_enqueue_style( 'font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css', array(), '6.0.0-beta3' );

    // Enqueue Scripts
    wp_enqueue_script( 'jquery' );
    wp_enqueue_script( 'jquery-migrate', get_template_directory_uri() . '/js/jquery-migrate-3.0.1.min.js', array('jquery'), '3.0.1', true );
    wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '4.0.0', true );
    wp_enqueue_script( 'waypoints', get_template_directory_uri() . '/js/jquery.waypoints.min.js', array('jquery'), '4.0.1', true );
    wp_enqueue_script( 'owl-carousel', get_template_directory_uri() . '/js/owl.carousel.min.js', array('jquery'), '2.3.4', true );
    wp_enqueue_script( 'aos', get_template_directory_uri() . '/js/aos.js', array('jquery'), '2.3.1', true );
    wp_enqueue_script( 'scrollax', get_template_directory_uri() . '/js/scrollax.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'animate-number', get_template_directory_uri() . '/js/jquery.animateNumber.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'main-js', get_template_directory_uri() . '/js/main.js', array('jquery', 'owl-carousel'), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'dextergal_portfolio_enqueue_scripts' );

// Enable support for menus
function theme_menu_support() {
    add_theme_support('menus');
}
add_action('after_setup_theme', 'theme_menu_support');

// Register theme menu locations
function theme_menu_locations() {
    register_nav_menus([
        'primary' => __('Primary Menu', 'textdomain'),
    ]);
}
add_action('after_setup_theme', 'theme_menu_locations');