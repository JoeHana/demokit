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
		define( 'THEME_VERSION', '1.1.0' );
	
	if ( ! defined( 'THEME_TEMPLATE_DIR' ) )
		define( 'THEME_TEMPLATE_DIR', get_template_directory() );

	if ( ! defined( 'THEME_TEMPLATE_URL' ) )
		define( 'THEME_TEMPLATE_URL', get_template_directory_uri() );

	if ( ! defined( 'THEME_STYLESHEET_DIR' ) )
		define( 'THEME_STYLESHEET_DIR', get_stylesheet_directory() );

	if ( ! defined( 'THEME_STYLESHEET_URL' ) )
		define( 'THEME_STYLESHEET_URL', get_stylesheet_directory_uri() );

}


function demokit_get_json() {

	// read config file and create config object
	$config = @file_get_contents( get_template_directory_uri() . '/content/items.json' );
	$configObject = $config ? json_decode( $config ) : null;
	
    return $configObject;
	
}

function demokit_get_items() {
	return demokit_get_json()->items;	
}

/**
 * Load all the additional files and features
 *
 * @since 1.0.0
 */

require 'includes/class-demokit.php';