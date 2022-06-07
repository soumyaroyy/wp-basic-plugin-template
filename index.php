<?php
/**
* Plugin Name: Theme Custom Function
* Plugin URI: https://www.yourwebsiteurl.com/
* Description: This is the very first plugin I ever created.
* Version: 1.0
* Author: Soumya Roy
* Author URI: http://yourwebsiteurl.com/
**/


//Load Style And Script
function wpse_load_plugin_css() {
    $plugin_url = plugin_dir_url( __FILE__ );

    //Css
    wp_enqueue_style( 'style1', $plugin_url . 'assets/css/style.css' );

    //Js
    wp_enqueue_script('customJS', $plugin_url. 'assets/js/custom.js');
}
add_action( 'wp_enqueue_scripts', 'wpse_load_plugin_css' );



function shortcode_function(){
    ob_start();


    echo 'This is my 1st shortcode';

    return ob_get_clean();
}

add_shortcode( 'shortcode', 'shortcode_function' );