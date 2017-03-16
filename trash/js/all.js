// Full bg images

$(document).ready(function() {
    $('.background-image, .our-work').height($(window).height());
}).resize();

$(window).resize(function() {
    $('.background-image, .our-work').height($(window).height());
}).resize();

$(function() {
  $('.info').focus(function() {
    var pos = $(this).closest('.profiles').offset().top;
    $('body').animate({
      scrollTop: pos - 120
    });
  });
});

// Scroll back to top

$("a[href='#top']").click(function() {
  $("html, body").animate({ scrollTop: 0 }, "slow");
  return false;
});


// Gallery functions

(function($) {

  'use strict';

  var App = {

    /**
     * Init Function
     */
    init: function() {
      App.gallery();
    },

    /**
     * Gallery
     */
    gallery: function() {
      $('.gallery-nav a').on('click', function(e) {
        var src = $(this).attr('data-image');

        $('.gallery-img .attachment-large-image').attr('src', src);
        return false;
      });

      $('.gallery-nav-two a').on('click', function(e) {
        var src = $(this).attr('data-image');

        $('.gallery-img-two .attachment-large-image-two').attr('src', src);
        return false;
      });

      $('.gallery-nav-three a').on('click', function(e) {
        var src = $(this).attr('data-image');

        $('.gallery-img-three .attachment-large-image-three').attr('src', src);
        return false;
      });
    }
};

  $(function() {
    App.init();
  });

})(jQuery);

// var message="Do Not Steal Photos!";

//   function clickIE4(){
//     if (event.button==2){ alert(message); return false; } }

//   function clickNS4(e){
//     if (document.layers||document.getElementById&&!document.all){ if (e.which==2||e.which==3){ alert(message); return false; } } }
//     if (document.layers){ document.captureEvents(Event.MOUSEDOWN); document.onmousedown=clickNS4; }
//       else if (document.all&&!document.getElementById){ document.onmousedown=clickIE4; }
//     document.oncontextmenu=new Function("alert(message);return false")






;
