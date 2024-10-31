<?php
/*
Plugin Name: Purchase Button
Description: This plugin for Theme or Plugin demo Purchase Affiliate Link. you can easily add your Affiliate link.
Version:     1.0.2
Requires at least: 5.8
Requires PHP: 5.6
Tested up to: 6.1
Author:      Themepul
Author URI:  http://themepul.com 
License:     GPL v2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Text Domain: purchase-button
Domain Path: /languages

Copyright YEAR PLUGIN_AUTHOR_NAME (email : your email address)
Purchase Button is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
any later version.
 
Purchase Button is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.
 
You should have received a copy of the GNU General Public License
along with Purchase Button. If not, see https://www.gnu.org/licenses/gpl-2.0.html.
*/

/** enqueue Style */
function purchase_button_style() {
    wp_enqueue_style( 'purchase-button',  plugin_dir_url( __FILE__ ) . '/assets/css/purchase-button.css' );
}
add_action( 'wp_enqueue_scripts', 'purchase_button_style' );

add_action( 'admin_enqueue_scripts', 'purchase_button_add_color_picker' );
function purchase_button_add_color_picker( $hook ) {
    if( is_admin() ) { 
        // Add the color picker css file       
        wp_enqueue_style( 'wp-color-picker' ); 
        // Include our custom jQuery file with WordPress Color Picker dependency
        wp_enqueue_script( 'purchase-button-js', plugin_dir_url( __FILE__ ) . '/assets/js/purchase-button.js', array( 'wp-color-picker' ), false, true ); 
    }
}

add_action('admin_menu', 'purchase_button_menu');
function purchase_button_menu() {
    add_submenu_page(
        'options-general.php',
        'Purchase Button',
        'Purchase Button',
        'manage_options',
        'purchase-button-options',
        'purchase_button_options_page' 
    );
}

function purchase_button_options_page() {
    ?>
	<div class="wrap">
		<div id="icon-tools" class="icon32"></div>
			<h2><?php esc_html_e('Purchase Button Settings','purchase-button'); ?></h2>
            <?php include_once('inc/purchase-btn-options-page.php'); ?>
	</div>
	<?php 
}
include_once('inc/data.php');
