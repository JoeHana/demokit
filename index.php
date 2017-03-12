<?php get_header(); ?>

<?php

// get current item name
$item_current 	= isset($_GET['item']) ? $_GET['item'] : null;
$item_found 	= false;

// get items
$items = demokit_get_items();

// get current item data
foreach ($items as $item) {
		
	if ( $item->id == $item_current ) {
	
		$item_current_name 			= $item->name;
		$item_current_id 			= $item->id;
		$item_current_type 			= $item->type;
		$item_current_url 			= $item->demo;
		$item_current_purchase_url	= $item->details;
		
		$item_found = true;
	
	}

}

if ( $item_found == false ) {
	
	$item_current_name			= $items[0]->name;
	$item_current_id	 		= $items[0]->id;
	$item_current_type	 		= $items[0]->type;
	$item_current_url 			= $items[0]->demo;
	$item_current_purchase_url	= $items[0]->details;	

}

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

<div class="loader">

	<?php if( $image ) { ?>
        <div class="loading-image-wrap"><img src="<?php echo $image ?>" alt="" width="100" height="100" /></div>
    <?php } ?>

</div>

<div class="toolbar">
    
    <div class="panels">
    
        <div class="panel panel-logo">
        
            <a href="<?php echo home_url() ?>" title="">
                
                <?php if( $image ) { ?>
                    <img src="<?php echo $image ?>" alt="" width="50" height="50" />
                <?php } ?>
            
            </a>        

        </div>
        
        <div class="panel panel-items">
        
            <a href="#" class="item-select"><span><?php echo $item_current_name; ?></span> <i class="ion-arrow-down-b"></i></a>
                          
        </div>
        
        <div class="panel panel-purchase">
			<?php
            if( $item_current_type == 'premium' ) {
				echo '<a href="' . $item_current_purchase_url . '" title="' . __( 'See Purchase Options', 'demokit' ) . '" target="_blank" class="button medium" ><i class="ion-ios-cart"></i><span>' . __( 'See Purchase Options', 'demokit' ) . '</span></a>';
			} else {
				echo '<a href="' . $item_current_purchase_url . '" title="' . __( 'Download for Free', 'demokit' ) . '" target="_blank" class="button medium" ><i class="ion-android-download"></i><span>' . __( 'Download for Free', 'demokit' ) . '</span></a>';
			}
			?>
            
        </div>
        
    </div>
    
</div>

<div class="item-overview is--invisible">

	<div class="item-slider-nav">
    	<ul>
        	<li><a href="#prev" class="slide-nav slide-prev"><i class="ion-arrow-left-b"></i></a></li>
            <li><a href="#next" class="slide-nav slide-next"><i class="ion-arrow-right-b"></i></a></li>
        </ul>
    </div>

    <div class="item-slider">
            
		<?php foreach ( $items as $item ) { ?>
            
            <div class="item">
                <div class="overlay">
                    <div class="title">
                    	<h3><?php echo $item->name; ?></h3>
                    </div>
                    <div class="actions">
                        <a href="#<?php echo $item->id; ?>" rel="<?php echo $item->type; ?>,<?php echo $item->demo; ?>,<?php echo $item->details; ?>,<?php echo $item->id; ?>" title="<?php echo $item->name; ?>" class="view-item">
                            <?php _e( 'View', 'demokit' ); ?>
                        </a>
                        <?php if( $item->test ) { ?>
                            <a href="<?php echo $item->test; ?>" title="<?php _e( 'Try', 'demokit' ); ?> <?php echo $item->name; ?>" target="_blank">
                                <?php _e( 'Try', 'demokit' ); ?>
                            </a>
                        <?php } ?>
                    </div>
                    
                </div>
                <?php
                
                if( ! $item->preview )
                    $item->preview = $item->demo-url . '/wp-content/themes/' . $item->id . '/screenshot.png';
                
                ?>
                <img src="<?php echo $item->preview; ?>" width="200" />
            </div>
            
        <?php } ?>
            
    </div>
                                    
</div>



<div id="frame" class="frame">
    <iframe src="<?php echo $item_current_url; ?>"></iframe>
</div>

<?php get_footer(); ?>