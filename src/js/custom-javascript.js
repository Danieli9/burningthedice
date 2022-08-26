import $ from 'jquery';
import Waypoints from 'waypoints';

// Add your JS customizations here


jQuery(document).ready(function($) {
    // $(window).scroll(function(){
    //     if ($(this).scrollTop() > 1500) {
    //        $('body').addClass('move-on');
    //     } else {
    //        $('body').removeClass('move-on');
    //     }
    // });
    // $('.entry-content').waypoint({
    // console.log('hit'),
    // offset: '100%'});
})



if ( $( "#entry-content" ).length ) {
    $(".entry-content").waypoint(function(){
        $('body').addClass("move-on");
     });
}