<?php get_header(); ?>

<?php

// get current theme name
$current_theme 	= isset($_GET['theme']) ? $_GET['theme'] : null;
$theme_found 	= false;

$theme_array = demokit_products();

// get current theme data
foreach ($theme_array as $i => $theme) {

	if ($theme['id'] == $current_theme) {
	
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

<div id="overlay"></div>

<div id="showbox-toolbar"><div class="wrapper">
    <ul class="panels">
        <li id="logo" class="panel"><div class="inner">
        
			<?php
            if( current_theme_supports( 'custom-logo' ) ) {
                
                $custom_logo_id = get_theme_mod( 'custom_logo' );
                
                if( $custom_logo_id ) {
                    $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                    $image = $image[0];
                } else {
                    $image = '';
                }
                
            }
            ?>        
            <a href="<?php echo home_url() ?>" title="">
                
                <?php if( $image ) { ?>
                    <img src="<?php echo $image ?>" alt="" width="50" height="50" />
                <?php } ?>
            
            </a>        

        </div></li>
        <li id="theme-selector" class="panel"><div class="inner">
            <a id="theme-select" href="#<?php echo $current_theme_name; ?>" title="<?php echo $current_theme_id; ?>"><?php echo $current_theme_name; ?></a>
            <ul>
                <?php foreach ($theme_array as $i => $theme) { ?>
                    <li><a href="#<?php echo $theme['name']; ?>" rel="<?php echo $theme['demo-url']; ?>,<?php echo $theme['item-url']; ?>,<?php echo $theme['id']; ?>" title="<?php echo $theme['name']; ?>"><?php echo $theme['name']; ?></a></li>
                <?php } ?>
            </ul>
        </div></li>
        <li id="purchase" class="panel purchase"><div class="inner">
            <a href="<?php echo $current_theme_purchase_url; ?>" class="button medium" title="<?php _e( 'Get it Now', 'demokit' ); ?>" target="_blank"><?php _e( 'Get it Now', 'demokit' ); ?></a>
            <?php /*?><a href="<?php echo $current_theme_url; ?>" class="button small">&#215;</a><?php */?>
        </div></li>				
        <?php /*?><li id="remove_frame" class="remove_frame" rel="<?php echo $current_theme_url; ?>"></li><?php */?>
    </ul>
</div></div>



<!-- Showbox Frame >> Start -->
<div id="showbox-frame" class="">
    <iframe src="<?php echo $current_theme_url; ?>"></iframe>
</div>
<!-- Showbox Frame >> End -->

<?php get_footer(); ?>