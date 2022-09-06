import $ from 'jquery';
import Waypoints from 'waypoints';

// Add your JS customizations here

// anchor tags
jQuery(document).ready(function($) {

    $(".sliding-link").click(function(e) {
        e.preventDefault();
        var aid = $(this).attr("href");
        $('html,body').animate({scrollTop: $(aid).offset().top}, 10);
    });

})



if ( $( "#entry-content" ).length ) {

    $('#entry-content').waypoint(function(direction) {
        if(direction==="down") {
            $('body').addClass("move-on");
        } else {
            $('body').removeClass('move-on');
        }
    });

}
if ( $( "#footer" ).length ) {

    $('#footer').waypoint(function(direction) {
        if(direction==="down") {
            console.log('stigao');
            // $('body').removeClass('move-on');
        } else {
            console.log('otisao');
            // $('body').addClass("move-on");
        }
    });

}

