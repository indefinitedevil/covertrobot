<?php

function covertrobot_enqueue_styles() {
    wp_dequeue_style('vertex-google-lato-font');
    wp_enqueue_style('covertrobot-google-rajdhani-font', 'https://fonts.googleapis.com/css?family=Rajdhani:300,400|Roboto:400,500');
    wp_enqueue_style('vertex', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('child-style', get_stylesheet_uri(), ['vertex']);
}

add_action('wp_enqueue_scripts', 'covertrobot_enqueue_styles', 20);

/**
 * Default copyright text.
 *
 * @since 1.0.0
 * @return string The copyright text.
 */
function covertrobot_footer_copyright() {
    return '&copy; ' . date_i18n(__('Y', 'vertex')) . ' Covert Robot Productions.';
}