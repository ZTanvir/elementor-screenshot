<?php
/**
 * Plugin Name: Elementor Addon
 * Description: Simple hello world widgets for Elementor.
 * Version:     1.0.0
 * Author:      Elementor Developer
 * Author URI:  https://developers.elementor.com/
 * Text Domain: elementor-addon
 */


add_action('wp_enqueue_scripts', 'load_asset');
// Add JS function
function load_asset(){
    wp_enqueue_script(
        'ss script',
        plugin_dir_url( __FILE__ ) . './js/script.js',
        array(),
        1,
        'all'
    );
    wp_enqueue_style(
        'ss script',
        plugin_dir_url( __FILE__ ) . './css/style.css',
        array(),
        1,
        'all'
    );
}
 
function register_hello_world_widget( $widgets_manager ) {

	 
 	require_once( __DIR__ . '/widgets/woolementor-slider.php' );

	 
 	$widgets_manager->register( new \Elementor_Hello_World_Widget_2() );

}
add_action( 'elementor/widgets/register', 'register_hello_world_widget' );