<?php
/**
 * Plugin Name: My Rental Calculator
 * Description: This is a simple JavaScript widget for calculating rental amounts based on specified date ranges.
 * Version: 1.0
 * Author: Omomoh Agiogu
 */

defined('ABSPATH') || exit;

define('My_RENTAL_CALCULATOR_PATH', plugin_dir_path(__FILE__));

require_once My_RENTAL_CALCULATOR_PATH . './includes/class-rental-calculator.php';



function my_rental_calculator_styles() {
    // Enqueue the style sheet
    wp_enqueue_style('my_rental_calculator_styles', plugins_url('assets/main.css', __FILE__), array(), '1.0.0');
}

function my_rental_calculator_scripts() {
    // Enqueue the script, depending on the style
    if ( wp_style_is('my_rental_calculator_styles', 'registered') ) {
        wp_enqueue_script('my_rental_calculator_scripts', plugins_url('assets/app.js', __FILE__), array('jquery'), '1.0.0');
    }
}

// Add the functions to the appropriate action hooks
add_action('wp_enqueue_scripts', 'my_rental_calculator_styles');
add_action('wp_enqueue_scripts', 'my_rental_calculator_scripts');

