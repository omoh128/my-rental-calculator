<?php

if (!defined('ABSPATH')) {
    exit;
}

class Rental_Calculator {

    public function __construct() {
        add_shortcode('rental_calculator', array($this, 'render_form'));
    }

    public function render_form() {
        ob_start();
        ?>
        <div id="rental-calculator">
        <label for="startDate">Start Date:</label>
        <input type="date" id="startDate" required>

        <label for="endDate">End Date:</label>
        <input type="date" id="endDate" required>

        <button onclick="calculateRental()">Calculate Rental</button>

        <div id="result"></div>
        </div>
        <?php
        return ob_get_clean();
    }
}
$rentalcalculator = new Rental_Calculator();