<?php

/**
 *	**************************************************
 *
 *	File Name:			functions.php
 *	Description:		This file contains the whole logic of this theme, sets some constants and includes various important files
 *
 *	@since 1.0.0
 *
 *	**************************************************
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 *
 * Define EventPresso Launch theme constants
 *
 * @since	1.0.0
 * @return	void
 *
 */
add_action( 'after_setup_theme', 'demokit_constants' );

function demokit_constants() {
	
	if ( ! defined( 'THEME_NAME' ) )
		define( 'THEME_NAME', 'DemoKit' );
		
	if ( ! defined( 'THEME_SLUG' ) )
		define( 'THEME_SLUG', 'demokit' );

	if ( ! defined( 'THEME_VERSION' ) )
		define( 'THEME_VERSION', '1.0.0' );
	
	if ( ! defined( 'THEME_TEMPLATE_DIR' ) )
		define( 'THEME_TEMPLATE_DIR', get_template_directory() );

	if ( ! defined( 'THEME_TEMPLATE_URL' ) )
		define( 'THEME_TEMPLATE_URL', get_template_directory_uri() );

	if ( ! defined( 'THEME_STYLESHEET_DIR' ) )
		define( 'THEME_STYLESHEET_DIR', get_stylesheet_directory() );

	if ( ! defined( 'THEME_STYLESHEET_URL' ) )
		define( 'THEME_STYLESHEET_URL', get_stylesheet_directory_uri() );

}

function demokit_products() {
	
	$products = array (
	
		array (
			"name" 		=> "WPCasa Madrid",
			"id" 		=> "wpcasa-madrid",
			"demo-url" 	=> "http://demo.wpcasa.com/madrid",
			"item-url" 	=> "https://wpcasa.com/downloads/wpcasa-madrid/"
		),
		
		array (
			"name" 		=> "WPCasa Oslo",
			"id" 		=> "wpcasa-oslo",
			"demo-url" 	=> "http://demo.wpcasa.com/oslo",
			"item-url" 	=> "https://wpcasa.com/downloads/wpcasa-oslo/"
		),
		
		array (
			"name" 		=> "WPCasa London",
			"id" 		=> "wpcasa-london",
			"demo-url" 	=> "http://demo.wpcasa.com/london",
			"item-url" 	=> "https://wpcasa.com/downloads/wpcasa-london/"
		),
		
		array (
			"name" 		=> "WPCasa Sylt",
			"id" 		=> "wpcasa-sylt",
			"demo-url" 	=> "http://demo.wpcasa.com/sylt",
			"item-url" 	=> "https://wpcasa.com/downloads/wpcasa-sylt/"
		),
		
		array (
			"name" 		=> "WPCasa Bahia",
			"id" 		=> "wpcasa-bahia",
			"demo-url" 	=> "http://demo.wpcasa.com/bahia",
			"item-url" 	=> "https://wpcasa.com/downloads/wpcasa-bahia/"
		),
		
		array (
			"name" 		=> "WPCasa Elviria",
			"id" 		=> "wpcasa-elviria",
			"demo-url" 	=> "http://demo.wpcasa.com/elviria",
			"item-url" 	=> "https://wpcasa.com/downloads/wpcasa-elviria/"
		),
		
		array (
			"name" 		=> "WPCasa Stage",
			"id" 		=> "wpcasa-stage",
			"demo-url" 	=> "http://demo.wpcasa.com/stage",
			"item-url" 	=> "https://wpcasa.com/downloads/wpcasa-stage/"
		)
		
	);
	
	return $products;
	
}

/**
 * Load all the additional files and features
 *
 * @since 1.0.0
 */

require 'includes/class-demokit.php';