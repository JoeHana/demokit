<?php
/**
 * DemoKit Class
 *
 * @package  demokit
 * @author   demokit
 * @since    1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! class_exists( 'DemoKit' ) ) {

	/**
	 * The DemoKit class
	 */
	class DemoKit {

		/**
		 * Setup Class
		 *
		 * @since 1.0.0
		 */
		public function __construct() {
			
			// Setup Theme (load textdomain, add theme support,...)
			add_action( 'after_setup_theme',	array( $this, 'setup' ) );
			
			// Load Assets
			add_action( 'wp_enqueue_scripts',	array( $this, 'assets' ) );
			
			// Include Head Meta
			add_action( 'wp_head',				array( $this, 'head_meta' ),			0 );

			// Disable Admin Bar for all Users (except admins)
			if( ! current_user_can( 'manage_options' ) )
				add_filter( 'show_admin_bar', '__return_false' );
			
			// Remove Admin Bar CSS (padding, margin)
			add_action( 'get_header',			array( $this, 'wp_admin_bar' ),			10 );
			
		}
		 
		/**
		 * Sets up theme defaults and registers support for various WordPress features.
		 *
		 * Note that this function is hooked into the after_setup_theme hook, which
		 * runs before the init hook. The init hook is too late for some features, such
		 * as indicating support for post thumbnails.
		 *
		 * @since 1.0.0
		 */
		 public function setup() {
			 
			/**
			 * Set the content width based on the theme's design and stylesheet.
			 *
			 * @since 1.0.0
			 */
			
//			if ( ! isset( $content_width ) )
//				$content_width = kolarik_option( 'kolarik_option', 'layout-format-width', 1400 );
			 
			/**
			 * Load Localisation files.
			 *
			 * Note: the first-loaded translation file overrides any following ones if the same translation is present.
			 */

			// Loads wp-content/languages/themes/demokit-de_DE.mo.
			load_theme_textdomain( 'demokit', trailingslashit( WP_LANG_DIR ) . 'themes/' );

			// Loads wp-content/themes/demokit-child/languages/de_DE.mo.
			load_theme_textdomain( 'demokit', get_stylesheet_directory() . '/languages' );

			// Loads wp-content/themes/demokit/languages/de_DE.mo.
			load_theme_textdomain( 'demokit', get_template_directory() . '/languages' );
							
			/**
			 * WordPress Core Features
			 */
		
			// Add custom menus
			//add_theme_support( 'menus' );
			
			// Add custom widgets
			//add_theme_support( 'widgets' );
			
			// Add default posts and comments RSS feed links to head
			add_theme_support( 'automatic-feed-links' );
			
			// Add post thumbnails
			add_theme_support( 'post-thumbnails' );
			
			// Add custom background
			add_theme_support( 'custom-background', array(
				'default-color'			=> '303030',
				'default-image'			=> ''
			) );
			
			// Add html5 support
			add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );
			
			// Add support for title tag
			add_theme_support( 'title-tag' );
			
			// Add support for custom logo
			add_theme_support( 'custom-logo', array(
				'width'       => 160,
				'height'      => 120,
				'flex-height' => true,
				'flex-width'  => true,
				'header-text' => array( 'site-title', 'site-description' ),
			) );
			
			add_theme_support( 'responsive' );
			
		}
		
		/**
		 * Assets
		 *
		 * @since 1.0.0
		 */
		public function assets() {
			        
			/**
			 * Styles
			 */
			wp_enqueue_style( 'css-reset',			THEME_TEMPLATE_URL . '/assets/css/reset.css',								false,					THEME_VERSION,	'all' );
			wp_enqueue_style( 'google-fonts',		'//fonts.googleapis.com/css?family=Lato:300,400|Open+Sans:300,400',			false,					false,			'all' );
			//wp_enqueue_style( 'normalize',			'//cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css',		false,					'5.0.0',		'all' );
			//wp_enqueue_style( 'spinkit',			'//cdnjs.cloudflare.com/ajax/libs/spinkit/1.2.5/spinkit.min.css',			false,					'1.2.5',		'all' );

			// Enqueue Theme Stylesheet 
			wp_enqueue_style( THEME_SLUG,			THEME_TEMPLATE_URL . '/style.css',											false,					THEME_VERSION,	'all' );

			/**
			 * Scripts
			 */

			wp_enqueue_script( 'jquery' );
			
			// Enqueue Theme Javascripts 
            wp_enqueue_script( THEME_SLUG,			THEME_TEMPLATE_URL . '/assets/js/init.js',									array( 'jquery' ),		THEME_VERSION,	true );
			
		}
		
		/**
		 * head_meta()
		 * Adds additional meta data to the head area (eg. viewport meta)
		 *
		 * @since	1.0.0
		 */
		public function head_meta() {
			
			$output = '';
			
			if( current_theme_supports( 'responsive' ) )
				$output .= '<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">';
			
			echo $output;
			
		}
		
		/**
		 * Remove WP AdminBar Margins
		 */
		public function wp_admin_bar() {
			
			remove_action( 'wp_head', '_admin_bar_bump_cb' );
			
		}

	}

}

return new DemoKit();