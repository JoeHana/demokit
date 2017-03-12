<?php

######################### GENERAL SETTINGS #########################

define('BASEURL', 'http://try.wpcasa.com');			// the baseurl where the demo is installed
define('TITLE', 'WPCasa Demo');					// title of the demo

define('PURCHASEBUTTONTEXT', 'More Info');			// text of the purchase-button

define('LOGOPATH', get_template_directory_uri() . '/library/images/icon.png');		// path to the logo
define('LOGOLINK', 'https://wpcasa.com');				// the link where the user should be redirected by clicking on the logo
define('LOGOTITLE', 'Back to WPCasa.com');			// title of the link

define('ICONPATH', get_template_directory_uri() . 'library/images/icon.png');		// path to the icon (used for favicon)

define('USEWEBFONTS', false);						// use google webfonts
define('FONTS', '"Open Sans", "Lato"');				// loaded webfonts through google



######################### ITEM SETUP ###############################
$theme_array = array (

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

?>