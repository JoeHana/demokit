<?php get_header(); ?>

<?php $theme_array = demokit_products(); ?>

<div id="overlay"></div>

<div id="showbox-toolbar"><div class="wrapper">
    <ul class="panels">
        <li id="logo" class="panel"><div class="inner">
            <a href="<?php echo LOGOLINK; ?>" title="<?php echo LOGOTITLE; ?>"><img src="<?php echo LOGOPATH; ?>" alt="Logo" width="50" /></a>
        </div></li>
        <li id="theme-selector" class="panel"><div class="inner">
            <a id="theme-select" href="#<?php echo $current_theme_name; ?>" title="<?php echo $current_theme_id; ?>"><?php echo $current_theme_name; ?></a>
            <ul>
                <?php foreach ($theme_array as $i => $theme) { ?>
                    <li><a href="#<?php echo $theme['name']; ?>" rel="<?php echo $theme['demo-url']; ?>,<?php echo $theme['item-url']; ?>,<?php echo $theme['id']; ?>" title="<?php echo $theme['name']; ?>"><?php echo $theme['name']; ?></a></li>
                <?php } ?>
            </ul>
        </div></li>
        <?php /*?><li id="style-selector" class="panel"><div class="inner">
            <?php foreach ($theme_array as $i => $theme) { ?>
                <ul class="selection <?php echo $theme['id']; ?>">
                    <?php foreach($theme['styles'] as $style) { ?>
                    <li>
                        <a href="#<?php echo $style; ?>" class="tooltip-trigger" rel="<?php echo $theme['demo-url']; ?>,<?php echo $style; ?>">
                            <img title="<?php echo $style; ?>" alt="<?php echo $style; ?>" src="<?php echo BASEURL; ?>/library/php/thumb.php?src=<?php echo $theme['demo-url']; ?>/wp-content/themes/<?php echo $theme['id']; ?>/styles/<?php echo $style; ?>/screenshot.png&amp;w=50&amp;h=50" />
                        </a>
                        <div class="tooltip-viewer">
                            <img src="<?php echo $theme['demo-url']; ?>/wp-content/themes/<?php echo $theme['id']; ?>/styles/<?php echo $style; ?>/screenshot.png" alt="<?php echo $style; ?>" />
                        </div>
                    </li>
                    <?php } ?>
                </ul>	
            <?php } ?>
        </div></li><?php */?>
        <li id="purchase" class="panel purchase"><div class="inner">
            <a href="<?php echo $current_theme_purchase_url; ?>" class="button medium" title="<?php echo PURCHASEBUTTONTEXT; ?>" target="_blank"><?php echo PURCHASEBUTTONTEXT; ?></a>
            <?php /*?><a href="<?php echo $current_theme_url; ?>" class="button small">&#215;</a><?php */?>
        </div></li>				
        <?php /*?><li id="remove_frame" class="remove_frame" rel="<?php echo $current_theme_url; ?>"></li><?php */?>
    </ul>
</div></div>



<!-- Showbox Frame >> Start -->
<iframe id="showbox-frame" src="<?php echo $current_theme_url; ?>"></iframe>
<!-- Showbox Frame >> End -->

<?php get_footer(); ?>