$ = jQuery;

var demokit = demokit || {};

/**
 * Intro
 */
 
demokit.intro = function() {
	
	$('.loader').delay(1000).fadeOut(500);
		
}

/**
 * Loader
 */
demokit.loading = function() {
	
	$('.frame iframe').on('load', function(){
		$('.loader').delay(1000).fadeOut(500);
	});
	
}
	
/**
 * Item Slider 
 */
demokit.itemslider = function() {
	
	$('.item-slider').slick({
	  dots: false,
	  arrows: true,
	  infinite: true,
	  speed: 300,
	  slidesToShow: 1,
	  slidesToScroll: 1,
	  swipeToSlide: true,
	  prevArrow: '.slide-prev',
	  nextArrow: '.slide-next',
	  mobileFirst: true,
	  responsive: [
		{
		  breakpoint: 500,
		  settings: {
			slidesToShow: 2
		  }
		},
		{
		  breakpoint: 1000,
		  settings: {
			slidesToShow: 4
		  }
		},
		{
		  breakpoint: 1500,
		  settings: {
			slidesToShow: 6
		  }
		},
		{
		  breakpoint: 2000,
		  settings: {
			slidesToShow: 8
		  }
		}
	  ]
	});
	
}

/**
 * Clean URL
 */
demokit.cleanUrl = function() {
	
	var clean_uri = location.protocol + "//" + location.host + location.pathname;
	window.history.replaceState({}, document.title, clean_uri);
		
}

/**
 * Template Functionality
 */
demokit.template = function() {
	
	var items_visible = false;

    $(".panel-items a").click(function(e){
        e.preventDefault();
    });
									
	$(".item-select").click( function () {
		
		if (items_visible == true) {
			$(".item-overview").removeClass('is--visible').addClass('is--invisible');
			$(this).toggleClass('is--toggled');
			items_visible = false;
		} else {
			$(".item-overview").removeClass('is--invisible').addClass('is--visible'); 
			$(this).toggleClass('is--toggled');
			items_visible = true;
		}
		
		return false;
		
	});
	
	$(".item-overview .item .view-item").click(function () {
				
		var item_data = $(this).attr("rel").split(",");
		
		$('.loader').fadeIn(250);
						
		$(".panel-items .item-select span").text($(this).attr('title'));
		$(".panel-items .item-select").toggleClass('is--toggled');
		
		$(".item-overview").removeClass('is--visible').addClass('is--invisible');
		
		if (item_data[0] == 'premium' ) {
			$(".panel-purchase a").html('<i class="ion-ios-cart"></i><span>See Purchase Options</span>');
		} else {
			$(".panel-purchase a").html('<i class="ion-android-download"></i><span>Download for Free</span>');
		}
		
		$(".panel-purchase a").attr("href", item_data[2]);
		
		$(".frame iframe").attr("src", item_data[1]);

		items_visible = false;
	
		return false;
		
	});
		
}

/**
 * ##################################################
 * INIT FUNCTIONS ###################################
 * ##################################################
 */
 
jQuery(window).load(function($) {
	
	demokit.intro();
		
});

jQuery(document).ready(function ($) {
	
	demokit.loading();
	demokit.cleanUrl();
	demokit.itemslider();
	demokit.template();

});