//////////////////////////////////////////////////////  //
//    EVENTS ON DOCUMENT READY                          //
//////////////////////////////////////////////////////  //

$(document).ready(function () {
    "use strict";

  
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
	
	
});