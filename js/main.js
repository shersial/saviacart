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
	
    //// VIDEO HEADER
	$(document).ready(function(){
		$('.my-background-video').bgVideo({
		fullScreen: false, // Sets the video to be fixed to the full window - your <video> and it's container should be direct descendents of the <body> tag
		fadeIn: 500, // Milliseconds to fade video in/out (0 for no fade)
		pauseAfter: 120, // Seconds to play before pausing (0 for forever)
		loop: true,
        autoplay: true,
		fadeOnPause: false, // For all (including manual) pauses
		fadeOnEnd: true, // When we've reached the pauseAfter time
		showPausePlay: false, // Show pause/play button
		pausePlayXPos: 'right', // left|right|center
		pausePlayYPos: 'top', // top|bottom|center
		pausePlayXOffset: '15px', // pixels or percent from side - ignored if positioned center
		pausePlayYOffset: '15px' // pixels or percent from top/bottom - ignored if positioned center
		});
	});
	
    //// ISOTOPE TRIGGER
    var $grid = $('.work-content').isotope({
      itemSelector: '.work-item',
      stagger: 30
    });
    $(window).on('load', function(){ $grid.isotope('layout') }); 
    $('.filter-work').on( 'click', '.button', function() {
      var filterValue = $(this).attr('data-filter');
      $grid.isotope({ filter: filterValue });
    });
    // change is-checked class on buttons
    $('.button-group').each( function( i, buttonGroup ) {
      var $buttonGroup = $( buttonGroup );
      $buttonGroup.on( 'click', 'a', function() {
        $buttonGroup.find('.is-checked').removeClass('is-checked');
        $( this ).addClass('is-checked');
      });
    });

    //// MASONRY
    $('.work-content').isotope({
      itemSelector: '.work-caption img',
      masonry: {
        columnWidth: 0
      }
    });

    //// MAGNIFIC POPUP TRIGGER
    $('.modal-image').magnificPopup({
      type: 'image'
    });
	
    //// COUNT TO TRIGGER
    var eventFired = false,
    objectPositionTop = $('.facts').offset().top;
    $(window).on('scroll', function () {
        var currentPosition = $(document).scrollTop() + 400;
        if (currentPosition >= objectPositionTop && eventFired === false) {
            eventFired = true;
            $(".count").countTo({
                speed: 5000,
                refreshInterval: 80
            });
        }
    });
	
	
	
	//// PARSLEY TRIGGER
    $('.cont-fo').parsley();
	
	
	
});