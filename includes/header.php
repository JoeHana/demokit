<?php

//require_once('settings.php');


// get current theme name
$current_theme 	= isset($_GET['theme']) ? $_GET['theme'] : null;
$theme_found 	= false;

$theme_array = demokit_products();

// get current theme data
foreach ( $theme_array as $i => $theme) {

	if ($product['id'] == $current_theme) {
	
		$current_theme_name 		= $theme['name'];
		$current_theme_id 			= $theme['id'];
		$current_theme_styles		= $theme['styles'];
		$current_theme_url 			= $theme['demo-url'];
		$current_theme_purchase_url = $theme['item-url'];
		
		$theme_found = true;
	
	}

}

if ($theme_found == false) {

	$current_theme_name 		= $theme_array[0]['name'];
	$current_theme_id	 		= $theme_array[0]['id'];
	$current_theme_styles 		= $theme_array[0]['styles'];
	$current_theme_url 			= $theme_array[0]['demo-url'];
	$current_theme_purchase_url = $theme_array[0]['item-url'];	

}

?>

<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?> class="no-js">

    <head>
    
    	<meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta http-equiv="Content-Type" content="<?php bloginfo( 'html_type' ); ?>; charset=<?php bloginfo( 'charset' ); ?>" />
                
        <?php wp_head(); ?> 
                        
    </head>

    <body <?php body_class(); ?>>