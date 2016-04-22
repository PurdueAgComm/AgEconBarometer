<?php

add_action( 'wp_enqueue_scripts', 'purdue2014_parent_theme_enqueue_styles' );
// Load Font Awesome
add_action( 'wp_enqueue_scripts', 'enqueue_font_awesome' );
add_action( 'wp_enqueue_scripts', 'enqueue_google_font_archivo' );

// Register Custom Navigation Walker
require_once('wp_bootstrap_pagination.php');

// FUNCTIONS

function customize_wp_bootstrap_pagination($args) {
    $args['previous_string'] = '<i class="fa fa-caret-left"></i> Previous';
    $args['next_string'] = 'Next <i class="fa fa-caret-right"></i>';
    return $args;
}

add_filter('wp_bootstrap_pagination_defaults', 'customize_wp_bootstrap_pagination');

function purdue2014_parent_theme_enqueue_styles() {
    wp_enqueue_style( 'purdue2014-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child_theme-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( 'purdue2014-style' )
    );

}

function enqueue_font_awesome() {
  wp_enqueue_style( 'font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css' );
}

function enqueue_google_font_archivo() {
  wp_enqueue_style( 'google-font-archivo', 'https://fonts.googleapis.com/css?family=Archivo+Black');
}

// allow featured images support for theme
if ( function_exists( 'add_theme_support' ) ) {
  add_theme_support( 'post-thumbnails' );
}

/**
 * Register our sidebars and widgetized areas.
 * TODO
 */
function arphabet_widgets_init() {

  register_sidebar( array(
    'name'          => 'Home right sidebar',
    'id'            => 'home_right_1',
    'before_widget' => '<div>',
    'after_widget'  => '</div>',
    'before_title'  => '<h2 class="rounded">',
    'after_title'   => '</h2>',
  ) );

}
add_action( 'widgets_init', 'arphabet_widgets_init' );

