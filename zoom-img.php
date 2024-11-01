<?php
/**
* Plugin name: Zoom IMG
* Plugin URL: https://www.caodem.com
* Description: Click to enlarge the image to view.
* Domain Path: /languages
* Version: 1.0
* Author: ihoan caodem.com
* Author URL: https://www.caodem.com
* License: GPLv2 or later
/**
* Click to enlarge the image to view
*/
// add hook css share mxh
function Zoom_img_addcssjs_head() {
wp_enqueue_style( 'zoomimg-css', plugins_url( 'css/zoomimg-mBox.css', __FILE__ ), array(), '1.0');
wp_enqueue_script( 'zoomimg-js', plugins_url( 'js/zoomimg-mBox.js', __FILE__ ), array('jquery'), '1.0');
}
add_action( 'wp_enqueue_scripts', 'Zoom_img_addcssjs_head' );
// dua muc luc vao content
include( plugin_dir_path( __FILE__ ) . 'inc/zoomimg-content.php');
// trinh quan ly admin
