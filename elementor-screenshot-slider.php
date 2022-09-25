<?php

/**
 * Plugin Name: CoDesigner SS Slider
 * Description: CoDesigner SS Slider widget for Elementor.
 * Version:     1.0.0
 * Author:      Codexpert Interns
 * Author URI:  https://example.com/
 * Text Domain: elementor-addon
 */

add_action('wp_enqueue_scripts', 'load_asset');

// Add JS function
function load_asset(){
    wp_enqueue_script(
        'ss script',
        plugin_dir_url( __FILE__ ) . './js/ss-script.js',
        array(),
        1,
        'all'
    );

    wp_enqueue_style(
        'ss script',
        plugin_dir_url( __FILE__ ) . './css/ss-style.css',
        array(),
        1,
        'all'
    );

}

// Widget Register Function
function ss_slider( $widgets_manager ) {

    require_once( __DIR__ . '/ss-slider.php' );

    $widgets_manager->register( new \ss_slider() );

}
add_action( 'elementor/widgets/register', 'ss_slider' );