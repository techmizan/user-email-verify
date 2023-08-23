<?php
/**
 * @wordpress-plugin
 * Plugin Name: TGM Email Verification & Registration
 * Plugin URI: https://thegamersmall.com/
 * Description: The Customer verification helps WooCommerce store owners to reduce registration spam by requiring customers to verify their email address when they register an account on your store, before they can access their account area.
 * Version: 1.1
 * Author: Mizan Hosen
 * Author URI: https://thegamersmall.com/ 
 * License: GPL-2.0+
 * License URI: 
 * Text Domain: email-verification-and-registration
 * Domain Path: /lang/
 * WC tested up to: 7.6.0
*/


//Exit if accessed directly
if( !defined( 'ABSPATH' ) ){
	return;
}
if (!defined('PLUGIN_DIR')) {
    define('PLUGIN_DIR', plugin_dir_path(__FILE__));
}

if ( ! class_exists( 'TGM_Email_Verification' ) ) {
	require_once 'includes/email-verification-core.php';
}




add_action( 'init', 'woo_email_verification' );
function woo_email_verification() {
	static $instance;
	if ( ! isset( $instance ) ) {		
		$instance = new TGM_Email_Verification();
	}

	return $instance;
}