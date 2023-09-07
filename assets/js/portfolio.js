"use strict";
/**
 *	
 *	Developed by: Lisa DeBona	
 */
jQuery(document).ready(function ($) {

  var $win = $(window),
      $con = $('.grid');

  $con.each( function(){
    var grid = $(this);
    var $container = grid.imagesLoaded( function() {
      $container.isotope({
        itemSelector: '.grid-item',
        percentPosition: true,
        // masonry: {
        //   gutter: 20
        //   //columnWidth: '.grid-sizer'
        // }
       });
    });
  });

  $con.on('layoutComplete', function(){
    $win.trigger("scroll");
  });

  

  Fancybox.bind('[data-fancybox="gallery"]', {
    on: {
      done: (fancybox, slide) => {
        if (fancybox.isCurrentSlide(slide)) {
          //console.log(`The main slide #${slide.index} has finished revealing`);
        } else {
          // console.log(
          //   `Slide #${slide.index} is preloaded and the content is revealed`
          // );
        }
      },
    },
  });


  
}); 