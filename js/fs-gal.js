/**
 * Author: Tim Vervoort - info@timvervoort.com
 * Licence: Free for commercial use
 * Last update: 8th November 2017 - v1.0
 */
$('document').ready(function() {
  //Make gallery objects clickable
  $('.fs-gal').click(function() {
    fsGal_DisplayImage($(this));
  });
  //Display gallery
  function fsGal_DisplayImage(obj) {
    //Clear navigation buttons
    $('.fs-gal-view > .fs-gal-prev').fadeOut();
    $('.fs-gal-view > .fs-gal-next').fadeOut();
    //Set current image
    var title = obj.attr('alt');
    if (!title || title == '') { title = obj.attr('title'); }
    $('.fs-gal-view > h1').text(title);
    if (!title || title == '') { $('.fs-gal-view > h1').fadeOut(); }
    else { $('.fs-gal-view > h1').fadeIn(); }
    var img = obj.data('url');
    $('.fs-gal-view').css('background-image', 'url('+img+')');
    //Create buttons
    var current = $('.fs-gal').index(obj);
    var prev = current - 1;
    var next = current + 1;
    if (prev >= 0) {
      $('.fs-gal-view > .fs-gal-prev').data('img-index', prev);
      $('.fs-gal-view > .fs-gal-prev').fadeIn();
    }
    if (next < $('.fs-gal').length) {
      $('.fs-gal-view > .fs-gal-next').data('img-index', next);
      $('.fs-gal-view > .fs-gal-next').fadeIn();
    }
    $('.fs-gal-view').fadeIn(); //Display gallery
  }
  //Gallery navigation
  $('.fs-gal-view .fs-gal-nav').click(function() {
    var index = $(this).data('img-index');
    var img = $($('.fs-gal').get(index));
    fsGal_DisplayImage(img);
  });
  //Close gallery
  $('.fs-gal-view .fs-gal-close').click(function() {
    $('.fs-gal-view').fadeOut();
  });
  //Keyboard navigation
  $('body').keydown(function(e) {
    if (e.keyCode == 37) {
      $('.fs-gal-view .fs-gal-prev').click(); //Left arrow
    }
    else if(e.keyCode == 39) { // right
      $('.fs-gal-view .fs-gal-next').click(); //Right arrow
    }
    else if(e.keyCode == 27) { // right
      $('.fs-gal-view .fs-gal-close').click(); //ESC
    }
  });
});