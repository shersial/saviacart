//////////////////////////////////////////////////////  //
//    EVENTS ON DOCUMENT READY                          //
//////////////////////////////////////////////////////  //

$(document).ready(function () {
    "use strict";

	
	//// PRELOADER TRIGGER
    $(window).on('load', function () {
        $(".loading").animate({
            "top": "-100%"
        }, 700, function () {
            $(this).remove();
        });
    });
    
	//// WOW TRIGGER
	new WOW().init();

	//// FIXED NAVBAR
    $(window).scroll(function() {
        if ($(window).scrollTop() > 50) {
            $('.navbar').addClass('fixed');
        } else {
            $('.navbar').removeClass('fixed');
        }
    });

    //// SMOTH SCROLL
    $.scrollIt({
        topOffset: -80
    });
	
    //// COLLAPSED MENU CLOSE ON CLICK
    $(document).on('click', '.navbar-collapse.in', function (e) {
        if ($(e.target).is('a')) {
            $(this).collapse('hide');
        }
    });
	
	//// MAP TRIGGER
	var map;
	$(document).ready(function(){
	map = new GMaps({
	  el: '#map',
	  lat: 25.22335816286509,
	  lng: 55.286934898148
	});
	map.addMarker({
	  lat: 25.22335816286509,
	  lng: 55.286934898148,
	});
	});

  
  	
	//// PARSLEY TRIGGER
    $('.cont-fo').parsley();
	
});