var theme_list_open = false;

function checkParameterExists(url, parameter)
{
    //Get Query String from url
    //fullQString = window.location.search.substring(1);

    fullQString = url.search.substring(1);

    paramCount = 0;
    queryStringComplete = "?";

    if(fullQString.length > 0)
    {
        //Split Query String into separate parameters
        paramArray = fullQString.split("&");

        //Loop through params, check if parameter exists.  
        for (i=0;i<paramArray.length;i++)
        {
            currentParameter = paramArray[i].split("=");
            if(currentParameter[0] == parameter) //Parameter already exists in current url
            {
                return true;
            }
        }
    }

    return false;
}

jQuery(document).ready(function ($) {   
//    $("#blender").fadeOut(2000);
// 
    $("#theme-selector a").click(function(event){
        event.preventDefault();
        linkLocation = this.href;
        $("#blender").fadeIn(1000, redirectPage);
        $("#blender").fadeOut(1000);
    });
 
    function redirectPage() {
        window.location = linkLocation;
    }		
							
	function fixHeight () {        	
		var headerHeight = $("#showbox-toolbar").height();        	        	
		$("#showbox-frame iframe").attr("height", (($(window).height() - 0) - headerHeight) + 'px');
	}
	
	$(window).resize(function () {
		fixHeight();
	}).resize();
		
	$("#theme-select").click( function () {
		if (theme_list_open == true) {
			$("#theme-selector ul").hide();
			$("#overlay").hide();
			theme_list_open = false;
		} else {
			$("#theme-selector ul").show();         		
			$("#overlay").show();         		
			theme_list_open = true;
		}
		return false;
	});
	
	$("#overlay").click( function () {
		if (theme_list_open == true) {
			$("#theme-selector ul").hide();
			$("#overlay").hide();
			theme_list_open = false;
		} else {
			$("#theme-selector ul").show();         		
			$("#overlay").show();         		
			theme_list_open = true;
		}
		return false;
	});
		
	$("#theme-selector ul li a").click(function () {
		var theme_data = $(this).attr("rel").split(",");
		
		$("#style-selector ul").hide();
		$("#style-selector ul." + theme_data[2]).show();
				
		$("#purchase a").attr("href", theme_data[1]);
		$("#remove_frame a").attr("href", theme_data[0]);
		$("#showbox-frame iframe").attr("src", theme_data[0]);
	
		$("#theme-selector #theme-select").text($(this).text());
	
		$("#theme-selector ul").hide();
		$("#overlay").hide();
		theme_list_open = false;
	
		return false;
	});
	
/*	var firstSelector = $("#theme-select").attr('title');
	$("#style-selector ul." + firstSelector).show();
	
	$("#style-selector ul li a").click(function () {


		var theme_data 	= $(this).attr("rel").split(",");
		//var url			= theme_data[0] + '?style=' + theme_data[1];
		// line below should determine the current location within the iframe and append the querystring to that url.
		// the goal was to stay at the current site while switching styles
		// unfortunately it modifies the <link> element which loads the color-style and keeps appending the querystrings on the stylesheet-url which results in loading a style which does not exist.
                //alert(theme_data);

        var currentURL = document.getElementById("showbox-frame").contentWindow.location;

		var url	= currentURL.href + '?style=' + theme_data[1];	
		//var url		= $('#showbox-frame')[0].contentWindow.location.href + '?style=' + theme_data[1];

		if(!checkParameterExists(currentURL, "style")) {
			$("#showbox-frame").attr("src", url);
		} else {
			$("#showbox-frame").attr("src", currentURL.href.replace(/style=[^&]+/, "style="+theme_data[1]));
		}

		return false;
	});
*/	
	
	
//	$('#remove_frame').delegate('a','click',function(){
//		top.location.href=$('#showbox-frame')[0].contentWindow.location.href;
//		return false;
//	});			

});



//jQuery(function() {	
//	
//	/* ========================= TOOLTIP  ========================= */
//	jQuery(".tooltip-trigger").tooltip({
//		tipClass: 'tooltip-viewer',
//		relative: true,
//		offset: [-50, 0],
//		opacity: 1,
//		delay: 0
//	});
//
//});	
