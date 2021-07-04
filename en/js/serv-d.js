//////////////////////////////////////////////////////  //
//    EVENTS ON DOCUMENT READY                          //
//////////////////////////////////////////////////////  //

$(document).ready(function () {
    "use strict";

    // OWL CAROUSEL TRIGGER
    $('.test-cont').owlCarousel({
        items: 2,
        margin: 30,
        loop:true,
        autoplay:true,
        autoplayTimeout:6000,
        autoplayHoverPause:true,
        dots: false,
        responsiveClass:true,
        responsive : {
            320  : {
                items: 1
            },
            360  : {
                items: 1
            }, 
            480  : {
                items: 1
            },
            768  : {
                items: 1
            },
            1024 : {
                items : 2
            }
        }
     });
	
	
});