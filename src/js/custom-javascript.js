import $ from 'jquery';

// Add your JS customizations here


jQuery(document).ready(function($) {
    $(window).scroll(function(){
        if ($(this).scrollTop() > 700) {
           $('body').addClass('move-on');
        } else {
           $('body').removeClass('move-on');
        }
    });
})