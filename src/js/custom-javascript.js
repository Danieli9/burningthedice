import $ from 'jquery';
import Waypoints from 'waypoints';

// Add your JS customizations here

// anchor tags jump
jQuery(document).ready(function($) {

    $(".sliding-link").click(function(e) {
        e.preventDefault();
        var aid = $(this).attr("href");
        $('html,body').animate({scrollTop: $(aid).offset().top}, 10);
    });

})

// waypoints for global cta 
var waypoint = new Waypoint({
    element: document.getElementById('entry-content'),
    handler: function(direction) {
        if(direction==="down") {
            $('body').addClass("move-on");
        } else {
            $('body').removeClass('move-on');
        }
    },
    offset: 145
})

var waypointFooter = new Waypoint({
    element: document.getElementById('gh--singup'),
    handler: function(direction) {
        if(direction==="down") {
            $('body').removeClass('move-on'); 
        } else {
            $('body').addClass("move-on");
        }
    },
    offset: '53%'
})

