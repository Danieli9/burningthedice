import $ from 'jquery';

// Add your JS customizations here


jQuery(document).ready(function($) {
    // $(window).scroll(function(){
    //     if ($(this).scrollTop() > 1500) {
    //        $('body').addClass('move-on');
    //     } else {
    //        $('body').removeClass('move-on');
    //     }
    // });
    $('.entry-content').waypoint({
        handler: function(direction) {
            console.log('hit');
        },
    offset: '100%'});
})