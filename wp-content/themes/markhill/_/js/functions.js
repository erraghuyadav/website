// Browser detection for when you get desparate.
// http://rog.ie/post/9089341529/html5boilerplatejs

// var b = document.documentElement;
// b.setAttribute('data-useragent',  navigator.userAgent);
// b.setAttribute('data-platform', navigator.platform);

// sample CSS: html[data-useragent*='Chrome/13.0'] { ... }


// remap jQuery to $
(function($){


/* trigger when page is ready */
$(document).ready(function (){
	
	//lightbox
    $(".product-image > a, .additional-images > a").fancybox();

	$('.markHill-bannerbutton-black, .markHill-bannerbutton-pink').click(function(){
    	 window.location=$(this).find("a").attr("href"); 
    	 return false;
	});
	
	
	  // removes for unused elements
        var $prodBullet = $(".product-buybox li");
   		var $galleryImgs = $(".additional-images a"); 
		var $tagLine = $(".tagline");

        $prodBullet.each(function(){
            if($(this).text().length == 0){
                $(this).hide();
            } 
        });
	
		$galleryImgs.each(function(){
            if($(this).attr('href').length == 0){
                $(this).remove();
            } 
        });
 
 		$tagLine.each(function(){
            if($(this).text().length == 0){
                $(this).remove();
            } 
        });
 
 		// Function for "Your Hair" Page
 		$(".q-and-a p ").hide();
		$(".q").css("cursor","pointer");	
		$(".q-and-a > h2").click(function() {
				if ($(this).siblings('p').hasClass('down')) {
					$(this).siblings('p').slideUp().removeClass('down');
					$(this).siblings('.click-close').fadeTo("fast", 0).hide();
				} else {
					$(this).siblings('p').slideDown().addClass('down');
					$(this).siblings('.click-close').fadeTo("fast", 1);
				}

			$(".click-reveal").fadeTo("fast", 0);
		});
		
		// Drop-down nav for smaller resolutions
		$("#menu-button").click(function(e) {
			e.preventDefault();		
			if ($("#nav").hasClass("dropped")) {
					//$("#nav").animate({height:54},300).removeClass("dropped");			
					$("#nav ul").css("visibility","hidden");
					$("#nav").css("height","54px").removeClass("dropped");
					
				} else {
					//$("#nav").animate({height:390},300).addClass("dropped");
					$("#nav ul").css("visibility","visible");
					$("#nav").css("height","390px").addClass("dropped");		
				}
			
		});
		
		
	
// END doc.ready
});


/* optional triggers

$(window).load(function() {
	
});

*/

/*$(window).resize(function() {
	if ($(window).width() > 900) {
    	$("#nav ul").css("visibility","visible");
		$("#nav").css("height","54px");
  	} else {
		$("#nav ul").css("visibility","hidden");	
	}
});*/




})(window.jQuery);